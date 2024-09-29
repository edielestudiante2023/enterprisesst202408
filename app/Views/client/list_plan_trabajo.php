<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de Trabajo Anual</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Plan de Trabajo Anual</h2>

        <br>
        <h2>Ir a Dashboard</h2>
        <!-- Botón para ir a la vista de agregar reportes -->
        <a href="<?= base_url('/dashboardclient') ?>"><button type="button">Ir a DashBoard</button></a>
        <br><br>


        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Plan</th>
                    <th>Cliente</th>
                    <th>ID Plan de Trabajo</th>
                    <th>PHVA</th>
                    <th>Numeral</th>
                    <th>Actividad</th>
                    <th>Responsable Sugerido</th>
                    <th>Fecha Propuesta</th>
                    <th>Fecha Cierre</th>
                    <th>Responsable Definido</th>
                    <th>Estado de Actividad</th>
                    <th>Porcentaje de Avance</th>
                    <th>Semana</th>
                    <th>Observaciones</th>
                    <th>Fecha Creación</th>
                    <th>Última Actualización</th>
                </tr>
            </thead>
            <tbody>
    <?php if (empty($planes)): ?>
        <tr>
            <td colspan="16" class="text-center">No hay planes de trabajo registrados.</td>
        </tr>
    <?php else: ?>
        <?php foreach ($planes as $plan): ?>
            <tr>
                <td><?= esc($plan['id_ptacliente']) ?></td> <!-- ID del plan -->
                <td><?= esc($plan['nombre_cliente']) ?></td> <!-- Nombre del cliente -->
                <td><?= esc($plan['id_plandetrabajo']) ?></td> <!-- ID Plan de Trabajo -->
                <td><?= esc($plan['phva_plandetrabajo']) ?></td> <!-- PHVA del plan -->
                <td><?= esc($plan['numeral_actividad']) ?></td> <!-- Numeral del plan (desde InventarioActividadesArrayModel) -->
                <td><?= esc($plan['nombre_actividad']) ?></td> <!-- Actividad del plan (desde InventarioActividadesArrayModel) -->
                <td><?= esc($plan['responsable_sugerido_plandetrabajo']) ?></td> <!-- Responsable sugerido -->
                <td><?= esc($plan['fecha_propuesta']) ?></td> <!-- Fecha propuesta -->
                <td><?= esc($plan['fecha_cierre']) ?></td> <!-- Fecha de cierre -->
                <td><?= esc($plan['responsable_definido_paralaactividad']) ?></td> <!-- Responsable definido -->
                <td><?= esc($plan['estado_actividad']) ?></td> <!-- Estado de la actividad -->
                <td><?= esc($plan['porcentaje_avance']) ?>%</td> <!-- Porcentaje de avance -->
                <td><?= esc($plan['semana']) ?></td> <!-- Semana del plan -->
                <td><?= esc($plan['observaciones']) ?></td> <!-- Observaciones -->
                <td><?= esc($plan['created_at']) ?></td> <!-- Fecha de creación -->
                <td><?= esc($plan['updated_at']) ?></td> <!-- Última actualización -->
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</tbody>

        </table>
    </div>
</body>

</html>