<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cronograma de Capacitación</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Asegúrate de agregar el path correcto a tu archivo CSS -->
    <style>
        body {
            font-size: 0.9rem;
            background-color: #f9f9f9;
        }
        
        .container {
            max-width: 900px;
        }

        h2 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            font-weight: bold;
        }

        .btn-secondary {
            font-weight: bold;
        }

        .alert {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container my-4">
        <h2 class="text-center">Agregar Cronograma de Capacitación</h2>

        <!-- Mostrar mensaje si hay algún mensaje flash de éxito o error -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-info">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/addcronogCapacitacionPost') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="id_capacitacion">Capacitación</label>
                        <select name="id_capacitacion" class="form-control" required>
                            <option value="" disabled selected>Selecciona una capacitación</option>
                            <?php foreach ($capacitaciones as $capacitacion): ?>
                                <option value="<?= $capacitacion['id_capacitacion'] ?>">
                                    <?= $capacitacion['capacitacion'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="id_cliente">Cliente</label>
                        <select name="id_cliente" class="form-control" required>
                            <option value="" disabled selected>Selecciona un cliente</option>
                            <?php foreach ($clientes as $cliente): ?>
                                <option value="<?= $cliente['id_cliente'] ?>">
                                    <?= $cliente['nombre_cliente'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="fecha_programada">Fecha Programada</label>
                        <input type="date" name="fecha_programada" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="fecha_de_realizacion">Fecha de Realización</label>
                        <input type="date" name="fecha_de_realizacion" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="estado">Estado</label>
                        <select name="estado" class="form-control" required>
                            <option value="" disabled selected>Selecciona un estado</option>
                            <option value="PROGRAMADA">PROGRAMADA</option>
                            <option value="EJECUTADA">EJECUTADA</option>
                            <option value="CANCELADA POR EL CLIENTE">CANCELADA POR EL CLIENTE</option>
                            <option value="REPROGRAMADA">REPROGRAMADA</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="perfil_de_asistentes">Perfil de Asistentes</label>
                        <select name="perfil_de_asistentes" class="form-control" required>
                            <option value="" disabled selected>Selecciona un perfil</option>
                            <option value="CONTRATISTAS">CONTRATISTAS</option>
                            <option value="RESIDENTES">RESIDENTES</option>
                            <option value="TODOS">TODOS</option>
                            <option value="ASAMBLEA">ASAMBLEA</option>
                            <option value="CONSEJO DE ADMINISTRACIÓN">CONSEJO DE ADMINISTRACIÓN</option>
                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="nombre_del_capacitador">Nombre del Capacitador</label>
                        <input type="text" name="nombre_del_capacitador" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="horas_de_duracion_de_la_capacitacion">Horas de Duración</label>
                        <input type="number" name="horas_de_duracion_de_la_capacitacion" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="indicador_de_realizacion_de_la_capacitacion">Indicador de Realización</label>
                        <select name="indicador_de_realizacion_de_la_capacitacion" class="form-control" required>
                            <option value="" disabled selected>Selecciona un indicador</option>
                            <option value="SE EJECUTO EN LA FECHA O ANTES DE LA FECHA">SE EJECUTÓ EN LA FECHA O ANTES DE LA FECHA</option>
                            <option value="SE EJECUTO DESPUES DE LA FECHA ACORDADA A CAUSA DEL CLIENTE">SE EJECUTÓ DESPUÉS DE LA FECHA ACORDADA A CAUSA DEL CLIENTE</option>
                            <option value="DECLINADA POR EL CLIENTE">DECLINADA POR EL CLIENTE</option>
                            <option value="NO HAY JUSTIFICACION PORQUE NO SE REALIZÓ">NO HAY JUSTIFICACIÓN PORQUE NO SE REALIZÓ</option>
                            <option value="SE EJECUTO DESPUES DE LA FECHA POR CAUSA DEL CAPACITADOR">SE EJECUTÓ DESPUÉS DE LA FECHA POR CAUSA DEL CAPACITADOR</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="numero_de_asistentes_a_capacitacion">Número de Asistentes</label>
                        <input type="number" name="numero_de_asistentes_a_capacitacion" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="numero_total_de_personas_programadas">Número Total de Programados</label>
                        <input type="number" name="numero_total_de_personas_programadas" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="porcentaje_cobertura">Porcentaje de Cobertura</label>
                        <input type="text" name="porcentaje_cobertura" class="form-control" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="numero_de_personas_evaluadas">Número de Evaluados</label>
                        <input type="number" name="numero_de_personas_evaluadas" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="promedio_de_calificaciones">Promedio de Calificaciones</label>
                        <input type="number" step="0.01" name="promedio_de_calificaciones" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="observaciones">Observaciones</label>
                        <textarea name="observaciones" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Agregar Cronograma</button>
            <a href="<?= base_url('/listcronogCapacitacion') ?>" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>

    <br>
    <div class="text-center">
        <h2>Ir a Dashboard</h2>
        <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button" class="btn btn-dark">Ir a Dashboard</button></a>
    </div>
    <br>

    <script src="path/to/bootstrap.min.js"></script> <!-- Asegúrate de agregar el path correcto a tu archivo JS -->
</body>

</html>
