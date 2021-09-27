-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 10:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classfoxproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `bookname` varchar(50) NOT NULL,
  `bookid` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `Publication` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`bookname`, `bookid`, `author`, `Publication`, `Faculty`) VALUES
('Scripting language', 3, 'Kapil ', 'Ashtha', 'BBM'),
('Maths II', 12, 'Hari Bahadur', 'NEC', 'BBS'),
('Math', 13, 'Ram Bahadur', 'Ashmita', 'BCA'),
('Sociology ', 101, 'Krishna Sharma', 'Ashmita ', 'BCA'),
('Java', 102, 'Kiran Ghimire', 'Sanjivani', 'BCA'),
('Data Structure ', 111, 'Agni Bahadur', 'KEC', 'BCA'),
('Software Engineering ', 123, 'Ram', 'Ashmita', 'BCA'),
('BUSINESS ENGLISH', 201, 'Tulsian, P.C. & Pandey,', 'Himalayan Publishing House', 'BBS'),
('BUSINESS STATISTICS', 202, 'Khanna ', 'Khanna', 'BBS'),
('BUSINESS ECONOMICS-I', 203, 'Salvatore, Dominic', 'Taleju Prakashan', 'BBM'),
('Accounting for Financial Analysis and Planning', 211, 'Bikash Pandey ', 'Pandey Publication', 'BBS'),
('PRINCIPLES OF MANAGEMENT', 213, 'Hitt, Michael A., J. Black, Stweart, and Porter, Lyman W', 'AITBS Publishers and Distributors', 'BBS'),
('Management', 302, 'Willim', 'Mahindra Publication', 'BSW'),
(' Introduction to Social Work', 412, ' S. Chand and Sons.', 'Bikash Publishing House', 'BSW'),
('Software Engineering ', 501, 'Harka Bahadur', 'Bahadyr\'s Publication house ', 'Education'),
('Accounting ', 1012, 'Ram Hari', 'Ashmita ', 'BBM');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_name` varchar(50) NOT NULL,
  `author_id` int(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Publication` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_name`, `author_id`, `Type`, `Publication`) VALUES
('Jack', 102, 'Novel', 'Pabitra'),
(' Henry Fielding', 103, 'Novel', 'Winston '),
('	W. Somerset Maugham', 104, 'Essays', 'Winston (US)'),
('Honoré de Balzac', 105, 'Novel', '	Revue de Paris'),
('Hari Bahadur Sigh', 106, 'Academic ', 'Computer'),
('Amit Garg ', 107, 'Novel', 'Reader\'s Zone '),
('Lalit Kumar', 108, 'Academic ', 'Sun Publications'),
('Vinay Kumar Singhal', 109, 'Academic', 'K Nath & Sons,'),
('Sharad Kumar Verma', 110, 'phantasy ', 'Thakur Publications '),
('Saurabh Singhal', 111, 'Academic', 'Thakur Publications '),
('Gokul', 112, 'Academic', 'KEC'),
('	W. Somerset Maugham', 113, 'Essays', 'Shikhar Publication '),
(' Henry Fielding', 114, 'Novel', '	Revue de Paris'),
('Lalit Kumar', 115, 'Academic ', 'Winston (US)');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_name` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Publication` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_name`, `cat_id`, `level`, `Class`, `Publication`, `Author`) VALUES
('Humanities', 100002, '+2', '12', 'Ashmita', 'Hari '),
('BBS', 100003, 'Bachelor ', 'Second Year ', 'KEC', 'Shyam'),
('BSW', 100004, 'Bachelor', '3rd year', 'Shikhar Publication ', 'Shikhar '),
('MCA', 100005, 'Master', '1st Year', 'Winston ', 'Shyam'),
('B.Ed in Information Communication Technology', 100006, 'Bachelor ', 'Frist Year', 'Himalaya Book Stall , Publishers & Distributors', 'Ram'),
('B.Sc. Environmental Science', 100007, 'Bachelor', '2nd Year', 'Samjhana publication', 'Shyam'),
('Management ', 100008, '+2', '12', 'Shubharambha Prakashan', 'Suvalal'),
('BBA', 100009, 'Bachelor ', '4th Year', 'Ashmita', 'Ghanashyam'),
('BA', 100010, 'Bachelor', '2nd Year', 'Shubharambha Prakashan', 'Suvalal'),
('B.com', 100011, 'Bachelor ', '3rd year', 'KEC', 'Shyam Bahadur Lama'),
('B.Sc. Nursing', 100012, 'Bachelor', '1st Year', 'ASIA PUBLICATIONS PVT. LTD.', 'Shikhar '),
('B.Sc. Microbiology', 100013, 'Bachelor ', 'Second Year ', 'MK Publishers & Distributers', 'Dr. MK'),
('Bachelor of Arts Bachelor of Laws', 100014, 'Bachelor ', 'Second Year ', 'Bhundipuran Publication Pvt. Ltd.', 'Shyam Bahadur Lama');

-- --------------------------------------------------------

--
-- Table structure for table `issuedbook`
--

CREATE TABLE `issuedbook` (
  `bookname` varchar(50) NOT NULL,
  `BookID` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `Stdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(100) NOT NULL,
  `Mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Stdid` int(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `Mname`, `lname`, `Stdid`, `Course`, `email`, `Gender`) VALUES
('Kirshna', 'Kumari', 'Pun', 1, 'BCA', 'pabitrasoti2@gmail.com', 'Female'),
('saugat', '', 'shrestha', 2, 'BCA', 'saugat.stha21', 'male'),
('janak', 'raj', 'soti', 3, 'BSW', 'janakraj@gmail.com', 'male'),
('a', 'b', 'c', 12, 'BCA', 'ABC@gmail.com', 'Female'),
('abc', 'def', 'ghi', 21, 'BBS', 'abc@gmail.com', 'male'),
('rabina', '', 'Bhandari', 32, 'BCA', 'jalan.shahi@gmail.com', 'Female'),
('aarushi', '', 'soti', 99, 'BBM', 'arushisoti2@gmail.com', 'Female'),
('anjit', '', 'gurung', 123, 'BCA', 'jalan.shahi@gmail.com', 'male'),
('Aayushi', 'KU.', 'Soti', 1011, 'BCA', '9869361151', 'Female'),
('ayushi', 'ku', 'soti', 1334, 'BBS', 'saugat.stha21', 'Female'),
('Pabitra ', 'Kumari', 'Soti', 100001, 'BBM', 'pabitrasoti2@gmail.com', 'Female'),
('Yamuna ', 'Ku', 'Pun', 11111011, 'BBS', 'yamunapun1999@gmail.com', 'Others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `issuedbook`
--
ALTER TABLE `issuedbook`
  ADD PRIMARY KEY (`Stdid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `Stdid` (`Stdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100015;

--
-- AUTO_INCREMENT for table `issuedbook`
--
ALTER TABLE `issuedbook`
  MODIFY `Stdid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
