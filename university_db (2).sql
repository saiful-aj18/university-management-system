-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2026 at 10:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `enroll_student` (IN `s_id` INT, IN `c_id` INT, IN `sem` VARCHAR(20))   BEGIN

INSERT INTO Enrollment(student_id,course_id,semester)
VALUES(s_id,c_id,sem);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500'),
(3, 'Saiful', '3e7ed764fcd1ae05e24ff8a1552fc1e0'),
(4, 'Muhit', '0efa16b02331c534fd83f9e91d8d0f80'),
(5, 'Afzal', '61fe26512900235150c30122a14a2835');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `credits` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `instructor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `credits`, `department_id`, `instructor_id`) VALUES
(1, 'Data Structures', 3, 1, 1),
(2, 'Database Systems', 3, 1, 1),
(3, 'Digital Electronics', 3, 2, 2),
(4, 'Business Analytics', 3, 3, 3),
(5, 'Operating Systems', 3, 1, 1),
(6, 'History', 3, 3, 3),
(7, 'DMNT', 3, 1, 2),
(8, 'Microprocessor Microcontroller', 2, 2, 3),
(9, 'App Development Lab', 1, 1, 1),
(10, 'Internet Programming', 1, 1, 1),
(11, 'IBM', 3, 3, 3),
(12, 'Election Engineering', 3, 1, 2),
(13, 'MLADE', 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'Computer Science'),
(2, 'Electrical Engineering'),
(3, 'Business Administration');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `student_id`, `course_id`, `semester`, `grade`) VALUES
(1, 1, 1, 'Spring 2025', 'A'),
(2, 1, 2, 'Spring 2025', 'B'),
(3, 2, 1, 'Spring 2025', 'A'),
(4, 3, 3, 'Spring 2025', 'B'),
(5, 4, 4, 'Spring 2025', 'A'),
(6, 5, 5, 'Spring 2025', 'B'),
(7, 1, 3, 'Spring 2026', NULL),
(8, 1, 2, 'Spring 2026', NULL),
(9, 1, 3, 'Spring 2025', NULL),
(10, 1, 4, 'Spring 2026', NULL),
(11, 1, 5, 'Spring 2025', NULL),
(12, 1, 6, 'Spring 2026', NULL),
(13, 2, 1, 'Spring 2026', NULL),
(14, 3, 6, 'Spring 2026', NULL),
(15, 2, 6, 'Spring 2026', NULL),
(16, 4, 1, 'Spring 2026', NULL),
(17, 5, 6, 'Spring 2026', NULL),
(18, 2, 7, 'Spring 2026', NULL),
(19, 3, 7, 'Spring 2026', NULL),
(20, 4, 7, 'Spring 2026', NULL),
(21, 5, 6, 'Spring 2025', NULL),
(22, 4, 4, 'Spring 2026', NULL),
(23, 3, 8, 'Spring 2026', NULL),
(24, 1, 8, 'Spring 2026', NULL),
(25, 4, 2, 'Spring 2026', NULL),
(26, 6, 1, 'Spring 2025', NULL),
(27, 6, 2, 'Spring 2025', NULL),
(28, 6, 3, 'Spring 2025', NULL),
(29, 6, 4, 'Spring 2025', NULL),
(30, 6, 5, 'Spring 2025', NULL),
(31, 6, 6, 'Spring 2025', NULL),
(32, 6, 7, 'Spring 2026', NULL),
(33, 6, 8, 'Spring 2025', NULL),
(34, 7, 1, 'Spring 2025', NULL),
(35, 7, 2, 'Spring 2025', NULL),
(36, 7, 3, 'Spring 2025', NULL),
(37, 7, 4, 'Spring 2025', NULL),
(38, 7, 5, 'Spring 2026', NULL),
(39, 7, 7, 'Spring 2026', NULL),
(40, 6, 1, 'Spring 2026', NULL),
(41, 1, 9, 'Spring 2026', NULL),
(42, 6, 9, 'Spring 2026', NULL),
(43, 7, 9, 'Spring 2026', NULL),
(44, 4, 9, 'Spring 2026', NULL),
(45, 1, 10, '', NULL),
(46, 6, 10, 'Spring 2026', NULL),
(47, 7, 10, 'Spring 2026', NULL),
(48, 8, 10, 'Spring 2026', NULL),
(49, 4, 11, 'Spring 2026', NULL),
(50, 1, 12, 'Spring 2026', NULL),
(51, 6, 12, 'Spring 2026', NULL),
(52, 7, 12, 'Spring 2026', NULL),
(53, 8, 12, 'Spring 2026', NULL),
(54, 8, 1, 'Spring 2026', NULL),
(55, 9, 1, 'Spring 2026', NULL),
(56, 10, 4, 'Spring 2026', NULL),
(57, 11, 2, 'Spring 2026', NULL),
(58, 11, 9, 'Spring 2026', NULL),
(59, 7, 13, 'Spring 2026', NULL),
(60, 6, 13, 'Spring 2026', NULL);

--
-- Triggers `enrollment`
--
DELIMITER $$
CREATE TRIGGER `prevent_duplicate_enrollment` BEFORE INSERT ON `enrollment` FOR EACH ROW BEGIN

IF EXISTS (
    SELECT *
    FROM Enrollment
    WHERE student_id = NEW.student_id
    AND course_id = NEW.course_id
    AND semester = NEW.semester
)

THEN

SIGNAL SQLSTATE '45000'
SET MESSAGE_TEXT = 'Student already enrolled in this course';

END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `instructor_name`, `department_id`) VALUES
(1, 'Dr Hasan', 1),
(2, 'Dr Alam', 2),
(3, 'Dr Rahman', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `adviser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `email`, `department_id`, `adviser_id`) VALUES
(1, 'Rahim', 'rahim@gmail.com', 1, NULL),
(2, 'Karim', 'karim@gmail.com', 1, NULL),
(3, 'Sakib', 'sakib@gmail.com', 2, NULL),
(4, 'Nusrat', 'nusrat@gmail.com', 3, NULL),
(5, 'Tanvir', 'tanvir@gmail.com', 1, NULL),
(6, 'Saiful Islam', 'alexjamson118@gmail.com', 1, NULL),
(7, 'Muhit Shafayth', 'muhitshafayth05@gmail.com', 1, NULL),
(8, 'Afzal', 'afzal2@gmail.com', 1, NULL),
(9, 'Rabiul', 'rabiul123@gmail.com', 1, NULL),
(10, 'Samil', 'samil10@gmail.com', 3, NULL),
(11, 'Ragib', 'ragib123@gmail.com', 1, 1),
(12, 'Sarah Ahmed', 'sarah@university.edu', 3, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_transcript`
-- (See below for the actual view)
--
CREATE TABLE `student_transcript` (
`student_name` varchar(100)
,`course_name` varchar(100)
,`semester` varchar(20)
,`grade` varchar(2)
);

-- --------------------------------------------------------

--
-- Structure for view `student_transcript`
--
DROP TABLE IF EXISTS `student_transcript`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_transcript`  AS SELECT `s`.`name` AS `student_name`, `c`.`course_name` AS `course_name`, `e`.`semester` AS `semester`, `e`.`grade` AS `grade` FROM ((`students` `s` join `enrollment` `e` on(`s`.`student_id` = `e`.`student_id`)) join `courses` `c` on(`e`.`course_id` = `c`.`course_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `fk_adviser` (`adviser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`instructor_id`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_adviser` FOREIGN KEY (`adviser_id`) REFERENCES `instructors` (`instructor_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
