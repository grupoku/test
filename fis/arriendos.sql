-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2017 a las 17:11:30
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arriendos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canchas`
--

CREATE TABLE `canchas` (
  `id_cancha` int(11) NOT NULL,
  `id_gym` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canchas`
--

INSERT INTO `canchas` (`id_cancha`, `id_gym`, `Nombre`, `Precio`) VALUES
(0, 0, 'football', 5500),
(1, 0, 'football2', 7500),
(2, 1, 'tenis1', 8000),
(3, 1, 'tenis2', 6000),
(4, 1, 'tenis3', 3500),
(5, 1, 'tenis4', 5000),
(6, 2, 'piscina', 6000),
(7, 3, 'basketball1', 5000),
(8, 3, 'basketball2', 2500),
(9, 3, 'volleyball1', 2000),
(10, 3, 'volleyball2', 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `Nombre`, `Telefono`, `contraseña`) VALUES
(0, 'Francisco', 999647326, '1234'),
(1, 'Hugo', 12345678, '123'),
(2, 'Javier', 87654321, '321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gym`
--

CREATE TABLE `gym` (
  `id_gym` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gym`
--

INSERT INTO `gym` (`id_gym`, `Nombre`, `Descripcion`, `Imagen`) VALUES
(0, 'Condor Rojas', NULL, NULL),
(1, 'Massu', NULL, NULL),
(2, 'El Phelps', NULL, NULL),
(3, 'NBA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_cancha` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `estado` enum('disponible','no disponible') DEFAULT 'disponible'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `fecha`, `hora`, `id_cancha`, `id_cliente`, `estado`) VALUES
(0, '2017-07-10', '15:00:00', 2, NULL, 'disponible'),
(1, '2017-07-14', '14:32:00', 2, NULL, 'disponible'),
(2, '2017-07-18', '12:22:00', 4, NULL, 'disponible'),
(3, '2017-07-03', '12:00:00', 7, NULL, 'disponible'),
(4, '2017-07-21', '17:37:00', 8, NULL, 'disponible'),
(5, '2017-07-18', '10:37:00', 6, NULL, 'disponible'),
(6, '2017-07-13', '12:43:00', 7, NULL, 'disponible'),
(7, '2017-07-17', '12:40:00', 0, 1, 'no disponible'),
(8, '2017-07-23', '16:00:00', 6, NULL, 'disponible'),
(9, '2017-07-10', '11:00:00', 9, NULL, 'disponible');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD PRIMARY KEY (`id_cancha`),
  ADD KEY `id_gym` (`id_gym`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id_gym`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_cancha` (`id_cancha`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD CONSTRAINT `canchas_ibfk_1` FOREIGN KEY (`id_gym`) REFERENCES `gym` (`id_gym`);

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_cancha`) REFERENCES `canchas` (`id_cancha`),
  ADD CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
