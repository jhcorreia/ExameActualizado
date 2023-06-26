CREATE DATABASE  IF NOT EXISTS `agrovendas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `agrovendas`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: agrovendas
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `kg` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `imagem` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `preco` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (2,'Abacate','1','','Abacate.png',200),(3,'Abobura','1','','Abobura.png',147),(4,'Alface','1','','Alface.png',147),(5,'Alho','1','','Alho.png',147),(6,'Ananas','1','','Ananas.png',147),(7,'Aveia','1','','Aveia.png',323),(8,'Banana','1','','Banana.png',99),(9,'Azeitonas','1','','Azeitona2.png',152),(10,'Batata Doce','1','','Batata Doce.png',136),(11,'Batata Rena','1','','Batata Rena.png',432),(12,'Cebola','1','','Cebola.png',169),(13,'Cenoura','1','','Cenoura.png',139),(14,'Cogumelo','1','','Cogumelos.png',347),(15,'Feijão Castanho','1','','Feijao.png',650),(16,'Repolho','1','','Repolho.png',122),(17,'Goiaba','1','','Goiaba.png',100),(18,'Manga','1','','Manga.png',210),(19,'Maracúja','1','','Maracuja.png',420),(20,'Laranja','1','','Laranja.png',135),(21,'Cereja','1','','Cereja.png',110),(22,'Limão','1','','Limao.png',96),(23,'Mandioca','1','','Mandioca.png',523),(24,'Melância','1','','Melancia.png',208),(25,'Pera','1','','Pera.png',109),(26,'Melão','1','','Melao.png',225),(27,'Morango','1','','Morango.png',371),(28,'Milho','1','','Milho.png',289),(29,'Pipino','1','','Pipino.png',354),(30,'Gingibre','1','','Gingibre.png',80),(31,'Pimenta','1','','Pimenta.png',178),(32,'Tomate','1','','Tomate.png',250),(33,'Trigo','1','','Trigo.png',750),(34,'Maça','1','','Maca.png',120),(35,'Quiabo','1','','Quiabo.png',69),(36,'Uva','1','','Uva1.png',373),(37,'Pêssego','1','','Pessego.png',485),(38,'Kiwi','1','','Kiwi.png',238),(39,'Pitaya','1','','Pitaya.png',428),(40,'Tamarindo','1','','Tamarindo.png',147);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `senha` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sexo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `endereco` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Jair Fernandes','jairfernandes@gmail.com','111','200268','masculino','Projecto-Nova-Vida,Rua 50'),(2,'Jose Correia','josecorreia@gmail.com','123','200654','masculino','Cassenda-Rua_12'),(5,'Hernandez Zua','hernandezzua@gmail.com','123','194322','masculino','Kilamba_J_23'),(9,'Prof.Samuel','profsamuel@gmail.com','000','912233','masculino','Rangel-Prenda');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-26  4:27:34
