/*
SQLyog Ultimate v10.42
MySQL - 5.7.24 : Database - backend_db
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `users` */
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`is_active`,`remember_token`,`created_at`,`updated_at`) values (1,'ISMAEL E. LASTRE ALVAREZ','ismaelfac@gmail.com',NULL,'$2y$10$z6hahjVQWSTZMYgZLLvfIOTBW4UMuL3imP2iX/hBy68Nbb7cdhlry',1,NULL,'2021-05-11 01:39:43','2021-05-11 01:39:43'),(2,'SINFOROSO GUMERSINDO','director@mail.com',NULL,'$2y$10$E8DHw9ywnqffw8Rihk/glu/nVjJ8.bGZq2OrtQ1dJHEQ6lpGu5hum',1,NULL,'2021-05-11 01:39:43','2021-05-11 01:39:43'),(3,'EMPERATRIS BENAVIDEZ ','asistentecomercial@mail.com',NULL,'$2y$10$87.iG6ZktTOwdFStLKqF3e3VMPy.W1at4P6SR1H1uZmIR9jm4GhdS',1,NULL,'2021-05-11 01:39:43','2021-05-11 01:39:43');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `state_customer` enum('Activo','Inactivo','Suspendido') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactivo',
  `type_dni` enum('CC','NIT') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NIT',
  `dni` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkedICR` tinyint(1) NOT NULL DEFAULT '0',
  `checkedTCU` tinyint(1) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_slug_unique` (`slug`),
  UNIQUE KEY `customers_email_unique` (`email`),
  KEY `customers_user_id_foreign` (`user_id`),
  CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2021_04_031_022614_create_services_table',1),(4,'2021_04_29_202107_create_users_table',1),(5,'2021_04_29_202108_create_customers_table',1),(6,'2021_04_30_001835_create_permission_tables',1),(7,'2021_05_08_022318_create_quotes_table',1);

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (1,'Inicio','Ver el home','2021-05-11 01:39:41','2021-05-11 01:39:41'),(2,'Panel','Ver el panel','2021-05-11 01:39:41','2021-05-11 01:39:41'),(3,'Navegar Usuarios','Lista los usuarios del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(4,'Crear Usuarios','Puede crear los usuarios del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(5,'Ver detalle de Usuarios','Ver el detalle de los usuarios del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(6,'Edición de Usuarios','Editar los usuarios del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(7,'Eliminar Usuarios','Eliminar los usuarios del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(8,'Imprimir','Imprimir Usuarios','2021-05-11 01:39:41','2021-05-11 01:39:41'),(9,'Exportar','Exportar Usuarios','2021-05-11 01:39:41','2021-05-11 01:39:41'),(10,'Navegar Roles','Lista los roles del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(11,'Crear roles','Puede crear los roles del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(12,'Ver detalle de roles','Ver el detalle de los roles del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(13,'Edición de roles','Editar los roles del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(14,'Eliminar roles','Eliminar los roles del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(15,'Imprimir','Imprimir Roles','2021-05-11 01:39:41','2021-05-11 01:39:41'),(16,'Exportar','Exportar Roles','2021-05-11 01:39:41','2021-05-11 01:39:41'),(17,'Navegar permisos','Lista los permisos del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(18,'Crear permisos','Puede crear los permisos del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(19,'Ver detalle de permisos','Ver el detalle de los permisos del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(20,'Edición de permisos','Editar los permisos del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(21,'Eliminar permisos','Eliminar los permisos del sistema','2021-05-11 01:39:41','2021-05-11 01:39:41'),(22,'Imprimir','Imprimir Permisos','2021-05-11 01:39:41','2021-05-11 01:39:41'),(23,'Exportar','Exportar Permisos','2021-05-11 01:39:42','2021-05-11 01:39:42'),(24,'Navegar Clientes','Lista los Clientes','2021-05-11 01:39:42','2021-05-11 01:39:42'),(25,'Crear Clientes','Puede crear los clientes','2021-05-11 01:39:42','2021-05-11 01:39:42'),(26,'Ver detalle de Clientes','Ver el detalle de los clientes','2021-05-11 01:39:42','2021-05-11 01:39:42'),(27,'Edición de Clientes','Editar los Clientes','2021-05-11 01:39:42','2021-05-11 01:39:42'),(28,'Eliminar Clientes','Eliminar los Clientes','2021-05-11 01:39:42','2021-05-11 01:39:42'),(29,'Imprimir','Imprimir Clientes','2021-05-11 01:39:42','2021-05-11 01:39:42'),(30,'Exportar','Exportar Clientes','2021-05-11 01:39:42','2021-05-11 01:39:42'),(31,'Navegar Propiedades','Lista los Propiedades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(32,'Crear Propiedades','Puede crear los Propiedades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(33,'Ver detalle de Propiedades','Ver el detalle de los Propiedades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(34,'Edición de Propiedades','Editar los Propiedades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(35,'Eliminar Propiedades','Eliminar los Propiedades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(36,'Imprimir','Imprimir Propiedades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(37,'Exportar','Exportar Propiedades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(38,'Navegar Paises','Lista los Paises','2021-05-11 01:39:42','2021-05-11 01:39:42'),(39,'Crear Paises','Puede crear los Paises','2021-05-11 01:39:42','2021-05-11 01:39:42'),(40,'Ver detalle de Paises','Ver el detalle de los Paises','2021-05-11 01:39:42','2021-05-11 01:39:42'),(41,'Edición de Paises','Editar los Paises','2021-05-11 01:39:42','2021-05-11 01:39:42'),(42,'Eliminar Paises','Eliminar los Paises','2021-05-11 01:39:42','2021-05-11 01:39:42'),(43,'Imprimir','Imprimir','2021-05-11 01:39:42','2021-05-11 01:39:42'),(44,'Exportar','Exportar','2021-05-11 01:39:42','2021-05-11 01:39:42'),(45,'Navegar Departamentos','Lista los Departamentos','2021-05-11 01:39:42','2021-05-11 01:39:42'),(46,'Crear Departamentos','Puede crear los Departamentos','2021-05-11 01:39:42','2021-05-11 01:39:42'),(47,'Ver detalle de Departamentos','Ver el detalle de los Departamentos','2021-05-11 01:39:42','2021-05-11 01:39:42'),(48,'Edición de Departamentos','Editar los Departamentos','2021-05-11 01:39:42','2021-05-11 01:39:42'),(49,'Eliminar Departamentos','Eliminar los Departamentos','2021-05-11 01:39:42','2021-05-11 01:39:42'),(50,'Navegar Municipios','Lista los Municipios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(51,'Crear Municipios','Puede crear los Municipios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(52,'Ver detalle de Municipios','Ver el detalle de los Municipios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(53,'Edición de Municipios','Editar los Municipios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(54,'Eliminar Municipios','Eliminar los Municipios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(55,'Navegar Barrios','Lista los Barrios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(56,'Crear Barrios','Puede crear los Barrios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(57,'Ver detalle de Barrios','Ver el detalle de los Barrios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(58,'Edición de Barrios','Editar los Barrios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(59,'Eliminar Barrios','Eliminar los Barrios','2021-05-11 01:39:42','2021-05-11 01:39:42'),(60,'Navegar Localidades','Lista los Localidades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(61,'Crear Localidades','Puede crear los Localidades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(62,'Ver detalle de Localidades','Ver el detalle de los Localidades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(63,'Edición de Localidades','Editar los Localidades','2021-05-11 01:39:42','2021-05-11 01:39:42'),(64,'Eliminar Localidades','Eliminar los Localidades','2021-05-11 01:39:43','2021-05-11 01:39:43'),(65,'Navegar Propietarios','Lista los Propietarios','2021-05-11 01:39:43','2021-05-11 01:39:43'),(66,'Crear Propietarios','Puede crear los Propietarios','2021-05-11 01:39:43','2021-05-11 01:39:43'),(67,'Ver detalle de Propietarios','Ver el detalle de los Propietarios','2021-05-11 01:39:43','2021-05-11 01:39:43'),(68,'Edición de Propietarios','Editar los Propietarios','2021-05-11 01:39:43','2021-05-11 01:39:43'),(69,'Eliminar Propietarios','Eliminar los Propietarios','2021-05-11 01:39:43','2021-05-11 01:39:43'),(70,'Navegar Contratos','Lista los Contratos','2021-05-11 01:39:43','2021-05-11 01:39:43'),(71,'Crear Contratos','Puede crear los Contratos','2021-05-11 01:39:43','2021-05-11 01:39:43'),(72,'Ver detalle de Contratos','Ver el detalle de los Contratos','2021-05-11 01:39:43','2021-05-11 01:39:43'),(73,'Edición de Contratos','Editar los Contratos','2021-05-11 01:39:43','2021-05-11 01:39:43'),(74,'Eliminar Contratos','Eliminar los Contratos','2021-05-11 01:39:43','2021-05-11 01:39:43');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (1,'Administrador','Acceso total al sistema','2021-05-11 01:39:43','2021-05-11 01:39:43'),(2,'Suspendidos','Sin acceso al sistema','2021-05-11 01:39:43','2021-05-11 01:39:43'),(3,'Auditor','Puede ver o Generar reportes de los modulos','2021-05-11 01:39:43','2021-05-11 01:39:43'),(4,'Asesores','Asignado a los asesores: <br> Permite: Crear, actualizar desactivar.','2021-05-11 01:39:43','2021-05-11 01:39:43');

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `services` */

insert  into `services`(`id`,`title`,`description`,`slug`,`state`) values (1,'MANTENIMIENTO PISCINAS','lorem','mantenimiento-piscinas',1),(2,'MANTENIMIENTO DE AIRES ACONDICIONADOS','lorem','mantenimiento-de-aires-acondicionados',1),(3,'OBRAS CIVILES','lorem','obras-civiles',1),(4,'LAVADO DE MUEBLES','lorem','lavado-de-muebles',1),(5,'INSTALACIONES Y ADECUACIONES','lorem','instalaciones-y-adecuaciones',1),(6,'IMPERMIABILIZACION','lorem','impermiabilizacion',1),(7,'REDES ELECTRICAS','lorem','redes-electricas',1);

/*Table structure for table `quotes` */

DROP TABLE IF EXISTS `quotes`;

CREATE TABLE `quotes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` bigint(20) unsigned NOT NULL,
  `person_type` enum('Persona','Empresa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Persona',
  `names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked_notifications` tinyint(1) NOT NULL DEFAULT '0',
  `checked_rap` tinyint(1) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quotes_service_id_foreign` (`service_id`),
  CONSTRAINT `quotes_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `quotes` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values (1,3),(2,3),(3,3),(4,3),(5,3),(10,3),(15,3),(24,3),(25,3),(26,3),(27,3),(29,3),(30,3),(1,4),(2,4),(3,4),(4,4),(5,4);

