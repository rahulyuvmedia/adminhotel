-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 12:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `idproff` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('SUPERADMIN','ADMIN','USER') DEFAULT 'ADMIN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `business_name`, `mobile`, `email`, `email_verified_at`, `password`, `idproff`, `address`, `status`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Rahul sony', 'Car business', '09588871256', 'rahulsoni@admin.com', NULL, '$2y$10$cNYbVTzeKxL5Rg5/rnRADeGeAo3ENAOr5aVf1mPxze/0SXoRNLDCq', '1700822348.jpg', 'Ajmer', '0', NULL, '2020-07-07 18:30:00', '2023-11-25 10:18:52', 'SUPERADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `category` varchar(200) DEFAULT NULL,
  `uploaded_by` int(11) DEFAULT '1',
  `file_path` varchar(255) DEFAULT 'assets/images/blog/default.png',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `category`, `uploaded_by`, `file_path`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Velit consectetur saepe adipisci pariatur laboriosam sit. Dolores qui et expedita rerum earum quia. Optio cumque quia dolor et. Doloremque provident vero suscipit.', 'Doloremque et reprehenderit tempore natus a animi. Corrupti porro ea voluptatem id. Excepturi atque aut perferendis. Consequatur sapiente qui distinctio totam eligendi.', '1', 1, 'assets/images/blog/default_news_a.jpg', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(2, 'Iste qui est ea facere quisquam rem. Magnam saepe qui consequatur qui iste delectus alias. Aliquam iusto quas voluptas commodi molestiae.', 'Et ipsum beatae consequatur. Ut provident id aliquam debitis enim. Cupiditate aliquam qui repellendus ad saepe. Voluptate alias qui fugiat nihil aut aspernatur. Laboriosam modi et quia nihil voluptate molestias porro.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(3, 'Eos voluptatem dolorem laudantium facere ipsa aut. Qui illo quaerat eos recusandae culpa. Molestias et voluptates fugit ab totam laboriosam. Rem libero maxime perferendis facilis hic architecto.', 'Accusamus minima in nulla aut eos consequuntur vitae est. Ad quod ab at quo dolores porro. Voluptatem molestiae dolorem a unde nobis laudantium totam.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(4, 'Reiciendis dolores in sunt illo. Repudiandae deleniti soluta tempore voluptatum consectetur voluptatem perspiciatis. Rerum qui eius aut adipisci.', 'Quam aut eos ullam. Dolor et vitae aut maxime. Ducimus qui harum voluptatum deserunt dolorum corporis tempore.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(5, 'Vel numquam non ipsam amet dicta doloremque eligendi. Nulla rerum aut reiciendis voluptas mollitia et. Atque iste dolor animi neque consequuntur labore doloribus.', 'Dolorem unde tempora eum. Velit eum velit quia in repudiandae natus et incidunt. Corrupti eum dolor nobis est quibusdam. Velit iusto consectetur reiciendis ex aut consequuntur odit. Excepturi laborum est occaecati fugiat voluptas.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(6, 'Sed qui inventore voluptas iste pariatur nihil fugiat. Laboriosam nam fugiat odit temporibus et. Porro omnis quaerat nobis voluptas et cupiditate nam. Ut id eum eos. Quas voluptatem nobis rem non.', 'Assumenda vel tenetur saepe repellendus amet. Quo qui placeat aut et laborum magnam. Corporis et velit quibusdam ipsa. Alias excepturi labore et hic necessitatibus dicta.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(7, 'Velit at magnam libero quibusdam cum. Accusantium modi porro excepturi sit sequi. Facilis nihil inventore a qui aut.', 'Quia est numquam dolor enim eum est. Amet voluptatem est architecto voluptatem vero vitae ut.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(8, 'Accusamus et sit saepe ut eum. Qui error ipsum dolor optio provident error aut. Et facilis corrupti saepe. Aliquam et omnis quibusdam hic dicta.', 'Ut dolorum aut labore corrupti occaecati ipsa dolores est. Officiis ipsam dolores tenetur sequi velit rerum dolor. Magni debitis pariatur asperiores nesciunt perferendis. Molestiae autem non est veritatis.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(9, 'Repudiandae id aperiam est et. Delectus possimus ipsam est accusamus.', 'Ad maxime et quam sed minima sint quia. Facilis odio et voluptas earum hic quas magnam numquam. Ut debitis cupiditate eos enim.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(10, 'Quis pariatur porro sint vel excepturi. Delectus facilis rerum sed molestiae.', 'Quos harum officia esse sunt in qui natus nihil. Est eligendi sint possimus aut. Quis et qui repellat inventore et. Ut ut ratione id accusamus vel.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:38:13', '2020-07-13 09:38:13'),
(14, 'Quam accusamus molestias qui optio fugiat omnis autem. Reprehenderit adipisci accusantium qui iusto sapiente sed voluptatem quasi. Laboriosam voluptas blanditiis earum amet voluptas sit.', 'Quas laboriosam corporis dolorem id itaque et. Est aut illo alias aut sint. Eaque sunt impedit mollitia nihil impedit repellat architecto.', 'Latest News', 1, 'assets/images/blog/default_news_a.jpg', 1, '2020-07-13 09:41:03', '2020-09-28 06:48:49'),
(15, 'Et deleniti maiores eum consectetur facere inventore. Enim praesentium quo quia praesentium. Est voluptatem qui molestiae voluptas harum. Ut inventore impedit sequi vitae fugit aut est repellat.', 'Adipisci expedita fuga consequatur nobis aut suscipit iusto blanditiis. Magnam accusamus necessitatibus numquam et repellendus aut culpa consectetur. Et quod accusamus ut harum adipisci ab. Vero debitis nobis veniam quia cupiditate voluptates. Pariatur est doloremque eum voluptas incidunt vero quas et.', 'Latest News', 1, 'assets/images/blog/default_news_a.jpg', 1, '2020-07-13 09:41:03', '2020-09-28 06:49:00'),
(16, 'Animi dignissimos natus optio voluptatum officiis. Culpa aspernatur fugit nemo non officia.', 'Mollitia voluptatem est aut similique qui commodi vitae. Est in perspiciatis eligendi eveniet sunt. Quisquam error exercitationem odit aut.', 'Latest News', 1, 'assets/images/blog/default_news_a.jpg', 1, '2020-07-13 09:41:03', '2020-09-28 07:39:46'),
(17, 'Et sit quia veniam qui optio. Ut dolorum illum nemo error neque repellendus. Expedita atque consectetur consequatur.', 'Quas est architecto natus. Non libero repellat tempore ut excepturi recusandae a. Officiis repellendus aut neque aliquam. Tenetur aut placeat iure.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:41:03', '2020-07-13 09:41:03'),
(18, 'Dolor consequatur repudiandae molestias dolorum hic autem corrupti. Et dolores porro totam quidem sequi et. Ab voluptas soluta qui eum assumenda.', 'Dolor provident consequatur autem dicta qui aut. Est non assumenda provident ut. Eos maiores quos molestias alias maxime omnis nisi voluptatibus. Nisi vero quam incidunt ut nobis.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:41:03', '2020-07-13 09:41:03'),
(19, 'Perspiciatis officia qui rerum enim sit non debitis. Omnis nesciunt voluptas saepe optio labore. Dolore voluptatum qui exercitationem optio eum exercitationem.', 'Et assumenda non rerum et. Quibusdam et nam eos qui quia minima sit rerum. Perspiciatis velit impedit fuga magni voluptas voluptas blanditiis eius.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:41:03', '2020-07-13 09:41:03'),
(20, 'Sed eaque enim rerum sapiente dolorem porro aut. Rerum quae debitis deleniti quibusdam veniam. Delectus unde nulla rerum vel sed. Accusantium quae optio animi minus est sed.', 'Corporis est optio exercitationem nesciunt velit quos iste. Consectetur praesentium aliquid ipsa ducimus reiciendis.', '1', 1, 'assets/images/blog/default.png', 1, '2020-07-13 09:41:03', '2020-07-13 09:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` bigint(20) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `idproff` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `hotel_id`, `name`, `email`, `mobile`, `address`, `idproff`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'Rahul soni', 'rahulyuvmedia@gmail.com', '09588871256', 'Ajmer', NULL, '0', '2023-11-25 16:30:23', '2023-11-25 16:30:32'),
(4, 1, 'Rahul soni', 'rahulyuvmedia@gmail.com', '09588871256', 'Ajmer', NULL, '0', '2023-11-25 16:30:29', '2023-11-25 16:30:44'),
(5, 1, 'Rahul soni', 'rahulyuvmedia@gmail.com', '09588871256', 'Ajmer', '1700909380.jpeg', '1', '2023-11-25 16:31:01', '2023-11-25 16:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Master',
  `title` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `type`, `title`, `value`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Master', 'Facilities', 'Facilities', NULL, 'Active', '2023-11-19 13:24:42', '2023-11-19 13:24:42'),
(4, 'Facilities', 'A.C', 'A.C', NULL, 'Active', '2023-11-19 13:24:59', '2023-11-19 13:24:59'),
(5, 'Facilities', 'Refrigerator', 'Refrigerator', NULL, 'Active', '2023-11-19 13:25:45', '2023-11-19 13:25:45'),
(6, 'Facilities', 'Gym', 'Gym', NULL, 'Active', '2023-11-24 04:57:58', '2023-11-24 04:57:58'),
(7, 'Facilities', 'Pool', 'Pool', NULL, 'Active', '2023-11-24 04:58:09', '2023-11-24 04:58:09'),
(8, 'Facilities', 'Lounge', 'Lounge', NULL, 'Active', '2023-11-24 04:58:22', '2023-11-24 04:58:22'),
(9, 'Facilities', 'Bar', 'Bar', NULL, 'Active', '2023-11-24 04:58:31', '2023-11-24 04:58:31'),
(12, 'Facilities', 'Conference', 'Conference', NULL, 'Active', '2023-11-24 04:59:02', '2023-11-24 04:59:02'),
(13, 'Facilities', 'Garden', 'Garden', NULL, 'Active', '2023-11-24 04:59:16', '2023-11-24 04:59:16'),
(14, 'Facilities', 'Parking', 'Parking', NULL, 'Active', '2023-11-24 04:59:26', '2023-11-24 04:59:26'),
(17, 'Facilities', 'Casino', 'Casino', NULL, 'Active', '2023-11-24 05:00:08', '2023-11-24 05:00:08'),
(18, 'Facilities', 'Garden', 'Garden', '1700887710.jpg', 'Active', '2023-11-24 05:00:17', '2023-11-25 05:18:30'),
(19, 'Facilities', 'Shuttle', 'Shuttle', NULL, 'Active', '2023-11-24 04:59:02', '2023-11-24 04:59:02'),
(20, 'Facilities', 'Beach', 'Beach', NULL, 'Active', '2023-11-24 04:59:16', '2023-11-24 04:59:16'),
(21, 'Facilities', 'Studio', 'Studio', NULL, 'Active', '2023-11-24 04:59:26', '2023-11-24 04:59:26'),
(22, 'Facilities', 'Patio', 'Patio', NULL, 'Active', '2023-11-24 05:00:08', '2023-11-24 05:00:08'),
(23, 'Facilities', 'Playground', 'Playground', NULL, 'Active', '2023-11-24 05:00:17', '2023-11-24 05:00:17'),
(24, 'Facilities', 'Car', 'Car', '1700887600.jpg', 'Active', '2023-11-25 05:16:40', '2023-11-25 05:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_08_141130_create_admins_table', 2),
(6, '2020_07_08_145603_create_permission_tables', 3),
(7, '2014_10_12_100000_create_password_resets_table', 4),
(8, '2019_02_02_112609_create_settings_table', 4),
(9, '2014_10_12_000000_create_users_table', 5),
(10, '2016_06_01_000001_create_oauth_auth_codes_table', 6),
(11, '2016_06_01_000002_create_oauth_access_tokens_table', 6),
(12, '2016_06_01_000003_create_oauth_refresh_tokens_table', 6),
(13, '2016_06_01_000004_create_oauth_clients_table', 6),
(14, '2016_06_01_000005_create_oauth_personal_access_clients_table', 6),
(16, '2020_07_12_220312_create_blogs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('027ae400a8e608d36a65b1fcc48c85aec9f532a63339286a94fc5e06b1bc8b42e531232518a8118e', 1, 4, 'adminApiToken', '[]', 0, '2020-10-14 09:04:15', '2020-10-14 09:04:15', '2021-10-14 14:34:15'),
('02826cf14cbe647c57f213a10461f84caf66feabb180900f43208d6bddcede55b9c92a8cac12bbf7', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 04:57:47', '2023-11-17 04:57:47', '2024-11-17 10:27:47'),
('05c863060cabdeb27afd6dc83e0d75dab796cceacedbfbc24e71c6c26e82e44bbdf5eb22594eaecc', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 10:10:18', '2023-11-17 10:10:18', '2024-11-17 15:40:18'),
('133dda0a97ab01712477729cfab1a18d1e37c11fd290dc7b618c9ace70aa7b52090fe5824ec8add0', 1, 6, 'adminApiToken', '[]', 0, '2023-11-20 15:52:28', '2023-11-20 15:52:28', '2024-11-20 21:22:28'),
('2215aff36e9611a64056049cbd0733f2113773aaed2ec643984fb4391afa6aeb4ff6b3b5167899a4', 1, 6, 'adminApiToken', '[]', 0, '2023-11-21 15:31:16', '2023-11-21 15:31:16', '2024-11-21 21:01:16'),
('23dc21a55313ab42073261ca2e592ea7fdafd96a55ece2fbe7fe49c9036d4d260a4f8e9a50ef7648', 1, 6, 'adminApiToken', '[]', 0, '2023-11-22 16:33:12', '2023-11-22 16:33:12', '2024-11-22 22:03:12'),
('2563000da7e4575deb080e4f276bec033c5f10ca837f2302da0816777206a8c4b78d0eb3dafa0cdf', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 10:19:53', '2023-11-17 10:19:53', '2024-11-17 15:49:53'),
('2b932eec51553a37af0246139c125acd229f06b23a9ad857c1b555bf3133c9391828a12197dd46ff', 1, 6, 'adminApiToken', '[]', 0, '2023-11-25 05:24:36', '2023-11-25 05:24:36', '2024-11-25 10:54:36'),
('30170513eb317b0ea24bd2a9ecc7720b294378c476f87c89d8f816a180f9b4cd4c1eb333f78e5113', 14, 6, 'adminApiToken', '[]', 0, '2023-11-23 15:30:49', '2023-11-23 15:30:49', '2024-11-23 21:00:49'),
('3388ec71197b07b79f43a34116de9d8aa8cb729b89f1cc6a83b730fb417558f9c2ecb82c3d7a79e3', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:11:56', '2023-11-24 09:11:56', '2024-11-24 14:41:56'),
('33abfdc4b3287a8e997978a26d09e086c0621e7e237e791e1810b3ee65ae60dd3b9fd94d4bd6a773', 13, 6, 'adminApiToken', '[]', 0, '2023-11-23 16:45:18', '2023-11-23 16:45:18', '2024-11-23 22:15:18'),
('34c47befbc4cc9edf0c041ee48e40dc9ff0728f0d32865800b9726f598abc2aad68b69b553319dea', 1, 6, 'adminApiToken', '[]', 0, '2023-11-19 13:36:16', '2023-11-19 13:36:16', '2024-11-19 19:06:16'),
('34cfca8b577333694edb5d4a43e45503ca2478f916462fe0c4d3c64a66dfb59f222dc11b06849cf7', 2, 1, 'userApiToken', '[]', 0, '2020-07-18 11:47:50', '2020-07-18 11:47:50', '2021-07-18 17:17:50'),
('39ce6df5a3ac4be217baf5bb0cd07f0ae3999a8cd958dfc095152a6928634af75064cd726e53e41a', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 06:35:46', '2023-11-17 06:35:46', '2024-11-17 12:05:46'),
('3e0583dd72b48059a26980dd563e6e8fe567b05cca798795334884e43085da0ec1b7173bf1077f34', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 10:36:11', '2023-11-24 10:36:11', '2024-11-24 16:06:11'),
('3e5a35c4db8c6a4ecef2460c4723416b569c16bd139fa7042f443424a41aaccba1f6910e644e74ea', 1, 6, 'adminApiToken', '[]', 0, '2023-11-21 15:50:06', '2023-11-21 15:50:06', '2024-11-21 21:20:06'),
('45d772b26fd6c181e169d0ddb4199ddb6bf9ecc87d25ec7f17d060f99e2707a0bc3b08f96210b432', 1, 6, 'adminApiToken', '[]', 0, '2023-11-22 16:25:24', '2023-11-22 16:25:24', '2024-11-22 21:55:24'),
('4b4f82c2126cf1701546fe9a7f16c4a8e0666d8fd11ec0ccff7dac03838a5b927bcdeb4e8a2b6b2c', 1, 6, 'adminApiToken', '[]', 0, '2023-11-23 17:02:03', '2023-11-23 17:02:03', '2024-11-23 22:32:03'),
('4d074426f496490d32bf0e94c4f40ecba194fed52dbf382721652393c6033ab2c0c067d30ee5a17e', 1, 6, 'adminApiToken', '[]', 0, '2023-11-21 16:45:21', '2023-11-21 16:45:21', '2024-11-21 22:15:21'),
('4f156544d3ba401853bc4edc5ddcfb4052f67eb4a2710754b5fa57a270945f6cd303e3d3f768927f', 1, 6, 'adminApiToken', '[]', 0, '2023-11-20 15:32:06', '2023-11-20 15:32:06', '2024-11-20 21:02:06'),
('56f10fb9645ee96bb2d3602468c24aaa1b31450d833fc25172e582e5c7b39981c1a927f759bce234', 14, 6, 'adminApiToken', '[]', 0, '2023-11-24 04:45:19', '2023-11-24 04:45:19', '2024-11-24 10:15:19'),
('58364735b5926fc1d0b174d039e90728a959a1562b2206150668d0ac3a3d8d272131de85f5af7e03', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 04:53:49', '2023-11-24 04:53:49', '2024-11-24 10:23:49'),
('63064b28f6bdf7e61313c3a446411b366603c82adaa7b37fa20658978055c2bc192f348bf0dd81bd', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 14:49:22', '2023-11-17 14:49:22', '2024-11-17 20:19:22'),
('653ce9fc6cdca134f1bdc586a4463b9f81a86f95983408cb5c7911fa598b1ed2055bd5862d8a12ba', 14, 6, 'adminApiToken', '[]', 0, '2023-11-23 17:01:42', '2023-11-23 17:01:42', '2024-11-23 22:31:42'),
('67cba7b98c79510c5fac62493938fa857b1cf00da731c40c852ec4949f04be06e0dd476a84d94f8f', 1, 4, 'adminApiToken', '[]', 0, '2020-09-27 10:50:50', '2020-09-27 10:50:50', '2021-09-27 16:20:50'),
('6dfafb5839e214eb59fe5775f174253a46328a71201390cbc664505144f4f932af4461806466c240', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:04:41', '2023-11-24 09:04:41', '2024-11-24 14:34:41'),
('818a5db5d8b24822bb1a6bfb7d6e1f5ace85491756fd9ca416ebd08feb183f3157d8cfa348628edf', 1, 6, 'adminApiToken', '[]', 0, '2023-11-25 05:03:15', '2023-11-25 05:03:15', '2024-11-25 10:33:15'),
('81e4869a74db01a73880db615a10449cb9a4373aa75050f3a0457c126af6fa8dc683255cbc531df1', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:03:31', '2023-11-24 09:03:31', '2024-11-24 14:33:31'),
('82d88c1198c88ab1108f89f0107ae645e73fd44c74cac09e0024c3c95e971c6979276f9e85a53186', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:10:37', '2023-11-24 09:10:37', '2024-11-24 14:40:37'),
('85d2972379ee91182ab3131cba0680d63f6ebe4b1a0e14663ae910ece243c6d2afa5076c7df54cbe', 1, 6, 'adminApiToken', '[]', 0, '2023-11-25 09:51:54', '2023-11-25 09:51:54', '2024-11-25 15:21:54'),
('8855b864f40f02bfd080d574253cddce866fc231f2bf2addd382c734fb6f90164c505a8a25760e40', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:21:22', '2023-11-24 09:21:22', '2024-11-24 14:51:22'),
('88a3bc8dcba5431e5571dfa056f12c1ad8181fa09c3878ed96b7b5a3ba992b7db274f504497d3cd8', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 04:57:33', '2023-11-17 04:57:33', '2024-11-17 10:27:33'),
('88b2dfd7fef5aa9b0f2d986f82ace5c932159f079795fc27c4242bd0396d303988da2023a286678b', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 10:44:23', '2023-11-24 10:44:23', '2024-11-24 16:14:23'),
('8f828fd6e98472609145cd4d635854c7250ecf6aca0469066687a4c56d0f632485a1b51d35c8c7a8', 2, 6, 'adminApiToken', '[]', 0, '2023-11-22 16:32:00', '2023-11-22 16:32:00', '2024-11-22 22:02:00'),
('9622efb9862c1154929f2b14667717025a111c080e80f8033c3a31a02ca7e1f03e7d46f89118fa81', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 15:20:34', '2023-11-17 15:20:34', '2024-11-17 20:50:34'),
('a3c42723fe511994594e0fb37d4211f37f123cc5136517468eba14dd06d8a6ec02616880cfe87bcd', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:08:07', '2023-11-24 09:08:07', '2024-11-24 14:38:07'),
('a419addf4ae7bea31145205699c7e95182f9c9957068f6e32554187ab3f7980bc5374635df10a69f', 1, 4, 'adminApiToken', '[]', 0, '2020-09-28 06:46:49', '2020-09-28 06:46:49', '2021-09-28 12:16:49'),
('a41de0c0ced8274e8ab1de4a974e068f3f31c667228c900def5b1a9925ef2b154a562c2aae51b23d', 16, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:11:31', '2023-11-24 09:11:31', '2024-11-24 14:41:31'),
('a63a5ed742a080a9d8cf1379aa60e1ba0b0fbc087ffea1e858144bf92f87931119eedd334ace7ffb', 1, 4, 'adminApiToken', '[]', 0, '2020-10-15 05:50:50', '2020-10-15 05:50:50', '2021-10-15 11:20:50'),
('ab09563fd805d57dc698103035caa419b87a8872d5058901a99919a6770865ef4d1eb0030b7a0f7c', 1, 1, 'userApiToken', '[]', 0, '2020-07-18 11:43:13', '2020-07-18 11:43:13', '2021-07-18 17:13:13'),
('b1d75c0c02477814b02a46f87a47990cb0d18a7fc098f0cd324d0c541e03ef0904aff3dfd52de4f8', 1, 6, 'adminApiToken', '[]', 0, '2023-11-22 15:12:14', '2023-11-22 15:12:14', '2024-11-22 20:42:14'),
('b2213fad4208eb279a7f7116899814438219563cb65eafb287f9683782f60097413bfa083c697e90', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 10:42:59', '2023-11-24 10:42:59', '2024-11-24 16:12:59'),
('b3d9144ffc8321b1e22b3bbf3819cfdcdfe114a653ecacb10eba8153b8f390dcf47b0f50b9a23141', 1, 6, 'adminApiToken', '[]', 0, '2023-11-19 15:46:02', '2023-11-19 15:46:02', '2024-11-19 21:16:02'),
('b42ba31e6fd3bb805e0063eb7ab4ef0dc8d072c681a4a6086170e5ddab9b3d48a1a43251a57babd0', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 10:33:42', '2023-11-24 10:33:42', '2024-11-24 16:03:42'),
('b77a4d43a1f4bee7ae4dfba1f63e779f1f55645428f65034a14a37611f7825e86d2a81476363335f', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:01:55', '2023-11-24 09:01:55', '2024-11-24 14:31:55'),
('bb42f06a00a887377a917efd4b8cc381c39b9a18d9d55ea457976b6deaab1b50a18f8545d407ddab', 1, 4, 'adminApiToken', '[]', 0, '2020-09-27 11:51:14', '2020-09-27 11:51:14', '2021-09-27 17:21:14'),
('bd965e8a461235527257ee6bf7bbd0b868da13dc012b288dda4c89bcd913d7fc19bc9bd1dd47a1ae', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 06:41:24', '2023-11-17 06:41:24', '2024-11-17 12:11:24'),
('c00b8606561acd03d8ea435d0adf7c4ed6d4e69246cc11b989aff0049266483fcbb5c195daf87ada', 15, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:01:09', '2023-11-24 09:01:09', '2024-11-24 14:31:09'),
('c486517628c40aa499a853e17581fc86883081860f211904c3fb777e4bf0367869eda4cff68d0eba', 14, 6, 'adminApiToken', '[]', 0, '2023-11-23 17:06:47', '2023-11-23 17:06:47', '2024-11-23 22:36:47'),
('c5941550f125c7e9d5ce1fa593022a961ad61b265c7e89d5fd328f483df1082d3c60bf9c684a2559', 9, 6, 'adminApiToken', '[]', 0, '2023-11-22 16:08:20', '2023-11-22 16:08:20', '2024-11-22 21:38:20'),
('ceae75e9dc5bff66d5cce333afaefd38d878000919f24c2f240d2e179efc38f68be4934e9ac45993', 1, 6, 'adminApiToken', '[]', 0, '2023-11-17 06:31:39', '2023-11-17 06:31:39', '2024-11-17 12:01:39'),
('d1b7099e0797dc7ff96a6cd63438f8e9038a76c42c08b718da2bd13f4cc34b57b27e1177cc715882', 14, 6, 'adminApiToken', '[]', 0, '2023-11-22 16:13:58', '2023-11-22 16:13:58', '2024-11-22 21:43:58'),
('d9f29ed0d6be329356ca4be84dcae7fa56eeb89df4efbf9fcbe1dfdc882d9befe5abdc2dd9373383', 1, 4, 'Admin', '[]', 0, '2020-09-27 11:42:30', '2020-09-27 11:42:30', '2021-09-27 17:12:30'),
('dc16648ec87d6724dc208898d3483a5862f339d9d95c311959ebb334e9bcc64d7aaae7d64fc73262', 1, 6, 'adminApiToken', '[]', 0, '2023-11-25 11:30:52', '2023-11-25 11:30:52', '2024-11-25 17:00:52'),
('dcf24d9385de348f6322373538b210a7596b880aa7def6aeec7a63e917cd6b8a003a035c9e9e4947', 1, 4, 'adminApiToken', '[]', 0, '2020-09-27 11:50:34', '2020-09-27 11:50:34', '2021-09-27 17:20:34'),
('dd1a304ec7a6e7b197027623524b296d36cd87eb96b2bfc302b9bacfe2e0113962358609d4e041c5', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 09:22:08', '2023-11-24 09:22:08', '2024-11-24 14:52:08'),
('dd2169ac1aeb664a2d52ce8e3af0b279688516a5b6f0680d6ea468c02699410ad08fb32e0850c1b1', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 10:47:23', '2023-11-24 10:47:23', '2024-11-24 16:17:23'),
('dd4095d78985cda7f6c4fb65a50f38bbdd6aae17b829087737c6ba088a20db373f197702dc9b20a8', 2, 6, 'adminApiToken', '[]', 0, '2023-11-20 15:50:53', '2023-11-20 15:50:53', '2024-11-20 21:20:53'),
('e429c657d0d9ee70cf3596289286ec998089bca65b48a28f1fcd73c93e388261943a0c4012c778c5', 1, 6, 'adminApiToken', '[]', 0, '2023-11-20 14:44:36', '2023-11-20 14:44:36', '2024-11-20 20:14:36'),
('e910ee607903ea750a456792d7c14a15abb64d3cf1b8476689843b379a8d323330e7dbc529057af4', 3, 6, 'adminApiToken', '[]', 0, '2023-11-21 15:36:22', '2023-11-21 15:36:22', '2024-11-21 21:06:22'),
('f4a0917c6ee74b3c6d8effcacbd289d1841ccdda34c8f39ae4ff8997bd67951e7c0d9d9a532e543d', 2, 6, 'adminApiToken', '[]', 0, '2023-11-21 17:02:03', '2023-11-21 17:02:03', '2024-11-21 22:32:03'),
('f9a6d897019fff8d6c062b410dad70f7298ca86661f380f43545ee1fa834b110756d6a0fd999033e', 1, 6, 'adminApiToken', '[]', 0, '2023-11-24 07:16:42', '2023-11-24 07:16:42', '2024-11-24 12:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel7 Boilerplate Personal Access Client', 'Ue8FQpWBQqhtri31cNsPRvbNewyfiQZV7oiGglm9', '', 'http://localhost', 1, 0, 0, '2020-07-12 16:10:52', '2020-07-12 16:10:52'),
(2, NULL, 'Laravel7 Boilerplate Password Grant Client', 'YnLJHdBV6qJSQHnAzCD4MAOVTpJ9sSmdnM8T78xY', 'users', 'http://localhost', 0, 1, 0, '2020-07-12 16:10:52', '2020-07-12 16:10:52'),
(3, NULL, 'Moblie Apps', 'ZlnWXAvjeW1CoeKWb6PXI2GfnvjZ3vxrNoQ045E1', 'users', 'http://localhost', 0, 1, 0, '2020-07-18 06:52:38', '2020-07-18 06:52:38'),
(4, NULL, 'Laravel 8 Boilerplate Personal Access Client', 'EE4IEqacN39YjXXXV5LWWzN3odRfeB5Wu9DA9Qfb', NULL, 'http://localhost', 1, 0, 0, '2020-09-26 12:28:06', '2020-09-26 12:28:06'),
(5, NULL, 'Laravel 8 Boilerplate Password Grant Client', 'PHyBfYRldhPzj3UGafU0nuEoh1xiARC9dJi316oe', 'users', 'http://localhost', 0, 1, 0, '2020-09-26 12:28:06', '2020-09-26 12:28:06'),
(6, NULL, 'Laravel Personal Access Client', 'C3m8xDNxJzu7Q8nfJW41e97GJIX92m6lP9MliH6b', NULL, 'http://localhost', 1, 0, 0, '2023-11-17 04:57:22', '2023-11-17 04:57:22'),
(7, NULL, 'Laravel Password Grant Client', '6JMV1qjXRP2sPhoITa6AuzEmVhdbzy8t775vMIir', 'users', 'http://localhost', 0, 1, 0, '2023-11-17 04:57:22', '2023-11-17 04:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-07-12 16:10:52', '2020-07-12 16:10:52'),
(2, 4, '2020-09-26 12:28:06', '2020-09-26 12:28:06'),
(3, 6, '2023-11-17 04:57:22', '2023-11-17 04:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-view', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(2, 'role-create', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(3, 'role-edit', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(4, 'role-delete', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(5, 'permission-view', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(6, 'permission-create', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(7, 'permission-edit', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(8, 'permission-delete', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(9, 'user-view', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(10, 'user-create', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(11, 'user-edit', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(12, 'user-delete', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(13, 'blog-view', 'admin', '2020-07-13 14:07:29', '2020-07-13 14:07:29'),
(14, 'blog-create', 'admin', '2020-07-13 14:07:41', '2020-07-13 14:07:41'),
(15, 'blog-edit', 'admin', '2020-07-13 14:07:49', '2020-07-13 14:07:49'),
(16, 'blog-delete', 'admin', '2020-07-13 14:07:59', '2020-07-13 14:07:59'),
(17, 'operator-create', 'user', '2020-10-14 10:48:41', '2020-10-14 10:48:41'),
(18, 'range-create', 'user', '2020-10-15 05:52:11', '2020-10-15 05:52:11'),
(19, 'range-view', 'user', '2020-10-15 05:52:18', '2020-10-15 05:52:18'),
(20, 'range-edit', 'user', '2020-10-15 05:52:31', '2020-10-15 05:52:31'),
(21, 'range-delete', 'user', '2020-10-15 05:52:37', '2020-10-15 05:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) NOT NULL,
  `guest_id` bigint(20) NOT NULL,
  `room_id` bigint(20) NOT NULL,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `status` enum('pending','confirm','cancel','completed') NOT NULL DEFAULT 'pending',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `guest_id`, `room_id`, `check_in`, `check_out`, `status`, `created_at`, `updated_at`) VALUES
(6, 3, 31, '2023-11-30 16:00:00', '2023-12-01 16:00:00', 'cancel', '2023-11-25 16:30:23', '2023-11-25 16:30:32'),
(7, 4, 31, '2023-11-30 16:00:00', '2023-12-01 16:00:00', 'cancel', '2023-11-25 16:30:29', '2023-11-25 16:30:44'),
(8, 5, 31, '2023-11-26 16:00:00', '2023-11-27 16:00:00', 'pending', '2023-11-25 16:31:01', '2023-11-25 16:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2020-07-08 09:57:14', '2020-07-08 09:57:14'),
(2, 'Operator', 'user', '2020-10-15 05:55:02', '2020-10-15 05:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(18, 2),
(19, 2),
(20, 2),
(21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) NOT NULL,
  `roomNumber` varchar(255) NOT NULL,
  `roomType` enum('single','double','suite') NOT NULL,
  `occupancy` enum('1','2','3','4','5','6') NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `availability` enum('available','booked','outofservice','') NOT NULL,
  `facilities` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `hotel_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomNumber`, `roomType`, `occupancy`, `price`, `availability`, `facilities`, `status`, `created_at`, `updated_at`, `hotel_id`) VALUES
(28, 'F-2', 'single', '1', 6000, 'available', '\"A.C|Refrigerator|Garden|Casino|Garden\"', '1', '2023-11-24 10:34:12', '2023-11-25 14:59:16', 1),
(29, 'F-3', 'single', '1', 6000, 'available', '\"Refrigerator|Conference|Garden|Beach\"', '1', '2023-11-24 10:34:12', '2023-11-25 15:33:38', 1),
(30, 'F-4', 'single', '1', 6000, 'available', '\"A.C|Refrigerator|Casino|Garden\"', '1', '2023-11-24 10:34:12', '2023-11-25 12:35:34', 1),
(31, 'F-5', 'single', '1', 6000, 'booked', '\"A.C|Refrigerator|Casino|Garden\"', '1', '2023-11-24 10:34:12', '2023-11-25 16:31:01', 1),
(32, 'F-6', 'single', '1', 6000, 'available', '\"A.C|Refrigerator|Casino|Garden\"', '1', '2023-11-24 10:34:12', '2023-11-25 12:24:03', 1),
(33, 'F-7', 'single', '1', 6000, 'available', '\"A.C|Refrigerator|Garden|Casino|Garden\"', '1', '2023-11-24 10:34:12', '2023-11-24 17:22:11', 1),
(34, 'F-8', 'single', '1', 6000, 'available', '\"A.C|Refrigerator|Garden|Casino|Garden\"', '1', '2023-11-24 10:34:12', '2023-11-25 14:08:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `eiin` varchar(255) DEFAULT NULL,
  `pabx` varchar(255) DEFAULT NULL,
  `reg` varchar(255) DEFAULT NULL,
  `stablished` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT 'assets/images/logo/favicon.png',
  `social_facebook` varchar(255) DEFAULT 'https://www.facebook.com/',
  `social_twitter` varchar(255) DEFAULT 'https://www.twitter.com/',
  `social_linkedin` varchar(255) DEFAULT 'https://www.linkedin.com/',
  `social_google` varchar(255) DEFAULT 'https://www.google.com/',
  `social_youtube` varchar(255) DEFAULT 'https://www.youtube.com/',
  `layout` varchar(255) NOT NULL DEFAULT '1',
  `maps` text,
  `running_year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `slogan`, `eiin`, `pabx`, `reg`, `stablished`, `email`, `contact`, `address`, `website`, `logo`, `favicon`, `social_facebook`, `social_twitter`, `social_linkedin`, `social_google`, `social_youtube`, `layout`, `maps`, `running_year`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Boilerplate', 'Knowledge is Power', '123', '123', '12345', '2013', 'riyadhahmed777@gmail.com', '+8801531117886', 'Chattogram, Bangladesh', 'http://riyadh.com/', 'assets/images/logo/1598681688.png', 'assets/images/logo/1571036986.png', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', 'https://www.google.com/', 'https://www.youtube.com/', '0', NULL, '2019-2020', '2020-10-14 09:59:11', '2020-10-14 09:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT 'assets/images/users/default.png',
  `status` tinyint(4) DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `file_path`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riyadh Ahmed', 'userone@admin.com', NULL, '$2y$10$NqE8kc.TK6aDdzZurouYleAWOdz7xs654tc6Lt6tvn08RAVerO2tS', 'assets/images/users/1594563348.png', 1, NULL, '2020-07-12 14:45:48', '2020-07-12 15:28:16'),
(2, 'test', 'rahulsoni@admin.com', NULL, '$2y$10$ukb/ro.7X1NnHxGdz929WO36tNvuwOzhD5JtdeBFBBM9C4IFFFUSy', 'assets/images/users/1700493458.jpg', 1, NULL, '2023-11-20 15:47:38', '2023-11-20 15:47:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
