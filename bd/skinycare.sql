-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2023 a las 04:06:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skinycare`
--
CREATE DATABASE IF NOT EXISTS `skinycare` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `skinycare`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_servicio_tratamientos`
--

CREATE TABLE `detalle_servicio_tratamientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sexo` char(255) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `servicios_id` bigint(20) UNSIGNED NOT NULL,
  `tratamientos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_servicio_tratamientos`
--

INSERT INTO `detalle_servicio_tratamientos` (`id`, `sexo`, `total`, `servicios_id`, `tratamientos_id`, `created_at`, `updated_at`) VALUES
(1, 'F', 0, 1, 1, NULL, NULL),
(2, 'M', 0, 1, 3, NULL, NULL),
(3, 'M', 0, 2, 4, NULL, NULL),
(4, 'F', 0, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(64, '2014_10_12_000000_create_users_table', 1),
(65, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(66, '2019_08_19_000000_create_failed_jobs_table', 1),
(67, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(68, '2023_06_03_055523_create_servicios_table', 1),
(69, '2023_06_03_062423_create_zonas_table', 1),
(70, '2023_06_03_173603_create_tratamientos_table', 1),
(71, '2023_06_03_204427_create_detalle_servicio_tratamientos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `tipo`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Fotodepilación', 1, 1, NULL, NULL),
(2, 'Fototerapia', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `numero_sesiones` int(11) NOT NULL,
  `precio_oferta` int(11) NOT NULL DEFAULT 0,
  `precio_normal` int(11) NOT NULL DEFAULT 0,
  `imagen` varchar(255) NOT NULL,
  `zonas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `nombre`, `numero_sesiones`, `precio_oferta`, `precio_normal`, `imagen`, `zonas_id`, `created_at`, `updated_at`) VALUES
(1, 'PACK FOTODEPILACIÓN F5', 6, 394800, 0, 'img', 1, NULL, NULL),
(3, 'PACK FOTODEPILACIÓN F5', 8, 526400, 752000, 'img', 1, NULL, NULL),
(4, 'PACK REJUVENECIMIENTO', 3, 54000, 0, 'img', 10, NULL, NULL),
(5, 'PACK REJUVENECIMIENTO', 4, 68000, 0, 'img', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zona_corporal` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `zona_corporal`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Piernas + Rebaje + Axilas + Brazos + Bozo\r\n', 1, NULL, NULL),
(2, 'Rostro Completo', 1, NULL, NULL),
(3, 'Axilas', 1, NULL, NULL),
(4, 'Brazos Completos', 1, NULL, NULL),
(5, 'Espalda Completa', 1, NULL, NULL),
(6, 'Piernas Completas', 1, NULL, NULL),
(7, 'Glúteos', 1, NULL, NULL),
(8, 'Rebaje Full', 1, NULL, NULL),
(9, 'Abdomen', 1, NULL, NULL),
(10, '1 Zonas XS ', 1, NULL, NULL),
(11, 'Piernas + Rebaje + Espalda + Axilas+ Pecho o Abdomen\r\n', 1, NULL, NULL),
(12, 'Barba ', 1, NULL, NULL),
(13, 'Cuello ', 1, NULL, NULL),
(14, 'Zona Lumbar', 1, NULL, NULL),
(15, 'Rebaje ', 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_servicio_tratamientos`
--
ALTER TABLE `detalle_servicio_tratamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_servicio_tratamientos_servicios_id_foreign` (`servicios_id`),
  ADD KEY `detalle_servicio_tratamientos_tratamientos_id_foreign` (`tratamientos_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tratamientos_zonas_id_foreign` (`zonas_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_servicio_tratamientos`
--
ALTER TABLE `detalle_servicio_tratamientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_servicio_tratamientos`
--
ALTER TABLE `detalle_servicio_tratamientos`
  ADD CONSTRAINT `detalle_servicio_tratamientos_servicios_id_foreign` FOREIGN KEY (`servicios_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_servicio_tratamientos_tratamientos_id_foreign` FOREIGN KEY (`tratamientos_id`) REFERENCES `tratamientos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD CONSTRAINT `tratamientos_zonas_id_foreign` FOREIGN KEY (`zonas_id`) REFERENCES `zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
