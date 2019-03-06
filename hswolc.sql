-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 10:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hswolc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `usertype` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `firstname`, `lastname`, `usertype`, `username`, `password`) VALUES
(13, 'Admin', 'Admin', 'Doctor', 'username', '$2y$10$oCN5G9w2jjfOo9SiS2AL.OZeNgY84Bkj.sVbKbD8DHB9oPWwNwz8K'),
(14, 'Persius ', 'Andayas', 'Nurse', 'us', '$2y$10$HYI/EEFTfM4OVwbmlcTwjephInnDAz8YfkM0FDGHZUPz2/5xBrd3i'),
(16, 'General', 'Bato', 'Nurse', 'bato', '$2y$10$0PN.HeRuEN5O29ZRgatBnO98Ipu0k4eIknXwol9vqAePmjMh5RCF2'),
(18, 'Admin', 'Admin', 'Nurse', 'ano', '$2y$10$CR0a8uee3ACs8N5EoiLO4e9dMxbffLqSSuUHf.Q.m/5HjlzXXiuuW'),
(20, 'Ryans', 'Yalung', 'Nurse', 'hehe', '$2y$10$wN6f/VbMCFoaOemtCe2MkuxE8iRK9ZgmgpmmC.dDVb3rudu7af.Ie');

-- --------------------------------------------------------

--
-- Table structure for table `consultation_tbl`
--

CREATE TABLE `consultation_tbl` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `medicines` varchar(255) DEFAULT 'N/A',
  `chief_complain` varchar(255) DEFAULT 'N/A',
  `blood_pressure` varchar(255) DEFAULT 'N/A',
  `heart_rate` varchar(255) DEFAULT 'N/A',
  `respiratory_rate` varchar(255) DEFAULT 'N/A',
  `temperature` varchar(255) DEFAULT 'N/A',
  `treatment` varchar(255) DEFAULT 'N/A',
  `quantity` varchar(255) DEFAULT 'N/A',
  `physical_examination` varchar(255) DEFAULT 'N/A',
  `remarks` varchar(255) DEFAULT 'N/A',
  `diagnosis` varchar(255) DEFAULT 'N/A',
  `assesed_by` varchar(255) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation_tbl`
--

INSERT INTO `consultation_tbl` (`id`, `patient_id`, `medicines`, `chief_complain`, `blood_pressure`, `heart_rate`, `respiratory_rate`, `temperature`, `treatment`, `quantity`, `physical_examination`, `remarks`, `diagnosis`, `assesed_by`, `date_recorded`) VALUES
(7, 16, '', 'test', '120/80', '90', '90', '17.1', 'N/A', 'test', '', 'test', '1', 'Mr. Yalung', '2019-03-04 05:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `employee_medical_profile`
--

CREATE TABLE `employee_medical_profile` (
  `id` int(10) NOT NULL,
  `patient_id` int(10) DEFAULT NULL,
  `temperature` varchar(50) DEFAULT NULL,
  `blood_pressure` varchar(50) DEFAULT NULL,
  `patient_weight` float DEFAULT NULL,
  `patient_height` float DEFAULT NULL,
  `bmi` float DEFAULT NULL,
  `medical_history` varchar(255) DEFAULT NULL,
  `past_illness` varchar(255) DEFAULT NULL,
  `hospitalization_history` varchar(255) DEFAULT NULL,
  `currently_taking_drugs` varchar(255) DEFAULT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `why_taking_drugs` varchar(255) DEFAULT NULL,
  `allergies_to_drugs` varchar(255) DEFAULT NULL,
  `name_drug` varchar(255) DEFAULT NULL,
  `family_doctor` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `doctor_add` varchar(255) DEFAULT NULL,
  `doctor_num` varchar(255) DEFAULT NULL,
  `blood_donor` varchar(255) DEFAULT NULL,
  `self_breast_exam` varchar(255) DEFAULT NULL,
  `how_often` varchar(255) DEFAULT NULL,
  `mammography` varchar(255) DEFAULT NULL,
  `pregnant` varchar(255) DEFAULT NULL,
  `month_pregnant` varchar(255) DEFAULT NULL,
  `contraceptives` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `number_pregnancies` int(11) DEFAULT NULL,
  `aborted_pregnancies` varchar(255) DEFAULT NULL,
  `reasons` varchar(255) NOT NULL,
  `assesed_by` varchar(50) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employee_medical_profile`
