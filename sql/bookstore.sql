-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-05-31 07:04:15
-- 伺服器版本： 10.4.25-MariaDB
-- PHP 版本： 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bookstore`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `bid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`id`, `bid`, `name`, `price`, `amount`, `language`, `time`) VALUES
(2, '8f2a5f84e8637f35e54a2a4ef0077937', '悲傷的大腦', '280', '1', 'chinese', '2023-05-29 14:06:25'),
(3, '42859205f1ccb6ab8b408220d34b34e8', '最高外語學習法', '250', '2', 'chinese', '2023-05-29 14:20:30'),
(4, '44cdbd2b665fd1d9966983011c523796', '免疫IMMUNE', '300', '3', 'chinese', '2023-05-29 14:22:12'),
(5, 'f15a9cbe6c2b588cfc67c0bb77706387', '小資向前衝', '400', '2', 'chinese', '2023-05-29 14:22:53'),
(6, 'f989504fac07e43475e5bb9875436e00', '靈界運作', '450', '2', 'chinese', '2023-05-29 14:23:46'),
(7, '4702cb62bddfc6dbe81f5fec676a94a5', '分人', '300', '2', 'chinese', '2023-05-29 14:25:38'),
(8, 'd69144425388b326cad071fb94a9082e', '鹽糖水黃金比例醃漬法', '450', '4', 'chinese', '2023-05-29 14:26:34'),
(9, '4b6c72c4eb9e948a80545859d8551659', '如果歷史是一群喵', '500', '4', 'chinese', '2023-05-29 14:27:19'),
(10, '6682afd154ce22289df4220aa2ac307c', '最後的獨角獸', '300', '4', 'chinese', '2023-05-29 14:27:53'),
(11, 'c5c414aadbb3fdb08ea75b9e89273b1c', '失智症世界的旅行指南', '280', '5', 'chinese', '2023-05-29 14:28:31'),
(12, 'd23194dc9ee023a8e61730652c4c4798', '長日將盡，來杯sake吧', '450', '4', 'chinese', '2023-05-29 14:30:21'),
(13, '68e7b735ff8c701f0af2fb7a9604de68', '鄰居的植物諮商室', '280', '4', 'chinese', '2023-05-29 14:30:50'),
(14, '22a797914bfb760653955aafa3f8f361', '提升程式設計的運算思維能力', '550', '2', 'chinese', '2023-05-29 14:31:25'),
(15, '7bb87be92d8e5441ad243985e17b4f51', '雪卡毒', '300', '6', 'chinese', '2023-05-29 14:31:49'),
(16, 'b494974480ec542607f889413a85a393', '華人大補史', '300', '1', 'chinese', '2023-05-29 14:33:58'),
(17, '3a38f7abad743d5fced09eff72725a2a', 'XXXXX停車場', '250', '1', 'chinese', '2023-05-29 14:34:33'),
(18, '168d7ba8a6400dd730bae8f9eabf4f2d', '這些謎樣藝術家，太有事', '450', '3', 'chinese', '2023-05-29 14:35:21'),
(19, 'a52a0641191e7d5cb92755762ddd4103', '微 裝 潢', '450', '3', 'chinese', '2023-05-29 14:35:52'),
(20, 'db2d4e11d2da59745dd02f95de6dd5f8', '全球新版圖', '666', '3', 'chinese', '2023-05-29 14:36:54'),
(21, '8c1cd7a1d452a1af3afd94050262bc94', '恐懼，是保護你的天賦', '280', '2', 'chinese', '2023-05-29 14:37:26'),
(22, '674d441b9ad657d3a46c91113ae1fd53', '韓食飯桌', '300', '2', 'chinese', '2023-05-29 14:37:55'),
(23, '55ca1dda7e8c95b3f5c089534319a2c2', 'Dorfs introduction to electric circuits', '300', '2', 'english', '2023-05-29 14:39:32'),
(24, 'ae3147005b2e450eface1c389d504a41', 'CEHv9', '1000', '3', 'english', '2023-05-29 14:40:05'),
(25, 'aef43c21677821464cec1491ca19fa27', 'Differen Equations', '1000', '3', 'english', '2023-05-29 14:40:46'),
(26, '370fe171e2b58cf0b837bb953511173b', 'Power of Progress', '450', '3', 'english', '2023-05-29 14:41:20'),
(27, '5753452ca01f23a618e9939740e941b3', 'TRUST', '800', '7', 'english', '2023-05-29 14:41:40'),
(28, '97909f5f1139619021f66cb7823a773b', 'SPARE', '1200', '1', 'english', '2023-05-29 14:43:57'),
(29, 'e49da9785e7c989f0cd19a6bcf7a2501', 'The Hong Kong Diaries', '800', '2', 'english', '2023-05-29 14:44:43'),
(30, 'a0c7e76db62660feaa52e5ce5b33eebd', 'Monsters', '300', '2', 'english', '2023-05-29 14:45:12'),
(31, 'dd18d1cc141392a0f16cfb41da5e9dcc', 'WISHING GAME', '300', '2', 'english', '2023-05-29 14:46:21'),
(32, '82d6ecf85e4cfbece028dc5ac80d09b7', 'YELLOW FACE', '450', '2', 'english', '2023-05-29 14:47:13'),
(33, '4912f7a021cb81ea51f09339f5fbb8f8', 'CHAOS KINGS', '450', '2', 'english', '2023-05-29 14:47:39'),
(34, '7e38d47f0ade0320b1f38e12af7b361b', 'RED ROULETTE', '900', '5', 'english', '2023-05-29 14:48:19'),
(35, '17c856f6ccc620286414af4a19ff2961', 'DUNGEONS DRAGONS', '1000', '6', 'english', '2023-05-29 14:49:06'),
(36, '432cc124932a619c433c1773b0cdf4f0', 'What if?2', '300', '2', 'english', '2023-05-29 14:49:27'),
(37, 'b2fff7d587a1372ba913d3527c9cca85', 'LUNE', '600', '2', 'english', '2023-05-29 14:50:13'),
(38, '6b7c1f53f5c4d0196d5030a371d0220a', 'the fun habbit', '800', '6', 'english', '2023-05-29 14:50:40'),
(39, '23373544049341acf0bcd637e51ecb9c', 'HooRAY', '450', '3', 'english', '2023-05-29 14:51:04'),
(40, 'bbeb3b9ffe584a3223b50bab38ac93a9', 'GREEN EYES', '1000', '3', 'english', '2023-05-29 14:51:25'),
(41, '07217c3defe3972240a936e6d258ad8b', 'SAM.BANGS & MOONSHINE', '1200', '4', 'english', '2023-05-29 14:51:57'),
(42, '81415657535d74a0dbd7615b785dbb68', 'BIG CAT，little cat', '450', '3', 'english', '2023-05-29 14:52:29'),
(43, '046cf39d6ccfdc3627cd83fceef22c8f', 'Spare', '250', '20', 'english', '2023-05-30 07:10:17');

