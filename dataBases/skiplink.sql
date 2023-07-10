-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 03:47 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skiplink`
--

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `id` int(11) NOT NULL,
  `userType` varchar(255) NOT NULL DEFAULT 'user',
  `participation_name` varchar(200) NOT NULL,
  `participation_email` text NOT NULL,
  `participation_number` int(11) NOT NULL,
  `participation_password` text NOT NULL,
  `participation_password1` text NOT NULL,
  `participation_ramz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`id`, `userType`, `participation_name`, `participation_email`, `participation_number`, `participation_password`, `participation_password1`, `participation_ramz`) VALUES
(6, 'user', 'Ø¹Ø¨Ø¯Ø§Ù„Ø¨Ø§Ù‚ÙŠ Ø¨Ø§Ø¨ÙƒØ±', 'abdelbageb24@gmail.com', 913036860, '12345', '12345', '794968'),
(7, 'user', 'Ù…ØµØ·ÙÙŠ Ø¹ÙŠØ¯', 'ms0119146306@gmail.com', 2147483647, '12345', '12345', '9344440');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participation`
--
ALTER TABLE `participation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
