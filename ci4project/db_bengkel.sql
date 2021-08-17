-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2021 pada 12.20
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cus` int(11) NOT NULL,
  `no_pol` varchar(10) DEFAULT NULL,
  `nama_cus` varchar(255) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `alamat_cus` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `tipe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cus`, `no_pol`, `nama_cus`, `telp`, `alamat_cus`, `merk`, `tipe`) VALUES
(1, 'P457XY', 'Supardi', '089736473643', 'Jl. Jambangan No.10', 'Yamaha', 'Yamaha Mio Z'),
(2, 'B4573XY', 'Joko', '83849584', 'Jl. Jakarta', 'Honda', 'Honda Beat 125cc'),
(3, 'qwe1231231', 'CASH', '1234567', 'Surabaya', 'Honda', 'Supra 125'),
(4, '1231231231', 'tes', '123', 'tes', 'Honda', 'CBR150');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_supp` int(11) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `id_user`, `id_supp`, `nama_barang`, `qty`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 'Oil Seal', 2, 20000, 40000, '2021-08-14 18:26:19', '2021-08-14 18:26:19'),
(3, 17, NULL, 'Jasa Service', 99999, NULL, NULL, '2021-08-16 14:48:05', '2021-08-16 14:48:05'),
(4, 17, NULL, 'Ban KRX', 2, 2000, 3000, '2021-08-16 10:54:06', '2021-08-16 23:53:18'),
(8, 17, 2, 'Ban KRX', 3, 2000, 3000, '2021-08-16 23:58:57', '2021-08-16 23:58:57'),
(9, 17, 1, 'Ban dalam IRC', 2, 3000, 4500, '2021-08-16 23:59:11', '2021-08-16 23:59:11'),
(11, 17, 2, 'Ban KRX 300', 2, 1000, 1500, '2021-08-17 01:32:32', '2021-08-17 01:32:32'),
(13, 17, NULL, 'Ban Racing RX', 10, 300000, 400000, '2021-08-17 01:58:12', '2021-08-17 02:00:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekanik`
--

CREATE TABLE `mekanik` (
  `id_mekanik` int(11) NOT NULL,
  `nama_mekan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mekanik`
--

INSERT INTO `mekanik` (`id_mekanik`, `nama_mekan`, `alamat`, `notelp`) VALUES
(1, 'Sujito', 'Ngagel', '12123123'),
(2, 'Febrian Dimas Winaputra', 'Surabaya', '12346');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `inv_nota` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id_nota`, `inv_nota`) VALUES
(1, 'SRV/2021/1'),
(2, 'SRV/2021/2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supp` int(11) NOT NULL,
  `nama_supp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supp`, `nama_supp`, `alamat`, `notelp`) VALUES
(1, 'Aldi ', 'Surabaya', '123456789'),
(2, 'Febrian Dimas Winaputra', 'Surabaya', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trx` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_mekanik` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_cus` int(11) DEFAULT NULL,
  `id_nota` int(11) DEFAULT NULL,
  `invoice` varchar(50) DEFAULT NULL,
  `jenis_trx` varchar(255) DEFAULT NULL,
  `keluhan` varchar(255) DEFAULT NULL,
  `qty_trx` int(11) DEFAULT NULL,
  `harga_trx` double DEFAULT NULL,
  `harga_totaltrx` double DEFAULT NULL,
  `km_datang` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trx`, `id_barang`, `id_mekanik`, `id_user`, `id_cus`, `id_nota`, `invoice`, `jenis_trx`, `keluhan`, `qty_trx`, `harga_trx`, `harga_totaltrx`, `km_datang`, `created_at`, `updated_at`) VALUES
(8, 3, 1, 17, 2, NULL, 'SRV/2021/1', NULL, 'qwe', 2, 3000, 6000, 1000, '2021-08-16 10:40:24', '2021-08-16 10:40:24'),
(11, 4, 2, 17, 2, NULL, 'SRV/2021/2', NULL, 'rusak', 2, 3000, 6000, 1000, '2021-08-16 11:06:34', '2021-08-16 11:06:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `alamat`, `notelp`, `role`) VALUES
(17, 'vino', '123', 'Vinorious', 'ngagel', '123456', NULL),
(18, 'vice', '123', 'rosidig', 'jombangg', '123467', 'admin'),
(19, 'vice', '123', 'rosidi', 'jombang', '12346', 'admin'),
(26, 'dimas', '123', 'Febrian Dimas Winaputra', 'Surabaya', '12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indeks untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `master_barang_fk0` (`id_user`),
  ADD KEY `master_barang_fk1` (`id_supp`);

--
-- Indeks untuk tabel `mekanik`
--
ALTER TABLE `mekanik`
  ADD PRIMARY KEY (`id_mekanik`);

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supp`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `transaksi_fk0` (`id_barang`),
  ADD KEY `transaksi_fk1` (`id_mekanik`),
  ADD KEY `transaksi_fk2` (`id_user`),
  ADD KEY `transaksi_fk3` (`id_cus`),
  ADD KEY `transaksi_fk4` (`id_nota`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD CONSTRAINT `master_barang_fk0` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `master_barang_fk1` FOREIGN KEY (`id_supp`) REFERENCES `supplier` (`id_supp`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_fk0` FOREIGN KEY (`id_barang`) REFERENCES `master_barang` (`id_barang`),
  ADD CONSTRAINT `transaksi_fk1` FOREIGN KEY (`id_mekanik`) REFERENCES `mekanik` (`id_mekanik`),
  ADD CONSTRAINT `transaksi_fk2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_fk3` FOREIGN KEY (`id_cus`) REFERENCES `customer` (`id_cus`),
  ADD CONSTRAINT `transaksi_fk4` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
