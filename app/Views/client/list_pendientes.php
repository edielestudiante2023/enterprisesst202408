
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pendientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Listado de Pendientes</h2>
        
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Responsable</th>
                    <th>Tarea Actividad</th>
                    <th>Fecha Cierre</th>
                    <th>Estado</th>
                    <th>Conteo Días</th>
                    <th>Estado Avance</th>
                    <th>Evidencia</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($pendientes)): ?>
                    <tr>
                        <td colspan="9" class="text-center">No hay pendientes registrados.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($pendientes as $pendiente): ?>
                    <tr>
                        <td><?= esc($pendiente['id_pendientes']) ?></td>
                        <td><?= esc($pendiente['nombre_cliente']) ?></td> <!-- Mostrar el nombre del cliente -->
                        <td><?= esc($pendiente['responsable']) ?></td>
                        <td><?= esc($pendiente['tarea_actividad']) ?></td>
                        <td><?= esc($pendiente['fecha_cierre']) ?></td>
                        <td><?= esc($pendiente['estado']) ?></td>
                        <td><?= esc($pendiente['conteo_dias']) ?></td>
                        <td><?= esc($pendiente['estado_avance']) ?></td>
                        <td><?= esc($pendiente['evidencia_para_cerrarla']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

       
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
