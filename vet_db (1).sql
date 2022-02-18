-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2022 at 02:01 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `honer_db`
--

CREATE TABLE `honer_db` (
  `id` int(12) NOT NULL,
  `lid` varchar(64) NOT NULL,
  `lpw` varchar(128) NOT NULL,
  `kanri_flg` int(11) NOT NULL,
  `pet` varchar(64) DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pname` varchar(64) NOT NULL,
  `sex` varchar(64) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `sp` varchar(64) NOT NULL,
  `mhistory` text,
  `hospital` varchar(64) DEFAULT NULL,
  `comment` text,
  `fname` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `honer_db`
--

INSERT INTO `honer_db` (`id`, `lid`, `lpw`, `kanri_flg`, `pet`, `name`, `address`, `email`, `pname`, `sex`, `birth`, `sp`, `mhistory`, `hospital`, `comment`, `fname`) VALUES
(3, '', '', 0, NULL, 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ケン', NULL, NULL, 'チワワ', NULL, '', 'あああ', NULL),
(4, '', '', 0, NULL, 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'かい', NULL, NULL, '柴', NULL, '', 'リンゴ好き', NULL),
(5, '', '', 0, '猫', 'あまだ', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ken', 'オス', '2000-03-03', '柴', '子宮蓄膿症', '北海道大学動物病院', 'リンゴ', NULL),
(6, '', '', 0, '猫', 'あまだ', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'アン', 'メス', '2010-02-02', 'ゴールデン', '子宮蓄膿症', '北海道大学動物病院', '好き', NULL),
(7, '', '', 0, '犬', 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'アン', NULL, '2011-10-11', 'チワワ', '子宮蓄膿症', '北海道大学動物病院', '落ち着きがない。', NULL),
(8, '', '', 0, '猫', 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'an', 'メス', '2022-02-01', 'チワワ', '子宮蓄膿症', '北海道大学動物病院', 'aa', NULL),
(9, '', '', 0, '犬', 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ken', 'オス', '2022-02-08', '柴', '肥満細胞腫', '北海道大学動物病院', 'ああ', NULL),
(10, '', '', 0, '犬', 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ken', 'オス', '2022-02-08', '柴', '肥満細胞腫', '北海道大学動物病院', 'ああ', NULL),
(11, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-02', '柴', '肥満細胞腫', '北海道大学動物病院', 'ｚ', NULL),
(12, '', '', 0, NULL, 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'アップ', 'C:\\Users\\北大\\AppData\\Local\\Temp\\php9655.tmp'),
(13, '', '', 0, NULL, 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'アップ', 'C:\\Users\\北大\\AppData\\Local\\Temp\\php3B9A.tmp'),
(14, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'アップ', 'C:\\Users\\北大\\AppData\\Local\\Temp\\phpD432.tmp'),
(15, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-02', '柴', '肥満細胞腫', '北海道大学動物病院', 'ｘ', 'C:\\Users\\北大\\AppData\\Local\\Temp\\phpF3BC.tmp'),
(16, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-02', '柴', '肥満細胞腫', '北海道大学動物病院', 'ｘ', 'C:\\Users\\北大\\AppData\\Local\\Temp\\php4B44.tmp'),
(17, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-02', '柴', '肥満細胞腫', '北海道大学動物病院', 'ｘ', 'C:\\Users\\北大\\AppData\\Local\\Temp\\php1680.tmp'),
(18, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-02', '柴', '肥満細胞腫', '北海道大学動物病院', 'ｘ', 'C:\\Users\\北大\\AppData\\Local\\Temp\\php9244.tmp'),
(19, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-16', '柴', '肥満細胞腫', '北海道大学動物病院', 'aaa', 'C:\\Users\\北大\\AppData\\Local\\Temp\\php8227.tmp'),
(20, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ken', 'オス', '2022-02-09', '柴', '肥満細胞腫', '北海道大学動物病院', '', ''),
(21, '', '', 0, '猫', 'Y.A', '北海道', '08043652829', 'けん', 'オス', '2022-03-03', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', '', ''),
(22, '', '', 0, '猫', 'Y.A', '北海道', 'ai.ac.jp', 'ken', 'オス', '2022-02-02', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'aaa', ''),
(23, '', '', 0, '猫', 'Y.A', '北海道', 'ai.ac.jp', 'ken', 'オス', '2022-02-02', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'aaa', ''),
(24, '', '', 0, '猫', 'Y.A', '北海道', 'ai.ac.jp', 'ken', 'オス', '2022-02-02', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'aaa', ''),
(25, '', '', 0, '猫', 'Y.A', '北海道', 'ai.ac.jp', 'ken', 'オス', '2022-02-02', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'aaa', ''),
(26, '', '', 0, '猫', 'ｄｄ', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'zz', ''),
(27, '', '', 0, '猫', 'ｄｄ', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'zz', ''),
(28, '', '', 0, '猫', 'oo', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'mm', ''),
(29, '', '', 0, '猫', 'oo', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'mm', ''),
(30, '', '', 0, '猫', 'oo', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'mm', ''),
(31, '', '', 0, '猫', 'oo', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-01', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'mm', ''),
(32, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'aaaaaa', ''),
(33, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'aaaaaa', ''),
(34, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'aaaaaa', ''),
(35, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'aaaaaa', ''),
(36, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'aaaaaa', ''),
(37, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'aaaaaa', ''),
(38, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'cccccccccccc', ''),
(39, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-03', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'cccccffffffffff', ''),
(40, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-25', '柴', '肥満細胞腫', '北海道大学動物病院', 'aaaaaaaaaaaaaaaaaaaaaaaa', ''),
(41, '', '', 0, '犬', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-25', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'ddddddddjjjjjjjjjjjvvvvv', ''),
(42, '', '', 0, NULL, 'Y.A', '北海道', 'ai.ac.jp', 'けん', NULL, '2022-02-16', '柴', '肥満細胞腫', '北海道大学動物病院', 'jjjjllll', NULL),
(43, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'オス', '2022-02-17', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'ddd', NULL),
(44, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'メス', '2022-02-09', 'ゴールデン', '子宮蓄膿症', '北海道大学動物病院', 'dddddddddddddd', NULL),
(45, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'メス', '2022-02-09', 'ゴールデン', '子宮蓄膿症', '北海道大学動物病院', 'dddddddddddddd', NULL),
(46, '', '', 0, '犬', 'amada', '北海道', 'ai.ac.jp', 'ケン', 'メス', '2022-02-11', '柴', '肥満細胞腫', '北海道大学動物病院', 'fffff', NULL),
(47, '', '', 0, '猫', 'あまだ', '北海道', 'ああ', 'アン', 'オス', '2022-03-10', '柴', '肥満細胞腫', '北海道大学動物病院', 'ddadadadada', NULL),
(48, '', '', 0, '猫', 'あまだ', '北海道', 'ｄ', 'hayate', 'オス', '2022-03-09', '柴', '肥満細胞腫', '北海道大学動物病院', 'ddadada', NULL),
(49, '', '', 0, '猫', 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ココア', 'オス', '2022-02-10', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'ddddd', NULL),
(51, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ココア', 'オス', '2022-02-16', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'sss', NULL),
(52, '', '', 0, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ココア', 'メス', '2022-02-22', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'fff', NULL),
(53, 'yamada', '', 1, '猫', 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'はな', 'メス', '2022-02-19', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'ｄｄｄｄｄ', NULL),
(54, 'yamada', 'yamada', 1, '猫', 'amada', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'はな', 'オス', '2022-02-19', 'チワワ', '肥満細胞腫', '北海道大学動物病院', 'ｄｄｄｄｄ', NULL),
(55, 'yamada', 'yamada', 1, '猫', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'はな', 'メス', '2022-02-03', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'ccc', NULL),
(56, 'amada', 'amada', 0, 'その他', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'はな', 'メス', '2022-02-03', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', 'fafa', NULL),
(57, 'hoge', 'hoge', 0, 'その他', 'Y.A', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'ken', 'オス', '2022-02-10', '柴', '肥満細胞腫', '北海道大学動物病院', '', NULL),
(58, 'test1', 'test1', 1, 'その他', 'あまだ', '北海道', 'hokudai-vet-29-02@eis.hokudai.ac.jp', 'けん', 'メス', '2022-02-03', 'ゴールデン', '肥満細胞腫', '北海道大学動物病院', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pets_db`
--

CREATE TABLE `pets_db` (
  `id` int(12) NOT NULL,
  `content` varchar(64) NOT NULL,
  `hung` varchar(64) NOT NULL,
  `act` varchar(64) NOT NULL,
  `freq` varchar(64) NOT NULL,
  `pcomment` text,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets_db`
--

INSERT INTO `pets_db` (`id`, `content`, `hung`, `act`, `freq`, `pcomment`, `indate`) VALUES
(1, 'ペットフート１', '少しある', '普通', '２回', 'aa', '2022-02-01 03:07:14'),
(2, 'a', '少しある', '普通', '２回', 'aa', '2022-02-01 03:07:52'),
(3, 'ペットフート１', '少しある', '普通', '２回', '食べても吐いてしまう', '2022-02-03 01:35:30'),
(10, 'ペットフート１', '食欲ある', '活発！', '１回', 'yyyyaaaaaaaaa', '2022-02-17 06:53:35'),
(11, 'ペットフート１', '少しある', '普通', '２回', 'fff', '2022-02-17 06:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(64) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`) VALUES
(2, 'ココア', 'yamada', 'yamada', 1),
(3, 'はな', 'ama', 'ama', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `honer_db`
--
ALTER TABLE `honer_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets_db`
--
ALTER TABLE `pets_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `honer_db`
--
ALTER TABLE `honer_db`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `pets_db`
--
ALTER TABLE `pets_db`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
