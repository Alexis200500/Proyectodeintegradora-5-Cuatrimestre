/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - alquiladoraaecnbase2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`alquiladoraaecnbase2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `alquiladoraaecnbase2`;

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `appaterno` varchar(15) NOT NULL,
  `apmaterno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`nombre`,`appaterno`,`apmaterno`,`email`,`telefono`,`direccion`,`created_at`,`updated_at`) values 
(1,'Omar','Chong','Lopez','al221811717@gmail.com','7291417611','Ocoyoacac estado de mexico','2020-01-11 08:51:00','2020-01-11 08:51:00'),
(2,'Alexis','Morales','Gómez','al221811729@gmail.com','1234567890','Fe','2021-12-26 22:03:15','2021-12-26 22:03:15');

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `idemp` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `appat` varchar(15) NOT NULL,
  `apmat` varchar(15) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idemp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `empleados` */

insert  into `empleados`(`idemp`,`nombre`,`appat`,`apmat`,`telefono`,`direccion`,`created_at`,`updated_at`) values 
(1,'Alexis','Morales','Gómez','1234567890','Fe','2021-12-26 22:03:35','2021-12-26 22:03:35');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2020_04_12_201923_create_usuario_table',1),
(4,'2020_04_12_202028_create_cliente_table',1),
(5,'2020_04_12_202127_create_empleado_table',1),
(6,'2020_04_12_202202_create_producto_table',1),
(7,'2020_04_12_202245_create_venta_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `caracteristicas` varchar(255) NOT NULL,
  `falla` varchar(255) NOT NULL,
  `cantidad` char(255) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `productos` */

insert  into `productos`(`id`,`producto`,`serie`,`caracteristicas`,`falla`,`cantidad`,`precio`,`created_at`,`updated_at`) values 
(1,'Laptop lenovo','A093645487se','Procesador core i5','no enciende','1',1500.00,'2020-01-11 08:51:00','2020-01-11 08:51:00'),
(2,'D','D','D','D','2',12.00,'2021-12-26 22:04:08','2021-12-26 22:04:08');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idusuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idusuario`,`nombre`,`usuario`,`email`,`password`,`created_at`,`updated_at`) values 
(1,'Alexis','Alexis','al221811729@gmail.com','12345',NULL,NULL),
(2,'Omar Chong López','omar@gmail.com','omar@gmail.com','12345','2021-12-26 22:02:52','2021-12-26 22:02:52');

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `venta` varchar(255) NOT NULL,
  `cantidad` char(255) NOT NULL,
  `precio` char(255) NOT NULL,
  `caracteristicas` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ventas` */

insert  into `ventas`(`id`,`venta`,`cantidad`,`precio`,`caracteristicas`,`descripcion`,`cliente`,`created_at`,`updated_at`) values 
(1,'sistema de administracion','1','1500','Laravel y mysql','sistema con mysql y laravel apto para tiendas oline','Qualamex','2020-01-11 08:51:00','2020-01-11 08:51:00'),
(2,'d','3','3','D','3d','d','2021-12-26 22:04:28','2021-12-26 22:04:28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
