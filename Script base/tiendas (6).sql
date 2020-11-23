-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2020 a las 19:27:45
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Destino` varchar(120) DEFAULT NULL,
  `IdTipoProducto` int(11) DEFAULT NULL,
  `Cupo` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `Horarioss` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Destino`, `IdTipoProducto`, `Cupo`, `precio`, `Horarioss`) VALUES
(1, 'Villa Hermosa (VILL)', 1, 8, 350, '10:30 PM'),
(2, 'Villa Hermosa (VILL)', 2, 23, 250, '10:30 AM'),
(3, 'Arriaga (ARR)', 1, 39, 300, '5:00 PM'),
(4, 'Arriaga (ARR)', 2, 33, 180, '5:30 PM'),
(5, 'Cintalapa (CIN)', 1, 63, 255, '7:30 AM'),
(6, 'Cintalapa (CIN)', 2, 38, 150, '10:30 PM'),
(7, 'Palenque (PAL)', 1, 35, 550, '7:30 AM'),
(8, 'Palenque (PAL)', 2, 39, 355, '9:30 AM'),
(9, 'Escuintla (ESC)', 1, 38, 550, '5:30 PM'),
(10, 'Escuintla (ESC)', 2, 53, 450, '6:00 AM'),
(11, 'Huixtla (HUI)', 1, 64, 456, '7:30 AM'),
(12, 'Huixtla (HUI)', 2, 67, 385, '5:00 AM'),
(13, 'Tapachula (TAP)', 1, 64, 650, '4:30 PM'),
(14, 'Tapachula (TAP)', 2, 72, 500, '11:35 PM'),
(15, 'Pijijiapan (PIJ)', 1, 63, 555, '5:00 PM'),
(16, 'Pijijiapan (PIJ)', 2, 49, 450, '2:30 PM'),
(17, 'Tonala (TON)', 1, 53, 355, '1:30 PM'),
(18, 'Tonala (TON)', 2, 64, 355, '11:00 AM'),
(19, 'San cristobal De Las casas (SAN)', 1, 49, 250, '2:00 PM'),
(20, 'San cristobal De Las casas (SAN)', 2, 65, 125, '10:30 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproductos`
--

CREATE TABLE `tipoproductos` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoproductos`
--

INSERT INTO `tipoproductos` (`Id`, `Tipo`) VALUES
(1, 'Viaje Premium'),
(2, 'Viaje Basico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `Id` int(11) NOT NULL,
  `No_placa` varchar(120) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `Chofer` varchar(100) NOT NULL,
  `Capacidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`Id`, `No_placa`, `Marca`, `Modelo`, `Chofer`, `Capacidad`) VALUES
(1, 'HBT-064-D', 'Mercedes Benz', 'Paradiso 1200', 'Julian Grajales Flores', '90 Pasajeros'),
(2, 'HBT-066-E', 'Isuzu', 'ELF 600 Bus', 'Javier Aquino Dominguez Velazquez', '120 Pasajeros'),
(3, 'K03-ARV', 'Mercedes Benz', 'Torino', 'Miguel Ángel Rodríguez Álvarez', '110 Pasajeros'),
(4, 'TZT-80-67', 'Mercedes Benz', 'Boxer 50', 'Jorge De Jesús López Aguilar', '125 Pasajeros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(10) NOT NULL,
  `NombreCompleto` varchar(55) NOT NULL,
  `Direccion` varchar(55) NOT NULL,
  `CorreoElectronico` varchar(55) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Tipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `NombreCompleto`, `Direccion`, `CorreoElectronico`, `Password`, `Tipo`) VALUES
(1, 'Jovany De Jesus Mota Escobar', 'Lomas del oriente', 'jovanymota.cetis138@gmail.com', '12345', 1),
(43, 'Kevin Leonardo Moreno Jimenez', 'Av. 6 De junio', 'bKevinprince7@gmail.com', '9090', 2),
(44, 'Henry Omar Padilla Perez', 'Av. Julian Grajales', 'Omarsistemas19@gmail.com', '12345678', 2),
(45, 'Maynor Rodrigo Perez Palacios', 'Av. Nuevo Pacayal', 'Krousher76@gmail.com', '7654', 2),
(46, 'Maynor Perez Palacios', 'AV. paso limon', 'krieger@gmail.com', '123456789', 2),
(47, 'Nio Garcia', 'av.zona pr', 'nioduro@gmail.com', 'brr', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `IdProducto` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Pasajeros` int(11) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Importe` float DEFAULT NULL,
  `Horarios` varchar(200) DEFAULT NULL,
  `Lugar` varchar(100) NOT NULL,
  `Titular` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id`, `IdUsuario`, `IdProducto`, `Fecha`, `Pasajeros`, `Precio`, `Importe`, `Horarios`, `Lugar`, `Titular`) VALUES
(77, 44, 8, '2020-11-17', 1, 355, 355, '9:30 AM', 'Palenque ', 'Henry Omar Padilla Pérez'),
(78, 44, 3, '2020-11-17', 1, 300, 300, '5:00 PM', 'Arriaga', 'Henry Omar Padilla Pérez'),
(79, 46, 17, '2020-11-17', 2, 355, 710, '1:30 PM', 'Tonala', 'Maynor Rodrigo Pérez Palacios'),
(80, 43, 4, '2020-11-17', 1, 180, 180, '5:30 PM', 'Arriaga', 'Kevin Leonardo Moreno Jimenez'),
(81, 1, 19, '2020-11-17', 2, 250, 500, '2:00 PM', 'San Cristóbal De Las Casas', 'Kevin Leonardo Moreno Jimenez'),
(82, 1, 17, '2020-11-17', 2, 355, 710, '1:30 PM', 'Tonala', 'Jovany De Jesus Mota Escobar'),
(83, 43, 19, '2020-11-17', 2, 250, 500, '2:00 PM', 'San cristobal De Las casas', 'Kevin Leonardo Moreno Jimenez'),
(84, 43, 16, '2020-11-17', 5, 450, 2250, '2:30 PM', 'Pijijiapan ', 'Kevin Leonardo Moreno Jimenez'),
(85, 47, 5, '2020-11-18', 2, 255, 510, '7:30 AM', 'Cintalapa', 'Nio garcia'),
(86, 46, 13, '2020-11-18', 1, 650, 650, '4:30 PM', 'Tapachula', 'Kevin prince'),
(87, 44, 11, '2020-11-21', 0, 456, 0, 'a', 'a', 'a'),
(88, 44, 4, '2020-11-21', 1, 180, 180, '5:00 PM', 'Tonala', 'Jovany De Jesus Mota Escobar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdTipoProducto` (`IdTipoProducto`);

--
-- Indices de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `IdProducto` (`IdProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`IdTipoProducto`) REFERENCES `tipoproductos` (`Id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`Id`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
