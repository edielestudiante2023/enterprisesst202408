<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cronogramas de Capacitación</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Listado de Cronogramas de Capacitación</h2>

        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Cronograma</th>
                    <th>Cliente</th> <!-- Añadido para mostrar el nombre del cliente -->
                    <th>Capacitación</th> <!-- Añadido para mostrar el nombre de la capacitación -->
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
                <?php if (empty($cronogramas)): ?>
                    <tr>
                        <td colspan="15" class="text-center">No hay cronogramas de capacitación registrados.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($cronogramas as $cronograma): ?>
                    <tr>
                        <td><?= esc($cronograma['id_cronograma_capacitacion']) ?></td>
                        <td><?= esc($cronograma['nombre_cliente']) ?></td> <!-- Mostrar el nombre del cliente -->
                        <td><?= esc($cronograma['nombre_capacitacion']) ?></td> <!-- Mostrar el nombre de la capacitación -->
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
</body>

</html>
