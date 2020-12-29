-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 11:51 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_message` varchar(100) NOT NULL,
  `message_date_time` datetime NOT NULL,
  `message_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `experience_id` int(10) NOT NULL,
  `experience_icon` varchar(100) NOT NULL,
  `experience_count` varchar(100) NOT NULL,
  `experience_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`experience_id`, `experience_icon`, `experience_count`, `experience_text`) VALUES
(4, 'flaticon-award', '245', 'Feature Item'),
(5, 'flaticon-like', '345', 'ACTIVE PRODUCTS'),
(6, 'flaticon-event', '39', 'Year Experience'),
(7, 'flaticon-woman', '3000', 'Our Clients');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desc` text NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `services_status` int(1) NOT NULL DEFAULT 1 COMMENT '1=Unpublished, 2=published'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_desc`, `service_icon`, `services_status`) VALUES
(13, 'SUPPER SUPPORT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fal fa-headset', 2),
(14, 'EASY CUSTOMIZATION', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.\r\n', 'fal fa-edit', 2),
(15, 'CREATIVE IDEAS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fal fa-lightbulb-on', 2),
(16, 'ULTRA RESPONSIVE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.\r\n\r\n', 'fal fa-desktop', 2),
(17, 'UNLIMITED FEATURES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.\r\n', 'fab fa-free-code-camp', 2),
(18, 'CREATIVE DESIGN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.\r\n\r\n', 'fab fa-react', 2);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `skills_title` varchar(100) NOT NULL,
  `skills_years` int(10) NOT NULL,
  `skills_progress_text` varchar(100) NOT NULL,
  `skills_progress_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills_title`, `skills_years`, `skills_progress_text`, `skills_progress_count`) VALUES
(4, 'EDUCATION:', 2020, 'PHD of Interaction Design &amp; Animation', 65),
(5, 'EDUCATION:', 2016, 'Master of Database Administration', 75),
(6, 'EDUCATION:', 2010, 'Bachelor of Computer Engineering', 85),
(7, 'EDUCATION:', 2005, 'Diploma of Computer', 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `users_bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `users_bio`) VALUES
(1, ' Abdullah Al Noman', 'aa@aa.aa', '0cc175b9c0f1b6a831c399e269772661', ''),
(2, ' MD ABDULLAH', 'abd01nom@gmail.com', 'aa59cd9b3eb58f0e19104d0446916c4e', ''),
(3, ' MD ABDULLAH', 'aa@aa.aaa', '0cc175b9c0f1b6a831c399e269772661', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit.\r\n                                Numquam!'),
(4, 'Abdullah Al Noman', 'bb@bb.bb', '92eb5ffee6ae2fec3ad71c777531578f', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit.\r\n                                Numquam!'),
(5, 'cox', 'aaa@aa.aa', '0cc175b9c0f1b6a831c399e269772661', ''),
(6, ' bangladesh amar', 'ami@ami.ami', '6c5b7de29192b42ed9cc6c7f635c92e0', ''),
(7, ' Abdullah Al Noman', 'abdullahalnomanme@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(8, ' Abdullah Al Noman', 'aa@aa.aaaa', '52c2b823b5dbefdcab92770a39694a7d', ''),
(9, ' Abdullah Al Noman', 'aa@aa.aaazzz', '3c27d1f86638f3e9fffa24aa5462f632', ''),
(10, ' Abdullah Al Noman', 'noman@noman.coma', '05dc00bd79e13b1bc6c1d1249807043c', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `experience_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
