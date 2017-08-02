-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 05:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
  `tanggal_apply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_hrd` int(3) NOT NULL DEFAULT '0',
  `admin_date` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unprocess'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id_apply`, `iduser`, `job_id`, `tanggal_apply`, `id_hrd`, `admin_date`, `status`) VALUES
(1, 2, 5, '2017-02-02 09:54:59', 0, '0000-00-00 00:00:00', 'accepted'),
(2, 2, 3, '2017-02-07 05:06:41', 1, '2017-02-10 03:51:44', 'accepted'),
(4, 1, 5, '2017-02-08 17:20:27', 1, '2017-02-09 08:13:48', 'unprocess'),
(5, 1, 3, '2017-02-09 06:30:20', 1, '2017-02-09 08:30:36', 'next test'),
(6, 2, 5, '2017-02-09 06:30:20', 1, '2017-02-09 09:04:21', 'shortlist');

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
  `nama_tipe` varchar(20) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `job_desc` text NOT NULL,
  `job_file` varchar(30) NOT NULL,
  `job_status` date NOT NULL,
  `job_hrd` int(3) NOT NULL,
  `job_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `job_modiftime` datetime NOT NULL,
  `job_is_listjob` char(1) NOT NULL DEFAULT 'N',
  `jobslug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `nama_tipe`, `job_name`, `job_desc`, `job_file`, `job_status`, `job_hrd`, `job_createtime`, `job_modiftime`, `job_is_listjob`, `jobslug`) VALUES
(3, 'internship', 'haaii', 'lalalala', 'images_1486359317.jpg', '2017-02-06', 1, '2017-02-06 04:19:49', '2017-02-06 06:35:17', 'Y', ''),
(5, 'cobaa yaa', 'magang 1 2 3 4', 'magaaaang', 'images_1486546898.jpg', '2017-02-08', 1, '2017-02-08 09:41:38', '2017-02-08 10:41:38', 'Y', 'magang-1-2-3-4'),
(6, 'coba 2', 'detail job 2', 'detail detail job 2', 'images_1486622109.jpg', '2017-02-09', 1, '2017-02-09 06:35:09', '2017-02-09 07:35:09', 'N', 'detail-job-2'),
(7, 'coba 3', 'coba 3 detail', 'detail detaiill job 3', 'images_1486622141.jpg', '2017-02-09', 1, '2017-02-09 06:35:41', '2017-02-09 07:35:41', 'Y', 'coba-3-detail');

-- --------------------------------------------------------

--
-- Table structure for table `jobdetail`
--

