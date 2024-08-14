<?php 
namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\ConsultantModel;
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
}

?>