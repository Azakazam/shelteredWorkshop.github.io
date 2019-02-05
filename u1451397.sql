-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2016 at 01:41 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1451397`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_ID` int(10) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `number` int(16) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_ID`, `name`, `course_ID`, `email`, `number`, `gender`) VALUES
(57, 'king', 5, 'chams@hotmail.com', 2147483647, 'male'),
(63, 'hrtget', 1, 'fwefw', 0, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_ID` int(10) unsigned NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_ID`, `course_name`, `course_description`) VALUES
(1, 'numeracy', 'In our highly technical world numeracy skills, particularly the ability to interpret data, are becoming increasingly important and are highly sought after by employers. A lack of mathematical confidence and poor numeracy skills are barriers to employment as numeracy tests are increasingly part of the recruitment process, often early on.'),
(2, 'literacy ', ' Literacy is delivered with real life dialogue, discussions, negotiations and conversations. It has a full range of computer-based activities including listening tasks, text display options, speaking and conversation exercises.'),
(3, 'woodwork', 'From building your own bookcases and wooden stools to carrying out beautiful carvings on house decorations and artwork, woodwork is both interesting and challenging, although its common to stereotype it as a bit dull and too much hard work.'),
(4, ' metal work', 'Learn the basic skills for working with new and scrap metals whilst exploring sculptural or applied ideas. Welding, gas cutting, grinding and safe workshop practice are covered. Work on personal or tutor led projects. It is essential to wear old clothes and strong footwear.'),
(5, 'upholstery', 'basic upholstery about recovering and chair repairs. Subjects covered include drop in seats and fixed seats, using traditional materials. Students can bring in their own item of furniture or the teacher can provide a sample for them to work on.'),
(6, 'gardening', 'If you want to learn more about gardening, this course could be just what you''re looking for. From a workshop at a local garden lasting a few hours to a formal course at college leading to recognised qualification.'),
(7, 'IT', 'ever wanted to make a website, maybe program some software or even own your own IT business? well this IT will be the starting point of a new career towards the IT industry');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE IF NOT EXISTS `director` (
  `director_id` int(10) unsigned NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`director_id`, `first_name`, `last_name`) VALUES
(1, 'Steven', 'Spielberg'),
(2, 'Martin', 'Scorcese'),
(3, 'Debra', 'Granik'),
(4, 'George', 'Lucas'),
(5, 'Robert', 'Zemeckis');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `film_id` int(10) unsigned NOT NULL,
  `title` varchar(200) NOT NULL,
  `year` varchar(4) NOT NULL,
  `director_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`film_id`, `title`, `year`, `director_id`) VALUES
(1, 'Jaws', '1975', 1),
(2, 'Mean Streets', '1973', 2),
(3, 'Who Framed Roger Rabbit', '1988', 5),
(4, 'Forrest Gump', '1994', 5),
(5, 'Star Wars', '1977', 4),
(6, 'Back to the Future', '1985', 5);

-- --------------------------------------------------------

--
-- Table structure for table `film_genre`
--

