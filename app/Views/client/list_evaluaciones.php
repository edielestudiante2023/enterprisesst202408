
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación del Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Estilo para asegurar altura uniforme de filas */
    .styled-table tbody tr {
        height: 50px; /* Ajusta la altura según lo necesites */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .styled-table tbody tr td {
        vertical-align: middle; /* Centra verticalmente el contenido */
    }
</style>
</head>

<body class="bg-light">

    <div class="container my-5">
        <h2 class="mb-4 text-primary">Evaluaciones del Cliente: <?= esc($client['nombre_cliente']) ?></h2>

        <!-- Tarjetas de indicadores -->
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-light">
                    <div class="card-body bg-white">
                        <h5 class="card-title text-secondary">Total Puntaje Cuantitativo</h5>
                        <p class="display-4 font-weight-bold"><?= esc($sum_puntaje_cuantitativo) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-light">
                    <div class="card-body bg-white">
                        <h5 class="card-title text-secondary">Total Valor</h5>
                        <p class="display-4 font-weight-bold"><?= esc($sum_valor) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-light">
                    <div class="card-body bg-white">
                        <h5 class="card-title text-secondary">Indicador General</h5>
                        <p class="display-4 font-weight-bold"><?= number_format($indicador_general, 2) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicadores por categoría -->
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-light bg-light-green">
                    <div class="card-body bg-white">
                        <h5 class="card-title text-success">Cumple Totalmente</h5>
                        <p>Conteo: <?= esc($count_cumple) ?></p>
                        <p>Puntaje: <?= esc($sum_puntaje_cumple) ?></p>
                        <p>Valor: <?= esc($sum_valor_cumple) ?></p>
                        <p>Indicador: <?= number_format($indicador_cumple, 2) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-light bg-light-red">
                    <div class="card-body bg-white">
                        <h5 class="card-title text-danger">No Cumple</h5>
                        <p>Conteo: <?= esc($count_no_cumple) ?></p>
                        <p>Puntaje: <?= esc($sum_puntaje_no_cumple) ?></p>
                        <p>Valor: <?= esc($sum_valor_no_cumple) ?></p>
                        <p>Indicador: <?= number_format($indicador_no_cumple, 2) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-light bg-light-yellow">
                    <div class="card-body bg-white">
                        <h5 class="card-title text-warning">No Aplica</h5>
                        <p>Conteo: <?= esc($count_no_aplica) ?></p>
                        <p>Puntaje: <?= esc($sum_puntaje_no_aplica) ?></p>
                        <p>Valor: <?= esc($sum_valor_no_aplica) ?></p>
                        <p>Indicador: <?= number_format($indicador_no_aplica, 2) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Estado del cliente -->
        <div class="alert <?php if ($indicador_general < 0.6): ?>alert-danger<?php elseif ($indicador_general <= 0.85): ?>alert-warning<?php else: ?>alert-success<?php endif; ?> text-center" role="alert">
            <h5 class="alert-heading">
                Estado: <?php if ($indicador_general < 0.6): ?>CRÍTICO<?php elseif ($indicador_general <= 0.85): ?>MODERADAMENTE ACEPTABLE<?php else: ?>ACEPTABLE<?php endif; ?>
            </h5>
            <p><?php if ($indicador_general < 0.6): ?>
                    Si el puntaje obtenido es menor al 60%, debe realizar un plan de mejoramiento inmediato.
                <?php elseif ($indicador_general <= 0.85): ?>
                    Si el puntaje obtenido está entre el 60% y 85%, debe realizar un plan de mejoramiento.
                <?php else: ?>
                    Si el puntaje obtenido es mayor a 85%, debe mantener la calificación y continuar mejorando.
                <?php endif; ?>
            </p>
            <ol class="text-left mx-auto" style="max-width: 600px;">
                <?php if ($indicador_general < 0.6): ?>
                    <li>Realizar y tener a disposición del Ministerio del Trabajo un Plan de Mejoramiento de inmediato.</li>
                    <li>Enviar a la ARL un reporte de avances dentro de tres (3) meses después de realizada la autoevaluación.</li>
                    <li>Seguimiento anual y plan de visita a la empresa con valoración crítica, por parte del Ministerio del Trabajo.</li>
                <?php elseif ($indicador_general <= 0.85): ?>
                    <li>Realizar y tener a disposición del Ministerio del Trabajo un Plan de Mejoramiento.</li>
                    <li>Enviar a la ARL un reporte de avances dentro de seis (6) meses después de realizada la autoevaluación.</li>
                    <li>Plan de visita por parte del Ministerio del Trabajo.</li>
                <?php else: ?>
                    <li>Mantener la calificación y evidencias a disposición del Ministerio del Trabajo.</li>
                    <li>Incluir en el Plan Anual de Trabajo las mejoras que se establezcan de acuerdo con la evaluación.</li>
                <?php endif; ?>
            </ol>
        </div>

        <div>
            <table class="styled-table table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Actualización</th>
                        <th>Cliente</th>
                        <th>Ciclo</th>
                        <th>Estándar</th>
                        <th>Detalle Estándar</th>
                        <th>Estándares Mínimos</th>
                        <th>Numeral</th>
                        <th>Numerales del Cliente</th>
                        <th>Siete</th>
                        <th>Veintiún</th>
                        <th>Sesenta</th>
                        <th>Item del Estándar</th>
                        <th>Evaluación Inicial</th>
                        <th>Valor</th>
                        <th>Puntaje Cuantitativo</th>
                        <th>Item</th>
                        <th>Criterio</th>
                        <th>Modo de Verificación</th>
                        <th>Calificación</th>
                        <th>Nivel de Evaluación</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($evaluaciones)): ?>
                        <tr>
                            <td colspan="23">No hay evaluaciones para este cliente.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($evaluaciones as $evaluacion): ?>
                            <tr>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['id_ev_ini']) ?>"><?= esc($evaluacion['id_ev_ini']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['created_at']) ?>"><?= esc($evaluacion['created_at']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['updated_at']) ?>"><?= esc($evaluacion['updated_at']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($client['nombre_cliente']) ?>"><?= esc($client['nombre_cliente']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['ciclo']) ?>"><?= esc($evaluacion['ciclo']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['estandar']) ?>"><?= esc($evaluacion['estandar']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['detalle_estandar']) ?>"><?= esc($evaluacion['detalle_estandar']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['estandares_minimos']) ?>"><?= esc($evaluacion['estandares_minimos']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['numeral']) ?>"><?= esc($evaluacion['numeral']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['numerales_del_cliente']) ?>"><?= esc($evaluacion['numerales_del_cliente']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['siete']) ?>"><?= esc($evaluacion['siete']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['veintiun']) ?>"><?= esc($evaluacion['veintiun']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['sesenta']) ?>"><?= esc($evaluacion['sesenta']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['item_del_estandar']) ?>"><?= esc($evaluacion['item_del_estandar']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['evaluacion_inicial']) ?>"><?= esc($evaluacion['evaluacion_inicial']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['valor']) ?>"><?= esc($evaluacion['valor']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['puntaje_cuantitativo']) ?>"><?= esc($evaluacion['puntaje_cuantitativo']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['item']) ?>"><?= esc($evaluacion['item']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['criterio']) ?>"><?= esc($evaluacion['criterio']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['modo_de_verificacion']) ?>"><?= esc($evaluacion['modo_de_verificacion']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['calificacion']) ?>"><?= esc($evaluacion['calificacion']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['nivel_de_evaluacion']) ?>"><?= esc($evaluacion['nivel_de_evaluacion']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['observaciones']) ?>"><?= esc($evaluacion['observaciones']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>

            <!-- Incluir Bootstrap JavaScript y script para inicializar tooltips -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl);
                    });
                });
            </script>
        </div>


    </div>

</body>

</html>