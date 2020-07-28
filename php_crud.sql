-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 02:53 AM
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
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id`, `class_name`, `floor`, `description`) VALUES
(1, 'Java', 'First Floor', 'OOP'),
(3, 'Laravel', 'Third Floor', 'We learn about laravel lesion  '),
(4, 'Laravel', 'Third Floor', 'OO');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `name`, `gender`, `phone`, `province`) VALUES
(1, 'Kan Nika', 'Female', '09876543', 'BB'),
(3, 'Virak', 'Male', '0969645116', 'Pursat'),
(4, 'Samai kmav', 'Female', '0886445215', 'BTB');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `post` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `address`, `phone`, `post`) VALUES
(7, 'Virak', 'Male', 'sfs', '08484894', 'Spring Developer'),
(8, 'Virak RIM', 'Male', 'Phnom Penh ', '0969645116', 'SNA-2019'),
(10, 'Virak', 'Male', 'Phnom Penh ', '08484894', 'WEB-Programming'),
(12, 'Virak', 'Female', 'Phnom Penh ', '0969645116', 'WEB'),
(13, 'Virak', 'Male', 'Phnom Penh ', '0969645116', 'WEB-Program'),
(19, 'Virak Ratha', 'Male', 'Phnom Penh ', '0969645116', 'WEB-Programming'),
(20, 'Kara', 'Male', 'Phnom Penh ', '0969645116', 'WEB'),
(21, 'Java', 'Male', 'BTB', '0886445216', 'SNA'),
(22, 'Virak RIM', 'Male', 'Phnom Penh', '08484894', 'WEB'),
(24, 'Virak', 'Male', 'Phnom Penh ', '0969645116', 'WEB-Programming'),
(26, 'samai', 'Female', 'btb', '098765432', 'Student'),
(27, 'samai', 'Male', 'btb', '0987654', 'Student'),
(28, 'Virak', 'Male', 'Phnom Penh ', '0969645116', 'WEB-Programming');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tea_id` int(11) NOT NULL,
  `tea_name` varchar(200) NOT NULL,
  `tea_email` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(200) NOT NULL,
  `phone` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tea_id`, `tea_name`, `tea_email`, `gender`, `age`, `phone`) VALUES
(2, 'Chom chan', 'chom.chan@gmail.com', 'Female', 20, 39933983),
(5, 'Van Dara', 'chom.chan@gmail.com', 'Male', 24, 969645116);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'virak rim', '$2y$10$eiXGDaZxiy6WklJeOkOxUOCEnbICBdLwDmUeqsdUIBtYIq0sESiQa', '2020-07-27 10:17:18'),
(2, 'rvirak1', '$2y$10$QENOH1YtBWH/rjgOVBYx3uIC6ziuPCze90/MJ/AOYxOk65q7.E/ym', '2020-07-27 10:17:42'),
(3, 'rvirak2', '$2y$10$QcQ3bVOdQizD4r0C0PyY7ecEQAkhVDoujVCNJxNAYcXBTkfCiTMDW', '2020-07-27 10:22:17'),
(4, 'rvirak3', '$2y$10$kerYF3NBplNZM/pd7cNSIe.ikLHweJ5Q2IYn.3WC/AB0QBrbHCml6', '2020-07-27 16:23:37'),
(5, 'samai', '$2y$10$fsR2Zn7yyMjDBEyBiADyGezGSogQHemviY8FKZfHCsd2oe.UBi3Ni', '2020-07-27 17:51:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tea_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
