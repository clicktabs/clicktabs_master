-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2023 at 08:08 PM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visamoho_nana`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `name`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Document Name', 1, '3', '2023-04-30 02:41:52', '2023-04-30 02:41:52'),
(2, 'Compatibility  Code', 1, '3', '2023-04-30 02:42:44', '2023-04-30 02:42:44'),
(3, 'Matching Code', 1, '3', '2023-04-30 02:43:26', '2023-04-30 02:43:26'),
(4, 'Document Type', 1, '3', '2023-04-30 02:43:55', '2023-04-30 02:43:55'),
(5, 'Billing Code', 1, '3', '2023-04-30 02:44:21', '2023-04-30 02:44:21'),
(6, 'Service Code', 1, '3', '2023-04-30 02:44:47', '2023-04-30 02:44:47'),
(7, 'Employment Type', 1, '3', '2023-04-30 02:45:14', '2023-04-30 02:45:14'),
(8, 'Agency Branch', 1, '3', '2023-04-30 02:45:45', '2023-04-30 02:45:45'),
(9, 'Credentials', 1, '3', '2023-04-30 02:46:08', '2023-04-30 02:46:08'),
(10, 'Job Title', 1, '3', '2023-04-30 02:46:35', '2023-04-30 02:46:35'),
(12, 'Insurance Type', 1, '3', '2023-05-01 15:33:16', '2023-05-01 15:33:16'),
(13, 'Pay Type', 1, '3', '2023-05-03 23:28:15', '2023-05-03 23:28:15'),
(16, 'Payor', 1, '3', '2023-05-06 05:44:43', '2023-05-06 05:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `addon_sub_categories`
--

CREATE TABLE `addon_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addon_sub_categories`
--

INSERT INTO `addon_sub_categories` (`id`, `code`, `name`, `user_id`, `status`, `description`, `addon_id`, `created_at`, `updated_at`) VALUES
(1, '0001', 'OIG', '3', 1, 'OIG', 1, '2023-04-30 02:47:32', '2023-04-30 02:47:32'),
(2, '0002', 'Aide Registry', '3', 1, 'Registry', 1, '2023-04-30 02:49:11', '2023-04-30 02:49:11'),
(3, '0003', 'Medicaid Exclusion List', '3', 1, 'Exclusion list', 1, '2023-04-30 02:51:02', '2023-04-30 02:51:02'),
(4, '0004', 'TB Test', '3', 1, 'TB', 1, '2023-04-30 02:51:43', '2023-04-30 02:51:43'),
(5, '0005', 'CPR', '3', 1, 'CPR', 1, '2023-04-30 02:52:54', '2023-04-30 02:52:54'),
(6, '0006', 'First Aide', '3', 1, 'First Aid', 1, '2023-04-30 02:54:12', '2023-04-30 02:54:12'),
(7, '0007', 'BCI/FBI', '3', 1, 'BCI/FBI', 1, '2023-04-30 02:54:54', '2023-04-30 02:54:54'),
(8, '0008', 'Nursing License', '3', 1, 'Nursing License', 1, '2023-04-30 02:55:47', '2023-04-30 02:55:47'),
(9, '0001', 'DON', '3', 1, 'DON', 10, '2023-04-30 02:57:47', '2023-04-30 02:57:47'),
(10, '0002', 'RN', '3', 1, 'RN', 10, '2023-04-30 02:58:19', '2023-04-30 02:58:19'),
(11, '0003', 'LPN', '3', 1, 'LPN', 10, '2023-04-30 02:58:58', '2023-04-30 02:58:58'),
(12, '0004', 'HHA', '3', 1, 'HHA', 10, '2023-04-30 02:59:40', '2023-04-30 02:59:40'),
(13, '0001', 'RN', '3', 1, 'RN', 9, '2023-04-30 03:00:18', '2023-04-30 03:00:18'),
(14, '0002', 'LPN', '3', 1, 'LPN', 9, '2023-04-30 03:00:53', '2023-04-30 03:00:53'),
(15, '0003', 'HHA', '3', 1, 'HHA', 9, '2023-04-30 03:01:19', '2023-04-30 03:01:19'),
(16, '0004', 'DON/RN', '3', 1, 'DON/RN', 9, '2023-04-30 03:02:01', '2023-04-30 03:02:01'),
(17, '0005', 'DON/RN/BSN', '3', 1, 'DON/RN/BSN', 9, '2023-04-30 03:02:49', '2023-04-30 03:02:49'),
(18, '0001', 'Columbus, Ohio', '3', 1, 'Columbus, Ohio', 8, '2023-04-30 03:03:33', '2023-04-30 03:03:33'),
(19, '0001', 'T1019', '3', 1, 'HHA', 6, '2023-04-30 03:04:31', '2023-04-30 03:04:31'),
(20, '0001', 'T1019', '3', 1, 'HHA', 5, '2023-04-30 03:05:08', '2023-04-30 03:05:08'),
(21, '0001', 'OIG', '3', 1, 'OIG', 4, '2023-04-30 03:05:49', '2023-04-30 03:05:49'),
(22, '0002', 'Aide Registry', '3', 1, 'Registry', 4, '2023-04-30 03:06:21', '2023-04-30 03:06:21'),
(23, '0003', 'Medicaid Exclusion List', '3', 1, 'Exclusion', 4, '2023-04-30 03:06:49', '2023-04-30 03:06:49'),
(24, '0004', 'TB Test', '3', 1, 'TB', 4, '2023-04-30 03:07:38', '2023-04-30 03:07:38'),
(25, '0005', 'Nurse License', '3', 1, 'license', 4, '2023-04-30 03:08:35', '2023-04-30 03:08:35'),
(27, '0001', 'Molina', '3', 1, 'Molina', 12, '2023-05-01 15:33:56', '2023-05-01 15:33:56'),
(30, '0001', 'Molina', '3', 1, 'Molina', 16, '2023-05-06 05:45:06', '2023-05-06 05:45:06'),
(31, '0002', 'Aetna', '3', 1, 'Aetna', 16, '2023-05-06 05:45:23', '2023-05-06 05:45:23'),
(32, '0001', 'Unit', '3', 1, 'Unit', 13, '2023-05-06 06:20:34', '2023-05-06 06:20:34'),
(33, '0002', 'Hourly', '3', 1, 'Hourly', 13, '2023-05-06 06:20:54', '2023-05-06 06:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `admission_sources`
--

CREATE TABLE `admission_sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agency_branches`
--

CREATE TABLE `agency_branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE `allergies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `allergy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `severity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`id`, `patient_id`, `allergy`, `type`, `severity`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 12, 'Reprehenderit doloru', 'Deleniti a ullam ill', 'Atque blanditiis ven', '1994-03-10', '2021-07-28', '2023-05-23 20:17:38', '2023-05-23 20:17:38'),
(2, 12, 'vdf', 'dfsdf', 'fsd', '2023-05-23', '2023-05-27', '2023-05-24 00:40:17', '2023-05-24 00:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `employee_id`, `category`, `attribute`, `score`, `modified_by`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Vehicle Type', 'dummy attribute', '20', NULL, 3, '2023-05-23 20:14:41', '2023-05-23 20:14:41'),
(2, 1, 'Transportation', 'sdeoo', '452', NULL, 3, '2023-05-24 00:47:33', '2023-05-24 00:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `authorizations`
--

CREATE TABLE `authorizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `authorization_number` int(11) NOT NULL,
  `payer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `severity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eoc_date` date NOT NULL,
  `service_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorized_units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unused` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authorizations`
--

