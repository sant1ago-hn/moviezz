--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `iduser` int(6) NOT NULL,
  `idMovie` int(255) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `IDcategory` varchar(255) NOT NULL DEFAULT 1,
  `lengthm` int(6) DEFAULT NULL,
  `nation` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `yeary` int(4) DEFAULT NULL,
  `views` int(6) DEFAULT NULL,
  `stars` int(6) DEFAULT NULL,
  `status` tinyint(100) DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `episodes` int(100) NOT NULL DEFAULT 1,
  `movie_type` int(20) DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `trailer` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `link1080` varchar(255) DEFAULT NULL,
  `en_sub` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `vie_sub` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
  `role` int(1) NOT NULL DEFAULT 2 COMMENT 'Role'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admins` (`id`, `username`, `email`, `name`, `password`, `avatar`, `last_login`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hnam', '', '', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, 1, '2020-12-13 15:31:57', NULL);

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Horror', 1, '2020-12-13 16:58:09', '2020-12-13 23:58:09'),
(2, 'Sci-fi', 1, '2020-12-13 17:16:47', '2020-12-14 00:16:47'),
(5, 'Action', 1, '2021-01-31 13:58:40', '2021-01-31 20:58:40');

INSERT INTO `movies` (`id`, `title`, `IDcategory`, `lengthm`, `nation`, `yeary`, `views`, `stars`, `status`, `director`, `episodes`, `movie_type`, `image`, `description`, `created_at`, `updated_at`, `trailer`, `link1080`, `en_sub`, `vie_sub`) VALUES
(3, 'Mission Imposible: Fallout', 1, 147, 'US', 2018, 0, 0, 1, 'Christopher McQuarrie', 1, 0, '1611833682mission impossible fallout.jpg', 'What\'s done is done when we say it\'s done.', '2021-01-25 17:14:28', '2021-01-29 20:31:59', 'https://www.youtube.com/watch?v=wb49-oV0F78', 'https://drive.google.com/file/d/1hT1xidkSwXGLMjSOUpJMJyCAbNOOCReW/preview', '', 'https://raw.githubusercontent.com/sant1ago-da-hanoi/subtitles/main/%5BSeries%5D%20Mission%20Impossible/Fallout%20%5B2018%5D/%5BVIE%5D%20Mission%20Impossible%20Fallout.vtt'),
(4, 'Tenet', 2, 150, 'US', 2020, NULL, NULL, 1, 'Christopher Nolan', 1, 0, '1611833896tenet.jpg', 'You’re not shooting the bullet. You’re catching it', '2021-01-27 11:47:51', '2021-01-29 23:39:51', 'https://youtu.be/mgwGixbtIBU', 'https://dood.so/e/9x1uij37ya0556v6r2ee4s6ga2uz54u2', 'https://bit.ly/3pwP8dF', 'https://bit.ly/2NIOv2t'),
(5, 'Now You See Me', 1, 125, 'US', 2013, NULL, NULL, 1, 'Louis Leterrier', 1, 0, '1611834829NowYouSeeMe.jpg', 'The closer you think you are, the less you\'ll actually see', '2021-01-28 11:53:49', '2021-01-28 19:05:45', 'https://www.youtube.com/watch?v=4OtM9j2lcUA', 'https://drive.google.com/file/d/1-8zg__3T9RsT8Edm9X-U3IWyVQjzu77H/preview', 'https://drive.google.com/file/d/1KeT83MTxl8d4MXdkmQLF9ZgSsU_fRqMC/view?usp=sharing', 'https://drive.google.com/file/d/1_hw2-AxtENQ1z-8IEgCtuzb9t978-HCX/view?usp=sharing'),
(6, 'The Hitman\'s Bodyguard', 1, 118, 'US', 2017, NULL, NULL, 1, 'Patrick Hughes', 1, 0, '1611925747the-hitman-s-bodyguard.jpg', 'Question for a higher power. Who is more wicked, he who kills evil motherfuckers or he who protects them?', '2021-01-29 13:09:07', '2021-01-29 20:30:17', 'https://www.youtube.com/watch?v=qCOj_gCbp8I', 'https://drive.google.com/file/d/1r0EmkSrpTrO3K2_2WezWAUrfMvJnHTQa/preview', 'https://bit.ly/39s4k64', 'https://bit.ly/2YsnEtQ'),
(10, 'Logan', 1, 137, 'US', 2017, NULL, NULL, 1, 'James Mangold', 1, 0, '1612048097logan.jpg', '', '2021-01-30 23:08:17', '2021-02-01 02:18:02', '', 'https://dood.so/e/i76omhvxt4dpk00nsf6rmt1au7ngmqpu', '', '');

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `phone`, `address`, `email`, `avatar`, `last_login`, `facebook`, `status`, `created_at`, `updated_at`, `role`) VALUES
(2, 'z', 'fbade9e36a3f36d3d676c1b808451dd7', 'Nguyễn Cao Hoài Nam', NULL, NULL, 'hnam.nc@ammail.org', NULL, NULL, NULL, NULL, '2021-01-28 17:49:44', NULL, 2),
(3, 's', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-29 05:12:37', NULL, 2);

