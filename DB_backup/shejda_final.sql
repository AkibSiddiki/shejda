-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2024 at 10:37 AM
-- Server version: 8.0.36
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shejda`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint UNSIGNED NOT NULL,
  `job_post_id` bigint UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` tinyint UNSIGNED NOT NULL COMMENT '1 = male, 2 = female',
  `nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = seen, 0 = not seen',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferred_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferred_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_car_parking_requirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_handover_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facing_of_the_apartment` tinyint UNSIGNED NOT NULL COMMENT '1 = North, 2 = South, 3 = East, 4 = West',
  `preferred_floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_number_of_bedrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum_number_of_bathrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = seen, 0 = not seen',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_pages`
--

CREATE TABLE `info_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_pages`
--

INSERT INTO `info_pages` (`id`, `title`, `slug`, `content`, `image1`, `image2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Shejda', 'welcome-note', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aspernatur iusto porro praesentium enim fugiat ea. Esse dignissimos dolorem unde, optio omnis perspiciatis distinctio autem, tenetur totam recusandae dolores itaque possimus aliquam minima deleniti obcaecati magnam explicabo accusantium architecto excepturi sequi minus. Porro veritatis saepe eligendi a voluptatibus impedit! Quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur laboriosam, veritatis possimus provident quibusdam quis pariatur, reprehenderit voluptatem autem ab distinctio atque numquam vero! Dolore cumque nobis modi, amet maiores incidunt esse vel earum quis at libero velit voluptas quasi minus debitis autem iusto neque sint corporis explicabo provident doloribus consectetur ut. Earum illum quibusdam et quidem, praesentium tenetur, commodi culpa dolorem debitis mollitia ut. At quibusdam suscipit unde harum corrupti beatae, sequi quas eveniet illum voluptatum ipsum pariatur veniam.', '/uploads/infoPages/1722968908.jpg', '/uploads/infoPages/1722970177.jpg', 1, '2024-08-06 09:09:47', '2024-08-06 12:49:37'),
(2, 'Why Shejda', 'why-shejda', 'Shejda aspires to weave an unprecedented experience of fine living cocooned in comfort for you. It’s the statement of prestige and elegant Architecture that sets us apart.', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-19 10:49:04'),
(3, 'Our Story', 'our-story', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore obcaecati deserunt distinctio neque quas, quasi illum temporibus, dolorem nobis officia repellat explicabo laborum molestiae repellendus amet magni officiis praesentium soluta exercitationem. Sed ipsa repellat similique repellendus animi? Tenetur, sed? Quos vitae culpa ducimus enim, possimus eligendi quod minima eum quibusdam? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur natus nemo quae voluptate est repudiandae laboriosam dolor deserunt iure a asperiores deleniti alias incidunt totam atque distinctio ratione hic voluptates veniam consectetur, unde ab, mollitia tempore. Iusto, sint accusamus aspernatur perspiciatis velit consequatur saepe rerum voluptates obcaecati in odit quod quaerat sapiente nesciunt suscipit temporibus totam alias delectus ab minima itaque tenetur recusandae praesentium officiis! Temporibus facere libero illum mollitia quis doloremque et cumque amet corrupti nesciunt ea quo dolor officia, architecto impedit nobis veniam atque odio fugit quod! Beatae voluptatibus natus, voluptas ducimus architecto eius reiciendis est adipisci omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, dolorem cupiditate rerum culpa, consequuntur sit blanditiis nobis alias aperiam sapiente magnam tenetur sunt ducimus eligendi numquam deleniti officiis asperiores dolorum assumenda placeat ipsum praesentium! Placeat provident optio dolores, in aliquid tenetur consequuntur at magni maiores? Reiciendis cumque animi quam quisquam omnis accusantium, qui tempora, libero doloribus repellendus, asperiores quas sapiente. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat impedit ad nihil blanditiis esse sapiente porro ducimus sunt officia possimus ipsum, totam exercitationem! Magnam sapiente cupiditate corrupti officiis ut at?</p>', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-17 09:27:55'),
(4, 'Our Mission', 'our-mission', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe ipsum fuga aliquam odio architecto repellendus ab nisi natus. Illum, ad.</p>', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-17 09:28:03'),
(5, 'Our Vision', 'our-vision', '<p>For Our Clients: Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis asperiores harum consequatur nesciunt, dolores est officiis beatae consequuntur iusto doloremque, quisquam, at blanditiis saepe doloribus et quasi voluptatibus id quae. For Our Investors: Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum vitae obcaecati repellat cum sint nobis? For Our Employees: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minima laborum molestias vitae assumenda eligendi reiciendis ipsa delectus enim! Dolores sequi ipsa iure dolore quis?</p>', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-17 09:28:06'),
(6, 'Our Values', 'our-values', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio iusto impedit distinctio suscipit, praesentium labore quas est repudiandae, fugit itaque autem aperiam ratione nihil voluptatum molestiae consequuntur, reiciendis aspernatur architecto deserunt optio doloribus. Eveniet!\r\n\r\nExcellence: Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nobis voluptatibus exercitationem quo optio unde!\r\n\r\nInnovation: Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ducimus aliquid provident repellat veniam, porro inventore obcaecati velit harum aspernatur commodi, magnam laudantium rem ab voluptates qui cum. Error, tenetur?\r\n\r\nCommitment: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quo itaque minima odit quidem eligendi explicabo, perferendis eveniet quaerat, omnis consequuntur, culpa asperiores! Nisi nulla repudiandae odit fugit error reiciendis voluptatibus, distinctio est culpa cumque! Enim accusamus doloribus numquam. Dolorem?', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:36:52'),
(7, 'Landowners', 'landowners', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita optio laboriosam magni nesciunt officiis tenetur? Quidem cum animi voluptatibus sunt inventore enim. Doloremque quia in porro magnam voluptas, maxime ipsum earum iste dolorem aspernatur placeat nobis similique id? Temporibus totam nisi aperiam recusandae quam ipsam debitis, velit quod vitae rem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quia aliquam velit vel id assumenda blanditiis cum vitae tempore quibusdam beatae dolore, aliquid nam magni modi dolores at. Est, debitis!</p>', '/uploads/infoPages/1722965937.jpg', NULL, 1, '2024-08-06 09:09:47', '2024-08-17 09:42:38'),
(8, 'Buyers', 'buyers', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis eaque dolores laborum ullam porro, cumque delectus laudantium minima ab distinctio molestias sequi necessitatibus aliquam nesciunt eius dolor earum tempora tenetur voluptas tempore sapiente vitae voluptates velit! Dolore repudiandae obcaecati ipsum corrupti labore, itaque non autem quae rerum facere quod atque consequuntur distinctio placeat maiores, fugit, perferendis quaerat deserunt minima. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita optio laboriosam magni nesciunt officiis tenetur? Quidem cum animi voluptatibus sunt inventore enim. Doloremque quia in porro magnam voluptas, maxime ipsum earum iste dolorem aspernatur placeat nobis similique id? Temporibus totam nisi aperiam recusandae quam ipsam debitis, velit quod vitae rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quia aliquam velit vel id assumenda blanditiis cum vitae tempore quibusdam beatae dolore, aliquid nam magni modi dolores at. Est, debitis!</p>', '/uploads/infoPages/1722965958.jpg', NULL, 1, '2024-08-06 09:09:47', '2024-08-17 10:21:12'),
(9, 'Customers', 'customers', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis dolores officiis, voluptatibus doloribus modi distinctio quo iste voluptate architecto. Quisquam asperiores praesentium atque enim perferendis minima odit natus? Deserunt repudiandae odit qui. Molestias, maxime aut amet voluptate accusantium repellat cum?&nbsp;</p><p>Email: <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://ms@shejda.com \">ms@shejda.com&nbsp;</a></p><p>Email: <a href=\"mailto:fms@shejda.com\">fms@shejda.com</a></p>', '/uploads/infoPages/1722965983.jpg', NULL, 1, '2024-08-06 09:09:47', '2024-08-17 10:20:58'),
(10, 'Fill the form and send your query', 'contact-us', 'Contact Us page content', '/uploads/infoPages/1722966179.jpg', NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint UNSIGNED NOT NULL COMMENT '1 = Full time, 2 = Part time, 3 = Internship',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int UNSIGNED NOT NULL,
  `is_negotiable` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = negotiable, 0 = fixed',
  `experience` smallint UNSIGNED NOT NULL COMMENT 'in years',
  `expertise` tinyint UNSIGNED NOT NULL COMMENT '1 = Beginner, 2 = Intermediate, 3 = Expert',
  `due_date` date NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `responsibilities` text COLLATE utf8mb4_unicode_ci,
  `required_skills` text COLLATE utf8mb4_unicode_ci,
  `benefits` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landowners`
--

CREATE TABLE `landowners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` tinyint UNSIGNED NOT NULL COMMENT '1 = Freehold, 2 = Leasehold',
  `facing` tinyint UNSIGNED NOT NULL COMMENT '1 = North, 2 = South, 3 = East, 4 = West',
  `feature` tinyint UNSIGNED NOT NULL COMMENT '1 = Lakeside, 2 = Corner Plot, 3 = Park View, 4 = Main Road, 5 = Others',
  `is_seen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = seen, 0 = not seen',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = seen, 0 = not seen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(4, '2024_08_04_044818_create_sliders_table', 2),
(6, '2024_08_06_143359_create_info_pages_table', 3),
(11, '2024_08_08_062503_create_news_events_table', 4),
(12, '2024_08_08_061703_create_photos_table', 5),
(13, '2024_08_08_062109_create_project_bookings_table', 6),
(16, '2024_08_13_153449_create_jobs_table', 9),
(17, '2024_08_13_155451_create_applicants_table', 10),
(19, '2024_08_08_060632_create_projects_table', 11),
(20, '2024_08_14_030247_create_teams_table', 12),
(21, '2024_08_18_021803_create_messages_table', 13),
(22, '2024_08_18_162026_create_clients_table', 14),
(26, '2024_08_17_154507_create_landowners_table', 15),
(29, '2024_08_21_172807_create_buyers_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `title`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'News test 2', '/uploads/news-events/1723404001.png', '<h2>News test 2</h2>', 1, '2024-08-11 13:20:01', '2024-08-12 12:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `architect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_completed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type` tinyint UNSIGNED NOT NULL DEFAULT '1' COMMENT '1 = residential, 2 = commercial',
  `type` tinyint UNSIGNED NOT NULL DEFAULT '1' COMMENT '1 = upcoming, 2 = ongoing, 3 = completed',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `image`, `description`, `client`, `architect`, `location`, `size`, `year_completed`, `categories`, `property_type`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Project X', '/uploads/projects/1724407683.jpg', '<p>test</p>', 'test', 'tes', 'tsers', 'se', '2024', 'Hospital', 1, 2, 1, '2024-08-23 04:08:03', '2024-08-23 04:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `project_bookings`
--

CREATE TABLE `project_bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `is_seen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = seen, 0 = not seen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Banner 1', '/uploads/sliders/1722766473.jpg', 1, '2024-08-04 04:14:33', '2024-08-04 04:14:33'),
(6, 'Banner 3', '/uploads/sliders/1722766501.jpg', 1, '2024-08-04 04:15:01', '2024-08-23 04:01:45'),
(7, 'Banner 2', '/uploads/sliders/1722766583.jpg', 1, '2024-08-04 04:16:23', '2024-08-04 04:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `position` int UNSIGNED NOT NULL DEFAULT '1',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = DIRECTORS, 2 = OFFICERS',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `designation`, `bio`, `position`, `type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'MR. Bijoy paul', '/uploads/team/1723945500.jpg', 'MANAGING DIRECTOR', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta qui autem quas excepturi delectus illum non, at enim minima commodi alias tempora, reprehenderit dolorum? Quo totam mollitia veniam vel, pariatur, dignissimos vitae molestias dicta asperiores quae aliquam ipsam corporis accusantium expedita tempore sapiente eveniet deserunt consectetur quisquam, nulla sit. Aut deleniti dolorem sint, consequuntur eveniet aliquam impedit doloremque. Hic blanditiis a, vel cumque odio ipsum aliquam tenetur nam, fugiat id culpa. Harum sed, quae, reiciendis quo, quas voluptate minus eos eveniet quasi nesciunt deserunt. Assumenda est sunt reprehenderit. Assumenda, cupiditate aliquid! Eveniet praesentium deserunt nulla, voluptatibus consequuntur dolore fuga asperiores eius quos ipsa facere quasi consequatur deleniti sapiente reprehenderit perferendis maxime provident nihil voluptatum adipisci nisi ex. Amet laborum ratione nostrum, molestias officiis praesentium exercitationem dolor corrupti non aspernatur voluptates in ex, unde voluptatibus ab tempore odio ipsum reiciendis enim architecto libero facilis mollitia. Laboriosam nobis autem incidunt quisquam similique?</p>', 1, '1', 1, '2024-08-17 19:24:28', '2024-08-17 19:59:40'),
(4, 'Akib Khan', '/uploads/team/1723946204.jpg', 'CHIEF EXECUTIVE OFFICER', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iure ducimus nam eius mollitia blanditiis quod fugit quibusdam consequatur eaque nostrum deserunt, sit laborum optio quas perspiciatis necessitatibus. Ad atque libero explicabo expedita alias officia asperiores laborum, omnis vero est quod excepturi natus eum, accusamus rem molestiae quos at delectus eligendi optio? Quaerat nesciunt nostrum aliquam, corrupti ipsa nihil, dolores reprehenderit maiores nobis error iste unde nemo quae iure odio quia quis tenetur voluptate saepe neque similique consequatur voluptas. Ab. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis enim ipsam alias rem magnam aspernatur, corporis, aperiam fuga explicabo debitis odit! Sint, perspiciatis. Asperiores molestiae voluptatibus aperiam laudantium eos modi architecto ex quo excepturi minima. Illo tenetur vitae quisquam nesciunt.</p>', 1, '2', 1, '2024-08-17 19:56:44', '2024-08-17 19:59:45'),
(5, 'Test', '/uploads/team/1724032318.jpg', 'test', '<p>&nbsp;</p>', 2, '2', 0, '2024-08-17 20:05:57', '2024-08-23 04:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint UNSIGNED NOT NULL DEFAULT '2' COMMENT '1 = admin, 2 = moderator',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `username`, `email`, `password`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, 'root', 'admin@admin.com', '$2y$12$6sOfS7hQQnE.7LvsF0y0xO9iHWveQn64tTXrfvIX1TpIDfFQh9wMq', 1, 1, '2024-08-02 05:51:07', '2024-08-06 10:13:55'),
(2, 'Shajda', NULL, 'shajda_root', 'shejda@admin.com', '$2y$12$jZW7Q7OH2Pm.jwRmXTyh0Osjc7Dhnx6fSh/zjejEUJ1yJsc1f3nzi', 1, 1, '2024-08-02 05:51:07', '2024-08-23 04:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `info_pages`
--
ALTER TABLE `info_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `info_pages_slug_unique` (`slug`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landowners`
--
ALTER TABLE `landowners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_bookings`
--
ALTER TABLE `project_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_pages`
--
ALTER TABLE `info_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landowners`
--
ALTER TABLE `landowners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_bookings`
--
ALTER TABLE `project_bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
