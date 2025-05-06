-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shopdienthoai
CREATE DATABASE IF NOT EXISTS `shopdienthoai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `shopdienthoai`;

-- Dumping structure for table shopdienthoai.applied_promotions
CREATE TABLE IF NOT EXISTS `applied_promotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_code` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `applied_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `promotion_code` (`promotion_code`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `applied_promotions_ibfk_1` FOREIGN KEY (`promotion_code`) REFERENCES `promotions` (`code`),
  CONSTRAINT `applied_promotions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.applied_promotions: ~0 rows (approximately)
INSERT INTO `applied_promotions` (`id`, `promotion_code`, `user_id`, `applied_at`) VALUES
	(14, 'DISCOUNT10', 8, '2024-12-24 01:52:18');

-- Dumping structure for table shopdienthoai.bill
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `payment_method` enum('Thanh toán khi nhận hàng','Thanh toán qua mã QR') NOT NULL,
  `payment_status` enum('Đã thanh toán','Chưa thanh toán') NOT NULL DEFAULT 'Chưa thanh toán',
  `total_before_shipping_fee` decimal(10,2) NOT NULL,
  `shipping_fee` decimal(10,2) NOT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `total_payment` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`bill_id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.bill: ~9 rows (approximately)
INSERT INTO `bill` (`bill_id`, `order_id`, `payment_method`, `payment_status`, `total_before_shipping_fee`, `shipping_fee`, `discount_value`, `total_payment`, `created_at`, `updated_at`) VALUES
	(32, 41, 'Thanh toán qua mã QR', 'Chưa thanh toán', 4000000.00, 40000.00, 0.00, 4040000.00, '2024-12-23 18:19:37', '2024-12-23 18:19:37'),
	(33, 42, 'Thanh toán qua mã QR', 'Chưa thanh toán', 4000000.00, 40000.00, 0.00, 4040000.00, '2024-12-23 18:22:45', '2024-12-23 18:22:45'),
	(34, 43, 'Thanh toán khi nhận hàng', 'Chưa thanh toán', 6000000.00, 0.00, 600000.00, 5400000.00, '2024-12-23 18:52:18', '2024-12-23 18:52:18'),
	(35, 44, 'Thanh toán khi nhận hàng', 'Chưa thanh toán', 99999999.99, 0.00, 0.00, 99999999.99, '2024-12-24 06:34:01', '2024-12-24 06:34:01'),
	(36, 45, 'Thanh toán khi nhận hàng', 'Chưa thanh toán', 8000000.00, 0.00, 0.00, 8000000.00, '2024-12-24 06:41:08', '2024-12-24 06:41:08'),
	(37, 46, 'Thanh toán khi nhận hàng', 'Chưa thanh toán', 10000000.00, 0.00, 0.00, 10000000.00, '2024-12-24 06:44:24', '2024-12-24 06:44:24'),
	(38, 47, 'Thanh toán khi nhận hàng', 'Chưa thanh toán', 18000000.00, 0.00, 0.00, 18000000.00, '2024-12-24 06:44:43', '2024-12-24 06:44:43'),
	(39, 48, 'Thanh toán khi nhận hàng', 'Chưa thanh toán', 10000000.00, 0.00, 0.00, 10000000.00, '2024-12-24 06:44:58', '2024-12-24 06:44:58'),
	(40, 49, 'Thanh toán khi nhận hàng', 'Chưa thanh toán', 70000000.00, 0.00, 0.00, 70000000.00, '2024-12-24 07:33:16', '2024-12-24 07:33:16');

-- Dumping structure for table shopdienthoai.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`brand_id`),
  KEY `FK_brands_producttypes` (`type_id`),
  CONSTRAINT `FK_brands_producttypes` FOREIGN KEY (`type_id`) REFERENCES `producttypes` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.brands: ~7 rows (approximately)
INSERT INTO `brands` (`brand_id`, `brand_name`, `type_id`) VALUES
	(1, 'Apple', 2),
	(2, 'Samsung', 2),
	(3, 'Nexus', 2),
	(4, 'Oppo', 2),
	(5, 'LG', 1),
	(6, 'xiaomi', 2),
	(8, 'vivo', 2);

-- Dumping structure for table shopdienthoai.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `detailproduct_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `original_price` int(11) NOT NULL DEFAULT 0,
  `discounted_price` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.cart: ~6 rows (approximately)
INSERT INTO `cart` (`cart_id`, `user_id`, `detailproduct_id`, `quantity`, `original_price`, `discounted_price`) VALUES
	(51, 8, 115, 7, 20000000, 10000000),
	(52, 8, 116, 6, 2000000, 1000000),
	(53, 7, 117, 1, 10000000, 8000000),
	(54, 5, 120, 1, 12000000, 10000000),
	(55, 5, 154, 1, 20000000, 18000000),
	(56, 5, 116, 1, 20000000, 10000000),
	(57, 5, 125, 2, 10000000, 8000000);

-- Dumping structure for table shopdienthoai.detailbill
CREATE TABLE IF NOT EXISTS `detailbill` (
  `detailbill_id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) NOT NULL,
  `detailproduct_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`detailbill_id`),
  KEY `bill_id` (`bill_id`),
  KEY `product_id` (`detailproduct_id`) USING BTREE,
  CONSTRAINT `FK_detailbill_detailproduct` FOREIGN KEY (`detailproduct_id`) REFERENCES `detailproduct` (`id`),
  CONSTRAINT `detailbill_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.detailbill: ~8 rows (approximately)
INSERT INTO `detailbill` (`detailbill_id`, `bill_id`, `detailproduct_id`, `quantity`, `unit_price`, `total_price`, `created_at`) VALUES
	(59, 33, 115, 4, 1000000.00, 4000000.00, '2024-12-23 18:22:45'),
	(60, 34, 116, 6, 1000000.00, 6000000.00, '2024-12-23 18:52:18'),
	(61, 35, 115, 6, 10000000.00, 60000000.00, '2024-12-24 06:34:01'),
	(62, 35, 116, 6, 10000000.00, 60000000.00, '2024-12-24 06:34:01'),
	(63, 36, 117, 1, 8000000.00, 8000000.00, '2024-12-24 06:41:08'),
	(64, 37, 120, 1, 10000000.00, 10000000.00, '2024-12-24 06:44:24'),
	(65, 38, 154, 1, 18000000.00, 18000000.00, '2024-12-24 06:44:43'),
	(66, 39, 116, 1, 10000000.00, 10000000.00, '2024-12-24 06:44:58'),
	(67, 40, 115, 7, 10000000.00, 70000000.00, '2024-12-24 07:33:16');

-- Dumping structure for table shopdienthoai.detailproduct
CREATE TABLE IF NOT EXISTS `detailproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specificphone_id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `amout` int(11) NOT NULL,
  `sold` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `FK_color_phoneoptions` (`specificphone_id`),
  CONSTRAINT `FK_color_phoneoptions` FOREIGN KEY (`specificphone_id`) REFERENCES `phoneoptions` (`specificphone_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.detailproduct: ~37 rows (approximately)
INSERT INTO `detailproduct` (`id`, `specificphone_id`, `color`, `image`, `amout`, `sold`) VALUES
	(115, 91, 'trắng', 'samsungs20/img_676a14d92c3625.13632227.jpg', 20, 0),
	(116, 91, 'đen', 'samsungs20/img_676a14f3d16725.46917081.jpg', 50, 0),
	(117, 92, 'trắng', 'iphone11/img_6769a600589015.22748337.jpg', 30, 0),
	(118, 92, 'vàng', 'iphone11/img_6769a60058e342.38308589.jpg', 18, 0),
	(119, 93, 'đỏ', 'iphone11/img_6769a600589015.22748337.jpg', 30, 0),
	(120, 93, 'đen', 'iphone11/img_6769a60058e342.38308589.jpg', 48, 0),
	(121, 94, 'đen', 'iphone16/img_676a349a5fb4e9.86880078.jpg', 30, 0),
	(122, 94, 'vàng', 'iphone16/img_6769a61c1dd4f6.21995873.jpg', 18, 0),
	(123, 95, 'đỏ', 'iphone16/img_676a391791f563.91767962.jpg', 30, 0),
	(124, 95, 'đen', 'iphone16/img_6769a61c1dd4f6.21995873.jpg', 48, 0),
	(125, 96, 'hồng', 'samsungs20/img_676a1599639b92.56276513.jpg', 30, 0),
	(126, 96, 'trắng', 'samsungs20/img_676a1667406467.35354687.jpg', 40, 0),
	(138, 107, 'trắng', 'SamsungGalaxyZFold6/img_676a31271d9524.97858366.jpg', 20, 0),
	(139, 107, 'đen', 'SamsungGalaxyZFold6/img_676a31f9b5ee21.96182268.jpg', 20, 0),
	(140, 109, 'hồng', 'SamsungGalaxyS24Ultra/img_676a33b9c9cd23.03683155.jpg', 30, 0),
	(141, 109, 'cam', 'SamsungGalaxyS24Ultra/img_676a33b9ca1132.48226557.jpg', 20, 0),
	(142, 110, 'hồng', 'SamsungGalaxyS24Ultra/img_676a33b9c9cd23.03683155.jpg', 30, 0),
	(143, 111, 'hồng', 'SamsungGalaxyS24Ultra/img_676a33b9c9cd23.03683155.jpg', 38, 0),
	(144, 108, 'hồng', 'SamsungGalaxyZFold6/img_676a346d1f3bf2.56007961.jpg', 20, 0),
	(145, 108, 'cam', 'SamsungGalaxyZFold6/img_676a3478295e86.15683319.jpg', 20, 0),
	(146, 112, 'hồng', 'SamsungGalaxyS20Ultra/img_676a38bb627737.39127228.jpg', 30, 0),
	(147, 112, 'cam', 'SamsungGalaxyS20Ultra/img_676a34d4a3d028.07906621.jpg', 20, 0),
	(148, 113, 'đen', 'SamsungGalaxyS20Ultra/img_676a38626576c9.31457725.jpg', 30, 0),
	(149, 114, 'đen', 'SamsungGalaxyS20Ultra/img_676a382e73e3b3.10624201.jpg', 38, 0),
	(150, 115, 'trắng', 'OPPOFindX8/img_676a36208ec449.82025288.jpg', 30, 0),
	(151, 115, 'đỏ', 'OPPOFindX8/img_676a360101d6b6.91930269.webp', 20, 0),
	(152, 116, 'trắng', 'OPPOFindX8/img_676a3633dc4ab4.04348501.jpg', 30, 0),
	(153, 117, 'đen', 'OPPOFindX8/img_676a364442da31.11386536.jpg', 38, 0),
	(154, 118, 'hồng', 'Vivov40/img_676a3c128ec2f9.58483128.jpg', 30, 0),
	(155, 118, 'xanh', 'Vivov40/img_676a3b83a2aec1.17922499.jpg', 20, 0),
	(156, 119, 'xanh', 'Vivov40/img_676a3ba217bf76.43218969.jpg', 30, 0),
	(157, 120, 'xanh', 'Vivov40/img_676a3c21142347.86137364.jpg', 38, 0),
	(170, 130, 'hồng', 'vivos25/img_676a3f9a550c61.67341148.jpg', 30, 0),
	(171, 130, 'xanh', 'vivos25/img_676a3f9a557772.62004068.jpg', 20, 0),
	(172, 131, 'đỏ', 'vivos25/img_676a3f9a55e012.30738733.png', 30, 0),
	(173, 132, 'xanh', 'vivos25/img_676a3f9a564591.68366710.jpg', 38, 0),
	(174, 133, 'xanh', 'vivoY03/img_676a401e793a17.71681207.jpg', 30, 0),
	(175, 133, 'đen', 'vivoY03/img_676a401e798435.78301829.jpg', 20, 0),
	(176, 134, 'đỏ', 'vivoY03/img_676a401e79dc81.29049242.png', 30, 0),
	(177, 135, 'xanh dương', 'vivoY03/img_676a401e7a2fc8.21285034.jpg', 38, 0);

-- Dumping structure for table shopdienthoai.generalphone
CREATE TABLE IF NOT EXISTS `generalphone` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `screen_size` float DEFAULT NULL,
  `id_system` int(11) NOT NULL,
  `display_technology` varchar(50) DEFAULT '0',
  `screen_resolution` varchar(50) DEFAULT '0',
  `refresh_rate` varchar(50) DEFAULT '0',
  `front_camera` varchar(50) DEFAULT '0',
  `rear_camera` varchar(50) DEFAULT NULL,
  `chipset` varchar(50) DEFAULT '0',
  `battery` varchar(20) DEFAULT NULL,
  `usage_need` varchar(50) DEFAULT NULL,
  `ram` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_id` (`product_id`),
  KEY `id_system` (`id_system`),
  CONSTRAINT `FK_generalphone_operatingsystem` FOREIGN KEY (`id_system`) REFERENCES `operatingsystem` (`id_system`) ON DELETE CASCADE,
  CONSTRAINT `FK_generalphone_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.generalphone: ~11 rows (approximately)
