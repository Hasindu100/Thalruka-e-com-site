-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 15, 2020 at 12:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13125658_mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `item_name`, `quantity`, `price`, `total_price`) VALUES
('hasindu', 'පරිප්පු', 5, 60, 300),
('hasindu', 'ලුණු', 3, 60, 180);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `name`) VALUES
(1, 'සිල්ලර බඩු'),
(2, 'සබන්'),
(3, 'ගෑස්'),
(4, 'මස්/මාළු');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `cat_id` int(3) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `price`, `cat_id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'සැමන්', 100, 1, '1277699239281_DelmageMackerel.jpg', '2020-03-30 13:07:43', '1'),
(2, 'පොල් තෙල්', 220, 1, 'coconut-oil.jpg', '2020-03-30 13:08:32', '1'),
(3, 'ලුණු', 60, 1, 'Daily-Needs-247-Grocery-Staples-Sugar-Aachi-Sugar-Pack-1-300x300.jpg', '2020-03-30 13:09:14', '1'),
(4, 'Prima නූඩ්ල්ස්', 200, 1, 'grocery0019.jpg', '2020-03-30 13:09:55', '1'),
(5, 'Easy රයිස්', 110, 1, 'Keells-Krest-Ezy-Rice-Fried-Rice.png', '2020-03-30 13:10:43', '1'),
(6, 'බී ලූණු', 260, 1, 'red-onions-supermarket-thailand-600w-1245827365.jpg', '2020-03-30 13:11:19', '1'),
(7, 'රතු හාල්', 95, 1, 'rice-4.jpg', '2020-03-30 13:11:56', '1'),
(8, 'පරිප්පු', 60, 1, 'unnamed.jpg', '2020-03-30 13:12:27', '1'),
(9, 'Litro ගෑස් 12.5 Kg', 1300, 3, '5d9b41bf3dfce_56.jpg', '2020-04-02 18:41:30', '1'),
(10, 'Laghf ගෑස් 5Kg', 600, 3, '5kg_laugfs_300x300.jpg', '2020-04-02 18:42:39', '1'),
(11, 'Laghf ගෑස් 12Kg', 600, 3, '12.5_kg_cylinder-_smart_gas.jpg', '2020-04-02 18:43:13', '1'),
(12, 'Lux සබන්', 60, 2, '41jjODM4n6L.jpg', '2020-04-02 18:44:01', '1'),
(13, 'Baby සබන්', 70, 2, '712FypY47UL._SX466_.jpg', '2020-04-02 18:44:46', '1'),
(14, 'බල මාළු', 400, 4, '13952158-close-up-of-fish-on-display-in-a-fish-market.jpg', '2020-04-02 18:49:15', '1'),
(15, 'හාල් මැස්සො', 180, 4, '100832414-dried-fish-in-market-at-sri-lanka-.jpg', '2020-04-02 18:50:36', '1'),
(16, 'කුකුළු මස්', 580, 4, 'Cherkizovo-first-quarter-2016.jpg', '2020-04-02 18:51:29', '1'),
(17, 'Detol Handwash', 180, 2, 'DettolOriginalLiquidHandwash.jpg', '2020-04-02 18:52:17', '1'),
(18, 'Mortin', 160, 2, 'download-1.jpg', '2020-04-02 18:52:56', '1'),
(19, 'කෙලවල්ලො', 600, 4, 'fish-market-628493_960_720.jpg', '2020-04-02 18:53:58', '1'),
(20, 'කරවල', 420, 4, 'I0000u40ar0PM6lU.jpg', '2020-04-02 18:54:42', '1'),
(21, 'Litro ගෑස් 5Kg', 600, 3, 'images (1).jpg', '2020-04-02 18:55:18', '1'),
(22, 'ඉස්සො', 800, 4, 'images (2).jpg', '2020-04-02 18:56:03', '1'),
(23, 'රාණි සබන්', 55, 2, 'images.jpg', '2020-04-02 18:56:46', '1'),
(24, 'LifeBoy Handwash', 120, 2, 'lifebuoy-liquid-handwash-500x500.jpg', '2020-04-02 18:57:28', '1'),
(25, 'දැල්ලො', 560, 4, 'product_5315cc00.jpg', '2020-04-02 18:58:19', '1'),
(26, 'Harpic', 100, 2, 'toilet-cleaner-500ml-harpic-500x500.png', '2020-04-02 18:58:52', '1'),
(27, 'LifeBoy සබන්', 50, 2, 'total-10-germ-protection-soap-bar-lifeboy-500x500.png', '2020-04-02 18:59:30', '1'),
(28, 'විජය මිරිස් කුඩු', 60, 1, 'wijaya_product_1559711393.jpg', '2020-04-02 19:01:03', '1'),
(29, 'විජය කහ කුඩු', 80, 1, 'wijaya_product_1559711762.jpg', '2020-04-02 19:01:58', '1'),
(30, 'Astra', 440, 1, 'Astra-500-1.jpg', '2020-08-27 20:36:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('hasindu', '100'),
('hasindushehara5@gmail.com', 'savidu100'),
('savinduheshan3@gmail.com', '1234'),
('shehara', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`username`,`item_name`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
