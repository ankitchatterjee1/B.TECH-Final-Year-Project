-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 02:59 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bag`
--

INSERT INTO `bag` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'Quechua', '800', 'Good quality', 'Bag-5567.jpg', 'Bag', ''),
(2, 'Quechua', '800', 'Good quality', 'Bag-8886.jpg', 'Bag', ''),
(3, 'Quechua', '800', 'Good quality', 'Bag-2419.jpg', 'Bag', ''),
(4, 'Quechua', '800', 'Good quality', 'Bag-6373.jpg', 'Bag', '112456'),
(5, 'Quechua', '800', 'Good quality', 'Bag-4862.jpg', 'Bag', '112456'),
(6, 'Quechua', '800', 'Good quality', 'Bag-2585.jpg', 'Bag', ''),
(7, 'gfdg', '2000', 'ghfh', 'Bag-9421.png', 'Bag', '222222'),
(8, 'dfgdfg', '2000', 'fghf', 'Bag-821.jpg', 'Bag', '4543543');

-- --------------------------------------------------------

--
-- Table structure for table `blazer`
--

CREATE TABLE `blazer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blazer`
--

INSERT INTO `blazer` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'Park Avenue', '5000', 'excellent product', 'Blazer-9040.jpg', 'Blazer', ''),
(2, 'fdgdf', '4566', 'dfsgdg', 'Blazer-6143.jpg', 'Blazer', ''),
(3, 'fgh', '4566', 'hgh', 'Blazer-3978.png', 'Blazer', ''),
(4, 'dthtg', '4543', 'fdgdfg', 'Blazer-2977.png', 'Blazer', '434345');

-- --------------------------------------------------------

--
-- Table structure for table `cartpayment`
--

CREATE TABLE `cartpayment` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `streetname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `cart_total` varchar(255) NOT NULL,
  `shipping_cost` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `Bank_Account_no` varchar(255) NOT NULL,
  `Account_holder_name` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kid's_dress`
--

CREATE TABLE `kid's_dress` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kid's_dress`
--

INSERT INTO `kid's_dress` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'wwww', '600', 'ujkguk', 'Dress-A-2210.jpg', 'Kid dress', '188645');

-- --------------------------------------------------------

--
-- Table structure for table `kid's_sunglass`
--

CREATE TABLE `kid's_sunglass` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kid's_sunglass`
--

INSERT INTO `kid's_sunglass` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'ddd', '600', 'dsfdsf', 'Dress-A-6572.jpg', 'Kid sunglass', '100234');

-- --------------------------------------------------------

--
-- Table structure for table `men's_dress`
--

CREATE TABLE `men's_dress` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `WebID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men's_dress`
--

INSERT INTO `men's_dress` (`id`, `name`, `price`, `details`, `image`, `label`, `WebID:`) VALUES
(1, 'suit', '2000', 'serf', 'Dress-A-1127.jpg', 'Man dress', '100512'),
(2, 'kurta', '5000', 'good', 'Dress-A-179.jpg', 'Man dress', '123411'),
(3, 'kurta', '1000', 'manyavar', 'Dress-A-2023.jpg', 'Man dress', '121222'),
(4, 'suit', '5600', 'park-evenue', 'Dress-A-5871.jpg', 'Man dress', '111289'),
(5, 'saloar', '1500', 'good ', 'Dress-A-8275.jpg', 'Man dress', ''),
(6, 'dsafsd', '44454', 'fgfdg', 'Dress-A-4281.jpg', 'Man dress', ''),
(7, 'fdgdrf', '5454', 'drg', 'Dress-A-4440.jpg', 'Man dress', ''),
(8, 'kurta', '2000', 'hjkhkjhkhkhjkh', 'Dress-A-3522.jpg', 'Man dress', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `men's_sunglass`
--

CREATE TABLE `men's_sunglass` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men's_sunglass`
--

INSERT INTO `men's_sunglass` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'aviater', '1000', 'tfhtrh', 'Sunglass-A-4847.jpg', 'Man Sunglass', '111222');

