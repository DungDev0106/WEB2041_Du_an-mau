-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2022 lúc 08:32 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_mau2022`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`) VALUES
(1, 'Thắt Lưng Nam'),
(2, 'Túi Đeo Chéo'),
(3, 'Ví Da update'),
(4, 'Nước hoa trẻ em update'),
(7, 'Nước hoa nữ update'),
(19, 'Đồng hồ update'),
(20, 'Túi cầm tay nam'),
(21, 'Ví Da Nam'),
(22, 'Thắt Lưng Da');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` double(10,2) DEFAULT 0.00,
  `pro_image` varchar(255) DEFAULT NULL,
  `pro_desc` text DEFAULT NULL,
  `chat_lieu` varchar(255) NOT NULL,
  `pro_view` int(11) DEFAULT 0,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_image`, `pro_desc`, `chat_lieu`, `pro_view`, `cate_id`) VALUES
(11, 'Túi sách nam cực chất', 11111.00, '../upload/tui_xach_nam1.webp', '', '', 9, 20),
(21, 'Đồng hồ', 123123.00, '../upload/tui_cheo1.webp', 'asasdfasfdasf', '', 20, 2),
(22, 'Túi đeo chéo nam', 123123.00, '../upload/tui_cheo.webp', 'asdfasfdasfasfasf', '', 16, 2),
(23, 'Túi đeo chéo nam', 1212.00, '../upload/tui_cheo5.webp', 'asfdasfasfddas', '', 90, 2),
(24, 'Ví da', 123123.00, '../upload/vi_da1.jpg', 'asdfasdfasfd', '', 15, 21),
(25, 'Ví da', 2323.00, '../upload/vi_da2.jpg', 'asdfasdf', '', 5, 21),
(26, 'Ví da cầm tay nam khóa số', 1230000.00, '../upload/vi_da4.jpg', 'HÌnh ảnh sản phẩm 100% chụp bằng sản phẩm thật, do ánh sáng môi trường xung quanh', ' Da bò mill hạt nhỏ', 100, 21);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `FK_pro_cate` (`cate_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_pro_cate` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
