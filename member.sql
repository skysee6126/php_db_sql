-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-03-27 00:42
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
-- 데이터베이스: `member`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`id`, `email`, `password`) VALUES
(29, 'qqq', '$2y$10$THOjMb6DQb9e3E9ByQuFou2'),
(30, '11', '$2y$10$q3BnYvsDlAc8KbLwLwoAP.i'),
(31, 'zzz', 'zzz'),
(32, '111', '$2y$10$Mkgl7G/fpGdL7CR2pSaIqes'),
(33, '', '$2y$10$a2ypcn3qqNGyKhMfPr8Qnu2'),
(34, 'aaa', '$2y$10$egapabiGtGgDCCi04xsoV.S'),
(35, 'aaa', '$2y$10$GzZwetBL26sK73SFfsvPluK'),
(36, 'qqq', '$2y$10$D5PN7JxyEgr6XsaKSxVqreb'),
(37, 'ppp', 'pppppp');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
