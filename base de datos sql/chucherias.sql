-- MySQL dump 10.17  Distrib 10.3.16-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: chucherias
-- ------------------------------------------------------
-- Server version	10.3.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2019_11_16_153701_add_avatar_column_to_users_table',1),(4,'2019_11_15_132632_add_foto_column_to_productos_table',2),(5,'2019_11_15_135448_add_rol_column_to_users_table',2),(6,'2019_11_29_122730_add_avatar_column_to_user_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria_id` (`categoria_id`),
  CONSTRAINT `fk_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (6,'Bikini',600.00,'bikini a cuerpo artesanal',NULL,'gWl6uaapX9mSuMQYvGJuQTXcTiE1C2gq9cbHKPCF.jpeg'),(8,'Cuadernos',500.00,'Cuadernos con forrado de tela',NULL,'wS8Yz12GVL8LO71m4auHtuWC3sYFAlDE7LyO3DuG.jpeg'),(9,'Macrame',450.00,'Tejido en acrame',NULL,'iKyasc4K6f2EslB8Qi91ViGFgas2LN5XVTVgRYMu.jpeg'),(10,'Atrapasueños',300.00,'Atrapasueños en lana',NULL,'2OZVtEqt7teFF6KBVRKYhmdTNhsiOe9lPwpFNrR0.jpeg'),(11,'Macetas',250.00,'Macetas Artesanales de vidrio con arena.',NULL,'AmXA9Rdi0JmIDooJQbvlnriQbIZngJ75B883OTWY.jpeg'),(12,'Amigurumi',500.00,'Unicornio tejido a mano',NULL,'CvSueXfqdf4CLdGp6eBbhZePSJYBMvESGsL52gIm.jpeg'),(14,'Macetitas',450.00,'Macetitas lindas',NULL,'s5Ka4DFbet2u6SoF9jaOhWdMb4EiWljYBrfP9FA5.jpeg'),(15,'Velas Aromaticas',200.00,'Velas artesanales con aromas',NULL,'l6Ofh3odv7wzfaiLmyKpdVxzWzBn50FjCDEUcN7v.jpeg'),(16,'Libro',500.00,'Libro didactico hecho a mano',NULL,'GDjLKEEwrDA3SZBgjZ6lwtjdVAPflZD7oefCK4De.jpeg'),(17,'Pecebre',800.00,'pecebre de lana',NULL,'iv45pKQc48O0I0h7zDUpAhoGndkj8RLRIzYpNLgo.jpeg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` tinyint(4) NOT NULL DEFAULT 1,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'seba','algo','seba@algo.com',NULL,'$2y$10$LR1do2o7pRN7LRBcHl25w.exmZHcaRwudWNNNPWhu7MBSjbh3XUOm',NULL,'2019-11-16 18:50:44','2019-11-16 23:04:12',1,'default.jpg'),(2,'Sebastian','Moccagatta','seba@moccagatta.com',NULL,'$2y$10$7Orz26iYuoWbbJvC7qE6W.JdDY9KlE4vJs3L9hSekxmRBtXoKTbn2',NULL,'2019-11-16 21:57:36','2019-11-16 21:57:36',9,'default.jpg'),(3,'sebastian','dsdsd','a@b.com',NULL,'$2y$10$wpH2HYG0XrQ/xtJWYysS7e0ZZ3xJFD/PD/uex8zciPfQ/zyiadUWe',NULL,'2019-11-26 18:02:12','2019-11-26 18:02:12',9,'default.jpg'),(4,'Sunii','Bachi','solciibachi@gmail.com',NULL,'$2y$10$jr/J3K/5/ySlM3wy09CyLe4CsdMIIbCkkA1/qHukRGThoTMA8dJIW','6SqiCZkmX0b4Vt7TiOMfrAE0YqHfSxZmIWGhXkXzpALWITjD0sRkYOeS6ZNm','2019-11-29 22:10:53','2019-11-29 22:10:53',9,'default.jpg'),(5,'Brian','Rodriguez','Brianasd@email.com',NULL,'$2y$10$1UpBl0KCCMkgkLoAeW.cNOpLQrLjIHWBfVq7F7GoU9QCAI7YZPX/m',NULL,'2019-12-02 23:26:48','2019-12-02 23:26:48',9,'default.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_productos`
--

DROP TABLE IF EXISTS `usuarios_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pruductos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productos_id` (`pruductos_id`),
  CONSTRAINT `fk_productos_id` FOREIGN KEY (`pruductos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_productos`
--

LOCK TABLES `usuarios_productos` WRITE;
/*!40000 ALTER TABLE `usuarios_productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios_productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-10  8:44:11
