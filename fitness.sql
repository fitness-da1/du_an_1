-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2022 lúc 07:40 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fitness`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_account`
--

INSERT INTO `admin_account` (`id`, `user_name`, `password`, `fullname`, `email`, `role_`) VALUES
(1, 'admin', '698d51a19d8a121ce581499d7b701668', 'admin', 'admin@gmail.com', 0),
(3, 'ctv2', 'bcbe3365e6ac95ea2c0343a2395834dd', 'ctv2', 'ctv2@gmail.com', 1),
(17, 'admin2', 'bcbe3365e6ac95ea2c0343a2395834dd', 'admin2', 'admin2@gmail.com', 0),
(19, 'test', '698d51a19d8a121ce581499d7b701668', 'test', 'test@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `id_author` int(10) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_avatar` varchar(255) NOT NULL,
  `post_viewer` int(10) NOT NULL,
  `post_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `id_author`, `post_name`, `post_content`, `post_avatar`, `post_viewer`, `post_time`) VALUES
(1, 1, 'How to Modify Any Program to Improve Your Weaknesess', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia. sed quia ipsum den consequuntur magni dolores eos.\r\n\r\nDolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nCorporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.', 'ccccc.png', 10, '2022-11-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_meaningful` text NOT NULL,
  `categories_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_meaningful`, `categories_image`) VALUES
(1, 'Gym', 'test', ''),
(2, 'Yoga', '', ''),
(3, 'Strength Trainning', '', ''),
(4, 'Running', 'Running', ''),
(5, 'Weight Lose', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `comments_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plant`
--

CREATE TABLE `plant` (
  `id` int(10) NOT NULL,
  `plant_name` varchar(255) NOT NULL,
  `plant_exp` int(2) NOT NULL,
  `plant_cost` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `plant`
--

INSERT INTO `plant` (`id`, `plant_name`, `plant_exp`, `plant_cost`) VALUES
(1, 'CLASSIC - 1 tháng', 1, 2315000),
(2, 'CLASSIC - 3 tháng', 3, 4910000),
(3, 'CLASSIC - 6 tháng', 6, 7830000),
(4, 'CLASSIC - 14 tháng', 14, 12160000),
(5, 'CLASSIC - 36 tháng', 36, 26840000),
(6, 'CLASSIC-PLUS - 18 tháng', 18, 15580000),
(7, 'CLASSIC-PLUS - 42 tháng', 42, 31310000),
(8, 'CITIPASSPORT - 24 tháng', 24, 21240000),
(9, 'CITIPASSPORT - 48 tháng', 48, 37800000),
(10, 'ROYAL - 30 tháng', 30, 31565000),
(11, 'SIGNATURE - 24 tháng', 24, 89240000),
(12, 'SIGNATURE - 60 tháng', 60, 149395000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trainers`
--

CREATE TABLE `trainers` (
  `id` int(10) NOT NULL,
  `trainer_name` varchar(255) NOT NULL,
  `trainer_image` varchar(255) NOT NULL,
  `trainer_categorie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trainers`
--

INSERT INTO `trainers` (`id`, `trainer_name`, `trainer_image`, `trainer_categorie`) VALUES
(2, 'Johns Jone', '', 3),
(3, 'Jannie Cate', '', 1),
(4, 'Michale Jone', '', 5),
(5, 'Wilson', '', 1),
(6, 'Anna', 'logo - Copy.png', 2),
(7, 'Cattie', '', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fist_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `plant_id` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fist_name`, `last_name`, `email`, `address`, `phone_number`, `image`, `plant_id`, `status`) VALUES
(2, 'Nguyễn Văn', 'A', 'nva@gmail.com', 'Hà Nội', '0819956789', '', 1, 0),
(22, 'Nguyễn Văn', 'B', 'nvb@gmail.com', 'Hà Nội', '0819956789', '', 3, 0),
(23, 'Nguyễn ', 'C', 'nvc@gmail.com', 'Hà Nội', '2429787654', '', 2, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_author` (`id_author`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`post_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `admin_account` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
