-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 09:37 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica_c3`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_no` int(11) NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_billing`
--

CREATE TABLE `account_billing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `doctor_name`, `clinic_name`, `date_time`, `name`, `address`, `country`, `region`, `created_at`, `updated_at`) VALUES
(7, 2, 5, 'Yaseen', 'Sahara', '2019-11-01 13:00:00', 'Hamza', 'state life', 'pakistan', 'asia', '2019-10-31 21:28:45', '2019-10-31 21:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `appointment_id`, `card_number`, `amount`, `created_at`, `updated_at`) VALUES
(7, 7, '35135176387123', 2000, '2019-10-31 21:28:55', '2019-10-31 21:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `clinic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `user_id`, `clinic_name`, `email`, `password`, `address`, `contact_no`, `created_at`, `updated_at`) VALUES
(1, 3, 'Sahara', 'sahara@gmail.com', '$2y$10$PF475Pmnc8E9bb/wpBD.IeOiPUt/usK4nFW/k2zzIYhZ8jFzolEje', 'state life', '04236866108', '2019-10-16 09:54:26', '2019-10-16 09:56:16'),
(2, 5, 'ayeshaclinic', 'ayeshaclinic@hotmail.com', '$2y$10$QVRpyAF9AK6brh4oF.yS7e3c0aW0hDqQCrjBkJCtHNnRqeKt2FeRi', 'near uet', '835928435', '2019-10-18 06:23:15', '2019-10-18 06:23:15'),
(3, 12, 'SaraClinic', 'saraclinic@gmail.com', '$2y$10$lpNWDX0IJN6q6r1R/2IeCuP4Xz1NZI9Bt68SZcqPEQQbshe/8tE82', 'state life 6', '04236866108', '2019-10-31 21:22:52', '2019-10-31 21:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialization_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `cnic`, `doctor_name`, `email`, `password`, `age`, `gender`, `phone_no`, `address`, `path`, `experience`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '35201526532735', 'Daim Nawab', 'daim@gmail.com', '$2y$10$mRf/GYsfJvGtCl6gPdZeZejgD4DnASgCCq7S9nAbsh5fet6wi8/H2', 33, 'Male', '03456721321', '8 wheat men roadd', 'gettyimages-680482624-2048x2048.jpg', 'okay', 'Active', '2019-10-16 08:32:59', '2019-10-16 09:24:15'),
(4, 11, '3520253099571', 'ali', 'ali@test.com', '$2y$10$BhX3MsVbLe8Ydqpl9gWdoO79upsM031xUGeJc85FldAf16BYhsF.6', 20, 'Male', '23142513624673574', 'adasdasda', 'gettyimages-823884802-2048x2048.jpg', 'asdasd', 'Active', '2019-10-31 06:51:45', '2019-10-31 06:51:45'),
(5, 13, '3520108556232', 'Yaseen', 'yaseen@gmail.com', '$2y$10$1QNShfslwE1c0UNSWGdwV.MStPiYR/JJuQmD0x8xRzIx5OtuYR4P6', 24, 'Male', '04237654321', 'near uet', 'gettyimages-511583494-2048x2048.jpg', 'I have worked in cardiology for 10 years', 'Active', '2019-10-31 21:24:53', '2019-10-31 21:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_specialization`
--

CREATE TABLE `doctor_specialization` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `specialization_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_specialization`
--

INSERT INTO `doctor_specialization` (`id`, `doctor_id`, `specialization_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 1, 1, NULL, NULL),
(4, 5, 1, NULL, NULL),
(5, 5, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `degree_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `doctor_id`, `degree_name`, `institution_name`, `created_at`, `updated_at`) VALUES
(1, 2, 'matric', 'laurel bank school', '2019-10-19 12:16:41', '2019-10-19 12:16:41'),
(2, 1, 'matric', 'laurel bank school', '2019-10-30 10:57:42', '2019-10-30 10:57:42'),
(3, 1, 'inter', 'Shalimar College', '2019-10-30 10:57:58', '2019-10-30 10:57:58'),
(4, 1, 'mbbs', 'king edward', '2019-10-30 10:58:15', '2019-10-30 10:58:15'),
(5, 5, 'mbbs', 'king edward', '2019-10-31 21:26:16', '2019-10-31 21:26:16'),
(6, 5, 'matric', 'Shalimar College', '2019-11-01 06:29:27', '2019-11-01 06:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `heads`
--

CREATE TABLE `heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heads`
--

INSERT INTO `heads` (`id`, `user_id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(3, 8, 'Haroon', 'haroonzaib.gcu@gmail.com', 'ef648d32dcecf8e03e00fc8751b3ef3d', 'admin', NULL, NULL),
(4, 9, 'Sherry', 'sherry1012@gmail.com', 'b92593cb220429000c52740c30b6d1ad', 'moderator', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE `lab_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_prescription`
--

CREATE TABLE `lab_test_prescription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lab_test_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicine_cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_prescription`
--

CREATE TABLE `medicine_prescription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `precription_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_09_14_215953_create_patients_table', 1),
(4, '2019_09_14_222213_create_doctors_table', 1),
(5, '2019_09_14_224537_create_specializations_table', 1),
(6, '2019_09_14_225240_create_doctor_specialization_table', 1),
(7, '2019_09_14_230104_create_education_table', 1),
(8, '2019_09_14_230741_create_diseases_table', 1),
(9, '2019_09_14_233230_create_clinics_table', 1),
(10, '2019_09_14_235039_create_patient_histories_table', 1),
(11, '2019_09_14_235523_create_prescriptions_table', 1),
(12, '2019_09_15_000258_create_medicines_table', 1),
(13, '2019_09_15_000630_create_medicine_prescription_table', 1),
(14, '2019_09_15_001326_create_appointments_table', 1),
(15, '2019_09_15_002136_create_lab_tests_table', 1),
(16, '2019_09_15_002712_create_lab_test_prescription_table', 1),
(17, '2019_09_15_003551_create_practices_table', 1),
(18, '2019_09_15_004251_create_slots_table', 1),
(19, '2019_09_15_004529_create_days_table', 1),
(20, '2019_09_15_004546_create_times_table', 1),
(21, '2019_09_15_005131_create_billings_table', 1),
(22, '2019_09_15_005159_create_accounts_table', 1),
(23, '2019_09_15_005704_create_account_billing_table', 1),
(24, '2019_10_19_175244_create_update_histories_table', 2),
(25, '2019_10_22_102349_create_heads_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('haroonzaib.gcu@gmail.com', '$2y$10$Xz7kfu3.nB9InlpMeHTmPew2T2q.Xznv1ZuBLkHcFMNodHEfIB4D2', '2019-10-22 06:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `cnic`, `patient_name`, `email`, `password`, `age`, `gender`, `phone_no`, `path`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, '3653712317314', 'Haroon', 'haroon@gmail.com', '$2y$10$B9rt3XXIKyYhsyAJKfm1Cews25q.Ep9zra5ntSlkRJ8EfKYc8T2UO', 24, 'Male', '03478415268', 'gettyimages-695831248-2048x2048.jpg', '8 wheat men road', '2019-10-16 09:32:28', '2019-10-16 09:49:35'),
(2, 14, '3520167975223', 'Hamza', 'hamza@gmail.com', '$2y$10$2ruqwctcHt8Oyd73KmyCQupVFyqP.rDe/pbtFeLsF2U9L0CQU0T6y', 25, 'Male', '0423686543', 'gettyimages-857357236-2048x2048.jpg', 'state life', '2019-10-31 21:27:44', '2019-10-31 21:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `patient_histories`
--

CREATE TABLE `patient_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `doctor_treated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicines` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_tests` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_histories`
--

INSERT INTO `patient_histories` (`id`, `patient_id`, `prescription_id`, `doctor_treated`, `name`, `address`, `age`, `notes`, `diagnosis`, `medicines`, `lab_tests`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 'Yaseen', 'Hamza', 'state life', 25, 'you must take one tablet in morning and one in evening', 'headache', 'panadol', 'not required', '2019-10-31 21:30:36', '2019-10-31 21:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `practices`
--

CREATE TABLE `practices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `clinic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_code` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `practices`
--

INSERT INTO `practices` (`id`, `doctor_id`, `doctor_name`, `clinic_id`, `clinic_name`, `fee`, `status`, `id_code`, `created_at`, `updated_at`) VALUES
(5, 5, 'Yaseen', 1, 'Sahara', 2000, 'Active', 98, '2019-10-31 21:25:47', '2019-10-31 21:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appoinment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicines` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_tests` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `appoinment_id`, `patient_id`, `name`, `address`, `age`, `notes`, `diagnosis`, `medicines`, `lab_tests`, `created_at`, `updated_at`) VALUES
(3, 7, 2, 'Hamza', 'state life', 25, 'you must take one tablet in morning and one in evening', 'headache', 'panadol', 'not required', '2019-10-31 21:30:36', '2019-10-31 21:30:36'),
(4, 7, 2, 'Hamza', 'state life', 25, 'you must take one tablet in morning and one in evening', 'headache', 'panadol', 'not required', '2019-10-31 21:31:32', '2019-10-31 21:31:32'),
(5, 7, 2, 'Hamza', 'state life', 25, 'you must take one tablet in morning and one in evening', 'headache', 'panadol', 'not required', '2019-10-31 21:36:26', '2019-10-31 21:36:26'),
(6, 7, 2, 'Hamza', 'state life', 25, 'you must take one tablet in morning and one in evening', 'headache', 'panadol', 'not required', '2019-10-31 21:39:13', '2019-10-31 21:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `practice_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cardiologist', NULL, NULL),
(2, 'Dermatologist', NULL, NULL),
(3, 'Endocrinologist', NULL, NULL),
(4, 'Gastroenterologist', NULL, NULL),
(5, 'Nephrologist', NULL, NULL),
(6, 'Neurologist', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `timeslot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `update_histories`
--

CREATE TABLE `update_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_treated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicines` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_tests` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_histories`
--

INSERT INTO `update_histories` (`id`, `prescription_id`, `patient_id`, `doctor_treated`, `name`, `address`, `age`, `notes`, `diagnosis`, `medicines`, `lab_tests`, `created_at`, `updated_at`) VALUES
(6, 3, 2, 'Yaseen', 'Hamza', 'state life', 25, 'take only one tablet each day', 'headache', 'panadol', 'not required', '2019-10-31 21:43:48', '2019-10-31 21:43:48'),
(8, 3, 2, 'Yaseen', 'Hamza', 'state life', 25, 'take rest only', 'headache', 'No medicien required now', 'not required', '2019-10-31 21:52:11', '2019-10-31 21:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daim Nawab', 'daim@gmail.com', NULL, '$2y$10$mRf/GYsfJvGtCl6gPdZeZejgD4DnASgCCq7S9nAbsh5fet6wi8/H2', NULL, '2019-10-16 08:32:07', '2019-10-16 09:24:15'),
(2, 'Haroon', 'haroon@gmail.com', NULL, '$2y$10$B9rt3XXIKyYhsyAJKfm1Cews25q.Ep9zra5ntSlkRJ8EfKYc8T2UO', NULL, '2019-10-16 09:31:51', '2019-10-16 09:49:35'),
(3, 'Sahara', 'sahara@gmail.com', NULL, '$2y$10$PF475Pmnc8E9bb/wpBD.IeOiPUt/usK4nFW/k2zzIYhZ8jFzolEje', NULL, '2019-10-16 09:54:03', '2019-10-16 09:56:16'),
(4, 'sherry', 'sherry@hotmail.com', NULL, '$2y$10$TKXDamqQJSmf03G0fd/VFeloeydkpUfrG.zn2s8VzzUCuEJYphBPi', NULL, '2019-10-18 06:10:08', '2019-10-18 06:10:08'),
(5, 'ayeshaclinic', 'ayeshaclinic@hotmail.com', NULL, '$2y$10$QVRpyAF9AK6brh4oF.yS7e3c0aW0hDqQCrjBkJCtHNnRqeKt2FeRi', NULL, '2019-10-18 06:23:02', '2019-10-18 06:23:02'),
(8, 'Haroon', 'haroonzaib.gcu@gmail.com', NULL, '$2y$10$zQWvGX0XDZi4fmdmlEiAfO9HM6YdKq4bdhVGQm0.B5a4OjLRBOZq.', NULL, '2019-10-22 06:10:08', '2019-10-22 06:10:08'),
(9, 'Sherry', 'sherry1012@gmail.com', NULL, '$2y$10$odhn7k4APRPZnqwqsaAzvOVALdBCX.6NXuE8WI0R9A9gSvooCwE/K', NULL, '2019-10-22 06:11:40', '2019-10-22 06:11:40'),
(10, 'hasnain', 'hasnain@gmail.com', NULL, '$2y$10$0kru0o/qvjvjaMjZBEs/BOfTF0Zb0z.FLPdQ/iyZ/q9LPc8DFI3iG', NULL, '2019-10-24 13:59:42', '2019-10-24 13:59:42'),
(11, 'ali', 'ali@test.com', NULL, '$2y$10$BhX3MsVbLe8Ydqpl9gWdoO79upsM031xUGeJc85FldAf16BYhsF.6', NULL, '2019-10-31 06:50:39', '2019-10-31 06:50:39'),
(12, 'SaraClinic', 'saraclinic@gmail.com', NULL, '$2y$10$lpNWDX0IJN6q6r1R/2IeCuP4Xz1NZI9Bt68SZcqPEQQbshe/8tE82', NULL, '2019-10-31 21:22:14', '2019-10-31 21:22:14'),
(13, 'Yaseen', 'yaseen@gmail.com', NULL, '$2y$10$1QNShfslwE1c0UNSWGdwV.MStPiYR/JJuQmD0x8xRzIx5OtuYR4P6', NULL, '2019-10-31 21:23:42', '2019-10-31 21:23:42'),
(14, 'Hamza', 'hamza@gmail.com', NULL, '$2y$10$2ruqwctcHt8Oyd73KmyCQupVFyqP.rDe/pbtFeLsF2U9L0CQU0T6y', NULL, '2019-10-31 21:26:56', '2019-10-31 21:48:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_billing`
--
ALTER TABLE `account_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_specialization`
--
ALTER TABLE `doctor_specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heads`
--
ALTER TABLE `heads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `heads_email_unique` (`email`);

--
-- Indexes for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_test_prescription`
--
ALTER TABLE `lab_test_prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_prescription`
--
ALTER TABLE `medicine_prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_histories`
--
ALTER TABLE `patient_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practices`
--
ALTER TABLE `practices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_histories`
--
ALTER TABLE `update_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_billing`
--
ALTER TABLE `account_billing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_specialization`
--
ALTER TABLE `doctor_specialization`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `heads`
--
ALTER TABLE `heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lab_tests`
--
ALTER TABLE `lab_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_test_prescription`
--
ALTER TABLE `lab_test_prescription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine_prescription`
--
ALTER TABLE `medicine_prescription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_histories`
--
ALTER TABLE `patient_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `practices`
--
ALTER TABLE `practices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update_histories`
--
ALTER TABLE `update_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
