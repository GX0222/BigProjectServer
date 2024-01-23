-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2024-01-23 06:48:54
-- 伺服器版本： 5.7.24
-- PHP 版本： 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `bigproject_new`
--

-- --------------------------------------------------------

--
-- 資料表結構 `memberevents`
--

CREATE TABLE `memberevents` (
  `member_events_id` int(11) NOT NULL,
  `events_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `memberevents`
--

INSERT INTO `memberevents` (`member_events_id`, `events_id`, `member_id`) VALUES
(1, 8, 1),
(2, 9, 1),
(3, 10, 1),
(4, 12, 1),
(5, 1, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `memberevents`
--
ALTER TABLE `memberevents`
  ADD PRIMARY KEY (`member_events_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `memberevents`
--
ALTER TABLE `memberevents`
  MODIFY `member_events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
