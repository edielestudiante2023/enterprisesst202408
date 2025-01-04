<<<<<<< HEAD
<?php

namespace App\Controllers;

use App\Models\EvaluationModel;
use App\Models\ClientModel;
use CodeIgniter\Controller;

class ClientEvaluationController extends Controller
{
    public function listEvaluaciones($id_cliente)
    {
        // Modelos
        $evaluationModel = new EvaluationModel();
        $clientModel = new ClientModel();

        // Verificar que el cliente existe
        $client = $clientModel->find($id_cliente);
        if (!$client) {
            return redirect()->to('/dashboardclient')->with('error', 'Cliente no encontrado.');
        }

        // Obtener todas las evaluaciones del cliente
        $evaluaciones = $evaluationModel->where('id_cliente', $id_cliente)->findAll();

        // Sumar puntaje_cuantitativo y valor
        $sum_puntaje_cuantitativo = array_sum(array_column($evaluaciones, 'puntaje_cuantitativo'));
        $sum_valor = array_sum(array_column($evaluaciones, 'valor'));

        // Calcular el indicador general
        $indicador_general = ($sum_valor != 0) ? $sum_puntaje_cuantitativo / $sum_valor : 0;

        // Contar y sumar valores por cada categoría (Cumple Totalmente, No Cumple, No Aplica)
        $count_cumple = $count_no_cumple = $count_no_aplica = 0;
        $sum_puntaje_cumple = $sum_puntaje_no_cumple = $sum_puntaje_no_aplica = 0;
        $sum_valor_cumple = $sum_valor_no_cumple = $sum_valor_no_aplica = 0;

        foreach ($evaluaciones as $evaluacion) {
            switch ($evaluacion['evaluacion_inicial']) {
                case 'CUMPLE TOTALMENTE':
                    $count_cumple++;
                    $sum_puntaje_cumple += $evaluacion['puntaje_cuantitativo'];
                    $sum_valor_cumple += $evaluacion['valor'];
                    break;
                case 'NO CUMPLE':
                    $count_no_cumple++;
                    $sum_puntaje_no_cumple += $evaluacion['puntaje_cuantitativo'];
                    $sum_valor_no_cumple += $evaluacion['valor'];
                    break;
                case 'NO APLICA':
                    $count_no_aplica++;
                    $sum_puntaje_no_aplica += $evaluacion['puntaje_cuantitativo'];
                    $sum_valor_no_aplica += $evaluacion['valor'];
                    break;
            }
        }

        // Calcular indicadores por categoría
        $indicador_cumple = ($sum_valor_cumple != 0) ? $sum_puntaje_cumple / $sum_valor_cumple : 0;
        $indicador_no_cumple = ($sum_valor_no_cumple != 0) ? $sum_puntaje_no_cumple / $sum_valor_no_cumple : 0;
        $indicador_no_aplica = ($sum_valor_no_aplica != 0) ? $sum_puntaje_no_aplica / $sum_valor_no_aplica : 0;

        // Pasar los datos a la vista
        return view('client/list_evaluaciones', [
            'evaluaciones' => $evaluaciones,
            'client' => $client,
            'sum_puntaje_cuantitativo' => $sum_puntaje_cuantitativo,
            'sum_valor' => $sum_valor,
            'indicador_general' => $indicador_general,
            'count_cumple' => $count_cumple,
            'sum_puntaje_cumple' => $sum_puntaje_cumple,
            'sum_valor_cumple' => $sum_valor_cumple,
            'indicador_cumple' => $indicador_cumple,
            'count_no_cumple' => $count_no_cumple,
            'sum_puntaje_no_cumple' => $sum_puntaje_no_cumple,
            'sum_valor_no_cumple' => $sum_valor_no_cumple,
            'indicador_no_cumple' => $indicador_no_cumple,
            'count_no_aplica' => $count_no_aplica,
            'sum_puntaje_no_aplica' => $sum_puntaje_no_aplica,
            'sum_valor_no_aplica' => $sum_valor_no_aplica,
            'indicador_no_aplica' => $indicador_no_aplica
        ]);
    }
}
=======
<?php

