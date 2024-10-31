<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pendiente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
</head>

<body style="background-color: #f8f9fa;">
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-dark">Editar Pendiente</h2>

        <!-- Mensaje de error o éxito -->
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('/editPendientePost/' . $pendiente['id_pendientes']) ?>" method="post" class="p-4 shadow bg-white rounded">
            <div class="form-group">
                <label for="id_cliente" class="font-weight-bold">Cliente:</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    <option value="">Seleccione un cliente</option>
                    <?php foreach ($clientes as $cliente) : ?>
                        <option value="<?= $cliente['id_cliente'] ?>" <?= ($cliente['id_cliente'] == $pendiente['id_cliente']) ? 'selected' : '' ?>>
                            <?= $cliente['nombre_cliente'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="responsable" class="font-weight-bold">Responsable:</label>
                <select name="responsable" id="responsable" class="form-control" required>
                    <option value="">Seleccione un responsable</option>
                    <option value="ADMINISTRADOR" <?= ($pendiente['responsable'] == 'ADMINISTRADOR') ? 'selected' : '' ?>>ADMINISTRADOR</option>
                    <option value="EDISON CUERVO" <?= ($pendiente['responsable'] == 'EDISON CUERVO') ? 'selected' : '' ?>>EDISON CUERVO</option>
                    <option value="ELEYSON SEGURA" <?= ($pendiente['responsable'] == 'ELEYSON SEGURA') ? 'selected' : '' ?>>ELEYSON SEGURA</option>
                    <option value="NATALIA JIMENEZ" <?= ($pendiente['responsable'] == 'NATALIA JIMENEZ') ? 'selected' : '' ?>>NATALIA JIMENEZ</option>
                    <option value="DIANA CUESTAS" <?= ($pendiente['responsable'] == 'DIANA CUESTAS') ? 'selected' : '' ?>>DIANA CUESTAS</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tarea_actividad" class="font-weight-bold">Tarea Actividad:</label>
                <textarea class="form-control" id="tarea_actividad" name="tarea_actividad" required><?= $pendiente['tarea_actividad'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="fecha_cierre" class="font-weight-bold">Fecha Cierre:</label>
                <input type="date" class="form-control" id="fecha_cierre" name="fecha_cierre" value="<?= $pendiente['fecha_cierre'] ?>">
            </div>

            <div class="form-group">
                <label for="estado" class="font-weight-bold">Estado:</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="ABIERTA" <?= ($pendiente['estado'] == 'ABIERTA') ? 'selected' : '' ?>>ABIERTA</option>
                    <option value="CERRADA" <?= ($pendiente['estado'] == 'CERRADA') ? 'selected' : '' ?>>CERRADA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="conteo_dias" class="font-weight-bold">Conteo Días:</label>
                <input type="number" class="form-control" id="conteo_dias" name="conteo_dias" value="<?= $pendiente['conteo_dias'] ?>" readonly>
            </div>

            <div class="form-group">
                <label for="estado_avance" class="font-weight-bold">Estado Avance:</label>
                <input type="text" class="form-control" id="estado_avance" name="estado_avance" value="<?= $pendiente['estado_avance'] ?>" required>
            </div>

            <div class="form-group">
                <label for="evidencia_para_cerrarla" class="font-weight-bold">Evidencia para Cerrarla:</label>
                <textarea class="form-control" id="evidencia_para_cerrarla" name="evidencia_para_cerrarla"><?= $pendiente['evidencia_para_cerrarla'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
        </form>
    </div>

    <!-- Configuración de DataTables si se utiliza en algún lugar de la página -->
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>

</html>
