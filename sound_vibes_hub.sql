-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 10:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound_vibes_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `bio`, `user_id`, `image`) VALUES
(1, 'Diamond', '', 1, 'uploads/Diamond-Platnumz-press-2021-bb11-2021-billboard-1548-1628187990.jpg'),
(2, 'Ed sheeran', '', 1, 'uploads/791a047636136702e25ba1096b11cfe7.jpg'),
(4, 'alicia keyz', 'this is an artist bio.\r\n\r\n\r\nWhat is Lorem Ipsum?\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n\r\nthis is the end', 1, 'uploads/Billy-Joe-Armstrong.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `disabled`) VALUES
(1, 'Pop', 0),
(2, 'Country', 0),
(3, 'R&B', 0),
(4, 'Dance', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `created_at`) VALUES
(0, 'Aiman', 'good songs', '2024-04-23 20:43:33'),
(1, 'Zayan Ali Khan', 'first comment', '2024-04-19 13:17:17'),
(2, 'mujtaba', 'this songs are really good\r\n', '2024-04-19 20:49:00'),
(3, 'mujtaba', 'this songs are really good\r\n', '2024-04-19 20:49:19'),
(4, 'ali', 'songs are good', '2024-04-20 11:33:36'),
(5, 'mozzanm', 'umijm', '2024-04-20 14:50:27'),
(6, 'hiba Asim', 'songs comment\r\n', '2024-04-23 14:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phone`, `msg`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('miss mehak', 'sohailmehak95@gmail.com', '+92 3132626797', 'beautiful song'),
('miss mehak', 'sohailmehak95@gmail.com', '+92 3132626797', 'beautiful song'),
('', '', '', ''),
('ali', 'ali123@gmail.com', '+92 3353321686', 'ok'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('ali', 'ali123@gmail.com', '9859832097', 'ok'),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `id` int(55) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `music_name` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `downloads` int(11) DEFAULT 0,
  `favorites` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `image`, `music_name`, `artist_name`, `file_path`, `downloads`, `favorites`) VALUES
(18, 'download (1).jpg', '\"Shape of You\" ', ' Ed Sheeran', 'uploads/Best Coast - The Only Place.mp3', 0, 0),
(19, 'download.jpg', '\"Rolling in the Deep\" ', 'Adele', 'uploads/Com Truise - Cyanide Sisters.mp3', 0, 0),
(22, 'images (6).jpg', '\"Uptown Funk\" ', ' Mark Ronson ft. Bruno Mars', 'uploads/Death Grips - Beware.mp3', 0, 0),
(24, 'lady.jpg', '\"Someone Like You\" ', 'by Adele', 'uploads/Death Grips - Guillotine.mp3', 0, 0),
(25, 'red.jpg', '\"Closer\" ', ' The Chainsmokers ft. Halsey', 'uploads/Death Grips - Lost Boys.mp3', 0, 0),
(26, 'lady.jpg', '\"Happier\" ', 'by Marshmello ft. Bastille', 'uploads/Death Grips - Takyon (Death Yon).mp3', 0, 0),
(28, 'red.jpg', '\"Hello\" ', 'by Adele', 'uploads/Death Grips - Spread Eagle Cross the Block (1).mp3', 0, 0),
(29, 'lady.jpg', '\"Rolling in the Deep\" ', 'by Adele', 'uploads/Death Grips - Spread Eagle Cross the Block (1).mp3', 0, 0),
(31, 'a.jpg', '\"Counting Stars\"', ' Ed Sheeran', 'uploads/Get Got.mp3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_emails`
--

CREATE TABLE `newsletter_emails` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_emails`
--

INSERT INTO `newsletter_emails` (`email`) VALUES
('sohailmehak95@gmail.com'),
('sohailmehak95@gmail.com'),
('asim@gmail.com'),
('ali123@gmail.com'),
('ali123@gmail.com'),
('ali123@gmail.com'),
('ali123@gmail.com'),
('admin@gmail.com'),
('hiba@gmail.com'),
('ali123@gmail.com'),
('zoofshan123@gmail.com'),
('ali123@gmail.com'),
('AIMAN1@GMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `signup_table`
--

CREATE TABLE `signup_table` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_table`
--

INSERT INTO `signup_table` (`username`, `name`, `email`, `password`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Mujtaba asim', 'mujtaba', 'mujtaba@gmail.com', 'mujtaba2009'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('admin', 'asif', 'admin123@gmail.com', 'admin123'),
('admin', 'asif', 'admin123@gmail.com', 'admin123'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('mujtaba12', 'kk', 'mujtaba@gmail.com', 'mujtaba12a'),
('', '', '', ''),
('2305g1', 'admin', 'admin123@gmail.com', 'admin12345'),
('', '', '', ''),
('hype.hiba11', 'Hoorain', 'HYPE@gmail.com', 'hype123'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Asim Akhter', 'Asim', 'asim@gmail.com', 'asim123'),
('', '', '', ''),
('admin', 'admin', 'admin@gmail.com', 'admin123'),
('', '', '', ''),
('zoofshan', 'zoofshan furqan', 'zoofshan123@gmail.com', '12345'),
('', '', '', ''),
('aiman akhtar', 'aiman', 'aiman12@gmail.com', 'aiman123'),
('dawood', 'dawood ali', 'dawood@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `file` varchar(1024) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `user_id`, `artist_id`, `image`, `file`, `category_id`, `date`, `views`, `slug`, `featured`) VALUES
(1, 'One in a million', 1, 1, 'uploads/9464b890819e224b.jpg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 4, '2022-06-24 12:52:59', 13, 'one-in-a-million', 0),
(2, 'Mad over me', 1, 1, 'uploads/452771.jpg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 4, '2022-06-24 12:59:04', 1, 'mad-over-me', 1),
(3, 'baby', 1, 2, 'uploads/791a047636136702e25ba1096b11cfe7.jpg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 1, '2022-06-24 13:23:49', 14, 'baby', 1),
(4, 'Soulful', 1, 2, 'uploads/pexels-photo-4654051.jpg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 1, '2022-06-25 09:04:08', 1, 'soulful', 0),
(5, 'Say something', 1, 4, 'uploads/91234813c5767cf0fdb35529f756cf74.jpg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 3, '2022-06-25 09:06:27', 0, 'say-something', 0),
(6, 'Someday', 1, 4, 'uploads/pexels-photo-3756774.jpeg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 2, '2022-06-25 10:24:01', 0, 'someday', 0),
(7, 'Everywhere is home', 1, 2, 'uploads/pexels-photo-3757004.jpeg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 2, '2022-06-25 10:24:43', 0, 'everywhere-is-home', 0),
(8, 'She be mine', 1, 1, 'uploads/Rihanna.-Photo-W-Magazine.jpg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 3, '2022-06-25 10:25:42', 0, 'she-be-mine', 0),
(9, 'Play all the way', 1, 4, 'uploads/Sarkodie.jpg', 'uploads/05.One_inna_million ft Rj Kanierra.mp3', 1, '2022-06-25 10:26:16', 1, 'play-all-the-way', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `date`) VALUES
(1, 'admin', 'email@email.com', '$2y$10$QKjydkzNslVlmJKZ5S2t0Ogf553y8AzR16bEsxz.EtzkDG3woZuJq', 'admin', '2022-06-24 09:48:57'),
(3, 'John', 'john@email.com', '$2y$10$70yB6Eh8FyqIp7bR9IMCy.GYq4dKdmGjwpNrUXo4/8Nr0b.NhhQW2', 'user', '2022-06-24 10:44:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
