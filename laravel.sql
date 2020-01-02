-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 02 2020 г., 23:18
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Стиль жизни', 0, NULL, NULL, NULL),
(2, 'Рецепты', 0, NULL, NULL, NULL),
(3, 'Обзоры', 0, NULL, NULL, NULL),
(4, 'Здоровье', 0, NULL, NULL, NULL),
(5, 'Саморазвитие', 1, NULL, NULL, NULL),
(6, 'Мысли', 1, NULL, NULL, NULL),
(7, 'Творчество', 1, NULL, NULL, NULL),
(8, 'Экология', 1, NULL, NULL, NULL),
(9, 'Завтраки', 2, NULL, NULL, NULL),
(10, 'Обеды', 2, NULL, NULL, NULL),
(11, 'Ужины', 2, NULL, NULL, NULL),
(12, 'Места', 3, NULL, NULL, NULL),
(13, 'Книги', 3, NULL, NULL, NULL),
(14, 'Фильмы', 3, NULL, NULL, NULL),
(15, 'Еда', 3, NULL, NULL, NULL),
(16, 'Красота', 4, NULL, NULL, NULL),
(17, 'Спорт', 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `laravel_temp`
--

CREATE TABLE `laravel_temp` (
  `emp_num` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_11_21_201000_create_posts_table', 1),
(20, '2019_12_19_103037_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Результат строится из ежедневных решений', 5, 'Многие слышали о выражении: \"К большой цели маленькими шагами\". Это правда. Результат наших стараний складывается из тех шагов, которые относятся к цели и выполняются ежедневно.\r\n\r\nЕсли вы читаете книгу, то по возможности каждый день и небольшими порциями. То же самое касается целей.\r\n\r\nЛюди, которые захотели похудеть, ежедневно следят за своим питанием и занимаются спортом. Те, кто хотят изучить какую-то технологию, тренируются и читают про неё каждый день.\r\n\r\nЕсли вы очень долго не можете чего-то достигнуть, задумайтесь, а делаете ли вы эти маленькие шаги, которые приближают к цели?\r\nЕсли нет, то пора задуматься о них, прописать, что вы можете делать ежедневно и начать.\r\n\r\nУ вас все получится', 'https://sun9-49.userapi.com/c841221/v841221796/fac/HwCX3thks80.jpg', NULL, NULL),
(2, 'Атмосфера кода', 6, 'Многие говорят: человеку нужен человек, а я вас заверю: программисту нужен программист.\r\n\r\nВот ты приходишь в универ, еще совсем зелёный решатель задачек по математике и умелый физикоисчислитель. Тебя начинают тыкать носом в алгоритмы и говорить об искусстве написания кода. Сначала ты морщишься и не понимаешь, зачем тебе какие-то деревья и списки не в магазин, а потом ты проникаешься атмосферой кода.\r\n\r\nТы гуглишь иностранные названия технологий, читаешь, ничего не понимаешь, заходишь на еще несколько сайтов, гуглишь по-английски, и только тогда до тебя доходит.\r\n\r\nТебе нужно сделать лабу, у тебя 0 идей - ты гуглишь и stackoverflow тебе помогает.\r\n\r\nАтмосфера кода - это ты, ночь и visual studio. Еще, конечно, можно приписать кофеек и кучу открытых вкладок в гугле, но я не об этом😉\r\n\r\nАтмосфера кода - это подписка в инстаграме на программистов, которые фоткают экраны со своим разноцветными кодом, а ты каждый раз приближаешь его и смотришь, на каком он языке пишет.\r\n\r\nАтмосфера кода - это ломание головы над какой-нибудь задачей, а потом гениальное решение.\r\n\r\nАтмосфера кода - это не бояться спросить у товарища, который может быть тебе поможет.\r\n\r\nАтмосфера кода - это быть непонятным для всех окружающих во всех вопросах, касающихся компьютера.\r\n\r\nАтмосфера кода - это когда слово драйвер для тебя больше не \"водитель\", а \"дрова\".\r\n\r\nЭто когда дедлайн становится твоим ежедневным словом, а английский - вторым языком.\r\n\r\nАтмосфера кода - это визуализация красивого офиса с кофейком и кучей программистов, а еще кофейни со столиком для одного, ноутбуком и опять же visual studio.\r\n\r\nАтмосфера кода проникает в кровь не сразу, всасывается постепенно, но эффект идет пожизненный.\r\n\r\nЕсли ты прогер, то ты прогер на всю жизнь!', 'https://sun9-38.userapi.com/c205816/v205816217/12f6a/ZZ_-6eV47Ug.jpg', NULL, '2019-12-21 16:34:56'),
(3, 'НеЛюбоф', 5, 'Иногда наступают моменты, когда отношения с человеком исчерпывают себя. Когда кроме учёбы поговорить не о чем, когда не находятся темы для разговора, когда атмосфера натянутая и ненастоящая, неискренняя.\r\n\r\nВ такие моменты нужно брать тайм-аут, ставить паузу в отношениях и восстанавливать свою социальность и человеколюбие.\r\n\r\nВот у меня сейчас такое же чувство, когда хочется закрыться от всех, побыть одной и восстановить себя внутри.\r\n\r\nМожно очень быстро перегореть, но очень долго после этого восстанавливаться.', 'https://sun9-33.userapi.com/c840236/v840236675/22755/UwgWspjLtT4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `laravel_temp`
--
ALTER TABLE `laravel_temp`
  ADD PRIMARY KEY (`emp_num`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
