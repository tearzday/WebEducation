-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2022 г., 17:15
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int NOT NULL,
  `question_id` int NOT NULL,
  `answer` varchar(255) NOT NULL,
  `score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `score`) VALUES
(1, 1, '&lt;head lang=&quot;ru&quot;&gt;', 0),
(2, 1, '&lt;body lang=&quot;ru&quot;&gt;', 0),
(3, 1, '&lt;html&gt; &lt;lang&gt;=&quot;ru&quot;&lt;/html&gt;', 0),
(4, 1, '&lt;html lang=&quot;ru&quot;&gt;', 1),
(5, 1, '&lt;!DOCTYPE lang=&quot;ru&quot;&gt;', 0),
(6, 2, 'Является шапкой сайта и располагается в body', 1),
(7, 2, 'Является шапкой сайта и располагается в head', 0),
(8, 2, 'Хранит элементы , цель которых помочь - помочь браузеру в работе с данными', 0),
(13, 3, 'Строчный тег , используемый для выделения текста курсивом', 0),
(14, 3, 'Блочный тег , использующийся для крупных смысловых разделов', 0),
(15, 3, 'Тег div обозначает самостоятельный фрагмент информации', 0),
(16, 3, 'Тег div используется с целью изменения вида содержимого и является блочным', 1),
(17, 4, 'Для подачи инструкции по управлению маштабами', 0),
(18, 4, 'Для указания кодировки страницы', 1),
(19, 4, 'Для подключения файла', 0),
(20, 4, 'Для указания пути к файлу', 0),
(21, 5, 'Для указания ссылки на сайт', 0),
(22, 5, 'Для навигации', 0),
(23, 5, 'Для подключения шрифтов , файлов и т.п', 1),
(24, 5, 'Для выделения текста курсивом', 0),
(25, 6, '&lt;p&gt;', 1),
(26, 6, '&lt;i&gt;', 0),
(27, 6, '&lt;a&gt;', 0),
(28, 6, '&lt;b&gt;', 0),
(29, 7, 'Задания курсива тексту', 0),
(30, 7, 'Подчеркивания текста', 0),
(31, 7, 'Зачеркивания текста', 1),
(32, 8, '&lt;ol&gt; &lt;li&gt; &lt;lt&gt;', 0),
(33, 8, '&lt;dl&gt; &lt;dt&gt; &lt;dr&gt;', 0),
(34, 8, '&lt;dl&gt; &lt;dt&gt; &lt;dd&gt;', 1),
(35, 9, '&lt;href&gt;', 1),
(36, 9, '&lt;alt&gt;', 0),
(37, 9, '&lt;type&gt;', 0),
(38, 9, '&lt;class&gt;', 0),
(39, 10, '&lt;img scr=&quot;&quot; &gt;', 0),
(40, 10, '&lt;img src=&quot;&quot; &gt;', 1),
(41, 10, '&lt;img lang=&quot;&quot; &gt;', 0),
(42, 10, '&lt;a alt=&quot;&quot; &gt;', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `test_id` int NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `test_id`, `question`) VALUES
(1, 1, 'Укажите правильное объявление языка:'),
(2, 1, 'Тег &lt;header&gt;:'),
(3, 1, 'Тег &lt;div&gt;:'),
(4, 1, 'Для чего нужен атрибут charset тега &lt;meta&gt;?'),
(5, 1, 'Для чего нужен тег &lt;link&gt;?'),
(6, 1, 'Какой тег предназначен для разметки абзацев?'),
(7, 1, 'Тег &lt;del&gt; используется для:'),
(8, 1, 'Какие тег используются для создани списка описания:'),
(9, 1, 'При помощи какого атрибута задается адрес ссылки?'),
(10, 1, 'Укажите правильный вариант:');

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int NOT NULL,
  `test_id` int NOT NULL,
  `score_min` int NOT NULL,
  `score_max` int NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `test_id`, `score_min`, `score_max`, `result`) VALUES
(1, 1, 8, 10, 'Вы успешно сдали тест по теме Основы HTML'),
(2, 1, 0, 7, 'Вы не прошли тест Основы HTML. Попробуйте еще раз');

-- --------------------------------------------------------

--
-- Структура таблицы `resultsuser`
--

CREATE TABLE `resultsuser` (
  `user_id` int NOT NULL,
  `tests_id` int NOT NULL,
  `score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `resultsuser`
