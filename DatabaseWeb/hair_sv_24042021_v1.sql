-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 06:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hair_sv`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `idPro` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCate` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCate`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tạo Kiểu Tóc', NULL, NULL),
(2, 'Chăm Sóc Tóc', '2021-04-20 16:51:57', '2021-04-20 16:51:57'),
(3, 'Chăm Sóc Da', '2021-04-20 16:52:51', '2021-04-20 16:52:51'),
(4, 'Chăm Sóc Cơ Thể', '2021-04-20 16:53:12', '2021-04-20 16:53:12'),
(5, 'Phụ Kiện', '2021-04-20 16:53:33', '2021-04-20 16:53:33'),
(6, 'Thực phẩm chức năng', '2021-04-20 16:53:52', '2021-04-20 16:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_04_144643_create_products_table', 1),
(5, '2021_04_04_145652_create_categories_table', 1),
(6, '2021_04_04_150248_create_orders_table', 1),
(7, '2021_04_04_151101_create_carts_table', 1),
(8, '2021_04_04_152616_create_order__details_table', 1),
(9, '2021_04_07_150801_create_user', 1),
(10, '2021_04_11_020549_add_token_to_user', 1),
(11, '2021_04_13_133825_create_services_table', 1),
(12, '2021_04_13_141356_add_human_rights_to_user_table', 1),
(13, '2021_04_13_141715_add_priceandimg_to_services_table', 1),
(14, '2021_04_13_142309_create_service__details_table', 1),
(15, '2021_04_24_035229_create_modesl_hair__hots_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modesl_hair__hots`
--

CREATE TABLE `modesl_hair__hots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modesl_hair__hots`
--

INSERT INTO `modesl_hair__hots` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:8000/storage/photos/1/1.jpg', '2021-04-24 03:54:44', '2021-04-24 03:54:44'),
(2, 'http://localhost:8000/storage/photos/1/2.jpg', '2021-04-24 03:55:44', '2021-04-24 03:55:44'),
(3, 'http://localhost:8000/storage/photos/1/3.jpg', '2021-04-24 03:56:26', '2021-04-24 03:56:26'),
(4, 'http://localhost:8000/storage/photos/1/4.jpg', NULL, NULL),
(5, 'http://localhost:8000/storage/photos/1/5.jpg', NULL, NULL),
(6, 'http://localhost:8000/storage/photos/1/7.jpg', NULL, NULL),
(8, 'http://localhost:8000/storage/photos/1/8.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idOrder` bigint(20) UNSIGNED NOT NULL,
  `payMents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalMoney` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order__details`
--

CREATE TABLE `order__details` (
  `idOrder` int(11) NOT NULL,
  `idPro` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idPro` bigint(20) UNSIGNED NOT NULL,
  `idCate` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detailed_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idPro`, `idCate`, `name`, `price`, `image`, `short_Description`, `detailed_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'XỊT TẠO KIỂU FARCOM SCULPT & FREEZE', 359, 'https://product.hstatic.net/1000306701/product/screen_shot_2021-03-10_at_11.17.36_d57657124d52416e8d9c15f4445b29da_1024x1024.png', '', 'Dung tích: 500ml\r\n\r\nXịt tạo kiểu và giúp tóc vào nếp. Duy trì kiểu tóc suốt ngày dài. Sản phẩm lý tưởng cho phép thỏa sức sáng tạo kiểu tóc như mong muốn, kết cấu siêu nhẹ không gây khô cứng tóc. \r\n\r\nThành phần công thức độc đáo cùng dưỡng chất Vitamin B3 và Provitamin B5 chăm sóc sâu cho tóc.\r\n\r\nCách sử dụng:\r\n\r\nBước 1: Lắc đều chai gôm xịt tóc\r\n\r\nBước 2: Xịt lên tóc cách khoảng 20cm. Có thể xịt gần chân tóc để tạo tóc dụng đứng nếu tóc bạn không lên được. Khi xịt nhiều gôm sẽ có độ bóng, nếu xịt 1 lượng vừa phải sẽ tạo cảm giác rất tự nhiên.', '2021-04-21 02:02:03', '2021-04-21 02:02:03'),
