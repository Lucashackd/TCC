-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/09/2024 às 13:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mycomedytube`
--
CREATE DATABASE IF NOT EXISTS `mycomedytube` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mycomedytube`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `flags`
--

CREATE TABLE `flags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `flags`
--

INSERT INTO `flags` (`id`, `created_at`, `updated_at`, `title`, `description`) VALUES
(1, '2024-09-09 23:46:45', '2024-09-13 21:51:56', 'Obesidade', 'Condição quando uma pessoa está muito acima do peso'),
(2, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Anorexia', 'Anorexia é um transtorno alimentar em que uma pessoa tem uma preocupação excessiva com o peso e a forma do corpo.'),
(3, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Bulimia', 'Bulimia é um transtorno alimentar em que uma pessoa come grandes quantidades de alimentos e depois tenta se livrar das calorias consumidas.'),
(4, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Depressão', 'Depressão é um transtorno de humor em que uma pessoa tem sentimentos de tristeza, perda ou raiva que interferem na vida diária.'),
(5, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Ansiedade', 'Ansiedade é um transtorno de humor em que uma pessoa tem sentimentos de preocupação, medo ou nervosismo que interferem na vida diária.'),
(6, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Esquizofrenia', 'Esquizofrenia é um transtorno mental em que uma pessoa tem dificuldade em distinguir entre a realidade e a imaginação.'),
(7, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transtorno Bipolar', 'Transtorno bipolar é um transtorno de humor em que uma pessoa tem mudanças extremas de humor, energia e atividade.'),
(8, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transtorno de Personalidade Borderline', 'Transtorno de personalidade borderline é um transtorno de personalidade em que uma pessoa tem dificuldade em regular as emoções e os relacionamentos.'),
(9, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transtorno de Personalidade Antissocial', 'Transtorno de personalidade antissocial é um transtorno de personalidade em que uma pessoa tem dificuldade em seguir as normas sociais e legais.'),
(10, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transtorno de Personalidade Narcisista', 'Transtorno de personalidade narcisista é um transtorno de personalidade em que uma pessoa tem um senso exagerado de importância e necessidade de atenção.'),
(11, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transtorno de Personalidade Esquiva', 'Transtorno de personalidade esquiva é um transtorno de personalidade em que uma pessoa tem dificuldade em se relacionar com os outros e se sente inadequada.'),
(12, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Síndrome de Down', 'A síndrome de Down é uma condição genética em que uma pessoa nasce com um cromossomo extra.'),
(13, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Nanismo', 'Nanismo é uma condição médica em que uma pessoa é significativamente menor do que a média para a sua idade e sexo.'),
(14, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Gigantismo', 'Gigantismo é uma condição médica em que uma pessoa é significativamente maior do que a média para a sua idade e sexo.'),
(15, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Síndrome de Asperger', 'A síndrome de Asperger é um transtorno do desenvolvimento que afeta a comunicação e o comportamento de uma pessoa.'),
(16, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Autismo', 'O autismo é um transtorno do desenvolvimento que afeta a comunicação e o comportamento de uma pessoa.'),
(17, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Deficiência Visual', 'Deficiência visual é uma condição em que uma pessoa tem dificuldade em ver ou não consegue ver.'),
(18, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Deficiência Auditiva', 'Deficiência auditiva é uma condição em que uma pessoa tem dificuldade em ouvir ou não consegue ouvir.'),
(19, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Deficiência Física', 'Deficiência física é uma condição em que uma pessoa tem dificuldade em se mover ou não consegue se mover.'),
(20, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Deficiência Intelectual', 'Deficiência intelectual é uma condição em que uma pessoa tem dificuldade em aprender ou não consegue aprender.'),
(21, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Deficiência Múltipla', 'Deficiência múltipla é uma condição em que uma pessoa tem mais de uma deficiência.'),
(22, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Cristianismo', 'Cristianismo é uma religião baseada na vida e nos ensinamentos de Jesus Cristo.'),
(23, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Islamismo', 'Islamismo é uma religião baseada nos ensinamentos do profeta Maomé.'),
(24, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Judaísmo', 'Judaísmo é uma religião baseada nos ensinamentos da Torá.'),
(25, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Hinduísmo', 'Hinduísmo é uma religião baseada nos Vedas.'),
(26, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Budismo', 'Budismo é uma religião baseada nos ensinamentos de Buda.'),
(27, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Raça Negra', 'Raça negra é um grupo de pessoas que compartilham características físicas semelhantes, como a cor da pele.'),
(28, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Raça Branca', 'Raça branca é um grupo de pessoas que compartilham características físicas semelhantes, como a cor da pele.'),
(29, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Raça Amarela', 'Raça amarela é um grupo de pessoas que compartilham características físicas semelhantes, como a cor da pele.'),
(30, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Raça Indígena', 'Raça indígena é um grupo de pessoas que compartilham características físicas semelhantes, como a cor da pele.'),
(31, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Raça Parda', 'Raça parda é um grupo de pessoas que compartilham características físicas semelhantes, como a cor da pele.'),
(32, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Homossexualidade', 'Homossexualidade é a atração romântica ou sexual entre pessoas do mesmo sexo.'),
(33, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Bissexualidade', 'Bissexualidade é a atração romântica ou sexual entre pessoas de ambos os sexos.'),
(34, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transexualidade', 'Transexualidade é a identidade de gênero de uma pessoa que não corresponde ao sexo atribuído no nascimento.'),
(35, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Intersexualidade', 'Intersexualidade é uma condição em que uma pessoa nasce com características sexuais que não se encaixam nas definições tradicionais de masculino ou feminino.'),
(36, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Heterossexualidade', 'Heterossexualidade é a atração romântica ou sexual entre pessoas de sexos opostos.'),
(37, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transtorno de Déficit de Atenção e Hiperatividade', 'Transtorno de déficit de atenção e hiperatividade é um transtorno neurológico em que uma pessoa tem dificuldade em prestar atenção e controlar o comportamento.'),
(38, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Transtorno Obsessivo-Compulsivo', 'Transtorno obsessivo-compulsivo é um transtorno de ansiedade em que uma pessoa tem pensamentos obsessivos e comportamentos compulsivos.'),
(39, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Capitalismo', 'Capitalismo é um sistema econômico baseado na propriedade privada dos meios de produção e na busca do lucro.'),
(40, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Socialismo', 'Socialismo é um sistema econômico baseado na propriedade coletiva dos meios de produção e na distribuição equitativa da riqueza.'),
(41, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Comunismo', 'Comunismo é um sistema político baseado na propriedade coletiva dos meios de produção e na distribuição equitativa da riqueza.'),
(42, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Feminismo', 'Feminismo é um movimento social e político que defende a igualdade de gênero e os direitos das mulheres.'),
(43, '2024-09-09 23:46:45', '2024-09-09 23:46:45', 'Machismo', 'Machismo é uma atitude de superioridade masculina em relação às mulheres.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `flag_user`
--

CREATE TABLE `flag_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `flag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `flag_user`
--

INSERT INTO `flag_user` (`user_id`, `flag_id`, `created_at`, `updated_at`) VALUES
(1, 6, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(1, 14, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(2, 5, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(2, 37, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(3, 6, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(3, 11, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(4, 1, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(4, 39, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(5, 25, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(5, 39, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(6, 2, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(6, 35, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(7, 12, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(7, 22, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(8, 24, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(8, 37, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(9, 16, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(9, 35, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(10, 9, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(10, 17, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(11, 12, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(11, 37, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(12, 25, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(12, 34, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(13, 2, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(13, 11, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(14, 27, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(14, 36, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(15, 37, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(15, 39, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(16, 13, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(16, 38, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(17, 8, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(17, 42, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(18, 22, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(18, 33, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(19, 15, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(19, 29, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(20, 14, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(20, 42, '2024-09-09 23:46:45', '2024-09-09 23:46:45');

-- --------------------------------------------------------

--
-- Estrutura para tabela `flag_video`
--

CREATE TABLE `flag_video` (
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `flag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `flag_video`
--

