-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2023 pada 11.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelpalu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `borda`
--

CREATE TABLE `borda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_sewa` bigint(20) NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kenyamanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keamanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjangkamar` int(11) NOT NULL,
  `lebarkamar` int(11) NOT NULL,
  `jarak_dari_kampus` int(11) NOT NULL,
  `desain_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `rank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kost`
--

CREATE TABLE `kost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_sewa` bigint(20) NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kenyamanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keamanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjangkamar` int(11) NOT NULL,
  `lebarkamar` int(11) NOT NULL,
  `jarak_dari_kampus` int(11) NOT NULL,
  `desain_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriamahasiswa`
--

CREATE TABLE `kriteriamahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriteriamahasiswa`
--

INSERT INTO `kriteriamahasiswa` (`id`, `nama`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Fasilitas', 0.519, NULL, NULL),
(2, 'Harga Sewa', 0.197, NULL, NULL),
(3, 'Lokasi', 0.128, NULL, NULL),
(4, 'Kenyamanan', 0.087, NULL, NULL),
(5, 'Keamanan', 0.063, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriapemilikkost`
--

CREATE TABLE `kriteriapemilikkost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriteriapemilikkost`
--

INSERT INTO `kriteriapemilikkost` (`id`, `nama`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Luas Kamar', 0.667, NULL, NULL),
(2, 'Jarak Dari Kampus', 0.235, NULL, NULL),
(3, 'Desain Rumah', 0.091, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_25_014548_create_kost_table', 1),
(6, '2022_10_25_014619_create_kriteriapemilikkost_table', 1),
(7, '2022_10_25_014650_create_kriteriamahasiswa_table', 1),
(8, '2022_10_25_014704_create_subkriteriapemilikkost_table', 1),
(9, '2022_10_25_014722_create_subkriteriamahasiswa_table', 1),
(10, '2022_11_24_084212_create_borda_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `subkriteriamahasiswa`
--

CREATE TABLE `subkriteriamahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kriteriamahasiswa` bigint(20) UNSIGNED NOT NULL,
  `kode` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subkriteriamahasiswa`
--

INSERT INTO `subkriteriamahasiswa` (`id`, `id_kriteriamahasiswa`, `kode`, `nama`, `bobot`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '>5', 0.648, 'Lengkap', NULL, NULL),
(2, 1, 2, '>=3 dan <=5', 0.23, 'Kurang Lengkap', NULL, NULL),
(3, 1, 3, '<3', 0.122, 'Tidak Lengkap', NULL, NULL),
(4, 2, 4, '>900.000', 0.137, 'Mahal', NULL, NULL),
(5, 2, 5, '>=500.000 dan <=900.000', 0.24, 'Sedang', NULL, NULL),
(6, 2, 6, '<500.000', 0.623, 'Murah', NULL, NULL),
(7, 3, 7, 'Jarak dari kost ke kampus cukup terjangkau dengan berjalan kaki', 0.681, 'Sangat Baik', NULL, NULL),
(8, 3, 8, 'Jarak dari kos ke kampus terjangkau dengan kendaraan umum/pribadi', 0.201, 'Baik', NULL, NULL),
(9, 3, 9, 'Kost dekat dengan akses yang diperlukan (warung makan, warnet, mini market, londry)', 0.118, 'Cukup', NULL, NULL),
(10, 4, 10, 'Lingkungan kost tidak rawan banjir', 0.595, 'Sangat Baik', NULL, NULL),
(11, 4, 11, 'Lingkungan kost yang bersih', 0.277, 'Baik', NULL, NULL),
(12, 4, 12, 'Keramahan pemilik / penjaga kost', 0.129, 'Cukup', NULL, NULL),
(13, 5, 13, 'Aman dari pencurian', 0.633, 'Sangat Baik', NULL, NULL),
(14, 5, 14, 'Keberadaan tuan ruan rumah / penjaga kost', 0.26, 'Baik', NULL, NULL),
(15, 5, 15, 'Tempat kost ada jam malam', 0.106, 'Cukup', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteriapemilikkost`
--

CREATE TABLE `subkriteriapemilikkost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kriteriapemilikkost` bigint(20) UNSIGNED NOT NULL,
  `kode` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subkriteriapemilikkost`
--

INSERT INTO `subkriteriapemilikkost` (`id`, `id_kriteriapemilikkost`, `kode`, `nama`, `bobot`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 16, '4x5 m', 0.715, 'Sangat Baik', NULL, NULL),
(2, 1, 17, '3x4 m', 0.187, 'Baik', NULL, NULL),
(3, 1, 18, '3x3 m', 0.098, 'Cukup', NULL, NULL),
(4, 2, 19, '<500 m', 0.619, 'Sangat Baik', NULL, NULL),
(5, 2, 20, '>=500 m dan <=1500 m', 0.284, 'Baik', NULL, NULL),
(6, 2, 21, '>1500 m', 0.096, 'Cukup', NULL, NULL),
(7, 3, 22, 'Permanen', 0.648, 'Sangat Baik', NULL, NULL),
(8, 3, 23, 'Sekat gypsum', 0.23, 'Baik', NULL, NULL),
(9, 3, 24, 'Sekat triplek', 0.122, 'Cukup', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nohp`, `role`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', '082399431723', 'admin', 'user.png', NULL, '$2y$10$Ita1UPbM3MRV502OgiarPOki4sn0sAj8KKvUs.S.gJjcbeQc8QahS', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `borda`
--
ALTER TABLE `borda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borda_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kost_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `kriteriamahasiswa`
--
ALTER TABLE `kriteriamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteriapemilikkost`
--
ALTER TABLE `kriteriapemilikkost`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `subkriteriamahasiswa`
--
ALTER TABLE `subkriteriamahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subkriteriamahasiswa_id_kriteriamahasiswa_foreign` (`id_kriteriamahasiswa`);

--
-- Indeks untuk tabel `subkriteriapemilikkost`
--
ALTER TABLE `subkriteriapemilikkost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subkriteriapemilikkost_id_kriteriapemilikkost_foreign` (`id_kriteriapemilikkost`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `borda`
--
ALTER TABLE `borda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kost`
--
ALTER TABLE `kost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriteriamahasiswa`
--
ALTER TABLE `kriteriamahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriapemilikkost`
--
ALTER TABLE `kriteriapemilikkost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `subkriteriamahasiswa`
--
ALTER TABLE `subkriteriamahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `subkriteriapemilikkost`
--
ALTER TABLE `subkriteriapemilikkost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `borda`
--
ALTER TABLE `borda`
  ADD CONSTRAINT `borda_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `kost_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `subkriteriamahasiswa`
--
ALTER TABLE `subkriteriamahasiswa`
  ADD CONSTRAINT `subkriteriamahasiswa_id_kriteriamahasiswa_foreign` FOREIGN KEY (`id_kriteriamahasiswa`) REFERENCES `kriteriamahasiswa` (`id`);

--
-- Ketidakleluasaan untuk tabel `subkriteriapemilikkost`
--
ALTER TABLE `subkriteriapemilikkost`
  ADD CONSTRAINT `subkriteriapemilikkost_id_kriteriapemilikkost_foreign` FOREIGN KEY (`id_kriteriapemilikkost`) REFERENCES `kriteriapemilikkost` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
