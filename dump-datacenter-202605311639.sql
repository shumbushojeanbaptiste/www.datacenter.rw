-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: datacenter
-- ------------------------------------------------------
-- Server version	9.6.0

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '33041d67-211a-11f1-b829-f43909e4d569:1-3117';

--
-- Table structure for table `access_logs`
--

DROP TABLE IF EXISTS `access_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `access_logs` (
  `log_id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `session_id` char(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_type` enum('LOGIN','LOGOUT','PAYMENT','ACCESS','FAILED_LOGIN','OTHER') COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `action` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_table` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `record_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_logs`
--

LOCK TABLES `access_logs` WRITE;
/*!40000 ALTER TABLE `access_logs` DISABLE KEYS */;
INSERT INTO `access_logs` VALUES (1,3,NULL,'','User deleted: finance@itec.com',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','3','2025-12-19 12:57:02'),(2,7,NULL,'','User deleted: nishadrien@gmail.com',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','7','2025-12-19 12:57:02'),(3,11,NULL,'','User deleted: finance@itec.rw',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','11','2025-12-19 12:57:02'),(4,12,NULL,'','User deleted: info1@itec.rw',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','12','2025-12-19 12:57:02'),(5,13,NULL,'','User deleted: info@itec.rw',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','13','2025-12-19 12:57:02'),(6,14,NULL,'','User deleted: usanasebabrah35@gmail.com',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','14','2025-12-19 12:57:02'),(7,15,NULL,'','User deleted: twagiramunguserge@gmail.com',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','15','2025-12-19 12:57:02'),(8,16,NULL,'','User deleted: belyse2ishimwe@gmail.com',NULL,NULL,'2025-12-19 12:57:02','DELETE','tbl_users','16','2025-12-19 12:57:02'),(9,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:00:57','JOURNAL_ENTRY_CREATED','tbl_journal_entries','1','2026-01-06 15:00:57'),(10,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:02:27','JOURNAL_ENTRY_CREATED','tbl_journal_entries','2','2026-01-06 15:02:27'),(11,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:02:35','JOURNAL_ENTRY_CREATED','tbl_journal_entries','3','2026-01-06 15:02:35'),(12,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:08:06','JOURNAL_ENTRY_CREATED','tbl_journal_entries','4','2026-01-06 15:08:06'),(13,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:08:17','JOURNAL_ENTRY_CREATED','tbl_journal_entries','5','2026-01-06 15:08:17'),(14,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:08:29','JOURNAL_ENTRY_CREATED','tbl_journal_entries','6','2026-01-06 15:08:29'),(15,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:08:58','JOURNAL_ENTRY_CREATED','tbl_journal_entries','7','2026-01-06 15:08:58'),(16,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:09:05','JOURNAL_ENTRY_CREATED','tbl_journal_entries','8','2026-01-06 15:09:05'),(17,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:09:51','JOURNAL_ENTRY_CREATED','tbl_journal_entries','9','2026-01-06 15:09:51'),(18,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 15:10:06','JOURNAL_ENTRY_CREATED','tbl_journal_entries','10','2026-01-06 15:10:06'),(19,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:21:08','JOURNAL_ENTRY_CREATED','tbl_journal_entries','1','2026-01-06 16:21:08'),(20,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:23:14','JOURNAL_ENTRY_CREATED','tbl_journal_entries','2','2026-01-06 16:23:14'),(21,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:23:20','JOURNAL_ENTRY_CREATED','tbl_journal_entries','3','2026-01-06 16:23:20'),(22,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:23:27','JOURNAL_ENTRY_CREATED','tbl_journal_entries','4','2026-01-06 16:23:27'),(23,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:23:40','JOURNAL_ENTRY_CREATED','tbl_journal_entries','5','2026-01-06 16:23:40'),(24,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:23:49','JOURNAL_ENTRY_CREATED','tbl_journal_entries','6','2026-01-06 16:23:49'),(25,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:25:00','JOURNAL_ENTRY_CREATED','tbl_journal_entries','7','2026-01-06 16:25:00'),(26,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:30:00','JOURNAL_ENTRY_CREATED','tbl_journal_entries','8','2026-01-06 16:30:00'),(27,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:30:17','JOURNAL_ENTRY_CREATED','tbl_journal_entries','9','2026-01-06 16:30:17'),(28,11,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-06 16:30:33','JOURNAL_ENTRY_CREATED','tbl_journal_entries','10','2026-01-06 16:30:33'),(29,1,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-07 06:41:48','JOURNAL_ENTRY_CREATED','tbl_journal_entries','11','2026-01-07 06:41:48'),(30,1,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-07 06:42:04','JOURNAL_ENTRY_CREATED','tbl_journal_entries','12','2026-01-07 06:42:04'),(31,1,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-07 06:42:10','JOURNAL_ENTRY_CREATED','tbl_journal_entries','13','2026-01-07 06:42:10'),(32,1,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-07 06:42:38','JOURNAL_ENTRY_CREATED','tbl_journal_entries','14','2026-01-07 06:42:38'),(33,1,NULL,'LOGIN',NULL,NULL,NULL,'2026-01-07 07:55:55','JOURNAL_ENTRY_CREATED','tbl_journal_entries','15','2026-01-07 07:55:55'),(34,1,NULL,'','email changed: dev@itec.rw → dev@datacenter.rw',NULL,NULL,'2026-04-02 09:19:09','UPDATE','tbl_users','1','2026-04-02 09:19:09');
/*!40000 ALTER TABLE `access_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sensordata`
--

DROP TABLE IF EXISTS `sensordata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sensordata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `temperature` float DEFAULT NULL,
  `humidity` float DEFAULT NULL,
  `waterpresence` int DEFAULT NULL,
  `risklevel` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sensordata`
--

LOCK TABLES `sensordata` WRITE;
/*!40000 ALTER TABLE `sensordata` DISABLE KEYS */;
INSERT INTO `sensordata` VALUES (1,'2026-03-19 08:01:28',17.8,52,0,'MEDIUM'),(2,'2026-03-19 08:01:33',17.8,59,0,'MEDIUM'),(3,'2026-03-19 08:01:39',18.2,63,0,'HIGH'),(4,'2026-03-19 08:02:05',18.2,62,0,'HIGH'),(5,'2026-03-19 08:02:25',18.2,58,0,'MEDIUM'),(6,'2026-03-19 08:03:01',18.2,54,0,'MEDIUM'),(7,'2026-03-19 08:04:21',18.2,50,0,'MEDIUM'),(8,'2026-03-19 08:04:47',18.2,55,0,'MEDIUM'),(9,'2026-03-19 08:05:17',18.2,51,0,'MEDIUM'),(10,'2026-03-19 08:11:29',17.6,47,0,'MEDIUM'),(11,'2026-03-19 08:15:00',18.2,54,1,'HIGH'),(12,'2026-03-19 08:15:05',18.2,54,0,'MEDIUM'),(13,'2026-03-19 08:16:11',18.2,50,0,'MEDIUM'),(14,'2026-03-19 08:27:09',18.2,54,0,'MEDIUM'),(15,'2026-03-19 08:29:10',18.2,50,0,'MEDIUM'),(16,'2026-03-19 08:45:21',17.4,50,0,'MEDIUM'),(17,'2026-03-19 08:46:46',18.2,54,0,'MEDIUM'),(18,'2026-03-19 08:48:57',17.8,50,0,'MEDIUM'),(19,'2026-03-19 08:53:39',18.2,54,0,'MEDIUM'),(20,'2026-03-19 08:55:20',17.8,50,0,'MEDIUM'),(21,'2026-03-19 08:59:36',17.8,54,0,'MEDIUM'),(22,'2026-03-19 09:01:57',17.8,50,0,'MEDIUM'),(23,'2026-03-19 09:06:13',17.8,54,0,'MEDIUM'),(24,'2026-03-19 09:28:05',17.8,50,0,'MEDIUM'),(25,'2026-03-19 09:32:32',18.2,54,0,'MEDIUM'),(26,'2026-03-19 09:34:33',18.2,50,0,'MEDIUM'),(27,'2026-03-19 09:39:24',18.2,54,0,'MEDIUM'),(28,'2026-03-19 09:40:45',18.2,50,0,'MEDIUM'),(29,'2026-03-19 09:45:21',17.9,54,0,'MEDIUM'),(30,'2026-03-19 10:11:04',17.8,54,0,'MEDIUM'),(31,'2026-03-19 10:14:11',17.8,50,0,'MEDIUM'),(32,'2026-03-19 10:18:12',18.2,54,0,'MEDIUM'),(33,'2026-03-19 10:20:33',17.8,50,0,'MEDIUM'),(34,'2026-03-19 10:24:54',17.8,54,0,'MEDIUM'),(35,'2026-03-19 10:27:05',17.8,50,0,'MEDIUM'),(36,'2026-03-19 10:32:07',18.2,54,0,'MEDIUM'),(37,'2026-03-19 10:33:33',18.2,50,0,'MEDIUM'),(38,'2026-03-19 10:38:09',18.2,54,0,'MEDIUM'),(39,'2026-03-19 10:40:00',18.2,50,0,'MEDIUM'),(40,'2026-03-19 10:44:52',18.2,54,0,'MEDIUM'),(41,'2026-03-19 10:46:43',18.2,50,0,'MEDIUM'),(42,'2026-03-19 10:51:49',18.2,54,0,'MEDIUM'),(43,'2026-03-19 11:39:46',17.8,50,1,'HIGH'),(44,'2026-03-19 11:40:06',17.8,49,0,'MEDIUM'),(45,'2026-03-19 11:40:17',17.8,49,1,'HIGH'),(46,'2026-03-19 11:40:22',17.8,49,0,'MEDIUM'),(47,'2026-03-19 11:41:07',17.4,47,1,'HIGH'),(48,'2026-03-19 11:41:17',17.4,47,0,'MEDIUM'),(49,'2026-03-19 11:41:27',17.4,48,1,'HIGH'),(50,'2026-03-19 11:41:32',17.4,48,0,'MEDIUM'),(51,'2026-03-19 11:43:33',17.8,52,0,'MEDIUM'),(52,'2026-03-19 11:43:53',17.8,53,1,'HIGH'),(53,'2026-03-19 11:44:03',17.8,53,0,'MEDIUM'),(54,'2026-03-19 11:44:19',17.8,54,1,'HIGH'),(55,'2026-03-19 11:44:29',17.8,54,0,'MEDIUM'),(56,'2026-03-19 11:45:59',17.8,50,0,'MEDIUM'),(57,'2026-03-19 11:51:11',17.8,54,0,'MEDIUM'),(58,'2026-03-19 11:52:32',17.8,50,0,'MEDIUM'),(59,'2026-03-19 11:57:33',17.8,54,0,'MEDIUM'),(60,'2026-03-19 11:59:09',17.8,50,0,'MEDIUM'),(61,'2026-03-19 12:09:12',17.4,50,0,'MEDIUM'),(62,'2026-03-19 12:19:15',17.8,49,0,'MEDIUM'),(63,'2026-03-19 12:23:57',17.8,53,0,'MEDIUM'),(64,'2026-03-19 12:25:53',17.8,49,0,'MEDIUM'),(65,'2026-03-19 12:30:39',17.8,53,0,'MEDIUM'),(66,'2026-03-19 12:32:35',17.8,49,0,'MEDIUM'),(67,'2026-03-19 12:37:22',17.8,53,0,'MEDIUM'),(68,'2026-03-19 12:39:17',17.8,49,0,'MEDIUM'),(69,'2026-03-19 12:49:21',17.4,50,0,'MEDIUM'),(70,'2026-03-19 12:53:47',17.4,46,0,'MEDIUM'),(71,'2026-03-19 12:55:33',17.4,50,0,'MEDIUM'),(72,'2026-03-19 13:05:36',17.8,50,0,'MEDIUM'),(73,'2026-03-19 13:55:46',17.8,51,0,'MEDIUM'),(74,'2026-03-19 13:56:57',17.8,53,0,'MEDIUM'),(75,'2026-03-19 13:57:47',17.8,51,0,'MEDIUM'),(76,'2026-03-19 13:58:43',17.8,49,0,'MEDIUM'),(77,'2026-03-19 13:59:38',17.8,49,0,'MEDIUM'),(78,'2026-03-19 13:59:53',17.4,47,0,'MEDIUM'),(79,'2026-03-19 14:01:04',17.4,49,0,'MEDIUM'),(80,'2026-03-19 14:01:31',17.4,50,0,'MEDIUM'),(81,'2026-03-19 14:02:22',17.8,52,0,'MEDIUM'),(82,'2026-03-19 14:04:27',17.8,51,0,'MEDIUM'),(83,'2026-03-19 14:05:18',17.8,49,0,'MEDIUM'),(84,'2026-03-19 14:06:23',17.6,47,0,'MEDIUM'),(85,'2026-03-19 14:07:49',17.4,49,0,'MEDIUM'),(86,'2026-03-19 14:08:49',17.8,51,0,'MEDIUM'),(87,'2026-03-19 14:09:40',17.8,53,0,'MEDIUM'),(88,'2026-03-19 14:11:05',18.2,51,0,'MEDIUM'),(89,'2026-03-19 14:12:06',17.8,49,0,'MEDIUM'),(90,'2026-03-19 14:13:11',17.8,47,0,'MEDIUM'),(91,'2026-03-19 14:14:27',17.4,49,0,'MEDIUM'),(92,'2026-03-19 14:15:27',17.8,51,0,'MEDIUM'),(93,'2026-03-19 14:16:07',17.8,53,0,'MEDIUM'),(94,'2026-03-19 14:17:38',18.2,51,0,'MEDIUM'),(95,'2026-03-19 14:18:38',17.8,49,0,'MEDIUM'),(96,'2026-03-19 14:19:54',17.8,47,0,'MEDIUM'),(97,'2026-03-19 14:21:04',17.8,49,0,'MEDIUM'),(98,'2026-03-19 14:27:16',17.8,51,0,'MEDIUM'),(99,'2026-03-19 14:27:16',17.8,51,0,'MEDIUM'),(100,'2026-03-19 14:27:16',17.8,51,0,'MEDIUM'),(101,'2026-03-19 14:27:18',17.4,47,0,'MEDIUM'),(102,'2026-03-19 14:27:58',17.4,49,0,'MEDIUM'),(103,'2026-03-19 14:28:13',17.8,51,0,'MEDIUM'),(104,'2026-03-23 09:12:30',17.4,56,0,'MEDIUM'),(105,'2026-03-23 09:13:46',17.4,54,0,'MEDIUM'),(106,'2026-03-23 09:15:24',17.4,51,0,'MEDIUM'),(107,'2026-03-23 09:16:35',17.4,53,0,'MEDIUM'),(108,'2026-03-23 09:17:41',17.4,55,0,'MEDIUM'),(109,'2026-03-23 09:19:48',17.8,55,0,'MEDIUM'),(110,'2026-03-23 09:20:18',17.4,53,0,'MEDIUM'),(111,'2026-03-23 09:21:04',17.4,51,0,'MEDIUM'),(112,'2026-03-23 09:23:10',17.4,52,0,'MEDIUM'),(113,'2026-03-23 09:24:06',17.4,54,0,'MEDIUM'),(114,'2026-03-23 09:25:16',17.8,56,0,'MEDIUM'),(115,'2026-03-23 09:26:42',17.8,54,0,'MEDIUM'),(116,'2026-03-23 09:27:32',17.4,52,0,'MEDIUM'),(117,'2026-03-23 09:28:18',17.4,50,0,'MEDIUM'),(118,'2026-03-23 10:06:56',17.8,53,0,'MEDIUM'),(119,'2026-03-23 10:07:36',17.4,51,0,'MEDIUM'),(120,'2026-03-23 10:08:42',17.4,49,0,'MEDIUM'),(121,'2026-03-23 10:09:57',17.4,51,0,'MEDIUM'),(122,'2026-03-23 10:10:33',17.4,53,0,'MEDIUM'),(123,'2026-03-23 10:11:18',17.4,55,0,'MEDIUM'),(124,'2026-03-23 10:13:24',17.8,54,0,'MEDIUM'),(125,'2026-03-23 10:13:54',17.8,52,0,'MEDIUM'),(126,'2026-03-23 10:14:35',17.4,50,0,'MEDIUM'),(127,'2026-03-23 10:16:41',17.4,51,0,'MEDIUM'),(128,'2026-03-23 10:17:16',17.4,53,0,'MEDIUM'),(129,'2026-03-23 10:18:11',17.8,55,0,'MEDIUM'),(130,'2026-03-23 10:18:11',17.8,55,0,'LOW'),(131,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(132,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(133,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(134,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(135,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(136,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(137,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(138,'2026-03-23 10:18:11',17.8,58,0,'LOW'),(139,'2026-03-23 10:18:11',17.8,58,0,'LOW');
/*!40000 ALTER TABLE `sensordata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_admins`
--

DROP TABLE IF EXISTS `tbl_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_admins` (
  `adm_id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `company_id` int NOT NULL DEFAULT '0',
  `profile_pic` varchar(255) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adm_status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admins`
--

LOCK TABLES `tbl_admins` WRITE;
/*!40000 ALTER TABLE `tbl_admins` DISABLE KEYS */;
INSERT INTO `tbl_admins` VALUES (37,'Jean Baptiste','SHUMBUSHO','shumbushojean1@gmail.com','44687','muhima',9,NULL,'2025-12-21 22:00:00',1);
/*!40000 ALTER TABLE `tbl_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_company`
--

DROP TABLE IF EXISTS `tbl_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_company` (
  `cpny_ID` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(130) DEFAULT NULL,
  `short_name` varchar(11) DEFAULT NULL,
  `msg_char` varchar(11) DEFAULT NULL,
  `side` varchar(30) DEFAULT NULL,
  `space` int DEFAULT '0',
  `acc` varchar(30) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`cpny_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_company`
--

LOCK TABLES `tbl_company` WRITE;
/*!40000 ALTER TABLE `tbl_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_roles` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_roles`
--

LOCK TABLES `tbl_roles` WRITE;
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
INSERT INTO `tbl_roles` VALUES (1,'admin','Full access'),(2,'finance','Manage Income and expenses');
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_smsapi`
--

DROP TABLE IF EXISTS `tbl_smsapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_smsapi` (
  `api_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pwd` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`api_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_smsapi`
--

LOCK TABLES `tbl_smsapi` WRITE;
/*!40000 ALTER TABLE `tbl_smsapi` DISABLE KEYS */;
INSERT INTO `tbl_smsapi` VALUES (1,'twagiramungus','M00dle!!@@');
/*!40000 ALTER TABLE `tbl_smsapi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_roles`
--

DROP TABLE IF EXISTS `tbl_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_user_roles` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `role` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_roles`
--

LOCK TABLES `tbl_user_roles` WRITE;
/*!40000 ALTER TABLE `tbl_user_roles` DISABLE KEYS */;
INSERT INTO `tbl_user_roles` VALUES (1,'Admin'),(2,'Evaluator');
/*!40000 ALTER TABLE `tbl_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_users` (
  `acc_id` int NOT NULL AUTO_INCREMENT,
  `user_code` varchar(20) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `security_key` varchar(500) DEFAULT NULL,
  `role_id` varchar(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `last_logged_in` datetime DEFAULT NULL,
  `remember_token` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,'250001','Jean Baptiste',' SHUMBUSHO',NULL,'+250788644687','dev@datacenter.rw','$argon2i$v=19$m=65536,t=4,p=1$ZHBjT3E1YlU0d2JWV2tzbA$MfSCemOaCDfb3LYl/GSJYY0XwFBVJgAyIVIHewmqXXw','1',1,NULL,'38331'),(2,'250002','Jean 4',' Baptiste ',NULL,'+250788644687','jean@itec.com','$argon2i$v=19$m=65536,t=4,p=1$clRLTExBR2taWGRRcUNEWQ$+lJ+rrn07hPUpeZe04CtGMucmR5BSh8tGKyTzyCCIzA','1',1,NULL,NULL);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_user_update` AFTER UPDATE ON `tbl_users` FOR EACH ROW BEGIN
    
    IF (OLD.last_name <> NEW.last_name) THEN
        INSERT INTO access_logs (
            user_id, 
            session_id, 
            event_type, 
            event_description, 
            ip_address, 
            user_agent, 
            action, 
            target_table, 
            record_id
        )
        VALUES (
            NEW.acc_id, 
            NULL, 
            'UPDATE', 
            CONCAT('last_name changed: ', OLD.last_name, ' → ', NEW.last_name), 
            NULL, 
            NULL, 
            'UPDATE', 
            'tbl_users', 
            NEW.acc_id
        );
    END IF;

    
    IF (OLD.first_name <> NEW.first_name) THEN
        INSERT INTO access_logs (
            user_id, 
            session_id, 
            event_type, 
            event_description, 
            ip_address, 
            user_agent, 
            action, 
            target_table, 
            record_id
        )
        VALUES (
            NEW.acc_id, 
            NULL, 
            'UPDATE', 
            CONCAT('first_name changed: ', OLD.first_name, ' → ', NEW.first_name), 
            NULL, 
            NULL, 
            'UPDATE', 
            'tbl_users', 
            NEW.acc_id
        );
    END IF;

    
    IF (OLD.email <> NEW.email) THEN
        INSERT INTO access_logs (
            user_id, 
            session_id, 
            event_type, 
            event_description, 
            ip_address, 
            user_agent, 
            action, 
            target_table, 
            record_id
        )
        VALUES (
            NEW.acc_id, 
            NULL, 
            'UPDATE', 
            CONCAT('email changed: ', OLD.email, ' → ', NEW.email), 
            NULL, 
            NULL, 
            'UPDATE', 
            'tbl_users', 
            NEW.acc_id
        );
    END IF;

   
    IF (OLD.phone <> NEW.phone) THEN
        INSERT INTO access_logs (
            user_id, 
            session_id, 
            event_type, 
            event_description, 
            ip_address, 
            user_agent, 
            action, 
            target_table, 
            record_id
        )
        VALUES (
            NEW.acc_id, 
            NULL, 
            'UPDATE', 
            CONCAT('email changed: ', OLD.phone, ' → ', NEW.phone), 
            NULL, 
            NULL, 
            'UPDATE', 
            'tbl_users', 
            NEW.acc_id
        );
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `trg_log_user_login` AFTER UPDATE ON `tbl_users` FOR EACH ROW BEGIN
    IF NEW.last_logged_in <> OLD.last_logged_in THEN
        INSERT INTO access_logs (user_id, action, target_table, record_id, timestamp)
        VALUES (NEW.acc_id, 'USER_LOGIN', 'tbl_users', NEW.acc_id, NOW());
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_user_delete` AFTER DELETE ON `tbl_users` FOR EACH ROW BEGIN
    INSERT INTO access_logs (
        user_id, 
        session_id, 
        event_type, 
        event_description, 
        ip_address, 
        user_agent, 
        action, 
        target_table, 
        record_id
    )
    VALUES (
        OLD.acc_id, 
        NULL, 
        'DELETE', 
        CONCAT('User deleted: ', OLD.email), 
        NULL, 
        NULL, 
        'DELETE', 
        'tbl_users', 
        OLD.acc_id
    );
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `tbl_users_login`
--

DROP TABLE IF EXISTS `tbl_users_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_users_login` (
  `login_id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `profile_id` int DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `log_status` varchar(1) DEFAULT NULL,
  `side` int NOT NULL DEFAULT '1',
  `park` int DEFAULT NULL,
  `remember_token` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `id` (`login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users_login`
--

LOCK TABLES `tbl_users_login` WRITE;
/*!40000 ALTER TABLE `tbl_users_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_users_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'datacenter'
--
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-31 16:39:16
