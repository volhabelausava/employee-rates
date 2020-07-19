-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: employee-rates
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'John'),(2,'Jane'),(3,'David'),(4,'Kate'),(5,'Robert');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_reports`
--

DROP TABLE IF EXISTS `time_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `time_reports` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `hours` float NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `time_reports_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_reports`
--

LOCK TABLES `time_reports` WRITE;
/*!40000 ALTER TABLE `time_reports` DISABLE KEYS */;
INSERT INTO `time_reports` VALUES (1,1,2.54,'7/1/2020'),(2,2,8.25,'7/1/2020'),(3,3,5.32,'7/1/2020'),(4,4,2.8,'7/1/2020'),(5,5,6.23,'7/1/2020'),(6,3,8.1,'7/2/2020'),(7,4,6,'7/2/2020'),(8,1,6.87,'7/3/2020'),(9,2,5.3,'7/3/2020'),(10,3,4.62,'7/3/2020'),(11,5,6.25,'7/3/2020'),(12,4,7.5,'7/4/2020'),(13,5,6.43,'7/4/2020'),(14,1,8,'7/6/2020'),(15,2,1.45,'7/6/2020'),(16,3,5.9,'7/6/2020'),(17,4,2.8,'7/6/2020'),(18,5,4.9,'7/6/2020'),(19,1,6.3,'7/7/2020'),(20,4,6.1,'7/7/2020'),(21,2,8.6,'7/8/2020'),(22,3,7.6,'7/8/2020'),(23,4,6.32,'7/8/2020'),(24,2,4.58,'7/9/2020'),(25,3,7.62,'7/9/2020'),(26,1,6.45,'7/11/2020'),(27,2,3.45,'7/11/2020'),(28,3,8.65,'7/11/2020'),(29,4,10,'7/11/2020'),(30,5,3.25,'7/11/2020');
/*!40000 ALTER TABLE `time_reports` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-19 19:40:47
