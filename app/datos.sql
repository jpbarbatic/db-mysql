-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2025 a las 18:53:36
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Ropa'),
(2, 'Accesorios'),
(3, 'Calzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `codigo_barras` varchar(20) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `codigo_barras`, `categoria_id`, `cantidad`) VALUES
(1, 'Camiseta de algodón blanca', 10.99, '1234567890123', 1, 100),
(2, 'Jeans de mezclilla azul', 15.49, '1234567890124', 2, 50),
(3, 'Zapatos deportivos Running', 20.00, '1234567890125', 3, 150),
(4, 'Sombrero de paja', 5.75, '1234567890126', 1, 200),
(5, 'Chaqueta de cuero negra', 25.99, '1234567890127', 2, 30),
(6, 'Reloj de pulsera digital', 18.00, '1234567890128', 3, 80),
(7, 'Pantalones cortos de verano', 9.99, '1234567890129', 1, 120),
(8, 'Gafas de sol polarizadas', 22.49, '1234567890130', 2, 60),
(9, 'Sandalias de playa', 8.99, '1234567890131', 3, 90),
(10, 'Mochila de viaje', 30.00, '1234567890132', 1, 25),
(11, 'Bolso de mano de cuero', 17.50, '1234567890133', 2, 40),
(12, 'Cinturón de tela con hebilla', 12.75, '1234567890134', 3, 110),
(13, 'Camiseta de deporte', 16.00, '1234567890135', 1, 55),
(14, 'Saco de lana gris', 35.99, '1234567890136', 2, 35),
(15, 'Pantalones de vestir', 24.99, '1234567890137', 3, 45),
(16, 'Calcetines de algodón', 8.00, '1234567890138', 1, 200),
(17, 'Chaqueta impermeable para lluv', 19.99, '1234567890139', 2, 60),
(18, 'Guantes de lana', 14.50, '1234567890140', 3, 90),
(19, 'Bufanda de lana', 27.00, '1234567890141', 1, 80),
(20, 'Billetera de cuero', 12.50, '1234567890142', 2, 150),
(21, 'Pañuelo de seda', 10.00, '1234567890143', 3, 130),
(22, 'Sombrero de invierno', 33.99, '1234567890144', 1, 40),
(23, 'Cartera de mano', 11.49, '1234567890145', 2, 90),
(24, 'Zapatos formales de cuero', 18.99, '1234567890146', 3, 70),
(25, 'Bolso de viaje', 21.00, '1234567890147', 1, 60),
(26, 'Botines de cuero', 28.00, '1234567890148', 2, 50),
(27, 'Zapatillas deportivas', 17.20, '1234567890149', 3, 110),
(28, 'Camisa de manga larga', 13.99, '1234567890150', 1, 80),
(29, 'Zapatos de tacón alto', 23.50, '1234567890151', 2, 40),
(30, 'Saco de invierno con capucha', 25.75, '1234567890152', 3, 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `nombre_completo`, `email`, `telefono`, `password`) VALUES
(22, 'monica', 'Mónica Navarro', 'monica.navarro@example.com', '5555672', 'password22'),
(23, 'ignacio', 'Ignacio Delgado', 'ignacio.delgado@example.com', '5559016', 'password23'),
(24, 'laura', 'Laura Aguilar', 'laura.aguilar@example.com', '5553460', 'password24'),
(25, 'andres', 'Andrés Serrano', 'andres.serrano@example.com', '5557894', 'password25'),
(26, 'patricia', 'Patricia Cortés', 'patricia.cortes@example.com', '5551239', 'password26'),
(27, 'esteban', 'Esteban Figueroa', 'esteban.figueroa@example.com', '5555673', 'password27'),
(28, 'natalia', 'Natalia Carrillo', 'natalia.carrillo@example.com', '5559017', 'password28'),
(29, 'ricardo', 'Ricardo Paredes', 'ricardo.paredes@example.com', '5553461', 'password29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
