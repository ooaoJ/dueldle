-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+deb12u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/09/2025 às 02:31
-- Versão do servidor: 10.11.11-MariaDB-0+deb12u1
-- Versão do PHP: 8.2.29

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

--
-- Despejando dados para a tabela `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-e70ab1f5c175afcf234057f83948832c', 'i:1;', 1756693251),
('laravel-cache-e70ab1f5c175afcf234057f83948832c:timer', 'i:1756693251;', 1756693251);

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
  `tipe_monster` varchar(255) DEFAULT NULL,
  `tipe_monster_card` enum('Monster','Fusion','Synchro','XYZ','Link','Ritual') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cards`
--

INSERT INTO `cards` (`id`, `name`, `card_type`, `attribute`, `level`, `description`, `effect`, `image`, `tipe_efect`, `atk`, `def`, `tipe_monster`, `tipe_monster_card`, `created_at`, `updated_at`) VALUES
(1, 'Dragão Branco de Olhos Azuis', 'Monster', 'Light', 8, 'Este lendário dragão é uma poderosa máquina de destruição. Praticamente invencível, muito poucos enfrentaram essa magnifica criatura e viveram para contar a história.', NULL, '1756426221_Dragão-Branco-de-Olhos-Azuis.jpg', NULL, 3000, 2500, 'Dragão', 'Monster', '2025-08-29 12:10:21', '2025-08-29 12:10:21'),
(2, 'Mago Negro', 'Monster', 'Darkness', 7, 'O mago definitivo em termos de ataque e defesa.', NULL, '1756426389_mago-negro.jpg', NULL, 2500, 2100, 'Mago', 'Monster', '2025-08-29 12:13:09', '2025-08-29 12:13:09'),
(3, 'Dragão Negro de Olhos Vermelhos', 'Monster', 'Darkness', 7, 'Um dragão feroz com um ataque letal.', NULL, '1756426492_Dragão-Negro-de-Olhos-Vermelhos.jpg', NULL, 2400, 2000, 'Dragão', 'Monster', '2025-08-29 12:14:52', '2025-08-29 12:14:52'),
(4, 'Exodia, \"O Proibido\"', 'Monster', NULL, 3, NULL, 'Se, além deste card na sua mão, você tiver \"Perna Direita de \"O Proibido\"\", \"Perna Esquerda de \"O Proibido\"\", \"Braço Direito de \"O Proibido\"\" e \"Braço Esquerdo de \"O Proibido\"\", você vence o Duelo.', '1756426694_ExodiatheForbiddenOne-YGLD-PT-UR-1E.jpg', NULL, 1000, 1000, 'Mago', 'Monster', '2025-08-29 12:18:14', '2025-09-01 02:37:13'),
(5, 'Obelisco, o Atormentador', 'Monster', 'Divine', 10, NULL, 'Requer 3 Tributos para ser Invocado por Invocação-Normal (não pode ser Baixado Normalmente). A Invocação-Normal deste card não pode ser negada. Quando Invocado por Invocação-Normal, cards e efeitos não podem ser ativados. Não pode ser alvo de Magias, Armadilhas ou efeitos de card. Durante a Fase Final, se este card foi Invocado por Invocação-Especial: envie-o para o Cemitério. Você pode oferecer 2 monstros como Tributo; destrua todos os monstros que seu oponente controla. Este card não pode declarar um ataque no turno em que este efeito for ativado.', '1756426798_ObelisktheTormentor-PGLD-PT-GScR-1E.jpg', NULL, 4000, 4000, 'Divino', 'Monster', '2025-08-29 12:19:58', '2025-08-29 12:19:58'),
(6, 'Slifer, o Dragão Celeste', 'Monster', 'Divine', 10, NULL, 'Requer 3 Tributos para ser Invocado por Invocação-Normal (não pode ser Baixado Normalmente). A Invocação-Normal deste card não pode ser negada. Quando Invocado por Invocação-Normal, cards e efeitos não podem ser ativados. Durante a Fase Final, se este card foi Invocado por Invocação-Especial: envie-o para o Cemitério. Este card ganha 1000 de ATK e DEF para cada card em sua mão. Quando um ou mais monstros forem Invocados por Invocação-Normal ou Especial no lado do campo do seu oponente com a face para cima em Posição de Ataque: esses monstros perdem 2000 de ATK e, depois, se qualquer um deles tiver o ATK reduzido a 0 como resultado, destrua-o.', '1756426881_SlifertheSkyDragon-CT13-PT-ScR-LE.jpg', NULL, NULL, NULL, 'Divino', 'Monster', '2025-08-29 12:21:21', '2025-08-29 12:21:21'),
(7, 'O Dragão Alado de Rá', 'Monster', 'Divine', 10, NULL, 'Não pode ser Invocado por Invocação-Especial. Requer 3 Tributos para ser Invocado por Invocação-Normal (não pode ser Baixado Normalmente). A Invocação-Normal deste card não pode ser negada. Quando Invocado por Invocação-Normal, outros cards a efeitos não podem ser ativados. Quando este card for Invocado por Invocação-Normal: você pode pagar Pontos de Vida até ter apenas 100 restantes; este card ganha ATK e DEF igual ao valor de Pontos de Vida pagos. Você pode pagar 1000 Pontos de Vida e, depois, escolher 1 monstro no campo; destrua o alvo.', '1756426984_TheWingedDragonofRa-PGLD-PT-GScR-1E.jpg', NULL, NULL, NULL, 'Divino', 'Monster', '2025-08-29 12:23:04', '2025-08-29 12:23:04'),
(8, 'Kuriboh', 'Monster', 'Darkness', 1, NULL, 'Durante o turno do seu oponente, no cálculo de dano: você pode descartar este card; você não sofre dano de batalha desta batalha (este é um Efeito Rápido).', '1756427104_Kuriboh-YSYR-PT-C-1E.jpg', NULL, 300, 200, 'Demônio', 'Monster', '2025-08-29 12:25:04', '2025-08-29 12:25:04'),
(9, 'Gaia, o Cavaleiro Impetuoso', 'Monster', 'Earth', 7, 'Um cavaleiro cujo cavalo galopa mais rápido do que o vento. A sua carga de batalha é de uma força avassaladora.', NULL, '1756427177_GaiaTheFierceKnight-YGLD-PT-C-1E.jpg', NULL, 2300, 2100, 'Guerreiro', 'Monster', '2025-08-29 12:26:17', '2025-08-29 12:26:17'),
(10, 'Jinzo', 'Monster', 'Darkness', 6, NULL, 'Os Cards de Armadilha, bem como seus efeitos no campo, não podem ser ativados. Negue todos os efeitos dos Cards de Armadilha no campo.', '1756427292_Jinzo-LCJW-PT-R-1E.jpg', NULL, 2400, 1500, 'Máquina', 'Monster', '2025-08-29 12:28:12', '2025-08-29 12:28:12'),
(11, 'Mago do Tempo', 'Monster', 'Light', 2, NULL, 'Uma vez por turno: você pode lançar uma moeda e escolher cara ou coroa. Se você ganhar, destrua todos os monstros que seu oponente controla. Se você perder, destrua todos monstros que você controla e, se isso acontecer, você sofre dano igual à metade do ATK total que esses monstros destruídos tinham no campo.', '1756427426_TimeWizard-LDK2-PTJ15.webp', NULL, 500, 400, 'Mago', 'Monster', '2025-08-29 12:30:26', '2025-08-29 12:30:26'),
(12, 'Alfa, o Guerreiro Imã', 'Monster', NULL, 4, 'Alfa, Beta e Gama se juntam em um para formar um monstro poderoso.', NULL, '1756427627_AlphaTheMagnetWarrior-YGLD-PT-C-1E.webp', NULL, 1400, 1700, 'Rocha', 'Monster', '2025-08-29 12:33:47', '2025-09-01 04:34:01'),
(13, 'Beta, o Guerreiro Imã', 'Monster', NULL, 4, 'Alfa, Beta e Gama se juntam em um para formar um monstro poderoso.', NULL, '1756427670_BetaTheMagnetWarrior-YGLD-PT-C-1E.webp', NULL, 1700, 1600, 'Rocha', 'Monster', '2025-08-29 12:34:30', '2025-09-01 04:34:14'),
(14, 'Gama, o Guerreiro Imã', 'Monster', NULL, 4, 'Alfa, Beta e Gama se juntam em um para formar um monstro poderoso.', NULL, '1756427701_GammaTheMagnetWarrior-YGLD-PT-C-1E.webp', NULL, 1500, 1800, 'Rocha', 'Monster', '2025-08-29 12:35:01', '2025-09-01 04:34:35'),
(15, 'Valkyrion, o Guerreiro Imã', 'Monster', 'Earth', 8, NULL, 'Não pode ser Invocado por Invocação-Normal/Baixado. Você primeiro deve Invocá-lo por Invocação-Especial (da sua mão) ao oferecer como Tributo 1 \"Alfa, o Guerreiro Imã\", \"Beta, o Guerreiro Imã\" e \"Gama, o Guerreiro Imã\" da sua mão e/ou seu lado do campo. Você pode oferecer este card como Tributo e, depois, escolher 1 \"Alfa, o Guerreiro Imã\", \"Beta, o Guerreiro Imã\", e \"Gama, o Guerreiro Imã\" no seu Cemitério; Invoque os alvos por Invocação-Especial.', '1756427762_ValkyriontheMagnaWarrior-YGLD-PT-UR-1E.webp', NULL, 3500, 3850, 'Guerreiro', 'Monster', '2025-08-29 12:36:02', '2025-08-29 12:36:02'),
(16, 'Caveira Invocada', 'Monster', 'Darkness', 6, 'Um demônio com poderes das trevas para confundir os inimigos. Entre os monstros do tipo demônio, é dos mais fortes.  (Este card deve ser sempre considerado como um card \"Arquidemônio\".)', NULL, '1756427888_SummonedSkull-YGLD-PT-C-1E.webp', NULL, 2500, 1200, 'Demônio', 'Monster', '2025-08-29 12:38:08', '2025-08-29 12:38:08'),
(17, 'Blader Notável', 'Monster', 'Earth', 7, NULL, 'Este card ganha 500 de ATK para cada monstro do Tipo Dragão que seu oponente controla ou que estiver no Cemitério dele.', '1756427977_BusterBlader-YGLD-PT-C-1E-C.webp', NULL, 2600, 2300, 'Guerreiro', 'Monster', '2025-08-29 12:39:37', '2025-08-29 12:39:37'),
(18, 'Pequena Maga Negra', 'Monster', 'Darkness', 6, NULL, 'Ganha 300 de ATK para cada \"Mago Negro\" ou \"Mago do Caos das Trevas\" no Cemitério.', '1756428020_DarkMagicianGirl-LEDD-PTA02.webp', NULL, 2000, 1700, 'Mago', 'Monster', '2025-08-29 12:40:20', '2025-08-29 12:40:20'),
(19, 'Espadas da Luz Reveladora', 'Spell', NULL, NULL, NULL, 'Depois da ativação deste card, ele permanece no campo, mas destrua-o durante a Fase Final do 3º turno do seu oponente. Quando este card for ativado: se seu oponente controlar um monstro com a face para baixo, vire com a face para cima todos os monstros que ele controla. Enquanto este card estiver com a face para cima no campo, os monstros do seu oponente não podem declarar um ataque.', '1756429202_SwordsofRevealingLight-LEDD-PTA25.webp', 'Continuous Spell', NULL, NULL, NULL, NULL, '2025-08-29 13:00:02', '2025-08-29 13:00:02'),
(20, 'Espanador de Penas da Harpia', 'Spell', NULL, NULL, NULL, 'Destrua todos os Cards de Magia e Armadilha que seu oponente controla.', '1756473983_HarpiesFeatherDuster-LCJW-PT-ScR-1E.webp', 'Quick-Play Spell', NULL, NULL, NULL, NULL, '2025-08-29 22:26:23', '2025-08-29 22:26:23'),
(21, 'Força do Espelho', 'Trap', NULL, NULL, NULL, 'Quando um monstro do oponente declarar um ataque: destrua todos os monstros em Posição de Ataque que seu oponente controla.', '1756474165_MirrorForce-YGLD-PT-C-1E.webp', 'Counter Trap', NULL, NULL, NULL, NULL, '2025-08-29 22:29:25', '2025-08-29 22:29:25'),
(22, 'Reviver Monstro', 'Spell', NULL, NULL, NULL, 'Escolha 1 monstro no Cemitério de qualquer duelista; Invoque-o por Invocação-Especial.', '1756474219_MonsterReborn-YGLD-PT-C-1E.webp', 'Normal Spell', NULL, NULL, NULL, NULL, '2025-08-29 22:30:19', '2025-08-29 22:30:19'),
(23, 'Cilindro Mágico', 'Trap', NULL, NULL, NULL, 'Quando um monstro do oponente declarar um ataque: escolha o monstro atacante; negue o ataque e, se isso acontecer, cause dano ao seu oponente igual ao ATK do monstro.', '1756474289_MagicCylinder-YGLD-PT-C-1E.webp', 'Counter Trap', NULL, NULL, NULL, NULL, '2025-08-29 22:31:29', '2025-08-29 22:31:29'),
(24, 'Guardião Celta', 'Monster', NULL, 4, 'Um elfo que aprendeu a empunhar uma espada e confunde os inimigos com ataques relâmpagos.', NULL, '1756474714_CelticGuardian-MIL1-PT-R-1E.webp', NULL, 1400, 1200, 'Guerreiro', 'Monster', '2025-08-29 22:38:34', '2025-09-01 02:37:57'),
(25, 'Kuriboh Alado', 'Monster', 'Light', 1, NULL, 'Se este card no campo for destruído e enviado para o Cemitério: pelo resto do turno, você não sofre dano de batalha.', '1756475083_WingedKuriboh-SDHS-PT-C-1E.webp', NULL, 300, 200, 'Demônio', 'Monster', '2025-08-29 22:44:43', '2025-08-29 22:44:43'),
(26, 'Dragão Supremo de Olhos Azuis', 'Monster', 'Light', 12, '\"Dragão Branco de Olhos Azuis\" + \"Dragão Branco de Olhos Azuis\" + \"Dragão Branco de Olhos Azuis\"', NULL, '1756475245_BlueEyesUltimateDragon-PGLD-PT-GUR-1E.webp', NULL, 4500, 3800, 'Dragão', 'Fusion', '2025-08-29 22:47:25', '2025-08-29 22:47:25'),
(27, 'A Flauta Para Invocação de Kuriboh', 'Spell', NULL, NULL, NULL, 'Adicione 1 \"Kuriboh\" ou \"Kuriboh Alado\" do seu Deck à sua mão, OU Invoque por Invocação-Especial 1 \"Kuriboh\" ou \"Kuriboh Alado\" do seu Deck.', '1756475335_TheFluteofSummoningKuriboh-RYMP-EN-C-1E.webp', 'Normal Spell', NULL, NULL, NULL, NULL, '2025-08-29 22:48:55', '2025-08-29 22:48:55'),
(28, 'Dragão Brilhante de Olhos Azuis', 'Monster', 'Light', 10, NULL, 'Não pode ser Invocado por Invocação-Normal/Baixado. Você deve Invocá-lo por Invocação-Especial ao oferecer como Tributo 1 \"Dragão Definitivo de Olhos Azuis\", e não pode ser Invocado por Invocação-Especial de nenhuma outra forma. Este card ganha 300 de ATK para cada monstro do Tipo Dragão no seu Cemitério. Durante o turno de qualquer duelista, quando um card ou efeito for ativado que escolha este card como alvo (exceto durante a Etapa de Dano): você pode negar o efeito.', '1756475415_BlueEyesShiningDragon-DPRP-PT-C-1E.webp', NULL, 3000, 2500, 'Dragão', 'Monster', '2025-08-29 22:50:15', '2025-08-29 22:50:15'),
(29, 'Lady Harpia 1', 'Monster', 'Wind', 4, NULL, '(O nome deste card é tratado como \"Lady Harpia\".)\r\nTodos os monstros de VENTO ganham 300 de ATK.', '1756475481_HarpieLady1-LCJW-PT-SR-1E.webp', NULL, 1300, 1400, 'Besta Alada', 'Monster', '2025-08-29 22:51:21', '2025-08-29 22:51:21'),
(30, 'Lady Harpia 2', 'Monster', 'Wind', 4, NULL, '(O nome deste card é tratado como \"Lady Harpia\".)\r\nNegue os efeitos dos Monstros de Efeito de Virar que este card destruir em batalha.', '1756475527_HarpieLady2-LCJW-PT-SR-1E.webp', NULL, 1300, 1400, 'Besta Alada', 'Monster', '2025-08-29 22:52:07', '2025-08-29 22:52:07'),
(31, 'Lady Harpia 3', 'Monster', 'Wind', 4, NULL, '(O nome deste card é tratado como \"Lady Harpia\".)\r\nUm monstro do oponente que batalhar este card não pode declarar um ataque durante os próximos 2 turnos do oponente.', '1756475856_HarpieLady3-LCJW-PT-SR-1E.webp', NULL, 1300, 1400, 'Besta Alada', 'Monster', '2025-08-29 22:57:36', '2025-08-29 22:57:36'),
(32, 'Lady Harpia', 'Monster', 'Wind', 4, 'Este animal alado com forma humana, embora agrade aos olhos, é absolutamente letal em batalha.', NULL, '1756476200_HarpieLady-LCJW-PT-SR-1E.webp', NULL, 1300, 1400, 'Besta Alada', 'Monster', '2025-08-29 23:03:20', '2025-08-29 23:03:20'),
(33, 'Pote da Ganância', 'Spell', NULL, NULL, NULL, 'Compre 2 cards.', '1756476302_PotofGreed-YGLD-PT-C-1E.webp', 'Normal Spell', NULL, NULL, NULL, NULL, '2025-08-29 23:05:02', '2025-08-29 23:05:02'),
(34, 'Número 39: Utopia', 'Monster', 'Light', 4, NULL, '2 monstros de Nível 4\r\nQuando o monstro de qualquer duelista declarar um ataque: você pode desassociar 1 Matéria Xyz deste card; negue o ataque. Quando este card for alvo de um ataque enquanto ele não tem Matérias Xyz: destrua este card.', '1756476369_Number39Utopia-YS13-PT-SR-1E.webp', NULL, 2500, 2000, 'Guerreiro', 'XYZ', '2025-08-29 23:06:09', '2025-08-29 23:06:09'),
(35, 'Bruxa da Floresta Negra', 'Monster', 'Darkness', 4, NULL, 'Se este card for enviado do campo para o Cemitério: adicione 1 monstro com 1500 ou menos de DEF do seu Deck à sua mão, mas você não pode ativar cards ou os efeitos de cards com esse nome pelo resto deste turno. Você só pode usar este efeito de \"Bruxa da Floresta Negra\" uma vez por turno.', '1756476817_WitchoftheBlackForest-SKE-PT-C-1E.webp', NULL, 1100, 1200, 'Mago', 'Monster', '2025-08-29 23:13:37', '2025-08-29 23:13:37'),
(36, 'Senhor dos Dragões', 'Monster', 'Darkness', 4, NULL, 'Monstros do Tipo Dragão no campo não podem ser escolhidos como alvo de efeitos de card.', '1756479169_LordofD-SDKS-PT-C-1E.webp', NULL, 1200, 1100, 'Dragão', 'Monster', '2025-08-29 20:52:49', '2025-08-29 20:52:49'),
(37, 'Raigeki', 'Spell', NULL, NULL, NULL, 'Destrua todos os monstros que seu oponente controla.', '1756479219_Raigeki-LCJW-PT-ScR-1E.webp', 'Normal Spell', NULL, NULL, NULL, NULL, '2025-08-29 20:53:39', '2025-08-29 20:53:39'),
(38, 'Yubel', 'Monster', 'Darkness', 10, NULL, 'Este card não pode ser destruído em batalha. Você não sofre dano de batalha de batalhas envolvendo este card. Antes do cálculo de dano, quando este card com a face para cima em Posição de Ataque for atacado por um monstro do oponente: cause dano ao seu oponente igual ao ATK desse monstro. Durante a sua Fase Final: ofereça como Tributo 1 outro monstro ou destrua este card. Quando este card for destruído, exceto pelo seu próprio efeito: o seu dono pode Invocar por Invocação-Especial 1 \"Yubel - Encarnação do Terror\" da sua mão, Deck ou Cemitério.', '1756479897_Yubel-RYMP-EN-R-1E.webp', NULL, 0, 0, 'Demônio', 'Monster', '2025-08-29 21:04:57', '2025-08-29 21:04:57'),
(39, 'Paladino Negro', 'Monster', 'Darkness', 8, NULL, '\"Mago Negro\" + \"Blader Notável\"\r\nDeve ser Invocado por Invocação-Fusão e não pode ser Invocado por Invocação-Especial de nenhuma outra forma. Durante o turno de qualquer duelista, quando um Card de Magia for ativado: você pode descartar 1 card; negue a ativação e, se isso acontecer, destrua-o. Este card deve estar com a face para cima no campo para ativar e resolver este efeito. Este card ganha 500 de ATK para cada monstro do Tipo Dragão no campo ou no Cemitério de qualquer duelista.', '1756479986_DarkPaladin-YGLD-PT-C-1E.webp', NULL, 2900, 2400, 'Mago', 'Fusion', '2025-08-29 21:06:26', '2025-08-29 21:06:26'),
(40, 'Polimerização', 'Spell', NULL, NULL, NULL, 'Invoque por Invocação-Especial 1 Monstro de Fusão do seu Deck Adicional, usando monstros da sua mão ou do seu lado do campo como Matérias de Fusão.', '1756484125_Polymerization-SDHS-PT-C-1E.webp', 'Normal Spell', NULL, NULL, NULL, NULL, '2025-08-29 22:15:25', '2025-08-29 22:15:25'),
(41, 'Mundo Toon', 'Spell', NULL, NULL, NULL, 'Ative este card ao pagar 1000 PV.', '1756484273_ToonWorld-DPBC-PT-C-1E.webp', 'Continuous Spell', NULL, NULL, NULL, NULL, '2025-08-29 22:17:53', '2025-08-29 22:17:53'),
(42, 'A Flauta para Invocação de Dragões', 'Spell', NULL, NULL, NULL, 'Invoque por Invocação-Especial até 2 monstros do Tipo Dragão da sua mão.\"Senhor dos Dragões\" deve estar no campo para que você possa ativar e resolver este efeito.', '1756484758_TheFluteofSummoningDragon-SDKS-PT-C-1E.webp', 'Normal Spell', NULL, NULL, NULL, NULL, '2025-08-29 22:25:58', '2025-08-29 22:25:58');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_27_173036_create_cards_table', 1),
(5, '2025_08_27_173137_create_personagens_table', 1),
(6, '2025_08_27_173352_create_falas_table', 1),
(7, '2025_08_27_182500_add_two_factor_columns_to_users_table', 1),
(8, '2025_09_01_013819_create_personal_access_tokens_table', 2);

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
  `name` char(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `age` int(11) NOT NULL,
  `appear` char(255) NOT NULL,
  `deck_type` varchar(255) DEFAULT NULL,
  `favorite_card` bigint(20) UNSIGNED NOT NULL,
  `image` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
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

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8BZgZntVQiT4rw5t54E7Qv95UM6bVawIbxSLNsm8', 1, '172.18.48.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36 Edg/139.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU3lGYlNmRlU2NzFkZW81eDhvaTdWWWFMZ1VkV1JvOGxBeWFhY0hzSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xNzIuMTguNjAuMTU4L2R1ZWxkbGUvcHVibGljL2NsYXNzaWMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1756692922);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `personagens_favorite_card_foreign` (`favorite_card`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `personagens`
--
ALTER TABLE `personagens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `personagens`
--
ALTER TABLE `personagens`
  ADD CONSTRAINT `personagens_favorite_card_foreign` FOREIGN KEY (`favorite_card`) REFERENCES `cards` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
