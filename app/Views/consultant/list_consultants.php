<!DOCTYPE html>
<html>

<head>
    <title>Lista de Consultores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .container {
            margin-top: 50px;
        }

        table {
            background-color: #ffffff;
        }
    </style>
</head>

<body>

    <nav style="background-color: white; position: fixed; top: 0; width: 100%; z-index: 1000; padding: 10px 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto;">

            <!-- Logo izquierdo -->
            <div>
                <a href="https://dashboard.cycloidtalent.com/login">
                    <img src="<?= base_url('uploads/logoenterprisesstblancoslogan.png') ?>" alt="Enterprisesst Logo" style="height: 100px;">
                </a>
            </div>

            <!-- Logo centro -->
            <div>
                <a href="https://cycloidtalent.com/index.php/consultoria-sst">
                    <img src="<?= base_url('uploads/logosst.png') ?>" alt="SST Logo" style="height: 100px;">
                </a>
            </div>

            <!-- Logo derecho -->
            <div>
                <a href="https://cycloidtalent.com/">
                    <img src="<?= base_url('uploads/logocycloidsinfondo.png') ?>" alt="Cycloids Logo" style="height: 100px;">
                </a>
            </div>

        </div>

        <!-- Fila de botones -->
        <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 10px auto 0; padding: 0 20px;">
            <!-- Botón izquierdo -->
            <div style="text-align: center;">
                <h2 style="margin: 0; font-size: 16px;">Ir a Dashboard</h2>
                <a href="<?= base_url('/dashboardconsultant') ?>" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-size: 14px; margin-top: 5px;">Ir a DashBoard</a>
            </div>

            <!-- Botón derecho -->
            <div style="text-align: center;">
                <h2 style="margin: 0; font-size: 16px;">Añadir Registro</h2>
                <a href="<?= base_url('/addConsultant') ?>" style="display: inline-block; padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; font-size: 14px; margin-top: 5px;" target="_blank">Añadir Registro</a>
            </div>
        </div>
    </nav>

    <!-- Ajustar el espaciado para evitar que el contenido se oculte bajo el navbar fijo -->
    <div style="height: 160px;"></div>


    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h2>Lista de Consultores</h2>
            <a href="<?= base_url('/addConsultant') ?>" class="btn btn-primary">Agregar Nuevo Consultor</a>
        </div>

        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <table id="consultantsTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Número de Licencia</th>
                    <th>Foto</th>
                    <th>Firma</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consultants as $consultant): ?>
                    <tr>
                        <td><?= $consultant['id_consultor'] ?></td>
                        <td><?= $consultant['nombre_consultor'] ?></td>
                        <td><?= $consultant['cedula_consultor'] ?></td>
                        <td><?= $consultant['usuario'] ?></td>
                        <td><?= $consultant['correo_consultor'] ?></td>
                        <td><?= $consultant['telefono_consultor'] ?></td>
                        <td><?= $consultant['numero_licencia'] ?></td>
                        <td>
                            <?php if (!empty($consultant['foto_consultor'])): ?>
                                <img src="<?= base_url('uploads/' . $consultant['foto_consultor']) ?>" alt="Foto del Consultor" width="50">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($consultant['firma_consultor'])): ?>
                                <img src="<?= base_url('uploads/' . $consultant['firma_consultor']) ?>" alt="Firma del Consultor" width="50">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('/editConsultant/' . $consultant['id_consultor']) ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="<?= base_url('/deleteConsultant/' . $consultant['id_consultor']) ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Volver al Dashboard</a>
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


    <script>
        $(document).ready(function() {
            $('#consultantsTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                }
            });
        });
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>