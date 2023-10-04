-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 06:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketflickdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_no` int(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_no`, `city_name`, `city_img`) VALUES
(1, 'Bangalore', '64c8ad3b65b15.jpg'),
(2, 'Delhi', '64c8ad4598418.jpg'),
(3, 'Mumbai', '64c8ad4f8f1b9.jpg'),
(4, 'Hyderabad', '64c8ad5d85688.jpg'),
(5, 'Chennai', '64c8ad68ed6a6.jpg'),
(6, 'Kolkata', '64c8ad7fe2a22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(255) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_img` varchar(255) NOT NULL,
  `movie_hero` varchar(255) NOT NULL,
  `movie_heroin` varchar(255) NOT NULL,
  `movie_director` varchar(255) NOT NULL,
  `city_id` int(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_img`, `movie_hero`, `movie_heroin`, `movie_director`, `city_id`, `time`) VALUES
(1, 'Killer Of The Flower Moon', '64c8ad0e0765e.jpg', 'Leonardo DiCaprio', 'Lily Gladstone', 'Martin Scorsese', 1, '2023-08-01 12:28:22'),
(2, 'Barbie', '64c8adbbb682d.jpg', 'Ryan Gosling', 'Margot Robbie', 'Greta Gerwig', 1, '2023-08-01 12:31:15'),
(3, 'Tess', '64c8ade7d9c64.jpg', 'Peter Firth', 'Nastassja Kinski', 'Roman Polanski', 1, '2023-08-01 12:31:59'),
(4, 'Oppenheimer', '64c8ae24731f8.jpg', 'Cillian Murphu', 'Emily Blunt', 'Christopher Nolan', 1, '2023-08-01 12:33:00'),
(5, 'Ranjhanna', '64c8ae4e6db9d.jpg', 'Dhanush', 'Sonam Kapoor', 'Anand L Rai', 1, '2023-08-01 12:33:42'),
(6, 'Barbie', '64c8adbbb682d.jpg', 'Ryan Gosling', 'Margot Robbie', 'Greta Gerwig', 2, '2023-08-01 12:31:15'),
(7, 'Oppenheimer', '64c8ae24731f8.jpg', 'Cillian Murphu', 'Emily Blunt', 'Christopher Nolan', 2, '2023-08-01 12:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mobno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `theatres1`
--

CREATE TABLE `theatres1` (
  `t_id` int(255) NOT NULL,
  `t_type` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `city_id` int(255) NOT NULL,
  `movie_id` int(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatres1`
--

INSERT INTO `theatres1` (`t_id`, `t_type`, `t_name`, `t_address`, `city_id`, `movie_id`, `time`) VALUES
(1, 'PVR:4DX', 'Orion Mall', 'Dr. Ralkumar Road', 1, 2, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails1`
--

CREATE TABLE `userdetails1` (
  `sno` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails1`
--

INSERT INTO `userdetails1` (`sno`, `username`, `email`, `phoneno`, `password`, `date`) VALUES
(1, 'sanc', 'sanc@gmail.com', 2147483647, '1234567890', '0000-00-00'),
(2, 'sanchay', 'sanchayagrawal11@gmail.com', 2147483647, '1234567890', '0000-00-00'),
(3, 'samrith', 's@gmail.com', 2147483647, '$2y$10$DvVUt2hl/NwQDrKAomY3XugnKcIkcBOgbr.35VNeZeP7MDU3lagFq', '2023-08-01'),
(4, '1234', 'sanchay@gmail.com', 2147483647, '$2y$10$LMo6cDiNiOsIkpd/QL8O7ucJPbV/RBhEsIy1lahM76gGmh.zO5yJK', '2023-08-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_no`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `userdetails1`
--
ALTER TABLE `userdetails1`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdetails1`
--
ALTER TABLE `userdetails1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
