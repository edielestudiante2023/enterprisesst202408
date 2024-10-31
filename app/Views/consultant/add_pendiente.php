<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Pendiente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        .form-control, .btn {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Agregar Pendiente</h2>
        <form action="<?= base_url('/addPendientePost') ?>" method="post">
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
                <label for="responsable">Responsable:</label>
                <select name="responsable" id="responsable" class="form-control" required>
                    <option value="">Seleccione un responsable</option>
                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    <option value="EDISON CUERVO">EDISON CUERVO</option>
                    <option value="ELEYSON SEGURA">ELEYSON SEGURA</option>
                    <option value="NATALIA JIMENEZ">NATALIA JIMENEZ</option>
                    <option value="DIANA CUESTAS">DIANA CUESTAS</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tarea_actividad">Tarea Actividad:</label>
                <textarea class="form-control" id="tarea_actividad" name="tarea_actividad" required></textarea>
            </div>

            <div class="form-group">
                <label for="fecha_cierre">Fecha Cierre:</label>
                <input type="date" class="form-control" id="fecha_cierre" name="fecha_cierre">
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="ABIERTA">ABIERTA</option>
                    <option value="CERRADA">CERRADA</option>
                </select>
            </div>

            <div class="form-group">
                <label for="conteo_dias">Conteo Días:</label>
                <input type="number" class="form-control" id="conteo_dias" name="conteo_dias" readonly>
            </div>

            <div class="form-group">
                <label for="estado_avance">Estado Avance:</label>
                <input type="text" class="form-control" id="estado_avance" name="estado_avance">
            </div>

            <div class="form-group">
                <label for="evidencia_para_cerrarla">Evidencia para Cerrarla:</label>
                <textarea class="form-control" id="evidencia_para_cerrarla" name="evidencia_para_cerrarla"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Pendiente</button>
        </form>

        <!-- Ejemplo de tabla interactiva -->
        <div class="mt-5">
            <h3 class="text-center">Pendientes</h3>
            <table id="pendientesTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Responsable</th>
                        <th>Tarea</th>
                        <th>Fecha Cierre</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rellena con datos dinámicos de PHP si es necesario -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pendientesTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>

</html>
