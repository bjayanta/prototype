-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 01:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prototype`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslogs`
--

CREATE TABLE `accesslogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genus` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accesslogs`
--

INSERT INTO `accesslogs` (`id`, `user`, `ip`, `genus`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', 'admin', 'out', '2019-04-03 05:28:35', '2019-04-03 05:49:59'),
(2, 10, '::1', 'web', 'out', '2019-04-03 05:46:55', '2019-04-03 05:47:07'),
(3, 1, '::1', 'admin', 'in', '2019-04-03 05:50:09', '2019-04-03 05:50:09'),
(4, 10, '192.168.0.77', 'web', 'out', '2019-04-03 05:56:18', '2019-04-03 05:56:59'),
(5, 1, '::1', 'web', 'out', '2019-09-02 07:42:03', '2019-09-02 07:53:21'),
(6, 1, '::1', 'web', 'out', '2019-09-02 08:19:14', '2019-09-02 08:20:18'),
(7, 11, '::1', 'web', 'in', '2019-09-02 08:24:56', '2019-09-02 08:24:56'),
(8, 10, '::1', 'web', 'out', '2019-09-02 08:58:04', '2019-09-02 08:58:08'),
(9, 11, '::1', 'web', 'out', '2019-09-02 09:06:38', '2019-09-02 09:06:42'),
(10, 5, '::1', 'admin', 'out', '2019-09-02 09:27:03', '2019-09-02 09:41:38'),
(11, 1, '::1', 'admin', 'out', '2019-09-02 09:42:09', '2019-09-02 09:42:25'),
(12, 5, '::1', 'admin', 'out', '2019-09-02 09:42:43', '2019-09-02 09:45:17'),
(13, 11, '::1', 'web', 'out', '2019-09-02 10:00:02', '2019-09-02 10:00:05'),
(14, 10, '::1', 'web', 'out', '2019-09-02 10:01:13', '2019-09-02 10:02:36'),
(15, 11, '::1', 'web', 'out', '2019-09-02 10:03:20', '2019-09-02 10:03:23'),
(16, 11, '::1', 'web', 'out', '2019-09-02 10:12:23', '2019-09-02 10:12:26'),
(17, 11, '::1', 'web', 'out', '2019-09-02 10:12:33', '2019-09-02 10:12:37'),
(18, 11, '::1', 'web', 'out', '2019-09-02 10:14:53', '2019-09-02 10:14:56'),
(19, 11, '::1', 'web', 'in', '2019-09-02 10:15:23', '2019-09-02 10:15:23'),
(20, 11, '::1', 'web', 'in', '2019-09-02 10:31:46', '2019-09-02 10:31:46'),
(21, 11, '::1', 'web', 'in', '2019-09-02 10:54:15', '2019-09-02 10:54:15'),
(22, 11, '::1', 'web', 'in', '2019-09-02 10:54:43', '2019-09-02 10:54:43'),
(23, 11, '::1', 'web', 'in', '2019-09-02 10:54:47', '2019-09-02 10:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `adminmeta`
--

CREATE TABLE `adminmeta` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 or 1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jayanta Biswas', '01775219457', 'uis360.jayanta', 'uis360.jayanta@gmail.com', '$2y$10$/z7b8pAxERc9Jg0MD506xu4qWXW3tvzgt9FAjZ5k6SE3mOardojnC', 1, '2hNHidUaN2sqOiZEdPFrvAiGVyGzEXdRdAUBcw2aR8emhUJ1J7CCrTRmoVYJ', '2018-12-11 21:36:17', '2019-02-28 00:49:44'),
(2, 'Shahid Nawaz', '01761913331', 'uis360.msn', 'uis360.msn@gmail.com', '$2y$10$/z7b8pAxERc9Jg0MD506xu4qWXW3tvzgt9FAjZ5k6SE3mOardojnC', 1, 'ivgrOigAPIh4iV9HkwhaVXGINMuDthgSgQjyN67NHo1rlIqddVCEQBLiQzmm', '2018-12-11 21:36:17', '2019-02-28 00:52:13'),
(3, 'Imran Sajjad', '01716798094', 'uis360.imran', 'uis360.imran@gmail.com', '$2y$10$2j6.fes7CxsAx3/gnHMHKe/Rsgm6RN28mu4zOIgb.MGcn96NTfUOm', 1, 'WSO42EDcY2vlg39vCz96832HI3M5JHRMTOTWxjFW1v2qcWkC8OXwhWbVFAQC', '2019-01-04 15:17:02', '2019-02-28 00:52:21'),
(4, 'Maruf Hasan', '01735189237', 'uis360.maruf', 'uis360.maruf@gmail.com', '$2y$10$2j6.fes7CxsAx3/gnHMHKe/Rsgm6RN28mu4zOIgb.MGcn96NTfUOm', 1, 'yVeHdrnA9GVpJO6YRa0j0DWbYjpTOP4ee9z9TyM64nCbiHAf3Eqc18m6VQAl', '2019-01-04 15:17:02', '2019-02-28 00:52:28'),
(5, 'Shibbir Ahmed', '01766263681', 'shibbirweb', 'shibbirweb@gmail.com', '$2y$10$2j6.fes7CxsAx3/gnHMHKe/Rsgm6RN28mu4zOIgb.MGcn96NTfUOm', 1, NULL, '2019-09-02 09:25:56', '2019-09-02 09:42:22'),
(6, 'Suman Rajvhor', '01712179034', 'uis360.raj', 'uis360.raj@gmail.com', '$2y$10$2j6.fes7CxsAx3/gnHMHKe/Rsgm6RN28mu4zOIgb.MGcn96NTfUOm', 1, NULL, '2019-01-04 15:17:02', '2019-02-28 00:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`admin_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(6, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_01_102758_create_admins_table', 2),
(4, '2018_12_03_124721_create_permissions_table', 3),
(5, '2018_12_04_123752_create_roles_table', 4),
(6, '2016_06_01_000001_create_oauth_auth_codes_table', 5),
(7, '2016_06_01_000002_create_oauth_access_tokens_table', 5),
(8, '2016_06_01_000003_create_oauth_refresh_tokens_table', 5),
(9, '2016_06_01_000004_create_oauth_clients_table', 5),
(10, '2016_06_01_000005_create_oauth_personal_access_clients_table', 5),
(13, '2019_02_24_074218_create_appdatas_table', 6),
(14, '2019_04_03_112459_create_accesslogs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0115bacdce11650939f8aa8d7396d24797ba47b8083890e31cc9e4a49104012304b10e1526db5584', 9, 3, 'MyApp', '[]', 0, '2019-02-05 06:04:29', '2019-02-05 06:04:29', '2020-02-05 12:04:29'),
('0c2a65e0efd239c0028272d6424ba0dc195beef3575ac603253681c64b5e264abcb9f6ca767ca854', 6, 3, 'MyApp', '[]', 0, '2019-02-05 05:46:09', '2019-02-05 05:46:09', '2020-02-05 11:46:09'),
('1fd6e95bf895de153f0f3d0fea10c6bd0b9b1608c7cc7d947acdc523baa5f9e6fc3aee5655e1112e', 1, 3, 'MyApp', '[]', 0, '2019-02-05 21:31:07', '2019-02-05 21:31:07', '2020-02-06 03:31:07'),
('29252a2dd959ed584dc19787595ced9ef980c3efa0c5847695f6ec07c6f07d0482acf38a3bc7d1bf', 10, 3, 'MyApp', '[]', 0, '2019-02-13 23:01:02', '2019-02-13 23:01:02', '2020-02-14 05:01:02'),
('39c8fc72dfd115d065769d1c3b1b55a0b9f6c141058483c58ff6bbc7858c3a54eea961c822960634', 11, 5, 'MyApp', '[]', 0, '2019-09-02 10:54:47', '2019-09-02 10:54:47', '2020-09-02 16:54:47'),
('535d45f387cc266aecce0178c434df2624d797ae69d8882a033cdb148e323e3793ad7f38a6bee43d', 1, 3, 'MyApp', '[]', 0, '2019-02-05 04:56:14', '2019-02-05 04:56:14', '2020-02-05 10:56:14'),
('623dea669927c5d28fa70802941774e14431efe79bab2417e83a02250630edf1308b51cee224a4c1', 1, 3, 'Hello', '[]', 1, '2019-02-04 22:41:53', '2019-02-04 22:41:53', '2020-02-05 04:41:53'),
('66747530a56568d6187f3611d4a6813ba1fe471f03f14a7e2542bf1a6d296c45d61796d037ff8152', 11, 5, 'MyApp', '[]', 0, '2019-09-02 10:54:43', '2019-09-02 10:54:43', '2020-09-02 16:54:43'),
('6ac903aa47c04c8ad9886ba00fdfef230969397a56b352a4afd40ea4b7bbd06870fb1845c11dea48', 1, 3, 'MyApp', '[]', 0, '2019-02-13 23:04:35', '2019-02-13 23:04:35', '2020-02-14 05:04:35'),
('839e8778108add8700b51e3a74cbe7c6900a5e13d7b445d256bb1dac5df4444dfc8398f31a975432', 9, 3, 'MyApp', '[]', 0, '2019-02-05 06:01:10', '2019-02-05 06:01:10', '2020-02-05 12:01:10'),
('89b929ee63a5056170b41536ca82cc179a1278e09c15566932f6c4731eda653c1c71150e58cd1802', 5, 3, 'MyApp', '[]', 0, '2019-02-05 05:30:51', '2019-02-05 05:30:51', '2020-02-05 11:30:51'),
('8d043baec7c74fe019d0e2bf4ccc8b381711adca835a31946ca432b8617ebc61181ccc2377068c43', 2, 1, 'MyApp', '[]', 0, '2019-02-04 13:24:55', '2019-02-04 13:24:55', '2020-02-04 19:24:55'),
('8ef8b176bc542dca7925d3410e20bafac219eba297e1233482eeee98e28fd4322eba5fe529c2ff75', 3, 3, 'MyApp', '[]', 0, '2019-02-05 05:25:39', '2019-02-05 05:25:39', '2020-02-05 11:25:39'),
('bfff11cf777dec8cec0f1543ef810c7ca2f467c9cef0d4925d414280653e80f6b49f447b78d3386f', 11, 5, 'MyApp', '[]', 0, '2019-09-02 10:31:47', '2019-09-02 10:31:47', '2020-09-02 16:31:47'),
('cbc9ad9efe08b23b20898c022fb210c832d0599db2baee2a2ea554979b14c4213c6b8bdea3a2278a', 21, 5, 'MyApp', '[]', 0, '2019-09-02 10:48:14', '2019-09-02 10:48:14', '2020-09-02 16:48:14'),
('cdf7b6a5425222e422013134a1c8f9438a805c60d824d58d1dc879178bfc8b7ac4d06d0d51a11030', 11, 5, 'MyApp', '[]', 0, '2019-09-02 10:54:15', '2019-09-02 10:54:15', '2020-09-02 16:54:15'),
('f30fc259dd5fc8e3f8364b37de3701ad2c26a30a358dcb1f44a61ed328a5eeeb178d704cfb6c6270', 2, 1, 'Hello', '[]', 0, '2019-02-04 13:19:03', '2019-02-04 13:19:03', '2020-02-04 19:19:03'),
('f8ea74596e49ce241f61abe49a2d2db96d8cd3ae75901d5babcc21c27987a5813d13ad8cf1ef81ec', 1, 3, 'MyApp', '[]', 0, '2019-02-05 21:08:51', '2019-02-05 21:08:51', '2020-02-06 03:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Prototype Personal Access Client', 'obqYA1LXthawcmMUP5XYivAuEWfzypXLvF3nC0NU', 'http://localhost', 1, 0, 0, '2019-02-04 09:02:21', '2019-02-04 09:02:21'),
(2, NULL, 'Prototype Password Grant Client', 'VlS9vcdQOHSSto6n416ZM1qVzZJnBk1XcKSWivsb', 'http://localhost', 0, 1, 0, '2019-02-04 09:02:21', '2019-02-04 09:02:21'),
(3, NULL, 'Prototype Personal Access Client', '3JHjYTM9HeJwbrjfiRqwAus14IUHGR4oh36f5drx', 'http://localhost', 1, 0, 0, '2019-02-04 22:41:38', '2019-02-04 22:41:38'),
(4, NULL, 'Prototype Password Grant Client', 'FeGuwPlvgCYUd8rL6e6lnZtzNd8kZTKFitD5eB5e', 'http://localhost', 0, 1, 0, '2019-02-04 22:41:38', '2019-02-04 22:41:38'),
(5, NULL, 'Prototype Personal Access Client', 'UhvXAPC9na8jBwezGqj9FczR2Ikl8e4IFGrAkJ4y', 'http://localhost', 1, 0, 0, '2019-09-02 07:29:58', '2019-09-02 07:29:58'),
(6, NULL, 'Prototype Password Grant Client', '6Do7SD7TIHvfZHvBy77jRnchUhQg22Q43LCXD61e', 'http://localhost', 0, 1, 0, '2019-09-02 07:30:06', '2019-09-02 07:30:06'),
(7, 11, 'Test', 'PZR9WCyeCJCO86tKY3KbbvF2OSFK2NQJegn1YBro', 'http://google.com', 0, 0, 0, '2019-09-02 10:59:09', '2019-09-02 10:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-02-04 09:02:21', '2019-02-04 09:02:21'),
(2, 3, '2019-02-04 22:41:38', '2019-02-04 22:41:38'),
(3, 5, '2019-09-02 07:30:04', '2019-09-02 07:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `menu`, `description`) VALUES
(5, 'Account create', 'account-create', 'account', NULL),
(6, 'Account update', 'account-update', 'account', NULL),
(7, 'Account delete', 'account-delete', 'account', NULL),
(8, 'Account view', 'account-view', 'account', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 5),
(3, 6),
(3, 8),
(1, 8),
(1, 5),
(1, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'superadmin/administrator/editor/author/contributor/subscriber',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`) VALUES
(1, 'Superadmin', 'superadmin', 'superadmin'),
(2, 'Administrator', 'administrator', 'Administrator'),
(3, 'Editor', 'editor', 'Editor'),
(4, 'Author', 'author', 'author'),
(5, 'Contributor', 'contributor', 'contributor');

-- --------------------------------------------------------

--
-- Table structure for table `usermeta`
--

CREATE TABLE `usermeta` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'general' COMMENT 'general/special/employer',
  `activation_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 or 1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `email`, `email_verified_at`, `password`, `account_type`, `activation_token`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jayanta Biswas', '01775219457', 'bjayanta.neo', 'bjayanta.neo@gmail.com', NULL, '$2y$10$/z7b8pAxERc9Jg0MD506xu4qWXW3tvzgt9FAjZ5k6SE3mOardojnC', 'general', NULL, 1, 'R9ECUxC2Lvov3BwZdDlt2bRjCVWTAKn40ebDhYbIPytj96KUgYvWEdRVhQUh', '2018-12-11 21:36:17', '2018-12-11 21:36:34'),
(2, 'Robin Biswas', '01792017966', 'brobin.neo', 'brobin.neo@gmail.com', NULL, '$2y$10$OkG3kpyZohg9tox4oiHAIu4f7egpQ0PtqvtND6Sf3A26x.gJSt/dO', 'general', NULL, 1, 'LuB2kOYrG5AvAypjVHxKIcZ1AnOVi9RyHBNe4jkhwplQB6djMSa86Xdtice8', '2019-02-04 13:17:33', '2019-02-04 13:17:33'),
(9, 'Maruf Hasan', '01735189237', 'emarufhasan', 'emarufhasan@gmail.com', NULL, '$2y$10$TvVkDU3WChvQePMF3/3RCe/CXvZNLUgXt1Iqj9EADKAe0AuJpg4Y6', 'general', NULL, 1, 'oW7FexapaiDChKd9gaBvgQWvFdFcR2fQ9sPDGstzu6THrnKCXPDW7Gi0GhaG', '2019-02-05 06:01:10', '2019-02-05 06:01:46'),
(10, 'Jayanta Biswas', '01903402828', 'uis360.jayanta', 'uis360.jayanta@gmail.com', NULL, '$2y$10$0nRxJVeS8Sxe1LittraCyOMTh8YPqktzh0cLaYkEh5czFdSQnAJxG', 'general', NULL, 1, '1H4fujI7CbGJEWOpwDx1PiXZWAAmKfPEVMpt8xAhcWPiK8bl8xgvrBB1hBMy', '2019-02-13 23:01:01', '2019-02-13 23:02:09'),
(11, 'Shibbir Ahmed', '01766263681', 'shibbirweb', 'shibbirweb@gmail.com', NULL, '$2y$10$.eAdi72I6Rn7lE08a2fr.e3UinzAzo64N5AaROyImCKIeH2Wgq2SC', 'general', NULL, 1, NULL, '2019-09-02 08:08:18', '2019-09-02 08:08:18'),
(21, 'Shibbir Ahmed', '1596654', 'shibbir', 'shibbir@gmail.com', NULL, '$2y$10$btk5Qy6Qrik35afRLgfeEejYVr.WbHH/OFsyqxMB70F9JwKkE0cEC', 'general', 'Rl0fEeeYBmgvOsL98lsX2qhOgTjW0IMWbY1WLFBM', 0, NULL, '2019-09-02 10:48:13', '2019-09-02 10:48:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslogs`
--
ALTER TABLE `accesslogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmeta`
--
ALTER TABLE `adminmeta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminmeta_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`),
  ADD KEY `admin_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermeta`
--
ALTER TABLE `usermeta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usermeta_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslogs`
--
ALTER TABLE `accesslogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `adminmeta`
--
ALTER TABLE `adminmeta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usermeta`
--
ALTER TABLE `usermeta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminmeta`
--
ALTER TABLE `adminmeta`
  ADD CONSTRAINT `adminmeta_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usermeta`
--
ALTER TABLE `usermeta`
  ADD CONSTRAINT `usermeta_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
