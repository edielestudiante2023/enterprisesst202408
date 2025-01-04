<<<<<<< HEAD
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
                return redirect()->to('/dashboard');
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
    // Destruir la sesión por completo
    $session = session();
    $session->destroy(); // Esto eliminará la sesión en todas las ventanas

    // Redirigir al usuario a la página de inicio de sesión o página principal
    return redirect()->to('/login');
}
}
=======
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
                return redirect()->to('/dashboard');
            }
        } elseif ($role === 'consultant') {
            $consultantModel = new ConsultantModel();
            $consultant = $consultantModel->where('correo_consultor', $username)->first();
            if ($consultant && password_verify($password, $consultant['password'])) {
                if ($consultant['rol'] === 'admin') {
                    $session->set([
                        'user_id' => $consultant['id_consultor'],
                        'role' => $consultant['rol'],
                        'isLoggedIn' => true
                    ]);
                    return redirect()->to('/admindashboard'); // Redirigir al dashboard de administrador
                } elseif ($consultant['rol'] === 'consultant') {
                    $session->set([
                        'user_id' => $consultant['id_consultor'],
                        'role' => $consultant['rol'],
                        'isLoggedIn' => true
                    ]);
                    return redirect()->to('/dashboardconsultant'); // Redirigir al dashboard de consultores
                }
            }
        }

        $session->setFlashdata('msg', 'Correo electrónico o contraseña incorrectos');
        return redirect()->to('/login');
    }

 



    public function logout()
{
    // Destruir la sesión por completo
    $session = session();
    $session->destroy(); // Esto eliminará la sesión en todas las ventanas

    // Redirigir al usuario a la página de inicio de sesión o página principal
    return redirect()->to('/login');
}
}
>>>>>>> main
