<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de KPIs de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</head>

<body class="bg-light text-dark">
    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de KPIs de Clientes</h2>
        <div class="table-responsive">
            <table id="kpisTable" class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <!-- <th>ID</th> -->
                        <!-- <th>Año</th> -->
                        <!-- <th>Mes</th> -->
                        <th>Cliente</th>
                        <!-- <th>Política KPI</th> -->
                        <!-- <th>Objetivo</th> -->
                        <th>KPI</th>
                        <!-- <th>Tipo</th> -->
                        <th>Definición</th>
                        <th>Meta</th>
                        <!-- <th>Fuente de datos</th> -->
                        <!-- <th>Responsable</th> -->
                        <!-- <th>Interpretación</th> -->
                        <th>Promedio del Indicador</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($clientKpis)) : ?>
                        <?php foreach ($clientKpis as $kpi) : ?>
                            <tr>
                                <!-- <td><?= $kpi['id_client_kpi'] ?></td> -->
                                <!-- <td><?= $kpi['year'] ?></td> -->
                                <!-- <td><?= $kpi['month'] ?></td> -->
                                <td><?= $kpi['cliente'] ?></td>
                                <!-- <td><?= $kpi['kpi_policy'] ?></td> -->
                                <!-- <td><?= $kpi['objective'] ?></td> -->
                                <td><?= $kpi['kpi'] ?></td>
                                <!-- <td><?= $kpi['kpi_type'] ?></td> -->
                                <td><?= $kpi['kpi_definition'] ?></td>
                                <td><?= $kpi['kpi_target'] ?>%</td>
                                <!-- <td><?= $kpi['data_source'] ?></td> -->
                                <!-- <td><?= $kpi['data_owner'] ?></td> -->
                                <!-- <td><?= $kpi['kpi_interpretation'] ?></td> -->
                                <td><?= number_format($kpi['promedio_indicadores'], 2) ?>%</td>
                                <td>
                                    <a href="<?= base_url('/listClientKpisFull/' . $kpi['id_client_kpi']) ?>" class="btn btn-info btn-sm">Ver completo</a>
                                    <a href="<?= base_url('/editClientKpi/' . $kpi['id_client_kpi']) ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="<?= base_url('/deleteClientKpi/' . $kpi['id_client_kpi']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este KPI?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="text-center">No hay KPIs registrados</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="my-4">
            <h2>Agregar Indicador</h2>
            <a href="<?= base_url('/addClientKpi') ?>" class="btn btn-primary">Agrega un Nuevo Indicador</a>
        </div>

        <div class="my-4">
            <h2>Ir a Dashboard</h2>
            <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a DashBoard</a>
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
        $(document).ready(function () {
            $('#kpisTable').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
