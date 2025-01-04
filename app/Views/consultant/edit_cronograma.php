<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cronograma de Capacitación</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Asegúrate de agregar el path correcto a tu archivo CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            font-size: 0.9rem;
            background-color: #f8f9fa;
        }

        h2 {
            color: #495057;
        }

        .form-control {
            background-color: #ffffff;
            border-color: #ced4da;
            color: #495057;
        }

        .form-group label {
            font-weight: 500;
            color: #495057;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
    </style>
</head>

<body>

    <nav style="background-color: white; position: fixed; top: 0; width: 100%; z-index: 1000; padding: 10px 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 20px;">

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

            <!-- Botón -->
            <div style="text-align: center;">
                <h2 style="margin: 0; font-size: 16px;">Ir a Dashboard</h2>
                <a href="<?= base_url('/dashboardconsultant') ?>" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; font-size: 14px; margin-top: 5px;">Ir a DashBoard</a>
            </div>
        </div>
    </nav>

    <!-- Ajustar el espaciado para evitar que el contenido se oculte bajo el navbar fijo -->
    <div style="height: 160px;"></div>

    <div class="container my-4">
        <h2 class="text-center">Editar Cronograma de Capacitación</h2>

        <!-- Mostrar mensaje si hay algún mensaje flash de éxito o error -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-info">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/editcronogCapacitacionPost/' . $cronograma['id_cronograma_capacitacion']) ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id_capacitacion">Capacitación</label>
                        <select name="id_capacitacion" class="form-control" required>
                            <?php foreach ($capacitaciones as $capacitacion): ?>
                                <option value="<?= $capacitacion['id_capacitacion'] ?>" <?= ($cronograma['id_capacitacion'] == $capacitacion['id_capacitacion']) ? 'selected' : '' ?>>
                                    <?= $capacitacion['capacitacion'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_cliente">Cliente</label>
                        <select name="id_cliente" class="form-control" required>
                            <?php foreach ($clientes as $cliente): ?>
                                <option value="<?= $cliente['id_cliente'] ?>" <?= ($cronograma['id_cliente'] == $cliente['id_cliente']) ? 'selected' : '' ?>>
                                    <?= $cliente['nombre_cliente'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fecha_programada">Fecha Programada</label>
                        <input type="date" name="fecha_programada" class="form-control" value="<?= esc($cronograma['fecha_programada']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="fecha_de_realizacion">Fecha de Realización</label>
                        <input type="date" name="fecha_de_realizacion" class="form-control" value="<?= esc($cronograma['fecha_de_realizacion']) ?>">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select name="estado" class="form-control" required>
                            <option value="PROGRAMADA" <?= ($cronograma['estado'] == 'PROGRAMADA') ? 'selected' : '' ?>>PROGRAMADA</option>
                            <option value="EJECUTADA" <?= ($cronograma['estado'] == 'EJECUTADA') ? 'selected' : '' ?>>EJECUTADA</option>
                            <option value="CANCELADA POR EL CLIENTE" <?= ($cronograma['estado'] == 'CANCELADA POR EL CLIENTE') ? 'selected' : '' ?>>CANCELADA POR EL CLIENTE</option>
                            <option value="REPROGRAMADA" <?= ($cronograma['estado'] == 'REPROGRAMADA') ? 'selected' : '' ?>>REPROGRAMADA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="perfil_de_asistentes">Perfil de Asistentes</label>
                        <select name="perfil_de_asistentes" class="form-control" required>
                            <option value="CONTRATISTAS" <?= ($cronograma['perfil_de_asistentes'] == 'CONTRATISTAS') ? 'selected' : '' ?>>CONTRATISTAS</option>
                            <option value="RESIDENTES" <?= ($cronograma['perfil_de_asistentes'] == 'RESIDENTES') ? 'selected' : '' ?>>RESIDENTES</option>
                            <option value="TODOS" <?= ($cronograma['perfil_de_asistentes'] == 'TODOS') ? 'selected' : '' ?>>TODOS</option>
                            <option value="ASAMBLEA" <?= ($cronograma['perfil_de_asistentes'] == 'ASAMBLEA') ? 'selected' : '' ?>>ASAMBLEA</option>
                            <option value="CONSEJO DE ADMINISTRACIÓN" <?= ($cronograma['perfil_de_asistentes'] == 'CONSEJO DE ADMINISTRACIÓN') ? 'selected' : '' ?>>CONSEJO DE ADMINISTRACIÓN</option>
                            <option value="ADMINISTRADOR" <?= ($cronograma['perfil_de_asistentes'] == 'ADMINISTRADOR') ? 'selected' : '' ?>>ADMINISTRADOR</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre_del_capacitador">Nombre del Capacitador</label>
                        <input type="text" name="nombre_del_capacitador" class="form-control" value="<?= esc($cronograma['nombre_del_capacitador']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="horas_de_duracion_de_la_capacitacion">Horas de Duración</label>
                        <input type="number" name="horas_de_duracion_de_la_capacitacion" class="form-control" value="<?= esc($cronograma['horas_de_duracion_de_la_capacitacion']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="indicador_de_realizacion_de_la_capacitacion">Indicador de Realización</label>
                        <select name="indicador_de_realizacion_de_la_capacitacion" class="form-control" required>
                            <option value="SE EJECUTO EN LA FECHA O ANTES DE LA FECHA" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'SE EJECUTO EN LA FECHA O ANTES DE LA FECHA') ? 'selected' : '' ?>>SE EJECUTÓ EN LA FECHA O ANTES DE LA FECHA</option>
                            <option value="SE EJECUTO DESPUES DE LA FECHA ACORDADA A CAUSA DEL CLIENTE" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'SE EJECUTO DESPUES DE LA FECHA ACORDADA A CAUSA DEL CLIENTE') ? 'selected' : '' ?>>SE EJECUTÓ DESPUÉS DE LA FECHA ACORDADA A CAUSA DEL CLIENTE</option>
                            <option value="DECLINADA POR EL CLIENTE" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'DECLINADA POR EL CLIENTE') ? 'selected' : '' ?>>DECLINADA POR EL CLIENTE</option>
                            <option value="NO HAY JUSTIFICACION PORQUE NO SE REALIZÓ" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'NO HAY JUSTIFICACION PORQUE NO SE REALIZÓ') ? 'selected' : '' ?>>NO HAY JUSTIFICACIÓN PORQUE NO SE REALIZÓ</option>
                            <option value="SE EJECUTO DESPUES DE LA FECHA POR CAUSA DEL CAPACITADOR" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'SE EJECUTO DESPUES DE LA FECHA POR CAUSA DEL CAPACITADOR') ? 'selected' : '' ?>>SE EJECUTÓ DESPUÉS DE LA FECHA POR CAUSA DEL CAPACITADOR</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="numero_de_asistentes_a_capacitacion">Número de Asistentes</label>
                        <input type="number" name="numero_de_asistentes_a_capacitacion" class="form-control" value="<?= esc($cronograma['numero_de_asistentes_a_capacitacion']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="numero_total_de_personas_programadas">Número Total de Programados</label>
                        <input type="number" name="numero_total_de_personas_programadas" class="form-control" value="<?= esc($cronograma['numero_total_de_personas_programadas']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="indicador_de_realizacion_de_la_capacitacion">Indicador de Realización</label>
                        <input type="text" name="indicador_de_realizacion_de_la_capacitacion" class="form-control" value="<?= esc($cronograma['indicador_de_realizacion_de_la_capacitacion']) ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="porcentaje_cobertura">Porcentaje de Cobertura</label>
                        <input type="text" name="porcentaje_cobertura" class="form-control" value="<?= esc($cronograma['porcentaje_cobertura']) ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="numero_de_personas_evaluadas">Número de Evaluados</label>
                        <input type="number" name="numero_de_personas_evaluadas" class="form-control" value="<?= esc($cronograma['numero_de_personas_evaluadas']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="promedio_de_calificaciones">Promedio de Calificaciones</label>
                        <input type="number" step="0.01" name="promedio_de_calificaciones" class="form-control" value="<?= esc($cronograma['promedio_de_calificaciones']) ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                        <textarea name="observaciones" class="form-control"><?= esc($cronograma['observaciones']) ?></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
            <a href="<?= base_url('/listcronogCapacitacion') ?>" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
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

    <script src="path/to/bootstrap.min.js"></script> <!-- Asegúrate de agregar el path correcto a tu archivo JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cronograma de Capacitación</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            font-size: 0.9rem;
            background-color: #f8f9fa;
        }

        h2 {
            color: #495057;
        }

        .form-control {
            background-color: #ffffff;
            border-color: #ced4da;
            color: #495057;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        footer {
            background-color: white;
            padding: 20px 0;
            border-top: 1px solid #B0BEC5;
            margin-top: 40px;
            color: #3A3F51;
            font-size: 14px;
            text-align: center;
        }

        footer a {
            color: #007BFF;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .social-icons img {
            height: 24px;
            width: 24px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container-fluid">
            <!-- Logos -->
            <div class="d-flex align-items-center">
                <a href="https://dashboard.cycloidtalent.com/login" class="me-3">
                    <img src="<?= base_url('uploads/logoenterprisesstblancoslogan.png') ?>" alt="Enterprisesst Logo" height="60">
                </a>
                <a href="https://cycloidtalent.com/index.php/consultoria-sst" class="me-3">
                    <img src="<?= base_url('uploads/logosst.png') ?>" alt="SST Logo" height="60">
                </a>
                <a href="https://cycloidtalent.com/">
                    <img src="<?= base_url('uploads/logocycloidsinfondo.png') ?>" alt="Cycloids Logo" height="60">
                </a>
            </div>

            <!-- Botón Dashboard -->
            <div class="ms-auto text-center">
                <h6 class="mb-1">Ir a Dashboard</h6>
                <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-primary btn-sm">Ir a DashBoard</a>
            </div>
        </div>
    </nav>

    <!-- Espaciado para el navbar fijo -->
    <div style="height: 160px;"></div>

    <!-- Contenido Principal -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Editar Cronograma de Capacitación</h2>

        <!-- Mensajes Flash -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-info">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <!-- Formulario -->
        <form action="<?= base_url('/editcronogCapacitacionPost/' . $cronograma['id_cronograma_capacitacion']) ?>" method="post">
            <div class="row">
                <!-- Columna Izquierda -->
                <div class="col-md-6">
                    <!-- Capacitación -->
                    <div class="mb-3">
                        <label for="id_capacitacion" class="form-label">Capacitación</label>
                        <select name="id_capacitacion" id="id_capacitacion" class="form-select" required>
                            <?php foreach ($capacitaciones as $capacitacion): ?>
                                <option value="<?= $capacitacion['id_capacitacion'] ?>" <?= ($cronograma['id_capacitacion'] == $capacitacion['id_capacitacion']) ? 'selected' : '' ?>>
                                    <?= $capacitacion['capacitacion'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Cliente -->
                    <div class="mb-3">
                        <label for="id_cliente" class="form-label">Cliente</label>
                        <select name="id_cliente" id="id_cliente" class="form-select" required>
                            <?php foreach ($clientes as $cliente): ?>
                                <option value="<?= $cliente['id_cliente'] ?>" <?= ($cronograma['id_cliente'] == $cliente['id_cliente']) ? 'selected' : '' ?>>
                                    <?= $cliente['nombre_cliente'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Fecha Programada -->
                    <div class="mb-3">
                        <label for="fecha_programada" class="form-label">Fecha Programada</label>
                        <input type="date" name="fecha_programada" id="fecha_programada" class="form-control" value="<?= esc($cronograma['fecha_programada']) ?>" required>
                    </div>

                    <!-- Fecha de Realización -->
                    <div class="mb-3">
                        <label for="fecha_de_realizacion" class="form-label">Fecha de Realización</label>
                        <input type="date" name="fecha_de_realizacion" id="fecha_de_realizacion" class="form-control" value="<?= esc($cronograma['fecha_de_realizacion']) ?>">
                    </div>

                    <!-- Estado -->
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select name="estado" id="estado" class="form-select" required>
                            <option value="PROGRAMADA" <?= ($cronograma['estado'] == 'PROGRAMADA') ? 'selected' : '' ?>>PROGRAMADA</option>
                            <option value="EJECUTADA" <?= ($cronograma['estado'] == 'EJECUTADA') ? 'selected' : '' ?>>EJECUTADA</option>
                            <option value="CANCELADA POR EL CLIENTE" <?= ($cronograma['estado'] == 'CANCELADA POR EL CLIENTE') ? 'selected' : '' ?>>CANCELADA POR EL CLIENTE</option>
                            <option value="REPROGRAMADA" <?= ($cronograma['estado'] == 'REPROGRAMADA') ? 'selected' : '' ?>>REPROGRAMADA</option>
                        </select>
                    </div>

                    <!-- Perfil de Asistentes -->
                    <div class="mb-3">
                        <label for="perfil_de_asistentes" class="form-label">Perfil de Asistentes</label>
                        <select name="perfil_de_asistentes" id="perfil_de_asistentes" class="form-select" required>
                            <option value="CONTRATISTAS" <?= ($cronograma['perfil_de_asistentes'] == 'CONTRATISTAS') ? 'selected' : '' ?>>CONTRATISTAS</option>
                            <option value="RESIDENTES" <?= ($cronograma['perfil_de_asistentes'] == 'RESIDENTES') ? 'selected' : '' ?>>RESIDENTES</option>
                            <option value="TODOS" <?= ($cronograma['perfil_de_asistentes'] == 'TODOS') ? 'selected' : '' ?>>TODOS</option>
                            <option value="ASAMBLEA" <?= ($cronograma['perfil_de_asistentes'] == 'ASAMBLEA') ? 'selected' : '' ?>>ASAMBLEA</option>
                            <option value="CONSEJO DE ADMINISTRACIÓN" <?= ($cronograma['perfil_de_asistentes'] == 'CONSEJO DE ADMINISTRACIÓN') ? 'selected' : '' ?>>CONSEJO DE ADMINISTRACIÓN</option>
                            <option value="ADMINISTRADOR" <?= ($cronograma['perfil_de_asistentes'] == 'ADMINISTRADOR') ? 'selected' : '' ?>>ADMINISTRADOR</option>
                        </select>
                    </div>
                </div>

                <!-- Columna Derecha -->
                <div class="col-md-6">
                    <!-- Nombre del Capacitador -->
                    <div class="mb-3">
                        <label for="nombre_del_capacitador" class="form-label">Nombre del Capacitador</label>
                        <input type="text" name="nombre_del_capacitador" id="nombre_del_capacitador" class="form-control" value="<?= esc($cronograma['nombre_del_capacitador']) ?>" required>
                    </div>

                    <!-- Horas de Duración -->
                    <div class="mb-3">
                        <label for="horas_de_duracion_de_la_capacitacion" class="form-label">Horas de Duración</label>
                        <input type="number" name="horas_de_duracion_de_la_capacitacion" id="horas_de_duracion_de_la_capacitacion" class="form-control" value="<?= esc($cronograma['horas_de_duracion_de_la_capacitacion']) ?>" required>
                    </div>

                    <!-- Indicador de Realización -->
                    <div class="mb-3">
                        <label for="indicador_de_realizacion_de_la_capacitacion" class="form-label">Indicador de Realización</label>
                        <select name="indicador_de_realizacion_de_la_capacitacion" id="indicador_de_realizacion_de_la_capacitacion" class="form-select" required>
                            <option value="SE EJECUTO EN LA FECHA O ANTES DE LA FECHA" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'SE EJECUTO EN LA FECHA O ANTES DE LA FECHA') ? 'selected' : '' ?>>SE EJECUTÓ EN LA FECHA O ANTES DE LA FECHA</option>
                            <option value="SE EJECUTO DESPUES DE LA FECHA ACORDADA A CAUSA DEL CLIENTE" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'SE EJECUTO DESPUES DE LA FECHA ACORDADA A CAUSA DEL CLIENTE') ? 'selected' : '' ?>>SE EJECUTÓ DESPUÉS DE LA FECHA ACORDADA A CAUSA DEL CLIENTE</option>
                            <option value="DECLINADA POR EL CLIENTE" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'DECLINADA POR EL CLIENTE') ? 'selected' : '' ?>>DECLINADA POR EL CLIENTE</option>
                            <option value="NO HAY JUSTIFICACION PORQUE NO SE REALIZÓ" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'NO HAY JUSTIFICACION PORQUE NO SE REALIZÓ') ? 'selected' : '' ?>>NO HAY JUSTIFICACIÓN PORQUE NO SE REALIZÓ</option>
                            <option value="SE EJECUTO DESPUES DE LA FECHA POR CAUSA DEL CAPACITADOR" <?= ($cronograma['indicador_de_realizacion_de_la_capacitacion'] == 'SE EJECUTO DESPUES DE LA FECHA POR CAUSA DEL CAPACITADOR') ? 'selected' : '' ?>>SE EJECUTÓ DESPUÉS DE LA FECHA POR CAUSA DEL CAPACITADOR</option>
                        </select>
                    </div>

                    <!-- Número de Asistentes -->
                    <div class="mb-3">
                        <label for="numero_de_asistentes_a_capacitacion" class="form-label">Número de Asistentes</label>
                        <input type="number" name="numero_de_asistentes_a_capacitacion" id="numero_de_asistentes_a_capacitacion" class="form-control" value="<?= esc($cronograma['numero_de_asistentes_a_capacitacion']) ?>" required>
                    </div>

                    <!-- Número Total de Programados -->
                    <div class="mb-3">
                        <label for="numero_total_de_personas_programadas" class="form-label">Número Total de Programados</label>
                        <input type="number" name="numero_total_de_personas_programadas" id="numero_total_de_personas_programadas" class="form-control" value="<?= esc($cronograma['numero_total_de_personas_programadas']) ?>" required>
                    </div>

                    <!-- Porcentaje de Cobertura -->
                    <div class="mb-3">
                        <label for="porcentaje_cobertura" class="form-label">Porcentaje de Cobertura</label>
                        <input type="text" name="porcentaje_cobertura" id="porcentaje_cobertura" class="form-control" value="<?= esc($cronograma['porcentaje_cobertura']) ?>" readonly>
                    </div>

                    <!-- Número de Evaluados -->
                    <div class="mb-3">
                        <label for="numero_de_personas_evaluadas" class="form-label">Número de Evaluados</label>
                        <input type="number" name="numero_de_personas_evaluadas" id="numero_de_personas_evaluadas" class="form-control" value="<?= esc($cronograma['numero_de_personas_evaluadas']) ?>" required>
                    </div>

                    <!-- Promedio de Calificaciones -->
                    <div class="mb-3">
                        <label for="promedio_de_calificaciones" class="form-label">Promedio de Calificaciones</label>
                        <input type="number" step="0.01" name="promedio_de_calificaciones" id="promedio_de_calificaciones" class="form-control" value="<?= esc($cronograma['promedio_de_calificaciones']) ?>" required>
                    </div>

                    <!-- Observaciones -->
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">Observaciones</label>
                        <textarea name="observaciones" id="observaciones" class="form-control" rows="4"><?= esc($cronograma['observaciones']) ?></textarea>
                    </div>
                </div>
            </div>

            <!-- Botones de Acción -->
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-primary me-2">Guardar Cambios</button>
                <a href="<?= base_url('/listcronogCapacitacion') ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="fw-bold mb-1">Cycloid Talent SAS</p>
            <p class="mb-1">Todos los derechos reservados © 2024</p>
            <p class="mb-1">NIT: 901.653.912</p>
            <p class="mb-3">
                Sitio oficial: <a href="https://cycloidtalent.com/" target="_blank">https://cycloidtalent.com/</a>
            </p>
            <p><strong>Nuestras Redes Sociales:</strong></p>
            <div class="social-icons d-flex justify-content-center gap-3">
                <a href="https://www.facebook.com/CycloidTalent" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
                </a>
                <a href="https://co.linkedin.com/company/cycloid-talent" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn">
                </a>
                <a href="https://www.instagram.com/cycloid_talent?igsh=Nmo4d2QwZDg5dHh0" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram">
                </a>
                <a href="https://www.tiktok.com/@cycloid_talent?_t=8qBSOu0o1ZN&_r=1" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/3046/3046126.png" alt="TikTok">
                </a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias (Popper.js y jQuery si es necesario) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>
>>>>>>> main
