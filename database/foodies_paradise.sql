-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2022 at 05:55 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodies_paradise`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `a_username` varchar(20) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`a_username`, `a_password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE IF NOT EXISTS `cart_table` (
  `cart_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `cpro_name` varchar(50) NOT NULL,
  `cpro_price` int(20) NOT NULL,
  `cpro_qty` int(20) NOT NULL,
  `cpro_img` varchar(50) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `cart_table`
--

INSERT INTO `cart_table` (`cart_id`, `username`, `cpro_name`, `cpro_price`, `cpro_qty`, `cpro_img`) VALUES
(13, 'user2', 'Iced-Lemon Tea', 2500, 1, 'lemon_tea.jpg'),
(16, 'admin', 'Berry Yoghurt Cake', 2000, 1, 'berry_cake.jpg'),
(27, 'user2', 'Blue Ocean Soda', 2800, 2, 'blue_soda.jpg'),
(28, 'user2', 'Strawberry Cupcake', 1200, 3, 'strawberry_cup_cake.jpg'),
(29, 'user2', 'Lime Soda', 2800, 1, 'lime_soda.jpg'),
(33, 'Ma Ma', 'Berry Yoghurt Cake', 2000, 2, 'berry_cake.jpg'),
(34, 'Ma Ma', 'Cheesey Burger', 3500, 1, 'cheesy_burger.jpg'),
(35, 'Ma Ma', 'Orange Fresh Juice (mini)', 2000, 1, 'orange_mini_juice.jpg'),
(44, 'user1', 'Hot Cappuccino', 2800, 2, 'cappuccino.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `username`, `message`) VALUES
(1, 'Ma Ma', 'sdajknldjksncjkadsjkf');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `username`, `email`, `password`, `phone`) VALUES
(1, 'user1', 'user1@gmail.com', 'user1', 2147483647),
(2, 'user2', 'user2@gmail.com', 'user2', 988888888);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `street` varchar(20) NOT NULL,
  `township` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `method` varchar(20) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `username`, `phone`, `address`, `street`, `township`, `city`, `method`, `total_products`, `total_price`) VALUES
(16, 'user1', 2147483647, 'adfs', 'adf', 'addf', 'dfds', 'Cash on Delivery', 'Hot Cappuccino(2)', 5600);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_img` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float NOT NULL,
  `product_category` varchar(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_img`, `product_name`, `product_price`, `product_category`) VALUES
(1, 'cheesy_burger.jpg', 'Cheesey Burger', 3500, 'snacks'),
(2, 'cheesey_cake.jpg', 'Cheesey Yoghurt Cake', 2000, 'cakes'),
(3, 'berry_cake.jpg', 'Berry Yoghurt Cake', 2000, 'cakes'),
(4, 'bread.jpg', 'Boss Bread', 2500, 'snacks'),
(5, 'lemon_tea.jpg', 'Iced-Lemon Tea', 2500, 'drinks'),
(6, 'sausage_bread.jpg', 'Sausage Bread', 2000, 'snacks'),
(7, 'passion_soda.jpg', 'Passion Soda', 2800, 'drinks'),
(8, 'chocolate_cake.jpg', 'Chocolate-creamy Cake', 2300, 'cakes'),
(9, 'beef_burger.jpg', 'Beef Burger', 4500, 'snacks'),
(10, 'butter_cake.jpg', 'Butter Cake', 2000, 'cakes'),
(11, 'roll_bread.jpg', 'Roll Bread', 2000, 'snacks'),
(12, 'shrimp_burger.jpg', 'Shrimp Burger', 3800, 'snacks'),
(13, 'french_fries.jpg', 'French fries', 2300, 'snacks'),
(14, 'blue_soda.jpg', 'Blue Ocean Soda', 2800, 'drinks'),
(15, 'snow_berry_cake.jpg', 'Snow Berry Cake', 2200, 'cakes'),
(16, 'chocolate_chips_cookie.jpg', 'Chocolate Chips Cookie', 2000, 'snacks'),
(17, 'chocolate_peanut_cake.jpg', 'Chocolate Peanut Cake', 2300, 'cakes'),
(18, 'fruity_soda_set.jpg', 'Fruity Soda Set', 5000, 'drinks'),
(19, 'cappuccino.jpg', 'Hot Cappuccino', 2800, 'drinks'),
(20, 'strawberry_cream_cake.jpg', 'Strawberry Creamy Cake', 2000, 'cakes'),
(21, 'americano.jpg', 'Hot Americano', 2800, 'drinks'),
(22, 'expresso.jpg', 'Hot Expresso', 2300, 'drinks'),
(23, 'latte.jpg', 'Hot Latte', 2800, 'drinks'),
(24, 'lime_soda.jpg', 'Lime Soda', 2800, 'drinks'),
(25, 'ice_coffee.jpg', 'Ice-Coffee', 3000, 'drinks'),
(26, 'strawberry_cup_cake.jpg', 'Strawberry Cupcake', 1200, 'cakes'),
(27, 'choco_creamy_cupcake.jpg', 'Chocolate Cupcake', 1200, 'cakes'),
(28, 'slice_cheese_bread.jpg', 'Cheesey bread Sandwich', 2300, 'snacks'),
(29, 'ham_sandwich.jpg', 'Ham-Sandwich', 3000, 'snacks'),
(30, 'tomato_juice.jpg', 'Tomato Fresh Juice Bottle', 2200, 'drinks'),
(31, 'dragon_fruit_juice.jpg', 'Dragon Fruit Juice Bottle', 2200, 'drinks'),
(32, 'Papaya_carrot_strawberry-milk.jpg', '3 Tastes_Juicy Bottle Set', 6300, 'drinks'),
(33, 'bd_cake_1.jpg', 'Baby Bear Cake', 55000, 'cakes'),
(34, 'bd_cake_2.jpg', 'Choco-creamy Cake', 35000, 'cakes'),
(35, 'bd_cake_3.jpg', 'Snow Cheese Cake', 35000, 'cakes'),
(36, 'bd_cake_4.jpg', 'Fruity Cake', 36000, 'cakes'),
(37, 'bd_cake_5.jpg', 'Chocolate Cake', 45000, 'cakes'),
(38, 'orange_mini_juice.jpg', 'Orange Fresh Juice (mini)', 2000, 'drinks'),
(39, 'kimia-zarifi-9V2YVX_Cojg-unsplash.jpg', 'bb', 10000, 'snacks');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