INSERT INTO `authorizations` (`id`, `patient_id`, `authorization_number`, `payer`, `severity`, `eoc_date`, `service_code`, `authorized_units`, `used`, `unused`, `created_at`, `updated_at`) VALUES
(3, 12, 5, 'hjkk', 'kj', '2023-05-24', '89', 'jjjk', 'yes', 'no', '2023-05-23 22:47:15', '2023-05-23 22:47:15'),
(4, 12, 45, 'sdff', 'fdf', '2023-05-23', '45', 'sdfsdf', 'Yes', 'No', '2023-05-24 00:41:51', '2023-05-24 00:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `caregivers`
--

CREATE TABLE `caregivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `caregiver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matching_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compatibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_date` date NOT NULL,
  `hours_together` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caregivers`
--

INSERT INTO `caregivers` (`id`, `employee_id`, `caregiver`, `matching_code`, `compatibility`, `visit_date`, `hours_together`, `note`, `modified_by`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'jnh', '46', 'jkk', '2023-05-25', 4, 'jlkl', NULL, 3, '2023-05-24 05:47:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE `communications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communications`
--

INSERT INTO `communications` (`id`, `patient_id`, `employee_id`, `subject`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 3, 'demo', '2023-05-23', 1, '2023-05-23 23:53:26', '2023-05-23 23:53:26'),
(2, 12, 3, 'Deseasease', '2023-05-23', 1, '2023-05-24 00:42:41', '2023-05-24 00:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doh` date DEFAULT NULL,
  `dot` date DEFAULT NULL,
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credentials` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefered_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `mi`, `dob`, `doh`, `dot`, `ssn`, `photo`, `gender`, `employee_id`, `status`, `type`, `job_title`, `credentials`, `agency_branch`, `address_line_1`, `address_line_2`, `lat`, `lon`, `mobile_phone`, `home_phone`, `city`, `county`, `fax`, `email`, `state`, `zip`, `prefered_contact`, `organization_id`, `created_at`, `updated_at`) VALUES
(1, 'Nana Kwesi', 'Baisel', 'B', '2023-05-04', '2023-05-05', '2023-05-06', '56498745', '1683310193-645546712224b-photo.jpg', 'male', 1, '1', 'full_time', '0001', '16', '18', '4633 Executive Drive', 'Columbus, OH 43220, United States of America', '40.05217014285714', '-83.0598166122449', '016148057633', '016148057633', 'Columbus', 'Franklin County', '01614-920-0287', 'nana@example.com', 'Ohio', '43220', 'home', 1, '2023-05-05 22:09:53', '2023-05-05 22:09:53'),
(2, 'Isaac', 'Biney', 'k', '1976-07-17', '2023-05-10', '2023-05-10', '56498745', '1683768710-645c45867366c-photo.jpg', 'male', 2, '1', 'full_time', '0004', '15', '18', '9172 Stonemoor Place', 'Columbus, OH 43035, United States of America', '40.15437', '-82.992538', '016148057633', '016148057633', 'Columbus', 'Franklin County', '614-457-0269', 'nana@gmail.com', 'Ohio', '43035', 'mobile', 1, '2023-05-11 05:31:50', '2023-05-11 05:31:50'),
(3, 'Joshua', 'Mcclure', 'Tempora proident pe', '1995-08-23', '2009-06-26', '1990-01-20', 'Eum et voluptate ull', '1683768773-645c45c5704aa-photo.jpg', 'female', 3, '1', 'full_time', '0004', '15', '18', '704 East White Cowley Extension', 'Vel assumenda evenie', NULL, NULL, '+1 (799) 726-3267', '+1 (223) 382-5439', 'Cillum officia dolor', 'Dignissimos mollit d', '+1 (897) 575-8357', 'xuxot@mailinator.com', 'Sed aliquam dolor od', '36737', 'home', 1, '2023-05-11 05:32:53', '2023-05-11 05:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `employee_activities`
--

CREATE TABLE `employee_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `activity_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_share_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_attachments`
--

CREATE TABLE `employee_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_bills`
--

CREATE TABLE `employee_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `billing_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_bills`
--

INSERT INTO `employee_bills` (`id`, `billing_code`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, '0001', 1, '2023-05-08 10:08:59', '2023-05-08 10:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `employee_expirations`
--

CREATE TABLE `employee_expirations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expirations_doc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expirations_date` date DEFAULT NULL,
  `expiration_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_expirations`
--

INSERT INTO `employee_expirations` (`id`, `expirations_doc_type`, `expirations_date`, `expiration_notes`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 'OIG', '2024-05-08', NULL, 1, '2023-05-08 10:10:05', '2023-05-08 10:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `employee_pays`
--

CREATE TABLE `employee_pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pay_rate_service_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_rate_start_date` date NOT NULL,
  `pay_rate_end_date` date NOT NULL,
  `pay_rate_pay_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_rate_amount` decimal(10,2) NOT NULL,
  `pay_rate_billing_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_pays`
--

INSERT INTO `employee_pays` (`id`, `pay_rate_service_code`, `pay_rate_start_date`, `pay_rate_end_date`, `pay_rate_pay_type`, `pay_rate_amount`, `pay_rate_billing_code`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, '0001', '2023-05-05', '0001-01-01', '0001', 10.50, '0001', 1, '2023-05-06 06:21:59', '2023-05-06 06:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `employee_schedules`
--

CREATE TABLE `employee_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `mr_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `primary_payer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_types`
--

CREATE TABLE `employee_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facility_referral_sources`
--

CREATE TABLE `facility_referral_sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `immunizations`
--

CREATE TABLE `immunizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `immunization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administered_on` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administered_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `immunizations`
--

INSERT INTO `immunizations` (`id`, `patient_id`, `immunization`, `administered`, `administered_on`, `administered_by`, `document`, `lot`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, '71', 'Aliquid eligendi mol', 'Consequat Atque nul', 'Quibusdam proident', '49', 'Deserunt ipsa quis', 'Voluptas qui et nihi', 0, '2023-05-24 00:21:10', '2023-05-24 00:21:10'),
(2, 12, '545', 'dfsdf', 'fsdf', 'fsdf', '454', '415', 'sdf', 1, '2023-05-24 00:41:11', '2023-05-24 00:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `internal_referral_sources`
--

CREATE TABLE `internal_referral_sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in_patient_admission_codes`
--

CREATE TABLE `in_patient_admission_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_titles`
--

CREATE TABLE `job_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title_short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_groups`
--

CREATE TABLE `leave_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_privileges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `medication_dosage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frequency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physician` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `patient_id`, `start_date`, `medication_dosage`, `frequency`, `route`, `classification`, `physician`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, '1999-10-06', 'In et amet cupidita', 'In sed et doloribus', 'Voluptatem voluptate', 'Ea qui numquam ut es', 'Deleniti dolorum des', 1, '2023-05-23 18:43:03', '2023-05-23 18:43:03'),
(2, 12, '1972-03-31', 'aaaaaaa', 'dddddd', 'eeeeeee', 'ggggggggggg', 'xxxxxxxxx', 0, '2023-05-23 19:26:48', '2023-05-23 19:26:48'),
(3, 12, '2023-05-26', 'vxfv', 'fsdf', 'fsd', 'fsd', 'fsdf', 1, '2023-05-24 00:39:17', '2023-05-24 00:39:17'),
(4, 12, '2023-05-26', 'df', 'fsd', 'fsdf', 'fd', 'sfd', 0, '2023-05-24 00:39:48', '2023-05-24 00:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_29_213051_create_physicians_table', 1),
(6, '2022_11_07_115055_create_permission_tables', 1),
(7, '2022_11_09_185730_create_addons_table', 1),
(8, '2022_11_09_212343_create_organizations_table', 1),
(9, '2022_11_09_224925_create_addon_sub_categories_table', 1),
(10, '2022_11_11_221719_create_employee_types_table', 1),
(11, '2022_11_11_234758_create_races_table', 1),
(12, '2022_11_11_234950_create_leave_groups_table', 1),
(13, '2022_11_11_235142_create_job_titles_table', 1),
(14, '2022_11_11_235541_create_tax_id_types_table', 1),
(15, '2022_11_16_163448_create_organization_infos_table', 1),
(16, '2022_11_16_170649_create_organization_contact_people_table', 1),
(17, '2022_11_16_171239_create_organization_addresses_table', 1),
(18, '2022_12_03_112118_create_user_infos_table', 1),
(19, '2022_12_03_112120_create_pharmacies_table', 1),
(20, '2022_12_10_223450_create_patients_table', 1),
(21, '2022_12_10_234309_create_patient_address_infos_table', 1),
(22, '2022_12_10_234441_create_patient_extra_infos_table', 1),
(23, '2022_12_17_153823_create_admission_sources_table', 1),
(24, '2022_12_28_193330_create_facility_referral_sources_table', 1),
(25, '2022_12_28_200702_create_in_patient_admission_codes_table', 1),
(26, '2022_12_28_220327_create_internal_referral_sources_table', 1),
(27, '2022_12_28_223612_create_genders_table', 1),
(28, '2022_12_29_001532_create_agency_branches_table', 1),
(29, '2022_12_29_004542_create_services_table', 1),
(30, '2022_12_29_174135_create_primary_insurances_table', 1),
(31, '2022_12_29_180648_create_secondary_insurances_table', 1),
(32, '2022_12_29_184635_create_tertiary_insurances_table', 1),
(33, '2022_12_29_194721_create_services_requireds_table', 1),
(34, '2022_12_29_211703_create_relationships_table', 1),
(35, '2023_02_10_161929_create_referrals_table', 1),
(36, '2023_02_10_161940_create_referral_insurances_table', 1),
(37, '2023_02_10_162009_create_referral_emergency_contacts_table', 1),
(38, '2023_02_10_162024_create_referral_sources_table', 1),
(39, '2023_02_10_162037_create_referral_diagnoses_table', 1),
(40, '2023_02_28_200641_create_referral_addresses_table', 1),
(41, '2023_03_07_103219_create_patient_service_addresses_table', 1),
(42, '2023_03_07_110801_create_patient_case_managers_table', 1),
(43, '2023_03_07_114336_create_patient_clinical_diagnoses_table', 1),
(44, '2023_03_07_115337_create_patient_emergency_contacts_table', 1),
(45, '2023_03_07_115648_create_patient_emergency_alternate_addresses_table', 1),
(46, '2023_03_07_120243_create_patient_insurances_table', 1),
(47, '2023_03_07_120732_create_patient_episode_timings_table', 1),
(48, '2023_04_01_024258_create_employees_table', 1),
(49, '2023_04_18_161007_create_employee_activities_table', 1),
(50, '2023_04_18_170143_create_employee_pays_table', 1),
(51, '2023_04_18_172636_create_employee_expirations_table', 1),
(52, '2023_04_18_174530_create_employee_attachments_table', 1),
(53, '2023_04_19_172949_create_categories_table', 1),
(54, '2023_04_19_174823_create_sub_categories_table', 1),
(55, '2023_04_24_022747_create_employees_bills_table', 1),
(56, '2023_04_24_144622_create_social_workers_table', 1),
(57, '2023_04_25_043011_create_employee_schedules_table', 1),
(58, '2023_04_26_172332_create_patient_admissions_table', 1),
(59, '2023_05_03_151901_create_patient_non_admit_reasons_table', 1),
(60, '2023_05_08_165130_create_patient_discharges_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `org_id`, `name`, `phone`, `email`, `user_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '9652654A', 'Precedence Home Healthcare', '016148057633', 'n.baisel@precedencehomehealthcare.com', 1, 1, NULL, '2023-05-05 22:06:27', '2023-05-05 22:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `organization_addresses`
--

CREATE TABLE `organization_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_box_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization_contact_people`
--

CREATE TABLE `organization_contact_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization_infos`
--

CREATE TABLE `organization_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_provider_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_id_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicare_provider_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicaid_provider_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicaid_provider_identifier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_agency_oasis_id_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dme_medicaid_provider_identifier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cahps_vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `patient_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `mi_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_security_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `p_h_lat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_h_lon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_s_lat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_s_lon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `organization_id`, `patient_code`, `first_name`, `middle_name`, `last_name`, `referral_date`, `gender`, `marital_status`, `date_of_birth`, `mi_no`, `social_security_no`, `insurance_type`, `status`, `active`, `created_at`, `updated_at`, `deleted_at`, `p_h_lat`, `p_h_lon`, `p_s_lat`, `p_s_lon`) VALUES
(1, 1, '3484B526', 'Isaac Kwame', 'Botchway', 'Baisel', '2023-05-04', 'male', 'married', '2023-05-04', '00001', '99898907', 'Molina', 'admit', NULL, '2023-05-05 22:22:10', '2023-05-23 09:30:17', '2023-05-23 09:30:17', '40.05238871428571', '-83.05980406122448', '40.05238871428571', '-83.05980406122448'),
(2, 1, '5EEB4971', 'Rose', 'M', 'Baraka', '2023-05-01', 'male', 'married', '2023-05-16', '00002', '99898907', 'Molina', 'admit', NULL, '2023-05-05 22:24:43', '2023-05-23 09:30:04', '2023-05-23 09:30:04', '40.05238871428571', '-83.05980406122448', '40.05238871428571', '-83.05980406122448'),
(3, 1, 'B3514954', 'Roth', 'Skyler Maddox', 'Baisel', '1973-01-29', 'female', 'married', '2009-02-24', '00003', '4663666', 'Molina', 'non-admit', NULL, '2023-05-05 22:29:45', '2023-05-06 06:13:48', NULL, '40.05238871428571', '-83.05980406122448', '40.05238871428571', '-83.05980406122448'),
(4, 1, 'CA6A4D56', 'Willow', 'Zachery Britt', 'Combs', '2018-05-19', 'male', 'single', '1990-08-28', '00004', '968', 'Molina', 'non-admit', NULL, '2023-05-06 05:01:18', '2023-05-06 06:12:33', NULL, '40.052934', '-83.059868', '40.052934', '-83.059868'),
(5, 1, '0F6B7559', 'Yasir', 'Hilel Mclaughlin', 'Hickman', '2015-03-07', 'male', 'married', '1999-06-28', '00005', '818', 'Molina', 'pending', NULL, '2023-05-06 05:04:31', '2023-05-06 05:04:31', NULL, '40.05238871428571', '-83.05980406122448', '40.05238871428571', '-83.05980406122448'),
(6, 1, '6BD5BCB5', 'Charity', 'Samson Ortiz', 'Holcomb', '1983-10-03', 'female', 'married', '1997-04-17', '00006', '367', 'Molina', 'admit', NULL, '2023-05-06 05:22:16', '2023-05-22 19:33:09', NULL, '40.05238871428571', '-83.05980406122448', '40.05238871428571', '-83.05980406122448'),
(7, 1, '8AF2A5C5', 'Cruz', 'Imogene Graves', 'Weiss', '1976-08-24', 'female', 'married', '1974-05-27', '00007', '436', 'Molina', 'admit', NULL, '2023-05-06 05:25:20', '2023-05-23 18:02:13', NULL, '40.05238871428571', '-83.05980406122448', '40.05238871428571', '-83.05980406122448'),
(8, 1, '20A44556', 'Dana', 'Kevyn Lowery', 'Hatfield', '1989-04-23', 'male', 'single', '2000-03-17', '00008', '173', 'Molina', 'admit', NULL, '2023-05-06 05:31:52', '2023-05-23 18:03:11', '2023-05-23 18:03:11', '40.052934', '-83.059868', '40.052934', '-83.059868'),
(9, 1, '70A0B55A', 'Jade', 'Paloma Leblanc', 'Hutchinson', '2016-02-23', 'male', 'married', '2010-10-20', '00009', '903', 'Molina', 'admit', NULL, '2023-05-06 05:42:54', '2023-05-23 18:03:03', '2023-05-23 18:03:03', '39.815949', '-82.816402', '39.815949', '-82.816402'),
(10, 1, '56EB754E', 'Sacha', 'Brent Morrow', 'Estes', '1992-05-23', 'female', 'single', '1974-11-15', '00010', '261', 'Molina', 'non-admit', NULL, '2023-05-06 05:45:53', '2023-05-22 19:43:37', NULL, '39.815949', '-82.816402', '39.815949', '-82.816402'),
(11, 1, '252C3653', 'Zorita', 'Gay Mason', 'Stein', '1995-12-27', 'female', 'married', '1998-01-07', '00011', '384', 'Molina', 'admit', NULL, '2023-05-06 05:49:31', '2023-05-22 20:05:39', '2023-05-22 20:05:39', '39.815949', '-82.816402', '39.815949', '-82.816402'),
(12, 1, '356A40BC', 'Dale', 'Herman Suarez', 'Summers', '1996-06-19', 'male', 'single', '2021-01-27', '00012', '307', 'Molina', 'admit', NULL, '2023-05-06 05:54:51', '2023-05-15 23:26:33', NULL, '40.05238871428571', '-83.05980406122448', '40.05238871428571', '-83.05980406122448'),
(13, 1, '3FE54FA8', 'Adelaide', 'M', 'White', '1932-10-06', 'female', 'single', '1932-10-06', '00013', '99898907', 'Molina', 'admit', NULL, '2023-05-06 16:38:22', '2023-05-15 23:26:17', NULL, '39.942421', '-82.905942', '39.942421', '-82.905942'),
(14, 1, '30D68596', 'RICHARD', NULL, 'SIMPSON', '2023-05-08', 'female', 'married', '1954-10-29', '00014', '234097645', 'Molina', 'dis-charged', NULL, '2023-05-08 23:29:20', '2023-05-15 23:25:26', NULL, '39.82835527159112', '-82.94870588304771', '39.8283', '-82.948075');

-- --------------------------------------------------------

--
-- Table structure for table `patient_address_infos`
--

CREATE TABLE `patient_address_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_language_spoken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_of_interpreter` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_address_infos`
--

INSERT INTO `patient_address_infos` (`id`, `patient_id`, `address_line_1`, `address_line_2`, `lat`, `lon`, `city`, `country`, `state`, `zip`, `county`, `phone`, `alternate_phone`, `patient_language_spoken`, `use_of_interpreter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '6148057633', '01614079554', 'english', 1, '2023-05-05 22:22:10', '2023-05-05 22:22:10', NULL),
(2, 2, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '016148057633', '01614079554', 'english', 0, '2023-05-05 22:24:43', '2023-05-05 22:24:43', NULL),
(3, 3, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (553) 669-8242', '+1 (549) 716-8093', 'russian', 1, '2023-05-05 22:29:45', '2023-05-05 22:29:45', NULL),
(4, 4, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (535) 511-7278', '+1 (318) 519-5461', 'spanish', 0, '2023-05-06 05:01:18', '2023-05-06 05:01:18', NULL),
(5, 5, '4663 Executive Drive', NULL, NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (523) 413-1942', '+1 (418) 642-7676', 'filipino', 1, '2023-05-06 05:04:31', '2023-05-06 05:04:31', NULL),
(6, 6, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (715) 416-6752', '+1 (701) 455-5815', 'german', 0, '2023-05-06 05:22:16', '2023-05-06 05:22:16', NULL),
(7, 7, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (582) 316-6784', '+1 (362) 582-7433', 'twi', 0, '2023-05-06 05:25:20', '2023-05-06 05:25:20', NULL),
(8, 8, '4663 Executive Drive', NULL, NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (436) 133-2233', '+1 (283) 251-8687', 'german', 0, '2023-05-06 05:31:52', '2023-05-06 05:31:52', NULL),
(9, 9, '114 Sandburg Drive', 'Lithopolis, OH 43136, United States of America', NULL, NULL, 'Lithopolis', 'United States', 'Ohio', '43136', NULL, '+1 (536) 882-8349', '+1 (567) 599-8587', 'filipino', 1, '2023-05-06 05:42:54', '2023-05-06 05:42:54', NULL),
(10, 10, '114 Sandburg Drive', 'Lithopolis, OH 43136, United States of America', NULL, NULL, 'Lithopolis', 'United States', 'Ohio', '43136', NULL, '+1 (917) 149-7418', '+1 (566) 903-8027', 'spanish', 0, '2023-05-06 05:45:53', '2023-05-06 05:45:53', NULL),
(11, 11, '114 Sandburg Drive', 'Lithopolis, OH 43136, United States of America', NULL, NULL, 'Lithopolis', 'United States', 'Ohio', '43136', NULL, '+1 (506) 421-4433', '+1 (777) 423-4351', 'english', 1, '2023-05-06 05:49:31', '2023-05-06 05:49:31', NULL),
(12, 12, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (447) 461-5664', '+1 (221) 439-4525', 'somali', 0, '2023-05-06 05:54:51', '2023-05-06 05:54:51', NULL),
(13, 13, '1400 Barnett Road', 'Columbus, OH 43227, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43227', NULL, '016148057633', '+1 (549) 716-8093', 'english', 0, '2023-05-06 16:38:22', '2023-05-06 16:38:22', NULL),
(14, 14, '1976 Spruce Drive', NULL, NULL, NULL, 'Columbus', 'United States', 'Ohio', '43217', NULL, '6142565817', '6142565817', 'english', 1, '2023-05-08 23:29:20', '2023-05-08 23:29:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_admissions`
--

CREATE TABLE `patient_admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `patient_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `mi_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_security_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_language_spoken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_of_interpreter` tinyint(1) NOT NULL,
  `race_ethnicity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`race_ethnicity`)),
  `source_of_admission` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`source_of_admission`)),
  `services_requested` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`services_requested`)),
  `primary_physician_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referring_physician_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `face_to_face_evaluation` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`face_to_face_evaluation`)),
  `pharmacy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `advance_directives` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`advance_directives`)),
  `emergency_preparedness` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`emergency_preparedness`)),
  `coordination_of_care` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`coordination_of_care`)),
  `physician_id` bigint(20) UNSIGNED NOT NULL,
  `refer_physician_id` bigint(20) UNSIGNED NOT NULL,
  `clinical_care_managers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_managers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oasis_assigned_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_assigned_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_assigned_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_assigned_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship_to_patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_payor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_payor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `private_pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicaid_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicare_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oasis_start_care` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`oasis_start_care`)),
  `schedule_therapy` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`schedule_therapy`)),
  `non_oasis_start_care` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`non_oasis_start_care`)),
  `initial_oasis_recert` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`initial_oasis_recert`)),
  `initial_non_oasis_recert` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`initial_non_oasis_recert`)),
  `start_care_date` date NOT NULL,
  `episode_start_date` date NOT NULL,
  `health_payment_episode` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`health_payment_episode`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_case_managers`
--

CREATE TABLE `patient_case_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clinical_care_managers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_managers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oasis_assigned_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ot_approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_approved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_case_managers`
--

INSERT INTO `patient_case_managers` (`id`, `clinical_care_managers`, `case_managers`, `oasis_assigned_to`, `patient_id`, `created_at`, `updated_at`, `deleted_at`, `ot_approved`, `pt_approved`, `st_approved`) VALUES
(1, '1', '1', '1', 7, '2023-05-06 05:25:20', '2023-05-06 05:25:20', NULL, '', '', ''),
(2, '1', '1', '1', 8, '2023-05-06 05:31:52', '2023-05-06 05:31:52', NULL, '', '', ''),
(3, '1', '1', '1', 9, '2023-05-06 05:42:54', '2023-05-06 05:42:54', NULL, '', '', ''),
(4, '1', '1', '1', 10, '2023-05-06 05:45:54', '2023-05-06 05:45:54', NULL, '', '', ''),
(5, '1', '1', '1', 11, '2023-05-06 05:49:31', '2023-05-06 05:49:31', NULL, '', '', ''),
(6, '1', '1', '1', 12, '2023-05-06 05:54:51', '2023-05-06 05:54:51', NULL, '', '', ''),
(7, '1', '1', '1', 13, '2023-05-06 16:38:22', '2023-05-06 16:38:22', NULL, '', '', ''),
(8, '1', '1', '1', 14, '2023-05-08 23:29:20', '2023-05-08 23:29:20', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_clinical_diagnoses`
--

