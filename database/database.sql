-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `facultyrecruitment`
--
CREATE DATABASE IF NOT EXISTS `facultyrecruitment` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `facultyrecruitment`;

-- --------------------------------------------------------

--
-- Table structure for table `additional_qualification`
--

CREATE TABLE `additional_qualification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `percentag` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `application_details`
--

CREATE TABLE `application_details` (
  `post_applied_for` varchar(55) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `application_number` int(11) DEFAULT NULL,
  `advertisement_number` varchar(255) DEFAULT NULL,
  `department_school` varchar(55) DEFAULT NULL,
  `date_of_application` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
--
-- Table structure for table `awards_recog`
--

CREATE TABLE `awards_recog` (
  `user_id` int(11) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `awarded_by` varchar(255) DEFAULT NULL,
  `year1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
--
-- Table structure for table `best10_publications`
--

CREATE TABLE `best10_publications` (
  `user_id` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `journal_or_conference` varchar(255) DEFAULT NULL,
  `year_vol_page` varchar(255) DEFAULT NULL,
  `impact_factor` varchar(255) DEFAULT NULL,
  `doi` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `title_of_book` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
--

--
-- Table structure for table `btech_be_ug_details`
--

CREATE TABLE `btech_be_ug_details` (
  `user_id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `university` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year_of_joining` int(11) NOT NULL,
  `year_of_completion` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `division` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `user_id` int(11) DEFAULT NULL,
  `best_papers` varchar(255) DEFAULT NULL,
  `phd` varchar(255) DEFAULT NULL,
  `PG` varchar(255) DEFAULT NULL,
  `UG` varchar(255) DEFAULT NULL,
  `12` varchar(255) DEFAULT NULL,
  `10` varchar(255) DEFAULT NULL,
  `pay_slip` varchar(255) DEFAULT NULL,
  `NOC` varchar(255) DEFAULT NULL,
  `post_phd` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_history`
--

CREATE TABLE `employment_history` (
  `user_id` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `date_of_joining` varchar(255) DEFAULT NULL,
  `date_of_leaving` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Table structure for table `industrial_experience`
--

CREATE TABLE `industrial_experience` (
  `user_id` int(11) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `work_profile` varchar(255) DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `date_of_leaving` date DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `user_id` int(11) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `membership_stat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `mtech_me_pg_details`
--

CREATE TABLE `mtech_me_pg_details` (
  `user_id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `university` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year_of_joining` int(11) NOT NULL,
  `year_of_completion` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `division` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `user_id` int(11) DEFAULT NULL,
  `inventor` varchar(255) DEFAULT NULL,
  `title_of_patent` varchar(255) DEFAULT NULL,
  `country_of_patent` varchar(255) DEFAULT NULL,
  `patent_number` varchar(255) DEFAULT NULL,
  `date_of_filing` date DEFAULT NULL,
  `date_published` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `phd_details`
--

CREATE TABLE `phd_details` (
  `user_id` int(11) NOT NULL,
  `university` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `year_of_joining` int(11) NOT NULL,
  `title_of_thesis` varchar(255) DEFAULT NULL,
  `date_of_award` date DEFAULT NULL,
  `date_of_successful_thesis` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--


--
-- Table structure for table `present_employment`
--

CREATE TABLE `present_employment` (
  `user_id` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `statusnow` varchar(50) DEFAULT NULL,
  `date_of_joining` varchar(50) DEFAULT NULL,
  `date_of_leaving` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `professional_train`
--

CREATE TABLE `professional_train` (
  `user_id` int(11) DEFAULT NULL,
  `type1` varchar(255) DEFAULT NULL,
  `org` varchar(255) DEFAULT NULL,
  `yeaa_r` int(11) DEFAULT NULL,
  `dur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `research_experience`
--

CREATE TABLE `research_experience` (
  `user_id` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `supervisor` varchar(255) DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `date_of_leaving` date DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_superv`
--

CREATE TABLE `research_superv` (
  `user_id` int(11) DEFAULT NULL,
  `Type1` varchar(255) DEFAULT NULL,
  `name_of_stu` varchar(255) DEFAULT NULL,
  `title_thesis` varchar(255) DEFAULT NULL,
  `role1` varchar(255) DEFAULT NULL,
  `ongoing` enum('Yes','No') DEFAULT NULL,
  `ongoing_since` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `user_id` int(11) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `school` varchar(255) NOT NULL,
  `year_of_passing` int(11) DEFAULT NULL,
  `percentag` decimal(5,2) DEFAULT NULL,
  `division_class` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `specialization_research`
--

CREATE TABLE `specialization_research` (
  `user_id` int(11) DEFAULT NULL,
  `area_of_specialization` text DEFAULT NULL,
  `current_area_of_research` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--


--
-- Table structure for table `spons_consult`
--

CREATE TABLE `spons_consult` (
  `user_id` int(11) DEFAULT NULL,
  `type2` varchar(255) DEFAULT NULL,
  `agency` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `period1` varchar(255) DEFAULT NULL,
  `role1` varchar(255) DEFAULT NULL,
  `status1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `summary_of_publication`
--

CREATE TABLE `summary_of_publication` (
  `user_id` int(11) DEFAULT NULL,
  `no_of_journal_international` int(11) DEFAULT NULL,
  `no_of_journal_national` int(11) DEFAULT NULL,
  `no_of_conference_international` int(11) DEFAULT NULL,
  `no_of_conference_national` int(11) DEFAULT NULL,
  `number_of_patents` int(11) DEFAULT NULL,
  `no_of_books` int(11) DEFAULT NULL,
  `no_of_book_chapters` int(11) DEFAULT NULL,
  `google_scholar_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `teaching_experience`
--

CREATE TABLE `teaching_experience` (
  `user_id` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `course_taught` varchar(255) DEFAULT NULL,
  `UG_PG` varchar(50) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `num_students` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Cast` varchar(50) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `mid_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `id_proof_number` varchar(100) DEFAULT NULL,
  `id_proof_file` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(100) DEFAULT NULL,
  `correspondence_street` varchar(255) DEFAULT NULL,
  `correspondence_city` varchar(100) DEFAULT NULL,
  `correspondence_state` varchar(100) DEFAULT NULL,
  `correspondence_country` varchar(100) DEFAULT NULL,
  `correspondence_postal_code` varchar(20) DEFAULT NULL,
  `permanent_street` varchar(255) DEFAULT NULL,
  `permanent_city` varchar(100) DEFAULT NULL,
  `permanent_state` varchar(100) DEFAULT NULL,
  `permanent_country` varchar(100) DEFAULT NULL,
  `permanent_postal_code` varchar(20) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `alternate_mobile` varchar(20) DEFAULT NULL,
  `landline` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alternate_email` varchar(100) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
CREATE TABLE pdf_files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    pdf_content LONGBLOB NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_qualification`
--
ALTER TABLE `additional_qualification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `application_details`
--
ALTER TABLE `application_details`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `advertisement_number` (`advertisement_number`);

--
-- Indexes for table `awards_recog`
--
ALTER TABLE `awards_recog`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `best10_publications`
--
ALTER TABLE `best10_publications`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `btech_be_ug_details`
--
ALTER TABLE `btech_be_ug_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employment_history`
--
ALTER TABLE `employment_history`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `industrial_experience`
--
ALTER TABLE `industrial_experience`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mtech_me_pg_details`
--
ALTER TABLE `mtech_me_pg_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `phd_details`
--
ALTER TABLE `phd_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `present_employment`
--
ALTER TABLE `present_employment`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `professional_train`
--
ALTER TABLE `professional_train`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `research_experience`
--
ALTER TABLE `research_experience`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `research_superv`
--
ALTER TABLE `research_superv`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `specialization_research`
--
ALTER TABLE `specialization_research`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `spons_consult`
--
ALTER TABLE `spons_consult`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `summary_of_publication`
--
ALTER TABLE `summary_of_publication`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `teaching_experience`
--
ALTER TABLE `teaching_experience`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_qualification`
--
ALTER TABLE `additional_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_qualification`
--
ALTER TABLE `additional_qualification`
  ADD CONSTRAINT `additional_qualification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `application_details`
--
ALTER TABLE `application_details`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `awards_recog`
--
ALTER TABLE `awards_recog`
  ADD CONSTRAINT `awards_recog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `best10_publications`
--
ALTER TABLE `best10_publications`
  ADD CONSTRAINT `best10_publications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `btech_be_ug_details`
--
ALTER TABLE `btech_be_ug_details`
  ADD CONSTRAINT `btech_be_ug_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `employment_history`
--
ALTER TABLE `employment_history`
  ADD CONSTRAINT `employment_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `industrial_experience`
--
ALTER TABLE `industrial_experience`
  ADD CONSTRAINT `industrial_experience_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `mtech_me_pg_details`
--
ALTER TABLE `mtech_me_pg_details`
  ADD CONSTRAINT `mtech_me_pg_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `patents`
--
ALTER TABLE `patents`
  ADD CONSTRAINT `patents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `phd_details`
--
ALTER TABLE `phd_details`
  ADD CONSTRAINT `phd_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `present_employment`
--
ALTER TABLE `present_employment`
  ADD CONSTRAINT `present_employment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `professional_train`
--
ALTER TABLE `professional_train`
  ADD CONSTRAINT `professional_train_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `research_experience`
--
ALTER TABLE `research_experience`
  ADD CONSTRAINT `research_experience_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `research_superv`
--
ALTER TABLE `research_superv`
  ADD CONSTRAINT `research_superv_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `specialization_research`
--
ALTER TABLE `specialization_research`
  ADD CONSTRAINT `specialization_research_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `spons_consult`
--
ALTER TABLE `spons_consult`
  ADD CONSTRAINT `spons_consult_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `summary_of_publication`
--
ALTER TABLE `summary_of_publication`
  ADD CONSTRAINT `summary_of_publication_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `teaching_experience`
--
ALTER TABLE `teaching_experience`
  ADD CONSTRAINT `teaching_experience_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;
