-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2024 a las 23:54:58
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
-- Base de datos: `aquanexa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(255) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `nombre_producto`, `cantidad`, `precio`) VALUES
(1, 'AquaNexa1', 30, 73800.00),
(2, 'AquaNexa Bomba', 30, 76800.00),
(3, 'AquaNexa Ultrasonido', 30, 76800.00),
(4, 'AquaNexa Temperatura', 30, 76300.00),
(5, 'AquaNexa Ph', 30, 82800.00),
(6, 'AquaNexa Ph y Bomba', 30, 102800.00),
(7, 'AquaNexa Ultrasonido y Bomba', 30, 96800.00),
(8, 'AquaNexa Bomba y Temperatura', 30, 96300.00),
(9, 'AquaNexa Ph y Temperatura', 30, 85300.00),
(10, 'AquaNexa ph, temp. y ultrasonido', 30, 88300.00),
(11, 'AquaNexa Ph, temperatura y bomba', 30, 105300.00),
(12, 'AquaNexa Ph, bomba y ultrasonido', 30, 105800.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
