<h2>Listado de Capacitaciónes</h2>

<?php if (session()->getFlashdata('msg')): ?>
    <p><?= session()->getFlashdata('msg') ?></p>
<?php endif; ?>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: left;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Capacitación</th>
            <th>Objetivo de la Capacitación</th>
            <th>Observaciones</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($capacitaciones)): ?>
            <tr>
                <td colspan="5">No hay capacitaciones registradas.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($capacitaciones as $capacitacion): ?>
            <tr>
                <td><?= esc($capacitacion['id_capacitacion']) ?></td>
                <td><?= esc($capacitacion['capacitacion']) ?></td>
                <td><?= esc($capacitacion['objetivo_capacitacion']) ?></td>
                <td><?= esc($capacitacion['observaciones']) ?></td>
                <td>
                    <a href="<?= base_url('editCapacitacion/'.$capacitacion['id_capacitacion']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteCapacitacion/'.$capacitacion['id_capacitacion']) ?>" onclick="return confirm('¿Estás seguro de eliminar esta capacitación?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<br>
<a href="<?= base_url('addCapacitacion') ?>"><button>Agregar Nueva Capacitación</button></a>
<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>

