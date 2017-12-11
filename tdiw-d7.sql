-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2017 a las 23:32:42
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tdiw-d7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`, `image_type`) VALUES
(1, 'Everything', 'You can find all the content in this category. Games, books and movies', 'everything', 'png'),
(2, 'Games', 'You can find all about video games in this section. Rol, shooter, action, horror.', 'games', 'png'),
(3, 'Movies', 'You can find all about movies in this section. Action, drama,horror, comedy.', 'movies', 'png'),
(4, 'Books', 'You can find all about books in this section. Fantasy,tragedy,horror,comedy.', 'book', 'png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `command`
--

CREATE TABLE `command` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `n_elements` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `command_line`
--

CREATE TABLE `command_line` (
  `id` int(11) NOT NULL,
  `command_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitary_price` float NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `active` tinyint(1) NOT NULL,
  `divisa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `subcategory_id`, `name`, `description`, `image`, `img_type`, `price`, `active`, `divisa`) VALUES
(1, 5, 'Assassins Creed Syndicate', 'Assassin\'s Creed Syndicate es el videojuego de 2015 de la saga estrella de Ubisoft, Assassin\'s Creed que lleva varios títulos trayéndonos aventuras de acción en mundo abierto protagonizadas por memorables personajes de época.', 'product2', 'jpg', 55, 1, '€'),
(2, 5, 'Metal Gear Solid V', 'Metal Gear Solid 5 es la última aventura de Snake bajo las órdenes de Hideo Kojima. Tras la controvertida salida de éste de Konami, se cuenta entre los episodios más arriesgados y potentes de la franquicia de espionaje, ciencia ficción y, ahora, también mundo abierto. ', 'product1', 'jpg', 60, 1, '€'),
(3, 1, 'Final Fantasy XV', 'Entrega de la famosa saga JRPG Final Fantasy de Square Enix que supone el debut de la serie de la compañía nipona en las consolas PlayStation 4 y Xbox One. El universo de Final Fantasy XV está basado en la fábula Nova Crystallis que también inspiró a Final Fantasy XIII, pero que en este caso tiene una fuerte orientación hacia el género de la acción como ya demostró en su momento la demostración jugable del Episode Duscae.', 'product3', 'jpg', 60, 1, '€'),
(4, 3, 'Call of Duty: Infinite Warfare', 'Call of Duty: Infinite Warfare es el videojuego de la exitosa saga bélica de Activision destinado a dominar el mercado en 2016 con una propuesta de regreso que busca un giro de tuerca pero manteniendo algunas de las raíces de la serie: batallas masivas, una cuidada narrativa militar y una historia de defensa de nuestro modelo de vida amenazado por el Settlement Defense Front. ', 'product4', 'jpg', 65, 1, '€'),
(5, 9, 'Star Wars Rogue One', 'Rogue One: A Star Wars Story, simply known as Rogue One, is a 2016 film directed by Gareth Edwards and produced by Lucasfilm president Kathleen Kennedy, amongst many others. The screenplay, written by Chris Weitz and Tony Gilroy, is based on a story by John Knoll and Gary Whitta.', 'movie1', 'jpg', 20, 1, '€'),
(6, 13, 'Moonlight', 'Moonlight is a 2016 American coming-of-age drama film written and directed by Barry Jenkins, based on Tarell Alvin McCraney\'s unpublished semi-autobiographical play In Moonlight Black Boys Look Blue. It stars Trevante Rhodes, André Holland, Janelle Monáe, Ashton Sanders, Jharrel Jerome, Naomie Harris, and Mahershala Ali.', 'movie2', 'jpg', 15, 1, '€'),
(7, 12, 'IT', 'A group of bullied kids band together when a shapeshifting monster, taking the appearance of a clown, begins hunting children.', 'movie3', 'jpg', 18, 1, '€'),
(8, 16, 'Baywatch', 'A group of bullied kids band together when a shapeshifting monster, taking the appearance of a clown, begins hunting children.', 'movie4', 'jpg', 20, 1, '€'),
(9, 20, 'Harry Potter and the order of fenix', 'Harry Potter and the Order of the Phoenix is a fantasy novel written by J. K. Rowling and the fifth and antepenultimate novel in the Harry Potter series. It follows Harry Potter\'s struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort, O.W.L. exams, and an obstructive Ministry of Magic. ', 'book1', 'jpg', 15, 1, '€'),
(10, 21, 'An american tragedy', 'Ambitious, but ill-educated, naïve, and immature, Clyde Griffiths is raised by poor and devoutly religious parents to help in their street missionary work. As a young adult, Clyde must, to help support his family, take menial jobs as a soda jerk, then a bellhop at a prestigious Kansas City hotel. There, his more sophisticated colleagues introduce him to bouts of social drinking and sex with some of the hotel\'s female guests and with prostitutes.\r\n', 'book2', 'jpg', 10, 1, '€'),
(11, 17, 'Cold comfort farm', 'Very probably the funniest book ever written? (\"The Sunday Times,\" London)?a hilarious parody of D. H. Lawrence\'s and Thomas Hardy\'s earthy, melodramatic novels. When the recently orphaned socialite Flora Poste descends on her relatives at the aptly named Cold Comfort Farm in deepest Sussex, she finds a singularly miserable group in dire need of her particular talent? organization. \r\n', 'book3', 'jpg', 10, 1, '€'),
(12, 24, 'The fault in our starts', 'The Fault in Our Stars is the sixth novel by author John Green, published in January 2012. The title is inspired by Act 1, Scene 2 of Shakespeare\'s play Julius Caesar, in which the nobleman Cassius says to Brutus: \"The fault, dear Brutus, is not in our stars, / But in ourselves, that we are underlings.\"', 'book4', 'jpg', 12, 1, '€'),
(13, 25, 'Animal Farm', 'Animal Farm is an allegorical novella by George Orwell, first published in England on 17 August 1945. According to Orwell, the book reflects events leading up to the Russian Revolution of 1917 and then on into the Stalinist era of the Soviet Union. Orwell, a democratic socialist,was a critic of Joseph Stalin and hostile to Moscow-directed Stalinism, an attitude that was critically shaped by his experiences during the Spanish Civil War.', 'book5', 'jpg', 12, 1, '€');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `name`, `description`) VALUES
(1, 2, 'Rol', 'List of rol games.'),
(3, 2, 'Shooter', 'List of shooter games.'),
(5, 2, 'Action', 'List of action games.'),
(7, 2, 'Horror', 'List of horror games.'),
(9, 3, 'Action', 'List of action movies.'),
(12, 3, 'Horror', 'List of horror movies.'),
(13, 3, 'Drama', 'List of drama movies.'),
(16, 3, 'Comedy', 'List of comedy movies.'),
(17, 4, 'Comedy', 'List of comedy books.'),
(20, 4, 'Fantasy', 'List of fantasy books.'),
(21, 4, 'Tragedy', 'List of tragedy books.'),
(24, 4, 'Romance', 'List of romance books.'),
(25, 4, 'Satire', 'List of satire books.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `postal_code` varchar(5) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `address`, `town`, `postal_code`, `active`) VALUES
(16, 'ivan@gmail.com', '$2y$10$CA68CYoHZ65HUOajtZcqe..HRSNIXWiI6s.m6bXvQLbxu5jbyyTwa', 'Ivan', 'ivan street', 'Cerdanyola', '08291', 1),
(17, 'juan@gmail.com', '$2y$10$rgE3uHmT6Bwk9SE5Hc0opOfDvXz9a/I9HJE.i5rIz4jV84v9bpA0.', 'Juan', 'juan street', 'Cerdanyola', '08291', 1),
(19, 'ls@gmail.com', '$2y$10$Ywd.9ENEtnXXIzYJXONsSOLo5L4LJhpx/id5IpLMAES4oYwpAhu12', 'ls', 'ls street ', 'Ls', '08291', 1),
(20, 'test@test.com', '$2y$10$Obvj2.GGHeML5T2HUE64LuX9lPFdifnsK7yN4A6SBWaIDYuQSYMNm', 'test', 'ewrwe', 'rwerwe', '12345', 1),
(21, 'test@gmail.com', '$2y$10$SWmC99c8sF9a025S4POa3.froGnEIz0tVUm7AmEqGjRXOw0thMRh6', 'Test', 'test street', 'test', '08080', 1),
(22, 'test2@gmail.com', '$2y$10$1UmD.8zh3.q8GHaLErfNyOagL7ys85r6JZs8bcC4bPBJqc3PjzUJq', 'Tester', 'test2 street ', 'tester', '08291', 1),
(23, 'joan@gmail.con', '$2y$10$F3Z9qg5e0CXxcrHRhtD4Le/QRCHaxcRFnSEM45WRq0Rs0s/43NSS6', 'Joan', 'sant street', 'Badalona', '02391', 1),
(24, 'alexgarciacarballo@gmail.com', '$2y$10$zE42bySBengxavFKLIjXhObya9haqOZy3GYNAw5UhKJNCanwpmA/C', 'alex', 'dasd', 'wef', '21345', 1),
(25, 'pep@gmail.com', '$2y$10$5ynVxp0QFgePPHaxrMVjfeujvWwH1BeADRqi20oCPN75nELMfRisK', 'Pep', 'Street', 'Barcelona', '08091', 1),
(26, 'pol@gmail.com', '$2y$10$WTxB7UB9Mcw2V/pYJ7sL1ee350QAn.KX73bU9Orl2QtEaxEPVmo4.', 'Pol', 'pol street', 'Polandia', '02312', 1),
(28, 'josep@gmail.com', '$2y$10$4CWQpYLy8Bmrs5yLECo96OjkuKIEzvby8JHZ56bUgG3dNIzGkcN.K', 'Josep', 'josep', 'josep', '02312', 1),
(29, 'PEPE&commat;gmail&period;com', '$2y$10$19Z64Cn.klR8j7hvGmrcd.ZSGeuBZghgr1zOPmF7be9FJYh3p2v4G', 'PEPEJUAN', 'fwoi&fjlig;', '&fjlig;wioef', '09876', 1),
(30, 'jesus&commat;gmail&period;com', '$2y$10$o8V1Ba/wyPwjmrHBvCV24uNzgPjpHd/bXCEfsYwl/1mwq5FdFgZom', 'Jesus', 'jesus street', 'Paraiso', '00000', 1),
(31, 'joan&period;serrat&commat;uab&period;es', '$2y$10$f/TX5WXMQDQX.UoQ8GkAoeOBD8Ejh8lI.HnhtEGfXal3hS2OhH.je', 'Tontoelquelolea', 'Calle de la Piruleta', 'Burgos', '01010', 1),
(32, 'pepguardiola&commat;gmail&period;com', '$2y$10$u5XwdheQQ/1/AVhVWzJHluEaWMjfN8KClWh8X0fWrrwHbxNuFf/va', 'Pep Guardiola', 'pepguardiola@hotmail.com', 'Barcelona', '08291', 1),
(35, 'ivan32&commat;hotm&period;com', '$2y$10$/mAjAdwjPkD7vXzXIZtjQ.tZoqiCpCVIiQCkaPOivagOvlJVL5nJS', 'Ivan Ortiz', 'mcias', 'mcisa', '02931', 1),
(36, 'mourinho&commat;gmail&period;com', '$2y$10$X3C0vvxmvC.2BtIVJxZcW.JT01Qn4AJLhwK2Nv6xawoAWQ2N9odEK', 'Mourinho', 'amsod', 'maso', '08239', 1),
(38, 'andres&commat;gmail&period;com', '$2y$10$VI8s92hwMpEN9qrmzkaJIez.K3nlZhlXifrydwRHvxjU5RfDr0td2', 'Andres', 'andres', 'andres', '03921', 1),
(39, 'pruebalogin&commat;gmail&period;com', '$2y$10$71J5ltRDRwvXXTrt613Im.C0SNg.a6Er5M7l.4FJROGMoii5hvMUy', 'pruebalogin', 'pdls', 'dslap', '02301', 1),
(40, 'test&commat;gmail&period;com', '$2y$10$MZG3LjjH83CNzcFVcU7FoOJxb9wffPh4jl9bCAP0IRkJS3s6/zJnK', 'testing', 'testttt', 'testtttt', '09829', 1),
(41, 'testing&commat;gmail&period;com', '$2y$10$Mi2lY6sPCDtIyhuUR6Ju.OeQHP7eHoj87SwjwrjFjpsfgMnk.wbNO', 'testing', 'test2', 'test', '09876', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `command_line`
--
ALTER TABLE `command_line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `command_id` (`command_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`subcategory_id`);

--
-- Indices de la tabla `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `command`
--
ALTER TABLE `command`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `command_line`
--
ALTER TABLE `command_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `command_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `command_line`
--
ALTER TABLE `command_line`
  ADD CONSTRAINT `command_line_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `command_line_ibfk_2` FOREIGN KEY (`command_id`) REFERENCES `command` (`id`);

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);

--
-- Filtros para la tabla `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
