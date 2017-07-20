-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июл 20 2017 г., 17:38
-- Версия сервера: 5.6.34
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `germany`
--

-- --------------------------------------------------------

--
-- Структура таблицы `costs`
--

CREATE TABLE `costs` (
  `id` int(6) NOT NULL,
  `model` varchar(6) NOT NULL,
  `month` varchar(14) NOT NULL,
  `id_costs` int(6) NOT NULL,
  `cost` float NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `costs`
--

INSERT INTO `costs` (`id`, `model`, `month`, `id_costs`, `cost`, `comments`) VALUES
(7, 'plan', 'January', 2, 78, ''),
(8, 'plan', 'January', 5, 450, ''),
(9, 'plan', 'January', 6, 253, ''),
(10, 'plan', 'January', 8, 591, ''),
(11, 'plan', 'January', 9, 505, ''),
(12, 'plan', 'January', 11, 50, ''),
(13, 'plan', 'January', 12, 50, ''),
(14, 'plan', 'January', 13, 220, ''),
(15, 'plan', 'January', 15, 2211, ''),
(16, 'plan', 'January', 17, 1841, ''),
(17, 'plan', 'January', 18, 2000, ''),
(18, 'plan', 'January', 19, 150, '');

-- --------------------------------------------------------

--
-- Структура таблицы `costs_name`
--

CREATE TABLE `costs_name` (
  `id` int(6) NOT NULL,
  `status` varchar(16) NOT NULL,
  `art` varchar(255) NOT NULL,
  `art_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `costs_name`
--

INSERT INTO `costs_name` (`id`, `status`, `art`, `art_ru`) VALUES
(1, 'convertible', 'heating', 'отопление'),
(2, 'convertible', 'general energy', 'электроэнергия - подсветка лестн. площ.'),
(3, 'convertible', 'ground taxes', 'налог на землю'),
(4, 'convertible', 'garbage', 'вывоз мусора'),
(5, 'convertible', 'drainage', 'канализация'),
(6, 'convertible', 'fresh water', 'водопровод'),
(7, 'convertible', 'insurance', 'страхование'),
(8, 'convertible', 'facility management/housekeeper', 'завхоз - управление объектами'),
(9, 'convertible', 'house floor cleaning', 'уборка лестн. пролетов'),
(10, 'convertible', 'other costs', 'прочие затраты'),
(11, 'none convertible', 'energy for empty flats', 'э/э пустых квартир'),
(12, 'none convertible', 'bank costs', 'банковские платежи'),
(13, 'none convertible', 'accounting', 'учет'),
(14, 'none convertible', 'annual financial statement', 'годовая финансовая отчетность'),
(15, 'none convertible', 'renovation', 'ремонт'),
(16, 'none convertible', 'lawyer', 'адвокат'),
(17, 'none convertible', 'property management', 'управление недвижимостью 7% +19%'),
(18, 'none convertible', 'director', 'директор'),
(19, 'none convertible', 'other not convertible costs', 'прочие непокрываемые затраты'),
(20, 'taxes', 'taxes', 'налоги');

-- --------------------------------------------------------

--
-- Структура таблицы `description`
--

CREATE TABLE `description` (
  `id` int(6) NOT NULL,
  `address` varchar(30) NOT NULL,
  `location` varchar(6) NOT NULL,
  `room nr` varchar(10) NOT NULL,
  `space` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `description`
--

INSERT INTO `description` (`id`, `address`, `location`, `room nr`, `space`) VALUES
(1, 'Mozartstraße 20', 'EG', 'office 1', 119.8),
(2, 'Mozartstraße 20', 'EG', 'office 2', 29.11),
(3, 'Mozartstraße 20', '1. OG', 'flat 1', 82.41),
(4, 'Mozartstraße 20', '1. OG', 'flat 2', 36.84),
(5, 'Mozartstraße 20', '1. OG', 'flat 3', 49.25),
(6, 'Mozartstraße 20', '2. OG', 'flat 5', 90),
(7, 'Mozartstraße 20', '2. OG', 'flat 6', 50),
(8, 'Mozartstraße 20', '2. OG', 'flat 7', 30),
(9, 'Mozartstraße 20', '3. OG', 'flat 8', 121.53),
(10, 'Mozartstraße 20', '3. OG', 'flat 10', 49.75),
(11, 'Mozartstraße 20', '4. OG', 'flat 11', 23.53),
(12, 'Mozartstraße 20', '4. OG', 'flat 12', 42.02),
(13, 'Mozartstraße 20', '4. OG', 'flat 13', 30.79),
(14, 'Mozartstraße 20', '4. OG', 'flat 14', 33.88),
(15, 'Mozartstraße 20', 'DG', 'flat 15', 46.98),
(16, 'Duisburger Str. 101', 'EG', 'flat 1', 28.8),
(17, 'Duisburger Str. 101', 'EG', 'flat 2', 24),
(18, 'Duisburger Str. 101', '1. OG', 'flat 3', 28.8),
(19, 'Duisburger Str. 101', '1. OG', 'flat 4', 29.2),
(20, 'Duisburger Str. 101', '1. OG', 'flat 5', 20.3),
(21, 'Duisburger Str. 101', '1. OG', 'flat 6', 19.8),
(22, 'Duisburger Str. 101', '2. OG', 'flat 7', 28.8),
(23, 'Duisburger Str. 101', '2. OG', 'flat 8', 29.2),
(24, 'Duisburger Str. 101', '2. OG', 'flat 9', 20.3),
(25, 'Duisburger Str. 101', '2. OG', 'flat 10', 19.8),
(26, 'Duisburger Str. 101', '3. OG', 'flat 11', 28.8),
(27, 'Duisburger Str. 101', '3. OG', 'flat 12', 29.2),
(28, 'Duisburger Str. 101', '3. OG', 'flat 13', 20.3),
(29, 'Duisburger Str. 101', '3. OG', 'flat 14', 19.8),
(30, 'Duisburger Str. 101', '4. OG', 'flat 15', 39.6),
(31, 'Duisburger Str. 101', '4. OG', 'flat 16', 19.73),
(32, 'Duisburger Str. 101', '4. OG', 'flat 17', 20.1),
(33, 'Duisburger Str. 101', '5. OG', 'flat 18', 28.8),
(34, 'Duisburger Str. 101', '5. OG', 'flat 19', 18.1),
(35, 'Duisburger Str. 101', '5. OG', 'flat 20', 28.8),
(36, 'Duisburger Str. 103', 'EG', 'flat 1', 32.8),
(37, 'Duisburger Str. 103', 'EG', 'flat 2', 42),
(38, 'Duisburger Str. 103', '1. OG', 'flat 3', 38.6),
(39, 'Duisburger Str. 103', '1. OG', 'flat 4', 42),
(40, 'Duisburger Str. 103', '2. OG', 'flat 5', 38.6),
(41, 'Duisburger Str. 103', '2. OG', 'flat 6', 42),
(42, 'Duisburger Str. 103', '3. OG', 'flat 7', 38.6),
(43, 'Duisburger Str. 103', '3. OG', 'flat 8', 42),
(44, 'Duisburger Str. 103', '4. OG', 'flat 9', 26),
(45, 'Duisburger Str. 103', '4. OG', 'flat 10', 42.1),
(46, 'Duisburger Str. 103', 'DG', 'flat 11', 66),
(47, 'Garden/Garage', 'Garage', '1', 0),
(48, 'Garden/Garage', 'Garage', '2', 0),
(49, 'Garden/Garage', 'Garage', '3', 0),
(50, 'Garden/Garage', 'Garage', '4', 0),
(51, 'Garden/Garage', 'Garage', '5', 0),
(52, 'Garden/Garage', 'Garten', '1', 0),
(53, 'Garden/Garage', 'Garage', '6', 0),
(54, 'Garden/Garage', 'Garage', '7', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `rental`
--

CREATE TABLE `rental` (
  `id` int(6) NOT NULL,
  `model` varchar(6) NOT NULL,
  `month` varchar(14) NOT NULL,
  `id_description` int(6) NOT NULL,
  `purpose` varchar(24) NOT NULL,
  `cost` float NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rental`
--

INSERT INTO `rental` (`id`, `model`, `month`, `id_description`, `purpose`, `cost`, `comments`) VALUES
(2, 'plan', 'January', 1, 'Rent_plan', 1200, ''),
(3, 'plan', 'January', 1, 'Costs_plan', 140, ''),
(4, 'plan', 'January', 1, 'Heating_plan', 100, ''),
(5, 'plan', 'January', 2, 'Rent_plan', 200, ''),
(6, 'plan', 'January', 2, 'Costs_plan', 55, ''),
(7, 'plan', 'January', 2, 'Heating_plan', 45, ''),
(8, 'plan', 'January', 3, 'Rent_plan', 795, ''),
(9, 'plan', 'January', 3, 'Costs_plan', 75, ''),
(10, 'plan', 'January', 3, 'Heating_plan', 55, ''),
(11, 'plan', 'January', 3, 'Cable_TV', 17, ''),
(12, 'plan', 'January', 4, 'Rent_plan', 485, ''),
(13, 'plan', 'January', 4, 'Costs_plan', 55, ''),
(14, 'plan', 'January', 4, 'Heating_plan', 30, ''),
(15, 'plan', 'January', 4, 'Cable_TV', 17, ''),
(16, 'plan', 'January', 5, 'Rent_plan', 404, ''),
(17, 'plan', 'January', 5, 'Costs_plan', 61, ''),
(18, 'plan', 'January', 5, 'Heating_plan', 22, ''),
(19, 'plan', 'January', 5, 'Cable_TV', 9, ''),
(20, 'plan', 'January', 6, 'Rent_plan', 900, ''),
(21, 'plan', 'January', 6, 'Costs_plan', 160, ''),
(22, 'plan', 'January', 6, 'Heating_plan', 150, ''),
(23, 'plan', 'January', 7, 'Rent_plan', 650, ''),
(24, 'plan', 'January', 7, 'Costs_plan', 55, ''),
(25, 'plan', 'January', 7, 'Heating_plan', 30, ''),
(26, 'plan', 'January', 7, 'Cable_TV', 17, ''),
(27, 'plan', 'January', 8, 'Rent_plan', 480, ''),
(28, 'plan', 'January', 8, 'Costs_plan', 55, ''),
(29, 'plan', 'January', 8, 'Heating_plan', 30, ''),
(30, 'plan', 'January', 8, 'Cable_TV', 17, ''),
(31, 'plan', 'January', 9, 'Rent_plan', 1450, ''),
(32, 'plan', 'January', 9, 'Costs_plan', 128, ''),
(33, 'plan', 'January', 9, 'Heating_plan', 90, ''),
(34, 'plan', 'January', 9, 'Cable_TV', 17, ''),
(35, 'plan', 'January', 10, 'Rent_plan', 525, ''),
(36, 'plan', 'January', 10, 'Costs_plan', 65, ''),
(37, 'plan', 'January', 10, 'Heating_plan', 40, ''),
(38, 'plan', 'January', 10, 'Cable_TV', 17, ''),
(39, 'plan', 'January', 11, 'Rent_plan', 355, ''),
(40, 'plan', 'January', 11, 'Costs_plan', 50, ''),
(41, 'plan', 'January', 11, 'Heating_plan', 20, ''),
(42, 'plan', 'January', 11, 'Cable_TV', 17, ''),
(43, 'plan', 'January', 12, 'Rent_plan', 485, ''),
(44, 'plan', 'January', 12, 'Costs_plan', 65, ''),
(45, 'plan', 'January', 12, 'Heating_plan', 40, ''),
(46, 'plan', 'January', 12, 'Cable_TV', 17, ''),
(47, 'plan', 'January', 13, 'Rent_plan', 490, ''),
(48, 'plan', 'January', 13, 'Costs_plan', 45, ''),
(49, 'plan', 'January', 13, 'Heating_plan', 35, ''),
(50, 'plan', 'January', 14, 'Rent_plan', 495, ''),
(51, 'plan', 'January', 14, 'Costs_plan', 55, ''),
(52, 'plan', 'January', 14, 'Heating_plan', 35, ''),
(53, 'plan', 'January', 14, 'Cable_TV', 17, ''),
(54, 'plan', 'January', 15, 'Rent_plan', 485, ''),
(55, 'plan', 'January', 15, 'Costs_plan', 60, ''),
(56, 'plan', 'January', 15, 'Heating_plan', 25, ''),
(57, 'plan', 'January', 15, 'Cable_TV', 17, ''),
(58, 'plan', 'January', 16, 'Rent_plan', 310, ''),
(59, 'plan', 'January', 16, 'Costs_plan', 75, ''),
(60, 'plan', 'January', 16, 'Heating_plan', 40, ''),
(61, 'plan', 'January', 16, 'Cable_TV', 15, ''),
(62, 'plan', 'January', 17, 'Rent_plan', 150, ''),
(63, 'plan', 'January', 17, 'Costs_plan', 50, ''),
(64, 'plan', 'January', 17, 'Heating_plan', 20, ''),
(65, 'plan', 'January', 17, 'Cable_TV', 15, ''),
(66, 'plan', 'January', 18, 'Rent_plan', 457, ''),
(67, 'plan', 'January', 18, 'Costs_plan', 58, ''),
(68, 'plan', 'January', 18, 'Heating_plan', 30, ''),
(69, 'plan', 'January', 19, 'Rent_plan', 360, ''),
(70, 'plan', 'January', 19, 'Costs_plan', 75, ''),
(71, 'plan', 'January', 19, 'Heating_plan', 70, ''),
(72, 'plan', 'January', 19, 'Cable_TV', 15, ''),
(73, 'plan', 'January', 20, 'Rent_plan', 350, ''),
(74, 'plan', 'January', 20, 'Costs_plan', 50, ''),
(75, 'plan', 'January', 20, 'Heating_plan', 20, ''),
(76, 'plan', 'January', 20, 'Cable_TV', 17, ''),
(77, 'plan', 'January', 21, 'Rent_plan', 255, ''),
(78, 'plan', 'January', 21, 'Costs_plan', 50, ''),
(79, 'plan', 'January', 21, 'Heating_plan', 20, ''),
(80, 'plan', 'January', 21, 'Cable_TV', 15, ''),
(81, 'plan', 'January', 22, 'Rent_plan', 342, ''),
(82, 'plan', 'January', 22, 'Costs_plan', 57, ''),
(83, 'plan', 'January', 22, 'Heating_plan', 30, ''),
(84, 'plan', 'January', 23, 'Rent_plan', 470, ''),
(85, 'plan', 'January', 23, 'Costs_plan', 45, ''),
(86, 'plan', 'January', 23, 'Heating_plan', 35, ''),
(87, 'plan', 'January', 24, 'Rent_plan', 285, ''),
(88, 'plan', 'January', 24, 'Costs_plan', 50, ''),
(89, 'plan', 'January', 24, 'Heating_plan', 20, ''),
(90, 'plan', 'January', 24, 'Cable_TV', 15, ''),
(91, 'plan', 'January', 25, 'Rent_plan', 265, ''),
(92, 'plan', 'January', 25, 'Costs_plan', 45, ''),
(93, 'plan', 'January', 25, 'Heating_plan', 20, ''),
(94, 'plan', 'January', 25, 'Cable_TV', 15, ''),
(95, 'plan', 'January', 26, 'Rent_plan', 360, ''),
(96, 'plan', 'January', 26, 'Costs_plan', 45, ''),
(97, 'plan', 'January', 26, 'Heating_plan', 35, ''),
(98, 'plan', 'January', 27, 'Rent_plan', 380, ''),
(99, 'plan', 'January', 27, 'Costs_plan', 80, ''),
(100, 'plan', 'January', 27, 'Heating_plan', 25, ''),
(101, 'plan', 'January', 27, 'Cable_TV', 17, ''),
(102, 'plan', 'January', 28, 'Rent_plan', 265, ''),
(103, 'plan', 'January', 28, 'Costs_plan', 52, ''),
(104, 'plan', 'January', 28, 'Heating_plan', 15, ''),
(105, 'plan', 'January', 28, 'Cable_TV', 12, ''),
(106, 'plan', 'January', 29, 'Rent_plan', 315, ''),
(107, 'plan', 'January', 29, 'Costs_plan', 50, ''),
(108, 'plan', 'January', 29, 'Heating_plan', 25, ''),
(109, 'plan', 'January', 29, 'Cable_TV', 17, ''),
(110, 'plan', 'January', 30, 'Rent_plan', 490, ''),
(111, 'plan', 'January', 30, 'Costs_plan', 50, ''),
(112, 'plan', 'January', 30, 'Heating_plan', 50, ''),
(113, 'plan', 'January', 30, 'Cable_TV', 17, ''),
(114, 'plan', 'January', 31, 'Rent_plan', 342, ''),
(115, 'plan', 'January', 31, 'Costs_plan', 57, ''),
(116, 'plan', 'January', 31, 'Heating_plan', 30, ''),
(117, 'plan', 'January', 32, 'Rent_plan', 342, ''),
(118, 'plan', 'January', 32, 'Costs_plan', 40, ''),
(119, 'plan', 'January', 32, 'Heating_plan', 30, ''),
(120, 'plan', 'January', 32, 'Cable_TV', 17, ''),
(121, 'plan', 'January', 33, 'Rent_plan', 495, ''),
(122, 'plan', 'January', 33, 'Costs_plan', 45, ''),
(123, 'plan', 'January', 33, 'Heating_plan', 35, ''),
(124, 'plan', 'January', 34, 'Rent_plan', 235, ''),
(125, 'plan', 'January', 34, 'Costs_plan', 40, ''),
(126, 'plan', 'January', 34, 'Heating_plan', 40, ''),
(127, 'plan', 'January', 34, 'Cable_TV', 15, ''),
(128, 'plan', 'January', 35, 'Rent_plan', 340, ''),
(129, 'plan', 'January', 35, 'Costs_plan', 40, ''),
(130, 'plan', 'January', 35, 'Heating_plan', 40, ''),
(131, 'plan', 'January', 35, 'Cable_TV', 15, ''),
(132, 'plan', 'January', 36, 'Rent_plan', 310, ''),
(133, 'plan', 'January', 36, 'Costs_plan', 55, ''),
(134, 'plan', 'January', 36, 'Heating_plan', 20, ''),
(135, 'plan', 'January', 36, 'Cable_TV', 15, ''),
(136, 'plan', 'January', 37, 'Rent_plan', 420, ''),
(137, 'plan', 'January', 37, 'Costs_plan', 90, ''),
(138, 'plan', 'January', 37, 'Heating_plan', 60, ''),
(139, 'plan', 'January', 38, 'Rent_plan', 540, ''),
(140, 'plan', 'January', 38, 'Costs_plan', 60, ''),
(141, 'plan', 'January', 38, 'Heating_plan', 25, ''),
(142, 'plan', 'January', 38, 'Cable_TV', 17, ''),
(143, 'plan', 'January', 39, 'Rent_plan', 540, ''),
(144, 'plan', 'January', 39, 'Costs_plan', 60, ''),
(145, 'plan', 'January', 39, 'Heating_plan', 25, ''),
(146, 'plan', 'January', 39, 'Cable_TV', 17, ''),
(147, 'plan', 'January', 40, 'Rent_plan', 450, ''),
(148, 'plan', 'January', 40, 'Costs_plan', 60, ''),
(149, 'plan', 'January', 40, 'Heating_plan', 25, ''),
(150, 'plan', 'January', 40, 'Cable_TV', 17, ''),
(151, 'plan', 'January', 41, 'Rent_plan', 540, ''),
(152, 'plan', 'January', 41, 'Costs_plan', 60, ''),
(153, 'plan', 'January', 41, 'Heating_plan', 25, ''),
(154, 'plan', 'January', 41, 'Cable_TV', 17, ''),
(155, 'plan', 'January', 42, 'Rent_plan', 435, ''),
(156, 'plan', 'January', 42, 'Costs_plan', 75, ''),
(157, 'plan', 'January', 42, 'Heating_plan', 50, ''),
(158, 'plan', 'January', 43, 'Rent_plan', 543, ''),
(159, 'plan', 'January', 43, 'Costs_plan', 77, ''),
(160, 'plan', 'January', 43, 'Heating_plan', 30, ''),
(161, 'plan', 'January', 44, 'Rent_plan', 332, ''),
(162, 'plan', 'January', 44, 'Costs_plan', 55, ''),
(163, 'plan', 'January', 44, 'Heating_plan', 20, ''),
(164, 'plan', 'January', 44, 'Cable_TV', 15, ''),
(165, 'plan', 'January', 45, 'Rent_plan', 485, ''),
(166, 'plan', 'January', 45, 'Costs_plan', 65, ''),
(167, 'plan', 'January', 45, 'Heating_plan', 35, ''),
(168, 'plan', 'January', 45, 'Cable_TV', 17, ''),
(169, 'plan', 'January', 46, 'Rent_plan', 555, ''),
(170, 'plan', 'January', 46, 'Costs_plan', 75, ''),
(171, 'plan', 'January', 46, 'Heating_plan', 35, ''),
(172, 'plan', 'January', 46, 'Cable_TV', 15, ''),
(173, 'plan', 'January', 47, 'Rent_plan', 120, ''),
(174, 'plan', 'January', 48, 'Rent_plan', 100, ''),
(175, 'plan', 'January', 49, 'Rent_plan', 30, ''),
(176, 'plan', 'January', 50, 'Rent_plan', 20, ''),
(177, 'plan', 'January', 51, 'Rent_plan', 125, ''),
(178, 'plan', 'January', 52, 'Rent_plan', 150, ''),
(179, 'plan', 'January', 53, 'Rent_plan', 130, ''),
(180, 'plan', 'January', 54, 'Rent_plan', 115, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `costs`
--
ALTER TABLE `costs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `costs_name`
--
ALTER TABLE `costs_name`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `description`
--
ALTER TABLE `description`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `rental`
--
ALTER TABLE `rental`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `costs`
--
ALTER TABLE `costs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `costs_name`
--
ALTER TABLE `costs_name`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `description`
--
ALTER TABLE `description`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
