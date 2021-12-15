-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 09:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealon_deals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kazi Khaled Saif', 'saif@admin.com', NULL, '$2y$10$zq9pQJIoZSewJeDDYwFOEu8trNfLnQqH3vxDHv21Z8QT6l8UPP7Aq', NULL, '2021-11-27 05:10:22', '2021-11-27 05:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_reasons`
--

CREATE TABLE `cancel_reasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `reasons` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancel_reasons`
--

INSERT INTO `cancel_reasons` (`id`, `order_id`, `admin_id`, `reasons`, `created_at`, `updated_at`) VALUES
(3, 3, 1, 'because thisis nnot found', '2021-12-07 12:02:11', '2021-12-07 13:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `banner`, `created_at`, `updated_at`) VALUES
(10, 'Mobile Phone', 'mobile-phone', 'categories/thumb_61a27d0bf347d6.76356323SQjPL.png', '2021-11-27 12:46:36', '2021-11-27 12:46:36'),
(11, 'Television', 'television', 'categories/thumb_61ba2d8640af36.65956167HLkRa.jpg', '2021-11-27 12:46:42', '2021-12-15 12:01:42'),
(12, 'Fridge', 'fridge', 'categories/thumb_61ba2daa87cee2.10139628w57AK.jpg', '2021-11-27 12:46:48', '2021-12-15 12:02:18'),
(13, 'Wasing Mechine', 'wasing-mechine', 'categories/thumb_61ba2dfcc30dd3.71790680Vy0bX.png', '2021-11-27 12:46:53', '2021-12-15 12:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) DEFAULT NULL,
  `percent_off` decimal(8,2) DEFAULT NULL,
  `expire` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `per_user_limit` int(11) DEFAULT NULL,
  `max_limit` int(11) DEFAULT NULL,
  `minimum_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent_off`, `expire`, `created_at`, `updated_at`, `per_user_limit`, `max_limit`, `minimum_amount`) VALUES
(2, 'test', 'fixed', '10.00', NULL, '2021-12-13 00:00:00', '2021-12-13 14:05:10', '2021-12-13 14:09:01', NULL, NULL, NULL),
(3, 'test2', 'percent_off', NULL, '50.00', '2021-12-23 00:00:00', '2021-12-13 14:20:45', '2021-12-13 14:20:45', NULL, NULL, NULL),
(4, 'test3', 'percent_off', NULL, '50.00', NULL, '2021-12-13 14:50:03', '2021-12-13 14:50:03', 0, 2, NULL),
(5, 've2', 'fixed', '50.00', NULL, '2021-12-17 00:00:00', '2021-12-14 13:45:56', '2021-12-14 13:53:10', 51, 101, NULL),
(6, 'virtual', 'fixed', '500.00', NULL, NULL, '2021-12-15 13:53:36', '2021-12-15 14:23:35', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `featured_categories`
--

CREATE TABLE `featured_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_categories`
--

INSERT INTO `featured_categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Mobile Phone', 'mobile-phone', 'featuredcategory/featuredcategory_61ba2b8459bac5.64760608gHmYX.jpg', '2021-12-01 08:47:09', '2021-12-15 11:53:08'),
(5, 'Television', 'television', 'featuredcategory/featuredcategory_61ba2b8bee3ca6.210031624UL0L.jpg', '2021-12-01 09:12:01', '2021-12-15 11:53:15'),
(6, 'Fridge', 'fridge', 'featuredcategory/featuredcategory_61ba2b96d926a4.64637885YIfMT.jpg', '2021-12-15 11:53:26', '2021-12-15 11:53:26'),
(7, 'Wasing Mechine', 'wasing-mechine', 'featuredcategory/featuredcategory_61ba2ba1307527.967827409Vjlm.jpg', '2021-12-15 11:53:37', '2021-12-15 11:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_02_14_170042_create_products_table', 1),
(4, '2019_02_20_145359_create_categories_table', 1),
(5, '2019_02_22_100150_create_reviews_table', 1),
(6, '2019_03_02_062814_create_coupons_table', 1),
(7, '2019_03_02_105032_create_sliders_table', 1),
(8, '2019_03_02_105121_create_featured_categories_table', 1),
(9, '2019_03_05_102636_create_orders_table', 1),
(10, '2019_03_05_102739_create_order_products_table', 1),
(11, '2019_03_05_111815_create_order_indices_table', 1),
(12, '2019_03_05_173033_create_feedback_table', 1),
(13, '2019_03_05_173354_create_newsletters_table', 1),
(14, '2021_11_03_175232_create_admins_table', 1),
(15, '2021_11_20_195713_add_columns_to_users_table', 1),
(16, '2021_12_01_160802_create_settings_table', 2),
(18, '2021_12_06_133432_add_per_user_max_item_to_products', 3),
(20, '2021_12_07_152621_create_cancel_reasons_table', 4),
(21, '2021_12_13_202912_add_columns_to_coupons', 5),
(22, '2021_12_13_203112_create_user_coupons_table', 5),
(23, '2021_12_16_202912_add_amount_columns_to_coupons', 6);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `mail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdasdasda@gmail.com', 1, '2021-12-12 05:03:02', '2021-12-12 05:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `billing_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_town` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_discount` double DEFAULT 0,
  `billing_discount_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_subtotal` double NOT NULL,
  `billing_shipping_fee` double DEFAULT NULL,
  `billing_total` double NOT NULL,
  `billing_payment_gateway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'paypal',
  `shipped` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `billing_email`, `billing_first_name`, `billing_last_name`, `billing_phone_no`, `billing_address`, `billing_town`, `billing_city`, `billing_zip_code`, `billing_discount`, `billing_discount_code`, `billing_subtotal`, `billing_shipping_fee`, `billing_total`, `billing_payment_gateway`, `shipped`, `status`, `billing_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'saif@user.com', 'Kazi Khaled', 'saif', '01521330148', '86', 'Dhaka', 'Dhaka', '12143', 0, '0', 120, 0, 120, 'paypal', 0, 'Shipped', NULL, '2021-12-06 10:16:33', '2021-12-07 12:40:28'),
