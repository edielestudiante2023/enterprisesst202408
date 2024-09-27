<h2>Evaluaciones del Cliente: <?= esc($client['nombre_cliente']) ?></h2>

<!-- Tarjetas de indicadores -->
<div style="display: flex; justify-content: space-around; margin-bottom: 20px;">
    <!-- Suma de puntaje cuantitativo -->
    <div style="background-color: #f0f8ff; padding: 20px; border-radius: 8px; width: 30%; text-align: center;">
        <h3>Total Puntaje Cuantitativo</h3>
        <p style="font-size: 24px; font-weight: bold;"><?= esc($sum_puntaje_cuantitativo) ?></p>
    </div>

    <!-- Suma de valor -->
    <div style="background-color: #f5f5f5; padding: 20px; border-radius: 8px; width: 30%; text-align: center;">
        <h3>Total Valor</h3>
        <p style="font-size: 24px; font-weight: bold;"><?= esc($sum_valor) ?></p>
    </div>

    <!-- Indicador general -->
    <div style="background-color: #e6e6fa; padding: 20px; border-radius: 8px; width: 30%; text-align: center;">
        <h3>Indicador General</h3>
        <p style="font-size: 24px; font-weight: bold;"><?= number_format($indicador_general, 2) ?></p>
    </div>
</div>

<!-- Indicadores por categoría -->
<div style="display: flex; justify-content: space-around; margin-bottom: 20px;">
    <!-- Cumple Totalmente -->
    <div style="background-color: #d4edda; padding: 20px; border-radius: 8px; width: 30%; text-align: center;">
        <h3>Cumple Totalmente</h3>
        <p>Conteo: <?= esc($count_cumple) ?></p>
        <p>Puntaje: <?= esc($sum_puntaje_cumple) ?></p>
        <p>Valor: <?= esc($sum_valor_cumple) ?></p>
        <p>Indicador: <?= number_format($indicador_cumple, 2) ?></p>
    </div>

    <!-- No Cumple -->
    <div style="background-color: #f8d7da; padding: 20px; border-radius: 8px; width: 30%; text-align: center;">
        <h3>No Cumple</h3>
        <p>Conteo: <?= esc($count_no_cumple) ?></p>
        <p>Puntaje: <?= esc($sum_puntaje_no_cumple) ?></p>
        <p>Valor: <?= esc($sum_valor_no_cumple) ?></p>
        <p>Indicador: <?= number_format($indicador_no_cumple, 2) ?></p>
    </div>

    <!-- No Aplica -->
    <div style="background-color: #fff3cd; padding: 20px; border-radius: 8px; width: 30%; text-align: center;">
        <h3>No Aplica</h3>
        <p>Conteo: <?= esc($count_no_aplica) ?></p>
        <p>Puntaje: <?= esc($sum_puntaje_no_aplica) ?></p>
        <p>Valor: <?= esc($sum_valor_no_aplica) ?></p>
        <p>Indicador: <?= number_format($indicador_no_aplica, 2) ?></p>
    </div>
</div>

<div style="margin-bottom: 20px;">
    <?php if ($indicador_general < 0.6): ?>
        <div style="background-color: #f8d7da; color: #721c24; padding: 20px; border-radius: 8px; text-align: center;">
            <h3>Estado: CRÍTICO</h3>
            <p>Si el puntaje obtenido es menor al 60%, debe realizar un plan de mejoramiento inmediato.</p>
            <ol style="text-align: left; margin-left: 20px;">
                <li>Realizar y tener a disposición del Ministerio del Trabajo un Plan de Mejoramiento de inmediato.</li>
                <li>Enviar a la respectiva Administradora de Riesgos Laborales (ARL) un reporte de avances dentro de tres (3) meses después de realizada la autoevaluación de estándares mínimos.</li>
                <li>Seguimiento anual y plan de visita a la empresa con valoración crítica, por parte del Ministerio del Trabajo.</li>
            </ol>
        </div>
    <?php elseif ($indicador_general >= 0.6 && $indicador_general <= 0.85): ?>
        <div style="background-color: #fff3cd; color: #856404; padding: 20px; border-radius: 8px; text-align: center;">
            <h3>Estado: MODERADAMENTE ACEPTABLE</h3>
            <p>Si el puntaje obtenido está entre el 60% y 85%, debe realizar un plan de mejoramiento.</p>
            <ol style="text-align: left; margin-left: 20px;">
                <li>Realizar y tener a disposición del Ministerio del Trabajo un Plan de Mejoramiento.</li>
                <li>Enviar a la Administradora de Riesgos Laborales (ARL) un reporte de avances dentro de seis (6) meses después de realizada la autoevaluación de estándares mínimos.</li>
                <li>Plan de visita por parte del Ministerio del Trabajo.</li>
            </ol>
        </div>
    <?php else: ?>
        <div style="background-color: #d4edda; color: #155724; padding: 20px; border-radius: 8px; text-align: center;">
            <h3>Estado: ACEPTABLE</h3>
            <p>Si el puntaje obtenido es mayor a 85%, debe mantener la calificación y continuar mejorando.</p>
            <ol style="text-align: left; margin-left: 20px;">
                <li>Mantener la calificación y evidencias a disposición del Ministerio del Trabajo.</li>
                <li>Incluir en el Plan Anual de Trabajo las mejoras que se establezcan de acuerdo con la evaluación.</li>
            </ol>
        </div>
    <?php endif; ?>
