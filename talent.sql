-- MySQL dump 10.13  Distrib 5.5.58, for Linux (x86_64)
--
-- Host: localhost    Database: talent
-- ------------------------------------------------------
-- Server version	5.5.58

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2018_03_27_063106_create_recruits_table',2),('2018_03_27_064409_add_title_to_recruits_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruits`
--

DROP TABLE IF EXISTS `recruits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_period` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `welfare` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_01` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_02` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_03` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_04` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_05` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruits`
--

LOCK TABLES `recruits` WRITE;
/*!40000 ALTER TABLE `recruits` DISABLE KEYS */;
INSERT INTO `recruits` VALUES (3,'2018-03-29 08:34:22','2018-03-29 08:34:22','保育士','短時間','','','','','','','','','','','','');
/*!40000 ALTER TABLE `recruits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_id_unique` (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'momose','$2y$10$eVF4cwAv/nCTlpAH/TO2w.0k9KKWd1U.eUUxY6xttlArkg7/XTeM.','百瀬','','','lkxh6LBdS5lTZPZqLtDQ8cGdON5pNXQaQSxEIGCHFakTAJognAr2FgcVXUdD','2018-03-24 15:08:15','2018-03-24 15:13:37'),(2,'momose01','$2y$10$6zrQiyas0WORUBisVVJBeeC9dEE/aUoiSaIfVJX0buauSvAEInxSi','百瀬','','','2VBEBQ9tfBozCwwEBTDxQo263ElZqTODSVwFyBcy4uCWyBkAH799oytgKaGA','2018-03-24 15:14:19','2018-03-24 15:19:23'),(3,'momose02','$2y$10$qtkYoAv3QR/OqQlgKhAOWOpJq0UyUjbP16rp6lk.Myj.q8D7TbcHS','百瀬','','',NULL,'2018-03-24 15:21:23','2018-03-24 15:21:23'),(4,'momose03','$2y$10$Hc4WybezfT3rLkzD5ESfOetbza8JqLbWfIkt2.9ZnuANK0kYEp3YW','百瀬','','',NULL,'2018-03-25 08:37:48','2018-03-25 08:37:48'),(5,'momose04','$2y$10$jfJdvON22JFpRxFNjpCB2u925oMbtzIDyrj87OFOutlUAZ7Lelepe','百瀬　一郎','','',NULL,'2018-03-26 20:43:02','2018-03-26 20:43:02'),(6,'momose05','$2y$10$If9QorCRx3SHjCQpXntqpOTpT/MJ8wD7y.pp7d3QBmcJTURYxjKgW','百瀬','百瀬','',NULL,'2018-03-28 19:12:29','2018-03-28 19:12:29');
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

-- Dump completed on 2018-03-31  4:28:59
