-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2022 a las 21:32:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `auare`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promotor`
--

CREATE TABLE `promotor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promotor`
--

INSERT INTO `promotor` (`id`, `nombre`, `responsable`, `categoria`) VALUES
(1, 'Jesus', 'Tania', 'Perecederos'),
(2, 'Rebeca', 'Jesus', 'Consumibles'),
(3, 'Juan', 'Sonia', 'Materias Primas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id`, `nombre`, `telefono`, `correo`) VALUES
(1, 'Andy ', '5518646112', 'alguien@gmail.com'),
(2, 'Litzzy', '6183278515', 'litzzy@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'Sucursal Durango', 'Av Constelaciones 1028 Villas del Guadina III', '4271644845'),
(2, 'Sucursal Guanajuato', 'No se donde vive', '6183278515'),
(3, 'Sucursal Monterrey', 'Av constelaciones', '6181005670');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `puesto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `telefono`, `correo`, `puesto`) VALUES
(1, 'Jefe', 'andyvite9@gmail.com', '1234567890', ''),
(3, 'Litzzy', '6183278515', 'litzzy@gmail.com', 'Gerente General'),
(4, 'Juan', '6181098408', 'juanp@gmail.com', 'Encargado de Almacen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `priority` varchar(100) NOT NULL,
  `tipo_usuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `telefono`, `password`, `category`, `priority`, `tipo_usuario`) VALUES
(8, 'Andy ', 'Vite', 'andyvite9@gmail.com', 2147483647, '123456', 'Durango', 'Desarrollo Proyecto', 1),
(9, 'Yessica', 'Vite', 'yvite@gmail.com', 1234567890, '1234', 'Estado de Mexico', 'Desarrollo Proyecto', 2),
(10, 'Maribel', 'Garfias', 'mari9@gmail.com', 2147483647, '123456', 'Chihuahua', 'Asesoria', 2),
(13, 'Andres', 'Garcia', 'aga@gmail.com', 1234567891, '123456', 'Guerrero', 'Desarrollo proyecto', 1),
(14, 'Fernanda ', 'Sarmiento', 'fernanda@gmail.com', 1234567890, '12345', 'Coahuila', 'Asesoria', 2),
(16, 'Ana', 'Lara', 'ana@gmail.com', 2147483647, '12345678', 'Tabasco', 'Diseño de proyecto', 0),
(17, 'proyecto', 'final', 'proyectofinalutd.com', 1223443534, 'proyecto', '', '', 1),
(18, 'proyecto', 'final', 'proyectofinal@utd.com', 1223443534, 'proyecto', '', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `promotor`
--
ALTER TABLE `promotor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `promotor`
--
ALTER TABLE `promotor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
