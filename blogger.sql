-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 08:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `content_comment` varchar(500) DEFAULT NULL,
  `comment_username` varchar(255) DEFAULT NULL,
  `comment_userid` varchar(255) DEFAULT NULL,
  `post_key_f` int(11) DEFAULT NULL,
  `create_time_comment` time DEFAULT NULL,
  `create_Date_comment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `content_comment`, `comment_username`, `comment_userid`, `post_key_f`, `create_time_comment`, `create_Date_comment`) VALUES
(1, 'hai man how are yoibv', 'AHMEDHAKEEM', '1', 1, '21:14:13', '2018-06-04'),
(2, 'hai man how are yoibv', 'AHMEDHAKEEM', '1', 2, '21:14:13', '2018-06-04'),
(3, 'THIS COMMENASVCKVSC', 'AHMEDHAKEEM', '1', 2, '25:16:00', '2018-06-12'),
(4, 'OMG this nicw', 'AHMEDHAKEEM', '1', 1, '31:18:16', '2018-06-06'),
(5, 'OMG this nicw', 'AHMEDHAKEEM', '1', 1, '31:18:16', '2018-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `disLike_id` int(11) NOT NULL,
  `Post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `Like_id` int(11) NOT NULL,
  `Post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`Like_id`, `Post_id`, `user_id`) VALUES
(17, 197, 43),
(18, 87, 43),
(19, 1, 43),
(20, 207, 43),
(21, 208, 1),
(22, 197, 1),
(23, 197, 1),
(24, 195, 1),
(25, 1, 1),
(26, 2, 1),
(27, 86, 1),
(28, 3, 1),
(29, 2, 1),
(30, 2, 1),
(31, 5, 1),
(32, 5, 1),
(33, 197, 1),
(34, 208, 1),
(35, 207, 1),
(36, 208, 43),
(37, 207, 43),
(38, 196, 43),
(39, 195, 43),
(40, 197, 43),
(41, 208, 1),
(42, 88, 1),
(43, 196, 1),
(44, 197, 1),
(45, 197, 1),
(46, 197, 1),
(47, 196, 1),
(48, 196, 1),
(49, 196, 1),
(50, 195, 1),
(51, 195, 1),
(52, 88, 1),
(53, 88, 1),
(54, 88, 1),
(55, 208, 1),
(56, 208, 1),
(57, 196, 1),
(58, 207, 1),
(59, 207, 1),
(60, 207, 1),
(62, 210, 1),
(63, 210, 1),
(65, 211, 1),
(66, 209, 1),
(67, 211, 1),
(69, 213, 1),
(71, 214, 43);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(255) DEFAULT NULL,
  `content_post` varchar(500) DEFAULT NULL,
  `user_key_f` int(11) DEFAULT NULL,
  `create_time` time DEFAULT NULL,
  `create_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `title_post`, `content_post`, `user_key_f`, `create_time`, `create_Date`) VALUES
(1, 'welcom', 'this my first work with php', 1, '28:12:17', '2018-06-07'),
(2, 'welcom', 'this my first work with php', 1, '28:12:17', '2018-06-07'),
(3, 'new post', 'new look is aswsme nover give up', 1, '25:14:15', '2018-06-04'),
(5, 'new post', 'thanks for hoda saad my best frind', 1, '838:59:59', '2018-06-09'),
(6, 'new post', 'thanks for hoda saad my best frind', 1, '13:01:00', '2018-06-09'),
(86, 'welcoming', 'this is welcome post', 1, '19:12:14', '2018-06-05'),
(87, 'AHMEDHAKEEM', 'الحمد للة رب العالمين', 1, '04:02:23', '2018-06-17'),
(88, 'AHMEDHAKEEM', 'al7amd lellah\n', 1, '11:52:18', '2018-06-17'),
(195, 'Ali_265', 'ana ali hassan ya naaas', 43, '06:15:49', '2018-06-25'),
(196, 'Ali_265', 'ana 3atef ', 43, '06:17:15', '2018-06-25'),
(197, 'Ali_265', 'la2 bas 7alwa', 43, '06:21:08', '2018-06-25'),
(205, 'AHMEDHAKEEM', 'ana ahmed', 1, '06:33:21', '2018-06-25'),
(206, 'AHMEDHAKEEM', 'ya nas ana ahmed', 1, '06:33:21', '2018-06-25'),
(207, 'Ali_265', 'ana ali hassan ', 43, '06:34:24', '2018-06-25'),
(208, 'Ali_265', 'tany marah ana ali hassan ', 43, '06:34:24', '2018-06-25'),
(209, 'AHMEDHAKEEM', '', 1, '05:54:38', '2018-06-26'),
(210, 'AHMEDHAKEEM', 'hi ana ahmed lessa ma3adel al blog button', 1, '05:54:38', '2018-06-26'),
(211, 'AHMEDHAKEEM', 'ana garabst bas fe moshkala', 1, '05:55:53', '2018-06-26'),
(212, 'AHMEDHAKEEM', 'hg', 1, '05:56:59', '2018-06-26'),
(213, 'AHMEDHAKEEM', '55615', 1, '05:58:46', '2018-06-26'),
(214, 'Ali_265', 'hello', 43, '05:59:18', '2018-06-26'),
(215, 'Ali_265', 'ya nas ', 43, '06:01:31', '2018-06-26'),
(216, 'Ali_265', 'lololololollilliiiiiiiiiii', 43, '06:03:00', '2018-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `is_Active` tinyint(1) DEFAULT NULL,
  `is_Blocked` tinyint(1) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `birth` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `relition` varchar(255) NOT NULL,
  `min_img` varchar(255) NOT NULL,
  `max_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `firstname`, `lastname`, `user_password`, `email`, `mobile`, `is_Active`, `is_Blocked`, `created_date`, `update_date`, `birth`, `nationality`, `relition`, `min_img`, `max_img`) VALUES
(1, 'AHMEDHAKEEM', 'ahmed', 'abdel hakim', 'M123456', 'ahmedhakeem18@gmail.com', '011258554658', 1, 0, '2018-05-01 00:00:00', '2018-06-01 00:00:00', '2018-04-01', 'Egyptian', 'Muslim', 'Upload/1529752719_thump.jpeg', 'Upload/1529752719.jpeg'),
(43, 'Ali_265', 'ali', 'hassan', 'M123456', 'ahmedhakeem19@gmail.com', '01152822440', 0, 0, '2018-06-25 06:15:27', '2018-06-25 06:15:27', '2014-01-01', 'AF', 'Islam', 'Upload/1529943338_thump.png', 'Upload/1529943338.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `post_key_f` (`post_key_f`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`disLike_id`),
  ADD KEY `Post_id` (`Post_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`Like_id`),
  ADD KEY `Post_id` (`Post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `user_key_f` (`user_key_f`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `Like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_key_f`) REFERENCES `posts` (`id_post`);

--
-- Constraints for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD CONSTRAINT `dislikes_ibfk_1` FOREIGN KEY (`Post_id`) REFERENCES `posts` (`id_post`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`Post_id`) REFERENCES `posts` (`id_post`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_key_f`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
