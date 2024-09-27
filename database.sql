-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2024 lúc 05:35 AM
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
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
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
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders_tours`
--

INSERT INTO `orders_tours` (`id`, `user_id`, `tour_id`, `name`, `phone`, `email`, `quantity`, `total`, `note`, `created_at`, `updated_at`) VALUES
(31, NULL, 1, 'Nguyen Van A', '0912345678', 'nguyenvana@example.com', 2, 7000000, NULL, '2024-09-25 03:29:42', '2024-09-25 03:29:42'),
(32, NULL, 2, 'Tran Thi B', '0919876543', 'tranthib@example.com', 1, 3000000, NULL, '2024-09-25 03:30:13', '2024-09-25 03:30:13'),
(33, NULL, 7, 'Le Van C', '0934567890', 'levanc@example.com', 4, 12400000, NULL, '2024-09-25 03:30:38', '2024-09-25 03:30:38'),
(34, NULL, 3, 'Pham Thi D', '0941234567', 'phamthid@example.com', 2, 5000000, NULL, '2024-09-25 03:31:05', '2024-09-25 03:31:05'),
(35, NULL, 8, 'Do Van E', '0959876543', 'dovane@example.com', 1, 2500000, NULL, '2024-09-25 03:31:23', '2024-09-25 03:31:23'),
(36, NULL, 1, 'Hoang Thi F', '0961237890', 'hoangthif@example.com', 3, 10500000, NULL, '2024-09-25 03:31:42', '2024-09-25 03:31:42'),
(37, NULL, 2, 'Bui Van G', '0979871234', 'buivang@example.com', 2, 6000000, NULL, '2024-09-25 03:32:07', '2024-09-25 03:32:07'),
(61, NULL, 3, 'Dang Thi H', '0981234567', 'dangthih@example.com', 1, 2500000, 'Note 8', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(62, NULL, 7, 'Vu Van I', '0997654321', 'vuvani@example.com', 5, 15500000, 'Note 9', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(63, NULL, 8, 'Ngo Thi J', '0901234567', 'ngothij@example.com', 2, 5000000, 'Note 10', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(64, NULL, 1, 'Pham Van K', '0916549873', 'phamvank@example.com', 3, 10500000, 'Note 11', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(65, NULL, 2, 'Tran Thi L', '0923456789', 'tranthil@example.com', 4, 12000000, 'Note 12', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(66, NULL, 3, 'Nguyen Van M', '0931234567', 'nguyenvanm@example.com', 1, 2500000, 'Note 13', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(67, NULL, 7, 'Le Thi N', '0949876543', 'lethin@example.com', 2, 6200000, 'Note 14', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(68, NULL, 8, 'Hoang Van O', '0951234567', 'hoangvano@example.com', 5, 12500000, 'Note 15', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(69, NULL, 1, 'Vu Thi P', '0968765432', 'vuthip@example.com', 3, 10500000, 'Note 16', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(70, NULL, 2, 'Ngo Van Q', '0971234567', 'ngovanq@example.com', 1, 3000000, 'Note 17', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(71, NULL, 3, 'Dang Thi R', '0987654321', 'dangthir@example.com', 2, 5000000, 'Note 18', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(72, NULL, 7, 'Bui Thi S', '0991234567', 'buithis@example.com', 4, 12400000, 'Note 19', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(73, NULL, 8, 'Do Van T', '0909876543', 'dovanet@example.com', 2, 5000000, 'Note 20', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(74, NULL, 1, 'Nguyen Van U', '0911234567', 'nguyenvanu@example.com', 3, 10500000, 'Note 21', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(75, NULL, 2, 'Tran Thi V', '0929876543', 'tranthiv@example.com', 1, 3000000, 'Note 22', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(76, NULL, 3, 'Le Van W', '0939876543', 'levanw@example.com', 5, 12500000, 'Note 23', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(77, NULL, 7, 'Pham Thi X', '0947654321', 'phamthix@example.com', 2, 6200000, 'Note 24', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(78, NULL, 8, 'Hoang Van Y', '0959871234', 'hoangvany@example.com', 3, 7500000, 'Note 25', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(79, NULL, 1, 'Bui Thi Z', '0961239876', 'buithiz@example.com', 4, 14000000, 'Note 26', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(80, NULL, 2, 'Dang Van AA', '0976549873', 'dangvanaa@example.com', 2, 6000000, 'Note 27', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(81, NULL, 3, 'Ngo Thi AB', '0981237890', 'ngothiab@example.com', 1, 2500000, 'Note 28', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(82, NULL, 7, 'Vu Van AC', '0998765432', 'vuvanac@example.com', 2, 6200000, 'Note 29', '2024-09-25 03:33:19', '2024-09-25 03:33:19'),
(83, NULL, 8, 'Do Thi AD', '0909876543', 'dothiad@example.com', 3, 7500000, 'Note 30', '2024-09-25 03:33:19', '2024-09-25 03:33:19');

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
('A5HXfaoBdBaWUkBvsytDFx3Hzbk2PS7clll1Px9B', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjZsa05Ham85TWwwWmVuaHR4cnVQYU9yU1lublB1ZENPMnFid0NWTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9vcmRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727235252),
('HAaXjYc7NZN0S0p1lJsABkX884gLMoTOVkjtFvVZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2RRbDVPRXlnRjgxaHN2emJkT3B3Q1NQc2RlM0x5eEtXNUxhTHZCRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9icmFuY2hlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727209240);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `location` text NOT NULL,
  `features` text NOT NULL,
  `besttime` text NOT NULL,
  `directions` text NOT NULL,
  `trekkingroutes` text NOT NULL,
  `items` text NOT NULL,
  `cautions` text NOT NULL,
  `requirements` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `name`, `price`, `image`, `location`, `features`, `besttime`, `directions`, `trekkingroutes`, `items`, `cautions`, `requirements`, `created_at`, `updated_at`) VALUES
(1, 'Fansipan Adventure Expedition', 3500000, 'images/fansipan/fansipan (1).jpg', '<p>Fansipan, located in Sa Pa district, Lào Cai province, is known as the \"Roof of Indochina\" and is the highest peak in the Hoang Lien Son range, standing at 3,143 meters above sea level.</p> <p>This location not only attracts adventure enthusiasts due to its grandeur but also because of its majestic natural beauty. Fansipan is a dream destination for many trekkers and travelers, offering a sense of triumph when standing on the highest peak of Indochina, immersing in the sea of white clouds, and admiring the vast surrounding landscapes.</p>', '<p>Fansipan features rugged limestone terrain with steep and uneven paths.</p> <p>Along the route to the summit, you will pass through dense forests, clear streams, and lush green meadows. The path to the top is often shrouded in mist, creating a mysterious and magnificent scene. Small caves and beautiful waterfalls along the route are also interesting highlights.</p> <p>The rainy season can make the road slippery and more challenging, but it is compensated by the beautiful natural scenery and fresh air.</p>', ' <p>The ideal time to conquer Fansipan is from October to April.</p> <p>During this period, the weather is dry and cool, with temperatures ranging from 10 to 20 degrees Celsius, making it ideal for trekking.</p> <p>Spring and autumn are the best times to enjoy the scenery, with fields of vibrant yellow wild sunflowers or the green hues of vegetation. Summer may bring heavy rains, affecting travel and sightseeing. Winter can be very cold, with possible ice and snow, making the conquest more difficult and requiring careful preparation.</p>', '<p>Take a train or bus from Hanoi to Sa Pa, with travel time around 6-8 hours.</p> <p>From Sa Pa, rent a motorbike or take a taxi to reach the base of the mountain.</p>', '<p>Starting from the base of the mountain, the journey will lead you through winding trails across dense forests and beautiful valleys. Along the way, you will have the opportunity to admire magnificent landscapes and experience the drastic changes in climate and scenery from the base to the summit. On the first night, you will rest at camps or temporary lodges in the mountains to regain your strength.</p> <p>On the second day, you will continue to conquer steep paths and cloud forests to reach the summit of Fansipan, where you will be rewarded with a panoramic view of the majestic Hoang Lien Son range.</p>', '<p>Waterproof and non-slip trekking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Trekking poles</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p> <p>Warm clothing and woolen hat if trekking in winter</p>', '<p>Check the weather before departing to ensure favorable conditions.</p> <p>Follow the guides instructions and do not stray from the route.</p> <p>Carry protective gear to avoid injury and maintain the cleanliness of the surrounding environment.</p>', '', '2024-09-05 11:03:33', '2024-09-05 11:03:33'),
(2, 'Phong Nha - Ke Bang Discovery', 3000000, 'images/phong-nha-ke-bang/phong-nha-ke-bang (1).jpg', '<p>Phong Nha - Ke Bang, located in Quang Binh province, is a UNESCO World Heritage site known for its magnificent cave systems.</p> <p>This area is famous for large caves such as Son Doong, Phong Nha, and Tien Son, offering a unique and rich natural exploration experience.</p> <p>With rivers, waterfalls, and majestic landscapes, it is an ideal destination for those passionate about caves and exploring pristine nature.</p>', '<p>Phong Nha - Ke Bang features limestone terrain with a vast cave system.</p> <p>Son Doong, the worlds largest cave, stands out with its unique stalactites and stalagmites. Other caves like Phong Nha and Tien Son are equally impressive, with fascinating geological structures and stunning natural landscapes.</p> <p>The surrounding terrain mainly consists of limestone mountains and tropical forests, creating a majestic and mysterious natural setting.</p> <p>Each cave has its own unique beauty, from clear blue lakes to rich ecosystems.</p> ', '<p>The ideal time to explore Phong Nha - Ke Bang is from September to December.</p> <p>During this period, the weather is dry with little rain, making it suitable for cave visits and exploring the surrounding areas.</p> <p>Summer may bring heavy rains, affecting travel and sightseeing.</p> <p>Winter can be cold and damp, making cave exploration more challenging.</p>', '<p>From Hanoi, you can take a train or fly to Dong Hoi.</p> <p>From Dong Hoi, continue by taxi or bus to Phong Nha - Ke Bang, which takes about 1-2 hours.</p> ', '<p>With a 4-day 3-night tour, the journey begins at the foot of the mountain, where a professional guide will lead you into the heart of Phong Nha Cave.</p> <p>With spacious pathways and fascinating limestone formations, you will have the opportunity to admire beautiful stalactites and the unique ecosystem within the cave. The cave tour typically lasts about 2-3 hours, depending on your pace and interest.</p> <p>After that, you will explore Son Doong Cave, where you will have to navigate narrow tunnels, swim through underground lakes, and conquer uncharted areas to enjoy the pristine beauty of nature.</p> ', '<p>Waterproof walking shoes</p> <p>Rainproof and windproof jacket</p> <p>Flashlight and spare batteries</p> <p>Snacks and water</p> <p>Sunscreen and mosquito repellent</p> <p>Protective gear such as hats and gloves</p>', '<p>Follow the guides instructions and avoid harming the environment.</p> <p>Protect sensitive areas and maintain silence to avoid disturbing the wildlife and surrounding ecosystems.</p>', '', '2024-09-05 11:03:33', '2024-09-05 11:03:33'),
(3, 'Ta Xua Cloud Hunting Trek', 2500000, 'images/ta-xua/ta-xua (1).jpg', '<p>Ta Xua, located in Bac Yen district, Son La province, is famous for its majestic mountain ranges and sea of white clouds.</p> <p>This location is a paradise for those who love trekking and want to experience the natural beauty of Vietnam Northwest region.</p> <p>Ta Xua is also an ideal place to enjoy the pristine scenery and misty clouds, creating a mesmerizing natural landscape.</p>', '<p>Ta Xua stands at approximately 2,865 meters high and is characterized by rugged limestone terrain.</p> <p>The path to the summit is often covered in mist and early morning fog, creating a mysterious and majestic landscape. You will pass through forests, lush green fields, and steep trails.</p> <p>Notably, Ta Xua has narrow and challenging trails, requiring good physical fitness and trekking skills to overcome.</p> <p>Other highlights include lush green meadows and deep valleys.</p> ', '<p>The ideal time to explore Ta Xua is from October to April.</p> <p>During this period, the weather is dry and cool, perfect for trekking and viewing the sea of clouds.</p> <p>Summer can bring heavy rains, making travel difficult.</p> <p>Winter can be cold and damp, so thorough preparation is necessary for the trip.</p>', '<p>From Hanoi, take a bus or train to Son La.</p> <p>From Son La, continue by taxi or motorbike to the Ta Xua area.</p>', '<p>Starting the journey from the foot of Ta Xua Mountain, you will trek through winding trails and lush green tea hills.</p> <p>We will guide you to ideal stops to admire the stunning scenery of clouds and mist. The first night will be spent at camps or guesthouses in the mountain area.</p> <p>On the second day, you will continue to conquer higher peaks and enjoy the breathtaking panorama of the Ta Xua mountain range.</p>', 'p>Waterproof and non-slip trekking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Trekking poles</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p> <p>Warm clothing and a wool hat</p> ', '<p>Prepare mentally and physically before starting the journey.</p> <p>Follow safety instructions and protect the surrounding environment.</p>', '', '2024-09-05 11:03:33', '2024-09-05 11:03:33'),
(7, 'Ban Gioc Waterfall Exploration', 3100000, 'images/upload/1727127763-thac-ban-gioc (2).jpg', '<p>Ban Gioc Waterfall, located in Trung Khanh district, Cao Bang province, is one of the most beautiful waterfalls in Vietnam and a perfect destination for nature lovers.</p> <p>Situated on the border between Vietnam and China, Ban Gioc is the largest waterfall in Southeast Asia and the fourth largest in the world.</p> <p>With its majestic landscape and pristine environment, this is a destination not to be missed.</p>', '<p>Ban Gioc Waterfall is formed by water flowing over limestone layers, creating a spectacular landscape with multiple cascades.</p> <p>The powerful water plunges from a height of about 30 meters, creating a white mist and a roaring sound that echoes throughout the area.</p> <p>Surrounding the waterfall are dense forests and lush green fields, creating a perfect and peaceful natural picture.</p>', '<p>The ideal time to visit Ban Gioc Waterfall is from September to December.</p> <p>During this period, the waterfall\'s flow is at its peak, creating a grand and impressive scene.</p> <p>Summer may bring heavy rains, affecting travel and sightseeing.</p> <p>Winter can be cold and dry, making it easier to explore the waterfall.</p>', '<p>From Hanoi, you can take a bus or hire a private car to Cao Bang, with a travel time of about 6-8 hours.</p> <p>From Cao Bang, continue by taxi or motorbike to the waterfall area, which takes about 1-2 hours.</p>', '<p>The journey begins at the foot of the waterfall, where you will walk along easy trails to get closer to Ban Gioc Waterfall.</p> <p>You will have the opportunity to admire the stunning scenery of the cascading water and experience the waterfall\'s grandeur.</p> <p>We offer one-day tours or combined tours with other attractions in the area, such as Nguom Ngao Cave, for a complete experience.</p> <p>You will engage in activities such as hiking and exploring deeper into the surrounding areas, giving you a comprehensive view of the natural beauty here.</p>', '<p>Waterproof walking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p>', '<p>Follow environmental protection regulations and avoid damaging the waterfall.</p> <p>Be cautious when walking on slippery trails around the waterfall.</p>', '<p>Does not require much physical strength, only light walking ability is needed.</p> <p>No trekking experience is required, suitable for all participants.</p> <p>Suitable for all ages.</p>', '2024-09-23 21:42:43', '2024-09-23 21:50:52'),
(8, 'Lung Cu - Northernmost Vietnam Adventure', 2500000, 'images/upload/1727129107-cot-co-lung-cu (9).jpg', '<p>Lung Cu Flag Tower is located in Lung Cu commune, Dong Van district, Ha Giang province, marking the northernmost point of Vietnam.</p> <p>This site holds not only geographical significance but also symbolizes patriotism and resilience.</p> <p>The flag tower is built on top of a hill, offering a vast and stunning view of the entire border area.</p>', '<p>Lung Cu Flag Tower stands on a hilltop at approximately 1,470 meters above sea level. The surrounding terrain consists mainly of limestone mountains and lush green fields.</p> <p>To reach the flag tower, you will need to climb hundreds of stone steps and navigate steep mountain paths.</p> <p>From the summit, you will have a panoramic view of the fields, valleys, and majestic mountains, creating a breathtaking and expansive natural landscape.</p>', '<p>The ideal time to visit Lung Cu Flag Tower is from September to December.</p> <p>During this period, the weather is dry and cool, making it easier to climb to the summit and enjoy the scenery.</p> <p>Summer may bring heavy rains, making travel more challenging.</p> <p>Winter can be cold and foggy, but it also offers a beautiful and mystical landscape.</p>', '<p>From Hanoi, you can take a bus or hire a private car to Ha Giang, with a travel time of about 6-8 hours.</p> <p>From Ha Giang, continue by motorbike or taxi to Lung Cu commune, which takes about 2-3 hours.</p>', '<p>We offer a one-day trekking tour to Lung Cu Flag Tower, starting from the foot of the hill and following well-equipped trails to make the climb easier.</p> <p>Along the way, you will experience the beauty of the surrounding fields and mountains.</p> <p>From the top of the flag tower, you will have the opportunity to admire the panoramic view of the border area and feel the grandeur of Vietnam\'s northernmost point.</p>', '<p>Non-slip walking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p>', '<p>Prepare mentally and physically before climbing to the top of the flag tower.</p> <p>Follow environmental protection regulations and keep the surrounding area clean.</p>', '<p>Requires moderate physical fitness as you need to climb hundreds of steps to reach the top of the flagpole.</p> <p>No climbing experience is required, but good endurance is recommended.</p> <p>Suitable for those aged 16 and above.</p>', '2024-09-23 22:01:46', '2024-09-23 22:05:07');

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
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `avatar`, `role`, `verification_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0987654321', 'admin@gmail.com', '$2y$12$6D.7kCxp/JtamOG.SXXMQ.SBap5GguqKm7862HoG6hHNMxKJ/sVAW', NULL, 1, NULL, 0, '2024-09-13 09:27:49', NULL),
(2, 'Nguyễn Văn Hiếu', '0123456789', 'hieu1@gmail.com', '$2y$12$gbwNuR03ky2yJKgHSV8/hOezHptIWToaTmn9/LoDvRQ7xHwIiBx3K', NULL, 0, NULL, 0, '2024-09-13 09:27:49', NULL),
(23, 'Nguyen Van A', '0912345678', 'nguyenvana@example.com', 'hashedpassword1', NULL, 0, 123456, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(24, 'Tran Thi B', '0987654322', 'tranthib@example.com', 'hashedpassword2', NULL, 0, 234567, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(25, 'Le Van C', '0911223344', 'levanc@example.com', 'hashedpassword3', NULL, 1, 345678, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(26, 'Pham Thi D', '0922334455', 'phamthid@example.com', 'hashedpassword4', NULL, 0, 456789, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(27, 'Do Van E', '0933445566', 'dovane@example.com', 'hashedpassword5', NULL, 0, 567890, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(28, 'Hoang Thi F', '0944556677', 'hoangthif@example.com', 'hashedpassword6', NULL, 1, 678901, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(29, 'Bui Van G', '0955667788', 'buivang@example.com', 'hashedpassword7', NULL, 1, 789012, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(30, 'Dang Thi H', '0966778899', 'dangthih@example.com', 'hashedpassword8', NULL, 0, 890123, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(31, 'Vu Van I', '0977889900', 'vuvani@example.com', 'hashedpassword9', NULL, 1, 901234, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(32, 'Ngo Thi J', '0988990011', 'ngothij@example.com', 'hashedpassword10', NULL, 0, 123012, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(33, 'Pham Van K', '0900112233', 'phamvank@example.com', 'hashedpassword11', NULL, 1, 234123, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(34, 'Tran Thi L', '0911002233', 'tranthil@example.com', 'hashedpassword12', NULL, 0, 345234, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(35, 'Nguyen Van M', '0922003344', 'nguyenvanm@example.com', 'hashedpassword13', NULL, 0, 456345, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(36, 'Le Thi N', '0933004455', 'lethin@example.com', 'hashedpassword14', NULL, 1, 567456, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(37, 'Hoang Van O', '0944005566', 'hoangvano@example.com', 'hashedpassword15', NULL, 0, 678567, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(38, 'Vu Thi P', '0955006677', 'vuthip@example.com', 'hashedpassword16', NULL, 1, 789678, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(39, 'Ngo Van Q', '0966007788', 'ngovaneq@example.com', 'hashedpassword17', NULL, 0, 890789, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(40, 'Dang Thi R', '0977008899', 'dangthir@example.com', 'hashedpassword18', NULL, 0, 901890, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(41, 'Bui Thi S', '0988009900', 'buithis@example.com', 'hashedpassword19', NULL, 1, 123901, 1, '2024-09-25 03:04:36', '2024-09-25 03:04:36'),
(42, 'Do Van T', '0999000112', 'dovanet@example.com', 'hashedpassword20', NULL, 0, 234012, 0, '2024-09-25 03:04:36', '2024-09-25 03:04:36');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
