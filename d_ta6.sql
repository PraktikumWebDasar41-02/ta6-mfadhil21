-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2018 at 02:43 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d_ta6`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `username` varchar(30) NOT NULL,
  `id_file` int(6) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_gambar` text NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`username`, `id_file`, `judul`, `isi`, `tanggal`, `id_gambar`) VALUES
('$username', 1, '$judul', '$isi', '0000-00-00 00:00:00', '$gambar'),
('budi', 2, 'Aimer', 'halo halo halo', '0000-00-00 00:00:00', 'cover.jpg'),
('budi', 3, 'Aimer', 'halo halo halo halo', '0000-00-00 00:00:00', 'cover.jpg'),
('admin', 4, 'asus', 'merek laptop', '0000-00-00 00:00:00', '2528.jpg'),
('admin', 5, 'hello', '', '0000-00-00 00:00:00', '2528.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `nim`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '21312', '01', 'Laki-Laki', 'Sepakbola ', 'FKB', 'dad'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '21312', '01', 'Laki-Laki', 'Sepakbola ', 'FKB', 'dad'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '21312', '01', 'Laki-Laki', 'Sepakbola ', 'FKB', 'dad'),
('qwert', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', ''),
('halo', '57f842286171094855e51fc3a541c1e2', 'saint', '56789', '01', 'Laki-Laki', 'Sepakbola ', 'FIK', 'halo halo halo'),
('budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi', '1234567890', '02', 'Perempuan', 'Basket ', 'FIK', 'jalan batu'),
('budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi', '1234567890', '02', 'Perempuan', 'Basket ', 'FIK', 'jalan batu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
