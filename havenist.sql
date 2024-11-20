-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: havenist
-- ------------------------------------------------------
-- Server version	8.0.38

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
-- Table structure for table `flatmates`
--
use havenist;
DROP TABLE IF EXISTS `flatmates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `flatmates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `flatmateName` varchar(255) NOT NULL,
  `localities` varchar(255) NOT NULL,
  `sharingType` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `facilities` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `propertyType` varchar(100) DEFAULT NULL,
  `availability` varchar(100) DEFAULT NULL,
  `images` text,
  `videos` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flatmates`
--

LOCK TABLES `flatmates` WRITE;
/*!40000 ALTER TABLE `flatmates` DISABLE KEYS */;
INSERT INTO `flatmates` VALUES (1,'jhsgjh','','4 share',70000.00,'Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','8792484217','hyderabad','flatmates','within a week','uploads/greenpark1.jpg,uploads/greenpark2.jpg,uploads/royalnext1.jpg,uploads/royalnext2.jpg,uploads/sairam2.jpg','','2024-09-19 11:36:38',NULL),(2,'kgf','','4 share',70000.00,'Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','7048556288','hyderabad','flatmates','within a week','uploads/blue2.jpg,uploads/blue3.jpg,uploads/dhatri1.jpg','uploads/Video.mp4 .mp4,uploads/Video2.mp4','2024-09-25 13:33:07','welcome'),(3,'kgf','kphb','4 share',70000.00,'Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','7048556288','hyderabad','flatmates','within a week','uploads/blue2.jpg,uploads/blue3.jpg,uploads/dhatri1.jpg','uploads/Video.mp4 .mp4,uploads/Video2.mp4','2024-09-25 13:34:23','welcome');
/*!40000 ALTER TABLE `flatmates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hostels`
--

DROP TABLE IF EXISTS `hostels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hostels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `rent` decimal(10,2) NOT NULL,
  `facilities` text NOT NULL,
  `image_paths` text,
  `video_paths` text,
  `contact_details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hostels`
--

