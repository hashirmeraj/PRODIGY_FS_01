-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 29, 2024 at 05:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(115) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `user_name`, `user_email`, `user_password`, `date_time`) VALUES
(1, 'Hashir Meraj', 'hashir@gmail.com', '123', '2024-08-29 13:39:01'),
(2, 'HASHIR', 'H', '1', '2024-08-29 13:53:36'),
(3, 'Saad', 'saad@gmail.com', '$2y$10$jeTXYdke/pdKe9YebKCkq.uibAlV1hgA/avfbfBkw018NUPtlCoWO', '2024-08-29 13:57:11'),
(4, 'Arsalan', 'a@a', '$2y$10$unl4EgbwpZhzrnRvht79k.TZgUDkbmMWFVJwDsynMX/0JYr4TbzM6', '2024-08-29 13:58:57'),
(5, 'Arsalan', 'a@a1', '$2y$10$Ev3D/8PTr7Znq3XjZoX8PeRc5R9mqrZ9ED.RHw5B1J/qpsKFGSJGi', '2024-08-29 13:59:23'),
(6, 'Saad', '1@1', '$2y$10$jlADKqJd2bWqIsckUndqo.iiP8OurqJHnfRwohahjbF7oTI3aTbqK', '2024-08-29 14:00:42'),
(7, 'Hashir Meraj', 'hashirmeraj@gmail.com', '$2y$10$srIAmLhqVkvxyTcRWT41eOlJaYRUwsqShsSWuz.QBGQy/0oCf22O.', '2024-08-29 14:20:09'),
(8, 'Saad', 'hashirmeraj1@gmail.com', '$2y$10$T/J/np1GYfatTePZasVBYeK.iAUM1R9prYCYn/IVHBtlcUwu3NZpO', '2024-08-29 15:30:49'),
(9, 'Arsalan', '1@111', '$2y$10$lgdFcz4scup6fkIux8JtdehCbRe2.FzIy8onlupYnBEIGcXwtabj6', '2024-08-29 15:45:47'),
(10, 'Saad Ahmed', 'saa1@gmail.com', '$2y$10$jsTiqpUohgom1oANP5WeteqTPYHg7QvSxu0B2p1Gg7oX3v1swK.LC', '2024-08-29 15:53:34'),
(11, 'Saad', '11@11', '$2y$10$OC/eRe4eYzdGUSkZDk8gY.oMNRGxSiiBOir3uGHQr/Fpjh.JhQY9m', '2024-08-29 16:22:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(115) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
