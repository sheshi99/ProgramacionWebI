-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2025 a las 03:49:41
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
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `correo`, `telefono`) VALUES
(1, 'Seidy', 'Alanis', 'seidy@gmail.com', '24609897'),
(2, 'Alexander', 'Peña ', 'apena@gmail.com', '65090234'),
(3, 'Juana', 'Castro', 'jcastro@gmail.com', '24095674'),
(4, 'Pedro', 'Mena', 'pedro@gmail.com', '24095674'),
(5, 'Ana', 'Martinez', 'martinez@gmail.com', '24095674'),
(6, 'Natanael', 'Alanis ', 'natanael@gmail.com', '67560986'),
(8, 'Alberto', 'Gomez', 'gomez@gmail.com', '2904859'),
(9, 'Lucas', 'Nuñez', 'lucas@gmail.com', '87972345'),
(11, 'Daniel', 'Artavia', 'artavia@gmail.com', '7890654'),
(12, 'Daniela', 'Robleto', 'robleto@gmail.com', '790819'),
(13, 'Johana', 'Gonzalez', 'johana@gmail.com', '90320987'),
(14, 'Lucas', 'Barquero', 'barquero@gmail.com', '91309287'),
(15, 'Anabel', 'Gomez', 'anabel@gmail.com', '9890123'),
(16, 'Cecilia', 'Campos', 'ccampos@gmail.com', '68901834'),
(17, 'Luisa', 'Morales', 'morales@gmail.com', '78690203'),
(18, 'Miguel', 'Mora', 'miguel@gmail.com', '56920202'),
(19, 'Jonathan ', 'Peña', 'pjonathan@gmail.com', '98897912'),
(20, 'Freddy', 'Salas', 'salas@gmail.com', '80919083'),
(21, 'Elena', 'Moya', 'moya@gmail.com', '89898296');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
