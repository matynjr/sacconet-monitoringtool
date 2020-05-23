-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 06:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sacco_monitoring_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `permission_association`
--

CREATE TABLE `permission_association` (
  `permission_association_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `permission_association_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_association`
--

INSERT INTO `permission_association` (`permission_association_id`, `role_id`, `permission_id`, `permission_association_status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `smt_accounts`
--

CREATE TABLE `smt_accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_status` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smt_accounts`
--

INSERT INTO `smt_accounts` (`id`, `username`, `email`, `password`, `role_id`, `user_status`, `created_on`) VALUES
(60, 'martin', 'martinlx180@gmail.com', 'martin', 1, 1, '2020-04-11 15:59:46'),
(61, 'aideed', 'aideed@uccfs.org', 'aideed', 2, 1, '2020-04-11 15:59:46'),
(62, 'aggrey', 'Aggrey', 'uccfs', 1, 1, '2020-04-11 15:59:46'),
(63, 'test', 'test', 'test', 1, 1, '2020-04-11 15:59:46'),
(64, 'test', 'test', 'test', 1, 1, '2020-04-11 15:59:46'),
(65, 'test3', 'test3', 'test3', 1, 0, '2020-04-11 15:59:46'),
(66, 'test4', 'test4', 'test4', 1, 0, '2020-04-11 15:59:46'),
(67, 'test6', 'test6', 'test6', 1, 1, '2020-04-11 15:59:46'),
(68, 'test8', 'test8', 'test8', 1, 1, '2020-04-11 16:01:07'),
(69, 'test9', 'test9', 'test9', 1, 1, '2020-04-11 17:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `permission_id` int(11) NOT NULL,
  `permissions` varchar(255) DEFAULT NULL,
  `permissions_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`permission_id`, `permissions`, `permissions_status`, `created_at`) VALUES
(1, 'can_add_users', 1, '2020-04-13 17:45:58'),
(2, 'can_view_users 	', 1, '2020-04-13 17:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `user_role_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `user_role`, `user_role_status`, `created_at`) VALUES
(1, 'administrator', 1, '2020-04-13 17:42:23'),
(2, 'normal user', 1, '2020-04-13 17:42:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permission_association`
--
ALTER TABLE `permission_association`
  ADD PRIMARY KEY (`permission_association_id`),
  ADD KEY `fk_rolez_id` (`role_id`),
  ADD KEY `fk_permission_id` (`permission_id`);

--
-- Indexes for table `smt_accounts`
--
ALTER TABLE `smt_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_id` (`role_id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permission_association`
--
ALTER TABLE `permission_association`
  MODIFY `permission_association_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `smt_accounts`
--
ALTER TABLE `smt_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_association`
--
ALTER TABLE `permission_association`
  ADD CONSTRAINT `fk_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `user_permissions` (`permission_id`),
  ADD CONSTRAINT `fk_rolez_id` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`role_id`);

--
-- Constraints for table `smt_accounts`
--
ALTER TABLE `smt_accounts`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
