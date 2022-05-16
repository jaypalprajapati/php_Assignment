-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 03:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `fname`, `lname`, `email`, `address`, `mobile`, `password`, `designation`, `gender`) VALUES
(1, 'Prahladbhai', 'jaypalprajapati1411@gmail.com', '1411', 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.\r\nNo', '', '0873399114', '', 'male'),
(2, 'akhsay', 'hadiya', 'akhsay@gmail.com', 'Ratanpol boder', '9898989745', '1234', 'Project Manager', 'male'),
(3, 'jaypal', 'Prahladbhai', 'jaypalprajapati@gmail.com', 'sdcsdcdscdsc', '087339911', '1411', 'Sr.Software Devloper', 'other'),
(4, 'SAPANA', 'PRAJAPATI', 'sapna.prajapati2001@gmail.com', 'Opp. Last busstop , Near shreeji dairy , Thaltej village, Thaltej.\r\nNo', '07777999591', '123', 'Sr.Software Devloper', 'female'),
(5, '', '', '', '', '', '', '', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
