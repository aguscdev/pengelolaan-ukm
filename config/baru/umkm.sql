-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 07:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Agus Cahyadi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN'),
(2, 'eko', 'ukm', 'e5ea9b6d71086dfef3a15f726abcc5bf', 'UKM'),
(3, 'vina', 'vina', 'e7bb4f7ed097bd6ccefc46018fda32c8', 'DESA');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Keripik'),
(4, 'Kerupuk');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
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
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama_produk`, `deskripsi`, `harga`, `units`, `total`, `date`, `email`) VALUES
(1, 'keripik pedas', 'Keripik pedas khas indonesia sangat terasa bumbu', 50000, 1, 50000, '2019-11-02 17:00:00', 'agus'),
(2, 'keripik pedas', 'Keripik pedas khas indonesia sangat terasa bumbu\"a', 50000, 1, 50000, '2019-11-01 17:00:00', 'agus'),
(5, 'Pisang', 'pisang khas Indonesia', 3000, 1, 3000, '2019-11-04 08:20:27', 'agusc'),
(6, 'Singkong', 'seingkong khas Indonesia', 2000, 3, 6000, '2019-11-04 08:45:04', 'eko'),
(7, 'Pisang', 'pisang khas Indonesia', 3000, 2, 6000, '2020-02-15 06:05:17', 'vina kartika');

-- --------------------------------------------------------

--
-- Table structure for table `pameran`
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
-- Dumping data for table `pameran`
--

INSERT INTO `pameran` (`id_pameran`, `id_user_ukm`, `id_ukm`, `nama_pameran`, `tempat`, `tanggal`, `waktu`, `biaya`, `peserta`) VALUES
(11, 1, 1, 'Evaluasi wilayah kegiatan', 'Tangerang', '2019-11-23', '12:32:00', '250000', '25'),
(12, 2, 1, 'Evaluasi wilayah kegiatan', 'Tangerang', '2019-11-23', '12:32:00', '250000', '25'),
(13, 1, 1, 'proses persiapan produktifitas', 'Tangerang', '2019-11-03', '14:03:00', '250000', '25');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
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
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `id_user_ukm`, `id_ukm`, `nama_pelatihan`, `tempat`, `tanggal`, `waktu`, `peserta`) VALUES
(7, 1, 1, 'Seminar Internal', 'cisoka, Tangerang', '2019-11-11', '02:10:00', '12');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
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
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_user_ukm`, `kategori_id`, `nama_produk`, `deskripsi`, `harga`, `qty`, `foto`) VALUES
(58, 3, '4', 'Pisang', 'pisang khas Indonesia', '3000', 8, 'img/keripik.jpeg'),
(76, 47, '4', 'Kerupuk Pedas', 'Kerupuk yang berbahan dasar dari tepung beras dan bercita rasa gurih ', '10000', 22, 'img/2740 copy.jpg'),
(77, 1, '1', 'Keripik Singkong', 'Keripik singkong dengan rasa pedas', '15000', 13, 'img/keripik pedas.jpg'),
(78, 1, '4', 'Basreng Pedas', 'Olahan Baso yang dipotong menjadi kecil dengan rasa pedas', '20000', 16, 'img/basreng.jpg'),
(79, 1, '1', 'Keripik Aceh', 'berbahan dasar tepung beras dengan rasa gurih', '10000', 12, 'img/kerupuk aceh.jpg'),
(80, 1, '4', 'Kerupuk Lenjer', 'berbahan dasar tepung beras dengan rasa gurih yang enak', '13000', 13, 'img/Lenjer.jpg'),
(83, 1, '1', 'Basreng', 'Olahan Baso dengan rasa gurih', '7500', 15, 'img/basreng gurih.jpg'),
(85, 1, '1', 'Makaroni Pedas', 'Olahan Makaroni dengan rasa pedas', '15000', 12, 'img/makaroni pedas.jpg'),
(86, 1, '4', 'Kerupuk Jablay', 'Kerupuk Bawang dengan rasa ekstra pedas dan wangi daun jeruk', '7500', 16, 'img/kerupuk jablay.jpg'),
(87, 1, '1', 'Keripik Singkong', 'Keripik Singkong dengan rasa gurih', '12500', 30, 'img/keripik gurih.jpg'),
(89, 2, '1', 'Keripik Singkong Pedas', 'Keripik singkong dengan rasa pedas', '8000', 12, 'img/keripik-setan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
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
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id_ukm`, `id_user_ukm`, `nama_ukm`, `pemilik_ukm`, `alamat`, `no_telp`) VALUES
(1, 1, 'vina home', 'vina', 'cisoka, Tangerang', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `alamat`, `no_telp`, `pass`) VALUES
(1, 'agusc', 'agusc.dev02@gmail.com', 'Rajeg, Tangerang', '085778783602', 'fdf169558242'),
(2, 'eko', 'eko@gmail.com', 'cikupa, Tangerang', '12345678912', 'e5ea9b6d7108'),
(3, 'vina kartika', 'kartikavina7@gmail.com', 'Kp. Cireundeu Ds. Cikareo Solear Tangerang', '089650764064', 'e7bb4f7ed097');

-- --------------------------------------------------------

--
-- Table structure for table `user_ukm`
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
-- Dumping data for table `user_ukm`
--

INSERT INTO `user_ukm` (`id_user_ukm`, `username`, `email`, `alamat`, `no_telp`, `pass`, `fhoto`) VALUES
(1, 'DIKARI CIREUNDEU', 'dikaricireundeu@gmail.com', 'Kp. Cireundeu Rt. 001/001 Ds. Cikareo Kec. Solear Tangerang', '081288483938', '544ab6ec7b8917abae6e', 'img/dikari cireundeu.jpg'),
(2, 'HALIMI CIREUNDEU', 'Halimicikareo12@gmail.com', 'Kp. Ancol Ds. Cikareo Solear Tangerang', '081248150759', 'e2363420702721a43189', 'img/Kerupuk Seblak.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pameran`
--
ALTER TABLE `pameran`
  ADD PRIMARY KEY (`id_pameran`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ukm`
--
ALTER TABLE `user_ukm`
  ADD PRIMARY KEY (`id_user_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pameran`
--
ALTER TABLE `pameran`
  MODIFY `id_pameran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_ukm`
--
ALTER TABLE `user_ukm`
  MODIFY `id_user_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
