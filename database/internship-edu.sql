-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 01:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship-edu`
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
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_student` int(50) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `id_line` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `prefix`, `first_name`, `last_name`, `id_student`, `id_card`, `branch`, `email`, `telephone`, `id_line`, `username`, `password`, `created_at`) VALUES
(2, 'lecturer', 'lecturer', 'lecturer', 0, '', 'สาขาวิชาการศึกษาปฐมวัย', 'lecturer@lecturer', 'lecturer', '', 'lecturer', '$2y$10$T1b099BRzDw8goGW8iuXBejo.fNq/judoz6Mo.ZKcXQJB8gD7apkK', '2022-05-26 09:40:34'),
(3, 'lecturer2', 'lecturer2', 'lecturer2', 0, '', 'สาขาวิชาคณิตศาสตร์', 'admin@cpru.ac.th', 'lecturer2', '', 'lecturer2', '$2y$10$ymRf8GEaEKQCGLhtBMKDk.B26oD7odenLUPOJdgMTPm6Fy852qlKW', '2022-05-27 06:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `id_line` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `prefix`, `first_name`, `last_name`, `school`, `id_card`, `branch`, `email`, `telephone`, `id_line`, `username`, `password`, `created_at`) VALUES
(1, 'mentor', 'mentor', 'mentor', '0', '', 'สาขาวิชาคณิตศาสตร์', 'mentor@mentor', 'mentor', '', 'mentor', '$2y$10$0owxoiTZUXpk3nY0OPYtVOEKRSnrQCBinx/AjZw9tT.Rfl7l8mY0m', '2022-05-26 09:20:56'),
(2, 'mentor2', 'mentor2', 'mentor2', 'mentor2', '', 'สาขาวิชาการศึกษาปฐมวัย', '22@22', 'mentor2', '', 'mentor2', '$2y$10$QvaxOG0MGSNWOwnG9CtKguMw31tSrSsm.7oRviGobJi2sopQaFReK', '2022-05-27 06:30:33'),
(3, 'นาย', 'ศราวุฒิ', 'เกิดถาวร', 'โรงเรียนนาฝาย', '', 'สาขาวิชาภาษาไทย', 'sarawut@cpru.ac.th', '0985865881', '', '1369900112119', '$2y$10$rePwYCq8NLlPZcxL0.C/bejwpWL61nwTwdwV.yeyR1LMPTWZ4Z5oG', '2022-05-27 06:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_student` int(50) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `prefix`, `first_name`, `last_name`, `id_student`, `id_card`, `branch`, `email`, `telephone`, `status`, `username`, `password`, `created_at`) VALUES
(1, 'นาย', 'ศราวุฒิ', 'เกิดถาวร', 12345678, '', 'สาขาวิชาการศึกษาปฐมวัย', 'sarawut@cpru.ac.th', '012345678', 'student', '1111', '$2y$10$HO0cs0gGbAb5EgfdhXwT8Oy34yyaRN0TysxajQO4Kuqh2z9FZaCAG', '2022-05-25 19:50:45'),
(2, 'นาย', '2222', '2222', 2222, '', 'สาขาวิชาคณิตศาสตร์', '222@222', '2222', '', '2222', '$2y$10$3gHB4Ysgm.36DVdh5pZJluGG10a8q5yL1osWxDaxcpFqMEh8pk4Fu', '2022-05-25 20:02:00'),
(3, '3333', '3333', '3333', 3333, '', 'สาขาวิชาคอมพิวเตอร์ศึกษา', '333@333', '3333', '', '3333', '$2y$10$7nQCF0tSrVJ1jpgS.Qk.u.G6r/BQcdMGB.7ZEkfwGwnPi2zKKCcGG', '2022-05-26 08:29:18'),
(7, '4444', '4444', '4444', 4444, '', 'สาขาวิชาสังคมศึกษา', '22@22', '4444', '', '4444', '$2y$10$j7mvpkdLolwiyPNi269DNOJgNgznJ6V3XNsEkXLHHNtWh14lELGo6', '2022-05-27 06:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
