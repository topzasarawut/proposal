-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2020 at 04:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proposal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$1vxnaW/zUvl6ouBagszcrODpAuJj2mlgoE4kuh1NBqw4WKWwpa2wK', 'superadmin', '2020-11-30 14:25:30', '2019-10-17 06:22:34', '2019-10-17 06:22:34'),
(2, 'topza', 'neverdie89', 'topza', '$2y$10$.p0yIajW1tu.ywDbrgm9u..ZP60FDSwUaa9l3H/Q3aRBjxWQSKbOq', 'admin', '2020-11-18 09:04:40', '2019-10-17 06:23:32', '2019-10-17 06:23:15'),
(3, 'sarawut', 'kedtarwon', 'sarawut', '$2y$10$DgQNZ6RxDDXAQVdg64yUEOgP/zCIzh0QWgNa6Zwgqq5IyaOldmyZK', 'admin', '2020-05-04 11:36:39', '2019-10-18 15:29:41', '2019-10-18 15:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `prefix`, `first_name`, `last_name`, `id_card`, `birthday`, `age`, `email`, `telephone`, `username`, `password`) VALUES
(1, 'อาจารย์ ดร.', 'นาย ท็อบ', 'kedtrawon', '3450400621097', '03/04/2498', 33, 'test@cpru.ac.th', 1234, 'pae', '$2y$10$z.MyU0qfkH5zHUIBOlgmLOuDAVGBVsUbrOJJ3B7.Y5JDdlEX6OSl.');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `id_work` varchar(255) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `id_line` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `id_work`, `prefix`, `first_name`, `last_name`, `id_card`, `birthday`, `age`, `email`, `telephone`, `id_line`, `username`, `password`) VALUES
(2, 'สายวิชาการ', 'นางสาว', 'pornthip', 'kedtrawon', '3450400621097', '03/04/2498', '56', 'education@cpru.ac.th', '111111', '4411111', 'pae', '1234'),
(3, 'สายสนับสนุน', 'นาย', 'ศราวุฒิ', 'เกิดถาวร', '1369900112119', '03/04/2498', '56', 'aaa@aaa.com', '0985865881', 'topza', 'topza', '$2y$10$nfSEgjaH.nnLQiF3kdZkT.ztn88Ebjk.k4OskgL.9DUSz9Q1Aco/i');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `cash` varchar(255) NOT NULL,
  `upload_pdf` varchar(255) NOT NULL,
  `upload_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `id_card`, `topic`, `detail`, `cash`, `upload_pdf`, `upload_word`) VALUES
(5, '1369900112119', 'การประชุมคณะกรรมการ', 'การประชุมคณะกรรมการการประชุมคณะกรรมการการประชุมคณะกรรมการการประชุมคณะกรรมการการประชุมคณะกรรมการ', '5000000', 'แบบฟอร์มตารางสอน.doc', 'แบบฟอร์มตารางสอน.doc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
