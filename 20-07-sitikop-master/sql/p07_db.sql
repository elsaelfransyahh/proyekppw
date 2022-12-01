-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 10:36 AM
-- Server version: 10.5.5-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p07_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `Id_bioskop` varchar(50) NOT NULL,
  `Nama_bioskop` varchar(50) DEFAULT NULL,
  `Lokasi` char(20) DEFAULT NULL,
  `Jam_buka` date DEFAULT NULL,
  `Jam_tutup` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coming_soon`
--

CREATE TABLE `coming_soon` (
  `kode` int(10) NOT NULL,
  `title` char(50) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming_soon`
--

INSERT INTO `coming_soon` (`kode`, `title`, `Gambar`) VALUES
(1236, 'twilight', 'twilight.JPG'),
(1237, 'Notice', 'notice.JPG'),
(1238, 'Millers', 'millers.JPG'),
(1239, 'Kimi No Nawa', 'Kimi no nawa123.JPG'),
(1240, 'twilight1', 'twilight1.JPG'),
(123422, '1231', '12321');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` char(20) NOT NULL,
  `nama_customer` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` varchar(100) NOT NULL,
  `password_daftar` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `password_daftar`, `email`, `phone_num`) VALUES
('', 'root1', 'gading@gmail.com', '09182828282'),
('admin', '1234', 'admin', '9999999'),
('gading123', 'loader321', 'gadingthebeatboxer100@gmail.com', '082210142288'),
('gading1233', 'loader321', 'gadingthebeatboxer116@gmail.com', '01010100101011'),
('gading1234', 'loader321', 'gadingthebeatboxer622@gmail.com', '23123123123123'),
('iss18000', 'mamman123', 'gadingsihite123@gmail.com', 'adadadadadadad32'),
('iss18036', '0000', 'gadingsihite1233@gmail.com', 'adadadadadadad323'),
('iss18053', 'mamman123', 'gadingthebeatboxer16@gmail.com', '3232323232323'),
('iss18055', 'loader321', 'gadingthebeatboxer3@gmail.com', '0812345567'),
('iss18057', 'apoh123', 'gadingthebeatboxer7@gmail.com', '09090909090909'),
('root3', 'root1', 'gading1@gmail.com', '09182828382');

-- --------------------------------------------------------

--
-- Table structure for table `data_signup`
--

CREATE TABLE `data_signup` (
  `username` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `kode_film` int(10) NOT NULL,
  `title` char(50) DEFAULT NULL,
  `jam_tayang` time DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `Gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`kode_film`, `title`, `jam_tayang`, `harga`, `Gambar`) VALUES
(123, '123', '08:05:05', 35000, '123'),
(1231, 'Parasit', '08:05:05', 35, 'twilight.JPG'),
(1234, 'Kimi no na wa', '08:05:05', 35, 'Kimi no nawa123.JPG'),
(1235, 'Millers', '08:05:05', 35, 'millers.JPG'),
(1236, 'Notice', '08:05:05', 35, 'notice.JPG'),
(12341, '1231', '08:05:05', 12333, '12321');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_costumer` varchar(100) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `komentar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` date NOT NULL,
  `jam_tayang` time DEFAULT NULL,
  `durasi` time DEFAULT NULL,
  `kode_film` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `no_kursi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id_daftar` varchar(100) NOT NULL,
  `password_daftar` varchar(100) NOT NULL,
  `phone_num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `nama_member` char(50) NOT NULL,
  `gender` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `banking` varchar(20) DEFAULT NULL,
  `operator` varchar(20) DEFAULT NULL,
  `paypal` varchar(20) DEFAULT NULL,
  `membership_type` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `now_playing`
--

CREATE TABLE `now_playing` (
  `kode_film` int(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `now_playing`
--

INSERT INTO `now_playing` (`kode_film`, `title`, `Gambar`, `harga`) VALUES
(1234, 'Kimi no na wa', 'Kimi no nawa123.JPG', 35000),
(1235, 'millers', 'millers.JPG', 35000),
(1236, 'notice', 'notice.JPG', 35000),
(1235, 'Tenki', 'Tenki no ko123.JPG', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(200) DEFAULT NULL,
  `id_daftar` varchar(200) DEFAULT NULL,
  `kode_film` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `kode_promo` int(18) NOT NULL,
  `tgl_berlaku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(10) NOT NULL,
  `harga_tiket` float DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `no_kursi` int(10) NOT NULL,
  `kode_promo` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` char(20) NOT NULL,
  `id_admin` varchar(50) NOT NULL,
  `id_customer` char(20) NOT NULL,
  `id_tiket` int(10) DEFAULT NULL,
  `id_jadwal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `username` varchar(200) DEFAULT NULL,
  `tanggal` varchar(200) DEFAULT NULL,
  `aksi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`username`, `tanggal`, `aksi`) VALUES
('gading1233', '10/31/20 10:00AM', 'sign up'),
('gading12322', '10/31/20 10:00AM', 'sign up'),
('admin', '10/31/20 10:00AM', 'login'),
('admin', '10/31/20 10:02AM', 'login');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`Id_bioskop`);

--
-- Indexes for table `coming_soon`
--
ALTER TABLE `coming_soon`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_num` (`phone_num`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`kode_film`),
  ADD UNIQUE KEY `Gambar` (`Gambar`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `kode_film` (`kode_film`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`no_kursi`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `now_playing`
--
ALTER TABLE `now_playing`
  ADD KEY `kode_film` (`kode_film`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`kode_promo`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `kode_promo` (`kode_promo`),
  ADD KEY `no_kursi` (`no_kursi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kode_film`) REFERENCES `film` (`kode_film`);

--
-- Constraints for table `masuk`
--
ALTER TABLE `masuk`
  ADD CONSTRAINT `masuk_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `daftar` (`id_daftar`);

--
-- Constraints for table `now_playing`
--
ALTER TABLE `now_playing`
  ADD CONSTRAINT `now_playing_ibfk_1` FOREIGN KEY (`kode_film`) REFERENCES `film` (`kode_film`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`kode_promo`) REFERENCES `promo` (`kode_promo`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`no_kursi`) REFERENCES `kursi` (`no_kursi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
