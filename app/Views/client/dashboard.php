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
            background-color: #EFEBDF;
            color: #1C2437;
        }

        .navbar {
            background-color: #B89553;
            padding: 15px;
        }

        .navbar-brand img {
            max-height: 50px;
        }

        .header-logos img {
            max-height: 50px;
            margin-right: 10px;
        }

        .sidebar {
            background-color: #EFEBDF;
            height: 100vh;
            border-right: 2px solid #B89553;
        }

        .sidebar h4 {
            color: #B89553;
            text-align: center;
        }

        .sidebar a {
            color: #1C2437;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar a:hover {
            color: #B89553;
        }

        .content {
            padding: 20px;
        }

        .table th {
            background-color: #47485A;
            color: #EFEBDF;
        }

        .table td a {
            color: #1C2437;
            text-decoration: none;
        }

        .table td a:hover {
            color: #B89553;
        }

        .asesoria-section {
            padding: 30px;
            background-color: #EFEBDF;
            border: 2px solid #B89553;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .image-flex {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 20px;
        }

        .image-flex img {
            max-width: 48%;
            height: auto;
            border: 2px solid #B89553;
            border-radius: 10px;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #B89553;
            color: #1C2437;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('uploads/logo_enterprisesst.jpeg') ?>" alt="Enterprisesst Logo" class="header-logos">
            </a>
            <a href="<?= base_url('/logout') ?>" class="logout-btn">Cerrar Sesión</a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar p-3">
                <nav>
                    <h4>Menú Principal</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listPlanTrabajoCliente/' . $client['id_cliente']) ?>" target="_blank">Plan de Trabajo</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listCronogramasCliente/' . $client['id_cliente']) ?>" target="_blank">Cronograma</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listPendientesCliente/' . $client['id_cliente']) ?>" target="_blank">Pendientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('listEvaluaciones/' . $client['id_cliente']) ?>" target="_blank">Evaluaciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/report_dashboard') ?>" target="blank">Reportes</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/viewDocuments') ?>" target="_blank">Documentos</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-md-10 content">
                <section>
                    <header class="major">
                        <h2><?= esc($client['nombre_cliente']) ?> </h2>
                        <h3>Bienvenido a tu Plataforma Tecnológica Enterprise-SST</h3>
                    </header>
                    <p>Gestiona todos tus indicadores y documentos del Sistema de Seguridad y Salud en el Trabajo de forma eficiente y moderna.</p>
                </section>

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

                <section class="asesoria-section">
                    <header class="major">
                        <h2>¿Necesitas Asesoría o Acompañamiento en SST?</h2>
                    </header>
                    <p>Somos un equipo de profesionales con una amplia red de aliados para atenderte en lo que necesites.</p>
                    <div>
                        <p><strong>diana.cuestas@cycloidtalent.com</strong></p>
                        <p>3229074371</p>
                        <p><strong style="color: #B89553;">Normatividad SST Actualizada</strong></p>
                    </div>
                    <div class="image-flex">
                        <img src="<?= base_url('uploads/imagen1dashboard.png') ?>" alt="Imagen Dashboard 1">
                        <img src="<?= base_url('uploads/imagen2dashboard.png') ?>" alt="Imagen Dashboard 2">
                    </div>
                    <div style="margin-top: 20px;">
                        <img src="<?= base_url('uploads/logocycloid.png') ?>" alt="Cycloid Logo" style="max-height: 60px;">
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
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
