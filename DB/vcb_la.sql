-- MariaDB dump 10.19  Distrib 10.5.9-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: vcb_la
-- ------------------------------------------------------
-- Server version	10.5.9-MariaDB

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
-- Table structure for table `blocked_ips`
--

DROP TABLE IF EXISTS `blocked_ips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blocked_ips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attempts` int(11) NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blocked_until` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blocked_ips`
--

LOCK TABLES `blocked_ips` WRITE;
/*!40000 ALTER TABLE `blocked_ips` DISABLE KEYS */;
/*!40000 ALTER TABLE `blocked_ips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `success` tinyint(4) DEFAULT NULL,
  `attempt_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
INSERT INTO `login_attempts` VALUES (31,'171.224.181.188',NULL,NULL,NULL,1,'2023-10-11 18:20:26',NULL),(32,'171.224.181.188',NULL,NULL,NULL,2,'2023-10-11 18:20:35',NULL),(33,'171.224.181.188',NULL,NULL,NULL,3,'2023-10-11 18:36:50',NULL),(34,'171.224.181.188',NULL,NULL,NULL,4,'2023-10-11 19:19:43',NULL),(35,'171.224.181.188',NULL,NULL,NULL,5,'2023-10-11 19:19:57',NULL),(36,'171.224.181.188',NULL,NULL,NULL,6,'2023-10-11 19:20:25',NULL),(37,'1.53.223.248',NULL,NULL,NULL,1,'2023-10-12 01:58:17',NULL),(38,'117.4.252.45',NULL,NULL,NULL,1,'2023-10-12 07:31:38',NULL),(39,'117.4.252.45',NULL,NULL,NULL,2,'2023-10-12 07:31:49',NULL),(40,'1.53.223.248',NULL,NULL,NULL,2,'2023-10-12 07:34:08',NULL),(41,'1.52.219.115',NULL,NULL,NULL,1,'2023-10-13 02:56:03',NULL),(42,'27.72.98.102',NULL,NULL,NULL,1,'2023-10-14 02:23:27',NULL),(43,'117.4.252.45',NULL,NULL,NULL,1,'2023-10-17 01:49:26',NULL),(44,'117.4.252.45',NULL,NULL,NULL,2,'2023-10-17 01:49:35',NULL),(45,'117.4.252.45',NULL,NULL,NULL,3,'2023-10-17 07:43:25',NULL),(46,'117.4.252.45',NULL,NULL,NULL,4,'2023-10-17 07:43:36',NULL);
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_group`
--

DROP TABLE IF EXISTS `menu_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_group` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_group`
--

LOCK TABLES `menu_group` WRITE;
/*!40000 ALTER TABLE `menu_group` DISABLE KEYS */;
INSERT INTO `menu_group` VALUES (1,'Menu','Header','2020-04-14 17:00:00','2020-04-14 17:00:00');
/*!40000 ALTER TABLE `menu_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `class` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (2,NULL,'Hướng dẫn mở tài khoản','#instruct',NULL,'1',1,NULL,'2021-03-29 10:34:09','2023-10-12 09:15:39'),(3,NULL,'Liên hệ','#contact',NULL,'2',1,NULL,'2021-03-29 10:34:27','2023-10-12 09:15:32'),(27,NULL,'Ưu đãi chương trình','#endow',NULL,'0',1,NULL,'2022-05-20 09:25:52','2023-10-12 09:15:43');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_02_08_023955_options',2),(4,'2020_02_08_044140_create_products_table',3),(5,'2020_02_08_045010_create_posts_table',3),(7,'2020_02_10_063827_image',4),(8,'2020_02_10_084326_menu_group',5),(9,'2020_02_10_084501_menu',5),(11,'2020_02_10_135818_posts',7),(15,'2020_02_11_094510_services',10),(16,'2020_02_12_014616_pages',11),(17,'2020_02_12_030346_customer',12),(18,'2020_02_12_035913_contact',13),(22,'2020_02_27_152247_categories',14),(23,'2020_04_09_162851_branch',15),(24,'2020_04_09_180411_categories',16),(26,'2020_04_10_150312_products',17),(27,'2020_04_10_161721_product_category',18),(28,'2020_04_10_164157_product_image',19),(29,'2020_04_12_005547_product_questions',20),(30,'2020_04_13_143340_customers',21),(31,'2020_04_13_143638_comments',22),(32,'2020_04_15_020416_orders',23),(33,'2020_04_15_021319_order_detail',23),(34,'2020_04_15_065229_filter',24),(35,'2020_06_01_094153_post_category',25),(36,'2020_06_01_221125_coupons',26),(42,'2020_07_31_170021_category_home_display',28),(43,'2020_08_04_220333_post_category',29),(44,'2021_03_27_214253_init_database',30),(45,'2021_03_28_152939_create_styles',31),(46,'2014_01_07_073615_create_tagged_table',32),(47,'2014_01_07_073615_create_tags_table',32),(48,'2016_06_29_073615_create_tag_groups_table',32),(49,'2016_06_29_073615_update_tags_table',32),(50,'2020_03_13_083515_add_description_to_tags_table',33);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'dev-config','{\"favicon\":\"\\/vongtay\\/uploads\\/images\\/logo.png\",\"logo\":\"\\/vongtay\\/uploads\\/images\\/logo.png\",\"title\":\"Admin\",\"title_login\":\"Login\"}',NULL,'2020-02-07 17:00:00','2020-08-05 16:05:57'),(2,'general','{\"title_hd_2\":\"<h2>H\\u01b0\\u1edbng d\\u1eabn kh&aacute;ch h&agrave;ng m\\u1edf<br \\/>\\r\\nt&agrave;i kho\\u1ea3n t\\u1ea1i <span style=\\\"color:#336d32;\\\">k&ecirc;nh c\\u1ee7a VCBS<\\/span><\\/h2>\",\"hd2\":{\"1697086767284\":{\"image\":\"\\/vcb\\/uploads\\/images\\/step-2-1.png\",\"content\":\"<p>Qu&eacute;t m&atilde; QR b&ecirc;n tr&ecirc;n \\u0111\\u1ec3 \\u0111\\u1ebfn website \\u0111\\u0103ng k&yacute; ho\\u1eb7c truy c\\u1eadp&nbsp;<a href=\\\"https:\\/\\/zhizhibo.vn\\/demo\\/vcbs\\/\\\">T\\u1ea0I \\u0110&Acirc;Y<\\/a><\\/p>\"},\"1697086769922\":{\"image\":\"\\/vcb\\/uploads\\/images\\/Phone%20Mockup%20v2.png\",\"content\":\"<p>Ho&agrave;n thi\\u1ec7n v&agrave; x&aacute;c th\\u1ef1c c&aacute;c th&ocirc;ng tin c&aacute; nh&acirc;n<\\/p>\"},\"1697086771197\":{\"image\":\"\\/vcb\\/uploads\\/images\\/step-2-3.png\",\"content\":\"<p>T\\u1ea1i ph\\u1ea7n &lsquo;&rsquo;K&ecirc;nh gi\\u1edbi thi\\u1ec7u t&agrave;i kho\\u1ea3n&rsquo;&rsquo;.&nbsp;<strong>Ch\\u1ecdn chi nh&aacute;nh ng&acirc;n h&agrave;ng VCB<\\/strong>&nbsp;v&agrave; ch\\u1ecdn chi nh&aacute;nh khu v\\u1ef1c g\\u1ea7n b\\u1ea1n nh\\u1ea5t<\\/p>\"},\"1697086773011\":{\"image\":\"\\/vcb\\/uploads\\/images\\/1111.png\",\"content\":\"<p>Th\\u1ef1c hi\\u1ec7n c&aacute;c b\\u01b0\\u1edbc x&aacute;c th\\u1ef1c cu\\u1ed1i c&ugrave;ng v&agrave; ho&agrave;n t\\u1ea5t vi\\u1ec7c \\u0111\\u0103ng k&yacute;<\\/p>\"}},\"title_hd_1\":\"<h2>H\\u01b0\\u1edbng d\\u1eabn kh&aacute;ch h&agrave;ng m\\u1edf<br \\/>\\r\\nt&agrave;i kho\\u1ea3n tr&ecirc;n <span style=\\\"color:#336d32;\\\">VCB Digibank<\\/span><\\/h2>\",\"hd1\":{\"1697086388648\":{\"image\":\"\\/vcb\\/uploads\\/images\\/step-1-1(1).png\",\"content\":\"<p>Qu&eacute;t m&atilde; QR \\u0111\\u1ec3 m\\u1edf \\u1ee9ng d\\u1ee5ng ho\\u1eb7c truy c\\u1eadp<br \\/>\\r\\n&nbsp;<a href=\\\"#\\\">T\\u1ea0I \\u0110&Acirc;Y<\\/a><\\/p>\"},\"1697086419009\":{\"image\":\"\\/vcb\\/uploads\\/images\\/step-1-2(1).png\",\"content\":\"<p>\\u1ede m&agrave;n h&igrave;nh ch&iacute;nh, t\\u1ea1i m\\u1ee5c \\u0110\\u1ea7u t\\u01b0 h&atilde;y ch\\u1ecdn =&gt;&nbsp;<strong>Ch\\u1ee9ng Kho&aacute;n =&gt; M\\u1edf t&agrave;i kho\\u1ea3n ch\\u1ee9ng kho\\u1ea3n<\\/strong><\\/p>\"},\"1697086501030\":{\"image\":\"\\/vcb\\/uploads\\/images\\/Phone%20Mockup%20v1.png\",\"content\":\"<p>Sau khi nh\\u1eadp t&ecirc;n v&agrave; ch\\u1ecdn v&ugrave;ng mi\\u1ec1n, t&iacute;ch x&aacute;c nh\\u1eadn \\u0111i\\u1ec1u kho\\u1ea3n v&agrave; b\\u1ea5m ti\\u1ebfp t\\u1ee5c<\\/p>\"},\"1697086502980\":{\"image\":\"\\/vcb\\/uploads\\/images\\/step-1-4(1).png\",\"content\":\"<p>Th\\u1ef1c hi\\u1ec7n c&aacute;c b\\u01b0\\u1edbc x&aacute;c th\\u1ef1c v&agrave; ho&agrave;n t\\u1ea5t vi\\u1ec7c \\u0111\\u0103ng k&yacute;<\\/p>\"}},\"title_ht\":\"S\\u1eb5n s\\u00e0ng m\\u1edf t\\u00e0i kho\\u1ea3n ch\\u1ee9ng kho\\u00e1n\\r\\nNh\\u1eadn \\u01b0u \\u0111\\u00e3i c\\u00f9ng VCBS\",\"desc_ht\":\"C\\u00e1c kh\\u00e1ch h\\u00e0ng l\\u1ef1a ch\\u1ecdn h\\u00ecnh th\\u1ee9c m\\u1edf t\\u00e0i kho\\u1ea3n ph\\u00f9 h\\u1ee3p\",\"title_ht_1\":\"D\\u00e0nh cho kh\\u00e1ch h\\u00e0ng\",\"loai_ht_1\":\"\\u0110\\u00e3 c\\u00f3 t\\u00e0i kho\\u1ea3n VCB\",\"nut_ht_1\":\"\\u0110\\u0103ng k\\u00fd ngay\",\"link_ht_1\":\"#instruct-1\",\"title_ht_2\":\"D\\u00e0nh cho kh\\u00e1ch h\\u00e0ng\",\"loai_ht_2\":\"Ch\\u01b0a c\\u00f3 t\\u00e0i kho\\u1ea3n VCB\",\"nut_ht_2\":\"Xem h\\u01b0\\u1edbng d\\u1eabn\",\"link_ht_2\":\"#instruct-2\",\"banner\":\"\\/vcb\\/uploads\\/images\\/banner(2).png\",\"title_banner\":\"M\\u1edf t\\u00e0i kho\\u1ea3n\",\"link_banner\":\"https:\\/\\/vcbs.com.vn\\/ekyc\",\"title_intro\":\"Th\\u00eam \\u01afu \\u0110\\u00e3i - Th\\u00eam G\\u1eafn K\\u1ebft\",\"desc_intro\":\"Ch\\u01b0\\u01a1ng tr\\u00ecnh khuy\\u1ebfn m\\u1ea1i c\\u1ee7a C\\u00f4ng ty ch\\u1ee9ng kho\\u00e1n Vietcombank (VCBS)  \\r\\nD\\u00e0nh ri\\u00eang cho c\\u00e1c kh\\u00e1ch h\\u00e0ng Vietcombank khi m\\u1edf t\\u00e0i kho\\u1ea3n v\\u00e0 giao d\\u1ecbch ch\\u1ee9ng kho\\u00e1n t\\u1ea1i VCBS v\\u1edbi nhi\\u1ec1u \\u01b0u \\u0111\\u00e3i h\\u1ea5p d\\u1eabn.\",\"title_ud_1\":\"<p>Khi giao d\\u1ecbch ch\\u1ee9ng kho\\u1ea3n c\\u01a1 s\\u1edf &amp;<br \\/>\\r\\nch\\u1ee9ng kho&aacute;n ph&aacute;i sinh<\\/p>\",\"banner_ud_1\":\"\\/vcb\\/uploads\\/images\\/box-1.png\",\"title_ud_2\":\"<p>Khi ph&aacute;t sinh giao d\\u1ecbch trong th&aacute;ng m\\u1edf m\\u1edbi.<br \\/>\\r\\nT\\u1ed5ng gi&aacute; tr\\u1ecb khuy\\u1ebfn m\\u1ea1i l&ecirc;n t\\u1edbi 2 t\\u1ef7 \\u0111\\u1ed3ng<\\/p>\",\"banner_ud_2\":\"\\/vcb\\/uploads\\/images\\/box-2.png\",\"title_obj\":\"\\u0110\\u1ed1i t\\u01b0\\u1ee3ng kh\\u00e1ch h\\u00e0ng\",\"des_obj\":\"Kh\\u00e1ch h\\u00e0ng Vietcombank ch\\u01b0a c\\u00f3 t\\u00e0i kho\\u1ea3n ch\\u1ee9ng kho\\u00e1n \\r\\nt\\u1ea1i VCBS trong th\\u1eddi gian khuy\\u1ebfn m\\u1ea1i\",\"dk_obj\":\"\\u0110i\\u1ec1u ki\\u1ec7n \\u00e1p d\\u1ee5ng\",\"link_obj\":\"https:\\/\\/api.vcbs.com.vn\\/storage\\/upload\\/media\\/1-the-le-chuong-trinh-them-uu-dai-them-gan-ket.pdf\",\"logo_ft\":\"\\/vcb\\/uploads\\/images\\/logo-footer.svg\",\"intro\":\"Trang th\\u00f4ng tin \\u0111i\\u1ec7n t\\u1eed - C\\u00f4ng ty TNHH \\r\\nCh\\u1ee9ng Kho\\u00e1n Ng\\u00e2n H\\u00e0ng TMCP \\r\\nNgo\\u1ea1i Th\\u01b0\\u01a1ng Vi\\u1ec7t Nam\",\"address\":\"T\\u1ea7ng 6-7-8, T\\u00f2a nh\\u00e0 Th\\u1ee7 \\u0110\\u00f4, 72 Tr\\u1ea7n H\\u01b0ng \\u0110\\u1ea1o, Ho\\u00e0n Ki\\u1ebfm, H\\u00e0 N\\u1ed9i\",\"hotline\":\"Hotline: 1900 98 9999 - 024 2220 1999\",\"link\":\"https:\\/\\/vcbs.com.vn\\/\",\"link_android\":\"#\",\"link_ios\":\"#\",\"logo\":\"\\/vcb\\/uploads\\/images\\/logo.png\",\"title_event\":\"Th\\u1eddi gian \\u00e1p d\\u1ee5ng ch\\u01b0\\u01a1ng tr\\u00ecnh\",\"time_event\":\"16.01.2023 - 31.12.2023\",\"favicon\":\"\\/vcb\\/uploads\\/images\\/favicon.png\",\"code_facebook\":null,\"google_analytics\":null,\"script\":null,\"logo_share\":null,\"site_title\":\"VCBS\",\"site_description\":\"VCBS\",\"site_keyword\":\"VCBS\",\"social\":{\"1651762284735\":{\"name\":\"Facebook\",\"logo\":\"\\/vcb\\/uploads\\/images\\/sc-1.svg\",\"link\":\"https:\\/\\/www.facebook.com\\/vietcombanksecurities.vcbs\"},\"1651762314830\":{\"name\":\"Youtube\",\"logo\":\"\\/vcb\\/uploads\\/images\\/sc-2.svg\",\"link\":\"https:\\/\\/www.youtube.com\\/@chungkhoanvcbs5610\"},\"1697080453245\":{\"name\":\"Zalo\",\"logo\":\"\\/vcb\\/uploads\\/images\\/sc-4.svg\",\"link\":\"https:\\/\\/zalo.me\\/125600896922853455\"}}}',NULL,'2020-02-09 17:00:00','2023-10-17 07:43:52'),(3,'smtp-config','{\"driver\":\"smtp\",\"host\":\"smtp.gmail.com\",\"port\":\"587\",\"encryption\":\"tls\",\"username\":\"bot030093@gmail.com\",\"password\":\"fsthxteyxthvgoeq\",\"name\":\"Home Tech\"}',NULL,'2020-04-09 11:59:51','2020-12-24 08:32:05');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_name_unique` (`user_name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','Yến','0945631311','ttnyen200198@gmail.com','/vcb/uploads/images/user.svg',NULL,NULL,NULL,'$2y$10$CpF.FWus3KRGUdFEC4yAq.WBKjQnfziU3lh1eYd80TYikcTSh/ZUG',1,1,NULL,'2020-07-28 09:51:39','2023-10-11 19:25:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'vcb_la'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-18 10:18:01
