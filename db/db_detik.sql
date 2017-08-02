-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 05:12 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_detik`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id_apply` int(100) NOT NULL,
  `iduser` int(100) NOT NULL,
  `job_id` int(3) NOT NULL,
  `tanggal_apply` date NOT NULL,
  `id_hrd` int(3) NOT NULL,
  `admin_date` datetime NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'unprocess'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id_apply`, `iduser`, `job_id`, `tanggal_apply`, `id_hrd`, `admin_date`, `status`) VALUES
(1, 1, 0, '2017-02-07', 0, '0000-00-00 00:00:00', 'unprocess'),
(2, 2, 0, '2017-02-07', 0, '0000-00-00 00:00:00', 'unprocess'),
(6, 2, 2, '2017-02-07', 0, '0000-00-00 00:00:00', 'unprocess'),
(7, 2, 3, '2017-02-07', 0, '0000-00-00 00:00:00', 'unprocess'),
(8, 2, 0, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(9, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(10, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(11, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(12, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(13, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(14, 7, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(15, 7, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(16, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(17, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(18, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(19, 7, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(20, 7, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(21, 7, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(22, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(23, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(24, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(25, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(26, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(27, 2, 3, '2017-02-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(28, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(29, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(30, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(31, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(32, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(33, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(34, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(35, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(36, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(37, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(38, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(39, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(40, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(41, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(42, 2, 3, '2017-02-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(43, 2, 3, '2017-02-10', 0, '0000-00-00 00:00:00', 'unprocess'),
(44, 2, 3, '2017-02-10', 0, '0000-00-00 00:00:00', 'unprocess'),
(45, 2, 3, '2017-02-10', 0, '0000-00-00 00:00:00', 'unprocess'),
(46, 2, 3, '2017-02-10', 0, '0000-00-00 00:00:00', 'unprocess'),
(47, 2, 3, '2017-03-03', 0, '0000-00-00 00:00:00', 'unprocess'),
(48, 2, 3, '2017-03-03', 0, '0000-00-00 00:00:00', 'unprocess'),
(49, 2, 3, '2017-03-03', 0, '0000-00-00 00:00:00', 'unprocess'),
(50, 2, 3, '2017-04-16', 0, '0000-00-00 00:00:00', 'unprocess'),
(51, 2, 3, '2017-04-16', 0, '0000-00-00 00:00:00', 'unprocess'),
(52, 2, 3, '2017-04-18', 0, '0000-00-00 00:00:00', 'unprocess'),
(53, 2, 3, '2017-04-18', 0, '0000-00-00 00:00:00', 'unprocess'),
(54, 2, 3, '2017-04-20', 0, '0000-00-00 00:00:00', 'unprocess'),
(55, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(56, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(57, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(58, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(59, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(60, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(61, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(62, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(63, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(64, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(65, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(66, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(67, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(68, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(69, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(70, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(71, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(72, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(73, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(74, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(75, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(76, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(77, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(78, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(79, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(80, 2, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(81, 7, 3, '2017-04-28', 0, '0000-00-00 00:00:00', 'unprocess'),
(82, 23, 3, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(83, 23, 3, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(84, 23, 1, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(85, 23, 1, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(86, 23, 3, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(87, 2, 1, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(88, 2, 1, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(89, 23, 2, '2017-05-08', 0, '0000-00-00 00:00:00', 'unprocess'),
(90, 2, 1, '2017-05-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(91, 2, 1, '2017-05-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(92, 7, 1, '2017-05-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(93, 2, 1, '2017-05-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(94, 2, 2, '2017-05-09', 0, '0000-00-00 00:00:00', 'unprocess'),
(95, 2, 1, '2017-05-10', 0, '0000-00-00 00:00:00', 'unprocess'),
(96, 2, 1, '2017-05-12', 0, '0000-00-00 00:00:00', 'unprocess'),
(97, 2, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(98, 2, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(99, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(100, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(101, 2, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(102, 7, 2, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(103, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(104, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(105, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(106, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(107, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(108, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(109, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(110, 7, 3, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(111, 7, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(112, 2, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(113, 7, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(114, 7, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(115, 7, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(116, 7, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(117, 7, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(118, 2, 1, '2017-05-15', 0, '0000-00-00 00:00:00', 'unprocess'),
(119, 2, 3, '2017-05-16', 0, '0000-00-00 00:00:00', 'unprocess'),
(120, 7, 2, '2017-05-16', 0, '0000-00-00 00:00:00', 'unprocess'),
(121, 2, 1, '2017-05-17', 0, '0000-00-00 00:00:00', 'unprocess'),
(122, 7, 1, '2017-05-17', 0, '0000-00-00 00:00:00', 'unprocess'),
(123, 2, 1, '2017-05-17', 0, '0000-00-00 00:00:00', 'unprocess'),
(124, 7, 1, '2017-05-17', 0, '0000-00-00 00:00:00', 'unprocess'),
(125, 7, 1, '2017-05-17', 0, '0000-00-00 00:00:00', 'unprocess');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(3) NOT NULL,
  `footer_name_right` varchar(40) NOT NULL,
  `footer_name_left` varchar(30) NOT NULL,
  `footer_desc_right` text NOT NULL,
  `footer_desc_left` text NOT NULL,
  `footer_name_website` varchar(30) NOT NULL,
  `footer_file` varchar(30) NOT NULL,
  `footer_hrd` int(3) NOT NULL,
  `footer_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `footer_modiftime` datetime NOT NULL,
  `footer_is_displayed` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_name_right`, `footer_name_left`, `footer_desc_right`, `footer_desc_left`, `footer_name_website`, `footer_file`, `footer_hrd`, `footer_createtime`, `footer_modiftime`, `footer_is_displayed`) VALUES
(1, 'HUMAN RESOURCES<br> DEVELOPMENT', 'Recruitment hgnhn', 'PT Agranet Multicitra Siberkom<br>\nrecruitment@detik.com<br>\n"Only short-listed candidates will be notified"<br>\n"Invitation Processes will be conducted by sms & email"\n\n', 'Please note that detikcom never ask for any money or payments from applicants, at any point in the recruitment process. Kindly contact us of any suspicious job openings or offers of employment. (Harap dicatat. Setiap tahapan proses seleksi rekrutmen detikcom tidak pernah meminta uang atau bayaran dari pelamar. Silakan hubungi jika mendapatkan informasi lowongan pekerjaan atau tawaran kerja yang mencurigakan.)', 'www.detik.com', '', 1, '2017-02-06 08:36:25', '2017-02-06 00:00:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(3) NOT NULL,
  `gallery_name` varchar(50) NOT NULL,
  `gallery_desc` text NOT NULL,
  `gallery_file` varchar(50) NOT NULL,
  `gallery_hrd` int(3) NOT NULL,
  `gallery_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gallery_modiftime` datetime NOT NULL,
  `gallery_is_home` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `gallery_desc`, `gallery_file`, `gallery_hrd`, `gallery_createtime`, `gallery_modiftime`, `gallery_is_home`) VALUES
(1, 'judul foto 1', 'diskripsi foto 1', '6.jpg', 2, '2017-02-02 12:49:16', '0000-00-00 00:00:00', 'Y'),
(2, 'judul foto 4', 'des foto 4', '3.jpg', 1, '2017-02-02 12:49:16', '0000-00-00 00:00:00', 'Y'),
(3, 'foto IT', 'descripsi IT', '3.jpg', 1, '2017-02-03 07:40:54', '2017-02-03 00:00:00', 'Y'),
(4, 'foto proman', 'descripsi proman', '1.jpg', 2, '2017-02-03 07:42:09', '2017-02-03 00:00:00', 'Y'),
(5, 'it infrastruktur', 'deskripsi it infrastruktur', '6.jpg', 1, '2017-02-03 07:42:09', '2017-02-03 00:00:00', 'Y'),
(7, 'foto kita', 'deskripsi foto kita', '3.jpg', 2, '2017-02-03 07:43:22', '2017-02-03 00:00:00', 'Y'),
(8, 'foto bersama', 'descripsi foto bersama', '4.jpg', 1, '2017-02-03 08:18:32', '2017-02-03 00:00:00', 'Y'),
(9, 'foto detik', 'deskripsi foto detik', '2.jpg', 2, '2017-02-03 08:19:00', '2017-02-03 00:00:00', 'Y'),
(11, 'foto 4', 'deskripsi foto 4', '4.jpg', 1, '2017-02-09 06:30:39', '2017-02-09 00:00:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `header_id` int(3) NOT NULL,
  `header_name` varchar(50) NOT NULL,
  `header_tagline` text NOT NULL,
  `header_file` varchar(40) NOT NULL,
  `header_hrd` int(3) NOT NULL,
  `header_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `header_modiftime` datetime NOT NULL,
  `header_is_displayed` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`header_id`, `header_name`, `header_tagline`, `header_file`, `header_hrd`, `header_createtime`, `header_modiftime`, `header_is_displayed`) VALUES
