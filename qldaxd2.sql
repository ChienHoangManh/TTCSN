-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 01:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldaxd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE `baocao` (
  `ID_BaoCao` bigint(10) NOT NULL,
  `FK_ID_NguoiBaoCao` bigint(10) NOT NULL,
  `FK_ID_TienDo` bigint(10) NOT NULL,
  `TenBaoCao` varchar(50) NOT NULL,
  `Ngay` date NOT NULL,
  `LoaiBaoCao` varchar(30) NOT NULL,
  `NoiDungBaoCao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baocao`
--

INSERT INTO `baocao` (`ID_BaoCao`, `FK_ID_NguoiBaoCao`, `FK_ID_TienDo`, `TenBaoCao`, `Ngay`, `LoaiBaoCao`, `NoiDungBaoCao`) VALUES
(6, 12, 4, 'Báo Cáo 1', '2023-12-06', 'Tài Chính', 'Chi tiêu hợp lý'),
(8, 13, 4, 'Báo Cáo 2', '2023-12-01', 'Tài Chính', 'ccccccccccccccccccccccccccccc'),
(13, 15, 5, 'Báo Cáo 3', '2023-11-29', 'Công Trính', 's'),
(14, 12, 4, 'Báo cáo 4', '2023-12-06', 'Công Trính', 'check'),
(15, 12, 5, 'Báo cáo 5', '2023-12-29', 'Công Trính gggggggg', 'sadwadawd');

-- --------------------------------------------------------

--
-- Table structure for table `chitietngansach`
--

CREATE TABLE `chitietngansach` (
  `ID_ChiTietNganSach` bigint(10) NOT NULL,
  `FK_ID_NganSach` bigint(10) NOT NULL,
  `LoaiNganSach` varchar(30) NOT NULL,
  `SoLuong` bigint(30) NOT NULL,
  `DonGia` bigint(30) NOT NULL,
  `ThanhTien` mediumint(50) NOT NULL,
  `ThongTinKhac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietngansach`
--

INSERT INTO `chitietngansach` (`ID_ChiTietNganSach`, `FK_ID_NganSach`, `LoaiNganSach`, `SoLuong`, `DonGia`, `ThanhTien`, `ThongTinKhac`) VALUES
(17, 6, 'Thu', 10, 12, 120, 'mua sắt'),
(18, 6, 'Chi', 123, 1234, 151782, 'eCC');

-- --------------------------------------------------------

--
-- Table structure for table `chitiettiendo`
--

CREATE TABLE `chitiettiendo` (
  `ID_ChiTietTienDo` bigint(10) NOT NULL,
  `FK_ID_TienDo` bigint(10) NOT NULL,
  `NguoiBaoCao` varchar(30) NOT NULL,
  `Ngay` date NOT NULL,
  `ChiTietCongViec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiettiendo`
--

INSERT INTO `chitiettiendo` (`ID_ChiTietTienDo`, `FK_ID_TienDo`, `NguoiBaoCao`, `Ngay`, `ChiTietCongViec`) VALUES
(5, 4, 'Hoàng Mạnh Chiến', '2023-12-06', 'Nhân công hoạt động chu đáo'),
(16, 4, 'Nguyễn Thế An', '2023-12-29', 'Đang hoàn thiện'),
(17, 4, 'Nguyễn Thế An', '2023-12-29', 'Đang hoàn thiện');

-- --------------------------------------------------------

--
-- Table structure for table `ngansach`
--

CREATE TABLE `ngansach` (
  `ID_NganSach` bigint(50) NOT NULL,
  `FK_ID_TienDo` bigint(10) NOT NULL,
  `MaNganSach` varchar(30) NOT NULL,
  `NganSachBanDau` bigint(50) NOT NULL,
  `CacKhoanChiPhi` bigint(50) NOT NULL,
  `CacKhoanThu` bigint(50) NOT NULL,
  `TongSoDuHienTai` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngansach`
--

INSERT INTO `ngansach` (`ID_NganSach`, `FK_ID_TienDo`, `MaNganSach`, `NganSachBanDau`, `CacKhoanChiPhi`, `CacKhoanThu`, `TongSoDuHienTai`) VALUES
(6, 4, 'MNSS4', 123456, 120, 151782, -28206),
(7, 7, 'MNSS5', 123, 4, 0, 127);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID_NguoiDung` bigint(10) NOT NULL,
  `HoTen` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `SDT` int(20) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `TenDangNhap` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `ChucVu` enum('NhanVien','QuanTriVien') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ID_NguoiDung`, `HoTen`, `Email`, `SDT`, `DiaChi`, `TenDangNhap`, `MatKhau`, `ChucVu`) VALUES
(12, 'Hoàng Mạnh Chiến', 'a@gmail.com', 978723222, 'a', 'hoangmanhchien', '123', 'QuanTriVien'),
(13, 'check', 'b@gmail.com', 2147483647, 'Ninh Bình', 'b', 'b', 'NhanVien'),
(15, 'Cảnh', 'an@gmail.com', 12345, 'Hà Nam', 'd', 'd', 'QuanTriVien'),
(16, 'Trần Công Đại Dương', 'duongboi@gmail.com', 2147483647, 'Vĩnh Phúc', 'duong', '', 'QuanTriVien'),
(18, 'Nguyễn Thế An', 'a@gmail.com', 2147483647, 'Vĩnh Phúc', 'f', 'f', 'NhanVien');

-- --------------------------------------------------------

--
-- Table structure for table `nguonluc`
--

CREATE TABLE `nguonluc` (
  `ID_NguonLuc` bigint(10) NOT NULL,
  `FK_ID_TienDo` bigint(10) NOT NULL,
  `MaNguonLuc` varchar(10) NOT NULL,
  `TenNguonLuc` varchar(30) NOT NULL,
  `LoaiNguonLuc` varchar(30) NOT NULL,
  `TrangThai` varchar(30) NOT NULL,
  `MoTa` varchar(30) NOT NULL,
  `ThongTinKhac` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguonluc`
--

INSERT INTO `nguonluc` (`ID_NguonLuc`, `FK_ID_TienDo`, `MaNguonLuc`, `TenNguonLuc`, `LoaiNguonLuc`, `TrangThai`, `MoTa`, `ThongTinKhac`) VALUES
(24, 7, '222c', 'Nhôm', 'Vật Liệu', 'ko sử dụng', 'aaa', 'aaaa'),
(29, 5, '123', 'Xe ô tô', 'Thiết Bị', 'Đang hoạt đồng', '', ''),
(30, 7, '123', 'Xe ô tô', 'Thiết Bị', 'Đang hoạt đồng', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tiendo`
--

CREATE TABLE `tiendo` (
  `ID_CongTrinh` bigint(10) NOT NULL,
  `FK_ID_NguoiQuanLy` bigint(10) NOT NULL,
  `TenCongTrinh` varchar(50) NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayHoanThanhDuKien` date NOT NULL,
  `TienDoThucTe` varchar(50) NOT NULL,
  `NganSachDuChi` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiendo`
--

INSERT INTO `tiendo` (`ID_CongTrinh`, `FK_ID_NguoiQuanLy`, `TenCongTrinh`, `NgayBatDau`, `NgayHoanThanhDuKien`, `TienDoThucTe`, `NganSachDuChi`) VALUES
(4, 12, 'Công Trình 1', '2023-12-01', '2023-12-02', 'Đang hoàn thiện', 10000000),
(5, 15, 'Công Trình 2', '2023-12-01', '2023-12-16', 'Đang hoàn thiện', 20000000),
(7, 18, 'Công Trình 3', '2023-12-01', '2023-12-02', 'Đang hoàn thiện', 0),
(8, 12, 'Công trình xây dựng FPT', '2023-12-03', '2023-12-26', '', 0),
(9, 16, 'Công trình xây dựng Haui', '2023-12-07', '2023-12-29', '', 0),
(10, 18, 'Công trình xây dựng FPT22', '2023-06-07', '2023-12-21', '', 2000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baocao`
--
ALTER TABLE `baocao`
  ADD PRIMARY KEY (`ID_BaoCao`),
  ADD KEY `FK_ID_NguoiBaoCao` (`FK_ID_NguoiBaoCao`),
  ADD KEY `FK_ID_TienDo` (`FK_ID_TienDo`);

--
-- Indexes for table `chitietngansach`
--
ALTER TABLE `chitietngansach`
  ADD PRIMARY KEY (`ID_ChiTietNganSach`),
  ADD KEY `FK_ID_NGANSACH` (`FK_ID_NganSach`);

--
-- Indexes for table `chitiettiendo`
--
ALTER TABLE `chitiettiendo`
  ADD PRIMARY KEY (`ID_ChiTietTienDo`),
  ADD KEY `FK_ID_TienDo2` (`FK_ID_TienDo`);

--
-- Indexes for table `ngansach`
--
ALTER TABLE `ngansach`
  ADD PRIMARY KEY (`ID_NganSach`),
  ADD KEY `FK_ID_TienDo3` (`FK_ID_TienDo`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID_NguoiDung`);

--
-- Indexes for table `nguonluc`
--
ALTER TABLE `nguonluc`
  ADD PRIMARY KEY (`ID_NguonLuc`),
  ADD KEY `FK_ID_TienDo4` (`FK_ID_TienDo`);

--
-- Indexes for table `tiendo`
--
ALTER TABLE `tiendo`
  ADD PRIMARY KEY (`ID_CongTrinh`),
  ADD KEY `FK_ID_NguoiQuanLy` (`FK_ID_NguoiQuanLy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baocao`
--
ALTER TABLE `baocao`
  MODIFY `ID_BaoCao` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chitietngansach`
--
ALTER TABLE `chitietngansach`
  MODIFY `ID_ChiTietNganSach` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chitiettiendo`
--
ALTER TABLE `chitiettiendo`
  MODIFY `ID_ChiTietTienDo` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ngansach`
--
ALTER TABLE `ngansach`
  MODIFY `ID_NganSach` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ID_NguoiDung` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nguonluc`
--
ALTER TABLE `nguonluc`
  MODIFY `ID_NguonLuc` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tiendo`
--
ALTER TABLE `tiendo`
  MODIFY `ID_CongTrinh` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baocao`
--
ALTER TABLE `baocao`
  ADD CONSTRAINT `FK_ID_NguoiBaoCao` FOREIGN KEY (`FK_ID_NguoiBaoCao`) REFERENCES `nguoidung` (`ID_NguoiDung`),
  ADD CONSTRAINT `FK_ID_TienDo` FOREIGN KEY (`FK_ID_TienDo`) REFERENCES `tiendo` (`ID_CongTrinh`);

--
-- Constraints for table `chitietngansach`
--
ALTER TABLE `chitietngansach`
  ADD CONSTRAINT `FK_ID_NGANSACH` FOREIGN KEY (`FK_ID_NganSach`) REFERENCES `ngansach` (`ID_NganSach`);

--
-- Constraints for table `chitiettiendo`
--
ALTER TABLE `chitiettiendo`
  ADD CONSTRAINT `FK_ID_TienDo2` FOREIGN KEY (`FK_ID_TienDo`) REFERENCES `tiendo` (`ID_CongTrinh`);

--
-- Constraints for table `ngansach`
--
ALTER TABLE `ngansach`
  ADD CONSTRAINT `FK_ID_TienDo3` FOREIGN KEY (`FK_ID_TienDo`) REFERENCES `tiendo` (`ID_CongTrinh`);

--
-- Constraints for table `nguonluc`
--
ALTER TABLE `nguonluc`
  ADD CONSTRAINT `FK_ID_TienDo4` FOREIGN KEY (`FK_ID_TienDo`) REFERENCES `tiendo` (`ID_CongTrinh`);

--
-- Constraints for table `tiendo`
--
ALTER TABLE `tiendo`
  ADD CONSTRAINT `FK_ID_NguoiQuanLy` FOREIGN KEY (`FK_ID_NguoiQuanLy`) REFERENCES `nguoidung` (`ID_NguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
