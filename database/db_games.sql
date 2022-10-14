-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2022 a las 20:48:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_games`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

CREATE TABLE `games` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `Año` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `games`
--

INSERT INTO `games` (`ID`, `Nombre`, `Descripcion`, `Año`, `id_genero`) VALUES
(1, 'DOOM', 'Los jugadores toman el papel de un marine espacial sin nombre mientras lucha contra las fuerzas demoníacas del infierno que han sido desatadas por la Unión Aerospace Corporation en un planeta colonizado en el futuro, Marte. La jugabilidad vuelve a un ritmo más rápido con más niveles abiertos, más cerca de los primeros dos juegos que el enfoque más lento de terror de supervivencia de Doom 3. También cuenta con recorrido de entorno, mejoras de personaje y la capacidad de realizar ejecuciones conocidas como \"muertes gloriosas\". El juego también es compatible con un componente multijugador en línea y un editor de niveles conocido como \"SnapMap\", desarrollado conjuntamente con Certain Affinity y Escalation Studios, respectivamente.', 2016, 1),
(2, 'Silent Hill', 'En Silent Hill Homecoming, Alex Shepherd regresa a su pueblo natal, Shepherd\'s Glen, para investigar la repentina desaparición de su hermano. Desde Shepherd\'s Glen hasta las neblinosas calles de Silent Hill', 2008, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gender`
--

CREATE TABLE `gender` (
  `id_genero` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gender`
--

INSERT INTO `gender` (`id_genero`, `Nombre`) VALUES
(1, 'Accion'),
(2, 'Terror'),
(3, 'Arcade');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `gender` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
