-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2019 lúc 11:10 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Repellendus sit qui adipisci et aliquam omnis expedita.', 'Quaerat non quas omnis. Qui atque voluptates et aliquid laborum est quibusdam minus. Qui sed modi iure minima.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(2, 'Dignissimos pariatur eos aspernatur architecto vel dolor.', 'Fugit qui dolore quas. Ut est impedit provident provident ipsam. Labore id beatae praesentium nostrum totam quia. Est in qui unde aut explicabo ex est dolor. Maxime ut a autem molestiae veniam in possimus.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(3, 'Ad sint consequuntur rerum esse.', 'Aut qui et corporis rerum. Autem molestias in voluptatem provident. Aspernatur dolores atque qui eaque et repellendus libero.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(4, 'Corrupti ipsum voluptatem eum suscipit assumenda suscipit.', 'Voluptatem saepe eaque quia error consequuntur explicabo. Odio id voluptatum autem dolorem placeat non. Sit beatae non rerum. Qui libero quibusdam eum cupiditate voluptatibus corporis in.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(5, 'Labore accusantium aliquid repudiandae officiis delectus.', 'Sint dicta ut et cumque. Nisi ea adipisci temporibus eos modi tenetur voluptas. Omnis ut quo ducimus ut.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(6, 'Sint aut vel et omnis voluptate.', 'Quas illo debitis mollitia eius quis. At quam dolores eveniet et dolores qui et alias. Repudiandae possimus ipsam odit fugit esse aliquam consequatur.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(7, 'Aut sint nihil magni et praesentium impedit tempora.', 'Quis quo autem quia. Itaque aut quam autem dolores aut sunt similique. Ut ipsa laborum culpa rerum.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(8, 'Nisi voluptatem ad molestias odio aut dolorem.', 'Qui et itaque nulla non deleniti. Dolorem magni adipisci et voluptatem et velit. Et saepe sit maiores dicta.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(9, 'Ipsum harum maxime sapiente magnam voluptates.', 'Aperiam occaecati assumenda aspernatur doloremque culpa dolores. Laboriosam quia enim facere similique recusandae soluta dolorem. Beatae dolores in iure sequi velit quibusdam.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(10, 'Placeat sed ullam officia rem sunt.', 'Modi occaecati explicabo repellendus numquam. Assumenda velit placeat repudiandae beatae omnis animi. Quo magni mollitia minima qui. Est quia commodi exercitationem ullam.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(11, 'Necessitatibus incidunt ad consequatur et.', 'Officia repellat quis incidunt sit architecto repellendus. Ut ut quasi minima eos fugiat tempora dolores. Est omnis velit laudantium sed vero veritatis id voluptatem. Molestiae quis eveniet voluptas velit.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(12, 'Ab et autem magni quod esse laborum beatae eum.', 'Facere incidunt ducimus sapiente est quia iusto. Est temporibus sunt qui ad minima laudantium cupiditate. Eius et rerum ut a ad doloremque ducimus perferendis. Ab corrupti cum temporibus quia voluptatem cumque officia.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(13, 'Reprehenderit eum vel animi eligendi consectetur amet sunt qui.', 'Id reprehenderit ullam accusantium quia dolor aliquam. Sit sapiente exercitationem necessitatibus rerum aspernatur itaque sed. Et distinctio itaque fugiat delectus non magni esse. Qui iste incidunt illo sequi quia est autem.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(14, 'Tenetur aspernatur consequatur minus blanditiis.', 'Alias quo architecto nulla vel. Quia ea non nam aut saepe. Dolores corrupti fuga qui velit possimus placeat. Sit veritatis voluptatem quam aut.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(15, 'Odit odio placeat ut architecto.', 'Voluptas sequi ut animi totam. Natus doloremque ab dolor in ipsam nobis dolorum. Aut nesciunt nemo corrupti repellat sint nesciunt repellat repellat. Blanditiis non sed earum itaque distinctio nobis.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(16, 'Suscipit culpa temporibus eligendi doloribus quibusdam et saepe.', 'Quos illo eius necessitatibus quidem qui vitae repudiandae non. Rem officiis doloremque sequi delectus. Suscipit ut id possimus a.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(17, 'Fugiat vel nam laboriosam nam unde corporis.', 'Qui explicabo iste neque. Libero sunt magni magnam expedita maiores et. Veritatis accusamus voluptatem dignissimos iure facere ab sed. Praesentium et officiis eveniet.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(18, 'Sapiente ipsa omnis id ad et distinctio laborum.', 'Voluptatem voluptatibus nihil officia soluta sint iste. Praesentium vel mollitia eius sint ut vel. Velit delectus neque itaque id quisquam eaque.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(19, 'At qui aut voluptatibus dignissimos.', 'Dolorem ut asperiores tempora possimus atque. Ex est perferendis libero officia. Autem est repellat velit eaque asperiores et.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(20, 'Aut expedita voluptatem sit optio quo est.', 'Minus qui est ut deleniti. Dolor eligendi ipsa ea. Quis dolor aut doloremque totam. Est perspiciatis earum voluptatem recusandae. Ut et ad dignissimos delectus itaque cum et.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(21, 'Quia occaecati laborum dolor ad quia.', 'Voluptates illo sint ab qui ipsam sit. Eius ut et magni reiciendis nobis nesciunt. Illum illo cupiditate velit ex porro id eius.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(22, 'Quas possimus repudiandae aut nam aperiam non.', 'Nemo rem vero aut consequatur eaque eos vitae. Modi excepturi in ullam corrupti saepe saepe. Est quas eveniet est magnam et autem. At temporibus quasi distinctio amet. Dolor id incidunt eos fugit porro.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(23, 'Nam harum enim mollitia eum quos.', 'Et debitis ut nam culpa magni aut ea est. Rerum voluptate molestiae quod omnis. Omnis et eius molestiae nemo hic ea aut. Omnis reiciendis atque expedita repudiandae ut. Omnis cumque ea praesentium et suscipit.', '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(24, 'Nesciunt numquam quia consequuntur vitae quam suscipit.', 'Quidem quis aut excepturi. Et voluptas voluptas perferendis placeat. Atque quaerat suscipit quia autem dolorum. Cumque id libero voluptatem nobis inventore quia. Aut asperiores deserunt quia in quia at velit.', '2019-01-10 00:03:55', '2019-01-10 00:03:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_12_26_080249_create_students_table', 1),
(2, '2019_01_03_032755_create_posts_table', 1),
(3, '2019_01_10_034317_create_articles_table', 2),
(4, '2019_01_10_065628_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Similique ut eveniet molestiae reiciendis veniam ad.', 'Vitae sint non assumenda sequi enim ea. Cumque ut possimus nihil est fuga. Aut ducimus omnis dolorum consequatur aperiam suscipit consequatur. Explicabo qui harum totam rerum porro distinctio.', 'Dortha Reinger', '2019-01-02 20:39:09', '2019-01-02 20:39:09'),
(2, 'Aut natus cumque repellendus saepe dolores.', 'Non quos ea qui autem consectetur. Rerum saepe et sed provident. Omnis cumque accusantium aut aut aspernatur. Quidem omnis nihil et vero qui omnis quae.', 'Emmy Schulist', '2019-01-02 20:40:12', '2019-01-02 20:40:12'),
(3, 'Harum aut quia a sapiente omnis quia eos.', 'Maxime odio quod nihil culpa maiores rerum neque. Vero temporibus laboriosam quia minima et eos. Dolorem dolorem molestiae reiciendis velit ratione qui. Temporibus quibusdam assumenda dolorum ullam sunt facere deleniti.', 'Jayden Bernier', '2019-01-02 20:42:22', '2019-01-02 20:42:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@test.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(2, 'Mrs. Sunny Greenfelder II', 'ward.mccullough@gmail.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(3, 'Bettye Cassin', 'vivienne40@yahoo.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(4, 'Barton Hirthe', 'bergstrom.melvina@kuvalis.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(5, 'Ike Altenwerth', 'lilla.brekke@gmail.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(6, 'Jeffery Luettgen Jr.', 'benjamin09@yahoo.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(7, 'Prof. Emily Wiegand', 'elmo.stoltenberg@hodkiewicz.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(8, 'Dr. Chris Adams Jr.', 'obaumbach@gmail.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(9, 'Prof. Chaim DuBuque', 'wtromp@aufderhar.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(10, 'Ms. Destiney Hickle DVM', 'xstark@yahoo.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(11, 'Ms. Rubye Hamill Sr.', 'rebert@hotmail.com', NULL, '$2y$10$Iv.TEVsqP.2bAO42r4/YNuqNV4ld.pejSFzvFTzXmsA7250gVGXpq', NULL, '2019-01-10 00:03:55', '2019-01-10 00:03:55'),
(12, 'sony', 'sony@yahoo.com', NULL, '$2y$10$RZEFSp0IC8XkPpNciR3mu.bD.HjnKntWTf9vMXZsGvlCVa56QrKXq', 'fnwOkE2S68TJmgPJME9O9p02uCvoAoT02UmydM6QsK7VfsYGCJUjPuWf9mAC', '2019-01-10 00:07:02', '2019-01-10 00:07:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
