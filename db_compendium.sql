-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 08:00 PM
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
-- Database: `db_compendium`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_patientadmission`
--

CREATE TABLE `add_patientadmission` (
  `a_id` int(11) NOT NULL,
  `a_wardname` varchar(255) NOT NULL,
  `a_date` date NOT NULL,
  `a_admittedby` varchar(255) NOT NULL,
  `a_user_id` int(11) NOT NULL,
  `a_fname` varchar(255) NOT NULL,
  `a_mname` varchar(255) NOT NULL,
  `a_lname` varchar(255) NOT NULL,
  `a_gender` varchar(255) NOT NULL,
  `a_age` varchar(255) NOT NULL,
  `a_physician_id` varchar(255) NOT NULL,
  `a_father` varchar(255) NOT NULL,
  `a_mother` varchar(255) NOT NULL,
  `a_chargetoaccount` varchar(255) NOT NULL,
  `a_relationtopatient` varchar(255) NOT NULL,
  `a_address` varchar(255) NOT NULL,
  `a_number` varchar(255) NOT NULL,
  `a_totalpayment` varchar(255) NOT NULL,
  `a_dischargedate` date NOT NULL,
  `a_complaint` text NOT NULL,
  `a_completediagnosis` text NOT NULL,
  `a_medication` varchar(255) NOT NULL,
  `a_conditiontodischarge` varchar(255) NOT NULL,
  `a_remarks` varchar(255) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_patientfindings`
--

