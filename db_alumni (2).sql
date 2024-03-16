-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 14.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin_202316`
--

CREATE TABLE `tb_admin_202316` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin_202316`
--

INSERT INTO `tb_admin_202316` (`id_admin`, `nama`, `alamat`, `tanggal_lahir`, `email`, `password`) VALUES
(1, 'Admin Pondok', 'perintis kemerdekaan 7', '2022-05-04', 'adminpondok@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni_202316`
--

CREATE TABLE `tb_alumni_202316` (
  `id_alumni` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `no_handphone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_alumni_202316`
--

INSERT INTO `tb_alumni_202316` (`id_alumni`, `nama`, `nis`, `alamat`, `tanggal_lahir`, `no_handphone`, `email`, `id_angkatan`, `pekerjaan`, `foto`, `password`) VALUES
(22, 'Nirwana Amir', '202316', 'Jeneponto', '2023-06-16', '08229102827', 'nirwanaaa20@gmail.com', 3, 'developer', 'img/avatars-000338744228-1fybqc-t240x240.jpg', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_angkatan_202316`
--

CREATE TABLE `tb_angkatan_202316` (
  `id_angkatan` int(11) NOT NULL,
  `angkatan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_angkatan_202316`
--

INSERT INTO `tb_angkatan_202316` (`id_angkatan`, `angkatan`) VALUES
(3, 2016),
(4, 2017),
(5, 2018),
(6, 2019),
(7, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuisioner_202316`
--

CREATE TABLE `tb_kuisioner_202316` (
  `id` int(100) NOT NULL,
  `p1` varchar(100) NOT NULL,
  `p2` varchar(100) NOT NULL,
  `p3` varchar(100) NOT NULL,
  `p4` varchar(100) NOT NULL,
  `p5` varchar(100) NOT NULL,
  `p6` varchar(100) NOT NULL,
  `p7` varchar(100) NOT NULL,
  `p8` varchar(100) NOT NULL,
  `p9` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kuisioner_202316`
--

INSERT INTO `tb_kuisioner_202316` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`) VALUES
(1, 'sangat baik', 'baik', 'kurang', 'cukup', 'cukup', 'baik', 'kurang', 'baik', 'cukup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_loker_202316`
--

CREATE TABLE `tb_loker_202316` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `syarat` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `mulai` varchar(100) NOT NULL,
  `akhir` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_loker_202316`
--

INSERT INTO `tb_loker_202316` (`id`, `title`, `provinsi`, `syarat`, `tipe`, `mulai`, `akhir`, `link`) VALUES
(1, 'Lowongan Kerja Staff Admin PT PANCARAN GEMILANG AB', 'Sulawesi Selatan', 'minimal lulusan SMA/SMK', 'magang', '2023-06-13', '2023-06-20', 'https://www.topkarir.com/lowongan/perusahaan/pancaran-gemilang-abadi'),
(2, 'Staff Administrasi PT Mustika Karya Abadi', 'Sulawesi Selatan', 'Diploma/D1/D2/D3, Sarjana / S1', 'fulltime', '2023-06-20', '2023-06-30', 'https://www.loker.id/profile/pt-mustika-karya-abadi'),
(3, 'PNS Duri Kosambi', 'Sulawesi Selatan', 'minimal lulusan SMA/SMK', 'Fulltime', '2023-06-02', '2023-06-08', 'http://www.simpeg.kkppjb.com/?module=pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_202316`
--

CREATE TABLE `tb_user_202316` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user_202316`
--

INSERT INTO `tb_user_202316` (`id_user`, `nama`, `alamat`, `tanggal_lahir`, `email`, `password`) VALUES
(2, 'user', '2023-05-05', 'Makassar', 'user@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin_202316`
--
ALTER TABLE `tb_admin_202316`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_alumni_202316`
--
ALTER TABLE `tb_alumni_202316`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `id_angkatan` (`id_angkatan`);

--
-- Indeks untuk tabel `tb_angkatan_202316`
--
ALTER TABLE `tb_angkatan_202316`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indeks untuk tabel `tb_kuisioner_202316`
--
ALTER TABLE `tb_kuisioner_202316`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_loker_202316`
--
ALTER TABLE `tb_loker_202316`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_202316`
--
ALTER TABLE `tb_user_202316`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin_202316`
--
ALTER TABLE `tb_admin_202316`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_alumni_202316`
--
ALTER TABLE `tb_alumni_202316`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_angkatan_202316`
--
ALTER TABLE `tb_angkatan_202316`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_kuisioner_202316`
--
ALTER TABLE `tb_kuisioner_202316`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_loker_202316`
--
ALTER TABLE `tb_loker_202316`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user_202316`
--
ALTER TABLE `tb_user_202316`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_alumni_202316`
--
ALTER TABLE `tb_alumni_202316`
  ADD CONSTRAINT `tb_alumni_202316_ibfk_2` FOREIGN KEY (`id_angkatan`) REFERENCES `tb_angkatan_202316` (`id_angkatan`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
