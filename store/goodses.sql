-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 17 2020 г., 19:26
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goodses`
--
ALTER TABLE `goodses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goodses`
--
ALTER TABLE `goodses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
