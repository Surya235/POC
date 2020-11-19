-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 04:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(9) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'HTML5'),
(2, 'JAVA\r\n'),
(3, 'MySQL'),
(4, 'NodeJS'),
(12, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(9) NOT NULL,
  `comment_post_id` int(9) NOT NULL,
  `comment_commenter` varchar(25) NOT NULL,
  `comment_email` varchar(25) NOT NULL,
  `comment_content` varchar(2550) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_post_id`, `comment_commenter`, `comment_email`, `comment_content`, `comment_date`, `comment_status`) VALUES
(15, 17, 'Dhiva', 'dhiva@g.com', 'Really awesome...!', '2020-11-03', 'Approve'),
(21, 17, 'Raj', 'raj@g.com', 'Easy to understand for beginners ', '2020-11-05', 'Approve'),
(24, 15, 'Tej', 'tej@g.com', 'Got an idea about MySQL', '2020-11-02', 'Approve'),
(25, 23, 'Guru', 'guru@g.com', 'Please, explain more detail about oops concept', '2020-11-04', 'Approve'),
(26, 15, 'Gill', 'gill@g.com', 'Make another post for queries', '2020-11-02', 'Approve'),
(27, 16, 'Billy', 'billy@g.com', 'Please make an Part II', '2020-11-03', 'Approve'),
(28, 18, 'Bob', 'bob@g.com', 'Amazing content', '2020-11-04', 'Approve'),
(29, 25, 'Sagar', 'sagar@g.com', 'Amazing expalanation', '2020-11-05', 'Approve'),
(30, 14, 'Nanda', 'nanda@g.com', 'It is really usefull', '2020-11-02', 'Approve'),
(31, 14, 'Tom', 'tom@gmail.com', 'Learnt a lot of things from this content', '2020-11-04', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(9) NOT NULL,
  `post_category_id` int(9) NOT NULL,
  `post_title` varchar(125) NOT NULL,
  `post_author` text NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(125) NOT NULL,
  `post_content` varchar(15000) NOT NULL,
  `post_tags` varchar(125) NOT NULL,
  `post_comment_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`) VALUES
(14, 2, 'Object Oriented Programming', 'ken', '2020-11-01', 'java1.jpg', 'Object-oriented programming (OOP) is a programming paradigm based on the concept of \"objects\", which can contain data and code: data in the form of fields (often known as attributes or properties), and code, in the form of procedures (often known as methods).', 'object oriented programming, oops, ken', 2),
(15, 3, 'MySQL - Web Development', 'Mike', '2020-11-01', 'mysql.png', '		MySQL is a freely available open source Relational Database Management System (RDBMS) that uses Structured Query Language (SQL). SQL is the most popular language for adding, accessing and managing content in a database. It is most noted for its quick processing, proven reliability, ease and flexibility of use.', 'MySQL, Mike, Database', 2),
(16, 4, 'NodeJS - For Begginers PART I', 'Tom', '2020-11-01', 'indexw.png', '		Node. js (Node) is an open source development platform for executing JavaScript code server-side. Node is useful for developing applications that require a persistent connection from the browser to the server and is often used for real-time applications such as chat, news feeds and web push notifications.', 'NodeJS, Tom, JavaScript', 1),
(17, 1, 'Basics of Web Development - HTML', 'Kabir', '2020-11-02', 'index.jpg', '		HTML is a markup language that defines the structure of your content. HTML consists of a series of elements, which you use to enclose, or wrap, different parts of the content to make it appear a certain way, or act a certain way. The enclosing tags can make a word or image hyperlink to somewhere else, can italicize words, can make the font bigger or smaller, and so on.', 'HTML, HTML5, Kabir, Web Development', 9),
(18, 2, 'Data Structures using JAVA', 'Mike', '2020-11-02', 'java.png', '		Data Structures are structures programmed to store ordered data, so that various operations can be performed on it easily. It represents the knowledge of data to be organized in memory. It should be designed and implemented in such a way that it reduces the complexity and increases the efficiency.', 'Mike, Java, Data Structures', 1),
(23, 12, 'Python - Part I', 'Ken', '2020-11-02', 'py1.jpg', 'Python is an interpreted, high-level and general-purpose programming language. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects. It supports multiple programming paradigms, including structured, object-oriented, and functional programming.', 'Python, Mike', 1),
(24, 4, 'NodeJS - For Begginers PART II', 'Tom', '2020-11-03', 'indexw.png', '		Node. js (Node) is an open source development platform for executing JavaScript code server-side. Node is useful for developing applications that require a persistent connection from the browser to the server and is often used for real-time applications such as chat, news feeds and web push notifications.', 'NodeJS, Tom, JavaScript', 0),
(25, 1, 'Web Development Using HTML, CSS, JS', 'Kabir', '2020-11-03', 'index.png', '		HTML stands for Hype Text Markup Language. CSS stands for Cascading Style Sheets. CSS describes how HTML elements are to be displayed on screen, paper, or in other media.', 'HTML, HTML5, Kabir, Web Development', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(9) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_image` varchar(25) NOT NULL,
  `user_role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_image`, `user_role`) VALUES
(35, 'admin', '$2y$10$rsMXaiA3ESpn5w31of2sHO9.hWPp90YlpdML44ytckfYEb35YSafa', 'admin@a.com', 'IMG-20190605-WA0045.jpg', 'Admin'),
(36, 'kimiko', '$2y$10$mSQry8FWI1JC5TVZai2pF.FA/V1ENZggawTI6RgTEHVI227KZ15Zy', 'kimiko@k.com', 'IMG-20190602-WA0036.jpg', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
