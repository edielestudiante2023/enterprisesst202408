<?php

namespace App\Controllers;

use App\Models\ClientModel;
use CodeIgniter\Controller;
use App\Models\ReporteModel;

class ClientController extends Controller
{
    public function index()
    {
        $session = session();
        $clientId = $session->get('user_id');

        $model = new ClientModel();
        $client = $model->find($clientId);

        if (!$client) {
            return redirect()->to('/login')->with('error', 'Cliente no encontrado');
        }

        $data = [
            'client' => $client
        ];

        return view('client/dashboard', $data);
    }

    public function dashboard()
    {
        // Iniciar la sesión y obtener el ID del cliente
        $session = session();
        $clientId = $session->get('user_id');

        // Depurar: Verificar el ID del cliente
        var_dump($clientId);
        exit;

        // Recuperar los reportes relacionados con el ID del cliente
        $reportModel = new ReporteModel();
        $reports = $reportModel->where('id_cliente', $clientId)->orderBy('created_at', 'DESC')->findAll();

        // Depurar: Verificar los reportes que se están recuperando
        var_dump($reports);
        exit;

        // Pasar los reportes a la vista
        $data = [
            'reports' => $reports
        ];

        return view('client/dashboard', $data);
    }

    public function documento()
{
    return view('client/documento');
}

}
