-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 05:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pegawai`
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
-- Table structure for table `instansis`
--

CREATE TABLE `instansis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instansis`
--

INSERT INTO `instansis` (`id`, `nama`, `slug`, `email`, `tlp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Perum Mansur Rajasa', 'lemx0cg', 'kenzie.aryani@example.org', '(+62) 696 1756 2558', 'Gg. Mahakam No. 673', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(2, 'Perum Astuti Dongoran (Persero) Tbk', 'wctozd4', 'wulandari.kezia@example.com', '0645 3574 225', 'Psr. Yohanes No. 715', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(3, 'CV Wibisono Tbk', 'cfbd5ub', 'thamrin.talia@example.net', '(+62) 29 8939 817', 'Jln. Adisumarmo No. 992', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(4, 'Perum Kuswandari Kuswandari Tbk', '6z8ynkf', 'pia.pradipta@example.com', '0921 8221 372', 'Gg. Barat No. 575', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(5, 'PD Habibi Mahendra Tbk', 'fdrh8vm', 'melinda.hidayat@example.com', '027 8423 757', 'Ds. Banda No. 29', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(6, 'UD Riyanti', 'ojtozy3', 'setiawan.cici@example.com', '0295 3703 999', 'Kpg. Suryo Pranoto No. 817', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(7, 'PT Tamba Wijayanti Tbk', '2oygzog', 'asmianto.yolanda@example.com', '(+62) 260 4948 8399', 'Ds. Baha No. 827', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(8, 'UD Sinaga Tbk', 'wjxabst', 'bwijayanti@example.com', '0919 6132 007', 'Ds. PHH. Mustofa No. 759', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(9, 'PT Utami (Persero) Tbk', 'hxymia3', 'lnamaga@example.net', '(+62) 968 6416 7243', 'Dk. PHH. Mustofa No. 890', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(10, 'PT Wibisono Mardhiyah', 'zrqrbv6', 'haryanto.caket@example.org', '025 3747 8942', 'Dk. Kebangkitan Nasional No. 664', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(11, 'Perum Haryanto Napitupulu Tbk', 'sv60sxy', 'sudiati.kartika@example.net', '026 0652 563', 'Dk. Tambak No. 148', '2022-12-15 09:46:52', '2022-12-15 09:46:52'),
(12, 'PT Traspac', 'pt-traspac', 'admin@gmail.com', '08257689654', 'Jl Thamrin', '2022-12-15 09:47:54', '2022-12-15 09:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `instansi_pegawai`
--

CREATE TABLE `instansi_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pegawai_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_10_234154_create_instansis_table', 1),
(6, '2022_12_11_001405_create_pegawais_table', 1),
(7, '2022_12_14_121800_create_instansi_pegawai_table', 1);

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
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgll` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tugas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eselon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `instansi_id`, `nip`, `nama_lengkap`, `slug`, `image`, `ttl`, `alamat`, `tgll`, `jenis_kelamin`, `agama`, `no_hp`, `npwp`, `jabatan`, `tempat_tugas`, `gol`, `eselon`, `created_at`, `updated_at`) VALUES
(1, 12, '12345', 'Zaki Deza', 'zaki-deza', 'public/image/pegawai/x7fSdI8kyTqzqjRv2IsGvaUm3eI1GNpEYTA6Hgmf.png', 'Cianjur', 'Karangsari', '2003-02-19', 'Laki-Laki', 'Islam', '081224259372', '190203', 'Kepala', 'Cianjur', 'IX', '3', '2022-12-15 09:48:34', '2022-12-15 09:48:51'),
(2, 12, '54321', 'Annisa', 'annisa', 'public/image/pegawai/I4eqC2OpszYjPWz9zmxqAysga97eHiAezsZrEYJr.jpg', 'Bandung', 'Dago', '2003-01-15', 'Perempuan', 'Islam', '081224259372', '011503', 'Sekertaris', 'Sumedang', 'VII', '1', '2022-12-15 09:54:17', '2022-12-15 09:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'uj8vhl44zqe', 'admin@gmail.com', NULL, '$2y$10$8FtmrmTN2BdKxdftf2X1fepAmROaXJ9wPQ8u/PgMi2K.3zutdae8q', NULL, '2022-12-15 09:47:21', '2022-12-15 09:47:21');

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
-- Indexes for table `instansis`
--
ALTER TABLE `instansis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi_pegawai`
--
ALTER TABLE `instansi_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instansi_pegawai_instansi_id_foreign` (`instansi_id`),
  ADD KEY `instansi_pegawai_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawais_instansi_id_foreign` (`instansi_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
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
-- AUTO_INCREMENT for table `instansis`
--
ALTER TABLE `instansis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `instansi_pegawai`
--
ALTER TABLE `instansi_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `instansi_pegawai`
--
ALTER TABLE `instansi_pegawai`
  ADD CONSTRAINT `instansi_pegawai_instansi_id_foreign` FOREIGN KEY (`instansi_id`) REFERENCES `instansis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instansi_pegawai_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_instansi_id_foreign` FOREIGN KEY (`instansi_id`) REFERENCES `instansis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
