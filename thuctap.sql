-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2020 lúc 03:32 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuctap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai`
--

CREATE TABLE `detai` (
  `MaDT` char(6) NOT NULL,
  `TenDT` varchar(400) DEFAULT NULL,
  `NguoiHD` char(100) DEFAULT NULL,
  `ThoigianDK` date DEFAULT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detai`
--

INSERT INTO `detai` (`MaDT`, `TenDT`, `NguoiHD`, `ThoigianDK`, `Status`) VALUES
('DT0001', 'pttk web ban hang', 'Pham Van Chat', '0000-00-00', 'Đã Đăng Ký'),
('DT0002', 'pttk web mua sam', 'Tran Cong Quang', '0000-00-00', 'Đã Đăng Ký'),
('DT0003', 'pttk de tai quan ly', 'Nguyen Thi Ty', '0000-00-00', 'Chưa Đăng Ký');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detaidx`
--

CREATE TABLE `detaidx` (
  `id` int(11) NOT NULL,
  `TenDT` varchar(250) NOT NULL,
  `MoTa` text NOT NULL,
  `gvhd` varchar(150) NOT NULL,
  `DinhKem` varchar(200) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detaidx`
--

INSERT INTO `detaidx` (`id`, `TenDT`, `MoTa`, `gvhd`, `DinhKem`, `register_date`) VALUES
(2, 'Phát Triển RoBot Tự Hành', 'sdfgdfsgsdgsd', 'GV0003', 'Cách sử dụng Wiloke Notificationc Bar.docx', '2020-11-25 01:23:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` char(6) NOT NULL,
  `Makhoa` char(6) DEFAULT NULL,
  `TenGV` varchar(100) DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Dantoc` varchar(100) DEFAULT NULL,
  `Chuyennganh` varchar(100) DEFAULT NULL,
  `Hocvan` varchar(100) DEFAULT NULL,
  `Gioitinh` varchar(10) DEFAULT NULL,
  `Matkhau` varchar(100) DEFAULT NULL,
  `Diachi` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `SDT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `Makhoa`, `TenGV`, `Ngaysinh`, `Dantoc`, `Chuyennganh`, `Hocvan`, `Gioitinh`, `Matkhau`, `Diachi`, `Email`, `SDT`) VALUES
('GV0001', 'MK0001', 'Nguyen Van A', '0000-00-00', 'kinh', 'CNTT', 'Tien Si', 'Nam', '1234', 'Ha Noi', 'a@gmail.com', 1919191881),
('GV0002', 'MK0003', 'Nguyen Van B', '0000-00-00', 'kinh', 'ATTT', 'Tien Si', 'Nam', '1234', 'Thai Nguyen', 'a@gmail.com', 1919188211),
('GV0003', 'MK0002', 'Le Hung Vuong', '1998-04-27', 'kinh', 'CNTT', 'Tien Si', 'Nam', '1234', 'Thai Nguyen', 'admin@gmail.com', 1919191881);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gvdk`
--

CREATE TABLE `gvdk` (
  `idGVDK` int(10) NOT NULL,
  `MaGV` char(6) DEFAULT NULL,
  `MaDT` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `Makhoa` char(6) NOT NULL,
  `Tenkhoa` varchar(100) DEFAULT NULL,
  `Truongkhoa` varchar(50) DEFAULT NULL,
  `SoDTkhoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`Makhoa`, `Tenkhoa`, `Truongkhoa`, `SoDTkhoa`) VALUES
('MK0001', 'CNTT', 'khoa1', 875426971),
('MK0002', 'CNTT', 'khoa2', 215426971),
('MK0003', 'ATTT', 'khoa3', 355426971);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `Malop` char(6) NOT NULL,
  `Tenlop` varchar(50) DEFAULT NULL,
  `Makhoa` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`Malop`, `Tenlop`, `Makhoa`) VALUES
('ML0001', 'lop002', 'MK0002'),
('ML0002', 'lop001', 'MK0001'),
('ML0003', 'lop003', 'MK0003');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nghiemthu`
--

CREATE TABLE `nghiemthu` (
  `MaNT` char(6) NOT NULL,
  `ThoigianNT` date DEFAULT NULL,
  `ThoigianBD` date DEFAULT NULL,
  `ThoigianKT` date DEFAULT NULL,
  `Kinhphi` int(11) DEFAULT NULL,
  `Ketluan` varchar(500) DEFAULT NULL,
  `MaDT` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nghiemthu`
--

INSERT INTO `nghiemthu` (`MaNT`, `ThoigianNT`, `ThoigianBD`, `ThoigianKT`, `Kinhphi`, `Ketluan`, `MaDT`) VALUES
('NT0001', '0000-00-00', '0000-00-00', '0000-00-00', 900000, 'day du ', 'DT0001'),
('NT0002', '0000-00-00', '0000-00-00', '0000-00-00', 1200000, 'chua day du ', 'DT0003'),
('NT0003', '0000-00-00', '0000-00-00', '0000-00-00', 1000000, 'day du ', 'DT0002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` char(6) NOT NULL,
  `Malop` char(6) DEFAULT NULL,
  `TenSV` varchar(100) DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Dantoc` varchar(100) DEFAULT NULL,
  `Gioitinh` varchar(10) DEFAULT NULL,
  `Matkhau` varchar(100) DEFAULT NULL,
  `Diachi` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `SDT` int(11) DEFAULT NULL,
  `Anh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `Malop`, `TenSV`, `Ngaysinh`, `Dantoc`, `Gioitinh`, `Matkhau`, `Diachi`, `Email`, `SDT`, `Anh`) VALUES
