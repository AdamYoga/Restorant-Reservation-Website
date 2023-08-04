-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 07:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaguarguar`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `people` int(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `original_filename` varchar(255) DEFAULT NULL,
  `encrypted_filename` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Accepted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `date`, `time`, `people`, `message`, `original_filename`, `encrypted_filename`, `status`, `created_at`, `updated_at`) VALUES
(1, 'haloo', 'halo@gmail.com', '08768923527', '2023-08-02', '16:25:00', 76, 'uy', NULL, NULL, 'Not Accepted', NULL, NULL),
(2, 'halooo', 'rizki@gmail.com', '85607358725', '2023-07-26', '16:41:00', 65, 'rtyuy', NULL, NULL, 'Not Accepted', NULL, NULL),
(3, 'haloo000', 'nabila@gmail.com', '08768923527', '2023-08-04', '17:06:00', 87, 'yuiyhkhk', NULL, NULL, 'Not Accepted', NULL, NULL),
(4, 'asdfghj', 'nabila@gmail.com', '08768923527', '2023-07-28', '17:11:00', 65, 'kg', NULL, NULL, 'Not Accepted', NULL, NULL),
(5, 'rizkiiafifatus', 'rizki@gmail.com', '08768923527', '2023-07-27', '17:18:00', 12, 'ghgjj', NULL, NULL, 'Not Accepted', NULL, NULL),
(6, 'asdfghj', 'rizkii@gmail.com', '08768923527', '2023-08-24', '14:14:00', 19, 'uhhdwjkjhdl', NULL, NULL, 'Not Accepted', NULL, NULL),
(7, 'asdfghj', 'rizkii@gmail.com', '85607358725', '2023-08-26', '14:16:00', 20, 'jhdaejkwl', NULL, NULL, 'Not Accepted', NULL, NULL),
(8, 'hkdsfhla', 'dsad@gmail.com', '518639170', '2023-08-19', '19:01:00', 10, 'sfhsdfjlw', NULL, NULL, 'Not Accepted', NULL, NULL),
(9, 'Danis', 'nabilaindrii03@gmail.com', '081291887161', '2023-08-10', '22:07:00', 23, 'ere', NULL, NULL, 'Not Accepted', NULL, NULL),
(10, 'dessertqu', 'arayaalf99@gmail.com', '081291887161', '2023-08-17', '23:31:00', 2, 'gatau', 'Screenshot (1).png', 'lqtq8Wpf2MJ4PbWpJjGiP5UmTCJAheNii7U8YpkL.png', 'Accepted', NULL, '2023-08-02 10:16:01'),
(11, 'nab', 'bila12@gmail.com', '085676543298', '2023-08-18', '20:38:00', 3, 'hmm', 'Screenshot (22).png', 'Rd2itqOZQRL4pHghdnnrsffV50HF4vE2uFxTQvxT.png', 'Accepted', NULL, '2023-08-02 10:16:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
