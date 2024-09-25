<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar KPI del Cliente</title>
</head>

<body>

    <h2>Agregar KPI del Cliente</h2>

    <!-- Formulario que apunta a la ruta correcta usando base_url -->
    <form action="<?= base_url('/addClientKpiPost') ?>" method="post">

        <!-- Selección del Cliente -->
        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente" required>
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?= $cliente['id_cliente'] ?>"><?= $cliente['nombre_cliente'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="month">Mes:</label>
        <select name="month" id="month" required>
            <option value="">Selecciona el mes</option>
            <option value="01">Enero</option>
            <option value="02">Febrero</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Mayo</option>
            <option value="06">Junio</option>
            <option value="07">Julio</option>
            <option value="08">Agosto</option>
            <option value="09">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select><br><br>

        <label for="year">Año:</label>
        <select name="year" id="year" required>
            <option value="">Selecciona el año</option>
            <?php for ($i = date('Y'); $i >= 2000; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>



        <!-- Selección de la Política KPI -->
        <label for="id_kpi_policy">Política KPI:</label>
        <select name="id_kpi_policy" id="id_kpi_policy" required>
            <?php foreach ($kpiPolicies as $policy): ?>
                <option value="<?= $policy['id_kpi_policy'] ?>"><?= $policy['policy_kpi_definition'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Selección del Objetivo -->
        <label for="id_objectives">Objetivo:</label>
        <select name="id_objectives" id="id_objectives" required>
            <?php foreach ($objectives as $objective): ?>
                <option value="<?= $objective['id_objectives'] ?>"><?= $objective['name_objectives'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Selección del KPI -->
        <label for="id_kpis">KPI:</label>
        <select name="id_kpis" id="id_kpis" required>
            <?php foreach ($kpis as $kpi): ?>
                <option value="<?= $kpi['id_kpis'] ?>"><?= $kpi['kpi_name'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Selección del Tipo de KPI -->
        <label for="id_kpi_type">Tipo de KPI:</label>
        <select name="id_kpi_type" id="id_kpi_type" required>
            <?php foreach ($kpiTypes as $type): ?>
                <option value="<?= $type['id_kpi_type'] ?>"><?= $type['kpi_type'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Definición del KPI -->
        <label for="id_kpi_definition">Definición del KPI:</label>
        <select name="id_kpi_definition" id="id_kpi_definition" required>
            <?php foreach ($kpiDefinitions as $definition): ?>
                <option value="<?= $definition['id_kpi_definition'] ?>"><?= $definition['name_kpi_definition'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Fuente de datos -->
        <label for="data_source">Fuente de datos:</label>
        <input type="text" name="data_source" id="data_source" required><br><br>

        <!-- Meta del KPI -->
        <label for="kpi_target">Meta del KPI:</label>
        <input type="number" name="kpi_target" id="kpi_target" required><br><br>

        <!-- Fórmula del KPI -->
        <label for="kpi_formula">Fórmula del KPI:</label>
        <input type="text" name="kpi_formula" id="kpi_formula"><br><br>

        <!-- Posiciones que deben conocer el resultado -->
        <label for="positions_should_know_result">Posiciones que deben conocer el resultado:</label>
        <input type="text" name="positions_should_know_result" id="positions_should_know_result"><br><br>

        <label for="periodicidad">Periodicidad:</label>
        <select name="periodicidad" id="periodicidad" required>
            <option value="">Selecciona la periodicidad</option> <!-- Opción por defecto -->
            <option value="mensual">Mensual</option>
            <option value="bimensual">Bimensual</option>
            <option value="trimestral">Trimestral</option>
            <option value="cuatrimestral">Cuatrimestral</option>
            <option value="semestral">Semestral</option>
            <option value="anual">Anual</option>
        </select><br><br>


        <!-- Selección del Responsable del Dato -->
        <label for="id_data_owner">Responsable del Dato:</label>
        <select name="id_data_owner" id="id_data_owner">
            <option value="">Seleccionar Responsable (Opcional)</option>
            <?php foreach ($dataOwners as $dataOwner): ?>
                <option value="<?= $dataOwner['id_data_owner'] ?>"><?= $dataOwner['data_owner'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <!-- Interpretación del KPI -->
        <label for="kpi_interpretation">Interpretación del KPI:</label>
        <textarea name="kpi_interpretation" id="kpi_interpretation" required></textarea><br><br>

        <!-- Periodos de medición -->
        <h3>Periodos de medición</h3>
        <?php foreach ($periodos as $periodo): ?>
            <h4>Periodo <?= $periodo ?></h4>

            <label for="variable_numerador_<?= $periodo ?>">Variable Numerador <?= $periodo ?>:</label>
            <select name="variable_numerador_<?= $periodo ?>" id="variable_numerador_<?= $periodo ?>">
                <?php foreach ($numerators as $numerator): ?>
                    <option value="<?= $numerator['id_numerator_variable'] ?>"><?= $numerator['numerator_variable_text'] ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="dato_variable_numerador_<?= $periodo ?>">Dato Variable Numerador <?= $periodo ?>:</label>
            <input type="number" name="dato_variable_numerador_<?= $periodo ?>" id="dato_variable_numerador_<?= $periodo ?>"><br><br>

            <label for="variable_denominador_<?= $periodo ?>">Variable Denominador <?= $periodo ?>:</label>
            <select name="variable_denominador_<?= $periodo ?>" id="variable_denominador_<?= $periodo ?>">
                <?php foreach ($denominators as $denominator): ?>
                    <option value="<?= $denominator['id_denominator_variable'] ?>"><?= $denominator['denominator_variable_text'] ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="dato_variable_denominador_<?= $periodo ?>">Dato Variable Denominador <?= $periodo ?>:</label>
            <input type="number" name="dato_variable_denominador_<?= $periodo ?>" id="dato_variable_denominador_<?= $periodo ?>"><br><br>

        <?php endforeach; ?>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Agregar KPI</button>

    </form>

    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

</body>

</html>