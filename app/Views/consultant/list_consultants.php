<!DOCTYPE html>
<html>
<head>
    <title>Lista de Consultores</title>
</head>
<body>

<a href="<?= base_url('/addConsultant') ?>">
        <button type="button">Agregar Nuevo Consultor</button>
    </a>

    
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <h2>Lista de Consultores</h2>

    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cédula</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Número de Licencia</th>
            <th>Foto</th>
            <th>Firma</th> <!-- Nueva columna para la firma -->
            <th>Acciones</th>
        </tr>
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
                    <a href="<?= base_url('/editConsultant/' . $consultant['id_consultor']) ?>">Editar</a>
                    <a href="<?= base_url('/deleteConsultant/' . $consultant['id_consultor']) ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Volver al Dashboard</button></a>
</body>
</html>
