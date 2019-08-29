-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 09:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

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
(2, 'eko', 'ekoas', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN');

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
(1, 'Makanan'),
(2, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_produk` int(3) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `omset` varchar(10) NOT NULL,
  `waktu` time NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama_produk`, `deskripsi`, `harga`, `units`, `total`, `date`, `email`) VALUES
(24, 'Kamera', 'canon D600', 350000, 1, 350000, '2019-08-11 10:16:51', 'pujiyati'),
(25, 'Kamera', 'canon D600', 350000, 1, 350000, '2019-08-11 10:22:39', 'pujiyati'),
(26, 'Kamera', 'canon D600', 350000, 1, 350000, '2019-08-11 10:23:22', 'pujiyati'),
(27, 'Baju Kemeja Anak', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 150000, 1, 150000, '2019-08-11 10:24:36', 'pujiyati'),
(28, 'Baju Kemeja Anak', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 150000, 1, 150000, '2019-08-11 10:25:49', 'pujiyati'),
(29, 'Baju Kemeja Anak', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 150000, 1, 150000, '2019-08-11 10:26:06', 'pujiyati'),
(30, 'Baju Kemeja Anak', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 150000, 1, 150000, '2019-08-11 10:26:58', 'pujiyati'),
(31, 'Baju Kemeja Anak', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 150000, 1, 150000, '2019-08-11 10:37:48', 'pujiyati'),
(32, 'Baju', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 500000, 1, 500000, '2019-08-11 10:50:15', 'pujiyati'),
(33, 'Baju cewe', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 550000, 1, 550000, '2019-08-11 10:51:02', 'agus'),
(34, 'kulkas', 'Elektonik import dari jepang dan jerman', 200000, 1, 200000, '2019-08-11 11:03:32', 'pujiyati'),
(35, 'kulkas', 'Elektonik import dari jepang dan jerman', 200000, 1, 200000, '2019-08-11 11:04:07', 'agus'),
(36, 'kulkas', 'Elektonik import dari jepang dan jerman', 200000, 1, 200000, '2019-08-11 11:17:28', 'agus'),
(37, 'kulkas', 'Elektonik import dari jepang dan jerman', 200000, 1, 200000, '2019-08-11 11:29:02', 'agus'),
(38, 'Baju cewe', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 550000, 1, 550000, '2019-08-12 03:19:38', 'agus'),
(39, 'kulkas', 'Elektonik import dari jepang dan jerman', 200000, 6, 1200000, '2019-08-13 03:22:54', 'agus'),
(40, 'kulkas', 'Elektonik import dari jepang dan jerman', 200000, 5, 1000000, '2019-08-13 03:24:06', 'agus'),
(41, 'kulkas', 'Elektonik import dari jepang dan jerman', 200000, 5, 1000000, '2019-08-13 03:26:49', 'agus'),
(42, 'Baju', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', 500000, 1, 500000, '2019-08-13 03:36:41', 'agus'),
(43, 'Strika', 'Elektonik import dari jepang', 350000, 1, 350000, '2019-08-13 03:38:14', 'pujiyati');

-- --------------------------------------------------------

--
-- Table structure for table `pameran`
--

CREATE TABLE `pameran` (
  `id_pameran` int(11) NOT NULL,
  `nama_pameran` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `waktu` time NOT NULL,
  `peserta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pameran`
--

INSERT INTO `pameran` (`id_pameran`, `nama_pameran`, `tempat`, `waktu`, `peserta`) VALUES
(1, 'Bazar', 'Tangerang', '12:04:00', '150'),
(4, 'Photografi', 'Bandung', '09:00:00', '100');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `nama_pelatihan` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `peserta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nama_pelatihan`, `tempat`, `waktu`, `peserta`) VALUES
(3, 'Traning Kuliner2', 'Tangerang2', '2019-07-25', '152'),
(4, 'Traning Otomotif2', 'Jakarta2', '2019-07-25', '502');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(70) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(6) NOT NULL,
  `qty` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `qty`, `foto`) VALUES
(3, 'Baju', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', '500000', 48, 'img/image28.jpg'),
(4, 'Baju cewe', 'Model Baju kemeja anak improt dari korea yang selalu terjual di negara Indonesia karna kwalitasnya.', '550000', 48, 'img/image28.jpg'),
(5, 'Strika', 'Elektonik import dari jepang', '350000', 34, 'img/image28.jpg'),
(7, 'kulkas', 'Elektonik import dari jepang dan jerman', '200000', 45, 'img/image28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(30) NOT NULL,
  `milik` varchar(50) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id_ukm`, `nama_ukm`, `milik`, `alamat`, `no_telp`, `foto`) VALUES
(9, 'Konveksi', 'Agus Cahyadi', 'Tangerang', '02159331122', 'img/iron.JPG'),
(10, 'Makanan', 'Eko AS', 'Jakarta', '02133445566', 'img/ecommers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `pass` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `alamat`, `no_telp`, `pass`) VALUES
(1, 'pujiyati', 'pujiyati@gmail.com', 'Rajeg, Tangerang', '085693231030', '83d4bf0a6c7e'),
(2, 'agus', 'agus@gmail.com', 'Jakarta', '085778783602', 'fdf169558242'),
(3, 'eko', 'eko@gmail.com', 'Jakarta', '085777888866', 'e5ea9b6d7108');

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
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

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
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pameran`
--
ALTER TABLE `pameran`
  MODIFY `id_pameran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
