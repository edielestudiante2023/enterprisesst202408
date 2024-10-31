<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación del Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Incluir Bootstrap y DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <style>
        /* Configuración para ajustar ancho de columnas */
        .styled-table {
            table-layout: auto;
            /* Permite el autoajuste de ancho de columnas */
            width: 80%;
        }

        .styled-table thead th,
        .styled-table tbody td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Limitar el ancho de las columnas específicas */
        .styled-table thead th:nth-child(2),
        .styled-table tbody td:nth-child(2),
        /* Ciclo */
        .styled-table thead th:nth-child(4),
        .styled-table tbody td:nth-child(4),
        /* Detalle Estándar */
        .styled-table thead th:nth-child(9),
        .styled-table tbody td:nth-child(9),
        /* Item */
        .styled-table thead th:nth-child(10),
        .styled-table tbody td:nth-child(10),
        /* Criterio */
        .styled-table thead th:nth-child(11),
        .styled-table tbody td:nth-child(11)

        /* Modo de Verificación */
            {
            max-width: 20ch;
            /* Limita el ancho visible a unos 20 caracteres */
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
            <table id="evaluacionesTable" class="styled-table table table-striped">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Ciclo</th>
                        <th>Estándar</th>
                        <th>Detalle Estándar</th>
                        <th>Item del Estándar</th>
                        <th>Evaluación Inicial</th>
                        <th>Valor</th>
                        <th>Puntaje Cuantitativo</th>
                        <th>Item</th>
                        <th>Criterio</th>
                        <th>Modo de Verificación</th>
                        <th>Observaciones</th>
                    </tr>
                    <tr>
                        <!-- Filtros para columnas relevantes: Cliente, Ciclo, Estándar, Evaluación Inicial -->
                        <th></th>
                        <th><select id="filterCiclo" class="form-select">
                                <option value="">Ciclo</option>
                            </select></th>
                        <th><select id="filterEstandar" class="form-select">
                                <option value="">Estándar</option>
                            </select></th>
                        <th></th>
                        <th></th>
                        <th><select id="filterEvaluacionInicial" class="form-select">
                                <option value="">Evaluación Inicial</option>
                            </select></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($evaluaciones)): ?>
                        <tr>
                            <td colspan="12">No hay evaluaciones para este cliente.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($evaluaciones as $evaluacion): ?>
                            <tr>
                                <td data-bs-toggle="tooltip" title="<?= esc($client['nombre_cliente']) ?>"><?= esc($client['nombre_cliente']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['ciclo']) ?>"><?= esc($evaluacion['ciclo']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['estandar']) ?>"><?= esc($evaluacion['estandar']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['detalle_estandar']) ?>"><?= esc($evaluacion['detalle_estandar']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['item_del_estandar']) ?>"><?= esc($evaluacion['item_del_estandar']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['evaluacion_inicial']) ?>"><?= esc($evaluacion['evaluacion_inicial']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['valor']) ?>"><?= esc($evaluacion['valor']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['puntaje_cuantitativo']) ?>"><?= esc($evaluacion['puntaje_cuantitativo']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['item']) ?>"><?= esc($evaluacion['item']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['criterio']) ?>"><?= esc($evaluacion['criterio']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['modo_de_verificacion']) ?>"><?= esc($evaluacion['modo_de_verificacion']) ?></td>
                                <td data-bs-toggle="tooltip" title="<?= esc($evaluacion['observaciones']) ?>"><?= esc($evaluacion['observaciones']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializar DataTable con 100 filas por defecto y configuración de filtros
            var table = $('#evaluacionesTable').DataTable({
                pageLength: 100, // Mostrar 100 filas por defecto
                initComplete: function() {
                    var api = this.api();

                    // Filtros dinámicos para Ciclo, Estándar y Evaluación Inicial
                    api.columns([1, 2, 5]).every(function() {
                        var column = this;
                        var select = $(column.header()).find('select');

                        column.data().unique().sort().each(function(d) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });

                        select.on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });
                    });
                }
            });

            // Inicializar tooltips de Bootstrap
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>

</html>