-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2024 a las 05:53:54
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
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginn`
--

CREATE TABLE `loginn` (
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` int(50) UNSIGNED NOT NULL,
  `Perfil` varchar(50) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  `Telefono` int(50) NOT NULL,
  `telop` int(8) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `loginn`
--

INSERT INTO `loginn` (`usuario`, `contraseña`, `Nombre`, `Apellido`, `DNI`, `Perfil`, `Cargo`, `Telefono`, `telop`, `Direccion`, `Ciudad`, `Provincia`) VALUES
('LionelMessi@gmail.com', '91218', 'Julian', 'Nicolossi', 6665654, 'futbol', 'streamer', 1123345654, 54, 'america 850', 'Rosario', 'Buenos Aires'),
('LionelMessi@gmail.com', '91218', 'lucas', 'pratto', 9122018, 'Fútbol', 'Futbolista', 1128234355, 54, 'Gregorio Velez 4055', 'Córdoba', 'Córdoba'),
('lisandroriver14@gmail.com', '44535332', 'Julian', 'Mismisimo', 33084644, 'futbol', 'futbolista', 1128234754, 54, 'america 850', 'Buenos Aires', 'dfgfdgfd'),
('lisandroriver14@gmail.com.ar', '91218', 'lisandro', 'ferffrff', 33084665, 'futbol', 'futbolista', 1124254859, 54, 'america 850', 'Grand Bor', 'FGFFG'),
('LionelMessi@gmail.com', '91218', 'Julian', 'nicolossi', 47084618, 'Fútbol', 'streamer', 1128234756, 54, 'america 850', 'Rosario', 'FGFFG'),
('LionelMessi@gmail.com', '91218', 'Lionel', 'Messi', 47084619, 'futbol', 'Futbolista', 1128234355, 591, 'america 850', 'Rosario', 'Santa Fe'),
('LionelMessi@gmail.com', '434343', 'Julian', 'Mismisimo', 4294967295, 'kfkfkf', 'jfjfjfjf', 443443443, 54, 'kskskss', 'kskskskks', 'ksksksks');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `loginn`
--
ALTER TABLE `loginn`
  ADD PRIMARY KEY (`DNI`),
  ADD KEY `DNI_2` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
