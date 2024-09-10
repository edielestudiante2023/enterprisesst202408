
<h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

<h1>Añadir Nuevo Tipo de Documento</h1>

<form action="<?= base_url('/addPolicyTypePost') ?>" method="post">
    <label for="type_name">Nombre del Tipo de Documento:</label>
    <input type="text" name="type_name" required><br>
    <label for="type_name">Descripción del Tipo de Documento:</label>
    <input type="text" name="description" required><br>
    <button type="submit">Guardar</button>
</form>
