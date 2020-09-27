-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 05:56 AM
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
-- Database: `teachers_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
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
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `d1`, `c1`, `s1`, `c2`, `s2`, `c3`, `s3`, `c4`, `s4`, `c5`, `s5`, `c6`, `s6`, `c7`, `s7`, `d2`, `c8`, `s8`, `c9`, `s9`, `c10`, `s10`, `c11`, `s11`, `c12`, `s12`, `c13`, `s13`, `c14`, `s14`, `d3`, `c15`, `s15`, `c16`, `s16`, `c17`, `s17`, `c18`, `s18`, `c19`, `s19`, `c20`, `s20`, `c21`, `s21`, `d4`, `c22`, `s22`, `c23`, `s23`, `c24`, `s24`, `c25`, `s25`, `c26`, `s26`, `c27`, `s27`, `c28`, `s28`, `d5`, `c29`, `s29`, `c30`, `s30`, `c31`, `s31`, `c32`, `s32`, `c33`, `s33`, `c34`, `s34`, `c35`, `s35`, `d6`, `c36`, `s36`, `c37`, `s37`, `c38`, `s38`, `c39`, `s39`, `c40`, `s40`, `c41`, `s41`, `c42`, `s42`, `username`) VALUES
(3, 'MONDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TUESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'WEDNESDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'THURSDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'FRIDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SATURDAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'timetable'),
(4, 'MONDAY', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'TUESDAY', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'WEDNESDAY', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'THURSDAY', 'BCA III', 'SCIENCE', 'MSC I', 'OS', 'BCA I', 'MATHS', 'MSC I', 'AUTOMATA THEORY', 'BCA II', 'OS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'FRIDAY', 'MSC II', 'OS', 'BSC II', 'PYTHON', '', '', 'BCA I', 'MATHS', 'BCA I', 'MATHS', '', '', 'BCA I', 'MATHS', 'SATURDAY', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'BCA I', 'MATHS', 'mala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
