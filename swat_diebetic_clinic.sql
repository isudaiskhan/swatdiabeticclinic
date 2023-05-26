-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 05:27 PM
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
(11, 'sameer', 'khan', '', '65', 'male', '12', '2023-05-11', '87656-7890098-7', '2023-05-10', 'jhgljgjfjfhfj', '', '2023-05-09', 'kjbkghlvgkhblnb', '', '2023-05-01'),
(12, 'sudais', 'yes', 'CEEC.gif', '13', 'male', '14', '2023-05-03', '08765-4345678-9', '2023-05-05', 'vkgfjgjfghfch', 'annualreport2018-20.png', '2023-05-16', 'ljkhhvljf tdgjvgv', 'infomgt.png', '2023-05-16'),
(13, 'Daniel Shelton', 'Jerome Fitzgerald', '', '58', 'female', '82', '1987-08-08', '12345-6345674-5', '1972-10-04', 'Est cillum enim repr', '', '1998-09-27', 'Sit do accusamus re', '', '1974-10-05');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
