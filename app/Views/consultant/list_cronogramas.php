<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cronogramas de Capacitación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            font-size: 0.9rem;
            background-color: #f9f9f9;
        }

        table thead {
            background-color: #f8f9fa;
        }

        table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        table {
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <div class="container my-4">
        <h2 class="text-center mb-4">Lista de Cronogramas de Capacitación</h2>

        <!-- Mostrar mensaje si hay algún mensaje flash de éxito o error -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-info">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table id="cronogramaTable" class="table table-bordered table-hover">
                <thead class="text-center">
                    <tr>
                        <th>#</th>
                        <th>Nombre de la Capacitación</th>
                        <th>Objetivo de la Capacitación</th>
                        <th>Nombre del Cliente</th>
                        <th>Fecha Programada</th>
                        <th>Fecha de Realización</th>
                        <th>Estado</th>
                        <th>Perfil de Asistentes</th>
                        <th>Capacitador</th>
                        <th>Horas de Duración</th>
                        <th>Indicador de Realización</th>
                        <th>Número de Asistentes</th>
                        <th>Total Programados</th>
                        <th>Porcentaje de Cobertura</th>
                        <th>Personas Evaluadas</th>
                        <th>Promedio de Calificaciones</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($cronogramas) && is_array($cronogramas)): ?>
                        <?php foreach ($cronogramas as $cronograma): ?>
                            <tr>
                                <td><?= esc($cronograma['id_cronograma_capacitacion']) ?></td>
                                <td><?= esc($cronograma['nombre_capacitacion']) ?></td>
                                <td><?= esc($cronograma['objetivo_capacitacion']) ?></td>
                                <td><?= esc($cronograma['nombre_cliente']) ?></td>
                                <td><?= esc($cronograma['fecha_programada']) ?></td>
                                <td><?= esc($cronograma['fecha_de_realizacion']) ?></td>
                                <td><?= esc($cronograma['estado']) ?></td>
                                <td><?= esc($cronograma['perfil_de_asistentes']) ?></td>
                                <td><?= esc($cronograma['nombre_del_capacitador']) ?></td>
                                <td><?= esc($cronograma['horas_de_duracion_de_la_capacitacion']) ?></td>
                                <td><?= esc($cronograma['indicador_de_realizacion_de_la_capacitacion']) ?></td>
                                <td><?= esc($cronograma['numero_de_asistentes_a_capacitacion']) ?></td>
                                <td><?= esc($cronograma['numero_total_de_personas_programadas']) ?></td>
                                <td><?= esc($cronograma['porcentaje_cobertura']) ?></td>
                                <td><?= esc($cronograma['numero_de_personas_evaluadas']) ?></td>
                                <td><?= esc($cronograma['promedio_de_calificaciones']) ?>%</td>
                                <td><?= esc($cronograma['observaciones']) ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('/editcronogCapacitacion/' . esc($cronograma['id_cronograma_capacitacion'])) ?>" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="<?= base_url('/deletecronogCapacitacion/' . esc($cronograma['id_cronograma_capacitacion'])) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cronograma?');">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="18" class="text-center">No hay cronogramas de capacitación registrados</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container my-4">
        <h2 class="mb-3">Agregar Cronograma de Capacitación</h2>
        <a href="<?= base_url('/addcronogCapacitacion') ?>" class="btn btn-primary">Agregar Cronograma</a>
    </div>

    <div class="container my-4">
        <h2 class="mb-3">Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Ir a DashBoard</a>
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


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#cronogramaTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>

</html>
