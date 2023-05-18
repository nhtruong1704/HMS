-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2023 lúc 06:42 PM
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
-- Cơ sở dữ liệu: `hms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `AdminPhone` varchar(20) NOT NULL,
  `AdminEmail` varchar(50) NOT NULL,
  `AdminPassword` varchar(50) NOT NULL,
  `AdminAvatar` varchar(255) NOT NULL,
  `AdminCurrentAvatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `AdminPhone`, `AdminEmail`, `AdminPassword`, `AdminAvatar`, `AdminCurrentAvatar`) VALUES
(1, 'Admin', '7 937 051-95-40', 'admin@gmail.com', '123456', '', ''),
(2, 'Victor', '7 909 889-06-71', 'victorvu@mail.ru', '123456', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `bill_total_cost` int(11) NOT NULL,
  `bill_be_paid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `receptionist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`bill_id`, `bill_no`, `bill_total_cost`, `bill_be_paid`, `customer_id`, `receptionist_id`) VALUES
(1, 'B2021001', 13400, 0, 1, 5),
(2, 'B2021002', 14200, 1, 2, 2),
(3, 'B2021003', 27100, 1, 3, 4),
(4, 'B2021004', 22400, 1, 4, 5),
(5, 'B2021005', 30000, 0, 5, 3),
(6, 'B2021006', 18700, 1, 6, 4),
(7, 'B2021007', 21800, 1, 7, 1),
(8, 'B2021008', 30800, 0, 8, 4),
(9, 'B2021009', 30000, 0, 9, 2),
(10, 'B2021010', 26000, 1, 10, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chef`
--

CREATE TABLE `chef` (
  `ChefId` int(11) NOT NULL,
  `ChefName` varchar(50) NOT NULL,
  `ChefPosition` varchar(15) NOT NULL,
  `ChefSalary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chef`
--

INSERT INTO `chef` (`ChefId`, `ChefName`, `ChefPosition`, `ChefSalary`) VALUES
(1, 'Xiangling', 'Main', 30000),
(2, 'Diona', 'Sub', 40000),
(3, 'Hutao', 'Main', 50000),
(4, 'Barbara', 'Sub', 15000),
(5, 'Jean', 'Sub', 48000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `CustomerPhone` varchar(20) NOT NULL,
  `CustomerAddress` varchar(255) NOT NULL,
  `CustomerEmail` varchar(50) NOT NULL,
  `CustomerIsVip` int(11) NOT NULL,
  `CustomerPassword` varchar(50) NOT NULL,
  `CustomerDOB` varchar(20) NOT NULL,
  `CustomerGender` int(11) NOT NULL,
  `CustomerAvatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `CustomerPhone`, `CustomerAddress`, `CustomerEmail`, `CustomerIsVip`, `CustomerPassword`, `CustomerDOB`, `CustomerGender`, `CustomerAvatar`) VALUES
(1, 'Albedo', '7 936 761-22-58', 'Russia', 'albedo@gmail.com', 0, '123456', '01.01.1998', 1, ''),
(2, 'Aloy', '7 979 873-34-85', 'America', 'aloy@hotmail.com', 1, '123456', '02.01.2000', 0, ''),
(3, 'Fischl', '7 932 950-78-97', 'France', 'fischl@mail.ru', 0, '123456', '13.02.1997', 0, ''),
(4, 'Beidou', '7 954 601-49-72', 'China', 'beidou@mail.ru', 1, '123456', '04.01.1994', 0, ''),
(5, 'Kaedehara Kazuha', '7 937 051-95-69', 'Japan', 'kaedeharakazuha@mail.ru', 0, '123456', '25.01.1991', 1, ''),
(6, 'Diluc', '7 909 889-06-71', 'Vienam', 'diluc@mail.ru', 0, '123456', '06.04.1998', 1, ''),
(7, 'Eula', '7 907 447-19-50', 'Korea', 'eula@mail.ru', 1, '123456', '07.01.2001', 0, ''),
(8, 'Kujou Sara', '7 962 383-13-46', 'England', 'kujousara@mail.ru', 1, '123456', '08.06.1998', 0, ''),
(9, 'Tartaglia', '7 934 886-20-13', 'Italy', 'tartaglia@mail.ru', 0, '123456', '19.02.1992', 1, ''),
(13, 'Truong', '16549646', 'oksjdfkjsdkfjoas', 'truongnhat@gmail.com', 1, '123456', '05/18/2023', 1, 'NO_IMAGE_ADD_CUSTOMER'),
(14, 'what truong', '4665164', 'asdfasdgsadg', 'sadfsadfa@mail.com', 0, '123456', '05/18/2023', 1, 'NO_IMAGE_ADD_CUSTOMER');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(50) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_position` varchar(50) NOT NULL,
  `employee_salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_position`, `employee_salary`) VALUES
(1, 'Zhongli', 'Receptionist', '9000'),
(2, 'Yoimiya', 'Receptionist', '8000'),
(3, 'Sucrose', 'Receptionist', '10000'),
(4, 'Sayu', 'Receptionist', '8500'),
(5, 'Rosaria', 'Receptionist', '9000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fooditem`
--

