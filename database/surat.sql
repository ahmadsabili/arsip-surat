-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2022 pada 14.58
-- Versi server: 10.6.9-MariaDB-log
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sifat_surat`
--

CREATE TABLE `sifat_surat` (
  `id_sifat` int(11) NOT NULL,
  `sifat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sifat_surat`
--

INSERT INTO `sifat_surat` (`id_sifat`, `sifat`) VALUES
(1, 'Umum'),
(2, 'Rahasia'),
(3, 'Segera'),
(4, 'Penting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_id` int(11) DEFAULT NULL,
  `tujuan` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tembusan` varchar(255) NOT NULL,
  `tanggal_surat` varchar(255) NOT NULL,
  `ringkasan` varchar(255) DEFAULT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_id` int(11) DEFAULT NULL,
  `tujuan` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tembusan` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `ringkasan` varchar(255) DEFAULT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `role`) VALUES
(3, 'Admin', 'admin', '$2y$10$litsK6soBPWpudxZFmze5.nsa8EgIFkz8.y9dR7aE2L9c.mQuE.Ua', 'admin'),
(4, 'User 1', 'user', '$2y$10$DzbPV1LfYC8S8.SUFuKQu.S3Rd//MV2eD/KT0KpkeSKcOLBV0j1i.', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sifat_surat`
--
ALTER TABLE `sifat_surat`
  ADD PRIMARY KEY (`id_sifat`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD KEY `sifat_id` (`sifat_id`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`),
  ADD KEY `sifat_id` (`sifat_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sifat_surat`
--
ALTER TABLE `sifat_surat`
  MODIFY `id_sifat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`sifat_id`) REFERENCES `sifat_surat` (`id_sifat`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`sifat_id`) REFERENCES `sifat_surat` (`id_sifat`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
