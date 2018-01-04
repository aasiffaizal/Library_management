-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2018 at 11:02 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library_Management`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `Id` int(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(255) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Born_in` varchar(50) NOT NULL,
  `About` text,
  `Slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`Id`, `Name`, `Age`, `Gender`, `Born_in`, `About`, `Slug`) VALUES
(1, 'J.K Rowling', 52, 'Female', 'United Kingdom', 'Joanne Rowling, CH, OBE, FRSL, FRCPE, who writes under the pen names J. K. Rowling and Robert Galbraith, is a British novelist and screenwriter who is best known for writing the Harry Potter fantasy series. The books have won multiple awards, and sold more than 400 million copies.They have become the best-selling book series in history and been the basis for a series of films, over which Rowling had overall approval on the scripts and was a producer on the final films in the series.', 'jk-rownling'),
(2, 'Paulo Coelho', 70, 'Male', 'Brazil', 'Paulo Coelho de Souza is a Brazilian lyricist and novelist and the recipient of numerous international awards. He is best known for his widely translated novel The Alchemist. He is the writer with the highest number of social media followers reaching over 29.5 million fans through his Facebook page and 12.2 million followers on Twitter. A keen user of electronic media, in 2014 he uploaded his personal papers online to create a virtual Paulo Coelho Foundation.', 'paulo-coelho'),
(3, 'Arundhati Roy', 56, 'Female', 'Shillong', 'Suzanna Arundhati Roy (born 24 November 1961) is an Indian author best known for her novel The God of Small Things (1997), which won the Man Booker Prize for Fiction in 1997 and became the biggest-selling book by a non-expatriate Indian author. She is also a political activist involved in human rights and environmental causes.', 'arundhati-roy'),
(4, 'Aravind Adiga', 43, 'Male', 'India', 'Aravind Adiga (born 23 October 1974) is an Indo-Australian writer and journalist. His debut novel, The White Tiger, won the 2008 Man Booker Prize.', 'aravind-adiga'),
(5, 'Aasdad', 213, 'Male', '123', '213', 'aasdad');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `Content` text,
  `Slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `Name`, `Author`, `ISBN`, `Content`, `Slug`) VALUES
(1, 'Harry Potter and the cursed child', 'J.K Rowling', '9781338099133', 'It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children.\r\n\r\nWhile Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.', 'harry-potter-and-the-cursed-child'),
(2, 'Harry Potter', 'J.K Rowling', '123456789', 'sadasd', 'harry-potter'),
(3, 'The White Tiger', 'Aravind Adiga', '9856321456852', 'The White Tiger is the debut novel by Indian author Aravind Adiga. It was first published in 2008 and won the 40th Man Booker Prize in the same year. The novel provides a darkly humorous perspective of India’s class struggle in a globalized world as told through a retrospective narration from Balram Halwai, a village boy. In detailing Balram\'s journey first to Delhi, where he works as a chauffeur to a rich landlord, and then to Bangalore, the place to which he flees after killing his master and stealing his money, the novel examines issues of religion, caste, loyalty, corruption and poverty in India. Ultimately, Balram transcends his sweet-maker caste and becomes a successful entrepreneur, establishing his own taxi service. In a nation proudly shedding a history of poverty and underdevelopment, he represents, as he himself says, "tomorrow."\r\n\r\nThe novel has been well-received, making the New York Times bestseller list in addition to winning the Man Booker Prize. Aravind Adiga, 33 at the time, was the second youngest writer as well as the fourth debut writer to win the prize in 2008. Adiga says his novel "attempt[s] to catch the voice of the men you meet as you travel through India — the voice of the colossal underclass." According to Adiga, the exigence for The White Tiger was to capture the unspoken voice of people from "the Darkness" – the impoverished areas of rural India, and he "wanted to do so without sentimentality or portraying them as mirthless humorless weaklings as they are usually."', 'the-white-tiger'),
(4, 'The Alchemist', 'Paulo Coelho', '9632541278965', 'The Alchemist (Portuguese: O Alquimista) is a novel by Brazilian author Paulo Coelho which was first published in 1988. Originally written in Portuguese, it became an international bestseller translated into some 70 languages as of 2016. An allegorical novel, The Alchemist follows a young Andalusian shepherd in his journey to the pyramids of Egypt, after having a recurring dream of finding treasure there.\r\n\r\nOver the years there have been film and theatrical adaptations of the work and musical interpretations of it.', 'the-alchemist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
