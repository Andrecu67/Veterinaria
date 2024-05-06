-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-02-2024 a las 15:21:39
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinaria`
--

CREATE TABLE IF NOT EXISTS `veterinaria` (
  `Código_Perro` int(80) NOT NULL AUTO_INCREMENT,
  `Tamaño` text COLLATE utf8_spanish_ci NOT NULL,
  `Peso` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Raza` text COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Dueño` text COLLATE utf8_spanish_ci NOT NULL,
  `Dirección` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Teléfono` int(80) NOT NULL,
  PRIMARY KEY (`Código_Perro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
