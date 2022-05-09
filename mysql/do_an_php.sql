-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2021 lúc 04:05 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`) VALUES
(6, 'Huy', 'huyhvker@gmail.com', 'ádasdsa', '1234', 'áds', '9[|||]1[|||||]27[|||]1[|||||]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `phone`, `email`) VALUES
(1, 'Trần Quốc Huy', '20022001@Huy', '0869221371', 'huyhvker@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `name`) VALUES
(1, 'Laptop Gaming'),
(2, 'Laptop Văn phòng'),
(3, 'Laptop Đồ họa'),
(4, 'Laptop Mỏng nhẹ'),
(13, 'Chuột không dây'),
(14, 'Màn hình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `thuoc_menu`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(1, 'Lenovo Thinkpad X1 Carbon', 32000000, '1.jpg', 'Vi xử lý: Intel Core i5 10210U, 4 nhân / 8 luồng\r\nMàn hình: 14\"\" FHD IPS (1920 x 1080), chống chói (400nits)\r\nĐộ phủ màu: 92% sRGB\r\nRAM: 16GB LPDDR3 bus 2133 MHz\r\nCard đồ họa: Intel UHD 620\r\nLưu trữ: 512 GB m.2 NVMe (Nâng cấp tối đa 2TB)\r\nPin: 51Wh\r\nKết nối chính: 2 x USB-A, 2 x USB-C with Thunderbolt 3.0, 1 x Micro-SD\r\nCân nặng: 1.09kg\r\nHệ điều hành: Windows 10 bản quyền\"\r\n', 1, 'co', 21),
(2, 'Lenovo Ideapad 3', 15000000, '3.jpg\r\n', '\"CPU:i310110U2.1GHz\r\nRAM:8 GBDDR4 (On board 4GB +1 khe 4GB)2666 MHz\r\nỔ cứng:256 GB SSD NVMe PCIeHỗ trợ khe cắm HDD SATA\r\nMàn hình:14\"\"Full HD (1920 x 1080)\r\nCard màn hình:Card tích hợpIntel UHD\r\nCổng kết nối:Jack tai nghe 3.5 mm2 x USB 3.2HDMIUSB 2.0\r\nHệ điều hành:Windows 10 Home SL\r\nThiết kế:Vỏ nhựa\r\nKích thước, trọng lượng:Dài 327.1 mm - Rộng 241 mm - Dày 19.9 mm - Nặng 1.5 kg\"\r\n', 3, 'co', 1),
(3, 'Acer TUF Dash F15', 25000000, '1_2.jpg\r\n', '\"Loại CPU: Intel Core i5-11300H 2.6GHz up to 4.4GHz 8MB\r\nLoại card đồ họa: NVIDIA GeForce RTX™ 3050 4GB Up to 1600MHz at 60W (75W with Dynamic Boost)\r\nDung lượng RAM: 8GB\r\nỔ cứng: 512GB SSD M.2 NVMe™ PCIe® 3.0\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp: 1x Type C USB 4 with Power Delivery, Display Port and Thunderbolt™ 4 3x USB 3.2 Gen 1 Type-A\r\n1x HDMI 2.0b 1x RJ45 1x 3.5mm Combo Audio Jack \r\nHệ điều hành: Windows 10 Home SL\r\nPin: 4 Cell 76WHr\r\nKích thước: 36.0 x 25.2 x 1.99 cm\r\nCông nghệ màn hình: Tần số quét 144Hz, màn hình chống loá, Adaptive-Sync\"\r\n', 1, 'co', 2),
(4, 'HP Pavilion 15 AK030TX\r\n', 18000000, '1_3.jpg\r\n', 'CPU: Intel Core i5 Skylake6200U2.30 GHz\r\nRAM: 4 GBDDR4 (2 khe)2133 MHz\r\nỔ cứng: HDD 500 GB\r\nMàn hình: 15.6\"\"HD (1366 x 768)\r\nCard màn hình: Card rờiNVIDIA GeForce 940MX, 2 GB\r\nCổng kết nối:2 x USB 3.0HDMILAN (RJ45)USB 2.0\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dày Dày 22.5 mm - Nặng 2 kg\"\r\n', 1, 'co', 3),
(5, 'HP Omen 15\r\n', 18000000, '1_4.jpg\r\n', 'CPU: i710750H2.6GHz\r\nRAM: 16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)2933 MHz\r\nỔ cứng: 1 TB SSD M.2 PCIeHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080)300Hz\r\nCard màn hình: Card rờiRTX 2070 Max-Q 8GB\r\nCổng kết nối: Jack tai nghe 3.5 mmHDMILAN (RJ45)Thunderbolt 3Mini DisplayPort3x SuperSpeed USB A\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL + Office H&S 2019 vĩnh viễn\r\nThiết kế: Kim loại và polycarbonate\r\nKích thước, trọng lượng: Dài 357.9 mm - Rộng 239.7 mm - Dày 22.5 mm - Nặng 2.36 kg\"\r\n', 1, 'co', 4),
(6, 'HP Omen 17\r\n', 19500000, '1_5.jpg\r\n', 'Vi xử lý: Intel Core i9-11900H, 8 nhân / 16 luồng\r\nMàn hình: 17.3\"\" 2K WQHD IPS 165Hz (2560x1440), chống chói\r\nĐộ phủ màu: 100% sRGB\r\nRAM: 32GB DDR4 bus 3200 MHz (Nâng cấp tối đa 64GB)\r\nCard đồ họa: Nvidia Geforce RTX 3080 16GB GDDR6\r\nLưu trữ: 1TB m.2 NVMe (Nâng cấp tối đa 2TBx2)\r\nPin: 86Wh\r\nKết nối chính: 1 x USB-C tích hợp Thunderbolt 4, 3 x USB-A 3.2 Gen 1, 1 x HDMI 2.1, 1 x mini DisplayPort 1.4, 1 x SD, 1 x jack 3.5mm, 1 x RJ-45\r\nCân nặng:\r\nHệ điều hành: Windows 10 bản quyền\"\r\n', 1, 'co', 5),
(7, 'Dell Inspiron N7447\r\n', 18000000, '1_6.jpg\r\n', '\"CPU: Intel® Core™ i5-4210H - 2.8Ghz (Turbo Boot 3.5 GHz) 3Mb Cach\r\nRAM: 4GB 1600MHz DDR3L (có thể up lên 16GB)\r\nHDD: 500GB 5400RPM SATA (bài đánh giá được test trên ổ cứng SSD)VGA: Nvidia Geforce GTX 850M 4GB + Intel Graphic HD 4600\r\nLCD: 14.1\"\" HD LED (1366x768)\r\nÂm thanh: Waves MaxxAudio® Pro\r\nĐọc thẻ nhớ 8 in 1, HDMI, Wifi , Bluetooth 4.0, USB 3.0.\r\nTrọng lượng: 2.3kg\"\r\n', 1, 'co', 6),
(8, 'Dell Inspiron 5577\r\n', 17000000, '1_7.jpg\r\n', '\"CPU: Intel Core i7-7700HQ\r\nCạc màn hình: NVIDIA GeForce GTX 1050 (Notebook) – 4096 MB, GDDR5\r\nBộ nhớ ram :8192 MB , DDR4 2400MHz, up to 32GB\r\nDisplay:15.6 inch 16:9, 1920 x 1080 pixel 141 PPI, IPS, glossy: no\r\nLưu Trữ: 256 GB NVMe, 256 GB \r\nCổng kết nối: 3 USB 3.0 / 3.1 Gen1, 1 HDMI, 1 Kensington Lock, Audio Connections: 3.5mm, Card Reader: SD\r\nKết nối:10/100/1000 LAN Card (10/100/1000MBit), 802.11 a/b/g/n/ac (a/b/g/n/ac), Bluetooth 4.2\r\nKích thước: height x width x depth (in mm): 25.3 x 383 x 265 ( = 1 x 15.08 x 10.43 in)\r\nPin: 74 Wh, 6-cell\r\nHệ Điều Hành: Microsoft Windows 10 Home 64 Bit\r\nCamera:Webcam: HD\r\nTính năng bổ sung: Loa: Âm thanh nổi, Bàn phím: Chiclet\r\nCân Nặng: 2.5 kg\"\r\n', 1, 'co', 7),
(9, 'MSI GF63 8RC-243VN\r\n', 19000000, '1_8.jpg\r\n', 'CPU: i58300H2.30 GHz\r\nRAM: 8 GBDDR4 (2 khe)2666 MHz\r\nỔ cứng: 128 GB SSD M2 PCIeHDD 1 TB SATA 3\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080)\r\nCard màn hình: Card rờiNVIDIA GeForce GTX 1050, 4 GB\r\nCổng kết nối: 3 x USB 3.1HDMILAN (RJ45)USB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dài Dài 359 mm - Rộng Rộng 254 mm - Dày Dày 21.7 mm - Nặng 1.86 kg\"\r\n', 1, 'co', 8),
(10, 'ACER Nitro 5\r\n', 23000000, '1_9.jpg\r\n', 'CPU: Ryzen 55600H3.3GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIeHỗ trợ khe cắm HDD SATAHỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080)144Hz\r\nCard màn hình: Card rờiGTX 1650 4GB\r\nCổng kết nối: Jack tai nghe 3.5 mm3 x USB 3.2HDMILAN (RJ45)USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dài 363.4 mm - Rộng 255 mm - Dày 23.9 mm - Nặng 2.2 kg\"\r\n', 1, 'co', 9),
(11, 'MacBook Pro M1 2020\r\n', 43000000, '3_1.jpg\r\n', 'CPU: Apple M1\r\nRAM: 16 GB\r\nỔ cứng: 512 GB SSD\r\nMàn hình: 13.3\"\"Retina (2560 x 1600)\r\nCard màn hình: Card tích hợp8 nhân GPU\r\nCổng kết nối: 2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Mac OS\r\nThiết kế: Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 304.1 mm - Rộng 212.4 mm - Dày 15.6 mm - Nặng 1.4 kg\"\r\n', 3, 'co', 10),
(12, 'Asus ROG Zephyrus G14\r\n', 45000000, '3_2.jpg\r\n', 'CPU: Ryzen 95900HS3GHz\r\nRAM: 16 GBDDR4 2 khe (8GB onboard+ 1 khe 8GB)3200 MHz\r\nỔ cứng: Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe 3.0 mở rộng (nâng cấp dung lượng không giới hạn)1 TB SSD M.2 PCIe 3.0 (Có thể tháo ra, lắp thanh khác dung lượng không giới hạn)\r\nMàn hình: 14\"\"QHD (2560 x 1440)120Hz\r\nCard màn hình: Card rờiRTX 3050Ti 4GB\r\nCổng kết nối: 1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC2 x USB 3.2HDMIJack tai nghe 3.5 mmUSB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, trọng lượng: Dài 324 mm - Rộng 220 mm - Dày 19.9 mm - Nặng 1.7 kg\"\r\n', 3, 'co', 11),
(13, 'Asus Vivobook pro 15\r\n', 27000000, '3_3.jpg\r\n', 'CPU: Ryzen 55600H3.3GHz\r\nRAM: 8 GBDDR4 (On board)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080) OLED\r\nCard màn hình: Card rờiRTX 3050 4GB\r\nCổng kết nối: 1 x USB 3.22 x USB 2.0HDMIJack tai nghe 3.5 mmUSB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, trọng lượng: Dài 359.8 mm - Rộng 235.3 mm - Dày 19.9 mm - Nặng 1.65 kg\"\r\n', 3, 'co', 12),
(14, 'Lenovo Ideapad 5 Pro\r\n', 23000000, '3_4.jpg\r\n', 'CPU: i51135G72.4GHz\r\nRAM: 8 GBDDR4 (On board)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB (2280) / 512GB (2242))\r\nMàn hình: 14\"\"2.2K (2240x1400)\r\nCard màn hình: Card rờiMX450 2GB\r\nCổng kết nối: 1 x USB 3.21 x USB 3.2 (Always on)2 x USB Type-C (Power Delivery and DisplayPort)HDMI\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 312.2 mm - Rộng 221 mm - Dày 17.99 mm - Nặng 1.41 kg\"\r\n', 3, 'co', 13),
(15, 'HP ZBook Firefly 14\r\n', 42000000, '3_5.jpg\r\n', 'CPU: i71165G72.8GHz\r\nRAM: 16 GBDDR4 (2 khe)3200 MHz\r\nỔ cứng: 1 TB SSD M.2 PCIe\r\nMàn hình: 14\"\"Full HD (1920 x 1080)\r\nCard màn hình: Card rờiNVIDIA QuadroT500, 4GB\r\nCổng kết nối: 2 x Thunderbolt 4 USB-C2x SuperSpeed USB AHDMIJack tai nghe 3.5 mm\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Pro\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 323 mm - Rộng 214.6 mm - Dày 17.9 mm - Nặng 1.35 kg\"\r\n', 3, 'co', 14),
(16, 'MSI Prestige 15\r\n', 35000000, '3_6.jpg\r\n', 'CPU: i71185G73GHz\r\nRAM: 16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB)\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080)\r\nCard màn hình: Card rờiGTX 1650 Max-Q 4GB\r\nCổng kết nối: 2 x Thunderbolt 4 USB-C2 x USB 3.2HDMIJack tai nghe 3.5 mm\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 356.8 mm - Rộng 233.7 mm - Dày 16.9 mm - Nặng 1.69 kg\"\r\n', 3, 'co', 15),
(17, 'Laptop Asus VivoBook A515EP\r\n', 20000000, '3_7.jpg\r\n', 'CPU: i51135G72.4GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB onboard + 1 khe trống)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIeHỗ trợ khe cắm HDD SATA\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080)\r\nCard màn hình: Card rờiMX330 2GB\r\nCổng kết nối: 2 x USB 2.0HDMIJack tai nghe 3.5 mmUSB 3.1USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, trọng lượng: Dài 359 mm - Rộng 235 mm - Dày 17.9 mm - Nặng 1.8 kg\"\r\n', 3, 'co', 16),
(18, 'Dell Gaming G15\r\n', 25000000, '3_8.jpg\r\n', 'CPU: Ryzen 55600H3.3GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\nỔ cứng: Không hỗ trợ khe cắm HDDKhông hỗ trợ khe cắm SSD M2 mở rộng thêm256 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080)120Hz\r\nCard màn hình: Card rờiRTX 3050 4GB\r\nCổng kết nối: 1 x USB 3.22 x USB 2.0HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dài 357.26 mm - Rộng 272.11 mm - Dày 26.9 mm - Nặng 2.8 kg\"\r\n', 3, 'co', 30),
(19, 'Asus ZenBook Duo\r\n', 40000000, '3_9.jpg\r\n', 'CPU: i71165G72.8GHz\r\nRAM: 16 GBLPDDR4X (On board)4267 MHz\r\nỔ cứng: 1 TB SSD M.2 PCIe\r\nMàn hình: 14\"\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpIntel Iris Xe\r\nCổng kết nối: 1 x USB 3.22 x Thunderbolt 4 USB-CHDMIJack tai nghe 3.5 mm\r\nĐặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 324 mm - Rộng 222 mm - Dày 17.3 mm - Nặng 1.62 kg\"\r\n', 3, '', 0),
(20, 'Acer Aspire 7 Gaming\r\n', 22000000, '3_10.jpg\r\n', 'CPU: Ryzen 55500U2.1GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\nỔ cứng: Không hỗ trợ khe cắm HDDKhông hỗ trợ khe cắm SSD M2 mở rộng thêm512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\nMàn hình: 15.6\"\"Full HD (1920 x 1080)144Hz\r\nCard màn hình: Card rờiGTX 1650 4GB\r\nCổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB 2.0USB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dài 363.4 mm - Rộng 254.5 mm - Dày 22.9 mm - Nặng 2.1 kg\"\r\n', 3, '', 0),
(21, 'Lenovo Gaming Legion 5\r\n', 24000000, '1_10.jpg\r\n', 'Loại CPU: AMD Ryzen™ 5-4600H, 3.00GHz upto 4.00GHz, 8MB cache, 6 cores 12 threads, 8MB Cache\r\nLoại card đồ họa: NVIDIA GeForce GTX 1650 Ti 4GB GDDR6\r\nDung lượng RAM: 8GB\r\nỔ cứng: 512GB SSD M.2 2280 PCIe NVMe\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp:	4 x USB 3.2 Gen 1 (one Always On), 1 x USB 3.2 Type-C Gen 1 (with the function of DisplayPort 1.2), HDMI 2.0, headphone / microphone combo jack\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 4Cell, 60WH\r\nKích thước: 363.06mm x 259.61mm x 22-24mm\r\nCông nghệ màn hình: 15.6 inch FHD (1920x1080) IPS 300nits Anti-glare, 144Hz, 100% sRGB, Dolby Vision\"\r\n', 1, 'co', 17),
(22, 'ASUS Gaming FX506LH-HN002T\r\n', 22000000, '1_11.jpg\r\n', 'Loại CPU: Intel Core i5-10300H, tốc độ 2.4GHz tối đa 4.5Ghz, 8MB bộ nhớ đệm\r\nLoại card đồ họa: NVIDIA GeForce GTX 1650 4GB GDDR6\r\nDung lượng RAM: 8GB\r\nỔ cứng: 512GB SSD M.2 PCIE G3X2 (Còn trống 1 khe SSD M.2 PCIE và 1 khe 2.5\"\" SATA)\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp: \r\n2 cổng Type-A USB 3.1 (Gen 1)\r\n1 cổng Type-A USB2.0\r\n1 cổng RJ-45 LAN\r\n1 cổng HDMI 2.0B\r\n1 cổng COMBO audio jack\r\nHệ điều hành: Windows 10 Home\r\nPin: 3 Cell 48WHr\r\nKích thước: 360 x 262 x 25.8 ~26.9 cm\r\nCông nghệ màn hình: Tần số quét 144Hz, độ sáng tối đa 250nits, 45% NTSC, 63% sRGB\"\r\n', 1, 'co', 22),
(23, 'MSI Gaming Bravo 15 B5DD-027VN\r\n', 20000000, '1_12.jpg\r\n', 'Loại CPU: AMD Ryzen 5 5600H\r\nLoại card đồ họa: Radeon RX5500M 4GB\r\nDung lượng RAM: 8GB\r\nỔ cứng: 512GB SSD NVMe M.2 PCIe Gen 3 x 4\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp:	\r\n1x (4K @ 30Hz) HDMI\r\n1x RJ45\r\n1x Type-C USB3.2 Gen1\r\n3x Type-A USB3.2 Gen1\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 3 Cell\r\nKích thước: 359 x 254 x 21.7 mm\r\nCông nghệ màn hình: Tần số quét 144Hz\"\r\n', 1, 'co', 5),
(24, 'Ideapad Gaming 3 15IMH05 81Y400Y9VN\r\n', 22500000, '1_13.jpg\r\n', 'Loại CPU: Intel® Core™ i7-10750H\r\nLoại card đồ họa: NVIDIA GEFORCE GTX 1650Ti 4GB\r\nDung lượng RAM: 8GB\r\nỔ cứng: 512GB SSD M.2 NVMe\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp: \r\n2 x USB 3.1 (Gen 1), 1 x USB-C 3.1, 1 x HDMI 2.0\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 3Cell 45WH\r\nKích thước: 359mm x 249.6mm x 24.9mm\r\nCông nghệ màn hình: 15.6 inch FHD (1920x1080) IPS 250nits Anti-glare, 120Hz\"\r\n', 1, 'co', 2),
(25, 'MSI Gaming GF63 THIN 10SC-020VN\r\n', 22000000, '1_14.jpg\r\n', 'Loại CPU: Intel Core i7 10750H\r\nLoại card đồ họa: NVIDIA GeForce GTX 1650 4 GB\r\nDung lượng RAM: 8GB\r\nỔ cứng: 512GB SSD NVMe M.2 PCIe Gen 3 x 4\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp:	\r\n1x (4K @ 30Hz) HDMI\r\n1x RJ45\r\n1x Type-C USB3.2 Gen1\r\n3x Type-A USB3.2 Gen1\r\nHệ điều hành: Windows 10\r\nPin: 3 Cell\r\nKích thước: 359 x 254 x 21.7 mm\r\nCông nghệ màn hình: Tần số quét 144Hz\"\r\n', 1, 'co', 25),
(26, 'ASUS ROG Flow X13 GV301QC-K6052T\r\n', 37000000, '1_15.jpg\r\n', 'Loại CPU: AMD Ryzen 9 5900HS 3.3GHz up to 4.6GHz 16MB\r\nLoại card đồ họa: NVIDIA® GeForce® RTX 3050 4GB GDDR6\r\nDung lượng RAM: 16GB\r\nỔ cứng: 512GB SSD M.2 NVMe PCIe\r\nKích thước màn hình: 13.4 inches\r\nĐộ phân giải màn hình: 1920 x 1200 pixels (FullHD+)\r\nCổng giao tiếp: \r\n2x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery\r\n1x USB 3.2 Gen 2 Type-A\r\n1x ROG XG Mobile Interface\r\n1x HDMI 2.0b\r\n1x 3.5mm Combo Audio Jack\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 4 Cell 62WHr\r\nKích thước: 299 x 222 x 15.8 (mm)\r\nCông nghệ màn hình: Tần số quét 120Hz, 100% sRGB, Pantone Validated, Corning Gorilla Glass.\"\r\n', 1, 'co', 2),
(27, 'MSI Katana GF66 11UC-641VN\r\n', 29000000, '1_16.jpg\r\n', 'Loại CPU: Intel Core i7-11800H 2.3GHz up to 4.6GHz 24MB\r\nLoại card đồ họa: NVIDIA GeForce RTX™ 3050 4GB GDDR6, Up to 1777MHz Boost Clock, 60W Maximum Graphics Power.\r\nDung lượng RAM: 8GB\r\nỔ cứng: 512GB NVMe PCIe Gen3x4 SSD (1 slot)\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp: \r\n1x Type-C USB3.2 Gen1\r\n2x Type-A USB3.2 Gen1\r\n1x Type-A USB2.0\r\n1x RJ45\r\n1x (4K @ 60Hz) HDMI\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 3 Cell 53.5WHr\r\nKích thước: 359 x 259 x 24.9 mm\r\nCông nghệ màn hình: Tần số quét 144Hz, 72% NTSC, 100% sRGB\"\r\n', 1, 'co', 27),
(28, 'Gigabyte G5 KC-5S11130SH\r\n', 28200000, '1_17.jpg\r\n', 'Loại CPU: Intel Core i5-10500H 2.5GHz up to 4.5GHz 12MB\r\nLoại card đồ họa: NVIDIA GeForce RTX 3060 6GB GDDR6 Boost Clock 1425 MHz, Maximum Graphics Power 105 W\r\nDung lượng RAM: 16GB\r\nỔ cứng: 512GB SSD\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp: \r\n1x USB 3.2 Gen 2 Type-C Ports Supporting: DisplayPort over USB-C\r\n1x USB3.2 Gen1 Type-A\r\n1x USB3.2 Gen2 Type-A\r\n1x USB2.0 Type-A\r\n1x HDMI 2.0 (with HDCP)\r\n1x mini DP 1.4\r\n1x Audio combo jack\r\n1x Microphone jack\r\n1x DC-in Ja\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 4 Cell 48.96 WHrs\r\nKích thước: 361 x 258 x 27.9 (mm)\r\nCông nghệ màn hình: Tần số quét 144Hz, 72% NTSC, 100% sRGB, 3ms\"\r\n', 1, 'co', 28),
(29, 'Acer Gaming Predator Helios\r\n', 39000000, '1_18.jpg\r\n', 'Loại CPU: Intel® Core™ i7-10750H\r\nLoại card đồ họa: NVIDIA® GeForce RTX™ 3060 6GB GDDR6\r\nDung lượng RAM: 16GB\r\nỔ cứng: 512GB PCIe NVMe SSD (nâng cấp tối đa 2TB SSD PCIe NVMe và 2TB HDD 2.5-inch 5400 RPM)\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp:\r\n1 x RJ-45 - Gigabit Ethernet\r\n1 x USB 3.2 Gen 2 Type C\r\n1 x USB 3.2 Gen 2 Type A\r\n2 x USB 3.1 Gen 1 Type A\r\n1 x HDMI\r\nHệ điều hành: Windows 10 Home\r\nPin: 59 Wh, 4-cell\r\nKích thước: 145 (W) x 75 (D) x 23 (H) mm\"\r\n', 1, 'co', 1),
(30, 'Lenovo Legion 7\r\n', 50000000, '1_19.jpg\r\n', 'Loại CPU: AMD R7 5800H\r\nLoại card đồ họa: Nvidia RTX3060 6GB\r\nDung lượng RAM: 16GB\r\nỔ cứng: 1TB SSD\r\nKích thước màn hình: 16 inches\r\nĐộ phân giải màn hình: 2560 x 1600 pixels (2K)\r\nCổng giao tiếp:\r\n1x USB 3.2 Gen 1\r\n1x USB-C 3.2 Gen 2\r\n1x jack cắm tai nghe 3.5mm\r\n1x USB-C 3.2 Gen 1 (chuyển đổi dữ liệu)\r\n1x USB-C 3.2 Gen 2 (chuyển đổi dữ liệu, sạc 100W, DisplayPort 1.4)\r\n1x Ethernet (RJ-45)\r\n1x HDMI® 2.1\r\n2x USB 3.2 Gen 1\r\nHệ điều hành: Windows 10 Home 64, English\r\nPin: 80Wh\r\nKích thước: 356 x 260 x 20.1-23.5 mm\r\nCông nghệ màn hình: IPS, độ sáng 500nits, chống chói, tần số quét 165Hz, 100% sRGB, Dolby® Vision™, HDR 400, Free-Sync, G-Sync, DC dimmer\"\r\n', 1, 'co', 18),
(31, 'Dell Gaming G5\r\n', 39000000, '1_20.jpg\r\n', 'Loại CPU: Intel Core i7-10750H 2.60 GHz,12 MB\r\nLoại card đồ họa: NVIDIA GEFORCE RTX 2070 8GB GDDR6\r\nDung lượng RAM: 16GB\r\nỔ cứng: 1TB PCIE\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp: \r\n1 SuperSpeed USB 3.2 Gen 1\r\n2 SuperSpeed USB 2.0\r\n1 Thunderbolt™ 3 Port (USB 3.1 Gen 2 Type-C™ with support for 40 Gbps Thunderbolt and DisplayPort)\r\n1 MiniDP\r\n1 HDMI 2.0\r\n1 Headphone/Mic\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 4-Cell, 68 Whr\r\nKích thước: 24.5mm x 365.5mm x 254mm\r\nCông nghệ màn hình: Tần số quét 300Hz\"\r\n', 1, 'co', 19),
(32, 'ASUS Gaming ROG Strix G15', 25000000, 'HD wallpaper_ Windows 10, abstract, landscape.jfif', 'Loại CPU: AMD Ryzen 7 4800H 2.9GHz up to 4.2GHz 8MB\r\nLoại card đồ họa: NVIDIA GeForce GTX 1650 4GB GDDR6\r\nDung lượng: RAM	8GB\r\nỔ cứng: 512GB SSD PCIE G3X4 (Còn trống 2 khe SSD M.2 PCIE)\r\nKích thước màn hình: 15.6 inches\r\nĐộ phân giải màn hình: 1920 x 1080 pixels (FullHD)\r\nCổng giao tiếp:\r\n1x Type C USB 3.2 Gen 2 with Power Delivery and Display Port\r\n3x USB 3.2 Gen 1 Type-A\r\n1x HDMI 2.0b\r\n1x 3.5mm Combo Audio Jack\r\n1x RJ45 LAN Jack\r\nHệ điều hành: Windows 10 Home SL\r\nPin: 4 Cell 56WHrs\r\nKích thước: 35.4 x 25.9 x 2.26 ~ 2.72 (cm)\r\nCông nghệ màn hình: Tần số quét 144Hz, màn hình chống loá\"\r\n', 1, 'co', 20),
(36, 'Lenovo Yoga 7 14ITL5 i7', 28500000, 'lenovo-yoga-7-14itl5-i7-82bh00ckvn-120821-0324000 (1).jpg', 'CPU: i71165G72.8GHz\r\nRAM: 8 GBDDR4 (On board)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\nMàn hình: 14\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpIntel Iris Xe\r\nCổng kết nối: 1 x USB 3.2 (Always on)2 x Thunderbolt 4 USB-CJack tai nghe 3.5 mm\r\nĐặc biệt: Có màn hình cảm ứngCó đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 320.4 mm - Rộng 214.6 mm - Dày 17.7 mm - Nặng 1.43 kg', 2, 'co', 31),
(37, 'Asus VivoBook Pro 15 OLED', 26000000, 'vi-vn-asus-vivobook-pro-15-oled-m3500qc-r5-l1105t-1.jpg', 'CPU: Ryzen 55600H3.3GHz\r\nRAM: 8 GBDDR4 (On board)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)\r\nMàn hình: 15.6\"Full HD (1920 x 1080) OLED\r\nCard màn hình: Card rờiRTX 3050 4GB\r\nCổng kết nối: 1 x USB 3.22 x USB 2.0HDMIJack tai nghe 3.5 mmUSB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, trọng lượng: Dài 359.8 mm - Rộng 235.3 mm - Dày 19.9 mm - Nặng 1.65 kg', 2, 'co', 32),
(38, 'Lenovo Ideapad 5 Pro', 23000000, 'vi-vn-lenovo-ideapad-5-pro-14itl6-i5-82l30094vn-1.jpg', 'CPU: i51135G72.4GHz\r\nRAM: 8 GBDDR4 (On board)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB (2280) / 512GB (2242))\r\nMàn hình: 14\"2.2K (2240x1400)\r\nCard màn hình: Card rờiMX450 2GB\r\nCổng kết nối: 1 x USB 3.21 x USB 3.2 (Always on)2 x USB Type-C (Power Delivery and DisplayPort)HDMI\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 312.2 mm - Rộng 221 mm - Dày 17.99 mm - Nặng 1.41 kg', 2, '', 1),
(39, 'Apple MacBook Air M1 2020', 33000000, 'apple-macbook-air-2020-m1-mgn73saa-011220-0832500.jpg', 'CPU: Apple M1\r\nRAM: 8 GB\r\nỔ cứng: 512 GB SSD\r\nMàn hình: 13.3\"Retina (2560 x 1600)\r\nCard màn hình: Card tích hợp8 nhân GPU\r\nCổng kết nối: 2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Mac OS\r\nThiết kế: Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 304.1 mm - Rộng 212.4 mm - Dày 4.1 mm đến 16.1 mm - Nặng 1.29 kg', 4, '', 1),
(40, 'Lenovo ThinkBook 14s G2 ITL i7', 25000000, 'vi-vn-lenovo-thinkbook-14s-g2-itl-i7-20va000mvn-120821-0313030.jpg', 'CPU: i71165G72.8GHz\r\nRAM: 8 GBDDR4 (On board)4266 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe\r\nMàn hình: 14\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpIntel Iris Xe\r\nCổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmThunderbolt 4 USB-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 322 mm - Rộng 207 mm - Dày 14.9 mm - Nặng 1.27 kg', 4, '', 1),
(41, 'MSI Modern 14 B11MOL i3', 15000000, 'vi-vn-msi-modern-14-b11mol-i3-813vn-1.jpg', 'CPU: i31115G43GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\nỔ cứng: 256 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)\r\nMàn hình: 14\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpIntel UHD\r\nCổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mm\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 319 mm - Rộng 219 mm - Dày 18.1 mm - Nặng 1.3 kg', 4, '', 36),
(42, 'Dell Vostro 5410 i5', 26000000, 'vi-vn-dell-vostro-5410-i5-v4i5214w-1.jpg', 'CPU: i511320H3.2GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\nMàn hình: 14\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpIntel Iris Xe\r\nCổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL + Office H&S 2019 vĩnh viễn\r\nKích thước, trọng lượng: Dài 321.2 mm - Rộng 212.8 mm - Dày 17.9 mm - Nặng 1.44 kg', 2, 'co', 37),
(43, 'Dell Vostro 5410 i5', 25000000, 'vi-vn-dell-inspiron-15-5515-r7-n5r75700u104w-1.jpg', 'CPU: Ryzen 75700U1.8GHz\r\nRAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\nMàn hình: 15.6\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpRadeon\r\nCổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmUSB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL + Office H&S 2019 vĩnh viễn\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dài 356 mm - Rộng 228.9 mm - Dày 14.5 mm - Nặng 1.75 kg', 2, 'co', 38),
(44, 'Gigabyte U4 i7 1195G7', 27000000, 'vi-vn-gigabyte-u4-i7-ud70s1823so-1.jpg', 'CPU: i71195G72.9GHz\r\nRAM: 16 GBDDR4 2 khe (8GB onboard+ 1 khe 8GB)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 2TB)\r\nMàn hình: 14\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpIntel Iris Xe\r\nCổng kết nối: 2 x USB 3.2HDMIJack tai nghe 3.5 mmThunderbolt 4 USB-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 11 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 322 mm - Rộng 216.8 mm - Dày 17.2 mm - Nặng 0.99 kg', 4, 'co', 39),
(45, 'Lenovo ThinkBook 14', 21000000, 'q1-800x444.jpg', 'CPU: i51135G72.4GHz\r\nRAM: 8 GBDDR4 (On board +1 khe)3200 MHz\r\nỔ cứng: 512 GB SSD NVMe PCIeHỗ trợ khe cắm HDD SATA\r\nMàn hình: 14\"Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợpIntel Iris Xe\r\nCổng kết nối: 2 x USB 3.2HDMILAN (RJ45)Thunderbolt 4 USB-CUSB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 323 mm - Rộng 218 mm - Dày 17.9 mm - Nặng 1.4 kg', 4, 'co', 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'banner1.jpg', '#'),
(2, 'banner2.jpg', '#'),
(3, 'banner3.jpg', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