('AT0201', 'ML0002', 'Luu Dinh Loc', '1999-01-11', 'kinh', 'nam', '1234', 'Ha Noi', 'locllu@gmail.com', 2147483647, ''),
('CT0201', 'ML0001', 'Tran Dinh Loc', '1999-11-11', 'Dao', 'nam', '1234', 'Ha Nam', 'loc@gmail.com', 183738173, '15756561245fbe1b084cfe28.28285653.JPG'),
('CT0203', 'ML0003', 'Ngo Van Hieu', '1979-11-11', 'kinh', 'nam', '1234', 'Ha Nam', 'hieupc@gmail.com', 183738173, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `svdk`
--

CREATE TABLE `svdk` (
  `idSVDK` int(10) NOT NULL,
  `MaSV` char(6) DEFAULT NULL,
  `MaDT` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `svdk`
--

INSERT INTO `svdk` (`idSVDK`, `MaSV`, `MaDT`) VALUES
(2, 'CT0201', 'DT0001'),
(3, 'AT0201', 'DT0002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `idThongBao` int(11) NOT NULL,
  `TieuDe` text NOT NULL,
  `NoiDung` text NOT NULL,
  `TaiLieuTK` varchar(150) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`idThongBao`, `TieuDe`, `NoiDung`, `TaiLieuTK`, `registration_date`) VALUES
(1, 'Đây Là Thông Báo Hệ Thống', 'Test xem có ok k hihi', '', '2020-11-27 12:21:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tiendo`
--

CREATE TABLE `tiendo` (
  `MaBC` char(6) NOT NULL,
  `ThoigianBC` date DEFAULT NULL,
  `TDTH` varchar(100) DEFAULT NULL,
  `NguoiBC` varchar(100) DEFAULT NULL,
  `Ghichu` text DEFAULT NULL,
  `MaDT` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tiendo`
--

INSERT INTO `tiendo` (`MaBC`, `ThoigianBC`, `TDTH`, `NguoiBC`, `Ghichu`, `MaDT`) VALUES
('BC0001', '0000-00-00', '80%', 'Pham Van Dung', 'kha tot', 'DT0001'),
('BC0002', '0000-00-00', '85%', 'Tran Van Nam', 'kha tot', 'DT0002'),
('BC0003', '0000-00-00', '70%', 'Nguyen Can Hung', 'kha tot', 'DT0003');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`MaDT`);

--
-- Chỉ mục cho bảng `detaidx`
--
ALTER TABLE `detaidx`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `fk_11` (`Makhoa`);

--
-- Chỉ mục cho bảng `gvdk`
--
ALTER TABLE `gvdk`
  ADD PRIMARY KEY (`idGVDK`),
  ADD KEY `fk_121131` (`MaGV`),
  ADD KEY `fk_1211531` (`MaDT`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`Makhoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`Malop`),
  ADD KEY `fk_12113531` (`Makhoa`);

--
-- Chỉ mục cho bảng `nghiemthu`
--
ALTER TABLE `nghiemthu`
  ADD PRIMARY KEY (`MaNT`),
  ADD KEY `fk_1211231` (`MaDT`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `fk_121143531` (`Malop`);

--
-- Chỉ mục cho bảng `svdk`
--
ALTER TABLE `svdk`
  ADD PRIMARY KEY (`idSVDK`),
  ADD KEY `fk_1211331` (`MaSV`),
  ADD KEY `fk_12115431` (`MaDT`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`idThongBao`);

--
-- Chỉ mục cho bảng `tiendo`
--
ALTER TABLE `tiendo`
  ADD PRIMARY KEY (`MaBC`),
  ADD KEY `fk_121121` (`MaDT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `detaidx`
--
ALTER TABLE `detaidx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `gvdk`
--
ALTER TABLE `gvdk`
  MODIFY `idGVDK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `svdk`
--
ALTER TABLE `svdk`
  MODIFY `idSVDK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `idThongBao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `fk_11` FOREIGN KEY (`Makhoa`) REFERENCES `khoa` (`Makhoa`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `gvdk`
--
ALTER TABLE `gvdk`
  ADD CONSTRAINT `fk_121131` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_1211531` FOREIGN KEY (`MaDT`) REFERENCES `detai` (`MaDT`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `fk_12113531` FOREIGN KEY (`Makhoa`) REFERENCES `khoa` (`Makhoa`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `nghiemthu`
--
ALTER TABLE `nghiemthu`
  ADD CONSTRAINT `fk_1211231` FOREIGN KEY (`MaDT`) REFERENCES `detai` (`MaDT`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `fk_121143531` FOREIGN KEY (`Malop`) REFERENCES `lop` (`Malop`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `svdk`
--
ALTER TABLE `svdk`
  ADD CONSTRAINT `fk_1211331` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_12115431` FOREIGN KEY (`MaDT`) REFERENCES `detai` (`MaDT`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tiendo`
--
ALTER TABLE `tiendo`
  ADD CONSTRAINT `fk_121121` FOREIGN KEY (`MaDT`) REFERENCES `detai` (`MaDT`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
