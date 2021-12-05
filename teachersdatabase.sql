-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 01:28 PM
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

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_number`, `student_id`, `tutor_id`, `course_id`, `starting_date`, `days_of_sessions`) VALUES
(1, 6, 1, 1, '2021-11-22', '0001000'),
(2, 9, 1, 1, '2021-11-12', '1000000'),
(3, 10, 1, 1, '2021-12-22', '0001000'),
(4, 12, 1, 1, '2021-12-22', '0000100'),
(5, 13, 1, 1, '2021-11-12', '0000100');

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

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`item_id_calendar`, `user_id`, `item_name_calendar`, `importance`, `date`) VALUES
(1, 43, 'sleep', '0', '2021-12-04'),
(2, 43, 'sleep', '0', '2021-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL
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
(1, 'math', '1'),
(5, 'physics', '1'),
(6, 'chemistry', '1'),
(7, 'eng', '2'),
(8, 'ar', '1'),
(9, 'es', '4'),
(10, 'Math', 'primary'),
(11, 'French', 'primary'),
(12, 'Arabic', 'middle'),
(13, 'Math', 'primary'),
(14, 'Math', 'primary'),
(15, 'Math', 'primary'),
(16, 'Math', 'middle');

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
  `phone_number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `education_level_student` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `preferred_tutor` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `days_of_sessions` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `year_born` int(11) NOT NULL,
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

INSERT INTO `pending_tutors` (`temp_user_id`, `first_name`, `last_name`, `email`, `password`, `year_born`, `gender`, `phone_number`, `city`, `education_level_tutor`, `educational_institution_name`, `field`, `years_of_experience`, `course_1`, `course_level_1`, `course_2`, `course_level_2`, `course_3`, `course_level_3`, `course_4`, `course_level_4`, `cv`, `image`, `description`) VALUES
(40, 'Rim', 'Abdallah', 'rim@gmail.com', 'a3d5627a234a42af752b22fca14a25419763dfbb80c27d39c487850c88be28e5', 2001, 'Male', '71813401', 'Beirut', '0', 'Sabbah', 'General Sciences', 2, 'Math', 'primary', 'none', 'none', 'none', 'none', 'none', 'none', '16386531374425.pdf', '16386531374466.jpg', 'hey'),
(41, 'Farah', 'Mchaimech', 'farah@gmail.com', 'bd2a37fcb6d1c328cb000d764b195dbbcf7ea54ea5f3a239013cdbeb40f6327a', 2000, 'Female', '71813401', 'Beirut', '0', 'Sabbah', 'General Sciences', 3, 'Math', 'primary', 'none', 'none', 'none', 'none', 'none', 'none', '16386567193257.pdf', '16386567193546.png', 'hey im farah'),
(42, 'Farah', 'Mchaimech', 'farah1@gmail.com', 'bd2a37fcb6d1c328cb000d764b195dbbcf7ea54ea5f3a239013cdbeb40f6327a', 2000, 'Female', '71813401', 'Beirut', '0', 'Sabbah', 'General Sciences', 3, 'French', 'primary', 'Arabic', 'middle', 'none', 'none', 'none', 'none', '16386567902915.pdf', '16386567902943.png', 'hey im farah');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price_range` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_id`, `price_range`) VALUES
(1, 51, 50000),
(2, 52, 60000),
(3, 53, 50000),
(4, 54, 50000),
(5, 55, 50000),
(6, 58, 50000),
(7, 58, 50000),
(8, 58, 50000),
(9, 61, 80000),
(10, 62, 50000),
(11, 62, 50000),
(12, 64, 50000),
(13, 65, 50000);

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
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date_time` datetime(1) NOT NULL DEFAULT current_timestamp(1),
  `checked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `to_do_list`
--

