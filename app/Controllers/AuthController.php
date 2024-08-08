<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\ConsultantModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $role = $this->request->getVar('role'); // 'client' or 'consultant'

        if ($role === 'client') {
            $clientModel = new ClientModel();
            $client = $clientModel->where('correo_cliente', $username)->first();
            if ($client && password_verify($password, $client['password'])) {
                $session->set([
                    'user_id' => $client['id_cliente'],
                    'role' => 'client',
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboardclient');
            }
        } elseif ($role === 'consultant') {
            $consultantModel = new ConsultantModel();
            $consultant = $consultantModel->where('correo_consultor', $username)->first();
            if ($consultant && password_verify($password, $consultant['password'])) {
                $session->set([
                    'user_id' => $consultant['id_consultor'],
                    'role' => 'consultant',
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboardconsultant');
            }
        }

        $session->setFlashdata('msg', 'Correo electrónico o contraseña incorrectos');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
