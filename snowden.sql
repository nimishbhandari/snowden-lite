-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 11:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snowden`
--

-- --------------------------------------------------------

--
-- Table structure for table `coder`
--

CREATE TABLE `coder` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `theme_num` varchar(255) NOT NULL,
  `theme_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar(255) NOT NULL,
  `ans4` varchar(255) NOT NULL,
  `ans5` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `up_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coder`
--

INSERT INTO `coder` (`id`, `username`, `theme_num`, `theme_name`, `email`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `score`, `up_time`) VALUES
(1, 'test1', '1', 'theme1', 'theme@gmail.com', '5a105e8b9d40e1329780d62ea2265d8a', 'ad0234829205b9033196ba818f7a872b', '8ad8757baa8564dc136c1e07507f4a98', '86985e105f79b95d6bc918fb45ec7727', 'e3d704f3542b44a621ebed70dc0efe13', '-10', '2020-09-12 08:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `solver`
--

CREATE TABLE `solver` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `thm_a` int(11) NOT NULL,
  `thm_b` int(11) NOT NULL,
  `thm_c` int(11) NOT NULL,
  `thm_d` int(11) NOT NULL,
  `thm_e` int(11) NOT NULL,
  `thm_f` int(11) NOT NULL,
  `thm_g` int(11) NOT NULL,
  `thm_h` int(11) NOT NULL,
  `thm_i` int(11) NOT NULL,
  `thm_j` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `up_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solver`
--

INSERT INTO `solver` (`id`, `username`, `email`, `college`, `year`, `contact`, `password`, `thm_a`, `thm_b`, `thm_c`, `thm_d`, `thm_e`, `thm_f`, `thm_g`, `thm_h`, `thm_i`, `thm_j`, `score`, `up_time`) VALUES
(1, 'nimish', 'nimishbhandari727521@gmail.com', 'mmmut', 'nimish', 'nimish', '05fdbe066cbfd7080252b0281a856832', 1, 0, 0, 0, 0, 0, 0, 0, 0, 5, 6, '2020-09-11 19:41:26'),
(2, 'noioi', 'boihoipi@gmail.com', 'mmut', '4', '97697', 'ddaa25536c7cd34c488b67ed6fb7c3cb', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(3, 'aidipi', 'asdoa@gail.com', 'aoibd', '1', '8122179', 'd6ce1f5532468b543ee13a592b8b9cd1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(4, 'test', 'test@gmail.com', 'm', '1', '1', '098f6bcd4621d373cade4e832627b4f6', 2, 1, 3, 0, 3, 6, 5, 4, 2, 2, 7, '2020-09-12 09:09:05'),
(5, 'prop', 'prop@gmail.com', 'mmmut', '2', '92123', '23a5b8ab834cb5140fa6665622eb6417', 1, 3, 1, 2, 3, 5, 4, 4, 0, 0, 1, '2020-09-12 09:06:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coder`
--
ALTER TABLE `coder`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `solver`
--
ALTER TABLE `solver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coder`
--
ALTER TABLE `coder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solver`
--
ALTER TABLE `solver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
