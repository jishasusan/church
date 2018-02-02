-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 02:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `herbshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE IF NOT EXISTS `additem` (
`id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_feature` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `itemtype` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additem`
--

INSERT INTO `additem` (`id`, `image`, `item_name`, `item_description`, `item_feature`, `cost`, `itemtype`) VALUES
(1, 'image/1511407100calendula.jpg', 'calendula', 'Calendula has effective antifungal properties.', 'Calendula has effective antifungal properties.', 230, 0),
(2, 'image/1511407146goji-berry.jpg', 'Gojiberi', 'Goji berry is a fruit that has been used in traditional Chinese medicine for at least 2000 years.', 'Goji berry is a fruit that has been used in traditional Chinese medicine for at least 2000 years.', 300, 0),
(3, 'image/1511407211goldenrod.jpg', 'Goldenrod', 'Goldenrod flowers are especially beneficial to the kidneys and urinary system.', 'Goldenrod flowers are especially beneficial to the kidneys and urinary system.', 240, 0),
(4, 'image/1511407297gravel root.jpg', 'GravelRoot', 'As its name suggests, â€œGravel rootâ€ is useful for â€œgravel,â€ another name for kidney stones', 'As its name suggests, â€œGravel rootâ€ is useful for â€œgravel,â€ another name for kidney stones. ', 450, 0),
(5, 'image/1511407345apple.jpg', 'Apple', 'Apple is one of the most widely cultivated tree and widely known for the many members. ', 'Apples grow on small, deciduous trees. Apples are not planted by seeds, for a strange to say, the tr', 320, 1),
(6, 'image/1511416665Clementines.jpg', 'Clementinues', 'clementinues is vitamin rich', 'clementinues is vitamin rich', 410, 1),
(7, 'image/1511416795papaya.jpg', 'Papaya', 'Peel the papaya and blend its flesh into a smooth pulp.', 'Peel the papaya and blend its flesh into a smooth pulp.', 420, 1),
(8, 'image/1511492603hops blossam.jpg', 'Herb123', 'Chumma', 'angane onnum illa', 2000, 0),
(9, 'image/1511495255rosehips.jpg', 'Rosehips h', 'vitamin rich', 'useful for various diseases', 890, 0),
(11, 'image/1511495461corn.jpg', 'Corn b', 'sweet fruit', 'vitamin rich ', 650, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additem`
--
ALTER TABLE `additem`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additem`
--
ALTER TABLE `additem`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
