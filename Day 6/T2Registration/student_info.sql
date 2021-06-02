-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 09:39 AM
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
-- Database: `db_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `spassword` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `sname`, `email`, `gender`, `saddress`, `pincode`, `mobile`, `spassword`, `bloodgroup`, `dob`) VALUES
(1, 'Patel Jaimi', 'jaimipatel7@gmail.com', 'Female', 'Valsad', 676767, 9876543210, 'Fshs6554', 'O+', '2001-07-07'),
(3, 'patel Jemu', 'jjjjj@gmail.com', 'Female', 'Surat', 576567, 9087654321, 'gddkhtg65', 'B+', '2001-06-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
