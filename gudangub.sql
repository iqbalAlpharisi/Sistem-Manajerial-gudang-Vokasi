-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2023 pada 16.15
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudangub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar`
--

CREATE TABLE `keluar` (
  `idkeluar` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `kode` varchar(225) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluar`
--

INSERT INTO `keluar` (`idkeluar`, `idbarang`, `kode`, `jumlah`, `tanggal_keluar`) VALUES
(11, 53, '', 2, '2023-12-10 17:00:00'),
(12, 58, '', 1, '2023-12-12 17:00:00'),
(13, 60, '', 12, '2023-12-14 17:00:00'),
(14, 60, '', 13, '2023-12-15 17:00:00'),
(15, 59, '', 2, '2023-12-16 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_user`
--

CREATE TABLE `login_user` (
  `iduser` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_depan` varchar(225) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `profile` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_user`
--

INSERT INTO `login_user` (`iduser`, `email`, `password`, `nama_depan`, `nama_belakang`, `tlp`, `alamat`, `kota`, `kecamatan`, `profile`) VALUES
(0, 'iqbal@gmail.com', 'user123', 'iqbal', 'al farisi', '0999', 'jalan lurus', 'mojok', 'hilang', '92271cbf0187222dd0e4b5515e448bef.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `idmasuk` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`idmasuk`, `idbarang`, `jumlah`, `tanggal_masuk`) VALUES
(18, 54, 10, '2023-12-07 17:00:00'),
(20, 56, 2, '2023-12-19 17:00:00'),
(21, 59, 2, '2023-12-17 17:00:00'),
(22, 60, 2, '2023-12-17 17:00:00'),
(23, 58, 12, '2023-12-19 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idpeminjaman` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `namapeminjam` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `namabarang` varchar(225) NOT NULL,
  `qty` varchar(225) NOT NULL,
  `tanggal_peminjaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(225) NOT NULL DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`idpeminjaman`, `idbarang`, `namapeminjam`, `kode`, `namabarang`, `qty`, `tanggal_peminjaman`, `status`) VALUES
(17, 56, 'Dejavu', '', '', '4', '2023-12-20 17:00:00', 'Kembali'),
(18, 60, 'fauzan', '', '', '1', '2023-12-19 17:00:00', 'Dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `idbarang` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(99) DEFAULT NULL,
  `status_barang` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`idbarang`, `kode`, `namabarang`, `kategori`, `stock`, `deskripsi`, `image`, `status_barang`) VALUES
(56, '0178020239020908', 'kelas', 'ruangan', 6, 'Kelas Milik bersama', '7c4046db0c60fb60e9992a92aa903a24.png', ''),
(58, '129948349839', 'Pensil', 'Alat Tulis', 41, 'jfdkfhajkjkfaj', 'd5a031ac23828cda45a95590d1a120bf.', ''),
(59, '232398293880120', 'Pulpen', 'Alat Tulis', 16, 'Pulpen jdjsdjkjask', 'f82a6c20ca5bfb2ac4cb3c09496f55df.', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idpeminjaman`);

--
-- Indeks untuk tabel `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idbarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keluar`
--
ALTER TABLE `keluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idpeminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `stock`
--
ALTER TABLE `stock`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
