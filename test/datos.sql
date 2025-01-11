
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
(1, 'juan', 'Juan Pérez', 'juan.perez@example.com', '5551234', 'password1'),
(2, 'maria', 'María García', 'maria.garcia@example.com', '5555678', 'password2'),
(3, 'carlos', 'Carlos Sánchez', 'carlos.sanchez@example.com', '5559012', 'password3'),
(4, 'ana', 'Ana Martínez', 'ana.martinez@example.com', '5553456', 'password4'),
(5, 'luis', 'Luis Fernández', 'luis.fernandez@example.com', '5557890', 'password5'),
(6, 'paula', 'Paula López', 'paula.lopez@example.com', '5551235', 'password6'),
(7, 'diego', 'Diego Gómez', 'diego.gomez@example.com', '5555679', 'password7'),
(8, 'sofia', 'Sofía Ruiz', 'sofia.ruiz@example.com', '5559013', 'password8'),
(9, 'adriana', 'Adriana Torres', 'adriana.torres@example.com', '5553457', 'password9'),
(10, 'fernando', 'Fernando Vargas', 'fernando.vargas@example.com', '5557891', 'password10'),
(11, 'alejandro', 'Alejandro Morales', 'alejandro.morales@example.com', '5551236', 'password11'),
(12, 'veronica', 'Verónica Rojas', 'veronica.rojas@example.com', '5555670', 'password12'),
(13, 'sergio', 'Sergio Castro', 'sergio.castro@example.com', '5559014', 'password13'),
(14, 'isabel', 'Isabel Mendoza', 'isabel.mendoza@example.com', '5553458', 'password14'),
(15, 'javier', 'Javier Herrera', 'javier.herrera@example.com', '5557892', 'password15'),
(16, 'valeria', 'Valeria Ortiz', 'valeria.ortiz@example.com', '5551237', 'password16'),
(17, 'roberto', 'Roberto Ramos', 'roberto.ramos@example.com', '5555671', 'password17'),
(18, 'carolina', 'Carolina Silva', 'carolina.silva@example.com', '5559015', 'password18'),
(19, 'miguel', 'Miguel Peña', 'miguel.pena@example.com', '5553459', 'password19'),
(20, 'camila', 'Camila Chávez', 'camila.chavez@example.com', '5557893', 'password20'),
(21, 'victor', 'Víctor Castillo', 'victor.castillo@example.com', '5551238', 'password21'),
(22, 'monica', 'Mónica Navarro', 'monica.navarro@example.com', '5555672', 'password22'),
(23, 'ignacio', 'Ignacio Delgado', 'ignacio.delgado@example.com', '5559016', 'password23'),
(24, 'laura', 'Laura Aguilar', 'laura.aguilar@example.com', '5553460', 'password24'),
(25, 'andres', 'Andrés Serrano', 'andres.serrano@example.com', '5557894', 'password25'),
(26, 'patricia', 'Patricia Cortés', 'patricia.cortes@example.com', '5551239', 'password26'),
(27, 'esteban', 'Esteban Figueroa', 'esteban.figueroa@example.com', '5555673', 'password27'),
(28, 'natalia', 'Natalia Carrillo', 'natalia.carrillo@example.com', '5559017', 'password28'),
(29, 'ricardo', 'Ricardo Paredes', 'ricardo.paredes@example.com', '5553461', 'password29'),
(30, 'juan', 'Juan Pérez', 'juan.perez@example.com', '5551234', 'password1'),
(43, 'estebanc', 'Esteban Coesta Ocupado', 'calimero@gmail.com', NULL, ''),
(44, 'estebanc', 'Esteban Coesta Ocupado', 'calimero@gmail.com', NULL, ''),
(45, 'estebanc', 'Esteban Coesta Ocupado', 'calimero@gmail.com', NULL, ''),
(46, 'estebanc', 'Esteban Coesta Ocupado', 'calimero@gmail.com', NULL, ''),
(47, 'estebanc', 'Esteban Coesta Ocupado', 'calimero@gmail.com', NULL, ''),
(48, 'estebanc', 'Esteban Coesta Ocupado', 'estebanc@gmail.com', NULL, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;
