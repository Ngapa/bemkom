-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2021 pada 05.50
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesankontak`
--

CREATE TABLE `pesankontak` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `semester` char(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesankontak`
--

INSERT INTO `pesankontak` (`id_pesan`, `nama`, `prodi`, `semester`, `pesan`, `tanggal`) VALUES
(1, 'amar', 'Teknik Informatika', '3', 'ini hanya percobaan jangan Baper Yaaaa!\r\nSemangaaaat!!!', '2021-01-25 05:48:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesankontak`
--
ALTER TABLE `pesankontak`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesankontak`
--
ALTER TABLE `pesankontak`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
