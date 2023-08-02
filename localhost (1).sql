-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2016 at 09:46 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `praco`
--
CREATE DATABASE IF NOT EXISTS `praco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `praco`;

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE IF NOT EXISTS `import` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`id`, `name`, `email`, `status`) VALUES
(1, 'chira', 'james@gmail.com', 0),
(2, 'chira', 'john@gmail.com', 0),
(3, 'chira', 'maureen@gmail.com', 0),
(4, 'chira', 'james@gmail.com', 0),
(5, 'chira', 'john@gmail.com', 0),
(6, 'chira', 'maureen@gmail.com', 0),
(7, 'chira', 'james@gmail.com', 0),
(8, 'chira', 'john@gmail.com', 0),
(9, 'chira', 'maureen@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `panel` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `venue` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `panel`, `details`, `venue`) VALUES
(4, '2016-10-05', 'panel2', 'project progress presentation', 'cl2'),
(5, '2016-10-05', 'panel2', 'gfgfgf', 'fdfdfd'),
(6, '2016-11-07', 'panel3', 'jbou', 'hiivii');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `u_id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `onames` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`u_id`, `fname`, `onames`, `email`, `reg_no`, `dept`) VALUES
(1, 'james', 'chira', 'james@gmail.com', 'c027-01-0590/2013', 'information technology'),
(2, 'john', 'chira', 'john@gmail.com', 'c027-01-0590/2014', 'information technology'),
(3, 'maureen', 'chira', 'maureen@gmail.com', 'c027-01-0590/2015', 'information technology');
--
-- Database: `spms`
--
CREATE DATABASE IF NOT EXISTS `spms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spms`;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`f_id`, `question`, `answer`, `name`) VALUES
(1, 'are past project available in the website', '', 'john'),
(2, 'bfhfgdgd', '', 'james  chira');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `l_id` int(10) NOT NULL,
  `school` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lid` (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `marks_id` int(100) NOT NULL AUTO_INCREMENT,
  `s_id` int(4) DEFAULT NULL,
  `marks` int(100) NOT NULL,
  `average_score` int(100) NOT NULL,
  `presetation_id` int(100) NOT NULL,
  `project_id` int(4) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `grade` varchar(100) NOT NULL,
  PRIMARY KEY (`marks_id`),
  KEY `s_id` (`s_id`),
  KEY `presetation_id` (`presetation_id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `m_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `presentation_id` int(100) NOT NULL AUTO_INCREMENT,
  `presentation_name` varchar(100) NOT NULL,
  PRIMARY KEY (`presentation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`presentation_id`, `presentation_name`) VALUES
(1, 'proposal'),
(2, 'progress'),
(3, 'final');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `p_id` int(4) NOT NULL AUTO_INCREMENT,
  `s_id` int(10) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `p_title` varchar(500) NOT NULL,
  `category` text NOT NULL,
  `abstract` varchar(1500) NOT NULL,
  `period_done` varchar(20) NOT NULL,
  `Supervisor` varchar(50) NOT NULL,
  `l_id` int(10) DEFAULT NULL,
  `project_document` varchar(200) NOT NULL,
  `sch_id` int(100) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `reg_no` (`reg_no`),
  KEY `project` (`s_id`),
  KEY `FK_S` (`l_id`),
  KEY `sch_id` (`sch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `panel` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `venue` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `panel`, `details`, `venue`) VALUES
(1, '2016-11-18', 'panel 1', 'proposal presentation', 'cl2');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `sch_id` int(100) NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(100) NOT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sch_id`, `sch_name`) VALUES
(2, 'science'),
(3, 'tourism'),
(4, 'nursing'),
(5, 'engineering'),
(6, 'business'),
(7, 'computer science/IT');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` int(10) NOT NULL,
  `Supervisor` varchar(40) NOT NULL,
  `lec_id` int(10) NOT NULL,
  `supervised` varchar(10) NOT NULL,
  `status` varchar(300) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `status` (`student_id`),
  KEY `fk_lec` (`lec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE IF NOT EXISTS `suggest` (
  `sug_id` int(100) NOT NULL AUTO_INCREMENT,
  `s_id` int(4) NOT NULL,
  `lec_name` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`sug_id`),
  KEY `proj_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_type` char(20) NOT NULL,
  `fname` char(20) DEFAULT NULL,
  `onames` char(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `reg_no` varchar(100) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `user_type`, `fname`, `onames`, `email`, `phone`, `password`, `reg_no`, `pic`, `status`) VALUES
(17, 'cordinator', 'james', 'maina', 'james@gmail.com', '0724733788', 'james', '', NULL, 0),
(18, 'Student', 'maureen', 'chira', 'maureenchira@gmail.com', '724733788', 'pass', 'c026-01-1314/2016', NULL, 1),
(19, 'lecturer', 'john', 'muiruri', 'john@gmail.com', '0702929875', 'john', ' ', ' ', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `lid` FOREIGN KEY (`l_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`presetation_id`) REFERENCES `presentation` (`presentation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `project` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_4` FOREIGN KEY (`s_id`) REFERENCES `user` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`l_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`sch_id`) REFERENCES `school` (`sch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`lec_id`) REFERENCES `user` (`u_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `suggest`
--
ALTER TABLE `suggest`
  ADD CONSTRAINT `suggest_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
