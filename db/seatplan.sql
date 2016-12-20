-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 11:02 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seatplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `batchid` varchar(100) NOT NULL,
  `stdid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batchid`, `stdid`) VALUES
(2, '61A', 'CSE 061073453'),
(3, '61A', 'CSE 0613563'),
(4, '61A', 'CSE 06145556'),
(5, '61A', 'CSE 061234'),
(6, '61A', 'CSE 0612345'),
(7, '61A', 'CSE 061373747'),
(8, '61A', 'CSE 061346'),
(9, '61A', 'CSE 0615677'),
(10, '61A', 'CSE 0618378'),
(11, '61B', 'CSE 06136788'),
(12, '61A', 'CSE 0615678'),
(13, '61A', 'CSE 06137384'),
(14, '61A', 'CSE 0614567'),
(15, '61A', 'CSE 0613467'),
(16, '61A', 'CSE 0615688'),
(17, '61A', 'CSE 061567'),
(18, '60A', 'CSE 060373'),
(19, '59', 'CSE 059464');

-- --------------------------------------------------------

--
-- Table structure for table `batch52`
--

CREATE TABLE `batch52` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `btch` varchar(255) NOT NULL,
  `reg_com` varchar(255) NOT NULL,
  `reg_fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch52`
--

INSERT INTO `batch52` (`id`, `name`, `userid`, `btch`, `reg_com`, `reg_fee`) VALUES
(1, 'Md. Abdullah Al Mamun', 'CSE 052 06574', '52', 'Yes', 'C-SID-52-53797-373280'),
(2, 'Md. Shakhawat Hossen', 'CSE 052 06575', '52', 'No', ''),
(3, 'Uzzal Kumar Gain', 'CSE 052 06576', '52', 'Yes', 'C-SID-52-53797-373281'),
(4, 'Md. Kamrul Hasan', 'CSE 052 06577', '52', 'No', ''),
(5, 'Md. Noor-E-Alam Siddiki', 'CSE 052 06578', '52', 'Yes', 'C-SID-52-53797-373282'),
(6, 'Md. Mahmud Hasan', 'CSE 052 06579', '52', 'No', ''),
(7, 'Tanmoy Kumar Kundu', 'CSE 052 06581', '52', 'No', ''),
(8, 'Syed Jafor Hussain', 'CSE 052 06582', '52', 'No', ''),
(9, 'Papeya Sultana', 'CSE 052 06584', '52', 'No', ''),
(10, 'Suiti Akter', 'CSE 052 06585', '52', 'No', ''),
(11, 'Md. Sameul Amin', 'CSE 052 06588', '52', 'Yes', 'C-SID-52-53797-373283'),
(12, 'Sumaiya Tasmin', 'CSE 052 06594', '52', 'No', ''),
(13, 'Mst. Afsana Mimi', 'CSE 052 06597', '52', 'Yes', 'C-SID-52-53797-373284'),
(14, 'Shrabonty Biswas', 'CSE 052 06598', '52', 'Yes', 'C-SID-52-53797-373285'),
(15, 'Nishan Chakma', 'CSE 052 06599', '52', 'No', ''),
(16, 'Sadia Afrin', 'CSE 052 06600', '52', 'Yes', 'C-SID-52-53797-373285'),
(17, 'Sadman Rahman Shuvo', 'CSE 052 06615', '52', 'No', ''),
(18, 'Airin Ashrafi', 'CSE 052 06623', '52', 'Yes', 'C-SID-52-53797-373288'),
(19, 'Md. Abdul Halim', 'CSE 052 06624', '52', 'Yes', 'C-SID-52-53797-373289'),
(20, 'Atika Tasnim', 'CSE 052 06626', '52', 'No', ''),
(21, 'Ferdousara', 'CSE 052 06627', '52', 'Yes', 'C-SID-52-53797-373290'),
(22, 'Md. Asaduzzaman Khan Badhon', 'CSE 052 06632', '52', 'Yes', 'C-SID-52-53797-373291'),
(23, 'Ummea Salma', 'CSE 052 06634', '52', 'No', ''),
(24, 'Atiqur Rahman', 'CSE 052 06637', '52', 'No', ''),
(25, 'Pronojit Mallick Jit', 'CSE 052 06638', '52', 'Yes', 'C-SID-52-53797-373292');

-- --------------------------------------------------------

--
-- Table structure for table `batch60`
--