INSERT INTO `generalphone` (`product_id`, `screen_size`, `id_system`, `display_technology`, `screen_resolution`, `refresh_rate`, `front_camera`, `rear_camera`, `chipset`, `battery`, `usage_need`, `ram`) VALUES
	(14, 0, 1, 'công nghệ màn hình', 'Độ phân giải màn hình', 'Tần số quét', 'Camera trước', 'Camera sau', 'Chíp xử lý', 'Dung lượng pin', 'Nhu cầu sử dụng', 'Ram'),
	(15, 0, 1, 'công nghệ màn hình', 'Độ phân giải màn hình', 'Tần số quét', 'Camera trước', 'Camera sau', 'Chíp xử lý', 'Dung lượng pin', 'Nhu cầu sử dụng', 'Ram'),
	(91, 7, 2, 'f', '43', '43HZ', '5.3', '2.5', 'sn', '50000mAh', 'c', '8GB'),
	(92, 7.8, 1, ' IPS LCD', '24', '100HZ', '12 MP, ƒ/2.2 aperture', 'Camera kép 12MP: - Camera góc rộng: ƒ/1.8 aperture', 'snapdragon', '4000mAh', 'chơi game, chụp ảnh', '4GB'),
	(93, 7.8, 1, ' IPS LCD', '24', '100HZ', '12 MP, ƒ/2.2 aperture', 'Camera kép 12MP: - Camera góc rộng: ƒ/1.8 aperture', 'snapdragon', '4000mAh', 'chơi game, chụp ảnh', '4GB'),
	(102, 3, 1, '3', '3', '3HZ', '3', '3', '3', '3mAh', '3', '3GB'),
	(103, 7, 2, 'Dynamic AMOLED 2X', '2160 x 1856 (QXGA+)', '100HZ', 'Camera bên ngoài:10 MP, f/2.2', 'Camera góc rộng: 50.0 MP, f/1.8, Thu phóng quang h', 'Snapdragon 8 Gen 3 for Galaxy Tăng lên 42% AI', '4998mAh', 'chụp ảnh, chơi game', '8GB'),
	(104, 7, 2, 'Dynamic AMOLED 2X', '2160 x 1856 (QXGA+)', '100HZ', 'Camera bên ngoài:10 MP, f/2.2', 'Camera góc rộng: 50.0 MP, f/1.8, Thu phóng quang h', 'Snapdragon 8 Gen 3 for Galaxy Tăng lên 42% AI', '6000mAh', 'chụp ảnh, chơi game', '8GB'),
	(105, 7, 2, 'Dynamic AMOLED 2X', '2160 x 1856 (QXGA+)', '100HZ', 'Camera bên ngoài:10 MP, f/2.2', 'Camera góc rộng: 50.0 MP, f/1.8, Thu phóng quang h', 'Snapdragon 8 Gen 3 for Galaxy Tăng lên 42% AI', '6000mAh', 'chụp ảnh, chơi game', '8GB'),
	(106, 7, 2, 'Dynamic AMOLED 2X', '2160 x 1856 (QXGA+)', '100HZ', 'Camera bên ngoài:10 MP, f/2.2', 'Camera góc rộng: 50.0 MP, f/1.8, Thu phóng quang h', 'Snapdragon 8 Gen 3 for Galaxy Tăng lên 42% AI', '6000mAh', 'chụp ảnh, chơi game', '8GB'),
	(110, 7, 2, 'Dynamic AMOLED 2X', '2160 x 1856 (QXGA+)', '100HZ', 'Camera bên ngoài:10 MP, f/2.2', 'Camera góc rộng: 50.0 MP, f/1.8, Thu phóng quang h', 'Snapdragon 8 Gen 3 for Galaxy Tăng lên 42% AI', '6000mAh', 'chụp ảnh, chơi game', '8GB'),
	(111, 7, 2, 'Dynamic AMOLED 2X', '2160 x 1856 (QXGA+)', '100HZ', 'Camera bên ngoài:10 MP, f/2.2', 'Camera góc rộng: 50.0 MP, f/1.8, Thu phóng quang h', 'Snapdragon 8 Gen 3 for Galaxy Tăng lên 42% AI', '6000mAh', 'chụp ảnh, chơi game', '8GB');

-- Dumping structure for table shopdienthoai.laptopspecifications
CREATE TABLE IF NOT EXISTS `laptopspecifications` (
  `laptopspecific_id` int(11) NOT NULL,
  `ram` varchar(20) DEFAULT NULL,
  `storage` varchar(20) DEFAULT NULL,
  `screen_size` varchar(20) DEFAULT NULL,
  `battery` varchar(20) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`laptopspecific_id`) USING BTREE,
  KEY `product_id` (`product_id`),
  CONSTRAINT `FK_laptopspecifications_products` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.laptopspecifications: ~0 rows (approximately)
INSERT INTO `laptopspecifications` (`laptopspecific_id`, `ram`, `storage`, `screen_size`, `battery`, `product_id`) VALUES
	(3, '16GB', '512GB SSD', '13.3 inches', '52Wh', NULL);

