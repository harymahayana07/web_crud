-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 07:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_dasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `author` varchar(25) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `author`, `title`, `body`, `keyword`) VALUES
(1, 'hary', 'article web php', 'belajar menggunakan Php', 'article keren'),
(2, 'made', 'article laravel', 'laravel web', 'article laravel'),
(16, 'harymahayana', 'belajar ngoding', 'belajar dengan php crud', 'go to nice people'),
(17, 'madeAja', 'web Portfolio', 'menggunakan react.js', 'belajar framework javaScript'),
(18, 'harymhyna', 'kelas Php', ' Penguasaan framework laravel/codeignater', 'Web App with Php FrameWork'),
(20, 'Arikk Ni Boss', 'sssssaaaaaddddd', 'sssssssaaaaaaadddddd', 'sssssssaaaaaddddddd'),
(22, 'aarriiikkkk', 'asdasd', 'asdasdasd', 'asdawdasdawsda');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(1, 'administrator', 'admin', 'admin', 'admin'),
(2, 'harymahayana', 'hary', '9472fb63ad1e8fa871c6cacc02ea68baeee3b6e2', 'admin'),
(3, 'operator', 'operator', 'fe96dd39756ac41b74283a9292652d366d73931f', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
