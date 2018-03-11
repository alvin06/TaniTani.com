-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 08:43 AM
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
(48, 71, 'Biji mangga', 'Hasil Tani', '', '31052017083553mangga.jpg', 'Bentuk biji mangga kaya gimana ya '),
(49, 68, 'Ekstrak kulit toge', 'Hasil Tani', '', '31052017083834toge.jpg', 'Kulit toge kini ada ekstraknya'),
(50, 68, 'Gagang cangkul', 'Alat Tani', '', '31052017083959Cangkul.jpg', 'Cara agar gagang cangkul enak di pegang'),
(51, 68, 'Clurit', 'Alat Tani', '', '31052017084110clurit.jpg', 'Ada ga sih clurit yang kaga tajem'),
(52, 68, 'Karung supaya ga bolong', 'Sharing Pertanian', '', '31052017084222karung.JPG', 'Gimana supya karung kaga bolong ?');

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
(29, 71, 'Cangkul', '31052017081419Cangkul.jpg', 'Alat Tani', 'Cangkul pantura', '082488394389', 100000, 'Pantura'),
(30, 68, 'Clurit', '31052017081604clurit.jpg', 'Alat Tani', 'Clurit asli begal depok', '085810279923', 10000000, 'Depok'),
(31, 69, 'Kapak', '31052017081754kapak.jpg', 'Alat Tani', 'Kapak thor', '083473284732', 500000, 'Palembang'),
(32, 70, 'Karung', '31052017082003karung.JPG', 'Alat Tani', 'Karung asli medan', '034873283752', 10000, 'Balebak'),
(33, 70, 'Terong', '31052017082142terong.jpg', 'Hasil Tani', 'Dijual terong satuan', '0327832789579', 1000000, 'Medan'),
(34, 68, 'Toge putih', '31052017082519toge.jpg', 'Hasil Tani', 'Dijual Toge putih berprotein sesuir', '0832467359', 10000, 'Depok'),
(35, 69, 'Mangga', '31052017083128mangga.jpg', 'Hasil Tani', 'Mangga apel', '043874387389', 10000, 'bateng'),
(36, 71, 'belimbing', '31052017083334belimbing.jpg', 'Hasil Tani', 'Belimbing kw', '089087878787', 100000, 'Pantura');

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
(66, 'mochamadsuryono', 'Mochamad Suryono', 'mochsuryono.ipb@gmail.com', '085712163208', '2f2a71ebb18e5221a877710e94555961', 'Male', '30052017183113sapi.jpg', 0),
(68, 'ilhammantap', 'Muhammad Ilham Ramadhan', 'm.ilhamramadhanca@gmail.com', '085810279923', '5b37409651730545e0ba93915f83d355', 'Male', '31052017080949default.jpg', 0),
(69, 'rio', 'Rio Al Rasyid', 'Rio@gmail.com', '0837154926231', 'c93fea204a7f361bcb950ce8b562ea16', 'Male', '31052017081110default.jpg', 0),
(70, 'alvin', 'Alvin', 'alvin@gmail.com', '083428732569', '9753fe594481233c667e457ef9ffdcdc', 'Male', '31052017081151default.jpg', 0),
(71, 'laju', 'Rachman', 'laju@gmail.com', '0893548478543', '68bdc98dfc9605c5cb1017fc3a96dddd', 'Male', '31052017081230default.jpg', 0);

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
  MODIFY `id_article` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id_buy` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_items` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
