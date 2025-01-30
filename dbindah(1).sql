-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2025 at 02:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbindah`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `daerah_id` int NOT NULL,
  `nama_daerah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ongkir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`daerah_id`, `nama_daerah`, `ongkir`) VALUES
(1, 'jakarta', 17000),
(2, 'bogor', 18000),
(3, 'bandungsoreang', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksis`
--

CREATE TABLE `detail_transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `id_transaksi` bigint UNSIGNED NOT NULL,
  `id_barang` bigint UNSIGNED NOT NULL,
  `daerah_id` int DEFAULT NULL,
  `qty` int NOT NULL,
  `price` bigint NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksis`
--

INSERT INTO `detail_transaksis` (`id`, `id_transaksi`, `id_barang`, `daerah_id`, `qty`, `price`, `status`, `created_at`, `updated_at`) VALUES
(33, 2025011915, 7, NULL, 1, 56000, 1, '2025-01-19 13:47:48', '2025-01-19 14:11:00'),
(34, 2025011916, 7, NULL, 1, 56000, 1, '2025-01-19 14:15:36', '2025-01-19 14:16:46'),
(35, 2025012917, 6, NULL, 1, 300000, 0, '2025-01-29 14:01:54', '2025-01-29 14:01:54'),
(36, 2025013017, 6, NULL, 1, 300000, 1, '2025-01-30 00:55:25', '2025-01-30 01:52:28'),
(37, 2025013017, 6, NULL, 1, 300000, 1, '2025-01-30 01:41:05', '2025-01-30 01:52:28'),
(38, 2025013018, 6, NULL, 1, 300000, 1, '2025-01-30 01:59:10', '2025-01-30 01:59:27'),
(39, 2025013019, 6, NULL, 1, 300000, 0, '2025-01-30 02:00:06', '2025-01-30 02:00:06'),
(40, 2025013019, 6, NULL, 1, 300000, 0, '2025-01-30 02:08:36', '2025-01-30 02:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi`
--

CREATE TABLE `ekspedisi` (
  `id` bigint UNSIGNED NOT NULL,
  `namaEkspedisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekspedisi`
--

INSERT INTO `ekspedisi` (`id`, `namaEkspedisi`, `created_at`, `updated_at`) VALUES
(1, 'JNE', '2024-11-29 03:09:05', '2024-11-29 03:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_030459_create_m_resis_table', 1),
(6, '2023_06_11_235625_create_products_table', 1),
(7, '2023_06_12_000108_create_transaksis_table', 1),
(8, '2023_07_29_011712_detail_transaksi', 1),
(9, '2023_08_05_094100_tbl_cart', 1),
(10, '2024_06_26_230751_create_ekspedisi_table', 1),
(11, '2024_06_29_184749_create_pembayarans_table', 1),
(14, '2025_01_05_105724_create_table_name', 2),
(15, '2025_01_05_111513_create_search_histories_table', 2),
(16, '2025_01_16_162441_add_role_to_users_table', 2),
(17, '2025_01_16_163902_update_users_table_add_default_to_nik', 3),
(19, '2025_01_16_163950_update_users_table_make_nik_nullable', 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_resis`
--

CREATE TABLE `m_resis` (
  `id` bigint UNSIGNED NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logistic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint UNSIGNED NOT NULL,
  `namaPembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `namaPembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Dana', '2024-11-29 03:08:33', '2024-11-29 03:08:33'),
(2, 'PosPay', '2024-11-29 03:08:42', '2024-11-29 03:08:42'),
(3, 'Gopay', '2024-11-29 03:08:50', '2024-11-29 03:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `discount` double(8,2) NOT NULL,
  `size` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `quantity_out` int NOT NULL DEFAULT '0',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `nama_product`, `harga`, `discount`, `size`, `quantity`, `quantity_out`, `foto`, `is_active`, `created_at`, `updated_at`) VALUES
(6, 'BRG81067', 'dress', 300000, 0.10, 'XL', -4, 1, '20250113_Screenshot 2025-01-13 163627.png', 1, '2025-01-13 09:54:57', '2025-01-30 01:59:27'),
(7, 'BRG88166', 'baju newborn', 56000, 0.10, 'S', -14, 1, '20250116_kaos cewe.jpg', 1, '2025-01-16 04:14:23', '2025-01-19 14:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `search_histories`
--

CREATE TABLE `search_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `query` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` int NOT NULL,
  `nama_size` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `nama_size`) VALUES
(1, 'XXL'),
(2, 'XL'),
(3, 'L'),
(4, 'M'),
(5, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `table_name`
--

CREATE TABLE `table_name` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carts`
--

CREATE TABLE `tbl_carts` (
  `id` bigint UNSIGNED NOT NULL,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` bigint UNSIGNED NOT NULL,
  `qty` int NOT NULL,
  `price` bigint NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_carts`
--

INSERT INTO `tbl_carts` (`id`, `idUser`, `id_barang`, `qty`, `price`, `status`, `created_at`, `updated_at`) VALUES
(5, 'guest123', 6, 1, 300000, 1, '2025-01-13 09:55:57', '2025-01-13 09:56:04'),
(6, 'guest123', 6, 1, 300000, 1, '2025-01-16 03:41:11', '2025-01-16 03:41:26'),
(7, 'guest123', 6, 1, 300000, 1, '2025-01-16 03:49:01', '2025-01-16 03:49:11'),
(8, 'guest123', 6, 1, 300000, 1, '2025-01-16 04:02:50', '2025-01-16 04:03:04'),
(9, 'guest123', 6, 1, 300000, 1, '2025-01-16 04:09:49', '2025-01-16 04:09:57'),
(10, 'guest123', 7, 1, 56000, 1, '2025-01-16 04:15:09', '2025-01-16 04:15:29'),
(11, 'guest123', 6, 1, 300000, 1, '2025-01-16 04:43:23', '2025-01-16 04:43:31'),
(12, 'guest123', 7, 1, 56000, 1, '2025-01-16 04:44:25', '2025-01-16 04:44:35'),
(13, 'guest123', 6, 1, 300000, 1, '2025-01-16 04:52:51', '2025-01-16 04:52:57'),
(14, 'guest123', 7, 1, 56000, 1, '2025-01-16 06:16:36', '2025-01-16 06:16:42'),
(15, 'guest123', 7, 1, 56000, 1, '2025-01-16 06:36:58', '2025-01-16 06:37:08'),
(16, 'guest123', 7, 1, 56000, 1, '2025-01-16 06:43:43', '2025-01-19 13:03:50'),
(17, 'guest123', 7, 1, 56000, 1, '2025-01-16 06:44:39', '2025-01-19 13:05:11'),
(18, 'guest123', 7, 1, 56000, 1, '2025-01-16 06:49:02', '2025-01-16 06:51:39'),
(19, 'guest123', 7, 1, 56000, 1, '2025-01-16 07:01:11', '2025-01-19 13:12:22'),
(20, 'guest123', 6, 1, 300000, 1, '2025-01-16 07:01:29', '2025-01-19 13:25:32'),
(21, 'guest123', 7, 1, 56000, 1, '2025-01-19 09:42:51', '2025-01-19 13:29:45'),
(22, 'guest123', 7, 1, 56000, 1, '2025-01-19 10:06:05', '2025-01-19 13:39:19'),
(23, 'guest123', 7, 1, 56000, 1, '2025-01-19 11:08:14', '2025-01-19 13:42:15'),
(24, 'guest123', 7, 1, 56000, 1, '2025-01-19 11:46:13', '2025-01-19 13:42:40'),
(25, 'guest123', 6, 1, 300000, 1, '2025-01-19 11:46:17', '2025-01-19 13:42:59'),
(26, 'guest123', 7, 1, 56000, 1, '2025-01-19 13:19:52', '2025-01-19 13:43:18'),
(27, 'guest123', 7, 1, 56000, 1, '2025-01-19 13:42:05', '2025-01-19 13:43:37'),
(28, 'guest123', 7, 1, 56000, 1, '2025-01-19 13:47:40', '2025-01-19 13:47:48'),
(29, 'guest123', 7, 1, 56000, 1, '2025-01-19 14:15:23', '2025-01-19 14:15:36'),
(30, 'guest123', 6, 1, 300000, 1, '2025-01-29 13:21:52', '2025-01-29 14:01:54'),
(31, 'guest123', 6, 1, 300000, 1, '2025-01-29 13:22:02', '2025-01-30 01:41:05'),
(32, 'guest123', 6, 1, 300000, 1, '2025-01-30 00:54:56', '2025-01-30 01:59:10'),
(33, 'guest123', 6, 1, 300000, 1, '2025-01-30 01:59:51', '2025-01-30 02:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint UNSIGNED NOT NULL,
  `code_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Unpaid','Paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `code_transaksi`, `total_harga`, `nama_customer`, `alamat`, `no_tlp`, `status`, `created_at`, `updated_at`) VALUES
(1, '202501131', '0', 'indahh', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-13 09:11:41', '2025-01-13 09:11:41'),
(2, '202501132', '119000', 'aa', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-13 09:19:35', '2025-01-13 09:19:35'),
(3, '202501133', '107900', 'indahh', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-13 09:48:07', '2025-01-13 09:48:07'),
(4, '202501134', '342500', 'indahh', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-13 09:56:17', '2025-01-13 09:56:17'),
(5, '202501165', '674000', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-16 03:49:24', '2025-01-16 03:49:24'),
(6, '202501166', '342500', 'aa', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-16 04:10:18', '2025-01-16 04:10:18'),
(7, '202501167', '860480', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-16 06:16:54', '2025-01-16 06:16:54'),
(8, '202501198', '71660', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 13:04:03', '2025-01-19 13:04:03'),
(9, '202501199', '71660', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 13:05:19', '2025-01-19 13:05:19'),
(10, '2025011910', '839780', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 13:42:30', '2025-01-19 13:42:30'),
(11, '2025011911', '71660', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 13:42:49', '2025-01-19 13:42:49'),
(12, '2025011912', '342500', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 13:43:08', '2025-01-19 13:43:08'),
(13, '2025011913', '71660', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 13:43:26', '2025-01-19 13:43:26'),
(14, '2025011914', '71660', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 13:43:46', '2025-01-19 13:43:46'),
(15, '2025011915', '56000', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 14:11:00', '2025-01-19 14:11:00'),
(16, '2025011916', '56000', 'Indah Diva Gracia', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-19 14:16:46', '2025-01-19 14:16:46'),
(17, '2025013017', '1338000', 'indahh', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-30 01:52:28', '2025-01-30 01:52:28'),
(18, '2025013018', '348000', 'indahh', 'jalan sambisari', '082272293973', 'Unpaid', '2025-01-30 01:59:27', '2025-01-30 01:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '12345678',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglLahir` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `email`, `email_verified_at`, `password`, `role`, `alamat`, `no_tlp`, `tglLahir`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User179', 'Indah', 'indah@gmail.com', NULL, '$2y$10$v.cWpOLTaZWmi1iBNBA6Juj8pV7EzqKBDF1KNf8TuvlhgI3vwktoS', 'admin', 'jalan sambisari 2', '', '2005-09-13', NULL, '2024-11-20 07:09:27', '2024-11-20 07:09:27'),
(2, 'User68', 'Galuh Sanjaya Putra', 'galuhputra13@gmail.com', NULL, '$2y$10$UfJhQaf2e82hmSMa5K5C1.iG22NOtMFgQ2vmxGEPJ9zTAFeEj3yYC', 'member', 'jalan herkules', '', '2004-08-13', NULL, '2024-11-29 03:05:33', '2024-11-29 03:05:33'),
(3, 'User310', 'indahh', 'indahh@gmail.com', NULL, '$2y$10$U2DtFxwlLDknjoJGFctC1uO6.TtLxT8I13SkL5jqqSqpP.ky7MaSS', 'member', 'jalan sambisari', '082272293973', '2024-12-30', NULL, '2025-01-13 09:17:44', '2025-01-13 09:17:44'),
(4, 'User502', 'gracia', 'gracia@gmai.com', NULL, '$2y$10$bbd3edEFuTvqVNrsucFOyuRxgRnl3mAj2CWt/9lznrotRvF8Dhpl.', 'admin', 'jalan sambisari', '082272293973', '2025-01-07', NULL, '2025-01-13 09:21:42', '2025-01-13 09:21:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`daerah_id`);

--
-- Indexes for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transaksis_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `m_resis`
--
ALTER TABLE `m_resis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_histories`
--
ALTER TABLE `search_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `table_name`
--
ALTER TABLE `table_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_carts`
--
ALTER TABLE `tbl_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_carts_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
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
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `daerah_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `m_resis`
--
ALTER TABLE `m_resis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `search_histories`
--
ALTER TABLE `search_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_name`
--
ALTER TABLE `table_name`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_carts`
--
ALTER TABLE `tbl_carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD CONSTRAINT `detail_transaksis_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `products` (`id`);

--
-- Constraints for table `tbl_carts`
--
ALTER TABLE `tbl_carts`
  ADD CONSTRAINT `tbl_carts_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
