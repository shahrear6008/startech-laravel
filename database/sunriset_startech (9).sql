-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 03:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunriset_startech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` enum('Reg','Not-Reg') NOT NULL,
  `qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_attr_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(10) NOT NULL,
  `pid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `productprice` varchar(100) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `pid`, `uid`, `quantity`, `productprice`, `timestamp`) VALUES
(1, 4, 1, 1, '50000', '2022-03-22 11:35:18.184663');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `parent_category_id`, `category_image`, `is_home`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Man', 'man', 0, '1613552454.jpg', 1, 1, '2021-02-17 03:30:54', '2021-02-22 03:04:06'),
(2, 'Woman', 'woman', 0, '1613553509.jpg', 1, 1, '2021-02-17 03:31:24', '2021-02-17 03:48:29'),
(3, 'Kids', 'kids', 0, '1613552512.jpg', 1, 1, '2021-02-17 03:31:52', '2021-02-17 03:31:52'),
(4, 'Bag', 'bag', 2, '1613553407.jpg', 1, 1, '2021-02-17 03:46:07', '2021-02-22 02:42:42'),
(5, 'Shoes', 'shoes', 3, NULL, 0, 1, '2021-02-17 04:24:40', '2021-02-17 04:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(3) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `company` varchar(250) NOT NULL,
  `address_1` varchar(200) NOT NULL,
  `address_2` varchar(250) NOT NULL,
  `mobile` int(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `postcode` int(10) NOT NULL,
  `zone` text NOT NULL,
  `comment` varchar(500) NOT NULL,
  `payment_method` varchar(250) NOT NULL,
  `shipping_method` varchar(250) NOT NULL,
  `address_type` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black', 1, '2021-01-25 21:12:11', '2021-01-28 05:15:28'),
(2, 'Red', 1, '2021-01-25 21:12:22', '2021-01-28 04:02:42'),
(3, 'White', 1, '2021-02-17 04:01:35', '2021-02-17 04:01:35'),
(4, 'Cream', 1, '2021-02-24 00:57:35', '2021-02-24 00:57:35'),
(5, 'Green', 1, '2021-02-24 00:57:45', '2021-02-24 00:57:45'),
(6, 'Purple', 1, '2021-02-24 00:57:57', '2021-02-24 00:57:57'),
(7, 'Blue', 1, '2021-02-24 01:00:15', '2021-02-24 01:00:15'),
(8, 'Yellow', 1, '2021-02-24 01:06:42', '2021-02-24 01:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `compare_items`
--

CREATE TABLE `compare_items` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gstin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_verify` int(11) NOT NULL,
  `is_forgot_password` int(11) NOT NULL,
  `rand_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `address`, `city`, `state`, `zip`, `company`, `gstin`, `status`, `is_verify`, `is_forgot_password`, `rand_id`, `created_at`, `updated_at`) VALUES
(1, 'Vishal Gupta', 'vishal@gmail.com', '9999999999', 'vishal', 'Address1', 'Delhi', 'Delhi', '111111', 'My Company Name', 'ABCDEGGST', 0, 0, 0, '', '2021-02-08 08:14:02', '2021-02-08 03:16:54'),
(8, 'Vishal', 'learnweblessons@gmail.com', '9999999999', 'Component', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '302653259', '2021-03-12 03:09:52', '2021-03-12 03:09:52'),
(15, 'Amit Gupta', 'phpvishal@gmail.com', '9999999999', 'eyJpdiI6IlpFVW5ZenFmWUxQOHEvWC90TlhreXc9PSIsInZhbHVlIjoid1RBa1lWbEl4WGF1QjlsV1ZtMnB5QT09IiwibWFjIjoiZTUwOWU0MDYxNGQ3MjZhMmQ5OWZkMGE2Njc1Yjc1MGI5ZThkODFlNjNiMmUzN2Y5ZmI5NTgyNWQ1N2FhOTRkZCJ9', 'test', 'asd', 'asd', '4534545345', NULL, NULL, 1, 1, 0, '165808257', '2021-04-23 03:16:10', '2021-04-23 03:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `description`, `link`) VALUES
(1, 'W3Schools', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.', 'https://www.w3schools.com'),
(2, 'YouTube', 'YouTube is an online video platform owned by Google. In total, users watch more than one billion hours of YouTube videos each day, and hundreds of hours of video content are uploaded to YouTube servers every minute.', 'https://www.youtube.com/'),
(3, 'Google ', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware', 'http://www.google.com'),
(4, 'Facebook', 'Facebook, Inc., is an American technology conglomerate based in Menlo Park, California. It was founded by Mark Zuckerberg, along with his fellow roommates and students at Harvard College, who were', 'https://www.facebook.com'),
(5, 'Instagram', 'Instagram is an American photo and video sharing social networking service created by Kevin Systrom and Mike Krieger. In April 2012, Facebook acquired the service for approximately US$1 billion in cash and stock', 'https://www.instagram.com'),
(6, 'Twitter', 'Twitter is an American microblogging and social networking service on which users post and interact with messages known as \"tweets\". Registered users can post, like, and retweet tweets, but unregistered users can only read them', 'https://twitter.com'),
(7, 'Habeshasoft', 'Habeshasoft is Web, Mobile App and Software Development Enterprise based on Ethiopian', 'https://habeshasoft.com'),
(8, 'GitHub', 'GitHub, Inc. is a provider of Internet hosting for software development and version control using Git. It offers the distributed version control and source code management functionality of Git, plus its own features.', 'http://github.com');

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
(5, '2022_04_08_203027_create_slider_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `pid`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(1, 1, 2, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6264400806d6e', 'BDT'),
(2, 1, 4, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6264400845938', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `ordertracking`
--

CREATE TABLE `ordertracking` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `pc_builder`
--

CREATE TABLE `pc_builder` (
  `id` int(11) NOT NULL,
  `uid` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc_builder`
