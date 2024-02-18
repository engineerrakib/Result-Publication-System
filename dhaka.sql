-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 05:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dept` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `sem`, `dept`, `email`, `password`) VALUES
(9, 'Rakib', '1', 'CSE', 'rakib@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(255) NOT NULL,
  `roll` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `total` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `result` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `roll`, `sem`, `s1`, `s2`, `s3`, `s4`, `s5`, `total`, `result`) VALUES
(6, '112233', '1', '80', '70', '65', '60', '71', '346', 'Passed');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `roll` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dept` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `sem`, `dept`) VALUES
(7, 'Rakib', '112233', '1', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(255) NOT NULL,
  `s1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `s1`, `s2`, `s3`, `s4`, `s5`, `sem`) VALUES
(8, 'Bangla', 'English', 'Math', 'Physics', 'Chemistry', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `name_3` (`name`),
  ADD KEY `sem` (`sem`),
  ADD KEY `dept` (`dept`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll` (`roll`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `roll` (`roll`),
  ADD KEY `sem` (`sem`),
  ADD KEY `dept` (`dept`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s1` (`s1`),
  ADD UNIQUE KEY `s2` (`s2`),
  ADD UNIQUE KEY `s3` (`s3`),
  ADD UNIQUE KEY `s4` (`s4`),
  ADD UNIQUE KEY `s5` (`s5`),
  ADD UNIQUE KEY `sem` (`sem`),
  ADD KEY `sem_2` (`sem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
