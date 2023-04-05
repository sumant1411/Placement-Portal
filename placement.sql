-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 02:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpdrive`
--

CREATE TABLE IF NOT EXISTS `addpdrive` (
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `C/P` tinyint(1) NOT NULL DEFAULT '0',
  `PVenue` varchar(255) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `ODetails` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpdrive`
--

INSERT INTO `addpdrive` (`CompanyName`, `Date`, `C/P`, `PVenue`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `ODetails`) VALUES
('Apple', '2022-07-23', 0, 'Mukesh Patel Auditorium', 98, 98, 90, 0, 0, 0, '0'),
('HP', '2022-08-19', 1, 'Mukesh Patel Auditorium', 70, 75, 75, 0, 0, 0, '0'),
('IBM', '2022-05-12', 0, 'Mukesh Patel Auditorium', 60, 65, 65, 0, 0, 0, '0'),
('Indsight', '2022-06-26', 1, 'Mukesh Patel Auditorium', 60, 65, 65, 0, 0, 0, '0'),
('Infoysis', '2022-01-10', 0, 'Mukesh Patel Auditorium', 60, 60, 60, 0, 0, 0, '0'),
('Intel', '2022-09-08', 0, 'Mukesh Patel Auditorium', 60, 65, 65, 0, 0, 0, '0'),
('Microsoft', '2022-12-09', 0, 'Mukesh Patel Auditorium', 60, 65, 65, 0, 0, 0, '0'),
('Samsung ', '2023-03-31', 0, 'NMIMS', 75, 75, 75, 0, 0, 0, ''),
('Siemens', '2022-03-24', 0, 'New Mpstme CR 20', 60, 60, 65, 0, 0, 0, '0'),
('Skype', '2022-06-10', 1, 'Mukesh Patel Auditorium', 75, 75, 75, 0, 0, 0, '0'),
('TCS', '2022-11-24', 1, 'Mukesh Patel Auditorium', 65, 70, 75, 0, 0, 0, '0'),
('WDS', '2022-09-30', 1, 'Mukesh Patel Auditorium', 65, 65, 65, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE IF NOT EXISTS `basicdetails` (
`Id` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `USN` varchar(25) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Sem` int(11) NOT NULL,
  `Branch` varchar(15) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `Approve` tinyint(1) NOT NULL DEFAULT '0',
  `ApprovalDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`Id`, `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`, `ApprovalDate`) VALUES
(1, 'Sumant', 'Rawat', '704111190001', 9846554756, 'sumantrawat@gmail.com', '2001-06-09', 1, 'IT', 70, 70, 70, 0, 0, 0, 1, '2023-03-31'),
(2, 'Raj', 'Patil', '704111190002', 7895236277, 'harish@gmail.com', '2000-01-12', 8, 'IT', 92, 85, 90, 0, 0, 0, 1, '2023-03-31'),
(3, 'Naachiket', 'Pant', '704111190003', 9865623241, 'npant@gmail.com', '2001-01-28', 6, 'EXTC', 55, 55, 55, 0, 0, 0, 1, '2022-11-20'),
(4, 'Punith', 'Kumar', '704111190004', 6758548694, 'punith@gmail.com', '2001-02-13', 8, 'CIVIL', 85, 85, 85, 0, 0, 0, 0, '2022-12-26'),
(5, 'Manvith', 'Kumar', '704111190005', 9874563211, 'mk@gmail.com', '2000-05-31', 7, 'CS', 99, 99, 99, 0, 0, 0, 1, '2023-03-30'),
(6, 'Harsha', 'Asawa', '704111190006', 7894561230, 'harshasawa@gmail.com', '2001-01-04', 8, 'EXTC', 99, 99, 99, 0, 0, 0, 1, '2023-03-31'),
(7, 'Tejaswini', 'Shah', '704111190007', 9867564158, 'tshah@gmil.com', '2000-08-13', 4, 'IT', 65, 65, 65, 0, 0, 0, 1, '2023-03-31'),
(8, 'Ashraf', 'Unissa', '704111190009', 7738804158, 'ashrafu@gmail.com', '2001-10-23', 4, 'CIVIL', 55, 55, 55, 0, 0, 0, 0, '2023-02-10'),
(9, 'Roja', 'Bai', '704111190010', 9867548569, 'rojabai@gmail.com', '2000-04-28', 4, 'IT', 66, 63, 62, 0, 0, 0, 1, '2023-04-01'),
(10, 'Yogesh', 'Singh', '704111190011', 6996578952, 'yogesgsingh@gmail.com', '2000-06-13', 5, 'CS', 41, 45, 45, 0, 0, 0, 1, '2023-03-31'),
(11, 'Rahul', 'Khanna', '704111190012', 2147483647, 'rahulkhanna@gmail.com', '2000-07-02', 4, 'MECH', 77, 66, 77, 0, 0, 0, 1, '2023-02-23'),
(12, 'Vishruth', 'Harithsa', '704111190013', 9880796862, 'harithsa@gmail.com', '2000-10-22', 6, 'MECH', 91, 70, 50, 5, 0, 1, 1, '2022-08-18'),
(13, 'Smit', 'Desai', '704111190014', 2147483647, 'Smitdesai@gmail.com', '2000-07-23', 7, 'IT', 100, 100, 100, 0, 0, 0, 1, '2022-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `hlogin`
--

CREATE TABLE IF NOT EXISTS `hlogin` (
`Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Branch` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hlogin`
--

INSERT INTO `hlogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`, `Branch`) VALUES
(1, 'Aman Bhatia', 'Bhatia', 'asian', 'bhatia@gmail.com', 'What is your fav spot?', 'windlass', 'CS'),
(2, 'Dinesh Pachauri', 'dinesh', 'abcd', 'dp@gmail.com', 'Favourite Subject?', 'Chemistry', 'IT'),
(3, 'Ish Kakkar', 'Kakkar', 'kakkar', 'ishkk@gmail.com', 'Favourite Subject?', 'Maths', 'EXTC');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE IF NOT EXISTS `plogin` (
`Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Rohini', 'rohini', 'rohini', 'rh@gmail.com', 'What is your fav spot?', 'mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `prilogin`
--

CREATE TABLE IF NOT EXISTS `prilogin` (
`Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prilogin`
--

INSERT INTO `prilogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Suresh', 'suresh', '123456', 'suresh@gmail.com', 'What is your fav spot?', 'madikeri');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE IF NOT EXISTS `slogin` (
`id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `USN` varchar(25) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `Name`, `USN`, `PASSWORD`, `Email`, `Question`, `Answer`) VALUES
(1, 'Raj Patil', '704111190002', 'rajpatil', 'rajpatil@gmail.com', 'What is your nickname?', 'Raju'),
(2, 'Sumant Rawat', '704111190001', 'rawat', 'sumantrawat@gmail.com', 'What is your nickname?', 'sumant'),
(3, 'Smit Desai', '704111190013', 'smitdesai', 'smitdesai@gmail.com', 'What is your fav spot?', 'Vapi'),
(4, 'Naachiket Pant', '704111190003', 'naachiketpant', 'ragini@gmail.com', 'What is your fav spot?', 'Gujrat'),
(5, 'Punith Rajkumar', '704111190004', 'punithrajkumar', 'punith@gmail.com', 'What is your fav spot?', 'vile parle'),
(6, 'Manvith Kumar', '704111190005', 'manvithkumar', 'mk@gmail.com', 'What is your fav spot?', 'Andheri'),
(7, 'Harsha Asawa', '704111190006', 'harshaasawa', 'harshasawa@gmail.com', 'What is your fav spot?', 'Andheri'),
(8, 'Tejaswini Shah', '704111190007', 'tejaswinishah', 'tshah@gmail.com', 'What is your fav spot?', 'colaba'),
(9, 'Ashraf Unissa', '704111190008', 'ashrafunissa', 'ashrafu@gmail.com', 'What is your fav spot?', 'colaba'),
(10, 'Roja Bai', '704111190009', 'rojabai', 'rojabai@gmail.com', 'What is your fav spot?', 'marine drive'),
(11, 'Yogesh Singh', '704111190010', 'yogeshsingh', 'yogesgsingh@gmail.com', 'What is your fav spot?', 'marine drive'),
(12, 'Rahul Khanna', '704111190011', 'rahulkhanna', 'rahulkhanna@gmail.com', 'What is your fav spot?', 'malabar hill'),
(13, 'Vishruth Harithsa', '704111190012', 'vishruthharithsa', 'harithsa@gmail.com', 'What is your first mobile number?', '7738804128'),
(14, 'Ruchir Shinde', '704111190015', 'ruchir', 'shinde@gmail.com', '', ''),
(15, 'Shashwat Ramola', '704111190016', 'ramola', 'ramola@gmail.com', '', ''),
(16, 'Avishkar Makhloga', '704111190017', 'avishkar', 'avi@gmail.com', '', ''),
(17, 'Loukik', '70411119020', 'loukik', 'loukik@gmail.com', 'What is your nickname?', 'bhavi aamdar'),
(18, 'ABCD', '1234', 'abcd', 'abcd', 'What is your nickname?', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `updatedetails`
--

CREATE TABLE IF NOT EXISTS `updatedetails` (
  `USN` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Phone` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CurrentSem` int(2) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `10th` int(5) NOT NULL,
  `12th` int(5) NOT NULL,
  `btech` int(5) NOT NULL,
  `Backlog` int(20) NOT NULL,
  `HistoryBacklog` varchar(2) NOT NULL,
  `DetainedYears` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `updatedrive`
--

CREATE TABLE IF NOT EXISTS `updatedrive` (
  `USN` varchar(25) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Attendence` tinyint(1) NOT NULL DEFAULT '0',
  `WT` tinyint(1) NOT NULL DEFAULT '0',
  `GD` tinyint(1) NOT NULL DEFAULT '0',
  `Techical` tinyint(1) NOT NULL DEFAULT '0',
  `Placed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatedrive`
--

INSERT INTO `updatedrive` (`USN`, `Name`, `CompanyName`, `Date`, `Attendence`, `WT`, `GD`, `Techical`, `Placed`) VALUES
('70411119001', 'Sumant', 'Apple', '2022-06-26', 1, 1, 1, 1, 1),
('70411119002', 'Raj', 'HP', '2022-08-19', 1, 1, 1, 1, 1),
('70411119004', 'Punith', 'IBM', '2022-05-12', 1, 1, 1, 1, 1),
('70411119005', 'Manvith', 'Infoysis', '2022-01-10', 1, 1, 1, 1, 1),
('70411119006', 'Harsha', 'Intel', '2022-09-08', 1, 1, 1, 1, 1),
('70411119007', 'Tesjaswini', 'WDS', '2022-09-30', 1, 1, 1, 1, 1),
('70411119008', 'Ashraf', 'Microsoft', '2022-12-09', 1, 1, 1, 1, 1),
('70411119009', 'Roja', 'Skype', '2022-06-10', 1, 1, 1, 1, 1),
('70411119010', 'Yogesh', 'TCS', '2022-11-24', 1, 1, 1, 1, 1),
('70411119014', 'Vishruth Harithsa', 'Apple', '2022-07-23', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpdrive`
--
ALTER TABLE `addpdrive`
 ADD PRIMARY KEY (`CompanyName`,`Date`);

--
-- Indexes for table `basicdetails`
--
ALTER TABLE `basicdetails`
 ADD PRIMARY KEY (`Id`,`USN`), ADD UNIQUE KEY `USN` (`USN`,`Mobile`,`Email`);

--
-- Indexes for table `hlogin`
--
ALTER TABLE `hlogin`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `prilogin`
--
ALTER TABLE `prilogin`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `USN` (`USN`,`Email`);

--
-- Indexes for table `updatedetails`
--
ALTER TABLE `updatedetails`
 ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `updatedrive`
--
ALTER TABLE `updatedrive`
 ADD PRIMARY KEY (`USN`), ADD KEY `USN` (`USN`), ADD KEY `CompanyName` (`CompanyName`,`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicdetails`
--
ALTER TABLE `basicdetails`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `hlogin`
--
ALTER TABLE `hlogin`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prilogin`
--
ALTER TABLE `prilogin`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
