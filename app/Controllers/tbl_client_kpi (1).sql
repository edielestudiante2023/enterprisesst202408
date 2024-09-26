-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2024 at 07:17 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enterprise_sst2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_kpi`
--

CREATE TABLE `tbl_client_kpi` (
  `id_client_kpi` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `year` year DEFAULT NULL,
  `month` int DEFAULT NULL,
  `kpi_interpretation` varchar(255) DEFAULT NULL,
  `id_cliente` int DEFAULT NULL,
  `id_kpi_policy` int DEFAULT NULL,
  `id_objectives` int DEFAULT NULL,
  `id_kpis` int DEFAULT NULL,
  `id_kpi_type` int DEFAULT NULL,
  `id_kpi_definition` int DEFAULT NULL,
  `kpi_target` int DEFAULT NULL,
  `kpi_formula` varchar(255) DEFAULT NULL,
  `data_source` varchar(255) DEFAULT NULL,
  `id_data_owner` int DEFAULT NULL,
  `positions_should_know_result` varchar(255) DEFAULT NULL,
  `id_numerator_variable` int DEFAULT NULL,
  `id_denominator_variable` int DEFAULT NULL,
  `id_measurement_period` int DEFAULT NULL,
  `variable_numerador_1` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_1` int DEFAULT NULL,
  `variable_denominador_1` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_1` int DEFAULT NULL,
  `valor_indicador_1` decimal(10,2) DEFAULT NULL,
  `variable_numerador_2` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_2` int DEFAULT NULL,
  `variable_denominador_2` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_2` int DEFAULT NULL,
  `valor_indicador_2` decimal(10,2) DEFAULT NULL,
  `variable_numerador_3` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_3` int DEFAULT NULL,
  `variable_denominador_3` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_3` int DEFAULT NULL,
  `valor_indicador_3` decimal(10,2) DEFAULT NULL,
  `variable_numerador_4` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_4` int DEFAULT NULL,
  `variable_denominador_4` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_4` int DEFAULT NULL,
  `valor_indicador_4` decimal(10,2) DEFAULT NULL,
  `variable_numerador_5` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_5` int DEFAULT NULL,
  `variable_denominador_5` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_5` int DEFAULT NULL,
  `valor_indicador_5` decimal(10,2) DEFAULT NULL,
  `variable_numerador_6` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_6` int DEFAULT NULL,
  `variable_denominador_6` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_6` int DEFAULT NULL,
  `valor_indicador_6` decimal(10,2) DEFAULT NULL,
  `variable_numerador_7` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_7` int DEFAULT NULL,
  `variable_denominador_7` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_7` int DEFAULT NULL,
  `valor_indicador_7` decimal(10,2) DEFAULT NULL,
  `variable_numerador_8` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_8` int DEFAULT NULL,
  `variable_denominador_8` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_8` int DEFAULT NULL,
  `valor_indicador_8` decimal(10,2) DEFAULT NULL,
  `variable_numerador_9` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_9` int DEFAULT NULL,
  `variable_denominador_9` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_9` int DEFAULT NULL,
  `valor_indicador_9` decimal(10,2) DEFAULT NULL,
  `variable_numerador_10` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_10` int DEFAULT NULL,
  `variable_denominador_10` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_10` int DEFAULT NULL,
  `valor_indicador_10` decimal(10,2) DEFAULT NULL,
  `variable_numerador_11` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_11` int DEFAULT NULL,
  `variable_denominador_11` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_11` int DEFAULT NULL,
  `valor_indicador_11` decimal(10,2) DEFAULT NULL,
  `variable_numerador_12` varchar(255) DEFAULT NULL,
  `dato_variable_numerador_12` int DEFAULT NULL,
  `variable_denominador_12` varchar(255) DEFAULT NULL,
  `dato_variable_denominador_12` int DEFAULT NULL,
  `valor_indicador_12` decimal(10,2) DEFAULT NULL,
  `gran_total_indicador` decimal(10,2) DEFAULT NULL,
  `analisis_datos` text,
  `seguimiento1` text,
  `seguimiento2` text,
  `seguimiento3` text,
  `periodicidad` varchar(50) NOT NULL DEFAULT 'mensual'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_client_kpi`
