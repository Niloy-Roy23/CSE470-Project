-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2024 at 05:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminandinstructorlogin`
--

CREATE TABLE `adminandinstructorlogin` (
  `id` int NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminandinstructorlogin`
--

INSERT INTO `adminandinstructorlogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345'),
(2, 'instructor@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `complainbox`
--

CREATE TABLE `complainbox` (
  `id` int NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainbox`
--

INSERT INTO `complainbox` (`id`, `email`, `subject`, `description`) VALUES
(6, 'wahidsadik38@gmail.com', 'instructor review', 'why do instuctor not connect me??');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `gender` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `age` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `height` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `checkbox` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `history` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dietchart`
--

CREATE TABLE `dietchart` (
  `id` int NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `mealday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `saturday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `sunday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `monday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `tuesday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `wednesday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `thursday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `friday` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dietchart`
--

INSERT INTO `dietchart` (`id`, `email`, `mealday`, `saturday`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
(6, 'harun@gmail.com', 'lanch', 'asda', 'asda', 'dadasd', 'asda', 'asd', 'asda', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `hiredinstructor`
--

CREATE TABLE `hiredinstructor` (
  `id` int NOT NULL,
  `instructorid` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `clientemail` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiredinstructor`
--

INSERT INTO `hiredinstructor` (`id`, `instructorid`, `clientemail`) VALUES
(6, '13', 'wahidsadik38@gmail.com'),
(7, '14', 'wahidsadik7375@gmail.com'),
(8, '14', 'harun@gmail.com'),
(9, '14', 'harun@gmail.com'),
(10, '13', 'harun@gmail.com'),
(11, '13', 'wahidsadik7375@gmail.com'),
(12, '14', 'wahidsadik7375@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `expericence` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `expertise` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `monthlyfee` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`name`, `email`, `phone`, `expericence`, `expertise`, `monthlyfee`, `description`, `id`) VALUES
('wahid sadik', 'sadik123@gmail.com', '0197522222', '4 Years ', 'Diet and Gym ', '2000', 'sei sei sei sei', 13),
('Harun', 'Harun123@gmail.com', '01975222222', '2 Years ', 'DIET', '3000', 'sei vai seii', 14);

-- --------------------------------------------------------

--
-- Table structure for table `showreply`
--

CREATE TABLE `showreply` (
  `id` int NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `reply` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showreply`
--

INSERT INTO `showreply` (`id`, `email`, `subject`, `created_date`, `reply`) VALUES
(4, 'wahidsadik38@gmail.com', 'instructor review', '2023-12-10', 'we are very sorry for that. As soon as possible we will solve your problem.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `role` int DEFAULT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `role`, `id`) VALUES
('Wahid Sadik', 'admin123@gmail.com', '12345', 1, 1),
('wahid sadik', 'wahidsadik38@gmail.com', '12345', NULL, 2),
('Nabi', 'instructor1@gmail.com', '12345', NULL, 3),
('Nabi', 'nabi123@gmail.com', '12345', NULL, 4),
('harun', 'harun@gmail.com', '12345', NULL, 5),
('sadik wahid', 'wahidsadik7375@gmail.com', '12345', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminandinstructorlogin`
--
ALTER TABLE `adminandinstructorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainbox`
--
ALTER TABLE `complainbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dietchart`
--
ALTER TABLE `dietchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiredinstructor`
--
ALTER TABLE `hiredinstructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showreply`
--
ALTER TABLE `showreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminandinstructorlogin`
--
ALTER TABLE `adminandinstructorlogin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complainbox`
--
ALTER TABLE `complainbox`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dietchart`
--
ALTER TABLE `dietchart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hiredinstructor`
--
ALTER TABLE `hiredinstructor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `showreply`
--
ALTER TABLE `showreply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
