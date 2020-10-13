-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 10:54 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teachers-diary-new`
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
(150, 'deanofscience', 'First', '', '', '2020-09-25', 'Friday', '', '', '', '', '', 0, '', '', 0, 0, 1, '', '', 'Complete%'),
(151, 'deanofscience', 'Third', '', '', '2020-09-25', 'Friday', '', '', '', '', '', 0, '', '', 0, 0, 1, '', '', 'Complete%'),
(152, 'deanofscience', 'Fifth', '', '', '2020-09-25', 'Friday', '', '', '', '', '', 0, '', '', 0, 0, 1, '', '', 'Complete%'),
(153, 'newvc', 'First', '', '', '2020-09-25', 'Friday', '', '', '', '', '', 0, '', '', 0, 0, 1, '', '', 'Complete%'),
(154, 'newvc', 'Third', '', '', '2020-09-25', 'Friday', '', '', '', '', '', 0, '', '', 0, 0, 1, '', '', 'Complete%'),
(166, 'Tuhina Johri', 'First', 'BA II YEAR', 'CONSTITUTION OF', '2020-09-30', 'Wednesday', 'Theory', 'Explanation', 'Slides', 'AMERICAN LEGISLATURE', 'QUIZ', 89, 'DEPARTMENTAL MEETING', 'UNIT II IS GOING ON', 0, 0, 0, '', '', ''),
(171, 'EMP0042', 'First', 'BA III YR', 'HISTORY', '2020-10-06', 'Thursday', 'Theory', 'Explanation', 'Slides', 'CORNWALLIS', 'Q&A', 60, 'SET QUESTION PAPER', 'UNIT-I COMPLETED', 0, 0, 0, '', '', ''),
(172, 'EMP0042', 'First', '', '', '2020-10-07', 'Wednesday', 'Theory', '', '', 'LITERARY SOURCES OF MEDIEVAL INDIAN HISTORY   RCES OF MEDIVAL ', 'Q&A', 75, 'SET QUESTION PAPER', '', 0, 0, 0, '', '', ''),
(173, 'EMP0057', 'First', 'B.com II Year F', 'ICA ', '2020-10-07', 'Wednesday', 'Theory', 'Discussion', 'Slides', 'Indian Company Act', 'Discussion', 12, 'Criteria work done', 'Unit 1 continue', 0, 0, 0, '', '', ''),
(174, 'EMP0057', 'Third', 'B.Com. I F', 'Business Law', '2020-10-07', 'Wednesday', 'Theory', 'Explanation', 'Chalk Board', 'Indian Contract Act', 'Discussion', 15, 'Time table preparation', 'Unit 1 started', 0, 0, 0, '', '', ''),
(175, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-10-08', 'Thursday', 'Theory', 'Explanation', 'Charts', 'à¤­à¤•à¥à¤¤à¤¿à¤•à¤¾à¤²', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 10, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(177, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-10-08', 'Thursday', 'Theory', '', '', 'à¤­à¤•à¥à¤¤à¤¿à¤•à¤¾à¤²', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 10, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(178, '1100', 'First', 'BCA IIIYR', 'COMPUTER NETWOR', '2020-10-08', 'Thursday', 'Theory', 'Explanation', 'Slides', 'INTRODUCTION OF CN', 'QUIZ', 30, 'EXTRA CLASS', 'UNIT-I STARTED', 0, 0, 0, '', '', ''),
(179, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-10-09', 'Thursday', 'Theory', 'Explanation', 'Pictures', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾-à¤¸à¤‚à¤•à¤²à¥à¤ªà¤¨à¤¾', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤ªà¤‚à¤šà¤®', 0, 0, 0, '', '', ''),
(181, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-10-09', 'Thursday', 'Theory', 'Explanation', 'Pictures', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾-à¤¸à¤‚à¤•à¤²à¥à¤ªà¤¨à¤¾', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤ªà¤‚à¤šà¤®', 0, 0, 0, '', '', ''),
(182, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤ªï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-10-07', 'Thursday', 'Theory', 'Explanation', 'Charts', 'à¤ªà¤¾à¤ à¥à¤¯à¤•à¥à¤°à¤®', '', 0, '', 'à¤®à¤¾à¤°à¥à¤—à¤¦à¤°à¥à¤¶à¤¨', 0, 0, 0, '', '', ''),
(183, 'EMP0038', 'Fourth', 'à¤¬à¥€.à¤•à¥‰ï¿½', '', '2020-10-06', 'Thursday', 'Theory', 'Explanation', 'Pictures', 'à¤ªà¤¾à¤ à¥à¤¯à¤•à¥à¤°à¤®', '', 0, '', 'à¤®à¤¾à¤°à¥à¤—à¤¦à¤°à¥à¤¶à¤¨', 0, 0, 0, '', '', ''),
(184, 'EMP0038', 'Fifth', 'à¤¬à¥€.à¤/à¤¬ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-10-06', 'Thursday', 'Theory', 'Explanation', 'Pictures', 'à¤ªà¤¾à¤ à¥à¤¯à¤•à¥à¤°à¤®', '', 0, '', 'à¤®à¤¾à¤°à¥à¤—à¤¦à¤°à¥à¤¶à¤¨', 0, 0, 0, '', '', ''),
(185, 'EMP0038', 'Fourth', 'à¤¬à¥€.à¤•à¤¾ï¿½', '', '2020-10-05', 'Thursday', 'Theory', 'Explanation', 'Pictures', 'à¤ªà¤¾à¤ à¥à¤¯à¤•à¥à¤°à¤®', '', 0, '', 'à¤®à¤¾à¤°à¥à¤—à¤¦à¤°à¥à¤¶à¤¨', 0, 0, 0, '', '', ''),
(186, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-25', 'Thursday', 'Theory', 'Explanation', 'Pictures', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾-à¤¸à¤‚à¤•à¤²à¥à¤ªà¤¨à¤¾', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤ªà¤‚à¤šà¤®', 0, 0, 0, '', '', ''),
(187, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-25', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾-à¤¸à¤‚à¤•à¤²à¥à¤ªà¤¨à¤¾', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤ªà¤‚à¤šà¤®', 0, 0, 0, '', '', ''),
(188, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-10-01', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤†à¤¦à¤¿à¤•à¤¾à¤² ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(189, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-10-01', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤†à¤¦à¤¿à¤•à¤¾à¤² ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(190, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-24', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤†à¤¦à¤¿à¤•à¤¾à¤² ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(191, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-24', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤†à¤¦à¤¿à¤•à¤¾à¤² ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(197, 'EMP0038', 'Third', '', '', '2020-09-18', 'Thursday', '', '', '', '', '', 0, '', '', 0, 0, 0, '', '', ''),
(198, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-18', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾à¤µà¥à¤¯à¤µà¤¹à¤¾à¤°', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤šà¤¤à¥à¤°à¥à¤¥ ', 0, 0, 0, '', '', ''),
(199, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-18', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾à¤µà¥à¤¯à¤µà¤¹à¤¾à¤°', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤šà¤¤à¥à¤°à¥à¤¥ ', 0, 0, 0, '', '', ''),
(200, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-03', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸ à¤²à¥‡à¤–à¤¨ ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(201, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-03', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸ à¤²à¥‡à¤–à¤¨ ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(202, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-04', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾ à¤µà¤¿à¤•à¤¾à¤¸', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤šà¤¤à¥à¤°à¥à¤¥ ', 0, 0, 0, '', '', ''),
(203, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-04', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‰à¤¦à¥à¤¯à¤®à¤¿à¤¤à¤¾ à¤µà¤¿à¤•à¤¾à¤¸', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤šà¤¤à¥à¤°à¥à¤¥ ', 0, 0, 0, '', '', ''),
(204, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤¨à¤¾à¤®à¤•à¤°à¤£', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(205, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤¨à¤¾à¤®à¤•à¤°à¤£', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(206, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-11', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‰à¤¦à¥à¤¯à¤®à¥€ ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤šà¤¤à¥à¤°à¥à¤¥ ', 0, 0, 0, '', '', ''),
(207, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¤ï¿½', 'à¤ªà¥à¤°à¤¯à¥‹', '2020-09-11', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤‰à¤¦à¥à¤¯à¤®à¥€', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤šà¤¤à¥à¤°à¥à¤¥ ', 0, 0, 0, '', '', ''),
(208, 'EMP0038', 'First', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-17', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤•à¤¾à¤²à¤µà¤¿à¤­à¤¾à¤œà¤¨', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(209, 'EMP0038', 'Second', 'à¤¬à¥€.à¤.à¤¦ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-09-17', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤•à¤¾à¤²à¤µà¤¿à¤­à¤¾à¤œà¤¨', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤¤à¥€à¤¨ ', 0, 0, 0, '', '', ''),
(210, 'EMP0118', 'First', ' B.COM  II YR H', 'PUBLIC FINANCE', '2020-09-07', 'Thursday', 'Theory', 'Discussion', 'Slides', 'INTRODUCTION OF ENTREPRENEURSHIP', '', 17, 'DID TABULATION WORK', 'UNIT 1 STARTED', 0, 0, 0, '', '', ''),
(211, 'EMP0118', 'Second', 'M.COM III YR', 'ENTREPRENEURSHI', '2020-09-07', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'CLASSIFICATION OF ENT', 'INTRACTION WITH STUDENTS ', 12, '', 'UNIT 1 STARTED', 0, 0, 0, '', '', ''),
(243, 'zara', 'First', 'B.Sc III year', 'IMB PAPER-I', '2020-09-01', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Fermentation', 'questions', 20, 'preparation of slides ', 'Unit 2 started', 0, 0, 0, '', '', ''),
(244, 'zara', 'Second', 'B.Sc II year', 'BOTANY PAPER-II', '2020-09-01', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'Ecosystem', 'questions', 48, 'Preparation of Question bank B.Ed III Sem', 'Unit 1 started', 0, 0, 0, '', '', ''),
(246, 'zara', 'Third', 'B.Sc III year', 'IMB PAPER-I', '2020-09-01', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Structure of Fermenter', '', 20, 'Preparation of Question bank B.Ed III Sem', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(247, 'zara', 'Fourth', 'B.Sc II year', 'IMB PAPER-I', '2020-09-01', 'Thursday', 'Theory', 'Discussion', 'Chalk Board', 'Components of Ecosystem', 'Questions', 48, 'preparation of slides ', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(250, 'zara', 'First', 'M.Sc III sem', 'Medical Microbi', '2020-09-02', 'Thursday', 'Theory', 'Explanation', 'Slides', 'General History of Medical Microbiology', 'discussion', 14, 'Preparing slides for B.Sc II yr', 'Unit I Started ', 0, 0, 0, '', '', ''),
(251, 'zara', 'Fifth', 'B.A. II year ', 'EVS', '2020-09-02', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'Ecosystem', 'questions', 70, 'Preparation of Question bank B.Ed III Sem', 'Unit 1 started', 0, 0, 0, '', '', ''),
(252, 'zara', 'Sixth', 'B.Ed III Sem ', 'Pedagogy of Sch', '2020-09-02', 'Thursday', 'Theory', 'Discussion', 'Other', 'Lesson plan ', 'questions', 13, 'Preparation of Question bank B.Ed III Sem', 'Unit 1 started', 0, 0, 0, '', '', ''),
(253, 'zara', 'Fourth', 'M.Sc III Sem ', '', '2020-09-03', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Discoveries of Microbiology', 'questions', 14, 'online viva conducted for EVS students ', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(254, 'zara', 'First', 'B.Sc III year', 'IMB PAPER-I', '2020-09-04', 'Thursday', 'Theory', 'Discussion', 'Slides', 'Structure of Fermenter-Batch fermenter', 'discussion', 16, 'Online video recording for B.Ed III sem , preparin', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(255, 'zara', 'Second', 'B.Sc IIYear', 'BOTANY PAPER-II', '2020-09-04', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Ecosystem: Food chain', 'Discussion ', 60, 'Online video recording for B.Ed III sem , preparin', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(256, 'zara', 'Third', 'B.Sc III year', 'IMB PAPER-I', '2020-09-04', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Fermentation process', '', 16, 'Preparation of Question bank B.Ed III Sem', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(257, 'zara', 'Fourth', 'B.Sc II year', 'IMB PAPER-I', '2020-09-04', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'Trophic levels', 'questions', 60, 'Preparation of Question bank B.Ed III Sem Hindi ve', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(258, 'zara', 'First', 'M.Sc III Sem', 'Medical Microbi', '2020-09-07', 'Thursday', 'Theory', 'Discussion', 'Slides', 'Discoveries of Microbiology', 'discussion', 13, 'Online video recording for B.Ed III sem , preparin', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(259, 'zara', 'Sixth', 'B.Ed III Sem', 'Pedagofy of sch', '2020-09-07', 'Thursday', 'Theory', 'Demonstration', 'Charts', 'Lesson plan and unit plan', 'Discussions', 13, 'Preparation of Question bank B.Ed III Sem Hindi ve', 'Unit 2started', 0, 0, 0, '', '', ''),
(260, 'zara', 'First', 'B.Sc III year', 'IMB PAPER-I', '2020-09-08', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Continuous Fermenter ', 'Discussion ', 17, 'Preparing notes for B.Sc III yr', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(261, 'zara', 'Second', 'B.Sc II year', 'BOTANY PAPER-II', '2020-09-08', 'Thursday', 'Theory', 'Discussion', 'Charts', 'Food Chain and Food Web ', 'Discussion ', 40, 'Preparing Time-table for B.Ed III sem ', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(262, 'zara', 'Third', 'B.Sc III year', 'IMB PAPER-I', '2020-09-08', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Components of Ecosystem : Biotic and Abiotic Components ', 'questions', 17, 'Preparation of Question bank B.Ed III Sem', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(263, 'zara', 'Fourth', 'B.Sc II year', 'IMB PAPER-I', '2020-09-08', 'Thursday', 'Theory', 'Discussion', 'Charts', 'Biogeochemical cycle', 'Discussion ', 40, 'Preparation of Question bank B.Ed III Sem Hindi ve', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(264, 'zara', 'First', 'M.Sc III sem', 'Medical Microbi', '2020-09-09', 'Thursday', 'Theory', 'Demonstration', 'Charts', 'Discoveries of Microbiology', '', 13, 'Preparing microteaching plan ', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(265, 'zara', 'Fifth', 'B.A. II year ', 'EVS', '2020-09-09', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'Components of Ecosystem', 'questions', 68, 'Preparing microteaching plan ', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(266, 'zara', 'Sixth', 'B.Ed III Sem ', 'Pedagogy of Sch', '2020-09-09', 'Thursday', 'Theory', 'Demonstration', 'Charts', 'Skills of Microteaching ', 'Discussion ', 11, 'preparation of slides ', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(267, 'zara', 'Fourth', 'M.Sc III Sem ', '', '2020-09-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'describe the Normal Flora ', 'discussion', 13, 'Preparation of Question bank B.Ed III Sem Hindi ve', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(268, 'zara', 'First', 'B.Sc III year', 'IMB PAPER-I', '2020-09-11', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Solid state Fermenter, ', 'questions', 16, 'Preparing hindi notes for B.Sc III yr ', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(269, 'zara', 'Second', 'B.Sc IIYear', 'BOTANY PAPER-II', '2020-09-11', 'Thursday', 'Theory', 'Discussion', 'Chalk Board', 'Biogeochemical cycle carbon cycle and nitrogen cycle', 'Questions', 46, 'Preparing microteaching plan ', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(270, 'zara', 'Third', 'B.Sc III year', 'IMB PAPER-I', '2020-09-11', 'Thursday', 'Theory', 'Demonstration', 'Slides', 'Fed batch fermenter ', 'Discussion ', 16, 'preparing microteaching plan ', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(271, 'zara', 'Fourth', 'B.Sc II year', 'IMB PAPER-I', '2020-09-11', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'Biogeochemical cycle phosphorus and sulphur ', '', 46, 'schedule making for zoom class (Dept. of Education', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(272, 'zara', 'First', '', '', '2020-09-12', 'Thursday', '', '', '', '', '', 0, 'Preparing slides for M.Sc III sem ,B.Sc II year, B', '', 0, 0, 0, '', '', ''),
(273, 'Archana', 'First', 'B.Ed III SEM', 'PSYCHOLOGY PRAC', '2020-09-04', 'Thursday', 'Practicals', 'Demonstration', 'Slides', 'EDUCATIONAL INTEREST TEST ', 'discussion', 75, 'Preparing slides for B.Ed III Sem', 'Practical cont. ', 0, 0, 0, '', '', ''),
(274, 'Archana', 'Second', 'B.Ed III SEM ', 'PSYCHOLOGY PRAC', '2020-09-04', 'Thursday', 'Practicals', 'Demonstration', 'Slides', 'EDUCATIONAL INTEREST TEST ', 'Discussion ', 75, 'Read New Education policy 2020', 'Practical cont. ', 0, 0, 0, '', '', ''),
(275, 'zara', 'First', 'M.Sc III Sem', 'Medical Microbi', '2020-09-14', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Classification of Microorganism ', 'Discussion ', 13, 'Duty for collection of copies of open book exam ', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(276, 'zara', 'Sixth', 'B.Ed III Sem', 'Pedagofy of sch', '2020-09-14', 'Thursday', 'Theory', 'Demonstration', 'Chalk Board', 'Skill of Explanation', 'discussion', 15, 'Duty for collection of copies for open book exam ', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(277, 'EMP0070', 'First', 'BCA III YR', '', '2020-10-09', 'Thursday', 'Theory', 'Explanation', 'Actual objects', 'BASICS OF C++', 'QUESTION AND ANSWERS', 29, '', '', 0, 0, 0, '', '', ''),
(278, 'EMP0070', 'Second', 'MSC III SEM COM', '', '2020-10-09', 'Thursday', 'Theory', 'Discussion', 'Charts', 'CRYPTOGRAPHY', 'QUESTION AND ANSWERS	', 7, '', '', 0, 0, 0, '', '', ''),
(279, 'EMP0070', 'Third', 'BCA III YR', '', '2020-10-09', 'Thursday', '', 'Explanation', 'Actual objects', 'OBJECT AND CLASSES', 'QUESTION AND ANSWERS', 26, '', '', 0, 0, 0, '', '', ''),
(280, 'Archana', 'First', 'B.Ed III SEM ', 'PSYCHOLOGY PRAC', '2020-09-05', 'Thursday', 'Practicals', 'Explanation', 'Slides', 'Educational Interest Test', 'Discussion', 60, 'Checking of Assignments', 'Revision ', 0, 0, 0, '', '', ''),
(281, 'Archana', 'Second', 'B.Ed III SEM ', 'PSYCHOLOGY PRAC', '2020-09-05', 'Thursday', 'Practicals', 'Explanation', 'Slides', 'Educational Interest Test', 'Discussion', 60, 'Admission Work', 'Revision', 0, 0, 0, '', '', ''),
(282, 'Archana', 'First', 'B.Ed III SEM', 'PSYCHOLOGY PRAC', '2020-09-11', 'Thursday', 'Practicals', 'Demonstration', 'Slides', 'Optimistic-Pessimistic Attitude Test', 'Discussion', 67, 'Cleared doubts of students online', '', 0, 0, 0, '', '', ''),
(283, 'Archana', 'First', 'B.Ed III SEM ', 'PSYCHOLOGY PRAC', '2020-09-12', 'Thursday', 'Practicals', 'Demonstration', 'Slides', 'Verbal Intelligence Test', 'Discussion', 73, 'Prepared class test', '', 0, 0, 0, '', '', ''),
(284, 'emp0135', 'Second', 'BSC 3', 'OPERATING SYS A', '2020-10-12', 'Monday', 'Theory', 'Discussion', 'Slides', '', 'Explanation ', 0, '', '', 0, 0, 0, '', '', ''),
(285, 'zara', 'First', 'B.Sc III year', 'IMB PAPER-I', '2020-09-15', 'Thursday', 'Theory', 'Explanation', 'Slides', 'To describe the Screening ', 'discussion ', 15, '', 'unit 1 started', 0, 0, 0, '', '', ''),
(288, 'emp0135', 'Third', 'BCA 2', 'Python Programm', '2020-10-12', 'Monday', 'Theory', 'Discussion', 'Slides', 'Print Statement Continued', 'Explanation ', 20, '', '', 0, 0, 0, '', '', ''),
(289, 'EMP0041', 'First', 'MA I SEM', 'Indian Govt & P', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Other', 'Bridge Class', 'Discussion', 14, 'Exam Cell', 'Bridge ', 0, 0, 0, '', '', ''),
(290, 'APARNA', 'First', 'M.A. III', 'PAPER I CRITICA', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Slides', 'Unit-II On the Sublime', 'Explanation of the treatise', 9, 'Topics given to analyse.', 'Students said that they understood the topic.', 0, 0, 0, '', '', ''),
(291, 'Shi01', 'Fourth', '', '', '2020-10-12', 'Monday', '', '', '', '', '', 0, 'MSc students', '', 0, 0, 0, '', '', ''),
(292, 'zara', 'Second', 'B.Sc II year', 'BOTANY PAPER-II', '2020-09-15', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'explain the ecological adaptation ', 'Discussion ', 43, '', 'Unit 2 started', 0, 0, 0, '', '', ''),
(293, 'zara', 'Third', 'B.Sc III year', 'IMB PAPER-I', '2020-09-15', 'Thursday', 'Theory', 'Demonstration', 'Pictures', 'Screening', 'questions', 15, '', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(294, 'zara', 'Fourth', 'B.Sc II year', 'IMB PAPER-I', '2020-09-15', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'Morphological and anatomical features : Ecological Adaptation', 'questions', 43, '', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(295, 'zara', 'Fifth', '', '', '2020-09-15', 'Thursday', '', '', '', '', '', 0, '12:00 to 3:30pm Duty for collection of copies (ope', '', 0, 0, 0, '', '', ''),
(300, 'zara', 'First', 'M.Sc III sem', 'Medical Microbi', '2020-09-16', 'Thursday', 'Theory', 'Discussion', 'Slides', 'Explain the Dimorphic fungi ', 'questions', 12, '', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(301, 'zara', 'Fifth', 'B.A. II year ', 'EVS', '2020-09-16', 'Thursday', 'Theory', 'Explanation', 'Chalk Board', 'pollution ', 'questions', 40, '', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(302, 'zara', 'Sixth', 'B.Ed III Sem ', 'Pedagogy of Sch', '2020-09-16', 'Thursday', 'Theory', 'Demonstration', 'Charts', 'Unit plan ', 'Discussion ', 10, '', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(303, 'zara', 'Seventh', '', '', '2020-09-16', 'Thursday', '', '', '', '', '', 0, '12:00-3:30 duty for copy collection open book exam', '', 0, 0, 0, '', '', ''),
(304, 'zara', 'First', '', '', '2020-09-17', 'Thursday', '', '', '', '', '', 0, 'Preparation of Question bank B.Ed III Sem Hindi ve', '', 0, 0, 0, '', '', ''),
(305, 'zara', 'Second', '', '', '2020-09-17', 'Thursday', '', '', '', '', '', 0, 'preparation of slides ', '', 0, 0, 0, '', '', ''),
(306, 'zara', 'Third', '', '', '2020-09-17', 'Thursday', '', '', '', '', '', 0, 'Preparing microteaching plan ', '', 0, 0, 0, '', '', ''),
(307, 'zara', 'Fourth', 'M.Sc III Sem ', '', '2020-09-17', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Explain the Dimorphic fungi ', 'questions', 12, '', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(308, 'zara', 'Fifth', '', '', '2020-09-17', 'Thursday', '', '', '', '', '', 0, 'Preparation of Question bank B.Ed III Sem Hindi ve', '', 0, 0, 0, '', '', ''),
(309, 'zara', 'Sixth', '', '', '2020-09-17', 'Thursday', '', '', '', '', '', 0, 'Online video recording for B.Ed III sem , preparin', '', 0, 0, 0, '', '', ''),
(310, 'EMP0038', 'Fourth', 'à¤¬à¥€.à¤•à¤¾ï¿½', '', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Slides', 'à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾ à¤ªà¥à¤•à¤¾à¤°à¤¤à¥€ ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤ªà¥à¤°à¤¥à¤® ', 0, 0, 0, '', '', ''),
(311, 'zara', 'Fifth', '', '', '2020-09-01', 'Thursday', '', '', '', '', '', 0, 'Preparation of Question bank B.Ed III Sem', '', 0, 0, 0, '', '', ''),
(312, 'zara', 'Sixth', '', '', '2020-09-01', 'Thursday', '', '', '', '', '', 0, 'preparation of slides ', '', 0, 0, 0, '', '', ''),
(313, 'zara', 'Seventh', '', '', '2020-09-01', 'Thursday', '', '', '', '', '', 0, 'Preparation of Question bank B.Ed III Sem Hindi ve', '', 0, 0, 0, '', '', ''),
(314, 'emp0135', 'First', 'BCA 2', 'Python Programm', '2020-10-12', 'Monday', 'Theory', 'Demonstration', 'Slides', 'Print Statement format method', 'Explanation ', 20, '', '', 0, 0, 0, '', '', ''),
(317, 'EMP0049', 'Second', 'MA I', 'Economics of Gr', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Slides', 'need and importance of economic growth and development', 'discussion', 7, 'prepared lecture', '', 0, 0, 0, '', '', ''),
(318, 'EMP0049', 'Third', 'MA III', 'Public Economic', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Slides', 'canons of taxation', 'discussion', 4, 'done exam work', '', 0, 0, 0, '', '', ''),
(319, 'niharika@220120', 'Second', 'BA II FUNCT. EN', 'PAPER II-WRITIN', '2020-10-01', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Description of people and events', '', 17, '', '', 0, 0, 0, '', '', ''),
(320, 'EMP0049', 'Fifth', 'BA/BSc/BCA I', 'Entrepreneurshi', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Slides', 'importance and good qualities of an enterpreneurship development', 'question answer', 177, 'done women cell work', '', 0, 0, 0, '', '', ''),
(321, 'niharika@220120', 'Fourth', 'BA II FUNCT. EN', '', '2020-10-01', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Description of people and events', 'Activity on writing description of people and even', 16, '', '', 0, 0, 0, '', '', ''),
(322, 'niharika@220120', 'Fifth', 'MA I SEM', 'PAPER IV-PROSE', '2020-10-01', 'Thursday', 'Theory', '', '', '', '', 0, '', 'no class', 0, 0, 0, '', '', ''),
(323, 'niharika@220120', 'Third', '', '', '2020-10-03', 'Thursday', 'Theory', 'Explanation', 'Other', 'Modern Linguistics', 'Assignment on note taking', 5, '', '', 0, 0, 0, '', '', ''),
(324, 'niharika@220120', 'Seventh', 'MA I SEM', 'PAPER IV-PROSE', '2020-10-03', 'Thursday', '', '', '', '', '', 0, '', 'no class', 0, 0, 0, '', '', ''),
(325, 'EMP0049', 'Third', 'MA III', 'Public Economic', '2020-10-08', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Administratative Revenue', 'discussion', 9, 'prepared lecture', '', 0, 0, 0, '', '', ''),
(326, 'EMP0049', 'Fourth', 'MA I', 'Public Economic', '2020-10-08', 'Thursday', 'Theory', 'Explanation', 'Slides', 'introduction of Public Finance', 'discussion', 9, 'done exam work', '', 0, 0, 0, '', '', ''),
(327, 'EMP0049', 'Third', 'MA III', 'Public Economic', '2020-09-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'special assess, gifts and grants, fines', 'discussion', 9, 'prepared lecture', '', 0, 0, 0, '', '', ''),
(328, 'EMP0049', 'Fourth', 'MA I', 'Public Economic', '2020-09-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'concepts of economic growth and development', 'discussion', 9, 'done exam work', '', 0, 0, 0, '', '', ''),
(329, 'niharika@220120', 'Second', 'MA III SEM ', 'PAPER II- ENGLI', '2020-10-05', 'Thursday', 'Theory', '', '', '', '', 0, '', 'no students logged in due technical error in the ', 0, 0, 0, '', '', ''),
(330, 'EMP0049', 'Third', 'MA III SEM', 'Public Economic', '2020-10-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'meaning of canon', 'discussion', 9, 'prepared lecture', '', 0, 0, 0, '', '', ''),
(331, 'EMP0049', 'Fifth', '', '', '2020-10-10', 'Thursday', '', '', '', '', '', 0, '', '', 0, 0, 0, '', '', ''),
(332, 'EMP0049', 'Fourth', 'MA I', 'Public Economic', '2020-10-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'meaning of canon of taxation', 'discussion', 9, 'done exam work', '', 0, 0, 0, '', '', ''),
(333, 'niharika@220120', 'Fourth', 'MA I SEM', '', '2020-10-05', 'Thursday', 'Theory', 'Discussion', 'Other', 'Introductory class', '', 13, '', '', 0, 0, 0, '', '', ''),
(334, 'niharika@220120', 'Fifth', 'MA I SEM', 'PAPER IV-PROSE', '2020-10-05', 'Thursday', 'Theory', '', '', '', '', 0, '', 'Projects not yet given', 0, 0, 0, '', '', ''),
(335, 'niharika@220120', 'Second', 'MA III SEM ', 'PAPER II- ENGLI', '2020-10-06', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Introduction to English language and Pnoentics', '', 10, '', '', 0, 0, 0, '', '', ''),
(336, 'niharika@220120', 'Fourth', 'BCA/ BSC II YEA', '', '2020-10-06', 'Thursday', 'Theory', 'Explanation', 'Other', 'God sees the Truth but Waits by Leo Tolstoy was taught', 'dDiscussion on questions and answers', 35, '', '', 0, 0, 0, '', '', ''),
(337, 'sonalrai01', 'Second', 'BCOM CA II YEAR', 'Corporate Accou', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Slides', 'Profit prior and post incorporation', 'interection', 54, 'criterion v related information submit', 'unit I started ', 0, 0, 0, '', '', ''),
(338, 'niharika@220120', 'Fifth', 'MA III ', 'PROJECT', '2020-10-06', 'Thursday', 'Practicals', 'Discussion', 'Other', 'Individual projects of students (alloted) were discussed', '', 4, '', '', 0, 0, 0, '', '', ''),
(339, 'EMP0049', 'Third', 'MA III SEM', 'Public Economic', '2020-01-10', 'Thursday', 'Theory', 'Explanation', 'Slides', 'concepts of Administratative revenue', 'discussion', 7, 'prepared lecture', '', 0, 0, 0, '', '', ''),
(341, 'niharika@220120', 'First', 'BA I FUNCT. ENG', ' PAPER I- PHONE', '2020-10-07', 'Thursday', 'Theory', 'Discussion', 'Slides', 'Bridge class ', 'Discussion on what is functional english', 19, '', '', 0, 0, 0, '', '', ''),
(342, 'sonalrai01', 'Fifth', 'BCOM III  APP E', 'Auditing', '2020-10-12', 'Monday', 'Theory', 'Explanation', 'Slides', 'introduction of vouchin', 'interection', 25, 'prepared time table', '', 0, 0, 0, '', '', ''),
(343, 'niharika@220120', 'Third', 'BA I FUNCT. ENG', 'PAPER I- PHONET', '2020-10-07', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Bridge class: Introduction to Functional English', '', 16, '', '', 0, 0, 0, '', '', ''),
(344, 'niharika@220120', 'Seventh', 'MA I SEM', 'PAPER IV-PROSE', '2020-10-07', 'Thursday', '', '', '', '', '', 0, '', 'Projects not yet given', 0, 0, 0, '', '', ''),
(345, 'zara', 'First', 'B.Sc III year', 'IMB PAPER-I', '2020-09-18', 'Thursday', 'Theory', 'Explanation', 'Slides', 'Primary screening ', 'questions', 17, '', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(346, 'zara', 'Second', 'B.Sc IIYear', 'BOTANY PAPER-II', '2020-09-18', 'Thursday', 'Theory', 'Explanation', 'Charts', 'Explain the plant adaptation ', 'Discussion ', 37, '', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(347, 'zara', 'Third', 'B.Sc III year', 'IMB PAPER-I', '2020-09-18', 'Thursday', 'Theory', 'Discussion', 'Slides', 'Primary and secondary screening', 'Discussion ', 17, '', 'Unit 1 Cont.', 0, 0, 0, '', '', ''),
(348, 'zara', 'Fourth', 'B.Sc II year', 'IMB PAPER-I', '2020-09-18', 'Thursday', 'Theory', 'Demonstration', 'Charts', 'Morphological and anatomical features of plant ', 'questions', 37, '', 'Unit 2 Cont.', 0, 0, 0, '', '', ''),
(349, 'zara', 'Fifth', '', '', '2020-09-18', 'Thursday', '', '', '', '', '', 0, 'Preparing unit plan ', '', 0, 0, 0, '', '', ''),
(350, 'zara', 'Sixth', '', '', '2020-09-18', 'Thursday', '', '', '', '', '', 0, 'preparation of slides for M.Sc III sem', '', 0, 0, 0, '', '', ''),
(351, 'zara', 'Seventh', '', '', '2020-09-18', 'Thursday', '', '', '', '', '', 0, 'Online video recording for B.Ed III sem , preparin', '', 0, 0, 0, '', '', ''),
(352, 'zara', 'First', '', '', '2020-09-19', 'Thursday', '', '', '', '', '', 0, 'Preparation Microteaching plan ', '', 0, 0, 0, '', '', ''),
(353, 'zara', 'Second', '', '', '2020-09-19', 'Thursday', '', '', '', '', '', 0, 'Preparation of Question bank B.Ed III Sem', '', 0, 0, 0, '', '', ''),
(354, 'zara', 'Third', '', '', '2020-09-19', 'Thursday', '', '', '', '', '', 0, 'skill of probing question', '', 0, 0, 0, '', '', ''),
(355, 'zara', 'Fourth', '', '', '2020-09-19', 'Thursday', '', '', '', '', '', 0, 'Preparing notes for B.Sc II yr', '', 0, 0, 0, '', '', ''),
(356, 'zara', 'Fifth', '', '', '2020-09-19', 'Thursday', '', '', '', '', '', 0, 'Visit to library for reading books', '', 0, 0, 0, '', '', ''),
(357, 'zara', 'Sixth', '', '', '2020-09-19', 'Thursday', '', '', '', '', '', 0, 'preparation of slides for M.Sc III sem', '', 0, 0, 0, '', '', ''),
(358, 'mala', 'First', 'BCA I YR', 'FOC', '2020-10-13', 'Tuesday', 'Theory', 'Explanation', 'Slides', 'BASICS OF COMPUTER', 'DICUSSION', 37, 'Work on teacher\'s diary', 'UNIT-I STARTED', 0, 0, 0, '', '', ''),
(362, 'EMP0043', 'Third', 'MA I', 'Micro Economic ', '2020-10-13', 'Tuesday', 'Theory', 'Explanation', 'Slides', 'Scope of Micro Economics', 'Discussion', 10, 'Finalization of Proposal of Online Seminar', '', 0, 0, 0, '', '', ''),
(364, 'EMP0038', 'Fifth', 'à¤¬à¥€.à¤/à¤¬ï¿½', 'à¤¹à¤¿à¤‚à¤¦à¥€', '2020-10-13', 'Tuesday', 'Theory', 'Explanation', 'Slides', 'à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾  à¤ªà¥à¤•à¤¾à¤°à¤¤à¥€ ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤ªà¥à¤°à¤¥à¤® ', 0, 0, 0, '', '', ''),
(365, 'EMP0038', 'Fourth', 'à¤¬à¥€.à¤•à¥‰ï¿½', '', '2020-10-13', 'Thursday', 'Theory', 'Explanation', 'Slides', 'à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾  à¤ªà¥à¤•à¤¾à¤°à¤¤à¥€ ', 'à¤ªà¥à¤°à¤¶à¥à¤¨', 0, '', 'à¤‡à¤•à¤¾à¤ˆ à¤ªà¥à¤°à¤¥à¤® ', 0, 0, 0, '', '', ''),
(367, 'EMP0046', 'First', 'M.A III', 'Industrial  Eco', '2020-10-13', 'Tuesday', 'Theory', '', '', 'industrial productivity charecterstics', 'Question Answer', 10, 'recording send to the digital Library', '', 0, 0, 0, '', '', ''),
(368, 'EMP0044', 'First', 'B.A. II', 'MACRO ECONOMICS', '2020-10-13', 'Tuesday', 'Theory', 'Explanation', 'Slides', 'Meaning and types of Inflation', '-', 96, 'Open Book Exam Copy Collection', '', 0, 0, 0, '', '', ''),
(369, 'EMP0044', 'Third', 'B.A. II', 'MACRO ECONOMICS', '2020-10-13', 'Tuesday', '', '', '', '', '', 0, '', '', 0, 0, 0, '', '', ''),
(370, 'EMP0044', 'Second', 'M.A III ', 'ENVIRONMENTAL E', '2020-10-13', 'Tuesday', '', '', '', '', '', 0, '', '', 0, 0, 0, '', '', ''),
(371, 'EMP0044', 'Fourth', 'M.A, I', 'MACRO ECONOMICS', '2020-10-13', 'Tuesday', '', '', '', '', '', 0, '', '', 0, 0, 0, '', '', '');

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
-- Table structure for table `timetable_new`
--

CREATE TABLE `timetable_new` (
  `id` int(15) NOT NULL,
  `d1` varchar(15) NOT NULL,
  `c1` varchar(15) NOT NULL,
  `s1` varchar(15) NOT NULL,
  `c2` varchar(15) NOT NULL,
  `s2` varchar(15) NOT NULL,
  `c3` varchar(15) NOT NULL,
  `s3` varchar(15) NOT NULL,
  `c4` varchar(15) NOT NULL,
  `s4` varchar(15) NOT NULL,
  `c5` varchar(15) NOT NULL,
  `s5` varchar(15) NOT NULL,
  `c6` varchar(15) NOT NULL,
  `s6` varchar(15) NOT NULL,
  `c7` varchar(15) NOT NULL,
  `s7` varchar(15) NOT NULL,
  `d2` varchar(15) NOT NULL,
  `c8` varchar(15) NOT NULL,
  `s8` varchar(15) NOT NULL,
  `c9` varchar(15) NOT NULL,
  `s9` varchar(15) NOT NULL,
  `c10` varchar(15) NOT NULL,
  `s10` varchar(15) NOT NULL,
  `c11` varchar(15) NOT NULL,
  `s11` varchar(15) NOT NULL,
  `c12` varchar(15) NOT NULL,
  `s12` varchar(15) NOT NULL,
  `c13` varchar(15) NOT NULL,
  `s13` varchar(15) NOT NULL,
  `c14` varchar(15) NOT NULL,
  `s14` varchar(15) NOT NULL,
  `d3` varchar(15) NOT NULL,
  `c15` varchar(15) NOT NULL,
  `s15` varchar(15) NOT NULL,
  `c16` varchar(15) NOT NULL,
  `s16` varchar(15) NOT NULL,
  `c17` varchar(15) NOT NULL,
  `s17` varchar(15) NOT NULL,
  `c18` varchar(15) NOT NULL,
  `s18` varchar(15) NOT NULL,
  `c19` varchar(15) NOT NULL,
  `s19` varchar(15) NOT NULL,
  `c20` varchar(15) NOT NULL,
  `s20` varchar(15) NOT NULL,
  `c21` varchar(15) NOT NULL,
  `s21` varchar(15) NOT NULL,
  `d4` varchar(15) NOT NULL,
  `c22` varchar(15) NOT NULL,
  `s22` varchar(15) NOT NULL,
  `c23` varchar(15) NOT NULL,
  `s23` varchar(15) NOT NULL,
  `c24` varchar(15) NOT NULL,
  `s24` varchar(15) NOT NULL,
  `c25` varchar(15) NOT NULL,
  `s25` varchar(15) NOT NULL,
  `c26` varchar(15) NOT NULL,
  `s26` varchar(15) NOT NULL,
  `c27` varchar(15) NOT NULL,
  `s27` varchar(15) NOT NULL,
  `c28` varchar(15) NOT NULL,
  `s28` varchar(15) NOT NULL,
  `d5` varchar(15) NOT NULL,
  `c29` varchar(15) NOT NULL,
  `s29` varchar(15) NOT NULL,
  `c30` varchar(15) NOT NULL,
  `s30` varchar(15) NOT NULL,
  `c31` varchar(15) NOT NULL,
  `s31` varchar(15) NOT NULL,
  `c32` varchar(15) NOT NULL,
  `s32` varchar(15) NOT NULL,
  `c33` varchar(15) NOT NULL,
  `s33` varchar(15) NOT NULL,
  `c34` varchar(15) NOT NULL,
  `s34` varchar(15) NOT NULL,
  `c35` varchar(15) NOT NULL,
  `s35` varchar(15) NOT NULL,
  `d6` varchar(15) NOT NULL,
  `c36` varchar(15) NOT NULL,
  `s36` varchar(15) NOT NULL,
  `c37` varchar(15) NOT NULL,
  `s37` varchar(15) NOT NULL,
  `c38` varchar(15) NOT NULL,
  `s38` varchar(15) NOT NULL,
  `c39` varchar(15) NOT NULL,
  `s39` varchar(15) NOT NULL,
  `c40` varchar(15) NOT NULL,
  `s40` varchar(15) NOT NULL,
  `c41` varchar(15) NOT NULL,
  `s41` varchar(15) NOT NULL,
  `c42` varchar(15) NOT NULL,
  `s42` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable_new`
