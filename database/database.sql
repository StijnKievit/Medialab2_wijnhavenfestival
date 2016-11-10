-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 11:48 AM
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
(1, 1, 'Verre reizen maken en nieuwe culturen ontdekken', 1, NULL, NULL),
(2, 1, 'Schat zoeken en schepen kapen!', 2, NULL, NULL),
(3, 1, 'De macht hebben over mijn eigen schip', 3, NULL, NULL),
(4, 1, 'De golven, vissen en het zoute water', 4, NULL, NULL),
(5, 2, 'Een exotische vruchtendrank', 1, NULL, NULL),
(6, 2, 'Bier', 2, NULL, NULL),
(7, 2, 'Luxe wijn', 3, NULL, NULL),
(8, 2, 'Witte, frisse wijn', 4, NULL, NULL),
(9, 3, 'In- en verkoper', 1, NULL, NULL),
(10, 3, 'Hacker', 2, NULL, NULL),
(11, 3, 'Projectleider / manager', 3, NULL, NULL),
(12, 3, 'Naar de markt om exotische producten en lekkernijen te vinden', 4, NULL, NULL),
(13, 4, 'Je laten verzorgen in een 5-sterren hotel', 1, NULL, NULL),
(14, 4, 'De bar / kroeg opzoeken', 2, NULL, NULL),
(15, 4, 'Schipper', 3, NULL, NULL),
(16, 4, 'Zeilen om verse vis te vangen voor op de bbq', 4, NULL, NULL),
(17, 5, 'Nieuwe plekken en culturen ontdekken', 1, NULL, NULL),
(18, 5, 'Genieten van het leven', 2, NULL, NULL),
(19, 5, 'Zelfverzekerd en succesvol zijn', 3, NULL, NULL),
(20, 5, 'Hard werken en kwaliteit waarderen', 4, NULL, NULL),
(21, 6, 'Je probeert een deal te sluiten', 1, NULL, NULL),
(22, 6, 'Je laat niet met je sollen en laat zien wie hier de sterkste is!', 2, NULL, NULL),
(23, 6, 'Je probeert een oplossing te vinden', 3, NULL, NULL),
(24, 6, 'Je zet alvast de bbq aan om de sfeer op te vrolijken', 4, NULL, NULL);

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
  `beschrijving` text COLLATE utf8_unicode_ci NOT NULL,
  `zeebonk` int(11) NOT NULL,
  `afbeelding` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_lang` double NOT NULL,
  `location_long` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `show_index` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horecas`
--

