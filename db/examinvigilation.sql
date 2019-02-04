-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 11:00 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examinvigilation`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `buildingid` int(255) NOT NULL,
  `buildingname` varchar(255) NOT NULL,
  `buildingcapacity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`buildingid`, `buildingname`, `buildingcapacity`) VALUES
(1, 'New Building 1A', 200),
(2, 'New Building 1B', 200),
(3, 'Food Tech New Building 2A', 80),
(4, 'Food Tech New Building 2B', 110),
(5, 'NASB 0-15', 50),
(6, 'NASB 0-16', 70),
(7, 'NASB 1-09', 65),
(8, 'NASB 1-15', 60),
(9, 'NASB 2-09', 65),
(10, 'MB 1', 36),
(11, 'MB 2', 60),
(12, 'PTT 204', 80),
(13, 'PTT 201', 30);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` int(23) NOT NULL,
  `courseName` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `courseName`) VALUES
(1, 'COM311'),
(2, 'COM312'),
(3, 'COM313'),
(4, 'COM314'),
(5, 'COM317'),
(6, 'STA314'),
(7, 'MTH311'),
(8, 'MTH312'),
(9, 'STA311'),
(10, 'GNS301'),
(11, 'COM321'),
(12, 'COM322'),
(13, 'COM323'),
(14, 'COM324'),
(15, 'COM326'),
(16, 'STA321'),
(17, 'COM325'),
(18, 'GNS302'),
(19, 'COM304'),
(20, 'EDP316'),
(21, 'COM412'),
(22, 'COM413'),
(23, 'COM421'),
(24, 'COM415'),
(25, 'COM410'),
(26, 'COM411'),
(27, 'EDP413'),
(28, 'GNS401'),
(29, 'STA411'),
(30, 'COM422'),
(31, 'COM424'),
(32, 'COM423'),
(33, 'COM429'),
(34, 'GNS423'),
(35, 'GNS425');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `deptid` int(255) NOT NULL,
  `deptname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptid`, `deptname`) VALUES
(1, 'Computer Technology'),
(2, 'Food Technology'),
(3, 'Hospitality Management'),
(4, 'Polymer & Textile Technology');

-- --------------------------------------------------------

--
-- Table structure for table `examdates`
--

CREATE TABLE `examdates` (
  `examDateId` int(23) NOT NULL,
  `examDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examdates`
--

INSERT INTO `examdates` (`examDateId`, `examDate`) VALUES
(1, '2018-04-25'),
(2, '2018-04-26'),
(3, '2018-04-27'),
(4, '2018-04-28'),
(5, '2018-04-29'),
(6, '2018-04-25'),
(7, '2018-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `lecturerId` int(23) NOT NULL,
  `lecturerTitle` varchar(233) NOT NULL,
  `lecturerCode` varchar(255) NOT NULL,
  `lecturerName` varchar(233) NOT NULL,
  `lecturerDept` varchar(233) NOT NULL,
  `lecturerEmail` varchar(255) NOT NULL,
  `lecturerPhone` varchar(255) NOT NULL,
  `lecturerCourses` text NOT NULL,
  `lecturerDates` varchar(255) NOT NULL,
  `loginId` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lecturerId`, `lecturerTitle`, `lecturerCode`, `lecturerName`, `lecturerDept`, `lecturerEmail`, `lecturerPhone`, `lecturerCourses`, `lecturerDates`, `loginId`) VALUES
