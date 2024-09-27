<h2>Agregar Nueva Capacitación</h2>

<?php if (session()->getFlashdata('msg')): ?>
    <p><?= session()->getFlashdata('msg') ?></p>
<?php endif; ?>

<form action="<?= base_url('addCapacitacionPost') ?>" method="post">
    
    <!-- Campo para el nombre de la capacitación -->
    <label for="capacitacion">Nombre de la Capacitación:</label><br>
    <input type="text" name="capacitacion" id="capacitacion" required><br><br>
    
    <!-- Campo para el objetivo de la capacitación -->
    <label for="objetivo_capacitacion">Objetivo de la Capacitación:</label><br>
    <textarea name="objetivo_capacitacion" id="objetivo_capacitacion" required></textarea><br><br>
    
    <!-- Campo para observaciones -->
    <label for="observaciones">Observaciones:</label><br>
    <textarea name="observaciones" id="observaciones"></textarea><br><br>

    <!-- Botón para enviar el formulario -->
    <button type="submit">Agregar Capacitación</button>
</form>
