<?php

namespace App\Controllers;

use App\Models\ReporteModel;
use App\Models\ClientModel;
use App\Models\ReportTypeModel;
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
        $reporteModel = new ReporteModel();
        $reportTypeModel = new ReportTypeModel();
        $clientModel = new ClientModel();

        // Obtener todos los reportes
        $reports = $reporteModel->findAll();

        // Obtener todos los tipos de reporte
        $reportTypes = $reportTypeModel->findAll();

        // Obtener todos los clientes
        $clients = $clientModel->findAll();

        $data = [
            'reports' => $reports,
            'reportTypes' => $reportTypes,
            'clients' => $clients
        ];

        // Modificación: Asegurarse de pasar los datos necesarios a la vista report_list
        return view('consultant/report_list', $data);
    }


    public function addReport()
    {
        $documentTypeModel = new \App\Models\ReportTypeModel();
        $reportTypes = $documentTypeModel->findAll();

        $clientModel = new ClientModel();
        $clients = $clientModel->findAll();

        $data = [
            'reportTypes' => $reportTypes,
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
            'id_report_type' => $this->request->getVar('id_report_type'),
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

        $documentTypeModel = new \App\Models\ReportTypeModel();
        $reportTypes = $documentTypeModel->findAll();

        $clientModel = new ClientModel();
        $clients = $clientModel->findAll();

        $data = [
            'report' => $report,
            'reportTypes' => $reportTypes,
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
            'id_report_type' => $this->request->getVar('id_report_type'),
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

    public function dashboard()
    {
        $clientModel = new ClientModel();
        $clients = $clientModel->findAll();

        $reportModel = new ReporteModel();
        $reports = $reportModel->orderBy('created_at', 'DESC')->findAll();

        // Verificar qué datos se están pasando a la vista
        var_dump($clients);
        var_dump($reports);
        exit;

        $data = [
            'clients' => $clients,
            'reports' => $reports
        ];

        return view('consultant/dashboard', $data);
    }
}
