-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 04:29 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Macht hebben over mijn eigen schip', 0, NULL, NULL),
(2, 1, 'Schat zoeken en schepen kapen!', 1, NULL, NULL),
(3, 1, 'Verre reizen maken en nieuwe culturen ontdekken', 2, NULL, NULL),
(4, 1, 'De golven, vissen en het zoute water', 3, NULL, NULL),
(5, 2, 'Luxe wijn', 2, NULL, NULL),
(6, 2, 'Bier', 1, NULL, NULL),
(7, 2, 'Een exotische vruchtendrank', 4, NULL, NULL),
(8, 2, 'Witte, frisse wijn', 2, NULL, NULL),
(9, 3, 'Projectleider / manager', 1, NULL, NULL),
(10, 3, 'Hacker', 1, NULL, NULL),
(11, 3, 'In- en verkoper', 1, NULL, NULL),
(12, 3, 'Schipper', 1, NULL, NULL),
(13, 4, 'Je laten verzorgen in je 5-sterren hotel', 1, NULL, NULL),
(14, 4, 'De bar / kroeg opzoeken', 1, NULL, NULL),
(15, 4, 'Naar de markt om exotische producten en lekkernijen te vinden', 1, NULL, NULL),
(16, 4, 'Zeilen om verse vis te vangen voor op de bbq', 1, NULL, NULL),
(17, 5, 'Zelfverzekerd zijn en hoge ambities hebben', 1, NULL, NULL),
(18, 5, 'Vrijheid en genieten van het leven', 1, NULL, NULL),
(19, 5, 'Nieuwe plekken en culturen ontdekken', 1, NULL, NULL),
(20, 5, 'Hard werken en kwaliteit waarderen', 1, NULL, NULL),
(21, 6, 'Je probeert een oplossing te vinden', 1, NULL, NULL),
(22, 6, 'Je laat niet met je sollen en laat zien wie hier de sterkste is!', 1, NULL, NULL),
(23, 6, 'Je probeert een deal te sluiten', 1, NULL, NULL),
(24, 6, 'Je zet alvast de bbq aan om de sfeer op te vrolijken', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(10) UNSIGNED NOT NULL,
  `zeebonk_id` int(11) NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('drank','eten') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `zeebonk_id`, `naam`, `beschrijving`, `afbeelding`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bier', 'een alcoholische drank', '123456', 'drank', NULL, NULL),
(2, 1, 'Friet', 'Lekkere friet', '1234556', 'eten', NULL, NULL),
(3, 2, 'rum', 'een alcoholische drank', '1234562', 'drank', NULL, NULL),
(4, 2, 'kroket', 'Lekkere friet', '1234556', 'eten', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bev_hors`
--

CREATE TABLE `bev_hors` (
  `beverage_id` int(11) NOT NULL,
  `horeca_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bev_hors`
--

INSERT INTO `bev_hors` (`beverage_id`, `horeca_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 2, NULL, NULL),
(4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `horecas`
--

CREATE TABLE `horecas` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zeebonk` int(11) NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_lang` double NOT NULL,
  `location_long` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horecas`
--

INSERT INTO `horecas` (`id`, `naam`, `beschrijving`, `zeebonk`, `afbeelding`, `location_lang`, `location_long`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'This is a test location', 1, 'bla', 123, 123, NULL, NULL),
(2, 'Test3234', 'This is a test location2', 1, 'bla2', 123, 123, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_25_111805_create_zeebonk_table', 1),
('2016_05_25_111843_create_horeca_table', 1),
('2016_05_25_111902_create_beverages_table', 1),
('2016_06_02_090337_create_BevHor_table', 2),
('2016_06_06_083052_create_questions_table', 2),
('2016_06_06_083133_create_answers_table', 2),
('2016_06_06_083316_create_questionsAnswers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `created_at`, `updated_at`) VALUES
(1, 'Wat lijkt jou het mooist aan het leven op zee?', NULL, NULL),
(2, 'Welk drankje drink jij het liefst?', NULL, NULL),
(3, 'Welke baan past het best bij jou?', NULL, NULL),
(4, 'Wat doe jij als je op een tropisch eiland bent?', NULL, NULL),
(5, 'Wat is voor jou belangrijk?', NULL, NULL),
(6, 'Wat doe jij als er ruzie ontstaat binnen de groep?', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionsanswers`
--

CREATE TABLE `questionsanswers` (
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zeebonks`
--

CREATE TABLE `zeebonks` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` text COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving_eten` text COLLATE utf8_unicode_ci NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_value` int(11) NOT NULL,
  `min_value` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zeebonks`
--

INSERT INTO `zeebonks` (`id`, `naam`, `beschrijving`, `beschrijving_eten`, `afbeelding`, `max_value`, `min_value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Handelaar', 'Jij reist de hele wereld over op zoek naar interessante producten. Je komt vaak in aanraking met exotische plekken en mensen.', 'Door je verre reizen en het handelen heb je een voorkeur ontwikkeld voor bijzondere <span class="accent_basic"> kruiden en specerijen</span> met <span class="accent_basic"> exotische dranken </span> en <span class="accent_basic"> speciale bieren </span>!', 'img/Handelsman.png', 5, 1, 1, NULL, NULL),
(2, 'Piraat', 'Varen over de onbekende zeeën zit in jouw bloed! Samen met je mede piraten geniet je van al het mooie dat het zeeleven te bieden heeft. Lekker schepen kapen, rum drinken en schatten plunderen!', 'Niks maakt een piraat blijer dan een lekker sappig stuk <span class="accent_basic">vlees</span> met <span class="accent_basic">bier</span> en <span class="accent_basic">rum</span>!', 'img/Piraat.png', 10, 6, 1, NULL, NULL),
(3, 'Kapitein', 'Jij bent kapitein van je eigen schip! Je vertelt wat er moet gebeuren en hebt veel verantwoordelijkheid. Gelukkig kan je altijd ontstressen met alle luxe etenswaren en dranken die je tot je beschikking hebt!', 'Als kapitein eet jij graag <span class="accent_basic">tapas</span> met bijzondere <span class="accent_basic"> wijn </span> of een luxe <span class="accent_basic">cocktail</span>!', 'img/Kapitein.png', 15, 11, 1, NULL, NULL),
(4, 'Visser', 'Jij bent een echte zeeman! Elke dag ben je op zee. Je geniet van het zoute water, de golven en de uitgestrekte oceanen. Er gaat voor jou niets boven een goede vangst!', 'Als visser waardeer jij de smaak van goede, verse <span class="accent_basic">vis</span> met een frisse witte<span class="accent_basic">wijn </span> ', 'img/Visser2.png', 20, 16, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horecas`
--
ALTER TABLE `horecas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zeebonks`
--
ALTER TABLE `zeebonks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `horecas`
--
ALTER TABLE `horecas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zeebonks`
--
ALTER TABLE `zeebonks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
