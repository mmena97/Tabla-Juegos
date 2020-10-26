-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2020 a las 13:39:25
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_juegos`
--

CREATE TABLE `t_juegos` (
  `id_juego` int(11) NOT NULL,
  `TITULO` varchar(150) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `NOTA` float DEFAULT NULL,
  `MEDIA` float DEFAULT NULL,
  `INO` float DEFAULT NULL,
  `GA` float DEFAULT NULL,
  `ME` float DEFAULT NULL,
  `HI` float DEFAULT NULL,
  `PE` float DEFAULT NULL,
  `MU` float DEFAULT NULL,
  `DU` float DEFAULT NULL,
  `GR` float DEFAULT NULL,
  `DI` float DEFAULT NULL,
  `SO` float DEFAULT NULL,
  `TR` varchar(150) DEFAULT NULL,
  `DIFICULTAD` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_juegos`
--

INSERT INTO `t_juegos` (`id_juego`, `TITULO`, `FECHA`, `NOTA`, `MEDIA`, `INO`, `GA`, `ME`, `HI`, `PE`, `MU`, `DU`, `GR`, `DI`, `SO`, `TR`, `DIFICULTAD`) VALUES
(1, 'Sekiro: Shadows Die Twice', '2019-02-22', 9.5, 8.4, 9, 10, 10, 6, 6, 7, 9, 8, 9, 8, 'T/V', 'Fija'),
(2, 'Doom Eternal', '2020-03-20', 9.5, 8.6, 7, 10, 10, 6, 8, 7, 9, 9, 9, 9, 'T/V', 'Ultraviolencia (Dificil)'),
(3, 'The Legend of Zelda: Breath of the Wild', '2017-03-03', 9.5, 8.5, 9, 9, 10, 7, 6, 9, 8, 8, 9, 8, 'T/V', 'Fija'),
(6, 'Sea of Thieves', '2016-12-16', 9, 7.9, 9, 8, 9, 6, 6, 8, 8, 8, 9, 8, 'T', 'Fija'),
(8, 'Horizon Zero Dawn', '2020-08-07', 9, 8.6, 8, 9, 8, 8, 8, 9, 9, 8, 9, 8, 'T/V', 'Dificil'),
(9, 'Hellblade: Senuas Sacrifice', '2017-08-08', 8.5, 8.2, 7, 6, 7, 9, 10, 7, 8, 8, 10, 10, 'T', 'Normal'),
(10, 'Monster Hunter World ', '2017-12-09', 9, 8.5, 8, 9, 9, 6, 6, 9, 9, 9, 9, 9, 'T/V', 'Fija'),
(11, 'A Plague Tale: Innocence', '2019-04-14', 8.5, 7.9, 6, 7, 6, 9, 9, 8, 7, 9, 9, 9, 'T', 'Fija'),
(12, 'The Last of Us', '2013-06-14', 9, 8.2, 7, 6, 7, 10, 10, 7, 9, 8, 8, 8, 'T/V', 'Normal'),
(13, 'Borderlands 3', '2019-09-13', 8.5, 8, 7, 9, 8, 7, 7, 7, 8, 8, 9, 8, 'T/V', 'Normal (La mas elevada)'),
(14, 'Mass Effect: Andromeda', '2017-03-21', 8.5, 7.7, 7, 8, 7, 7, 8, 8, 8, 8, 8, 8, 'T', 'Normal'),
(15, 'Titanfall 2 ', '2016-10-28', 8, 8, 8, 9, 9, 8, 7, 6, 8, 8, 7, 8, 'T/V', 'Dificil'),
(16, 'Star Wars Jedi: Fallen Order', '2019-10-15', 8.5, 7.8, 7, 8, 7, 7, 8, 7, 8, 8, 8, 8, 'T/V', 'Caballero Jedi (Normal)'),
(17, 'Tom Clancys The Division 2', '2019-02-07', 8.5, 7.8, 6, 9, 8, 7, 6, 7, 9, 8, 8, 8, 'T/V', 'Fija'),
(18, 'Call of Duty: Modern Warfare (2019)', '2019-09-12', 8.5, 7.8, 6, 9, 7, 7, 7, 6, 8, 9, 8, 9, 'T/V', 'Veterano (Maxima)'),
(19, 'Nier Automata', '2017-02-23', 8, 7.6, 7, 9, 10, 7, 8, 6, 7, 6, 8, 8, 'T', 'Normal'),
(20, 'Anthem', '2019-01-25', 8, 7.7, 8, 9, 9, 7, 5, 6, 7, 8, 8, 8, 'T/V', 'Fija'),
(21, 'Inside', '2016-06-29', 8, 7.4, 8, 8, 8, 7, 5, 7, 7, 7, 9, 8, 'T', 'Fija'),
(22, 'Gears of war 5', '2019-07-19', 8.5, 7.5, 6, 9, 7, 7, 7, 6, 7, 8, 8, 8, 'T/V', 'Elevada (Dificil)'),
(23, 'Dark Souls 3', '2016-03-24', 8.5, 7.3, 6, 7, 6, 6, 7, 9, 8, 7, 9, 8, 'T', 'Fija'),
(24, 'Remnant: From the Ashes ', '2019-08-16', 8, 7.2, 8, 8, 6, 6, 5, 7, 7, 7, 8, 8, 'T/V', 'Normal'),
(25, 'Conquerors Blade', '2019-05-30', 7.5, 7, 8, 8, 8, 4, 4, 5, 8, 8, 7, 8, 'T/V', 'Fija'),
(26, 'Minecraft Dungeons', '2020-05-26', 7, 6.2, 6, 7, 6, 5, 5, 6, 6, 7, 7, 7, 'T', 'Fija'),
(28, 'Red Dead Redemption 2', '2019-12-05', 9.5, 9.2, 8, 9, 9, 8, 10, 10, 10, 10, 9, 9, 'T', 'Fija'),
(30, 'Hades', '2020-09-17', 8.5, 8, 8, 9, 9, 7, 7, 7, 9, 7, 9, 8, 'T', 'Fija'),
(31, 'Genshin Impact', '2020-09-28', 8.5, 8.2, 7, 8, 9, 8, 8, 9, 9, 8, 8, 8, 'T', 'Fija');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_juegos`
--
ALTER TABLE `t_juegos`
  ADD PRIMARY KEY (`id_juego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_juegos`
--
ALTER TABLE `t_juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
