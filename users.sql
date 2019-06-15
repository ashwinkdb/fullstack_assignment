-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2019 at 06:12 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `pin` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `mob`, `address`, `pass`, `pin`) VALUES
('324', '432', 432, '423', '432', 432),
('4324', '423', 432, '423', '432', 432),
('eqw', 'ewq', 23, '432', '432', 432),
('Naman Gupta', 'nmgarg1234@gmail.com', 9667284013, 'F block Vijay Nagar', '9990675869', 201002),
('Nman', 'fhjn', 775, 't57gh', 'g576f', 576),
('dfsf', 'fds', 423, 'erw', '234', 234),
('Naman Gupta', 'dsbja@.', 9667284013, 'ghgu', 'yiuy', 78),
('dfbjdbs', '@.', 9667284013, 'we', '6786', 78),
('ewqe', 'rwe@.', 9667284013, 'ty768', '8768', 6868),
('fsd', 'f@,.', 9667284013, 'gjhgj', '575', 76768),
('Naman Gaeg', 'sajk@.gmail.com', 6237347888, 'hfjdsh', '9990675', 323),
('gdfgfd', 'df@.', 8888888888, 'gduhsgq89', '787987', 798798),
('565', '56@.', 1234564586, 'hfgh', 'qwer', 34543),
('ewerwe', 'we@.jh', 7657567765, 'eredf', 'pass', 54),
('ewrwer', 'ewrwer@.', 8989898989, 'rwer', '4549456', 4546),
('rwe', 'iniimi@.', 2131233213, '3123c', '123', 312),
('dwe', 'ew@.', 3425234343, 'fdasfsf', '34324', 423234),
('guyg', 'uuyg@.', 8798787979, 'gkjgig', '879', 89),
('eqweqw', 'wqee@.gf', 3232323223, 'ewf', '32sd', 32),
('fjdnkj', 'njidsbk@.', 9090909090, 'jdfjgj', 'b82268dfce5d92f03efd518656fd5315', 798),
('Tuffy', 'tuffy@gmail.com', 1215653543, 'sdad', 'e10adc3949ba59abbe56e057f20f883e', 1233156),
('das', 'das@.', 3423424233, 'erqr', 'f2fc990265c712c49d51a18a32b39f0c', 4321);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
