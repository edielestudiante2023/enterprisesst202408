<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Consultor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body class="bg-light text-dark">

    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <a href="<?= base_url('/index.php/listConsultants') ?>" class="btn btn-primary">Ver Lista de Consultores</a>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Volver al Dashboard</a>
        </div>

        <h2 class="text-center mb-4">Agregar Nuevo Consultor</h2>

        <div class="card shadow p-4">
            <form action="<?= base_url('/addConsultantPost') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre_consultor" class="form-label">Nombre Consultor:</label>
                    <input type="text" id="nombre_consultor" name="nombre_consultor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="cedula_consultor" class="form-label">Cédula Consultor:</label>
                    <input type="text" id="cedula_consultor" name="cedula_consultor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="correo_consultor" class="form-label">Correo Consultor:</label>
                    <input type="email" id="correo_consultor" name="correo_consultor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="telefono_consultor" class="form-label">Teléfono Consultor:</label>
                    <input type="text" id="telefono_consultor" name="telefono_consultor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="numero_licencia" class="form-label">Número de Licencia:</label>
                    <input type="text" id="numero_licencia" name="numero_licencia" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="foto_consultor" class="form-label">Foto del Consultor:</label>
                    <input type="file" id="foto_consultor" name="foto_consultor" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="firma_consultor" class="form-label">Firma del Consultor:</label>
                    <input type="file" id="firma_consultor" name="firma_consultor" class="form-control" accept="image/*">
                </div>

                <input type="hidden" name="id_cliente" value="1">

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Agregar Consultor</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script>
        // DataTable initialization (apply if tables are added)
        $(document).ready(function () {
            $('table').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                },
                pageLength: 10,
                lengthChange: true,
                filter: true,
                ordering: true
            });
        });
    </script>

</body>

</html>
