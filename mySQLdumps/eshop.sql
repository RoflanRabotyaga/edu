-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: eshop
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.24.04.2

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
-- Table structure for table `catalog`
--

DROP TABLE IF EXISTS `catalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `pubyear` int NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalog`
--

LOCK TABLES `catalog` WRITE;
/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;
INSERT INTO `catalog` VALUES (1,'The Unabomber manifesto','Theodore Kaczynski',1995,15),(3,'The 48 Laws of Power','Robert Greene',1998,15),(4,'Maria','Ulas Samchuk',1933,20),(5,'Tiger Trappers','Ivan Bahrianyi',1944,20);
/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `pubyear` int NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `datetime` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (3,'The 48 Laws of Power','Robert Greene',1998,15,1,'66c5bf91bcd63',1724241086),(4,'The 48 Laws of Power','Robert Greene',1998,15,1,'66c5bf91bcd63',1724241179),(5,'The 48 Laws of Power','Robert Greene',1998,15,1,'66c5bf91bcd63',1724241262),(6,'The 48 Laws of Power','Robert Greene',1998,15,1,'66c5bf91bcd63',1724241274),(7,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66c5bf91bcd63',1724241274),(8,'The 48 Laws of Power','Robert Greene',1998,15,1,'66c5bf91bcd63',1724241379),(9,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66c5bf91bcd63',1724241379),(10,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66c5d5e54fbf6',1724242383),(11,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66c5d9d54c5f3',1724242420),(12,'The 48 Laws of Power','Robert Greene',1998,15,1,'66c5d9f596182',1724244303),(13,'The 48 Laws of Power','Robert Greene',1998,15,1,'66c5e151cf88a',1724245520),(14,'Maria','Ulas Samchuk',1933,20,1,'66c5e611bddf0',1724831451),(15,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66ced6ddf1c3e',1724834016),(16,'The 48 Laws of Power','Robert Greene',1998,15,1,'66ced6ddf1c3e',1724834016),(17,'Maria','Ulas Samchuk',1933,20,1,'66ced6ddf1c3e',1724834016),(18,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66ced6ddf1c3e',1724834016),(19,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cee4a3741a3',1724837391),(20,'The 48 Laws of Power','Robert Greene',1998,15,1,'66ceee10bffe5',1724837554),(21,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66ceef1df35c7',1724839246),(22,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cef595b9bc3',1724839374),(23,'Maria','Ulas Samchuk',1933,20,1,'66cef595b9bc3',1724839374),(24,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cef9ceb4128',1724840868),(25,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cf02f3b2685',1724845571),(26,'The 48 Laws of Power','Robert Greene',1998,15,1,'66cf02f3b2685',1724845571),(27,'Maria','Ulas Samchuk',1933,20,1,'66cf02f3b2685',1724845571),(28,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66cf02f3b2685',1724845571),(29,'Maria','Ulas Samchuk',1933,20,1,'66cf0f4728471',1724846286),(30,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cf10d1d499f',1724846425),(31,'The Unabomber manifesto','Theodore Kaczynski',1995,15,10,'66cf12a46812a',1724849322),(32,'The 48 Laws of Power','Robert Greene',1998,15,9,'66cf12a46812a',1724849322),(33,'Maria','Ulas Samchuk',1933,20,8,'66cf12a46812a',1724849322),(34,'Tiger Trappers','Ivan Bahrianyi',1944,20,7,'66cf12a46812a',1724849322),(35,'The 48 Laws of Power','Robert Greene',1998,15,2,'66cf1e2ad7d60',1724849800),(36,'Maria','Ulas Samchuk',1933,20,3,'66cf1e2ad7d60',1724849800),(37,'Tiger Trappers','Ivan Bahrianyi',1944,20,4,'66cf1e2ad7d60',1724849800),(38,'The Unabomber manifesto','Theodore Kaczynski',1995,15,2,'66cf1ed1f3e77',1724850003),(39,'The Unabomber manifesto','Theodore Kaczynski',1995,15,4,'66cf2047a7dba',1724853643),(40,'The Unabomber manifesto','Theodore Kaczynski',1995,15,6,'66cf2d8ca5ac1',1724853755),(41,'The 48 Laws of Power','Robert Greene',1998,15,5,'66cf2d8ca5ac1',1724853755),(42,'Maria','Ulas Samchuk',1933,20,4,'66cf2d8ca5ac1',1724853755),(43,'The Unabomber manifesto','Theodore Kaczynski',1995,15,4,'66cf2dfc63200',1724853919),(44,'The 48 Laws of Power','Robert Greene',1998,15,4,'66cf2dfc63200',1724853919),(45,'Maria','Ulas Samchuk',1933,20,4,'66cf2dfc63200',1724853919),(46,'Tiger Trappers','Ivan Bahrianyi',1944,20,4,'66cf2dfc63200',1724853919),(47,'The Unabomber manifesto','Theodore Kaczynski',1995,15,3,'66cf2ea0c6e7c',1724853943),(48,'The 48 Laws of Power','Robert Greene',1998,15,3,'66cf2ea0c6e7c',1724853943),(49,'Maria','Ulas Samchuk',1933,20,3,'66cf2ea0c6e7c',1724853943),(50,'The Unabomber manifesto','Theodore Kaczynski',1995,15,2,'66cf2eb8553c7',1724853997),(51,'The 48 Laws of Power','Robert Greene',1998,15,2,'66cf2eb8553c7',1724853997),(52,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cf2eee1e88b',1724854032),(53,'Tiger Trappers','Ivan Bahrianyi',1944,20,10,'66cf2f11eabbd',1724854081),(54,'The 48 Laws of Power','Robert Greene',1998,15,3,'66cf2f42ce473',1724854215),(55,'Maria','Ulas Samchuk',1933,20,3,'66cf2f42ce473',1724854215),(56,'Tiger Trappers','Ivan Bahrianyi',1944,20,3,'66cf2f42ce473',1724854215),(57,'The Unabomber manifesto','Theodore Kaczynski',1995,15,2,'66cf2fc88d094',1724854250),(58,'The 48 Laws of Power','Robert Greene',1998,15,2,'66cf2fc88d094',1724854250),(59,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cf2febb6e6c',1724854442),(60,'The 48 Laws of Power','Robert Greene',1998,15,1,'66cf2febb6e6c',1724854442),(61,'Maria','Ulas Samchuk',1933,20,1,'66cf2febb6e6c',1724854442),(62,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66cf2febb6e6c',1724854442),(63,'The Unabomber manifesto','Theodore Kaczynski',1995,15,2,'66cf30ab5ceae',1724854464),(64,'Maria','Ulas Samchuk',1933,20,2,'66cf30ab5ceae',1724854464),(65,'Tiger Trappers','Ivan Bahrianyi',1944,20,2,'66cf30ab5ceae',1724854464),(66,'The Unabomber manifesto','Theodore Kaczynski',1995,15,3,'66cf30c207137',1724854484),(67,'The 48 Laws of Power','Robert Greene',1998,15,3,'66cf30c207137',1724854484),(68,'The Unabomber manifesto','Theodore Kaczynski',1995,15,8,'66cf30d57f90e',1724854706),(69,'The 48 Laws of Power','Robert Greene',1998,15,8,'66cf30d57f90e',1724854706),(70,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66cf31b3eae4a',1724854720),(71,'The 48 Laws of Power','Robert Greene',1998,15,1,'66cf31b3eae4a',1724854720),(72,'Maria','Ulas Samchuk',1933,20,1,'66cf31b3eae4a',1724854720),(73,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66cf31b3eae4a',1724854720),(74,'The Unabomber manifesto','Theodore Kaczynski',1995,15,6,'66cf31c128e25',1724854844),(75,'The 48 Laws of Power','Robert Greene',1998,15,6,'66cf31c128e25',1724854844),(76,'Maria','Ulas Samchuk',1933,20,6,'66cf31c128e25',1724854844),(77,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66cf31c128e25',1724854844),(78,'The Unabomber manifesto','Theodore Kaczynski',1995,15,3,'66cf323d984a4',1724854894),(79,'The 48 Laws of Power','Robert Greene',1998,15,3,'66cf323d984a4',1724854894),(80,'Maria','Ulas Samchuk',1933,20,3,'66cf323d984a4',1724854894),(81,'The Unabomber manifesto','Theodore Kaczynski',1995,15,4,'66cf32700623e',1724855040),(82,'The 48 Laws of Power','Robert Greene',1998,15,4,'66cf32700623e',1724855040),(83,'Maria','Ulas Samchuk',1933,20,4,'66cf32700623e',1724855040),(84,'Tiger Trappers','Ivan Bahrianyi',1944,20,4,'66cf32700623e',1724855040),(85,'The Unabomber manifesto','Theodore Kaczynski',1995,15,5,'66cf330137b51',1724855210),(86,'The 48 Laws of Power','Robert Greene',1998,15,5,'66cf330137b51',1724855210),(87,'Maria','Ulas Samchuk',1933,20,5,'66cf330137b51',1724855210),(88,'Tiger Trappers','Ivan Bahrianyi',1944,20,5,'66cf330137b51',1724855210),(89,'The Unabomber manifesto','Theodore Kaczynski',1995,15,10,'66cf33ab9e4fb',1724855232),(90,'The Unabomber manifesto','Theodore Kaczynski',1995,15,4,'66cf33c15901e',1724996048),(91,'The 48 Laws of Power','Robert Greene',1998,15,4,'66cf33c15901e',1724996048),(92,'Maria','Ulas Samchuk',1933,20,3,'66d159d22c121',1724996093),(93,'Tiger Trappers','Ivan Bahrianyi',1944,20,3,'66d159d22c121',1724996093),(94,'The 48 Laws of Power','Robert Greene',1998,15,4,'66d159ffd1c2d',1724996127),(95,'Maria','Ulas Samchuk',1933,20,3,'66d159ffd1c2d',1724996127),(96,'The Unabomber manifesto','Theodore Kaczynski',1995,15,8,'66d15a21d49c8',1724996158),(97,'Tiger Trappers','Ivan Bahrianyi',1944,20,6,'66d15a40d7ac7',1724996189),(98,'The Unabomber manifesto','Theodore Kaczynski',1995,15,4,'66d15a6067fb5',1724996434),(99,'The 48 Laws of Power','Robert Greene',1998,15,4,'66d15a6067fb5',1724996434),(100,'Maria','Ulas Samchuk',1933,20,3,'66d15b53b6ff3',1724996462),(101,'Tiger Trappers','Ivan Bahrianyi',1944,20,3,'66d15b53b6ff3',1724996462),(102,'The 48 Laws of Power','Robert Greene',1998,15,4,'66d15b70469ec',1724996497),(103,'Maria','Ulas Samchuk',1933,20,3,'66d15b70469ec',1724996497),(104,'The Unabomber manifesto','Theodore Kaczynski',1995,15,8,'66d15b92c2aad',1724996523),(105,'Maria','Ulas Samchuk',1933,20,6,'66d15bace6c07',1724996555),(106,'Tiger Trappers','Ivan Bahrianyi',1944,20,13,'66d15bcf59cd2',1724996593),(107,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66d15bf33d8f6',1724996826),(108,'The 48 Laws of Power','Robert Greene',1998,15,1,'66d15bf33d8f6',1724996826),(109,'Maria','Ulas Samchuk',1933,20,1,'66d15bf33d8f6',1724996826),(110,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66d15bf33d8f6',1724996826),(111,'The Unabomber manifesto','Theodore Kaczynski',1995,15,7,'66d15cdc77d0b',1724996850),(112,'Tiger Trappers','Ivan Bahrianyi',1944,20,5,'66d15cdc77d0b',1724996850),(113,'The Unabomber manifesto','Theodore Kaczynski',1995,15,4,'66d15cf405fa8',1724997020),(114,'The 48 Laws of Power','Robert Greene',1998,15,4,'66d15cf405fa8',1724997020),(115,'The Unabomber manifesto','Theodore Kaczynski',1995,15,9,'66d15d9e265b7',1724997106),(116,'The 48 Laws of Power','Robert Greene',1998,15,9,'66d15d9e265b7',1724997106),(117,'Maria','Ulas Samchuk',1933,20,9,'66d15d9e265b7',1724997106),(118,'The 48 Laws of Power','Robert Greene',1998,15,1,'66d15df550ca6',1724997141),(119,'The Unabomber manifesto','Theodore Kaczynski',1995,15,6,'66d15e17f2948',1724999005),(120,'The Unabomber manifesto','Theodore Kaczynski',1995,15,3,'66d1655f06a5b',1724999040),(121,'The 48 Laws of Power','Robert Greene',1998,15,3,'66d1655f06a5b',1724999040),(122,'The Unabomber manifesto','Theodore Kaczynski',1995,15,2,'66d165828bcce',1724999073),(123,'The 48 Laws of Power','Robert Greene',1998,15,2,'66d165828bcce',1724999073),(124,'Maria','Ulas Samchuk',1933,20,2,'66d165828bcce',1724999073),(125,'The Unabomber manifesto','Theodore Kaczynski',1995,15,2,'66d165a2cb999',1724999111),(126,'The 48 Laws of Power','Robert Greene',1998,15,2,'66d165a2cb999',1724999111),(127,'Maria','Ulas Samchuk',1933,20,1,'66d165a2cb999',1724999111),(128,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66d165a2cb999',1724999111),(129,'The Unabomber manifesto','Theodore Kaczynski',1995,15,3,'66d165c947436',1724999145),(130,'The 48 Laws of Power','Robert Greene',1998,15,1,'66d165c947436',1724999145),(131,'Maria','Ulas Samchuk',1933,20,3,'66d165c947436',1724999145),(132,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66d165c947436',1724999145),(133,'Maria','Ulas Samchuk',1933,20,1,'66d165eb968f3',1724999167),(134,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66d165eb968f3',1724999167),(135,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66d166017f61a',1724999698),(136,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66d1681706523',1725000231),(137,'The 48 Laws of Power','Robert Greene',1998,15,1,'66d16a29ee7b2',1725000546),(138,'Tiger Trappers','Ivan Bahrianyi',1944,20,1,'66d16b66e9d4e',1725000734),(139,'Maria','Ulas Samchuk',1933,20,1,'66d16c1fcf987',1725000984),(140,'The 48 Laws of Power','Robert Greene',1998,15,1,'66d16d1a7fe84',1725001480),(141,'The Unabomber manifesto','Theodore Kaczynski',1995,15,1,'66d16f0d5a0b5',1725001677);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-04 20:23:13
