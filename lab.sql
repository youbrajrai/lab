-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2024 at 12:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `biochemistries`
--

CREATE TABLE `biochemistries` (
  `id` bigint UNSIGNED NOT NULL,
  `report_id` bigint UNSIGNED NOT NULL,
  `urea` double(8,2) DEFAULT NULL,
  `creatinine` double(8,2) DEFAULT NULL,
  `sodium` double(8,2) DEFAULT NULL,
  `potassium` double(8,2) DEFAULT NULL,
  `blood_sugar` double(8,2) DEFAULT NULL,
  `sr_bilirubin_total_direct` double(8,2) DEFAULT NULL,
  `sr_bilirubin_total` double(8,2) DEFAULT NULL,
  `sr_bilirubin_direct` double(8,2) DEFAULT NULL,
  `alkaline_phosphatase` double(8,2) DEFAULT NULL,
  `sgpt` double(8,2) DEFAULT NULL,
  `sgot` double(8,2) DEFAULT NULL,
  `fasting_blood_sugar` double(8,2) DEFAULT NULL,
  `blood_urea` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biochemistry_reports`
--

CREATE TABLE `biochemistry_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `lab` double NOT NULL,
  `blood_sugar_r` double DEFAULT NULL,
  `blood_sugar_f` double DEFAULT NULL,
  `blood_sugar_pp` double DEFAULT NULL,
  `hba1c` double DEFAULT NULL,
  `blood_urea` double DEFAULT NULL,
  `s_ceratinine` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biochemistry_reports`
--

INSERT INTO `biochemistry_reports` (`id`, `user_id`, `name`, `age`, `sex`, `medical_examination_date`, `address`, `contact`, `referred_by`, `lab`, `blood_sugar_r`, `blood_sugar_f`, `blood_sugar_pp`, `hba1c`, `blood_urea`, `s_ceratinine`, `created_at`, `updated_at`) VALUES
(1, 7, 'Carol Foreman', 67, 'female', '1978-01-12', 'Placeat molestiae e', 'Corporis ut sed nihi', 1, 74, 34, 6, 22, 78, 19, 1, '2023-11-20 01:22:08', '2023-11-20 01:22:08'),
(2, 7, 'Valerie Parker', 67, 'male', '2023-11-20', '19975 Quigley Cliffs', '777-642-9736', NULL, 74, 34, 6, 22, 78, 19, 1, '2023-11-20 05:54:47', '2023-11-20 05:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `blood_reports`
--

CREATE TABLE `blood_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specimen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sample` int NOT NULL,
  `referred_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wbc` double(8,2) DEFAULT NULL,
  `rbc_male` double(8,2) DEFAULT NULL,
  `rbc_female` double(8,2) DEFAULT NULL,
  `hemoglobin` double(8,2) DEFAULT NULL,
  `platelets` double(8,2) DEFAULT NULL,
  `neutrophils` double(8,2) DEFAULT NULL,
  `lymphocytes` double(8,2) DEFAULT NULL,
  `eosinophils` double(8,2) DEFAULT NULL,
  `monocytes` double(8,2) DEFAULT NULL,
  `basophils` double(8,2) DEFAULT NULL,
  `pcv` double(8,2) DEFAULT NULL,
  `mcv` double(8,2) DEFAULT NULL,
  `mch` double(8,2) DEFAULT NULL,
  `mchc` double(8,2) DEFAULT NULL,
  `pt` double(8,2) DEFAULT NULL,
  `inr` double(8,2) DEFAULT NULL,
  `esr` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_reports`
--

INSERT INTO `blood_reports` (`id`, `user_id`, `name`, `age`, `sex`, `medical_examination_date`, `address`, `specimen`, `sample`, `referred_by`, `lab`, `wbc`, `rbc_male`, `rbc_female`, `hemoglobin`, `platelets`, `neutrophils`, `lymphocytes`, `eosinophils`, `monocytes`, `basophils`, `pcv`, `mcv`, `mch`, `mchc`, `pt`, `inr`, `esr`, `created_at`, `updated_at`) VALUES
(1, 7, 'Carter Riley', 22, 'female', '1996-12-14', 'Non dolores ipsum a', 'Blood', 90, '1', NULL, 16.00, 15.00, 45.00, 9.00, 8.00, 13.00, 95.00, 95.00, 65.00, 54.00, 60.00, 64.00, 69.00, 91.00, 3.00, 87.00, 72.00, '2023-11-20 01:26:52', '2023-11-20 01:26:52'),
(3, 7, 'Yvonne Mckee', 86, 'female', '1976-03-28', 'Delectus voluptatem', 'Blood', 98, '1', NULL, 25.00, 31.00, 59.00, 38.00, 66.00, 87.00, 15.00, 24.00, 34.00, 66.00, 96.00, 66.00, 75.00, 22.00, 93.00, 71.00, 98.00, '2023-11-26 22:25:33', '2023-11-26 22:25:33'),
(4, 7, 'dfds', 34, 'male', '2023-11-27', 'gdfgd', 'Blood', 432, '1', NULL, NULL, NULL, NULL, 43.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-26 22:26:16', '2023-11-26 22:26:16'),
(5, 7, 'Josianne Rogahn', 86, 'male', '2023-11-27', 'Delectus voluptatem', 'Blood', 56, NULL, NULL, 25.00, 31.00, 59.00, 38.00, 66.00, 87.00, 15.00, 24.00, 34.00, 66.00, 96.00, 66.00, 75.00, 22.00, 93.00, 71.00, 98.00, '2023-11-26 23:01:45', '2023-11-26 23:01:45'),
(6, 7, 'Keely Hill', 10, 'male', '1984-02-24', 'Non fugit tempora e', 'Blood', 5, '1', NULL, 68.00, 21.00, 4.00, 83.00, 48.00, 88.00, 1.00, 47.00, 94.00, 42.00, 27.00, 89.00, 31.00, 90.00, 21.00, 85.00, 83.00, '2023-11-26 23:02:51', '2023-11-26 23:02:51'),
(7, 7, 'Camilla Hayes', 44, 'female', '2004-11-02', 'Omnis ducimus ex do', 'Blood', 23, '1', NULL, 55.00, 38.00, 4.00, 21.00, 18.00, 37.00, 79.00, 62.00, 98.00, 38.00, 57.00, 9.00, 61.00, 63.00, 47.00, 85.00, 28.00, '2023-11-26 23:05:55', '2023-11-26 23:05:55'),
(8, 7, 'edfwedfdw', 34, 'male', '2023-12-01', 'dfd', 'Blood', 23, NULL, NULL, NULL, 5.00, 56.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-01 03:50:51', '2023-12-01 03:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `cannabies_pregnancy_tests`
--

CREATE TABLE `cannabies_pregnancy_tests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `lab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `pregnancy_test` tinyint(1) DEFAULT NULL,
  `cannabies_test` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cannabies_pregnancy_tests`
--

INSERT INTO `cannabies_pregnancy_tests` (`id`, `user_id`, `name`, `age`, `sex`, `address`, `contact`, `medical_examination_date`, `lab`, `referred_by`, `pregnancy_test`, `cannabies_test`, `created_at`, `updated_at`) VALUES
(1, 7, 'Drake Hatfield', '61', 'male', 'Sequi quos hic et ni', 'Suscipit elit volup', '2022-09-20', '89', 1, 1, 0, '2023-11-20 01:35:18', '2023-11-20 01:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_exams`
--

CREATE TABLE `general_exams` (
  `id` bigint UNSIGNED NOT NULL,
  `report_id` bigint UNSIGNED NOT NULL,
  `height` double(8,2) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `pulse` double(8,2) NOT NULL,
  `temperature` double(8,2) NOT NULL,
  `blood_pressure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jaundice` tinyint(1) NOT NULL,
  `paller` tinyint(1) NOT NULL,
  `cynosis` tinyint(1) NOT NULL,
  `clubbing` tinyint(1) NOT NULL,
  `odema` tinyint(1) NOT NULL,
  `ascitis` tinyint(1) NOT NULL,
  `lymph_node` tinyint(1) NOT NULL,
  `serious_illness` tinyint(1) NOT NULL,
  `allergy_history` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_exams`
--

INSERT INTO `general_exams` (`id`, `report_id`, `height`, `weight`, `pulse`, `temperature`, `blood_pressure`, `jaundice`, `paller`, `cynosis`, `clubbing`, `odema`, `ascitis`, `lymph_node`, `serious_illness`, `allergy_history`, `created_at`, `updated_at`) VALUES
(1, 6, 34.00, 34.00, 68.00, 96.00, '23', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-11-26 02:43:00', '2023-11-26 02:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `hematologies`
--

CREATE TABLE `hematologies` (
  `id` bigint UNSIGNED NOT NULL,
  `report_id` bigint UNSIGNED NOT NULL,
  `wbc` double(8,2) DEFAULT NULL,
  `rbc` double(8,2) DEFAULT NULL,
  `hemoglobin` double(8,2) DEFAULT NULL,
  `platelets` double(8,2) DEFAULT NULL,
  `neutrophils` double(8,2) DEFAULT NULL,
  `lymphocytes` double(8,2) DEFAULT NULL,
  `eosinophils` double(8,2) DEFAULT NULL,
  `monocytes` double(8,2) DEFAULT NULL,
  `basophils` double(8,2) DEFAULT NULL,
  `esr` double(8,2) DEFAULT NULL,
  `malaria_parasite` int DEFAULT NULL,
  `micro_filaria` int DEFAULT NULL,
  `pcv` double(8,2) DEFAULT NULL,
  `mcv` double(8,2) DEFAULT NULL,
  `mch` double(8,2) DEFAULT NULL,
  `mchc` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kidney_reports`
--

CREATE TABLE `kidney_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `lab` int NOT NULL,
  `urea` int DEFAULT NULL,
  `creatinine` int DEFAULT NULL,
  `sodium` int DEFAULT NULL,
  `potassium` int DEFAULT NULL,
  `uric_acid_male` int DEFAULT NULL,
  `uric_acid_female` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kidney_reports`
--

INSERT INTO `kidney_reports` (`id`, `user_id`, `name`, `age`, `sex`, `medical_examination_date`, `address`, `contact`, `referred_by`, `lab`, `urea`, `creatinine`, `sodium`, `potassium`, `uric_acid_male`, `uric_acid_female`, `created_at`, `updated_at`) VALUES
(1, 7, 'Aurora Wade', 61, 'female', '2013-08-09', 'Nisi quae saepe sunt', 'Asperiores libero do', 1, 79, 95, 76, 2, 28, 50, 78, '2023-11-20 01:49:04', '2023-11-20 01:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `lipid_profiles`
--

CREATE TABLE `lipid_profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `lab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_cholestrol` int DEFAULT NULL,
  `hdl_cholestrol` int DEFAULT NULL,
  `ldl_cholestrol` int DEFAULT NULL,
  `triglyceride` int DEFAULT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lipid_profiles`
--

INSERT INTO `lipid_profiles` (`id`, `user_id`, `name`, `age`, `sex`, `medical_examination_date`, `address`, `contact`, `referred_by`, `lab`, `total_cholestrol`, `hdl_cholestrol`, `ldl_cholestrol`, `triglyceride`, `others`, `created_at`, `updated_at`) VALUES
(1, 7, 'Tarik Holloway', '28', 'female', '1987-11-12', 'Consequuntur nostrud', 'Quas quis consequunt', 1, '30', 63, 57, 46, 25, 'Voluptatum est alia', '2023-11-20 01:58:01', '2023-11-20 01:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `liver_reports`
--

CREATE TABLE `liver_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `lab` int NOT NULL,
  `sr_bilirubin_total` int DEFAULT NULL,
  `sr_bilirubin_direct` int DEFAULT NULL,
  `alkaline_phosphate` int DEFAULT NULL,
  `sgpt` int DEFAULT NULL,
  `sgot` int DEFAULT NULL,
  `total_protein` int DEFAULT NULL,
  `serum_albumin` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `liver_reports`
--

INSERT INTO `liver_reports` (`id`, `user_id`, `name`, `age`, `sex`, `medical_examination_date`, `address`, `contact`, `referred_by`, `lab`, `sr_bilirubin_total`, `sr_bilirubin_direct`, `alkaline_phosphate`, `sgpt`, `sgot`, `total_protein`, `serum_albumin`, `created_at`, `updated_at`) VALUES
(1, 7, 'Orlando Hardy', 92, 'female', '2012-06-24', 'Fuga Quibusdam rati', 'Minima et perferendi', 1, 36, 36, 88, 76, 34, 91, 85, 22, '2023-11-20 02:03:52', '2023-11-20 02:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `mantoux_tests`
--

CREATE TABLE `mantoux_tests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injected_side` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'ddfc840d-4987-4a9a-b437-776559c0df16', 'images', 'custom-2', 'custom-2.svg', 'image/svg+xml', 'media', 'media', 2440, '[]', '[]', '[]', '[]', 1, '2023-09-28 02:28:03', '2023-09-28 02:28:03'),
(2, 'App\\Models\\Report', 1, '8c4e756e-cc8e-44f3-9fef-4fdc6d0026db', 'default', 'media-librarymDJEep', '651e57d3101ff.jpeg', 'image/jpeg', 'media', 'media', 33478, '[]', '[]', '[]', '[]', 1, '2023-10-05 10:29:39', '2023-10-05 10:29:39'),
(3, 'App\\Models\\User', 2, 'bcd4e135-ebac-4757-bf9a-99d3bde951d6', 'images', 'user', 'user.png', 'image/png', 'media', 'media', 5233, '[]', '[]', '[]', '[]', 1, '2023-11-07 23:54:36', '2023-11-07 23:54:36'),
(4, 'App\\Models\\User', 3, 'a0fab7a7-37f4-4cf4-befe-115e92d1f960', 'images', 'user', 'user.png', 'image/png', 'media', 'media', 5233, '[]', '[]', '[]', '[]', 1, '2023-11-08 00:41:27', '2023-11-08 00:41:27'),
(5, 'App\\Models\\User', 4, '5a101ac2-7aa7-44b9-a4c3-439df5c0231c', 'images', 'user', 'user.png', 'image/png', 'media', 'media', 5233, '[]', '[]', '[]', '[]', 1, '2023-11-08 01:06:15', '2023-11-08 01:06:15'),
(6, 'App\\Models\\User', 5, '4894fe17-519e-4a90-b5a6-43d0b39af8cb', 'images', 'true', 'true.jpg', 'image/webp', 'media', 'media', 92408, '[]', '[]', '[]', '[]', 1, '2023-11-09 23:28:40', '2023-11-09 23:28:40'),
(7, 'App\\Models\\User', 6, 'bfa64b07-80d2-4688-a53d-61c80447593c', 'images', 'user', 'user.png', 'image/png', 'media', 'media', 5233, '[]', '[]', '[]', '[]', 1, '2023-11-10 06:15:52', '2023-11-10 06:15:52'),
(8, 'App\\Models\\User', 7, '4d1f21b9-47b6-45f3-8895-edd5dcb7f781', 'images', 'user', 'user.png', 'image/png', 'media', 'media', 5233, '[]', '[]', '[]', '[]', 1, '2023-11-16 06:03:46', '2023-11-16 06:03:46'),
(9, 'App\\Models\\Report', 1, '80712e5f-1730-4110-bc78-0e0b73ff2522', 'default', 'media-libraryyg6kAO', '6556024a8ebed.jpeg', 'image/jpeg', 'media', 'media', 23402, '[]', '[]', '[]', '[]', 2, '2023-11-16 06:06:38', '2023-11-16 06:06:38'),
(10, 'App\\Models\\Report', 2, '98bfeba4-5dcb-4bc1-8105-5dd75cd9765c', 'default', 'media-libraryNVeJdT', '655609fc17b41.jpeg', 'image/jpeg', 'media', 'media', 37856, '[]', '[]', '[]', '[]', 1, '2023-11-16 06:39:28', '2023-11-16 06:39:28'),
(11, 'App\\Models\\Report', 3, '90c52d7e-2247-4c68-83ff-7f06deebaa15', 'default', 'media-librarynarzJR', '6556f351bfab9.jpeg', 'image/jpeg', 'media', 'media', 30495, '[]', '[]', '[]', '[]', 1, '2023-11-16 23:15:02', '2023-11-16 23:15:02'),
(12, 'App\\Models\\Report', 4, 'c8e6d42c-1cec-43c4-9440-941992845f71', 'default', 'media-libraryMrWJGs', '6556f38e7f0fe.jpeg', 'image/jpeg', 'media', 'media', 31212, '[]', '[]', '[]', '[]', 1, '2023-11-16 23:16:02', '2023-11-16 23:16:02'),
(13, 'App\\Models\\Report', 5, 'e415f1b9-6a6d-491f-be4b-6bc9608628b9', 'default', 'media-library2ckyZY', '65573126ea0e3.jpeg', 'image/jpeg', 'media', 'media', 30656, '[]', '[]', '[]', '[]', 1, '2023-11-17 03:38:50', '2023-11-17 03:38:50'),
(14, 'App\\Models\\User', 8, '89f11a97-be71-441b-8d1d-d655dc773da5', 'images', 'ubuntu', 'ubuntu.png', 'image/png', 'media', 'media', 13801, '[]', '[]', '[]', '[]', 1, '2023-11-23 00:54:31', '2023-11-23 00:54:31'),
(15, 'App\\Models\\Report', 6, '161cb1b2-ca76-47a5-868a-e1b5920bad7d', 'default', 'media-libraryrQEUHs', '6563014d9ecdf.jpeg', 'image/jpeg', 'media', 'media', 19052, '[]', '[]', '[]', '[]', 1, '2023-11-26 02:41:53', '2023-11-26 02:41:53'),
(16, 'App\\Models\\Report', 7, '1749d293-a12b-43b1-bffe-386c50c2b8a4', 'default', 'media-librarydTwW2i', '65630bd42ca42.jpeg', 'image/jpeg', 'media', 'media', 40746, '[]', '[]', '[]', '[]', 1, '2023-11-26 03:26:48', '2023-11-26 03:26:48'),
(17, 'App\\Models\\User', 9, '88a650ca-5309-4144-ab06-697d37ed0de4', 'images', 'true', 'true.jpg', 'image/webp', 'media', 'media', 92408, '[]', '[]', '[]', '[]', 1, '2023-11-27 04:07:05', '2023-11-27 04:07:05'),
(18, 'App\\Models\\User', 10, 'c74b156e-e154-4820-9176-5230480ca167', 'images', 'lighthouse', 'lighthouse.jpg', 'image/webp', 'media', 'media', 60390, '[]', '[]', '[]', '[]', 1, '2023-11-27 23:10:31', '2023-11-27 23:10:31'),
(19, 'App\\Models\\Report', 8, '60b598c2-2d79-49e0-b74f-6e26e266dc5e', 'default', 'media-libraryx6qbio', '65758355f1c40.jpeg', 'image/jpeg', 'media', 'media', 22360, '[]', '[]', '[]', '[]', 1, '2023-12-10 03:37:30', '2023-12-10 03:37:30'),
(20, 'App\\Models\\User', 7, '1029efac-9f1c-4378-8793-f19df4033d7b', 'images', 'custom-2', 'custom-2.svg', 'image/svg+xml', 'media', 'media', 39006, '[]', '[]', '[]', '[]', 2, '2023-12-19 00:24:34', '2023-12-19 00:24:34'),
(21, 'App\\Models\\User', 10, 'a8ea7cb3-9eb3-4c68-ae2f-d13ca2629bf6', 'images', 'custom-2', 'custom-2.svg', 'image/svg+xml', 'media', 'media', 39006, '[]', '[]', '[]', '[]', 2, '2023-12-19 01:51:58', '2023-12-19 01:51:58'),
(22, 'App\\Models\\User', 11, '5fb9df0e-b715-458e-8ef3-8e3ffaca68f7', 'images', 'custom-2', 'custom-2.svg', 'image/svg+xml', 'media', 'media', 39006, '[]', '[]', '[]', '[]', 1, '2023-12-19 02:18:50', '2023-12-19 02:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(338, '2023_09_28_080530_add_extra_field_to_liver_reports', 1),
(339, '2014_10_12_000000_create_users_table', 2),
(340, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(341, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(342, '2019_08_19_000000_create_failed_jobs_table', 2),
(343, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(344, '2023_08_24_084446_create_reports_table', 2),
(345, '2023_08_24_084739_create_general_exams_table', 2),
(346, '2023_08_24_084817_create_systemic_exams_table', 2),
(349, '2023_08_24_085003_create_serologies_table', 2),
(351, '2023_08_24_085042_create_others_table', 2),
(352, '2023_08_28_090703_add_extra_fields_to_users_table', 2),
(353, '2023_08_28_093313_create_media_table', 2),
(355, '2023_09_28_090238_create_kidney_reports_table', 3),
(358, '2023_09_28_043111_create_liver_reports_table', 5),
(359, '2023_10_02_101004_create_lipid_profiles_table', 6),
(362, '2023_10_11_062133_drop_columns_from_liver_reports_table', 9),
(363, '2023_10_11_063153_add_columns_to_lipid_profiles_table', 10),
(364, '2023_10_12_083108_create_biochemistry_reports_table', 11),
(365, '2023_10_13_081553_create_urine_reports_table', 12),
(366, '2023_10_17_064419_create_xray_reports_table', 13),
(367, '2023_10_17_073645_create_xray_reports_table', 14),
(369, '2023_10_18_042437_drop_columns_from_blood_reports_table', 16),
(371, '2023_10_18_110201_add_columns_to_reports_table', 17),
(372, '2023_10_19_120007_create_serology_reports_table', 18),
(374, '2023_10_19_122603_create_serology_reports_table', 19),
(375, '2023_10_20_055139_add_columns_to_biochemistry_reports_table', 20),
(376, '2023_10_27_093608_create_referrals_table', 21),
(378, '2023_08_24_084947_create_biochemistries_table', 23),
(379, '2023_08_24_084834_create_hematologies_table', 24),
(380, '2023_08_24_085026_create_urines_table', 25),
(385, '2023_09_29_045706_create_blood_reports_table', 26),
(393, '2023_10_17_091332_create_xray_reports_table', 30),
(398, '2023_10_31_103213_create_stool_reports_table', 32),
(400, '2023_11_02_061554_create_mantoux_tests_table', 33),
(401, '2023_11_03_074236_create_cannabies_pregnancy_tests_table', 34),
(402, '2023_10_04_102522_create_urine_reports_table', 35),
(403, '2023_11_03_155640_create_cannabies_pregnancy_tests_table', 36);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint UNSIGNED NOT NULL,
  `report_id` bigint UNSIGNED NOT NULL,
  `opiates` tinyint(1) DEFAULT NULL,
  `cannabies` tinyint(1) DEFAULT NULL,
  `mantoux_test` tinyint(1) DEFAULT NULL,
  `urine_pregnancy_test` tinyint(1) DEFAULT NULL,
  `x_ray_requested_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinical_history` tinyint(1) DEFAULT NULL,
  `request_doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opinion` text COLLATE utf8mb4_unicode_ci,
  `defect_seen` tinyint(1) DEFAULT NULL,
  `total_cholestrol` double(8,2) DEFAULT NULL,
  `hdl_cholestrol` double(8,2) DEFAULT NULL,
  `ldl_cholestrol` double(8,2) DEFAULT NULL,
  `triglyceride` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `report_id`, `opiates`, `cannabies`, `mantoux_test`, `urine_pregnancy_test`, `x_ray_requested_for`, `clinical_history`, `request_doctor`, `opinion`, `defect_seen`, `total_cholestrol`, `hdl_cholestrol`, `ldl_cholestrol`, `triglyceride`, `created_at`, `updated_at`) VALUES
(1, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-26 02:43:46', '2023-11-26 02:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` double(8,2) DEFAULT NULL,
  `paid` double(8,2) DEFAULT NULL,
  `due_paid` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `name`, `email`, `address`, `contact`, `commission`, `paid`, `due_paid`, `created_at`, `updated_at`) VALUES
(1, 'Ram Thapa', NULL, 'Kathmandu', '987654321', 2500.00, 3000.00, 2000.00, '2023-11-10 06:34:36', '2023-11-27 02:37:15'),
(2, 'Tobias Fisher', 'note@mailinator.com', '1860 Mertz Falls', '203-865-4523', 1000.00, NULL, NULL, '2023-11-27 22:38:57', '2023-11-27 22:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `referral_transaction_details`
--

CREATE TABLE `referral_transaction_details` (
  `id` bigint UNSIGNED NOT NULL,
  `referral_transaction` double(8,2) DEFAULT NULL,
  `referral_transaction_due` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `cno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_expiry` date DEFAULT NULL,
  `medical_examination_date` date NOT NULL,
  `passport_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` bigint UNSIGNED DEFAULT NULL,
  `medical_charge` double(8,2) DEFAULT NULL,
  `paid` double(8,2) DEFAULT NULL,
  `due_paid` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `cno`, `name`, `age`, `sex`, `marital_status`, `contact`, `passport_number`, `passport_expiry`, `medical_examination_date`, `passport_issue_place`, `job_title`, `nationality`, `job_country`, `referred_by`, `medical_charge`, `paid`, `due_paid`, `created_at`, `updated_at`) VALUES
(1, 7, 'UDC112', 'Genevieve Lowe', 55, 'male', 'married', '643-604-7913', 'P-84546447', '2030-12-16', '2023-11-19', NULL, 'Argentina', 'Nepali', NULL, 1, 4500.00, 2000.00, 1300.00, '2023-11-16 06:06:38', '2023-11-16 06:26:01'),
(2, 7, 'UDC113', 'Gail Bosco', 55, 'male', 'single', '614-802-0997', 'P-845464758', '2032-12-16', '2023-11-19', NULL, 'Philippines', 'Nepali', NULL, 1, 4500.00, 2000.00, 2500.00, '2023-11-16 06:39:28', '2023-11-17 03:41:45'),
(3, 7, '23', 'FName', 45, 'male', 'single', '45353454', '435435345', '2023-11-19', '2023-11-17', NULL, 'Malaysia', 'Nepali', NULL, NULL, 4500.00, 3000.00, NULL, '2023-11-16 23:15:01', '2023-11-16 23:15:01'),
(4, 7, '43', 'fdshdf', 34, 'male', 'single', '3423422', '32423423', '2023-11-21', '2023-11-17', 'Arghakhanchi', 'Guadeloupe', 'Nepali', NULL, 1, 4500.00, 2500.00, NULL, '2023-11-16 23:16:02', '2023-11-16 23:16:02'),
(5, 7, '23', 'fsdsfsd', 45, 'male', 'single', '343242', NULL, NULL, '2023-11-17', 'Baitadi', 'Guatemala', 'Nepali', NULL, 1, 4500.00, 0.00, 4500.00, '2023-11-17 03:38:50', '2023-11-17 03:41:18'),
(8, 9, '23', 'dfsdf', 23, 'male', 'single', '23243234', '342432', '2023-12-21', '2023-12-10', 'Bajhang', 'Åland Islands', 'Nepali', NULL, 1, 4500.00, 2000.00, NULL, '2023-12-10 03:37:29', '2023-12-10 03:37:29'),
(9, 9, 'Autem dolore Nam inv', 'Linus Kline', 76, 'male', 'married', 'Ex consequat Fugiat', '209', '2021-12-12', '2016-09-06', 'Sindhupalchowk', 'Lithuania', 'Alias voluptatibus d', NULL, 2, 4000.00, 2500.00, NULL, '2023-12-10 06:22:16', '2023-12-10 06:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `report_transaction_details`
--

CREATE TABLE `report_transaction_details` (
  `id` bigint UNSIGNED NOT NULL,
  `report_transaction` double(8,2) DEFAULT NULL,
  `report_transaction_due` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-12-14 00:52:28', '2023-12-14 00:52:28'),
(3, 'Main Report Handler', '2023-12-14 00:51:30', '2023-12-14 01:11:24'),
(4, 'Blood Report Handler', '2023-12-14 05:59:27', '2023-12-14 05:59:27'),
(5, 'Urine Examination Handler', '2023-12-14 05:59:53', '2023-12-14 05:59:53'),
(6, 'CannabiesPregnancyTest Handler', '2023-12-14 06:00:17', '2023-12-14 06:00:17'),
(7, 'Xray Report Handler', '2023-12-14 06:00:36', '2023-12-14 06:00:36'),
(8, 'Stool Examination Handler', '2023-12-14 06:00:48', '2023-12-14 06:00:48'),
(9, 'Mantoux Test Handler', '2023-12-14 06:01:03', '2023-12-14 06:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `serologies`
--

CREATE TABLE `serologies` (
  `id` bigint UNSIGNED NOT NULL,
  `report_id` bigint UNSIGNED NOT NULL,
  `hbs_ag` tinyint(1) DEFAULT NULL,
  `anti_hiv` tinyint(1) DEFAULT NULL,
  `anti_hcv` tinyint(1) DEFAULT NULL,
  `vdrl` tinyint(1) DEFAULT NULL,
  `tpha` tinyint(1) DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malaria_parasite` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serologies`
--

INSERT INTO `serologies` (`id`, `report_id`, `hbs_ag`, `anti_hiv`, `anti_hcv`, `vdrl`, `tpha`, `blood_group`, `malaria_parasite`, `created_at`, `updated_at`) VALUES
(1, 6, 0, 0, 0, 0, 0, 'O+ve', NULL, '2023-11-26 02:43:39', '2023-11-26 02:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `serology_reports`
--

CREATE TABLE `serology_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `lab` int NOT NULL,
  `hiv_test` tinyint(1) DEFAULT NULL,
  `hcv` tinyint(1) DEFAULT NULL,
  `hbs_ag` tinyint(1) DEFAULT NULL,
  `vdrl` tinyint(1) DEFAULT NULL,
  `tpha` tinyint(1) DEFAULT NULL,
  `rheumatoid` tinyint(1) DEFAULT NULL,
  `crp` tinyint(1) DEFAULT NULL,
  `aso_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sr_k39` tinyint(1) DEFAULT NULL,
  `optimal_test` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serology_reports`
--

INSERT INTO `serology_reports` (`id`, `user_id`, `name`, `age`, `sex`, `medical_examination_date`, `address`, `contact`, `referred_by`, `lab`, `hiv_test`, `hcv`, `hbs_ag`, `vdrl`, `tpha`, `rheumatoid`, `crp`, `aso_titre`, `sr_k39`, `optimal_test`, `created_at`, `updated_at`) VALUES
(1, 7, 'Carol Haynes', 23, 'male', '1981-04-01', 'Dolorum quia eaque i', 'Nesciunt provident', 1, 76, 0, 1, -1, -1, 1, 1, 1, NULL, NULL, NULL, '2023-11-20 02:11:21', '2023-11-20 02:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `stool_reports`
--

CREATE TABLE `stool_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `lab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consistency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mucus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocult_blood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemical_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protozoal_parasite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cyst_of` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tryphozoite_of` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helmeinthic_parasite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_b_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pus_cells` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `undigested_food` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `microscopic_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stool_reports`
--

INSERT INTO `stool_reports` (`id`, `user_id`, `name`, `age`, `sex`, `contact`, `medical_examination_date`, `referred_by`, `lab`, `consistency`, `colour`, `blood`, `mucus`, `reaction`, `ocult_blood`, `r_s`, `chemical_others`, `protozoal_parasite`, `cyst_of`, `tryphozoite_of`, `helmeinthic_parasite`, `r_b_c`, `pus_cells`, `undigested_food`, `microscopic_others`, `created_at`, `updated_at`) VALUES
(1, 7, 'Xanthus Strickland', '3', 'female', 'Dolorem perspiciatis', '1977-09-21', 1, '60', 'Mollitia impedit vo', 'Laboris veritatis it', 'Assumenda adipisicin', 'Esse voluptatum est', 'Optio cumque et vit', 'Ipsam odit laborum', 'Fuga Reprehenderit', 'Nemo ut commodi omni', NULL, 'Irure reprehenderit', 'Et et dolorum eiusmo', 'Illo aliqua Ipsum e', 'Corporis consectetur', 'Libero nihil libero', 'Sit provident fugi', 'Non nisi officia occ', '2023-11-20 02:42:25', '2023-11-20 02:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `systemic_exams`
--

CREATE TABLE `systemic_exams` (
  `id` bigint UNSIGNED NOT NULL,
  `report_id` bigint UNSIGNED NOT NULL,
  `cardiovascular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pulmonary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gastroenterology` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neurology` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `musculoskeletal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genitourinary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dental` tinyint(1) DEFAULT NULL,
  `extremities_deformities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `varicose_veins` tinyint(1) DEFAULT NULL,
  `hernia` tinyint(1) DEFAULT NULL,
  `hydrocele` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_eye` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_eye` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_ear` tinyint(1) DEFAULT NULL,
  `right_ear` tinyint(1) DEFAULT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chest_x_ray` tinyint(1) DEFAULT NULL,
  `ecg` tinyint(1) DEFAULT NULL,
  `clinical_impression` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `systemic_exams`
--

INSERT INTO `systemic_exams` (`id`, `report_id`, `cardiovascular`, `pulmonary`, `gastroenterology`, `neurology`, `musculoskeletal`, `genitourinary`, `dental`, `extremities_deformities`, `varicose_veins`, `hernia`, `hydrocele`, `left_eye`, `right_eye`, `left_ear`, `right_ear`, `others`, `chest_x_ray`, `ecg`, `clinical_impression`, `created_at`, `updated_at`) VALUES
(1, 6, 'NAD', 'NAD', 'NAD', 'NAD', 'NAD', 'NAD', 1, 'NAD', 0, 0, 'Absent', '6/6', '6/6', 1, 1, 'N/A', 1, 1, 1, '2023-11-26 02:43:08', '2023-11-26 02:43:08'),
(2, 6, 'NAD', 'NAD', 'NAD', 'NAD', 'NAD', 'NAD', 1, 'NAD', 0, 0, 'Absent', '6/6', '6/6', 1, 1, 'N/A', 1, 1, 1, '2023-11-26 02:43:09', '2023-11-26 02:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `urines`
--

CREATE TABLE `urines` (
  `id` bigint UNSIGNED NOT NULL,
  `report_id` bigint UNSIGNED NOT NULL,
  `urine_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transparency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albumin_sugar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albumin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urobilinogen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bile_salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bile_pigment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acetone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketone_bodies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pus_cells` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rbc_hpf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epithelial_cells` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urates` double(8,2) DEFAULT NULL,
  `casts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_oxalate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urines`
--

INSERT INTO `urines` (`id`, `report_id`, `urine_color`, `transparency`, `reaction`, `albumin_sugar`, `albumin`, `sugar`, `urobilinogen`, `bile_salt`, `bile_pigment`, `acetone`, `ketone_bodies`, `nitrite`, `pus_cells`, `rbc_hpf`, `epithelial_cells`, `urates`, `casts`, `ca_oxalate`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, NULL, NULL, 'Nil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '32', 'Nil', '232', NULL, NULL, NULL, '2023-11-26 02:43:44', '2023-11-26 02:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `urine_reports`
--

CREATE TABLE `urine_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `referred_by` bigint DEFAULT NULL,
  `lab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transparency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_gravity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albumin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sugar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urobilinogen` tinyint(1) DEFAULT NULL,
  `bile_salt` tinyint(1) DEFAULT NULL,
  `bile_pigment` tinyint(1) DEFAULT NULL,
  `pus_cell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rbc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epithelial_cells` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `casts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ca_oxalate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acetone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketone_bodies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nitrite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urine_reports`
--

INSERT INTO `urine_reports` (`id`, `user_id`, `name`, `age`, `sex`, `address`, `contact`, `medical_examination_date`, `referred_by`, `lab`, `color`, `transparency`, `sp_gravity`, `reaction`, `albumin`, `sugar`, `urobilinogen`, `bile_salt`, `bile_pigment`, `pus_cell`, `rbc`, `epithelial_cells`, `urates`, `casts`, `ca_oxalate`, `other`, `acetone`, `ketone_bodies`, `nitrite`, `created_at`, `updated_at`) VALUES
(1, 7, 'Lunea Dillard', '44', 'female', 'Non pariatur Dicta', 'Velit quos quam nisi', '1974-12-25', 1, '54', 'Voluptatem Aut solu', 'Tempor anim ut in of', 'Vitae lorem qui aute', 'Sunt culpa ut et nos', 'Quis magnam placeat', 'Molestiae consectetu', 0, 1, -1, 'Incidunt eius sed f', 'Cum earum quo velit', 'Earum architecto nis', 'In tempor commodo no', 'Beatae quis dolores', 'Et in iusto reiciend', 'Lorem qui numquam et', NULL, NULL, NULL, '2023-11-20 02:50:02', '2023-11-20 02:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regd_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `fname`, `name`, `email`, `email_verified_at`, `password`, `company_name`, `address`, `phone`, `regd_no`, `website`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '[\"1\"]', 'UDC Medical', 'UDCMedical', 'udc.medical@gmail.com', NULL, '$2y$12$es2SoGt7pmqkun55y.jXa.c7loFlR3WWD1jdKf3A.n0zg3A2WbzGq', 'Universal Diagnostic Center Pvt. Ltd.', 'Pingalasthan-8, Pashupati Vision, Gaushala, Kathmadu', '01-5913695/01-4580410', '20143/420/360', 'www.udclab.com', NULL, NULL, NULL, NULL, '2023-09-28 02:28:03', '2023-12-27 05:00:16'),
(7, '[\"3\",\"4\"]', '', 'Demo', 'demo@gmail.com', NULL, '$2y$12$J5UmHWglAyr8KwpZe5EIkO8MsqXZ.aoFWlY4nUBuN5dgcfD45pImW', 'Demo Company', 'Kathmandu', '455-347-7997', 'REG-2345', 'www.demo.com', NULL, NULL, NULL, NULL, '2023-11-16 06:03:46', '2023-12-19 00:24:34'),
(9, '[\"1\"]', '', 'Admin User', 'adminuser@gmail.com', NULL, '$2y$10$mTwv9gjD9jvkG2/yDGOC4OcKeD9joX4ofHBcYk3dN.jqLQQ7Tvb.m', 'Luettgen Inc', '645 Corwin Key', '6942568713', 'REG:74125', 'www.adminuser.com', NULL, NULL, NULL, NULL, '2023-11-27 04:07:05', '2023-11-27 04:07:05'),
(10, '[\"4\",\"6\",\"3\",\"9\",\"8\",\"5\",\"7\"]', '', 'Staff User', 'staffuser@gmail.com', NULL, '$2y$10$PKdhh/6Q0Rty0j35KjpTRuM6KpOp1RoKdlFj48n/bNB9U1VzSObJq', 'Walsh, Gorczany and Predovic', '389 Leola Court', '8942945600', 'REG:466-128', 'www.staffuser.com', NULL, NULL, NULL, NULL, '2023-11-27 23:10:31', '2023-12-19 01:51:58'),
(11, '[\"7\"]', 'Xray Lab Staff', 'XrayLabStaff', 'xraylabstaff@gmail.com', NULL, '$2y$10$1zmnfxjgRTwR/dw2idb2tuKQ85tE3J5ItPMV11AFPuSZ0h/AtiA2u', 'Universal Diagnostic Center Pvt. Ltd.', 'Universal Diagnostic Center Pvt. Ltd.', '01-5913695/01-4580410', '20143/420/360', 'www.udclab.com', NULL, NULL, NULL, NULL, '2023-12-19 02:18:50', '2023-12-28 00:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `xray_reports`
--

CREATE TABLE `xray_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinical_history` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinical_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requested_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_examination_date` date NOT NULL,
  `radiologist_opinion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `defect_seen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xray_reports`
--

INSERT INTO `xray_reports` (`id`, `user_id`, `name`, `age`, `sex`, `country`, `requested_for`, `clinical_history`, `clinical_other`, `requested_by`, `medical_examination_date`, `radiologist_opinion`, `defect_seen`, `other`, `created_at`, `updated_at`) VALUES
(1, 13, 'BASDYAL', '30', 'male', 'Kathmandu', 'CHEST', 'Normal', NULL, 'Bhawani Yadav', '2023-12-27', NULL, 'Normal', NULL, '2023-12-27 05:06:08', '2023-12-27 05:06:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biochemistries`
--
ALTER TABLE `biochemistries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biochemistries_report_id_foreign` (`report_id`);

--
-- Indexes for table `biochemistry_reports`
--
ALTER TABLE `biochemistry_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biochemistry_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `blood_reports`
--
ALTER TABLE `blood_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `cannabies_pregnancy_tests`
--
ALTER TABLE `cannabies_pregnancy_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cannabies_pregnancy_tests_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_exams`
--
ALTER TABLE `general_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_exams_report_id_foreign` (`report_id`);

--
-- Indexes for table `hematologies`
--
ALTER TABLE `hematologies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hematologies_report_id_foreign` (`report_id`);

--
-- Indexes for table `kidney_reports`
--
ALTER TABLE `kidney_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kidney_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `lipid_profiles`
--
ALTER TABLE `lipid_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lipid_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `liver_reports`
--
ALTER TABLE `liver_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liver_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `mantoux_tests`
--
ALTER TABLE `mantoux_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mantoux_tests_user_id_foreign` (`user_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `others_report_id_foreign` (`report_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `referrals_email_unique` (`email`);

--
-- Indexes for table `referral_transaction_details`
--
ALTER TABLE `referral_transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`),
  ADD KEY `referred_by` (`referred_by`);

--
-- Indexes for table `report_transaction_details`
--
ALTER TABLE `report_transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serologies`
--
ALTER TABLE `serologies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serologies_report_id_foreign` (`report_id`);

--
-- Indexes for table `serology_reports`
--
ALTER TABLE `serology_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `serology_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `stool_reports`
--
ALTER TABLE `stool_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stool_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `systemic_exams`
--
ALTER TABLE `systemic_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `systemic_exams_report_id_foreign` (`report_id`);

--
-- Indexes for table `urines`
--
ALTER TABLE `urines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `urines_report_id_foreign` (`report_id`);

--
-- Indexes for table `urine_reports`
--
ALTER TABLE `urine_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `urine_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_name_unique` (`name`);

--
-- Indexes for table `xray_reports`
--
ALTER TABLE `xray_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xray_reports_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biochemistries`
--
ALTER TABLE `biochemistries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biochemistry_reports`
--
ALTER TABLE `biochemistry_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_reports`
--
ALTER TABLE `blood_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cannabies_pregnancy_tests`
--
ALTER TABLE `cannabies_pregnancy_tests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_exams`
--
ALTER TABLE `general_exams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hematologies`
--
ALTER TABLE `hematologies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kidney_reports`
--
ALTER TABLE `kidney_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lipid_profiles`
--
ALTER TABLE `lipid_profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `liver_reports`
--
ALTER TABLE `liver_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mantoux_tests`
--
ALTER TABLE `mantoux_tests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `referral_transaction_details`
--
ALTER TABLE `referral_transaction_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report_transaction_details`
--
ALTER TABLE `report_transaction_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `serologies`
--
ALTER TABLE `serologies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `serology_reports`
--
ALTER TABLE `serology_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stool_reports`
--
ALTER TABLE `stool_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `systemic_exams`
--
ALTER TABLE `systemic_exams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `urines`
--
ALTER TABLE `urines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `urine_reports`
--
ALTER TABLE `urine_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `xray_reports`
--
ALTER TABLE `xray_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biochemistries`
--
ALTER TABLE `biochemistries`
  ADD CONSTRAINT `biochemistries_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `biochemistry_reports`
--
ALTER TABLE `biochemistry_reports`
  ADD CONSTRAINT `biochemistry_reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blood_reports`
--
ALTER TABLE `blood_reports`
  ADD CONSTRAINT `blood_reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cannabies_pregnancy_tests`
--
ALTER TABLE `cannabies_pregnancy_tests`
  ADD CONSTRAINT `cannabies_pregnancy_tests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hematologies`
--
ALTER TABLE `hematologies`
  ADD CONSTRAINT `hematologies_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
