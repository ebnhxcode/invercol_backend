-- MySQL dump 10.13  Distrib 8.0.15, for Linux (x86_64)
--
-- Host: localhost    Database: invercol_io
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `books` (
  `book_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cargos` (
  `cargo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cargo_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cargo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comunas`
--

DROP TABLE IF EXISTS `comunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comunas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comunas`
--

LOCK TABLES `comunas` WRITE;
/*!40000 ALTER TABLE `comunas` DISABLE KEYS */;
/*!40000 ALTER TABLE `comunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `continentes`
--

DROP TABLE IF EXISTS `continentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `continentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `continentes`
--

LOCK TABLES `continentes` WRITE;
/*!40000 ALTER TABLE `continentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `continentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos`
--

DROP TABLE IF EXISTS `contratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contratos` (
  `contrato_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ficha_id` int(11) DEFAULT NULL,
  `tipo_contrato_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `contrato_fecha_inicio` date DEFAULT NULL,
  `contrato_horas_semanal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contrato_sueldo_base` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contrato_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos`
--

LOCK TABLES `contratos` WRITE;
/*!40000 ALTER TABLE `contratos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cuentas` (
  `cuenta_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cuenta_codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuenta_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuenta_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cuenta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuentas`
--

LOCK TABLES `cuentas` WRITE;
/*!40000 ALTER TABLE `cuentas` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuentas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `establecimientos`
--

DROP TABLE IF EXISTS `establecimientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `establecimientos` (
  `establecimiento_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `establecimiento_rbd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establecimiento_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establecimiento_direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establecimiento_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `comuna_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`establecimiento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `establecimientos`
--

LOCK TABLES `establecimientos` WRITE;
/*!40000 ALTER TABLE `establecimientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `establecimientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ficha_trabajadores`
--

DROP TABLE IF EXISTS `ficha_trabajadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ficha_trabajadores` (
  `ficha_trabajador_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ficha_rut` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha_dv` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha_genero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha_apellido_paterno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha_apellido_materno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ficha_fecha_nacimiento` date DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `establecimiento_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ficha_trabajador_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ficha_trabajadores`
--

LOCK TABLES `ficha_trabajadores` WRITE;
/*!40000 ALTER TABLE `ficha_trabajadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `ficha_trabajadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingresos`
--

DROP TABLE IF EXISTS `ingresos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ingresos` (
  `ingreso_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ingreso_codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingreso_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingreso_descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ingreso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingresos`
--

LOCK TABLES `ingresos` WRITE;
/*!40000 ALTER TABLE `ingresos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingresos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libro_cuentas`
--

DROP TABLE IF EXISTS `libro_cuentas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `libro_cuentas` (
  `libro_cuenta_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libro_id` int(11) DEFAULT NULL,
  `cuenta_id` int(11) DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`libro_cuenta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libro_cuentas`
--

LOCK TABLES `libro_cuentas` WRITE;
/*!40000 ALTER TABLE `libro_cuentas` DISABLE KEYS */;
/*!40000 ALTER TABLE `libro_cuentas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `libros` (
  `libro_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libro_codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libro_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libro_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`libro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2019_02_18_233934_create_books_table',1),(4,'2019_02_18_233943_create_logs_table',1),(5,'2014_10_12_000000_create_users_table',2),(6,'2014_10_12_100000_create_password_resets_table',2),(7,'2019_02_23_221906_create_contratos_table',2),(8,'2019_02_23_221914_create_cargos_table',2),(9,'2019_02_23_221921_create_tipo_documentos_table',2),(10,'2019_02_23_221953_create_subvenciones_table',3),(11,'2019_02_23_222139_create_ficha_trabajadores_table',3),(12,'2019_02_23_222149_create_tipo_contratos_table',3),(13,'2019_02_23_222158_create_establecimientos_table',3),(14,'2019_02_23_222209_create_ingresos_table',3),(15,'2019_02_23_222215_create_cuentas_table',3),(16,'2019_02_23_222224_create_libro_cuentas_table',3),(17,'2019_02_23_222231_create_libros_table',3),(18,'2019_02_23_225810_create_usuarios_table',3),(19,'2019_02_23_231049_create_roles_table',3),(20,'2019_02_23_232524_create_permisos_table',3),(21,'2019_02_24_023007_create_regions_table',3),(22,'2019_02_24_023013_create_comunas_table',3),(23,'2019_02_24_023021_create_continentes_table',3),(24,'2019_02_24_023028_create_pais_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pais`
--

LOCK TABLES `pais` WRITE;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permisos` (
  `permiso_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permiso_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permiso_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permiso_nivel` int(11) DEFAULT NULL,
  `permiso_orden` int(11) DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permiso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `roles` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_orden` int(11) DEFAULT NULL,
  `permiso_id` int(11) DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subvenciones`
--

DROP TABLE IF EXISTS `subvenciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `subvenciones` (
  `subvencion_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subvencion_codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subvencion_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subvencion_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`subvencion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subvenciones`
--

LOCK TABLES `subvenciones` WRITE;
/*!40000 ALTER TABLE `subvenciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `subvenciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_contratos`
--

DROP TABLE IF EXISTS `tipo_contratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipo_contratos` (
  `tipo_contrato_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_contrato_codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_contrato_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_contrato_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tipo_contrato_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_contratos`
--

LOCK TABLES `tipo_contratos` WRITE;
/*!40000 ALTER TABLE `tipo_contratos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_contratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_documentos`
--

DROP TABLE IF EXISTS `tipo_documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipo_documentos` (
  `tipo_documento_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_documento_codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_documento_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_documento_descripcion` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tipo_documento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_documentos`
--

LOCK TABLES `tipo_documentos` WRITE;
/*!40000 ALTER TABLE `tipo_documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `tipo_usuario_id` int(11) DEFAULT NULL,
  `creado_por_usuario_id` int(11) NOT NULL,
  `modificado_por_usuario_id` int(11) NOT NULL,
  `eliminado_por_usuario_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `usuarios_usuario_email_unique` (`usuario_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
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

-- Dump completed on 2019-02-23 22:41:53
