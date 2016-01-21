-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: quiz
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `q_count` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (5,'category 1',0,NULL),(6,'Verbal Ability',0,NULL),(7,'ATTENTION TO DETAILS',0,NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_name` text NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (12,'70 students are required to paint a picture. 52 use green color and some children use red, 38 students use both the colors. How\r\nmany students use red color?','24','42','56','70','3',5),(13,'At an international conference, 100 delegates spoke English, 40 spoke French, and 20 spoke both English and French. How\r\nmany delegates could speak at least one of these two languages?','110','100','140','120','4',5),(14,'A group of 50 students were required to clear 2 tasks, one in rockâ€“climbing and the other in bridge crossing during an adventure sports expedition. 30 students cleared both the tasks. 37 cleared bridge crossing, 38 students cleared rockâ€“climbing. How many students could not clear any task?','0','3','5','9','3',5),(15,'A dance instructor conducts annual workshops in which he holds sessions for basic learners and trainers. In a particular year,\r\n2000 people attended the workshop. 1500 participated as learners and 800 as trainers. How many participated as only trainers?','200','500','800','1500','2',5),(16,'In a group of 400 readers who read science fiction or literacy works or both, 250 read science fiction and 230 read literacy\r\nworks. How many read both science fiction and literacy works?','80','160','220','400','1',5),(17,'A man said to a lady, \"Your mother\'s husband\'s sister is my aunt\". How is the lady related to the man?','Daughter','Granddaughter','Mother','Sister','4',5),(18,'A man is facing west. He turns 45-degree in the clockwise direction and then another 180 degree in the same direction and then 270 degree in the anticlockwise direction. Which direction is he facing now?','South','Northâ€“West','West','Southâ€“West','4',5),(19,'In a row of 60, if Ram is standing at 17th from the first, what is his position from the last?','25','43','44','45','3',5),(20,'A man is facing northwest. He turns 90 degrees in the clockwise direction and then 135degrees in the antiâ€“clockwise direction. Which direction is he facing now?','East','West','North','South','2',5),(21,'What is the value of P?\r\nI. P and Q are integers\r\nII. PQ = 10, P + Q =5',' if the question can be answered with the help of statement I alone.','if the question can be answered with the help of statement II alone.',' if the question can be answered with the help of both I and II.','if the question cannot be answered at all.','4',5),(22,'Who got the highest score in the Mathematics examination between Sumit, Amit and Namit? No two students got the same\r\nmarks.\r\nI. Sumit got more marks than Namit.\r\nII. Amit did not get lesser marks than Sumit, who did not get lesser marks than Namit.','if the question can be answered with the help of statement I alone.','if the question can be answered with the help of statement II alone.','if the question can be answered with the help of both I and II.\r\n','if the question cannot be answered at all.','2',5),(23,'How many hours does it take some boys and girls in a camp to put up the tent?\r\nI. There are 4 boys and 7 girls. \r\nII. A girl can put up the tent in 5 hours and a boy can put up the tent in 3 hours.','if the question can be answered with the help of statement I alone.','if the question can be answered with the help of statement II alone.','if the question can be answered with the help of both I and II.','if the question cannot be answered at all.','3',5),(24,'If p, q, r, s and t are in an Arithmetic Progression, is r the largest among them?\r\nI. t > 0 \r\nII. p, q < 0','if the question can be answered with the help of statement I alone.','if the question can be answered with the help of statement II alone.','if the question can be answered with the help of both I and II.','if the question cannot be answered at all.','4',5),(25,'Is X a whole number, if X > 0?\r\nI. 2X is an even number. \r\nII. 3X is an odd number.','if the question can be answered with the help of statement I alone.','if the question can be answered with the help of statement II alone.','if the question can be answered with the help of both I and II.',' if the question cannot be answered at all.','1',5),(26,'Follow the directions given below to answer the questions that follow.\r\nSeven instructors â€“ J, K, L, M, N, P and Q â€“ teach management courses at a premier institute in east India. Each instructor teaches\r\nduring exactly one term: the first term, the second term, or the third term. The following conditions apply:\r\nK teaches during the third term.\r\nL and M teach during the same term.\r\nQ teaches during either the first term or the second term.\r\nExactly twice as many instructors teach during the third term as teach during the first term.\r\nN and Q teach during different terms.\r\nJ and P teach during different terms.\r\n\r\nWhich one of the following could be an accurate matching of instructors to terms?','M: the first term; P: the second term; Q: the first term','J: the third term; L: the third term; P: the third term','L: the first term; N: the second term; P: the third term','J: the first term; M: the third term; N: the second term','4',5),(27,'Follow the directions given below to answer the questions that follow.\r\nSeven instructors â€“ J, K, L, M, N, P and Q â€“ teach management courses at a premier institute in east India. Each instructor teaches\r\nduring exactly one term: the first term, the second term, or the third term. The following conditions apply:\r\nK teaches during the third term.\r\nL and M teach during the same term.\r\nQ teaches during either the first term or the second term.\r\nExactly twice as many instructors teach during the third term as teach during the first term.\r\nN and Q teach during different terms.\r\nJ and P teach during different terms.\r\n\r\nWhich one of the following cannot be true?','L teaches during the first term','M teaches during the second term','M teaches during the third term','N teaches during the second term','1',5),(28,'Follow the directions given below to answer the questions that follow.\r\nSeven instructors â€“ J, K, L, M, N, P and Q â€“ teach management courses at a premier institute in east India. Each instructor teaches\r\nduring exactly one term: the first term, the second term, or the third term. The following conditions apply:\r\nK teaches during the third term.\r\nL and M teach during the same term.\r\nQ teaches during either the first term or the second term.\r\nExactly twice as many instructors teach during the third term as teach during the first term.\r\nN and Q teach during different terms.\r\nJ and P teach during different terms.\r\n\r\nIf exactly one instructor teaches during the second term, which one of the following must be true?','J teaches during the third term','L teaches during the first term','M teaches during the third term','P teaches during the second term','3',5),(29,'Follow the directions given below to answer the questions that follow.\r\nSeven instructors â€“ J, K, L, M, N, P and Q â€“ teach management courses at a premier institute in east India. Each instructor teaches\r\nduring exactly one term: the first term, the second term, or the third term. The following conditions apply:\r\nK teaches during the third term.\r\nL and M teach during the same term.\r\nQ teaches during either the first term or the second term.\r\nExactly twice as many instructors teach during the third term as teach during the first term.\r\nN and Q teach during different terms.\r\nJ and P teach during different terms.\r\n\r\nEach of the following contains a list of instructors who can all teach during the same term EXCEPT:','J, K, M','J, L, M','K, L, P','K, P, Q','4',5),(30,'Follow the directions given below to answer the questions that follow.\r\nSeven instructors â€“ J, K, L, M, N, P and Q â€“ teach management courses at a premier institute in east India. Each instructor teaches\r\nduring exactly one term: the first term, the second term, or the third term. The following conditions apply:\r\nK teaches during the third term.\r\nL and M teach during the same term.\r\nQ teaches during either the first term or the second term.\r\nExactly twice as many instructors teach during the third term as teach during the first term.\r\nN and Q teach during different terms.\r\nJ and P teach during different terms.\r\n\r\nIf more instructors teach during the second term than teach during the first term, then which one of the following instructors\r\nmust teach during the second term?','J','M','N','P','2',5),(31,'The average age of 8 persons in a committee is increased by 2 years when two men aged 35 years and 45 years are substituted by two women. The average age of these two women is:','52 years','56 years','48 years','44 years','3',5),(32,'Choose the option which will correctly fill the blank.\r\nI am writing to enquire â€¦ the possibility of hiring a conference room at the hotel on the 2nd of September.','of','about','into','after','2',6),(33,'Choose the option which will correctly fill the blank.\r\nâ€¦ having her lunch, she stood â€¦ the tree and waited â€¦ him.','With, below, for','After, under, for','Inside, further, to','About, across, into','2',6),(34,'Choose the option which will correctly fill the blank.\r\nThe microscopic animals are the primary food for larval cod and their decline has meant that fewer fish are making it to\r\nadulthood to be caught â€¦ trawler men.','in','into','by','with','3',6),(35,'Choose the word nearest in meaning to the word in italics from the given options.\r\nThe jacket is impervious to water.','Dirty','Pure','Impenetrable','Favorable','3',6),(36,'Choose the word nearest in meaning to the word in italics from the given options.\r\nChandan was chagrined with the continuous disruption of the power supply to his home.','Delighted','Creation','Peeved','Security','3',6),(37,'Choose the word nearest in meaning to the word in italics from the given options.\r\nThe latest ordinance issued by the government has provided the bank with two options.','Decision','Law','Opinion','Verdict','2',6),(38,'.â€¦ great writer is convinced that whatever he says is not an echo or imitation of what others have said.','An','The','A','No article required','3',6),(39,'.â€¦ Reserve Bank of India directed banks to closely watch â€¦ spending through International Debit Cards.','A, the','The, the','The, a','An, the','2',6),(40,'The officer received â€¦ official letter from â€¦ Ministry of IT in â€¦ Central Government.','a, the, an','an, the, the',' a, an, the','An, an, the','2',6),(41,'You CANNOT send out â€¦ uneducated man into â€¦ world of technology and expect him to perform.','an, an','a, an','an, the','the, an','3',6),(42,'Microprocessor is an electronic computer Central Processing Unit (CPU) made from miniaturized transistors and other\r\ncircuit elements on a single semiconductor Integrated Circuit (IC). Before the advent of microprocessors, electronic CPUs were\r\nmade from individual smallâ€“scale Integrated Circuits containing the equivalent of only a few transistors. By integrating the\r\nprocessor onto one or a very few largeâ€“scale Integrated Circuit packages (containing the equivalent of thousands or millions of\r\ndiscrete transistors), the cost of processor power was greatly reduced. The evolution of microprocessors has been known to follow\r\nMoore\'s Law when it comes to steadily increasing performance over the years.\r\nThis law suggests that the complexity of an Integrated Circuit with respect to minimum component cost will double in\r\nabout 18 months. From humble beginnings as the drivers for calculators, the continued increase in power has led to the dominance\r\nof microprocessors over every other form of computer; every system from the largest mainframes to the smallest handheld\r\ncomputers now uses a microprocessor at their core. As with many advances in technology, the microprocessor was an idea whose\r\ntime had come. Three projects arguably delivered a complete microprocessor at about the same time: Intel\'s 4004, Texas\r\nInstruments\' TMS1000 and Garrett AI Research\'s Central Air Data Computer. .\r\nA computerâ€“onâ€“aâ€“chip is a variation of a microprocessor, which combines the microprocessor core (CPU), some\r\nmemory, and I/O (input/output) lines, all on one chip. The proper meaning of microcomputer is a computer using a (number of)\r\nmicroprocessor(s) as its CPU(s), while the concept of the patent is somewhat more similar to a micro controller.\r\n\r\nWhich of the following descriptions would NOT fit a microprocessor?',' Electronic computer','Central Processing Unit','Memory disk','A single integrated chip circuit.','3',6),(43,'Microprocessor is an electronic computer Central Processing Unit (CPU) made from miniaturized transistors and other\r\ncircuit elements on a single semiconductor Integrated Circuit (IC). Before the advent of microprocessors, electronic CPUs were\r\nmade from individual smallâ€“scale Integrated Circuits containing the equivalent of only a few transistors. By integrating the\r\nprocessor onto one or a very few largeâ€“scale Integrated Circuit packages (containing the equivalent of thousands or millions of\r\ndiscrete transistors), the cost of processor power was greatly reduced. The evolution of microprocessors has been known to follow\r\nMoore\'s Law when it comes to steadily increasing performance over the years.\r\nThis law suggests that the complexity of an Integrated Circuit with respect to minimum component cost will double in\r\nabout 18 months. From humble beginnings as the drivers for calculators, the continued increase in power has led to the dominance\r\nof microprocessors over every other form of computer; every system from the largest mainframes to the smallest handheld\r\ncomputers now uses a microprocessor at their core. As with many advances in technology, the microprocessor was an idea whose\r\ntime had come. Three projects arguably delivered a complete microprocessor at about the same time: Intel\'s 4004, Texas\r\nInstruments\' TMS1000 and Garrett AI Research\'s Central Air Data Computer. .\r\nA computerâ€“onâ€“aâ€“chip is a variation of a microprocessor, which combines the microprocessor core (CPU), some\r\nmemory, and I/O (input/output) lines, all on one chip. The proper meaning of microcomputer is a computer using a (number of)\r\nmicroprocessor(s) as its CPU(s), while the concept of the patent is somewhat more similar to a micro controller.\r\n\r\nSelect the TRUE statement from the following.','Microprocessors and computers on a chip are variations of each other.','Integration of processing power on chips has made processing power cheaper.','Before microprocessors, CPUs were not made from individual small scale ICs.','A microprocessor circuit only has transistors in it.','3',6),(44,'Microprocessor is an electronic computer Central Processing Unit (CPU) made from miniaturized transistors and other\r\ncircuit elements on a single semiconductor Integrated Circuit (IC). Before the advent of microprocessors, electronic CPUs were\r\nmade from individual smallâ€“scale Integrated Circuits containing the equivalent of only a few transistors. By integrating the\r\nprocessor onto one or a very few largeâ€“scale Integrated Circuit packages (containing the equivalent of thousands or millions of\r\ndiscrete transistors), the cost of processor power was greatly reduced. The evolution of microprocessors has been known to follow\r\nMoore\'s Law when it comes to steadily increasing performance over the years.\r\nThis law suggests that the complexity of an Integrated Circuit with respect to minimum component cost will double in\r\nabout 18 months. From humble beginnings as the drivers for calculators, the continued increase in power has led to the dominance\r\nof microprocessors over every other form of computer; every system from the largest mainframes to the smallest handheld\r\ncomputers now uses a microprocessor at their core. As with many advances in technology, the microprocessor was an idea whose\r\ntime had come. Three projects arguably delivered a complete microprocessor at about the same time: Intel\'s 4004, Texas\r\nInstruments\' TMS1000 and Garrett AI Research\'s Central Air Data Computer. .\r\nA computerâ€“onâ€“aâ€“chip is a variation of a microprocessor, which combines the microprocessor core (CPU), some\r\nmemory, and I/O (input/output) lines, all on one chip. The proper meaning of microcomputer is a computer using a (number of)\r\nmicroprocessor(s) as its CPU(s), while the concept of the patent is somewhat more similar to a micro controller.\r\n\r\nWhich of the following was NOT the first to develop a microprocessor?','Microsoft','Intel','Texas Instruments','Garret','1',6),(45,'Microprocessor is an electronic computer Central Processing Unit (CPU) made from miniaturized transistors and other\r\ncircuit elements on a single semiconductor Integrated Circuit (IC). Before the advent of microprocessors, electronic CPUs were\r\nmade from individual smallâ€“scale Integrated Circuits containing the equivalent of only a few transistors. By integrating the\r\nprocessor onto one or a very few largeâ€“scale Integrated Circuit packages (containing the equivalent of thousands or millions of\r\ndiscrete transistors), the cost of processor power was greatly reduced. The evolution of microprocessors has been known to follow\r\nMoore\'s Law when it comes to steadily increasing performance over the years.\r\nThis law suggests that the complexity of an Integrated Circuit with respect to minimum component cost will double in\r\nabout 18 months. From humble beginnings as the drivers for calculators, the continued increase in power has led to the dominance\r\nof microprocessors over every other form of computer; every system from the largest mainframes to the smallest handheld\r\ncomputers now uses a microprocessor at their core. As with many advances in technology, the microprocessor was an idea whose\r\ntime had come. Three projects arguably delivered a complete microprocessor at about the same time: Intel\'s 4004, Texas\r\nInstruments\' TMS1000 and Garrett AI Research\'s Central Air Data Computer. .\r\nA computerâ€“onâ€“aâ€“chip is a variation of a microprocessor, which combines the microprocessor core (CPU), some\r\nmemory, and I/O (input/output) lines, all on one chip. The proper meaning of microcomputer is a computer using a (number of)\r\nmicroprocessor(s) as its CPU(s), while the concept of the patent is somewhat more similar to a micro controller.\r\n\r\nAccording to the passage, which of these is NOT a use of microprocessors?','Drivers for calculators','Core for large mainframes','Advanced mobile phones','Used for small handheld\r\ncomputers','3',6),(46,'Microprocessor is an electronic computer Central Processing Unit (CPU) made from miniaturized transistors and other\r\ncircuit elements on a single semiconductor Integrated Circuit (IC). Before the advent of microprocessors, electronic CPUs were\r\nmade from individual smallâ€“scale Integrated Circuits containing the equivalent of only a few transistors. By integrating the\r\nprocessor onto one or a very few largeâ€“scale Integrated Circuit packages (containing the equivalent of thousands or millions of\r\ndiscrete transistors), the cost of processor power was greatly reduced. The evolution of microprocessors has been known to follow\r\nMoore\'s Law when it comes to steadily increasing performance over the years.\r\nThis law suggests that the complexity of an Integrated Circuit with respect to minimum component cost will double in\r\nabout 18 months. From humble beginnings as the drivers for calculators, the continued increase in power has led to the dominance\r\nof microprocessors over every other form of computer; every system from the largest mainframes to the smallest handheld\r\ncomputers now uses a microprocessor at their core. As with many advances in technology, the microprocessor was an idea whose\r\ntime had come. Three projects arguably delivered a complete microprocessor at about the same time: Intel\'s 4004, Texas\r\nInstruments\' TMS1000 and Garrett AI Research\'s Central Air Data Computer. .\r\nA computerâ€“onâ€“aâ€“chip is a variation of a microprocessor, which combines the microprocessor core (CPU), some\r\nmemory, and I/O (input/output) lines, all on one chip. The proper meaning of microcomputer is a computer using a (number of)\r\nmicroprocessor(s) as its CPU(s), while the concept of the patent is somewhat more similar to a micro controller.\r\n\r\n\"A number of microprocessors at its CPU\" is an apt description of a:','Microâ€“controller ','Microâ€“computer','Microâ€“processor','Microâ€“transistor','2',6),(47,'Follow the directions given below to answer the questions that follow.\r\nLLMLLLKLMPUU, LLMLLLKLMPUU, LLMLLLKLMPUU','if ALL THREE items given in the question are exactly ALIKE.','if only the FIRST and SECOND items are exactly ALIKE.','if only the FIRST and THIRD items are exactly ALIKE.','if only the SECOND and THIRD items are exactly ALIKE.','1',7),(48,'Follow the directions given below to answer the questions that follow. \r\n0452â€“9858762, 0452â€“9858762, 0452â€“9858762','if ALL THREE items given in the question are exactly ALIKE.','if only the FIRST and SECOND items are exactly ALIKE.','if only the FIRST and THIRD items are exactly ALIKE.','if only the SECOND and THIRD items are exactly ALIKE.','1',7),(49,'Follow the directions given below to answer the questions that follow.\r\nNIINIININN, NIININNINN, NIINIININN','if ALL THREE items given in the question are exactly ALIKE.','if only the FIRST and SECOND items are exactly ALIKE.','if only the FIRST and THIRD items are exactly ALIKE.','if only the SECOND and THIRD items are exactly ALIKE.','3',7),(50,'Follow the directions given below to answer the questions that follow.\r\n4665.8009291, 4665.7999291, 4665.8009291','if ALL THREE items given in the question are exactly ALIKE.',' if only the FIRST and SECOND items are exactly ALIKE.','if only the FIRST and THIRD items are exactly ALIKE.','if only the SECOND and THIRD items are exactly ALIKE.','3',7),(51,'Follow the directions given below to answer the questions that follow. \r\n808088080.8080, 808008080.8080, 808088080.8080','if ALL THREE items given in the question are exactly ALIKE.','if only the FIRST and SECOND items are exactly ALIKE.','if only the FIRST and THIRD items are exactly ALIKE.','if only the SECOND and THIRD items are exactly ALIKE.','3',7),(52,'If* stands for /, / stands for â€“, + stands for * and â€“ stands for +, then 9/8*7+5â€“10=?','13.3','10.8','10.7','11.4','1',7),(53,'If* stands for /, / stands for â€“, + stands for * and â€“ stands for +, then 9/15*9+2â€“9=?','14.7','15.3','14.1','16.2','1',7),(54,'If * stands for /, / stands for â€“, + stands for * and â€“ stands for +, then which of the following is TRUE?','36/12*4+50â€“8 = â€“106','12*8/4+50â€“8 = 45.5','36*4/12+36â€“8 = 4.7','8*36/4+50â€“8 = 300','1',7),(55,'In the following questions, the following letters indicate mathematical operations as indicated\r\nbelow:\r\nA: Addition V: Equal to S: Subtraction W: Greater than\r\nM: Multiplication X: Less than D: Division\r\n\r\nOut of the four alternatives given in these questions, only one is correct according to the above letter symbols. Identify the correct one.\r\nSee the options given below','6 S 7 A 2 M 3 W 0 D 7','6 A 7 S 2 M 3 W 0 A 7 ','6 S 7 M 2 S 3 W 0 M 7',' 6 M 7 S 2 A 3 X 0 D 7','1',7),(56,'If * stands for â€“, / stands for +, + stands for / and â€“ stands for *, then which of the following is TRUE?','16/8*6+90â€“12 =23.2','8*12/6+90â€“12 =7.2','16*6/8+16â€“12 = â€“ 4.1',' 12*16/6+90â€“12 =8','1',7),(57,'If * stands for â€“, / stands for +, + stands for / and â€“ stands for *, then which of the following is TRUE?','16*4/18+16â€“8 = â€“ 10.1 ','18*8/4+40â€“8 = â€“ 2.8','16/18*4+40â€“8 = 33.2','8*16/4+40â€“8 = â€“ 2','3',7),(58,'Read the following data and answer the following question:\r\nA, B, D, F, G, H and K are seven members of a family.\r\nThey belong to three generations.\r\nThere are two married couples belonging to two different generations.\r\nD is son of H and is married to K.\r\nF is granddaughter of B.\r\nG\'s father is grandfather of A.\r\nB\'s husband is father-in -law of K.\r\nH has only one son.\r\n\r\nHow is F related to G?','Son',' Nephew','Niece','data inadequate','3',7),(59,'Read the following data and answer the following question:\r\nA, B, D, F, G, H and K are seven members of a family.\r\nThey belong to three generations.\r\nThere are two married couples belonging to two different generations.\r\nD is son of H and is married to K.\r\nF is granddaughter of B.\r\nG\'s father is grandfather of A.\r\nB\'s husband is father-in -law of K.\r\nH has only one son.\r\n\r\nHow is H related to B?','Father','Father-in-law','Uncle','None of these','4',7),(60,'Read the following data and answer the following question:\r\nA, B, D, F, G, H and K are seven members of a family.\r\nThey belong to three generations.\r\nThere are two married couples belonging to two different generations.\r\nD is son of H and is married to K.\r\nF is granddaughter of B.\r\nG\'s father is grandfather of A.\r\nB\'s husband is father-in -law of K.\r\nH has only one son.\r\n\r\nHow is K related to G?','Sister-in-law','Sister',' Niece','None of these','1',7),(61,'Read the following data and answer the following question:\r\nA, B, D, F, G, H and K are seven members of a family.\r\nThey belong to three generations.\r\nThere are two married couples belonging to two different generations.\r\nD is son of H and is married to K.\r\nF is granddaughter of B.\r\nG\'s father is grandfather of A.\r\nB\'s husband is father-in -law of K.\r\nH has only one son.\r\n\r\nWhich of the following is the pair of married ladies?','HK','HD','KF','None of these','4',7);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `q_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `score` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `score`
--

LOCK TABLES `score` WRITE;
/*!40000 ALTER TABLE `score` DISABLE KEYS */;
/*!40000 ALTER TABLE `score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` char(128) NOT NULL,
  `level` int(11) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1115 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1102,'admin','admin','quiKFuafpJed2',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-21 11:26:45
