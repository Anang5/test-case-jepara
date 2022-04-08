-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Apr 2022 pada 11.36
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-case-books`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tanggal_terbit` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `judul`, `pengarang`, `tanggal_terbit`, `penerbit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Laskar Pelangi', 'andrea hirata', '10-06-2008', 'Gramedia', '2022-04-08 02:40:12', '2022-04-08 02:40:12', NULL),
(2, 'Bulan', 'Tere Liye', '11-09-2011', 'Shonen Jump', '2022-04-08 02:40:12', '2022-04-08 02:40:12', NULL),
(3, 'Pulang', 'Tere Liye', '26-04-2015', 'Angkasa', '2022-04-08 02:40:12', '2022-04-08 02:40:12', NULL),
(4, 'Bintang', 'Tere Liye', '26-04-2019', 'Gramedia Pustaka Utama', '2022-04-08 02:40:12', '2022-04-08 02:40:12', NULL),
(5, 'Surat Kecil Untuk Tuhan', 'Agnes Davonar', '23-04-2009', 'Gramedia Pustaka Utama', '2022-04-08 02:40:12', '2022-04-08 02:40:12', NULL),
(6, 'Saturnus', 'rafael', '10-03-2009', 'Angkasa', '2022-04-08 02:46:02', '2022-04-08 02:48:16', '2022-04-08 02:48:16'),
(7, 'Uranus', 'alucard', '10-03-2010', 'Angkasara', '2022-04-08 02:46:38', '2022-04-08 02:46:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `books_categories`
--

CREATE TABLE `books_categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `books_categories`
--

INSERT INTO `books_categories` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'novel', '2022-04-08 02:41:23', '2022-04-08 02:41:23', NULL),
(2, 'Jurnal Ilmiah', '2022-04-08 02:41:23', '2022-04-08 02:41:23', NULL),
(3, 'Pendidikan', '2022-04-08 02:41:23', '2022-04-08 02:41:23', NULL),
(4, 'dfjdfdfdf', '2022-04-08 03:29:42', '2022-04-08 03:31:55', '2022-04-08 03:31:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-04-07-033901', 'App\\Database\\Migrations\\Books', 'default', 'App', 1649403530, 1),
(2, '2022-04-07-035146', 'App\\Database\\Migrations\\BooksCategories', 'default', 'App', 1649403531, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `books_categories`
--
ALTER TABLE `books_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `books_categories`
--
ALTER TABLE `books_categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
