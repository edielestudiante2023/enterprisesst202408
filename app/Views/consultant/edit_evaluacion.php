<h2>Editar Evaluación</h2>

<form action="<?= base_url('editEvaluacionPost/' . $evaluacion['id_ev_ini']) ?>" method="post">

    <!-- Selección del cliente -->
    <label for="id_cliente">Cliente:</label>
    <select name="id_cliente" id="id_cliente" required>
        <?php foreach ($clients as $cliente): ?>
            <option value="<?= esc($cliente['id_cliente']) ?>"
                <?= $cliente['id_cliente'] == $evaluacion['id_cliente'] ? 'selected' : '' ?>>
                <?= esc($cliente['nombre_cliente']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <!-- Otros campos de la evaluación -->
    <label for="ciclo">Ciclo:</label>
    <input type="text" name="ciclo" id="ciclo" value="<?= esc($evaluacion['ciclo']) ?>" required>
    <br><br>

    <label for="estandar">Estandar:</label>
    <input type="text" name="estandar" id="estandar" value="<?= esc($evaluacion['estandar']) ?>" required>
    <br><br>

    <label for="detalle_estandar">Detalle del Estándar:</label>
    <textarea name="detalle_estandar" id="detalle_estandar" required><?= esc($evaluacion['detalle_estandar']) ?></textarea>
    <br><br>

    <label for="estandares_minimos">Estándares Mínimos:</label>
    <input type="text" name="estandares_minimos" id="estandares_minimos" value="<?= esc($evaluacion['estandares_minimos']) ?>" required>
    <br><br>

    <label for="numeral">Numeral:</label>
    <input type="text" name="numeral" id="numeral" value="<?= esc($evaluacion['numeral']) ?>" required>
    <br><br>

    <label for="numerales_del_cliente">Numerales del Cliente:</label>
    <input type="text" name="numerales_del_cliente" id="numerales_del_cliente" value="<?= esc($evaluacion['numerales_del_cliente']) ?>" required>
    <br><br>

    <label for="siete">Siete:</label>
    <input type="text" name="siete" id="siete" value="<?= esc($evaluacion['siete']) ?>" >
    <br><br>

    <label for="veintiun">Veintiún:</label>
    <input type="text" name="veintiun" id="veintiun" value="<?= esc($evaluacion['veintiun']) ?>" >
    <br><br>

    <label for="sesenta">Sesenta:</label>
    <input type="text" name="sesenta" id="sesenta" value="<?= esc($evaluacion['sesenta']) ?>" >
    <br><br>

    <label for="item_del_estandar">Item del Estándar:</label>
    <input type="text" name="item_del_estandar" id="item_del_estandar" value="<?= esc($evaluacion['item_del_estandar']) ?>" required>
    <br><br>

    <label for="evaluacion_inicial">Evaluación Inicial:</label>
    <select name="evaluacion_inicial" id="evaluacion_inicial" required>
        <option value="CUMPLE TOTALMENTE" <?= $evaluacion['evaluacion_inicial'] == 'CUMPLE TOTALMENTE' ? 'selected' : '' ?>>CUMPLE TOTALMENTE</option>
        <option value="NO CUMPLE" <?= $evaluacion['evaluacion_inicial'] == 'NO CUMPLE' ? 'selected' : '' ?>>NO CUMPLE</option>
        <option value="NO APLICA" <?= $evaluacion['evaluacion_inicial'] == 'NO APLICA' ? 'selected' : '' ?>>NO APLICA</option>
    </select>
    <br><br>


    <label for="valor">Valor:</label>
    <input type="text" name="valor" id="valor" value="<?= esc($evaluacion['valor']) ?>" required>
    <br><br>

    <label for="puntaje_cuantitativo">Puntaje Cuantitativo:</label>
    <input type="number" step="0.01" name="puntaje_cuantitativo" id="puntaje_cuantitativo" value="<?= esc($evaluacion['puntaje_cuantitativo']) ?>" required>
    <br><br>

    <label for="item">Item:</label>
    <input type="text" name="item" id="item" value="<?= esc($evaluacion['item']) ?>" required>
    <br><br>

    <label for="criterio">Criterio:</label>
    <textarea name="criterio" id="criterio" required><?= esc($evaluacion['criterio']) ?></textarea>
    <br><br>

    <label for="modo_de_verificacion">Modo de Verificación:</label>
    <textarea name="modo_de_verificacion" id="modo_de_verificacion" required><?= esc($evaluacion['modo_de_verificacion']) ?></textarea>
    <br><br>

    <label for="calificacion">Calificación:</label>
    <input type="text" name="calificacion" id="calificacion" value="<?= esc($evaluacion['calificacion']) ?>" >
    <br><br>

    <label for="nivel_de_evaluacion">Nivel de Evaluación:</label>
    <input type="text" name="nivel_de_evaluacion" id="nivel_de_evaluacion" value="<?= esc($evaluacion['nivel_de_evaluacion']) ?>" >
    <br><br>

    <label for="observaciones">Observaciones:</label>
    <textarea name="observaciones" id="observaciones"><?= esc($evaluacion['observaciones']) ?></textarea>
    <br><br>

    <button type="submit">Guardar Cambios</button>
    <a href="<?= base_url('listEvaluaciones') ?>"><button type="button">Cancelar</button></a>

</form>