-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 09:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `bid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `aname` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `pmno` bigint(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `slot` varchar(255) DEFAULT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
  `mno` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`bid`, `fname`, `lname`, `emailid`, `aname`, `gender`, `pmno`, `age`, `slot`, `doctorname`, `mno`) VALUES
(1, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 45, 'Mon 3 p.m.', NULL, 1000000000),
(2, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Mon 3 p.m.', 'Dr Prashant Pareek', 1000000000),
(3, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Mon 3 p.m.', 'Dr Prashant Pareek', 1000000000),
(4, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Mon 3 p.m.', 'Dr Prashant Pareek', 1000000000),
(5, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Mon 3 p.m.', 'Dr Prashant Pareek', 1000000000),
(6, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Tue 3 p.m.', 'Dr Prashant Pareek', 1000000000),
(7, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 12, 'Wed 4 p.m.', 'Dr Prashant Pareek', 1000000000),
(8, 'Pritesh', 'Palod', 'ppp@gmail.com', 'Rangesh', 1, 7023412397, 20, 'Sat 12 p.m.', 'Dr Prashant Pareek', 1000000000),
(9, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Tue 12 p.m.', 'Dr Prashant Pareek', 1000000000),
(10, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 45, 'Fri 6 p.m.', 'Dr Prashant Pareek', 1000000000),
(11, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Rangesh', 1, 7023412393, 20, 'Sun 7 p.m.', 'Dr Prashant Pareek', 1000000000),
(12, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Sat 12 a.m.', 'Dr Prashant Pareek', 1000000000),
(13, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Sat 9 a.m.', 'Dr Prashant Pareek', 1000000000),
(14, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 45, 'Mon 9 p.m.', 'Dr Prashant Pareek', 1000000000),
(15, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 45, 'Mon 9 p.m.', 'Dr Prashant Pareek', 1000000000),
(16, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Sun 6 p.m.', 'Dr Prashant Pareek', 1000000000),
(17, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Sun 9 p.m.', 'Dr Prashant Pareek', 1000000000),
(18, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Sun 9 p.m.', 'Dr Prashant Pareek', 1000000000),
(19, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Sun 9 p.m.', 'Dr Prashant Pareek', 1000000000),
(20, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Sun 9 p.m.', 'Dr Prashant Pareek', 1000000000),
(21, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 20, 'Sat 12 a.m.', 'Dr Prashant Pareek', 1000000000),
(22, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 20, 'Sat 12 a.m.', 'Dr Prashant Pareek', 1000000000),
(23, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 20, 'Sat 12 a.m.', 'Dr Prashant Pareek', 1000000000),
(24, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Mon 3 a.m.', 'Dr Prashant Pareek', 1000000000),
(25, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 21, 'Mon 3 a.m.', 'Dr Prashant Pareek', 1000000000),
(26, 'Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', 'Dibyanshu', 1, 7023412393, 45, '21', 'Dr Prashant Pareek', 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE `doctorinfo` (
  `dept` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorinfo`
--

INSERT INTO `doctorinfo` (`dept`, `doctorname`, `experience`, `position`) VALUES
(1, 'Dr Prashant Pareek', 'Ex-Apollo Hospitals', 'Senior Doctor, Neuro-Care, Virinchi Hospitals'),
(1, 'Dr Pritesh Palod', 'Assistant Doctor, Neuro Care, Virinchi Hospital', 'Assistant Doctor'),
(1, 'Dr ABC1', 'EXP1', 'POS1'),
(2, 'Dr ABC2', 'EXP2', 'POS2'),
(1, 'Dr ABC1', 'EXP1', 'POS1'),
(2, 'Dr ABC2', 'EXP2', 'POS2');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `mno` bigint(20) DEFAULT NULL,
  `fid` int(11) NOT NULL,
  `dept` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`mno`, `fid`, `dept`, `message`) VALUES
