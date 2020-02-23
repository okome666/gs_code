-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 2 月 23 日 13:51
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `mini_bbs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modifited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `picture`, `created`, `modifited`) VALUES
(1, '伊藤博文', 'test1', 'b444ac06613fc8d63795be9ad0beaf55011936ac', '2020021313385106.jpg', '2020-02-13 13:38:53', '2020-02-13 04:38:53'),
(2, 'あいう　えお', 'test2@test.com', '70352f41061eda4ff3c322094af068ba70c3b38b', '20200214140324', '2020-02-14 14:03:28', '2020-02-14 05:03:28'),
(3, '西園寺 公望', 'test2', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', '2020021416320907.jpg', '2020-02-14 16:32:11', '2020-02-14 07:32:11'),
(4, 'あべしんぞう', 'aaaa555@aaaa.aaa', '6934105ad50010b814c933314b1da6841431bc8b', '20200221111118___POINT.jpg', '2020-02-21 11:11:22', '2020-02-21 02:11:22'),
(5, 'aaaaaa', 'aaaaaa', 'f7a9e24777ec23212c54d7a350bc5bea5477fdbb', '20200222150656___POINT.jpg', '2020-02-22 15:07:00', '2020-02-22 06:07:00'),
(6, 'aaaa', 'aaaaaaaa', 'b480c074d6b75947c02681f31c90c668c46bf6b8', '20200222152711___POINT.jpg', '2020-02-22 15:27:17', '2020-02-22 06:27:17');

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `reply_post_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `message`, `member_id`, `reply_post_id`, `created`) VALUES
(14, 'あいうえお', 2, 0, '2020-02-20 19:11:56'),
(16, 'Hi,Hi', 3, 0, '2020-02-20 19:17:20'),
(17, '一覧を作りました。', 3, 0, '2020-02-20 19:33:58'),
(18, 'わたしはあべしんぞうです。', 4, 0, '2020-02-21 11:11:48'),
(19, '@西園寺 公望 一覧を作りました。すごいですね。', 4, 17, '2020-02-21 15:33:27'),
(20, '@あべしんぞう->Hi,HI', 4, 18, '2020-02-21 15:45:18'),
(21, 'aaaaaa', 4, 0, '2020-02-22 15:07:12'),
(22, '@あべしんぞう->aaaa', 4, 21, '2020-02-22 15:07:24'),
(25, 'あいうえおかきくけこ', 2, 0, '2020-02-23 12:45:43');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルのAUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