-- --------------------------------------------------------

--
-- 資料表結構 `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `client`
--

INSERT INTO `client` (`id`, `uid`, `name`, `password`, `gmail`, `access`, `time`) VALUES
(2, '07bc56a6988e02061a16a4897fe1b437', '小赤', 'e10adc3949ba59abbe56e057f20f883e', 'test@gmail.com', '測試地址', '2023-05-29 08:22:31'),
(3, '54b74166712e6aa5176fde01d33b0cde', '測試', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com', '測試地址', '2023-05-29 10:19:10'),
(5, 'f791a1b62d6fc2e8487001177aa91541', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '桿哩員', '桿哩員', '2023-05-29 10:52:14'),
(6, 'b4ee168f1c8c9b125c7ac22f46fd4792', 'snickerdoodle', '9e7f02480cbfe19b60b77317d0944df6', 'snickerdoodle', 'snickerdoodle', '2023-05-29 13:58:31'),
(7, '46214f7dddc6a567cf7adbc636d052f6', 'joey', 'e10adc3949ba59abbe56e057f20f883e', '123', '123', '2023-05-30 21:14:44'),
(8, 'e8c1bb45571bde0c56d3c9669a3b5af0', '666', '202cb962ac59075b964b07152d234b70', '123', '123', '2023-05-31 11:43:33');

-- --------------------------------------------------------

--
-- 資料表結構 `deliver`
--

CREATE TABLE `deliver` (
  `id` int(11) NOT NULL,
  `oid` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `card` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `introduce`
--

CREATE TABLE `introduce` (
  `id` int(11) NOT NULL,
  `bid` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `introduce`
--

INSERT INTO `introduce` (`id`, `bid`, `writer`, `publisher`, `relation`, `time`) VALUES
(2, '8f2a5f84e8637f35e54a2a4ef0077937', '王瑋謙', '澎科大', '這是本好書', '2023-05-29 14:06:25'),
(3, '42859205f1ccb6ab8b408220d34b34e8', '王瑋謙', '澎科大', '瑋謙好帥', '2023-05-29 14:20:30'),
(4, '44cdbd2b665fd1d9966983011c523796', '王瑋謙', '澎科大', '哈囉', '2023-05-29 14:22:12'),
(5, 'f15a9cbe6c2b588cfc67c0bb77706387', '王瑋謙', '澎科大', ':)', '2023-05-29 14:22:53'),
(6, 'f989504fac07e43475e5bb9875436e00', '王瑋謙', '澎科大', '阿阿阿阿', '2023-05-29 14:23:46'),
(7, '4702cb62bddfc6dbe81f5fec676a94a5', '王瑋謙', '澎科大', '好欸', '2023-05-29 14:25:38'),
(8, 'd69144425388b326cad071fb94a9082e', '王瑋謙', '澎科大', '共匪', '2023-05-29 14:26:34'),
(9, '4b6c72c4eb9e948a80545859d8551659', '王瑋謙', '澎科大', '加分', '2023-05-29 14:27:19'),
(10, '6682afd154ce22289df4220aa2ac307c', '王瑋謙', '澎科大', 'Unicorn', '2023-05-29 14:27:53'),
(11, 'c5c414aadbb3fdb08ea75b9e89273b1c', '王瑋謙', '澎科大', '12345', '2023-05-29 14:28:31'),
(12, 'd23194dc9ee023a8e61730652c4c4798', '王瑋謙', '澎科大', '666', '2023-05-29 14:30:21'),
(13, '68e7b735ff8c701f0af2fb7a9604de68', '王瑋謙', '澎科大', '88888', '2023-05-29 14:30:50'),
(14, '22a797914bfb760653955aafa3f8f361', '王瑋謙', '澎科大', 'NPU666', '2023-05-29 14:31:25'),
(15, '7bb87be92d8e5441ad243985e17b4f51', '王瑋謙', '澎科大', '66666', '2023-05-29 14:31:49'),
(16, 'b494974480ec542607f889413a85a393', '王瑋謙', '澎科大', '111', '2023-05-29 14:33:58'),
(17, '3a38f7abad743d5fced09eff72725a2a', '王瑋謙', '澎科大', 'QWQ', '2023-05-29 14:34:33'),
(18, '168d7ba8a6400dd730bae8f9eabf4f2d', '王瑋謙', '澎科大', '999', '2023-05-29 14:35:21'),
(19, 'a52a0641191e7d5cb92755762ddd4103', '王瑋謙', '澎科大', '0.0', '2023-05-29 14:35:52'),
(20, 'db2d4e11d2da59745dd02f95de6dd5f8', '王瑋謙', '澎科大', '110', '2023-05-29 14:36:54'),
(21, '8c1cd7a1d452a1af3afd94050262bc94', '王瑋謙', '澎科大', 'GG', '2023-05-29 14:37:26'),
(22, '674d441b9ad657d3a46c91113ae1fd53', '王瑋謙', '澎科大', 'Korean', '2023-05-29 14:37:55'),
(23, '55ca1dda7e8c95b3f5c089534319a2c2', '王瑋謙', '澎科大', 'DDDD', '2023-05-29 14:39:32'),
(24, 'ae3147005b2e450eface1c389d504a41', '王瑋謙', '澎科大', 'hack', '2023-05-29 14:40:05'),
(25, 'aef43c21677821464cec1491ca19fa27', '王瑋謙', '澎科大', 'f(x)', '2023-05-29 14:40:46'),
(26, '370fe171e2b58cf0b837bb953511173b', '王瑋謙', '澎科大', 'QAQ', '2023-05-29 14:41:20'),
(27, '5753452ca01f23a618e9939740e941b3', '王瑋謙', '澎科大', 'trust', '2023-05-29 14:41:40'),
(28, '97909f5f1139619021f66cb7823a773b', '王瑋謙', '澎科大', 'DaNENE', '2023-05-29 14:43:57'),
(29, 'e49da9785e7c989f0cd19a6bcf7a2501', '王瑋謙', '澎科大', 'China No.2', '2023-05-29 14:44:43'),
(30, 'a0c7e76db62660feaa52e5ce5b33eebd', '王瑋謙', '澎科大', 'DaGG', '2023-05-29 14:45:12'),
(31, 'dd18d1cc141392a0f16cfb41da5e9dcc', '王瑋謙', '澎科大', 'Bonus', '2023-05-29 14:46:21'),
(32, '82d6ecf85e4cfbece028dc5ac80d09b7', '王瑋謙', '澎科大', 'AAA', '2023-05-29 14:47:13'),
(33, '4912f7a021cb81ea51f09339f5fbb8f8', '王瑋謙', '澎科大', '465', '2023-05-29 14:47:39'),
(34, '7e38d47f0ade0320b1f38e12af7b361b', '王瑋謙', '澎科大', '123456', '2023-05-29 14:48:19'),
(35, '17c856f6ccc620286414af4a19ff2961', '王瑋謙', '澎科大', '666', '2023-05-29 14:49:06'),
(36, '432cc124932a619c433c1773b0cdf4f0', '王瑋謙', '澎科大', 'aaa', '2023-05-29 14:49:27'),
(37, 'b2fff7d587a1372ba913d3527c9cca85', '王瑋謙', '澎科大', '= =', '2023-05-29 14:50:13'),
(38, '6b7c1f53f5c4d0196d5030a371d0220a', '王瑋謙', '澎科大', '123456789', '2023-05-29 14:50:40'),
(39, '23373544049341acf0bcd637e51ecb9c', '王瑋謙', '澎科大', '789456', '2023-05-29 14:51:04'),
(40, 'bbeb3b9ffe584a3223b50bab38ac93a9', '王瑋謙', '澎科大', 'ad', '2023-05-29 14:51:25'),
(41, '07217c3defe3972240a936e6d258ad8b', '王瑋謙', '澎科大', '3333', '2023-05-29 14:51:57'),
(42, '81415657535d74a0dbd7615b785dbb68', '王瑋謙', '澎科大', 'Big cat', '2023-05-29 14:52:29'),
(43, '046cf39d6ccfdc3627cd83fceef22c8f', '王瑋謙', '澎科大', '123', '2023-05-30 07:10:17'),
(44, '787fd0dbb024789eccf3fe52a5530445', '666666', '666666', '66666666', '2023-05-31 11:53:32');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `oid` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `bid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `order`
--