CREATE TABLE `fooditem` (
  `FoodItemId` int(11) NOT NULL,
  `FoodItemName` varchar(50) NOT NULL,
  `FoodItemPrice` int(11) NOT NULL,
  `FoodItemDes` varchar(255) NOT NULL,
  `FoodItemImage` varchar(255) NOT NULL,
  `FoodItemCurrentImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `fooditem`
--

INSERT INTO `fooditem` (`FoodItemId`, `FoodItemName`, `FoodItemPrice`, `FoodItemDes`, `FoodItemImage`, `FoodItemCurrentImage`) VALUES
(1, 'Chilli and pineapple jam', 3000, 'A sweet jam made from habanero chilli and fresh pineapple', '', 'NO_CURRENT_IMAGE_FOOD_ITEM_UPDATE'),
(2, 'Rhubarb and cardamom cheesecake', 3200, 'A rich cheesecake layered with fresh rhubarb and green cardamom', '', 'NO_CURRENT_IMAGE_FOOD_ITEM_UPDATE'),
(3, 'Bran and orange muffins', 1200, 'Crumbly muffins made with bran and sweet orange', '', ''),
(4, 'Cucumber and egg maki', 1500, 'Toasted seaweed wrapped around sushi rice, filled with fresh cucumber and free range eggs', '', ''),
(5, 'Mandarine and kumquat jam', 700, 'A sweet jam made from fresh mandarine and kumquat', '', ''),
(6, 'Sausage and spinach wontons', 3000, 'Thin wonton cases stuffed with spicy sausage and fresh spinach', '', ''),
(7, 'Almond and pecan pancake', 4000, 'Fluffy pancake filled with blanched almond and pecan', '', ''),
(8, 'Eel and mango cake', 3200, 'Rich cake made with eel and fresh mango', '', ''),
(9, 'Chilli and cocoa cake', 1400, 'Rich cake made with hot chilli and cocoa', '', ''),
(10, 'Honey and bran biscuits', 1900, 'Crunchy biscuits made with acacia honey and bran', '', ''),
(11, 'Hazelnut and spinach pancake', 1000, 'Crispy pancake filled with hazelnut and fresh spinach', '', ''),
(12, 'Raspberry and soda bread', 1400, 'Crunchy bread made with fresh raspberry and soda', '', ''),
(13, 'Date and pumpkin seed cupcakes', 1800, 'Crumbly cupcakes made with moist date and pumpkin seeds', '', ''),
(14, 'Grouse and crayfish panini', 2600, 'A hot, pressed panini filled with grouse and crayfish', '', ''),
(15, 'Blackcurrant and thyme cake', 700, 'Rich cake made with fresh blackcurrant and dried thyme', '', ''),
(16, 'Jalapeno and persimmon wontons', 1800, 'Thin wonton cases stuffed with fresh jalapeno and persimmon', '', ''),
(17, 'Sorrel and lemon biscuits', 4100, 'Crunchy biscuits made with sorrel and tangy lemon', '', ''),
(18, 'Rosemary and stilton parcels', 2900, 'Thin filo pastry cases stuffed with dried rosemary and stilton', '', ''),
(19, 'Falafel and grouse bagel', 4000, 'A warm bagel filled with falafel and grouse', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foodorder`
--

CREATE TABLE `foodorder` (
  `foodorder_id` int(11) NOT NULL,
  `foodorder_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `foodorder`
--

INSERT INTO `foodorder` (`foodorder_id`, `foodorder_no`) VALUES
(1, 2021001),
(2, 2021002),
(3, 2021003),
(4, 2021004),
(5, 2021005),
(6, 2021006),
(7, 2021007),
(8, 2021008),
(9, 2021009),
(10, 2021010);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `housekeeping`
--

CREATE TABLE `housekeeping` (
  `HousekeepingId` int(11) NOT NULL,
  `HousekeepingName` varchar(50) NOT NULL,
  `HousekeepingSalary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `housekeeping`
--

INSERT INTO `housekeeping` (`HousekeepingId`, `HousekeepingName`, `HousekeepingSalary`) VALUES
(1, 'Sangonomiya Kokomi', 19000),
(2, 'Qiqi', 15000),
(3, 'Klee', 12000),
(4, 'Xiao', 18000),
(5, 'Ningguang', 29000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receptionist`
--

CREATE TABLE `receptionist` (
  `ReceptionistId` int(11) NOT NULL,
  `ReceptionistName` varchar(50) NOT NULL,
  `ReceptionistSalary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `receptionist`
--

INSERT INTO `receptionist` (`ReceptionistId`, `ReceptionistName`, `ReceptionistSalary`) VALUES
(1, 'Zhongli', 9000),
(2, 'Yoimiya', 8000),
(3, 'Sucrose', 10000),
(4, 'Sayu', 8500),
(5, 'Rosaria', 9000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `RoomId` int(11) NOT NULL,
  `RoomName` varchar(20) NOT NULL,
  `RoomPrice` int(11) NOT NULL,
  `RoomDes` varchar(255) NOT NULL,
  `RoomImage` varchar(255) NOT NULL,
  `RoomCurrentImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`RoomId`, `RoomName`, `RoomPrice`, `RoomDes`, `RoomImage`, `RoomCurrentImage`) VALUES
(1, 'A100', 3000, 'Large room, can accommodate 6 people, near the center area', '', ''),
(2, 'A101', 5000, 'Large room, can accommodate 4 people, near the center ', '', 'NO_CURRENT_IMAGE_ROOM_UPDATE'),
(3, 'A102', 6000, 'Large room, can accommodate 5 people, near the center area', '', ''),
(4, 'A103', 4000, 'Large room, can accommodate 3 people, near the center area', '', ''),
(5, 'A104', 2000, 'Large room, can accommodate 2 people, near the center area', '', ''),
(6, 'A105', 4000, 'Large room, can accommodate 4 people, near the center area', '', ''),
(7, 'A106', 2000, 'Large room, can accommodate 6 people, near the center area', '', ''),
(8, 'A107', 4000, 'Large room, can accommodate 5 people, near the center area', '', ''),
(9, 'A108', 3000, 'Large room, can accommodate 2 people, near the center area', '', ''),
(10, 'A109', 3000, 'Large room, can accommodate 4 people, near the center area', '', ''),
(11, 'A110', 5000, 'Large room, can accommodate 3 people, near the center area', '', ''),
(12, 'B201', 6000, 'Large room, can accommodate 2 people, near the center area', '', ''),
(13, 'B202', 4000, 'Large room, can accommodate 6 people, near the center area', '', ''),
(14, 'B203', 2000, 'Large room, can accommodate 7 people, near the center area', '', ''),
(15, 'B204', 4000, 'Large room, can accommodate 4 people, near the center area', '', ''),
(16, 'B205', 2000, 'Large room, can accommodate 6 people, near the center area', '', ''),
(17, 'B206', 4000, 'Large room, can accommodate 7 people, near the center area', '', ''),
(18, 'B207', 3000, 'Large room, can accommodate 4 people, near the center area', '', ''),
(19, 'B208', 9000, 'Large room, can accommodate 10 people, near the center area', '', ''),
(20, 'B209', 4000, 'Large room, can accommodate 2 people, near the center area', '', ''),
(21, 'B210', 2000, 'Large room, can accommodate 7 people, near the center area', '', ''),
(22, 'C301', 4000, 'Large room, can accommodate 8 people, near the center area', '', ''),
(23, 'C302', 2000, 'Large room, can accommodate 2 people, near the center area', '', ''),
(24, 'C303', 4000, 'Large room, can accommodate 3 people, near the center area', '', ''),
(25, 'C304', 6000, 'Large room, can accommodate 2 people, near the center area', '', ''),
(26, 'C305', 4000, 'Large room, can accommodate 6 people, near the center area', '', ''),
(27, 'C306', 2000, 'Large room, can accommodate 1 people, near the center area', '', ''),
(28, 'C307', 4000, 'Large room, can accommodate 5 people, near the center area', '', ''),
(29, 'C308', 3000, 'Large room, can accommodate 1 people, near the center area', '', ''),
(30, 'C309', 6000, 'Large room, can accommodate 7 people, near the center area', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `receptionist_id` (`receptionist_id`);

--
-- Chỉ mục cho bảng `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`ChefId`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Chỉ mục cho bảng `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`FoodItemId`);

--
-- Chỉ mục cho bảng `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`foodorder_id`);

--
-- Chỉ mục cho bảng `housekeeping`
--
ALTER TABLE `housekeeping`
  ADD PRIMARY KEY (`HousekeepingId`);

--
-- Chỉ mục cho bảng `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`ReceptionistId`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chef`
--
ALTER TABLE `chef`
  MODIFY `ChefId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `FoodItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `foodorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `housekeeping`
--
ALTER TABLE `housekeeping`
  MODIFY `HousekeepingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `ReceptionistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `RoomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`CustomerId`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionist` (`ReceptionistId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
