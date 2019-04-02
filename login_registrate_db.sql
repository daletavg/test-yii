-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2019 г., 19:29
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `login_registrate_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `auth_key`, `access_token`) VALUES
(1, 'fadawd@gmail.com', 'fadawd@gmail.com', '12345', NULL, NULL),
(2, 'Иванов Иван', 'ivan@gmail.com', '12345', NULL, NULL),
(3, 'test', 'testa@gmail.com', 'e86fdc2283aff4717103f2d44d0610f7', NULL, NULL),
(4, 'dwdw', 'dfd@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(5, 'qwer', 'grg@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(6, 'qwer', 'grfg@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(7, 'qwer', 'grfgh@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(8, 'effe', 'eded@fef.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(9, 'wdw', 'dwdw@grgr.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(10, 'alexuujgg', 'test_email@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(11, 'def', 'rere@grr.voo', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(12, 'dewdw', 'dwdw@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL),
(13, 'wdwdw', 'dadawd@fefe.com', '76419c58730d9f35de7ac538c2fd6737', NULL, NULL),
(14, 'qqq', 'fef@gg.com', '89d0a95f08d6158eef5d8e9b54a409fd', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
