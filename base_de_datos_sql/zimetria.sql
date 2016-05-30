-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2016 a las 17:50:53
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zimetria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Moda'),
(3, 'Deportes'),
(5, 'Gastronomia'),
(6, 'Salud'),
(7, 'Belleza'),
(8, 'Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiones`
--

DROP TABLE IF EXISTS `conexiones`;
CREATE TABLE IF NOT EXISTS `conexiones` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `fecha_up` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hora_up` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `conexiones`
--

INSERT INTO `conexiones` (`id`, `fecha_up`, `hora_up`, `user`) VALUES
(8, '30-05-2016', '02:55:23', 'dramoscuello'),
(9, '30-05-2016', '03:32:52', 'cemacu'),
(10, '30-05-2016', '03:37:27', 'dramoscuello2'),
(11, '30-05-2016', '04:03:25', 'dramoscuello'),
(12, '30-05-2016', '04:28:43', 'dramoscuello'),
(13, '30-05-2016', '15:16:42', 'dramoscuello'),
(14, '30-05-2016', '17:25:07', 'dramoscuello');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foros`
--

DROP TABLE IF EXISTS `foros`;
CREATE TABLE IF NOT EXISTS `foros` (
  `id` bigint(250) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `descrip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_mensajes` bigint(255) NOT NULL DEFAULT '0',
  `cantidad_temas` bigint(255) NOT NULL DEFAULT '0',
  `id_categoria` int(11) NOT NULL DEFAULT '1',
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `foros`
--

INSERT INTO `foros` (`id`, `nombre`, `descrip`, `cantidad_mensajes`, `cantidad_temas`, `id_categoria`, `estado`) VALUES
(1, 'Vestir 2016', 'tips para vestirse en este 2016', 0, 0, 1, 1),
(2, 'Real madrid', 'Real madrid campeaon champiosn league 2016', 0, 0, 3, 1),
(3, 'Lasagna', 'Como preparar una buena lasagna', 0, 0, 5, 1),
(4, 'Zika', 'Cuidados contra el Zika', 0, 0, 6, 1),
(5, 'Consejos de belleza', 'Tips de belleza según Fulanita', 0, 0, 7, 1),
(6, 'MEAN', 'Proyecto web realizado con el stack MEAN', 0, 0, 8, 1),
(7, 'Maquillaje', 'Como maquillarse bien', 0, 0, 7, 1),
(8, 'Masterchef', 'Entrevista con el jurado de Masterchef', 0, 0, 5, 1),
(9, 'Copa America centenario', 'Los equipos favoritos a ganar este torneo', 0, 0, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `permisos` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`, `permisos`) VALUES
(1, 'dramoscuello', '09d81f5bcfaafd31ecc15a5d21b0ed43', 'dramos.cuello@gmail.com', 2),
(2, 'dramoscuello1', '09d81f5bcfaafd31ecc15a5d21b0ed43', 'luca@gmail.com', 0),
(3, 'paula_sarmiento', '46a9879a781567c8452ec10411369d87', 'paula@gmail.com', 0),
(4, 'cemacu', '09d81f5bcfaafd31ecc15a5d21b0ed43', 'cemacu@gmail.com', 0),
(5, 'dramoscuello2', '09d81f5bcfaafd31ecc15a5d21b0ed43', 'dramos.cuello2@gmail.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
