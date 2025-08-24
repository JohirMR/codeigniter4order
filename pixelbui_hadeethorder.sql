-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2025 at 03:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixelbui_hadeethorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class_name` varchar(50) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `class_id`, `name`, `class_name`, `slug`, `price`, `image`, `created_at`, `updated_at`) VALUES
(10, 2, 'আরবী বর্ণমালা', 'নার্সারী শ্রেণী', 'arobi_bornomala', 50.00, 'uploads/books/arobi_bornomala.jpg', NULL, NULL),
(11, 2, 'বাংলা বর্ণমালা', 'নার্সারী শ্রেণী', 'bangla_bornomala', 50.00, 'uploads/books/bangla_bornomala.jpg', NULL, NULL),
(12, 2, 'ইংরেজি বর্ণমালা', 'নার্সারী শ্রেণী', 'english', 50.00, 'uploads/books/english.jpg', NULL, NULL),
(13, 2, 'গণিত শিক্ষা', 'নার্সারী শ্রেণী', 'math', 50.00, 'uploads/books/math.jpg', NULL, NULL),
(14, 2, 'শিশুর দ্বীনিয়াত', 'শিশু শ্রেণী', 'Shishu_Diniyet', 45.00, 'uploads/books/Shishu_Diniyet.jpg', NULL, NULL),
(15, 2, 'শিশুর আরবী', 'শিশু শ্রেণী', 'Shishu_Arabic', 50.00, 'uploads/books/Shishu_Arabic.jpg', NULL, NULL),
(16, 2, 'শিশুর বাংলা', 'শিশু শ্রেণী', 'Shishu_Bangla', 80.00, 'uploads/books/Shishu_Bangla.jpg', NULL, NULL),
(17, 2, 'শিশুর ইংরেজী', 'শিশু শ্রেণী', 'Shishu_Enlish', 55.00, 'uploads/books/Shishu_Enlish.jpg', NULL, NULL),
(18, 2, 'শিশুর গণিত', 'শিশু শ্রেণী', 'Shishu_math', 50.00, 'uploads/books/Shishu_math.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, 'নার্সারী শ্রেণী'),
(2, 'শিশু শ্রেণী'),
(3, 'হিফয/মক্তব শ্রেণী'),
(4, '১ম শ্রেণী'),
(5, '২য় শ্রেণী'),
(6, '৩য় শ্রেণী'),
(7, '৪র্থ শ্রেণী'),
(8, '৫ম শ্রেণী'),
(9, '৬ষ্ঠ শ্রেণী'),
(10, 'বিভিন্ন শ্রেণীর জন্য প্রয়োজনীয় বই সমূহ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(7, '2025-08-19-182241', 'App\\Database\\Migrations\\CreateBooks', 'default', 'App', 1755955768, 1),
(8, '2025-08-19-182247', 'App\\Database\\Migrations\\CreateOrders', 'default', 'App', 1755955768, 1),
(9, '2025-08-19-182253', 'App\\Database\\Migrations\\CreateOrderItems', 'default', 'App', 1755955768, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_mobile` varchar(20) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `class_name` varchar(50) DEFAULT NULL,
  `book_name` varchar(200) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `books_class_id_foreign` (`class_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