-- --------------------------------------------------------

--
-- Table structure for table `men's_watch`
--

CREATE TABLE `men's_watch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men's_watch`
--

INSERT INTO `men's_watch` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'rolex', '5000', 'jdhh', 'Watch-A-6765.jpg', 'Man watch', '');

-- --------------------------------------------------------

--
-- Table structure for table `offer_products`
--

CREATE TABLE `offer_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE `pincode` (
  `id` int(11) NOT NULL,
  `pin` int(255) NOT NULL,
  `shipping_cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `pin`, `shipping_cost`) VALUES
(1, 700001, '40'),
(2, 700002, '50'),
(3, 700003, '35'),
(4, 700004, '45');

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_login`
--

CREATE TABLE `shopping_cart_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart_login`
--

INSERT INTO `shopping_cart_login` (`id`, `username`, `phone_no`, `email`, `password`) VALUES
(1, 'admin', '8697374178', 'admin@gmail.com', 'Souvik1234'),
(2, 'souvik', '9456784569', 'basu@gmail.com', '123456'),
(3, 'souvik', '8967432590', 'savo@gmail.com', 'basu1234');

-- --------------------------------------------------------

--
-- Table structure for table `tshirt`
--

CREATE TABLE `tshirt` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `women's_dress`
--

CREATE TABLE `women's_dress` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women's_dress`
--

INSERT INTO `women's_dress` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'sdfdsf', '1222', 'sdfcvds', 'Dress-A-729.jpg', 'Women dress', '');

-- --------------------------------------------------------

--
-- Table structure for table `women's_neckless`
--

CREATE TABLE `women's_neckless` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women's_neckless`
--

INSERT INTO `women's_neckless` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'hjgf', '5000', 'kjkjkjkjkjkjk', 'Neckless-A-4129.jpg', 'Woman neckless', '');

-- --------------------------------------------------------

--
-- Table structure for table `women's_watch`
--

CREATE TABLE `women's_watch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `Web ID:` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women's_watch`
--

INSERT INTO `women's_watch` (`id`, `name`, `price`, `details`, `image`, `label`, `Web ID:`) VALUES
(1, 'rado', '2000', 'sdfsdf', 'Watch-A-3127.jpg', 'Woman watch', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blazer`
--
ALTER TABLE `blazer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartpayment`
--
ALTER TABLE `cartpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kid's_dress`
--
ALTER TABLE `kid's_dress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kid's_sunglass`
--
ALTER TABLE `kid's_sunglass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men's_dress`
--
ALTER TABLE `men's_dress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men's_sunglass`
--
ALTER TABLE `men's_sunglass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men's_watch`
--
ALTER TABLE `men's_watch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_products`
--
ALTER TABLE `offer_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart_login`
--
ALTER TABLE `shopping_cart_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tshirt`
--
ALTER TABLE `tshirt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women's_dress`
--
ALTER TABLE `women's_dress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women's_neckless`
--
ALTER TABLE `women's_neckless`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women's_watch`
--
ALTER TABLE `women's_watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag`
--
ALTER TABLE `bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blazer`
--
ALTER TABLE `blazer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cartpayment`
--
ALTER TABLE `cartpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kid's_dress`
--
ALTER TABLE `kid's_dress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kid's_sunglass`
--
ALTER TABLE `kid's_sunglass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `men's_dress`
--
ALTER TABLE `men's_dress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `men's_sunglass`
--
ALTER TABLE `men's_sunglass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `men's_watch`
--
ALTER TABLE `men's_watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_products`
--
ALTER TABLE `offer_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincode`
--
ALTER TABLE `pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopping_cart_login`
--
ALTER TABLE `shopping_cart_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tshirt`
--
ALTER TABLE `tshirt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `women's_dress`
--
ALTER TABLE `women's_dress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `women's_neckless`
--
ALTER TABLE `women's_neckless`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `women's_watch`
--
ALTER TABLE `women's_watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
