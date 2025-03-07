-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2024 pada 10.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdhpjl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(6) UNSIGNED NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `kategori`) VALUES
(12, 'Intel i9', '9000000', 'prosesor'),
(16, 'Motherboard Asrock H610M-HVS - LGA1700', '1100000', 'motherboard'),
(17, 'Vga RTX 4090', '12000000', ''),
(18, 'Vga RTX 4090', '13000000', 'vga'),
(19, 'Vga RTX 4090', '13000000', 'vga'),
(20, 'intel i5', '3400000', 'prosesor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `diskon` varchar(50) NOT NULL,
  `ongkos` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_barang`, `harga`, `jumlah`, `subtotal`, `status`, `kota`, `diskon`, `ongkos`, `total`) VALUES
(36, 'Intel i3', '2500000', '2', '5000000', 'Member', 'Medan', '500000', '40000', '4540000'),
(37, 'intel i9', '9000000', '1', '9000000', 'Bukan Member', 'Surabaya', '0', '5000', '9005000'),
(38, 'Intel i9', '9000000', '1', '9000000', 'Member', 'Jakarta', '900000', '20000', '8120000'),
(39, 'Intel i9', '9000000', '1', '9000000', 'Member', 'Jakarta', '900000', '20000', '8120000'),
(40, 'Intel i9', '9000000', '1', '9000000', 'Member', 'Jakarta', '900000', '20000', '8120000'),
(41, 'Intel i9', '9000000', '2', '18000000', 'Member', 'Jakarta', '1800000', '20000', '16220000'),
(42, 'Intel i9', '9000000', '3', '27000000', 'Bukan Member', 'Medan', '0', '40000', '27040000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', 'admin'),
(2, 'Nurahman', 'pegawai1', 'pegawai1', 'pegawai'),
(8, 'Sugeng', 'pegawai2', 'pegawai2', 'pegawai'),
(9, 'asep', 'asep', 'asep123', 'pegawai'),
(10, 'Saiyan', 'saiyan', 'saiyan', 'pelanggan'),
(11, 'Farhan elek', 'farhan', 'farhan', 'pelanggan'),
(12, 'MUHAMMAD HABIBURROHMAN', 'pegawai1', 'PEGAWAI11', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