CREATE TABLE IF NOT EXISTS `film_genre` (
  `film_id` int(10) unsigned NOT NULL,
  `genre_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film_genre`
--

INSERT INTO `film_genre` (`film_id`, `genre_id`) VALUES
(5, 1),
(6, 1),
(1, 2),
(2, 2),
(2, 3),
(3, 4),
(4, 4),
(3, 5),
(1, 6),
(5, 6),
(6, 6),
(4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `game_ID` int(10) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `image` varchar(80) NOT NULL,
  `year` int(4) NOT NULL,
  `ageRating` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_ID`, `name`, `image`, `year`, `ageRating`) VALUES
(1, 'megaman 3', 'images/megaman5.jpg', 2002, 3),
(2, 'sonic colours', 'images/soniccolors.png', 2012, 3),
(3, 'little big planet', 'images/littlebplanet.jpg', 2011, 7),
(4, 'gears of war 2', 'images/gears.jpg', 2012, 18),
(5, 'total drama world tour', 'images/totaldrama.jpg', 2009, 3),
(6, 'pokemon omega', 'images/omega.png', 2014, 7),
(7, 'Doubutsu no Mori', 'images/jap.png', 2012, 3),
(8, 'little king''s story', 'images/king.jpg', 2009, 3);

-- --------------------------------------------------------

--
-- Table structure for table `game_genre`
--

CREATE TABLE IF NOT EXISTS `game_genre` (
  `genre_ID` int(11) NOT NULL,
  `game_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_genre`
--

INSERT INTO `game_genre` (`genre_ID`, `game_ID`) VALUES
(1, 2),
(2, 1),
(2, 8),
(3, 4),
(4, 3),
(4, 6),
(4, 7),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `game_platform`
--

CREATE TABLE IF NOT EXISTS `game_platform` (
  `platform_ID` int(11) NOT NULL,
  `game_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_platform`
--

INSERT INTO `game_platform` (`platform_ID`, `game_ID`) VALUES
(1, 1),
(2, 3),
(2, 5),
(3, 4),
(4, 6),
(4, 7),
(5, 2),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `genre_ID` int(10) unsigned NOT NULL,
  `genreName` varchar(30) NOT NULL,
  `genreDescription` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_ID`, `genreName`, `genreDescription`) VALUES
(1, 'arcade', 'requires players to use quick reflexes, accuracy, and timing to overcome obstacles. Arcade games often have short levels, simple and intuitive control schemes, and rapidly increasing difficulty.'),
(2, 'action-adventure', 'Action-adventure games tend to focus on exploration and usually involve item gathering, simple puzzle solving, and combat.'),
(3, 'shooter', 'A shooter game focuses primarily on combat involving projectile weapons, such as guns and missiles. They can also be divided into 2D, first-person and third-person shooters.'),
(4, 'RPG', 'Players control a central game character, or multiple game characters, usually called a party, and attain victory by completing a series of quests or reaching the conclusion of a central storyline. Players explore a game world, while solving puzzles and engaging in tactical combat. A key feature of the genre is that characters grow in power and abilities, and characters are typically designed by the player.'),
(5, 'sports', 'Sports are games that play competitively one team containing or controlled by you, and another team that opposes you.');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE IF NOT EXISTS `platform` (
  `platform_ID` int(10) unsigned NOT NULL,
  `platformName` varchar(15) NOT NULL,
  `platformDescription` text NOT NULL,
  `platformImage` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`platform_ID`, `platformName`, `platformDescription`, `platformImage`) VALUES
(1, 'gameboy', 'Packing a huge amount of power into a tiny package, this little console proved a revolution in videogaming when it launched in Japan in 1989. Since then, this pocket-sized system has sold over 100 million units', 'images/gameboyplat.png'),
(2, 'ps3', 'First arriving in 2006, the PlayStation 3 has gone from strength to strength and firmly established itself as a favourite amongst gamers the world over!', 'images/ps3.png'),
(3, 'xbox 360', 'Xbox 360 brings you a total games and entertainment experience. The largest library of games, including titles that get you right into the thick of it with Kinect. Plus, your whole family can watch HD movies, TV shows, live events, music, sports and more across all your devices.', 'images/xbox360.jpg'),
(4, '3DS', 'Nintendo 3DS is your handheld portal to a world of amazing games and features, allowing you to connect with friends and the global Nintendo community with sharing options like never before. Take your handheld gaming experience to another dimension with Nintendo 3DS', 'images/3ds.png'),
(5, 'wii', 'The Nintendo Wii Console comes with a motion sensitive remote which translates your movements directly onto the on screen activity. it offers big fun at a mini price. It comes packed with a red Wii Remote Plus controller and nunchuk accessory, Plug it in and play!', 'images/wii.png');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_ID` int(11) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `occupation` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `name`, `username`, `password`, `email`, `occupation`) VALUES
(2, 'west yorkshire Mr', 'cooldude', 'test', 'pokedude4@hotmail.co.uk', 'manager'),
(3, 'greggs', 'test', '1', 'starnursing@hotmail.com', 'manager'),
(7, 'james', 'cooldude178993', 'diamond', 'boss@hotmail.com', 'manager'),
(8, 'maths', 'pokemon', '123', 'chasm@hotmail.com', 'assistant'),
(9, 'chris', '123', 'diamond', 'pokedude4@hotmail.co.uk', 'manager'),
(10, 'chris', '123', 'diamond', 'pokedude4@hotmail.co.uk', 'manager'),
(11, 'west yorkshire Mr', 'test', '123', 'starnursing@hotmail.com', 'manager'),
(12, 'clive chudi', 'cooldude17', 'diamond', 'pokedude4@hotmail.co.uk', 'manager'),
(16, 'clive nkwo', 'testing', '12', 'clivette17@hotmail.com', 'assistant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_ID`),
  ADD KEY `COURSE` (`course_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_ID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_ID`);

--
-- Indexes for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD PRIMARY KEY (`genre_ID`,`game_ID`);

--
-- Indexes for table `game_platform`
--
ALTER TABLE `game_platform`
  ADD PRIMARY KEY (`platform_ID`,`game_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_ID`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`platform_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `game_platform`
--
ALTER TABLE `game_platform`
  MODIFY `platform_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `platform_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
