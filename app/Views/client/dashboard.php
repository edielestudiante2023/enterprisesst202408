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
            /* Fondo claro */
            color: #1C2437;
            /* Texto oscuro */
        }

        .navbar {
            background-color: #EFEBDF;
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
        }

        .sidebar a {
            color: #1C2437;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #B89553;
            /* Efecto dorado en hover */
        }

        .content {
            padding: 20px;
        }

        .table th {
            background-color: #47485A;
            /* Encabezado de tabla en gris oscuro */
            color: #EFEBDF;
            /* Texto en blanco crema */
        }

        .table td a {
            color: #1C2437;
            text-decoration: none;
        }

        .table td a:hover {
            color: #B89553;
            /* Efecto dorado en hover */
        }

        .header-logos img {
            max-height: 50px;
            /* Ajustar el tamaño de los logos */
            margin-right: 15px;
        }

        /* Flexbox para alinear las imágenes en miniatura */
        .image-flex {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 20px;
        }

        .image-flex img {
            max-width: 48%;
            /* Ajuste para que ocupen la mitad del contenedor */
            height: auto;
            border: 2px solid #B89553;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between" style="display: flex; align-items: center; justify-content: space-between;">
                <!-- Logo principal ajustado -->
                <div>
                    <img src="<?= base_url('uploads/logo_enterprisesst.jpeg') ?>" alt="Enterprisesst Logo" class="header-logos" style="max-height: 150px;">
                </div>


            </div>

            

            <a href="<?= base_url('/logout') ?>" style="display: inline-block; padding: 10px 20px; background-color: #B89553; color: #1C2437; text-decoration: none; border-radius: 5px; font-weight: bold;">
                Cerrar Sesión
            </a>

        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3">
                <nav>
                    <h4 class="text-center">Menú Principal</h4>
                    <ul class="nav flex-column">
                        <!-- Opciones del cliente -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('listPlanTrabajoCliente/' . $client['id_cliente']) ?>" target="_blank">
                                Plan de Trabajo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('listCronogramasCliente/' . $client['id_cliente']) ?>" target="_blank">
                                Cronograma
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('listPendientesCliente/' . $client['id_cliente']) ?>" target="_blank">
                                Pendientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('listEvaluaciones/' . $client['id_cliente']) ?>" target="_blank">
                                Evaluaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/report_dashboard') ?>" target="blank">Reportes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/viewDocuments') ?>" target="_blank">Documentos</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Contenido principal -->
            <div class="col-md-10 content">
                <!-- Mensaje de bienvenida -->
                <section>
                    <header class="major">
                        <h2><?= esc($client['nombre_cliente']) ?> </h2>
                        <h3>Bienvenido a tu Plataforma Tecnológica Enterprise-SST</h3>
                    </header>
                    <p>Gestiona todos tus indicadores y documentos del Sistema de Seguridad y Salud en el Trabajo de forma eficiente y moderna.</p>
                </section>




                <!-- Tabla de accesos por dimensiones con DataTables y numeración -->
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
                        $index = 1; // Índice de numeración

                        foreach ($accesos as $acceso):
                            if ($current_dimension !== $acceso['dimension']):
                                $current_dimension = $acceso['dimension']; ?>
                                <tr>
                                    <td colspan="2"><strong><?= esc($current_dimension) ?></strong></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td><?= $index++ ?></td> <!-- Numeración -->

                                <td>
                                    <a href="<?= base_url($acceso['url']) ?>" target="_blank">
                                        <?= esc($acceso['nombre']) ?>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- Sección de contacto -->
                <section class="asesoria-section" style="padding: 30px; background-color: #EFEBDF; border: 2px solid #B89553; border-radius: 10px; margin-top: 20px;">
                    <header class="major">
                        <h2 style="text-align: center; color: #1C2437;">¿Necesitas Asesoría o Acompañamiento en SST?</h2>
                    </header>
                    <p style="text-align: center; color: #47485A; font-size: 18px; line-height: 1.6;">
                        Somos un equipo de profesionales con una amplia red de aliados para atenderte en lo que necesites.
                    </p>
                    <div style="text-align: center; margin-top: 20px;">
                        <p style="font-size: 16px; color: #1C2437; font-weight: bold;">diana.cuestas@cycloidtalent.com</p>
                        <p style="font-size: 16px; color: #1C2437;">3229074371</p>
                        <p style="font-size: 18px; font-weight: bold; color: #B89553;">Normatividad SST Actualizada</p>
                    </div>
                    <div class="image-flex" style="margin-top: 20px;">
                        <img src="<?= base_url('uploads/imagen1dashboard.png') ?>" alt="Imagen Dashboard 1" class="dashboard-image" style="width: 48%; border-radius: 10px;">
                        <img src="<?= base_url('uploads/imagen2dashboard.png') ?>" alt="Imagen Dashboard 2" class="dashboard-image" style="width: 48%; border-radius: 10px;">
                    </div>
                    <div style="text-align: center; margin-top: 20px;">
                        <img src="<?= base_url('uploads/logocycloid.png') ?>" alt="Cycloid Logo" style="max-height: 60px;">
                    </div>
                </section>


                <!-- Sección con imágenes y texto, ajustadas con display:flex -->

            </div>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-between" style="display: flex; align-items: center; justify-content: space-between;">
        <!-- Logo principal ajustado -->


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