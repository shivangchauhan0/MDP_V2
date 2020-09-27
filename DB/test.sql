-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 03:18 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`) VALUES
(1, 'BCA-I'),
(2, 'BCA-II'),
(3, 'BCA-III'),
(4, 'BSC-I'),
(5, 'BSC-II'),
(6, 'BSC-III'),
(7, 'MSC-I'),
(8, 'MSC-II'),
(9, 'Free'),
(10, 'MSC-III'),
(11, 'MSC-IV');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(20) NOT NULL,
  `sup_depart` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `sup_depart`, `department`) VALUES
(1, 'Arts and Social Sciences', 'Economics'),
(2, 'Arts and Social Sciences', 'Political Science'),
(3, 'Arts and Social Sciences', 'English'),
(4, 'Arts and Social Sciences', 'Hindi'),
(5, 'Arts and Social Sciences', 'History'),
(6, 'Physical Science', 'Mathematics'),
(7, 'Physical Science', 'Physics'),
(8, 'Physical Science', 'Computer Science and Application'),
(10, 'Life Science', 'Chemistry'),
(11, 'Life Science', 'Biotechnology'),
(12, 'Life Science', 'Zoology'),
(13, 'Life Science', 'Botany and Microbiology'),
(14, 'Commerce and Management', 'Applied Economics'),
(15, 'Commerce and Management', 'B.Com. Honors'),
(16, 'Commerce and Management', 'Taxation and Computer Application'),
(17, 'Commerce and Management', 'Management'),
(18, 'Education', 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `srno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `lecture` varchar(50) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(20) NOT NULL,
  `theory/prac` varchar(10) NOT NULL,
  `methodology` varchar(50) NOT NULL,
  `teaching_aid` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL,
  `class_activity` varchar(50) NOT NULL,
  `attendance` int(5) NOT NULL,
  `other_activity` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `hod` tinyint(1) NOT NULL,
  `dean` tinyint(1) NOT NULL,
  `principal` tinyint(1) NOT NULL,
  `hod_com` varchar(100) NOT NULL,
  `dean_com` varchar(100) NOT NULL,
  `principal_com` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`srno`, `username`, `lecture`, `class`, `subject`, `date`, `day`, `theory/prac`, `methodology`, `teaching_aid`, `content`, `class_activity`, `attendance`, `other_activity`, `remark`, `hod`, `dean`, `principal`, `hod_com`, `dean_com`, `principal_com`) VALUES
