-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/08/2025 às 03:13
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
-- Banco de dados: `dueldle`
--

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
-- Estrutura para tabela `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `card_type` enum('Monster','Spell','Trap') NOT NULL,
  `attribute` enum('Water','Fire','Light','Earth','Darkness','Wind','Divine') DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `effect` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `tipe_efect` enum('Normal Spell','Quick-Play Spell','Continuous Spell','Equip Spell','Field Spell','Ritual Spell','Normal Trap','Continuous Trap','Counter Trap') DEFAULT NULL,
  `atk` int(11) DEFAULT NULL,
  `def` int(11) DEFAULT NULL,
  `tipe_monster` enum('Monster','Fusion','Synchro','XYZ','Link','Ritual') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cards`
--

INSERT INTO `cards` (`id`, `name`, `card_type`, `attribute`, `level`, `description`, `effect`, `image`, `tipe_efect`, `atk`, `def`, `tipe_monster`, `created_at`, `updated_at`) VALUES
(1, 'Dragão Branco de Olhos Azuis', 'Monster', 'Light', 8, 'Este lendário dragão é uma poderosa máquina de destruição. Praticamente invencível, muito poucos enfrentaram essa magnifica criatura e viveram para contar a história.', NULL, '1756426221_Dragão-Branco-de-Olhos-Azuis.jpg', NULL, 3000, 2500, 'Monster', '2025-08-29 03:10:21', '2025-08-29 03:10:21'),
(2, 'Mago Negro', 'Monster', 'Darkness', 7, 'O mago definitivo em termos de ataque e defesa.', NULL, '1756426389_mago-negro.jpg', NULL, 2500, 2100, 'Monster', '2025-08-29 03:13:09', '2025-08-29 03:13:09'),
(3, 'Dragão Negro de Olhos Vermelhos', 'Monster', 'Darkness', 7, 'Um dragão feroz com um ataque letal.', NULL, '1756426492_Dragão-Negro-de-Olhos-Vermelhos.jpg', NULL, 2400, 2000, 'Monster', '2025-08-29 03:14:52', '2025-08-29 03:14:52'),
(4, 'Exodia, \"O Proibido\"', 'Monster', 'Darkness', 3, NULL, 'Se, além deste card na sua mão, você tiver \"Perna Direita de \"O Proibido\"\", \"Perna Esquerda de \"O Proibido\"\", \"Braço Direito de \"O Proibido\"\" e \"Braço Esquerdo de \"O Proibido\"\", você vence o Duelo.', '1756426694_ExodiatheForbiddenOne-YGLD-PT-UR-1E.jpg', NULL, 1000, 1000, 'Monster', '2025-08-29 03:18:14', '2025-08-29 03:18:14'),
(5, 'Obelisco, o Atormentador', 'Monster', 'Divine', 10, NULL, 'Requer 3 Tributos para ser Invocado por Invocação-Normal (não pode ser Baixado Normalmente). A Invocação-Normal deste card não pode ser negada. Quando Invocado por Invocação-Normal, cards e efeitos não podem ser ativados. Não pode ser alvo de Magias, Armadilhas ou efeitos de card. Durante a Fase Final, se este card foi Invocado por Invocação-Especial: envie-o para o Cemitério. Você pode oferecer 2 monstros como Tributo; destrua todos os monstros que seu oponente controla. Este card não pode declarar um ataque no turno em que este efeito for ativado.', '1756426798_ObelisktheTormentor-PGLD-PT-GScR-1E.jpg', NULL, 4000, 4000, 'Monster', '2025-08-29 03:19:58', '2025-08-29 03:19:58'),
(6, 'Slifer, o Dragão Celeste', 'Monster', 'Divine', 10, NULL, 'Requer 3 Tributos para ser Invocado por Invocação-Normal (não pode ser Baixado Normalmente). A Invocação-Normal deste card não pode ser negada. Quando Invocado por Invocação-Normal, cards e efeitos não podem ser ativados. Durante a Fase Final, se este card foi Invocado por Invocação-Especial: envie-o para o Cemitério. Este card ganha 1000 de ATK e DEF para cada card em sua mão. Quando um ou mais monstros forem Invocados por Invocação-Normal ou Especial no lado do campo do seu oponente com a face para cima em Posição de Ataque: esses monstros perdem 2000 de ATK e, depois, se qualquer um deles tiver o ATK reduzido a 0 como resultado, destrua-o.', '1756426881_SlifertheSkyDragon-CT13-PT-ScR-LE.jpg', NULL, NULL, NULL, 'Monster', '2025-08-29 03:21:21', '2025-08-29 03:21:21'),
(7, 'O Dragão Alado de Rá', 'Monster', 'Divine', 10, NULL, 'Não pode ser Invocado por Invocação-Especial. Requer 3 Tributos para ser Invocado por Invocação-Normal (não pode ser Baixado Normalmente). A Invocação-Normal deste card não pode ser negada. Quando Invocado por Invocação-Normal, outros cards a efeitos não podem ser ativados. Quando este card for Invocado por Invocação-Normal: você pode pagar Pontos de Vida até ter apenas 100 restantes; este card ganha ATK e DEF igual ao valor de Pontos de Vida pagos. Você pode pagar 1000 Pontos de Vida e, depois, escolher 1 monstro no campo; destrua o alvo.', '1756426984_TheWingedDragonofRa-PGLD-PT-GScR-1E.jpg', NULL, NULL, NULL, 'Monster', '2025-08-29 03:23:04', '2025-08-29 03:23:04'),
(8, 'Kuriboh', 'Monster', 'Darkness', 1, NULL, 'Durante o turno do seu oponente, no cálculo de dano: você pode descartar este card; você não sofre dano de batalha desta batalha (este é um Efeito Rápido).', '1756427104_Kuriboh-YSYR-PT-C-1E.jpg', NULL, 300, 200, 'Monster', '2025-08-29 03:25:04', '2025-08-29 03:25:04'),
(9, 'Gaia, o Cavaleiro Impetuoso', 'Monster', 'Earth', 7, 'Um cavaleiro cujo cavalo galopa mais rápido do que o vento. A sua carga de batalha é de uma força avassaladora.', NULL, '1756427177_GaiaTheFierceKnight-YGLD-PT-C-1E.jpg', NULL, 2300, 2100, 'Monster', '2025-08-29 03:26:17', '2025-08-29 03:26:17'),
(10, 'Jinzo', 'Monster', 'Darkness', 6, NULL, 'Os Cards de Armadilha, bem como seus efeitos no campo, não podem ser ativados. Negue todos os efeitos dos Cards de Armadilha no campo.', '1756427292_Jinzo-LCJW-PT-R-1E.jpg', NULL, 2400, 1500, 'Monster', '2025-08-29 03:28:12', '2025-08-29 03:28:12'),
(11, 'Mago do Tempo', 'Monster', 'Light', 2, NULL, 'Uma vez por turno: você pode lançar uma moeda e escolher cara ou coroa. Se você ganhar, destrua todos os monstros que seu oponente controla. Se você perder, destrua todos monstros que você controla e, se isso acontecer, você sofre dano igual à metade do ATK total que esses monstros destruídos tinham no campo.', '1756427426_TimeWizard-LDK2-PTJ15.webp', NULL, 500, 400, 'Monster', '2025-08-29 03:30:26', '2025-08-29 03:30:26'),
(12, 'Alfa, o Guerreiro Imã', 'Monster', 'Earth', 4, 'Alfa, Beta e Gama se juntam em um para formar um monstro poderoso.', NULL, '1756427627_AlphaTheMagnetWarrior-YGLD-PT-C-1E.webp', NULL, 1400, 1700, 'Monster', '2025-08-29 03:33:47', '2025-08-29 03:33:47'),
(13, 'Beta, o Guerreiro Imã', 'Monster', 'Earth', 4, 'Alfa, Beta e Gama se juntam em um para formar um monstro poderoso.', NULL, '1756427670_BetaTheMagnetWarrior-YGLD-PT-C-1E.webp', NULL, 1700, 1600, 'Monster', '2025-08-29 03:34:30', '2025-08-29 03:34:30'),
(14, 'Gama, o Guerreiro Imã', 'Monster', 'Earth', 4, 'Alfa, Beta e Gama se juntam em um para formar um monstro poderoso.', NULL, '1756427701_GammaTheMagnetWarrior-YGLD-PT-C-1E.webp', NULL, 1500, 1800, 'Monster', '2025-08-29 03:35:01', '2025-08-29 03:35:01'),
(15, 'Valkyrion, o Guerreiro Imã', 'Monster', 'Earth', 8, NULL, 'Não pode ser Invocado por Invocação-Normal/Baixado. Você primeiro deve Invocá-lo por Invocação-Especial (da sua mão) ao oferecer como Tributo 1 \"Alfa, o Guerreiro Imã\", \"Beta, o Guerreiro Imã\" e \"Gama, o Guerreiro Imã\" da sua mão e/ou seu lado do campo. Você pode oferecer este card como Tributo e, depois, escolher 1 \"Alfa, o Guerreiro Imã\", \"Beta, o Guerreiro Imã\", e \"Gama, o Guerreiro Imã\" no seu Cemitério; Invoque os alvos por Invocação-Especial.', '1756427762_ValkyriontheMagnaWarrior-YGLD-PT-UR-1E.webp', NULL, 3500, 3850, 'Monster', '2025-08-29 03:36:02', '2025-08-29 03:36:02'),
(16, 'Caveira Invocada', 'Monster', 'Darkness', 6, 'Um demônio com poderes das trevas para confundir os inimigos. Entre os monstros do tipo demônio, é dos mais fortes.  (Este card deve ser sempre considerado como um card \"Arquidemônio\".)', NULL, '1756427888_SummonedSkull-YGLD-PT-C-1E.webp', NULL, 2500, 1200, 'Monster', '2025-08-29 03:38:08', '2025-08-29 03:38:08'),
(17, 'Blader Notável', 'Monster', 'Earth', 7, NULL, 'Este card ganha 500 de ATK para cada monstro do Tipo Dragão que seu oponente controla ou que estiver no Cemitério dele.', '1756427977_BusterBlader-YGLD-PT-C-1E-C.webp', NULL, 2600, 2300, 'Monster', '2025-08-29 03:39:37', '2025-08-29 03:39:37'),
(18, 'Pequena Maga Negra', 'Monster', 'Darkness', 6, NULL, 'Ganha 300 de ATK para cada \"Mago Negro\" ou \"Mago do Caos das Trevas\" no Cemitério.', '1756428020_DarkMagicianGirl-LEDD-PTA02.webp', NULL, 2000, 1700, 'Monster', '2025-08-29 03:40:20', '2025-08-29 03:40:20'),
(19, 'Espadas da Luz Reveladora', 'Spell', NULL, NULL, NULL, 'Depois da ativação deste card, ele permanece no campo, mas destrua-o durante a Fase Final do 3º turno do seu oponente. Quando este card for ativado: se seu oponente controlar um monstro com a face para baixo, vire com a face para cima todos os monstros que ele controla. Enquanto este card estiver com a face para cima no campo, os monstros do seu oponente não podem declarar um ataque.', '1756429202_SwordsofRevealingLight-LEDD-PTA25.webp', 'Continuous Spell', NULL, NULL, NULL, '2025-08-29 04:00:02', '2025-08-29 04:00:02');

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
-- Estrutura para tabela `falas`
--

CREATE TABLE `falas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(57, '0001_01_01_000000_create_users_table', 1),
(58, '0001_01_01_000001_create_cache_table', 1),
(59, '0001_01_01_000002_create_jobs_table', 1),
(60, '2025_08_27_173036_create_cards_table', 1),
(61, '2025_08_27_173137_create_personagens_table', 1),
(62, '2025_08_27_173352_create_falas_table', 1),
(63, '2025_08_27_182500_add_two_factor_columns_to_users_table', 1);

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
-- Estrutura para tabela `personagens`
--

CREATE TABLE `personagens` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$d9cJoFF.Lp23WUJw3w2Kf.0qL4.zlVvgF/vBfjE21WdJj3mkFxa4e', NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Índices de tabela `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `falas`
--
ALTER TABLE `falas`
  ADD PRIMARY KEY (`id`);

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
-- Índices de tabela `personagens`
--
ALTER TABLE `personagens`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `falas`
--
ALTER TABLE `falas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `personagens`
--
ALTER TABLE `personagens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;