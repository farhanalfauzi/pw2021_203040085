-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2021 pada 15.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040085`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelang`
--

CREATE TABLE `gelang` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Product Name` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` int(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gelang`
--

INSERT INTO `gelang` (`id`, `Picture`, `Product Name`, `Description`, `Price`, `Category`) VALUES
(1, '1.jpg', 'Gelang Tenun Etnik', 'Terbuat dari tali tenun, cocok digunakan sehari-hari', 15000, 'Tenun Etnik'),
(2, '2.jpg', 'Gelang Tenun Etnik', 'Terbuat dari tali tenun, cocok digunakan sehari-hari', 15000, 'Tenun Etnik'),
(3, '3.jpg', 'Gelang Simple Paracord', 'Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari', 7000, 'Simple Paracord'),
(4, '4.jpg', 'Gelang Simple Paracord', 'Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari', 7000, 'Simple Paracord'),
(5, '5.jpg', 'Gelang Simple Paracord', 'Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari', 7000, 'Simple Paracord'),
(6, '6.jpg', 'Gelang Simple Paracord', 'Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari', 7000, 'Simple Paracord'),
(7, '7.jpg', 'Gelang Simple Paracord', 'Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari', 7000, 'Simple Paracord'),
(8, '8.jpg', 'Gelang Simple Paracord', 'Terbuat dari tali paracord 4mm, cocok digunakan sehari-hari', 7000, 'Simple Paracord'),
(9, '9.jpg', 'Gelang Simple Prusik', 'Terbuat dari tali prusik 2mm, cocok digunakan sehari-hari', 4000, 'Simple Prusik'),
(10, '10.jpg', 'Gelang Simple Prusik', 'Terbuat dari tali prusik 2mm, cocok digunakan sehari-hari', 4000, 'Simple Prusik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gelang`
--
ALTER TABLE `gelang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gelang`
--
ALTER TABLE `gelang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
