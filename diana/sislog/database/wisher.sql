-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2016 a las 15:33:35
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wisher`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privile`
--

CREATE TABLE IF NOT EXISTS `privile` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `privile`
--

INSERT INTO `privile` (`ID`, `Nombre`) VALUES
(0, 'Gerente'),
(1, 'Usuario'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wish`
--

CREATE TABLE IF NOT EXISTS `wish` (
`id` int(15) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `wisher_id` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wish`
--

INSERT INTO `wish` (`id`, `title`, `description`, `wisher_id`) VALUES
(27, 'Mi vida..', 'Mi vida \r\nyo la decido\r\nsiempre sigo a cada momento \r\nsoy especial.', 11),
(30, 'AristÃ³tles', 'El sabio no dice todo lo que piensa, pero siempre piensa todo lo que dice.', 14),
(32, 'Buda', 'Todo lo que somos es el resultado de lo que hemos pensado; estÃ¡ fundado en nuestros pensamientos y estÃ¡ hecho de nuestros pensamientos.', 14),
(33, 'Sir Francisco Bacon', 'Quien no quiere pensar es un fanÃ¡tico; quien no puede pensar, es un idiota; quien no osa pensar es un cobarde.', 14),
(34, 'Voltaire', 'Una colecciÃ³n de pensamientos debe ser una farmacia donde se encuentra remedio a todos los males.', 14),
(35, 'AristÃ³tles2', 'Piensa como piensan los sabios, mas habla como habla la gente sencilla.', 14),
(36, 'Buda 2', 'Ni tu peor enemigo puede hacerte tanto daÃ±o como tus propios pensamientos.', 11),
(37, 'Proverbio chino', 'El trabajo del pensamiento se parece a la perforaciÃ³n de un pozo: el agua es turbia al principio, mas luego se clarifica.', 11),
(38, 'Jacinto', 'Cuando no se piensa lo que se dice es cuando se dice lo que se piensa.', 11),
(39, 'Henry', 'Pensar es el trabajo mÃ¡s difÃ­cil que existe. QuizÃ¡ esa sea la razÃ³n por la que haya tan pocas personas que lo practiquen.', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wisher`
--

CREATE TABLE IF NOT EXISTS `wisher` (
`id` int(15) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `privilegio` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wisher`
--

INSERT INTO `wisher` (`id`, `nombre`, `apellido`, `usuario`, `password`, `privilegio`) VALUES
(10, 'Diana', 'Carrizales', 'DiaCa1', '1234', 3),
(11, 'Alberto', 'Romero', 'AlberRom', '1234s', 1),
(12, 'Laura', 'Carrizales', 'LauCa2', '123a', 0),
(14, 'Maria', 'Espinoza', 'MariEs', 'holamundo', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `privile`
--
ALTER TABLE `privile`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `wish`
--
ALTER TABLE `wish`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_wish_wisher` (`wisher_id`);

--
-- Indices de la tabla `wisher`
--
ALTER TABLE `wisher`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wish`
--
ALTER TABLE `wish`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `wisher`
--
ALTER TABLE `wisher`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `wish`
--
ALTER TABLE `wish`
ADD CONSTRAINT `fk_wish_wisher` FOREIGN KEY (`wisher_id`) REFERENCES `wisher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
