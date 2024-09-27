<h2>Editar Capacitación</h2>

<form action="<?= base_url('editCapacitacionPost/' . $capacitacion['id_capacitacion']) ?>" method="post">

    <!-- Nombre de la capacitación -->
    <label for="capacitacion">Capacitación:</label>
    <input type="text" name="capacitacion" id="capacitacion" value="<?= esc($capacitacion['capacitacion']) ?>" required>
    <br><br>

    <!-- Objetivo de la capacitación -->
    <label for="objetivo_capacitacion">Objetivo de la Capacitación:</label>
    <textarea name="objetivo_capacitacion" id="objetivo_capacitacion" rows="4" required><?= esc($capacitacion['objetivo_capacitacion']) ?></textarea>
    <br><br>

    <!-- Observaciones -->
    <label for="observaciones">Observaciones:</label>
    <textarea name="observaciones" id="observaciones" rows="3"><?= esc($capacitacion['observaciones']) ?></textarea>
    <br><br>

    <!-- Botón para guardar cambios -->
    <button type="submit">Guardar Cambios</button>
</form>

<!-- Botón para regresar a la lista -->
<a href="<?= base_url('listCapacitaciones') ?>"><button type="button">Cancelar</button></a>