(2, 1, 'saif@us2er.com', 'Kazi Khaled', 'saif', '01521330148', '86', 'Dhaka', 'Dhaka', '12143', 0, '0', 0, 0, 0, 'paypal', 0, 'Received', NULL, '2021-12-06 10:16:53', '2021-12-07 12:30:43'),
(3, 1, 'saif@user.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala', 'Dhaka', 'Dhaka', '1214', 0, '0', 82000, 0, 82000, 'Cash in delivery', 0, 'Cancelled', NULL, '2021-12-07 12:58:32', '2021-12-07 13:52:49'),
(4, 1, 'saif@user.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala', 'Dhaka', 'Dhaka', '1214', 0, '0', 82000, 0, 82000, 'Cash in delivery', 0, 'Cancelled', NULL, '2021-12-07 13:00:10', '2021-12-07 13:51:59'),
(5, 1, 'saif@user.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala', 'Dhaka', 'Dhaka', '1214', 0, '0', 82000, 0, 82000, 'Cash in delivery', 0, 'Received', NULL, '2021-12-08 01:57:11', '2021-12-08 01:57:11'),
(6, 1, 'saif@user.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala', 'Dhaka', 'Dhaka', '1214', 0, '0', 0, 0, 0, 'Cash in delivery', 0, 'Received', NULL, '2021-12-08 02:00:03', '2021-12-08 02:00:03'),
(7, 1, 'saif@user.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala', 'Dhaka', 'Dhaka', '1214', 0, '0', 120, 0, 120, 'Cash in delivery', 0, 'Delivered', NULL, '2021-12-08 02:03:46', '2021-12-14 15:24:40'),
(8, 1, 'saif@user.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala', 'Dhaka', 'Dhaka', '1214', 240, 'test3', 480, 0, 240, 'Cash on delivery', 0, 'Received', NULL, '2021-12-13 16:06:25', '2021-12-13 16:06:25'),
(9, 1, 'saif@user.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala', 'Dhaka', 'Dhaka', '1214', 240, 'test3', 120, 0, -120, 'Cash on delivery', 0, 'Received', NULL, '2021-12-13 16:08:35', '2021-12-13 16:08:35'),
(10, 1, 'kksaif05@gmail.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala/ Dhaka', 'Dhaka', 'Dhaka', '1214', 500, 'virtual', 120, 60, -320, 'Cash on delivery', 0, 'Received', NULL, '2021-12-15 14:23:49', '2021-12-15 14:23:49'),
(11, 1, 'kksaif05@gmail.com', 'Kazi Khaled', 'Saif', '01521330148', '86/1 Kadamtala/ Dhaka', 'Dhaka', 'Dhaka', '1214', 500, 'virtual', 120, 60, -320, 'Cash on delivery', 0, 'Received', NULL, '2021-12-15 14:25:24', '2021-12-15 14:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_indices`
--

CREATE TABLE `order_indices` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracker` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_indices`
--

INSERT INTO `order_indices` (`id`, `user_id`, `order_no`, `tracker`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '88a5a7774ef4d768', '2021-12-06 10:16:33', '2021-12-06 10:16:33'),
(2, '1', '2', 'eceaa36043a3d493', '2021-12-06 10:16:53', '2021-12-06 10:16:53'),
(3, '1', '3', '187e918d90c446b1', '2021-12-07 12:58:32', '2021-12-07 12:58:32'),
(4, '1', '5', '1bc8b8538c7f7bb3', '2021-12-08 01:57:11', '2021-12-08 01:57:11'),
(5, '1', '6', 'bf0312284ae69659', '2021-12-08 02:00:03', '2021-12-08 02:00:03'),
(6, '1', '7', 'cffae9cb0e421d8d', '2021-12-08 02:03:46', '2021-12-08 02:03:46'),
(7, '1', '8', '05498cbc54d45cf7', '2021-12-13 16:06:25', '2021-12-13 16:06:25'),
(8, '1', '9', '2a0fdda3bb5f4cb2', '2021-12-13 16:08:35', '2021-12-13 16:08:35'),
(9, '1', '10', '8b20e13a9735a061', '2021-12-15 14:23:49', '2021-12-15 14:23:49'),
(10, '1', '11', 'ca3189e67639328b', '2021-12-15 14:25:24', '2021-12-15 14:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `price` double NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `price`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 120, 4, 1, '2021-12-06 10:16:33', '2021-12-06 10:16:33'),
(2, 3, 82000, 3, 1, '2021-12-07 12:58:32', '2021-12-07 12:58:32'),
(3, 4, 82000, 3, 1, '2021-12-07 13:00:10', '2021-12-07 13:00:10'),
(4, 5, 82000, 3, 1, '2021-12-08 01:57:11', '2021-12-08 01:57:11'),
(5, 7, 120, 4, 1, '2021-12-08 02:03:46', '2021-12-08 02:03:46'),
(6, 8, 120, 4, 4, '2021-12-13 16:06:25', '2021-12-13 16:06:25'),
(7, 9, 120, 4, 1, '2021-12-13 16:08:35', '2021-12-13 16:08:35'),
(8, 10, 120, 22, 1, '2021-12-15 14:23:49', '2021-12-15 14:23:49'),
(9, 11, 120, 22, 1, '2021-12-15 14:25:24', '2021-12-15 14:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saif@user.com', 'vqjYsaFoSYS939KDT69gocKdOCpQftqIrzjzH5oD8V6DGkPTbTx5nKiu54Ejk0yb', '2021-12-15 10:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `discount_price` decimal(8,2) DEFAULT 0.00,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `percentage` int(11) DEFAULT NULL,
  `badge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekly_deal` datetime DEFAULT NULL,
  `rating` decimal(8,2) DEFAULT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `per_user_max_item` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `regular_price`, `discount_price`, `description`, `feature_name`, `feature_color`, `category_id`, `stock`, `percentage`, `badge`, `weekly_deal`, `rating`, `product_image`, `gallery_image1`, `gallery_image2`, `gallery_image3`, `gallery_image4`, `created_at`, `updated_at`, `per_user_max_item`) VALUES
(3, 'Iphone 12', 'iphone-12', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-12-29 00:00:00', '3.00', 'products/thumb_61ba3103c3fe89.038958167u79H.jpg', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:16:35', NULL),
(4, 'Test product With Max purchases', 'test-product-with-max-purchases', 'tsetsetse', '120.00', NULL, '<p>sdsds</p>', 'dasda', 'sd', 10, 5, NULL, NULL, '2021-12-16 00:00:00', '5.00', 'products/thumb_61ba300d416783.80487981BaB2Q.jpg', '', '', '', '', '2021-12-06 07:48:40', '2021-12-15 12:12:29', NULL),
(9, 'Iphone 12', 'iphone-12sdsdsd', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-11-30 00:00:00', '0.50', 'products/thumb_61ba315739ead6.37997856Zg1to.jpg', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:17:59', NULL),
(10, 'Test product With Max purchases', 'test-product-with-max-purchasesdsds', 'tsetsetse', '120.00', NULL, '<p>sdsds</p>', 'dasda', 'sd', 10, 5, NULL, NULL, NULL, '5.00', 'products/thumb_61ae14b83f3bc2.20864337zHtAq.png', '', '', '', '', '2021-12-06 07:48:40', '2021-12-14 14:37:48', 2),
(11, 'Iphone 12', 'iphone-12sdsadasd', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-11-30 00:00:00', '0.50', 'products/thumb_61ba31408058b2.08592292J1cam.png', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:17:36', NULL),
(13, 'Iphone 12', 'iphone-12sdsdsdasdasd', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-11-30 00:00:00', '5.00', 'products/thumb_61ba3167e7f8a0.28904702TCaTP.png', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:18:15', NULL),
(14, 'Test product With Max purchases', 'test-product-with-max-purchasesdsdsasdasd', 'tsetsetse', '120.00', NULL, '<p>sdsds</p>', 'dasda', 'sd', 10, 5, NULL, NULL, NULL, '2.00', 'products/thumb_61ae14b83f3bc2.20864337zHtAq.png', '', '', '', '', '2021-12-06 07:48:40', '2021-12-15 11:33:59', 2),
(15, 'Iphone 12', 'iphone-1233', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-12-29 00:00:00', '3.00', 'products/thumb_61ba3103c3fe89.038958167u79H.jpg', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:16:35', NULL),
(16, 'Test product With Max purchases', 'test-product-with-max-purchases2', 'tsetsetse', '120.00', NULL, '<p>sdsds</p>', 'dasda', 'sd', 10, 5, NULL, NULL, '2021-12-16 00:00:00', '5.00', 'products/thumb_61ba300d416783.80487981BaB2Q.jpg', '', '', '', '', '2021-12-06 07:48:40', '2021-12-15 12:12:29', NULL),
(17, 'Iphone 12', 'iphone-12sdsdsd4', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-11-30 00:00:00', '0.50', 'products/thumb_61ba315739ead6.37997856Zg1to.jpg', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:17:59', NULL),
(21, 'Iphone 12', 'iphone-125388', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-12-29 00:00:00', '3.00', 'products/thumb_61ba3103c3fe89.038958167u79H.jpg', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:16:35', NULL),
(22, 'Test product With Max purchases', 'test-product-with-max-purchases4267', 'tsetsetse', '120.00', NULL, '<p>sdsds</p>', 'dasda', 'sd', 10, 3, NULL, NULL, '2021-12-16 00:00:00', '5.00', 'products/thumb_61ba300d416783.80487981BaB2Q.jpg', '', '', '', '', '2021-12-06 07:48:40', '2021-12-15 14:25:24', NULL),
(23, 'Iphone 12', 'iphone-12sdsdsd45766', 'This is new Iphone', '90000.00', '82000.00', '<p>This is ta ndasdjanskjdnasjdnamsdnajksndasndjkas</p>', 'None', 'White', 11, 47, 5, 'Hot', '2021-11-30 00:00:00', '0.50', 'products/thumb_61ba315739ead6.37997856Zg1to.jpg', 'products/gallery_61a28eb707f421.50561156UDO66.jpg', 'products/gallery_61a28eb70b2312.14909237lWz5v.jpg', 'products/gallery_61a28eb70b9e18.82639148T3j8l.jpg', 'products/gallery_61a28eb70c34e8.89125606zqOad.jpg', '2021-11-27 14:01:59', '2021-12-15 12:17:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `pid`, `uid`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 5.00, 'good product', '2021-12-14 14:37:48', '2021-12-14 14:37:48'),
(3, 3, 1, 3.00, NULL, '2021-12-15 11:33:47', '2021-12-15 11:33:47'),
(4, 14, 1, 2.00, NULL, '2021-12-15 11:33:59', '2021-12-15 11:33:59'),
(5, 13, 1, 5.00, NULL, '2021-12-15 11:34:10', '2021-12-15 11:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `delivery_cost` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `delivery_cost`, `created_at`, `updated_at`) VALUES
(7, 60, '2021-12-14 14:02:01', '2021-12-14 14:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title1`, `title2`, `detail`, `img`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Welcome To Doozo', 'Grocery | Essentials', 'Your one stop solution', 'slider/slider_61ba2a3952a397.73408013dcDdu.jpg', '/shop', '2021-12-15 11:47:37', '2021-12-15 11:47:37'),
(5, 'Welcome To Doozo 2', 'Grocery | Essentials 2', 'Your one stop solution 2', 'slider/slider_61ba2a5c8f1fd7.15603015HjVYc.jpg', '/shop', '2021-12-15 11:48:12', '2021-12-15 11:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `last_name`, `phone`, `address`, `city`, `state`, `zip`) VALUES
(1, 'Kazi Khaled', 'kksaif05@gmail.com', NULL, '$2y$10$chhR.lJiFi5FvZ/T55XKYeE7M1wTXqODT3IA9zHvqZEjBA7ZGD5DG', 'bhUxoteWvKtgXnI1hAJRRjKqaNJ4UcIiSHSbm9xUK92dIT4k6Qwjy0jKrCE0', '2021-12-02 14:13:37', '2021-12-15 12:33:05', 'Saif', '01521330148', '86/1 Kadamtala/ Dhaka', 'Dhaka', 'Dhaka', '1214');

-- --------------------------------------------------------

--
-- Table structure for table `user_coupons`
--

CREATE TABLE `user_coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `coupon_id` int(10) UNSIGNED NOT NULL,
  `redeemed_number` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_coupons`
--

INSERT INTO `user_coupons` (`id`, `user_id`, `coupon_id`, `redeemed_number`, `created_at`, `updated_at`) VALUES
(5, 1, 4, 17, '2021-12-13 15:54:46', '2021-12-15 14:32:42'),
(6, 1, 6, 7, '2021-12-15 14:00:07', '2021-12-15 14:32:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cancel_reasons`
--
ALTER TABLE `cancel_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_categories`
--
ALTER TABLE `featured_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_indices`
--
ALTER TABLE `order_indices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_coupons`
--
ALTER TABLE `user_coupons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cancel_reasons`
--
ALTER TABLE `cancel_reasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `featured_categories`
--
ALTER TABLE `featured_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_indices`
--
ALTER TABLE `order_indices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_coupons`
--
ALTER TABLE `user_coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
