-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 03 2022 г., 06:18
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `language`
--

-- --------------------------------------------------------

--
-- Структура таблицы `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `lang` varchar(33) NOT NULL,
  `word` varchar(3333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `words`
--

INSERT INTO `words` (`id`, `lang`, `word`) VALUES
(1, 'Ru', 'Контакт'),
(3, 'Eng', 'Contact\r\n'),
(4, 'Ru', 'Главная страница'),
(5, 'Eng', 'Home'),
(6, 'Ru', 'Первый набор'),
(7, 'Eng', 'First set'),
(8, 'Ru', 'Второй набор'),
(9, 'Eng', 'Second set'),
(10, 'Ru', 'Третий набор'),
(11, 'Eng', 'Third set'),
(12, 'Ru', 'Четвертый набор'),
(13, 'Eng', 'Fourth set'),
(14, 'Ru', 'Пятый набор'),
(15, 'Eng', 'Fifth set\r\n'),
(16, 'Ru', 'Шестой набор'),
(17, 'Eng', 'Sixth set'),
(18, 'Ru', 'Седьмой набор'),
(19, 'Eng', 'Seventh set'),
(20, 'Ru', 'Восьмой набор'),
(21, 'Eng', 'Eighth set'),
(22, 'Ru', 'Девятый набор'),
(23, 'Eng', 'Ninth set'),
(24, 'Ru', 'Десятый набор'),
(25, 'Eng', 'Tenth set'),
(26, 'Ru', 'Одиннадцатый набор'),
(27, 'Eng', 'Eleventh set'),
(30, 'Ru', 'Выбор языка'),
(31, 'Eng', 'Language selection '),
(32, 'Ru', 'Подробнее'),
(33, 'Eng', 'More details '),
(34, 'Ru', 'LCD-экран и пульт ДУ. Состав лабораторного комплекта:LCD1602 I2C, KY-022 + RC ,Arduino Uno'),
(35, 'Eng', 'LCD screen and remote control. Lab Kit Contents: LCD1602 I2C, KY-022 + RC, Arduino Uno'),
(36, 'Ru', 'Ультразвуковой дальномер и пассивный динамик. Состав лабораторного комплекта:HC-SR04, KY-006, Arduino Uno'),
(37, 'Eng', 'Ultrasonic rangefinder and passive speaker. Laboratory kit composition: HC-SR04, KY-006, Arduino Uno '),
(38, 'Ru', 'Сервопривод и двухосевой джойстик.Состав лабораторного комплекта: SG90 (2 штуки), KY-023, Arduino Uno'),
(39, 'Eng', 'Servo and 2-axis joystick Lab kit composition: SG90 (2 pieces), KY-023, Arduino Uno'),
(40, 'Ru', 'Светодиодная матрица и ЭНКОДЕР. Состав лабораторного комплекта:EC11, LED 8×8 MAX7219,Arduino Uno'),
(41, 'Eng', 'LED matrix and ENCODER. Lab Kit Contents: EC11, LED 8 × 8 MAX7219, Arduino Uno'),
(42, 'Ru', 'Состав лабораторного комплекта:KY-039, F3461AH, Arduino Nano'),
(43, 'Eng', 'Laboratory kit contents: KY-039, F3461AH, Arduino Nano '),
(44, 'Ru', 'Состав лабораторного комплекта: Membrane Keypad 1×4, KY-011, Arduino Nano'),
(45, 'Eng', 'Lab Kit Contents: Membrane Keypad 1 × 4, KY-011, Arduino Nano'),
(46, 'Ru', '© 2021 Авторские права: Никита Молоков '),
(47, 'Eng', '© 2021 Copyright: Nikita Molokov'),
(48, 'Ru', 'Каталог'),
(49, 'Eng', 'Catalog '),
(50, 'Ru', 'Состав набора'),
(51, 'Eng', 'Set composition '),
(52, 'Ru', 'Схема подключения'),
(53, 'Eng', 'Connection diagram '),
(56, 'Ru', '1. Название работы-LCD-экран и пульт ДУ'),
(57, 'Eng', '1. The name of the work is LCD screen and remote control'),
(58, 'Ru', '  1.1 Состав набора: LCD1602 I2, KY-022 + RC, Arduino Uno'),
(59, 'Eng', ' 1.1 Kit Contents: LCD1602 I2, KY-022 + RC, Arduino Uno'),
(60, 'Ru', '2. Цель работы'),
(61, 'Eng', '2. Purpose of work'),
(62, 'Ru', 'Целью работы является приобретение практических навыков '),
(63, 'Eng', 'The purpose of the work is to acquire practical skills for displaying '),
(64, 'Ru', 'вывода информации на экран и создания программы управления IR-пультом.'),
(65, 'Eng', 'for displaying information on the screen and creating a control program for the IR remote control.'),
(66, 'Ru', '3. Задачи работы:'),
(67, 'Eng', '3. Objectives of the work:'),
(68, 'Ru', 'Ознакомиться с библиотекой LiquidCrystal_I2C.h и работой '),
(69, 'Eng', 'Familiarize yourself with the LiquidCrystal_I2C.h library and how the '),
(70, 'Ru', 'интерфейса I2C с экраном LCD 1602'),
(71, 'Eng', 'I2C interface works with the 1602 LCD screen'),
(72, 'Ru', 'Ознакомиться с библиотекой IRremote.h'),
(73, 'Eng', 'Check out the IRremote.h library'),
(74, 'Ru', 'Создать алгоритм работы программы и'),
(75, 'Eng', 'Create an algorithm for the program and'),
(76, 'Ru', ' Написать код программы.'),
(77, 'Eng', ' Write the program code.'),
(78, 'Ru', ' 6. Задания к лабораторным работам'),
(79, 'Eng', ' 6. Tasks for laboratory work'),
(80, 'Ru', '        ЗАДАНИЕ 1.1'),
(81, 'Eng', '  ASSIGNMENT 1.1'),
(82, 'Ru', 'на экране LCD1602 вывести слово “Test”'),
(83, 'Eng', ' display the word “Test” on the LCD1602 screen'),
(84, 'Ru', ' ЗАДАНИЕ 1.2'),
(85, 'Eng', 'ASSIGNMENT 1.2'),
(86, 'Ru', 'На экране LCD1602 последовательно выводить разные слова: “TPT”, “TA-19V”, “TALLINN”, “2021”'),
(87, 'Eng', 'On the LCD1602 screen, sequentially display different words: “TPT”, “TA-19V”, “TALLINN”, “2021”'),
(88, 'Ru', 'ЗАДАНИЕ 1.3\r\n'),
(89, 'Eng', ' ASSIGNMENT 1.3'),
(90, 'Ru', 'Вывести в Serial monitor код нажимаемой на пульте управления клавиши'),
(91, 'Eng', 'Display the code of the key pressed on the control panel in the Serial monitor'),
(92, 'Ru', '      ЗАДАНИЕ 1.4'),
(93, 'Eng', 'ASSIGNMENT 1.4'),
(94, 'Ru', 'Создать программу, которая отображает на экране LCD1602 многоуровневое меню,'),
(95, 'Eng', 'Create a program that displays a multi-level menu on the LCD1602 screen,'),
(96, 'Ru', 'которое можно переключать с помощью пульта управления'),
(97, 'Eng', 'which can be switched using the remote control');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
