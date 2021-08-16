-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 00:05:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inversiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataformas`
--

CREATE TABLE `plataformas` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `beneficio` int(11) DEFAULT NULL,
  `ceo` varchar(255) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `pagobtc` tinyint(1) DEFAULT NULL,
  `pagoeth` tinyint(1) DEFAULT NULL,
  `pagodollar` tinyint(1) DEFAULT NULL,
  `invbtc` tinyint(1) DEFAULT NULL,
  `inveth` tinyint(1) DEFAULT NULL,
  `invdollar` tinyint(1) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `val` int(11) DEFAULT NULL,
  `inicio` date DEFAULT NULL,
  `insdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plataformas`
--

INSERT INTO `plataformas` (`ID`, `nombre`, `descripcion`, `modelo`, `beneficio`, `ceo`, `ubicacion`, `pagobtc`, `pagoeth`, `pagodollar`, `invbtc`, `inveth`, `invdollar`, `min`, `val`, `inicio`, `insdate`) VALUES
(1, 'Nimbus', 'timadores', 'arbitraje', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, NULL, '2020-11-16'),
(2, 'mind capital', 'the best', 'arbitraje', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, 0, NULL, '2020-11-16'),
(3, 'Kuailian', 'yeye', 'MasterNodos', 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 8, NULL, '2020-11-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `plataformas`
--
ALTER TABLE `plataformas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `plataformas`
--
ALTER TABLE `plataformas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
