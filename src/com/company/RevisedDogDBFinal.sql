CREATE DATABASE  IF NOT EXISTS `dogdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dogdb`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: dogdb
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `dog_breeds`
--

DROP TABLE IF EXISTS `dog_breeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dog_breeds` (
  `DogID` int NOT NULL,
  `Dog_Breed` varchar(45) NOT NULL,
  `Shedding` int NOT NULL,
  `Active` int NOT NULL,
  `Size` int NOT NULL,
  `Intelligence` int NOT NULL,
  `Access to Space` int NOT NULL,
  `Totelrance to Kids` int NOT NULL,
  PRIMARY KEY (`DogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dog_breeds`
--

LOCK TABLES `dog_breeds` WRITE;
/*!40000 ALTER TABLE `dog_breeds` DISABLE KEYS */;
INSERT INTO `dog_breeds` VALUES (1,'Bulldog',3,2,3,2,2,5),(2,'Labrador Retriever',4,4,4,5,2,5),(3,'German Shepherd',4,4,4,5,2,4),(4,'Poodle',1,5,4,5,3,5),(5,'Golden Retriever',3,4,4,5,3,5),(6,'Chihuahua',2,3,1,1,2,3),(7,'Boxer',2,3,4,3,5,5),(8,'Pug',5,2,3,1,1,5),(9,'Husky',3,4,4,3,2,4),(10,'Great Dane',4,3,5,3,5,5),(11,'Beagle',3,3,3,3,2,5),(12,'Boston Terrier',1,5,2,3,2,5),(13,'French Bulldog',1,3,1,2,2,5),(14,'Basset Hound',3,2,4,3,2,5),(15,'Pomeranian',4,4,1,4,3,3),(16,'Chow Chow',5,2,3,3,3,4),(17,'Doberman',3,5,4,5,2,4),(18,'Foxhound',2,5,3,3,4,5),(19,'Cocker Spaniel',1,5,3,4,2,4),(20,'Yorkshire Terrier',2,3,1,4,2,3);
/*!40000 ALTER TABLE `dog_breeds` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-12 20:57:41
