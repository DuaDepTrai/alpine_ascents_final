-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 21, 2024 lúc 05:37 PM
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
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `positioning` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `phone`, `positioning`, `created_at`, `updated_at`) VALUES
(1, 'Alpine Ascents USA', '109 W. Mercer St., Seattle, WA 98119, USA', '+1 206-378-1927', '47.6241,-122.3568', NULL, NULL),
(2, 'Alpine Ascents Canada', '123 Mountain Road, Banff, Alberta T1L 1A9, Canada', '+1 403-762-1234', '51.1784,-115.5708', NULL, NULL),
(3, 'Alpine Ascents Switzerland', '12 Bahnhofstrasse, Zermatt, 3920, Switzerland', '+41 27 966 81 00', '46.0207,7.7491', NULL, NULL),
(4, 'Alpine Ascents New Zealand', '45 Alpine Avenue, Queenstown, 9300, New Zealand', '+64 3-441 1234', '-45.0312,168.6626', NULL, NULL),
(5, 'Alpine Ascents Japan', '5-2-1, Minami-Aoyama, Minato-ku, Tokyo 107-0062, Japan', '+81 3-5774-1234', '35.6655,139.7128', NULL, NULL),
(6, 'Alpine Ascents Argentina', '89 Av. San Martín, El Chaltén, Santa Cruz, 9301, Argentina', '+54 2902 49-1234', '-49.3289,-72.8868', NULL, NULL),
(7, 'Alpine Ascents Nepal', 'Thamel Marg, Kathmandu 44600, Nepal', '+977 1-4421234', '27.7172,85.3240', NULL, NULL),
(8, 'Alpine Ascents Italy', '50 Via Roma, Courmayeur, 11013, Italy', '+39 0165 1234', '45.7915,6.9706', NULL, NULL),
(9, 'Alpine Ascents South Africa', '78 Main Road, Cape Town, 8001, South Africa', '+27 21 123 4567', '-33.9249,18.4241', NULL, NULL),
(11, 'Alpine Ascents Australia', '32 Alpine Way, Thredbo, NSW 2625, Australia', '+61 2 6457 5678', '-36.5051,148.3028', '2024-09-20 17:53:35', '2024-09-20 17:53:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tours_id` bigint(20) UNSIGNED NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `videos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`videos`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `galleries`
--

INSERT INTO `galleries` (`id`, `tours_id`, `images`, `videos`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"\\/images\\/fansipan\\/fansipan (1).jpg\",\"\\/images\\/fansipan\\/fansipan (2).jpg\",\"\\/images\\/fansipan\\/fansipan (3).jpg\",\"\\/images\\/fansipan\\/fansipan (4).jpg\",\"\\/images\\/fansipan\\/fansipan (5).jpg\",\"\\/images\\/fansipan\\/fansipan (6).jpg\",\"\\/images\\/fansipan\\/fansipan (7).jpg\",\"\\/images\\/fansipan\\/fansipan (8).jpg\"]', '[\"https:\\/\\/www.youtube.com\\/watch?v=-AREhw2Ot3o\"]', NULL, '2024-09-18 17:09:59'),
(2, 2, '[\"\\/images\\/phong-nha-ke-bang\\/phong-nha-ke-bang (1).jpg\",\"\\/images\\/phong-nha-ke-bang\\/phong-nha-ke-bang (2).jpg\",\"\\/images\\/phong-nha-ke-bang\\/phong-nha-ke-bang (3).jpg\",\"\\/images\\/phong-nha-ke-bang\\/phong-nha-ke-bang (4).jpg\",\"\\/images\\/phong-nha-ke-bang\\/phong-nha-ke-bang (5).jpg\",\"\\/images\\/phong-nha-ke-bang\\/phong-nha-ke-bang (6).jpg\",\"\\/images\\/phong-nha-ke-bang\\/phong-nha-ke-bang (8).jpg\",\"images\\/phong-nha-ke-bang (11).jpg\"]', '[\"https:\\/\\/www.youtube.com\\/watch?v=yOtqF9DRI-s\"]', NULL, '2024-09-18 17:47:51'),
(4, 3, '[\"images\\/ta-xua (1).jpg\",\"images\\/ta-xua (2).jpg\",\"images\\/ta-xua (3).jpg\",\"images\\/ta-xua (4).jpg\",\"images\\/ta-xua (5).jpg\",\"images\\/ta-xua (6).jpg\",\"images\\/ta-xua (7).jpg\",\"images\\/ta-xua (8).jpg\"]', '[\"https:\\/\\/www.youtube.com\\/watch?v=hO_VjQXSjAQ\"]', '2024-09-18 17:47:15', '2024-09-18 17:47:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_08_31_162459_create_users_table', 1),
(2, '2024_08_31_162505_create_tours_table', 1),
(3, '2024_08_31_162511_create_orders_tours_table', 1),
(4, '2024_08_31_162515_create_blogs_table', 1),
(5, '2024_08_31_162519_create_branches_table', 1),
(6, '2024_09_01_164408_create_sessions_table', 2),
(7, '2024_09_04_163005_create_gallery_table', 3),
(8, '2024_09_04_163005_create_media_libraries_table', 4),
(9, '2024_09_07_164723_create_gallery_table', 5),
(10, '2024_09_07_173553_create_gallery_table', 6),
(12, '2024_09_07_173553_create_galleries_table', 7),
(13, '2024_09_07_182510_create_galleries_table', 8),
(14, '2024_09_07_185222_create_galleries_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_tours`
--

CREATE TABLE `orders_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
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
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('95MGz7GTuH0JrlCEi0LSYqNSwhfFh71Zsu15geGR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTmtYMTgxMUtPYlRNaFVzaVNzRU81QWF6d0ZuR3BOc0dNWUZmWmVoRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1726854127),
('ThbrviBHYdLOYx6NaGWouBhw8swBvhNqWp1ocq2x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0R6ZE11QzVtdTJVb0FsU0N2TzZYMDJhY2JwTTNsRFB0S1Z2aTRQSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9icmFuY2hlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726854841);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `location` text NOT NULL,
  `features` text NOT NULL,
  `besttime` text NOT NULL,
  `directions` text NOT NULL,
  `trekkingroutes` text NOT NULL,
  `items` text DEFAULT NULL,
  `cautions` text DEFAULT NULL,
  `requirements` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `name`, `price`, `image`, `location`, `features`, `besttime`, `directions`, `trekkingroutes`, `items`, `cautions`, `requirements`, `created_at`, `updated_at`) VALUES
(1, 'Fansipan Expedition', 3500000, 'images/fansipan/fansipan (2).png', '<p>Fansipan, located in Sa Pa district, Lào Cai province, is known as the \"Roof of Indochina\" and is the highest peak in the Hoang Lien Son range, standing at 3,143 meters above sea level.</p> <p>This location not only attracts adventure enthusiasts due to its grandeur but also because of its majestic natural beauty. Fansipan is a dream destination for many trekkers and travelers, offering a sense of triumph when standing on the highest peak of Indochina, immersing in the sea of white clouds, and admiring the vast surrounding landscapes.</p>', '<p>Fansipan features rugged limestone terrain with steep and uneven paths.</p> <p>Along the route to the summit, you will pass through dense forests, clear streams, and lush green meadows. The path to the top is often shrouded in mist, creating a mysterious and magnificent scene. Small caves and beautiful waterfalls along the route are also interesting highlights.</p> <p>The rainy season can make the road slippery and more challenging, but it is compensated by the beautiful natural scenery and fresh air.</p>', ' <p>The ideal time to conquer Fansipan is from October to April.</p> <p>During this period, the weather is dry and cool, with temperatures ranging from 10 to 20 degrees Celsius, making it ideal for trekking.</p> <p>Spring and autumn are the best times to enjoy the scenery, with fields of vibrant yellow wild sunflowers or the green hues of vegetation. Summer may bring heavy rains, affecting travel and sightseeing. Winter can be very cold, with possible ice and snow, making the conquest more difficult and requiring careful preparation.</p>', '<p>Take a train or bus from Hanoi to Sa Pa, with travel time around 6-8 hours.</p> <p>From Sa Pa, rent a motorbike or take a taxi to reach the base of the mountain.</p>', '<p>Starting from the base of the mountain, the journey will lead you through winding trails across dense forests and beautiful valleys. Along the way, you will have the opportunity to admire magnificent landscapes and experience the drastic changes in climate and scenery from the base to the summit. On the first night, you will rest at camps or temporary lodges in the mountains to regain your strength.</p> <p>On the second day, you will continue to conquer steep paths and cloud forests to reach the summit of Fansipan, where you will be rewarded with a panoramic view of the majestic Hoang Lien Son range.</p>', '<p>Waterproof and non-slip trekking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Trekking poles</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p> <p>Warm clothing and woolen hat if trekking in winter</p>', '<p>Check the weather before departing to ensure favorable conditions.</p> <p>Follow the guides instructions and do not stray from the route.</p> <p>Carry protective gear to avoid injury and maintain the cleanliness of the surrounding environment.</p>', '', '2024-09-05 11:03:33', '2024-09-05 11:03:33'),
(2, 'Phong Nha - Ke Bang Trekking', 3000000, 'images/phong-nha-ke-bang/phong-nha-ke-bang (1).jpg', '<p>Phong Nha - Ke Bang, located in Quang Binh province, is a UNESCO World Heritage site known for its magnificent cave systems.</p> <p>This area is famous for large caves such as Son Doong, Phong Nha, and Tien Son, offering a unique and rich natural exploration experience.</p> <p>With rivers, waterfalls, and majestic landscapes, it is an ideal destination for those passionate about caves and exploring pristine nature.</p>', '<p>Phong Nha - Ke Bang features limestone terrain with a vast cave system.</p> <p>Son Doong, the worlds largest cave, stands out with its unique stalactites and stalagmites. Other caves like Phong Nha and Tien Son are equally impressive, with fascinating geological structures and stunning natural landscapes.</p> <p>The surrounding terrain mainly consists of limestone mountains and tropical forests, creating a majestic and mysterious natural setting.</p> <p>Each cave has its own unique beauty, from clear blue lakes to rich ecosystems.</p> ', '<p>The ideal time to explore Phong Nha - Ke Bang is from September to December.</p> <p>During this period, the weather is dry with little rain, making it suitable for cave visits and exploring the surrounding areas.</p> <p>Summer may bring heavy rains, affecting travel and sightseeing.</p> <p>Winter can be cold and damp, making cave exploration more challenging.</p>', '<p>From Hanoi, you can take a train or fly to Dong Hoi.</p> <p>From Dong Hoi, continue by taxi or bus to Phong Nha - Ke Bang, which takes about 1-2 hours.</p> ', '<p>With a 4-day 3-night tour, the journey begins at the foot of the mountain, where a professional guide will lead you into the heart of Phong Nha Cave.</p> <p>With spacious pathways and fascinating limestone formations, you will have the opportunity to admire beautiful stalactites and the unique ecosystem within the cave. The cave tour typically lasts about 2-3 hours, depending on your pace and interest.</p> <p>After that, you will explore Son Doong Cave, where you will have to navigate narrow tunnels, swim through underground lakes, and conquer uncharted areas to enjoy the pristine beauty of nature.</p> ', '<p>Waterproof walking shoes</p> <p>Rainproof and windproof jacket</p> <p>Flashlight and spare batteries</p> <p>Snacks and water</p> <p>Sunscreen and mosquito repellent</p> <p>Protective gear such as hats and gloves</p>', '<p>Follow the guides instructions and avoid harming the environment.</p> <p>Protect sensitive areas and maintain silence to avoid disturbing the wildlife and surrounding ecosystems.</p>', '', '2024-09-05 11:03:33', '2024-09-05 11:03:33'),
(3, 'Ta Xua Trekking', 2500000, 'images/ta-xua/ta-xua (1).jpg', '<p>Ta Xua, located in Bac Yen district, Son La province, is famous for its majestic mountain ranges and sea of white clouds.</p> <p>This location is a paradise for those who love trekking and want to experience the natural beauty of Vietnam Northwest region.</p> <p>Ta Xua is also an ideal place to enjoy the pristine scenery and misty clouds, creating a mesmerizing natural landscape.</p>', '<p>Ta Xua stands at approximately 2,865 meters high and is characterized by rugged limestone terrain.</p> <p>The path to the summit is often covered in mist and early morning fog, creating a mysterious and majestic landscape. You will pass through forests, lush green fields, and steep trails.</p> <p>Notably, Ta Xua has narrow and challenging trails, requiring good physical fitness and trekking skills to overcome.</p> <p>Other highlights include lush green meadows and deep valleys.</p> ', '<p>The ideal time to explore Ta Xua is from October to April.</p> <p>During this period, the weather is dry and cool, perfect for trekking and viewing the sea of clouds.</p> <p>Summer can bring heavy rains, making travel difficult.</p> <p>Winter can be cold and damp, so thorough preparation is necessary for the trip.</p>', '<p>From Hanoi, take a bus or train to Son La.</p> <p>From Son La, continue by taxi or motorbike to the Ta Xua area.</p>', '<p>Starting the journey from the foot of Ta Xua Mountain, you will trek through winding trails and lush green tea hills.</p> <p>We will guide you to ideal stops to admire the stunning scenery of clouds and mist. The first night will be spent at camps or guesthouses in the mountain area.</p> <p>On the second day, you will continue to conquer higher peaks and enjoy the breathtaking panorama of the Ta Xua mountain range.</p>', 'p>Waterproof and non-slip trekking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Trekking poles</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p> <p>Warm clothing and a wool hat</p> ', '<p>Prepare mentally and physically before starting the journey.</p> <p>Follow safety instructions and protect the surrounding environment.</p>', '', '2024-09-05 11:03:33', '2024-09-05 11:03:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `verification_code` int(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `avatar`, `role`, `verification_code`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0987654321', 'admin@gmail.com', '$2y$12$6D.7kCxp/JtamOG.SXXMQ.SBap5GguqKm7862HoG6hHNMxKJ/sVAW', NULL, 1, NULL, '2024-09-13 09:27:49', NULL),
(2, 'Nguyễn Văn Hiếu', '0123456789', 'hieu1@gmail.com', '$2y$12$gbwNuR03ky2yJKgHSV8/hOezHptIWToaTmn9/LoDvRQ7xHwIiBx3K', NULL, 0, NULL, '2024-09-13 09:27:49', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_tour_id_foreign` (`tours_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders_tours`
--
ALTER TABLE `orders_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_tours_user_id_foreign` (`user_id`),
  ADD KEY `orders_tours_tour_id_foreign` (`tour_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `orders_tours`
--
ALTER TABLE `orders_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_tour_id_foreign` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders_tours`
--
ALTER TABLE `orders_tours`
  ADD CONSTRAINT `orders_tours_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`),
  ADD CONSTRAINT `orders_tours_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
