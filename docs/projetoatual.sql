-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para projeto
CREATE DATABASE IF NOT EXISTS `projeto` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `projeto`;

-- Copiando estrutura para tabela projeto.candidato
CREATE TABLE IF NOT EXISTS `candidato` (
  `id_cand` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cand` varchar(50) NOT NULL,
  `data_cad_cand` date NOT NULL,
  `data_nasc_cand` date NOT NULL,
  `sexo_cand` varchar(50) NOT NULL DEFAULT '',
  `telefone_cand` int(11) DEFAULT NULL,
  `celular_cand` int(11) DEFAULT NULL,
  `email_cand` varchar(50) NOT NULL,
  `status_cand` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cand`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela projeto.candidato: ~6 rows (aproximadamente)
DELETE FROM `candidato`;
INSERT INTO `candidato` (`id_cand`, `nome_cand`, `data_cad_cand`, `data_nasc_cand`, `sexo_cand`, `telefone_cand`, `celular_cand`, `email_cand`, `status_cand`) VALUES
	(6, 'Jose Ricardo Lima', '2024-10-01', '1970-01-01', 'M', 0, 0, 'jose@outlook.com', 'Pendente'),
	(7, 'Manoel da Silveira', '1970-01-01', '1970-01-01', 'M', 0, 2147483647, 'manoelsilveira@gmail.com', 'Pendente'),
	(8, 'Maria Clara de Souza', '2024-10-01', '2005-10-15', 'F', 0, 2147483647, 'clarinha@gmail.com', 'Pendente'),
	(9, 'Jose Martins', '2024-10-09', '1970-01-01', 'M', 0, 2147483647, 'jose@gmail.com', 'Pendente'),
	(11, 'Miguel Moraes de Souza', '2024-10-09', '1975-10-10', 'M', 0, 2147483647, 'moraes@gmail.com', 'Pendente'),
	(12, 'Maria do Carmo', '2024-10-14', '1954-08-23', 'F', 0, 2147483647, 'carmomaria@gmail.com', NULL);

-- Copiando estrutura para tabela projeto.dependentes
CREATE TABLE IF NOT EXISTS `dependentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `certidao_nascimento` varchar(255) DEFAULT NULL,
  `carteira_vacinacao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela projeto.dependentes: ~0 rows (aproximadamente)
DELETE FROM `dependentes`;

-- Copiando estrutura para tabela projeto.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj_emp` varchar(50) NOT NULL DEFAULT '',
  `nome_emp` varchar(50) NOT NULL,
  `email_emp` varchar(50) NOT NULL,
  `telefone_emp` int(11) NOT NULL,
  `nome_resp_emp` varchar(50) NOT NULL DEFAULT '',
  `tel_resp_emp` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_emp`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela projeto.empresa: ~2 rows (aproximadamente)
DELETE FROM `empresa`;
INSERT INTO `empresa` (`id_emp`, `cnpj_emp`, `nome_emp`, `email_emp`, `telefone_emp`, `nome_resp_emp`, `tel_resp_emp`) VALUES
	(1, '12526789000158', 'Sublime LTDA', 'administrativo@sublime.com.br', 2135356969, 'Raphael Souza', 2147483647),
	(3, '15254859000225', 'Atacadao S/A', 'administrativo@atacadao.com.br', 2136369878, 'Cristiano Meirelles', 2147483647);

-- Copiando estrutura para tabela projeto.endereco
CREATE TABLE IF NOT EXISTS `endereco` (
  `id_end` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(50) NOT NULL,
  `id_cand` int(11) DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_end`),
  KEY `end_cand` (`id_cand`),
  KEY `end_emp` (`id_emp`),
  CONSTRAINT `end_cand` FOREIGN KEY (`id_cand`) REFERENCES `candidato` (`id_cand`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `end_emp` FOREIGN KEY (`id_emp`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela projeto.endereco: ~8 rows (aproximadamente)
DELETE FROM `endereco`;
INSERT INTO `endereco` (`id_end`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `id_cand`, `id_emp`) VALUES
	(2, '', '', 0, '', '', '', '', 6, NULL),
	(3, '', '', 0, '', '', '', '', 7, NULL),
	(4, '24589600', 'Avenida Brasil', 1534, 'Loja', 'Santa Cruz', 'Rio de Janeiro', '', NULL, 1),
	(6, '24589600', 'Av Jambeiro', 0, 'Loja 1', 'Centro', 'Rio de Janeiro', '', NULL, 3),
	(7, '21563870', '', 0, 'casa 1', 'Santa Cruz', 'Rio de Janeiro', '', 8, NULL),
	(8, '21330300', 'Avenida Jambeiro', 850, '', 'Vila Valqueire', 'Rio de Janeiro', 'RJ', 9, NULL),
	(10, '21530300', 'Rua Fruhbeck', 15, 'Fundos', 'Coelho Neto', 'Rio de Janeiro', 'RJ', 11, NULL),
	(11, '21530300', 'Rua Fruhbeck', 153, '', 'Coelho Neto', 'Rio de Janeiro', 'RJ', 12, NULL);

-- Copiando estrutura para tabela projeto.fichacadastral
CREATE TABLE IF NOT EXISTS `fichacadastral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `cnh` varchar(50) DEFAULT NULL,
  `ctps` varchar(50) DEFAULT NULL,
  `compresid` varchar(50) DEFAULT NULL,
  `compescol` varchar(50) DEFAULT NULL,
  `certreserv` varchar(50) DEFAULT NULL,
  `idcand` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ficha_candidato` (`idcand`),
  CONSTRAINT `ficha_candidato` FOREIGN KEY (`idcand`) REFERENCES `candidato` (`id_cand`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela projeto.fichacadastral: ~0 rows (aproximadamente)
DELETE FROM `fichacadastral`;

-- Copiando estrutura para tabela projeto.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  `dt_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela projeto.usuario: ~4 rows (aproximadamente)
DELETE FROM `usuario`;
INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `dt_cadastro`) VALUES
	(8, 'Leonardo', 'leonardo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'leonardo@gmail.com', 1, 1, '2024-10-08 00:00:00'),
	(9, 'Filipe', 'filipe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'filipe@gmail.com', 2, 1, '2024-10-08 00:00:00'),
	(10, 'Bruno', 'bruno', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'bruno@gmail.com', 2, 1, '2024-10-08 00:00:00'),
	(11, 'Alessandra', 'alessandra', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'alessandra@gmail.com', 3, 1, '2024-10-08 00:00:00');

-- Copiando estrutura para tabela projeto.vaga
CREATE TABLE IF NOT EXISTS `vaga` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL DEFAULT '',
  `data` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela projeto.vaga: ~6 rows (aproximadamente)
DELETE FROM `vaga`;
INSERT INTO `vaga` (`id`, `nome`, `descricao`, `data`) VALUES
	(8, 'Tecnico de Informatica', 'Suporte e Manutencao', '2024-10-11'),
	(10, 'Analista de RH', 'Controlar processos de admissÃ£o', '2024-10-14'),
	(12, 'Gerente', 'Controlar operaÃ§Ã£o da loja', '2024-10-14'),
	(13, 'Analista de Sistema', 'Criar programa para suporte', '2024-10-14'),
	(14, 'EstÃ¡gio de AdministraÃ§Ã£o', 'Dar suporte ao setor', '2024-10-14'),
	(15, 'Empilhador', 'Manusear equipamento', '2024-10-14');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
