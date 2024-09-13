<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.1.11 Manual de Convivencia Laboral </title>
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

        /* ********************ESTILOS DEL FORMATO************************************* */
        .alpha-titulo {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .beta-subtitulo {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .gamma-parrafo {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }

        .delta-lista {
            margin-left: 20px;
            list-style-type: disc;
        }

        .epsilon-tabla {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .epsilon-tabla th,
        .epsilon-tabla td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        /* .zeta-resaltado {
            font-weight: bold;
            color: #2a7ae2;
        } */
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


    <body>

        <div class="alpha-titulo">Manual de Convivencia Laboral</div>



        <div class="beta-subtitulo">Introducción</div>
        <p class="gamma-parrafo">
            Este manual de convivencia es una invitación a promover y cumplir con nuestras obligaciones, responsabilidades y deberes en nuestro lugar de trabajo, para mantener una buena conducta, actitud positiva, realizar nuestras actividades correctamente y con responsabilidad, para lograr un ambiente laboral armónico que contribuya a nuestro desarrollo personal y profesional.
        </p>
        <p class="gamma-parrafo">
            <?= $client['nombre_cliente'] ?>, se compromete a cumplir con todas las leyes, decretos, resoluciones y demás normas que sean expedidas para reglamentar el abordaje del Acoso Laboral, en materia de prevención y atención de este factor de riesgo psicosocial Intralaboral. La Ley 1010 de 2006, emitida por el Congreso de la República, tiene como objetivo prevenir, corregir y sancionar las diversas formas de agresión, maltrato, vejámenes, trato desconsiderado u ofensivo, y en general, cualquier ultraje a la dignidad humana que se ejerza sobre quienes desarrollan actividades económicas en el marco de una relación laboral, ya sea pública o privada. Esta ley establece que los reglamentos de trabajo de las empresas deben incluir mecanismos para la prevención del acoso laboral, así como un procedimiento interno, confidencial, conciliatorio y efectivo para abordar cualquier situación que se presente en el lugar de trabajo. <?= $client['nombre_cliente'] ?>, en cumplimiento de lo dispuesto por la Resolución 652 del 30 de abril de 2012, modificada por la Resolución 1356 de 2012, ambas emitidas por el Ministerio de Trabajo, ha conformado el Comité de Convivencia Laboral. Este comité tiene la responsabilidad de implementar acciones administrativas orientadas a mejorar el clima laboral y proponer medidas que promuevan la convivencia armónica. Además, debe enfocar sus esfuerzos en generar una conciencia colectiva sobre la importancia de mantener un ambiente laboral digno y justo, que favorezca la armonía entre los empleados y fomente un buen ambiente dentro de la empresa.
        </p>

        <div class="beta-subtitulo">1. Objetivo</div>
        <p class="gamma-parrafo">
            El presente manual tiene por objeto generar las pautas de sana convivencia en todos sus procesos con el propósito de brindar un ambiente laboral adecuado favoreciendo las relaciones interpersonales de todos nuestros colaboradores.
        </p>

        <div class="beta-subtitulo">1.1 Alcance</div>
        <p class="gamma-parrafo">Aplica para todos los trabajadores de <?= $client['nombre_cliente'] ?></p>

        <div class="beta-subtitulo">2. Marco Teórico</div>
        <p class="gamma-parrafo">
            <span class="zeta-resaltado">Definición y modalidades de acoso laboral.</span> El acoso laboral se define como cualquier conducta persistente y comprobable, ejercida sobre un empleado o trabajador por parte de un empleador, jefe, superior jerárquico (inmediato o mediato), compañero de trabajo o subalterno. Esta conducta tiene como finalidad generar miedo, intimidación, terror o angustia; causar perjuicio en el entorno laboral; desmotivar al empleado, o inducir su renuncia.
        </p>
        <ul class="delta-lista">
            <li class="gamma-parrafo"><strong>Maltrato laboral:</strong> Se refiere a cualquier acto de violencia que atente contra la integridad física o moral, la libertad personal o sexual, y los bienes de un empleado o trabajador. Incluye expresiones verbales injuriosas o ultrajantes que afecten la integridad moral, el derecho a la intimidad o el buen nombre de los involucrados en una relación laboral. También abarca comportamientos que buscan menoscabar la autoestima y dignidad de quienes participan en una relación de trabajo.</li>
            <li class="gamma-parrafo"><strong>Persecución laboral:</strong> Se trata de una conducta reiterada o arbitraria cuyo objetivo es inducir la renuncia del empleado o trabajador. Esto se puede lograr mediante la descalificación constante, la asignación de una carga excesiva de trabajo o la modificación continua de horarios, lo que genera desmotivación en el trabajador.</li>
            <li class="gamma-parrafo"><strong>Discriminación laboral:</strong> Consiste en un trato diferenciado e injustificado basado en razones de raza, género, edad, origen familiar o nacional, credo religioso, preferencia política o situación social, que carezca de justificación razonable en el contexto laboral.</li>
            <li class="gamma-parrafo"><strong>Entorpecimiento laboral:</strong> Se refiere a cualquier acción destinada a obstaculizar el desempeño laboral, haciéndolo más difícil o lento, en perjuicio del trabajador o empleado. Esto incluye, entre otras acciones, la privación, ocultación o inutilización de insumos, documentos o herramientas de trabajo, la destrucción o pérdida de información, y el ocultamiento de correspondencia o mensajes electrónicos.</li>
            <li class="gamma-parrafo"><strong>Inequidad laboral:</strong> Consiste en la asignación de funciones que menosprecian al trabajador o lo colocan en una posición desfavorable sin justificación.</li>
            <li class="gamma-parrafo"><strong>Desprotección laboral:</strong> Hace referencia a cualquier conducta que ponga en riesgo la integridad y seguridad del trabajador, como la emisión de órdenes o la asignación de funciones sin garantizar los requisitos mínimos de protección y seguridad para el empleado.</li>
        </ul>

        <div class="beta-subtitulo">3. Medidas Preventivas y Correctivas del Acoso Laboral</div>
        <p class="gamma-parrafo">
            Los reglamentos de trabajo de las empresas deben prever mecanismos para prevenir las conductas de acoso laboral y establecer un procedimiento interno, confidencial, conciliatorio y efectivo para resolver las situaciones que se presenten en el lugar de trabajo. Los comités bipartitos de empresa, donde existan, podrán asumir funciones relacionadas con el acoso laboral, conforme lo estipulen los reglamentos de trabajo. <br> El Comité de Convivencia Laboral, en conjunto con la empresa, deberá:
        </p>

        <li class="gamma-parrafo">Desarrollar campañas de divulgación preventiva, conversatorios y capacitaciones sobre las conductas que constituyen o no acoso laboral, así como sobre las circunstancias agravantes, las conductas atenuantes y el tratamiento sancionatorio correspondiente.</li>
        <li class="gamma-parrafo">Crear espacios de diálogo, como círculos de participación o grupos similares, para evaluar periódicamente la vida laboral. Estos espacios deben promover la coherencia operativa y la armonía funcional, fomentando un ambiente de respeto y buen trato dentro de la organización.</li>
        <li class="gamma-parrafo">Capacitar al personal sobre la Ley 1010 de 2006, en lo que respecta a las conductas que constituyen o no acoso laboral.</li>
        <li class="gamma-parrafo">Establecer, en conjunto con los colaboradores, valores y hábitos que promuevan un clima laboral saludable, alineado con los principios y normas de la organización.</li>
        <li class="gamma-parrafo">Formular recomendaciones constructivas para enfrentar situaciones empresariales que puedan afectar el cumplimiento de dichos valores y hábitos.</li>
        <li class="gamma-parrafo">Examinar conductas específicas que puedan constituir acoso laboral u otros tipos de hostigamiento que afecten la dignidad de las personas, y ofrecer las recomendaciones pertinentes.</li>


        <div class="beta-subtitulo">4. Marco Normativo</div>
        <table class="epsilon-tabla">
            <thead>
                <tr>
                    <th>Normativa</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Código Sustantivo del Trabajo - Art. 57</td>
                    <td>Obligaciones especiales del Empleador.</td>
                </tr>
                <tr>
                    <td>Código Sustantivo del Trabajo - Art. 58</td>
                    <td>Obligaciones especiales del Trabajador.</td>
                </tr>
                <tr>
                    <td>Código Sustantivo del Trabajo - Art. 59 y 60</td>
                    <td>Prohibiciones del Trabajador y del Empleador.</td>
                </tr>
                <tr>
                    <td>Ley 1010 de 2006</td>
                    <td>Por medio de la cual se adoptan medidas para prevenir, corregir y sancionar el acoso laboral y otros hostigamientos en el marco de las relaciones de trabajo.</td>
                </tr>
                <tr>
                    <td>Resolución 2646 de 2008</td>
                    <td>Por la cual se establecen disposiciones y se definen responsabilidades para la identificación, evaluación, prevención, intervención y monitoreo permanente de la exposición a factor de riesgo psicosocial en el trabajo y para la determinación del origen de las patologías causadas por el estrés laboral.</td>
                </tr>
                <tr>
                    <td>Resolución 652 de 2012</td>
                    <td>Por la cual se establece la conformación y funcionamiento del Comité de Convivencia Laboral en entidades públicas y empresas privadas y se dictan otras disposiciones.</td>
                </tr>
                <tr>
                    <td>Resolución 1356 de 2012</td>
                    <td>Ministerio del Trabajo que modifica parcialmente la Resolución 652 de 2012.</td>
                </tr>
                <tr>
                    <td>Ley 1616 de 2013</td>
                    <td>Por medio de la cual se expide la ley de salud mental y se dictan otras disposiciones.</td>
                </tr>
                <tr>
                    <td>Resolución 2764 de 2022</td>
                    <td>Por la cual se adopta la Batería de instrumentos para la evaluación de factores de Riesgo Psicosocial, la Guía Técnica General para la promoción, prevención e intervención de los factores psicosociales y sus efectos en la población trabajadora y sus protocolos específicos y se dictan otras disposiciones.</td>
                </tr>
                <tr>
                    <td>Circular 026 de 2023</td>
                    <td>Prevención y atención del acoso laboral y sexual, violencia basada en género contra las mujeres y personas de los sectores sociales LGBTIQ+ en el ámbito laboral.</td>
                </tr>

            </tbody>
        </table>

        <div class="beta-subtitulo">5. Generalidades de la Empresa</div>
        <p class="gamma-parrafo">
            <span class="zeta-resaltado">Visión:</span> <?= $clientPolicy['policy_content'] ?>
        </p>
        <p class="gamma-parrafo">
            <span class="zeta-resaltado">Misión:</span> <?= $clientPolicy['policy_content'] ?>
        </p>

        <div class="beta-subtitulo">6. Principios Rectores de <?= $client['nombre_cliente'] ?></div>
        <ul class="delta-lista">
            <li class="gamma-parrafo">Ética: Estamos comprometidos con la transparencia...</li>
            <li class="gamma-parrafo">Desempeño y Responsabilidad: Todos prosperamos...</li>
            <li class="gamma-parrafo">Trabajo en equipo...</li>
            <!-- Agrega más principios según sea necesario -->
        </ul>

        <div class="beta-subtitulo">7. Normas de Convivencia Laboral</div>
        <ul class="delta-lista">
            <li class="gamma-parrafo zeta-resaltado">7.1 Trabajar juntos, entregando lo mejor de cada uno...</li>
            <li class="gamma-parrafo zeta-resaltado">7.2 Mostrar con el ejemplo...</li>
            <li class="gamma-parrafo zeta-resaltado">7.3 Respetar a los demás por su condición de ser humano...</li>
            <!-- Agrega más normas según sea necesario -->
        </ul>

        <div class="beta-subtitulo">8. Deberes de Convivencia de los Trabajadores</div>
        <ul class="delta-lista">
            <li class="gamma-parrafo">Cumplir con todas las normas internas...</li>
            <li class="gamma-parrafo">Respetar a los compañeros en todo momento...</li>
            <!-- Agrega más deberes según sea necesario -->
        </ul>

        <div class="beta-subtitulo">9. Derechos de los Trabajadores</div>
        <ul class="delta-lista">
            <li class="gamma-parrafo">Expresar las sugerencias necesarias...</li>
            <li class="gamma-parrafo">Ser reconocidos por el buen desempeño laboral...</li>
            <!-- Agrega más derechos según sea necesario -->
        </ul>

        <div class="beta-subtitulo">10. Derechos de Convivencia Laboral de <?= $client['nombre_cliente'] ?></div>
        <ul class="delta-lista">
            <li class="gamma-parrafo">Derecho a ser respetado...</li>
            <li class="gamma-parrafo">Derecho a manifestar su opinión...</li>
            <!-- Agrega más derechos según sea necesario -->
        </ul>

        <div class="beta-subtitulo">11. Conductos Regulares y Solución de Conflictos</div>
        <ul class="delta-lista">
            <li class="gamma-parrafo">Adoptar una actitud pacífica...</li>
            <li class="gamma-parrafo">Escuchar el punto de vista del otro...</li>
            <!-- Agrega más conductos según sea necesario -->
        </ul>

        <div class="beta-subtitulo">12. Procedimiento para Atender las Quejas por Acoso Laboral</div>
        <ul class="delta-lista">
            <li class="gamma-parrafo">Informar de la situación agravante al secretario(a) del Comité...</li>
            <li class="gamma-parrafo">Convocar reunión del Comité de Convivencia Laboral...</li>
            <!-- Agrega más pasos según sea necesario -->
        </ul>

        <div class="beta-subtitulo">13. Quejas sobre Conductas que no Constituyen Acoso Laboral</div>
        <ul class="delta-lista">
            <li class="gamma-parrafo">La formulación de exigencias razonables de fidelidad laboral...</li>
            <li class="gamma-parrafo">La solicitud de cumplir deberes extras de colaboración con la empresa...</li>
            <!-- Agrega más conductas según sea necesario -->
        </ul>

        <p class="gamma-parrafo">
            <span class="zeta-resaltado">Nota:</span> Este Manual no cubre las actividades desarrolladas por personal propio de <?= $client['nombre_cliente'] ?>
        </p>

    </body>


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

    <div>
        <a href="<?= base_url('/generatePdf_quejaCocolab') ?>" target="_blank">
            <button type="button">PDF</button>
        </a>
    </div>

</body>

</html>