-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 11:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `downloader` int(11) NOT NULL,
  `is_seller_has_allowed_download` bit(64) NOT NULL,
  `attachment_path` varchar(500) DEFAULT NULL,
  `is_attachment_downloaded` bit(64) NOT NULL,
  `attachment_downloaded_date` datetime DEFAULT NULL,
  `is_paid` bit(64) NOT NULL,
  `purchased_price` decimal(10,0) DEFAULT NULL,
  `note_title` varchar(100) NOT NULL,
  `note_category` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note_categories`
--

CREATE TABLE `note_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note_type`
--

CREATE TABLE `note_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reference_data`
--

CREATE TABLE `reference_data` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `data_value` varchar(100) NOT NULL,
  `ref_category` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes`
--

CREATE TABLE `seller_notes` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `actioned_by` int(11) DEFAULT NULL,
  `admin_remarks` varchar(500) DEFAULT NULL,
  `published_date` datetime DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `display_picture` varchar(500) DEFAULT NULL,
  `note_type` int(11) DEFAULT NULL,
  `number_of_pages` int(11) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `university_name` varchar(200) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `professor` varchar(100) DEFAULT NULL,
  `is_paid` bit(8) NOT NULL,
  `selling_price` decimal(10,0) DEFAULT NULL,
  `notes_preview` varchar(500) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_attachements`
--

CREATE TABLE `seller_notes_attachements` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_reported_issues`
--

CREATE TABLE `seller_notes_reported_issues` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `reported_by_id` int(11) NOT NULL,
  `against_download_id` int(11) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes_reviews`
--

CREATE TABLE `seller_notes_reviews` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `reviewed_by_id` int(11) NOT NULL,
  `against_downloads_id` int(11) NOT NULL,
  `ratings` decimal(10,0) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_configuration`
--

CREATE TABLE `system_configuration` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified-date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(24) NOT NULL,
  `is_email_verified` bit(8) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dob` datetime DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `secondary_email_address` varchar(100) NOT NULL,
  `phone_country_code` varchar(5) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `profile_picture` varchar(500) DEFAULT NULL,
  `address_line1` varchar(100) NOT NULL,
  `address_line2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `university` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `seller` (`seller`),
  ADD KEY `downloader` (`downloader`);

--
-- Indexes for table `note_categories`
--
ALTER TABLE `note_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note_type`
--
ALTER TABLE `note_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference_data`
--
ALTER TABLE `reference_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `status` (`status`),
  ADD KEY `actioned_by` (`actioned_by`);

--
-- Indexes for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `seller_notes_reported_issues`
--
ALTER TABLE `seller_notes_reported_issues`
  ADD KEY `note_id` (`note_id`),
  ADD KEY `reported_by_id` (`reported_by_id`),
  ADD KEY `against_download_id` (`against_download_id`);

--
-- Indexes for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `reviewed_by_id` (`reviewed_by_id`),
  ADD KEY `against_downloads_id` (`against_downloads_id`);

--
-- Indexes for table `system_configuration`
--
ALTER TABLE `system_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `note_categories`
--
ALTER TABLE `note_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `note_type`
--
ALTER TABLE `note_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reference_data`
--
ALTER TABLE `reference_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_notes`
--
ALTER TABLE `seller_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_configuration`
--
ALTER TABLE `system_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `downloads_ibfk_2` FOREIGN KEY (`seller`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `downloads_ibfk_3` FOREIGN KEY (`downloader`) REFERENCES `users` (`id`);

--
-- Constraints for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD CONSTRAINT `seller_notes_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_2` FOREIGN KEY (`status`) REFERENCES `reference_data` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_3` FOREIGN KEY (`actioned_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `seller_notes_attachements`
--
ALTER TABLE `seller_notes_attachements`
  ADD CONSTRAINT `seller_notes_attachements_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`);

--
-- Constraints for table `seller_notes_reported_issues`
--
ALTER TABLE `seller_notes_reported_issues`
  ADD CONSTRAINT `seller_notes_reported_issues_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `seller_notes_reported_issues_ibfk_2` FOREIGN KEY (`reported_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `seller_notes_reported_issues_ibfk_3` FOREIGN KEY (`against_download_id`) REFERENCES `downloads` (`id`);

--
-- Constraints for table `seller_notes_reviews`
--
ALTER TABLE `seller_notes_reviews`
  ADD CONSTRAINT `seller_notes_reviews_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `seller_notes_reviews_ibfk_2` FOREIGN KEY (`reviewed_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `seller_notes_reviews_ibfk_3` FOREIGN KEY (`against_downloads_id`) REFERENCES `downloads` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_profile_ibfk_2` FOREIGN KEY (`gender`) REFERENCES `reference_data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
