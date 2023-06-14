-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 06:21 PM
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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `type_1` varchar(255) NOT NULL,
  `type_2` varchar(255) NOT NULL,
  `type_3` varchar(255) NOT NULL,
  `type_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `photo`, `title`, `details`, `type_1`, `type_2`, `type_3`, `type_4`) VALUES
(1, 'slider_4.jpg', 'We are awesome team work for your business dream.', 'Business is the activity of making one is living or making money. One business makes a commercial transaction with another. A business entity is an entity that is formed and administered as per corporate.', 'One is business To attend to one is duties.', 'type_2', 'type_3', 'type_4');

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
(3, 'mahmud', 'A business is the activity of making one is living', 'Business may offer to many differing activitie, such as the activity of buying or selling in trade. Business activity [....]', 'blog2.png', '18 november 2022'),
(4, 'Limty', 'Business statistics is the science of good decision making', 'Business statistics is the science of good decision making in the face of ambiguity and is used in many system [....]', 'blog3.png', '20 november2022'),
(5, 'Limty', 'A business plan is a formal written document business goals', 'A business plan is a formal written document containing business goals. The methods on how these goals can be [....]', 'blog4.jpg', '20 november2022'),
(6, 'Limty', 'A business is the activity of making one is living', 'Business may offer to many differing activitie, such as the activity of buying or selling in trade. Business activity [....]', 'blog5.jpg', '18 november 2022'),
(7, 'hellow', 'Business statistics is the science of good decision making', 'Business statistics is the science of good decision making in the face of ambiguity and is used in many system [....]', 'blog6.jpg', '19 november2022');

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
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`id`, `logo`, `phone`, `email`, `address`, `website`, `map`) VALUES
(1, 'logo.png', '01759526830', 'mahmudunnabi140@gmail.com', 'Dhaka,Agargaon', 'www.general.com', 'https://www.google.com/maps/place/IsDB-BISEW+(IDB+Bhaban-2)/@23.7773316,90.3740015,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c7bfb2fd9c17:0x4c17fb5bfa69001f!8m2!3d23.7773267!4d90.3761902');

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
(8, 'Business Goal', 'Business may offer to many differing activitie. such as the activity. of buying or selling in trade. Business activity [....]');

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
(3, 'mahmud', 'We’ll connect you with the right people to start', 'Tools such as a profit simulator and tax calculator show the value of your stock options and exercise cost.', 'blog3.jpg', '20 March 2021'),
(5, 'Mahmud', 'A business plan is a formal written document business goals', 'A business plan is a formal written document containing business goals. The methods on how these goals can be [....]', 'blog1.png', '22 november,2022');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `details`) VALUES
(1, 'mahmud', 'mahmudunnabi140@gmail.com', 'gfgff', 'ddxd'),
(2, 'mahmud', 'mahmudunnabi140@gmail.com', 'gfgff', 'ddxd'),
(3, 'mahmud', 'mahmudunnabi140@gmail.com', 'gfgff', 'ddxd'),
(4, 'mahmud', 'mahmudunnabi140@gmail.com', 'gfgff', 'ddxd'),
(13, 'mizan', 'mahmudunnabi140@gmail.com', 'hi', 'hellow');

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
(2, 'Economy', '$19', 'per month', 'Free Support 24/7.', 'Databases Download', 'Maintenance Email', 'Unlimited Traffic', 'price-img1.png'),
(4, 'Unltimate', '$49', 'per month', 'Free Suppport 24/7', 'Databases Download', 'Maintenance Email', 'Unlimited Traffic', 'price-img3.png'),
(9, 'Deluxe', '$29', 'every month', 'Free Suppport 24/7', 'Databases Download', 'hellow', 'Unlimited Traffic', 'price-img2.png');

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
(6, 'Project Title Five', 'Branding', 'project11.jpg');

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
(7, 'service3.jpg', 'Business Grow ', 'Market penetration is the key for a business growth. Business development processes to develop and implement growth.');

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
-- Table structure for table `tamplate`
--

CREATE TABLE `tamplate` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamplate`
--

INSERT INTO `tamplate` (`id`, `title`, `details`, `photo`) VALUES
(3, 'Build your Perfect Template Now!', 'If you want to create a new website for your business, do not hesitate to contact us today. We have created you to provide all type. Get It Now', 'cta-img.png');

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
(3, '“I am very happy to create a website from you. Whatever I wanted for my website, I got everything from you very quickly. When I made a website in the future, I will build from you. ”', 'David T. Eiler', 'testimonial-1.jpg', 'Systems Software Engineer'),
(4, '“I am very happy to create a website from you. Whatever I wanted for my website, I got everything from you very quickly. When I made a website in the future, I will build from you. ”', 'David T. Eiler', 'testimonial-2.jpg', 'Systems Software Engineer'),
(6, 'Dolores sed duo clita tempor justo dolor et stet lorem kasd                   labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy                   et labore et tempor diam tempor erat.', 'Mahmud', 'testimonial-1.jpg', '          Softwer inginer');

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
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `message`
--
ALTER TABLE `message`
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
-- Indexes for table `tamplate`
--
ALTER TABLE `tamplate`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pricing_plan`
--
ALTER TABLE `pricing_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tamplate`
--
ALTER TABLE `tamplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