(15, 'Dr.', 'A001', 'Itegboje A. O', 'Computer Technology', 'ite@gmail.com', '090', 'COM313,COM311,COM411,COM314', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018 Sunday April 29th 2018 (Afternoon)', 16),
(16, 'Mr.', 'A002', 'Adigun J.O', 'Computer Technology', 'adi@gmail.com', '099', 'COM317,MTH312,COM413', 'Sunday April 29th 2018,Friday April 27th 2018,Thursday April 26th 2018,Friday April 27th 2018,Wednesday April 25th 2018', 17),
(17, 'Mrs.', 'A003', 'Adegoke', 'Computer Technology', 'a@gmail.com', '0980', 'GNS423,GNS425', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 18),
(18, 'Dr.', 'A004', 'Iloba', 'Computer Technology', 'iloba@gmail.com', '000', 'GNS302,STA321,COM323', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 19),
(19, 'Prof.', 'A005', 'Iloba', 'Computer Technology', 'i@gmail.com', '8490', 'MTH312,GNS301', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 20),
(20, 'Engr.', 'A006', 'Oyo', 'Computer Technology', 'oyo@gmail.com', '9090', 'MTH312,COM322', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 21),
(21, 'Engr.', 'A007', 'Tobi', 'Computer Technology', 'oyo@gmail.com', '9091', 'MTH312,COM322', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 21),
(22, 'Dr.', 'A008', 'Lawal', 'Computer Technology', 'lyo@gmail.com', '9092', 'MTH312,COM322', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 21),
(23, 'Dr.', 'A009', 'Bose', 'Computer Technology', 'lyo@gmail.com', '9093', 'MTH312,COM322', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 21),
(24, 'Mrs.', 'A010', 'Bolu', 'Computer Technology', 'lyo@gmail.com', '9094', 'MTH312,COM322', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 21),
(25, 'Mr.', 'A011', 'Taye', 'Computer Technology', 'taye@gmail.com', '9095', 'COM311,COM411', 'Wednesday April 25th 2018,Thursday April 26th 2018,Friday April 27th 2018,Saturday April 28th 2018,Sunday April 29th 2018', 21);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginId` int(25) NOT NULL,
  `username` varchar(233) NOT NULL,
  `password` varchar(233) NOT NULL,
  `logDate` date NOT NULL,
  `logTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `username`, `password`, `logDate`, `logTime`) VALUES
(1, 'exam officer', '7547b380187f2c3a6037b3bb00a56656', '2018-05-07', '11:40:43'),
(16, 'Itegboje A. O', '5883b15859483006ab8450809e8dd638', '0000-00-00', '00:00:00'),
(17, 'Adigun J.O', '3c212da033de1c0f24c6c8a825d6a314', '0000-00-00', '00:00:00'),
(18, 'Adegoke', '996ce291c85f45f8ec438148836f9ed3', '0000-00-00', '00:00:00'),
(19, 'Iloba', '80f92681da878a695fb13035b0d18de1', '0000-00-00', '00:00:00'),
(20, 'Iloba', '80f92681da878a695fb13035b0d18de1', '0000-00-00', '00:00:00'),
(21, 'Oyo', 'c3242e64f78486ed82a67c5de8053733', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `courseId` int(23) NOT NULL,
  `courseName` varchar(233) NOT NULL,
  `courseExamDateId` varchar(255) NOT NULL,
  `courseVenue` varchar(233) NOT NULL,
  `courseSession` varchar(255) NOT NULL,
  `invigilatorId` varchar(255) NOT NULL,
  `invigilatorCount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`courseId`, `courseName`, `courseExamDateId`, `courseVenue`, `courseSession`, `invigilatorId`, `invigilatorCount`) VALUES
(1, 'COM412,\nCOM421,\nCOM421', '1', 'New Building 1A', 'Morning', ',22', 1),
(2, 'COM311', '2', 'New Building 1A', 'Afternoon', '', 0),
(3, 'COM413', '1', 'New Building 1B', 'Evening', ',15,17,25', 3),
(4, 'COM312', '4', 'New Building 1B', 'Morning', '', 0),
(5, 'COM421', '2', 'Food Tech New Building 2A', 'Afternoon', '', 0),
(6, 'COM313', '1', 'Food Tech New Building 2A', 'Evening', ',21', 2),
(7, 'COM215', '1', 'Food Tech New Building 2B', 'Afternoon', ',16,18,24', 3),
(8, 'COM314', '7', 'New Building 1A', 'Afternoon', '', 0),
(9, 'COM413', '1', 'New Building 1A', 'Morning', ',19,20,23', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`buildingid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `examdates`
--
ALTER TABLE `examdates`
  ADD PRIMARY KEY (`examDateId`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`lecturerId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginId`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`courseId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `buildingid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `deptid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `examdates`
--
ALTER TABLE `examdates`
  MODIFY `examDateId` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `lecturerId` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginId` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `courseId` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
