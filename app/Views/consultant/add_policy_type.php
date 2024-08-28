
<h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

<h1>Añadir Nuevo Tipo de Política</h1>

<form action="<?= base_url('/addPolicyTypePost') ?>" method="post">
    <label for="type_name">Nombre del Tipo de Política:</label>
    <input type="text" name="type_name" required><br>
    <button type="submit">Guardar</button>
</form>
