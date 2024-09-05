<?php 
namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\ConsultantModel;
use App\Models\ClientPoliciesModel; // Usaremos este modelo para client_policies
use App\Models\DocumentVersionModel; // Usaremos este modelo para client_policies
use App\Models\PolicyTypeModel; // Usaremos este modelo para client_policies

use CodeIgniter\Controller;

class SGSSTPlanear extends Controller
{
    public function responsableDelSGSST()
    {
        // Obtener el ID del cliente desde la sesión
        $session = session();
        $clientId = $session->get('user_id'); // Asegúrate de que este ID es el del cliente

        $clientModel = new ClientModel();
        $consultantModel = new ConsultantModel();

        // Obtener los datos del cliente
        $client = $clientModel->find($clientId);

        // Verificar si se obtuvo correctamente el cliente
        if (!$client) {
            return redirect()->to('/dashboardclient')->with('error', 'No se pudo encontrar la información del cliente');
        }

        // Verificar si el cliente tiene un consultor asignado
        if (empty($client['id_consultor'])) {
            return redirect()->to('/dashboardclient')->with('error', 'El cliente no tiene un consultor asignado');
        }

        // Obtener los datos del consultor relacionado con el cliente
        $consultant = $consultantModel->find($client['id_consultor']);

        if (!$consultant) {
            return redirect()->to('/dashboardclient')->with('error', 'No se pudo encontrar la información del consultor');
        }

        $data = [
            'client' => $client,
            'consultant' => $consultant,
        ];

        return view('client/sgsst/1planear/responsabledelsgsst', $data);
    }



    public function policyNoAlcoholDrogas()
{
    // Obtener el ID del cliente desde la sesión
    $session = session();
    $clientId = $session->get('user_id'); // Asegúrate de que este ID es el del cliente

    $clientModel = new ClientModel();
    $consultantModel = new ConsultantModel();
    $clientPoliciesModel = new ClientPoliciesModel();
    $policyTypeModel = new PolicyTypeModel();
    $versionModel = new DocumentVersionModel();

    // Obtener los datos del cliente
    $client = $clientModel->find($clientId);

    // Verificar si se obtuvo correctamente el cliente
    if (!$client) {
        return redirect()->to('/dashboardclient')->with('error', 'No se pudo encontrar la información del cliente');
    }

    // Obtener los datos del consultor relacionado con el cliente
    $consultant = $consultantModel->find($client['id_consultor']);
    if (!$consultant) {
        return redirect()->to('/dashboardclient')->with('error', 'No se pudo encontrar la información del consultor');
    }

    // Obtener la política de alcohol y drogas del cliente
    $policyTypeId = 1; // Supongamos que el ID de la política de alcohol y drogas es 1
    $clientPolicy = $clientPoliciesModel->where('client_id', $clientId)
                                        ->where('policy_type_id', $policyTypeId)
                                        ->first();
    if (!$clientPolicy) {
        return redirect()->to('/dashboardclient')->with('error', 'No se encontró la política de No Alcohol, Drogas y Tabaco para este cliente.');
    }

    // Obtener el tipo de política (Nombre del tipo de política)
    $policyType = $policyTypeModel->find($policyTypeId);

    // Obtener la versión del documento
    $documentVersion = $versionModel->where('client_id', $clientId)
                                    ->where('policy_type_id', $policyTypeId)
                                    ->orderBy('created_at', 'DESC')
                                    ->first();

    if (!$documentVersion) {
        return redirect()->to('/dashboardclient')->with('error', 'No se encontró una versión de la política para este cliente.');
    }

    // Pasar los datos a la vista
    $data = [
        'client' => $client,
        'consultant' => $consultant,
        'clientPolicy' => $clientPolicy,
        'policyType' => $policyType,
        'documentVersion' => $documentVersion,
    ];

    return view('client/sgsst/1planear/no_alcohol_drogas', $data);
}



  
}



?>