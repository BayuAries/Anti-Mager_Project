-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 07:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cultour`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','wisatawan','pengelola') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `password`, `role`, `foto_profile`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@cultour.com', '$2y$10$kSGrJAqmzzA2nDY7NnuCL.l.5lpmOxezNVVBcGRdnu.hsR13DB3da', 'admin', NULL, '2019-12-13 08:23:00', '2019-12-13 08:23:00'),
(2, 'Wisatawan Satu', 'wisatawansatu@mail.com', '$2y$10$E/hPq2Wi4vaMHJ1G.SGy0O.CuvGobKulOvOJ5RKs9NmlhuReU15r2', 'wisatawan', '21576326871_profile.png', '2019-12-13 08:46:05', '2019-12-16 01:58:55'),
(3, 'Wisatawan Dua', 'wisatawandua@mail.com', '$2y$10$xCEad0DqsTw8o7vJ4Q7dRe4G95sTgFi9I81LJZIRQ7dYGV8ZXs0lG', 'wisatawan', '31576478495_profile.png', '2019-12-13 08:51:17', '2019-12-15 23:41:35'),
(4, 'Wisatawan Tiga', 'wisatawantiga@mail.com', '$2y$10$JhOFayHCl./ISfqIeqh4DeMcwPmCPMp1JHulwoqJofVYDI6hnwRGK', 'wisatawan', NULL, '2019-12-13 08:52:04', '2019-12-13 08:52:04'),
(8, 'Pengelola Satu', 'pengelolasatu@mail.com', '$2y$10$9Brvbs1398QLc0.IUAFsnezJGjYCfEDKAk5MgpyLtce/jbQnBENJa', 'pengelola', NULL, '2019-12-13 10:17:03', '2019-12-13 10:17:03'),
(10, 'Pengelola Dua', 'pengeloladua@mail.com', '$2y$10$nYkYU8kVt83L1sdckZL0V.z/XGuTWpbQm26XoH1RZdbVLcGLEHASu', 'pengelola', NULL, '2019-12-13 10:30:36', '2019-12-13 10:30:36'),
(13, 'Pengelola Empat', 'pengelolaempat@mail.com', '$2y$10$/nlpABXNlGddXbg4X7UI3eRbWv/M6lDfbVA4KaZYOtu8CPHBWcXI2', 'pengelola', NULL, '2019-12-15 05:48:52', '2019-12-15 08:03:25'),
(16, 'Uzumaki Naruto', 'naruto@mail.com', '$2y$10$vuzBNrCCnuo5gzekoRt6t.PXUJAO2/StWvOyVm1J40CZndyduEflW', 'wisatawan', NULL, '2019-12-16 05:35:59', '2019-12-16 05:35:59'),
(19, 'Pengelola Tiga', 'pengelolatiga@mail.com', '$2y$10$QQQMHa6Zy1RGeSsHNA04q.WkP0AdJp/xeCcJPidko6FjGVl5YNnF.', 'pengelola', NULL, '2019-12-16 08:12:14', '2019-12-16 08:12:14'),
(20, 'Babang Bujang', 'bujang@mail.com', '$2y$10$HkkWS4BuAmS7yPD7CdjzaOED2EEJgWug9e5lVXqSBdHJeajvPYAsG', 'pengelola', NULL, '2019-12-16 08:34:42', '2019-12-16 08:34:42'),
(21, 'Reja Oren', 'reja@mail.com', '$2y$10$lPcHhiIlqdc/upE7nW5E/eALgg4azJ7XfmKoNpYi3LM8Q80Qzpx06', 'pengelola', NULL, '2019-12-16 12:56:59', '2019-12-16 12:56:59'),
(22, 'Jojo', 'jojo@mail.com', '$2y$10$faDSfsTMITbKJ3CtaH3hheqHVHHHl3o54zRgXydCfrKQBzjAr1qMG', 'pengelola', NULL, '2019-12-16 16:29:26', '2019-12-16 16:29:26'),
(23, 'Gilang Pramutu', 'gilang@mail.com', '$2y$10$oRo.N/Ojq4SI/MvFh7Mxr.nbf2.xAIk/j1d8kGQp8lYN4AW7Clsye', 'pengelola', NULL, '2019-12-16 16:33:14', '2019-12-16 16:33:14'),
(24, 'Ririn Syahdani', 'ririn@mail.com', '$2y$10$pTuOjyZmRrMfeFH2GH98/uq55UVG2gFyPEez1o/YWu/uooilnFWV.', 'pengelola', NULL, '2019-12-16 16:35:32', '2019-12-16 16:35:32'),
(25, 'Jihan Laraswaty', 'jihan@mail.com', '$2y$10$NN8fzQwik2RLVJ/IQrD.G.mqSnrRTjlIy4nxvQ5NyNddVUlMOYUEy', 'pengelola', NULL, '2019-12-16 16:38:01', '2019-12-16 16:38:01'),
(26, 'Salman Yusuf', 'salman@mail.com', '$2y$10$lGljzYE/gR28wVSQ2XHPKueQMovB2VmxKrlx8XgW1S.jph70dw.4e', 'pengelola', NULL, '2019-12-16 16:40:38', '2019-12-16 16:40:38'),
(27, 'Bayu Bijdhad', 'bayu@mail.com', '$2y$10$K3HnxwlI/zV0TSlgm8CRfOWDELh5TLlijb5yT6jdfgmv.JaASkGmq', 'pengelola', NULL, '2019-12-16 16:42:44', '2019-12-16 16:42:44'),
(28, 'Olaf Jamet', 'olaf@mail.com', '$2y$10$Xv/KgwZmJamefbYpIwGQoOmaN5dkgnmMxnyUoSbFqKD2zxpCch5Ky', 'pengelola', NULL, '2019-12-16 16:46:58', '2019-12-16 16:46:58'),
(29, 'Udin Akhirun', 'udin@mail.com', '$2y$10$RwpF07ZEgqnJ/oQsoyuf7emvTPxqYZiUlMO0qlO13GZ.svf2LYvkO', 'pengelola', NULL, '2019-12-16 16:58:47', '2019-12-16 16:58:47'),
(30, 'Rian Prakarya', 'rian@mail.com', '$2y$10$8t8f.N86vgssmCObAfqrE.GZbU/wP0hs.hLl9m.XSAfAxiwOcda9C', 'pengelola', NULL, '2019-12-16 17:02:38', '2019-12-16 17:02:38'),
(31, 'Yudish Tirawan', 'yudhis@mail.com', '$2y$10$yGKvdROP/7MHxYWtlGqZiuKgIhfGbmJcO8pxcn7eJ3K2YyAWUTEt.', 'pengelola', NULL, '2019-12-16 17:05:53', '2019-12-16 17:05:53'),
(32, 'Reza Yaqin', 'yaqin@mail.com', '$2y$10$AX8DUyw0BAEEvtk54kaW0O8LAcyaldN209fhzln962YUWI.Nhvcyu', 'wisatawan', '321576542027_profile.png', '2019-12-16 17:19:24', '2019-12-16 17:20:27'),
(33, 'Saipul Jaqim Treto', 'saipul@mail.com', '$2y$10$h1/yQAGNetxJ4baIBZT87OSuTBJA82VgMsRXmU/KBqk20NA7ulop2', 'wisatawan', '331576542216_profile.png', '2019-12-16 17:22:56', '2019-12-16 17:23:36'),
(34, 'Linda Hafnan', 'linda@mail.com', '$2y$10$OLxr8H2LI20adEzf7CSJM.DezUC.QwT8C0xKEMbrO9hZg.d4/xz7i', 'wisatawan', '341576542433_profile.png', '2019-12-16 17:26:19', '2019-12-16 17:27:13'),
(35, 'ssss', 'tes@gmail.com', '$2y$10$UmupQvkMorpejPkBVyX0xunK/cSnyvKBaog/tO.SWYBUwLGvvVtwi', 'pengelola', NULL, '2020-06-11 02:22:37', '2020-06-11 02:22:37'),
(36, 'bayuaa', 'tes1@gmail.com', '$2y$10$d2GwASrxXnzz931BAfc/2OIKdMRTtgF.cnTwDboEPYHswPKyPEhK.', 'wisatawan', NULL, '2020-06-11 02:28:28', '2020-06-11 02:28:28'),
(37, 'adminbaru', 'admin@gmail.com', 'satu2345', 'admin', NULL, NULL, NULL),
(39, 'adminbaru', 'adminbaru@gmail.com', 'satu2345', 'admin', NULL, NULL, NULL),
(40, 'admin1', 'admin1@gmail.com', '$2y$10$wNxuVwNzGMAAdd5GruK7muJ4RrHiYddp2hKl5lOWdGm0aaJgJDoyS', 'admin', NULL, '2020-06-12 00:18:08', '2020-06-12 00:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_event` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai_event` date NOT NULL,
  `tanggal_selesai_event` date DEFAULT NULL,
  `htm_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_event` enum('belum mulai','sedang berlangsung','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota` int(11) DEFAULT NULL,
  `foto_event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `wisata_id`, `kota_id`, `nama_event`, `alamat_event`, `deskripsi_event`, `tanggal_mulai_event`, `tanggal_selesai_event`, `htm_event`, `status_event`, `kuota`, `foto_event`, `created_at`, `updated_at`) VALUES
(7, 5, 1, 'asfasdfsg', 'Jalan Jendral Sudirman', 'dasdasfafasfsd', '2019-12-06', NULL, '15000', 'belum mulai', 300, '71576479753_foto_wisata.png', '2019-12-15 03:08:19', '2019-12-16 00:02:33'),
(13, 7, 1, 'sb sduu gh asd', 'Jalan R A Kartini', 'ftrtrett', '2019-12-27', NULL, 'gratis', 'belum mulai', NULL, '131576509091_foto_wisata.png', '2019-12-16 08:11:31', '2019-12-16 08:11:31'),
(14, 14, 1, 'Acara Malam Trytinia', 'Jalan Ahmad Yani, dekat Dragon Water Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet minus quasi magnam. Incidunt magni porro sequi. Saepe expedita impedit labore nostrum odit quidem dolores enim temporibus atque modi veritatis autem placeat, architecto magnam praesentium eius ex rerum. Nostrum assumenda doloribus perferendis minima iure pariatur ad aliquid, exercitationem quod quas, repellendus obcaecati et. Provident veniam soluta illum maxime esse necessitatibus aliquam explicabo, accusamus fuga unde eaque vitae omnis in quae at? Excepturi eligendi ipsa veritatis illum quam pariatur perspiciatis cupiditate vero laudantium minus. Perferendis error officia sint laborum ducimus recusandae ipsa molestiae veritatis assumenda amet esse nostrum ea, id dicta animi sit est, neque ab a aliquid delectus facilis fugit ratione sunt. Corporis dolore accusantium provident vitae officiis non aliquid similique numquam! Mollitia sunt officiis eaque necessitatibus debitis repellendus sapiente minima, accusamus impedit. Veritatis, pariatur temporibus placeat impedit soluta minus? Quasi ipsum ea eos animi laboriosam ex explicabo alias minima ad beatae molestiae nulla cumque illo laudantium reprehenderit vitae repudiandae, impedit architecto quibusdam culpa dolore repellat sequi qui? Inventore ab doloribus nisi possimus eaque mollitia dolore, doloremque quaerat distinctio nulla aspernatur eligendi sequi? Nostrum culpa minus, temporibus, est id, odit velit ullam eum delectus voluptatum ea expedita praesentium exercitationem deleniti nesciunt quaerat porro harum eius tenetur sint dignissimos at. Mollitia delectus corrupti illo aperiam modi sint, cum dolor vero deleniti repudiandae accusamus explicabo eos maxime exercitationem quidem adipisci saepe ad. Quae suscipit sit consequatur molestias neque praesentium velit qui, commodi, culpa soluta autem molestiae fugit, ex quaerat aspernatur iure veritatis maxime minima recusandae dolor. Dolorem sed odit maxime eaque, mollitia ea quis distinctio consectetur nam voluptas praesentium labore tenetur ipsam, eius unde consequatur expedita perspiciatis placeat! Maiores tempora ab eligendi dolorum totam debitis ut? Asperiores, culpa. Architecto repellendus cum explicabo, temporibus ipsam eaque quos at fugiat nihil tempore suscipit eum qui hic delectus dolorem eveniet assumenda? Nemo delectus assumenda voluptatibus quas, neque necessitatibus pariatur rem deleniti ipsa provident possimus dicta id consectetur? Facilis, rerum.', '2019-12-31', NULL, 'gratis', 'belum mulai', NULL, '141576510992_foto_wisata.png', '2019-12-16 08:43:12', '2019-12-16 08:43:12'),
(15, 15, 1, 'Joged Jojo', 'Jalan Nglanjaran, Hutan Timur Laut', 'ehsf hh fw hf uidsfkjda  uew', '2020-01-04', NULL, 'gratis', 'sedang berlangsung', NULL, NULL, '2019-12-16 13:23:52', '2019-12-16 13:24:06'),
(22, 27, 1, 'baru', 'jalan di coba', 'baruuu', '2020-06-30', '2020-07-01', '50000', 'belum mulai', 30, NULL, '2020-06-26 19:39:15', '2020-06-26 19:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `kota`, `created_at`, `updated_at`) VALUES
(1, 'Balikpapan', NULL, NULL),
(2, 'Samarinda', NULL, NULL),
(3, 'Palangkaraya', NULL, NULL),
(4, 'Banjarmasin', NULL, NULL),
(5, 'Pontianak', NULL, NULL),
(6, 'Surabaya', NULL, NULL),
(7, 'Yogyakarta', NULL, NULL),
(8, 'Surakarta', NULL, NULL),
(9, 'Bandung', NULL, NULL),
(10, 'Jakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_04_193028_create_akuns_table', 1),
(2, '2019_12_04_193049_create_wisatas_table', 1),
(3, '2019_12_04_193111_create_events_table', 2),
(4, '2019_12_04_193138_create_reviews_table', 2),
(5, '2019_12_05_085142_create_kotas_table', 2),
(8, '2020_06_27_025018_create_tiket_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `akun_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `wisata_id`, `akun_id`, `akun_nama`, `review`, `created_at`, `updated_at`) VALUES
(2, 5, 2, 'Wisatawan Satu', 'Aku sangat suka tempat ini, karena tempat ini meme sekali. #singham', '2019-12-13 10:43:05', '2019-12-16 01:58:55'),
(4, 5, 3, 'Wisatawan Dua', 'Saya juga sangat suka tempat ini karena menyenangkan dan bisa mengenal salah satu budaya yang ada di Indonesia.', '2019-12-14 20:52:44', '2019-12-14 20:52:44'),
(7, 5, 14, 'Wisatawan Empat', 'ulasan ini adalah ulasan percobaan', '2019-12-15 23:49:52', '2019-12-15 23:49:52'),
(8, 5, 15, 'Bambang Lunak', 'halo, nama saya bambang, saya suka mandi kembang. #layanganputus #rejabau', '2019-12-16 05:31:56', '2019-12-16 05:33:43'),
(12, 11, 2, 'Wisatawan Satu', 'Wah panasssss sekali', '2019-12-16 07:51:47', '2019-12-16 07:55:21'),
(13, 25, 32, 'Reza Yaqin', 'tempat ini sangat sejuk dan indah', '2019-12-16 17:20:48', '2019-12-16 17:20:48'),
(14, 19, 32, 'Reza Yaqin', 'Aku baru pertama kali melihat tari-tarian daerah sekeran di tempat ini :D', '2019-12-16 17:21:37', '2019-12-16 17:21:37'),
(15, 15, 32, 'Reza Yaqin', 'Tempat yang indah deang penduduknya yang ramah', '2019-12-16 17:22:20', '2019-12-16 17:22:20'),
(16, 25, 33, 'Saipul Jaqim Treto', 'tempat yang sangat pas untuk mengisi hari libur :D', '2019-12-16 17:24:08', '2019-12-16 17:24:08'),
(17, 17, 33, 'Saipul Jaqim Treto', 'selain budaya yang terbilang unik, tempat ini juga memiliki pemandangan yang indah', '2019-12-16 17:24:50', '2019-12-16 17:24:50'),
(18, 16, 33, 'Saipul Jaqim Treto', 'penduduknya ramah-ramah :D', '2019-12-16 17:25:20', '2019-12-16 17:25:20'),
(19, 14, 33, 'Saipul Jaqim Treto', 'saya hanya bisa bilang WOW :D', '2019-12-16 17:25:42', '2019-12-16 17:25:42'),
(20, 21, 34, 'Linda Hafnan', 'tempat yang sangat keren', '2019-12-16 17:27:31', '2019-12-16 17:27:31'),
(21, 11, 34, 'Linda Hafnan', 'tempat yang penuh pengunjung, tapi banyak sampah berserakan di mana mana :(', '2019-12-16 17:28:21', '2019-12-16 17:28:21'),
(22, 15, 34, 'Linda Hafnan', 'saya sangat senang tinggal di sini walaupun hanya untuk berlibur :D', '2019-12-16 17:29:10', '2019-12-16 17:29:10'),
(23, 17, 34, 'Linda Hafnan', 'pemandangannya indah sekali, apalagi saat malam.. terlihat orang-orang sedang menari di pura', '2019-12-16 17:29:54', '2019-12-16 17:29:54'),
(24, 25, 36, 'bayuaa', 'mantab jiwak', '2020-06-11 02:29:00', '2020-06-11 02:29:00'),
(25, 22, 36, 'bayuaa', 'mantul', '2020-06-11 03:06:38', '2020-06-11 03:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `akun_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `akun_id`, `event_id`, `jumlah_tiket`, `harga_tiket`, `total_bayar`, `status`, `created_at`, `updated_at`) VALUES
(1, 35, 7, 6, 15000, 90000, 'Pembayaran', '2020-06-26 21:34:08', '2020-06-26 21:34:08'),
(2, 35, 22, 99, 50000, 4950000, 'Pembayaran', '2020-06-26 21:36:55', '2020-06-26 21:36:55'),
(3, 35, 22, 0, 50000, 0, 'Pembayaran', '2020-06-26 21:38:47', '2020-06-26 21:38:47'),
(4, 35, 22, 0, 50000, 0, 'Pembayaran', '2020-06-26 21:41:09', '2020-06-26 21:41:09'),
(5, 36, 22, 6, 50000, 300000, 'Pembayaran', '2020-06-26 21:52:14', '2020-06-26 21:52:14'),
(6, 36, 7, 9, 15000, 135000, 'Pembayaran', '2020-06-26 21:58:52', '2020-06-26 21:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `akun_id` int(11) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `nama_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_wisata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `htm_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_wisata` enum('diterima','ditunda','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_wisata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `akun_id`, `kota_id`, `nama_wisata`, `alamat_wisata`, `deskripsi_wisata`, `jadwal_wisata`, `htm_wisata`, `status_wisata`, `foto_wisata`, `created_at`, `updated_at`) VALUES
(5, 8, 1, 'Perumahan Adat Suku Elang Hijau', 'Jalan Jendral Sudirman', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe perspiciatis incidunt pariatur libero eos at, tenetur praesentium minus enim ut possimus molestiae delectus? Veritatis, quisquam animi laborum aliquam ex necessitatibus! Vel error explicabo molestias asperiores nihil. Maxime perspiciatis deserunt iste, assumenda accusamus consequatur magnam sunt voluptatem error cumque consectetur accusantium, porro iure obcaecati sit quisquam nesciunt recusandae eligendi libero, aliquid illum quas odit? Inventore aspernatur quo deleniti odit, sint nesciunt obcaecati temporibus sed ducimus nihil aliquam quibusdam optio nobis, nemo distinctio? Optio hic ipsam delectus repudiandae magnam ipsum? Asperiores natus sint aperiam, in consectetur mollitia laboriosam possimus esse culpa. Velit laboriosam tempore libero ut eaque reprehenderit iure. Ipsa neque voluptatem magni sequi cumque id quae doloremque, quos debitis omnis eligendi modi reprehenderit aspernatur tempora esse. Temporibus deleniti reprehenderit qui ea voluptatum. Cupiditate consequuntur libero nulla sed ipsa obcaecati illo ratione ad accusamus ab eos voluptatibus, quam unde dolor laudantium quas optio qui fugit ullam numquam ipsum maxime iusto. Minus praesentium aperiam provident esse cum. Voluptatem, eveniet optio! Quisquam natus magni nobis, officia hic ad minima nam repudiandae nisi consequuntur officiis repellat placeat perferendis optio nulla facilis blanditiis in voluptatum quasi voluptate itaque sequi tenetur numquam omnis? Facere, illum odio. Eveniet voluptates tempore molestiae perspiciatis aliquid eos assumenda veniam, non nesciunt harum sequi temporibus dignissimos repellendus ratione totam ut, sit deserunt dolorem nisi beatae, natus doloremque fugiat vero! Recusandae omnis voluptatibus unde sit, quia molestias iste debitis. Similique laborum voluptate corrupti placeat nisi! Ipsam, iste iusto hic laudantium repellendus optio illum molestias? Iure facilis obcaecati laudantium, itaque amet officiis minima quaerat dolorem sunt illum possimus deserunt numquam mollitia, praesentium dignissimos. Excepturi fuga ut dolores voluptas consequatur ipsum porro asperiores, laudantium aliquid enim repudiandae saepe fugit cumque in, ipsa quam nostrum quo! Necessitatibus id sequi sit adipisci laudantium numquam earum quis ut. Itaque autem in, cupiditate vero rerum quia repellat labore alias dolores quas. Delectus id architecto nesciunt dolore fugit quis ratione est earum similique? Eaque est quod iure dolor libero obcaecati ducimus, cum laboriosam ab quo unde odit expedita dolorem illum qui ullam, facere praesentium, repellat iusto vitae! Libero totam velit sit ullam nihil porro, fugiat beatae fugit, ipsam rem consequatur? Natus, necessitatibus? Magnam voluptates blanditiis, nihil molestias commodi eum doloremque aut illo atque maiores debitis unde, sed et officiis sunt fuga aperiam soluta numquam quos nam nemo! Ut consequatur debitis nemo veritatis doloremque facere, sapiente ipsa earum porro dicta deleniti ad! Reiciendis nulla facilis tempore officia libero deleniti modi minima inventore quod suscipit sit cupiditate excepturi at reprehenderit veritatis repellendus distinctio commodi quaerat rerum, perspiciatis magnam expedita amet quos. Repellendus ut aliquid sunt at libero officiis soluta, molestias nostrum inventore dolore nesciunt accusantium fuga necessitatibus eos, placeat voluptatum minima aut illo. Molestiae aliquid eligendi veniam dolores a vel praesentium fugiat nemo, repellat cumque aspernatur quo, modi iure sed ipsa ut! Labore dicta praesentium amet non. Vel natus pariatur vitae praesentium porro, sit molestias odit voluptatibus quae fugiat expedita officia doloremque error illo cum eaque tenetur maiores excepturi! Quae, dolorum repellat.', 'rabu, kamis, sabtu, minggu', 'gratis', 'diterima', '51576479708_foto_wisata.png', '2019-12-13 10:17:47', '2019-12-16 05:52:40'),
(7, 10, 1, 'Rumah Batik Tradisional', 'Jalan R A Kartini', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci molestias quidem placeat, provident optio maxime deserunt cum saepe, suscipit doloremque exercitationem corrupti nihil cupiditate veritatis porro debitis, libero ab accusamus vero minima. Eligendi, laborum nobis non consectetur quis numquam eveniet perspiciatis! Quas ad repellendus dolore nemo dolorem similique dolor, autem sunt maxime, inventore adipisci vel sapiente nulla odit voluptatum, quidem hic suscipit recusandae ab nostrum quisquam! Suscipit est illo quae temporibus veniam quibusdam consectetur tempora doloremque minus omnis. Dolore eum facere assumenda placeat nemo voluptates accusantium. Similique, repudiandae a. Quisquam, rerum error maxime neque voluptate est ad esse placeat accusamus vel! Aliquid corrupti illum aliquam? Accusantium, praesentium nostrum sunt numquam aliquam ratione quae excepturi explicabo saepe soluta ea. Facere deserunt iure quia, ipsa velit ipsam, corrupti numquam pariatur omnis aliquid necessitatibus a voluptates, tempore fugiat atque rem. Officia odit aliquam cumque aperiam quia enim provident cum, cupiditate hic voluptas soluta alias inventore repellendus a temporibus recusandae animi. Inventore ab quo modi fuga maiores, ex non odit saepe soluta reiciendis eum iusto maxime ipsam velit nostrum at commodi esse, illum voluptatum repellendus labore? Incidunt quis pariatur animi blanditiis asperiores! Inventore ratione perspiciatis, harum rem vitae totam neque esse recusandae explicabo voluptates, error ipsam sapiente distinctio sequi illum eaque cupiditate velit architecto quod natus asperiores cum incidunt praesentium commodi. Optio labore, quam nemo accusantium ad iste, odio in iure quisquam voluptatibus dignissimos ipsa aspernatur, laborum voluptatum porro ut deleniti rerum minus cupiditate cumque tenetur obcaecati possimus ducimus nesciunt. Illo tempora sapiente voluptatem laudantium voluptatibus non qui quis fuga laboriosam dolorum, commodi quaerat dolores blanditiis pariatur odio impedit aut quas! Dolorum voluptas, ipsam illo dolores veritatis quae? Itaque debitis natus assumenda, culpa quia vero. Quia neque rerum, alias atque culpa voluptates deserunt vel repellat eligendi. Repellendus itaque cumque necessitatibus. Quo similique fugit vel voluptates autem et, possimus accusamus soluta? Ea, dolores culpa ratione maiores labore sed eligendi quas, sit enim ullam molestias nemo iusto laborum placeat necessitatibus officiis perferendis sint, quisquam ex! Voluptatum accusamus alias quia quos nesciunt placeat odit. Minima nemo quisquam sint sunt molestias ex optio harum distinctio aliquid dignissimos dolores error et reiciendis, doloremque debitis fugit soluta maiores illo corrupti neque incidunt? Accusamus eligendi, consequatur, consequuntur omnis sit modi vel, facere repudiandae vero iste beatae natus mollitia voluptatem dolore laborum aliquam temporibus asperiores. Optio, hic? Doloremque qui nam alias ratione ullam cum odio eius harum adipisci est. Ipsum incidunt provident eaque error rem sequi distinctio velit ratione temporibus iure ex commodi quasi assumenda ab ullam at minima officiis porro, necessitatibus, aperiam cumque veritatis fuga. Illum animi expedita assumenda quo amet, adipisci voluptatum optio dicta aliquid minus quidem repudiandae aperiam voluptate vero eligendi officiis suscipit illo officia, quis odit eaque nemo. Hic, sequi iure nostrum rerum dolorum voluptatibus maiores, pariatur eius quam, magni eveniet earum provident non. Nisi voluptates deserunt aut odio cumque temporibus impedit dolorem expedita alias voluptate praesentium, iusto cum aliquid veniam totam sit blanditiis illo officia, ipsam repellendus. Perferendis quos repellendus dolores sit quas ab nesciunt ipsum, qui libero itaque repellat sapiente inventore debitis ea quia optio ducimus velit soluta perspiciatis sequi laboriosam reprehenderit iure. Distinctio voluptatum, vitae voluptatem corporis natus amet culpa, earum voluptas laborum beatae, iure aliquam architecto? Error omnis dignissimos dolore temporibus eius voluptatem doloribus qui nulla eaque cumque! Deserunt debitis maiores asperiores corrupti. Nobis in nesciunt eaque nulla quo et provident at eius officia, sapiente enim voluptatum, ullam hic distinctio tempora vel labore adipisci excepturi velit quas molestias a qui quidem cupiditate. Obcaecati odit vitae repellat voluptatem commodi esse est voluptate, eaque hic. Aut possimus corporis veniam eaque adipisci distinctio nam quasi est qui, natus sint culpa reiciendis deserunt, quisquam doloribus nulla illo praesentium neque magni rerum ab autem optio nemo. Sit dolorem, unde tempora aliquam saepe ipsa quos illum laboriosam magnam non, iusto odit maxime vitae dicta nihil, iure suscipit cum corrupti! Eos minus mollitia eligendi aspernatur veritatis.', 'minggu', 'gratis', 'diterima', '71576327139_foto_wisata.png', '2019-12-14 03:55:44', '2019-12-15 08:11:16'),
(11, 13, 1, 'Rumah Naga', 'Jalan Panglima Menteri', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto dolorem quia fuga repellendus enim laudantium adipisci cum sit explicabo, nostrum voluptates ratione et numquam earum omnis ea hic magnam eveniet blanditiis dicta. Itaque repellat molestias, asperiores delectus id impedit sequi iste culpa est et vitae aliquam quisquam quibusdam magnam facere sed maxime eos. Beatae ipsam eum sequi voluptatem nam vero accusantium, est facilis blanditiis cum incidunt dolor corrupti culpa magni voluptate a, enim in adipisci consectetur nesciunt aliquid maiores illum impedit? Nemo labore aspernatur voluptate maiores nobis numquam architecto cum. Eveniet blanditiis libero commodi aspernatur labore sed at placeat? Consequuntur qui maxime odio explicabo sit, quasi molestias incidunt distinctio quidem delectus? Reprehenderit incidunt optio inventore voluptas et alias magni ullam expedita eius, nobis nulla, velit autem, rerum vel in. Ea facere doloremque earum quis fugit nobis omnis quae, delectus dolores, commodi molestiae cum, praesentium sint reiciendis ad optio quod tempore alias maxime eos dolorum iusto fugiat hic! Similique distinctio veritatis ipsa reiciendis, tenetur itaque repudiandae earum rem minus ab. Placeat voluptatem nostrum incidunt numquam sunt. Perspiciatis obcaecati sit praesentium et nisi voluptatum ipsam itaque fuga voluptate, mollitia beatae quos voluptates, dicta architecto iusto accusantium consequuntur delectus? Cumque deserunt quod tenetur temporibus ut facere, earum architecto consequatur aspernatur nesciunt recusandae, nam laborum itaque eius corporis illum perferendis culpa dicta aliquam iusto dolores. Magnam exercitationem, quis quas ullam maiores modi sequi dolores ab. Commodi, perspiciatis quam aperiam facilis est iste alias aut consequatur voluptates repellendus autem doloremque odio earum eaque! Porro ducimus quis voluptate neque aut dolor ullam perspiciatis, corrupti minus eveniet facilis eius, illum nemo dicta inventore natus cumque deleniti aliquid! A distinctio necessitatibus, deserunt libero tempora harum magnam quod aut voluptatem fugiat reprehenderit recusandae fugit itaque similique nisi? Quam accusantium quos quae odit voluptatibus tenetur delectus deleniti quas placeat alias reiciendis ea dolorum accusamus nemo provident architecto esse, voluptatum molestias rerum? Quae quisquam unde possimus, quos itaque ea asperiores modi facere ex veritatis molestias ipsum quaerat nobis repellat neque rerum doloremque, at iste, commodi nihil velit aperiam vero doloribus odit? Amet praesentium veritatis quia modi quidem nulla adipisci explicabo. Voluptas, corporis. Dolor minima ducimus rerum vero harum atque dolorum possimus quo similique voluptatum expedita natus dicta nihil odit suscipit omnis dignissimos ipsam laboriosam animi doloremque, labore nulla. Aut dignissimos non veniam magnam pariatur sapiente consectetur labore. Tempore nostrum quasi ratione aut cum, impedit ipsum corporis aspernatur, laboriosam minus minima dolorum assumenda numquam suscipit veritatis officia modi doloribus fugit aliquam molestias. Tempore, aperiam ratione, debitis fuga placeat autem omnis non maiores quidem quibusdam ex, veniam ullam facilis voluptates enim dolore qui aut? Vero, recusandae? Nostrum commodi fuga est voluptatum dignissimos non error laborum quaerat nesciunt, distinctio, architecto possimus vitae aliquam, ratione ducimus delectus ipsa. Adipisci velit iure sapiente sunt tempora mollitia fuga similique nihil voluptates voluptatibus corrupti nobis magnam tenetur, dolorum vitae nam sint soluta, ipsam dolorem suscipit repellat. Deserunt quasi possimus aliquam soluta modi molestias? Magnam saepe ipsam atque impedit ex sed cumque, doloremque excepturi, autem ipsum sequi itaque consequatur tempore porro blanditiis, tempora voluptate illo cupiditate soluta. Sunt cupiditate necessitatibus eum vel, quia similique dolores beatae repellat dolorum ipsam id animi amet delectus nihil, earum sequi culpa quis deleniti autem et facere esse vero! Vero ex harum, cupiditate alias cum iure, adipisci deleniti laudantium voluptas, non reprehenderit? Voluptatibus ab quidem sunt! Aut nesciunt omnis impedit, quae sunt fuga ad tempora in, eligendi magni, libero esse unde. Quisquam neque doloribus accusamus at laboriosam dolorem sed eligendi, voluptates quod vero exercitationem nam nesciunt. Dicta corporis repellat assumenda laudantium, porro maiores facere, amet impedit nihil voluptatum dolore a dolor eum! Quidem numquam explicabo architecto sapiente eaque, atque iusto repellat eligendi, recusandae, nemo distinctio consequuntur aut. Cum expedita libero ea numquam nostrum sed et quisquam ad vitae. Voluptas ab nostrum eius quaerat, libero placeat eum nihil reprehenderit ex fugit animi dicta, accusamus, non tempora quo tempore rem. Sit!', 'minggu', 'gratis', 'diterima', '111576421575_foto_wisata.png', '2019-12-15 07:52:55', '2019-12-16 07:44:43'),
(14, 20, 1, 'Sanggar Pamulangtyra', 'Jalan Ahmad Yani, dekat Dragon Water Park', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum dolorum quae non sint facilis libero, repellendus commodi eligendi velit corrupti explicabo inventore nesciunt alias est omnis ut quibusdam hic harum, fuga in debitis? Omnis assumenda quos aut aspernatur sequi dicta corporis dolorem sapiente ad, ipsa vero, iste expedita necessitatibus minima beatae quae inventore repellendus consequuntur nihil quas debitis fuga harum eaque! Fugit eaque dolores molestias aut? Expedita, consectetur possimus veniam suscipit, ratione nobis dicta animi velit quibusdam at, accusamus sed sequi repellat ab. Esse sed impedit quos, officia voluptas voluptatum minima ut reprehenderit iusto laborum quas! Dolor error fugit odio expedita eaque, temporibus accusamus? Ipsam facere a ea eligendi maxime illo, at veritatis id fugiat omnis. Doloremque, error nobis provident reprehenderit numquam saepe iure ad! Aliquid tenetur minus ipsam consequatur. Vel itaque quis doloribus veniam excepturi quaerat, rem, deleniti aperiam est nostrum harum corporis ex qui minus magni omnis molestiae accusantium quia ad explicabo odio, adipisci consequatur iusto! Dolorum perferendis nihil minus natus dolor unde explicabo reiciendis maiores, repellendus voluptatem repudiandae ex, ad quod rem corrupti provident expedita ea tempora dignissimos quibusdam accusamus illo alias! Inventore ipsa repudiandae labore eveniet ad dolore obcaecati, tempora, sequi aperiam ea hic odit harum debitis? Fugit, iusto magni illum fuga dicta reiciendis incidunt minus. Quaerat quam aliquam reiciendis vitae autem veniam architecto minima ab. Alias recusandae maxime id rem ea optio, placeat est excepturi cum ullam laborum dicta inventore odit adipisci magni vitae dolores totam asperiores quia.', 'jumat, minggu', 'gratis', 'diterima', '141576510886_foto_wisata.png', '2019-12-16 08:41:26', '2019-12-16 08:41:26'),
(15, 21, 1, 'Rumah Rejaaaa', 'Jalan Nglanjaran, Hutan Timur Laut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ea error laudantium earum quam iusto voluptatibus nihil culpa laboriosam hic veritatis accusamus id numquam labore temporibus molestiae ab repudiandae, fugit dicta eius magnam deserunt animi! Provident quidem fugiat delectus, facilis labore odit eligendi, officiis placeat molestiae earum praesentium deserunt corrupti nesciunt corporis aliquid debitis modi id obcaecati exercitationem repellendus doloremque tenetur eveniet iste? Asperiores nulla suscipit quo doloribus nesciunt pariatur laborum tempore eius accusantium, impedit nemo ipsa exercitationem id a dolore, quia inventore. Quidem, molestias inventore, non dolorum repellendus odit recusandae laboriosam ipsa obcaecati minima nemo deserunt. Quaerat quidem architecto dicta, laborum totam qui voluptatem harum nobis necessitatibus aliquid ullam? Vel accusamus eum tempora sint ad quidem quae natus. Numquam ipsum quod animi error, obcaecati aspernatur architecto in ipsam, autem aliquid facere debitis exercitationem culpa. Expedita laborum iste quae nisi velit esse, corrupti debitis ipsa odio adipisci optio. Nesciunt esse qui explicabo eos ipsam mollitia animi unde doloremque dolor placeat? Aspernatur odit molestias ipsa assumenda, totam dolorem nam. Pariatur culpa architecto illum fugiat facere quam sint, mollitia in doloribus. Expedita voluptas maiores provident vitae aliquam veniam iure cupiditate sapiente. Consequuntur aut officiis consectetur quo reiciendis blanditiis ipsam exercitationem amet dolores nemo voluptates, rerum a architecto laborum mollitia, harum porro dolor! Earum, recusandae a.', 'senin, selasa, rabu, kamis, jumat, sabtu, minggu', 'gratis', 'diterima', '151576526308_foto_wisata.png', '2019-12-16 12:58:28', '2019-12-16 13:23:06'),
(16, 22, 2, 'Perumahan Adat Jamboretabe', 'Jalan Sumiyadi Saloso', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto itaque voluptas! Eius nam recusandae in? Magni error provident, omnis, numquam laudantium aperiam unde dolore quae aspernatur perferendis pariatur, deserunt commodi neque. Iusto, veniam. Officiis obcaecati culpa totam eaque cupiditate earum veritatis, ab qui praesentium unde ratione impedit libero error vel pariatur eum non quam veniam accusamus recusandae mollitia debitis? Vitae ipsam earum culpa eligendi! Cum, explicabo aliquam. In voluptatum sit doloribus veritatis minima. Quo ducimus numquam repudiandae molestias voluptatem suscipit eligendi neque laudantium quam, voluptates officiis corrupti eum dolorem at reiciendis omnis laborum inventore corporis harum quia itaque aperiam. Veritatis expedita reiciendis culpa, numquam ipsa error porro at eaque repudiandae incidunt hic labore magni illum placeat doloribus distinctio nulla commodi blanditiis architecto. Quaerat earum consequatur nobis ipsam quos praesentium minima illo rem ullam! Officiis quod soluta cupiditate pariatur reiciendis magnam harum tempore nisi quo optio eius mollitia atque sit error cum tempora commodi, repellendus quisquam sint voluptatem et explicabo possimus quasi accusamus? Iste odit, temporibus at ad, quia rem nobis repellat, provident soluta doloremque cumque necessitatibus explicabo maiores similique amet. Tempore error voluptates repellat a pariatur fugiat cupiditate iusto aspernatur. Illum velit suscipit eius, esse sit ex nesciunt consequuntur nostrum laudantium tenetur quasi, aliquam itaque ab! Laudantium amet ab laborum recusandae aspernatur excepturi nobis beatae quos nulla praesentium repellat, repellendus consequuntur cumque harum! Consequatur consectetur non, voluptates laboriosam reiciendis aliquam nostrum fugit beatae qui! Qui, aperiam praesentium asperiores non dolor cum tempora.', 'minggu', 'gratis', 'diterima', '161576539139_foto_wisata.png', '2019-12-16 16:32:19', '2019-12-16 17:16:29'),
(17, 23, 1, 'Pura Naga Berikas', 'Jalan Setapak Njilir, km 12', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, iste similique ex odit dolorem voluptatum fugit in velit tempora itaque dolores adipisci? Harum facere in, dicta ab laudantium ad voluptatibus porro vitae? Mollitia dicta ea animi dignissimos dolor blanditiis ex accusamus! Voluptates exercitationem nisi cupiditate veniam distinctio consectetur labore repellendus illo amet ipsum reprehenderit corporis facilis, excepturi perferendis recusandae vitae, est explicabo molestiae possimus. Harum earum inventore, error aut, explicabo, vel repellendus aperiam iure odit neque debitis quaerat autem porro at facere. At velit ab reprehenderit provident incidunt iure consequuntur, nisi repudiandae commodi sed magni maxime. Tenetur impedit enim repellat dicta nobis, perferendis assumenda error tempora esse quam, quod eligendi molestiae vitae modi voluptas quo ex nulla porro a vero corrupti. Reprehenderit earum aperiam velit eum odio, aspernatur alias ad ut impedit quae sit fugiat quidem, quia blanditiis magni! Officiis harum incidunt aliquam asperiores officia vel aliquid consectetur pariatur quia eius numquam vitae repudiandae, optio nostrum, quasi exercitationem ex, doloribus fuga! Vel molestias provident, delectus minus architecto, sunt fugiat mollitia atque quia aspernatur esse neque accusantium ea enim similique autem tempora ipsa ipsam quidem, aliquid numquam distinctio dolores. Officiis, delectus? Ipsam accusantium mollitia deserunt cum corrupti rerum cupiditate recusandae nostrum, placeat labore sit veritatis pariatur! Perspiciatis sint necessitatibus, molestias architecto consequatur nesciunt vitae beatae dolor aperiam a magnam quae nobis aut at.', 'sabtu, minggu', 'gratis', 'diterima', '171576539291_foto_wisata.png', '2019-12-16 16:34:51', '2019-12-16 17:16:43'),
(18, 24, 6, 'Kampung Luthkye', 'Kampung Luthkye, kabupaten Jargoan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem praesentium cum sunt repudiandae placeat, obcaecati tenetur, amet molestias maxime at eaque tempore quisquam repellat, similique quibusdam sapiente? Alias et nisi perspiciatis quidem quae magni harum, nostrum numquam! Doloribus rem at consequuntur cumque laboriosam officia nobis quasi optio rerum, fugiat porro alias nesciunt iure ex cum eum ratione odit praesentium nisi voluptas. Non iure nihil in enim illum voluptates ea, assumenda laboriosam sint deleniti adipisci repellat inventore repudiandae fugit hic atque, nostrum porro repellendus laudantium optio ipsa vel. Dignissimos neque vel recusandae quibusdam omnis! Eaque, alias praesentium? Iure accusamus totam illum voluptatibus quam est maxime distinctio beatae accusantium voluptatum suscipit eligendi quo aspernatur, facere commodi numquam unde, neque adipisci itaque reiciendis dolorum corporis asperiores? Vero excepturi itaque autem veritatis consequuntur aliquam possimus quam explicabo sapiente. Nobis nemo voluptatibus itaque, porro esse, fugiat commodi repellat perferendis quasi at aperiam? Provident similique neque aliquid repellat saepe fuga quidem, earum vel sunt ipsa dolores laudantium necessitatibus eveniet nobis accusantium ullam cumque atque a. Doloremque architecto at quo facere modi et vel nam ratione illo corporis placeat repellat mollitia, voluptates rerum suscipit officiis nemo velit voluptatibus ad quae, sit earum consequatur! Sunt reiciendis, ipsam obcaecati ut enim qui veritatis molestiae, culpa eaque necessitatibus illo odio repudiandae? Distinctio iste praesentium iure corporis magnam tempora, voluptas non molestias! Corrupti pariatur sint quasi maiores eius aut, reprehenderit dolorem et distinctio sapiente. Quas in, corrupti maxime atque ea, quibusdam ad nam molestiae a, voluptas deserunt cupiditate. Ratione assumenda obcaecati quia pariatur iste ipsum et enim harum! Ipsa aliquid vitae molestiae corrupti, doloremque rem quos voluptas mollitia id rerum, delectus eligendi nostrum ea aperiam excepturi esse consectetur quas consequatur beatae earum omnis, placeat laborum optio magnam. Aspernatur excepturi non vero facilis est a provident, placeat, omnis quaerat dolorum ea nesciunt dicta et explicabo cum. Nihil sint magni unde incidunt. Esse, exercitationem dolorum?', 'selasa, rabu, sabtu', 'gratis', 'diterima', '181576539445_foto_wisata.png', '2019-12-16 16:37:25', '2019-12-16 17:16:55'),
(19, 25, 10, 'Sanggar Tebu Perkasa', 'Jalan Jendral Ahmad Yunus', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, dolor error aliquam iste nihil ratione natus iure maiores nobis eius? Obcaecati voluptates ullam itaque, corrupti exercitationem culpa maxime esse velit cupiditate et aliquam nam voluptate? Tempora reprehenderit itaque ipsum! A neque tempora pariatur fuga cumque vero, quibusdam, nisi dignissimos magni cum esse dolor nulla saepe ad, asperiores autem non. Labore doloremque laboriosam illum aliquam molestias assumenda cumque eos repellendus minima dolore quod, voluptatibus at ipsam doloribus adipisci vero. Officiis aspernatur odio, beatae quibusdam molestiae magni tempora exercitationem ipsam quod est optio ab aut illum voluptates corrupti ullam quis aperiam alias mollitia, aliquid saepe fuga nihil. Ad, natus modi hic asperiores alias quia sit nihil repellat distinctio nostrum veritatis cumque ea voluptatum qui voluptatem a aliquam eaque consequuntur mollitia facere, commodi consectetur vel sequi. Eligendi quam quaerat ab tenetur, eius cumque voluptates enim debitis labore alias magnam ipsam minus quis quibusdam deserunt quos doloremque, vel et facere aut sit iure officiis vero! Error, dolores magnam! Vero quo illum labore beatae iure architecto assumenda laudantium culpa natus deleniti cum, reiciendis eum libero reprehenderit ipsa accusamus nesciunt animi optio voluptas! Temporibus in at iure. Ipsa, earum voluptate. Atque dolorem libero magnam, mollitia numquam quae labore excepturi facilis! Debitis est ad sint amet a fugit illum porro!', 'senin, sabtu', 'gratis', 'diterima', '191576539594_foto_wisata.png', '2019-12-16 16:39:54', '2019-12-16 17:17:09'),
(20, 26, 2, 'Kampung Baru', 'Jalan Triyani Sembilan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi atque facilis, repudiandae quo dolor recusandae deserunt esse eius sunt expedita ab earum eum numquam quam laboriosam rerum consequatur perferendis laudantium dicta quibusdam dignissimos voluptas dolorem. Iste hic ad, facilis temporibus, minus dolor cum sed excepturi voluptate et repellendus mollitia est doloribus labore placeat harum. Aliquam assumenda consequuntur similique voluptatum voluptas aliquid animi porro laboriosam deserunt eveniet tenetur distinctio at possimus, in asperiores, ducimus quaerat nam ratione minus sequi quidem hic laudantium voluptate. Eaque sequi minima eveniet earum commodi similique aliquam amet repellat dicta temporibus illum fugit expedita, culpa iure! Culpa eveniet aliquam deleniti nam voluptates ab, ut optio veniam quia placeat ea ducimus odio rem quos? Repellendus voluptas ipsa eaque corrupti quia optio error magni, impedit doloremque accusamus sunt, ex explicabo, neque placeat praesentium aliquam sint quisquam! Tempora, saepe exercitationem. Excepturi temporibus nisi placeat libero sapiente quo facilis et officiis! Tenetur quo iure vero recusandae sequi placeat earum officiis voluptate error animi atque consectetur, aperiam quaerat! Vitae ratione quo exercitationem ab, eligendi laborum! Dolores excepturi odit placeat, tempore accusantium vel ipsam delectus aperiam vero iste! Dolore, eum, adipisci cumque officiis eaque corporis architecto minus sunt rerum, repellendus distinctio in porro sequi error id? Corporis eius esse minus reiciendis repellendus quae culpa enim animi. Molestiae suscipit quo assumenda commodi amet omnis reiciendis obcaecati.', 'senin, selasa, rabu, sabtu, minggu', 'gratis', 'ditunda', '201576539731_foto_wisata.png', '2019-12-16 16:42:11', '2019-12-16 16:42:11'),
(21, 27, 10, 'Pasar Keemasan', 'Jalan Ahmad Yano, km 17', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi temporibus vel ex magni nostrum possimus nisi in iure. Accusantium perferendis doloribus iusto! Sunt hic, distinctio in fugiat praesentium quasi necessitatibus suscipit velit, architecto et delectus inventore deserunt. Tempora eaque nesciunt corrupti perspiciatis magni nulla cupiditate excepturi in molestias ipsam minima et ad iure modi reprehenderit suscipit deserunt quis voluptates mollitia tempore sequi delectus, impedit quam quod. Hic tenetur ut minus nemo esse, totam architecto fuga ratione cupiditate? Animi impedit possimus, est reprehenderit repellendus et aspernatur soluta unde voluptas quibusdam, expedita aliquid voluptate perspiciatis sapiente obcaecati officiis rem ratione mollitia. Quae ullam repellat aperiam accusamus! Velit, iure! Sequi eum enim modi velit, vitae accusantium nisi ipsum fugit voluptate esse natus atque, ea officiis cum ut beatae corrupti obcaecati mollitia eaque! Laboriosam aliquam ducimus incidunt ad eius reiciendis eligendi aliquid fuga modi, quas accusantium officia, cum tempore et repellat tempora, sed a facilis minus nisi. Voluptatibus molestiae alias accusamus repudiandae tempore, nihil dolor enim totam, expedita vero rerum eum nemo nostrum fuga? Quo nostrum nihil earum repellat magni est numquam asperiores iste sed sint. Debitis, illo perferendis in id nisi neque officiis, dolorum nihil aliquid, veritatis corrupti. Quibusdam ut vitae molestiae itaque, facere aut, et atque repudiandae cupiditate ducimus minima doloremque quaerat fugiat illum eveniet error harum tempora rerum est? Vel rem perferendis odit doloribus optio in minus unde inventore recusandae amet iste obcaecati illum, praesentium accusantium excepturi incidunt quam aliquam animi possimus? Nemo laboriosam quis quas nesciunt ducimus aut cupiditate vitae voluptate adipisci cumque, totam sit ipsum nam omnis qui saepe voluptatem dolorem deleniti? Consectetur delectus, quo eum, fuga laudantium eos quaerat pariatur ipsum qui neque sequi quod! Tenetur, modi repellat quo doloremque nesciunt aspernatur, quia hic adipisci ratione similique iure! Voluptas quisquam fugiat quod facilis perspiciatis magni aut, laboriosam eius molestiae ratione nobis, accusantium blanditiis provident quae officia? Optio dolorum accusantium commodi nemo, iste beatae at, tempore blanditiis nostrum sint nisi.', 'sabtu, minggu', 'gratis', 'diterima', '211576539861_foto_wisata.png', '2019-12-16 16:44:20', '2019-12-16 17:17:40'),
(22, 28, 8, 'Museum Istana Garok', 'Jalan Kemanapurna, km12, dekat Indoapril Seventen', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi temporibus vel ex magni nostrum possimus nisi in iure. Accusantium perferendis doloribus iusto! Sunt hic, distinctio in fugiat praesentium quasi necessitatibus suscipit velit, architecto et delectus inventore deserunt. Tempora eaque nesciunt corrupti perspiciatis magni nulla cupiditate excepturi in molestias ipsam minima et ad iure modi reprehenderit suscipit deserunt quis voluptates mollitia tempore sequi delectus, impedit quam quod. Hic tenetur ut minus nemo esse, totam architecto fuga ratione cupiditate? Animi impedit possimus, est reprehenderit repellendus et aspernatur soluta unde voluptas quibusdam, expedita aliquid voluptate perspiciatis sapiente obcaecati officiis rem ratione mollitia. Quae ullam repellat aperiam accusamus! Velit, iure! Sequi eum enim modi velit, vitae accusantium nisi ipsum fugit voluptate esse natus atque, ea officiis cum ut beatae corrupti obcaecati mollitia eaque! Laboriosam aliquam ducimus incidunt ad eius reiciendis eligendi aliquid fuga modi, quas accusantium officia, cum tempore et repellat tempora, sed a facilis minus nisi. Voluptatibus molestiae alias accusamus repudiandae tempore, nihil dolor enim totam, expedita vero rerum eum nemo nostrum fuga? Quo nostrum nihil earum repellat magni est numquam asperiores iste sed sint. Debitis, illo perferendis in id nisi neque officiis, dolorum nihil aliquid, veritatis corrupti. Quibusdam ut vitae molestiae itaque, facere aut, et atque repudiandae cupiditate ducimus minima doloremque quaerat fugiat illum eveniet error harum tempora rerum est? Vel rem perferendis odit doloribus optio in minus unde inventore recusandae amet iste obcaecati illum, praesentium accusantium excepturi incidunt quam aliquam animi possimus? Nemo laboriosam quis quas nesciunt ducimus aut cupiditate vitae voluptate adipisci cumque, totam sit ipsum nam omnis qui saepe voluptatem dolorem deleniti? Consectetur delectus, quo eum, fuga laudantium eos quaerat pariatur ipsum qui neque sequi quod! Tenetur, modi repellat quo doloremque nesciunt aspernatur, quia hic adipisci ratione similique iure! Voluptas quisquam fugiat quod facilis perspiciatis magni aut, laboriosam eius molestiae ratione nobis, accusantium blanditiis provident quae officia? Optio dolorum accusantium commodi nemo, iste beatae at, tempore blanditiis nostrum sint nisi.', 'senin, selasa, rabu, kamis, jumat, sabtu, minggu', 'gratis', 'diterima', '221576540098_foto_wisata.png', '2019-12-16 16:48:18', '2019-12-16 17:17:27'),
(23, 29, 7, 'Pulau Harapan', 'Pantai Parangtritis, daerah gunung Kidul', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt ratione asperiores ea laboriosam soluta, assumenda voluptatum obcaecati sed. Voluptates aperiam ab esse facere quod. Labore, nulla neque. Voluptatem eveniet modi, temporibus unde pariatur totam. Dolores voluptatibus amet rerum possimus? Aliquam iure, dignissimos doloribus unde quos necessitatibus quisquam autem neque molestias asperiores eos adipisci quam minima id tempore quod quasi. Natus recusandae dicta dignissimos eius quas minus explicabo tempore modi sit eligendi soluta perspiciatis praesentium suscipit, voluptates ullam, deleniti mollitia iste exercitationem iure! Delectus mollitia qui ab quis pariatur vero porro perspiciatis nemo quos deserunt enim impedit rem, cum eaque culpa itaque? Alias, quo repellendus saepe assumenda numquam a vel! Excepturi, animi ducimus a, ut sit vel et maxime quis minus beatae ab minima eum provident cum. Quae aliquid quisquam distinctio doloribus labore enim, sapiente eaque ea! Ipsum quisquam ullam iusto consequuntur dignissimos rerum minima, animi sapiente unde iste alias nam quibusdam? Dicta unde consequatur officiis, tempore explicabo architecto, recusandae quas vel pariatur quidem qui, sunt velit. Nihil quos maiores voluptates molestias, repellendus, dolor incidunt, accusantium assumenda mollitia cumque quis temporibus quo quia commodi nostrum nesciunt omnis id itaque ex necessitatibus consequuntur iusto reprehenderit beatae! Voluptates quo eaque eum voluptate quidem provident, fugiat neque explicabo repellendus, praesentium fugit! Sed, sequi beatae! Eaque excepturi ad ipsam voluptatem laudantium rerum doloremque temporibus optio iste dolorum tenetur aspernatur, dolore provident nemo dolores tempore ipsa est ab molestias fugiat eum. Nesciunt pariatur veritatis deserunt eum numquam fuga accusamus, non consectetur, dolores impedit aliquam eligendi magni provident facere, aperiam atque? Dolorum necessitatibus sed dolore pariatur fugiat molestias quaerat, expedita sequi doloremque quos totam molestiae quibusdam tenetur eveniet, reprehenderit magni minima similique ipsam laboriosam beatae. Et, suscipit, eos rem minus quasi nisi molestias recusandae animi asperiores reiciendis officiis beatae esse fugiat facere eligendi nostrum unde non placeat. Molestiae adipisci exercitationem earum labore. Cum laborum ullam quae rem, possimus magnam tenetur asperiores facilis ea quas debitis qui, alias ratione dicta repellendus aliquam odio laudantium odit fugiat quidem aut natus quia harum. Eaque aperiam harum molestias ut voluptatum earum libero excepturi nisi quidem magnam? Beatae illum illo error porro rem tempore vero quaerat natus tenetur rerum, iusto dolore maiores quasi! Repellendus porro tenetur atque rem quae expedita itaque harum accusantium dignissimos. Qui similique nulla minima, soluta eaque mollitia suscipit ut odit velit vitae ullam nihil esse doloremque reiciendis beatae, dolorum accusantium culpa quibusdam blanditiis! Reprehenderit veritatis sit officia. Labore sequi ex sit, in, aliquid unde beatae accusamus architecto repellendus esse molestiae odio alias natus nesciunt culpa harum adipisci, odit suscipit. Suscipit.', 'senin, selasa, rabu, kamis, jumat, sabtu, minggu', 'gratis', 'ditunda', '231576540919_foto_wisata.png', '2019-12-16 17:01:59', '2019-12-16 17:01:59'),
(24, 30, 5, 'Rumah Batik Kukuruyuk', 'Jalan Samini, kabupaten Serwuli', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt ratione asperiores ea laboriosam soluta, assumenda voluptatum obcaecati sed. Voluptates aperiam ab esse facere quod. Labore, nulla neque. Voluptatem eveniet modi, temporibus unde pariatur totam. Dolores voluptatibus amet rerum possimus? Aliquam iure, dignissimos doloribus unde quos necessitatibus quisquam autem neque molestias asperiores eos adipisci quam minima id tempore quod quasi. Natus recusandae dicta dignissimos eius quas minus explicabo tempore modi sit eligendi soluta perspiciatis praesentium suscipit, voluptates ullam, deleniti mollitia iste exercitationem iure! Delectus mollitia qui ab quis pariatur vero porro perspiciatis nemo quos deserunt enim impedit rem, cum eaque culpa itaque? Alias, quo repellendus saepe assumenda numquam a vel! Excepturi, animi ducimus a, ut sit vel et maxime quis minus beatae ab minima eum provident cum. Quae aliquid quisquam distinctio doloribus labore enim, sapiente eaque ea! Ipsum quisquam ullam iusto consequuntur dignissimos rerum minima, animi sapiente unde iste alias nam quibusdam? Dicta unde consequatur officiis, tempore explicabo architecto, recusandae quas vel pariatur quidem qui, sunt velit. Nihil quos maiores voluptates molestias, repellendus, dolor incidunt, accusantium assumenda mollitia cumque quis temporibus quo quia commodi nostrum nesciunt omnis id itaque ex necessitatibus consequuntur iusto reprehenderit beatae! Voluptates quo eaque eum voluptate quidem provident, fugiat neque explicabo repellendus, praesentium fugit! Sed, sequi beatae! Eaque excepturi ad ipsam voluptatem laudantium rerum doloremque temporibus optio iste dolorum tenetur aspernatur, dolore provident nemo dolores tempore ipsa est ab molestias fugiat eum. Nesciunt pariatur veritatis deserunt eum numquam fuga accusamus, non consectetur, dolores impedit aliquam eligendi magni provident facere, aperiam atque? Dolorum necessitatibus sed dolore pariatur fugiat molestias quaerat, expedita sequi doloremque quos totam molestiae quibusdam tenetur eveniet, reprehenderit magni minima similique ipsam laboriosam beatae. Et, suscipit, eos rem minus quasi nisi molestias recusandae animi asperiores reiciendis officiis beatae esse fugiat facere eligendi nostrum unde non placeat. Molestiae adipisci exercitationem earum labore. Cum laborum ullam quae rem, possimus magnam tenetur asperiores facilis ea quas debitis qui, alias ratione dicta repellendus aliquam odio laudantium odit fugiat quidem aut natus quia harum. Eaque aperiam harum molestias ut voluptatum earum libero excepturi nisi quidem magnam? Beatae illum illo error porro rem tempore vero quaerat natus tenetur rerum, iusto dolore maiores quasi! Repellendus porro tenetur atque rem quae expedita itaque harum accusantium dignissimos. Qui similique nulla minima, soluta eaque mollitia suscipit ut odit velit vitae ullam nihil esse doloremque reiciendis beatae, dolorum accusantium culpa quibusdam blanditiis! Reprehenderit veritatis sit officia. Labore sequi ex sit, in, aliquid unde beatae accusamus architecto repellendus esse molestiae odio alias natus nesciunt culpa harum adipisci, odit suscipit. Suscipit.', 'senin, selasa, rabu, kamis, jumat, sabtu, minggu', 'gratis', 'ditunda', '241576541056_foto_wisata.png', '2019-12-16 17:04:16', '2019-12-16 17:04:16'),
(25, 31, 2, 'Desa Ampik', 'Desa Ampik, kabupaten Jeihaleha', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, porro. Aliquam sint saepe rerum laboriosam, minus commodi culpa! Quaerat quisquam impedit neque ab perspiciatis a fugiat iusto distinctio repellat odit, deserunt dolore placeat cum aspernatur vel natus nulla? Voluptatibus vel minus, eum repellat aspernatur culpa laudantium necessitatibus animi magni itaque eligendi ratione deserunt dolorum praesentium est, neque, nihil magnam facilis aliquam quisquam? Iste, mollitia esse. Laudantium dolorum sed velit? Earum id voluptatum accusamus dolor minima in cum fugit nam qui nisi repellendus, exercitationem, adipisci animi hic. Nihil quam at, cum ipsam alias quisquam ut voluptatem, eos sit, mollitia laboriosam? Alias facilis, facere nemo vitae aspernatur culpa odit eius laudantium ipsam ullam at illum qui explicabo reprehenderit hic et fugit, dignissimos cum nihil eligendi amet sapiente tenetur modi? Alias error, beatae modi nobis ut perferendis, recusandae dolores, molestiae debitis natus velit animi delectus! Ratione numquam nulla provident, consectetur, tempora in doloremque consequatur neque quaerat eum inventore error nisi omnis sed debitis, quos dolorum? Maiores esse sunt delectus sequi debitis dolorum quo voluptates tenetur nihil quis, nemo nisi cupiditate unde alias tempore ut sapiente nesciunt accusantium! Harum, iure quas ducimus perferendis, vitae atque voluptatibus dolores laborum cumque minus alias voluptatum sequi ad quidem accusamus libero impedit nostrum distinctio tempore! Iure magnam iusto repellendus ipsam saepe? Velit architecto ex aperiam repellat neque saepe nesciunt est! Blanditiis veritatis iusto quas inventore dignissimos maxime. Accusantium, doloremque? Vel ut facere eos sint rerum vitae error ipsam eius beatae officia.', 'senin, selasa, rabu, kamis, jumat, sabtu, minggu', 'gratis', 'diterima', '251576541261_foto_wisata.png', '2019-12-16 17:07:41', '2019-12-16 17:17:20'),
(27, 35, 1, 'Coba1', 'jalan di coba', 'coba desc', 'selasa, sabtu, minggu', 'gratis', 'diterima', NULL, '2020-06-24 02:51:02', '2020-06-24 02:51:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_email_unique` (`email`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