INSERT INTO `order` (`id`, `oid`, `uid`, `bid`, `amount`, `time`) VALUES
(1, 'c6c5cadb2b8d19a5b596a2452e0bdbaa', '小赤', 'a52a0641191e7d5cb92755762ddd4103', '1', '2023-05-31 12:19:57'),
(2, '20d007e76bc88558380b9c8106e68ff2', '07bc56a6988e02061a16a4897fe1b437', 'b494974480ec542607f889413a85a393', '1', '2023-05-31 12:23:41'),
(3, 'c82bee81fc6556039bc921f38f26509e', '07bc56a6988e02061a16a4897fe1b437', '55ca1dda7e8c95b3f5c089534319a2c2', '1', '2023-05-31 12:28:11'),
(4, '9ed60218d0ebe52f62aa8608d95acede', '07bc56a6988e02061a16a4897fe1b437', 'a0c7e76db62660feaa52e5ce5b33eebd', '1', '2023-05-31 12:31:22'),
(5, '9ed60218d0ebe52f62aa8608d95acede', '07bc56a6988e02061a16a4897fe1b437', 'd69144425388b326cad071fb94a9082e', '1', '2023-05-31 12:31:39'),
(6, '9ed60218d0ebe52f62aa8608d95acede', '07bc56a6988e02061a16a4897fe1b437', '42859205f1ccb6ab8b408220d34b34e8', '1', '2023-05-31 12:33:33'),
(7, '2e01b1a82280aa8350306f0a169e701f', '46214f7dddc6a567cf7adbc636d052f6', 'a0c7e76db62660feaa52e5ce5b33eebd', '1', '2023-05-31 12:33:58'),
(8, '7106420e7d6146a386de93a1af6dfb0e', '07bc56a6988e02061a16a4897fe1b437', 'ae3147005b2e450eface1c389d504a41', '1', '2023-05-31 12:43:53'),
(9, '7106420e7d6146a386de93a1af6dfb0e', '07bc56a6988e02061a16a4897fe1b437', '44cdbd2b665fd1d9966983011c523796', '1', '2023-05-31 12:43:55');

