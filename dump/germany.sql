-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июл 19 2017 г., 17:58
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `description`
--
ALTER TABLE `description`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `description`
--
ALTER TABLE `description`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
