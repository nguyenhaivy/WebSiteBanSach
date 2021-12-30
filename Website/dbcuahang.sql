-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 05:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcuahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_tittle` varchar(50) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_img`
--

CREATE TABLE `blog_img` (
  `id_img` int(11) NOT NULL,
  `src_img` varchar(100) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `img_alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Điện thoại'),
(2, 'Tivi'),
(3, 'Laptop'),
(4, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `oder_name` varchar(20) NOT NULL,
  `amount` double NOT NULL,
  `oder_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `current_price` double NOT NULL,
  `quality` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `price_current` double NOT NULL,
  `img` varchar(50) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `price_current`, `img`, `price_sale`, `category_id`) VALUES
(1, 'Iphone 13', 'Iphone 13 đẹp lắm', 10000000, './assets/img/product/iphone_13.jpg', 0, 1),
(2, 'Dell xps 13', 'laptop đẹp', 50000000, './assets/img/product/dell-xps-13.jpg', 3, 3),
(3, 'Ốp lưng', 'model ốp lưng', 50000, './assets/img/product/op_lung.jpg', 0, 4),
(6, 'Ipad', 'Ipad moi nhat cua apple', 12000000, './assets/img/product/ipad.jpg', 0, 1),
(7, 'Apple Watch', 'dep lam', 5000000, './assets/img/product/apple_watch.jpg', 0, 4),
(8, 'Tai nghe', 'amm thanh tốt', 300000, './assets/img/product/tai_nghe.jpg', 0, 4),
(9, 'Iphone X', 'đẹp lắm', 15000000, './assets/img/product/iphoneX.jpg', 0, 1),
(10, 'Loa', 'nghe phê lắm', 500000, './assets/img/product/loa.jpg', 0, 4),
(11, 'Màn hình 24 inch', 'Đẹp lắm', 2500000, './assets/img/product/man_hinh.jpg', 0, 2),
(12, 'Iphone 12', 'đẹp lắm', 15000000, './assets/img/product/iphone-12.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `sex` tinyint(1) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `createdat`, `sex`, `role`) VALUES
(1, 'Tú', 'tu@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-04 17:11:18', 1, 1),
(2, 'Phúc', 'phuc@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-04 17:11:18', 1, 1),
(3, 'Mạnh', 'manh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-04 17:11:56', 1, 0),
(4, 'Vy', 'vy@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-04 17:11:56', 0, 0),
(6, 'Khanh', 'khanh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-16 10:33:17', 1, 0),
(7, 'Hoa', 'hoa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-17 10:31:14', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_img`
--
ALTER TABLE `blog_img`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `img_blog` (`id_blog`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_user` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `orderdetail_product` (`product_id`),
  ADD KEY `orderdetail_order` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_img`
--
ALTER TABLE `blog_img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_img`
--
ALTER TABLE `blog_img`
  ADD CONSTRAINT `img_blog` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`blog_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `orderdetail_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `orderdetail_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
