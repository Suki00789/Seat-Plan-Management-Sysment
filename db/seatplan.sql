-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 04:25 PM
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
(1, '52', 'CSE 047 06267'),
(2, '52', 'CSE 052 06575'),
(3, '52', 'CSE 052 06576'),
(4, '52', 'CSE 052 06577'),
(5, '52', 'CSE 052 06578'),
(6, '52', 'CSE 052 06579'),
(7, '52', 'CSE 052 06581'),
(8, '52', 'CSE 052 06582'),
(9, '52', 'CSE 052 06584'),
(10, '52', 'CSE 052 06585'),
(11, '60', 'CSE 060 07185'),
(12, '60', 'CSE 060 07186'),
(13, '60', 'CSE 060 07187'),
(14, '60', 'CSE 060 07188'),
(15, '60', 'CSE 060 07189'),
(16, '60', 'CSE 060 07190'),
(17, '60', 'CSE 060 07191'),
(18, '60', 'CSE 060 07194'),
(19, '60', 'CSE 060 07195'),
(20, '60', 'CSE 060 07196'),
(21, '61', 'CSE 059 07144'),
(22, '61', 'CSE 059 07146'),
(23, '61', 'CSE 061 07293'),
(24, '61', 'CSE 061 07294'),
(25, '61', 'CSE 061 07295'),
(26, '61', 'CSE 061 07296'),
(27, '61', 'CSE 061 07297'),
(28, '61', 'CSE 061 07298'),
(29, '61', 'CSE 061 07300'),
(30, '61', 'CSE 061 07301'),
(31, '61', 'CSE 061 07302'),
(32, '61', 'CSE 061 07303'),
(33, '61', 'CSE 061 07304'),
(34, '61', 'CSE 061 07305'),
(35, '52', 'CSE 052 06588'),
(36, '52', 'CSE 052 06594'),
(37, '52', 'CSE 052 06597'),
(38, '52', 'CSE 052 06598'),
(39, '60', 'CSE 060 07197'),
(40, '60', 'CSE 060 07198'),
(41, '60', 'CSE 060 07199'),
(42, '60', 'CSE 060 07200'),
(43, '52', 'CSE 052 06599'),
(44, '52', 'CSE 052 06600'),
(45, '52', 'CSE 052 06601'),
(46, '60', 'CSE 060 07202'),
(47, '60', 'CSE 060 07203'),
(48, '60', 'CSE 060 07204'),
(49, '61', 'CSE 061 07306'),
(50, '61', 'CSE 061 07307'),
(51, '61', 'CSE 061 07308');

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
(1, 'Admin', 'Admin', 'SUB-1234', '01-01-12', 'Computer Science', 'a@gmail.com', '01723456789', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(2, 'Teacher', 'Shifat Sharmin Sapla', 'SUB-1234', '01-01-12', 'Computer Science', 's@gmail.com', '12345678912', 'c81e728d9d4c2f636f067f89cc14862c', 1),
(3, 'Attendent', 'Kalam', 'SUB-1234', '01-01-12', 'Computer Science', 'k@gmail.com', '12345678900', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 1),
(4, 'Student', 'Abdullah Al Mamun', 'CSE 047 06267', '52', 'Computer Science', 'a@gmail.com', '14646487970', 'a87ff679a2f3e71d9181a67b7542122c', 1),
(5, 'Student', 'Md. Shakhawat Hossen', 'CSE 052 06575', '52', 'Computer Science', 's@gmail.com', '13232435678', 'e4da3b7fbbce2345d7772b0674a318d5', 0),
(6, 'Student', 'Uzzal Kumar Gain', 'CSE 052 06576', '52', 'Computer Science', 'u@gmail.com', '1234567896', '1679091c5a880faf6fb5e6087eb1b2dc', 0),
(7, 'Student', 'Md. Kamrul Hasan', 'CSE 052 06577', '52', 'Computer Science', 'k@gmail.com', '13424435454', '8f14e45fceea167a5a36dedd4bea2543', 0),
(8, 'Student', 'Md. Noor-E-Alam Siddiki', 'CSE 052 06578', '52', 'Computer Science', 'n@gmail.com', '12423245356', 'c9f0f895fb98ab9159f51fd0297e236d', 0),
(9, 'Student', 'Md. Mahmud Hasan', 'CSE 052 06579', '52', 'Computer Science', 'm@gmail.com', '13424536488', '45c48cce2e2d7fbdea1afc51c7c6ad26', 0),
(10, 'Student', 'Tanmoy Kumar Kundu', 'CSE 052 06581', '52', 'Computer Science', 't@gmail.com', '34654656567', 'd3d9446802a44259755d38e6d163e820', 0),
(11, 'Student', 'Syed Jafor Hussain', 'CSE 052 06582', '52', 'Computer Science', 's@gmail.com', '01213434565', '6512bd43d9caa6e02c990b0a82652dca', 0),
(12, 'Student', 'Papeya Sultana', 'CSE 052 06584', '52', 'Computer Science', 'p@gmail.com', '01278486764', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(13, 'Student', 'Suiti Akter', 'CSE 052 06585', '52', 'Computer Science', 's@gmail.com', '01734354656', 'c51ce410c124a10e0db5e4b97fc2af39', 0),
(14, 'Student', 'Md. Raihanul Islam Rana', 'CSE 060 07185', '60', 'Computer Science', 'r@gmail.com', '01723434654', 'aab3238922bcc25a6f606eb525ffdc56', 0),
(15, 'Student', 'Sadia Akter', 'CSE 060 07186', '60', 'Computer Science', 's@gmail.com', '01678923467', '9bf31c7ff062936a96d3c8bd1f8f2ff3', 0),
(16, 'Student', 'Dipta Sarker Deep', 'CSE 060 07187', '60', 'Computer Science', 'd@gmail.com', '01672345698', 'c74d97b01eae257e44aa9d5bade97baf', 0),
(17, 'Student', 'Meher Nigar Rakhi', 'CSE 060 07188', '60', 'Computer Science', 'm@gmail.com', '01892435647', '70efdf2ec9b086079795c442636b55fb', 0),
(18, 'Student', 'Maria Ahmed Auntora', 'CSE 060 07189', '60', 'Computer Science', 'm@gmail.com', '01956546577', '6f4922f45568161a8cdf4ad2299f6d23', 0),
(19, 'Student', 'Habiba Akter', 'CSE 060 07190', '60', 'Computer Science', 'h@gmail.com', '01634678909', '1f0e3dad99908345f7439f8ffabdffc4', 0),
(20, 'Student', 'Tanjina Afroz Priya', 'CSE 060 07191', '60', 'Computer Science', 't@gmail.com', '0156666666', '98f13708210194c475687be6106a3b84', 0),
(21, 'Student', 'Mst. Sharmin Akter', 'CSE 060 07194', '60', 'Computer Science', 's@gmail.com', '016666666667', '3c59dc048e8850243be8079a5c74d079', 0),
(22, 'Student', 'Md. Beniaz Fuad', 'CSE 060 07195', '60', 'Computer Science', 'b@gmail.com', '01777777777', 'b6d767d2f8ed5d21a44b0e5886680cb9', 0),
(23, 'Student', 'A.S.M. Rifat', 'CSE 060 07196', '60', 'Computer Science', 'a@gmail.com', '01888888888', 'b6d767d2f8ed5d21a44b0e5886680cb9', 0),
(24, 'Student', 'H. M. Hasan Mahmud', 'CSE 059 07144', '61', 'Computer Science', 'h@gmail.com', '0166666655', '1ff1de774005f8da13f42943881c655f', 0),
(25, 'Student', 'Md. Wasiful Haque Abir', 'CSE 059 07146', '61', 'Computer Science', 'w@gmail.com', '0155559999', '8e296a067a37563370ded05f5a3bf3ec', 0),
(26, 'Student', 'Md. Rajiur Rahman', 'CSE 061 07293', '61', 'Computer Science', 'r@gmail.com', '0199999988', '4e732ced3463d06de0ca9a15b6153677', 0),
(27, 'Student', 'Ashfi Islam', 'CSE 061 07294', '61', 'Computer Science', 'a@gmail.com', '01233333444', '02e74f10e0327ad868d138f2b4fdd6f0', 0),
(28, 'Student', 'Nizam', 'CSE 061 07295', '61', 'Computer Science', 'n@gmail.com', '0166665555', '4e732ced3463d06de0ca9a15b6153677', 0),
(29, 'Student', 'Mehrin Mamun Swopnil', 'CSE 061 07296', '61', 'Computer Science', 'm@gmail.com', '01833333444', '6ea9ab1baa0efb9e19094440c317e21b', 0),
(30, 'Student', 'Ashikul Islam', 'CSE 061 07297', '61', 'Computer Science', 'a@gmail.com', '01577788899', '34173cb38f07f89ddbebc2ac9128303f', 0),
(31, 'Student', 'Aishee Afsana', 'CSE 061 07298', '61', 'Computer Science', 'a@gmail.com', '0192233445', 'c16a5320fa475530d9583c34fd356ef5', 0),
(32, 'Student', 'Rabbi Samrat', 'CSE 061 07300', '61', 'Computer Science', 'r@gmail.com', '0171122334', '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 0),
(33, 'Student', 'Fouzia Mozumder', 'CSE 061 07301', '61', 'Computer Science', 'f@gmail.com', '0150000000', '182be0c5cdcd5072bb1864cdee4d3d6e', 0),
(34, 'Student', 'Md. Al- Imran Shabuz', 'CSE 061 07302', '61', 'Computer Science', 'a@gmail.com', '0192233445', 'e369853df766fa44e1ed0ff613f563bd', 0),
(35, 'Student', 'Nabila Binte Morshed Mitu', 'CSE 061 07303', '61', 'Computer Science', 'n@gmail.com', '0153377889', '1c383cd30b7c298ab50293adfecb7b18', 0),
(36, 'Student', 'Md. Ahmed Kamran Rimon', 'CSE 061 07304', '61', 'Computer Science', 'a@gmail.com', '0171122334', '19ca14e7ea6328a42e0eb13d585e4c22', 0),
(37, 'Student', 'Prince Byapari', 'CSE 061 07305', '61', 'Computer Science', 'p@gmail.com', '01512345678', 'a5bfc9e07964f8dddeb95fc584cd965d', 0),
(38, 'Student', 'Md. Sameul Amin', 'CSE 052 06588', '52', 'Computer Science', 's@gmail.com', '01612345678', 'a5771bce93e200c36f7cd9dfd0e5deaa', 0),
(39, 'Student', 'Sumaiya Tasmin', 'CSE 052 06594', '52', 'Computer Science', 's@gmail.com', '0198765432', 'd67d8ab4f4c10bf22aa353e27879133c', 0),
(40, 'Student', 'Mst. Afsana Mimi', 'CSE 052 06597', '52', 'Computer Science', 'a@gmail.com', '01709865432', 'd645920e395fedad7bbbed0eca3fe2e0', 0),
(41, 'Student', 'Shrabonty Biswas', 'CSE 052 06598', '52', 'Computer Science', 's@gmail.com', '01612345789', '3416a75f4cea9109507cacd8e2f2aefc', 0),
(42, 'Student', 'Shabiha Hossain', 'CSE 060 07197', '60', 'Computer Science', 's@gmail.com', '01712345679', 'a1d0c6e83f027327d8461063f4ac58a6', 0),
(43, 'Student', 'Noor Hamid Khan Raj', 'CSE 060 07198', '60', 'Computer Science', 'n@gmail.com', '01908765432', '17e62166fc8586dfa4d1bc0e1742c08b', 0),
(44, 'Student', 'Md. Nahid Hasan', 'CSE 060 07199', '60', 'Computer Science', 'n@gmail.com', '01598767432', 'f7177163c833dff4b38fc8d2872f1ec6', 0),
(45, 'Student', 'Mehedi Hasan Jon', 'CSE 060 07200', '60', 'Computer Science', 'm@gmail.com', '0198765432', '6c8349cc7260ae62e3b1396831a8398f', 0),
(46, 'Teacher', 'abc', 'abc12', '23/4/2014', 'Computer Science', 'abc@gmail.com', '123', '202cb962ac59075b964b07152d234b70', 0),
(47, 'Student', 'Nishan Chakma', 'CSE 052 06599', '52', 'Computer Science', 'n@gmail.com', '0156789043', '67c6a1e7ce56d3d6fa748ab6d9af3fd7', 0),
(48, 'Student', 'Sadia Afrin', 'CSE 052 06600', '52', 'Computer Science', 's@gmail.com', '01912345678', '642e92efb79421734881b53e1e1b18b6', 0),
(49, 'Student', 'Rajib Ahamad', 'CSE 052 06601', '52', 'Computer Science', 'r@gmail.com', '0171234568', 'f457c545a9ded88f18ecee47145a72c0', 0),
(50, 'Student', 'Tamim Wasif', 'CSE 060 07202', '60', 'Computer Science', 't@gmail.com', '0189076543', 'c0c7c76d30bd3dcaefc96f40275bdc0a', 0),
(51, 'Student', 'Kripa Kumar Mondal', 'CSE 060 07203', '60', 'Computer Science', 'k@gmail.com', '0167890543', '2838023a778dfaecdc212708f721b788', 0),
(52, 'Student', 'Riya Moni', 'CSE 060 07204', '60', 'Computer Science', 'r@gmail.com', '0167895432', '2838023a778dfaecdc212708f721b788', 0),
(53, 'Student', 'Mohammad Abdullah-Al- Mamun', 'CSE 061 07306', '61', 'Computer Science', 'a@gmail.com', '0127896543', 'd82c8d1619ad8176d665453cfb2e55f0', 0),
(54, 'Student', 'Israth Jahan Nadia', 'CSE 061 07307', '61', 'Computer Science', 'i@gmail.com', '0198765432', 'd82c8d1619ad8176d665453cfb2e55f0', 0),
(55, 'Student', 'Tania Akther', 'CSE 061 07308', '61', 'Computer Science', 't@gmail.com', '01789065432', 'a684eceee76fc522773286a895bc8436', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
