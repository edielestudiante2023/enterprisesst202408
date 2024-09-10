<h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>


<h1>Lista de Tipos de Documentos</h1>

<a href="<?= base_url('/addPolicyType') ?>">Añadir Nuevo Tipo de Documentos</a>

<table>
    <thead>
        <tr>
            <th>Nombre del Tipo de Documento</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($policyTypes as $type): ?>
            <tr>
                <td><?= $type['type_name'] ?></td>
                <td><?= $type['description'] ?></td>
                <td>
                    <a href="<?= base_url('/editPolicyType/'.$type['id']) ?>">Editar</a>
                    <a href="<?= base_url('/deletePolicyType/'.$type['id']) ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este tipo de política?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

