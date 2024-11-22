-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2024 lúc 06:26 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngayBl` varchar(200) NOT NULL,
  `rate` int(20) NOT NULL,
  `ma_san_pham` int(10) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `ngayBl`, `rate`, `ma_san_pham`, `user`) VALUES
(1, 'nội dung 1', 'ngày bình luận', 4, 8, 'hunghung'),
(3, 'lllll', '2024-08-02 19:19:03', 0, 8, 'customer'),
(4, 'anh hùng\r\n', '2024-08-02 19:19:53', 0, 10, 'hunghung'),
(8, 'anh hùng cmt', '2024-08-02 19:22:54', 0, 8, 'hunghung'),
(9, 'anh hùng đẹp trai', '2024-08-02 19:24:06', 0, 8, 'hunghung'),
(11, 'hihiiii', '2024-08-02 19:25:11', 0, 8, 'customer'),
(12, 'jjjjjjjjjj', '2024-08-02 19:25:42', 0, 8, 'customer'),
(13, 'hhhhhhh', '2024-08-02 19:26:33', 0, 8, 'customer'),
(14, 'jjjjjjjjj', '2024-08-02 19:29:18', 0, 10, 'customer'),
(15, 'anh hùng cmmt ạ', '2024-08-02 19:29:24', 0, 10, 'customer'),
(16, 'anh hùng cmt', '2024-08-02 19:29:54', 0, 11, 'customer'),
(17, 'anh hùng cmt test', '2024-08-02 19:30:28', 5, 11, 'customer'),
(18, 'anh hùng 4 sao', '2024-08-02 19:30:38', 4, 11, 'customer'),
(22, 'hid adjada  chơi ff không nè', '2024-08-06 11:44:10', 4, 17, 'toilazaidep'),
(40, 'tôi vừa viết bình luận\r\n', '2024-08-08 05:44:16', 4, 19, 'customer'),
(44, 'tôi vừa bình luận', '2024-08-13 10:27:49', 5, 19, 'hunghung'),
(45, 'tôi vừa bình luận\r\n', '2024-08-16 02:36:00', 5, 32, 'hunghung'),
(46, 'heeloo', '2024-08-16 02:46:08', 5, 33, 'hunghung'),
(47, 'heeloo', '2024-08-16 02:46:08', 5, 33, 'hunghung'),
(48, 'heeloo', '2024-08-16 02:46:08', 5, 33, 'hunghung'),
(49, 'heeloo', '2024-08-16 02:46:08', 5, 33, 'hunghung'),
(50, 'heeloo', '2024-08-16 02:46:08', 5, 33, 'hunghung'),
(52, 'customer vừa bình luận', '2024-08-16 03:09:02', 4, 35, 'customer'),
(53, 'tôi là lưu lỏ\r\n', '2024-09-18 14:52:11', 5, 35, 'customer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gop_y`
--

CREATE TABLE `gop_y` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noi_dung` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gop_y`
--

INSERT INTO `gop_y` (`id`, `email`, `noi_dung`, `user_id`) VALUES
(1, 'hunghung12092005@gmail.com', '0', 'hunghung'),
(2, 'hunghung12092005@gmail.com', 'tôi đã góp ý', 'hunghung'),
(4, 'cuduc2309@gmail.com', 'góp ý nè', 'customer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id` int(10) NOT NULL,
  `ma_loai` varchar(50) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id`, `ma_loai`, `ten_loai`) VALUES
(1, '1', 'Đồng hồ đeo tay '),
(2, '2', 'Máy tính xách tay'),
(4, '3', 'Máy ảnh'),
(5, '4', 'Điện thoại'),
(6, '5', 'Nước hoa'),
(9, '08', 'Quần Áo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) NOT NULL,
  `ma_san_pham` varchar(50) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `gia` varchar(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_link` varchar(200) NOT NULL,
  `moTa` varchar(255) NOT NULL,
  `luotXem` int(11) NOT NULL,
  `ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ma_san_pham`, `ten_san_pham`, `gia`, `img`, `img_link`, `moTa`, `luotXem`, `ma_loai`) VALUES
