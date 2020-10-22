-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 20 2020 г., 16:20
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `goodses`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `login_user` varchar(256) COLLATE utf8_bin NOT NULL,
  `id_goods` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `login_user`, `id_goods`, `quantity`) VALUES
(3, '202cb962ac59075b964b07152d234b70', 1, 3),
(13, '202cb962ac59075b964b07152d234b70', 3, 3),
(14, 'f89f124c0b230be9557c714912ee3320', 1, 1),
(15, 'f89f124c0b230be9557c714912ee3320', 4, 2),
(16, '202cb962ac59075b964b07152d234b70', 4, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `goodses`
--

CREATE TABLE `goodses` (
  `id` int(11) NOT NULL,
  `path` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(128) NOT NULL,
  `short-desc` varchar(2048) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(8192) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `goodses`
--

INSERT INTO `goodses` (`id`, `path`, `price`, `short-desc`, `description`) VALUES
(1, './big/mouse.png', 300, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur at earum aliquid nisi quidem. Error praesentium impedit voluptatem fugit officia soluta sapiente aut totam dolorum nulla velit assumenda quasi voluptatum eveniet, earum voluptates quis, at, in enim ea tempora. Cupiditate impedit earum minus nam iure facilis pariatur inventore eaque reiciendis?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ex quaerat, ea quae, ut quidem pariatur voluptatibus iure modi excepturi fugit similique ipsa aperiam eveniet. Temporibus debitis labore molestiae, tempora eius aut quam, in unde laboriosam, voluptatibus optio repellat nisi. Enim quidem voluptates nesciunt fuga iure nostrum cumque. Ipsum officia hic quod iure? Laborum totam, impedit sed possimus itaque fugiat eum natus non, eius velit est iusto rerum! Suscipit aperiam consequatur natus rerum molestiae reiciendis commodi asperiores! Excepturi, rerum? Laudantium, animi? Aperiam, perspiciatis earum odio explicabo fugit maxime nulla ullam, inventore porro quaerat asperiores nisi iure vero nobis hic vel! Maiores explicabo in repudiandae ratione? Eum provident, dignissimos iure commodi repellat sint alias voluptates excepturi dolorum harum debitis reprehenderit accusantium facilis eveniet doloribus obcaecati laudantium et fugiat laboriosam odit deleniti sunt quia necessitatibus? Delectus esse architecto minima velit vitae voluptatibus quam quod. Obcaecati nulla officia numquam, eos id debitis delectus eius voluptatum hic aliquid mollitia laborum iusto tempora fugit optio pariatur enim architecto consequuntur libero! Temporibus dolores corporis alias impedit beatae, mollitia consequuntur culpa, ratione doloremque minima debitis corrupti voluptas non maxime modi, quo voluptate suscipit vel officiis sed porro sit repellendus soluta. Iure, nemo. Suscipit consequatur quaerat animi temporibus?'),
(3, './big/keyboard.png', 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur at earum aliquid nisi quidem. Error praesentium impedit voluptatem fugit officia soluta sapiente aut totam dolorum nulla velit assumenda quasi voluptatum eveniet, earum voluptates quis, at, in enim ea tempora. Cupiditate impedit earum minus nam iure facilis pariatur inventore eaque reiciendis?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ex quaerat, ea quae, ut quidem pariatur voluptatibus iure modi excepturi fugit similique ipsa aperiam eveniet. Temporibus debitis labore molestiae, tempora eius aut quam, in unde laboriosam, voluptatibus optio repellat nisi. Enim quidem voluptates nesciunt fuga iure nostrum cumque. Ipsum officia hic quod iure? Laborum totam, impedit sed possimus itaque fugiat eum natus non, eius velit est iusto rerum! Suscipit aperiam consequatur natus rerum molestiae reiciendis commodi asperiores! Excepturi, rerum? Laudantium, animi? Aperiam, perspiciatis earum odio explicabo fugit maxime nulla ullam, inventore porro quaerat asperiores nisi iure vero nobis hic vel! Maiores explicabo in repudiandae ratione? Eum provident, dignissimos iure commodi repellat sint alias voluptates excepturi dolorum harum debitis reprehenderit accusantium facilis eveniet doloribus obcaecati laudantium et fugiat laboriosam odit deleniti sunt quia necessitatibus? Delectus esse architecto minima velit vitae voluptatibus quam quod. Obcaecati nulla officia numquam, eos id debitis delectus eius voluptatum hic aliquid mollitia laborum iusto tempora fugit optio pariatur enim architecto consequuntur libero! Temporibus dolores corporis alias impedit beatae, mollitia consequuntur culpa, ratione doloremque minima debitis corrupti voluptas non maxime modi, quo voluptate suscipit vel officiis sed porro sit repellendus soluta. Iure, nemo. Suscipit consequatur quaerat animi temporibus?'),
(4, './big/headphones.png', 1324, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur at earum aliquid nisi quidem. Error praesentium impedit voluptatem fugit officia soluta sapiente aut totam dolorum nulla velit assumenda quasi voluptatum eveniet, earum voluptates quis, at, in enim ea tempora. Cupiditate impedit earum minus nam iure facilis pariatur inventore eaque reiciendis?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ex quaerat, ea quae, ut quidem pariatur voluptatibus iure modi excepturi fugit similique ipsa aperiam eveniet. Temporibus debitis labore molestiae, tempora eius aut quam, in unde laboriosam, voluptatibus optio repellat nisi. Enim quidem voluptates nesciunt fuga iure nostrum cumque. Ipsum officia hic quod iure? Laborum totam, impedit sed possimus itaque fugiat eum natus non, eius velit est iusto rerum! Suscipit aperiam consequatur natus rerum molestiae reiciendis commodi asperiores! Excepturi, rerum? Laudantium, animi? Aperiam, perspiciatis earum odio explicabo fugit maxime nulla ullam, inventore porro quaerat asperiores nisi iure vero nobis hic vel! Maiores explicabo in repudiandae ratione? Eum provident, dignissimos iure commodi repellat sint alias voluptates excepturi dolorum harum debitis reprehenderit accusantium facilis eveniet doloribus obcaecati laudantium et fugiat laboriosam odit deleniti sunt quia necessitatibus? Delectus esse architecto minima velit vitae voluptatibus quam quod. Obcaecati nulla officia numquam, eos id debitis delectus eius voluptatum hic aliquid mollitia laborum iusto tempora fugit optio pariatur enim architecto consequuntur libero! Temporibus dolores corporis alias impedit beatae, mollitia consequuntur culpa, ratione doloremque minima debitis corrupti voluptas non maxime modi, quo voluptate suscipit vel officiis sed porro sit repellendus soluta. Iure, nemo. Suscipit consequatur quaerat animi temporibus?');

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `login` varchar(256) COLLATE utf8_bin NOT NULL,
  `pass` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`id`, `login`, `pass`) VALUES
(5, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(6, '17da5179097b581261a2cd374a8cc913', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(7, '2bbf803161deb1186defbefb8b4b0903', '818f9c45cfa30eeff277ef38bcbe9910'),
(8, '165c3732382b3f59759560c5caf69bf8', '45242271c640ab12c95a6cf8fbc23872'),
(9, 'e97752fff31c71ec88a0e6ca761fa623', 'a216fad8a2fd165602220b7f2d9dbc06'),
(10, 'f89f124c0b230be9557c714912ee3320', 'df8c200ac0cb8d99fa1411b2f9463047');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `reviews` varchar(4096) COLLATE utf8_bin NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `reviews`, `date`) VALUES
(1, 'Mike', 'Good store!', '2020-10-17'),
(3, 'Anna', 'I like this', '2020-10-18'),
(5, 'Igor', 'All is good', '2020-10-18'),
(14, 'Richard', 'Awesome!!!!', '2020-10-18'),
(17, 'Test', 'Test', '2020-10-20'),
(18, 'Test2', 'Test2', '2020-10-20'),
(19, 'Test3', 'Test3', '2020-10-20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goodses`
--
ALTER TABLE `goodses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `goodses`
--
ALTER TABLE `goodses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