(2, 1, 'GÔM XỊT GIỮ NẾP SIÊU BÓNG TIGI MASTERPIECE 340ml', 406, 'https://product.hstatic.net/1000306701/product/tao_kieu-01_5fedfd32a10245c684c68396ce2d39ab_1024x1024.png', '', '• Gôm xịt giữ nếp siêu bóng Masterpiece của Bed Head: Công thức tăng cường độ bóng, giúp tóc giữ nếp mạnh mẽ, không chỉ được phát triển mà còn được tin dùng tại các salon chuyên nghiệp. Mang tới kết quả và trải nghiệm như ở salon ngay tại nhà. Với khả năng giữ nếp cực cao và tạo hiệu ứng siêu bóng, gôm xịt Masterpiece của Bed Head sẽ biến mái tóc của bạn trở thành tác phẩm nghệ thuật! Loại gôm xịt này tăng độ bóng sáng, cho kiểu tóc cực ấn tượng. \r\n\r\n• Gôm xịt với khả năng giữ nếp đáng gờm, với độ giữ nếp đạt 4/5 và chống lại tóc vểnh xù với bất kì kiểu tóc nào. \r\n\r\n• Công thức với Trimethicone cho mái tóc bóng mượt đến khó tin, và Polymers giúp giữ nếp cực bền cho bất kì kiểu tóc nào. Phù hợp tạo kiểu cho mọi loại tóc. \r\n\r\n \r\n\r\nHƯỚNG DẪN SỬ DỤNG: Xịt toàn bộ lên nền tóc khô để giúp tóc vào nếp và tăng cường độ bóng đến chói lóa. Phù hợp cho mọi kiểu tóc và mọi độ dài. \r\n\r\n \r\n\r\nLƯU Ý: NẾU VÒI XỊT BỊ TẮC, HÃY RỬA BẰNG NƯỚC ẤM. TRÁNH HÍT TRỰC TIẾP SẢN PHẨM. SỬ DỤNG THEO TỪNG QUÃNG XỊT NGẮN TRONG KHÔNG GIAN THOÁNG KHÍ, TRÁNH XỊT QUÁ LÂU. SỬ DỤNG THEO CHỈ DẪN. KHÔNG ĐƯỢC SỬ DỤNG GẦN MẮT.', '2021-04-21 02:05:47', '2021-04-21 02:05:47'),
(3, 2, '[Coming soon] DẦU XẢ TIGI RESURRECTION 400ml - Phiên bản mới 2021', 410, 'https://product.hstatic.net/1000306701/product/resu_500x500-01_943fa47d89dc453b9d8e8a2065d44422_1024x1024.jpg', '', 'DẦU XẢ RESURRECTION\r\n\r\n \r\n\r\nMÔ TẢ:\r\n\r\n• Dầu xả ResurrectionTM mới của Bed Head: Một công thức siêu phục hồi, không chỉ được thiết kế riêng mà còn được sử dụng bởi các người thợ làm tóc chuyên nghiệp. Mang lại kết quả và trải nghiệm như salon ngay tại nhà. \r\n\r\n• Dòng sản phẩm sửa chữa Bed Head đã được tạo ra để giúp tóc hư tổn đàn hồi tốt hơn, mềm mượt và trông khỏe mạnh hơn. Dầu xả phục hồi hư tổn này này được sạc siêu tóc với phức hợp dưỡng tóc ở cấp độ cao nhất của TIGI để cung cấp độ ẩm phi thường và những lợi ích được chăm sóc. Dầu xả giúp phục hồi tóc hư tổn, nó cũng nuôi dưỡng, giữ ẩm và dưỡng tóc. \r\n\r\n• Công thức với Amodimethicone để giúp phục hồi tóc hư tổn để tóc trông khỏe mạnh và mượt mà hơn, Behentrimonium Chloride để dưỡng và nuôi dưỡng tóc khô hư tổn và Selaginella Lepidophylla Extract, còn được gọi là \'cây phục sinh\' với đặc tính duy trì độ ẩm. \r\n\r\n• Hương thơm trái cây ngọt ngào.\r\n\r\n \r\n\r\nLựa chọn tuyệt vời cho mái tóc khô xơ hư tổn và an toàn với màu nhuộm\r\n\r\n \r\n\r\nHDSD:\r\n\r\nThoa dầu xả từ phần thân đến ngọn trên nền tóc ướt, để trong 3-5 phút và xả sạch. Để có kết quả tốt nhất, hãy sử dụng cùng với Dầu gội dưỡng ẩm Resurrection.', '2021-04-21 02:07:57', '2021-04-21 02:07:57'),
(4, 2, 'Kem Dưỡng Ủ Tóc KAYAN Keratin Care dành cho tóc hư tổn và bị xỉn màu', 190, 'https://product.hstatic.net/1000306701/product/138701683_3635314256545155_5649322487684057757_o_d18ab2d48299499b9da83ea493a302ce_master.jpg', '', 'DẦU GỘI - XẢ - DƯỠNG KAYAN - MÁI TÓC ĐẸP CHUẨN SALON\r\n\r\nBạn muốn có mái tóc khỏe, đẹp rạng rỡ? Việc đầu tiên là phải sử dụng dầu gội phù hợp. Và thật may mắn, chúng tôi có giải pháp dầu gội cho mọi loại tóc, để bạn cảm thấy sảng khoái chuẩn salon mỗi ngày.\r\n\r\nMái tóc sẽ mượt hơn, bóng hơn, khỏe hơn chỉ nhờ gội đầu nếu bạn chọn đúng loại dầu gội phù hợp. Cho dù bạn muốn thêm độ phồng, kiểm soát xơ rối, giữ lọn uốn xoăn, hoặc chỉ đơn giản là muốn có mái tóc sạch sẽ, dầu gội #KAYAN được đặc chế theo công thức salon chuyên nghiệp mang lại cho bạn giải pháp làm sạch tóc dễ dàng.\r\n\r\nChọn dầu gội phù hợp là yếu tố then chốt để có kiểu tóc đẹp, vì vậy hãy dành thời gian nghĩ về loại tóc của bạn hoặc kiểu tóc bạn muốn có, và khi mua dầu gội hãy chọn đúng loại dầu gội KAYAN tốt đáp ứng các nhu cầu này.\r\nKayan Keratin Care dành cho tóc hư tổn và sỉn màu\r\nKayan Rich Oil dành cho tóc khô và hư tổn\r\nKayan Hyaluron Hair dành cho tóc mỏng, mảnh\r\nKayan BB Silk Hair dành cho tóc nhuộm\r\n\r\nKem Dưỡng Ủ Tóc KAYAN Keratin Care dành cho tóc hư tổn và bị xỉn màu\r\nDung tích: 250ml\r\nXuất xứ: Châu Âu\r\nThành phần: KERATIN, COLLAGEN BIỂN, PROTEIN LÚA MÌ VÀ SỮA, DẦU SHEA VÀ DẦU HẠNH NHÂN\r\nCông dụng:\r\n+ Dưỡng ẩm và giúp tóc chắc khỏe\r\n+ Nuôi dưỡng tóc đến tận ngọn\r\n+ Ngăn ngừa tóc bị chẻ ngọn\r\n+ Giúp tóc vào nếp và dễ chải\r\n\r\nCách sử dụng:\r\nSau khi gội đầu sạch, lấy một lượng vừa đủ kem ủ tóc Keratin Care xoa đều lên tóc. Sau đó quấn khăn ủ.Bạn có thể để tự nhiên hoặc dùng máy kích nhiệt khoảng 10 – 20 phút. Sau đó xả sạch, rồi sấy khô, tạo kiểu.\r\n\r\nSử dụng tốt nhất 2-3 lần/tuần', '2021-04-21 02:09:42', '2021-04-21 02:09:42'),
(5, 3, 'Combo \"Thần Dược\" Trị Mụn ACSYS SNP cho mọi loại da', 899, 'https://product.hstatic.net/1000306701/product/161717766_310267110433665_3643638853093292844_n_546a6e8ee20c4c82a77a295cd271e533_1024x1024.png', '', 'Combo \"Thần Dược\" Trị Mụn SNP gồm 3 sản phẩm:\r\n\r\n- Sữa rửa mặt Acsys trị mụn\r\n\r\n- Tẩy tế bào chết Acsys\r\n\r\n- Gel bôi mụn\r\n\r\nDòng sản phẩm SNP ACSYS For Men được sản xuất tại Hàn Quốc, là dòng sản phẩm được thiết kế riêng cho da mụn của nam giới. Với các thành phần dịu nhẹ, giữ ẩm không làm thương tổn da, giúp kháng khuẩn, bảo vệ da trước các tác động bên ngoài và giảm các vấn đề về mụn.\r\n\r\nHướng dẫn sử dụng bộ sản phẩm ACSYS\r\n\r\nBước 1: Rửa mặt với sữa rửa mặt ACSYS. Cho một lượng vừa phải vào lòng bàn tay đã làm ướt để tạo bọt cho đến khi bọt nhiều và mịn, sau đó xoa đều và mát-xa khắp mặt. Rửa sạch mặt bằng nước ấm và tráng lại bằng nước lạnh\r\n\r\nBước 2: Lau khô mặt, lấy một lượng vừa đủ thoa đều lên toàn bộ khuôn mặt, trừ vùng quanh mắt và miệng. Massage từ 1-2 phút và rửa lại bằng nước ấm.\r\n\r\nBước 3: Với làn da có mụn, sử dụng Gel đặc trị mụn ACSYS bôi lên các nốt mụn. Gel sẽ khô lại và tạo thành một lớp bảo vệ mụn khỏi bụi bẩn từ tay khi chạm vào hay yếu tố môi trường. Sử dụng Gel đặc trị giúp cho mụn nhanh lành và tránh để lại vết thâm.', '2021-04-21 02:11:41', '2021-04-21 02:11:41'),
(6, 3, 'Combo 3 Sản Phẩm Làm sạch - Dưỡng Trắng Hiệu Quả Cho Nam Giới', 599, 'https://product.hstatic.net/1000306701/product/combo_2_03f5c99fc3e24ad199722fbedd4029ca_1024x1024.jpg', '', 'Sữa Dưỡng Da Grinif All In One chính là giải pháp làm đẹp nhanh gọn dành cho phái mạnh, từ người mới bước vào công cuộc chăm sóc da cho đến những người bận rộn, không có nhiều thời gian mà vẫn muốn có một làn da trẻ trung mịn màng, đủ ẩm, trắng sáng. \r\n\r\nSữa rửa mặt than hoạt tính Skin&Dr với thành phần thiên nhiên, công nghệ lên men hiện đại giúp đánh bay mọi bụi bẩn, dưỡng chất thẩm thấu sâu giúp làn da trắng sáng, khoẻ mạnh, không còn dấu hiệu của mụn.\r\n\r\nWhite Truffle HD Turn Over Peeling/ Gel Tẩy Tế Bào Chết là sản phẩm nằm trong Bộ sản phẩm White Truffle HD. Sản phẩm giúp làm sạch sâu da mang lại một làn da sạch hoàn hảo để tiến hành các bước dưỡng tiếp theo. Người dùng sẽ cảm nhận ngay một làn da sạch, sáng, nhẵn mịn thấy rõ chỉ sau 2 phút sử dụng sản phẩm.\r\n\r\n\r\n\r\nSữa Dưỡng Da Grinif All In One chính là giải pháp làm đẹp nhanh gọn dành cho phái mạnh, từ người mới bước vào công cuộc chăm sóc da cho đến những người bận rộn, không có nhiều thời gian mà vẫn muốn có một làn da trẻ trung mịn màng, đủ ẩm, trắng sáng. \r\n\r\nSữa rửa mặt than hoạt tính Skin&Dr với thành phần thiên nhiên, công nghệ lên men hiện đại giúp đánh bay mọi bụi bẩn, dưỡng chất thẩm thấu sâu giúp làn da trắng sáng, khoẻ mạnh, không còn dấu hiệu của mụn.\r\n\r\nLoại bỏ tế bào chết hiệu quả: Không chỉ là sữa rửa mặt, Skin&Dr còn có khả năng loại bỏ tế bào chết - nguyên nhân khiến cho da sần sùi và không đều màu, đem lại một làn da mịn màng, trắng sáng\r\nLàm sạch sâu: Với thành phần than hoạt tính, Skin&Dr có khả năng làm sạch sâu, len lỏi đến từng lỗ chân lông lấy đi bụi bẩn, giúp làn da thông thoáng, sạch sẽ. \r\nThẩm thấu dưỡng da sâu: Với công nghệ lên men từ thực vật, sản phẩm có khả năng thẩm thấu sâu, đưa dưỡng chất vào trong da giúp cấp ẩm, giúp da trở nên trắng sáng, mịn màng, ngăn ngừa lão hoá.\r\nKiềm dầu, ngừa mụn: Skin&Dr còn có công dụng kiềm dầu, giúp da luôn sạch thoáng. Ngoài ra còn có khả năng kháng mụn tốt, bảo vệ làn da không bị mụn tấn công. \r\n\r\n\r\nGrinif All In One 4 Gentleman chiết xuất từ 17 thảo dược thiên nhiên, bao gồm dương hồi, cam thảo âu, chanh, hương thảo, cam, đu đủ, wild cherry, gạo, việt quất, trà xanh, lựu, cam chanh Nhật Bản, rượu sake, hoa cúc, cốt khí củ, hoàng cầm và dầu cám gạo. \r\n\r\n- Giảm thiểu sự xuất hiện của các nếp nhăn, chảy xệ mang đến làn da mềm mại, mịn màng.\r\n\r\n- Cung cấp độ ẩm cho da, ngăn chặn tình trạng da khô ráp, thiếu nước, mang đến làn da ẩm mượt.\r\n\r\n- Làm dịu tức thì những vùng bị kích ứng mẩn đỏ và chấm dứt hiện tượng bong tróc, nứt nẻ sau khi cạo râu.\r\n\r\n- Giúp tái sinh và trẻ hóa da hiệu quả, tăng độ đàn hồi và giữ lại nét tươi sáng trên da, đẩy lùi lão hóa.\r\n\r\n- Thúc đẩy quá trình tái tạo tế bào, ngăn ngừa hình thành nếp nhăn, tăng độ săn chắc, cải thiện tình trạng mụn và kích ứng da, loại bỏ sạm nám, xóa mờ các vết thâm do mụn\r\n\r\n- Cân bằng độ pH trên da sau khi dùng sữa rửa mặt, dưỡng ẩm sâu, cung cấp dưỡng chất cho da khỏe mạnh\r\n\r\n\r\n\r\nWhite Truffle HD Turn Over Peeling/ Gel Tẩy Tế Bào Chết\r\n\r\n- Sản phẩm chứa công thức 2 tác động từ Cellulose tự nhiên và hạt mơ giúp làm bong tróc tế bào chết, bụi bẩn trên bề mặt da nhanh chóng & nhẹ nhàng, mang lại một làn da sạch hoàn hảo.\r\n\r\n- Làm bong và lấy sạch đi những tế bào chết, bụi bẩn trên da\r\n\r\n- Kích thích tái tạo tế bào mới giúp da trơn mịn, mềm mại\r\n\r\n- Làm se khít lỗ chân lông, da trắng sáng\r\n\r\n- Chứa 83.02 % tinh chất nhân sâm cùng các thành phần RESMELINtm và INFLAX tm sẽ làm se khít lỗ chân lông, trắng sáng. Kích thích tái tạo tế bào mới giúp da trơn mịn, mềm mại.\r\n\r\n- Bạn sẽ cảm nhận ngay một làn da sạch, sáng, nhẵn mịn thấy rõ sau 2 phút sử dụng sản phẩm.\r\n\r\n- Không chứa 9 thành phần độc hại (Paraben, Ethanol, Pigment, Fragrance tổng hợp, benzophenone,\r\n\r\nDEA, Silicone, Thành phần có nguồn gốc động vật, dầu khoáng và PEG) An toàn cho mọi loại da.\r\n\r\n\r\n\r\nHướng dẫn sử dụng:\r\n\r\nBước 1: Lấy 1 lượng nhỏ sữa rửa mặt ra tay, tạo bọt \r\n\r\nBước 2: Xoa đều lên mặt, mát-xa khoảng 2-3 phút\r\n\r\nBước 3: Rửa sạch mặt với nước\r\n\r\nBước 4: Dùng Gel tẩy da chết 1 - 2 lần / tuần để có làn da đẹp, tránh vùng viền mắt\r\n\r\nBước 5: Xoa bóp làm theo đường vòng tròn ra phía ngoài từ giữa khuôn mặt\r\n\r\nBước 6: Rửa sạch với nước ấm\r\n\r\n\r\n\r\nTrước khi đi ngủ\r\n\r\nBước 1: Thoa một lớp mỏng sữa dưỡng lên da\r\n\r\nBước 2: Massage nhẹ nhàng cho đến khi sản phẩm thấm đều trên da. Có thể dùng đầu ngón tay vỗ đều và nhẹ khắp mặt để sản phẩm hấp thụ nhanh hơn.\r\n\r\nLưu ý: Sử dụng 1-2 lần/ ngày để đạt hiệu quả tốt nhất. Tốt nhất nên sử dụng vào buổi tối trước khi đi ngủ.', '2021-04-21 02:13:12', '2021-04-21 02:13:12'),
(7, 4, 'Gel vệ sinh nam Winmen 110ml - khử mùi, kháng khuẩn, giữ ẩm hương bạc hà mát lạnh', 55, 'https://product.hstatic.net/1000306701/product/e659405709a2f8fca1b3_4d05745894f249b1bb70ef207054e025_master.jpeg', '', 'Thương hiệu: Winmen\r\nXuất xứ: Việt Nam\r\nDung tích: 110ml\r\n\r\nCông dụng:\r\n- Vệ sinh vùng kín nam giới, giúp khử mùi hôi, làm sạch da vùng kín.\r\n- Không kích thích niêm mạc, khôi phục cân bằng độ ẩm, độ PH da.\r\n- Có chất sát khuẩn có tác dụng trên nhiều loại vi khuẩn khác nhau.\r\n- Dịch chiết cây Lô Hội…: Làm mềm và dưỡng ẩm da\r\n- Lấy lại sự tự tin cho quý ông trong cuộc sống.\r\n\r\nVệ sinh “vùng kín” ở nam giới rất quan trọng trong việc gìn giữ “bản lĩnh” của quý ông tuy nhiên, phần lớn nam giới vẫn chưa vệ sinh đúng cách. Điều này đã khiến không ít quý ông gặp phải rắc rối ở  “vùng nhạy cảm” nhất cơ thể, và khó có thể chia sẻ cùng người khác. Để các quý ông không phải âm thầm chịu đựng sự khó chịu đó nữa. Hãy để Winmen dạng gel mỹ phẩm vệ sinh vùng kín lấy lại sự tự tin cho quý ông trong cuộc sống.\r\n\r\nWinmen rất thích hợp trong việc vệ sinh vùng kín nam giới, giúp khử mùi hôi, làm sạch da vùng kín, không có cồn gây kích thích niêm mạc, có axit sữa giúp khôi phục cân bằng độ ẩm, độ PH da.', '2021-04-21 02:15:20', '2021-04-21 02:15:20'),
(8, 4, 'DCR Gillette Mach 3 Basic', 99, 'https://product.hstatic.net/1000306701/product/dsc01522_copy_5ae845a247d04efd9f40f6cef270b201_master.jpg', '', '- Được thiết kế với hệ dao cạo 3 lưỡi tiên tiến cho đường cạo sát và êm, giúp bạn dễ dàng cạo sạch râu một cách nhanh chóng và hiệu quả.', '2021-04-21 02:17:13', '2021-04-21 02:17:13'),
(9, 5, 'Cây Gạt Mụn (Bộ 5 Cây)', 15, 'https://product.hstatic.net/1000306701/product/1_5feca8f5dfc64eca84701bdcc58a65dd_1024x1024.jpg', '', 'Xuất xứ: Việt Nam\r\n\r\nCây nặn mụn sử dụng để nặn mụn trứng cá.\r\n\r\nĐây là sản phẩm thông dụng được sử dụng phổ biến và rộng rãi trong tất cả salon của 30shine.\r\n\r\nKhi mụn cám và mụn đầu đen quá nhiều khiến bạn không kiểm soát được thì nên dùng cây nặn mụn này để gột bớt đi mụn cám mụn đầu đen đáng ghét.\r\n\r\nKHÔNG dùng tay trực tiếp nặn mụn sẽ để lại sẹo, bẩn và đỏ rát vùng bị mụn.\r\n\r\n\r\n\r\nCách Nặn mụn đầu mũi đúng cách:\r\n\r\nBước 1: Trước tiên bạn cần làm sạch mũi và dùng một miếng khăn ấm đắp lên trong khoảng 3 phút để lỗ chân lông được mở rộng hơn.\r\n\r\nBước 2: Lấy chiếc cây nặn mụn chuyên dụng có một đầu kim và một đầu có hình tròn mảnh tẩy trùng sạch bằng miếng bông gòn thấm rượu.\r\n\r\nBước 3: Dùng que nặn để đẩy mụn ra theo lỗ chân lông. Nhớ chỉ chọn những nốt mụn đã già và có hướng mở để mụn dễ dàng bị đẩy ra. Đối với phần 2 bên cánh mũi thì đặt que nặn theo hướng đầu nhọn đi xuống dưới khi nặn\r\n\r\nBước 4: Với mụn ở vùng trên mũi thì đặt cây nặn có hướng đầu nhọn chếch lên phía trên.\r\n\r\nBước 5: Sau khi nặn mụn xong thì dùng sữa rửa mặt và làm sạch vùng da vừa nặn xong.', '2021-04-21 02:20:00', '2021-04-21 02:20:00'),
(10, 5, 'Máy Rửa Mặt Facial Cleansing Brush For Men', 399, 'https://product.hstatic.net/1000306701/product/dad_0f85b64a2d7b432eb41f2fbb8f3fc6c0_1024x1024.jpg', '', 'Xuất xứ: Trung Quốc\r\n\r\nTrọng lượng: 65g\r\n\r\nMô tả sản phẩm:\r\n\r\nRung 8.000 lần/ phút làm sạch sâu cho da.\r\nĐầu chải silicone giúp tạo cảm giác mềm mại khi rửa mặt và mát xa.\r\nKhông cần thay thế đầu cọ, không đau, an toàn hơn các loại cọ rửa mặt khác.\r\nThiết kế đầu silicon chống nước an toàn khi sử dụng trong nhà tắm.\r\nThiết kế nhỏ gọn, dễ dàng sử dụng hoặc mang theo khi đi du lịch.\r\nCó 2 mặt cọ thiết kế khác nhau, một mặt để rửa mặt, một mặt để mát xa da.\r\nNhiều mức tốc độ dễ dang tùy chỉnh, phù hợp với các loại da khác nhau.\r\nPhù hợp cho tất cả loại da. Dùng 2 lần 1 ngày cho vùng mặt, cổ, vùng chữ T hoặc body.\r\nSử dụng đèn chống lão hóa khi sử dụng kem dưỡng da, serum nếu muốn.\r\nLợi ích của sản phẩm:\r\n\r\n- Giúp rửa sạch sâu, trắng sáng da và cải thiện làn da.\r\n\r\n- loại bỏ bụi/ dầu, tế bào chết và lớp make up trên da.\r\n\r\n- Cải thiện mụn, thúc đẩy tuần hoàn máu.\r\n\r\n- Thúc đẩy sự thẩm thấu của các sản phẩm chăm sóc da, loại bỏ nếp nhăn.\r\n\r\n- Giúp gương mặt trông tươi trẻ, mềm mịn hơn.\r\n\r\nLưu ý:\r\n\r\nVui lòng đọc kỹ hướng dẫn sử dụng trước khi dùng để đảm bảo an toàn. Chỉ được sử dụng thiết bị theo hướng dẫn.\r\nVui lòng không tháo rời hoặc tự ý sửa chữa.\r\nChỉ được sử dụng thiết bị cho các mục đích được viết ra trong mô tả\r\nKhông để thiết bị hay sử dụng thiết bị ở môi trường nhiệt độ cao hay độ ẩm cao.\r\nTránh xa tầm tay của trẻ em, nếu người sử dụng dưới 18 tuổi cần có sự giám sát của người lớn.\r\nKhông nên sử dụng cho phụ nữ mang thai hoặc người có tiền sử hoặc bệnh về tim mạch và phổi.\r\nĐể tránh các sự cố hoặc hỏa hoạn vui lòng ngưng sử dụng khi thiết bị trở nên nóng bất thường.\r\nTránh rơi, đập hoặc tác động mạnh đến thiết bị.\r\nKhông sử dụng khi dây cáp bị hở hoặc hư hỏng.\r\nKhông sử dụng máy cho người bị bệnh tim, sốt, bệnh truyền nhiễm, ung thư, vết thương hở, có bẹnh ngoài da hoặc cháy nắng.\r\nVui lòng tham khảo ý kiến của bác sỹ trong trường hợp bạn đang điều trị hoặc sử dụng các sản phẩm dưới sự hướng dẫn của bác sỹ.\r\n \r\n\r\nHướng dẫn sử dụng\r\n\r\nTrong lần sạc đầu tiên vui lòng sạc trong vòng 3 tiếng rưỡi. Để sạc vui lòng cắm đầu USB vào thiết bị và đầu còn lại kết nối với cục sạc vào nguồn điện.\r\nLàm ướt mặt sau đó thoa sửa rữa mặt của bạn lên mặt và cổ…\r\nKhởi động máy và để ở chế độ thấp nhất.\r\nĐiều chỉnh mức tốc đố bằng cách nhấn vào nút nguồn để phù hợp cho việc massage hoặc rửa mặt.\r\nNhấn 1 lần cho tốc độ trung bình.\r\nNhấn thêm 1 lần cho tốc độ nhanh hơn.\r\nNhấn vào nút nguồn thêm 1 lần nữa để tắt máy.\r\nRửa sơ, làm khô mặt và sử dụng sản phẩm dưỡng da.\r\nNhấn lâu khoản 3 giây để tắt mở chế độ đèn chống lão hóa.\r\n\r\n\r\nĐiều kiện bảo hành\r\n\r\nCám ơn bạn đã tin tưởng và sử dụng các sản phẩm của chúng tôi! Sau khi mua hàng quý khách sẽ nhận được chế độ bảo hành trong vòng 01 tháng kể từ ngày mua. Để hỗ trợ bảo trì miễn phí, quý khách vui lòng giữ lại thẻ bảo hành và hóa đơn mua hàng.\r\n\r\nTrong thời gian bảo hành, nếu xuất hiện các lỗi do nhà sản xuất quý khách hàng sẽ được hỗ trợ sửa chữa miễn phí. Tuy nhiên, trong trường hợp xuất hiện lỗi do tác động bên ngoài như rơi, vỡ… chúng tôi xin phép được từ chối bảo hành. Do vậy vui lòng tham khảo các thông tin mua hàng và lưu ý mang thẻ bảo hành khi đến trung tâm bảo hành – bảo trì khi cần sửa chữa sản phẩm.', '2021-04-21 02:21:23', '2021-04-21 02:21:23'),
(11, 6, 'Nước uống cải thiện đàn hồi da Kinohimitsu Collagen Diamond (Hộp 16 chai 50ml)', 1590, 'https://product.hstatic.net/1000306701/product/screen_shot_2021-03-10_at_11.03.57_82a0e5541d834a299c8e7732d297afa5_1024x1024.png', '', 'Nước Uống Kinohimitsu Đẹp Da, Giảm Dầu J\'Pan Collagen Men 50ml x 16\r\n\r\nKinohimitsu Collagen Men Drink là thức uống collagen đầu tiên được thiết kế để đáp ứng nhu cầu cụ thể của làn da nam giới.\r\n\r\nThành Phần Chính và Công Dụng:\r\n\r\n- Perilla Seed Extract – WSP (Chiết xuất hạt tía tô) là một chất chống Oxy hoá mạnh mẽ đã được đăng ký cấp bằng sáng chế độc quyền tại Mỹ, và Aloe Vera (Chiết xuất nha đam) giúp giảm viêm tế bào và tăng cường khả năng hồi phục tế bào, do đó tăng cường khả năng hấp thu dinh dưỡng của các tế bào.\r\n\r\n- Cactus Extract – Opuntia Dillenii (Chiết xuất xương rồng) rất giàu khoáng chất, pectin và flavonoid có tính chất dưỡng ẩm tuyệt vời. Nghiên cứu cho thấy nó giảm kích ứng da và mẩn đỏ đã được gây ra bởi một trong hai tia UV hoặc việc cạo râu (quá trình cạo râu là một việc làm gây tổn hại lặp đi lặp lại cho làn da).\r\n\r\n- Hyaluronic Acid (từ sụn gà) có chức năng như một miếng bọt biển để hút và giữ nước trong các tế bào giúp ngăn ngừa da khỏi bị khô. Hyaluronic Acid cũng giúp duy trì cân bằng nước và dầu trên da, giúp da mượt mà hơn.\r\n\r\n- Wheat Dextrin (NUTRIOSE®) là một chất tiền sinh học nhằm thúc đẩy sự phát triển của vi khuẩn có ích và giúp giải độc ruột một cách hiệu quả.\r\n\r\n- Với 5300mg Collagen Peptide và các thành phần dưỡng ẩm tuyệt vời, Kinohimitsu Collagen Men Drink giúp tăng cường sự đàn hồi, làm mịn nếp nhăn, điều tiết tiết bã nhờn, chữa lành các vết sẹo trên khuôn mặt và phục hồi sức sống trẻ trung cho làn da. Cảm thấy làn da mịn màng hơn, mượt mà hơn và rõ ràng hơn chỉ trong 6 ngày *!\r\n\r\n- Kinohimitsu khai thác collagen peptide của cá biển Nhật Bản cao cấp. Được chiết xuất thông qua công nghệ tiên tiến, collagen peptide có chất lượng và độ tinh khiết cao, không chứa chất béo và cholesterol.\r\n\r\n- Phân tử peptid collagen nhỏ.\r\n\r\n- Mỗi phân tử collagen peptide nhỏ và dễ dàng hấp thụ qua da. Nó giúp khởi động quá trình tổng hợp collagen ở lớp hạ bì một cách hiệu quả.\r\n\r\n- Giàu có chất chống oxy hóa mạnh mẽ giúp làm chậm sự lão hóa của da. Chiết xuất hạt Perilla được cấp bằng sáng chế độc quyền của Hoa Kỳ giúp tăng cường vẻ đẹp của da bằng cách sửa chữa các tế bào bị tổn thương và giảm viêm .\r\n\r\n- Không có chất phụ gia.\r\n\r\n- 100% tự nhiên và an toàn, không thêm đường, không có chất bảo quản, không có màu nhân tạo hoặc hương liệu. Hormones, steroid và hóa chất được thử nghiệm miễn phí bởi SGS (Global Benchmark Recognisation về Chất lượng và Liêm chính).\r\n\r\n- Công thức dạng lỏng cho phép cơ thể hấp thu ngay lập tức.\r\n\r\nThuận tiện: \r\n\r\nUống ngay lập tức, sẵn sàng để tiêu thụ ngay lập tức và hưởng thụ mọi lúc, mọi nơi.\r\n\r\n- Làm săn chắc da.\r\n\r\n- Giảm tiết dầu và ngăn sự bóng nhờn da.\r\n\r\n- Se khít lỗ chân lông cho da mịn màng.\r\n\r\n- Giảm sự xuất hiện của nếp nhăn và giúp liền sẹo.\r\n\r\n- Tăng độ đàn hồi và duy trì độ ẩm cho da.\r\n\r\n \r\n\r\nXuất xứ\r\nĐài Loan\r\n\r\nHướng dẫn sử dụng\r\n1 chai mỗi lần, dùng tốt nhất là trước bữa ăn sáng hoặc trước khi đi ngủ. Lắc đều trước khi uống. Hương vị thơm ngon hơn khi uống lạnh. -Người sử dụng lần đầu: 1 chai/ngày trong liên tục 6 ngày Liều duy trì: 1 chai mỗi 2 ngày\r\n\r\nThành phần\r\n• Perilla Seed Extract – WSP (Chiết xuất hạt tía tô) là một chất chống Oxy hoá mạnh mẽ đã được đăng ký cấp bằng sáng chế độc quyền tại Mỹ, và Aloe Vera (Chiết xuất nha đam) giúp giảm viêm tế bào và tăng cường khả năng hồi phục tế bào, do đó…', '2021-04-21 02:22:38', '2021-04-21 02:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `oldPrice` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `created_at`, `updated_at`, `oldPrice`, `image`) VALUES
(1, 'COMBO CẮT GỘI 10 BƯỚC', 100, NULL, NULL, 0, 'https://www.google.com/search?q=meme+cute&client=opera&hs=TyI&sxsrf=ALeKk02WmErzHjQmQkM2cF2u923sIRXiaw:1618385550021&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjW28X-m_3vAhXPPXAKHVJ7BdMQ_AUoAXoECAEQAw&biw=1496&bih=764#imgrc=DqNZL1nn86H8yM'),
(2, 'CẮT - XẢ - TẠO KIỂU', 70, NULL, NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `service__details`
--

CREATE TABLE `service__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `step` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameStep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idService` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service__details`
--

INSERT INTO `service__details` (`id`, `step`, `nameStep`, `content`, `image`, `idService`, `created_at`, `updated_at`) VALUES
(1, 'Bước 1', 'Massage khai huyệt điều hòa (mới)', 'Đầu tiên khi mới bắt đầu, anh sẽ được massage khai huyệt điều hòa, giúp anh thư giãn và lưu thông mạch máu. Skinner sẽ ấn vào các huyệt ngủ để bắt đầu quá trình thư giãn tại các bước sau', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-15.jpg', 1, NULL, NULL),
(3, 'Bước 2', 'Rửa mặt – massage tinh chất nha đam thẩm thấu', 'Đây là bước làm sạch mặt anh sau một ngày dài tiếp xúc với bụi bẩn. Tiếp đó, các bạn skinner sẽ massage mặt bằng tinh chất nha đam thẩm thấu. Những động tác uyển chuyển, mềm mại sẽ giúp da anh trở nên căng mọng và sảng khoái', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-3.jpg', 1, NULL, NULL),
(5, 'Bước 3', 'Hút mụn – phun nước hoa hồng công nghệ cao', 'Sau khi được massage êm ái, bạn Skinner sẽ giúp anh hút hết các bã mụn nhờn trên mặt bằng máy hút mụn khử trùng. Tiếp đó là phun nước hoa hồng công nghệ cao giúp se nhỏ lỗ chân lông, bổ sung dưỡng chất cho da', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-4.jpg', 1, NULL, NULL),
(7, 'Bước 4', 'Gội đầu massage bấm huyệt', 'Khi đã có một khuôn mặt đẹp trai, sạch sẽ, anh sẽ được skinner gội và massage đầu bấm huyệt một cách kỹ càng. Sử dụng dầu gội đầu chuẩn salon, không gây gàu, hư tổn cho tóc. Massage bấm huyệt đánh bay cơn đau đầu, giúp đầu nhẹ bẫng và có cảm giác thư thái nhất', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-5.jpg', 1, NULL, NULL),
(9, 'Bước 5', 'Massage rửa tai bọt sảng khoái (mới)', 'Anh sẽ được massage rửa tai sạch sâu và sảng khoái tột đỉnh. Đầu tiên các bạn sẽ cho bọt nhẹ nhàng vào tai anh, dùng tay để làm sạch tai của anh. Sau đó, Skinner sẽ sử dụng kỹ thuật massage tạo tiếng nổ giúp anh thư giãn giống lúc nghe ASRM. Cuối cùng, anh sẽ được xối nước qua tay Skinner để làm sạch sâu tai, loại bỏ hết bụi bẩn và bọt trong tai', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-6.jpg', 1, NULL, NULL),
(11, 'Bước 6', 'Kéo khăn giãn cơ cổ - xối nước thác đổ (mới)', 'Phù hợp với những anh hay phải ngồi nhiều, thường xuyên bị đau cổ, mỏi cổ. Skinner sẽ sử dụng khăn ấm để kéo giãn cơ cổ cho anh, trong bước này, anh chỉ cần thả lỏng và tận hưởng, đừng dùng lực cứng cổ lại nhé!\r\nTiếp theo là động tác xối nước quanh mắt. Động tác này sẽ giúp giải tỏa sự căng thẳng, mệt mỏi của cơ mắt và trán sau một ngày dài nhìn vào các màn hình máy tính', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-7.jpg', 1, NULL, NULL),
(13, 'Bước 7', 'Tư vấn kiểu tóc hợp khuôn mặt', 'Trước khi cắt tóc cho anh, Stylist sẽ hỏi về nghề nghiệp, sở thích và nhìn kiểu tóc, khuôn mặt để tư vấn cho anh kiểu tóc phù hợp nhất', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-8.jpg', 1, NULL, NULL),
(15, 'Bước 8', 'Cắt tóc tạo kiểu bởi stylist hàng đầu', 'Anh sẽ được cắt tóc tạo kiểu một cách tỉ mỉ, tận tình. Các vật dụng phục vụ cho việc cắt tóc đều đầy đủ, có sẵn và thay thế định kỳ', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-9.jpg', 1, NULL, NULL),
(16, 'Bước 9', 'Cạo mặt êm ái – xả sạch tóc con', 'Sau khi cắt xong, Stylist sẽ cạo mặt, râu, các đoạn tóc thừa cho anh. Với tay nghề cao, cẩn thận, đảm bảo cho việc cạo thật êm ái, không đau. Tiếp đó sẽ là một lần xả tóc giúp sạch tóc con', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-10.jpg', 1, NULL, NULL),
(17, 'Bước 10', 'Vuốt sáp – xịt gôm tạo kiểu cao cấp', 'Cuối cùng, anh sẽ được sấy khô tóc, vuốt sáp tạo kiểu và xịt gôm để giữ kiểu tóc đẹp trai suốt cả ngày dài', 'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-11.jpg', 1, NULL, NULL),
(18, 'Bước 11', 'lklklklklk', '<p>test editor content</p>', 'http://localhost:8000/storage/photos/1/扫描文稿.png', 1, '2021-04-17 12:08:57', '2021-04-17 12:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `human_rights` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`, `token`, `human_rights`) VALUES
(1, 'ty', 'vntya002@gmail.com', '0888683817', '$2y$10$c2n3KG.olYuj5slOkGQIU.jfooc1c/o2mn6limqHa3abA8nwznyZG', NULL, '2021-04-07 18:32:20', '2021-04-07 18:32:20', 'N2KFuh9zbOrIZ3V1619236134', ''),
(2, 'hai', 'vntya003@gmail.com', '0888683818', '$2y$10$Plv53QZxE7xK9Mgtz9V3r.Sth7gof6B.6KOFAV7oxZxdSWdNFX89W', NULL, '2021-04-09 20:56:14', '2021-04-09 20:56:14', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCate`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modesl_hair__hots`
--
ALTER TABLE `modesl_hair__hots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idPro`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service__details`
--
ALTER TABLE `service__details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD UNIQUE KEY `user_phone_unique` (`phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCate` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `modesl_hair__hots`
--
ALTER TABLE `modesl_hair__hots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idPro` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service__details`
--
ALTER TABLE `service__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
