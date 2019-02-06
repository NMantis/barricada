-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost:3306
-- Χρόνος δημιουργίας: 13 Ιαν 2018 στις 03:38:26
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