--

INSERT INTO `timetable_new` (`id`, `d1`, `c1`, `s1`, `c2`, `s2`, `c3`, `s3`, `c4`, `s4`, `c5`, `s5`, `c6`, `s6`, `c7`, `s7`, `d2`, `c8`, `s8`, `c9`, `s9`, `c10`, `s10`, `c11`, `s11`, `c12`, `s12`, `c13`, `s13`, `c14`, `s14`, `d3`, `c15`, `s15`, `c16`, `s16`, `c17`, `s17`, `c18`, `s18`, `c19`, `s19`, `c20`, `s20`, `c21`, `s21`, `d4`, `c22`, `s22`, `c23`, `s23`, `c24`, `s24`, `c25`, `s25`, `c26`, `s26`, `c27`, `s27`, `c28`, `s28`, `d5`, `c29`, `s29`, `c30`, `s30`, `c31`, `s31`, `c32`, `s32`, `c33`, `s33`, `c34`, `s34`, `c35`, `s35`, `d6`, `c36`, `s36`, `c37`, `s37`, `c38`, `s38`, `c39`, `s39`, `c40`, `s40`, `c41`, `s41`, `c42`, `s42`, `username`) VALUES
(3, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'timetable'),
(4, 'MONDAY', 'BCA II YEAR', 'OPERATI', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', 'BCA I YR', 'FOC', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mala'),
(5, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'newhod'),
(6, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', 'CLASS', 'SBU_EX', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'siby'),
(7, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'deanofscience'),
(8, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'newvc'),
(9, 'MONDAY', 'BCA II YEAR', 'OPERATI', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', 'BCA I YR', 'FOC', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mala'),
(10, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP1102'),
(11, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', 'BCA III YR', '', 'MSC III SEM COM', '', 'BCA III YR', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0070'),
(12, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abhilashasankar'),
(13, 'MONDAY', 'MA III SEM', 'International L', 'MA I SEM', 'Indian Politica', 'MA I Year', '', 'MA III SEM', '', '', '', '', '', '', '', 'TUESDAY', 'BA I YEAR', 'Indian Govt & P', 'MA III SEM', 'International L', 'BA I YEAR', 'Indian Govt & P', 'MA III SEM', 'Citizen & Civic', '', '', '', '', '', '', 'WEDNESDAY', 'MA III SEM', 'International L', 'BA II YEAR', 'Constitutions o', 'MA I SEM', 'Indian Politica', 'MA III SEM', 'Citizen & Civic', '', '', '', '', '', '', 'THURSDAY', 'MA III SEM', 'International L', 'MA I SEM', 'Indian Politica', 'MA III SEM', 'Citizen & Civic', '', '', '', '', '', '', '', '', 'FRIDAY', 'MA III SEM', 'International L', 'MA I SEM', 'Indian Politica', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', 'MA III SEM ', 'International L', 'MA I SEM ', 'Indian Politica', 'MA III SEM', 'Citizen and Civ', '', '', '', '', '', '', '', '', 'Tuhina Johri'),
(14, 'MONDAY', 'bcomiii ca', 'cyber security ', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ca2016.sac'),
(15, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', 'M.Sc. I Sem CS', 'Java with GUI', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Khushbu'),
(16, 'MONDAY', '    BSC III YEA', 'CYBER SECURITY', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ARIFAANJUM'),
(17, 'MONDAY', 'BCA II YEAR', 'OPERATI', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', 'BCA I YR', 'FOC', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mala'),
(18, 'MONDAY', '', '', '', '', '', '', 'à¤¬à¥€.à¤•à¤¾à¤', 'à¤¹à¤¿à¤‚à¤¦à¥€', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', 'à¤¬à¥€.à¤•à¥‰à¤', 'à¤¹à¤¿à¤‚à¤¦à¥€', 'à¤¬à¥€.à¤/à¤¬à', 'à¤¹à¤¿à¤‚à¤¦à¥€', '', '', '', '', 'WEDNESDAY', 'à¤¬à¥€.à¤.à¤ªà', 'à¤ªà¥à¤°à¤¯à¥‹', 'à¤¬à¥€.à¤.à¤ªà', 'à¤ªà¥à¤°à¤¯à¥‹', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', 'à¤¬à¥€.à¤.à¤¦à', 'à¤¹à¤¿à¤‚à¤¦à¥€', 'à¤¬à¥€.à¤.à¤¦à', 'à¤¹à¤¿à¤‚à¤¦à¥€', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', 'à¤¬à¥€.à¤.à¤¤à', 'à¤ªà¥à¤°à¤¯à¥‹', 'à¤¬à¥€.à¤.à¤¤à', 'à¤ªà¥à¤°à¤¯à¥‹', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0038'),
(19, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', 'BA III YR', 'HISTORY', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0042'),
(20, 'MONDAY', 'B.Com. II F', 'ICA', 'B.Com. II Tax', 'Principles of M', 'B.Com. I F', 'Business Law', '', '', '', '', '', '', '', '', 'TUESDAY', 'B.Com. II F', 'ICA', 'B.Com. II Tax', 'Principles of M', 'B.Com. I F', 'Business Law', '', '', '', '', '', '', '', '', 'WEDNESDAY', 'B.com II Year F', 'ICA ', 'B.Com. II Tax', 'Principles of M', 'B.Com. I F', 'Business Law', '', '', '', '', '', '', '', '', 'THURSDAY', 'B.Com. II F', 'Principles of M', 'M.Com I Sem. ', 'Adv. & Sales', '', '', 'B.Com. III F', 'Auditing', '', '', '', '', '', '', 'FRIDAY', 'B.Com. II F', 'Principles of M', 'M.Com I Sem. ', 'Adv. & Sales', '', '', 'B.Com. III F', 'Auditing', '', '', '', '', '', '', 'SATURDAY', 'B.Com. II F', 'Principles of M', 'M.Com I Sem. ', 'Adv. & Sales', '', '', 'B.Com. III F', 'Auditing', '', '', '', '', '', '', 'EMP0057'),
(21, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ramendrasac'),
(22, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ramendrasac'),
(23, 'MONDAY', '    BCA I YR', 'FOC', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', 'BCA IIIYR', 'COMPUTER NETWOR', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1100'),
(24, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1200'),
(25, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0048'),
(26, 'MONDAY', 'Marketing manag', '', '', '', 'Business Statis', '', '', '', '', '', '', 'Consumer Behavi', '', '', 'TUESDAY', '', 'Marketing Resea', '', '', '', '', '', '', '', '', '', 'Advertising Man', '', '', 'WEDNESDAY', 'Business Statis', '', '', 'Marketing Manag', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', 'Marketing Resea', '', '', '', 'Marketing Manag', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', 'Business Statis', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', 'Marketing Resea', '', '', '', '', '', 'Consumer Behavi', '', '', '', 'Chitranshi'),
(27, 'MONDAY', ' B.COM  II YR H', 'PUBLIC FINANCE', 'M.COM III YR', 'ENTREPRENEURSHI', 'B.COM II YR HON', 'PUBLIC FINANCE', 'M.COM III YR', 'ENTREPRENEURSHI', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0118'),
(28, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0126'),
(29, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'manju2402'),
(30, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'manju1234'),
(31, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'manju1234'),
(32, 'MONDAY', '', '', '', '', '', '', '', '', '', '', 'M.Sc. III Semes', 'Spectroscopy', 'M.Sc. III Semes', 'Organic Practic', 'TUESDAY', '', '', '', '', 'M.Sc. I Semeste', 'Organic Chemist', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', 'B.Sc. II Year', 'Paper III Organ', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', 'M.Sc. I Semeste', 'Organic Chemist', '', '', '', '', '', '', 'M.Sc. III Semes', 'Spectroscopy', 'FRIDAY', 'M.Sc. I Semeste', 'Organic Chemist', '', '', '', '', '', '', '', '', '', '', 'M.Sc. III Semes', 'Spectroscopy', 'SATURDAY', 'B.Sc. II Year', 'Paper III Organ', '', '', '', '', 'B.Sc. II Year', 'Paper III Organ', 'M.Sc. III Semes', 'Organic Practic', 'M.Sc. III Semes', 'Organic Practic', '', '', 'EMP1043_M'),
(33, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'zareen'),
(34, 'MONDAY', 'M.Sc III Sem', 'Medical Microbi', '', '', '', '', '', '', '', '', 'B.Ed III Sem', 'Pedagofy of sch', '', '', 'TUESDAY', 'B.Sc III year', 'IMB PAPER-I', 'B.Sc II year', 'BOTANY PAPER-II', 'B.Sc III year', 'IMB PAPER-I', 'B.Sc II year', 'BOTANY PAPER-II', '', '', '', '', '', '', 'WEDNESDAY', 'M.Sc III sem', 'Medical Microbi', '', '', '', '', '', '', 'B.A. II year ', 'EVS', 'B.Ed III Sem ', 'Pedagogy of Sch', '', '', 'THURSDAY', '', '', '', '', '', '', 'M.Sc III Sem ', 'Medical Microbi', '', '', '', '', '', '', 'FRIDAY', 'B.Sc III year', 'IMB PAPER-I', 'B.Sc IIYear', 'BOTANY PAPER-II', 'B.Sc III year', 'IMB PAPER-I', 'B.Sc II year', 'BOTANY PAPER-II', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'zara'),
(35, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0075'),
(36, 'MONDAY', '', '', 'MA I', 'Economics of Gr', 'MA III', 'Public Economic', '', '', 'BA/BSc/BCA I', 'Entrepreneurshi', '', '', '', '', 'TUESDAY', 'MA I', 'Economics of Gr', 'BA/BSc II', 'Public Finance ', 'MA III', 'Public Economic', 'BA/BSc II', 'Public Finance ', '', '', '', '', '', '', 'WEDNESDAY', 'BA/BSC III', 'Developmental a', 'MA III', 'Public Economic', 'BA/BSC III', 'Developmental a', 'MA I', 'Economics of Gr', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', 'MA III', 'Public Economic', 'MA I', 'Economics of Gr', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', 'MA III SEM', 'Public Economic', 'MA I', 'Economics of Gr', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', 'MA III SEM', 'Public Economic', 'MA I', 'Economics of Gr', '', '', '', '', '', '', 'EMP0049'),
(37, 'MONDAY', 'M.A I ', 'Quantitative Te', '', '', '', '', 'M.A III', 'Industrial  Eco', '', '', '', '', '', '', 'TUESDAY', 'M.A III', 'Industrial  Eco', 'M.A I ', 'Quantitative Te', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', 'M.A I ', 'Quantitative Te', '', '', 'M.A III', 'Industrial  Eco', '', '', '', '', '', '', '', '', 'THURSDAY', 'M.A I ', 'Quantitative Te', 'M.A III', 'Industrial  Eco', 'B.COM I', 'Macro Economics', '', '', '', '', '', '', '', '', 'FRIDAY', 'M.A I ', 'Quantitative Te', 'M.A III', 'Industrial  Eco', 'B.COM I', 'Macro Economics', '', '', '', '', '', '', '', '', 'SATURDAY', 'M.A I ', 'Quantitative Te', 'M.A III', 'Industrial  Eco', 'B.COM I', 'Macro Economics', '', '', '', '', '', '', '', '', 'EMP0046'),
(38, 'MONDAY', '', '', '', '', '', '', '', '', '', '', 'BSC BIO IIIrd', 'Hindi Lang.', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', 'BSC+ BCAIII rd', 'Hindi Lang.', '', '', '', '', 'THURSDAY', 'Hindi Lit II  y', 'Paper I st ', 'HIndi Lit . I Y', 'Paper 2nd ', 'Hindi Lit II YE', 'Paper Ist ', 'Hindi Lit. 1yea', 'Paper 1st ', '', '', '', '', '', '', 'FRIDAY', '', '', 'BA.IIyear Fun. ', 'Paper IInd ', '', '', 'BA.IIYear  Fun.', 'Paper II nd ', '', '', '', '', '', '', 'SATURDAY', '', '', 'Nss.', '', '', '', 'Nss', '', '', '', '', '', '', '', 'EMP1110 '),
(39, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0085@SACJ201'),
(40, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'sarojjunghare'),
(41, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'khushbu'),
(42, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'emp1035'),
(43, 'MONDAY', 'BCA 2', 'Python Programm', 'BSC 3', 'OPERATING SYS A', 'BCA 2', 'Python Programm', 'BSC 3', 'OPERATING SYS A', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', 'BCA 1', 'Cyber Security', '', '', '', '', 'BCA 1', 'Cyber Security', 'BCA 3', 'PHP', '', '', 'BCA 3', 'PHP', 'THURSDAY', '', '', 'BSC 3', 'OPERATING SYS A', '', '', 'BSC 3', 'OPERATING SYS A', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', 'BCA 2', 'Python Programm', '', '', 'BCA 2', 'Python Programm', 'BCA 3', '', '', '', 'BCA 3', '', 'emp0135'),
(44, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', 'B.Ed III SEM', 'PSYCHOLOGY PRAC', 'B.Ed III SEM ', 'PSYCHOLOGY PRAC', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', 'B.Ed III SEM ', 'PSYCHOLOGY PRAC', 'B.Ed III SEM ', 'PSYCHOLOGY PRAC', '', '', '', '', '', '', '', '', '', '', 'Archana'),
(45, 'MONDAY', 'MA I SEM', 'Indian Govt & P', 'BA III YEAR', 'Public  Adminis', 'MA III SEM', 'Local Govt.', 'BA III YEAR', 'Public Administ', '', '', '', '', '', '', 'TUESDAY', 'BA I YEAR', 'Basic Principle', 'MA III SEM', 'Local Govt.', 'BA I YEAR', 'Basic Principle', 'MA I SEM', 'Indian Govt & P', '', '', '', '', '', '', 'WEDNESDAY', 'MA I SEM', 'Indian Govt & P', 'MA III SEM', 'Local Govt', 'MA  I SEM', 'Indian Govt & P', 'MA III SEM', 'Local Govt.', '', '', '', '', '', '', 'THURSDAY', 'MA I SEM', 'Indian  Govt & ', '', '', 'MA I SEM ', 'Indian Govt & P', 'MA III SEM', 'Local Govt', '', '', '', '', '', '', 'FRIDAY', 'MA I SEM', 'Indian Govt & P', '', '', 'MA I SEM ', 'Indian Govt & P', 'MA III SEM', 'Local Govt', '', '', '', '', '', '', 'SATURDAY', 'MA I SEM', 'Indian Govt & P', '', '', 'MA III SEM', 'Local Govt', '', '', '', '', '', '', '', '', 'EMP0041'),
(46, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SUSHMA'),
(47, 'MONDAY', 'M.A. III', 'PAPER I CRITICA', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'APARNA'),
(48, 'MONDAY', 'BSC 1stYr', 'BOTANY', 'BSc1stYr', 'BOTANY', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', 'BACT  PRACTICAL', 'MSc IstSem', 'BSc 2ndyr', 'BOTANY', 'BSc 2ndYr', 'BOTANY', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', 'BOTANY', 'BSc 3rdYr', 'BOTANY', 'BSc 3rdYR', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', 'BOTANY', 'BSc 1stYr', 'BOTANY', 'BSc 1stYr', '', '', '', '', '', '', 'FRIDAY', 'BOTANY', 'BSc 2ndYr', 'BOTANY', 'BSc 2ndYr', '', '', 'BACTERIOLOGY', 'MSc Ist Sem', '', '', '', '', '', '', 'SATURDAY', 'BOTANY', 'BSc 3rd Yr', 'BOTANY', 'BSc 3rd Yr', '', '', '', '', '', '', '', '', '', '', 'Shi01'),
(49, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'EMP0093'),
(50, 'MONDAY', '', '', '', '', '', '', '', '', 'à¤¬à¥€. à¤à¤¸.', 'à¤­à¤¾à¤·à¤¾', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', 'à¤¬à¥€.à¤.à¥¨', 'à¤¹à¤¿à¤‚à¤¦à¥€', '', '', '', '', 'WEDNESDAY', '', '', 'à¤¬à¥€.à¤.à¥¨', 'à¤ªà¥à¤°à¤¯à¥‹', '', '', 'à¤¬à¥€.à¤.', 'à¤ªà¥à¤°à¤¯à¥‹', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', 'à¤¬à¥€à¤•à¤¾à¤®', 'à¤¹à¤¿à¤‚à¤¦à¥€', '', '', '', '', '', '', 'FRIDAY', '', '', 'à¤¬à¥€.à¤.à¤¤ï', 'à¤ªà¥à¤°à¤¯à¥‹', '', '', '  .à¤¬à¥€.à¤.ï', 'à¤ªà¥à¤°à¤¯à¥‹', '', '', '', '', '', '', 'SATURDAY', '', '', 'à¤¬à¥€.à¤.à¤¤ï', 'à¤¹à¤¿à¤‚à¤¦à¥€', '', '', 'à¤¬à¥€.à¤.à¤¤ï', 'à¤¹à¤¿à¤‚à¤¦à¥€', '', '', '', '', '', '', 'EMP0039'),
(51, 'MONDAY', '', '', 'MA III SEM ', 'PAPER II- ENGLI', '', '', 'MA I SEM', 'PROJECT', 'MA I SEM', 'PAPER IV-PROSE', '', '', '', '', 'TUESDAY', '', '', 'MA III SEM ', 'PAPER II- ENGLI', '', '', 'BCA/ BSC II YEA', 'FC II', 'MA III ', 'PROJECT', '', '', '', '', 'WEDNESDAY', 'BA I FUNCT. ENG', ' PAPER I- PHONE', '', '', 'BA I FUNCT. ENG', 'PAPER I- PHONET', 'MA III SEM ', 'PAPER II-ENGLIS', '', '', '', '', 'MA I SEM', 'PAPER IV-PROSE', 'THURSDAY', '', '', 'BA II FUNCT. EN', 'PAPER II-WRITIN', '', '', 'BA II FUNCT. EN', 'PAPER II-WRITIN', 'MA I SEM', 'PAPER IV-PROSE', '', '', '', '', 'FRIDAY', 'BA II ENG.LIT.', 'PAPER I-DRAMA', '', '', 'BA II ENG.LIT.', 'PAPER I-DRAMA', 'MA III SEM', 'PAPER II- ENGLI', '', '', 'MA I SEM', 'PAPER IV-PROSE', '', '', 'SATURDAY', '', '', '', '', '', '', 'MA III SEM', 'PAPER II- ENGLI', '', '', '', '', 'MA I SEM', 'PAPER IV-PROSE', 'niharika@220120'),
(52, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JUHI1086'),
(53, 'MONDAY', '', '', 'BCOM CA II YEAR', 'Corporate Accou', '', '', '', '', 'BCOM III  APP E', 'Auditing', '', '', '', '', 'TUESDAY', '', '', 'BCOM CA  II YEA', 'Corporate Accou', '', '', '', '', 'BCOM III  APP E', 'Auditing', '', '', '', '', 'WEDNESDAY', '', '', 'BCOM CA II YEAR', 'Corporate Accou', '', '', '', '', 'BCOM III  APP E', 'Auditing', '', '', '', '', 'THURSDAY', 'BCOM TAX II YEA', 'Corporate Accou', '', '', '', '', '', 'Auditing', '', '', '', '', '', '', 'FRIDAY', 'BCOM TAX II YEA', 'Corporate Accou', '', '', '', '', '', 'Auditing', '', '', '', '', '', '', 'SATURDAY', 'BCOM TAX II YEA', 'Corporate Accou', '', '', '', '', '', 'Auditing', '', '', '', '', '', '', 'sonalrai01'),
(54, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sukhvinder Kaur'),
(55, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'kiran'),
(56, 'MONDAY', '', '', '', '', '', '', '', '', 'B.A.III YEAR', 'FC- I, HINDI', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', 'B.A. I YEAR', 'HINDI LIT. , PA', '', '', 'B.A. I YEAR', 'HINDI LIT. , PA', '', '', '', '', '', '', '', '', 'FRIDAY', 'B.A. II YEAR', 'FUNC. HINDI , P', '', '', 'B.A. II YEAR', 'FUNC. HINDI , P', '', '', '', '', '', '', '', '', 'SATURDAY', 'B.A. III YEAR', 'HINDI LIT. , PA', '', '', 'B.A. III YEAR', 'HINDI LIT. , PA', '', '', '', '', '', '', '', '', 'EMP0040'),
(57, 'MONDAY', 'BA I', 'Micro Economics', 'MA III ', 'Rural Developme', 'BA I', 'Micro Economics', 'MA I', 'Micro Economic ', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', 'MA I', 'Micro Economic ', 'MA III ', 'Rural Developme', '', '', '', '', '', '', 'WEDNESDAY', 'MA III ', 'Rural Developme', '', '', 'MA I', 'Micro Economic ', '', '', '', '', '', '', '', '', 'THURSDAY', 'MA III ', 'Rural Developme', '', '', 'MA I', 'Micro Economic ', '', '', '', '', '', '', '', '', 'FRIDAY', 'MA III ', 'Rural Developme', '', '', 'MA I', 'Micro Economic ', '', '', '', '', '', '', '', '', 'SATURDAY', 'MA III ', 'Rural Developme', '', '', 'MA I', 'Micro Economic ', '', '', '', '', '', '', '', '', 'EMP0043'),
(58, 'MONDAY', 'M.A III ', 'ENVIRONMENTAL E', 'B.A. I', 'INDIAN ECONOMY', 'M.A, I', 'MACRO ECONOMICS', 'B.A. I', 'MACRO ECONOMICS', '', '', '', '', '', '', 'TUESDAY', 'B.A. II', 'MACRO ECONOMICS', 'M.A III ', 'ENVIRONMENTAL E', 'B.A. II', 'MACRO ECONOMICS', 'M.A, I', 'MACRO ECONOMICS', '', '', '', '', '', '', 'WEDNESDAY', '', '', 'M.A, I', 'MACRO ECONOMICS', '', '', 'M.A III ', 'ENVIRONMENTAL E', '', '', '', '', '', '', 'THURSDAY', '', '', 'M.A, I', 'MACRO ECONOMICS', '', '', 'M.A III ', 'ENVIRONMENTAL E', '', '', '', '', '', '', 'FRIDAY', '', '', 'M.A, I', 'MACRO ECONOMICS', '', '', 'M.A III ', 'ENVIRONMENTAL E', '', '', '', '', '', '', 'SATURDAY', '', '', 'M.A, I', 'MACRO ECONOMICS', '', '', 'M.A III ', 'ENVIRONMENTAL E', '', '', '', '', '', '', 'EMP0044'),
(59, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pearly ');

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
(23, '12345', 'admin', 'Admin', '', '', '', 'c93ccd78b2076528346216b3b2f701e6'),
(36, '000', 'demo', 'demo', '', '', 'Principal', 'e10adc3949ba59abbe56e057f20f883e'),
(41, 'EMP1102', 'EMP1102', 'JITENDRA JAIN', 'Physical Science', 'Computer Science and Application', 'Professor', '21d2bbd0ab9421f04600fa892828f433'),
(42, 'EMP0070', 'EMP0070', 'PRAKASH KUMAR LANGE', 'Physical Science', 'Computer Science and Application', 'Professor', 'f91e15dbec69fc40f81f0876e7009648'),
(43, 'EMP0062', 'abhilashasankari', 'Abhilasha Sankari', 'Physical Science', 'Computer Science and Application', 'Professor', 'eef32d99511caf5c2774b27ead66d245'),
(44, 'EMP0114', 'Tuhina Johri', 'Dr. Tuhina Johri', 'Arts and Social Scie', 'Political Science', 'Hod', 'cf44e043b4747ef1d363f0ae8e5dd4aa'),
(45, 'EMP0063', 'ca2016.sac', 'Prabhjyot kaur Harya', 'Physical Science', 'Computer Science and Application', 'Professor', '6e7ad5124dbf556bd7afdb0bb11eeab5'),
(47, 'EMP0023', 'ARIFAANJUM', 'Ms. Arifa Anjum', 'Physical Science', 'Computer Science and Application', 'Professor', 'e10adc3949ba59abbe56e057f20f883e'),
(48, 'EMP0064', 'mala', 'Ms. MALA DAS', 'Physical Science', 'Computer Science and Application', 'Professor', 'b79f4dd2ca710d787234eed438870c3b'),
(49, 'EMP0038', 'EMP0038', 'Dr. Ramendra Prasad ', 'Arts and Social Scie', 'Hindi', 'Hod', 'b76be041f9d9a657685c5938a89923e4'),
(50, 'EMP0042', 'EMP0042', 'Dr. Manju Maria Solo', 'Arts and Social Scie', 'History', 'Hod', 'bbdd0e294fd183663ccadb3d3f94dca1'),
(51, 'EMP0057', 'EMP0057', 'Dr. Ashu Jain', 'Commerce and Managem', 'Taxation and Computer Application', 'Professor', '274f83d9de46f6022129d47d2af6a5e0'),
(53, 'EMP0038', 'ramendrasac', 'Dr. Ramendra Prasad ', 'Arts and Social Scie', 'Hindi', 'Hod', '022f16cf0c022698076a83392e4b974d'),
(56, 'EMP0048', 'EMP0048', 'Dr Hephzibah B John', 'Commerce and Managem', 'Taxation and Computer Application', 'Professor', 'f9be311e65d81a9ad8150a60844bb94c'),
(57, 'EMP1115', 'Chitranshi', 'Dr. Chitranshi Verma', 'Commerce and Managem', 'Management', 'Professor', '627e1ccc37e8d0386be720026e90afe5'),
(58, 'EMP0118', 'EMP0118', 'Dr. Meenakshi Swamy', 'Commerce and Managem', 'Applied Economics', 'Professor', '827ccb0eea8a706c4c34a16891f84e7b'),
(59, 'EMP0126', 'EMP0126', 'DR. KOMAL RAWAT', 'Commerce and Managem', 'B.Com. Honors', 'Professor', '03c677c8ff3ac4b08a6bea633abd0559'),
(60, 'EMP1043', 'manju2402', 'Dr Manju Gupta', 'Life Science', 'Chemistry', 'Professor', '44604887be305e513ad8f5076796a287'),
(61, 'EMP1043', 'manju1234', 'Dr Manju Gupta', 'Life Science', 'Chemistry', 'Professor', '44604887be305e513ad8f5076796a287'),
(62, 'EMP1043', 'manju1234', 'Dr Manju Gupta', 'Life Science', 'Chemistry', 'Professor', '44604887be305e513ad8f5076796a287'),
(63, 'EMP1043', 'EMP1043_M', 'Dr Manju Gupta', 'Life Science', 'Chemistry', 'Professor', 'c41a9abb5469c66d680506a4543420eb'),
(64, 'EMP1034', 'zareen', 'Dr. Zareen Baksh', 'Education', 'Education', 'Professor', '2e34e02ce14ed12aff047b2fe7518e0e'),
(65, 'EMP1034', 'zara', 'Dr. Zareen Baksh', 'Life Science', 'Botany and Microbiology', 'Professor', 'fac0fcf4a21fbc772b020045645d2c14'),
(66, 'EMP0075', 'EMP0075', 'MRS. ROSHNI CHOUBEY', 'Life Science', 'Botany and Microbiology', 'Professor', 'a8952077a079424cce1441198716129f'),
(67, 'EMP0049', 'EMP0049', 'Dr. Anthonima Kennet', 'Arts and Social Scie', 'Economics', 'Professor', 'f8df12d2dfdd58db1e58083c41fa9f49'),
(68, 'EMP0046', 'EMP0046', 'Dr.Renu Markande', 'Arts and Social Scie', 'Economics', 'Professor', '873c137617b4e703beb2b502511db3b3'),
(69, 'EMP1110', 'EMP1110 ', 'dr Abhilasha shukla ', 'Arts and Social Scie', 'Hindi', 'Professor', '298323816a027d80b788f9d11d462b79'),
(70, 'EMP0085', 'EMP0085@SACJ2015', 'Dr. Sutapa Roy', 'Life Science', 'Chemistry', 'Professor', 'b551c2fee2a324ecb11c1191b99c6202'),
(71, 'EMP0061', 'sarojjunghare', 'Saroj Junghare', 'Physical Science', 'Computer Science and Application', 'Professor', 'd984e42568451b7c24131759dc7fddb2'),
(72, 'EMP0067', 'khushbu', 'Khushbu Gupta', 'Physical Science', 'Computer Science and Application', 'Professor', 'c8d8f76982ff994726554b339a0dc613'),
(73, 'EMP0135', 'emp1035', 'swapnil justin', 'Physical Science', 'Computer Science and Application', 'Professor', '9520c304ce3bd1b5439ca4f3c890e8be'),
(74, 'EMP0135', 'emp0135', 'swapnil justin', 'Physical Science', 'Computer Science and Application', 'Professor', '9520c304ce3bd1b5439ca4f3c890e8be'),
(75, 'EMP0092', 'Archana', 'Dr. Archana Singhal', 'Education', 'Education', 'Professor', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
(76, 'EMP0041', 'EMP0041', 'Dr. Vishwas Patel', 'Arts and Social Scie', 'Political Science', 'Professor', '925307649c3ad0d5d043aa7794dfe240'),
(77, 'EMP1036', 'SUSHMA', 'Dr. Sushma Pillal', 'Education', 'Education', 'Professor', '44bb3c49a82504b6229464e81c3d05cd'),
(78, 'EMP1098', 'APARNA', 'DR APARNA MUKHERJEE ', 'Arts and Social Scie', 'English', 'Professor', '8a62b13ed9f8fdd988b7540b82d3bc0e'),
(79, 'EMP0074', 'Shi01', 'shikha bansal', 'Life Science', 'Botany and Microbiology', 'Hod', '31b67a67061f0f9c03b9a3c9c8082c6b'),
(80, 'EMP0093', 'EMP0093', 'Akhilesh Pathak', 'Physical Science', 'Mathematics', 'Professor', '892c99cea58e841f6a155cd5ab81fb67'),
(81, 'EMP0039', 'EMP0039', 'Dr.carolin saini', 'Arts and Social Scie', 'Hindi', 'Professor', 'ce89baf749a129e94727c43b98587264'),
(82, 'EMP0112', 'niharika@220120', 'Dr. Niharika Singh', 'Arts and Social Scie', 'English', 'Professor', '7b487a2c410f626583b3201c52633261'),
(83, 'EMP1086', 'JUHI1086', 'JUHI SHARMA', 'Life Science', 'Botany and Microbiology', 'Professor', '43feb545eee802986ea7f69b68c7d3e0'),
(84, 'EMP0131', 'sonalrai01', 'Dr Sonal Rai', 'Commerce and Managem', 'Taxation and Computer Application', 'Dean', '2dff9e70c9516e5aa0e91480748b4167'),
(85, 'EMP0060', 'Sukhvinder Kaur Walia', 'Mrs. Sukhvinder Kaur', 'Physical Science', 'Computer Science and Application', 'Professor', '48d9d2bbfdb0d128464d3d7ecfa626b4'),
(86, 'EMP0132', 'kiran', 'Dr. Kiran Mishra ', 'Education', 'Education', 'Hod', '470667c751bf59cd21b02509271611f5'),
(87, 'EMP0040', 'EMP0040', 'Dr. Reena Thomas', 'Arts and Social Scie', 'Hindi', 'Professor', 'ed1d2e833c974ea3a09e5aa3cf9e49f8'),
(88, 'EMP0043', 'EMP0043', 'Dr. Elena Philip', 'Arts and Social Scie', 'Economics', 'Dean', '690fbd83dea8ad23807913d2028834d4'),
(89, 'EMP0044', 'EMP0044', 'Dr. Reeta Chouhan', 'Arts and Social Scie', 'Economics', 'Hod', '8639f62eb93719bcb3a29eab866656c3'),
(90, 'EMP0047', 'Pearly ', 'Dr. Pearly Jacob', 'Commerce and Managem', 'Management', 'Hod', '8094bdf95e810c31a9d714d131976efe');

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
(56, 'EMP0067', 'Professor'),
(58, 'EMP0070', 'Professor'),
(59, 'EMP0073', 'Professor'),
(60, 'EMP0074', 'Hod'),
(61, 'EMP0075', 'Professor'),
(62, 'EMP0077', 'Professor'),
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
(78, 'EMP0112', 'Professor'),
(79, 'EMP0115', 'Professor'),
(80, 'EMP0118', 'Professor'),
(81, 'EMP0119', 'Professor'),
(82, 'EMP0123', 'Professor'),
(83, 'EMP0124', 'Professor'),
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
(112, 'EMP0064', 'Professor');

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
-- Indexes for table `timetable_new`
--
ALTER TABLE `timetable_new`
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
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `timetable_new`
--
ALTER TABLE `timetable_new`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `verifyid`
--
ALTER TABLE `verifyid`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
