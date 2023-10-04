-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 07:11 AM
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
-- Database: `samrithdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_no` int(8) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `city_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_no`, `city_name`, `city_img`) VALUES
(1, 'Bangalore', '63bbfb308212c.jpg'),
(2, 'Chennai', '63bc004251c8d.jpg'),
(3, 'Mumbai', '63bc0250939c0.jpg'),
(4, 'Delhi', '63bc0e9f76f46.jpg'),
(5, 'Hyderbad', '63bc2602922db.jpg'),
(6, 'Kolkata', '63bc2617cda3e.jpg'),
(9, 'Me before you', '649a821c4b723.jpg'),
(10, 'Me before you', '649a825713f36.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `concern` text NOT NULL,
  `dt` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES
('Samrith', 'Samrith@gmail.com', 'Nice and good', 2147483647),
('Mrudhula', 'm@gmail.com', 'She is the one', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `sno` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(8) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_img` varchar(255) NOT NULL,
  `movie_hero` varchar(255) NOT NULL,
  `movie_heroin` varchar(255) NOT NULL,
  `movie_director` varchar(255) NOT NULL,
  `city_id` int(8) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_img`, `movie_hero`, `movie_heroin`, `movie_director`, `city_id`, `time`) VALUES
(1, 'Raanjhanna', '63bd5af1922d2.jpg', 'Dhanush', 'Sonam Kapoor', 'Anadh L Rai', 1, '2023-01-10 18:02:49'),
(2, 'Love,Rosie', '63bd657513911.jpg', 'Sam Claffin', 'Lilly Collins', 'Christian Ditter', 2, '2023-01-10 18:47:41'),
(3, 'Love,Rosie', '63bd657513911.jpg', 'Sam Claffin', 'Lilly Collins', 'Christian Ditter', 1, '2023-01-10 18:47:41'),
(4, 'Tess', '63db427111f09.jpg', 'Peter Firth', ' Nastassja Kinski', 'Roman Polanksi', 1, '2023-02-02 10:26:17'),
(5, 'Tess', '63db427111f09.jpg', 'Peter Firth', ' Nastassja Kinski', 'Roman Polanksi', 2, '2023-02-02 10:26:17'),
(6, 'Before Sunrise', '63db43cc9f714.jpg', 'Ethan Hawke', 'Julie Delpy', 'Richard Linklater', 1, '2023-02-02 10:32:04'),
(7, 'Before Sunrise', '63db43cc9f714.jpg', 'Ethan Hawke', 'Julie Delpy', 'Richard Linklater', 2, '2023-02-02 10:32:04'),
(8, 'Me before you', '649a82e3d7607.jpg', 'sam clafflin', 'emilia clarke', 'Thea sharrock', 1, '2023-06-27 12:04:11'),
(9, 'Me before you', '649a82e3d7607.jpg', 'sam clafflin', 'emilia clarke', 'Thea sharrock', 2, '2023-06-27 12:04:11'),
(10, 'Past Lives', '64b62d65ba7e9.jpg', 'null', 'Greata lee', 'Celine song', 1, '2023-07-18 11:42:53'),
(11, 'Barbie', '64b62db64932c.jpg', 'Ryan Gossling', 'Margot robbie', 'Greta Gregwig', 1, '2023-07-18 11:44:14'),
(12, 'Oppenheimer', '64b62df711d62.jpg', 'Cillian Murphy', 'Emily blunt', 'Christopher Nolan', 1, '2023-07-18 11:45:19'),
(13, 'Killers of the Flower Moon', '64b62effe1fd8.jpg', 'Leo dicaprio', 'Lily Gladstone', 'Martin Scorcese', 1, '2023-07-18 11:49:43'),
(14, 'Barbie', '64b62db64932c.jpg', 'Ryan Gossling', 'Margot robbie', 'Greta Gregwig', 2, '2023-07-18 11:44:14'),
(15, 'Oppenheimer', '64b62df711d62.jpg', 'Cillian Murphy', 'Emily blunt', 'Christopher Nolan', 2, '2023-07-18 11:45:19'),
(16, 'Killers of the Flower Moon', '64b62effe1fd8.jpg', 'Leo dicaprio', 'Lily Gladstone', 'Martin Scorcese', 2, '2023-07-18 11:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(100) NOT NULL,
  `cpassword` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email`, `password`, `cpassword`, `date`) VALUES
('Yuvan', 'yuvanworld@gmail.com', 654321, 654321, '2023-01-03'),
('Samrith', 'Samrith@gmail.com', 123456, 123456, '2023-01-04'),
('Ram', 'ram@gmail.com', 45678, 45678, '2023-01-04'),
('Ajth', 'a@gmail.com', 56789, 56789, '2023-01-04'),
('Muthukumar', 'namu@gmail.com', 45678, 45678, '2023-01-04'),
('Mrudhula', 'm@gmail.com', 31232003, 31232003, '2023-01-04'),
('Selvaraghavan', 'selva@gmail.com', 1234, 1234, '2023-01-04'),
('Haricharan', 'h@gmail.com', 987, 987, '2023-01-05'),
('Sanjay', 'sanjay@gmail.com', 1234, 1234, '2023-01-05'),
('Samrith', 'samrithsanjoo@gmail.com', 0, 0, '2023-01-05'),
('Samrith', 'samrithsanjoo@gmail.com', 0, 0, '2023-01-05'),
('Samrith', 'samrithsanjoo@gmail.com', 0, 0, '2023-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE `theatres` (
  `t_id` int(8) NOT NULL,
  `t_type` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theatres1`
--

CREATE TABLE `theatres1` (
  `t_id` int(8) NOT NULL,
  `t_type` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `city_id` int(8) NOT NULL,
  `movie_id` int(8) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theatres1`
--

INSERT INTO `theatres1` (`t_id`, `t_type`, `t_name`, `t_address`, `city_id`, `movie_id`, `time`) VALUES
(1, 'PVR:4DX', 'Orion Mall', 'Dr.Rajkumar Road', 1, 1, '2023-01-10 19:24:59'),
(2, 'INOX:', 'Galleria Mall', 'Yelahanka', 1, 1, '2023-01-10 19:26:38'),
(3, 'PVR:4DX', 'Nexus(Forum Mall)', 'Koramangala', 1, 12, '2023-01-10 19:51:47'),
(4, 'PVR:4DX', 'Vegacity', 'Bannergatta', 1, 12, '2023-01-10 19:53:54'),
(5, 'PVR:4DX', 'Orion Mall', 'Dr.Rajkumar Road', 1, 4, '2023-01-10 19:24:59'),
(6, 'INOX:', 'Galleria Mall', 'Yelahanka', 2, 4, '2023-01-10 19:26:38'),
(7, 'INOX:', 'Galleria Mall', 'Yelahanka', 1, 11, '2023-01-10 19:26:38'),
(8, 'PVR:4DX', 'Orion Mall', 'Dr.Rajkumar Road', 2, 9, '2023-01-10 19:24:59'),
(9, 'PVR:4DX', 'Orion Mall', 'Dr.Rajkumar Road', 1, 11, '2023-01-10 19:24:59'),
(10, 'PVR:4DX', 'Orion Mall', 'Dr.Rajkumar Road', 1, 13, '2023-01-10 19:24:59'),
(11, 'INOX:', 'Galleria Mall', 'Yelahanka', 1, 13, '2023-01-10 19:26:38'),
(12, 'PVR:4DX', 'Nexus(Forum Mall)', 'Koramangala', 1, 13, '2023-01-10 19:51:47'),
(13, 'PVR:4DX', 'Vegacity', 'Bannergatta', 1, 13, '2023-01-10 19:53:54'),
(14, 'PVR:4DX', 'Orion Mall', 'Dr.Rajkumar Road', 1, 12, '2023-01-10 19:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `dest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`sno`, `name`, `age`, `dest`) VALUES
(1, 'Samrith', 19, 'Arni');

-- --------------------------------------------------------

--
-- Table structure for table `trip1`
--

CREATE TABLE `trip1` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `dest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip1`
--

INSERT INTO `trip1` (`sno`, `name`, `age`, `dest`) VALUES
(1, 'Samrith', 19, 'Arni'),
(2, 'Mrudhula', 19, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails1`
--

CREATE TABLE `userdetails1` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails1`
--

INSERT INTO `userdetails1` (`sno`, `username`, `email`, `phoneno`, `password`, `date`) VALUES
(1, 'Samrith', 'samrithsanjoo@gmail.com', '8197927207', '31232003', '2023-01-05'),
(2, 'Mrudhula', 'mrudhulakgf@gmail.com', '7676980878', '23312003', '2023-01-05'),
(3, 'Tejas', 'tejastej.gv@gmail.com', '6363829295', 'Tejastej19.', '2023-01-05'),
(4, 'Ram', 'ram@gmail.com', '9972543468', '$2y$10$HjBpJWit28DJWQ/.qqMyret.LDZ.xWPXRe61NApwYNOT4k6dye9lW', '2023-01-07'),
(5, 's', 'sa@gmail.com', '9972543468', '$2y$10$2CZpqgicRS0HL75NpatYgeD0zp6YWU5n5n0f0v3dt.7YYzEFnQHeu', '2023-01-09'),
(6, 'Saraag', 'sarag@gmail.com', '7786777616', '$2y$10$KmXCaaLiF9bowg1YKxZKOO6NAKlFC8VZ132aSOnfQLakLV7o7Tlay', '2023-02-01'),
(7, 'sanchay', 'sanchayagrawal11@gmail.com', '1234567890', '$2y$10$VwDhRKQYQQepybc0zxblrOte72oJiQePvskIGPksMqCcjIhcJdAfS', '2023-02-02'),
(8, 'spielberg', 'sp@gmail.com', '9972543468', '$2y$10$SHWwrNTVdGTp4mhedOO84OlHWR4wpRXKmynZn1L56b45/glpu.wNK', '2023-04-04'),
(9, 'vignesh', 'v@gmail.com', '9972543468', '$2y$10$MPGuKAe9BGrhA.Ctx3O6L.oycFHt7likLTPqqYZNCK.GK7yhT64kO', '2023-04-04'),
(10, 'ranjith', 'ranjith@gmail.com', '8197927207', '$2y$10$qVMiDpfzeG7hfU4D0c/OQeS998azD/7lSntbrudnCa4tsxxkQw3Xe', '2023-06-26'),
(11, 'rubin1234', 'ru.s@gmail.com', '0000000000', '$2y$10$kASXguym/cTCYTSHSDW6o.A/gD/yV8zpbdqmiM5DWFSITrlYZkIfW', '2023-06-27'),
(12, 'Gojo', 'jjk@shibuya.com', '1206270620', '$2y$10$AoUzd93BuMpbd9r0xAMHr.RR8Mg4.uICTdThQpiQGCbByYOtEIF5e', '2023-06-27'),
(13, 'vikranth', 'v@gmaill.com', '1234567890', '$2y$10$RBDbuMD8/LB7RGWIGK6y1.FHzDTT4KBex4yZJjNvGtcUHrlG1lbqu', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `password`, `dt`) VALUES
(1, 'Samrith', 'Samrith@gmail.com', '12345', '2023-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `usersdetails`
--

CREATE TABLE `usersdetails` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersdetails`
--

INSERT INTO `usersdetails` (`sno`, `username`, `email`, `phoneno`, `password`, `date`) VALUES
(1, 'Yuvan', 'yuvanworld@gmail.com', '9972543268', '654321', '2023-01-05'),
(0, 'Samrith', 'samrithsanjoo@gmail.com', '8197927207', '31232003', '2023-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_no`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `theatres1`
--
ALTER TABLE `theatres1`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `trip1`
--
ALTER TABLE `trip1`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userdetails1`
--
ALTER TABLE `userdetails1`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `theatres1`
--
ALTER TABLE `theatres1`
  MODIFY `t_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trip1`
--
ALTER TABLE `trip1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetails1`
--
ALTER TABLE `userdetails1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
