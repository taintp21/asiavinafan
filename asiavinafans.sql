-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 11:33 AM
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
-- Database: `asiavinafans`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `location`, `phone`) VALUES
(1, 'Home & Cook Thảo Mộc Việt', '\r\n12 Võ Văn Kiệt, Quận 1, Tp. HCM', 0),
(2, 'Home & Cook Hoàng Long', '\r\n374 Lê Hồng Phong, Bình Dương', 0),
(3, 'Home & Cook Thiên Phước', '\r\n844 Trường Chinh, Phường 15, Quận Tân Bình, Tp. HCM', 0),
(4, 'Home & Cook Kiệt Phúc', '\r\n84 Quốc lộ 1K, Phường Linh Xuân, Tp. Thủ Đức', 0),
(5, 'Home & Cook Chinh Bắc', '\r\n133 Kinh Dương Vương, Phường 13, Quận 6, Tp. HCM', 89),
(6, 'Home & Cook Quang Minh', '\r\n25 Nguyễn Thị Nhỏ, Phường 9, Quận Tân Bình, Tp. HCM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `images`) VALUES
(1, 'Floor Fan', 'floor-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652073321/VY636790-update-later_xsfjzb.png'),
(2, 'Ceiling Fan', 'ceiling-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652075282/QUAT-TRAN_qz81z2.jpg'),
(3, 'Desk Fan', 'desk-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652075408/QUAT-BAN_nh0jo2.png'),
(4, 'Slide Fan', 'slide-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076030/QUAT-LUNG_ylaw53.jpg'),
(5, 'Stand Fan', 'stand-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076091/QUAT-DUNG_x6uyxe.jpg'),
(6, 'Ventilation Fan', 'ventilation-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076126/quat-thong-gio_dpgzks.jpg'),
(7, 'Wall Fan', 'wall-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076137/QUAT-TREO_pndbt2.jpg'),
(8, 'Rechargeable Fan', 'rechargeable-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076244/QS1001-SV0_g02ppn.png'),
(9, 'Box Fan', 'box-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076253/quat-hop_su0yez.jpg');

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medially_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medially_id` bigint(20) UNSIGNED NOT NULL,
  `file_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_06_14_000001_create_media_table', 1),
(6, '2022_05_09_034008_categories', 1),
(7, '2022_05_09_034534_products', 1),
(8, '2022_05_09_040445_partners', 1),
(9, '2022_05_09_040551_agents', 1),
(10, '2022_05_09_040718_usage_tips', 1),
(11, '2022_05_09_040944_product_registration', 1),
(12, '2022_05_09_062754_slider', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `images`) VALUES
(1, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079068/ve-logo-emart-6676-copyw_ndo4d9.png'),
(2, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079079/pictures_library_170_20170615170542_5881-copy_jdrh1j.png'),
(3, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079095/deal_1-copy_bpmhuz.png'),
(4, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079340/1603962389-copy-165x100_j4bzar_saplpl.png');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `cateId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_specifications` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `switch_height` tinyint(4) NOT NULL,
  `thermal_fuse_protection` tinyint(4) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cateId`, `name`, `images`, `technical_specifications`, `switch_height`, `thermal_fuse_protection`, `price`) VALUES
(1, 6, 'V04001-SV0', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652084466/V04001-1_aaar4l.png', '', 0, 0, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `product_registration`
--

CREATE TABLE `product_registration` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `images`, `title`) VALUES
(1, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652077966/quatvietnam-b1_xse1q2.jpg', 'quatvietnam-b1'),
(2, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652078181/b-quatvietnam-150721_kejzby.jpg', 'b-quatvietnam-150721'),
(3, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652078247/b-quatvietnam-3_d1vqzl.jpg', 'b-quatvietnam-3');

-- --------------------------------------------------------

--
-- Table structure for table `usage_tips`
--

CREATE TABLE `usage_tips` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usage_tips`
--

INSERT INTO `usage_tips` (`id`, `title`, `content`) VALUES
(1, 'The body of my fan broke. Where available of the warranty?', 'Please contact our hotline 1800-555-521 or go to the nearest Authorized Service Partner for further assistance.'),
(2, 'I own an ASIAvina ceiling fan. For aesthetic purposes, I replaced the original button box with another button. Then, the fan emitted a loud sound when switched on. What should I do?', 'First of all, the appliance only works at its best using the genuine switch box. It was design and provided the ASIAvina brand to ensure quality performance. If you change or modify any of its parts, the product may malfunction. Thus, replacement using ge'),
(3, 'What should I do if I hear a loud sound when my ASIAvina fan is in Oscillation mode?', 'Just twist the neck’s screw ½ around in a counter clock wise direction. If you still hear a sound, please call the hotline 1800-555-521 or contact our Authorized Service Partner. Sincerely yours)'),
(4, 'The remote control of ASIAvina wall fan is not functioning properly. What should I do?', 'Please check the battery if it is already drained. When installing the battery, please pay attention to the battery terminal. If the remote control is still not working, please call the hotline 1800-555-521 or contact our Authorized Service Partner.'),
(5, 'My rechargeable fan only works when the power cord is plugged to an outlet. What should I do?', 'Please check the battery terminal if it is connected or not. If the rechargeable fan is still not working, please contact the hotline 1800-555-521 or our Authorized Service Partner.'),
(6, 'The propeller of my ceiling fan vibrates. Does it affect the motor? What should I do?', 'Please call the hotline 1800-555-521 or contact our Authorized Service Partner for them to assess if the propeller need to be changed.'),
(7, 'I installed another propeller on my old fan, but the fan vibrates when switched on. What should I do?', 'First of all, our fan only works at its best using genuine ASIAvina propellers. It was designed to ensure quality performance. If you change the propeller, it may affect the motor. Thus, replacement using genuine spare parts is advised. Please call the ho'),
(8, 'My fan was bought a year ago. The speed level doesn’t change when pulled on the switch. What should I do?', 'Check the connection between the cable and the switch if it is connected or not. Please call the hotline 1800-555-521 or contact our Authorized Service Partner for further assistance.'),
(9, 'My fan emits a loud noise when switched on. What should I do?', 'Apply lubricant into the gear and clean the unit with a soft cloth. If you still hear a sound, please call the hotline 1800-555-521 or contact our Authorized Service Partner for further assistance.');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_medially_type_medially_id_index` (`medially_type`,`medially_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_registration`
--
ALTER TABLE `product_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usage_tips`
--
ALTER TABLE `usage_tips`
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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_registration`
--
ALTER TABLE `product_registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usage_tips`
--
ALTER TABLE `usage_tips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
