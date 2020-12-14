-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 06:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'namnv.nvx@gmail.com', '123456', 'Nguyen Nam', '0395996028', '2020-11-22 07:15:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(9, 'Apple', 'U.S.A', NULL, NULL),
(10, 'SamSung', 'Korea', NULL, NULL),
(11, 'Oppo', 'China', NULL, NULL),
(12, 'Nam Anh Tech', 'Việt Nam', NULL, NULL),
(13, 'Acer', 'Taiwan', NULL, NULL),
(14, 'Asus', 'U.S.A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(10, 'Mobile', 'Điện thoại', NULL, NULL),
(11, 'Laptop', 'Máy tính xách tay', NULL, NULL),
(12, 'Watch', 'Đồng hồ', NULL, NULL),
(13, 'PC, Desktop', 'Máy bộ, máy tính để bàn', NULL, NULL),
(14, 'Phụ kiện', 'Phụ kiện', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(8, 'Nam Nguyen', 'namdeptrai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0967128473', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2020_11_18_152333_create_admin_table', 1),
(15, '2020_11_19_115614_create_category', 1),
(16, '2020_11_23_060656_create_brand', 2),
(19, '2020_11_23_114053_create_product', 3),
(21, '2020_12_06_064259_add_slug_to_product', 4),
(22, '2020_12_07_045351_customer', 5),
(23, '2020_12_07_054246_shipping', 6),
(24, '2020_12_08_155216_payment', 7),
(25, '2020_12_08_155312_order', 7),
(26, '2020_12_08_155347_order_detail', 7),
(27, '2020_12_10_121000_productdetail', 8);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `ship_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `ship_id`, `payment_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
(12, 8, 5, 12, '52.470.000', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordere_detail`
--

CREATE TABLE `ordere_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `Quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordere_detail`
--

INSERT INTO `ordere_detail` (`id`, `order_id`, `product_id`, `Quantity`, `created_at`, `updated_at`) VALUES
(30, 12, 22, 1, NULL, NULL),
(31, 12, 23, 1, NULL, NULL),
(32, 12, 24, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_options` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment_options`, `status`, `created_at`, `updated_at`) VALUES
(12, 'ATM', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cate_id`, `brand_id`, `name`, `slug`, `desc`, `info`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(22, 10, 9, 'IPhone 11 Pro Max', 'iphone-11-pro-max', '512GB', 'Màn hình:	OLED, 6.5\", Super Retina XDR\r\nHệ điều hành:	iOS 13\r\nCamera sau:	3 camera 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	512 GB\r\nThẻ SIM:\r\n1 Nano SIM & 1 eSIM, Hỗ trợ 4G\r\nHOTSIM VNMB Siêu sim (5GB/ngày)\r\nDung lượng pin:	3969 mAh, có sạc nhanh', '35990000', 'iphone-11-pro-max-black-400x460.png', 0, NULL, NULL),
(23, 10, 10, 'Samsung Galaxy A21s', 'samsung-galaxy-a21s', 'samsung', 'Màn hình:	TFT LCD, 6.5\", HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước:	13 MP\r\nCPU:	Exynos 850 8 nhân\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM VNMB Siêu sim (5GB/ngày)\r\nDung lượng pin:	5000 mAh, có sạc nhanh', '6490000', 'samsung-galaxy-a21s-055620-045627-400x460.png', 0, NULL, NULL),
(24, 11, 13, 'Acer Aspire 3 A315', 'acer-aspire-3-a315', 'acer', 'CPU:	Intel Core i3 Coffee Lake, 8130U, 2.20 GHz\r\nRAM:	4 GB, DDR4 (On board +1 khe), 2400 MHz\r\nỔ cứng:	SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® HD Graphics 620\r\nCổng kết nối:	2 x USB 2.0, USB 3.1, HDMI, LAN (RJ45)\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ nhựa, PIN liền\r\nKích thước:	Dày 19.9 mm, 1.7 kg\r\nThời điểm ra mắt:	2019', '9990000', 'acer-aspire-3-a315-nx-heesv-00d-(6).jpg', 0, NULL, NULL),
(25, 11, 14, 'Asus VivoBook A515EA', 'asus-vivobook-a515ea', 'asus', 'CPU:	Intel Core i3 Tiger Lake, 1115G4, 3.00 GHz\r\nRAM:	8 GB, DDR4 (On board +1 khe), 3200 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe, Hỗ trợ khe cắm HDD SATA\r\nMàn hình:	15.6 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối:	1 x USB 3.2, 2 x USB 2.0, HDMI, USB Type-C\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại, PIN liền\r\nKích thước:	Dày 17.9 mm, 1.8 kg\r\nThời điểm ra mắt:	2020', '14690000', 'asus-vivobook-a515ea-i3-bq497t-062220-092221-600x600.jpg', 0, NULL, NULL),
(26, 11, 14, 'Asus ZenBook UX425EA', 'asus-zenbook-ux425ea', 'asus', 'CPU:	Intel Core i5 Tiger Lake, 1135G7, 2.40 GHz\r\nRAM:	8 GB, LPDDR4X (On board), 4266 MHz\r\nỔ cứng:	SSD 512 GB M.2 PCIe\r\nMàn hình:	14 inch, Full HD (1920 x 1080)\r\nCard màn hình:	Card đồ họa tích hợp, Intel® Iris® Xe Graphics\r\nCổng kết nối:	1 x USB 3.2, 2 x Thunderbolt™ 4 USB-C, HDMI\r\nHệ điều hành:	Windows 10 Home SL\r\nThiết kế:	Vỏ kim loại nguyên khối, PIN liền\r\nKích thước:	Dày 13.9 mm, 1.17 kg\r\nThời điểm ra mắt:	2020', '22990000', 'asus-zenbook-ux425ea-i5-bm069t-grey-new-600x600.jpg', 0, NULL, NULL),
(27, 12, 9, 'Apple Watch S6 LTE', 'apple-watch-s6-lte', 'Dong ho thong minh', 'Công nghệ màn hình:	OLED\r\nKích thước màn hình:	1.57 inch\r\nThời gian sử dụng pin:	Khoảng 1.5 ngày\r\nHệ điều hành:	watchOS 7.0\r\nKết nối với hệ điều hành:	iOS 14 trở lên\r\nChất liệu mặt:	Ion-X strengthened glass\r\nĐường kính mặt:	40 mm\r\nKết nối:	Wifi, Bluetooth v5.0, GPS, Hỗ trợ eSim\r\nNgôn ngữ:	Tiếng Việt, Tiếng Anh\r\nTheo dõi sức khỏe:	Đo nhịp tim, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập', '14391000', 'apple-watch-s6-lte-40mm-vien-nhom-day-cao-su-ava-600x600.jpg', 0, NULL, NULL),
(28, 12, 11, 'Oppo Watch', 'oppo-watch', 'Dong ho thong minh', 'Công nghệ màn hình:	AMOLED\r\nKích thước màn hình:	1.91 inch\r\nThời gian sử dụng pin:	Khoảng 36 giờ (chế độ thường), Khoảng 21 ngày (chế độ tiết kiệm pin)\r\nHệ điều hành:	Google Wear OS\r\nKết nối với hệ điều hành:	Android, iOS\r\nChất liệu mặt:	Kính cường lực\r\nĐường kính mặt:	46 mm\r\nKết nối:	Wifi, Bluetooth v4.2, GPS\r\nNgôn ngữ:	Tiếng Việt, Tiếng Anh\r\nTheo dõi sức khỏe:	Đo nhịp tim, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập', '6791000', 'oppo-watch-46mm-day-silicone-ava-600x600.jpg', 0, NULL, NULL),
(29, 12, 10, 'Samsung Galaxy Watch 3', 'samsung-galaxy-watch-3', 'Dong ho thong minh', 'Công nghệ màn hình:	SUPER AMOLED\r\nKích thước màn hình:	1.4 inch\r\nThời gian sử dụng pin:	Khoảng 2 ngày\r\nHệ điều hành:	OS TIZEN\r\nKết nối với hệ điều hành:	Android 5.0 trở lên, iOS 9 trở lên\r\nChất liệu mặt:	Kính cường lực Gorilla Glass Dx+\r\nĐường kính mặt:	45 mm\r\nKết nối:	Bluetooth v5.0, Wifi, GPS\r\nNgôn ngữ:	Tiếng Việt, Tiếng Anh\r\nTheo dõi sức khỏe:	Đo nồng độ oxy trong máu (SpO2), Đo nhịp tim, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đếm số bước chân, Chế độ luyện tập', '9918000', 'samsung-galaxy-watch-3-45mm-600x600.jpg', 0, NULL, NULL),
(30, 13, 12, 'PC Gaming Dragon', 'pc-gaming-dragon', 'PC', '(i9 10900K/Z490/32GB RAM/500GB SSD/RTX 2080 Super/850W/WATERCOOLING EK/RGB)', '79999000', 'pc2.jpg', 0, NULL, NULL),
(31, 13, 12, 'PC ENTHUSIAST GAMING LIMITED 001', 'pc-enthusiast-gaming-limited-001', 'pc', 'I9 10940X/X299X/64GB RAM/1TB SSD /RTX 2080Ti/1200W/WaterCooling EK/Win 10 Pro/LED RGB', '159999000', 'pc1.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDcard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SIM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`id`, `product_id`, `cpu`, `ram`, `screen`, `SDcard`, `SIM`, `camera`, `pin`, `os`, `storage`, `created_at`, `updated_at`) VALUES
(8, 22, 'Apple A13 Bionic 6 nhân', '4 GB', 'OLED, 6.5\", Super Retina XDR', 'Non', '1 Nano SIM & 1 eSIM, Hỗ trợ 4G', '3 camera 12 MP', '3969 mAh, có sạc nhanh', 'iOS 13', '512 GB', NULL, NULL),
(9, 23, 'Exynos 850 8 nhân', '6 GB', 'TFT LCD, 6.5\", HD+', 'MicroSD hỗ trợ tối đa 512 GB', '2 Nano SIM', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '5000 mAh, có sạc nhanh', 'Android 10', '64 GB', NULL, NULL),
(10, 24, 'Intel Core i3 Coffee Lake, 8130U, 2.20 GHz', '4 GB, DDR4 (On board +1 khe), 2400 MHz', '15.6 inch, Full HD (1920 x 1080)', 'Non', 'Non', 'VGA Webcam', 'A18-045N2A, PIN liền	Li-Ion 2 cell', 'Windows 10 Home SL', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', NULL, NULL),
(11, 26, 'Intel Core i5 Tiger Lake, 1135G7, 2.40 GHz', '8 GB, LPDDR4X (On board), 4266 MHz', '14 inch, Full HD (1920 x 1080)', '1 x USB 3.2, 2 x Thunderbolt™ 4 USB-C, HDMI', 'non', 'Camera IR, HD webcam', 'AD2129021: PIN liền Li-Ion 4 cell', 'Windows 10 Home SL', 'SSD 512 GB M.2 PCIe', NULL, NULL),
(12, 27, 'Apple S6 64 bit', '1.5 GB', 'OLED 1.57 inch', 'Non', 'eSIM (hỗ trợ nhà mạng Viettel)', 'watchOS 7.0', 'Thời gian sử dụng pin	Khoảng 1.5 ngày', 'watchOS 7.0', '32 GB', NULL, NULL),
(13, 29, 'Exynos 9110', '2 GB', 'SUPER AMOLED Gorilla Glass Dx+', 'Bluetooth v5.0, Wifi', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', 'Non', 'Thời gian sử dụng pin:	Khoảng 2 ngày', 'OS TIZEN', '8GB', NULL, NULL),
(14, 30, 'i9 10900K', '32GB RAM', 'RTX 2080 Super', 'Z490', 'Non', 'Non', '850W', 'Windows 10 Pro', '500GB SSD', NULL, NULL),
(15, 31, 'I9 10940X', '64GB RAM', 'RTX 2080Ti', 'X299X/', 'Non', '4k@2160p', '1200W', 'Win 10 Pro', '1TB SSD', NULL, NULL),
(16, 28, 'Exynos 850 8 nhân', '4 GB', 'OLED, 5.4\", Super Retina XDR', 'Non', '2 Nano SIM (SIM 2 chung khe thẻ nhớ)', 'Non', 'Pin 3cell 50wh', 'Android 10', '8GB', NULL, NULL),
(17, 25, 'i5 1150G7', '8GB DDR4 2666MHz', '15.6 inch, Full HD (1920 x 1080)', 'MicroSD, hỗ trợ tối đa 1 TB', 'Non', 'Camera FullHD', 'Pin 3cell 50wh', 'Window 10 Home Single Language', '512GB SSD M2 PCIe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `address`, `phone`, `email`, `Note`, `created_at`, `updated_at`) VALUES
(5, 'Nam Nguyen', '180 Cao Lỗ Phường 4 quận 8 thành phố Hồ Chí Minh', '0967128473', 'namnv.nvx@gmail.com', 'giao nhanh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_customer_id_foreign` (`customer_id`),
  ADD KEY `order_ship_id_foreign` (`ship_id`),
  ADD KEY `order_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `ordere_detail`
--
ALTER TABLE `ordere_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cat_id_foreign` (`cate_id`),
  ADD KEY `product_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productdetail_product_id_foreign` (`product_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ordere_detail`
--
ALTER TABLE `ordere_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_ship_id_foreign` FOREIGN KEY (`ship_id`) REFERENCES `shipping` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ordere_detail`
--
ALTER TABLE `ordere_detail`
  ADD CONSTRAINT `ordere_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ordere_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_cat_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD CONSTRAINT `productdetail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
