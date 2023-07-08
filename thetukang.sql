-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31-0ubuntu0.20.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for thetukang
CREATE DATABASE IF NOT EXISTS `thetukang` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `thetukang`;

-- Dumping structure for table thetukang.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table thetukang.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table thetukang.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table thetukang.orders: ~2 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `status`, `note`, `cancelled_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(5, 2, '1', 'asdasdasd', NULL, '2022-11-16 05:20:22', '2022-11-16 05:20:22', NULL);
INSERT INTO `orders` (`id`, `user_id`, `status`, `note`, `cancelled_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 3, '1', NULL, NULL, '2022-12-01 13:53:23', '2022-12-01 13:53:23', NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table thetukang.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `vendor_id` bigint unsigned DEFAULT NULL,
  `order_id` bigint unsigned DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table thetukang.order_details: ~2 rows (approximately)
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` (`id`, `user_id`, `vendor_id`, `order_id`, `status`, `time`, `date`, `verified_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 2, 1, 5, '1', '08:00:00', '2022-11-25', NULL, '2022-11-16 05:20:22', '2022-11-16 05:20:22', NULL);
INSERT INTO `order_details` (`id`, `user_id`, `vendor_id`, `order_id`, `status`, `time`, `date`, `verified_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(7, 3, 1, 6, '1', '08:00:00', '2022-12-03', NULL, '2022-12-01 13:53:23', '2022-12-01 13:53:23', NULL);
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;

-- Dumping structure for table thetukang.package
CREATE TABLE IF NOT EXISTS `package` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table thetukang.package: ~9 rows (approximately)
/*!40000 ALTER TABLE `package` DISABLE KEYS */;
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'General Cleaning', 50.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 1, 'Comercial', 150.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(3, 1, 'Professional', 250.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(4, 2, 'General Cleaning', 50.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(5, 2, 'Comercial', 150.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(6, 2, 'Professional', 250.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(7, 3, 'General Cleaning', 50.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(8, 3, 'Comercial', 150.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
INSERT INTO `package` (`id`, `vendor_id`, `name`, `price`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(9, 3, 'Professional', 250.00, NULL, '2022-01-15 02:31:56', '2022-01-15 02:31:56', NULL);
/*!40000 ALTER TABLE `package` ENABLE KEYS */;

-- Dumping structure for table thetukang.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table thetukang.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table thetukang.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.permission_role: ~0 rows (approximately)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Dumping structure for table thetukang.permission_user
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.permission_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;

-- Dumping structure for table thetukang.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table thetukang.rating
CREATE TABLE IF NOT EXISTS `rating` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_id` bigint unsigned DEFAULT NULL,
  `score` int DEFAULT NULL COMMENT 'calculation = (s1+s2+s3)/total user',
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_rating_vendor` (`vendor_id`),
  CONSTRAINT `FK_rating_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table thetukang.rating: ~2 rows (approximately)
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` (`id`, `vendor_id`, `score`, `review`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 4, '1', 'approved', '2022-01-15 01:37:17', '2022-01-15 01:37:18', NULL);
INSERT INTO `rating` (`id`, `vendor_id`, `score`, `review`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 1, 3, '1', 'approved', '2022-01-15 01:37:17', '2022-01-15 01:37:18', NULL);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;

-- Dumping structure for table thetukang.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table thetukang.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.role_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Dumping structure for table thetukang.slot_vendor
CREATE TABLE IF NOT EXISTS `slot_vendor` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vendor_id` bigint unsigned DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table thetukang.slot_vendor: ~0 rows (approximately)
/*!40000 ALTER TABLE `slot_vendor` DISABLE KEYS */;
/*!40000 ALTER TABLE `slot_vendor` ENABLE KEYS */;

-- Dumping structure for table thetukang.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `receive_notifications` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thetukang.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `receive_notifications`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Siti', 'siti@pamaweb.com', '01112345679', NULL, NULL, '1', '$2y$10$YHBYB76DMK3LLeal0Cp8guXdgsfx3wD3KeoGcGAq0xL7UZ6xikBqy', NULL, '2022-11-14 05:58:09', '2022-11-14 05:58:09');
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `receive_notifications`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'Halim', 'halim@lidely.com', '60123129312', 'asdasdadsa', NULL, NULL, NULL, NULL, '2022-11-16 05:20:22', '2022-11-16 05:20:22');
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `receive_notifications`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'Faizal', 'faizal@mail.com', '01112345678', 'asdasd asdasdasd asdasdasd asdasd', NULL, NULL, NULL, NULL, '2022-12-01 13:53:23', '2022-12-01 13:53:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table thetukang.vendor
CREATE TABLE IF NOT EXISTS `vendor` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table thetukang.vendor: ~3 rows (approximately)
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
INSERT INTO `vendor` (`id`, `name`, `location`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Yes Maid Cleaning', 'Kuala Lumpur', 'theme/images/thumb-01.jpg', '2022-01-01 16:17:16', '2022-01-01 16:17:16', NULL);
INSERT INTO `vendor` (`id`, `name`, `location`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 'Cleaning It Up', 'Kuala Lumpur', 'theme/images/thumb-02.jpg', '2022-01-01 16:17:16', '2022-01-01 16:17:16', NULL);
INSERT INTO `vendor` (`id`, `name`, `location`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(3, 'Cleaning It Up', 'Kuala Lumpur', 'theme/images/thumb-03.jpg', '2022-01-01 16:17:16', '2022-01-01 16:17:16', NULL);
/*!40000 ALTER TABLE `vendor` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
