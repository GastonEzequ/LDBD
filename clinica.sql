-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2024 a las 12:57:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--
CREATE DATABASE IF NOT EXISTS `clinica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `clinica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas_medicas`
--

CREATE TABLE `consultas_medicas` (
  `nro_historia_clinica` int(11) NOT NULL,
  `nro_matricula` int(11) DEFAULT NULL,
  `fecha_hora_consulta` datetime DEFAULT NULL,
  `diagnostico` varchar(255) DEFAULT NULL,
  `tratamiento_recomendado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultas_medicas`
--

INSERT INTO `consultas_medicas` (`nro_historia_clinica`, `nro_matricula`, `fecha_hora_consulta`, `diagnostico`, `tratamiento_recomendado`) VALUES
(1002, 298987, '2000-11-12 13:30:00', 'Gripe', 'Reposo 7 días.'),
(2008, 298987, '2001-02-13 15:00:00', 'Fractura de fémur', 'Yeso durante 30 días.'),
(4323, 230989, '2001-02-13 16:00:00', 'Miopía', 'Anteojos con mayor aumento.'),
(8787, 89897, '2001-02-14 16:30:00', 'Dolor de espalda', 'Faja y analgésicos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `especialidad` varchar(2) DEFAULT NULL,
  `denominacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`especialidad`, `denominacion`) VALUES
('CA', 'Cardiología'),
('CM', 'Clínica Médica'),
('OF', 'Oftalmología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `NroMatricula` int(11) NOT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Especialidad` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`NroMatricula`, `Apellido`, `Nombre`, `FechaNacimiento`, `Sexo`, `Especialidad`) VALUES
(89897, 'Silva', 'Martina', '1942-09-21', 'F', 'CM'),
(108789, 'Di Marco', 'Rubén', '1950-12-11', 'M', 'CA'),
(230989, 'Perez Anton', 'Liliana', '1964-05-30', 'F', 'OF'),
(298987, 'Rosales', 'Mariano', '1970-06-01', 'M', 'CM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_sociales`
--

CREATE TABLE `obras_sociales` (
  `cod_obra_social` varchar(5) NOT NULL,
  `denominacion` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `localidad` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `obras_sociales`
--

INSERT INTO `obras_sociales` (`cod_obra_social`, `denominacion`, `direccion`, `localidad`, `telefono`) VALUES
('OS1', 'OSECAC', 'Av. Corrientes 1232', 'Ciudad de Buenos Aires', '4333-9191'),
('OS2', 'OSPLAD', 'Av. Pueyrredon 301', 'Ciudad de Buenos Aires', '4332-9898'),
('OS3', 'OSEM', '25 de Mayo 3219', 'Ciudad de Buenos Aires', '4200-1882'),
('OS4', 'OSEC', 'Av. L. N. Alem 1001', 'Ciudad de Buenos Aires', '4132-7656');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `NroHistoriaClinica` int(11) NOT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `TipoDocumento` varchar(3) DEFAULT NULL,
  `NroDocumento` varchar(20) DEFAULT NULL,
  `CodObraSocial` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`NroHistoriaClinica`, `Apellido`, `Nombre`, `FechaNacimiento`, `Sexo`, `TipoDocumento`, `NroDocumento`, `CodObraSocial`) VALUES
(1002, 'Pereyra', 'Ariel José', '1926-03-11', 'M', 'LE', '3545212', 'OS1'),
(2008, 'Mayoral', 'Ana María', '1980-10-21', 'F', 'DNI', '26899998', 'OS3'),
(4323, 'García', 'Anibal', '1964-06-19', 'M', 'DNI', '16887874', 'OS1'),
(6765, 'Martínez', 'Josefina', '1977-04-12', 'F', 'DNI', '20984654', 'OS2'),
(8787, 'Almeida', 'Cristina', '1943-12-20', 'F', 'LC', '7787545', 'OS2'),
(9893, 'Pizzi', 'Gerardo', '1950-03-26', 'M', 'DNI', '7765789', 'OS1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas_medicas`
--
ALTER TABLE `consultas_medicas`
  ADD PRIMARY KEY (`nro_historia_clinica`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`NroMatricula`);

--
-- Indices de la tabla `obras_sociales`
--
ALTER TABLE `obras_sociales`
  ADD PRIMARY KEY (`cod_obra_social`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`NroHistoriaClinica`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