(1, 'Detik Karir', 'Together, we deliver news for everyone, smalll thing will be very important.<br>\nBe part of us, be part of something <b>BIG</b>', 'background-karir.png', 2, '2017-02-06 09:09:45', '2017-02-06 00:00:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `hrd`
--

CREATE TABLE `hrd` (
  `id_hrd` int(15) NOT NULL,
  `username_hrd` varchar(50) NOT NULL,
  `email_hrd` varchar(50) NOT NULL,
  `password_hrd` varchar(16) NOT NULL,
  `super_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd`
--

INSERT INTO `hrd` (`id_hrd`, `username_hrd`, `email_hrd`, `password_hrd`, `super_admin`) VALUES
(1, 'dimass', 'dimas@admin1.com', 'qwerty123', 1),
(2, 'nggun', 'anggun@admin2.com', '12345qwe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(3) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `job_desc` varchar(300) NOT NULL,
  `job_file` varchar(30) NOT NULL,
  `job_status` datetime NOT NULL,
  `job_hrd` int(3) NOT NULL,
  `job_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `job_modiftime` datetime NOT NULL,
  `job_is_listjob` char(1) NOT NULL DEFAULT 'N',
  `jobslug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `job_desc`, `job_file`, `job_status`, `job_hrd`, `job_createtime`, `job_modiftime`, `job_is_listjob`, `jobslug`) VALUES
(1, 'Human Capital', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed est tempus, eleifend dolor sollicitudin, commodo orci. Quisque elit felis, mattis quis aliquam ac, ornare ultrices turpis. Maecenas mattis mauris id arcu ullamcorper mollis.', 'human-capital.jpg', '2017-02-25 00:00:00', 2, '2017-02-03 08:57:52', '2017-02-03 00:00:00', 'Y', 'human-capital'),
(2, 'IT ERP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed est tempus, eleifend dolor sollicitudin, commodo orci. Quisque elit felis, mattis quis aliquam ac, ornare ultrices turpis. Maecenas mattis mauris id arcu ullamcorper mollis.', 'it-erp.jpg', '2017-02-22 00:00:00', 1, '2017-02-03 09:34:20', '2017-02-03 00:00:00', 'Y', 'it-erp'),
(3, 'Sales', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed est tempus, eleifend dolor sollicitudin, commodo orci. Quisque elit felis, mattis quis aliquam ac, ornare ultrices turpis. Maecenas mattis mauris id arcu ullamcorper mollis.', 'sales.jpg', '2017-02-25 00:00:00', 1, '2017-02-03 09:40:26', '2017-02-03 00:00:00', 'Y', 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `jobdetail`
--

CREATE TABLE `jobdetail` (
  `jobdetail_id` int(3) NOT NULL,
  `jobdetail_name` varchar(30) NOT NULL,
  `jobdetail_desc` varchar(1000) NOT NULL,
  `jobdetail_status` datetime NOT NULL,
  `jobdetail_persyaratan` varchar(5000) NOT NULL,
  `jobdetail_tugas` varchar(5000) NOT NULL,
  `jobdetail_hrd` int(3) NOT NULL,
  `jobdetail_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jobdetail_modiftime` datetime NOT NULL,
  `jobdetail_is_pagejobdetail` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobdetail`
--

INSERT INTO `jobdetail` (`jobdetail_id`, `jobdetail_name`, `jobdetail_desc`, `jobdetail_status`, `jobdetail_persyaratan`, `jobdetail_tugas`, `jobdetail_hrd`, `jobdetail_createtime`, `jobdetail_modiftime`, `jobdetail_is_pagejobdetail`) VALUES
(1, 'human capital', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed est tempus, eleifend dolor sollicitudin, commodo orci. Quisque elit felis, mattis quis aliquam ac, ornare ultrices turpis. Maecenas mattis mauris id arcu ullamcorper mollis.', '2017-02-25 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed est tempus, eleifend dolor sollicitudin, commodo orci. Quisque elit felis, mattis quis aliquam ac, ornare ultrices turpis. Maecenas mattis mauris id arcu ullamcorper mollis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed est tempus, eleifend dolor sollicitudin, commodo orci. Quisque elit felis, mattis quis aliquam ac, ornare ultrices turpis. Maecenas mattis mauris id arcu ullamcorper mollis.', 1, '2017-02-03 10:48:44', '2017-02-03 00:00:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `iduser` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`iduser`, `username`, `email`, `password`) VALUES
(2, 'anggun', 'admin@user9.com', '12345678'),
(7, 'ndud', 'ndud@ndud.com', '1234'),
(20, 'nduuudd', 'ndud@ndud.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'detik', 'detik@detik.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'Fajar Yoga ', 'pradana.yoga31@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1'),
(23, 'dimas', 'dimas@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(24, 'dimas', 'dimas@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(3) NOT NULL,
  `video_name` varchar(30) NOT NULL,
  `video_file` varchar(20) NOT NULL,
  `video_hrd` int(3) NOT NULL,
  `video_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `video_modiftime` datetime NOT NULL,
  `video_is_home` char(1) NOT NULL DEFAULT 'N',
  `video_is_header` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `video_file`, `video_hrd`, `video_createtime`, `video_modiftime`, `video_is_home`, `video_is_header`) VALUES
(3, 'videokuuu', 'video1.mp4', 2, '2017-02-03 05:52:39', '2017-02-03 00:00:00', 'y', 'N'),
(4, 'videoheader', 'video2.mp4', 1, '2017-02-03 07:39:42', '2017-02-03 00:00:00', 'N', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id_apply`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `hrd`
--
ALTER TABLE `hrd`
  ADD PRIMARY KEY (`id_hrd`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobdetail`
--
ALTER TABLE `jobdetail`
  ADD PRIMARY KEY (`jobdetail_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id_apply` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `header_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hrd`
--
ALTER TABLE `hrd`
  MODIFY `id_hrd` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobdetail`
--
ALTER TABLE `jobdetail`
  MODIFY `jobdetail_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `iduser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