--

INSERT INTO `resultsuser` (`user_id`, `tests_id`, `score`) VALUES
(12, 1, 1),
(12, 2, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `title`) VALUES
(1, 'Основы HTML'),
(2, 'Основы CSS'),
(3, 'Основы HTML и CSS. Часть 1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `email`, `password`, `photo`) VALUES
(7, 'test1', 'test1', 'test@gmail.com', '1b1aeba8b590152ec0ac467812a3e242', '1551511801_1.jpg'),
(8, 'test2', 'test2', 'test@gmail.com', 'eaf381265ee71cdcbf9a624a8d47a03d', 'profil.svg'),
(12, 'biver', 'Daniil', 'biver.agy@gmail.com', 'eaf381265ee71cdcbf9a624a8d47a03d', 'photo5305626560662978361.jpg'),
(13, 'test3', 'test3', 'test3@gmail.com', '9e3e0cc047fb561745087937aaf4263e', 'profil.svg'),
(14, 'test3', 'test3', 'test3@gmail.com', '9e3e0cc047fb561745087937aaf4263e', 'profil.svg'),
(15, 'test3', 'test3', 'test3@gmail.com', '9e3e0cc047fb561745087937aaf4263e', 'profil.svg'),
(16, 'test3', 'test3', 'test3@gmail.com', '9e3e0cc047fb561745087937aaf4263e', 'profil.svg'),
(17, 'newtest', 'newtest', 'newtest@gmail.f', '94bfd0e2870364d08717fe1914ff9937', 'profil.svg'),
(18, 'newtest', 'newtest', '', '94bfd0e2870364d08717fe1914ff9937', 'profil.svg'),
(19, 'newtest', 'newtest', '', '94bfd0e2870364d08717fe1914ff9937', 'profil.svg'),
(20, 'newtest', 'newtest', '', '94bfd0e2870364d08717fe1914ff9937', 'profil.svg'),
(21, 'newtest', 'newtest', '', '94bfd0e2870364d08717fe1914ff9937', 'profil.svg'),
(23, 'registre', 'registre', 'registre@dasads.j', 'f4884ef366259e82008fd7353672b768', 'profil.svg'),
(24, 'testt', 'testt', 'testt@gmail.d', 'd8655a46b5ab1f7614c9a5d899271c88', 'profil.svg'),
(25, 'test5', 'test5', 'test5@fa.j', '070ff8d08a353fc967ac186caa90f8e6', 'profil.svg'),
(26, 'newreg', 'newreg', 'newreg@gmail.com', 'b90908d43180f2975fd50b2493a9bef4', 'profil.svg'),
(27, 'resultsuser', 'resultsuser', 'resultsuser@fas.h', '93259ff039f7b87fe1be0a77c6d3e165', 'profil.svg'),
(28, 'score', 'score', 'score@fa.faf', '2ce99d879bb145a354fa9d063a5845ce', 'profil.svg'),
(29, 'score1', 'score1', 'score1@fasfa.faw', '007289a009c28009b439336d0c24f253', 'profil.svg'),
(30, 'score2', 'score2', 'score2@fafs.faaf', '187d4f8edbbc15a54d220f7cccec74cd', 'profil.svg'),
(31, 'ididid', 'ididid', 'test3@gmail.com', '8c061fa8a8b5d1372cfe95a19b692b16', 'profil.svg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`);

--
-- Индексы таблицы `resultsuser`
--
ALTER TABLE `resultsuser`
  ADD KEY `user_id` (`user_id`,`tests_id`),
  ADD KEY `tests_id` (`tests_id`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `resultsuser`
--
ALTER TABLE `resultsuser`
  ADD CONSTRAINT `resultsuser_ibfk_1` FOREIGN KEY (`tests_id`) REFERENCES `tests` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `resultsuser_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
