-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2021 lúc 03:24 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoez_db3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_username`, `admin_password`, `admin_email`, `level`, `token`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', 1, ''),
(3, 'admin1', '$2y$10$z5aBB9OJLGKKcdYFrY49Iuhz3PZVDHmosJhwQFZuDI8MC7et6ydje', 'thoai@gmail.com', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` varchar(5) NOT NULL,
  `ten_brand` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `ten_brand`) VALUES
('A01', 'Adidas'),
('C01', 'Converse'),
('C02', 'Converse x Off-White'),
('C03', 'Nike x Javis Scott'),
('N01', 'Nike'),
('O01', 'Off White'),
('TV01', 'Travis Scott');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_nguoiban` int(11) NOT NULL,
  `id_giay` int(6) NOT NULL,
  `soluong` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hd`, `id_nguoiban`, `id_giay`, `soluong`) VALUES
(2112270001, 2112270001, 3, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `ngayhd` datetime NOT NULL,
  `diachigiao` varchar(32) DEFAULT NULL,
  `idkhach` int(11) NOT NULL,
  `trangthai` int(1) NOT NULL,
  `tongtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `ngayhd`, `diachigiao`, `idkhach`, `trangthai`, `tongtien`) VALUES
(2112270001, '2021-12-27 11:27:21', '68 Le Loi, P2, Tp.CM', 1000000001, 1, 12500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonshoez`
--

CREATE TABLE `hoadonshoez` (
  `id_hoadon` int(11) NOT NULL,
  `ten_khachhang` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email_Khach` varchar(255) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tonghoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadonshoez`
--

INSERT INTO `hoadonshoez` (`id_hoadon`, `ten_khachhang`, `diachi`, `email_Khach`, `sodienthoai`, `ngaydathang`, `tonghoadon`) VALUES
(183, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 05:56:34', 83200000),
(184, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 05:57:30', 86400000),
(185, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 05:59:02', 86400000),
(186, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic18@gmail.com', 849230500, '2021-12-30 05:59:33', 89600000),
(187, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic18@gmail.com', 849230500, '2021-12-30 06:00:05', 89600000),
(188, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic18@gmail.com', 849230500, '2021-12-30 06:00:15', 3200000),
(189, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic19@gmail.com', 849230500, '2021-12-30 06:00:28', 6400000),
(190, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic20@gmail.com', 849230500, '2021-12-30 06:01:00', 9600000),
(191, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic20@gmail.com', 849230500, '2021-12-30 06:01:37', 9600000),
(192, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic20@gmail.com', 849230500, '2021-12-30 06:02:01', 9600000),
(193, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:03:15', 12800000),
(194, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:03:41', 12800000),
(195, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:07:42', 12800000),
(196, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:21:30', 12800000),
(197, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:21:34', 12800000),
(198, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:21:39', 16000000),
(199, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:22:31', 16000000),
(200, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:22:48', 16000000),
(201, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:23:34', 16000000),
(202, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:23:45', 16000000),
(203, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:23:56', 16000000),
(204, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:24:32', 16000000),
(205, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:31:39', 16000000),
(206, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:43:38', 16000000),
(207, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:44:04', 16000000),
(208, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:44:13', 16000000),
(209, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:44:21', 16000000),
(210, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:48:46', 16000000),
(211, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:48:53', 16000000),
(212, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:49:13', 16000000),
(213, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:49:22', 16000000),
(214, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:50:08', 16000000),
(215, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:50:11', 16000000),
(216, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic21@gmail.com', 849230500, '2021-12-30 06:50:29', 16000000),
(217, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic2@gmail.com', 849230500, '2021-12-30 06:50:45', 19200000),
(218, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic23@gmail.com', 849230500, '2021-12-30 06:50:59', 22400000),
(219, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic23@gmail.com', 849230500, '2021-12-30 06:51:38', 22400000),
(220, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic23@gmail.com', 849230500, '2021-12-30 06:52:52', 22400000),
(221, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic23@gmail.com', 849230500, '2021-12-30 06:53:09', 22400000),
(222, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic23@gmail.com', 849230500, '2021-12-30 07:07:58', 22400000),
(223, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic23@gmail.com', 849230500, '2021-12-30 07:10:50', 22400000),
(224, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic23@gmail.com', 849230500, '2021-12-30 07:11:10', 22400000),
(225, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 07:28:53', 0),
(226, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 07:32:12', 22400000),
(227, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 07:33:04', 32000000),
(228, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic16@gmail.com', 849230500, '2021-12-30 07:33:25', 35200000),
(229, 'thoainguyen', '28 DInh Binh Ca Mau', 'trungtoxic7@gmail.com', 849230500, '2021-12-30 07:37:32', 39400000),
(230, 'thoainguyen', '28 DInh Binh Ca Mau', 'trungtoxic7@gmail.com', 849230500, '2021-12-30 11:59:07', 63900000),
(231, 'thoainguyen', '28 DInh Binh Ca Mau', 'trungtoxic7@gmail.com', 849230500, '2021-12-30 11:59:36', 67100000),
(232, 'thoainguyen', '28 DInh Binh Ca Mau', 'trungtoxic7@gmail.com', 849230500, '2021-12-30 12:06:46', 86200000),
(233, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic7@gmail.com', 849230500, '2021-12-30 12:20:33', 107400000),
(234, 'thoainguyen', '28 DInh Binh Ca Mau', 'luke3@gmail.com', 849230500, '2021-12-30 12:20:57', 110600000),
(235, 'trung nguyen ', '28 DInh Binh Ca Mau', 'testko@gmail.com', 849230500, '2021-12-30 12:21:27', 110600000),
(236, 'trung nguyen ', '28 DInh Binh Ca Mau', 'testko2@gmail.com', 944161852, '2021-12-30 12:28:31', 110600000),
(237, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 12:28:38', 110600000),
(238, 'trung nguyen ', '28 DInh Binh Ca Mau', 'luke3@gmail.com', 849230500, '2021-12-30 12:28:59', 110600000),
(239, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic15@gmail.com', 849230500, '2021-12-30 12:31:48', 110600000),
(240, 'trung nguyen ', '28 DInh Binh Ca Mau', 'trungtoxic7@gmail.com', 849230500, '2021-12-30 12:51:09', 123400000),
(241, 'trung nguyen ', '28 DInh Binh Ca Mau', 'newtest@gmail.com', 849230500, '2021-12-30 13:03:17', 129800000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(6) NOT NULL,
  `ten` text NOT NULL,
  `id_brand` varchar(5) DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `gia` bigint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `ten`, `id_brand`, `image`, `description`, `gia`) VALUES
(1, 'Adidas EQT Cushion ADV', 'A01', 'edv1.png', 'Chất liệu cao su tổng hợp nhẹ và mềm được sử dụng ở phần trên để vừa ôm chân vừa tạo đường nét và thoáng khí. Vẫn đúng với adidas EQTs đầu tiên, ra mắt vào đầu những năm 90, Cushion ADV có hệ thống viền tích hợp trên hông.\r\n\r\nViệc bổ sung một bộ đếm gót da lộn giúp tăng thêm sự tinh tế và một lớp phủ tổng hợp chunky nằm ở gót chân. Cuối cùng, đế giữa có tông màu nằm dưới chân. Đây là EQT đầu tiên có các plug đế giữa bằng EVA chunky mang lại vẻ ngoài hiện đại hơn cho đôi giày.', 3200000),
(2, 'Adidas EQT Cushion ADV North America', 'A01', 'advna1.png', 'Chất liệu cao su tổng hợp nhẹ và mềm được sử dụng ở phần trên để vừa ôm chân vừa tạo đường nét và thoáng khí. Vẫn đúng với adidas EQTs đầu tiên, ra mắt vào đầu những năm 90, Cushion ADV có hệ thống viền tích hợp trên hông.\r\n\r\nViệc bổ sung một bộ đếm gót da lộn giúp tăng thêm sự tinh tế và một lớp phủ tổng hợp chunky nằm ở gót chân. Cuối cùng, đế giữa có tông màu nằm dưới chân. Đây là EQT đầu tiên có các plug đế giữa bằng EVA chunky mang lại vẻ ngoài hiện đại hơn cho đôi giày.', 5300000),
(3, 'Adidas Mens Future Hydro', 'A01', 'hydro1.png', 'Sản phẩm này được làm bằng Primegreen, một loạt vật liệu tái chế hiệu suất cao. 50% trên là nội dung tái chế. Không có polyester nguyên chất.\r\nCác khu vực biểu diễn được mã hóa chính xác kết hợp sự ổn định tốt nhất, sự thoải mái tốt nhất và khả năng hấp thụ tốt nhất của chúng tôi để bạn có thể chinh phục những con đường thành phố không thể đoán trước.', 5000000),
(4, 'Adidas NMD R1 Energy Orange', 'A01', 'eneorange1.png', 'Tự hào với thiết kế lấy cảm hứng từ một số mẫu Adidas cổ điển (Micro Pacer, Rising Star và Boston Super), Adidas NMD Runner là một đôi giày thể thao cực kỳ thoải mái với thiết kế hiện đại. Chúng được chế tạo với phần trên bằng vải dệt thoáng khí và linh hoạt, công nghệ Boost hoàn trả năng lượng, huy hiệu ở gót chân, cấu trúc bootie và đế ngoài bằng cao su có màng.', 3000000),
(5, 'Adidas NMD R1 Molded Stripes Black', 'A01', 'stripes1.png', 'Một phong cách sẵn sàng cho đường phố với sự đổi mới. Đôi giày lấy cảm hứng từ chạy bộ này ôm chân với phần trên bằng vải dệt kim có nhiều chi tiết thương hiệu NMD. Đế giữa Boost cung cấp sự thoải mái đáp ứng, được tạo điểm nhấn bởi các phích cắm NMD đặc biệt.', 6800000),
(6, 'Adidas Performance Zx 4D', 'A01', 'zx4d1.png', 'Hòa trộn giữa các yếu tố văn hóa và tiến bộ kỹ thuật, mẫu giày ZX mới ra đời với hiệu ứng chuyển màu đầy cá tính. Giữ nguyên tinh thần tân tiến của dòng ZX, đôi giày này có đế giữa adidas 4D hiện đại vượt trội và nổi bật giữa đám đông với thân giày bằng vải lưới táo bạo.', 2990000),
(7, 'Adidas PW Solar Humd Inspiration Pack', 'A01', 'humd1.png', 'Hiện đại và thời trang khi diện item mới của Adidas. Màu sắc lạ mắt, chất liệu thoáng mát, nhẹ nhàng, phù hợp với những chàng trai yêu phong cách sports.\r\nChất liệu cao cấp EVA, PU, Cushlon, Phylon. Bền, chống bám bẩn, dễ dàng lau chùi. Mũi giày đầy đặn, form dáng chuẩn. Bảo vệ đầu ngón chân khi hoạt động. Có lớp lót đệm bên trong.\r\nÊm, di chuyển nhiều không bị đau chân. Cổ giày thiết kế đơn giản, vừa vặn. Di chuyển dễ dàng, thoải mái. Đế bằng chất liệu cao su. Êm ái, độ bám tốt, chống trơn trượt.', 7200000),
(8, 'Adidas Ultra Boost 4 Multi Pink', 'A01', 'multipink1.png', 'Giày Adidas Ultra Boost 4.0 Multi Pink là một đôi giày gây ấn tượng cho bất cứ ai nhìn lần đầu. Nhưng nhờ vào thiết kế đơn giản hóa, toàn bộ đôi giày lấy màu trắng làm màu chủ đạo cùng phối màu được nhận biết. Giày Adidas Ultra Boost 4.0 Multi Pink cũng nhanh chóng trở thành một hiện tượng ngay khi “ra đời” và cho đến tận bây giờ, nó vẫn được yêu thích vì sự đa dụng, dễ đi, dễ phối và hợp nhiều phong cách khác nhau.', 3800000),
(9, 'Adidas Ultra Boost Mineral Green', 'A01', 'mineralgreen1.png', 'Là đôi giày hàng đầu của năm 2015 trong bộ sưu tập adidas Boost, Ultra Boost đi kèm với đế giữa boost ™ hoàn trả năng lượng có chiều dài đầy đủ và phần trên Primeknit mang lại sự vừa vặn chính xác.\r\nUltra Boost có phần trên Primeknit mang lại sự vừa vặn chính xác với phần trên bằng vải dệt liền mạch, trong khi hỗ trợ TORSION® SYSTEM cung cấp tính toàn vẹn của bàn chân giữa và chuyển tiếp tràn đầy năng lượng và đế ngoài Stretch Web mang lại độ bền tối ưu. Bộ đếm gót chân được thiết kế mới giúp ôm gót chân tối ưu.', 4200000),
(10, 'Adidas Yeezy Boost 350 V2', 'A01', 'yezzy350v21.png', 'Được phát hành vào ngày 25 tháng 2 năm 2017, Adidas Yeezy Boost 350 V2 ‘Zebra’ kết hợp giữa phần upper Primeknit màu trắng / lõi đen với thương hiệu SPLY 350 màu đỏ và phần đế giữa màu trắng trong mờ có đầy đủ chiều dài của Boost. Được bán độc quyền tại adidas.com, Yeezy Supply và một số cửa hàng hàng đầu của adidas, \'Zebra\' đã bán hết ngay lập tức nhưng đã được bổ sung vào ngày 24 tháng 6 năm 2017. Một đợt bổ sung khác của \'Zebra\' đến vào ngày 16 tháng 11 năm 2018, với nhiều đôi hơn được tung ra thị trường và cung cấp lời hứa của Kanye về việc Yeezy sẽ dễ tiếp cận hơn với bất kỳ ai muốn họ.', 18000000),
(11, 'Adidas Yeezy Boost 700 Wave Runner', 'A01', 'yezzy7001.png', 'Là một trong những đôi giày đình đám nhất của Adidas suốt 2 năm qua, Yeezy Boost 700 \"Wave Runner\" hội tụ đủ các yếu tố để trở thành \"must-have item\" trong tủ đồ của bạn: Phối màu lạ mắt nhưng thời thượng, một vẻ ngoài đậm chất hoài cổ của thời trang những năm 90 đang là trend.\r\n\r\nLần đầu tiên xỏ chân vào \"Wave Runner\", không ít người đã phải trầm trồ. Dù có vẻ ngoài không được thanh thoát, ẩn sâu bên trong, Yeezy Boost 700 \"Wave Runner\" sử dụng miếng đệm đế giày chứa công nghệ Boost - một trong những \"con gà đẻ trứng vàng\" của hãng giày đến từ Đức.', 21000000),
(12, 'Adidas Zx 4000 4D', 'A01', '4000d1.png', 'Hàng nghìn vận động viên. Nhiều năm trời thu thập dữ liệu. adidas 4D chính là công nghệ cho tương lai. Đế giữa in kỹ thuật số không chỉ mang vẻ ngoài tân tiến, từng mảng lưới làm bằng nhựa lỏng cho cảm giác độc đáo dưới chân. Phom giày được chế tác bằng ánh sáng và hoàn thiện bằng nhiệt. Tất cả tạo nên một đôi giày chạy bộ với thiết kế riêng thúc đẩy bạn tiến lên phía trước. Phiên bản đường phố này có phom dáng tối ưu, bề mặt sần và màu sắc neon vui mắt, gợi nhớ đến dòng giày ZX lần đầu ra mắt vào thập niên 80. Khẩu hiệu \"I Want, I Can\" mang tinh thần nguyên bản đến với ngày hôm nay. Vì bạn có thể nếu bạn thực sự mong muốn. Kết hợp hài hòa giữa cũ và mới, đôi giày này cùng bạn xuống phố với tinh thần hướng tới tương lai.', 4200000),
(13, 'Converse Chuck 70 x Fear of God Essentials', 'C02', 'fog1.png', 'Converse x Fear of God ESSENTIALS Chuck 70 High-top mùa hè năm nay vẫn sở hữu những yếu tố cơ bản của silhouette này nhưng điểm khác chính là họ đã dùng bản cải tiến của Chuck 70-2020. Việc đó đồng nghĩa chúng sẽ sở hữu chất liệu/công nghệ cho upper, insole, outsole và cả dây giày cao cấp hơn, nét hơn, êm hơn so với đợt collab trước đó.\r\n\r\nTone trắng ngà và đen classic vẫn được chọn làm hai phối màu chính trên upper cùng lưỡi gà chất liệu da đã qua xử lý, 2 tone màu này phối hợp tương phản hoàn hảo ở 2 phối màu tạo sự đối lập sang chảnh vốn có từ bố cục tối giản.', 13000000),
(14, 'Jordan 1 High OG Obsidian', 'C03', 'ob1.png', 'Air Jordan 1 Retro High OG là một tác phẩm của sự hoài cổ, hiện đại hóa các yếu tố đặc biệt của biểu tượng năm 1985 để tôn vinh vòng cung sự nghiệp huyền thoại của Michael Jordan. Ra mắt vào tháng 8 năm 2019, phiên bản \'Obsidian\' này tôn vinh trường đại học của MJ thông qua bảng màu khối lấy cảm hứng từ nhóm ở mặt trên bằng da. Ghi chú thương hiệu phù hợp và Swooshes đóng vai trò của họ trong sự tôn kính. Đế ngoài bằng cao su hình tròn và đế giữa của Nike Air mang đến sự thoải mái và lực kéo cổ điển.', 9000000),
(15, 'Jordan 1 High Zoom Pink', 'C03', 'zp1.png', 'Chuẩn bị cho mình cho ngày 14 tháng 2 với một màu sắc hấp dẫn đảm bảo sẽ khiến trái tim bạn đập thình thịch. Để kỷ niệm Ngày lễ tình nhân, phiên bản Nike Jordan 1 High này đã được trang bị đồ họa nút bấm trên lưỡi giày dưới dạng các bức thư tình theo phong cách sống cổ điển phổ biến. Các chi tiết khác để tôn vinh là biểu tượng trái tim nhỏ trong nhãn hiệu Nike Air đã được sửa đổi và sự kết hợp màu sắc quyến rũ của University Red và Tulip Pink.\r\n\r\nThậm chí hơn 35 năm sau khi ra mắt, Air Jordan 1 được đặc trưng bởi thiết kế linh hoạt và vượt thời gian của nó. Trong phiên bản mới này, phiên bản cổ điển có phần tử Zoom Air dưới đế. Kết quả: một điểm cộng về sự thoải mái, đệm và hỗ trợ. Về hình thức, nó gây ấn tượng với màu sắc sống động như men hồng, hoa xương rồng và trắng.\r\n\r\nCÂU CHUYỆN:\r\nMichael Jordan đã là một biểu tượng bóng rổ kể từ sau bàn thắng ấn định chiến thắng trong trận đấu giúp Bắc Carolina giành chức vô địch quốc gia Hoa Kỳ. Năm 1985, anh chinh phục lĩnh vực này trong huyền thoại Air Jordan I. Jordan đã tạo nên một cuộc cách mạng trong giải đấu, thống trị các đối thủ và thu hút lượng người hâm mộ trên toàn thế giới.', 7000000),
(16, 'Jordan 1 Low Canyon Rush', 'C03', 'car1.png', 'Luôn luôn bên cạnh, luôn luôn tươi mới. Air Jordan 1 Low thiết lập cho bạn một phần lịch sử và di sản của Jordan thoải mái cả ngày. Chọn màu sắc của bạn, sau đó bước ra trong hồ sơ mang tính biểu tượng được xây dựng bằng hỗn hợp vật liệu cao cấp và không khí được bao bọc trong gót chân.\r\n\r\nVật liệu cao cấp\r\nChiếc Low này có sự kết hợp cao cấp của da kiện, da nubuck và vật liệu tổng hợp ở phía trên.\r\n\r\nKhông khí bên trong\r\nMột bộ phận Air được gói gọn trong gót chân, mang đến cho bạn lớp đệm nhẹ đã là cảm giác trong hơn một thế hệ.\r\n\r\nThiết kế vượt thời gian\r\nBiểu tượng Wings ở gót giày, thiết kế Jumpman trên lưỡi gà và một mấu ren \"23\" trang trí giày với các chi tiết mang tính biểu tượng.', 6800000),
(17, 'Jordan 1 Low Panda', 'C03', 'pan1.png', 'Luôn luôn bên cạnh, luôn luôn tươi mới. Air Jordan 1 Low thiết lập cho bạn một phần lịch sử và di sản của Jordan thoải mái cả ngày. Chọn màu sắc của bạn, sau đó bước ra trong hồ sơ mang tính biểu tượng được xây dựng bằng hỗn hợp vật liệu cao cấp và không khí được bao bọc trong gót chân.\r\n\r\nVật liệu cao cấp\r\nĐôi Jordan 1 Low này có sự kết hợp cao cấp của da kiện, da nubuck và vật liệu tổng hợp ở phía trên.\r\n\r\nKhông khí bên trong\r\nMột bộ phận Air được gói gọn trong gót chân, mang đến cho bạn lớp đệm nhẹ đã là cảm giác trong hơn một thế hệ.\r\n\r\nThiết kế vượt thời gian\r\nBiểu tượng Wings ở gót giày, thiết kế Jumpman trên lưỡi gà và một mấu ren \"23\" trang trí giày với các chi tiết mang tính biểu tượng.', 9200000),
(18, 'Jordan 1 Low Smoke', 'C03', 'smoke1.png', 'Air Jordan 1 Low Light Smoke Grey – một trong những sản phẩm được ưa chuộng của dòng Jordan 1 Low. Phiên bản này chính thức được Nike đưa lên kệ vào tháng 6 năm 2020. Ngay tại thời điểm ra mắt, mẫu giày này đã thu hút sự chú ý của rất nhiều người nhờ phong cách phối màu mới lạ. Màu sắc Nike Jordan 1 Low Light Smoke Grey được tạo nên bởi sự phối hợp giữa 4 gam màu đơn sắc khác nhau: đen, trắng, xám và đỏ. Giữa các tone màu này có sự tương phản rõ rệt nhưng khi kết hợp cùng nhau lại mang đến một tổng thể hài hòa và bắt mắt.', 6100000),
(19, 'Jordan 1 Mid Nude', 'C03', 'nude1.png', 'Họa tiết Jumpman mang tính biểu tượng, dấu Swoosh đặc trưng, ​​chèn tương phản, nắp tròn, viền ở mặt trước, miếng dán logo trên lưỡi, cao đến mắt cá chân, đế cao su. Bài viết này đến từ một thị trường giày thể thao độc quyền. Sneakerheads sẽ không chỉ tìm thấy những cú hích đình đám nhất ở đây, mà còn cả những bản collab và những thiết kế giới hạn.', 5990000),
(20, 'Jordan 1 OG High Lucky Green', 'C03', 'lukgreen1.png', 'Nike Air Jordan 1 Retro High OG ‘Lucky Green’ lấy cảm hứng từ điểm nổi bật ban đầu trong sự nghiệp của Michael Jordan - cụ thể là trận đấu 63 điểm của His Airness tại Boston Garden cũ trong vòng loại trực tiếp năm 1986. Phần trên cao sử dụng cách ngăn hai tông màu cổ điển, nổi bật với phần đế bằng da màu trắng và lớp phủ da màu xanh lá cây tương phản với các đường viền thô để tạo ra một thẩm mỹ tinh tế chưa hoàn thiện. Các yếu tố xây dựng thương hiệu bao gồm dấu Swoosh màu đen, thẻ lưỡi Nike Air và biểu tượng Wings màu đỏ trên nắp cổ áo bên.', 7900000),
(21, 'Jordan 1 Retro High Bred Toe', 'C03', 'bred1.png', 'Kết hợp các yếu tố của ba AJ1’s cổ điển đã được chứng nhận, Jordan 1 Retro High Bred Toe 2018 giống như dòng sản phẩm OG 1 của Coachella. Có màu đỏ thể dục, đen và trắng, với màu đỏ trên hộp ngón chân, đế ngoài và quấn quanh mắt cá chân và gót chân, mặt bên màu trắng và đế giữa và màu đen bao phủ phần còn lại của đôi giày thể thao, đó là một sự kết hợp cân bằng hoàn hảo của Banned, Chicago và Black Toe tất cả trong một. Được phát hành lần đầu tiên vào tháng 2 năm 2018, Bred toe đã là một trong những đôi giày thể thao phổ biến nhất trên StockX kể từ khi giảm giá. Đối với những người hâm mộ AJ1, màu sắc này là phải có trong bộ sưu tập.', 39990000),
(22, 'Nike Air Jordan 1 Low SE Spades', 'C03', 'spades1.png', 'Jordan Brand phát hành một phiên bản đặc biệt của Air Jordan 1 Low với nickname ‘Spades’, được lấy cảm hứng từ những quân bài.\r\n\r\nNhìn kỹ hơn, đôi Jordan 1 Low này có họa tiết paisley in nổi xung quanh ngón chân, nổi bật với phần nền màu trắng. Dấu Swoosh màu vàng kim loại \"Metallic Gold\" đầy sang trọng, một quân cơ trên lưỡi gà, cũng như các chữ ‘K’ và ‘Q’ được thêu hai bên, đại diện cho lá bài King và Queen.', 5990000),
(23, 'Off-White X Jordan 4 SP Sail', 'O01', '4sp1.png', 'Được hợp tác với thương hiệu thời trang dạo phố sang trọng của Virgil Abloh, Off-White x Nike Air Jordan 4 SP ‘Sail’ mang đến hình dáng cổ điển dịu dàng. Lớp da không cấu trúc được hoàn thiện bằng màu trắng Off-White đơn sắc, hoàn chỉnh với các chi tiết TPU bán mờ trên khoen đúc, ‘cánh’ cấu trúc và bảng điều khiển gót mang nhãn hiệu Nike Air. Sự khởi sắc đặc trưng của Abloh bao gồm cà vạt zip ton-sur-ton và chữ \"AIR\" được in phía trên bộ phận đế Air có thể nhìn thấy được.', 54990000),
(24, 'Travis Scott X Air Jordan 1 Retro High OG Mocha', 'C03', 'mocha1.png', 'Có lẽ không cần dùng quá nhiều từ để mô tả phiên bản Air Jordan 1 này vì nó đã quá đình đám.\r\n\r\nLà một trong những sự thèm muốn bậc nhất của các con \"nghiện giày\", phiên bản đánh dấu sự hợp tác của Travis Scott một siêu sao đa tài năng với nền công nghiệp Sneaker. Hiếm có người nghệ sĩ nào lại tạo nên sức ảnh hưởng lớn tới như vậy, với thiết kế dấu Swoosh quá khổ lộn ngược thương hiệu, và phối màu Dark Mocha cực kỳ bắt mắt. Các chi tiết độc đáo khác bao gồm kết cấu hai lớp trên cổ áo và logo khuôn mặt được vẽ thô của Scott được in nổi trên gót giày.\r\n\r\nPhiên bản được ra mắt với số lượng có hạn, và hiện có mức giá Resell cao ngất.\r\n\r\nNếu quá yêu thích phối màu này, bạn có thể tham khảo một phiên bản là Jordan 1 high Dark Mocha với mức giá êm dịu hơn.', 12500000),
(25, 'Nike Air Max 1 Anniversary Nike Sb', 'N01', 'sb1.png', 'Các sneakerhead và các nhà sưu tập rất vui khi Nike phát hành phiên bản OG này cho lễ kỷ niệm 30 năm của Air Max 1. Nike Air Max 1 OG ‘White & University Red’  là mẫu giày gần nhất, liên quan đến hình dáng và chất liệu, với mẫu ban đầu năm 1987 trong số tất cả các biến thể Air Max 1 đã được phát hành trong suốt nhiều năm.\r\n\r\nCác nhà phê bình đồng ý rằng nó phù hợp tuyệt vời và sự rung cảm của trường học cũ là ở đó. Việc phát hành của nó đã được hầu hết mọi người dự đoán trong thời gian dài nhất rằng một số người mua đã gặp khó khăn khi mua một đôi ngay khi nó lên kệ.', 2300000),
(26, 'Nike Air Max 1 Se', 'N01', 'maxse1.png', 'Để kỷ niệm Ngày Air Max, Nike đã tổ chức cuộc thi Nike: On Air vào năm 2018, mang đến cho người dân cơ hội sáng tạo những thiết kế Air Max của riêng họ lấy cảm hứng từ quê hương của họ. Sau khi làm việc cùng với các nhà phát triển của Nike, người chiến thắng Gwang Shin đã ra mắt đôi giày thể thao Nike Air Max 97 \'Neon Seoul\' vào tháng 4 năm 2019. Để tri ân thành phố của anh ấy, Seoul, Shin thu hút ảnh hưởng từ các bảng hiệu neon nổi tiếng ở thủ đô của Hàn Quốc, trang trí phần da trên bằng đường ống màu sặc sỡ.', 4000000),
(27, 'Nike Air Max 90', 'N01', 'max901.png', 'Để kỷ niệm Ngày Air Max, Nike đã tổ chức cuộc thi Nike: On Air vào năm 2018, mang đến cho người dân cơ hội sáng tạo những thiết kế Air Max của riêng họ lấy cảm hứng từ quê hương của họ. Sau khi làm việc cùng với các nhà phát triển của Nike, người chiến thắng Gwang Shin đã ra mắt đôi giày thể thao Nike Air Max 97 \'Neon Seoul\' vào tháng 4 năm 2019. Để tri ân thành phố của anh ấy, Seoul, Shin thu hút ảnh hưởng từ các bảng hiệu neon nổi tiếng ở thủ đô của Hàn Quốc, trang trí phần da trên bằng đường ống màu sặc sỡ.', 2900000),
(28, 'Nike Air Max 97 Premium', 'N01', '97pre1.png', 'Để kỷ niệm Ngày Air Max, Nike đã tổ chức cuộc thi Nike: On Air vào năm 2018, mang đến cho người dân cơ hội sáng tạo những thiết kế Air Max của riêng họ lấy cảm hứng từ quê hương của họ. Sau khi làm việc cùng với các nhà phát triển của Nike, người chiến thắng Gwang Shin đã ra mắt đôi giày thể thao Nike Air Max 97 \'Neon Seoul\' vào tháng 4 năm 2019. Để tri ân thành phố của anh ấy, Seoul, Shin thu hút ảnh hưởng từ các bảng hiệu neon nổi tiếng ở thủ đô của Hàn Quốc, trang trí phần da trên bằng đường ống màu sặc sỡ.', 3500000),
(29, 'Nike Air Max Lx 97 London', 'N01', '97lon1.png', 'Để kỷ niệm Ngày Air Max, Nike đã tổ chức cuộc thi Nike: On Air vào năm 2018, mang đến cho người dân cơ hội sáng tạo những thiết kế Air Max của riêng họ lấy cảm hứng từ quê hương của họ. Sau khi làm việc cùng với các nhà phát triển của Nike, người chiến thắng Gwang Shin đã ra mắt đôi giày thể thao Nike Air Max 97 \'Neon Seoul\' vào tháng 4 năm 2019. Để tri ân thành phố của anh ấy, Seoul, Shin thu hút ảnh hưởng từ các bảng hiệu neon nổi tiếng ở thủ đô của Hàn Quốc, trang trí phần da trên bằng đường ống màu sặc sỡ.', 4700000),
(30, 'Nike Air Presto Off White', 'O01', 'presto1.png', 'Nike Off-White x Air Max 90 Ice của Virgil Abloh kết hợp phần trên bằng da trắng với lớp bọt màu xanh nước đá và lớp phủ da lộn màu xám, Nike Swoosh màu trắng phản chiếu được khâu, thẻ màu cam đặc trưng và miếng dán gót da lộn màu xám. Được phát hành vào tháng 9 năm 2017, bản phát hành được đánh giá cao này là thành viên của nhóm REVEALING năm đôi ban đầu của Bộ sưu tập Off-White x Nike “The Ten” bao gồm các thiết kế được tái tạo cho Air Jordan 1, Nike Blazer, Nike Air Presto và Nike Air VaporMax.', 19000000),
(31, 'Nike Air Prestox Off-White Custom', 'O01', 'prestox1.png', 'Đôi giày thể thao này có ba màu trắng, có khả năng tùy biến, giống như cách một tấm vải trống trông cho một nghệ sĩ. Trang Instagram chính thức của Off-White đã khởi động mọi thứ bằng cách đăng lại một tùy chỉnh của Massimo Taylor của nhà bán lẻ Solebox ở Berlin và kêu gọi bất kỳ ai nhận được một đôi hãy thử theo phong cách nhuộm cà vạt.', 21000000),
(32, 'Nike Unisex Sneaker', 'N01', 'unisex1.png', 'Giày thể thao Unisex Nike mang đến phong cách Dunk mang tính biểu tượng với hình dáng cắt thấp. Một bộ phận Zoom Air ở gót chân và một lưỡi đệm mang lại sự thoải mái khi trượt băng.', 1300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id_size` int(3) NOT NULL,
  `size_details` text DEFAULT NULL,
  `onstock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id_size`, `size_details`, `onstock`) VALUES
(1, 'Size 37 - Nam', 0),
(2, 'Size 37 + 1/2 - Nam', 0),
(3, 'Size 38 - Nam', 0),
(4, 'Size 38 + 1/2 - Nam', 0),
(5, 'Size 39 - Nam', 0),
(6, 'Size 39 + 1/2 - Nam', 0),
(7, 'Size 40 - Nam', 0),
(8, 'Size 40 + 1/2 - Nam', 0),
(9, 'Size 41 - Nam', 0),
(10, 'Size 41 + 1/2 - Nam', 0),
(11, 'Size 42 - Nam', 0),
(12, 'Size 42 + 1/2 - Nam', 0),
(13, 'Size 43 - Nam', 0),
(14, 'Size 43 + 1/2 - Nam', 0),
(15, 'Size 44 - Nam', 0),
(16, 'Size 44 + 1/2 - Nam', 0),
(17, 'Size 36 - Nữ', 0),
(18, 'Size 36 + 1/2 - Nữ', 0),
(19, 'Size 37 - Nữ', 0),
(20, 'Size 37 + 1/2 - Nữ', 0),
(21, 'Size 38 - Nữ', 0),
(22, 'Size 38 + 1/2 - Nữ', 0),
(23, 'Size 39 - Nữ', 0),
(24, 'Size 39 + 1/2 - Nữ', 0),
(25, 'Size 40 - Nữ', 0),
(26, 'Size 40 + 1/2 - Nữ', 0),
(27, 'Size 41 - Nữ', 0),
(28, 'Size 41 + 1/2 - Nữ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size_rieng`
--

CREATE TABLE `size_rieng` (
  `id_sizerieng` int(3) NOT NULL,
  `id_product` int(6) NOT NULL,
  `id_size` int(6) NOT NULL,
  `soluong` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size_rieng`
--

INSERT INTO `size_rieng` (`id_sizerieng`, `id_product`, `id_size`, `soluong`) VALUES
(1, 1, 1, 12),
(2, 1, 1, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `image`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(5, '5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(1) NOT NULL,
  `tentrangthai` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `tentrangthai`) VALUES
(1, 'Đặt hàng'),
(2, 'Đã thanh toán'),
(3, 'Đang giao hàng'),
(4, 'Hoàn thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `name`, `email`, `address`, `phone`, `token`) VALUES
(1, 'user2', '123456', 'Nguyễn Văn A', 'user1@gmail.com', 'CaMau, Phuong5', '123123129', ''),
(12, 'user3', '$2y$10$oBVlaQrQZ8JGx9ClXaH10e6.yol/4hN0s1kpDMeaa5kc8XBxUgo3W', 'Đây là member new', 'thoaipho51@gmail.com', 'Sài Gòn', '0856141267', ''),
(13, 'abc', '$2y$10$QimvABo.qXthrk5ee2sgSOhHnh/.iJni47ZWLMfE.d/UJ00Qwoit.', 'Thành Viên Mới', 'thoaipho51@gmail.com', 'Sài Gòn', '0856141267', ''),
(14, 'user4', '$2y$10$c5mv4LxflfiHZT7iFwLChOnGmwW1QAE1w6DIuGSeRQdxoEJ091Z3.', 'Thành Viên Mới Haha', 'thoaipho51@gmail.com', 'Sài Gòn', '0856141268', ''),
(15, 'user5', '$2y$10$MMxcMdXzdux1oI0W7KtayeMUzGuBHDVyQ/8kEn8FNjmUMla3iO612', 'Đây là member new', 'thoaipho51@gmail.com', 'Sài Gòn', '0856141267', ''),
(16, 'user6', '$2y$10$liJpisd7tYPFh3ixixjdM.K2fQb8ToIsFxQvqNd8FA6o2S2s9vmuy', 'Nguyễn Văn Thoại', 'thoaipho51@gmail.com', 'Khóm 4, Thị Trấn Sông Đốc', '0856141256', ''),
(17, 'user7', '$2y$10$TTiTHG4V4MSQICsOC5z6oujwYIqVXFeFSQOVyXjXxfssnj5.15keC', 'nguyen the trung', 'luke@gmail.com', '28 DInh Binh Ca Mau', '0849230500', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon` (`id_hd`),
  ADD KEY `nguoiban` (`id_nguoiban`),
  ADD KEY `id_giay` (`id_giay`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`),
  ADD KEY `idkhach` (`idkhach`),
  ADD KEY `trangthai` (`trangthai`);

--
-- Chỉ mục cho bảng `hoadonshoez`
--
ALTER TABLE `hoadonshoez`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `size_rieng`
--
ALTER TABLE `size_rieng`
  ADD PRIMARY KEY (`id_sizerieng`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_size` (`id_size`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadonshoez`
--
ALTER TABLE `hoadonshoez`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_size` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `size_rieng`
--
ALTER TABLE `size_rieng`
  MODIFY `id_sizerieng` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `hoadon` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`idhd`),
  ADD CONSTRAINT `id_giay` FOREIGN KEY (`id_giay`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `nguoiban` FOREIGN KEY (`id_nguoiban`) REFERENCES `admin` (`id_admin`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `trang thai` FOREIGN KEY (`trangthai`) REFERENCES `trangthai` (`id`),
  ADD CONSTRAINT `trangthai` FOREIGN KEY (`trangthai`) REFERENCES `trangthai` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `thuonghieu` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`);

--
-- Các ràng buộc cho bảng `size_rieng`
--
ALTER TABLE `size_rieng`
  ADD CONSTRAINT `sanpham` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `sizecuthe` FOREIGN KEY (`id_size`) REFERENCES `sizes` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
