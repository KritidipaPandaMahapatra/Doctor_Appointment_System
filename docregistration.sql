-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 07:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `dappointment`
--

CREATE TABLE `dappointment` (
  `id` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pmail` varchar(100) NOT NULL,
  `dcategory` varchar(100) NOT NULL,
  `dcname` varchar(100) NOT NULL,
  `ddate` date NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dappointment`
--

INSERT INTO `dappointment` (`id`, `pname`, `pmail`, `dcategory`, `dcname`, `ddate`, `des`) VALUES
(8, ' Kriti Panda', 'k@gmail.com', 'MD', 'Dr.Moumita Patra', '2021-06-22', 'wel'),
(9, ' Kriti Panda', 'k@gmail.com', 'surgeon', 'Dr.Riya Chowdhuri', '2021-06-22', 'hi'),
(10, ' Krishna Panda', 'kp@gmail.com', 'General Physician', 'Dr.Archana Saha', '2021-06-24', 'done'),
(11, ' Krishna Panda', 'kp@gmail.com', 'General Physician', 'Dr.Archana Saha', '2021-06-21', 'yes'),
(12, ' Krishna Panda', 'kp@gmail.com', 'General Physician', 'Dr.Pranab Sau', '2021-06-14', 'wow'),
(15, ' Krishna Panda', 'kp@gmail.com', 'General Physician', 'Dr.Pranab Sau', '2021-07-15', 'khijbuy'),
(16, ' Krishna Panda', 'kp@gmail.com', 'Pediatrician', 'Dr.Kritidipa Panda ', '2021-06-16', 'fwegw'),
(17, ' Nitu Tripathy', 'n23@gmail.com', 'Pediatrician', 'Dr.Snehasis', '2021-06-26', 'hvjh'),
(18, ' Nitu Tripathy', 'n23@gmail.com', 'MD', 'Dr.Moumita Patra', '2021-06-30', 'whavh');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dcategory` varchar(50) NOT NULL,
  `dphone` int(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `dfees` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dname`, `dcategory`, `dphone`, `demail`, `dfees`) VALUES
(1, 'Dr.Sudeshna Ghose', 'MD', 987655445, 'sudeshna@gmail.com', 500),
(2, 'Dr.Arnashis Hota', 'MD', 895544390, 'arnashis@gmail.com', 450),
(3, 'Dr.Pranab Sau', 'General Physician', 755677881, 'pranab@gmail.com', 500),
(4, 'Dr.Kritidipa Panda ', 'Pediatrician', 995644390, 'kriti@gmail.com', 450),
(5, 'Dr.Dipa Mahapatra', 'Physician', 988885445, 'dipa@gmail.com', 400),
(6, 'Dr.Ritu Das', 'MS', 996544390, 'ritu@gmail.com', 500),
(7, 'Dr.Krishna Panda', 'Surgeon', 678900998, 'krishna@gmail.com', 500),
(8, 'Dr.Riya Chowdhuri', 'surgeon', 678990064, 'riya@gmail.com', 450),
(9, 'Dr.Arun Ghose', 'General Physician', 787766547, 'arun@gmail.com', 400),
(10, 'Dr.Snehasis', 'Pediatrician', 789000457, 'snehasis@gmail.com', 350),
(11, 'Dr.Arun Prasad', 'General Physician', 566789999, 'arun123@gmail.com', 400),
(12, 'Dr.Ritwik Jana', 'MS', 987665578, 'ritwik@gmail.com', 500),
(13, 'Dr.Moumita Patra', 'MD', 599776544, 'moumita@gmail.com', 400),
(14, 'Dr.Sreya ', 'Pediatrician', 65433222, 'sreya12@gmail.com', 350),
(15, 'Dr.Arnab Goswami', 'Dentist', 783445666, 'arnab32@gmail.com', 300),
(16, 'Dr.Mili Sau', 'Psychiatrist', 678991074, 'mili123@gmail.com', 200),
(17, 'Dr.Pallab Tripathy', 'Podiatrician', 566778889, 'pallab@gmail.com', 200),
(18, 'Dr.Nupur', 'Endocrinologist', 995544790, 'nupur@gmail.com', 150),
(19, 'Dr.Archana Saha', 'General Physician', 98754554, 'archana@gmail.com', 200),
(20, 'Dr.Arpita ', 'Pediatrician', 995144580, 'arpita@gmail.com', 150);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `phone`, `address`, `password`, `image`) VALUES
(1, 'Kriti Panda', 'k@gmail.com', 9433318664, 'Ghoradhara,Jhargram', 'aA@12345', 'upload/1198_1622548291_Picture4.png'),
(2, 'Nitu Tripathy', 'n23@gmail.com', 9434418123, 'Kolkata', 'nf345', 'upload/1344_1622569730_Picture1.png'),
(4, 'Krishna Panda', 'kp@gmail.com', 9567889904, 'Jhargram', 'kppass@12', 'upload/7673_1622643875_Picture4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dappointment`
--
ALTER TABLE `dappointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dappointment`
--
ALTER TABLE `dappointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
