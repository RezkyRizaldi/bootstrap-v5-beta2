-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: vtuber_sub_indo
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `affiliations`
--

DROP TABLE IF EXISTS `affiliations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `affiliations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affiliations`
--

LOCK TABLES `affiliations` WRITE;
/*!40000 ALTER TABLE `affiliations` DISABLE KEYS */;
INSERT INTO `affiliations` VALUES (1,'Hololive','aff_51cc0de3cd3f470dde0af15b1e98bd9a.png','Hololive Production (ホロライブプロダクション Hororaibu Purodakushon), or simply known as hololive (ホロライブ), is a Virtual Idol agency consisting of Virtual YouTubers supported and created by Cover Corp','2021-03-07 08:47:03','2021-03-07 08:47:03');
/*!40000 ALTER TABLE `affiliations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `affiliations_talent`
--

DROP TABLE IF EXISTS `affiliations_talent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `affiliations_talent` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `affiliation_id` int NOT NULL,
  `talent_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affiliations_talent`
--

LOCK TABLES `affiliations_talent` WRITE;
/*!40000 ALTER TABLE `affiliations_talent` DISABLE KEYS */;
INSERT INTO `affiliations_talent` VALUES (1,1,1,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(2,1,2,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(3,1,3,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(4,1,4,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(5,1,5,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(6,1,6,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(7,1,7,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(8,1,8,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(9,1,9,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(10,1,10,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(11,1,11,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(12,1,12,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(13,1,13,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(14,1,14,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(15,1,15,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(16,1,16,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(17,1,17,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(18,1,18,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(19,1,19,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(20,1,20,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(21,1,21,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(22,1,22,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(23,1,23,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(24,1,24,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(25,1,25,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(26,1,26,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(27,1,27,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(28,1,28,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(29,1,29,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(30,1,30,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(31,1,31,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(32,1,32,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(33,1,33,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(34,1,34,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(35,1,35,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(36,1,36,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(37,1,37,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(38,1,38,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(39,1,39,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(40,1,40,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(41,1,41,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(42,1,42,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(43,1,43,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(44,1,44,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(45,1,45,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(46,1,46,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(47,1,47,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(48,1,48,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(49,1,49,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(50,1,50,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(51,1,51,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(52,1,52,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(53,1,53,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(54,1,54,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(55,1,55,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(56,1,56,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(57,1,57,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(58,1,58,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(59,1,59,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(60,1,60,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(61,1,61,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(62,1,62,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(63,1,63,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(64,1,64,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(65,1,65,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(66,1,66,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(67,1,67,'2021-03-07 15:47:03','2021-03-07 15:47:03'),(68,1,68,'2021-03-07 15:47:03','2021-03-07 15:47:03');
/*!40000 ALTER TABLE `affiliations_talent` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-07 22:49:24