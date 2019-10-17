-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 11:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engineVolume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yearMake` datetime NOT NULL,
  `carTag` int(11) DEFAULT NULL,
  `chassisNumber` int(11) NOT NULL,
  `carsNote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currentKilo` int(11) NOT NULL,
  `BuckVolume` int(11) DEFAULT NULL,
  `percentVolume` int(11) NOT NULL,
  `userType` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `name`, `slug`, `brand`, `engineVolume`, `yearMake`, `carTag`, `chassisNumber`, `carsNote`, `currentKilo`, `BuckVolume`, `percentVolume`, `userType`, `created_at`, `updated_at`) VALUES
(1, 2, 'Carmen Bechtelar IV', NULL, 'Rudolph Schultz', '24842', '1989-01-08 11:18:57', 76245, 1372373, 'Ratione impedit ut eos velit dicta qui unde.', 33153915, 8173, 6, 'taxi', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(2, 1, 'دنا', 'دنا', 'Mortimer Graham V', '15760', '1993-02-21 01:43:42', 916963, 5844044, 'Et maxime ipsum nemo sequi blanditiis quibusdam corporis magni.', 64766644, 7374, 61, 'normal', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(3, 1, 'پارس', 'پارس', 'Trace Rolfson', '10397', '2001-05-19 15:12:23', 322253, 1369073, 'Vel ratione a accusamus expedita cum fugiat.', 95859803, 3897, 79, 'normal', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(4, 1, 'ساینا', 'ساینا', 'Mackenzie Rice DVM', '90269', '1988-07-17 14:43:15', 507270, 3392420, 'Veniam dignissimos maxime vitae nobis.', 5813916, 9364, 33, 'taxi', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(5, 5, 'Prof. Raven Lindgren PhD', NULL, 'Nicolas Quitzon', '23383', '2006-12-31 13:29:55', 434739, 9923556, 'Soluta rem quisquam modi aliquam tempora.', 99664145, 1688, 68, 'taxi', '2019-10-03 04:15:14', '2019-10-03 04:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `car_fuel`
--

CREATE TABLE `car_fuel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuel_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_fuel`
--

INSERT INTO `car_fuel` (`id`, `fuel_id`, `car_id`) VALUES
(1, 27, 5),
(2, 30, 5),
(3, 3, 2),
(4, 3, 3),
(5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `car_services`
--

CREATE TABLE `car_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `repairShop` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KiloWorked` int(11) NOT NULL,
  `serviceType` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalPrice` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_services`
--

INSERT INTO `car_services` (`id`, `repairShop`, `KiloWorked`, `serviceType`, `serviceImage`, `totalPrice`, `user_id`, `car_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 449131, 'Oren Gaylord', 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\2882940e82c5155a852224391f54163c.jpg', 71402, 4, 1, NULL, NULL),
(2, NULL, 724956, 'Prof. Sydney Wintheiser', 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\df142ecf07d712c94abe526a19965d47.jpg', 30275, 1, 4, NULL, NULL),
(3, NULL, 174055, 'Jaquelin Barrows III', 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\cb7adbeabb073395f6a545b26ef9a216.jpg', 2464, 2, 3, NULL, NULL),
(4, NULL, 579689, 'Linnea Wiegand I', 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\75228d0b8479249b319ba07b03acde6b.jpg', 68870, 5, 3, NULL, NULL),
(5, NULL, 71975, 'Blaise Bruen II', 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\f086e05784d444ee8eb53cee076a8589.jpg', 92926, 3, 5, NULL, NULL);

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
-- Table structure for table `fuels`
--

CREATE TABLE `fuels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuelTank` int(11) NOT NULL,
  `currentPetrol` int(11) NOT NULL,
  `currentKilo` int(11) NOT NULL,
  `paymentFuel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuelNote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuelImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuels`
--

INSERT INTO `fuels` (`id`, `fuelTank`, `currentPetrol`, `currentKilo`, `paymentFuel`, `fuelNote`, `fuelImage`, `user_id`, `car_id`, `date`, `time`) VALUES
(26, 65, 8, 483786, '770', NULL, 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\e13a25ba07ca38a2ba1a36dee0cbefd5.jpg', 1, 5, '2019-07-01 02:47:23', 1570528524),
(27, 68, 20, 343455, '694', NULL, 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\7180e7b50f772ca6871340c614f5dbaf.jpg', 1, 3, '2019-11-30 09:48:50', 1570528525),
(28, 38, 74, 832298, '439', NULL, 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\56ced825408c60f6276b1385bef225fd.jpg', 1, 2, '2019-08-01 17:44:35', 1570528526),
(29, 97, 40, 331786, '346', NULL, 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\71030f0ee64720cbf1f19ef04858e12f.jpg', 1, 3, '2019-08-14 04:45:47', 1570528527),
(30, 54, 94, 401318, '98', NULL, 'C:\\Users\\mahdi\\AppData\\Local\\Temp\\bff16cb5c968c0a020437599025d99f5.jpg', 1, 5, '2019-07-13 07:57:55', 1570528527);

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
(4, '2019_09_18_072005_create_cars_table', 1),
(5, '2019_09_18_073809_create_car_services_table', 1),
(6, '2019_09_18_074516_create_fuel_cars_table', 1),
(7, '2019_09_18_074819_create_repair_cars_table', 1),
(8, '2019_09_18_075040_create_other_costs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_costs`
--

CREATE TABLE `other_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currentKilo` int(11) NOT NULL,
  `typePrice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_costs`
--

INSERT INTO `other_costs` (`id`, `currentKilo`, `typePrice`, `seller`, `totalPrice`, `note`, `user_id`, `car_id`, `created_at`, `updated_at`) VALUES
(1, 12172893, 'Derick Schmidt Sr.', 'Macey Spinka Sr.', 89, NULL, 2, 2, NULL, NULL),
(2, 88048382, 'Dr. Mekhi Schumm II', 'Dr. Adam Kutch Sr.', 93, NULL, 3, 5, NULL, NULL),
(3, 57616102, 'Tressa Blick', 'Adriel Beer', 37, NULL, 2, 4, NULL, NULL),
(4, 48257953, 'Tevin Gorczany', 'Bettye Fisher', 44, NULL, 4, 3, NULL, NULL),
(5, 44201542, 'Dr. Tom Wehner', 'Vanessa Daniel', 59, NULL, 3, 3, NULL, NULL);

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
-- Table structure for table `repair_cars`
--

CREATE TABLE `repair_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currentKilo` int(11) NOT NULL,
  `repairPlace` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeRepair` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noteRepair` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `repair_cars`
--

INSERT INTO `repair_cars` (`id`, `currentKilo`, `repairPlace`, `typeRepair`, `noteRepair`, `user_id`, `car_id`, `created_at`, `updated_at`) VALUES
(6, 85896, 'kelli70', 'macejkovic.lisandro', NULL, 5, 1, '1998-11-18 20:30:00', NULL),
(7, 44641, 'danielle15', 'leannon.constantin', NULL, 1, 2, '1974-10-09 20:30:00', NULL),
(8, 28889, 'jaquelin.leuschke', 'scrona', NULL, 1, 3, '2011-11-08 20:30:00', NULL),
(9, 82523, 'gjohnston', 'tmetz', NULL, 1, 4, '1970-03-02 20:30:00', NULL),
(10, 88671, 'tia.beer', 'emmanuel.ferry', NULL, 1, 2, '1994-11-28 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `age`, `level`, `email_verified_at`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Humberto Zemlak DVM', 'mahdi@yahoo.com', 'female', 85, 'user', NULL, '$2y$10$wqXnY5DI7kXyAN31wZsYx.D9PWXHLQ6Yz640lfFxp.Sdu5.wC9zYa', 'wgbaOj5KVUVu1eAaztojcWmNJ4Edyr8kyyWOgeZhavtejom7MOf3x77q3FLR', 'Dzr3XNwoFPdeiVcU', '2019-10-03 04:15:14', '2019-10-03 04:53:55'),
(2, 'Cesar Bosco PhD', 'wolf.tyler@example.com', 'male', 53, 'user', NULL, '$2y$10$cgED2pmav2WeVN9Ckr7eK.ScK5nhzDnaDmlz43.kVI6zs0qqwUg5S', 'YRsXiWgwLDlxafMD7r15haYuGAQFrgxFscFN2IUb8S170zBxV1GBWYNxYeqp', 'Lc4TAXt4uhSrS2vF', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(3, 'Alvina Ferry', 'oturner@example.org', 'female', 36, 'user', NULL, '$2y$10$Cevr9sUy5NpBNkLRZRRT2eWXQ2sLQ8gDV.GAoulbrPTZkdWtVTTpm', '3fROLXmqppfiBT2OS9RKixU6ftD9niwS5D8wXd7ezt4swrrDw0vUzSsf6WX5', 'lK8HPwY8vF52BH6I', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(4, 'Kamryn Cummerata', 'ndach@example.net', 'female', 37, 'user', NULL, '$2y$10$Zohn/1ZVu7zz2CMJlDhksuJk6dlEkg6HWE46LgMGwZpHSH2CLnSqy', 'LHQYQ5rEXM96uMocbAy5vLgLAkNXXTBCviN0ZhoXJuKpm2VzJb4IUeWfWKCW', 'wrGSKhKlqXGhnZ6s', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(5, 'Carissa DuBuque', 'qsatterfield@example.net', 'male', 60, 'user', NULL, '$2y$10$xLmfQCfJH7ub3.vTrgYBr.YPcxSv4kr9.Q1ngTQrVxZnus.pB8KVK', 'PWOee6lgQ6STCAxbGNbh6YgqmngU8BqKcDlm1flyfx1sFVtAyaH80BP4t0PB', '4xyt3lasOV7FPfER', '2019-10-03 04:15:14', '2019-10-03 04:15:14'),
(6, 'amir', 'amir@gmail.com', 'male', 24, 'user', NULL, '$2y$10$vlp1OC1nYxnj0Y4FyUgOteJfETxGgANv9dpN2T1hKDdyLRBi2Hi5.', 'dwhJQvmI9S2dkX1DD35ch1QkTYCEryJn7UKlUyP2LDRt3uMq0jsNWV3aoYk9', NULL, '2019-10-12 07:36:54', '2019-10-12 07:36:54'),
(7, 'mamd', 'aaa@gmail.com', 'male', 45, 'user', NULL, '$2y$10$oaO2HeFmAQP4TimiiMD2ZeZ3UBxzHapRHiLpRfUh4tjUw/OtCDoRS', '2Q3BwB5dSOMnFxoAAYdwAUMDgAaVlvlsfvh7LkrtwDrvcneDuwFar4oAA83B', NULL, '2019-10-12 07:50:15', '2019-10-12 07:50:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_user_id_foreign` (`user_id`);

--
-- Indexes for table `car_fuel`
--
ALTER TABLE `car_fuel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_services`
--
ALTER TABLE `car_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_services_user_id_foreign` (`user_id`),
  ADD KEY `car_services_car_id_foreign` (`car_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fuels_user_id_foreign` (`user_id`),
  ADD KEY `fuels_car_id_foreign` (`car_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_costs`
--
ALTER TABLE `other_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `other_costs_user_id_foreign` (`user_id`),
  ADD KEY `other_costs_car_id_foreign` (`car_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `repair_cars`
--
ALTER TABLE `repair_cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repair_cars_user_id_foreign` (`user_id`),
  ADD KEY `repair_cars_car_id_foreign` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car_fuel`
--
ALTER TABLE `car_fuel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_services`
--
ALTER TABLE `car_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `other_costs`
--
ALTER TABLE `other_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `repair_cars`
--
ALTER TABLE `repair_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `car_services`
--
ALTER TABLE `car_services`
  ADD CONSTRAINT `car_services_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `car_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `fuels`
--
ALTER TABLE `fuels`
  ADD CONSTRAINT `fuels_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `fuels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `other_costs`
--
ALTER TABLE `other_costs`
  ADD CONSTRAINT `other_costs_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `other_costs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `repair_cars`
--
ALTER TABLE `repair_cars`
  ADD CONSTRAINT `repair_cars_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `repair_cars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
