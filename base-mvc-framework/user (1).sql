-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 13, 2022 lúc 07:03 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `fullname`, `address`) VALUES
(1, 'ndnhat1@gmail.com', 'Nguyễn Đăng Nhật', 'Hà Tĩnh'),
(7, 'huytoannguyen43@gmail.com', 'Huy Toàn Nguyễn', 'ha tinh'),
(9, 'ndnhat1@gmail.com', 'ndnhat1@gmail.com', 'Nhat'),
(10, 'test@gmail.com', 'test', 'thôn Bình Tiến B'),
(11, 'test@gmail.com', 'test', 'thôn Bình Tiến B'),
(12, 'test@gmail.com', 'test', 'thôn Bình Tiến B'),
(13, 'ndnhat1@gmail.com', 'ndnhat1@gmail.com', 'Nhat'),
(14, 'ndnhat1@gmail.com', 'ndnhat1@gmail.com', 'Nhat'),
(15, 'ndnhat1@gmail.com', 'ndnhat1@gmail.com', 'Nhat'),
(16, 'ndnhat1@gmail.com', 'ndnhat1@gmail.com', 'Nhat'),
(17, 'test@gmail.com', 'test', 'thôn Bình Tiến B'),
(18, 'huytoannguyen43@gmail.com', 'linhloi2k2@gmail.com', 'Ha Tinh'),
(19, 'huytoannguyen43@gmail.com', 'linhloi2k2@gmail.com', 'Ha Tinh'),
(20, 'linhloi2k2@gmail.com', 'nhat', 'Nhat'),
(22, 'ndnhat1@gmail.com', 'Nhat Nguyen', 'Nhat');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
