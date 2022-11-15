-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 01:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_barang`
--

CREATE TABLE `m_barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_barang`
--

INSERT INTO `m_barang` (`id`, `kode`, `nama`, `harga`) VALUES
(1, 'A001', 'Barang A', '200000'),
(2, 'C025', 'Barang B', '350000'),
(3, 'A102', 'Barang C', '125000'),
(4, 'A301', 'Barang D', '300000'),
(5, 'B221', 'Barang E', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `m_costumer`
--

CREATE TABLE `m_costumer` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_costumer`
--

INSERT INTO `m_costumer` (`id`, `kode`, `nama`, `telp`) VALUES
(1, '0001', 'Cust A', '085100000001 '),
(2, '0002', 'Cust B', '085200000002'),
(3, '0003', 'Cust A', '085100000001 '),
(4, '0004', 'Cust C', '085300000003'),
(5, '0005', 'Cust D', '085500000005');

-- --------------------------------------------------------

--
-- Table structure for table `t_sales`
--

CREATE TABLE `t_sales` (
  `id` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `cust_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `ongkir` decimal(10,0) NOT NULL,
  `total_bayar` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_sales`
--

INSERT INTO `t_sales` (`id`, `kode`, `tgl`, `cust_id`, `qty`, `subtotal`, `diskon`, `ongkir`, `total_bayar`) VALUES
(1, '0001', '2021-01-01', 1, 2, '250000', '5000', '0', '245000'),
(2, '0002', '2021-01-01', 2, 5, '600000', '0', '15000', '615000'),
(3, '0003', '2021-01-02', 1, 1, '125000', '0', '0', '125000'),
(4, '0004', '2021-01-02', 4, 3, '320000', '0', '0', '320000'),
(5, '0005', '2021-01-03', 5, 2, '560000', '0', '0', '560000');

-- --------------------------------------------------------

--
-- Table structure for table `t_sales_det`
--

CREATE TABLE `t_sales_det` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga_bandrol` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `diskon_pct` decimal(10,0) NOT NULL,
  `diskon_nilai` decimal(10,0) NOT NULL,
  `harga_diskon` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_sales_det`
--

INSERT INTO `t_sales_det` (`id`, `sales_id`, `barang_id`, `harga_bandrol`, `qty`, `diskon_pct`, `diskon_nilai`, `harga_diskon`, `total`) VALUES
(1, 0, 1, '200000', 0, '0', '0', '0', '0'),
(2, 0, 2, '350000', 0, '0', '0', '0', '0'),
(3, 0, 3, '125000', 0, '0', '0', '0', '0'),
(4, 0, 4, '300000', 0, '0', '0', '0', '0'),
(5, 0, 5, '300000', 0, '0', '0', '0', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
