-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2024 at 03:48 AM
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
  `Nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = seen, 0 = not seen',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `job_post_id`, `fname`, `lname`, `date_of_birth`, `gender`, `Nationality`, `email`, `phone`, `cv`, `is_seen`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Akib', 'Siddiki', '2024-04-11', 1, 'Bangladeshi', 'akib@gmail.com', '01778974170', 'asfdasf.pdf', 0, 1, NULL, NULL);

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
(2, 'Why Shejda', 'why-shejda', 'Shejda aspires to weave an unprecedented experience of fine living cocooned in comfort for you. It’s the statement of prestige and elegant Architecture that sets us apart.', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:35:26'),
(3, 'Our Story', 'our-story', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore obcaecati deserunt distinctio neque quas, quasi illum temporibus, dolorem nobis officia repellat explicabo laborum molestiae repellendus amet magni officiis praesentium soluta exercitationem. Sed ipsa repellat similique repellendus animi? Tenetur, sed? Quos vitae culpa ducimus enim, possimus eligendi quod minima eum quibusdam?\r\n\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur natus nemo quae voluptate est repudiandae laboriosam dolor deserunt iure a asperiores deleniti alias incidunt totam atque distinctio ratione hic voluptates veniam consectetur, unde ab, mollitia tempore. Iusto, sint accusamus aspernatur perspiciatis velit consequatur saepe rerum voluptates obcaecati in odit quod quaerat sapiente nesciunt suscipit temporibus totam alias delectus ab minima itaque tenetur recusandae praesentium officiis! Temporibus facere libero illum mollitia quis doloremque et cumque amet corrupti nesciunt ea quo dolor officia, architecto impedit nobis veniam atque odio fugit quod! Beatae voluptatibus natus, voluptas ducimus architecto eius reiciendis est adipisci omnis.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Facere, dolorem cupiditate rerum culpa, consequuntur sit blanditiis nobis alias aperiam sapiente magnam tenetur sunt ducimus eligendi numquam deleniti officiis asperiores dolorum assumenda placeat ipsum praesentium! Placeat provident optio dolores, in aliquid tenetur consequuntur at magni maiores? Reiciendis cumque animi quam quisquam omnis accusantium, qui tempora, libero doloribus repellendus, asperiores quas sapiente.\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat impedit ad nihil blanditiis esse sapiente porro ducimus sunt officia possimus ipsum, totam exercitationem! Magnam sapiente cupiditate corrupti officiis ut at?', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:36:08'),
(4, 'Our Mission', 'our-mission', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe ipsum fuga aliquam odio architecto repellendus ab nisi natus. Illum, ad.', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:36:23'),
(5, 'Our Vision', 'our-vision', 'For Our Clients: Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis asperiores harum consequatur nesciunt, dolores est officiis beatae consequuntur iusto doloremque, quisquam, at blanditiis saepe doloribus et quasi voluptatibus id quae.\r\n\r\nFor Our Investors: Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum vitae obcaecati repellat cum sint nobis?\r\n\r\nFor Our Employees: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minima laborum molestias vitae assumenda eligendi reiciendis ipsa delectus enim! Dolores sequi ipsa iure dolore quis?', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:36:37'),
(6, 'Our Values', 'our-values', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In odio iusto impedit distinctio suscipit, praesentium labore quas est repudiandae, fugit itaque autem aperiam ratione nihil voluptatum molestiae consequuntur, reiciendis aspernatur architecto deserunt optio doloribus. Eveniet!\r\n\r\nExcellence: Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nobis voluptatibus exercitationem quo optio unde!\r\n\r\nInnovation: Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ducimus aliquid provident repellat veniam, porro inventore obcaecati velit harum aspernatur commodi, magnam laudantium rem ab voluptates qui cum. Error, tenetur?\r\n\r\nCommitment: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quo itaque minima odit quidem eligendi explicabo, perferendis eveniet quaerat, omnis consequuntur, culpa asperiores! Nisi nulla repudiandae odit fugit error reiciendis voluptatibus, distinctio est culpa cumque! Enim accusamus doloribus numquam. Dolorem?', NULL, NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:36:52'),
(7, 'Landowners', 'landowners', 'Landowners page content', '/uploads/infoPages/1722965937.jpg', NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:38:57'),
(8, 'Buyers', 'buyers', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur perspiciatis eaque dolores laborum ullam porro, cumque delectus laudantium minima ab distinctio molestias sequi necessitatibus aliquam nesciunt eius dolor earum tempora tenetur voluptas tempore sapiente vitae voluptates velit! Dolore repudiandae obcaecati ipsum corrupti labore, itaque non autem quae rerum facere quod atque consequuntur distinctio placeat maiores, fugit, perferendis quaerat deserunt minima.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita optio laboriosam magni nesciunt officiis tenetur? Quidem cum animi voluptatibus sunt inventore enim. Doloremque quia in porro magnam voluptas, maxime ipsum earum iste dolorem aspernatur placeat nobis similique id? Temporibus totam nisi aperiam recusandae quam ipsam debitis, velit quod vitae rem.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Neque quia aliquam velit vel id assumenda blanditiis cum vitae tempore quibusdam beatae dolore, aliquid nam magni modi dolores at. Est, debitis!', '/uploads/infoPages/1722965958.jpg', NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:39:18'),
(9, 'Customers', 'customers', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis dolores officiis, voluptatibus doloribus modi distinctio quo iste voluptate architecto. Quisquam asperiores praesentium atque enim perferendis minima odit natus? Deserunt repudiandae odit qui. Molestias, maxime aut amet voluptate accusantium repellat cum?\r\n\r\nEmail: ms@shejda.com\r\n\r\nEmail: fms@shejda.com', '/uploads/infoPages/1722965983.jpg', NULL, 1, '2024-08-06 09:09:47', '2024-08-06 11:39:43'),
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
  `Expertise` tinyint UNSIGNED NOT NULL COMMENT '1 = Beginner, 2 = Intermediate, 3 = Expert',
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

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `title`, `type`, `location`, `salary`, `is_negotiable`, `experience`, `Expertise`, `due_date`, `overview`, `description`, `responsibilities`, `required_skills`, `benefits`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Developer 2', 1, 'Dhaka', 4500, 1, 3, 1, '2024-08-25', 'test', NULL, NULL, NULL, NULL, 1, '2024-08-13 13:03:38', '2024-08-13 20:29:46');

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
(19, '2024_08_08_060632_create_projects_table', 11);

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

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `project_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, 2, '/uploads/projects/1723495394.jpg', 1, '2024-08-12 14:43:14', '2024-08-12 14:43:14'),
(10, 2, '/uploads/projects/1723495394.jpg', 1, '2024-08-12 14:43:14', '2024-08-12 14:43:14'),
(11, 2, '/uploads/projects/1723495394.jpg', 1, '2024-08-12 14:43:14', '2024-08-12 14:43:14'),
(12, 2, '/uploads/projects/1723495394.jpg', 1, '2024-08-12 14:43:14', '2024-08-12 14:43:14'),
(13, 2, '/uploads/projects/1723495394.jpg', 1, '2024-08-12 14:43:14', '2024-08-12 14:43:14'),
(14, 3, '/uploads/projects/1723497781.jpg', 1, '2024-08-12 15:23:01', '2024-08-12 15:23:01'),
(15, 3, '/uploads/projects/1723497781.jpg', 1, '2024-08-12 15:23:01', '2024-08-12 15:23:01'),
(16, 3, '/uploads/projects/1723497781.jpg', 1, '2024-08-12 15:23:01', '2024-08-12 15:23:01'),
(17, 3, '/uploads/projects/1723497781.jpg', 1, '2024-08-12 15:23:01', '2024-08-12 15:23:01'),
(18, 5, '/uploads/projects/1723498120.jpg', 1, '2024-08-12 15:28:40', '2024-08-12 15:28:40'),
(19, 5, '/uploads/projects/1723498120.jpg', 1, '2024-08-12 15:28:40', '2024-08-12 15:28:40'),
(20, 5, '/uploads/projects/1723498120.jpg', 1, '2024-08-12 15:28:40', '2024-08-12 15:28:40'),
(21, 5, '/uploads/projects/1723498120.jpg', 1, '2024-08-12 15:28:40', '2024-08-12 15:28:40'),
(22, 5, '/uploads/projects/1723498120.jpg', 1, '2024-08-12 15:28:40', '2024-08-12 15:28:40'),
(23, 6, '/uploads/projects/1723498451.jpg', 1, '2024-08-12 15:34:11', '2024-08-12 15:34:11'),
(24, 6, '/uploads/projects/1723498451.jpg', 1, '2024-08-12 15:34:11', '2024-08-12 15:34:11'),
(25, 6, '/uploads/projects/1723498451.jpg', 1, '2024-08-12 15:34:11', '2024-08-12 15:34:11'),
(26, 7, '/uploads/projects/1723499072.jpg', 1, '2024-08-12 15:44:32', '2024-08-12 15:44:32'),
(27, 7, '/uploads/projects/1723499072.jpg', 1, '2024-08-12 15:44:32', '2024-08-12 15:44:32'),
(28, 7, '/uploads/projects/1723499072.jpg', 1, '2024-08-12 15:44:32', '2024-08-12 15:44:32'),
(29, 7, '/uploads/projects/1723499072.jpg', 1, '2024-08-12 15:44:32', '2024-08-12 15:44:32'),
(30, 7, '/uploads/projects/1723499072.jpg', 1, '2024-08-12 15:44:32', '2024-08-12 15:44:32'),
(31, 7, '/uploads/projects/1723499072.jpg', 1, '2024-08-12 15:44:32', '2024-08-12 15:44:32'),
(32, 9, '/uploads/photos/1723499525.jpg', 1, '2024-08-12 15:52:05', '2024-08-12 15:52:05'),
(33, 9, '/uploads/photos/1723499525.jpg', 1, '2024-08-12 15:52:05', '2024-08-12 15:52:05'),
(34, 9, '/uploads/photos/1723499525.jpg', 1, '2024-08-12 15:52:05', '2024-08-12 15:52:05'),
(35, 10, '/uploads/photos/1723500095.jpg', 1, '2024-08-12 16:01:35', '2024-08-12 16:01:35'),
(36, 10, '/uploads/photos/1723500095.jpg', 1, '2024-08-12 16:01:35', '2024-08-12 16:01:35'),
(37, 10, '/uploads/photos/1723500095.jpg', 1, '2024-08-12 16:01:35', '2024-08-12 16:01:35'),
(38, 10, '/uploads/photos/1723500095.jpg', 1, '2024-08-12 16:01:35', '2024-08-12 16:01:35'),
(39, 11, '/uploads/photos/1723500273.jpg', 1, '2024-08-12 16:04:33', '2024-08-12 16:04:33'),
(40, 11, '/uploads/photos/1723500273.jpg', 1, '2024-08-12 16:04:33', '2024-08-12 16:04:33'),
(41, 11, '/uploads/photos/1723500273.jpg', 1, '2024-08-12 16:04:33', '2024-08-12 16:04:33'),
(42, 11, '/uploads/photos/1723500273.jpg', 1, '2024-08-12 16:04:33', '2024-08-12 16:04:33'),
(43, 11, '/uploads/photos/1723500273.jpg', 1, '2024-08-12 16:04:33', '2024-08-12 16:04:33'),
(44, 11, '/uploads/photos/1723500273.jpg', 1, '2024-08-12 16:04:33', '2024-08-12 16:04:33'),
(45, 12, '/uploads/photos/1723500300.jpg', 1, '2024-08-12 16:05:00', '2024-08-12 16:05:00'),
(46, 12, '/uploads/photos/1723500300.jpg', 1, '2024-08-12 16:05:00', '2024-08-12 16:05:00'),
(47, 12, '/uploads/photos/1723500300.jpg', 1, '2024-08-12 16:05:00', '2024-08-12 16:05:00'),
(48, 12, '/uploads/photos/1723500300.jpg', 1, '2024-08-12 16:05:00', '2024-08-12 16:05:00'),
(49, 12, '/uploads/photos/1723500300.jpg', 1, '2024-08-12 16:05:00', '2024-08-12 16:05:00'),
(50, 12, '/uploads/photos/1723500300.jpg', 1, '2024-08-12 16:05:00', '2024-08-12 16:05:00'),
(75, 13, '/uploads/photos/1723520432.project-g4.jpg', 1, '2024-08-12 21:40:32', '2024-08-12 21:40:32'),
(76, 13, '/uploads/photos/1723520432.project-g5.jpg', 1, '2024-08-12 21:40:32', '2024-08-12 21:40:32'),
(77, 13, '/uploads/photos/1723520432.project-g6.jpg', 1, '2024-08-12 21:40:32', '2024-08-12 21:40:32'),
(78, 13, '/uploads/photos/1723520432.project-g7.jpg', 1, '2024-08-12 21:40:32', '2024-08-12 21:40:32'),
(80, 1, '/uploads/photos/1723661791.project-g3.jpg', 1, '2024-08-14 12:56:31', '2024-08-14 12:56:31'),
(81, 1, '/uploads/photos/1723661791.project-g4.jpg', 1, '2024-08-14 12:56:31', '2024-08-14 12:56:31'),
(82, 1, '/uploads/photos/1723661791.project-g5.jpg', 1, '2024-08-14 12:56:31', '2024-08-14 12:56:31'),
(83, 1, '/uploads/photos/1723661791.project-g6.jpg', 1, '2024-08-14 12:56:31', '2024-08-14 12:56:31'),
(84, 1, '/uploads/photos/1723661791.project-g7.jpg', 1, '2024-08-14 12:56:31', '2024-08-14 12:56:31'),
(85, 1, '/uploads/photos/1723661791.project-g8.jpg', 1, '2024-08-14 12:56:31', '2024-08-14 12:56:31');

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
(1, 'Project X', '/uploads/projects/1723660014.jpg', '<p>loremn asd asm askjd ajsd a</p><p>asdj askdaskdkaskdloasksdka</p><p>sd asdk asdaksdkakd</p>', 'Dhaka International', 'Sumon Kaiser', 'Dhanmondi 8/A', '65,000 SF', '2018', 'Hospital', 2, 3, 1, '2024-08-14 12:26:54', '2024-08-14 12:27:51');

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

