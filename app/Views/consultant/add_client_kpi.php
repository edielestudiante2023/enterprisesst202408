<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar KPI del Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Agregar KPI del Cliente</h2>
        <form action="<?= base_url('/addClientKpiPost') ?>" method="post" class="card p-4 shadow-sm bg-white">

            <div class="mb-3">
                <label for="id_cliente" class="form-label">Cliente:</label>
                <select name="id_cliente" id="id_cliente" class="form-select" required>
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente['id_cliente'] ?>"><?= $cliente['nombre_cliente'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="month" class="form-label">Mes:</label>
                    <select name="month" id="month" class="form-select" required>
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
                    </select>
                </div>
                <div class="col">
                    <label for="year" class="form-label">Año:</label>
                    <select name="year" id="year" class="form-select" required>
                        <option value="">Selecciona el año</option>
                        <?php for ($i = date('Y'); $i >= 2000; $i--): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="id_kpi_policy" class="form-label">Política KPI:</label>
                <select name="id_kpi_policy" id="id_kpi_policy" class="form-select" required>
                    <?php foreach ($kpiPolicies as $policy): ?>
                        <option value="<?= $policy['id_kpi_policy'] ?>"><?= $policy['policy_kpi_definition'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_objectives" class="form-label">Objetivo:</label>
                <select name="id_objectives" id="id_objectives" class="form-select" required>
                    <?php foreach ($objectives as $objective): ?>
                        <option value="<?= $objective['id_objectives'] ?>"><?= $objective['name_objectives'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_kpis" class="form-label">KPI:</label>
                <select name="id_kpis" id="id_kpis" class="form-select" required>
                    <?php foreach ($kpis as $kpi): ?>
                        <option value="<?= $kpi['id_kpis'] ?>"><?= $kpi['kpi_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_kpi_type" class="form-label">Tipo de KPI:</label>
                <select name="id_kpi_type" id="id_kpi_type" class="form-select" required>
                    <?php foreach ($kpiTypes as $type): ?>
                        <option value="<?= $type['id_kpi_type'] ?>"><?= $type['kpi_type'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_kpi_definition" class="form-label">Definición del KPI:</label>
                <select name="id_kpi_definition" id="id_kpi_definition" class="form-select" required>
                    <?php foreach ($kpiDefinitions as $definition): ?>
                        <option value="<?= $definition['id_kpi_definition'] ?>"><?= $definition['name_kpi_definition'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="data_source" class="form-label">Fuente de datos:</label>
                <input type="text" name="data_source" id="data_source" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kpi_target" class="form-label">Meta del KPI:</label>
                <input type="number" name="kpi_target" id="kpi_target" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kpi_formula" class="form-label">Fórmula del KPI:</label>
                <input type="text" name="kpi_formula" id="kpi_formula" class="form-control">
            </div>

            <div class="mb-3">
                <label for="positions_should_know_result" class="form-label">Posiciones que deben conocer el resultado:</label>
                <input type="text" name="positions_should_know_result" id="positions_should_know_result" class="form-control">
            </div>

            <div class="mb-3">
                <label for="periodicidad" class="form-label">Periodicidad:</label>
                <select name="periodicidad" id="periodicidad" class="form-select" required>
                    <option value="">Selecciona la periodicidad</option>
                    <option value="mensual">Mensual</option>
                    <option value="bimensual">Bimensual</option>
                    <option value="trimestral">Trimestral</option>
                    <option value="cuatrimestral">Cuatrimestral</option>
                    <option value="semestral">Semestral</option>
                    <option value="anual">Anual</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_data_owner" class="form-label">Responsable del Dato:</label>
                <select name="id_data_owner" id="id_data_owner" class="form-select">
                    <option value="">Seleccionar Responsable (Opcional)</option>
                    <?php foreach ($dataOwners as $dataOwner): ?>
                        <option value="<?= $dataOwner['id_data_owner'] ?>"><?= $dataOwner['data_owner'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="kpi_interpretation" class="form-label">Interpretación del KPI:</label>
                <textarea name="kpi_interpretation" id="kpi_interpretation" class="form-control" required></textarea>
            </div>

            <h3 class="mt-4">Periodos de medición</h3>
            <?php foreach ($periodos as $periodo): ?>
                <h4 class="mt-3">Periodo <?= $periodo ?></h4>

                <div class="mb-3">
                    <label for="variable_numerador_<?= $periodo ?>" class="form-label">Variable Numerador <?= $periodo ?>:</label>
                    <select name="variable_numerador_<?= $periodo ?>" id="variable_numerador_<?= $periodo ?>" class="form-select">
                        <?php foreach ($numerators as $numerator): ?>
                            <option value="<?= $numerator['id_numerator_variable'] ?>"><?= $numerator['numerator_variable_text'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="dato_variable_numerador_<?= $periodo ?>" class="form-label">Dato Variable Numerador <?= $periodo ?>:</label>
                    <input type="number" name="dato_variable_numerador_<?= $periodo ?>" id="dato_variable_numerador_<?= $periodo ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="variable_denominador_<?= $periodo ?>" class="form-label">Variable Denominador <?= $periodo ?>:</label>
                    <select name="variable_denominador_<?= $periodo ?>" id="variable_denominador_<?= $periodo ?>" class="form-select">
                        <?php foreach ($denominators as $denominator): ?>
                            <option value="<?= $denominator['id_denominator_variable'] ?>"><?= $denominator['denominator_variable_text'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="dato_variable_denominador_<?= $periodo ?>" class="form-label">Dato Variable Denominador <?= $periodo ?>:</label>
                    <input type="number" name="dato_variable_denominador_<?= $periodo ?>" id="dato_variable_denominador_<?= $periodo ?>" class="form-control">
                </div>
            <?php endforeach; ?>

            <div class="mb-3">
                <label for="analisis_datos" class="form-label">Análisis de los datos:</label>
                <textarea name="analisis_datos" id="analisis_datos" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="seguimiento1" class="form-label">Seguimiento 1:</label>
                <textarea name="seguimiento1" id="seguimiento1" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="seguimiento2" class="form-label">Seguimiento 2:</label>
                <textarea name="seguimiento2" id="seguimiento2" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="seguimiento3" class="form-label">Seguimiento 3:</label>
                <textarea name="seguimiento3" id="seguimiento3" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Agregar KPI</button>
        </form>

        <div class="text-center mt-4">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a DashBoard</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
