-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2019 pada 08.29
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Agus Cahyadi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN'),
(2, 'eko', 'ukm', 'e5ea9b6d71086dfef3a15f726abcc5bf', 'UKM'),
(3, 'Rohman', 'desa', 'e54cc06625bbadf12163b41a3cb92bf8', 'DESA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Keripik'),
(4, 'Kerupuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `nama_produk`, `deskripsi`, `harga`, `units`, `total`, `date`, `email`) VALUES
(1, 'keripik pedas', 'Keripik pedas khas indonesia sangat terasa bumbu', 50000, 1, 50000, '2019-11-02 17:00:00', 'agus'),
(2, 'keripik pedas', 'Keripik pedas khas indonesia sangat terasa bumbu\"a', 50000, 1, 50000, '2019-11-01 17:00:00', 'agus'),
(5, 'Pisang', 'pisang khas Indonesia', 3000, 1, 3000, '2019-11-04 08:20:27', 'agusc'),
(6, 'Singkong', 'seingkong khas Indonesia', 2000, 3, 6000, '2019-11-04 08:45:04', 'eko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pameran`
--

CREATE TABLE `pameran` (
  `id_pameran` int(11) NOT NULL,
  `id_user_ukm` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `nama_pameran` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `biaya` varchar(55) NOT NULL,
  `peserta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pameran`
--

INSERT INTO `pameran` (`id_pameran`, `id_user_ukm`, `id_ukm`, `nama_pameran`, `tempat`, `tanggal`, `waktu`, `biaya`, `peserta`) VALUES
(11, 1, 1, 'Evaluasi wilayah kegiatan', 'Tangerang', '2019-11-23', '12:32:00', '250000', '25'),
(12, 2, 1, 'Evaluasi wilayah kegiatan', 'Tangerang', '2019-11-23', '12:32:00', '250000', '25'),
(13, 1, 1, 'proses persiapan produktifitas', 'Tangerang', '2019-11-03', '14:03:00', '250000', '25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `id_user_ukm` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `nama_pelatihan` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `peserta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `id_user_ukm`, `id_ukm`, `nama_pelatihan`, `tempat`, `tanggal`, `waktu`, `peserta`) VALUES
(7, 1, 1, 'Seminar Internal', 'cisoka, Tangerang', '2019-11-11', '02:10:00', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_user_ukm` int(11) NOT NULL,
  `kategori_id` varchar(12) NOT NULL,
  `nama_produk` varchar(70) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(6) NOT NULL,
  `qty` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_user_ukm`, `kategori_id`, `nama_produk`, `deskripsi`, `harga`, `qty`, `foto`) VALUES
(58, 3, '4', 'Pisang', 'pisang khas Indonesia', '3000', 10, 'img/keripik.jpeg'),
(60, 1, '1', 'Singkong', 'seingkong khas Indonesia', '2000', 9, 'img/keripik.jpeg'),
(71, 1, '1', 'Pisang', 'pisang khas Indonesia', '3000', 15, 'img/keripik.jpeg'),
(72, 47, '1', 'keripik pedas1', 'Keripik pedas khas indonesia sangat terasa bumbu1', '2000', 12, 'img/sid.jpeg'),
(73, 1, '4', 'Keripik Kentang', 'Keripik pedas khas indonesia sangat terasa bumbu1', '3000', 14, 'img/keripik.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukm`
--

CREATE TABLE `ukm` (
  `id_ukm` int(11) NOT NULL,
  `id_user_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(50) NOT NULL,
  `pemilik_ukm` varchar(55) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_telp` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ukm`
--

INSERT INTO `ukm` (`id_ukm`, `id_user_ukm`, `nama_ukm`, `pemilik_ukm`, `alamat`, `no_telp`) VALUES
(1, 1, 'vina home', 'vina', 'cisoka, Tangerang', '123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `pass` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `alamat`, `no_telp`, `pass`) VALUES
(1, 'agusc', 'agusc.dev02@gmail.com', 'Rajeg, Tangerang', '085778783602', 'fdf169558242'),
(2, 'eko', 'eko@gmail.com', 'cikupa, Tangerang', '12345678912', 'e5ea9b6d7108');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_ukm`
--

CREATE TABLE `user_ukm` (
  `id_user_ukm` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `pass` char(20) NOT NULL,
  `fhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_ukm`
--

INSERT INTO `user_ukm` (`id_user_ukm`, `username`, `email`, `alamat`, `no_telp`, `pass`, `fhoto`) VALUES
(1, 'vina', 'vina@gmail.com', 'cisoka, Tangerang', '12345', '4590db67d440b059ac31', 'img/pp.jpg'),
(46, 'agus', 'aguscahyadi1988@gmail.com', 'Rajeg, Tangerang', '08577878360', '56d37d0e3096e792ee1d', 'img/agus.jpeg'),
(47, 'rohman', 'rohman@gmail.com', 'cikupa, Tangerang', '1234567891223', '2397977a0e43fb1f5ee2', 'img/belajar.jpeg'),
(48, 'budi', 'budi@gmail.com', 'cisoka, Tangerang1', '1234567891', '00dfc53ee86af02e7425', 'img/koperasi.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pameran`
--
ALTER TABLE `pameran`
  ADD PRIMARY KEY (`id_pameran`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_ukm`
--
ALTER TABLE `user_ukm`
  ADD PRIMARY KEY (`id_user_ukm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pameran`
--
ALTER TABLE `pameran`
  MODIFY `id_pameran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_ukm`
--
ALTER TABLE `user_ukm`
  MODIFY `id_user_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
