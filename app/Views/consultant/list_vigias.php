<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vigías</title>
    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS de DataTables -->
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #333;
            margin-top: 20px;
        }
        table {
            background-color: #fff;
        }
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #ced4da;
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Lista de Vigías</h2>

    <table id="vigiaTable" class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Nombre del Vigía</th>
                <th>Cédula</th>
                <th>Período</th>
                <th>Firma</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vigias as $vigia): ?>
                <tr>
                    <td><?= $vigia['nombre_vigia'] ?></td>
                    <td><?= $vigia['cedula_vigia'] ?></td>
                    <td><?= $vigia['periodo_texto'] ?></td>
                    <td>
                        <img src="<?= base_url('uploads/' . $vigia['firma_vigia']) ?>" alt="Firma del Vigía" style="max-width: 100px;">
                    </td>
                    <td>
                        <?php
                        // Obtener el nombre del cliente según el id_cliente
                        foreach ($clientes as $cliente) {
                            if ($cliente['id_cliente'] == $vigia['id_cliente']) {
                                echo $cliente['nombre_cliente'];
                                break;
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <a href="<?= base_url('editVigia/' . $vigia['id_vigia']) ?>" class="btn btn-sm btn-primary">Editar</a>
                        <a href="<?= base_url('deleteVigia/' . $vigia['id_vigia']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este vigía?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="<?= base_url('addVigia') ?>"><button type="button" class="btn btn-success">Añadir Vigía</button></a>
    <br><br>

    <h2>Ir a Dashboard</h2>
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button" class="btn btn-info">Ir a DashBoard</button></a>
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


<!-- JS de jQuery, Bootstrap y DataTables -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#vigiaTable').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    });
</script>

</body>
</html>