--
-- Dumping data for table `project_bookings`
--

INSERT INTO `project_bookings` (`id`, `project_id`, `name`, `email`, `phone`, `message`, `status`, `is_seen`, `created_at`, `updated_at`) VALUES
(1, 13, 'John Doe', 'john@example.com', '1234567890', 'This is a test message', 1, 1, '2024-08-12 21:50:34', '2024-08-12 22:14:02'),
(2, 1, 'Super Admin', 'akib.siddiki@gmail.com', '01778974170', 'hi', 1, 0, '2024-08-14 14:11:04', '2024-08-14 14:11:04');

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
(6, 'Banner 3', '/uploads/sliders/1722766501.jpg', 1, '2024-08-04 04:15:01', '2024-08-04 04:15:01'),
(7, 'Banner 2', '/uploads/sliders/1722766583.jpg', 1, '2024-08-04 04:16:23', '2024-08-04 04:16:23');

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
(1, 'Super Admin', 'assets/img/avatars/1722960835.png', 'root', 'admin@admin.com', '$2y$12$6sOfS7hQQnE.7LvsF0y0xO9iHWveQn64tTXrfvIX1TpIDfFQh9wMq', 1, 1, '2024-08-02 05:51:07', '2024-08-06 10:13:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_bookings`
--
ALTER TABLE `project_bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
