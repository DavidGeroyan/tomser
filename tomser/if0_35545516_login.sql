-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql211.infinityfree.com
-- Generation Time: Dec 04, 2023 at 03:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35545516_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `surname`, `email`, `subject`, `message`, `id`) VALUES
('David', 'Gero', 'david.gero.2005@gmail.com', 'asdas', 'asdasd', 18),
('David', 'Gero', 'david.gero.2005@gmail.com', 'asdas', 'asdasd', 19),
('David', 'Gero', 'david.gero.2005@gmail.com', 'asdas', 'asdasd', 20),
('123', '123', 'l@gmail.com', '123', '1115', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_login` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(15) NOT NULL,
  `film` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_login`, `address`, `phone`, `film`) VALUES
(700, '123', 'asdasdasd', 94957731, 'THE MARVELS - Quantity: 12\nNAPOLEON - Quantity: 7\n'),
(701, '123', 'asdasdasd', 94957731, 'THE MARVELS - Quantity: 12\nNAPOLEON - Quantity: 7\n'),
(702, '123', 'asdasdasd', 94957731, 'THE MARVELS - Quantity: 4\nWISH - Quantity: 7\n'),
(703, '123', 'asdasdasd', 94957731, 'THE MARVELS - Quantity: 4\nWISH - Quantity: 7\n'),
(704, '123', 'asdasdasd', 94957731, 'THE MARVELS - Quantity: 4\nWISH - Quantity: 7\n'),
(705, '1111', 'asdasdasd', 123456, 'FREDDY - Quantity: 4\nWISH - Quantity: 7\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(91, '123', '123'),
(92, 'David', '123456'),
(93, '1111', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