(5, 'sp04', 'Điện Thoại', '611', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW70G9vpZquY0kN0_7G_IDZX9J-aJVky7xlA&s', '', 'đây là mô tả 3', 80, 5),
(6, 'sp010', 'Nước Hoa', '99', 'https://theperfume.vn/wp-content/uploads/2018/08/N%C6%B0%E1%BB%9Bc-hoa-Miss-Dior-100ml-e1669350357726.png', '', 'đây là mô tả 4', 78, 6),
(8, '09', 'Đồng Hồ', '10', '', 'https://bizweb.dktcdn.net/100/472/501/products/video-708g3.jpg?v=1680834297060', 'đây là mô tả 5', 878, 1),
(10, '10', 'Điện Thoại', '10,000', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW70G9vpZquY0kN0_7G_IDZX9J-aJVky7xlA&s', 'đây là mô tả 6', 9, 5),
(11, '12', 'Quần Áo', '10.000', '', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6xLIuHGo2lfJ4H3haDbc6DPVqaC273rkc8w&s', 'đây là mô tả 7', 5, 9),
(14, '15', 'Máy tính', '10.000.000', '', 'https://gstatic.gvn360.com/2020/01/d02d07107e4299f17b273290a8e0f933-1.jpg', 'đây là mô tả', 3, 2),
(15, '16', 'Máy Ảnh', '10.000', '', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/May-anh/may-anh-1.jpg', 'đây là mô tả', 5, 4),
(17, '18', 'Máy Ảnh', '10.000', '', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/May-anh/may-anh-1.jpg', 'đây là mô tả', 411, 4),
(19, '09', 'Đồng Hồ', '10.000', '', 'https://bizweb.dktcdn.net/100/472/501/collections/dong-ho-nam-iw-carnival-708g-chinh-hang-dd-5.jpg?v=1689331474973', 'đây là mô tả', 524, 1),
(32, '10', 'Máy Tính', '10,000', '', 'https://cdn.tgdd.vn/Files/2017/01/19/939425/cach-cai-hinh-nen-may-tinh-khong-bi-mo_1280x720-800-resize.jpg', 'đây là mô tả 2', 9, 2),
(33, '13', 'Máy Ảnh', '10,000', '', 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/May-anh/may-anh-1.jpg', 'đây là mô tả', 23, 4),
(34, '09', 'Điện thoại', '10.000', '', 'https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-vang-thumb-600x600.jpg', 'đây là mô tả', 2, 5),
(35, '09', 'nước hoa', '10.000', '', 'https://kenperfume.com/wp-content/uploads/2022/09/Nuoc-Hoa-Nu-Chanel-Coco-Mademoiselle-Intense.jpg', 'đây là nước hoa', 14, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `role`, `email`, `image`) VALUES
(1, 'hunghung', 'Đồng Mạnh Hùng dzq', 'Mật khẩu của bạn', 'admin', 'hunghung12092005@gmail.com', 'https://www.vietnamworks.com/hrinsider/wp-content/uploads/2023/12/hinh-nen-dien-thoai-35.jpg'),
(2, 'customer', 'khách hàng 2', '123', 'admin', 'hunghung@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3J7fax0r25yrhXbt64ICXsKZ-Clm_txAxmw&s'),
(7, 'hunghung', 'iiii', '', 'client', 'hunghung12092005@gmail.com', ''),
(8, 'hunghung', 'iiii', '', 'client', 'hunghung12092005@gmail.com', ''),
(9, 'hunghung', 'hhh', '', 'client', 'hunghung12092005@gmail.com', ''),
(12, 'toilazaidep', 'anh hùng', '123', 'client', 'cuduc2309@gmail.com', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp` (`ma_san_pham`),
  ADD KEY `fk_users` (`user`);

--
-- Chỉ mục cho bảng `gop_y`
--
ALTER TABLE `gop_y`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gopy` (`user_id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`,`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_maLoaiSp_idmaLoai` (`ma_loai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`user_id`) USING BTREE,
  ADD KEY `fk_users` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `gop_y`
--
ALTER TABLE `gop_y`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_sp` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`user`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `gop_y`
--
ALTER TABLE `gop_y`
  ADD CONSTRAINT `fk_gopy` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_maLoaiSp_idmaLoai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
