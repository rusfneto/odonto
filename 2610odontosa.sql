-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Out-2020 às 19:17
-- Versão do servidor: 8.0.17
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `odontosa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `datanasc` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `expedidor` varchar(255) NOT NULL,
  `nomemae` varchar(255) NOT NULL,
  `telefone1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cepcobranca` varchar(255) NOT NULL,
  `logradourocobranca` varchar(255) NOT NULL,
  `complementocobranca` varchar(255) NOT NULL,
  `numerocasacobranca` varchar(255) NOT NULL,
  `referenciacobranca` varchar(255) NOT NULL,
  `bairrocobranca` varchar(255) NOT NULL,
  `ufcobranca` varchar(255) NOT NULL,
  `cidadecobranca` varchar(255) NOT NULL,
  `celcobranca` varchar(255) NOT NULL,
  `nomebeneficiario1` varchar(255) NOT NULL,
  `cpfbeneficiario1` varchar(255) NOT NULL,
  `nascbeneficiario1` varchar(255) NOT NULL,
  `sexobeneficiario1` varchar(255) NOT NULL,
  `parentescobeneficiario1` varchar(255) NOT NULL,
  `nomemaebenf1` varchar(255) NOT NULL,
  `nomebeneficiario2` varchar(255) NOT NULL,
  `cpfbeneficiario2` varchar(255) NOT NULL,
  `nascbeneficiario2` varchar(255) NOT NULL,
  `sexobeneficiario2` varchar(255) NOT NULL,
  `parentescobeneficiario2` varchar(255) NOT NULL,
  `nomemaebenf2` varchar(255) NOT NULL,
  `formapg` varchar(255) NOT NULL,
  `ufplano` varchar(255) NOT NULL,
  `cidadeplano` varchar(255) NOT NULL,
  `plano` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `corretor` varchar(255) NOT NULL,
  `colaborador` varchar(255) NOT NULL,
  `data_contratacao` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `cpf`, `datanasc`, `sexo`, `rg`, `expedidor`, `nomemae`, `telefone1`, `email`, `cepcobranca`, `logradourocobranca`, `complementocobranca`, `numerocasacobranca`, `referenciacobranca`, `bairrocobranca`, `ufcobranca`, `cidadecobranca`, `celcobranca`, `nomebeneficiario1`, `cpfbeneficiario1`, `nascbeneficiario1`, `sexobeneficiario1`, `parentescobeneficiario1`, `nomemaebenf1`, `nomebeneficiario2`, `cpfbeneficiario2`, `nascbeneficiario2`, `sexobeneficiario2`, `parentescobeneficiario2`, `nomemaebenf2`, `formapg`, `ufplano`, `cidadeplano`, `plano`, `valor`, `corretor`, `colaborador`, `data_contratacao`, `status`) VALUES
(2, 'ANDREA SILVA ARAUJO', '01281505560', '07/04/1982', 'Feminino', '1267322721', 'SSA', 'EDIVANDA FERREIRA ', '71 981306160', 'ANDREA@MUNDOLUDIK.COM.BR', '41820460', 'Alameda das Espatódeas', 'CASA ', '180', 'AO LADO DA ACADEMIA SMART FIT ', 'Caminho das Árvores', 'BA', 'Salvador', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Credito', 'BA', 'Salvador', 'PLANO GOLD WEB', '95.9', '10809041000187', 'Priscila.Santos', '05/10/2020', 'Pendente'),
(3, 'KARINE GOMES PAIVA', '02546611143', '22/03/1989', 'Feminino', '1968853-9', 'MT', 'SELMA GOMES PAIVA', '65993283866', 'KARINE_GOMES@HOTMAIL.COM', '78076001', 'Avenida Professora Edna Maria de Albuquerque Affi', 'QUADRA 1', '17', 'ATRÁS DA CENTRAL DO AR', 'Jardim Imperial', 'MT', 'Cuiabá', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'MT', 'Cuiaba', 'PLANO MAX WEB', '50', '10809041000187', 'Rubens', '06/10/2020', 'Aprovado'),
(5, 'RENATO ALAN BARBOSA SOUSA', '06903447598', '31/08/1994', 'Masculino', '2013519516', 'SSA', 'MARIA INES DE JESUS', '71 983865122', 'RENATO31081994@GMAIL.COM', '40252050', 'Travessa 3 de Maio', 'CASA ', '91', 'PROXIMO A REFRIGERAÇÃO ', 'Cosme de Farias', 'BA', 'Salvador', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'BA', 'Salvador', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Priscila.Santos', '06/10/2020', 'Pendente'),
(6, 'ALGHICLEI DA SILVA OLIVEIRA', '99964295553', '01/01/1970', 'Masculino', '0607511184', 'SSP', 'MARIA DOS REIS FERREIRA DA SILVA OLIVEIRA', '(75) 981333339', 'AUGICLEIOLIVEIRA1@GMAIL.COM', '44091352', 'Rua da Conceição', 'CASA', '174', 'PROXIMO AO BAR DO LAU ', 'Tomba', 'BA', 'Feira de Santana', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'BA', 'Feira de Santana', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Priscila.Santos', '14/10/2020', 'Aprovado'),
(7, 'FABIO DE OLIVEIRA SOUSA', '92502750563', '01/01/1970', 'Masculino', '6440985670', 'SSP', 'ELINEIA DE OLIVEIRA SOUSA ', '( 71) 986050224', 'FABIOOLIVEIRASOUSA27@GMAIL.COM', '40330220', 'Rua Waldir Pires', 'CASA ', '61', 'PARQUE RIVALDO ', 'IAPI', 'BA', 'Salvador', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'BA', 'Salvador', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Priscila.Santos', '14/10/2020', 'Pendente'),
(9, 'LORENA SILVA PEREIRA', '07595315522', '01/01/1970', 'Feminino', '1439281475', 'SSP', 'LIDENE OLIVEIRA DA SILVA', '(75) 982281380', 'LORENA3.91@HOTMAIL.COM', '44052161', 'Rua Serrânia', 'CASA ', '212', 'PROXIMO  MERCADO SOL ALANDIA ', 'CASEB', 'BA', 'Feira de Santana', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'BA', 'Feira de Santana', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Priscila.Santos', '15/10/2020', 'Aprovado'),
(10, 'JESSICA DE OLIVEIRA BRAZ', '06606649501', '16/01/1989', 'Feminino', '999999999', 'SSP ', 'JOSENILDA DE OLIVERIA BRAZ', '71 993664987', 'SRJESSICABRAZ@GMAIL.COM', '40155030', 'Rua Ranulfo Oliveira', 'CASA ', '71', 'PERTO DO BELA AMARIS ', 'Jardim Apipema', 'BA', 'Salvador', '', 'RYAN BRAS DA ASIS ', '06606649501', '11/03/2011', 'Masculino', '', 'JESSICA DE OLIVEIRA BRAZ', '', '', '', '', '', '', 'Boleto', 'BA', 'Salvador', 'PLANO GOLD WEB', '197.8', '10809041000187', 'Priscila.Santos', '16/10/2020', 'Pendente'),
(11, 'JOSE TIAGO DA SILVA NASCIMENTO', '08551363166', '04/07/2000', 'Masculino', '999999999', 'SSP', 'CILIA DA SILVA', '65 998118448', 'JOSETIAGO.89SILVA@GMAIL.COM', '78055230', 'Rua Itapeairu Mirim', 'CASA ', '08', 'ACADEMIA FIT', 'Morada da Serra', 'MT', 'Cuiabá', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'MT', 'Cuiaba', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Priscila.Santos', '19/10/2020', 'Pendente'),
(12, 'JEUVACY ARAUJO BASTOS', '80613675568', '01/01/1970', 'Feminino', '0701673974', 'SSP/BA', 'LUIZA DE ARAUJO BASTOS', '71993316251', 'andrezaaraujo2723@gmail.com', '41218050', 'Rua das Mangabeiras', 'CASA ', '30', 'BAR DO CABELUDO ', 'Novo Horizonte', 'BA', 'Salvador', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'BA', 'Salvador', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Priscila.Santos', '19/10/2020', 'Pendente'),
(14, 'ANA PAULA ALMEIDA DA SILVA', '04998667548', '22/08/1991', 'Feminino', '1146436360', 'SSP,BA', 'TERESINHA DOS SANTOS ALMEIDA', '71 992895333', 'ANAPALMEIDAS2728@GMAIL.COM', '40270520', 'Rua Durval Aguiar', 'CASA ', '05', 'TERCIERA CASA APOS PRACINHA ', 'Vila Laura', 'BA', 'Salvador', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'BA', 'Salvador', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Priscila.Santos', '20/10/2020', 'Aprovado'),
(15, 'ADERILTON BARRETO ANDRADE', '08915946553', '29/01/1954', 'Masculino', '01198049-48', 'SSPBA', 'JANUITE BARRETO ANDRADE', '(71)32660929', 'BARRETO-54@HOTMAIL.COM', '41110010', 'Rua Renato Cincurá', '', '25', 'ENFRENTE AO SUPERMERCADO TODO DIA', 'Pernambués', 'BA', 'Salvador', '(71)992331630', '', '', '', '', '', '', '', '', '', '', '', '', 'Boleto', 'BA', 'Salvador', 'PLANO GOLD WEB', '98.9', '10809041000187', 'Rubens', '24/10/2020', 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `estado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `estado_id`) VALUES
(1, 'Arapiraca', 1),
(2, 'Maceio', 1),
(3, 'Rio Largo', 1),
(4, 'Camacari', 2),
(5, 'Feira de Santana', 2),
(6, 'Lauro de Freitas', 2),
(7, 'Salvador', 2),
(8, 'Teixeira de Freitas', 2),
(9, 'Brasilia', 3),
(10, 'Cuiaba', 4),
(11, 'Varzea Grande', 4),
(12, 'Aracaju', 5),
(13, 'Nossa Senhora do Socorro', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `colaborador` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `colaborador`, `senha`, `permissao`) VALUES
(1, 'Rubens', '825f9cd5f0390bc77c1fed3c94885c87', '1'),
(2, 'Priscila.Santos', '7109af321d970c64a0154000a60e65c8', '0'),
(3, 'Norton', '6249f73b62e1650400e92b3721ad71b4', '1'),
(4, 'Adriele.Silva', '2031dfc529753af06643e25abc560651', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `estado`) VALUES
(1, 'AL'),
(2, 'BA'),
(3, 'DF'),
(4, 'MT'),
(5, 'SE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `estado` varchar(255) NOT NULL,
  `max_boleto` varchar(255) NOT NULL,
  `max_credito` varchar(255) NOT NULL,
  `gold_boleto` varchar(255) NOT NULL,
  `gold_credito` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`estado`, `max_boleto`, `max_credito`, `gold_boleto`, `gold_credito`) VALUES
('AL', '44,90', '34,90', '84,90', '80,90'),
('BA', '50,00', '43,89', '98,90', '95,90'),
('DF', '50,00', '43,89', '125,90', '119,90'),
('MT', '50,00', '43,89', '98,90', '95,90'),
('SE', '44,90', '34,90', '88,90', '84,90');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
