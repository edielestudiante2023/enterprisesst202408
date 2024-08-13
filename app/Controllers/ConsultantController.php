<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\ConsultantModel;
use App\Models\ReporteModel;
use CodeIgniter\Controller;

class ConsultantController extends Controller
{
    public function index()
    {
        return view('consultant/dashboard');
    }

    public function addClient()
    {
        $consultantModel = new ConsultantModel();
        $consultants = $consultantModel->findAll(); // Recupera todos los consultores

        // Verifica que los consultores se están cargando
        if (empty($consultants)) {
            log_message('error', 'No se encontraron consultores en la base de datos.');
        }

        // Pasa los consultores a la vista
        $data = [
            'consultants' => $consultants
        ];
        return view('consultant/add_client', $data);
    }

    /* http://localhost/enterprise-sst202408/public/index.php/addClient */

    public function addClientPost()
    {
        $clientModel = new ClientModel();

        // Aquí añadimos el código para obtener el id_consultor desde el formulario
        $id_consultor = $this->request->getPost('id_consultor');
        if (empty($id_consultor)) {
            return redirect()->back()->with('error', 'Debe seleccionar un consultor.');
        }

        $data = [
            'datetime' => date('Y-m-d H:i:s'),
            'fecha_ingreso' => $this->request->getVar('fecha_ingreso'),
            'nit_cliente' => $this->request->getVar('nit_cliente'),
            'nombre_cliente' => $this->request->getVar('nombre_cliente'),
            'usuario' => $this->request->getVar('usuario'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'correo_cliente' => $this->request->getVar('correo_cliente'),
            'telefono_1_cliente' => $this->request->getVar('telefono_1_cliente'),
            'telefono_2_cliente' => $this->request->getVar('telefono_2_cliente'),
            'direccion_cliente' => $this->request->getVar('direccion_cliente'),
            'persona_contacto_compras' => $this->request->getVar('persona_contacto_compras'),
            'codigo_actividad_economica' => $this->request->getVar('codigo_actividad_economica'),
            'nombre_rep_legal' => $this->request->getVar('nombre_rep_legal'),
            'cedula_rep_legal' => $this->request->getVar('cedula_rep_legal'),
            'fecha_fin_contrato' => $this->request->getVar('fecha_fin_contrato'),
            'ciudad_cliente' => $this->request->getVar('ciudad_cliente'),
            'estado' => 'activo',
            'id_consultor' => $id_consultor,  // Modificado para usar el valor del formulario
        ];

        if ($clientModel->save($data)) {
            session()->setFlashdata('msg', 'Cliente agregado exitosamente');
            return redirect()->to('/addClient');
        } else {
            session()->setFlashdata('msg', 'Error al agregar cliente');
            return redirect()->to('/addClient');
        }

        return redirect()->to('/addClient');
    }

    public function addConsultant()
    {
        return view('consultant/add_consultant');
    }

    /* http://localhost/enterprise-sst202408/public/addConsultant */





    public function addConsultantPost()
    {
        $consultantModel = new ConsultantModel();

        $data = [
            'nombre_consultor' => $this->request->getVar('nombre_consultor'),
            'cedula_consultor' => $this->request->getVar('cedula_consultor'),
            'usuario' => $this->request->getVar('usuario'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'correo_consultor' => $this->request->getVar('correo_consultor'),
            'telefono_consultor' => $this->request->getVar('telefono_consultor'),
            'numero_licencia' => $this->request->getVar('numero_licencia'),
            'id_cliente' => $this->request->getVar('id_cliente'),
        ];

        // Manejar la subida de la foto
        $photo = $this->request->getFile('foto_consultor');
        if ($photo && $photo->isValid() && !$photo->hasMoved()) {
            $photoName = $photo->getRandomName();
            $photo->move(ROOTPATH . 'public/uploads', $photoName);
            $data['foto_consultor'] = $photoName;
        }

        // Manejar la subida de la firma
        $signature = $this->request->getFile('firma_consultor');
        if ($signature && $signature->isValid() && !$signature->hasMoved()) {
            $signatureName = $signature->getRandomName();
            $signature->move(ROOTPATH . 'public/uploads', $signatureName);
            $data['firma_consultor'] = $signatureName;
        }

        if ($consultantModel->save($data)) {
            return redirect()->to('/addConsultant')->with('msg', 'Consultor agregado exitosamente');
        } else {
            return redirect()->to('/addConsultant')->with('msg', 'Error al agregar consultor');
        }
    }






    /* public function dashboard()
    {
        // Instanciar los modelos
        $clientModel = new ClientModel();
        $reportModel = new ReporteModel();

        // Recuperar los datos
        $clients = $clientModel->findAll();
        $reports = $reportModel->orderBy('created_at', 'DESC')->findAll();

        // Verificar que los datos están siendo recuperados correctamente
        var_dump($clients);
        var_dump($reports);
        exit; // Detener la ejecución para ver los datos

        // Pasar los datos a la vista
        $data = [
            'clients' => $clients,
            'reports' => $reports
        ];

        return view('consultant/dashboard', $data);
    } */

    public function listConsultants()
    {
        $consultantModel = new ConsultantModel();
        $consultants = $consultantModel->findAll();

        $data = [
            'consultants' => $consultants
        ];

        return view('consultant/list_consultants', $data);
    }

    public function editConsultant($id)
    {
        $consultantModel = new ConsultantModel();
        $consultant = $consultantModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $data = [
                'nombre_consultor' => $this->request->getVar('nombre_consultor'),
                'cedula_consultor' => $this->request->getVar('cedula_consultor'),
                'usuario' => $this->request->getVar('usuario'),
                'correo_consultor' => $this->request->getVar('correo_consultor'),
                'telefono_consultor' => $this->request->getVar('telefono_consultor'),
                'numero_licencia' => $this->request->getVar('numero_licencia')
            ];

            $photo = $this->request->getFile('foto_consultor');
            if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                $photoName = $photo->getRandomName();
                $photo->move(ROOTPATH . 'public/uploads', $photoName); // Guarda en la carpeta correcta
                $data['foto_consultor'] = $photoName;
            }


            if ($consultantModel->update($id, $data)) {
                session()->setFlashdata('msg', 'Consultor actualizado exitosamente');
                return redirect()->to('/listConsultants');
            } else {
                session()->setFlashdata('msg', 'Error al actualizar consultor');
                return redirect()->to('/addConsultant');
            }
        }

        $data = ['consultant' => $consultant];
        return view('consultant/edit_consultant', $data);
    }

