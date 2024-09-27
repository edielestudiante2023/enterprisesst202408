<h2>Agregar Nueva Evaluación</h2>

<form action="<?= base_url('addEvaluacionPost') ?>" method="post">
    
    <!-- Selección del cliente -->
    <label for="id_cliente">Cliente:</label>
    <select name="id_cliente" id="id_cliente" required>
        <?php foreach ($clients as $cliente): // Cambia $clientes por $clients ?>
            <option value="<?= esc($cliente['id_cliente']) ?>"><?= esc($cliente['nombre_cliente']) ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <!-- Otros campos de la evaluación -->
    <label for="ciclo">Ciclo:</label>
    <input type="text" name="ciclo" id="ciclo" required>
    <br><br>

    <label for="estandar">Estándar:</label>
    <input type="text" name="estandar" id="estandar" required>
    <br><br>

    <label for="detalle_estandar">Detalle del Estándar:</label>
    <textarea name="detalle_estandar" id="detalle_estandar" required></textarea>
    <br><br>

    <label for="estandares_minimos">Estándares Mínimos:</label>
    <input type="text" name="estandares_minimos" id="estandares_minimos" required>
    <br><br>

    <label for="numeral">Numeral:</label>
    <input type="text" name="numeral" id="numeral" required>
    <br><br>

    <label for="numerales_del_cliente">Numerales del Cliente:</label>
    <input type="text" name="numerales_del_cliente" id="numerales_del_cliente">
    <br><br>

    <label for="siete">Siete:</label>
    <input type="text" name="siete" id="siete">
    <br><br>

    <label for="veintiun">Veintiún:</label>
    <input type="text" name="veintiun" id="veintiun">
    <br><br>

    <label for="sesenta">Sesenta:</label>
    <input type="text" name="sesenta" id="sesenta">
    <br><br>

    <label for="item_del_estandar">Ítem del Estándar:</label>
    <input type="text" name="item_del_estandar" id="item_del_estandar">
    <br><br>

    <label for="evaluacion_inicial">Evaluación Inicial:</label>
    <input type="text" name="evaluacion_inicial" id="evaluacion_inicial">
    <br><br>

    <label for="valor">Valor:</label>
    <input type="text" name="valor" id="valor">
    <br><br>

    <label for="puntaje_cuantitativo">Puntaje Cuantitativo:</label>
    <input type="text" name="puntaje_cuantitativo" id="puntaje_cuantitativo">
    <br><br>

    <label for="item">Ítem:</label>
    <input type="text" name="item" id="item">
    <br><br>

    <label for="criterio">Criterio:</label>
    <input type="text" name="criterio" id="criterio">
    <br><br>

    <label for="modo_de_verificacion">Modo de Verificación:</label>
    <textarea name="modo_de_verificacion" id="modo_de_verificacion"></textarea>
    <br><br>

    <label for="calificacion">Calificación:</label>
    <input type="text" name="calificacion" id="calificacion">
    <br><br>

    <label for="nivel_de_evaluacion">Nivel de Evaluación:</label>
    <input type="text" name="nivel_de_evaluacion" id="nivel_de_evaluacion">
    <br><br>

    <label for="observaciones">Observaciones:</label>
    <textarea name="observaciones" id="observaciones"></textarea>
    <br><br>

    <!-- Botón para enviar el formulario -->
    <button type="submit">Guardar Evaluación</button>
</form>

<!-- Botón para regresar a la lista -->
<a href="<?= base_url('listEvaluaciones') ?>"><button type="button">Regresar a la lista</button></a>
