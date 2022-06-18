-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 06:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teachers_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `beta_timetable`
--

CREATE TABLE `beta_timetable` (
  `id` int(100) NOT NULL,
  `d1` varchar(100) NOT NULL,
  `c1` varchar(100) NOT NULL,
  `s1` varchar(100) NOT NULL,
  `c2` varchar(100) NOT NULL,
  `s2` varchar(100) NOT NULL,
  `c3` varchar(100) NOT NULL,
  `s3` varchar(100) NOT NULL,
  `c4` varchar(100) NOT NULL,
  `s4` varchar(100) NOT NULL,
  `c5` varchar(100) NOT NULL,
  `s5` varchar(100) NOT NULL,
  `c6` varchar(100) NOT NULL,
  `s6` varchar(100) NOT NULL,
  `c7` varchar(100) NOT NULL,
  `s7` varchar(100) NOT NULL,
  `d2` varchar(100) NOT NULL,
  `c8` varchar(100) NOT NULL,
  `s8` varchar(100) NOT NULL,
  `c9` varchar(100) NOT NULL,
  `s9` varchar(100) NOT NULL,
  `c10` varchar(100) NOT NULL,
  `s10` varchar(100) NOT NULL,
  `c11` varchar(100) NOT NULL,
  `s11` varchar(100) NOT NULL,
  `c12` varchar(100) NOT NULL,
  `s12` varchar(100) NOT NULL,
  `c13` varchar(100) NOT NULL,
  `s13` varchar(100) NOT NULL,
  `c14` varchar(100) NOT NULL,
  `s14` varchar(100) NOT NULL,
  `d3` varchar(100) NOT NULL,
  `c15` varchar(100) NOT NULL,
  `s15` varchar(100) NOT NULL,
  `c16` varchar(100) NOT NULL,
  `s16` varchar(100) NOT NULL,
  `c17` varchar(100) NOT NULL,
  `s17` varchar(100) NOT NULL,
  `c18` varchar(100) NOT NULL,
  `s18` varchar(100) NOT NULL,
  `c19` varchar(100) NOT NULL,
  `s19` varchar(100) NOT NULL,
  `c20` varchar(100) NOT NULL,
  `s20` varchar(100) NOT NULL,
  `c21` varchar(100) NOT NULL,
  `s21` varchar(100) NOT NULL,
  `d4` varchar(100) NOT NULL,
  `c22` varchar(100) NOT NULL,
  `s22` varchar(100) NOT NULL,
  `c23` varchar(100) NOT NULL,
  `s23` varchar(100) NOT NULL,
  `c24` varchar(100) NOT NULL,
  `s24` varchar(100) NOT NULL,
  `c25` varchar(100) NOT NULL,
  `s25` varchar(100) NOT NULL,
  `c26` varchar(100) NOT NULL,
  `s26` varchar(100) NOT NULL,
  `c27` varchar(100) NOT NULL,
  `s27` varchar(100) NOT NULL,
  `c28` varchar(100) NOT NULL,
  `s28` varchar(100) NOT NULL,
  `d5` varchar(100) NOT NULL,
  `c29` varchar(100) NOT NULL,
  `s29` varchar(100) NOT NULL,
  `c30` varchar(100) NOT NULL,
  `s30` varchar(100) NOT NULL,
  `c31` varchar(100) NOT NULL,
  `s31` varchar(100) NOT NULL,
  `c32` varchar(100) NOT NULL,
  `s32` varchar(100) NOT NULL,
  `c33` varchar(100) NOT NULL,
  `s33` varchar(100) NOT NULL,
  `c34` varchar(100) NOT NULL,
  `s34` varchar(100) NOT NULL,
  `c35` varchar(100) NOT NULL,
  `s35` varchar(100) NOT NULL,
  `d6` varchar(100) NOT NULL,
  `c36` varchar(100) NOT NULL,
  `s36` varchar(100) NOT NULL,
  `c37` varchar(100) NOT NULL,
  `s37` varchar(100) NOT NULL,
  `c38` varchar(100) NOT NULL,
  `s38` varchar(100) NOT NULL,
  `c39` varchar(100) NOT NULL,
  `s39` varchar(100) NOT NULL,
  `c40` varchar(100) NOT NULL,
  `s40` varchar(100) NOT NULL,
  `c41` varchar(100) NOT NULL,
  `s41` varchar(100) NOT NULL,
  `c42` varchar(100) NOT NULL,
  `s42` varchar(100) NOT NULL,
  `c43` varchar(100) NOT NULL,
  `s43` varchar(100) NOT NULL,
  `c44` varchar(100) NOT NULL,
  `s44` varchar(100) NOT NULL,
  `c45` varchar(100) NOT NULL,
  `s45` varchar(100) NOT NULL,
  `c46` varchar(100) NOT NULL,
  `s46` varchar(100) NOT NULL,
  `c47` varchar(100) NOT NULL,
  `s47` varchar(100) NOT NULL,
  `c48` varchar(100) NOT NULL,
  `s48` varchar(100) NOT NULL,
  `c49` varchar(100) NOT NULL,
  `s49` varchar(100) NOT NULL,
  `c50` varchar(100) NOT NULL,
  `s50` varchar(100) NOT NULL,
  `c51` varchar(100) NOT NULL,
  `s51` varchar(100) NOT NULL,
  `c52` varchar(100) NOT NULL,
  `s52` varchar(100) NOT NULL,
  `c53` varchar(100) NOT NULL,
  `s53` varchar(100) NOT NULL,
  `c54` varchar(100) NOT NULL,
  `s54` varchar(100) NOT NULL,
  `edited` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beta_timetable`
--

INSERT INTO `beta_timetable` (`id`, `d1`, `c1`, `s1`, `c2`, `s2`, `c3`, `s3`, `c4`, `s4`, `c5`, `s5`, `c6`, `s6`, `c7`, `s7`, `d2`, `c8`, `s8`, `c9`, `s9`, `c10`, `s10`, `c11`, `s11`, `c12`, `s12`, `c13`, `s13`, `c14`, `s14`, `d3`, `c15`, `s15`, `c16`, `s16`, `c17`, `s17`, `c18`, `s18`, `c19`, `s19`, `c20`, `s20`, `c21`, `s21`, `d4`, `c22`, `s22`, `c23`, `s23`, `c24`, `s24`, `c25`, `s25`, `c26`, `s26`, `c27`, `s27`, `c28`, `s28`, `d5`, `c29`, `s29`, `c30`, `s30`, `c31`, `s31`, `c32`, `s32`, `c33`, `s33`, `c34`, `s34`, `c35`, `s35`, `d6`, `c36`, `s36`, `c37`, `s37`, `c38`, `s38`, `c39`, `s39`, `c40`, `s40`, `c41`, `s41`, `c42`, `s42`, `c43`, `s43`, `c44`, `s44`, `c45`, `s45`, `c46`, `s46`, `c47`, `s47`, `c48`, `s48`, `c49`, `s49`, `c50`, `s50`, `c51`, `s51`, `c52`, `s52`, `c53`, `s53`, `c54`, `s54`, `edited`, `username`) VALUES
(110, 'MONDAY', 'c1', 's1', 'c2', 's2', 'c3', 's3', 'c4', 's4', 'c5', 's5', 'c6', 's6', 'c7', 's7', 'TUESDAY', 'c8', 's8', 'c8', 's9', 'c10', 's10', 'c11', 's11', 'c12', 's12', 'c13', 's13', 'c14', 's14', 'WEDNESDAY', 'c15', 's15', 'c16', 's16', 'c17', 's17', 'c18', 's18', 'c19', 's19', 'c20', 's20', 'c21', 's21', 'THURSDAY', 'c22', 's22', 'c23', 's23', 'c24', 's24', 'c25', 's25', 'c26', 's26', 'c27', 's27', 'c28', 's28', 'FRIDAY', 'c29', 's29', 'c30', 's30', 'c31', 's31', 'c32', 's32', 'c33', 's33', 'c34', 's34', 'c35', 's35', 'SATURDAY', 'c36', 's36', 'c37', 's37', 'c38', 's38', 'c39', 's39', 'c40', 's40', 'c41', 's41', 'c42', 's42', 'c43', 'c43', 'c44', 's44', 'c45', 's45', 'c46', 's46', 'c47', 's47', 'c48', 's48', 'c49', 's49', 'c50', 's50', 'c51', 's51', 'c52', 's52', 'c53', 's53', 'c54', 's54', 'TRUE', 'EMP0064'),
(111, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 't11');

-- --------------------------------------------------------

--
-- Table structure for table `check_logs`
--

CREATE TABLE `check_logs` (
  `id` int(100) NOT NULL,
  `log` varchar(300) NOT NULL,
  `number` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `checker_role` varchar(100) NOT NULL,
  `checker_id` varchar(100) NOT NULL,
  `record_owner_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sup_depart` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
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
-- Table structure for table `methodology`
--

CREATE TABLE `methodology` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `methodology`
--

INSERT INTO `methodology` (`id`, `name`) VALUES
(1, 'Explanation'),
(2, 'Discussion'),
(3, 'Mind Mapping'),
(4, 'Demonstration');

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
  `principal` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `teachingaid`
--

CREATE TABLE `teachingaid` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachingaid`
--

INSERT INTO `teachingaid` (`id`, `name`) VALUES
(1, 'Actual objects'),
(2, 'Models'),
(3, 'Pictures'),
(4, 'Charts'),
(5, 'Maps'),
(6, 'Flash Cards'),
(7, 'Flannel Board'),
(8, 'Bulletin Board'),
(9, 'Chalk Board'),
(10, 'Overhead Projector'),
(11, 'Slides');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sup_depart` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ischeck` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tid`, `username`, `name`, `sup_depart`, `department`, `designation`, `password`, `ischeck`) VALUES
(23, '12345', 'admin', 'Admin', '', '', '', 'c93ccd78b2076528346216b3b2f701e6', ''),
(158, 'EMP0064', 'EMP0064', 'Mala Das', 'Physical Science', 'Computer Science and Application', 'Professor', '1234', 'false'),
(159, 'T10', 't10', 'Principal', 'Education', 'Education', 'Principal', '1234', 'false'),
(160, 'enable', 't11', 'Vice Principal', 'Physical Science', 'Physics', 'Vice-Principal', '1234', 'false');

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
(14, 'EMP0021', 'Hod'),
(15, 'EMP0034', 'Hod'),
(16, 'EMP0038', 'Hod'),
(17, 'EMP0042', 'Hod'),
(18, 'EMP0044', 'Hod'),
(19, 'EMP0047', 'Hod'),
(20, 'EMP0069', 'Hod'),
(21, 'EMP0089', 'Hod'),
(22, 'EMP0110', 'Hod'),
(23, 'EMP0114', 'Hod'),
(24, 'EMP0122', 'Hod'),
(25, 'EMP0132', 'Hod'),
(26, 'EMP0043', 'Dean'),
(27, 'EMP0084', 'Dean'),
(28, 'EMP0131', 'Dean'),
(29, 'EMP0121', 'Dean'),
(30, 'EMP0083', 'Vice-Principal'),
(31, 'EMP0022', 'Professor'),
(32, 'EMP0023', 'Professor'),
(33, 'EMP0032', 'Professor'),
(34, 'EMP0036', 'Professor'),
(35, 'EMP0039', 'Professor'),
(36, 'EMP0040', 'Professor'),
(37, 'EMP0041', 'Professor'),
(38, 'EMP0046', 'Professor'),
(39, 'EMP0048', 'Professor'),
(40, 'EMP0049', 'Professor'),
(41, 'EMP0050', 'Professor'),
(42, 'EMP0052', 'Professor'),
(43, 'EMP0053', 'Professor'),
(44, 'EMP0054', 'Professor'),
(45, 'EMP0055', 'Professor'),
(46, 'EMP0056', 'Professor'),
(47, 'EMP0057', 'Professor'),
(48, 'EMP0058', 'Professor'),
(49, 'EMP0059', 'Professor'),
(50, 'EMP0060', 'Professor'),
(51, 'EMP0061', 'Professor'),
(52, 'EMP0062', 'Professor'),
(53, 'EMP0063', 'Professor'),
(55, 'EMP0066', 'Professor'),
(58, 'EMP0070', 'Professor'),
(59, 'EMP0073', 'Professor'),
(60, 'EMP0074', 'Hod'),
(61, 'EMP0075', 'Professor'),
(63, 'EMP0079', 'Professor'),
(64, 'EMP0080', 'Professor'),
(65, 'EMP0082', 'Professor'),
(66, 'EMP0085', 'Professor'),
(67, 'EMP0090', 'Professor'),
(68, 'EMP0092', 'Professor'),
(69, 'EMP0093', 'Professor'),
(70, 'EMP0095', 'Professor'),
(71, 'EMP0098', 'Professor'),
(72, 'EMP0099', 'Professor'),
(73, 'EMP0101', 'Professor'),
(74, 'EMP0103', 'Professor'),
(75, 'EMP0107', 'Professor'),
(76, 'EMP0109', 'Professor'),
(77, 'EMP0111', 'Professor'),
(79, 'EMP0115', 'Professor'),
(80, 'EMP0118', 'Professor'),
(81, 'EMP0119', 'Professor'),
(82, 'EMP0123', 'Professor'),
(84, 'EMP0125', 'Professor'),
(85, 'EMP0126', 'Professor'),
(86, 'EMP0130', 'Professor'),
(87, 'EMP0133', 'Professor'),
(88, 'EMP0134', 'Professor'),
(89, 'EMP0135', 'Professor'),
(90, 'EMP1019', 'Professor'),
(91, 'EMP1021', 'Professor'),
(92, 'EMP1023', 'Professor'),
(93, 'EMP1034', 'Professor'),
(94, 'EMP1035', 'Professor'),
(95, 'EMP1036', 'Professor'),
(96, 'EMP1037', 'Professor'),
(97, 'EMP1043', 'Professor'),
(98, 'EMP1086', 'Professor'),
(99, 'EMP1100', 'Professor'),
(100, 'EMP1102', 'Professor'),
(101, 'EMP1103', 'Professor'),
(102, 'EMP1110', 'Professor'),
(103, 'EMP1115', 'Professor'),
(109, 'EMP1098', 'Professor'),
(110, 'T10', 'Principal'),
(111, 'EMP1101', 'Professor'),
(115, 'EMP0064', 'Professor'),
(116, 'EMP1095', 'Professor'),
(117, 'EMP0136', 'Hod'),
(118, 'EMP0112', 'Professor'),
(119, 'EMP0067', 'Professor'),
(120, 'EMPNEW', 'Professor'),
(122, 'newid', 'Professor'),
(124, 'T11', 'Vice-Principal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beta_timetable`
--
ALTER TABLE `beta_timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_logs`
--
ALTER TABLE `check_logs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `methodology`
--
ALTER TABLE `methodology`
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
-- Indexes for table `teachingaid`
--
ALTER TABLE `teachingaid`
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
-- AUTO_INCREMENT for table `beta_timetable`
--
ALTER TABLE `beta_timetable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `check_logs`
--
ALTER TABLE `check_logs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `methodology`
--
ALTER TABLE `methodology`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `teachingaid`
--
ALTER TABLE `teachingaid`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `verifyid`
--
ALTER TABLE `verifyid`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
