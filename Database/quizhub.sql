-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 02:59 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(3) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`) VALUES
(1, 'Animals', 'Animals.jpg'),
(2, 'Program', 'Program.jpg'),
(3, 'GK', 'GK.jpg'),
(4, 'Religion', 'Religion.jpg'),
(5, 'Sports', 'Sports.jpg'),
(6, 'Geography', 'Geography.jpg'),
(7, 'Science', 'Science.jpg'),
(8, 'History', 'History.jpg'),
(9, 'Music', 'Music.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `unm` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `unm`, `psw`, `role`) VALUES
(1, 'Ronak', 'Ronak@123', 'user'),
(2, 'Pankaj', 'Pankaj@123', 'user'),
(3, 'Krima', 'Krima@123', 'user'),
(4, 'Khushi', 'Khushi@123', 'user'),
(5, 'Kush', 'Kush@123', 'user'),
(6, 'admin', 'admin', 'admin'),
(7, 'Try', 'Try@123', '2'),
(8, 'Ghanshyam', 'Ghanshyam', '2');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cssclass` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `cssclass`, `url`, `type`) VALUES
(1, 'Home', 'fa fa-home', 'index.php', '1'),
(2, 'Quizzes', 'fa fa-question-circle', 'quizzes.php', '1'),
(3, 'Sign In', 'fa fa-sign-in-alt', 'login.php', '1'),
(4, 'Sign Up', 'fa fa-user-plus', 'register.php', '1'),
(6, 'Review', 'fa fa-comments', 'review.php', '1'),
(7, 'About Us ', 'fa fa-info', 'about.php', '1'),
(8, 'Quiz', 'fa fa-question-circle', 'quizdisp.php', '3'),
(9, 'Category', 'fa fa-list-alt', 'categorydisp.php', '3'),
(11, 'Sign Up', 'fa fa-user-plus', 'registerdisp.php', '3'),
(12, 'Result', 'fa fa-graduation-cap', 'resultdisp.php', '3'),
(13, 'Review', 'fa fa-comments', 'reviewdisp.php', '3'),
(14, 'Menu', 'fa fa-bars', 'menudisp.php', '3'),
(16, 'Quizzes', 'fa fa-question-circle', 'index.php', '2'),
(17, 'Leaderboard', 'fa fa-graduation-cap', 'lb.php', '2'),
(18, 'Videos', 'fa fa-video', 'video.php', '2'),
(19, 'Review', 'fa fa-comments', 'review.php', '2'),
(21, 'Sign Out', 'fa fa-sign-out-alt', 'logout.php', '2'),
(22, 'Video', 'fa fa-video', 'videodisp.php', '3'),
(23, 'Sign Out', 'fa fa-sign-out-alt', 'logout.php', '3');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(3) NOT NULL,
  `question` varchar(300) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `correct_ans` varchar(100) NOT NULL,
  `category` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_ans`, `category`) VALUES
(1, 'Rhino horn is made up of', 'Keratin', 'Elastin', 'Collagen', 'Fibroin', 'Keratin', 1),
(2, 'Name the only country where both tigers and lions are found', 'South Africa', 'India', 'Kenya', 'Bangladesh', 'India', 1),
(3, 'What is the scientific name of Bengal Tiger', 'Panthera tigris corbetti', 'Panthera tigris amoyensis', 'Panthera tigris altaica', 'Panthera tigris tigris', 'Panthera tigris tigris', 1),
(4, 'Which animal can create the loudest sound among any living creature', 'Whale shark', 'Gibbon', 'Humpback whales', 'Howler Monkey', 'Humpback whales', 1),
(5, 'Which animal has largest brain in the World', 'Dolphin', 'Octopus', 'Blue Whale', 'Sperm Whale', 'Sperm Whale', 1),
(6, 'How many muscles in each ear of a cat', '6', '12', '32', '41', '32', 1),
(7, 'How far can an owl rotate its head', '90 degree', '160 degree', '235 degree', '270 degree', '270 degree', 1),
(8, 'Fennec fox or Desert fox is found in', 'Gobi Desert', 'Sahara Desert', 'Great Victoria Desert', 'Kalahari Desert', 'Sahara Desert', 1),
(9, 'The blood color of octopus is', 'Red', 'Blue', 'Green', 'Yellow', 'Blue', 1),
(10, 'Which one is the slowest animal under water', 'Seahorse', 'Star Fish', 'Tortoise', 'Slug', 'Seahorse', 1),
(11, 'First operating system designed using C programming language.', 'DOS', 'Windows', 'UNIX', 'Mac', 'UNIX', 2),
(12, 'Who is father of C Language?', 'Bjarne Stroustrup', 'James A. Gosling', 'Dennis Ritchie', 'Dr. E.F. Codd', 'Dennis Ritchie', 2),
(13, 'Which of the following computer language is used for artificial intelligence?', 'C', 'COBOL', 'PYTHON', 'PROLOG', 'PROLOG', 2),
(14, 'Which part interprets program instructions and initiate control operations.', 'Input', 'Storage unit', 'Logic unit', 'Control unit', 'Control unit', 2),
(15, 'Which of these is used to perform all input & output operations in Java?', 'streams', 'Variables', 'classes', 'Methods', 'streams', 2),
(16, 'Which of these packages contain all the collection classes?', 'java.lang', 'java.util', 'java.net', 'java.awt', 'java.util', 2),
(17, 'What does AWT stands for?', 'All Window Tools', 'All Writing Tools', 'Abstract Window Toolkit', 'Abstract Writing Toolkit', 'Abstract Window Toolkit', 2),
(18, 'Which type of system puts the user into direct conversation with the computer through a keyboard?', 'Real time processing', 'Interactive computer', 'Batch processing', 'Time sharing', 'Interactive computer', 2),
(19, 'Which exception is thrown by read() method?', 'IOException', 'InterruptedException', 'SystemException', 'SystemInputException', 'IOException', 2),
(20, 'Which of these is used to read a string from the input stream?', 'get()', 'getLine()', 'read()', 'readLine()', 'readLine()', 2),
(21, 'ICAO stands for', 'International Civil Aviation Organization', 'Indian Corporation of Agriculture Organization', 'Institute of Company of Accounts Organization', 'None of the above', 'International Civil Aviation Organization', 3),
(22, 'Film and TV institute of India is located at', 'Pune (Maharashtra)', 'Rajkot (Gujarat)', 'Pimpri (Maharashtra)', 'Perambur (Tamilnadu)', 'Pune (Maharashtra)', 3),
(23, 'Himalayan Mountaineering Institute is at', 'Darjeeling', 'Dehradun', 'Marmago', 'Dispur', 'Darjeeling', 3),
(24, 'Indira Gandhi Centre for Atomic Research, established in 1971, is located at', 'Indore', 'Trombay, Maharashtra', 'Kalpakkam, Chennai', 'Kolkata', 'Kalpakkam, Chennai', 3),
(25, 'The World Largest desert is ?', 'Thar', 'Kalahari', 'Sahara', 'Sonoran', 'Sahara', 3),
(26, 'Mount Everest is located in ?', 'India', 'Nepal', 'Tibet', 'China', 'Nepal', 3),
(27, 'The largest fresh water lake in India is ?', 'Pulicat Lake', 'Veeranam Lake', 'Chilka Lake', 'Kolleru Lake', 'Kolleru Lake', 3),
(28, 'Who among the following has won the Nobel prize 2017 in economics?', 'Joachim Frank', 'Kazuo Ishiguro', 'Richard H Thaler', 'Michael Henderson', 'Richard H Thaler', 3),
(29, 'First University in India was founded at', 'Bombay', 'Chennai', 'Calcutta', 'Delhi', 'Calcutta', 3),
(30, 'The hottest planet in the solar system ?', 'Earth', 'Venus', 'Mars', 'Jupiter', 'Venus', 3),
(31, 'In Hindu mythology, who is the god of death?', 'Indra', 'Sarswati', 'Yama', 'Brahma', 'Yama', 4),
(32, 'The largest Buddhist Monastery in India is located at', 'Gangktok, Sikkim', 'Dharamshala, Himachal Pradesh', 'Tawang, Arunachal Pradesh', 'Sarnath, Uttar Pradesh', 'Tawang, Arunachal Pradesh', 4),
(33, 'The DILWARA TEMPLES at Mount Abu are dedicated to...', 'Adinath', 'Bahubali', 'Gautama Buddha', 'Mahavira', 'Adinath', 4),
(34, 'Which is supreme seat of Sikhs ?', 'Sri Harmider Sahib ,Amritsar', 'Sri Akal Takht Sahib , Amritsar', 'Sri Darbar Sahib ,Amritsar', 'Sri Bangla Sahib , New Delhi', 'Sri Akal Takht Sahib , Amritsar', 4),
(35, 'Name the holy book of the Parsis.', 'Zend Avesta', 'Bible', 'Koran', 'Guru Granth Sahib', 'Zend Avesta', 4),
(36, 'What is the Sikh flag called?', 'Gurdwara', 'Kirpan', 'Khanda', 'Nishan Sahib', 'Nishan Sahib', 4),
(37, 'What was the real name of the founder of Buddhism?', 'Siddharta Gautama', 'Ashoka', 'Borobodur', 'Suryabaya', 'Siddharta Gautama', 4),
(38, 'Which Guru/s Contributed to Sri Guru Granth Sahib Ji ?', 'Fifth Guru', 'First Five and Ninth Guru', 'First Five and Tenth Guru', 'All Gurus', 'First Five and Ninth Guru', 4),
(39, 'The sacred text of the religion of Islam.', 'Torah', 'Qu\'ran', 'Bible', 'Vedas', 'Qu\'ran', 4),
(40, 'Arab prophet; founder of religion of Islam.', 'Jesus', 'Muhammad', 'Moses', 'Abraham', 'Muhammad', 4),
(41, 'Who is the first Indian woman to win an Asian Games gold in 400m run?', 'M.L.Valsamma', 'P.T.Usha', 'Kamaljit Sandhu', 'K.Malleshwari', 'Kamaljit Sandhu', 5),
(42, 'When was Amateur Athletics Federation of India established?', '1936', '1946', '1956', '1966', '1946', 5),
(43, '2010 Commonwealth Games held in ?', 'Canada', 'India', 'Britian', 'Malaysia', 'India', 5),
(44, 'Aparna Popat is a famous Indian', 'Hockey Payer', 'Tennis Player', 'Cricket Player', 'Badminton Player', 'Badminton Player', 5),
(45, 'The HCL Asian Junior Tennis Championship 2017 was held in', 'Jakarta, Indonesia', 'Pune, India', 'Kuala Lumpur, Malaysia', 'Mumbai, India', 'Pune, India', 5),
(46, 'First Indian women Olympic Medal winner is', 'Saina Nehwal', 'M C Mary Kom', 'Karnam Malleshwari', 'Sakshi Malik', 'Karnam Malleshwari', 5),
(47, 'When was the first cricket Test match played?', '1875', '1877', '1870', '1782', '1877', 5),
(48, 'Badminton is National game of which country?', 'Russia', 'Japan', 'India', 'Malaysia', 'Malaysia', 5),
(49, 'Who was declared be Wisden as ?The Best Indian Bowler of the Century? (20th century)?', 'B.S. Bedi', 'Kapil Dev', 'Subhash V. Gupte', 'B.S. Chandrashekhar', 'B.S. Chandrashekhar', 5),
(50, 'Indira Gandhi Gold Cup is associated with', 'Hockey', 'Football', 'Boxing', 'Basketball', 'Hockey', 5),
(51, 'The great Victoria Desert is located in', 'Canada', 'West Africa', 'Australia', 'North America', 'Australia', 6),
(52, 'Which of the following rivers does not flow into the Arabian Sea?', 'Tungabhadra', 'Sabarmati', 'Mandovi', 'Narmada', 'Tungabhadra', 6),
(53, 'The famous hill-station ?Kodaikanal? lies in :', 'Nilgiri hills', 'Palani hills', 'Cardamom hills', 'Javadi hills', 'Palani hills', 6),
(54, 'The Andaman and Nicobar Islands are submerged parts of mountain range called:', 'Arakan Yoma', 'Pegu Yoma', 'Askai Chin', 'Tien Shan', 'Arakan Yoma', 6),
(55, 'Asia?s largest tulip garden is located in which state?', 'Jammu & Kashmir', 'Assam', 'Sikkim', 'Uttarakhand', 'Jammu & Kashmir', 6),
(56, 'From which of the following countries India does NOT import Uranium?', 'Kazakhstan', 'Namibia', 'Brazil', 'Mongolia', 'Brazil', 6),
(57, 'Majuli, the largest river island in the world is located in which among the following states of India?', 'Assam', 'Manipur', 'Nagaland', 'Tripura', 'Assam', 6),
(58, '?National Seed Research and Training Centre? is located at?', 'Lucknow', 'Pune', 'Varanasi', 'Bhopal', 'Varanasi', 6),
(59, '?Centre for Earth Science Studies? is located in ?', 'Goa', 'Bangalore', 'Thiruvananthapuram', 'Patiala', 'Thiruvananthapuram', 6),
(60, '?Indira Gandhi super thermal power project?? is located in which state?', 'Rajasthan', 'Haryana', 'Punjab', 'Uttar Pradesh', 'Haryana', 6),
(61, 'Which of the following is a large blood vessel that carries blood away from the heart?', 'Vein', 'Artery', 'Capillary', 'Nerve', 'Artery', 7),
(62, 'Which one of the following is not a function of the liver?', 'Regulation of blood sugar', 'Enzyme activation', 'Detoxiation', 'Reproduction', 'Reproduction', 7),
(63, 'There are _____ number of muscles in human.', '638', '637', '639', '640', '639', 7),
(64, 'Which device is used to convert sound energy into electrical energy ?', 'Solar cell', 'Gramophone', 'Microphone', 'Loudspeaker', 'Microphone', 7),
(65, 'Which of the following principles is associated with Optical fibre ?', 'Scattering', 'Interference', 'Total internal reflection', 'Refraction', 'Total internal reflection', 7),
(66, 'Which one of the following is used for sun glasses ?', 'Crooks glass', 'Pyrex glass', 'Crystal glass', 'None of the above', 'Crooks glass', 7),
(67, 'Spectacles used for viewing 3D films have', 'Polaroids', 'Concave lens', 'Convex lens', 'Bifocal lens', 'Polaroids', 7),
(68, 'What is the name of that process in which oxygen is removed?', 'Oxidation', 'Electrolysis', 'Ionization', 'Reduction', 'Reduction', 7),
(69, 'What is the weight of human heart?', '100 gms', '300 gms', '800 gms', '1000 gms', '300 gms', 7),
(70, 'What is the averages rate of the heart beats (per minute) in an adult?', '60', '72', '84', '96', '72', 7),
(71, 'The first president of the Republic of India was ?', 'V.V.Giri', 'Zakir Hussain', 'Dr.Radhakrishnan', 'Dr.Rajendra Prasad', 'Dr.Rajendra Prasad', 8),
(72, 'The first to establish regular trade with India was ?', 'Dutch', 'Portuguese', 'French', 'English', 'Portuguese', 8),
(73, 'The Battle of Plassey was fought in', '1757', '1782', '1748', '1764', '1757', 8),
(74, 'Who was the first Indian ruler who had territory outside India?', 'Ashoka', 'Chandragupta Maurya', 'Kanishka', 'Huvishka', 'Kanishka', 8),
(75, 'Todar Mal was associated with', 'music', 'literature', 'finance', 'law', 'finance', 8),
(76, 'To which king belongs the Lion capital at Sarnath?', 'Chandragupta', 'Ashoka', 'Kanishka', 'Harsha', 'Ashoka', 8),
(77, 'Who was the ruler of the kingdom between the rivers Jhelum and Chenab?', 'Alexander the Great', 'Darius III', 'King Porus', 'Chandragupta Maurya', 'King Porus', 8),
(78, 'The language of discourses of Gautama Buddha was', 'Bhojpuri', 'Magadhi', 'Pali', 'Sanskrit', 'Pali', 8),
(79, 'Tipu sultan was the ruler of', 'Hyderabad', 'Madurai', 'Mysore', 'Vijayanagar', 'Mysore', 8),
(80, 'Ustad Mansur was a famous painter in the region of', 'Shajahan', 'Akbar', 'Humayun', 'Jahangir', 'Jahangir', 8),
(81, 'When was Lata Mangeshkar awarded the Padma Bhushan?', '1969', '1948', '1935', '2001', '1969', 9),
(82, 'Which of the following musical instruments is of Indian origin?', 'Guitar', 'Drums', 'Piano', 'Flute', 'Flute', 9),
(83, 'Which playback singer has been awarded the Bharat Ratna, the nation\'s highest civilian honour?', 'Ustad Ali Akbar Khan ', 'Sheryl Crow', 'Hank Marvin', 'Lata Mangeshkar', 'Lata Mangeshkar', 9),
(84, 'The theory of classical music is discussed in :', 'Samaveda', 'Yajurveda', 'Rigveda', 'Atharvaveda', 'Samaveda', 9),
(85, 'Which famous guitarist\'s original name was Brian Rankin?', 'Ustad Ali Akbar Khan', 'Hank Marvin', 'Sheryl Crow', 'Belinda Carlisle', 'Hank Marvin', 9),
(86, 'What musical instrument did Sherlock Holmes play?', 'Guitar', 'Violen', 'Sitar', 'Piano', 'Violen', 9),
(87, 'Miles Davis is famous for playing which musical instrument?', 'Trumpet', 'Violen', 'Piano', 'Sitar', 'Trumpet', 9),
(88, 'What is the highest pitched woodwind instrument?', 'Piccolo', 'Violen', 'Sitar', 'Piano', 'Piccolo', 9),
(89, 'Which female singer recorded \"Heaven is a place on earth\"?', 'Belinda Carlisle', 'Sheryl Crow', 'Hank Marvin', 'Marc Bolan', 'Belinda Carlisle', 9),
(90, 'Marvin Lee Aday is better known as which music legend?', 'Sheryl Crow', 'Meatloaf', 'Belinda Carlisle', 'Hank Marvin', 'Meatloaf', 9),
(91, '30 mod 7', '2', '3', '4', '7', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `unm` varchar(10) NOT NULL,
  `psw` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `unm`, `psw`, `email`, `contactno`, `role`) VALUES
(1, 'Ronak', 'Ronak@123', 'ronak1999@gmail.com', '8654297632', 'user'),
(2, 'Pankaj', 'Pankaj@123', 'pankaj@gmail.com', '9845297615', 'user'),
(3, 'Krima', 'Krima@123', 'krima58@gmail.com', '8745395612', 'user'),
(4, 'Khushi', 'Khushi@123', 'khushi12@gmail.com', '8654129753', 'user'),
(5, 'Kush', 'Kush@123', 'kush@gmail.com', '9145627348', 'user'),
(6, 'admin', 'admin@123', 'admin@gmail.com', '8152674932', 'admin'),
(7, 'Try', 'Try@123', 'try@gmail.com', '1234567891', 'user'),
(8, 'Ghanshyam', 'Ghanshyam', 'Ghanshyam@gmail.com', '1234567896', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(5) NOT NULL,
  `unm` varchar(10) NOT NULL,
  `result` int(10) NOT NULL,
  `category` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `unm`, `result`, `category`) VALUES
(16, 'Try', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(3) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `satisfaction` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `comment`, `satisfaction`) VALUES
(1, 'Nice', 'Best'),
(2, 'Very Good', 'Excellent'),
(3, 'Average', 'Good'),
(4, 'Excellent', 'Excellent'),
(5, 'Very Nice', 'Best');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `isVisible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `isVisible`) VALUES
(1, 'prg.mp4', 1),
(2, 'GK.mp4', 1),
(3, 'sport.mp4', 1),
(4, 'history.mp4', 1),
(5, 'geography.mp4', 1),
(6, 'sci.mp4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
