<h2>Hojas de Cálculo Interactivas</h2>
<?php if (!empty($hojasDeCalculo)) : ?>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Enlace</th>
            <th>Estado</th>
            <th>Observaciones</th>
        </tr>
        <?php foreach ($hojasDeCalculo as $reporte) : ?>
            <tr>
                <td><?= esc($reporte['titulo_reporte']) ?></td>
                <td><a href="<?= esc($reporte['enlace']) ?>" target="_blank">Ver Documento</a></td>
                <td><?= esc($reporte['estado']) ?></td>
                <td><?= esc($reporte['observaciones']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No hay documentos de Hojas de Cálculo Interactivas disponibles.</p>
<?php endif; ?>

<h2>Matrices</h2>
<?php if (!empty($matrices)) : ?>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Enlace</th>
            <th>Estado</th>
            <th>Observaciones</th>
        </tr>
        <?php foreach ($matrices as $reporte) : ?>
            <tr>
                <td><?= esc($reporte['titulo_reporte']) ?></td>
                <td><a href="<?= esc($reporte['enlace']) ?>" target="_blank">Ver Documento</a></td>
                <td><?= esc($reporte['estado']) ?></td>
                <td><?= esc($reporte['observaciones']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No hay documentos de Matrices disponibles.</p>
<?php endif; ?>
