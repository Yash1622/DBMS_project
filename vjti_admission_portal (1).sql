-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 10:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vjti_admission_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Branch_Name` varchar(50) NOT NULL,
  `Branch_code` varchar(20) NOT NULL,
  `HOD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Branch_Name`, `Branch_code`, `HOD`) VALUES
('Computer Engineering', 'CE01', 'V B Nikam'),
('Civil Engineering', 'CL01', 'S Y Mhaske'),
('Electronics Engineering', 'EE01', 'N M Singh'),
('Electrical Engineering', 'EL01', 'N M Singh'),
('EXTC Engineering', 'ET01', 'N M Singh'),
('Information Technology', 'IT01', 'V B Nikam'),
('Mechanical Engineering', 'ME01', 'S A Mastud'),
('Production Engineering', 'PE01', 'M R Nangre'),
('Textile Engineering', 'TE01', 'S Gangopadhyaya');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `Application_ID` varchar(15) NOT NULL,
  `SSC_marks` int(5) NOT NULL,
  `HSC_marks` int(5) NOT NULL,
  `Aadhar_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`Application_ID`, `SSC_marks`, `HSC_marks`, `Aadhar_no`) VALUES
('EN171010040', 94, 91, '676789891234'),
('EN171011040', 94, 91, '676789891234'),
('EN171020070', 94, 91, '676789891234'),
('EN171021070', 94, 91, '676789891234'),
('EN171030030', 94, 91, '676789891234'),
('EN171031030', 94, 91, '676789891234'),
('EN171040080', 94, 91, '676789891234'),
('EN171041033', 94, 91, '676789891234'),
('EN171050049', 94, 91, '676789891234'),
('EN171050060', 94, 91, '676789891234'),
('EN171060089', 94, 91, '676789891234'),
('EN171061075', 94, 91, '676789891234'),
('EN171070015', 94, 91, '676789891234'),
('EN171071015', 94, 91, '676789891234'),
('EN171080055', 94, 91, '676789891234'),
('EN171080060', 94, 91, '676789891234'),
('EN171080061', 94, 91, '676789891234'),
('EN171090034', 94, 91, '676789891234'),
('EN171090065', 94, 91, '676789891234');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Application_ID_` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`Application_ID_`, `Password`) VALUES
('EN171010040', 'Sanket'),
('EN171011040', 'Meera'),
('EN171020070', 'Sumit'),
('EN171021070', 'Akshata'),
('EN171030030', 'Ninad'),
('EN171031030', 'Aryaa'),
('EN171040080', 'Nihar'),
('EN171041033', 'Payal'),
('EN171050049', 'Shyam'),
('EN171050060', 'Kiran'),
('EN171060089', 'Swapnil'),
('EN171061075', 'Sakshi'),
('EN171070015', 'Saurabh'),
('EN171071015', 'Vruddhi'),
('EN171080055', 'Yash'),
('EN171080060', 'Gaurav'),
('EN171080061', 'Anish'),
('EN171090034', 'Sai'),
('EN171090065', 'Shubham');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `Application_ID` varchar(15) NOT NULL,
  `Candidate_Name` varchar(50) NOT NULL,
  `MHTCET_Score` int(10) NOT NULL,
  `Merit_Rank` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Candidate_Category` varchar(25) NOT NULL,
  `Seat_Type` varchar(10) NOT NULL,
  `Branch_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`Application_ID`, `Candidate_Name`, `MHTCET_Score`, `Merit_Rank`, `Gender`, `Candidate_Category`, `Seat_Type`, `Branch_code`) VALUES
('EN171010040', 'SANKET BANKAR', 148, 2491, 'M', 'OBC', 'GOBCS', 'CL01'),
('EN171011040', 'MEERA PILLAI', 138, 4193, 'F', 'OPEN', 'LOPENS', 'CL01'),
('EN171020070', 'SUMIT GUPTA', 144, 3131, 'M', 'OPEN', 'GOPENS', 'TE01'),
('EN171021070', 'AKSHATA WAGH', 116, 9969, 'F', 'OPEN', 'LOPENS', 'TE01'),
('EN171030030', 'NINAD RANE', 182, 32, 'M', 'OPEN', 'GOPENS', 'ME01'),
('EN171031030', 'ARYAA DESAI', 153, 1826, 'F', 'OPEN', 'LOPENS', 'ME01'),
('EN171040080', 'NIHAR JOSHI', 150, 2175, 'M', 'OPEN', 'GOPENS', 'PE01'),
('EN171041033', 'PAYAL SARGAR', 90, 24048, 'F', 'NT2', 'LNT2S', 'PE01'),
('EN171050049', 'SHYAM UBARHANDE', 75, 39138, 'M', 'PWD', 'PWDC', 'EL01'),
('EN171050060', 'KIRAN NAIK', 128, 6403, 'M', 'VJ', 'GVJS', 'EL01'),
('EN171060089', 'SWAPNIL PATEL', 87, 26540, 'M', 'ST', 'GSTS', 'EE01'),
('EN171061075', 'SAKSHI SANGALE', 145, 3020, 'F', 'NT3', 'LNT3S', 'EE01'),
('EN171070015', 'SAURABH KULKARNI', 181, 43, 'M', 'OPEN', 'GOPENS', 'CE01'),
('EN171071015', 'VRUDDHI MEHTA', 183, 37, 'F', 'OPEN', 'LOPENS', 'CE01'),
('EN171080055', 'YASH  R JAIN', 172, 355, 'M', 'OPEN', 'GOPENS', 'IT01'),
('EN171080060', 'GAURAV SAWANT', 169, 481, 'M', 'OPEN', 'GOPENS', 'IT01'),
('EN171080061', 'ANISH AMBEKAR', 155, 1681, 'M', 'OBC', 'GOBCS', 'IT01'),
('EN171090034', 'SAI PAWAR', 170, 467, 'F', 'OPEN', 'LOPENS', 'ET01'),
('EN171090065', 'SHUBHAM JADHAV', 137, 4439, 'M', 'SC', 'GSCS', 'ET01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`Branch_code`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`Application_ID`,`Aadhar_no`),
  ADD KEY `Application_ID` (`Application_ID`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`Application_ID_`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`Application_ID`),
  ADD KEY `Branch_code` (`Branch_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_data`
--
ALTER TABLE `student_data`
  ADD CONSTRAINT `student_data_ibfk_1` FOREIGN KEY (`Branch_code`) REFERENCES `branches` (`Branch_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
