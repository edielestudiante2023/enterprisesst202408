<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar KPI del Cliente</title>
</head>

<body>

    <h2>Editar KPI del Cliente</h2>

    <form action="<?= base_url('/editClientKpiPost/' . $clientKpi['id_client_kpi']) ?>" method="post">


        <!-- Selección del Cliente -->
        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente" required>
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?= $cliente['id_cliente'] ?>" <?= $cliente['id_cliente'] == $clientKpi['id_cliente'] ? 'selected' : '' ?>>
                    <?= $cliente['nombre_cliente'] ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="month">Mes:</label>
        <select name="month" id="month" required>
            <option value="01" <?= ($clientKpi['month'] == '01') ? 'selected' : '' ?>>Enero</option>
            <option value="02" <?= ($clientKpi['month'] == '02') ? 'selected' : '' ?>>Febrero</option>
            <option value="03" <?= ($clientKpi['month'] == '03') ? 'selected' : '' ?>>Marzo</option>
            <option value="04" <?= ($clientKpi['month'] == '04') ? 'selected' : '' ?>>Abril</option>
            <option value="05" <?= ($clientKpi['month'] == '05') ? 'selected' : '' ?>>Mayo</option>
            <option value="06" <?= ($clientKpi['month'] == '06') ? 'selected' : '' ?>>Junio</option>
            <option value="07" <?= ($clientKpi['month'] == '07') ? 'selected' : '' ?>>Julio</option>
            <option value="08" <?= ($clientKpi['month'] == '08') ? 'selected' : '' ?>>Agosto</option>
            <option value="09" <?= ($clientKpi['month'] == '09') ? 'selected' : '' ?>>Septiembre</option>
            <option value="10" <?= ($clientKpi['month'] == '10') ? 'selected' : '' ?>>Octubre</option>
            <option value="11" <?= ($clientKpi['month'] == '11') ? 'selected' : '' ?>>Noviembre</option>
            <option value="12" <?= ($clientKpi['month'] == '12') ? 'selected' : '' ?>>Diciembre</option>
        </select><br><br>

        <label for="year">Año:</label>
        <select name="year" id="year" required>
            <?php for ($i = date('Y'); $i >= 2000; $i--): ?>
                <option value="<?= $i ?>" <?= ($clientKpi['year'] == $i) ? 'selected' : '' ?>><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>



        <!-- Selección de la Política KPI -->
        <label for="id_kpi_policy">Política KPI:</label>
        <select name="id_kpi_policy" id="id_kpi_policy" required>
            <?php foreach ($kpiPolicies as $policy): ?>
                <option value="<?= $policy['id_kpi_policy'] ?>" <?= $policy['id_kpi_policy'] == $clientKpi['id_kpi_policy'] ? 'selected' : '' ?>>
                    <?= $policy['policy_kpi_definition'] ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Selección del Objetivo -->
        <label for="id_objectives">Objetivo:</label>
        <select name="id_objectives" id="id_objectives" required>
            <?php foreach ($objectives as $objective): ?>
                <option value="<?= $objective['id_objectives'] ?>" <?= $objective['id_objectives'] == $clientKpi['id_objectives'] ? 'selected' : '' ?>>
                    <?= $objective['name_objectives'] ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Selección del KPI -->
        <label for="id_kpis">KPI:</label>
        <select name="id_kpis" id="id_kpis" required>
            <?php foreach ($kpis as $kpi): ?>
                <option value="<?= $kpi['id_kpis'] ?>" <?= $kpi['id_kpis'] == $clientKpi['id_kpis'] ? 'selected' : '' ?>>
                    <?= $kpi['kpi_name'] ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Selección del Tipo de KPI -->
        <label for="id_kpi_type">Tipo de KPI:</label>
        <select name="id_kpi_type" id="id_kpi_type" required>
            <?php foreach ($kpiTypes as $type): ?>
                <option value="<?= $type['id_kpi_type'] ?>" <?= $type['id_kpi_type'] == $clientKpi['id_kpi_type'] ? 'selected' : '' ?>>
                    <?= $type['kpi_type'] ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Definición del KPI -->
        <label for="id_kpi_definition">Definición del KPI:</label>
        <select name="id_kpi_definition" id="id_kpi_definition" required>
            <?php foreach ($kpiDefinitions as $definition): ?>
                <option value="<?= $definition['id_kpi_definition'] ?>" <?= $definition['id_kpi_definition'] == $clientKpi['id_kpi_definition'] ? 'selected' : '' ?>>
                    <?= $definition['name_kpi_definition'] ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Fuente de datos -->
        <label for="data_source">Fuente de datos:</label>
        <input type="text" name="data_source" id="data_source" value="<?= $clientKpi['data_source'] ?>" required><br><br>

        <!-- Meta del KPI -->
        <label for="kpi_target">Meta del KPI:</label>
        <input type="number" name="kpi_target" id="kpi_target" value="<?= $clientKpi['kpi_target'] ?>" required><br><br>

        <!-- Interpretación del KPI -->
        <label for="kpi_interpretation">Interpretación del KPI:</label>
        <textarea name="kpi_interpretation" id="kpi_interpretation" required><?= $clientKpi['kpi_interpretation'] ?></textarea><br><br>

        <label for="periodicidad">Periodicidad:</label>
        <select name="periodicidad" id="periodicidad" required>
            <option value="mensual" <?= ($clientKpi['periodicidad'] == 'mensual') ? 'selected' : '' ?>>Mensual</option>
            <option value="bimensual" <?= ($clientKpi['periodicidad'] == 'bimensual') ? 'selected' : '' ?>>Bimensual</option>
            <option value="trimestral" <?= ($clientKpi['periodicidad'] == 'trimestral') ? 'selected' : '' ?>>Trimestral</option>
            <option value="cuatrimestral" <?= ($clientKpi['periodicidad'] == 'cuatrimestral') ? 'selected' : '' ?>>Cuatrimestral</option>
            <option value="semestral" <?= ($clientKpi['periodicidad'] == 'semestral') ? 'selected' : '' ?>>Semestral</option>
            <option value="anual" <?= ($clientKpi['periodicidad'] == 'anual') ? 'selected' : '' ?>>Anual</option>
        </select><br><br>


        <!-- Periodos de medición -->
        <h3>Periodos de medición</h3>
        <?php foreach ($periodos as $periodo): ?>
            <h4>Periodo <?= $periodo ?></h4>

            <label for="variable_numerador_<?= $periodo ?>">Variable Numerador <?= $periodo ?>:</label>
            <select name="variable_numerador_<?= $periodo ?>" id="variable_numerador_<?= $periodo ?>">
                <?php foreach ($numerators as $numerator): ?>
                    <option value="<?= $numerator['id_numerator_variable'] ?>" <?= $numerator['id_numerator_variable'] == $clientKpi['variable_numerador_' . $periodo] ? 'selected' : '' ?>>
                        <?= $numerator['numerator_variable_text'] ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="dato_variable_numerador_<?= $periodo ?>">Dato Variable Numerador <?= $periodo ?>:</label>
            <input type="number" name="dato_variable_numerador_<?= $periodo ?>" id="dato_variable_numerador_<?= $periodo ?>" value="<?= $clientKpi['dato_variable_numerador_' . $periodo] ?>"><br><br>

            <label for="variable_denominador_<?= $periodo ?>">Variable Denominador <?= $periodo ?>:</label>
            <select name="variable_denominador_<?= $periodo ?>" id="variable_denominador_<?= $periodo ?>">
                <?php foreach ($denominators as $denominator): ?>
                    <option value="<?= $denominator['id_denominator_variable'] ?>" <?= $denominator['id_denominator_variable'] == $clientKpi['variable_denominador_' . $periodo] ? 'selected' : '' ?>>
                        <?= $denominator['denominator_variable_text'] ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="dato_variable_denominador_<?= $periodo ?>">Dato Variable Denominador <?= $periodo ?>:</label>
            <input type="number" name="dato_variable_denominador_<?= $periodo ?>" id="dato_variable_denominador_<?= $periodo ?>" value="<?= $clientKpi['dato_variable_denominador_' . $periodo] ?>"><br><br>

        <?php endforeach; ?>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Guardar Cambios</button>

    </form>

</body>

</html>