INSERT INTO `horecas` (`id`, `naam`, `beschrijving`, `zeebonk`, `afbeelding`, `location_lang`, `location_long`, `created_at`, `updated_at`, `show_index`) VALUES
(1, 'H20tel', 'Het H20tel is een schip, omgetoverd tot 3-sterren-hotel. Tussen 1300 en 1700 kun je genieten van een heerlijke H20-cocktail en een rondvaart door de Wijnhaven. Van 1500 tot 2100 staat er een special tasting event op het programma: samen met de hotelchefs worden er verschillende kleine gerechtjes geserveerd voor de echte fijnproever. De kids kunnen worden geschminkt tot échte zeebonk op het drijvende terras!', 2, 'img/h20tel_1.jpg', 51.917263, 4.487115, NULL, NULL, 0),
(2, 'Hangar 85', 'Hangar 85 is een van de culinaire hotspots van Rotterdam! De zeebonken met een verfijnde smaak zijn hier aan het goede adres. Geniet van oesters, carpaccio, gamba’s, rundvlees en andere kleine culinaire hoogstandjes naast de Vier Leeuwenbrug aan het water. De keuken en de sommelier verzorgen voor jou de perfecte wijn-spijscombinatie!', 3, 'img/Hangar85_1.jpg', 51.917583, 4.486085, NULL, NULL, 0),
(3, 'Encore Bar/Grill', 'Voor de vleesliefhebbende zeebonk is de keuze snel gemaakt: bij Encore Bar & Grill staat de kadeBBQ aan! Binnen kunnen er naar beelden van hoe het er vroeger uitzag gekeken worden. De kinderen kunnen op levensgrote kleurplaten kleuren terwijl de ouders genieten van een Pink Cocktail.', 1, 'img/Encore_1.jpg', 51.917467, 4.485437, NULL, NULL, 0),
(4, 'IBIS', 'Gezellige zeebonken kunnen zich opmaken voor livemuziek en snacks bij het Ibis Hotel terecht. Van 1400 tot 1600 is er een cocktailworkshop bij te wonen. Welke zeebonk maakt het lekkerste brouwsel?', 3, 'img/IbisHotel_1.jpg', 51.917441, 4.488317, NULL, NULL, 0),
(5, 'Alan/Pim''s', 'Hét kiprestaurant van Rotterdam heeft voor het festival heerlijke en gratis kipkluifjes klaargemaakt. Ruwe zeebonken kunnen hier op het zomerse terras uitrusten en een biertje drinken. Er is zowel voor de grote als de kleine eter veel te smullen!', 1, 'img/AlanPims_1.jpg', 51.91758, 4.485134, NULL, NULL, 0),
(6, 'Selfies Place', 'Zeebonken houden van drinken. Zij komen het beste aan hun trekken bij Selfies Place! De gezellige bar heeft een groot scala aan dranken klaarstaan. Geniet van de vele speciaalbieren-en wijnen, waaronder de smaakvolle Boschendal. Kom jij proeven?', 1, 'img/SelfiesPlace_1.jpg', 51.91769, 4.484878, NULL, NULL, 0),
(7, 'Vessel 11', 'Het rode schip van Vessel 11 springt gelijk in het oog als je de Wijnhaven afloopt. De prachtige Engelse gastropub zorgt voor gezelligheid op het terras, waar je kan genieten van een lekker glas bier en een stuk vlees van de barbeque. Welke zeebonk wil dat nou niet?', 2, 'img/Vessel11_1.jpg', 51.917177, 4.484648, NULL, NULL, 0),
(8, 'H20-tel', 'Het H20tel is een schip, omgetoverd tot 3-sterren-hotel. Tussen 1300 en 1700 kun je genieten van een heerlijke H20-cocktail en een rondvaart door de Wijnhaven. Van 1500 tot 2100 staat er een special tasting event op het programma: samen met de hotelchefs worden er verschillende kleine gerechtjes geserveerd voor de echte fijnproever. De kids kunnen worden geschminkt tot échte zeebonk op het drijvende terras!', 4, 'img/h20tel_1.jpg', 51.917263, 4.487115, NULL, NULL, 1),
(9, 'Hangar 85', 'Hangar 85 is een van de culinaire hotspots van Rotterdam! De zeebonken met een verfijnde smaak zijn hier aan het goede adres. Geniet van oesters, carpaccio, gamba’s, rundvlees en andere kleine culinaire hoogstandjes naast de Vier Leeuwenbrug aan het water. De keuken en de sommelier verzorgen voor jou de perfecte wijn-spijscombinatie!', 4, 'img/Hangar85_1.jpg', 51.917583, 4.486085, NULL, NULL, 1),
(10, 'Selfies Place', 'Zeebonken houden van drinken. Zij komen het beste aan hun trekken bij Selfies Place! De gezellige bar heeft een groot scala aan dranken klaarstaan. Geniet van de vele speciaalbieren-en wijnen, waaronder de smaakvolle Boschendal. Kom jij proeven?', 2, 'img/SelfiesPlace_1.jpg', 51.91769, 4.484878, NULL, NULL, 1);

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
(1, 'Handelaar', 'Jij reist de hele wereld over op zoek naar interessante producten. Je komt vaak in aanraking met exotische plekken en mensen.', 'Door je verre reizen en het handelen heb je een voorkeur ontwikkeld voor bijzondere <span class="accent_basic"> kruiden en specerijen</span> met <span class="accent_basic"> exotische dranken </span> en <span class="accent_basic"> speciale bieren </span>!', 'img/Handelsman.png', 13, 6, 1, NULL, NULL),
(2, 'Piraat', 'Varen over de onbekende zeeën zit in jouw bloed! Samen met je mede piraten geniet je van al het mooie dat het zeeleven te bieden heeft. Lekker schepen kapen, rum drinken en schatten plunderen!', 'Niks maakt een piraat blijer dan een lekker sappig stuk <span class="accent_basic">vlees</span> met <span class="accent_basic">bier</span> en <span class="accent_basic">rum</span>!', 'img/Piraat2.png', 16, 14, 1, NULL, NULL),
(3, 'Kapitein', 'Jij bent kapitein van je eigen schip! Je vertelt wat er moet gebeuren en hebt veel verantwoordelijkheid. Gelukkig kan je altijd ontstressen met alle luxe etenswaren en dranken die je tot je beschikking hebt!', 'Als kapitein eet jij graag <span class="accent_basic">tapas</span> met bijzondere <span class="accent_basic"> wijn </span> of een luxe <span class="accent_basic">cocktail</span>!', 'img/Kapitein.png', 18, 17, 1, NULL, NULL),
(4, 'Visser', 'Jij bent een echte zeeman! Elke dag ben je op zee. Je geniet van het zoute water, de golven en de uitgestrekte oceanen. Er gaat voor jou niets boven een goede vangst!', 'Als visser waardeer jij de smaak van goede, verse <span class="accent_basic">vis</span> met een frisse  witte<span class="accent_basic"> wijn.</span> ', 'img/Visser2.png', 24, 19, 1, NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
