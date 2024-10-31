<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Política de KPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-OPg3cVuJp8ZIh5dBgLJZ2qJvN/c1y92U6WoWQouOJUs/synBxZ6j7keE/N02ZkI3" crossorigin="anonymous">
</head>

<body style="background-color: #f8f9fa; color: #333;">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Editar Política de KPI</h2>
        <div class="card p-4 shadow-sm">
            <form action="<?= base_url('editKpiPolicyPost/' . $kpiPolicy['id_kpi_policy']) ?>" method="post">
                <div class="mb-3">
                    <label for="policy_kpi_definition" class="form-label">Definición de la Política:</label>
                    <input type="text" name="policy_kpi_definition" id="policy_kpi_definition" class="form-control" value="<?= esc($kpiPolicy['policy_kpi_definition']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="policy_kpi_comments" class="form-label">Comentarios sobre la Política:</label>
                    <input type="text" name="policy_kpi_comments" id="policy_kpi_comments" class="form-control" value="<?= esc($kpiPolicy['policy_kpi_comments']) ?>">
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-primary" value="Actualizar Política de KPI">
                </div>
            </form>
        </div>

        <div class="text-center mt-5">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>">
                <button type="button" class="btn btn-secondary mt-3">Ir a Dashboard</button>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6H8p3Y9z5T22AMGL8I4n5eAHsdC1HEEVo1CTRsW0nWm/OhkjET5" crossorigin="anonymous"></script>
</body>

</html>
