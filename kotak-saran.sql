-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 04:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kotak-saran`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `user_uuid` varchar(255) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id`, `uuid`, `user_uuid`, `departemen`, `created_at`, `modified_at`) VALUES
(1, '66c8b282-9c49-40d3-85a0-257edc2160b6', '000', 'PDQC', '2024-02-28 09:48:40', '2024-02-28 09:48:40'),
(2, '73e68eee-2615-4557-9e1a-6b6371c35ccd', '000', 'Engineering', '2024-02-28 09:48:46', '2024-02-28 09:48:46'),
(4, 'ee68310c-ea16-4a7b-bde7-d38fe5c4c47d', '000', 'PGA', '2024-02-28 09:49:02', '2024-02-28 09:49:02'),
(5, 'c6d788ee-9bc4-4441-9722-5127eb3111d8', '000', 'PPIC', '2024-02-28 09:49:06', '2024-02-28 09:49:06'),
(6, '3622efc5-b2f8-4370-acb0-4833617fa0af', '000', 'Produksi', '2024-02-28 09:49:17', '2024-02-28 09:49:17'),
(7, 'a69f6469-8389-4d8b-806f-b6d5d4591560', '000', 'Warehouse', '2024-02-28 09:49:22', '2024-02-28 09:49:22'),
(9, 'ace413b4-b05d-4ff6-8bba-2efcb699cfbb', 'harnis', 'DGM Plant', '2024-07-15 09:21:48', '2024-07-17 09:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `plant` varchar(255) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `tipe_user` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `uuid`, `nama`, `username`, `password`, `email`, `plant`, `departemen`, `tipe_user`, `created_at`, `modified_at`) VALUES
(1, 'c8f6b7df-8bf8-4152-8bec-48b43418611c', 'Putri Harnis', 'harnis', '$2y$10$aBaKYwziC3AzQDJ2gweB0eK/1GFXbxDMTDwHv6tl2aZXoOXiQdqMy', 'putri.harnis@cp.co.id', 'bc036c0f-583a-40ce-8b65-36255e250612', '66c8b282-9c49-40d3-85a0-257edc2160b6', '0', '2024-02-28 09:51:31', '2024-06-05 11:43:26'),
(8, '2018fbec-243a-4f1f-9e02-3e701ada1b03', 'Guest', 'guest', '$2y$10$fmx4FuatpXsyRPZfaewNAO8x0cZLMC/lDEe50eUIQDKfhi2WNgCs.', '', 'bc036c0f-583a-40ce-8b65-36255e250612', '66c8b282-9c49-40d3-85a0-257edc2160b6', '4', '2024-07-17 08:30:52', '2024-07-17 08:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `user_uuid` varchar(255) NOT NULL,
  `plant` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `uuid`, `user_uuid`, `plant`, `created_at`, `modified_at`) VALUES
(3, 'bc036c0f-583a-40ce-8b65-36255e250612', 'harnis', 'Cikande 2 RTM', '2024-06-04 14:30:46', '2024-06-04 14:30:46'),
(4, '84cfb0f6-2a19-4512-8c23-6760214215df', 'harnis', 'Cikande 2 BCNS', '2024-06-04 14:31:00', '2024-06-04 14:31:00'),
(5, '192e7a92-3664-4b0c-9b12-d33f257c78e5', 'harnis', 'Cikande 2 Retort', '2024-06-04 14:31:11', '2024-06-04 14:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `plant` varchar(255) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `saran` varchar(700) NOT NULL,
  `bukti_lapor` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `uuid`, `username`, `date`, `plant`, `departemen`, `lokasi`, `topik`, `saran`, `bukti_lapor`, `created_at`, `modified_at`) VALUES
(1, 'e176c108-11d7-46a2-a41e-a0d271cbcdf0', 'harnis', '2024-07-16', 'bc036c0f-583a-40ce-8b65-36255e250612', 'c6d788ee-9bc4-4441-9722-5127eb3111d8', 'Ruang Sticker', 'Perbaikan Sarana Prasarana', 'Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton Perbaiki Mesin Print Karton ', '14719a922062c7864019b466e17a3120.png', '2024-07-16 09:28:58', '2024-07-16 11:49:18'),
(2, '1cf116a8-4357-48d1-9081-1fd65c59e0c9', 'harnis', '2024-07-16', 'bc036c0f-583a-40ce-8b65-36255e250612', '3622efc5-b2f8-4370-acb0-4833617fa0af', 'Ruang Sticker', 'Perbaikan Sikap Kerja Karyawan', 'asfasfasfasf', '', '2024-07-16 16:13:19', '2024-07-17 08:15:34'),
(3, '59382e34-6c81-4c5f-a944-e1cd58abc97e', 'harnis', '2024-07-16', 'bc036c0f-583a-40ce-8b65-36255e250612', '73e68eee-2615-4557-9e1a-6b6371c35ccd', 'Ruang Sticker', 'Perbaikan Sarana Prasarana', 'adfafasf', 'b5e171643928f76ccb3f55de10fbf36c.png', '2024-07-16 16:17:31', '2024-07-16 16:17:31'),
(4, '6c102e1a-65e5-4b30-8369-f3d7f51a4742', 'harnis', '2024-07-16', 'bc036c0f-583a-40ce-8b65-36255e250612', '66c8b282-9c49-40d3-85a0-257edc2160b6', 'Portioning', 'Perbaikan Sikap Kerja Karyawan', 'dxhfhsh', '8e448da7549760cc383f523f9e405042.jpeg', '2024-07-16 16:21:47', '2024-07-16 16:21:47'),
(9, 'b92c00f6-ae27-42f8-a441-18c8fdf4cca4', '', '2024-07-16', '84cfb0f6-2a19-4512-8c23-6760214215df', 'a69f6469-8389-4d8b-806f-b6d5d4591560', 'Sidoarjo', 'Perbaikan Sistem Kerja', 'Fhhffh', '', '2024-07-16 16:40:09', '2024-07-16 16:40:09'),
(12, '78057b6e-868c-4576-a9f8-8af2389e5dcc', 'guest', '2024-07-17', 'bc036c0f-583a-40ce-8b65-36255e250612', '66c8b282-9c49-40d3-85a0-257edc2160b6', 'Ruang Packing', 'Perbaikan Kondisi Area Kerja', 'Ruang packing berantakan', '', '2024-07-17 08:58:39', '2024-07-17 08:58:39'),
(13, '2c3e62b3-cf20-4096-ba65-ddb6c77ed9fe', '', '2024-07-17', 'bc036c0f-583a-40ce-8b65-36255e250612', '66c8b282-9c49-40d3-85a0-257edc2160b6', 'Admin QC', 'Perbaikan Sikap Kerja Karyawan', 'Admin QC RTM tolong sikapnya dijaga ya', '', '2024-07-17 09:01:12', '2024-07-17 09:01:12'),
(14, '17eea9fb-8c3a-4ec3-b3c8-ce5e8f76403f', '', '2024-07-17', 'bc036c0f-583a-40ce-8b65-36255e250612', '66c8b282-9c49-40d3-85a0-257edc2160b6', 'Admin QC', 'Perbaikan Sikap Kerja Karyawan', 'Admin QC RTM tolong sikapnya dijaga ya', '', '2024-07-17 09:01:17', '2024-07-17 09:01:17'),
(15, '4ea56499-c521-48ae-b970-e43bcdad1ac4', '', '2024-07-17', 'bc036c0f-583a-40ce-8b65-36255e250612', '66c8b282-9c49-40d3-85a0-257edc2160b6', 'Admin QC', 'Perbaikan Sikap Kerja Karyawan', 'Admin QC RTM tolong sikapnya dijaga ya', 'cd7147c168ac2fc6dfb20ff39271878e.jpg', '2024-07-17 09:01:33', '2024-07-17 09:01:33'),
(16, '66d4d113-b16e-4f7d-91fd-f8f8aace24aa', '', '2024-07-17', '192e7a92-3664-4b0c-9b12-d33f257c78e5', '3622efc5-b2f8-4370-acb0-4833617fa0af', 'MP', 'Perbaikan Sarana Prasarana', 'Lantai retak', '95e36adf5ea24b93246869702dcc8b5d.jpg', '2024-07-17 15:41:37', '2024-07-17 15:41:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
