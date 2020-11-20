-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2020 a las 01:26:41
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd_chell`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `usuario` varchar(18) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `calles` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`usuario`, `nombre`, `apellido`, `calles`, `num`, `telefono`, `correo`, `contraseña`) VALUES
('Isabel123456', 'Isabel', 'Peralta', 'segunda privada de Nicolas Bravo', 0, '7222840894', 'isabel.peralta12@outlook.com', '7222840894');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` decimal(5,2) NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8 NOT NULL,
  `ruta` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nomp`, `descripcion`, `precioVenta`, `precioCompra`, `existencia`, `nombre`, `ruta`) VALUES
(12, 'Diadema', 'Rojo', '25.00', '10.00', '26.00', '1.jpeg', 'imagenes/1.jpeg'),
(13, 'Diadema', 'Cafe', '30.00', '10.00', '13.00', '2.jpeg', 'imagenes/2.jpeg'),
(14, 'Diadema', 'Amarilla', '40.00', '14.00', '8.00', '3.jpeg', 'imagenes/3.jpeg'),
(15, 'Diadema', 'Turquesa', '20.00', '10.00', '98.00', '4.jpeg', 'imagenes/4.jpeg'),
(16, 'Diadema', 'Negra con puntos', '3.00', '1.00', '2.00', '5.jpeg', 'imagenes/5.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL,
  `user_cli` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`),
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
