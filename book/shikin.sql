-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2015 at 06:49 
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `shikin`
--
CREATE DATABASE IF NOT EXISTS `shikin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `shikin`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'God', 'aaa'),
(2, 'Mala', 'bbb'),
(3, 'Peter', 'ccc'),
(4, 'Stephen A. Farmer', 'ddd'),
(5, 'Wyatt W. Davidson', 'eee'),
(6, 'Megan V. Sheppard', 'fff'),
(7, 'Akeem Diaz', 'ggg'),
(8, 'Norman Odonnell','hhh'),
(9, 'Aubrey N. Dillard', 'iii'),
(10, 'Vivian L. Zimmerman', 'jjj'),
(11, 'Amena Melendez', 'kkk'),
(12, 'Tarik R. Barlow', 'lll'),
(13, 'Lacy Lucas', 'mmm'),
(14, 'Ulric Faulkner', 'nnn'),
(15, 'Graham O. Carver', 'ooo'),
(16, 'Beau Banks', 'ppp'),
(17, 'Ross Gonzales', 'qqq'),
(18, 'Lawrence Malone', 'rrr'),
(19, 'Kenyon Tyler', 'sss'),
(20, 'Julie Simmons', 'ttt'),
(21, 'Devin Paul', 'uuu'),
(22, 'Phelan Sanford', 'vvv'),
(23, 'Deanna Mullins', 'www'),
(24, 'George Y. Mason', 'xxx'),
(25, 'Cathleen D. Bright', 'yyy'),
(26, 'Simon D. Vincent', 'zzz'),
(27, 'Graiden M. Rich', 'a'),
(28, 'Melissa Rodgers','b'),
(29, 'Vincent L. Vega','c'),
(30, 'Jamalia Kerr','d'),
(31, 'Colton F. Beasley','e'),
(32, 'Quincy H. Newton','f'),
(33, 'Barclay Mathis','g'),
(34, 'Brooke Burch','h'),
(35, 'Rudyard T. Wood','i'),
(36, 'Prescott Rivera','j'),
(37, 'Claudia Rogers','k'),
(38, 'Fuller K. Spence','l'),
(39, 'Zahir D. Dominguez','m'),
(40, 'Isaiah T. Kane','n'),
(41, 'Kibo Hoffman','o'),
(42, 'Brenna Mays','p'),
(43, 'Shelley U. Rasmussen','q'),
(44, 'Basil F. Vinson','r'),
(45, 'Griffith Frank','s'),
(46, 'Rhonda B. Greene','t'),
(47, 'Ray Z. Herman','u'),
(48, 'Meredith F. Nguyen','v'),
(49, 'Claudia X. Green','w'),
(50, 'Athena M. Fox','x'),
(51, 'Naida W. Brady','y'),
(52, 'Velma Murphy','z'),
(53, 'Hayley J. Haney','aa'),
(54, 'Alyssa M. Benton','bb'),
(55, 'Yuri Lester','cc'),
(56, 'Lars X. Camacho','dd'),
(57, 'Ingrid Montoya','ee'),
(58, 'Desirae I. Irwin','ff'),
(59, 'Jerry O. Zamora','gg'),
(60, 'Sylvia V. Bender','hh'),
(61, 'Alfreda M. Cain','ii'),
(62, 'Cameron K. Emerson','jj'),
(63, 'Simon Wong','kk'),
(64, 'Adara Dawson','ll'),
(65, 'Gary Sharpe','mm'),
(66, 'Marny E. Stanley','nn'),
(67, 'Olympia Z. Macdonald','oo'),
(68, 'Quin V. Nash','pp'),
(69, 'Blake Burt','qq'),
(70, 'Ella Phillips','rr'),
(71, 'Hashim X. Bradshaw','ss'),
(72, 'Melissa Doyle','tt'),
(73, 'Rebekah Brewer','uu'),
(74, 'Lareina Rose','vv'),
(75, 'Blair W. Winters','ww'),
(76, 'Steel A. Franco','xx'),
(77, 'Cleo Everett','yy'),
(78, 'Darrel Norton','zz'),
(79, 'Gavin Norman','aaaa'),
(80, 'Yeo N. Keith','bbbb'),
(81, 'Griffin Kirk','cccc'),
(82, 'Clio Q. Conway','dddd'),
(83, 'Emmanuel Compton','eeee'),
(84, 'Claudia Walter','ffff'),
(85, 'Hadassah Huber','gggg'),
(86, 'Britanni Valenzuela','hhhh'),
(87, 'Finn S. Acosta','iiii'),
(88, 'Hedy V. Donovan','jjjj'),
(89, 'Yoko Freeman','kkkk'),
(90, 'Kaden Golden','llll'),
(91, 'Nevada Yang','mmmm'),
(92, 'Sigourney M. Hoover','nnnn'),
(93, 'Samson D. Dennis','oooo'),
(94, 'Hadassah E. Reyes','pppp'),
(95, 'Deacon Dillard','qqqq'),
(96, 'Lydia T. Oneal','rrrr'),
(97, 'Jena R. Holcomb','ssss'),
(98, 'Anne D. Brewer','tttt'),
(99, 'Gareth Fitzpatrick','uuuu'),
(100, 'Sloane Sheppard','vvvv'),
(101, 'Hashim X. Bradshaw','wwww'),
(102, 'Melissa Doyle','xxxx'),
(103, 'Rebekah Brewer','yyyy'),
(104, 'Lareina Rose','zzzz'),
(105, 'Blair W. Winters','aaaaa'),
(106, 'Steel A. Franco','bbbbb'),
(107, 'Cleo Everett','ccccc'),
(108, 'Darrel Norton','ddddd'),
(109, 'Gavin Norman','eeeee'),
(110, 'Yeo N. Keith','fffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;

CREATE TABLE IF NOT EXISTS `books` (
  `isbn` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
  `author` varchar(30) DEFAULT NULL
  `year` varchar(30) DEFAULT NULL
  `price` varchar(30) DEFAULT NULL
  `medium` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `books` (`id`, `name`, `author`, `year`, `price`, `medium`) VALUES
(1, 'harry potter', 'J.Rowling', '2000','15000','English'),
(2, 'IT', 'anonymous','1997','20000','Sinhala'),
(3, 'WimpyKid', 'mmmm','1994','3500','English');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `isbn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
