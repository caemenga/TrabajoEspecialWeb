-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2022 a las 01:42:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tiendabebidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_user` int(11) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_user`, `email`, `password`) VALUES
(1, 'caetano@hotmail.com', '$2a$12$dhO6Qhkoq4UJneN5.DxkNOiJi/6DTSdX7E4hYLTP82lm9K1Bw//JK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_productos`
--

CREATE TABLE `db_productos` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `marca` varchar(155) NOT NULL,
  `id_especificacion` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `db_productos`
--

INSERT INTO `db_productos` (`id_producto`, `producto`, `marca`, `id_especificacion`) VALUES
(4, 'vodka', 'Smirnoff', 0),
(5, 'Vino', 'Bianchi', 0),
(7, 'vino', 'Toro', 0),
(8, 'Vino', 'Septima', 0),
(10, 'tequila2', 'herradura', 0),
(17, 'tequila', 'jamaica', 0),
(18, 'tequila10', 'jamaica', 0),
(19, 'cerveza', 'quilmes', 0),
(21, 'Vino ', 'Toro', 0),
(22, 'Vino', 'Septima', 0),
(23, 'vino', 'Bianchi', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificaciones`
--

CREATE TABLE `especificaciones` (
  `id_especificacion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `stock` varchar(45) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especificaciones`
--

INSERT INTO `especificaciones` (`id_especificacion`, `id_producto`, `tipo`, `stock`, `descripcion`, `precio`) VALUES
(1, 3, 'malbec', 'si', 'Vino que te trasporta a la hermosa tierra mendozina, con su aroma frutal y sabor unico.', 250),
(2, 4, 'artesanal', 'si', 'El mejor vodka ruso.', 560),
(5, 5, 'malbec', 'si', NULL, 370),
(6, 7, 'espumante', 'si', 'Rico vino espumante', 400),
(7, 8, 'rosado', 'si', 'rico vino rosado', 660),
(8, 9, 'Destilado', 'si', 'Tequila mexicano destilado directo de Tijuana', 1050),
(9, 10, 'fuerte', 'si', 'Tequila mexicano de la mejor calidad', 1255),
(10, 17, 'Fuerte', 'si', 'Tequila barato', 420),
(11, 18, 'Fuerte', 'si', 'Tequila barato', 420),
(12, 19, 'rubia', 'si', 'Cerveza Argentina, de la mejor', 370),
(13, 21, 'malbec', 'si', 'Vino clasico argentino', 210);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `db_productos`
--
ALTER TABLE `db_productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_id_especificacion` (`id_especificacion`);

--
-- Indices de la tabla `especificaciones`
--
ALTER TABLE `especificaciones`
  ADD PRIMARY KEY (`id_especificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `db_productos`
--
ALTER TABLE `db_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `especificaciones`
--
ALTER TABLE `especificaciones`
  MODIFY `id_especificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
