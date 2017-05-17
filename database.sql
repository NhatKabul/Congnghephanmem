-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2016 at 02:23 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdimex`
--

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE IF NOT EXISTS `dathang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mamh` int(11) NOT NULL,
  `makh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tensach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `mamh` (`mamh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dathang`
--


-- --------------------------------------------------------

--
-- Table structure for table `dathangvanglai`
--

CREATE TABLE IF NOT EXISTS `dathangvanglai` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `mamh` int(11) NOT NULL,
  `tensach` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `mamh` (`mamh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dathangvanglai`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmenu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `tenmenu`) VALUES
(1, 'Sách Chuyên Kh?o'),
(2, 'Sách Ti?ng Anh'),
(3, 'T? Ði?n'),
(4, 'Truy?n Ð?c');

-- --------------------------------------------------------

--
-- Table structure for table `menu_detail`
--

CREATE TABLE IF NOT EXISTS `menu_detail` (
  `tenmenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`tenmenu`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_detail`
--

INSERT INTO `menu_detail` (`tenmenu`, `menu_id`) VALUES
('Agriculture', 1),
('Business', 1),
('Computer Science', 1),
('Design', 1),
('Economics', 1),
('Education', 1),
('Engineering & Technology', 1),
('Environmental Science', 1),
('Finance & Accounting', 1),
('Management', 1),
('Marketing', 1),
('Materials Science', 1),
('Medicine', 1),
('Sciences', 1),
('Social Sciences', 1),
('Statistics', 1),
('Adults', 2),
('English Specific Purposes', 2),
('Exams', 2),
('Primary', 2),
('secondary', 2),
('Skills', 2),
('Teachers Resources', 2),
('T? Ði?n', 3),
('Truy?n Ð?c', 4);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE IF NOT EXISTS `phieunhap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mahang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaynhap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`mahang`),
  KEY `mahang` (`mahang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `phieunhap`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tensach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `nhaxb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namxb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `detail_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `luotmua` int(11) NOT NULL DEFAULT '0',
  `giamgia` int(11) NOT NULL DEFAULT '0',
  `seo` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_id` (`detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `tensach`, `dongia`, `soluong`, `nhaxb`, `tacgia`, `namxb`, `hinhanh`, `detail_id`, `luotmua`, `giamgia`, `seo`) VALUES
(1, 'BIOFUEL CROP SUSTAINABILITY', 4298000, 20, 'WileyBlackwell', 'Bharat Singh', '2013', 'image/HinhSach/9780131985780.jpg', 'Agriculture', 33, 25, ''),
(2, ' BIOENERGY FEEDSTOCKS: BREEDING AND GENETICS', 4298000, 18, 'WileyBlackwell', ' H Bhandhari', '2013', 'image/HinhSach/9780132056779.jpg', 'Agriculture', 34, 24, 'Bioenergy and biofuels are generated from a wide variety of feedstock. '),
(3, 'METHODS FOR THE STUDY OF MARINE BENTHOS, 4TH EDITI', 4239000, 15, 'WileyBlackwell', 'Anastasios Eleftheriou', '2013', 'image/HinhSach/9780132336451.jpg', 'Agriculture', 54, 0, 'The continuing global decline of the health of the sea, and the increasing depletion of marine resources and biodiversity, caused by human activity and climate change, have led to everincreasing international concern.'),
(4, ' CHEMICAL ECOLOGY OF INSECT PARASITOIDS', 2793000, 27, 'WileyBlackwell', 'Stefano Colazza', '2013', 'image/HinhSach/9780132336765.jpg', 'Agriculture', 54, 0, 'Insect parasitoids are a fascinating group of animals in many respects.'),
(5, ' INTELLIGENT BUSINESS INTER: TEACHER BOOK WITH TES', 589000, 16, 'Pearson', 'Louise Pile', '2006', 'image/HinhSach/9780132339803.jpg', 'Business', 43, 0, 'This topic-based course book provides an accessible introduction to the concepts and language of todays business world'),
(6, 'INTELLIGENT BUSINESS INTER COURSE BOOK WITH CD-ROM', 337000, 12, 'Pearson', 'Tonya Trappe', '2010', 'image/HinhSach/9780132411882.jpg', 'Business', 23, 13, 'This topic-based course book provides an accessible introduction to the concepts and language of todays business world'),
(7, 'STRETCH 2 A: MULTI PACK', 313000, 24, 'Oxford', 'Susan Stempleski', '2014', 'image/HinhSach/9780132795463.jpg', 'Adults', 43, 0, 'When you stretch to reach new goals, you need support. Stretch provides a comprehensive support system and a unique 6 skills approach to help students meet their personal, academic and professional goals.'),
(11, 'OXFORD LEARNER''S POCKET DICTIONARY FOURTH EDITION', 70000, 21, 'Oxford', '0', '2010', 'image/HinhSach/9780133248005.jpg', 'Adults', 65, 0, 'Essential information on basic English vocabulary in a popular, slim, pocket-sized book that is easy to carry. Now updated with new words that have entered the language.'),
(12, 'OXFORD LEARNER''S POCKET DICTIONARY OF BUSINESS ENG', 89000, 1, 'Oxford', 'tt', '2004', 'image/HinhSach/9780136038993.jpg', 'English Specific Purposes', 55, 14, 'A handy pocket-sized dictionary of Business English based on the new Oxford Business English Dictionary for learners of English.'),
(13, 'OXFORD LEARNER''S POCKET GRAMMAR', 110000, 2, 'Oxfor', 'tt', '2006', 'image/HinhSach/9780132881876.jpg', 'secondary', 52, 0, 'A quick reference book for students to revise grammar rules and check their understanding of grammar.'),
(14, 'OXFORD LEARNER''S POCKET PHRASAL VERBS AND IDIOMS', 153000, 2, 'Oxfor', 'tt', '2006', 'image/HinhSach/9780194552905.jpg', 'secondary', 32, 0, 'Learn phrasal verbs and idioms in context and know how and when to use them.'),
(15, 'OXFORD PICTURE DICTIONARY SECOND EDITION: MONOLING', 285000, 1, 'Oxfor', 'tt', '2013', 'image/HinhSach/9780194407304.jpg', 'secondary', 12, 12, '4,000 words and phrases are organized thematically within 163 topics.'),
(16, ' BACKPACK 2 (2 ED.) : STUDENT BOOK', 290000, 1, 'Pearson', 'Mario Herrera, Diane Pinkley', '2009', 'image/HinhSach/9780194552905.jpg', 'Exams', 56, 0, 'Features: \r\n* Beautifully illustrated vocabulary tips, presentations that captivate learners \r\n* Values lesson incorporated into each unit \r\n* A complete assessment programme that includes testing tips and techniques as well as test generator software \r\n* Little Books (Starter - 3), Magazines (4 - 6), and Content Readers (1 - 6) with Teachers Manuals motivate readers \r\n* Interleaved Teachers Edition includes step-by-step lessons and a wealth of teaching options \r\n* Workbooks, large format Posters and Picture Cards reinforce and extend language and grammar \r\n* Phonics and Writing handbooks in Levels 1 - 3; Grammar Handbooks in Levels 4 - 6 \r\n* The Teachers Resource Book provides pedagogical information for the teacher and many reproducible activities for students \r\n* CD-ROMs and a Companion Website provide variety and additional ideas and activities.'),
(17, 'BACKPACK 3 (2 ED.) : STUDENT BOOK', 290000, 2, 'Pearson', 'Mario Herrera, Diane Pinkley', '2009', 'image/HinhSach/9780194407281.jpg', 'Exams', 43, 0, 'Features: \r\n* Beautifully illustrated vocabulary tips, presentations that captivate learners \r\n* Values lesson incorporated into each unit \r\n* A complete assessment programme that includes testing tips and techniques as well as test generator software \r\n* Little Books (Starter - 3), Magazines (4 - 6), and Content Readers (1 - 6) with Teachers Manuals motivate readers \r\n* Interleaved Teachers Edition includes step-by-step lessons and a wealth of teaching options \r\n* Workbooks, large format Posters and Picture Cards reinforce and extend language and grammar \r\n* Phonics and Writing handbooks in Levels 1 - 3; Grammar Handbooks in Levels 4 - 6 \r\n* The Teachers Resource Book provides pedagogical information for the teacher and many reproducible activities for students \r\n* CD-ROMs and a Companion Website provide variety and additional ideas and activities'),
(18, 'IELTS FOUNDATION (2 ED.): TEACHER BOOK', 696000, 2, 'Macmillan', 'Rachael Roberts', '2012', 'image/HinhSach/9780194553698.jpg', 'Exams', 23, 0, 'IELTS Foundation Second Edition retains all of the best elements of the original course and brings it up to date with new and fresh content. This includes clear links to exam sections and incorporates the changes that have been made to the IELTS exam. It is a 12-unit course aimed at training students within an IELTS band of 4-5.5 in the skills required to increase their score.'),
(19, 'ACHIEVE TOEFL IBT: STUDENT BOOK', 372000, 2, 'Exams', 'Renald Rilcy', '2010', 'image/HinhSach/9780194597104.jpg', 'Exams', 0, 0, 'This user-friendly guide to the TOEFL® test is designed to teach learners how to prepare for the TOEFL® test in an effective way and at the same time improve their overall language proficiency. It may be used for classroom-based preparation or self-study and is ideal for students who have a short time to prepare for theTOEFL® iBT.'),
(20, 'PRACTISE AND PASS STARTERS - PUPIL’S BOOK 1ST EDIT', 190000, 2, 'Exams', 'LAMBERT/PELTERET', '2009', 'image/HinhSach/9780194333504.jpg', 'Exams', 67, 17, ''),
(21, 'BRIDGE TO IELTS: TEACHER BOOK', 587, 2, 'Exams', 'Louis Harrison', '2013', 'image/HinhSach/9780132339803.jpg', 'Exams', 12, 0, 'Bridge to IELTS is designed for students who want to start, but are not yet ready for, an IELTS preparatory course. '),
(22, 'OXFORD DISCOVER 5: STUDENT BOOK', 325, 2, 'Oxford', 'Lesley Koustaff', '2014', 'image/HinhSach/9780230012110.jpg', 'Primary', 45, 0, 'Using an inquiry-based approach to learning, Oxford Discover develops the communication skills and thinking skills students need for success in the 21st century.'),
(23, ' BEENO 3: TEACHER''S GUIDE', 271000, 3, 'Pearson', 'Thomas Gordon', '2009', 'image/HinhSach/9780230417229.jpg', 'Primary', 23, 18, 'Beeno develops early English communication skills for children in kindergarten through fun activities and the lovable character, Beeno. Each book contains an audio CD, a page of stickers, and a fun project page for self-expression.'),
(24, 'OUR DISCOVERY ISLAND 2 BE AUDIO CDS', 374000, 2, 'Pearson', 'Sagrario Salaberri', '2012', 'image/HinhSach/9780230423022.jpg', 'Primary', 12, 0, 'Family and Friends offers a carefully graded approach to reading, writing and literacy skills in English to young learners.\r\nNo other course offers you the same benefits as Family and Friends.\r\nThe exceptionally strong skills training programme includes a focus on real speaking and writing output.'),
(25, 'MY LITTLE ISLAND 1: CLASS AUDIO CD', 255000, 2, 'Primary', 'tt', '2011', 'image/HinhSach/9780230417229.jpg', 'Primary', 32, 14, 'Where the adventure begins! There is an exciting place for very young learners to begin their journey of leaning English...My Little Island.'),
(27, 'OXFORD BOOKWORMS LIBRARY LEVEL 2: LOVE AMONG THE H', 80000, 2, 'Oxford', 'D. H. Lawrence, Jennifer Bassett', '2007', 'image/HinhSach/9780230032170.jpg', 'Skills', 44, 0, 'It is hay-making time on the Wookey farm. Two brothers are building the haystack, but thinking about other things - about young women, and love.'),
(28, 'OXFORD BOOKWORMS LIBRARY 3E LEVEL 1: THE PHANTOM O', 58000, 2, 'Oxford', 'Jennifer Bassett', '2007', 'image/HinhSach/9780230444997.jpg', 'Design', 34, 16, 'It is 1880, in the Opera House in Paris. Everybody is talking about the Phantom of the Opera, the ghost that lives somewhere under the Opera House.'),
(29, 'CLASSIC TALES 2ED 1: RUMPELSTILTSKIN WITH BOOK AND', 75000, 2, 'Oxford', 'Sue Arengo', '2012', 'image/HinhSach/9780230447943.jpg', 'Sciences', 32, 0, 'This richly illustrated series of retold fairy tales for children aged 5-12 years old will bring an extra dimension to your English teaching.'),
(30, 'OXFORD BOOKWORMS LIBRARY LEVEL 1: LOVE OR MONEY?', 86000, 2, 'Oxford', 'Rowena Akinyemi', '2007', 'image/HinhSach/9781305260405.jpg', 'Teachers Resources', 33, 13, 'It is Molly Clarkson''s fiftieth birthday. She is having a party. She is rich, but she is having a small party - only four people. Four people, however, who all need the same thing: they need her money. She will not give them the money, so they are waiting for her to die. And there are other people who are also waiting for her to die.'),
(31, 'OXFORD BOOKWORMS LIBRARY LEVEL 4: SILAS MARNER', 64000, 2, 'Oxford', 'George Eliot, Clare West', '2007', 'image/HinhSach/9781405852111.jpg', 'Teachers Resources', 44, 11, 'In a hole under the floorboards Silas Marner the linen-weaver keeps his gold. Every day he works hard at his weaving, and every night he takes the gold out and holds the bright coins lovingly, feeling them and counting them again and again. The villagers are afraid of him and he has no family, no friends.'),
(32, 'OXFORD BOOKWORMS LIBRARY 3E LEVEL 6: A PASSAGE TO ', 72000, 2, 'Oxford', 'E. M. Forster', '2009', 'image/HinhSach/9781405885706.jpg', 'Statistics', 22, 8, 'This award-winning collection of adapted classic literature and original stories develops reading skills for low-beginning through advanced students.'),
(34, 'OXFORD BOOKWORMS LIBRARY LEVEL 2: NEW YORKERS - SH', 60000, 2, 'Oxford', 'Henry, Diane Mowat', '2007', 'image/HinhSach/9781447900696.jpg', 'Skills', 55, 10, 'A housewife, a tramp, a lawyer, a waitress, an actress - ordinary people living ordinary lives in New York at the beginning of this century.'),
(35, 'OXFORD PICTURE DICTIONARY FOR KIDS, SECOND EDITION', 269000, 2, 'Oxford', 'tt', '2009', 'image/HinhSach/9780582793682.jpg', 'Primary', 66, 12, 'The Oxford Picture Dictionary for the Content Area for Kids builds direct, explicit, multifaceted vocabulary instruction using rich visuals and brings meaning and context to words to activate learning for English Learners.'),
(36, 'OXFORD BOOKWORMS LIBRARY LEVEL 1: THE MURDER OF MA', 83000, 31, 'truy?n d?c', 'tt', '2016', 'image/HinhSach/9780194620840.jpg', 'Truy?n Ð?c', 0, 0, 'Factfiles'' are a sub-series of ''Bookworms'' with a non-fiction angle providing factual information for students on a wide variety of themes. Exercises at the back of each book check students'' understanding of the text and provide ideas for activities and project work.\r\nOxford Bookworms Library: Seven-stage graded readers series offering over 200 adapted and original English texts for secondary and adult students.'),
(37, 'OXFORD BOOKWORMS LIBRARY LEVEL 2: WORLD WONDERS FA', 80000, 31, 'Oxford', 'Barnaby Newbolt', '2011', 'image/HinhSach/9780194621205.jpg', 'Truy?n Ð?c', 42, 20, 'What are the most beautiful, the most interesting, the most wonderful things in the world? The Great Pyramid, the Great Wall of China, the Panama Canal - everyone has their favourites. And there are natural wonders too - Mount Everest, Niagara Falls, and the Northern Lights, for example. Here is one person''s choice of eleven wonders. Some of them are made by people, and others are natural. Everyone knows the Grand Canyon and the Great Barrier Reef - but what about the Iguazú Falls, or the old city of Petra? Come and discover new wonders ...'),
(38, 'CLASSIC TALES 2ED 4: THE GOOSE GIRL WITH BOOK AND ', 73000, 41, 'Oxford', 'Sue Arengo', '2012', 'image/HinhSach/9780136136293.jpg', 'Truy?n Ð?c', 40, 0, 'Richly illustrated books offering classic stories retold for children accompanied by e-Books, audio, and Activity and Play books. Children love stories. Bring the magic of good storytelling into your classroom with Classic Tales, and they''ll love their English lessons too. This new edition of the award-winning series uses traditional tales to bring English to life through 30 beautifully illustrated stories - now with accompanying: * e-Books with Audio Packs * Activity Books and Plays Project the story and accompanying audio onto the Interactive Whiteboard - a digital "Big Book"! Or play the audio on a CD player. Students can also watch and listen to the story on their home computer - great for children who prefer computers to books...'),
(39, 'PENGUIN ACTIVE READING 3: CHALES DICKENS: BOOK WIT', 137000, 21, 'truy?n d?c', ' Paul Shipton', '2007', 'image/HinhSach/9781405852111.jpg', 'Truy?n Ð?c', 48, 0, 'Charles Dickens is one of Britain''s greatest writers. His novels have been popular around the world for more than 150 years. Through his writing he fought for better conditions for children and the poor, but most of all he is remembered today for his wonderful stories and his unforgettable characters.\r\n'),
(40, 'OXFORD BOOKWORMS LIBRARY 3: THE HUMAN BODY MP3 PAC', 89000, 35, 'truy?n d?c', 'tt', '2016', 'image/HinhSach/9780194620963.jpg', 'Truy?n Ð?c', 51, 0, 'Factfiles'' are a sub-series of ''Bookworms'' with a non-fiction angle providing factual information for students on a wide variety of themes. Exercises at the back of each book check students'' understanding of the text and provide ideas for activities and project work.\r\nOxford Bookworms Library: Seven-stage graded readers series offering over 200 adapted and original English texts for secondary and adult students.\r\nOxford Bookworms enjoy a world-wide reputation for high-quality storytelling and a great reading experience.\r\nResearch shows reading a lot improves all your language skills.'),
(41, 'OXFORD BOOKWORMS LIBRARY 2E STARTER: CONNECTICUT Y', 55000, 37, 'Oxford', 'Mark Twain', '2008', 'image/HinhSach/9780194620239.jpg', 'Truy?n Ð?c', 12, 0, 'This award-winning collection of adapted classic literature and original stories develops reading skills for low-beginning through advanced students. Accessible language and carefully controlled vocabulary build students'' reading confidence. Introductions at the beginning of each story, illustrations throughout, and glossaries help build comprehension. Before, during, and after reading activities included in the back of each book strengthen student comprehension. Audio versions of selected titles provide great models of intonation and pronunciation of difficult words.'),
(42, 'OXFORD BOOKWORMS LIBRARY LEVEL 6: NIGHT WITHOUT EN', 102000, 65, 'Oxford', 'Margaret Naudi', '2009', 'image/HinhSach/9780194620338.jpg', 'Truy?n Ð?c', 70, 31, 'On the Polar ice-cap, 640 kilometres north of the Arctic Circle, the deadly, icy winds can freeze a man to death in minutes. But the survivors of the crashed airliner are lucky - they are rescued by three scientists from a nearby weather station. But why did the airliner crash in the first place? Who smashed the radio to pieces? And why does the dead pilot have a bullet hole in his back?'),
(43, 'OXFORD LEARNER''S POCKET DICTIONARY OF BUSINESS ENG', 89000, 132, 'Oxford', 'tt', '2013', 'image/HinhSach/9780194333504.jpg', 'T? Ði?n', 72, 0, 'A handy pocket-sized dictionary of Business English based on the new Oxford Business English Dictionary for learners of English. With all the authority of the larger dictionary, this compact version provides a useful reference of essential business terms for anyone using English in their working lives.\r\nTable of content\r\nSpecial Features'),
(44, 'OXFORD LEARNER''S POCKET GRAMMAR', 101000, 120, 'Oxford', 'tt', '2014', 'image/HinhSach/9780194552905.jpg', 'T? Ði?n', 61, 0, 'A quick reference book for students to revise grammar rules and check their understanding of grammar\r\n\r\nKey Features\r\n\r\nEach of the 180 grammar topics is organized into 2-page sections\r\nExplains how the grammar for each topic is used and how to avoid mistakes\r\nIncludes a tip to help students sound more natural\r\nCovers the topics students need to know for the Cambridge ESOL exams (FCE, CAE and CPE).\r\nRead more\r\nOxford Learner''s Pocket Grammar is a genuinely pocket-sized reference book that is ideal for revision. It''s easy for students to take with them - on the bus, on the train, to school. If they have a few minutes to spare they can revise a grammar topic they need to know for an exam. '),
(45, 'OXFORD PICTURE DICTIONARY FOR KIDS, SECOND EDITION', 267000, 142, 'Oxford', 'tt', '2015', 'image/HinhSach/9780132795388.jpg', 'T? Ði?n', 19, 0, 'The Oxford Picture Dictionary for the Content Area for Kids builds direct, explicit, multifaceted vocabulary instruction using rich visuals and brings meaning and context to words to activate learning for English Learners.'),
(46, 'THE CHINESE PICTURE DICTIONARY FOR CHILDREN', 431000, 106, 'Dictionary', 'BEIJING LANGUAGE & CULTURE UNIVERSITY', '2010', 'image/HinhSach/9780133248005.jpg', 'T? Ði?n', 27, 0, ''),
(49, 'MACMILLAN ESSENTIAL DICTIONARY ( BRITISH ED.): PAP', 300000, 102, 'Macmillan', 'Peter Viney and Anne Watson', '2008', 'image/HinhSach/9780582793637.jpg', 'T? Ði?n', 47, 28, 'The Macmillan Essential Dictionary is an essential reference for the classroom and home, offering invaluable support for those wishing to write and speak English accurately.\r\nComprehensive\r\n* Two-colour dictionary for intermediate learners - over 45,000 headwords, phrases and phrasal verbs, with 36,000 examples showing how words are used \r\n* Special emphasis on contemporary vocabulary, such as computer language, new senses and colloquial language '),
(50, 'MACMILLAN STUDY DICTIONARY PAPERBACK WITH CD-ROM', 372000, 128, 'Macmillan', 'tt', '2009', 'image/HinhSach/9781107681101.jpg', 'T? Ði?n', 14, 0, 'The two-colour Macmillan Study Dictionary is packed with curriculum words, suitable for upper secondary/university students who study their curriculum subjects in English. It contains over 100,000 words, meanings and phrases.\r\n'),
(51, 'LONGMAN ADVANCED AMERICAN DICTIONARY : PAPERBACK', 130000, 120, 'Pearson', 'Pearson ESL', '2001', 'image/HinhSach/9781405885706.jpg', 'T? Ði?n', 16, 0, '* 84,000 words and phrases\r\n* 3000 frequent words highlighted\r\n* Signposts -- to find meanings faster in longer entries\r\n* Thousands of example sentences\r\n* Language notes'),
(52, 'PENGINS/RACE TO THE SOUTH POLE', 108000, 132, 'Macmillan', 'Luther Reimer', '2005', 'image/HinhSach/9781305077218.jpg', 'Truy?n Ð?c', 18, 25, 'A new third edition of the much-loved course Laser, bringing together five levels of fun, teenage material. \r\nLaser is a five-level course, designed to cater to younger exam students, and now covering the entire span of secondary education. It is the perfect preparation for students still at school and working towards school-leaving exams and the Cambridge ESOL, KET, PET and FCE exams');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ten`, `diachi`, `email`, `sdt`, `hinhanh`, `level`) VALUES
(34, 'hunganot', 'dd28e50635038e9cf3a648c2dd17ad0a', 'Phan Ng?c Hung', '429/43 Lê Van S?', 'ngochung861@gmail.com', 0, 'image/avatar/Mr-Bean.png', '0'),
(33, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', 0, 'image/avatar/Transparent_Troll_Face.png', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_detail`
--
ALTER TABLE `menu_detail`
  ADD CONSTRAINT `menu_detail_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`mahang`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`detail_id`) REFERENCES `menu_detail` (`tenmenu`) ON DELETE CASCADE ON UPDATE CASCADE;
