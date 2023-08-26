-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 21.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `terjual` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `stock_barang` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `harga`, `foto_barang`, `terjual`, `rating`, `stock_barang`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Tegel', '60000', 'upload_foto_barang/uGxUOKqot8iiUQ2zfXXwYsTvCINpHGLaPHhzHgTI.jpg', 5, 0, '100', NULL, '2023-06-07 20:39:49', '2023-08-08 22:00:49'),
(5, 'mmmmm', '4545', 'upload_foto_barang/SsofjYxzhMj0jejpIwSyY8MVgVsM9pQoHWAZctQN.jpg', 0, 0, '454', NULL, '2023-06-07 22:20:13', '2023-06-08 06:23:29'),
(6, 'coba2', '9', 'upload_foto_barang/dqnHrW3xDq3v8DTAvoAVN0jOut3b54owcDqfKic5.jpg', 0, 0, '3', NULL, '2023-06-08 06:23:49', '2023-06-08 08:05:01'),
(7, 'ffffff', '6', 'upload_foto_barang/hXNJblQXkvkAZrMcOCPlDNovPDkVao5xirkKzGKa.jpg', 0, 0, '5', NULL, '2023-06-08 06:24:06', '2023-06-08 06:24:06'),
(8, 'yyyyyyyyyyyyy', '6', 'upload_foto_barang/9L5gNx2iNQS8KD355NQmPJYxXmUu3acckJ9I9Wat.jpg', 0, 0, '8', NULL, '2023-06-08 06:24:22', '2023-06-08 06:24:22'),
(9, 'ttttt', '9', 'upload_foto_barang/GDoo9gBmrVxDcccPsVJQabktQ3k89QihRPwhBYfr.jpg', 0, 0, '8', NULL, '2023-06-08 06:24:42', '2023-06-08 06:24:42'),
(10, 'hhhhhh', '6', 'upload_foto_barang/HWPyZlkzV4tineff2YiyhlcQGpdWPP4gNxlWT730.jpg', 0, 0, '8', NULL, '2023-06-08 06:24:56', '2023-06-08 06:24:56'),
(11, 'hhhhhhhhh', '8', 'upload_foto_barang/00wc5e3tU5r30jvNwZTCbjNvHCjDz32FPYMcNCYa.jpg', 0, 0, '1', NULL, '2023-06-08 06:25:17', '2023-06-08 06:25:17'),
(12, 'vvvvvv', '6', 'upload_foto_barang/p05N2nzZFMNC7SI3fCXstClZ6JN824yg43Cl5q5d.jpg', 0, 0, '454', NULL, '2023-06-08 06:25:35', '2023-06-08 06:25:35'),
(13, 'nnnnnnnn', '2', 'upload_foto_barang/FRpLAXnYe45MDHI9ETwXP2yHxAWxRBQMsuljN4OE.jpg', 0, 0, '1', NULL, '2023-06-08 06:25:50', '2023-06-08 06:25:50'),
(15, 'semen', '50000', 'upload_foto_barang/TPC77TlVDa8uZeMAc3Wvu9pruIimJAoRSxVsDEdc.png', 0, 0, '80', NULL, '2023-06-09 19:08:31', '2023-06-09 19:08:31'),
(16, 'besi', '30000', 'upload_foto_barang/3EWaOSLMNTBkeIOQMehpziqZTqe2mrLErob0pPtw.png', 0, 0, '8', NULL, '2023-06-09 19:46:50', '2023-06-09 19:46:50'),
(17, 'coba lagiiii', '123', 'upload_foto_barang/o8LXEwjQDOPQ3leO9caGupzKuywJrAyO2IlWCpFy.jpg', 0, 0, '1', NULL, '2023-08-08 21:50:53', '2023-08-08 21:50:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `nama_pembeli`, `nama_barang`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'anselmus botang1234', 'yyyyyyyyyyyyy', NULL, '2023-06-08 09:56:17', '2023-06-08 20:20:04'),
(11, 'anselmus botang1234', 'eeeeeeeeeeeeeeeeeeeeeee ggggggggggggggggg', NULL, '2023-06-08 10:15:10', '2023-06-09 04:11:37'),
(46, 'testlagi', 'Tegel', NULL, '2023-08-26 04:21:36', '2023-08-26 04:21:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_admin_table', 1),
(2, '2014_10_12_000000_create_barang_table', 1),
(3, '2014_10_12_000000_create_keranjang_table', 1),
(4, '2014_10_12_000000_create_pembelian_table', 1),
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelians`
--

CREATE TABLE `pembelians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `nomor_hp_pembelian` varchar(255) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_bayar` varchar(255) NOT NULL,
  `status_pengiriman` varchar(255) NOT NULL,
  `tanggal_pembelian` varchar(255) NOT NULL,
  `alamat_pengiriman` varchar(255) NOT NULL,
  `tipe_bayaran` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelians`
--

INSERT INTO `pembelians` (`id`, `nama_barang`, `nama_pembeli`, `nomor_hp_pembelian`, `total_bayar`, `status_bayar`, `status_pengiriman`, `tanggal_pembelian`, `alamat_pengiriman`, `tipe_bayaran`, `remember_token`, `created_at`, `updated_at`, `bukti_pembayaran`) VALUES
(2, 'vvvvvv', 'testlagi', '085340139120', 54, 'lunas', 'belum_kirim', '2023-06-08', 'makale', 'viaBank', NULL, '2023-06-08 10:07:39', '2023-06-09 04:09:02', ''),
(4, 'ffffff', 'testlagi', '085340139120', 18, 'belum_lunas', 'belum_kirim', '2023-06-08', 'rantepao', 'viaBank', NULL, '2023-06-08 10:12:05', '2023-06-08 21:33:35', ''),
(5, 'yyyyyyyyyyyyy', 'testlagi', '085340139120', 48, 'belum_lunas', 'belum_kirim', '2023-06-08', 'bbbb', 'viaBank', NULL, '2023-06-08 10:12:54', '2023-06-08 19:54:45', ''),
(7, 'eeeeeeeeee', 'testlagi', '085340139120', 40, 'belum_lunas', 'belum_kirim', '2023-06-09', 'botang', 'viaBank', NULL, '2023-06-09 04:09:19', '2023-06-09 19:24:27', ''),
(8, 'hhhhhhhhh', 'testlagi', '085340139120', 8, 'belum_lunas', 'belum_kirim', '2023-06-09', 'makale', 'cod', NULL, '2023-06-09 04:48:36', '2023-06-09 19:49:06', ''),
(9, 'eeeeeeeeee', 'testlagi', '085340139120', 24, 'belum_lunas', 'belum_kirim', '2023-06-10', 'makale', 'viaBank', NULL, '2023-06-09 19:07:06', '2023-06-09 19:07:06', ''),
(10, 'semen', 'testlagi', '085340139120', 250000, 'lunas', 'belum_kirim', '2023-06-10', 'makale', 'cod', NULL, '2023-06-09 19:22:38', '2023-06-09 19:23:08', ''),
(11, 'ffffff', 'lagi', 'qwerty', 6, 'belum_lunas', 'belum_kirim', '2023-08-09', 'dsfdsf', 'viaBank', NULL, '2023-08-08 20:51:43', '2023-08-08 20:51:43', ''),
(12, 'eeeeeeeeee', 'lagi', 'qwerty', 8, 'belum_lunas', 'belum_kirim', '2023-08-09', 'sdfdsf', 'viaBank', NULL, '2023-08-08 21:05:17', '2023-08-08 21:05:17', ''),
(13, 'eeeeeeeeee', 'lagi', 'qwerty', 8, 'belum_lunas', 'belum_kirim', '2023-08-09', 'sdf', 'viaBank', NULL, '2023-08-08 21:23:35', '2023-08-08 21:23:35', ''),
(14, 'eeeeeeeeee', 'lagi', 'qwerty', 8, 'belum_lunas', 'belum_kirim', '2023-08-09', 'dd', 'cod', NULL, '2023-08-08 21:26:20', '2023-08-08 21:26:20', ''),
(15, 'yyyyyyyyyyyyy', 'lagi', 'qwerty', 6, 'belum_lunas', 'belum_kirim', '2023-08-09', 'sdfdsf', 'cod', NULL, '2023-08-08 21:27:07', '2023-08-08 21:27:07', ''),
(16, 'eeeeeeeeee', 'lagi', 'qwerty', 8, 'belum_lunas', 'belum_kirim', '2023-08-09', 'dfgfd', 'viaBank', NULL, '2023-08-08 21:29:15', '2023-08-08 21:29:15', 'upload_bukti_pembayaran/5QWJXwbB3pp4DLI3gjMztQj87GBSJOncWa6RC8eb.jpg'),
(17, 'ffffff', 'lagi', 'qwerty', 6, 'belum_lunas', 'belum_kirim', '2023-08-09', 'sdfdsf', 'cod', NULL, '2023-08-08 22:07:14', '2023-08-08 22:07:14', 'upload_bukti_pembayaran/JAY9BvQK6GTPsCgQsycAUyv40j26WsbTU20Lgb4f.png'),
(25, '(mmmmm)(ffffff)', 'testlagi', '085340139120', 4551, 'belum_lunas', '-', '-', '-', 'cod', NULL, '2023-08-26 04:09:01', '2023-08-26 04:09:01', 'upload_bukti_pembayaran/BbrV8PCpEb6AtPpWP8yQM6vUPCaPk7F394pQAzlb.jpg'),
(28, '(Tegel)(mmmmm)', 'testlagi', '085340139120', 64545, 'belum_lunas', '-', '-', '-', 'cod', NULL, '2023-08-26 04:18:06', '2023-08-26 04:18:06', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anselmus botang1234', 'eran batu', '888888888', '$2y$10$hBw0s0HxvboARtxoMAAvZegERWW5l.5ho7AvyJaJ25Br9E.VD.mJa', NULL, '2023-06-07 23:18:43', '2023-06-08 19:22:25'),
(4, 'testlagi', 'Rantepao', '085340139120', '$2y$10$Ln0fT4.tzxPwucJ6z8v.CuOdG8QagMNuQaeZaOlntDAtp.CUUnC/S', NULL, '2023-06-08 06:33:16', '2023-06-08 06:33:16'),
(5, 'natalia', 'Rantepao', '085256749953', '$2y$10$e9MLsuzc5kOD1SoLpJUTFOQuHvxHQCUi999LrIWlJFr.be5MqmqkW', NULL, '2023-06-09 19:20:45', '2023-06-09 19:20:45'),
(6, 'coba pertama', 'Rantepao', '1234567890', '$2y$10$8x1mAvngNEmGW6SSBkZWK.jWY7r4WP99L4pJSCAnlFA/f8RGedNUC', NULL, '2023-06-09 19:21:19', '2023-06-09 19:21:19'),
(7, 'lagi', 'botang', 'qwerty', '$2y$10$Nyu1rPeQdjh6m4vsRjgTHeqp0N2BJPUijfCc7Zdp57LQ4UPzfGlzm', NULL, '2023-08-08 20:50:57', '2023-08-08 20:50:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nomor_hp_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
