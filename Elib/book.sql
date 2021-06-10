-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 07:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BID` int(11) NOT NULL,
  `BTITLE` varchar(150) NOT NULL,
  `KEYWORDS` varchar(150) NOT NULL,
  `FILE` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `BTITLE`, `KEYWORDS`, `FILE`) VALUES
(1, 'PHP PROGRAMS', 'PHP,HTML,CSS', 'upload/lib.pdf'),
(2, 'CSS', 'css', 'upload/lord_balaji_face-852x480.jpg'),
(3, 'Cpp', 'C++', 'upload/KARTHIK-K-Participant-Certificate.pdf'),
(4, 'rr', 'rr', 'upload/1.pdf'),
(5, 'php', 'php', 'upload/MC 5012 Unit 4.pdf'),
(6, 'java', 'java', 'upload/8203 Online Practical Exam Front Page Template.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CID` int(11) NOT NULL,
  `BID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `COMM` varchar(150) NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CID`, `BID`, `SID`, `COMM`, `LOGS`) VALUES
(1, 1, 1, 'Nice Book', '2020-04-27 08:08:04'),
(2, 1, 4, 'goog book', '2020-04-29 01:19:27'),
(3, 1, 5, 'Super book', '2020-04-29 01:28:31'),
(4, 2, 3, 'good book', '2020-04-30 05:07:23'),
(5, 2, 3, 'ok i am used this ,each content is usefull', '2020-04-30 05:12:53'),
(6, 2, 8, 'Super', '2020-05-10 09:47:38'),
(7, 1, 10, 'book nice\r\n', '2020-08-16 00:47:57'),
(8, 1, 11, 'nice book', '2020-10-12 17:07:37'),
(9, 6, 12, 'nice book', '2021-05-17 20:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `MES` text NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RID`, `ID`, `MES`, `LOGS`) VALUES
(1, 1, 'Need php book', '2020-04-26 09:14:15'),
(2, 1, ' hi sir i need JAVA Book \r\n', '2020-04-28 03:38:29'),
(3, 4, ' i need javascript ', '2020-04-29 00:16:50'),
(4, 5, ' I have need python book', '2020-04-29 01:27:40'),
(5, 3, ' i need .net book', '2020-04-30 05:04:09'),
(6, 7, ' i need HTML Boon', '2020-05-05 09:29:16'),
(7, 8, ' computer', '2020-05-10 09:42:32'),
(8, 10, 'Blender', '2020-08-16 00:51:27'),
(9, 11, ' i want java book', '2020-10-12 17:07:59'),
(10, 1, ' i need java book', '2020-11-09 10:48:53'),
(11, 1, ' i need c# book', '2020-12-28 09:29:34'),
(12, 12, ' i need java', '2021-05-17 20:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `PASS` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `DEP` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `PASS`, `MAIL`, `DEP`) VALUES
(1, 'karthik', 'kkkk', 'gk8924768@gmail.com', 'MCA'),
(2, 'S Sandhiya', '1234', 'sandhiyasubramaniiyan@gmail.com', 'MCA'),
(3, 'Pavithra', '1234', 'mspavithra@gmail.com', 'MCA'),
(4, 'Gokul', '1234', 'gokultkdr4@gmail.com', 'MCA'),
(5, 'Ragul', '1234', 'ragulraina@gmail.com', 'MCA'),
(6, 'Kishore', '1234', 'kishore@gmail.com', 'MCA'),
(7, 'maha', '1234', 'maha@gmail.com', 'MCA'),
(8, 'kavitha', 'kavi123', 'kavi212017@gmail.com', 'CSE'),
(9, 'santhosh', 'yyy', 'abc@gmail.com', 'MCA'),
(10, 'parthi', 'parthi', 'parthitkc6@gmail.com', 'CSE'),
(11, 'kumar', '1234', 'kumar@gmail.com', 'MCA'),
(12, 'karthik', '1234', 'karthikkaliyapermal1@gmail.com', 'MCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
