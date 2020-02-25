-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2020 pada 06.16
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `password_admin` varchar(20) NOT NULL,
  `status_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `nama_admin`, `password_admin`, `status_admin`) VALUES
(1, 'mimin', 'mimin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbanggota`
--

CREATE TABLE `tbanggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbanggota`
--

INSERT INTO `tbanggota` (`id_anggota`, `nama_anggota`, `alamat`, `no_telp`, `foto_ktp`) VALUES
(9, 'Galih Permadi', 'Jalan Doang Jadian Kaga', '021854554', 'Galih Permadi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbuku`
--

CREATE TABLE `tbbuku` (
  `isbn` varchar(20) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbuku`
--

INSERT INTO `tbbuku` (`isbn`, `judul_buku`, `pengarang`, `tahun_terbit`, `stok`, `foto`) VALUES
('8458422445', 'Jaringan Komputer', 'Bang Miun', '2007', 8, '8458422445.jpg'),
('8989898989', 'Algoritma Komputer', 'Bang Mamat', '2008', 5, '8989898989.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpeminjaman`
--

CREATE TABLE `tbpeminjaman` (
  `id_pinjam` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `isbn` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpeminjaman`
--

INSERT INTO `tbpeminjaman` (`id_pinjam`, `tgl_pinjam`, `isbn`, `tgl_kembali`, `id_anggota`, `status`) VALUES
('P202001150001', '2020-01-15', 2147483647, '2020-01-17', 9, 'Pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpengembalian`
--

CREATE TABLE `tbpengembalian` (
  `id_kembali` varchar(20) NOT NULL,
  `id_pinjam` varchar(20) NOT NULL,
  `tgl_kembali_aktual` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indeks untuk tabel `tbpeminjaman`
--
ALTER TABLE `tbpeminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbanggota`
--
ALTER TABLE `tbanggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
