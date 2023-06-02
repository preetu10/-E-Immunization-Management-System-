-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 10:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eimscy`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(191) NOT NULL,
  `event_name` varchar(191) NOT NULL,
  `dateofevent` date NOT NULL,
  `event_time` time NOT NULL,
  `event_info` varchar(255) NOT NULL,
  `created_by` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `dateofevent`, `event_time`, `event_info`, `created_by`) VALUES
(1, 'National Vaccination Day', '2023-03-16', '16:00:00', 'National vaccination day is observed every year on March 16. The day conveys the importance of vaccination in public health.', 1),
(6, 'World Tuberculsis Day', '2023-03-24', '15:45:00', 'Every year, we celebrate the World Tuberculosis Day on March 24 to raise public awareness on the consequences of TB.', 1),
(7, 'World Hepatitis Day', '2023-07-28', '16:30:00', 'The World Hepatitis Day is celebrated on July 28 annually.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pushed`
--

CREATE TABLE `pushed` (
  `pushed_serial` int(191) NOT NULL,
  `appointmentid` int(191) NOT NULL,
  `vaccinatorid` int(191) NOT NULL,
  `dateofpushed` date NOT NULL DEFAULT current_timestamp(),
  `reminder` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pushed`
--

INSERT INTO `pushed` (`pushed_serial`, `appointmentid`, `vaccinatorid`, `dateofpushed`, `reminder`) VALUES
(47, 81, 6, '2023-04-02', 0),
(48, 88, 6, '2023-04-30', 0),
(49, 82, 6, '2023-05-02', 0),
(50, 83, 6, '2023-05-02', 0),
(51, 87, 6, '2023-04-04', 0),
(52, 86, 6, '2023-05-02', 0),
(53, 85, 6, '2023-05-04', 0),
(54, 84, 6, '2022-02-02', 0),
(55, 89, 6, '2023-05-04', 0),
(56, 94, 6, '2023-06-02', 0),
(57, 91, 6, '2023-06-02', 0),
(58, 90, 6, '2023-06-02', 0),
(59, 92, 6, '2023-06-02', 0),
(60, 93, 6, '2023-06-02', 0),
(61, 95, 6, '2023-06-02', 0),
(62, 97, 3, '2023-06-02', 0),
(63, 96, 3, '2023-05-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registers_for`
--

CREATE TABLE `registers_for` (
  `reg_serial` int(191) NOT NULL,
  `patientid` int(191) NOT NULL,
  `vaccineid` int(191) NOT NULL,
  `doseno` tinyint(20) NOT NULL,
  `dateofreg` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(10) NOT NULL,
  `confirmation_mail` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registers_for`
--

INSERT INTO `registers_for` (`reg_serial`, `patientid`, `vaccineid`, `doseno`, `dateofreg`, `status`, `confirmation_mail`) VALUES
(81, 5, 2, 1, '2023-04-01', 2, 1),
(82, 5, 1, 1, '2023-06-02', 2, 1),
(83, 5, 5, 1, '2023-06-02', 2, 1),
(84, 5, 4, 1, '2023-06-02', 2, 1),
(85, 5, 6, 1, '2023-05-02', 2, 1),
(86, 5, 7, 1, '2023-06-02', 2, 1),
(87, 5, 3, 1, '2023-04-02', 2, 1),
(88, 5, 8, 1, '2023-04-28', 2, 1),
(89, 5, 2, 2, '2023-05-01', 2, 1),
(90, 5, 5, 2, '2023-06-02', 2, 1),
(91, 5, 4, 2, '2023-06-02', 2, 1),
(92, 5, 6, 2, '2023-06-02', 2, 1),
(93, 5, 7, 2, '2023-06-02', 2, 1),
(94, 5, 3, 2, '2023-06-02', 2, 1),
(95, 5, 8, 2, '2023-06-01', 2, 1),
(96, 4, 3, 1, '2023-05-01', 2, 1),
(97, 4, 1, 1, '2023-06-01', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(191) NOT NULL,
  `u_firstname` varchar(191) NOT NULL,
  `u_lastname` varchar(191) NOT NULL,
  `u_ffirstname` varchar(191) NOT NULL,
  `u_flastname` varchar(191) NOT NULL,
  `u_fnid` varchar(191) NOT NULL,
  `u_email` varchar(191) NOT NULL,
  `u_dob` date NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_division` varchar(191) NOT NULL,
  `u_password` varchar(191) NOT NULL,
  `u_role` tinyint(5) NOT NULL DEFAULT 0,
  `dateofcreation` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_firstname`, `u_lastname`, `u_ffirstname`, `u_flastname`, `u_fnid`, `u_email`, `u_dob`, `u_gender`, `u_division`, `u_password`, `u_role`, `dateofcreation`) VALUES
(1, 'Foyazunnesa Alam ', 'Momo', 'Shamsul ', 'Alam', 'FGHU8999', 'foyazunnesaalammomo@gmail.com', '2002-08-29', 'Female', 'Chattogram', 'safevax', 1, '2023-06-02'),
(2, 'Mahfuja Solaiman', 'Preety', 'Shobuj', 'Solaiman', 'FFF009945', 'mahfujasolaiman77@gmail.com', '2001-09-19', 'Female', 'Kumilla', 'safevax', 0, '2023-06-02'),
(3, 'Saima Siddiqua', 'Simu', 'Shahabuddin', 'Siddique', 'AA4455678', 'saymasimu15@gmail.com', '2001-01-23', 'Female', 'Rongpur', 'safevax', 2, '2023-06-02'),
(4, 'Nejum', 'Akter', 'Moinuddin', 'Chy', 'AU567812', 'akthernejum2070@gmail.com', '2001-02-01', 'Female', 'Dhaka', 'safevax', 0, '2023-06-02'),
(5, 'Fatema', 'Alam', 'Zainul ', 'Abedin', 'QQ789023', 'foyazunnesamomo.345@gmail.com', '2004-02-28', 'Female', 'Chattogram', 'safevax', 0, '2023-06-02'),
(6, 'Samaun Ibne Alam', 'Labib', 'Shamsul', 'Alam', 'TUV56789', 'fafagigiradem@gmail.com', '1999-02-26', 'Male', 'Kumilla', 'safevax', 2, '2023-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `v_id` int(191) NOT NULL,
  `v_name` varchar(191) NOT NULL,
  `totaldose` int(191) NOT NULL,
  `availability` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`v_id`, `v_name`, `totaldose`, `availability`) VALUES
(1, 'BCG', 1, 1),
(2, 'Pentavalent', 3, 7),
(3, 'TT', 5, 11),
(4, 'OPV', 4, 9),
(5, 'PCV', 3, 93),
(6, 'IPV', 2, 16),
(7, 'MR', 2, 16),
(8, 'Rotarix', 2, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `pushed`
--
ALTER TABLE `pushed`
  ADD PRIMARY KEY (`pushed_serial`),
  ADD KEY `appointmentid` (`appointmentid`),
  ADD KEY `pushed_ibfk_2` (`vaccinatorid`);

--
-- Indexes for table `registers_for`
--
ALTER TABLE `registers_for`
  ADD PRIMARY KEY (`reg_serial`) USING BTREE,
  ADD KEY `patientid` (`patientid`),
  ADD KEY `vaccineid` (`vaccineid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pushed`
--
ALTER TABLE `pushed`
  MODIFY `pushed_serial` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `registers_for`
--
ALTER TABLE `registers_for`
  MODIFY `reg_serial` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `v_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pushed`
--
ALTER TABLE `pushed`
  ADD CONSTRAINT `pushed_ibfk_1` FOREIGN KEY (`appointmentid`) REFERENCES `registers_for` (`reg_serial`),
  ADD CONSTRAINT `pushed_ibfk_2` FOREIGN KEY (`vaccinatorid`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `registers_for`
--
ALTER TABLE `registers_for`
  ADD CONSTRAINT `registers_for_ibfk_1` FOREIGN KEY (`patientid`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `registers_for_ibfk_2` FOREIGN KEY (`vaccineid`) REFERENCES `vaccine` (`v_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
