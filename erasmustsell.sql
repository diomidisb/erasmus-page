-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 13 Ιουν 2025 στις 11:04:12
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `erasmustsel`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `am` varchar(20) DEFAULT NULL,
  `passed_percentage` decimal(5,2) DEFAULT NULL,
  `gpa` decimal(4,2) DEFAULT NULL,
  `english_level` varchar(5) DEFAULT NULL,
  `other_languages` varchar(3) DEFAULT NULL,
  `grades_file` varchar(255) DEFAULT NULL,
  `english_cert_file` varchar(255) DEFAULT NULL,
  `other_certs_files` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `uni1_id` int(11) DEFAULT NULL,
  `uni2_id` int(11) DEFAULT NULL,
  `uni3_id` int(11) DEFAULT NULL,
  `uni1` varchar(255) DEFAULT NULL,
  `uni2` varchar(255) DEFAULT NULL,
  `uni3` varchar(255) DEFAULT NULL,
  `terms_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `accepted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `applications`
--

INSERT INTO `applications` (`id`, `username`, `name`, `surname`, `am`, `passed_percentage`, `gpa`, `english_level`, `other_languages`, `grades_file`, `english_cert_file`, `other_certs_files`, `created_at`, `uni1_id`, `uni2_id`, `uni3_id`, `uni1`, `uni2`, `uni3`, `terms_accepted`, `accepted`) VALUES
(29, 'diomidis', 'diomidis', 'bris', '2022202200147', 25.00, 15.00, 'A1', 'yes', 'uploads/6849a3a001611_project2.c', 'uploads/6849a3a001999_PROTYPO_EE.doc', 'uploads/6849a3a003e9c_Στιγμιότυπο οθόνης 2025-01-21 231026.png', '2025-06-11 15:41:20', NULL, NULL, NULL, 'University of Amsterdam', 'University of Barcelona', 'University of Bologna', 1, 1),
(30, 'konstantinos', 'konstantinos', 'bris', '2022202200145', 15.00, 20.00, 'A1', 'no', 'uploads/6849a3dab63bf_Στιγμιότυπο οθόνης 2024-03-15 154256.png', 'uploads/6849a3dab6686_Στιγμιότυπο οθόνης 2024-03-15 154256.png', 'uploads/6849a3dab686a_1.jpg', '2025-06-11 15:42:18', NULL, NULL, NULL, 'University of Barcelona', 'University of Warsaw', 'TU Delft', 1, 1),
(31, 'admin', 'Admin', 'Admin', '0000', 75.00, 10.00, 'B2', 'yes', 'uploads/6849a40acc0d1_project2.pdf', 'uploads/6849a40acc353_project2.c', 'uploads/6849a40acc543_rtx texture sprayer operation and parts.pdf', '2025-06-11 15:43:06', NULL, NULL, NULL, 'University of Amsterdam', 'University of Bologna', 'University of Warsaw', 1, 1),
(32, 'admin', 'Admin', 'Admin', '0000', 50.00, 55.00, 'A1', 'no', 'uploads/684ad88d23b41_PROTYPO_EE.doc', '', 'uploads/684ad88d23f68_project2.c', '2025-06-12 13:39:25', NULL, NULL, NULL, 'University of Peloponese', 'University of Barcelona', 'University of Barcelona', 1, 1),
(33, 'admin', 'Admin', 'Admin', '0000', 50.00, 50.00, 'A1', 'yes', 'uploads/684ad9e9e2401_project2.pdf', 'uploads/684ad9e9e2640_Στιγμιότυπο οθόνης 2025-01-21 231026.png', '', '2025-06-12 13:45:13', NULL, NULL, NULL, 'University of Amsterdam', 'University of Bologna', 'University of Peloponese', 1, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `application_period`
--

CREATE TABLE `application_period` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `application_period`
--

INSERT INTO `application_period` (`id`, `start_date`, `end_date`) VALUES
(13, '2025-06-12', '2025-06-29');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `value` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'results_published', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `universities`
--

CREATE TABLE `universities` (
  `university_id` int(11) NOT NULL,
  `university_name` varchar(255) DEFAULT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `universities`
--

INSERT INTO `universities` (`university_id`, `university_name`, `country`) VALUES
(1, 'University of Amsterdam', 'amsterdam'),
(2, 'TU Delft', ''),
(3, 'University of Barcelona', 'spain'),
(4, 'University of Warsaw', ''),
(5, 'University of Bologna', ''),
(7, 'University of peloponese', 'Greece');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `am` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `am`, `phone`, `email`, `username`, `password`, `role`) VALUES
(23, 'diomidis', 'bris', '2022202200147', '6980034951', 'diomididddfdsbrfeifs@gmail.com', 'diomidis', '$2y$10$ZPSnfIutR6HiNWQHq0h0heFWaLArW0IbAdNQgydelnc6XJkVrZRni', 'user'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$JXfNpJDmoLpinOmu4CJ9negbWBKPtuRmPQ5t1/jZzbnMDDraJJsVa', 'user'),
(25, 'konstantinos', 'bris', '2022202200145', '6980034951', 'konstantinosmpris@gmail.com', 'konstantinos', '$2y$10$PVpteJfaOq4oM8VaM40V3OA7/0VvV6hUJ6bDvcRjP6ZO8wcYuEKl6', 'user'),
(26, 'λιτσα', 'μπρη', '2022202200145', '6911111111', 'lili@hotmail.com', 'lila', '$2y$10$SQdvgYdqej3sDVtaLMSt1eD4cM.LEYjDrzVOvL3IWcDrUy/jMTSQC', 'user'),
(27, 'Admin', 'Admin', '0000', '0000', 'admin@gmail.com', 'admin', '$2y$10$ZPSnfIutR6HiNWQHq0h0heFWaLArW0IbAdNQgydelnc6XJkVrZRni', 'admin');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `application_period`
--
ALTER TABLE `application_period`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Ευρετήρια για πίνακα `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`university_id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT για πίνακα `application_period`
--
ALTER TABLE `application_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT για πίνακα `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `universities`
--
ALTER TABLE `universities`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
