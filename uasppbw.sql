-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 03:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasppbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_16_052023_create_tbl_karyawan_table', 1),
(5, '2021_06_17_045211_create_tbl_suppliers_table', 1),
(6, '2021_06_28_011911_create_tbl_oppo_table', 1),
(7, '2021_06_28_025232_create_tbl_vivo_table', 1),
(8, '2021_07_06_145733_create_tbl_samsung_table', 1),
(9, '2021_07_08_033355_create_permission_tables', 1),
(10, '2021_07_09_133611_create_tbl_iphone_table', 1),
(11, '2021_07_09_142559_create_tbl_realme_table', 1),
(12, '2021_07_10_030659_create_tbl_readmi_table', 1),
(13, '2021_07_10_040243_create_tbl_poco_table', 1),
(14, '2021_07_10_042021_create_tbl_huawei_table', 1),
(15, '2021_07_20_153505_add_column_foto_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'karyawan_show', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(2, 'karyawan_create', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(3, 'karyawan_update', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(4, 'karyawan_delete', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(5, 'suppliers_show', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(6, 'suppliers_create', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(7, 'suppliers_update', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(8, 'suppliers_delete', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(9, 'barang_show', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(10, 'barang_create', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(11, 'barang_update', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(12, 'barang_delete', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(13, 'role_show', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(14, 'role_create', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(15, 'role_update', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(16, 'role_delete', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(17, 'user_show', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(18, 'user_create', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(19, 'user_update', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39'),
(20, 'user_delete', 'web', '2021-07-20 08:42:39', '2021-07-20 08:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'web', '2021-07-20 08:42:40', '2021-07-20 08:42:40'),
(2, 'karyawan', 'web', '2021-07-20 08:42:40', '2021-07-20 08:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_huawei`
--

CREATE TABLE `tbl_huawei` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_huawei`
--

INSERT INTO `tbl_huawei` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'huawei', '1626965580huawei-mate40-pro.jpg', 'Rp. 5.000.000', '20', '2021-07-20 08:42:48', '2021-07-22 07:53:00'),
(2, '123_B', 'Huawei', '1626966622huawei-mate40-pro.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:10:22', '2021-07-22 08:10:22'),
(3, '123_C', 'Huawei', '1626966653huawei-mate40-pro.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:10:53', '2021-07-22 08:10:53'),
(4, '123_D', 'Huawei', '1626966669huawei-mate40-pro.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:11:09', '2021-07-22 08:11:09'),
(5, '123_E', 'Huawei', '1626966685huawei-mate40-pro.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:11:25', '2021-07-22 08:11:25'),
(6, '123_F', 'Huawei', '1626966702huawei-mate40-pro.jpg', 'Rp. 5.000.000', '22', '2021-07-22 08:11:42', '2021-07-22 08:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iphone`
--

CREATE TABLE `tbl_iphone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_iphone`
--

INSERT INTO `tbl_iphone` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(2, '123B', 'Iphone', '1626965907apple-iphone-12-pro-max-1.jpg', 'Rp. 5.000.000', '15', '2021-07-22 07:58:27', '2021-07-22 07:58:27'),
(3, '123_C', 'Iphone', '1626965935apple-iphone-12-pro-max-1.jpg', 'Rp. 5.000.000', '15', '2021-07-22 07:58:55', '2021-07-22 07:58:55'),
(4, '123_D', 'Iphone', '1626965958apple-iphone-12-pro-max-1.jpg', 'Rp. 5.000.000', '12', '2021-07-22 07:59:18', '2021-07-22 07:59:18'),
(5, '123_E', 'Iphone', '1626965978apple-iphone-12-pro-max-1.jpg', 'Rp. 5.000.000', '15', '2021-07-22 07:59:38', '2021-07-22 07:59:38'),
(6, '123_F', 'Iphone', '1626965994apple-iphone-12-pro-max-1.jpg', 'Rp. 5.000.000', '15', '2021-07-22 07:59:54', '2021-07-22 07:59:54'),
(7, '123_B', 'Iphone', '1626968427apple-iphone-12-pro-max-1.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:40:27', '2021-07-22 08:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `nip`, `nama`, `alamat`, `no_hp`, `foto`, `created_at`, `updated_at`) VALUES
(1, '123', 'ahmad', 'Surabaya', '09876', '1627046642avatar5.png', '2021-07-20 08:42:47', '2021-07-23 06:24:02'),
(3, '3456', 'joko', 'gresik', '34567', '162696490217241-200.png', '2021-07-22 07:34:36', '2021-07-22 07:41:42'),
(4, '134', 'bambang', 'surabaya', '09875', '162696728917241-200.png', '2021-07-22 08:21:29', '2021-07-22 08:21:29'),
(5, '111', 'zaki', 'gresik', '09875', '162696736217241-200.png', '2021-07-22 08:22:42', '2021-07-22 08:22:42'),
(6, '4444', 'lala', 'surabaya', '09875', '162696739117241-200.png', '2021-07-22 08:23:11', '2021-07-22 08:23:11'),
(7, '651', 'aziz', 'gresik', '67311', '162696741117241-200.png', '2021-07-22 08:23:31', '2021-07-22 08:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oppo`
--

CREATE TABLE `tbl_oppo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_oppo`
--

INSERT INTO `tbl_oppo` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'oppo', '1626965447oppo-reno6-pro-5g.jpg', 'Rp. 5.000.000', '20', '2021-07-20 08:42:48', '2021-07-22 07:50:47'),
(2, '123B', 'oppo', '1626965690oppo-reno6-pro-5g.jpg', 'Rp. 5.000.000', '15', '2021-07-21 06:34:07', '2021-07-22 07:54:50'),
(3, '123_C', 'oppo', '1626966245oppo-reno6-pro-5g.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:04:05', '2021-07-22 08:04:05'),
(4, '123_E', 'oppo', '1626966282oppo-reno6-pro-5g.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:04:42', '2021-07-22 08:04:42'),
(5, '123_D', 'oppo', '1626966297oppo-reno6-pro-5g.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:04:57', '2021-07-22 08:04:57'),
(6, '123_F', 'oppo', '1626966315oppo-reno6-pro-5g.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:05:15', '2021-07-22 08:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poco`
--

CREATE TABLE `tbl_poco` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_poco`
--

INSERT INTO `tbl_poco` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'poco', '1626965613xiaomi-poco-x3-pro-.jpg', 'Rp. 5.000.000', '20', '2021-07-20 08:42:48', '2021-07-22 07:53:33'),
(2, '123_B', 'Poco', '1626966934xiaomi-poco-x3-pro-.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:15:34', '2021-07-22 08:15:34'),
(3, '123_C', 'Poco', '1626966962xiaomi-poco-x3-pro-.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:16:02', '2021-07-22 08:16:02'),
(4, '123_D', 'Poco', '1626966984xiaomi-poco-x3-pro-.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:16:24', '2021-07-22 08:16:24'),
(5, '123_F', 'Poco', '1626967003xiaomi-poco-x3-pro-.jpg', 'Rp. 5.000.000', '22', '2021-07-22 08:16:43', '2021-07-22 08:16:43'),
(6, '123_E', 'Poco', '1626967031xiaomi-poco-x3-pro-.jpg', 'Rp. 5.000.000', '22', '2021-07-22 08:17:11', '2021-07-22 08:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_readmi`
--

CREATE TABLE `tbl_readmi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_readmi`
--

INSERT INTO `tbl_readmi` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'redmi', '1626965599xiaomi-redmi-note10-pro.jpg', 'Rp. 5.000.000', '20', '2021-07-20 08:42:49', '2021-07-22 07:53:19'),
(2, '123_B', 'Redmi', '1626966807xiaomi-redmi-note10-pro.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:13:27', '2021-07-22 08:13:27'),
(3, '123_C', 'Redmi', '1626966836xiaomi-redmi-note10-pro.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:13:56', '2021-07-22 08:13:56'),
(4, '123_D', 'Redmi', '1626966863xiaomi-redmi-note10-pro.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:14:23', '2021-07-22 08:14:23'),
(5, '123_E', 'Redmi', '1626966883xiaomi-redmi-note10-pro.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:14:43', '2021-07-22 08:14:43'),
(6, '123_F', 'Redmi', '1626966906xiaomi-redmi-note10-pro.jpg', 'Rp. 5.000.000', '22', '2021-07-22 08:15:06', '2021-07-22 08:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_realme`
--

CREATE TABLE `tbl_realme` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_realme`
--

INSERT INTO `tbl_realme` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'realme', '1626965563realme-8-pro-ofic.jpg', 'Rp. 5.000.000', '20', '2021-07-20 08:42:49', '2021-07-22 07:52:43'),
(2, '123_B', 'Realme', '1626966494realme-8-pro-ofic.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:08:14', '2021-07-22 08:08:14'),
(3, '123_C', 'Realme', '1626966540realme-8-pro-ofic.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:09:00', '2021-07-22 08:09:00'),
(4, '123_D', 'Realme', '1626966559realme-8-pro-ofic.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:09:19', '2021-07-22 08:09:19'),
(5, '123_E', 'Realme', '1626966576realme-8-pro-ofic.jpg', 'Rp. 5.000.000', '22', '2021-07-22 08:09:36', '2021-07-22 08:09:36'),
(6, '123_F', 'Realme', '1626966591realme-8-pro-ofic.jpg', 'Rp. 5.000.000', '20', '2021-07-22 08:09:51', '2021-07-22 08:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_samsung`
--

CREATE TABLE `tbl_samsung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_samsung`
--

INSERT INTO `tbl_samsung` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'samsung', '1626965420samsung-galaxy-s21-ultra-5g-.jpg', 'Rp. 5.000.000', '20', '2021-07-20 08:42:49', '2021-07-22 07:50:20'),
(2, '123_B', 'Samsung', '1626966029samsung-galaxy-s21-ultra-5g-.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:00:29', '2021-07-22 08:00:29'),
(3, '123_C', 'Samsung', '1626966070samsung-galaxy-s21-ultra-5g-.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:01:10', '2021-07-22 08:01:10'),
(5, '123_D', 'Samsung', '1626966107samsung-galaxy-s21-ultra-5g-.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:01:47', '2021-07-22 08:01:47'),
(6, '123_E', 'Samsung', '1626966169samsung-galaxy-s21-ultra-5g-.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:02:49', '2021-07-22 08:02:49'),
(7, '123_F', 'Samsung', '1626966196samsung-galaxy-s21-ultra-5g-.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:03:16', '2021-07-22 08:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppliers`
--

CREATE TABLE `tbl_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_suppliers`
--

INSERT INTO `tbl_suppliers` (`id`, `kode`, `nama`, `barang`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'ahmad', 'Smartphone', 'Surabaya', '09876', '2021-07-20 08:42:48', '2021-07-20 08:42:48'),
(2, '123B', 'jaya', 'handphone vivo', 'surabaya', '67311', '2021-07-22 07:33:28', '2021-07-22 07:33:28'),
(3, '123_C', 'maju jaya', 'handphone realme', 'batam', '09875', '2021-07-22 08:18:08', '2021-07-22 08:18:08'),
(4, '123_D', 'jaya', 'handphone Iphone', 'surabaya', '34567', '2021-07-22 08:18:31', '2021-07-22 08:18:31'),
(5, '123_E', 'sumber jaya', 'handphone oppo', 'surabaya', '34567', '2021-07-22 08:19:09', '2021-07-22 08:19:09'),
(6, '123_F', 'maju', 'handphone samsung', 'batam', '09875', '2021-07-22 08:19:47', '2021-07-22 08:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vivo`
--

CREATE TABLE `tbl_vivo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_vivo`
--

INSERT INTO `tbl_vivo` (`id`, `kode`, `nama`, `foto`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, '123_A', 'vivo', '1626965480vivo-s10-pro.jpg', 'Rp. 5.000.000', '20', '2021-07-20 08:42:49', '2021-07-22 07:51:20'),
(2, '123_B', 'vivo', '1626966359vivo-s10-pro.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:05:59', '2021-07-22 08:05:59'),
(3, '123_C', 'vivo', '1626966383vivo-s10-pro.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:06:23', '2021-07-22 08:06:23'),
(4, '123_D', 'vivo', '1626966401vivo-s10-pro.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:06:41', '2021-07-22 08:06:41'),
(5, '123_E', 'vivo', '1626966430vivo-s10-pro.jpg', 'Rp. 5.000.000', '12', '2021-07-22 08:07:10', '2021-07-22 08:07:10'),
(6, '123_F', 'vivo', '1626966447vivo-s10-pro.jpg', 'Rp. 5.000.000', '15', '2021-07-22 08:07:27', '2021-07-22 08:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'owner', '/images/foto_profil/1626964641kisspng-user-profile-computer-icons-login-user-avatars-5b0d9430b12e35.6568935815276165607257.jpg', 'owner@gmail.com', '2021-07-20 08:42:39', '$2y$10$BF0CP7/am53FJma54XZAQ.qMzJ2teHqQZGTZMvYFhSwta6f26Us/2', 'DUjT5BBNDOpR0nwj7DxjmE00t1rqDXaDUxTlF5na4TyFNbcsOV2j0fRtniUm', '2021-07-20 08:42:39', '2021-07-22 07:37:21'),
(2, 'karyawan1', '/images/foto_profil/162696572417241-200.png', 'karyawan1@gmail.com', '2021-07-20 21:06:40', '$2y$10$sHuuxXXrH1dPq58uFTWQruOOoX.Ncc3u/RL56MG6FYtn6wFXmT73G', NULL, '2021-07-20 21:05:49', '2021-07-22 07:55:24'),
(3, 'karyawan2', '/images/foto_profil/162696583417241-200.png', 'karyawan2@gmail.com', '2021-07-21 06:51:30', '$2y$10$7Os60aC1W6cuLh5LuDojoeFoEV8oyVdEhsBg46Naj1VDL14DMvIj6', 'jqXL6dVmEZaalncpFpVSzi0o0F9O7td7dSHYsBX3hJnbvYIi6apXrjSA7Wir', '2021-07-21 06:50:54', '2021-07-22 07:57:14'),
(4, 'karyawan3', NULL, 'karyawan3@gmail.com', NULL, '$2y$10$adDlquAP1W4pwwgSwQ6fsOGVo.cyKqzn4C3KUAzKhdtF3PwbtI0Q2', NULL, '2021-07-22 19:08:35', '2021-07-22 19:08:35'),
(5, 'karyawan4', NULL, 'karyawan4@gmail.com', NULL, '$2y$10$nJIYta7jtbvDothhqjYMy.Tecu5Her4WOQPADvmC64CbNT1itYzSK', NULL, '2021-07-22 19:09:11', '2021-07-22 19:09:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tbl_huawei`
--
ALTER TABLE `tbl_huawei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_iphone`
--
ALTER TABLE `tbl_iphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_oppo`
--
ALTER TABLE `tbl_oppo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_poco`
--
ALTER TABLE `tbl_poco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_readmi`
--
ALTER TABLE `tbl_readmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_realme`
--
ALTER TABLE `tbl_realme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_samsung`
--
ALTER TABLE `tbl_samsung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vivo`
--
ALTER TABLE `tbl_vivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_huawei`
--
ALTER TABLE `tbl_huawei`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_iphone`
--
ALTER TABLE `tbl_iphone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_oppo`
--
ALTER TABLE `tbl_oppo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_poco`
--
ALTER TABLE `tbl_poco`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_readmi`
--
ALTER TABLE `tbl_readmi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_realme`
--
ALTER TABLE `tbl_realme`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_samsung`
--
ALTER TABLE `tbl_samsung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_vivo`
--
ALTER TABLE `tbl_vivo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
