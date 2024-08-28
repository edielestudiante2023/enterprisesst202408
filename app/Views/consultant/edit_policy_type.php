<h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

<h1>Editar Tipo de Política</h1>

<?php if (isset($policyType)): ?>
<form action="<?= base_url('/editPolicyTypePost/'.$policyType['id']) ?>" method="post">
    <label for="type_name">Nombre del Tipo de Política:</label>
    <input type="text" name="type_name" value="<?= $policyType['type_name'] ?>" required><br>
    <button type="submit">Actualizar</button>
</form>
<?php else: ?>
    <p>Error: No se pudo cargar la información del tipo de política.</p>
<?php endif; ?>