--

INSERT INTO `pc_builder` (`id`, `uid`, `pid`, `cid`, `added_on`) VALUES
(16, '147288977', 10, 1, '2022-04-28 02:31:10'),
(17, '147288977', 26, 2, '2022-04-28 02:31:16'),
(31, '548944548', 11, 2, '2022-04-28 03:02:01'),
(35, '548944548', 10, 1, '2022-04-28 03:02:58');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_specification` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `is_promo` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_discounted` int(11) NOT NULL,
  `is_tranding` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `image`, `slug`, `brand`, `model`, `short_desc`, `desc`, `keywords`, `technical_specification`, `uses`, `warranty`, `lead_time`, `tax_id`, `is_promo`, `is_featured`, `is_discounted`, `is_tranding`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Polo T Shirt', './img/upload/product1.jpg', 'polo-t-shirt', '1', 'Polo T Shirt - Nike', '<p>100% Original Products</p>\r\n\r\n<p>Free Delivery on order above Rs.&nbsp;799</p>\r\n\r\n<p>Pay on delivery might be available</p>\r\n\r\n<p>Easy 30 days returns and exchanges</p>\r\n\r\n<p>Try &amp; Buy might be available</p>', NULL, 'Polo T Shirt, Polo T Shirt - Nike', NULL, 'T Shirt For Man', 'Easy 30 days returns and exchanges', 'Same day delivery', 1, 0, 1, 1, 1, 1, '2021-02-17 04:00:59', '2021-02-24 00:59:45'),
