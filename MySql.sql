-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 31 2018 г., 17:17
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `a916520s_events`
--

-- --------------------------------------------------------

--
-- Структура таблицы `email`
--
-- Создание: Фев 27 2018 г., 21:02
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `emails` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `email`
--

INSERT INTO `email` (`id`, `emails`) VALUES
(1, 'Froze.14@yandex.ru'),
(2, 'dyakov.ilusha.13@yandex.ru'),
(3, 'dyakov.ilusha.13@gmail.ru'),
(75, 'dasha.stickina@yandex.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--
-- Создание: Мар 09 2018 г., 16:50
-- Последнее обновление: Май 25 2018 г., 13:34
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `url`) VALUES
(1, 'событие 1', 'описание 1', '2018-02-25 10:25:30', 'https://translate.google.ru/'),
(2, 'событие 2', 'описание 2', '2018-02-27 12:25:30', 'https://translate.google.ru/'),
(3, 'событие 3', 'описание 3', '2018-03-02 15:25:30', 'https://translate.google.ru/'),
(4, 'событие 4', 'https://www.yandex.ru/', '2018-03-08 02:07:18', 'https://www.yandex.ru/'),
(5, '«КОЛАЧЁВСКИЕ ЧТЕНИЯ»', '6 апреля 2018 года в Ступинском филиале МАИ пройдёт  четвёртая межвузовская молодежная научно-практическая конференция «КОЛАЧЁВСКИЕ ЧТЕНИЯ», посвященная 90-летию со дня рождения профессора, доктора технических наук, заслуженного деятеля науки и техники РСФСР, лауреата Государственной премии, почётного гражданина г. Ступино, основателя Ступинского филиала МАТИ Бориса Александровича Колачёва.', '2018-04-06 12:00:00', 'http://www.kolachevconf.ru/'),
(6, 'КВН', '07 апреля в 18:00 в большом зале Дворца Культуры состоится II этап игр Открытой Ступинской лиги КВН сезона 2017-2018 г.г. ', '2018-04-07 18:00:00', 'https://vk.com/sf_mai?w=wall-59558767_2947%2Fall'),
(7, 'ГОС-Экзамен', 'Состоится итоговый государственный экзамен', '2018-05-30 10:00:00', 'http://www.kolachevconf.ru/'),
(8, 'Последний звонок', 'Сегодня состоится последний звонок', '2018-05-25 09:00:00', 'http://www.kolachevconf.ru/'),
(10, 'событие ', 'сегодня', '2018-05-24 09:00:00', ''),
(11, 'Последний звонок', 'ртунеотв', '2018-05-24 08:23:00', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
