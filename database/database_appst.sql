-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 06:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_appst`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_ID` int(10) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Time` time NOT NULL,
  `Instructor` varchar(100) NOT NULL,
  `Purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `i_users`
--

CREATE TABLE `i_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i_users`
--

INSERT INTO `i_users` (`id`, `username`, `email`, `password`) VALUES
(2, '2017100381', 'Egama@gmail.com', '8cc2bee0d0f2c133ead7ae02e0b54f54');

-- --------------------------------------------------------

--
-- Table structure for table `student_users`
--

CREATE TABLE `student_users` (
  `Student_ID` int(20) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Contact_No` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Program` varchar(100) NOT NULL,
  `Major` varchar(100) NOT NULL,
  `Year_Level` varchar(100) NOT NULL,
  `Curriculum` varchar(100) NOT NULL,
  `Campus` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_users`
--

INSERT INTO `student_users` (`Student_ID`, `LastName`, `FirstName`, `Gender`, `Age`, `Nationality`, `Contact_No`, `Email`, `College`, `Program`, `Major`, `Year_Level`, `Curriculum`, `Campus`, `Password`) VALUES
(2017100306, 'Parco', 'Prince Aladdin', 'Male', 21, 'Filipino', '09354233603', 'parco@gmail.com', 'CITC', 'BSIT', 'N/A', '3rd', 'CITC-BSIT-2018-2019', 'CDO', 'Parco2017100306');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(16, '2017100306', 'parco@gmail.com', '41445ec56e5c964151be6b82c3840447'),
(17, '2017100665', 'Sajol@gmail.com', '0dbf4385d582cd97506be1699f5d8851');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_ID`);

--
-- Indexes for table `i_users`
--
ALTER TABLE `i_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_users`
--
ALTER TABLE `student_users`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `i_users`
--
ALTER TABLE `i_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
