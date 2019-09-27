-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 09:03 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_hasilpemilu`
--

-- --------------------------------------------------------

--
-- Table structure for table `z_kecamatan`
--

CREATE TABLE `z_kecamatan` (
  `kode_kec` varchar(10) NOT NULL,
  `kode_kota` varchar(10) NOT NULL,
  `nama_kec` varchar(30) NOT NULL,
  `suara_jokowi` varchar(7) NOT NULL,
  `suara_prabowo` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_kecamatan`
--

INSERT INTO `z_kecamatan` (`kode_kec`, `kode_kota`, `nama_kec`, `suara_jokowi`, `suara_prabowo`) VALUES
('BPNBRT', 'KTBPN', 'Balikpapan Barat', '26683', '25893'),
('BPNKOTA', 'KTBPN', 'Balikpapan Kota', '27714', '21110'),
('BPNSLT', 'KTBPN', 'Balikpapan Selatan', '40918', '34345'),
('BTGBRT', 'KTBTG', 'Bontang Barat', '10515', '5394'),
('BTGSLT', 'KTBTG', 'Bontang Selatan', '20444', '17843'),
('BTGUTR', 'KTBTG', 'Bontang Utara', '22748', '21706'),
('SMRKOTA', 'KTSMR', 'Samarinda Kota', '9762', '9612'),
('SMRLJN', 'KTSMR', 'Loa Janan Ilir', '15940', '16660'),
('SMRPRN', 'KTSMR', 'Palaran', '21184', '11954');

-- --------------------------------------------------------

--
-- Table structure for table `z_kota`
--

CREATE TABLE `z_kota` (
  `kode_kota` varchar(10) NOT NULL,
  `nama_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_kota`
--

INSERT INTO `z_kota` (`kode_kota`, `nama_kota`) VALUES
('KTBPN', 'Balikpapan'),
('KTBTG', 'Bontang'),
('KTSMR', 'Samarinda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `z_kecamatan`
--
ALTER TABLE `z_kecamatan`
  ADD PRIMARY KEY (`kode_kec`),
  ADD KEY `kode_kota` (`kode_kota`);

--
-- Indexes for table `z_kota`
--
ALTER TABLE `z_kota`
  ADD PRIMARY KEY (`kode_kota`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `z_kecamatan`
--
ALTER TABLE `z_kecamatan`
  ADD CONSTRAINT `z_kecamatan_ibfk_1` FOREIGN KEY (`kode_kota`) REFERENCES `z_kota` (`kode_kota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
