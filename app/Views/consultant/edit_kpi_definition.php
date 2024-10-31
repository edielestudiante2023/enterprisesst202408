<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Definición de KPI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="text-center mb-4">Editar Definición de KPI</h2>

            <form action="<?= base_url('editKpiDefinitionPost/' . $kpiDefinition['id_kpi_definition']) ?>" method="post">
                <div class="mb-3">
                    <label for="name_kpi_definition" class="form-label">Nombre de la Definición:</label>
                    <input type="text" class="form-control" name="name_kpi_definition" id="name_kpi_definition" value="<?= esc($kpiDefinition['name_kpi_definition']) ?>" required>
                </div>

                <div class="mb-3">
                    <label for="comment_kpi_definition" class="form-label">Comentario sobre la Definición:</label>
                    <input type="text" class="form-control" name="comment_kpi_definition" id="comment_kpi_definition" value="<?= esc($kpiDefinition['comment_kpi_definition']) ?>">
                </div>

                <div class="d-grid">
                    <input type="submit" class="btn btn-primary" value="Actualizar Definición de KPI">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