CREATE TABLE `patient_clinical_diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `primary_diagnosis_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_diagnosis_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_diagnosis_code` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`other_diagnosis_code`)),
  `other_diagnosis_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`other_diagnosis_name`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_clinical_diagnoses`
--

INSERT INTO `patient_clinical_diagnoses` (`id`, `patient_id`, `primary_diagnosis_code`, `primary_diagnosis_name`, `other_diagnosis_code`, `other_diagnosis_name`, `created_at`, `updated_at`) VALUES
(1, 7, 'r68.89', 'R68.89', '[\"r10\"]', '[\"R10.0\"]', '2023-05-06 05:26:21', '2023-05-06 05:26:21'),
(2, 8, 'r68.89', 'R68.89', '[\"r10\"]', '[\"R10.0\"]', '2023-05-06 05:32:14', '2023-05-06 05:32:14'),
(3, 9, 'r68.89', 'R68.89', '[\"r10\"]', '[\"R10.0\"]', '2023-05-06 05:43:16', '2023-05-06 05:43:16'),
(4, 10, 'r68.89', 'R68.89', '[\"r10\"]', '[\"R10.0\"]', '2023-05-06 05:46:14', '2023-05-06 05:46:14'),
(5, 11, 'r68.89', 'R68.89', '[\"r10\"]', '[\"R10.0\"]', '2023-05-06 05:50:03', '2023-05-06 05:50:03'),
(6, 12, 'r68.89', 'R68.89', '[\"r10\"]', '[\"R10.0\"]', '2023-05-06 05:55:17', '2023-05-06 05:55:17'),
(7, 13, 'r68.89', 'R68.89', '[null]', '[null]', '2023-05-06 16:40:11', '2023-05-06 16:40:11'),
(8, 14, 'i10', 'I10', '[\"e11\"]', '[\"E11.00\"]', '2023-05-08 23:35:32', '2023-05-08 23:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `patient_discharges`
--

CREATE TABLE `patient_discharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `discharge_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discharge_reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discharge_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_discharges`
--

INSERT INTO `patient_discharges` (`id`, `status`, `patient_id`, `discharge_date`, `discharge_reason`, `discharge_comment`, `created_at`, `updated_at`) VALUES
(4, 'discharge', 14, '2023-05-15', 'discharge_reason_1', NULL, '2023-05-15 23:25:26', '2023-05-15 23:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `patient_emergency_alternate_addresses`
--

CREATE TABLE `patient_emergency_alternate_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship_to_patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_emergency_alternate_addresses`
--

INSERT INTO `patient_emergency_alternate_addresses` (`id`, `patient_id`, `name`, `relationship_to_patient`, `address`, `city`, `state`, `zip`, `phone`, `alternate_phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'Yeo', 'Ut delectus qui asp', 'Aperiam vel dolore o', 'Molestiae adipisicin', 'Consectetur volupta', '51264', '+1 (221) 724-6626', '+1 (727) 986-1369', '2023-05-06 05:26:58', '2023-05-06 05:26:58', NULL),
(2, 8, 'Tyrone', 'Est ut corrupti mol', 'Eveniet voluptate q', 'Voluptatem doloribus', 'Corrupti aliquam el', '24393', '+1 (402) 656-6696', '+1 (289) 333-1907', '2023-05-06 05:32:33', '2023-05-06 05:32:33', NULL),
(3, 9, 'Benjamin', 'Debitis odit fugit', 'Iusto fuga Vitae re', 'Consectetur et in pe', 'Qui nesciunt non eo', '97825', '+1 (991) 548-9315', '+1 (105) 934-5331', '2023-05-06 05:43:36', '2023-05-06 05:43:36', NULL),
(4, 10, 'Briar', 'Doloremque fugiat ea', 'Vel rerum officiis e', 'Dolorem voluptatem', 'Architecto distincti', '79679', '+1 (953) 941-7612', '+1 (808) 134-5598', '2023-05-06 05:46:32', '2023-05-06 05:46:32', NULL),
(5, 11, 'Bruce', 'Fugiat excepteur et', 'Qui eos velit aliq', 'Non tempore totam n', 'Soluta sed anim fugi', '82414', '+1 (356) 207-7989', '+1 (457) 215-5255', '2023-05-06 05:50:20', '2023-05-06 05:50:20', NULL),
(6, 12, 'Bryar', 'Nobis quisquam sit', 'Eiusmod sint volupta', 'Enim praesentium sed', 'Maiores quis sint ma', '75116', '+1 (983) 322-8851', '+1 (467) 969-7867', '2023-05-06 05:55:34', '2023-05-06 05:55:34', NULL),
(7, 13, 'Troy', 'Consectetur delectu', 'Incidunt fugit con', 'Voluptatem consecte', 'Sunt aperiam et ten', '12177', '+1 (506) 529-1575', '+1 (592) 183-4454', '2023-05-06 16:40:33', '2023-05-06 16:40:33', NULL),
(8, 14, 'Xenos', 'Explicabo Iusto sin', 'Sed voluptatem elit', 'Facilis voluptas nob', 'Accusamus optio eu', '49382', '+1 (418) 754-1248', '+1 (287) 321-9095', '2023-05-08 23:36:45', '2023-05-08 23:36:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_emergency_contacts`
--

CREATE TABLE `patient_emergency_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `relationship_to_patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_emergency_contacts`
--

INSERT INTO `patient_emergency_contacts` (`id`, `name`, `patient_id`, `relationship_to_patient`, `address`, `city`, `state`, `zip`, `phone`, `alternate_phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Haley', 7, 'Eius dolor voluptas', 'Totam delectus quia', 'Sunt nemo sint et au', 'Atque modi pariatur', '52847', '+1 (325) 906-9514', '+1 (103) 767-5848', '2023-05-06 05:26:58', '2023-05-06 05:26:58', NULL),
(2, 'Quinlan', 8, 'Accusantium omnis il', 'Eum in ducimus aute', 'Laboriosam culpa qu', 'Est enim quidem volu', '45256', '+1 (554) 241-3252', '+1 (618) 897-2006', '2023-05-06 05:32:33', '2023-05-06 05:32:33', NULL),
(3, 'Baker', 9, 'Consectetur nulla o', 'Labore est et reici', 'Similique saepe ea i', 'Qui nulla laborum C', '50127', '+1 (434) 796-9107', '+1 (709) 667-1716', '2023-05-06 05:43:36', '2023-05-06 05:43:36', NULL),
(4, 'Hedley', 10, 'Facilis ad sint sapi', 'Necessitatibus irure', 'Non quia soluta volu', 'Fugiat quisquam ill', '57030', '+1 (365) 881-3588', '+1 (323) 879-9503', '2023-05-06 05:46:32', '2023-05-06 05:46:32', NULL),
(5, 'TaShya', 11, 'Doloremque corporis', 'Aut obcaecati ut dui', 'Possimus est quos a', 'Et veniam in culpa', '44068', '+1 (626) 976-9482', '+1 (507) 424-1618', '2023-05-06 05:50:20', '2023-05-06 05:50:20', NULL),
(6, 'Branden', 12, 'Dicta qui eos conse', 'Eum in autem in enim', 'Quibusdam iure quasi', 'Sapiente at non unde', '33225', '+1 (299) 369-3438', '+1 (293) 169-2856', '2023-05-06 05:55:34', '2023-05-06 05:55:34', NULL),
(7, 'Tana', 13, 'Id ut rerum labore f', 'Sunt et cillum sed o', 'Explicabo Iste ulla', 'Ut praesentium labor', '87774', '+1 (416) 616-4771', '+1 (319) 448-5053', '2023-05-06 16:40:33', '2023-05-06 16:40:33', NULL),
(8, 'Xantha', 14, 'Quisquam sit minima', 'Aspernatur quisquam', 'Exercitationem corru', 'Sit quis amet veli', '75297', '+1 (561) 185-1104', '+1 (837) 505-4533', '2023-05-08 23:36:45', '2023-05-08 23:36:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_episode_timings`
--

CREATE TABLE `patient_episode_timings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oasis_start_care` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`oasis_start_care`)),
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `schedule_therapy` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`schedule_therapy`)),
  `non_oasis_start_care` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`non_oasis_start_care`)),
  `initial_oasis_recert` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`initial_oasis_recert`)),
  `initial_non_oasis_recert` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`initial_non_oasis_recert`)),
  `start_care_date` date NOT NULL,
  `episode_start_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_episode_timings`
--

