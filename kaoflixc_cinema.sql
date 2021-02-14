-- phpMyAdmin SQL Dump
-- version 5.1.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 06:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaoflixc_cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(6) NOT NULL,
  `username` varchar(100) DEFAULT NULL COMMENT 'Tên đăng nhập',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'File ảnh đại diện',
  `last_login` datetime DEFAULT NULL COMMENT 'Lần đăng nhập gần đây nhất',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `name`, `password`, `avatar`, `last_login`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hnam', '', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, 1, '2020-12-13 08:31:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Horror', 1, '2021-02-02 16:41:30', '2021-02-02 23:41:30'),
(2, 'Sci-fi', 1, '2020-12-13 10:16:47', '2020-12-14 00:16:47'),
(5, 'Action', 1, '2021-01-31 06:58:40', '2021-01-31 20:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(6) NOT NULL,
  `iduser` int(6) NOT NULL,
  `idMovie` int(255) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(6) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `idcategory` varchar(255) DEFAULT NULL,
  `lengthm` varchar(255) DEFAULT NULL,
  `nation` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `yeary` int(4) DEFAULT NULL,
  `views` int(6) DEFAULT NULL,
  `stars` int(6) DEFAULT NULL,
  `status` tinyint(100) DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `episode` int(100) NOT NULL DEFAULT 1,
  `movie_type` int(20) DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `trailer` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link_premium` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `en_sub` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `vie_sub` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ep_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link_basic` varchar(255) DEFAULT NULL,
  `link_exclusive` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `idcategory`, `lengthm`, `nation`, `yeary`, `views`, `stars`, `status`, `director`, `episode`, `movie_type`, `image`, `description`, `created_at`, `updated_at`, `trailer`, `link_premium`, `en_sub`, `vie_sub`, `ep_name`, `link_basic`, `link_exclusive`) VALUES
(3, 'Mission Imposible: Fallout', '1', '147', 'US', 2018, 0, 0, 1, 'Christopher McQuarrie', 1, 0, '1611833682mission impossible fallout.jpg', 'What\'s done is done when we say it\'s done.', '2021-01-25 10:14:28', '2021-01-29 20:31:59', 'https://www.youtube.com/watch?v=wb49-oV0F78', 'https://drive.google.com/file/d/1hT1xidkSwXGLMjSOUpJMJyCAbNOOCReW/preview', '', 'Y', '', NULL, NULL),
(4, 'Tenet', '2', '150', 'US', 2020, NULL, NULL, 1, 'Christopher Nolan', 1, 0, '1611833896tenet.jpg', 'You’re not shooting the bullet. You’re catching it', '2021-01-27 04:47:51', '2021-01-29 23:39:51', 'https://youtu.be/mgwGixbtIBU', 'https://dood.so/e/9x1uij37ya0556v6r2ee4s6ga2uz54u2', 'Y', 'Y', '', NULL, NULL),
(5, 'Now You See Me', '1', '125', 'US', 2013, NULL, NULL, 1, 'Louis Leterrier', 1, 0, '1611834829NowYouSeeMe.jpg', 'The closer you think you are, the less you\'ll actually see', '2021-01-28 04:53:49', '2021-01-28 19:05:45', 'https://www.youtube.com/watch?v=4OtM9j2lcUA', 'https://drive.google.com/file/d/1-8zg__3T9RsT8Edm9X-U3IWyVQjzu77H/preview', 'Y', 'Y', '', NULL, NULL),
(6, 'The Hitman\'s Bodyguard', '1', '118', 'US', 2017, NULL, NULL, 1, 'Patrick Hughes', 1, 0, '1611925747the-hitman-s-bodyguard.jpg', 'Question for a higher power. Who is more wicked, he who kills evil motherfuckers or he who protects them?', '2021-01-29 06:09:07', '2021-01-29 20:30:17', 'https://www.youtube.com/watch?v=qCOj_gCbp8I', 'https://drive.google.com/file/d/1r0EmkSrpTrO3K2_2WezWAUrfMvJnHTQa/preview', 'Y', 'Y', '', NULL, NULL),
(10, 'Logan', '1,2,5', '137', 'US', 2017, NULL, NULL, 1, 'James Mangold', 1, 0, '1612048097logan.jpg', '', '2021-01-30 16:08:17', '2021-02-05 16:01:36', '', 'https://dood.so/e/i76omhvxt4dpk00nsf6rmt1au7ngmqpu,', '', '', '', NULL, NULL),
(13, 'sss', '1', '0', NULL, 0, NULL, NULL, 0, 'Christopher Nolan', 1, 0, '', '', '2021-02-03 15:27:00', NULL, '', '', '', '', '', NULL, NULL),
(20, 'The Witcher (Season 1)', '2,5', '3664,3656,4022,,4148,,,', 'United States', 2019, NULL, NULL, 1, '111', 8, 1, '1612631586the-witcher-2019.jpg', '', '2021-02-06 15:05:03', '2021-02-08 00:12:51', '', ',,,,,,,', 'Y', 'Y', 'The Ends Beginning;Four Marks;Betrayer Moon;Of Banquets, Bastards and Burials;Bottled Appetites;Rare Species;Before a Fall;Much More,', 'https://bit.ly/39Xl857,https://bit.ly/3tzO37d,https://bit.ly/3oXpNIA,https://bit.ly/36O6o6U,https://bit.ly/2N7Wndq,,,', ',,,,,,,');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(100) DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(100) DEFAULT NULL COMMENT 'Mật khẩu đăng nhập',
  `fullname` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Full name',
  `phone` int(11) DEFAULT NULL COMMENT 'SĐT user',
  `address` varchar(100) DEFAULT NULL COMMENT 'Địa chỉ user',
  `email` varchar(100) DEFAULT NULL COMMENT 'Email của user',
  `avatar` varchar(100) DEFAULT NULL COMMENT 'File ảnh đại diện',
  `last_login` datetime DEFAULT NULL COMMENT 'Lần đăng nhập gần đây nhất',
  `facebook` varchar(100) DEFAULT NULL COMMENT 'Link facebook',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối',
  `role` int(1) NOT NULL DEFAULT 2 COMMENT 'Role',
  `subscription` int(11) NOT NULL DEFAULT 2 COMMENT 'Subscrition',
  `balances` varchar(255) NOT NULL DEFAULT '0' COMMENT 'Số dư tài khoản'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `phone`, `address`, `email`, `avatar`, `last_login`, `facebook`, `status`, `created_at`, `updated_at`, `role`, `subscription`, `balances`) VALUES
(2, 'z', 'fbade9e36a3f36d3d676c1b808451dd7', 'Nguyễn Cao Hoài Nam', NULL, NULL, 'hnam.nc@ammail.org', NULL, NULL, NULL, NULL, '2021-01-28 10:49:44', NULL, 2, 2, '0'),
(3, 's', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-28 22:12:37', NULL, 2, 2, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
