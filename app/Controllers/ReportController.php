<?php

namespace App\Controllers;

use App\Models\ReporteModel;
use App\Models\ClientModel;
use CodeIgniter\Controller;

class ReportController extends Controller
{
    public function index()
    {
        $model = new ReporteModel();
        $clientModel = new ClientModel();

        // Recuperar el parámetro de filtrado
        $clientId = $this->request->getGet('id_cliente');

        // Si se ha seleccionado un cliente específico, filtrar los reportes por ese cliente
        if ($clientId) {
            // Modificación: Añadir filtrado por id_cliente
            $reports = $model->where('id_cliente', $clientId)->orderBy('created_at', 'DESC')->findAll();
        } else {
            $reports = $model->orderBy('created_at', 'DESC')->findAll();
        }

        $clients = $clientModel->findAll();

        $data = [
            'reports' => $reports,
            'clients' => $clients
        ];

        // Modificación: Asegurarse de pasar los datos necesarios a la vista add_report
        return view('consultant/add_report', $data);
    }

    public function reportList()
    {
        $model = new ReporteModel();
        $clientModel = new ClientModel();

        // Recuperar el parámetro de filtrado
        $clientId = $this->request->getGet('id_cliente');

        // Si se ha seleccionado un cliente específico, filtrar los reportes por ese cliente
        if ($clientId) {
            // Modificación: Añadir filtrado por id_cliente
            $reports = $model->where('id_cliente', $clientId)->orderBy('created_at', 'DESC')->findAll();
        } else {
            $reports = $model->orderBy('created_at', 'DESC')->findAll();
        }

        $clients = $clientModel->findAll();

        $data = [
            'reports' => $reports,
            'clients' => $clients
        ];

        // Modificación: Asegurarse de pasar los datos necesarios a la vista report_list
        return view('consultant/report_list', $data);
    }


    public function addReport()
    {
        $clientModel = new ClientModel();
        $clients = $clientModel->findAll();

        $data = [
            'clients' => $clients
        ];

        return view('consultant/add_report', $data);
    }

    public function addReportPost()
    {
        $model = new ReporteModel();

        // Obtener id_consultor de la sesión
        $consultantId = session()->get('user_id');

        $data = [
            'titulo_reporte' => $this->request->getVar('titulo_reporte'),
            'Tipo_documento' => $this->request->getVar('Tipo_documento'),
            'enlace' => $this->request->getVar('enlace'),
            'estado' => $this->request->getVar('estado'),
            'observaciones' => $this->request->getVar('observaciones'),
            'id_cliente' => $this->request->getVar('id_cliente'),
            'id_consultor' => $consultantId, // Usar id_consultor de la sesión
            'created_at' => date('Y-m-d H:i:s'), // Asegurarse de que se cree el campo created_at
            'updated_at' => date('Y-m-d H:i:s')  // Asegurarse de que se cree el campo updated_at
        ];

        if ($model->save($data)) {
            return redirect()->to('/dashboardconsultant')->with('msg', 'Reporte agregado exitosamente');
        } else {
            return redirect()->to('/addReport')->with('msg', 'Error al agregar reporte');
        }
    }

    public function editReport($id)
    {
        $model = new ReporteModel();
        $report = $model->find($id);

        $clientModel = new ClientModel();
        $clients = $clientModel->findAll();

        $data = [
            'report' => $report,
            'clients' => $clients
        ];

        return view('consultant/edit_report', $data);
    }

    public function editReportPost($id)
    {
        $model = new ReporteModel();

        $data = [
            'titulo_reporte' => $this->request->getVar('titulo_reporte'),
            'Tipo_documento' => $this->request->getVar('Tipo_documento'),
            'enlace' => $this->request->getVar('enlace'),
            'estado' => $this->request->getVar('estado'),
            'observaciones' => $this->request->getVar('observaciones'),
            'id_cliente' => $this->request->getVar('id_cliente'),
            'updated_at' => date('Y-m-d H:i:s') // Asegurarse de que se actualice el campo updated_at
        ];

        if ($model->update($id, $data)) {
            return redirect()->to('/dashboardconsultant')->with('msg', 'Reporte actualizado exitosamente');
        } else {
            return redirect()->to('/editReport/' . $id)->with('msg', 'Error al actualizar reporte');
        }
    }

    public function deleteReport($id)
    {
        $model = new ReporteModel();
        $model->delete($id);
        return redirect()->to('/dashboardconsultant')->with('msg', 'Reporte eliminado exitosamente');
    }
}
