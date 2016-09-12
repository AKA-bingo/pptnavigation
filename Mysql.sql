-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `lastip` varchar(15) DEFAULT NULL,
  `lasttime` datetime DEFAULT NULL,
  `level` int(11) DEFAULT '1',
  PRIMARY KEY (`aid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','*A126310966DE56FA99151A8E2EC7BE1698DE8250','::1','2016-05-23 13:38:07',100);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(15) DEFAULT NULL,
  `cat_memo` text,
  `parent_cat` int(11) NOT NULL,
  `cat_icon` text,
  `cat_priority` int(11) DEFAULT '0',
  `cat_delete` int(11) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'无','The root of all the category',-1,NULL,0,0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chtml`
--

DROP TABLE IF EXISTS `chtml`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chtml` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(15) DEFAULT NULL,
  `ch_code` text,
  `ch_delete` int(11) DEFAULT '0',
  `ch_note` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chtml`
--

LOCK TABLES `chtml` WRITE;
/*!40000 ALTER TABLE `chtml` DISABLE KEYS */;
INSERT INTO `chtml` VALUES (1,'tittle','LOVEPPT',2,'网站标题'),(2,'keywords','',2,'网站关键字'),(3,'description','',2,'网站描述'),(4,'navbar','&lt;a href=&quot;&quot;&gt;速效装逼&lt;/a&gt;\n&lt;a href=&quot;&quot;&gt;成长学习&lt;/a&gt;',2,'网站顶部导航栏链接'),(5,'qrcode','&lt;a href=&quot;&quot;&gt;&lt;img src=&quot;images/index/qrcode.png&quot; width=&quot;94px&quot; height=&quot;141px&quot;&gt;&lt;/a&gt;',2,'网站漂浮二维码'),(6,'ads-bottom','&lt;a href=&quot;&quot;&gt;热文&lt;/a&gt;\n&lt;a href=&quot;&quot;&gt;热文&lt;/a&gt;\n&lt;a href=&quot;&quot;&gt;热文&lt;/a&gt;\n&lt;a href=&quot;&quot;&gt;热文&lt;/a&gt;',2,'底部热文广告位'),(7,'copyright','Copyright &amp;copy; 2016 一周创意（ONE WEEK） 联系邮箱 oneweekdesign@foxmail.com',2,'网站底部版权声明'),(8,'ads-cat-0','&lt;a href=&quot;&quot;&gt;热文占用1&lt;/a&gt;',2,'分类右上角广告0'),(9,'ads-cat-1','',2,'分类右上角广告1');
/*!40000 ALTER TABLE `chtml` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `website`
--

DROP TABLE IF EXISTS `website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `website` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `ws_name` varchar(15) DEFAULT NULL,
  `ws_url` text,
  `ws_memo` text,
  `ws_priority` int(11) DEFAULT '0',
  `ws_delete` int(11) DEFAULT '0',
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`wid`),
  KEY `cid` (`cid`),
  CONSTRAINT `website_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `website`
--

LOCK TABLES `website` WRITE;
/*!40000 ALTER TABLE `website` DISABLE KEYS */;
/*!40000 ALTER TABLE `website` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-23 13:46:00
