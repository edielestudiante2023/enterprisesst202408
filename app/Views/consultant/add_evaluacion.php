<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Evaluación</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Agregar Nueva Evaluación</h2>
    
    <form action="<?= base_url('addEvaluacionPost') ?>" method="post" class="p-4 bg-white shadow rounded">
        
        <!-- Selección del cliente -->
        <div class="form-group">
            <label for="id_cliente">Cliente:</label>
            <select name="id_cliente" id="id_cliente" class="form-control" required>
                <?php foreach ($clients as $cliente): ?>
                    <option value="<?= esc($cliente['id_cliente']) ?>"><?= esc($cliente['nombre_cliente']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Otros campos de la evaluación -->
        <div class="form-group">
            <label for="ciclo">Ciclo:</label>
            <input type="text" name="ciclo" id="ciclo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="estandar">Estándar:</label>
            <input type="text" name="estandar" id="estandar" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="detalle_estandar">Detalle del Estándar:</label>
            <textarea name="detalle_estandar" id="detalle_estandar" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="estandares_minimos">Estándares Mínimos:</label>
            <input type="text" name="estandares_minimos" id="estandares_minimos" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="numeral">Numeral:</label>
            <input type="text" name="numeral" id="numeral" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="numerales_del_cliente">Numerales del Cliente:</label>
            <input type="text" name="numerales_del_cliente" id="numerales_del_cliente" class="form-control">
        </div>

        <div class="form-group">
            <label for="siete">Siete:</label>
            <input type="text" name="siete" id="siete" class="form-control">
        </div>

        <div class="form-group">
            <label for="veintiun">Veintiún:</label>
            <input type="text" name="veintiun" id="veintiun" class="form-control">
        </div>

        <div class="form-group">
            <label for="sesenta">Sesenta:</label>
            <input type="text" name="sesenta" id="sesenta" class="form-control">
        </div>

        <div class="form-group">
            <label for="item_del_estandar">Ítem del Estándar:</label>
            <input type="text" name="item_del_estandar" id="item_del_estandar" class="form-control">
        </div>

        <div class="form-group">
            <label for="evaluacion_inicial">Evaluación Inicial:</label>
            <input type="text" name="evaluacion_inicial" id="evaluacion_inicial" class="form-control">
        </div>

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" class="form-control">
        </div>

        <div class="form-group">
            <label for="puntaje_cuantitativo">Puntaje Cuantitativo:</label>
            <input type="text" name="puntaje_cuantitativo" id="puntaje_cuantitativo" class="form-control">
        </div>

        <div class="form-group">
            <label for="item">Ítem:</label>
            <input type="text" name="item" id="item" class="form-control">
        </div>

        <div class="form-group">
            <label for="criterio">Criterio:</label>
            <input type="text" name="criterio" id="criterio" class="form-control">
        </div>

        <div class="form-group">
            <label for="modo_de_verificacion">Modo de Verificación:</label>
            <textarea name="modo_de_verificacion" id="modo_de_verificacion" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="calificacion">Calificación:</label>
            <input type="text" name="calificacion" id="calificacion" class="form-control">
        </div>

        <div class="form-group">
            <label for="nivel_de_evaluacion">Nivel de Evaluación:</label>
            <input type="text" name="nivel_de_evaluacion" id="nivel_de_evaluacion" class="form-control">
        </div>

        <div class="form-group">
            <label for="observaciones">Observaciones:</label>
            <textarea name="observaciones" id="observaciones" class="form-control"></textarea>
        </div>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-primary btn-block">Guardar Evaluación</button>
    </form>

    <!-- Botón para regresar a la lista -->
    <div class="mt-3">
        <a href="<?= base_url('listEvaluaciones') ?>" class="btn btn-secondary btn-block">Regresar a la lista</a>
    </div>
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Iniciación de DataTables en caso de haber tablas en la página
    $(document).ready(function() {
        $('table').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    });
</script>

</body>
</html>
