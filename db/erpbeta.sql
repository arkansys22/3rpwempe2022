-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 05:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpbeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `category_list_id` int(3) NOT NULL,
  `category_list_code` varchar(3) NOT NULL,
  `category_list_description` varchar(25) NOT NULL,
  `category_list_reff` varchar(30) NOT NULL,
  `category_list_company_account` varchar(20) NOT NULL,
  `category_list_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`category_list_id`, `category_list_code`, `category_list_description`, `category_list_reff`, `category_list_company_account`, `category_list_date`) VALUES
(1, 'CM', 'CONSUMABLE', 'Material', '111', '0000-00-00'),
(2, 'FA', 'FIXED ASSET', 'Material', '111', '0000-00-00'),
(3, 'FG', 'FINISH GOODS', 'Material', '111', '0000-00-00'),
(4, 'MX', 'MICROMIX', 'Material', '111', '0000-00-00'),
(5, 'PX', 'PREMIX', 'Material', '111', '0000-00-00'),
(6, 'RM', 'RAW MATERIAL', 'Material', '111', '0000-00-00'),
(7, 'SP', 'SUPPORT PRODUCTION', 'Material', '111', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(2) NOT NULL,
  `name` char(5) NOT NULL,
  `country` char(30) NOT NULL,
  `symbol` char(5) NOT NULL,
  `blocked` char(3) NOT NULL,
  `create_user` char(35) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_user` char(35) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `country`, `symbol`, `blocked`, `create_user`, `create_date`, `modified_user`, `modified_date`) VALUES
(1, 'IDR', 'Indonesian', 'Rp', 'No', 'jamaludin', '2020-12-20 01:15:10', 'jamaludin', '0000-00-00 00:00:00'),
(2, 'USD', 'United State Of America', '$US', 'No', 'jamaludin', '2020-12-20 01:16:49', 'jamaludin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `divisi_id` int(11) NOT NULL,
  `divisi_judul` varchar(220) NOT NULL,
  `divisi_judul_seo` varchar(220) NOT NULL,
  `divisi_desk` text NOT NULL,
  `divisi_keyword` varchar(220) NOT NULL,
  `divisi_meta_desk` varchar(200) NOT NULL,
  `divisi_gambar` text NOT NULL,
  `divisi_post_oleh` varchar(200) NOT NULL,
  `divisi_post_hari` varchar(20) NOT NULL,
  `divisi_post_tanggal` date NOT NULL,
  `divisi_post_jam` time NOT NULL,
  `divisi_update_oleh` varchar(200) NOT NULL,
  `divisi_update_hari` varchar(20) NOT NULL,
  `divisi_update_tanggal` date NOT NULL,
  `divisi_update_jam` time NOT NULL,
  `divisi_status` varchar(20) NOT NULL,
  `divisi_dibaca` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`divisi_id`, `divisi_judul`, `divisi_judul_seo`, `divisi_desk`, `divisi_keyword`, `divisi_meta_desk`, `divisi_gambar`, `divisi_post_oleh`, `divisi_post_hari`, `divisi_post_tanggal`, `divisi_post_jam`, `divisi_update_oleh`, `divisi_update_hari`, `divisi_update_tanggal`, `divisi_update_jam`, `divisi_status`, `divisi_dibaca`) VALUES
(1, 'HCD', 'hcd', '<p>HCD</p>', '', '1', '', 'dhawy', 'Kamis', '2022-04-07', '11:33:35', 'dhawy', 'Kamis', '2022-04-07', '11:33:49', 'publish', '0'),
(2, 'MARKETING', 'marketing', '<p>MARKETING<br></p>', '', '2', '', 'dhawy', 'Kamis', '2022-04-07', '11:34:17', '', '', '0000-00-00', '00:00:00', 'publish', '0'),
(3, 'WAHO & LOGISTIC', 'waho--logistic', '<p>WAHO &amp; LOGISTIC<br></p>', '', '3', '', 'dhawy', 'Kamis', '2022-04-07', '11:34:42', '', '', '0000-00-00', '00:00:00', 'publish', '0'),
(4, 'PRODUCTION', 'production', '<p>PRODUCTION<br></p>', '', '4', '', 'dhawy', 'Kamis', '2022-04-07', '11:34:54', '', '', '0000-00-00', '00:00:00', 'publish', '0'),
(5, 'PURCHASING', 'purchasing', '<p>PURCHASING<br></p>', '', '5', '', 'dhawy', 'Kamis', '2022-04-07', '11:35:11', '', '', '0000-00-00', '00:00:00', 'publish', '0'),
(6, 'FINANCE & ACCOUNTING', 'finance--accounting', '<p>FINANCE &amp; ACCOUNTING<br></p>', '', '6', '', 'dhawy', 'Kamis', '2022-04-07', '11:35:31', '', '', '0000-00-00', '00:00:00', 'publish', '0'),
(7, 'RIQA', 'riqa', '<p>RIQA<br></p>', '', '7', '', 'dhawy', 'Kamis', '2022-04-07', '11:35:47', '', '', '0000-00-00', '00:00:00', 'publish', '0'),
(8, 'IT HELPDESK', 'it-helpdesk', '<p>IT HELPDESK<br></p>', '', '8', '', 'dhawy', 'Kamis', '2022-04-07', '11:36:01', '', '', '0000-00-00', '00:00:00', 'publish', '0'),
(9, 'SALES', 'sales', '<p>SALES<br></p>', '', '9', '', 'dhawy', 'Kamis', '2022-04-07', '11:36:15', '', '', '0000-00-00', '00:00:00', 'publish', '0');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_status`
--

CREATE TABLE `dokumen_status` (
  `id` char(4) NOT NULL,
  `description` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_status`
--

INSERT INTO `dokumen_status` (`id`, `description`) VALUES
('0', 'Rejected'),
('1', 'Draft'),
('2', 'Request Approve'),
('21', 'Verifying'),
('22', 'Verified'),
('3', 'Approved'),
('31', 'Mkt. Approved'),
('32', 'Fin. Approved'),
('33', 'Waho Received'),
('4', 'Disapprove'),
('MS2', 'Request Approve Send'),
('MS3', 'Approved Send'),
('MS5', 'Prep. Accept'),
('MS6', 'Full Accepted'),
('P0', 'Closed'),
('P1', 'Open'),
('P3', 'Complete'),
('TS1', 'Loading'),
('TS2', 'On Delivery'),
('TS3', 'Unloading'),
('WP0', 'Null'),
('WPB', 'Breeding'),
('WPF', 'Feeding'),
('WPQ', 'Quarantine');

-- --------------------------------------------------------

--
-- Table structure for table `finance_cash`
--

