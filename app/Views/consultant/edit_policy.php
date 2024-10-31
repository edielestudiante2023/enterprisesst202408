<!DOCTYPE html>
<html>
<head>
    <title>Editar Política</title>
    <!-- Importar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Importar DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        textarea {
            resize: vertical;
        }
        .btn-primary, .btn-secondary {
            width: 100%;
            margin-top: 15px;
        }
        .btn-back {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

<h2>Ir a Dashboard</h2>
<!-- Botón para ir a la vista de agregar reportes -->
<div class="text-center mb-4">
    <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>
</div>

<h1>Editar Política</h1>

<form action="<?= base_url('/editPolicyPost/'.$policy['id']) ?>" method="post" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="client_id" class="form-label">Cliente:</label>
        <select name="client_id" id="client_id" class="form-select" required>
            <?php foreach ($clients as $client): ?>
                <option value="<?= $client['id_cliente'] ?>" <?= $client['id_cliente'] == $policy['client_id'] ? 'selected' : '' ?>><?= $client['nombre_cliente'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="policy_type_id" class="form-label">Tipo de Política:</label>
        <select name="policy_type_id" id="policy_type_id" class="form-select" required>
            <?php foreach ($policyTypes as $type): ?>
                <option value="<?= $type['id'] ?>" <?= $type['id'] == $policy['policy_type_id'] ? 'selected' : '' ?>><?= $type['type_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="policy_content" class="form-label">Contenido:</label>
        <textarea name="policy_content" id="policy_content" class="form-control" rows="5" required><?= $policy['policy_content'] ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Texto</button>
</form>

<a href="<?= base_url('/listPolicies') ?>" class="btn btn-secondary btn-back">Volver a la lista de Documentos</a>

<!-- Importar Bootstrap JS y dependencias -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<!-- Importar jQuery y DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        // Añadir validación a los formularios
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    });
</script>
</body>
</html>