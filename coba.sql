-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2015 at 03:07 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `nama`, `email`, `telp`) VALUES
('admin', 'admin', 'admin', 'admin@yahoo.com', '081234567890'),
('priska', 'priska', 'priska', 'priskaapriliana50@yahoo.com', '089654686343'),
('u', 'u', 'u', 'u', '9');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE IF NOT EXISTS `beli` (
  `no_trans` varchar(10) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `jlh_beli` int(11) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`no_trans`, `id_produk`, `jlh_beli`, `tgl_beli`) VALUES
('t4', '3', 1, '2008-06-15'),
('t4', '2', 2, '2008-06-15'),
('t4', '1', 2, '2008-06-15'),
('t1', '2', 2, '2007-06-15'),
('t2', '2', 1, '2008-06-15'),
('t3', '1', 2, '2008-06-15'),
('t3', '2', 2, '2008-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE IF NOT EXISTS `homepage` (
  `judul` varchar(255) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`judul`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`judul`, `halaman`, `detail`) VALUES
('Home Page', 'home', 'nanannnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE IF NOT EXISTS `kasir` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`username`, `password`, `nama_lengkap`, `email`, `telepon`, `alamat`) VALUES
('kasir', 'kasir', 'kasir', 'kasir1@yahoo.com', '089111222333', 'yogyakarta'),
('kas', 'kas', 'kas', 'kas', '0', 'kas');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode`, `kelas`) VALUES
('K1', 'Reguler'),
('K2', 'VIP'),
('K3', 'VVIPxx'),
('q', 'wow');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`kode`, `nama`, `alamat`, `telp`, `kelas`, `harga`) VALUES
('M001', 'Andrea Hirata', 'Yogyakarta', '081234567890', 'K1', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` varchar(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `stok`) VALUES
('1', 'Tas Declan', '-', 198900, -4),
('2', 'tas hero', '', 200000, -2),
('3', 'tas anak', '-', 150000, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