-- Dumping structure for table shopdienthoai.operatingsystem
CREATE TABLE IF NOT EXISTS `operatingsystem` (
  `id_system` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_system`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.operatingsystem: ~2 rows (approximately)
INSERT INTO `operatingsystem` (`id_system`, `name`) VALUES
	(1, 'IOS'),
	(2, 'android');

-- Dumping structure for table shopdienthoai.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `receiver_name` char(50) NOT NULL DEFAULT '',
  `receiver_email` varchar(50) NOT NULL DEFAULT '',
  `receiver_phone` char(50) NOT NULL DEFAULT '',
  `shipping_address` text DEFAULT NULL,
  `delivery_type` enum('Vận chuyển tiết kiệm (3-5 ngày)','Vận chuyển nhanh (1-2 ngày)') DEFAULT NULL,
  `total_before_shipping_fee` decimal(10,2) NOT NULL,
  `total_payment` decimal(10,2) NOT NULL,
  `discount_value` decimal(10,2) DEFAULT 0.00,
  `delivery_method` enum('Nhận hàng tại cửa hàng','Giao hàng tận nơi') NOT NULL,
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT 0.00,
  `payment_method` enum('Thanh toán khi nhận hàng','Thanh toán qua mã QR') NOT NULL,
  `status` enum('Chưa xác nhận','Đã xác nhận','Đang được giao','Đã giao','Đã huỷ') NOT NULL DEFAULT 'Chưa xác nhận',
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `expected_delivery_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.order: ~9 rows (approximately)
INSERT INTO `order` (`order_id`, `user_id`, `receiver_name`, `receiver_email`, `receiver_phone`, `shipping_address`, `delivery_type`, `total_before_shipping_fee`, `total_payment`, `discount_value`, `delivery_method`, `shipping_fee`, `payment_method`, `status`, `note`, `created_at`, `expected_delivery_date`, `updated_at`) VALUES
	(41, 8, 'Ngo Khac Cuong', 'cuongnk.23it@gmail.com', '7894561236', 'quảng nam', 'Vận chuyển tiết kiệm (3-5 ngày)', 4000000.00, 4040000.00, 0.00, 'Giao hàng tận nơi', 40000.00, 'Thanh toán qua mã QR', 'Đã huỷ', 'abc', '2024-12-23 18:19:36', '2024-12-29', '2024-12-24 06:32:57'),
	(42, 8, 'Phan Thanh Tam', 'cuongnk.23it@gmail.com', '1234567890', 'quảng bình', 'Vận chuyển tiết kiệm (3-5 ngày)', 4000000.00, 4040000.00, 0.00, 'Giao hàng tận nơi', 40000.00, 'Thanh toán qua mã QR', 'Chưa xác nhận', 'abc', '2024-12-23 18:22:45', '2024-12-29', '2024-12-23 18:22:45'),
	(43, 8, 'Phan Thanh Tam', 'cuongnk.23it@gmail.com', '1234567890', '', NULL, 6000000.00, 5400000.00, 600000.00, 'Nhận hàng tại cửa hàng', 0.00, 'Thanh toán khi nhận hàng', 'Chưa xác nhận', '', '2024-12-23 18:52:18', NULL, '2024-12-23 18:52:18'),
	(44, 8, 'Phan Thanh Tam', 'cuongnk.23it@gmail.com', '1234567890', '', NULL, 99999999.99, 99999999.99, 0.00, 'Nhận hàng tại cửa hàng', 0.00, 'Thanh toán khi nhận hàng', 'Chưa xác nhận', '', '2024-12-24 06:34:01', NULL, '2024-12-24 06:34:01'),
	(45, 7, 'ngokhaccuong', 'cuong123@gmail.com', '0123456789', '', NULL, 8000000.00, 8000000.00, 0.00, 'Nhận hàng tại cửa hàng', 0.00, 'Thanh toán khi nhận hàng', 'Chưa xác nhận', '', '2024-12-24 06:41:08', NULL, '2024-12-24 06:41:08'),
	(46, 5, 'Ngô Khắc Cường', 'cuongnk@gmail.com', '0123456789', '', NULL, 10000000.00, 10000000.00, 0.00, 'Nhận hàng tại cửa hàng', 0.00, 'Thanh toán khi nhận hàng', 'Đã huỷ', '', '2024-12-24 06:44:24', NULL, '2024-12-24 06:45:36'),
	(47, 5, 'Ngô Khắc Cường', 'cuongnk@gmail.com', '0123456789', '', NULL, 18000000.00, 18000000.00, 0.00, 'Nhận hàng tại cửa hàng', 0.00, 'Thanh toán khi nhận hàng', 'Đã huỷ', '', '2024-12-24 06:44:43', NULL, '2024-12-24 06:46:02'),
	(48, 5, 'Ngô Khắc Cường', 'cuongnk@gmail.com', '0123456789', '', NULL, 10000000.00, 10000000.00, 0.00, 'Nhận hàng tại cửa hàng', 0.00, 'Thanh toán khi nhận hàng', 'Đã huỷ', '', '2024-12-24 06:44:58', NULL, '2024-12-24 06:45:33'),
	(49, 8, 'Phan Thanh Tam', 'cuongnk.23it@gmail.com', '1234567890', '', NULL, 70000000.00, 70000000.00, 0.00, 'Nhận hàng tại cửa hàng', 0.00, 'Thanh toán khi nhận hàng', 'Đã xác nhận', '', '2024-12-24 07:33:16', NULL, '2024-12-24 07:34:34');

-- Dumping structure for table shopdienthoai.order_item
CREATE TABLE IF NOT EXISTS `order_item` (
  `order_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `detailproduct_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`order_item_id`),
  KEY `product_id` (`detailproduct_id`) USING BTREE,
  KEY `order_item_ibfk_1` (`order_id`),
  CONSTRAINT `FK_order_item_detailproduct` FOREIGN KEY (`detailproduct_id`) REFERENCES `detailproduct` (`id`),
  CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.order_item: ~9 rows (approximately)
INSERT INTO `order_item` (`order_item_id`, `order_id`, `detailproduct_id`, `quantity`, `unit_price`, `total_price`) VALUES
	(69, 41, 115, 4, 1000000.00, 4000000.00),
	(70, 42, 115, 4, 1000000.00, 4000000.00),
	(71, 43, 116, 6, 1000000.00, 6000000.00),
	(72, 44, 115, 6, 10000000.00, 60000000.00),
	(73, 44, 116, 6, 10000000.00, 60000000.00),
	(74, 45, 117, 1, 8000000.00, 8000000.00),
	(75, 46, 120, 1, 10000000.00, 10000000.00),
	(76, 47, 154, 1, 18000000.00, 18000000.00),
	(77, 48, 116, 1, 10000000.00, 10000000.00),
	(78, 49, 115, 7, 10000000.00, 70000000.00);

-- Dumping structure for table shopdienthoai.phoneoptions
CREATE TABLE IF NOT EXISTS `phoneoptions` (
  `specificphone_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `internal_storage` varchar(50) NOT NULL,
  `original_price` int(11) NOT NULL,
  `discounted_price` int(11) NOT NULL,
  PRIMARY KEY (`specificphone_id`) USING BTREE,
  KEY `FK_specificphone_product` (`product_id`),
  CONSTRAINT `FK_specificphone_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.phoneoptions: ~24 rows (approximately)
INSERT INTO `phoneoptions` (`specificphone_id`, `product_id`, `internal_storage`, `original_price`, `discounted_price`) VALUES
	(91, 91, '64GB', 20000000, 10000000),
	(92, 92, '64GB', 10000000, 8000000),
	(93, 92, '128GB', 12000000, 10000000),
	(94, 93, '64GB', 10000000, 8000000),
	(95, 93, '128GB', 12000000, 10000000),
	(96, 91, '128GB', 10000000, 8000000),
	(107, 102, '256GB', 30000000, 25000000),
	(108, 102, '512GB', 35000000, 30000000),
	(109, 103, '64GB', 20000000, 18000000),
	(110, 103, '128GB', 25000000, 20000000),
	(111, 103, '256GB', 30000000, 25000000),
	(112, 104, '64GB', 20000000, 18000000),
	(113, 104, '128GB', 25000000, 20000000),
	(114, 104, '256GB', 30000000, 25000000),
	(115, 105, '64GB', 20000000, 18000000),
	(116, 105, '128GB', 25000000, 20000000),
	(117, 105, '256GB', 30000000, 25000000),
	(118, 106, '64GB', 20000000, 18000000),
	(119, 106, '128GB', 25000000, 20000000),
	(120, 106, '256GB', 30000000, 25000000),
	(130, 110, '64GB', 20000000, 18000000),
	(131, 110, '128GB', 25000000, 20000000),
	(132, 110, '256GB', 30000000, 25000000),
	(133, 111, '64GB', 20000000, 18000000),
	(134, 111, '128GB', 25000000, 20000000),
	(135, 111, '256GB', 30000000, 25000000);

-- Dumping structure for table shopdienthoai.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `HighlightFeature` longtext NOT NULL,
  `average_rating` decimal(2,1) DEFAULT 0.0,
  `rating_count` int(11) DEFAULT 0,
  PRIMARY KEY (`product_id`),
  KEY `brand_id` (`brand_id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE,
  CONSTRAINT `product_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `producttypes` (`type_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.product: ~13 rows (approximately)
INSERT INTO `product` (`product_id`, `product_name`, `brand_id`, `type_id`, `HighlightFeature`, `average_rating`, `rating_count`) VALUES
	(7, 'qfwef', 2, 1, '<p>ưefwefwewf</p>\n', NULL, NULL),
	(14, 'tamlon', 2, 1, '<p>&egrave;weffsergefwfwegfergw</p>\n', NULL, NULL),
	(15, 'iphone', 2, 1, '<p>ưerwrwr</p>\n', NULL, NULL),
	(57, 'tancuong', 2, 1, '<p>xin ch&agrave;o tất cả mọi người nh&eacute;</p>\n', NULL, NULL),
	(91, 'samsungs2', 2, 2, '<h2><strong>Điện thoại Samsung Galaxy S22 Series ra mắt khi n&agrave;o?</strong></h2>\n\n<p>D&ugrave; đ&atilde; c&oacute; những th&ocirc;ng tin r&ograve; rỉ từ kh&aacute; l&acirc;u nhưng d&ograve;ng&nbsp;<strong>điện thoại Samsung Galaxy S22 Series</strong>&nbsp;mới chỉ ch&iacute;nh thức ra mắt v&agrave;o ng&agrave;y 09/02/2022 tại sự kiện Galaxy Unpacked. Ngay khi được c&ocirc;ng bố ra mắt, sự kh&aacute;c biệt trong ng&ocirc;n ngữ thiết kế c&ugrave;ng những t&iacute;nh năng được n&acirc;ng cấp vượt trội của Samsung S22 Series đ&atilde; nhanh ch&oacute;ng trở th&agrave;nh hiện tượng b&ugrave;ng nổ của giới c&ocirc;ng nghệ.</p>\n\n<p><img alt="Dòng điện thoại Galaxy S22 series ra mắt khi nào?" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-s22-1.png" /></p>\n\n<p>Ch&iacute;nh những điểm mới n&agrave;y khiến những chiếc điện thoại thuộc d&ograve;ng Samsung Galaxy S22 tạo dấu ấn đậm n&eacute;t v&agrave; c&oacute; hiệu ứng truyền th&ocirc;ng cực mạnh mẽ. Cơn sốt mang t&ecirc;n Samsung Gẫmy S22 vẫn chưa thực sự hạ nhiệt v&agrave; lượng người y&ecirc;u th&iacute;ch những chiếc điện thoại n&agrave;y ng&agrave;y một đ&ocirc;ng đảo hơn.</p>\n\n<h2><strong>C&oacute; mấy phi&ecirc;n bản Galaxy S22 được Samsung ra mắt?</strong></h2>\n\n<p>Samsung Galaxy S22 series l&agrave; d&ograve;ng Flagship ho&agrave;n hảo nhất trong&nbsp;<a href="https://cellphones.com.vn/mobile/samsung/galaxy-s.html" title="Samsung Galaxy S"><strong>Samsung Galaxy S</strong></a>&nbsp;của Samsung cho đến thời điểm hiện tại. Với sự chỉnh chu về ng&ocirc;n ngữ thiết kế, hiệu năng cũng như nghi&ecirc;n cứu kỹ lưỡng về h&agrave;nh vi người d&ugrave;ng, Samsung đ&atilde; cho ra mắt d&ograve;ng m&aacute;y n&agrave;y với 3 phi&ecirc;n bản:</p>\n\n<ul>\n	<li>\n	<p>+ Samsung Galaxy S22 Ultra</p>\n	</li>\n	<li>\n	<p>+ Samsung Galaxy S22 Plus</p>\n	</li>\n	<li>\n	<p>+ Samsung Galaxy S22</p>\n	</li>\n</ul>\n\n<p><img alt="Có mấy phiên bản Galaxy S22 được Samsung ra mắt?" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-s22-2.png" /></p>\n\n<p>Ba phi&ecirc;n bản với đ&ocirc;i ch&uacute;t kh&aacute;c nhau trong th&ocirc;ng số kỹ thuật đ&atilde; tạo n&ecirc;n tổng thể h&agrave;i h&ograve;a v&agrave; rất đỗi ho&agrave;n hảo gi&uacute;p những chiếc Flagship nh&agrave; Samsung c&oacute; thể phủ s&oacute;ng thị trường tốt hơn đem đến nhiều lựa chọn cho người ti&ecirc;u d&ugrave;ng hơn.</p>\n\n<h2><strong>Samsung Galaxy S22 | S22 Plus | S22 Ultra gi&aacute; bao nhi&ecirc;u?</strong></h2>\n\n<p>Thiết kế mới lạ cực kỳ cao cấp v&agrave; sang trọng c&ugrave;ng với c&aacute;c t&iacute;nh năng cực kỳ nổi bật ti&ecirc;n phong mở đường cho h&agrave;ng loạt c&aacute;c thế hệ smartphone kh&aacute;c tr&ecirc;n thị trường đ&atilde; gi&uacute;p những chiếc điện thoại&nbsp;<strong>Samsung Galaxy S22 series</strong>&nbsp;c&oacute; mức gi&aacute; tương đối cao. Cho mỗi phi&ecirc;n bản v&agrave; dung lượng bộ nhớ mức gi&aacute; n&agrave;y sẽ c&oacute; đ&ocirc;i ch&uacute;t điều chỉnh, cụ thể:</p>\n\n<ul>\n	<li>\n	<p>+ Samsung S22 Ultra 128GB: 30.990.000 VNĐ</p>\n	</li>\n	<li>\n	<p>+ Samsung S22 Ultra 256GB: 33.990.000 VNĐ</p>\n	</li>\n	<li>\n	<p>+ Samsung S22 Ultra 512GB: 36.990.000 VNĐ</p>\n	</li>\n	<li>\n	<p>+ Samsung S22 Plus 128GB: 25.990.000 VNĐ</p>\n	</li>\n	<li>\n	<p>+ Samsung S22 Plus 256GB: 27.490.000 VNĐ</p>\n	</li>\n	<li>\n	<p>+ Samsung S22 128GB: 21.990.000 VNĐ</p>\n	</li>\n	<li>\n	<p>+ Samsung S22 256GB: 23.490.000 VNĐ</p>\n	</li>\n</ul>\n\n<p>Đ&acirc;y l&agrave; mức gi&aacute; được xem l&agrave; kh&aacute; hợp l&yacute; để sở hữu si&ecirc;u phẩm c&ocirc;ng nghệ vừa đẹp v&agrave; c&oacute; chất ri&ecirc;ng trong thiết kế lại c&oacute; hiệu năng mạnh mẽ dẫn đầu thị trường trong t&iacute;nh năng c&ocirc;ng nghệ hiện đại.</p>\n\n<h2><strong>Điện thoại Samsung Galaxy S22 Series c&oacute; mấy m&agrave;u?</strong></h2>\n\n<p>So với phi&ecirc;n bản tiền nhiệm kh&aacute; đơn điệu về m&agrave;u sắc những chiếc điện thoại Samsung Galaxy đ&atilde; c&oacute; nhiều t&ugrave;y chọn m&agrave;u hơn đảm bảo thể hiện c&aacute; t&iacute;nh tiềm ẩn của mỗi c&aacute; nh&acirc;n đồng thời đảm bảo thẩm mỹ v&agrave; cực kỳ bắt trend.</p>\n\n<p><img alt="Điện thoại Samsung Galaxy S22 Series có mấy màu?" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/mobile/samsung/samsung-galaxy-s22-3.png" /></p>\n\n<p>Hiện tại d&ograve;ng điện thoại n&agrave;y đang sở hữu bảng t&ugrave;y chọn m&agrave;u sắc trang nh&atilde; thanh lịch nhưng cũng ấn tượng như:</p>\n\n<ul>\n	<li>\n	<p>+ Xanh Zeta</p>\n	</li>\n	<li>\n	<p>+ Trắng Phantom</p>\n	</li>\n	<li>\n	<p>+ Đen Phantom</p>\n	</li>\n	<li>\n	<p>+ Đỏ Burgundy&nbsp; (chỉ c&oacute; ở d&ograve;ng Samsung Galaxy S22 Ultra)</p>\n	</li>\n	<li>\n	<p>+ Hồng Blossom (Chỉ c&oacute; ở d&ograve;ng Samsung Galaxy S22 v&agrave; S22+)</p>\n	</li>\n</ul>\n\n<p>Bảng t&ugrave;y chọn m&agrave;u cực độc lạ n&agrave;y đ&atilde; kiến tạo l&ecirc;n những si&ecirc;u phẩm đậm chất ri&ecirc;ng c&oacute; vẻ ngo&agrave;i tinh mỹ v&agrave; ho&agrave;n hảo bậc nhất trong thế giới c&ocirc;ng nghệ.</p>\n\n<h2><strong>Th&ocirc;ng số cấu h&igrave;nh của Samsung Galaxy S22 Series</strong></h2>\n\n<p>Kh&ocirc;ng hề qu&aacute; khi n&oacute;i d&ograve;ng Flagship mới của Samsung đang giữ cho m&igrave;nh những th&ocirc;ng số kỹ thuật ho&agrave;n hảo bậc nhất m&agrave; kh&oacute; c&oacute; d&ograve;ng sản phẩm n&agrave;o kh&aacute;c c&oacute; thể s&aacute;nh đ&ocirc;i.</p>\n\n<p>D&ograve;ng Flagship nh&agrave; Samsung tr&igrave;nh l&agrave;ng giới c&ocirc;ng nghệ với 3 phi&ecirc;n bản si&ecirc;u đặc sắc c&oacute; đ&ocirc;i ch&uacute;t kh&aacute;c nhau về th&ocirc;ng số cấu h&igrave;nh. Cụ thể những th&ocirc;ng số l&agrave;m n&ecirc;n sự kh&aacute;c biệt của&nbsp;<strong>Samsung Galaxy S22, S22+ v&agrave; S22 Ultra</strong>&nbsp;như sau:</p>\n\n<h3><strong>Galaxy S22</strong></h3>\n', 3.8, 9),
	(92, 'iphone11', 1, 2, '<h2><strong>Tại sao n&ecirc;n mua iPhone 11 ch&iacute;nh h&atilde;ng VN/A?</strong></h2>\n\n<p>D&ugrave; iPhone 11 l&agrave; một trong những thiết bị smartphone tầm trung đ&aacute;ng mua nhất ở thời điểm hiện tại, bạn cũng n&ecirc;n cẩn thận lựa chọn d&ograve;ng sản phẩm n&agrave;y ch&iacute;nh h&atilde;ng VN/A để c&oacute; được trải nghiệm tốt nhất. Nhiều người v&igrave; ham rẻ m&agrave; đ&atilde; chọn mua phải d&ograve;ng iPhone 11 k&eacute;m chất lượng, kh&ocirc;ng phải h&agrave;ng ch&iacute;nh h&atilde;ng VN/A, dẫn tới hiệu quả sử dụng thấp, kh&ocirc;ng đ&aacute;p ứng được c&aacute;c nhu cầu c&ocirc;ng việc, giải tr&iacute;.</p>\n\n<p><img alt="Tại sao nên mua iPhone 11 chính hãng VN/A?" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Apple/iPhone-11/iPhone-11-5.jpg" /></p>\n\n<p>Một trong những l&yacute; do m&agrave; bạn n&ecirc;n mua d&ograve;ng sản phẩm iPhone 11 ch&iacute;nh h&atilde;ng n&agrave;y l&agrave; bạn sẽ nhận được chế độ&nbsp;<strong>bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng</strong>&nbsp;tại c&aacute;c trung t&acirc;m bảo h&agrave;nh uỷ quyền của Apple tại Việt Nam. Đ&acirc;y l&agrave; đặc quyền m&agrave; chỉ c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng VN/A nhận được. Nhiều d&ograve;ng sản phẩm iPhone x&aacute;ch tay từ H&agrave;n Quốc, Nhật Bản v&agrave; c&aacute;c nước kh&aacute;c đều kh&ocirc;ng nhận được chế độ bảo h&agrave;nh ch&iacute;nh h&atilde;ng n&agrave;y tại Việt Nam.</p>\n\n<p>B&ecirc;n cạnh đ&oacute;, chất lượng của c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng VN/A cũng được đảm bảo hơn c&aacute;c d&ograve;ng sản phẩm kh&ocirc;ng r&otilde; nguồn gốc v&agrave; c&aacute;c sản phẩm x&aacute;ch tay tới từ c&aacute;c quốc gia kh&aacute;c. C&aacute;c th&ocirc;ng số kỹ thuật của c&aacute;c sản phẩm VN/A đều đ&atilde; được hiệu chỉnh chi tiết để đảm bảo c&oacute; được độ bền bỉ, chắc chắn nhất tại từng quốc gia cụ thể m&agrave; ở đ&acirc;y l&agrave; Việt Nam.</p>\n\n<h2><strong>iPhone 11 được n&acirc;ng cấp g&igrave; so với iPhone XR? Bảng th&ocirc;ng số iPhone 11 chi tiết</strong></h2>\n\n<p>So với iPhone XR th&igrave; si&ecirc;u phẩm Apple năm 2019 c&oacute; nhiều n&acirc;ng cấp đ&aacute;ng gi&aacute;, trong đ&oacute; nổi bật l&agrave; con chip xử l&yacute;, bộ nhớ RAM, dung lượng pin, đặc biệt l&agrave; camera trước v&agrave; sau. Dưới đ&acirc;y l&agrave; bảng so s&aacute;nh th&ocirc;ng số kỹ thuật của iPhone 11 v&agrave; XR bạn c&oacute; thể tham khảo:</p>\n\n<table border="0">\n	<tbody>\n		<tr>\n			<td>&nbsp;</td>\n			<td>\n			<p><strong>iPhone 11</strong></p>\n			</td>\n			<td>\n			<p><strong>iPhone XR</strong></p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>M&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>IPS LCD 6.1 inch</p>\n			</td>\n			<td>\n			<p>IPS LCD 6.1 inch</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Độ ph&acirc;n giải</strong></p>\n			</td>\n			<td>\n			<p>828 x 1792 pixel</p>\n			</td>\n			<td>\n			<p>828 x 1792 pixel</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Mật độ điểm ảnh</strong></p>\n			</td>\n			<td>\n			<p>326PPI</p>\n			</td>\n			<td>\n			<p>326PPI</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Tần số qu&eacute;t</strong></p>\n			</td>\n			<td>\n			<p>60Hz</p>\n			</td>\n			<td>\n			<p>60Hz</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Chip xử l&yacute;</strong></p>\n			</td>\n			<td>\n			<p><strong>A13 Bionic</strong></p>\n			</td>\n			<td>\n			<p>A12 Bionic</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Dung lượng RAM</strong></p>\n			</td>\n			<td>\n			<p><strong>4GB</strong></p>\n			</td>\n			<td>\n			<p>3GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Bộ nhớ trong</strong></p>\n			</td>\n			<td>\n			<p>64GB, 128GB, 256GB</p>\n			</td>\n			<td>\n			<p>64GB, 128GB, 256GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Dung lượng pin</strong></p>\n			</td>\n			<td>\n			<p><strong>3110 mAh</strong></p>\n			</td>\n			<td>\n			<p>2942 mAh</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera trước</strong></p>\n			</td>\n			<td>\n			<p><strong>12MP</strong></p>\n			</td>\n			<td>\n			<p>7MP</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera sau</strong></p>\n			</td>\n			<td>\n			<p><strong>12MP + 12MP</strong></p>\n			</td>\n			<td>\n			<p>12MP</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>M&agrave;u sắc</strong></p>\n			</td>\n			<td>\n			<p>6 m&agrave;u</p>\n			</td>\n			<td>\n			<p>6 m&agrave;u</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<h2><strong>Ưu điểm nổi trội của iPhone 11 so với smartphone kh&aacute;c</strong></h2>\n\n<p>Thời gian gần đ&acirc;y, thị trường smartphone đang c&oacute; những bước chuyển m&igrave;nh mạnh mẽ với sự ra đời của h&agrave;ng loạt những sản phẩm với c&aacute;c c&ocirc;ng nghệ hiện đại bậc nhất như: bộ vi xử l&yacute; Snapdragon 8 Gen 2, tấm nền m&agrave;n h&igrave;nh QLED&hellip; Đ&oacute; c&oacute; thể l&agrave; những bước tiến lớn nhưng n&oacute; kh&ocirc;ng c&oacute; nghĩa l&agrave; dấu chấm hết cho những thiết bị đ&atilde; được ra mắt trước đ&oacute; như iPhone 11.</p>\n', 0.0, 0),
	(93, 'iphone16', 1, 2, '<h2><strong>Tại sao n&ecirc;n mua iPhone 11 ch&iacute;nh h&atilde;ng VN/A?</strong></h2>\n\n<p>D&ugrave; iPhone 11 l&agrave; một trong những thiết bị smartphone tầm trung đ&aacute;ng mua nhất ở thời điểm hiện tại, bạn cũng n&ecirc;n cẩn thận lựa chọn d&ograve;ng sản phẩm n&agrave;y ch&iacute;nh h&atilde;ng VN/A để c&oacute; được trải nghiệm tốt nhất. Nhiều người v&igrave; ham rẻ m&agrave; đ&atilde; chọn mua phải d&ograve;ng iPhone 11 k&eacute;m chất lượng, kh&ocirc;ng phải h&agrave;ng ch&iacute;nh h&atilde;ng VN/A, dẫn tới hiệu quả sử dụng thấp, kh&ocirc;ng đ&aacute;p ứng được c&aacute;c nhu cầu c&ocirc;ng việc, giải tr&iacute;.</p>\n\n<p><img alt="Tại sao nên mua iPhone 11 chính hãng VN/A?" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Apple/iPhone-11/iPhone-11-5.jpg" /></p>\n\n<p>Một trong những l&yacute; do m&agrave; bạn n&ecirc;n mua d&ograve;ng sản phẩm iPhone 11 ch&iacute;nh h&atilde;ng n&agrave;y l&agrave; bạn sẽ nhận được chế độ&nbsp;<strong>bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng</strong>&nbsp;tại c&aacute;c trung t&acirc;m bảo h&agrave;nh uỷ quyền của Apple tại Việt Nam. Đ&acirc;y l&agrave; đặc quyền m&agrave; chỉ c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng VN/A nhận được. Nhiều d&ograve;ng sản phẩm iPhone x&aacute;ch tay từ H&agrave;n Quốc, Nhật Bản v&agrave; c&aacute;c nước kh&aacute;c đều kh&ocirc;ng nhận được chế độ bảo h&agrave;nh ch&iacute;nh h&atilde;ng n&agrave;y tại Việt Nam.</p>\n\n<p>B&ecirc;n cạnh đ&oacute;, chất lượng của c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng VN/A cũng được đảm bảo hơn c&aacute;c d&ograve;ng sản phẩm kh&ocirc;ng r&otilde; nguồn gốc v&agrave; c&aacute;c sản phẩm x&aacute;ch tay tới từ c&aacute;c quốc gia kh&aacute;c. C&aacute;c th&ocirc;ng số kỹ thuật của c&aacute;c sản phẩm VN/A đều đ&atilde; được hiệu chỉnh chi tiết để đảm bảo c&oacute; được độ bền bỉ, chắc chắn nhất tại từng quốc gia cụ thể m&agrave; ở đ&acirc;y l&agrave; Việt Nam.</p>\n\n<h2><strong>iPhone 11 được n&acirc;ng cấp g&igrave; so với iPhone XR? Bảng th&ocirc;ng số iPhone 11 chi tiết</strong></h2>\n\n<p>So với iPhone XR th&igrave; si&ecirc;u phẩm Apple năm 2019 c&oacute; nhiều n&acirc;ng cấp đ&aacute;ng gi&aacute;, trong đ&oacute; nổi bật l&agrave; con chip xử l&yacute;, bộ nhớ RAM, dung lượng pin, đặc biệt l&agrave; camera trước v&agrave; sau. Dưới đ&acirc;y l&agrave; bảng so s&aacute;nh th&ocirc;ng số kỹ thuật của iPhone 11 v&agrave; XR bạn c&oacute; thể tham khảo:</p>\n\n<table border="0">\n	<tbody>\n		<tr>\n			<td>&nbsp;</td>\n			<td>\n			<p><strong>iPhone 11</strong></p>\n			</td>\n			<td>\n			<p><strong>iPhone XR</strong></p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>M&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>IPS LCD 6.1 inch</p>\n			</td>\n			<td>\n			<p>IPS LCD 6.1 inch</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Độ ph&acirc;n giải</strong></p>\n			</td>\n			<td>\n			<p>828 x 1792 pixel</p>\n			</td>\n			<td>\n			<p>828 x 1792 pixel</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Mật độ điểm ảnh</strong></p>\n			</td>\n			<td>\n			<p>326PPI</p>\n			</td>\n			<td>\n			<p>326PPI</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Tần số qu&eacute;t</strong></p>\n			</td>\n			<td>\n			<p>60Hz</p>\n			</td>\n			<td>\n			<p>60Hz</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Chip xử l&yacute;</strong></p>\n			</td>\n			<td>\n			<p><strong>A13 Bionic</strong></p>\n			</td>\n			<td>\n			<p>A12 Bionic</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Dung lượng RAM</strong></p>\n			</td>\n			<td>\n			<p><strong>4GB</strong></p>\n			</td>\n			<td>\n			<p>3GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Bộ nhớ trong</strong></p>\n			</td>\n			<td>\n			<p>64GB, 128GB, 256GB</p>\n			</td>\n			<td>\n			<p>64GB, 128GB, 256GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Dung lượng pin</strong></p>\n			</td>\n			<td>\n			<p><strong>3110 mAh</strong></p>\n			</td>\n			<td>\n			<p>2942 mAh</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera trước</strong></p>\n			</td>\n			<td>\n			<p><strong>12MP</strong></p>\n			</td>\n			<td>\n			<p>7MP</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera sau</strong></p>\n			</td>\n			<td>\n			<p><strong>12MP + 12MP</strong></p>\n			</td>\n			<td>\n			<p>12MP</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>M&agrave;u sắc</strong></p>\n			</td>\n			<td>\n			<p>6 m&agrave;u</p>\n			</td>\n			<td>\n			<p>6 m&agrave;u</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<h2><strong>Ưu điểm nổi trội của iPhone 11 so với smartphone kh&aacute;c</strong></h2>\n\n<p>Thời gian gần đ&acirc;y, thị trường smartphone đang c&oacute; những bước chuyển m&igrave;nh mạnh mẽ với sự ra đời của h&agrave;ng loạt những sản phẩm với c&aacute;c c&ocirc;ng nghệ hiện đại bậc nhất như: bộ vi xử l&yacute; Snapdragon 8 Gen 2, tấm nền m&agrave;n h&igrave;nh QLED&hellip; Đ&oacute; c&oacute; thể l&agrave; những bước tiến lớn nhưng n&oacute; kh&ocirc;ng c&oacute; nghĩa l&agrave; dấu chấm hết cho những thiết bị đ&atilde; được ra mắt trước đ&oacute; như iPhone 11.</p>\n', 0.0, 0),
	(102, 'Samsung Galaxy Z Fold6', 2, 2, '<p>3</p>\n', 0.0, 0),
	(103, 'Samsung Galaxy S24 Ultra', 2, 2, '<h2><strong>V&igrave; sao n&ecirc;n mua Samsung Galaxy S24 Ultra?</strong></h2>\n\n<p>Đầu năm 2024, Samsung cho ra mắt&nbsp;<strong>Samsung S24 Ultra</strong>&nbsp;&ndash; Flagship dẫn đầu xu hướng với&nbsp;<strong>c&ocirc;ng nghệ AI</strong>&nbsp;t&iacute;ch hợp c&ugrave;ng nhiều t&iacute;nh năng v&agrave; ưu điểm vượt trội kh&aacute;c. C&aacute;c t&iacute;nh năng AI nổi bật tr&ecirc;n điện thoại&nbsp;<strong>Samsung mới nhất</strong>&nbsp;bao gồm:</p>\n\n<p>-&nbsp;<strong>Galaxy AI với c&aacute;c t&iacute;nh năng Khoanh tr&ograve;n để t&igrave;m kiếm, Photo Assist, Live Translate, Note Assist</strong>.</p>\n\n<p>-&nbsp;<strong>Khung viền bằng titan cứng c&aacute;p</strong>, gi&uacute;p thiết bị bền bỉ theo thời gian.</p>\n\n<p>-&nbsp;<strong>C&aacute;c phi&ecirc;n bản m&agrave;u lấy cảm hứng từ chất liệu đ&aacute; tự nhi&ecirc;n</strong>, mang đến vẻ đẹp sang trọng v&agrave; hiện đại.</p>\n\n<p>-&nbsp;<strong>Camera t&iacute;ch hợp c&ocirc;ng nghệ AI tuyệt đỉnh</strong>, n&acirc;ng tầm chất lượng v&agrave; khả năng xử l&yacute; h&igrave;nh ảnh.</p>\n\n<p>-&nbsp;<strong>Hiệu năng cực đỉnh với chip Snapdragon 8 Gen3 for Galaxy</strong>, chiến game mượt m&agrave;.</p>\n\n<p>-<strong>&nbsp;Pin khoẻ 5000mAh,</strong>&nbsp;k&eacute;o d&agrave;i thời gian sử dụng cả ng&agrave;y d&agrave;i, để kh&ocirc;ng bỏ lỡ khoảnh khắc quan trọng.</p>\n\n<p>-&nbsp;<strong>M&agrave;n h&igrave;nh Dynamic AMOLED 2X với độ s&aacute;ng l&ecirc;n đến 2600 nit,</strong>&nbsp;ch&igrave;m đắm trong thế giới h&igrave;nh ảnh rực rỡ đầy m&agrave;u sắc.</p>\n\n<p><img alt="Samsung Galaxy S24 Ultra là smartphone AI đáng sở hữu đầu năm 2024" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Samsung/samsung_s/Samsung-S24/samsung-galaxy-s24-ultra-11.jpg" title="Samsung Galaxy S24 Ultra là smartphone AI đáng sở hữu đầu năm 2024" /></p>\n\n<p><em>Samsung Galaxy S24 Ultra l&agrave; smartphone AI đ&aacute;ng sở hữu đầu năm 2024</em></p>\n\n<p>C&oacute; thể thấy, sở hữu sớm Samsung S24 Ultra đồng nghĩa với việc bạn l&agrave; một trong những người đầu ti&ecirc;n kh&aacute;m ph&aacute;,&nbsp;trải nghiệm&nbsp;c&ocirc;ng nghệ ho&agrave;n to&agrave;n mới được t&iacute;ch hợp ngay tr&ecirc;n chiếc điện thoại th&ocirc;ng minh. Ngo&agrave;i thiết kế sang trọng, c&oacute; nhiều điểm cải tiến mới, th&igrave; thiết bị n&agrave;y c&ograve;n hỗ trợ n&acirc;ng cao trải nghiệm trong giải tr&iacute;, học tập, l&agrave;m việc th&ocirc;ng qua AI - t&iacute;nh năng m&agrave; trước nay c&oacute; thể c&aacute;c sản phẩm kh&aacute;c chưa l&agrave;m được.</p>\n\n<h2><strong>Mua Samsung S24 Ultra ưu đ&atilde;i đặc quyền tại CellphoneS</strong></h2>\n\n<p>L&agrave; đại l&yacute; ủy quyền ch&iacute;nh h&atilde;ng của Samsung tại Việ Nam, do đ&oacute; khi kh&aacute;ch h&agrave;ng mua&nbsp;Samsung S24 Ultra tại hệ thống sẽ được nhận nhiều ưu đ&atilde;i hấp dẫn như:</p>\n\n<p>- Mua h&agrave;ng trả g&oacute;p 3 KH&Ocirc;NG: KH&Ocirc;NG&nbsp; l&atilde;i suất - KH&Ocirc;NG phụ ph&iacute; - KH&Ocirc;NG trả trước để sở hữu sớm&nbsp;S24 Ultra với chi ph&iacute; h&agrave;ng th&aacute;ng hợp l&yacute;</p>\n\n<p>- Ưu đ&atilde;i d&agrave;nh th&ecirc;m khi l&agrave; học sinh sinh vi&ecirc;n: Xuất tr&igrave;nh thẻ sinh vi&ecirc;n khi mua h&agrave;ng</p>\n\n<p>- Trợ gi&aacute; l&ecirc;n đời hấp dẫn c&ugrave;ng nhiều ưu đ&atilde;i thanh to&aacute;n ng&acirc;n h&agrave;ng v&ocirc; c&ugrave;ng gi&aacute; trị</p>\n\n<p><br />\n<img alt="Mua Samsung S24 Ultra tại CellphoneS ưu đãi 10,5 triệu, trả góp 0%" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Samsung/samsung_s/Samsung-S24/samsung-galaxy-s24-ultra-37.jpg" title="Mua Samsung S24 Ultra tại CellphoneS ưu đãi 10,5 triệu, trả góp 0%" /></p>\n\n<p><em>Mua Samsung S24 Ultra tại CellphoneS ưu đ&atilde;i hấp dẫn, trả g&oacute;p 0%</em></p>\n\n<h2><strong>So s&aacute;nh Samsung Galaxy S24 Ultra vs S23 Ultra</strong></h2>\n\n<p>Samsung Galaxy S24 Ultra mang nhiều t&iacute;nh năng v&agrave; cải tiến vượt trội hơn so với thế hệ trước - S23 Ultra. Cụ thể hơn bạn c&oacute; thể tham khảo chi tiết qua bảng dưới đ&acirc;y.</p>\n\n<p><strong>Bảng so s&aacute;nh chi tiết th&ocirc;ng số SS S24 Ultra v&agrave; S23 Ultra:</strong></p>\n\n<p>&nbsp;</p>\n\n<table>\n	<thead>\n		<tr>\n			<td>\n			<p><strong>Th&ocirc;ng số</strong></p>\n			</td>\n			<td>\n			<p><strong>Samsung Galaxy S24 Ultra 12GB 256GB</strong></p>\n			</td>\n			<td>\n			<p><strong>Samsung Galaxy S23 Ultra 256GB</strong></p>\n			</td>\n		</tr>\n	</thead>\n	<tbody>\n		<tr>\n			<td>\n			<p><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>6.8 inches</p>\n			</td>\n			<td>\n			<p>6.8 inches</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>Dynamic AMOLED 2X</p>\n			</td>\n			<td>\n			<p>Dynamic AMOLED 2X</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera sau</strong></p>\n			</td>\n			<td>\n			<p>Camera ch&iacute;nh: 200MP, Laser AF, OIS<br />\n			Camera: 50MP, PDAF, OIS, zoom quang học 5x<br />\n			Camera tele: 10MP<br />\n			Camera g&oacute;c si&ecirc;u rộng: 12 MP, f/2.2, 13mm, 120˚</p>\n			</td>\n			<td>\n			<p>Si&ecirc;u rộng: 12MP, F2.2 (Dual Pixel AF)<br />\n			Ch&iacute;nh: 200MP, F1.7 OIS &plusmn;3&deg; (Super Quad Pixel AF)<br />\n			Tele 1: 10MP, F4.9 (10X, Dual Pixel AF) OIS,<br />\n			Tele 2: 10MP, F2.4 (3X, Dual Pixel AF) OIS Thu ph&oacute;ng chuẩn kh&ocirc;ng gian 100X</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera trước</strong></p>\n			</td>\n			<td>\n			<p>12 MP, f/2.2</p>\n			</td>\n			<td>\n			<p>12MP, F2.2 (Dual Pixel AF)</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Chipset</strong></p>\n			</td>\n			<td>\n			<p>Snapdragon 8 Gen 3 For Galaxy</p>\n			</td>\n			<td>\n			<p>Snapdragon 8 Gen 2 (4 nm)</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>C&ocirc;ng nghệ NFC</strong></p>\n			</td>\n			<td>\n			<p>C&oacute;</p>\n			</td>\n			<td>\n			<p>C&oacute;</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Dung lượng RAM</strong></p>\n			</td>\n			<td>\n			<p>12 GB</p>\n			</td>\n			<td>\n			<p>8 GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Bộ nhớ trong</strong></p>\n			</td>\n			<td>\n			<p>256 GB</p>\n			</td>\n			<td>\n			<p>256 GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Pin</strong></p>\n			</td>\n			<td>\n			<p>5,000mAh</p>\n			</td>\n			<td>\n			<p>5.000mAh</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Thẻ SIM</strong></p>\n			</td>\n			<td>\n			<p>SIM 1 + SIM 2 / SIM 1 + eSIM / 2 eSIM</p>\n			</td>\n			<td>\n			<p>2 Nano SIM hoặc 1 Nano + 1 eSIM</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Hệ điều h&agrave;nh</strong></p>\n			</td>\n			<td>\n			<p>Android 14, One UI 6.1</p>\n			</td>\n			<td>\n			<p>Android 13</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>1440 x 3120 pixels</p>\n			</td>\n			<td>\n			<p>1440 x 3088 pixels (QHD+)</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>T&iacute;nh năng m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>Độ s&aacute;ng cao nhất 2,600 nits, 120Hz, Corning&reg; Gorilla&reg; Armor&reg;, 16 triệu m&agrave;u</p>\n			</td>\n			<td>\n			<p>120Hz, HDR10+, 1750 nits, Gorilla Glass Victus 2</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Loại CPU</strong></p>\n			</td>\n			<td>\n			<p>3.39GHz,3.1GHz,2.9GHz,2.2GHz</p>\n			</td>\n			<td>\n			<p>1x3.36 GHz Cortex-X3 &amp; 2x2.8 GHz Cortex-A715 &amp; 2x2.8 GHz Cortex-A710 &amp; 3x2.0 GHz Cortex-A510</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Tương th&iacute;ch</strong></p>\n			</td>\n			<td>\n			<p>B&uacute;t SPEN - t&iacute;ch hợp sẵn l&ecirc;n m&aacute;y</p>\n			</td>\n			<td>\n			<p>B&uacute;t S-Pen</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>Sau khi so s&aacute;nh 2 chiếc điện thoại tr&ecirc;n, chắc hẳn bạn đ&atilde; nắm được những thay đổi về th&ocirc;ng số của Samsung Galaxy S24 Ultra. Ngay sau đ&acirc;y, h&atilde;y c&ugrave;ng CellphoneS t&igrave;m hiểu v&igrave; sao thiết bị n&agrave;y được gọi l&agrave;&nbsp;<strong>AI Smartphone đầu ti&ecirc;n</strong>&nbsp;nh&eacute;!</p>\n', 0.0, 0),
	(104, 'Samsung Galaxy S20 Ultra', 2, 2, '<h2><strong>V&igrave; sao n&ecirc;n mua Samsung Galaxy S24 Ultra?</strong></h2>\n\n<p>Đầu năm 2024, Samsung cho ra mắt&nbsp;<strong>Samsung S24 Ultra</strong>&nbsp;&ndash; Flagship dẫn đầu xu hướng với&nbsp;<strong>c&ocirc;ng nghệ AI</strong>&nbsp;t&iacute;ch hợp c&ugrave;ng nhiều t&iacute;nh năng v&agrave; ưu điểm vượt trội kh&aacute;c. C&aacute;c t&iacute;nh năng AI nổi bật tr&ecirc;n điện thoại&nbsp;<strong>Samsung mới nhất</strong>&nbsp;bao gồm:</p>\n\n<p>-&nbsp;<strong>Galaxy AI với c&aacute;c t&iacute;nh năng Khoanh tr&ograve;n để t&igrave;m kiếm, Photo Assist, Live Translate, Note Assist</strong>.</p>\n\n<p>-&nbsp;<strong>Khung viền bằng titan cứng c&aacute;p</strong>, gi&uacute;p thiết bị bền bỉ theo thời gian.</p>\n\n<p>-&nbsp;<strong>C&aacute;c phi&ecirc;n bản m&agrave;u lấy cảm hứng từ chất liệu đ&aacute; tự nhi&ecirc;n</strong>, mang đến vẻ đẹp sang trọng v&agrave; hiện đại.</p>\n\n<p>-&nbsp;<strong>Camera t&iacute;ch hợp c&ocirc;ng nghệ AI tuyệt đỉnh</strong>, n&acirc;ng tầm chất lượng v&agrave; khả năng xử l&yacute; h&igrave;nh ảnh.</p>\n\n<p>-&nbsp;<strong>Hiệu năng cực đỉnh với chip Snapdragon 8 Gen3 for Galaxy</strong>, chiến game mượt m&agrave;.</p>\n\n<p>-<strong>&nbsp;Pin khoẻ 5000mAh,</strong>&nbsp;k&eacute;o d&agrave;i thời gian sử dụng cả ng&agrave;y d&agrave;i, để kh&ocirc;ng bỏ lỡ khoảnh khắc quan trọng.</p>\n\n<p>-&nbsp;<strong>M&agrave;n h&igrave;nh Dynamic AMOLED 2X với độ s&aacute;ng l&ecirc;n đến 2600 nit,</strong>&nbsp;ch&igrave;m đắm trong thế giới h&igrave;nh ảnh rực rỡ đầy m&agrave;u sắc.</p>\n\n<p><img alt="Samsung Galaxy S24 Ultra là smartphone AI đáng sở hữu đầu năm 2024" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Samsung/samsung_s/Samsung-S24/samsung-galaxy-s24-ultra-11.jpg" title="Samsung Galaxy S24 Ultra là smartphone AI đáng sở hữu đầu năm 2024" /></p>\n\n<p><em>Samsung Galaxy S24 Ultra l&agrave; smartphone AI đ&aacute;ng sở hữu đầu năm 2024</em></p>\n\n<p>C&oacute; thể thấy, sở hữu sớm Samsung S24 Ultra đồng nghĩa với việc bạn l&agrave; một trong những người đầu ti&ecirc;n kh&aacute;m ph&aacute;,&nbsp;trải nghiệm&nbsp;c&ocirc;ng nghệ ho&agrave;n to&agrave;n mới được t&iacute;ch hợp ngay tr&ecirc;n chiếc điện thoại th&ocirc;ng minh. Ngo&agrave;i thiết kế sang trọng, c&oacute; nhiều điểm cải tiến mới, th&igrave; thiết bị n&agrave;y c&ograve;n hỗ trợ n&acirc;ng cao trải nghiệm trong giải tr&iacute;, học tập, l&agrave;m việc th&ocirc;ng qua AI - t&iacute;nh năng m&agrave; trước nay c&oacute; thể c&aacute;c sản phẩm kh&aacute;c chưa l&agrave;m được.</p>\n\n<h2><strong>Mua Samsung S24 Ultra ưu đ&atilde;i đặc quyền tại CellphoneS</strong></h2>\n\n<p>L&agrave; đại l&yacute; ủy quyền ch&iacute;nh h&atilde;ng của Samsung tại Việ Nam, do đ&oacute; khi kh&aacute;ch h&agrave;ng mua&nbsp;Samsung S24 Ultra tại hệ thống sẽ được nhận nhiều ưu đ&atilde;i hấp dẫn như:</p>\n\n<p>- Mua h&agrave;ng trả g&oacute;p 3 KH&Ocirc;NG: KH&Ocirc;NG&nbsp; l&atilde;i suất - KH&Ocirc;NG phụ ph&iacute; - KH&Ocirc;NG trả trước để sở hữu sớm&nbsp;S24 Ultra với chi ph&iacute; h&agrave;ng th&aacute;ng hợp l&yacute;</p>\n\n<p>- Ưu đ&atilde;i d&agrave;nh th&ecirc;m khi l&agrave; học sinh sinh vi&ecirc;n: Xuất tr&igrave;nh thẻ sinh vi&ecirc;n khi mua h&agrave;ng</p>\n\n<p>- Trợ gi&aacute; l&ecirc;n đời hấp dẫn c&ugrave;ng nhiều ưu đ&atilde;i thanh to&aacute;n ng&acirc;n h&agrave;ng v&ocirc; c&ugrave;ng gi&aacute; trị</p>\n\n<p><br />\n<img alt="Mua Samsung S24 Ultra tại CellphoneS ưu đãi 10,5 triệu, trả góp 0%" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Samsung/samsung_s/Samsung-S24/samsung-galaxy-s24-ultra-37.jpg" title="Mua Samsung S24 Ultra tại CellphoneS ưu đãi 10,5 triệu, trả góp 0%" /></p>\n\n<p><em>Mua Samsung S24 Ultra tại CellphoneS ưu đ&atilde;i hấp dẫn, trả g&oacute;p 0%</em></p>\n\n<h2><strong>So s&aacute;nh Samsung Galaxy S24 Ultra vs S23 Ultra</strong></h2>\n\n<p>Samsung Galaxy S24 Ultra mang nhiều t&iacute;nh năng v&agrave; cải tiến vượt trội hơn so với thế hệ trước - S23 Ultra. Cụ thể hơn bạn c&oacute; thể tham khảo chi tiết qua bảng dưới đ&acirc;y.</p>\n\n<p><strong>Bảng so s&aacute;nh chi tiết th&ocirc;ng số SS S24 Ultra v&agrave; S23 Ultra:</strong></p>\n\n<p>&nbsp;</p>\n\n<table>\n	<thead>\n		<tr>\n			<td>\n			<p><strong>Th&ocirc;ng số</strong></p>\n			</td>\n			<td>\n			<p><strong>Samsung Galaxy S24 Ultra 12GB 256GB</strong></p>\n			</td>\n			<td>\n			<p><strong>Samsung Galaxy S23 Ultra 256GB</strong></p>\n			</td>\n		</tr>\n	</thead>\n	<tbody>\n		<tr>\n			<td>\n			<p><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>6.8 inches</p>\n			</td>\n			<td>\n			<p>6.8 inches</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>Dynamic AMOLED 2X</p>\n			</td>\n			<td>\n			<p>Dynamic AMOLED 2X</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera sau</strong></p>\n			</td>\n			<td>\n			<p>Camera ch&iacute;nh: 200MP, Laser AF, OIS<br />\n			Camera: 50MP, PDAF, OIS, zoom quang học 5x<br />\n			Camera tele: 10MP<br />\n			Camera g&oacute;c si&ecirc;u rộng: 12 MP, f/2.2, 13mm, 120˚</p>\n			</td>\n			<td>\n			<p>Si&ecirc;u rộng: 12MP, F2.2 (Dual Pixel AF)<br />\n			Ch&iacute;nh: 200MP, F1.7 OIS &plusmn;3&deg; (Super Quad Pixel AF)<br />\n			Tele 1: 10MP, F4.9 (10X, Dual Pixel AF) OIS,<br />\n			Tele 2: 10MP, F2.4 (3X, Dual Pixel AF) OIS Thu ph&oacute;ng chuẩn kh&ocirc;ng gian 100X</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera trước</strong></p>\n			</td>\n			<td>\n			<p>12 MP, f/2.2</p>\n			</td>\n			<td>\n			<p>12MP, F2.2 (Dual Pixel AF)</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Chipset</strong></p>\n			</td>\n			<td>\n			<p>Snapdragon 8 Gen 3 For Galaxy</p>\n			</td>\n			<td>\n			<p>Snapdragon 8 Gen 2 (4 nm)</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>C&ocirc;ng nghệ NFC</strong></p>\n			</td>\n			<td>\n			<p>C&oacute;</p>\n			</td>\n			<td>\n			<p>C&oacute;</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Dung lượng RAM</strong></p>\n			</td>\n			<td>\n			<p>12 GB</p>\n			</td>\n			<td>\n			<p>8 GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Bộ nhớ trong</strong></p>\n			</td>\n			<td>\n			<p>256 GB</p>\n			</td>\n			<td>\n			<p>256 GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Pin</strong></p>\n			</td>\n			<td>\n			<p>5,000mAh</p>\n			</td>\n			<td>\n			<p>5.000mAh</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Thẻ SIM</strong></p>\n			</td>\n			<td>\n			<p>SIM 1 + SIM 2 / SIM 1 + eSIM / 2 eSIM</p>\n			</td>\n			<td>\n			<p>2 Nano SIM hoặc 1 Nano + 1 eSIM</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Hệ điều h&agrave;nh</strong></p>\n			</td>\n			<td>\n			<p>Android 14, One UI 6.1</p>\n			</td>\n			<td>\n			<p>Android 13</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>1440 x 3120 pixels</p>\n			</td>\n			<td>\n			<p>1440 x 3088 pixels (QHD+)</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>T&iacute;nh năng m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>Độ s&aacute;ng cao nhất 2,600 nits, 120Hz, Corning&reg; Gorilla&reg; Armor&reg;, 16 triệu m&agrave;u</p>\n			</td>\n			<td>\n			<p>120Hz, HDR10+, 1750 nits, Gorilla Glass Victus 2</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Loại CPU</strong></p>\n			</td>\n			<td>\n			<p>3.39GHz,3.1GHz,2.9GHz,2.2GHz</p>\n			</td>\n			<td>\n			<p>1x3.36 GHz Cortex-X3 &amp; 2x2.8 GHz Cortex-A715 &amp; 2x2.8 GHz Cortex-A710 &amp; 3x2.0 GHz Cortex-A510</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Tương th&iacute;ch</strong></p>\n			</td>\n			<td>\n			<p>B&uacute;t SPEN - t&iacute;ch hợp sẵn l&ecirc;n m&aacute;y</p>\n			</td>\n			<td>\n			<p>B&uacute;t S-Pen</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>Sau khi so s&aacute;nh 2 chiếc điện thoại tr&ecirc;n, chắc hẳn bạn đ&atilde; nắm được những thay đổi về th&ocirc;ng số của Samsung Galaxy S24 Ultra. Ngay sau đ&acirc;y, h&atilde;y c&ugrave;ng CellphoneS t&igrave;m hiểu v&igrave; sao thiết bị n&agrave;y được gọi l&agrave;&nbsp;<strong>AI Smartphone đầu ti&ecirc;n</strong>&nbsp;nh&eacute;!</p>\n', 0.0, 0),
	(105, 'OPPO Find X8', 4, 2, '<h2><strong>OPPO Find X8 series c&oacute; mấy phi&ecirc;n bản?</strong></h2>\n\n<p>T&iacute;nh đến thời điểm ra mắt, Series Find X8 lần n&agrave;y ra mắt 2 phi&ecirc;n bản được b&aacute;n ch&iacute;nh h&atilde;ng tại Việt Nam bao gồm:&nbsp;<strong>OPPO Find X8 v&agrave; OPPO Find X8 Pro</strong></p>\n\n<p>C&ugrave;ng xem chi tiết bảng so s&aacute;nh th&ocirc;ng số kỹ thuật giữ 2 phi&ecirc;n bản sau đ&acirc;y:</p>\n\n<p>&nbsp;</p>\n\n<table>\n	<thead>\n		<tr>\n			<td>\n			<p><strong>Th&ocirc;ng số</strong></p>\n			</td>\n			<td>\n			<p><strong>OPPO Find X8</strong></p>\n			</td>\n			<td>\n			<p><strong>OPPO Find X8 Pro</strong></p>\n			</td>\n		</tr>\n	</thead>\n	<tbody>\n		<tr>\n			<td>\n			<p><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>6.59 inches</p>\n			</td>\n			<td>\n			<p>6.78 inches</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>C&ocirc;ng nghệ m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>AMOLED</p>\n			</td>\n			<td>\n			<p>AMOLED</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera sau</strong></p>\n			</td>\n			<td>\n			<p>50MP OIS (Ch&iacute;nh) + 50MP (Ch&acirc;n dung Tele) + 50MP (G&oacute;c rộng)</p>\n			</td>\n			<td>\n			<p>Camera ch&iacute;nh: 50 MP OIS<br />\n			Camera g&oacute;c si&ecirc;u rộng 50 MP<br />\n			Camera tele k&iacute;nh tiềm vọng 50 MP hỗ trợ zoom quang 3X<br />\n			Camera tele k&iacute;nh tiềm vọng zoom quang 6X.</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Camera trước</strong></p>\n			</td>\n			<td>\n			<p>32MP, khẩu độ F/2.4</p>\n			</td>\n			<td>\n			<p>32 MP</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Chipset</strong></p>\n			</td>\n			<td>\n			<p>MediaTek Dimensity 9400</p>\n			</td>\n			<td>\n			<p>MediaTek Dimensity 9400</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>C&ocirc;ng nghệ NFC</strong></p>\n			</td>\n			<td>\n			<p>C&oacute;</p>\n			</td>\n			<td>\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Dung lượng RAM</strong></p>\n			</td>\n			<td>\n			<p>16 GB</p>\n			</td>\n			<td>\n			<p>8 GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Bộ nhớ trong</strong></p>\n			</td>\n			<td>\n			<p>512 GB</p>\n			</td>\n			<td>\n			<p>256 GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Pin</strong></p>\n			</td>\n			<td>\n			<p>5630 mAh</p>\n			</td>\n			<td>\n			<p>5910 mAh</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Thẻ SIM</strong></p>\n			</td>\n			<td>\n			<p>Dual nano-SIM hoặc 1 nano-SIM + 1 eSIM</p>\n			</td>\n			<td>\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Hệ điều h&agrave;nh</strong></p>\n			</td>\n			<td>\n			<p>ColorOS 15, nền tảng Android 15</p>\n			</td>\n			<td>\n			<p>Android 15</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>1256 x 2760 pixels</p>\n			</td>\n			<td>\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>T&iacute;nh năng m&agrave;n h&igrave;nh</strong></p>\n			</td>\n			<td>\n			<p>Tần số qu&eacute;t: 120Hz, K&iacute;nh cường lực GG 7i<br />\n			Độ s&aacute;ng tối đa: 1600 nits<br />\n			M&agrave;u sắc hiển thị: 1 tỷ m&agrave;u</p>\n			</td>\n			<td>\n			<p>Tần số qu&eacute;t 120 Hz, 4.500 nits</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p><strong>Loại CPU</strong></p>\n			</td>\n			<td>\n			<p>8 nh&acirc;n</p>\n			</td>\n			<td>\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<h2><strong>Bảng gi&aacute; OPPO Find X8 series gi&aacute; bao nhi&ecirc;u?</strong></h2>\n\n<p><strong>Gi&aacute; OPPO Find X8 series</strong>&nbsp;mới nhất&nbsp;<strong>2024</strong>&nbsp;hiện nay:&nbsp;</p>\n\n<table>\n	<tbody>\n		<tr>\n			<td>\n			<p><strong>Phi&ecirc;n bản</strong></p>\n			</td>\n			<td>\n			<p><strong>Gi&aacute; b&aacute;n tham khảo</strong></p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>OPPO Find X8</p>\n			</td>\n			<td>\n			<p>22.990.000đ</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>OPPO Find X8 Pro</p>\n			</td>\n			<td>\n			<p>29.990.000đ</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p><em>*** Lưu &yacute;: Tr&ecirc;n đ&acirc;y chỉ l&agrave;&nbsp;<strong>gi&aacute; điện thoại OPPO Find X8 series</strong>&nbsp;tham khảo tại thời điểm mở b&aacute;n, c&oacute; thể thay đổi tuỳ theo chương tr&igrave;nh khuyến m&atilde;i v&agrave; thời điểm kh&aacute;c nhau.</em></p>\n\n<p><img alt="Giá OPPO Find X8 rẻ chỉ từ 19 triệu" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/mobile/oppo/oppo-find-x8-gia-bao-nhieu_1.jpg" /></p>\n\n<p>Với cấu h&igrave;nh mạnh mẽ v&agrave; cụm camera sau chất lượng&nbsp;<a href="https://cellphones.com.vn/mobile/oppo.html" target="_blank" title="điện thoại OPPO"><strong>điện thoại OPPO</strong></a>&nbsp;sẽ l&agrave; một sản phẩm rất đ&aacute;ng để người d&ugrave;ng c&acirc;n nhắc lựa chọn trong ph&acirc;n kh&uacute;c cận cao cấp v&agrave; cao cấp b&ecirc;n cạnh c&aacute;c lựa chọn như Xiaomi 13T Pro 5G, Samsung Galaxy S23 FE, iPhone 13,...</p>\n\n<h2><strong>So s&aacute;nh Oppo Find X8 vs Oppo Find X7</strong></h2>\n\n<p>So s&aacute;nh chi tiết th&ocirc;ng số kỹ thuật&nbsp;<strong>OPPO Find X8 v&agrave; OPPO Find X7</strong>:</p>\n\n<table>\n	<tbody>\n		<tr>\n			<td>\n			<p><strong>Th&ocirc;ng số</strong></p>\n			</td>\n			<td>\n			<p><strong>OPPO Find X8</strong></p>\n			</td>\n			<td>\n			<p><strong>OPPO Find X7</strong></p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>M&agrave;n h&igrave;nh&nbsp;</p>\n			</td>\n			<td>\n			<p>AMOLED 6.59 inch</p>\n			</td>\n			<td>\n			<p>3D AMOLED 6.78 inch&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>K&iacute;nh cường lực</p>\n			</td>\n			<td>\n			<p>Corning&reg; Gorilla&reg; Glass 7i&nbsp;</p>\n			</td>\n			<td>\n			<p>K&iacute;nh Corning&reg; Gorilla&reg; Victus&reg; 2</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Độ ph&acirc;n giải</p>\n			</td>\n			<td>\n			<p>1256 x 2760 pixel (1.5K+)</p>\n			</td>\n			<td>\n			<p>2780 &times; 1264 pixel</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>M&agrave;u sắc</p>\n			</td>\n			<td>\n			<p>X&aacute;m, Đen</p>\n			</td>\n			<td>\n			<p>Đen, Bạc, Xanh</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Chip</p>\n			</td>\n			<td>\n			<p>MediaTek Dimensity 9400</p>\n			</td>\n			<td>\n			<p>MediaTek Dimensity 9300</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>RAM</p>\n			</td>\n			<td>\n			<p>&nbsp;16GB</p>\n			</td>\n			<td>\n			<p>16GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>ROM</p>\n			</td>\n			<td>\n			<p>512GB</p>\n			</td>\n			<td>\n			<p>512GB</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Camera sau</p>\n			</td>\n			<td>\n			<p>50MP OIS (Ch&iacute;nh) + 50MP (Ch&acirc;n dung Tele) + 50MP (G&oacute;c si&ecirc;u rộng)</p>\n			</td>\n			<td>&nbsp;50MP OIS (ch&iacute;nh) +64MP (Ch&acirc;n dung tele)+ 50MP (G&oacute;c si&ecirc;u rộng)</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Khẩu độ camera sau</p>\n			</td>\n			<td>\n			<p>F/1.8 + F/2.6 + F/2.0</p>\n			</td>\n			<td>F/1.6 + F/2.6 + F/2.0</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Camera trước</p>\n			</td>\n			<td>\n			<p>32MP</p>\n			</td>\n			<td>\n			<p>32MP</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>T&iacute;nh năng AI</p>\n			</td>\n			<td>\n			<p>Camera zoom viễn vọng AI,</p>\n\n			<p>Ghi ch&uacute; th&ocirc;ng minh,</p>\n\n			<p>Nh&acirc;n diện giọng n&oacute;i,</p>\n\n			<p>Xử l&yacute; t&agrave;i liệu th&ocirc;ng minh, dịch thuật, t&oacute;m tắt văn bản,</p>\n\n			<p>Vẽ lại c&ugrave;ng AI</p>\n			</td>\n			<td>\n			<p>Loại bỏ vật thể thừa trong ảnh,</p>\n\n			<p>T&oacute;m tắt, ghi ch&uacute; th&ocirc;ng minh,</p>\n\n			<p>Trợ l&yacute; th&ocirc;ng minh</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Touch to share</p>\n\n			<p>(Chạm để chia sẻ)</p>\n			</td>\n			<td>\n			<p>Chia sẻ với iPhone chỉ với 1 chạm</p>\n			</td>\n			<td>\n			<p>-</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Kh&aacute;ng nước</p>\n			</td>\n			<td>\n			<p>IP68 &amp; IP69</p>\n			</td>\n			<td>\n			<p>&nbsp;IP65</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Dung lượng pin</p>\n			</td>\n			<td>\n			<p>&nbsp;5630mAh</p>\n			</td>\n			<td>5000mAh</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Khả năng sạc</p>\n			</td>\n			<td>\n			<p>Sạc nhanh c&oacute; d&acirc;y 80W,</p>\n\n			<p>Sạc nhanh kh&ocirc;ng d&acirc;y 50W</p>\n			</td>\n			<td>\n			<p>Sạc c&oacute; d&acirc;y 100W</p>\n\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Trọng lượng</p>\n			</td>\n			<td>\n			<p>193g</p>\n			</td>\n			<td>206g</td>\n		</tr>\n		<tr>\n			<td>\n			<p>K&iacute;ch thước</p>\n			</td>\n			<td>\n			<p>157.35 x 74.33 x 7.85 mm</p>\n			</td>\n			<td>162.7 x 75.4 x 9.0 mm</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Th&ocirc;ng qua chi tiết đ&aacute;nh gi&aacute; th&ocirc;ng số kỹ thuật th&igrave; thấy OPPO Find X8 ch&iacute;nh h&atilde;ng thực sự l&agrave; sản phẩm đ&aacute;ng mua hiện nay. Hơn nữa, X7 hiện kh&ocirc;ng c&oacute; sản phẩm ch&iacute;nh h&atilde;ng tại Việt Nam. V&igrave; vậy để an to&agrave;n bạn c&oacute; thể chọn sản phẩm kế nhiệm để đầy đủ giấy tờ v&agrave; bảo h&agrave;nh hơn nh&eacute;!</p>\n\n<h2><strong>Đ&aacute;nh gi&aacute; OPPO Find X8 c&oacute; g&igrave; mới n&ecirc;n mua?</strong></h2>\n\n<p>L&agrave; thế hệ flagship tiếp theo được&nbsp;<strong>OPPO</strong>&nbsp;ra mắt trong năm nay, điện thoại Find X8 sở hữu cấu h&igrave;nh cải tiến ấn tượng, đủ mạnh mẽ để c&acirc;n mọi t&aacute;c vụ giải tr&iacute;, c&ocirc;ng việc của người d&ugrave;ng. Cụ thể, trong đ&oacute; gồm c&oacute;:</p>\n', 3.5, 2),
	(106, 'Vivo v40', 8, 2, '<h2><strong>Điện thoại vivo Y03 gọn nhẹ, hiệu suất cao nhờ chipset MediaTek Helio G85</strong></h2>\n\n<p><strong>vivo Y03</strong>&nbsp;l&agrave; sản phẩm&nbsp;<strong>điện thoại vivo Y</strong>&nbsp;thuộc ph&acirc;n kh&uacute;c gi&aacute; rẻ nhưng lại sở hữu nhiều t&iacute;nh năng nổi bật. Với thiết kế gọn nhẹ, m&agrave;u sắc đơn giản c&ugrave;ng hiệu năng tốt v&agrave; thời lượng pin khủng vivo Y03 sẽ thỏa m&atilde;n nhu cầu sử dụng từ cơ bản đến n&acirc;ng cao của người d&ugrave;ng.</p>\n\n<h3><strong>Hiệu năng vượt trội nhờ kết hợp với chipset ph&ugrave; hợp</strong></h3>\n\n<p><strong>Điện thoại vivo Y03</strong>&nbsp;c&oacute; hiệu năng tốt nhờ việc được hỗ trợ chipset&nbsp;<strong>MediaTek Helio G85</strong>&nbsp;v&agrave; chạy tr&ecirc;n hệ điều h&agrave;nh&nbsp;<strong>Android 14 OS</strong>. MediaTek Helio G85 gi&uacute;p vivo Y03 lu&ocirc;n duy tr&igrave; được hiệu suất ở mức cao v&agrave; sự ổn định khi hoạt động.</p>\n\n<p><img alt="Hiệu năng điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-3_1.jpg" /></p>\n\n<p>B&ecirc;n cạnh đ&oacute; vivo Y03 cũng sở hữu bộ nhớ tương đối lớn, đ&aacute;p ứng được nhu cầu lưu trữ dữ liệu h&agrave;ng ng&agrave;y của người d&ugrave;ng. Điện thoại vivo Y03 c&oacute; bộ nhớ trong 64GB c&ugrave;ng dung lượng&nbsp;<strong>RAM 4GB</strong>. Ngo&agrave;i ra, người d&ugrave;ng c&ograve;n c&oacute; thể mở rộng bộ nhớ bằng c&aacute;ch sử dụng th&ecirc;m thẻ ngo&agrave;i v&agrave; kết nối với điện thoại th&ocirc;ng qua&nbsp;<strong>khe cắm thẻ nhớ</strong>&nbsp;với dung lượng hỗ trợ tối đa l&ecirc;n đến 1TB.</p>\n\n<h3><strong>Camera 13 MP, ph&ugrave; hợp với nhu cầu chụp ảnh cơ bản</strong></h3>\n\n<p>Hệ thống&nbsp;<strong>camera sau của vivo Y03</strong>&nbsp;l&agrave; bộ camera k&eacute;p với&nbsp;<strong>camera ch&iacute;nh 13 MP</strong>&nbsp;v&agrave; đ&egrave;n flash hỗ trợ chụp ảnh trong điều kiện thiếu s&aacute;ng, ban đ&ecirc;m. Camera trước của vivo Y03 c&oacute; độ ph&acirc;n giải 5MP t&iacute;ch hợp nhiều c&ocirc;ng nghệ chụp ảnh như: Chụp ch&acirc;n dung, l&agrave;m đẹp hoặc c&aacute;c bộ lọc m&agrave;u sinh động,...</p>\n\n<p><img alt="Camera điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-6_1.jpg" /></p>\n\n<p>Điện thoại vivo Y03 gi&uacute;p người d&ugrave;ng dễ d&agrave;ng lưu lại khoảnh khắc của cuộc sống với nhiều chế độ quay, chụp. Người d&ugrave;ng c&oacute; thể chụp ảnh bằng c&ocirc;ng nghệ chụp đ&ecirc;m, bộ lọc cho chụp đ&ecirc;m.</p>\n\n<h3><strong>Dung lượng pin lớn đ&aacute;p ứng nhu cầu sử dụng suốt một ng&agrave;y d&agrave;i</strong></h3>\n\n<p><strong>vivo Y03</strong>&nbsp;sở hữu vi&ecirc;n pin c&oacute; dung lượng&nbsp;<strong>5000 mAh</strong>, hỗ trợ sạc nhanh 15W. Với dung lượng pin lớn người d&ugrave;ng c&oacute; thể thoải m&aacute;i sử dụng điện thoại suốt một ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng phải qu&aacute; lo lắng về vấn đề pin. Ngo&agrave;i ra, vivo Y03 hỗ trợ người d&ugrave;ng kết nối với d&acirc;y sạc th&ocirc;ng của&nbsp;<strong>cổng kết nối type-C</strong>. Đ&acirc;y l&agrave; cổng kết nối phổ biến vậy n&ecirc;n người d&ugrave;ng c&oacute; thể dễ d&agrave;ng mượn sạc trong trường hợp khẩn cấp.</p>\n\n<p><img alt="Pin điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-1.jpg" /></p>\n\n<h3><strong>Chất lượng h&igrave;nh ảnh r&otilde; r&agrave;ng, tần số qu&eacute;t l&ecirc;n đến 90Hz</strong></h3>\n\n<p>M&agrave;n h&igrave;nh của chiếc&nbsp;<a href="https://cellphones.com.vn/mobile/vivo/y-series.html" target="_blank" title="điện thoại vivo Y Series"><strong>điện thoại vivo Y</strong></a>&nbsp;n&agrave;y kh&aacute; lớn, c&oacute; k&iacute;ch thước&nbsp;<strong>6,56 inch</strong>, độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;(720 x 1600 pixel). Với c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS LCD kết hợp tần số qu&eacute;t 90Hz vivo Y03 sẽ mang đến cho người d&ugrave;ng trải nghiệm mượt m&agrave;, h&igrave;nh ảnh r&otilde; r&agrave;ng với những gam m&agrave;u tươi, sống động.&nbsp;</p>\n', 0.0, 0),
	(110, 'vivo s25', 8, 2, '<h2><strong>Điện thoại vivo Y03 gọn nhẹ, hiệu suất cao nhờ chipset MediaTek Helio G85</strong></h2>\n\n<p><strong>vivo Y03</strong>&nbsp;l&agrave; sản phẩm&nbsp;<strong>điện thoại vivo Y</strong>&nbsp;thuộc ph&acirc;n kh&uacute;c gi&aacute; rẻ nhưng lại sở hữu nhiều t&iacute;nh năng nổi bật. Với thiết kế gọn nhẹ, m&agrave;u sắc đơn giản c&ugrave;ng hiệu năng tốt v&agrave; thời lượng pin khủng vivo Y03 sẽ thỏa m&atilde;n nhu cầu sử dụng từ cơ bản đến n&acirc;ng cao của người d&ugrave;ng.</p>\n\n<h3><strong>Hiệu năng vượt trội nhờ kết hợp với chipset ph&ugrave; hợp</strong></h3>\n\n<p><strong>Điện thoại vivo Y03</strong>&nbsp;c&oacute; hiệu năng tốt nhờ việc được hỗ trợ chipset&nbsp;<strong>MediaTek Helio G85</strong>&nbsp;v&agrave; chạy tr&ecirc;n hệ điều h&agrave;nh&nbsp;<strong>Android 14 OS</strong>. MediaTek Helio G85 gi&uacute;p vivo Y03 lu&ocirc;n duy tr&igrave; được hiệu suất ở mức cao v&agrave; sự ổn định khi hoạt động.</p>\n\n<p><img alt="Hiệu năng điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-3_1.jpg" /></p>\n\n<p>B&ecirc;n cạnh đ&oacute; vivo Y03 cũng sở hữu bộ nhớ tương đối lớn, đ&aacute;p ứng được nhu cầu lưu trữ dữ liệu h&agrave;ng ng&agrave;y của người d&ugrave;ng. Điện thoại vivo Y03 c&oacute; bộ nhớ trong 64GB c&ugrave;ng dung lượng&nbsp;<strong>RAM 4GB</strong>. Ngo&agrave;i ra, người d&ugrave;ng c&ograve;n c&oacute; thể mở rộng bộ nhớ bằng c&aacute;ch sử dụng th&ecirc;m thẻ ngo&agrave;i v&agrave; kết nối với điện thoại th&ocirc;ng qua&nbsp;<strong>khe cắm thẻ nhớ</strong>&nbsp;với dung lượng hỗ trợ tối đa l&ecirc;n đến 1TB.</p>\n\n<h3><strong>Camera 13 MP, ph&ugrave; hợp với nhu cầu chụp ảnh cơ bản</strong></h3>\n\n<p>Hệ thống&nbsp;<strong>camera sau của vivo Y03</strong>&nbsp;l&agrave; bộ camera k&eacute;p với&nbsp;<strong>camera ch&iacute;nh 13 MP</strong>&nbsp;v&agrave; đ&egrave;n flash hỗ trợ chụp ảnh trong điều kiện thiếu s&aacute;ng, ban đ&ecirc;m. Camera trước của vivo Y03 c&oacute; độ ph&acirc;n giải 5MP t&iacute;ch hợp nhiều c&ocirc;ng nghệ chụp ảnh như: Chụp ch&acirc;n dung, l&agrave;m đẹp hoặc c&aacute;c bộ lọc m&agrave;u sinh động,...</p>\n\n<p><img alt="Camera điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-6_1.jpg" /></p>\n\n<p>Điện thoại vivo Y03 gi&uacute;p người d&ugrave;ng dễ d&agrave;ng lưu lại khoảnh khắc của cuộc sống với nhiều chế độ quay, chụp. Người d&ugrave;ng c&oacute; thể chụp ảnh bằng c&ocirc;ng nghệ chụp đ&ecirc;m, bộ lọc cho chụp đ&ecirc;m.</p>\n\n<h3><strong>Dung lượng pin lớn đ&aacute;p ứng nhu cầu sử dụng suốt một ng&agrave;y d&agrave;i</strong></h3>\n\n<p><strong>vivo Y03</strong>&nbsp;sở hữu vi&ecirc;n pin c&oacute; dung lượng&nbsp;<strong>5000 mAh</strong>, hỗ trợ sạc nhanh 15W. Với dung lượng pin lớn người d&ugrave;ng c&oacute; thể thoải m&aacute;i sử dụng điện thoại suốt một ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng phải qu&aacute; lo lắng về vấn đề pin. Ngo&agrave;i ra, vivo Y03 hỗ trợ người d&ugrave;ng kết nối với d&acirc;y sạc th&ocirc;ng của&nbsp;<strong>cổng kết nối type-C</strong>. Đ&acirc;y l&agrave; cổng kết nối phổ biến vậy n&ecirc;n người d&ugrave;ng c&oacute; thể dễ d&agrave;ng mượn sạc trong trường hợp khẩn cấp.</p>\n\n<p><img alt="Pin điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-1.jpg" /></p>\n\n<h3><strong>Chất lượng h&igrave;nh ảnh r&otilde; r&agrave;ng, tần số qu&eacute;t l&ecirc;n đến 90Hz</strong></h3>\n\n<p>M&agrave;n h&igrave;nh của chiếc&nbsp;<a href="https://cellphones.com.vn/mobile/vivo/y-series.html" target="_blank" title="điện thoại vivo Y Series"><strong>điện thoại vivo Y</strong></a>&nbsp;n&agrave;y kh&aacute; lớn, c&oacute; k&iacute;ch thước&nbsp;<strong>6,56 inch</strong>, độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;(720 x 1600 pixel). Với c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS LCD kết hợp tần số qu&eacute;t 90Hz vivo Y03 sẽ mang đến cho người d&ugrave;ng trải nghiệm mượt m&agrave;, h&igrave;nh ảnh r&otilde; r&agrave;ng với những gam m&agrave;u tươi, sống động.&nbsp;</p>\n', 0.0, 0),
	(111, 'vivo Y03', 8, 2, '<h2><strong>Điện thoại vivo Y03 gọn nhẹ, hiệu suất cao nhờ chipset MediaTek Helio G85</strong></h2>\n\n<p><strong>vivo Y03</strong>&nbsp;l&agrave; sản phẩm&nbsp;<strong>điện thoại vivo Y</strong>&nbsp;thuộc ph&acirc;n kh&uacute;c gi&aacute; rẻ nhưng lại sở hữu nhiều t&iacute;nh năng nổi bật. Với thiết kế gọn nhẹ, m&agrave;u sắc đơn giản c&ugrave;ng hiệu năng tốt v&agrave; thời lượng pin khủng vivo Y03 sẽ thỏa m&atilde;n nhu cầu sử dụng từ cơ bản đến n&acirc;ng cao của người d&ugrave;ng.</p>\n\n<h3><strong>Hiệu năng vượt trội nhờ kết hợp với chipset ph&ugrave; hợp</strong></h3>\n\n<p><strong>Điện thoại vivo Y03</strong>&nbsp;c&oacute; hiệu năng tốt nhờ việc được hỗ trợ chipset&nbsp;<strong>MediaTek Helio G85</strong>&nbsp;v&agrave; chạy tr&ecirc;n hệ điều h&agrave;nh&nbsp;<strong>Android 14 OS</strong>. MediaTek Helio G85 gi&uacute;p vivo Y03 lu&ocirc;n duy tr&igrave; được hiệu suất ở mức cao v&agrave; sự ổn định khi hoạt động.</p>\n\n<p><img alt="Hiệu năng điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-3_1.jpg" /></p>\n\n<p>B&ecirc;n cạnh đ&oacute; vivo Y03 cũng sở hữu bộ nhớ tương đối lớn, đ&aacute;p ứng được nhu cầu lưu trữ dữ liệu h&agrave;ng ng&agrave;y của người d&ugrave;ng. Điện thoại vivo Y03 c&oacute; bộ nhớ trong 64GB c&ugrave;ng dung lượng&nbsp;<strong>RAM 4GB</strong>. Ngo&agrave;i ra, người d&ugrave;ng c&ograve;n c&oacute; thể mở rộng bộ nhớ bằng c&aacute;ch sử dụng th&ecirc;m thẻ ngo&agrave;i v&agrave; kết nối với điện thoại th&ocirc;ng qua&nbsp;<strong>khe cắm thẻ nhớ</strong>&nbsp;với dung lượng hỗ trợ tối đa l&ecirc;n đến 1TB.</p>\n\n<h3><strong>Camera 13 MP, ph&ugrave; hợp với nhu cầu chụp ảnh cơ bản</strong></h3>\n\n<p>Hệ thống&nbsp;<strong>camera sau của vivo Y03</strong>&nbsp;l&agrave; bộ camera k&eacute;p với&nbsp;<strong>camera ch&iacute;nh 13 MP</strong>&nbsp;v&agrave; đ&egrave;n flash hỗ trợ chụp ảnh trong điều kiện thiếu s&aacute;ng, ban đ&ecirc;m. Camera trước của vivo Y03 c&oacute; độ ph&acirc;n giải 5MP t&iacute;ch hợp nhiều c&ocirc;ng nghệ chụp ảnh như: Chụp ch&acirc;n dung, l&agrave;m đẹp hoặc c&aacute;c bộ lọc m&agrave;u sinh động,...</p>\n\n<p><img alt="Camera điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-6_1.jpg" /></p>\n\n<p>Điện thoại vivo Y03 gi&uacute;p người d&ugrave;ng dễ d&agrave;ng lưu lại khoảnh khắc của cuộc sống với nhiều chế độ quay, chụp. Người d&ugrave;ng c&oacute; thể chụp ảnh bằng c&ocirc;ng nghệ chụp đ&ecirc;m, bộ lọc cho chụp đ&ecirc;m.</p>\n\n<h3><strong>Dung lượng pin lớn đ&aacute;p ứng nhu cầu sử dụng suốt một ng&agrave;y d&agrave;i</strong></h3>\n\n<p><strong>vivo Y03</strong>&nbsp;sở hữu vi&ecirc;n pin c&oacute; dung lượng&nbsp;<strong>5000 mAh</strong>, hỗ trợ sạc nhanh 15W. Với dung lượng pin lớn người d&ugrave;ng c&oacute; thể thoải m&aacute;i sử dụng điện thoại suốt một ng&agrave;y d&agrave;i m&agrave; kh&ocirc;ng phải qu&aacute; lo lắng về vấn đề pin. Ngo&agrave;i ra, vivo Y03 hỗ trợ người d&ugrave;ng kết nối với d&acirc;y sạc th&ocirc;ng của&nbsp;<strong>cổng kết nối type-C</strong>. Đ&acirc;y l&agrave; cổng kết nối phổ biến vậy n&ecirc;n người d&ugrave;ng c&oacute; thể dễ d&agrave;ng mượn sạc trong trường hợp khẩn cấp.</p>\n\n<p><img alt="Pin điện thoại Vivo Y03" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Phone/Vivo/vivo_y/dien-thoai-vivo-y03-1.jpg" /></p>\n\n<h3><strong>Chất lượng h&igrave;nh ảnh r&otilde; r&agrave;ng, tần số qu&eacute;t l&ecirc;n đến 90Hz</strong></h3>\n\n<p>M&agrave;n h&igrave;nh của chiếc&nbsp;<a href="https://cellphones.com.vn/mobile/vivo/y-series.html" target="_blank" title="điện thoại vivo Y Series"><strong>điện thoại vivo Y</strong></a>&nbsp;n&agrave;y kh&aacute; lớn, c&oacute; k&iacute;ch thước&nbsp;<strong>6,56 inch</strong>, độ ph&acirc;n giải&nbsp;<strong>Full HD</strong>&nbsp;(720 x 1600 pixel). Với c&ocirc;ng nghệ m&agrave;n h&igrave;nh IPS LCD kết hợp tần số qu&eacute;t 90Hz vivo Y03 sẽ mang đến cho người d&ugrave;ng trải nghiệm mượt m&agrave;, h&igrave;nh ảnh r&otilde; r&agrave;ng với những gam m&agrave;u tươi, sống động.&nbsp;</p>\n', 0.0, 0);

-- Dumping structure for table shopdienthoai.producttypes
CREATE TABLE IF NOT EXISTS `producttypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.producttypes: ~7 rows (approximately)
INSERT INTO `producttypes` (`type_id`, `type_name`) VALUES
	(1, 'Laptop'),
	(2, 'Phone'),
	(3, 'Headphone'),
	(4, 'Screen'),
	(5, 'Speaker'),
	(6, 'Watch'),
	(7, 'Tablet');

-- Dumping structure for table shopdienthoai.promotions
CREATE TABLE IF NOT EXISTS `promotions` (
  `promotion_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `discount_type` enum('percentage','fixed') NOT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `min_purchase_value` decimal(10,2) DEFAULT 0.00,
  `max_purchase_value` decimal(10,2) DEFAULT 0.00,
  `usage_limit` int(11) DEFAULT 1,
  `user_limit` int(11) DEFAULT 1,
  PRIMARY KEY (`promotion_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.promotions: ~4 rows (approximately)
INSERT INTO `promotions` (`promotion_id`, `code`, `description`, `discount_type`, `discount_value`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`, `min_purchase_value`, `max_purchase_value`, `usage_limit`, `user_limit`) VALUES
	(1, 'DISCOUNT10', 'Giảm giá 10% cho tất cả sản phẩm', 'percentage', 10.00, '2024-12-01 00:00:00', '2024-12-31 23:59:59', 'active', '2024-12-21 14:30:27', '2024-12-21 16:08:21', 1000000.00, 50000000.00, 1, 1),
	(2, 'SAVE100', 'Giảm 100,000 VND cho đơn hàng từ 5,000,000 VND', 'fixed', 100000.00, '2024-12-01 00:00:00', '2024-12-31 23:59:59', 'active', '2024-12-21 14:30:27', '2024-12-23 08:59:33', 5000000.00, 30000000.00, 2, 1),
	(3, 'OLDPROMO', 'Khuyến mãi cũ, giảm giá 50%, đã hết hạn', 'percentage', 50.00, '2023-06-01 00:00:00', '2023-06-30 23:59:59', 'inactive', '2024-12-21 14:30:27', '2024-12-21 14:30:27', 0.00, 0.00, 10, 3),
	(4, 'SAVE200', 'Giảm 200,000 VND cho đơn hàng từ 10,000,000 VND', 'fixed', 200000.00, '2024-12-23 08:56:24', '2024-12-26 08:56:28', 'active', '2024-12-23 08:57:20', '2024-12-23 17:15:03', 10000000.00, 30000000.00, 5, 3);

-- Dumping structure for table shopdienthoai.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `star_rating` tinyint(4) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.reviews: ~11 rows (approximately)
INSERT INTO `reviews` (`review_id`, `product_id`, `user_id`, `star_rating`, `comment`, `created_at`, `updated_at`) VALUES
	(104, 91, 8, 4, 'Dahd', '2024-12-23 18:12:14', '2024-12-23 18:12:14'),
	(105, 91, 8, 4, '7djf', '2024-12-23 18:12:39', '2024-12-23 18:12:39'),
	(106, 91, 8, 4, 'Sanr phakr', '2024-12-23 18:12:44', '2024-12-23 18:12:44'),
	(107, 91, 8, 4, 'djfjfj', '2024-12-23 18:12:47', '2024-12-23 18:12:47'),
	(108, 91, 8, 5, '', '2024-12-23 18:55:06', '2024-12-23 18:55:06'),
	(109, 91, 8, 2, '', '2024-12-23 18:55:16', '2024-12-23 18:55:16'),
	(110, 91, 5, 5, 'Sản phẩm giá tốt', '2024-12-24 06:48:24', '2024-12-24 06:48:24'),
	(111, 91, 5, 1, 'Hơi thất vọng', '2024-12-24 06:48:34', '2024-12-24 06:48:34'),
	(112, 105, 8, 5, '', '2024-12-24 07:27:05', '2024-12-24 07:27:05'),
	(113, 105, 8, 2, '', '2024-12-24 07:27:26', '2024-12-24 07:27:26'),
	(114, 91, 8, 5, 'abc', '2024-12-24 07:39:12', '2024-12-24 07:39:12');

-- Dumping structure for table shopdienthoai.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sdt` varchar(10) DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT 0,
  `fullname` varchar(50) DEFAULT NULL,
  `delivery_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopdienthoai.user: ~6 rows (approximately)
INSERT INTO `user` (`id`, `username`, `password`, `email`, `sdt`, `diachi`, `trangthai`, `fullname`, `delivery_address`) VALUES
	(5, 'cuong', 'cuong12345', 'cuongnk@gmail.com', '0123456789', 'quảng ninh, quảng bình', 0, 'Ngô Khắc Cường', 'quảng ninh, quảng bình'),
	(7, 'cuongdzz', '123123', 'cuong123@gmail.com', '0123456789', 'quảng bình, việt nam', 0, '', NULL),
	(8, 'admin', '123', 'cuongnk.23it@gmail.com', '1234567890', 'Hồ Chí Minh', 0, 'Phan Thanh Tam', 'quảng bình'),
	(9, 'tamphan', 'cuong1e', 'tam@gmail.com', '1234567890', 'quảng nam', 0, 'Phan Thanh Tam', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