INSERT INTO `patient_episode_timings` (`id`, `oasis_start_care`, `patient_id`, `schedule_therapy`, `non_oasis_start_care`, `initial_oasis_recert`, `initial_non_oasis_recert`, `start_care_date`, `episode_start_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 7, NULL, NULL, NULL, NULL, '2023-05-05', '2023-05-05', '2023-05-06 05:27:17', '2023-05-06 05:27:17', NULL),
(2, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 8, NULL, NULL, NULL, NULL, '2023-05-05', '2023-05-05', '2023-05-06 05:32:57', '2023-05-06 05:32:57', NULL),
(3, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 9, NULL, NULL, NULL, NULL, '2023-05-05', '2023-05-05', '2023-05-06 05:43:58', '2023-05-06 05:43:58', NULL),
(4, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 10, NULL, NULL, NULL, NULL, '2023-05-05', '2023-05-05', '2023-05-06 05:46:47', '2023-05-06 05:46:47', NULL),
(5, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 11, NULL, NULL, NULL, NULL, '2023-05-05', '2023-05-05', '2023-05-06 05:50:33', '2023-05-06 05:50:33', NULL),
(6, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 12, NULL, NULL, NULL, NULL, '2023-05-05', '2023-05-05', '2023-05-06 05:55:49', '2023-05-06 05:55:49', NULL),
(7, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 13, NULL, NULL, NULL, NULL, '2023-05-06', '2023-05-06', '2023-05-06 16:40:51', '2023-05-06 16:40:51', NULL),
(8, '{\"oasis_start_care\":\"on\",\"episode_timing_oasis_start_care\":[\"episode_timing_oasis_start_care_sn\"]}', 14, NULL, '{\"non_oasis_start_care\":\"on\",\"episode_timing_non_oasis_start\":null}', '{\"initial_oasis_recert\":\"on\",\"episode_timing_oasis_recert\":null,\"episode_timing_oasis_recert_date\":\"1983-03-13\"}', NULL, '2023-05-08', '2023-05-08', '2023-05-08 23:37:57', '2023-05-08 23:37:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_extra_infos`
--

CREATE TABLE `patient_extra_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `race_ethnicity` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`race_ethnicity`)),
  `source_of_admission` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`source_of_admission`)),
  `source_of_admission_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_requested` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services_requested`)),
  `attending_physician` tinyint(1) DEFAULT NULL,
  `physician_id` bigint(20) UNSIGNED DEFAULT NULL,
  `referring_physician_id` bigint(20) UNSIGNED DEFAULT NULL,
  `face_to_face_evaluation` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`face_to_face_evaluation`)),
  `pharmacy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `advance_directives` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`advance_directives`)),
  `emergency_preparedness` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`emergency_preparedness`)),
  `coordination_of_care` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`coordination_of_care`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_extra_infos`
--

