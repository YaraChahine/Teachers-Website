-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 04:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teachersdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `pending_tutors`
--

CREATE TABLE `pending_tutors` (
  `temp_user_id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `education_level_tutor` varchar(250) NOT NULL,
  `educational_institution_name` varchar(250) NOT NULL,
  `field` varchar(250) NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `course_1` varchar(250) NOT NULL,
  `course_level_1` varchar(250) NOT NULL,
  `course_2` varchar(250) NOT NULL,
  `course_level_2` varchar(250) NOT NULL,
  `course_3` varchar(250) NOT NULL,
  `course_level_3` varchar(250) NOT NULL,
  `course_4` varchar(250) NOT NULL,
  `course_level_4` varchar(250) NOT NULL,
  `cv` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_tutors`
--

INSERT INTO `pending_tutors` (`temp_user_id`, `first_name`, `last_name`, `email`, `password`, `age`, `gender`, `phone_number`, `city`, `education_level_tutor`, `educational_institution_name`, `field`, `years_of_experience`, `course_1`, `course_level_1`, `course_2`, `course_level_2`, `course_3`, `course_level_3`, `course_4`, `course_level_4`, `cv`, `image`, `description`) VALUES
(1, 'ali', 'ali', 'ali', 'ali', 0, 'ali', 'ali', 'ali', 'ali', 'ali', 'ali', 0, 'ali', 'ali', 'ali', 'ali', 'ali', 'ali', 'ali', 'ali', 'a', 'a', 'ali'),
(2, 'yara', 'yara', 'yara', 'yara', 0, 'yara', 'yara', 'yara', 'yara', 'yara', 'yara', 0, 'yara', 'yara', 'yara', 'yara', 'yara', 'yara', 'yara', 'yara', 'a', 'a', 'yara'),
(3, '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pending_tutors`
--
ALTER TABLE `pending_tutors`
  ADD PRIMARY KEY (`temp_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pending_tutors`
--
ALTER TABLE `pending_tutors`
  MODIFY `temp_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
