-- MySQL dump 10.14  Distrib 5.5.44-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: comment_system
-- ------------------------------------------------------
-- Server version	5.5.44-MariaDB

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (40,'Noah','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla justo non ligula ultrices, suscipit dictum nunc pretium. Pellentesque egestas est id purus tincidunt malesuada.'),(41,'Jacob','Vestibulum ut risus tincidunt, tempor diam et, ultricies turpis. Vestibulum ipsum magna, suscipit vitae hendrerit sit amet, gravida nec ex.'),(42,'William','Etiam lacus ipsum, varius eu lorem quis, bibendum tristique magna. Nunc rhoncus non justo id dictum.'),(43,'Ethan','Nullam imperdiet rhoncus quam, a viverra orci blandit non.'),(44,'James','Suspendisse suscipit vel nunc ut congue.'),(45,'Matthew','Pellentesque sed molestie lacus, et interdum lacus. Praesent risus leo, tincidunt at risus nec, finibus molestie quam. Proin et molestie nisl. Nunc ultricies, odio ut scelerisque sodales, lorem velit pretium mi, quis dictum arcu lectus sit amet ex. Maecenas aliquam, justo in accumsan aliquam, quam dolor consectetur lacus, in euismod augue dui eget quam. Proin a pharetra ipsum.'),(46,'Mason','Nam eu hendrerit enim. Quisque id eleifend nibh, eu iaculis libero. Nulla et varius nisi. Cras sollicitudin dapibus ipsum quis iaculis.'),(47,'Noah','Praesent iaculis nisl dapibus elit congue condimentum. Etiam lacus ipsum, varius eu lorem quis, bibendum tristique magna.'),(48,'James','Etiam dignissim eleifend iaculis. Nullam ut posuere libero, vel feugiat tortor. Praesent faucibus vehicula dui sit amet vulputate.'),(49,'Matthew','Donec ut mi vitae ante semper iaculis. Vivamus malesuada laoreet urna, et finibus lacus feugiat quis. Suspendisse a sodales ante. Proin luctus ullamcorper ultricies. Vivamus interdum purus id orci cursus, non porttitor elit placerat. Integer a suscipit turpis. Integer egestas nisl quis ultrices fringilla.'),(50,'Lucas','Proin a pharetra ipsum. Etiam nisl mi, faucibus ac aliquet in, sollicitudin eu ligula. Aenean quis sodales mauris, nec condimentum nisi. Nunc consequat vitae nunc et vestibulum.'),(51,'William','Aliquam fringilla justo non ligula ultrices, suscipit dictum nunc pretium. Pellentesque egestas est id purus tincidunt malesuada. Vivamus rutrum at orci nec interdum. Sed ac magna quis diam laoreet ornare. Phasellus tempus commodo sapien, sit amet semper lacus volutpat in. Aenean tempor justo ac fermentum tincidunt.'),(52,'Mason','Etiam lacus ipsum, varius eu lorem quis, bibendum tristique magna. Nunc rhoncus non justo id dictum.'),(53,'Daniel','Vivamus malesuada laoreet urna, et finibus lacus feugiat quis. Suspendisse a sodales ante. Proin luctus ullamcorper ultricies. Vivamus interdum purus id orci cursus, non porttitor elit placerat. Integer a suscipit turpis. Integer egestas nisl quis ultrices fringilla.'),(54,'Noah','Ut eleifend blandit lacus. Nulla euismod semper eros, sit amet lacinia mi. Praesent condimentum a metus ut interdum. Donec non urna fringilla, pretium ipsum sed, tristique mauris. Nulla vitae metus aliquet, commodo nibh vel, rhoncus lectus. Proin auctor interdum nisl, a mattis lorem ornare lobortis. Vivamus tortor tortor, ornare non tempus in, vulputate eu libero.'),(55,'Matthew','Suspendisse euismod metus hendrerit sapien molestie, quis sodales magna semper. Nunc volutpat fermentum blandit. Duis quis elit elit. Sed ante neque, posuere in vehicula ut, tempor semper nunc. Suspendisse lobortis ligula nec dapibus aliquet.'),(56,'David','Maecenas aliquam, justo in accumsan aliquam, quam dolor consectetur lacus, in euismod augue dui eget quam. Proin a pharetra ipsum.');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (22,'Noah','96e79218965eb72c92a549dd5a330112'),(23,'Jacob','96e79218965eb72c92a549dd5a330112'),(24,'William','96e79218965eb72c92a549dd5a330112'),(25,'Ethan','96e79218965eb72c92a549dd5a330112'),(26,'James','96e79218965eb72c92a549dd5a330112'),(27,'Matthew','96e79218965eb72c92a549dd5a330112'),(28,'Mason','96e79218965eb72c92a549dd5a330112'),(29,'Lucas','96e79218965eb72c92a549dd5a330112'),(30,'Daniel','96e79218965eb72c92a549dd5a330112'),(31,'David','96e79218965eb72c92a549dd5a330112');
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

-- Dump completed on 2016-01-05  2:39:49
