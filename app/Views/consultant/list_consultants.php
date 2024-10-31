<!DOCTYPE html>
<html>
<head>
    <title>Lista de Consultores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .container {
            margin-top: 50px;
        }
        table {
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Lista de Consultores</h2>
        <a href="<?= base_url('/addConsultant') ?>" class="btn btn-primary">Agregar Nuevo Consultor</a>
    </div>

    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <table id="consultantsTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Número de Licencia</th>
                <th>Foto</th>
                <th>Firma</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultants as $consultant): ?>
                <tr>
                    <td><?= $consultant['id_consultor'] ?></td>
                    <td><?= $consultant['nombre_consultor'] ?></td>
                    <td><?= $consultant['cedula_consultor'] ?></td>
                    <td><?= $consultant['usuario'] ?></td>
                    <td><?= $consultant['correo_consultor'] ?></td>
                    <td><?= $consultant['telefono_consultor'] ?></td>
                    <td><?= $consultant['numero_licencia'] ?></td>
                    <td>
                        <?php if (!empty($consultant['foto_consultor'])): ?>
                            <img src="<?= base_url('uploads/' . $consultant['foto_consultor']) ?>" alt="Foto del Consultor" width="50">
                        <?php else: ?>
                            No disponible
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (!empty($consultant['firma_consultor'])): ?>
                            <img src="<?= base_url('uploads/' . $consultant['firma_consultor']) ?>" alt="Firma del Consultor" width="50">
                        <?php else: ?>
                            No disponible
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('/editConsultant/' . $consultant['id_consultor']) ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="<?= base_url('/deleteConsultant/' . $consultant['id_consultor']) ?>" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="mt-3">
        <a href="<?= base_url('/dashboardconsultant') ?>" class="btn btn-secondary">Volver al Dashboard</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#consultantsTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            }
        });
    });
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>