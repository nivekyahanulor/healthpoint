-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 06:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_healthpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_appointments`
--

CREATE TABLE `is_appointments` (
  `appointment_id` int(12) NOT NULL,
  `patient_id` int(12) NOT NULL,
  `doctors_id` int(12) NOT NULL,
  `appointment_time` varchar(100) NOT NULL,
  `appointment_date` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `consultation` text NOT NULL,
  `diagnosis` text NOT NULL,
  `treatment` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_appointments`
--

INSERT INTO `is_appointments` (`appointment_id`, `patient_id`, `doctors_id`, `appointment_time`, `appointment_date`, `status`, `consultation`, `diagnosis`, `treatment`, `date_added`) VALUES
(1, 1, 1, '10:00 AM', '2023-10-19', 2, '', '', '', '2023-10-20 11:15:59'),
(2, 1, 1, '11:30 AM', '2023-10-19', 2, '11', '1', '1', '2023-10-20 12:54:29'),
(3, 1, 1, '10:00 AM', '2023-11-29', 0, '', '', '', '2023-11-29 13:13:11'),
(4, 1, 1, '11:00 AM', '2023-11-29', 0, '', '', '', '2023-11-29 13:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `is_doctors`
--

CREATE TABLE `is_doctors` (
  `doctor_id` int(12) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(36) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `speciality` text NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_doctors`
--

INSERT INTO `is_doctors` (`doctor_id`, `firstname`, `lastname`, `address`, `contact`, `email`, `username`, `password`, `speciality`, `is_active`, `date_added`) VALUES
(1, 'Kevin', 'Roluna', '', '09357396276', '', 'test123', 'test123', 'Wala', 1, '2023-10-18 15:20:45'),
(2, 'sadasd', 'asdasd', '', '', '', 'ss', 'ss', 'ss', 0, '2023-10-20 06:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `is_logs`
--

CREATE TABLE `is_logs` (
  `id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logs` text NOT NULL,
  `patient_id` varchar(12) NOT NULL,
  `doc_id` varchar(12) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_logs`
--

INSERT INTO `is_logs` (`id`, `name`, `logs`, `patient_id`, `doc_id`, `date_added`) VALUES
(1, 'health point', 'Add New Appointment', '', '', '2023-10-19 12:54:29'),
(2, 'health point', 'Approved Appointment', '', '', '2023-10-19 12:57:58'),
(3, 'health point', 'Update System Settings', '', '', '2023-10-19 13:30:31'),
(4, 'health point', 'Update System Settings', '', '', '2023-10-19 13:31:12'),
(5, 'health point', 'Update System Settings', '', '', '2023-10-19 13:31:32'),
(6, 'health point', 'Update System Settings', '', '', '2023-10-19 13:31:46'),
(7, 'health point', 'Update System Settings', '', '', '2023-10-20 10:27:06'),
(8, 'health point', 'Update System Settings', '', '', '2023-10-20 10:30:22'),
(9, 'health point', 'Update System Settings', '', '', '2023-10-20 10:32:26'),
(10, 'health point', 'Update System Settings', '', '', '2023-10-20 10:32:32'),
(11, 'health point', 'Update System Settings', '', '', '2023-10-20 10:33:28'),
(12, 'health point', 'Update System Settings', '', '', '2023-10-20 10:34:22'),
(13, 'health point', 'Update System Settings', '', '', '2023-10-20 10:34:26'),
(14, 'health point', 'Update System Settings', '', '', '2023-10-20 10:36:11'),
(15, 'health point', 'Update System Settings', '', '', '2023-10-20 10:36:45'),
(16, 'health point', 'Update System Settings', '', '', '2023-10-20 10:36:53'),
(17, 'health point', 'Update System Settings', '', '', '2023-10-20 10:37:02'),
(18, 'health point', 'Update System Settings', '', '', '2023-10-20 10:37:07'),
(19, 'health point', 'Update System Settings', '', '', '2023-10-20 10:37:23'),
(20, 'health point', 'Update System Settings', '', '', '2023-10-20 10:37:54'),
(21, 'health point', 'Update System Settings', '', '', '2023-10-20 10:38:11'),
(22, 'health point', 'Update System Settings', '', '', '2023-10-20 10:38:31'),
(23, 'health point', 'Update System Settings', '', '', '2023-10-20 10:38:38'),
(24, 'health point', 'Update System Settings', '', '', '2023-10-20 10:38:47'),
(25, 'health point', 'Update System Settings', '', '', '2023-10-20 10:39:09'),
(26, 'health point', 'Update System Settings', '', '', '2023-10-20 10:39:19'),
(27, 'Sample Sample', 'Update Profile', '1 ', '', '2023-11-29 13:01:13'),
(28, 'Kevin Roluna', 'Update Patients Profile', '', '1', '2023-11-29 13:08:53'),
(29, 'Sample Sample', 'Add New Appointment', '1 ', '', '2023-11-29 13:13:11'),
(30, 'Kevin Roluna', 'Add New Appointment', '', '1', '2023-11-29 13:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `is_patients`
--

CREATE TABLE `is_patients` (
  `patient_id` int(12) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(36) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bp` text NOT NULL,
  `glucose` text NOT NULL,
  `heartrate` text NOT NULL,
  `cholesterol` text NOT NULL,
  `symptoms` text NOT NULL,
  `i_company` text NOT NULL,
  `i_number` text NOT NULL,
  `i_amount` text NOT NULL,
  `i_expiry` text NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_patients`
--

INSERT INTO `is_patients` (`patient_id`, `firstname`, `lastname`, `address`, `contact`, `email`, `username`, `password`, `bp`, `glucose`, `heartrate`, `cholesterol`, `symptoms`, `i_company`, `i_number`, `i_amount`, `i_expiry`, `is_active`, `date_added`) VALUES
(1, 'Sample', 'Sample', '', '9357396286', 'sample@gmail.com', 'sample', 'sample', '', '', '', '', '', '', '', '', '', 1, '2023-10-18 14:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `is_settings`
--

CREATE TABLE `is_settings` (
  `id` int(12) NOT NULL,
  `title` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `mission` text NOT NULL,
  `logo` text NOT NULL,
  `about` text NOT NULL,
  `vision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_settings`
--

INSERT INTO `is_settings` (`id`, `title`, `email`, `contact`, `address`, `facebook`, `mission`, `logo`, `about`, `vision`) VALUES
(1, 'HealthPoint', 'healthpoint@gmail.com', '09554280710', 'Blk 35 Lot 16 Phase 3 SV5A Barangay Langkiwa Binan Laguna 4024', 'https://www.facebook.com/Sidyeyprintstuff', '', 'hero-img.jpg', '&lt;p&gt;HealthPoint is a community-based, community-supported, and community-governed network of non-profit health centers dedicated to providing expert, high-quality care to all who need it, regardless of circumstances.&lt;/p&gt;', '');

-- --------------------------------------------------------

--
-- Table structure for table `is_users`
--

CREATE TABLE `is_users` (
  `user_id` int(12) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_users`
--

INSERT INTO `is_users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `date_added`) VALUES
(14, 'health', 'point', 'admin123', 'admin123', '2023-05-30 17:21:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_appointments`
--
ALTER TABLE `is_appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `is_doctors`
--
ALTER TABLE `is_doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `is_logs`
--
ALTER TABLE `is_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `is_patients`
--
ALTER TABLE `is_patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `is_settings`
--
ALTER TABLE `is_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `is_users`
--
ALTER TABLE `is_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `is_appointments`
--
ALTER TABLE `is_appointments`
  MODIFY `appointment_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `is_doctors`
--
ALTER TABLE `is_doctors`
  MODIFY `doctor_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `is_logs`
--
ALTER TABLE `is_logs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `is_patients`
--
ALTER TABLE `is_patients`
  MODIFY `patient_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `is_settings`
--
ALTER TABLE `is_settings`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `is_users`
--
ALTER TABLE `is_users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
