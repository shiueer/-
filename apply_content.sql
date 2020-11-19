-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-19 07:03:41
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `apply_content`
--

CREATE TABLE `apply_content` (
  `ID` int(11) NOT NULL,
  `Name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sID` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `FName` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MName` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Income_status` int(1) NOT NULL,
  `Note` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `T_admit` int(1) NOT NULL DEFAULT 0,
  `S_admit` int(1) NOT NULL DEFAULT 0,
  `Amount` int(100) NOT NULL,
  `S_note` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `P_admit` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `apply_content`
--

INSERT INTO `apply_content` (`ID`, `Name`, `sID`, `FName`, `MName`, `Income_status`, `Note`, `T_admit`, `S_admit`, `Amount`, `S_note`, `P_admit`) VALUES
(1, '蔡學而', '107213020', '蔡XX', '洪XX', 0, '真低可憐', 1, 1, 5000, '多給一點錢', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `apply_content`
--
ALTER TABLE `apply_content`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `apply_content`
--
ALTER TABLE `apply_content`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
