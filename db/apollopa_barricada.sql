-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost:3306
-- Χρόνος δημιουργίας: 13 Ιαν 2018 στις 03:01:38
-- Έκδοση διακομιστή: 10.1.24-MariaDB-cll-lve
-- Έκδοση PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `apollopa_barricada`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `c_programa`
--

CREATE TABLE `c_programa` (
  `id` int(11) NOT NULL,
  `id_e_employees` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `shift` int(11) NOT NULL,
  `current` int(11) NOT NULL,
  `day` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `c_programa`
--

INSERT INTO `c_programa` (`id`, `id_e_employees`, `date`, `shift`, `current`, `day`) VALUES
(1, 1, '2018-01-12 08:35:07', 1, 0, '1'),
(485, 15, '2018-01-14 06:35:07', 0, 0, 'date1'),
(486, 12, '2018-01-14 06:35:07', 1, 0, 'date1'),
(487, 16, '2018-01-14 06:35:07', 0, 0, 'date2'),
(488, 14, '2018-01-14 06:35:07', 1, 0, 'date1'),
(489, 13, '2018-01-14 06:35:07', 1, 0, 'date2'),
(490, 12, '2018-01-14 06:35:07', 1, 0, 'date2'),
(491, 14, '2018-01-14 06:35:07', 0, 0, 'date3'),
(492, 16, '2018-01-14 06:35:07', 1, 0, 'date3'),
(493, 12, '2018-01-14 06:35:07', 1, 0, 'date3'),
(494, 13, '2018-01-14 06:35:07', 1, 0, 'date4'),
(495, 14, '2018-01-14 06:35:07', 1, 0, 'date4'),
(496, 15, '2018-01-14 06:35:07', 0, 0, 'date4'),
(497, 15, '2018-01-14 06:35:07', 0, 0, 'date5'),
(498, 16, '2018-01-14 06:35:07', 1, 0, 'date5'),
(499, 13, '2018-01-14 06:35:07', 1, 0, 'date5'),
(500, 12, '2018-01-14 06:35:07', 0, 0, 'date6'),
(501, 16, '2018-01-14 06:35:07', 1, 0, 'date6'),
(502, 15, '2018-01-14 06:35:07', 1, 0, 'date6'),
(503, 16, '2018-01-14 06:35:07', 1, 0, 'date7'),
(504, 14, '2018-01-14 06:35:07', 0, 0, 'date7'),
(505, 13, '2018-01-14 06:35:07', 1, 0, 'date7'),
(506, 14, '2018-01-21 04:35:07', 0, 0, 'date1'),
(507, 15, '2018-01-21 04:35:07', 1, 0, 'date1'),
(508, 16, '2018-01-21 04:35:07', 1, 0, 'date2'),
(509, 13, '2018-01-21 04:35:07', 1, 0, 'date2'),
(510, 12, '2018-01-21 04:35:07', 0, 0, 'date2'),
(511, 16, '2018-01-21 04:35:07', 1, 0, 'date1'),
(512, 15, '2018-01-21 04:35:07', 0, 0, 'date3'),
(513, 14, '2018-01-21 04:35:07', 1, 0, 'date3'),
(514, 16, '2018-01-21 04:35:07', 1, 0, 'date3'),
(515, 15, '2018-01-21 04:35:07', 0, 0, 'date4'),
(516, 12, '2018-01-21 04:35:07', 1, 0, 'date4'),
(517, 14, '2018-01-21 04:35:07', 1, 0, 'date4'),
(518, 13, '2018-01-21 04:35:07', 0, 0, 'date5'),
(519, 12, '2018-01-21 04:35:07', 1, 0, 'date5'),
(520, 14, '2018-01-21 04:35:07', 1, 0, 'date5'),
(521, 16, '2018-01-21 04:35:07', 0, 0, 'date6'),
(522, 13, '2018-01-21 04:35:07', 1, 0, 'date6'),
(523, 15, '2018-01-21 04:35:07', 1, 0, 'date6'),
(524, 16, '2018-01-21 04:35:07', 0, 0, 'date7'),
(525, 13, '2018-01-21 04:35:07', 1, 0, 'date7'),
(526, 12, '2018-01-21 04:35:07', 1, 0, 'date7'),
(527, 14, '2018-01-28 02:35:07', 0, 0, 'date1'),
(528, 12, '2018-01-28 02:35:07', 1, 0, 'date1'),
(529, 15, '2018-01-28 02:35:07', 1, 0, 'date1'),
(530, 16, '2018-01-28 02:35:07', 1, 0, 'date2'),
(531, 14, '2018-01-28 02:35:07', 0, 0, 'date2'),
(532, 16, '2018-01-28 02:35:07', 1, 0, 'date1'),
(533, 13, '2018-01-28 02:35:07', 0, 0, 'date3'),
(534, 15, '2018-01-28 02:35:07', 1, 0, 'date3'),
(535, 14, '2018-01-28 02:35:07', 1, 0, 'date3'),
(536, 12, '2018-01-28 02:35:07', 0, 0, 'date4'),
(537, 16, '2018-01-28 02:35:07', 1, 0, 'date4'),
(538, 13, '2018-01-28 02:35:07', 1, 0, 'date4'),
(539, 12, '2018-01-28 02:35:07', 0, 0, 'date5'),
(540, 14, '2018-01-28 02:35:07', 1, 0, 'date5'),
(541, 15, '2018-01-28 02:35:07', 1, 0, 'date5'),
(542, 12, '2018-01-28 02:35:07', 0, 0, 'date6'),
(543, 15, '2018-01-28 02:35:07', 1, 0, 'date6'),
(544, 16, '2018-01-28 02:35:07', 1, 0, 'date6'),
(545, 13, '2018-01-28 02:35:07', 0, 0, 'date7'),
(546, 16, '2018-01-28 02:35:07', 1, 0, 'date7'),
(547, 12, '2018-01-28 02:35:07', 1, 0, 'date7'),
(548, 14, '2018-02-04 00:35:07', 0, 1, 'date1'),
(549, 16, '2018-02-04 00:35:07', 1, 1, 'date2'),
(550, 13, '2018-02-04 00:35:07', 1, 1, 'date1'),
(551, 12, '2018-02-04 00:35:07', 1, 1, 'date2'),
(552, 15, '2018-02-04 00:35:07', 1, 1, 'date1'),
(553, 14, '2018-02-04 00:35:07', 0, 1, 'date2'),
(554, 13, '2018-02-04 00:35:07', 0, 1, 'date3'),
(555, 15, '2018-02-04 00:35:07', 1, 1, 'date3'),
(556, 13, '2018-02-04 00:35:07', 0, 1, 'date4'),
(557, 16, '2018-02-04 00:35:07', 1, 1, 'date3'),
(558, 12, '2018-02-04 00:35:07', 1, 1, 'date4'),
(559, 14, '2018-02-04 00:35:07', 1, 1, 'date4'),
(560, 13, '2018-02-04 00:35:07', 0, 1, 'date5'),
(561, 16, '2018-02-04 00:35:07', 1, 1, 'date5'),
(562, 15, '2018-02-04 00:35:07', 1, 1, 'date5'),
(563, 13, '2018-02-04 00:35:07', 0, 1, 'date6'),
(564, 12, '2018-02-04 00:35:07', 1, 1, 'date6'),
(565, 14, '2018-02-04 00:35:07', 1, 1, 'date6'),
(566, 13, '2018-02-04 00:35:07', 0, 1, 'date7'),
(567, 15, '2018-02-04 00:35:07', 1, 1, 'date7'),
(568, 12, '2018-02-04 00:35:07', 1, 1, 'date7');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `e_employees`
--

CREATE TABLE `e_employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `AFM` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `e_employees`
--

INSERT INTO `e_employees` (`id`, `name`, `last_name`, `AFM`, `status`) VALUES
(12, 'giannhs', 'kapoios', 123456, 1),
(13, 'giwrgos', 'koukou', 65432123, 1),
(14, 'maria', 'kartel', 4534562, 1),
(15, 'manos', 'frikas', 3214532, 1),
(16, 'giad', 'fgfg', 455662, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `e_payments`
--

CREATE TABLE `e_payments` (
  `id` int(11) NOT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `payment` float DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `hours` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `e_payments`
--

INSERT INTO `e_payments` (`id`, `id_emp`, `payment`, `date`, `hours`) VALUES
(15, 13, 229.17, '2017-11-28 21:00:00', 3),
(16, 12, 381.94, '2017-11-28 21:00:00', 5),
(17, 14, 763.89, '2017-11-28 21:00:00', 10),
(18, 15, 100, '2017-11-28 21:00:00', 0),
(19, 14, 40000, '2017-12-08 23:21:23', 1),
(20, 14, 412.35, '2017-12-08 23:22:03', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(9, '1513996478'),
(9, '1513996492'),
(9, '1513996508'),
(9, '1513996765'),
(9, '1513996835'),
(9, '1513996850'),
(10, '1513997060'),
(10, '1513997129'),
(10, '1513997156'),
(10, '1513997198'),
(10, '1513997217'),
(10, '1513997235'),
(10, '1513997292'),
(10, '1513997292'),
(10, '1513997300'),
(10, '1513997300'),
(10, '1513997343'),
(10, '1513997343'),
(10, '1513997597'),
(10, '1513997597'),
(10, '1513997612'),
(10, '1513997612'),
(10, '1513997654'),
(10, '1513997654'),
(10, '1513997732'),
(10, '1513997766'),
(10, '1513997884'),
(10, '1513997884'),
(10, '1513997899'),
(10, '1515735099'),
(10, '1515735099'),
(10, '1515735104'),
(10, '1515735104'),
(10, '1515735216'),
(10, '1515735216'),
(10, '1515735226'),
(10, '1515735226'),
(10, '1515735407'),
(11, '1515735479'),
(11, '1515737008'),
(11, '1515738435'),
(11, '1515743717'),
(11, '1515800685'),
(11, '1515801724'),
(11, '1515803795'),
(11, '1515803840'),
(11, '1515804321'),
(11, '1515804708'),
(11, '1515805845'),
(11, '1515806032'),
(11, '1515806992');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `p_brand`
--

CREATE TABLE `p_brand` (
  `id` int(11) NOT NULL,
  `id_p_items` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `exp_stat` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `p_brand`
--

INSERT INTO `p_brand` (`id`, `id_p_items`, `title`, `status`, `exp_stat`) VALUES
(29, 9, 'serkova', 1, 0),
(30, 9, 'absolute', 1, 0),
(31, 11, 'amstel', 0, 1),
(32, 11, 'A', 0, 1),
(33, 10, 'Jack', 1, 1),
(34, 12, 'amstel', 1, 1),
(35, 12, 'A', 1, 1),
(36, 13, 'nes', 1, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `p_categories`
--

CREATE TABLE `p_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `p_categories`
--

INSERT INTO `p_categories` (`id`, `title`, `status`) VALUES
(5, 'Ποτά', 1),
(6, 'kafes', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `p_items`
--

CREATE TABLE `p_items` (
  `id` int(11) NOT NULL,
  `id_p_categories` int(11) DEFAULT NULL,
  `title` varchar(50) CHARACTER SET greek DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Άδειασμα δεδομένων του πίνακα `p_items`
--

INSERT INTO `p_items` (`id`, `id_p_categories`, `title`, `status`) VALUES
(9, 5, 'Vodka', 1),
(10, 5, 'ouiski', 1),
(11, 5, 'mpira', 0),
(12, 5, 'mpira', 1),
(13, 6, 'frapes', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `p_units`
--

CREATE TABLE `p_units` (
  `id` int(11) NOT NULL,
  `id_p_brand` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `purc_date` timestamp NULL DEFAULT NULL,
  `exp_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `p_units`
--

INSERT INTO `p_units` (`id`, `id_p_brand`, `price`, `purc_date`, `exp_date`) VALUES
(6, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00'),
(7, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00'),
(8, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00'),
(9, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00'),
(10, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00'),
(11, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00'),
(12, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00'),
(14, 30, 1, '2017-12-08 21:00:00', '2017-12-08 21:00:00'),
(15, 29, 17, '2017-12-20 21:00:00', '2017-12-20 21:00:00'),
(16, 29, 17, '2017-12-20 21:00:00', '2017-12-20 21:00:00'),
(17, 29, 17, '2017-12-20 21:00:00', '2017-12-20 21:00:00'),
(18, 29, 17, '2017-12-20 21:00:00', '2017-12-20 21:00:00'),
(19, 29, 17, '2017-12-20 21:00:00', '2017-12-20 21:00:00'),
(20, 29, 7, '2017-12-22 21:00:00', '2017-12-22 21:00:00'),
(22, 36, 8, '2017-12-22 21:00:00', '2017-12-22 21:00:00');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `p_units_comp`
--

CREATE TABLE `p_units_comp` (
  `id` int(11) NOT NULL,
  `id_p_brand` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `purc_date` timestamp NULL DEFAULT NULL,
  `exp_date` timestamp NULL DEFAULT NULL,
  `sell_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `p_units_comp`
--

INSERT INTO `p_units_comp` (`id`, `id_p_brand`, `price`, `purc_date`, `exp_date`, `sell_date`) VALUES
(1, 29, 5, '2017-10-01 20:00:00', '2017-12-08 21:00:00', '2017-12-02 21:00:00'),
(2, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00', '2017-10-02 19:00:00'),
(3, 30, 1, '2017-10-08 20:00:00', '2017-12-08 21:00:00', '2017-10-09 20:00:00'),
(4, 30, 1, '2017-10-08 20:00:00', '2017-12-08 21:00:00', '2017-12-09 21:00:00'),
(5, 30, 1, '2017-12-08 21:00:00', '2017-12-08 21:00:00', '2018-12-09 21:00:00'),
(6, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00', '2017-12-20 21:00:00'),
(7, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00', '2017-12-20 21:00:00'),
(8, 29, 5, '2017-10-01 19:00:00', '2017-12-08 21:00:00', '2017-12-20 21:00:00'),
(9, 33, 2, '2017-12-22 21:00:00', '2017-12-22 21:00:00', '2017-12-22 21:00:00');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `salt`) VALUES
(8, 'antonis', 'antonis@gmail.com', 'd56032c93af515f5e5253b4a7565e0165c447796ea1c5b2f81acd7c1df41e7ee59cd7d37f9be4785031e582ed57e9bae54ef84229795a077d4a5db652a2526f0', 'b7b2fde218fc7acab58e0769dc53e24310af7b75b605d8aec8546dd36f26f635210f307887442427b29d85ec436d3de63ea09f553d14ff2e7e49eb43fc1e6289'),
(9, 'antwnis', 'antwnis@gmail.com', '992aac42eb23b648b0765b2e07d652e3804ad9cb8273c612b515ae24efde196df563168a915cc991bbd79713fc044d4720b91a02c6ba48d437a3cd0a5f70d551', '84b6c7b6654a651176843f273fd44cfc1b01b964a4c35e105f5d592169c699ea5124568b2737aa76fac45ff2f047277c9e863e4da5aaa1983bbc3363ef546bfb'),
(10, 'jonisp1', 'jonisp1@gmail.com', '326999919c6a24150315bcc04d434168430a8e91f811cb176e99bdabb4c0362b35e424cce181b256fd7e959edcb423b0aa180e0e1089765f0d9aee946a24cf3d', 'bd33087e5bde536ea6a0421cd8fc206cb5e5d2d238c0d20b46d1faf5ecb394c3136bf302ddbac99cbf614948cb246c8e57f5ab9acf0bf563cd17b05f0a92b626'),
(11, 'jonisp2', 'jonisp2@gmail.com', '001f7a915093bedfbb6c78a75b6bae13cb4fa5a2019b72dc61f02a9087235ce543201ce0e09f1c302a2dcd492a94481fbfe5baad692be57380b78a4ce8fde1fb', 'ce171187b618871839006d3232027ea06ff16b69c30c0658f6ecbcb0520f4f3c4c83307b23c5dbaa15b0542e50381140cea9f9ed7e57bd07e60b5d0e5b00af9f');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `c_programa`
--
ALTER TABLE `c_programa`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `e_employees`
--
ALTER TABLE `e_employees`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `e_payments`
--
ALTER TABLE `e_payments`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `p_brand`
--
ALTER TABLE `p_brand`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `p_categories`
--
ALTER TABLE `p_categories`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `p_items`
--
ALTER TABLE `p_items`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `p_units`
--
ALTER TABLE `p_units`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `p_units_comp`
--
ALTER TABLE `p_units_comp`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `c_programa`
--
ALTER TABLE `c_programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=569;
--
-- AUTO_INCREMENT για πίνακα `e_employees`
--
ALTER TABLE `e_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT για πίνακα `e_payments`
--
ALTER TABLE `e_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT για πίνακα `p_brand`
--
ALTER TABLE `p_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT για πίνακα `p_categories`
--
ALTER TABLE `p_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT για πίνακα `p_items`
--
ALTER TABLE `p_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT για πίνακα `p_units`
--
ALTER TABLE `p_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT για πίνακα `p_units_comp`
--
ALTER TABLE `p_units_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
