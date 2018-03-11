-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 05:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanitani`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `article_picture` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_user`, `title`, `category`, `description`, `article_picture`, `content`) VALUES
(25, 38, 'Sapi nyengir', 'Alat Tani', 'Giginya putih', '24052017060012sapi.jpg', 'sapi gigi '),
(28, 39, 'kambing', 'Hasil Tani', 'ini bunga', '24052017060842images.jpg', 'bukan kambing'),
(29, 42, 'punya rohman', 'Hasil Tani', 'ini punya rohman', '24052017083712images.jpg', 'mantep'),
(30, 40, 'cakep', 'Sharing Pertanian', 'siap aipaisp', '24052017121026images.jpg', 'siap siap'),
(32, 40, 'tes', 'Sharing Pertanian', 'ini tes', '28052017093942default.jpg', 'aduh'),
(33, 40, 'cacacacaca', 'Sharing Pertanian', 'mantep', '28052017104954default.jpg', 'tes'),
(34, 40, 'cot', 'Sharing Pertanian', 'cot', '29052017150321default.jpg', 'memed'),
(35, 40, 'hhgjhghghjgj', 'Alat Tani', 'nhhljhjhkjhj', '29052017150349default.jpg', 'nnnlkn,n,mn,m'),
(36, 63, 'Ini apa', 'Hasil Tani', 'Tes', '30052017133133default.jpg', 'ini itu apa');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id_buy` int(100) NOT NULL,
  `id_items` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id_buy`, `id_items`, `name`, `email`, `phone`, `address`, `quantity`) VALUES
