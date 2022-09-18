-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2021 at 09:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcts`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(50) NOT NULL,
  `age` int(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `localAddress` varchar(100) NOT NULL,
  `statOfVacc` varchar(50) NOT NULL,
  `vaccBrand` varchar(50) NOT NULL,
  `symp` varchar(50) NOT NULL,
  `symptoms` varchar(200) NOT NULL,
  `dateSymptoms` varchar(50) NOT NULL,
  `medCondition` varchar(200) NOT NULL,
  `travelHistory` varchar(100) NOT NULL,
  `dateOfTravel` date DEFAULT NULL,
  `exposed` varchar(20) NOT NULL,
  `exposedName` varchar(100) NOT NULL,
  `exposedrel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `age`, `fullname`, `email`, `country`, `localAddress`, `statOfVacc`, `vaccBrand`, `symp`, `symptoms`, `dateSymptoms`, `medCondition`, `travelHistory`, `dateOfTravel`, `exposed`, `exposedName`, `exposedrel`) VALUES
(70, 25, 'Kianna Smith', 'kia@gmail.com', 'USA', 'Salvacion', 'Fully Vaccinated', 'Sinovac', 'No', 'n/a', 'Didnt experienced any symptoms', 'n/a', 'El Nido Palawan', '2021-12-28', 'No', 'n/a', 'N/A'),
(72, 34, 'Joel Bacon', 'joel1@gmail.com', 'Spain', 'San Antonio Poblacion', 'Fully Vaccinated', 'Moderna', 'No', 'n/a', 'Didnt experienced any symptoms', 'n/a', '11th Earth Nabua', '2021-12-27', 'Yes', 'Tine Reyes', 'Partner'),
(74, 30, 'Katty Perry', 'kate1@gmail.com', 'Australia', 'Bustrac', 'Fully Vaccinated', 'Pfizer', 'No', 'N/A', 'Didnt experienced any symptoms', 'N/A', 'Chocolate Hills in Bohol', '2021-08-24', 'No', 'N/A', 'N/A'),
(91, 21, 'Mikey Quintos', 'mikey@gmail.com', 'Finland', 'Sta. Cruz', 'Fully Vaccinated', 'Moderna', 'Yes', 'cough', '1-2 weeks ago', 'Asthma', 'Creamy Deck in Nabua', '2021-11-28', 'Yes', 'Cath Lyn, Mike Sy', 'Sister, Friend'),
(92, 32, 'Anne Curtis Smith', 'annecs19@gmail.com', 'America', 'Paloyon Oriental', 'Fully Vaccinated', 'Sinovac', 'Yes', 'cough', '3+ weeks ago', 'n/a', 'Laguna and Baguio', '2021-11-18', 'Yes', 'Edward Cullen, Katty Perry', 'Friends');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fullname`, `username`, `email`, `gender`, `status`, `password`, `created_date`) VALUES
(1, 'Team Brogrammers', 'admin', 'foreignerscontacttracingsystem@gmail.com', 'Female', 'Active', '31b9e1823364a323fffc5e6ba9efc490203a3343', '2021-11-01 04:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `bdate` date NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `email`, `gender`, `bdate`, `status`, `password`, `created_date`) VALUES
(2, 'Doquisa Panugao', 'doquisa', 'doquisapanugao@gmail.com', 'Female', '0000-00-00', 'Active', '25e546c45e981d830a1eca7150c62c327ea8e934', '2021-11-15 17:13:10'),
(3, 'Michael Jackson', 'michael', 'mik@gmail.com', 'Male', '0000-00-00', 'Active', '3c2ee5f09ecdf64c648f18c22abd6301ec0b8450', '2021-01-31 00:10:16'),
(4, 'Taylor Swift', 'Taylor', 'taylor@gmail.com', 'Female', '0000-00-00', 'Active', '116667151e755515ccc19ea8864514f8215b1629', '2021-11-22 13:06:52'),
(5, 'Avril Lavigne', 'Abby12', 'avrillavigne@gmail.com', 'Female', '0000-00-00', 'Inactive', '64cf0300e9b833a2978483b5c93387479e6304f1', '2021-11-22 14:03:27'),
(6, 'Elijah Eli', 'elijah1', 'elijah@gmail.com', 'Male', '0000-00-00', 'Inactive', 'd4f2f8ec3b75eb556bc91d9a1b3dd96d15b3a563', '2021-12-31 03:36:01'),
(7, 'miley cyrus', 'miley12', 'miley@gmail.com', 'Female', '0000-00-00', 'Active', 'dda75b3f8b266a942ae4ef9d5a75b38b26e9e87b', '2021-12-31 04:09:11'),
(8, 'Kianna Smith', 'kia', 'kia@gmail.com', 'Female', '0000-00-00', 'Active', 'cd844f7e5e0ac297e582d5f5eb0114e5f175fde4', '2021-12-31 22:16:15'),
(9, 'Joel Bacon', 'joel1', 'joel1@gmail.com', 'Male', '0000-00-00', 'Active', '64b64b5012a99629a8c19f85acd315b8aa9c021b', '2022-01-01 00:54:53'),
(10, 'Katty Perry', 'kate12', 'kate1@gmail.com', 'Female', '0000-00-00', 'Active', 'c7fe2edd1c2e79aa497a8d951fce85d99c3035eb', '2021-09-01 02:27:44'),
(11, 'Edward Cullen', 'edward', 'edward@gmail.com', 'Male', '0000-00-00', 'Active', '26c7efd8e5f5fc7655e9c92c11f4219b78ee4b5e', '2021-09-01 03:12:23'),
(12, 'Steve Jobs', 'steve12', 'steve@gmail.com', 'Male', '0000-00-00', 'Active', '453596dbf0d20958117e23eb7df3328aae945b24', '2021-11-01 12:21:21'),
(13, 'Mikey Quintos', 'Mikey', 'mikey@gmail.com', 'Female', '0000-00-00', 'Active', '4b3ce616cba17b0b398e16b2f8c02912f81d4a7e', '2021-11-01 14:29:30'),
(14, 'Kurt Chua', 'kurt', 'kurt@gmail.com', 'Male', '0000-00-00', 'Active', 'ed6851d3b168c39f8831a2c6e4baf964f3f47af7', '2021-11-01 17:11:53'),
(15, 'Anne Curtis Smith Heusaff', 'AnneCurtis19', 'annecs19@gmail.com', 'Female', '0000-00-00', 'Active', '63193915b22d1f4dbdaa78c2b04c8532a60123db', '2021-11-01 15:10:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