CREATE TABLE `add_patientfindings` (
  `a_id` int(11) NOT NULL,
  `a_user_id` int(11) NOT NULL,
  `a_fname` varchar(255) NOT NULL,
  `a_mname` varchar(255) NOT NULL,
  `a_lname` varchar(255) NOT NULL,
  `a_gender` varchar(255) NOT NULL,
  `a_age` int(11) NOT NULL,
  `a_complaint` text NOT NULL,
  `a_historypresentillness` text NOT NULL,
  `a_bp` varchar(255) NOT NULL,
  `a_rr` varchar(255) NOT NULL,
  `a_cr` varchar(255) NOT NULL,
  `a_temp` varchar(255) NOT NULL,
  `a_wt` varchar(255) NOT NULL,
  `a_pr` varchar(255) NOT NULL,
  `a_physicalexam` text NOT NULL,
  `a_diagnosis` text NOT NULL,
  `a_medication` text NOT NULL,
  `a_physician_id` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admission_record`
--

CREATE TABLE `admission_record` (
  `ad_id` int(11) NOT NULL,
  `ad_wardname` varchar(255) NOT NULL,
  `ad_date` date NOT NULL,
  `ad_admittedby` varchar(255) NOT NULL,
  `pr_admission_id` int(11) NOT NULL,
  `ad_physician` varchar(255) NOT NULL,
  `ad_father` varchar(255) NOT NULL,
  `ad_mother` varchar(255) NOT NULL,
  `ad_chargetoaccount` varchar(255) NOT NULL,
  `ad_relationtopatient` varchar(255) NOT NULL,
  `ad_address` varchar(255) NOT NULL,
  `ad_number` varchar(255) NOT NULL,
  `ad_totalpayment` varchar(255) NOT NULL,
  `ad_dischargedate` date NOT NULL,
  `ad_complaint` text NOT NULL,
  `ad_completediagnosis` text NOT NULL,
  `ad_medication` varchar(255) NOT NULL,
  `ad_conditiontodischarge` varchar(255) NOT NULL,
  `ad_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `civilstat`
--

CREATE TABLE `civilstat` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civilstat`
--

INSERT INTO `civilstat` (`c_id`, `c_name`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Separated');

-- --------------------------------------------------------

--
-- Table structure for table `c_accounts`
--

CREATE TABLE `c_accounts` (
  `account_id` int(12) NOT NULL,
  `clinic_name` text NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `plan` int(12) NOT NULL,
  `month` varchar(12) NOT NULL,
  `subscriptions` varchar(12) NOT NULL,
  `s_status` int(1) NOT NULL,
  `sys_secretquestion` text NOT NULL,
  `sys_secretanswer` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_accounts`
--

INSERT INTO `c_accounts` (`account_id`, `clinic_name`, `firstname`, `lastname`, `email`, `contact`, `password`, `plan`, `month`, `subscriptions`, `s_status`, `sys_secretquestion`, `sys_secretanswer`, `date_added`) VALUES
(1, 'CAVITE CLINIC', 'Kevin Jay Napoles', 'Roluna', 'kevinjayroluna@gmail.com', '11111111', 'fcea920f7412b5da7be0cf42b8c93759', 1, '1', '', 0, '', '', '2023-02-15 05:14:36'),
(2, 'CAVITE CLINIC', 'Kevin Jay Napoles', 'Roluna', 'kevinjayroluna111@gmail.com', '11111111', '02cbdf9394884fe37181505dbc0dd95f', 1, '1', '', 0, '', '', '2023-02-15 05:14:57'),
(3, 'CAVITE CLINIC', 'Jeffry', 'Bordeos', 'j@gmail.com', '9357396286', 'fcea920f7412b5da7be0cf42b8c93759', 1, '1', '', 1, '', '', '2023-02-15 05:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `c_admission_record`
--

CREATE TABLE `c_admission_record` (
  `ad_id` int(11) NOT NULL,
  `ad_wardname` varchar(255) NOT NULL,
  `ad_date` date NOT NULL,
  `ad_admittedby` varchar(255) NOT NULL,
  `pr_admission_id` int(11) NOT NULL,
  `ad_physician` varchar(255) NOT NULL,
  `ad_father` varchar(255) NOT NULL,
  `ad_mother` varchar(255) NOT NULL,
  `ad_chargetoaccount` varchar(255) NOT NULL,
  `ad_relationtopatient` varchar(255) NOT NULL,
  `ad_address` varchar(255) NOT NULL,
  `ad_number` varchar(255) NOT NULL,
  `ad_totalpayment` varchar(255) NOT NULL,
  `ad_dischargedate` date NOT NULL,
  `ad_complaint` text NOT NULL,
  `ad_completediagnosis` text NOT NULL,
  `ad_medication` varchar(255) NOT NULL,
  `ad_conditiontodischarge` varchar(255) NOT NULL,
  `ad_remarks` varchar(255) NOT NULL,
  `patient_id` int(12) NOT NULL,
  `trial_id` int(12) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_admission_record`
--

INSERT INTO `c_admission_record` (`ad_id`, `ad_wardname`, `ad_date`, `ad_admittedby`, `pr_admission_id`, `ad_physician`, `ad_father`, `ad_mother`, `ad_chargetoaccount`, `ad_relationtopatient`, `ad_address`, `ad_number`, `ad_totalpayment`, `ad_dischargedate`, `ad_complaint`, `ad_completediagnosis`, `ad_medication`, `ad_conditiontodischarge`, `ad_remarks`, `patient_id`, `trial_id`, `date_added`) VALUES
(1, 'Male Ward ', '0000-00-00', 'asd', 0, ' 2', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '1222', '0000-00-00', '', '', '', '', '', 2, 1, '2022-12-21 12:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `c_findings`
--

CREATE TABLE `c_findings` (
  `f_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `f_chiefcomplaint` text NOT NULL,
  `f_historypresentillness` text NOT NULL,
  `f_status` varchar(255) NOT NULL,
  `f_bp` varchar(255) NOT NULL,
  `f_rr` int(255) NOT NULL,
  `f_cr` int(255) NOT NULL,
  `f_temp` decimal(65,0) NOT NULL,
  `f_wt` int(255) NOT NULL,
  `f_pr` int(255) NOT NULL,
  `f_physicalexam` text NOT NULL,
  `f_diagnosis` text NOT NULL,
  `f_medication` text NOT NULL,
  `f_nameofphysician` varchar(255) NOT NULL,
  `f_date` date NOT NULL,
  `trial_id` int(12) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_findings`
--

INSERT INTO `c_findings` (`f_id`, `patient_id`, `f_chiefcomplaint`, `f_historypresentillness`, `f_status`, `f_bp`, `f_rr`, `f_cr`, `f_temp`, `f_wt`, `f_pr`, `f_physicalexam`, `f_diagnosis`, `f_medication`, `f_nameofphysician`, `f_date`, `trial_id`, `date_added`) VALUES
(1, 1, 'asd', 'asdasd', '', '12', 12, 12, '12', 12, 12, '', 'asd', 'asd', ' 2', '0000-00-00', 1, '2022-12-21 20:03:54'),
(2, 2, 'asd', 'Sample', '', '12', 12, 12, '12', 12, 12, '', 'asd', 'asd', ' 2', '0000-00-00', 1, '2022-12-21 20:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `c_logs`
--

CREATE TABLE `c_logs` (
  `log_id` int(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `actions` text NOT NULL,
  `account_id` varchar(12) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_logs`
--

INSERT INTO `c_logs` (`log_id`, `username`, `actions`, `account_id`, `date_added`) VALUES
(1, 'Kevin Jay Napoles Roluna', 'Add New Patient Record asd asd', '1', '2022-12-21 13:36:29'),
(2, 'Jeffry Bordeos', 'Add New Patient Record asdasdasdasd asdasdasdasd', '2', '2022-12-21 13:51:42'),
(3, 'Kevin Jay Napoles Roluna', 'Update Password', '1', '2022-12-21 17:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `c_patient_record`
--

CREATE TABLE `c_patient_record` (
  `pr_id` int(11) NOT NULL,
  `pr_user_id` int(11) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_lname` varchar(255) NOT NULL,
  `pr_fname` varchar(255) NOT NULL,
  `pr_mname` varchar(255) NOT NULL,
  `pr_addrs` varchar(255) NOT NULL,
  `pr_age` int(11) NOT NULL,
  `pr_bdate` date NOT NULL,
  `pr_bplace` varchar(255) NOT NULL,
  `pr_civilstat` varchar(255) NOT NULL,
  `pr_gen` varchar(255) NOT NULL,
  `pr_number` varchar(255) NOT NULL,
  `pr_religion` varchar(255) NOT NULL,
  `pr_occup` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `account_id` int(12) NOT NULL,
  `is_archived` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_patient_record`
--

INSERT INTO `c_patient_record` (`pr_id`, `pr_user_id`, `pr_date`, `pr_lname`, `pr_fname`, `pr_mname`, `pr_addrs`, `pr_age`, `pr_bdate`, `pr_bplace`, `pr_civilstat`, `pr_gen`, `pr_number`, `pr_religion`, `pr_occup`, `month`, `year`, `account_id`, `is_archived`, `date_added`) VALUES
(1, 0, '0000-00-00', 'Bordeos', 'Jeffryq', 'A', 'Blk 20 Lot 23 Phase 4 PBK Brgy Pasong Kawayan II\r\nddd', 23, '2022-12-21', 'General Trias', 'Single', 'Male', '9357396286', 'Christian', 'Test', '', '', 1, 0, '2022-12-21 11:46:47'),
(2, 0, '0000-00-00', 'Roluna', 'Kevin Jay Napoles', 'A', 'Blk 20 Lot 23 Phase 4 Pamayanang Maliksi, Brgy Pasong Kawayan II, General Trias Cavite , Philippines', 10, '2022-12-06', 'General Trias', 'Married', 'Male', '12', '12', '12', '', '', 1, 0, '2022-12-21 12:04:10'),
(3, 0, '0000-00-00', 'asd', 'asd', 'sad', 'asd', 0, '2022-12-28', 'as', 'Single', 'Female', 'asd', 'asd', '111', '', '', 1, 0, '2022-12-21 13:36:29'),
(4, 0, '0000-00-00', 'asdasdasdasd', 'asdasdasdasd', 'asdas', 'sdasdasd', 12, '2022-12-21', 'General Trias', 'Single', 'Male', '11111111', '1', '1', '', '', 2, 1, '2022-12-21 13:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `c_standardusers`
--

CREATE TABLE `c_standardusers` (
  `su_id` int(11) NOT NULL,
  `su_userid` int(11) NOT NULL,
  `su_user` varchar(255) NOT NULL,
  `su_pass` varchar(255) NOT NULL,
  `su_fname` varchar(255) NOT NULL,
  `su_lname` varchar(50) NOT NULL,
  `su_position` varchar(255) NOT NULL,
  `su_field` varchar(100) NOT NULL,
  `trial_id` int(12) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_standardusers`
--

INSERT INTO `c_standardusers` (`su_id`, `su_userid`, `su_user`, `su_pass`, `su_fname`, `su_lname`, `su_position`, `su_field`, `trial_id`, `is_active`, `date_created`) VALUES
(2, 0, 'mikecoros02', 'mikecoros02', 'Kevin Jay Napoles', 'Bordeos', 'Doctor', 'Neurologists', 1, 1, '2022-12-21 17:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `c_subscrptions`
--

CREATE TABLE `c_subscrptions` (
  `subscription_id` int(12) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `pricing` varchar(100) NOT NULL,
  `month` varchar(12) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_subscrptions`
--

INSERT INTO `c_subscrptions` (`subscription_id`, `title`, `description`, `pricing`, `month`, `date_added`) VALUES
(1, 'Subscription Plan 11', 'Inclusion : <br>\r\n- Access and Update your important patient record in your desktop <br>\r\n- Create user account for your personnel to access your medical management system', '350', '1', '2022-12-21 02:17:58'),
(2, 'Subscription Plan 2', 'Inclusion : <br>\r\n- Access and Update your important patient record in your desktop<br>\r\n- Create user account for your personnel to access your medical management system', '450', '2', '2022-12-22 09:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `c_system_admin`
--

CREATE TABLE `c_system_admin` (
  `sys_id` int(11) NOT NULL,
  `sys_user` varchar(255) NOT NULL,
  `sys_pass` varchar(255) NOT NULL,
  `sys_secretquestion` varchar(255) NOT NULL,
  `sys_secretanswer` varchar(255) NOT NULL,
  `sys_fname` varchar(255) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_system_admin`
--

INSERT INTO `c_system_admin` (`sys_id`, `sys_user`, `sys_pass`, `sys_secretquestion`, `sys_secretanswer`, `sys_fname`, `date_registered`) VALUES
(1, 'admin', '$2y$10$eclpnpHC0v8QCiHNU62cJOzock3Ar1SnI840AguzpyTPkIhJ8Riv6', 'What was your childhood nickname?', '0043f605eeeae08811074cc2f26c5126d21b24da', 'Prince', '2022-10-22 13:35:12'),
(2, 'cora', '$2y$10$eclpnpHC0v8QCiHNU62cJOzock3Ar1SnI840AguzpyTPkIhJ8Riv6', 'What was your childhood nickname?', '0043f605eeeae08811074cc2f26c5126d21b24da', 'Cora', '2022-10-22 13:35:12'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'In what city or town was your first job?', 'budoy', 'System Administrator', '2022-12-21 15:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `c_trial_accounts`
--

CREATE TABLE `c_trial_accounts` (
  `trial_id` int(12) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trial_days` varchar(12) NOT NULL,
  `trial_status` int(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_trial_accounts`
--

INSERT INTO `c_trial_accounts` (`trial_id`, `firstname`, `lastname`, `email`, `password`, `trial_days`, `trial_status`, `date_added`) VALUES
(1, 'Jeffry', 'Bordeos', 'testemail@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2022-12-23', 1, '2022-12-28 05:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `c_trial_admission_record`
--

CREATE TABLE `c_trial_admission_record` (
  `ad_id` int(11) NOT NULL,
  `ad_wardname` varchar(255) NOT NULL,
  `ad_date` date NOT NULL,
  `ad_admittedby` varchar(255) NOT NULL,
  `pr_admission_id` int(11) NOT NULL,
  `ad_physician` varchar(255) NOT NULL,
  `ad_father` varchar(255) NOT NULL,
  `ad_mother` varchar(255) NOT NULL,
  `ad_chargetoaccount` varchar(255) NOT NULL,
  `ad_relationtopatient` varchar(255) NOT NULL,
  `ad_address` varchar(255) NOT NULL,
  `ad_number` varchar(255) NOT NULL,
  `ad_totalpayment` varchar(255) NOT NULL,
  `ad_dischargedate` date NOT NULL,
  `ad_complaint` text NOT NULL,
  `ad_completediagnosis` text NOT NULL,
  `ad_medication` varchar(255) NOT NULL,
  `ad_conditiontodischarge` varchar(255) NOT NULL,
  `ad_remarks` varchar(255) NOT NULL,
  `patient_id` int(12) NOT NULL,
  `trial_id` int(12) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_trial_admission_record`
--

INSERT INTO `c_trial_admission_record` (`ad_id`, `ad_wardname`, `ad_date`, `ad_admittedby`, `pr_admission_id`, `ad_physician`, `ad_father`, `ad_mother`, `ad_chargetoaccount`, `ad_relationtopatient`, `ad_address`, `ad_number`, `ad_totalpayment`, `ad_dischargedate`, `ad_complaint`, `ad_completediagnosis`, `ad_medication`, `ad_conditiontodischarge`, `ad_remarks`, `patient_id`, `trial_id`, `date_added`) VALUES
(1, 'Male Ward ', '0000-00-00', 'asd', 0, ' 2', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '1111', '2022-12-28', 'asd', 'asd', 'asd', 'asd', 'ads', 1, 1, '2022-12-20 15:48:25'),
(2, 'Male Ward ', '0000-00-00', 'asd', 0, ' 2', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '1222', '0000-00-00', '', '', '', '', '', 2, 1, '2022-12-21 12:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `c_trial_findings`
--

CREATE TABLE `c_trial_findings` (
  `f_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `f_chiefcomplaint` text NOT NULL,
  `f_historypresentillness` text NOT NULL,
  `f_status` varchar(255) NOT NULL,
  `f_bp` varchar(255) NOT NULL,
  `f_rr` int(255) NOT NULL,
  `f_cr` int(255) NOT NULL,
  `f_temp` decimal(65,0) NOT NULL,
  `f_wt` int(255) NOT NULL,
  `f_pr` int(255) NOT NULL,
  `f_physicalexam` text NOT NULL,
  `f_diagnosis` text NOT NULL,
  `f_medication` text NOT NULL,
  `f_nameofphysician` varchar(255) NOT NULL,
  `f_date` date NOT NULL,
  `trial_id` int(12) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_trial_findings`
--

INSERT INTO `c_trial_findings` (`f_id`, `patient_id`, `f_chiefcomplaint`, `f_historypresentillness`, `f_status`, `f_bp`, `f_rr`, `f_cr`, `f_temp`, `f_wt`, `f_pr`, `f_physicalexam`, `f_diagnosis`, `f_medication`, `f_nameofphysician`, `f_date`, `trial_id`, `date_added`) VALUES
(1, 1, 'Sample', 'Sample', '', '1', 1, 1, '1', 1, 1, '', 'Sample', 'Sample', ' 2', '0000-00-00', 1, '2022-12-20 21:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `c_trial_patient_record`
--

CREATE TABLE `c_trial_patient_record` (
  `pr_id` int(11) NOT NULL,
  `pr_user_id` int(11) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_lname` varchar(255) NOT NULL,
  `pr_fname` varchar(255) NOT NULL,
  `pr_mname` varchar(255) NOT NULL,
  `pr_addrs` varchar(255) NOT NULL,
  `pr_age` int(11) NOT NULL,
  `pr_bdate` date NOT NULL,
  `pr_bplace` varchar(255) NOT NULL,
  `pr_civilstat` varchar(255) NOT NULL,
  `pr_gen` varchar(255) NOT NULL,
  `pr_number` varchar(255) NOT NULL,
  `pr_religion` varchar(255) NOT NULL,
  `pr_occup` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `trial_id` int(12) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_trial_patient_record`
--

INSERT INTO `c_trial_patient_record` (`pr_id`, `pr_user_id`, `pr_date`, `pr_lname`, `pr_fname`, `pr_mname`, `pr_addrs`, `pr_age`, `pr_bdate`, `pr_bplace`, `pr_civilstat`, `pr_gen`, `pr_number`, `pr_religion`, `pr_occup`, `month`, `year`, `trial_id`, `date_added`) VALUES
(1, 0, '0000-00-00', 'Roluna', 'Kevin Jay Napoles', 'A', 'Blk 20 Lot 23 Phase 4 Pamayanang Maliksi, Brgy Pasong Kawayan II, General Trias Cavite , Philippines', 29, '2022-12-21', 'General Trias', 'Single', 'Male', '+35511111111', 'Christian', 'Test', '', '', 1, '2022-12-20 11:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `c_trial_standardusers`
--

CREATE TABLE `c_trial_standardusers` (
  `su_id` int(11) NOT NULL,
  `su_userid` int(11) NOT NULL,
  `su_user` varchar(255) NOT NULL,
  `su_pass` varchar(255) NOT NULL,
  `su_fname` varchar(255) NOT NULL,
  `su_lname` varchar(50) NOT NULL,
  `su_position` varchar(255) NOT NULL,
  `su_field` varchar(100) NOT NULL,
  `trial_id` int(12) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_trial_standardusers`
--

INSERT INTO `c_trial_standardusers` (`su_id`, `su_userid`, `su_user`, `su_pass`, `su_fname`, `su_lname`, `su_position`, `su_field`, `trial_id`, `date_created`) VALUES
(2, 0, 'test123', 'test123', 'Kevin Jay Napoles', 'Roluna', 'Doctor', 'Neurologists', 1, '2022-12-20 13:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `fieldsphysician`
--

CREATE TABLE `fieldsphysician` (
  `fp_id` int(11) NOT NULL,
  `fp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fieldsphysician`
--

INSERT INTO `fieldsphysician` (`fp_id`, `fp_name`) VALUES
(1, 'Neurologists'),
(2, 'Pediatricians'),
(3, 'Emergency-physicians'),
(4, 'Psychiatrist'),
(5, 'Dermatologist'),
(6, 'GENERAL-PRACTIONER'),
(7, 'internal-medicine'),
(8, 'obstetrician-gynecologist');

-- --------------------------------------------------------

--
-- Table structure for table `findings`
--

CREATE TABLE `findings` (
  `f_id` int(11) NOT NULL,
  `pr_findings_id` int(11) NOT NULL,
  `f_chiefcomplaint` text NOT NULL,
  `f_historypresentillness` text NOT NULL,
  `f_status` varchar(255) NOT NULL,
  `f_bp` varchar(255) NOT NULL,
  `f_rr` int(255) NOT NULL,
  `f_cr` int(255) NOT NULL,
  `f_temp` decimal(65,0) NOT NULL,
  `f_wt` int(255) NOT NULL,
  `f_pr` int(255) NOT NULL,
  `f_physicalexam` text NOT NULL,
  `f_diagnosis` text NOT NULL,
  `f_medication` text NOT NULL,
  `f_nameofphysician` varchar(255) NOT NULL,
  `f_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`g_id`, `g_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `log_admission`
--

CREATE TABLE `log_admission` (
  `lo_id` int(11) NOT NULL,
  `lo_wardname` varchar(255) NOT NULL,
  `lo_date` date NOT NULL,
  `lo_admittedby` varchar(255) NOT NULL,
  `lo_user_id` int(11) NOT NULL,
  `lo_fname` varchar(255) NOT NULL,
  `lo_mname` varchar(255) NOT NULL,
  `lo_lname` varchar(255) NOT NULL,
  `lo_gender` varchar(255) NOT NULL,
  `lo_age` varchar(255) NOT NULL,
  `lo_physician_id` varchar(255) NOT NULL,
  `lo_father` varchar(255) NOT NULL,
  `lo_mother` varchar(255) NOT NULL,
  `lo_chargetoaccount` varchar(255) NOT NULL,
  `lo_relationtopatient` varchar(255) NOT NULL,
  `lo_address` varchar(255) NOT NULL,
  `lo_number` varchar(255) NOT NULL,
  `lo_totalpayment` varchar(255) NOT NULL,
  `lo_dischargedate` date NOT NULL,
  `lo_complaint` text NOT NULL,
  `lo_completediagnosis` text NOT NULL,
  `lo_medication` varchar(255) NOT NULL,
  `lo_conditiontodischarge` varchar(255) NOT NULL,
  `lo_remarks` varchar(255) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_findings`
--

CREATE TABLE `log_findings` (
  `lo_id` int(11) NOT NULL,
  `lo_user_id` varchar(255) NOT NULL,
  `lo_fname` varchar(255) NOT NULL,
  `lo_mname` varchar(255) NOT NULL,
  `lo_lname` varchar(255) NOT NULL,
  `lo_gender` varchar(255) NOT NULL,
  `lo_age` int(11) NOT NULL,
  `lo_complaint` text NOT NULL,
  `lo_historypresentillness` text NOT NULL,
  `lo_bp` varchar(255) NOT NULL,
  `lo_rr` varchar(255) NOT NULL,
  `lo_cr` varchar(255) NOT NULL,
  `lo_temp` varchar(255) NOT NULL,
  `lo_wt` varchar(255) NOT NULL,
  `lo_pr` varchar(255) NOT NULL,
  `lo_physicalexam` text NOT NULL,
  `lo_diagnosis` text NOT NULL,
  `lo_medication` text NOT NULL,
  `lo_physician_id` int(11) NOT NULL,
  `lo_date` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oldadmission`
--

CREATE TABLE `oldadmission` (
  `oad_id` int(11) NOT NULL,
  `oad_wardname` varchar(255) NOT NULL,
  `oad_date` date NOT NULL,
  `oad_admittedby` varchar(255) NOT NULL,
  `oad_user_id` int(11) NOT NULL,
  `oad_fname` varchar(255) NOT NULL,
  `oad_mname` varchar(255) NOT NULL,
  `oad_lname` varchar(255) NOT NULL,
  `oad_gender` varchar(255) NOT NULL,
  `oad_age` varchar(255) NOT NULL,
  `oad_physician_id` varchar(255) NOT NULL,
  `oad_father` varchar(255) NOT NULL,
  `oad_mother` varchar(255) NOT NULL,
  `oad_chargetoaccount` varchar(255) NOT NULL,
  `oad_relationtopatient` varchar(255) NOT NULL,
  `oad_address` varchar(255) NOT NULL,
  `oad_number` varchar(255) NOT NULL,
  `oad_totalpayment` varchar(255) NOT NULL,
  `oad_dischargedate` date NOT NULL,
  `oad_complaint` text NOT NULL,
  `oad_completediagnosis` text NOT NULL,
  `oad_medication` varchar(255) NOT NULL,
  `oad_conditiontodischarge` varchar(255) NOT NULL,
  `oad_remarks` varchar(255) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oldfindings`
--

CREATE TABLE `oldfindings` (
  `of_id` int(11) NOT NULL,
  `of_user_id` int(11) NOT NULL,
  `of_fname` varchar(255) NOT NULL,
  `of_mname` varchar(255) NOT NULL,
  `of_lname` varchar(255) NOT NULL,
  `of_gender` varchar(255) NOT NULL,
  `of_age` int(11) NOT NULL,
  `of_complaint` text NOT NULL,
  `of_historypresentillness` text NOT NULL,
  `of_bp` varchar(255) NOT NULL,
  `of_rr` varchar(255) NOT NULL,
  `of_cr` varchar(255) NOT NULL,
  `of_temp` varchar(255) NOT NULL,
  `of_wt` varchar(255) NOT NULL,
  `of_pr` varchar(255) NOT NULL,
  `of_physicalexam` text NOT NULL,
  `of_diagnosis` text NOT NULL,
  `of_medication` text NOT NULL,
  `of_physician_id` int(11) NOT NULL,
  `of_date` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `pr_id` int(11) NOT NULL,
  `pr_user_id` int(11) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_lname` varchar(255) NOT NULL,
  `pr_fname` varchar(255) NOT NULL,
  `pr_mname` varchar(255) NOT NULL,
  `pr_addrs` varchar(255) NOT NULL,
  `pr_age` int(11) NOT NULL,
  `pr_bdate` date NOT NULL,
  `pr_bplace` varchar(255) NOT NULL,
  `pr_civilstat` varchar(255) NOT NULL,
  `pr_gen` varchar(255) NOT NULL,
  `pr_number` varchar(255) NOT NULL,
  `pr_religion` varchar(255) NOT NULL,
  `pr_occup` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physicians`
--

CREATE TABLE `physicians` (
  `ph_id` int(11) NOT NULL,
  `ph_name` varchar(255) NOT NULL,
  `ph_fieldofphysician` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standardusers`
--

CREATE TABLE `standardusers` (
  `su_id` int(11) NOT NULL,
  `su_userid` int(11) NOT NULL,
  `su_user` varchar(255) NOT NULL,
  `su_pass` varchar(255) NOT NULL,
  `su_fname` varchar(255) NOT NULL,
  `su_position` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_user` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_secretquestion` varchar(255) NOT NULL,
  `u_secretanswer` varchar(255) NOT NULL,
  `u_lname` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_clinicaddress` varchar(255) NOT NULL,
  `u_clinicname` varchar(255) DEFAULT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `w_id` int(11) NOT NULL,
  `w_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`w_id`, `w_name`) VALUES
(1, 'Male Ward'),
(2, 'Female Ward');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_patientadmission`
--
ALTER TABLE `add_patientadmission`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `add_patientfindings`
--
ALTER TABLE `add_patientfindings`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admission_record`
--
ALTER TABLE `admission_record`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `civilstat`
--
ALTER TABLE `civilstat`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `c_accounts`
--
ALTER TABLE `c_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `c_admission_record`
--
ALTER TABLE `c_admission_record`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `c_findings`
--
ALTER TABLE `c_findings`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `c_logs`
--
ALTER TABLE `c_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `c_patient_record`
--
ALTER TABLE `c_patient_record`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `c_standardusers`
--
ALTER TABLE `c_standardusers`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `c_subscrptions`
--
ALTER TABLE `c_subscrptions`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `c_system_admin`
--
ALTER TABLE `c_system_admin`
  ADD PRIMARY KEY (`sys_id`);

--
-- Indexes for table `c_trial_accounts`
--
ALTER TABLE `c_trial_accounts`
  ADD PRIMARY KEY (`trial_id`);

--
-- Indexes for table `c_trial_admission_record`
--
ALTER TABLE `c_trial_admission_record`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `c_trial_findings`
--
ALTER TABLE `c_trial_findings`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `c_trial_patient_record`
--
ALTER TABLE `c_trial_patient_record`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `c_trial_standardusers`
--
ALTER TABLE `c_trial_standardusers`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `fieldsphysician`
--
ALTER TABLE `fieldsphysician`
  ADD PRIMARY KEY (`fp_id`);

--
-- Indexes for table `findings`
--
ALTER TABLE `findings`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `log_admission`
--
ALTER TABLE `log_admission`
  ADD PRIMARY KEY (`lo_id`);

--
-- Indexes for table `log_findings`
--
ALTER TABLE `log_findings`
  ADD PRIMARY KEY (`lo_id`);

--
-- Indexes for table `oldadmission`
--
ALTER TABLE `oldadmission`
  ADD PRIMARY KEY (`oad_id`);

--
-- Indexes for table `oldfindings`
--
ALTER TABLE `oldfindings`
  ADD PRIMARY KEY (`of_id`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `physicians`
--
ALTER TABLE `physicians`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexes for table `standardusers`
--
ALTER TABLE `standardusers`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_patientadmission`
--
ALTER TABLE `add_patientadmission`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_patientfindings`
--
ALTER TABLE `add_patientfindings`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_record`
--
ALTER TABLE `admission_record`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `civilstat`
--
ALTER TABLE `civilstat`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `c_accounts`
--
ALTER TABLE `c_accounts`
  MODIFY `account_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `c_admission_record`
--
ALTER TABLE `c_admission_record`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_findings`
--
ALTER TABLE `c_findings`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_logs`
--
ALTER TABLE `c_logs`
  MODIFY `log_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `c_patient_record`
--
ALTER TABLE `c_patient_record`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `c_standardusers`
--
ALTER TABLE `c_standardusers`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_subscrptions`
--
ALTER TABLE `c_subscrptions`
  MODIFY `subscription_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_system_admin`
--
ALTER TABLE `c_system_admin`
  MODIFY `sys_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `c_trial_accounts`
--
ALTER TABLE `c_trial_accounts`
  MODIFY `trial_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_trial_admission_record`
--
ALTER TABLE `c_trial_admission_record`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_trial_findings`
--
ALTER TABLE `c_trial_findings`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_trial_patient_record`
--
ALTER TABLE `c_trial_patient_record`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_trial_standardusers`
--
ALTER TABLE `c_trial_standardusers`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fieldsphysician`
--
ALTER TABLE `fieldsphysician`
  MODIFY `fp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `findings`
--
ALTER TABLE `findings`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_admission`
--
ALTER TABLE `log_admission`
  MODIFY `lo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_findings`
--
ALTER TABLE `log_findings`
  MODIFY `lo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oldadmission`
--
ALTER TABLE `oldadmission`
  MODIFY `oad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oldfindings`
--
ALTER TABLE `oldfindings`
  MODIFY `of_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_record`
--
ALTER TABLE `patient_record`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physicians`
--
ALTER TABLE `physicians`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `standardusers`
--
ALTER TABLE `standardusers`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
