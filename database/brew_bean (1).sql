-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2025 at 11:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brew_bean`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Cold Coffee'),
(2, 'Hot Coffee'),
(3, 'Non-Coffee');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(100) DEFAULT NULL,
  `categories_id` int(100) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(10) NOT NULL,
  `image_filename` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `categories_id`, `price`, `quantity`, `image_filename`) VALUES
(1, 'Caramel Macchiato', 2, 150.00, 10, 'caramel_macchiato.jpg'),
(3, 'Cappucino', 2, 180.00, 10, 'cappuccino.jpg'),
(4, 'Caffe Misto', 2, 120.00, 10, 'caffe_misto.jpg'),
(5, 'Cold Brew', 1, 120.00, 10, 'cold_brew.jpg'),
(6, 'Chocolate Cream', 1, 170.00, 10, 'chocolate_cream.jpg'),
(7, 'Raspberry Cream ', 1, 200.00, 10, 'raspberry_cream.jpg'),
(8, 'Salted Caramel Macchiato', 1, 150.00, 10, 'salted_caramel_macchiato.jpg'),
(9, 'Lemon Tea', 3, 150.00, 10, 'lemon_tea.jpg'),
(10, 'Ice Tea', 3, 150.00, 10, 'ice_tea.jpg'),
(11, 'Chai Latte', 3, 180.00, 10, 'chai_latte.jpg'),
(12, 'Matcha Latte', 3, 200.00, 10, 'matcha_latte.jpg'),
(30, 'test', 2, 10.00, 12, 'test.jpg'),
(31, 'test23', 2, 123.00, 12, 'test.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`categories_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
