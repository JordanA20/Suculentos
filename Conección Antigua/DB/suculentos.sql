-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-05-2022 a las 01:38:17
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suculentos_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `costo` decimal(4,2) NOT NULL DEFAULT 0.00,
  `foto` varchar(40) NOT NULL DEFAULT 'product_dflt.png',
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `costo`, `foto`, `tipo`) VALUES
(1, 'Lasagna', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '7.00', 'lasagna.png', 1),
(2, 'Family Lasagna', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '21.00', 'family-lasagna.png', 1),
(3, 'Baguette', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '1.00', 'baguette.png', 3),
(4, 'Braided Bread', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '1.00', 'braided-bread.png', 3),
(5, 'Egg Breads', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '1.00', 'egg-breads.png', 3),
(6, 'Butter Cookies', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '1.25', 'butter-cookies.png', 4),
(7, 'Oat Cookies', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '1.50', 'oat-cookies.png', 4),
(8, 'Cinnamon Rolls', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum autem architecto dolore quae id, mollitia nisi hic facilis, nemo vitae vero dolorem cumque. Architecto est id quam similique cupiditate suscipit.', '2.50', 'cinnamon-rolls.png', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `nom_tipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nom_tipo`) VALUES
(1, 'DISHES'),
(2, 'ACCOMPANIMENTS'),
(3, 'BREDS'),
(4, 'DESSERT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `producto_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 4),
(11, 5),
(12, 6),
(13, 6),
(14, 6),
(15, 7),
(16, 8),
(17, 8),
(18, 8),
(19, 8),
(20, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `tipo_producto` (`tipo`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_venta_producto` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
