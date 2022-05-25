-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th5 25, 2022 lúc 01:02 PM
-- Phiên bản máy phục vụ: 10.6.5-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom5_be2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Manu_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`id`, `Manu_Name`) VALUES
(1, 'Apple'),
(2, 'Oppo'),
(3, 'Samsung'),
(4, 'Asus'),
(5, 'Acer'),
(6, 'HP'),
(7, 'LG'),
(8, 'Sony'),
(9, 'JBL'),
(10, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_18_094559_products', 1),
(5, '2022_04_21_035155_protypes', 1),
(6, '2022_04_21_035334_manufactures', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type_ID` int(11) NOT NULL,
  `Manu_ID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Feature` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Quantity_Stock` int(11) NOT NULL,
  `Quantity_Sold` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `Image`, `Product_Name`, `Type_ID`, `Manu_ID`, `Price`, `Description`, `Feature`, `created_at`, `updated_at`, `Quantity_Stock`, `Quantity_Sold`) VALUES
(1, 'iphone13promax.png', 'IPhone 13 Pro Max', 1, 1, 33990000, '_ Màn hình:6.7 Super Retina XDR <br>\n                _ Tốc độ làm tươi:120Hz ProMotion <br>\n                _ Camera sau:3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8 <br>\n                _ Vi xử lý:Chip A15 Bionic (5nm) <br>\n                _ RAM:6GB <br>\n                _ Dung lượng:128GB - 256GB - 512GB - 1TB <br>\n                _ Chuẩn mạng:5G/ Wifi 6 <br>', 1, '2021-10-13 02:08:39', '2021-10-13 02:08:39', 30, 12),
(2, 'ip13.jpg', 'IPhone 13', 1, 1, 24990000, '_ Màn hình:6.1\" Super Retina XDR <br>\n                _ Tốc độ làm tươi:60Hz <br>\n                _ Camera sau:2 Camera: Góc rộng ống kính f/1.6 - Siêu rộng f/2.4 <br>\n                _ Vi xử lý:Chip A15 Bionic (5nm) <br>\n                _ RAM:4GB <br>\n                _ Dung lượng:128GB - 256GB - 512GB <br>\n                _ Chuẩn mạng:5G/ Wifi 6 <br>', 1, '2021-10-17 03:34:21', '2021-10-17 03:34:21', 17, 1),
(3, 'iphonese.jpg', 'IPhone SE (2020)', 1, 1, 10500000, '_ Kích thước màn hình:4.7 inches <br>\n                _ Công nghệ màn hình:IPS LCD <br>\n                _ Camera sau:12 MP, f/1.8 (wide), PDAF, OIS <br>\n                _ Camera trước:7 MP, f/2.2 <br>\n                _ Chipset Apple:A13 Bionic (7 nm+) <br>\n                _ Dung lượng RAM:3 GB <br>\n                _ Bộ nhớ trong:64 GB <br>', 0, '2021-10-09 03:36:10', '2021-10-09 03:36:10', 17, 8),
(4, 'opporeno4.jpg', 'Oppo Reno4', 1, 2, 6590000, '_ Kích thước màn hình:6.4 inches <br>\n                _ Công nghệ màn hình:OLED <br>\n                _ Camera sau:48 MP (IMX586) + 8 MP + 2 MP + 2 MP, 4 camera <br>\n                _ Camera trước:32 MP (IMX616) + Cảm biến thông minh AI <br>\n                _ Chipset Qualcomm SM7125 Snapdragon 720G (8 nm) <br>\n                _ Dung lượng RAM: 8 GB <br>', 1, '2021-10-03 03:40:54', '2021-10-03 03:40:54', 20, 6),
(5, 'oppofindx2.jpg', 'Oppo Find X2', 1, 2, 18990000, '_ Kích thước màn hình:6.7 inches <br>\n                _ Công nghệ màn hình:AMOLED <br>\n                _ Camera sau:Chính 48 MP & Phụ 13 MP, 12 MP <br>\n                _ Camera trước:32 MP <br>\n                _ Chipset Qualcomm Snapdragon 865 <br>\n                _ Dung lượng RAM: 12 GB <br>', 0, '2021-10-07 03:45:01', '2021-10-07 03:45:01', 25, 15),
(6, 'oppoa94.gif', 'Oppo A94', 1, 2, 7050000, '_ Kích thước màn hình:6.43 inches <br>\n                _ Công nghệ màn hình:AMOLED <br>\n                _ Camera sau:Camera chính góc rộng 48 MP (F/1.7) <br>\n                _ Camera góc siêu rộng 8 MP (F/2.2) <br>\n                _ Camera macro 2 MP (F/2.4) <br>\n                _ Camera đơn sắc 2 MP (F/2.4) <br>\n                _ Camera trước:32 MP <br>\n                _ Khẩu độ F/2.4 <br>\n                _ Chipset Helio P95, tối đa 2.2GHz <br>\n                _ Dung lượng RAM: 8 GB <br>', 0, '2021-09-09 03:46:22', '2021-09-09 03:46:22', 9, 10),
(7, 'sszfold35g.jpg', 'Samsung Galaxy Z Fold3 5G', 1, 3, 38299000, '_ Màn hình: 7.6 inch (màn hình chính), 6.2 inch (màn hình phụ), Dynamic AMOLED 2X, 120 Hz <br>\n                _ Chip: Snapdragon 888, tiến trình 5 nm, hỗ trợ 5G <br>\n                _ RAM: 12 GB <br>\n                _ Bộ nhớ trong: 256 GB hoặc 512 GB <br>\n                _ Hệ điều hành: Android 11 <br>\n                _ Pin: 4.400 mAh (2 viên pin) <br>\n                _ Camera: 12 MP - 12 MP - 12 MP (camera sau) và 4 MP - 10 MP (camera trước) <br>', 1, '2021-08-10 03:49:06', '2021-08-10 03:49:06', 20, 26),
(8, 'ssgalaxyS21.jpg', 'Samsung Galaxy S21 5G', 1, 3, 14599000, '_ Mặt kính cảm ứng:Gorilla Glass Victus <br>\n                _ Độ phân giải:1080 x 2400 pixels <br>\n                _ Màn hình rộng:6.2 inches, 94.1 cm2 <br>\n                _ Camera sau:64 MP, 12MP và 12MP (3 camera) <br>\n                _ Quay Phim:8K@24fps, 4K@30/60fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, stereo sound rec., gyro-EIS <br>\n                _ Hệ điều hành:Android 11, One UI 3.1 <br>\n                _ Chipset:Exynos 2100 <br>\n                _ RAM:8 GB <br>\n                _ Bộ nhớ trong (Rom):128 GB <br>', 0, '2021-05-14 03:52:35', '2021-05-14 03:52:35', 16, 6),
(9, 'ssnode20ultra5g.jpg', 'Samsung Galaxy Note 20', 1, 3, 30000000, '_ Màn hình :6.9\", 2K+ (1440 x 3088 Pixels), Dynamic AMOLED 2X 120Hz <br>\n                _ Camera sau :Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF, Quay phim FullHD 1080p@30fps, Quay phim HD 720p@960fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@30fps, Quay phim 4K 2160p@60fps, Quay phim 8K 4320p@24fps <br>\n                _ Camera trước :10 MP, Hỗ trợ VideoCall thông qua ứng dụng <br>\n                _ Hệ điều hành - CPU :Android 10, Exynos 990 8 nhân, 2 nhân 2.73 GHz, 2 nhân 2.5 GHz & 4 nhân 2.0 Ghz <br>\n                _ Bộ nhớ ram & Lưu trữ :12Gb, 256 GB, MicroSD, hỗ trợ tối đa 1 TB <br>', 0, '2021-01-05 03:54:32', '2021-01-05 03:54:32', 50, 29),
(10, 'asusvibook.jpg', 'Laptop ASUS Vivobook S533EA', 2, 4, 20280000, '_ Loại CPU:Intel Core i5-1135G7 Processor (4 x 2.40 GHz), Max Turbo Frequency : 4.20 GHz <br>\n                _ Loại card đồ họa:Intel Iris Xe Graphics <br>\n                _ Dung lượng RAM: 8GB <br>\n                _ Loại RAM:DDR4/ 3200MHz, không hỗ trợ nâng cấp <br>\n                _ Ổ cứng: 512GB SSD PCIe (M.2 2280) <br>\n                _ Kích thước màn hình: 15.6 inches <br>', 1, '2021-09-08 03:58:09', '2021-09-08 03:58:09', 19, 18),
(11, 'asuszenbook.jpg', 'Laptop ASUS Zenbook UX425EA', 2, 4, 12020000, '_ Loại CPU:Intel Core i7-1165G7 2.8GHz up to 4.7GHz 12MB <br>\n                _ Loại card đồ họa:Intel Iris Xe Graphics <br>\n                _ Dung lượng RAM: 16GB <br>\n                _ Loại RAM:LPDDR4X 3200MHz, không hỗ trợ nâng cấp <br>\n                _ Ổ cứng :512GB SSD M.2 PCIE G3X2 <br>\n                _ Kích thước màn hình:14 inches <br>', 1, '2021-10-17 03:34:21', '2021-10-17 03:34:21', 35, 26),
(12, 'asusd415da.jpg', 'Laptop ASUS D415DA-EK482T 4BG/512GB PCIE/14.0 FHD/WIN10/BẠC', 2, 4, 12290000, '_ Loại CPU:AMD Ryzen 3-3250U 2.6GHz up to 3.5GHz 4MB <br>\n                _ Loại card đồ họa: AMD Radeon Graphics <br>\n                _ Dung lượng RAM: 4GB <br>\n                _ Loại RAM:DDR4 3200MHz, 1 khe cắm hỗ trợ tối đa 12GB <br>\n                _ Ổ cứng: 512GB SSD M.2 PCIE G3X4 , 1x slot SATA3 2.5\" <br>\n                _ Kích thước màn hình:14 inches <br>', 0, '2021-10-03 03:40:54', '2021-10-03 03:40:54', 40, 22),
(13, 'LaptopAcerNitro5.jpg', 'Laptop Acer Nitro 5 Gaming AN515 57 727J', 2, 5, 28990000, '_ CPU:i711800H2.30 GHz <br>\n                _ RAM:8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz <br>\n                _ Ổ cứng:Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) <br>\n                _ Màn hình:15.6\"Full HD (1920 x 1080)144Hz <br>\n                _ Card màn hình:Card rờiRTX 3050Ti 4GB <br>\n                _ Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C <br>', 1, '2021-10-09 03:36:10', '2021-10-09 03:36:10', 33, 11),
(14, 'LaptopAcerPredaorHelios.jpg', 'Laptop Acer Predator Helios PH315 54 75YD', 2, 5, 38990000, '_ CPU:i711800H2.30 GHz <br>\n                _ RAM:16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz <br>\n                _ Ổ cứng:Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) <br>\n                _ Màn hình:15.6\"QHD (2560 x 1440)165Hz <br>\n                _ Card màn hình:Card rờiRTX 3060 6GB <br>\n                _ Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)Mini DisplayPortUSB Type-C <br>', 0, '2021-10-13 02:08:39', '2021-10-13 02:08:39', 22, 2),
(15, 'LaptopAcerAspire3.jpg', 'Laptop Acer Aspire 3 A315 56 58EB i5 1035G1', 2, 5, 15590000, '_ CPU:i51035G11.00 GHz <br>\n                _ RAM: 8 GBDDR4 (On board 4GB +1 khe 4GB)2400 MHz <br>\n                _ Ổ cứng:SSD 512 GB NVMe PCIeHỗ trợ khe cắm HDD SATA <br>\n                _ Màn hình:15.6\"Full HD (1920 x 1080) <br>\n                _ Card màn hình:Card tích hợpIntel UHD <br>\n                _ Cổng kết nối:Jack tai nghe 3.5 mmHDMILAN (RJ45)USB 3.12 x USB 2.0 <br>', 0, '2021-10-03 03:40:54', '2021-10-03 03:40:54', 41, 22),
(16, 'hp340sg7.jpg', 'Laptop HP 340s G7 240Q4PA i3 1005G1/4GB/256GB/Win10', 2, 6, 12990000, '_ Loại CPU:Intel Core i3-1005G1 <br>\n            _ Loại card đồ họa: Intel UHD Graphics <br>\n            _ Dung lượng RAM: 4GB <br>\n            _ Loại RAM: DDR4 2666Mhz, 2 khe cắm <br>\n            _ Ổ cứng: 512GB PCIe NVMe SSD <br>\n            _ Kích thước màn hình:14 inches', 1, '2021-09-30 21:23:15', '2021-09-30 21:23:15', 4, 1),
(17, 'hp348g7.jpg', 'Laptop HP 348 G7 9PH23PA (9PH23PA) (14\" FHD/i7-10510U/8GB/512GB SSD/Radeon 530/Win10/1.4kg)', 2, 6, 22130000, '_Loại CPU: Intel Core i7-10510U<br>_Loại card đồ họa: AMD Radeon 530 2GB GDDR5<br>_Dung lượng RAM	8GB<br>_Loại RAM:8GB(1 x 8GB) DDR4 3200MHz, 2 khe cắm<br>_Ổ cứng	512GB PCIe NVMe SSD<br>_Kích thước màn hình:14 inches', 1, '2021-09-30 21:23:15', '2021-09-30 21:23:15', 4, 1),
(18, 'hp240g8.gif', 'Laptop HP 240 G8 3D0E8PA  (Core i7-1165G7 | 8GB | 512GB | Intel Iris Xe | 14.0 inch FHD | Win 10 | Bạc)', 2, 6, 21490000, '_Loại CPU:Intel Core i7-1165G7 2.80 GHz up to 4.70 GHz, 12MB<br>_Loại card đồ họa:Intel Iris XeGraphics<br>_Dung lượng RAM	8GB<br>_Loại RAM:8GB(1 x 8GB) DDR4 3200MHz, 2 khe cắm<br>_Ổ cứng	512GB PCIe NVMe SSD<br>_Kích thước màn hình:14 inches', 1, '2021-10-08 20:36:10', '2021-10-08 20:36:10', 36, 26),
(19, 'LG A1 48 inch 4K Smart OLED TV.jpg', 'Tivi LG A1 48 inch 4K Smart OLED TV', 3, 7, 28900000, '_Loại màn hình hiển thị: 4K OLED<br>_Kích thước: 48<br>_Độ phân giải: 3840 x 2160<br>_Màu sắc / Wide Color Gamut:Perfect Color', 1, '2021-10-17 22:40:56', '2021-10-17 22:40:56', 34, 26),
(20, 'LG UP80 86 inch 4K Smart UHD TV.jpg', 'Tivi LG UP80 86 inch 4K Smart UHD TV', 3, 7, 79900000, '_Loại màn hình hiển thị:4K UHD<br>_Kích thước:86<br>_Độ phân giải:3840x2160<br>_Tăng cường sáng Ultra Luminance:Ultra Luminance', 1, '2021-10-17 22:40:56', '2021-10-17 22:40:56', 34, 26),
(21, 'LG Z1 88inch 8K Smart OLED TV.jpg', 'Tivi LG Z1 88inch 8K Smart OLED TV', 3, 7, 890000000, '_Loại màn hình hiển thị:8K OLED<br>_Kích thước:88<br>_Độ phân giải:7680 x 4320<br>_Màu sắc / Wide Color Gamut:Perfect Color', 1, '2021-10-02 20:40:54', '2021-10-02 20:40:54', 44, 33),
(22, 'SONY SMART TIVI 4K.jpg', ' Smart Tivi 4K Sony KD-50X75 50 inch 4K HDR Android TV', 3, 8, 16400000, '_Smart Tivi, Tivi Ultra HD<br>_Kích thước màn hình: 50 inch<br>_Độ phân giải: 4K Ultra HD (3840 x 2160px) <br>_Sản xuất tại: Việt Nam<br>_Bluetooth: Có<br>_Kết nối Internet: Wifi, Cổng LAN<br>_Cổng AV: Cổng Composite<br>_Cổng HDMI: 3 cổng<br>_Cổng USB: 2 cổng<br>_Cổng xuất âm thanh: Cổng Optical (Digital Audio Out)<br>_Tích hợp đầu thu kỹ thuật số:DVB-T2', 1, '2021-10-16 20:34:21', '2021-10-16 20:34:21', 35, 30),
(23, 'SONY OLED TV 4K.jpg', 'OLED Tivi 4K Sony 55 inch 55A80J Android TV', 3, 8, 48200000, '_Mô tả: _ OLED Tivi, Tivi Ultra HD<br>_Kích thước màn hình 55 inch<br>_Độ phân giải 4K Ultra HD (3840 x 2160px) <br> _Sản xuất tại Malaysia<br>_Bluetooth Có<br>_Kết nối Internet Wifi', 1, '2021-10-16 20:34:21', '2021-10-16 20:34:21', 45, 44),
(24, 'SONY ANDROID TV 4K.jpg', 'Smart Tivi 4K 43 inch Sony KD-43X8050H HDR Android TV', 3, 8, 16790000, '_Mô tả: _Smart Tivi, Tivi Ultra HD<br>_Kích thước màn hình 43 inch<br>_Độ phân giải 4K Ultra HD (3840 x 2160px) <br> _Sản xuất tại Malaysia<br>_Bluetooth Có<br>_Kết nối Internet Wifi', 1, '2021-10-16 20:34:21', '2021-10-16 20:34:21', 6, 26),
(25, 'taingherose.jpg', 'Tai nghe True Wireless JBL Live PRO+ Rose', 4, 9, 2990000, '_Bảo hành:12 Tháng<br>_Màu sắc:Rose<br>_Kết nối:Không dây<br>_Chuẩn kết nối:Bluetooth 5.0<br>_Tần số	20 Hz 20 kHz<br>_Trở kháng:16 Ohm<br>_Pin:Li-ion 3.7 V, 55 mAh', 1, '2021-10-06 20:45:01', '2021-10-06 20:45:01', 5, 22),
(26, 'Tai nghe True Wireless JBL Tune 115 TWS.jpg', 'Tai nghe True Wireless JBL Tune 115 TWS', 4, 9, 1390000, '_Thời lượng pin Tai nghe:5 giờ<br>_Hộp sạc:21 giờ<br>_Thời gian sạc:2 giờ<br>_Chống nước:Không<br>_Công nghệ âm thanh:JBL Pure Sound<br>_Micro:Mic đàm thoại<br>_Tương thích:Android, IOS, Windows<br>_Loại thiết kế:In Ear<br>_Số thiết bị kết nối cùng lúc:1 Thiết bị<br>Ứng dụng kết nối:My JBL Headphone', 0, '2021-10-02 20:40:54', '2021-10-02 20:40:54', 41, 40),
(27, 'Tai nghe không dây JBL Tune 700BT.jpg', 'Tai nghe không dây JBL Tune 700BT', 4, 9, 1990000, '_Model:Tune 700BT<br>_Màu:Đen, Cam, Xanh, Trắng<br>_Tần số:20Hz-20KHz<br>_Trở kháng:32Ohm<br>_Công suất đầu vào tối đa:40mW<br>_Khoảng cách sử dụng:40mm<br>_Truyền độ nhạy:-15 Dbv / Pa<br>_Bluetooth:4.2<br>_Pin: Pin Li-ion Polymer (610mAh / 3.7V) <br>', 1, '2021-10-03 22:57:08', '2021-10-03 22:57:08', 12, 4),
(28, 'Tai nghe Xiaomi Mi Basic.jpg', 'Tai nghe Xiaomi Mi Basic', 4, 10, 450000, '_Mô tả: Thương hiệu : Xiaomi<br>_Jack cắm	3.5mm<br>_Kích thước	1.25m<br>_Trọng lượng	14g <br>_Chống nước	IPX5 (Mồ hôi,nước mưa <br>_Chất liệu Nhựa<br>_Cổng sạc	Micro USB', 1, '2021-10-08 20:36:10', '2021-10-08 20:36:10', 9, 3),
(29, 'Tai nghe Xiaomi True Wireless Earbuds Basic 2.jpg', 'Tai nghe Xiaomi True Wireless Earbuds Basic 2', 4, 10, 450000, '_Mô tả: Thương hiệu : Xiaomi<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Thơi lượng pin	Tai nghe : 5 giờ - Hộp sạc: 20 giờ<br>_Thời gian sạc	1.5 giờ<br>_Chống nước	IPX5 (Mồ hôi,nước mưa)<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2', 1, '2021-10-02 20:40:54', '2021-10-02 20:40:54', 5, 2),
(30, 'Tai nghe không dây Xiaomi Earphones 2 Basic BHR4089GL.jpg', 'Tai nghe không dây Xiaomi Earphones 2 Basic BHR4089GL', 4, 10, 850000, '_Mô tả: Thương hiệu : Xiaomi<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Thơi lượng pin	Tai nghe : 5 giờ - Hộp sạc: 20 giờ<br>_Thời gian sạc	1.5 giờ<br>_Chống nước	IPX5 (Mồ hôi,nước mưa)<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2', 1, '2021-10-16 20:34:21', '2021-10-16 20:34:21', 25, 25),
(31, 'Loa Bluetooth Xiaomi Mi Compact Speaker 2.jpg', 'Loa Bluetooth Xiaomi Mi Compact Speaker 2', 5, 10, 290000, '_Mô tả: Thương hiệu : Xiaomi<br>_Model: XMWXCLYYX01ZM<br>_Kích thước: 234 x 86.5 x 73.9mm<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Kích thước màn loa: 40mm<br>_Công suất loa: 5W<br>_Cách kết nối	Bluetooth<br>__Chất liệu	Nhựa<br>__Cổng sạc	Micro USB<br>__Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2', 1, '2021-10-02 20:40:54', '2021-10-02 20:40:54', 25, 55),
(32, 'taingherose.jpg', 'Loa Bluetooth Tích Hợp Sạc Không Dây Xiaomi XMWXCLYYX01ZM', 4, 10, 20000, '_Mô tả: Thương hiệu : Xiaomi<br>_Model: XMWXCLYYX01ZM<br>_Kích thước: 234 x 86.5 x 73.9mm<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Kích thước màn loa: 40mm<br>_Công suất loa: 5W<br>_Công suất sạc không dây: 30W<br>_Điện áp đầu vào: 15V/3A<br>_Khoảng cách sạc: ≤4mm<br>_Nhiệt độ hoạt động: 0°C - 45°C', 0, '2021-10-16 20:34:21', '2022-05-25 05:56:06', 52, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Type_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`id`, `Type_Name`) VALUES
(1, 'Điện Thoại'),
(2, 'Laptop'),
(3, 'Tivi'),
(4, 'Tai Nghe'),
(5, 'Loa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'truong', 'truong@gmail.com', NULL, '$2y$10$6RFLqzVuuyQj8uWF7LeU8eeJV.WCIncW52n1kbXFz1pRbLj/zxmpu', 'bLZIx3DHWh0FAMiKqG25NYgzaI4H3zSBKTmTRo6sdV3ypLWdTxzZCnw7ko7E', '2022-05-23 00:18:43', '2022-05-23 00:18:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