(2, 1, 'Peter England Blue Shirt', './img/upload/product1.jpg', 'peter-england-blue-shirt', '3', 'Peter England Blue Shirt', '<p>Make an impression in this blue check shirt, tailored in Super Slim Fit from Peter England Jeans by Peter England.</p>', '<p>Brand : Peter England<br />\r\nSubbrand : Peter England Jeans<br />\r\nFit : Super Slim Fit<br />\r\nPattern : Check<br />\r\nOccasion : Casual<br />\r\nColor : Blue<br />\r\nMaterial : 100% Cotton<br />\r\nSleeves : Full Sleeves<br />\r\nCuffs : Regular Cuff<br />\r\nCollar : Regular Collar<br />\r\nProduct Type : Shirt<br />\r\nBrand Fit : Super Slim Fit</p>', 'Brand : Peter England\r\nSubbrand : Peter England Jeans\r\nFit : Super Slim Fit\r\nPattern : Check\r\nOccasion : Casual\r\nColor : Blue\r\nMaterial : 100% Cotton\r\nSleeves : Full Sleeves\r\nCuffs : Regular Cuff\r\nCollar : Regular Collar\r\nProduct Type : Shirt\r\nBrand Fit : Super Slim Fit', NULL, 'N/A', 'N/A', 'Delivery in 3 days', 1, 0, 1, 0, 1, 1, '2021-02-17 04:14:41', '2021-02-17 04:14:41'),
(3, 1, 'Black Printed Sweatshirt', './img/upload/product1.jpg', 'women-black-printed-as-sweatshirt', '1', 'Women Black Printed AS W NK ICNCLSH MIDLAYER Sweatshirt', '<p>100% Original Products</p>\r\n\r\n<p>Free Delivery on order above Rs.&nbsp;799</p>\r\n\r\n<p>Pay on delivery might be available</p>\r\n\r\n<p>Easy 15 days returns and exchanges</p>\r\n\r\n<p>Try &amp; Buy might be available</p>', '<p>Black printed sweatshirt<br />\r\nhas a mock collar<br />\r\nlong sleeves<br />\r\nhalf zipper closure<br />\r\nstraight hem</p>', 'N/A', NULL, 'N/A', '6 months against manufacturing defects (not valid on products with more than 20% discount)', NULL, 1, 0, 0, 0, 1, 1, '2021-02-17 04:18:54', '2021-03-08 14:05:25'),
(4, 3, 'Boy\'s Thrum K Running Shoes', './img/upload/product1.jpg', 'boys-thrum-running-shoes', '2', 'Adidas Boy\'s Thrum K Running Shoes', '<p>Closure: Lace-Up<br />\r\nShoe Width: Regular<br />\r\nOuter Material: Synthetic<br />\r\nClosure Type: Lace-Up<br />\r\nToe Style: Round Toe<br />\r\nWarranty Type: Manufacturer &amp; Seller<br />\r\nWarranty Description: 90 days</p>', '<p><strong>Package Dimensions</strong> : 26.8 x 18.4 x 10.8 cm; 470 Grams<br />\r\n<strong>Date First Available</strong> : 18 December 2019<br />\r\n<strong>Manufacturer </strong>: ADIDAS<br />\r\n<strong>ASIN </strong>: B082WTQMLF<br />\r\n<strong>Item model number :</strong> CM6326<br />\r\n<strong>Department </strong>: Boys<br />\r\n<strong>Manufacturer </strong>: ADIDAS<br />\r\n<strong>Item Weight</strong> : 470 g<br />\r\n<strong>Package Dimensions : 26.8 x 18.4 x 10.8 cm; 470 Grams<br />\r\nDate First Available : 18 December 2019<br />\r\nManufacturer : ADIDAS<br />\r\nASIN : B082WTQMLF<br />\r\nItem model number : CM6326<br />\r\nDepartment : Boys<br />\r\nManufacturer : ADIDAS<br />\r\nItem Weight : 470 g<br />\r\nGeneric Name : Running Shoes</strong> : Running Shoes</p>', 'N/A', '<p>N/A</p>', 'N/A', '90 days', NULL, 1, 0, 1, 0, 0, 1, '2021-02-17 04:29:08', '2021-02-23 02:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `products_attr`
--

CREATE TABLE `products_attr` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `attr_image` varchar(255) DEFAULT NULL,
  `mrp` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_attr`
--

INSERT INTO `products_attr` (`id`, `products_id`, `sku`, `attr_image`, `mrp`, `price`, `qty`, `size_id`, `color_id`) VALUES
(1, 1, '111', '705130315.jpg', 999, 10, 5, 2, 1),
(2, 1, '112', '509937030.jpg', 999, 749, 3, 1, 7),
(3, 2, '124', '499793402.png', 1499, 1199, 3, 1, 1),
(4, 3, '116', '608075258.jpg', 3495, 2411, 18, 0, 1),
(5, 4, '121', '115102277.jpg', 1071, 899, 5, 0, 0),
(6, 1, '113', '216831743.jpg', 999, 749, 23, 3, 8),
(7, 1, '114', '436707592.jpg', 999, 749, 31, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `category_id` int(10) NOT NULL,
  `component_id` varchar(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_watt` int(100) NOT NULL DEFAULT 20,
  `product_image` varchar(100) DEFAULT NULL,
  `product_thumb1` varchar(100) NOT NULL,
  `product_thumb2` varchar(100) NOT NULL,
  `product_model` varchar(255) NOT NULL,
  `product_brand` varchar(55) NOT NULL,
  `product_camera` varchar(250) NOT NULL,
  `product_availability` varchar(50) NOT NULL,
  `product_weight` int(100) NOT NULL,
  `product_summary` varchar(50) NOT NULL,
  `product_processor` varchar(50) NOT NULL,
  `product_ram` varchar(50) NOT NULL,
  `product_graphics_card` varchar(20) NOT NULL,
  `product_storage` varchar(25) NOT NULL,
  `product_rating` varchar(25) NOT NULL DEFAULT '',
  `product_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `component_id`, `product_name`, `product_price`, `product_watt`, `product_image`, `product_thumb1`, `product_thumb2`, `product_model`, `product_brand`, `product_camera`, `product_availability`, `product_weight`, `product_summary`, `product_processor`, `product_ram`, `product_graphics_card`, `product_storage`, `product_rating`, `product_quantity`) VALUES
(1, 1, '11', 'Intel Atom x5-Z8350 Processor', 14000, 20, './img/upload/product1.jpg', './img/upload/product2.jpg', './img/upload/product6.jpg', 'Model No.  5462', 'Walton', '12MP', 'available', 250, 'out of stock', 'Snapdragon', '4', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', 'Rating', ''),
(2, 1, '13', 'Intel Atom x5-Z8350 Processor', 8000, 20, './img/upload/product2.jpg', './img/upload/product1.jpg', './img/upload/product1.jpg', 'Model No.  5464', 'xiami', '21MP', 'available', 120, 'In stock', 'intel', '4', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', 'Rating', ''),
(3, 2, '12', 'Apple MacBook Air 13.3-Inch', 10000, 20, './img/upload/product3.jpg', './img/upload/product1.jpg', './img/upload/product6.jpg', 'Model No.  5467', 'Samsung', '8MP', 'out of stock', 200, 'out of stock', 'AMD', '4', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', 'Rating', ''),
(4, 2, '14', 'Apple MacBook Air 13.3-Inch', 50000, 20, './img/upload/product4.jpg', './img/upload/product1.jpg', './img/upload/product6.jpg', 'Model No.  5468', 'Samsung', '88MP', 'out of stock', 150, 'In Stock', 'Intel', '2', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', 'Rating', ''),
(5, 5, '15', 'Apple MacBook Air 13.3-Inch', 20000, 20, './img/upload/product5.jpg', './img/upload/product1.jpg', './img/upload/product6.jpg', 'Model No.  54689', 'Samsung', '18MP', 'out of stock', 130, 'In Stock', 'Intel', '4', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', 'Rating', ''),
(6, 2, '16', 'Zyxel NBG6615 AC1200 MU-MIMO Dual-Band Wireless Gigabit Router', 35000, 20, './img/upload/product6.jpg', './img/upload/product1.jpg', './img/upload/product6.jpg', 'Model No.  54652', 'Apple', '64MP', 'out of stock', 230, 'out of stock', 'AMD', '8', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', '4 star', ''),
(7, 3, '17', 'Apple MacBook Air 13.3-Inch', 18000, 20, './img/upload/product7.jpg', './img/upload/product1.jpg', './img/upload/product6.jpg', 'Model No.  54648', 'Rezar', '18MP', 'out of stock', 450, 'In Stock', 'Intel', '12', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', '4 star', ''),
(8, 1, '14', 'Zyxel NBG6615 AC1200 MU-MIMO Dual-Band Wireless Gigabit Router', 26000, 20, './img/upload/product8.jpg', './img/upload/product1.jpg', './img/upload/product6.jpg', 'Model No.  554682', 'Samsung', '8MP', 'out of stock', 300, 'out of stock', 'Intel', '8', 'Graphics Card Intel ', '2.5\\\" Up to 1TB Hard Driv', '4 star', ''),
(9, 2, '1', 'Apple iphone Air 13.3-Inch', 15000, 20, './img/upload/product6.jpg', './img/upload/product1.jpg', './img/display_product/product0jpg (1).png', 'modelno.4536', 'Samsung', ' 64mp', ' available', 280, ' good condition', 'Intel', '8', ' 4gb', ' 500gb', ' good', ''),
(10, 1, '1', 'Intel cpu core i7', 15000, 10, '/img/profile/processor4.jpg', '/img/profile/', '/img/profile/', 'model no. 4536', 'samsung', '64mp', 'available', 0, 'good condition', 'intel', '8', ' 4gb', '500gb', ' good', '20'),
(11, 2, '2', 'thermaltech cooler', 1800, 12, '/img/profile/antec-a40-pro-cpu-cooling-1-500x500.jpg', '/img/profile/', '/img/profile/', '256', 'tharmaltech', '', 'avilable', 0, 'very good product', 'helio', '12', ' ', '', ' *****', '7'),
(12, 3, '3', 'Mother Board', 20000, 25, '/img/profile/h410m-h-500x500.jpg', '/img/profile/', '/img/profile/', '5241', 'asus', '', 'available', 0, 'good condition', 'mediatak', '4', ' ', '', ' good', '50'),
(13, 4, '4', 'transtec ram card', 3200, 10, '/img/profile/4gb-2666-500x500.jpg', '/img/profile/', '/img/profile/', '5234', 'transtec', '', 'available', 0, 'good condition', 'mediatak', '8', ' ', '', ' good', '10'),
(14, 4, '5', 'western digital', 3500, 15, '/img/profile/kingfast-f6-01-228x228.jpg', '/img/profile/', '/img/profile/', '256', 'wd', '', 'avilable', 0, 'very good product', 'helio', '6', ' ', '1', ' *****', '7'),
(15, 5, '6', 'Toshiba hard disk', 4000, 10, '/img/profile/kingfast-f6-01-228x228.jpg', '/img/profile/nm100-1-228x228.jpg', '/img/profile/kingfast-f6-01-228x228.jpg', 'Rt 7889', 'Toshiba', '', 'available', 0, 'good condition', 'Snapdragon', '2', ' ', '500gb', ' good', '10'),
(16, 6, '7', 'Sigmatic HDD ', 3200, 25, '/img/profile/120gb-1-228x228.jpg', '/img/profile/', '/img/profile/', '5273', 'Seagate', '', 'available', 0, 'good condition', 'mediatak', '8', ' ', '2', ' good', '50'),
(17, 5, '8', 'Graphices card', 8000, 100, '/img/profile/gt730k-2gd3-v-001-228x228.jpg', '/img/profile/', '/img/profile/', '25689', 'nvidia', '', 'avilable', 0, 'very good product', 'Snapdragon', '2', ' 4', '', ' *****', '16'),
(18, 5, '9', 'Tharmaltak Power supply', 2300, 23, '/img/profile/vp450p-plus-1-228x228.jpg', '/img/profile/', '/img/profile/', 'Rt 7809', 'Tharmaltech', '', 'available', 0, 'good condition', 'helio', '12', ' ', '', ' good', '20'),
(19, 5, '10', 'Casing ', 2300, 5, '/img/profile/v9-001-228x228.jpg', '/img/profile/', '/img/profile/', '5241', 'P Power ', '', 'available', 0, 'good condition', 'Snapdragon', '6', ' ', '', ' good', '10'),
(24, 3, '3', 'Mother Board', 27000, 50, '/img/profile/prime-h410m-e-500x500.jpg', '/img/profile/intel-b460m-a-pro-500x500.jpg', '/img/profile/h410m-h-500x500.jpg', 'Rt 7809', 'Gigabyte', '', 'available', 0, 'good condition', 'helio', '8', ' ', '', ' good', '20'),
(25, 3, '3', 'Mother Board', 27000, 50, '/img/profile/prime-h410m-e-500x500.jpg', '/img/profile/intel-b460m-a-pro-500x500.jpg', '/img/profile/h410m-h-500x500.jpg', 'Rt 7809', 'Gigabyte', '', 'available', 0, 'good condition', 'Snapdragon', '6', ' ', '', ' good', '20'),
(26, 3, '2', 'Cooler', 1900, 30, '/img/profile/redragon-reaver-cc-1011-air-cpu-cooler-01-500x500.jpg', '/img/profile/antec-a40-pro-cpu-cooling-1-500x500.jpg', '/img/profile/ice-edge-mini-fs-v2-0-500x500.jpg', '5286', 'Tharmaltech', '', 'available', 0, 'good condition', 'helio', '2', ' ', '', ' good', '50'),
(27, 2, '1', 'CPU ', 20500, 25, '/img/profile/processor9.jpg', '/img/profile/processor4.jpg', '/img/profile/processor10.jpg', '5234', 'Intel', '', 'available', 0, 'good condition', 'i5', '4', ' ', '', ' good', '50');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `review` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `savedpc_items`
--

CREATE TABLE `savedpc_items` (
  `id` int(11) NOT NULL,
  `uid` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcbid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `product_price` varchar(11) NOT NULL,
  `product_watt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savedpc_items`
--

INSERT INTO `savedpc_items` (`id`, `uid`, `pcbid`, `pid`, `cid`, `product_price`, `product_watt`) VALUES
(1, '1', 1, 27, 1, '20500', '25'),
(2, '1', 1, 26, 2, '1900', '30'),
(3, '1', 1, 24, 3, '27000', '50'),
(4, '1', 1, 13, 4, '3200', '10'),
(5, '1', 1, 14, 5, '3500', '15'),
(6, '1', 1, 15, 6, '4000', '10'),
(7, '1', 1, 16, 7, '3200', '25'),
(8, '1', 1, 17, 8, '8000', '100'),
(9, '1', 1, 18, 9, '2300', '23'),
(10, '1', 1, 19, 10, '2300', '5');

-- --------------------------------------------------------

--
-- Table structure for table `saved_pc`
--

CREATE TABLE `saved_pc` (
  `id` int(25) NOT NULL,
  `uid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved_pc`
--

INSERT INTO `saved_pc` (`id`, `uid`, `name`, `description`, `timestamp`) VALUES
(1, 1, 'Xiaomi_F00A', 'test', '2022-03-08 17:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 'XXL', 1, '2021-01-25 20:56:46', '2021-01-28 05:15:24'),
(2, 'XL', 1, '2021-02-24 00:58:04', '2021-02-24 00:58:04'),
(3, 'L', 1, '2021-02-24 00:58:08', '2021-02-24 00:58:08'),
(4, 'M', 1, '2021-02-24 00:58:13', '2021-02-24 00:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_img`, `created_at`, `updated_at`) VALUES
(1, 'img/slider/slider1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'img/slider/slider2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'img/slider/slider3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'img/slider/slider4.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'img/slider/slider5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/profile/pic.jpg',
  `status` int(10) DEFAULT 1,
  `Reward_Points` int(10) NOT NULL DEFAULT 0,
  `Store_Credit` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `email_verified_at`, `password`, `otp`, `remember_token`, `profile_picture`, `status`, `Reward_Points`, `Store_Credit`, `created_at`, `updated_at`) VALUES
(1, 'Shah Rear ', 'Rahman', 'learnweblessons@gmail.com', '01852073174', '0000-00-00 00:00:00', 'Component', '2458956', NULL, 'img/profile/pic.jpg', 1, 100, 0, '2022-04-21 14:50:49', '2022-04-21 14:50:49'),
(2, 'Noman', 'Uddin', 'shahrearrahman@gmail.com', '01254586587', NULL, 'Component', '236541', NULL, 'img/profile/tarack.jpg', 1, 0, 120, '2022-04-28 03:21:26', '2022-04-28 03:21:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_items`
--
ALTER TABLE `compare_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `ordertracking`
--
ALTER TABLE `ordertracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pc_builder`
--
ALTER TABLE `pc_builder`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products_attr`
--
ALTER TABLE `products_attr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savedpc_items`
--
ALTER TABLE `savedpc_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved_pc`
--
ALTER TABLE `saved_pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `compare_items`
--
ALTER TABLE `compare_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertracking`
--
ALTER TABLE `ordertracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pc_builder`
--
ALTER TABLE `pc_builder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_attr`
--
ALTER TABLE `products_attr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savedpc_items`
--
ALTER TABLE `savedpc_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `saved_pc`
--
ALTER TABLE `saved_pc`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
