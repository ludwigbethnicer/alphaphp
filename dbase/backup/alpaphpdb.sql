-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 08:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpaphpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `conf`
--

CREATE TABLE `conf` (
  `id` int(11) NOT NULL,
  `cmpny_name` varchar(254) NOT NULL,
  `sys_name` varchar(254) NOT NULL,
  `sys_ver` varchar(254) NOT NULL,
  `sys_logo` varchar(254) NOT NULL,
  `navbar_logo` varchar(254) NOT NULL,
  `favicon` varchar(254) NOT NULL,
  `quote_title` varchar(254) NOT NULL,
  `ceo_pres` varchar(254) NOT NULL,
  `memail` varchar(254) NOT NULL,
  `telno` varchar(254) NOT NULL,
  `mobileno` varchar(254) NOT NULL,
  `maddress` text NOT NULL,
  `idletime` int(11) NOT NULL,
  `themename` varchar(254) NOT NULL,
  `domainhome` varchar(254) NOT NULL,
  `fontglobal` varchar(254) NOT NULL,
  `datetoday` varchar(8) NOT NULL,
  `created` datetime NOT NULL,
  `primary_color` varchar(254) NOT NULL,
  `second_color` varchar(254) NOT NULL,
  `third_color` varchar(254) NOT NULL,
  `forth_color` varchar(254) NOT NULL,
  `fifth_color` varchar(254) NOT NULL,
  `sixth_color` varchar(254) NOT NULL,
  `seventh_color` varchar(254) NOT NULL,
  `eight_color` varchar(254) NOT NULL,
  `ninght_color` varchar(254) NOT NULL,
  `tenth_color` varchar(254) NOT NULL,
  `geo_map` text NOT NULL,
  `build_by` varchar(254) NOT NULL,
  `cwebzite` varchar(254) NOT NULL,
  `dcurrencyx` varchar(15) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conf`
--

INSERT INTO `conf` (`id`, `cmpny_name`, `sys_name`, `sys_ver`, `sys_logo`, `navbar_logo`, `favicon`, `quote_title`, `ceo_pres`, `memail`, `telno`, `mobileno`, `maddress`, `idletime`, `themename`, `domainhome`, `fontglobal`, `datetoday`, `created`, `primary_color`, `second_color`, `third_color`, `forth_color`, `fifth_color`, `sixth_color`, `seventh_color`, `eight_color`, `ninght_color`, `tenth_color`, `geo_map`, `build_by`, `cwebzite`, `dcurrencyx`, `modified`) VALUES
(1, 'KJJ\'s Closets', 'KJJ\'s Closets', '1.0.0', 'logo.png', 'logo.svg', 'logo.png', 'Bring the customers closer to their dream fashion.', 'Baay Katherine', 'kjjscloset@gmail.com', '+32 333 2469', '+639678407618', 'Libertad, Tungawan, Zamboanga Sibugay, PH 07018', 5, 'default', '/alphaphp/', '', '20211225', '2021-11-03 21:09:34', '', '', '', '', '', '', '', '', '', '', '7.6010913,122.4230158', 'Joseph Drillon', 'kjjsclosets.com', '&#8369;', '2022-01-13 01:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblcrud`
--

CREATE TABLE `tblcrud` (
  `id` int(11) NOT NULL,
  `fieldtxt` varchar(254) NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deletedx` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE `tblitem` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(254) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(254) NOT NULL,
  `category` varchar(254) NOT NULL,
  `unit` varchar(254) NOT NULL,
  `sell_price` double NOT NULL,
  `sale_price` double NOT NULL,
  `supplier_price` double NOT NULL,
  `stock_available` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `extnem` varchar(10) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deletedx` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitem`
--

INSERT INTO `tblitem` (`item_id`, `barcode`, `name`, `description`, `category`, `unit`, `sell_price`, `sale_price`, `supplier_price`, `stock_available`, `size`, `color`, `quality`, `status`, `extnem`, `created`, `modified`, `deletedx`) VALUES
(1, '', 'Nike Sock', '', 'Footware', 'pair', 55, 0, 0, 100, 'Large', 'Red', 'Surplus', 0, 'jpg', '2021-12-14 08:31:30', '2021-12-15 02:10:10', 0),
(2, '', 'Victoria Secret Victoria Secret Victoria Secret Victoria Secret Victoria Secret Victoria Secret Vict', '', 'Perfume', 'pc', 350, 0, 0, 30, 'XLarge', 'Blue', 'Brand New', 0, 'jpg', '2021-12-14 08:34:07', '2021-12-15 12:41:56', 0),
(3, '', 'Pink Body Mist', '', 'Perfume', 'pc', 130, 0, 0, 20, 'Small', 'Pink', 'Ukay Ukay', 0, 'jpg', '2021-12-14 08:34:42', '2021-12-15 02:10:10', 0),
(4, '', 'Pink Dress', '', 'Women', 'pc', 180, 0, 0, 20, 'Medium', 'Black', 'Made in China', 0, 'jpg', '2021-12-14 15:49:11', '2021-12-15 02:10:10', 0),
(5, '', 'Black Shoes', '', 'Mens', 'pair', 250, 0, 0, 5, 'Small', 'Purple', 'None', 0, 'jpg', '2021-12-14 16:27:45', '2021-12-15 02:10:10', 0),
(6, '', 'Huda Liquid Mate', '', 'Perfume', 'pc', 120, 0, 0, 20, '', '', '', 0, 'jpg', '2021-12-15 10:46:16', '2021-12-15 02:46:16', 0),
(7, '', 'Golden Pear', '', 'Perfume', 'pc', 600, 0, 0, 1000, '', '', '', 0, 'jpg', '2022-01-16 17:12:15', '2022-01-16 09:12:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsysuser`
--

CREATE TABLE `tblsysuser` (
  `usercode` varchar(254) NOT NULL,
  `username` varchar(254) NOT NULL,
  `passcode` varchar(254) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `img_url` text NOT NULL,
  `fullname` text NOT NULL,
  `uemail` varchar(254) NOT NULL,
  `umobileno` varchar(254) NOT NULL,
  `xposition` varchar(254) NOT NULL,
  `secquest` varchar(254) NOT NULL,
  `secans` varchar(254) NOT NULL,
  `ulevpos` int(3) NOT NULL,
  `uonline` int(1) NOT NULL,
  `ustatz` int(1) NOT NULL,
  `createdby` varchar(254) NOT NULL,
  `lname` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `deletedx` int(1) NOT NULL,
  `testimony` text NOT NULL,
  `cmpny` text NOT NULL,
  `cmpny_position` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsysuser`
--

INSERT INTO `tblsysuser` (`usercode`, `username`, `passcode`, `pin`, `img_url`, `fullname`, `uemail`, `umobileno`, `xposition`, `secquest`, `secans`, `ulevpos`, `uonline`, `ustatz`, `createdby`, `lname`, `fname`, `mname`, `deletedx`, `testimony`, `cmpny`, `cmpny_position`, `created`, `modified`) VALUES
('00000000000', 'admin', '21232f297a57a5a743894a0e4a801fc3', '123456', '', 'Admin A. Minad', 'admin@info.com', '+639154826025', 'Administrator', 'What is your the name of your favorite dog?', 'you', 1, 0, 1, '00000000000', 'Surname', 'Admin', 'Amind', 0, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'Manuver', 'Administrator', '2021-12-06 00:12:35', '2022-01-08 15:09:41'),
('00000000001', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '123456', '', 'User U. Resu', 'user@info.com', '+639123456789', 'User', 'What is your the name of your favorite dog?', 'me', 2, 0, 1, '00000000000', 'Resu', 'User', 'Uesr', 0, '', '', '', '2021-12-06 00:12:35', '2022-01-03 11:40:04'),
('00000000002', 'guest', '084e0343a0486ff05530df6c705c8bb4', '123456', '', 'Guest G. Tseug', 'guest@info.com', '+639123456789', 'Guest', 'What is your the name of your favorite dog?', 'him', 3, 0, 0, '00000000000', 'Tseug', 'Guest', 'Geust', 0, '', '', '', '2021-12-06 00:12:35', '2021-12-05 16:12:35'),
('114792514623933940437', 'napigkitludwigbethnicer', '918927f6b737bb450287e295811e7b95', '379651', 'https://lh3.googleusercontent.com/a-/AOh14Giuv75Tw-DdTw036rQKVh1QAZBzeGrGywoucUzvtA=s96-c', 'Ludwig Bethnicer Napigkit', 'napigkitludwigbethnicer@gmail.com', '+09154826025', 'Subscriber', '', '', 6, 0, 1, '', 'Napigkit', 'Ludwig Bethnicer', 'Cagas', 0, '', 'RemoteStaff', 'Full-stack Web & Software Developer', '2022-01-13 19:48:34', '2022-01-14 22:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblsysuser_address`
--

CREATE TABLE `tblsysuser_address` (
  `id` int(11) NOT NULL,
  `usercode` text DEFAULT NULL,
  `continent` text DEFAULT NULL,
  `country_name` text DEFAULT NULL,
  `country_accronym` text DEFAULT NULL,
  `country_code` text DEFAULT NULL,
  `zip_postal` text DEFAULT NULL,
  `state_province_region` text DEFAULT NULL,
  `city_town` text DEFAULT NULL,
  `brgy_village_district` text DEFAULT NULL,
  `address_1` text DEFAULT NULL,
  `address_2` text DEFAULT NULL,
  `tel_no` text DEFAULT NULL,
  `mobile_no` text DEFAULT NULL,
  `type_address` text DEFAULT NULL,
  `set_status` text DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `created` date DEFAULT NULL,
  `deleted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsysuser_autoid`
--

CREATE TABLE `tblsysuser_autoid` (
  `id` int(11) NOT NULL,
  `fieldtxt` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsysuser_autoid`
--

INSERT INTO `tblsysuser_autoid` (`id`, `fieldtxt`, `created`) VALUES
(1, 'a', '2021-12-25 01:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblthemename`
--

CREATE TABLE `tblthemename` (
  `id` int(11) NOT NULL,
  `themename` varchar(254) NOT NULL,
  `version` varchar(254) NOT NULL,
  `authorby` varchar(254) NOT NULL,
  `description` text NOT NULL,
  `tagz` varchar(254) NOT NULL,
  `thumbnailt` varchar(254) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deletedx` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblthemename`
--

INSERT INTO `tblthemename` (`id`, `themename`, `version`, `authorby`, `description`, `tagz`, `thumbnailt`, `created`, `modified`, `deletedx`) VALUES
(1, 'default', '1.0.0', 'Author B. Cone', 'Web Theme Skin is a custom bootstrap 4 design. It features custom styles for all the default blocks, and is built so that what you see in the editor looks like what youâ€™ll see on your website. Web Theme Skin is designed to be adaptable to a wide range of websites, whether youâ€™re running a photo blog, launching a new business, or supporting a non-profit. Featuring ample whitespace and modern sans-serif headlines paired with classic serif body text, itâ€™s built to be beautiful on all screen sizes.', 'custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready', 'Thumbnail.jpg', '2021-11-03 21:09:34', '2021-11-03 13:09:34', 0),
(2, 'Sample', '0.0.0', 'None', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Thumbnail.jpg', '2021-11-03 21:09:34', '2021-11-03 13:09:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address_continent`
--

CREATE TABLE `tbl_address_continent` (
  `continent` varchar(15) DEFAULT NULL,
  `continent_code` varchar(2) NOT NULL DEFAULT '',
  `long_lat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address_country`
--

CREATE TABLE `tbl_address_country` (
  `country` varchar(100) DEFAULT NULL,
  `country_code` varchar(10) NOT NULL,
  `iso_two` varchar(2) DEFAULT NULL,
  `iso_three` varchar(3) DEFAULT NULL,
  `continent_code` varchar(2) DEFAULT '',
  `currency_symbol` varchar(11) DEFAULT NULL,
  `currency_iso` varchar(11) DEFAULT NULL,
  `currency_name` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address_island`
--

CREATE TABLE `tbl_address_island` (
  `island_archipelago` text DEFAULT NULL,
  `island_code` varchar(11) NOT NULL,
  `country_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_autoid`
--

CREATE TABLE `tbl_autoid` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_autoid`
--

INSERT INTO `tbl_autoid` (`id`, `created`, `price`) VALUES
(001, '2021-12-12 21:25:31', 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactform`
--

CREATE TABLE `tbl_contactform` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `deleted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactform`
--

INSERT INTO `tbl_contactform` (`id`, `fullname`, `email`, `phone`, `subject`, `message`, `created`, `deleted`) VALUES
(5, 'John Doe', 'napigkitludwigbethnicer@gmail.com', '09154826025', '', 'Lorem Ipsum', '2022-01-16 13:52:09', 0),
(6, 'dfnfg', 'dhnjdjn@fgndf', '4567', '', 'fgnfdmd', '2022-01-16 15:33:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headbanner`
--

CREATE TABLE `tbl_headbanner` (
  `id` int(11) NOT NULL,
  `head_title` text DEFAULT NULL,
  `sub_text` text DEFAULT NULL,
  `img_loc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headbanner_btn`
--

CREATE TABLE `tbl_headbanner_btn` (
  `id` int(11) NOT NULL,
  `hb_id` int(11) DEFAULT NULL,
  `caption` text DEFAULT NULL,
  `btn_class` text DEFAULT NULL,
  `link_url` text DEFAULT NULL,
  `alt` text DEFAULT NULL,
  `tool_tip` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_customer`
--

CREATE TABLE `tbl_order_customer` (
  `order_id` int(11) NOT NULL,
  `receipt_no` text DEFAULT NULL,
  `customer_id` varchar(254) DEFAULT NULL,
  `customer_name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `cemail` text NOT NULL,
  `address` text DEFAULT NULL,
  `sub_total_qty` double DEFAULT NULL,
  `sub_total_item` int(11) DEFAULT NULL,
  `sub_total` double DEFAULT NULL,
  `shipping_fee` double DEFAULT NULL,
  `total_all` double DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `process_by` text DEFAULT NULL,
  `review_by` text DEFAULT NULL,
  `approved_by` text DEFAULT NULL,
  `receiver` text NOT NULL,
  `receiver_phone` text NOT NULL,
  `remail` text NOT NULL,
  `d_location` text NOT NULL,
  `long_lat` text NOT NULL,
  `courier` text NOT NULL,
  `otherinfo` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_customer`
--

INSERT INTO `tbl_order_customer` (`order_id`, `receipt_no`, `customer_id`, `customer_name`, `phone`, `cemail`, `address`, `sub_total_qty`, `sub_total_item`, `sub_total`, `shipping_fee`, `total_all`, `remarks`, `status`, `process_by`, `review_by`, `approved_by`, `receiver`, `receiver_phone`, `remail`, `d_location`, `long_lat`, `courier`, `otherinfo`, `created`, `modified`, `deleted`) VALUES
(30, NULL, '114792514623933940437', NULL, NULL, '', NULL, 20, 1, 3, NULL, NULL, 'Checkout', 'Unpaid', NULL, NULL, NULL, '', '', '', '', '', '', '', '2022-01-13 20:04:21', '2022-01-13 14:57:04', 0),
(31, NULL, '114792514623933940437', NULL, NULL, '', NULL, 1, 1, 180, NULL, NULL, 'Checkout', 'Unpaid', NULL, NULL, NULL, '', '', '', '', '', '', '', '2022-01-14 22:34:51', '2022-01-14 15:07:15', 0),
(32, NULL, '114792514623933940437', NULL, NULL, '', NULL, 6, 1, 330, NULL, NULL, 'Checkout', 'Unpaid', NULL, NULL, NULL, '', '', '', '', '', '', '', '2022-01-16 12:23:53', '2022-01-16 04:47:48', 0),
(33, NULL, '114792514623933940437', 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', NULL, 1, 1, 180, NULL, NULL, 'Checkout', 'Unpaid', NULL, NULL, NULL, 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', '', '', '', '', '2022-01-16 13:08:17', '2022-01-16 05:09:26', 0),
(34, NULL, '114792514623933940437', 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', NULL, 62, 4, 10, NULL, NULL, 'Checkout', 'Unpaid', NULL, NULL, NULL, 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', '', '', '', '', '2022-01-16 15:48:24', '2022-01-16 07:58:22', 0),
(35, NULL, '114792514623933940437', 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', NULL, 5, 1, 2, NULL, NULL, 'Checkout', 'Unpaid', NULL, NULL, NULL, 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', '', '', '', '', '2022-01-16 16:01:08', '2022-01-16 08:10:52', 0),
(36, NULL, '114792514623933940437', 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', NULL, 1001, 2, 600, NULL, NULL, 'Checkout', 'Unpaid', NULL, NULL, NULL, 'Ludwig Bethnicer Napigkit', '+09154826025', 'napigkitludwigbethnicer@gmail.com', '', '', '', '', '2022-01-16 17:09:47', '2022-01-16 09:14:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `item_order_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `barcode` varchar(254) DEFAULT NULL,
  `item_name` text DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `unit` varchar(254) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total_amt` double DEFAULT NULL,
  `extnem` varchar(10) DEFAULT NULL,
  `cstock` double NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`item_order_id`, `order_id`, `item_id`, `barcode`, `item_name`, `qty`, `unit`, `price`, `total_amt`, `extnem`, `cstock`, `modified`, `created`, `deleted`) VALUES
(74, 30, 4, '', 'Pink Dress', 20, 'pc', 180, 3600, 'jpg', 20, '2022-01-13 22:55:58', '2022-01-13 20:04:21', 0),
(75, 31, 4, '', 'Pink Dress', 1, 'pc', 180, 180, 'jpg', 20, '2022-01-14 22:34:51', '2022-01-14 22:34:51', 0),
(76, 32, 1, '', 'Nike Sock', 6, 'pair', 55, 330, 'jpg', 100, '2022-01-16 12:23:53', '2022-01-16 12:23:53', 0),
(77, 33, 4, '', 'Pink Dress', 1, 'pc', 180, 180, 'jpg', 20, '2022-01-16 13:08:17', '2022-01-16 13:08:17', 0),
(78, 34, 3, '', 'Pink Body Mist', 20, 'pc', 130, 2600, 'jpg', 20, '2022-01-16 15:51:01', '2022-01-16 15:48:25', 0),
(79, 34, 1, '', 'Nike Sock', 1, 'pair', 55, 55, 'jpg', 100, '2022-01-16 15:49:15', '2022-01-16 15:49:15', 0),
(80, 34, 5, '', 'Black Shoes', 1, 'pair', 250, 250, 'jpg', 5, '2022-01-16 15:50:25', '2022-01-16 15:49:28', 0),
(81, 34, 4, '', 'Pink Dress', 40, 'pc', 180, 7200, 'jpg', 20, '2022-01-16 15:52:08', '2022-01-16 15:51:47', 0),
(86, 35, 5, '', 'Black Shoes', 5, 'pair', 250, 2250, 'jpg', 5, '2022-01-16 16:10:11', '2022-01-16 16:09:32', 0),
(87, 36, 6, '', 'Huda Liquid Mate', 1, 'pc', 120, 120, 'jpg', 20, '2022-01-16 17:09:48', '2022-01-16 17:09:48', 0),
(88, 36, 7, '', 'Golden Pear', 1000, 'pc', 600, 600600, 'jpg', 1000, '2022-01-16 17:14:19', '2022-01-16 17:13:24', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conf`
--
ALTER TABLE `conf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcrud`
--
ALTER TABLE `tblcrud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tblsysuser`
--
ALTER TABLE `tblsysuser`
  ADD PRIMARY KEY (`usercode`);

--
-- Indexes for table `tblsysuser_address`
--
ALTER TABLE `tblsysuser_address`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tblsysuser_autoid`
--
ALTER TABLE `tblsysuser_autoid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblthemename`
--
ALTER TABLE `tblthemename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_address_continent`
--
ALTER TABLE `tbl_address_continent`
  ADD PRIMARY KEY (`continent_code`),
  ADD UNIQUE KEY `continent_code` (`continent_code`) USING BTREE;

--
-- Indexes for table `tbl_address_country`
--
ALTER TABLE `tbl_address_country`
  ADD PRIMARY KEY (`country_code`),
  ADD UNIQUE KEY `country_code` (`country_code`);

--
-- Indexes for table `tbl_address_island`
--
ALTER TABLE `tbl_address_island`
  ADD PRIMARY KEY (`island_code`),
  ADD UNIQUE KEY `island_code` (`island_code`);

--
-- Indexes for table `tbl_autoid`
--
ALTER TABLE `tbl_autoid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contactform`
--
ALTER TABLE `tbl_contactform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_headbanner`
--
ALTER TABLE `tbl_headbanner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_headbanner_btn`
--
ALTER TABLE `tbl_headbanner_btn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_order_customer`
--
ALTER TABLE `tbl_order_customer`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`item_order_id`),
  ADD UNIQUE KEY `item_order_id` (`item_order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conf`
--
ALTER TABLE `conf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcrud`
--
ALTER TABLE `tblcrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblitem`
--
ALTER TABLE `tblitem`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblsysuser_address`
--
ALTER TABLE `tblsysuser_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsysuser_autoid`
--
ALTER TABLE `tblsysuser_autoid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblthemename`
--
ALTER TABLE `tblthemename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_autoid`
--
ALTER TABLE `tbl_autoid`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contactform`
--
ALTER TABLE `tbl_contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_headbanner`
--
ALTER TABLE `tbl_headbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_headbanner_btn`
--
ALTER TABLE `tbl_headbanner_btn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order_customer`
--
ALTER TABLE `tbl_order_customer`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `item_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