(6, 0, 'sadasd;ds', 'skdaksd@gmaiaa', '1111', 'sudiasdi', 0),
(7, 0, 'saep', 'kjsdlkasjl@gmail.com', '909908908', 'depok', 0),
(8, 0, 'Cek', 'm.ilham_31@yahoo.com', '31212312', 'depok', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(100) NOT NULL,
  `id_article` int(100) NOT NULL,
  `id_items` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_article`, `id_items`, `id_user`, `comment`) VALUES
(35, 20, 0, 22, 'ini juga dari alpin'),
(36, 21, 0, 34, 'mantep '),
(37, 20, 0, 34, 'kambingnya berapaan bos ?'),
(38, 21, 0, 22, 'komen alpin asyik'),
(39, 23, 0, 22, 'wah bunganya bagus bro'),
(40, 23, 0, 34, 'bungawan solo'),
(41, 24, 0, 34, 'giginya putih'),
(42, 24, 0, 22, 'jengkol'),
(43, 25, 0, 39, 'wah sapinya gede'),
(44, 28, 0, 39, 'mantep nih'),
(45, 25, 0, 38, 'apanya?'),
(46, 29, 0, 42, 'bunganya mantep'),
(47, 28, 0, 42, 'boleh juga tuh'),
(48, 0, 0, 40, 'cakep'),
(49, 29, 0, 40, 'boleh boleh'),
(50, 29, 0, 40, 'cakep'),
(51, 28, 0, 40, 'cakep'),
(52, 28, 0, 40, 'tes'),
(53, 25, 0, 40, 'tes'),
(54, 25, 0, 40, 'cek'),
(55, 29, 0, 40, 'sa'),
(56, 29, 0, 40, 'cek'),
(57, 29, 0, 40, 'saik'),
(58, 29, 0, 40, 'gjgjgj'),
(59, 29, 0, 40, 'ahbhg'),
(60, 29, 0, 40, ';lskdl;'),
(61, 28, 0, 40, 'waw'),
(62, 28, 0, 40, 'mantep'),
(63, 28, 0, 40, 'mantep'),
(64, 29, 0, 40, 'wadaw'),
(65, 25, 0, 40, 'wadaw'),
(66, 25, 0, 40, 'tes'),
(67, 28, 0, 40, 'tes'),
(68, 28, 0, 40, 'tes'),
(69, 25, 0, 40, 'bagus'),
(70, 29, 0, 40, 'lkljlkj'),
(71, 29, 0, 40, 'cek'),
(72, 29, 0, 40, 'cek'),
(73, 29, 0, 40, 'cek'),
(74, 29, 0, 40, 'tes'),
(75, 29, 0, 40, 'tes'),
(76, 29, 0, 40, 'm'),
(77, 29, 0, 40, '11'),
(78, 29, 0, 40, '111'),
(79, 29, 0, 40, 'a'),
(80, 0, 0, 40, 'tes'),
(81, 29, 0, 40, 'saik'),
(82, 29, 0, 40, 'tay'),
(83, 29, 0, 40, 'tes'),
(84, 29, 0, 40, 'saik'),
(85, 30, 0, 40, 'cakep'),
(87, 29, 0, 0, 'asasasa'),
(88, 0, 14, 43, 'cek'),
(89, 0, 16, 40, 'wadaw'),
(90, 0, 16, 40, 'mantep'),
(91, 0, 17, 40, 'cek'),
(92, 31, 0, 40, 'nice'),
(93, 31, 0, 43, 'cek'),
(94, 30, 0, 45, 'kontol lu semua enak'),
(95, 30, 0, 45, 'memek tembem'),
(96, 30, 0, 45, 'ashar mau kontolnya dong'),
(97, 0, 17, 45, 'tes'),
(98, 0, 17, 45, 'tes'),
(99, 0, 17, 45, 'mantap'),
(100, 0, 16, 40, 'cakep'),
(101, 0, 17, 40, 'coy ini bukan kambing'),
(102, 0, 13, 40, 'asu'),
(103, 0, 0, 40, 'cakep'),
(104, 0, 17, 40, 'cakep'),
(105, 0, 0, 40, 'cek'),
(106, 35, 0, 40, 'cek'),
(107, 35, 0, 40, 'mantap'),
(108, 35, 0, 63, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_items` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `items_picture` varchar(200) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_items`, `id_user`, `items_name`, `items_picture`, `category`, `description`, `phone`, `price`, `location`) VALUES
(12, 0, 'aasbdasdbasb', '110520171609241.jpg', 'Hasil Tani', 'nsdmabnmdbanm', '0', 100000, 'sadasd'),
(13, 0, 'a', '21052017141729images.jpg', 'Hasil Tani', 'a', '0', 12121, 'adadadadad'),
(14, 0, 'bunga merah', '21052017142139images.jpg', 'Hasil Tani', 'a', '111111', 11111, 'aaa'),
(15, 0, 'sadsadsad', '21052017144017tes.jpg', 'Alat Tani', 'sadsad', '2414124', 211244, 'depok'),
(16, 0, 'Sapi', '25052017054924sapi.jpg', 'Alat Tani', 'Sapi Bukan Kambing', '085810279923', 10000, 'Depok'),
(18, 40, 'Kambing', '26052017091658images.jpg', 'Hasil Tani', 'Kambing pake bunga', '083524617', 10000, 'Depok'),
(19, 40, 'buah semangka', '30052017151300VirtualBox.exe', 'Hasil Tani', 'ini buah semangka', '0859353853', 1000000000, 'depok');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `user_picture` varchar(200) NOT NULL,
  `id_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `fullname`, `email`, `phone`, `password`, `sex`, `user_picture`, `id_status`) VALUES
(43, 'admin', 'admin', 'tanitani@gmail.com', '', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Male', '24052017151854sapi.jpg', 1),
(65, 'ilhammantap', 'Muhammad Ilham Ramadhan', 'm.ilhamramadhanca@gmail.com', '085810279923', '25f9e794323b453885f5181f1b624d0b', 'Male', '30052017165700default.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id_buy`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_items`),
  ADD UNIQUE KEY `id_barang` (`id_items`),
  ADD UNIQUE KEY `id_items` (`id_items`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id_buy` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_items` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
