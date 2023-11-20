-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 20 Nov 2023 pada 14.00
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas_mingguan`
--

CREATE TABLE `aktivitas_mingguan` (
  `id_aktivitas` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tilawah` int(11) NOT NULL,
  `murajaah` int(11) NOT NULL,
  `puasa_sunnah` int(11) NOT NULL,
  `tahajjud` int(11) NOT NULL,
  `dhuha` int(11) NOT NULL,
  `infaq` tinyint(1) NOT NULL,
  `wirid` int(11) NOT NULL,
  `olahraga` int(11) NOT NULL,
  `telpon_ortu` tinyint(1) NOT NULL,
  `tahfiz_tahsin` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembinaan`
--

CREATE TABLE `pembinaan` (
  `id_pembinaan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `teks_pembinaan` varchar(255) NOT NULL,
  `jam` smallint(3) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembinaan`
--

INSERT INTO `pembinaan` (`id_pembinaan`, `id`, `teks_pembinaan`, `jam`, `tanggal`) VALUES
(4, 1, 'Training Kepengurusan', 120, '2023-11-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `jabatan`, `foto_profil`) VALUES
(1, 'Rifqi Abdulaziz', 'msu123', 'Penghuni', 'foto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktivitas_mingguan`
--
ALTER TABLE `aktivitas_mingguan`
  ADD PRIMARY KEY (`id_aktivitas`),
  ADD KEY `id_fk_am` (`id`);

--
-- Indeks untuk tabel `pembinaan`
--
ALTER TABLE `pembinaan`
  ADD PRIMARY KEY (`id_pembinaan`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktivitas_mingguan`
--
ALTER TABLE `aktivitas_mingguan`
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembinaan`
--
ALTER TABLE `pembinaan`
  MODIFY `id_pembinaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aktivitas_mingguan`
--
ALTER TABLE `aktivitas_mingguan`
  ADD CONSTRAINT `aktivitas_mingguan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `id_fk_am` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `test` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembinaan`
--
ALTER TABLE `pembinaan`
  ADD CONSTRAINT `pembinaan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
