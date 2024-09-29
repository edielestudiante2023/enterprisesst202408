<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Actividad - Plan de Trabajo Anual</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Añadir Actividad al Plan de Trabajo Anual</h2>
        <form action="<?= base_url('/addPlanDeTrabajoAnualPost') ?>" method="post">

            <div class="form-group">
                <label for="id_cliente">Cliente:</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    <option value="">Seleccione un cliente</option>
                    <?php foreach ($clientes as $cliente) : ?>
                        <option value="<?= $cliente['id_cliente'] ?>"><?= $cliente['nombre_cliente'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_plandetrabajo">Actividad del Plan de Trabajo:</label>
                <select name="id_plandetrabajo" id="id_plandetrabajo" class="form-control" required>
                    <option value="">Seleccione una actividad</option>
                    <?php foreach ($actividades as $actividad) : ?>
                        <option value="<?= $actividad['id_inventario_actividades_plandetrabajo'] ?>">
                            <?= $actividad['actividad_plandetrabajo'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>


            <div class="form-group">
                <label for="phva_plandetrabajo">PHVA:</label>
                <select class="form-control" id="phva_plandetrabajo" name="phva_plandetrabajo" required>
                    <option value="">Seleccione una opción</option>
                    <option value="PLANEAR">PLANEAR</option>
                    <option value="HACER">HACER</option>
                    <option value="VERIFICAR">VERIFICAR</option>
                    <option value="ACTUAR">ACTUAR</option>
                </select>
            </div>

            <div class="form-group">
                <label for="numeral_plandetrabajo">Numeral:</label>
                <input type="text" class="form-control" id="numeral_plandetrabajo" name="numeral_plandetrabajo" required>
            </div>
            <div class="form-group">
                <label for="responsable_sugerido_plandetrabajo">Responsable Sugerido:</label>
                <input type="text" class="form-control" id="responsable_sugerido_plandetrabajo" name="responsable_sugerido_plandetrabajo" required>
            </div>
            <div class="form-group">
                <label for="fecha_propuesta">Fecha Propuesta:</label>
                <input type="date" class="form-control" id="fecha_propuesta" name="fecha_propuesta" required>
            </div>
            <div class="form-group">
                <label for="fecha_cierre">Fecha Cierre:</label>
                <input type="date" class="form-control" id="fecha_cierre" name="fecha_cierre">
            </div>
            <div class="form-group">
                <label for="responsable_definido_paralaactividad">Responsable Definido:</label>
                <input type="text" class="form-control" id="responsable_definido_paralaactividad" name="responsable_definido_paralaactividad">
            </div>
            <div class="form-group">
                <label for="estado_actividad">Estado de la Actividad:</label>
                <select name="estado_actividad" id="estado_actividad" class="form-control" required>
                    <option value="ABIERTA">ABIERTA</option>
                    <option value="CERRADA">CERRADA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="porcentaje_avance">Porcentaje de Avance:</label>
                <input type="number" class="form-control" id="porcentaje_avance" name="porcentaje_avance" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="semana">Semana:</label>
                <input type="text" class="form-control" id="semana" name="semana">
            </div>
            <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Actividad</button>
        </form>
    </div>
</body>

</html>
