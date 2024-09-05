<!DOCTYPE html>
<html>

<head>
    <title>Agregar y Ver Reportes</title>
</head>

<body>

    <br><br>
    <h2>Ir a Dashboard</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/dashboardconsultant') ?>"><button type="button">Ir a DashBoard</button></a>
    <br><br>

    <h2>Ir a Lista de Documentos</h2>
    <!-- Botón para ir a la vista de agregar reportes -->
    <a href="<?= base_url('/reportList') ?>"><button type="button">Ir a Lista de documentos</button></a>
    <br><br>

    <h2>Agregar Nuevo Reporte</h2>
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('/addReportPost') ?>" method="post">
        <label>Título del Reporte:</label>
        <input type="text" name="titulo_reporte" required><br>

        <label>Tipo de Documento:</label>
        <select name="Tipo_documento" required>
            <option value="PDF">PDF</option>
            <option value="HOJA DE CALCULO">HOJA DE CALCULO</option>
            <option value="DOC">DOC</option>
            <option value="VIDEO">VIDEO</option>
            <option value="IMAGEN">IMAGEN</option>
        </select><br>

        <label>Enlace:</label>
        <input type="text" name="enlace" required><br>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="ABIERTO">ABIERTO</option>
            <option value="GESTIONANDO">GESTIONANDO</option>
            <option value="CERRADO">CERRADO</option>
        </select><br>

        <label>Observaciones:</label>
        <textarea name="observaciones"></textarea><br>

        <label>Cliente:</label>
        <?php if (isset($clients)): ?>
            <select name="id_cliente">
                <option value="">Todos</option>
                <?php foreach ($clients as $client) : ?>
                    <option value="<?= $client['id_cliente'] ?>" <?= (isset($_GET['id_cliente']) && $_GET['id_cliente'] == $client['id_cliente']) ? 'selected' : '' ?>><?= $client['nombre_cliente'] ?></option>
                <?php endforeach; ?>
            </select>
        <?php else: ?>
            <p>Error: No se han encontrado clientes.</p>
        <?php endif; ?>
        <br>

        <label for="id_report_type">Tipo de Reporte:</label>
        <select name="id_report_type" required>
            <?php foreach ($reportTypes as $type): ?>
                <option value="<?= $type['id_report_type'] ?>"><?= $type['report_type'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>


        <button type="submit">Agregar Reporte</button>
    </form>

    <br><br>



    <a href="<?= base_url('/logout') ?>">Cerrar Sesión</a>


</body>

</html>