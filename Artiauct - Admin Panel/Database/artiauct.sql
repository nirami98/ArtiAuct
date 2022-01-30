-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 02:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artiauct`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postpicture` varchar(500) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`id`, `productid`, `userid`, `postpicture`, `isactive`, `doi`, `dou`) VALUES
(1, 3, 8, 'posts/img466.jpg', 0, '2019-04-15 20:05:18', '2019-04-15 20:05:18'),
(2, 4, 7, 'posts/img412.jpg', 0, '2019-04-18 09:49:50', '2019-04-18 09:49:50'),
(3, 4, 7, 'posts/img412.jpg', 0, '2019-04-18 09:49:58', '2019-04-18 09:49:58'),
(4, 4, 7, 'posts/img412.jpg', 0, '2019-04-18 09:50:07', '2019-04-18 09:50:07'),
(5, 4, 7, 'posts/img412.jpg', 0, '2019-04-18 09:50:25', '2019-04-18 09:50:25'),
(6, 4, 7, 'posts/img412.jpg', 0, '2019-04-18 09:53:19', '2019-04-18 09:53:19'),
(7, 9, 7, 'posts/10.jpg', 0, '2019-04-18 10:13:27', '2019-04-18 10:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`id`, `categoryname`, `isactive`, `doi`, `dou`) VALUES
(1, 'Birthday', 1, '2019-02-03 00:00:00', '0000-00-00 00:00:00'),
(2, 'Jewelry ', 1, '2019-03-20 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `challenge_tbl`
--

CREATE TABLE `challenge_tbl` (
  `id` int(11) NOT NULL,
  `challengename` varchar(100) NOT NULL,
  `challengecriteria` varchar(500) NOT NULL,
  `hashtag` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenge_tbl`
--

INSERT INTO `challenge_tbl` (`id`, `challengename`, `challengecriteria`, `hashtag`, `isactive`, `doi`, `dou`) VALUES
(2, 'Watercolor Creativity', 'Your artwork should at least contain even small amount of watercolor work.', '#watercolor_creativity', 1, '2019-02-03 00:00:00', '0000-00-00 00:00:00'),
(3, 'Decoupage', 'You craft work should be made using decoupage napkins.', '#decoupage', 1, '2019-02-09 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`id`, `sid`, `cityname`, `isactive`, `doi`, `dou`) VALUES
(1, 1, 'Ahmedabad', 1, '2019-02-03 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `complain_tbl`
--

CREATE TABLE `complain_tbl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `complainmessage` varchar(500) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain_tbl`
--

INSERT INTO `complain_tbl` (`id`, `userid`, `complainmessage`, `isactive`, `doi`) VALUES
(1, 8, 'My order is not confirming', 1, '2019-04-15 20:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `feedbackmessage` varchar(500) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id`, `userid`, `feedbackmessage`, `isactive`, `doi`, `dou`) VALUES
(1, 8, 'This has been a really amazing website for all the artists.', 1, '2019-04-15 20:10:12', '2019-04-15 20:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `hashtag_tbl`
--

CREATE TABLE `hashtag_tbl` (
  `id` int(11) NOT NULL,
  `hashtagname` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hashtag_tbl`
--

INSERT INTO `hashtag_tbl` (`id`, `hashtagname`, `isactive`, `doi`, `dou`) VALUES
(1, '#watercolor_creativity', 1, '2019-02-03 00:00:00', '0000-00-00 00:00:00'),
(2, '#decoupage', 1, '2019-02-09 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tbl`
--

CREATE TABLE `invoice_tbl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_tbl`
--

INSERT INTO `invoice_tbl` (`id`, `userid`, `postid`, `email`, `firstname`, `lastname`, `address`, `isactive`, `doi`) VALUES
(1, 8, 3, 'nirjadesai9800@gmail.com', 'Nirja', 'Desai', 'Mithila Appt.', 0, '2019-04-15 20:05:44'),
(2, 7, 4, 'nirjadesai9800@gmail.com', 'Nirja', 'Desai', 'Hello', 0, '2019-04-18 09:57:49'),
(3, 7, 4, 'nirjadesai9800@gmail.com', 'Nirja', 'Desai', 'hrw.i;', 1, '2019-04-18 10:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `likestbl`
--

CREATE TABLE `likestbl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likestbl`
--

INSERT INTO `likestbl` (`id`, `userid`, `postid`, `isactive`, `doi`) VALUES
(1, 8, 2, 0, '0000-00-00 00:00:00'),
(2, 8, 4, 1, '2019-04-18 09:34:43'),
(3, 8, 6, 1, '2019-04-18 09:46:58'),
(4, 7, 2, 1, '2019-04-18 09:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `likes_tbl`
--

CREATE TABLE `likes_tbl` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `doi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes_tbl`
--

INSERT INTO `likes_tbl` (`id`, `postid`, `userid`, `doi`) VALUES
(1, 1, 8, '2019-04-02 16:28:11'),
(2, 2, 8, '2019-04-18 09:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `post_tbl`
--

CREATE TABLE `post_tbl` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `postname` varchar(100) NOT NULL,
  `posthash1` varchar(100) NOT NULL,
  `posthash2` varchar(100) NOT NULL,
  `posthash3` varchar(100) NOT NULL,
  `posthash4` varchar(100) NOT NULL,
  `postdescription` varchar(500) NOT NULL,
  `postpicture` varchar(100) NOT NULL,
  `isproduct` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_tbl`
--

INSERT INTO `post_tbl` (`id`, `catid`, `postname`, `posthash1`, `posthash2`, `posthash3`, `posthash4`, `postdescription`, `postpicture`, `isproduct`, `isactive`, `doi`, `dou`) VALUES
(2, 1, 'card', 'hello', '', '', '', 'hello', 'posts/img389.jpg', 1, 0, '2019-03-31 11:03:35', '2019-03-31 11:03:35'),
(4, 1, 'Nirja Desai', '', '', '', '', 'Birthday card of blue color', 'posts/img412.jpg', 0, 0, '2019-03-31 11:18:47', '2019-03-31 11:18:47'),
(5, 2, 'Hello World', 'hello', '', '', '', 'belloooooo!!!!!!!!!!!', '', 0, 0, '2019-03-31 15:39:02', '2019-03-31 15:39:02'),
(6, 1, 'nirja desai', '', '', '', '', 'hello', 'posts/img401.jpg', 0, 0, '2019-03-31 15:39:52', '2019-03-31 15:39:52'),
(7, 1, 'card', 'hello', 'bello', 'image', 'birthday', 'Birthday card of blue color', 'posts/img239.jpg', 0, 0, '2019-04-15 19:16:24', '2019-04-15 19:16:24'),
(8, 2, 'painting', 'hello', 'bello', 'image', 'birthday', 'paint', 'posts/img426.jpg', 0, 0, '2019-04-15 19:28:21', '2019-04-15 19:28:21'),
(9, 2, 'Pendant', 'pendant', 'stars', 'beautiful', 'jewelry', 'A beautiful pendant with stars to shine your future.', 'posts/10.jpg', 0, 0, '2019-04-18 10:12:56', '2019-04-18 10:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productprice` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id`, `catid`, `postid`, `productname`, `productprice`, `isactive`, `doi`, `dou`) VALUES
(2, 1, 4, 'Nirja Desai', 200, 0, '2019-03-31 11:18:47', '2019-03-31 11:18:47'),
(3, 2, 9, 'Pendant', 1000, 0, '2019-04-18 10:12:56', '2019-04-18 10:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `id` int(11) NOT NULL,
  `statename` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`id`, `statename`, `isactive`, `doi`, `dou`) VALUES
(1, 'Gujarat', 0, '2019-02-03 00:00:00', '0000-00-00 00:00:00'),
(2, 'Rajasthan', 1, '2019-02-03 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobilenum` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `firstname`, `lastname`, `username`, `profile_pic`, `email`, `password`, `mobilenum`, `gender`, `isactive`, `doi`, `dou`, `usertype`) VALUES
(1, 'Nirja', 'Desai', 'nirja.desai', 'logo.png', 'nirjadesai9800@gmail.com', 'nirja9800', '9429120045', 'Female', 1, '2019-01-18 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'Payal', 'Devalia', 'ph_2810', 'logo.png', 'payaldevalia1111@gmail.com', 'payal1111', '7016083997', 'Female', 1, '2019-01-18 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Shreya', 'Joshi', 'sd__2711', 'logo.png', 'shreyajoshi2727@gmail.com', 'shreya2727', '8780366985', 'Female', 1, '2019-01-18 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'Khushali', 'Panchal', 'khushali_1120', 'logo.png', 'panchalkhushali1109@gmail.com', 'khushali1109', '9512785162', 'Female', 1, '2019-01-18 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'Nirja', 'Desai', 'nirami98', 'uploads/Penguins.jpg', 'nirami9800@gmail.com', '1234', '12345678', 'on', 0, '2019-03-18 19:02:06', '2019-03-18 19:02:06', 2),
(6, 'Nirja', 'Desai', 'nirami98', 'uploads/Tulips.jpg', 'nirami9800@gmail.com', '1234', '12345678', 'on', 0, '2019-03-18 19:03:22', '2019-03-18 19:03:22', 2),
(7, 'Ami', 'Desai', 'nirja', 'uploads/Hydrangeas.jpg', 'nirjadesai9800@gmail.com', '1234', '12345678', 'Female', 1, '2019-03-18 19:04:32', '2019-03-18 19:04:32', 2),
(8, 'Nirja', 'Desai', 'nirami98', 'uploads/img392.jpg', 'nirjadesai9800@gmail.com', '123456', '9429120045', 'Female', 1, '2019-03-31 09:50:04', '2019-03-31 09:50:04', 2),
(9, 'vfdxnf', 'gmjhg,', 'dfkl', '', 'payaldevalia1111@gmail.com', '12', '1246', 'Male', 0, '2019-03-31 10:02:27', '2019-03-31 10:02:27', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challenge_tbl`
--
ALTER TABLE `challenge_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hashtag_tbl`
--
ALTER TABLE `hashtag_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likestbl`
--
ALTER TABLE `likestbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes_tbl`
--
ALTER TABLE `likes_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tbl`
--
ALTER TABLE `post_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `challenge_tbl`
--
ALTER TABLE `challenge_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complain_tbl`
--
ALTER TABLE `complain_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hashtag_tbl`
--
ALTER TABLE `hashtag_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `likestbl`
--
ALTER TABLE `likestbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `likes_tbl`
--
ALTER TABLE `likes_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post_tbl`
--
ALTER TABLE `post_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
