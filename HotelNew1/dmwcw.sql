-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 04:15 PM
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
-- Database: `dmwcw`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Name` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Name`, `LastName`, `Contact`, `Comment`) VALUES
('Ama ', 'Mendis', 1234567890, 'goooooooooooooooood'),
('Duwasha', 'Perera', 1234567890, 'nice place'),
('Ruwandi', 'Rathnayake', 742556598, 'Mind Relaxing'),
('Ruwandi', 'Rathnayake', 742556598, 'Mind Relaxing'),
('Ruwandi', 'Rathnayake', 742556598, 'Mind Relaxing'),
('Ruwandi', 'Rathnayake', 742556598, 'as'),
('Ruwandi', 'Rathnayake', 742556598, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Name`, `UserName`, `Password`, `Email`) VALUES
(2, 'amal perera', 'amal', '$2y$10$xWt', 'amal@gmail.com'),
(3, 'kumara silva', 'kumara', '$2y$10$DCm', 'kumara123@gmail.com'),
(4, 'Vimal De silva', 'vima', '$2y$10$ket', 'vima22@gmail.com'),
(5, 'Puneesha Perera', 'puneesha', '$2y$10$Bs9', 'puneeshar@gmail.com'),
(7, 'bimal perera', 'bimal', '123', 'bimal123@gmail.com'),
(8, 'kalum perera', 'kalum', '1010', 'kalum110@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `ID` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `Name`, `Review`) VALUES
(4, 'Ranuu', 'Friendly Staff'),
(7, 'Puneesha', 'Must Visit'),
(20, 'Ruwandi', 'Good'),
(21, 'Evan', 'Great !'),
(46, 'Lochini', 'Cool'),
(47, 'www', 'rrr'),
(48, 'Thanushi', 'So glad that I could Come.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
