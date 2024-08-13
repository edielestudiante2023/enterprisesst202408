<!DOCTYPE html>
<html>

<head>
    <title>Editar Consultor</title>
</head>

<body>
    <h2>Editar Consultor</h2>

    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/editConsultantPost/' . $consultant['id_consultor']) ?>" method="post" enctype="multipart/form-data">
        <!-- Campos del formulario -->
        <label>Nombre Consultor:</label>
        <input type="text" name="nombre_consultor" value="<?= $consultant['nombre_consultor'] ?>" required><br>

        <label>Cédula Consultor:</label>
        <input type="text" name="cedula_consultor" value="<?= $consultant['cedula_consultor'] ?>" required><br>

        <label>Usuario:</label>
        <input type="text" name="usuario" value="<?= $consultant['usuario'] ?>" required><br>

        <label>Correo Consultor:</label>
        <input type="email" name="correo_consultor" value="<?= $consultant['correo_consultor'] ?>" required><br>

        <label>Teléfono Consultor:</label>
        <input type="text" name="telefono_consultor" value="<?= $consultant['telefono_consultor'] ?>" required><br>

        <label>Número de Licencia:</label>
        <input type="text" name="numero_licencia" value="<?= $consultant['numero_licencia'] ?>" required><br>

        <label>Foto del Consultor:</label>
        <input type="file" name="foto_consultor" accept="image/*"><br>

        <?php if (!empty($consultant['foto_consultor'])): ?>
            <img src="<?= base_url('uploads/' . $consultant['foto_consultor']) ?>" alt="Foto del Consultor" width="100">
        <?php endif; ?><br>

        <label>Firma del Consultor:</label>
        <input type="file" name="firma_consultor" accept="image/*"><br>

        <?php if (!empty($consultant['firma_consultor'])): ?>
            <img src="<?= base_url('uploads/' . $consultant['firma_consultor']) ?>" alt="Firma del Consultor" width="100">
        <?php endif; ?><br>

        <button type="submit">Actualizar Consultor</button>
    </form>

    <a href="<?= base_url('/listConsultants') ?>">Volver a la lista de consultores</a>
</body>

</html>