-- --------------------------------------------------------

--
-- 資料表結構 `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `bid` varchar(255) NOT NULL,
  `oid` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `temp`
--

INSERT INTO `temp` (`id`, `bid`, `oid`, `time`) VALUES
(1, '07bc56a6988e02061a16a4897fe1b437', 'c6c5cadb2b8d19a5b596a2452e0bdbaa', '2023-05-31 12:19:51'),
(2, '07bc56a6988e02061a16a4897fe1b437', '20d007e76bc88558380b9c8106e68ff2', '2023-05-31 12:23:39'),
(3, '07bc56a6988e02061a16a4897fe1b437', 'c82bee81fc6556039bc921f38f26509e', '2023-05-31 12:28:09'),
(4, '07bc56a6988e02061a16a4897fe1b437', '9ed60218d0ebe52f62aa8608d95acede', '2023-05-31 12:31:20'),
(5, '46214f7dddc6a567cf7adbc636d052f6', '2e01b1a82280aa8350306f0a169e701f', '2023-05-31 12:33:52'),
(6, '07bc56a6988e02061a16a4897fe1b437', '7e303a0c26049c0b76e1d0107e33652d', '2023-05-31 12:41:02'),
(7, '07bc56a6988e02061a16a4897fe1b437', '7106420e7d6146a386de93a1af6dfb0e', '2023-05-31 12:43:30');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `uid`, `name`, `password`) VALUES
(1, '07bc56a6988e02061a16a4897fe1b437', '小赤', 'e10adc3949ba59abbe56e057f20f883e'),
(2, '54b74166712e6aa5176fde01d33b0cde', '測試', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'f791a1b62d6fc2e8487001177aa91541', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'b4ee168f1c8c9b125c7ac22f46fd4792', 'snickerdoodle', '9e7f02480cbfe19b60b77317d0944df6'),
(8, '46214f7dddc6a567cf7adbc636d052f6', 'joey', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'e8c1bb45571bde0c56d3c9669a3b5af0', '666', '202cb962ac59075b964b07152d234b70');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `deliver`
--
ALTER TABLE `deliver`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `deliver`
--
ALTER TABLE `deliver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `introduce`
--
ALTER TABLE `introduce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
