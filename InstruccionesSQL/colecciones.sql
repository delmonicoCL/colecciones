-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: colecciones
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `albums` (
  `ID_Albums` int NOT NULL,
  `ID_Artista` int DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Descripcion` text,
  `Imagen` blob,
  PRIMARY KEY (`ID_Albums`),
  KEY `ID_Artista` (`ID_Artista`),
  CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`ID_Artista`) REFERENCES `artista` (`ID_Artista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (1,1,'Queen II','Queen II es el segundo álbum de estudio por la banda británica Queen. \nFue publicado el 8 de marzo de 1974 por EMI Records en el Reino Unido y por Elektra Records \nen los Estados Unidos',_binary 'https://acortar.link/4uXtDF'),(2,2,'Californication','Californication es el nombre del séptimo álbum de \nestudio de la banda estadounidense de rock alternativo y funk rock Red Hot \nChili Peppers.',_binary 'https://acortar.link/qn9zE3'),(3,3,'Evolution','Evolution es el sexto álbum de estudio del DJ alemán Paul van Dyk.​ \nFue publicado el 3 de abril de 2012 bajo el sello discográfico Vandit el cual \npertenece a Paul van Dyk.',_binary 'https://acortar.link/kaqIQT'),(4,1,'Bohemian Rhapsody','Es el álbum de la banda sonora de la película biográfica de Queen del mismo nombre . La banda sonora presenta muchas de las canciones de la banda y grabaciones inéditas, incluidas pistas de su legendario concierto en Live Aid en 1985.',_binary 'https://acortar.link/JCikpw');
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artista`
--

DROP TABLE IF EXISTS `artista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artista` (
  `ID_Artista` int NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Artista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artista`
--

LOCK TABLES `artista` WRITE;
/*!40000 ALTER TABLE `artista` DISABLE KEYS */;
INSERT INTO `artista` VALUES (1,'Queen'),(2,'Red HOT'),(3,'Paul van Dyk');
/*!40000 ALTER TABLE `artista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `canciones`
--

DROP TABLE IF EXISTS `canciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `canciones` (
  `ID_Canciones` int NOT NULL,
  `ID_Albums` int DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Duracion` time DEFAULT NULL,
  PRIMARY KEY (`ID_Canciones`),
  KEY `ID_Albums` (`ID_Albums`),
  CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`ID_Albums`) REFERENCES `albums` (`ID_Albums`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canciones`
--

LOCK TABLES `canciones` WRITE;
/*!40000 ALTER TABLE `canciones` DISABLE KEYS */;
INSERT INTO `canciones` VALUES (1,1,'NeverMore','04:30:00'),(2,2,'Around the World','04:02:00'),(3,3,'LOVE','06:10:00');
/*!40000 ALTER TABLE `canciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estilos`
--

DROP TABLE IF EXISTS `estilos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estilos` (
  `ID_Estilos` int NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Origen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Estilos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estilos`
--

LOCK TABLES `estilos` WRITE;
/*!40000 ALTER TABLE `estilos` DISABLE KEYS */;
INSERT INTO `estilos` VALUES (1,'Pop','Usa'),(2,'Rock','UK'),(3,'Electronico','Alemania');
/*!40000 ALTER TABLE `estilos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estilos_canciones`
--

DROP TABLE IF EXISTS `estilos_canciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estilos_canciones` (
  `ID_Canciones` int NOT NULL,
  `ID_Estilos` int NOT NULL,
  PRIMARY KEY (`ID_Canciones`,`ID_Estilos`),
  KEY `ID_Estilos` (`ID_Estilos`),
  CONSTRAINT `estilos_canciones_ibfk_1` FOREIGN KEY (`ID_Canciones`) REFERENCES `canciones` (`ID_Canciones`),
  CONSTRAINT `estilos_canciones_ibfk_2` FOREIGN KEY (`ID_Estilos`) REFERENCES `estilos` (`ID_Estilos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estilos_canciones`
--

LOCK TABLES `estilos_canciones` WRITE;
/*!40000 ALTER TABLE `estilos_canciones` DISABLE KEYS */;
INSERT INTO `estilos_canciones` VALUES (1,2),(2,2),(3,3);
/*!40000 ALTER TABLE `estilos_canciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-27 19:51:02
