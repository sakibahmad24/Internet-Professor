-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 11:30 AM
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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(15) NOT NULL,
  `course_id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `attended` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `course_id`, `student_id`, `attended`, `date`) VALUES
(1, 12, 120, 'yes', '2018-08-14 18:00:00'),
(2, 12, 120, 'yes', '2018-08-14 18:00:00'),
(3, 12, 121, 'yes', '2018-08-14 18:00:00'),
(4, 12, 120, 'yes', '2018-08-29 18:00:00'),
(5, 12, 121, 'yes', '2018-08-29 18:00:00'),
(6, 12, 120, 'no', '2018-08-29 18:00:00'),
(7, 12, 121, 'yes', '2018-08-29 18:00:00'),
(8, 12, 120, 'no', '2018-08-30 16:00:22'),
(9, 12, 121, 'no', '2018-08-30 16:00:22'),
(10, 12, 120, 'yes', '2018-08-30 16:02:11'),
(11, 12, 121, 'yes', '2018-08-30 16:02:11'),
(12, 12, 120, 'yes', '2018-08-30 16:02:38'),
(13, 12, 121, 'yes', '2018-08-30 16:02:38'),
(14, 12, 120, 'yes', '2018-08-30 16:03:37'),
(15, 12, 121, 'yes', '2018-08-30 16:03:37'),
(16, 12, 120, 'yes', '2018-08-30 16:05:04'),
(17, 12, 121, 'yes', '2018-08-30 16:05:04'),
(18, 12, 120, 'yes', '2018-08-30 16:05:30'),
(19, 12, 121, 'no', '2018-08-30 16:05:30'),
(20, 12, 120, 'yes', '2018-08-30 16:08:39'),
(21, 12, 121, 'no', '2018-08-30 16:08:39'),
(22, 12, 120, 'yes', '2018-08-30 16:09:40'),
(23, 12, 121, 'no', '2018-08-30 16:09:40'),
(24, 12, 120, 'yes', '2018-08-30 16:09:58'),
(25, 12, 121, 'no', '2018-08-30 16:09:58'),
(26, 12, 120, 'yes', '2018-08-30 16:10:04'),
(27, 12, 121, 'no', '2018-08-30 16:10:04'),
(28, 10, 120, 'no', '2018-08-30 19:24:47'),
(29, 10, 120, 'no', '2018-08-30 19:34:56'),
(30, 10, 120, 'yes', '2018-08-30 19:41:38'),
(31, 10, 120, 'yes', '2018-08-30 19:42:51'),
(32, 10, 120, 'yes', '2018-08-30 19:43:24'),
(33, 10, 120, 'no', '2018-08-30 19:52:58'),
(34, 10, 120, 'yes', '2018-08-30 20:08:15'),
(35, 10, 120, 'yes', '2018-08-30 20:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_user_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `comment_votes` int(4) NOT NULL,
  `comment_teacher_flag` tinyint(1) NOT NULL,
  `comment_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_user_id`, `thread_id`, `comment`, `comment_votes`, `comment_teacher_flag`, `comment_created_on`) VALUES
(1, 120, 17, 'ok sir', 2, 0, '2018-08-29 13:25:06'),
(2, 107, 17, 'Hmmm', 0, 0, '2018-08-29 13:17:01'),
(3, 120, 18, 'ok\r\n', 0, 0, '2018-08-29 13:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `teacher_id` varchar(11) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `activation_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `teacher_id`, `course_name`, `course_title`, `description`, `activation_code`) VALUES
(10, '107', 'CSE327', 'Software Engineering', 'Welcome to Software Engineering', '83715'),
(11, '107', 'CSE425', 'Principles of PL', 'none', '36949'),
(12, '107', 'CSE115', 'Pl1', 'ASDAFAF', '29786');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `course_id`, `teacher_id`, `student_id`, `grade`, `updated_on`) VALUES
(1, '10', '107', '120', NULL, '2018-08-30 21:42:02'),
(2, '12', '107', '120', NULL, '2018-08-30 21:42:02'),
(3, '12', '107', '121', NULL, '2018-08-30 22:27:57'),
(4, '12', '107', '119', NULL, '2018-08-30 21:42:02'),
(5, '10', '107', '119', NULL, '2018-08-30 21:42:29'),
(6, 'sd', '132', '34', 'A', '2018-09-01 07:46:57'),
(12, '12', '', '119', 'A-', '2018-09-01 08:13:51'),
(13, '12', '', '119', 'A-', '2018-09-01 08:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(5) NOT NULL,
  `like_user_id` int(5) NOT NULL,
  `like_comment_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `like_user_id`, `like_comment_id`) VALUES
(1, 107, 1),
(2, 107, 1);

-- --------------------------------------------------------

--
-- Table structure for table `livelinks`
--

CREATE TABLE `livelinks` (
  `id` int(10) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livelinks`
--

INSERT INTO `livelinks` (`id`, `link`, `posted_on`) VALUES
(1, 'llll', '2018-09-01 15:54:55'),
(2, 'link', '2018-08-31 19:57:10'),
(3, 'dasdas', '2018-08-31 20:00:27'),
(4, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:07:38'),
(5, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:07:45'),
(6, '', '2018-08-31 20:37:40'),
(7, '999', '2018-08-31 20:37:45'),
(8, 'ldasld', '2018-08-31 20:37:53'),
(9, 'ldasld', '2018-08-31 20:39:16'),
(10, 'hello', '2018-08-31 20:39:22'),
(11, 'lol', '2018-08-31 20:39:31'),
(12, 'lol', '2018-08-31 20:41:19'),
(13, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:41:39'),
(14, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:41:46'),
(15, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:41:50'),
(16, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:42:17'),
(17, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:42:43'),
(18, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:48:22'),
(19, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:50:41'),
(20, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-08-31 20:50:52'),
(21, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-09-01 08:37:16'),
(22, 'https://www.youtube.com/watch?v=N1UCViygC1Q', '2018-09-01 08:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `post` varchar(500) NOT NULL,
  `votes` int(11) NOT NULL,
  `teacher_flag` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `user_id`, `course_id`, `subject`, `post`, `votes`, `teacher_flag`, `created_on`) VALUES
(1, 102, '9', 'About Baaal', 'baler course akta!!!', 0, 0, '2016-11-26 10:23:01'),
(2, 102, '9', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the ', 0, 0, '2016-11-26 10:23:01'),
(3, 102, '9', 'werf', 'werf', 0, 0, '2016-11-26 10:23:01'),
(4, 102, '9', 'Another question', 'function save_course($data) {\r\n\r\n		if ($this -> db -> insert(\'course\', $data)) {\r\n\r\n			return TRUE;\r\n		}\r\n	} ', 0, 0, '2016-11-26 10:23:01'),
(5, 102, '9', 'wer', 'wer', 0, 0, '2016-11-26 10:23:01'),
(6, 102, '9', 'klkgfgdj', 'jhgb', 0, 0, '2016-11-26 10:23:01'),
(7, 102, '9', 'skjdbvkjsd', 'slnvkljfsdbv', 0, 0, '2016-11-26 10:23:01'),
(8, 102, '9', 'timestamp check', 'asdfsfgdvsfdv', 0, 0, '0000-00-00 00:00:00'),
(9, 102, '9', 'timestamp check2', 'AJKHXcgbgaysdc', 0, 0, '0000-00-00 00:00:00'),
(10, 102, '9', 'timestamp check3', 'asdcvsdv', 0, 0, '0000-00-00 00:00:00'),
(11, 102, '9', 'sdvasfdb', 'zdfbsdfgbdfgs', 0, 0, '2016-11-26 10:39:59'),
(12, 102, '9', 'desc check', 'sdvfsvsfabvsf', 0, 0, '2016-11-26 10:55:53'),
(13, 102, '9', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 'If you still want to delete it then it is always better to use higher level Q2A functions than using plain SQL as they take care of things that just one DELETE statement won\'t (e.g., what happens with posts of that user, votes, etc). I\'d recommend just running this', 0, 0, '2016-11-26 10:23:01'),
(14, 102, '9', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 0, 0, '2016-11-26 12:51:10'),
(15, 102, '9', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 0, 0, '2016-12-04 16:52:13'),
(16, 107, '11', 'QuiZ 1', 'Quiz 1 on nextr class.. Cheers!', 0, 0, '2018-08-29 13:07:13'),
(17, 107, '12', 'quiz 2', 'quiz 2 on next class', 0, 0, '2018-08-29 13:08:10'),
(18, 107, '12', 'mid 1', 'mid 1 next week', 0, 0, '2018-08-29 13:24:54');

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
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activation_code` (`activation_code`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livelinks`
--
ALTER TABLE `livelinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `livelinks`
--
ALTER TABLE `livelinks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