</div>


<!-- Tabla de Evaluaciones -->
<!-- <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="border: 1px solid #ddd; padding: 8px;">ID</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Ciclo</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Estándar</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Detalle Estándar</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($evaluaciones)): ?>
            <tr>
                <td colspan="5" style="border: 1px solid #ddd; padding: 8px; text-align: center;">No hay evaluaciones para este cliente.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($evaluaciones as $evaluacion): ?>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;"><?= esc($evaluacion['id_ev_ini']) ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?= esc($evaluacion['ciclo']) ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?= esc($evaluacion['estandar']) ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?= esc($evaluacion['detalle_estandar']) ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?= esc($evaluacion['valor']) ?></td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table> -->



<!-- <h2>Evaluaciones del Cliente: <?= esc($client['nombre_cliente']) ?></h2> -->

<!-- Agregar un poco de espacio alrededor de la tabla -->
<div class="table-container">
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha Creación</th>
                <th>Fecha Actualización</th>
                <th>Cliente</th>
                <th>Ciclo</th>
                <th>Estándar</th>
                <th>Detalle Estándar</th>
                <th>Estándares Mínimos</th>
                <th>Numeral</th>
                <th>Numerales del Cliente</th>
                <th>Siete</th>
                <th>Veintiún</th>
                <th>Sesenta</th>
                <th>Item del Estándar</th>
                <th>Evaluación Inicial</th>
                <th>Valor</th>
                <th>Puntaje Cuantitativo</th>
                <th>Item</th>
                <th>Criterio</th>
                <th>Modo de Verificación</th>
                <th>Calificación</th>
                <th>Nivel de Evaluación</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($evaluaciones)): ?>
                <tr>
                    <td colspan="23">No hay evaluaciones para este cliente.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($evaluaciones as $evaluacion): ?>
                    <tr>
                        <td><?= esc($evaluacion['id_ev_ini']) ?></td>
                        <td><?= esc($evaluacion['created_at']) ?></td>
                        <td><?= esc($evaluacion['updated_at']) ?></td>
                        <td><?= esc($client['nombre_cliente']) ?></td>
                        <td><?= esc($evaluacion['ciclo']) ?></td>
                        <td><?= esc($evaluacion['estandar']) ?></td>
                        <td><?= esc($evaluacion['detalle_estandar']) ?></td>
                        <td><?= esc($evaluacion['estandares_minimos']) ?></td>
                        <td><?= esc($evaluacion['numeral']) ?></td>
                        <td><?= esc($evaluacion['numerales_del_cliente']) ?></td>
                        <td><?= esc($evaluacion['siete']) ?></td>
                        <td><?= esc($evaluacion['veintiun']) ?></td>
                        <td><?= esc($evaluacion['sesenta']) ?></td>
                        <td><?= esc($evaluacion['item_del_estandar']) ?></td>
                        <td><?= esc($evaluacion['evaluacion_inicial']) ?></td>
                        <td><?= esc($evaluacion['valor']) ?></td>
                        <td><?= esc($evaluacion['puntaje_cuantitativo']) ?></td>
                        <td><?= esc($evaluacion['item']) ?></td>
                        <td><?= esc($evaluacion['criterio']) ?></td>
                        <td><?= esc($evaluacion['modo_de_verificacion']) ?></td>
                        <td><?= esc($evaluacion['calificacion']) ?></td>
                        <td><?= esc($evaluacion['nivel_de_evaluacion']) ?></td>
                        <td><?= esc($evaluacion['observaciones']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Estilos CSS -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .table-container {
        max-width: 1000px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        text-align: left;
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    .styled-table th {
        background-color: #004d40;
        color: white;
    }

    .styled-table td {
        color: #555;
    }
</style>