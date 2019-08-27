-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2019 at 03:11 PM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `browne9_Charitables`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clothes`
--

CREATE TABLE `Clothes` (
  `donationId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `item` varchar(1000) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Clothes`
--

INSERT INTO `Clothes` (`donationId`, `id`, `category`, `item`, `quantity`) VALUES
(9, 12, '1', 'tshirts', 20);

-- --------------------------------------------------------

--
-- Table structure for table `ClothesImages`
--

CREATE TABLE `ClothesImages` (
  `id` int(11) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ClothesImages`
--

INSERT INTO `ClothesImages` (`id`, `images`, `category`, `type`) VALUES
(1, 'shirt.jpg', 'Tops', 'c'),
(2, 'pants.jpg', 'Bottoms', 'c'),
(3, 'hat.jpg', 'Accessories', 'c'),
(4, 'jacket.jpg', 'OuterWear', 'c'),
(5, 'innerwear.jpg', 'InnerWear', 'c'),
(6, 'dress.jpg', 'OnePiece', 'c'),
(7, 'shoes.jpg', 'Shoes', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `ClothesNeeds`
--

CREATE TABLE `ClothesNeeds` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ClothesNeeds`
--

INSERT INTO `ClothesNeeds` (`id`, `category`, `item`, `quantity`) VALUES
(11, '3', 'hats ', 12),
(11, '2', 'jeans', 13);

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

CREATE TABLE `Food` (
  `donationId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `item` varchar(500) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`donationId`, `id`, `category`, `item`, `quantity`) VALUES
(20, 14, '5', 'milk', 500);

-- --------------------------------------------------------

--
-- Table structure for table `FoodImages`
--

CREATE TABLE `FoodImages` (
  `id` int(11) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FoodImages`
--

INSERT INTO `FoodImages` (`id`, `images`, `category`, `type`) VALUES
(1, 'Baby.JPG', 'Baby Food', 'f'),
(2, 'Beans.JPG', 'Legumes', 'f'),
(4, 'Condiments.JPG', 'Condiments', 'f'),
(5, 'Dairy.JPG', 'Dairy', 'f'),
(6, 'Eggs.JPG', 'Eggs', 'f'),
(7, 'Fruits.JPG', 'Fruit', 'f'),
(8, 'Grains.JPG', 'Juice', 'f'),
(9, 'Meat1.JPG', 'Meat', 'f'),
(10, 'NonPerish.JPG', 'Non-Perishables', 'f'),
(11, 'OtherBev.JPG', 'Other Beverages', 'f'),
(12, 'Sauce.JPG', 'Sauce', 'f'),
(13, 'Seafood1.JPG', 'Seafood', 'f'),
(14, 'Snacks.JPG', 'Baked Goods & Snacks', 'f'),
(15, 'Spices.JPG', 'Spices', 'f'),
(16, 'Vege1.JPG', 'Vegetables', 'f'),
(17, 'Water.JPG', 'Water ', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `FoodNeeds`
--

CREATE TABLE `FoodNeeds` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FoodNeeds`
--

INSERT INTO `FoodNeeds` (`id`, `category`, `item`, `quantity`) VALUES
(11, '11', 'coffee', 33),
(11, '7', 'pears', 78),
(13, '5', 'cheese', 15);

-- --------------------------------------------------------

--
-- Table structure for table `Offers`
--

CREATE TABLE `Offers` (
  `id` int(11) NOT NULL,
  `matchedId` int(11) NOT NULL,
  `offerId` int(11) NOT NULL,
  `type` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Offers`
--

INSERT INTO `Offers` (`id`, `matchedId`, `offerId`, `type`) VALUES
(11, 14, 18, 'f'),
(11, 14, 16, 'f'),
(13, 12, 10, 'c'),
(11, 12, 19, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `PendingOffers`
--

CREATE TABLE `PendingOffers` (
  `offerId` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PendingOffers`
--

INSERT INTO `PendingOffers` (`offerId`, `category`, `item`, `quantity`, `type`) VALUES
(18, '7', 'apples', 100, 'f'),
(16, '5', 'milk', 200, 'f'),
(10, '4', 'coats', 15, 'c'),
(19, '5', 'milk', 50, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `role` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `organization_name` varchar(500) NOT NULL,
  `tax_id_number` int(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `postal_code` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `fname`, `lname`, `role`, `email`, `password`, `organization_name`, `tax_id_number`, `address`, `contact`, `city`, `state`, `postal_code`) VALUES
(14, 'Sabrina', 'Vanderwald', '1', 'blah@gmail.com', 'jjjjjj', 'Loblaws', 999999999, '220 Yonge St', '4162223334444', 'Toronto', 'Ontario', 'M5B 2H1'),
(13, 'Nate', 'Archebold', '2', 'starfoxx94@hotmail.com', 'bububu', 'Salvation Army', 123456789, '800 Dundas St W', '2468688989', 'Toronto', 'Ontario', 'M6J 1V1'),
(11, 'Chuck', 'Bass', '2', 'example5@gmail.com', 'example5', 'Sheridan', 14794531, '1430 Trafalgar Road', '9058459430', 'Oakville', 'Ontario', 'L6H2L1'),
(12, 'Blair', 'Waldorf', '1', 'browne9@gmail.com', 'aaaaaa', 'Forever 21', 12345678, '770 Don Mills Rd', '2463166666', 'Toronto', 'Ontario', 'M3C 1T3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clothes`
--
ALTER TABLE `Clothes`
  ADD PRIMARY KEY (`donationId`);

--
-- Indexes for table `ClothesImages`
--
ALTER TABLE `ClothesImages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`donationId`);

--
-- Indexes for table `FoodImages`
--
ALTER TABLE `FoodImages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Clothes`
--
ALTER TABLE `Clothes`
  MODIFY `donationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ClothesImages`
--
ALTER TABLE `ClothesImages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Food`
--
ALTER TABLE `Food`
  MODIFY `donationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `FoodImages`
--
ALTER TABLE `FoodImages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
