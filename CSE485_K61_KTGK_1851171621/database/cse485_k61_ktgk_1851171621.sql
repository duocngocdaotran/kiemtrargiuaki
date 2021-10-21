-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 09:15 AM
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
-- Cơ sở dữ liệu: `cse485_k61_ktgk_1851171621`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `create_on`, `modified_on`) VALUES
(1, 'Linh', 'Đoàn Quang', '2000-04-03', 'Nam', '0123456789', 'doanquanglinh@gmail.com', '167', '55', 'AB', '2021-10-21 06:56:51', '2021-10-21 06:56:51'),
(2, 'Lâm', 'Nguyễn Sơn', '2000-12-09', 'Nam', '0321654987', 'nguyensonlam@gmail.com', '175', '70', 'O', '2021-10-21 06:56:51', '2021-10-21 06:56:51'),
(3, 'Nam', 'Phan Hoài', '2000-05-05', 'Nam', '0123456987', 'phanhoainam@gmail.com', '165', '50', 'A', '2021-10-21 06:58:53', '2021-10-21 06:58:53'),
(4, 'Anh', 'Trần Linh', '1998-07-09', 'Nữ', '0123654789', 'jemmylinh@gmail.com', '168', '49', 'B', '2021-10-21 06:58:53', '2021-10-21 06:58:53'),
(5, 'Vân', 'Đỗ Hồng', '2000-06-08', 'Nữ', '03216547890', 'dohongvan@gmail.com', '164', '46', 'A', '2021-10-21 07:00:08', '2021-10-21 07:00:08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
