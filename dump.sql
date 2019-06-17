-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2019 at 04:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TestDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `TestTable`
--

CREATE TABLE `TestTable` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_latvian_ci NOT NULL,
  `description` text COLLATE utf8_latvian_ci,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `TestTable`
--

INSERT INTO `TestTable` (`id`, `title`, `description`, `date_added`, `done`) VALUES
(1, 'Test task number 1', 'Very comprehensive description of the task number 1', '2019-06-16 13:31:00', 1),
(9, 'Task 2', 'Some description', '2019-06-18 20:45:31', 0),
(11, 'Task 3 (no description)', '', '2018-12-01 21:54:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TestTable`
--
ALTER TABLE `TestTable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TestTable`
--
ALTER TABLE `TestTable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
