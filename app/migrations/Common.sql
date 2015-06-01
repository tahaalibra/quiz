-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 10:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `code` text,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `code`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`, `img`) VALUES
(21, '	Threading present at the end of Tie Rods helps in ___adjustment.', NULL, 'Toe', 'Caster', 'Camber', 'All of the above', '1', NULL),
(22, '	Calculate  rack travel/ movement  in mm if pinion radius is 5 mm pinion rotation  is 2.5 times\r\n', NULL, '5 &#960;', '10 &#960;', '15 &#960;', '25 &#960;', '4', '2'),
(23, 'Due to ackerman  law vehicle turns  about ____', NULL, 'Roll center', 'Instantaneous center', 'Center of gravity', 'None of the above', '2', NULL),
(24, 'While braking, Torque acting on the tire is _____ the torque acting on the rotor.', NULL, 'less than', 'more than', 'equal to', '&mu;(tire) times', '3', NULL),
(25, 'A car having mass 250kg decelerates with 12.7m/s2. The wheelbase of the car is 1250 mm and CG of the car is 33 cm above the ground. \r\nThe magnitude of the weight transfer is.........\r\n', NULL, '838.2 N', '628.4 N', '892.4 N', '672.2 N', '1', NULL),
(26, 'In ABS, which component controls the hydraulic pressure in the brake circuit?', NULL, 'Master cyclinder', 'ECU', 'Hydraulic control unit ', 'Callipers', '3', NULL),
(27, 'According to Pascalâ€™s law \r\n    	1. Fluid should be at atmospheric pressure\r\n    	2. Fluid should be in compressible\r\n    	3. System should be a close system\r\n', NULL, 'only 3 is correct', '2 & 3 are correct', '1 & 3 are correct', 'All the statements are correct', '2', NULL),
(28, 'Strut assembly is an example of ', NULL, 'Sprung Mass', 'Unsprung Mass', 'Both a & b', 'None of the above', '4', NULL),
(29, 'If the topmost point of the tire is away from the chassis as compared to bottom most point, it is termed as ', NULL, 'Positive Camber', 'Negative Camber', 'Positive Caster', 'Negative Caster', '1', NULL),
(30, 'Forces experienced during cornering pass through', NULL, '	Roll Center ', 'Instantaneous  Center', 'Center of Gravity', 'Ground', '3', NULL),
(31, 'Why are dampers used?', NULL, 'to prevent any damage to the spring', 'to increase the settling time', 'to absorb forces and vibrations', 'helps in camber gain', '3', NULL),
(32, 'In CVT, Shifting takes place overcoming,', NULL, 'A. Flyweight force', 'B. Spring Force', 'C. Belt Tension', 'D. Both A & B', '4', NULL),
(33, 'If engine torque is 18.7 N-m what is the torque obtained at the end of half shafts', NULL, '18.7 Nm', '217 Nm', '512 Nm', '280 Nm', '2', '13'),
(34, 'In which clutch type RPM is directly proportional to the amount of torque transmitted', NULL, 'Centrifugal Clutch', 'Cone Clutch  ', 'Single Plate Clutch ', 'Multiplate Clutch', '1', NULL),
(35, 'Which of the following ARE CORRECT ?\r\nStatement A: In open differential the velocity of both the wheels are equal\r\nStatement B: In open differential majority of the torque is provided to the wheel with max traction\r\nStatement C:Locked Differential is suitable for rough terrains\r\n', NULL, 'A,B & C     ', 'A & C only', 'C only', 'B & C only', '4', NULL),
(36, 'What happens at the Stalling angle?', NULL, 'Lift increases & Drag decreases', 'Lift decreases gradually', 'Drag decreases gradually', 'Lift decreases suddenly', '4', NULL),
(37, 'In the given diagram, \r\n	1. Pressure at A > Pressure at B\r\n	2. Pressure at B> Pressure at A\r\n	3. Velocity at A> Velocity at B\r\n	4. Velocity at B> Velocity at A  \r\nCorrect options are :', NULL, '1 & 3', '2 & 4', '1 & 4', '2 & 3', '4', '17'),
(38, '	The sum of all the angles of corners of a 5 point star(not necessary that corners subtend equal angles) is', NULL, '180 deg', '300 deg', 'between 180deg and 360deg', 'Less than 180 deg', '1', '18'),
(39, '	How many maximum intersections can be achieved by using 4 lines?', NULL, '3', '4', '5', '6', '4', NULL),
(40, '	If two-third of three-tenth of a number is 30, then one-third of two-fifth of the number is ____', NULL, '15', '20', '35', '70', '2', NULL),
(41, 'Find the mass of the following body.\r\nDensity of the material is 2700kg/m3\r\n', NULL, '524g', '259g', '518g', '246g', '3', '21'),
(42, 'The percent increase in the area of a rectangle if each side is increased by 20% is ____', NULL, '40%', '42%', '44%', '48%', '3', NULL),
(43, '	Complete the series\r\n                    FAG , GAF , HAI , IAH , ____\r\n', NULL, 'JAK', 'JAL', 'JAJ', 'JAI', '1', NULL),
(44, '	Starting from a point , Raju walked 12m North , then 10m to the right , he again turned right and walked 12m , then he turned left and walked 5m . How far and in which direction is he from the starting point', NULL, '27m toward East', '	15m toward East', '	05m toward East', '15m toward West', '2', NULL),
(45, 'In a 500m race, the ratio of the speeds of two contestants A and B is 3:4. A has a start of 140m , then A wins by _____', NULL, '20m', '40m', '10m', 'B wins the race', '1', NULL),
(46, '	If 4&radic;17 + &radic;(272 ) = M , then &radic;425 + 17&radic;17= ?', NULL, '1.25M', '2.75M', '	3.15M', '	4.25M', '2', NULL),
(47, 'Find the reaction forces at A and B respectively', NULL, 'R(A)=17.5 N  R(B)= 17.5 N', '	R(A)=3.7 N  R(B)= 3.7 N', '	R(A)=28 N  R(B)= 28 N', '	R(A)=49 N  R(B)= 49 N', '3', '27'),
(48, 'Choose the incorrect statement(s)\r\n    1. Ansys is used for Analysis\r\n    2. Ansys is used for 3D Modelling\r\n    3. Catia is used for Analysis\r\n    4. Ansys is used for Drafting', NULL, '2, 3 & 4', '2 & 3', 'Only 2', 'Only 4', '4', NULL),
(49, 'In the following figure, the member connecting pts. S and SF is known as ', NULL, 'Side Interface Member', 'Side Bracing Member', 'Side Impact Member', 'All of the above', '3', '29'),
(50, 'Meshing is done to', NULL, 'Convert infinite number of elements into finite', 'Distribute the total force uniformly', 'Get more accurate results', 'All of the above', '4', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `img` (`img`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
