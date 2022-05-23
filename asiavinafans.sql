-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 12:45 PM
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
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `location`, `phone`) VALUES
(1, 'Home & Cook Thảo Mộc Việt', '12 Võ Văn Kiệt, Quận 1, Tp. HCM', '(028)39154342'),
(2, 'Home & Cook Hoàng Long', '\r\n374 Lê Hồng Phong, Bình Dương', '(028)38305136'),
(3, 'Home & Cook Thiên Phước', '\r\n844 Trường Chinh, Phường 15, Quận Tân Bình, Tp. HCM', '(028) 38153496'),
(4, 'Home & Cook Kiệt Phúc', '\r\n84 Quốc lộ 1K, Phường Linh Xuân, Tp. Thủ Đức', '(028) 37246757'),
(5, 'Home & Cook Chinh Bắc', '\r\n133 Kinh Dương Vương, Phường 13, Quận 6, Tp. HCM', '089 932 3639'),
(6, 'Home & Cook Quang Minh', '\r\n25 Nguyễn Thị Nhỏ, Phường 9, Quận Tân Bình, Tp. HCM', '(028) 38651811');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicId_cloudinary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `images`, `publicId_cloudinary`) VALUES
(1, 'Floor Fan', 'floor-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652073321/VY636790-update-later_xsfjzb.png', 'VY636790-update-later_xsfjzb'),
(2, 'Ceiling Fan', 'ceiling-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652075282/QUAT-TRAN_qz81z2.jpg', 'QUAT-TRAN_qz81z2'),
(3, 'Desk Fan', 'desk-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652075408/QUAT-BAN_nh0jo2.png', 'QUAT-BAN_nh0jo2'),
(4, 'Slide Fan', 'slide-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076030/QUAT-LUNG_ylaw53.jpg', 'QUAT-LUNG_ylaw53'),
(5, 'Stand Fan', 'stand-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076091/QUAT-DUNG_x6uyxe.jpg', 'QUAT-DUNG_x6uyxe'),
(6, 'Ventilation Fan', 'ventilation-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076126/quat-thong-gio_dpgzks.jpg', 'quat-thong-gio_dpgzks'),
(7, 'Wall Fan', 'wall-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076137/QUAT-TREO_pndbt2.jpg', 'QUAT-TREO_pndbt2'),
(8, 'Rechargeable Fan', 'rechargeable-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076244/QS1001-SV0_g02ppn.png', 'QS1001-SV0_g02ppn'),
(9, 'Box Fan', 'box-fan', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652076253/quat-hop_su0yez.jpg', 'quat-hop_su0yez');

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

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `medially_type`, `medially_id`, `file_url`, `file_name`, `file_type`, `size`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\categories', 35, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652427458/qs1bwdzbwrezaduu0la4.jpg', 'qs1bwdzbwrezaduu0la4', 'image', 207649, '2022-05-13 00:37:38', '2022-05-13 00:37:38'),
(2, 'App\\Models\\categories', 37, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652427493/xyeyh5iwu03sozlpu0iw.jpg', 'xyeyh5iwu03sozlpu0iw', 'image', 207649, '2022-05-13 00:38:12', '2022-05-13 00:38:12');

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
(6, '2022_05_09_034008_categories', 1),
(7, '2022_05_09_034534_products', 1),
(8, '2022_05_09_040445_partners', 1),
(9, '2022_05_09_040551_agents', 1),
(10, '2022_05_09_040718_usage_tips', 1),
(11, '2022_05_09_040944_product_registration', 1),
(12, '2022_05_09_062754_slider', 2),
(13, '2020_06_14_000001_create_media_table', 3),
(14, '2022_05_09_062754_sliders', 4),
(15, '2022_05_16_055911_send_contact', 5),
(17, '2022_05_23_053309_create_promotion_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicId_cloudinary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `images`, `publicId_cloudinary`) VALUES
(1, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079068/ve-logo-emart-6676-copyw_ndo4d9.png', 've-logo-emart-6676-copyw_ndo4d9'),
(2, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079079/pictures_library_170_20170615170542_5881-copy_jdrh1j.png', 'pictures_library_170_20170615170542_5881-copy_jdrh1j'),
(3, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079095/deal_1-copy_bpmhuz.png', 'deal_1-copy_bpmhuz'),
(4, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652079340/1603962389-copy-165x100_j4bzar_saplpl.png', '1603962389-copy-165x100_j4bzar_saplpl');

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicId_cloudinary` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_specifications` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `switch_height` tinyint(4) NOT NULL,
  `thermal_fuse_protection` tinyint(4) NOT NULL,
  `price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cateId`, `name`, `images`, `publicId_cloudinary`, `technical_specifications`, `featured`, `switch_height`, `thermal_fuse_protection`, `price`) VALUES
(2, 6, 'V04001-SV0', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652779788/V04001-1_vgia57.png', 'V04001-1_vgia57', '<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 29.6824%;\"><strong>Power</strong></td>\r\n<td style=\"width: 30.2471%;\">45W</td>\r\n<td style=\"width: 40.0705%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 29.6824%;\"><strong>Voltage-Frequency</strong></td>\r\n<td style=\"width: 30.2471%;\">220V-50Hz</td>\r\n<td style=\"width: 40.0705%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 29.6824%;\"><strong>Air flow</strong></td>\r\n<td style=\"width: 30.2471%;\">3,1m3/min</td>\r\n<td style=\"width: 40.0705%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 29.6824%;\"><strong>Rounds per minute</strong></td>\r\n<td style=\"width: 30.2471%;\">1200</td>\r\n<td style=\"width: 40.0705%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<ul>\r\n<li>Easy to use</li>\r\n<li>Reverse air intake</li>\r\n</ul>', 1, 1, 1000000),
(4, 6, 'H08001-SV0 as asffsaf', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652785342/wftorrnqo2n9ijkz7zy5.png', 'wftorrnqo2n9ijkz7zy5', '<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 31.7743%;\"><strong>Size of blades:</strong></td>\r\n<td style=\"width: 31.7743%;\">20cm fsahfosahfosahfoisa</td>\r\n<td style=\"width: 31.7777%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 31.7743%;\"><strong>Power :</strong></td>\r\n<td style=\"width: 31.7743%;\">30W</td>\r\n<td style=\"width: 31.7777%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 31.7743%;\"><strong>Voltage-Frequency:</strong></td>\r\n<td style=\"width: 31.7743%;\">220V-50Hz</td>\r\n<td style=\"width: 31.7777%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 31.7743%;\"><strong>Air flow:</strong></td>\r\n<td style=\"width: 31.7743%;\">7,5m3/min</td>\r\n<td style=\"width: 31.7777%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 31.7743%;\"><strong>Rounds per minute:</strong></td>\r\n<td style=\"width: 31.7743%;\">1200</td>\r\n<td style=\"width: 31.7777%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 31.7743%;\"><strong>Switch types:</strong></td>\r\n<td style=\"width: 31.7743%;\">Pull</td>\r\n<td style=\"width: 31.7777%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<ul>\r\n<li>Easy to use</li>\r\n<li>Reverse air intakesafsafsafsafsa</li>\r\n</ul>', 0, 1, 9158259),
(5, 5, 'asfsafsadsaf faiashfuhsaofhsaoi', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652785805/wnhhr4ajtg5uqf6qpaxs.png', 'wnhhr4ajtg5uqf6qpaxs', '<table style=\"border-collapse: collapse; width: 100%; height: 133.344px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 21.3906px;\">\r\n<td style=\"width: 31.7743%; height: 21.3906px;\"><strong>Size of blades:</strong></td>\r\n<td style=\"width: 31.7743%; height: 21.3906px;\">20cmaaaaaaaaaaaaaaaaaaaa</td>\r\n<td style=\"width: 31.7777%; height: 21.3906px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 22.3906px;\">\r\n<td style=\"width: 31.7743%; height: 22.3906px;\"><strong>Power:</strong></td>\r\n<td style=\"width: 31.7743%; height: 22.3906px;\">30W</td>\r\n<td style=\"width: 31.7777%; height: 22.3906px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 22.3906px;\">\r\n<td style=\"width: 31.7743%; height: 22.3906px;\"><strong>Voltage-Frequency:</strong></td>\r\n<td style=\"width: 31.7743%; height: 22.3906px;\">220V-50Hz</td>\r\n<td style=\"width: 31.7777%; height: 22.3906px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 22.3906px;\">\r\n<td style=\"width: 31.7743%; height: 22.3906px;\"><strong>Air flow:</strong></td>\r\n<td style=\"width: 31.7743%; height: 22.3906px;\">7,5m3/minaaaaaaaaaaaaaaaaaaaaaa</td>\r\n<td style=\"width: 31.7777%; height: 22.3906px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 22.3906px;\">\r\n<td style=\"width: 31.7743%; height: 22.3906px;\"><strong>Rounds per minute:</strong></td>\r\n<td style=\"width: 31.7743%; height: 22.3906px;\">1200</td>\r\n<td style=\"width: 31.7777%; height: 22.3906px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 22.3906px;\">\r\n<td style=\"width: 31.7743%; height: 22.3906px;\"><strong>Switch types:</strong></td>\r\n<td style=\"width: 31.7743%; height: 22.3906px;\">Pull</td>\r\n<td style=\"width: 31.7777%; height: 22.3906px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<ul>\r\n<li>Easy to usesadsadsad</li>\r\n<li>Reverse air intakeaaaaaaaaaaaaadsaa</li>\r\n</ul>', 1, 1, 42142142);

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
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_registration`
--

INSERT INTO `product_registration` (`id`, `product_type`, `serial_number`, `name`, `address`, `phone_number`, `email`, `buy_date`) VALUES
(2, 'VY358990', 'dsadsadsadsa', 'dsadsadsads', 'adsadsadsadsa', '0366546011', 'taintp21@gmail.com', '2022-10-21'),
(3, 'VY538790', 'fsaifjsaij', 'ijfisajifsajifji', 'fjpsajfpoasjfpoasjpo', '0366546011', 'sansaiofnsauo@gmail.com', '2022-10-21'),
(4, 'VY636790', 'dsadsadsadsad', 'sadsadsadsadsadsa', 'dsadasdsadsadsadsa', '0366546011', 'fjisanfiodsnfsd@gmail.com', '2022-10-21'),
(5, 'VY579890', 'dasdsadsadsadsadsa', 'dsadsadsadsa', 'dasdsasadas', '0366546011', 'skaofmsaofmsa@gmail.com', '2022-10-21'),
(6, 'VY377790', 'dasdsadsa', 'dsadsadsa', 'dsadsadsadsa', '0366546011', 'fnausnfsuanf@gmail.com', '2022-10-21'),
(7, 'VY577890', 'dasdsadsad', 'sadsadsadsad', 'sadsadsa', '0366546011', 'noasnfsaijofns@gmail.com', '2022-10-21'),
(8, 'VY377790', 'dsadsadsa', 'dsadsadsad', 'sadsadsads', '0366546011', 'foasnfosanfs@gmail.com', '2202-10-21'),
(9, 'VY636790', 'asdsadsad', 'sadsadsadas', 'dsadsadsadas', '0366546011', 'fauioshfosajfio@gmail.com', '2022-10-21'),
(10, 'D16006', 'dasdsadsa', 'dsadsadsa', 'dsadsadsad', '0366546011', 'rsuoahrfosajr@gmail.com', '2022-10-21'),
(11, 'VY636790', 'dsadsadsad', 'sdsadasdsa', 'dsadsadsa', '0366546011', 'fiafoisaiof@gmail.com', '2022-10-21'),
(12, 'VY538790', '2412421', 'fksajfiosajfioj', 'jfiosajiofjsaioj', '0366546011', 'fioasfiosamfis@gmail.com', '2022-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publicId_cloudinary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale` tinyint(4) NOT NULL DEFAULT 0,
  `userId` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `title`, `slug`, `image`, `publicId_cloudinary`, `short_content`, `content`, `sale`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1653296923/sale-off-va-sale-up-to-3_48bedf4ea1254e368be1699d9d389c9c_iwxrsj.jpg', 'sale-off-va-sale-up-to-3_48bedf4ea1254e368be1699d9d389c9c_iwxrsj', '<p><span style=\"white-space: pre-wrap;\">From Aug 31st to Sep 3rd 2018, Vietnam Fan Joint Stock Company (Asia Fan)Promotion with discount from 50% to 70%.</span></p>', '<h3>Lorem ipsum dolor sit amet</h3>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget velit eget neque vulputate porta a et libero. Cras eget aliquet ex. Fusce vitae mattis erat, ut tempor odio. Praesent eleifend vel nibh nec elementum. Donec congue fringilla tortor et mollis. Nunc tellus lectus, dapibus in sapien ut, dignissim aliquet nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Vestibulum elit velit, scelerisque a congue sit amet, gravida sit amet ex. Nulla quis congue libero. Vestibulum a scelerisque arcu. In mattis volutpat fringilla. Mauris commodo aliquam consequat. Phasellus neque tellus, egestas ac orci a, convallis interdum est. Praesent sed urna nec ipsum euismod rutrum. Aenean est velit, maximus sit amet nisl et, cursus maximus erat. Proin congue euismod massa, a varius elit accumsan sed.</p>\r\n<p>Aenean vel scelerisque ligula. Pellentesque imperdiet eros in suscipit hendrerit. Vestibulum molestie, dui a suscipit eleifend, ante elit gravida metus, eget ornare leo lorem ut ipsum. Donec ex ante, mollis eu tincidunt sollicitudin, convallis dictum tortor. Morbi vestibulum imperdiet maximus. Duis consequat cursus varius. Cras hendrerit erat at risus molestie, sed pulvinar neque venenatis. Phasellus ac ullamcorper sem, vitae pulvinar nulla. Aenean massa neque, ornare eget nulla et, varius euismod nisl. Nam lectus sem, varius at suscipit sed, mattis id justo. Nulla maximus augue ut neque mollis aliquam. Quisque sollicitudin neque id sem fermentum, ut tincidunt nunc molestie. Vestibulum tellus leo, fringilla at lorem at, laoreet tincidunt mauris. Vestibulum condimentum dictum felis, eu auctor lacus accumsan eget. Etiam facilisis consectetur elit, et hendrerit turpis ultricies ut.</p>\r\n<p>In laoreet ligula diam, ac vulputate nulla dignissim quis. Nam venenatis felis id posuere blandit. Curabitur vestibulum, orci id vulputate blandit, enim ipsum hendrerit arcu, sit amet malesuada sapien erat quis leo. In a metus a augue suscipit dictum vitae ac nulla. Curabitur accumsan tempus nunc at sagittis. Sed sed ex nec risus interdum varius. Vestibulum in tincidunt turpis. Mauris finibus, erat at tempus dapibus, augue mauris accumsan diam, convallis facilisis odio purus a nunc. Duis suscipit eros nec leo consequat, id porta lacus consectetur. Mauris id tortor feugiat, lobortis erat eu, finibus dolor.</p>', 1, 1, '2022-05-23 08:45:32', '2022-05-23 09:27:40'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit1', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit1', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1653282041/mega-sale-poster-banner-big-sale-clearance_68196-65_v5lntl.jpg', 'mega-sale-poster-banner-big-sale-clearance_68196-65_v5lnt', '<p><span style=\"white-space: pre-wrap;\">From Aug 31st to Sep 3rd 2018, Vietnam Fan Joint Stock Company (Asia Fan)Promotion with discount from 50% to 70%.</span></p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget velit eget neque vulputate porta a et libero. Cras eget aliquet ex. Fusce vitae mattis erat, ut tempor odio. Praesent eleifend vel nibh nec elementum. Donec congue fringilla tortor et mollis. Nunc tellus lectus, dapibus in sapien ut, dignissim aliquet nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Vestibulum elit velit, scelerisque a congue sit amet, gravida sit amet ex. Nulla quis congue libero. Vestibulum a scelerisque arcu. In mattis volutpat fringilla. Mauris commodo aliquam consequat. Phasellus neque tellus, egestas ac orci a, convallis interdum est. Praesent sed urna nec ipsum euismod rutrum. Aenean est velit, maximus sit amet nisl et, cursus maximus erat. Proin congue euismod massa, a varius elit accumsan sed.</p>\r\n<p>Aenean vel scelerisque ligula. Pellentesque imperdiet eros in suscipit hendrerit. Vestibulum molestie, dui a suscipit eleifend, ante elit gravida metus, eget ornare leo lorem ut ipsum. Donec ex ante, mollis eu tincidunt sollicitudin, convallis dictum tortor. Morbi vestibulum imperdiet maximus. Duis consequat cursus varius. Cras hendrerit erat at risus molestie, sed pulvinar neque venenatis. Phasellus ac ullamcorper sem, vitae pulvinar nulla. Aenean massa neque, ornare eget nulla et, varius euismod nisl. Nam lectus sem, varius at suscipit sed, mattis id justo. Nulla maximus augue ut neque mollis aliquam. Quisque sollicitudin neque id sem fermentum, ut tincidunt nunc molestie. Vestibulum tellus leo, fringilla at lorem at, laoreet tincidunt mauris. Vestibulum condimentum dictum felis, eu auctor lacus accumsan eget. Etiam facilisis consectetur elit, et hendrerit turpis ultricies ut.</p>\r\n<p>In laoreet ligula diam, ac vulputate nulla dignissim quis. Nam venenatis felis id posuere blandit. Curabitur vestibulum, orci id vulputate blandit, enim ipsum hendrerit arcu, sit amet malesuada sapien erat quis leo. In a metus a augue suscipit dictum vitae ac nulla. Curabitur accumsan tempus nunc at sagittis. Sed sed ex nec risus interdum varius. Vestibulum in tincidunt turpis. Mauris finibus, erat at tempus dapibus, augue mauris accumsan diam, convallis facilisis odio purus a nunc. Duis suscipit eros nec leo consequat, id porta lacus consectetur. Mauris id tortor feugiat, lobortis erat eu, finibus dolor.</p>', 1, 1, '2022-05-23 09:09:29', '2022-05-23 09:09:29'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit 2', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-2', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1653298030/sstu5j7i2yrgmxy4kqpz.jpg', 'sstu5j7i2yrgmxy4kqpz', '<p><span style=\"white-space: pre-wrap;\">From Aug 31st to Sep 3rd 2018, Vietnam Fan Joint Stock Company (Asia Fan)Promotion with discount from 50% to 70%.</span></p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget velit eget neque vulputate porta a et libero. Cras eget aliquet ex. Fusce vitae mattis erat, ut tempor odio. Praesent eleifend vel nibh nec elementum. Donec congue fringilla tortor et mollis. Nunc tellus lectus, dapibus in sapien ut, dignissim aliquet nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Vestibulum elit velit, scelerisque a congue sit amet, gravida sit amet ex. Nulla quis congue libero. Vestibulum a scelerisque arcu. In mattis volutpat fringilla. Mauris commodo aliquam consequat. Phasellus neque tellus, egestas ac orci a, convallis interdum est. Praesent sed urna nec ipsum euismod rutrum. Aenean est velit, maximus sit amet nisl et, cursus maximus erat. Proin congue euismod massa, a varius elit accumsan sed.</p>\r\n<p>Aenean vel scelerisque ligula. Pellentesque imperdiet eros in suscipit hendrerit. Vestibulum molestie, dui a suscipit eleifend, ante elit gravida metus, eget ornare leo lorem ut ipsum. Donec ex ante, mollis eu tincidunt sollicitudin, convallis dictum tortor. Morbi vestibulum imperdiet maximus. Duis consequat cursus varius. Cras hendrerit erat at risus molestie, sed pulvinar neque venenatis. Phasellus ac ullamcorper sem, vitae pulvinar nulla. Aenean massa neque, ornare eget nulla et, varius euismod nisl. Nam lectus sem, varius at suscipit sed, mattis id justo. Nulla maximus augue ut neque mollis aliquam. Quisque sollicitudin neque id sem fermentum, ut tincidunt nunc molestie. Vestibulum tellus leo, fringilla at lorem at, laoreet tincidunt mauris. Vestibulum condimentum dictum felis, eu auctor lacus accumsan eget. Etiam facilisis consectetur elit, et hendrerit turpis ultricies ut.</p>\r\n<p>In laoreet ligula diam, ac vulputate nulla dignissim quis. Nam venenatis felis id posuere blandit. Curabitur vestibulum, orci id vulputate blandit, enim ipsum hendrerit arcu, sit amet malesuada sapien erat quis leo. In a metus a augue suscipit dictum vitae ac nulla. Curabitur accumsan tempus nunc at sagittis. Sed sed ex nec risus interdum varius. Vestibulum in tincidunt turpis. Mauris finibus, erat at tempus dapibus, augue mauris accumsan diam, convallis facilisis odio purus a nunc. Duis suscipit eros nec leo consequat, id porta lacus consectetur. Mauris id tortor feugiat, lobortis erat eu, finibus dolor.</p>', 1, 1, '2022-05-23 09:27:10', '2022-05-23 09:27:10'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget velit eget neque vulputate porta a et libero', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-nam-eget-velit-eget-neque-vulputate-porta-a-et-libero', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1653298199/rzb6hlucw8dwrjcghvh7.jpg', 'rzb6hlucw8dwrjcghvh7', '<p><span style=\"white-space: pre-wrap;\">From Aug 31st to Sep 3rd 2018, Vietnam Fan Joint Stock Company (Asia Fan)Promotion with discount from 50% to 70%.</span></p>', '<h3>Lorem ipsum dolor sit amet</h3>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget velit eget neque vulputate porta a et libero. Cras eget aliquet ex. Fusce vitae mattis erat, ut tempor odio. Praesent eleifend vel nibh nec elementum. Donec congue fringilla tortor et mollis. Nunc tellus lectus, dapibus in sapien ut, dignissim aliquet nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Vestibulum elit velit, scelerisque a congue sit amet, gravida sit amet ex. Nulla quis congue libero. Vestibulum a scelerisque arcu. In mattis volutpat fringilla. Mauris commodo aliquam consequat. Phasellus neque tellus, egestas ac orci a, convallis interdum est. Praesent sed urna nec ipsum euismod rutrum. Aenean est velit, maximus sit amet nisl et, cursus maximus erat. Proin congue euismod massa, a varius elit accumsan sed.</p>\r\n<p>Aenean vel scelerisque ligula. Pellentesque imperdiet eros in suscipit hendrerit. Vestibulum molestie, dui a suscipit eleifend, ante elit gravida metus, eget ornare leo lorem ut ipsum. Donec ex ante, mollis eu tincidunt sollicitudin, convallis dictum tortor. Morbi vestibulum imperdiet maximus. Duis consequat cursus varius. Cras hendrerit erat at risus molestie, sed pulvinar neque venenatis. Phasellus ac ullamcorper sem, vitae pulvinar nulla. Aenean massa neque, ornare eget nulla et, varius euismod nisl. Nam lectus sem, varius at suscipit sed, mattis id justo. Nulla maximus augue ut neque mollis aliquam. Quisque sollicitudin neque id sem fermentum, ut tincidunt nunc molestie. Vestibulum tellus leo, fringilla at lorem at, laoreet tincidunt mauris. Vestibulum condimentum dictum felis, eu auctor lacus accumsan eget. Etiam facilisis consectetur elit, et hendrerit turpis ultricies ut.</p>\r\n<p>In laoreet ligula diam, ac vulputate nulla dignissim quis. Nam venenatis felis id posuere blandit. Curabitur vestibulum, orci id vulputate blandit, enim ipsum hendrerit arcu, sit amet malesuada sapien erat quis leo. In a metus a augue suscipit dictum vitae ac nulla. Curabitur accumsan tempus nunc at sagittis. Sed sed ex nec risus interdum varius. Vestibulum in tincidunt turpis. Mauris finibus, erat at tempus dapibus, augue mauris accumsan diam, convallis facilisis odio purus a nunc. Duis suscipit eros nec leo consequat, id porta lacus consectetur. Mauris id tortor feugiat, lobortis erat eu, finibus dolor.</p>', 1, 1, '2022-05-23 09:29:41', '2022-05-23 09:47:29'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit 4', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-4', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1653298449/hoq2knhatavlgugngcas.jpg', 'hoq2knhatavlgugngcas', '<p><span style=\"white-space: pre-wrap;\">From Aug 31st to Sep 3rd 2018, Vietnam Fan Joint Stock Company (Asia Fan)Promotion with discount from 50% to 70%.</span></p>', '<h3>Lorem ipsum dolor sit amet</h3>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget velit eget neque vulputate porta a et libero. Cras eget aliquet ex. Fusce vitae mattis erat, ut tempor odio. Praesent eleifend vel nibh nec elementum. Donec congue fringilla tortor et mollis. Nunc tellus lectus, dapibus in sapien ut, dignissim aliquet nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Vestibulum elit velit, scelerisque a congue sit amet, gravida sit amet ex. Nulla quis congue libero. Vestibulum a scelerisque arcu. In mattis volutpat fringilla. Mauris commodo aliquam consequat. Phasellus neque tellus, egestas ac orci a, convallis interdum est. Praesent sed urna nec ipsum euismod rutrum. Aenean est velit, maximus sit amet nisl et, cursus maximus erat. Proin congue euismod massa, a varius elit accumsan sed.</p>\r\n<p>Aenean vel scelerisque ligula. Pellentesque imperdiet eros in suscipit hendrerit. Vestibulum molestie, dui a suscipit eleifend, ante elit gravida metus, eget ornare leo lorem ut ipsum. Donec ex ante, mollis eu tincidunt sollicitudin, convallis dictum tortor. Morbi vestibulum imperdiet maximus. Duis consequat cursus varius. Cras hendrerit erat at risus molestie, sed pulvinar neque venenatis. Phasellus ac ullamcorper sem, vitae pulvinar nulla. Aenean massa neque, ornare eget nulla et, varius euismod nisl. Nam lectus sem, varius at suscipit sed, mattis id justo. Nulla maximus augue ut neque mollis aliquam. Quisque sollicitudin neque id sem fermentum, ut tincidunt nunc molestie. Vestibulum tellus leo, fringilla at lorem at, laoreet tincidunt mauris. Vestibulum condimentum dictum felis, eu auctor lacus accumsan eget. Etiam facilisis consectetur elit, et hendrerit turpis ultricies ut.</p>\r\n<p>In laoreet ligula diam, ac vulputate nulla dignissim quis. Nam venenatis felis id posuere blandit. Curabitur vestibulum, orci id vulputate blandit, enim ipsum hendrerit arcu, sit amet malesuada sapien erat quis leo. In a metus a augue suscipit dictum vitae ac nulla. Curabitur accumsan tempus nunc at sagittis. Sed sed ex nec risus interdum varius. Vestibulum in tincidunt turpis. Mauris finibus, erat at tempus dapibus, augue mauris accumsan diam, convallis facilisis odio purus a nunc. Duis suscipit eros nec leo consequat, id porta lacus consectetur. Mauris id tortor feugiat, lobortis erat eu, finibus dolor.</p>', 0, 1, '2022-05-23 09:34:09', '2022-05-23 09:34:09'),
(6, 'Lorem ipsum 1234 56789 10 18158jfoasnfosa', 'lorem-ipsum-1234-56789-10-18158jfoasnfosa', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1653302657/wcqyw3gbmqhtzidgijb3.jpg', 'wcqyw3gbmqhtzidgijb3', '<p>abcxyz</p>', '<h3>xyz</h3>', 1, 1, '2022-05-23 10:42:46', '2022-05-23 10:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `send_contact`
--

CREATE TABLE `send_contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `nameContact` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailContact` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contentContact` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_contact`
--

INSERT INTO `send_contact` (`id`, `nameContact`, `emailContact`, `contentContact`) VALUES
(8, 'Tai Nguyen', 'tainguyen21102001@gmail.com', 'fhasfoisajfiosajviosajvoisajoidvjsauhvdhsaiodnsaoudnvsoandvosa');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicId_cloudinary` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `images`, `title`, `publicId_cloudinary`) VALUES
(1, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652077966/quatvietnam-b1_xse1q2.jpg', 'quatvietnam-b1', 'quatvietnam-b1_xse1q2'),
(2, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652078181/b-quatvietnam-150721_kejzby.jpg', 'b-quatvietnam-150721', 'b-quatvietnam-150721_kejzby'),
(3, 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652078247/b-quatvietnam-3_d1vqzl.jpg', 'b-quatvietnam-3', 'b-quatvietnam-3_d1vqzl');

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
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = normal user, 1 = admin user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'Tai Nguyen', 'taintp21@gmail.com', 'https://res.cloudinary.com/dxzwdejly/image/upload/v1652632159/icawmtfoimtmjypbrnd3.jpg', NULL, '$2y$10$iqKmuBeek9UUoFFZtd9MI.Yfuf4L6A8wJQUpyGpgt6/x1zg1Y2JlC', 'vI6wl1CsxVuxZb4VmxmLPDPHaPgjTFV9KZ19ddJvxOC2vzBKTPkmVuK7YDAF', 1, '2022-05-12 02:06:28', '2022-05-16 10:40:19');

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
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `promotions_title_unique` (`title`),
  ADD UNIQUE KEY `promotions_slug_unique` (`slug`);

--
-- Indexes for table `send_contact`
--
ALTER TABLE `send_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_registration`
--
ALTER TABLE `product_registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `send_contact`
--
ALTER TABLE `send_contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usage_tips`
--
ALTER TABLE `usage_tips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
