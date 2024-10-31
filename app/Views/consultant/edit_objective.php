<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Objetivo de Política</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body class="bg-light text-dark">
    <div class="container my-5">
        <h2 class="text-center mb-4">Editar Objetivo de Política</h2>
        
        <form action="<?= base_url('editObjectivePost/' . $objective['id_objectives']) ?>" method="post" class="p-4 border rounded bg-white shadow-sm">
            <div class="mb-3">
                <label for="name_objectives" class="form-label">Nombre del Objetivo:</label>
                <input type="text" name="name_objectives" id="name_objectives" 
                       value="<?= esc($objective['name_objectives']) ?>" 
                       required class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="comments_objectives" class="form-label">Comentarios sobre el Objetivo:</label>
                <input type="text" name="comments_objectives" id="comments_objectives" 
                       value="<?= esc($objective['comments_objectives']) ?>" 
                       class="form-control">
            </div>

            <button type="submit" class="btn btn-primary w-100">Actualizar Objetivo</button>
        </form>

        <div class="text-center my-4">
            <h2 class="h5">Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary mt-2">Ir a DashBoard</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
