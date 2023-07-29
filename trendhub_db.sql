-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 03:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendhub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_admin`
--

CREATE TABLE `m_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_brands`
--

CREATE TABLE `m_brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(128) DEFAULT NULL,
  `del_flg` tinyint(4) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_categories`
--

CREATE TABLE `m_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(128) DEFAULT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_customers`
--

CREATE TABLE `m_customers` (
  `id` int(11) NOT NULL,
  `c_name` varchar(128) NOT NULL,
  `c_email` varchar(128) NOT NULL,
  `c_phone` varchar(128) NOT NULL,
  `c_password` varchar(256) NOT NULL,
  `region_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `c_address` varchar(256) NOT NULL,
  `c_profile` varchar(256) DEFAULT NULL,
  `c_points` int(11) NOT NULL DEFAULT 5,
  `wishlist_id` int(11) DEFAULT NULL,
  `def_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_marchents`
--

CREATE TABLE `m_marchents` (
  `id` int(11) NOT NULL,
  `m_name` varchar(128) NOT NULL,
  `m_bname` varchar(128) NOT NULL,
  `m_email` varchar(128) NOT NULL,
  `m_phone` varchar(128) NOT NULL,
  `m_password` varchar(256) NOT NULL,
  `m_licene` varchar(128) NOT NULL,
  `m_logo` varchar(256) NOT NULL,
  `m_address` varchar(256) NOT NULL,
  `del_flg` tinyint(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_months`
--

CREATE TABLE `m_months` (
  `id` int(11) NOT NULL,
  `month` varchar(128) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_products`
--

CREATE TABLE `m_products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `p_stock` int(11) NOT NULL,
  `p_description` varchar(256) NOT NULL,
  `p_detail` varchar(256) NOT NULL,
  `buy_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `merchant_id` int(11) NOT NULL,
  `p_discount` int(11) DEFAULT NULL,
  `review_id` int(11) DEFAULT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_temp_products`
--

CREATE TABLE `m_temp_products` (
  `id` int(11) NOT NULL,
  `product_submit_id` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_contact_customers`
--

CREATE TABLE `t_contact_customers` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `msg_text` varchar(256) NOT NULL,
  `reply_text` varchar(256) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_contact_merchants`
--

CREATE TABLE `t_contact_merchants` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `msg_text` varchar(256) NOT NULL,
  `reply_text` varchar(256) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_monthly_merchant_payments`
--

CREATE TABLE `t_monthly_merchant_payments` (
  `id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_notify_to_merchant`
--

CREATE TABLE `t_notify_to_merchant` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_orders`
--

CREATE TABLE `t_orders` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(128) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `total_amt` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `township_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `order_status` tinyint(4) NOT NULL DEFAULT 0,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_order_details`
--

CREATE TABLE `t_order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_amt` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_payment_method`
--

CREATE TABLE `t_payment_method` (
  `id` int(11) NOT NULL,
  `payment_method` varchar(128) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_product_submits`
--

CREATE TABLE `t_product_submits` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_product_submit_details`
--

CREATE TABLE `t_product_submit_details` (
  `id` int(11) NOT NULL,
  `product_submit_id` int(11) NOT NULL,
  `p_photo` varchar(256) NOT NULL,
  `p_name` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `p_stock` int(11) NOT NULL,
  `p_description` varchar(256) NOT NULL,
  `p_detail` varchar(256) NOT NULL,
  `buy_price` int(11) NOT NULL,
  `sell-price` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `merchant_id` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_review`
--

CREATE TABLE `t_review` (
  `id` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_review_details`
--

CREATE TABLE `t_review_details` (
  `id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `review_text` varchar(256) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `reply_text` varchar(256) DEFAULT NULL,
  `review_photo` varchar(256) DEFAULT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_wishlists`
--

CREATE TABLE `t_wishlists` (
  `id` int(11) NOT NULL,
  `del_flg` int(11) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_wishlist_details`
--

CREATE TABLE `t_wishlist_details` (
  `id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `del_flg` tinyint(4) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ui_setting`
--

CREATE TABLE `ui_setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `primary_color` varchar(128) DEFAULT NULL,
  `secondary_color` varchar(128) DEFAULT NULL,
  `tertiary_color` varchar(256) DEFAULT NULL,
  `price_text_color` varchar(256) DEFAULT NULL,
  `nav_text_color` varchar(256) DEFAULT NULL,
  `title_color` varchar(256) DEFAULT NULL,
  `price_card_color` varchar(256) DEFAULT NULL,
  `h1_color` varchar(256) DEFAULT NULL,
  `h2_color` varchar(256) DEFAULT NULL,
  `buy_button_color` varchar(256) DEFAULT NULL,
  `banner1` varchar(128) DEFAULT NULL,
  `banner2` varchar(128) DEFAULT NULL,
  `banner3` varchar(128) DEFAULT NULL,
  `banner4` varchar(128) DEFAULT NULL,
  `banner5` varchar(128) DEFAULT NULL,
  `money_amout` int(11) DEFAULT NULL,
  `point_amount` int(11) DEFAULT NULL,
  `image_silder1` varchar(256) DEFAULT NULL,
  `image_silder2` varchar(256) DEFAULT NULL,
  `image_silder3` varchar(256) DEFAULT NULL,
  `image_silder_title1` varchar(256) DEFAULT NULL,
  `image_silder_title2` varchar(256) DEFAULT NULL,
  `image_silder_title3` varchar(256) DEFAULT NULL,
  `image_silder_dsc1` varchar(256) DEFAULT NULL,
  `image_silder_dsc2` varchar(256) DEFAULT NULL,
  `image_silder_dsc3` varchar(256) DEFAULT NULL,
  `question1` varchar(256) DEFAULT NULL,
  `question2` varchar(256) DEFAULT NULL,
  `question3` varchar(256) DEFAULT NULL,
  `answer1` varchar(256) DEFAULT NULL,
  `answer2` varchar(256) DEFAULT NULL,
  `answer3` varchar(256) DEFAULT NULL,
  `terms` varchar(1080) DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT 0,
  `create_date` text NOT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_admin`
--
ALTER TABLE `m_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_brands`
--
ALTER TABLE `m_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_categories`
--
ALTER TABLE `m_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_customers`
--
ALTER TABLE `m_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_marchents`
--
ALTER TABLE `m_marchents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_months`
--
ALTER TABLE `m_months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_products`
--
ALTER TABLE `m_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_temp_products`
--
ALTER TABLE `m_temp_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_contact_customers`
--
ALTER TABLE `t_contact_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_contact_merchants`
--
ALTER TABLE `t_contact_merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_monthly_merchant_payments`
--
ALTER TABLE `t_monthly_merchant_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_notify_to_merchant`
--
ALTER TABLE `t_notify_to_merchant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_orders`
--
ALTER TABLE `t_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_order_details`
--
ALTER TABLE `t_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_payment_method`
--
ALTER TABLE `t_payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product_submits`
--
ALTER TABLE `t_product_submits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product_submit_details`
--
ALTER TABLE `t_product_submit_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_review`
--
ALTER TABLE `t_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_review_details`
--
ALTER TABLE `t_review_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_wishlists`
--
ALTER TABLE `t_wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_wishlist_details`
--
ALTER TABLE `t_wishlist_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_setting`
--
ALTER TABLE `ui_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_admin`
--
ALTER TABLE `m_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_brands`
--
ALTER TABLE `m_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_categories`
--
ALTER TABLE `m_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_customers`
--
ALTER TABLE `m_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_marchents`
--
ALTER TABLE `m_marchents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_months`
--
ALTER TABLE `m_months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_products`
--
ALTER TABLE `m_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_temp_products`
--
ALTER TABLE `m_temp_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_contact_customers`
--
ALTER TABLE `t_contact_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_contact_merchants`
--
ALTER TABLE `t_contact_merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_monthly_merchant_payments`
--
ALTER TABLE `t_monthly_merchant_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_notify_to_merchant`
--
ALTER TABLE `t_notify_to_merchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_orders`
--
ALTER TABLE `t_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_order_details`
--
ALTER TABLE `t_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_payment_method`
--
ALTER TABLE `t_payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_product_submits`
--
ALTER TABLE `t_product_submits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_product_submit_details`
--
ALTER TABLE `t_product_submit_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_review`
--
ALTER TABLE `t_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_review_details`
--
ALTER TABLE `t_review_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_wishlists`
--
ALTER TABLE `t_wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_wishlist_details`
--
ALTER TABLE `t_wishlist_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ui_setting`
--
ALTER TABLE `ui_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
