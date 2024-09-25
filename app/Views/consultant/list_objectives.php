<h2>Lista de Objetivos de Política</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nombre del Objetivo</th>
            <th>Comentarios</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($objectives as $objective): ?>
            <tr>
                <td><?= esc($objective['name_objectives']) ?></td>
                <td><?= esc($objective['comments_objectives']) ?></td>
                <td>
                    <a href="<?= base_url('editObjective/' . $objective['id_objectives']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteObjective/' . $objective['id_objectives']) ?>" onclick="return confirm('¿Está seguro de eliminar este objetivo?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>
<h2>Crear Nuevo Objetivo de Indicador</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/addObjective') ?>"><button type="button">Crear</button></a>
<br><br>



<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>
