-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-12-2020 a las 05:43:12
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gestor_dp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_ventas`
--

CREATE TABLE `d_ventas` (
  `idd_ventas` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `id_venta` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `d_ventas`
--

INSERT INTO `d_ventas` (`idd_ventas`, `id_producto`, `product_name`, `unit_price`, `amount`, `total`, `id_venta`) VALUES
(109, 3, 'hola', 100, 5, 500, '1'),
(110, 5, 'pizza', 12, 1, 12, '1'),
(111, 6, 'frape', 300, 1, 300, '1'),
(112, 4, 'hamburguesa', 1000, 1, 1000, '1'),
(113, 8, 'pasta', 250, 2, 500, '1'),
(114, 0, 'luis alberto', 0, 0, 0, '1'),
(115, 3, 'hola', 100, 1, 100, '2'),
(116, 1, 'chocolate', 100, 1, 100, '2'),
(117, 5, 'pizza', 12, 1, 12, '2'),
(118, 9, 'combo', 400, 4, 1600, '5'),
(119, 7, 'especial', 400, 1, 400, '5'),
(120, 6, 'frape', 300, 1, 300, '5'),
(121, 3, 'hola', 100, 1, 100, '5'),
(122, 0, 'mari', 0, 0, 0, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `descriptions` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `descriptions`, `img`) VALUES
(1, 'chocolate', '100', 'un chocolate', 'chocolate.png'),
(2, 'si', '100', 'hola mundo', 'chocolate.png'),
(3, 'hola', '100', 'como va ser', 'agua.png'),
(4, 'hamburguesa', '1000', 'hamburguesa con queso', 'captcha2.jpg'),
(5, 'pizza', '12', 'una pizza grande', 'captcha4.jpg'),
(6, 'frape', '300', 'dddd', 'Captura1.PNG'),
(7, 'especial', '400', 'el especial del dia', 'Captura.PNG'),
(8, 'pasta', '250', 'pasta con albondigas', 'captcha3.jpg'),
(9, 'combo', '400', 'incluye una pizza, refresco y papas grandes', 'captcha5.jpg'),
(10, 'salsa especial', '30', 'es una salsa especial creada por el restauran', 'captcha5.jpg'),
(11, 'ddd', '12', 'dfdfdf', 'blog74054e389122fd355363104c1990700d__t_e048f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `client_name` varchar(20) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `date` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `client_name`, `address`, `total`, `date`) VALUES
(1, 'luis alberto', 'calle 33b ', 2312, 'Sun Dec 06 2020 23:54:41 GMT-0500 (hora estándar oriental)'),
(2, 'pizza', ' ', 0, ''),
(3, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL),
(5, 'mari', 'call44 ', 2400, 'Sun Dec 06 2020 23:55:47 GMT-0500 (hora estándar oriental)');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `d_ventas`
--
ALTER TABLE `d_ventas`
  ADD PRIMARY KEY (`idd_ventas`),
  ADD UNIQUE KEY `idd_ventas_UNIQUE` (`idd_ventas`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `id_product_UNIQUE` (`id_product`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `d_ventas`
--
ALTER TABLE `d_ventas`
  MODIFY `idd_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
