-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 1 月 30 日 23:48
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
  `vacant` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `URL` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_stylist_table`
--

INSERT INTO `gs_stylist_table` (`id`, `name`, `vacant`, `place`, `URL`, `indate`) VALUES
(6, '伊藤博文', '水 金 土', '東京', 'https://www.kantei.go.jp/jp/rekidainaikaku/001.html', '2020-01-29'),
(7, '黒田清隆', NULL, '東京', 'https://www.kantei.go.jp/jp/rekidainaikaku/002.html', '2020-01-29'),
(8, '山縣 有朋', NULL, '東京', 'https://www.kantei.go.jp/jp/rekidainaikaku/003.html', '2020-01-29'),
(9, '松方 正義', '土', '代々木', 'https://www.kantei.go.jp/jp/rekidainaikaku/004.html', '2020-01-29'),
(10, '松方 正義', '日', '池袋', 'https://www.kantei.go.jp/jp/rekidainaikaku/006.html', '2020-01-29'),
(11, '大隈　重信', '火 水 木', '東京', 'https://www.kantei.go.jp/jp/rekidainaikaku/008.html', '2020-01-29'),
(12, '桂 太郎', '木', '東京', 'https://www.kantei.go.jp/jp/rekidainaikaku/011.html', '2020-01-29'),
(13, '西園寺 公望', NULL, '東京', 'https://www.kantei.go.jp/jp/rekidainaikaku/012.html', '2020-01-29'),
(14, '山本 權兵衞', NULL, '池袋', 'https://www.kantei.go.jp/jp/rekidainaikaku/016.html', '2020-01-29'),
(15, '寺内 正毅', '木 金 土', '池袋', 'https://www.kantei.go.jp/jp/rekidainaikaku/018.html', '2020-01-29');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
