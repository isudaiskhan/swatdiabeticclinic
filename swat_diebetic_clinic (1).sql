-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 12:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swat_diebetic_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_husband_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `patient_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mr_no` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnic_no` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rx` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rx_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rx_date` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diabetic_foot` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `diabetic_foot_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foot_image_date` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `father_husband_name`, `patient_image`, `age`, `gender`, `mr_no`, `date`, `cnic_no`, `date_of_birth`, `rx`, `rx_image`, `rx_date`, `diabetic_foot`, `diabetic_foot_image`, `foot_image_date`) VALUES
(81, 'Mary Glas', 'Keelie Sanders', 'JEAS.gif', '31', 'male', '27', '1988-12-06', '87576-5765656-7', '2014-10-16', 'Qui qui ex nemo et c', '', '1999-02-20', 'Recusandae Id quia ', '', '1973-11-05'),
(82, 'Aristotle Zamoraaaaa', 'Brynn Campbell', '30.jpg', '77', 'male', '22', '1998-08-30', '87575-7585743-4', '2014-09-28', 'Tenetur commodi itaq', 'cpec.jpg', '1995-02-16', 'Cum veritatis evenie   ', '', '1986-03-03'),
(83, 'Ahmadssssssssss', 'khankhannnn', 'infomgt.png', '555', 'male', '766', '2023-05-10', '12515-2165127-8', '2023-05-15', 'hello my name is sudais khan shlgjscbnsbx c\r\nszxcsclhgcja', 'vc2.jpg', '2023-05-02', 'and i live in swat sah,dgahsbdlugybjkabsdx', 'IMG_20230210_225428.jpg', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `your_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `your_email`, `password`) VALUES
(1, 'Muhammad yaqoob', 'Muhammadyaqoob@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
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
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
