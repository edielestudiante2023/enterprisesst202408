<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Actividades - Plan de Trabajo Anual</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <br>
    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

    <br>
    <h2>Añadir Actividad al Plan de Trabajo Anual</h2>
    <!-- Botón para ir a la vista de agregar actividad -->
    <a href="<?= base_url('/addPlanDeTrabajoAnual') ?>"><button type="button">Añadir Nueva Actividad</button></a>
    <br><br>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Actividades del Plan de Trabajo Anual</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>ID Plan de Trabajo</th>
                    <th>PHVA</th>
                    <th>Numeral</th>
                    <th>Actividad</th>
                    <th>Responsable Sugerido</th>
                    <th>Fecha Propuesta</th>
                    <th>Fecha Cierre</th>
                    <th>Responsable Definido</th>
                    <th>Estado Actividad</th>
                    <th>Porcentaje Avance</th>
                    <th>Semana</th>
                    <th>Observaciones</th>
                    <th>Creado en</th>
                    <th>Actualizado en</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($actividades)) : ?>
                    <?php foreach ($actividades as $actividad) : ?>
                        <tr>
                            <td><?= $actividad['id_ptacliente'] ?></td>
                            <td><?= $actividad['nombre_cliente'] ?></td>
                            <td><?= $actividad['id_plandetrabajo'] ?></td>
                            <td><?= $actividad['phva_plandetrabajo'] ?></td>
                            <td><?= $actividad['numeral_plandetrabajo'] ?></td>
                            <td><?= $actividad['actividad_plandetrabajo'] ?></td>
                            <td><?= $actividad['responsable_sugerido_plandetrabajo'] ?></td>
                            <td><?= $actividad['fecha_propuesta'] ?></td>
                            <td><?= $actividad['fecha_cierre'] ?></td>
                            <td><?= $actividad['responsable_definido_paralaactividad'] ?></td>
                            <td><?= $actividad['estado_actividad'] ?></td>
                            <td><?= $actividad['porcentaje_avance'] ?>%</td>
                            <td><?= $actividad['semana'] ?></td>
                            <td><?= $actividad['observaciones'] ?></td>
                            <td><?= $actividad['created_at'] ?></td>
                            <td><?= $actividad['updated_at'] ?></td>
                            <td>
                                <a href="<?= base_url('editPlanDeTrabajoAnual/' . $actividad['id_ptacliente']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?= base_url('deletePlanDeTrabajoAnual/' . $actividad['id_ptacliente']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta actividad?')">Eliminar</a>
                            </td>

                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="17" class="text-center">No se encontraron actividades.</td>
                        </tr>
                    <?php endif; ?>
            </tbody>
        </table>
        <a href="/addPlanDeTrabajoAnual" class="btn btn-primary">Añadir Nueva Actividad</a>
    </div>
</body>

</html>