-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2019 a las 12:09:07
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_config`
--

CREATE TABLE `d_config` (
  `id` int(11) NOT NULL,
  `config_name` varchar(20) NOT NULL,
  `config_value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_docente`
--

CREATE TABLE `d_docente` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `e_password` text DEFAULT NULL,
  `apellido_p` text NOT NULL,
  `apellido_m` text NOT NULL,
  `dni` text NOT NULL,
  `fecha_n` text NOT NULL,
  `grado_es` text NOT NULL,
  `direccion` text NOT NULL,
  `lugar_n` text NOT NULL,
  `especialidad` text NOT NULL,
  `token_registro` text NOT NULL,
  `registro_estado` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `d_docente`
--

INSERT INTO `d_docente` (`id`, `nombre`, `email`, `username`, `e_password`, `apellido_p`, `apellido_m`, `dni`, `fecha_n`, `grado_es`, `direccion`, `lugar_n`, `especialidad`, `token_registro`, `registro_estado`) VALUES
(5, 'David', 'yoni@yoni.yoni', 'yoni_yoni', '$2y$10$HulTAbqE7tnDT8eux3dKDeNkEZvUefrC5jwTgtDNSBJGSOtIfJsL2', 'Calsoin', 'Borda', '654', '2019-07-09', '2', 'palo alto', 'california', 'hacker', 'NULL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_estudiante`
--

CREATE TABLE `d_estudiante` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `e_password` text DEFAULT NULL,
  `apellido_p` text NOT NULL,
  `apellido_m` text NOT NULL,
  `dni` text NOT NULL,
  `fecha_n` text NOT NULL,
  `grado` text NOT NULL,
  `direccion` text NOT NULL,
  `lugar_n` text NOT NULL,
  `token_registro` text DEFAULT NULL,
  `registro_estado` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `d_estudiante`
--

INSERT INTO `d_estudiante` (`id`, `nombre`, `username`, `email`, `e_password`, `apellido_p`, `apellido_m`, `dni`, `fecha_n`, `grado`, `direccion`, `lugar_n`, `token_registro`, `registro_estado`) VALUES
(19, 'Yoni Samuel', 'yoni_yonii', 'yoni@yoni.yoni', '$2y$10$xldgzOUBJcriPQWHvXFdl.vc38KZcvQwgkrbKbhoCsjiX4SI/MbXm', 'Calsin', 'Borda', '654', '2019-07-04', '3', 'Palo Alto', 'California', 'NULL', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `d_config`
--
ALTER TABLE `d_config`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `d_docente`
--
ALTER TABLE `d_docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `d_estudiante`
--
ALTER TABLE `d_estudiante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `d_config`
--
ALTER TABLE `d_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `d_docente`
--
ALTER TABLE `d_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `d_estudiante`
--
ALTER TABLE `d_estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
