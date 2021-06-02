-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 09:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_detail`
--

CREATE TABLE `form_detail` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `upassword` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_detail`
--

INSERT INTO `form_detail` (`id`, `uname`, `email`, `mobile`, `upassword`, `city`, `pincode`, `gender`, `dob`, `bloodgroup`) VALUES
(1, 'Patel Jaimi', 'jaimipatel7@gmail.com', 7878654324, 'Fshs6554', 'valsad', 676767, 'Female', '2001-07-07', 'O+'),
(3, 'patel Jaimy', 'jjjjj@gmail.com', 9087654321, 'hgfty655', 'Vapi', 879865, 'Female', '2001-06-11', 'B+'),
(4, 'jaimi', 'jjajai@gmail.com', 9876543321, 'hgasdct', 'surat', 676767, 'Female', '2001-08-09', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_detail`
--
ALTER TABLE `form_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_detail`
--
ALTER TABLE `form_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
