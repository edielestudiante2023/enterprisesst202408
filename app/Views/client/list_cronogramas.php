<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cronogramas de Capacitación</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #EFEBDF;
            color: #1C2437;
        }

        .container {
            margin-top: 20px;
        }

        h2 {
            color: #47485A;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .table th {
            background-color: #47485A;
            color: #EFEBDF;
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .alert-success {
            background-color: #B89553;
            color: #1C2437;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Listado de Cronogramas de Capacitación</h2>

        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-success text-center"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <table id="cronogramasTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Cronograma</th>
                    <th>Cliente</th>
                    <th>Capacitación</th>
                    <th>Fecha Programada</th>
                    <th>Fecha de Realización</th>
                    <th>Estado</th>
                    <th>Perfil de Asistentes</th>
                    <th>Nombre del Capacitador</th>
                    <th>Horas de Duración</th>
                    <th>Indicador de Realización</th>
                    <th>Número de Asistentes</th>
                    <th>Número Total de Personas Programadas</th>
                    <th>Porcentaje de Cobertura</th>
                    <th>Número de Personas Evaluadas</th>
                    <th>Promedio de Calificaciones</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($cronogramas)) : ?>
                    <tr>
                        <td colspan="16" class="text-center">No hay cronogramas de capacitación registrados.</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($cronogramas as $cronograma) : ?>
                        <tr>
                            <td><?= esc($cronograma['id_cronograma_capacitacion']) ?></td>
                            <td><?= esc($cronograma['nombre_cliente']) ?></td>
                            <td><?= esc($cronograma['nombre_capacitacion']) ?></td>
                            <td><?= esc($cronograma['fecha_programada']) ?></td>
                            <td><?= esc($cronograma['fecha_de_realizacion']) ?></td>
                            <td><?= esc($cronograma['estado']) ?></td>
                            <td><?= esc($cronograma['perfil_de_asistentes']) ?></td>
                            <td><?= esc($cronograma['nombre_del_capacitador']) ?></td>
                            <td><?= esc($cronograma['horas_de_duracion_de_la_capacitacion']) ?></td>
                            <td><?= esc($cronograma['indicador_de_realizacion_de_la_capacitacion']) ?></td>
                            <td><?= esc($cronograma['numero_de_asistentes_a_capacitacion']) ?></td>
                            <td><?= esc($cronograma['numero_total_de_personas_programadas']) ?></td>
                            <td><?= esc($cronograma['porcentaje_cobertura']) ?></td>
                            <td><?= esc($cronograma['numero_de_personas_evaluadas']) ?></td>
                            <td><?= esc($cronograma['promedio_de_calificaciones']) ?></td>
                            <td><?= esc($cronograma['observaciones']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery, DataTables and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cronogramasTable').DataTable({
                paging: true,
                searching: true,
                lengthChange: true,
                pageLength: 5,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                }
            });
        });
    </script>
</body>

</html>
