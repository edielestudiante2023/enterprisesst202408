<h2>Lista de Variables Denominador</h2>
<table border="1">
    <thead>
        <tr>
            <th>Texto de la Variable</th>
            <th>Datos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($denominatorVariables as $variable): ?>
            <tr>
                <td><?= esc($variable['denominator_variable_text']) ?></td>
                <td><?= esc($variable['denominator_variable_data']) ?></td>
                <td>
                    <a href="<?= base_url('editDenominatorVariable/' . $variable['id_denominator_variable']) ?>">Editar</a> |
                    <a href="<?= base_url('deleteDenominatorVariable/' . $variable['id_denominator_variable']) ?>" onclick="return confirm('¿Está seguro de eliminar esta variable?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<a href="<?= base_url('addDenominatorVariable') ?>"><button type="button">Añadir Variable Denominador</button></a>
<br><br>
<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>