INSERT INTO `to_do_list` (`id`, `user_id`, `title`, `date_time`, `checked`) VALUES
(2, 61, 'sleep', '2021-12-05 13:23:13.0', 0);

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
(1, 43, 'Male', '3', '0', 'General Sciences', 2001, 'Beirut', 'Lycee', '16386091901589.pdf', '16386091901601.jpg', 'hey'),
(25, 44, 'Female', '2', '0', 'General Sciences', 2001, '0', 'Lycee', '16386117695557.pdf', '16386117696189.png', 'dfsfdsfd'),
(26, 45, 'Female', '3', '0', 'General Sciences', 2001, 'Hasbaya', 'Lycee', '16386238277929.pdf', '16386238278724.jpg', 'I love teaching'),
(27, 46, 'Female', '12', '0', 'General Sciences', 2001, 'nabatieh', 'Lycee', '16386242085641.pdf', '1638624208565.jpg', 'hey'),
(28, 47, 'Female', '2', '0', 'General Sciences', 2001, 'Beirut', 'Sabbah', '16386284655519.pdf', '16386284655533.jpg', 'hey'),
(29, 48, 'Female', '2', '0', 'General Sciences', 2001, 'beirut', 'Lycee', '16386295514121.pdf', '16386295514147.jpg', 'hey'),
(30, 49, 'Male', '2', '0', 'General Sciences', 2001, 'nabatieh', 'sabbah', '16386300502051.pdf', '16386321413608.jpg', 'hohoho'),
(31, 50, 'Male', '3', '0', 'General Sciences', 1998, 'Beirut', 'sabah', '16386453484507.pdf', '16386453484529.jpg', 'ry'),
(32, 56, 'Female', '3', '0', 'General Sciences', 2000, 'Beirut', 'Sabbah', '16386567193257.pdf', '16386567193546.png', 'hey im farah'),
(33, 57, 'Female', '3', '0', 'General Sciences', 2000, 'Beirut', 'Sabbah', '16386567902915.pdf', '16386567902943.png', 'hey im farah');

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
(21, 1, 1),
(22, 7, 1),
(23, 1, 1),
(24, 7, 1),
(25, 1, 27),
(26, 5, 29),
(27, 1, 27),
(28, 5, 29),
(29, 9, 27),
(30, 9, 27),
(33, 7, 29),
(34, 11, 33),
(35, 1, 1),
(36, 1, 1),
(37, 1, 1),
(38, 1, 1),
(39, 1, 1),
(40, 1, 1),
(41, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_edit_requests`
--

CREATE TABLE `tutor_edit_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
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
(10, 2, 'reem', 'zubdeh', 'reem.zubdeh@lau.edu', '87686', 'reem'),
(43, 2, 'Elios', 'Karam', 'elios@gmail.com', '71813401', 'cda5754ca461f0b77395721216e854092488c72a354108060fdd5451076ccaef'),
(44, 2, 'Sara', 'Chahine', 'asdjk@gmail.com', '71813401', '65a153d8af5080dc810a7b68b054e28d7d4dabe5098804dcf39bc7c506883982'),
(45, 2, 'Hala', 'Chahine', 'halachahine@gmail.com', '71813400', '68cb44ef008492f7a2bab000f252bc463c2b72f6708133a0af21c186876a38a1'),
(46, 2, 'Hala', 'Chahine', 'halacha@gmail.com', '71813401', 'f72593eceec42a15fde9358f329ea22f02af56457b27e7ec9bac891320ec3e04'),
(47, 2, 'Yara', 'Chahine', 'yarach@gmail.com', '71813401', '645a5e5be9d1d10edf65535c1d04896a5955db2d7d86558906e431f4cb09eaf8'),
(48, 2, 'leen', 'chahine', 'leen@gmail.com', '71813401', 'd3a505c5dd381f9d21dc5a9b62fd9894b1d244e230b5ffd6137c605cbd486836'),
(49, 2, 'Sarah', 'Chahine', 'saraha@gmail.com', '71813401', '65a153d8af5080dc810a7b68b054e28d7d4dabe5098804dcf39bc7c506883982'),
(50, 2, 'Yara', 'Chahine', 'yara@gmail.com', '71813401', '645a5e5be9d1d10edf65535c1d04896a5955db2d7d86558906e431f4cb09eaf8'),
(51, 3, 'reem', 'zubdeh', 'reemzubdeh@gmail.com', '71813401', 'd858024f445d3524bdc6e172c5b02b4e5dd0131a447e82588b622dc37d83e474'),
(52, 3, 'haha', 'haba', 'haha@gmail.com', '178129819234', '645a5e5be9d1d10edf65535c1d04896a5955db2d7d86558906e431f4cb09eaf8'),
(53, 3, 'Ali', 'Sabbah', 'ali@gmail.com', '71813401', '4f15e62e98d0eb3f530af0c46bd319235df916c2dda16824bb7d92dd07275196'),
(54, 3, 'Maha', 'Ghanawi', 'mahaghanawi@gmail.cpm', '71813401', '92693b5fd8853b41bbf630ee271e7e808edcb4cbfe9ad71bbf9e9011231fbf62'),
(55, 3, 'Jana', 'Mehdi', 'jana@gmail.com', '71813401', '859f5725ec6ebcfdf0274b70871ef2e0f287b8d2d7da86ccd1c0a3efdacaa579'),
(56, 2, 'Farah', 'Mchaimech', 'farah@gmail.com', '71813401', 'bd2a37fcb6d1c328cb000d764b195dbbcf7ea54ea5f3a239013cdbeb40f6327a'),
(57, 2, 'Farah', 'Mchaimech', 'farah1@gmail.com', '71813401', 'bd2a37fcb6d1c328cb000d764b195dbbcf7ea54ea5f3a239013cdbeb40f6327a'),
(58, 3, 'Rami', 'Allouch', 'rami@gmail.com', '71813401', 'f56ab1549f0cb9e2acb9c81fe0bc2dd9583e623a0b1659cdad409402e0b8a75b'),
(59, 3, 'Rami', 'Allouch', 'rami@gmail.com', '71813401', 'f56ab1549f0cb9e2acb9c81fe0bc2dd9583e623a0b1659cdad409402e0b8a75b'),
(60, 3, 'Rami', 'Allouch', 'rami@gmail.com', '71813401', 'f56ab1549f0cb9e2acb9c81fe0bc2dd9583e623a0b1659cdad409402e0b8a75b'),
(61, 3, 'JouJou', 'Haidar', 'jojouh@gmail.com', '71813402', '8baf11304b9085eef194aca1ca651dc062c255309f4efb0195e067c37a691152'),
(62, 3, 'hadi', 'atallah', 'hadi@gmail.com', '71813401', '40671281b75167b6a127349dbd7dd31ee76c533b2829eca591907425784c0369'),
(63, 3, 'hadi', 'atallah', 'hadi@gmail.com', '71813401', '40671281b75167b6a127349dbd7dd31ee76c533b2829eca591907425784c0369'),
(64, 3, 'Mirna', 'Chami', 'mirna@gmail.com', '71813401', '2944d72b0591914da5220b8be394123aa95b9b5e63305c6b842098848f087c55'),
(65, 3, 'Nada', 'Fawaz', 'nada@gmail.com', '71813401', '584572f176d3891ce3d1f26debb73d3ba75ba4192a5a5d0ae6110b13e23cfd66');

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
  ADD KEY `preferred_tutor` (`preferred_tutor`),
  ADD KEY `student_id` (`student_id`);

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
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `tutor_edit_requests`
--
ALTER TABLE `tutor_edit_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

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
  MODIFY `booking_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `item_id_calendar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `new_tutor_requests`
--
ALTER TABLE `new_tutor_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_students`
--
ALTER TABLE `pending_students`
  MODIFY `temp_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pending_tutors`
--
ALTER TABLE `pending_tutors`
  MODIFY `temp_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `temp_codes`
--
ALTER TABLE `temp_codes`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `to_do_list`
--
ALTER TABLE `to_do_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `tutor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tutor_courses`
--
ALTER TABLE `tutor_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tutor_edit_requests`
--
ALTER TABLE `tutor_edit_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
  ADD CONSTRAINT `new_tutor_requests_ibfk_1` FOREIGN KEY (`preferred_tutor`) REFERENCES `tutors` (`tutor_ID`),
  ADD CONSTRAINT `new_tutor_requests_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `pending_students`
--
ALTER TABLE `pending_students`
  ADD CONSTRAINT `pending_students_ibfk_1` FOREIGN KEY (`preferred_tutor`) REFERENCES `tutors` (`tutor_ID`);

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
-- Constraints for table `tutor_edit_requests`
--
ALTER TABLE `tutor_edit_requests`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type`) REFERENCES `user_types` (`type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
