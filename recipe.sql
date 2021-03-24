-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-03-24 13:04
-- 서버 버전: 10.4.17-MariaDB
-- PHP 버전: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `recipe`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `recipe` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 테이블의 덤프 데이터 `recipe`
--

INSERT INTO `recipe` (`id`, `text`, `url`, `recipe`) VALUES
(22, 'サバ缶で♪カレー風味のヨーグルトポテトサラダ♪マヨなし！', '', 'https://asset.oceans-nadia.com/upload/save_image/75/75f616b35902239efa94980f80bd2a2d.jpeg?impolicy=cropwm&w=116&h=155'),
(24, 'うま味たっぷり◎低糖質！豚肉としめじの味噌トマト煮込み', '', 'https://asset.oceans-nadia.com/upload/save_image/5e/5e8b44e123358c1c325403612432e190.jpg?impolicy=cropwm&w=116&h=155'),
(25, '水菜と生姜の和風シャキシャキサラダ♪', '', 'https://asset.oceans-nadia.com/upload/save_image/6e/6e495343645a9683500964f653ce9405.jpeg?impolicy=cropwm&w=116&h=155'),
(27, '鶏むね肉でカフェ飯♡チキンロコモコ', '', 'https://asset.oceans-nadia.com/upload/save_image/39/39baf0df435e7869a3872df0a541b50e.jpeg?impolicy=cropwm&w=116&h=155'),
(28, 'グリンピースとじゃが芋のポタージュ', '', 'https://asset.oceans-nadia.com/upload/save_image/1b/1b35e4074f48.jpg?impolicy=cropwm&w=116&h=155'),
(29, '新玉ねぎとニラの豚バーグ', '', 'https://asset.oceans-nadia.com/upload/save_image/9d/9dd73678f58036e8b3db4402601e68df.jpeg?impolicy=cropwm&w=116&h=155'),
(30, 'なすとチキンのトマト煮込み', '', 'https://asset.oceans-nadia.com/upload/save_image/8c/8cd49ff5fb280cfe4d54f03a1d4ee107.jpeg?impolicy=cropwm&w=116&h=155'),
(31, 'グリンピースとじゃが芋のポタージュ', '', 'https://asset.oceans-nadia.com/upload/save_image/1b/1b35e4074f48.jpg?impolicy=cropwm&w=116&h=155'),
(32, 'きのこと牛肉の豆鼓（トウチ）炒め', '', 'https://asset.oceans-nadia.com/upload/save_image/87/871e50320f45797eea04907d586083d9.jpg?impolicy=cropwm&w=116&h=155');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
