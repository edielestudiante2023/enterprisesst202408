<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Consultor</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        button {
            padding: 10px;
            width: 100%;
        }
        .logout-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2>Bienvenido, Consultor</h2>
    <p>Esta es tu dashboard donde puedes gestionar la información.</p>

    <table>
        <thead>
            <tr>
                <th>Elemento de Gestión</th>
                <th>Detalle</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Clientes</td>
                <td>Ver Lista de Clientes</td>
                <td><a href="<?= base_url('/listClients') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Clientes</td>
                <td>Agregar Nuevo Cliente</td>
                <td><a href="<?= base_url('/addClient') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Consultores</td>
                <td>Ver Lista de Consultores</td>
                <td><a href="<?= base_url('/index.php/listConsultants') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Consultores</td>
                <td>Agregar Nuevo Consultor</td>
                <td><a href="<?= base_url('/addConsultant') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Documentos</td>
                <td>Ver Lista de Documentos</td>
                <td><a href="<?= base_url('/reportList') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Documentos</td>
                <td>Agregar Nuevo Reporte</td>
                <td><a href="<?= base_url('/addReport') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Versiones de Documentos</td>
                <td>Ver Lista de Versiones</td>
                <td><a href="<?= base_url('listVersions') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Políticas</td>
                <td>Ver Lista de Políticas</td>
                <td><a href="<?= base_url('/listPolicies') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Políticas</td>
                <td>Agregar Nueva Política</td>
                <td><a href="<?= base_url('/addPolicy') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Tipos de Documentos</td>
                <td>Ver Tipos de Documentos</td>
                <td><a href="<?= base_url('/listPolicyTypes') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Tipos de Documentos</td>
                <td>Agregar Nuevo Tipo de Documento</td>
                <td><a href="<?= base_url('/addPolicyType') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Vigías</td>
                <td>Ver Lista de Vigías</td>
                <td><a href="<?= base_url('listVigias') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Vigías</td>
                <td>Añadir Vigía</td>
                <td><a href="<?= base_url('addVigia') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>1 KPI</td>
                <td>Politica de SST de cada cliente</td>
                <td><a href="<?= base_url('listKpiPolicies') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>2 KPI</td>
                <td>Objetivos que persiguen los indicadores</td>
                <td><a href="<?= base_url('listObjectives') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>3 KPI</td>
                <td>Nombre del indicador</td>
                <td><a href="<?= base_url('listKpis') ?>"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>4 KPI</td>
                <td>Tipos de Indicadores SST y su Significado</td>
                <td><a href="<?= base_url('listKpiTypes') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI</td>
                <td>Añadir Tipo de KPI</td>
                <td><a href="<?= base_url('addKpiType') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI</td>
                <td>Añadir Definición de KPI</td>
                <td><a href="<?= base_url('addKpiDefinition') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI Definitions</td>
                <td>Ver Lista de Definiciones de KPI</td>
                <td><a href="<?= base_url('listKpiDefinitions') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI Policies</td>
                <td>Ver Lista de Políticas de KPI</td>
                <td><a href="<?= base_url('listKpiPolicies') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Objetivos de Política</td>
                <td>Añadir Objetivo de Política</td>
                <td><a href="<?= base_url('addObjective') ?>" target="_blank"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>Cargo Responsable del Cálculo</td>
                <td>Añadir Responsable</td>
                <td><a href="<?= base_url('addDataOwner') ?>"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI</td>
                <td>Numerador de Indicador</td>
                <td><a href="<?= base_url('addNumeratorVariable') ?>"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI</td>
                <td>Denominador del Indicador</td>
                <td><a href="<?= base_url('listDenominatorVariables') ?>"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI</td>
                <td>Periodo de Medición</td>
                <td><a href="<?= base_url('listMeasurementPeriods') ?>"><button type="button">Abrir</button></a></td>
            </tr>
            <tr>
                <td>KPI</td>
                <td>Indicador de Plan de Trabajo Anual</td>
                <td><a href="<?= base_url('listClientKpis') ?>"><button type="button">Abrir</button></a></td>
            </tr>
        </tbody>
    </table>

    <div class="logout-button">
        <a href="<?= base_url('/logout') ?>" target="_blank"><button type="button">Cerrar Sesión</button></a>
    </div>

</body>
</html>