LOCK TABLES `hostels` WRITE;
/*!40000 ALTER TABLE `hostels` DISABLE KEYS */;
/*!40000 ALTER TABLE `hostels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotelbooking`
--

DROP TABLE IF EXISTS `hotelbooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotelbooking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotelName` varchar(255) NOT NULL,
  `localities` varchar(255) NOT NULL,
  `sharingType` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `facilities` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `propertyType` varchar(100) DEFAULT NULL,
  `availability` varchar(100) DEFAULT NULL,
  `images` text,
  `videos` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotelbooking`
--

LOCK TABLES `hotelbooking` WRITE;
/*!40000 ALTER TABLE `hotelbooking` DISABLE KEYS */;
INSERT INTO `hotelbooking` VALUES (1,'abcd','kphb','4 share',70000.00,'AC Rooms, Gym, Laundry, 24/7 Security, RO Water','8792484217','hydrabad','hotel booking','within a week','uploads/greenpark1.jpg,uploads/greenpark2.jpg,uploads/royalnext1.jpg','','2024-09-19 07:39:11',NULL),(2,'efg','begumpet','4 share',70000.00,'Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','7043479050','hyderabad','hotel booking','within a week','uploads/blue1.jpg,uploads/blue2.jpg,uploads/blue3.jpg','','2024-09-19 10:56:12',NULL),(3,'efg','kphb','4 share',70000.00,'Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','7043479050','hyderabad','hotel booking','within a week','uploads/blue1.jpg,uploads/blue2.jpg,uploads/blue3.jpg','','2024-09-19 10:59:15',NULL),(4,'abcdefg','kphb','4 share',5000.00,'Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','8792484217','hyderabad','hotel booking','within a week','uploads/greenpark1 - Copy - Copy.jpg,uploads/dhatri2 - Copy.jpg,uploads/dhatri3 - Copy - Copy.jpg,uploads/dhatri3 - Copy (2).jpg','uploads/Video.mp4 .mp4,uploads/Video2.mp4','2024-09-25 13:31:36','hello');
/*!40000 ALTER TABLE `hotelbooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `owners`
--

DROP TABLE IF EXISTS `owners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `owners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owners`
--

LOCK TABLES `owners` WRITE;
/*!40000 ALTER TABLE `owners` DISABLE KEYS */;
INSERT INTO `owners` VALUES (5,'Jagadeswararao','Vana','jagadeswararaovana@gmail.com','08790055638','hostel','$2y$10$Px5Xj/GqwXI/bYgb/vqNVO1BZFOA/8Wejmx.Jc/88NCyxyqsLB.qa'),(6,'Jagadeswararao','Vana','jagguma9573@gmail.com','08790055638','hostel','$2y$10$acSm6BKmt19tSUGNtcjB7OQjGdeQyLO4MMRKodfd6dUdvmwwmMklG');
/*!40000 ALTER TABLE `owners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hostelName` varchar(255) NOT NULL,
  `localities` varchar(255) NOT NULL,
  `Sharing_Type` varchar(50) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `facilities` text NOT NULL,
  `images` text NOT NULL,
  `videos` text,
  `contact` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(100) DEFAULT NULL,
  `propertyType` varchar(50) DEFAULT NULL,
  `availability` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,'Bhavani boys hostel','Begumpet','2 share, 3 share, 4 share','8000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/shree2.jpg','','8792508973','2024-09-02 16:23:48','Hyderabad','PG/Hostel','immediate',NULL),(2,'Dwarakamai','Begumpet',' 3 share, 4 share','8500','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/sairam1.jpg,uploads/sairam2.jpg,uploads/sairam3.jpg','','8971559301','2024-09-02 16:28:56','Hyderabad','PG/Hostel','immediate',NULL),(3,'Zion ladies hostel','Maredpally','2 share, 3 share, 4 share','9000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue1.jpg,uploads/blue2.jpg,uploads/blue3.jpg','','7128852175','2024-09-02 16:30:43','Hyderabad','PG/Hostel','immediate',NULL),(4,'Tirumala womens hostel','Habsiguda','3 share, 4 share, 5 share','8000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/dhatri1.jpg,uploads/dhatri2.jpg,uploads/dhatri3.jpg','','7048151037','2024-09-02 16:32:32','Hyderabad','PG/Hostel','immediate',NULL),(5,'Vaibhav girls hostel','Ameerpet','2 share, 3 share',' 7000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/greenpark1.jpg,uploads/greenpark2.jpg','','8197446091','2024-09-02 16:34:00','Hyderabad','PG/Hostel','immediate',NULL),(6,'Glanbaxy home pgg','Sri nagar colony','2 share, 3 share',' 65000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/royalnext1.jpg,uploads/royalnext2.jpg','','704885176','2024-09-02 16:35:20','Hyderabad','PG/Hostel','immediate',NULL),(7,'Srinivasa mens hostel','Madhura nagar','2 share, 3 share, 4 share','6000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/sairam1.jpg,uploads/sairam2.jpg,uploads/sairam3.jpg','','7947411383','2024-09-02 16:39:06','Hyderabad','PG/Hostel','immediate',NULL),(8,'Sri sai manikanta womens hostel','jutu','2 share, 3 share, 4 share','8000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/shree1.jpg,uploads/shree2.jpg','','9105609215','2024-09-02 16:43:47','Hyderabad','PG/Hostel','immediate',NULL),(9,'Varshini womens hostel','Ecil AS Rao nagar','2 share, 3 share, 4 share','9000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/blue1.jpg,uploads/blue2.jpg,uploads/blue3.jpg','','84603 08219','2024-09-02 16:45:18','Hyderabad','PG/Hostel','immediate',NULL),(10,'Sai jasvitha','Vanasthalipuram','2 share, 3 share, 4 share','8000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/dhatri1.jpg,uploads/dhatri2.jpg,uploads/dhatri3.jpg','','8488832106','2024-09-02 16:46:32','Hyderabad','PG/Hostel','immediate',NULL),(11,'Sai rudra womens pg','kphb','2 share, 3 share, 4 share','5500','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/greenpark1.jpg,uploads/greenpark2.jpg','','9054205321','2024-09-02 16:48:05','Hyderabad','PG/Hostel','immediate',NULL),(12,'Shine executive boys hostel ','LB nagar','2 share, 3 share, 4 share','7500','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/royalnext1.jpg,uploads/royalnext2.jpg','','9980921261','2024-09-02 16:50:06','Hyderabad','PG/Hostel','immediate',NULL),(13,'Joshitha Co-Living ','Gowlidoddi','2 share, 3 share, 4 share','6500','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/royalnext1.jpg,uploads/royalnext2.jpg','','8460224574','2024-09-02 16:51:41','Hyderabad','PG/Hostel','immediate',NULL),(14,'SV mess& paying guest boys hostel','Tar Bund','2 share, 3 share, 4 share','15000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/sairam1.jpg,uploads/sairam2.jpg,uploads/sairam3.jpg','','7947111682','2024-09-02 16:54:02','Hyderabad','PG/Hostel','immediate',NULL),(15,'Sri ventaswara boys hostel ','Padmarao nagar','4 share','4500','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/sairam1.jpg,uploads/sairam2.jpg,uploads/sairam3.jpg','','7947111520','2024-09-02 16:55:47','Hyderabad','PG/Hostel','immediate',NULL),(16,'Aarush mens pg ','kphb','2 share, 3 share, 4 share','4000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/shree1.jpg,uploads/shree2.jpg','','9980769367','2024-09-02 16:57:13','Hyderabad','PG/Hostel','immediate',NULL),(17,'Jaganath boys hostel','Somajiguda','4 share','4000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue1.jpg,uploads/blue2.jpg,uploads/blue3.jpg','','8792070862','2024-09-02 16:59:10','Hyderabad','PG/Hostel','immediate',NULL),(18,'Sri rama pg','Hafeezpet','2 share, 3 share, 4 share','12000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/dhatri1.jpg,uploads/dhatri2.jpg,uploads/dhatri3.jpg','','8792070862','2024-09-02 17:00:37','Hyderabad','PG/Hostel','immediate',NULL),(19,'AR Prime mens pg ','kphb','2 share','5500','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/greenpark1.jpg,uploads/greenpark2.jpg','','7043542484','2024-09-02 17:02:59','Hyderabad','PG/Hostel','immediate',NULL),(20,'Bhavya hostels','Chandanagar','2 share, 3 share','14000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/royalnext1.jpg,uploads/royalnext2.jpg','','8197719096','2024-09-02 17:04:25','Hyderabad','PG/Hostel','immediate',NULL),(21,'Gayathri Deluxe','Mehadipatanam','3 share','20000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/sairam1.jpg,uploads/sairam2.jpg,uploads/sairam3.jpg','','9980783760','2024-09-02 17:05:59','Hyderabad','PG/Hostel','immediate',NULL),(22,'Amulya Ladies hostel','LB nagar','2 share, 3 share, 4 share','23000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/shree1.jpg,uploads/shree2.jpg','','9980815172','2024-09-02 17:09:09','Hyderabad','PG/Hostel','immediate',NULL),(23,'Mukunda pg hostel','Gachibowli','2 share, 3 share, 4 share','27000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/royalnext1.jpg,uploads/royalnext2.jpg','','9980855870','2024-09-02 17:11:45','Hyderabad','PG/Hostel','immediate',NULL),(24,'Sravya Elite stay','Madhapur','3 share','24000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue1.jpg,uploads/blue2.jpg,uploads/blue3.jpg','','9725 900319','2024-09-02 17:13:21','Hyderabad','PG/Hostel','immediate',NULL),(25,'Ravi relax','Kondapur','5 share','27000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/dhatri1.jpg,uploads/dhatri2.jpg,uploads/dhatri3.jpg','','9980819280','2024-09-02 17:14:50','Hyderabad','PG/Hostel','immediate',NULL),(26,'Nithaya sri ','Kondapur','2 share, 3 share, 4 share','40000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/greenpark1.jpg,uploads/greenpark2.jpg','','7487864898','2024-09-02 17:16:08','Hyderabad','PG/Hostel','immediate',NULL),(27,'Laxmi Pranathi ','Dilsukhunagar','5 share','10000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/sairam1.jpg,uploads/sairam2.jpg,uploads/sairam3.jpg','','8040157717','2024-09-02 17:17:59','Hyderabad','PG/Hostel','immediate',NULL),(28,'Sandya reddy','Chaitanpuri','1  share','32000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/shree1.jpg','','7795684520','2024-09-02 17:19:32','Hyderabad','PG/Hostel','immediate',NULL),(29,'Sri Tanuja ladies','kphb','1 share','30000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue1.jpg,uploads/blue2.jpg,uploads/blue3.jpg','','7490971077','2024-09-02 17:21:11','Hyderabad','PG/Hostel','immediate',NULL),(30,'JMJ ','Himayat nagar',' 4 share','4000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/dhatri1.jpg,uploads/dhatri2.jpg,uploads/dhatri3.jpg','','7043903861','2024-09-02 17:23:03','Hyderabad','PG/Hostel','immediate',NULL),(31,'Sai pallavi ','Chikkadipally',' 3 share','35000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/greenpark1.jpg,uploads/greenpark2.jpg','','7947136013','2024-09-02 17:24:23','Hyderabad','PG/Hostel','immediate',NULL),(32,'Mount everest ','Banjara hills','2 share, 3 share, 4 share','3500','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/royalnext1.jpg,uploads/royalnext2.jpg','','8401948385','2024-09-02 17:26:03','Hyderabad','PG/Hostel','immediate',NULL),(33,'Sri sai durga','Yella reddy guda','2 share, 3 share, 4 share','5000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/sairam1.jpg,uploads/sairam2.jpg','','74117960 36','2024-09-02 17:27:26','Hyderabad','PG/Hostel','immediate',NULL),(34,'KJ reddy womens ','Chandanagar','2 share, 3 share, 4 share','7000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/shree2.jpg','','99 80861862','2024-09-02 17:29:11','Hyderabad','PG/Hostel','immediate',NULL),(35,'S grand pg','Kondapur','2 share, 3 share','9000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/blue1.jpg,uploads/blue3.jpg','','7048172084','2024-09-03 03:37:15','Hyderabad','PG/Hostel','immediate',NULL),(36,'Suprabhat executive ','LB nagar',' 3 share','18000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/blue1.jpg,uploads/blue2.jpg','','7947416592','2024-09-03 03:38:50','Hyderabad','PG/Hostel','immediate',NULL),(37,'Isha executive hostel','BN reddy nagar','2 share','17000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/dhatri1.jpg,uploads/dhatri3.jpg','','794745614','2024-09-03 03:40:03','Hyderabad','PG/Hostel','immediate',NULL),(38,'Karanya Luxury ladies hostel','Mehadipatanam','2 share, 3 share, 4 share','8000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/dhatri1.jpg,uploads/dhatri2.jpg','','70483 62930','2024-09-03 03:41:28','Hyderabad','PG/Hostel','immediate',NULL),(41,'Vasudeva executive pg','kphb','2 share, 3 share, 4 share','5000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/greenpark2.jpg','','8792484217','2024-09-03 03:42:37','Hyderabad','PG/Hostel','immediate',NULL),(42,'Saida ladies hostel ','Somajiguda','2 share, 3 share, 4 share','16000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/greenpark1.jpg','','7947140520','2024-09-03 03:44:03','Hyderabad','PG/Hostel','immediate',NULL),(43,'Mahi girls &Working womens hostel ','Dilsukhunagar','2 share, 3 share, 4 share','6500','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/royalnext2.jpg','','9980714697','2024-09-03 03:45:11','Hyderabad','PG/Hostel','immediate',NULL),(44,'Sravani reddy hostel','Chandanagar','2 share, 3 share, 4 share','40000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/sairam2.jpg,uploads/sairam3.jpg','','7048170487','2024-09-03 03:46:15','Hyderabad','PG/Hostel','immediate',NULL),(45,'AS grand pd mens hostel','Manikonda','2 share, 3 share, 4 share','33000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/sairam1.jpg','','8792661529','2024-09-03 03:47:34','Hyderabad','PG/Hostel','immediate',NULL),(46,'Sai ram ladies  hostel','Hasthinapuram','5 share','34000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/shree2.jpg','','8460300316','2024-09-03 03:48:42','Hyderabad','PG/Hostel','immediate',NULL),(47,'Vinz  coliving pg','Nanakaramaguda','5 share','24000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/greenpark1.jpg','','9406149747','2024-09-03 03:49:59','Hyderabad','PG/Hostel','immediate',NULL),(48,'Lakshmi deluxe boys hostel','Santhosh nagar','2 share, 3 share, 4 share','23000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/sairam2.jpg','','8123881593','2024-09-03 03:51:30','Hyderabad','PG/Hostel','immediate',NULL),(49,'Sravani deluxe pg boys hostel','Hapsiguda','2 share, 3 share, 4 share','25000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/sairam3.jpg','','7947112869','2024-09-03 03:52:56','Hyderabad','PG/Hostel','immediate',NULL),(50,'Nest hostel mens hostel','Madhapur','2 share, 3 share, 4 share','22000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/royalnext1.jpg','','8904609135','2024-09-03 03:54:17','Hyderabad','PG/Hostel','immediate',NULL),(51,'Ganesh sai deluxe ','RTO office Kondapur','2 share, 3 share, 4 share','12000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/blue1.jpg,uploads/greenpark2.jpg','','9980831166','2024-09-03 04:03:15','Hyderabad','PG/Hostel','immediate',NULL),(52,'Lucky ladies&Mens hostel','Ameerpet','2 share, 3 share, 4 share','19000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue1.jpg,uploads/shree1.jpg','','8197562338','2024-09-03 04:05:28','Hyderabad','PG/Hostel','immediate',NULL),(53,'Lotus ladies hostel','Alwal','2 share, 3 share, 4 share','23000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue3.jpg,uploads/greenpark2.jpg','','7048177487','2024-09-03 04:07:00','Hyderabad','PG/Hostel','immediate',NULL),(54,'Priyanka coliving pg ','Kondapur','2 share, 3 share, 4 share','8000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/greenpark2.jpg,uploads/royalnext1.jpg','','84603033 62','2024-09-03 04:08:05','Hyderabad','PG/Hostel','immediate',NULL),(55,'Lotus premium pg hostel ','narayanguda','2 share, 3 share, 4 share','5000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue3.jpg,uploads/dhatri1.jpg','','70486 05 807','2024-09-03 04:09:51','Hyderabad','PG/Hostel','immediate',NULL),(56,'Star homes grand pg','Gachibowli','2 share, 3 share, 4 share','30000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/greenpark1.jpg,uploads/royalnext2.jpg','','8197613683','2024-09-03 04:11:08','Hyderabad','PG/Hostel','immediate',NULL),(57,'BV  reddy mens pg hostel','Uppal','2 share, 3 share, 4 share','26000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/greenpark2.jpg,uploads/shree1.jpg','','9980799478','2024-09-03 04:12:30','Hyderabad','PG/Hostel','immediate',NULL),(58,'BSR amulya ladies hostel','Sanjiva reddy nagar','2 share, 3 share, 4 share','40000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/dhatri3.jpg,uploads/royalnext2.jpg','','8792915304','2024-09-03 04:13:47','Hyderabad','PG/Hostel','immediate',NULL),(59,'Sri parameshwara deluxe','Kothapet','2 share, 3 share, 4 share','54000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/royalnext1.jpg,uploads/sairam1.jpg','','87924 91719','2024-09-03 04:15:12','Hyderabad','PG/Hostel','immediate',NULL),(60,'Leavuris boys hostel ','Yella reddy guda','2 share, 3 share, 4 share','63000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/blue2.jpg,uploads/royalnext1.jpg','','8792488870','2024-09-03 04:16:38','Hyderabad','PG/Hostel','immediate',NULL),(61,'PVR sri laksmi balaji ','Kondapur','2 share, 3 share, 4 share','2500','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/dhatri3.jpg,uploads/sairam1.jpg','','84 60 252612','2024-09-03 04:17:53','Hyderabad','PG/Hostel','immediate',NULL),(62,'Sri renuka girls hostel ','Buduppal','2 share, 3 share, 4 share','26000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/dhatri2.jpg,uploads/royalnext1.jpg','','7048556288','2024-09-03 04:19:04','Hyderabad','PG/Hostel','immediate',NULL),(63,'Sri renuka girls hostel ','Buduppal','2 share, 3 share, 4 share','38000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/dhatri2.jpg,uploads/royalnext1.jpg','','7048556288','2024-09-03 04:19:05','Hyderabad','PG/Hostel','immediate',NULL),(64,'Jb paradise mens hostel','Kondapur','2 share, 3 share, 4 share','2700','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/blue1.jpg,uploads/sairam2.jpg','','9980713979','2024-09-03 04:20:17','Hyderabad','PG/Hostel','immediate',NULL),(65,'Mindspace mens pg hostel ','Madhura nagar','2 share, 3 share, 4 share','23000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/dhatri1.jpg,uploads/greenpark1.jpg','','8460406165','2024-09-03 04:22:11','Hyderabad','PG/Hostel','immediate',NULL),(66,'Sri siri deluxe ','kphb','2 share, 3 share, 4 share','22000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue2.jpg,uploads/sairam3.jpg','','99808 24393','2024-09-03 04:23:33','Hyderabad','PG/Hostel','immediate',NULL),(67,'Sri nandhana deluxe','Kukatpally','2 share, 3 share, 4 share','20000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/blue2.jpg,uploads/royalnext2.jpg','','9035098948','2024-09-03 04:25:44','Hyderabad','PG/Hostel','immediate',NULL),(68,'Vijaya lotus ','Ashok nagar','2 share, 3 share, 4 share','30000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/blue3.jpg,uploads/greenpark2.jpg','','7048346416','2024-09-03 04:27:45','Hyderabad','PG/Hostel','immediate',NULL),(69,'Sri  mahalakshmi pg ','Tar naka','2 share, 3 share, 4 share','40000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/royalnext1.jpg,uploads/sairam1.jpg','','7043479050','2024-09-03 04:29:30','Hyderabad','PG/Hostel','immediate',NULL),(70,'Sri  mahalakshmi pg ','Tar naka','2 share, 3 share, 4 share','80000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/royalnext1.jpg,uploads/sairam1.jpg','','7043479050','2024-09-03 04:29:30','Hyderabad','PG/Hostel','immediate',NULL),(71,'Stay inn pg  women','jutu','2 share, 3 share, 4 share','70000','Wi-Fi, Laundry, Mess, 24/7 Security, Attached Bathroom','uploads/greenpark1.jpg','','8460450776','2024-09-03 04:30:33','Hyderabad','PG/Hostel','immediate',NULL),(72,'Suprita executive womens hostel','Maredpally','2 share, 3 share, 4 share','70000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/dhatri1.jpg','','9480731576','2024-09-03 04:31:48','Hyderabad','PG/Hostel','immediate',NULL),(73,'Rk girls hostel ','Mehadipatanam','2 share, 3 share, 4 share','60000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/greenpark1.jpg,uploads/shree1.jpg','','7942676382','2024-09-03 04:32:56','Hyderabad','PG/Hostel','immediate',NULL),(74,'dhatri','','2 share, 3 share, 4 share','6000','','','','9856320147','2024-09-14 04:21:46','Hyderabad','PG/Hostel','',NULL),(75,'dhatri delux','kphb','2 share, 3 share, 4 share','5000','','','','9874563210','2024-09-14 04:32:23','Hyderabad','PG/Hostel','within a week',NULL),(76,'dhatri 2','kphb','2 share, 3 share, 4 share','7000','','','','897461025','2024-09-14 04:42:56','pune','PG/Hostel','within a week',NULL),(77,'ABCD','Begumpet','2 share, 3 share, 4 share','10000','','','','9856347120','2024-09-14 04:45:19','pune','PG/Hostel','within a week',NULL),(78,'ABCD','Begumpet','2 share, 3 share, 4 share','28000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/shree1.jpg','','656842','2024-09-14 04:54:06','pune','PG/Hostel','within a week',NULL),(79,'xyz','kphb','2 share, 3 share, 4 share','6000','Wi-Fi, Vegetarian Food, Laundry, 24/7 Security, Power Backup','uploads/shree2.jpg','','9874563210','2024-09-14 04:56:25','pune','PG/Hostel','within a week',NULL),(80,'def','kphb','2 share, 3 share, 4 share','450000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/greenpark1.jpg,uploads/shree1.jpg','','8792484217','2024-09-14 07:01:15','pune','PG/Hostel','within a week',NULL),(81,'rstuv','kphb','2 share, 3 share, 4 share','5000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/sairam1.jpg','','546879','2024-09-17 10:05:41','pune','PG/Hostel','within a week',NULL),(82,'abc','Begumpet','5 share','5000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/sairam2.jpg','','9513576842','2024-09-17 11:45:09','pune','PG/Hostel','within a week',NULL),(83,'a','Begumpet','4 share','6000','Wi-Fi, Power Backup, CCTV, Geyser, Vegetarian Food','uploads/blue2.jpg','','9','2024-09-17 11:59:48','pune','PG/Hostel','within a week',NULL),(84,'abcdefgh','kphb','5share','1 share 8000; 2 share 7500; 3 share 7000; 4 share 6500; 5 share 6000','Wi-Fi, Power Backup, washing machine, Geyser, Vegetarian Food','uploads/dhatri3.jpg,uploads/greenpark1.jpg,uploads/greenpark2.jpg,uploads/royalnext1.jpg,uploads/royalnext2.jpg,uploads/sairam1.jpg','uploads/Video.mp4 .mp4,uploads/Video2.mp4','9745632103','2024-09-25 13:16:43','hyderabad','pg/hostel','within a week','something else'),(88,'JANU','kphb','4 share','6000','AC Rooms, Gym, Laundry, 24/7 Security, RO Water','uploads/sairam1 - Copy.jpg,uploads/dhatri3 - Copy.jpg,uploads/greenpark1 - Copy.jpg,uploads/greenpark2 - Copy.jpg,uploads/royalnext1 - Copy.jpg,uploads/royalnext2 - Copy.jpg','uploads/Video.mp4 .mp4,uploads/Video2.mp4','8895412367','2024-09-25 13:29:34','hyderabad','PG/Hostel','within a week','something else');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `otp_code` varchar(6) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_token_expiry` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'Jagadeswararao','Vana','jagadeswararaovana@gmail.com','08790055638','$2y$10$ojp.5JWvnjymZdv4f.Mzv.tvBTU/8XAvtwNmEAL2fGEu.UHVlfdsS',NULL,0,'2024-09-18 05:21:11',NULL,'2024-09-23 04:38:51'),(12,'Jagadeswararao','Vana','jagguma9573@gmail.com','08790055638','$2y$10$T6d4wxakziyBV.0IZORxBeD.usWUtbwsnMcwA4YQUzyHm4QSeky9O',NULL,0,'2024-09-19 03:44:40',NULL,NULL);
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

-- Dump completed on 2024-09-27 19:27:43
