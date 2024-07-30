-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 02:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_name` varchar(200) NOT NULL,
  `bill_address` varchar(200) NOT NULL,
  `bill_email` varchar(200) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 0,
  `ngaydathang` varchar(200) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0,
  `id` int(10) NOT NULL,
  `iduser` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_name`, `bill_address`, `bill_email`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `id`, `iduser`) VALUES
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 1, '10', 150000, 0, 5, 2),
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 3, '10:56:41pm 06/07/2024', 150000, 0, 8, 2),
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 3, '10:59:17pm 06/07/2024', 150000, 0, 9, 2),
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 1, '10:04:58am 12/07/2024', 1039000, 0, 10, 2),
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 1, '10:23:06am 12/07/2024', 890000, 0, 11, 2),
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 1, '10:23:24am 12/07/2024', 890000, 0, 12, 2),
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 1, '10:23:35am 12/07/2024', 1039000, 0, 13, 2),
('Trịnh Cương', '', 'biintrinh@gmail.com', '', 1, '10:27:06am 12/07/2024', 890000, 0, 14, 2),
('Long', '', 'nguyenlong@gmail.com', '', 1, '10:50:18am 12/07/2024', 890000, 0, 15, 3),
('Long', '', 'nguyenlong@gmail.com', '', 1, '10:50:46am 12/07/2024', 890000, 0, 16, 3),
('Long', '', 'nguyenlong@gmail.com', '', 1, '10:50:56am 12/07/2024', 890000, 0, 17, 3),
('Long', '', 'nguyenlong@gmail.com', '', 1, '11:02:09am 12/07/2024', 380000, 0, 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(20) NOT NULL,
  `noidung` varchar(200) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `iduser` int(20) NOT NULL,
  `idpro` int(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`iduser`, `idpro`, `img`, `name`, `size`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(3, 46, 'giay-sneaker-nam-cao-cap-g68.jpg', 'G0068- Giày Sneaker Nam', 39, 380000, 1, 380000, 18),
(3, 48, 'new-balance-530-running-navy-2.jpg', 'Giày New Balance 530 Running Navy', 38, 890000, 1, 890000, 17);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(40, 'Sneaker'),
(41, 'New Balance');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `don_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(200) NOT NULL,
  `mo_ta` text NOT NULL,
  `iddm` int(10) NOT NULL,
  `view` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `don_gia`, `img`, `mo_ta`, `iddm`, `view`) VALUES
(46, 'G0068- Giày Sneaker Nam', 380000.00, 'giay-sneaker-nam-cao-cap-g68.jpg', 'Mô tả sản phẩm:\r\nGiày Sneaker G0068 là sự kết hợp hoàn hảo giữa phong cách thời trang và tính năng tiện dụng. Thiết kế hiện đại và trẻ trung, phù hợp với nhiều hoạt động hàng ngày từ đi học, đi làm đến đi chơi.\r\n\r\nĐặc điểm nổi bật:\r\nChất liệu:\r\nThân giày: Làm từ vải lưới cao cấp, thoáng khí, giúp đôi chân luôn thoải mái và khô thoáng suốt cả ngày.\r\nĐế giày: Cao su non siêu nhẹ, có độ đàn hồi cao, tăng cường sự linh hoạt khi di chuyển.\r\nThiết kế:\r\nForm giày chuẩn, ôm vừa vặn với chân, tạo cảm giác dễ chịu khi sử dụng.\r\nMàu sắc: Đa dạng với nhiều lựa chọn (trắng, đen, xám, xanh navy), dễ dàng phối hợp với nhiều trang phục khác nhau.\r\nĐường chỉ may chắc chắn, tỉ mỉ, đảm bảo độ bền lâu dài.\r\nTính năng:\r\nĐế giày có thiết kế rãnh chống trượt, tăng cường độ bám trên nhiều bề mặt.\r\nLót giày êm ái, hỗ trợ tốt cho lòng bàn chân, giúp giảm thiểu mỏi chân khi đi lại nhiều.\r\nDễ dàng vệ sinh và bảo quản.\r\nHướng dẫn bảo quản:\r\nTránh ngâm giày trong nước quá lâu.\r\nKhông phơi giày trực tiếp dưới ánh nắng mặt trời, nên để giày khô tự nhiên ở nơi thoáng mát.\r\nVệ sinh giày bằng bàn chải mềm và dung dịch tẩy rửa nhẹ.\r\nSize và bảng kích thước:\r\nSize: 36, 37, 38, 39, 40, 41, 42, 43, 44\r\nHướng dẫn chọn size: Nên chọn size theo chiều dài chân và thói quen mang giày của bạn.\r\nGiá bán:\r\nGiá: 380000 VNĐ\r\nChính sách bảo hành:\r\nBảo hành 6 tháng với các lỗi từ nhà sản xuất.\r\nĐổi trả trong vòng 7 ngày nếu sản phẩm bị lỗi hoặc không đúng mô tả.\r\nĐặt hàng:\r\nHãy liên hệ ngay để đặt hàng và nhận được nhiều ưu đãi hấp dẫn!\r\nHotline: 1234-567-890\r\nEmail: cskh@giaystore.vn', 41, 0),
(47, 'ELMEE Giày Nam Bassic ', 149000.00, '4a4bf1020f9b00fda1439a869be48d35.jpg_720x720q80.jpg', 'Giày Sneaker Nam Giày Thể Thao Thời Trang ELMEE Giày Nam Bassic Trắng Trơn Trẻ Trung Dễ Phối Đồ Ôm Chân Tuyệt Đẹp - EN019Mã sản phẩm: EN019- Bề mặt giày được làm bằng chất liệu da Pu trơn nhẵn tạo độ bóng đẹp cho sản phẩm- Đế giày được làm bằng cao su nguyên khối chắc chắn, cùng với lớp lót trong êm ái giúp cho đôi chân của bạn luôn thoải mái khi di chuyển cũng như vận động- Đế giày có thiết kế rãnh xẻ chống trơn trượt an toàn cho người sử dụng- Khả năng hút ẩm tốt giúp cho đôi chân bạn luôn khô thoáng; hiệu quả ngăn mùi cho bạn yên tâm sử dụng- Màu sắc: Trắng- Kiểu giày: sneaker thể thao- Dùng để đi làm hay đi chơi đều phù hợp, phù hợp với nhiều loại trang phục- Size: 39-43', 41, 0),
(48, 'Giày New Balance 530 Running Navy', 890000.00, 'new-balance-530-running-navy-2.jpg', 'Đôi giày New Balance 530 – Running Navy là một sản phẩm thể thao đường phố được nhiều người đánh giá cao vì đẹp, được thiết kế để mang lại sự thoải mái và hiệu suất tối đa cho người sử dụng nên cũng được nhiều người yêu thích sneaker đường phố lựa chọn. Thiết kế của đôi giày này rất tinh tế với màu xanh Navy đường viền  giày làm nổi bật, kết hợp với các chi tiết màu trắng tạo nên sự tươi mới và cá tính cho đôi sneaker. Chất liệu vải lưới được sử dụng ở phần thân giày giúp tăng cường sự thoáng khí, giúp chân luôn khô ráo và thoải mái khi sử dụng. Đế giày được làm bằng cao su chắc chắn, với độ bền cao và khả năng chống trơn trượt. Điều này giúp người sử dụng có thể thoải mái di chuyển và tham gia vào các hoạt động thể thao mà không lo lắng về độ bền của đôi giày. Ngoài ra, đôi giày New Balance 530 – Running Navy còn được trang bị các công nghệ tiên tiến như Encap, giúp cân bằng độ đàn hồi của đế giày và giữ cho bàn chân luôn ở trạng thái ổn định, đảm bảo sự an toàn khi sử dụng. Với thiết kế thời trang, tính năng vượt trội và độ bền cao, đôi giày New Balance giá rẻ 530 – Running Navy sẽ là sự lựa chọn hoàn hảo cho những người yêu thích thể thao và đam mê phong cách cá tính. Hãy sở hữu ngay đôi giày này để tận hưởng những trải nghiệm tuyệt vời nhất.\r\n\r\nLink bài viết gốc: Giày New Balance 530 Running Navy LIKE AUTH (https://1sneaker.vn/giay-new-balance-530-running-navy/)', 41, 0),
(49, 'Casioo', 150000.00, '103.png', 'đâsd', 41, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(200) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`user`, `pass`, `email`, `address`, `tel`, `role`, `id`) VALUES
('biinnek2004', '12345', 'biintrinh@gmail.com', 'Hưng đạo 2', '09', 0, 1),
('Trịnh Cương', '123456789', 'biintrinh@gmail.com', NULL, NULL, 1, 2),
('Long', '12345', 'nguyenlong@gmail.com', NULL, NULL, 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_user_bill` (`iduser`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idpro`),
  ADD KEY `lk_id_bill` (`idbill`),
  ADD KEY `lk_user` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idpro` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `lk_user_bill` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_id_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_user` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_danhmuc_sp` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
