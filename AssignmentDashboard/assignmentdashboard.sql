-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 09:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentdashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `deadline` date NOT NULL,
  `file` text NOT NULL,
  `classcode` varchar(250) NOT NULL,
  `class_id` int(250) NOT NULL,
  `user_id` int(250) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `title`, `description`, `deadline`, `file`, `classcode`, `class_id`, `user_id`, `comments`) VALUES
(1, 'Practical 1', 'This is practical no. 1', '2022-11-05', 'Practical No.1(AOA).pdf', '72a8e', 4, 0, ''),
(5, 'Practical1', 'This is practical 1', '2022-11-08', '', 'a1c05', 3, 0, ''),
(6, 'Assignment No.1', 'This is Assignment of PHP', '2022-11-10', 'Practical No. 2(MP).pdf', 'a1c05', 3, 0, ''),
(8, 'Practical 3', 'This is Assignment of PHP', '2022-10-05', '', 'a1c05', 3, 0, ''),
(9, 'sdvsfvf', 'dvsdvdfv', '2022-11-04', '', '7c3d5', 2, 0, ''),
(11, 'djhjskjdjhaj,h', 'dshfhouyfoayfoyfo', '2022-11-06', 'Practical No. 2(MP).pdf', '7c3d5', 2, 0, ''),
(12, 'hvdoigsidhvnlia', 'Thus', '0000-00-00', '', '7c3d5', 2, 0, ''),
(13, 'Practical 3', 'This is Assignment of PHP', '2022-11-04', 'Practical No. 3(MP).pdf', '7c3d5', 2, 0, ''),
(14, 'dhfgxbfgsdx', 'xczsvdvfbgf', '2022-10-18', '', '7c3d5', 2, 0, ''),
(15, 'Practical No.4', 'This is Assignment of PHP', '2022-11-13', '', '7c3d5', 2, 0, ''),
(18, 'Practical No.2', 'This is Practical of Ethical Hacking', '2022-11-05', '', '5c629', 5, 0, ''),
(19, 'Practical 2', 'This is Practical of DS', '2022-11-06', '', '0a1b7', 6, 0, ''),
(20, 'Practical 1', 'This is Practical of Ethical Hacking', '2022-11-06', '', '499de', 7, 0, ''),
(21, 'Practical 1', 'This is Practical of DWM', '2022-12-11', '', 'bb093', 8, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `createclass`
--

CREATE TABLE `createclass` (
  `id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `classname` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `classcode` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `num_posts` int(250) NOT NULL,
  `stud_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createclass`
--

INSERT INTO `createclass` (`id`, `email`, `classname`, `section`, `subject`, `classcode`, `name`, `date`, `num_posts`, `stud_array`) VALUES
(1, 'ketan@gmail.com', 'CS2020', 'A', 'Java', '12345', 'Pro. Trupti Yadav', '2022-10-27', 0, 'pavan@gmail.com ,'),
(2, 'k@gmail.com', 'TE', 'B1', 'PHP', '7c3d5', 'Pro. Kiran Patil', '2022-10-27', 0, 'pavan@gmail.com ,pavan@gmail.com ,'),
(3, 'k@gmail.com', 'TE', 'B1', 'C', 'a1c05', 'Pro. Kiran Patil', '2022-10-27', 0, 'pavan@gmail.com ,soham@gmail.com ,'),
(4, 't@gmail.com', 'Computer', 'B4', 'IP', '72a8e', 'Prof. Trupti Yadav', '2022-10-28', 0, 'pavan@gmail.com ,pavan@gmail.com ,soham@gmail.com ,'),
(5, 's@gmail.com', 'IT', 'B3', 'Ethical Hacking', '5c629', 'Prof. Shreya Chavan', '2022-10-30', 0, 'soham@gmail.com ,'),
(6, 's@gmail.com', 'SE', 'B2', 'DS', '0a1b7', 'Prof. Shreya Chavan', '2022-10-31', 0, 'soham@gmail.com ,'),
(7, 'shafaq@gmail.com', 'Computer', 'B4', 'PHP', '499de', 'Prof. Shafaque', '2022-10-31', 0, ''),
(8, 's@gmail.com', 'Computer', 'B1', 'DWM', 'bb093', 'Prof. Shreya', '2022-11-01', 0, 'soham@gmail.com ,');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `idnumber` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `idnumber`, `username`, `contact`, `email`, `password`) VALUES
(2, 'Kiran', 'Patil', '11101', 'kiran2020', '9845367263', 'k@gmail.com', 'Kiran123'),
(3, 'Trupti', 'Yadav', '11120', 'Trupti2001', '8768790016', 't@gmail.com', 'Trupti123'),
(4, 'Ketan', 'Patil', '11101', 'ketan2020', '9876543456', 'ketan@gmail.com', 'Kiran'),
(5, 'Shreya', 'Shewale', '112325', 'Shreya2002', '9870986576', 's@gmail.com', 'Shreya123'),
(9, 'Shafaque ', 'Baig', '189300', 'shafaque_baig', '9765467564', 'shafaq@gmail.com', 'Shafaque123');

-- --------------------------------------------------------

--
-- Table structure for table `joinclass`
--

CREATE TABLE `joinclass` (
  `id` int(250) NOT NULL,
  `class_id` int(250) NOT NULL,
  `user_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joinclass`
--

INSERT INTO `joinclass` (`id`, `class_id`, `user_id`) VALUES
(1, 4, 5),
(3, 5, 6),
(4, 3, 6),
(5, 4, 6),
(6, 6, 6),
(7, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `rgnumber` varchar(100) NOT NULL,
  `course` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `rgnumber`, `course`, `username`, `contact`, `email`, `password`) VALUES
(3, 'Priti', 'Patil', 'SE131233', 'Computer Engineering', 'Priti123', '9875434523', 'p@gmail.com', 'Priti@123'),
(5, 'Pavan', 'Patil', 'SE827654', 'Checmical Engineering', 'Pavan123', '9786545342', 'pavan@gmail.com', 'Pavan@123'),
(6, 'Soham', 'Kadam', 'SE20141', 'IT Engineering', 'Soham2233', '9806574343', 'soham@gmail.com', 'Soham123');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(250) NOT NULL,
  `class_id` int(250) NOT NULL,
  `assign_id` int(250) NOT NULL,
  `user_id` int(250) NOT NULL,
  `file` text NOT NULL,
  `status` text NOT NULL,
  `comment` varchar(250) NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `class_id`, `assign_id`, `user_id`, `file`, `status`, `comment`, `grade`) VALUES
(17, 5, 18, 6, 'Assignment No. 6.pdf', 'Submitted', 'bahihfaku', 'A'),
(18, 3, 8, 6, 'Assignment No. 5.pdf', 'Submitted', 'jbkjzbkjzsb', 'B'),
(21, 4, 1, 6, 'Assignment No. 10.pdf', 'Submitted', '', 'A'),
(23, 3, 5, 6, 'Assignment No. 2.pdf', 'Submitted', ',jkxnvjkadhvuadhuk', 'A'),
(27, 3, 8, 6, 'Assignment No. 10.pdf', 'Submitted', 'ckbkjb', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createclass`
--
ALTER TABLE `createclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joinclass`
--
ALTER TABLE `joinclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `createclass`
--
ALTER TABLE `createclass`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `joinclass`
--
ALTER TABLE `joinclass`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
