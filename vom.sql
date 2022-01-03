-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 12:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vom`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'vida', 'hgjg', '2019-12-16 04:42:58', '2019-12-16 04:42:58'),
(2, 1, 'zahra', 'huhuuijyuhuj8ikol', '2019-12-19 12:30:46', '2019-12-19 12:30:46'),
(3, 6, 'bbf', 'fsds', '2019-12-28 13:36:55', '2019-12-28 13:36:55'),
(5, 7, 'رباب', 'خیلی ممنون از سایتتون', '2020-09-04 11:48:15', '2020-09-04 11:48:15'),
(6, 9, 'ویدا', 'عالیه...', '2020-09-05 11:35:14', '2020-09-05 11:35:14'),
(7, 6, 'ali', 'عالی', '2021-07-18 18:06:13', '2021-07-18 18:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_telephone` int(11) NOT NULL,
  `contact_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_email`, `contact_telephone`, `contact_text`, `created_at`, `updated_at`) VALUES
(1, 'فاطمه', NULL, 125, 'عالیه', '2020-09-04 11:40:21', '2020-09-04 11:40:21'),
(2, 'فاطمه', NULL, 156, 'علیه', '2020-09-04 11:41:23', '2020-09-04 11:41:23'),
(3, 'ویدا', 'vida@gmail.com', 185, 'عالیه', '2020-09-04 11:47:20', '2020-09-04 11:47:20'),
(4, 'فاطمه', 'fatemeh@gmail.com', 859, 'خیلی خوبه', '2020-09-05 11:36:06', '2020-09-05 11:36:06');

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
(3, '2019_11_16_085955_create_posts_table', 1),
(4, '2019_12_15_073431_create_archives_table', 2),
(5, '2019_12_15_080256_create_userlists_table', 2),
(6, '2019_12_16_074506_create_comments_table', 2),
(7, '2019_12_17_065222_create_contacts_table', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grouping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `text_1`, `release_status`, `grouping`, `subject`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'عنوان مطلب', NULL, 'rft4gtr', '2', '3', 'اقتصدی', 'fatemeh', 'fatemeh@gmail.com', '2019-12-02 03:28:40', '2019-12-02 03:28:40'),
(2, 'خبر مطالب ورزشی', NULL, '<p>تکواندوکار 21 ساله&nbsp;ایران&nbsp;پس از کسب سهمیه المپیک برای کشورمان گفت: با تمام وجود می جنگم تا در فینال المپیک حاضر باشم و باعث بالا رفتن پرچم و لبخند مردم&nbsp;ایران&nbsp;شوم</p>', '2', '3', 'ورزشی', 'fatemeh', 'fatemeh@gmail.com', '2019-12-15 04:18:27', '2019-12-15 04:18:27'),
(3, 'خبر مطالب فرمانداری', NULL, '<p>معاون استاندار و فرماندار ویژه <a href=\"https://vom.ir/\">شهرستان میانه</a> گفت: برای ۱۴۵۸ نفر از مناطق زلزله زده شهرستان مبلغ ۳ میلیون تومان مرحله اول و به تعداد ۴۴۷ نفر کل تسهیلات ۱۰ میلیون تومانی بلاعوض پرداخت شده است.&nbsp;</p>', '2', '3', 'گوناگون', 'vida', 'vidayousefi1375@gmail.com', '2019-12-15 04:20:26', '2019-12-15 04:20:26'),
(4, 'گازگرفتگی', NULL, '<p>آذربایجان شرقی&nbsp;مدیرکل بنیاد مسکن آذربایجان شرقی از مسمومیت ۱۵ نفر از کارشناسان بنیاد مسکن مناطق زلزله زده <a href=\"https://vom.ir/\">شهرستان میانه</a> خبر داد.</p>', '2', '3', 'جوادث', 'fatemeh', 'fatemeh@gmail.com', '2019-12-15 04:28:44', '2019-12-15 04:28:44'),
(5, 'عنوان مطلب ویرایش شده', NULL, '<p>swws</p>', '2', '2', 'سیاسی', 'fatemeh', 'fatemeh@gmail.com', '2019-12-15 05:15:40', '2019-12-15 05:15:40'),
(6, 'djhhj', NULL, '<p>dada</p>', '2', '1', 'هنری', 'fatemeh', 'fatemeh@gmail.com', '2019-12-15 05:17:16', '2019-12-15 05:17:16'),
(7, 'عنوان مطلب', '8f14e45fceea167a5a36dedd4bea25439dc017ef8721f59385d3b7afb41dfca1', '<p>fggvh</p>', '2', '1', 'اقتصادی', NULL, NULL, '2019-12-15 05:21:56', '2019-12-15 05:21:57'),
(8, 'عنوان مطلب', 'c9f0f895fb98ab9159f51fd0297e236d610911cb4a8921a2eb60b27356431999', '<p>gghghj</p>', '2', '1', 'گوناگون', NULL, NULL, '2019-12-15 05:22:10', '2019-12-15 05:22:11'),
(9, 'عنوان مطلب', '45c48cce2e2d7fbdea1afc51c7c6ad2659056b78cf04f37232ab18cb7c3eed6a', '<p>gghhjkl</p>', '2', '1', '9', NULL, NULL, '2019-12-15 11:52:42', '2019-12-15 11:52:42'),
(10, 'fatemeh', 'd3d9446802a44259755d38e6d163e8203fb1e35d9ac80371dbbfd75a578aef00', '<p>zahra</p>', 'درانتظار بررسی', 'مطالب آزاد', 'گوناگون', NULL, NULL, '2019-12-19 12:29:06', '2019-12-19 12:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `userlists`
--

CREATE TABLE `userlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ویدا', 'fatemeh@gmail.com', NULL, '$2y$10$7/BtoqQyUkAqQ23OQIz4G.I.ZM4rL7LiqtF4flS9N2T8VANQBZQOC', NULL, '2019-12-17 05:19:49', '2019-12-29 04:56:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlists`
--
ALTER TABLE `userlists`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlists`
--
ALTER TABLE `userlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