(107, 'siby', 'Second', 'BCA-I', 'C', '2020-09-23', 'Wednesday', 'Practicals', 'Explanation', 'Models', 'dhjfds', 'sdkfjsd', 0, 'eldsj', 'edkfj', 0, 0, 0, '', '', ''),
(115, 'mala', 'Fifth', 'BCA-II', 'OS', '2020-09-23', 'Wednesday', '', '', '', '', '', 0, '', '', 1, 1, 0, 'Complete%', 'Complete%', ''),
(116, 'mala', 'Sixth', 'BCA-II', 'Operating System', '2020-09-23', 'Wednesday', '', '', '', '', '', 0, '', '', 1, 1, 0, 'Complete%', 'Complete%', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(8, 'Free'),
(9, 'CA'),
(10, 'Internet'),
(11, 'FOC'),
(12, 'Maths'),
(13, 'C-Language'),
(14, 'Automata-Theory'),
(15, 'OS'),
(16, 'FC');

-- --------------------------------------------------------

--
-- Table structure for table `sup_depart`
--

CREATE TABLE `sup_depart` (
  `id` int(20) NOT NULL,
  `sup_depart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sup_depart`
--

INSERT INTO `sup_depart` (`id`, `sup_depart`) VALUES
(1, 'Arts and Social Sciences'),
(2, 'Physical Science'),
(3, 'Life Science'),
(4, 'Commerce and Management'),
(5, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `teachersid`
--

CREATE TABLE `teachersid` (
  `id` int(20) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `first` varchar(50) NOT NULL,
  `subject_one` varchar(50) NOT NULL,
  `second` varchar(50) NOT NULL,
  `subject_two` varchar(50) NOT NULL,
  `third` varchar(50) NOT NULL,
  `subject_three` varchar(50) NOT NULL,
  `fourth` varchar(50) NOT NULL,
  `subject_four` varchar(50) NOT NULL,
  `fifth` varchar(50) NOT NULL,
  `subject_five` varchar(50) NOT NULL,
  `sixth` varchar(50) NOT NULL,
  `subject_six` varchar(50) NOT NULL,
  `seventh` varchar(50) NOT NULL,
  `subject_seven` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `username`, `day`, `first`, `subject_one`, `second`, `subject_two`, `third`, `subject_three`, `fourth`, `subject_four`, `fifth`, `subject_five`, `sixth`, `subject_six`, `seventh`, `subject_seven`) VALUES
(19, 'mala', 'Monday', 'BCA-I', 'CA', 'BCA-I', 'FOC', 'MSC-II', 'FOC', '', '', 'BSC-III', 'FOC', '', '', '', ''),
(20, 'mala', 'Tuesday', '', '', '', '', 'MSC-II', 'Automata Theory', 'BCA-I', 'FOC', 'BSC-I', 'FOC', 'BSC-I', 'FOC', '', ''),
(21, 'mala', 'Wednesday', '', '', '', '', '', '', 'MSC-II', 'Automata Theory', 'BCA-II', 'OS', 'BCA-II', 'Operating System', '', ''),
(23, 'mala', 'Thursday', 'BCA-II', 'Operating System', 'BSC-I', 'FOC', 'BCA-I', 'FOC', 'MSC-II', 'Automata Theory', '', '', '', '', '', ''),
(24, 'mala', 'Friday', '', '', 'BSC-I', 'FOC', 'BCA-II', 'Operating System', 'BCA-I', 'FOC', 'BCA-II', 'Operating System', 'MSC-II', 'Automata Theory', '', ''),
(26, 'teacher', 'Monday', 'BCA-III', 'C language', 'BCA-III', 'Maths', 'BSC-I', 'Coputer Architecture', 'BSC-I', 'FOC', 'BSC-III', 'C language', 'MSC-II', 'Maths', 'MSC-I', 'Internet'),
(27, 'teacher', 'Tuesday', 'BCA-II', 'Maths', 'BCA-I', 'FOC', 'BCA-III', 'Internet', 'BSC-I', 'Coputer Architecture', 'BSC-I', 'FOC', 'MSC-I', 'Maths', 'MSC-I', 'Coputer Architecture'),
(28, 'teacher', 'Wednesday', 'BCA-I', 'Internet', 'BSC-I', 'FOC', 'BCA-III', 'Maths', 'BSC-II', 'C language', 'MSC-I', 'Internet', 'BSC-II', 'FOC', 'MSC-I', 'Coputer Architecture'),
(29, 'teacher', 'Thrusday', 'BCA-III', 'Internet', 'BCA-I', 'Coputer Architecture', 'BSC-I', 'FOC', 'BSC-II', 'C language', 'BSC-III', 'FOC', 'MSC-II', 'Maths', 'MSC-I', 'Coputer Architecture'),
(30, 'teacher', 'Friday', 'BCA-II', 'FOC', 'BSC-I', 'Coputer Architecture', 'BCA-III', 'Internet', 'BSC-I', 'Maths', 'BCA-III', 'Internet', 'MSC-II', 'Maths', 'BSC-III', 'C language'),
(33, 'mala', 'Saturday', '', '', 'BSC-I', 'FOC', 'MSC-II', 'Automata Theory', 'BCA-II', 'Operating System', '', '', '', '', '', ''),
(36, 'siby', 'Monday', 'MSC-IV', '', '', '', '', '', '', '', 'BCA-I', 'C ', '', '', '', ''),
(37, 'siby', 'Tuesday', 'BCA-I', 'C', 'BCA-I', 'C', '', '', '', '', '', '', '', '', '', ''),
(38, 'siby', 'Wednesday', '', '', 'BCA-I', 'C', 'MSC-IV', '', '', '', '', '', 'MSC-III', '', '', ''),
(39, 'siby', 'Thrusday', 'MSC-IV', '', 'BCA-II', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'siby', 'Friday', '', '', 'MSC-IV', '', '', '', '', '', '', '', 'BCA-II', '', 'BCA-II', ''),
(42, 'siby', 'Saturday', 'BCA-II', '', '', '', 'MSC-IV', '', '', '', 'BCA-I', 'C-Language', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sup_depart` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tid`, `username`, `name`, `sup_depart`, `department`, `designation`, `password`) VALUES
(2, '', 'mala', 'Mala Das', 'Physical Science', 'Computer science and application', 'Professor', 'c93ccd78b2076528346216b3b2f701e6'),
(5, '', 'deanofscience', 'deansci', 'Physical Science', '', 'Dean', 'e10adc3949ba59abbe56e057f20f883e'),
(6, '', 'principal', '', '', '', 'Principal', 'e10adc3949ba59abbe56e057f20f883e'),
(7, '', 'amityadav', 'Amit Yadav', 'Physical Science', 'Computer science and application', 'Professor', 'e10adc3949ba59abbe56e057f20f883e'),
(11, '', 'hodofbotany', 'hodbotany', 'Life Science', 'Botany', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(13, '', 'hodofpolsci', 'teacherpolsci', 'Arts', 'Political Science', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(14, '', 'deanofarts', 'deanarts', 'Arts', '', 'Dean', 'e10adc3949ba59abbe56e057f20f883e'),
(15, '', 'teacher_posci', 'Teacher Polsci', 'Arts', 'Political Science', 'Professor', ''),
(16, '', 'deanofcommerce', 'deancom', 'Commerce', '', 'Dean', 'e10adc3949ba59abbe56e057f20f883e'),
(17, '', 'hodofhistory', '', 'Arts', 'History', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(18, '', 'hodofeco', '', 'Arts', 'Economics', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(19, '', 'hodofphy', 'hodphy', 'Physical Science', 'Physics', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(20, '', 'hodoftax', 'hodoftax', 'Commerce', 'Taxation', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(21, '', 'hodofappeco', 'hodofappeco', 'Commerce', 'Applied Economics', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(22, '', 'hodofhon', 'hodhon', 'Commerce', 'Honours', 'Hod', 'e10adc3949ba59abbe56e057f20f883e'),
(23, '12345', 'admin', 'Admin', '', '', '', 'c93ccd78b2076528346216b3b2f701e6'),
(33, '34', 'siby', 'Dr. Siby Samuel', 'Physical Science', 'Computer Science and Application', 'Hod', '3192bac18dde9ed8694cbb0975752ca7'),
(34, '34', 'teacher_maths', 'Teacher Maths', 'Physical Science', 'Mathematics', 'Hod', '3192bac18dde9ed8694cbb0975752ca7'),
(36, '000', 'demo', 'demo', '', '', 'Principal', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `verifyid`
--

CREATE TABLE `verifyid` (
  `id` int(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifyid`
--

INSERT INTO `verifyid` (`id`, `tid`, `designation`) VALUES
(9, '34', 'Hod');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sup_depart`
--
ALTER TABLE `sup_depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachersid`
--
ALTER TABLE `teachersid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifyid`
--
ALTER TABLE `verifyid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sup_depart`
--
ALTER TABLE `sup_depart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachersid`
--
ALTER TABLE `teachersid`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `verifyid`
--
ALTER TABLE `verifyid`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
