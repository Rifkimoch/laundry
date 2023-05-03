-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2023 pada 07.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisa_laundry_local`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_admin` tinyint(2) NOT NULL COMMENT '1 Aktif, 2 Tidak aktif',
  `waktu_terakhir_login` datetime DEFAULT NULL,
  `is_delete` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 Tidak dihapus, 1 Dihapus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_customer` tinyint(4) NOT NULL COMMENT '1 Aktif, 2 Tidak aktif',
  `waktu_terakhir_login` datetime DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 Tidak dihapus, 1 Dihapus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lndr_cucian`
--

CREATE TABLE `lndr_cucian` (
  `id_cucian` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `waktu_cucian_masuk` datetime NOT NULL,
  `waktu_cucian_mulai` datetime DEFAULT NULL,
  `waktu_cucian_selesai` datetime DEFAULT NULL,
  `waktu_perkiraan_selesai` datetime NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_cucian` int(11) NOT NULL COMMENT '1 Menunggu, 2 Proses Cuci, 3 Selesai, 4 Dibatalkan',
  `is_delete` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 Tidak dihapus, 1 Dihapus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lndr_cucian_detail`
--

CREATE TABLE `lndr_cucian_detail` (
  `id_cucian_detail` int(11) NOT NULL,
  `id_cucian` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_delete` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 Tidak dihapus, 1 Dihapus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lndr_item`
--

CREATE TABLE `lndr_item` (
  `id_item` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_diskon` int(11) NOT NULL,
  `is_diskon` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 Tidak diskon, 1 Diskon',
  `is_delete` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 Tidak dihapus, 1 Dihapus',
  `Foto_item` varchar(200) NOT NULL,
  `userfile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lndr_item`
--

INSERT INTO `lndr_item` (`id_item`, `nama_item`, `harga`, `harga_diskon`, `is_diskon`, `is_delete`, `Foto_item`, `userfile`) VALUES
(31, 'cuci express', 30000, 0, 0, 0, '2.jpg', ''),
(32, 'cuci cuci saj a', 10000, 0, 0, 0, '1.jpg', ''),
(33, 'cuci express 1', 15000, 0, 0, 0, '4.jpg', ''),
(34, 'cuci express antar ', 20000, 0, 0, 0, '6.jpg', ''),
(35, 'cuci express 1 antar', 10000, 0, 0, 0, '51.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lndr_transaksi_cucian`
--

CREATE TABLE `lndr_transaksi_cucian` (
  `id_transaksi_cucian` int(11) NOT NULL,
  `id_cucian` int(11) NOT NULL,
  `nomor_invoice` varchar(100) NOT NULL,
  `waktu_transaksi_dibuat` datetime NOT NULL,
  `waktu_transaksi_berakhir` datetime NOT NULL,
  `waktu_transaksi_dibayar` datetime DEFAULT NULL,
  `foto_bukti_pembayaran` varchar(255) NOT NULL,
  `tipe_pembayaran` tinyint(2) NOT NULL COMMENT '1 Tunai, 2 Non tunai',
  `status_pembayaran` tinyint(2) NOT NULL COMMENT '1 Belum, 2 Sudah, 3 Gagal',
  `service_code` varchar(10) DEFAULT NULL,
  `redirect_url` text DEFAULT NULL,
  `redirect_data` longtext DEFAULT NULL,
  `nomor_virtual_account` varchar(30) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 Tidak dihapus, 1 Dihapus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `nomor_telfon` varchar(20) DEFAULT NULL,
  `jenis_kelamin` tinyint(2) DEFAULT NULL COMMENT '1 Laki-laki, 2 Perempuan',
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto_user` varchar(255) DEFAULT NULL,
  `status_user` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1 Aktif, 2 Tidak aktif',
  `waktu_terakhir_login` datetime DEFAULT NULL,
  `date_created` varchar(200) NOT NULL,
  `is_delete` tinyint(2) NOT NULL DEFAULT 0 COMMENT '1 Dihapus, 0 Tidak dihapus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `hak_akses`, `email`, `password`, `nama_user`, `nomor_telfon`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `foto_user`, `status_user`, `waktu_terakhir_login`, `date_created`, `is_delete`) VALUES
(9, 2, 'alwi@gmail.com', '$2y$10$uLrHijX28A155hveHWbBD.QQCe7nolSPwqm0DOz0q2/q2N1U0Vzzu', 'alwihafiz', '0000', 1, NULL, 'kiarapandak', 'default.jpg', 1, NULL, '1681697899', 0),
(10, 1, 'rifki@gmail.com', '$2y$10$2YouTFr8OJy6gGQNHqeG7u.RoNubJCJwl2VqfZbka28R7VeiJPo9a', 'rifkimuhammadfauzi', '0855238247577', 1, NULL, 'kiarapandak', 'default.jpg', 1, NULL, '1681697921', 0),
(11, 1, 'dwi@gmail.com', '$2y$10$ML1RJkFzNBLLocOjF0fqC.2Q60cApPHR7ohFiG6WlQv6t/tL5jSDK', 'dwi', '0855238247577', 1, NULL, 'kiarapandak', 'default.jpg', 1, NULL, '1682557745', 0),
(12, 2, 'hafiz@gmail.com', '$2y$10$erlNeaN/wohejIfF8k4ovu04Z.6e.FJ/mSfC2gO0KCQWONLXNDBnW', 'Hafiz Ahmad Ramdani', '0855238282828', 1, NULL, 'Kp.kiarapandak rt 004 rw 001 desa sukamaju kec.pagerageung kab.Tasikmalaya,jawa barat', 'default.jpg', 1, NULL, '1683091380', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `lndr_cucian`
--
ALTER TABLE `lndr_cucian`
  ADD PRIMARY KEY (`id_cucian`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `lndr_cucian_detail`
--
ALTER TABLE `lndr_cucian_detail`
  ADD PRIMARY KEY (`id_cucian_detail`),
  ADD KEY `id_cucian` (`id_cucian`),
  ADD KEY `id_item` (`id_item`);

--
-- Indeks untuk tabel `lndr_item`
--
ALTER TABLE `lndr_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `lndr_transaksi_cucian`
--
ALTER TABLE `lndr_transaksi_cucian`
  ADD PRIMARY KEY (`id_transaksi_cucian`),
  ADD KEY `id_cucian` (`id_cucian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lndr_cucian_detail`
--
ALTER TABLE `lndr_cucian_detail`
  MODIFY `id_cucian_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lndr_item`
--
ALTER TABLE `lndr_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `lndr_transaksi_cucian`
--
ALTER TABLE `lndr_transaksi_cucian`
  MODIFY `id_transaksi_cucian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `lndr_cucian`
--
ALTER TABLE `lndr_cucian`
  ADD CONSTRAINT `lndr_cucian_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Ketidakleluasaan untuk tabel `lndr_cucian_detail`
--
ALTER TABLE `lndr_cucian_detail`
  ADD CONSTRAINT `lndr_cucian_detail_ibfk_1` FOREIGN KEY (`id_cucian`) REFERENCES `lndr_cucian` (`id_cucian`),
  ADD CONSTRAINT `lndr_cucian_detail_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `lndr_item` (`id_item`);

--
-- Ketidakleluasaan untuk tabel `lndr_transaksi_cucian`
--
ALTER TABLE `lndr_transaksi_cucian`
  ADD CONSTRAINT `lndr_transaksi_cucian_ibfk_1` FOREIGN KEY (`id_cucian`) REFERENCES `lndr_cucian` (`id_cucian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
