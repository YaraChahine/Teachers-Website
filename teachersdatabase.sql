-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 10:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_number` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `days_of_sessions` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `item_id_calendar` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_name_calendar` varchar(250) NOT NULL,
  `importance` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `information` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_level`) VALUES
(1, 'math', 'primary'),
(5, 'physics', 'middle'),
(6, 'chemistry', 'middle'),
(7, 'eng', 'high'),
(8, 'ar', 'college'),
(9, 'es', 'middle');

-- --------------------------------------------------------

--
-- Table structure for table `new_tutor_requests`
--

CREATE TABLE `new_tutor_requests` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `education_level_student` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `preferred_tutor` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `days_of_sessions` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_students`
--

CREATE TABLE `pending_students` (
  `temp_student_id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `education_level_student` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `preferred_tutor` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `days_of_sessions` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_students`
--

INSERT INTO `pending_students` (`temp_student_id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `education_level_student`, `course`, `preferred_tutor`, `starting_date`, `days_of_sessions`, `price`) VALUES
(1, 'asa', 'sa', 'ali.sa@hotmail.com', '', 'aa', 'sd', 'sd', 2, '0000-00-00', 's', 0);

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
  `phone_number` varchar(250) NOT NULL,
  `year_born` int(11) NOT NULL,
  `gender` varchar(250) NOT NULL,
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

INSERT INTO `pending_tutors` (`temp_user_id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `year_born`, `gender`, `city`, `education_level_tutor`, `educational_institution_name`, `field`, `years_of_experience`, `course_1`, `course_level_1`, `course_2`, `course_level_2`, `course_3`, `course_level_3`, `course_4`, `course_level_4`, `cv`, `image`, `description`) VALUES
(1, 'ali', 'ali', 'ali', 'ali', 'ali', 0, 'ali', 'ali', 'ali', 'ali', 'ali', 0, 'ali', 'ali', 'ali', 'ali', 'ali', 'ali', 'ali', 'ali', 'a', 'a', 'ali'),
(3, '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', ''),
(4, 'grss', 'sg', 'ali.knayber@lau.edu', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', '1121111', 30, 'male', 'wDSA', 'highschool-degree', 'grss sg', 'gs', 4, 'hi', 'college', 'asdw', 'college', 'Math', 'high', 'Chemistry', 'middle', 'hi.pdf', 'hi.png', 'bgku'),
(5, 'grss', 'sg', 'ali.knayber@lau.edu', 'cd2b3046d3d9620e4bd89c9947b34298756e35fd58187b507d25fe6468bec787', '1121111', 30, 'male', 'wDSA', 'highschool-degree', 'grss sg', 'gs', 4, 'hi', 'college', 'asdw', 'college', 'Math', 'high', 'Chemistry', 'middle', 'hi.pdf', 'hi.png', 'bgku'),
(6, 'grss', 'sg', 'ali.knayber@lau.edu', '6b51d431df5d7f141cbececcf79edf3dd861c3b4069f0b11661a3eefacbba918', '1121111', 30, 'male', 'wDSA', 'highschool-degree', 'grss sg', 'gs', 4, 'hi', 'college', 'asdw', 'college', 'Math', 'high', 'Chemistry', 'middle', 'hi.pdf', 'hi.png', 'bgku'),
(7, 'aliiii', 'sg', 'ali.knayber@lau.edu', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', '1121111', 3, 'male', 'wDSA', 'highschool-degree', '1546', '3434', 233, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(8, 'aliiii', 'sg', 'ali.knayber@lau.edu', 'dac83bb166491b2329888108d66e2b70df84e678f89ea98d71c9552ceb9f0907', '1121111', 3, 'male', 'wDSA', 'highschool-degree', '1546', '3434', 233, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(9, 'mod', 'sg', 'ali.knayber@lau.edu', 'cbfad02f9ed2a8d1e08d8f74f5303e9eb93637d47f82ab6f1c15871cf8dd0481', '1121111', 3, 'male', 'wDSA', 'highschool-degree', '1546', '3434', 233, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(10, 'alii', 'sg', 'ali.knayber@lau.edu', '098ed0a6477db3aee54048eb7262d133687420bab7a75688b291c1157e64467b', '1121111', 2112, 'male', 'wDSA', 'highschool-degree', 'alii sg', '212', 1212, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', '1221'),
(11, 'alii', 'sg', 'ali.knayber@hotmail.com', '89aa1e580023722db67646e8149eb246c748e180e34a1cf679ab0b41a416d904', '1121111', 2112, 'male', 'wDSA', 'highschool-degree', 'alii sg', '212', 1212, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', '1221'),
(12, 'alii', 'sgasas', 'ali.knayber@hotmail.com', 'f527d985dacc01f6384f25a69b8e03d83c35e78294ea73e10eb9a75e88bc6b83', '1121111', 31, 'male', 'wDSA', 'highschool-degree', 'grss sg', '3434', 3, 'Math', 'primary', 'Math', 'primary', 'houg', 'college', 'ok', 'college', 'hi.pdf', 'hi.png', 'ddf'),
(13, 'alii', 'sgasas', 'ali.knayber1@hotmail.com', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 32, 'male', 'wDSA', 'highschool-degree', 'grss sg', '3434', 3, 'Math', 'primary', 'Math', 'primary', 'houg', 'college', 'ok', 'college', 'hi.pdf', 'hi.png', 'ddf'),
(14, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 0, 'male', 'wDSA', 'highschool-degree', 'alii sg', '112', 12, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(15, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 1213, 'male', 'wDSA', 'highschool-degree', 'alii sg', '112', 12, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(16, 'aliias', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121212', 1213, 'male', 'wDSA', 'highschool-degree', 'alii sg', '112', 12, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(17, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 12314, 'Male', 'wDSA', 'highschool-degree', 'alii as sg', '3434', 121, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(18, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 12314, 'Other', 'wDSA', 'highschool-degree', 'alii as sg', '3434', 121, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(19, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 12314, 'Other', 'wDSA', 'highschool-degree', 'alii as sg', '3434', 121, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(20, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 12314, 'Other', 'wDSA', 'highschool-degree', 'alii as sg', '3434', 121, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(21, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 12314, 'Other', 'wDSA', 'highschool-degree', 'alii as sg', '3434', 121, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(22, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 18, 'Other', 'wDSA', 'highschool-degree', 'alii as sg', '3434', 121, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(23, 'alii', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 60, 'Other', 'wDSA', 'highschool-degree', 'alii as sg', '3434', 121, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(24, 'grss', 'sg', 'ali.knayber@lau.edu', '96bb5ece92649c554f0503e0d4e3463dbf195a13cadee3b760a3a09da1abd18a', '1121111', 30, 'Male', 'wDSA', 'Highschool degree', 'grss sg', 'ss', 2, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.png', 'a'),
(25, 'grss', 'sg', 'ali.knayber@lau.edu', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196', '1121111', 20, 'other', 'wDSA', 'undergrad', 'grss sg', 'gs', 1, 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'Math', 'primary', 'hi.pdf', 'hi.pdf', 'a'),
(26, 'test', 'sg', 'ali.kk@hotmail.com', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196', '1121111', 31, 'Male', 'wDSA', '0', 'grss sg', 'gs', 3, 'Chemistry', 'primary', 'none', 'none', 'none', 'none', 'none', 'none', '', '.png', 'a'),
(27, 'test', 'sg', 'ali.sas@hotmail.com', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196', '1121111', 31, 'Male', 'wDSA', '0', 'grss sg', 'gs', 3, 'Chemistry', 'primary', 'none', 'none', 'none', 'none', 'none', 'none', '.pdf', '.png', 'a'),
(28, 'test', 'sg', 'ali.sasaa@hotmail.com', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196', '1121111', 31, 'Male', 'wDSA', '0', 'grss sg', 'gs', 3, 'Chemistry', 'primary', 'none', 'none', 'none', 'none', 'none', 'none', '.pdf', '', 'a'),
(29, 'test', 'sg', 'ali.dfdaf@hotmail.com', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196', '1121111', 31, 'Male', 'wDSA', '0', 'grss sg', 'gs', 3, 'Chemistry', 'primary', 'none', 'none', 'none', 'none', 'none', 'none', '', '.png', 'a'),
(30, 'test', 'sg', 'ali.dfdaf@hotmail.coma', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196', '1121111', 31, 'Male', 'wDSA', '0', 'grss sg', 'gs', 3, 'Chemistry', 'primary', 'none', 'none', 'none', 'none', 'none', 'none', '', '.png', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price_range` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_codes`
--

CREATE TABLE `temp_codes` (
  `code_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(250) NOT NULL,
  `created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_codes`
--

INSERT INTO `temp_codes` (`code_id`, `user_id`, `code`, `created`) VALUES
(1, 1, '293384', '1638094923');

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list`
--

CREATE TABLE `to_do_list` (
  `item_id_todolist` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_name_todolist` varchar(250) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `line_through` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `tutor_ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `years_of_experience` varchar(250) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `year_born` int(11) NOT NULL,
  `city` varchar(250) NOT NULL,
  `college_name` varchar(250) NOT NULL,
  `cv` varchar(250) NOT NULL,
  `profile_image` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`tutor_ID`, `user_id`, `gender`, `years_of_experience`, `education_level`, `major`, `year_born`, `city`, `college_name`, `cv`, `profile_image`, `description`) VALUES
(1, 10, 'ali', '0', 'ali', 'ali', 0, 'ali', 'ali', 'a', 'a', 'ali'),
(2, 11, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(3, 12, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(4, 13, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(5, 14, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(6, 15, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(7, 16, 'male', '10', 'ok', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(8, 17, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(9, 18, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(10, 19, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(11, 20, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(12, 21, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(13, 22, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(14, 23, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(15, 24, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(16, 25, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(17, 26, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(18, 27, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(19, 28, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(20, 29, 'male', '10', 'good', 'cs', 12, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(21, 21, 'male', '10', 'good', 'cs', 30, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(22, 22, 'male', '10', 'good', 'cs', 31, 'beirut', 'lau', 'pdf', 'image', 'hi'),
(23, 42, 'Female', '4', '1', 'majorr', 1986, 'Beirut', 'LAU', '16381968335997.pdf', '16381968336215.png', 'blahblah hello this is a description');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_courses`
--

CREATE TABLE `tutor_courses` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_courses`
--

INSERT INTO `tutor_courses` (`id`, `course_id`, `tutor_id`) VALUES
(1, 8, 10),
(4, 1, 1),
(5, 1, 2),
(7, 1, 1),
(8, 1, 2),
(10, 1, 1),
(11, 1, 2),
(12, 1, 4),
(13, 8, 15),
(14, 8, 6),
(15, 1, 18),
(16, 7, 19),
(17, 5, 3),
(18, 5, 16),
(19, 7, 12),
(20, 6, 7),
(21, 1, 23),
(22, 6, 23),
(23, 8, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_profile_edits`
--

CREATE TABLE `tutor_profile_edits` (
  `edit_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `type` int(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `type`, `first_name`, `last_name`, `email`, `phone_number`, `password`) VALUES
(1, 1, 'ali', 'knayber', 'ali.knayber@lau.edu', '76622141', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196'),
(2, 2, 'sarah', 'abdallah', 'sarah.abdallah@edu.edu', '3232', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196'),
(3, 3, 'yara', 'chahine', 'yara.chahine@edu.edu', '3232', '12'),
(10, 2, 'reem', 'zubdeh', 'reem.zubdeh@lau.edu', '87686', '54de7f606f2523cba8efac173fab42fb7f59d56ceff974c8fdb7342cf2cfe345'),
(11, 2, 'tutor1', 'tutor1', 'tutor1', 'tutor1', 'tutor1'),
(12, 2, 'tutor2', 'tutor2', 'tutor2', 'tutor2', 'tutor2'),
(13, 2, 'tutor3', 'tutor3', 'tutor3', 'tutor3', 'tutor3'),
(14, 2, 'tutor4', 'tutor4', 'tutor4tutor4', 'tutor4', 'tutor4tutor4'),
(15, 2, 'tutor5', 'tutor5', 'tutor5', 'tutor5', 'tutor5'),
(16, 2, 'tutor6', 'tutor6', 'tutor6', 'tutor6', 'tutor6'),
(17, 2, 'tutor7', 'sdada', 'dafaefgFSCAF', '1213241355', 'sdfas'),
(18, 2, 'tutor8', 'tutor8', 'tutor8', 'tutor8', 'tutor8'),
(19, 2, 'tutor9', 'tutor9', 'tutor9', 'tutor9', 'tutor9'),
(20, 2, 'tutor10', 'tutor10', 'tutor10', 'tutor10', 'tutor10'),
(21, 2, 'tutor1', 'tutor1', 'tutor1', 'tutor1', 'tutor1'),
(22, 2, 'tutor2', 'tutor2', 'tutor2', 'tutor2', 'tutor2'),
(23, 2, 'tutor3', 'tutor3', 'tutor3', 'tutor3', 'tutor3'),
(24, 2, 'tutor4', 'tutor4', 'tutor4tutor4', 'tutor4', 'tutor4tutor4'),
(25, 2, 'tutor5', 'tutor5', 'tutor5', 'tutor5', 'tutor5'),
(26, 2, 'tutor6', 'tutor6', 'tutor6', 'tutor6', 'tutor6'),
(27, 2, 'tutor7', 'sdada', 'dafaefgFSCAF', '1213241355', 'sdfas'),
(28, 2, 'tutor8', 'tutor8', 'tutor8', 'tutor8', 'tutor8'),
(29, 2, 'tutor9', 'tutor9', 'tutor9', 'tutor9', 'tutor9'),
(30, 2, 'tutor10', 'tutor10', 'tutor10', 'tutor10', 'tutor10'),
(31, 2, 'tutor1', 'tutor1', 'tutor1', 'tutor1', 'tutor1'),
(32, 2, 'tutor2', 'tutor2', 'tutor2', 'tutor2', 'tutor2'),
(33, 2, 'tutor3', 'tutor3', 'tutor3', 'tutor3', 'tutor3'),
(34, 2, 'tutor4', 'tutor4', 'tutor4tutor4', 'tutor4', 'tutor4tutor4'),
(35, 2, 'tutor5', 'tutor5', 'tutor5', 'tutor5', 'tutor5'),
(36, 2, 'tutor6', 'tutor6', 'tutor6', 'tutor6', 'tutor6'),
(37, 2, 'tutor7', 'sdada', 'dafaefgFSCAF', '1213241355', 'sdfas'),
(38, 2, 'tutor8', 'tutor8', 'tutor8', 'tutor8', 'tutor8'),
(39, 2, 'tutor9', 'tutor9', 'tutor9', 'tutor9', 'tutor9'),
(40, 2, 'tutor10', 'tutor10', 'tutor10', 'tutor10', 'tutor10'),
(41, 3, 'cz', 'weddc', 'xzc', 'cxz', ''),
(42, 2, 'firstt', 'lastt', 'first@last.com', '24680', '54de7f606f2523cba8efac173fab42fb7f59d56ceff974c8fdb7342cf2cfe345');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `type` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`type`, `name`) VALUES
(1, 'Admin'),
(2, 'Tutor'),
(3, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_number`),
  ADD KEY `fk_foreign_key_name1` (`course_id`),
  ADD KEY `fk_foreign_key_name3` (`tutor_id`),
  ADD KEY `fk_foreign_key_name4` (`student_id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`item_id_calendar`),
  ADD KEY `Foreign_Key` (`user_id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `new_tutor_requests`
--
ALTER TABLE `new_tutor_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preferred_tutor` (`preferred_tutor`);

--
-- Indexes for table `pending_students`
--
ALTER TABLE `pending_students`
  ADD PRIMARY KEY (`temp_student_id`),
  ADD KEY `preferred_tutor` (`preferred_tutor`);

--
-- Indexes for table `pending_tutors`
--
ALTER TABLE `pending_tutors`
  ADD PRIMARY KEY (`temp_user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fk_foreign_key_name` (`user_id`);

--
-- Indexes for table `temp_codes`
--
ALTER TABLE `temp_codes`
  ADD PRIMARY KEY (`code_id`),
  ADD KEY `FOREIGN_KEY` (`user_id`);

--
-- Indexes for table `to_do_list`
--
ALTER TABLE `to_do_list`
  ADD PRIMARY KEY (`item_id_todolist`),
  ADD KEY `Foregin_Key` (`user_id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`tutor_ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tutor_courses`
--
ALTER TABLE `tutor_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK1` (`course_id`),
  ADD KEY `FK2` (`tutor_id`);

--
-- Indexes for table `tutor_profile_edits`
--
ALTER TABLE `tutor_profile_edits`
  ADD PRIMARY KEY (`edit_id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `foreign_key` (`type`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `item_id_calendar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `new_tutor_requests`
--
ALTER TABLE `new_tutor_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_students`
--
ALTER TABLE `pending_students`
  MODIFY `temp_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending_tutors`
--
ALTER TABLE `pending_tutors`
  MODIFY `temp_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_codes`
--
ALTER TABLE `temp_codes`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `to_do_list`
--
ALTER TABLE `to_do_list`
  MODIFY `item_id_todolist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `tutor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tutor_courses`
--
ALTER TABLE `tutor_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tutor_profile_edits`
--
ALTER TABLE `tutor_profile_edits`
  MODIFY `edit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_foreign_key_name1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `fk_foreign_key_name3` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`tutor_ID`),
  ADD CONSTRAINT `fk_foreign_key_name4` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `new_tutor_requests`
--
ALTER TABLE `new_tutor_requests`
  ADD CONSTRAINT `new_tutor_requests_ibfk_1` FOREIGN KEY (`preferred_tutor`) REFERENCES `tutors` (`tutor_ID`);

--
-- Constraints for table `pending_students`
--
ALTER TABLE `pending_students`
  ADD CONSTRAINT `fk_foreign_pending_student_1` FOREIGN KEY (`preferred_tutor`) REFERENCES `tutors` (`tutor_ID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_foreign_key_name` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `temp_codes`
--
ALTER TABLE `temp_codes`
  ADD CONSTRAINT `temp_codes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `to_do_list`
--
ALTER TABLE `to_do_list`
  ADD CONSTRAINT `Foregin_Key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `tutors`
--
ALTER TABLE `tutors`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `tutor_courses`
--
ALTER TABLE `tutor_courses`
  ADD CONSTRAINT `FK` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `FK1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `FK2` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`tutor_ID`);

--
-- Constraints for table `tutor_profile_edits`
--
ALTER TABLE `tutor_profile_edits`
  ADD CONSTRAINT `tutor_profile_edits_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`tutor_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type`) REFERENCES `user_types` (`type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
