-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 02:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `rollno` varchar(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `MotherName` varchar(30) NOT NULL,
  `BranchName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact1` varchar(20) NOT NULL,
  `contact2` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `SchoolName` varchar(50) NOT NULL,
  `SchoolBoardName` varchar(50) NOT NULL,
  `Schoolpercentage` double NOT NULL,
  `CollegeName` varchar(50) NOT NULL,
  `CollegeBoardName` varchar(50) NOT NULL,
  `Collegepercentage` double NOT NULL,
  `seatno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`rollno`, `FirstName`, `LastName`, `MiddleName`, `MotherName`, `BranchName`, `email`, `address`, `contact1`, `contact2`, `pincode`, `DateOfBirth`, `SchoolName`, `SchoolBoardName`, `Schoolpercentage`, `CollegeName`, `CollegeBoardName`, `Collegepercentage`, `seatno`) VALUES
('CS115006', 'Masood', 'Ansari', 'Akhtar', 'Raisa', 'Computer', 'ansarimasood85@gmail.com', 'Mumbai', '9930797445', '8108292582', 401107, '1996-10-11', 'DFHS', 'MSB', 84, 'MHSSJC', 'MSB', 70, 310),
('CS115019', 'Shamshad Alam', 'Iraqui', 'Mehmud Alam', 'Asharfunnisa', 'Computer', 'Shamshad1840@gmail.com', 'Mumbai', '9594753132', '9594753132', 400051, '1997-09-02', 'Bandra urdu High School', 'Maharashtra', 80, 'Saboo', 'Maharashtra', 70, 324),
('CS115034', 'Anwar Hussain', 'Mistry', 'Abdul gani', 'Bilkish Banu', 'Computer', 'anwar.mistry@live.com', 'Room no5, Mohd. Mistry Chawl, Masjid Road, Golibar,Santacruz East', '9022759416', '8450970595', 400055, '1997-06-10', 'Sacred Heart Boys\' High School', 'SSC', 86, 'Mithibai College', 'HSC', 60, 340);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
