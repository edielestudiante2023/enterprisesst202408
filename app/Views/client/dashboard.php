<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Enterprisesst</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F5F7FA;
            color: #2C3E50;
        }
        
        /* Navbar Styles */
        .navbar {
            background-color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 10px 0;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 100px;
        }

        .header-logos {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-logos img {
            height: 100px;
        }

        .logout-btn {
            padding: 8px 16px;
            background-color: #6c757d;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .logout-btn:hover {
            background-color: #495057;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #E9ECEF;
            height: 100vh;
            border-right: 1px solid #B0BEC5;
            padding-top: 15px;
        }

        .sidebar h4 {
            color: #3A3F51;
            font-weight: bold;
            text-align: center;
        }

        .sidebar a {
            color: #2C3E50;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar a:hover {
            color: #495057;
        }

        /* Content and Table Styles */
        .content {
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            margin-top: 20px;
        }

        .table th {
            background-color: #B0BEC5;
            color: #2C3E50;
        }

        .table td a {
            color: #3A3F51;
            text-decoration: none;
        }

        .table td a:hover {
            color: #007BFF;
        }

        /* Asesoria Section */
        .asesoria-section {
            padding: 30px;
            background-color: #E9ECEF;
            border: 1px solid #B0BEC5;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .image-flex {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin-top: 20px;
        }

        .image-flex img {
            max-width: 48%;
            height: auto;
            border: 1px solid #B0BEC5;
            border-radius: 10px;
        }

        /* Adjust for navbar */
        .container-fluid {
            margin-top: 140px; /* Adjust for navbar height */
        }
    </style>
</head>

<body>

    <!-- Navbar with Images and Logout Button -->
    <nav class="navbar">
        <div class="header-logos">
            <!-- Left Logo -->
            <a href="#">
                <img src="<?= base_url('uploads/logoenterprisesstblancoslogan.png') ?>" alt="Enterprisesst Logo">
            </a>
            <!-- Center Logo -->
            <a href="#">
                <img src="<?= base_url('uploads/logosst.png') ?>" alt="SST Logo">
            </a>
            <!-- Right Logo -->
            <a href="#">
                <img src="<?= base_url('uploads/logocycloidsinfondo.png') ?>" alt="Cycloids Logo">
            </a>
            <!-- Logout Button -->
            <a href="<?= base_url('/logout') ?>" class="logout-btn">Cerrar Sesión</a>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <nav>
                    <h4>Menú Principal</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listPlanTrabajoCliente/' . $client['id_cliente']) ?>" target="_blank">Plan de Trabajo</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listCronogramasCliente/' . $client['id_cliente']) ?>" target="_blank">Cronograma</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listPendientesCliente/' . $client['id_cliente']) ?>" target="_blank">Pendientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listEvaluaciones/' . $client['id_cliente']) ?>" target="_blank">Evaluaciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/report_dashboard') ?>" target="_blank">Reportes</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/viewDocuments') ?>" target="_blank">Documentos</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-10 content">
                <section>
                    <header class="major">
                        <h2><?= esc($client['nombre_cliente']) ?></h2>
                        <h3>Bienvenido a tu Plataforma Tecnológica Enterprise-SST</h3>
                    </header>
                    <p>Gestiona todos tus indicadores y documentos del Sistema de Seguridad y Salud en el Trabajo de forma eficiente y moderna.</p>
                </section>

                <!-- Data Table -->
                <table id="accesosTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Dimensión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $current_dimension = '';
                        $index = 1;

                        foreach ($accesos as $acceso):
                            if ($current_dimension !== $acceso['dimension']):
                                $current_dimension = $acceso['dimension']; ?>
                                <tr>
                                    <td colspan="2"><strong><?= esc($current_dimension) ?></strong></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td><?= $index++ ?></td>
                                <td><a href="<?= base_url($acceso['url']) ?>" target="_blank"><?= esc($acceso['nombre']) ?></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- Asesoría Section -->
                <section class="asesoria-section">
                    <header class="major">
                        <h2>¿Necesitas Asesoría o Acompañamiento en SST?</h2>
                    </header>
                    <p>Somos un equipo de profesionales con una amplia red de aliados para atenderte en lo que necesites.</p>
                    <div>
                        <p><strong>diana.cuestas@cycloidtalent.com</strong></p>
                        <p>3229074371</p>
                        <p><strong style="color: #546E7A;">Normatividad SST Actualizada</strong></p>
                    </div>
                    <div class="image-flex">
                        <img src="<?= base_url('uploads/imagen1dashboard.png') ?>" alt="Imagen Dashboard 1">
                        <img src="<?= base_url('uploads/imagen2dashboard.png') ?>" alt="Imagen Dashboard 2">
                    </div>
                    <div style="margin-top: 20px;">
                        <img src="<?= base_url('uploads/logocycloid.png') ?>" alt="Cycloid Logo" style="max-height: 70px;">
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- DataTables and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#accesosTable').DataTable({
                paging: true,
                searching: true,
                lengthChange: true,
                pageLength: 5,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                }
            });
        });
    </script>

</body>
</html>
