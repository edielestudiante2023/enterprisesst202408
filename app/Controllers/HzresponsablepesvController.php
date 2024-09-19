<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\ConsultantModel;
use App\Models\ClientPoliciesModel;
use App\Models\DocumentVersionModel;
use App\Models\PolicyTypeModel;
use App\Models\VigiaModel; // Importamos el modelo de Vigias

use Dompdf\Dompdf;

use CodeIgniter\Controller;

class HzresponsablepesvController extends Controller
{
    public function responsablePesv()
    {
        // Obtener el ID del cliente desde la sesión
        $session = session();
        $clientId = $session->get('user_id'); // Asegúrate de que este ID es el del cliente

        $clientModel = new ClientModel();
        $consultantModel = new ConsultantModel();
        $clientPoliciesModel = new ClientPoliciesModel();
        $policyTypeModel = new PolicyTypeModel();
        $versionModel = new DocumentVersionModel();
        $vigiaModel = new VigiaModel(); // Instanciar el modelo de Vigias

        // Obtener los datos del cliente
        $client = $clientModel->find($clientId);
        if (!$client) {
            return redirect()->to('/dashboardclient')->with('error', 'No se pudo encontrar la información del cliente');
        }

        // Obtener los datos del consultor relacionado con el cliente
        $consultant = $consultantModel->find($client['id_consultor']);
        if (!$consultant) {
            return redirect()->to('/dashboardclient')->with('error', 'No se pudo encontrar la información del consultor');
        }

        // Obtener la política de alcohol y drogas del cliente
        $policyTypeId = 37; // Supongamos que el ID de la política de alcohol y drogas es 1
        $clientPolicy = $clientPoliciesModel->where('client_id', $clientId)
            ->where('policy_type_id', $policyTypeId)
            ->orderBy('id', 'DESC')
            ->first();
        if (!$clientPolicy) {
            return redirect()->to('/dashboardclient')->with('error', 'No se encontró este documento para este cliente.');
        }

        // Obtener el tipo de política
        $policyType = $policyTypeModel->find($policyTypeId);

        // Obtener la versión más reciente del documento
        $latestVersion = $versionModel->where('client_id', $clientId)
            ->where('policy_type_id', $policyTypeId)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$latestVersion) {
            return redirect()->to('/dashboardclient')->with('error', 'No se encontró un versionamiento para este documento de este cliente.');
        }

        // Obtener todas las versiones del documento
        $allVersions = $versionModel->where('client_id', $clientId)
            ->where('policy_type_id', $policyTypeId)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        if (!$allVersions) {
            return redirect()->to('/dashboardclient')->with('error', 'No se encontró un versionamiento para este documento de este cliente.');
        }

        // Obtener el vigía más reciente relacionado con el cliente
        $latestVigia = $vigiaModel->where('id_cliente', $clientId)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$latestVigia) {
            return redirect()->to('/dashboardclient')->with('error', 'No se encontró información de vigías para este cliente.');
        }

        // Pasar los datos a la vista
        $data = [
            'client' => $client,
            'consultant' => $consultant,
            'clientPolicy' => $clientPolicy,
            'policyType' => $policyType,
            'latestVersion' => $latestVersion,
            'allVersions' => $allVersions,  // Pasamos todas las versiones al footer
            'latestVigia' => $latestVigia   // Pasamos la información del vigía más reciente
        ];

        return view('client/sgsst/1planear/h2_1_1responsablepesv', $data);
    }

    public function generatePdf_responsablePesv()
    {
        // Instanciar Dompdf
        $dompdf = new Dompdf();
        $dompdf->set_option('isRemoteEnabled', true);

        // Obtener los mismos datos que en la función asignacionResponsabilidades
        $session = session();
        $clientId = $session->get('user_id');

        $clientModel = new ClientModel();
        $consultantModel = new ConsultantModel();
        $clientPoliciesModel = new ClientPoliciesModel();
        $policyTypeModel = new PolicyTypeModel();
        $versionModel = new DocumentVersionModel();
        $vigiaModel = new VigiaModel(); // Instanciar el modelo de Vigias

        // Obtener los datos necesarios
        $client = $clientModel->find($clientId);
        $consultant = $consultantModel->find($client['id_consultor']);
        $policyTypeId = 37; // Supongamos que el ID de la política de alcohol y drogas es 1
        $clientPolicy = $clientPoliciesModel->where('client_id', $clientId)
            ->where('policy_type_id', $policyTypeId)
            ->orderBy('id', 'DESC')
            ->first();
        $policyType = $policyTypeModel->find($policyTypeId);
        $latestVersion = $versionModel->where('client_id', $clientId)
            ->where('policy_type_id', $policyTypeId)
            ->orderBy('created_at', 'DESC')
            ->first();
        $allVersions = $versionModel->where('client_id', $clientId)
            ->where('policy_type_id', $policyTypeId)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        // Obtener el vigía más reciente relacionado con el cliente
        $latestVigia = $vigiaModel->where('id_cliente', $clientId)
            ->orderBy('created_at', 'DESC')
            ->first();

        // Preparar los datos para la vista
        $data = [
            'client' => $client,
            'consultant' => $consultant,
            'clientPolicy' => $clientPolicy,
            'policyType' => $policyType,
            'latestVersion' => $latestVersion,
            'allVersions' => $allVersions,  // Pasamos todas las versiones al footer
            'latestVigia' => $latestVigia   // Pasamos la información del vigía más reciente
        ];

        // Cargar la vista y pasar los datos
        $html = view('client/sgsst/1planear/h2_1_1responsablepesv', $data);

        // Cargar el HTML en Dompdf
        $dompdf->loadHtml($html);

        // Configurar el tamaño del papel y la orientación
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar el PDF
        $dompdf->render();

        // Enviar el PDF al navegador para descargar
        $dompdf->stream('responsablepesv.pdf', ['Attachment' => false]);
    }
}

