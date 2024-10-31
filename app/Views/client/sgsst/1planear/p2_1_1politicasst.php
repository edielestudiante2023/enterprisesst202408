<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.1.1 Política de Seguridad y Salud en el Trabajo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
            line-height: 1.6;
            background-color: white;
        }

        /* Estilos aplicados al footer */
        footer {
            text-align: center;
            margin-top: 50px;
            background-color: white;
            padding: 20px;
            border-top: 1px solid #ccc;
            font-size: 14px;
        }

        footer table {
            width: 100%;
            border-collapse: collapse;
        }

        footer th,
        footer td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        /* Estilos aplicados a la sección .centered-content */
        .centered-content {
            width: 100%;
            margin: 0 auto;
            padding: 0 0 20px 0;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .centered-content table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
            height: 30px;
        }

        /* Estilos aplicados a las clases internas de la tabla */
        .logo {
            width: 20%;
            text-align: center;
        }

        .main-title {
            width: 50%;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
        }

        .code {
            width: 30%;
            font-weight: bold;
            font-size: 14px;
        }

        .subtitle {
            font-weight: bold;
            font-size: 16px;
            text-align: center;
        }

        .right {
            text-align: left;
            padding-left: 10px;
        }

        .signature-container {
            display: flex;
            /* Ensures that the divs are displayed in a row */
            justify-content: space-evenly;
            /* Adds space between the items */
            align-items: center;
            /* Aligns the items vertically in the center */
            margin-top: 20px;
        }

        .signature {
            text-align: center;
            width: 90%;
            /* Adjust the width of each signature block */
        }

        .signature img {
            max-width: 100px;
            /* Adjust the size of the images as needed */
            height: auto;
        }

        .signature .name {
            font-weight: bold;
        }

        .signature .title {
            font-style: italic;
        }


        

        
        .alpha-title {
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
        }

        .beta-parrafo {
            margin-bottom: 0px;
            font-size: 0.9em;
            text-align: justify;
        }
    </style>


</head>

<body>
    <div class="centered-content">
        <table>
            <tr>
                <td rowspan="2" class="logo">
                    <img src="<?= base_url('uploads/' . $client['logo']) ?>" alt="Logo de <?= $client['nombre_cliente'] ?>" width="100%">
                </td>
                <td class="main-title">
                    SISTEMA DE GESTION EN SEGURIDAD Y SALUD EN EL TRABAJO
                </td>
                <td class="code">
                    <?= $latestVersion['document_type'] ?>-<?= $latestVersion['acronym'] ?>
                </td>
            </tr>
            <tr>
                <td class="subtitle">
                    <?= $policyType['type_name'] ?>
                </td>
                <td class="code right">
                    Versión: <?= $latestVersion['version_number'] ?><br>
                    Fecha: <?= date('d M Y', strtotime($latestVersion['created_at'])) ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="alpha-title">Política de Seguridad y Salud en el Trabajo</div>

    <p class="beta-parrafo">
        <strong><?= $client['nombre_cliente'] ?></strong> se compromete con la protección y promoción de la salud de los trabajadores, procurando su integridad física, social y psicológica, mediante el control y seguimiento de los factores de riesgos a los que se encuentran expuestos.
    </p>

    <p class="beta-parrafo">
        A través de esta política, <strong><?= $client['nombre_cliente'] ?></strong> pronuncia formalmente su compromiso hacia la seguridad y salud en el trabajo y define que todos los niveles de la organización asumen la responsabilidad de promover un ambiente de trabajo sano y seguro, cumpliendo los requisitos legales aplicables, en la implementación del sistema de gestión de seguridad y salud en el trabajo. Adicionalmente, se destinan los recursos humanos, físicos, tecnológicos y financieros necesarios para la gestión de la salud y la seguridad, contando con el apoyo del vigía en Seguridad y Salud en el Trabajo, el Comité de Convivencia y la alta gerencia para la optimización de los recursos presupuestados con el fin de cumplir con las metas propuestas.
    </p>

    <p class="beta-parrafo">
        Los programas desarrollados en <strong><?= $client['nombre_cliente'] ?></strong> estarán orientados al fomento de una cultura preventiva y de autocuidado, a la intervención de las condiciones inseguras, con el propósito de disminuir la generación de accidentes de trabajo y enfermedades laborales, ejerciendo un control adecuado de los riesgos en su origen, al control del ausentismo y a la preparación para emergencias.
    </p>

    <p class="beta-parrafo">
        Todos los empleados, participantes, visitantes y contratistas tendrán la responsabilidad de cumplir con las normas y procedimientos de seguridad, con el fin de realizar un trabajo seguro y productivo. Igualmente, serán responsables de notificar oportunamente todas aquellas condiciones que puedan generar consecuencias y contingencias para los empleados y la organización.
    </p>

    <div class="signature-container">
        <div class="signature">
            <img src="<?= base_url('uploads/' . $client['firma_representante_legal']) ?>" alt="Firma rep. legal">
            <div class="name"><b><?= $client['nombre_rep_legal'] ?></b></div>
            <div class="title">Representante Legal</div>
        </div>

    </div>

    <footer>
        <h2>Historial de Versiones</h2>
        <table>
            <tr>
                <th>Versión</th>
                <th>Tipo de Documento</th>
                <th>Acrónimo</th>
                <th>Fecha de Creación</th>
                <th>Observaciones</th>
            </tr>
            <?php foreach ($allVersions as $version): ?>
                <tr>
                    <td><?= $version['version_number'] ?></td>
                    <td><?= $version['document_type'] ?></td>
                    <td><?= $version['acronym'] ?></td>
                    <td><?= date('d M Y', strtotime($version['created_at'])) ?></td>
                    <td><?= $version['change_control'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </footer>
    <br>

   <!--  <div>
        <a href="<?= base_url('/generatePdf_politicaSst') ?>" target="_blank">
            <button type="button">PDF</button>
        </a>
    </div> -->

</body>

</html>