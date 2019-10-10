-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 06:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `das`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `t_ID` decimal(10,0) DEFAULT NULL,
  `co_ID` decimal(10,0) DEFAULT NULL,
  `TITLE` varchar(10) DEFAULT NULL,
  `s_ID` decimal(10,0) DEFAULT NULL,
  `C_DATE` varchar(20) DEFAULT NULL,
  `attend` varchar(10) NOT NULL DEFAULT 'PRESENT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`t_ID`, `co_ID`, `TITLE`, `s_ID`, `C_DATE`, `attend`) VALUES
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '2', '10-Jun-19', 'ABSENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '10-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '11-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '11-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '2019-06-11', 'PRESENT'),
('1', '22', 'MATH', '2', '2019-06-11', 'ABSENT'),
('1', '22', 'MATH', '2', '2019-06-11', 'ABSENT'),
('1', '22', 'MATH', '11', '2019-06-11', 'PRESENT'),
('1', '22', 'MATH', '11', '12-Jun-19', 'PRESENT'),
('1', '22', 'MATH', '1', '2019-06-12', 'PRESENT'),
('1', '22', 'MATH', '1', '2019-06-12', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-12', 'PRESENT'),
('1', '22', 'MATH', '5', '2019-06-12', 'ABSENT'),
('1', '22', 'MATH', '11', '2019-06-12', 'PRESENT'),
('1', '22', 'MATH', '0', '2019-06-12', 'PRESENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '0', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('1', '22', 'MATH', '11', '2019-06-13', 'ABSENT'),
('1', '22', 'MATH', '5', '2019-06-13', 'ABSENT'),
('2', '22', 'MATH', '11', '2019-06-13', 'PRESENT'),
('2', '22', 'MATH', '2', '2019-06-13', 'ABSENT'),
('2', '26', 'OOP', '11', '2019-06-13', 'PRESENT'),
('2', '26', 'OOP', '2', '2019-06-13', 'PRESENT');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `cl_ID` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`cl_ID`) VALUES
('8'),
('26'),
('35');

-- --------------------------------------------------------

--
-- Table structure for table `class_course`
--

CREATE TABLE `class_course` (
  `co_ID` decimal(10,0) DEFAULT NULL,
  `cl_ID` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_course`
--

INSERT INTO `class_course` (`co_ID`, `cl_ID`) VALUES
('22', '22'),
('22', '22'),
('26', '26');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `co_ID` decimal(10,0) NOT NULL,
  `TITLE` varchar(110) DEFAULT NULL,
  `CREDIT` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`co_ID`, `TITLE`, `CREDIT`) VALUES
('22', 'MATH', '3.00'),
('26', 'OOP', '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `s_ID` int(11) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `cl_ID` int(11) NOT NULL,
  `percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`s_ID`, `NAME`, `cl_ID`, `percent`) VALUES
(0, 'r', 22, 100),
(2, 'l', 22, 0),
(2, 'l', 22, 0),
(5, 'h', 22, 18),
(11, 'r', 26, 100),
(2, 'l', 26, 100),
(11, 'r', 22, 92);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_ID` decimal(10,0) NOT NULL,
  `NAME` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(15) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_ID`, `NAME`, `EMAIL`, `PASSWORD`) VALUES
('1', 'a', 'a', '12'),
('2', 'l', 'rt', '2'),
('5', 'h', 'h', '1266'),
('11', 'r', 'r@gmail.com', '12'),
('43', 's', 's@gmail.com', '12'),
('81', 'ulfat', 'u@gmail.com', '12'),
('100', 'p', 'p@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `s_ID` decimal(10,0) DEFAULT NULL,
  `cl_ID` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`s_ID`, `cl_ID`) VALUES
('11', '22'),
('5', '22'),
('2', '22'),
('1', '11'),
('11', '26'),
('2', '26'),
('1', '22'),
('1', '22'),
('2', '99'),
('43', '22'),
('91', '26'),
('81', '26');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_ID` decimal(10,0) NOT NULL,
  `NAME` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(115) DEFAULT NULL,
  `CONTRACT` varchar(115) DEFAULT NULL,
  `PASSWORD` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_ID`, `NAME`, `EMAIL`, `CONTRACT`, `PASSWORD`) VALUES
('1', 't', 'y', '23', '12'),
('2', 'm', 'm@gmail.com', '12', '12'),
('44', 'n', 'n@gmail.com', '12', '12'),
('83', 'ab', 'ab@gmail.com', '12', '12'),
('100', 'cd', 'cd@gmail.com', '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE `teacher_class` (
  `cl_ID` decimal(10,0) DEFAULT NULL,
  `t_ID` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class`
--

INSERT INTO `teacher_class` (`cl_ID`, `t_ID`) VALUES
('22', '1'),
('26', '2'),
('26', '2'),
('22', '2'),
('60', '100'),
('26', '2'),
('8', '1'),
('35', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`cl_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`co_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
