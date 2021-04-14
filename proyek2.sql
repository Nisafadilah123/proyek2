-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2021 pada 18.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek2`
--

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
(4, '2021_03_25_161407_create_produks_table', 1),
(5, '2021_03_25_161632_create_transaksis_table', 1),
(6, '2021_03_25_161649_create_transaksi_details_table', 1);

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
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `gambar`, `harga`, `stok`, `keterangan`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(5, 'Kerupuk kulit Ikan \" Dua Jari \"', 'MLo8HxbWz1oOqSsTmxjkHHbiNLCSUp6zKWXi1TC3.png', 10000, 21, 'Harga Per-pack', 'Industri Olahan', '2021-03-31 11:10:16', '2021-04-10 20:14:41'),
(9, 'Syrup Mangga \" Kenanga Mandiri \"', 'w5ccYI1jyHMAd8iuYgYGbUp5L0yyXCnf6BpxIZqK.png', 25000, 21, 'Ukuran 750ml', 'Industri Olahan', '2021-04-07 19:33:57', '2021-04-10 19:25:59'),
(10, 'Kerupuk Bawang \" Dua Udang \"', 'zGq9vco6mNbtqyxhum364b6gaAWSHuSJG47dYrIR.png', 65000, 21, 'Kerupuk Mentah', 'Industri Olahan', '2021-04-07 19:52:57', '2021-04-10 19:34:44'),
(11, 'Kerupuk kulit Ikan \" Indy \"', 'FiXqhy2r0L1icV7ggezD8loXxDSZuLeUNNvKSCl5.png', 10000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-07 20:02:20', '2021-04-10 20:09:07'),
(12, 'Kerupuk kulit Sapi\" Kuda Laut\"', 'NzJ7OU8PuKRQuBfJ89F9GByH1RPjzgSyYTlmSqu4.png', 10000, 78, 'Harga per-bungkus', 'Industri Olahan', '2021-04-07 20:19:52', '2021-04-10 20:24:49'),
(13, 'Kerupuk Lambung Ikan \" Indy \"', 'W9t43b4nbAbA3PfKndP45GrYKSvN74wQOooQNoA0.png', 10000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-07 20:25:27', '2021-04-07 20:27:31'),
(14, 'Kerupuk Terasi Udang \" Kereta Kencana \"', 'Uw2ybKUwlSozHxTLezKUpQ3J2ohB7NJZe4VlJTay.png', 60000, 21, 'Kerupuk Mentah', 'Industri Olahan', '2021-04-07 20:29:32', '2021-04-07 20:31:24'),
(15, 'Kerupuk kulit Ikan \" Kuda Laut \"', 'xCajBS98KBsf1dbfqCfDR2U89jcbwPwpXGBrftIw.png', 10000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-07 21:04:38', '2021-04-07 21:14:10'),
(16, 'Juice Mangga \" Kenanga Mandiri \"', '6BfQSEG5EQL0PFnTujmpJ4l4Dz7oovWK6IWAWiNA.png', 8000, 21, 'Ukuran 350ml', 'Industri Olahan', '2021-04-07 21:16:52', '2021-04-10 20:30:05'),
(17, 'Kerupuk Udang \" Menara \"', 'jqrs0P4chRwCxpWHV4LNOQkZf6ZLHpxIDdVfSiaS.png', 25000, 21, 'Kerupuk Mentah', 'Industri Olahan', '2021-04-07 21:23:39', '2021-04-07 21:25:50'),
(18, 'Kerupuk kulit Ikan \" Pita Loka \"', 'FKhMJLD6g9E4wVtLFjqQrEjRstpHA4zB32kxS1xK.png', 10000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-07 21:29:52', '2021-04-07 21:29:52'),
(19, 'Kerupuk Udang \" Putri Anjani \"', 'e9GiutU0Kf8euPBe89nDTaKmI4fZSJCZKG9eEzFC.png', 8000, 21, 'Ukuran Medium', 'Industri Olahan', '2021-04-07 21:33:36', '2021-04-07 21:33:36'),
(20, 'Keripik Pisang \" Rahmat \"', 'Ch5a58carnL1a8afHiF7d6V9oeBDbcpNr2uqPupO.png', 10000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-10 01:18:11', '2021-04-10 01:21:18'),
(21, 'Kerupuk Panggang \" Rz \"', 'zgH3pG7ltZdDICHcdd09stHhh7pjcedRws3ulh9S.png', 10000, 21, 'Harga Per-pack', 'Industri Olahan', '2021-04-10 01:24:28', '2021-04-10 01:24:28'),
(22, 'Kerupuk kulit Ikan \" Yoga Putra \"', '83xXGyUu7IIUKcMyoXaDVZyMLv4R6B8DUOhscauP.png', 10000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-10 01:27:30', '2021-04-10 01:27:30'),
(23, 'Manisan Mangga Kering \" Kenanga Mandiri \"', 'U2CRQQlilgUxvFbNpFNxmEgSJ7mXRnq9zbIzM7xG.png', 18000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-10 01:33:39', '2021-04-10 01:35:45'),
(24, 'Keripik Usus \" Kenanga Mandiri \"', 'zSGGJloXA0QIGLyWqlLyVeoRJTygQFf1CZTHiOYd.png', 18000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-10 01:38:04', '2021-04-10 01:38:04'),
(25, 'Dodol Mangga Gincu \" Kenanga Mandiri \"', '9EHwsNDaTYRTQVe6vFzKN33dI6EM6fvq9S1zBisM.png', 20000, 21, 'Harga per-bungkus', 'Industri Olahan', '2021-04-10 01:42:54', '2021-04-10 02:12:16'),
(26, 'Jambal Roti \" Kenanga Mandiri \"', 'ZxM2AqKEIitA1LhzgxMmnmEMAsWhNM8x0vM5KIlT.png', 25000, 20, 'Harga per-bungkus', 'Industri Olahan', '2021-04-10 02:14:53', '2021-04-10 02:14:53'),
(27, 'Kerupuk kulit Ikan \" Bintang Ulam \"', '3aVwuhrrCWnNtqwnCkX21jnH03A5A54Sui509KUb.png', 10000, 21, 'Harga Per-pack', 'Industri Olahan', '2021-04-10 20:42:07', '2021-04-10 20:42:07'),
(28, 'Minuman \" Kenanga (N) \" Coffee Flavour', 'zypANY569jiplXLwnvFG14Fe0qCgGaRGc8cXdOTJ.jpg', 6000, 20, 'Ukuran Small', 'Industri Olahan', '2021-04-11 02:35:15', '2021-04-11 02:35:15'),
(29, 'Minuman \" Kenanga (N) \" Coffee Flavour', 'wXSTvtJZPfovnE5bQkBSteBCRY8hFx3ZnD5LpZdj.jpg', 30000, 20, 'Ukuran Big', 'Industri Olahan', '2021-04-11 02:39:19', '2021-04-11 02:39:19'),
(30, 'Minuman \" Kenanga (N) \" Sweet Brown Flavour', 'lBuqPG3No2yX1EoU6oJt1ZQioQb4PeYF134bsQwQ.jpg', 6000, 20, 'Ukuran Small', 'Industri Olahan', '2021-04-11 02:40:45', '2021-04-11 02:40:45'),
(31, 'Minuman \" Kenanga (N) \" Sweet Brown Flavour', 'eX5vr5rYMqJQ9dzgj3OkLcKKPNPx0qXC6iZsEKF2.jpg', 30000, 20, 'Ukuran Big', 'Industri Olahan', '2021-04-11 02:41:38', '2021-04-11 02:41:38'),
(32, 'Minuman \" Kenanga (N) \" Pink Lava Flavour', 'rfhAeBy5w4iBqDifG7SwTPCEuYRVuHr2HcMhK9AR.jpg', 6000, 20, 'Ukuran Small', 'Industri Olahan', '2021-04-11 02:42:41', '2021-04-11 02:42:41'),
(33, 'Minuman \" Kenanga (N) \" Pink Lava Flavour', 'YCDJIcuXdUi4TU6hE51x9V7lcj84LtPjCuzgYZNR.jpg', 30000, 20, 'Ukuran Big', 'Industri Olahan', '2021-04-11 02:43:53', '2021-04-11 02:43:53'),
(34, 'Tempe \" Maskunah \"', 'DADtpYrfKhJ7FpiFgQz9Zv1lLj66yWzKVrJKiMuj.jpg', 3000, 20, 'Ukuran Medium', 'Industri Olahan', '2021-04-11 02:45:56', '2021-04-11 02:45:56'),
(35, 'Tempe \" Maskunah \"', 'dxg5OVeQoCPglpz3WNN8agFHCBRInDJE46nRqmgh.jpg', 6500, 20, 'Ukuran Big', 'Industri Olahan', '2021-04-11 02:46:50', '2021-04-11 02:46:50'),
(36, 'Kerupuk Mie Crispy \" Rizal \"', 'YzoNqcMj8oaZBphPBFnZPkQs90gIoP2O8nIYzYqW.jpg', 25000, 20, 'Harga Per-pack', 'Industri Olahan', '2021-04-11 02:59:10', '2021-04-11 03:03:38'),
(37, 'Ikan Cupang \" Roby \"', 'vQFFmbtPPy0EJFxYUWLnBbbQefiYd7ZmrjclHK6Z.jpg', 50000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 07:51:08', '2021-04-11 07:51:08'),
(38, 'Ikan Nila Merah \" Hadi Suwanto \"', 'juastyvKosbfqOaXBJFTrWp343SUI8rdoI4lDV7j.jpg', 30000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 07:56:45', '2021-04-11 07:56:45'),
(39, 'Ikan Gurame \" Wamin \"', 'S46eXn5y4h6vV88WBEft3LdQb69qCq40FZ94qCZN.jpg', 30000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 07:59:33', '2021-04-11 07:59:33'),
(40, 'Ikan Gurame \" Khusen \"', 'PmyzWp5Rxi7KHzIZUHTDZhrkcQhVs9oOQQIsR7u8.jpg', 30000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 08:02:53', '2021-04-11 08:02:53'),
(41, 'Ikan Gurame \" Hadi Suwanto \"', 'NHaYoKxLXe483gMy7DwNAneHNvWvIo1gmVEB5Oi8.jpg', 25000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 08:07:06', '2021-04-11 08:07:06'),
(42, 'Ikan Nila Merah \" Saepudin \"', 'xyz6f8rZBeXtDVk1agB4XfntTWPm3axUJhkgtkmu.jpg', 25000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 08:10:39', '2021-04-11 08:10:39'),
(43, 'Ikan Nila Merah \" Sujana \"', 'sAHyxBdroZcrCFyBxKKkhnZVKlqoA1v6YrPKQ5cd.jpg', 25000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 08:11:45', '2021-04-11 08:11:45'),
(44, 'Ikan Nila Merah \" Sanuri\"', '9mNGC4QilNMaQWeSt7xzmGZZL3S8ZE3rh0edvc5t.png', 25000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 08:12:40', '2021-04-11 08:12:40'),
(45, 'Ikan Gurame \" Karsijan \"', 'KLHmMoVW7w9KylbkRw5XjPxU2DvazaoYMSZEK8M9.jpg', 30000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 08:15:32', '2021-04-11 08:16:28'),
(46, 'Ikan Cupang \" Badrudin \"', 'CvlShnMYWRY0bjbHAEn8j5gEaM74uNIJoJohnO31.jpg', 30000, 20, 'Harga per-ekor', 'Hewan', '2021-04-11 08:20:02', '2021-04-11 08:20:02'),
(47, 'Jasa Pembuatan kaos dan Sablon Kaos \" Suhendra KIJANG 33MAS CLOTH \"', 'Uxr2iI38lLVH1qIyL75yypSFRwOz03Kcfyw0mvOm.jpg', 70000, 20, 'Harga per-grosir', 'Jasa', '2021-04-11 08:23:57', '2021-04-11 08:23:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `user_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(1, 4, '2021-03-30', '1', 711, 15000, '2021-03-30 01:50:32', '2021-03-30 01:52:11'),
(2, 4, '2021-03-30', '1', 344, 60000, '2021-03-30 05:34:01', '2021-03-30 05:34:11'),
(3, 4, '2021-03-31', '0', 120, 0, '2021-03-31 11:34:57', '2021-04-12 05:40:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_details`
--

CREATE TABLE `transaksi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_details`
--

INSERT INTO `transaksi_details` (`id`, `produk_id`, `transaksi_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 15000, '2021-03-30 01:50:32', '2021-03-30 01:50:32'),
(2, 3, 2, 1, 60000, '2021-03-30 05:34:01', '2021-03-30 05:34:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `foto`, `alamat`, `nohp`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@admin.com', NULL, '$2y$10$hZ/iQg7rPuNbcSj5siwZsedPchR8MzcsylCd2SB8zW4Hke7uLs/Mi', 1, NULL, NULL, NULL, NULL, '2021-03-29 22:48:47', '2021-03-29 22:48:47'),
(4, 'Nisa', 'user@admin.com', NULL, '$2y$10$pWgOW0MYZ9IW7cVpJZYLrObLWLr7wgpMd2bKL4O6SzVg943eU4Hqq', 0, NULL, 'Blok welut', '085794337905', NULL, '2021-03-29 22:48:47', '2021-03-30 01:51:54'),
(5, 'rizal', 'rizal@gmail.com', NULL, '$2y$10$YHCHlNHVFbteiRIP3k8QYeRDvlEtY3GNLJe/aQ9rDTtjDVQA9gTS6', NULL, NULL, NULL, NULL, NULL, '2021-04-13 05:45:34', '2021-04-13 05:45:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
