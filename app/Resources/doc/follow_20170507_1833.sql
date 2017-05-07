-- MySQL dump 10.13  Distrib 5.6.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: follow
-- ------------------------------------------------------
-- Server version	5.6.35-1+deb.sury.org~xenial+0.1

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
-- Table structure for table `age`
--

DROP TABLE IF EXISTS `age`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `age` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `age`
--

LOCK TABLES `age` WRITE;
/*!40000 ALTER TABLE `age` DISABLE KEYS */;
INSERT INTO `age` VALUES (1,'Poussinets',6,6),(2,'Mini-Poussins',7,8),(3,'Poussins',9,10),(4,'Benjamins',11,12),(5,'Minimes',13,14),(6,'Cadets',15,17),(7,'Juniors',18,20),(8,'Seniors',21,39),(9,'Vétéran',40,100);
/*!40000 ALTER TABLE `age` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `eventType_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3BAE0AA7C15B25DE` (`eventType_id`),
  CONSTRAINT `FK_3BAE0AA7C15B25DE` FOREIGN KEY (`eventType_id`) REFERENCES `eventType` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'aa','aa','2017-04-20 00:00:00',4),(2,'Passage de grade Mai','Vitrolles','2017-04-27 00:00:00',2);
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventType`
--

DROP TABLE IF EXISTS `eventType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  `selected` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventType`
--

LOCK TABLES `eventType` WRITE;
/*!40000 ALTER TABLE `eventType` DISABLE KEYS */;
INSERT INTO `eventType` VALUES (1,'Inscription','inscription',1,1,1),(2,'Passage de grade','grade',2,1,1),(3,'Animation','animation',3,1,1),(4,'Interclub','interclub',4,1,1),(5,'Test physique','test_physique',5,1,1);
/*!40000 ALTER TABLE `eventType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fightingType`
--

DROP TABLE IF EXISTS `fightingType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fightingType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  `selected` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fightingType`
--

LOCK TABLES `fightingType` WRITE;
/*!40000 ALTER TABLE `fightingType` DISABLE KEYS */;
/*!40000 ALTER TABLE `fightingType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'arno','arno','arnaud@dollois.com','arnaud@dollois.com',1,NULL,'$2y$13$uG.wAq0muRv0Wg7FLLtRIOt6gPyRuA/vJO5o4NaZMpzaVv2oTrJ/.','2017-05-07 15:59:52',NULL,NULL,'a:1:{i:0;s:5:\"ADMIN\";}');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `measure`
--

DROP TABLE IF EXISTS `measure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `measure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` double NOT NULL,
  `date` datetime NOT NULL,
  `measureType_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_80071925ECD49A4C` (`measureType_id`),
  KEY `IDX_800719257597D3FE` (`member_id`),
  CONSTRAINT `FK_800719257597D3FE` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`),
  CONSTRAINT `FK_80071925ECD49A4C` FOREIGN KEY (`measureType_id`) REFERENCES `measureType` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `measure`
--

LOCK TABLES `measure` WRITE;
/*!40000 ALTER TABLE `measure` DISABLE KEYS */;
INSERT INTO `measure` VALUES (1,80.5,'2017-05-03 22:27:33',1,1),(2,81,'2017-01-01 21:00:00',1,1),(3,80.5,'2017-01-15 21:00:00',1,1),(4,80,'2017-02-01 21:00:00',1,1),(5,80,'2017-02-15 21:00:00',1,1),(6,79.5,'2017-03-00 21:00:00',1,1),(7,81,'2017-01-01 21:00:00',1,1),(8,80.5,'2017-01-15 21:00:00',1,1),(9,80,'2017-02-01 21:00:00',1,1),(10,80,'2017-02-15 21:00:00',1,1),(11,79.5,'2017-03-00 21:00:00',1,1);
/*!40000 ALTER TABLE `measure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `measureType`
--

DROP TABLE IF EXISTS `measureType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `measureType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  `selected` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `measureType`
--

LOCK TABLES `measureType` WRITE;
/*!40000 ALTER TABLE `measureType` DISABLE KEYS */;
INSERT INTO `measureType` VALUES (1,'Poids','kg',1,1,0),(2,'Taille','m',2,1,0);
/*!40000 ALTER TABLE `measureType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sex_id` int(11) DEFAULT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `avatar` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_70E4FA785A2DB2A0` (`sex_id`),
  CONSTRAINT `FK_70E4FA785A2DB2A0` FOREIGN KEY (`sex_id`) REFERENCES `sex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,1,'Arnaud','Dollois','1976-03-02 00:00:00',NULL),(2,1,'Aaaa','Qaaaa','1976-02-01 00:00:00','4ae5128c518380c41ceda87bd03d8c25.jpeg'),(8,1,'Alexis','Dollois','2007-07-10 00:00:00',NULL),(9,1,'Anthony','Dollois','2010-11-08 00:00:00',NULL),(10,2,'Mégane','AQaze','2000-07-14 00:00:00','44f27942d92f603bdab190645d9616ec.jpeg');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_62A8A7A77597D3FE` (`member_id`),
  KEY `IDX_62A8A7A771F7E88B` (`event_id`),
  KEY `IDX_62A8A7A77A7B643` (`result_id`),
  CONSTRAINT `FK_62A8A7A771F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  CONSTRAINT `FK_62A8A7A77597D3FE` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`),
  CONSTRAINT `FK_62A8A7A77A7B643` FOREIGN KEY (`result_id`) REFERENCES `result` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `podium` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sex`
--

DROP TABLE IF EXISTS `sex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL,
  `actif` int(11) NOT NULL,
  `selected` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sex`
--

LOCK TABLES `sex` WRITE;
/*!40000 ALTER TABLE `sex` DISABLE KEYS */;
INSERT INTO `sex` VALUES (1,'Homme','H',1,1,1),(2,'Femme','F',2,1,0);
/*!40000 ALTER TABLE `sex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weight`
--

DROP TABLE IF EXISTS `weight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sex_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `age_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7CD55415A2DB2A0` (`sex_id`),
  KEY `IDX_7CD5541CC80CD12` (`age_id`),
  CONSTRAINT `FK_7CD55415A2DB2A0` FOREIGN KEY (`sex_id`) REFERENCES `sex` (`id`),
  CONSTRAINT `FK_7CD5541CC80CD12` FOREIGN KEY (`age_id`) REFERENCES `age` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weight`
--

LOCK TABLES `weight` WRITE;
/*!40000 ALTER TABLE `weight` DISABLE KEYS */;
INSERT INTO `weight` VALUES (1,1,'-30kg',0,30,4),(2,1,'-34kg',30,34,4),(3,1,'-38kg',34,38,4),(4,1,'-42kg',38,42,4),(5,1,'-46kg',42,46,4),(6,1,'-50kg',46,50,4),(7,1,'-55kg',50,55,4),(8,1,'-60kg',55,60,4),(9,1,'-34kg',0,34,5),(10,1,'-38kg',34,38,5),(11,1,'-42kg',38,42,5),(12,1,'-46kg',42,46,5),(13,1,'-50kg',46,50,5),(14,1,'-55kg',50,55,5),(15,1,'-60kg',55,60,5),(16,1,'-66kg',60,66,5),(17,1,'-46kg',42,46,6),(18,1,'-50kg',46,50,6),(19,1,'-55kg',50,55,6),(20,1,'-60kg',55,60,6),(21,1,'-66kg',60,66,6),(22,1,'-73kg',66,73,6),(23,1,'-81kg',73,81,6),(24,1,'-90kg',81,90,6),(25,1,'-55kg',50,55,7),(26,1,'-60kg',55,60,7),(27,1,'-66kg',60,66,7),(28,1,'-73kg',66,73,7),(29,1,'-81kg',73,81,7),(30,1,'-90kg',81,90,7),(31,1,'-100kg',90,100,7),(32,1,'+100kg',100,200,7),(33,1,'-60kg',55,60,8),(34,1,'-66kg',60,66,8),(35,1,'-73kg',66,73,8),(36,1,'-81kg',73,81,8),(37,1,'-90kg',81,90,8),(38,1,'-100kg',90,100,8),(39,1,'+100kg',100,200,8),(40,1,'-60kg',55,60,9),(41,1,'-66kg',60,66,9),(42,1,'-73kg',66,73,9),(43,1,'-81kg',73,81,9),(44,1,'-90kg',81,90,9),(45,1,'-100kg',90,100,9),(46,1,'+100kg',100,200,9),(47,2,'-32kg',0,32,4),(48,2,'-36kg',32,36,4),(49,2,'-40kg',36,40,4),(50,2,'-44kg',40,44,4),(51,2,'-48kg',44,48,4),(52,2,'-52kg',48,52,4),(53,2,'-57kg',52,57,4),(54,2,'-63kg',57,63,4),(55,2,'+63kg',63,100,4),(56,2,'-36kg',32,36,5),(57,2,'-40kg',36,40,5),(58,2,'-44kg',40,44,5),(59,2,'-48kg',44,48,5),(60,2,'-52kg',48,52,5),(61,2,'-57kg',52,57,5),(62,2,'-63kg',57,63,5),(63,2,'-70kg',63,70,5),(64,2,'+70kg',70,100,5),(65,2,'-40kg',36,40,6),(66,2,'-44kg',40,44,6),(67,2,'-48kg',44,48,6),(68,2,'-52kg',48,52,6),(69,2,'-57kg',52,57,6),(70,2,'-63kg',57,63,6),(71,2,'-70kg',63,70,6),(72,2,'+70kg',70,100,6),(73,2,'-44kg',40,44,7),(74,2,'-48kg',44,48,7),(75,2,'-52kg',48,52,7),(76,2,'-57kg',52,57,7),(77,2,'-63kg',57,63,7),(78,2,'-70kg',63,70,7),(79,2,'-78kg',70,78,7),(80,2,'+78kg',78,100,7),(81,2,'-48kg',44,48,8),(82,2,'-52kg',48,52,8),(83,2,'-57kg',52,57,8),(84,2,'-63kg',57,63,8),(85,2,'-70kg',63,70,8),(86,2,'-78kg',70,78,8),(87,2,'+78kg',78,100,8),(88,2,'-48kg',44,48,9),(89,2,'-52kg',48,52,9),(90,2,'-57kg',52,57,9),(91,2,'-63kg',57,63,9),(92,2,'-70kg',63,70,9),(93,2,'-78kg',70,78,9),(94,2,'+78kg',78,100,9);
/*!40000 ALTER TABLE `weight` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-07 18:33:14
