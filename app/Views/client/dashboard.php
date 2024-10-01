<h1>Bienvenido, <?= esc($client['nombre_cliente']) ?></h1>

<?php if (!empty($accesos)): ?>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px; /* Ajuste del padding para eliminar espacios vacíos */
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        td {
            padding-left: 0; /* Elimina el espacio a la izquierda */
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>Dimensión</th>
                <th>Acceso</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Variables de seguimiento para las dimensiones
            $current_dimension = '';

            foreach ($accesos as $acceso): 
                // Agrupar por dimensiones
                if ($current_dimension !== $acceso['dimension']):
                    $current_dimension = $acceso['dimension']; 
            ?>
                <tr>
                    <td colspan="2"><strong><?= esc($current_dimension) ?></strong></td>
                </tr>
            <?php endif; ?>
                <tr>
                    <td></td>
                    <td>
                        <a href="<?= base_url($acceso['url']) ?>" target="_blank">
                            <?= esc($acceso['nombre']) ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No tienes accesos disponibles.</p>
<?php endif; ?>
