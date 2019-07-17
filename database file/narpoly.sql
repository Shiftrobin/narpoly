-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 06:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `narpoly`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tbl`
--

CREATE TABLE `gallery_tbl` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(200) NOT NULL,
  `gallery_num` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_tbl`
--

INSERT INTO `gallery_tbl` (`gallery_id`, `gallery_name`, `gallery_num`) VALUES
(25, '5d2045c4328ee', '5d2045c4328ee.jpg'),
(26, '5d2045ce4905e', '5d2045ce4905e.jpg'),
(27, '5d2045dae7b80', '5d2045dae7b80.jpg'),
(28, '5d2045e5eaa70', '5d2045e5eaa70.jpg'),
(29, '5d2045eee44ef', '5d2045eee44ef.jpg'),
(30, '5d2045f9962fe', '5d2045f9962fe.jpg'),
(31, '5d20455eeb17e', '5d20455eeb17e.jpg'),
(32, '5d20458cdcf30', '5d20458cdcf30.jpg'),
(33, '5d20461e31ed9', '5d20461e31ed9.jpg'),
(34, '5d204632d7f36', '5d204632d7f36.jpg'),
(35, '5d204603684ad', '5d204603684ad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_tbl`
--

CREATE TABLE `newsletter_tbl` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `signUpDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_tbl`
--

INSERT INTO `newsletter_tbl` (`id`, `email`, `signUpDate`) VALUES
(1, 'ishefat@gmail.com', '2019-07-08 05:39:48'),
(2, 'bgd.shefat@gmail.com', '2019-07-08 05:40:27'),
(3, 'bgd.shawon@gmail.com', '2019-07-08 05:51:28'),
(4, 'ashiq@gmail.com', '2019-07-08 05:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `notices_tbl`
--

CREATE TABLE `notices_tbl` (
  `notice_id` int(11) NOT NULL,
  `file_num` varchar(200) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices_tbl`
--

INSERT INTO `notices_tbl` (`notice_id`, `file_num`, `file_name`, `upload_date`) VALUES
(6, '5d1da2474b341.pdf', 'result cse', '2019-07-04 06:52:55'),
(7, '5d1da2527f67d.pdf', 'Result EEE', '2019-07-04 06:53:06'),
(8, '5d1da2712b0b8.pdf', 'Result Civil', '2019-07-04 06:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `results_tbl`
--

CREATE TABLE `results_tbl` (
  `result_id` int(11) NOT NULL,
  `roll_no` varchar(200) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `shift` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_tbl`
--

INSERT INTO `results_tbl` (`result_id`, `roll_no`, `reg_no`, `name`, `department`, `session`, `semester`, `shift`, `grade`) VALUES
(5, '1003', '1003', 'Runa', 'Computer Technology', '2015-2016', '8', 'First', '3.00'),
(6, '1004', '1004', 'Sumaiya', 'Food Technology', '2015-2016', '8', 'First', '3.00'),
(7, '1007', '1007', 'Jarin ', 'Computer Technology', '2015-2016', '8', 'Second', '3.50'),
(8, '1008', '1008', 'Tonima ', 'Computer Technology', '2014-2015', '8', 'First', '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_tbl`
--

CREATE TABLE `teachers_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_tbl`
--

INSERT INTO `teachers_tbl` (`id`, `name`, `title`, `file_name`, `phone`, `email`, `uploaded_on`, `status`) VALUES
(2, 'Md Rahidul Alam', 'Head of the Department(Electrical)', 'Screenshot_8.png', 1875044463, 'nrspoly@gmail.com', '2019-07-09 14:36:55', '0'),
(3, 'Engr. Md. Khurshed Alam', 'Head of the Department (Food)', 'khorshed-sir.jpg', 1875044463, 'nrspoly@gmail.com', '2019-07-09 14:44:13', '0'),
(4, 'Engr. M. Farrouque Ahamad', 'Head of the Department (Civil)', 'IMG_20190319_082143.jpg', 1725482933, 'nrspoly@gmail.com', '2019-07-09 14:50:18', '0'),
(5, 'Engr. A. F. M. Mizanur Rahman', 'Head of the Department (Computer)', 'CI_CMTwebsite.jpg', 1913183235, 'nrspoly@gmail.com', '2019-07-09 14:51:24', '0'),
(6, 'Engr. Md. Alamgir Sarker', 'Head of the Department (RAC)', 'Engr.-Md.-Alamgir-Sarkar.jpg', 1969064065, 'alamgirbpi@gmail.com', '2019-07-09 14:58:51', '0'),
(7, 'Md. Mahbubur Rahman', 'Head of the Department(Non-Tech)', '30-228x192.jpg', 1715374794, 'm.rahman0145@yahoo.com', '2019-07-09 14:59:54', '0'),
(8, 'Engr.Md.Sajed ur rahman', 'Vice-Principal', '263x300xvice-proncipa-2.jpg.pagespeed.ic.tnDWnmeQdB.jpg', 1715534320, 'nrspoly@gmail.com', '2019-07-09 15:02:05', '0'),
(9, 'Engr.Md.Farhad Hossain Chowdhury', 'Principal', '263x300xPrincipal-Sir-new.jpg.pagespeed.ic.45JDeQdvZi.jpg', 1712093697, ' nrspoly@gmail.com', '2019-07-09 15:02:41', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'Robin ', 'robin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-07-06 12:31:59'),
(2, 'Runa ', 'runa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-07-06 13:05:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `newsletter_tbl`
--
ALTER TABLE `newsletter_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices_tbl`
--
ALTER TABLE `notices_tbl`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `results_tbl`
--
ALTER TABLE `results_tbl`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
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
-- AUTO_INCREMENT for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `newsletter_tbl`
--
ALTER TABLE `newsletter_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices_tbl`
--
ALTER TABLE `notices_tbl`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `results_tbl`
--
ALTER TABLE `results_tbl`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers_tbl`
--
ALTER TABLE `teachers_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