--

INSERT INTO `tbl_client_kpi` (`id_client_kpi`, `created_at`, `updated_at`, `year`, `month`, `kpi_interpretation`, `id_cliente`, `id_kpi_policy`, `id_objectives`, `id_kpis`, `id_kpi_type`, `id_kpi_definition`, `kpi_target`, `kpi_formula`, `data_source`, `id_data_owner`, `positions_should_know_result`, `id_numerator_variable`, `id_denominator_variable`, `id_measurement_period`, `variable_numerador_1`, `dato_variable_numerador_1`, `variable_denominador_1`, `dato_variable_denominador_1`, `valor_indicador_1`, `variable_numerador_2`, `dato_variable_numerador_2`, `variable_denominador_2`, `dato_variable_denominador_2`, `valor_indicador_2`, `variable_numerador_3`, `dato_variable_numerador_3`, `variable_denominador_3`, `dato_variable_denominador_3`, `valor_indicador_3`, `variable_numerador_4`, `dato_variable_numerador_4`, `variable_denominador_4`, `dato_variable_denominador_4`, `valor_indicador_4`, `variable_numerador_5`, `dato_variable_numerador_5`, `variable_denominador_5`, `dato_variable_denominador_5`, `valor_indicador_5`, `variable_numerador_6`, `dato_variable_numerador_6`, `variable_denominador_6`, `dato_variable_denominador_6`, `valor_indicador_6`, `variable_numerador_7`, `dato_variable_numerador_7`, `variable_denominador_7`, `dato_variable_denominador_7`, `valor_indicador_7`, `variable_numerador_8`, `dato_variable_numerador_8`, `variable_denominador_8`, `dato_variable_denominador_8`, `valor_indicador_8`, `variable_numerador_9`, `dato_variable_numerador_9`, `variable_denominador_9`, `dato_variable_denominador_9`, `valor_indicador_9`, `variable_numerador_10`, `dato_variable_numerador_10`, `variable_denominador_10`, `dato_variable_denominador_10`, `valor_indicador_10`, `variable_numerador_11`, `dato_variable_numerador_11`, `variable_denominador_11`, `dato_variable_denominador_11`, `valor_indicador_11`, `variable_numerador_12`, `dato_variable_numerador_12`, `variable_denominador_12`, `dato_variable_denominador_12`, `valor_indicador_12`, `gran_total_indicador`, `analisis_datos`, `seguimiento1`, `seguimiento2`, `seguimiento3`, `periodicidad`) VALUES
(5, '2024-09-25 05:14:46', '2024-09-26 00:59:09', 2024, 7, 'La empresa  cumple con un 80% porciento el Plan de Trabajo anual del SG SST, definido de acuerdo al Decreto 1072 de 2015', 11, 1, 1, 1, 1, 1, 80, '(Numero de actividades Ejecutadas / Numero de Actividades Programadas)*100', 'Plan de Trabajo Anual', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '1', 26, '1', 60, '0.43', '1', 0, '1', 50, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.43', 'De acuerdo con el plan de trabajo, se definió un conjunto de actividades y se logró ejecutar un porcentaje significativo de las mismas, tal como se había proyectado para el año en curso', '', '', '', 'semestral'),
(6, '2024-09-26 02:52:50', '2024-09-26 02:52:50', 2024, 7, 'Este indicador mide el porcentaje de implementación de las medidas de intervención definidas en la Matriz de Identificación de Peligros, Valoración de Riesgos y Determinación de Controles (IPVRDC).', 11, 1, 2, 2, 4, 2, 90, '(Numero de medidas de intervención ejecutadas / Numero de medidas de intervención definidas en la matriz de identificación de peligros, valoración de riesgos y determinación de controles.)*100	', 'Matriz de Identificación de Peligros, Valoración de Riesgos y Determinación de Controles (IPVRDC).', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '2', 0, '2', 50, '0.00', '1', 0, '1', 40, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', 'No se ha construido la matriz de identificacion de los peligros porque la compañía no ha suministardo  los perfiles de los cargos de los colaboradores de la compañía a la fecha 10/07/2024', '', '', '', 'semestral'),
(7, '2024-09-26 03:37:30', '2024-09-26 03:37:30', 2024, 7, 'Actualmente la empresa viene cumpliendo con el indicador', 11, 1, 2, 3, 4, 3, 80, '(Numero de actividades ejecutadas de los PGR / Numero de actividades programadas de los PGR)*100 ', 'Programas de gestión de riesgos prioritarios', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '1', 40, '1', 40, '1.00', '1', 50, '1', 50, '1.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '2.00', 'Se cuenta con plan de preparacion y respuestaa ante emergencias, brigadistas capacitados,dotados ', '', '', '', 'semestral'),
(8, '2024-09-26 03:53:49', '2024-09-26 03:53:49', 2024, 7, 'Un Indicador de Proceso y Resultado en los Programas de Vigilancia Epidemiológica (PVE) se utiliza para medir tanto el desarrollo de las actividades (proceso) como los efectos o cambios logrados (resultado) en relación con los objetivos de estos programas', 11, 1, 2, 4, 4, 4, 80, '(Numero de actividades ejecutadas de los PVE / Numero de actividades programadas de los PVE)*100 ', 'Programas de Vigilancia Epidemiológica (PVE)', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '1', 0, '1', 1, '0.00', '1', 0, '1', 1, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', '', '', '', '', 'semestral'),
(9, '2024-09-26 05:29:47', '2024-09-26 05:29:47', 2024, 7, 'La empresa cumple parcialmente con los requisitos de la Resolución 0312 de 2019, estándares mínimos.', 11, 1, 1, 5, 2, 5, 90, '% de cumplimiento de requisitos de la Resolución 0312 (Estándares mínimos) = (Número de requisitos implementados / Número de requisitos exigidos) * 100', 'Informe evaluación inicial del SG SST', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '3', 30, '3', 61, '0.49', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.49', 'Se ejecutan los estandares de acuerdo con lo planeado en el plan de trabajo.', '', '', '', 'anual'),
(10, '2024-09-26 05:44:48', '2024-09-26 05:44:48', 2024, 7, 'La empresa cumple con el indicador', 11, 1, 1, 6, 4, 6, 90, '(Número de acciones preventivas, correctivas y de mejora ejecutadas y eficaces del período / Número total de acciones preventivas, correctivas y de mejora generadas en el período) * 100', 'Acciones preventivas, correctivas y de mejora.', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '4', 0, '4', 0, '0.00', '4', 3, '4', 3, '1.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1.00', '', '', '', '', 'semestral'),
(11, '2024-09-26 06:13:18', '2024-09-26 06:13:18', 2024, 7, 'No se evidencia cumpliemiento.', 11, 1, 1, 7, 1, 7, 100, '(Requisitos Legales cumplidos / Requisitos Legales Aplicables)*100', 'Matriz de Requisitos Legales Aplicables', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '5', 0, '5', 10, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', 'Se consolidará la información de los requisitos de acuerdo con la emisión de normatividad que emita la autoridad competente. Para ser más exactos, se consolidará en el último mes del año para estar seguros del número de normatividad emitida.', '', '', '', 'anual'),
(12, '2024-09-26 06:32:41', '2024-09-26 06:32:41', 2024, 7, 'La Empresa cumple parcialmente con el indicador.', 11, 1, 3, 8, 2, 8, 80, '(Número de capacitaciones ejecutadas / Número de capacitaciones programadas) * 100', 'Programa de Capacitación', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '6', 0, '6', 0, '0.00', '6', 4, '6', 4, '1.00', '6', 1, '6', 4, '0.25', '6', 0, '6', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1.25', 'El indicador se va alimentando conforme a la ejecución de cada capacitación realizada.', '', '', '', 'trimestral'),
(13, '2024-09-26 19:28:25', '2024-09-26 19:28:25', 2024, 7, 'La empresa cumple con un porcentaje de los requisitos establecidos por el artículo 2.2.4.6.20 del Decreto 1072 de 2015, que evalúan la estructura del Sistema de Gestión de Seguridad y Salud en el Trabajo.', 11, 1, 3, 9, 3, 9, 100, '(Número de ítems cumplidos según el artículo 2.2.4.6.20 del Decreto 1072 de 2015 / Número de ítems exigidos según el artículo 2.2.4.6.20 del Decreto 1072 de 2015) * 100', 'Política, objetivos, plan de trabajo anual, responsabilidades, recursos, guía de administración del riesgo, conformación y funcionamiento de COPASST, documentación del SG, procedimiento para diagnóstico de condiciones de salud, existencia de plan de emerg', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '7', 0, '7', 11, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', 'se consolidara este indicador a finalde año al finalizar la implementacion del SG-SST', '', '', '', 'anual'),
(14, '2024-09-26 20:02:56', '2024-09-26 20:38:19', 2024, 7, 'La empresa cumple con un porcentaje determinado en cuanto al reporte, investigación y análisis estadístico de incidentes, accidentes de trabajo y enfermedades laborales.', 11, 1, 2, 10, 4, 10, 90, '(Número de incidentes, accidentes de trabajo y enfermedades laborales con reporte, investigación y estadística / Número de incidentes, accidentes de trabajo y enfermedades laborales ocurridos)', 'Base de datos de Accidentalidad', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '8', 0, '8', 1, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '8', 0, '8', 0, '0.00', '0.00', 'No se han presentado accidentes en lo que va corrido del año.', '', '', '', 'trimestral'),
(15, '2024-09-26 21:04:49', '2024-09-26 21:04:49', 2024, 7, 'El indicador, así calculado, se interpreta como: por cada 100 trabajadores que laboraron en el mes, se presentaron X accidentes de trabajo.', 11, 1, 2, 11, 4, 11, 1, '(Número de accidentes × 100) / Número de trabajadores', 'Base de datos de Accidentalidad', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '9', 0, '9', 52, '0.00', '9', 0, '9', 53, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', 'No se han presentado accidentes de trabajo en el período.', '', '', '', 'semestral'),
(16, '2024-09-26 21:19:48', '2024-09-26 21:19:48', 2024, 7, 'El indicador, así calculado, se interpreta como: por cada 100 trabajadores que laboraron en el mes, se perdieron X días por accidentes de trabajo.', 11, 1, 2, 12, 4, 12, 6, '(Número de días perdidos o cargados por accidentes de trabajo × 100) / Número de trabajadores.', 'Base de datos de Accidentalidad', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '10', 0, '10', 51, '0.00', '10', 0, '10', 53, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', '', '', '', '', 'semestral'),
(17, '2024-09-26 21:46:23', '2024-09-26 21:46:23', 2024, 7, 'El indicador, así calculado, se interpreta como: en el año, el X% de los accidentes de trabajo fueron mortales.', 11, 1, 2, 13, 4, 13, 0, '(Número de accidentes de trabajo mortales / Total de accidentes de trabajo presentados en el período) × 100', 'Base de datos de Accidentalidad', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '11', 0, '11', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', 'No se han presentado accidentes mortales en el período.', '', '', '', 'anual'),
(18, '2024-09-26 23:24:56', '2024-09-26 23:24:56', 2024, 7, 'El indicador, así calculado, se interpreta como: la empresa tiene X casos de enfermedad laboral calificada por cada 100.000 trabajadores.', 11, 1, 2, 14, 4, 14, 2000, '(Número de casos nuevos y antiguos de enfermedad laboral / Promedio total de trabajadores) × 100.000', 'Base de datos de Accidentalidad y Enfermedades', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '12', 1, '12', 53, '0.02', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.02', 'Hasta el momento no se han presentado enfermedades en el periodo', '', '', '', 'anual'),
(19, '2024-09-26 23:46:01', '2024-09-26 23:46:01', 2024, 7, 'El indicador, así calculado, se interpreta como: la empresa tiene X casos de enfermedades laborales nuevas calificadas por cada 100.000 trabajadores.', 11, 1, 2, 15, 4, 15, 2000, '(Número de casos de enfermedad laboral nuevos / Promedio total de trabajadores) × 100.000', 'Base de datos de Accidentalidad', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '13', 0, '13', 53, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', '', '', '', '', 'anual'),
(20, '2024-09-26 23:57:03', '2024-09-26 23:57:03', 2024, 7, 'La empresa cuenta con el 0% de los casos rehabilitados del total de enfermedades laborales calificadas en el año.', 11, 1, 2, 16, 1, 16, 100, 'Número de casos de enfermedad laboral con rehabilitación / Número de casos de enfermedad laboral.', 'Seguimiento a enfermedades laborales', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '14', 0, '14', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '1', 0, '1', 0, '0.00', '0.00', '', '', '', '', 'anual'),
(21, '2024-09-27 00:09:25', '2024-09-27 00:09:25', 2024, 7, 'De acuerdo con los datos registrados no se evidencian ausentismos.', 11, 1, 2, 17, 4, 17, 15, '(Número de días de ausencia por incapacidad médica laboral y común en el mes / Número de días de trabajo programados en el mes) × 100', 'Base de datos de Ausentismo', 1, 'Gerencia General,Gerencia GH', NULL, NULL, NULL, '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '15', 0, '15', 53, '0.00', '0.00', '', '', '', '', 'mensual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_client_kpi`
--
ALTER TABLE `tbl_client_kpi`
  ADD PRIMARY KEY (`id_client_kpi`),
  ADD UNIQUE KEY `id_client_kpi` (`id_client_kpi`),
  ADD KEY `id_kpi_policy` (`id_kpi_policy`),
  ADD KEY `id_objectives` (`id_objectives`),
  ADD KEY `id_kpis` (`id_kpis`),
  ADD KEY `id_kpi_type` (`id_kpi_type`),
  ADD KEY `id_kpi_definition` (`id_kpi_definition`),
  ADD KEY `id_data_owner` (`id_data_owner`),
  ADD KEY `id_numerator_variable` (`id_numerator_variable`),
  ADD KEY `id_denominator_variable` (`id_denominator_variable`),
  ADD KEY `id_measurement_period` (`id_measurement_period`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_client_kpi`
--
ALTER TABLE `tbl_client_kpi`
  MODIFY `id_client_kpi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_client_kpi`
--
ALTER TABLE `tbl_client_kpi`
  ADD CONSTRAINT `tbl_client_kpi_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_10` FOREIGN KEY (`id_measurement_period`) REFERENCES `tbl_measurement_period` (`id_measurement_period`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_11` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_2` FOREIGN KEY (`id_kpi_policy`) REFERENCES `tbl_kpi_policy` (`id_kpi_policy`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_3` FOREIGN KEY (`id_objectives`) REFERENCES `tbl_objectives_policy` (`id_objectives`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_4` FOREIGN KEY (`id_kpis`) REFERENCES `tbl_kpis` (`id_kpis`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_5` FOREIGN KEY (`id_kpi_type`) REFERENCES `tbl_kpi_type` (`id_kpi_type`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_6` FOREIGN KEY (`id_kpi_definition`) REFERENCES `tbl_kpi_definition` (`id_kpi_definition`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_7` FOREIGN KEY (`id_data_owner`) REFERENCES `tbl_data_owner` (`id_data_owner`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_8` FOREIGN KEY (`id_numerator_variable`) REFERENCES `tbl_variable_numerator` (`id_numerator_variable`),
  ADD CONSTRAINT `tbl_client_kpi_ibfk_9` FOREIGN KEY (`id_denominator_variable`) REFERENCES `tbl_variable_denominator` (`id_denominator_variable`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