CREATE TABLE `finance_cash` (
  `finance_cash_id` int(200) NOT NULL,
  `finance_cash_session` varchar(255) NOT NULL,
  `finance_cash_no` varchar(200) NOT NULL,
  `finance_cash_deskripsi` text NOT NULL,
  `finance_cash_currency` varchar(5) NOT NULL,
  `finance_cash_nik` varchar(50) NOT NULL,
  `finance_cash_nama` varchar(200) NOT NULL,
  `finance_cash_coa` varchar(15) NOT NULL,
  `finance_cash_status` varchar(3) NOT NULL,
  `finance_cash_block` varchar(3) NOT NULL,
  `finance_cash_bizacc` varchar(10) NOT NULL,
  `finance_cash_post_oleh` varchar(50) NOT NULL,
  `finance_cash_post_hari` varchar(20) NOT NULL,
  `finance_cash_post_tanggal` date NOT NULL,
  `finance_cash_post_jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_cash`
--

INSERT INTO `finance_cash` (`finance_cash_id`, `finance_cash_session`, `finance_cash_no`, `finance_cash_deskripsi`, `finance_cash_currency`, `finance_cash_nik`, `finance_cash_nama`, `finance_cash_coa`, `finance_cash_status`, `finance_cash_block`, `finance_cash_bizacc`, `finance_cash_post_oleh`, `finance_cash_post_hari`, `finance_cash_post_tanggal`, `finance_cash_post_jam`) VALUES
(18, '337d34020033e1ebc57cf70861c035a0', 'CH1', 'Deskripsi', 'USD', '3333', 'dhaw', '', '21', 'Yes', '111', '39', 'Kamis', '2022-04-07', '10:38:51'),
(19, '8008db00df434cde88174acf00f9c8b4', 'CH1', 'Deskripsi CH1', 'USD', '12313', 'ddawww', '', '21', 'Yes', '112', '39', 'Kamis', '2022-04-07', '11:20:34'),
(20, '2312b0716033bee62ffe1bbde91263c3', 'CH2', 'Desk Ch24', 'USD', '34444', 'dhaw22', '', '21', 'Yes', '112', '39', 'Kamis', '2022-04-07', '13:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_website` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `meta_deskripsi` varchar(250) DEFAULT NULL,
  `meta_keyword` varchar(250) DEFAULT NULL,
  `favicon` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mini_logo` varchar(200) NOT NULL,
  `seo` text DEFAULT NULL,
  `analytics` varchar(100) NOT NULL,
  `pixel` varchar(150) NOT NULL,
  `maps` text DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `instagram`, `whatsapp`, `youtube`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `logo`, `mini_logo`, `seo`, `analytics`, `pixel`, `maps`, `slogan`, `alamat`, `foto`) VALUES
(1, 'ERP Beta', 'info@erpbeta.com', 'https://erpbeta.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', '62888888888', 'https://www.youtube.com/', '888888888', '', '', 'logo_2021-03.png', 'logo.jpg', '', 'uggZWt61ufwlrt29-IEusMQmCsQ87q8xTON7p_MJbMo', 'G-Y47SKRX3TV', '', '', '', 'Jakarta, Indonesia', '');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `log_activity_id` int(200) NOT NULL,
  `log_activity_modul` varchar(200) NOT NULL,
  `log_activity_bizacc` varchar(50) NOT NULL,
  `log_activity_document_no` varchar(50) NOT NULL,
  `log_activity_desk` varchar(50) NOT NULL,
  `log_activity_user_id` int(200) NOT NULL,
  `log_activity_status` varchar(200) NOT NULL,
  `log_activity_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_activity_platform` varchar(200) NOT NULL,
  `log_activity_ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`log_activity_id`, `log_activity_modul`, `log_activity_bizacc`, `log_activity_document_no`, `log_activity_desk`, `log_activity_user_id`, `log_activity_status`, `log_activity_waktu`, `log_activity_platform`, `log_activity_ip`) VALUES
(1, 'login', '', '', '', 6, 'login', '2022-01-19 06:08:09', 'Desktop Chrome 97.0.4692.71', '::1'),
(2, 'login', '', '', '', 6, 'login', '2022-01-19 06:18:57', 'Desktop Chrome 97.0.4692.71', '::1'),
(3, 'login', '', '', '', 6, 'login', '2022-01-19 06:21:20', 'Desktop Chrome 97.0.4692.71', '::1'),
(4, 'login', '', '', '', 6, 'login', '2022-01-19 06:27:58', 'Desktop Chrome 97.0.4692.71', '::1'),
(5, 'login', '', '', '', 6, 'login', '2022-01-19 08:01:03', 'Desktop Chrome 97.0.4692.71', '::1'),
(6, 'login', '', '', '', 30, 'login', '2022-01-19 08:01:19', 'Desktop Chrome 97.0.4692.71', '::1'),
(7, 'login', '', '', '', 6, 'login', '2022-01-26 09:28:36', 'Desktop Chrome 97.0.4692.99', '::1'),
(8, 'login', '', '', '', 6, 'login', '2022-02-02 04:08:09', 'Desktop Chrome 97.0.4692.99', '::1'),
(9, 'login', '', '', '', 6, 'login', '2022-02-15 07:58:23', 'Desktop Chrome 98.0.4758.82', '::1'),
(10, 'Tambahkan', '', '', '', 6, 'Tambah Perusahaan', '2022-02-15 09:36:35', 'Desktop Chrome 98.0.4758.82', '::1'),
(11, 'Tambahkan', '', '', '', 6, 'Tambah Perusahaan', '2022-02-15 10:02:11', 'Desktop Chrome 98.0.4758.82', '::1'),
(12, 'login', '', '', '', 6, 'login', '2022-02-16 06:44:09', 'Desktop Chrome 98.0.4758.82', '::1'),
(13, 'Tambah Perusahaan', '', '', '', 6, 'TambahWMPP', '2022-02-16 06:50:42', 'Desktop Chrome 98.0.4758.82', '::1'),
(14, 'login', '', '', '', 6, 'login', '2022-02-16 09:20:16', 'Desktop Chrome 98.0.4758.82', '::1'),
(15, 'login', '', '', '', 6, 'login', '2022-02-17 07:05:18', 'Desktop Chrome 98.0.4758.102', '::1'),
(16, 'Update Perusahaan', '', '', '', 6, 'Update AAA234', '2022-02-17 07:29:44', 'Desktop Chrome 98.0.4758.102', '::1'),
(17, 'Update Perusahaan', '', '', '', 6, 'Update AAA234', '2022-02-17 07:31:16', 'Desktop Chrome 98.0.4758.102', '::1'),
(18, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 1', '2022-02-17 07:40:29', 'Desktop Chrome 98.0.4758.102', '::1'),
(19, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 1', '2022-02-17 07:41:39', 'Desktop Chrome 98.0.4758.102', '::1'),
(20, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 2', '2022-02-17 08:02:51', 'Desktop Chrome 98.0.4758.102', '::1'),
(21, 'Hapus Perusahaan', '', '', '', 6, 'Hapus widodo-makmur-', '2022-02-17 08:21:21', 'Desktop Chrome 98.0.4758.102', '::1'),
(22, 'Kembalikan Perusahaan', '', '', '', 6, 'Kembalikan widodo-ma', '2022-02-17 08:22:11', 'Desktop Chrome 98.0.4758.102', '::1'),
(23, 'Hapus Perusahaan', '', '', '', 6, 'Hapus widodo-makmur-', '2022-02-17 08:22:18', 'Desktop Chrome 98.0.4758.102', '::1'),
(24, 'Kembalikan Perusahaan', '', '', '', 6, 'Kembalikan widodo-makmur-perkasa', '2022-02-17 08:24:15', 'Desktop Chrome 98.0.4758.102', '::1'),
(25, 'Update Perusahaan', '', '', '', 6, 'Update 1', '2022-02-17 08:38:27', 'Desktop Chrome 98.0.4758.102', '::1'),
(26, 'Update Perusahaan', '', '', '', 6, 'Update 2', '2022-02-17 08:38:37', 'Desktop Chrome 98.0.4758.102', '::1'),
(27, 'Update Perusahaan', '', '', '', 6, 'Update 2', '2022-02-17 09:33:47', 'Desktop Chrome 98.0.4758.102', '::1'),
(28, 'login', '', '', '', 6, 'login', '2022-03-01 04:06:32', 'Desktop Chrome 98.0.4758.102', '::1'),
(29, 'Update Perusahaan', '', '', '', 6, 'Update 2', '2022-03-01 04:08:03', 'Desktop Chrome 98.0.4758.102', '::1'),
(30, 'Update Perusahaan', '', '', '', 6, 'Update 2', '2022-03-01 04:08:40', 'Desktop Chrome 98.0.4758.102', '::1'),
(31, 'Hapus Perusahaan', '', '', '', 6, 'Hapus widodo-makmur-perkasa', '2022-03-01 07:19:10', 'Desktop Chrome 98.0.4758.102', '::1'),
(32, 'Hapus Perusahaan', '', '', '', 6, 'Hapus widodo-makmur-sejahtera', '2022-03-01 07:19:12', 'Desktop Chrome 98.0.4758.102', '::1'),
(33, 'Kembalikan Perusahaan', '', '', '', 6, 'Kembalikan widodo-makmur-perkasa', '2022-03-01 07:22:30', 'Desktop Chrome 98.0.4758.102', '::1'),
(34, 'Update Perusahaan', '', '', '', 6, 'Update 1', '2022-03-01 07:22:45', 'Desktop Chrome 98.0.4758.102', '::1'),
(35, 'Update Perusahaan', '', '', '', 6, 'Update 1', '2022-03-01 08:23:45', 'Desktop Chrome 98.0.4758.102', '::1'),
(36, 'Tambah Perusahaan', '', '', '', 6, 'Tambah ', '2022-03-01 09:13:33', 'Desktop Chrome 98.0.4758.102', '::1'),
(37, 'login', '', '', '', 6, 'login', '2022-03-02 06:28:26', 'Desktop Chrome 98.0.4758.102', '::1'),
(38, 'Update Perusahaan', '', '', '', 6, 'Update 12', '2022-03-02 06:29:55', 'Desktop Chrome 98.0.4758.102', '::1'),
(39, 'Update Perusahaan', '', '', '', 6, 'Update 1', '2022-03-02 06:30:00', 'Desktop Chrome 98.0.4758.102', '::1'),
(40, 'Update Perusahaan', '', '', '', 6, 'Update 11', '2022-03-02 06:32:16', 'Desktop Chrome 98.0.4758.102', '::1'),
(41, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 111', '2022-03-02 06:33:56', 'Desktop Chrome 98.0.4758.102', '::1'),
(42, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 112', '2022-03-02 06:34:28', 'Desktop Chrome 98.0.4758.102', '::1'),
(43, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 12', '2022-03-02 06:35:08', 'Desktop Chrome 98.0.4758.102', '::1'),
(44, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 121', '2022-03-02 06:35:55', 'Desktop Chrome 98.0.4758.102', '::1'),
(45, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 122', '2022-03-02 06:36:24', 'Desktop Chrome 98.0.4758.102', '::1'),
(46, 'login', '', '', '', 6, 'login', '2022-03-07 05:05:19', 'Desktop Chrome 98.0.4758.102', '::1'),
(47, 'login', '', '', '', 33, 'login', '2022-03-07 05:12:16', 'Desktop Chrome 98.0.4758.102', '::1'),
(48, 'login', '', '', '', 6, 'login', '2022-03-07 08:34:00', 'Desktop Chrome 98.0.4758.102', '::1'),
(49, 'login', '', '', '', 30, 'login', '2022-03-07 09:11:50', 'Desktop Chrome 98.0.4758.102', '::1'),
(50, 'Tambah Perusahaan', '', '', '', 30, 'Tambah 1223131', '2022-03-07 09:33:28', 'Desktop Chrome 98.0.4758.102', '::1'),
(51, 'Hapus Perusahaan', '', '', '', 30, 'Hapus tesss', '2022-03-07 09:37:04', 'Desktop Chrome 98.0.4758.102', '::1'),
(52, 'Kembalikan Perusahaan', '', '', '', 30, 'Kembalikan tesss', '2022-03-07 09:43:45', 'Desktop Chrome 98.0.4758.102', '::1'),
(53, 'Blok Perusahaan', '', '', '', 30, 'Blok tesss', '2022-03-07 09:45:27', 'Desktop Chrome 98.0.4758.102', '::1'),
(54, 'login', '', '', '', 6, 'login', '2022-03-08 03:51:28', 'Desktop Chrome 98.0.4758.102', '::1'),
(55, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 123', '2022-03-08 04:21:25', 'Desktop Chrome 98.0.4758.102', '::1'),
(56, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 13', '2022-03-08 04:22:25', 'Desktop Chrome 98.0.4758.102', '::1'),
(57, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 131', '2022-03-08 04:23:36', 'Desktop Chrome 98.0.4758.102', '::1'),
(58, 'Update Perusahaan', '', '', '', 6, 'Update 131', '2022-03-08 04:23:51', 'Desktop Chrome 98.0.4758.102', '::1'),
(59, 'Update Perusahaan', '', '', '', 6, 'Update 131', '2022-03-08 04:24:03', 'Desktop Chrome 98.0.4758.102', '::1'),
(60, 'Tambah Perusahaan', '', '', '', 6, 'Tambah 132', '2022-03-08 04:24:45', 'Desktop Chrome 98.0.4758.102', '::1'),
(61, 'login', '', '', '', 30, 'login', '2022-03-08 04:39:34', 'Desktop Chrome 98.0.4758.102', '::1'),
(62, 'Update Perusahaan', '', '', '', 6, 'Update 11', '2022-03-08 08:54:29', 'Desktop Chrome 98.0.4758.102', '::1'),
(63, 'login', '', '', '', 6, 'login', '2022-03-09 04:15:04', 'Desktop Chrome 98.0.4758.102', '::1'),
(64, 'Tambah User', '', '', '', 6, 'Tambah admin', '2022-03-09 04:21:07', 'Desktop Chrome 98.0.4758.102', '::1'),
(65, 'login', '', '', '', 6, 'login', '2022-03-10 04:25:00', 'Desktop Chrome 99.0.4844.51', '::1'),
(66, 'login', '', '', '', 6, 'login', '2022-03-15 06:01:53', 'Desktop Chrome 99.0.4844.51', '::1'),
(67, 'login', '', '', '', 39, 'login', '2022-03-15 07:53:45', 'Desktop Chrome 99.0.4844.51', '::1'),
(68, 'login', '', '', '', 39, 'login', '2022-03-15 08:14:14', 'Desktop Chrome 99.0.4844.51', '::1'),
(69, 'Blok Perusahaan', '', '', '', 39, 'Blok wmp', '2022-03-15 08:32:11', 'Desktop Chrome 99.0.4844.51', '::1'),
(70, 'Kembalikan Perusahaan', '', '', '', 39, 'Kembalikan wmp', '2022-03-15 08:32:19', 'Desktop Chrome 99.0.4844.51', '::1'),
(71, 'Blok Perusahaan', '', '', '', 39, 'Blok 1', '2022-03-15 08:51:30', 'Desktop Chrome 99.0.4844.51', '::1'),
(72, 'Blok Perusahaan', '', '', '', 39, 'Blok 1', '2022-03-15 08:54:58', 'Desktop Chrome 99.0.4844.51', '::1'),
(73, 'Kembalikan Perusahaan', '', '', '', 39, 'Kembalikan wmp', '2022-03-15 08:55:02', 'Desktop Chrome 99.0.4844.51', '::1'),
(74, 'login', '', '', '', 33, 'login', '2022-03-15 09:03:53', 'Desktop Chrome 99.0.4844.51', '::1'),
(75, 'login', '', '', '', 39, 'login', '2022-03-16 03:50:19', 'Desktop Chrome 99.0.4844.51', '::1'),
(76, 'Update Perusahaan', '', '', '', 39, 'Update 1', '2022-03-16 04:25:36', 'Desktop Chrome 99.0.4844.51', '::1'),
(77, 'Update Perusahaan', '', '', '', 39, 'Update 11', '2022-03-16 04:25:51', 'Desktop Chrome 99.0.4844.51', '::1'),
(78, 'Update Perusahaan', '', '', '', 39, 'Update 111', '2022-03-16 04:26:05', 'Desktop Chrome 99.0.4844.51', '::1'),
(79, 'Update Perusahaan', '', '', '', 39, 'Update 112', '2022-03-16 04:26:16', 'Desktop Chrome 99.0.4844.51', '::1'),
(80, 'Update Perusahaan', '', '', '', 39, 'Update 12', '2022-03-16 04:26:29', 'Desktop Chrome 99.0.4844.51', '::1'),
(81, 'Update Perusahaan', '', '', '', 39, 'Update 121', '2022-03-16 04:26:38', 'Desktop Chrome 99.0.4844.51', '::1'),
(82, 'Update Perusahaan', '', '', '', 39, 'Update 122', '2022-03-16 04:26:49', 'Desktop Chrome 99.0.4844.51', '::1'),
(83, 'Update Perusahaan', '', '', '', 39, 'Update 123', '2022-03-16 04:27:14', 'Desktop Chrome 99.0.4844.51', '::1'),
(84, 'Update Perusahaan', '', '', '', 39, 'Update 13', '2022-03-16 04:27:24', 'Desktop Chrome 99.0.4844.51', '::1'),
(85, 'Update Perusahaan', '', '', '', 39, 'Update 131', '2022-03-16 04:27:33', 'Desktop Chrome 99.0.4844.51', '::1'),
(86, 'Update Perusahaan', '', '', '', 39, 'Update 132', '2022-03-16 04:27:45', 'Desktop Chrome 99.0.4844.51', '::1'),
(87, 'login', '', '', '', 6, 'login', '2022-03-16 04:39:20', 'Desktop Chrome 99.0.4844.51', '::1'),
(88, 'login', '', '', '', 39, 'login', '2022-03-16 04:44:40', 'Desktop Chrome 99.0.4844.51', '::1'),
(89, 'login', '', '', '', 39, 'login', '2022-03-16 06:28:53', 'Desktop Chrome 99.0.4844.51', '::1'),
(90, 'login', '', '', '', 39, 'login', '2022-03-16 07:03:26', 'Desktop Chrome 99.0.4844.51', '::1'),
(91, 'login', '', '', '', 39, 'login', '2022-03-16 08:10:35', 'Desktop Chrome 99.0.4844.51', '::1'),
(92, 'login', '', '', '', 39, 'login', '2022-03-16 08:45:35', 'Desktop Chrome 99.0.4844.51', '::1'),
(93, 'Update Perusahaan', '', '', '', 6, 'Update 111', '2022-03-16 08:47:24', 'Desktop Chrome 99.0.4844.51', '::1'),
(94, 'login', '', '', '', 39, 'login', '2022-03-16 08:50:41', 'Desktop Chrome 99.0.4844.51', '::1'),
(95, 'login', '', '', '', 39, 'login', '2022-03-17 03:04:38', 'Desktop Chrome 99.0.4844.51', '::1'),
(96, 'login', '', '', '', 6, 'login', '2022-03-17 04:18:57', 'Desktop Chrome 99.0.4844.51', '::1'),
(97, 'Update Perusahaan', '', '', '', 6, 'Update 112', '2022-03-17 05:27:00', 'Desktop Chrome 99.0.4844.51', '::1'),
(98, 'login', '', '', '', 6, 'login', '2022-03-17 06:33:56', 'Desktop Chrome 99.0.4844.51', '::1'),
(99, 'login', '', '', '', 39, 'login', '2022-03-17 06:34:21', 'Desktop Chrome 99.0.4844.51', '::1'),
(100, 'login', '', '', '', 6, 'login', '2022-03-17 06:40:28', 'Desktop Chrome 99.0.4844.51', '::1'),
(101, 'Update Perusahaan', '', '', '', 6, 'Update 11', '2022-03-17 09:23:13', 'Desktop Chrome 99.0.4844.51', '::1'),
(102, 'Update Perusahaan', '', '', '', 6, 'Update 11', '2022-03-17 09:23:23', 'Desktop Chrome 99.0.4844.51', '::1'),
(103, 'login', '', '', '', 6, 'login', '2022-03-21 06:34:12', 'Desktop Chrome 99.0.4844.74', '::1'),
(104, 'login', '', '', '', 6, 'login', '2022-03-21 06:34:48', 'Desktop Chrome 99.0.4844.74', '::1'),
(105, 'login', '', '', '', 39, 'login', '2022-03-21 06:35:48', 'Desktop Chrome 99.0.4844.74', '::1'),
(106, 'login', '', '', '', 6, 'login', '2022-03-21 06:37:33', 'Desktop Chrome 99.0.4844.74', '::1'),
(107, 'login', '', '', '', 39, 'login', '2022-03-21 06:55:26', 'Desktop Chrome 99.0.4844.74', '::1'),
(108, 'login', '', '', '', 6, 'login', '2022-03-21 07:27:31', 'Desktop Chrome 99.0.4844.74', '::1'),
(109, 'Update Perusahaan', '', '', '', 39, 'Update 112', '2022-03-21 07:33:52', 'Desktop Chrome 99.0.4844.74', '::1'),
(110, 'login', '', '', '', 39, 'login', '2022-03-22 04:15:55', 'Desktop Chrome 99.0.4844.74', '::1'),
(111, 'login', '', '', '', 6, 'login', '2022-03-22 04:16:01', 'Desktop Chrome 99.0.4844.74', '::1'),
(112, 'login', '', '', '', 39, 'login', '2022-03-22 04:28:08', 'Desktop Chrome 99.0.4844.74', '::1'),
(113, 'login', '', '', '', 39, 'login', '2022-03-22 06:05:36', 'Desktop Chrome 99.0.4844.74', '::1'),
(114, 'login', '', '', '', 39, 'login', '2022-03-22 07:29:24', 'Desktop Chrome 99.0.4844.74', '::1'),
(115, 'login', '', '', '', 39, 'login', '2022-03-22 09:14:59', 'Desktop Chrome 99.0.4844.74', '::1'),
(116, 'login', '', '', '', 39, 'login', '2022-03-28 04:47:46', 'Desktop Chrome 99.0.4844.84', '::1'),
(117, 'login', '', '', '', 6, 'login', '2022-03-28 09:33:19', 'Desktop Chrome 99.0.4844.84', '::1'),
(118, 'login', '', '', '', 39, 'login', '2022-03-28 09:34:45', 'Desktop Chrome 99.0.4844.84', '::1'),
(119, 'login', '', '', '', 6, 'login', '2022-03-28 09:35:05', 'Desktop Chrome 99.0.4844.84', '::1'),
(120, 'login', '', '', '', 39, 'login', '2022-03-28 09:36:57', 'Desktop Chrome 99.0.4844.84', '::1'),
(121, 'login', '', '', '', 39, 'login', '2022-03-28 09:42:48', 'Desktop Chrome 99.0.4844.84', '::1'),
(122, 'login', '', '', '', 39, 'login', '2022-03-28 09:44:10', 'Desktop Chrome 99.0.4844.84', '::1'),
(123, 'login', '', '', '', 39, 'login', '2022-03-28 10:16:32', 'Desktop Chrome 99.0.4844.84', '::1'),
(124, 'login', '', '', '', 39, 'login', '2022-03-28 10:17:12', 'Desktop Chrome 99.0.4844.84', '::1'),
(125, 'login', '', '', '', 39, 'login', '2022-03-28 10:17:47', 'Desktop Chrome 99.0.4844.84', '::1'),
(126, 'login', '', '', '', 6, 'login', '2022-03-29 03:27:10', 'Desktop Chrome 99.0.4844.84', '::1'),
(127, 'login', '', '', '', 39, 'login', '2022-03-29 03:32:06', 'Desktop Chrome 99.0.4844.84', '::1'),
(128, 'login', '', '', '', 39, 'login', '2022-03-30 02:59:22', 'Desktop Chrome 99.0.4844.84', '::1'),
(129, 'login', '', '', '', 39, 'login', '2022-03-30 07:14:49', 'Desktop Chrome 99.0.4844.84', '::1'),
(130, 'login', '', '', '', 6, 'login', '2022-03-30 09:37:18', 'Desktop Chrome 99.0.4844.84', '::1'),
(131, 'login', '', '', '', 39, 'login', '2022-03-31 03:19:11', 'Desktop Chrome 99.0.4844.84', '::1'),
(132, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 03:48:40', 'Desktop Chrome 99.0.4844.84', '::1'),
(133, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 03:49:51', 'Desktop Chrome 99.0.4844.84', '::1'),
(134, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 03:52:04', 'Desktop Chrome 99.0.4844.84', '::1'),
(135, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 03:53:01', 'Desktop Chrome 99.0.4844.84', '::1'),
(136, 'login', '', '', '', 6, 'login', '2022-03-31 03:55:55', 'Desktop Chrome 99.0.4844.84', '::1'),
(137, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 04:22:01', 'Desktop Chrome 99.0.4844.84', '::1'),
(138, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 04:35:49', 'Desktop Chrome 99.0.4844.84', '::1'),
(139, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 04:41:20', 'Desktop Chrome 99.0.4844.84', '::1'),
(140, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 04:42:31', 'Desktop Chrome 99.0.4844.84', '::1'),
(141, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 08:08:25', 'Desktop Chrome 99.0.4844.84', '::1'),
(142, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 08:30:51', 'Desktop Chrome 99.0.4844.84', '::1'),
(143, 'Add Cash', '', '', '', 39, 'Add ', '2022-03-31 08:31:14', 'Desktop Chrome 99.0.4844.84', '::1'),
(144, 'login', '', '', '', 6, 'login', '2022-03-31 09:19:39', 'Desktop Chrome 99.0.4844.84', '::1'),
(145, 'login', '', '', '', 6, 'login', '2022-04-06 03:15:37', 'Desktop Chrome 99.0.4844.84', '::1'),
(146, 'login', '', '', '', 39, 'login', '2022-04-06 03:15:59', 'Desktop Chrome 99.0.4844.84', '::1'),
(147, 'login', '', '', '', 39, 'login', '2022-04-06 06:57:29', 'Desktop Chrome 99.0.4844.84', '::1'),
(148, 'Cash', '111', 'CH1', '', 39, 'Verifiying ', '2022-04-07 03:38:43', 'Desktop Chrome 100.0.4896.75', '::1'),
(149, 'Cash', '111', 'CH1', '', 39, 'Modified ', '2022-04-07 03:38:51', 'Desktop Chrome 100.0.4896.75', '::1'),
(150, 'login', '', '', '', 6, 'login', '2022-04-07 03:45:40', 'Desktop Chrome 100.0.4896.75', '::1'),
(151, 'login', '', '', '', 39, 'login', '2022-04-07 03:55:43', 'Desktop Chrome 100.0.4896.75', '::1'),
(152, 'login', '', '', '', 6, 'login', '2022-04-07 03:56:16', 'Desktop Chrome 100.0.4896.75', '::1'),
(153, 'login', '', '', '', 39, 'login', '2022-04-07 03:56:43', 'Desktop Chrome 100.0.4896.75', '::1'),
(154, 'Cash', '112', 'CH1', '', 39, 'Verifiying ', '2022-04-07 04:20:34', 'Desktop Chrome 100.0.4896.75', '::1'),
(155, 'login', '', '', '', 6, 'login', '2022-04-07 04:27:28', 'Desktop Chrome 100.0.4896.75', '::1'),
(156, 'Tambah User', '', '', '', 6, 'Tambah direktur', '2022-04-07 04:38:38', 'Desktop Chrome 100.0.4896.75', '::1'),
(157, 'login', '', '', '', 40, 'login', '2022-04-07 04:39:12', 'Desktop Chrome 100.0.4896.75', '::1'),
(158, 'login', '', '', '', 39, 'login', '2022-04-07 04:39:35', 'Desktop Chrome 100.0.4896.75', '::1'),
(159, 'login', '', '', '', 40, 'login', '2022-04-07 04:42:11', 'Desktop Chrome 100.0.4896.75', '::1'),
(160, 'Update Perusahaan', '', '', '', 6, 'Update 122', '2022-04-07 04:42:41', 'Desktop Chrome 100.0.4896.75', '::1'),
(161, 'login', '', '', '', 40, 'login', '2022-04-07 04:43:50', 'Desktop Chrome 100.0.4896.75', '::1'),
(162, 'login', '', '', '', 40, 'login', '2022-04-07 05:19:00', 'Desktop Chrome 100.0.4896.75', '::1'),
(163, 'login', '', '', '', 6, 'login', '2022-04-07 05:19:10', 'Desktop Chrome 100.0.4896.75', '::1'),
(164, 'login', '', '', '', 39, 'login', '2022-04-07 05:47:38', 'Desktop Chrome 100.0.4896.75', '::1'),
(165, 'Cash', '112', 'CH2', '', 39, 'Verifiying ', '2022-04-07 06:46:44', 'Desktop Chrome 100.0.4896.75', '::1'),
(166, 'Cash', '112', 'CH2', '', 39, 'Modified ', '2022-04-07 06:48:54', 'Desktop Chrome 100.0.4896.75', '::1'),
(167, 'login', '', '', '', 6, 'login', '2022-04-07 07:54:16', 'Desktop Chrome 100.0.4896.75', '::1'),
(168, 'login', '', '', '', 6, 'login', '2022-04-08 08:11:57', 'Desktop Chrome 100.0.4896.75', '::1'),
(169, 'login', '', '', '', 6, 'login', '2022-04-08 08:39:21', 'Desktop Chrome 100.0.4896.75', '::1'),
(170, 'login', '', '', '', 6, 'login', '2022-04-12 03:04:42', 'Desktop Chrome 100.0.4896.75', '::1'),
(171, 'login', '', '', '', 6, 'login', '2022-04-12 03:04:59', 'Desktop Chrome 100.0.4896.75', '::1'),
(172, 'login', '', '', '', 6, 'login', '2022-04-12 03:06:33', 'Desktop Chrome 100.0.4896.75', '::1'),
(173, 'login', '', '', '', 39, 'login', '2022-04-12 07:13:03', 'Desktop Chrome 100.0.4896.75', '::1'),
(174, 'login', '', '', '', 6, 'login', '2022-04-12 08:17:17', 'Desktop Chrome 100.0.4896.75', '::1'),
(175, 'login', '', '', '', 39, 'login', '2022-04-12 08:18:05', 'Desktop Chrome 100.0.4896.75', '::1'),
(176, 'login', '', '', '', 39, 'login', '2022-04-13 02:04:16', 'Desktop Chrome 100.0.4896.88', '::1'),
(177, 'login', '', '', '', 6, 'login', '2022-04-13 02:56:13', 'Desktop Chrome 100.0.4896.88', '::1'),
(178, 'login', '', '', '', 39, 'login', '2022-04-13 02:58:24', 'Desktop Chrome 100.0.4896.88', '::1'),
(179, 'login', '', '', '', 39, 'login', '2022-04-13 04:17:06', 'Desktop Chrome 100.0.4896.88', '::1'),
(180, 'login', '', '', '', 6, 'login', '2022-04-13 07:44:33', 'Desktop Chrome 100.0.4896.88', '::1'),
(181, 'login', '', '', '', 6, 'login', '2022-04-14 01:50:10', 'Desktop Chrome 100.0.4896.88', '::1'),
(182, 'login', '', '', '', 39, 'login', '2022-04-14 01:50:28', 'Desktop Chrome 100.0.4896.88', '::1'),
(183, 'login', '', '', '', 39, 'login', '2022-04-18 02:12:13', 'Desktop Chrome 100.0.4896.88', '::1'),
(184, 'login', '', '', '', 39, 'login', '2022-04-20 03:24:45', 'Desktop Chrome 100.0.4896.88', '::1'),
(185, 'Material', '111', 'FG10002', '', 39, 'Verifiying ', '2022-04-20 04:47:36', 'Desktop Chrome 100.0.4896.88', '::1'),
(186, 'Material', '111', 'RM10002', '', 39, 'Verifiying ', '2022-04-20 04:52:46', 'Desktop Chrome 100.0.4896.88', '::1'),
(187, 'Material', '111', 'FG10002', '', 39, 'Verifiying ', '2022-04-20 05:21:45', 'Desktop Chrome 100.0.4896.88', '::1'),
(188, 'Material', '111', 'PX10002', '', 39, 'Verifiying ', '2022-04-20 05:22:12', 'Desktop Chrome 100.0.4896.88', '::1'),
(189, 'Material', '111', 'FG10002', '', 39, 'Verifiying ', '2022-04-20 05:48:00', 'Desktop Chrome 100.0.4896.88', '::1'),
(190, 'Material', '111', 'CM10002', '', 39, 'Verifiying ', '2022-04-20 05:48:19', 'Desktop Chrome 100.0.4896.88', '::1'),
(191, 'Material', '111', 'CM', '', 39, 'Verifiying ', '2022-04-20 05:52:30', 'Desktop Chrome 100.0.4896.88', '::1'),
(192, 'Material', '111', 'CM10001', '', 39, 'Verifiying ', '2022-04-20 05:53:08', 'Desktop Chrome 100.0.4896.88', '::1'),
(193, 'Material', '111', 'PX10001', '', 39, 'Verifiying ', '2022-04-20 05:53:32', 'Desktop Chrome 100.0.4896.88', '::1'),
(194, 'Material', '111', 'RM', '', 39, 'Verifiying ', '2022-04-20 06:14:10', 'Desktop Chrome 100.0.4896.88', '::1'),
(195, 'Material', '111', 'SP222', '', 39, 'Verifiying ', '2022-04-20 06:16:24', 'Desktop Chrome 100.0.4896.88', '::1'),
(196, 'Material', '111', 'WQE', '', 39, 'Verifiying ', '2022-04-20 06:18:41', 'Desktop Chrome 100.0.4896.88', '::1'),
(197, 'Material', '111', 'SP2', '', 39, 'Verifiying ', '2022-04-20 06:18:54', 'Desktop Chrome 100.0.4896.88', '::1'),
(198, 'Material', '111', 'SP', '', 39, 'Verifiying ', '2022-04-20 06:23:00', 'Desktop Chrome 100.0.4896.88', '::1'),
(199, 'Material', '111', 'SP', '', 39, 'Verifiying ', '2022-04-20 06:24:14', 'Desktop Chrome 100.0.4896.88', '::1'),
(200, 'Material', '111', 'PX', '', 39, 'Verifiying ', '2022-04-20 06:24:37', 'Desktop Chrome 100.0.4896.88', '::1'),
(201, 'Material', '111', 'FA', '', 39, 'Verifiying ', '2022-04-20 06:24:57', 'Desktop Chrome 100.0.4896.88', '::1'),
(202, 'Material', '111', 'CM', '', 39, 'Verifiying ', '2022-04-20 06:27:34', 'Desktop Chrome 100.0.4896.88', '::1'),
(203, 'Material', '111', 'FG', '', 39, 'Verifiying ', '2022-04-20 06:30:59', 'Desktop Chrome 100.0.4896.88', '::1'),
(204, 'Material', '111', 'CM0003', '', 39, 'Verifiying ', '2022-04-20 06:44:36', 'Desktop Chrome 100.0.4896.88', '::1'),
(205, 'Material', '111', 'FA0001', '', 39, 'Verifiying ', '2022-04-20 06:44:58', 'Desktop Chrome 100.0.4896.88', '::1'),
(206, 'login', '', '', '', 6, 'login', '2022-04-27 03:23:49', 'Desktop Chrome 100.0.4896.127', '::1'),
(207, 'login', '', '', '', 6, 'login', '2022-05-25 04:28:15', 'Desktop Chrome 101.0.4951.67', '::1'),
(208, 'login', '', '', '', 6, 'login', '2022-05-25 04:28:34', 'Desktop Chrome 101.0.4951.67', '::1'),
(209, 'login', '', '', '', 39, 'login', '2022-05-25 04:28:56', 'Desktop Chrome 101.0.4951.67', '::1'),
(210, 'login', '', '', '', 6, 'login', '2022-05-29 01:30:37', 'Desktop Chrome 101.0.4951.67', '::1'),
(211, 'login', '', '', '', 39, 'login', '2022-05-29 01:33:26', 'Desktop Chrome 101.0.4951.67', '::1'),
(212, 'login', '', '', '', 6, 'login', '2022-06-13 15:15:49', 'Desktop Chrome 102.0.5005.63', '::1'),
(213, 'login', '', '', '', 6, 'login', '2022-06-13 15:18:38', 'Desktop Chrome 102.0.5005.63', '::1'),
(214, 'login', '', '', '', 39, 'login', '2022-06-13 15:18:57', 'Desktop Chrome 102.0.5005.63', '::1'),
(215, 'login', '', '', '', 6, 'login', '2022-06-14 06:34:58', 'Desktop Chrome 102.0.5005.63', '::1'),
(216, 'login', '', '', '', 6, 'login', '2022-08-02 00:31:13', 'Desktop Chrome 103.0.0.0', '::1'),
(217, 'login', '', '', '', 6, 'login', '2022-08-02 04:19:52', 'Desktop Chrome 103.0.0.0', '::1'),
(218, 'login', '', '', '', 6, 'login', '2022-08-02 07:11:02', 'Desktop Chrome 103.0.0.0', '::1'),
(219, 'login', '', '', '', 39, 'login', '2022-08-02 07:11:44', 'Desktop Chrome 103.0.0.0', '::1'),
(220, 'login', '', '', '', 6, 'login', '2022-08-03 08:07:30', 'Desktop Chrome 103.0.0.0', '::1'),
(221, 'login', '', '', '', 6, 'login', '2022-08-03 08:07:58', 'Desktop Chrome 103.0.0.0', '::1'),
(222, 'login', '', '', '', 39, 'login', '2022-08-03 08:08:18', 'Desktop Chrome 103.0.0.0', '::1'),
(223, 'login', '', '', '', 6, 'login', '2022-08-04 03:07:00', 'Desktop Chrome 104.0.0.0', '::1'),
(224, 'login', '', '', '', 39, 'login', '2022-08-04 08:07:21', 'Desktop Chrome 104.0.0.0', '::1'),
(225, 'login', '', '', '', 6, 'login', '2022-08-04 09:30:27', 'Desktop Chrome 104.0.0.0', '::1'),
(226, 'login', '', '', '', 30, 'login', '2022-08-04 09:32:22', 'Desktop Chrome 104.0.0.0', '::1'),
(227, 'login', '', '', '', 6, 'login', '2022-08-08 04:22:10', 'Desktop Chrome 104.0.0.0', '::1'),
(228, 'login', '', '', '', 30, 'login', '2022-08-08 04:22:55', 'Desktop Chrome 104.0.0.0', '::1'),
(229, 'login', '', '', '', 6, 'login', '2022-08-09 03:00:15', 'Desktop Chrome 104.0.0.0', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `material_list`
--

CREATE TABLE `material_list` (
  `material_list_id` int(200) NOT NULL,
  `material_list_session` varchar(255) NOT NULL,
  `material_list_no` varchar(200) NOT NULL,
  `material_list_deskripsi` text NOT NULL,
  `material_list_unit` varchar(5) NOT NULL,
  `material_list_status` varchar(3) NOT NULL,
  `material_list_block` varchar(3) NOT NULL,
  `material_list_bizacc` varchar(10) NOT NULL,
  `material_list_post_oleh` varchar(50) NOT NULL,
  `material_list_post_hari` varchar(20) NOT NULL,
  `material_list_post_tanggal` date NOT NULL,
  `material_list_post_jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_list`
--

INSERT INTO `material_list` (`material_list_id`, `material_list_session`, `material_list_no`, `material_list_deskripsi`, `material_list_unit`, `material_list_status`, `material_list_block`, `material_list_bizacc`, `material_list_post_oleh`, `material_list_post_hari`, `material_list_post_tanggal`, `material_list_post_jam`) VALUES
(1, 'eeaa8ee1bbb2da30de0786fabadd11b9', 'CM', 'tesss', 'KG', '21', 'Yes', '111', '39', 'Rabu', '2022-04-20', '13:27:34'),
(2, '0cb5e1b5d147d589a3e05fd1289b3763', 'FG', 'dddd', 'KG', '21', 'Yes', '111', '39', 'Rabu', '2022-04-20', '13:30:59'),
(3, 'bd33144d243b023d7f3e80a63542654c', 'CM0003', 'agqw', 'KG', '21', 'Yes', '111', '39', 'Rabu', '2022-04-20', '13:44:36'),
(4, '44375d36c17db70c5e495e2cf78c7c3b', 'FA0001', 'asdd', 'KG', '21', 'Yes', '111', '39', 'Rabu', '2022-04-20', '13:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `paste_finance_bank`
--

CREATE TABLE `paste_finance_bank` (
  `no` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `description` char(50) NOT NULL,
  `account` char(35) NOT NULL,
  `name` char(50) NOT NULL,
  `address` char(200) NOT NULL,
  `city` char(50) NOT NULL,
  `currency` char(3) NOT NULL,
  `coa_bank` char(15) NOT NULL,
  `status_id` char(3) NOT NULL,
  `blocked` char(3) NOT NULL,
  `create_user` char(35) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_user` char(35) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paste_finance_bank`
--

INSERT INTO `paste_finance_bank` (`no`, `id`, `description`, `account`, `name`, `address`, `city`, `currency`, `coa_bank`, `status_id`, `blocked`, `create_user`, `create_date`, `modified_user`, `modified_date`) VALUES
(1, 'B-00001', 'BCA - 6280600600', '6280600600', 'PT BANK CENTRAL ASIA TBK', '-', '-', 'IDR', '1102001001', '22', 'No', 'jamaludin', '2021-05-23 14:04:01', 'jamaludin', '2022-03-10 14:02:01'),
(2, 'B-00002', 'BCA - 6281235858', '6281235858', 'PT BANK CENTRAL ASIA TBK', '-', '-', 'IDR', '1102001002', '22', 'No', 'jamaludin', '2021-12-29 01:19:40', 'jamaludin', '2022-03-10 14:02:17'),
(3, 'B-00003', 'BCA - 6280715725', '6280715725', 'PT BANK CENTRAL ASIA TBK', '-', '-', 'IDR', '1102001003', '22', 'No', 'jamaludin.2', '2022-03-09 14:34:31', 'jamaludin', '2022-03-10 14:02:41'),
(4, 'B-00004', 'BRI - 00000361-01-000248-30-9', '00000361-01-000248-30-9', 'PT BANK RAKYAT INDONESIA (PERSERO) TBK', '-', '-', 'IDR', '1102002001', '22', 'No', 'jamaludin.2', '2022-03-09 15:07:42', 'jamaludin.2', '2022-03-09 16:23:11'),
(5, 'B-00005', 'BRI - 00000422-01-000358-30-8', '00000422-01-000358-30-8', 'PT BANK RAKYAT INDONESIA (PERSERO) TBK', '-', '-', 'IDR', '1102002002', '22', 'No', 'jamaludin.2', '2022-03-09 15:22:40', 'jamaludin.2', '2022-03-09 16:29:11'),
(6, 'B-00006', 'BNI - 388659585', '388659585', 'PT BANK NEGARA INDONESIA (PERSERO) TBK', '-', '-', 'IDR', '1102003001', '22', 'No', 'jamaludin.2', '2022-03-09 15:24:36', 'jamaludin.2', '2022-03-09 16:47:01'),
(7, 'B-00007', 'MANDIRI - 129.00.4777788.9', '129.00.4777788.9', 'PT BANK MANDIRI (PERSERO) TBK', '-', '-', 'IDR', '1102004001', '22', 'No', 'jamaludin.2', '2022-03-09 15:25:28', 'jamaludin.2', '2022-03-09 16:54:05'),
(8, 'B-00008', 'MANDIRI - 129.00.1015485.7', '129.00.1015485.7', 'PT BANK MANDIRI (PERSERO) TBK', '-', '-', 'IDR', '1102004002', '22', 'No', 'jamaludin.2', '2022-03-09 15:26:02', 'jamaludin.2', '2022-03-09 16:54:19'),
(9, 'B-00009', 'MANDIRI BISNIS', '-', 'PT BANK MANDIRI (PERSERO) TBK', '-', '-', 'IDR', '1102004003', '22', 'No', 'jamaludin.2', '2022-03-09 15:27:56', 'jamaludin.2', '2022-03-10 14:27:01'),
(10, 'B-00010', 'BSI - 1040592209', '1040592209', 'PT BANK SYARIAH INDONESIA TBK', '-', '-', 'IDR', '1102005001', '22', 'No', 'jamaludin.2', '2022-03-09 15:28:23', 'jamaludin.2', '2022-03-10 10:34:34'),
(11, 'B-00011', 'BSI - 1045910098', '1045910098', 'PT BANK SYARIAH INDONESIA TBK', '-', '-', 'IDR', '1102005002', '22', 'No', 'jamaludin.2', '2022-03-09 15:28:53', 'jamaludin.2', '2022-03-10 10:34:51'),
(12, 'B-00012', 'BSI', '-', 'PT BANK SYARIAH INDONESIA TBK', '-', '-', 'IDR', '1102005003', '22', 'No', 'jamaludin.2', '2022-03-09 15:29:28', 'jamaludin.2', '2022-03-10 14:27:19'),
(13, 'B-00013', 'PT BPD JAWA BARAT DAN BANTEN SYARIAH TBK - 0060102', '0060102', 'PT BPD JAWA BARAT DAN BANTEN SYARIAH TBK', '-', '-', 'IDR', '1102006001', '22', 'No', 'jamaludin.2', '2022-03-09 15:30:01', 'jamaludin.2', '2022-03-10 10:41:28'),
(14, 'B-00014', 'BANK WOORI SAUDARA - 200933016688', '200933016688', 'PT BANK WOORI SAUDARA INDONESIA 1906 TBK', '-', '-', 'IDR', '1102007001', '22', 'No', 'jamaludin.2', '2022-03-09 15:30:31', 'jamaludin', '2022-03-10 14:02:50'),
(15, 'B-00015', 'BANK WOORI SAUDARA - 200933016708', '200933016708', 'PT BANK WOORI SAUDARA INDONESIA 1906 TBK', '-', '-', 'IDR', '1102007002', '22', 'No', 'jamaludin.2', '2022-03-09 15:31:27', 'jamaludin', '2022-03-10 14:03:10'),
(16, 'B-00016', 'SINARMAS - 42177997', '42177997', 'PT BANK SINARMAS', '-', '-', 'IDR', '1102008001', '22', 'No', 'jamaludin.2', '2022-03-09 15:31:54', 'jamaludin', '2022-03-10 14:03:55'),
(17, 'B-00017', 'BNI USD - 389386739', '389386739', 'PT BANK NEGARA INDONESIA (PERSERO) TBK - USD', '-', '-', 'USD', '1102023001', '22', 'No', 'jamaludin.2', '2022-03-09 15:32:23', 'jamaludin', '2022-03-10 14:04:20'),
(18, 'B-00018', 'PT BANK WOORI SAUDARA INDONESIA 1906 TBK - USD', '200933016785', 'PT BANK WOORI SAUDARA INDONESIA 1906 TBK - USD', '-', '-', 'USD', '1102024001', '22', 'No', 'jamaludin.2', '2022-03-09 15:33:08', 'jamaludin', '2022-03-10 14:04:45'),
(19, 'B-00019', 'MANDIRI - 1240010154665', '1240010154665', 'PT BANK MANDIRI (PERSERO) TBK - USD', '-', '-', 'IDR', '1102027001', '22', 'Yes', 'jamaludin.2', '2022-03-09 15:33:36', 'jamaludin.2', '2022-03-11 11:45:50'),
(20, 'B-00020', 'BANK RAYA - 001001000503405', '001001000503405', 'PT BANK RAKYAT INDONESIA (PERSERO) TBK', '-', '-', 'IDR', '1102028001', '22', 'No', 'jamaludin.2', '2022-03-09 15:34:32', 'jamaludin', '2022-03-10 14:05:51'),
(21, 'B-00021', 'BRI USD - 036102000078302', '036102000078302', 'PT BANK RAKYAT INDONESIA (PERSERO) TBK - USD', '-', '-', 'USD', '1102029001', '22', 'No', 'jamaludin.2', '2022-03-09 15:35:36', 'jamaludin', '2022-03-10 14:06:18'),
(22, 'B-00022', 'BANK MAYAPADA - 10030001940', '10030001940', 'PT BANK MAYAPADA', '-', '-', 'USD', '1102030001', '22', 'No', 'jamaludin.2', '2022-03-09 15:52:54', 'jamaludin.2', '2022-03-10 14:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `templates_id` int(11) NOT NULL,
  `templates_judul` varchar(220) NOT NULL,
  `templates_judul_seo` varchar(220) NOT NULL,
  `templates_desk` text NOT NULL,
  `templates_keyword` varchar(220) NOT NULL,
  `templates_meta_desk` varchar(200) NOT NULL,
  `templates_harga` int(50) NOT NULL,
  `templates_harga_diskon` int(20) DEFAULT NULL,
  `templates_url` text NOT NULL,
  `templates_url_tokped` text NOT NULL,
  `templates_gambar` text NOT NULL,
  `templates_post_oleh` varchar(200) NOT NULL,
  `templates_post_hari` varchar(20) NOT NULL,
  `templates_post_tanggal` date NOT NULL,
  `templates_post_jam` time NOT NULL,
  `templates_update_oleh` varchar(200) NOT NULL,
  `templates_update_hari` varchar(20) NOT NULL,
  `templates_update_tanggal` date NOT NULL,
  `templates_update_jam` time NOT NULL,
  `templates_dibaca` int(50) NOT NULL,
  `templates_status` varchar(20) NOT NULL,
  `templates_cat_id` int(11) NOT NULL,
  `templates_dibeli` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`templates_id`, `templates_judul`, `templates_judul_seo`, `templates_desk`, `templates_keyword`, `templates_meta_desk`, `templates_harga`, `templates_harga_diskon`, `templates_url`, `templates_url_tokped`, `templates_gambar`, `templates_post_oleh`, `templates_post_hari`, `templates_post_tanggal`, `templates_post_jam`, `templates_update_oleh`, `templates_update_hari`, `templates_update_tanggal`, `templates_update_jam`, `templates_dibaca`, `templates_status`, `templates_cat_id`, `templates_dibeli`) VALUES
(4, 'haahaha', 'haahaha', '<p>asdasdasd</p>', 'asdasd asdasda', 'asdsad', 0, NULL, 'adad', '', '', 'dhawy', 'Senin', '2021-10-18', '11:11:52', 'dhawy', 'Senin', '2021-10-18', '15:56:06', 0, 'delete', 7, 0),
(5, 'Produk 1', 'produk-1', '<p>deskripsi</p>', 'kata kunci produk1', 'meta deskripsi', 1000, 10, 'shopee.id', '', 'k1.jpg', 'dhawy', 'Rabu', '2021-10-27', '16:56:07', '', '', '0000-00-00', '00:00:00', 1, 'publish', 7, 0),
(6, 'Produk 2', 'produk-2', '<p>deskripsi 2</p>', '', 'meta deskripsi 2', 1230000, 0, 'shopee2.id', '', 'k2_1.jpg', 'dhawy', 'Rabu', '2021-10-27', '17:04:39', 'dhawy', 'Senin', '2021-11-01', '00:37:36', 6, 'publish', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `templates_category`
--

CREATE TABLE `templates_category` (
  `templates_cat_id` int(11) NOT NULL,
  `templates_cat_judul` varchar(220) NOT NULL,
  `templates_cat_judul_seo` varchar(220) NOT NULL,
  `templates_cat_desk` text NOT NULL,
  `templates_cat_keyword` varchar(220) NOT NULL,
  `templates_cat_meta_desk` varchar(200) NOT NULL,
  `templates_cat_gambar` text NOT NULL,
  `templates_cat_post_oleh` varchar(200) NOT NULL,
  `templates_cat_post_hari` varchar(20) NOT NULL,
  `templates_cat_post_tanggal` date NOT NULL,
  `templates_cat_post_jam` time NOT NULL,
  `templates_cat_update_oleh` varchar(200) NOT NULL,
  `templates_cat_update_hari` varchar(20) NOT NULL,
  `templates_cat_update_tanggal` date NOT NULL,
  `templates_cat_update_jam` time NOT NULL,
  `templates_cat_dibaca` int(50) NOT NULL,
  `templates_cat_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates_category`
--

INSERT INTO `templates_category` (`templates_cat_id`, `templates_cat_judul`, `templates_cat_judul_seo`, `templates_cat_desk`, `templates_cat_keyword`, `templates_cat_meta_desk`, `templates_cat_gambar`, `templates_cat_post_oleh`, `templates_cat_post_hari`, `templates_cat_post_tanggal`, `templates_cat_post_jam`, `templates_cat_update_oleh`, `templates_cat_update_hari`, `templates_cat_update_tanggal`, `templates_cat_update_jam`, `templates_cat_dibaca`, `templates_cat_status`) VALUES
(7, 'Hukum', 'hukum', '<p>Hukum deskripsi</p>', '', '', '', 'dhawy', 'Jumat', '2021-05-07', '16:28:05', '', '', '0000-00-00', '00:00:00', 0, 'Publish'),
(8, 'Kategori 2', 'kategori-2', '<p>Kategori 2<br></p>', '', '', '', 'dhawy', 'Rabu', '2021-10-27', '17:04:05', '', '', '0000-00-00', '00:00:00', 0, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `units_id` int(2) NOT NULL,
  `units_name` varchar(5) NOT NULL,
  `units_description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`units_id`, `units_name`, `units_description`) VALUES
(1, 'KG', 'Kilogram'),
(2, 'PCS', 'Pieces'),
(3, 'SET', 'Set'),
(4, 'LITER', 'LITER'),
(5, 'METER', 'METER');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `user_post_hari` varchar(20) NOT NULL,
  `user_post_tanggal` date NOT NULL,
  `user_post_jam` time NOT NULL,
  `user_update_hari` varchar(20) NOT NULL,
  `user_update_tanggal` date NOT NULL,
  `user_update_jam` time NOT NULL,
  `user_gambar` text NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `user_login_tanggal` date NOT NULL,
  `user_login_jam` time NOT NULL,
  `user_login_status` varchar(20) NOT NULL,
  `user_stat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`, `level`, `id_session`, `user_post_hari`, `user_post_tanggal`, `user_post_jam`, `user_update_hari`, `user_update_tanggal`, `user_update_jam`, `user_gambar`, `user_status`, `user_login_tanggal`, `user_login_jam`, `user_login_status`, `user_stat`) VALUES
(6, 'dhawy', 'dhawy arkan', 'dhawy@gmail.com', '21d564edcc5b55c0af9b3684ef7df4d38b36c224', '1', '1d3ee28b20064eb055ea2315493770bf-20220308155504', 'Kamis', '2020-06-25', '15:14:48', 'Selasa', '2022-03-08', '15:55:04', 'user-profile-avatar-job-social-businessman-profession-user-profile-png-512_512.png', '1', '2022-08-09', '10:00:15', 'online', 'Publish'),
(30, 'jiung', 'jiung', 'adjiesans@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2', '1d00fc6c047a79e4473a253bbb47d62e-20220808112249', 'Kamis', '2021-04-22', '10:52:42', 'Senin', '2022-08-08', '11:22:49', 'luffy.jpg', '1', '2022-08-08', '11:22:55', 'online', 'publish'),
(33, 'karyo', 'Karyo', 'dhawy@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '3', '1d3ee28b20064eb055ea2315493770bf-20220321154215', 'Kamis', '2022-02-17', '14:54:36', 'Senin', '2022-03-21', '15:42:15', '', '1', '2022-03-15', '16:03:53', 'online', 'publish'),
(37, 'koja', 'Koja', 'koja@gmail.com', '8d264dd99e492b505706a9e2792a0feb4754cabc', '5', 'caecfe0fb0c52f39065d742bf407259a-20220302171226', 'Kamis', '2022-02-17', '16:00:04', 'Rabu', '2022-03-02', '17:12:26', '', '1', '0000-00-00', '00:00:00', '', 'publish'),
(38, 'sadsad', 'sadsad', 'asd@gmail.com', 'd164b39e9ec43f65376629da9ccf41780775f656', '4', '699c8f0489033dcb85f2efbcd2148993-20220302135446', 'Kamis', '2022-02-17', '16:01:24', 'Rabu', '2022-03-02', '13:54:46', '', '1', '0000-00-00', '00:00:00', '', 'publish'),
(39, 'admin', 'Admin', 'admin@erp.com', '7c222fb2927d828af22f592134e8932480637c0d', '2', '56bd74f71fb8d67449b3c7149b8b51e4-20220804163059', 'Rabu', '2022-03-09', '11:21:07', 'Kamis', '2022-08-04', '16:30:59', '', '1', '2022-08-04', '15:07:21', 'offline', 'publish'),
(40, 'direktur', 'Direktur', 'direktur@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '3', '47f1a7feeb60bd3c07c88f3a2864b468-20220407114343', 'Kamis', '2022-04-07', '11:38:38', 'Kamis', '2022-04-07', '11:43:43', '', '1', '2022-04-07', '12:19:00', 'online', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `user_agama`
--

CREATE TABLE `user_agama` (
  `user_agama_id` int(2) NOT NULL,
  `user_agama_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_agama`
--

INSERT INTO `user_agama` (`user_agama_id`, `user_agama_nama`) VALUES
(1, ''),
(2, 'Islam'),
(3, 'Kristen'),
(4, 'Katolik'),
(5, 'Hindu'),
(6, 'Buddha'),
(7, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `user_company`
--

CREATE TABLE `user_company` (
  `user_company_id` int(200) NOT NULL,
  `user_company_account` varchar(20) NOT NULL,
  `user_company_judul` varchar(200) NOT NULL,
  `user_company_judul_seo` varchar(200) NOT NULL,
  `user_company_nama` varchar(220) NOT NULL,
  `user_company_kategori` varchar(220) NOT NULL,
  `user_company_warna` varchar(200) NOT NULL,
  `user_company_logo` text NOT NULL,
  `user_company_post_oleh` varchar(50) NOT NULL,
  `user_company_post_hari` varchar(20) NOT NULL,
  `user_company_post_tanggal` date NOT NULL,
  `user_company_post_jam` time NOT NULL,
  `user_company_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_company`
--

INSERT INTO `user_company` (`user_company_id`, `user_company_account`, `user_company_judul`, `user_company_judul_seo`, `user_company_nama`, `user_company_kategori`, `user_company_warna`, `user_company_logo`, `user_company_post_oleh`, `user_company_post_hari`, `user_company_post_tanggal`, `user_company_post_jam`, `user_company_status`) VALUES
(2, '1', 'WMP', 'wmp', 'PT. Widodo Makmur Perkasa', '1', '#ED0D18', 'logo_home_wmp1.jpg', '6', 'Rabu', '2022-03-16', '11:25:36', '1'),
(4, '11', 'PASTE', 'paste', 'PT Pasir Tengah', '2', '#BEB138', 'logo_home_paste.jpg', '6', 'Kamis', '2022-03-17', '16:23:23', '1'),
(5, '111', 'WMP', 'wmp', 'PT Widodo Makmur Perkasa', '3', '#F10D0D', 'logo_home_wmp2.jpg', '6', 'Rabu', '2022-03-16', '15:47:24', '1'),
(6, '112', 'PASTE', 'paste', 'PT Pasir Tengah', '3', '#DD1515', 'logo_home_paste2.jpg', '6', 'Senin', '2022-03-21', '14:33:52', '1'),
(7, '12', 'CAM', 'cam', 'PT Cianjur Arta Makmur', '2', '', 'logo_home_cam.jpg', '6', 'Rabu', '2022-03-16', '11:26:29', '1'),
(8, '121', 'CAM', 'cam', 'PT Cianjur Arta Makmur', '3', '', 'logo_home_cam1.jpg', '6', 'Rabu', '2022-03-16', '11:26:38', '1'),
(9, '122', 'PWM', 'pwm', 'PT Prima Widodo Makmur', '3', '#6DDB36', 'logo_home_pwm_sm.jpg', '6', 'Kamis', '2022-04-07', '11:42:41', '1'),
(10, '123', 'GMP', 'gmp', 'PT Garut Makmur Perkasa', '3', '#104ABC', 'logo_home_gmp_sm.jpg', '6', 'Rabu', '2022-03-16', '11:27:14', '1'),
(11, '13', 'WMS', 'wms', 'PT Widodo Makmur Sejahtera', '2', '#5C9C35', 'logo_home_wms_sm.jpg', '6', 'Rabu', '2022-03-16', '11:27:24', '1'),
(12, '131', 'WMS', 'wms', 'PT Widodo Makmur Sejahtera', '3', '#508E5C', 'logo_home_wms_sm1.jpg', '6', 'Rabu', '2022-03-16', '11:27:33', '1'),
(13, '132', 'PMP', 'pmp', 'PT Pangan Makmur Perkasa', '3', '#1B42E5', 'logo_home_pmp_sm.jpg', '6', 'Rabu', '2022-03-16', '11:27:45', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_company_level`
--

CREATE TABLE `user_company_level` (
  `user_company_level_id` int(2) NOT NULL,
  `user_company_level_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_company_level`
--

INSERT INTO `user_company_level` (`user_company_level_id`, `user_company_level_nama`) VALUES
(1, 'Holding'),
(2, 'Sub Holding'),
(3, 'Induk');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_detail_no_telp` varchar(20) NOT NULL,
  `user_detail_jekel` varchar(20) NOT NULL,
  `user_detail_agama` varchar(50) NOT NULL,
  `user_detail_tempatlahir` varchar(50) NOT NULL,
  `user_detail_tgllahir` date NOT NULL,
  `user_detail_perkawinan` varchar(100) NOT NULL,
  `user_detail_pendidikan` varchar(100) NOT NULL,
  `user_detail_divisi` int(3) NOT NULL,
  `user_detail_company` varchar(20) NOT NULL,
  `user_detail_ktp` varchar(50) NOT NULL,
  `user_detail_tempattinggal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `id_user`, `user_detail_no_telp`, `user_detail_jekel`, `user_detail_agama`, `user_detail_tempatlahir`, `user_detail_tgllahir`, `user_detail_perkawinan`, `user_detail_pendidikan`, `user_detail_divisi`, `user_detail_company`, `user_detail_ktp`, `user_detail_tempattinggal`) VALUES
(25, 6, '1231312313', 'Pria', 'Islam', 'jakarta', '2021-01-29', 'Lajang', 's1', 12, '2', '12312313123', 'bogor'),
(39, 30, '01231312312', 'Pria', 'Islam', 'Jakarta', '1945-12-08', 'Menikah', 'S3', 8, '2', '088888888', 'Jakarta'),
(41, 33, '232131232', 'Pria', 'Islam', 'bogor', '2022-02-02', 'Belum jelas', 's3', 6, '4', '1111', 'Jakarta'),
(43, 37, '2', 'Wanita', 'Kristen', 'Zimbabwe', '2022-02-08', 'Lajang', 's3', 23, '8', '123', 'sdsad'),
(44, 38, '', '', '', '23123', '2022-02-08', ' ', '', 20, '6', '', ''),
(45, 39, '', 'Pria', 'Islam', 'Zimbabwe', '2022-03-07', 'Menikah', 's3', 6, '5', '1233', 'Jakarta'),
(46, 40, '1231312312', 'Pria', 'Islam', 'Indonesia', '2022-04-05', 'Lajang', 'S3', 6, '5', '1', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user_jabatan`
--

CREATE TABLE `user_jabatan` (
  `user_jabatan_id` int(2) NOT NULL,
  `user_jabatan_nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jabatan`
--

INSERT INTO `user_jabatan` (`user_jabatan_id`, `user_jabatan_nama`) VALUES
(1, 'Onboarding'),
(2, 'Training'),
(3, 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `user_jam`
--

CREATE TABLE `user_jam` (
  `user_jam_id` tinyint(1) NOT NULL,
  `user_jam_judul` varchar(220) NOT NULL,
  `user_jam_judul_seo` varchar(220) NOT NULL,
  `user_jam_mulai` time NOT NULL,
  `user_jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jam`
--

INSERT INTO `user_jam` (`user_jam_id`, `user_jam_judul`, `user_jam_judul_seo`, `user_jam_mulai`, `user_jam_selesai`) VALUES
(7, 'Lembur', 'lembur', '19:01:00', '21:00:00'),
(8, 'Pulang', 'pulang', '17:00:00', '19:00:00'),
(9, 'Masuk', 'masuk', '06:00:00', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_kelamin`
--

CREATE TABLE `user_kelamin` (
  `user_kelamin_id` int(2) NOT NULL,
  `user_kelamin_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_kelamin`
--

INSERT INTO `user_kelamin` (`user_kelamin_id`, `user_kelamin_nama`) VALUES
(1, 'Pria'),
(2, 'Wanita'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_nama`) VALUES
(1, 'DEVELOPER'),
(2, 'ADMINISTRATOR'),
(3, 'DIRECTOR'),
(4, 'GENERAL MANAGER'),
(5, 'MANAGER'),
(6, 'SUPERVISOR'),
(7, 'STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `user_perkawinan`
--

CREATE TABLE `user_perkawinan` (
  `user_perkawinan_id` int(2) NOT NULL,
  `user_perkawinan_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_perkawinan`
--

INSERT INTO `user_perkawinan` (`user_perkawinan_id`, `user_perkawinan_nama`) VALUES
(1, ' '),
(2, 'Lajang'),
(3, 'Menikah'),
(4, 'Cerai'),
(5, 'Belum jelas');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `user_status_id` int(11) NOT NULL,
  `user_status_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_nama`) VALUES
(1, 'Active'),
(2, 'Suspend');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`category_list_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`divisi_id`);

--
-- Indexes for table `finance_cash`
--
ALTER TABLE `finance_cash`
  ADD PRIMARY KEY (`finance_cash_id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`log_activity_id`);

--
-- Indexes for table `material_list`
--
ALTER TABLE `material_list`
  ADD PRIMARY KEY (`material_list_id`);

--
-- Indexes for table `paste_finance_bank`
--
ALTER TABLE `paste_finance_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`templates_id`);

--
-- Indexes for table `templates_category`
--
ALTER TABLE `templates_category`
  ADD PRIMARY KEY (`templates_cat_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`units_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_agama`
--
ALTER TABLE `user_agama`
  ADD PRIMARY KEY (`user_agama_id`);

--
-- Indexes for table `user_company`
--
ALTER TABLE `user_company`
  ADD PRIMARY KEY (`user_company_id`);

--
-- Indexes for table `user_company_level`
--
ALTER TABLE `user_company_level`
  ADD PRIMARY KEY (`user_company_level_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- Indexes for table `user_jabatan`
--
ALTER TABLE `user_jabatan`
  ADD PRIMARY KEY (`user_jabatan_id`);

--
-- Indexes for table `user_jam`
--
ALTER TABLE `user_jam`
  ADD PRIMARY KEY (`user_jam_id`);

--
-- Indexes for table `user_kelamin`
--
ALTER TABLE `user_kelamin`
  ADD PRIMARY KEY (`user_kelamin_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- Indexes for table `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  ADD PRIMARY KEY (`user_perkawinan_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `category_list_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `divisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `finance_cash`
--
ALTER TABLE `finance_cash`
  MODIFY `finance_cash_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `log_activity_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `material_list`
--
ALTER TABLE `material_list`
  MODIFY `material_list_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `templates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `templates_category`
--
ALTER TABLE `templates_category`
  MODIFY `templates_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `units_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_agama`
--
ALTER TABLE `user_agama`
  MODIFY `user_agama_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_company`
--
ALTER TABLE `user_company`
  MODIFY `user_company_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_company_level`
--
ALTER TABLE `user_company_level`
  MODIFY `user_company_level_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_jabatan`
--
ALTER TABLE `user_jabatan`
  MODIFY `user_jabatan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_jam`
--
ALTER TABLE `user_jam`
  MODIFY `user_jam_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_kelamin`
--
ALTER TABLE `user_kelamin`
  MODIFY `user_kelamin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_perkawinan`
--
ALTER TABLE `user_perkawinan`
  MODIFY `user_perkawinan_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `user_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
