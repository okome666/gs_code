-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 1 月 23 日 21:22
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
-- データベース: `gs_homework`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_stylist_table`
--

CREATE TABLE `gs_stylist_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `vacant` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `URL` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_stylist_table`
--

INSERT INTO `gs_stylist_table` (`id`, `name`, `vacant`, `place`, `URL`, `indate`) VALUES
(1, '夏目漱石', '月', '東京', 'https://', '2020-01-23'),
(2, '野口英世', '月', '新宿', 'https://', '2020-01-23'),
(3, '聖徳太子', '水', '渋谷', 'https://', '2020-01-23'),
(4, '新渡戸稲造', '水', '渋谷', 'https://', '2020-01-23'),
(5, '福沢諭吉', '木', '池袋', 'https://', '2020-01-23'),
(6, '渋沢栄一', '金', '下北沢', 'https://', '2020-01-23');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_stylist_table`
--
ALTER TABLE `gs_stylist_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_stylist_table`
--
ALTER TABLE `gs_stylist_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
