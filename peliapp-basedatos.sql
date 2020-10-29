-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2020 a las 00:02:37
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliapp-basedatos`
--
CREATE DATABASE IF NOT EXISTS `peliapp-basedatos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `peliapp-basedatos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) NOT NULL,
  `titulo` varchar(2555) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `produccion` varchar(255) NOT NULL,
  `guion` text NOT NULL,
  `musica` varchar(255) NOT NULL,
  `fotografia` text NOT NULL,
  `montaje` text NOT NULL,
  `protagonistas` text NOT NULL,
  `pais` text NOT NULL,
  `anio` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `duracion` varchar(255) NOT NULL,
  `idiomas` text NOT NULL,
  `productora` varchar(255) NOT NULL,
  `distribucion` varchar(255) NOT NULL,
  `presupuesto` int(11) NOT NULL,
  `recaudacion` int(11) NOT NULL,
  `sinopsis` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `titulo`, `direccion`, `produccion`, `guion`, `musica`, `fotografia`, `montaje`, `protagonistas`, `pais`, `anio`, `genero`, `duracion`, `idiomas`, `productora`, `distribucion`, `presupuesto`, `recaudacion`, `sinopsis`) VALUES
(1, 'Avengers EndGame', 'Marvel', 'Russos', 'Stan Lee', 'Freddy', 'Paul', 'Marvel Studios', 'Chris Hemwroths Chris Evans Robert Downey Jr', 'USA', 2019, 'Superheroes', '3h 2mins', 'Ingles', 'Marvel Inc', 'Marvel', 356000000, 2147483647, 'Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento épico con Thanos, el malvado que diezmó el planeta y el universo.'),
(2, 'Parasitos', 'Bong Joon ho', 'Bong Joon ho', 'Bong Joon ho', 'eong Jae il', 'Hong Kyung pyo', 'Yang Jin mo', 'Lee Sun kyun Cho Yeo jeong', 'Corea del Sur', 2019, 'Drama y Humor negro', '132 mins', 'Coreano', 'Barunson E&A\r\nCJ Entertainment', 'CJ Entertainment', 11000000, 254088600, 'Tanto Gi Taek como su familia están sin trabajo. Cuando su hijo mayor, Gi Woo, empieza a impartir clases particulares en la adinerada casa de los Park, las dos familias, que tienen mucho en común pese a pertenecer a dos mundos totalmente distintos, entablan una relación de resultados imprevisibles.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