namespace App\Controllers;

use App\Models\EvaluationModel;
use App\Models\ClientModel;
use CodeIgniter\Controller;

class ClientEvaluationController extends Controller
{
    public function listEvaluaciones($id_cliente)
    {
        // Modelos
        $evaluationModel = new EvaluationModel();
        $clientModel = new ClientModel();

        // Verificar que el cliente existe
        $client = $clientModel->find($id_cliente);
        if (!$client) {
            return redirect()->to('/dashboardclient')->with('error', 'Cliente no encontrado.');
        }

        // Obtener todas las evaluaciones del cliente
        $evaluaciones = $evaluationModel->where('id_cliente', $id_cliente)->findAll();

        // Sumar puntaje_cuantitativo y valor
        $sum_puntaje_cuantitativo = array_sum(array_column($evaluaciones, 'puntaje_cuantitativo'));
        $sum_valor = array_sum(array_column($evaluaciones, 'valor'));

        // Calcular el indicador general
        $indicador_general = ($sum_valor != 0) ? $sum_puntaje_cuantitativo / $sum_valor : 0;

        // Contar y sumar valores por cada categoría (Cumple Totalmente, No Cumple, No Aplica)
        $count_cumple = $count_no_cumple = $count_no_aplica = 0;
        $sum_puntaje_cumple = $sum_puntaje_no_cumple = $sum_puntaje_no_aplica = 0;
        $sum_valor_cumple = $sum_valor_no_cumple = $sum_valor_no_aplica = 0;

        foreach ($evaluaciones as $evaluacion) {
            switch ($evaluacion['evaluacion_inicial']) {
                case 'CUMPLE TOTALMENTE':
                    $count_cumple++;
                    $sum_puntaje_cumple += $evaluacion['puntaje_cuantitativo'];
                    $sum_valor_cumple += $evaluacion['valor'];
                    break;
                case 'NO CUMPLE':
                    $count_no_cumple++;
                    $sum_puntaje_no_cumple += $evaluacion['puntaje_cuantitativo'];
                    $sum_valor_no_cumple += $evaluacion['valor'];
                    break;
                case 'NO APLICA':
                    $count_no_aplica++;
                    $sum_puntaje_no_aplica += $evaluacion['puntaje_cuantitativo'];
                    $sum_valor_no_aplica += $evaluacion['valor'];
                    break;
            }
        }

        // Calcular indicadores por categoría
        $indicador_cumple = ($sum_valor_cumple != 0) ? $sum_puntaje_cumple / $sum_valor_cumple : 0;
        $indicador_no_cumple = ($sum_valor_no_cumple != 0) ? $sum_puntaje_no_cumple / $sum_valor_no_cumple : 0;
        $indicador_no_aplica = ($sum_valor_no_aplica != 0) ? $sum_puntaje_no_aplica / $sum_valor_no_aplica : 0;

        // Pasar los datos a la vista
        return view('client/list_evaluaciones', [
            'evaluaciones' => $evaluaciones,
            'client' => $client,
            'sum_puntaje_cuantitativo' => $sum_puntaje_cuantitativo,
            'sum_valor' => $sum_valor,
            'indicador_general' => $indicador_general,
            'count_cumple' => $count_cumple,
            'sum_puntaje_cumple' => $sum_puntaje_cumple,
            'sum_valor_cumple' => $sum_valor_cumple,
            'indicador_cumple' => $indicador_cumple,
            'count_no_cumple' => $count_no_cumple,
            'sum_puntaje_no_cumple' => $sum_puntaje_no_cumple,
            'sum_valor_no_cumple' => $sum_valor_no_cumple,
            'indicador_no_cumple' => $indicador_no_cumple,
            'count_no_aplica' => $count_no_aplica,
            'sum_puntaje_no_aplica' => $sum_puntaje_no_aplica,
            'sum_valor_no_aplica' => $sum_valor_no_aplica,
            'indicador_no_aplica' => $indicador_no_aplica
        ]);
    }
}
>>>>>>> main
