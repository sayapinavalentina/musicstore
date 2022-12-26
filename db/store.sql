-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 25 2022 г., 17:42
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `idtype` int NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dateofcreation` datetime DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `idtype`, `image`, `dateofcreation`, `description`) VALUES
(1, 'Электрогитара уменьшенная Caraya E100BK', 7550, 1, '2.jpeg', '2014-08-13 12:41:14', 'Отличная электрогитара, подойдет для того чтобы украсить ваш прекрасный шкаф. Будет пылиться. Требует тоо, чтоб ее протирали раз в 2 месяца.'),
(2, 'Акустическая гитара Belucci BC-C38', 3900, 1, '3.jpeg', '2006-09-20 07:35:40', 'Неплохая акустическая гитара. Покупайте в подарок зятю.'),
(3, 'Электрогитара Fabio ST100 SB', 10500, 1, '11.jpeg', '2006-10-18 10:26:57', 'Электрогитара чтоб порадовать соседей в воскресное утро. Желательно начать играть уже в 5 утра вместо чашки кофе - так у соседей поднимется настроение, а у вас - адреналин.'),
(4, 'Электрогитара TERRIS TTL-039 YW', 10170, 1, '18.jpeg', '2022-12-23 12:22:11', 'Лучшая электрогитара для того чтобы поднять настроение в своей рок группе. Желательно играть не в ноты. Как вы знаете - электрогитаристы - сутулые собаки.'),
(5, 'Акустическая гитара Elitaro E4010 WH', 7760, 1, '4.jpeg', '2022-12-13 10:33:30', 'Акустическая гитара чтоб порвать пару струн. Отличное европейское качество!'),
(6, 'Акустическая гитара Fabio SA105 BK', 10460, 1, '15.jpeg', '2022-11-16 13:33:39', 'Лучше чем укулеле может быть только гитара! А лучше гитары может быть только клавиатура. Поэтому станьте программистом.'),
(7, 'Акустическая гитара Elitaro E4211 WH', 8000, 1, '16.jpeg', '2019-12-12 08:34:36', 'Родители не хотели отдавать в музыкалку, а отдали в строительное училище на электрика? Не беда! Эта гитара предназначена для новичков-электриков...'),
(8, 'A100-15,5 Rhapsody Student Альт студенческий, Hora', 19260, 2, '1.jpeg', '2022-07-07 05:35:02', 'Если вы все детство мечтали играть на скрипке, но решили похардкорить? Альт вам в помощь...'),
(9, 'B-V16 Beginer Genial 2 Nitro Альт, Gliga', 36500, 2, '5.jpeg', '2022-07-22 10:35:32', '– Почему улыбалась Джоконда?\n– Ее смешил Леонардо да Винчи!'),
(10, 'Скрипка 4/4 Gliga B-V044 Beginer Genial 2 Nitro', 31260, 2, '7.jpeg', '2022-08-17 11:35:38', '– Или ты станешь моей, или я брошусь под восьмичасовой поезд.\n– О господи, дай подумать хоть до десяти.'),
(11, 'V100E Electric Скрипка со звукоснимателем, размер 4/4, Hora', 31390, 2, '8.jpeg', '2022-08-19 11:35:54', '– Как отучиться от курения сигарет?\n– Зажигайте сигарету с обоих концов сразу.'),
(12, 'P-V044-F Professional Gama Special Скрипка 4/4, Gliga', 95140, 2, '12.jpeg', '2022-09-09 04:00:00', '– Что такое зарплата?\n– То же, что и менструация: ждешь месяц, а в три дня кончается.'),
(13, 'B-V012 Beginer Genial 2 Nitro Скрипка 1/2, Gliga', 13150, 2, '14.jpeg', '2022-12-19 13:36:24', 'Вся семья сидит за столом. Обедают. Мать говорит сыну:\n– Вовочка, отдай кость папе, ты же не собака.'),
(14, 'Синтезатор Jonson&Co JC-118 silver', 18526, 3, '6.jpeg', '2022-12-15 08:36:44', '– Какая разница между статуей и женщиной?\n– Статуя сначала падает, а потом ломается, женщина – наоборот.'),
(15, 'Синтезатор CASIO CT-S100\n', 12690, 3, '9.jpeg', '2022-12-19 08:36:51', 'Закон Мерфи в любви: прежде, чем найдешь свою царевну, перецелуешь немало жаб!'),
(16, 'GEWA S11002 синтезатор', 4699, 3, '10.jpeg', '2022-12-23 16:37:04', '– Святой отец, я грешна в том, что несколько раз в день смотрюсь в зеркало и вижу, как я красива.\n– Продолжайте дитя мое. Это не грех. Это всего лишь заблуждение…'),
(17, 'Синтезатор CASIO WK-6600', 39830, 3, '13.png', '2022-12-24 12:37:17', '– Я просил Вас настроить фортепьяно, а не целовать мою жену!\n– Пардон, но она была такая расстроенная.'),
(18, 'Синтезатор Jonson&Co JC-939', 9800, 3, '17.jpeg', '2022-12-24 06:37:23', '– Товарищ милиционер! Скажите, по этой улице ходить не опасно?\n– Было бы опасно, я бы здесь не стоял.'),
(19, 'Синтезатор CASIO CTK-240', 12312, 3, '19.png', '2022-12-01 14:37:34', '– Товарищ прораб, мы проводку забыли!!!\n– А вот про водку мы как раз и не забыли…');

-- --------------------------------------------------------

--
-- Структура таблицы `typeitems`
--

CREATE TABLE `typeitems` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `typeitems`
--

INSERT INTO `typeitems` (`id`, `name`) VALUES
(1, 'Гитара'),
(2, 'Смычковые'),
(3, 'Клавишные');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Ася Оствальд', 'asyaostwald@gmail.com', '12345we', '8899889988', 'Москва', 'Ленинградское шоссе, д. 13а'),
(2, 'Валентина Саяпина', 'sayapina@yandex.ru', '1234wewe', '8899889989', 'Самара', 'ул. Ленина, д.12'),
(3, 'Данила Староверов', 'danyas@gmail.com', '123456qw', '8899889990', 'Санкт-Петербург', 'ул. Лесная, д. 11, к. 13'),
(4, 'Евгений Поливанов', 'evgen@outlook.com', '12345rt', '8987658399', 'Астрахань', 'пер. Печатников, д. 12'),
(5, 'we we', 'wewe@djd.ru', '3afb5c7cb63962c166986f70e3e4cea1', '12', 'цуйуц', 'йцуйцу');

-- --------------------------------------------------------

--
-- Структура таблицы `users_items`
--

CREATE TABLE `users_items` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Добавлено в корзину'),
(8, 3, 4, 'Добавлено в корзину'),
(9, 3, 5, 'Добавлено в корзину'),
(10, 3, 11, 'Добавлено в корзину'),
(11, 1, 9, 'Добавлено в корзину'),
(12, 1, 2, 'Добавлено в корзину'),
(13, 1, 8, 'Добавлено в корзину'),
(14, 4, 1, 'Добавлено в корзину'),
(15, 4, 2, 'Добавлено в корзину'),
(16, 4, 3, 'Добавлено в корзину'),
(17, 4, 10, 'Добавлено в корзину'),
(18, 5, 2, 'Confirmed');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typeitems_ibfk_1` (`idtype`);

--
-- Индексы таблицы `typeitems`
--
ALTER TABLE `typeitems`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `typeitems`
--
ALTER TABLE `typeitems`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `typeitems_ibfk_1` FOREIGN KEY (`idtype`) REFERENCES `typeitems` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
