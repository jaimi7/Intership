-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 07:55 AM
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
-- Database: `db_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `e_id` int(10) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `e_email` varchar(30) NOT NULL,
  `e_number` bigint(10) NOT NULL,
  `e_gender` varchar(6) NOT NULL,
  `e_city` varchar(10) NOT NULL,
  `e_department` varchar(20) NOT NULL,
  `e_salary` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`e_id`, `e_name`, `e_email`, `e_number`, `e_gender`, `e_city`, `e_department`, `e_salary`) VALUES
(1, 'Patel Jaimi', 'jaimi2@gmail.com', 2314567890, 'Female', 'Valsad', 'Desinging', 50000),
(2, 'Kaneriya Jay', 'jay7@gmail.com', 9087654321, 'Male', 'Vapi', 'Developing', 60000),
(3, 'patel Jemu', 'pateljemy7197@gmail.com', 9809876567, 'Other', 'Anand', 'Finance', 80000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
