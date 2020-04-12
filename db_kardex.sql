-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-03-2020 a las 00:03:31
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_kardex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2020_03_09_195036_create_tb_datos_usuarios', 1),
(19, '2020_03_09_195123_create_tb_periodos', 1),
(20, '2020_03_09_195223_create_tb_grados', 1),
(21, '2020_03_09_195322_create_tb_materias', 1),
(22, '2020_03_09_201256_create_tb_matriculas', 1),
(23, '2020_03_09_201314_create_tb_calificaciones', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_calificaciones`
--

DROP TABLE IF EXISTS `tb_calificaciones`;
CREATE TABLE IF NOT EXISTS `tb_calificaciones` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricula_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `parcial1` decimal(8,2) DEFAULT NULL,
  `parcial2` decimal(8,2) DEFAULT NULL,
  `supletorio` decimal(8,2) DEFAULT NULL,
  `promedio` decimal(8,2) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_calificaciones_matricula_id_foreign` (`matricula_id`),
  KEY `tb_calificaciones_usuario_id_foreign` (`usuario_id`),
  KEY `tb_calificaciones_periodo_id_foreign` (`periodo_id`),
  KEY `tb_calificaciones_grado_id_foreign` (`grado_id`),
  KEY `tb_calificaciones_materia_id_foreign` (`materia_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_datos_usuarios`
--

DROP TABLE IF EXISTS `tb_datos_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_datos_usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fnacimiento` date DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuidad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genero` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matriculado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_datos_usuarios_usuario_id_foreign` (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_datos_usuarios`
--

INSERT INTO `tb_datos_usuarios` (`id`, `usuario_id`, `nombre`, `apellido`, `cedula`, `fnacimiento`, `direccion`, `cuidad`, `genero`, `titulo`, `telefono`, `foto`, `email`, `password`, `matriculado`, `created_at`, `updated_at`) VALUES
(1, 5, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'foto1.jpg', '', '', NULL, NULL, NULL),
(2, 6, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'foto2.jpg', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_grados`
--

DROP TABLE IF EXISTS `tb_grados`;
CREATE TABLE IF NOT EXISTS `tb_grados` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periodo_id` int(11) NOT NULL,
  `grado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_registros` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_grados_periodo_id_foreign` (`periodo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_materias`
--

DROP TABLE IF EXISTS `tb_materias`;
CREATE TABLE IF NOT EXISTS `tb_materias` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `grado_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_materias_grado_id_foreign` (`grado_id`),
  KEY `tb_materias_periodo_id_foreign` (`periodo_id`),
  KEY `tb_materias_usuario_id_foreign` (`usuario_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_matriculas`
--

DROP TABLE IF EXISTS `tb_matriculas`;
CREATE TABLE IF NOT EXISTS `tb_matriculas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `materia_id` int(11) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_matriculas_materia_id_foreign` (`materia_id`),
  KEY `tb_matriculas_grado_id_foreign` (`grado_id`),
  KEY `tb_matriculas_periodo_id_foreign` (`periodo_id`),
  KEY `tb_matriculas_usuario_id_foreign` (`usuario_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_periodos`
--

DROP TABLE IF EXISTS `tb_periodos`;
CREATE TABLE IF NOT EXISTS `tb_periodos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `clave_periodo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f-inicio` date DEFAULT NULL,
  `f-final` date DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activacion` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_usuario`, `status`, `activacion`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rubén Maldonado Pérez', 'desarrollo@kardex.com', NULL, '$2y$10$iC4dB3jHc075FK6a99GwbuT35lzXKSBIagxfjpUv8Y0tBsszlCWQW', 'admin', 'activo', 1, NULL, '2020-03-10 02:48:20', '2020-03-12 04:03:56'),
(2, 'Jose Perez Perez', 'secretario1@kardex.com', NULL, '$2y$10$6qla5VePJlqx0h73pSVfYed0usSrXdBGNRWmqA.WYY0R7mBUl.K2e', 'administrativo', 'activo', 1, NULL, '2020-03-12 00:37:38', '2020-03-12 03:00:56'),
(3, 'Juan jose dominguez', 'prof1@kardex.com', NULL, '$2y$10$STyA9a0TqauxGGUQU.viy.SrSkcfYFhHXu8XxdpNLN7Scdsy/wpRW', 'profesor', 'activo', NULL, NULL, '2020-03-12 00:39:20', '2020-03-12 03:04:01'),
(4, 'Mariana Lopez', 'prof2@kardex.com', NULL, '$2y$10$2Fg9wfUT7sCuA.0u4Lf9COE/Ig3z95Ygdq0c8mt65YKH4aYU8aWkS', 'profesor', 'activo', 1, NULL, '2020-03-12 00:40:02', '2020-03-12 01:09:20'),
(5, 'Roberto Salinas cruz', 'dir-general@kardex.com', NULL, '$2y$10$TtFsZfMrWglsqqfhbApiz.znfqhjFgn3kjOrF9mnn58pJldh8SPRq', 'alumno', 'activo', 0, NULL, '2020-03-12 01:14:16', '2020-03-12 03:04:13'),
(6, 'María Magdalena Torres', 'gerente@kardex.com', NULL, '$2y$10$y7867Um2naIbOEQWiJJo8ejb.720764DEEkkSBQRq.ivRkaJ717ma', 'alumno', 'activo', 0, NULL, '2020-03-12 03:02:13', '2020-03-12 03:02:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
