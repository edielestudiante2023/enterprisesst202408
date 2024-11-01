<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versiones del Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#documentTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
                },
                "paging": true,
                "searching": true,
                "info": true
            });
        });
    </script>
</head>
<body class="bg-light text-dark">

<div class="container mt-5">
    <h1 class="text-center mb-4">Versiones del Documento</h1>

    <div class="table-responsive">
        <table id="documentTable" class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nombre del Cliente</th>
                    <th>Nombre del Documento</th>
                    <th>Tipo de Documento</th>
                    <th>Acrónimo</th>
                    <th>Número de Versión</th>
                    <th>Ubicación</th>
                    <th>Estado</th>
                    <th>Control de Cambios</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($versions as $version): ?>
                    <tr>
                        <td><?= $version['nombre_cliente'] ?></td>
                        <td><?= $version['type_name'] ?></td>
                        <td><?= $version['document_type'] ?></td>
                        <td><?= $version['acronym'] ?></td>
                        <td><?= $version['version_number'] ?></td>
                        <td><?= $version['location'] ?></td>
                        <td><?= $version['status'] ?></td>
                        <td><?= $version['change_control'] ?></td>
                        <td><?= $version['created_at'] ?></td>
                        <td>
                            <a href="<?= base_url('editVersion/' . $version['id']) ?>" class="btn btn-outline-primary btn-sm me-2">Editar</a>
                            <a href="<?= base_url('deleteVersion/' . $version['id']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta versión?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <a href="<?= base_url('addVersion') ?>" class="btn btn-success">Añadir Nueva Versión</a>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary">Ir a DashBoard</a>
    </div>
</div>


<footer style="background-color: white; padding: 20px 0; border-top: 1px solid #B0BEC5; margin-top: 40px; color: #3A3F51; font-size: 14px; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
            <!-- Company and Rights -->
            <p style="margin: 0; font-weight: bold;">Cycloid Talent SAS</p>
            <p style="margin: 5px 0;">Todos los derechos reservados © 2024</p>
            <p style="margin: 5px 0;">NIT: 901.653.912</p>

            <!-- Website Link -->
            <p style="margin: 5px 0;">
                Sitio oficial: <a href="https://cycloidtalent.com/" target="_blank" style="color: #007BFF; text-decoration: none;">https://cycloidtalent.com/</a>
            </p>

            <!-- Social Media Links -->
            <p style="margin: 15px 0 5px;"><strong>Nuestras Redes Sociales:</strong></p>
            <div style="display: flex; gap: 15px; justify-content: center;">
                <a href="https://www.facebook.com/CycloidTalent" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" style="height: 24px; width: 24px;">
                </a>
                <a href="https://co.linkedin.com/company/cycloid-talent" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn" style="height: 24px; width: 24px;">
                </a>
                <a href="https://www.instagram.com/cycloid_talent?igsh=Nmo4d2QwZDg5dHh0" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram" style="height: 24px; width: 24px;">
                </a>
                <a href="https://www.tiktok.com/@cycloid_talent?_t=8qBSOu0o1ZN&_r=1" target="_blank" style="color: #3A3F51; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/512/3046/3046126.png" alt="TikTok" style="height: 24px; width: 24px;">
                </a>
            </div>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