INSERT INTO `patient_extra_infos` (`id`, `patient_id`, `race_ethnicity`, `source_of_admission`, `source_of_admission_other`, `services_requested`, `attending_physician`, `physician_id`, `referring_physician_id`, `face_to_face_evaluation`, `pharmacy_id`, `advance_directives`, `emergency_preparedness`, `coordination_of_care`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, '[\"asian_race_ethnicity_asian\",\"needs_interpreter_native\"]', '[\"long_term_nursing_facility\"]', NULL, '[\"hha\",\"pt\",\"msw\",\"no_ancillary_services\"]', 1, 1, 1, '[\"face_to_face_evaluation_date\"]', 1, '{\"advance_directive\":[\"living_will\"],\"attending\":\"1\"}', '[\"emergency_life_threatening\",\"emergency_transportation\",\"emergency_neighbor\",\"emergency_caregiver\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Incidunt iusto sunt\",\"\'emergency_medicaid_1\'\":\"Eiusmod voluptatem\",\"\'emergency_medicaid_2\'\":\"Est aut rerum neque\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"Nostrum libero labor\",\"\'emergency_medicare_2\'\":\"Molestias illum eos\",\"\'emergency_medicare_3\'\":\"Fugiat aspernatur e\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Ducimus atque est s\",\"\'emergency_dialysis_1\'\":\"Sunt natus voluptas\",\"\'emergency_dialysis_2\'\":\"Eius obcaecati moles\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Molestias dolorem de\",\"\'emergency_wound_care_1\'\":\"Proident anim sunt\",\"\'emergency_wound_care_2\'\":\"Sed debitis minim re\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Nostrud perferendis\",\"\'emergency_patient_rehab_1\'\":\"Dolores illo nisi su\",\"\'emergency_patient_rehab_2\'\":\"Fugit deserunt libe\"}}', '2023-05-06 05:25:20', '2023-05-06 05:26:58', NULL),
(2, 8, '[\"needs_interpreter_american\",\"asian_race_ethnicity_asian\",\"needs_interpreter_black\"]', '[\"long_term_nursing_facility\",\"skilled_nursing_facility\",\"short_stay_acute\",\"inpatient_rehailitation\"]', NULL, '[\"hha\",\"ot\",\"st\",\"no_ancillary_services\",\"referral_completed\"]', 1, 1, 1, '[\"face_to_face_evaluation_date\"]', 1, '{\"advance_directive\":[\"living_will\"],\"attending\":\"1\"}', '[\"emergency_preparedness\",\"emergency_life_threatening\",\"emergency_caregiver\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Expedita iure exerci\",\"\'emergency_medicaid_1\'\":\"Earum alias rerum pe\",\"\'emergency_medicaid_2\'\":\"Molestias nulla pari\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"Dolorum consequat V\",\"\'emergency_medicare_2\'\":\"Similique laudantium\",\"\'emergency_medicare_3\'\":\"Iste nostrum delectu\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Esse eligendi aperia\",\"\'emergency_dialysis_1\'\":\"Tempor cillum simili\",\"\'emergency_dialysis_2\'\":\"Ut nisi occaecat non\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Mollitia debitis lab\",\"\'emergency_wound_care_1\'\":\"Molestias reiciendis\",\"\'emergency_wound_care_2\'\":\"Architecto velit au\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Esse et consequatur\",\"\'emergency_patient_rehab_1\'\":\"Consectetur quisquam\",\"\'emergency_patient_rehab_2\'\":\"Dolorem quam commodi\"}}', '2023-05-06 05:31:52', '2023-05-06 05:32:33', NULL),
(3, 9, '[\"needs_interpreter_american\",\"asian_race_ethnicity_asian\",\"needs_interpreter_black\",\"needs_interpreter_hispanic\",\"needs_interpreter_native\",\"needs_interpreter_white\",\"needs_interpreter_unknown\"]', '[\"short_stay_acute\",\"long_term_care\",\"inpatient_rehailitation\",\"phyciatric_hospital\"]', NULL, '[\"sn\",\"ot\",\"st\",\"referral_completed\"]', 1, 1, 1, '[\"face_to_face_evaluation_completed\"]', 1, '{\"advance_directive\":[\"living_will\",\"dnr_out_hospital\"],\"attending\":\"1\"}', '[\"emergency_preparedness\",\"emergency_proponed_24_hours\",\"emergency_proponed_72_hours\",\"emergency_transportation\",\"emergency_neighbor\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Laboriosam ad quia\",\"\'emergency_medicaid_1\'\":\"Sapiente vel maxime\",\"\'emergency_medicaid_2\'\":\"Sint aute consequat\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"Ea nihil ipsam natus\",\"\'emergency_medicare_2\'\":\"Culpa et nulla culp\",\"\'emergency_medicare_3\'\":\"Reprehenderit dolore\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Ipsum ipsum ex ipsa\",\"\'emergency_dialysis_1\'\":\"Ad cum eos magni omn\",\"\'emergency_dialysis_2\'\":\"Nostrud deleniti rep\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Non aut et laboriosa\",\"\'emergency_wound_care_1\'\":\"Proident labore sed\",\"\'emergency_wound_care_2\'\":\"Non assumenda ea eiu\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Error nisi id volup\",\"\'emergency_patient_rehab_1\'\":\"Commodo quisquam off\",\"\'emergency_patient_rehab_2\'\":\"Sit sed voluptatibu\"}}', '2023-05-06 05:42:54', '2023-05-06 05:43:36', NULL),
(4, 10, '[\"needs_interpreter_american\",\"needs_interpreter_native\",\"needs_interpreter_white\",\"needs_interpreter_unknown\"]', '[\"long_term_nursing_facility\",\"skilled_nursing_facility\",\"long_term_care\"]', NULL, '[\"hha\",\"sn\",\"pt\",\"ot\",\"no_ancillary_services\",\"referral_completed\"]', NULL, 1, 1, '[\"face_to_face_evaluation_date\"]', 1, '{\"advance_directive\":[\"living_will\",\"dnr_out_hospital\"],\"attending\":\"1\"}', '[\"emergency_proponed_72_hours\",\"emergency_neighbor\",\"emergency_caregiver\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Accusantium in sunt\",\"\'emergency_medicaid_1\'\":\"Velit aliquam aut si\",\"\'emergency_medicaid_2\'\":\"Commodo consectetur\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"In proident tenetur\",\"\'emergency_medicare_2\'\":\"Voluptas velit quo e\",\"\'emergency_medicare_3\'\":\"Dolor ut tempora pro\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Dignissimos incidunt\",\"\'emergency_dialysis_1\'\":\"Exercitation dolores\",\"\'emergency_dialysis_2\'\":\"Qui sint magni susci\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Sed animi ratione m\",\"\'emergency_wound_care_1\'\":\"Molestiae elit non\",\"\'emergency_wound_care_2\'\":\"Hic est ullam maiore\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Dolore fugit ea vel\",\"\'emergency_patient_rehab_1\'\":\"Ipsa quia ea pariat\",\"\'emergency_patient_rehab_2\'\":\"Ex dolores ipsa cul\"}}', '2023-05-06 05:45:53', '2023-05-06 05:46:32', NULL),
(5, 11, '[\"asian_race_ethnicity_asian\",\"needs_interpreter_hispanic\",\"needs_interpreter_white\",\"needs_interpreter_unknown\"]', '[\"long_term_nursing_facility\",\"skilled_nursing_facility\",\"long_term_care\"]', NULL, '[\"hha\",\"msw\",\"no_ancillary_services\",\"referral_completed\"]', 1, 1, 1, '[\"face_to_face_evaluation_completed\"]', 1, '{\"advance_directive\":[\"living_will\",\"dnr_out_hospital\"],\"attending\":\"1\"}', '[\"emergency_preparedness\",\"emergency_proponed_24_hours\",\"emergency_proponed_72_hours\",\"emergency_transportation\",\"emergency_neighbor\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Ipsam velit quia ip\",\"\'emergency_medicaid_1\'\":\"Nisi Nam qui est vol\",\"\'emergency_medicaid_2\'\":\"Est cupidatat labore\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"Atque nihil adipisic\",\"\'emergency_medicare_2\'\":\"Voluptatem At ratio\",\"\'emergency_medicare_3\'\":\"Laboris ipsa quia p\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Neque aliquip aliqua\",\"\'emergency_dialysis_1\'\":\"Omnis dolor laboris\",\"\'emergency_dialysis_2\'\":\"Ea dolor laudantium\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Labore autem eos ul\",\"\'emergency_wound_care_1\'\":\"Quia non sunt eum as\",\"\'emergency_wound_care_2\'\":\"Neque dicta non recu\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Unde at reprehenderi\",\"\'emergency_patient_rehab_1\'\":\"Temporibus iste ad t\",\"\'emergency_patient_rehab_2\'\":\"Excepturi et anim ut\"}}', '2023-05-06 05:49:31', '2023-05-06 05:50:20', NULL),
(6, 12, '[\"needs_interpreter_hispanic\",\"needs_interpreter_white\"]', '[\"long_term_nursing_facility\",\"skilled_nursing_facility\",\"short_stay_acute\",\"patient_discharged\"]', NULL, '[\"pt\",\"ot\"]', 1, 1, 1, '[\"face_to_face_evaluation_date\"]', 1, '{\"advance_directive\":[\"living_will\",\"dnr_out_hospital\"],\"attending\":\"1\"}', '[\"emergency_preparedness\",\"emergency_life_threatening\",\"emergency_proponed_72_hours\",\"emergency_neighbor\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Et voluptas laborum\",\"\'emergency_medicaid_1\'\":\"Porro debitis illo n\",\"\'emergency_medicaid_2\'\":\"Voluptatem Voluptat\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"Fuga Quis nulla par\",\"\'emergency_medicare_2\'\":\"Ipsa voluptate ad d\",\"\'emergency_medicare_3\'\":\"Sunt fuga Aut et ea\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Necessitatibus vero\",\"\'emergency_dialysis_1\'\":\"Ea consectetur ad qu\",\"\'emergency_dialysis_2\'\":\"Fugit id aut quaera\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Numquam tempora reru\",\"\'emergency_wound_care_1\'\":\"Maiores esse et sit\",\"\'emergency_wound_care_2\'\":\"Maiores non quo ipsu\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Et sunt libero ea ve\",\"\'emergency_patient_rehab_1\'\":\"Labore tempore lore\",\"\'emergency_patient_rehab_2\'\":\"Qui voluptatem Est\"}}', '2023-05-06 05:54:51', '2023-05-06 05:55:34', NULL),
(7, 13, '[\"needs_interpreter_black\"]', '[\"long_term_nursing_facility\"]', NULL, '[\"hha\"]', 1, 2, 2, '[\"face_to_face_evaluation_completed\"]', 1, '{\"advance_directive\":[\"living_will\",\"dnr_out_hospital\"],\"attending\":\"2\"}', '[\"emergency_preparedness\",\"emergency_proponed_24_hours\",\"emergency_transportation\",\"emergency_caregiver\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Repudiandae fuga Al\",\"\'emergency_medicaid_1\'\":\"Provident dolore au\",\"\'emergency_medicaid_2\'\":\"Sunt nemo officia iu\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"Minima iure ullamco\",\"\'emergency_medicare_2\'\":\"Ipsam harum neque se\",\"\'emergency_medicare_3\'\":\"Assumenda dolorum to\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Fugiat minus et ali\",\"\'emergency_dialysis_1\'\":\"Sunt iure ut amet\",\"\'emergency_dialysis_2\'\":\"Non laboris sed veri\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Dolore amet commodo\",\"\'emergency_wound_care_1\'\":\"Dolor odio iure opti\",\"\'emergency_wound_care_2\'\":\"Voluptas enim asperi\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Odio voluptates libe\",\"\'emergency_patient_rehab_1\'\":\"Nam dolore dolores s\",\"\'emergency_patient_rehab_2\'\":\"Labore autem nostrud\"}}', '2023-05-06 16:38:22', '2023-05-06 16:40:33', NULL),
(8, 14, '[\"needs_interpreter_black\"]', '[\"short_stay_acute\"]', NULL, '[\"hha\",\"sn\"]', 1, 1, 1, '[\"face_to_face_evaluation_date\"]', 1, '{\"advance_directive\":[\"living_will\"],\"attending\":\"1\"}', '[\"emergency_preparedness\",\"emergency_life_threatening\",\"emergency_proponed_24_hours\",\"emergency_proponed_72_hours\",\"emergency_caregiver\"]', '{\"\'medicaid_waiver\'\":{\"\'emergency_medicaid\'\":\"Sed elit est maxime\",\"\'emergency_medicaid_1\'\":\"Quibusdam consequat\",\"\'emergency_medicaid_2\'\":\"Amet harum fugit c\"},\"\'medicare\'\":{\"\'emergency_medicare_1\'\":\"Autem et veniam cul\",\"\'emergency_medicare_2\'\":\"Aut voluptate recusa\",\"\'emergency_medicare_3\'\":\"Iure alias dolor rer\"},\"\'dialysis\'\":{\"\'emergency_dialysis\'\":\"Similique dolore rec\",\"\'emergency_dialysis_1\'\":\"Unde ut ut quidem an\",\"\'emergency_dialysis_2\'\":\"Fugiat id rerum con\"},\"\'wound_care_clinic\'\":{\"\'emergency_wound_care\'\":\"Animi aliqua Ut do\",\"\'emergency_wound_care_1\'\":\"Et laboris adipisci\",\"\'emergency_wound_care_2\'\":\"Sunt officia libero\"},\"\'out_patient_rehab\'\":{\"\'emergency_patient_rehab\'\":\"Dicta laboriosam as\",\"\'emergency_patient_rehab_1\'\":\"Nam et consequuntur\",\"\'emergency_patient_rehab_2\'\":\"Est ipsum est ulla\"}}', '2023-05-08 23:29:20', '2023-05-08 23:36:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_insurances`
--

CREATE TABLE `patient_insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `primary_payor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_payor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_pay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_pay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicaid_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicare_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_source` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_insurances`
--

INSERT INTO `patient_insurances` (`id`, `patient_id`, `primary_payor`, `secondary_payor`, `co_pay`, `private_pay`, `medicaid_id`, `medicare_id`, `nic_id`, `payment_source`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 12, 'Molina', 'Aetna', NULL, NULL, '67865435788', NULL, NULL, '[{\"\'non_charge_current_service\'\":\"on\"},{\"\'medicare_hmo_managed\'\":\"on\"},{\"\'other_specify_value\'\":null}]', '2023-05-06 05:56:02', '2023-05-06 05:56:02', NULL),
(2, 13, 'Aetna', 'Molina', NULL, NULL, '67865435788', NULL, NULL, '[{\"\'insurance_medicaid_hmo_managed\'\":\"on\"},{\"\'other_specify_value\'\":null}]', '2023-05-06 16:41:13', '2023-05-06 16:41:13', NULL),
(3, 14, 'Aetna', NULL, '0', NULL, '67865435788', NULL, NULL, '[{\"\'traditional_free_service\'\":\"on\"},{\"\'other_specify_value\'\":null}]', '2023-05-08 23:38:23', '2023-05-08 23:38:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_non_admit_reasons`
--

CREATE TABLE `patient_non_admit_reasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `non_admit_date` date NOT NULL,
  `reasons` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`reasons`)),
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_non_admit_reasons`
--

INSERT INTO `patient_non_admit_reasons` (`id`, `patient_id`, `non_admit_date`, `reasons`, `comments`, `created_at`, `updated_at`) VALUES
(1, 4, '2023-05-11', '[\"Inappropriate For Home\",\"Out of Service Area\"]', 'testing', '2023-05-06 06:12:33', '2023-05-06 06:12:33'),
(2, 3, '2023-05-05', '[\"Inappropriate For Home\",\"Not a Provider\",\"Redirected to alternate care facility\"]', NULL, '2023-05-06 06:13:48', '2023-05-06 06:13:48'),
(3, 7, '2023-05-15', '[\"Inappropriate For Home\",\"Not Homebound\"]', NULL, '2023-05-15 23:23:29', '2023-05-15 23:23:29'),
(4, 9, '2023-05-15', '[\"On Service With another agency\"]', NULL, '2023-05-15 23:23:58', '2023-05-15 23:23:58'),
(5, 6, '2023-05-15', '[\"Redirected to alternate care facility\"]', NULL, '2023-05-15 23:24:17', '2023-05-15 23:24:17'),
(6, 10, '2023-05-15', '[\"Inappropriate For Home\"]', NULL, '2023-05-22 19:43:37', '2023-05-22 19:43:37'),
(7, 8, '2023-05-23', '[\"Patient Refused Service\",\"Out of Service Area\"]', NULL, '2023-05-22 20:02:51', '2023-05-22 20:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `patient_service_addresses`
--

CREATE TABLE `patient_service_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_service_addresses`
--

INSERT INTO `patient_service_addresses` (`id`, `patient_id`, `address_line_1`, `address_line_2`, `lat`, `lon`, `city`, `country`, `state`, `zip`, `county`, `phone`, `alternate_phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '6148057633', '01614079554', '2023-05-05 22:22:10', '2023-05-05 22:22:10', NULL),
(2, 2, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '016148057633', '01614079554', '2023-05-05 22:24:43', '2023-05-05 22:24:43', NULL),
(3, 3, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (389) 715-7814', '+1 (666) 901-7527', '2023-05-05 22:29:45', '2023-05-05 22:29:45', NULL),
(4, 4, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (399) 733-2356', '+1 (197) 241-1898', '2023-05-06 05:01:18', '2023-05-06 05:01:18', NULL),
(5, 5, '4663 Executive Drive', NULL, NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (119) 593-4832', '+1 (433) 712-1932', '2023-05-06 05:04:31', '2023-05-06 05:04:31', NULL),
(6, 6, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (583) 816-7146', '+1 (157) 847-3026', '2023-05-06 05:22:16', '2023-05-06 05:22:16', NULL),
(7, 7, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (412) 677-3599', '+1 (109) 729-4631', '2023-05-06 05:25:20', '2023-05-06 05:25:20', NULL),
(8, 8, '4663 Executive Drive', NULL, NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (728) 431-6685', '+1 (418) 711-8997', '2023-05-06 05:31:52', '2023-05-06 05:31:52', NULL),
(9, 9, '114 Sandburg Drive', 'Lithopolis, OH 43136, United States of America', NULL, NULL, 'Lithopolis', 'United States', 'Ohio', '43136', NULL, '+1 (202) 112-3212', '+1 (674) 868-8503', '2023-05-06 05:42:54', '2023-05-06 05:42:54', NULL),
(10, 10, '114 Sandburg Drive', 'Lithopolis, OH 43136, United States of America', NULL, NULL, 'Lithopolis', 'United States', 'Ohio', '43136', NULL, '+1 (377) 848-5832', '+1 (386) 732-7388', '2023-05-06 05:45:53', '2023-05-06 05:45:53', NULL),
(11, 11, '114 Sandburg Drive', 'Lithopolis, OH 43136, United States of America', NULL, NULL, 'Lithopolis', 'United States', 'Ohio', '43136', NULL, '+1 (813) 624-3718', '+1 (197) 316-8459', '2023-05-06 05:49:31', '2023-05-06 05:49:31', NULL),
(12, 12, '4663 Executive Drive', 'Columbus, OH 43220, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43220', NULL, '+1 (201) 883-7171', '+1 (713) 719-5563', '2023-05-06 05:54:51', '2023-05-06 05:54:51', NULL),
(13, 13, '1400 Barnett Road', 'Columbus, OH 43227, United States of America', NULL, NULL, 'Columbus', 'United States', 'Ohio', '43227', NULL, '+1 (389) 715-7814', '+1 (433) 712-1932', '2023-05-06 16:38:22', '2023-05-06 16:38:22', NULL),
(14, 14, '1976 Spruce Drive', NULL, NULL, NULL, 'Columbus', 'United States', 'Ohio', '43217', NULL, '6142565817', '6142565817', '2023-05-08 23:29:20', '2023-05-08 23:29:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(2, 'role-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(3, 'role-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(4, 'role-edit', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(5, 'user-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(6, 'user-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(7, 'user-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(8, 'org-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(9, 'org-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(10, 'org-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(11, 'employee-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(12, 'employee-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(13, 'employee-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(14, 'employee-show', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(15, 'patient-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(16, 'patient-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(17, 'patient-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(18, 'patient-show', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(19, 'patient-edit', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(20, 'referral-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(21, 'referral-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(22, 'referral-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(23, 'referral-show', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(24, 'referral-edit', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(25, 'physician-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(26, 'physician-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(27, 'physician-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(28, 'physician-show', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(29, 'physician-edit', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(30, 'insurance-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(31, 'insurance-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(32, 'insurance-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(33, 'insurance-show', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(34, 'insurance-edit', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(35, 'pharmacy-list', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(36, 'pharmacy-create', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(37, 'pharmacy-delete', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(38, 'pharmacy-show', 'web', '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(39, 'pharmacy-edit', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(40, 'orders-list', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(41, 'orders-create', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(42, 'orders-delete', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(43, 'orders-show', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(44, 'orders-edit', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(45, 'qa-list', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(46, 'qa-create', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(47, 'qa-delete', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(48, 'qa-edit', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(49, 'qa-show', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(50, 'oasis-list', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(51, 'oasis-create', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(52, 'oasis-delete', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(53, 'oasis-show', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(54, 'expiring-authority', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(55, 'caregivers-search', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(56, 'referral-contacts-create', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(57, 'referral-contacts-delete', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(58, 'referral-contacts-show', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(59, 'referral-contacts-edit', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(60, 'address-book-list', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(61, 'address-book-create', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(62, 'address-book-show', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(63, 'address-book-edit', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(64, 'address-book-delete', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(65, 'schedule-list', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(66, 'scheduled-create', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(67, 'scheduled-show', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(68, 'scheduled-delete', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(69, 'scheduled-edit', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'clicktab', '703f9ce7bef09ac5710d2619fbbd90645e90b95cda5de86d204f685360c6e69b', '[\"*\"]', NULL, NULL, '2023-05-05 22:05:24', '2023-05-05 22:05:24'),
(2, 'App\\Models\\User', 3, 'clicktab', 'a715e548167005e3ae39cacc174b935aab3e901ffd675eaae3a3881371b744f6', '[\"*\"]', NULL, NULL, '2023-05-05 22:08:00', '2023-05-05 22:08:00'),
(3, 'App\\Models\\User', 3, 'clicktab', '1e0d7407250710928eae854ee8521c08b7db7cad99cd2109c81efea184f07c8b', '[\"*\"]', NULL, NULL, '2023-05-06 04:59:28', '2023-05-06 04:59:28'),
(4, 'App\\Models\\User', 3, 'clicktab', '8d888bb9a3524459860f707c8a09221a02724a05fc1dab5716f29bebbdc36b4e', '[\"*\"]', NULL, NULL, '2023-05-06 16:18:12', '2023-05-06 16:18:12'),
(5, 'App\\Models\\User', 3, 'clicktab', 'c80d1c15c186259fa283f2c9ed8e0f5c241f097c7fdada307f97d1c02e564004', '[\"*\"]', NULL, NULL, '2023-05-06 18:56:08', '2023-05-06 18:56:08'),
(6, 'App\\Models\\User', 3, 'clicktab', 'd13f42f297a8e3374b522d9d3886e62f89008aaf491852bb4d2386ea3b6b282a', '[\"*\"]', NULL, NULL, '2023-05-07 04:34:23', '2023-05-07 04:34:23'),
(7, 'App\\Models\\User', 3, 'clicktab', '4582edd47d1d6a4ee8e10dead23147f8e0a1de30aa4bc9b318cce41c9c8216ff', '[\"*\"]', NULL, NULL, '2023-05-07 06:44:49', '2023-05-07 06:44:49'),
(8, 'App\\Models\\User', 3, 'clicktab', '39d188d205977d43ad760eeafd86cb150f1e7008f622111fdc7919bd6961ea52', '[\"*\"]', NULL, NULL, '2023-05-07 17:01:21', '2023-05-07 17:01:21'),
(9, 'App\\Models\\User', 3, 'clicktab', 'c852c364c208f1f9ff9cab1a337b094108e85e27eea4c44f99e25a9e381646cd', '[\"*\"]', NULL, NULL, '2023-05-07 20:44:24', '2023-05-07 20:44:24'),
(10, 'App\\Models\\User', 3, 'clicktab', '00f31d3bec8b389a27767ece4f0582dc24ba46a2f5ef0cdb98c751175f5f0d5d', '[\"*\"]', NULL, NULL, '2023-05-08 04:06:06', '2023-05-08 04:06:06'),
(11, 'App\\Models\\User', 3, 'clicktab', '9df1dfa21115a1f20ce6c4acdcdce9c1d28b8d0f893b8a41086f0b5b6640249b', '[\"*\"]', NULL, NULL, '2023-05-08 09:39:19', '2023-05-08 09:39:19'),
(12, 'App\\Models\\User', 3, 'clicktab', 'b048ef2c25ba1cf556f5b93aa69bd6403a13cc8b07fd6a7925285fe556de1971', '[\"*\"]', NULL, NULL, '2023-05-08 09:43:11', '2023-05-08 09:43:11'),
(13, 'App\\Models\\User', 3, 'clicktab', 'fe342ba2b0deacf49fef3152f5ae5de347d65d9932af7785e8c2a1c2f088a87f', '[\"*\"]', NULL, NULL, '2023-05-08 18:12:57', '2023-05-08 18:12:57'),
(14, 'App\\Models\\User', 3, 'clicktab', '062531e27f5db27844a14ec66a6028e91974836e78c498755a30626420838b75', '[\"*\"]', NULL, NULL, '2023-05-08 20:52:57', '2023-05-08 20:52:57'),
(15, 'App\\Models\\User', 3, 'clicktab', 'a0400fb4d5057922d9f1af6b850e771cdb74fd9dfe3970bbcedc70ee4f9a039e', '[\"*\"]', NULL, NULL, '2023-05-08 22:19:31', '2023-05-08 22:19:31'),
(16, 'App\\Models\\User', 3, 'clicktab', '5f4eaeb016f6818bfe9167af43049bc019836b6ffcf36b614a1e04314a98f925', '[\"*\"]', NULL, NULL, '2023-05-09 05:37:05', '2023-05-09 05:37:05'),
(17, 'App\\Models\\User', 3, 'clicktab', '169bfb22d91df8dd9f29b95ca8423ca8a1b94e2b05bfc8e277898f3ea4a8d13c', '[\"*\"]', NULL, NULL, '2023-05-09 16:54:13', '2023-05-09 16:54:13'),
(18, 'App\\Models\\User', 3, 'clicktab', '155ba0b3afd19266e719f4c54525c24ca17a1ccfbb65c7760c6f8c61594719d2', '[\"*\"]', NULL, NULL, '2023-05-10 01:25:55', '2023-05-10 01:25:55'),
(19, 'App\\Models\\User', 3, 'clicktab', '990f4d2ea2e87bf6e6451470ab294593c821624dc5ae54189c562a57ca78a0e0', '[\"*\"]', NULL, NULL, '2023-05-10 10:36:49', '2023-05-10 10:36:49'),
(20, 'App\\Models\\User', 3, 'clicktab', 'f55c2e3919ba8abeec37c094776472a37dd80dfc77fb50e5ed2d5d4aea51106d', '[\"*\"]', NULL, NULL, '2023-05-10 16:15:18', '2023-05-10 16:15:18'),
(21, 'App\\Models\\User', 3, 'clicktab', 'c13489e05855637d8db07607e2eebebd94e31b0b1b0be2459df6fa50e3413674', '[\"*\"]', NULL, NULL, '2023-05-10 20:24:22', '2023-05-10 20:24:22'),
(22, 'App\\Models\\User', 3, 'clicktab', '56400e50bff156196574bdf11fb650e7acf6331b18519990320590b4330dcec5', '[\"*\"]', NULL, NULL, '2023-05-10 21:55:37', '2023-05-10 21:55:37'),
(23, 'App\\Models\\User', 3, 'clicktab', '235f0b3bf45d52da7e8cc47e97673aba8e996a3e4fa5105702e92444a5859076', '[\"*\"]', NULL, NULL, '2023-05-11 03:49:02', '2023-05-11 03:49:02'),
(24, 'App\\Models\\User', 3, 'clicktab', '2ca61781af32705e46a95e55d4c67bf6a16c213da071135e34eb7ec396ecd1e2', '[\"*\"]', NULL, NULL, '2023-05-11 12:29:44', '2023-05-11 12:29:44'),
(25, 'App\\Models\\User', 3, 'clicktab', 'a55cbb333c84e632d8b58ee17ff607dd28150ddd97497fb746f6b238c50f597c', '[\"*\"]', NULL, NULL, '2023-05-11 15:21:31', '2023-05-11 15:21:31'),
(26, 'App\\Models\\User', 3, 'clicktab', '981e232301b8252e36128b9fb41e01629bb721a05ece76caf3b9d7fb92a34f50', '[\"*\"]', NULL, NULL, '2023-05-11 23:11:34', '2023-05-11 23:11:34'),
(27, 'App\\Models\\User', 3, 'clicktab', 'c5c4e5a9b2f067698c221e4762ad5995f1b40869dd1921693ff23a07ab3b06a4', '[\"*\"]', NULL, NULL, '2023-05-12 03:06:03', '2023-05-12 03:06:03'),
(28, 'App\\Models\\User', 3, 'clicktab', '98206c919fee3b9a49a8a4a9e6222db6eba7a2d021de7fbb784e463b303d6f9b', '[\"*\"]', NULL, NULL, '2023-05-12 05:40:07', '2023-05-12 05:40:07'),
(29, 'App\\Models\\User', 3, 'clicktab', '32db7b92aa946216ede431cdcd421df0d1b8bf893ac1c72be7c0fdcc0d55f2f1', '[\"*\"]', NULL, NULL, '2023-05-12 12:20:59', '2023-05-12 12:20:59'),
(30, 'App\\Models\\User', 3, 'clicktab', 'd5db58307553fd7675779df5f7472eac5e1dfc76a29329a5c55c599320c84663', '[\"*\"]', NULL, NULL, '2023-05-12 16:58:13', '2023-05-12 16:58:13'),
(31, 'App\\Models\\User', 3, 'clicktab', '7c961f72648b98c53f076c8ba433e91799ec8a5655bc86866a6ef9425c324db4', '[\"*\"]', NULL, NULL, '2023-05-13 13:05:19', '2023-05-13 13:05:19'),
(32, 'App\\Models\\User', 3, 'clicktab', '8fbece74aac1716aec972c47828bf66725a3ce9aa4ce10ea55d0aad2a50837d2', '[\"*\"]', NULL, NULL, '2023-05-15 02:34:03', '2023-05-15 02:34:03'),
(33, 'App\\Models\\User', 3, 'clicktab', 'e7b8cb56020021ac2c29f0a83a4ed7fa785ab7cb6f70500ed41882bed6cfe6a7', '[\"*\"]', NULL, NULL, '2023-05-15 18:16:29', '2023-05-15 18:16:29'),
(34, 'App\\Models\\User', 6, 'clicktab', '1658a466df8a3da54263796d04310180a01e7407735eff12bad5567bde872ac0', '[\"*\"]', NULL, NULL, '2023-05-15 19:22:06', '2023-05-15 19:22:06'),
(35, 'App\\Models\\User', 3, 'clicktab', '62199e7a60e9873ed282dc381fbc7e24b9a0f5e1b659cf9f74fd0175a1933512', '[\"*\"]', NULL, NULL, '2023-05-15 20:12:35', '2023-05-15 20:12:35'),
(36, 'App\\Models\\User', 6, 'clicktab', 'f942b63134ff33bae922cb2e20da539a9e04778150e99ed3f0aa1456ed70ba92', '[\"*\"]', NULL, NULL, '2023-05-15 20:13:07', '2023-05-15 20:13:07'),
(37, 'App\\Models\\User', 3, 'clicktab', '030856b94686e741d197b3835d24d0365e208fde8630071c8bd859ae2efec1de', '[\"*\"]', NULL, NULL, '2023-05-15 20:19:01', '2023-05-15 20:19:01'),
(38, 'App\\Models\\User', 3, 'clicktab', 'b9356600f87a5a71c1e8b3ae9d829e0f56a9e9562a063406bcd66b3ef4596b3f', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:15', '2023-05-15 23:17:15'),
(39, 'App\\Models\\User', 1, 'clicktab', '1921c07255132a94a54edadc241b1dd6e8cdd46bdb1c0133ebfa117b4c41627b', '[\"*\"]', NULL, NULL, '2023-05-15 23:18:32', '2023-05-15 23:18:32'),
(40, 'App\\Models\\User', 2, 'clicktab', 'fde051acfe1e92e0e9dbed2b3815999769faa9776803721913a1494cfd6688c5', '[\"*\"]', NULL, NULL, '2023-05-15 23:19:47', '2023-05-15 23:19:47'),
(41, 'App\\Models\\User', 3, 'clicktab', 'c1cf286b6ee1723ca9395a020c57a94571c891694eb641746961253c22598370', '[\"*\"]', NULL, NULL, '2023-05-15 23:20:11', '2023-05-15 23:20:11'),
(42, 'App\\Models\\User', 3, 'clicktab', '9c95eb9ae4abd3dc6234575ec101fac638ebbf710d9207102711667bbaa287b4', '[\"*\"]', NULL, NULL, '2023-05-15 23:21:53', '2023-05-15 23:21:53'),
(43, 'App\\Models\\User', 3, 'clicktab', '3585dd7eee492137ccea7d290a2aa053210748fcecb73a28ca0fe0fa689c0d48', '[\"*\"]', NULL, NULL, '2023-05-16 00:23:57', '2023-05-16 00:23:57'),
(44, 'App\\Models\\User', 3, 'clicktab', '15286854b794a7bbb497956f44a411412a2baacd62940fa7ca263aa97b9f2f0e', '[\"*\"]', NULL, NULL, '2023-05-16 15:55:48', '2023-05-16 15:55:48'),
(45, 'App\\Models\\User', 3, 'clicktab', '81f3b57253af87938e29eeb5e5fc1dc179684d75dfc73093bf4c867c99d32495', '[\"*\"]', NULL, NULL, '2023-05-17 05:33:13', '2023-05-17 05:33:13'),
(46, 'App\\Models\\User', 3, 'clicktab', '0f9021ea9faab3a488183c295e4e0499a97b00ac81f08eb13b89c7c696973015', '[\"*\"]', NULL, NULL, '2023-05-17 14:33:21', '2023-05-17 14:33:21'),
(47, 'App\\Models\\User', 3, 'clicktab', '2910ed80f367288ec74cdc125b31d460afb631e58dde30baeba66a5b7fdaba6c', '[\"*\"]', NULL, NULL, '2023-05-19 20:44:42', '2023-05-19 20:44:42'),
(48, 'App\\Models\\User', 3, 'clicktab', 'ac2416b97d5ec3c240d90090ff29ddfb2065ebf53d81837a5b3cc6c48ab79394', '[\"*\"]', NULL, NULL, '2023-05-21 15:51:31', '2023-05-21 15:51:31'),
(49, 'App\\Models\\User', 3, 'clicktab', '663114806d0282cdf4157aa71dd22821b98139a9d76aeddb16a62aa673b474a3', '[\"*\"]', NULL, NULL, '2023-05-22 04:11:25', '2023-05-22 04:11:25'),
(50, 'App\\Models\\User', 3, 'clicktab', '2f9d460410da089a2ac53a8f4dffb7fe88c73dee5174e161e55bc7ba9d5059ad', '[\"*\"]', NULL, NULL, '2023-05-22 17:45:14', '2023-05-22 17:45:14'),
(51, 'App\\Models\\User', 3, 'clicktab', '84aceb604b09a63264d46cb5d7a3ba54ab7f30614540811137d5284905f42bfe', '[\"*\"]', NULL, NULL, '2023-05-22 22:30:25', '2023-05-22 22:30:25'),
(52, 'App\\Models\\User', 3, 'clicktab', '55bf7c3c8abea736f5bfbdb16bdfddc3afbd397ff8d59e9f0185de4749e2de6b', '[\"*\"]', NULL, NULL, '2023-05-23 02:34:32', '2023-05-23 02:34:32'),
(53, 'App\\Models\\User', 1, 'clicktab', '6a4111490e8af91685ea4f0bc33038e0085bb60360b85964a955ab9ff68d2b7c', '[\"*\"]', NULL, NULL, '2023-05-23 02:38:23', '2023-05-23 02:38:23'),
(54, 'App\\Models\\User', 1, 'clicktab', '0e313612569b525d366ac839b81b9c51905f2971a5e5eb88ba15a5b9435002c4', '[\"*\"]', NULL, NULL, '2023-05-23 06:31:21', '2023-05-23 06:31:21'),
(55, 'App\\Models\\User', 3, 'clicktab', '74b3b6d38facf926e9b041bfd94e644249c10e8ec7e6ec061b764c50d7751f70', '[\"*\"]', NULL, NULL, '2023-05-23 06:44:33', '2023-05-23 06:44:33'),
(56, 'App\\Models\\User', 3, 'clicktab', 'eecb1fffeb151f60383dfbbefa5fb92fdd59d2f5e7fc1e1958dbb5140311fa44', '[\"*\"]', NULL, NULL, '2023-05-23 17:47:32', '2023-05-23 17:47:32'),
(57, 'App\\Models\\User', 3, 'clicktab', 'a87a3b6264c1f33a1947c6e1c17bbb3223b69a5911ed4ee81644a92b3b1702c8', '[\"*\"]', NULL, NULL, '2023-05-23 15:32:04', '2023-05-23 15:32:04'),
(58, 'App\\Models\\User', 3, 'clicktab', '5f2cca284d4024c976b5ad266da49ccd37ee89ae7b0f9b53fbb77e76a2daf2aa', '[\"*\"]', NULL, NULL, '2023-05-23 15:47:16', '2023-05-23 15:47:16'),
(59, 'App\\Models\\User', 3, 'clicktab', 'ed1665be95041b69ab3e8fcbab8449a4c1b96c2d926e9a035524ae9e3962b7e0', '[\"*\"]', NULL, NULL, '2023-05-24 03:09:45', '2023-05-24 03:09:45'),
(60, 'App\\Models\\User', 3, 'clicktab', 'c4ee728adfc7f96933a50b1c64ed5d863cfa92b151fbde041a1e407cf008c713', '[\"*\"]', NULL, NULL, '2023-05-24 05:37:27', '2023-05-24 05:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`id`, `code`, `reference_code`, `name`, `address`, `telephone`, `fax`, `org_id`, `user_id`, `active_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'C6C7F52D', NULL, 'CVS', '2160 N. HIGH ST. COLUMBUS, OH, 43201', '(614) 294-2105', '(614) 294-2105', '1', 3, 1, NULL, '2023-05-06 05:26:33', '2023-05-06 05:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `physicians`
--

CREATE TABLE `physicians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credentials` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npi_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pecos_verification` tinyint(1) NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `physicians`
--

INSERT INTO `physicians` (`id`, `code`, `first_name`, `last_name`, `mi`, `credentials`, `npi_number`, `speciality`, `email`, `address_line_1`, `address_line_2`, `state`, `city`, `zip`, `primary_phone`, `alternate_phone`, `fax`, `pecos_verification`, `org_id`, `user_id`, `active_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'D60F5574', 'YAW', 'AYESU OFFEI', NULL, 'M.D.', '1225254964', 'Internal Medicine', NULL, '4384 CLEVELAND AVENUE', '1570 CLEVELAND AVE', 'OH', 'COLUMBUS', '432241578', '614-342-6215', '614-291-5657', '614-342-6239', 0, '1', 3, 1, NULL, '2023-05-06 05:25:42', '2023-05-06 05:25:42'),
(2, '5D5F6A94', 'BERNADETTE', 'ANDERSON', NULL, 'M.D.', '1750366035', 'Family Medicine', NULL, '6096 E MAIN ST', '6096 E MAIN ST', 'OH', 'COLUMBUS', '432134302', '614-577-0400', '614-577-0400', '614-577-0040', 0, '1', 3, 1, NULL, '2023-05-06 16:39:41', '2023-05-06 16:39:41'),
(3, '29514876', 'BERNADETTE', 'ANDERSON', NULL, 'M.D.', '1750366035', 'Family Medicine', NULL, '6096 E MAIN ST', '6096 E MAIN ST', 'OH', 'COLUMBUS', '432134302', '614-577-0400', '614-577-0400', '614-577-0040', 0, '1', 3, 1, NULL, '2023-05-09 02:30:40', '2023-05-09 02:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `primary_insurances`
--

CREATE TABLE `primary_insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE `races` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `race_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_addresses`
--

CREATE TABLE `referral_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referral_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_barrier` tinyint(1) NOT NULL DEFAULT 0,
  `needs_interpreter` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_diagnoses`
--

CREATE TABLE `referral_diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referral_id` bigint(20) UNSIGNED NOT NULL,
  `primary_diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recent_procedures` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertinent_secondary_co_morbidities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f2f_encounter_date` date NOT NULL,
  `performed_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_npi_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_npi_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f2f_scheduled_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_emergency_contacts`
--

CREATE TABLE `referral_emergency_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referral_id` bigint(20) UNSIGNED NOT NULL,
  `emergency_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` date NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legal_representative` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legal_representative_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legal_representative_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_language_legal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_insurances`
--

CREATE TABLE `referral_insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referral_id` bigint(20) UNSIGNED NOT NULL,
  `medicare_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicaid_no` date NOT NULL,
  `secondary_payer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mcr_advantage_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mcr_advantage_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_required` tinyint(1) NOT NULL,
  `reimbursement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_patient_id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `former_patient_id_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eligibility_checked_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_sources`
--

CREATE TABLE `referral_sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referral_id` bigint(20) UNSIGNED NOT NULL,
  `referral_sources` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_source_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discharge_facility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discharge_facility_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discharge_date` date NOT NULL,
  `admission_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isVAhospital` tinyint(1) NOT NULL,
  `referring_physician` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referring_physician_npi_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referring_physician_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certifying_physician` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certifying_physician_npi_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certifying_physician_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE `relationships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restrictions`
--

CREATE TABLE `restrictions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `restriction_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restrictions`
--

INSERT INTO `restrictions` (`id`, `employee_id`, `restriction_code`, `note`, `modified_by`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'dummy notes', NULL, 3, '2023-05-23 20:13:49', '2023-05-23 20:13:49'),
(2, 1, '85', 'some notes', NULL, 3, '2023-05-24 00:46:27', '2023-05-24 00:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(2, 'admin', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58'),
(3, 'employee', 'web', '2023-05-05 22:04:58', '2023-05-05 22:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1);

-- --------------------------------------------------------

--
-- Table structure for table `secondary_insurances`
--

CREATE TABLE `secondary_insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services_requireds`
--

CREATE TABLE `services_requireds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_workers`
--

CREATE TABLE `social_workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_workers`
--

INSERT INTO `social_workers` (`id`, `first_name`, `last_name`, `agency_branch`, `organization_id`, `tel`, `fax`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Mariame', 'Baraka', 'Columbus, Ohio', 1, '016148057633', '016148057633', 'testing', '2023-05-05 22:13:19', '2023-05-05 22:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_id_types`
--

CREATE TABLE `tax_id_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tertiary_insurances`
--

CREATE TABLE `tertiary_insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_code`, `first_name`, `last_name`, `email`, `password`, `organization_id`, `created_by`, `status`, `email_verified_at`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '44465485', 'Super Admin', 'ClickTabs', 'superadmin@clicktabs.com', '$2y$10$dEht25jFu29PeuYB5nAt4uiBjfnx8LtzpdPi7sKGuZoe4lJEUJTuO', NULL, NULL, 1, NULL, NULL, NULL, '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(2, '4564445F', 'Admin', 'ClickTabs', 'admin@clicktabs.com', '$2y$10$sISSa6HUDSnLt3xEKfnh5OLtVl7sVvAXcIGZxtHmMyDPZGw7t.YEO', NULL, NULL, 1, NULL, NULL, NULL, '2023-05-05 22:04:57', '2023-05-05 22:04:57'),
(3, 'D265D5DB', 'Nana Kwesi', 'Baisel', 'nana@gmail.com', '$2y$10$ZNNkM/3EJOzgLeegrEkEdO2tHWwS4PDlS6vDctqHwAE4mE5CdHeaG', 1, 1, 1, NULL, NULL, NULL, '2023-05-05 22:07:15', '2023-05-05 22:07:15'),
(4, '00004', 'Nana Kwesi', 'Baisel', 'nana@example.com', '$2y$10$Iac9WX4dd8uP3/3KMUmD1u6aQWPZr2pXwx/nYNMyB9JXx7UiyByaC', 1, 3, 1, NULL, NULL, NULL, '2023-05-05 22:09:53', '2023-05-05 22:09:53'),
(6, '00005', 'Joshua', 'Mcclure', 'xuxot@mailinator.com', '$2y$10$Rzb7S4THY0NWv4CfZRB19uIihP24fE7bDVlSH08Kaf6Bp55mCkVcq', 1, 3, 1, NULL, NULL, NULL, '2023-05-11 05:32:53', '2023-05-15 19:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `user_id`, `phone_number`, `dob`, `address`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, '0161430976331', '2023-05-05', '4663 Executive Dr Suite 17', NULL, '2023-05-05 22:07:15', '2023-05-05 22:07:15'),
(2, 4, '016148057633', '2023-05-04', '4633 Executive Drive', NULL, '2023-05-05 22:09:53', '2023-05-05 22:09:53'),
(3, 6, '+1 (799) 726-3267', '1995-08-23', '704 East White Cowley Extension', NULL, '2023-05-11 05:32:53', '2023-05-11 05:32:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addon_sub_categories`
--
ALTER TABLE `addon_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addon_sub_categories_addon_id_foreign` (`addon_id`);

--
-- Indexes for table `admission_sources`
--
ALTER TABLE `admission_sources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_sources_code_unique` (`code`),
  ADD UNIQUE KEY `admission_sources_reference_code_unique` (`reference_code`),
  ADD KEY `admission_sources_user_id_foreign` (`user_id`);

--
-- Indexes for table `agency_branches`
--
ALTER TABLE `agency_branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agency_branches_code_unique` (`code`),
  ADD UNIQUE KEY `agency_branches_reference_code_unique` (`reference_code`),
  ADD KEY `agency_branches_user_id_foreign` (`user_id`);

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorizations`
--
ALTER TABLE `authorizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caregivers`
--
ALTER TABLE `caregivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communications`
--
ALTER TABLE `communications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_organization_id_index` (`organization_id`);

--
-- Indexes for table `employee_activities`
--
ALTER TABLE `employee_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_activities_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employee_attachments`
--
ALTER TABLE `employee_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_attachments_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employee_bills`
--
ALTER TABLE `employee_bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_bills_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employee_expirations`
--
ALTER TABLE `employee_expirations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_expirations_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employee_pays`
--
ALTER TABLE `employee_pays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_pays_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employee_schedules`
--
ALTER TABLE `employee_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_schedules_employee_id_foreign` (`employee_id`),
  ADD KEY `employee_schedules_patient_id_foreign` (`patient_id`),
  ADD KEY `employee_schedules_service_id_foreign` (`service_id`);

--
-- Indexes for table `employee_types`
--
ALTER TABLE `employee_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_types_code_unique` (`code`),
  ADD UNIQUE KEY `employee_types_reference_code_unique` (`reference_code`),
  ADD KEY `employee_types_user_id_foreign` (`user_id`);

--
-- Indexes for table `facility_referral_sources`
--
ALTER TABLE `facility_referral_sources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facility_referral_sources_code_unique` (`code`),
  ADD UNIQUE KEY `facility_referral_sources_reference_code_unique` (`reference_code`),
  ADD KEY `facility_referral_sources_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genders_code_unique` (`code`),
  ADD UNIQUE KEY `genders_reference_code_unique` (`reference_code`),
  ADD KEY `genders_user_id_foreign` (`user_id`);

--
-- Indexes for table `immunizations`
--
ALTER TABLE `immunizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internal_referral_sources`
--
ALTER TABLE `internal_referral_sources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `internal_referral_sources_code_unique` (`code`),
  ADD UNIQUE KEY `internal_referral_sources_reference_code_unique` (`reference_code`),
  ADD KEY `internal_referral_sources_user_id_foreign` (`user_id`);

--
-- Indexes for table `in_patient_admission_codes`
--
ALTER TABLE `in_patient_admission_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `in_patient_admission_codes_code_unique` (`code`),
  ADD UNIQUE KEY `in_patient_admission_codes_reference_code_unique` (`reference_code`),
  ADD KEY `in_patient_admission_codes_user_id_foreign` (`user_id`);

--
-- Indexes for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_titles_code_unique` (`code`),
  ADD UNIQUE KEY `job_titles_reference_code_unique` (`reference_code`),
  ADD KEY `job_titles_user_id_foreign` (`user_id`);

--
-- Indexes for table `leave_groups`
--
ALTER TABLE `leave_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_groups_code_unique` (`code`),
  ADD UNIQUE KEY `leave_groups_reference_code_unique` (`reference_code`),
  ADD KEY `leave_groups_user_id_foreign` (`user_id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_addresses`
--
ALTER TABLE `organization_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_contact_people`
--
ALTER TABLE `organization_contact_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_infos`
--
ALTER TABLE `organization_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_organization_id_foreign` (`organization_id`);

--
-- Indexes for table `patient_address_infos`
--
ALTER TABLE `patient_address_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_address_infos_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_admissions`
--
ALTER TABLE `patient_admissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_admissions_organization_id_foreign` (`organization_id`),
  ADD KEY `patient_admissions_pharmacy_id_foreign` (`pharmacy_id`),
  ADD KEY `patient_admissions_physician_id_foreign` (`physician_id`),
  ADD KEY `patient_admissions_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_case_managers`
--
ALTER TABLE `patient_case_managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_case_managers_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_clinical_diagnoses`
--
ALTER TABLE `patient_clinical_diagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_clinical_diagnoses_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_discharges`
--
ALTER TABLE `patient_discharges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_discharges_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_emergency_alternate_addresses`
--
ALTER TABLE `patient_emergency_alternate_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_emergency_alternate_addresses_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_emergency_contacts`
--
ALTER TABLE `patient_emergency_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_emergency_contacts_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_episode_timings`
--
ALTER TABLE `patient_episode_timings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_episode_timings_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_extra_infos`
--
ALTER TABLE `patient_extra_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_extra_infos_patient_id_foreign` (`patient_id`),
  ADD KEY `patient_extra_infos_physician_id_foreign` (`physician_id`),
  ADD KEY `patient_extra_infos_referring_physician_id_foreign` (`referring_physician_id`),
  ADD KEY `patient_extra_infos_pharmacy_id_foreign` (`pharmacy_id`);

--
-- Indexes for table `patient_insurances`
--
ALTER TABLE `patient_insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_insurances_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_non_admit_reasons`
--
ALTER TABLE `patient_non_admit_reasons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_non_admit_reasons_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_service_addresses`
--
ALTER TABLE `patient_service_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_service_addresses_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pharmacies_code_unique` (`code`),
  ADD UNIQUE KEY `pharmacies_reference_code_unique` (`reference_code`),
  ADD KEY `pharmacies_user_id_foreign` (`user_id`);

--
-- Indexes for table `physicians`
--
ALTER TABLE `physicians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `physicians_code_unique` (`code`),
  ADD KEY `physicians_user_id_foreign` (`user_id`);

--
-- Indexes for table `primary_insurances`
--
ALTER TABLE `primary_insurances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `primary_insurances_code_unique` (`code`),
  ADD UNIQUE KEY `primary_insurances_reference_code_unique` (`reference_code`),
  ADD KEY `primary_insurances_user_id_foreign` (`user_id`);

--
-- Indexes for table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `races_code_unique` (`code`),
  ADD UNIQUE KEY `races_reference_code_unique` (`reference_code`),
  ADD KEY `races_user_id_foreign` (`user_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `referrals_referral_code_unique` (`referral_code`),
  ADD KEY `referrals_user_id_foreign` (`user_id`),
  ADD KEY `referrals_organization_id_foreign` (`organization_id`);

--
-- Indexes for table `referral_addresses`
--
ALTER TABLE `referral_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referral_addresses_referral_id_foreign` (`referral_id`);

--
-- Indexes for table `referral_diagnoses`
--
ALTER TABLE `referral_diagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referral_diagnoses_referral_id_foreign` (`referral_id`);

--
-- Indexes for table `referral_emergency_contacts`
--
ALTER TABLE `referral_emergency_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referral_emergency_contacts_referral_id_foreign` (`referral_id`);

--
-- Indexes for table `referral_insurances`
--
ALTER TABLE `referral_insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referral_insurances_referral_id_foreign` (`referral_id`);

--
-- Indexes for table `referral_sources`
--
ALTER TABLE `referral_sources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referral_sources_referral_id_foreign` (`referral_id`);

--
-- Indexes for table `relationships`
--
ALTER TABLE `relationships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `relationships_code_unique` (`code`),
  ADD UNIQUE KEY `relationships_reference_code_unique` (`reference_code`),
  ADD KEY `relationships_user_id_foreign` (`user_id`);

--
-- Indexes for table `restrictions`
--
ALTER TABLE `restrictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `secondary_insurances`
--
ALTER TABLE `secondary_insurances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `secondary_insurances_code_unique` (`code`),
  ADD UNIQUE KEY `secondary_insurances_reference_code_unique` (`reference_code`),
  ADD KEY `secondary_insurances_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_code_unique` (`code`),
  ADD UNIQUE KEY `services_reference_code_unique` (`reference_code`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Indexes for table `services_requireds`
--
ALTER TABLE `services_requireds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_requireds_code_unique` (`code`),
  ADD UNIQUE KEY `services_requireds_reference_code_unique` (`reference_code`),
  ADD KEY `services_requireds_user_id_foreign` (`user_id`);

--
-- Indexes for table `social_workers`
--
ALTER TABLE `social_workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_workers_organization_id_index` (`organization_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tax_id_types`
--
ALTER TABLE `tax_id_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_id_types_code_unique` (`code`),
  ADD UNIQUE KEY `tax_id_types_reference_code_unique` (`reference_code`),
  ADD KEY `tax_id_types_user_id_foreign` (`user_id`);

--
-- Indexes for table `tertiary_insurances`
--
ALTER TABLE `tertiary_insurances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tertiary_insurances_reference_code_unique` (`reference_code`),
  ADD KEY `tertiary_insurances_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_code_unique` (`user_code`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_organization_id_user_code_created_at_index` (`organization_id`,`user_code`,`created_at`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_infos_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `addon_sub_categories`
--
ALTER TABLE `addon_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `admission_sources`
--
ALTER TABLE `admission_sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agency_branches`
--
ALTER TABLE `agency_branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allergies`
--
ALTER TABLE `allergies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authorizations`
--
ALTER TABLE `authorizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `caregivers`
--
ALTER TABLE `caregivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communications`
--
ALTER TABLE `communications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_activities`
--
ALTER TABLE `employee_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_attachments`
--
ALTER TABLE `employee_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_bills`
--
ALTER TABLE `employee_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_expirations`
--
ALTER TABLE `employee_expirations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_pays`
--
ALTER TABLE `employee_pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_schedules`
--
ALTER TABLE `employee_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_types`
--
ALTER TABLE `employee_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility_referral_sources`
--
ALTER TABLE `facility_referral_sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `immunizations`
--
ALTER TABLE `immunizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internal_referral_sources`
--
ALTER TABLE `internal_referral_sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in_patient_admission_codes`
--
ALTER TABLE `in_patient_admission_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_groups`
--
ALTER TABLE `leave_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organization_addresses`
--
ALTER TABLE `organization_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_contact_people`
--
ALTER TABLE `organization_contact_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_infos`
--
ALTER TABLE `organization_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patient_address_infos`
--
ALTER TABLE `patient_address_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patient_admissions`
--
ALTER TABLE `patient_admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_case_managers`
--
ALTER TABLE `patient_case_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_clinical_diagnoses`
--
ALTER TABLE `patient_clinical_diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_discharges`
--
ALTER TABLE `patient_discharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_emergency_alternate_addresses`
--
ALTER TABLE `patient_emergency_alternate_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_emergency_contacts`
--
ALTER TABLE `patient_emergency_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_episode_timings`
--
ALTER TABLE `patient_episode_timings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_extra_infos`
--
ALTER TABLE `patient_extra_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_insurances`
--
ALTER TABLE `patient_insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_non_admit_reasons`
--
ALTER TABLE `patient_non_admit_reasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient_service_addresses`
--
ALTER TABLE `patient_service_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `physicians`
--
ALTER TABLE `physicians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `primary_insurances`
--
ALTER TABLE `primary_insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `races`
--
ALTER TABLE `races`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_addresses`
--
ALTER TABLE `referral_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_diagnoses`
--
ALTER TABLE `referral_diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_emergency_contacts`
--
ALTER TABLE `referral_emergency_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_insurances`
--
ALTER TABLE `referral_insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_sources`
--
ALTER TABLE `referral_sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relationships`
--
ALTER TABLE `relationships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restrictions`
--
ALTER TABLE `restrictions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `secondary_insurances`
--
ALTER TABLE `secondary_insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_requireds`
--
ALTER TABLE `services_requireds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_workers`
--
ALTER TABLE `social_workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_id_types`
--
ALTER TABLE `tax_id_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tertiary_insurances`
--
ALTER TABLE `tertiary_insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addon_sub_categories`
--
ALTER TABLE `addon_sub_categories`
  ADD CONSTRAINT `addon_sub_categories_addon_id_foreign` FOREIGN KEY (`addon_id`) REFERENCES `addons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admission_sources`
--
ALTER TABLE `admission_sources`
  ADD CONSTRAINT `admission_sources_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `agency_branches`
--
ALTER TABLE `agency_branches`
  ADD CONSTRAINT `agency_branches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_activities`
--
ALTER TABLE `employee_activities`
  ADD CONSTRAINT `employee_activities_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_attachments`
--
ALTER TABLE `employee_attachments`
  ADD CONSTRAINT `employee_attachments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_bills`
--
ALTER TABLE `employee_bills`
  ADD CONSTRAINT `employee_bills_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_expirations`
--
ALTER TABLE `employee_expirations`
  ADD CONSTRAINT `employee_expirations_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_pays`
--
ALTER TABLE `employee_pays`
  ADD CONSTRAINT `employee_pays_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_schedules`
--
ALTER TABLE `employee_schedules`
  ADD CONSTRAINT `employee_schedules_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_schedules_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_schedules_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_types`
--
ALTER TABLE `employee_types`
  ADD CONSTRAINT `employee_types_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `facility_referral_sources`
--
ALTER TABLE `facility_referral_sources`
  ADD CONSTRAINT `facility_referral_sources_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `genders`
--
ALTER TABLE `genders`
  ADD CONSTRAINT `genders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `internal_referral_sources`
--
ALTER TABLE `internal_referral_sources`
  ADD CONSTRAINT `internal_referral_sources_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `in_patient_admission_codes`
--
ALTER TABLE `in_patient_admission_codes`
  ADD CONSTRAINT `in_patient_admission_codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD CONSTRAINT `job_titles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `leave_groups`
--
ALTER TABLE `leave_groups`
  ADD CONSTRAINT `leave_groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_organization_id_foreign` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`);

--
-- Constraints for table `patient_address_infos`
--
ALTER TABLE `patient_address_infos`
  ADD CONSTRAINT `patient_address_infos_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_admissions`
--
ALTER TABLE `patient_admissions`
  ADD CONSTRAINT `patient_admissions_organization_id_foreign` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`),
  ADD CONSTRAINT `patient_admissions_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `patient_admissions_pharmacy_id_foreign` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacies` (`id`),
  ADD CONSTRAINT `patient_admissions_physician_id_foreign` FOREIGN KEY (`physician_id`) REFERENCES `physicians` (`id`);

--
-- Constraints for table `patient_case_managers`
--
ALTER TABLE `patient_case_managers`
  ADD CONSTRAINT `patient_case_managers_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_clinical_diagnoses`
--
ALTER TABLE `patient_clinical_diagnoses`
  ADD CONSTRAINT `patient_clinical_diagnoses_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_discharges`
--
ALTER TABLE `patient_discharges`
  ADD CONSTRAINT `patient_discharges_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_emergency_alternate_addresses`
--
ALTER TABLE `patient_emergency_alternate_addresses`
  ADD CONSTRAINT `patient_emergency_alternate_addresses_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_emergency_contacts`
--
ALTER TABLE `patient_emergency_contacts`
  ADD CONSTRAINT `patient_emergency_contacts_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_episode_timings`
--
ALTER TABLE `patient_episode_timings`
  ADD CONSTRAINT `patient_episode_timings_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_extra_infos`
--
ALTER TABLE `patient_extra_infos`
  ADD CONSTRAINT `patient_extra_infos_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `patient_extra_infos_pharmacy_id_foreign` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacies` (`id`),
  ADD CONSTRAINT `patient_extra_infos_physician_id_foreign` FOREIGN KEY (`physician_id`) REFERENCES `physicians` (`id`),
  ADD CONSTRAINT `patient_extra_infos_referring_physician_id_foreign` FOREIGN KEY (`referring_physician_id`) REFERENCES `physicians` (`id`);

--
-- Constraints for table `patient_insurances`
--
ALTER TABLE `patient_insurances`
  ADD CONSTRAINT `patient_insurances_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_non_admit_reasons`
--
ALTER TABLE `patient_non_admit_reasons`
  ADD CONSTRAINT `patient_non_admit_reasons_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patient_service_addresses`
--
ALTER TABLE `patient_service_addresses`
  ADD CONSTRAINT `patient_service_addresses_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD CONSTRAINT `pharmacies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `physicians`
--
ALTER TABLE `physicians`
  ADD CONSTRAINT `physicians_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `primary_insurances`
--
ALTER TABLE `primary_insurances`
  ADD CONSTRAINT `primary_insurances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `races`
--
ALTER TABLE `races`
  ADD CONSTRAINT `races_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `referrals`
--
ALTER TABLE `referrals`
  ADD CONSTRAINT `referrals_organization_id_foreign` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`),
  ADD CONSTRAINT `referrals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `referral_addresses`
--
ALTER TABLE `referral_addresses`
  ADD CONSTRAINT `referral_addresses_referral_id_foreign` FOREIGN KEY (`referral_id`) REFERENCES `referrals` (`id`);

--
-- Constraints for table `referral_diagnoses`
--
ALTER TABLE `referral_diagnoses`
  ADD CONSTRAINT `referral_diagnoses_referral_id_foreign` FOREIGN KEY (`referral_id`) REFERENCES `referrals` (`id`);

--
-- Constraints for table `referral_emergency_contacts`
--
ALTER TABLE `referral_emergency_contacts`
  ADD CONSTRAINT `referral_emergency_contacts_referral_id_foreign` FOREIGN KEY (`referral_id`) REFERENCES `referrals` (`id`);

--
-- Constraints for table `referral_insurances`
--
ALTER TABLE `referral_insurances`
  ADD CONSTRAINT `referral_insurances_referral_id_foreign` FOREIGN KEY (`referral_id`) REFERENCES `referrals` (`id`);

--
-- Constraints for table `referral_sources`
--
ALTER TABLE `referral_sources`
  ADD CONSTRAINT `referral_sources_referral_id_foreign` FOREIGN KEY (`referral_id`) REFERENCES `referrals` (`id`);

--
-- Constraints for table `relationships`
--
ALTER TABLE `relationships`
  ADD CONSTRAINT `relationships_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `secondary_insurances`
--
ALTER TABLE `secondary_insurances`
  ADD CONSTRAINT `secondary_insurances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services_requireds`
--
ALTER TABLE `services_requireds`
  ADD CONSTRAINT `services_requireds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tax_id_types`
--
ALTER TABLE `tax_id_types`
  ADD CONSTRAINT `tax_id_types_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tertiary_insurances`
--
ALTER TABLE `tertiary_insurances`
  ADD CONSTRAINT `tertiary_insurances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD CONSTRAINT `user_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