INSERT INTO `flag_video` (`video_id`, `flag_id`, `created_at`, `updated_at`) VALUES
(1, 5, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(1, 24, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(2, 28, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(2, 38, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(3, 12, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(3, 18, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(4, 6, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(4, 42, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(5, 4, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(5, 25, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(6, 17, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(6, 39, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(7, 29, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(7, 34, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(8, 21, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(8, 30, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(9, 26, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(9, 42, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(10, 16, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(10, 32, '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(13, 1, '2024-09-16 10:28:33', '2024-09-16 10:28:33'),
(13, 20, '2024-09-16 10:25:25', '2024-09-16 10:25:25'),
(13, 39, '2024-09-16 10:25:46', '2024-09-16 10:25:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_16_192008_create_videos_table', 1),
(5, '2024_08_16_192601_create_flags_table', 1),
(6, '2024_09_08_230330_create_flag_user_table', 1),
(7, '2024_09_08_231823_create_flag_video_table', 1),
(8, '2024_09_12_183138_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sra. Daiana Amaral Filho', 'abatista@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'UvrqIpuqGe', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(2, 'Eduardo Théo Pena', 'souza.mateus@example.com', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', '0DAaueRfJO', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(3, 'Dr. Emiliano Colaço Vega', 'adriele07@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'cgvZj5mkYs', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(4, 'Dr. Martinho Delgado', 'batista.benjamin@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'X6k6fFKev3', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(5, 'James Edilson Zaragoça Jr.', 'dpedrosa@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'L1rMqV5HzD', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(6, 'Lia Dias', 'henrique37@example.org', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'RvH5eFA4nN', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(7, 'Srta. Ornela Giovana Grego', 'leandro19@example.com', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'uBTrr20peR', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(8, 'Anderson Natal Marés Filho', 'agostinho.sepulveda@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'k0wE77b8MG', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(9, 'Samanta Urias', 'benites.diogo@example.org', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', '3SCu46hrOM', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(10, 'James Pereira Leal Sobrinho', 'milena59@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'SjoTEJ9LfD', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(11, 'Santiago Rios Carrara', 'delgado.tamara@example.org', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'mdUiSqF54U', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(12, 'Luciana Rocha Jr.', 'barros.paloma@example.com', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', '9SKnOA602f', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(13, 'Sra. Sarah Faro Gomes Filho', 'luara.vega@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', '1z8gBGHKsX', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(14, 'Dr. Isabel Galindo Filho', 'cristina80@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 's6ETLI3MF7', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(15, 'Srta. Sônia Kelly Beltrão', 'urangel@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'bIzbE1WrOf', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(16, 'Dr. Isaac Lovato Sobrinho', 'dearruda.naiara@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'iIqeP4EuH3', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(17, 'Noel Valência Jr.', 'gael.mascarenhas@example.org', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'OE734avbO2', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(18, 'Srta. Regiane Duarte Azevedo', 'mario49@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'mqIl5F1y4u', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(19, 'Srta. Alícia Heloise Guerra', 'tainara26@example.com', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', '1OrR0Xn8Rl', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(20, 'Andréa Mirela Pena Sobrinho', 'qsoto@example.net', '2024-09-09 23:46:45', '$2y$12$yzOBbVincfZ50NdXD7JaOu2UthMX6ksIO5N5qXyPXT.aM/ghkBIIe', 'ddVMhjjImZ', '2024-09-09 23:46:45', '2024-09-09 23:46:45'),
(21, 'Lucas Hackbart Döhnert', 'lucashackd@gmail.com', NULL, '$2y$12$1ddjgIwHQsMT4WwGLK8aguCJSUR34xm7ZiRycfNbmpas0GMfhMYIC', NULL, '2024-09-12 23:40:50', '2024-09-12 23:40:50'),
(25, 'Lucas 10', 'lucas10@gmail.com', NULL, '$2y$12$F4o8KEsX2Wy/SXWK2GQ.r.hu7cMg.jmJFS1UjHZ1sQiEDseX97/lS', NULL, '2024-09-13 02:26:10', '2024-09-13 02:27:52'),
(26, 'Lucas 100', 'lucas100@gmail.com', NULL, '$2y$12$UD6EEN./cUVvOLx/C2Fg9eetKIrwb2NIbwWS85vHXj/Vc7m8/2Swm', NULL, '2024-09-13 02:47:12', '2024-09-13 03:42:49'),
(28, 'ADMIN', 'admin@teste.com', NULL, '$2y$12$hncrzRstUWpfht6lo13bvOgSje3VjYRTpsZ512mLgVcgH1BQUgd7e', NULL, '2024-09-13 19:33:15', '2024-09-13 19:33:15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `path` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `videos`
--

INSERT INTO `videos` (`id`, `created_at`, `updated_at`, `title`, `description`, `path`, `user_id`) VALUES
(1, '1987-10-06 11:03:18', '1989-11-17 17:09:47', 'Itaque voluptas eligendi praesentium quam aliquid.', 'Tempore et voluptates earum provident placeat quasi asperiores architecto. Id ipsum consectetur dicta dolorem sint consequatur. Repellendus facilis porro dolorum omnis velit atque.', 'Show do Burrão - Ep. 5   The Noite (15 10 21)', 11),
(2, '1974-05-04 23:10:14', '1996-12-11 05:44:56', 'Illum dolores voluptatum laboriosam non sapiente architecto dolor.', 'Et numquam odit est. Consectetur culpa rerum alias quaerat aliquid minima rem. Sunt voluptatibus deserunt tenetur. Quidem cumque eveniet explicabo quo fugiat. Blanditiis aut molestias consequuntur necessitatibus mollitia.', 'http://www.rangel.com.br/suscipit-et-repudiandae-nihil-in-est.html', 12),
(3, '1999-01-24 20:58:39', '1987-06-28 02:38:46', 'Assumenda sunt fugiat omnis iure sunt sint.', 'Voluptatem debitis ut cumque eos voluptas quaerat dolore. Tenetur doloremque corrupti deleniti iusto adipisci.', 'http://www.reis.com.br/dolor-doloremque-alias-beatae-omnis-dolor-autem.html', 13),
(4, '1995-10-22 00:40:32', '2003-01-06 11:54:12', 'Beatae quae quia aut.', 'Exercitationem ut et dolorum consectetur qui. Libero quis labore facilis eveniet autem. Unde voluptas vitae eius autem consequatur ullam provident.', 'http://www.rios.net.br/vel-qui-eligendi-dignissimos-omnis-veniam-fuga', 14),
(5, '1985-12-12 17:04:47', '1989-02-03 16:13:00', 'Modi dolor molestiae dolores neque.', 'Omnis incidunt rerum non excepturi qui ipsa. Tempora delectus consequatur vel incidunt deserunt cumque quia. Debitis sunt distinctio quo aut est quis. Et voluptate quia voluptatum sunt.', 'http://jimenes.com.br/dolores-maxime-sequi-eos-nesciunt-odio-rerum.html', 15),
(6, '2011-11-26 16:23:40', '1992-07-03 23:11:48', 'Ipsam alias quibusdam tenetur esse totam ipsa voluptatem.', 'Pariatur laudantium qui repudiandae corporis inventore totam iure. Et adipisci voluptates animi praesentium dignissimos laborum similique. In eligendi et eaque labore repellendus quam voluptatem.', 'http://www.pereira.br/', 16),
(7, '1988-03-04 17:58:12', '1979-01-17 04:25:06', 'Nobis est corrupti eveniet aut commodi.', 'Quis dolores architecto nostrum sed. Voluptate ut ratione quasi optio aspernatur.', 'http://godoi.org/aspernatur-aut-ad-maiores-aut-voluptates.html', 17),
(8, '2015-01-03 15:28:09', '1988-03-24 15:05:42', 'Unde excepturi quis quis dolores.', 'Dicta et fugiat odit porro. Illo voluptatum similique a nostrum. Et enim adipisci itaque quae eos et.', 'https://soares.net.br/iusto-voluptatum-nisi-aut.html', 18),
(9, '2011-10-25 07:36:17', '1972-10-25 05:45:32', 'Similique ipsum delectus asperiores dolorem omnis expedita quasi.', 'Nisi distinctio qui corrupti excepturi tempora. Omnis esse pariatur maiores et nostrum. Ratione minima ullam sed est.', 'https://vieira.com.br/et-placeat-consequatur-nihil-temporibus-magni-fugiat-ad.html', 19),
(10, '1996-01-28 00:08:15', '1980-10-23 21:59:37', 'Laudantium qui molestiae autem repellat harum in maiores quia.', 'Itaque occaecati quo natus. Consequuntur fuga sunt sit ullam quia totam consequatur. Debitis unde expedita consequatur et quia dolorem dolore ut.', 'http://caldeira.org/', 20),
(11, '2024-09-12 13:05:22', '2024-09-12 13:05:22', 'Teste', 'testeteste', 'https://www.youtube.com/watch?v=Iz5IP-N2VvM', 6),
(13, '2024-09-13 04:04:46', '2024-09-13 04:04:46', 'Show do Burrão - Ep. 5 | The Noite (15/10/21)', 'Enquanto o SBT celebra a volta do icônico Show do Milhão, nós, bem mais modestos, aproveitamos para lançar o grande Show do Burrão, o jogo que vale menos que dois reais!', 'https://www.youtube.com/embed/emZ898_lWM0?si=F_sETXerEMAq_K5V', 25);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `flag_user`
--
ALTER TABLE `flag_user`
  ADD PRIMARY KEY (`user_id`,`flag_id`),
  ADD KEY `flag_user_flag_id_foreign` (`flag_id`);

--
-- Índices de tabela `flag_video`
--
ALTER TABLE `flag_video`
  ADD PRIMARY KEY (`video_id`,`flag_id`),
  ADD KEY `flag_video_flag_id_foreign` (`flag_id`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices de tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `flags`
--
ALTER TABLE `flags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `flag_user`
--
ALTER TABLE `flag_user`
  ADD CONSTRAINT `flag_user_flag_id_foreign` FOREIGN KEY (`flag_id`) REFERENCES `flags` (`id`),
  ADD CONSTRAINT `flag_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `flag_video`
--
ALTER TABLE `flag_video`
  ADD CONSTRAINT `flag_video_flag_id_foreign` FOREIGN KEY (`flag_id`) REFERENCES `flags` (`id`),
  ADD CONSTRAINT `flag_video_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