CREATE TABLE `jobdetail` (
  `jobdetail_id` int(3) NOT NULL,
  `nama_tipe` varchar(30) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `jobdetail_name` varchar(30) NOT NULL,
  `jobdetail_desc` text NOT NULL,
  `jobdetail_status` date NOT NULL,
  `jobdetail_persyaratan` text NOT NULL,
  `jobdetail_tugas` text NOT NULL,
  `id_hrd` int(3) NOT NULL,
  `jobdetail_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jobdetail_modiftime` datetime NOT NULL,
  `jobdetail_is_pagejobdetail` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobdetail`
--

INSERT INTO `jobdetail` (`jobdetail_id`, `nama_tipe`, `job_name`, `jobdetail_name`, `jobdetail_desc`, `jobdetail_status`, `jobdetail_persyaratan`, `jobdetail_tugas`, `id_hrd`, `jobdetail_createtime`, `jobdetail_modiftime`, `jobdetail_is_pagejobdetail`) VALUES
(1, 'cobaa', 'Design', 'Design web', 'jadi itu adalahaaa', '2017-02-06', 'bisa main css', 'bikin design css web', 1, '2017-02-05 17:00:00', '2017-01-25 00:00:00', 'Y'),
(3, 'cobaa yaa', 'haaii', 'weeb cobaa', 'lalala', '2017-02-07', 'bisaa', 'bikiiinn', 1, '2017-02-06 18:28:50', '2017-02-06 19:28:50', 'Y'),
(4, 'job vacancy', 'haaii', 'ceeeekk', 'coba', '2017-02-10', 'coba', 'coba', 1, '2017-02-06 18:30:22', '2017-02-06 19:30:22', 'N'),
(5, 'cobaa yaa', 'haaii', 'ini Di Cobaa coBa', 'buat coba coba gaeess', '2017-02-08', 'bisa di cobaaa', 'lalasa cobaa', 1, '2017-02-08 09:36:44', '2017-02-08 10:36:44', 'Y'),
(6, 'coba 2', 'detail job 2', 'advertisement coba 2', 'buat coba deskripsi advertisement', '2017-02-09', 'bisa buat nambah advertisement', 'harus bisaa', 1, '2017-02-09 06:37:09', '2017-02-09 07:37:09', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_kategori`
--

CREATE TABLE `lowongan_kategori` (
  `id_tipe` int(2) NOT NULL,
  `nama_tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan_kategori`
--

INSERT INTO `lowongan_kategori` (`id_tipe`, `nama_tipe`) VALUES
(1, 'job vacancy'),
(2, 'internship'),
(3, 'cobaa yaa'),
(4, 'coba 2'),
(5, 'coba 3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(100) NOT NULL,
  `idform` int(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `handphone` int(10) NOT NULL,
  `linkedin` varchar(20) NOT NULL,
  `portofolio` text NOT NULL,
  `cv_user` varchar(50) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `idform`, `nama_lengkap`, `handphone`, `linkedin`, `portofolio`, `cv_user`, `tanggal_upload`) VALUES
(2, 2, 'dimas', 9879787, '', '', '2_cv1.pdf', '2017-01-25'),
(1, 3, 'dadasd', 0, 'adasdsad', 'adssadadad', '1_cv_1485860109.pdf', '2017-01-31'),
(1, 4, 'anggun', 912313, 'nggun', 'hasdadad', '1_cv_1485863065.pdf', '2017-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `user_datadiri`
--

CREATE TABLE `user_datadiri` (
  `iduser` int(100) NOT NULL,
  `id_pribadi` int(100) NOT NULL,
  `pengalaman` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_datadiri`
--

INSERT INTO `user_datadiri` (`iduser`, `id_pribadi`, `pengalaman`) VALUES
(2, 1, 'pernah bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `iduser` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`iduser`, `username`, `email`, `password`) VALUES
(1, 'dim', 'dim@user3.com', '3fc0a7acf087f549ac2b266baf94b8'),
(2, 'anggun', 'nggun@user9.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `user_riwayatpekerjaan`
--

CREATE TABLE `user_riwayatpekerjaan` (
  `iduser` int(100) NOT NULL,
  `id_riwayatpekerjaan` int(100) NOT NULL,
  `nama_perusahaan` varchar(20) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `bulan_bergabung` varchar(20) NOT NULL,
  `tahun_bergabung` year(4) NOT NULL,
  `spesialisasi` varchar(20) NOT NULL,
  `bidang_pekerjaan` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_riwayatpekerjaan`
--

INSERT INTO `user_riwayatpekerjaan` (`iduser`, `id_riwayatpekerjaan`, `nama_perusahaan`, `alamat_perusahaan`, `posisi`, `bulan_bergabung`, `tahun_bergabung`, `spesialisasi`, `bidang_pekerjaan`, `jabatan`) VALUES
(2, 1, 'Coca Cola', 'berada di sekitar anda', 'manajer', 'februari', 2014, 'IT', 'IT', 'manajer');

-- --------------------------------------------------------

--
-- Table structure for table `user_riwayatpendidikan`
--

CREATE TABLE `user_riwayatpendidikan` (
  `iduser` int(100) NOT NULL,
  `id_riwayat` int(100) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `kualifikasi` varchar(10) NOT NULL,
  `bidang_studi` varchar(50) NOT NULL,
  `tahun_wisuda` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_riwayatpendidikan`
--

INSERT INTO `user_riwayatpendidikan` (`iduser`, `id_riwayat`, `sekolah`, `kualifikasi`, `bidang_studi`, `tahun_wisuda`) VALUES
(2, 1, '  undip', 'S1', 'IT', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id_apply`);

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
-- Indexes for table `lowongan_kategori`
--
ALTER TABLE `lowongan_kategori`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idform`);

--
-- Indexes for table `user_datadiri`
--
ALTER TABLE `user_datadiri`
  ADD PRIMARY KEY (`id_pribadi`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `user_riwayatpekerjaan`
--
ALTER TABLE `user_riwayatpekerjaan`
  ADD PRIMARY KEY (`id_riwayatpekerjaan`);

--
-- Indexes for table `user_riwayatpendidikan`
--
ALTER TABLE `user_riwayatpendidikan`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id_apply` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hrd`
--
ALTER TABLE `hrd`
  MODIFY `id_hrd` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jobdetail`
--
ALTER TABLE `jobdetail`
  MODIFY `jobdetail_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lowongan_kategori`
--
ALTER TABLE `lowongan_kategori`
  MODIFY `id_tipe` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idform` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_datadiri`
--
ALTER TABLE `user_datadiri`
  MODIFY `id_pribadi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `iduser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_riwayatpekerjaan`
--
ALTER TABLE `user_riwayatpekerjaan`
  MODIFY `id_riwayatpekerjaan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_riwayatpendidikan`
--
ALTER TABLE `user_riwayatpendidikan`
  MODIFY `id_riwayat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
