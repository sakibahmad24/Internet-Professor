-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 09:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intprof`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `sequrity_question` varchar(40) NOT NULL,
  `sequrity_question_answer` varchar(40) NOT NULL,
  `user_type` text NOT NULL,
  `is_active` enum('yes','no') NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birth_date`, `gender`, `username`, `password`, `contact`, `email`, `designation`, `sequrity_question`, `sequrity_question_answer`, `user_type`, `is_active`, `created_on`) VALUES
(102, 'Admin', 'Admin', '0000-00-00', 'male', 'admin', '21232f297a57a5a743894a0e4a801fc3', '01737372722', 'admin@admin.com', 'admin', '', '', '1', 'yes', '0000-00-00 00:00:00'),
(107, 'Nabeel', 'Mohammed', '0000-00-00', 'male', 'nbm', '141daacd408ca680bde2093f3d000d0f', '016777777777', 'nabeel.mohammed@northsouth.edu', 'Assistant Professor', '', '', '1', 'yes', '0000-00-00 00:00:00'),
(117, 'Arshad M', 'Chowdhury', '0000-00-00', 'male', 'amc', '3654b34017508a963ccce2426e91e4cd', '01777777777', 'arshad.chowdhury@northsouth.edu', 'Professor', '', '', '1', 'yes', '0000-00-00 00:00:00'),
(118, 'Tanjila', 'Farah', '0000-00-00', 'female', 'tnf', 'ab9bc7ce433266ca5b4543e538aeed73', '0181831231', 'tnf@gmail.com', 'Lecturer', '', '', '1', 'yes', '0000-00-00 00:00:00'),
(119, 'Kazi Sakib', 'Ahmad', '0000-00-00', 'male', 'kazi.sakib', 'fe04fc6045533c8da744110fc9b7323d', '01676451865', 'sakibahmad24@gmail.com', 'Student', '', '', '2', 'yes', '0000-00-00 00:00:00'),
(120, 'Sadia Afroz', 'Silvia', '0000-00-00', 'female', 'silvia', 'e5cb7c411f1d9a67f68deff4a954cfbc', '01678377658', 'sadia.silvia@northsouth.edu', 'Student', '', '', '2', 'yes', '2018-08-18 18:37:44'),
(121, 'Mahdi', 'Shehab', '0000-00-00', 'male', 'mahdi', 'f9c24b8f961d48841a9838cca5274d8d', '01777737123', 'mahdi@gmail.com', 'Student', '', '', '2', 'yes', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
