<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Actividad - Plan de Trabajo Anual</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        h2 {
            font-size: 1.75rem;
            font-weight: bold;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Editar Actividad del Plan de Trabajo Anual</h2>
        <form action="<?= base_url('/editPlanDeTrabajoAnualPost/' . $plan['id_ptacliente']) ?>" method="post">

            <div class="form-group">
                <label for="id_cliente">Cliente:</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    <option value="">Seleccione un cliente</option>
                    <?php foreach ($clientes as $cliente) : ?>
                        <option value="<?= $cliente['id_cliente'] ?>" <?= ($cliente['id_cliente'] == $plan['id_cliente']) ? 'selected' : '' ?>>
                            <?= $cliente['nombre_cliente'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_plandetrabajo">Actividad del Plan de Trabajo:</label>
                <select name="id_plandetrabajo" id="id_plandetrabajo" class="form-control" required>
                    <option value="">Seleccione una actividad</option>
                    <?php foreach ($actividades as $actividad) : ?>
                        <option value="<?= $actividad['id_inventario_actividades_plandetrabajo'] ?>" <?= ($actividad['id_inventario_actividades_plandetrabajo'] == $plan['id_plandetrabajo']) ? 'selected' : '' ?>>
                            <?= $actividad['actividad_plandetrabajo'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="phva_plandetrabajo">PHVA:</label>
                <select class="form-control" id="phva_plandetrabajo" name="phva_plandetrabajo" required>
                    <option value="">Seleccione una opción</option>
                    <option value="PLANEAR" <?= ($plan['phva_plandetrabajo'] == 'PLANEAR') ? 'selected' : '' ?>>PLANEAR</option>
                    <option value="HACER" <?= ($plan['phva_plandetrabajo'] == 'HACER') ? 'selected' : '' ?>>HACER</option>
                    <option value="VERIFICAR" <?= ($plan['phva_plandetrabajo'] == 'VERIFICAR') ? 'selected' : '' ?>>VERIFICAR</option>
                    <option value="ACTUAR" <?= ($plan['phva_plandetrabajo'] == 'ACTUAR') ? 'selected' : '' ?>>ACTUAR</option>
                </select>
            </div>

            <div class="form-group">
                <label for="numeral_plandetrabajo">Numeral:</label>
                <input type="text" class="form-control" id="numeral_plandetrabajo" name="numeral_plandetrabajo" value="<?= $plan['numeral_plandetrabajo'] ?>" required>
            </div>
            <div class="form-group">
                <label for="responsable_sugerido_plandetrabajo">Responsable Sugerido:</label>
                <input type="text" class="form-control" id="responsable_sugerido_plandetrabajo" name="responsable_sugerido_plandetrabajo" value="<?= $plan['responsable_sugerido_plandetrabajo'] ?>" required>
            </div>

            <div class="form-group">
                <label for="fecha_propuesta">Fecha Propuesta:</label>
                <input type="date" class="form-control" id="fecha_propuesta" name="fecha_propuesta" value="<?= $plan['fecha_propuesta'] ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_cierre">Fecha Cierre:</label>
                <input type="date" class="form-control" id="fecha_cierre" name="fecha_cierre" value="<?= $plan['fecha_cierre'] ?>">
            </div>

            <div class="form-group">
                <label for="responsable_definido_paralaactividad">Responsable Definido:</label>
                <input type="text" class="form-control" id="responsable_definido_paralaactividad" name="responsable_definido_paralaactividad" value="<?= $plan['responsable_definido_paralaactividad'] ?>">
            </div>

            <div class="form-group">
                <label for="estado_actividad">Estado de la Actividad:</label>
                <select name="estado_actividad" id="estado_actividad" class="form-control" required>
                    <option value="ABIERTA" <?= ($plan['estado_actividad'] == 'ABIERTA') ? 'selected' : '' ?>>ABIERTA</option>
                    <option value="CERRADA" <?= ($plan['estado_actividad'] == 'CERRADA') ? 'selected' : '' ?>>CERRADA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="porcentaje_avance">Porcentaje de Avance:</label>
                <input type="number" class="form-control" id="porcentaje_avance" name="porcentaje_avance" value="<?= $plan['porcentaje_avance'] ?>" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="semana">Semana:</label>
                <input type="text" class="form-control" id="semana" name="semana" value="<?= $plan['semana'] ?>">
            </div>

            <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <textarea class="form-control" id="observaciones" name="observaciones"><?= $plan['observaciones'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Actividad</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('table').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es_es.json'
                }
            });
        });
    </script>
</body>

</html>
