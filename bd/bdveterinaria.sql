-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-12-2019 a las 19:00:34
-- Versión del servidor: 5.6.44-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdveterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `nomcliente` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appcliente` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechacita` date NOT NULL,
  `horacita` time NOT NULL,
  `tipomascota` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nommascota` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dates`
--

INSERT INTO `dates` (`id`, `nomcliente`, `appcliente`, `fechacita`, `horacita`, `tipomascota`, `nommascota`, `observacion`, `created_at`, `updated_at`) VALUES
(3, 'Jerry', 'Camarena', '2020-02-20', '18:00:00', 'Gato', 'Garfield', 'Come mucho', '2019-12-02 04:35:39', '2019-12-02 04:35:39'),
(4, 'Jerry', 'Camarena', '2019-12-25', '04:00:00', 'Perro', 'Bola', 'Prueba de descripción', '2019-12-02 04:39:36', '2019-12-02 04:39:36'),
(5, 'Juan', 'Quiroz', '2020-09-09', '09:00:00', 'Cerdo', 'Mágico', 'Muestra de error', '2019-12-02 04:45:15', '2019-12-02 04:45:15'),
(6, 'Juan Manuel', 'Quiroz Perez', '2020-02-20', '09:00:00', 'Perro', 'Bola', 'Muestra de error', '2019-12-02 04:56:41', '2019-12-02 04:56:41'),
(7, 'Jerry', 'Camarena', '2019-12-03', '21:00:00', 'Perro', 'Balto', 'Prueba', '2019-12-03 07:07:36', '2019-12-03 07:07:36'),
(8, 'Jerry', 'Camarena', '2019-12-20', '21:00:00', 'Perro', 'Balto', 'Muestra de error', '2019-12-03 08:09:21', '2019-12-03 08:09:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_11_25_204941_create_products_table', 1),
(8, '2019_11_25_222502_create_dates_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISHED','DRAFT') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `file`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bozal Modelo 1', 'bozal.jpg', '50', 'PUBLISHED', '2019-11-25 21:06:41', '2019-11-26 02:28:43'),
(2, 'Bozal - Modelo 2', '1574716905bozal2.jpg', '70', 'PUBLISHED', '2019-11-26 02:21:45', '2019-11-26 02:28:35'),
(4, 'Bozal - Modelo 3', '1574717438bozal3.jpg', '50', 'PUBLISHED', '2019-11-26 02:30:38', '2019-11-26 02:30:38'),
(5, 'Correa - Modelo 1', '1574717461correa.jpg', '25', 'PUBLISHED', '2019-11-26 02:31:01', '2019-11-26 02:31:01'),
(6, 'Correa - Modelo 2', '1574720516correa1.jpg', '30', 'PUBLISHED', '2019-11-26 03:21:56', '2019-12-03 08:10:35'),
(7, 'Correo 2', '1575336408correa2.jpg', '40', 'DRAFT', '2019-12-03 08:26:48', '2019-12-03 08:26:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jerry Camarena', 'jerrynba26@gmail.com', NULL, '$2y$10$ulGVM1TnFPBvoT9dsA8LTeVMorVDE.XiGeMHRh7M6nwll5Oec/eEK', NULL, '2019-11-26 03:08:03', '2019-11-26 03:08:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
