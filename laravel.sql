-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 02:54 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `content`, `user_id`, `status`, `created_at`) VALUES
(1, 'Fansipan Adventure', 'images/fansipan/fansipan (1).jpg', '<h2>Địa điểm</h2> \n                                <p>Fansipan, nằm tại huyện Sa Pa, tỉnh Lào Cai, được mệnh danh là \"Nóc nhà Đông Dương\", là đỉnh núi cao nhất trong dãy Hoàng Liên Sơn, với độ cao 3,143 mét so với mực nước biển.</p>\n                                <p>Địa điểm này không chỉ thu hút những người yêu thích chinh phục bởi sự vĩ đại của nó mà còn bởi vẻ đẹp thiên nhiên hùng vĩ. Fansipan là điểm đến mơ ước của nhiều trekkers và du khách, mang đến cảm giác chiến thắng khi đứng trên đỉnh núi cao nhất Đông Dương, hòa mình vào biển mây trắng xóa và chiêm ngưỡng cảnh quan rộng lớn xung quanh. </p>\n                                <h2>Đặc điểm địa hình </h2>\n                                <p>Fansipan có địa hình núi đá vôi hiểm trở với những đoạn đường dốc đứng và gập ghềnh. </p>\n                                <p>Dọc lộ trình lên đỉnh, bạn sẽ đi qua những khu rừng rậm rạp, suối nước trong xanh, và những đồng cỏ xanh mướt. Đường lên đỉnh thường xuyên bị bao phủ bởi sương mù, tạo nên một khung cảnh huyền bí và kỳ vĩ. Các hang động nhỏ và thác nước đẹp mắt dọc theo lộ trình cũng là những điểm nhấn thú vị. </p>\n                                <p>Mùa mưa có thể làm cho con đường trở nên trơn trượt và khó khăn hơn, nhưng bù lại là cảnh sắc thiên nhiên tươi đẹp và không khí trong lành. </p>\n                                <h2>Thời điểm lý tưởng trong năm để khám phá</h2>\n                                <p>Thời điểm lý tưởng để chinh phục Fansipan là từ tháng 10 đến tháng 4. </p>\n                                <p>Trong khoảng thời gian này, thời tiết khô ráo và mát mẻ, với nhiệt độ dao động từ 10 đến 20 độ C, là điều kiện lý tưởng cho việc trekking. </p>\n                                <p>Mùa xuân và mùa thu là thời điểm tuyệt vời nhất để ngắm cảnh, với các cánh đồng hoa dã quỳ vàng rực rỡ hoặc sắc xanh của các thảm thực vật. Mùa hè có thể gặp mưa nhiều, ảnh hưởng đến việc di chuyển và tham quan. Mùa đông có thể rất lạnh và có thể có băng tuyết, làm cho việc chinh phục trở nên khó khăn hơn và cần chuẩn bị kỹ lưỡng. </p>\n                                <h2>Cách di chuyển </h2>\n                                <p>Đi tàu hỏa hoặc xe khách từ Hà Nội đến Sa Pa, thời gian di chuyển khoảng 6-8 giờ. </p>\n                                <p>Từ Sa Pa, thuê xe máy hoặc taxi để di chuyển đến khu vực chân núi. </p>\n                                <h2>Lộ trình chinh phục</h2>\n                                <p>Bắt đầu từ khu vực chân núi, hành trình sẽ dẫn bạn qua các con đường mòn uốn lượn qua các khu rừng rậm và thung lũng tuyệt đẹp. Trên đường, bạn sẽ có cơ hội ngắm nhìn những phong cảnh hùng vĩ và trải nghiệm sự thay đổi rõ rệt về khí hậu và cảnh quan từ chân núi lên đỉnh. Đêm đầu tiên, bạn sẽ nghỉ tại các trại hoặc nhà nghỉ dựng tạm giữa núi để hồi phục sức lực. </p>\n                                <p>Vào ngày thứ hai, bạn sẽ tiếp tục chinh phục các đoạn đường dốc đứng và rừng mây để đạt đến đỉnh Fansipan, nơi bạn sẽ được thưởng ngoạn toàn cảnh hùng vĩ của dãy Hoàng Liên Sơn. </p>\n                                <h2>Các vật dụng cần thiết</h2>\n                                <p>Giày trekking chống nước và chống trượt</p>\n                                <p>Áo khoác chống gió và mưa</p>\n                                <p>Đồ ăn nhẹ và nước uống</p>\n                                <p>Gậy trekking</p>\n                                <p>Kem chống nắng và thuốc chống muỗi</p>\n                                <p>Đèn pin và pin dự phòng</p>\n                                <p>Áo ấm và mũ len nếu đi vào mùa đông</p>\n                                <h2>Các lưu ý khác</h2>\n                                <p>Kiểm tra thời tiết trước khi khởi hành để đảm bảo điều kiện thuận lợi. </p>\n                                <p>Tuân thủ hướng dẫn của các hướng dẫn viên, không rời xa lộ trình. </p>\n                                <p>Mang theo các đồ bảo vệ để tránh bị thương và giữ gìn vệ sinh môi trường xung quanh. </p>\n                                ', 1, 'published', '2024-09-02 09:49:03'),
(2, 'Trekking Khám Phá Cột Cờ Lũng Cú - Hà Giang', 'images/cot-co-lung-cu/cot-co-lung-cu (1).jpg', '<h2>Địa điểm</h2> \n                                <p>Cột Cờ Lũng Cú nằm ở xã Lũng Cú, huyện Đồng Văn, tỉnh Hà Giang, là điểm cực Bắc của Việt Nam. </p>\n                                <p>Địa điểm này không chỉ có ý nghĩa về mặt địa lý mà còn là một biểu tượng của lòng yêu nước và sự kiên cường. </p>\n                                <p>Cột cờ được xây dựng trên đỉnh một ngọn đồi, mang đến một tầm nhìn rộng lớn và tuyệt đẹp ra toàn bộ khu vực biên giới. </p>\n                                <h2>Đặc điểm địa hình </h2>\n                                <p>Cờ Lũng Cú nằm trên đỉnh một ngọn đồi cao khoảng 1,470 mét so với mực nước biển. Địa hình xung quanh chủ yếu là núi đá vôi và các cánh đồng xanh tươi. </p>\n                                <p>Để lên được cột cờ, bạn sẽ phải leo lên hàng trăm bậc thang đá và đi qua các con đường mòn dốc đứng. </p>\n                                <p>Từ trên đỉnh, bạn sẽ có cái nhìn toàn cảnh về các cánh đồng, thung lũng và núi non hùng vĩ xung quanh, tạo nên một cảnh quan thiên nhiên ngoạn mục và rộng lớn. </p>\n                                <h2>Thời điểm lý tưởng trong năm để khám phá</h2>\n                                <p>Thời điểm lý tưởng để tham quan Cột Cờ Lũng Cú là từ tháng 9 đến tháng 12. </p>\n                                <p>Thời gian này thời tiết khô ráo và mát mẻ, giúp bạn dễ dàng leo lên đỉnh và thưởng ngoạn cảnh quan. </p>\n                                <p>Mùa hè có thể có mưa nhiều, làm cho việc di chuyển trở nên khó khăn. </p>\n                                <p>Mùa đông có thể lạnh và có sương mù, nhưng cũng mang đến một cảnh sắc tuyệt đẹp và huyền bí. </p>\n                                <h2>Cách di chuyển </h2>\n                                <p>Từ Hà Nội, bạn có thể đi xe khách hoặc thuê xe riêng đến Hà Giang, thời gian di chuyển khoảng 6-8 giờ. </p>\n                                <p>Từ Hà Giang, tiếp tục di chuyển bằng xe máy hoặc taxi đến xã Lũng Cú, mất khoảng 2-3 giờ. </p>\n                                <h2>Lộ trình chinh phục</h2>\n                                <p>Chúng tôi cung cấp tour trekking trong ngày đến Cột Cờ Lũng Cú, bắt đầu từ chân đồi và đi qua các con đường mòn được trang bị để bạn dễ dàng leo lên đỉnh. </p>\n                                <p>Trên đường đi, bạn sẽ trải nghiệm vẻ đẹp của các cánh đồng và núi non xung quanh. </p> \n                                <p>Từ đỉnh cột cờ, bạn sẽ có cơ hội chiêm ngưỡng toàn cảnh khu vực biên giới và cảm nhận được sự vĩ đại của điểm cực Bắc của Việt Nam. </p>\n                                <h2>Các vật dụng cần thiết</h2>\n                                <p>Giày đi bộ chống trượt</p>\n                                <p>Áo khoác chống gió và mưa</p>\n                                <p>Đồ ăn nhẹ và nước uống</p>\n                                <p>Kem chống nắng và thuốc chống muỗi</p>\n                                <p>Đèn pin và pin dự phòng</p>\n                                <h2>Các lưu ý khác</h2>\n                                <p>Chuẩn bị tinh thần và thể lực tốt trước khi leo lên đỉnh cột cờ. </p>\n                                <p>Tuân thủ các quy định bảo vệ môi trường và giữ gìn vệ sinh khu vực xung quanh. </p>\n                                ', 1, 'published', '2024-09-02 09:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `positioning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `phone`, `positioning`) VALUES
(1, 'Alpine Ascents USA', '109 W. Mercer St., Seattle, WA 98119, USA', '+1 206-378-1927', '47.6241,-122.3568'),
(2, 'Alpine Ascents Canada', '123 Mountain Road, Banff, Alberta T1L 1A9, Canada', '+1 403-762-1234', '51.1784,-115.5708'),
(3, 'Alpine Ascents Switzerland', '12 Bahnhofstrasse, Zermatt, 3920, Switzerland', '+41 27 966 81 00', '46.0207,7.7491'),
(4, 'Alpine Ascents New Zealand', '45 Alpine Avenue, Queenstown, 9300, New Zealand', '+64 3-441 1234', '-45.0312,168.6626'),
(5, 'Alpine Ascents Japan', '5-2-1, Minami-Aoyama, Minato-ku, Tokyo 107-0062, Japan', '+81 3-5774-1234', '35.6655,139.7128'),
(6, 'Alpine Ascents Argentina', '89 Av. San Martín, El Chaltén, Santa Cruz, 9301, Argentina', '+54 2902 49-1234', '-49.3289,-72.8868'),
(7, 'Alpine Ascents Nepal', 'Thamel Marg, Kathmandu 44600, Nepal', '+977 1-4421234', '27.7172,85.3240'),
(8, 'Alpine Ascents Italy', '50 Via Roma, Courmayeur, 11013, Italy', '+39 0165 1234', '45.7915,6.9706'),
(9, 'Alpine Ascents South Africa', '78 Main Road, Cape Town, 8001, South Africa', '+27 21 123 4567', '-33.9249,18.4241'),
(10, 'Alpine Ascents Australia', '32 Alpine Way, Thredbo, NSW 2625, Australia', '+61 2 6457 1234', '-36.5051,148.3028');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_08_31_162459_create_users_table', 1),
(2, '2024_08_31_162505_create_tours_table', 1),
(3, '2024_08_31_162511_create_orders_tours_table', 1),
(4, '2024_08_31_162515_create_blogs_table', 1),
(5, '2024_08_31_162519_create_branches_table', 1),
(6, '2024_09_01_164408_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_tours`
--

CREATE TABLE `orders_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('TDLUxVPQhKd0q34nYrfTjhMLtFXVqBTh98C9hlSq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlk5TGdHTEozRlVIZmdKOG5VOFVoVlViaWRSbzZMd3JkZHdhclRqWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9pbmZvcm1hdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725885612),
('uC8EzlBhDc8ikVksAf1P5ocQMI2kiP4TFwIQ1WNS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ05remcxVmw5TkZpdVVldjV3S0RlVG1IbHZRMWhXNVBnOGVJZ0VrVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725454447);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `introduce` text NOT NULL,
  `types` text NOT NULL,
  `techniques` text NOT NULL,
  `records` text NOT NULL,
  `requirement` text NOT NULL,
  `sheltering` text DEFAULT NULL,
  `hazards` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0987654321', 'admin@gmail.com', '$2y$12$dZmGDSl9QpJO5oGqDTiCZulOElDflEDYnzFtasTU79dm3jtQVOYVS', NULL, 1, '2024-09-02 09:48:55', NULL),
(2, 'Nguyễn Hiếu', '0123456789', 'hieu1@gmail.com', '$2y$12$VS5HvLOHa4R6evN0uJImreo1d1B.5aqz83oQ88xVqEyn8FiEA1Ray', NULL, 1, '2024-09-04 05:49:16', '2024-09-04 05:49:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_tours`
--
ALTER TABLE `orders_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_tours_user_id_foreign` (`user_id`),
  ADD KEY `orders_tours_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders_tours`
--
ALTER TABLE `orders_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders_tours`
--
ALTER TABLE `orders_tours`
  ADD CONSTRAINT `orders_tours_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`),
  ADD CONSTRAINT `orders_tours_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
