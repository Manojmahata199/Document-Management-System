-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 10:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_list`
--

CREATE TABLE `department_list` (
  `id` int(100) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `create_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_list`
--

INSERT INTO `department_list` (`id`, `dept_name`, `create_at`) VALUES
(2, 'It Department', '2022-08-04 14:21:30.717853'),
(3, 'Sales Department', '2022-08-04 14:21:30.717853'),
(4, 'Marketting Department', '2022-08-04 14:21:30.717853'),
(5, 'Advertisement Department', '2022-08-04 14:21:30.717853'),
(8, 'Editorial Department', '2022-08-04 14:21:30.717853'),
(9, 'Acount Department', '2022-08-04 14:21:30.717853'),
(10, 'Event Department', '2022-08-04 14:21:30.717853'),
(11, 'Development Department', '2022-08-04 16:37:41.082856');

-- --------------------------------------------------------

--
-- Table structure for table `designation_list`
--

CREATE TABLE `designation_list` (
  `id` int(100) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `create_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation_list`
--

INSERT INTO `designation_list` (`id`, `designation_name`, `create_at`) VALUES
(2, 'Marketting Manager', '2022-08-04 15:07:27.321022'),
(4, 'Senior Editor', '2022-08-04 16:42:25.564480');

-- --------------------------------------------------------

--
-- Table structure for table `document_table`
--

CREATE TABLE `document_table` (
  `id` int(100) NOT NULL,
  `d_title_name` varchar(100) NOT NULL,
  `d_type` varchar(100) NOT NULL,
  `d_extension` varchar(100) NOT NULL,
  `d_upload_date` varchar(100) NOT NULL,
  `d_details` varchar(100) NOT NULL,
  `doc_upload_name` varchar(100) NOT NULL,
  `upload_by_id` varchar(100) NOT NULL,
  `upload_by_emp_id` varchar(100) NOT NULL,
  `upload_by_department` varchar(100) NOT NULL,
  `upload_by_designation` varchar(100) NOT NULL,
  `upload_by_company` varchar(100) NOT NULL,
  `doc_upload_by_name` varchar(100) NOT NULL,
  `upload_date_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_table`
--

INSERT INTO `document_table` (`id`, `d_title_name`, `d_type`, `d_extension`, `d_upload_date`, `d_details`, `doc_upload_name`, `upload_by_id`, `upload_by_emp_id`, `upload_by_department`, `upload_by_designation`, `upload_by_company`, `doc_upload_by_name`, `upload_date_time`) VALUES
(2, 'newfile5', 'jpg', 'jpg', '2022-08-05', 'fsdfsdf dfsf', 'IMG-20220627-WA0003.jpg', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-05 18:18:32.246367'),
(3, 'manoj', 'jpg', 'jpg', '2022-08-05', 'this is my admit card.', 'admit.jpg', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-05 18:21:01.504020'),
(4, 'Mahan', 'jpg', 'jpg', '2022-08-05', 'This Is The Document Of MANOJ', 'ADMIT.jpg', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-05 18:43:00.845165'),
(5, 'myfile1', 'jpg', 'jpg', '2022-08-05', 'This is my Profile img', 'newimg.jpg', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-05 19:22:25.522484'),
(6, 'excelsheet', 'xlsx', 'xls', '2022-08-06', 'this is the employee details', 'ReportofEmployeenew.xls', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-06 11:49:47.699211'),
(7, 'mypdf', 'pdf', 'pdf', '2022-08-06', 'this is my pdf admit', 'Admit Card.pdf', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-06 11:51:50.857217'),
(8, 'mypdfnew', 'pdf', 'pdf', '2022-08-06', 'this is a admit card', 'file67.pdf', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-06 16:10:49.581916'),
(9, 'bumrahimage', 'jfif', 'jfif', '2022-08-08', 'This is the image of bumarah', 'newimg8.jfif', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-08 11:55:17.863204'),
(10, 'manojadmit', 'pdf', 'pdf', '2022-08-07', 'This is my registration card', 'file527.pdf', '1', '155', 'It Department', 'Web Developer', 'Sanmarg Pvt Ltd', 'Manoj Mahata', '2022-08-08 12:01:08.518383');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_mobile` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT 'San@123',
  `date_of_birth` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_img` varchar(100) NOT NULL DEFAULT 'profile_img.png',
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `user_name`, `user_mobile`, `user_email`, `user_id`, `password`, `date_of_birth`, `company_name`, `department`, `designation`, `address`, `profile_img`, `created_at`) VALUES
(1, 'Manoj Mahata', '8637583151', 'manojmahatayt@gmail.com', '155', 'San@123', '1996-12-06', 'Sanmarg Pvt Ltd', 'It Department', 'Web Developer', 'Baruipur,Kolkata,Westbengal,700144.', 'newimg5.jfif', '2022-08-02 18:34:54.037219'),
(3, 'Suman', '9849384987', 'suman@gmail.com', '143', 'San@123', '2022-08-18', 'Sanmarg', 'It Department', 'It Manager', 'MG road,kolkatta,westbengal', 'newimg10.jfif', '2022-08-02 18:45:46.062316'),
(19, 'Saikat Majumdar', '8763727328', 'saikatmajumdar@gmail.com', '999', 'San@123', '2000-01-04', 'HCL Software comapany', 'It Department', 'Software Engineer', 'Baruipur , Kolkata, Westbengal, 700144.', 'im3.jfif', '2022-08-03 12:05:18.928607'),
(20, 'Sourav Marduney 22', '8900000678', 'marduney123@gmail.com', '4444', 'San@123', '1997-01-04', 'Sanmarg Pvt Ltd', 'Electrical Department', 'Electrical Engineer(senior)', 'Baruipur,Kolkata,Westbengal,700144.', 'newimg8.jfif', '2022-08-03 12:08:00.794636'),
(21, 'Sayan Mukherjee', '7474574577', 'sayan@gmail.com', '9976', 'San@123', '1998-01-07', 'Sanmarg', 'Sales Department', 'Junior Sales Manager', 'MG road,kolkatta,westbengal', 'profile_img.png', '2022-08-04 14:59:49.951317'),
(22, 'Arpan Kotal', '7964783432', 'arpan@gmail.com', '089', 'San@123', '1995-05-11', 'Sanmarg', 'Marketting Department', 'Senior Marketting Manager', 'MG road,kolkatta,westbengal', 'profile_img.png', '2022-08-04 18:35:04.450372'),
(23, 'Sourav', '9008374756', 'sourav@gmail.com', '344', 'San@123', '2022-08-08', 'sanmarg.in', 'It Department', 'Marketting Manager', 'Baruipur , Kolkata , Westbengal , 700144.', 'profile_img.png', '2022-08-08 11:48:04.767319');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_list`
--
ALTER TABLE `department_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_list`
--
ALTER TABLE `designation_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_table`
--
ALTER TABLE `document_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_list`
--
ALTER TABLE `department_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `designation_list`
--
ALTER TABLE `designation_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `document_table`
--
ALTER TABLE `document_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