CREATE TABLE `batch60` (
  `bid` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userbid` varchar(255) NOT NULL,
  `btch` varchar(255) NOT NULL,
  `reg_com` varchar(255) NOT NULL,
  `reg_fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch60`
--

INSERT INTO `batch60` (`bid`, `name`, `userbid`, `btch`, `reg_com`, `reg_fee`) VALUES
(1, 'Md. Raihanul Islam Rana', 'CSE 060 07185', '60', 'Yes', 'C-SID-52-53797-373281'),
(2, 'Sadia Akter', 'CSE 060 07186', '60', 'Yes', 'C-SID-52-53797-373282'),
(3, 'Dipta Sarker Deep', 'CSE 060 07187', '60', 'No', ''),
(4, 'Meher Nigar Rakhi', 'CSE 060 07188', '60', 'Yes', 'C-SID-52-53797-373283'),
(5, 'Maria Ahmed Auntora', 'CSE 060 07189', '60', 'No', ''),
(6, 'Habiba Akter', 'CSE 060 07190', '60', 'Yes', 'C-SID-52-53797-373284'),
(7, 'Promit Malaker', 'CSE 060 07242', '60', 'No', ''),
(8, 'Ali Ahammad', 'CSE 060 07255', '60', 'No', ''),
(9, 'Subrata Chandra Shil', 'CSE 060 07256', '60', 'No', ''),
(10, 'Md. Fahim Rahman', 'CSE 060 07257', '60', 'Yes', 'C-SID-52-53797-373286'),
(11, 'Md. Asif Hossain', 'CSE 060 07258', '60', 'No', ''),
(12, 'Md. Shafiqul Islam', 'CSE 060 07259', '60', 'No', ''),
(13, 'Muhiuddin Dewan', 'CSE 060 07260', '60', 'No', ''),
(14, 'Shuvrodave Sarkar Shuvo', 'CSE 060 07261', '60', 'Yes', 'C-SID-52-53797-373287'),
(15, 'Rakib Hassan', 'CSE 060 07262', '60', 'No', ''),
(16, 'Hossain Anika Emrose', 'CSE 060 07264', '60', 'Yes', 'C-SID-52-53797-373288'),
(17, 'Tabassum Ripa', 'CSE 060 07265', '60', 'Yes', 'C-SID-52-53797-373289'),
(18, 'Imran Ahmed Emon', 'CSE 060 07266', '60', 'No', ''),
(19, 'Jannatul Ferdows Fariha', 'CSE 060 07267', '60', 'No', ''),
(20, 'Rashedul Hoque', 'CSE 060 07268', '60', 'Yes', 'C-SID-52-53797-373290'),
(21, 'Md. Tutul Hossain', 'CSE 060 07270', '60', 'Yes', 'C-SID-52-53797-373291'),
(22, 'SK. Mehadi Hassan Omy', 'CSE 060 07271', '60', 'No', ''),
(23, 'Rifat Ahmed Lingkon', 'CSE 060 07274', '60', 'No', ''),
(24, 'Sanjida Akter', 'CSE 060 07276', '60', 'Yes', 'C-SID-52-53797-373292'),
(25, 'Md. Shyeed Ahmed Khan', 'CSE 060 07278', '60', 'Yes', 'C-SID-52-53797-373293');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(150) NOT NULL,
  `emp_stu` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `join_btch` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `approved` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `emp_stu`, `username`, `userid`, `join_btch`, `dept`, `email`, `mobile`, `pass`, `approved`) VALUES
(3, 'Attendent', 'Kalam', 'SUB 5578', '01-01-2015', 'Computer Science', 'k@g.com', '0280868777', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 1),
(14, 'Teacher', 'Nazia', 'nz1234', '12', 'Computer Science', 'nazia@gmail.com', '1234', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(15, 'Teacher', 'shifat', 'ss140902117', '2/9/14', 'Computer Science', 'shapla203@gmail.com', '013838', '202cb962ac59075b964b07152d234b70', 0),
(17, 'Student', 'as', 'CSE 061073453', '61A', 'Computer Science', 'sdr@gmail.com', '3422', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(18, 'Student', 'df', 'CSE 0613563', '61A', 'Computer Science', 'ew@hhhh', '234', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(19, 'Student', 'wr', 'CSE 06145556', '61A', 'Computer Science', 'gh@ghj', '457', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(20, 'Student', 'ty', 'CSE 061234', '61A', 'Computer Science', 'see2@ddf', '123', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(21, 'Student', 'gj', 'CSE 0612345', '61', 'Computer Science', 'djjf@hhfbbf', '112', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(22, 'Student', 'skk', 'CSE 061373747', '61A', 'Computer Science', 'as@ddf', '1344', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(23, 'Student', 'dx', 'CSE 061346', '61A', 'Computer Science', 'fgh@tfghj', '468', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(24, 'Student', 'jjg', 'CSE 0615677', '61A', 'Computer Science', 'hgff@shsh', '123', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(25, 'Student', 'jsj', 'CSE 0618378', '61A', 'Computer Science', 'hg@dgh', '345', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(26, 'Student', 'fgjj', 'CSE 06136788', '61B', 'Computer Science', 'fhh@dfh', '3556', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(27, 'Student', 'fjj', 'CSE 0615678', '61A', 'Computer Science', 'df@fjjj', '2345', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(28, 'Student', 'sjs', 'CSE 06137384', '61A', 'Computer Science', 'shsh@svssj', '123', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(29, 'Student', 'fghh', 'CSE 0614567', '61A', 'Computer Science', 'fghh@db', '13', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(30, 'Student', 'kjg', 'CSE 0613467', '61A', 'Computer Science', 'jjgf@dfjj', '346', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(31, 'Student', 'kjgf', 'CSE 0615688', '61A', 'Computer Science', 'jgf@fbj', '588', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(32, 'Student', 'kgff', 'CSE 061567', '61A', 'Computer Science', 'kjh@fjkk', '567', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(33, 'Student', 'eww', 'CSE 060373', '60A', 'Computer Science', 'hshsh@hhd', '233', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(34, 'Student', 'ffv', 'CSE 059464', '59', 'Computer Science', 'djdh@shdbd', '3456', 'c20ad4d76fe97759aa27a0c99bff6710', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(10) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch52`
--
ALTER TABLE `batch52`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch60`
--
ALTER TABLE `batch60`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `batch52`
--
ALTER TABLE `batch52`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `batch60`
--
ALTER TABLE `batch60`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
