<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pendientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<br>
<h2>Ir a Agregar Pendiente</h2>
<!-- Botón para ir a la vista de agregar pendientes -->
<a href="<?= base_url('/addPendiente') ?>"><button type="button">Ir a Agregar Pendiente</button></a>
<br><br>

<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>


    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Pendientes</h2>
        <a href="<?= base_url('/addPendiente') ?>" class="btn btn-primary mb-3">Añadir Nuevo Pendiente</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Fecha Creación</th>
                    <th>Responsable</th>
                    <th>Tarea Actividad</th>
                    <th>Fecha Cierre</th>
                    <th>Estado</th>
                    <th>Conteo Días</th>
                    <th>Estado Avance</th>
                    <th>Evidencia para Cerrarla</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pendientes)) : ?>
                    <?php foreach ($pendientes as $pendiente) : ?>
                        <tr>
                            <td><?= $pendiente['id_pendientes'] ?></td>
                            <td><?= $pendiente['id_cliente'] ?></td> <!-- Aquí deberías mostrar el nombre del cliente -->
                            <td><?= $pendiente['created_at'] ?></td>
                            <td><?= $pendiente['responsable'] ?></td>
                            <td><?= $pendiente['tarea_actividad'] ?></td>
                            <td><?= $pendiente['fecha_cierre'] ?></td>
                            <td><?= $pendiente['estado'] ?></td>
                            <td><?= $pendiente['conteo_dias'] ?></td>
                            <td><?= $pendiente['estado_avance'] ?></td>
                            <td><?= $pendiente['evidencia_para_cerrarla'] ?></td>
                            <td>
                                <a href="<?= base_url('/editPendiente/' . $pendiente['id_pendientes']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?= base_url('/deletePendiente/' . $pendiente['id_pendientes']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este pendiente?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="11" class="text-center">No se encontraron pendientes.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