--

INSERT INTO `employee_medical_profile` (`id`, `patient_id`, `temperature`, `blood_pressure`, `patient_weight`, `patient_height`, `bmi`, `medical_history`, `past_illness`, `hospitalization_history`, `currently_taking_drugs`, `drug_name`, `why_taking_drugs`, `allergies_to_drugs`, `name_drug`, `family_doctor`, `doctor_name`, `doctor_add`, `doctor_num`, `blood_donor`, `self_breast_exam`, `how_often`, `mammography`, `pregnant`, `month_pregnant`, `contraceptives`, `method`, `number_pregnancies`, `aborted_pregnancies`, `reasons`, `assesed_by`, `date_recorded`) VALUES
(1, 17, NULL, '120/80', 80, 100, 190, NULL, NULL, 'test', 'No', 'test', 'test', 'Yes', 'test', 'Yes', 'test', 'test', '121212', 'Yes', 'Yes', 'test', 'Yes', 'Yes', 'test', 'Yes', 'tset', 1, 'Yes', 'test', NULL, '2019-03-05 00:48:05'),
(2, 14, NULL, '120/80', 80, 70, 190, NULL, NULL, 'test', 'Yes', 'tset', 'test', 'Yes', 'test', 'Yes', 'test', 'test', '12', 'Yes', 'None', '', 'N/A', 'No', '', 'No', '', 0, 'No', '', NULL, '2019-03-05 00:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `medical_cert_tbl`
--

CREATE TABLE `medical_cert_tbl` (
  `id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL DEFAULT '0',
  `image_name` varchar(255) NOT NULL DEFAULT '0',
  `image_type` varchar(255) NOT NULL DEFAULT '0',
  `image_path` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_lab_tbl`
--

CREATE TABLE `medical_lab_tbl` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL DEFAULT '0',
  `image_path` varchar(255) NOT NULL DEFAULT '0',
  `image_type` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_pd_tbl`
--

CREATE TABLE `patient_pd_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL DEFAULT '0',
  `lastname` varchar(50) NOT NULL DEFAULT '0',
  `patient_number` bigint(20) NOT NULL DEFAULT '0',
  `gender` varchar(50) NOT NULL DEFAULT '0',
  `patient_address` varchar(50) NOT NULL DEFAULT '0',
  `contact_person` varchar(50) NOT NULL DEFAULT '0',
  `person_contact_emergency_number` bigint(20) NOT NULL DEFAULT '0',
  `department` varchar(50) NOT NULL DEFAULT '0',
  `birthdate` varchar(50) NOT NULL DEFAULT '0',
  `position` varchar(50) NOT NULL DEFAULT '0',
  `civil_status` varchar(50) NOT NULL DEFAULT '0',
  `blood_type` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_pd_tbl`
--

INSERT INTO `patient_pd_tbl` (`id`, `firstname`, `lastname`, `patient_number`, `gender`, `patient_address`, `contact_person`, `person_contact_emergency_number`, `department`, `birthdate`, `position`, `civil_status`, `blood_type`) VALUES
(14, 'Ryan', 'Yalung', 9164567554, 'M', 'Test Address', 'Girlfriend', 2147483647, 'CON', '1992-12-31', 'Employee', 'Married', 'A'),
(15, 'Persius', 'Gueruela', 9184565555, 'M', 'Los Angeles Lakers', 'Mama', 0, 'COB', '1998-01-01', 'Student', 'Single', 'O'),
(16, 'Mark Tonton', 'Valles', 9174567554, 'M', 'Cervantes', 'Mudra', 9184576655, 'CCSE', '2005-01-01', 'Student', 'Single', 'B'),
(17, 'Jessy', 'Mendiola', 9174567554, 'F', 'Sa puso mo', 'Me', 9174567554, 'Tourism', '2001-01-03', 'Employee', 'Single', 'B'),
(18, 'Moyi', 'Mojica', 910456754, 'M', 'Cervantes', 'Mama', 910456754, 'CCSE', '2003-12-01', 'Employee', 'Single', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `physical_examination_tbl`
--

CREATE TABLE `physical_examination_tbl` (
  `id` int(10) NOT NULL,
  `patient_id` int(10) DEFAULT NULL,
  `blood_pressure` varchar(50) DEFAULT NULL,
  `heart_rate` int(11) DEFAULT NULL,
  `temperature` varchar(50) DEFAULT NULL,
  `respiratory_rate` int(11) DEFAULT NULL,
  `patient_height` int(10) DEFAULT NULL,
  `patient_weight` int(10) DEFAULT NULL,
  `bmi` int(10) DEFAULT NULL,
  `os_no_glasses` varchar(50) DEFAULT NULL,
  `os_with_glasses` varchar(50) DEFAULT NULL,
  `od_no_glasses` varchar(50) DEFAULT NULL,
  `od_with_glasses` varchar(50) DEFAULT NULL,
  `ears_right` varchar(50) DEFAULT NULL,
  `ears_left` varchar(50) DEFAULT NULL,
  `skin` varchar(50) DEFAULT NULL,
  `skin_abnormal` varchar(50) DEFAULT NULL,
  `nose` varchar(50) DEFAULT NULL,
  `nose_abnormal` varchar(50) DEFAULT NULL,
  `pharynx` varchar(50) DEFAULT NULL,
  `pharynx_abnormal` varchar(50) DEFAULT NULL,
  `tonsils` varchar(50) DEFAULT NULL,
  `tonsils_abnormal` varchar(50) DEFAULT NULL,
  `gums` varchar(50) DEFAULT NULL,
  `gums_abnormal` varchar(50) DEFAULT NULL,
  `lymph_nodes` varchar(50) DEFAULT NULL,
  `lymph_nodes_abnormal` varchar(50) DEFAULT NULL,
  `neck` varchar(50) DEFAULT NULL,
  `neck_abnormal` varchar(50) DEFAULT NULL,
  `chest` varchar(50) DEFAULT NULL,
  `chest_abnormal` varchar(50) DEFAULT NULL,
  `lungs` varchar(50) DEFAULT NULL,
  `lungs_abnormal` varchar(50) DEFAULT NULL,
  `heart` varchar(50) DEFAULT NULL,
  `heart_abnormal` varchar(50) DEFAULT NULL,
  `abdomen` varchar(50) DEFAULT NULL,
  `abdomen_abnormal` varchar(50) DEFAULT NULL,
  `rectum` varchar(50) DEFAULT NULL,
  `rectum_abnormal` varchar(50) DEFAULT NULL,
  `genitalia` varchar(50) DEFAULT NULL,
  `genitalia_abnormal` varchar(50) DEFAULT NULL,
  `spine` varchar(50) DEFAULT NULL,
  `spine_abnormal` varchar(50) DEFAULT NULL,
  `arms` varchar(50) DEFAULT NULL,
  `arms_abnormal` varchar(50) DEFAULT NULL,
  `legs` varchar(50) DEFAULT NULL,
  `legs_abnormal` varchar(50) DEFAULT NULL,
  `feet` varchar(50) DEFAULT NULL,
  `feet_abnormal` varchar(50) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `essentially` varchar(255) DEFAULT NULL,
  `limitation` varchar(255) DEFAULT NULL,
  `special_attention` varchar(255) DEFAULT NULL,
  `reccomendation` varchar(255) DEFAULT NULL,
  `assesed_by` varchar(255) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `physical_examination_tbl`
--

INSERT INTO `physical_examination_tbl` (`id`, `patient_id`, `blood_pressure`, `heart_rate`, `temperature`, `respiratory_rate`, `patient_height`, `patient_weight`, `bmi`, `os_no_glasses`, `os_with_glasses`, `od_no_glasses`, `od_with_glasses`, `ears_right`, `ears_left`, `skin`, `skin_abnormal`, `nose`, `nose_abnormal`, `pharynx`, `pharynx_abnormal`, `tonsils`, `tonsils_abnormal`, `gums`, `gums_abnormal`, `lymph_nodes`, `lymph_nodes_abnormal`, `neck`, `neck_abnormal`, `chest`, `chest_abnormal`, `lungs`, `lungs_abnormal`, `heart`, `heart_abnormal`, `abdomen`, `abdomen_abnormal`, `rectum`, `rectum_abnormal`, `genitalia`, `genitalia_abnormal`, `spine`, `spine_abnormal`, `arms`, `arms_abnormal`, `legs`, `legs_abnormal`, `feet`, `feet_abnormal`, `remarks`, `essentially`, `limitation`, `special_attention`, `reccomendation`, `assesed_by`, `date_recorded`) VALUES
(22, 16, '120/80', 90, '80', 90, 70, 55, 190, 'test', 'test', 'test', 'test', 'test', 'test', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'N', '', 'test', 'Yes', 'Yes', 'Yes', 'test', 'Dr. Wakwak', '2019-03-04 05:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `visit_tbl`
--

CREATE TABLE `visit_tbl` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `visit_reason` varchar(50) DEFAULT NULL,
  `assesed_by` varchar(255) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit_tbl`
--

INSERT INTO `visit_tbl` (`id`, `patient_id`, `visit_reason`, `assesed_by`, `date_recorded`) VALUES
(1, 16, 'Consult', NULL, '2019-03-01 09:00:05'),
(2, 16, 'Consult', NULL, '2019-03-04 01:18:34'),
(3, 17, 'Physical Examination', NULL, '2019-03-04 01:21:55'),
(4, 17, 'Physical Examination', NULL, '2019-03-04 01:24:49'),
(5, 17, 'Physical Examination', 'test', '2019-03-04 03:46:20'),
(6, 14, 'Physical Examination', 'rt', '2019-03-04 03:47:24'),
(7, 18, 'Consult', 'Dr.Sins', '2019-03-04 03:53:10'),
(8, 16, 'Consult', 'Mr. Yalung', '2019-03-04 05:43:50'),
(9, 16, 'Physical Examination', 'Dr. Wakwak', '2019-03-04 05:53:26'),
(10, 16, 'Physical Examination', 'Dr. Wakwak', '2019-03-04 05:54:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation_tbl`
--
ALTER TABLE `consultation_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `employee_medical_profile`
--
ALTER TABLE `employee_medical_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medical_cert_tbl`
--
ALTER TABLE `medical_cert_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_lab_tbl`
--
ALTER TABLE `medical_lab_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_medical_lab_certificate_tbl_patient_pd_tbl` (`patient_id`);

--
-- Indexes for table `patient_pd_tbl`
--
ALTER TABLE `patient_pd_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical_examination_tbl`
--
ALTER TABLE `physical_examination_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `visit_tbl`
--
ALTER TABLE `visit_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_visit_tbl_patient_pd_tbl` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `consultation_tbl`
--
ALTER TABLE `consultation_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_medical_profile`
--
ALTER TABLE `employee_medical_profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_cert_tbl`
--
ALTER TABLE `medical_cert_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_lab_tbl`
--
ALTER TABLE `medical_lab_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_pd_tbl`
--
ALTER TABLE `patient_pd_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `physical_examination_tbl`
--
ALTER TABLE `physical_examination_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `visit_tbl`
--
ALTER TABLE `visit_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical_lab_tbl`
--
ALTER TABLE `medical_lab_tbl`
  ADD CONSTRAINT `FK_medical_lab_certificate_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `physical_examination_tbl`
--
ALTER TABLE `physical_examination_tbl`
  ADD CONSTRAINT `FK_physical_examination_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`);

--
-- Constraints for table `visit_tbl`
--
ALTER TABLE `visit_tbl`
  ADD CONSTRAINT `FK_visit_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
