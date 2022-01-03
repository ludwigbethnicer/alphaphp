-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 11:52 PM
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
(1, 'KJJ\'s Closets', 'KJJ\'s Closets', '1.0.0', 'logo.png', 'logo.svg', 'logo.png', 'Bring the customers closer to their dream fashion.', 'Baay Katherine', 'kjjscloset@gmail.com', '+32 333 2469', '+63 967 840 7618', 'Libertad, Tungawan, Zamboanga Sibugay, PH 07018', 5, 'default', '/alphaphp/', '', '20211225', '2021-11-03 21:09:34', '', '', '', '', '', '', '', '', '', '', '7.6010913,122.4230158', 'Joseph Drillon', 'kjjsclosets.com', '&#8369;', '2021-12-26 13:14:30');

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

--
-- Dumping data for table `tblcrud`
--

INSERT INTO `tblcrud` (`id`, `fieldtxt`, `status`, `created`, `modified`, `deletedx`) VALUES
(1, 'Sample Ludwig', 1, '2021-11-03 21:09:33', '2021-12-04 09:38:37', 1),
(2, 'Sample2', 0, '2021-11-03 21:09:33', '2021-11-03 13:09:33', 0),
(3, 'Sample', 0, '2021-11-04 13:27:31', '2022-01-01 15:20:38', 1),
(4, 'dijbl\'df\';bda', 0, '2021-11-04 13:31:24', '2021-11-04 05:31:24', 0),
(5, ';lkdblknab', 0, '2021-11-04 13:31:26', '2021-11-04 05:31:26', 0),
(6, 'jhbjhsdshvhjsd', 0, '2021-11-04 13:31:29', '2021-11-04 05:31:29', 0),
(7, 'jhasvchjaschjvasj', 0, '2021-11-04 13:31:32', '2021-11-04 05:31:32', 0),
(8, 'vibsdivusdbis', 0, '2021-11-04 13:32:28', '2021-11-04 05:32:28', 0),
(9, 'jknvskdhvisdnvsd', 0, '2021-11-04 13:32:30', '2021-11-04 05:32:30', 0),
(10, 'kdvnsdnvosdvnsdoiv', 0, '2021-11-04 13:32:34', '2021-11-04 05:32:34', 0),
(11, 'nsdvnsdovsdinvoisdvs', 0, '2021-11-04 13:32:36', '2021-11-04 05:32:36', 0),
(12, 'kldvnsdknvdsnvklnsdkv', 0, '2021-11-04 13:32:39', '2021-11-04 05:32:39', 0),
(13, 'jbnkjdf', 0, '2021-11-04 14:53:28', '2021-11-04 06:53:28', 0),
(14, 'kjvjadsfiuvgbdsaf', 0, '2021-11-04 14:53:30', '2021-11-04 06:53:30', 0),
(15, 'kldnfbvlkndskl', 0, '2021-11-04 14:53:33', '2021-11-04 06:53:33', 0),
(16, 'dkbnlkdfnblksdf', 0, '2021-11-04 14:53:37', '2021-11-04 06:53:37', 0),
(17, 'jkdbvjdnfbdf', 0, '2021-11-04 14:53:40', '2021-11-04 14:10:06', 1),
(18, 'fdbhjbvuisdak', 0, '2021-11-04 14:54:07', '2021-11-04 06:54:07', 0),
(19, 'kjdchvjkadsfngvusdfk', 0, '2021-11-04 14:54:09', '2021-11-04 06:54:09', 0),
(20, 'nvkdsna skd lkklmgvkl;msd', 0, '2021-11-04 14:54:14', '2021-11-04 06:54:14', 0),
(21, 'kjsdvkjsduifsd djsfd opi', 0, '2021-11-04 14:54:16', '2021-11-04 06:54:16', 0),
(22, 'oidjgfvldsi', 0, '2021-11-04 14:54:19', '2021-11-04 06:54:19', 0),
(23, ']\\lojl;kvmsdfpoigsw', 0, '2021-11-04 14:54:21', '2021-11-04 06:54:21', 0),
(24, ';omb;ldfmpob ', 0, '2021-11-04 14:54:23', '2021-11-04 06:54:23', 0),
(25, 'l;kjbvopsdfgv;sdfpo', 0, '2021-11-04 14:54:26', '2021-11-04 06:54:26', 0),
(26, 'povkjsd;mvposdj', 0, '2021-11-04 14:54:28', '2021-11-04 06:54:28', 0),
(27, 'lidfjhdfklnkl;', 0, '2021-11-04 14:54:30', '2021-11-04 06:54:30', 0),
(28, 'posdfjghldfglibndfaio', 0, '2021-11-04 14:54:32', '2021-11-04 06:54:32', 0),
(29, 'diojfboidfnbiojdfbnsdf', 0, '2021-11-04 14:54:34', '2021-11-04 06:54:34', 0),
(30, 'dfpojbodfmgbodfjoigbd', 0, '2021-11-04 14:54:36', '2021-11-04 06:54:36', 0),
(31, 'ldkfjb;ldfkmbpodf', 0, '2021-11-04 14:54:37', '2021-11-04 06:54:37', 0),
(32, 'dfbmpldfml;b', 0, '2021-11-04 14:54:39', '2021-11-04 06:54:39', 0),
(33, 'fdl;blk;dfmb', 0, '2021-11-04 14:54:40', '2021-11-04 06:54:40', 0),
(34, 'skdflbdf', 0, '2021-11-04 14:54:41', '2021-11-04 06:54:41', 0),
(35, 'dfmkbdfmb', 0, '2021-11-04 14:54:42', '2021-11-04 06:54:42', 0),
(36, 'dfgbmdfopmbdf', 0, '2021-11-04 14:54:43', '2021-11-04 20:10:47', 1),
(37, 'dfgbkdfbmdf', 0, '2021-11-04 14:54:43', '2021-11-04 06:54:43', 0),
(38, 'dfbkdfkbdf', 0, '2021-11-04 14:54:44', '2021-11-04 06:54:44', 0),
(39, 'dfbkdfmkbdf', 0, '2021-11-04 14:54:45', '2021-11-04 06:54:45', 0),
(40, 'dfbkdfkbd', 0, '2021-11-04 14:54:48', '2021-11-04 06:54:48', 0),
(41, 'sample55555', 0, '2021-11-04 22:13:30', '2021-11-04 15:12:19', 0),
(44, 'ludwig', 0, '2021-11-04 23:53:07', '2022-01-01 15:20:24', 1),
(46, 'ludwig bethnicer napigkit', 0, '2021-11-04 23:57:46', '2021-12-10 13:31:57', 1),
(47, 'sdfbkldnbkl;ndlk;bnkldf', 0, '2021-12-13 08:42:05', '2021-12-13 00:42:05', 0),
(48, 'Marnelie Ann', 0, '2021-12-13 08:42:33', '2022-01-01 15:20:18', 1);

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
(6, '', 'Huda Liquid Mate', '', 'Perfume', 'pc', 120, 0, 0, 20, '', '', '', 0, 'jpg', '2021-12-15 10:46:16', '2021-12-15 02:46:16', 0);

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
('00000000000', 'admin', '21232f297a57a5a743894a0e4a801fc3', '123456', '', 'Admin A. Minad', 'admin@info.com', '+639154826025', 'Administrator', 'What is your the name of your favorite dog?', 'you', 1, 0, 1, '00000000000', 'Minad', 'Admin', 'Amind', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco', 'Minim Veniam', '2021-12-06 00:12:35', '2022-01-03 22:35:41'),
('00000000001', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '123456', '', 'User U. Resu', 'user@info.com', '+639123456789', 'User', 'What is your the name of your favorite dog?', 'me', 2, 0, 1, '00000000000', 'Resu', 'User', 'Uesr', 0, '', '', '', '2021-12-06 00:12:35', '2022-01-03 11:40:04'),
('00000000002', 'guest', '084e0343a0486ff05530df6c705c8bb4', '123456', '', 'Guest G. Tseug', 'guest@info.com', '+639123456789', 'Guest', 'What is your the name of your favorite dog?', 'him', 3, 0, 0, '00000000000', 'Tseug', 'Guest', 'Geust', 0, '', '', '', '2021-12-06 00:12:35', '2021-12-05 16:12:35');

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
(1, 'sdvsd', 'sdgvsdv@dsvsd.com', '342523', 'sdfvgfsd', 'sdvsd', '2021-12-04 15:28:41', NULL),
(2, 'sdvsdv', 'dfbfdgbfd@sdkvbdsjk.com', '345345', 'kjhkljnlk', 'knklnklnkl\r\nsdfvblksdfn\r\nsdvlknsdlk', '2021-12-04 15:29:35', 0),
(3, 'sdvsdvsd', 'sdvsdv@dfbdfb.com', 'sdvsdvsd', 'sldmvl;', ';lml;', '2021-12-04 17:08:37', 0);

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
  `address` text DEFAULT NULL,
  `sub_total_qty` double DEFAULT NULL,
  `sub_total_item` int(11) DEFAULT NULL,
  `sub_total` double DEFAULT NULL,
  `shipping_fee` double DEFAULT NULL,
  `total_all` double DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(1) DEFAULT NULL,
  `process_by` text DEFAULT NULL,
  `review_by` text DEFAULT NULL,
  `approved_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_customer`
--

INSERT INTO `tbl_order_customer` (`order_id`, `receipt_no`, `customer_id`, `customer_name`, `phone`, `address`, `sub_total_qty`, `sub_total_item`, `sub_total`, `shipping_fee`, `total_all`, `remarks`, `status`, `created`, `modified`, `deleted`, `process_by`, `review_by`, `approved_by`) VALUES
(16, NULL, '114792514623933940437', NULL, NULL, NULL, 6, 2, 1220, NULL, NULL, 'Checkout', 'Unpaid', '2022-01-01 12:11:59', '2022-01-01 10:13:08', 0, NULL, NULL, NULL),
(17, NULL, '114792514623933940437', NULL, NULL, NULL, 8, 6, 1, NULL, NULL, 'Checkout', 'Unpaid', '2022-01-01 18:13:25', '2022-01-01 10:33:30', 0, NULL, NULL, NULL),
(18, NULL, '114792514623933940437', NULL, NULL, NULL, 3, 2, 370, NULL, NULL, 'Checkout', 'Unpaid', '2022-01-01 18:33:54', '2022-01-01 10:43:46', 0, NULL, NULL, NULL),
(19, NULL, '114792514623933940437', NULL, NULL, NULL, 65, 5, 10, NULL, NULL, 'Checkout', 'Unpaid', '2022-01-01 22:14:17', '2022-01-01 15:15:47', 0, NULL, NULL, NULL),
(20, NULL, '114792514623933940437', NULL, NULL, NULL, 1, 1, 130, NULL, NULL, 'Process', 'Unpaid', '2022-01-03 03:38:21', '2022-01-02 19:38:24', 0, NULL, NULL, NULL);

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
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`item_order_id`, `order_id`, `item_id`, `barcode`, `item_name`, `qty`, `unit`, `price`, `total_amt`, `extnem`, `modified`, `created`, `deleted`) VALUES
(10, 16, 4, '', 'Pink Dress', 4, 'pc', 180, 720, 'jpg', '2022-01-01 18:04:30', '2022-01-01 12:11:59', 0),
(11, 16, 5, '', 'Black Shoes', 2, 'pair', 250, 500, 'jpg', '2022-01-01 18:12:46', '2022-01-01 18:12:37', 0),
(12, 17, 1, '', 'Nike Sock', 1, 'pair', 55, 55, 'jpg', '2022-01-01 18:13:25', '2022-01-01 18:13:25', 0),
(13, 17, 4, '', 'Pink Dress', 1, 'pc', 180, 180, 'jpg', '2022-01-01 18:13:30', '2022-01-01 18:13:30', 0),
(14, 17, 2, '', 'Victoria Secret Victoria Secret Victoria Secret Victoria Secret Victoria Secret Victoria Secret Vict', 2, 'pc', 350, 700, 'jpg', '2022-01-01 18:17:09', '2022-01-01 18:13:36', 0),
(15, 17, 6, '', 'Huda Liquid Mate', 1, 'pc', 120, 120, 'jpg', '2022-01-01 18:15:33', '2022-01-01 18:15:33', 0),
(16, 17, 5, '', 'Black Shoes', 2, 'pair', 250, 500, 'jpg', '2022-01-01 18:16:05', '2022-01-01 18:15:52', 0),
(17, 17, 3, '', 'Pink Body Mist', 1, 'pc', 130, 130, 'jpg', '2022-01-01 18:33:18', '2022-01-01 18:33:18', 0),
(18, 18, 3, '', 'Pink Body Mist', 1, 'pc', 130, 130, 'jpg', '2022-01-01 18:33:54', '2022-01-01 18:33:54', 0),
(19, 18, 6, '', 'Huda Liquid Mate', 2, 'pc', 120, 240, 'jpg', '2022-01-01 18:35:38', '2022-01-01 18:34:49', 0),
(20, 19, 2, '', 'Victoria Secret Victoria Secret Victoria Secret Victoria Secret Victoria Secret Victoria Secret Vict', 2, 'pc', 350, 700, 'jpg', '2022-01-01 22:14:38', '2022-01-01 22:14:17', 0),
(21, 19, 5, '', 'Black Shoes', 1, 'pair', 250, 250, 'jpg', '2022-01-01 22:14:20', '2022-01-01 22:14:20', 0),
(22, 19, 6, '', 'Huda Liquid Mate', 1, 'pc', 120, 120, 'jpg', '2022-01-01 22:14:25', '2022-01-01 22:14:25', 0),
(23, 19, 3, '', 'Pink Body Mist', 41, 'pc', 130, 5330, 'jpg', '2022-01-01 23:08:04', '2022-01-01 22:53:55', 0),
(24, 19, 4, '', 'Pink Dress', 20, 'pc', 180, 3600, 'jpg', '2022-01-01 22:58:42', '2022-01-01 22:58:42', 0),
(25, 20, 3, '', 'Pink Body Mist', 1, 'pc', 130, 130, 'jpg', '2022-01-03 03:38:21', '2022-01-03 03:38:21', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tblitem`
--
ALTER TABLE `tblitem`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `item_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
