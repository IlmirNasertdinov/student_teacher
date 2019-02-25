-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 25 2019 г., 23:52
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Student`
--

CREATE TABLE `Student` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `patronymic` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Student`
--

INSERT INTO `Student` (`id`, `name`, `surname`, `patronymic`) VALUES
(1, 'dfgdfg', 'et6345345', 'fgbhcvbvcn'),
(2, 'Вася', 'Пупкин', 'Алексеевич'),
(3, 'Вася', 'Пупкин', 'Алексеевич'),
(4, 'Ещвапвап', 'смисми', 'у6345435'),
(5, 'Ещвапвап', 'мсимсисми345345', 'у6345435'),
(6, 'et54ytrh', 'мсимvbnсисми345345', 'у6345435');

-- --------------------------------------------------------

--
-- Структура таблицы `student_teacher`
--

CREATE TABLE `student_teacher` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Teacher`
--

CREATE TABLE `Teacher` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `patronymic` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Teacher`
--

INSERT INTO `Teacher` (`id`, `name`, `surname`, `patronymic`) VALUES
(1, 'rtfghfgh', 'bvnvbn', '546fghnbvnvbn'),
(2, 'Новый', 'учит', 'отчество его');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student_teacher`
--
ALTER TABLE `student_teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id_2` (`student_id`,`teacher_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Индексы таблицы `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Student`
--
ALTER TABLE `Student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `student_teacher`
--
ALTER TABLE `student_teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
