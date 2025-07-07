-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 04:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecogreenmarketdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `deal` tinyint(1) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `description`, `deal`, `photo`) VALUES
(1, 'Omega3', 199.00, 'Omega 3 lowers blood pressure, reduces triglycerides in the blood, helps reduce joint inflammation in rheumatoid disease,', 0, 'Omega3img'),
(2, 'Ashwagandha ', 179.00, 'Unlock the ancient secrets of wellness with our premium Ashwagandha supplements. Sourced from the finest organic Ashwagandha roots, our supplements are designed to support your health naturally and effectively.', 0, 'ashwagandhaImg'),
(3, 'Zinc', 149.00, 'Zinc is an essential mineral that plays a crucial role in maintaining your overall health and well-being. Our premium Zinc supplements provide a convenient and effective way to ensure you meet your daily zinc requirements.', NULL, 'zincImg'),
(4, 'whey', 499.00, 'he helps you in the gym', 1, 'wheyImg'),
(6, 'ashwagandha', 299.00, 'hfgggggggggggggggggggggggggggggg', 1, 'ashwagandhaImg2'),
(7, 'Vitamine C ', 199.00, NULL, 1, 'VitamineCimg'),
(8, 'creatine', 499.00, 'Optimum Nutrition Micronized Creatine Monohydrate Powder, Unflavored, Keto Friendly, 120 Servings (Packaging May Vary)', 1, 'creatineM');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `phone_number` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_password`, `user_email`, `phone_number`) VALUES
(1, 'Saad', 'test', 'test@gmail.com', NULL),
(12, 'SAAD CHAFIK', '1234567', 'saadbusiness168@gmail.com', '0777730829'),
(15, 'sAAD ', 'AZERT', 'saad@gmail.com', '0777'),
(16, 'riad', '123', 'riad@gmail.com', '6666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
