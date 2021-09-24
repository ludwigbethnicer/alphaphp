-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 06:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbiads`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auditpc`
--

CREATE TABLE `tbl_auditpc` (
  `audit_pc_no` int(11) NOT NULL,
  `branch_audit_id` int(11) DEFAULT NULL,
  `pc_no` int(3) DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_auditpc`
--

INSERT INTO `tbl_auditpc` (`audit_pc_no`, `branch_audit_id`, `pc_no`, `modified`) VALUES
(1, 5, 1, '2020-11-05 04:41:13'),
(2, 5, 2, '2020-11-05 04:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch_auditcheck`
--

CREATE TABLE `tbl_branch_auditcheck` (
  `branch_audit_id` int(11) NOT NULL,
  `audit_date` varchar(10) DEFAULT NULL,
  `timestart` varchar(10) DEFAULT NULL,
  `cmpny_zone_no` int(2) DEFAULT NULL,
  `region_desc` varchar(254) DEFAULT NULL,
  `branch_area` varchar(1) DEFAULT NULL,
  `branch_desc` varchar(254) DEFAULT NULL,
  `field_auditor` varchar(254) DEFAULT NULL,
  `rstech` varchar(254) DEFAULT NULL,
  `acknowby` varchar(254) DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_branch_auditcheck`
--

INSERT INTO `tbl_branch_auditcheck` (`branch_audit_id`, `audit_date`, `timestart`, `cmpny_zone_no`, `region_desc`, `branch_area`, `branch_desc`, `field_auditor`, `rstech`, `acknowby`, `modified`) VALUES
(1, '2020-11-05', '03:25:06am', 2, 'Zamboanga', 'I', 'ML Ipil', 'Firstname M. Surname', NULL, NULL, '2020-11-05 02:25:06'),
(2, '2020-11-05', '03:30:28am', 2, 'Zamboanga', 'E', 'ML Sanito', 'Username C. Lhuillier', NULL, NULL, '2020-11-05 02:30:28'),
(3, '2020-11-05', '03:36:11am', 1, 'Zamboanga', 'J', 'ML Danao', 'Firstname M. Surname', NULL, NULL, '2020-11-05 02:36:11'),
(4, '2020-11-05', '03:37:33am', 1, 'Zamboanga', 'H', 'ML Liloan', 'Firstname M. Surname', NULL, NULL, '2020-11-05 02:37:33'),
(5, '2020-11-05', '03:39:06am', 2, 'Zamboanga', 'B', 'ML Carbon', 'Firstname M. Surname', NULL, NULL, '2020-11-05 02:39:06'),
(6, '2020-11-04', '03:43:50am', 1, 'Zamboanga', 'H', 'ML Carbon', 'Firstname M. Surname', NULL, NULL, '2020-11-05 02:43:50'),
(7, '2020-11-03', '03:55:12am', 1, 'Zamboanga', 'K', 'ML Carbon', 'Firstname M. Surname', NULL, NULL, '2020-11-05 02:55:12'),
(8, '2020-11-05', '04:11:44am', 2, 'Cebu', 'H', 'ML Sample', 'Firstname M. Surname', NULL, NULL, '2020-11-05 03:11:44'),
(9, '2020-11-06', '04:14:01am', 1, 'Negros', 'J', 'ML Carbon', 'Username C. Lhuillier', NULL, NULL, '2020-11-05 03:14:01'),
(10, '2020-11-07', '05:01:56am', 1, 'Cebu', 'B', 'ML Carbon', 'Firstname M. Surname', NULL, NULL, '2020-11-05 04:01:56'),
(11, '2020-11-09', '05:03:22am', 1, 'Negros', 'K', 'ML Carbon', 'Firstname M. Surname', NULL, NULL, '2020-11-05 04:03:22'),
(12, '2020-11-17', '05:04:52am', 1, 'Negros', 'K', 'ML Carbon', 'Firstname M. Surname', NULL, NULL, '2020-11-05 04:04:52'),
(13, '2020-11-25', '05:16:41am', 1, 'Negros', 'I', 'ML Carbon', 'Firstname M. Surname', NULL, NULL, '2020-11-05 04:16:41'),
(14, '2020-11-16', '06:17:44am', 2, 'Misamis', 'I', 'ML Titay', 'Firstname M. Surname', NULL, NULL, '2020-11-05 05:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `usercode` int(11) NOT NULL,
  `username` varchar(254) NOT NULL,
  `passcode` text NOT NULL,
  `fullname` varchar(254) NOT NULL,
  `ulevpos` varchar(254) NOT NULL,
  `createdby` varchar(254) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`usercode`, `username`, `passcode`, `fullname`, `ulevpos`, `createdby`, `created`, `modified`) VALUES
(1, 'admin', 'admin', 'Firstname M. Surname', 'Head', 'admin', '2020-11-03 00:00:00', '2020-11-05 01:42:36'),
(2, 'user', 'user', 'Username C. Lhuillier', 'Field', 'admin', '2020-11-04 00:00:00', '2020-11-05 01:42:36'),
(3, 'rst', 'rst', 'Branch B. Sample', 'Technical', 'admin', '2020-11-04 00:00:00', '2020-11-05 01:42:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_auditpc`
--
ALTER TABLE `tbl_auditpc`
  ADD PRIMARY KEY (`audit_pc_no`);

--
-- Indexes for table `tbl_branch_auditcheck`
--
ALTER TABLE `tbl_branch_auditcheck`
  ADD PRIMARY KEY (`branch_audit_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`usercode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_auditpc`
--
ALTER TABLE `tbl_auditpc`
  MODIFY `audit_pc_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_branch_auditcheck`
--
ALTER TABLE `tbl_branch_auditcheck`
  MODIFY `branch_audit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `usercode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
