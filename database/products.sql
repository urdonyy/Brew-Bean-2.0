-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2025 at 05:48 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(10) NOT NULL,
  `image_filename` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `product`, `price`, `quantity`, `image_filename`) VALUES
(1, 'Hot Coffee', 'Caramel Macchiato', 150.00, 10, 'caramel_macchiato.jpg'),
(3, 'Hot Coffee', 'Cappucino', 180.00, 10, 'cappuccino.jpg'),
(4, 'Hot Coffee', 'Caffe Misto', 120.00, 10, 'caffe_misto.jpg'),
(5, 'Cold Coffee', 'Cold Brew', 120.00, 10, 'cold_brew.jpg'),
(6, 'Cold Coffee', 'Chocolate Cream', 170.00, 10, 'chocolate_cream.jpg'),
(7, 'Cold Coffee', 'Raspberry Cream ', 200.00, 10, 'raspberry_cream.jpg'),
(8, 'Cold Coffee', 'Salted Caramel Macchiato', 150.00, 10, 'salted_caramel_macchiato.jpg'),
(9, 'Non-Coffee', 'Lemon Tea', 150.00, 10, 'lemon_tea.jpg'),
(10, 'Non-Coffee', 'Ice Tea', 150.00, 10, 'ice_tea.jpg'),
(11, 'Non-Coffee', 'Chai Latte', 180.00, 10, 'chai_latte.jpg'),
(12, 'Non-Coffee', 'Matcha Latte', 200.00, 10, 'matcha_latte.jpg'),
(30, 'Hot Coffee', 'test', 10.00, 11, 'test.jpg'),
(31, 'Hot Coffee', 'test23', 123.00, 12, 'test.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
