-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2023 lúc 05:25 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wd18412_quanlyoto`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `tenHangXe` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tenHangXe`) VALUES
(1, 'xe vip1'),
(2, 'xe vip2'),
(3, 'xe vip3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(5) NOT NULL,
  `hinhAnh` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `id` int(10) NOT NULL,
  `tenLoaiXe` varchar(225) NOT NULL,
  `xuatXu` varchar(100) NOT NULL,
  `idDanhMuc` int(10) DEFAULT NULL,
  `mauSac` varchar(225) NOT NULL,
  `hinhAnh` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`id`, `tenLoaiXe`, `xuatXu`, `idDanhMuc`, `mauSac`, `hinhAnh`) VALUES
(7, 'xe 1', 'Mỹ', 1, '#000000', 'psycho_deliverance_stunning_interpretation_of_a_cover_of_the_an_8d8918c9-1114-4cbe-860b-8a5fec63bef9_clipdrop-enhance.png'),
(8, 'xe', 'đa', 1, '#ff0000', 'wallhaven-g7mdre.jpg'),
(16, 'mesxedes', 'Nhật', 3, '#0091ff', '1699433083551.png'),
(19, 'ád', 'ád', 3, '#d4ff00', 'wallhaven-oxjvrm.jpg'),
(23, '123', '123', 3, '#0040ff', 'wallhaven-p8mdyj.jpg'),
(25, 'Vanh123', 'Trung quốc', 3, '#b005ff', 'wallhaven-5g7ej8_1920x1080.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xe1` (`idDanhMuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe1` FOREIGN KEY (`idDanhMuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