    public function deleteConsultant($id)
    {
        $consultantModel = new ConsultantModel();
        if ($consultantModel->delete($id)) {
            session()->setFlashdata('msg', 'Consultor eliminado exitosamente');
        } else {
            session()->setFlashdata('msg', 'Error al eliminar consultor');
        }

        return redirect()->to('/listConsultants');
    }

    public function showPhoto($id)
    {
        $consultantModel = new ConsultantModel();
        $consultant = $consultantModel->find($id);

        if (!$consultant || empty($consultant['foto_consultor'])) {
            return redirect()->to('/listConsultants')->with('msg', 'Foto no encontrada o consultor no tiene foto.');
        }

        $data = [
            'foto' => $consultant['foto_consultor']
        ];

        return view('consultant/show_photo', $data);
    }


    public function editConsultantPost($id)
    {
        $consultantModel = new ConsultantModel();
        $consultant = $consultantModel->find($id);

        if (!$consultant) {
            return redirect()->to('/listConsultants')->with('msg', 'Consultor no encontrado');
        }

        // Datos que siempre se actualizarán
        $data = [
            'nombre_consultor' => $this->request->getVar('nombre_consultor'),
            'cedula_consultor' => $this->request->getVar('cedula_consultor'),
            'usuario' => $this->request->getVar('usuario'),
            'correo_consultor' => $this->request->getVar('correo_consultor'),
            'telefono_consultor' => $this->request->getVar('telefono_consultor'),
            'numero_licencia' => $this->request->getVar('numero_licencia'),
            'id_cliente' => $this->request->getVar('id_cliente')
        ];

        // Manejar la subida de una nueva imagen
        $newPhoto = $this->request->getFile('foto_consultor');
        if ($newPhoto && $newPhoto->isValid() && !$newPhoto->hasMoved()) {
            $newPhotoName = $newPhoto->getRandomName();
            $newPhoto->move(ROOTPATH . 'public/uploads', $newPhotoName);

            // Eliminar la imagen anterior si existe
            if (!empty($consultant['foto_consultor']) && file_exists(ROOTPATH . 'public/uploads/' . $consultant['foto_consultor'])) {
                unlink(ROOTPATH . 'public/uploads/' . $consultant['foto_consultor']);
            }

            // Actualizar el campo en la base de datos
            $data['foto_consultor'] = $newPhotoName;
        }

        // Guardar los datos actualizados
        if ($consultantModel->update($id, $data)) {
            return redirect()->to('/listConsultants')->with('msg', 'Consultor actualizado exitosamente');
        } else {
            return redirect()->to('/editConsultant/' . $id)->with('msg', 'Error al actualizar consultor');
        }

        // Manejar la subida de una nueva firma
        $newSignature = $this->request->getFile('firma_consultor');
        if ($newSignature && $newSignature->isValid() && !$newSignature->hasMoved()) {
            $newSignatureName = $newSignature->getRandomName();
            $newSignature->move(ROOTPATH . 'public/uploads', $newSignatureName);

            // Eliminar la firma anterior si existe
            if (!empty($consultant['firma_consultor']) && file_exists(ROOTPATH . 'public/uploads/' . $consultant['firma_consultor'])) {
                unlink(ROOTPATH . 'public/uploads/' . $consultant['firma_consultor']);
            }

            // Actualizar el campo en la base de datos
            $data['firma_consultor'] = $newSignatureName;
        }
    }
}
