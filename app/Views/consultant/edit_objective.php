<h2>Editar Objetivo de Política</h2>

<form action="<?= base_url('editObjectivePost/' . $objective['id_objectives']) ?>" method="post">
    <label for="name_objectives">Nombre del Objetivo:</label>
    <input type="text" name="name_objectives" id="name_objectives" value="<?= esc($objective['name_objectives']) ?>" required><br>

    <label for="comments_objectives">Comentarios sobre el Objetivo:</label>
    <input type="text" name="comments_objectives" id="comments_objectives" value="<?= esc($objective['comments_objectives']) ?>"><br>

    <input type="submit" value="Actualizar Objetivo">
</form>

<br>
<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
<br><br>

