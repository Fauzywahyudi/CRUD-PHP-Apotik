-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2020 pada 07.19
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apotik_160059`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apotik_obat`
--

CREATE TABLE `apotik_obat` (
  `kdobat` varchar(15) NOT NULL,
  `nmobat` varchar(50) NOT NULL,
  `jnsobat` varchar(15) NOT NULL,
  `hrgobat` double NOT NULL,
  `stokobat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apotik_obat`
--

INSERT INTO `apotik_obat` (`kdobat`, `nmobat`, `jnsobat`, `hrgobat`, `stokobat`) VALUES
('OBT001', 'PROMAG', 'OBAT RINGAN', 1000, 100),
('OBT002', 'BODREX', 'OBAT SEDANG', 1500, 1000),
('OBT003', 'PARACETAMOL', 'OBAT RINGAN', 5000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `apotik_transaksi`
--

CREATE TABLE `apotik_transaksi` (
  `idtrans` varchar(15) NOT NULL,
  `tgltrans` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kdobat` varchar(15) NOT NULL,
  `jmlbeli` int(11) NOT NULL,
  `total` double NOT NULL,
  `diskon` double NOT NULL,
  `totalbayar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apotik_transaksi`
--

INSERT INTO `apotik_transaksi` (`idtrans`, `tgltrans`, `kdobat`, `jmlbeli`, `total`, `diskon`, `totalbayar`) VALUES
('TRANS001', '2020-02-02 13:16:34', 'OBT001', 10, 10000, 1000, 9000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
