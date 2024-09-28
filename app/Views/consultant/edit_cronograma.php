<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cronograma de Capacitación</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Asegúrate de agregar el path correcto a tu archivo CSS -->
    <style>
        body {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

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
                        <input type="date" name="fecha_de_realizacion" class="form-control" value="<?= esc($cronograma['fecha_de_realizacion']) ?>" >
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

    <br>
    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>



    <script src="path/to/bootstrap.min.js"></script> <!-- Asegúrate de agregar el path correcto a tu archivo JS -->
</body>

</html>