-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 08:40 AM
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
-- Database: `limty`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `add_by` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(150) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `add_by`, `title`, `details`, `photo`, `date`) VALUES
(2, 'Limty', 'A business plan is a formal written document business goals', 'A business plan is a formal written document containing business goals. The methods on how these goals can be [....]', 'blog1.png', '12 March, 2019'),
(3, 'Limty', 'A business is the activity of making one is living', 'Business may offer to many differing activitie, such as the activity of buying or selling in trade. Business activity [....]', 'blog2.png', '18 november 2022'),
(4, 'Limty', 'Business statistics is the science of good decision making', 'Business statistics is the science of good decision making in the face of ambiguity and is used in many system [....]', 'blog3.png', '20 november2022'),
(5, 'Limty', 'A business plan is a formal written document business goals', 'A business plan is a formal written document containing business goals. The methods on how these goals can be [....]', 'blog4.jpg', '20 november2022'),
(6, 'Limty', 'A business is the activity of making one is living', 'Business may offer to many differing activitie, such as the activity of buying or selling in trade. Business activity [....]', 'blog5.jpg', '18 november 2022'),
(7, 'Limty', 'Business statistics is the science of good decision making', 'Business statistics is the science of good decision making in the face of ambiguity and is used in many system [....]', 'blog6.jpg', '19 november2022'),
(9, 'Limty', 'Business statistics is the science of good decision making', 'Business statistics is the science of good decision making in the face of ambiguity and is used in many system [....]', 'blog1.png', '24 november2022'),
(11, 'Limty', 'Business statistics is the science of good decision making', 'Business statistics is the science of good decision making in the face of ambiguity and is used in many system [....]', 'blog4.jpg', '24 november2022');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `add_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `photo`, `title`, `date`, `details`, `add_by`) VALUES
(1, 'blog-details3.jpg', 'Small Business Administration', '18 november 2022', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor. consectetur adipisicing elit sed do eiusmod tempor.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor. consectetur adipisicing elit sed do eiusmod tempor.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor. consectetur adipisicing elit sed do eiusmod tempor.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor. consectetur adipisicing elit sed do eiusmod tempor.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`id`, `logo`, `phone`, `email`) VALUES
(1, 'logo.png', '01759526830', 'mahmudunnabi140@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `icone`
--

CREATE TABLE `icone` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icone`
--

INSERT INTO `icone` (`id`, `title`, `details`) VALUES
(4, 'Business Growth', 'Market penetration is the key for a business growth. Business development processes to develop and implement.'),
(5, 'Business Focus', 'Business focuses on strategic planning for international operations. Business focus ensuring business needs.'),
(6, 'Business Goal', 'Business needs are understood and communicated so that problem solutions meet the business goals.');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(11) NOT NULL,
  `add_by` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(150) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `add_by`, `title`, `details`, `photo`, `date`) VALUES
(1, 'Limty', 'Business statistics is the science of good decision making', 'Business statistics is the science of good decision making in the face of ambiguity and is used in many system [....]', 'blog3.png', '02 March, 2019'),
(3, 'Limty', 'A business is the activity of making one is living', 'Business may offer to many differing activitie, such as the activity of buying or selling in trade. Business activity [....]', 'blog2.png', '23 november2022'),
(5, 'Limty', 'A business plan is a formal written document business goals', 'A business plan is a formal written document containing business goals. The methods on how these goals can be [....]', 'blog1.png', '22 november,2022');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plan`
--

CREATE TABLE `pricing_plan` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `support` varchar(255) NOT NULL,
  `data_base` varchar(255) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `traffic` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_plan`
--

INSERT INTO `pricing_plan` (`id`, `title`, `price`, `date`, `support`, `data_base`, `maintenance`, `traffic`, `photo`) VALUES
(2, 'Econom1', '$15', 'per month', 'Free Support 24/7.', 'Databases Download', 'Maintenance Email', 'Unlimited Traffic', 'price-img1.png'),
(3, 'Deluxe', '$29', 'per month', 'Free Support 24/7', 'Databases Download', 'Maintenance Email', 'Unlimited Traffic', 'price-img2.png'),
(4, 'Ultimate', '$49', 'per month', 'Free Suppport 24/7', 'Databases Download', 'Maintenance Email', 'Unlimited Traffic', 'price-img3.png');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `details`, `photo`) VALUES
(1, 'Project Title One', 'Branding', 'project6.jpg'),
(2, 'Project Title Two', 'Branding', 'project7.jpg'),
(3, 'Project Title Three', 'Branding', 'project8.jpg'),
(4, 'Project Title  Four', 'Branding', 'project9.jpg'),
(5, 'Project Title Five', 'Branding', 'project10.jpg'),
(6, 'Project Title Six', 'Branding', 'project11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `photo`, `title`, `details`) VALUES
(4, 'service1.jpg', 'Business Meeting', 'A meeting is when two or more people come together to discuss one or more topics often in a formal or business'),
(5, 'service2.jpg', 'Business Analysis', 'Business analysis is a research discipline of identifying business needs and determining solutions to business.'),
(7, 'service3.jpg', 'Business Grow', 'Market penetration is the key for a business growth. Business development processes to develop and implement growth.'),
(9, 'project6.jpg', 'Project Title One', 'Branding');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_1`, `title_2`, `photo`) VALUES
(1, 'We provide outstanding Creative Work!', ' The process of business model construction and modification  is also called business model innovation.', 'hero-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `title`, `photo`) VALUES
(1, 'Rodney Artichoke', 'UI/UX Designer', 'team1.png'),
(2, 'Aston Dark', 'Web Developer', 'team2.png'),
(3, 'Keir Preston', 'Business Advisor', 'team3.png'),
(4, 'Criss Donald', 'Business Analysis', 'team4.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `details`, `name`, `photo`, `designation`) VALUES
(3, '“I am very happy to create a website from you. Whatever I wanted for my website, I got everything from you very quickly. When I made a website in the future, I will build from you. ”', 'David T. Eiler', 'client-1.jpg', 'Systems Software Engineer'),
(4, '“I am very happy to create a website from you. Whatever I wanted for my website, I got everything from you very quickly. When I made a website in the future, I will build from you. ”', 'David T. Eiler', 'client-3.jpg', 'Systems Software Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'mahmud', 'mahmudunnabi140@gmail.com', '01759526830');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_info`
--
ALTER TABLE `general_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icone`
--
ALTER TABLE `icone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_plan`
--
ALTER TABLE `pricing_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_info`
--
ALTER TABLE `general_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `icone`
--
ALTER TABLE `icone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pricing_plan`
--
ALTER TABLE `pricing_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
