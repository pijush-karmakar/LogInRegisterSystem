-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 09:14 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loginregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'pijush karmakar', 'pijush', 'pijush@gmail.com', '53cb90c637d31014752eda60870e636a'),
(2, 'Ariful Islam', 'Ariful', 'ariful@gmail.com', '91f2fc7400bc983bbc38745e4c3a6120'),
(3, 'Zahidul Islam', 'Zahidul', 'zahidul@gmail.com', '5d4abf972135cee74a58f3aca650ab6e'),
(4, 'Kawsar Ahmed', 'Kawsar', 'kawsar@gmail.com', '8a15329d6eaf13bce1193bd42d0dd5aa'),
(5, 'Mehedi Hasan', 'Mehedi', 'mehedi@gmail.com', '91ec8d992540095dccbaa04a3e5ba55f'),
(6, 'Hridoy khan', 'Hridoy', 'hridoy@gmail.com', '188ee5057377385a7cbc73a7d25e9d66'),
(7, 'Diamond Dewan', 'Diamond', 'diamond@gmail.com', '75c6f03161d020201000414cd1501f9f'),
(8, 'Saiful Islam', 'Saiful', 'saiful@gmail.com', '4eeccab0e8c08e16a1d08296265e38fa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