(1000000000, 1, 'Housekeeping', 'Hello Feedback!'),
(1000000000, 2, 'Doctor', 'kjkjkjkjkjkjkjkjkjkjkjkj'),
(1000000000, 3, 'Doctor', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `mno` bigint(20) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `mno`, `message`) VALUES
(1, 1000000000, 'Hello Worlds'),
(2, 1000000000, 'Hello world'),
(3, 1000000000, 'lklklkklklklk'),
(4, 1000000000, 'Hello everyone!');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `pmno` bigint(20) DEFAULT NULL,
  `dept` int(11) DEFAULT NULL,
  `mno` bigint(20) DEFAULT NULL,
  `aname` varchar(50) DEFAULT NULL,
  `amno` bigint(20) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `filename` varchar(50) NOT NULL,
  `hospital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`fname`, `lname`, `gender`, `age`, `pmno`, `dept`, `mno`, `aname`, `amno`, `remarks`, `pid`, `date`, `filename`, `hospital`) VALUES
('Rangesh', 'Soni', 1, 21, 7023412394, 1, 1000000000, 'Pritesh Palod', 7023412395, 'Mad', 13, '2020-08-04', '', ''),
('Yash', 'Gutgutia', 1, 19, 7023412396, 1, 1000000000, 'Pritesh Palod', 7023412395, 'Mad', 14, '2020-08-04', '', ''),
('Jay', 'Bangar', 1, 21, 7023412397, 2, 1000000000, 'Pritesh Palod', 7023412395, 'Mad', 15, '2020-08-04', 'logo.jpg', ''),
('Prashant', 'Pareek', 1, 20, 7023412396, 3, 1000000000, 'Pritesh Palod', 7878787887, 'Too intelligent', 16, '2020-08-05', '', ''),
('Pritesh', 'Palod', 1, 12, 7023412385, 2, 1000000000, 'Pritesh Palod', 7887878787, 'Duffer', 17, '2020-08-05', 'homebg.jpg', ''),
('Shuvam', 'Pandey', 1, 78, 8205202020, 1, 1000000000, 'Pritesh Palod', 7878787887, 'mad', 18, '2020-08-05', 'ap.png', ''),
('Dibyanshu', 'Pranjal', 1, 45, 7023412385, 1, 1000000000, 'Pritesh Palod', 7023412395, NULL, 19, '2020-08-06', 'WWW.YIFY-TORRENTS.COM.jpg', ''),
('Dibyanshu', 'Pranjal', 1, 21, 8205202020, 1, 1000000000, 'Pritesh Palod', 7878787878, 'efdfefef', 20, '2020-08-06', '', ''),
('Dibyanshu', 'Pranjal', 1, 45, 7023412385, 1, 1000000000, 'Pritesh Palod', 7878787878, '', 21, '2020-08-06', '', ''),
('Dibyanshu', 'Pranjal', 1, 45, 8787878787, 1, 1000000000, 'Pritesh Palod', 7878787887, '', 22, '2020-08-06', '', ''),
('Dibyanshu', 'Pranjal', 1, 45, 8205202020, 1, 1000000000, 'Pritesh Palod', 7878787887, 'eeee', 23, '2020-08-06', '', ''),
('Dibyanshu', 'Pranjal', 1, 45, 8787878787, 1, 1000000000, 'Pritesh Palod', 787878787878, 'fff', 24, '2020-08-06', '', ''),
('Dibyanshu', 'Pranjal', 1, 20, 7023412393, 1, 1000000000, 'Pritesh Palod', 7023412393, 'ffgrgrgrgr', 25, '2020-08-17', 'IMG_20200725_141830.jpg', 'Virinchi Hospitals'),
('Dibyanshu', 'Pranjal', 1, 12, 7023412393, 1, 1000000000, 'aaaa', 7023412393, 'kjkkkjkjjkj', 26, '2020-08-20', 'favicon.ico', 'Virinchi Hospitals');

-- --------------------------------------------------------

--
-- Table structure for table `slotinfo`
--

CREATE TABLE `slotinfo` (
  `doctorname` varchar(255) NOT NULL,
  `slot` varchar(50) NOT NULL,
  `booking` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slotinfo`
--

INSERT INTO `slotinfo` (`doctorname`, `slot`, `booking`) VALUES
('Dr Prashant Pareek', 'Mon 3 p.m.', 1),
('Dr Prashant Pareek', 'Tue 3 p.m.', 1),
('Dr Prashant Pareek', 'Wed 4 p.m.', 1),
('Dr Prashant Pareek', 'Sat 12 p.m.', 1),
('Dr Prashant Pareek', 'Tue 12 p.m.', 1),
('Dr Prashant Pareek', '', 0),
('Dr Prashant Pareek', 'Fri 6 p.m.', 1),
('Dr Prashant Pareek', 'Sun 7 p.m.', 1),
('Dr Prashant Pareek', 'Sat 12 a.m.', 1),
('Dr Prashant Pareek', 'Sat 9 a.m.', 1),
('Dr Prashant Pareeek', 'Mon 6 p.m.', 0),
('Dr Prashant Pareek', 'Mon 9 p.m.', 1),
('Dr Prashant Pareek', 'Sun 6 p.m.', 1),
('Dr Prashant Pareek', 'Sun 9 p.m.', 1),
('Dr Prashant Pareek', 'Sat 12 a.m.', 1),
('Dr Prashant Pareek', 'Mon 3 a.m.', 1),
('Dr Prashant Pareek', '21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(10) NOT NULL,
  `mno` bigint(20) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `pan` varchar(50) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `accno` varchar(50) NOT NULL,
  `ifsc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `lname`, `emailid`, `pwd`, `age`, `gender`, `mno`, `prof`, `location`, `pan`, `bname`, `accno`, `ifsc`) VALUES
('Dibyanshu', 'Pranjal', 'dibyanshupranjal602@gmail.com', '00000', 20, 1, 1000000000, 'Student', 'West Bengal', 'PANID', 'SBI', '200000', 'sbiif'),
('Prashant', 'Pareek', 'pp@gmail.com', '0000', 20, 1, 2000000000, '', '', '', '', '', ''),
('Yash', 'Gutgutia', 'yash@gmail.com', '2000', 19, 3, 7023412365, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `mno` (`mno`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `mno` (`mno`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `mno` (`mno`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`mno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patientinfo`
--
ALTER TABLE `patientinfo`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`mno`) REFERENCES `userinfo` (`mno`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`mno`) REFERENCES `userinfo` (`mno`);

--
-- Constraints for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD CONSTRAINT `patientinfo_ibfk_1` FOREIGN KEY (`mno`) REFERENCES `userinfo` (`mno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
