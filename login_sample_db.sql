-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2023 at 07:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` text NOT NULL,
  `password` text NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `admin_id`) VALUES
('Royalhotel433@gmail.com', 'Royal#hotel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `double_ac`
--

CREATE TABLE `double_ac` (
  `room4_id` int(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `holder_name` varchar(255) DEFAULT NULL,
  `holder_id` int(255) DEFAULT NULL,
  `holder_mobile` varchar(10) DEFAULT NULL,
  `holder_address` text DEFAULT NULL,
  `child` int(255) NOT NULL,
  `adult` int(255) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `double_ac`
--

INSERT INTO `double_ac` (`room4_id`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(2, 102, NULL, NULL, NULL, NULL, 0, 0, '0000-00-00', '0000-00-00', 0),
(4, 104, NULL, NULL, NULL, NULL, 0, 0, '0000-00-00', '0000-00-00', 0),
(5, 105, 'Subhash Mehta', 1065, '785438369', 'Chattarpaur ,Delhi', 0, 4, '2022-11-01', '2022-11-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `double_non_ac`
--

CREATE TABLE `double_non_ac` (
  `room3_id` int(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `holder_id` int(255) NOT NULL,
  `holder_address` text NOT NULL,
  `holder_mobile` varchar(10) NOT NULL,
  `child` int(255) NOT NULL,
  `adult` int(255) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `double_non_ac`
--

INSERT INTO `double_non_ac` (`room3_id`, `room_no`, `holder_name`, `holder_id`, `holder_address`, `holder_mobile`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 116, 'Raj Saxena ', 1165, 'Vardaan Colony, kanpur', '768828113', 0, 2, '2022-11-14', '2022-11-17', 1),
(2, 117, 'Jagrati Nagar, Bareilly', 9872, 'Cantt , Bareilly', '654872399', 0, 5, '2022-11-08', '2022-11-10', 1),
(3, 118, '', 0, '', '0', 0, 0, '0000-00-00', '0000-00-00', 0),
(4, 119, 'Mahendra Verma', 7623, 'Lal Vihar Colony , Faridpur', '79346578', 1, 2, '2022-11-12', '2022-11-15', 1),
(5, 120, '', 0, '', '0', 0, 0, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signupuser`
--

CREATE TABLE `signupuser` (
  `username` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupuser`
--

INSERT INTO `signupuser` (`username`, `password`, `user_id`) VALUES
('Pragya Singh', '0987', 1),
('Sunil Grover', '0987', 5),
('Kunal Verma', '0987', 6),
('Sita', 'sita', 7);

-- --------------------------------------------------------

--
-- Table structure for table `single_ac`
--

CREATE TABLE `single_ac` (
  `room2_id` int(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `holder_id` int(255) NOT NULL,
  `holder_address` text NOT NULL,
  `holder_mobile` varchar(10) NOT NULL,
  `child` int(255) NOT NULL,
  `adult` int(255) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `single_ac`
--

INSERT INTO `single_ac` (`room2_id`, `room_no`, `holder_name`, `holder_id`, `holder_address`, `holder_mobile`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(2, 107, 'Shivraj Singh', 8765, 'Mahanagr Colony, Bareilly', '746783539', 2, 7, '2022-11-04', '2022-11-05', 1),
(3, 108, 'pryum', 678, 'bnh', '7676894500', 1, 2, '2023-08-11', '2023-08-15', 1),
(5, 110, 'Priyambada Kant', 1095, 'Bali Nagar , Delhi', '979971483', 2, 2, '2022-11-03', '2022-11-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `single_non_ac`
--

CREATE TABLE `single_non_ac` (
  `room1_id` int(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `holder_id` int(255) NOT NULL,
  `holder_address` text NOT NULL,
  `holder_mobile` varchar(10) NOT NULL,
  `child` int(255) NOT NULL,
  `adult` int(255) NOT NULL,
  `in_date` date NOT NULL,
  `out_date` date NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `single_non_ac`
--

INSERT INTO `single_non_ac` (`room1_id`, `room_no`, `holder_name`, `holder_id`, `holder_address`, `holder_mobile`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 111, '', 0, '', '0', 0, 0, '0000-00-00', '0000-00-00', 0),
(2, 112, '', 0, '', '0', 0, 0, '0000-00-00', '0000-00-00', 0),
(3, 113, 'Indrapal Singh', 9876, 'Oriental Aromatics , Bareilly', '987654321', 0, 4, '2022-11-16', '2022-11-18', 1),
(4, 114, 'Pragya Singh', 4982, 'Nandan Van , Bareilly', '734526800', 2, 2, '2022-11-09', '2022-11-13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `double_ac`
--
ALTER TABLE `double_ac`
  ADD PRIMARY KEY (`room4_id`);

--
-- Indexes for table `double_non_ac`
--
ALTER TABLE `double_non_ac`
  ADD PRIMARY KEY (`room3_id`);

--
-- Indexes for table `signupuser`
--
ALTER TABLE `signupuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `single_ac`
--
ALTER TABLE `single_ac`
  ADD PRIMARY KEY (`room2_id`);

--
-- Indexes for table `single_non_ac`
--
ALTER TABLE `single_non_ac`
  ADD PRIMARY KEY (`room1_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `double_ac`
--
ALTER TABLE `double_ac`
  MODIFY `room4_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `double_non_ac`
--
ALTER TABLE `double_non_ac`
  MODIFY `room3_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signupuser`
--
ALTER TABLE `signupuser`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `single_ac`
--
ALTER TABLE `single_ac`
  MODIFY `room2_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `single_non_ac`
--
ALTER TABLE `single_non_ac`
  MODIFY `room1_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
