<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Evaluaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin: 20px 0;
            text-align: center;
            color: #333;
        }

        .btn {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        .dataTables_filter input {
            background-color: #f0f0f0;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 6px;
        }

        .dataTables_length select {
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 6px;
        }

        td, th {
            max-width: 80ch;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 50px;
        }

        td[title], th[title] {
            cursor: help;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="<?= base_url('addEvaluacion') ?>" class="btn btn-primary">Agregar Evaluación</a>

    <h1>Lista de Evaluaciones</h1>

    <div class="table-responsive">
        <table id="evaluacionesTable" class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <!-- <th>ID</th> -->
                    <!-- <th>Fecha Creación</th>
                    <th>Fecha Actualización</th> -->
                    <th>Cliente</th>
                    <th>Ciclo</th>
                    <th>Estándar</th>
                    <th>Detalle Estándar</th>
                    <th>Estándares Mínimos</th>
                    <!-- <th>Numeral</th> -->
                    <th>Numerales del Cliente</th>
                    <!-- <th>Siete</th>
                    <th>Veintiún</th>
                    <th>Sesenta</th> -->
                    <th>Item del Estándar</th>
                    <th>Evaluación Inicial</th>
                    <th>Valor</th>
                    <th>Puntaje Cuantitativo</th>
                    <th>Item</th>
                    <th>Criterio</th>
                    <th>Modo de Verificación</th>
                    <!-- <th>Calificación</th>
                    <th>Nivel de Evaluación</th> -->
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
                <tr class="filters">
                    <th><input type="text" class="form-control form-control-sm" placeholder="Buscar Cliente"></th>
                    <th><input type="text" class="form-control form-control-sm" placeholder="Buscar Ciclo"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><input type="text" class="form-control form-control-sm" placeholder="Buscar Evaluación Inicial"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($evaluaciones) && is_array($evaluaciones)): ?>
                    <?php foreach ($evaluaciones as $evaluacion): ?>
                        <tr>
                            <!-- <td><?= esc($evaluacion['id_ev_ini']); ?></td> -->
                            <!-- <td><?= esc($evaluacion['created_at']); ?></td>
                            <td><?= esc($evaluacion['updated_at']); ?></td> -->
                            <td title="<?= esc($evaluacion['nombre_cliente']); ?>"><?= esc($evaluacion['nombre_cliente']); ?></td>
                            <td title="<?= esc($evaluacion['ciclo']); ?>"><?= esc($evaluacion['ciclo']); ?></td>
                            <td title="<?= esc($evaluacion['estandar']); ?>"><?= esc($evaluacion['estandar']); ?></td>
                            <td title="<?= esc($evaluacion['detalle_estandar']); ?>"><?= esc($evaluacion['detalle_estandar']); ?></td>
                            <td title="<?= esc($evaluacion['estandares_minimos']); ?>"><?= esc($evaluacion['estandares_minimos']); ?></td>
                            <!-- <td><?= esc($evaluacion['numeral']); ?></td> -->
                            <td title="<?= esc($evaluacion['numerales_del_cliente']); ?>"><?= esc($evaluacion['numerales_del_cliente']); ?></td>
                            <!-- <td><?= esc($evaluacion['siete']); ?></td>
                            <td><?= esc($evaluacion['veintiun']); ?></td>
                            <td><?= esc($evaluacion['sesenta']); ?></td> -->
                            <td title="<?= esc($evaluacion['item_del_estandar']); ?>"><?= esc($evaluacion['item_del_estandar']); ?></td>
                            <td title="<?= esc($evaluacion['evaluacion_inicial']); ?>"><?= esc($evaluacion['evaluacion_inicial']); ?></td>
                            <td title="<?= esc($evaluacion['valor']); ?>"><?= esc($evaluacion['valor']); ?></td>
                            <td title="<?= esc($evaluacion['puntaje_cuantitativo']); ?>"><?= esc($evaluacion['puntaje_cuantitativo']); ?></td>
                            <td title="<?= esc($evaluacion['item']); ?>"><?= esc($evaluacion['item']); ?></td>
                            <td title="<?= esc($evaluacion['criterio']); ?>"><?= esc($evaluacion['criterio']); ?></td>
                            <td title="<?= esc($evaluacion['modo_de_verificacion']); ?>"><?= esc($evaluacion['modo_de_verificacion']); ?></td>
                            <!-- <td><?= esc($evaluacion['calificacion']); ?></td>
                            <td><?= esc($evaluacion['nivel_de_evaluacion']); ?></td> -->
                            <td title="<?= esc($evaluacion['observaciones']); ?>"><?= esc($evaluacion['observaciones']); ?></td>
                            <td>
                                <a href="<?= base_url('editEvaluacion/' . $evaluacion['id_ev_ini']); ?>" class="btn btn-sm btn-warning">Editar</a>
                                <a href="<?= base_url('deleteEvaluacion/' . $evaluacion['id_ev_ini']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta evaluación?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="23">No se encontraron evaluaciones.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#evaluacionesTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
            },
            "pagingType": "full_numbers",
            "responsive": true,
            "autoWidth": false
        });

        // Apply the search filters
        table.columns().every(function() {
            var that = this;

            $('input', this.header()).on('keyup change clear', function() {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });
    });
</script>
</body>
</html>
