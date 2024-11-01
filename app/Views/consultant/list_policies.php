<!DOCTYPE html>
<html>
<head>
    <title>Lista de Contenidos</title>
    <!-- Integración de Bootstrap y DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Fondo claro */
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            color: #343a40; /* Color oscuro para encabezados */
        }
    </style>
</head>
<body>

<div class="container my-4">
    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button" class="btn btn-primary mb-3">Ir a DashBoard</button></a>

    <h1>Lista de Contenidos</h1>

    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <table id="contentTable" class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>Cliente</th>
                <th>Tipo de Contenido</th>
                <th>Texto del Contenido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($policies as $policy): ?>
                <tr>
                    <td><?= $clients[array_search($policy['client_id'], array_column($clients, 'id_cliente'))]['nombre_cliente'] ?></td>
                    <td><?= $policyTypes[array_search($policy['policy_type_id'], array_column($policyTypes, 'id'))]['type_name'] ?></td>
                    <td><?= $policy['policy_content'] ?></td>
                    <td>
                        <a href="<?= base_url('/editPolicy/'.$policy['id']) ?>" class="btn btn-outline-secondary btn-sm">Editar</a>
                        <a href="<?= base_url('/deletePolicy/'.$policy['id']) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta política?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?= base_url('/addPolicy') ?>" class="btn btn-success mt-3">Agregar Nuevo Texto a Documento</a>
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


<script>
    $(document).ready(function() {
        $('#contentTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
            }
        });
    });
</script>

</body>
</html>
