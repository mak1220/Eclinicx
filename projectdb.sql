-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 10:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attaches`
--

CREATE TABLE `attaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Attachment_Details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Attachment_FIle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attaches`
--

INSERT INTO `attaches` (`id`, `Attachment_Details`, `Attachment_FIle`, `created_at`, `updated_at`) VALUES
(1, 'MubasharFaiz', '1600200688.PNG', '2020-09-15 15:11:28', '2020-09-15 15:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `PName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `visit4_id`, `PName`, `desc`, `Type`, `File`, `created_at`, `updated_at`) VALUES
(1, 14, 'Heart specialization', 'Heart specialization', 'Sergrical Instrument', '1600193272.PNG', '2020-09-15 12:51:26', '2020-09-15 13:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `dashes`
--

CREATE TABLE `dashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashes`
--

INSERT INTO `dashes` (`id`, `FirstName`, `LastName`, `company`, `email`, `email_verified_at`, `phone`, `password`, `confirm_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mubashar', 'Faiz', 'Doctor', 'mubasharfaiz220@gmail.com', NULL, '03224346035', 'bhatti112233', 'bhatti112233', NULL, '2020-08-19 03:46:35', '2020-08-19 03:46:35'),
(2, 'Tayyab', 'Bhatti', 'Doctor', 'mubasha@gmail.com', NULL, '03224346035', 'bhatti112233', 'bhatti112233', NULL, '2020-08-19 12:16:24', '2020-08-19 12:16:24'),
(4, 'Mubashar', 'faiz', 'Doctor', 'mubashar@gmail.com', NULL, '03224346035', 'bhatti112233', 'bhatti112233', NULL, '2020-09-03 10:47:49', '2020-09-03 10:47:49'),
(5, 'fahad', 'Jamshed', 'Doctor', 'mub@gmail.com', NULL, '03224346035', 'bhatti112233', 'bhatti112233', NULL, '2020-09-15 14:37:47', '2020-09-15 14:37:47'),
(6, 'Zeeshan', 'Bhatti', 'Doctor', 'Zee@gmail.com', NULL, '03224346035', 'bhatti112233', 'bhatti112233', NULL, '2020-09-15 14:38:22', '2020-09-15 14:38:22'),
(7, 'Hamza', 'Bhatti', 'Doctor', 'Hamza@gmail.com', NULL, '03224346035', 'bhatti112233', 'bhatti112233', NULL, '2020-09-15 14:38:52', '2020-09-15 14:38:52'),
(8, 'Anees', 'Bhatti', 'Admin', 'anees@gmail.com', NULL, '03224346035', 'bhatti112233', 'bhatti112233', NULL, '2020-09-15 14:48:02', '2020-09-15 14:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `departs`
--

CREATE TABLE `departs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Department_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department_Head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departs`
--

INSERT INTO `departs` (`id`, `Department_Name`, `Phone_Number`, `Department_Head`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Operation Theater', '03224346035', 'Taylor', NULL, '2020-08-20 12:43:25', '2020-08-20 12:43:25'),
(2, 'Heart specialization', '03224346035', 'Taylor', NULL, '2020-09-15 15:05:46', '2020-09-15 15:05:46'),
(3, 'MRI', '03224346035', 'Anser', NULL, '2020-09-15 15:05:57', '2020-09-15 15:05:57'),
(4, 'ICU', '03224346035', 'Taylor', NULL, '2020-09-15 15:06:07', '2020-09-15 15:06:07'),
(5, 'Medical ward', '03224346035', 'Taylor', NULL, '2020-09-15 15:06:27', '2020-09-15 15:06:27'),
(6, 'PHYSIOTHERAPY', '03224346035', 'Taylor', NULL, '2020-09-15 15:06:58', '2020-09-15 15:06:58'),
(7, 'NUTRITIONIST', '03224346035', 'Anser', NULL, '2020-09-15 15:07:09', '2020-09-15 15:07:09'),
(8, 'endocrine', '03224346035', 'Anser', NULL, '2020-09-15 15:07:23', '2020-09-15 15:07:23'),
(9, 'medicine', '03224346035', 'Anser', NULL, '2020-09-15 15:07:35', '2020-09-15 15:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `docstatuses`
--

CREATE TABLE `docstatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DoctorStatus_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DoctorStatus_Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `docstatuses`
--

INSERT INTO `docstatuses` (`id`, `DoctorStatus_Name`, `DoctorStatus_Description`, `created_at`, `updated_at`) VALUES
(1, 'Doctor', 'Heart specialization', '2020-08-20 12:25:10', '2020-08-20 12:25:10'),
(2, 'MubasharFaiz', 'Heart specialization', '2020-09-15 15:02:13', '2020-09-15 15:02:13'),
(3, 'Tayyab', 'Heart specialization', '2020-09-15 15:02:34', '2020-09-15 15:02:34'),
(4, 'Injuction', 'Heart specialization', '2020-09-15 15:03:01', '2020-09-15 15:03:01'),
(5, 'Heart specialization', 'Heart specialization', '2020-09-15 15:03:09', '2020-09-15 15:03:09'),
(6, 'Panadol', 'Heart specialization', '2020-09-15 15:03:18', '2020-09-15 15:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `docts`
--

CREATE TABLE `docts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doctor_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `Doctor_Licence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doctor_Department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `docts`
--

INSERT INTO `docts` (`id`, `Status`, `Doctor_Name`, `Phone_Number`, `email`, `email_verified_at`, `Doctor_Licence`, `Doctor_Department`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DR O-C', 'Tayyab', '03224346035', 'mubasharfaiz220@turnitin.com', NULL, '#4546546', 'FAMILIY MEDICINE', NULL, '2020-08-20 12:37:29', '2020-08-20 12:37:29'),
(3, 'DR O-C', 'MubasharFaiz', '03224346035', 'mubasharfaiz@turnitin.com', NULL, '#4546546', 'RADIOLOGY', NULL, '2020-08-25 12:28:09', '2020-08-25 12:28:09'),
(4, 'DR O-F', 'Tayyab', '03224346035', 'fahad@gmail.com', NULL, '#4546546', 'FAMILIY MEDICINE', NULL, '2020-09-15 15:03:34', '2020-09-15 15:03:34'),
(5, 'ACTIVE-P', 'David', '03224346035', 'tayyabbhatti7609@gmail.com', NULL, '#4546546', 'FAMILIY MEDICINE', NULL, '2020-09-15 15:03:56', '2020-09-15 15:03:56'),
(7, 'ACTIVE-P', 'Injuction', '03224346035', 'tayyab7609@gmail.com', NULL, '#4546546', 'FAMILIY MEDICINE', NULL, '2020-09-15 15:04:24', '2020-09-15 15:04:24'),
(8, 'ONCALL-2', 'MubasharFaiz', '03224346035', 'F2016266253@umt.edu.pk', NULL, '#4546546', 'FAMILIY MEDICINE', NULL, '2020-09-15 15:04:43', '2020-09-15 15:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `equips`
--

CREATE TABLE `equips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Equipment_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Purchase_Date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Purchase_Maintinence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Equipment_Supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Purchase_File` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equips`
--

INSERT INTO `equips` (`id`, `Equipment_Name`, `Purchase_Date`, `Purchase_Maintinence`, `Equipment_Supplier`, `Purchase_File`, `created_at`, `updated_at`) VALUES
(1, 'Tayyab', '08/19/2020', '08/27/2020', 'Fazal Din', '1597921926.jpeg', '2020-08-20 06:12:06', '2020-08-20 06:12:06'),
(2, 'Injuction', '08/10/2020', '08/19/2020', 'Appolo Surgical', '1597947244.jpg', '2020-08-20 13:14:04', '2020-08-20 13:14:04'),
(3, 'Operation Theater', '08/21/2020', '08/28/2020', 'Appolo Surgical', '1597947481.jpg', '2020-08-20 13:18:01', '2020-08-20 13:18:01'),
(4, 'Injuction', '08/19/2020', '08/17/2020', 'Fazal Din', '1600200718.PNG', '2020-09-15 15:11:58', '2020-09-15 15:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `color` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `color`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English2 paper', '2020-08-05 00:00:00', '2020-08-06 00:00:00', '#3788d8', 'paper', '2020-08-22 03:35:17', '2020-08-22 03:35:56', NULL),
(2, 'Match', '2020-08-11 00:00:00', '2020-08-12 00:00:00', '#42d737', 'match', '2020-08-22 03:35:46', '2020-08-22 03:35:46', NULL),
(3, 'Operation', '2020-09-10 00:00:00', '2020-09-10 00:00:00', '#21a31f', 'operation', '2020-09-03 10:52:18', '2020-09-13 13:16:10', '2020-09-13 13:16:10'),
(4, 'English2 paper', '2020-09-16 00:00:00', '2020-09-17 00:00:00', '#1a1c1e', 'khk', '2020-09-12 12:42:18', '2020-09-13 13:14:52', '2020-09-13 13:14:52'),
(5, 'Match', '2020-09-14 00:00:00', '2020-09-15 00:00:00', '#3788d8', 'Match', '2020-09-13 13:17:04', '2020-09-14 11:49:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freqs`
--

CREATE TABLE `freqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Frequency_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Frequency_Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `Group`, `created_at`, `updated_at`) VALUES
(1, 'Doctor', '2020-08-20 15:48:13', '2020-08-20 16:11:46'),
(3, 'Admin', '2020-09-15 14:39:05', '2020-09-15 14:39:05'),
(4, 'Nurse', '2020-09-15 14:39:17', '2020-09-15 14:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Hospital` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `Hospital`, `created_at`, `updated_at`) VALUES
(1, 'bajwa Hospital', '2020-08-21 15:33:26', '2020-08-21 15:33:26'),
(3, 'Childern Hospital', '2020-09-15 14:39:35', '2020-09-15 14:39:35'),
(4, 'Jinnah Hospital', '2020-09-15 14:39:42', '2020-09-15 14:39:42'),
(5, 'Doctor Hospital', '2020-09-15 14:39:54', '2020-09-15 14:39:54'),
(6, 'National Hospital', '2020-09-15 14:40:06', '2020-09-15 14:40:06'),
(7, 'Meo Hospital', '2020-09-15 14:40:26', '2020-09-15 14:40:26'),
(8, 'Bhatti hospital', '2020-09-15 14:41:11', '2020-09-15 14:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `visit4_id`, `Description`, `File`, `created_at`, `updated_at`) VALUES
(1, 14, 'mask', '1600198497.PNG', '2020-09-15 14:34:41', '2020-09-15 14:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `imagings`
--

CREATE TABLE `imagings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrigDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Attach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imagings`
--

INSERT INTO `imagings` (`id`, `visit4_id`, `Type`, `PName`, `doctor`, `Location`, `date`, `OrigDate`, `Attach`, `desc`, `created_at`, `updated_at`) VALUES
(1, 14, 'Sergrical Instrument', 'MubasharFaiz', 'MubasharFaiz', 'lahore', '09/15/2020', '09/15/2020', '1600189094.PNG', 'Heart specialization', '2020-09-15 11:43:19', '2020-09-15 11:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `instructs`
--

CREATE TABLE `instructs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Frequency_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Frequency_Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pur_id` bigint(20) UNSIGNED NOT NULL,
  `Stock_Item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Batch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `pur_id`, `Stock_Item`, `Batch`, `Count`, `Cost`, `Total`, `created_at`, `updated_at`) VALUES
(6, 7, 'mask', '8798', '100', '20', '2000', NULL, NULL),
(7, 8, 'Injuction', '465464', '100', '100', '10000', NULL, NULL),
(8, 8, 'mask', '8798', '100', '20', '2000', NULL, NULL),
(9, 8, 'Injuction', '5354', '100', '100', '10000', NULL, NULL),
(10, 9, 'INSULIN SYRINGE', '465464', '23', '1000', '23000', NULL, NULL),
(11, 9, 'FEEDING TUBE', '8798', '1', '1000', '1000', NULL, NULL),
(12, 10, 'RINGER LECTATE 1000ML', '1232', '2', '200', '400', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_types`
--

CREATE TABLE `item_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ItemType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ItemDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_types`
--

INSERT INTO `item_types` (`id`, `ItemType`, `ItemDescription`, `created_at`, `updated_at`) VALUES
(1, 'Sergrical Instrument', 'Heart specialization', '2020-09-12 12:31:18', '2020-09-12 12:31:18'),
(2, 'Sergrical Instrument', 'Heart specialization', '2020-09-15 15:12:56', '2020-09-15 15:12:56'),
(3, 'MAsk', 'mask', '2020-09-15 15:13:49', '2020-09-15 15:13:49'),
(4, 'DISPOSIBLES', 'SURGICAL MASK WITH FACE SHIELD', '2020-09-15 15:14:23', '2020-09-15 15:14:23'),
(5, 'DISPOSIBLES', 'SURGICAL GOWNS', '2020-09-15 15:14:39', '2020-09-15 15:14:39'),
(6, 'MAsk', 'SURGICAL FACE MASKS', '2020-09-15 15:15:01', '2020-09-15 15:15:01'),
(7, 'DISPOSIBLES', 'GLOVES', '2020-09-15 15:16:01', '2020-09-15 15:16:01'),
(8, 'DISPOSIBLES', 'surgical gloves', '2020-09-15 15:16:16', '2020-09-15 15:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `lab_reports`
--

CREATE TABLE `lab_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrigDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Attach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_reports`
--

INSERT INTO `lab_reports` (`id`, `visit4_id`, `Type`, `PName`, `doctor`, `Location`, `date`, `OrigDate`, `Attach`, `desc`, `created_at`, `updated_at`) VALUES
(1, 14, 'Sergrical Instrument', 'MubasharFaiz', 'MubasharFaiz', 'lahore', '09/15/2020', '09/15/2020', '1600184678.PNG', 'Heart specialization', '2020-09-15 10:44:14', '2020-09-15 10:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_17_211939_create_dashes_table', 1),
(5, '2020_07_19_105337_create_departs_table', 1),
(6, '2020_07_19_115352_create_proceds_table', 1),
(7, '2020_07_19_123937_create_suppliers_table', 1),
(8, '2020_07_19_161410_create_referes_table', 1),
(9, '2020_07_19_180339_create_docts_table', 1),
(10, '2020_07_19_184626_create_item_types_table', 1),
(11, '2020_07_19_192916_create_pharmacies_table', 1),
(12, '2020_07_20_214417_create_docstatuses_table', 1),
(13, '2020_07_21_155337_create_equips_table', 1),
(14, '2020_07_22_084230_create_notes_table', 1),
(15, '2020_07_22_111138_create_freqs_table', 1),
(16, '2020_07_22_115224_create_instructs_table', 1),
(17, '2020_07_26_200238_create_attaches_table', 1),
(18, '2020_07_29_173523_create_events_table', 1),
(19, '2020_08_03_142919_create_purchases_table', 1),
(20, '2020_08_05_155325_create_patients_table', 1),
(21, '2020_08_05_160151_create_patient2s_table', 1),
(22, '2020_08_05_211546_create_items_table', 1),
(23, '2020_08_07_193434_create_visit3s_table', 1),
(24, '2020_08_07_193612_create_visit2s_table', 1),
(25, '2020_08_07_193733_create_visit1s_table', 1),
(26, '2020_08_08_203140_create_attachments_table', 1),
(27, '2020_08_08_213057_create_images_table', 1),
(28, '2020_08_09_171243_create_vitals_table', 1),
(29, '2020_08_09_182208_create_pro_and_sers_table', 1),
(30, '2020_08_09_212918_create_past_medics_table', 1),
(31, '2020_08_10_152622_create_lab_reports_table', 1),
(32, '2020_08_10_170914_create_imagings_table', 1),
(33, '2020_08_20_203414_create_groups_table', 2),
(34, '2020_08_20_204326_create_groups_table', 3),
(35, '2020_08_21_201912_create_hospitals_table', 4),
(36, '2020_09_01_164454_create_tags_table', 5),
(37, '2020_09_02_075246_create_statuses_table', 6),
(38, '2020_09_05_074928_create_patients_table', 7),
(39, '2020_09_05_075250_create_patient2s_table', 8),
(40, '2020_09_06_141339_create_visit4s_table', 9),
(41, '2020_09_06_141610_create_visit5s_table', 9),
(42, '2020_09_06_141641_create_visit6s_table', 9),
(43, '2020_09_07_090822_create_visit4s_table', 10),
(44, '2020_09_07_091202_create_visit5s_table', 10),
(45, '2020_09_07_091324_create_visit6s_table', 10),
(46, '2020_09_07_145244_create_visit4s_table', 11),
(47, '2020_09_07_145811_create_visit4s_table', 12),
(48, '2020_09_07_171151_create_visit5s_table', 13),
(49, '2020_09_07_171840_create_visi6s_table', 13),
(50, '2020_09_08_065315_create_purchases_table', 14),
(51, '2020_09_08_065555_create_items_table', 15),
(52, '2020_09_08_074125_create_items_table', 16),
(53, '2020_09_12_090410_create_items_table', 17),
(54, '2020_09_14_174548_create_pro_and_sers_table', 18),
(55, '2020_09_14_182516_create_pro_and_sers_table', 19),
(56, '2020_09_14_183727_create_pro_and_sers_table', 20),
(57, '2020_09_14_192453_create_past_medics_table', 21),
(58, '2020_09_14_194313_create_past_medics_table', 22),
(59, '2020_09_14_220839_create_lab_reports_table', 23),
(60, '2020_09_15_150620_create_past_medics_table', 24),
(61, '2020_09_15_152241_create_pro_and_sers_table', 25),
(62, '2020_09_15_153852_create_lab_reports_table', 26),
(63, '2020_09_15_155615_create_imagings_table', 27),
(64, '2020_09_15_160535_create_imagings_table', 28),
(65, '2020_09_15_173832_create_attachments_table', 29),
(66, '2020_09_15_174941_create_attachments_table', 30),
(67, '2020_09_15_183533_create_images_table', 31),
(68, '2020_09_15_185538_create_images_table', 32),
(69, '2020_09_15_192608_create_images_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Note_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note_Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Show_On_Prescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `past_medics`
--

CREATE TABLE `past_medics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `PName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Freq` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dura` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrigDate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Attach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `past_medics`
--

INSERT INTO `past_medics` (`id`, `visit4_id`, `PName`, `Dose`, `Freq`, `Dura`, `Doctor`, `Date`, `OrigDate`, `Attach`, `Desc`, `created_at`, `updated_at`) VALUES
(1, 14, 'panadol', '3 time a day', '3 tablets', 'Subha', 'MubasharFaiz', '08/31/2020', '09/16/2020', '1600199940.PNG', 'Heart specialization', '2020-09-15 10:10:55', '2020-09-15 14:59:00'),
(2, 30, 'MubasharFaiz', '3 time a day', '3 tablets', 'Subha', 'MubasharFaiz', '09/14/2020', '08/13/2020', '1600199976.PNG', 'Heart specialization', '2020-09-15 14:59:36', '2020-09-15 14:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `patient2s`
--

CREATE TABLE `patient2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `Reg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient2s`
--

INSERT INTO `patient2s` (`id`, `patient_id`, `Reg`, `cnic`, `Reference`, `Tag`, `Remark`, `File`, `created_at`, `updated_at`) VALUES
(1, 1, '08/11/2020', '35401-1812116-5', 'Mubashar Faiz', 'Peads', 'knlksfnds', 'download.jpg', NULL, NULL),
(3, 3, '08/12/2020', '35401-1812116-5', 'Mubashar Faiz', 'Peads', 'knvlsnvls', 'download.jpg', NULL, NULL),
(4, 4, '08/11/2020', '35401-1812116-5', 'fahad Jamshed', 'Pregnency', 'NA', 'Capture1.PNG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MRNX` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscountCash` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `MRNX`, `Name`, `Gender`, `Age`, `Address`, `Phone`, `Discount`, `DiscountCash`, `created_at`, `updated_at`) VALUES
(1, '10', 'David', 'Male', '24', 'lahore', '03224346035', '30%', '654684', '2020-09-05 03:05:32', '2020-09-07 13:34:43'),
(3, '12', 'Tayyab', 'Male', '24', 'lahore', '03224346035', '70%', '66584651', '2020-09-07 09:04:00', '2020-09-07 09:04:00'),
(4, '5', 'Tayyab', 'Male', '24', 'lahore', '03224346035', '70%', '878979', '2020-09-15 14:52:04', '2020-09-15 14:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Item_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genaric_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item_Type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item_Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item_Count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Item_Cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`id`, `Item_Name`, `Genaric_Name`, `Item_Type`, `Item_Description`, `Item_Count`, `Item_Cost`, `created_at`, `updated_at`) VALUES
(1, 'mask', 'mask', 'DISPOSIBLES', 'mask', '100', '20', '2020-08-26 12:10:06', '2020-08-26 12:10:06'),
(2, 'Injuction', 'NA', 'MEDICATIONS', 'Heart specialization', '100', '100', '2020-09-13 06:33:12', '2020-09-13 06:33:12'),
(3, 'INSULIN SYRINGE', 'NA', 'DISPOSIBLES', 'SURGICAL MASK WITH FACE SHIELD', '23', '1000', '2020-09-15 15:16:57', '2020-09-15 15:16:57'),
(4, '10% 500ML', 'NA', 'DISPOSIBLES', 'Heart specialization', '32', '2345', '2020-09-15 15:17:22', '2020-09-15 15:17:22'),
(5, 'FEEDING TUBE', 'NA', 'DISPOSIBLES', 'GLOVES', '1', '1000', '2020-09-15 15:17:54', '2020-09-15 15:17:54'),
(6, 'RINGER LECTATE 1000ML', 'NA', 'DISPOSIBLES', 'SURGICAL MASK WITH FACE SHIELD', '2', '200', '2020-09-15 15:18:21', '2020-09-15 15:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `proceds`
--

CREATE TABLE `proceds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Procedure_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prodecure_Charges` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Procedure_Department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proceds`
--

INSERT INTO `proceds` (`id`, `Procedure_Name`, `Prodecure_Charges`, `Procedure_Department`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MRI', '14000', 'Radiology', NULL, '2020-08-20 12:48:25', '2020-09-13 11:57:50'),
(2, 'x-ray', '10000', 'Radiology', NULL, '2020-08-23 14:24:26', '2020-08-23 14:24:26'),
(3, 'ULTRASOUND', '10000', 'Family Medicine', NULL, '2020-09-15 15:08:09', '2020-09-15 15:08:09'),
(4, 'PEADS', '100', 'Family Medicine', NULL, '2020-09-15 15:08:29', '2020-09-15 15:08:29'),
(5, 'LAB TESTS', '1000', 'Radiology', NULL, '2020-09-15 15:08:46', '2020-09-15 15:08:46'),
(6, 'CONSULTATION', '2000', 'Radiology', NULL, '2020-09-15 15:09:02', '2020-09-15 15:09:02'),
(7, 'ULTRASOUND', '14000', 'Radiology', NULL, '2020-09-15 15:09:26', '2020-09-15 15:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `pro_and_sers`
--

CREATE TABLE `pro_and_sers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `Sergery_Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sergery_Doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sergery_Hospital` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sergery_Date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Origin_Date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sergery_Attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sergery_Description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_and_sers`
--

INSERT INTO `pro_and_sers` (`id`, `visit4_id`, `Sergery_Name`, `Sergery_Doctor`, `Sergery_Hospital`, `Sergery_Date`, `Origin_Date`, `Sergery_Attachment`, `Sergery_Description`, `created_at`, `updated_at`) VALUES
(1, 14, 'MRI', 'Tayyab', 'bajwa Hospital', '09/14/2020', '09/15/2020', '1600183946.jpg', 'Heart specialization', '2020-09-15 10:27:25', '2020-09-15 10:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Sup_Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pur_Proof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sup_Date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `Sup_Name`, `Pur_Proof`, `Sup_Date`, `Desc`, `Total`, `created_at`, `updated_at`) VALUES
(7, 'Fahad', '1600005193.PNG', '08/04/2020', 'injection', '2000.00 Rs', '2020-09-13 08:53:13', '2020-09-13 08:53:13'),
(8, 'Mubashar Faiz', '1600006463.jpg', '08/04/2020', 'injection', '22000.00 Rs', '2020-09-13 09:14:23', '2020-09-13 09:14:23'),
(9, 'Fahad', '1600201144.PNG', '08/04/2020', 'Mask', '24000.00 Rs', '2020-09-15 15:19:04', '2020-09-15 15:19:04'),
(10, 'Zeeshan', '1600201185.jpg', '08/04/2020', 'Mask', '400.00 Rs', '2020-09-15 15:19:45', '2020-09-15 15:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `referes`
--

CREATE TABLE `referes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Referee_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Referee_Phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `Referee_Hospital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Referee_Share` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referes`
--

INSERT INTO `referes` (`id`, `Referee_Name`, `Referee_Phone`, `email`, `email_verified_at`, `Referee_Hospital`, `Referee_Share`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MubasharFaiz', '03224346035', 'mubasharfaiz220@gmail.com', NULL, 'bajwa Hospital', '70%', NULL, '2020-08-19 14:18:31', '2020-08-19 14:18:31'),
(2, 'Tayyab', '03224346035', 'tayyabbhatti7609@gmail.com', NULL, 'bajwa Hospital', '100%', NULL, '2020-08-19 14:25:09', '2020-08-19 14:25:09'),
(4, 'MubasharFaiz', '03224346035', 'mub@gmail.com', NULL, 'bajwa Hospital', '50%', NULL, '2020-08-21 15:38:18', '2020-08-21 15:38:18'),
(5, 'David', '03224346035', 'F2016266253@umt.edu.pk', NULL, 'Childern Hospital', '10%', NULL, '2020-09-15 14:48:38', '2020-09-15 14:48:38'),
(6, 'Fahad', '03224346035', 'mubasharfaiz220@turnitin.com', NULL, 'Jinnah Hospital', '30%', NULL, '2020-09-15 14:49:08', '2020-09-15 14:49:08'),
(8, 'Zeeshan', '03224346035', 'tayyabbhatti@gmail.com', NULL, 'Doctor Hospital', '30%', NULL, '2020-09-15 14:50:19', '2020-09-15 14:50:19'),
(10, 'Hamza', '03224346035', 'mubii@gmail.com', NULL, 'National Hospital', '50%', NULL, '2020-09-15 14:50:47', '2020-09-15 14:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'DR O-C', '2020-09-02 03:05:49', '2020-09-02 03:14:44'),
(2, 'DR O-F', '2020-09-02 03:09:19', '2020-09-02 03:09:19'),
(4, 'DR O-P', '2020-09-02 03:14:54', '2020-09-02 03:14:54'),
(5, 'Active-F', '2020-09-15 14:45:50', '2020-09-15 14:45:50'),
(6, 'ACTIVE-P', '2020-09-15 14:46:03', '2020-09-15 14:46:03'),
(7, 'ONCALL=1', '2020-09-15 14:46:15', '2020-09-15 14:46:15'),
(8, 'ONCALL-2', '2020-09-15 14:46:37', '2020-09-15 14:46:37'),
(9, 'RESIGNED', '2020-09-15 14:46:54', '2020-09-15 14:46:54'),
(10, 'TERMINATED', '2020-09-15 14:47:02', '2020-09-15 14:47:02'),
(11, 'VISITING EXPAT', '2020-09-15 14:47:17', '2020-09-15 14:47:17'),
(12, 'VISITING PK', '2020-09-15 14:47:24', '2020-09-15 14:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Supplier_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Supplier_Address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Supplier_Phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Supplier_Mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Supplier_Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `Supplier_Name`, `Supplier_Address`, `Supplier_Phone`, `Supplier_Mobile`, `Supplier_Email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MubasharFaiz', 'lahore', '03224346035', '04237930224', 'mubasharfaiz220@gmail.com', NULL, '2020-08-20 12:52:44', '2020-08-20 12:52:44'),
(2, 'MubasharFaiz', 'lahore', '03224346035', '04237930224', 'mubasharfaiz220@gmail.com', NULL, '2020-09-15 15:09:43', '2020-09-15 15:09:43'),
(3, 'Tayyab', 'lahore', '03224346035', '04237930224', 'F2016266253@umt.edu.pk', NULL, '2020-09-15 15:09:55', '2020-09-15 15:09:55'),
(4, 'Injuction', 'lahore', '03224346035', '04237930224', 'tayyabbhatti7609@gmail.com', NULL, '2020-09-15 15:10:05', '2020-09-15 15:10:05'),
(5, 'David', 'lahore', '03224346035', '04237930224', 'tayyabbhatti7609@gmail.com', NULL, '2020-09-15 15:10:17', '2020-09-15 15:10:17'),
(6, 'Heart specialization', 'lahore', '03224346035', '04237930224', 'mubasharfaiz220@turnitin.com', NULL, '2020-09-15 15:10:27', '2020-09-15 15:10:27'),
(7, 'Heart specialization', 'lahore', '03224346035', '04237930224', 'mub@gmail.com', NULL, '2020-09-15 15:10:39', '2020-09-15 15:10:39'),
(8, 'MubasharFaiz', 'lahore', '03224346035', '04237930224', 'mub@gmail.com', NULL, '2020-09-15 15:10:50', '2020-09-15 15:10:50'),
(9, 'Tayyab', 'lahore', '03224346035', '04237930224', 'mubasharfaiz220@gmail.com', NULL, '2020-09-15 15:11:02', '2020-09-15 15:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `Tag`, `created_at`, `updated_at`) VALUES
(3, 'Peads', '2020-09-01 12:03:43', '2020-09-01 12:05:10'),
(4, 'Diabatic', '2020-09-15 14:42:26', '2020-09-15 14:42:26'),
(5, 'Alergy', '2020-09-15 14:42:32', '2020-09-15 14:42:32'),
(6, 'Heart', '2020-09-15 14:42:41', '2020-09-15 14:42:41'),
(7, 'Pregnency', '2020-09-15 14:42:58', '2020-09-15 14:42:58'),
(8, 'LowBloodPresure', '2020-09-15 14:43:15', '2020-09-15 14:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MubasharFaiz', 'mubasharfaiz220@gmail.com', NULL, '$2y$10$lRaj9WOqaOkdSrDPLg2QO.aWPtAgAc.9HXwKIMibc7yjegmhASSTi', NULL, '2020-08-19 03:45:54', '2020-08-19 03:45:54'),
(2, 'Admin', 'eclinic@gmail.com', NULL, '$2y$10$cIhd1ULMwGVNNgx2aDB46e.fo8ymAIvonwRr61RxwfnzKP21J/P6u', NULL, '2020-09-15 07:27:21', '2020-09-15 07:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `visi6s`
--

CREATE TABLE `visi6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `Sub` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Advance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Due` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi6s`
--

INSERT INTO `visi6s` (`id`, `visit4_id`, `Sub`, `Discount`, `Grand`, `Advance`, `Due`, `created_at`, `updated_at`) VALUES
(5, 13, '40000.00 Rs', '3500.00 Rs', '36500.00 Rs', '0', '35500.00 Rs', '2020-09-07 13:34:08', '2020-09-07 13:34:08'),
(6, 14, '10000.00 Rs', '1200.00 Rs', '8800.00 Rs', '0', '7800.00 Rs', '2020-09-07 15:25:22', '2020-09-07 15:25:22'),
(7, 15, '10000.00 Rs', '1200.00 Rs', '8800.00 Rs', '0', '7800.00 Rs', '2020-09-07 15:28:12', '2020-09-07 15:28:12'),
(8, 16, '15000.00 Rs', '1800.00 Rs', '13200.00 Rs', '0', '5200.00 Rs', '2020-09-12 15:18:41', '2020-09-12 15:18:41'),
(9, 17, '15000.00 Rs', '1800.00 Rs', '13200.00 Rs', '0', '6200.00 Rs', '2020-09-12 15:20:41', '2020-09-12 15:20:41'),
(10, 18, '10000.00 Rs', '200.00 Rs', '9800.00 Rs', '0', '1800.00 Rs', '2020-09-12 15:28:13', '2020-09-12 15:28:13'),
(11, 19, '15000.00 Rs', '1800.00 Rs', '13200.00 Rs', '0', '6200.00 Rs', '2020-09-12 15:50:36', '2020-09-12 15:50:36'),
(12, 20, '15000.00 Rs', '1800.00 Rs', '13200.00 Rs', '26800.00 Rs', '0', '2020-09-12 16:21:14', '2020-09-12 16:21:14'),
(13, 21, '15000.00 Rs', '300.00 Rs', '14700.00 Rs', '0', '6700.00 Rs', '2020-09-12 16:22:06', '2020-09-12 16:22:06'),
(14, 25, '15000.00 Rs', '1800.00 Rs', '13200.00 Rs', '0', '5200.00 Rs', '2020-09-13 11:08:15', '2020-09-13 11:08:15'),
(15, 26, '100.00 Rs', '12.00 Rs', '88.00 Rs', '6912.00 Rs', '0', '2020-09-13 11:13:38', '2020-09-13 11:13:38'),
(16, 27, '10120.00 Rs', '1000.00 Rs', '9120.00 Rs', '880.00 Rs', '0', '2020-09-13 11:18:56', '2020-09-13 11:18:56'),
(17, 28, '14000.00 Rs', '3220.00 Rs', '10780.00 Rs', '0', '2780.00 Rs', '2020-09-14 15:52:42', '2020-09-14 15:52:42'),
(18, 29, '14000.00 Rs', '1400.00 Rs', '12600.00 Rs', '0', '11600.00 Rs', '2020-09-14 15:54:34', '2020-09-14 15:54:34'),
(19, 30, '14000.00 Rs', '1680.00 Rs', '12320.00 Rs', '0', '5320.00 Rs', '2020-09-15 14:57:43', '2020-09-15 14:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `visit1s`
--

CREATE TABLE `visit1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit3_id` bigint(20) UNSIGNED NOT NULL,
  `Reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Referee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit1s`
--

INSERT INTO `visit1s` (`id`, `visit3_id`, `Reason`, `Referee`, `Doctor`, `Date`, `Amount`, `created_at`, `updated_at`) VALUES
(18, 18, 'sergery', 'Tayyab', 'Tayyab', '08/24/2020', '13500.00 Rs', '2020-08-26 12:44:40', '2020-08-26 12:44:40'),
(19, 19, 'sergery', 'Tayyab', 'Tayyab', '08/19/2020', '13500.00 Rs', '2020-08-26 12:46:06', '2020-08-26 12:46:06'),
(21, 21, 'sergery', 'Tayyab', 'MubasharFaiz', '08/31/2020', '13500.00 Rs', '2020-08-26 12:49:55', '2020-08-26 12:49:55'),
(23, 23, 'check Up', 'Tayyab', 'Tayyab', '08/18/2020', '9800.00 Rs', '2020-08-26 12:56:15', '2020-08-26 12:56:15'),
(24, 24, 'Heart Sergery', 'Tayyab', 'Tayyab', '08/11/2020', '9000.00 Rs', '2020-08-26 13:34:59', '2020-08-26 13:34:59'),
(27, 27, 'check Up', 'Tayyab', 'MubasharFaiz', '08/12/2020', '24050.00 Rs', '2020-09-02 16:17:01', '2020-09-02 16:17:01'),
(28, 28, 'Head', 'MubasharFaiz', 'MubasharFaiz', '08/07/2020', '24600.00 Rs', '2020-09-02 16:19:32', '2020-09-02 16:19:32'),
(29, 29, 'City Scane', 'Tayyab', 'Tayyab', '08/03/2020', '24600.00 Rs', '2020-09-02 16:22:44', '2020-09-02 16:22:44'),
(30, 30, 'test', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', '39600.00 Rs', '2020-09-02 16:26:22', '2020-09-02 16:26:22'),
(31, 31, 'Head', 'MubasharFaiz', 'MubasharFaiz', '08/19/2020', '9900.00 Rs', '2020-09-03 12:15:16', '2020-09-03 12:15:16'),
(32, 32, 'sergery', 'Tayyab', 'Tayyab', '08/03/2020', '14850.00 Rs', '2020-09-05 12:40:52', '2020-09-05 12:40:52'),
(33, 33, 'Head', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', '14850.00 Rs', '2020-09-05 12:44:45', '2020-09-05 12:44:45'),
(34, 35, 'check Up', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', '14850.00 Rs', '2020-09-05 13:50:08', '2020-09-05 13:50:08'),
(35, 36, 'Heart Sergery', 'MubasharFaiz', 'Tayyab', '08/03/2020', '14850.00 Rs', '2020-09-05 13:59:36', '2020-09-05 13:59:36'),
(36, 37, 'MRI', 'MubasharFaiz', 'Tayyab', '08/03/2020', '13500.00 Rs', '2020-09-05 14:16:29', '2020-09-05 14:16:29'),
(37, 39, 'Scan', 'MubasharFaiz', 'Tayyab', '08/03/2020', '0.00 Rs', '2020-09-05 15:07:30', '2020-09-05 15:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `visit2s`
--

CREATE TABLE `visit2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit3_id` bigint(20) UNSIGNED NOT NULL,
  `Product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Stock_Item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sub_Total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit2s`
--

INSERT INTO `visit2s` (`id`, `visit3_id`, `Product`, `Stock_Item`, `unit`, `cost`, `Sub_Total`, `Discount`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'mask', '1', '200', '200', '24', '176', NULL, NULL),
(2, 2, 'MRI', 'mask', '1', '200', '200', '18', '182', NULL, NULL),
(3, 3, 'MRI', 'mask', '1', '200', '200', '2', '198', NULL, NULL),
(4, 4, 'MRI', 'mask', '1', '200', '200', '2', '198', NULL, NULL),
(5, 5, 'MRI', 'mask', '2', '10000', '20000', '1000', '19000', NULL, NULL),
(6, 6, '15000', NULL, '1', '15000', '15000', '150', '14850', NULL, NULL),
(7, 7, '15000', NULL, '1', '15000', '15000', '1800', '13200', NULL, NULL),
(8, 8, '10000', NULL, '1', '10000', '10000', '1000', '9000', NULL, NULL),
(9, 9, '10000', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(11, 11, '15000', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, NULL, '1', '1', '1', '1', '9', '-8', NULL, NULL),
(13, 13, '15000', NULL, '1', '15000', '15000', '15000', '0', NULL, NULL),
(14, 14, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(15, 15, '15000', NULL, '1', '15000', '15000', '0', '15000', NULL, NULL),
(16, 16, '15000', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 17, NULL, '2', '1', '2', '2', '0.2', '1', NULL, NULL),
(18, 18, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(19, 19, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(20, 20, '15000', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 21, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(22, 22, '15000', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 23, '10000', NULL, '1', '10000', '10000', '200', '9800', NULL, NULL),
(24, 24, '10000', NULL, '1', '10000', '10000', '1000', '9000', NULL, NULL),
(25, 25, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(26, 26, '15000', NULL, '1', '15000', '15000', '0', '15000', NULL, NULL),
(27, 26, '10000', NULL, '1', '10000', '10000', '0', '10000', NULL, NULL),
(28, 26, '15000', NULL, '1', '15000', '15000', '0', '15000', NULL, NULL),
(29, 29, '10000', NULL, '1', '10000', '10000', '100', '9900', NULL, NULL),
(30, 29, '15000', NULL, '1', '15000', '15000', '300', '14700', NULL, NULL),
(31, 30, '15000', NULL, '1', '15000', '15000', '150', '14850', NULL, NULL),
(32, 30, '10000', NULL, '1', '10000', '10000', '100', '9900', NULL, NULL),
(33, 30, '15000', NULL, '1', '15000', '15000', '150', '14850', NULL, NULL),
(34, 31, '10000', NULL, '1', '10000', '10000', '100', '9900', NULL, NULL),
(35, 32, '15000', NULL, '1', '15000', '15000', '150', '14850', NULL, NULL),
(36, 33, '15000', NULL, '1', '15000', '15000', '150', '14850', NULL, NULL),
(37, 35, '15000', NULL, '1', '15000', '15000', '150', '14850', NULL, NULL),
(38, 36, '15000', NULL, '1', '15000', '15000', '150', '14850', NULL, NULL),
(39, 37, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(40, 39, '15000', NULL, '1', '15000', '15000', '15000', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visit3s`
--

CREATE TABLE `visit3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Sub_Total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Discount_Amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grand_Total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Advanced_Amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Due_Amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit3s`
--

INSERT INTO `visit3s` (`id`, `Sub_Total`, `Discount_Amount`, `Grand_Total`, `Advanced_Amount`, `Due_Amount`, `created_at`, `updated_at`) VALUES
(1, '200.00 Rs', '24.00 Rs', '176.00 Rs', '824.00 Rs', '0', '2020-08-19 11:43:29', '2020-08-19 11:43:29'),
(2, '200.00 Rs', '18.00 Rs', '182.00 Rs', '818.00 Rs', '0', '2020-08-22 04:01:18', '2020-08-22 04:01:18'),
(3, '200.00 Rs', '2.00 Rs', '198.00 Rs', '802.00 Rs', '0', '2020-08-22 04:04:28', '2020-08-22 04:04:28'),
(4, '200.00 Rs', '2.00 Rs', '198.00 Rs', '802.00 Rs', '0', '2020-08-22 04:05:26', '2020-08-22 04:05:26'),
(5, '20000.00 Rs', '1000.00 Rs', '19000.00 Rs', '0', '18000.00 Rs', '2020-08-23 15:13:36', '2020-08-23 15:13:36'),
(6, '15000.00 Rs', '150.00 Rs', '14850.00 Rs', '0', '13850.00 Rs', '2020-08-24 15:35:03', '2020-08-24 15:35:03'),
(7, '15000.00 Rs', '1800.00 Rs', '13200.00 Rs', '0', '12200.00 Rs', '2020-08-24 16:39:06', '2020-08-24 16:39:06'),
(8, '10000.00 Rs', '1000.00 Rs', '9000.00 Rs', '0', '8000.00 Rs', '2020-08-25 11:57:23', '2020-08-25 11:57:23'),
(9, NULL, NULL, NULL, NULL, NULL, '2020-08-25 11:59:11', '2020-08-25 11:59:11'),
(10, '15000.00 Rs', '1500.00 Rs', '13500.00 Rs', '0', '12500.00 Rs', '2020-08-25 12:00:11', '2020-08-25 12:00:11'),
(11, NULL, NULL, NULL, NULL, NULL, '2020-08-25 12:01:40', '2020-08-25 12:01:40'),
(12, '1.00 Rs', '9.00 Rs', '-8.00 Rs', '1008.00 Rs', '0', '2020-08-25 12:05:33', '2020-08-25 12:05:33'),
(13, '15000.00 Rs', '15000.00 Rs', '0.00 Rs', '1000.00 Rs', '0', '2020-08-26 12:31:23', '2020-08-26 12:31:23'),
(14, '15000.00 Rs', '1500.00 Rs', '13500.00 Rs', '0', '12500.00 Rs', '2020-08-26 12:32:29', '2020-08-26 12:32:29'),
(15, '15000.00 Rs', '0.00 Rs', '15000.00 Rs', '0', '14000.00 Rs', '2020-08-26 12:37:55', '2020-08-26 12:37:55'),
(16, NULL, NULL, NULL, NULL, NULL, '2020-08-26 12:40:01', '2020-08-26 12:40:01'),
(17, '2.00 Rs', '0.2.00 Rs', '1.00 Rs', '999.00 Rs', '0', '2020-08-26 12:40:38', '2020-08-26 12:40:38'),
(18, '15000.00 Rs', '1500.00 Rs', '13500.00 Rs', '0', '12500.00 Rs', '2020-08-26 12:44:40', '2020-08-26 12:44:40'),
(19, '15000.00 Rs', '1500.00 Rs', '13500.00 Rs', '0', '12500.00 Rs', '2020-08-26 12:46:06', '2020-08-26 12:46:06'),
(20, NULL, NULL, NULL, NULL, NULL, '2020-08-26 12:48:04', '2020-08-26 12:48:04'),
(21, '15000.00 Rs', '1500.00 Rs', '13500.00 Rs', '0', '12500.00 Rs', '2020-08-26 12:49:55', '2020-08-26 12:49:55'),
(22, NULL, NULL, NULL, NULL, NULL, '2020-08-26 12:50:37', '2020-08-26 12:50:37'),
(23, '10000.00 Rs', '200.00 Rs', '9800.00 Rs', '0', '8800.00 Rs', '2020-08-26 12:56:15', '2020-08-26 12:56:15'),
(24, '10000.00 Rs', '1000.00 Rs', '9000.00 Rs', '0', '8000.00 Rs', '2020-08-26 13:34:59', '2020-08-26 13:34:59'),
(25, '15000.00 Rs', '1500.00 Rs', '13500.00 Rs', '0', '12500.00 Rs', '2020-08-29 11:58:29', '2020-08-29 11:58:29'),
(26, '40000.00 Rs', '0.00 Rs', '40000.00 Rs', '0', '0.00 Rs', '2020-08-29 12:04:49', '2020-08-29 12:04:49'),
(27, '25000.00 Rs', '950.00 Rs', '24050.00 Rs', '0', '23050.00 Rs', '2020-09-02 16:17:01', '2020-09-02 16:17:01'),
(28, '25000.00 Rs', '400.00 Rs', '24600.00 Rs', '0', '23600.00 Rs', '2020-09-02 16:19:32', '2020-09-02 16:19:32'),
(29, '25000.00 Rs', '400.00 Rs', '24600.00 Rs', '0', '8900.00 Rs', '2020-09-02 16:22:44', '2020-09-02 16:22:44'),
(30, '40000.00 Rs', '400.00 Rs', '39600.00 Rs', '0', '38600.00 Rs', '2020-09-02 16:26:22', '2020-09-02 16:26:22'),
(31, '10000.00 Rs', '100.00 Rs', '9900.00 Rs', '0', '8900.00 Rs', '2020-09-03 12:15:15', '2020-09-03 12:15:15'),
(32, '15000.00 Rs', '150.00 Rs', '14850.00 Rs', '25150.00 Rs', '0', '2020-09-05 12:40:52', '2020-09-05 12:40:52'),
(33, '15000.00 Rs', '150.00 Rs', '14850.00 Rs', '0', '13850.00 Rs', '2020-09-05 12:44:44', '2020-09-05 12:44:44'),
(34, '10000.00 Rs', '100.00 Rs', '9900.00 Rs', '0', '8900.00 Rs', '2020-09-05 12:49:56', '2020-09-05 12:49:56'),
(35, '15000.00 Rs', '150.00 Rs', '14850.00 Rs', '0', '13850.00 Rs', '2020-09-05 13:50:08', '2020-09-05 13:50:08'),
(36, '15000.00 Rs', '150.00 Rs', '14850.00 Rs', '0', '13850.00 Rs', '2020-09-05 13:59:36', '2020-09-05 13:59:36'),
(37, '15000.00 Rs', '1500.00 Rs', '13500.00 Rs', '26500.00 Rs', '0', '2020-09-05 14:16:29', '2020-09-05 14:16:29'),
(38, '10000.00 Rs', '1000.00 Rs', '9000.00 Rs', '0', '13850.00 Rs', '2020-09-05 15:00:50', '2020-09-05 15:00:50'),
(39, '15000.00 Rs', '15000.00 Rs', '0.00 Rs', '1000.00 Rs', '0', '2020-09-05 15:07:30', '2020-09-05 15:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `visit4s`
--

CREATE TABLE `visit4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pat_id` bigint(20) UNSIGNED NOT NULL,
  `Rson` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Doct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit4s`
--

INSERT INTO `visit4s` (`id`, `pat_id`, `Rson`, `Ref`, `Doct`, `Date`, `user`, `Note`, `created_at`, `updated_at`) VALUES
(13, 3, 'check Up', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '36500.00 Rs', '2020-09-07 13:34:08', '2020-09-07 13:34:08'),
(14, 1, 'operation', 'MubasharFaiz', 'Tayyab', '08/03/2020', 'mubasharfaiz220@gmail.com', '8800.00 Rs', '2020-09-07 15:25:22', '2020-09-07 15:25:22'),
(15, 1, 'sergery', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '8800.00 Rs', '2020-09-07 15:28:12', '2020-09-07 15:28:12'),
(16, 1, 'Heart Sergery', 'Tayyab', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '13200.00 Rs', '2020-09-12 15:18:41', '2020-09-12 15:18:41'),
(17, 3, 'sergery', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '13200.00 Rs', '2020-09-12 15:20:41', '2020-09-12 15:20:41'),
(18, 1, 'Heart Sergery', 'MubasharFaiz', 'Tayyab', '08/03/2020', 'mubasharfaiz220@gmail.com', '9800.00 Rs', '2020-09-12 15:28:13', '2020-09-12 15:28:13'),
(19, 3, 'check Up', 'Tayyab', 'Tayyab', '08/03/2020', 'mubasharfaiz220@gmail.com', '13200.00 Rs', '2020-09-12 15:50:36', '2020-09-12 15:50:36'),
(20, 1, 'Heart Sergery', 'MubasharFaiz', 'Tayyab', '08/03/2020', 'mubasharfaiz220@gmail.com', '13200.00 Rs', '2020-09-12 16:21:13', '2020-09-12 16:21:13'),
(21, 3, 'sergery', 'MubasharFaiz', 'MubasharFaiz', '08/24/2020', 'mubasharfaiz220@gmail.com', '14700.00 Rs', '2020-09-12 16:22:06', '2020-09-12 16:22:06'),
(22, 1, 'City Scane', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '13200.00 Rs', '2020-09-13 10:48:02', '2020-09-13 10:48:02'),
(23, 1, 'sergery', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', NULL, '6800.00 Rs', '2020-09-13 10:56:30', '2020-09-13 10:56:30'),
(24, 1, 'City Scane', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '88.00 Rs', '2020-09-13 11:01:15', '2020-09-13 11:01:15'),
(25, 1, 'City Scane', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '13200.00 Rs', '2020-09-13 11:08:14', '2020-09-13 11:08:14'),
(26, 3, 'check Up', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '88.00 Rs', '2020-09-13 11:13:38', '2020-09-13 11:13:38'),
(27, 1, 'X ray', 'MubasharFaiz', 'Tayyab', '08/03/2020', 'mubasharfaiz220@gmail.com', '9120.00 Rs', '2020-09-13 11:18:56', '2020-09-13 11:18:56'),
(28, 1, 'sergery', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '10780.00 Rs', '2020-09-14 15:52:42', '2020-09-14 15:52:42'),
(29, 1, 'operation', 'MubasharFaiz', 'MubasharFaiz', '08/03/2020', 'mubasharfaiz220@gmail.com', '12600.00 Rs', '2020-09-14 15:54:34', '2020-09-14 15:54:34'),
(30, 4, 'sergery', 'David', 'MubasharFaiz', '09/16/2020', 'anees@gmail.com', '12320.00 Rs', '2020-09-15 14:57:43', '2020-09-15 14:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `visit5s`
--

CREATE TABLE `visit5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit4_id` bigint(20) UNSIGNED NOT NULL,
  `Prod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Stock` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sub` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dcount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit5s`
--

INSERT INTO `visit5s` (`id`, `visit4_id`, `Prod`, `Stock`, `unit`, `cost`, `Sub`, `Dcount`, `total`, `created_at`, `updated_at`) VALUES
(9, 13, '15000', NULL, '1', '15000', '15000', '1800', '13200', NULL, NULL),
(10, 13, '10000', NULL, '1', '10000', '10000', '200', '9800', NULL, NULL),
(11, 13, '15000', NULL, '1', '15000', '15000', '1500', '13500', NULL, NULL),
(12, 14, '10000', NULL, '1', '10000', '10000', '1200', '8800', NULL, NULL),
(13, 15, '10000', NULL, '1', '10000', '10000', '1200', '8800', NULL, NULL),
(14, 16, '15000', NULL, '1', '15000', '15000', '1800', '13200', NULL, NULL),
(15, 17, '15000', NULL, '1', '15000', '15000', '1800', '13200', NULL, NULL),
(16, 18, '10000', NULL, '1', '10000', '10000', '200', '9800', NULL, NULL),
(17, 19, '15000', NULL, '1', '15000', '15000', '1800', '13200', NULL, NULL),
(18, 20, '15000', NULL, '1', '15000', '15000', '1800', '13200', NULL, NULL),
(19, 21, '15000', NULL, '1', '15000', '15000', '300', '14700', NULL, NULL),
(20, 25, 'MRI', NULL, '1', '15000', '15000', '1800', '13200', NULL, NULL),
(21, 26, NULL, 'Injuction', '1', '100', '100', '12', '88', NULL, NULL),
(22, 27, NULL, 'mask', '1', '20', '20', '0', '20', NULL, NULL),
(23, 27, 'x-ray', NULL, '1', '10000', '10000', '1000', '9000', NULL, NULL),
(24, 27, NULL, 'Injuction', '1', '100', '100', '0', '100', NULL, NULL),
(25, 28, 'MRI', NULL, '1', '14000', '14000', '3220', '10780', NULL, NULL),
(26, 29, 'MRI', NULL, '1', '14000', '14000', '1400', '12600', NULL, NULL),
(27, 30, 'MRI', NULL, '1', '14000', '14000', '1680', '12320', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BMI` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Temperature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RR` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pulse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` (`id`, `Weight`, `Height`, `BMI`, `Temperature`, `BP`, `RR`, `Pulse`, `created_at`, `updated_at`) VALUES
(1, '70', '70', '188', '32', '102', '12', '102', '2020-09-14 15:12:51', '2020-09-14 15:12:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attaches`
--
ALTER TABLE `attaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachments_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `dashes`
--
ALTER TABLE `dashes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dashes_email_unique` (`email`);

--
-- Indexes for table `departs`
--
ALTER TABLE `departs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docstatuses`
--
ALTER TABLE `docstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docts`
--
ALTER TABLE `docts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `docts_email_unique` (`email`);

--
-- Indexes for table `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freqs`
--
ALTER TABLE `freqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `imagings`
--
ALTER TABLE `imagings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagings_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `instructs`
--
ALTER TABLE `instructs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_pur_id_foreign` (`pur_id`);

--
-- Indexes for table `item_types`
--
ALTER TABLE `item_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_reports`
--
ALTER TABLE `lab_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_reports_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `past_medics`
--
ALTER TABLE `past_medics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `past_medics_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `patient2s`
--
ALTER TABLE `patient2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient2s_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proceds`
--
ALTER TABLE `proceds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_and_sers`
--
ALTER TABLE `pro_and_sers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_and_sers_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referes`
--
ALTER TABLE `referes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `referes_email_unique` (`email`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi6s`
--
ALTER TABLE `visi6s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visi6s_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `visit1s`
--
ALTER TABLE `visit1s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visit1s_visit3_id_foreign` (`visit3_id`);

--
-- Indexes for table `visit2s`
--
ALTER TABLE `visit2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visit2s_visit3_id_foreign` (`visit3_id`);

--
-- Indexes for table `visit3s`
--
ALTER TABLE `visit3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit4s`
--
ALTER TABLE `visit4s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visit4s_pat_id_foreign` (`pat_id`);

--
-- Indexes for table `visit5s`
--
ALTER TABLE `visit5s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visit5s_visit4_id_foreign` (`visit4_id`);

--
-- Indexes for table `vitals`
--
ALTER TABLE `vitals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attaches`
--
ALTER TABLE `attaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dashes`
--
ALTER TABLE `dashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departs`
--
ALTER TABLE `departs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `docstatuses`
--
ALTER TABLE `docstatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `docts`
--
ALTER TABLE `docts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equips`
--
ALTER TABLE `equips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freqs`
--
ALTER TABLE `freqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imagings`
--
ALTER TABLE `imagings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instructs`
--
ALTER TABLE `instructs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item_types`
--
ALTER TABLE `item_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lab_reports`
--
ALTER TABLE `lab_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `past_medics`
--
ALTER TABLE `past_medics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient2s`
--
ALTER TABLE `patient2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `proceds`
--
ALTER TABLE `proceds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pro_and_sers`
--
ALTER TABLE `pro_and_sers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `referes`
--
ALTER TABLE `referes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visi6s`
--
ALTER TABLE `visi6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `visit1s`
--
ALTER TABLE `visit1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `visit2s`
--
ALTER TABLE `visit2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `visit3s`
--
ALTER TABLE `visit3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `visit4s`
--
ALTER TABLE `visit4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `visit5s`
--
ALTER TABLE `visit5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vitals`
--
ALTER TABLE `vitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachments_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imagings`
--
ALTER TABLE `imagings`
  ADD CONSTRAINT `imagings_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_pur_id_foreign` FOREIGN KEY (`pur_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lab_reports`
--
ALTER TABLE `lab_reports`
  ADD CONSTRAINT `lab_reports_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `past_medics`
--
ALTER TABLE `past_medics`
  ADD CONSTRAINT `past_medics_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient2s`
--
ALTER TABLE `patient2s`
  ADD CONSTRAINT `patient2s_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pro_and_sers`
--
ALTER TABLE `pro_and_sers`
  ADD CONSTRAINT `pro_and_sers_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visi6s`
--
ALTER TABLE `visi6s`
  ADD CONSTRAINT `visi6s_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visit1s`
--
ALTER TABLE `visit1s`
  ADD CONSTRAINT `visit1s_visit3_id_foreign` FOREIGN KEY (`visit3_id`) REFERENCES `visit3s` (`id`);

--
-- Constraints for table `visit2s`
--
ALTER TABLE `visit2s`
  ADD CONSTRAINT `visit2s_visit3_id_foreign` FOREIGN KEY (`visit3_id`) REFERENCES `visit3s` (`id`);

--
-- Constraints for table `visit4s`
--
ALTER TABLE `visit4s`
  ADD CONSTRAINT `visit4s_pat_id_foreign` FOREIGN KEY (`pat_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visit5s`
--
ALTER TABLE `visit5s`
  ADD CONSTRAINT `visit5s_visit4_id_foreign` FOREIGN KEY (`visit4_id`) REFERENCES `visit4s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
