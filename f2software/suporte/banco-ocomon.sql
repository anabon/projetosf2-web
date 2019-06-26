-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jan-2017 às 12:35
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocomon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `areaxarea_abrechamado`
--

CREATE TABLE IF NOT EXISTS `areaxarea_abrechamado` (
  `area` int(4) unsigned NOT NULL COMMENT 'Área para a qual se quer abrir o chamado.',
  `area_abrechamado` int(4) unsigned NOT NULL COMMENT 'Área que pode abrir chamado.'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `areaxarea_abrechamado`
--

INSERT INTO `areaxarea_abrechamado` (`area`, `area_abrechamado`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 5),
(3, 1),
(3, 3),
(3, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `assentamentos`
--

CREATE TABLE IF NOT EXISTS `assentamentos` (
`numero` int(11) NOT NULL,
  `ocorrencia` int(11) NOT NULL DEFAULT '0',
  `assentamento` text NOT NULL,
  `data` datetime DEFAULT NULL,
  `responsavel` int(4) NOT NULL DEFAULT '0',
  `asset_privated` tinyint(1) NOT NULL DEFAULT '0',
  `tipo_assentamento` int(1) NOT NULL DEFAULT '0' COMMENT 'Tipo do assentamento'
) ENGINE=MyISAM AUTO_INCREMENT=3126 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assentamentos`
--

INSERT INTO `assentamentos` (`numero`, `ocorrencia`, `assentamento`, `data`, `responsavel`, `asset_privated`, `tipo_assentamento`) VALUES
(1818, 766, 'Em atendimento por lorena', '2014-11-17 16:46:20', 60, 0, 0),
(1819, 766, 'Instalar o mozila', '2014-11-17 17:15:17', 60, 0, 0),
(1820, 766, 'Instalar o mozila', '2014-11-17 17:15:17', 60, 0, 0),
(1821, 767, '', '2014-11-18 10:13:54', 51, 0, 0),
(1822, 770, '', '2014-11-18 10:15:28', 51, 0, 0),
(1823, 771, 'Em atendimento por flavio', '2014-11-18 10:24:43', 51, 0, 0),
(1824, 773, 'Em atendimento por flavio', '2014-11-18 12:55:24', 51, 0, 0),
(1826, 770, 'N&atilde;o imprimia em pdf com o programa doPDF.', '2014-11-18 16:29:52', 51, 0, 0),
(1827, 770, 'Foi instalado o programa cuterPDF.', '2014-11-18 16:29:52', 51, 0, 0),
(1828, 771, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Impressora n&atilde;o est&aacute; funcionando e o chrome n&atilde;o est&aacute; abrindo dando erro de perfil.</b>', '2014-11-18 16:34:19', 51, 0, 0),
(1829, 771, 'Foi reinstalado o driver da impressora e &nbsp;o perfil de usu&aacute;rio do chrome foi exclu&iacute;do, em seguida, foi gerado um novo perfil automaticamente.&nbsp;', '2014-11-18 16:34:19', 51, 0, 0),
(1830, 773, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Quando liga a m&aacute;quina entra direto no setup.</b>', '2014-11-18 16:38:07', 51, 0, 0),
(1831, 773, 'Foi feita uma configura&ccedil;&atilde;o no setup de forma a solucionar o problema.', '2014-11-18 16:38:07', 51, 0, 0),
(1832, 765, 'Este Chamado ir&aacute; para categoria de mudan&ccedil;a de equipamento e ser&aacute; agendado em comum acordo com a loja. Farei &nbsp;contato com a Elisa para combinar a data do atendimento ainda hoje.', '2014-11-19 10:25:35', 22, 0, 0),
(1833, 780, 'Em atendimento por marcos', '2014-11-19 10:58:34', 22, 0, 0),
(1834, 780, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">N&atilde;o Visualiza as c&acirc;meras no computador da Ver&ocirc;nica.</b>', '2014-11-19 11:02:33', 22, 0, 0),
(1835, 780, 'Instala&ccedil;&atilde;o do plugin da Gica e difini&ccedil;&atilde;o do Internet explorer como navegador padr&atilde;o para que o atalho criado na &aacute;rea de trabalho abrisse o aplicativo.', '2014-11-19 11:02:33', 22, 0, 0),
(1836, 781, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">N&atilde;o abre o Chrome no computador da Ang&eacute;lica.</b>', '2014-11-19 11:06:20', 22, 0, 0),
(1837, 781, 'Reintala&ccedil;&atilde;o do Chrome.', '2014-11-19 11:06:20', 22, 0, 0),
(1838, 779, 'Em atendimento por flavio', '2014-11-19 13:20:08', 51, 0, 0),
(1839, 783, 'Em atendimento por gregori', '2014-11-19 13:43:30', 41, 0, 0),
(1840, 783, 'M&aacute;quina lenta,dificultando o usu&aacute;io .', '2014-11-19 13:45:24', 41, 0, 0),
(1841, 783, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Reinstala&ccedil;&atilde;o da m&aacute;quina da ger&ecirc;ncia.&nbsp;</b>', '2014-11-19 13:45:24', 41, 0, 0),
(1842, 784, 'Em atendimento por gregori', '2014-11-19 13:49:24', 41, 0, 0),
(1843, 784, 'V&iacute;rus na rede,m&aacute;quinas lentas.', '2014-11-19 13:50:09', 41, 0, 0),
(1844, 784, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n<p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n</b>', '2014-11-19 13:50:09', 41, 0, 0),
(1845, 785, 'Em atendimento por gregori', '2014-11-19 13:55:55', 41, 0, 0),
(1846, 785, 'Descri&ccedil;&atilde;o t&eacute;cn<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n</b>', '2014-11-19 13:57:44', 41, 0, 0),
(1847, 785, 'Atualiza&ccedil;&atilde;o do banco de dados do anti v&iacute;rus,e limpeza de software', '2014-11-19 13:57:44', 41, 0, 0),
(1848, 786, 'Em atendimento por gregori', '2014-11-19 14:01:14', 41, 0, 0),
(1849, 786, 'Lentid&atilde;o e v&iacute;rus atrapalhando a m&aacute;quina.', '2014-11-19 14:02:04', 41, 0, 0),
(1850, 786, '<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px; font-family: Arial, Helvetica, sans-serif;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><br />\r\n            <b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\nroblema', '2014-11-19 14:02:04', 41, 0, 0),
(1851, 787, 'Em atendimento por everaldo', '2014-11-19 14:03:08', 3, 0, 0),
(1852, 788, 'Em atendimento por gregori', '2014-11-19 14:05:14', 41, 0, 0),
(1853, 788, 'Lendid&atilde;o da m&aacute;quina,v&iacute;ruas atrapalhando os ussu&aacute;rios.', '2014-11-19 14:07:17', 41, 0, 0),
(1854, 788, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b>&nbsp;<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b>', '2014-11-19 14:07:17', 41, 0, 0),
(1855, 787, 'Problema de rastreamento de pasta.', '2014-11-19 14:07:22', 3, 0, 0),
(1856, 787, 'Mapeamento refeito da pasta boleto localizada dentro do servidor em CDSIS.', '2014-11-19 14:07:22', 3, 0, 0),
(1857, 790, 'Em atendimento por gregori', '2014-11-19 14:11:38', 41, 0, 0),
(1858, 790, 'Lentid&atilde;o e mal funcionamento da m&aacute;quina.', '2014-11-19 14:12:29', 41, 0, 0),
(1859, 790, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF">&nbsp;</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b>', '2014-11-19 14:12:29', 41, 0, 0),
(1860, 792, 'Em atendimento por gregori', '2014-11-19 14:14:51', 41, 0, 0),
(1861, 792, '<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<div>Limpeza da m&aacute;quina,muita lentid&atilde;o.</div>\r\n</span>', '2014-11-19 14:16:16', 41, 0, 0),
(1862, 792, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b>', '2014-11-19 14:16:16', 41, 0, 0),
(1863, 793, 'Em atendimento por everaldo', '2014-11-19 14:17:25', 3, 0, 0),
(1864, 794, 'Em atendimento por gregori', '2014-11-19 14:17:25', 41, 0, 0),
(1865, 794, 'Problemas na inivializa&ccedil;&atilde;o da m&aacute;quina,muita lentid&atilde;o.', '2014-11-19 14:19:04', 41, 0, 0),
(1866, 794, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b>', '2014-11-19 14:19:04', 41, 0, 0),
(1867, 795, 'Em atendimento por gregori', '2014-11-19 14:20:50', 41, 0, 0),
(1868, 793, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">O outlook n&atilde;o consegue receber menssagens.</b>', '2014-11-19 14:21:09', 3, 0, 0),
(1869, 793, 'Caixa de entrada do outlook express ultrapassou 2GB.Foi feito o backup da caixa de entrada &nbsp;atual e a mesma foi renomeada.', '2014-11-19 14:21:09', 3, 0, 0),
(1870, 795, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Lentid&atilde;o no sistema,amea&ccedil;a de v&iacute;rus no servidor.</b>', '2014-11-19 14:22:43', 41, 0, 0),
(1871, 795, 'Varredura completa do sistema,atualiza&ccedil;&atilde;o no banco de dados do anti v&iacute;rus.', '2014-11-19 14:22:43', 41, 0, 0),
(1872, 796, 'Em atendimento por gregori', '2014-11-19 14:24:02', 41, 0, 0),
(1873, 796, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">N&atilde;o digitaliza na rede.</b>', '2014-11-19 14:25:29', 41, 0, 0),
(1874, 796, 'Atualiza&ccedil;&atilde;o do software de digitaliza&ccedil;&atilde;o pela rede.', '2014-11-19 14:25:29', 41, 0, 0),
(1875, 772, 'Em atendimento por lorena', '2014-11-19 14:28:33', 60, 0, 0),
(1876, 798, 'Em atendimento por gregori', '2014-11-19 14:38:32', 41, 0, 0),
(1877, 791, 'Em atendimento por flavio', '2014-11-19 15:31:20', 51, 0, 0),
(1878, 791, 'O outlook n&atilde;o est&aacute; pesquisando as mensagens.', '2014-11-19 16:51:07', 51, 0, 0),
(1879, 791, '<div>No menu Ferramentas, aponte para Pesquisa Instant&acirc;nea e, em seguida, clique em Op&ccedil;&otilde;es de Pesquisa.</div>\r\n<div>De forma alternativa, clique na seta do painel de Pesquisa Instant&acirc;nea e depois clique em Op&ccedil;&otilde;es de <br />\r\n<br />\r\nNo menu Ferramentas/ Pesquisa Instant&acirc;nea/Op&ccedil;&otilde;es de Pesquisa/ Pesquisa Instant&acirc;nea/Op&ccedil;&otilde;es de Pesquisa no menu.&nbsp;Em Indexa&ccedil;&atilde;o, verifique se os arquivos de dados esperados est&atilde;o selecionados na lista Indexar e desmarque.</div>', '2014-11-19 16:51:08', 51, 0, 0),
(1880, 778, 'Ao emitir NF. pelo &nbsp;AUTCOM n&atilde;o imprime automaticamente na impressora do administrativo.', '2014-11-19 18:09:39', 22, 0, 0),
(1881, 778, 'Desinsta&ccedil;&atilde;o do CUTE PDF e instla&ccedil;&atilde;o de PDF CREATOR.', '2014-11-19 18:09:39', 22, 0, 0),
(1882, 778, 'Desinstala&ccedil;&atilde;o de CUT PDF', '2014-11-19 20:00:31', 22, 0, 0),
(1883, 778, 'Instala&ccedil;&atilde;o de PDF CREATOR', '2014-11-19 20:00:31', 22, 0, 0),
(1884, 800, 'Em atendimento por flavio', '2014-11-21 10:42:19', 51, 0, 0),
(1885, 800, 'M&aacute;quina travando', '2014-11-21 11:10:27', 51, 0, 0),
(1886, 800, 'Foi feita um limpeza na m&aacute;quina(software).', '2014-11-21 11:10:27', 51, 0, 0),
(1894, 803, 'Foi feita um limpeza na m&aacute;quina(software).', '2014-11-21 16:28:32', 51, 0, 0),
(1895, 805, 'Ocorr&ecirc;ncia encaminhada/alterada por everaldo<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> LOCAL<br /><b>Contato</b>: Conselho Regional de Serviço Social --> Marenilce<br />', '2014-11-21 16:55:08', 3, 0, 0),
(1893, 803, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina travando.</b>', '2014-11-21 16:28:32', 51, 0, 0),
(1889, 772, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">por favor gostaria de pedir que fosse instalado o mozila nas maquinas da recep&ccedil;&atilde;o</b>', '2014-11-21 11:12:52', 51, 0, 0),
(1890, 772, 'Foi instalado o Mozilla na m&aacute;quina cdaf-02', '2014-11-21 11:12:52', 51, 0, 0),
(1892, 803, 'Em atendimento por flavio', '2014-11-21 11:28:22', 51, 0, 0),
(1896, 801, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> <br /><b>Contato</b>: queli --> Queli<br />', '2014-11-21 17:08:18', 51, 0, 0),
(1897, 801, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio', '2014-11-21 17:12:14', 51, 0, 0),
(1898, 778, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio', '2014-11-21 17:15:53', 51, 0, 0),
(1899, 778, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Agendado com usuário --> <br /><b>Usuário</b>: Marcos Portugal --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-11-21 17:16:48', 51, 0, 0),
(1900, 776, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-11-21 17:18:14', 51, 0, 0),
(1901, 776, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Flávio Portugal --> Guilherme<br />', '2014-11-21 17:19:35', 51, 0, 0),
(1902, 778, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio', '2014-11-21 17:58:21', 51, 0, 0),
(1903, 776, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio', '2014-11-21 17:58:52', 51, 0, 0),
(1904, 778, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Agendado com usuário --> <br /><b>Unidade</b>:  --> <br />', '2014-11-21 18:04:09', 51, 0, 0),
(1905, 765, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Reservado para Operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Marcos Portugal --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-11-21 18:06:48', 51, 0, 0),
(1906, 779, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Em estudo<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-11-21 18:07:10', 51, 0, 0),
(1907, 767, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Reservado para Operador<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-11-21 18:07:50', 51, 0, 0),
(1908, 798, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Em estudo<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Grégori Marchiori --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-11-21 18:08:42', 51, 0, 0),
(1909, 798, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Usuário</b>: Flávio Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> <br />', '2014-11-22 00:09:22', 51, 0, 0),
(1910, 798, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;N&atilde;o da para instalar a impressora porque n&atilde;o tem mais porta PCI na m&aacute;quina.</b>', '2014-11-24 10:13:21', 41, 0, 0),
(1911, 798, 'Instala&ccedil;&atilde;o de uma nova placa m&atilde;e,e um espelho serial.', '2014-11-24 10:13:21', 41, 0, 0),
(1912, 777, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Agendado com usuário<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> LOCAL<br />', '2014-11-24 13:15:20', 51, 0, 0),
(1913, 777, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Agendado com usuário --> <br />', '2014-11-24 13:16:24', 51, 0, 0),
(1914, 801, 'Em atendimento por gregori', '2014-11-24 13:26:26', 41, 0, 0),
(1915, 801, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Montar uma maquina.</b>', '2014-11-24 15:32:28', 41, 0, 0),
(1916, 801, 'A adriana vai marcar outra data,pois ela precisa arrumar um local melhor para a montagem da m&aacute;quina.', '2014-11-24 15:32:28', 41, 0, 0),
(1917, 805, 'Em atendimento por gregori', '2014-11-24 16:03:55', 41, 0, 0),
(1918, 767, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Reservado para Operador --> <br /><b>Unidade</b>:  --> <br />', '2014-11-25 09:41:13', 51, 0, 0),
(1919, 765, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Reservado para Operador --> <br /><b>Unidade</b>:  --> <br />', '2014-11-25 09:42:19', 51, 0, 0),
(1920, 848, 'Em atendimento por flavio', '2014-11-26 10:44:07', 51, 0, 0),
(1921, 765, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Unidade</b>:  --> <br />', '2014-11-26 10:45:55', 51, 0, 0),
(1922, 779, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em estudo --> Indisponível para atendimento<br /><b>Unidade</b>:  --> <br />', '2014-11-26 10:47:01', 51, 0, 0),
(1923, 850, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Prioridade</b>:  --> ALTO<br /><b>Unidade</b>:  --> LOCAL<br /><b>Contato</b>: Centro de Diagnose Armando Ferreira --> Verônica<br />', '2014-11-26 11:20:20', 22, 0, 0),
(1924, 850, '<b>Acessando a Internet com Lentid&atilde;o.</b>', '2014-11-26 11:29:38', 22, 0, 0),
(1925, 850, 'Inclus&atilde;o do DNS do Velox: 200.149.55.142<br />', '2014-11-26 11:29:38', 22, 0, 0),
(1926, 778, 'Em atendimento por marcos', '2014-11-26 11:30:54', 22, 0, 0),
(1927, 778, '<b>Intera&ccedil;&atilde;o do emissor de nota fiscal para gera&ccedil;&atilde;o do PDF com op&ccedil;&atilde;o de impress&atilde;o<br />\r\n</b>', '2014-11-26 11:33:07', 22, 0, 0),
(1928, 778, 'Instala&ccedil;&atilde;o do PDF CREATOR<br />', '2014-11-26 11:33:07', 22, 0, 0),
(1929, 805, '<div>&nbsp;</div>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px; font-family: Arial, Helvetica, sans-serif;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b>&nbsp;<span style="color: rgb(34, 34, 34); font-family: Calibri, sans-serif; font-size: 15px;">&nbsp;Problema no antiv&iacute;rus&nbsp;</span></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>', '2014-11-26 14:20:31', 41, 0, 0),
(1930, 805, 'Atualiza&ccedil;&atilde;o para avg 2015', '2014-11-26 14:20:31', 41, 0, 0),
(1931, 810, 'Em atendimento por lorena', '2014-11-26 14:31:48', 60, 0, 0),
(1932, 810, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador do DP n&atilde;o acessa compartilhamento.</b>', '2014-11-26 14:35:00', 60, 0, 0),
(1933, 810, 'Ap&oacute;s a verifica&ccedil;&atilde;o,foi constatado que n&atilde;o havia problema.', '2014-11-26 14:35:00', 60, 0, 0),
(1934, 809, 'Em atendimento por everaldo', '2014-11-26 14:36:21', 3, 0, 0),
(1935, 809, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador n&atilde;o acessa a rede.</b>', '2014-11-26 14:37:55', 3, 0, 0),
(1936, 809, 'Desativar o firewall do AVG ou colocar o programa nas excess&otilde;es.', '2014-11-26 14:37:55', 3, 0, 0),
(1937, 811, 'Em atendimento por everaldo', '2014-11-26 14:38:26', 3, 0, 0),
(1938, 811, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:40:14', 3, 0, 0),
(1939, 811, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windowns 7 na m&aacute;quina Fical-001</b>', '2014-11-26 14:40:14', 3, 0, 0),
(1940, 812, 'Em atendimento por everaldo', '2014-11-26 14:40:43', 3, 0, 0),
(1941, 812, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:42:03', 3, 0, 0),
(1942, 812, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windowns 7 na m&aacute;quina<br />\r\nFiscal-002</b>', '2014-11-26 14:42:03', 3, 0, 0),
(1943, 813, 'Em atendimento por everaldo', '2014-11-26 14:42:23', 3, 0, 0),
(1944, 813, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:43:55', 3, 0, 0),
(1945, 813, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina<br />\r\nFiscal-003</b>', '2014-11-26 14:43:55', 3, 0, 0),
(1946, 814, 'Em atendimento por everaldo', '2014-11-26 14:44:13', 3, 0, 0),
(1947, 814, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:45:42', 3, 0, 0),
(1948, 814, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-004.</b>', '2014-11-26 14:45:42', 3, 0, 0),
(1949, 815, 'Em atendimento por everaldo', '2014-11-26 14:45:58', 3, 0, 0),
(1950, 815, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:46:58', 3, 0, 0),
(1951, 815, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-005</b>', '2014-11-26 14:46:58', 3, 0, 0),
(1952, 816, 'Em atendimento por everaldo', '2014-11-26 14:47:18', 3, 0, 0),
(1953, 816, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:48:44', 3, 0, 0),
(1954, 816, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-006.</b>', '2014-11-26 14:48:44', 3, 0, 0),
(1955, 817, 'Em atendimento por everaldo', '2014-11-26 14:48:59', 3, 0, 0),
(1956, 817, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:50:38', 3, 0, 0),
(1957, 817, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-007.</b>', '2014-11-26 14:50:38', 3, 0, 0),
(1958, 818, 'Em atendimento por everaldo', '2014-11-26 14:50:59', 3, 0, 0),
(1959, 818, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7</b>', '2014-11-26 14:52:30', 3, 0, 0),
(1960, 818, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina<br />\r\nFISCAL-008.</b>', '2014-11-26 14:52:30', 3, 0, 0),
(1961, 819, 'Em atendimento por everaldo', '2014-11-26 14:54:10', 3, 0, 0),
(1962, 819, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:56:19', 3, 0, 0),
(1963, 819, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina DESPACHANTARIA-001</b>', '2014-11-26 14:56:19', 3, 0, 0),
(1964, 820, 'Em atendimento por everaldo', '2014-11-26 14:56:37', 3, 0, 0),
(1965, 820, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 14:59:22', 3, 0, 0),
(1966, 820, 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina CONT&Aacute;BIL-001', '2014-11-26 14:59:22', 3, 0, 0),
(1967, 821, 'Em atendimento por everaldo', '2014-11-26 15:07:34', 3, 0, 0),
(1968, 821, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 15:08:29', 3, 0, 0),
(1969, 821, 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina CONT&Aacute;BIL-003', '2014-11-26 15:08:29', 3, 0, 0),
(1970, 822, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 15:11:31', 3, 0, 0),
(1971, 822, '<font face="Arial, Helvetica, sans-serif"><span style="font-size: 11px; line-height: 11px;"><b>Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina BKP-002</b></span></font>', '2014-11-26 15:11:31', 3, 0, 0),
(1972, 823, 'Em atendimento por everaldo', '2014-11-26 15:11:44', 3, 0, 0),
(1973, 823, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 15:12:41', 3, 0, 0),
(1974, 823, 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina BKP-004', '2014-11-26 15:12:41', 3, 0, 0),
(1975, 824, 'Em atendimento por everaldo', '2014-11-26 15:12:58', 3, 0, 0),
(1976, 824, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 15:13:56', 3, 0, 0),
(1977, 824, 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina BKP-005.', '2014-11-26 15:13:56', 3, 0, 0),
(1978, 825, 'Em atendimento por everaldo', '2014-11-26 15:14:44', 3, 0, 0),
(1979, 825, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-11-26 15:15:47', 3, 0, 0),
(1980, 825, 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina DP-006', '2014-11-26 15:15:47', 3, 0, 0),
(1981, 848, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Em estudo<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-11-26 15:46:41', 51, 0, 0),
(1982, 807, 'Em atendimento por gregori', '2014-11-26 17:22:41', 41, 0, 0),
(1983, 847, 'Em atendimento por gregori', '2014-11-26 17:22:43', 41, 0, 0),
(1984, 847, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Temos 2 m&aacute;quinas, que est&atilde;o com problemas. Elas est&atilde;o sem acesso ao servidor.</b>', '2014-11-26 17:24:01', 41, 0, 0),
(1985, 847, 'restaurei uma m&aacute;quina. Desinstalei e instalei uma vers&atilde;o de driver mais recente para a conex&atilde;o wi-fi do noot.', '2014-11-26 17:24:01', 41, 0, 0),
(1986, 807, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<p>Sem conec&ccedil;&atilde;o a internet.</p>\r\n<p>- Placa de rede desatualizada.</p>\r\n</b>', '2014-11-26 17:24:20', 41, 0, 0),
(1987, 807, 'Atualiza&ccedil;&atilde;o de driver.', '2014-11-26 17:24:20', 41, 0, 0),
(1988, 777, 'Em atendimento por gregori', '2014-11-26 17:25:53', 41, 0, 0),
(1989, 777, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Wifi n&atilde;o funciona no notebook.</b>', '2014-11-26 17:26:48', 41, 0, 0),
(1990, 777, 'Reinstala&ccedil;&atilde;o do driver de rede.', '2014-11-26 17:26:48', 41, 0, 0),
(1991, 799, 'Em atendimento por gregori', '2014-11-26 17:27:48', 41, 0, 0),
(1992, 799, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instala&ccedil;&atilde;o de software de scanner no computador AJAV07</b>', '2014-11-26 17:28:41', 41, 0, 0),
(1993, 799, 'Atualizei o software de digitaliza&ccedil;&atilde;o,todas as m&aacute;quinas est&atilde;o digitalizando.', '2014-11-26 17:28:41', 41, 0, 0),
(1994, 808, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> LOCAL<br />', '2014-11-26 21:05:58', 22, 0, 0),
(1995, 765, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Agendado com usuário --> <br /><b>Usuário</b>: Flávio Portugal --> Marcos Portugal<br /><b>Unidade</b>:  --> <br />', '2014-11-26 21:12:45', 22, 0, 0),
(1996, 856, 'Em fun&ccedil;&atilde;o de limpeza na recep&ccedil;&atilde;o o cabo de rede do computador foi desconectado.', '2014-11-27 09:15:13', 22, 0, 0),
(1997, 856, 'Reconex&atilde;o do cabo de rede.<br />\r\n<br />\r\nTestes OK!', '2014-11-27 09:15:13', 22, 0, 0),
(1998, 767, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Usuário</b>: Flávio Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> LOCAL<br />', '2014-11-27 09:17:16', 22, 0, 0),
(1999, 767, 'Em atendimento por gregori', '2014-11-27 11:02:17', 41, 0, 0),
(2000, 776, 'Em atendimento por gregori', '2014-11-27 11:02:19', 41, 0, 0),
(2001, 776, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Reinstalar o sistema operacional para solucionar o problema do certificado digital.</b>', '2014-11-27 16:34:33', 41, 0, 0),
(2002, 776, 'reinstala&ccedil;&atilde;o do windows e afins.', '2014-11-27 16:34:33', 41, 0, 0),
(2003, 767, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Necessito usar o certificado digital e ao estalar o programa da erro, n&atilde;o concluindo a instala&ccedil;&atilde;o.</b>', '2014-11-27 16:35:12', 41, 0, 0),
(2004, 767, 'Reinstala&ccedil;ao do sistema operacional windows e afins', '2014-11-27 16:35:12', 41, 0, 0),
(2005, 855, 'Em atendimento por gregori', '2014-11-27 16:35:53', 41, 0, 0),
(2006, 855, 'N&atilde;o abre site da caixa.', '2014-11-27 16:39:12', 41, 0, 0),
(2007, 855, 'J&aacute; est&aacute; abrindo o site da caixa,por&eacute;m n&atilde;o consegui fazer com que ele enviasse mensagens pelo site da caixa. Ajustei as ferramentes de acesso remoto para outrora solucionar o problema com o aux&iacute;lio de Everaldo e Fl&aacute;vio.', '2014-11-27 16:39:12', 41, 0, 0),
(2008, 826, 'Em atendimento por everaldo', '2014-11-27 23:40:47', 3, 0, 0),
(2009, 827, 'Em atendimento por everaldo', '2014-11-27 23:41:19', 3, 0, 0),
(2010, 828, 'Em atendimento por everaldo', '2014-11-27 23:42:03', 3, 0, 0),
(2011, 829, 'Em atendimento por everaldo', '2014-11-27 23:42:22', 3, 0, 0),
(2012, 858, 'Em atendimento por flavio', '2014-11-28 10:13:16', 51, 0, 0),
(2013, 765, 'Em atendimento por flavio', '2014-11-28 10:15:41', 51, 0, 0),
(2014, 765, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Voltar a loja para novos reparos junto com a gerente. Tem maquina que n&atilde;o est&aacute; imprimindo nota de devolu&ccedil;&atilde;o.</b>', '2014-11-28 10:17:26', 51, 0, 0),
(2015, 765, 'Organiza&ccedil;&atilde;o de cabos.', '2014-11-28 10:17:26', 51, 0, 0),
(2016, 779, 'Em atendimento por flavio', '2014-11-28 10:17:44', 51, 0, 0),
(2017, 779, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;C&acirc;mera filma a frente da loja (lado esquerdo) est&aacute; com defeito.</b>', '2014-11-28 10:23:31', 51, 0, 0),
(2018, 779, 'Foram refeitos os conectores que estavam podres e o cabo que estava sem sinal foi restaurado. Mas mesmo n&atilde;o houve solu&ccedil;&atilde;o. A solu&ccedil;&atilde;o prov&aacute;vel ser&aacute; colocar um cabo novo.', '2014-11-28 10:23:31', 51, 0, 0),
(2019, 808, 'Em atendimento por flavio', '2014-11-28 10:23:57', 51, 0, 0),
(2020, 808, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">As novas cameras que foram instaladas n&atilde;o est&atilde;o aparecendo no monitor. Provavelmente n&atilde;o esta gravando.</b>', '2014-11-28 10:25:56', 51, 0, 0),
(2021, 808, 'Foi trocada a fonte das cameras que estava queimada &nbsp;por uma fonte com&eacute;ia.', '2014-11-28 10:25:56', 51, 0, 0),
(2022, 848, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina do caixa quando liga fica apitando.</b>', '2014-11-28 10:30:06', 51, 0, 0),
(2023, 848, 'Vericar se a placa m&atilde;e est&aacute; com deifeito. Cliente aguardando resposta.', '2014-11-28 10:30:06', 51, 0, 0),
(2024, 859, 'Em atendimento por marcos', '2014-11-28 12:24:07', 22, 0, 0),
(2025, 859, 'Sem impressora PDF', '2014-11-28 12:24:51', 22, 0, 0),
(2026, 859, 'Foi instalado PDF CREATOR', '2014-11-28 12:24:51', 22, 0, 0),
(2027, 851, 'Em atendimento por marcos', '2014-11-28 13:21:40', 22, 0, 0),
(2028, 851, 'Foi Feito contato contato com a Kely para estabelecer o acesso remoto, mas ela n&atilde;o estava presente. Deixei o recado para que ele retornasse o contato.<br /><br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-11-28 13:27:49', 22, 0, 0),
(2029, 857, 'Em atendimento por marcos', '2014-11-28 13:29:00', 22, 0, 0),
(2030, 857, 'Em fun&ccedil;&atilde;o de limpesa no local, foi desconectado o cabo de rede.<br />', '2014-11-28 13:32:07', 22, 0, 0),
(2031, 857, 'Reconex&atilde;o do cabo de rede.<br />', '2014-11-28 13:32:07', 22, 0, 0),
(2032, 858, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Central telefonica n&atilde;o est&aacute; funcionando.</b>', '2014-11-28 13:37:42', 51, 0, 0),
(2033, 858, 'Desligar e ligar.(pode ter sido um mal contato tamb&eacute;m).', '2014-11-28 13:37:42', 51, 0, 0),
(2034, 862, 'Em atendimento por flavio', '2014-11-28 13:43:45', 51, 0, 0),
(2035, 861, 'Em atendimento por flavio', '2014-11-28 13:44:03', 51, 0, 0),
(2036, 861, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Poder imprimir em pdf.</b>', '2014-11-28 13:44:54', 51, 0, 0),
(2037, 861, 'Foi instada o programa CuterPdf.', '2014-11-28 13:44:54', 51, 0, 0),
(2038, 862, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instalar driver da impressora no notebook(sala com porta de vidro).</b>', '2014-11-28 13:45:49', 51, 0, 0),
(2039, 862, 'Foi instalado o driver da impressora.', '2014-11-28 13:45:49', 51, 0, 0),
(2040, 860, 'Em atendimento por flavio', '2014-11-28 13:46:03', 51, 0, 0),
(2041, 860, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina com hao123 na p&aacute;gina inicial.</b>', '2014-11-28 13:47:05', 51, 0, 0),
(2042, 860, 'Foi removido da p&aacute;gina inicial o Hao123 e colocado o Google.', '2014-11-28 13:47:05', 51, 0, 0),
(2043, 852, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-11-28 13:49:14', 51, 0, 0),
(2044, 852, 'Em atendimento por flavio', '2014-11-28 13:50:27', 51, 0, 0),
(2045, 852, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Reservado para Operador<br /><b>Usuário</b>: Flávio Portugal --> Lorena Portugal<br /><b>Unidade</b>:  --> <br />', '2014-11-28 13:51:11', 51, 0, 0),
(2046, 854, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-11-28 14:00:11', 51, 0, 0),
(2047, 804, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Cancelado<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-11-28 14:05:20', 51, 0, 0),
(2048, 852, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">O Internet Explorer n&atilde;o est&aacute; funcionando.</b>', '2014-11-28 14:09:06', 60, 0, 0),
(2049, 852, 'Foi desinstalado o Internet Explorer 9 e substituido pela vers&atilde;o 8.', '2014-11-28 14:09:06', 60, 0, 0),
(2050, 851, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Aguardando feedback do usuário<br /><b>Unidade</b>:  --> <br />', '2014-11-28 14:42:30', 51, 0, 0),
(2051, 863, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Agendado com usuário --> <br /><b>Usuário</b>: Marcos Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> <br />', '2014-11-28 14:55:15', 22, 0, 0),
(2052, 863, 'Em atendimento por marcos', '2014-11-28 15:16:59', 22, 0, 0),
(2053, 863, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Em atendimento --> Encaminhado para operador<br /><b>Usuário</b>: Marcos Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> <br />', '2014-11-28 15:17:23', 22, 0, 0),
(2054, 854, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Agendado com usuário --> <br /><b>Unidade</b>:  --> <br />', '2014-11-28 15:30:05', 22, 0, 0),
(2055, 854, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio', '2014-11-28 17:16:35', 51, 0, 0),
(2056, 854, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio', '2014-11-28 17:17:09', 51, 0, 0),
(2057, 846, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Vânia --> Vânia teste teste<br />', '2014-11-28 17:35:58', 51, 0, 0),
(2058, 846, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Vânia teste teste --> Vânia<br />', '2014-11-28 17:36:52', 51, 0, 0),
(2059, 846, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br />', '2014-11-28 17:38:02', 51, 0, 0),
(2060, 846, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br />', '2014-11-28 17:39:03', 51, 0, 0),
(2061, 826, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-12-01 12:18:25', 3, 0, 0),
(2062, 826, 'Solu&ccedil;&atilde;o para este problema', '2014-12-01 12:18:25', 3, 0, 0),
(2063, 827, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '2014-12-01 12:21:11', 3, 0, 0),
(2064, 827, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador Contabil-007.Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-12-01 12:21:11', 3, 0, 0),
(2065, 826, 'Em atendimento por everaldo', '2014-12-01 12:23:53', 3, 0, 0),
(2066, 826, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '2014-12-01 12:25:49', 3, 0, 0),
(2067, 826, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador Contabil-008.Upgrade de sistema operacional XP para o sistema operacional 7</b>', '2014-12-01 12:25:49', 3, 0, 0),
(2068, 828, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '2014-12-01 12:27:14', 3, 0, 0),
(2069, 828, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador BKP-003.Upgrade de sistema operacional XP para o sistema operacional 7</b>', '2014-12-01 12:27:14', 3, 0, 0),
(2070, 839, 'Em atendimento por everaldo', '2014-12-01 12:27:37', 3, 0, 0),
(2071, 840, 'Em atendimento por everaldo', '2014-12-01 12:27:58', 3, 0, 0),
(2072, 841, 'Em atendimento por everaldo', '2014-12-01 12:28:18', 3, 0, 0),
(2073, 842, 'Em atendimento por everaldo', '2014-12-01 12:28:37', 3, 0, 0),
(2074, 830, 'Em atendimento por everaldo', '2014-12-01 12:29:00', 3, 0, 0),
(2075, 831, 'Em atendimento por everaldo', '2014-12-01 12:29:13', 3, 0, 0),
(2076, 832, 'Em atendimento por everaldo', '2014-12-01 12:29:25', 3, 0, 0),
(2077, 833, 'Em atendimento por everaldo', '2014-12-01 12:29:55', 3, 0, 0),
(2078, 834, 'Em atendimento por everaldo', '2014-12-01 12:30:21', 3, 0, 0),
(2079, 835, 'Em atendimento por everaldo', '2014-12-01 12:30:43', 3, 0, 0),
(2080, 836, 'Em atendimento por everaldo', '2014-12-01 12:31:12', 3, 0, 0),
(2081, 837, 'Em atendimento por everaldo', '2014-12-01 12:31:29', 3, 0, 0),
(2082, 838, 'Em atendimento por everaldo', '2014-12-01 12:31:42', 3, 0, 0),
(2083, 843, 'Em atendimento por everaldo', '2014-12-01 12:31:56', 3, 0, 0),
(2084, 844, 'Em atendimento por everaldo', '2014-12-01 12:32:19', 3, 0, 0),
(2085, 845, 'Em atendimento por everaldo', '2014-12-01 12:32:47', 3, 0, 0),
(2086, 846, 'Em atendimento por everaldo', '2014-12-01 12:33:06', 3, 0, 0),
(2087, 863, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Montagem de novo computador</b>', '2014-12-01 12:33:47', 41, 0, 0),
(2088, 863, 'Montagem efetuada,por&eacute;m a placa m&atilde;e veio ruim. Aguardando a troca para remontar a m&aacute;quina.', '2014-12-01 12:33:47', 41, 0, 0),
(2089, 854, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Usuário</b>: Flávio Portugal --> Marcos Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-01 14:21:48', 51, 0, 0),
(2095, 870, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Everaldo Moraes<br /><b>Unidade</b>:  --> <br />', '2014-12-01 16:02:52', 51, 0, 0),
(2093, 865, 'Em atendimento por everaldo', '2014-12-01 14:32:24', 3, 0, 0),
(2094, 869, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Everaldo Moraes --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-01 14:56:35', 51, 0, 0),
(2096, 872, '<b>Colocar roteador sem fio no meio da loja.</b>', '2014-12-02 09:56:03', 22, 0, 0),
(2097, 872, 'Compra e instala&ccedil;&atilde;o de Access Point na Loja da Paravidino Niter&oacute;i.<br />\r\n<br />\r\nTestes OK!<br />', '2014-12-02 09:56:03', 22, 0, 0),
(2098, 873, 'Em atendimento por marcos', '2014-12-02 10:10:10', 22, 0, 0),
(2099, 873, 'Foi identificado problemas com oscila&ccedil;&otilde;es de energia. Ser&aacute; nescess&aacute;rio a compra de Nobreak para alimenta&ccedil;&atilde;o da Central telef&ocirc;nica. Vou encaminhar os dados do equipamento para a Renata efetuar a compra.<br /><br /><b>Unidade</b>:  --> <br />', '2014-12-02 10:14:26', 22, 0, 0),
(2100, 871, 'Em atendimento por marcos', '2014-12-02 10:26:55', 22, 0, 0),
(2101, 871, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Em atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Marcos Portugal --> Flávio Portugal<br /><b>Unidade</b>:  --> LOCAL<br />', '2014-12-02 10:27:47', 22, 0, 0),
(2102, 878, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Unidade</b>:  --> <br />', '2014-12-02 23:00:14', 22, 0, 0),
(2103, 879, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Unidade</b>:  --> <br />', '2014-12-02 23:30:13', 22, 0, 0),
(2104, 881, 'Em atendimento por gregori', '2014-12-03 11:44:01', 41, 0, 0),
(2105, 880, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Usuário</b>: Marcos Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> LOCAL<br />', '2014-12-03 12:54:42', 22, 0, 0),
(2106, 882, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: SOFTWARE --> MUDANÇA<br /><b>Unidade</b>:  --> <br />', '2014-12-03 13:00:29', 51, 0, 0),
(2107, 883, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-12-03 13:01:11', 51, 0, 0),
(2108, 880, 'Em atendimento por marcos', '2014-12-03 20:02:07', 22, 0, 0),
(2109, 880, 'Foi identificado problemas com o DNS devido a falta de pagamento.', '2014-12-03 20:06:45', 22, 0, 0),
(2110, 880, 'O Cliente ficou de efetuar o pagamento para solu&ccedil;&atilde;o do problema.', '2014-12-03 20:06:45', 22, 0, 0),
(2111, 869, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Usuário</b>: Flávio Portugal --> Everaldo Moraes<br /><b>Unidade</b>:  --> <br />', '2014-12-04 09:49:44', 51, 0, 0),
(2112, 884, 'Em atendimento por flavio', '2014-12-04 09:51:24', 51, 0, 0),
(2113, 884, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Pasta documentos exclu&iacute;da.</b>', '2014-12-04 09:52:31', 51, 0, 0),
(2114, 884, 'A pasta foi restaurada da lixeira.', '2014-12-04 09:52:31', 51, 0, 0),
(2115, 854, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Usuário</b>: Marcos Portugal --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-04 09:53:52', 51, 0, 0),
(2116, 881, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Impressora n&atilde;o esta imprimindo.</b>', '2014-12-04 10:48:15', 41, 0, 0),
(2117, 881, 'Feito troca de porta USB.&nbsp;', '2014-12-04 10:48:15', 41, 0, 0),
(2118, 885, 'Em atendimento por flavio', '2014-12-04 10:51:19', 51, 0, 0),
(2119, 885, 'Plugin do java bloqueado.', '2014-12-04 10:52:44', 51, 0, 0),
(2120, 885, 'Foi desbloqueado a plugin do java no Chrome.', '2014-12-04 10:52:44', 51, 0, 0),
(2121, 875, 'Em atendimento por flavio', '2014-12-04 10:53:14', 51, 0, 0),
(2122, 875, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador quando envia impress&atilde;o s&oacute; vai a 1&ordm; p&aacute;gina (sala de retinografia).</b>', '2014-12-04 10:56:13', 51, 0, 0),
(2123, 875, 'O problema parou de ocorrer.', '2014-12-04 10:56:13', 51, 0, 0),
(2124, 877, 'Em atendimento por gregori', '2014-12-04 10:57:25', 41, 0, 0),
(2125, 886, 'Em atendimento por flavio', '2014-12-04 11:10:31', 51, 0, 0),
(2126, 886, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">programa BB cobran&ccedil;a emiss&atilde;o boleto n&atilde;o abre (msg erro firewall).</b>', '2014-12-04 11:14:26', 51, 0, 0),
(2127, 886, 'Foi reiniciado o servi&ccedil;o do Firebird que &eacute; o&nbsp;GDB do sistema do Banco do Brasil. Ir em pesquisa digitar servi&ccedil;os e iniciar o servi&ccedil;o com o nome de firebird.', '2014-12-04 11:14:26', 51, 0, 0),
(2128, 871, 'Em atendimento por flavio', '2014-12-04 11:29:52', 51, 0, 0),
(2129, 877, 'Ocorr&ecirc;ncia encaminhada/alterada por gregori<br /><b>Status</b>: Em atendimento --> Aguardando feedback do usuário<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-12-04 11:31:17', 41, 0, 0),
(2130, 878, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Encaminhado para operador --> Em estudo<br /><b>Unidade</b>:  --> <br />', '2014-12-04 11:32:07', 51, 0, 0),
(2131, 879, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Encaminhado para operador --> Em estudo<br /><b>Unidade</b>:  --> <br />', '2014-12-04 11:32:36', 51, 0, 0),
(2132, 871, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Ativar o sistema operacional windows 7.</b>', '2014-12-04 11:34:13', 51, 0, 0),
(2133, 871, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Foi ativado o sistema operacional windows 7 da m&aacute;quina cdo-002.</b>', '2014-12-04 11:34:13', 51, 0, 0),
(2134, 877, '<div>&nbsp;</div>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px; font-family: Arial, Helvetica, sans-serif;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b>Micro. 02 sem &nbsp;internet.</b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>', '2014-12-04 13:49:39', 41, 0, 0),
(2135, 877, 'Reconfigura&ccedil;&atilde;o de &nbsp;endere&ccedil;o IP.', '2014-12-04 13:49:39', 41, 0, 0),
(2136, 889, 'Em atendimento por flavio', '2014-12-04 16:21:01', 51, 0, 0),
(2137, 889, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Recuperar arquivo de planilha exclu&iacute;da do servidor.</b>', '2014-12-04 16:22:46', 51, 0, 0),
(2138, 889, 'N&atilde;o foi poss&iacute;vel recuperar o arquivo &quot;Planilha de Entrega CDO 2014&quot; (usu&aacute;rio informado).', '2014-12-04 16:22:46', 51, 0, 0),
(2139, 891, 'Em atendimento por flavio', '2014-12-04 16:23:48', 51, 0, 0),
(2140, 891, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Ativa&ccedil;&atilde;o do windows 7.</b>', '2014-12-04 16:24:59', 51, 0, 0);
INSERT INTO `assentamentos` (`numero`, `ocorrencia`, `assentamento`, `data`, `responsavel`, `asset_privated`, `tipo_assentamento`) VALUES
(2141, 891, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Foi ativado o windows 7 da m&aacute;quina cdo-005.</b>', '2014-12-04 16:24:59', 51, 0, 0),
(2142, 890, 'Em atendimento por flavio', '2014-12-04 16:25:17', 51, 0, 0),
(2143, 890, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Ativa&ccedil;&atilde;o do windows 7.</b>', '2014-12-04 16:25:35', 51, 0, 0),
(2144, 890, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Foi ativado o windows 7 da m&aacute;quina cdo-007(Cris).</b>', '2014-12-04 16:25:35', 51, 0, 0),
(2145, 887, 'Em atendimento por gregori', '2014-12-04 16:26:37', 41, 0, 0),
(2146, 887, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Oi Boa Tarde<br />\r\ne a Rosi o meu computador depois que baixei um programa da receita federal &nbsp;veio uma ame&ccedil;a de virus (cavalo de troia ) e anti virus pediu para remover a ame&ccedil;a , e eu fiz isto. Mas o computador est&aacute; travando qualquer link que eu tentei abrir, e ja reiniciei a maquina.</b>', '2014-12-04 16:54:48', 41, 0, 0),
(2147, 887, 'Atualizei o banco de dados do AVG do 2014 para o 2015.', '2014-12-04 16:54:48', 41, 0, 0),
(2148, 878, 'Em atendimento por flavio', '2014-12-05 12:56:14', 51, 0, 0),
(2149, 878, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Consertar fonte Dell queimada retirada para Laborat&oacute;rio.</b>', '2014-12-05 12:57:48', 51, 0, 0),
(2150, 878, 'Fonte trocada (pc da administra&ccedil;&atilde;o).', '2014-12-05 12:57:48', 51, 0, 0),
(2151, 854, 'Inserir coment&amp;#65533;rio Por favor  gostaria de uma solução para o referido problema.....\r\nfico na aguardo\r\n\r\nJanui Bernardes ', '2014-12-05 16:43:33', 54, 0, 0),
(2152, 892, 'Em atendimento por gregori', '2014-12-05 18:15:22', 41, 0, 0),
(2153, 892, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;M&aacute;quina muito lenta,as vezes reinicia sozinha e demora muito pra ligar e desligar.</b>', '2014-12-05 18:18:08', 41, 0, 0),
(2154, 892, '<p>Limpeza de hardware e software. O HD da m&aacute;quina se encontra com ru&iacute;dos e relativamente mais quente que o normal,a m&aacute;quina possui 2GB ran,executei limpeza f&iacute;sica com pincel,limpeza dos contatos da mem&oacute;ria e limpeza do software com ccleaner e combofix. A m&aacute;quina estava sem anti v&iacute;rus.</p>\r\n<p>&nbsp;</p>', '2014-12-05 18:18:08', 41, 0, 0),
(2155, 888, 'Em atendimento por gregori', '2014-12-08 09:53:56', 41, 0, 0),
(2156, 869, 'Em atendimento por flavio', '2014-12-09 11:09:09', 51, 0, 0),
(2157, 869, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;M&aacute;quina do Vitor est&aacute; lenta</b>', '2014-12-09 11:10:09', 51, 0, 0),
(2158, 869, 'Foi constatado que o processador est&aacute; ultrapassado e precisa ser trocado.', '2014-12-09 11:10:09', 51, 0, 0),
(2159, 895, 'Em atendimento por flavio', '2014-12-09 11:12:52', 51, 0, 0),
(2160, 895, 'Placa m&atilde;e n&atilde;o funciona.', '2014-12-09 11:14:22', 51, 0, 0),
(2161, 895, 'Trocar placa m&atilde;e(crit&eacute;rio do cliente)', '2014-12-09 11:14:22', 51, 0, 0),
(2162, 894, 'Em atendimento por flavio', '2014-12-09 11:14:39', 51, 0, 0),
(2163, 894, 'Processador ruim.', '2014-12-09 11:15:39', 51, 0, 0),
(2164, 894, 'Trocar processador(Crit&eacute;rio do cliente)', '2014-12-09 11:15:39', 51, 0, 0),
(2165, 896, 'Em atendimento por flavio', '2014-12-09 11:16:55', 51, 0, 0),
(2166, 896, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Atualiza&ccedil;&atilde;o do programa da caixa n&atilde;o funciona</b>', '2014-12-09 11:19:43', 51, 0, 0),
(2167, 896, 'Baixar os arquivos necess&aacute;rios e extra&iacute;-los e depois apontar o caminho para os arquivos extra&iacute;dos.<br />\r\nNo windows 7 o execut&aacute;vel n&atilde;o funciona tem que extrair.', '2014-12-09 11:19:43', 51, 0, 0),
(2168, 897, 'Em atendimento por flavio', '2014-12-09 11:22:08', 51, 0, 0),
(2169, 897, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Token instala, mas n&atilde;o l&ecirc; o certificado.&nbsp;</b>', '2014-12-09 11:56:34', 51, 0, 0),
(2170, 897, 'Procurar o suporte do emissor do certificado(Aladdin-Certisign)', '2014-12-09 11:56:34', 51, 0, 0),
(2171, 898, 'Em atendimento por flavio', '2014-12-09 14:01:16', 51, 0, 0),
(2172, 898, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Conectividade social n&atilde;o funciona.</b>', '2014-12-09 14:03:35', 51, 0, 0),
(2173, 898, 'Colocar o internet explorer em modo compatibilidade.', '2014-12-09 14:03:35', 51, 0, 0),
(2174, 899, 'Em atendimento por gregori', '2014-12-09 14:04:43', 41, 0, 0),
(2175, 854, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Encaminhado para operador --> Cancelado<br /><b>Unidade</b>:  --> <br />', '2014-12-09 14:05:29', 51, 0, 0),
(2176, 899, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Noot n&atilde;o entra no windows.</b>', '2014-12-09 14:06:33', 41, 0, 0),
(2177, 899, 'Altera&ccedil;&atilde;o no setup da m&aacute;quina.', '2014-12-09 14:06:33', 41, 0, 0),
(2178, 770, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Cancelado<br /><b>Prioridade</b>:  --> <br />', '2014-12-09 14:07:01', 51, 0, 0),
(2179, 893, 'Em atendimento por lorena', '2014-12-09 15:15:47', 60, 0, 0),
(2180, 901, 'Em atendimento por flavio', '2014-12-09 16:40:16', 51, 0, 0),
(2181, 901, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">SISCAF n&atilde;o est&aacute; funcionando.</b>', '2014-12-09 16:41:57', 51, 0, 0),
(2182, 901, 'Foi feito um arquivo.bat para fazer login no servidor.', '2014-12-09 16:41:57', 51, 0, 0),
(2183, 902, 'Em atendimento por flavio', '2014-12-09 16:43:29', 51, 0, 0),
(2184, 902, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">O SISCAF n&atilde;o est&aacute; funcionando.</b>', '2014-12-09 16:45:49', 51, 0, 0),
(2185, 902, 'Foi criado um atalho direto do Servidor.', '2014-12-09 16:45:49', 51, 0, 0),
(2186, 888, 'Ocorr&ecirc;ncia encaminhada/alterada por lorena<br /><b>Status</b>: Em atendimento --> Cancelado<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Grégori Marchiori --> Lorena Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-09 16:48:46', 60, 0, 0),
(2187, 851, 'Ocorr&ecirc;ncia encaminhada/alterada por lorena<br /><b>Status</b>: Aguardando retorno do usuário --> Cancelado<br /><b>Usuário</b>: Marcos Portugal --> Lorena Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-09 16:49:28', 60, 0, 0),
(2188, 893, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Lorena Portugal --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-09 17:15:19', 51, 0, 0),
(2189, 893, 'Sped Contribui&ccedil;&otilde;es n&atilde;o est&aacute; funcionando(erro &nbsp;no banco de dados)', '2014-12-09 17:24:26', 51, 0, 0),
(2190, 893, 'Foi reinstalado o Sped Contribui&ccedil;&otilde;es e criada uma nova pasta para a nova instala&ccedil;&atilde;o. Pois se n&atilde;o deletar a pasta ou criar uma nova pasta com outro nome e apontar para ela o erro permanece.', '2014-12-09 17:24:26', 51, 0, 0),
(2191, 905, 'Em atendimento por gregori', '2014-12-10 11:11:26', 41, 0, 0),
(2192, 905, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;As cameras n&atilde;o aparecem na portaria.</b>', '2014-12-10 11:12:37', 41, 0, 0),
(2193, 905, '<p>Modifica&ccedil;&atilde;o no endere&ccedil;o Ip,pois estava em &quot;obter um endenre&ccedil;o IP autom&aacute;ticamente&quot;.</p>\r\n<p>Reinicializa&ccedil;&atilde;o do moden,e ajuste de data e hora.</p>', '2014-12-10 11:12:37', 41, 0, 0),
(2194, 900, 'Em atendimento por gregori', '2014-12-10 11:20:02', 41, 0, 0),
(2195, 906, 'Em atendimento por marcos', '2014-12-10 12:15:52', 22, 0, 0),
(2196, 906, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Travando a impress&atilde;o de fundo de olho na impressora laser colorida.</b>', '2014-12-10 12:19:09', 22, 0, 0),
(2197, 906, 'Salvar imagens maiores em arquivo para depois imprimir.<br />\r\n<br />\r\nTestes com o usu&aacute;rio ok!', '2014-12-10 12:19:09', 22, 0, 0),
(2198, 882, 'Em atendimento por marcos', '2014-12-10 12:19:32', 22, 0, 0),
(2199, 882, 'Verifica&ccedil;&atilde;o de viabilidade.', '2014-12-10 12:21:29', 22, 0, 0),
(2200, 882, 'N&atilde;o ser&aacute; nescess&aacute;rio a montagem de um novo comutador, pois o mesmo j&aacute; suporta a VPN Cisco.', '2014-12-10 12:21:29', 22, 0, 0),
(2201, 876, 'Em atendimento por marcos', '2014-12-10 12:21:48', 22, 0, 0),
(2202, 876, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instala&ccedil;&atilde;o de cabo RCA som e v&iacute;deo com canaleta vindo do equipamento da TV&nbsp;RODOLINK at&eacute; a tela de TV&nbsp;LED.</b>', '2014-12-10 12:23:32', 22, 0, 0),
(2203, 876, 'Instala&ccedil;&atilde;o conclu&iacute;da conforme solicitada.', '2014-12-10 12:23:32', 22, 0, 0),
(2204, 883, 'Em atendimento por marcos', '2014-12-10 12:24:00', 22, 0, 0),
(2205, 883, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Ativa&ccedil;&atilde;o de Sistema Operacional Windows 7 &nbsp;comprar licen&ccedil;a.</b>', '2014-12-10 12:25:19', 22, 0, 0),
(2206, 883, 'Ativa&ccedil;&atilde;o conclu&iacute;da com sucesso.', '2014-12-10 12:25:19', 22, 0, 0),
(2207, 904, 'Em atendimento por lorena', '2014-12-10 14:44:28', 60, 0, 0),
(2208, 904, 'Ocorr&ecirc;ncia encaminhada/alterada por lorena<br /><b>Status</b>: Em atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-12-10 14:45:28', 60, 0, 0),
(2209, 903, 'Em atendimento por lorena', '2014-12-10 14:45:46', 60, 0, 0),
(2210, 903, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Algumas tabelas do excel n&atilde;o abrem, somente as da vers&atilde;o 97.</b>', '2014-12-10 14:47:20', 60, 0, 0),
(2211, 903, 'Os arquivos Excel que estavam configurados para abrir com o Word foram alterados para abrir com o Excel.', '2014-12-10 14:47:20', 60, 0, 0),
(2212, 907, 'Em atendimento por marcos', '2014-12-10 15:13:28', 22, 0, 0),
(2213, 907, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Sem acesso externo ao servidor</b>', '2014-12-10 15:18:26', 22, 0, 0),
(2214, 907, 'Instala&ccedil;&atilde;o do teamveiwer', '2014-12-10 15:18:26', 22, 0, 0),
(2215, 908, 'Em atendimento por marcos', '2014-12-10 19:17:33', 22, 0, 0),
(2216, 908, '<b>Computador CDO-010 muito lento. imposs&iacute;vel de trabalhar com ele.</b>', '2014-12-10 19:19:56', 22, 0, 0),
(2217, 908, 'Feita a restaura&ccedil;&atilde;o do sistema e voltou a funcionar normalmente.<br />', '2014-12-10 19:19:56', 22, 0, 0),
(2218, 900, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Grégori Marchiori --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-11 13:37:27', 51, 0, 0),
(2219, 874, 'Em atendimento por flavio', '2014-12-11 13:37:55', 51, 0, 0),
(2220, 874, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instala&ccedil;&atilde;o de um cabo de 4mm CFTV de 15m com conectores P4 e BNC.&nbsp;</b>', '2014-12-11 13:40:11', 51, 0, 0),
(2221, 874, 'Foi trocado o cabo e os conectores da c&acirc;mera (ajudantes: Lorena e Gregori)', '2014-12-11 13:40:11', 51, 0, 0),
(2222, 910, 'Em atendimento por marcos', '2014-12-11 19:41:26', 22, 0, 0),
(2223, 910, 'Limpeza de vírus e spyware. verificação geral dos computadores', '2014-12-11 19:42:20', 22, 0, 0),
(2224, 910, 'Chamado concluído conforme solicitador', '2014-12-11 19:42:20', 22, 0, 0),
(2225, 909, 'Em atendimento por flavio', '2014-12-12 13:16:03', 51, 0, 0),
(2226, 909, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">fio com mal contato.</b>', '2014-12-12 13:17:09', 51, 0, 0),
(2227, 909, 'Foi colocado uma fita isolante no cabo vga', '2014-12-12 13:17:09', 51, 0, 0),
(2228, 900, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina travando , n&atilde;o t&aacute; reiniciando.</b>', '2014-12-12 13:18:59', 51, 0, 0),
(2229, 900, 'M&aacute;quina reinstalada.<br />\r\nEntrada:11:30<br />\r\nSa&iacute;da: 19:00&nbsp;', '2014-12-12 13:18:59', 51, 0, 0),
(2230, 911, 'Em atendimento por flavio', '2014-12-12 13:25:20', 51, 0, 0),
(2231, 904, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Cancelado<br /><b>Usuário</b>: Lorena Portugal --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2014-12-12 14:03:55', 51, 0, 0),
(2232, 912, 'Em atendimento por flavio', '2014-12-12 14:06:08', 51, 0, 0),
(2233, 911, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Instalar o office e o outlook.</b>', '2014-12-12 14:47:56', 51, 0, 0),
(2234, 911, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram Instalados o office, o skype e o cuterpdf.</b>', '2014-12-12 14:47:56', 51, 0, 0),
(2235, 912, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Anti-v&iacute;rus vencido &nbsp;e instalar o java.</b>', '2014-12-12 14:49:04', 51, 0, 0),
(2236, 912, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram instalados o anti-v&iacute;rus AVG &nbsp;e o java atualizado.</b>', '2014-12-12 14:49:04', 51, 0, 0),
(2237, 913, 'Em atendimento por flavio', '2014-12-15 09:44:12', 51, 0, 0),
(2238, 913, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">ATUALIZAR &nbsp; JAVA &nbsp; DO &nbsp;BANCO &nbsp;DO &nbsp;BRASIL &nbsp;,AINDA &nbsp; N&Atilde;O &nbsp;ENTRA &nbsp; SENDO &nbsp;QUE &nbsp; SEXTA &nbsp; -FEIRA &nbsp; FOI ATUALIZADO &nbsp;</b>', '2014-12-15 10:20:58', 51, 0, 0),
(2239, 913, 'Java funcionou sozinho e o skype tamb&eacute;m.', '2014-12-15 10:20:58', 51, 0, 0),
(2240, 914, 'Em atendimento por flavio', '2014-12-15 23:24:45', 51, 0, 0),
(2241, 914, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Trocar a m&aacute;quina da Quely Valad&atilde;o por uma m&aacute;quina da Dell.</b>', '2014-12-15 23:26:35', 51, 0, 0),
(2242, 914, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi trocada a m&aacute;quina da Quely Valad&atilde;o por uma m&aacute;quina da Dell.</b>', '2014-12-15 23:26:35', 51, 0, 0),
(2243, 879, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Em estudo --> Encaminhado para operador<br /><b>Usuário</b>: Flávio Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> <br />', '2014-12-15 23:28:53', 51, 0, 0),
(2244, 915, 'Em atendimento por flavio', '2014-12-16 13:25:53', 51, 0, 0),
(2245, 915, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Mal contato.</b>', '2014-12-16 13:28:11', 51, 0, 0),
(2246, 915, 'O cabo de rede foi colocado em outra porta do switch.', '2014-12-16 13:28:11', 51, 0, 0),
(2247, 920, 'Em atendimento por flavio', '2014-12-16 13:38:06', 51, 0, 0),
(2248, 918, 'Em atendimento por flavio', '2014-12-16 13:38:19', 51, 0, 0),
(2249, 917, 'Em atendimento por flavio', '2014-12-16 13:38:31', 51, 0, 0),
(2250, 916, 'Em atendimento por flavio', '2014-12-16 13:38:46', 51, 0, 0),
(2251, 921, 'Em atendimento por flavio', '2014-12-16 13:40:17', 51, 0, 0),
(2252, 916, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Limpeza de m&aacute;quina.</b>', '2014-12-16 13:43:16', 51, 0, 0),
(2253, 916, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feita uma limpeza de software na m&aacute;quina.</b>', '2014-12-16 13:43:16', 51, 0, 0),
(2254, 917, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Retirar o baidu e outros programas.</b>', '2014-12-16 13:48:07', 51, 0, 0),
(2255, 917, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram desinstalados o baidu e outros programas.</b>', '2014-12-16 13:48:07', 51, 0, 0),
(2256, 918, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Organiza&ccedil;&atilde;o na sala do dp.</b>', '2014-12-16 13:51:30', 51, 0, 0),
(2257, 918, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feita uma organiza&ccedil;&atilde;onos cabos de rede e de for&ccedil;a na sala do dp.</b>', '2014-12-16 13:51:30', 51, 0, 0),
(2258, 920, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Desinstalar o logmein de todas as m&aacute;quinas.</b>', '2014-12-16 13:56:01', 51, 0, 0),
(2259, 920, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram desinstalados &nbsp;os logmeins de todas as m&aacute;quinas com exce&ccedil;&atilde;o das m&aacute;quinas da Elizete e do Marcos.</b>', '2014-12-16 13:56:01', 51, 0, 0),
(2260, 921, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Liberar o gerenciador de tarefas(interApp bloqueando).</b>ma', '2014-12-16 13:58:48', 51, 0, 0),
(2261, 921, 'Foi reinstalado o interApp e a senha foi alterada para a senha default(123).', '2014-12-16 13:58:48', 51, 0, 0),
(2262, 879, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Placa M&atilde;e da RuberRio retirada para manuten&ccedil;&atilde;o em laborat&oacute;rio da Compart.</b>', '2014-12-16 14:33:12', 41, 0, 0),
(2263, 879, 'Reintala&ccedil;&atilde;o da m&aacute;quina,nova fonte e uma placa de rede off board.', '2014-12-16 14:33:12', 41, 0, 0),
(2264, 922, 'Em atendimento por flavio', '2014-12-18 14:41:29', 51, 0, 0),
(2265, 922, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Montar m&aacute;quina backup e instalar.</b>', '2014-12-18 14:43:20', 51, 0, 0),
(2266, 922, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">A m&aacute;quina foi montada e instalada (backup-044).</b>', '2014-12-18 14:43:20', 51, 0, 0),
(2267, 923, 'Em atendimento por flavio', '2014-12-18 14:43:49', 51, 0, 0),
(2268, 923, 'Montar e instalar m&aacute;quina backup.', '2014-12-18 14:44:39', 51, 0, 0),
(2269, 923, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">A m&aacute;quina foi montada e instalada (backup-043).</b>', '2014-12-18 14:44:39', 51, 0, 0),
(2270, 924, 'Em atendimento por flavio', '2014-12-18 14:45:00', 51, 0, 0),
(2271, 924, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina travando(setor do Elias).</b>', '2014-12-18 14:47:04', 51, 0, 0),
(2272, 924, 'Foi realizada uma limpeza de software e em seguida foi passado o anti-v&iacute;rus.', '2014-12-18 14:47:04', 51, 0, 0),
(2273, 926, 'Em atendimento por flavio', '2014-12-18 14:47:19', 51, 0, 0),
(2274, 926, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Certificados n&atilde;o funcionam, instalar impressora, colocar &iacute;cone do word na &aacute;rea de trabalho, localizar &iacute;cone do scanner e outros.</b>', '2014-12-18 14:50:24', 51, 0, 0),
(2275, 926, 'Solu&ccedil;&atilde;o para este problema', '2014-12-18 14:50:24', 51, 0, 0),
(2276, 927, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Aguardando retorno do usuário<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-12-18 15:25:52', 51, 0, 0),
(2277, 829, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br />', '2014-12-19 15:56:49', 51, 0, 0),
(2278, 928, 'Em atendimento por gregori', '2014-12-22 11:19:25', 41, 0, 0),
(2279, 928, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">omputador sem as configura&ccedil;&otilde;es regionais.<br />\r\nFavor entrar em contato o mais breve.<br />\r\n</b>', '2014-12-22 13:36:52', 41, 0, 0),
(2280, 928, 'Configura&ccedil;&atilde;o dos status regionais,cria&ccedil;&atilde;o de um novo usu&aacute;rio,pois o antigo se corrompeu.', '2014-12-22 13:36:52', 41, 0, 0),
(2281, 925, 'Em atendimento por gregori', '2014-12-22 17:12:46', 41, 0, 0),
(2282, 925, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Desinstalar o snap.do da m&aacute;quina da V&acirc;nia.</b>', '2014-12-22 17:13:16', 41, 0, 0),
(2283, 925, 'O usu&aacute;rio desintalou o programa.', '2014-12-22 17:13:16', 41, 0, 0),
(2284, 927, 'Em atendimento por marcos', '2014-12-27 15:21:41', 22, 0, 0),
(2285, 927, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Sem internet, adsl piscando no modem da oi.</b>', '2014-12-27 15:23:40', 22, 0, 0),
(2286, 927, 'Problemas depois da visita do tecnico da Oi e libera&ccedil;&atilde;o do sinal junto a operadora.', '2014-12-27 15:23:40', 22, 0, 0),
(2287, 931, 'Ocorr&ecirc;ncia encaminhada/alterada por marcos<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> LOCAL<br />', '2014-12-27 15:26:33', 22, 0, 0),
(2469, 987, 'Em atendimento por flavio', '2015-02-03 17:23:10', 51, 0, 0),
(2289, 931, 'Em atendimento por flavio', '2014-12-29 09:38:16', 51, 0, 0),
(2290, 929, 'Em atendimento por flavio', '2014-12-29 09:38:39', 51, 0, 0),
(2291, 929, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;A M&Aacute;QUINA N&Atilde;O QUER LIGAR.</b>', '2014-12-29 09:39:54', 51, 0, 0),
(2292, 929, 'Foi feita uma limpeza de software na m&aacute;quina no remoto.', '2014-12-29 09:39:54', 51, 0, 0),
(2293, 931, 'Sem internet.', '2014-12-29 12:01:06', 51, 0, 0),
(2294, 931, 'Reiniciar os aparelhos do hack.', '2014-12-29 12:01:06', 51, 0, 0),
(2295, 933, 'Em atendimento por flavio', '2014-12-29 12:02:22', 51, 0, 0),
(2296, 933, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;M&aacute;quina lenta</b>', '2014-12-29 12:03:30', 51, 0, 0),
(2297, 933, 'Foi feita uma limpeza de software na m&aacute;quina.', '2014-12-29 12:03:30', 51, 0, 0),
(2298, 932, 'Em atendimento por flavio', '2014-12-29 12:03:42', 51, 0, 0),
(2299, 932, 'Ocorr&ecirc;ncia encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Marilena --> Cdaf<br />', '2014-12-29 12:04:38', 51, 0, 0),
(2300, 932, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina lenta.</b>', '2014-12-29 12:06:02', 51, 0, 0),
(2301, 932, 'Foi feita uma limpeza de software na m&aacute;quina da Gleice.', '2014-12-29 12:06:02', 51, 0, 0),
(2302, 934, 'Em atendimento por lorena', '2015-01-05 15:39:42', 60, 0, 0),
(2303, 934, 'Descrição técnica do problema', '2015-01-05 15:40:32', 60, 0, 0),
(2304, 934, 'Solução para este problema', '2015-01-05 15:40:32', 60, 0, 0),
(2305, 935, 'Em atendimento por gregori', '2015-01-05 16:34:39', 41, 0, 0),
(2306, 935, 'Descrição técnica do problema', '2015-01-05 16:35:16', 41, 0, 0),
(2307, 935, 'Solução para este problema', '2015-01-05 16:35:16', 41, 0, 0),
(2308, 936, 'Em atendimento por marcos', '2015-01-12 12:17:52', 22, 0, 0),
(2309, 936, 'Descrição técnica do problema', '2015-01-12 12:20:41', 22, 0, 0),
(2310, 936, 'Solução para este problema', '2015-01-12 12:20:41', 22, 0, 0),
(2311, 938, 'Em atendimento por marcos', '2015-01-14 18:39:19', 22, 0, 0),
(2312, 938, 'Problemas para receber e-mail no outlook', '2015-01-14 18:41:46', 22, 0, 0),
(2313, 938, 'Problemas de travamento com o computador (configuração de hardware muito obsoleta).', '2015-01-14 18:41:46', 22, 0, 0),
(2314, 939, 'Em atendimento por marcos', '2015-01-14 18:44:49', 22, 0, 0),
(2315, 939, 'Computador não tem Som', '2015-01-14 18:46:48', 22, 0, 0),
(2316, 939, 'Download e instalação do driver de som.', '2015-01-14 18:46:48', 22, 0, 0),
(2317, 940, 'Em atendimento por marcos', '2015-01-14 18:52:00', 22, 0, 0),
(2318, 940, 'Sistema de câmeras atualizando imagens no computador local e gerando trafego intenso de dados.', '2015-01-14 18:55:50', 22, 0, 0),
(2319, 940, 'Utilização do sistema de câmeras na modalidade extreme extra( com definição menos).', '2015-01-14 18:55:50', 22, 0, 0),
(2320, 941, 'Em atendimento por marcos', '2015-01-14 19:00:02', 22, 0, 0),
(2321, 941, 'Placa Mãe do computador com capacitores estufados, processador queimado, cooler do processador travado.\r\nFoi considerado sem viabilidade para conserto devido ao processador sempron 32 bits  esta descontinuado e obsoleto.', '2015-01-14 19:05:24', 22, 0, 0),
(2322, 941, 'Troca do equipamento', '2015-01-14 19:05:24', 22, 0, 0),
(2323, 942, 'Em atendimento por marcos', '2015-01-14 19:08:10', 22, 0, 0),
(2324, 942, 'usuário não se recorda da senha do windows', '2015-01-14 19:10:06', 22, 0, 0),
(2325, 942, 'Remoção da senha com o HIRES BOOT', '2015-01-14 19:10:06', 22, 0, 0),
(2326, 944, 'Em atendimento por gregori', '2015-01-15 11:14:25', 41, 0, 0),
(2327, 944, 'Máquina não liga.', '2015-01-15 11:15:50', 41, 0, 0),
(2328, 944, 'Troca da fonte,reinstalação da máquina.\r\n\r\nObs,máquina já veio ruim da casa do Valdir(O filho dele quem me disse que essa era uma máquina antiga que estava parada na casa deles.)', '2015-01-15 11:15:50', 41, 0, 0),
(2329, 945, 'Em atendimento por gregori', '2015-01-15 11:16:52', 41, 0, 0),
(2330, 945, 'Duas máquinas não ligam.', '2015-01-15 11:20:56', 41, 0, 0),
(2331, 945, 'Troca de fonte de uma máquina, e colocação de placa de rede.\r\nA outra máquina se encontra em Laboratório esperando o depósito do cliente para compra das peças.', '2015-01-15 11:20:56', 41, 0, 0),
(2332, 943, 'Em atendimento por flavio', '2015-01-15 13:50:05', 51, 0, 0),
(2333, 943, 'erro ao receber e-mail no Outllook. Computador (BSHOP ADMIN). Obs.. tem outro computador que tem esta mesma conta cadastrada e esta recebendo e-mail normalmente segundo a usuária do administrativo.', '2015-01-15 14:01:44', 51, 0, 0),
(2334, 943, 'Foi criado um novo arquivo .pst para liberar a caixa de entrada.', '2015-01-15 14:01:44', 51, 0, 0),
(2335, 946, 'Em atendimento por flavio', '2015-01-15 14:02:59', 51, 0, 0),
(2336, 946, 'Links do outlook não abrem.', '2015-01-15 14:04:41', 51, 0, 0),
(2337, 946, 'Na página da microsoft foi baixado um executável para corrigir o problema.(suporte) ', '2015-01-15 14:04:41', 51, 0, 0),
(2338, 947, 'Em atendimento por gregori', '2015-01-15 16:10:25', 41, 0, 0),
(2339, 947, 'Em atendimento por gregori', '2015-01-15 16:10:26', 41, 0, 0),
(2340, 947, 'Limpeza de máquina. Máquina lenta e travando.', '2015-01-15 16:13:11', 41, 0, 0),
(2341, 947, 'limpeza com Ccleaner,limpeza manual nas pastas temp e prefetch.\r\nvarredura com AVG 2015.Esvaziamento da lixeira. ', '2015-01-15 16:13:11', 41, 0, 0),
(2342, 948, 'Em atendimento por gregori', '2015-01-16 12:05:07', 41, 0, 0),
(2343, 949, 'Em atendimento por gregori', '2015-01-16 14:19:55', 41, 0, 0),
(2344, 949, 'Minha pasta sumiu na área de trabalho.', '2015-01-16 14:21:00', 41, 0, 0),
(2345, 949, 'Limpeza com ccleaner,verificação com o kapersky,onde duas ameças foram detectadas. \r\nRestauração do sistema para o dia anterior.', '2015-01-16 14:21:00', 41, 0, 0),
(2346, 950, 'Em atendimento por gregori', '2015-01-16 14:55:07', 41, 0, 0),
(2347, 950, 'Ocorrência encaminhada/alterada por gregori<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-01-16 14:56:06', 41, 0, 0),
(2348, 950, 'Minha impressora não imprime.', '2015-01-16 14:57:04', 41, 0, 0),
(2349, 950, 'A impressora foi desinstalada.Reinstalei a impressora pela rede. ', '2015-01-16 14:57:04', 41, 0, 0),
(2350, 954, 'Em atendimento por flavio', '2015-01-17 10:48:12', 51, 0, 0),
(2351, 954, 'Instalar impressora na máquina do Marcos.', '2015-01-17 10:49:36', 51, 0, 0),
(2352, 954, 'Foi Instalada a impressora na máquina do Marcos.', '2015-01-17 10:49:36', 51, 0, 0),
(2353, 953, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Marcos --> Rossane<br /><b>Ramal</b>:  --> 1<br />', '2015-01-17 10:50:38', 51, 0, 0),
(2354, 953, 'Em atendimento por flavio', '2015-01-17 10:50:44', 51, 0, 0),
(2355, 953, 'Instalar impressora na máquina da Rossane.', '2015-01-17 10:51:14', 51, 0, 0),
(2356, 953, 'Foi Instalada a impressora na máquina da Rossane.', '2015-01-17 10:51:14', 51, 0, 0),
(2357, 952, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Marcos --> Nízia<br /><b>Ramal</b>:  --> 1<br />', '2015-01-17 10:51:56', 51, 0, 0),
(2358, 952, 'Em atendimento por flavio', '2015-01-17 10:52:05', 51, 0, 0),
(2359, 952, 'Máquina dando erro fatal.', '2015-01-17 10:53:21', 51, 0, 0),
(2360, 952, 'Foi feita um limpeza de software e de hardware na máquina.', '2015-01-17 10:53:21', 51, 0, 0),
(2361, 951, 'Em atendimento por gregori', '2015-01-19 10:39:20', 41, 0, 0),
(2362, 951, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Grégori Marchiori --> Flávio Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-19 11:52:36', 51, 0, 0),
(2363, 951, 'Instalar impressora na máquina do Marcos.', '2015-01-19 11:54:35', 51, 0, 0),
(2364, 951, 'Foi Instalada a impressora na máquina do Marcos.', '2015-01-19 11:54:35', 51, 0, 0),
(2365, 955, 'Em atendimento por flavio', '2015-01-19 12:02:14', 51, 0, 0),
(2366, 955, 'Instalar o guardião do itaú e instalar a impressora.', '2015-01-19 12:04:56', 51, 0, 0),
(2367, 955, 'Foi instalado o guardião do itaú e também a impressora.', '2015-01-19 12:04:56', 51, 0, 0),
(2368, 956, 'Em atendimento por lorena', '2015-01-19 14:48:49', 60, 0, 0),
(2369, 948, 'Descrição técnica do problema', '2015-01-19 15:41:20', 41, 0, 0),
(2370, 948, 'Solução para este problema', '2015-01-19 15:41:20', 41, 0, 0),
(2371, 956, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Lorena Portugal --> Flávio Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-19 17:20:37', 51, 0, 0),
(2372, 956, 'O Outlook da Adriana e da Kátia,não está recebendo email de confirmação e de leitura. ', '2015-01-19 17:28:39', 51, 0, 0),
(2373, 956, 'Foram feitas alterações na configuração do outlook para receber email de confirmação e de leitura.\r\nNo menu Ferramentas, clique em Opções.\r\nEm E-mail, clique em Opções de E-mail.\r\nEm Manipulação de mensagens, clique em Opções de Controle.\r\nMarque a caixa de seleção Confirmação de leitura ou Confirmação de entrega.', '2015-01-19 17:28:39', 51, 0, 0),
(2374, 957, 'Em atendimento por marcos', '2015-01-26 12:45:20', 22, 0, 0),
(2375, 957, 'Instalação de roteador', '2015-01-26 12:46:47', 22, 0, 0),
(2376, 957, 'O roteador foi instalado', '2015-01-26 12:46:47', 22, 0, 0),
(2377, 958, 'Em atendimento por gregori', '2015-01-26 13:19:30', 41, 0, 0),
(2378, 958, '	Duas máquinas sem internet e com lentidão.', '2015-01-26 15:47:35', 41, 0, 0),
(2379, 958, 'Refiz o RJ 45 de uma máquina.\r\nFiz uma limpeza completa de software,e troca de anti vírus nas duas máquinas.', '2015-01-26 15:47:35', 41, 0, 0),
(2380, 960, 'Em atendimento por gregori', '2015-01-27 10:22:28', 41, 0, 0),
(2381, 960, 'Meus ícones na área de trabalho sumiram.', '2015-01-27 10:26:01', 41, 0, 0),
(2382, 960, 'Usuário corrompido,criei um novo usuário e importação do desktop e documentos antigos.', '2015-01-27 10:26:01', 41, 0, 0),
(2383, 965, 'Em atendimento por flavio', '2015-01-27 13:44:13', 51, 0, 0),
(2384, 965, 'Instalar o anti-vírus kaspersky na máquina da Gerencia.', '2015-01-27 13:45:59', 51, 0, 0),
(2385, 965, 'Foi instalado e ativado o anti-vírus kaspersky na máquina da Gerência.', '2015-01-27 13:45:59', 51, 0, 0),
(2386, 961, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:46:55', 51, 0, 0),
(2387, 962, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:47:48', 51, 0, 0),
(2388, 965, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Lorena Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:48:56', 51, 0, 0),
(2389, 963, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Lorena Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:49:48', 51, 0, 0),
(2390, 964, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Lorena Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:50:32', 51, 0, 0),
(2391, 969, 'Em atendimento por flavio', '2015-01-27 13:52:18', 51, 0, 0),
(2392, 969, 'Eliminar as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:53:55', 51, 0, 0),
(2393, 969, 'Foram eliminadas as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:53:55', 51, 0, 0),
(2394, 966, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:54:51', 51, 0, 0),
(2395, 966, 'Eliminar as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:55:12', 51, 0, 0),
(2396, 966, 'Foram eliminadas as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:55:12', 51, 0, 0),
(2397, 967, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:55:37', 51, 0, 0),
(2398, 967, 'Eliminar as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:55:56', 51, 0, 0),
(2399, 967, 'Foram eliminadas as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:55:56', 51, 0, 0),
(2400, 968, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 13:56:59', 51, 0, 0),
(2401, 968, 'Desinstalar o kaspersky anti-vírus e instalar o versão small e ativar.', '2015-01-27 14:00:10', 51, 0, 0),
(2402, 968, 'Foi desinstalado o kaspersky anti-vírus e instalado a versão small e ativado.', '2015-01-27 14:00:10', 51, 0, 0),
(2403, 969, 'Em atendimento por flavio', '2015-01-27 14:02:06', 51, 0, 0),
(2404, 969, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 14:03:02', 51, 0, 0),
(2405, 969, 'Eliminar as ameaças encontradas pelo anti-vírus.', '2015-01-27 14:03:31', 51, 0, 0),
(2406, 969, 'Foram eliminadas as ameaças encontradas pelo anti-vírus.', '2015-01-27 14:03:31', 51, 0, 0),
(2407, 961, 'Instalar o anti-virus kaspersky na máquina da Caixa1.', '2015-01-27 14:04:38', 51, 0, 0),
(2408, 961, 'Foi Instalada o anti-virus kaspersky na máquina da Caixa1.', '2015-01-27 14:04:38', 51, 0, 0),
(2409, 962, 'Instalar o anti-virus kaspersky na máquina da Caixa1.', '2015-01-27 14:05:31', 51, 0, 0),
(2410, 962, 'Foi Instalado o anti-virus kaspersky na máquina da Caixa1.', '2015-01-27 14:05:31', 51, 0, 0),
(2411, 959, 'Em atendimento por flavio', '2015-01-27 14:05:43', 51, 0, 0),
(2412, 970, 'Em atendimento por flavio', '2015-01-27 14:08:58', 51, 0, 0),
(2413, 970, 'Máquina travando.', '2015-01-27 14:11:49', 51, 0, 0),
(2414, 970, 'Foi feita uma limpeza de software e reinstalado o anti-vírus, em seguida, o anti-vírus foi executado para remoção de vírus. ', '2015-01-27 14:11:49', 51, 0, 0),
(2415, 959, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-01-27 15:47:20', 51, 0, 0),
(2416, 959, 'Máquina lenta e o anti virus está próximo de espirar.', '2015-01-28 13:26:23', 41, 0, 0),
(2417, 959, 'Limpeza da máquina e atualização do anti virus. ', '2015-01-28 13:26:23', 41, 0, 0),
(2418, 963, 'Em atendimento por lorena', '2015-01-28 13:48:17', 60, 0, 0),
(2419, 963, 'Instalar o anti-virus kaspersky na máquina do administrativo.', '2015-01-28 13:49:15', 60, 0, 0),
(2420, 963, 'O anti-virus kaspersky foi instalado na  máquina do administrativo.', '2015-01-28 13:49:15', 60, 0, 0),
(2421, 965, 'Instalar o anti-virus kaspersky na máquina da Gerência.', '2015-01-28 13:50:57', 60, 0, 0),
(2422, 965, 'O anti-virus kaspersky foi instalado na máquina da Gerência.', '2015-01-28 13:50:57', 60, 0, 0),
(2423, 964, 'Instalar o anti-virus kaspersky na máquina do Chekin.', '2015-01-28 13:54:34', 60, 0, 0),
(2424, 964, 'O  anti-virus kaspersky foi instalado na máquina do Chekin.', '2015-01-28 13:54:34', 60, 0, 0),
(2425, 971, 'Em atendimento por gregori', '2015-01-29 17:40:57', 41, 0, 0),
(2426, 972, 'Em atendimento por gregori', '2015-01-29 17:41:12', 41, 0, 0),
(2427, 973, 'Em atendimento por gregori', '2015-01-29 17:41:39', 41, 0, 0),
(2428, 973, 'Em atendimento por gregori', '2015-01-29 17:41:39', 41, 0, 0),
(2429, 974, 'Em atendimento por gregori', '2015-01-29 17:41:51', 41, 0, 0),
(2430, 975, 'Em atendimento por gregori', '2015-01-29 17:42:07', 41, 0, 0),
(2431, 976, 'Em atendimento por gregori', '2015-01-29 17:42:23', 41, 0, 0),
(2432, 971, 'Limpeza da máquina e atualização de impressora', '2015-01-29 17:44:19', 41, 0, 0),
(2433, 971, 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:44:19', 41, 0, 0),
(2434, 976, 'Limpeza da máquina e atualização de impressora.', '2015-01-29 17:44:53', 41, 0, 0),
(2435, 976, 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:44:53', 41, 0, 0),
(2436, 975, 'Limpeza da máquina e atualização de impressora.', '2015-01-29 17:45:20', 41, 0, 0),
(2437, 975, 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:45:20', 41, 0, 0),
(2438, 974, '	Limpeza da máquina e atualização de impressora.', '2015-01-29 17:45:43', 41, 0, 0),
(2439, 974, 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:45:43', 41, 0, 0),
(2440, 973, '	Limpeza da máquina e atualização de impressora.', '2015-01-29 17:46:24', 41, 0, 0),
(2441, 973, 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:46:24', 41, 0, 0),
(2442, 972, '	Limpeza da máquina e atualização de impressora.', '2015-01-29 17:46:47', 41, 0, 0),
(2443, 972, 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:46:47', 41, 0, 0),
(2444, 977, 'Descrição técnica do problema', '2015-02-02 16:57:25', 41, 0, 0),
(2445, 977, 'Solução para este problema', '2015-02-02 16:57:25', 41, 0, 0),
(2446, 979, 'Em atendimento por flavio', '2015-02-02 21:09:10', 51, 0, 0),
(2447, 979, 'Verificar máquinas se estão molhadas devido a um alagamento.', '2015-02-02 21:11:33', 51, 0, 0),
(2448, 979, 'As máquinas foram verificadas.', '2015-02-02 21:11:33', 51, 0, 0),
(2449, 978, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-02 21:12:31', 51, 0, 0),
(2450, 978, 'Em atendimento por flavio', '2015-02-02 21:12:40', 51, 0, 0),
(2451, 978, 'Máquina do Edson apresentando lentidão.', '2015-02-02 21:14:35', 51, 0, 0),
(2452, 978, 'Foi feita uma limpeza de software na máquina.', '2015-02-02 21:14:35', 51, 0, 0),
(2453, 981, 'Em atendimento por flavio', '2015-02-02 21:22:54', 51, 0, 0),
(2454, 981, 'Gerson não consegue acessar o servidor.', '2015-02-02 21:24:07', 51, 0, 0),
(2455, 981, 'O servidor foi reiniciado.', '2015-02-02 21:24:07', 51, 0, 0),
(2456, 980, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-02 21:24:53', 51, 0, 0),
(2457, 980, 'Em atendimento por flavio', '2015-02-02 21:25:01', 51, 0, 0),
(2458, 980, 'Impressoras desistaladas.', '2015-02-02 21:26:22', 51, 0, 0),
(2459, 980, 'Foram instaladas as impressoras.', '2015-02-02 21:26:22', 51, 0, 0),
(2460, 983, 'Em atendimento por flavio', '2015-02-02 21:28:46', 51, 0, 0),
(2461, 983, 'Kádia não consegue anexar um arquivo pdf que está no servidor.', '2015-02-02 21:30:08', 51, 0, 0),
(2462, 983, 'O arquivo foi copiado para máquina da Gláucia e depois anexado.', '2015-02-02 21:30:08', 51, 0, 0),
(2463, 982, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-02 21:31:25', 51, 0, 0),
(2464, 982, 'Em atendimento por flavio', '2015-02-02 21:31:31', 51, 0, 0),
(2465, 982, 'Ocorrência encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br />', '2015-02-02 21:34:18', 51, 0, 0),
(2466, 982, 'Ocorrência encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br />', '2015-02-02 21:35:16', 51, 0, 0),
(2467, 982, 'Descompartilhar uma pasta que está na máquina da Kádia e compartilha outra pasta.', '2015-02-02 21:36:05', 51, 0, 0),
(2468, 982, 'Foi descompartilhada a pasta do usuário que se chama kadia e compartilhada outra pasta.', '2015-02-02 21:36:05', 51, 0, 0),
(2470, 987, 'Colocar dois pontos de rede na sala ao lado do DP.', '2015-02-03 17:25:04', 51, 0, 0),
(2471, 987, 'Foram colocados dois pontos de rede na sala ao lado do DP.', '2015-02-03 17:25:04', 51, 0, 0),
(2472, 985, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: REDE --> MUDANÇA<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-03 17:32:50', 51, 0, 0),
(2473, 985, 'Em atendimento por flavio', '2015-02-03 17:32:57', 51, 0, 0),
(2474, 985, 'Mudar o computador da sala do DP de local e compartilhar algumas pastas.', '2015-02-03 17:37:55', 51, 0, 0),
(2475, 985, 'Foi mudado o computador da sala do DP de local e compartilhada as pastas.', '2015-02-03 17:37:55', 51, 0, 0),
(2476, 986, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: REDE --> MUDANÇA<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-03 17:39:02', 51, 0, 0),
(2477, 986, 'Em atendimento por flavio', '2015-02-03 17:39:10', 51, 0, 0),
(2478, 986, 'Mudar o computador da estagiária de local e mapear algumas pastas.', '2015-02-03 17:41:31', 51, 0, 0),
(2479, 986, 'Foi mudado de local o computador da estagiária e foi feto o mapeamento das pastas.', '2015-02-03 17:41:31', 51, 0, 0),
(2520, 1003, 'Ocorrência encaminhada/alterada por marcos<br /><b>Usuário</b>: Grégori Marchiori --> Marcos Portugal<br /><b>Unidade</b>:  --> LOCAL<br /><b>Contato</b>: Centro de Diagnose Armando Ferreira --> Verônica<br /><b>Ramal</b>:  --> 2235-2996<br />', '2015-02-05 00:04:35', 22, 0, 0),
(2481, 988, 'Em atendimento por gregori', '2015-02-04 10:32:06', 41, 0, 0),
(2482, 989, 'Em atendimento por gregori', '2015-02-04 10:32:21', 41, 0, 0),
(2483, 990, 'Em atendimento por gregori', '2015-02-04 10:32:36', 41, 0, 0),
(2484, 990, 'Descrição técnica do problema', '2015-02-04 10:32:51', 41, 0, 0),
(2485, 990, 'Solução para este problema', '2015-02-04 10:32:51', 41, 0, 0),
(2486, 991, 'Em atendimento por gregori', '2015-02-04 10:33:00', 41, 0, 0),
(2487, 992, 'Em atendimento por gregori', '2015-02-04 10:33:12', 41, 0, 0),
(2488, 993, 'Em atendimento por gregori', '2015-02-04 10:33:28', 41, 0, 0),
(2489, 994, 'Em atendimento por gregori', '2015-02-04 10:36:04', 41, 0, 0),
(2490, 988, 'Descrição técnica do problema', '2015-02-04 10:36:34', 41, 0, 0),
(2491, 988, 'Solução para este problema', '2015-02-04 10:36:34', 41, 0, 0),
(2492, 994, 'Descrição técnica do problema', '2015-02-04 10:36:50', 41, 0, 0),
(2493, 994, 'Solução para este problema', '2015-02-04 10:36:50', 41, 0, 0),
(2494, 993, 'Descrição técnica do problema', '2015-02-04 10:37:12', 41, 0, 0),
(2495, 993, 'Solução para este problema', '2015-02-04 10:37:12', 41, 0, 0),
(2496, 992, 'Descrição técnica do problema', '2015-02-04 10:37:26', 41, 0, 0),
(2497, 992, 'Solução para este problema', '2015-02-04 10:37:26', 41, 0, 0),
(2498, 991, 'Descrição técnica do problema', '2015-02-04 10:37:40', 41, 0, 0),
(2499, 991, 'Solução para este problema', '2015-02-04 10:37:40', 41, 0, 0),
(2500, 989, 'Descrição técnica do problema', '2015-02-04 10:37:52', 41, 0, 0),
(2501, 989, 'Solução para este problema', '2015-02-04 10:37:52', 41, 0, 0),
(2502, 995, 'Em atendimento por gregori', '2015-02-04 10:39:36', 41, 0, 0),
(2503, 995, 'Descrição técnica do problema', '2015-02-04 10:39:47', 41, 0, 0),
(2504, 995, 'Solução para este problema', '2015-02-04 10:39:47', 41, 0, 0),
(2505, 996, 'Em atendimento por gregori', '2015-02-04 10:40:03', 41, 0, 0),
(2506, 996, 'Descrição técnica do problema', '2015-02-04 10:40:11', 41, 0, 0),
(2507, 996, 'Solução para este problema', '2015-02-04 10:40:11', 41, 0, 0),
(2508, 997, 'Em atendimento por gregori', '2015-02-04 10:41:03', 41, 0, 0),
(2509, 998, 'Em atendimento por gregori', '2015-02-04 10:41:17', 41, 0, 0),
(2510, 998, 'Descrição técnica do problema', '2015-02-04 10:41:25', 41, 0, 0),
(2511, 998, 'Solução para este problema', '2015-02-04 10:41:25', 41, 0, 0),
(2512, 999, 'Em atendimento por gregori', '2015-02-04 10:41:38', 41, 0, 0),
(2513, 999, 'Descrição técnica do problema', '2015-02-04 10:41:46', 41, 0, 0),
(2514, 999, 'Solução para este problema', '2015-02-04 10:41:46', 41, 0, 0),
(2515, 997, 'Descrição técnica do problema', '2015-02-04 10:42:02', 41, 0, 0),
(2516, 997, 'Solução para este problema', '2015-02-04 10:42:02', 41, 0, 0),
(2517, 1001, 'Em atendimento por flavio', '2015-02-04 20:35:54', 51, 0, 0),
(2518, 1001, 'Kuler do nobreak fazendo barulho. ', '2015-02-04 20:39:16', 51, 0, 0),
(2519, 1001, 'O nobreak foi aberto e limpo, em seguida, o kuler foi lubrificado e aparafuzado no local com uma folga eliminando o barulho. Obs: essa é uma solução improvisada.', '2015-02-04 20:39:16', 51, 0, 0),
(2521, 1000, 'Em atendimento por gregori', '2015-02-05 10:55:27', 41, 0, 0),
(2522, 1000, 'Descrição técnica do problema', '2015-02-05 14:02:41', 41, 0, 0),
(2523, 1000, 'Solução para este problema', '2015-02-05 14:02:41', 41, 0, 0),
(2524, 1002, 'Em atendimento por gregori', '2015-02-05 15:10:56', 41, 0, 0),
(2525, 1002, 'Descrição técnica do problema', '2015-02-05 16:34:30', 41, 0, 0),
(2526, 1002, 'Solução para este problema', '2015-02-05 16:34:30', 41, 0, 0),
(2527, 1005, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Encaminhado para operador<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-06 10:37:23', 51, 0, 0),
(2528, 1004, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Visualizado pelo suporte<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-06 10:38:06', 51, 0, 0),
(2529, 1006, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Visualizado pelo suporte<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-08 19:42:55', 51, 0, 0),
(2530, 1011, 'Em atendimento por flavio', '2015-02-10 14:24:38', 51, 0, 0),
(2531, 1011, 'Colocar impressora na rede.', '2015-02-10 14:26:33', 51, 0, 0),
(2532, 1011, 'Foi colocada na rede a impressora.', '2015-02-10 14:26:33', 51, 0, 0),
(2533, 1010, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-10 14:27:53', 51, 0, 0),
(2534, 1010, 'Configurar ultrasom1 na rede.', '2015-02-10 14:31:23', 51, 0, 0),
(2535, 1010, 'Configurado ultrasom1 na rede.', '2015-02-10 14:31:23', 51, 0, 0),
(2536, 1009, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-10 14:31:57', 51, 0, 0),
(2537, 1009, 'Configurar ultrasom2 na rede.', '2015-02-10 14:34:29', 51, 0, 0),
(2538, 1009, 'Configurado ultrasom2 na rede.', '2015-02-10 14:34:29', 51, 0, 0),
(2539, 1007, 'Em atendimento por gregori', '2015-02-11 10:50:47', 41, 0, 0),
(2540, 1005, 'Em atendimento por gregori', '2015-02-11 11:07:02', 41, 0, 0),
(2541, 1019, 'Em atendimento por flavio', '2015-02-11 11:12:43', 51, 0, 0),
(2542, 1019, 'Máquina travando na bios.', '2015-02-11 11:15:17', 51, 0, 0);
INSERT INTO `assentamentos` (`numero`, `ocorrencia`, `assentamento`, `data`, `responsavel`, `asset_privated`, `tipo_assentamento`) VALUES
(2543, 1019, 'Retirada de uma das memórias que estava ruim e foi feita uma limpeza de software e hardware.', '2015-02-11 11:15:17', 51, 0, 0),
(2544, 1016, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-11 11:17:20', 51, 0, 0),
(2545, 1016, 'Em atendimento por flavio', '2015-02-11 11:17:29', 51, 0, 0),
(2546, 1016, 'Instalar o catálogo de peças e consertar a máquina que não reconhece o hd.', '2015-02-11 11:19:24', 51, 0, 0),
(2547, 1016, 'Foi trocado o cabo flet do hd e instalado o catálogo de peças.', '2015-02-11 11:19:24', 51, 0, 0),
(2548, 1018, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-11 11:21:30', 51, 0, 0),
(2549, 1018, 'Em atendimento por flavio', '2015-02-11 11:21:40', 51, 0, 0),
(2550, 1018, 'Ocorrência encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br />', '2015-02-11 11:24:29', 51, 0, 0),
(2551, 1018, 'Scanear e salvar como pdf para uma pasta específica.', '2015-02-11 11:25:57', 51, 0, 0),
(2552, 1018, 'Driver da impressora não permite salva em pdf.', '2015-02-11 11:25:57', 51, 0, 0),
(2553, 1017, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-11 11:27:07', 51, 0, 0),
(2554, 1017, 'Em atendimento por flavio', '2015-02-11 11:27:15', 51, 0, 0),
(2555, 1017, 'Instalar programa para imagens para pdf.', '2015-02-11 11:31:14', 51, 0, 0),
(2556, 1017, 'Foi instalado programa para converter imagens para pdf.', '2015-02-11 11:31:14', 51, 0, 0),
(2557, 1022, 'Em atendimento por flavio', '2015-02-11 11:41:28', 51, 0, 0),
(2558, 1022, 'Sefip não abre na máquina da Ana Paula', '2015-02-11 11:43:43', 51, 0, 0),
(2559, 1022, 'Copiar o arquivo conselo.dll para dentro da pasta SysWOW64 e executar o sefip como administrador.', '2015-02-11 11:43:43', 51, 0, 0),
(2560, 1021, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-11 11:45:25', 51, 0, 0),
(2561, 1021, 'Em atendimento por flavio', '2015-02-11 11:45:37', 51, 0, 0),
(2562, 1007, 'As câmeras 03,14 e 19 não estão funcionando', '2015-02-11 11:49:13', 41, 0, 0),
(2563, 1007, 'A 03 e 19 estão funcionando,a 14 será trocado o cabo.', '2015-02-11 11:49:13', 41, 0, 0),
(2564, 1005, 'Reinstação do sistema operacional do Notebook do Elcio.', '2015-02-11 11:50:04', 41, 0, 0),
(2565, 1005, 'Noot reinstalado com êxito,aguardando somente o proprietário vir busca-lo.', '2015-02-11 11:50:04', 41, 0, 0),
(2566, 1021, 'Máquina da Vânia está com adware.', '2015-02-11 11:50:30', 51, 0, 0),
(2567, 1021, 'Foi passado o ComboFix e foram desinstalados os browsers e reinstalados.', '2015-02-11 11:50:30', 51, 0, 0),
(2568, 1020, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-11 11:51:50', 51, 0, 0),
(2569, 1020, 'Em atendimento por flavio', '2015-02-11 11:53:29', 51, 0, 0),
(2570, 1020, 'Máquina da Helena não abre o Homolognet, pois o java não funciona.', '2015-02-11 11:59:35', 51, 0, 0),
(2571, 1020, 'Foi reinstalado a java.', '2015-02-11 11:59:35', 51, 0, 0),
(2572, 1006, 'Em atendimento por flavio', '2015-02-11 11:59:57', 51, 0, 0),
(2573, 1006, 'Os certificados digitais não estão sendo reconhecidos na minha máquina, so consigo acesso com o Codigo... E com isso impossibilitado de enviar GFIP e DCTF etc...', '2015-02-11 12:02:02', 51, 0, 0),
(2574, 1006, 'Foi desinstalado o AVG e instalado o Karpersky 30 dias e removido duas ameaças.', '2015-02-11 12:02:02', 51, 0, 0),
(2575, 1024, 'Em atendimento por flavio', '2015-02-11 12:03:47', 51, 0, 0),
(2576, 1024, 'Outlook não recebe email.', '2015-02-11 12:05:30', 51, 0, 0),
(2577, 1024, 'Foi feito o teste de enviar e receber e funcionou sozinho.', '2015-02-11 12:05:30', 51, 0, 0),
(2578, 1025, 'Em atendimento por flavio', '2015-02-11 12:08:48', 51, 0, 0),
(2579, 1025, 'Erro ao tentar acessa página da Receita Federal devido o Java bloquear o acesso.', '2015-02-11 12:12:01', 51, 0, 0),
(2580, 1025, 'Foi reinstalado o java e o site da Receita federal foi colocado na excessão.', '2015-02-11 12:12:01', 51, 0, 0),
(2581, 1023, 'Em atendimento por lorena', '2015-02-11 12:46:59', 60, 0, 0),
(2582, 1023, 'A Impressora inicia a impressão e depois interrompe o processo.', '2015-02-11 12:48:48', 60, 0, 0),
(2583, 1023, 'A impressora está com o cartucho vazio e acusou o uso de cartucho não original.', '2015-02-11 12:48:48', 60, 0, 0),
(2585, 1013, 'Em atendimento por lorena', '2015-02-11 14:16:40', 60, 0, 0),
(2586, 1013, 'ATUALIZAÇÃO DE JAVA. - O programa esta sendo atualizado, mais continua a um informar o erro de desatualização.', '2015-02-11 14:19:51', 60, 0, 0),
(2587, 1013, 'O JAVA foi reinstalado e o site da CAIXA foi colocado em modo de compatibilidade no Internet Explorer.', '2015-02-11 14:19:51', 60, 0, 0),
(2679, 1052, 'Em atendimento por gregori', '2015-03-05 13:07:18', 41, 0, 0),
(2680, 1042, 'Em atendimento por lorena', '2015-03-06 14:37:11', 60, 0, 0),
(2681, 1042, 'Não consegue visualizar a impressão antes de imprimir.', '2015-03-06 14:39:42', 60, 0, 0),
(2590, 1004, 'Ocorrência encaminhada/alterada por flavio<br /><b>Usuário</b>: Flávio Portugal --> Grégori Marchiori<br /><b>Unidade</b>:  --> <br />', '2015-02-12 12:22:01', 51, 0, 0),
(2591, 1004, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Visualizado pelo suporte --> Encaminhado para operador<br /><b>Usuário</b>: Grégori Marchiori --> Flávio Portugal<br /><b>Unidade</b>:  --> <br />', '2015-02-12 12:22:28', 51, 0, 0),
(2592, 1026, '	Instalação do PDC Creator.', '2015-02-12 13:01:06', 41, 0, 0),
(2593, 1026, 'Instalei o programa solicitado e um outro alternativo caso esse programa não conseguisse ser utilizado pelo usuário.', '2015-02-12 13:01:06', 41, 0, 0),
(2594, 1004, 'Em atendimento por gregori', '2015-02-13 01:15:51', 41, 0, 0),
(2595, 1003, 'Em atendimento por gregori', '2015-02-13 01:16:06', 41, 0, 0),
(2596, 1004, 'Após ser instalado um programa pela poygou ( sistema ECF para passar o cartão ) foi reinicializado a maquina e a tela ficou toda azul e com a informação &quot; Foi detectado um problema e o windows foi desligado para evitar danos&quot;. Informa para apertar F8 e escolher modo seguro, mais mesmo assim não esta recebendo o comando F8 e mesmo forçando a reinicialização sempre volta para esta tela.', '2015-02-13 01:18:04', 41, 0, 0),
(2597, 1004, 'Reinstalação da máquina,up-grade de sistema operacional;do XP para o W7,instalação de programas padrões e sistemas de uso comercial local.\r\n(Aguardei até o termino da instalação dos sistemas da loja,para realmente não ter dúvida sobre a funcionalidade da máquina.)', '2015-02-13 01:18:04', 41, 0, 0),
(2598, 1003, '	Instalação de No-break na Central telefônica', '2015-02-13 01:19:11', 41, 0, 0),
(2599, 1003, 'Instalei o no-break na central quando fui resolver o problema da máquina da Lúcia. (No-Break comprado no mesmo local do novo HD da Lúcia.)', '2015-02-13 01:19:11', 41, 0, 0),
(2600, 1027, 'Em atendimento por gregori', '2015-02-19 14:22:38', 41, 0, 0),
(2601, 1027, 'Wifi não funcionava.', '2015-02-19 14:23:43', 41, 0, 0),
(2602, 1027, 'Ativei o drive wireless que se encontrava desativado.', '2015-02-19 14:23:43', 41, 0, 0),
(2603, 1028, 'Em atendimento por gregori', '2015-02-20 13:59:39', 41, 0, 0),
(2604, 1029, 'Em atendimento por marcos', '2015-02-20 15:58:06', 22, 0, 0),
(2605, 1029, 'Abrindo telas cinzas no ASA. Erros em arquivos aleatórios.', '2015-02-20 16:02:55', 22, 0, 0),
(2606, 1029, 'Foi concluída a restauração do sistema com exito.\r\n\r\nTeste ok!', '2015-02-20 16:02:55', 22, 0, 0),
(2607, 1030, 'Em atendimento por marcos', '2015-02-23 12:03:49', 22, 0, 0),
(2608, 1030, 'Solicitação de instalação do Teamviwer na máquina CDO 09', '2015-02-23 12:08:12', 22, 0, 0),
(2609, 1030, 'O Teamviewer foi instalado  para que sejam possíveis os procedimentos de acesso remoto.', '2015-02-23 12:08:12', 22, 0, 0),
(2610, 1031, 'Em atendimento por marcos', '2015-02-23 12:08:24', 22, 0, 0),
(2611, 1031, 'Solicitação de instalação do Teamviwer na máquina CDO 10.', '2015-02-23 12:09:02', 22, 0, 0),
(2612, 1031, 'O Teamviewer foi instalado  para que sejam possíveis os procedimentos de acesso remoto.', '2015-02-23 12:09:02', 22, 0, 0),
(2613, 1032, 'Em atendimento por gregori', '2015-02-23 13:28:26', 41, 0, 0),
(2614, 1032, '	A máquina não imprime e nem navega na internet.', '2015-02-23 13:30:48', 41, 0, 0),
(2615, 1032, 'Estava com endereço Ip inválido.\r\nA impressão não ocorria,pois a impressora não estava compartilhada.', '2015-02-23 13:30:48', 41, 0, 0),
(2616, 1028, 'Descrição técnica do problema', '2015-02-23 16:37:10', 41, 0, 0),
(2617, 1028, 'Solução para este problema', '2015-02-23 16:37:10', 41, 0, 0),
(2618, 1036, 'Em atendimento por flavio', '2015-02-24 14:52:30', 51, 0, 0),
(2619, 1036, 'Máquina liga e apita.', '2015-02-24 14:53:20', 51, 0, 0),
(2620, 1036, 'Limpeza de memória', '2015-02-24 14:53:20', 51, 0, 0),
(2621, 1034, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: HARDWARE --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-02-24 14:53:59', 51, 0, 0),
(2622, 1034, 'Ocorrência encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Rossane --> CRESS<br />', '2015-02-24 14:54:28', 51, 0, 0),
(2623, 1034, 'Em atendimento por flavio', '2015-02-24 14:54:34', 51, 0, 0),
(2624, 1034, 'Máquina lenta', '2015-02-24 14:56:11', 51, 0, 0),
(2625, 1034, 'Foi feita uma limpeza de software na máquina ao lado da Nízia.', '2015-02-24 14:56:11', 51, 0, 0),
(2626, 1035, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Rossane --> Nízia<br /><b>Ramal</b>:  --> 1<br />', '2015-02-24 14:57:27', 51, 0, 0),
(2627, 1035, 'Em atendimento por flavio', '2015-02-24 14:57:34', 51, 0, 0),
(2628, 1035, 'Máquina apresentando tela azul.', '2015-02-24 15:00:56', 51, 0, 0),
(2629, 1035, 'Foi retirado uma das memórias(ddr2) da máquina e deixado apenas uma memória.', '2015-02-24 15:00:56', 51, 0, 0),
(2677, 1044, 'Revisar a instalação dos softwares de uma máquina, pois a mesma está muito lenta.', '2015-03-04 14:36:51', 41, 0, 0),
(2678, 1044, 'O nootbook do Wallace não estava acessando a internet,reconfigurei o Ip,desinstalei e instalei o driver de ethernet e restaurei a máquina.', '2015-03-04 14:36:51', 41, 0, 0),
(2631, 1037, 'Em atendimento por flavio', '2015-02-24 15:03:27', 51, 0, 0),
(2632, 1037, 'Sistema VisualAsa não abre.', '2015-02-24 15:06:11', 51, 0, 0),
(2633, 1037, 'Foi criador um atalho do arquivo executável  AsaServidor que está localizado dentro da pasta VisualAsa no Servidor.', '2015-02-24 15:06:11', 51, 0, 0),
(2676, 1044, 'Em atendimento por gregori', '2015-03-04 14:35:30', 41, 0, 0),
(2635, 1039, 'Em atendimento por gregori', '2015-02-25 10:15:20', 41, 0, 0),
(2636, 1039, '	Impressora não imprime.', '2015-02-26 09:22:44', 41, 0, 0),
(2637, 1039, 'Impressora encaminhada para loja autorizada,pois ela não estava identificando os cartuchos de tinta.', '2015-02-26 09:22:44', 41, 0, 0),
(2638, 1033, 'Em atendimento por flavio', '2015-02-26 10:33:19', 51, 0, 0),
(2639, 1033, 'FLAVIO , UMA PASTA SUMIU DA MINHA AREA DE TRABALHO ; NOME DA PASTA E FLUXO DE CAIXA ¨&quot;*ENTRAR NA MAQUINA 11;50&quot; SE FOR RESTAURAR *AVISAR ANTES DE ENTRAR NA MÁQUINA Nº 004', '2015-02-26 10:37:04', 51, 0, 0),
(2640, 1033, 'A pasta informada na descrição do problema é na verdade uma atalho de uma pasta que está na máquina da Kádia e a pedido da mesma foi retida da rede compartilha.', '2015-02-26 10:37:04', 51, 0, 0),
(2641, 1041, 'Em atendimento por flavio', '2015-02-26 10:39:02', 51, 0, 0),
(2642, 1040, 'Em atendimento por gregori', '2015-02-26 10:40:57', 41, 0, 0),
(2643, 1040, '	A máquina da tela azul e trava.', '2015-02-26 10:45:48', 41, 0, 0),
(2644, 1040, 'Reinstalação da máquina.', '2015-02-26 10:45:48', 41, 0, 0),
(2645, 1041, 'Instalar a atualização do internet explorer.', '2015-02-26 10:50:22', 51, 0, 0),
(2646, 1041, 'Não foi possível instalar o internet explorer versão 9 porque o sistema operacional da máquina é windows xp permitindo apenas o ie8 ou inferior. Foi sugerido instalar o firefox.  ', '2015-02-26 10:50:22', 51, 0, 0),
(2647, 1044, 'Tem previsão para atendimento?\r\n', '2015-03-03 11:05:16', 54, 0, 0),
(2648, 1014, 'Em atendimento por flavio', '2015-03-04 13:07:15', 51, 0, 0),
(2649, 1014, 'Máquina não inicia o windows.', '2015-03-04 13:10:13', 51, 0, 0),
(2650, 1014, 'Foi feita uma limpeza de hardware.', '2015-03-04 13:10:13', 51, 0, 0),
(2651, 1046, 'Em atendimento por flavio', '2015-03-04 13:12:40', 51, 0, 0),
(2652, 1046, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-04 13:13:56', 51, 0, 0),
(2653, 1046, 'Máquina da Márcia está apresentando mensagens de erro no decorrer do seu uso.', '2015-03-04 13:14:41', 51, 0, 0),
(2654, 1046, 'Foi feita uma restauração para o 19/02/2015.', '2015-03-04 13:14:41', 51, 0, 0),
(2655, 1045, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-04 13:16:03', 51, 0, 0),
(2656, 1045, 'Máquina da Márcia está apresentando alto índice de processamento.', '2015-03-04 13:17:44', 51, 0, 0),
(2657, 1045, 'Foi feita uma restauração para o dia 10/02/2015 e em seguida uma limpeza de software', '2015-03-04 13:17:44', 51, 0, 0),
(2658, 1047, 'Em atendimento por flavio', '2015-03-04 13:19:19', 51, 0, 0),
(2659, 1047, 'Windows xp não funciona direito.', '2015-03-04 13:21:05', 51, 0, 0),
(2660, 1047, 'Foi sugerido, depois de muitas avaliações, a reinstalação do sistema operacional.', '2015-03-04 13:21:05', 51, 0, 0),
(2661, 1048, 'Em atendimento por flavio', '2015-03-04 13:23:06', 51, 0, 0),
(2662, 1048, 'Descrição:	Impressora não está imprimindo.', '2015-03-04 13:24:22', 51, 0, 0),
(2663, 1048, 'Foi calibrada a impressora e colocada como principal outro driver de copia.', '2015-03-04 13:24:22', 51, 0, 0),
(2664, 1049, 'Em atendimento por flavio', '2015-03-04 13:26:02', 51, 0, 0),
(2665, 1049, 'Máquina lenta.', '2015-03-04 13:27:20', 51, 0, 0),
(2666, 1049, 'Foi feita uma limpeza na máquina.', '2015-03-04 13:27:20', 51, 0, 0),
(2667, 1043, 'Em atendimento por flavio', '2015-03-04 13:28:13', 51, 0, 0),
(2668, 1043, 'Não consigo enviar e nem receber email.', '2015-03-04 13:30:02', 51, 0, 0),
(2669, 1043, 'Foi configurado o Outlook Microsoft e exportado os emails do Outlook Express.', '2015-03-04 13:30:02', 51, 0, 0),
(2670, 1051, 'Em atendimento por flavio', '2015-03-04 13:31:47', 51, 0, 0),
(2671, 1051, 'Reinstalar máquina da telefonia 2.', '2015-03-04 13:32:48', 51, 0, 0),
(2672, 1051, 'A máquina foi reinstalada .', '2015-03-04 13:32:48', 51, 0, 0),
(2673, 1050, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-04 13:33:45', 51, 0, 0),
(2674, 1050, 'Máquina do arquivo está lenta.', '2015-03-04 13:35:09', 51, 0, 0),
(2675, 1050, 'Foi feita uma limpeza de software.', '2015-03-04 13:35:09', 51, 0, 0),
(2682, 1042, 'O driver da impressora foi reinstalado.', '2015-03-06 14:39:42', 60, 0, 0),
(2683, 1052, 'Máquina do arquivo não abre o ASA e nem navega na internet.', '2015-03-09 10:22:30', 41, 0, 0),
(2684, 1052, 'Reconfiguração do IP.', '2015-03-09 10:22:30', 41, 0, 0),
(2685, 1053, 'Em atendimento por flavio', '2015-03-10 09:33:28', 51, 0, 0),
(2686, 1053, 'O computador está lento.', '2015-03-10 09:34:59', 51, 0, 0),
(2687, 1053, 'Foi feita uma limpeza.', '2015-03-10 09:34:59', 51, 0, 0),
(2688, 1059, 'Em atendimento por flavio', '2015-03-10 09:38:08', 51, 0, 0),
(2689, 1059, 'Reinstalar máquina da recepção.', '2015-03-10 09:40:27', 51, 0, 0),
(2690, 1059, 'Foi perada uma máquina de backup-003 para substituir a máquina da recepção. Foram passados os emails, agenda e instalado sistema de monitoramento de câmeras. ', '2015-03-10 09:40:27', 51, 0, 0),
(2691, 1058, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Vânia --> Márcia<br /><b>Ramal</b>:  --> 1<br />', '2015-03-10 09:41:33', 51, 0, 0),
(2692, 1058, 'Em atendimento por flavio', '2015-03-10 09:41:40', 51, 0, 0),
(2693, 1058, 'Email live email dando erro de envio e chipset esquentando.', '2015-03-10 09:47:10', 51, 0, 0),
(2694, 1058, 'Foi removido um email que estava travado na caixa de saída e foi colocado um coller improvisado no chipset, devido a um aumento de temperatura.', '2015-03-10 09:47:10', 51, 0, 0),
(2695, 1057, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Vânia --> Departamento - Andréia<br /><b>Ramal</b>:  --> 1<br />', '2015-03-10 09:48:29', 51, 0, 0),
(2696, 1057, 'Em atendimento por flavio', '2015-03-10 09:48:35', 51, 0, 0),
(2697, 1057, 'Não consegue enviar impressão frente e verso no sistema da receita.', '2015-03-10 09:51:34', 51, 0, 0),
(2698, 1057, 'Foi feito um teste no Broffice e a impressão frente e verso saiu, mas foi possível fazer o mesmo no sistema da receita.', '2015-03-10 09:51:34', 51, 0, 0),
(2699, 1056, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Vânia --> Setor Eli - Primeira mesa depois do corredor<br /><b>Ramal</b>:  --> 1<br />', '2015-03-10 09:53:25', 51, 0, 0),
(2700, 1056, 'Em atendimento por flavio', '2015-03-10 09:53:32', 51, 0, 0),
(2701, 1056, 'Anti-vírus acusando ameaças e reiniciando a máquina.', '2015-03-10 09:56:56', 51, 0, 0),
(2702, 1056, 'Foi feita uma limpeza de software e o problema foi resolvido.', '2015-03-10 09:56:56', 51, 0, 0),
(2703, 1055, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-10 09:57:49', 51, 0, 0),
(2704, 1055, 'Em atendimento por flavio', '2015-03-10 09:57:56', 51, 0, 0),
(2705, 1055, 'Máquina apresentando adware.', '2015-03-10 09:58:54', 51, 0, 0),
(2706, 1055, 'Foi feita um limpeza de software.', '2015-03-10 09:58:54', 51, 0, 0),
(2707, 1054, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-10 09:59:48', 51, 0, 0),
(2708, 1054, 'Em atendimento por flavio', '2015-03-10 09:59:56', 51, 0, 0),
(2709, 1054, 'Sistema na máquina da Vânia não ativa e da erro.', '2015-03-10 10:04:15', 51, 0, 0),
(2710, 1054, 'O sistema  foi ativado e o erro foi solucionado renomeando o arquivo &#039;Geral.xml&#039; dentro da pasta do sistema em questão.', '2015-03-10 10:04:15', 51, 0, 0),
(2711, 1060, 'Em atendimento por flavio', '2015-03-10 10:06:18', 51, 0, 0),
(2712, 1060, 'Máquina apresentando lentidão. ', '2015-03-10 10:07:42', 51, 0, 0),
(2713, 1060, 'Foi feita uma limpeza de software.', '2015-03-10 10:07:42', 51, 0, 0),
(2714, 1061, 'Em atendimento por flavio', '2015-03-10 10:16:53', 51, 0, 0),
(2715, 1061, 'Ícone do Live Email sumiu da área de trabalho.', '2015-03-10 10:18:22', 51, 0, 0),
(2716, 1061, 'Foi feito um passo a passo com o usuário e o problema foi solucionado.', '2015-03-10 10:18:22', 51, 0, 0),
(2717, 1062, 'Em atendimento por gregori', '2015-03-12 15:03:55', 41, 0, 0),
(2718, 1062, 'Não executava programas,navegadores e sites de bancos.', '2015-03-12 15:05:12', 41, 0, 0),
(2719, 1062, 'Restauração da máquina,verificação com Combofix e atualização do Kapersky.', '2015-03-12 15:05:12', 41, 0, 0),
(2720, 1063, 'Em atendimento por gregori', '2015-03-13 13:34:01', 41, 0, 0),
(2721, 1063, '	Ativar o Windows na máquina da Lúcia', '2015-03-13 13:35:03', 41, 0, 0),
(2722, 1063, 'Solicitei para Manoel o código de ativação,entrei remotamente e ativei o windows.', '2015-03-13 13:35:03', 41, 0, 0),
(2723, 1064, 'Em atendimento por flavio', '2015-03-16 10:23:36', 51, 0, 0),
(2724, 1064, 'Outlook não envia e scanner não funciona.', '2015-03-16 10:25:00', 51, 0, 0),
(2725, 1064, 'Foi reinstalado o driver da impressora e foi feita uma configuração no outlook. ', '2015-03-16 10:25:00', 51, 0, 0),
(2726, 1067, 'Em atendimento por flavio', '2015-03-16 10:27:22', 51, 0, 0),
(2727, 1067, 'Trocar a máquina da recepção.', '2015-03-16 10:28:11', 51, 0, 0),
(2728, 1067, 'A máquina foi trocada.', '2015-03-16 10:28:11', 51, 0, 0),
(2729, 1065, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: MUDANÇA --> HARDWARE<br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Vânia --> Everaldo<br /><b>Ramal</b>:  --> 1<br />', '2015-03-16 10:30:47', 51, 0, 0),
(2730, 1065, 'Em atendimento por flavio', '2015-03-16 10:30:58', 51, 0, 0),
(2731, 1065, 'Verificar se hd está bom.', '2015-03-16 10:32:07', 51, 0, 0),
(2732, 1065, 'O hd estava ruim.', '2015-03-16 10:32:07', 51, 0, 0),
(2733, 1066, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: MUDANÇA --> HARDWARE<br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Vânia --> Everaldo<br /><b>Ramal</b>:  --> 1<br />', '2015-03-16 10:35:12', 51, 0, 0),
(2734, 1066, 'Em atendimento por flavio', '2015-03-16 10:35:26', 51, 0, 0),
(2735, 1066, 'Fazer uma clonagem do hd da máquina da Ana Paula para substituição do hd.', '2015-03-16 10:36:34', 51, 0, 0),
(2736, 1066, 'Foi feita a substituição do hd e o backup de algumas informações.', '2015-03-16 10:36:34', 51, 0, 0),
(2737, 1071, 'Em atendimento por flavio', '2015-03-16 10:39:03', 51, 0, 0),
(2738, 1071, 'Câmera da entrada com defeito.', '2015-03-16 10:43:26', 51, 0, 0),
(2739, 1071, 'Foi feita a substituição da câmera.', '2015-03-16 10:43:26', 51, 0, 0),
(2740, 1070, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-16 10:43:59', 51, 0, 0),
(2741, 1070, 'Em atendimento por flavio', '2015-03-16 10:44:04', 51, 0, 0),
(2742, 1070, 'Câmera do estacionamento com defeito.', '2015-03-16 10:44:37', 51, 0, 0),
(2743, 1070, 'Foi feita a substituição da câmera.', '2015-03-16 10:44:37', 51, 0, 0),
(2744, 1069, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: CAMERAS --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-16 10:45:37', 51, 0, 0),
(2745, 1069, 'Máquina da Angélica está lenta.', '2015-03-16 10:46:39', 51, 0, 0),
(2746, 1069, 'Foi feita uma limpeza de software.', '2015-03-16 10:46:39', 51, 0, 0),
(2747, 1068, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: CAMERAS --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Marilena --> CDAF<br /><b>Ramal</b>:  --> 1<br />', '2015-03-16 10:47:16', 51, 0, 0),
(2748, 1068, 'Em atendimento por flavio', '2015-03-16 10:47:24', 51, 0, 0),
(2749, 1068, 'Compartilhar uma pasta.', '2015-03-16 10:48:09', 51, 0, 0),
(2750, 1068, 'A pasta foi compartilha.', '2015-03-16 10:48:09', 51, 0, 0),
(2751, 1073, 'Em atendimento por flavio', '2015-03-16 10:50:48', 51, 0, 0),
(2752, 1073, 'Salvar um arquivo em um pendriver.', '2015-03-16 10:51:30', 51, 0, 0),
(2753, 1073, 'O arquivo foi salvo.', '2015-03-16 10:51:30', 51, 0, 0),
(2754, 1072, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Contato</b>: Selma --> GoldStar<br /><b>Ramal</b>:  --> 1<br />', '2015-03-16 10:52:58', 51, 0, 0),
(2755, 1072, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Problema</b>: SOFTWARE --> CAMERAS<br /><b>Unidade</b>:  --> <br />', '2015-03-16 10:53:11', 51, 0, 0),
(2756, 1072, 'Na recepção as câmeras não estão aparecendo adequadamente.', '2015-03-16 10:54:14', 51, 0, 0),
(2757, 1072, 'Foram reorganizadas.', '2015-03-16 10:54:14', 51, 0, 0),
(2758, 1074, 'Em atendimento por gregori', '2015-03-16 13:01:07', 41, 0, 0),
(2759, 1074, 'Impressora não imprime.', '2015-03-16 13:02:05', 41, 0, 0),
(2760, 1074, 'Problema no cartucho de tinta,o usuário vai levar na autorizada.\r\n', '2015-03-16 13:02:05', 41, 0, 0),
(2761, 865, 'Descrição técnica do problema', '2015-03-17 14:00:44', 3, 0, 0),
(2762, 865, 'resolvido com alteração de permissões do navegador', '2015-03-17 14:00:44', 3, 0, 0),
(2763, 870, 'Descrição técnica do problema', '2015-03-17 14:01:52', 3, 0, 0),
(2764, 870, 'Resolvido', '2015-03-17 14:01:52', 3, 0, 0),
(2765, 1075, 'Em atendimento por everaldo', '2015-03-17 14:05:46', 3, 0, 0),
(2766, 1075, 'arquivo jpg abrindo com pdf.', '2015-03-17 14:07:49', 3, 0, 0),
(2767, 1075, 'Alterado para abrir com visualizador de imagens do windows.', '2015-03-17 14:07:49', 3, 0, 0),
(2768, 1076, 'Em atendimento por gregori', '2015-03-18 12:03:30', 41, 0, 0),
(2769, 1076, 'Configurar o servidor para acesso remoto. Instalar e configurar dois jogos no meu pc de casa para minha filha.', '2015-03-18 12:07:35', 41, 0, 0),
(2770, 1076, 'Abertura de porta no roteador,instalação do software da seg no servidor.\r\nResolvi o proble da compatibilidade do Steam e Uplay,assim eu consegui fazer o Rayman Legends jogar.\r\nInstalação no Peter Pan Aventuras na terra do nunca e crackeamento para o path no cd. Abri permissão no antivírus para que o Peter pan rode.\r\nLimpeza da máquina de uso pessoal e particular do Jorge ,pois se encontrava impregnada de softwares maliciosos.', '2015-03-18 12:07:35', 41, 0, 0),
(2771, 1077, 'Em atendimento por gregori', '2015-03-18 17:49:39', 41, 0, 0),
(2772, 1077, 'Descrição:	Impressão lenda,a partir da primeira impressão,demora muito pra sair a segunda.', '2015-03-19 11:57:37', 41, 0, 0),
(2773, 1077, 'Atualização do antivírus. e varredura na máquina.', '2015-03-19 11:57:37', 41, 0, 0),
(2774, 1080, 'Em atendimento por gregori', '2015-03-19 14:56:53', 41, 0, 0),
(2775, 1078, 'Em atendimento por gregori', '2015-03-19 14:57:42', 41, 0, 0),
(2776, 1079, 'Em atendimento por gregori', '2015-03-19 14:58:33', 41, 0, 0),
(2777, 1078, 'Descrição técnica do problema', '2015-03-19 15:00:19', 41, 0, 0),
(2778, 1078, 'Instalei e compartilhei a impressora.', '2015-03-19 15:00:19', 41, 0, 0),
(2779, 1080, 'Descrição técnica do problema', '2015-03-19 15:00:35', 41, 0, 0),
(2780, 1080, 'Instalei e compartilhei a impressora.', '2015-03-19 15:00:35', 41, 0, 0),
(2781, 1079, 'Descrição técnica do problema', '2015-03-19 15:00:50', 41, 0, 0),
(2782, 1079, 'Instalei e compartilhei a impressora.', '2015-03-19 15:00:50', 41, 0, 0),
(2783, 1081, 'Em atendimento por flavio', '2015-03-30 10:25:42', 51, 0, 0),
(2784, 1081, 'Máquina lenta.', '2015-03-30 10:26:17', 51, 0, 0),
(2785, 1081, 'Foi feita uma limpeza de software na máquina.', '2015-03-30 10:26:17', 51, 0, 0),
(2786, 1082, 'Em atendimento por flavio', '2015-03-30 10:28:47', 51, 0, 0),
(2787, 1082, 'Máquina não vem vídeo.', '2015-03-30 10:32:54', 51, 0, 0),
(2788, 1082, 'Foi feita a substituição da memória de um giga, que estava ruim, por uma memória de dois gigas.  ', '2015-03-30 10:32:54', 51, 0, 0),
(2789, 1084, 'Em atendimento por flavio', '2015-03-30 10:34:21', 51, 0, 0),
(2790, 1084, 'Servidor lento.', '2015-03-30 10:35:17', 51, 0, 0),
(2791, 1084, 'Foi feita uma limpeza de software no servidor.', '2015-03-30 10:35:17', 51, 0, 0),
(2792, 1083, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-03-30 10:36:14', 51, 0, 0),
(2793, 1083, 'Em atendimento por flavio', '2015-03-30 10:36:20', 51, 0, 0),
(2794, 1083, 'Máquina da rose apresentando lentidão.', '2015-03-30 10:37:08', 51, 0, 0),
(2795, 1083, 'Foi feita uma limpeza de software.', '2015-03-30 10:37:08', 51, 0, 0),
(2796, 1085, 'Em atendimento por flavio', '2015-03-30 10:40:09', 51, 0, 0),
(2797, 1085, 'Câmera da entrada da clínica está com defeito.', '2015-03-30 10:40:52', 51, 0, 0),
(2798, 1085, 'Câmera da entrada da clínica foi reparada.', '2015-03-30 10:40:52', 51, 0, 0),
(2799, 1086, 'Em atendimento por flavio', '2015-03-30 10:42:20', 51, 0, 0),
(2800, 1086, 'Compartilhar pasta. Máquina da sala de departamento pessoal.', '2015-03-30 10:43:20', 51, 0, 0),
(2801, 1086, 'A pasta foi compartilhada.', '2015-03-30 10:43:20', 51, 0, 0),
(2802, 1087, 'Em atendimento por flavio', '2015-03-30 10:46:03', 51, 0, 0),
(2803, 1087, 'Trocar hd do servidor e instalar o cobian para fazer backup em um hd externo.', '2015-03-30 10:47:03', 51, 0, 0),
(2804, 1087, 'Foi trocado o  hd do servidor e instalado o cobian para fazer backup em um hd externo.', '2015-03-30 10:47:03', 51, 0, 0),
(2805, 1088, 'Em atendimento por gregori', '2015-03-31 12:27:52', 41, 0, 0),
(2806, 1088, 'Descrição:	Verifiquei o posicionamento das câmeras;12,10,8,7,6 e 4. Ficou decidido que a câmera 10 e 07 será trocada por uma coma lente mais aberta.', '2015-03-31 12:28:19', 41, 0, 0),
(2807, 1088, 'Descrição:	Verifiquei o posicionamento das câmeras;12,10,8,7,6 e 4. Ficou decidido que a câmera 10 e 07 será trocada por uma coma lente mais aberta.', '2015-03-31 12:28:19', 41, 0, 0),
(2808, 1089, 'Em atendimento por gregori', '2015-04-01 11:01:43', 41, 0, 0),
(2809, 1090, 'Em atendimento por gregori', '2015-04-01 11:12:10', 41, 0, 0),
(2810, 1090, 'Descrição:	Impressora imprime uma página em branco entes da impressão solicitada.', '2015-04-01 11:12:48', 41, 0, 0),
(2811, 1090, 'Desmarquei a opção &quot;Imprimir frente e verso&quot;.', '2015-04-01 11:12:48', 41, 0, 0),
(2812, 1089, 'Computador não inicializa o Windows', '2015-04-06 15:25:48', 22, 0, 0),
(2813, 1089, 'Foi feita a restauração do sistema para solução  do problema.', '2015-04-06 15:25:48', 22, 0, 0),
(2814, 1094, 'Em atendimento por flavio', '2015-04-09 11:33:26', 51, 0, 0),
(2815, 1094, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 11:34:27', 51, 0, 0),
(2816, 1094, 'Máquina da Verônica pessoal não liga.', '2015-04-09 11:35:36', 51, 0, 0),
(2817, 1094, 'Foi trocado a fonte e instalado o sistema da receita federal.', '2015-04-09 11:35:36', 51, 0, 0),
(2818, 1093, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 11:37:19', 51, 0, 0),
(2819, 1093, 'Ocorrência encaminhada/alterada por flavio<br /><b>Problema</b>: HARDWARE --> SOFTWARE<br /><b>Unidade</b>:  --> <br />', '2015-04-09 11:39:58', 51, 0, 0),
(2820, 1093, 'Instalar sistema da receita federal no Macboot da Verônica.', '2015-04-09 11:40:38', 51, 0, 0),
(2821, 1093, 'Não foi possível instalar o sistema, pois necessitava de atualizar o sistema operacional e não tinha espaço no Hd. ', '2015-04-09 11:40:38', 51, 0, 0),
(2822, 1092, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: HARDWARE --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 11:42:50', 51, 0, 0),
(2823, 1092, 'Em atendimento por flavio', '2015-04-09 11:42:56', 51, 0, 0),
(2824, 1092, 'Ocorrência encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br />', '2015-04-09 11:47:53', 51, 0, 0),
(2825, 1092, 'Ocorrência encaminhada/alterada por flavio<br /><b>Unidade</b>:  --> <br />', '2015-04-09 11:49:19', 51, 0, 0),
(2826, 1092, 'Configurar telão do auditório para mostrar imagem do netbook do DR Yamane.', '2015-04-09 11:55:36', 51, 0, 0),
(2827, 1092, 'Foi configurado o telão do auditório para mostrar imagens do netbook do DR Yamane.', '2015-04-09 11:55:36', 51, 0, 0),
(2828, 1096, 'Em atendimento por flavio', '2015-04-09 12:22:44', 51, 0, 0),
(2829, 1096, 'Máquina do Eli está lenta.', '2015-04-09 12:29:17', 51, 0, 0),
(2830, 1096, 'Foi trocado o hd.', '2015-04-09 12:29:17', 51, 0, 0),
(2831, 1095, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: HARDWARE --> MUDANÇA<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 12:30:55', 51, 0, 0),
(2832, 1095, 'Troca a máquina da Célia.', '2015-04-09 12:31:54', 51, 0, 0),
(2833, 1095, 'Foi troca a máquina da Célia e configurada a nova máquina.', '2015-04-09 12:31:54', 51, 0, 0),
(2834, 1100, 'Em atendimento por flavio', '2015-04-09 12:33:45', 51, 0, 0),
(2835, 1100, 'Máquina sem rede.', '2015-04-09 12:35:36', 51, 0, 0),
(2836, 1100, 'Foi colocado um switch e a máquina foi configurada.', '2015-04-09 12:35:36', 51, 0, 0),
(2837, 1099, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: REDE --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 12:36:36', 51, 0, 0),
(2838, 1099, 'Netbook da Feijó está lento.', '2015-04-09 12:38:01', 51, 0, 0),
(2839, 1099, 'Hd ruim. O usuário atual da máquina foi notificado sobre o problema.', '2015-04-09 12:38:01', 51, 0, 0),
(2840, 1098, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: REDE --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 12:38:34', 51, 0, 0),
(2841, 1098, 'Máquina lenta.', '2015-04-09 12:39:02', 51, 0, 0),
(2842, 1098, 'Foi feita uma limpeza de software.', '2015-04-09 12:39:02', 51, 0, 0),
(2843, 1097, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 12:42:32', 51, 0, 0),
(2844, 1097, 'Em atendimento por flavio', '2015-04-09 12:42:38', 51, 0, 0),
(2845, 1097, 'Deixar um cabo de rede disponível para conexão com a rede.', '2015-04-09 12:43:37', 51, 0, 0),
(2846, 1097, 'Foi deixado um cabo de rede disponível para conexão com a rede.', '2015-04-09 12:43:37', 51, 0, 0),
(2847, 1101, 'Em atendimento por flavio', '2015-04-09 12:44:56', 51, 0, 0),
(2848, 1101, 'Máquina da Célia está sem impressora.', '2015-04-09 12:45:46', 51, 0, 0),
(2849, 1101, 'Foram instaladas as impressoras solicitadas.', '2015-04-09 12:45:46', 51, 0, 0),
(2850, 1104, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 12:47:44', 51, 0, 0),
(2851, 1104, 'Rede para toda manhã. RBS', '2015-04-09 12:48:54', 51, 0, 0),
(2852, 1104, 'Foram refeitos alguns cabos que apresentaram problemas.', '2015-04-09 12:48:54', 51, 0, 0),
(2853, 1103, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: REDE --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 12:51:38', 51, 0, 0),
(2854, 1103, 'Limpeza de software preventiva.', '2015-04-09 12:52:11', 51, 0, 0),
(2855, 1103, 'Foi feita uma limpeza de software.', '2015-04-09 12:52:11', 51, 0, 0),
(2856, 1102, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: REDE --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 12:54:37', 51, 0, 0),
(2857, 1102, 'Máquina da Marinete trava parcialmente quando tenta compartilhar uma pasta na rede.', '2015-04-09 12:57:00', 51, 0, 0),
(2858, 1102, 'Foi trocado o cabo de rede e foi passado o combofix, mas não adiantou. Foi combinado com o cliente uma nova tentativa de resolver o problema no dia seguinte.', '2015-04-09 12:57:00', 51, 0, 0),
(2859, 1105, 'Em atendimento por flavio', '2015-04-09 13:09:09', 51, 0, 0),
(2860, 1105, 'Sistema de câmeras da portaria parou devido ao cabo de rede estar aparentemente parcialmente rompido.', '2015-04-09 13:11:14', 51, 0, 0),
(2861, 1105, 'Foi colocado um novo cabo de rede.', '2015-04-09 13:11:14', 51, 0, 0),
(2862, 1091, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Aguardando retorno do usuário<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> Flávio Portugal<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-09 14:52:07', 51, 0, 0),
(2863, 1106, 'Em atendimento por everaldo', '2015-04-10 14:20:43', 3, 0, 0),
(2864, 1106, 'Descrição técnica do problema', '2015-04-10 14:21:18', 3, 0, 0),
(2865, 1106, 'Solução para este problema', '2015-04-10 14:21:18', 3, 0, 0),
(2866, 829, 'Descrição técnica do problema', '2015-04-10 14:30:23', 3, 0, 0),
(2867, 829, 'Solução para este problema', '2015-04-10 14:30:23', 3, 0, 0),
(2868, 830, 'Descrição técnica do problema', '2015-04-10 14:30:53', 3, 0, 0),
(2869, 830, 'Solução para este problema', '2015-04-10 14:30:53', 3, 0, 0),
(2870, 831, 'Descrição técnica do problema', '2015-04-10 14:31:13', 3, 0, 0),
(2871, 831, 'Solução para este problema', '2015-04-10 14:31:13', 3, 0, 0),
(2872, 832, 'Descrição técnica do problema', '2015-04-10 14:32:16', 3, 0, 0),
(2873, 832, 'Solução para este problema', '2015-04-10 14:32:16', 3, 0, 0),
(2874, 833, 'Descrição técnica do problema', '2015-04-10 14:33:09', 3, 0, 0),
(2875, 833, 'Solução para este problema', '2015-04-10 14:33:09', 3, 0, 0),
(2876, 834, 'Descrição técnica do problema', '2015-04-10 14:33:37', 3, 0, 0),
(2877, 834, 'Solução para este problema', '2015-04-10 14:33:37', 3, 0, 0),
(2878, 835, 'Descrição técnica do problema', '2015-04-10 14:33:58', 3, 0, 0),
(2879, 835, 'Solução para este problema', '2015-04-10 14:33:58', 3, 0, 0),
(2880, 841, 'Descrição técnica do problema', '2015-04-10 14:34:24', 3, 0, 0),
(2881, 841, 'Solução para este problema', '2015-04-10 14:34:24', 3, 0, 0),
(2882, 836, 'Descrição técnica do problema', '2015-04-10 14:34:43', 3, 0, 0),
(2883, 836, 'Solução para este problema', '2015-04-10 14:34:43', 3, 0, 0),
(2884, 837, 'Descrição técnica do problema', '2015-04-10 14:35:04', 3, 0, 0),
(2885, 837, 'Solução para este problema', '2015-04-10 14:35:04', 3, 0, 0),
(2886, 838, 'Descrição técnica do problema', '2015-04-10 14:35:49', 3, 0, 0),
(2887, 838, 'Solução para este problema', '2015-04-10 14:35:49', 3, 0, 0),
(2888, 839, 'Descrição técnica do problema', '2015-04-10 14:36:07', 3, 0, 0),
(2889, 839, 'Solução para este problema', '2015-04-10 14:36:07', 3, 0, 0),
(2890, 840, 'Descrição técnica do problema', '2015-04-10 14:36:23', 3, 0, 0),
(2891, 840, 'Solução para este problema', '2015-04-10 14:36:23', 3, 0, 0),
(2892, 1107, 'Em atendimento por everaldo', '2015-04-13 16:40:01', 3, 0, 0),
(2893, 1107, 'Descrição técnica do problema', '2015-04-13 16:40:50', 3, 0, 0),
(2894, 1107, 'Novo Atalho', '2015-04-13 16:40:50', 3, 0, 0),
(2895, 1108, 'Em atendimento por everaldo', '2015-04-13 16:42:31', 3, 0, 0),
(2896, 1108, 'Descrição técnica do problema', '2015-04-13 16:42:55', 3, 0, 0),
(2897, 1108, 'Limpeza', '2015-04-13 16:42:55', 3, 0, 0),
(2898, 1109, 'Em atendimento por everaldo', '2015-04-13 16:45:39', 3, 0, 0),
(2899, 1109, 'Ocorrência encaminhada/alterada por everaldo\r\n\r\nComputador apresentando Lentidão na inicialização, possível substituição do disco (HD)<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-04-13 16:49:21', 3, 0, 0),
(2900, 1110, 'Em atendimento por everaldo', '2015-04-13 16:51:57', 3, 0, 0),
(2901, 1110, 'Descrição técnica do problema', '2015-04-13 16:52:14', 3, 0, 0),
(2902, 1110, 'Solução para este problema', '2015-04-13 16:52:14', 3, 0, 0),
(2903, 1109, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Em atendimento --> Agendado com usuário<br /><b>Unidade</b>:  --> <br />', '2015-04-13 16:59:21', 3, 0, 0),
(2904, 1112, 'Em atendimento por everaldo', '2015-04-14 12:54:09', 3, 0, 0),
(2905, 1112, 'Caminho de rede diferente ( IP ).', '2015-04-14 12:57:17', 3, 0, 0),
(2906, 1112, 'IP do computador do Joel  tem que ser igual ao configurado no software da impressora.', '2015-04-14 12:57:17', 3, 0, 0),
(2907, 1113, 'Em atendimento por everaldo', '2015-04-14 13:01:11', 3, 0, 0),
(2908, 1113, 'Descrição técnica do problema', '2015-04-14 13:02:49', 3, 0, 0),
(2909, 1113, 'Configurado para deixar cópia de mensagens no servidor em propriedades de contas ( outlook ).', '2015-04-14 13:02:49', 3, 0, 0),
(2910, 1114, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Agendado com usuário --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-04-14 16:54:31', 3, 0, 0),
(2911, 842, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Em atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-04-14 16:56:29', 3, 0, 0),
(2912, 843, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Em atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-04-14 16:57:14', 3, 0, 0),
(2913, 846, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Em atendimento --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-04-14 16:58:18', 3, 0, 0),
(2914, 844, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Em atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-04-14 16:59:38', 3, 0, 0),
(2915, 845, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Em atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 0<br />', '2015-04-14 17:00:16', 3, 0, 0),
(2916, 1116, 'Mudança de sistema operacional e aplicativos', '2015-04-16 17:35:40', 22, 0, 0),
(2917, 1116, 'Instalação do Windows 7 e aplicativos do usuário', '2015-04-16 17:35:40', 22, 0, 0),
(2918, 1117, 'Instalação de IRPF2015 e Java não Mac da Verônica', '2015-04-16 17:43:24', 22, 0, 0),
(2919, 1117, 'Instalação de IRPF2015 e Java não Mac da Verônica baixando os aplicativos da Apple Store', '2015-04-16 17:43:24', 22, 0, 0),
(2920, 873, 'Central telefônica travando aleatoriamente. Não recebe e nem faz ligações.', '2015-04-16 17:45:48', 22, 0, 0),
(2921, 873, 'Instalação de No-break para alimentação da Central telefônica', '2015-04-16 17:45:48', 22, 0, 0),
(2922, 1118, 'Computador da Beth NÃO liga', '2015-04-16 17:51:25', 22, 0, 0),
(2923, 1118, 'Desconexão de todos os cabos e reconexão novamente e o computador voltou a funcionar normalmente.', '2015-04-16 17:51:25', 22, 0, 0),
(2924, 1119, 'Em atendimento por gregori', '2015-04-24 09:35:09', 41, 0, 0),
(2925, 1119, 'Caixa 01 e caixa 02 não imprimem.\r\nNão é possível visualizar as outras máquinas na rede.', '2015-04-24 09:36:30', 41, 0, 0),
(2926, 1119, 'Desabilitei a conexão V6.', '2015-04-24 09:36:30', 41, 0, 0),
(2927, 1120, 'Aguardando providenciamento de cabos para finalização do serviço.Será necessário a passagem de um novo cabo,pois o antigo se encontra inacessível . ', '2015-04-24 11:17:15', 41, 0, 0),
(2928, 1121, 'Em atendimento por gregori', '2015-04-27 13:16:42', 41, 0, 0),
(2929, 1121, 'Computador não liga.', '2015-04-27 13:17:37', 41, 0, 0),
(2930, 1121, 'Fonte ruim. Foi efetuada a troca da fonte.', '2015-04-27 13:17:37', 41, 0, 0),
(2931, 1122, 'Em atendimento por gregori', '2015-04-28 10:38:56', 41, 0, 0),
(2932, 1122, 'Em atendimento por gregori', '2015-04-28 10:39:03', 41, 0, 0),
(2933, 1120, 'Descrição técnica do problema', '2015-04-28 10:39:48', 41, 0, 0),
(2934, 1120, 'Aguardando providenciamento de cabos para finalização do serviço.Será necessário a passagem de um novo cabo,pois o antigo se encontra inacessível .', '2015-04-28 10:39:48', 41, 0, 0),
(2935, 1109, 'Em atendimento por gregori', '2015-04-28 10:40:11', 41, 0, 0),
(2936, 1109, 'Em atendimento por gregori', '2015-04-28 10:40:26', 41, 0, 0),
(2937, 1123, 'Em atendimento por gregori', '2015-04-28 10:50:58', 41, 0, 0),
(2938, 1123, '	Máquina da Gabriela não liga,fica apitando e não liga.', '2015-04-28 10:51:40', 41, 0, 0),
(2939, 1123, 'Limpeza física da máquina,aplicação da pasta térmica.', '2015-04-28 10:51:40', 41, 0, 0),
(2940, 1091, 'Descrição técnica do problema', '2015-04-28 11:01:43', 41, 0, 0),
(2941, 1091, 'Solução para este problema', '2015-04-28 11:01:43', 41, 0, 0),
(2942, 1122, 'Bom dia! O AVG está pedindo para ser atualizado só que não sei se esse é gratuito. Aguardo um retorno.', '2015-04-28 11:47:58', 41, 0, 0),
(2943, 1122, 'Atualização do software de segurança e limpeza da máquina para melhor funcionamento.', '2015-04-28 11:47:58', 41, 0, 0),
(2944, 1124, 'Em atendimento por gregori', '2015-04-30 15:39:21', 41, 0, 0),
(2945, 1124, 'Máquina  01 não imprime.', '2015-04-30 15:40:15', 41, 0, 0),
(2946, 1124, 'Reinstalação dos drives da impressora e compartilhar a mesma.', '2015-04-30 15:40:15', 41, 0, 0),
(2947, 1114, 'Em atendimento por everaldo', '2015-04-30 17:27:55', 3, 0, 0),
(2948, 1114, 'Descrição técnica do problema', '2015-04-30 17:28:12', 3, 0, 0),
(2949, 1114, 'Solução para este problema', '2015-04-30 17:28:12', 3, 0, 0),
(2950, 1125, 'Em atendimento por everaldo', '2015-04-30 17:31:11', 3, 0, 0),
(2951, 1125, 'Descrição técnica do problema', '2015-04-30 17:31:28', 3, 0, 0),
(2952, 1125, 'Solução para este problema', '2015-04-30 17:31:28', 3, 0, 0),
(2953, 1126, 'Em atendimento por everaldo', '2015-04-30 17:34:09', 3, 0, 0),
(2954, 1126, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Em atendimento --> Em estudo<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-04-30 17:40:22', 3, 0, 0),
(2955, 1127, 'Em atendimento por everaldo', '2015-04-30 17:44:06', 3, 0, 0),
(2956, 1127, 'Descrição técnica do problema', '2015-04-30 17:44:24', 3, 0, 0),
(2957, 1127, 'Solução para este problema', '2015-04-30 17:44:24', 3, 0, 0),
(2958, 1128, 'Em atendimento por gregori', '2015-05-05 13:59:25', 41, 0, 0),
(2959, 1128, '	Limpeza de máquina,lentidão e dificuldade para navegar.', '2015-05-05 14:00:15', 41, 0, 0),
(2960, 1128, 'Limpeza com Combofiz,Ccleaner e Adware. Atualização de antivírus e atualização do mesmo.', '2015-05-05 14:00:15', 41, 0, 0),
(2961, 1129, 'Em atendimento por gregori', '2015-05-05 17:11:44', 41, 0, 0),
(2962, 1129, 'Descrição técnica do problema', '2015-05-12 09:14:26', 41, 0, 0),
(2963, 1129, 'Solução para este problema', '2015-05-12 09:14:26', 41, 0, 0),
(2964, 1111, 'Descrição técnica do problema', '2015-05-13 09:48:47', 41, 0, 0),
(2965, 1111, 'Solução para este problema', '2015-05-13 09:48:47', 41, 0, 0),
(2966, 1109, 'Descrição técnica do problema', '2015-05-13 09:48:59', 41, 0, 0),
(2967, 1109, 'Solução para este problema', '2015-05-13 09:48:59', 41, 0, 0),
(2968, 1130, 'Em atendimento por gregori', '2015-05-15 10:34:03', 41, 0, 0),
(2969, 1130, '	Tecla &quot;Caps Lock&quot; parou de funcionar,e tem duas linhas estranhas na tela no notebook.', '2015-05-15 10:35:02', 41, 0, 0),
(2970, 1130, 'Reinicialização da máquina,desativei e ativei o teclado off-board no setup.', '2015-05-15 10:35:02', 41, 0, 0),
(2971, 1131, 'Em atendimento por gregori', '2015-05-15 12:54:37', 41, 0, 0),
(2972, 1131, 'Puxar um cabo de rede do computador até o moden. Configurar o Outlook da máquina para Vendas05.', '2015-05-15 12:56:00', 41, 0, 0),
(2973, 1131, 'Puxei o fio com Yuri,instalei logmein e atualizei o antivírus da máquina. Configurei o outlook e fiz uma limpeza de software. ', '2015-05-15 12:56:00', 41, 0, 0),
(2974, 1139, 'Em atendimento por flavio', '2015-05-15 13:32:28', 51, 0, 0),
(2975, 1139, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 13:32:49', 51, 0, 0),
(2976, 1139, 'Consertar backup1', '2015-05-15 13:33:24', 51, 0, 0),
(2977, 1139, 'Backup1 reparodo.', '2015-05-15 13:33:24', 51, 0, 0),
(2978, 1132, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 13:34:56', 51, 0, 0),
(2979, 1132, 'Consertar backup2', '2015-05-15 13:35:24', 51, 0, 0),
(2980, 1132, 'Backup2 repado', '2015-05-15 13:35:24', 51, 0, 0),
(2981, 1133, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 13:36:34', 51, 0, 0),
(2982, 1133, 'Consertar backup4.', '2015-05-15 13:37:14', 51, 0, 0),
(2983, 1133, 'Backup4 consertado.', '2015-05-15 13:37:14', 51, 0, 0),
(2984, 1134, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 13:38:33', 51, 0, 0),
(2985, 1134, 'Máquina não sobe windows.', '2015-05-15 13:39:11', 51, 0, 0),
(2986, 1134, 'Foi colocado o boot correto.', '2015-05-15 13:39:11', 51, 0, 0),
(2987, 1143, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 13:59:51', 51, 0, 0),
(2988, 1140, 'Ocorrência encaminhada/alterada por flavio<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 14:01:02', 51, 0, 0),
(2989, 1140, 'Em atendimento por flavio', '2015-05-15 14:01:09', 51, 0, 0),
(2990, 1140, 'Servidor não sobe windows.', '2015-05-15 14:02:09', 51, 0, 0);
INSERT INTO `assentamentos` (`numero`, `ocorrencia`, `assentamento`, `data`, `responsavel`, `asset_privated`, `tipo_assentamento`) VALUES
(2991, 1140, 'Servidor retirado para análise.', '2015-05-15 14:02:09', 51, 0, 0),
(2992, 1141, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: SERVIDOR --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 14:15:07', 51, 0, 0),
(2993, 1141, 'Instalar sistema na máquina da Gleice.', '2015-05-15 14:16:33', 51, 0, 0),
(2994, 1141, 'Foi Instalado o  sistema na máquina da Gleice.', '2015-05-15 14:16:33', 51, 0, 0),
(2995, 1142, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 14:18:08', 51, 0, 0),
(2996, 1142, 'Trocar bateria da máquina da Angélica.', '2015-05-15 14:18:40', 51, 0, 0),
(2997, 1142, 'Foi trocado a bateria da máquina da Angélica.', '2015-05-15 14:18:40', 51, 0, 0),
(2998, 1143, 'Ocorrência encaminhada/alterada por flavio<br /><b>Problema</b>: SERVIDOR --> SOFTWARE<br /><b>Unidade</b>:  --> <br />', '2015-05-15 14:44:46', 51, 0, 0),
(2999, 1143, 'Impressora de etiqueta não imprime na máquina 1 da recepção.', '2015-05-15 14:46:32', 51, 0, 0),
(3000, 1143, 'Foi solucionado.', '2015-05-15 14:46:32', 51, 0, 0),
(3001, 1144, 'Em atendimento por flavio', '2015-05-15 14:48:45', 51, 0, 0),
(3002, 1144, 'Mudança do dvr', '2015-05-15 14:49:23', 51, 0, 0),
(3003, 1144, 'O dvr foi trocado', '2015-05-15 14:49:23', 51, 0, 0),
(3004, 1148, 'Em atendimento por flavio', '2015-05-15 14:51:38', 51, 0, 0),
(3005, 1148, 'Site do banco não abre(java).', '2015-05-15 14:52:13', 51, 0, 0),
(3006, 1148, 'Atualizar java', '2015-05-15 14:52:13', 51, 0, 0),
(3007, 1147, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 14:52:49', 51, 0, 0),
(3008, 1147, 'Site do banco não abre(java) máquina da Kádia.', '2015-05-15 14:53:43', 51, 0, 0),
(3009, 1147, 'Foi atualizado o java.', '2015-05-15 14:53:43', 51, 0, 0),
(3010, 1149, 'Em atendimento por flavio', '2015-05-15 15:08:27', 51, 0, 0),
(3011, 1149, 'Impressora não imprime.', '2015-05-15 15:09:12', 51, 0, 0),
(3012, 1149, 'Foi solucionado.', '2015-05-15 15:09:12', 51, 0, 0),
(3013, 1135, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Everaldo Moraes<br /><b>Problema</b>: SOFTWARE --> HARDWARE<br /><b>Unidade</b>:  --> LOCAL<br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 15:34:00', 3, 0, 0),
(3014, 1135, 'Descrição técnica do problema', '2015-05-15 15:36:08', 3, 0, 0),
(3015, 1135, 'Adicionado 2GB de Memória, ficando com 4GB', '2015-05-15 15:36:08', 3, 0, 0),
(3016, 1136, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Everaldo Moraes<br /><b>Unidade</b>:  --> LOCAL<br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 15:37:32', 3, 0, 0),
(3017, 1136, 'Descrição técnica do problema', '2015-05-15 15:38:01', 3, 0, 0),
(3018, 1136, 'Instalação do Java', '2015-05-15 15:38:01', 3, 0, 0),
(3019, 1137, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Everaldo Moraes<br /><b>Unidade</b>:  --> LOCAL<br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 15:42:31', 3, 0, 0),
(3020, 1137, 'Ocorrência encaminhada/alterada por everaldo<br />', '2015-05-15 15:44:49', 3, 0, 0),
(3021, 1137, 'Descrição técnica do problema', '2015-05-15 15:45:18', 3, 0, 0),
(3022, 1137, 'Solução para este problema', '2015-05-15 15:45:18', 3, 0, 0),
(3023, 1138, 'Ocorrência encaminhada/alterada por everaldo<br /><b>Status</b>: Aguardando atendimento --> Em estudo<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>: Flávio Portugal --> Everaldo Moraes<br /><b>Unidade</b>:  --> LOCAL<br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 15:46:28', 3, 0, 0),
(3024, 1126, 'Troca de capacitor perto do processador, em testes<br /><b>Unidade</b>:  --> <br />', '2015-05-15 15:47:38', 3, 0, 0),
(3025, 1116, 'Feita Formatação e instalação de dois micros, ADMIN e GERENCIA, restando computador do CHEKIN a fazer<br /><b>Usuário</b>: Marcos Portugal --> Everaldo Moraes<br /><b>Ramal</b>:  --> 1<br />', '2015-05-15 15:49:42', 3, 0, 0),
(3026, 1116, 'Ocorrência encaminhada/alterada por everaldo<br />', '2015-05-15 15:50:15', 3, 0, 0),
(3027, 1150, 'Em atendimento por everaldo', '2015-05-15 17:27:12', 3, 0, 0),
(3028, 1150, 'Descrição técnica do problema', '2015-05-15 17:28:17', 3, 0, 0),
(3029, 1150, 'Desintalação do warsaw', '2015-05-15 17:28:17', 3, 0, 0),
(3030, 1151, 'Em atendimento por everaldo', '2015-05-18 15:34:48', 3, 0, 0),
(3031, 1151, 'Descrição técnica do problema', '2015-05-18 16:08:30', 3, 0, 0),
(3032, 1151, 'Limpeza', '2015-05-18 16:08:30', 3, 0, 0),
(3033, 1152, 'Em atendimento por everaldo', '2015-05-18 16:25:42', 3, 0, 0),
(3034, 1152, 'Descrição técnica do problema', '2015-05-18 16:29:18', 3, 0, 0),
(3035, 1152, 'Limpeza', '2015-05-18 16:29:18', 3, 0, 0),
(3036, 1153, 'Em atendimento por everaldo', '2015-05-18 16:30:22', 3, 0, 0),
(3037, 1153, 'Temporários', '2015-05-18 16:31:05', 3, 0, 0),
(3038, 1153, 'Limpeza', '2015-05-18 16:31:05', 3, 0, 0),
(3039, 1156, 'Em atendimento por flavio', '2015-05-25 10:25:33', 51, 0, 0),
(3040, 1156, 'Colocar câmera no 8° andar', '2015-05-25 10:30:29', 51, 0, 0),
(3041, 1156, 'Foi colocada uma câmera no 8° andar', '2015-05-25 10:30:29', 51, 0, 0),
(3042, 1155, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-05-25 10:31:25', 51, 0, 0),
(3043, 1155, 'Interferência na câmera da Suíça.', '2015-05-25 10:32:38', 51, 0, 0),
(3044, 1155, 'Foi retirado um rolo de cabo do cabeamento.', '2015-05-25 10:32:38', 51, 0, 0),
(3045, 1154, 'Em atendimento por flavio', '2015-05-25 10:32:54', 51, 0, 0),
(3046, 1154, 'Windows não inicia.', '2015-05-25 10:35:05', 51, 0, 0),
(3047, 1154, 'Foi feita uma limpeza na máquina e foi trocado o cabo sata do hd. ', '2015-05-25 10:35:05', 51, 0, 0),
(3048, 1157, 'Em atendimento por flavio', '2015-05-25 10:37:22', 51, 0, 0),
(3049, 1157, 'Instalar nova máquina no local.', '2015-05-25 10:38:34', 51, 0, 0),
(3050, 1157, 'Foi instalada nova máquina no local.', '2015-05-25 10:38:34', 51, 0, 0),
(3051, 1158, 'Em atendimento por flavio', '2015-05-25 10:42:03', 51, 0, 0),
(3052, 1158, 'Erro nota fiscal.', '2015-05-25 10:44:11', 51, 0, 0),
(3053, 1158, 'Foi constatado que erro provinha  da desatualização do sistema do contador.', '2015-05-25 10:44:11', 51, 0, 0),
(3054, 1163, 'Em atendimento por flavio', '2015-05-25 10:45:31', 51, 0, 0),
(3055, 1163, 'Limpeza nas máquinas.', '2015-05-25 10:46:45', 51, 0, 0),
(3056, 1163, 'Foi feita uma limpeza na máquina caixa1.', '2015-05-25 10:46:45', 51, 0, 0),
(3057, 1162, 'Em atendimento por flavio', '2015-05-25 10:46:58', 51, 0, 0),
(3058, 1162, 'Limpeza nas máquinas.', '2015-05-25 10:47:28', 51, 0, 0),
(3059, 1162, 'Foi feita uma limpeza na máquina caixa2.', '2015-05-25 10:47:28', 51, 0, 0),
(3060, 1161, 'Em atendimento por flavio', '2015-05-25 10:47:38', 51, 0, 0),
(3061, 1161, 'Limpeza nas máquinas.', '2015-05-25 10:48:12', 51, 0, 0),
(3062, 1161, 'Foi feita uma limpeza na máquina checkin.', '2015-05-25 10:48:12', 51, 0, 0),
(3063, 1160, 'Em atendimento por flavio', '2015-05-25 10:48:24', 51, 0, 0),
(3064, 1160, 'Limpeza nas máquinas.', '2015-05-25 10:49:06', 51, 0, 0),
(3065, 1160, 'Foi feita uma limpeza na máquina admin.', '2015-05-25 10:49:06', 51, 0, 0),
(3066, 1159, 'Em atendimento por flavio', '2015-05-25 10:49:16', 51, 0, 0),
(3067, 1159, 'Limpeza nas máquinas.', '2015-05-25 10:49:52', 51, 0, 0),
(3068, 1159, 'Foi feita uma limpeza na máquina Gerência.', '2015-05-25 10:49:52', 51, 0, 0),
(3069, 1164, 'Em atendimento por gregori', '2015-05-26 12:37:14', 41, 0, 0),
(3070, 1164, 'Computador não quer ligar após um pico de luz.', '2015-05-26 12:38:42', 41, 0, 0),
(3071, 1164, 'Troca da fonte,pois a mesma se encontrava queimada.', '2015-05-26 12:38:42', 41, 0, 0),
(3072, 1166, 'Em atendimento por flavio', '2015-06-02 10:53:19', 51, 0, 0),
(3073, 1166, 'Sem internet.', '2015-06-02 11:00:05', 51, 0, 0),
(3074, 1166, 'Foram invertidas as conexões no  balanceador.', '2015-06-02 11:00:05', 51, 0, 0),
(3075, 1165, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-06-02 11:00:44', 51, 0, 0),
(3076, 1165, 'Impressora não imprime.', '2015-06-02 11:01:53', 51, 0, 0),
(3077, 1165, 'Foi reinstalado o driver de impressão.', '2015-06-02 11:01:53', 51, 0, 0),
(3078, 1170, 'Em atendimento por flavio', '2015-06-02 11:04:39', 51, 0, 0),
(3079, 1170, 'Máquina do Guilherme está com Vírus.', '2015-06-02 11:08:40', 51, 0, 0),
(3080, 1170, 'Foi reinstalado o sistema operacional em outro hd e foram feitas tentativas de recuperar a informação. ', '2015-06-02 11:08:40', 51, 0, 0),
(3081, 1169, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-06-02 11:10:14', 51, 0, 0),
(3082, 1169, 'Netbook sem acesso a internet e editor de texto LibraOffice apresentando problemas.', '2015-06-02 11:13:05', 51, 0, 0),
(3083, 1169, 'Foi excluída uma conexão de rede sem fio configurada de forma inadequada e foi instalado o Microsoft Office', '2015-06-02 11:13:05', 51, 0, 0),
(3084, 1168, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-06-02 11:13:24', 51, 0, 0),
(3085, 1168, 'Netbook sem acesso a internet e editor de texto LibraOffice apresentando problemas.', '2015-06-02 11:15:17', 51, 0, 0),
(3086, 1168, 'Foi excluída uma conexão de rede sem fio configurada de forma inadequada e foi reinstalado o LibraOffice.', '2015-06-02 11:15:17', 51, 0, 0),
(3087, 1167, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-06-02 11:16:02', 51, 0, 0),
(3088, 1167, 'Máquina da Cofi não liga.', '2015-06-02 11:16:47', 51, 0, 0),
(3089, 1167, 'Foi trocada a fonte da máquina.', '2015-06-02 11:16:47', 51, 0, 0),
(3090, 1171, 'Em atendimento por flavio', '2015-06-02 11:18:49', 51, 0, 0),
(3091, 1171, 'Trocar HD da máquina da Flávia.', '2015-06-02 11:19:41', 51, 0, 0),
(3092, 1171, 'Foi trocado o HD da máquina da Flávia.', '2015-06-02 11:19:41', 51, 0, 0),
(3093, 1173, 'Em atendimento por flavio', '2015-06-02 11:21:12', 51, 0, 0),
(3094, 1173, 'Ponto de rede está com mau contato', '2015-06-02 11:22:28', 51, 0, 0),
(3095, 1173, 'Foi solucionado o problema de rede.', '2015-06-02 11:22:28', 51, 0, 0),
(3096, 1172, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Problema</b>: REDE --> SOFTWARE<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-06-02 11:23:33', 51, 0, 0),
(3097, 1172, 'Máquina da telefonia está perdendo a conexão com o Sistema Visual Asa.', '2015-06-02 11:24:18', 51, 0, 0),
(3098, 1172, 'A máquina foi reinstalada.', '2015-06-02 11:24:18', 51, 0, 0),
(3099, 1174, 'Em atendimento por flavio', '2015-06-02 11:26:32', 51, 0, 0),
(3100, 1174, 'Ocorrência encaminhada/alterada por flavio<br /><b>Status</b>: Em atendimento --> Aguardando retorno do usuário<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2015-06-02 11:48:56', 51, 0, 0),
(3101, 1178, 'Em atendimento por gregori', '2015-07-10 10:48:49', 41, 0, 0),
(3102, 1178, 'Montagem de uma nova máquina. Criação de uma rede de trabalho para compartilhamento de dados e impressoras. Configuração da nova máquina para ficar totalmente operacional para o profissional.', '2015-07-10 10:50:03', 41, 0, 0),
(3103, 1178, 'Montagem da máquina,criação de uma rede de trabalho,e compartilhamento de dados e impressora.', '2015-07-10 10:50:03', 41, 0, 0),
(3104, 1178, 'Ocorrência encaminhada/alterada por gregori\r\nCheguei no cliente as 13;30. Saí as 16;40<br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 00<br />', '2015-07-14 16:00:45', 41, 0, 0),
(3105, 1179, 'Em atendimento por gregori', '2015-08-06 14:01:07', 41, 0, 0),
(3106, 1179, 'Instalação do pacote Office.', '2015-08-06 14:02:51', 41, 0, 0),
(3107, 1179, 'Instalação do pacote Office por via acesso remoto. \r\n', '2015-08-06 14:02:51', 41, 0, 0),
(3108, 1180, 'Em atendimento por gregori', '2015-08-06 14:04:59', 41, 0, 0),
(3109, 1180, 'Em atendimento por gregori', '2015-08-06 14:05:00', 41, 0, 0),
(3110, 1180, '	Lentidão na máquina,vírus e programas maliciosos e indesejados.', '2015-08-06 14:09:41', 41, 0, 0),
(3111, 1180, 'Foi feita uma série de procedimentos para a limpeza da máquina,porém apesar de tudo foi feito uma restauração do sistema,pois havia programas que não puderam ser desinstalados completamente sem deixar alguma lesão na máquina.\r\nFeito a restauração,tivemos que partir para a instalação completa de programas e recursos para deixar a máquina novamente utilizável.\r\nOBS: Se o problema voltar a ocorrer,sugiro uma bloqueador de navegação para conteúdos pornográficos,redes sociais,jogos e blogs de aparência duvidosa. \r\n', '2015-08-06 14:09:41', 41, 0, 0),
(3112, 1182, 'Em atendimento por gregori', '2015-08-17 10:52:41', 41, 0, 0),
(3113, 1182, '	Instalação de uma placa de vídeo em uma máquina de uso pessoa da filha do Macedo.\r\n', '2015-08-17 10:57:24', 41, 0, 0),
(3114, 1182, 'Chegando no cliente na Quarta-feira (dia 12/08),descobri que a máquina possuía uma placa mãe com processador acoplado e não tinha nenhuma entrada PCI ou PCI Express,aconselhei o Macedo a comprar uma placa mãe nova,assim como novo processador e uma nova memória Ram,pois a antiga era de notbook.\r\nO chamado foi reagendado para uma sexta feira,onde eu montei a máquina e fiz as instalações tanto do Windows como de outros programas necessários para que a máquina se tornasse operacional.', '2015-08-17 10:57:24', 41, 0, 0),
(3115, 1183, 'Em atendimento por gregori', '2015-08-18 15:11:46', 41, 0, 0),
(3116, 1183, 'Montagem de uma nova máquina e formatação da máquina do Leonardo para instalação do windows seven.', '2015-08-18 15:23:28', 41, 0, 0),
(3117, 1183, 'Montei a máquina nova e configurei ela para deixa-la totalmente operacional para o Bira.\r\nIdentificação de problema técnico na placa de rede on-board da máquina nova,foi solicitado que ela fosse levada para  o atendimento autorizado.  \r\nInstalação do Windws Seven e os programas necessários para funcionamento profissional e operacional na máquina do Leonardo.\r\nCriação de uma rede de trabalho,compartilhamento de impressora e pastas  para um rendimento maior e uma rapidez dinâmica  no ambiente empresarial e maior agilidade na troca de informações e documentos.\r\n(no dia 17/08 cheguei no cliente as 14:00 horas,saí do mesmo as 17:00 horas e retornei as 09:15 do dia 18/08,me liberando e terminando o serviço solicitado as 12:05.)', '2015-08-18 15:23:28', 41, 0, 0),
(3118, 1186, '<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> user<br /><b>Unidade</b>:  --> <br /><b>Contato</b>: 2199999-9999 --> Rio Ocomon<br /><b>Ramal</b>:  --> 1<br />', '2016-11-07 16:22:15', 63, 0, 0),
(3119, 1186, '', '2016-11-07 16:24:11', 63, 0, 0),
(3120, 1186, 'Foi reinstalado o certificado.', '2016-11-07 16:24:11', 63, 0, 0),
(3121, 1188, '<br /><b>Status</b>: Aguardando atendimento --> Em atendimento<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> user<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2016-11-07 16:24:52', 63, 0, 0),
(3122, 1189, '<br /><b>Status</b>: Aguardando atendimento --> <br /><b>Prioridade</b>:  --> <br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2016-11-18 10:24:37', 63, 0, 0),
(3123, 1187, '<br /><b>Status</b>: Aguardando atendimento --> Em estudo<br /><b>Prioridade</b>:  --> <br /><b>Usuário</b>:  --> user<br /><b>Unidade</b>:  --> <br /><b>Ramal</b>:  --> 1<br />', '2016-11-18 10:27:28', 63, 0, 0),
(3124, 1188, '', '2016-11-18 10:29:57', 63, 0, 0),
(3125, 1188, '', '2016-11-18 10:29:57', 63, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `assistencia`
--

CREATE TABLE IF NOT EXISTS `assistencia` (
`assist_cod` int(4) NOT NULL,
  `assist_desc` varchar(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabela de tipos de assistencia para manutencao';

--
-- Extraindo dados da tabela `assistencia`
--

INSERT INTO `assistencia` (`assist_cod`, `assist_desc`) VALUES
(1, 'Contrato de ManutenÃ§Ã£o'),
(2, 'Garantia do Fabricante'),
(3, 'Sem Cobertura');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE IF NOT EXISTS `avisos` (
`aviso_id` int(11) NOT NULL,
  `avisos` text,
  `data` datetime DEFAULT NULL,
  `origem` int(4) NOT NULL DEFAULT '0',
  `status` varchar(100) DEFAULT NULL,
  `area` int(11) NOT NULL DEFAULT '0',
  `origembkp` varchar(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`cat_cod` int(4) NOT NULL,
  `cat_desc` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Tabela de categoria de softwares';

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_cod`, `cat_desc`) VALUES
(1, 'EscritÃ³rio'),
(2, 'Browser'),
(3, 'Editor'),
(4, 'Visualizador'),
(5, 'Jogos'),
(6, 'Sistema Operacional'),
(7, 'AntivÃ­rus'),
(8, 'E-mail'),
(9, 'Desenvolvimento'),
(10, 'UtilitÃ¡rios'),
(11, 'Compactador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaxproblema_sistemas`
--

CREATE TABLE IF NOT EXISTS `categoriaxproblema_sistemas` (
  `prob_id` int(11) NOT NULL DEFAULT '0',
  `ctps_id` int(11) NOT NULL DEFAULT '0',
  `ctps_id_old` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat_problema_sistemas`
--

CREATE TABLE IF NOT EXISTS `cat_problema_sistemas` (
  `ctps_id` int(10) NOT NULL DEFAULT '0',
  `ctps_descricao` varchar(100) NOT NULL DEFAULT '',
  `ctps_peso` decimal(10,2) NOT NULL DEFAULT '1.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ccusto`
--

CREATE TABLE IF NOT EXISTS `ccusto` (
`codigo` int(4) NOT NULL,
  `codccusto` varchar(6) NOT NULL DEFAULT '',
  `descricao` varchar(25) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabela de Centros de Custo';

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE IF NOT EXISTS `config` (
`conf_cod` int(4) NOT NULL,
  `conf_sql_user` varchar(20) NOT NULL DEFAULT 'ocomon',
  `conf_sql_passwd` varchar(50) DEFAULT NULL,
  `conf_sql_server` varchar(40) NOT NULL DEFAULT 'localhost',
  `conf_sql_db` varchar(40) NOT NULL DEFAULT 'ocomon',
  `conf_db_ccusto` varchar(40) NOT NULL DEFAULT 'ocomon',
  `conf_tb_ccusto` varchar(40) NOT NULL DEFAULT 'CCUSTO',
  `conf_ccusto_id` varchar(20) NOT NULL DEFAULT 'codigo',
  `conf_ccusto_desc` varchar(20) NOT NULL DEFAULT 'descricao',
  `conf_ccusto_cod` varchar(20) NOT NULL DEFAULT 'codccusto',
  `conf_ocomon_site` varchar(100) NOT NULL DEFAULT 'http://localhost/ocomon/',
  `conf_inst_terceira` int(4) NOT NULL DEFAULT '-1',
  `conf_log_path` varchar(50) NOT NULL DEFAULT '../../includes/logs/',
  `conf_logo_path` varchar(50) NOT NULL DEFAULT '../../includes/logos',
  `conf_icons_path` varchar(50) NOT NULL DEFAULT '../../includes/icons/',
  `conf_help_icon` varchar(50) NOT NULL DEFAULT '../../includes/icons/solucoes2.png',
  `conf_help_path` varchar(50) NOT NULL DEFAULT '../../includes/help/',
  `conf_language` varchar(15) NOT NULL DEFAULT 'pt_BR.php',
  `conf_auth_type` varchar(30) NOT NULL DEFAULT 'SYSTEM',
  `conf_upld_size` int(10) NOT NULL DEFAULT '307200',
  `conf_upld_width` int(5) NOT NULL DEFAULT '800',
  `conf_upld_height` int(5) NOT NULL DEFAULT '600',
  `conf_formatBar` varchar(40) DEFAULT '%%mural%',
  `conf_page_size` int(3) NOT NULL DEFAULT '50',
  `conf_prob_tipo_1` varchar(30) NOT NULL DEFAULT 'Categoria 1',
  `conf_prob_tipo_2` varchar(30) NOT NULL DEFAULT 'Categoria 2',
  `conf_prob_tipo_3` varchar(30) NOT NULL DEFAULT 'Categoria 3',
  `conf_allow_change_theme` int(1) NOT NULL DEFAULT '0',
  `conf_upld_file_types` varchar(30) NOT NULL DEFAULT '%%IMG%',
  `conf_date_format` varchar(20) NOT NULL DEFAULT '%d/%m/%Y %H:%M:%S',
  `conf_days_bf` int(3) NOT NULL DEFAULT '30',
  `conf_wrty_area` int(4) NOT NULL DEFAULT '1',
  `conf_allow_reopen` tinyint(1) NOT NULL DEFAULT '1',
  `conf_allow_date_edit` tinyint(1) NOT NULL DEFAULT '0',
  `conf_schedule_status` int(4) NOT NULL DEFAULT '1',
  `conf_schedule_status_2` int(4) NOT NULL DEFAULT '1',
  `conf_foward_when_open` int(4) NOT NULL DEFAULT '1',
  `conf_desc_sla_out` int(1) NOT NULL DEFAULT '0',
  `conf_qtd_max_anexos` int(2) NOT NULL DEFAULT '5'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabela de configuraÃ§Ãµes diversas do sistema';

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`conf_cod`, `conf_sql_user`, `conf_sql_passwd`, `conf_sql_server`, `conf_sql_db`, `conf_db_ccusto`, `conf_tb_ccusto`, `conf_ccusto_id`, `conf_ccusto_desc`, `conf_ccusto_cod`, `conf_ocomon_site`, `conf_inst_terceira`, `conf_log_path`, `conf_logo_path`, `conf_icons_path`, `conf_help_icon`, `conf_help_path`, `conf_language`, `conf_auth_type`, `conf_upld_size`, `conf_upld_width`, `conf_upld_height`, `conf_formatBar`, `conf_page_size`, `conf_prob_tipo_1`, `conf_prob_tipo_2`, `conf_prob_tipo_3`, `conf_allow_change_theme`, `conf_upld_file_types`, `conf_date_format`, `conf_days_bf`, `conf_wrty_area`, `conf_allow_reopen`, `conf_allow_date_edit`, `conf_schedule_status`, `conf_schedule_status_2`, `conf_foward_when_open`, `conf_desc_sla_out`, `conf_qtd_max_anexos`) VALUES
(1, 'ocomon', NULL, 'localhost', 'ocomon', 'ocomon', 'CCUSTO', 'codigo', 'descricao', 'codccusto', 'http://localhost/sistema', -1, '../../includes/logs/', '../../includes/logos', '../../includes/icons/', '../../includes/icons/solucoes2.png', '../../includes/help/', 'pt_BR.php', 'SYSTEM', 307200, 1024, 768, '%%mural%', 100, 'TIPO MANUTENï¿½ï¿½O', 'ORIGEM DO PROBLEMA', 'Nï¿½VEL DE ATENDIMENTO', 0, '%%IMG%TXT%PDF%MSO%HTML%', '%d/%m/%Y %H:%M:%S', 30, 3, 1, 1, 7, 7, 21, 0, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `configusercall`
--

CREATE TABLE IF NOT EXISTS `configusercall` (
`conf_cod` int(4) NOT NULL,
  `conf_name` varchar(50) DEFAULT 'Default',
  `conf_user_opencall` int(1) NOT NULL DEFAULT '0',
  `conf_custom_areas` varchar(200) NOT NULL,
  `conf_ownarea` int(4) NOT NULL DEFAULT '1',
  `conf_ownarea_2` varchar(200) DEFAULT NULL,
  `conf_opentoarea` int(4) NOT NULL DEFAULT '1',
  `conf_scr_area` int(1) NOT NULL DEFAULT '1',
  `conf_scr_prob` int(1) NOT NULL DEFAULT '1',
  `conf_scr_desc` int(1) NOT NULL DEFAULT '1',
  `conf_scr_unit` int(1) NOT NULL DEFAULT '1',
  `conf_scr_tag` int(1) NOT NULL DEFAULT '1',
  `conf_scr_chktag` int(1) NOT NULL DEFAULT '1',
  `conf_scr_chkhist` int(1) NOT NULL DEFAULT '1',
  `conf_scr_contact` int(1) NOT NULL DEFAULT '1',
  `conf_scr_fone` int(1) NOT NULL DEFAULT '1',
  `conf_scr_local` int(1) NOT NULL DEFAULT '1',
  `conf_scr_btloadlocal` int(1) NOT NULL DEFAULT '1',
  `conf_scr_searchbylocal` int(1) NOT NULL DEFAULT '1',
  `conf_scr_operator` int(1) NOT NULL DEFAULT '1',
  `conf_scr_date` int(1) NOT NULL DEFAULT '1',
  `conf_scr_status` int(1) NOT NULL DEFAULT '1',
  `conf_scr_replicate` int(1) NOT NULL DEFAULT '1',
  `conf_scr_mail` int(1) NOT NULL DEFAULT '1',
  `conf_scr_msg` text NOT NULL,
  `conf_scr_upload` int(1) NOT NULL DEFAULT '0',
  `conf_scr_schedule` tinyint(1) NOT NULL DEFAULT '0',
  `conf_scr_foward` tinyint(1) NOT NULL DEFAULT '0',
  `conf_scr_prior` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='tabela de configuraÃ§Ã£o para usuÃ¡rios de somente abertura ';

--
-- Extraindo dados da tabela `configusercall`
--

INSERT INTO `configusercall` (`conf_cod`, `conf_name`, `conf_user_opencall`, `conf_custom_areas`, `conf_ownarea`, `conf_ownarea_2`, `conf_opentoarea`, `conf_scr_area`, `conf_scr_prob`, `conf_scr_desc`, `conf_scr_unit`, `conf_scr_tag`, `conf_scr_chktag`, `conf_scr_chkhist`, `conf_scr_contact`, `conf_scr_fone`, `conf_scr_local`, `conf_scr_btloadlocal`, `conf_scr_searchbylocal`, `conf_scr_operator`, `conf_scr_date`, `conf_scr_status`, `conf_scr_replicate`, `conf_scr_mail`, `conf_scr_msg`, `conf_scr_upload`, `conf_scr_schedule`, `conf_scr_foward`, `conf_scr_prior`) VALUES
(1, 'Default', 1, '2', 4, '4, 5', 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 'Sua solicitação foi registrada no controle de chamado da Ocomon', 0, 0, 0, 1),
(2, 'Abertura de Chamado', 1, '', 1, '4, 5', 3, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 'Sua solicitação foi registrada no controle de chamado da Ocomon', 0, 1, 0, 0),
(4, 'Supervidor', 1, '', 1, '4, 5', 3, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 'Sua solicitação foi registrada no controle de chamado da Ocomon', 0, 1, 1, 1),
(5, 'Técnico', 1, '', 1, '4, 5', 3, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 1, 0, 'Sua solicitação foi registrada no controle de chamado da Ocomon', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
`contact_id` int(5) NOT NULL,
  `contact_login` varchar(15) NOT NULL,
  `contact_name` varchar(40) NOT NULL,
  `contact_email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de Contatos';

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos_email`
--

CREATE TABLE IF NOT EXISTS `contatos_email` (
`contact_id` int(6) NOT NULL,
  `contact_local` int(15) NOT NULL,
  `contact_email` varchar(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COMMENT='Tabela de Email';

--
-- Extraindo dados da tabela `contatos_email`
--

INSERT INTO `contatos_email` (`contact_id`, `contact_local`, `contact_email`) VALUES
(18, 22, 'teste@ocomon.com.br'),
(16, 22, 'teste@ocomon.com.br'),
(19, 63, 'flavio@rtertert.ert'),
(20, 63, 'atendimento@ghfhfgdfg.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos_tel`
--

CREATE TABLE IF NOT EXISTS `contatos_tel` (
`contact_id` int(6) NOT NULL,
  `contact_local` int(15) NOT NULL,
  `contact_tel` varchar(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1 COMMENT='Tabela de Tel';

--
-- Extraindo dados da tabela `contatos_tel`
--

INSERT INTO `contatos_tel` (`contact_id`, `contact_local`, `contact_tel`) VALUES
(59, 22, '27172956'),
(60, 54, '26056270'),
(61, 55, '26146833'),
(62, 13, '2716-5533'),
(33, 9, '25898624'),
(34, 55, 'Bairro Antonina-(21)3583-3372'),
(38, 15, '34781999'),
(36, 5, '31478787'),
(37, 5, '31478785'),
(39, 15, '34781964'),
(40, 3, '38169933'),
(41, 9, '25805876'),
(42, 9, '25898173'),
(43, 19, '25607496'),
(44, 7, '22629565'),
(45, 7, '25337332'),
(46, 42, '27127633'),
(47, 42, '27126222'),
(48, 58, '32123800'),
(49, 59, '25247758'),
(50, 59, '25247859'),
(51, 37, '36339988'),
(52, 37, '27195400'),
(53, 18, '22204651'),
(54, 18, '999453275'),
(55, 43, '24319096'),
(56, 45, '25971562'),
(57, 38, '25050100'),
(58, 53, '25773505'),
(63, 14, '2711-7730'),
(64, 2, '2235-2996'),
(65, 31, '2561-1126'),
(66, 31, '2485-4752'),
(67, 60, '2263-5619'),
(68, 60, '2263-7280'),
(69, 63, '2222-2222'),
(70, 63, '3333-3333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ddns`
--

CREATE TABLE IF NOT EXISTS `ddns` (
  `id` int(11) NOT NULL,
  `ip_externo` varchar(25) NOT NULL,
  `user_ip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ddns`
--

INSERT INTO `ddns` (`id`, `ip_externo`, `user_ip`) VALUES
(0, '186.242.230.62', '51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doc_time`
--

CREATE TABLE IF NOT EXISTS `doc_time` (
`doc_id` int(6) NOT NULL,
  `doc_oco` int(6) NOT NULL,
  `doc_open` int(10) NOT NULL DEFAULT '0',
  `doc_edit` int(10) NOT NULL DEFAULT '0',
  `doc_close` int(10) NOT NULL DEFAULT '0',
  `doc_user` int(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1505 DEFAULT CHARSET=latin1 COMMENT='Tabela para armazenar o tempo de documentacao de cada chamad';

--
-- Extraindo dados da tabela `doc_time`
--

INSERT INTO `doc_time` (`doc_id`, `doc_oco`, `doc_open`, `doc_edit`, `doc_close`, `doc_user`) VALUES
(1, 1, 66, 0, 0, 6),
(2, 2, 30, 0, 0, 15),
(3, 3, 83, 0, 0, 5),
(4, 3, 0, 28, 0, 22),
(5, 1, 0, 56, 0, 22),
(6, 4, 105, 0, 0, 5),
(7, 5, 114, 0, 0, 5),
(8, 5, 0, 90, 0, 22),
(9, 2, 0, 53, 199, 22),
(10, 2, 0, 26, 0, 3),
(11, 6, 47, 0, 0, 1),
(12, 7, 53, 0, 0, 1),
(13, 8, 40, 0, 0, 1),
(14, 9, 130, 0, 0, 1),
(15, 10, 135, 0, 0, 1),
(16, 11, 392, 0, 0, 22),
(17, 12, 82, 0, 0, 1),
(18, 13, 460, 0, 0, 22),
(19, 14, 30, 9, 227, 3),
(20, 13, 0, 13, 130, 2),
(21, 15, 135, 0, 0, 22),
(22, 16, 130, 0, 0, 22),
(23, 17, 212, 0, 0, 22),
(24, 18, 69, 0, 0, 1),
(25, 18, 0, 0, 114, 4),
(26, 19, 134, 38, 347, 22),
(27, 20, 469, 0, 0, 22),
(28, 21, 84, 6, 208, 22),
(29, 20, 0, 38, 77, 2),
(30, 22, 42, 0, 57, 2),
(31, 23, 71, 0, 60, 2),
(32, 22, 0, 54, 0, 1),
(33, 24, 41, 0, 92, 2),
(34, 25, 44, 0, 122, 2),
(35, 26, 163, 0, 112, 2),
(36, 27, 78, 0, 0, 2),
(37, 27, 0, 0, 31, 1),
(38, 28, 36, 0, 214, 2),
(39, 29, 42, 0, 206, 2),
(40, 30, 84, 0, 0, 22),
(41, 31, 46, 27, 88, 22),
(42, 32, 155, 0, 0, 6),
(43, 33, 54, 0, 0, 6),
(44, 34, 27, 0, 45, 2),
(45, 15, 0, 0, 58, 4),
(46, 17, 0, 0, 75, 4),
(47, 35, 75, 65, 0, 1),
(48, 35, 0, 59, 3, 2),
(49, 36, 235, 3, 241, 1),
(50, 37, 111, 44, 0, 1),
(51, 38, 80, 26, 88, 2),
(52, 39, 42, 32, 95, 2),
(53, 30, 0, 41, 280, 1),
(54, 33, 0, 0, 59, 22),
(55, 40, 129, 0, 0, 22),
(56, 41, 207, 0, 0, 22),
(57, 42, 117, 0, 0, 22),
(58, 43, 137, 0, 0, 22),
(59, 40, 0, 29, 0, 1),
(60, 44, 66, 0, 110, 2),
(61, 45, 34, 50, 53, 2),
(62, 46, 37, 26, 99, 2),
(63, 47, 34, 0, 55, 2),
(64, 48, 260, 0, 0, 1),
(65, 49, 31, 0, 0, 2),
(66, 50, 44, 0, 36, 2),
(67, 51, 47, 0, 163, 2),
(68, 37, 0, 65, 153, 4),
(69, 52, 98, 150, 3, 4),
(70, 53, 125, 0, 0, 22),
(71, 54, 150, 0, 0, 22),
(72, 55, 42, 0, 82, 2),
(73, 56, 37, 68, 57, 2),
(74, 57, 64, 0, 69, 2),
(75, 58, 87, 0, 43, 2),
(76, 59, 67, 38, 49, 2),
(77, 60, 40, 0, 107, 2),
(78, 61, 32, 0, 0, 2),
(79, 62, 8, 0, 0, 2),
(80, 63, 33, 0, 49, 2),
(81, 64, 139, 26, 46, 2),
(82, 65, 39, 10, 60, 2),
(83, 66, 112, 0, 45, 2),
(84, 67, 65, 90, 91, 4),
(85, 53, 0, 0, 80, 4),
(86, 68, 49, 69, 48, 4),
(87, 69, 37, 0, 0, 1),
(88, 16, 0, 5, 195, 3),
(89, 40, 0, 2, 415, 3),
(90, 48, 0, 2, 105, 3),
(91, 42, 0, 3, 83, 3),
(92, 41, 0, 2, 66, 3),
(93, 54, 0, 2, 50, 3),
(94, 32, 0, 0, 89, 3),
(95, 70, 116, 50, 210, 3),
(96, 71, 113, 2, 161, 3),
(97, 72, 84, 171, 4, 3),
(98, 73, 71, 9, 275, 3),
(99, 74, 53, 11, 97, 3),
(100, 75, 144, 3, 94, 3),
(101, 76, 42, 0, 106, 2),
(102, 77, 50, 0, 83, 2),
(103, 78, 42, 0, 98, 2),
(104, 79, 65, 0, 54, 2),
(105, 80, 45, 0, 82, 2),
(106, 81, 141, 4, 1009, 22),
(107, 82, 80, 4, 92, 22),
(108, 68, 0, 38, 0, 22),
(109, 83, 139, 2, 34, 3),
(110, 84, 51, 3, 225, 3),
(111, 85, 176, 3, 156, 3),
(112, 86, 231, 1, 129, 3),
(113, 87, 1012, 50, 0, 4),
(114, 88, 36, 36, 48, 2),
(115, 89, 24, 23, 46, 2),
(116, 90, 217, 0, 94, 22),
(117, 91, 48, 0, 47, 2),
(118, 92, 36, 0, 42, 2),
(119, 93, 98, 0, 196, 22),
(120, 94, 103, 0, 0, 1),
(121, 95, 72, 0, 240, 2),
(122, 96, 54, 0, 64, 2),
(123, 97, 47, 0, 41, 2),
(124, 98, 177, 2, 142, 3),
(125, 99, 129, 0, 254, 22),
(126, 100, 51, 4, 83, 3),
(127, 101, 44, 0, 57, 2),
(128, 102, 38, 0, 49, 2),
(129, 103, 25, 0, 33, 2),
(130, 104, 21, 0, 42, 2),
(131, 105, 24, 0, 31, 2),
(132, 106, 131, 56, 154, 22),
(133, 107, 204, 0, 0, 22),
(134, 108, 56, 281, 183, 22),
(135, 109, 157, 4, 607, 3),
(136, 110, 88, 9, 80, 3),
(137, 111, 44, 0, 53, 2),
(138, 112, 53, 0, 8, 2),
(139, 113, 32, 0, 0, 2),
(140, 114, 35, 0, 57, 2),
(141, 115, 51, 50, 112, 22),
(142, 116, 90, 23, 177, 22),
(143, 117, 61, 0, 37, 2),
(144, 118, 29, 0, 47, 2),
(145, 119, 29, 0, 46, 2),
(146, 120, 41, 0, 61, 2),
(147, 121, 31, 0, 20, 2),
(148, 122, 58, 0, 28, 2),
(149, 123, 28, 0, 38, 2),
(150, 124, 35, 0, 26, 2),
(151, 125, 50, 32, 483, 22),
(152, 126, 49, 0, 46, 2),
(153, 127, 42, 0, 70, 2),
(154, 128, 86, 0, 268, 22),
(155, 129, 84, 0, 76, 22),
(156, 130, 78, 0, 110, 22),
(157, 131, 200, 2, 121, 22),
(158, 132, 199, 2, 98, 22),
(159, 133, 145, 12, 694, 22),
(160, 134, 60, 0, 57, 2),
(161, 135, 23, 0, 16, 2),
(162, 136, 50, 0, 96, 2),
(163, 137, 83, 0, 41, 2),
(164, 138, 204, 1075, 175, 22),
(165, 139, 46, 0, 34, 2),
(166, 140, 41, 0, 68, 2),
(167, 141, 29, 0, 61, 2),
(168, 142, 111, 0, 15, 2),
(169, 94, 0, 2, 81, 3),
(170, 143, 50, 4, 73, 3),
(171, 144, 57, 4, 91, 3),
(172, 145, 114, 6, 211, 3),
(173, 146, 65, 3, 56, 3),
(174, 147, 43, 3, 107, 3),
(175, 148, 42, 2, 71, 3),
(176, 149, 104, 3, 82, 3),
(177, 150, 29, 0, 30, 2),
(178, 151, 39, 0, 18, 2),
(179, 152, 22, 0, 22, 2),
(180, 153, 141, 42, 184, 22),
(181, 154, 37, 0, 69, 2),
(182, 155, 43, 2, 358, 3),
(183, 156, 95, 2, 26, 3),
(184, 157, 85, 2, 59, 3),
(185, 158, 128, 2, 23, 3),
(186, 159, 228, 0, 38, 22),
(187, 160, 108, 0, 126, 22),
(188, 161, 304, 0, 0, 22),
(189, 159, 0, 80, 54, 4),
(190, 162, 74, 0, 26, 2),
(191, 163, 88, 0, 33, 2),
(192, 164, 57, 0, 65, 2),
(193, 161, 0, 0, 21, 2),
(194, 165, 81, 60, 45, 2),
(195, 166, 39, 0, 0, 4),
(196, 167, 16, 0, 0, 4),
(197, 168, 6, 0, 0, 4),
(198, 169, 9, 0, 0, 4),
(199, 170, 17, 0, 0, 4),
(200, 171, 14, 0, 0, 4),
(201, 172, 31, 0, 61, 4),
(202, 173, 30, 0, 15, 4),
(203, 174, 30, 0, 18, 2),
(204, 175, 66, 2, 180, 3),
(205, 176, 39, 2, 190, 3),
(206, 177, 146, 0, 0, 4),
(207, 178, 48, 0, 32, 4),
(208, 179, 85, 36, 60, 4),
(209, 180, 31, 0, 18, 4),
(210, 181, 23, 0, 20, 4),
(211, 182, 67, 3, 105, 3),
(212, 183, 55, 3, 46, 3),
(213, 184, 64, 2, 63, 3),
(214, 185, 107, 2, 336, 3),
(215, 186, 55, 5, 57, 3),
(216, 187, 62, 0, 33, 2),
(217, 177, 0, 6, 74, 22),
(218, 188, 36, 0, 77, 22),
(219, 189, 37, 0, 47, 22),
(220, 190, 31, 0, 65, 22),
(221, 191, 102, 0, 174, 22),
(222, 192, 52, 0, 64, 4),
(223, 193, 69, 0, 146, 4),
(224, 194, 56, 0, 66, 4),
(225, 195, 30, 0, 105, 2),
(226, 196, 34, 0, 131, 2),
(227, 193, 0, 86, 0, 2),
(228, 197, 34, 0, 348, 2),
(229, 198, 1830, 0, 0, 6),
(230, 199, 486, 0, 0, 6),
(231, 200, 288, 0, 0, 6),
(232, 201, 147, 0, 0, 6),
(233, 87, 0, 0, 106, 22),
(234, 194, 0, 184, 0, 22),
(235, 201, 0, 0, 99, 2),
(236, 198, 0, 147, 102, 22),
(237, 199, 0, 77, 247, 22),
(238, 200, 0, 60, 165, 22),
(239, 202, 69, 0, 659, 22),
(240, 203, 82, 0, 0, 18),
(241, 204, 92, 0, 177, 22),
(242, 205, 54, 0, 69, 22),
(243, 206, 124, 0, 107, 22),
(244, 207, 89, 0, 77, 22),
(245, 203, 0, 0, 44, 22),
(246, 208, 70, 14, 50, 3),
(247, 209, 47, 1, 23, 3),
(248, 210, 44, 2, 82, 3),
(249, 211, 33, 2, 45, 3),
(250, 212, 168, 0, 0, 6),
(251, 213, 77, 0, 159, 4),
(252, 214, 38, 0, 87, 2),
(253, 215, 40, 0, 40, 2),
(254, 216, 81, 2, 65, 3),
(255, 217, 47, 2, 41, 3),
(256, 218, 54, 2, 111, 3),
(257, 219, 48, 506, 92, 3),
(258, 220, 79, 0, 42, 2),
(259, 221, 19, 0, 45, 2),
(260, 222, 39, 0, 33, 2),
(261, 223, 44, 0, 152, 2),
(262, 224, 45, 0, 105, 2),
(263, 225, 43, 0, 25, 2),
(264, 226, 164, 0, 0, 22),
(265, 226, 0, 0, 120, 4),
(266, 227, 59, 0, 41, 4),
(267, 228, 41, 5, 154, 3),
(268, 229, 90, 6, 499, 3),
(269, 230, 76, 0, 124, 3),
(270, 231, 50, 0, 52, 3),
(271, 232, 38, 0, 49, 3),
(272, 233, 60, 0, 34, 3),
(273, 234, 131, 0, 0, 6),
(274, 235, 83, 0, 0, 6),
(275, 236, 58, 12, 33, 4),
(276, 237, 36, 70, 64, 4),
(277, 238, 35, 27, 0, 4),
(278, 239, 106, 24, 0, 4),
(279, 240, 58, 0, 78, 4),
(280, 241, 41, 0, 0, 4),
(281, 234, 0, 0, 27, 2),
(282, 235, 0, 0, 50, 2),
(283, 242, 47, 0, 83, 2),
(284, 243, 40, 0, 90, 2),
(285, 244, 30, 0, 0, 2),
(286, 245, 21, 0, 0, 2),
(287, 246, 13, 0, 270, 2),
(288, 247, 91, 0, 99, 2),
(289, 248, 38, 0, 49, 2),
(290, 249, 30, 0, 51, 2),
(291, 250, 42, 0, 0, 4),
(292, 251, 29, 78, 50, 4),
(293, 252, 38, 0, 21, 2),
(294, 250, 0, 3, 93, 3),
(295, 253, 134, 0, 75, 22),
(296, 254, 43, 5, 105, 3),
(297, 255, 71, 0, 0, 22),
(298, 256, 114, 5, 46, 3),
(299, 257, 75, 0, 50, 3),
(300, 258, 53, 5, 21, 3),
(301, 259, 81, 0, 32, 3),
(302, 260, 42, 4, 16, 3),
(303, 261, 57, 0, 24, 3),
(304, 262, 44, 4, 110, 3),
(305, 263, 165, 118, 150, 22),
(306, 264, 60, 7, 98, 3),
(307, 265, 112, 0, 51, 22),
(308, 266, 85, 0, 47, 22),
(309, 267, 50, 0, 78, 3),
(310, 268, 179, 0, 42, 3),
(311, 255, 0, 0, 59, 4),
(312, 257, 0, 92, 0, 4),
(313, 269, 163, 0, 0, 5),
(314, 269, 0, 70, 134, 22),
(315, 270, 260, 0, 0, 6),
(316, 271, 22, 0, 65, 2),
(317, 272, 141, 0, 201, 22),
(318, 273, 74, 0, 165, 22),
(319, 274, 115, 0, 70, 22),
(320, 275, 151, 20, 210, 22),
(321, 276, 118, 0, 0, 4),
(322, 277, 66, 0, 0, 22),
(323, 278, 154, 62, 135, 22),
(324, 279, 40, 0, 73, 22),
(325, 280, 25, 0, 0, 22),
(326, 281, 23, 0, 0, 22),
(327, 282, 73, 0, 41, 2),
(328, 283, 53, 0, 38, 2),
(329, 284, 107, 0, 81, 22),
(330, 285, 127, 0, 0, 22),
(331, 286, 215, 0, 0, 22),
(332, 276, 0, 6, 117, 22),
(333, 241, 0, 0, 200, 22),
(334, 239, 0, 0, 257, 22),
(335, 287, 104, 2, 77, 22),
(336, 288, 79, 0, 135, 22),
(337, 289, 166, 0, 0, 22),
(338, 290, 44, 3, 200, 22),
(339, 291, 128, 0, 0, 25),
(340, 292, 125, 0, 0, 5),
(341, 293, 95, 0, 0, 6),
(342, 292, 0, 81, 437, 22),
(343, 238, 0, 0, 83, 22),
(344, 212, 0, 0, 52, 22),
(345, 294, 37, 0, 0, 5),
(346, 295, 23, 0, 0, 25),
(347, 294, 0, 0, 83, 22),
(348, 295, 0, 0, 65, 22),
(349, 296, 286, 0, 0, 22),
(350, 291, 0, 7, 164, 22),
(351, 286, 0, 0, 70, 2),
(352, 296, 0, 0, 58, 2),
(353, 297, 20, 0, 234, 2),
(354, 298, 53, 40, 12, 4),
(355, 293, 0, 0, 315, 22),
(356, 299, 53, 57, 0, 4),
(357, 300, 71, 0, 112, 4),
(358, 301, 150, 2, 191, 22),
(359, 302, 89, 0, 119, 22),
(360, 303, 115, 0, 84, 22),
(361, 304, 64, 0, 43, 22),
(362, 305, 81, 0, 0, 22),
(363, 306, 93, 0, 0, 22),
(364, 307, 62, 0, 115, 22),
(365, 308, 72, 0, 83, 22),
(366, 309, 72, 20, 102, 22),
(367, 310, 73, 0, 0, 21),
(368, 311, 31, 0, 86, 2),
(369, 312, 13, 0, 114, 2),
(370, 306, 0, 0, 28, 2),
(371, 313, 52, 0, 56, 2),
(372, 310, 0, 0, 99, 22),
(373, 285, 0, 0, 34, 3),
(374, 314, 59, 4, 12, 3),
(375, 315, 32, 5, 29, 3),
(376, 316, 21, 31, 15, 3),
(377, 305, 0, 0, 36, 4),
(378, 277, 0, 0, 14, 4),
(379, 317, 38, 125, 26, 4),
(380, 299, 0, 5, 65, 22),
(381, 270, 0, 0, 97, 22),
(382, 166, 0, 0, 99, 22),
(383, 167, 0, 0, 180, 22),
(384, 169, 0, 0, 81, 22),
(385, 168, 0, 0, 42, 22),
(386, 170, 0, 0, 54, 22),
(387, 171, 0, 0, 86, 22),
(388, 318, 227, 0, 162, 22),
(389, 319, 66, 7, 119, 22),
(390, 320, 51, 0, 31, 2),
(391, 321, 24, 0, 35, 2),
(392, 322, 24, 0, 23, 2),
(393, 323, 27, 0, 76, 2),
(394, 324, 30, 0, 20, 2),
(395, 325, 62, 0, 61, 3),
(396, 326, 50, 3, 43, 3),
(397, 327, 74, 0, 15, 3),
(398, 328, 216, 42, 136, 22),
(399, 329, 294, 11, 54, 22),
(400, 330, 244, 13, 40, 22),
(401, 331, 85, 0, 0, 22),
(402, 332, 173, 31, 0, 22),
(403, 333, 265, 0, 134, 22),
(404, 334, 84, 0, 146, 22),
(405, 335, 277, 0, 0, 22),
(406, 336, 29, 0, 32, 2),
(407, 337, 35, 0, 33, 2),
(408, 338, 24, 0, 20, 2),
(409, 339, 36, 0, 34, 2),
(410, 340, 53, 0, 28, 2),
(411, 331, 0, 0, 26, 4),
(412, 341, 35, 0, 30, 2),
(413, 342, 24, 0, 38, 2),
(414, 343, 24, 0, 18, 2),
(415, 344, 23, 0, 19, 2),
(416, 345, 75, 0, 57, 3),
(417, 346, 47, 0, 40, 3),
(418, 347, 51, 0, 46, 3),
(419, 335, 0, 0, 46, 3),
(420, 348, 48, 0, 52, 3),
(421, 349, 45, 0, 23, 2),
(422, 350, 43, 0, 14, 2),
(423, 351, 33, 0, 14, 2),
(424, 352, 30, 0, 19, 2),
(425, 353, 23, 0, 13, 2),
(426, 354, 25, 0, 14, 2),
(427, 355, 19, 0, 14, 2),
(428, 356, 21, 0, 26, 2),
(429, 357, 85, 0, 21, 2),
(430, 358, 22, 0, 13, 2),
(431, 359, 145, 0, 0, 22),
(432, 360, 53, 0, 66, 22),
(433, 361, 111, 68, 264, 22),
(434, 362, 100, 0, 61, 22),
(435, 363, 102, 0, 473, 22),
(436, 364, 151, 0, 105, 22),
(437, 365, 76, 0, 67, 22),
(438, 366, 86, 0, 0, 22),
(439, 367, 54, 0, 0, 22),
(440, 368, 29, 0, 13, 2),
(441, 369, 29, 0, 14, 2),
(442, 370, 21, 0, 55, 2),
(443, 371, 22, 0, 17, 2),
(444, 372, 26, 0, 15, 2),
(445, 373, 35, 0, 9, 2),
(446, 374, 98, 0, 16, 2),
(447, 375, 31, 0, 14, 2),
(448, 376, 22, 0, 66, 2),
(449, 377, 20, 0, 9, 2),
(450, 378, 30, 0, 8, 2),
(451, 379, 18, 0, 12, 2),
(452, 380, 21, 0, 9, 2),
(453, 381, 24, 0, 10, 2),
(454, 382, 21, 0, 9, 2),
(455, 383, 145, 404, 22, 3),
(456, 289, 0, 0, 38, 2),
(457, 384, 81, 0, 30, 2),
(458, 385, 42, 0, 45, 2),
(459, 386, 76, 0, 74, 22),
(460, 387, 52, 3, 176, 22),
(461, 388, 92, 3, 160, 22),
(462, 389, 380, 20, 79, 22),
(463, 390, 256, 23, 238, 22),
(464, 366, 0, 0, 28, 4),
(465, 359, 0, 0, 22, 4),
(466, 367, 0, 0, 50, 4),
(467, 391, 79, 5, 273, 22),
(468, 392, 71, 13, 154, 22),
(469, 393, 1113, 0, 0, 22),
(470, 394, 139, 2, 388, 22),
(471, 395, 533, 2, 44, 22),
(472, 396, 118, 0, 0, 22),
(473, 397, 71, 6, 106, 22),
(474, 398, 174, 3, 248, 22),
(475, 399, 69, 387, 0, 22),
(476, 400, 42, 2, 96, 22),
(477, 401, 156, 0, 114, 22),
(478, 402, 117, 6, 309, 22),
(479, 403, 132, 136, 124, 22),
(480, 404, 188, 3, 48, 22),
(481, 405, 108, 0, 42, 2),
(482, 406, 36, 0, 36, 2),
(483, 407, 40, 0, 24, 2),
(484, 408, 200, 6, 54, 22),
(485, 409, 37, 0, 55, 2),
(486, 396, 0, 0, 108, 3),
(487, 393, 0, 2, 13, 3),
(488, 410, 84, 0, 0, 22),
(489, 411, 131, 45, 75, 22),
(490, 399, 0, 4, 18, 3),
(491, 412, 49, 3, 55, 3),
(492, 413, 337, 50, 42, 4),
(493, 414, 294, 12, 7, 4),
(494, 415, 105, 10, 8, 4),
(495, 416, 70, 38, 8, 4),
(496, 417, 167, 48, 32, 4),
(497, 418, 44, 0, 41, 4),
(498, 419, 60, 0, 36, 2),
(499, 420, 34, 0, 78, 2),
(500, 421, 267, 4, 99, 22),
(501, 422, 103, 3, 80, 22),
(502, 423, 132, 8, 115, 22),
(503, 424, 79, 0, 0, 22),
(504, 425, 197, 5, 15, 4),
(505, 426, 95, 5, 8, 4),
(506, 427, 321, 7, 8, 4),
(507, 428, 142, 0, 25, 4),
(508, 410, 0, 0, 39, 4),
(509, 429, 93, 0, 0, 6),
(510, 430, 234, 0, 0, 6),
(511, 429, 0, 4, 67, 3),
(512, 431, 95, 0, 0, 5),
(513, 431, 0, 4, 43, 22),
(514, 432, 37, 0, 0, 3),
(515, 433, 35, 0, 169, 3),
(516, 424, 0, 4, 51, 3),
(517, 434, 66, 3, 208, 3),
(518, 435, 75, 0, 87, 4),
(519, 432, 0, 279, 36, 4),
(520, 430, 0, 0, 84, 3),
(521, 436, 60, 4, 108, 3),
(522, 437, 64, 6, 49, 3),
(523, 438, 81, 0, 11, 3),
(524, 439, 90, 2, 113, 3),
(525, 440, 138, 0, 0, 6),
(526, 440, 0, 10, 47, 3),
(527, 441, 38, 3, 47, 3),
(528, 442, 114, 0, 0, 4),
(529, 443, 83, 0, 15, 3),
(530, 444, 528, 0, 0, 6),
(531, 445, 60, 0, 0, 6),
(532, 446, 74, 0, 0, 6),
(533, 447, 82, 0, 0, 6),
(534, 448, 160, 0, 111, 22),
(535, 449, 403, 0, 0, 6),
(536, 450, 122, 0, 0, 6),
(537, 450, 0, 0, 32, 3),
(538, 449, 0, 0, 31, 3),
(539, 447, 0, 0, 37, 3),
(540, 446, 0, 0, 20, 3),
(541, 445, 0, 0, 30, 3),
(542, 444, 0, 0, 32, 3),
(543, 451, 49, 17, 18, 3),
(544, 452, 49, 0, 24, 3),
(545, 453, 60, 33, 8, 3),
(546, 454, 66, 65, 84, 3),
(547, 455, 91, 0, 14, 3),
(548, 456, 70, 0, 18, 3),
(549, 457, 37, 0, 74, 3),
(550, 458, 120, 7, 34, 3),
(551, 459, 72, 12, 20, 3),
(552, 460, 36, 0, 38, 3),
(553, 461, 176, 0, 0, 6),
(554, 462, 114, 0, 0, 6),
(555, 463, 46, 70, 107, 3),
(556, 464, 103, 313, 22, 3),
(557, 465, 72, 3, 34, 3),
(558, 466, 44, 3, 22, 3),
(559, 467, 45, 32, 67, 3),
(560, 468, 107, 0, 77, 22),
(561, 469, 110, 0, 0, 22),
(562, 470, 148, 0, 0, 22),
(563, 471, 98, 0, 108, 22),
(564, 472, 110, 0, 0, 22),
(565, 473, 88, 0, 0, 6),
(566, 474, 58, 3, 31, 3),
(567, 475, 67, 4, 70, 3),
(568, 473, 0, 3, 14, 3),
(569, 476, 43, 2, 33, 3),
(570, 477, 44, 0, 29, 3),
(571, 478, 117, 20, 21, 3),
(572, 479, 42, 3, 24, 3),
(573, 480, 49, 5, 19, 3),
(574, 481, 48, 4, 10, 3),
(575, 482, 43, 4, 80, 3),
(576, 483, 79, 0, 128, 22),
(577, 484, 136, 0, 50, 22),
(578, 485, 52, 0, 53, 22),
(579, 486, 101, 0, 39, 22),
(580, 487, 99, 0, 0, 22),
(581, 488, 394, 0, 0, 6),
(582, 489, 371, 0, 0, 22),
(583, 490, 169, 0, 46, 22),
(584, 491, 127, 0, 0, 6),
(585, 492, 101, 0, 0, 6),
(586, 493, 35, 78, 0, 4),
(587, 494, 62, 28, 0, 4),
(588, 470, 0, 0, 29, 4),
(589, 487, 0, 0, 24, 4),
(590, 495, 93, 0, 0, 6),
(591, 461, 0, 3, 9, 3),
(592, 462, 0, 4, 11, 3),
(593, 489, 0, 4, 15, 3),
(594, 491, 0, 17, 25, 3),
(595, 496, 73, 2, 30, 3),
(596, 497, 62, 3, 30, 3),
(597, 498, 218, 4, 121, 3),
(598, 495, 0, 196, 55, 3),
(599, 488, 0, 3, 27, 3),
(600, 499, 120, 22, 26, 3),
(601, 500, 102, 9, 117, 3),
(602, 492, 0, 5, 18, 3),
(603, 501, 135, 0, 0, 6),
(604, 442, 0, 16, 138, 22),
(605, 494, 0, 0, 82, 22),
(606, 493, 0, 41, 220, 22),
(607, 502, 255, 0, 0, 22),
(608, 503, 119, 0, 0, 22),
(609, 504, 79, 0, 0, 22),
(610, 505, 147, 0, 0, 22),
(611, 506, 94, 0, 0, 22),
(612, 501, 0, 180, 0, 22),
(613, 502, 0, 2, 14, 3),
(614, 505, 0, 0, 32, 4),
(615, 503, 0, 0, 24, 4),
(616, 507, 643, 0, 556, 22),
(617, 508, 216, 5, 61, 22),
(618, 472, 0, 4, 26, 3),
(619, 501, 0, 2, 19, 3),
(620, 509, 79, 58, 0, 4),
(621, 510, 114, 3, 116, 22),
(622, 511, 595, 0, 0, 22),
(623, 512, 117, 0, 0, 6),
(624, 513, 84, 0, 0, 6),
(625, 513, 0, 4, 206, 3),
(626, 512, 0, 0, 29, 3),
(627, 511, 0, 2398, 8, 3),
(628, 514, 123, 0, 0, 6),
(629, 514, 0, 79, 41, 3),
(630, 515, 144, 0, 0, 22),
(631, 516, 81, 0, 0, 22),
(632, 517, 59, 28, 45, 22),
(633, 518, 89, 6, 72, 22),
(634, 519, 170, 5, 119, 22),
(635, 520, 68, 0, 0, 22),
(636, 521, 51, 0, 0, 22),
(637, 522, 283, 3, 54, 22),
(638, 523, 115, 0, 0, 22),
(639, 524, 100, 13, 96, 22),
(640, 525, 95, 3, 62, 22),
(641, 526, 2719, 0, 0, 22),
(642, 516, 0, 0, 53, 4),
(643, 527, 216, 32, 50, 4),
(644, 523, 0, 157, 91, 4),
(645, 520, 0, 0, 17, 4),
(646, 515, 0, 14, 20, 4),
(647, 528, 64, 0, 0, 6),
(648, 529, 40, 0, 0, 6),
(649, 530, 198, 10, 76, 22),
(650, 531, 139, 0, 0, 6),
(651, 532, 137, 0, 0, 6),
(652, 533, 247, 0, 0, 6),
(653, 534, 128, 0, 0, 22),
(654, 535, 65, 9, 134, 22),
(655, 536, 58, 0, 51, 22),
(656, 537, 36, 0, 18, 4),
(657, 538, 54, 0, 123, 4),
(658, 531, 0, 2, 52, 3),
(659, 533, 0, 4, 22, 3),
(660, 528, 0, 3, 18, 3),
(661, 532, 0, 4, 18, 3),
(662, 539, 65, 0, 0, 22),
(663, 540, 227, 0, 0, 22),
(664, 541, 164, 0, 0, 22),
(665, 542, 94, 3, 58, 22),
(666, 543, 75, 25, 53, 22),
(667, 544, 231, 0, 0, 22),
(668, 545, 147, 9, 95, 22),
(669, 546, 113, 0, 0, 22),
(670, 547, 277, 13, 90, 22),
(671, 548, 53, 0, 0, 22),
(672, 549, 92, 0, 0, 22),
(673, 549, 0, 0, 53, 4),
(674, 550, 47, 60, 22, 4),
(675, 540, 0, 0, 47, 4),
(676, 504, 0, 0, 39, 4),
(677, 551, 61, 0, 0, 6),
(678, 552, 53, 0, 0, 6),
(679, 553, 93, 0, 0, 22),
(680, 554, 102, 0, 0, 22),
(681, 555, 113, 4, 61, 22),
(682, 556, 217, 39, 64, 22),
(683, 557, 210, 4, 130, 22),
(684, 558, 193, 0, 0, 22),
(685, 559, 47, 0, 33, 22),
(686, 560, 60, 8, 116, 22),
(687, 561, 109, 6, 375, 22),
(688, 562, 164, 0, 0, 22),
(689, 548, 0, 0, 46, 4),
(690, 563, 47, 0, 32, 4),
(691, 564, 45, 54, 7, 4),
(692, 565, 60, 0, 0, 22),
(693, 558, 0, 0, 27, 4),
(694, 566, 43, 0, 30, 4),
(695, 567, 70, 0, 0, 2),
(696, 469, 0, 0, 19, 2),
(697, 506, 0, 0, 31, 2),
(698, 509, 0, 0, 28, 2),
(699, 521, 0, 0, 13, 2),
(700, 539, 0, 0, 51, 2),
(701, 544, 0, 0, 31, 2),
(702, 553, 0, 0, 24, 2),
(703, 565, 0, 0, 33, 2),
(704, 541, 0, 2, 6, 3),
(705, 526, 0, 3, 6, 3),
(706, 534, 0, 3, 15, 3),
(707, 546, 0, 0, 62, 3),
(708, 562, 0, 0, 27, 3),
(709, 551, 0, 0, 12, 3),
(710, 552, 0, 3, 40, 3),
(711, 568, 274, 0, 0, 27),
(712, 569, 52, 0, 0, 4),
(713, 554, 0, 0, 29, 4),
(714, 567, 0, 0, 18, 4),
(715, 570, 198, 21, 6, 4),
(716, 571, 64, 6, 6, 4),
(717, 529, 0, 0, 90, 22),
(718, 568, 0, 43, 180, 22),
(719, 570, 0, 768, 0, 22),
(720, 569, 0, 120, 0, 22),
(721, 571, 0, 47, 0, 22),
(722, 572, 127, 3, 155, 22),
(723, 573, 118, 3, 241, 22),
(724, 574, 815, 8, 93, 22),
(725, 575, 224, 0, 0, 22),
(726, 576, 57, 4, 90, 22),
(727, 577, 94, 0, 0, 22),
(728, 578, 151, 0, 0, 22),
(729, 579, 110, 0, 0, 18),
(730, 578, 0, 0, 68, 2),
(731, 579, 0, 0, 10, 2),
(732, 580, 152, 0, 0, 22),
(733, 581, 62, 7, 116, 22),
(734, 582, 180, 0, 0, 6),
(735, 583, 176, 0, 0, 6),
(736, 584, 135, 5, 123, 22),
(737, 585, 116, 0, 0, 6),
(738, 586, 322, 0, 0, 6),
(739, 587, 327, 96, 101, 22),
(740, 588, 166, 4, 260, 22),
(741, 589, 155, 3, 229, 22),
(742, 590, 593, 4, 244, 22),
(743, 591, 108, 6, 290, 22),
(744, 592, 78, 0, 0, 6),
(745, 593, 141, 0, 0, 6),
(746, 594, 89, 0, 0, 6),
(747, 595, 57, 0, 0, 6),
(748, 596, 177, 0, 0, 6),
(749, 596, 0, 134, 74, 22),
(750, 597, 143, 11, 247, 22),
(751, 598, 124, 0, 0, 6),
(752, 599, 261, 0, 0, 6),
(753, 600, 104, 0, 0, 6),
(754, 601, 125, 0, 0, 6),
(755, 602, 100, 0, 0, 22),
(756, 603, 787, 0, 0, 22),
(757, 604, 267, 0, 0, 22),
(758, 605, 168, 0, 0, 22),
(759, 606, 143, 0, 0, 22),
(760, 607, 228, 7, 373, 22),
(761, 608, 265, 0, 0, 22),
(762, 609, 209, 0, 0, 22),
(763, 610, 245, 0, 0, 22),
(764, 611, 173, 0, 0, 22),
(765, 612, 140, 0, 0, 22),
(766, 613, 182, 3, 117, 22),
(767, 614, 63, 111, 0, 22),
(768, 615, 138, 3, 267, 22),
(769, 616, 434, 3, 61, 22),
(770, 617, 64, 3, 59, 22),
(771, 618, 191, 0, 0, 22),
(772, 619, 167, 20, 0, 22),
(773, 620, 83, 3, 77, 22),
(774, 621, 352, 0, 158, 22),
(775, 622, 101, 4, 150, 22),
(776, 608, 0, 0, 50, 4),
(777, 606, 0, 80, 62, 4),
(778, 609, 0, 0, 59, 4),
(779, 612, 0, 0, 63, 4),
(780, 602, 0, 0, 29, 4),
(781, 610, 0, 0, 74, 4),
(782, 604, 0, 35, 80, 4),
(783, 605, 0, 48, 99, 4),
(784, 623, 293, 0, 150, 28),
(785, 603, 0, 0, 65, 28),
(786, 618, 0, 0, 46, 4),
(787, 624, 185, 4, 198, 22),
(788, 625, 129, 398, 374, 22),
(789, 580, 0, 0, 15, 3),
(790, 575, 0, 29, 20, 3),
(791, 582, 0, 0, 22, 3),
(792, 583, 0, 0, 15, 3),
(793, 585, 0, 0, 18, 3),
(794, 586, 0, 0, 22, 3),
(795, 593, 0, 0, 25, 3),
(796, 598, 0, 0, 17, 3),
(797, 595, 0, 0, 43, 3),
(798, 611, 0, 0, 15, 3),
(799, 592, 0, 0, 18, 3),
(800, 600, 0, 0, 19, 3),
(801, 619, 0, 0, 19, 3),
(802, 599, 0, 0, 26, 3),
(803, 601, 0, 0, 32, 3),
(804, 626, 143, 45, 11, 3),
(805, 627, 44, 0, 20, 3),
(806, 628, 14, 0, 15, 3),
(807, 629, 20, 4, 6, 3),
(808, 630, 24, 0, 0, 3),
(809, 631, 46, 3, 197, 3),
(810, 632, 60, 0, 0, 3),
(811, 633, 74, 2, 57, 22),
(812, 634, 167, 3, 133, 22),
(813, 635, 89, 3, 102, 22),
(814, 636, 1540, 3, 163, 22),
(815, 637, 51, 3, 275, 22),
(816, 632, 0, 0, 594, 28),
(817, 630, 0, 0, 425, 28),
(818, 577, 0, 0, 507, 28),
(819, 594, 0, 19, 53, 28),
(820, 638, 925, 0, 965, 28),
(821, 639, 42, 0, 68, 4),
(822, 640, 66, 0, 112, 4),
(823, 641, 61, 0, 0, 22),
(824, 642, 88, 2, 36, 22),
(825, 643, 131, 2, 241, 22),
(826, 644, 132, 2, 137, 22),
(827, 645, 173, 0, 169, 22),
(828, 646, 80, 2, 112, 22),
(829, 647, 114, 1, 61, 22),
(830, 648, 879, 2, 120, 22),
(831, 649, 95, 2, 131, 22),
(832, 650, 74, 0, 96, 4),
(833, 651, 369, 1, 1301, 22),
(834, 652, 71, 0, 0, 22),
(835, 645, 0, 218, 0, 4),
(836, 652, 0, 0, 15, 4),
(837, 653, 34, 0, 57, 4),
(838, 654, 228, 0, 0, 6),
(839, 655, 132, 3, 87, 22),
(840, 656, 97, 5, 98, 22),
(841, 657, 109, 3, 6, 3),
(842, 658, 127, 0, 0, 6),
(843, 659, 85, 0, 2112, 28),
(844, 660, 149, 0, 319, 28),
(845, 654, 0, 0, 5, 3),
(846, 658, 0, 0, 7, 3),
(847, 661, 59, 0, 0, 22),
(848, 662, 128, 0, 169, 22),
(849, 663, 83, 0, 38, 22),
(850, 664, 88, 0, 46, 22),
(851, 665, 79, 0, 86, 22),
(852, 666, 90, 0, 70, 22),
(853, 667, 160, 0, 0, 22),
(854, 668, 368, 0, 216, 22),
(855, 669, 54, 0, 31, 22),
(856, 670, 75, 0, 41, 22),
(857, 671, 89, 0, 54, 22),
(858, 672, 179, 0, 456, 28),
(859, 673, 291, 0, 643, 28),
(860, 674, 238, 0, 306, 28),
(861, 675, 266, 0, 236, 28),
(862, 676, 176, 0, 284, 28),
(863, 677, 147, 0, 177, 28),
(864, 678, 201, 0, 923, 28),
(865, 679, 82, 0, 326, 28),
(866, 680, 66, 0, 461, 28),
(867, 681, 205, 0, 444, 28),
(868, 682, 108, 0, 144, 28),
(869, 683, 140, 0, 129, 28),
(870, 667, 0, 0, 241, 28),
(871, 684, 48, 0, 88, 28),
(872, 685, 150, 0, 220, 28),
(873, 686, 91, 0, 158, 28),
(874, 687, 70, 0, 330, 28),
(875, 688, 395, 0, 483, 28),
(876, 689, 328, 0, 244, 28),
(877, 690, 249, 0, 992, 28),
(878, 691, 365, 0, 274, 28),
(879, 692, 136, 0, 96, 28),
(880, 693, 193, 0, 258, 28),
(881, 694, 78, 0, 296, 28),
(882, 695, 92, 0, 281, 28),
(883, 696, 45, 0, 154, 28),
(884, 697, 63, 0, 465, 28),
(885, 698, 107, 0, 239, 28),
(886, 699, 126, 0, 215, 28),
(887, 700, 95, 0, 239, 28),
(888, 701, 61, 0, 225, 28),
(889, 702, 44, 0, 123, 28),
(890, 703, 44, 0, 275, 28),
(891, 704, 168, 0, 115, 28),
(892, 705, 72, 0, 176, 28),
(893, 706, 112, 0, 121, 28),
(894, 707, 48, 0, 125, 28),
(895, 708, 50, 0, 112, 28),
(896, 709, 103, 0, 0, 6),
(897, 710, 50, 0, 0, 6),
(898, 661, 0, 0, 9, 3),
(899, 709, 0, 0, 11, 3),
(900, 710, 0, 0, 8, 3),
(901, 569, 0, 0, 21, 3),
(902, 711, 84, 100, 62, 3),
(903, 712, 232, 0, 673, 28),
(904, 713, 78, 0, 1052, 28),
(905, 714, 90, 0, 327, 28),
(906, 715, 591, 3, 635, 22),
(907, 714, 0, 141, 0, 22),
(908, 716, 186, 12, 0, 22),
(909, 717, 93, 0, 258, 28),
(910, 718, 107, 0, 142, 28),
(911, 719, 108, 0, 202, 28),
(912, 720, 70, 0, 287, 28),
(913, 721, 136, 14, 6, 28),
(914, 722, 254, 0, 0, 40),
(915, 723, 401, 0, 0, 40),
(916, 724, 109, 0, 0, 40),
(917, 725, 260, 0, 0, 40),
(918, 726, 441, 0, 0, 40),
(919, 727, 248, 0, 0, 40),
(920, 728, 192, 0, 0, 40),
(921, 729, 329, 0, 0, 40),
(922, 730, 100, 0, 0, 40),
(923, 731, 115, 0, 0, 40),
(924, 732, 133, 0, 0, 40),
(925, 733, 215, 0, 0, 40),
(926, 734, 62, 0, 0, 40),
(927, 735, 125, 0, 0, 40),
(928, 736, 113, 0, 0, 40),
(929, 737, 136, 0, 0, 40),
(930, 738, 147, 0, 0, 40),
(931, 739, 118, 0, 0, 40),
(932, 740, 97, 0, 0, 40),
(933, 741, 48, 0, 0, 40),
(934, 742, 107, 0, 0, 40),
(935, 743, 138, 0, 0, 40),
(936, 744, 105, 0, 0, 40),
(937, 745, 428, 123, 319, 28),
(938, 746, 56, 0, 6015, 28),
(939, 747, 89, 0, 573, 28),
(940, 748, 112, 0, 282, 28),
(941, 749, 40, 0, 515, 28),
(942, 750, 89, 0, 1129, 28),
(943, 751, 267, 0, 168, 41),
(944, 752, 60, 0, 150, 41),
(945, 753, 92, 0, 0, 41),
(946, 754, 213, 0, 462, 28),
(947, 755, 93, 0, 184, 28),
(948, 756, 108, 0, 0, 41),
(949, 757, 74, 0, 88, 41),
(950, 758, 22, 0, 0, 28),
(951, 759, 17, 0, 22, 28),
(952, 722, 0, 0, 33, 3),
(953, 723, 0, 8, 10, 28),
(954, 724, 0, 11, 0, 28),
(955, 760, 22, 0, 0, 28),
(956, 761, 26, 0, 0, 28),
(957, 725, 0, 3, 0, 28),
(958, 762, 1027, 0, 0, 28),
(959, 726, 0, 5, 0, 3),
(960, 763, 21, 0, 0, 3),
(961, 764, 49, 0, 0, 43),
(962, 765, 117, 0, 0, 43),
(963, 766, 87, 0, 0, 48),
(964, 766, 0, 6, 63, 60),
(965, 767, 429, 0, 0, 54),
(966, 768, 76, 0, 0, 51),
(967, 769, 62, 0, 0, 51),
(968, 770, 92, 0, 0, 54),
(969, 767, 0, 40, 0, 51),
(970, 770, 0, 11, 58, 51),
(971, 771, 182, 12, 247, 51),
(972, 772, 74, 0, 0, 48),
(973, 773, 210, 3, 212, 51),
(976, 776, 87, 77, 0, 51),
(977, 777, 65, 0, 0, 54),
(978, 765, 0, 644, 0, 22),
(979, 778, 252, 7, 404, 22),
(980, 779, 181, 0, 0, 61),
(981, 780, 161, 6, 225, 22),
(982, 781, 104, 0, 92, 22),
(1005, 791, 0, 4, 623, 51),
(984, 779, 0, 42, 343, 51),
(985, 783, 166, 4, 95, 41),
(986, 784, 141, 39, 41, 41),
(987, 785, 195, 7, 102, 41),
(988, 786, 152, 3, 44, 41),
(989, 787, 216, 0, 0, 60),
(990, 787, 0, 10, 227, 3),
(991, 788, 110, 17, 118, 41),
(994, 791, 94, 0, 0, 60),
(993, 790, 29, 4, 47, 41),
(995, 792, 63, 3, 81, 41),
(996, 793, 141, 0, 0, 60),
(997, 794, 32, 3, 90, 41),
(998, 793, 0, 3, 197, 3),
(999, 795, 38, 3, 105, 41),
(1000, 796, 49, 3, 82, 41),
(1001, 772, 0, 4, 0, 60),
(1015, 804, 53, 0, 0, 47),
(1003, 798, 231, 48, 0, 51),
(1004, 798, 0, 9, 47, 41),
(1006, 799, 95, 0, 0, 22),
(1007, 800, 77, 0, 0, 48),
(1008, 800, 0, 4, 58, 51),
(1009, 801, 105, 0, 0, 52),
(1014, 803, 0, 4, 64, 51),
(1011, 803, 73, 0, 0, 52),
(1013, 772, 0, 0, 50, 51),
(1016, 805, 117, 47, 0, 3),
(1017, 801, 0, 176, 0, 51),
(1018, 778, 0, 110, 0, 51),
(1020, 765, 0, 123, 87, 51),
(1021, 807, 760, 0, 0, 54),
(1022, 808, 76, 0, 0, 43),
(1023, 777, 0, 72, 0, 51),
(1024, 801, 0, 3, 90, 41),
(1025, 809, 52, 0, 0, 51),
(1026, 810, 87, 0, 0, 51),
(1027, 846, 174, 85, 0, 51),
(1028, 847, 117, 0, 0, 54),
(1029, 805, 0, 3, 25, 41),
(1030, 848, 129, 15, 198, 51),
(1032, 850, 222, 55, 522, 22),
(1033, 851, 81, 0, 0, 52),
(1034, 810, 0, 5, 61, 60),
(1035, 809, 0, 4, 85, 3),
(1036, 811, 0, 10, 103, 3),
(1037, 812, 0, 2, 75, 3),
(1038, 813, 0, 3, 89, 3),
(1039, 814, 0, 3, 84, 3),
(1040, 815, 0, 3, 56, 3),
(1041, 816, 0, 3, 82, 3),
(1042, 817, 0, 3, 94, 3),
(1043, 818, 0, 4, 81, 3),
(1044, 819, 0, 5, 124, 3),
(1045, 820, 0, 3, 156, 3),
(1046, 821, 0, 2, 50, 3),
(1047, 822, 0, 0, 87, 3),
(1048, 823, 0, 3, 52, 3),
(1049, 824, 0, 3, 45, 3),
(1050, 825, 0, 3, 57, 3),
(1051, 852, 77, 0, 110, 60),
(1078, 852, 0, 98, 0, 51),
(1053, 807, 0, 5, 95, 41),
(1054, 847, 0, 5, 75, 41),
(1055, 777, 0, 16, 48, 41),
(1056, 799, 0, 3, 50, 41),
(1057, 854, 49, 0, 0, 54),
(1058, 855, 13, 0, 0, 54),
(1059, 808, 0, 79, 0, 22),
(1060, 856, 76, 0, 165, 22),
(1061, 857, 12, 6, 184, 22),
(1062, 767, 0, 90, 0, 22),
(1063, 767, 0, 4, 30, 41),
(1064, 776, 0, 5, 31, 41),
(1065, 855, 0, 2, 138, 41),
(1066, 826, 0, 10, 116, 3),
(1067, 827, 0, 4, 138, 3),
(1068, 828, 0, 5, 38, 3),
(1069, 829, 0, 4, 8, 3),
(1070, 858, 96, 4, 62, 51),
(1071, 808, 0, 3, 115, 51),
(1072, 859, 100, 0, 0, 54),
(1073, 859, 0, 189, 39, 22),
(1074, 851, 0, 360, 0, 22),
(1075, 860, 104, 3, 58, 51),
(1076, 861, 68, 3, 48, 51),
(1077, 862, 158, 10, 45, 51),
(1079, 854, 0, 135, 0, 51),
(1080, 804, 0, 6, 0, 51),
(1081, 851, 0, 17, 0, 51),
(1082, 863, 257, 79, 0, 22),
(1085, 839, 0, 3, 6, 3),
(1084, 854, 0, 57, 0, 22),
(1086, 840, 0, 3, 7, 3),
(1087, 841, 0, 2, 12, 3),
(1088, 842, 0, 79, 0, 3),
(1089, 830, 0, 4, 21, 3),
(1090, 831, 0, 2, 11, 3),
(1091, 832, 0, 3, 23, 3),
(1092, 833, 0, 5, 8, 3),
(1093, 834, 0, 3, 10, 3),
(1094, 835, 0, 5, 8, 3),
(1095, 836, 0, 4, 10, 3),
(1096, 837, 0, 3, 9, 3),
(1097, 838, 0, 3, 12, 3),
(1098, 843, 0, 29, 0, 3),
(1099, 844, 0, 27, 0, 3),
(1100, 845, 0, 25, 0, 3),
(1101, 846, 0, 29, 0, 3),
(1102, 863, 0, 0, 63, 41),
(1103, 865, 5687, 4, 87, 3),
(1113, 872, 0, 0, 170, 22),
(1111, 871, 228, 2, 64, 51),
(1110, 870, 132, 15, 0, 51),
(1112, 872, 161, 0, 0, 51),
(1108, 869, 129, 0, 0, 3),
(1109, 869, 0, 67, 56, 51),
(1114, 873, 790, 254, 87, 22),
(1115, 874, 376, 0, 0, 22),
(1116, 875, 124, 0, 0, 22),
(1117, 871, 0, 41, 0, 22),
(1118, 876, 235, 2, 100, 22),
(1119, 877, 94, 0, 0, 56),
(1120, 878, 103, 54, 0, 22),
(1121, 879, 97, 18, 0, 22),
(1122, 880, 146, 29, 271, 22),
(1123, 881, 125, 0, 0, 22),
(1124, 881, 0, 4, 42, 41),
(1125, 883, 52, 22, 0, 51),
(1126, 882, 0, 42, 0, 51),
(1127, 884, 81, 7, 60, 51),
(1128, 885, 111, 3, 81, 51),
(1129, 875, 0, 3, 166, 51),
(1130, 877, 0, 16, 81, 41),
(1131, 886, 166, 0, 0, 23),
(1132, 886, 0, 5, 219, 51),
(1133, 878, 0, 10, 91, 51),
(1134, 879, 0, 65, 0, 51),
(1135, 887, 215, 0, 0, 54),
(1136, 888, 204, 0, 0, 5),
(1137, 889, 96, 3, 100, 51),
(1138, 891, 37, 3, 59, 51),
(1139, 890, 0, 3, 13, 51),
(1140, 887, 0, 3, 41, 41),
(1141, 892, 46, 2, 161, 41),
(1142, 888, 0, 3, 0, 41),
(1143, 893, 464, 0, 0, 54),
(1144, 895, 95, 3, 86, 51),
(1145, 894, 0, 3, 56, 51),
(1146, 896, 62, 2, 164, 51),
(1147, 897, 61, 2, 131, 51),
(1148, 898, 59, 0, 0, 54),
(1149, 898, 0, 4, 123, 51),
(1150, 899, 83, 3, 105, 41),
(1151, 893, 0, 3, 0, 60),
(1152, 900, 145, 0, 0, 52),
(1153, 901, 95, 0, 0, 60),
(1154, 901, 0, 2, 97, 51),
(1155, 902, 40, 3, 79, 51),
(1156, 888, 0, 41, 0, 60),
(1157, 851, 0, 9, 0, 60),
(1158, 893, 0, 10, 527, 51),
(1159, 903, 70, 0, 0, 51),
(1160, 904, 202, 0, 0, 54),
(1161, 905, 126, 17, 61, 41),
(1162, 900, 0, 16, 0, 41),
(1163, 906, 1886, 6, 193, 22),
(1164, 882, 0, 4, 103, 22),
(1165, 883, 0, 3, 74, 22),
(1166, 904, 0, 52, 0, 60),
(1167, 903, 0, 2, 88, 60),
(1168, 907, 630, 13, 294, 22),
(1169, 908, 147, 9, 124, 22),
(1170, 900, 0, 4, 87, 51),
(1171, 874, 0, 2, 101, 51),
(1172, 909, 100, 0, 0, 52),
(1173, 910, 178, 4, 51, 22),
(1174, 909, 0, 6, 55, 51),
(1175, 911, 73, 5, 86, 51),
(1176, 904, 0, 8, 0, 51),
(1177, 912, 71, 40, 53, 51),
(1178, 913, 107, 0, 0, 23),
(1179, 913, 0, 3, 55, 51),
(1180, 914, 472, 8, 104, 51),
(1181, 915, 57, 0, 0, 54),
(1182, 915, 0, 3, 133, 51),
(1183, 916, 140, 3, 165, 51),
(1184, 917, 61, 2, 72, 51),
(1185, 918, 55, 2, 189, 51),
(1187, 920, 80, 3, 259, 51),
(1188, 921, 77, 2, 114, 51),
(1189, 879, 0, 0, 41, 41),
(1190, 923, 96, 3, 46, 51),
(1191, 924, 103, 3, 120, 51),
(1192, 925, 88, 0, 0, 51),
(1193, 926, 109, 3, 181, 51),
(1194, 922, 0, 3, 105, 51),
(1195, 927, 73, 17, 0, 51),
(1196, 829, 0, 37, 0, 51),
(1197, 928, 191, 0, 0, 48),
(1198, 929, 32, 0, 0, 52),
(1199, 928, 0, 30, 124, 41),
(1200, 925, 0, 13, 19, 41),
(1271, 987, 83, 12, 109, 51),
(1202, 931, 101, 0, 0, 48),
(1203, 927, 0, 9, 102, 22),
(1204, 931, 0, 52, 0, 22),
(1291, 1000, 0, 2, 4, 41),
(1206, 931, 0, 3, 125, 51),
(1207, 929, 0, 2, 71, 51),
(1208, 933, 61, 3, 64, 51),
(1209, 932, 0, 52, 81, 51),
(1210, 934, 112, 4, 46, 60),
(1211, 935, 109, 2, 33, 41),
(1212, 936, 748, 15, 162, 22),
(1214, 938, 148, 5, 141, 22),
(1215, 939, 166, 3, 116, 22),
(1216, 940, 210, 3, 226, 22),
(1217, 941, 237, 4, 313, 22),
(1218, 942, 153, 3, 113, 22),
(1219, 943, 461, 0, 0, 22),
(1220, 944, 38, 3, 71, 41),
(1221, 945, 38, 3, 241, 41),
(1222, 943, 0, 3, 71, 51),
(1223, 946, 60, 2, 98, 51),
(1224, 947, 54, 27, 92, 41),
(1225, 948, 45, 2, 5, 41),
(1226, 949, 49, 1, 60, 41),
(1227, 950, 67, 24, 54, 41),
(1228, 954, 111, 3, 80, 51),
(1229, 953, 0, 52, 26, 51),
(1230, 952, 0, 39, 70, 51),
(1231, 951, 0, 3, 0, 41),
(1232, 951, 0, 15, 83, 51),
(1233, 955, 73, 6, 157, 51),
(1234, 956, 104, 4, 0, 60),
(1235, 956, 0, 11, 109, 51),
(1236, 957, 67, 0, 0, 60),
(1237, 957, 0, 4, 70, 22),
(1238, 958, 132, 3, 60, 41),
(1239, 959, 201, 0, 0, 54),
(1240, 960, 38, 3, 209, 41),
(1241, 965, 618, 24, 102, 51),
(1242, 961, 0, 29, 53, 51),
(1243, 962, 0, 15, 39, 51),
(1244, 963, 0, 35, 0, 51),
(1245, 964, 0, 30, 0, 51),
(1246, 969, 88, 21, 109, 51),
(1247, 966, 0, 44, 16, 51),
(1248, 967, 0, 15, 15, 51),
(1249, 968, 0, 53, 185, 51),
(1250, 959, 0, 20, 0, 51),
(1251, 970, 162, 3, 168, 51),
(1252, 959, 0, 0, 388, 41),
(1253, 963, 0, 2, 54, 60),
(1254, 965, 0, 0, 90, 60),
(1255, 964, 0, 0, 73, 60),
(1256, 976, 82, 2, 18, 41),
(1257, 971, 0, 2, 101, 41),
(1258, 972, 0, 2, 14, 41),
(1259, 973, 0, 6, 12, 41),
(1260, 974, 0, 3, 11, 41),
(1261, 975, 0, 4, 16, 41),
(1262, 977, 64, 0, 0, 56),
(1263, 977, 0, 0, 3, 41),
(1264, 979, 100, 2, 140, 51),
(1265, 978, 0, 52, 112, 51),
(1266, 981, 173, 2, 70, 51),
(1267, 980, 0, 35, 75, 51),
(1268, 983, 132, 3, 78, 51),
(1269, 982, 0, 93, 45, 51),
(1272, 985, 0, 278, 293, 51),
(1273, 986, 0, 61, 138, 51),
(1290, 1003, 235, 79, 0, 22),
(1275, 993, 140, 2, 3, 41),
(1276, 988, 0, 3, 3, 41),
(1277, 989, 0, 3, 5, 41),
(1278, 990, 0, 3, 5, 41),
(1279, 991, 0, 2, 4, 41),
(1280, 992, 0, 2, 4, 41),
(1281, 994, 137, 2, 7, 41),
(1282, 999, 71, 3, 4, 41),
(1283, 995, 0, 4, 4, 41),
(1284, 996, 0, 3, 4, 41),
(1285, 997, 0, 2, 3, 41),
(1286, 998, 0, 3, 4, 41),
(1287, 1000, 143, 0, 0, 54),
(1288, 1001, 45, 3, 198, 51),
(1289, 1002, 50, 0, 0, 51),
(1292, 1004, 416, 0, 0, 47),
(1293, 1002, 0, 3, 4, 41),
(1294, 1005, 172, 21, 0, 51),
(1295, 1004, 0, 30, 0, 51),
(1296, 1006, 106, 0, 0, 54),
(1297, 1006, 0, 62, 121, 51),
(1298, 1007, 127, 0, 0, 60),
(1357, 1053, 84, 0, 0, 54),
(1300, 1011, 119, 3, 111, 51),
(1301, 1010, 0, 67, 206, 51),
(1302, 1009, 0, 24, 147, 51),
(1322, 1026, 56, 0, 58, 41),
(1304, 1013, 184, 0, 0, 54),
(1305, 1014, 118, 3, 150, 51),
(1306, 1007, 0, 31, 33, 41),
(1307, 1005, 0, 13, 34, 41),
(1320, 1013, 0, 8, 177, 60),
(1309, 1019, 191, 6, 145, 51),
(1310, 1016, 0, 108, 108, 51),
(1311, 1018, 0, 118, 82, 51),
(1312, 1017, 0, 61, 235, 51),
(1313, 1022, 467, 6, 110, 51),
(1314, 1021, 0, 90, 278, 51),
(1315, 1023, 87, 4, 99, 60),
(1316, 1020, 0, 136, 355, 51),
(1317, 1024, 77, 2, 97, 51),
(1318, 1025, 97, 49, 175, 51),
(1356, 1042, 0, 5, 143, 60),
(1355, 1052, 55, 3, 98, 41),
(1323, 1004, 0, 10, 112, 41),
(1324, 1003, 0, 14, 164, 41),
(1325, 1027, 86, 3, 33, 41),
(1326, 1028, 36, 2, 5, 41),
(1327, 1029, 854, 24, 284, 22),
(1328, 1030, 1190, 0, 0, 60),
(1329, 1031, 30, 0, 0, 60),
(1330, 1030, 0, 3, 259, 22),
(1331, 1031, 0, 3, 34, 22),
(1332, 1032, 78, 10, 130, 41),
(1333, 1033, 310, 0, 0, 23),
(1334, 1036, 77, 3, 46, 51),
(1335, 1034, 0, 53, 93, 51),
(1336, 1035, 0, 69, 197, 51),
(1354, 1044, 0, 6, 73, 41),
(1338, 1037, 0, 3, 161, 51),
(1339, 1039, 39, 2, 55, 41),
(1340, 1033, 0, 5, 221, 51),
(1341, 1040, 1018, 51, 39, 41),
(1342, 1041, 108, 2, 676, 51),
(1343, 1042, 153, 0, 0, 51),
(1344, 1043, 88, 0, 0, 41),
(1345, 1044, 136, 0, 0, 54),
(1346, 1046, 132, 24, 41, 51),
(1347, 1045, 0, 72, 98, 51),
(1348, 1047, 81, 2, 101, 51),
(1349, 1048, 104, 3, 72, 51),
(1350, 1049, 53, 2, 74, 51),
(1351, 1043, 0, 5, 104, 51),
(1352, 1051, 92, 3, 58, 51),
(1353, 1050, 0, 48, 63, 51),
(1358, 1053, 0, 3, 69, 51),
(1359, 1059, 145, 2, 136, 51),
(1360, 1058, 0, 58, 327, 51),
(1361, 1057, 0, 72, 175, 51),
(1362, 1056, 0, 104, 200, 51),
(1363, 1055, 0, 33, 51, 51),
(1364, 1054, 0, 41, 255, 51),
(1365, 1060, 83, 3, 81, 51),
(1366, 1061, 123, 3, 86, 51),
(1367, 1062, 163, 8, 46, 41),
(1368, 1063, 33, 15, 54, 41),
(1369, 1064, 526, 2, 79, 51),
(1370, 1067, 127, 2, 44, 51),
(1371, 1065, 0, 56, 64, 51),
(1372, 1066, 0, 158, 63, 51),
(1373, 1071, 133, 3, 50, 51),
(1374, 1070, 0, 24, 29, 51),
(1375, 1069, 0, 50, 56, 51),
(1376, 1068, 0, 30, 42, 51),
(1377, 1073, 140, 2, 38, 51),
(1378, 1072, 0, 87, 59, 51),
(1379, 1074, 126, 92, 28, 41),
(1380, 870, 0, 0, 12, 3),
(1381, 1075, 61, 3, 111, 3),
(1382, 1076, 64, 6, 241, 41),
(1383, 1077, 62, 3, 41, 41),
(1384, 1080, 91, 2, 5, 41),
(1385, 1078, 0, 3, 22, 41),
(1386, 1079, 0, 2, 5, 41),
(1387, 1081, 35, 2, 31, 51),
(1388, 1082, 103, 3, 172, 51),
(1389, 1084, 71, 3, 53, 51),
(1390, 1083, 0, 40, 43, 51),
(1391, 1085, 83, 3, 40, 51),
(1392, 1086, 74, 3, 57, 51),
(1393, 1087, 117, 2, 56, 51),
(1394, 1088, 116, 6, 16, 41),
(1395, 1089, 25, 3, 0, 41),
(1396, 1090, 74, 2, 33, 41),
(1397, 1089, 0, 0, 570, 22),
(1398, 1091, 321, 0, 0, 5),
(1399, 1094, 69, 61, 60, 51),
(1400, 1093, 0, 97, 36, 51),
(1401, 1092, 0, 158, 372, 51),
(1402, 1096, 326, 2, 389, 51),
(1403, 1095, 0, 84, 50, 51),
(1404, 1100, 73, 3, 107, 51),
(1405, 1099, 0, 52, 82, 51),
(1406, 1098, 0, 24, 25, 51),
(1407, 1097, 0, 62, 55, 51),
(1408, 1101, 61, 3, 47, 51),
(1409, 1104, 84, 24, 65, 51),
(1410, 1103, 0, 64, 29, 51),
(1411, 1102, 0, 137, 138, 51),
(1412, 1105, 717, 2, 122, 51),
(1413, 1091, 0, 11, 0, 51),
(1414, 1106, 2525, 4, 27, 3),
(1415, 1107, 133, 5, 44, 3),
(1416, 1108, 81, 3, 20, 3),
(1417, 1109, 94, 163, 0, 3),
(1418, 1110, 128, 4, 9, 3),
(1419, 1111, 106, 0, 0, 3),
(1420, 1112, 94, 7, 181, 3),
(1421, 1113, 200, 3, 92, 3),
(1422, 1114, 96, 17, 13, 3),
(1423, 1115, 170, 0, 0, 47),
(1424, 1116, 533, 0, 85, 22),
(1425, 1117, 257, 0, 161, 22),
(1426, 1118, 114, 0, 204, 22),
(1427, 1119, 411, 2, 50, 41),
(1428, 1120, 115, 102, 6, 41),
(1429, 1121, 82, 12, 50, 41),
(1430, 1122, 176, 0, 0, 5),
(1431, 1122, 0, 6, 39, 41),
(1432, 1109, 0, 4, 4, 41),
(1433, 1123, 55, 3, 36, 41),
(1434, 1091, 0, 0, 3, 41),
(1435, 1124, 33, 6, 40, 41),
(1436, 1125, 64, 4, 12, 3),
(1437, 1126, 133, 83, 0, 3),
(1438, 1127, 101, 39, 11, 3),
(1439, 1128, 77, 2, 39, 41),
(1440, 1129, 39, 4, 307, 41),
(1441, 1111, 0, 0, 3, 41),
(1442, 1130, 86, 4, 52, 41),
(1443, 1131, 105, 2, 78, 41),
(1444, 1139, 169, 20, 31, 51),
(1445, 1132, 0, 15, 24, 51),
(1446, 1133, 0, 51, 36, 51),
(1447, 1134, 0, 69, 33, 51),
(1448, 1143, 1169, 1570, 93, 51),
(1449, 1140, 0, 23, 57, 51),
(1450, 1141, 0, 769, 77, 51),
(1451, 1142, 0, 85, 28, 51),
(1452, 1144, 99, 2, 34, 51),
(1453, 1148, 121, 2, 32, 51),
(1454, 1147, 0, 24, 51, 51),
(1455, 1149, 70, 2, 42, 51),
(1456, 1135, 0, 82, 118, 3),
(1457, 1136, 0, 69, 19, 3),
(1458, 1137, 0, 249, 25, 3),
(1459, 1138, 0, 52, 0, 3),
(1460, 1116, 0, 126, 0, 3),
(1461, 1150, 83, 3, 61, 3),
(1462, 1151, 349, 2, 21, 3),
(1463, 1152, 51, 908, 13, 3),
(1464, 1153, 37, 3, 33, 3),
(1465, 1154, 140, 0, 0, 3),
(1466, 1156, 248, 3, 292, 51),
(1467, 1155, 0, 36, 68, 51),
(1468, 1154, 0, 2, 127, 51),
(1469, 1157, 117, 3, 68, 51),
(1470, 1158, 64, 3, 87, 51),
(1471, 1163, 65, 3, 71, 51),
(1472, 1162, 0, 2, 27, 51),
(1473, 1161, 0, 2, 30, 51),
(1474, 1160, 0, 3, 39, 51),
(1475, 1159, 0, 2, 33, 51),
(1476, 1164, 143, 2, 83, 41),
(1477, 1166, 75, 3, 403, 51),
(1478, 1165, 0, 29, 65, 51),
(1479, 1170, 152, 2, 237, 51),
(1480, 1169, 0, 71, 167, 51),
(1481, 1168, 0, 9, 109, 51),
(1482, 1167, 0, 37, 41, 51),
(1483, 1171, 107, 2, 49, 51),
(1484, 1173, 78, 2, 73, 51),
(1485, 1172, 0, 56, 40, 51),
(1486, 1174, 85, 1301, 0, 51),
(1487, 1175, 151, 0, 0, 5),
(1488, 1176, 172, 0, 0, 5),
(1489, 1177, 187, 0, 0, 5),
(1490, 1178, 127, 348, 65, 41),
(1491, 1179, 76, 4, 99, 41),
(1492, 1180, 105, 5, 276, 41),
(1493, 1181, 190, 0, 0, 5),
(1494, 1182, 79, 3, 262, 41),
(1495, 1183, 113, 5, 698, 41),
(1496, 1184, 130, 0, 0, 23),
(1497, 1185, 335, 0, 0, 23),
(1498, 1186, 20, 0, 0, 64),
(1499, 1187, 41, 0, 0, 64),
(1500, 1188, 52, 0, 0, 64),
(1501, 1186, 0, 43, 60, 63),
(1502, 1188, 0, 29, 57, 63),
(1503, 1189, 75, 14, 0, 63),
(1504, 1187, 0, 33, 0, 63);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dominios`
--

CREATE TABLE IF NOT EXISTS `dominios` (
`dom_cod` int(4) NOT NULL,
  `dom_desc` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabela de DomÃ­nios de Rede';

-- --------------------------------------------------------

--
-- Estrutura da tabela `email_warranty`
--

CREATE TABLE IF NOT EXISTS `email_warranty` (
`ew_id` int(6) NOT NULL,
  `ew_piece_type` int(1) NOT NULL DEFAULT '0',
  `ew_piece_id` int(6) NOT NULL,
  `ew_sent_first_alert` tinyint(1) NOT NULL DEFAULT '0',
  `ew_sent_last_alert` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de controle para envio de email sobre prazo de garant';

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE IF NOT EXISTS `emprestimos` (
`empr_id` int(11) NOT NULL,
  `material` text NOT NULL,
  `responsavel` int(4) NOT NULL DEFAULT '0',
  `data_empr` datetime DEFAULT NULL,
  `data_devol` datetime DEFAULT NULL,
  `quem` varchar(100) DEFAULT NULL,
  `local` varchar(100) DEFAULT NULL,
  `ramal` varchar(20) DEFAULT NULL,
  `responsavelbkp` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE IF NOT EXISTS `equipamentos` (
`comp_cod` int(4) unsigned NOT NULL,
  `comp_inv` int(6) NOT NULL DEFAULT '0',
  `comp_sn` varchar(30) DEFAULT NULL,
  `comp_marca` int(4) unsigned NOT NULL DEFAULT '0',
  `comp_mb` int(4) DEFAULT NULL,
  `comp_proc` int(4) unsigned DEFAULT NULL,
  `comp_memo` int(4) unsigned DEFAULT NULL,
  `comp_video` int(4) unsigned DEFAULT NULL,
  `comp_som` int(4) unsigned DEFAULT NULL,
  `comp_rede` int(4) unsigned DEFAULT NULL,
  `comp_modelohd` int(4) unsigned DEFAULT NULL,
  `comp_modem` int(4) unsigned DEFAULT NULL,
  `comp_cdrom` int(4) unsigned DEFAULT NULL,
  `comp_dvd` int(4) unsigned DEFAULT NULL,
  `comp_grav` int(4) unsigned DEFAULT NULL,
  `comp_nome` varchar(15) DEFAULT NULL,
  `comp_local` int(4) unsigned NOT NULL DEFAULT '0',
  `comp_fornecedor` int(4) DEFAULT NULL,
  `comp_nf` varchar(30) DEFAULT NULL,
  `comp_coment` text,
  `comp_data` datetime DEFAULT NULL,
  `comp_valor` float DEFAULT NULL,
  `comp_data_compra` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comp_inst` int(4) NOT NULL DEFAULT '0',
  `comp_ccusto` int(6) DEFAULT NULL,
  `comp_tipo_equip` int(4) NOT NULL DEFAULT '0',
  `comp_tipo_imp` int(4) DEFAULT NULL,
  `comp_resolucao` int(4) DEFAULT NULL,
  `comp_polegada` int(4) DEFAULT NULL,
  `comp_fab` int(4) NOT NULL DEFAULT '0',
  `comp_situac` int(4) DEFAULT NULL,
  `comp_reitoria` int(4) DEFAULT NULL,
  `comp_tipo_garant` int(4) DEFAULT NULL,
  `comp_garant_meses` int(4) DEFAULT NULL,
  `comp_assist` int(4) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='Tabela principal modulo de inventario de computadores';

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`comp_cod`, `comp_inv`, `comp_sn`, `comp_marca`, `comp_mb`, `comp_proc`, `comp_memo`, `comp_video`, `comp_som`, `comp_rede`, `comp_modelohd`, `comp_modem`, `comp_cdrom`, `comp_dvd`, `comp_grav`, `comp_nome`, `comp_local`, `comp_fornecedor`, `comp_nf`, `comp_coment`, `comp_data`, `comp_valor`, `comp_data_compra`, `comp_inst`, `comp_ccusto`, `comp_tipo_equip`, `comp_tipo_imp`, `comp_resolucao`, `comp_polegada`, `comp_fab`, `comp_situac`, `comp_reitoria`, `comp_tipo_garant`, `comp_garant_meses`, `comp_assist`) VALUES
(2, 1, '1', 1, 467, 464, 282, 465, 362, 139, 466, 0, 0, 0, 0, 'CDO-001', 2, -1, '', '', '2010-03-15 16:10:11', 0, '0000-00-00 00:00:00', 10, -1, 1, 3, -1, 3, 65, 1, NULL, -1, -1, -1),
(3, 2, '2', 1, 468, 464, 282, 470, 469, 471, 472, NULL, NULL, NULL, NULL, 'CDO-002', 2, NULL, '', '', '2010-03-15 16:37:40', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(4, 3, '3', 1, 468, 464, 282, 470, 469, 471, 472, NULL, NULL, NULL, NULL, 'CDO-003', 2, NULL, '', '', '2010-03-15 16:51:41', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(5, 4, '4', 1, 477, 473, 482, 478, 474, 479, 475, NULL, NULL, 476, NULL, 'CDO-004', 2, NULL, '', '', '2010-03-15 17:11:18', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(6, 5, '5', 1, 484, 483, 281, 485, 0, 488, 486, 0, 0, 0, 0, 'CDO-005', 2, -1, '', '', '2010-03-17 13:25:07', 0, '0000-00-00 00:00:00', 10, -1, 1, -1, -1, 2, 65, 1, NULL, -1, -1, -1),
(7, 7, '7', 1, 467, 464, 282, 465, 362, 139, 489, NULL, NULL, 424, NULL, 'CDO-007', 2, NULL, '', '', '2010-03-17 16:22:32', 0, '0000-00-00 00:00:00', 10, NULL, 1, 1, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(8, 8, '8', 1, 467, 464, 282, 465, 362, 139, 466, NULL, NULL, NULL, NULL, 'CDO-008', 2, NULL, '', '', '2010-03-17 17:34:32', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(9, 9, '9', 1, 468, 464, 282, 470, 469, 471, 472, NULL, NULL, NULL, NULL, 'CDO-009', 2, NULL, '', '', '2010-03-17 17:37:36', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, NULL, 65, 1, NULL, NULL, NULL, NULL),
(10, 10, '10', 1, 467, 464, 282, 465, 362, 139, 472, NULL, NULL, NULL, NULL, 'CDO-010', 2, NULL, '', '', '2010-03-17 17:39:48', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(11, 11, '11', 1, 490, 464, 282, 491, NULL, 139, 492, NULL, NULL, NULL, NULL, 'CDO-011', 2, NULL, '', '', '2010-03-17 17:47:21', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(12, 13, 'CDO-013', 1, 468, 464, 505, 470, 469, 471, 472, NULL, NULL, NULL, NULL, 'CDO-013', 2, NULL, '', '', '2010-03-23 12:24:13', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(13, 14, 'CDO-014', 1, 522, 521, 482, 523, 474, 479, 524, 192, 0, 0, 0, 'CDO-013', 2, -1, '', '', '2010-03-23 12:34:49', 0, '0000-00-00 00:00:00', 10, -1, 1, -1, -1, 3, 65, 1, NULL, -1, -1, -1),
(14, 15, 'CDO-015', 1, 467, 525, 509, 526, 362, 488, 0, 0, 0, 527, 0, 'CDO-015', 2, -1, '', '', '2010-03-23 13:13:41', 0, '0000-00-00 00:00:00', 10, -1, 1, -1, -1, 3, 65, 1, NULL, -1, -1, -1),
(15, 16, 'CDO-016', 1, 467, 464, 505, 465, 362, 139, 466, NULL, NULL, NULL, NULL, 'CDO-016', 2, NULL, '', '', '2010-03-23 13:22:46', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(16, 17, 'CDO-017', 1, 467, 464, 505, 465, 362, 139, 466, NULL, NULL, NULL, NULL, 'CDO-017', 2, NULL, '', '', '2010-03-23 13:25:34', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL),
(17, 18, 'CDO-018', 1, 467, 464, 504, 465, 362, 488, 466, NULL, NULL, NULL, NULL, 'CDO-018', 2, NULL, '', '', '2010-03-23 13:30:11', 0, '0000-00-00 00:00:00', 10, NULL, 1, NULL, NULL, 3, 65, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipxpieces`
--

CREATE TABLE IF NOT EXISTS `equipxpieces` (
`eqp_id` int(4) NOT NULL,
  `eqp_equip_inv` int(6) NOT NULL,
  `eqp_equip_inst` int(4) NOT NULL,
  `eqp_piece_id` int(6) NOT NULL,
  `eqp_piece_modelo_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de associacao de equipamentos com componentes';

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE IF NOT EXISTS `estoque` (
`estoq_cod` int(4) NOT NULL,
  `estoq_tipo` int(4) NOT NULL DEFAULT '0',
  `estoq_desc` int(4) NOT NULL DEFAULT '0',
  `estoq_sn` varchar(30) DEFAULT NULL,
  `estoq_local` int(4) NOT NULL DEFAULT '0',
  `estoq_comentario` varchar(250) DEFAULT NULL,
  `estoq_tag_inv` int(6) DEFAULT NULL,
  `estoq_tag_inst` int(6) DEFAULT NULL,
  `estoq_nf` int(15) DEFAULT NULL,
  `estoq_warranty` int(3) DEFAULT NULL,
  `estoq_value` float DEFAULT NULL,
  `estoq_situac` int(2) DEFAULT NULL,
  `estoq_data_compra` datetime DEFAULT '0000-00-00 00:00:00',
  `estoq_ccusto` int(6) DEFAULT NULL,
  `estoq_vendor` int(6) DEFAULT NULL,
  `estoq_partnumber` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de estoque de itens.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE IF NOT EXISTS `fabricantes` (
`fab_cod` int(4) NOT NULL,
  `fab_nome` varchar(30) NOT NULL DEFAULT '',
  `fab_tipo` int(4) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=latin1 COMMENT='Tabela de fabricantes de equipamentos do Invmon';

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`fab_cod`, `fab_nome`, `fab_tipo`) VALUES
(1, 'Samsung', 1),
(2, 'LG', 1),
(3, 'Philips', 1),
(4, 'Toshiba', 1),
(5, 'Compaq', 1),
(6, 'IBM', 1),
(7, 'Dell', 1),
(8, 'Epson', 1),
(9, 'HP', 1),
(10, 'Lexmark', 1),
(11, 'Ricoh', 1),
(12, 'Creative', 1),
(13, 'Alfa Digital', 1),
(14, 'Itautec', 1),
(15, 'Metron', 1),
(16, 'Netrix', 1),
(17, 'Waytech', 1),
(18, 'Canon', 1),
(19, 'Montada', 1),
(20, '3 Com', 1),
(21, 'SMS', 1),
(22, 'AOC', 1),
(23, 'Brother', 1),
(24, 'Iomega', 1),
(25, 'Bematech', 1),
(26, 'Mark Vision', 1),
(27, 'NK', 1),
(28, 'Icone Sul', 1),
(29, 'TCI', 1),
(30, 'Infoway P75', 1),
(31, 'AdRS', 1),
(32, 'Compudesk', 1),
(33, 'Perto', 1),
(34, 'Okipage', 1),
(35, 'NCS', 1),
(36, 'SACT', 1),
(37, 'GTI', 1),
(38, 'Troni', 1),
(39, 'SID', 1),
(40, 'Yamaha', 1),
(41, 'CP Eletronica', 1),
(42, 'Kingston', 1),
(43, 'Encore', 1),
(44, 'GÃªnius', 1),
(45, 'Planet', 1),
(46, 'Inovar', 1),
(47, 'InFocus', 1),
(48, 'TrendNet', 1),
(49, 'Elebra', 1),
(51, 'EMC', 1),
(52, 'ABC BULL', 1),
(53, 'Facit', 1),
(54, 'VideoComp', 1),
(55, 'Techmedia', 1),
(56, 'Advanced', 1),
(57, 'TDA', 1),
(58, 'Byte On', 1),
(59, 'Acer', 1),
(60, 'Visioneer', 1),
(61, 'Extreme', 1),
(62, 'SUN', 3),
(63, 'D-link', 1),
(64, 'Liesegang', 1),
(65, 'N/A', 1),
(66, 'Sony', 1),
(67, 'Lightware', 1),
(68, 'PowerWare', 1),
(69, 'Ericsson', 1),
(70, 'Cisco', 1),
(71, 'Metrologic', 1),
(72, 'Gertec', 1),
(73, 'Aligent', 1),
(74, 'DIGI', 1),
(75, 'Adobe', 2),
(76, 'Microsoft', 2),
(77, 'EA Games', 2),
(80, 'OpenOffice.org', 2),
(81, 'Trend', 3),
(82, 'Qualcom', 2),
(83, 'Mozilla.org', 2),
(84, 'Adaptec', 2),
(85, 'Macromedia', 2),
(86, 'Ahead', 2),
(90, 'Izsoft', 2),
(91, 'Projeto Livre', 2),
(92, 'Projeto Pessoal', 2),
(93, 'CyberLink', 2),
(94, 'Oracle', 2),
(95, 'SPSS Inc.', 2),
(96, 'Globalink', 2),
(97, 'SulSoft', 2),
(98, 'Corel', 2),
(99, 'Host & Haicol', 2),
(100, 'Borland', 2),
(101, 'Logic Works', 2),
(103, 'Safer-Networking', 2),
(104, 'CM Data', 2),
(105, 'MACECRAFT SOFTWARE', 2),
(106, 'LeaderShip', 1),
(107, 'Justsoft', 2),
(108, 'Xerox', 3),
(109, 'Sharp', 1),
(110, 'Minolta', 1),
(111, 'Micronet', 1),
(112, 'Kodak', 3),
(115, 'USRobotics', 1),
(116, 'EliteGroup Computer Systens', 1),
(117, 'Dr. Hank', 1),
(119, 'MicroPower', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `feriados`
--

CREATE TABLE IF NOT EXISTS `feriados` (
`cod_feriado` int(4) NOT NULL,
  `data_feriado` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `desc_feriado` varchar(40) DEFAULT NULL,
  `fixo_feriado` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de feriados';

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE IF NOT EXISTS `fornecedores` (
`forn_cod` int(4) NOT NULL,
  `forn_nome` varchar(30) NOT NULL DEFAULT '',
  `forn_fone` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='Tabela de fornecedores de equipamentos';

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`forn_cod`, `forn_nome`, `forn_fone`) VALUES
(1, 'Teletex', '0800-55-64-05'),
(2, 'DELL', '0800-90-33-55'),
(3, 'Processor', '0800-13-09-99'),
(4, 'Ingram Micro', '(11) 3677-5800');

-- --------------------------------------------------------

--
-- Estrutura da tabela `global_tickets`
--

CREATE TABLE IF NOT EXISTS `global_tickets` (
  `gt_ticket` int(6) NOT NULL,
  `gt_id` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tabela para permitir acesso global as ocorrencias';

--
-- Extraindo dados da tabela `global_tickets`
--

INSERT INTO `global_tickets` (`gt_ticket`, `gt_id`) VALUES
(1, '31037684733010811718562'),
(2, '252566316020811521829824729'),
(3, '1799518766267892102764531'),
(4, '6616064991292546824950123'),
(5, '44127491621583210016220294'),
(6, '629255217291693419325716'),
(7, '1514572147280111167225184204'),
(8, '134892289018619250268199'),
(9, '140216107109238235968577264'),
(10, '25820611051287621722999210'),
(11, '399526724626726824116117152'),
(12, '240122722202052201682204180'),
(13, '461621025926929411010723069'),
(14, '1001394510210320488282299192'),
(15, '10531380316786121248173'),
(16, '34133782641431861312902995'),
(17, '1717060196282598564296129'),
(18, '14813427206297126602507248'),
(19, '12841203001915618213228180'),
(20, '280100583612110326156226234'),
(21, '4623425517615013288121178266'),
(22, '6152511952698661213293164'),
(23, '17321597195254120143363235'),
(24, '2941417920817115591131213134'),
(25, '134487202173116145270213271'),
(26, '1002692678213084514274298'),
(27, '281238258221120209278120257168'),
(28, '26618366230221250121187248173'),
(29, '2451821711198929229222036249'),
(30, '19416626223914612168108277216'),
(31, '7118422320887268815184144'),
(32, '1846018974722323011927645'),
(33, '23119322071411983281295215'),
(34, '27272296018139283289128113'),
(35, '2622842991719112419724967117'),
(36, '287262232181852011571111569'),
(37, '25277209491871804320228862'),
(38, '1391418339232101328889253'),
(39, '12932135533002903825035119'),
(40, '76249981126323427824528398'),
(41, '25015385282524842268778'),
(42, '3341599026513321712022578'),
(43, '18817422128618722920712132'),
(44, '8022523019124710825122398226'),
(45, '6219121591452661368212242'),
(46, '61711529825482246159173221'),
(47, '2652032311871431384014537254'),
(48, '1620323326125410822335260143'),
(49, '1802121292551314827722540150'),
(50, '259391353712611913252182206'),
(51, '961552091121335721112029539'),
(52, '1351941742275161343113785'),
(53, '144123268194139187267224132'),
(54, '177851491962951065683165206'),
(55, '79200362752312632617873188'),
(56, '235382292601111292732445978'),
(57, '197302327619514410998230260'),
(58, '237149188137234172013209201'),
(59, '24625020342120206123256254157'),
(60, '75138911092606565714889'),
(61, '308626515423811178512549'),
(62, '1479188180197129227141249252'),
(63, '138125211287109123141159193121'),
(64, '83221662715116616647292159'),
(65, '102491006492201227219177286'),
(66, '15145194212192432813511075'),
(67, '1992101024510728999281155116'),
(68, '26227323842842823225812250'),
(69, '1351922013115015238176124234'),
(70, '10397182397142328986288'),
(71, '1265118995126115172214152'),
(72, '11237294290652611970142255'),
(73, '2131096450170114723177234'),
(74, '1141235018620811116595149159'),
(75, '20523421426132517144146149'),
(76, '631672714319824213183101142'),
(77, '42913320027124126727926'),
(78, '18522825499218263125249195216'),
(79, '20059132562185115410716180'),
(80, '24227361218419622616179169'),
(81, '7927119319212223215711585237'),
(82, '284189341948239144901205'),
(83, '11125616829024919554298215256'),
(84, '1372532651642522772853828675'),
(85, '2093010104102582072029181'),
(86, '101915425265299229111232'),
(87, '2811632517721213412150100116'),
(88, '79130148112159137168202157209'),
(89, '1578821427830263147927267'),
(90, '16310869124255235207814473'),
(91, '201002301528417014123912117'),
(92, '1841032512834878229912029'),
(93, '15515318290299491552272894'),
(94, '8955181114618814209297263'),
(95, '122140273286106127217175101179'),
(96, '4111815827327717117277131'),
(97, '13511010752297152876718577'),
(98, '28147148107232581885787'),
(99, '128231167190117911935216113'),
(100, '212925324865265204203187242'),
(101, '1328230181107809678167209'),
(102, '267233284672849816417396244'),
(103, '2461631391172245414812331116'),
(104, '5114617071392801669216318'),
(105, '275872721477922911041255'),
(106, '8393291645619878223271259'),
(107, '10325519721687938247252196'),
(108, '11522325214269126058219178'),
(109, '1677213268261230215257168189'),
(110, '25430722491266229261153170'),
(111, '2132881291522884415646292'),
(112, '2062023113921110413196152161'),
(113, '23215539219512827217215787'),
(114, '250110284236266828875181130'),
(115, '254175212154291952637011458'),
(116, '12055982842781129910923994'),
(117, '25169151126296266159102'),
(118, '18013025963171531996530125'),
(119, '29225711229827411880184243'),
(120, '1541611948219118816414528726'),
(121, '6236169217124219264137150123'),
(122, '101234263141127499416213124'),
(123, '203100123992575533253126100'),
(124, '24828625224122610720574130120'),
(125, '1611165719426244284417862'),
(126, '1601784165921810016861192'),
(127, '24923517722425650427035236'),
(128, '2491742972302697626581290180'),
(129, '177202762821045729129729317'),
(130, '265180149612821681187249261'),
(131, '35124231237145119294272296271'),
(132, '166138269231267671878448250'),
(133, '492241591031501672811092'),
(134, '57212122431642622632895397'),
(135, '7227219027818415283137161107'),
(136, '9321258132716724074220239'),
(137, '25610842552412762255220182'),
(138, '151292616374129236107206109'),
(139, '108275266529416016923322745'),
(140, '188270226239205695213653128'),
(141, '147217297181621308352169128'),
(142, '12153269539422326830169129'),
(143, '75220149113271842029427650'),
(144, '121981312051921862921219120'),
(145, '25616829720718811742341343'),
(146, '2421028411230290111164281218'),
(147, '2351892692851678210616113132'),
(148, '402416626723623529110268243'),
(149, '8821154183228154298262157'),
(150, '29614513511655368237194138'),
(151, '18726418716523912822979230233'),
(152, '285256269482688112012886256'),
(153, '11821798212034226936212151'),
(154, '2261681472092042212887272151'),
(155, '25684240888211312226024145'),
(156, '244258801891222611191724296'),
(157, '156290101672223926389279241'),
(158, '13113839286275138224255279145'),
(159, '22220613224251189106237240111'),
(160, '293551432072991031949749276'),
(161, '286801712282011619020316885'),
(162, '64542442281101418815244113'),
(163, '11111664320099121175212264'),
(164, '211519219184290176285266216'),
(165, '10129255275894449234235107'),
(166, '291185111104174208729616055'),
(167, '2579616166285818425998229'),
(168, '279238185226158173253152102296'),
(169, '2752433116674263633623820'),
(170, '1732921841501762181192239210'),
(171, '14120112699205204616578246'),
(172, '11481114177118100249207275261'),
(173, '1711517015526216786297227174'),
(174, '170318341241885226924126'),
(175, '216117292279180589187241179'),
(176, '14625828211751166247122147113'),
(177, '19184221724150254199185134'),
(178, '93289240254724410719669164'),
(179, '2351178820311112583119817'),
(180, '11599188411455116727527'),
(181, '9925311519429415429221617895'),
(182, '4810939278140153411342120'),
(183, '141298205251121189131184143210'),
(184, '203158282247154167108295197148'),
(185, '421691871852995615524410677'),
(186, '62132322861079517884146154'),
(187, '210277391492881710714523941'),
(188, '12518278018421823567198278'),
(189, '23610318823205147251925956'),
(190, '253187165295159148178228188213'),
(191, '277298127616022594555'),
(192, '267174114941852212441320487'),
(193, '18415943131573722129470194'),
(194, '154080115138143131334249'),
(195, '2111141931572115154138149104'),
(196, '10254290124273531831240193'),
(197, '123266421964330018483166'),
(198, '233276103174403328568183174'),
(199, '1242692792538529429322750299'),
(200, '2501562661341342362067528'),
(201, '27842243704921315120493218'),
(202, '1301291622752521123208149223'),
(203, '29253724117092143277108191'),
(204, '220641097686193642231238'),
(205, '1801602611563920921218217258'),
(206, '1602926188863616944170116'),
(207, '2131786424012317068234276'),
(208, '2623611329520014725920010115'),
(209, '2935228292412575107136256'),
(210, '2771472192141719613092224'),
(211, '11827123119122846280291270192'),
(212, '2932582921791714827619643285'),
(213, '91150109277611322708814034'),
(214, '13774281522752522683029478'),
(215, '42134292159602023274186264'),
(216, '126521001322014329024912776'),
(217, '2731602621461431512641033214'),
(218, '11820953192501298135205293'),
(219, '12472384418550172151152215'),
(220, '52244211300515997181105176'),
(221, '592062452202042551442659499'),
(222, '274455527318143942022779'),
(223, '100761901942401262396027168'),
(224, '7925117249521674313047114'),
(225, '1801146212011110985127156'),
(226, '2091632652742497512018516143'),
(227, '23732178156652811953911634'),
(228, '1941431781402551742346288270'),
(229, '2082941529327412333813349'),
(230, '138157131223811919920519898'),
(231, '42823136187635996191125'),
(232, '662676717187114183277295'),
(233, '571581191021191382164216768'),
(234, '2896213517518619491205227148'),
(235, '241228551941792341093913550'),
(236, '2582351452402959269259154236'),
(237, '1882841421272661822278812892'),
(238, '16112266832625018218979191'),
(239, '151261237177635219615619750'),
(240, '1855910811666722862041773'),
(241, '10024929418811818225923153107'),
(242, '113151881701267815741417'),
(243, '24377270151201991201235290'),
(244, '26492601411125511325023011'),
(245, '227552919728674282435269'),
(246, '111270824925144231167950'),
(247, '11619719384136167107130171253'),
(248, '9011112994942533916265125'),
(249, '4125987213256168219261284153'),
(250, '24420124143672322561676278'),
(251, '894056223234179115268818'),
(252, '2262521452582868332244945'),
(253, '27817624492231188236543844'),
(254, '144431613784728817015799'),
(255, '1412413828019212526717019271'),
(256, '1642852001118125856140184166'),
(257, '2255222025710619637866118'),
(258, '144114184112120199162254119'),
(259, '251122261204217942484261183'),
(260, '18517011021452632713218238'),
(261, '71211142301363412413618579'),
(262, '27371001341979327238120101'),
(263, '23261701431682519376219260'),
(264, '250277117734170289131160138'),
(265, '28019726779222142266155145110'),
(266, '106285262139116152111114103'),
(267, '2601975019944128278229274143'),
(268, '9052772993724026116027874'),
(269, '5918147221072001385516086'),
(270, '14016672236251101528485170'),
(271, '931382542871911971466226532'),
(272, '114177836622891214135173213'),
(273, '8711218354456279278180279'),
(274, '1162711022246177844616113'),
(275, '109120189319657291212201199'),
(276, '24523921228922412834114258170'),
(277, '2846216229172241322025672'),
(278, '352233316422713011219526340'),
(279, '13823519299226881105110100'),
(280, '264781131726223747266286239'),
(281, '142271292379162201563237'),
(282, '871692393770221556785'),
(283, '1559725155027015425415936'),
(284, '2367711343132211921406232'),
(285, '19916726329280243122293280144'),
(286, '58565346193253212106295116'),
(287, '1142152001425415671145284163'),
(288, '2589817425128336198714479'),
(289, '219160238147824827025382116'),
(290, '12415798273161771282228644'),
(291, '107062236127127289121132152'),
(292, '236638513917199163269219171'),
(293, '1665527227742719020722065'),
(294, '1006213291277257239239198179'),
(295, '13457542792282242482398260'),
(296, '1418410428721811295170253'),
(297, '127592471681792102162622897'),
(298, '17931262501352811611292267'),
(299, '10428167236924710824231'),
(300, '23416828669122951981307485'),
(301, '295127961066378298270144173'),
(302, '28119451118255216244174129146'),
(303, '18928251242181298529081198'),
(304, '211271212150215187260285134156'),
(305, '27620311726826812461226206166'),
(306, '1551971712081282512232601105'),
(307, '29819425311947386294155263'),
(308, '21020329815916222010796166285'),
(309, '13226214127830187269230214'),
(310, '7324868243159262172104682'),
(311, '2202802892334320824839203198'),
(312, '21114630335768140384176'),
(313, '284189168811814825425125953'),
(314, '11221810768502956643589'),
(315, '68512912718722920072148270'),
(316, '3710344218413323829426176'),
(317, '291270241122501361871624186'),
(318, '98224297160188208476512388'),
(319, '7328648477222311213428516'),
(320, '1311034635210141259585347'),
(321, '324413116612131181855689'),
(322, '274238424329623723523392179'),
(323, '761592013012514812318744175'),
(324, '9319327415423211228179288189'),
(325, '128209371421692882178058142'),
(326, '21622817210825148484158242'),
(327, '1361421562952802282213221258'),
(328, '254266116179474219177225246'),
(329, '221295237159182152202853242'),
(330, '914366812093554140265111'),
(331, '2241262601761922113318298287'),
(332, '196332686217055223170210160'),
(333, '10023413156157332170105237'),
(334, '11122592524413314287821'),
(335, '23313825516510119166208233256'),
(336, '15895333328317765227211'),
(337, '28814428322693186902076116'),
(338, '2679297148172161299224275240'),
(339, '2701621822542556521106259190'),
(340, '21511917023013426417027810453'),
(341, '10212250150271403613327561'),
(342, '2642223128429297190216276163'),
(343, '2307634295613427516979300'),
(344, '110273107902982272712293155'),
(345, '1772732842922242052911494063'),
(346, '481752207671510826144233'),
(347, '14094902780194117287288113'),
(348, '531492431016511898251140'),
(349, '1562182191509925742131249191'),
(350, '1342932577419518429514216642'),
(351, '80202451572927853251287259'),
(352, '2751797815018335288107114170'),
(353, '4162242215111180562672767'),
(354, '86632926028026723455260226'),
(355, '734416018272201462125136'),
(356, '6136441179127425447171'),
(357, '11149190173101732927427329'),
(358, '19261256129919230292297242'),
(359, '781272722182652903714727926'),
(360, '1719090882581663720198109'),
(361, '35158255113189871885727353'),
(362, '55195231525020521596216283'),
(363, '404244100260234205289204116'),
(364, '164254175312682112023173'),
(365, '13923325910586169127205257'),
(366, '272131711443333922656659'),
(367, '81262144111966968251215139'),
(368, '151203080110167225861213'),
(369, '6530144265280931832309444'),
(370, '2088513327447448154261104'),
(371, '14913512110619712243273118296'),
(372, '2674912721022113610320445261'),
(373, '247233185531294012257235105'),
(374, '18416152201651451521558'),
(375, '16817722849159267251172129'),
(376, '30882545326713313822169135'),
(377, '8311012323410916915422939226'),
(378, '93262173195117166268191106182'),
(379, '7894263211671114921272266'),
(380, '36329813785709929425334'),
(381, '1231882302604315862102158162'),
(382, '2722802747725758276226227'),
(383, '10610013337431575323922694'),
(384, '45153191639118129203162273'),
(385, '6868123111322614639289123'),
(386, '114981255413923762199192150'),
(387, '1731922552692242771624412645'),
(388, '14740182216241922266014886'),
(389, '248271249541112292328944252'),
(390, '1624223225432472725624418'),
(391, '4016626162918077457254'),
(392, '511282952192112202991618180'),
(393, '126522882331072703992355'),
(394, '41799724215224562234140233'),
(395, '4382123182468420821924294'),
(396, '5023239170312115311860'),
(397, '200214681228112622623140'),
(398, '145322675139123203298145163'),
(399, '771466319592996222134114'),
(400, '33701282515215328026712558'),
(401, '182178120102682671584918864'),
(402, '77118116199178247187104195275'),
(403, '19120789257287293115184919'),
(404, '29219981219129102137261222174'),
(405, '14017016920476533248187258'),
(406, '37101181982042322202885031'),
(407, '293931422252151229971263229'),
(408, '1201661216294731621975531'),
(409, '190111217912463221193187159'),
(410, '27218212519056100475114298'),
(411, '5563270757462219177285259'),
(412, '1589052726428190257115201'),
(413, '8329754276173252311325952'),
(414, '51230152278296843175150127'),
(415, '256239130641142036610216510'),
(416, '15513433176168251134118163'),
(417, '14218895812371218125531'),
(418, '2232902251998889227186112181'),
(419, '271517740522110922271103'),
(420, '152219672021903358230107170'),
(421, '813617051362351173220283'),
(422, '1010912822339272438152152'),
(423, '14224226221378911811566881'),
(424, '1592701918297262168299180160'),
(425, '162261192116228265297526288'),
(426, '2672066779146278197241284250'),
(427, '56149290255228318191249218'),
(428, '12171991392084846155261145'),
(429, '19483191163421421216220123'),
(430, '112358312122920013181100172'),
(431, '14116252282672031601632176'),
(432, '18212229112627715460116103258'),
(433, '199329212025127825260203140'),
(434, '300231336882879411248159'),
(435, '29810110298159552927212167'),
(436, '2193001462371702025521788214'),
(437, '24318061921242096926270228'),
(438, '249109012916716682229126200'),
(439, '1421683113713022329227141198'),
(440, '8224926119525229523577185115'),
(441, '71263972881342527711726641'),
(442, '62287189347618022112313811'),
(443, '2412286151451707424779164'),
(444, '54289302377212810512751189'),
(445, '1021692021416928273273224'),
(446, '142258742631591201212612'),
(447, '160128204270791726221113161'),
(448, '1601211194477983138172266'),
(449, '8117523277227623227353195'),
(450, '55133116652101002719745248'),
(451, '18415733244241901832212296'),
(452, '37214118611881353320147259'),
(453, '17118716910214210218199291262'),
(454, '47241652258320688257269287'),
(455, '20723122548113233280186132203'),
(456, '18515514101100201031641242'),
(457, '1011512392962511311342277224'),
(458, '1144117289165256891259798'),
(459, '12919818011720223518021553279'),
(460, '278232821094018866222155180'),
(461, '285618618116122525911076226'),
(462, '2702664650186290290115150141'),
(463, '139147122032574019034253277'),
(464, '18134223492212172895022256'),
(465, '218223133817195654496'),
(466, '1531120748158264229120283125'),
(467, '1757323017410328427621315027'),
(468, '179791692981672471172359276'),
(469, '109112681482647737141206139'),
(470, '16230172276175237752525087'),
(471, '278153129237249224184823044'),
(472, '29515213120717395213201194217'),
(473, '1342681082699018182172201198'),
(474, '3421023129711225910615234243'),
(475, '263128848225516123222746112'),
(476, '23479180192285325224188110'),
(477, '17819517601011206422529434'),
(478, '11424514926912986612433'),
(479, '21718026225183159272285181273'),
(480, '582517019825022426049285268'),
(481, '5224715395392835649153145'),
(482, '15028221726875447656111169'),
(483, '31201209612621352724469'),
(484, '266439722720527013911619468'),
(485, '19623613110880237197274085'),
(486, '1328922571977512224288122'),
(487, '2372201291431031911775120165'),
(488, '27823948193176371024676'),
(489, '1155206265212251199163184'),
(490, '257931481072632282147254173'),
(491, '16931115279372452822671156'),
(492, '77132188258511326921224881'),
(493, '29414113823216117321583170166'),
(494, '15164132302252086115952186'),
(495, '131224143208602152382857628'),
(496, '1281401592821481022271947769'),
(497, '20229320586512414145114154'),
(498, '521608310022926728019816999'),
(499, '22317716013319526717640270165'),
(500, '225143212022893559243217255'),
(501, '1432817180214615128126590'),
(502, '27719428977205124217155300'),
(503, '1064733106174462318625692'),
(504, '107291236182371153162107268'),
(505, '299461994720319724417213158'),
(506, '52184761401512764033282299'),
(507, '971329526217094148174178109'),
(508, '741220936122139234814161'),
(509, '1211562262722811324926113610'),
(510, '6910717837218992003483285'),
(511, '682543223962801831109751'),
(512, '22926725115111811352128330'),
(513, '421231392372468120316612492'),
(514, '300136234622111085429826724'),
(515, '21894209288792912754921134'),
(516, '38163251782644084199165128'),
(517, '1421964676255115891381234'),
(518, '251137212302642862168797248'),
(519, '126249464995216202163174'),
(520, '33821441561052223730277126'),
(521, '1271992622952309810625858115'),
(522, '2062405921499018814392148'),
(523, '14410744175331291121958141'),
(524, '1202938227212423424536176'),
(525, '2171881112812252762483226416'),
(526, '2677614426843277831461232'),
(527, '26429761211524123508858'),
(528, '241205120175651101120232180'),
(529, '1682641427527716538272109247'),
(530, '3968108184282202661030223'),
(531, '28980154158202106294207237233'),
(532, '1689321312126126211417727824'),
(533, '89312428621327610822338123'),
(534, '1835227625623226952851736'),
(535, '2915126035194847155284226'),
(536, '2671002392973117928523113145'),
(537, '642571762398029314112183'),
(538, '17219013410513023742747355'),
(539, '24269274823021892208145115'),
(540, '10614159612162651087815'),
(541, '103246192242029621219430066'),
(542, '2728023213517358257153968'),
(543, '243461807514518519131139218'),
(544, '13712127416562163053216'),
(545, '82292151748818125314057187'),
(546, '200135312678921616016250230'),
(547, '2652926221857122259138136190'),
(548, '1914639170921829721847129'),
(549, '1992612114326622814612624158'),
(550, '2452413716016315121100239290'),
(551, '127762141621201601161611018'),
(552, '1981011583420210519627215640'),
(553, '10186154484922118651168123'),
(554, '27211879994252225162279265'),
(555, '8417022550210942989320575'),
(556, '88749564202112145175253'),
(557, '15211530010562294167251143122'),
(558, '19140212234193162158177291290'),
(559, '521142682101896312125626143'),
(560, '1991052912493322573125715'),
(561, '485512025416245112173584'),
(562, '3226511020026611260241290'),
(563, '198211894874132769014984'),
(564, '2211561142373718657216226185'),
(565, '1124524011916118485126205277'),
(566, '300169287267292101962862641'),
(567, '85771921878411535117173179'),
(568, '228791221939343101162225'),
(569, '16421492222591291182811558'),
(570, '151231127166164297102922492'),
(571, '2792801512826710023523088'),
(572, '1612376611218027020174190267'),
(573, '7225221763202285230287429'),
(574, '124235612295018611522327455'),
(575, '6710213438209251253220173249'),
(576, '205277253429924477664169'),
(577, '4728313913925312423024713778'),
(578, '2732021586526548273198135257'),
(579, '1972411035972221038187207'),
(580, '27227422615926322513722528058'),
(581, '238238197412559424928414767'),
(582, '196116229146181228285261241112'),
(583, '607324318122189326752130'),
(584, '1776214239199143731421880'),
(585, '1841612857529024097254226'),
(586, '29641522155355311423117'),
(587, '9928871641481212321717272'),
(588, '4960342912252802541766549'),
(589, '27626023621216624244220221110'),
(590, '23350221214472801132031713'),
(591, '12810144195120872791762807'),
(592, '212442686722117324811181117'),
(593, '1441871492234293373181280'),
(594, '7421026218518570167198213177'),
(595, '11426726023523514129035215143'),
(596, '127522681352931121728188'),
(597, '112361511822152537325579'),
(598, '26641213163273217152322418'),
(599, '2281512959811413154943243'),
(600, '8023118310221827227170281265'),
(601, '13711457152291252300250217246'),
(602, '2691276681722777118931171'),
(603, '506719151154770174245166'),
(604, '102632882561192892755334163'),
(605, '2202765246159126179211218160'),
(606, '214510912124229761693235'),
(607, '20118815551996269922833'),
(608, '263518224272922386125113'),
(609, '1326412223126320226116817170'),
(610, '702351442561495412859145114'),
(611, '199334886752345442'),
(612, '508016216420011616717115162'),
(613, '2844175612531142048117133'),
(614, '177193209163220255025420286'),
(615, '57154156160223381237629320'),
(616, '179721501965200101146290284'),
(617, '114237286551929210541278'),
(618, '25625899972284515195184'),
(619, '295254249273298672575358128'),
(620, '2381011581752141256033210276'),
(621, '312902260188195126134217260'),
(622, '205137227233267220160252177168'),
(623, '158143741196143119208299195'),
(624, '22613721425520141223124198165'),
(625, '2912214411315716317729027221'),
(626, '105015410476231102742953'),
(627, '26759266286199181253249121199'),
(628, '1791222472532161625010514459'),
(629, '10841265561871198023840218'),
(630, '61742586310029714818851282'),
(631, '15898822611272791131918136'),
(632, '991522571625411522153143208'),
(633, '190658719799182223562178'),
(634, '194819218323297193180254'),
(635, '7576202205329421713522659'),
(636, '29622732192248115289152255204'),
(637, '15821614313712427282909355'),
(638, '229231245252434499649476'),
(639, '124289722721571452815920630'),
(640, '1702391312082221681422918139'),
(641, '1143221593226671801982276'),
(642, '513820699170242466158147'),
(643, '942412823489254104124283216'),
(644, '222711852372581411908232175'),
(645, '2362429927936232293177278129'),
(646, '12420129821426511129748207105'),
(647, '132187256119192915728222935'),
(648, '1751826227622518518127230144'),
(649, '16220291100221941466898183'),
(650, '20727934181431216202190293'),
(651, '7143226199592882919011515'),
(652, '2052912659317720210150129155'),
(653, '8425183159121206125212273209'),
(654, '8011627722641109260122132117'),
(655, '26313362812291122201173248'),
(656, '3213471101355627197124257'),
(657, '4012525911719726013313213329'),
(658, '1034246751961222898710129'),
(659, '293277117230206149242249154110'),
(660, '92240148224126295225181219197'),
(661, '263611852190182142175279104'),
(662, '501272116913724414019515090'),
(663, '5412920918811127315217183258'),
(664, '10221022380175286122127230231'),
(665, '77242951235819550191150208'),
(666, '157223932372572726795225147'),
(667, '2016066151138984723120715'),
(668, '189137226102122255145109115212'),
(669, '18762221832621412131050177'),
(670, '1022671472827295119063284'),
(671, '1112972101421212294126203130'),
(672, '137620323797523925724633'),
(673, '28120318111726422128111856247'),
(674, '28223154215247522552351198'),
(675, '57741802146179205278209118'),
(676, '2723921657164162200167239102'),
(677, '1697421928625528413822810424'),
(678, '1602981551642161563412862140'),
(679, '2322522429711924022229201289'),
(680, '68299218179251696935198105'),
(681, '15417814120427227622100129107'),
(682, '272251231983443226218195'),
(683, '268141231002044349187169168'),
(684, '2744295173159382956517639'),
(685, '1121222425621010280207143244'),
(686, '2146354212619322526209145'),
(687, '6136155274227247017172156'),
(688, '239131147244209952496183190'),
(689, '294131871831182301369106'),
(690, '21654921971451921910344205'),
(691, '1093281192140102283767173'),
(692, '24743102622691742174949'),
(693, '26424613127620573126591394'),
(694, '20623615621235176316729129'),
(695, '11219818362323116213287295'),
(696, '175150262302021592951714062'),
(697, '17228924219115792495029080'),
(698, '287571772891301752349470205'),
(699, '101293219107319858254140103'),
(700, '2832571872731682716753231139'),
(701, '24343259285162926857126255'),
(702, '2215529248245163191142300154'),
(703, '20428426820371131234672155'),
(704, '216232851279260104164253206'),
(705, '20724428416223118510535156208'),
(706, '137238101130898818310711325'),
(707, '1352872262835213295195143113'),
(708, '238234427824436922923661'),
(709, '1272891102862537421346200129'),
(710, '15414724518290181115746342'),
(711, '232147723013827027010110228'),
(712, '6214921019311131211222216208'),
(713, '1481402458311823285226226263'),
(714, '7429625871921811717891256'),
(715, '163692442741122623027728515'),
(716, '949219322831106271270147141'),
(717, '2917724524938203224782562'),
(718, '59254208962442042682709027'),
(719, '112271292548361189202552'),
(720, '28225820928494155991335171'),
(721, '702461725809818923120168'),
(722, '1492891706617922955024472'),
(723, '751118729126153266188269234'),
(724, '28714510815221428519118930128'),
(725, '771011332511261274132290172'),
(726, '285231182196422314124520295'),
(727, '2461661981264115334215524'),
(728, '12128323342038415329227383'),
(729, '14021522730661415730029575'),
(730, '28625912828989233228138184'),
(731, '7612382287293181237256198194'),
(732, '1832282751271721342671346270'),
(733, '16051111212021221421154118'),
(734, '183166298287243219100118206155'),
(735, '10622317814225120680186244145'),
(736, '11415528721663227132104209138'),
(737, '230257151271248132240174246196'),
(738, '7417090271109291182299291227'),
(739, '298236646620215720319823200'),
(740, '18015158266247288196193183289'),
(741, '233262772278313726715215942'),
(742, '1392192431168196147308996'),
(743, '19724792994220244227172257'),
(744, '442902929017722912919330112'),
(745, '20019656154232105135118184216'),
(746, '24661211464427356296240255'),
(747, '242101311291257325557110278'),
(748, '14453192762032716012510946'),
(749, '381639717216129531205185134'),
(750, '2022421192699054163173271'),
(751, '8049217206254213286253219105'),
(752, '46352402393829719519066262'),
(753, '293139362461644521525922061'),
(754, '151777122075252157246107248'),
(755, '195300245177902321593348143'),
(756, '160262317319691741851784'),
(757, '17220426130687246270212221'),
(758, '23525155261703710121423661'),
(759, '1972111111109864459628616'),
(760, '16628660454029819219138213'),
(761, '2302881386412612344682121'),
(762, '93406719813422913013217911'),
(763, '128216704719412823123229934'),
(764, '621868219181143285476107'),
(765, '15283641291848581228259200'),
(766, '265148442023129715725839121'),
(767, '902741495716818112629763214'),
(768, '112561072342501221013120197'),
(769, '732081872725826818715919418'),
(770, '3228626226511324924621199232'),
(771, '11722614629413269803370169'),
(772, '22189227172131658829325178'),
(773, '11313250292084099234143282'),
(776, '2902491872284519713335119'),
(777, '102872626121028815735284111'),
(778, '1202329735214122225283188'),
(779, '5189661822052241164170149'),
(780, '182216156194612971308586265'),
(781, '6080772019611927727213412'),
(799, '107116512008221414073256116'),
(783, '12424273222238137201274207259'),
(784, '150220144352016321251541'),
(785, '181248122174995225123924768'),
(786, '271166229271277293263105261'),
(787, '813523212212820453872703'),
(788, '1572621508912673143230278177'),
(791, '1491131882051251628518650195'),
(790, '157249260226167298135242141247'),
(792, '121271195120712021941498219'),
(793, '273152101821161822802903423'),
(794, '49411839834279123269274268'),
(795, '10522761662422452911871213'),
(796, '1421882702182702671408021821'),
(804, '3122023514848285162132675'),
(798, '277229309526610726416329249'),
(800, '5284204165180115173191162180'),
(801, '11278300204239915429728292'),
(805, '131813126227527421223230237'),
(803, '185168122278251159134269263118'),
(807, '33245123622514420425192'),
(808, '2191852765166120268280130104'),
(809, '572832931312071281265176232'),
(810, '2172382151241882711590210100'),
(811, '247250718524650260208224115'),
(812, '1082932034024968107534948'),
(813, '181993916819626712219981268'),
(814, '53992931041681442851339770'),
(815, '592752156824836255137293202'),
(816, '21621720426291298505748243'),
(817, '1027718323023248116181300223'),
(818, '135100402262652831292139116'),
(819, '9920624319329914418125519671'),
(820, '30022873107521624257954'),
(821, '1491911099110210427821911950'),
(822, '29516919013722628226670207300'),
(823, '952651274542381276219284'),
(824, '2921621767614918915271256153'),
(825, '71292198217331211022302711'),
(826, '78269187258217202642774123'),
(827, '134181861512771202849024188'),
(828, '2322079894552171044622114'),
(829, '256215488282172179285207176'),
(830, '120691546114759109286212261'),
(831, '280250280151832566256126158'),
(832, '852258041185521921109196'),
(833, '1471291861073115111714643180'),
(834, '2482959337293223154242269185'),
(835, '11627178271214201214226285'),
(836, '312078121061172141247288254'),
(837, '187522062032709014613256184'),
(838, '102481713426925414534244266'),
(839, '19088154156228290771943'),
(840, '1785872285232102167137136127'),
(841, '87131525221332257925316'),
(842, '3237171924028924245279198'),
(843, '1234821522616055195186274141'),
(844, '8612410715301820418714188'),
(845, '1078518582937942209285276'),
(846, '37123319201244140155111134'),
(847, '8140481818229513834179238'),
(848, '2153001016513420623149277118'),
(850, '126299312115417129514028951'),
(851, '2348428115298143239119106196'),
(852, '15252259194298179962365912'),
(863, '205283122024623727341142130'),
(854, '215366124627472162101199146'),
(855, '681866626962238236146226276'),
(856, '19013323107962652383546'),
(857, '192191772111791618628184232'),
(858, '542167111048137125106223196'),
(859, '26113511155220966104136207'),
(860, '29711213252831872898217949'),
(861, '2353318913127017265217284'),
(862, '2682284724331242112117208283'),
(865, '12171056626086125519299'),
(871, '12110611119090671714111294'),
(870, '6453362322202341120863269'),
(869, '2542951942115510712152256102'),
(872, '215411322782610014832178260'),
(873, '268669321712840802122297'),
(874, '95402962261744411121416691'),
(875, '17037576383199214522236'),
(876, '2506123054189109122743820'),
(877, '92204491391442404027978277'),
(878, '1053122310217210390254553'),
(879, '1851711422642819230242175251'),
(880, '23930149165122297827841239'),
(881, '245129211791867219253241220'),
(882, '12921820415546216298202257300'),
(883, '2971206829585244222160211136'),
(884, '33281072971283001825843237'),
(885, '78122310124227520619120838'),
(886, '18091097417314922615823476'),
(887, '2832013823826260259173167113'),
(888, '3911243799423322922423419'),
(889, '10625826825714228219088194159'),
(890, '5718324159187113296215242'),
(891, '8221320821122017813926290149'),
(892, '206301935027810122814513715'),
(893, '2252071592314143312411312'),
(894, '92301722601862113411286111'),
(895, '14726788721417814564118230'),
(896, '1877426318215018206182248138'),
(897, '2121863692541743235119129'),
(898, '218187103120842732442339150'),
(899, '26462181751591852014082178'),
(900, '1441625292472981571935252'),
(901, '48111276233167169133298214252'),
(902, '16770246212091482241329188'),
(903, '6611923536190213264280205290'),
(904, '1191606913313420529216132226'),
(905, '2012828912010827683244120238'),
(906, '16791819347212768160101'),
(907, '17395138411801268133112281'),
(908, '662668222201112126223235103'),
(909, '21224212459121169223180196'),
(910, '2171511702761902421018773242'),
(911, '278162166188123252203252163150'),
(912, '2202331901647902636207269'),
(913, '1508012940160178191015338'),
(914, '5423155896678192981319'),
(915, '15116802964628210961190259'),
(916, '4317229327129961381027191'),
(917, '18120696570186117245119172'),
(918, '762022031964311422073288131'),
(920, '2932471971066320112016127221'),
(921, '131792541471352891255219458'),
(922, '225173201152181305816691'),
(923, '197941465915912735137323'),
(924, '24629021527533300135261138248'),
(925, '12623737224294210653813053'),
(926, '10620292742692627555177280'),
(927, '22117325950242251218177221235'),
(928, '162981434386271123072241'),
(929, '231685613119028453294161250'),
(1003, '1669029566398820997145154'),
(931, '24429929649281845527326118'),
(932, '231532096228212824111069289'),
(933, '299200232262120723539185290'),
(934, '21281852562091752361267'),
(935, '2713129149113401102701997'),
(936, '10928412673235148285184238178'),
(938, '1982847887211761482218199'),
(939, '3001901645628685229217252142'),
(940, '7813063231494820431146175'),
(941, '169113611522723319918130191'),
(942, '11774811619013918081124132'),
(943, '2932708226923727311518827491'),
(944, '231782071501511616929240170'),
(945, '215245247419219528186234250'),
(946, '12592146243125155178100148167'),
(947, '1922881868025511299232223113'),
(948, '2742792071881111271033817'),
(949, '1691312061708332219147202'),
(950, '1918454194751592462268153'),
(951, '1562147413676137161150226'),
(952, '206168478012017426526577282'),
(953, '17717876151187195190215181184'),
(954, '17917881241262411642616220'),
(955, '1222988422210351193192218269'),
(956, '181281197181118171150193182169'),
(957, '1072533624123418610534279166'),
(958, '642641037128825714827185197'),
(959, '2542631191408117120925518716'),
(960, '258513927313315741449689'),
(961, '83121171831211321885322121'),
(962, '791751262082916641179161173'),
(963, '1001641279928520489213238135'),
(964, '28310214113026555159174186284'),
(965, '2576413523148662292807182'),
(966, '1901741474624210411817228379'),
(967, '190259193185252170149199228232'),
(968, '20119917323443198144150163273'),
(969, '58184245381932202151567338'),
(970, '45278298215219289249152142284'),
(971, '17528022826618845205120249269'),
(972, '29106175145701714320914990'),
(973, '124261762652382122385543244'),
(974, '1072021822942741441982488139'),
(975, '2143428329745184316320412'),
(976, '3427829380572128192185161'),
(977, '256149267220128322617177217'),
(978, '4122154140151412023023963'),
(979, '23126725687132130247803138'),
(980, '852491136311819928757198'),
(981, '89116155141221622192225667'),
(982, '24328113926751124462489231'),
(983, '1141601812321198919311116354'),
(985, '2602234216769217168272637'),
(986, '1015184203243160527828531'),
(987, '46884918720989214913132'),
(988, '24467237154217242243137193135'),
(989, '1881212539427916117227538298'),
(990, '12531616056138173241215212'),
(991, '29635724515927820516236289'),
(992, '21121184155127711882822364'),
(993, '237282047418642069223710'),
(994, '10825514518521716722926424221'),
(995, '2036811229813079166158273'),
(996, '205113655910519613929857107'),
(997, '2722031113811030022442219261'),
(998, '15273165206435921283258'),
(999, '19428326627218718259162223117'),
(1000, '16011725127015372499439175'),
(1001, '15719093723621717528264267'),
(1002, '494186571952985423869284'),
(1004, '299531119438106265143242189'),
(1005, '21413617315045170137122199220'),
(1006, '27429791160191173337160132'),
(1007, '19015857185190243195143219261'),
(1053, '302174111145286108260243197'),
(1009, '24011024914920613815585243216'),
(1010, '1792704325516329011870201214'),
(1011, '12029422924128399249235165213'),
(1026, '101252251174284152167057'),
(1013, '1441031138571467787184146'),
(1014, '11176472584015615049110216'),
(1027, '461341851142682601512121729'),
(1016, '210884597581231091831654'),
(1017, '10911762614713017920840121'),
(1018, '5814125027018621156214103227'),
(1019, '27226819421401343148149'),
(1020, '47270237301342809923313152'),
(1021, '1532802032369713523328914463'),
(1022, '2541317623314329029281174291'),
(1023, '26548557312112227296265278'),
(1024, '2781226623613816434294182101'),
(1025, '9765801292272005513328654'),
(1028, '1912119855281503336120'),
(1029, '148237162126814818713026025'),
(1030, '296781522806126811944229278'),
(1031, '200382462381174203123399'),
(1032, '2482670244237263258527106'),
(1033, '722892251542902451644714870'),
(1034, '158616110952231941551546'),
(1035, '155197297954620427914177285'),
(1036, '200281126842345479145188282'),
(1037, '32151118103293169193190153143'),
(1052, '119256420113916626721121039'),
(1039, '2481521801732706110923980116'),
(1040, '151514792134250247257286186'),
(1041, '2602345711821046416618770'),
(1042, '20286180382642822811446352'),
(1043, '27823786127556977144110162'),
(1044, '2344210711571251241062795'),
(1045, '1811921611841712025230124'),
(1046, '11521683121573528114296257'),
(1047, '12236168175250201109293248185'),
(1048, '76942431181719520256194112'),
(1049, '27619044177276223230288248102'),
(1050, '1819012320323241331723486'),
(1051, '117352951952358222684842'),
(1054, '2462969032280158242282113227'),
(1055, '278235171129561052813295244'),
(1056, '144512102219723026141101227'),
(1057, '206191742179826114153237230'),
(1058, '217171542612422420976101276'),
(1059, '239219139187875063180136243'),
(1060, '2673237219237254237117258'),
(1061, '175652512510588181127626'),
(1062, '275143145209227103221288254253'),
(1063, '5723835411762082981121130'),
(1064, '2762022386920417394288148'),
(1065, '10727218027514413931291753'),
(1066, '13510427029917229322117410'),
(1067, '1342902092325074633233238'),
(1068, '163224195221278174241101167297'),
(1069, '2142172331771721392431617718'),
(1070, '9208735826112116253246142'),
(1071, '1022073710417288220137283193'),
(1072, '571631469720717725530144167'),
(1073, '1002407728421326224817828285'),
(1074, '2242395021061712172221474'),
(1075, '128332811983248207239292250'),
(1076, '188992732321151182242116193'),
(1077, '19216479522121752268813770'),
(1078, '129425347611315314345220'),
(1079, '872622091991532713001908077'),
(1080, '22916212127124325817943134292'),
(1081, '1612130871504173231283148'),
(1082, '1322922282692441231825574'),
(1083, '102212401883187221421094'),
(1084, '1188771281772561162232109'),
(1085, '1522702261801581463008822924'),
(1086, '43622916218225116526128259'),
(1087, '161154140156169267105669095'),
(1088, '1289127216418799208160189130'),
(1089, '93226121157922514817962193'),
(1090, '178953921559220669194105'),
(1091, '271622521192421911215414848'),
(1092, '20171794924020327023811913'),
(1093, '270168119158274612882914032'),
(1094, '211642341841072906020019214'),
(1095, '22111154946025323837257243'),
(1096, '27810325320486892394421111'),
(1097, '2846238371611352601268510'),
(1098, '2451522102622481272059082128'),
(1099, '972162872501451115914232131'),
(1100, '529321423419112978187268159'),
(1101, '98991871661721218817693115'),
(1102, '222172012992071351032842727'),
(1103, '6179122156758946259715'),
(1104, '29011284210177118292223137279'),
(1105, '10014919617761951831358462'),
(1106, '2821082892391132485492102245'),
(1107, '25529217252172166160181151'),
(1108, '2116317871134302112157125'),
(1109, '227205273102210194238250224189'),
(1110, '115242126247181994411710625'),
(1111, '9818524316522525227835266144'),
(1112, '109156271831741161192817041'),
(1113, '2802881701202251252794150223'),
(1114, '197235147163286441541503615'),
(1115, '15824839401663836190201191'),
(1116, '26196190166792252806628179'),
(1117, '1182521429422461245234118'),
(1118, '656523730971560116248270'),
(1119, '1102042071222837624482167266'),
(1120, '13215144269105211254195120268'),
(1121, '14544943327012316414926109'),
(1122, '1731272989614516227282282231'),
(1123, '27231161142671456521558252'),
(1124, '281743008115027479274250249'),
(1125, '6717223218318710208186127115'),
(1126, '2821482672471263613915128736'),
(1127, '69681989723621661142554'),
(1128, '221129816219185278249103232'),
(1129, '2637117646110262135135136199'),
(1130, '153127418119328729726147110'),
(1131, '2751365418486141567276177'),
(1132, '288167123122331034070238211'),
(1133, '391062582171472182952824257'),
(1134, '25322612226143475914515655'),
(1135, '156158103290148205157230181254'),
(1136, '218246216180173250247192154153'),
(1137, '611962111626744172190170166'),
(1138, '36101271799139272140186168'),
(1139, '201273471637027143260189162'),
(1140, '29056588992332981763981'),
(1141, '1692426710590752281629694'),
(1142, '32732739916010532146123'),
(1143, '287274915812722156150149'),
(1144, '277175123695924513173109174'),
(1149, '2602172344013419711633235'),
(1147, '2322619210015110717165290114'),
(1148, '2583529616329829263292196182'),
(1150, '14512815110100257281361068'),
(1151, '28218814820511515123918558162'),
(1152, '163185227789122145513895'),
(1153, '201975626224416318214129577'),
(1154, '1638444646329112429161292'),
(1155, '8510813612377258198174125148'),
(1156, '239197834620959278233172108'),
(1157, '1521762085329488207258234214'),
(1158, '19711421920653157122251953'),
(1159, '261273552752461320183172224'),
(1160, '62041799620062511146249'),
(1161, '35124281140193130205181164127'),
(1162, '29914439752010612413224420'),
(1163, '17729042281664211888112143'),
(1164, '18625641118293139711286432'),
(1165, '134141138261942042878725563'),
(1166, '9827485212805559145167175'),
(1167, '163264160839111821278211132'),
(1168, '5817070265251293113134108258'),
(1169, '56702681412526917713319629'),
(1170, '622963624725816811517137246'),
(1171, '671982663171286511010215'),
(1172, '1951532651763622213499137109'),
(1173, '24997197225126244109170289156'),
(1174, '23975591103513859185254133'),
(1175, '77281254158234181123177223152'),
(1176, '792213218268233223112206102'),
(1177, '21523122971852336386219281'),
(1178, '6314132522671283226214146'),
(1179, '726815423782781566925267'),
(1180, '882702462053613026915418365'),
(1181, '78982727843232520623181'),
(1182, '78138292300291269145219292'),
(1183, '106233108238115179546024228'),
(1184, '13927126621520016514912016124'),
(1185, '2382351438611219583199165140'),
(1186, '312319223526219214119170113'),
(1187, '18450661629326062273268119'),
(1188, '11621281712062705110124784'),
(1189, '295227451362272821544314257');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
`hist_cod` int(4) NOT NULL,
  `hist_inv` int(6) NOT NULL DEFAULT '0',
  `hist_inst` int(4) NOT NULL DEFAULT '0',
  `hist_local` int(4) NOT NULL DEFAULT '0',
  `hist_data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='Tabela de controle de histÃ³rico de locais por onde o equipa';

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`hist_cod`, `hist_inv`, `hist_inst`, `hist_local`, `hist_data`) VALUES
(2, 1, 10, 2, '2010-03-15 16:10:11'),
(3, 2, 10, 2, '2010-03-15 16:37:40'),
(4, 3, 10, 2, '2010-03-15 16:51:41'),
(5, 4, 10, 2, '2010-03-15 17:11:18'),
(6, 5, 10, 2, '2010-03-17 13:25:07'),
(7, 7, 10, 2, '2010-03-17 16:22:32'),
(8, 8, 10, 2, '2010-03-17 17:34:32'),
(9, 9, 10, 2, '2010-03-17 17:37:36'),
(10, 10, 10, 2, '2010-03-17 17:39:48'),
(11, 11, 10, 2, '2010-03-17 17:47:21'),
(12, 13, 10, 2, '2010-03-23 12:24:13'),
(13, 14, 10, 2, '2010-03-23 12:34:49'),
(14, 15, 10, 2, '2010-03-23 13:13:41'),
(15, 16, 10, 2, '2010-03-23 13:22:46'),
(16, 17, 10, 2, '2010-03-23 13:25:34'),
(17, 18, 10, 2, '2010-03-23 13:30:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hist_pieces`
--

CREATE TABLE IF NOT EXISTS `hist_pieces` (
`hp_id` int(6) NOT NULL,
  `hp_piece_id` int(6) NOT NULL,
  `hp_piece_local` int(4) DEFAULT NULL,
  `hp_comp_inv` int(6) DEFAULT NULL,
  `hp_comp_inst` int(4) DEFAULT NULL,
  `hp_uid` int(6) NOT NULL,
  `hp_date` datetime NOT NULL,
  `hp_technician` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de histÃ³rico de movimentacÃµes de peÃ§as avulsas';

-- --------------------------------------------------------

--
-- Estrutura da tabela `hw_alter`
--

CREATE TABLE IF NOT EXISTS `hw_alter` (
`hwa_cod` int(4) NOT NULL,
  `hwa_inst` int(4) NOT NULL,
  `hwa_inv` int(6) NOT NULL,
  `hwa_item` int(4) NOT NULL,
  `hwa_user` int(4) NOT NULL,
  `hwa_data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela para armazenar alteracoes de hw';

-- --------------------------------------------------------

--
-- Estrutura da tabela `hw_sw`
--

CREATE TABLE IF NOT EXISTS `hw_sw` (
`hws_cod` int(4) NOT NULL,
  `hws_sw_cod` int(4) NOT NULL DEFAULT '0',
  `hws_hw_cod` int(4) NOT NULL DEFAULT '0',
  `hws_hw_inst` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de relacionamentos entre equipamentos e softwares';

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
`img_cod` int(4) NOT NULL,
  `img_oco` int(4) DEFAULT NULL,
  `img_inst` int(4) DEFAULT NULL,
  `img_inv` int(6) DEFAULT NULL,
  `img_model` int(4) DEFAULT NULL,
  `img_nome` varchar(40) NOT NULL,
  `img_tipo` varchar(20) NOT NULL,
  `img_bin` longblob NOT NULL,
  `img_largura` int(4) DEFAULT NULL,
  `img_altura` int(4) DEFAULT NULL,
  `img_size` bigint(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de imagens anexas aos chamados';

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE IF NOT EXISTS `instituicao` (
`inst_cod` int(4) NOT NULL,
  `inst_nome` varchar(30) NOT NULL DEFAULT '',
  `inst_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Tabela de InstituiÃ§Ãµes Lasalistas';

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`inst_cod`, `inst_nome`, `inst_status`) VALUES
(9, 'LOCAL', 1),
(10, 'REMOTO', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE IF NOT EXISTS `itens` (
`item_cod` int(4) NOT NULL,
  `item_nome` varchar(40) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='Tabela de componentes individuais';

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`item_cod`, `item_nome`) VALUES
(1, 'HD'),
(2, 'Placa de vÃ­deo'),
(3, 'Placa de rede'),
(4, 'Placa de som'),
(5, 'CD-ROM'),
(6, 'Modem'),
(7, 'MemÃ³ria'),
(8, 'DVD'),
(9, 'Gravador'),
(10, 'Placa mÃ£e'),
(11, 'Processador'),
(12, 'Monitor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `licencas`
--

CREATE TABLE IF NOT EXISTS `licencas` (
`lic_cod` int(4) NOT NULL,
  `lic_desc` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Tabela de tipos de licenÃ§as de softwares';

--
-- Extraindo dados da tabela `licencas`
--

INSERT INTO `licencas` (`lic_cod`, `lic_desc`) VALUES
(1, 'Open Source / livre'),
(2, 'Freeware'),
(3, 'Shareware'),
(4, 'Adware'),
(5, 'Contrato'),
(6, 'Comercial'),
(7, 'OEM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacao`
--

CREATE TABLE IF NOT EXISTS `localizacao` (
`loc_id` int(11) NOT NULL,
  `loc_user` int(11) NOT NULL,
  `local` char(200) DEFAULT NULL,
  `loc_reitoria` int(4) DEFAULT '0',
  `loc_prior` int(4) DEFAULT NULL,
  `loc_dominio` int(4) DEFAULT NULL,
  `loc_predio` int(4) DEFAULT NULL,
  `loc_status` int(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `localizacao`
--

INSERT INTO `localizacao` (`loc_id`, `loc_user`, `local`, `loc_reitoria`, `loc_prior`, `loc_dominio`, `loc_predio`, `loc_status`) VALUES
(61, 64, 'Rio Ocomon', -1, -1, -1, -1, 1),
(62, 64, 'Ocomon', -1, -1, -1, -1, 1),
(63, 64, 'Niteroi - c', -1, -1, -1, -1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lock_oco`
--

CREATE TABLE IF NOT EXISTS `lock_oco` (
`lck_id` int(4) NOT NULL,
  `lck_uid` int(4) NOT NULL,
  `lck_oco` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=475 DEFAULT CHARSET=latin1 COMMENT='Tabela de Lock para chamados em ediÃ§Ã£o';

-- --------------------------------------------------------

--
-- Estrutura da tabela `mailconfig`
--

CREATE TABLE IF NOT EXISTS `mailconfig` (
`mail_cod` int(4) NOT NULL,
  `mail_issmtp` int(1) NOT NULL DEFAULT '1',
  `mail_host` varchar(40) NOT NULL DEFAULT 'mail.smtp.com',
  `mail_isauth` int(1) NOT NULL DEFAULT '0',
  `mail_user` varchar(40) DEFAULT NULL,
  `mail_pass` varchar(50) DEFAULT NULL,
  `mail_from` varchar(40) NOT NULL DEFAULT 'ocomon@yourdomain.com',
  `mail_ishtml` int(1) NOT NULL DEFAULT '1',
  `mail_from_name` varchar(30) NOT NULL DEFAULT 'SISTEMA_OCOMON'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabela de configuracao para envio de e-mails';

--
-- Extraindo dados da tabela `mailconfig`
--

INSERT INTO `mailconfig` (`mail_cod`, `mail_issmtp`, `mail_host`, `mail_isauth`, `mail_user`, `mail_pass`, `mail_from`, `mail_ishtml`, `mail_from_name`) VALUES
(1, 0, '74.55.57.179', 0, 'teste@ocomon.com.br', '1234', 'teste@ocomon.com.br', 1, 'OCOMON FMBP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mail_hist`
--

CREATE TABLE IF NOT EXISTS `mail_hist` (
`mhist_cod` int(6) NOT NULL,
  `mhist_oco` int(6) NOT NULL,
  `mhist_listname` varchar(150) NOT NULL,
  `mhist_address` text NOT NULL,
  `mhist_address_cc` text,
  `mhist_subject` varchar(40) NOT NULL,
  `mhist_body` text NOT NULL,
  `mhist_date` datetime NOT NULL,
  `mhist_technician` int(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabela de histÃ³rico de emails enviados';

--
-- Extraindo dados da tabela `mail_hist`
--

INSERT INTO `mail_hist` (`mhist_cod`, `mhist_oco`, `mhist_listname`, `mhist_address`, `mhist_address_cc`, `mhist_subject`, `mhist_body`, `mhist_date`, `mhist_technician`) VALUES
(1, 515, '', 'teste@ocomon.com.br', '', 'Chamado: 515', 'teste', '2011-02-10 08:23:22', 22),
(2, 588, '', 'teste@ocomon.com.br', '', 'Chamado: 588', 'Alteração da letra referenta a  mudança do ano  2011 para 2012', '2012-01-17 13:08:32', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mail_list`
--

CREATE TABLE IF NOT EXISTS `mail_list` (
`ml_cod` int(4) NOT NULL,
  `ml_sigla` varchar(15) NOT NULL,
  `ml_desc` text NOT NULL,
  `ml_addr_to` text NOT NULL,
  `ml_addr_cc` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de listas de distribuicao';

-- --------------------------------------------------------

--
-- Estrutura da tabela `mail_templates`
--

CREATE TABLE IF NOT EXISTS `mail_templates` (
`tpl_cod` int(4) NOT NULL,
  `tpl_sigla` varchar(10) NOT NULL,
  `tpl_subject` varchar(100) NOT NULL,
  `tpl_msg_html` text NOT NULL,
  `tpl_msg_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de templates de e-mails';

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas_comp`
--

CREATE TABLE IF NOT EXISTS `marcas_comp` (
`marc_cod` int(4) unsigned NOT NULL,
  `marc_nome` varchar(30) NOT NULL DEFAULT '0',
  `marc_tipo` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabela das marcas de computadores';

--
-- Extraindo dados da tabela `marcas_comp`
--

INSERT INTO `marcas_comp` (`marc_cod`, `marc_nome`, `marc_tipo`) VALUES
(1, 'N/A', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE IF NOT EXISTS `materiais` (
`mat_cod` int(4) NOT NULL,
  `mat_nome` varchar(100) NOT NULL DEFAULT '',
  `mat_qtd` int(11) NOT NULL DEFAULT '0',
  `mat_caixa` varchar(30) DEFAULT '',
  `mat_data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mat_obs` varchar(200) NOT NULL DEFAULT '',
  `mat_modelo_equip` int(4) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabela de materiais do Helpdesk';

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos_itens`
--

CREATE TABLE IF NOT EXISTS `modelos_itens` (
`mdit_cod` int(4) NOT NULL,
  `mdit_fabricante` varchar(30) NOT NULL DEFAULT '',
  `mdit_desc` varchar(40) DEFAULT NULL,
  `mdit_desc_capacidade` float DEFAULT NULL,
  `mdit_tipo` int(4) NOT NULL DEFAULT '0',
  `mdit_cod_old` int(4) DEFAULT NULL,
  `mdit_sufixo` varchar(5) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=529 DEFAULT CHARSET=latin1 COMMENT='Tabela de modelos de componentes';

--
-- Extraindo dados da tabela `modelos_itens`
--

INSERT INTO `modelos_itens` (`mdit_cod`, `mdit_fabricante`, `mdit_desc`, `mdit_desc_capacidade`, `mdit_tipo`, `mdit_cod_old`, `mdit_sufixo`) VALUES
(1, 'Seagate', 'IDE 5400rpm', 10.2, 1, 2, 'GB'),
(2, 'Fujitsu', 'IDE', 10, 1, 3, 'GB'),
(3, 'Toshiba', 'IDE', 6, 1, 4, 'GB'),
(4, 'Seagate', 'IDE', 10, 1, 5, 'GB'),
(5, 'Seagate', 'IDE 5400rpm', 40, 1, 17, 'GB'),
(6, 'Quantum', 'IDE', 2, 1, 7, 'GB'),
(7, 'Maxtor', 'IDE 5400rpm', 40, 1, 8, 'GB'),
(8, 'Samsung', 'IDE 5400rpm', 10.2, 1, 9, 'GB'),
(9, 'Quantum', 'IDE', 1.2, 1, 10, 'GB'),
(10, 'Seagate', 'IDE', 1.2, 1, 11, 'GB'),
(11, 'Quantum', 'SCSI', 3, 1, 12, 'GB'),
(12, 'Quantum', 'IDE', 0.6, 1, 13, 'GB'),
(13, 'Western Digital', 'IDE', 1, 1, 14, 'GB'),
(14, 'Western Digital', 'IDE 5400rpm', 20, 1, 15, 'GB'),
(15, 'Fujitsu', 'IDE', 20, 1, 16, 'GB'),
(16, 'Maxtor', 'IDE 5400rpm', 20, 1, 18, 'GB'),
(17, 'Samsung', 'IDE 5400rpm', 20, 1, 19, 'GB'),
(18, 'Western Digital', 'IDE 5400rpm', 40, 1, 20, 'GB'),
(19, 'Seagate', 'IDE 5400rpm', 20, 1, 21, 'GB'),
(20, 'Toshiba', 'IDE 5400rpm', 12, 1, 22, 'GB'),
(21, 'Toshiba', 'IDE 5400rpm', 20, 1, 23, 'GB'),
(22, 'Hitashi', 'IDE 4200rpm', 20, 1, 24, 'GB'),
(23, 'GenÃ©rico', 'IDE 4200rpm', 40, 1, 25, 'GB'),
(24, 'Quantum', 'IDE', 4, 1, 26, 'GB'),
(25, 'Seagate', 'IDE', 4, 1, 27, 'GB'),
(26, 'Maxtor', 'IDE 5400rpm', 4, 1, 28, 'GB'),
(27, 'Western Digital', 'IDE', 1.2, 1, 29, 'GB'),
(28, 'GenÃ©rico', 'M1614TA', 1, 1, 30, 'GB'),
(29, 'Samsung', 'IDE', 2.1, 1, 31, 'GB'),
(30, 'Quantum', 'IDE', 2.1, 1, 32, 'GB'),
(31, 'Quantum', 'IDE', 3.2, 1, 33, 'GB'),
(32, 'Maxtor', 'IDE', 6.5, 1, 34, 'GB'),
(33, 'Seagate', 'IDE', 2.5, 1, 35, 'GB'),
(34, 'GenÃ©rico', 'IDE', 4, 1, 36, 'GB'),
(35, 'Western Digital', 'IDE', 6, 1, 37, 'GB'),
(36, 'Fujitsu', 'IDE', 6, 1, 38, 'GB'),
(37, 'GenÃ©rico', 'IDE', 20, 1, 39, 'GB'),
(38, 'GenÃ©rico', 'IDE', 6, 1, 40, 'GB'),
(39, 'Fujitsu', 'IDE', 1, 1, 41, 'GB'),
(40, 'GenÃ©rico', 'IDE', 3, 1, 42, 'GB'),
(41, 'Samsung', 'Ultra DMA', 40, 1, 43, 'GB'),
(42, 'GenÃ©rico', 'IDE', 2, 1, 44, 'GB'),
(43, 'Quantum', 'IDE', 1, 1, 45, 'GB'),
(44, 'Quantum', 'IDE 5400rpm', 10, 1, 46, 'GB'),
(45, 'Samsung', 'IDE 5400rpm', 5, 1, 47, 'GB'),
(46, 'Paladium', 'IDE 5400rpm', 1.2, 1, 48, 'GB'),
(47, 'GenÃ©rico', 'IDE', 10, 1, 49, 'GB'),
(48, 'Quantum', 'IDE 5400rpm', 3, 1, 50, 'GB'),
(49, 'GenÃ©rico', 'IDE 5400rpm', 30, 1, 51, 'GB'),
(50, 'IBM', 'SCSI', 4.3, 1, 52, 'GB'),
(51, 'Samsung', 'IDE 5400 rpm', 1.6, 1, 53, 'GB'),
(52, 'Samsung', 'IDE 5400 rpm', 9, 1, 54, 'GB'),
(53, 'Seagate', 'IDE 5400 rpm', 8, 1, 55, 'GB'),
(54, 'GenÃ©rico', 'IDE', 15, 1, 56, 'GB'),
(55, 'GenÃ©rico', 'IDE', 1, 1, 57, 'GB'),
(56, 'GenÃ©rico', 'IDE', 0.8, 1, 58, 'GB'),
(57, 'GenÃ©rico', 'IDE 5400 rpm', 0, 1, 59, 'GB'),
(58, 'GenÃ©rico', 'IDE', 0.4, 1, 60, 'GB'),
(59, 'SIS', '6326', NULL, 2, 2, NULL),
(60, 'Trident', 'Blade 3D on Board/AGP 4MB', NULL, 2, 3, NULL),
(61, 'Trident', '9440', NULL, 2, 4, NULL),
(62, 'Trident', '9750 AGP', NULL, 2, 5, NULL),
(63, 'Trident', '9680', NULL, 2, 6, NULL),
(64, 'Cirrus Logic', '9521', NULL, 2, 7, NULL),
(65, 'Cirrus Logic', '9421', NULL, 2, 8, NULL),
(66, 'SIS', '530 on board', NULL, 2, 9, NULL),
(67, 'Intel', '82815 (Dell/HP)', NULL, 2, 10, NULL),
(68, 'Trident', '9000i', NULL, 2, 11, NULL),
(69, 'Trident', '8900 CL/D', NULL, 2, 12, NULL),
(70, 'Cirrus Logic', '5480', NULL, 2, 13, NULL),
(71, 'Nvidia', 'Vanta 16 MB', NULL, 2, 14, NULL),
(72, 'Nvidia', 'Riva TNT2 32MB', NULL, 2, 15, NULL),
(73, 'Via Tech.', 'VT8361/VT8601', NULL, 2, 16, NULL),
(74, 'Intel', '82845G/GL/GE/PE/GV', NULL, 2, 17, NULL),
(75, 'S3', 'Savage /IX W/MV(8MB)', NULL, 2, 18, NULL),
(76, 'Intel', '82810E Integrated', NULL, 2, 19, NULL),
(77, 'ATI', 'Rage Mobility AGP', NULL, 2, 20, NULL),
(78, 'Radeon', 'ATI IGP 340M (Radeon Mobile)', NULL, 2, 21, NULL),
(79, 'SIS', '300/305', NULL, 2, 22, NULL),
(80, 'Cirrus Logic', 'CL-GD5434-HC-C', NULL, 2, 23, NULL),
(81, 'Cirrus Logic', 'CL-GD5422-75A', NULL, 2, 24, NULL),
(82, 'MarkVision', 'MVVEXP01 16Mb', NULL, 2, 25, NULL),
(83, 'SIS', '86C306', NULL, 2, 26, NULL),
(84, 'SIS', '86C201', NULL, 2, 27, NULL),
(85, 'ATI', 'Rage LT PRO PCI', NULL, 2, 28, NULL),
(86, 'Trident', '9660', NULL, 2, 29, NULL),
(87, 'S3', 'Virge PCI 4MB', NULL, 2, 30, NULL),
(88, 'Riva', 'TNT2 32MB AGP', NULL, 2, 31, NULL),
(89, 'S3', 'Virge 86C325', NULL, 2, 32, NULL),
(90, 'Cirrus Logic', '5430', NULL, 2, 33, NULL),
(91, 'Via', 'Savage 4 16Mb', NULL, 2, 34, NULL),
(92, 'ATI', '3D Rage Pro', NULL, 2, 35, NULL),
(93, 'S3', 'ProSavage (16MB)', NULL, 2, 36, NULL),
(94, 'S3', 'ProSavage (8MB)', NULL, 2, 37, NULL),
(95, 'S3', 'ProSavage DDR (8MB)', NULL, 2, 38, NULL),
(96, 'S3', 'Trio64v2-DX/GX (3MB)', NULL, 2, 39, NULL),
(97, 'S3', 'Virge DX/GX (2MB)', NULL, 2, 40, NULL),
(98, 'SIS', '630/730', NULL, 2, 41, NULL),
(99, 'Cirrus Logic', '5428 on board', NULL, 2, 42, NULL),
(100, 'SIS', '5597/5598', NULL, 2, 43, NULL),
(101, 'Cirrus Logic', '5434 PCI', NULL, 2, 44, NULL),
(102, 'Trident', '8400 PCI/AGP', NULL, 2, 45, NULL),
(103, 'IGA', '1682 PCI', NULL, 2, 46, NULL),
(104, 'Intel', '810 Chipset Graphics Driver', NULL, 2, 47, NULL),
(105, 'SIS', 'Integrated Video', NULL, 2, 48, NULL),
(106, 'SIS', '540', NULL, 2, 49, NULL),
(107, '3 Com', '3C 905B', NULL, 3, 2, NULL),
(108, '3 Com', '3c 900 TPO', NULL, 3, 3, NULL),
(109, '3 Com', '3c 590', NULL, 3, 4, NULL),
(110, '3 Com', '3C 905B-TX', NULL, 3, 5, NULL),
(111, '3 Com', '3C 9050TX', NULL, 3, 6, NULL),
(112, 'Intel', 'Pro/100+', NULL, 3, 7, NULL),
(113, '3 Com', '3c 905C-TX', NULL, 3, 8, NULL),
(114, 'Realtek', 'RTL8139 10/100', NULL, 3, 9, NULL),
(115, 'Intel', '82557', NULL, 3, 10, NULL),
(116, 'Intel', 'Pro 100 VM (compaq)', NULL, 3, 11, NULL),
(117, 'Realtek', 'RTL8029', NULL, 3, 12, NULL),
(118, '3 Com', '3c 920 Integrated (Dell)', NULL, 3, 13, NULL),
(119, 'Intel', 'Pro PCI Adapter', NULL, 3, 14, NULL),
(120, 'Intel', 'Pro /1000 (Dell)', NULL, 3, 15, NULL),
(121, 'Intel', 'Pro 100 VE (HP/Compaq)', NULL, 3, 16, NULL),
(122, 'Toshiba', 'PCMCIA ToPIC95-B(3com)', NULL, 3, 17, NULL),
(123, 'Encore', 'PCMCIA 10/100 Base-TX', NULL, 3, 18, NULL),
(124, 'Intel', 'Pro /100 M (Dell)', NULL, 3, 19, NULL),
(125, 'Digitron', 'DEC Chip 21041-PB', NULL, 3, 20, NULL),
(126, '3 Com', '3C 509B', NULL, 3, 21, NULL),
(127, 'AMD', 'AM79C970 (PC NET Family)', NULL, 3, 22, NULL),
(128, 'Winbond', 'W89C940F', NULL, 3, 23, NULL),
(129, 'Digital', 'DC1017BA', NULL, 3, 24, NULL),
(130, 'SIS', 'SIS 900', NULL, 3, 25, NULL),
(131, 'Compex', '100TX', NULL, 3, 26, NULL),
(132, 'Intel', '21140 10/100', NULL, 3, 27, NULL),
(133, 'DEC', 'DC 21041 Ehernet', NULL, 3, 28, NULL),
(134, 'Davicom', 'PCI', NULL, 3, 29, NULL),
(135, 'GenÃ©rico', 'NE2000', NULL, 3, 30, NULL),
(136, 'Via', 'VT6105 RHINE III', NULL, 3, 31, NULL),
(137, 'NE 2000', 'CompatÃƒÂ­vel', NULL, 3, 32, NULL),
(138, 'SIS', '900 10/100', NULL, 3, 33, NULL),
(139, 'VIA', 'Rhine II Fast Ethernet', NULL, 3, 34, NULL),
(140, 'Yes', 'Ne2000 Chipset', NULL, 3, 35, NULL),
(141, 'UMC', 'UM 900 SAF', NULL, 3, 36, NULL),
(142, '3 Com', 'Generic', NULL, 3, 37, NULL),
(143, 'AMD', 'AM 2100', NULL, 3, 38, NULL),
(144, '3Com', 'IIIBusMaster Etherlink', NULL, 3, 39, NULL),
(145, 'Creative', 'SB AWE 64', NULL, 4, 2, NULL),
(146, 'Xwave', 'PCI', NULL, 4, 3, NULL),
(147, 'Yamaha', 'OPL 3 on board', NULL, 4, 4, NULL),
(148, 'Iwill', 'On board', NULL, 4, 5, NULL),
(149, 'C MÃƒÂ©dia', '8738 audio driver on board', NULL, 4, 6, NULL),
(150, 'Forte Media', 'FM 801', NULL, 4, 8, NULL),
(151, 'Yamaha', 'Native DSXG-PCI', NULL, 4, 11, NULL),
(152, 'C MÃƒÂ©dia', 'CMI8738 integrated', NULL, 4, 12, NULL),
(153, 'ESS', 'Maestro technology-2E', NULL, 4, 13, NULL),
(154, 'Acer Labs', 'M5451 AC-link', NULL, 4, 14, NULL),
(155, 'C MÃƒÂ©dia', 'CMI 8330', NULL, 4, 15, NULL),
(156, 'C MÃƒÂ©dia', 'CMI 8338', NULL, 4, 16, NULL),
(157, 'Creative', 'SB 16', NULL, 4, 17, NULL),
(158, 'Creative', 'SB 32', NULL, 4, 18, NULL),
(159, 'Creative', 'VIBRA 16C', NULL, 4, 19, NULL),
(160, 'OPTi', '86C931', NULL, 4, 20, NULL),
(161, 'SIS', '7018', NULL, 4, 21, NULL),
(162, 'Sound Blaster', 'Pro', NULL, 4, 22, NULL),
(163, 'Opti', '82c931', NULL, 4, 23, NULL),
(164, 'Crystal', 'CS4231A-KL', NULL, 4, 24, NULL),
(165, 'Creative', '32x', NULL, 5, 2, NULL),
(166, 'Creative', '36x', NULL, 5, 3, NULL),
(167, 'Max', '42x', NULL, 5, 4, NULL),
(168, 'Max', '50x', NULL, 5, 5, NULL),
(169, 'Creative', '50x', NULL, 5, 6, NULL),
(170, 'Troni', 'CSI-56x', NULL, 5, 7, NULL),
(171, 'Sony', '52x', NULL, 5, 8, NULL),
(172, 'Samsung', '48x', NULL, 5, 9, NULL),
(173, 'LG', '52x', NULL, 5, 10, NULL),
(174, 'GenÃ©rico', '56x', NULL, 5, 11, NULL),
(175, 'Liteon', '48x', NULL, 5, 12, NULL),
(176, 'LG', '48x', NULL, 5, 13, NULL),
(177, 'Max', '48x', NULL, 5, 14, NULL),
(178, 'Max', '44x', NULL, 5, 15, NULL),
(179, 'Creative', '24x', NULL, 5, 16, NULL),
(180, 'Panasonic', '4x', NULL, 5, 17, NULL),
(181, 'Mitsushita', '54x', NULL, 5, 18, NULL),
(182, 'Max', '60', NULL, 5, 19, NULL),
(183, 'ATAPI', '52x', NULL, 5, 20, NULL),
(184, 'Samsung', '8x', NULL, 5, 21, NULL),
(185, 'Max', '56x', NULL, 5, 22, NULL),
(186, 'Mitsumi FX', '54 x', NULL, 5, 23, NULL),
(187, 'Max', '24x', NULL, 5, 24, NULL),
(188, 'PCtel', 'HSP on board', NULL, 6, 2, NULL),
(189, 'Lucent', 'Agere V.92', NULL, 6, 3, NULL),
(190, 'Agere', 'PCI 56k V.92 Soft Moden', NULL, 6, 4, NULL),
(191, 'PCtel', 'HSP56 PCI', NULL, 6, 5, NULL),
(192, 'US Robotics', '56k Fax ext', NULL, 6, 6, NULL),
(193, 'Toshiba', 'internal V.90 56k (built in Lu', NULL, 6, 7, NULL),
(194, 'HSF', 'HSFi v.92 56k', NULL, 6, 8, NULL),
(195, 'ESS', 'ES56STH-PI', NULL, 6, 9, NULL),
(196, 'Motorola', 'SM56 PCI', NULL, 6, 10, NULL),
(197, 'US Robotics', '33.6 voice', NULL, 6, 11, NULL),
(198, 'Toshiba', '8x24x', NULL, 8, 1, NULL),
(199, 'GenÃ©rico(notes)', '24x', NULL, 8, 2, NULL),
(200, 'LG', '50 x Combo', NULL, 8, 3, NULL),
(201, 'Sony', '12x40x', NULL, 8, 4, NULL),
(202, 'LG', '12x8x32x', NULL, 9, 2, NULL),
(203, 'Samsung', '32x10x40x', NULL, 9, 3, NULL),
(204, 'HP', '12x8x32', NULL, 9, 4, NULL),
(205, 'NEC', '48x', NULL, 9, 5, NULL),
(206, 'GenÃ©rico(notes)', '24x', NULL, 9, 6, NULL),
(207, 'TEAC', '4x4x24', NULL, 9, 7, NULL),
(208, 'LG', '24x10x40', NULL, 9, 8, NULL),
(209, 'Mitsumi', '54x', NULL, 9, 9, NULL),
(210, 'Yamaha', '4x4x16', NULL, 9, 10, NULL),
(211, 'GenÃ©rico', 'GCE-8523B', NULL, 9, 11, NULL),
(212, 'LG', '52X24X52X', NULL, 9, 12, NULL),
(213, 'Iwill', 'XA 100 Plus ATX', NULL, 10, 1, NULL),
(214, 'Digitron', 'BB745sV AT', NULL, 10, 3, NULL),
(215, 'ECS-', 'P6IWP-fe', NULL, 10, 4, NULL),
(216, 'Compaq', 'EVO D-300', NULL, 10, 5, NULL),
(217, 'Dell', 'Optiplex GX-150', NULL, 10, 6, NULL),
(218, 'Soyo', 'P4IS2/P4ISR (soyo)', NULL, 10, 7, NULL),
(219, 'Chaintech', '7AIVL (MO07063BCHAE)', NULL, 10, 8, NULL),
(220, 'Dell', 'Computer Corp 03x290', NULL, 10, 9, NULL),
(221, 'HP', 'System Board', NULL, 10, 10, NULL),
(222, 'Toshiba', 'Portable PC', NULL, 10, 11, NULL),
(223, 'Dell', 'Computer Corp C8RP.07W079', NULL, 10, 12, NULL),
(224, 'Compaq', 'EVO D-310', NULL, 10, 13, NULL),
(225, 'Compaq', 'N1020v', NULL, 10, 14, NULL),
(226, 'Amptron', 'PM8400C/8400D/8600B/8600C', NULL, 10, 15, NULL),
(227, 'Amptron', 'PM598', NULL, 10, 16, NULL),
(228, 'Kaimei', 'KM-T5-V2', NULL, 10, 17, NULL),
(229, 'Shuttle', 'HOT-541', NULL, 10, 18, NULL),
(230, 'GenÃ©rico', 'Chipset Intel 82430 FX', NULL, 10, 19, NULL),
(231, 'Hsin Tech', '519/529', NULL, 10, 20, NULL),
(232, 'Gem light', 'GMB-P56IPS', NULL, 10, 21, NULL),
(233, 'Via', 'VT82C42M', NULL, 10, 22, NULL),
(234, 'OPTI Viper', '82C557M', NULL, 10, 23, NULL),
(235, 'GenÃ©rico', 'Chipset SB82371FB', NULL, 10, 24, NULL),
(236, 'GenÃ©rico', 'Chipset SIS 5591', NULL, 10, 25, NULL),
(237, 'PC Chips', 'M598', NULL, 10, 26, NULL),
(238, 'PC Chips', 'M748 LMRT', NULL, 10, 27, NULL),
(239, 'GenÃ©rico', 'Chipset ALi M1531 Aladdin', NULL, 10, 28, NULL),
(240, 'GenÃ©rico', 'Chipset SIS 5597', NULL, 10, 29, NULL),
(241, 'Amptron', 'PM9900', NULL, 10, 30, NULL),
(242, 'Amptron', 'PM9200', NULL, 10, 31, NULL),
(243, 'Amptron', 'PM8800', NULL, 10, 32, NULL),
(244, 'DTK', 'PAM - 0057I - E1', NULL, 10, 33, NULL),
(245, 'Amptron', 'PM 7900/8800', NULL, 10, 34, NULL),
(246, 'GenÃ©rico', 'Chipset Intel Triton 82430VX', NULL, 10, 35, NULL),
(247, 'Fugutech', 'M507', NULL, 10, 36, NULL),
(248, 'PC Chips', 'M715', NULL, 10, 37, NULL),
(249, 'Amptron', 'PM8600A', NULL, 10, 38, NULL),
(250, 'GenÃ©rico', 'Chipset SIS 540', NULL, 10, 39, NULL),
(251, 'GenÃ©rico', 'Chipset Utron VXPRO II', NULL, 10, 40, NULL),
(252, 'GenÃƒÂ©rica', 'Chipset sis530', NULL, 10, 41, NULL),
(253, 'Soyo', '5EH', NULL, 10, 42, NULL),
(254, 'Via', 'VT8364', NULL, 10, 43, NULL),
(255, 'A-Trend', 'ATC-6130', NULL, 10, 44, NULL),
(256, 'Chaintech', '6xxx', NULL, 10, 45, NULL),
(257, 'Chaintech', '7AIV', NULL, 10, 46, NULL),
(258, 'Chaintech', '7AIV5(E)', NULL, 10, 47, NULL),
(259, 'CTX-508', 'Chipset Intel Triton 82430VX', NULL, 10, 48, NULL),
(260, 'ECS', 'K7VMM+', NULL, 10, 49, NULL),
(261, 'GigaByte', 'GA-7VEML', NULL, 10, 50, NULL),
(262, 'MSI', 'MS-6378', NULL, 10, 51, NULL),
(263, 'PcChips', 'M810LR', NULL, 10, 52, NULL),
(264, 'Shuttle', 'HOT-569', NULL, 10, 53, NULL),
(265, 'Soyo', '4SAW', NULL, 10, 54, NULL),
(266, 'GenÃ©rico', 'Chipset Intel FW82371AB', NULL, 10, 55, NULL),
(267, 'PcChips', 'LMR 598', NULL, 10, 56, NULL),
(268, 'Soyo', 'Chipset SIS85c496', NULL, 10, 57, NULL),
(269, 'ALI', 'M1429GA1', NULL, 10, 58, NULL),
(270, 'Soyo', 'Chipset Intel pci 7sB82371FB', NULL, 10, 59, NULL),
(271, 'Elpina', 'PM 9100/Pine PT-7602', NULL, 10, 60, NULL),
(272, 'PcChips', '585 LMR', NULL, 10, 61, NULL),
(273, 'Holco Enterprise', 'Generic', NULL, 10, 62, NULL),
(274, 'Dell', 'Optiplex GX-100', NULL, 10, 63, NULL),
(275, 'Soyo', '7VBA133', NULL, 10, 64, NULL),
(276, 'Amptron', 'PM900', NULL, 10, 65, NULL),
(522, 'GigaByte', 'GA-M61SME-S2L v2', NULL, 10, NULL, ''),
(523, 'nVIDIA', 'GeForce 6100 nForce 405 (256 MB)', NULL, 2, NULL, ''),
(524, 'RAID', 'Espelhando', NULL, 1, NULL, ''),
(525, 'Intel', 'DualCore Pentium D 925, 3000 MHz (15 x 2', NULL, 11, NULL, ''),
(526, 'ATI', 'RADEON 9550', NULL, 2, NULL, ''),
(290, 'Intel', 'Pentium', 166, 11, 2, 'MHZ'),
(291, 'AMD', 'K6-2', 550, 11, 3, 'MHZ'),
(292, 'Intel', 'Pentium III', 1000, 11, 4, 'MHZ'),
(293, 'Intel', 'Pentium IV', 1700, 11, 5, 'MHZ'),
(294, 'AMD', 'K6-2', 300, 11, 6, 'MHZ'),
(295, 'Intel', 'Pentium', 75, 11, 7, 'MHZ'),
(296, 'Intel', 'Pentium', 200, 11, 8, 'MHZ'),
(297, 'Intel', 'Celeron', 600, 11, 9, 'MHZ'),
(298, 'AMD', 'K6-2', 450, 11, 10, 'MHZ'),
(299, 'AMD', 'K6-2', 500, 11, 11, 'MHZ'),
(300, 'Intel', 'Pentium', 133, 11, 12, 'MHZ'),
(301, 'Intel', 'Pentium III', 500, 11, 13, 'MHZ'),
(302, 'Intel', 'Pentium III', 450, 11, 14, 'MHZ'),
(303, 'AMD', 'Athlon', 1300, 11, 15, 'MHZ'),
(304, 'AMD', 'Athlon', 1500, 11, 16, 'MHZ'),
(305, 'AMD', 'Duron', 1100, 11, 17, 'MHZ'),
(306, 'AMD', 'K6-2', 266, 11, 18, 'MHZ'),
(307, 'Intel', 'Celeron', 700, 11, 19, 'MHZ'),
(308, 'Intel', 'Pentium II', 300, 11, 20, 'MHZ'),
(309, 'Intel', 'Pentium III', 900, 11, 21, 'MHZ'),
(310, 'Intel', 'Pentium IV', 1600, 11, 22, 'MHZ'),
(311, 'Intel', 'Pentium IV', 2260, 11, 23, 'MHZ'),
(312, 'Intel', 'Celeron', 1100, 11, 24, 'MHZ'),
(313, 'Intel', 'Pentium III', 700, 11, 25, 'MHZ'),
(314, 'Intel', 'Celeron', 1800, 11, 26, 'MHZ'),
(315, 'Intel', 'Pentium IV', 2000, 11, 27, 'MHZ'),
(316, 'Intel', 'Pentium III', 850, 11, 28, 'MHZ'),
(317, 'Intel', 'Pentium IV', 2600, 11, 29, 'MHZ'),
(318, 'Intel', 'Celereron IV', 1700, 11, 30, 'MHZ'),
(319, 'AMD', 'Athlon', 1400, 11, 31, 'MHZ'),
(320, 'AMD', 'K6-2', 350, 11, 32, 'MHZ'),
(321, 'Intel', 'Pentium MMX', 166, 11, 33, 'MHZ'),
(322, 'Intel', 'Pentium', 100, 11, 34, 'MHZ'),
(323, 'AMD', 'K6', 300, 11, 35, 'MHZ'),
(324, 'Intel', 'Pentium MMX', 233, 11, 36, 'MHZ'),
(325, 'Intel', 'Pentium', 150, 11, 37, 'MHZ'),
(326, 'Intel', 'Pentium MMX', 200, 11, 38, 'MHZ'),
(327, 'AMD', 'K6-2', 380, 11, 39, 'MHZ'),
(328, 'Intel', 'Pentium MMX', 150, 11, 40, 'MHZ'),
(329, 'AMD', 'Athlon', 1333, 11, 41, 'MHZ'),
(330, 'AMD', 'K6-2', 150, 11, 42, 'MHZ'),
(331, 'Intel', 'Celeron', 266, 11, 43, 'MHZ'),
(332, 'AMD', 'K6', 166, 11, 44, 'MHZ'),
(333, 'AMD', 'Duron', 750, 11, 45, 'MHZ'),
(334, 'AMD', 'Duron XP', 1300, 11, 46, 'MHZ'),
(335, 'AMD', 'Athlon XP', 1466, 11, 47, 'MHZ'),
(336, 'AMD', 'Athlon XP', 1100, 11, 48, 'MHZ'),
(337, 'Cyrix', 'DX', 4100, 11, 49, 'MHZ'),
(338, 'IBM', '586', 100, 11, 50, 'MHZ'),
(339, 'Intel', '486', 100, 11, 51, 'MHZ'),
(340, 'AMD', 'K6-2', 400, 11, 52, 'MHZ'),
(341, 'Intel', 'Pentium', 120, 11, 53, 'MHZ'),
(342, 'Intel', 'AC''97 82801BA(m) (Compaq/Dell/', NULL, 4, 7, NULL),
(346, 'Intel Pentium', 'Xeon', 1200, 11, NULL, 'Mhz'),
(345, 'Intel Pentium', 'Xeon', 2200, 11, NULL, 'Mhz'),
(348, 'GenÃ©rico', 'Ultra 3 SCSI 15.000 Rpm', 36, 1, NULL, 'Gb'),
(349, 'N/A', 'Tigon3 10/100/1000', NULL, 3, NULL, NULL),
(350, 'N/A', 'N/A', NULL, 2, NULL, NULL),
(351, 'GenÃ©rico', 'SCSI 10.000 Rpm', 36, 1, NULL, 'GB'),
(352, 'N/A', 'Marvel 10/100/1000', NULL, 3, NULL, NULL),
(353, 'ATI', 'Mach64-GR Graphics Accelerator', NULL, 2, NULL, NULL),
(354, 'N/A', 'N/A', NULL, 10, NULL, NULL),
(355, 'Intel', 'Pentium Xeon', 2400, 11, NULL, 'Mhz'),
(356, 'ATI', 'Rage XL', 8, 2, NULL, 'MB'),
(361, 'ATI', 'LT PRO AGP', 8, 2, NULL, 'MB'),
(362, 'Via Tech', 'AC\\''97 Audio Controller', NULL, 4, 9, NULL),
(363, 'N/A', 'Cabo Paralelo padrÃƒÂ£o', NULL, 12, NULL, NULL),
(364, 'Leadership', 'XPC Stereo', 160, 13, NULL, 'Watts'),
(365, 'Sunshine', 'Lince - toshiba', NULL, 13, NULL, NULL),
(366, 'N/A', 'GenÃƒÂ©rica', NULL, 13, NULL, NULL),
(367, 'Multi-media', 'MS-560', 100, 13, NULL, 'Watts'),
(368, 'NVIDIA', 'GeForce4 MX Integrated', 32, 2, NULL, 'MB'),
(369, 'SoundMAX', 'Digital Audio', NULL, 4, NULL, NULL),
(370, '3Com', '3C920B-EMB Integrated (HP)', NULL, -1, NULL, NULL),
(371, '3Com', '3C920B-EMB Integrated (HP)', NULL, 3, NULL, NULL),
(372, 'Seagate', 'IDE 7200rpm', 40, 1, NULL, 'GB'),
(373, 'AMD', 'Atlhon XP', 1900, 11, NULL, 'Mhz'),
(374, 'HP', '0830h', NULL, 10, NULL, NULL),
(375, 'GenÃ©rico', 'IDE', 0.325, 1, NULL, 'GB'),
(376, 'Intel', '486 DX2', 50, 11, NULL, 'Mhz'),
(377, 'N/A', 'Chips & Tech Accelerator', NULL, 2, NULL, NULL),
(380, 'LG', '16x COMBO 48x24x48x', NULL, 8, NULL, NULL),
(386, 'HP', '16X', NULL, 5, NULL, NULL),
(382, '', 'Dimm', NULL, 14, NULL, NULL),
(383, '', 'Mini-Dimm', NULL, 14, NULL, NULL),
(384, '', 'Serial', NULL, 15, NULL, NULL),
(385, '', 'PS/2', NULL, 15, NULL, NULL),
(387, 'Intel', 'Pentium Pro', 200, 11, NULL, 'MHZ'),
(388, 'GenÃ©rico', 'SCSI', 4, 1, NULL, 'GB'),
(389, 'GenÃ©rico', '8x', NULL, 5, NULL, NULL),
(390, 'Intel', '82443BX', NULL, 10, NULL, NULL),
(391, 'Intel', '82443GX', NULL, 10, NULL, NULL),
(392, 'GenÃ©rico', 'SCSI', 36, 1, NULL, 'GB'),
(393, 'GenÃ©rico', 'SCSI', 8, 1, NULL, 'GB'),
(394, 'GenÃ©rico', 'SCSI', 18, 1, NULL, 'GB'),
(395, '', 'GenÃ©rico', 45, 5, NULL, 'X'),
(396, 'Max', '40x', NULL, 5, NULL, NULL),
(397, 'Intel', 'Pentium III', 350, 11, NULL, 'MHZ'),
(398, 'Intel', 'Pentium II', 350, 11, NULL, 'MHZ'),
(399, 'GenÃ©rico', 'SCSI', 9, 1, NULL, 'GB'),
(400, 'Intel', '82555', NULL, 3, NULL, NULL),
(402, '3Com', '3c 905', NULL, 3, NULL, NULL),
(403, 'GenÃ©rico', '45x', NULL, 5, NULL, NULL),
(404, 'Netgear', 'FA310TX', NULL, 3, NULL, NULL),
(405, 'GenÃ©rico', 'Drive de disquete', NULL, 16, NULL, NULL),
(406, 'Trident', '3D Blade (PCI)', 8, 2, NULL, 'MB'),
(407, 'Mitsumi', 'FX48++M', NULL, 5, NULL, NULL),
(408, 'ATI', 'Radeon IGP 345M', 64, 2, NULL, 'MB'),
(409, 'Legacy Audio Drivers', 'ALI M5451 AC-LINK', NULL, 4, NULL, NULL),
(410, 'Broadcom', '54G Max Performance', NULL, 3, NULL, NULL),
(411, 'Conexant', '56K Aclink Modem', NULL, 6, NULL, NULL),
(412, 'Thoshiba', 'MK4025GAS', 40, 1, NULL, 'GB'),
(413, 'Toshiba', 'SD-R2512 COMBO', NULL, 8, NULL, NULL),
(414, 'Intel', 'Pentium IV A', 2100, 11, NULL, 'MHZ'),
(415, 'n/a', 'Chipset ATI M. Radeon 7000 igp', NULL, 10, NULL, NULL),
(416, 'ATI', 'Rage LT Pro TVOUT', 8, 2, NULL, 'MB'),
(417, 'Intel', 'Pentium IV HT', 2800, 11, NULL, 'Mhz'),
(418, 'Dell', 'Optiplex GX-270', NULL, 10, NULL, NULL),
(419, 'Intel', '82865G Graphics Controller', 64, 2, NULL, 'Mb'),
(420, 'Intel', 'Pro / 1000 MT (Dell)', NULL, 3, NULL, NULL),
(421, 'Intel', 'ACÃ‚Â´97 - 82801EB (Dell GX-270)', NULL, 4, NULL, NULL),
(422, 'Trident', '9685', 2, 2, NULL, 'MB'),
(423, 'Nvidia', 'GeForce4 MX 440 AGP', 64, 2, NULL, 'MB'),
(424, 'Samsung', 'DVD Combo (CDRW) SM-352F', NULL, 8, NULL, NULL),
(425, 'NVIDIA', 'RIVA TNT', 8, 2, NULL, 'MB'),
(426, 'Samsung', 'IDE 7200 RPM', 40, 1, NULL, 'GB'),
(427, 'LG', '52x32x52x', NULL, 9, NULL, NULL),
(428, 'Intel', 'Pentium IV A', 2800, 11, NULL, 'MHz'),
(429, 'Intel', '82845 G Graphics Controller', 64, 2, NULL, 'MB'),
(430, 'nVidia', 'GeForce4 MX 4000', 64, -1, NULL, 'Mb'),
(431, 'NVidia', 'GeForce4 MX 4000', 64, 2, NULL, 'Mb'),
(432, 'GenÃ©rico', 'Intel Brookdale-G I845G', NULL, 10, NULL, NULL),
(433, 'SIS', '7012', NULL, 4, NULL, NULL),
(434, 'Samsung', '7200 RPM', 80, 1, NULL, 'GB'),
(435, 'Samsung', 'IDE 7200rpm', 80, 1, NULL, 'GB'),
(436, 'LG', 'LM-I56N', NULL, 6, NULL, NULL),
(437, 'LG', '16x COMBO 52x32x52x', NULL, 8, NULL, NULL),
(438, 'Asus', 'P4S800', NULL, 10, NULL, NULL),
(501, 'N/A', 'DDR-333', 256, 7, NULL, 'MB'),
(441, 'Pine', '3D Phanton XP-PCI2800', 32, 2, NULL, 'MB'),
(442, 'Intel', 'Celeron', 1300, 11, NULL, 'MHZ'),
(443, 'Intel', 'i810-W83627', NULL, 10, NULL, NULL),
(444, 'Intel', 'Pentium IV', 3000, 11, NULL, 'MHZ'),
(445, 'Dell', 'Optiplex GX 270 chipset i865G', NULL, 10, NULL, NULL),
(446, 'Intel', 'Pro /1000 MT', NULL, 3, NULL, NULL),
(447, 'Western Digital', 'IDE 7200 rpm', 40, 1, NULL, 'GB'),
(448, 'EliteGroup Computer System', 'ESC 651-M', NULL, 10, NULL, NULL),
(449, 'Maxtor', 'IDE 5400 rpm', 30, 1, NULL, 'GB'),
(450, 'FUJITSU', 'IDE 5400', 1.6, 1, NULL, 'GB'),
(451, 'AMD', 'Semprom', 2200, 11, NULL, 'MHZ'),
(452, 'Asus', 'P4S800-MX', NULL, 10, NULL, NULL),
(453, 'SIS', '661FX', 32, 2, NULL, 'MB'),
(454, 'Broadcom', 'NetXtreme 57xx', 1000, 3, NULL, 'MB'),
(455, 'Intel', '82915G/GV/910GL Express', 128, 2, NULL, 'MB'),
(456, 'Dell', 'Optiplex GX-280', NULL, 10, NULL, NULL),
(457, 'Western Digital', 'SATA 7200 rpm', 40, 1, NULL, 'GB'),
(458, 'Intel', 'Xeon FSB 800MHZ', 2800, 11, NULL, 'MHZ'),
(459, 'Dell', 'Pesc 1425', 800, 10, NULL, 'MHZ'),
(460, 'ATI', 'RADEON 7000-M', 16, 2, NULL, 'MB'),
(461, 'Seagate', 'SCSI', 36, 1, NULL, 'GB'),
(462, 'LG', '8x COMBO 24x24x24x', NULL, 8, NULL, NULL),
(463, 'NEC', 'ND-3530A 16XDVDR 4XDVDRW 48XCD', NULL, 8, NULL, NULL),
(464, 'Intel', 'Celeron D331', NULL, 11, NULL, '2666 '),
(465, 'VIA', 'S3G Unichrome PRO', NULL, 2, NULL, ''),
(466, 'Seagate', 'ST380215A Barracuda', NULL, 1, NULL, '80GB'),
(467, 'GigaByte', 'VM800PMC', NULL, 10, NULL, ''),
(468, 'GigaByte', 'GA-8I865GME-775(-RH)', NULL, 10, NULL, ''),
(469, 'Realtek', 'ALC655', NULL, 4, NULL, ''),
(470, 'Intel (R)', ' 82865G Graphics Controller', NULL, 2, NULL, ''),
(471, 'Intel (R)', 'PRO/100 VE Network Connection ', NULL, 3, NULL, ''),
(472, 'MAXTOR', 'STM3802110A (80 GB, 7200 RPM, Ultra-ATA/', NULL, 1, NULL, ''),
(473, 'AMD', 'Athlon LE-1640, 2600 MHz (13 x 200)', NULL, 11, NULL, ''),
(474, 'Realtek', 'ALC662', NULL, 4, NULL, ''),
(475, 'Seagate', 'ST3250820A (250 GB, 7200 RPM, Ultra-ATA/', 250, 1, NULL, 'GB'),
(476, 'LG', 'HL-DT-ST DVD-RAM GH22NP20', NULL, 8, NULL, ''),
(477, 'Phitronics', 'AM2N1K-M Plus', NULL, 10, NULL, ''),
(478, 'nVIDIA', 'GeForce 6100 ', NULL, 2, NULL, ''),
(479, 'nVIDIA', 'nForce Networking Controller', NULL, 3, NULL, ''),
(528, 'LG', 'DVD/RW', NULL, 8, NULL, ''),
(527, 'SAMSUNG', 'DVD/RW', NULL, 8, NULL, ''),
(482, 'N/A', 'DDR2-667', 1, 7, NULL, 'GB'),
(483, 'AMD', 'Athlon XP, 1350 MHz (13.5 x 100) 1500+', NULL, 11, NULL, ''),
(484, 'Asus', 'A7V8X-X', NULL, 10, NULL, ''),
(485, 'nVIDIA', 'GeForce4 MX 4000 (64 MB)', NULL, 2, NULL, ''),
(486, 'Maxtor', '2B020H1 (20 GB, 5400 RPM, Ultra-ATA/100)', NULL, 1, NULL, ''),
(487, 'SAMSUNG', 'SP0411N (40 GB, 7200 RPM, Ultra-ATA/133)', NULL, 1, NULL, ''),
(488, '3Com', 'EtherLink XL 10/100 PCI ', NULL, 3, NULL, ''),
(489, 'Seagate', '	ST340810A (40 GB, 5400 RPM, Ultra-ATA/1', NULL, 1, NULL, ''),
(490, 'GigaByte', 'GA-VM900M v1', NULL, 10, NULL, ''),
(491, 'VIA', 'Chrome9 HC IGP (64 MB)', NULL, 2, NULL, ''),
(492, 'SAMSUNG', 'SP0842N (80 GB, 7200 RPM, Ultra-ATA/133)', NULL, 1, NULL, ''),
(520, 'gfbr', 'rtrt', NULL, 12, NULL, ''),
(494, 'N/A', 'DDR2-800', 1, 7, NULL, 'GB'),
(521, 'AMD', 'DualCore AMD Athlon 64 X2, 2200 MHz (11 ', NULL, 11, NULL, ''),
(502, 'N/A', 'DDR-333', 512, 7, NULL, 'MB'),
(503, 'N/A', 'DDR-333', 1, 7, NULL, 'GB'),
(504, 'N/A', 'DDR-400', 256, 7, NULL, 'MB'),
(505, 'N/A', 'DDR-400', 512, 7, NULL, 'MB'),
(506, 'N/A', 'DDR-400', 1, 7, NULL, 'GB'),
(507, 'N/A', 'DDR2-533', 256, 7, NULL, 'MB'),
(508, 'N/A', 'DDR2-533', 512, 7, NULL, 'MB'),
(509, 'N/A', 'DDR2-533', 1, 7, NULL, 'GB'),
(510, 'N/A', 'DDR2-533', 2, 7, NULL, 'GB'),
(511, 'N/A', 'DDR2-667', 256, 7, NULL, 'MB'),
(512, 'N/A', 'DDR2-667', 512, 7, NULL, 'MB'),
(513, 'N/A', 'DDR2-667', 2, 7, NULL, 'GB'),
(514, 'N/A', 'DDR2-800', 256, 7, NULL, 'MB'),
(515, 'N/A', 'DDR2-800', 512, 7, NULL, 'MB'),
(516, 'N/A', 'DDR2-800', 2, 7, NULL, 'GB'),
(517, 'N/A', 'DDR3-1066', 512, 7, NULL, 'MB'),
(518, 'N/A', 'DDR3-1066', 1, 7, NULL, 'GB'),
(519, 'N/A', 'DDR3-1066', 2, 7, NULL, 'GB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
`modu_cod` int(4) NOT NULL,
  `modu_nome` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabela de mÃƒÂ³dulos do sistema';

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`modu_cod`, `modu_nome`) VALUES
(2, 'inventÃ¡rio'),
(1, 'ocorrÃªncias');

-- --------------------------------------------------------

--
-- Estrutura da tabela `moldes`
--

CREATE TABLE IF NOT EXISTS `moldes` (
`mold_cod` int(4) NOT NULL,
  `mold_inv` int(6) DEFAULT NULL,
  `mold_sn` varchar(30) DEFAULT NULL,
  `mold_marca` int(4) NOT NULL DEFAULT '0',
  `mold_mb` int(4) DEFAULT NULL,
  `mold_proc` int(4) DEFAULT NULL,
  `mold_memo` int(4) DEFAULT NULL,
  `mold_video` int(4) DEFAULT NULL,
  `mold_som` int(4) DEFAULT NULL,
  `mold_rede` int(4) DEFAULT NULL,
  `mold_modelohd` int(4) DEFAULT NULL,
  `mold_modem` int(4) DEFAULT NULL,
  `mold_cdrom` int(4) DEFAULT NULL,
  `mold_dvd` int(4) DEFAULT NULL,
  `mold_grav` int(4) DEFAULT NULL,
  `mold_nome` varchar(10) DEFAULT NULL,
  `mold_local` int(4) DEFAULT NULL,
  `mold_fornecedor` int(4) DEFAULT NULL,
  `mold_nf` varchar(30) DEFAULT NULL,
  `mold_coment` varchar(200) DEFAULT NULL,
  `mold_data` datetime DEFAULT NULL,
  `mold_valor` float DEFAULT NULL,
  `mold_data_compra` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mold_inst` int(4) DEFAULT NULL,
  `mold_ccusto` int(4) DEFAULT NULL,
  `mold_tipo_equip` int(4) NOT NULL DEFAULT '0',
  `mold_tipo_imp` int(4) DEFAULT NULL,
  `mold_resolucao` int(4) DEFAULT NULL,
  `mold_polegada` int(4) DEFAULT NULL,
  `mold_fab` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de padrÃµes de configuraÃ§Ãµes';

-- --------------------------------------------------------

--
-- Estrutura da tabela `msgconfig`
--

CREATE TABLE IF NOT EXISTS `msgconfig` (
`msg_cod` int(4) NOT NULL,
  `msg_event` varchar(40) NOT NULL DEFAULT 'evento',
  `msg_fromname` varchar(40) NOT NULL DEFAULT 'from',
  `msg_replyto` varchar(40) NOT NULL DEFAULT 'ocomon@yourdomain.com',
  `msg_subject` varchar(40) NOT NULL DEFAULT 'subject',
  `msg_body` text,
  `msg_altbody` text
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='Tabela de configuracao das mensagens de e-mail';

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
`nivel_cod` int(4) NOT NULL,
  `nivel_nome` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Tabela de nÃ­veis de acesso ao invmon';

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`nivel_cod`, `nivel_nome`) VALUES
(1, 'Administrador'),
(2, 'Operador'),
(3, 'Somente Abertura'),
(4, 'Contabilidade'),
(5, 'Desabilitado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocodeps`
--

CREATE TABLE IF NOT EXISTS `ocodeps` (
  `dep_pai` int(6) NOT NULL,
  `dep_filho` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela para controle de sub-chamados';

--
-- Extraindo dados da tabela `ocodeps`
--

INSERT INTO `ocodeps` (`dep_pai`, `dep_filho`) VALUES
(64, 66),
(72, 83),
(131, 138),
(161, 162),
(162, 163),
(163, 164),
(159, 166),
(159, 167),
(159, 168),
(159, 169),
(159, 170),
(159, 171),
(159, 172),
(159, 173),
(159, 180),
(159, 181),
(193, 195),
(193, 196),
(193, 213),
(306, 311),
(311, 312),
(289, 323),
(289, 324),
(289, 336),
(289, 337),
(289, 338),
(289, 339),
(289, 340),
(289, 341),
(289, 342),
(289, 343),
(289, 344),
(289, 349),
(289, 350),
(289, 351),
(289, 352),
(289, 353),
(289, 354),
(289, 355),
(289, 356),
(289, 357),
(289, 358),
(289, 368),
(289, 369),
(289, 370),
(289, 371),
(289, 372),
(289, 373),
(289, 374),
(289, 375),
(289, 376),
(289, 377),
(289, 378),
(289, 379),
(289, 380),
(289, 381),
(289, 382),
(405, 406),
(406, 407),
(464, 496),
(767, 776),
(765, 778),
(1109, 1110),
(1109, 1111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE IF NOT EXISTS `ocorrencias` (
`numero` int(11) NOT NULL,
  `problema` int(11) NOT NULL DEFAULT '0',
  `descricao` text NOT NULL,
  `equipamento` int(6) DEFAULT NULL,
  `sistema` int(11) NOT NULL DEFAULT '0',
  `contato` varchar(100) NOT NULL DEFAULT '',
  `telefone` varchar(40) DEFAULT NULL,
  `local` int(11) NOT NULL DEFAULT '0',
  `operador` int(4) NOT NULL DEFAULT '0',
  `data_abertura` datetime DEFAULT NULL,
  `data_fechamento` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data_atendimento` datetime DEFAULT NULL,
  `instituicao` int(4) DEFAULT NULL,
  `aberto_por` int(4) NOT NULL DEFAULT '0',
  `oco_scheduled` tinyint(1) NOT NULL DEFAULT '0',
  `oco_real_open_date` datetime DEFAULT NULL,
  `oco_script_sol` int(4) DEFAULT NULL,
  `date_first_queued` datetime DEFAULT NULL,
  `oco_prior` int(2) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1190 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ocorrencias`
--

INSERT INTO `ocorrencias` (`numero`, `problema`, `descricao`, `equipamento`, `sistema`, `contato`, `telefone`, `local`, `operador`, `data_abertura`, `data_fechamento`, `status`, `data_atendimento`, `instituicao`, `aberto_por`, `oco_scheduled`, `oco_real_open_date`, `oco_script_sol`, `date_first_queued`, `oco_prior`) VALUES
(1186, 2, 'Teste', 0, 3, 'Rio Ocomon', '1', 61, 63, '2016-11-07 16:19:20', '2016-11-07 16:23:11', 4, '2016-11-07 16:22:15', -1, 64, 0, '2016-11-07 16:19:20', NULL, '2016-11-07 16:19:20', -1),
(1187, 2, 'teste', 0, 3, 'Rio Ocomon', '1', 61, 63, '2016-11-07 16:20:09', NULL, 3, '2016-11-18 10:27:28', 0, 64, 0, '2016-11-07 16:20:09', NULL, '2016-11-07 16:20:09', -1),
(1188, 5, 'teste', 0, 3, 'Rio Ocomon', '1', 61, 63, '2016-11-07 16:21:06', '2016-11-18 10:29:01', 4, '2016-11-07 16:24:52', 9, 64, 0, '2016-11-07 16:21:06', NULL, '2016-11-07 16:21:06', -1),
(1189, 1, 'teste', 0, 3, 'user', '1', 62, 63, '2016-11-19 10:24:23', NULL, 1, '2016-11-18 10:24:37', 0, 63, 0, '2016-11-18 10:23:55', NULL, '2016-11-18 10:22:40', -1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE IF NOT EXISTS `permissoes` (
`perm_cod` int(4) NOT NULL,
  `perm_area` int(4) NOT NULL DEFAULT '0',
  `perm_modulo` int(4) NOT NULL DEFAULT '0',
  `perm_flag` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Tabela para permissoes das Ã¡reas';

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`perm_cod`, `perm_area`, `perm_modulo`, `perm_flag`) VALUES
(6, 5, 2, 1),
(3, 4, 1, 1),
(4, 3, 1, 1),
(5, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `polegada`
--

CREATE TABLE IF NOT EXISTS `polegada` (
`pole_cod` int(4) NOT NULL,
  `pole_nome` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabela de polegadas de monitores de vÃ­deo';

--
-- Extraindo dados da tabela `polegada`
--

INSERT INTO `polegada` (`pole_cod`, `pole_nome`) VALUES
(1, '14 polegadas'),
(2, '15 polegadas'),
(3, '17 polegadas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `predios`
--

CREATE TABLE IF NOT EXISTS `predios` (
`pred_cod` int(4) NOT NULL,
  `pred_desc` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabela de predios - vinculada a tabela de localizaÃƒÂ§ÃƒÂµes';

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridades`
--

CREATE TABLE IF NOT EXISTS `prioridades` (
`prior_cod` int(4) NOT NULL,
  `prior_nivel` varchar(15) NOT NULL DEFAULT '',
  `prior_sla` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Tabela de prioridades para resposta de chamados';

--
-- Extraindo dados da tabela `prioridades`
--

INSERT INTO `prioridades` (`prior_cod`, `prior_nivel`, `prior_sla`) VALUES
(2, 'NÍVEL 1', 18),
(3, 'NÍVEL 2', 19),
(4, 'NÍVEL 3', 20),
(5, 'NÍVEL 4', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prior_atend`
--

CREATE TABLE IF NOT EXISTS `prior_atend` (
`pr_cod` int(2) NOT NULL,
  `pr_nivel` int(2) NOT NULL,
  `pr_default` tinyint(1) NOT NULL DEFAULT '0',
  `pr_desc` varchar(50) NOT NULL DEFAULT '#CCCCCC',
  `pr_color` varchar(7) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Tabela de prioridades para atendimento dos chamados';

--
-- Extraindo dados da tabela `prior_atend`
--

INSERT INTO `prior_atend` (`pr_cod`, `pr_nivel`, `pr_default`, `pr_desc`, `pr_color`) VALUES
(1, 1, 0, 'URGENTE', '#CC0000'),
(2, 2, 0, 'ALTO', '#FFFF00'),
(3, 3, 0, 'NORMAL', '#006600'),
(4, 4, 0, 'BAIXA', '#66CC99'),
(5, 5, 0, 'MÍNIMA', '#FFFF99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prior_nivel`
--

CREATE TABLE IF NOT EXISTS `prior_nivel` (
`prn_cod` int(2) NOT NULL,
  `prn_level` int(2) NOT NULL,
  `prn_used` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Niveis sequenciais para ordem de atendimento';

--
-- Extraindo dados da tabela `prior_nivel`
--

INSERT INTO `prior_nivel` (`prn_cod`, `prn_level`, `prn_used`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `problemas`
--

CREATE TABLE IF NOT EXISTS `problemas` (
`prob_id` int(11) NOT NULL,
  `problema` varchar(100) NOT NULL DEFAULT '',
  `prob_area` int(4) DEFAULT NULL,
  `prob_sla` int(4) DEFAULT NULL,
  `prob_tipo_1` int(4) DEFAULT NULL,
  `prob_tipo_2` int(4) DEFAULT NULL,
  `prob_tipo_3` int(4) DEFAULT NULL,
  `prob_alimenta_banco_solucao` int(1) NOT NULL DEFAULT '1' COMMENT 'Flag para gravar a solucao ou nao',
  `prob_descricao` text COMMENT 'Descricao do tipo de problema'
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `problemas`
--

INSERT INTO `problemas` (`prob_id`, `problema`, `prob_area`, `prob_sla`, `prob_tipo_1`, `prob_tipo_2`, `prob_tipo_3`, `prob_alimenta_banco_solucao`, `prob_descricao`) VALUES
(1, 'HARDWARE', 3, 8, -1, -1, -1, 1, NULL),
(2, 'SOFTWARE', 3, 8, -1, -1, -1, 1, NULL),
(3, 'REDE', 3, 5, -1, -1, -1, 1, NULL),
(4, 'SERVIDOR', 3, 5, -1, -1, -1, 1, NULL),
(5, 'CAMERAS', 3, 8, -1, -1, -1, 1, NULL),
(6, 'MUDANÇA', 3, 10, -1, -1, -1, 1, '<br />');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prob_tipo_1`
--

CREATE TABLE IF NOT EXISTS `prob_tipo_1` (
`probt1_cod` int(4) NOT NULL,
  `probt1_desc` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prob_tipo_1`
--

INSERT INTO `prob_tipo_1` (`probt1_cod`, `probt1_desc`) VALUES
(1, 'Computador Não Liga.'),
(2, 'Sem Vídeo.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prob_tipo_2`
--

CREATE TABLE IF NOT EXISTS `prob_tipo_2` (
`probt2_cod` int(4) NOT NULL,
  `probt2_desc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prob_tipo_3`
--

CREATE TABLE IF NOT EXISTS `prob_tipo_3` (
`probt3_cod` int(4) NOT NULL,
  `probt3_desc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prob_x_script`
--

CREATE TABLE IF NOT EXISTS `prob_x_script` (
`prscpt_id` int(4) NOT NULL,
  `prscpt_prob_id` int(4) NOT NULL,
  `prscpt_scpt_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Scripts por problemas';

-- --------------------------------------------------------

--
-- Estrutura da tabela `reitorias`
--

CREATE TABLE IF NOT EXISTS `reitorias` (
`reit_cod` int(4) NOT NULL,
  `reit_nome` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabela de reitorias do UniLasalle';

--
-- Extraindo dados da tabela `reitorias`
--

INSERT INTO `reitorias` (`reit_cod`, `reit_nome`) VALUES
(3, 'werwer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resolucao`
--

CREATE TABLE IF NOT EXISTS `resolucao` (
`resol_cod` int(4) NOT NULL,
  `resol_nome` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabela de resoluÃ§Ãµes para scanners';

--
-- Extraindo dados da tabela `resolucao`
--

INSERT INTO `resolucao` (`resol_cod`, `resol_nome`) VALUES
(1, '9600 DPI'),
(2, '2400 DPI'),
(3, '1200 DPI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `scripts`
--

CREATE TABLE IF NOT EXISTS `scripts` (
`scpt_id` int(4) NOT NULL,
  `scpt_nome` varchar(35) NOT NULL,
  `scpt_desc` varchar(100) NOT NULL,
  `scpt_script` text NOT NULL,
  `scpt_enduser` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de scripts para solucoes';

-- --------------------------------------------------------

--
-- Estrutura da tabela `script_solution`
--

CREATE TABLE IF NOT EXISTS `script_solution` (
`script_cod` int(4) NOT NULL,
  `script_desc` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COMMENT='Tabela de scripts de solucoes';

--
-- Extraindo dados da tabela `script_solution`
--

INSERT INTO `script_solution` (`script_cod`, `script_desc`) VALUES
(1, 'TROCA DA FONTE DE ALIMENTAÇÃO.'),
(2, 'REINSTALAÇÃO DO SISTEMA OPERACIONAL..'),
(3, 'TROCA DE MEMÓRIA.'),
(4, 'FEITO LIMPEZA DE CONTATOS DE MEMÓRIA.'),
(5, 'TROCA DE MONITOR.'),
(6, 'TROCA DE PLACA DE VÍDEO.'),
(7, 'TROCA DE PLACA MÃE.'),
(8, 'TROCA DA VENTOINHA DA CPU (COOLER).'),
(9, 'TROCA DA VENTOINHA DO GABINETE.'),
(10, 'TROCA DO PROCESSADOR (CPU).'),
(11, 'MANUTENÇÃO PREVENTIVA. (LIMPEZA)'),
(12, 'TROCA DE UNIDADE ÓPTICA (CD/DVD)'),
(13, 'TROCA DE DISCO RÍGIDO (HD).'),
(14, 'TROCA DO CABO FLAT.'),
(15, 'TROCA DO CABO SERIAL (SATA).'),
(16, 'FEITO CONECTORIZAÇÃO COM RJ-45.'),
(17, 'TROCA DE SWITCH.'),
(18, 'FORMATAÇÃO E INSTALAÇÃO DO SISTEMA OPERACIONAL.'),
(19, 'FEITO INSTALAÇÃO DE SISTEMA INTERNO.'),
(20, 'FEITO INSTALAÇÃO DE SOFTWARE.'),
(21, 'MANUTENÇÃO POR ACESSO REMOTO.'),
(22, 'FEITO VARREDURA COM ANTIVÍRUS E/OU SPYWARE.'),
(23, 'FEITO INSTALAÇÃO E/OU CONFIGURAÇÃO DE IMPRESSORA.'),
(24, 'TROCA DE IMPRESSORA.'),
(25, 'TROCA DE TECLADO.'),
(26, 'TROCA DE MOUSE.'),
(27, 'TROCA DE PLACA DE REDE.'),
(28, 'TROCA DE CABO DE FORÇA.'),
(29, 'FEITO MONTAGEM,INSTALAÇÃO E CONFIGURAÇÃO DE NOVO COMPUTADOR.'),
(30, 'MANUTENÇÃO POR TELEFONE.'),
(31, 'Chamado concluído conforme solicitado'),
(32, 'Foi Necessária a reinstalação do sistema operacional Windows, Drivers dos dispositivos de Hardware, aplicativos do usuário, configuração de acesso aos compartilhamentos de arquivos, impressoras e Internet. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistemas`
--

CREATE TABLE IF NOT EXISTS `sistemas` (
`sis_id` int(11) NOT NULL,
  `sistema` varchar(100) DEFAULT NULL,
  `sis_status` int(4) NOT NULL DEFAULT '1',
  `sis_email` varchar(35) DEFAULT NULL,
  `sis_atende` int(1) NOT NULL DEFAULT '1',
  `sis_screen` int(2) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sistemas`
--

INSERT INTO `sistemas` (`sis_id`, `sistema`, `sis_status`, `sis_email`, `sis_atende`, `sis_screen`) VALUES
(1, 'DEFAULT', 1, 'default@yourdomain.com', 1, NULL),
(3, 'Suporte Técnico', 1, 'teste@ocomon.com.br', 1, 5),
(4, 'Clientes', 1, 'teste@ocomon.com.br', 0, 2),
(5, 'Administrativa', 1, 'teste@ocomon.com.br', 0, NULL),
(6, 'Supervisão', 1, 'teste@ocomon.com.br', 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao`
--

CREATE TABLE IF NOT EXISTS `situacao` (
`situac_cod` int(4) NOT NULL,
  `situac_nome` varchar(20) NOT NULL DEFAULT '',
  `situac_desc` varchar(200) DEFAULT NULL,
  `situac_destaque` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Tabela de situaÃ§Ã£o de computadores quanto ao seu funcionam';

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`situac_cod`, `situac_nome`, `situac_desc`, `situac_destaque`) VALUES
(1, 'Operacional', 'Equipamento sem problemas de funcionamento', 0),
(2, 'NÃ£o Operacional', 'Equipamento utilizado apenas para testes de hardware e nÃ£o funcionando', 0),
(3, 'Em manutenção', 'Equipamento aguardando peça para manutenção', 0),
(4, 'Furtado', 'Equipamentos furtados da empresa.', 0),
(5, 'Trocado', 'Equipamento trocado por outro em funÃ§Ã£o da sua garantia.', 0),
(6, 'Aguardando orÃ§ament', 'Aguardando orÃ§amento para conserto', 0),
(7, 'Sucateado', 'Equipamento nÃ£o possui condiÃ§Ãµes para conserto', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sla_out`
--

CREATE TABLE IF NOT EXISTS `sla_out` (
  `out_numero` int(5) NOT NULL COMMENT 'ocorrencias',
  `out_sla` int(1) NOT NULL DEFAULT '0' COMMENT 'se o sla estourou'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela temporaria para controle do sla';

--
-- Extraindo dados da tabela `sla_out`
--

INSERT INTO `sla_out` (`out_numero`, `out_sla`) VALUES
(1189, 0),
(1187, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sla_solucao`
--

CREATE TABLE IF NOT EXISTS `sla_solucao` (
`slas_cod` int(4) NOT NULL,
  `slas_tempo` int(6) NOT NULL DEFAULT '0',
  `slas_desc` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='Tabela de SLAs de tempo de soluÃ§Ã£o';

--
-- Extraindo dados da tabela `sla_solucao`
--

INSERT INTO `sla_solucao` (`slas_cod`, `slas_tempo`, `slas_desc`) VALUES
(1, 15, '15 minutos'),
(2, 30, '30 minutos'),
(3, 45, '45 minutos'),
(4, 60, '1 hora'),
(5, 120, '2 horas'),
(6, 180, '3 horas'),
(7, 240, '4 horas'),
(8, 480, '8 horas'),
(9, 720, '12 horas'),
(10, 1440, '24 horas'),
(11, 2880, '2 dias'),
(12, 4320, '3 dias'),
(13, 5760, '4 dias'),
(14, 10080, '1 semana'),
(15, 20160, '2 semanas'),
(16, 30240, '3 semanas'),
(17, 43200, '1 mÃªs'),
(18, 5, '5 minutos'),
(19, 10, '10 minutos'),
(20, 20, '20 minutos'),
(21, 25, '25 minutos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `softwares`
--

CREATE TABLE IF NOT EXISTS `softwares` (
`soft_cod` int(4) NOT NULL,
  `soft_fab` int(4) NOT NULL DEFAULT '0',
  `soft_desc` varchar(30) NOT NULL DEFAULT '',
  `soft_versao` varchar(10) NOT NULL DEFAULT '',
  `soft_cat` int(4) NOT NULL DEFAULT '0',
  `soft_tipo_lic` int(4) NOT NULL DEFAULT '0',
  `soft_qtd_lic` int(4) DEFAULT NULL,
  `soft_forn` int(4) DEFAULT NULL,
  `soft_nf` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela Softwares do sistema';

-- --------------------------------------------------------

--
-- Estrutura da tabela `solucoes`
--

CREATE TABLE IF NOT EXISTS `solucoes` (
  `numero` int(11) NOT NULL DEFAULT '0',
  `problema` text NOT NULL,
  `solucao` text NOT NULL,
  `data` datetime DEFAULT NULL,
  `responsavel` int(4) NOT NULL DEFAULT '0',
  `responsavelbkp` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solucoes`
--

INSERT INTO `solucoes` (`numero`, `problema`, `solucao`, `data`, `responsavel`, `responsavelbkp`) VALUES
(2, 'Usuário do roteador não esta cadastrado no roteador.', 'Foi solicitado um novo usuário para atenticação, e o mesmo voltou a rotear a internet normalmente', '2009-12-03 12:04:52', 22, NULL),
(14, ' O problema reclamado não foi observado, pois, o atendimento foi feito remotamente e a conexão não caiu em nenhum momento', 'Em todo caso foi feita uma análise da máquina', '2010-01-04 11:13:31', 3, NULL),
(18, 'Tela congelando.', 'Troca de memória.', '2010-01-04 17:11:09', 4, NULL),
(19, 'Atualizava normalmente os endereços de IP gateway e dns, porém não permitia tráfego de pacotes atravéz da rede.', 'Restauração do registro, que provavelmente foi atacado e corrompido por um spyware.\r\n\r\nObs. resolvido por telefone. \r\nInício 8:00 término 9:00', '2010-01-05 09:21:22', 22, NULL),
(21, 'Não consegue abrir arquivo demostrativo de pagamento em pdf.', 'Ativação do adobe reader e associação ao arquivo de demostrativo de pagamento.\r\n\r\nConcluído o chamado atravéz de suporte remoto (logmein).', '2010-01-05 10:27:06', 22, NULL),
(13, 'Computador com fonte inoperante e ventoinha travada.', 'Troca de fonte de alimentação.', '2010-01-05 18:05:50', 2, NULL),
(20, 'Solicitação de instalação do WINDOWS.\r\n', 'Instalação de sistema operacional e configuração.', '2010-01-05 18:10:42', 2, NULL),
(23, 'Não reconhecia Disco Rígido.', 'Feito preventiva, limpeza de contatos e troca de cabo FLAT.', '2010-01-05 18:15:19', 2, NULL),
(22, 'Instalar ALTERDATA.', 'Feito reinstalação de ALTERDATA.', '2010-01-05 18:22:37', 2, NULL),
(24, 'Sistema Operacional lento e sem antivírus.', 'Feito limpeza de arquivos temporários e instalação de antivírus.', '2010-01-05 18:26:04', 2, NULL),
(25, 'Memória com contatos sujos.', 'Feito limpeza de contatos de memória.', '2010-01-08 17:03:24', 2, NULL),
(26, 'Senha do usuário WINDOWS expirada.\r\n', 'Feito a remoção de senha WINDOWS.', '2010-01-08 17:10:12', 2, NULL),
(27, 'Descrição técnica do problema', 'Solução para este problema', '2010-01-08 17:17:15', 1, NULL),
(28, 'Configuração de conta de e-mail no Microsoft Outlook.', 'Feito Configuração de Microsoft Outlook', '2010-01-08 17:22:23', 2, NULL),
(29, 'Sem sinal de vídeo.', 'Limpeza de contatos e RESET na BIOS.', '2010-01-08 17:36:20', 2, NULL),
(34, 'Falha ao enviar impressão.', 'Feito restauração do Sistema Operacional.', '2010-01-11 13:24:45', 2, NULL),
(15, 'As vezes não ligava..', 'Troca de fonte.', '2010-01-11 13:28:17', 4, NULL),
(17, 'Descobrir quais peças tinham problemas.', 'Analise de peças e montagem de uma maquina com as peças boas.', '2010-01-11 13:31:09', 4, NULL),
(35, 'Descrição técnica do problema', 'Solução para este problema', '2010-01-12 14:42:58', 2, NULL),
(30, 'Instalação e migração do sistema Alterdata em um novo servidor na OCG', 'Migração do servidor Alterdata e atualização da versão em todas as estações de trabalho', '2010-01-13 11:08:04', 1, NULL),
(33, 'Aberto em duplicidade.', 'Aberto em duplicidade.', '2010-01-13 11:11:04', 22, NULL),
(36, 'Migração TeraLab - Niterói', 'Migração do servidor TeraLab e estações de trabalho concluída com sucesso.', '2010-01-13 11:20:55', 1, NULL),
(31, 'Migração do Servidor Alterdata', 'Migração do Servidor Alterdata, e atualização das versão do sistema em todos os computadores', '2010-01-13 11:24:20', 22, NULL),
(39, 'Solicitação de instalação de sistema operacional Windows XP.', 'Feito instalação de S.O e programas para o usuário.', '2010-01-13 13:23:53', 2, NULL),
(44, 'Não acessa Alterdata e Internet Explorer com erro.', 'Recuperação de instalação do S.O e refeita a cópia do arquivo de atalho Alterdata (Phd).', '2010-01-13 17:48:57', 2, NULL),
(45, 'Não inicia S.O.', 'Feito reinstalação de sistema Operacional e limpeza dos arquivos temporários.', '2010-01-13 17:51:47', 2, NULL),
(38, 'Lap Top com problema intermitente ao ligar. Não aparece vídeo e não inicia sistema operacional.', 'Orientado ao Sr Júlio à enviar o Lap Top SONY a uma autorizada técnica.', '2010-01-13 17:54:17', 2, NULL),
(46, 'Computador lento.', 'Feito varredura com AntiSpyware, colocação de memória e exclusão de arquivos temporários.\r\nOBS: A memória trocada foi retirada da máquina da Dr. Andre que não estava sendo usado por um longo período.', '2010-01-15 16:36:54', 2, NULL),
(47, 'Computador lento.', 'Feito limpeza de registros, arquivos temporários e varredura com antivírus.', '2010-01-15 16:42:21', 2, NULL),
(50, 'Não acessa página da goldenCross.', 'Feito instalação do IE 7.', '2010-01-26 12:41:50', 2, NULL),
(51, 'HD não reconhecendo na BIOS e com setores defeituosos.', 'HD emcaminhado para recuperação de dados pela CBL.\r\nFeito troca de HD e reinstalação de S.O.\r\nHD utilizado era da máquina da Dr. Andreia que estava inoperante.', '2010-01-26 12:46:25', 2, NULL),
(55, 'Fonte carbonizada e inoperante.', 'Feito substituição de fonte.', '2010-01-26 12:47:58', 2, NULL),
(56, 'Placa mãecom defeito', 'Feito troca de placa mãe,processador, memória e HD. Instalação de windows XP.', '2010-01-29 16:42:10', 2, NULL),
(57, 'Arquivos do Windows XP corrompidos.', 'Feito formatação e instalação de windows XP.', '2010-01-29 16:54:20', 2, NULL),
(58, 'Descrição técnica do problema', 'Feito montagem instalação e configuração deS.o.', '2010-01-29 16:58:30', 2, NULL),
(59, 'Feito montagem,instalação e configuração decomputador.', 'Solução para este problema', '2010-02-01 17:03:24', 2, NULL),
(60, 'Arquivo de S.O corrompido.', 'Feito recuperação de sistema operacional com o ncomando CHKDSK/r.', '2010-02-01 17:06:24', 2, NULL),
(63, 'Fonte com componentes carbonizados.', 'Troca de Fonte.', '2010-02-01 17:13:43', 2, NULL),
(66, 'Feito substituição de equipamento.', 'Solução para este problema', '2010-02-03 18:38:16', 2, NULL),
(64, 'Feito transferencia de dados.', 'Solução para este problema', '2010-02-03 18:39:13', 2, NULL),
(65, 'Feito instalação de impressora.', 'Solução para este problema', '2010-02-03 18:40:28', 2, NULL),
(52, 'Descrição técnica do problema', 'Solução para este problema', '2010-02-05 15:06:56', 4, NULL),
(67, 'Não entra o Windows.', 'Coloquei o hd da Andréia sem formata-la.', '2010-02-05 15:12:18', 4, NULL),
(53, 'Maquina as vezes não entrava no windows.', 'Anti-virus, cleaner e desfragmentação.', '2010-02-05 15:17:08', 4, NULL),
(37, 'Hd com pouco espaço.', 'Computador entrege reinstalado com o Hd de 400 GBs e o Hd antigo ficou no escritório.', '2010-02-05 15:46:32', 4, NULL),
(16, ' Cupom liga,mas não comunica com a serial da placa mãe.', ' Substituição do equipamento', '2010-02-10 10:41:13', 3, NULL),
(40, ' Após troca do Servidor, a  Prosoft dos parou de funcionar.', ' Existiam algumas pastas ocultas que não conseguia-se copiar,porquê a visualização de arquivos ocultos estava sendo bloqueada pelo servidor. Depois de executar o comando REGSVR32  SHELL32.DLL /I, foi possível a visualização dos arquivos ocultos, possibilitando a cópia dos mesmos e solucionando o problema.', '2010-02-10 10:48:30', 3, NULL),
(48, ' Computador infectado com vírus.', ' Reinstalacão do windows e aplicativos.', '2010-02-10 10:50:59', 3, NULL),
(42, ' Migração do Servidor.', ' Concluída.', '2010-02-10 10:52:59', 3, NULL),
(41, ' Montagem do Server 2003 com espelhamento.', ' Concluída.', '2010-02-10 10:54:30', 3, NULL),
(54, ' Instalação do antivírus Kaspersky.', ' Concluída.', '2010-02-10 10:55:50', 3, NULL),
(32, ' Reinstalação do windows.', ' Reinstalado do windows sem formatação.', '2010-02-10 10:57:33', 3, NULL),
(70, ' O computador apresentava alguns travamentos.Tinha dois pentes de memória instalados,sendo que um apresentou problema.', ' Foi retirado o pente de memória com problema.', '2010-02-10 11:39:51', 3, NULL),
(71, ' Computador sumindo o vídeo.', ' Troca do equipamento e retirada do defeituoso para análise.', '2010-02-10 11:43:07', 3, NULL),
(73, ' Mudança dos computadores do setor de atendimento para biblioteca, enquanto ocorre a montagem dos armários.Criação de uma rede para uso provisório.', ' Feito todos os procedimentos descritos no problema.\r\n O setor de atendimento já foi restabelecido', '2010-02-10 11:48:53', 3, NULL),
(74, ' Computador na hora do logon reiniciando (vírus).', ' Reinstalação do sistema.', '2010-02-10 11:51:12', 3, NULL),
(75, '  Montagem de computadores', ' Montagem e instalação do servidor antigo (backup)\r\n Montagem e instalação de computador novo (backup)', '2010-02-10 11:56:19', 3, NULL),
(76, 'Descrição técnica do problema pelo usu&#039;ario e ', 'Feito backup das pastas indicadas pelo usuario e e-mail do thunderbird. ', '2010-02-10 17:33:32', 2, NULL),
(77, 'Sem energia eletrica na tomada.', 'Ligacao de computador em outra tomada.', '2010-02-10 17:36:24', 2, NULL),
(78, 'Feito instalacao', 'Feito instalacao em outra estacao pos o com o DOCAD.putador do Darli nao instalava', '2010-02-10 17:39:38', 2, NULL),
(79, 'Solicitacao de gravacao de video.', 'Feito gravacao em pendrive.', '2010-02-10 17:43:32', 2, NULL),
(80, 'Camera com imagem azul. Travamento causado por falha na alimentacao.', 'Foi tirada a fonte de alimentacao por alguns segundos e religada, solicionado a falha na imagem.', '2010-02-10 17:45:59', 2, NULL),
(81, 'Foi corrompida a base de dados do servidor TeraLab.\r\n \r\n', 'Foi feita várias tentativas de recuperação da base de dados com o utilitário de manutenção DIAG sem conseguir sucesso.\r\nTécnico: Cássius \r\nPeríodo: 11:00 às 15:00 do dia 9/02\r\n\r\nExportação dos globais da base antiga e recontrução das rotinas do diretório 1 e 2 .\r\nImportação dos globais e as rotinas recontrídas e criação de novos usuário no sistema\r\nTestes concluídos com a Dr. Mary OK!.\r\nTécnico: Marcos\r\nPeríodo: 15:00 às 23:00 9/02\r\nRetorno: 11:00 às 18:30 ', '2010-02-11 10:00:33', 22, NULL),
(82, 'Programação de backup em fita DAT para os sistemas Alterdata e Prosoft', 'Foi concluída com sucesso no dia 27/02, a programação do Backup conforme solicitado', '2010-02-11 10:07:14', 22, NULL),
(84, ' Computador não envia email', ' Marcar meu servidor requer autenticação no outlook express.', '2010-02-11 13:30:47', 3, NULL),
(85, ' Fita dat antiga não restaura arquivos', ' Clicar duas vezes no arquivo a ser restaurado e aguardar a leitura do mesmo, depois direcionar a restauração para um lugar alternativo.', '2010-02-11 14:07:31', 3, NULL),
(86, ' Computador perdendo mapeamento', '  Refeita a bat', '2010-02-11 14:13:51', 3, NULL),
(90, 'O backup na fita DAT da sistema Alterdata esta apresentando erros.', 'Foi substituída a Fita DAT, e obackup voltou a funcionar normalmente.\r\n\r\nConcluído dia 10/02 às 17:30', '2010-02-12 12:13:19', 22, NULL),
(89, 'Computador lento e não instalava MSN.', 'Feito formatação e instalação de sistema.', '2010-02-19 12:08:39', 2, NULL),
(88, 'Compitador lento e não acessando alguns sites.', 'Feito varredura ncom antivírus e limpeza de arquivos temporários.', '2010-02-19 12:09:38', 2, NULL),
(91, 'Mal contato na rede.', 'Feito reclipagem de conector.', '2010-02-19 12:12:17', 2, NULL),
(92, 'Arquivo zipado.', 'Feito descompactação de arquivo e orientação para envio do mesmo.', '2010-02-19 14:43:43', 2, NULL),
(93, 'Configuração de impressora matricial para impressão somente texto com acentuação ativada.', 'Não possível compatibilizar ativação de acentuação no formato somente texto devido a eprom de caracteres só reconhecer acentuaação do formato gráfico.', '2010-02-19 23:27:36', 22, NULL),
(95, 'Padronização de parque de máquina.', 'Feito instalação de sistema operacional e identificação com etiqueta, padronização para segurança dos computadores e organização.', '2010-02-22 18:50:00', 2, NULL),
(96, 'Padronização do parque de máquinas.', 'Feito instalação de sistema operacional e identificação com etiqueta, padronização para segurança dos computadores e organização.', '2010-02-22 18:52:21', 2, NULL),
(97, 'Padronização do parque de máquinas.', 'Feito instalação de sistema operacional e identificação com etiqueta, padronização para segurança dos computadores e organização.', '2010-02-22 18:54:02', 2, NULL),
(98, ' notebook não acessa internet.\r\n computador do auditório não sobe o windows.\r\n computador do guilherme expirou o antivírus.', ' configurado ip no notebook\r\n reparação do windows no computador do auditório.\r\n instalação do avira.\r\n', '2010-02-22 19:17:02', 3, NULL),
(99, 'Sevidor TERALAB apresentando mensagem de arquivos corrompidos.', 'Chamado concluído depois da restauração do backup dos arquivos de sistema.\r\n\r\nChamado concluído às 8:50 do dia 23/02/10', '2010-02-23 10:54:45', 22, NULL),
(68, 'Descrição técnica do problema', 'O pai trouxe cartuchos novos e originais e a maquina funcionou normalmente, ficou de buscar essa semana.', '2010-02-23 11:25:06', 4, NULL),
(100, ' Não consegue descompactar arquivo.', ' Era mau uso do winzip.', '2010-02-23 19:01:06', 3, NULL),
(101, 'Padronização do parque de máquinas.', 'Feito instalação de sistema operacional e identificação com etiqueta,inventário e padronização para segurança dos computadores e organização.', '2010-02-23 19:21:05', 2, NULL),
(102, 'Padronização do parque de máquinas.', 'Feito instalação de sistema operacional e identificação com etiqueta,inventário e padronização para segurança dos computadores e organização.', '2010-02-23 19:22:51', 2, NULL),
(103, 'PAdronização de parque de máquinas.', 'Feito instalação de sistema operacional e identificação com etiqueta,inventário e padronização para segurança dos computadores e organização.', '2010-02-23 19:24:01', 2, NULL),
(104, 'Padronização do parque de máquinas.', 'Feito instalação de sistema operacional e identificação com etiqueta,inventário e padronização para segurança dos computadores e organização.', '2010-02-23 19:25:19', 2, NULL),
(105, 'Padronização do parque de máquinas.', 'Feito instalação de sistema operacional e identificação com etiqueta,inventário e padronização para segurança dos computadores e organização.', '2010-02-23 19:26:26', 2, NULL),
(109, '<p>autoexec.nt e config.nt&nbsp;desconfigurado, pasta n&atilde;o mapeada,atalho n&atilde;o criado.&nbsp;</p>', '<p>Feito todo procedimento.</p>\r\n<p>C&oacute;pia&nbsp; de um autoexec.nt e um config.nt de uma m&aacute;quina funcionando.Mapear pasta e criar atalho de loca&ccedil;&atilde;o</p>', '2010-02-24 13:25:47', 3, NULL),
(111, '<p>Padroniza&ccedil;&atilde;o de parque de m&aacute;quinas.</p>', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-02-24 18:50:15', 2, NULL),
(112, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-02-24 18:51:31', 2, NULL),
(114, '<p>Computador travando.</p>', '<p>Feito troca&nbsp; de fonte e cooler.</p>', '2010-02-24 18:53:22', 2, NULL),
(106, '<p><strong>Mudan&ccedil;a de impressora matricial para impressora laser no sistema TERALAB</strong></p>', '<p>Configura&ccedil;&atilde;o do sistema TERALAB para impress&atilde;o de relat&oacute;rio, exames, e personaliza&ccedil;&atilde;o de etiquetas na impressora laser Lexmark.</p>', '2010-02-25 16:16:23', 22, NULL),
(115, '<strong>Computador travando.</strong>', '<p>Atualiza&ccedil;&atilde;o do Windows para SP3</p>', '2010-02-26 15:11:11', 22, NULL),
(116, '<strong>Erro ao&nbsp;abrir&nbsp; FGTS conectividade social.</strong>', '<p>Desativa&ccedil;&atilde;o&nbsp;da <em>&nbsp;Preven&ccedil;&atilde;o de execu&ccedil;&atilde;o de dados (DEP)</em></p>', '2010-02-26 15:14:25', 22, NULL),
(117, 'Padroniza&ccedil;&atilde;o do parque de m&aacute;quinas.', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.Solu&ccedil;&atilde;o para este problema', '2010-03-01 15:28:26', 2, NULL),
(118, 'Padroniza&ccedil;&atilde;o do parque de m&aacute;quinas.', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-03-01 15:29:54', 2, NULL),
(119, 'Padroniza&ccedil;&atilde;o do parque de m&aacute;quinas.', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-03-01 15:31:29', 2, NULL),
(120, 'Padroniza&ccedil;&atilde;o de parque de m&aacute;quinas.', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-03-01 15:33:30', 2, NULL),
(121, 'PAdroniza&ccedil;&atilde;o do parque de m&aacute;quinas.', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-03-01 15:34:35', 2, NULL),
(122, 'Na casa do Dr. Walter.', 'Feito configura&ccedil;&atilde;o.', '2010-03-01 15:37:39', 2, NULL),
(123, 'Padroniza&ccedil;&atilde;o do parque de m&aacute;quinas.', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-03-01 15:41:27', 2, NULL),
(124, 'Padroniza&ccedil;&atilde;o do parque de m&aacute;quinas.', 'Feito instala&ccedil;&atilde;o de sistema operacional e identifica&ccedil;&atilde;o com etiqueta,invent&aacute;rio e padroniza&ccedil;&atilde;o para seguran&ccedil;a dos computadores e organiza&ccedil;&atilde;o.', '2010-03-01 15:42:50', 2, NULL),
(126, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional.</p>', '2010-03-02 16:16:17', 2, NULL),
(127, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>A etiqueta s&oacute; imprimi corretamente quando a mesma esta definida como impressora padr&atilde;o.</p>\r\n<p>Definida como padr&atilde;o.</p>', '2010-03-02 16:18:22', 2, NULL),
(125, '<p>Foi corrompida a base de dados do sistema.</p>', '<p>Exporta&ccedil;&atilde;o e importa&ccedil;&atilde;o dos dados e reinstala&ccedil;&atilde;o do servidor TERALAB.</p>\r\n<p>T&eacute;rmino dia 02/0310 &auml;s 16:30</p>', '2010-03-02 23:40:36', 22, NULL),
(128, '<b>Atualiza&ccedil;&atilde;o de antiv&iacute;rus. DBF-07</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2010-03-03 13:16:41', 22, NULL),
(129, '<b>Computador lento com mesagem de falta de espa&ccedil;o em disco.</b>', 'Foi conclu&iacute;da a limpeza dos tempor&aacute;rios.', '2010-03-03 13:18:19', 22, NULL),
(130, '<b>Sem sinal de v&iacute;deo no monitor.</b>', 'Reconectado os cabos de v&iacute;deo e&nbsp; de for&ccedil;a do monitor.', '2010-03-03 13:20:28', 22, NULL),
(132, '<b>Solicita&ccedil;&atilde;o de instala&ccedil;&atilde;o de plataforma Orizon para faturamento  eletr&ocirc;nico.</b>', 'Chamado conclu&iacute;do remotamente conforme solicitado.', '2010-03-04 13:13:51', 22, NULL),
(133, '<b>Base de dados do sistema&nbsp; TERALAB corrompendo com frequencia. <br /></b>', '<b>Foi solicitado e substitu&iacute;do o disco r&iacute;gido do servidor.&nbsp; Foi  conclu&iacute;da a migra&ccedil;&atilde;o dos dados do sistema TERALAB para o disco novo pelo  t&eacute;cnico Marcos Portugal.<br /><br />Abertura do chamado dia 02/03/10 </b>', '2010-03-04 13:25:44', 22, NULL),
(134, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito trnasferencia de dados e instala&ccedil;&atilde;o de impressora.', '2010-03-05 13:54:04', 2, NULL),
(135, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Configura&ccedil;&atilde;o de setup.', '2010-03-05 13:55:01', 2, NULL),
(136, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>A pasta Eyesys quando esta com mais de 65.000 arquivos nao salva mais os exames.</p>\r\n<p>Feito exclusao dos arquivos antigos.</p>', '2010-03-09 17:52:04', 2, NULL),
(137, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Configura&ccedil;&atilde;o de hora.</p>', '2010-03-10 15:46:24', 2, NULL),
(139, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito configura&ccedil;&atilde;o de cameras para acesso via web.</p>', '2010-03-10 15:50:01', 2, NULL),
(140, 'Placa de v&iacute;deo PCI express com capacitores estufados.', 'Retirada a placa de v&iacute;deo PCI-E. Computador operando com v&iacute;deo ONBOARD.', '2010-03-11 16:48:24', 2, NULL),
(141, '<p>Feito reconfigura&ccedil;&atilde;o de modem.</p>', '<p>Configura&ccedil;&atilde;o de modem.</p>', '2010-03-15 12:16:11', 2, NULL),
(142, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito instala&ccedil;&atilde;o.</p>', '2010-03-15 12:19:03', 2, NULL),
(83, '<p>computador apresentando travamentos </p>', '<p>substitui&ccedil;&atilde;o</p>', '2010-03-15 13:34:57', 3, NULL),
(72, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-03-15 13:35:49', 3, NULL),
(94, '<p>Computador travando.</p>', '<p>Feita retirada para laborat&oacute;rio.</p>\r\n<p>&nbsp;trocado hd</p>', '2010-03-15 13:37:47', 3, NULL),
(110, '<p>ap&oacute;s envio de impress&atilde;o pelo word, sai p&aacute;gina em branco.</p>', '<p>O problema era a impressora. (cartuchos)</p>', '2010-03-15 13:40:36', 3, NULL),
(143, '<p>Placa M&atilde;e queimada.</p>', '<p>Montado Micro novo.</p>', '2010-03-15 13:46:04', 3, NULL),
(144, '<p>Hd apresentando travamentos.(usu&aacute;rio Daniele)</p>', '<p>Substitui&ccedil;&atilde;o do hd.</p>', '2010-03-15 13:49:13', 3, NULL),
(145, '<p>Compartilhar Internet (Mundivox).</p>', '<p>Foi colocado um Roteador na rede, configurado com IP fixo</p>\r\n<p>Faixa 189.3.20.129 at&eacute; 190.</p>\r\n<p>&nbsp;</p>', '2010-03-15 13:55:24', 3, NULL),
(146, '<p>Inatala Sistema em notebook novo.</p>', '<p>Foi instalado o windwos Seven</p>', '2010-03-15 13:57:44', 3, NULL),
(147, '<p>brother n&atilde;o imprimi.</p>', '<p>Feita a configura&ccedil;&atilde;o novamente da Impressora sendo observado tamb&eacute;m um problema se hardware, no scanner.</p>', '2010-03-15 14:00:41', 3, NULL),
(148, 'M&aacute;quina perdendo a rede', '<p>trocado o conector f&ecirc;mea.</p>', '2010-03-15 14:06:11', 3, NULL),
(149, 'Sem acesso a internet.', '<p>Switch travado. (Desligar, aguardar 10 minutos e tornar a liga).</p>', '2010-03-15 14:10:08', 3, NULL),
(150, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito reconfigura&ccedil;&atilde;o de modem da velox.', '2010-03-16 17:01:22', 2, NULL),
(151, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito reinstala&ccedil;&atilde;o do software.', '2010-03-16 17:02:33', 2, NULL),
(152, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito configura&ccedil;&atilde;o de modem da velox.', '2010-03-16 17:03:30', 2, NULL),
(154, 'Navegador Intenet Explorer com falhas. .', 'Feito reinstala&ccedil;&atilde;o do IE8 e instala&ccedil;&atilde;o do Mozilla Firefox', '2010-03-17 15:59:28', 2, NULL),
(155, '<p>Sem internet, modem travado.</p>', '<p>Configura&ccedil;&atilde;o do modem Thomson 510v6 como router,&nbsp;feita novamente.</p>\r\n<p>Configura&ccedil;&atilde;o de um modem Speed Stream como router para deixar como reserva</p>', '2010-03-18 20:09:09', 3, NULL),
(156, '<p>Computador do Elias pedindo para pressionar F1 ou F2.</p>', '<p>Troca da bateria.</p>', '2010-03-18 20:16:40', 3, NULL),
(157, '<p>Computadores da cofi&nbsp; n&atilde;o imprimindo na impressora de rede do setor.</p>\r\n<p>Configura&ccedil;&atilde;o do Ip da Impressora estava errada.</p>', '<p>configurado o Ip corretamente.</p>', '2010-03-18 20:18:03', 3, NULL),
(158, '<p><a class="no" href="http://192.168.254.150/ocomon/ocomon/geral/mostra_consulta.php?numero=158">Solicita&ccedil;&atilde;o&nbsp;para exportar &nbsp;de cat&aacute;lago de endere&ccedil;o da m&aacute;quina do guilherme e importalo na do Allan.</a></p>', '<p>Feito o procedimento.</p>', '2010-03-18 20:18:47', 3, NULL),
(174, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito configura&ccedil;&atilde;o de software por acesso remoto.', '2010-03-23 11:58:21', 2, NULL),
(164, 'Configura&ccedil;&atilde;o de Sistema.', 'Feito Configura&ccedil;&atilde;o.', '2010-03-22 13:01:37', 2, NULL),
(163, 'Configura&ccedil;&atilde;o de sistema.', 'Feito configura&ccedil;&atilde;o.', '2010-03-22 13:02:26', 2, NULL),
(162, 'Configura&ccedil;&atilde;o de sistema.', 'Feito Configura&ccedil;&atilde;o.', '2010-03-22 13:03:06', 2, NULL),
(161, 'Configura&ccedil;&atilde;o de sistema.', 'Feito configura&ccedil;&atilde;o.', '2010-03-22 13:03:52', 2, NULL),
(175, '<p>computadores do setor fiscal da ocg, n&atilde;o consegue-se instalar o darj.</p>\r\n<p>O antiv&iacute;rus estava bloqueando o Download e instala&ccedil;&atilde;o do programa.</p>', '<p>Foi desativada a prote&ccedil;&atilde;o residente por 5 min.Ap&oacute;s&nbsp;download e instala&ccedil;&atilde;o&nbsp;tudo ficou normal.&nbsp;</p>', '2010-03-23 15:52:13', 3, NULL),
(176, '<p>Computador Lento.</p>', '<p>Feito Acesso Remoto com Limpeza de tempor&aacute;rio res&iacute;duos de programas instalados.</p>\r\n<p>Instalado Ativ&iacute;rus avira e feita a remo&ccedil;&atilde;o de v&iacute;rus.</p>', '2010-03-23 15:57:42', 3, NULL),
(178, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Drive foi limpo e voltou a funcionar.</p>', '2010-03-26 13:49:32', 4, NULL),
(153, 'Base de dados corrompida', 'Exporta&ccedil;&atilde;o e importa&ccedil;&atilde;o&nbsp; dos globais e rotinas e cria&ccedil;&atilde;o de duas bases novas.<br />Conclu&iacute;do o trabalho as 22:00 do dia 17/03/10', '2010-03-27 09:14:00', 22, NULL),
(108, 'De um dia para o outro o computador perde as informa&ccedil;&otilde;es de data e hora.', 'Foi colocado um jumper com fio do positivo da bateria at&eacute; o pino central do Clear CMOS.', '2010-03-27 09:17:25', 22, NULL),
(182, '<p>configura&ccedil;&atilde;o de 2 notebooks em rede, e acesso&nbsp; ao siscafw</p>', '<p>configura&ccedil;&atilde;o de 2 notebooks em rede, e acesso&nbsp; ao siscafw.</p>', '2010-03-29 16:27:07', 3, NULL),
(183, 'unidade S: n&atilde;o acess&iacute;vel.', '<p>Mapeamento da unidade S:\\sistemas</p>', '2010-03-29 16:30:11', 3, NULL),
(186, 'Execut&aacute;vel do Alterdata exclu&iacute;do.', '<p>O execut&aacute;vel estava na quarentena do Antiv&iacute;rus.</p>', '2010-03-29 16:36:01', 3, NULL),
(187, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito configura&ccedil;&atilde;o e reinstala&ccedil;&atilde;o do Gerenciador e programa SIC.', '2010-03-30 14:59:17', 2, NULL),
(184, '<p>Solicita&ccedil;&atilde;o de um novo ponto de rede na cofi.</p>', '<p>Resolvido.</p>', '2010-03-31 12:08:57', 3, NULL),
(185, '<p>PDF da nota n&atilde;o abre pelo navegador. </p>', '<p>Foi realizada limpeza de tempor&aacute;rios, atualiza&ccedil;&atilde;o do service pack e do navegador.</p>\r\n<p>No entanto foi constatado que o problema era na programa&ccedil;&atilde;o do sistema.</p>', '2010-03-31 12:14:47', 3, NULL),
(138, 'Apresenta erro no exame de superf&iacute;cie do disco ao tentar instala S.O. Windows.', 'Foi constatado disco r&iacute;gido danificado.', '2010-03-31 12:47:49', 22, NULL),
(177, '<b>Impressora d1460 ao ligar pisca as luzes e carrinho n&atilde;o se movimenta.  N&atilde;o imprime tamb&eacute;m.</b>', 'Foi substitu&iacute;da a impressora por uma outra compat&iacute;vel.', '2010-03-31 12:49:23', 22, NULL),
(131, '<b>Computador liga e em seguida desliga.<br />J&aacute; encaminhada, e&nbsp; em  atendimento pelo t&eacute;cnico Victor no dia 03/03/10 &agrave;s 10:00</b>', 'Foi feita a repara&ccedil;&atilde;o do Windows e n&atilde;o solucionou o problema. Foi aberto um sub-chamado para atendimento da garantia da Lenovo.', '2010-03-31 12:52:08', 22, NULL),
(160, '<b>Instala&ccedil;&atilde;o do S.O. Windows, drivers e aplicativos do usu&aacute;rio.</b>', 'Foi conclu&iacute;da o chamado conforme solicitado para o computador excalibur-001', '2010-03-31 13:00:15', 22, NULL),
(188, '<b><b>Instala&ccedil;&atilde;o do S.O. Windows, drivers e aplicativos do usu&aacute;rio.</b></b>', 'Foi conclu&iacute;da o chamado conforme solicitado para o computador  excalibur-002.', '2010-03-31 13:01:57', 22, NULL),
(190, '<b><b>Instala&ccedil;&atilde;o do S.O.  Windows, drivers e aplicativos do usu&aacute;rio</b></b>.', 'Foi conclu&iacute;da o chamado conforme solicitado para o computador   excalibur-003.', '2010-03-31 13:05:33', 22, NULL),
(189, '<b><b>Instala&ccedil;&atilde;o do S.O. Windows, drivers e aplicativos do usu&aacute;rio. </b></b>', 'Foi conclu&iacute;da o chamado conforme solicitado para o computador    excalibur-004.', '2010-03-31 13:07:58', 22, NULL),
(191, '<b>Foi danificado a base do sistema TERALAB no dia 22/03/2010</b>.', 'Foi conclu&iacute;da a repara&ccedil;&atilde;o da Base do dia 22 ao 23/032010 &quot;as 15:00.<br />Foi tranferida em car&aacute;ter experimental o diret&oacute;rio Vtwinsrv para um PenDrive da Compart.', '2010-03-31 13:13:33', 22, NULL),
(172, '<p>Montagem de maquina nova.</p>', '<p>Maquina montada e testada.</p>', '2010-03-31 13:39:34', 4, NULL),
(180, '<p><span style="FONT-SIZE: 7pt; FONT-FAMILY: &quot;Arial&quot;,&quot;sans-serif&quot;">Montagem de maquina nova.\r\n<p>&nbsp;</p>\r\n</span></p>', '<p>Maquina montada e testada.</p>', '2010-03-31 13:40:08', 4, NULL),
(173, '<p><span style="FONT-SIZE: 7pt; FONT-FAMILY: &quot;Arial&quot;,&quot;sans-serif&quot;">Montagem de maquina nova.\r\n<p>&nbsp;</p>\r\n</span></p>', '<p><span style="FONT-SIZE: 7pt; FONT-FAMILY: &quot;Arial&quot;,&quot;sans-serif&quot;">Maquina montada e testada.\r\n<p>&nbsp;</p>\r\n</span></p>', '2010-03-31 13:40:43', 4, NULL),
(181, '<span style="FONT-SIZE: 7pt; FONT-FAMILY: &quot;Arial&quot;,&quot;sans-serif&quot;">\r\n<p><span style="FONT-SIZE: 7pt; FONT-FAMILY: &quot;Arial&quot;,&quot;sans-serif&quot;">Montagem de maquina nova.\r\n<p>&nbsp;</p>\r\n</span></p>\r\n<p>&nbsp;</p>\r\n</span>', '<p><span style="FONT-SIZE: 7pt; FONT-FAMILY: &quot;Arial&quot;,&quot;sans-serif&quot;">Maquina montada e testada.\r\n<p>&nbsp;</p>\r\n</span></p>', '2010-03-31 13:41:20', 4, NULL),
(192, '<strong>Maquina n&atilde;o entra Windows.</strong>', '<p>Maquina foi trazida para a compart&nbsp;onde&nbsp;foi&nbsp;formatada e j&aacute; foi entregue funcionando.</p>', '2010-04-01 15:32:49', 4, NULL),
(195, 'Placa m&atilde;e com capacitores extufados (em fuga) e fonte n&atilde;o liga.', 'Orientado cliente a trocar placa m&atilde;e e fonte. Or&ccedil;amento ser&aacute; encaminhado ao cliente. Placa m&atilde;e antiga, soket 478 para Pentiun 4.', '2010-04-05 14:14:53', 2, NULL),
(196, 'V&iacute;deo ON-BOARD n&atilde;o funciona.', 'N&atilde;o tinhamos no momento outra fonte e placa de v&iacute;deo para teste. Fiquei de levar essas pe&ccedil;as em outra oportinidade para concluir or&ccedil;amento.', '2010-04-05 14:18:19', 2, NULL),
(197, '', 'Feito instala&ccedil;&atilde;o do OFFICE2007 no LAP TOP HP do Eduardo.', '2010-04-05 15:29:03', 2, NULL),
(87, '<p>Computador travando</p>', '<p>N&atilde;o ser&aacute; mais utilizado como Backup.</p>', '2010-04-08 10:03:27', 22, NULL),
(201, 'O acesso com o servidor estava bloqueado.', 'Feito login no servidor e salvo a senha de acesso.', '2010-04-08 13:43:58', 2, NULL),
(200, 'N&atilde;o l&ecirc; diskete.', 'Troca do cabo Flat do drive.', '2010-04-13 14:15:19', 22, NULL),
(199, 'mudan&ccedil;a de placa fax/modem.', 'Remanejamento de placa fax/modem entre dois computadores.', '2010-04-13 14:21:43', 22, NULL),
(204, 'Travando na inicializa&ccedil;&atilde;o e entrando na tela de exame de superf&iacute;cie do disco.', 'Substitui&ccedil;&atilde;o do disco r&iacute;gido.<br />', '2010-04-13 14:27:30', 22, NULL),
(205, '<b>Instala&ccedil;&atilde;o de fax/modem computador do Gildo.</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2010-04-13 14:30:02', 22, NULL),
(198, 'N&atilde;o l&ecirc; diskete.', 'Limpesa dos&nbsp; contatos.<br /><br />Testes ok!', '2010-04-13 14:32:52', 22, NULL),
(206, '<b>Menssagem de disco cheio ao abrir o navegador</b>.', 'Limpesa de tempor&aacute;rios', '2010-04-13 14:38:06', 22, NULL),
(207, '<b>Computador Backup n&atilde;o entra no Windows.</b>', 'Recria&ccedil;&atilde;o de usu&aacute;rio.', '2010-04-13 14:41:27', 22, NULL),
(203, 'Testes', 'testes', '2010-04-14 08:25:31', 22, NULL),
(208, '<p>Instala&ccedil;&atilde;o do SQL.</p>', '<p>Acompanhamento da instal&ccedil;&atilde;o do SQL</p>', '2010-04-14 10:29:23', 3, NULL),
(209, 'Montagem e configura&ccedil;&atilde;o de computador.', '<p>Conclu&iacute;do</p>', '2010-04-14 10:32:10', 3, NULL),
(210, '<p>configurar internet sem fio.</p>', '<p>configurado o acesso em 3 notebooks</p>\r\n<p>senha: 31478770Cress</p>', '2010-04-14 11:11:51', 3, NULL),
(211, '<p>Instala&ccedil;&atilde;o de Antiv&iacute;rus.</p>', '<p>Instalado o Avira.</p>', '2010-04-14 11:13:24', 3, NULL),
(165, '<p>Falha no HD.</p>', '<p>Feito troca de HD e instala&ccedil;&atilde;o completa do WINDOWS.</p>', '2010-04-15 14:34:12', 2, NULL),
(214, '', '<p>Limpeza de arquivos tempor&aacute;rios e modifica&ccedil;&atilde;o da pasta meus documentos para disco local D. Problema de desligar sozinha n&atilde;o apresentou no laborat&oacute;rio.</p>', '2010-04-15 14:36:54', 2, NULL),
(215, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito troca de HD e instala&ccedil;&atilde;o do WINDOWS.</p>', '2010-04-15 14:38:34', 2, NULL),
(216, '<p>Ajustar configura&ccedil;&atilde;o no pc Ponto01 (Ponto Carioca, &quot;Mota&quot;).</p>\r\n<p>Config de impressora, adobe, etc..</p>', '<p>Feito</p>', '2010-04-15 15:30:24', 3, NULL),
(213, '<p>Instalar xp.</p>', '<p>Fui instalar o xp na rodobens e n&atilde;o foi poss&iacute;vel, foi necess&aacute;rio trazer-lo para o escrit&oacute;rio, onde foi configurado e foi poss&iacute;vel instala-lo. A maquina j&aacute; foi entregue funcionando.</p>', '2010-04-16 10:13:00', 4, NULL),
(179, '<strong>Impressora matricial s&amp;oacute; imprime com auxilio do usu&amp;aacute;rio, pois, sen&amp;atilde;o a flolha amassa e n&amp;atilde;o sai.</strong>', '<p>F&aacute;bio foi l&aacute; e desmontou-a e lixou-a e est&aacute; funcionado normalmente.</p>', '2010-04-16 10:14:19', 4, NULL),
(194, '<strong>O windows n&atilde;o sobe.</strong>', '<p>Limpeza de mem&oacute;ria e foi passado a repara&ccedil;&atilde;o do xp.</p>', '2010-04-16 10:17:01', 4, NULL),
(193, '<p>2 m&aacute;quinas n&atilde;o ligavam e uma era necess&aacute;rio instalar o xp.</p>', '<p>Uma maquina capacitores&nbsp;e fonte foram trocados. Uma o xp foi instalado.</p>', '2010-04-16 10:20:24', 4, NULL),
(202, '<b>Verifica&ccedil;&atilde;o de 02 c&acirc;meras</b> sem transmiss&atilde;o de imagem', 'Revis&atilde;o dos contatos dos conectores.', '2010-04-16 19:38:36', 22, NULL),
(220, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito instala&ccedil;&atilde;o de novo pente de mem&oacute;ria totalizando 1GB de RAM. E limpeza de contatos.</p>', '2010-04-26 16:34:14', 2, NULL),
(221, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito recupera&ccedil;&atilde;o/reinstala&ccedil;&atilde;o de sistema operacional.</p>', '2010-04-26 16:35:35', 2, NULL),
(222, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito instala&ccedil;ao de java e Microsoft VM.</p>', '2010-04-26 16:37:01', 2, NULL),
(223, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito limpeza de contatos de mem&oacute;ria.</p>', '2010-04-26 16:40:31', 2, NULL),
(224, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Marcia foi orientada por telefone&nbsp;a verificar se tinha CD ou disket no computador que poderia estar impedindo o BOOT. Chegando no local havia um disket, que foi retirado e o problema solucionado.</p>', '2010-04-26 16:43:24', 2, NULL),
(225, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito instala&ccedil;&atilde;o de antiv&iacute;rus em todas as m&aacute;quinas.</p>', '2010-04-26 16:46:05', 2, NULL),
(226, '<p>Computador da recep&ccedil;&atilde;o travou mouse e teclado.</p>', '<p>Foi que o teclado por algum motivo travou e as meninas trocaram-o sem desligar a maquina. S&oacute; foi necess&aacute;rio dar um boot que foi aconselhado pelo telefone.</p>', '2010-04-27 11:04:27', 4, NULL),
(227, 'Maquina n&atilde;o entrava no padr&atilde;o vga.', '<p>Entrei com o padr&atilde;o vga e fiz as devidas configura&ccedil;&otilde;es.</p>', '2010-04-27 11:06:24', 4, NULL),
(217, '<p>Computador novo</p>', '<p>Conclu&iacute;do</p>', '2010-05-03 16:21:40', 3, NULL),
(218, '<p>Upgrade</p>', '<p>Adicionado mais mem&oacute;ria, troca de um hd e dois monitores e manuten&ccedil;&atilde;o preventiva de software e hardware.</p>', '2010-05-03 16:23:49', 3, NULL),
(219, '<p>Problema de resolu&ccedil;ao do wa.</p>', '<p>N&atilde;o fiz nenhum tipo de configura&ccedil;&atilde;o, simplesmente voltou a funcionar.</p>', '2010-05-03 16:25:34', 3, NULL),
(228, '<p>Computador Novo para cofi.</p>', '<p>Computador da secretaria foi remanejado para cofi.</p>\r\n<p>OBS: N&atilde;o est&aacute; com Windows licenciado.</p>', '2010-05-03 16:30:10', 3, NULL),
(229, '<p>Configurar notebook.</p>', '<p>Configura&ccedil;&atilde;o de 3 notebooks da Lucios da rede.</p>', '2010-05-03 16:41:32', 3, NULL),
(230, '<p>scan n&atilde;o funciona,&nbsp; e configurar 2 computadores temporariamente</p>\r\n<p>Scan do atendimento n&atilde;o funciona.</p>', '<p>Configurar 2 m&aacute;quinas para inscri&ccedil;&atilde;o de curso temporariamente.</p>\r\n<p>O problema no Scan era configura&ccedil;&atilde;o de IP</p>', '2010-05-03 16:45:30', 3, NULL),
(231, '<p>Computador do Felipe n&atilde;o entra o Windows</p>', '<p>Cabo Flat.</p>\r\n<p>DVD desativado temporariamente.</p>', '2010-05-03 16:47:42', 3, NULL),
(232, '<p>Problema na impress&atilde;o de etiquetas.</p>', '<p>Instala&ccedil;&atilde;o de software da Pimaco.</p>', '2010-05-03 16:49:27', 3, NULL),
(233, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feita a migra&ccedil;&atilde;o &nbsp;</p>', '2010-05-04 17:26:51', 3, NULL),
(236, 'Maquina lenta.', '<p>Formatei e coloquei o Seven.</p>', '2010-05-07 12:38:33', 4, NULL),
(234, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito troca de fonte.</p>', '2010-05-11 16:30:44', 2, NULL),
(235, '<p>Sem sinal de v&iacute;deo.</p>', '<p>Feito limpeza de contatos de mem&oacute;ria.</p>', '2010-05-11 16:31:55', 2, NULL),
(242, '', '<p>Feito troca de 2 pentes de 1GB/800MHz por 2 de 2GB/800MHz, totalizando 4GB de RAM.</p>', '2010-05-11 16:35:18', 2, NULL),
(243, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito limpeza de arquivos tempor&aacute;rios e intala&ccedil;&atilde;o de antiv&iacute;rus.Padroniza&ccedil;&atilde;o de acordo com as normas COMPART.</p>', '2010-05-11 16:38:42', 2, NULL),
(246, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito limpeza de arquivos tempor&aacute;rios e padroniza&ccedil;&atilde;o de acordo com as normas COMPART.</p>', '2010-05-11 16:44:32', 2, NULL),
(247, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito limpeza de arquivos tempor&aacute;rios e padroniza&ccedil;&atilde;o de acordo com as normas COMPART.</p>', '2010-05-11 16:48:17', 2, NULL),
(248, 'Contos de mem&oacute;ria sujos.', 'Feito limpeza de contatos de mem&oacute;ria.', '2010-05-13 12:06:39', 2, NULL),
(249, 'Permiss&atilde;o de usu&aacute;rio limitado n&atilde;o permite acessar sistema ORIZON.', 'Feito configura&ccedil;&atilde;o de permiss&atilde;o para o sistema.', '2010-05-13 12:08:17', 2, NULL),
(240, '<strong>M&aacute;quina n&atilde;o reconhece o leitor de dvd e msn n&atilde;o emite som.</strong>', '<p>Foi instalado o windows 7 e o leitor foi conectado a m&aacute;quina, pois, estava desconectado por causa de um hd extra que foi removido.</p>', '2010-05-13 14:07:07', 4, NULL),
(237, '<strong>Maquina n&atilde;o vem v&iacute;deo.</strong>', '<p>Troca de placa m&atilde;e. M&aacute;quina j&aacute; foi entregue.</p>', '2010-05-13 14:08:38', 4, NULL),
(252, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito reinstala&ccedil;&atilde;o de software Expanion na esta&ccedil;&atilde;o.', '2010-05-18 12:34:55', 2, NULL),
(250, '<p>Servidor reiniciando.</p>\r\n<p>&nbsp;</p>', '<p>Troca do cooler. (A fonte tamb&eacute;m foi trocada mas, o problema era o cooler).</p>', '2010-05-19 15:18:36', 3, NULL),
(254, '<p>Configurar Servi&ccedil;o de Email.</p>', '<p>Servi&ccedil;o Configurado.</p>', '2010-05-19 15:24:07', 3, NULL),
(256, '<p>Configurar Servi&ccedil;o de Email.</p>', '<p>Configurado.</p>', '2010-05-19 15:28:34', 3, NULL),
(258, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-05-19 15:31:58', 3, NULL),
(259, '<p>Upgrade de Mem&oacute;ria e atualiza&ccedil;&atilde;o do SP do XP. (Gisele)</p>', '<p>Executado.</p>', '2010-05-19 15:34:08', 3, NULL),
(260, 'Troca de Driver 1,44', '<p>Executado.</p>', '2010-05-19 15:35:26', 3, NULL),
(264, 'Computador da cofi apresentando problema com Email , pedindo Usu&aacute;rio e Senha.', '<p>Orientado a reconfigurar no Painel de Controle do Provedor.</p>', '2010-05-19 15:40:58', 3, NULL),
(267, '<p>Mouse n&atilde;o funciona</p>', '<p>Orientada a reiniciar o Pc.</p>\r\n<p>&nbsp;Ap&oacute;s reiniciar, voltou a funcionar.</p>', '2010-05-19 15:44:46', 3, NULL),
(268, '<p>Backup setor Comercial.</p>', '<p>Feito.</p>', '2010-05-19 15:53:20', 3, NULL),
(255, '<strong>Mudan&ccedil;a f&iacute;sica de equipamento</strong>', '<p>M&aacute;quina mudada de local, mas apresentou problema no Mxm que Darli disse que resolveria.</p>', '2010-05-20 12:50:30', 4, NULL),
(253, '<b>Solicita&ccedil;&atilde;o de ativa&ccedil;&atilde;o do logmein para acesso da TecnoArt&nbsp; aos  computadores</b>.', 'Chamado conclu&iacute;do conforme solicitado.', '2010-05-21 14:47:09', 22, NULL),
(266, '<b>Instala&ccedil;&atilde;o e configura&ccedil;&atilde;o de impressora ligada diretamente na rede.</b>', 'Instala&ccedil;&atilde;o conclu&iacute;da com sucesso.', '2010-05-21 14:48:41', 22, NULL),
(265, '<b>Instala&ccedil;&atilde;o e configura&ccedil;&atilde;o de impressora ligada diretamente na rede.</b>', 'Chamado conclu&iacute;do com sucesso.', '2010-05-21 14:50:01', 22, NULL),
(269, '<b>Solicita&ccedil;&atilde;o de acompanhamento para mudan&ccedil;a de central telef&ocirc;nica.</b>', 'Chamado conclu&iacute;do pelo Marcos no s&aacute;bado, &agrave;s 16:00 do dia 22/05/10.', '2010-05-26 10:36:57', 22, NULL),
(271, '<p>N&atilde;o reconhece HD.</p>', '<p>Feito troca de cabo flex e cabo de for&ccedil;a.</p>', '2010-06-17 13:59:32', 2, NULL),
(272, '<b>Solicita&ccedil;&atilde;o de ativa&ccedil;&atilde;o de 40 ramais com jumpeamento de path cords no  Rack.</b>', 'Chamado conclu&iacute;do conforme solicitado entre os dias 10, 15 e 17.<br />', '2010-06-18 23:45:17', 22, NULL),
(273, '<b>Mensagem de Falta de mem&oacute;ria virtual.</b>', 'Chamado conclu&iacute;do ap&oacute;s aumento de mem&oacute;ria virtual.', '2010-06-18 23:48:23', 22, NULL),
(282, 'Feito instala&ccedil;&atilde;o de software HP, remotamente.', '', '2010-07-05 14:55:56', 2, NULL),
(283, '', '<p>Feito reinstala&ccedil;&atilde;o de Windows</p>', '2010-07-06 16:49:24', 2, NULL),
(263, '<b>Montagem de servidor com espelhamento de disco</b>', '<b>Montagem de servidor com espelhamento de disco</b> conclu&iacute;do com sucesso.', '2010-07-07 23:25:08', 22, NULL),
(275, '<b>Instala&ccedil;&atilde;o f&iacute;sica de 03  computadores em rede.</b>', 'Solicita&ccedil;&atilde;o conclu&iacute;da com sucesso.', '2010-07-07 23:29:51', 22, NULL),
(241, '<b>Monitor n&atilde;o liga</b>', 'Foi devolvido sem Solu&ccedil;&atilde;o.<br /><br />Obs. N&atilde;o foi encontrada a pe&ccedil;a para&nbsp; conclus&atilde;o do conserto.', '2010-07-07 23:34:19', 22, NULL),
(279, 'Teste de sistema.', 'Teste de sistema.', '2010-07-07 23:37:55', 22, NULL),
(239, '<b>Quando vai imprimir etiqueta o carro trava, por&amp;eacute;m eles  ainda conseguem usa-la. <br /></b>', 'Foi conclu&iacute;da a manuten&ccedil;&atilde;o com a limpeza do mecanismo.', '2010-07-07 23:43:30', 22, NULL),
(290, '<p>Os arquivos est&atilde;o sendo colocados em quarentena pelo Antiv&iacute;rus.</p>', '<p>Foi&nbsp; orientado no caso de arquivo supeito, colocar em quarentena e depois de ser liberado pelo antiv&iacute;rus,&nbsp; restaura-lo para o local original.</p>', '2010-07-09 12:40:15', 22, NULL),
(288, '<p>Usu&aacute;rios perdendo Conex&atilde;o com a base de dados do Alterdata</p>', '<p>Sugest&atilde;o do suporte da Alterdata de remo&ccedil;&atilde;o do&nbsp;mapeamento</p>', '2010-07-11 22:46:38', 22, NULL),
(284, '<p>Localiza&ccedil;&atilde;o do diret&oacute;rio de dados incorreta</p>', '<p>Corre&ccedil;&atilde;o da Letra do drive referente a pasta de Dados.</p>', '2010-07-11 22:48:32', 22, NULL),
(287, '<p>Computador da M&aacute;rcia&nbsp; desligando sozinho duas vezes ao dia.</p>', '<p>Troca da fonte de alimenta&ccedil;&atilde;o para fonte real de 500W</p>', '2010-07-11 22:51:32', 22, NULL),
(278, '<strong>Verificar se os arquivos que est&amp;atilde;o sendo detectados como v&amp;iacute;rus est&amp;atilde;o realmente infectados.</strong>', '<p>Seguir orinta&ccedil;&atilde;o da alterdata relacionadas as &nbsp;permiss&otilde;es de arquivos de sistema.</p>', '2010-07-11 22:54:21', 22, NULL),
(238, '<p>Placa m&atilde;e com defeito. N&atilde;o tem processamento.</p>', '<p>Upgrade Placa m&atilde;e, processador, mem&oacute;ria.</p>', '2010-07-11 22:56:25', 22, NULL),
(212, '<strong>&nbsp;</strong>\r\n<p>a maquina da marcia esta desligando sozinha !!!!!</p>\r\n<p>reinic&iacute;o o ESTABILIZADOR na energia e o pc volta a funcionar </p>', '<p>Troca da Fonte para fonte de alimenta&ccedil;&atilde;o Real de 500W</p>', '2010-07-11 22:58:26', 22, NULL),
(294, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Fechado como teste no sistema.', '2010-07-12 00:36:49', 22, NULL),
(295, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Fechado como teste no sistema.', '2010-07-12 00:39:21', 22, NULL),
(292, '&nbsp;<b>Impressora Laser do Laudo com menssagem de caracteres estranhos, devido a atolamento de papel.<br /></b>', 'Desobistru&ccedil;&atilde;o do mecanismo da impressora. Atendimento conclu&iacute;do pelo Siqueira.', '2010-07-13 12:20:14', 22, NULL),
(286, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito acompamento t&eacute;cnico com o Rodrigo. Configura&ccedil;&atilde;o de roteador Wireless, configura&ccedil;&atilde;o de mapeamento em esta&ccedil;&otilde;es.</p>', '2010-07-13 15:32:51', 2, NULL),
(296, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>AVG antiv&iacute;rus bloqueando acesso ao OFFICE e a impress&atilde;o. Feito remo&ccedil;&atilde;o do AVG e instala&ccedil;&atilde;o do AVIRA Antiv&iacute;rus.</p>', '2010-07-13 15:34:17', 2, NULL),
(297, '<p>Mal contato na porta USB do computador.</p>', '<p>Troca da porta USB.</p>', '2010-07-13 15:40:30', 2, NULL),
(293, '<p>Comunica&ccedil;&atilde;o de portas do servidor web bloqueadas no Antiv&iacute;rus.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '<p>Ativa&ccedil;&atilde;o das portas e configura&ccedil;&atilde;o de Firewall no antiv&iacute;rus.</p>\r\n<p>Conclu&iacute;do &agrave;s 15:00 dia 14/07/2010&nbsp;</p>', '2010-07-14 15:34:45', 22, NULL),
(298, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>N&atilde;o foi poss&iacute;vel consert&aacute;-lo, esperando o Thiago buscar.</p>', '2010-07-14 15:37:22', 4, NULL),
(300, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Esta placa tem um problema de chipset esquentando, isso provavelmente inutilizou a m&aacute;quina.</p>', '2010-07-14 15:42:58', 4, NULL),
(302, '<p>N&atilde;o existe li&ccedil;encas dispon&iacute;veis do CPPRO para acima de 8 computadores</p>', '<p>Mudan&ccedil;a f&iacute;sica de computador&nbsp;com CPPRO&nbsp;Instalado.&nbsp;</p>', '2010-07-16 11:36:09', 22, NULL),
(303, '<p>Computador n&atilde;o acessa a rede.</p>', '<p>Troca do cabo de rede para outra placa de rede instalada no computador.</p>', '2010-07-16 11:37:43', 22, NULL),
(304, '<p>N&atilde;o abre PDF</p>', '<strong>Instala&ccedil;&atilde;o de&nbsp;ACROBAT READER.</strong>', '2010-07-16 11:40:11', 22, NULL),
(312, '<p>N&atilde;o abre WORD. </p>', '<p>Feito formata&ccedil;&atilde;o e reintala&ccedil;&atilde;o do compuatdor. Ap&oacute;s feito foi constatado que o software da impressora LEXMARK ocasionada tal falha.</p>', '2010-07-21 14:58:31', 2, NULL),
(311, '<p>N&atilde;o abre WORD.</p>', '<p>Feito fomata&ccedil;&atilde;o e reinstala&ccedil;&atilde;o no computador. Feio isso foi constatado que o software da impressora LEXMARK ocasionava o problema.</p>', '2010-07-21 15:00:24', 2, NULL),
(306, '<p>N&atilde;o abre WORD.</p>', '<p>Feito fomata&ccedil;&atilde;o e reinstala&ccedil;&atilde;o no computador. Feio isso foi constatado que o software da impressora LEXMARK ocasionava o problema.</p>', '2010-07-21 15:02:20', 2, NULL),
(313, '', '<p>Feito varredura com antiv&iacute;rus e limpeza de arquivos tempor&aacute;ios.</p>', '2010-07-21 15:05:54', 2, NULL),
(307, '<b>N&atilde;o consegue enviar DCTF.<br />Erro ao transmitir arquivo.</b>', 'Instala&ccedil;&atilde;o do ReceitaNet.', '2010-07-21 18:55:45', 22, NULL),
(257, '<p>cabo flat com problema</p>', '<p>troca</p>', '2010-07-24 18:34:49', 3, NULL),
(308, '<strong>Instala&ccedil;&atilde;o de certificado digital.</strong>', '<p>Chamado conclu&iacute;do conforme solicitado ap&oacute;s orienta&ccedil;&atilde;o por telefone.</p>', '2010-07-25 10:17:48', 22, NULL),
(310, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>&nbsp;Contrato finalizado. Chamado finalizado.</p>', '2010-07-25 10:20:48', 22, NULL);
INSERT INTO `solucoes` (`numero`, `problema`, `solucao`, `data`, `responsavel`, `responsavelbkp`) VALUES
(285, '<p>fonte carga baixa</p>', '<p>troca</p>', '2010-07-27 16:16:30', 3, NULL),
(314, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-07-27 16:18:18', 3, NULL),
(315, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-07-27 16:19:43', 3, NULL),
(316, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-07-27 16:21:35', 3, NULL),
(291, '<b>Solicita&ccedil;&atilde;o de UPGRADE.</b>', 'Chamado fechado devido a n&atilde;o entrega do equipamento pelo usu&aacute;rio.', '2010-07-27 16:26:51', 22, NULL),
(301, '<b>Acompanhamento de cadastro  e &nbsp;treinamento do programas de parcerias&nbsp; Microsoft</b><b>.<br /></b>', 'Conclus&atilde;o do treinamento com o Darli no 26/07/10 com 80% de aprova&ccedil;&atilde;o.<br /><br />', '2010-07-27 16:30:16', 22, NULL),
(309, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Chamado finalizado. O usu&aacute;rio far&aacute; compra de monitor, teclado e mouse, e abrir&aacute; novo chamado, assim que tiver com o material.', '2010-07-27 16:34:00', 22, NULL),
(305, '<strong>Computador do Alexandre n&atilde;o inicaliza o Windows.</strong>', '<p>Reinstala&ccedil;&atilde;o.</p>', '2010-07-27 16:48:00', 4, NULL),
(277, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Upgrade de mem&oacute;ria.</p>', '2010-07-27 16:48:26', 4, NULL),
(251, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Upgrade de mem&oacute;ria&nbsp;feito.', '2010-07-27 16:49:42', 4, NULL),
(274, '<b>Solicita&ccedil;&atilde;o de roteador Wireless para acesso aos consult&oacute;rios</b>', 'Instalalado o Roteador Wireless para atender aos m&eacute;dicos dos consult&oacute;rios.', '2010-07-27 17:22:26', 22, NULL),
(270, 'Fonte de alimenta&ccedil;&atilde;o com defeito.', 'Troca da fonte de alimenta&ccedil;&atilde;o.', '2010-07-27 17:25:42', 22, NULL),
(166, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b>Montagem f&iacute;sica do computador conclu&iacute;da com sucesso.<br /></b>', '2010-07-27 17:33:00', 22, NULL),
(167, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b>Foi conclu&iacute;da com sucesso a montagem f&iacute;sica do computador.<br /></b>', '2010-07-27 17:38:04', 22, NULL),
(169, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b>Montagem f&iacute;sica do computador conclu&iacute;da com sucesso.</b>', '2010-07-27 17:41:49', 22, NULL),
(168, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b>Montagem f&iacute;sica do computador conclu&iacute;da com sucesso.</b>', '2010-07-27 17:43:44', 22, NULL),
(170, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b>Montagem f&iacute;sica do computador conclu&iacute;da com sucesso.</b>', '2010-07-27 17:45:22', 22, NULL),
(171, '<b>Montagem f&iacute;sica do computador conclu&iacute;da com sucesso.</b>', '<b>Montagem f&iacute;sica do computador conclu&iacute;da com sucesso.</b>', '2010-07-27 17:46:56', 22, NULL),
(159, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b>Montagem f&iacute;sica dos computadores conclu&iacute;da com sucesso.</b>', '2010-07-27 17:48:02', 22, NULL),
(276, '<b><b>Coloca&ccedil;&atilde;o de c&acirc;meras em uma casa no Flamengo com interesse de uma  empresa.</b></b>', 'Chamado fechado. Cliente n&atilde;o fez mais contato para confirmar a execu&ccedil;&atilde;o do projeto.', '2010-07-27 17:52:44', 22, NULL),
(318, '<b>Servidor TERALAB Travando.</b>', 'Foi conclu&iacute;da a preventiva de Hardware no servidor. <br />Foi feita repa&ccedil;&atilde;o de arquivos danificados no disco r&iacute;gido.', '2010-07-27 18:11:17', 22, NULL),
(320, '', 'Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional.', '2010-07-28 15:47:18', 2, NULL),
(321, '', 'Feito limpeza de arquivos tempor&aacute;rios e de internet. Varredura com antiv&iacute;rus.', '2010-07-28 15:48:32', 2, NULL),
(322, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito fomata&ccedil;&atilde;o e reinstala&ccedil;&atilde;o de sistema operacional.</p>', '2010-08-02 17:33:22', 2, NULL),
(323, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-04 11:11:59', 2, NULL),
(324, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-04 11:13:12', 2, NULL),
(262, '<p>Computador reiniciando</p>', '<p>Foi retirado um dos pentes de mem&oacute;ria.</p>', '2010-08-04 11:25:41', 3, NULL),
(325, '<p>Placa de rede&nbsp;n&atilde;o estava pegando IP</p>', '<p>Renovado o IP</p>', '2010-08-04 11:28:00', 3, NULL),
(327, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-08-04 11:31:07', 3, NULL),
(328, '<b>Mudan&ccedil;a f&iacute;sica dos computadores para novas instala&ccedil;&otilde;es.</b>', 'Solicita&ccedil;&atilde;o conclu&iacute;da conforme solicitada &agrave;s 01:00', '2010-08-05 12:33:45', 22, NULL),
(329, '<b>Remanejamento dos pontos do servidor e recep&ccedil;&atilde;o para o Switch localizado na nova sala de administra&ccedil;&atilde;o.<br />Passagem de cabo de rede para o sistema do hospital at&eacute; a sala de administra&ccedil;&atilde;o.</b>', 'Solicita&ccedil;&atilde;o conclu&iacute;da conforme solicitada &agrave;s 01:00', '2010-08-05 12:34:54', 22, NULL),
(330, '<b>Ativa&ccedil;&atilde;o de&nbsp; velox , conectoriza&ccedil;&atilde;o dos pontos de rede da nova sala de administra&ccedil;&atilde;o, e sala do Gumencindo.<br /><br />Testes de de acesso ao BAN rede&nbsp; do hospital e a cesso a Internet.<br /><br />Testes OK!</b>', 'Solicita&ccedil;&atilde;o conclu&iacute;da conforme solicitada &agrave;s 01:00', '2010-08-05 12:35:57', 22, NULL),
(333, '<b>Conflito de endere&ccedil;o IP.</b>', 'Chamado conclu&iacute;do remotamente com restaura&ccedil;&atilde;o do sistema.', '2010-08-09 14:37:09', 22, NULL),
(334, '<b>N&acirc;o consegue imprimir recibos de Dacom.</b>', 'Foi necess&aacute;rio o redirecionamento da pasta arquivos de programas RFB\\Dacom para a unidade C:\\', '2010-08-09 16:24:22', 22, NULL),
(336, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-11 16:16:21', 2, NULL),
(337, '', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-11 16:17:45', 2, NULL),
(338, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-11 16:19:11', 2, NULL),
(339, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-11 16:22:38', 2, NULL),
(331, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Troca de fonte.</p>', '2010-08-13 13:10:38', 4, NULL),
(340, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-13 13:15:57', 2, NULL),
(341, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-13 13:17:21', 2, NULL),
(342, '', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-13 13:21:26', 2, NULL),
(343, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-13 13:22:28', 2, NULL),
(344, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-13 13:26:33', 2, NULL),
(326, '<p>scanner n&atilde;o funciona.</p>', '<p>Reintalado&nbsp; o software.</p>', '2010-08-16 11:08:45', 3, NULL),
(345, '<p>N&atilde;o carrega o windows.</p>', '<p>Substitui&ccedil;&atilde;o da mem&oacute;ria.</p>', '2010-08-16 11:11:04', 3, NULL),
(346, 'Servidor do programa de concilia&ccedil;&atilde;o n&atilde;o entra.', '<p>Hd&nbsp; danificado.(substitui&ccedil;&atilde;o)</p>', '2010-08-16 11:12:46', 3, NULL),
(347, 'Computador do C&eacute;lio ( ex- Cec&iacute;lia n&atilde;o entra)', '<p>Repara&ccedil;&atilde;o do windows.</p>', '2010-08-16 11:14:44', 3, NULL),
(335, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Foram necess&aacute;rias 3 visitas t&eacute;cnicas</p>', '2010-08-16 11:15:50', 3, NULL),
(348, '<p>N&atilde;o consegue imprimir.Problema com a comunica&ccedil;&atilde;o.</p>', '<p>Restaura&ccedil;&atilde;o.</p>', '2010-08-19 14:58:57', 3, NULL),
(349, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 16:51:51', 2, NULL),
(350, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 16:53:05', 2, NULL),
(351, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 16:57:41', 2, NULL),
(352, '', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 16:58:47', 2, NULL),
(353, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 17:01:52', 2, NULL),
(354, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 17:03:03', 2, NULL),
(355, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 17:05:32', 2, NULL),
(356, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 17:06:38', 2, NULL),
(357, '', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 17:10:30', 2, NULL),
(358, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-20 17:11:47', 2, NULL),
(360, '<b>Remanejamento de ramal telef&ocirc;nico</b>', 'Troca do ramal 35 pelo 34', '2010-08-26 08:54:24', 22, NULL),
(365, '<b>Computador do magalh&atilde;es com barulho interno.</b>', 'Foi reajustada a fixa&ccedil;&atilde;o do gabinete.', '2010-08-26 08:57:12', 22, NULL),
(363, '<b>Computador do Laborat&oacute;rio LAS (TERALAB) sem sinal de v&iacute;deo.</b>', 'LImpeza interna dos contatos dos componentes<br />', '2010-08-26 09:05:20', 22, NULL),
(362, '<b>Complemento de distribui&ccedil;&atilde;o de cabeamento de som e TV no apartamento Dr. Eduardo Yamane.</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2010-08-26 09:06:38', 22, NULL),
(364, '<p>Computador n&atilde;o acessa a Internet.</p>', '<strong>Instala&ccedil;&atilde;o f&iacute;sica de placa de rede.<br />Instala&ccedil;&atilde;o de drivers e configura&ccedil;&atilde;o para acesso ao velox.</strong>', '2010-08-26 12:55:05', 22, NULL),
(368, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:22:37', 2, NULL),
(369, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:23:41', 2, NULL),
(370, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:28:38', 2, NULL),
(371, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:29:41', 2, NULL),
(372, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:34:39', 2, NULL),
(373, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:35:45', 2, NULL),
(374, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:37:56', 2, NULL),
(375, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito formata&ccedil;&atilde;o e instala&ccedil;&atilde;o de sistema operacional. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:38:55', 2, NULL),
(376, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Atualiza&ccedil;&atilde;o e ajustes. N&atilde;o foi necess&aacute;rio Formata&ccedil;&atilde;o. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.</p>', '2010-08-31 15:41:10', 2, NULL),
(377, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Atualiza&ccedil;&atilde;o e ajustes. N&atilde;o foi necess&aacute;rio Formata&ccedil;&atilde;o. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.', '2010-08-31 15:41:51', 2, NULL),
(378, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Atualiza&ccedil;&atilde;o e ajustes. N&atilde;o foi necess&aacute;rio Formata&ccedil;&atilde;o. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.', '2010-08-31 15:42:50', 2, NULL),
(379, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Atualiza&ccedil;&atilde;o e ajustes. N&atilde;o foi necess&aacute;rio Formata&ccedil;&atilde;o. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.', '2010-08-31 15:43:38', 2, NULL),
(380, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Atualiza&ccedil;&atilde;o e ajustes. N&atilde;o foi necess&aacute;rio Formata&ccedil;&atilde;o. Aplica&ccedil;&atilde;o de pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do usu&aacute;rio.', '2010-08-31 15:44:38', 2, NULL),
(381, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Atualiza&ccedil;&atilde;o e ajustes. N&atilde;o foi necess&aacute;rio Formata&ccedil;&atilde;o. Aplica&ccedil;&atilde;o de  pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do  usu&aacute;rio.', '2010-09-01 11:04:52', 2, NULL),
(382, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Atualiza&ccedil;&atilde;o e ajustes. N&atilde;o foi necess&aacute;rio Formata&ccedil;&atilde;o. Aplica&ccedil;&atilde;o de  pol&iacute;ticas  de seguran&ccedil;a e configura&ccedil;&atilde;o de acordo com necessidade do  usu&aacute;rio.', '2010-09-01 11:05:38', 2, NULL),
(289, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito padroniza&ccedil;&atilde;o em todas as m&aacute;quinas com excess&atilde;o da m&aacute;quina da V&acirc;nia que esta de f&eacute;rias.', '2010-09-13 15:06:12', 2, NULL),
(385, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Antiv&iacute;rus bloqueou o PHD. Feito desbloqueio.', '2010-09-13 15:12:09', 2, NULL),
(386, '<b>V&iacute;rus no servidor de c&acirc;mera.</b>', 'Reparo dos arquivos infectados com o antiv&iacute;rus', '2010-09-13 19:17:52', 22, NULL),
(388, '<b>Computador do Zarone n&atilde;o acessa as c&acirc;meras.</b>', 'Troca do endere&ccedil;o IP na p&aacute;gina de acesso.', '2010-09-13 19:22:46', 22, NULL),
(361, '<b>Vazamento de &aacute;gua para o rebaixamento de gesso gerou curto circuito em algumas c&acirc;meras superaquecendo&nbsp; todo o circuito, e danificacando 12 c&acirc;meras.<br /></b>', 'Foi conclu&iacute;da com sucesso a troca de 12 c&acirc;meras que estavam danificadas.', '2010-09-13 19:27:45', 22, NULL),
(389, '<b>Acompanhamento de prova on-line com a Microsoft, para&nbsp; solicicita&ccedil;&atilde;o de licenciamento de software</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2010-09-14 08:39:11', 22, NULL),
(299, 'Solicita&ccedil;&atilde;o de UPgrade.', 'Equipamento foi desativado e ser&aacute; substitu&iacute;do por um novo.', '2010-09-14 08:41:47', 22, NULL),
(390, '<b>Reinstala&ccedil;&atilde;o do Windows e todos os aplicativos do usu&aacute;rio.</b>', '<b>Chamado conclu&iacute;do conforme solicitado.<br /></b>', '2010-09-14 08:46:41', 22, NULL),
(366, '', '<p>Era apenas um mau contato do Hd Sata.</p>', '2010-09-16 14:23:34', 4, NULL),
(359, '', '<p>Computador montado e funcionando.</p>', '2010-09-16 14:24:08', 4, NULL),
(367, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Formata&ccedil;&atilde;o n&atilde;o resolveu, por&eacute;m apenas ap&oacute;s instalar delphi. Placa m&atilde;e trocada e n&atilde;o telefomou mais.</p>', '2010-09-16 14:25:05', 4, NULL),
(317, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>M&aacute;quina entregue com hd que era meu.</p>', '2010-09-16 14:25:54', 4, NULL),
(387, 'SEFIP 2003 IMCOMPAT&Iacute;VEL COM WINDOWS&nbsp; XP.', 'Foi feito otimiza&ccedil;&otilde;es nos arquivos de configura&ccedil;&atilde;o do SEFIP para rodoar no windows XP', '2010-09-16 19:19:40', 22, NULL),
(391, 'Cabo USB desconectado.', 'Reconectado o cabo da impressora e amesma&nbsp; voltou a funcionar normalmente.<br />Chamado conclu&iacute;do remotamotamente &agrave;s 10:15', '2010-09-17 13:54:51', 22, NULL),
(400, '<p>Problemas identicado como servidor do SEFAZ</p>', '<p>Aguardando Solu&ccedil;&atilde;o do SEFAZ.</p>', '2010-09-21 12:30:21', 22, NULL),
(395, '<strong>Instala&ccedil;&atilde;o de unidade gravadora de DVD no computador OCG-017</strong>', '<p>Chamado conclu&iacute;do conforme solicitado.</p>', '2010-09-21 12:33:02', 22, NULL),
(394, '<strong>Solicita&ccedil;&atilde;o de formata&ccedil;&atilde;o, instala&ccedil;&atilde;o do Windows e aplicativos usu&aacute;rio.</strong>', '<p>Equipamento obsoleto com rela&ccedil;&atilde;o aos equipamentos da OCG, e com o Hardware descontinuado.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2010-09-21 12:40:03', 22, NULL),
(397, 'Verifica&ccedil;&atilde;o de usu&aacute;rios desativos no Servidor.', 'Verifica&ccedil;&atilde;o conclu&iacute;da com sucesso .', '2010-09-22 07:56:21', 22, NULL),
(383, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-09-22 10:34:45', 3, NULL),
(398, '<p>Monitor do computador OCG-013 desligando aleat&oacute;riamente.&nbsp;</p>', '<p>Foi foi a feita a revis&atilde;o das conex&otilde;es dos cabos de v&iacute;deo e el&eacute;trica entre o computador e o monitor.</p>\r\n<p>Testes oK!</p>\r\n<p>Ap&oacute;s 06 horas&nbsp;de uso, o problema n&atilde;o voltou a ocorrer.</p>', '2010-09-22 14:13:52', 22, NULL),
(407, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito configura&ccedil;&atilde;o de impressora.</p>', '2010-09-22 14:25:03', 2, NULL),
(406, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito atualiza&ccedil;&atilde;o de driver do adaptador Wiereless.</p>', '2010-09-22 14:26:03', 2, NULL),
(405, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito troca de fonte.</p>', '2010-09-22 14:27:08', 2, NULL),
(409, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito troca de canaleta e reconectoriza&ccedil;&atilde;o de cabos.</p>', '2010-09-22 14:29:28', 2, NULL),
(396, '<p>Servidor de C&acirc;meras com lentid&atilde;o das imagens.</p>', '<p>Limpeza de tempor&aacute;rios</p>', '2010-09-22 15:48:38', 3, NULL),
(319, '<p>Problemas com instala&ccedil;&atilde;o do Word</p>', '<p>Reintala&ccedil;&atilde;o do aplicativo</p>', '2010-09-22 16:02:50', 22, NULL),
(402, '<strong>Padroniza&ccedil;&atilde;o das pastas de instala&ccedil;&atilde;o do DACOM no Servidor.</strong>', '<p>Foi redirecionada as pasta relacionadas do DACOM para C:\\Arquivos de programas RFB e c:\\Arquivos de programas\\arquivos SRF.</p>', '2010-09-23 12:02:08', 22, NULL),
(404, 'Relat&oacute;rio t&eacute;cnico de transf&ecirc;rencia entre contas n&atilde;o altorizada pelo portador.', '<p>Relat&oacute;rio conclu&iacute;do conforme solicitado.</p>', '2010-09-23 13:17:04', 22, NULL),
(392, '<strong>Suspeita de v&iacute;rus.<br />Solicita&ccedil;&atilde;o de limpesa do computador de trabalho.</strong>', '<p>Limpesa de arquivos tempor&aacute;rios e cookies do computador.</p>\r\n<p>Verifica&ccedil;&atilde;o geral de arquivos com o antiv&iacute;rus, e antispyware.</p>\r\n<p>&nbsp;</p>\r\n<p>Tudo OK!</p>', '2010-09-23 13:20:09', 22, NULL),
(261, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-09-24 11:56:32', 3, NULL),
(412, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Restaura&ccedil;&atilde;o do Sistema.</p>', '2010-09-24 12:32:39', 3, NULL),
(417, '', '<p>Em teste</p>', '2010-09-24 13:00:08', 4, NULL),
(408, '<b>Implanta&ccedil;&atilde;o de Licen&ccedil;as  Microsoft no novo computador do Darli</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2010-09-24 13:18:56', 22, NULL),
(419, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito instala&ccedil;&atilde;o do antiv&iacute;rus AVIRA e reconectoriza&ccedil;&atilde;o do RJ-45.</p>', '2010-09-29 12:08:42', 2, NULL),
(420, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O backup do sistema Venus impedia de fazer com que o computador desligasse ou reiniciasse.</p>\r\n<p>Orientei a K&aacute;dia para finalizar o backup venus para desligamento do equipamento.</p>', '2010-09-29 12:10:53', 2, NULL),
(384, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito configura&ccedil;&atilde;o do roteador.</p>\r\n<p>O microfone esta sendo visto em outra OS.</p>', '2010-09-29 12:11:56', 2, NULL),
(421, '<strong>Implanta&ccedil;&atilde;o do sistema de backup do Arquivo Digital&nbsp; OCG-013, OCG-019, OCG-020, OCG-021</strong>', '<p>Solicita&ccedil;&atilde;o conclu&iacute;da conforme&nbsp; solicitado.&nbsp;</p>', '2010-09-29 16:51:44', 22, NULL),
(422, '<strong>Instala&ccedil;&atilde;o f&iacute;sica de 04 HD,s nos computadores OCG-013, OCG-019, OCG-020, OCG-021</strong>', '<p>Solicita&ccedil;&atilde;o conclu&iacute;da com sucesso.</p>', '2010-09-29 17:30:00', 22, NULL),
(423, 'RAID degradada.<br /><br />Disco espelho danificado.', 'Removido disco defeituoso.', '2010-10-01 09:40:06', 22, NULL),
(428, '', '<p>N&atilde;o tem solu&ccedil;&atilde;o, &eacute; uma sucata.</p>', '2010-10-01 11:36:12', 4, NULL),
(418, '', '<p>Era o usu&aacute;rio, fiz outro e est&aacute; funcionando.</p>', '2010-10-01 11:37:21', 4, NULL),
(410, '', '<p>Era um mal contato.</p>', '2010-10-01 11:38:15', 4, NULL),
(399, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-10-01 17:16:45', 3, NULL),
(433, '<p>Internet n&atilde;o funciona</p>', '<p>Computador com problemas no navegador e Antiv&iacute;rus. Problema solucionado.</p>\r\n<p>Ccleaner, Mvregclean, Spybot e Reintala&ccedil;&atilde;o do Antiv&iacute;rus</p>\r\n<p>Obs: Analisar o Antiv&iacute;rus para ver se realmente est&aacute; funcionando.&nbsp;</p>', '2010-10-04 13:36:46', 3, NULL),
(434, 'Antiv&iacute;rus n&atilde;o carrega e alguns programas n&atilde;o funcionam adequadamente.', '<p>V&iacute;rus e Spywares</p>\r\n<p>Solu&ccedil;&atilde;o: ( reorganiza&ccedil;&atilde;o dos &iacute;tens de inicializ&atilde;o, executado o combofix, ap&oacute;s feito o processo, Antiv&iacute;rus carregou normalmente e, os programas voltaram a funcionar).</p>', '2010-10-05 15:37:44', 3, NULL),
(435, '', '<p>Restaurei o sistema, cheguei 11:00 H e sa&iacute; 13:30 H.</p>', '2010-10-07 13:02:19', 4, NULL),
(424, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Ccleaner,spybot e Combofix.</p>', '2010-10-07 13:36:19', 3, NULL),
(429, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Ccleaner, Spybot, MvRegclean, Combofix.</p>', '2010-10-07 13:37:38', 3, NULL),
(430, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Remo&ccedil;&atilde;o de spyware.</p>', '2010-10-07 13:39:55', 3, NULL),
(436, '<p>Sem Internet. (Modem apresentando problema).</p>', '<p>Reset no Modem e feita configura&ccedil;&atilde;o novamente. (Modem ZTE 831 series).</p>', '2010-10-07 13:43:31', 3, NULL),
(437, '<p>Impressora n&atilde;o imprime.</p>', '<p>Instala&ccedil;&atilde;o da mesma por telefone.</p>', '2010-10-07 13:46:22', 3, NULL),
(439, 'Sami e Loca&ccedil;&atilde;o n&atilde;o entram.', '<p>Mapeamento refeito.</p>\r\n<p>S:sami&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;R:loca&ccedil;&atilde;o</p>', '2010-10-07 14:45:25', 3, NULL),
(441, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Ccleaner, Spybot, Mv Regclean, Combofix</p>', '2010-10-14 12:47:21', 3, NULL),
(440, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Corrido o mapeamento.</p>', '2010-10-15 16:55:51', 3, NULL),
(450, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito um enchimento.</p>', '2010-10-27 12:15:41', 3, NULL),
(449, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-10-27 12:16:34', 3, NULL),
(447, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Remo&ccedil;&atilde;o de spywares e limpeza</p>', '2010-10-27 12:17:42', 3, NULL),
(446, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito a troca</p>', '2010-10-27 12:18:21', 3, NULL),
(445, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Windows reparado com o cd</p>', '2010-10-27 12:20:04', 3, NULL),
(444, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>A alimenta&ccedil;&atilde;o estava desconectada.</p>', '2010-10-27 12:20:51', 3, NULL),
(438, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do.</p>', '2010-10-27 12:22:00', 3, NULL),
(451, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-10-27 12:33:34', 3, NULL),
(454, '<p>Problema no Iexplorer.</p>', '<p>Utilizando o mozila para o acesso ao Bradesco.</p>', '2010-11-03 11:14:54', 3, NULL),
(443, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2010-11-03 11:15:55', 3, NULL),
(455, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-11-09 13:18:02', 3, NULL),
(456, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2010-11-09 13:19:42', 3, NULL),
(457, 'Office 2007, prblema ao fechar.', '<p>Instala&ccedil;&atilde;o do servica pack 2 no office 2007</p>', '2010-11-09 13:21:46', 3, NULL),
(452, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>conclu&iacute;do.</p>', '2010-11-09 13:23:09', 3, NULL),
(458, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Atualiza&ccedil;&atilde;o do navegador</p>', '2010-11-09 13:29:56', 3, NULL),
(460, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Ativa&ccedil;&atilde;o do Windows</p>', '2010-11-09 15:20:28', 3, NULL),
(459, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Conclu&iacute;do', '2010-11-12 16:59:17', 3, NULL),
(393, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2010-11-12 17:16:03', 3, NULL),
(463, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>A Assist&ecirc;ncia t&eacute;cnica do Cupom cobrou R$150,00 pela manuten&ccedil;&atilde;o.</p>', '2010-11-26 13:47:07', 3, NULL),
(466, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Problema com o provedor</p>', '2010-11-26 13:47:59', 3, NULL),
(467, '<p>Placa M&atilde;e queimada.</p>', '<p>Substitui&ccedil;&atilde;o da mesma PC 064.</p>', '2010-11-26 13:49:59', 3, NULL),
(474, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Troca de posi&ccedil;&atilde;o com Pc 058</p>', '2010-11-26 14:04:03', 3, NULL),
(475, '<p>&Iacute;tens exclu&iacute;dos muito cheio.</p>', '<p>Excuir caixa de &iacute;tens exclu&iacute;dos</p>', '2010-11-26 14:06:57', 3, NULL),
(476, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Limpezada mem&oacute;ria</p>', '2010-11-26 15:07:25', 3, NULL),
(477, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Atualiza&ccedil;&atilde;o do office para o 2007</p>', '2010-11-26 15:08:54', 3, NULL),
(478, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Manuten&ccedil;&atilde;o corretiva.</p>', '2010-11-26 15:11:58', 3, NULL),
(479, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do.</p>', '2010-11-26 15:13:33', 3, NULL),
(480, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-11-26 15:15:10', 3, NULL),
(481, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-11-26 15:17:24', 3, NULL),
(482, '<p>Impressora n&atilde;o imprimi devido a m&aacute; comunica&ccedil;&atilde;o com o cartucho preto.</p>', '<p>Substitui&ccedil;&atilde;o do mesmo.</p>', '2010-11-29 14:09:08', 3, NULL),
(413, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O usu&aacute;rio n&atilde;o ligava as m&aacute;quinas para teste.</p>', '2010-12-08 09:41:27', 4, NULL),
(415, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O usu&aacute;rio n&atilde;o ligava as m&aacute;quinas para teste.</p>', '2010-12-08 09:41:47', 4, NULL),
(414, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O usu&aacute;rio n&atilde;o ligava as m&aacute;quinas para teste.</p>', '2010-12-08 09:42:04', 4, NULL),
(426, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O usu&aacute;rio n&atilde;o ligava as m&aacute;quinas para teste.</p>', '2010-12-08 09:42:23', 4, NULL),
(427, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O usu&aacute;rio n&atilde;o ligava as m&aacute;quinas para teste.</p>', '2010-12-08 09:42:45', 4, NULL),
(416, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O usu&aacute;rio n&atilde;o ligava as m&aacute;quinas para teste.</p>', '2010-12-08 09:43:05', 4, NULL),
(470, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Servi&ccedil;o executado, c&acirc;meras funcionando.</p>', '2010-12-08 09:45:04', 4, NULL),
(432, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>M&aacute;quina foi entregue funcionando e ficou para backup.</p>', '2010-12-08 09:46:08', 4, NULL),
(425, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>N&atilde;o aparece descri&ccedil;&atilde;o do chamado.</p>', '2010-12-08 09:47:49', 4, NULL),
(487, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Lubrifiquei o coler e voltou a funcionar.</p>', '2010-12-08 09:48:54', 4, NULL),
(465, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do.</p>', '2010-12-09 13:20:10', 3, NULL),
(489, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2010-12-09 13:22:32', 3, NULL),
(496, '<p>Hd </p>', '<p>Substitui&ccedil;&atilde;o do mesmo.</p>', '2010-12-09 13:38:46', 3, NULL),
(497, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-12-09 13:41:03', 3, NULL),
(498, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Reinstala&ccedil;&atilde;o do office, e&nbsp;configurado o compartilhamento da impressora</p>', '2010-12-09 13:48:10', 3, NULL),
(488, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2010-12-09 14:02:07', 3, NULL),
(499, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do.</p>', '2010-12-10 16:10:23', 3, NULL),
(500, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>O problema da impress&atilde;o foi direcionado para o pessoal do suporte ao sistema, aguardando contado.</p>\r\n<p>Computador do Felipe, foi substituido o cooler do processador.</p>', '2010-12-10 16:15:27', 3, NULL),
(401, '<p>Programa&ccedil;&atilde;o de Backup pela Fita Dat HP.</p>', '<p>N&atilde;o foi fornecido o Software em portugues conforme combinado.</p>', '2010-12-28 21:18:26', 22, NULL),
(403, '<strong>Backup dos dados dos computadores antigos para HD externo.</strong>', '<p>N&atilde;o houve a libera&ccedil;&atilde;o dos computadores para executador os procedimento.</p>\r\n<p>Ser&aacute; reagendado futuramente pelo respons&aacute;vel do escr&iacute;t&oacute;rio.</p>\r\n<p>&nbsp;</p>', '2010-12-28 21:21:02', 22, NULL),
(431, '<strong>Travando o sistema operacional.</strong>', '<p>Reinstala&ccedil;&atilde;o do sistema operacional (windows XP)</p>', '2010-12-28 21:22:37', 22, NULL),
(411, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Chamado fechado sem descris&atilde;o da solicita&ccedil;&atilde;o pelo cliente</p>', '2010-12-28 21:24:20', 22, NULL),
(442, '<p>Pedro solicitou configura&ccedil;&atilde;o do acesso remoto pelo Logmein.</p>', '<p>Solicita&ccedil;&atilde;o conclu&iacute;da com sucesso.</p>', '2010-12-28 21:27:58', 22, NULL),
(448, '<p><strong>Instala&ccedil;&atilde;o servidor alterdata</strong></p>', '<p>Instala&ccedil;&atilde;o conclu&iacute;da conforme solicitado.</p>', '2010-12-28 21:34:29', 22, NULL),
(468, '<strong>Organiza&ccedil;&atilde;o final dos acabamentos e arruma&ccedil;&atilde;o dos cabos nas mesas dos computadores.<br /><br />Cliente: MLA</strong>', '<p>Chamado conclu&iacute;do conforme solicitado no 22/12</p>', '2010-12-28 21:36:16', 22, NULL),
(471, '<strong>Prepara&ccedil;&atilde;o de novo servidor de c&acirc;meras para o Mercado Cortes do PIra.</strong>', '<p>Servidor de c&acirc;meras foi conclu&iacute;do, e entrega ao Mercado conforme solicitado.</p>', '2010-12-28 21:38:39', 22, NULL),
(486, '<strong>Configura&ccedil;&atilde;o do acesso as c&acirc;meras pelo iPhone.</strong>', '<p>Acesso conclu&iacute;do conforme solicitado.</p>', '2010-12-28 21:39:36', 22, NULL),
(494, '<p>Instala&ccedil;&atilde;o de servidor de backup Mercado Cruzeiro do Sul (Pira)</p>', '<p>Chamado conclu&iacute;do conforme solicitado.</p>', '2010-12-28 21:42:11', 22, NULL),
(490, '<strong>Instala&ccedil;&atilde;o de certificado digital (bancos)</strong>', '<p>Chamado conclu&iacute;do por acesso remoto.</p>', '2010-12-28 21:44:11', 22, NULL),
(485, '<strong>Computador muito lento, e travando.</strong>', '<p>Limpesa de registro e tempor&aacute;rios.</p>\r\n<p>Conclu&iacute;do por acesso remoto.</p>', '2010-12-28 21:45:16', 22, NULL),
(484, '<strong>Configura&ccedil;&atilde;o e ajuste de drive de monitor, para visualiza&ccedil;&atilde;o de aplicativo.</strong>', '<p>Conclu&iacute;da a instala&ccedil;&atilde;o do drive do monitor por acesso remoto.</p>', '2010-12-28 21:46:20', 22, NULL),
(483, '<strong>Placa de Captura de Imagens duplicando imagens no monitor.</strong>', '<p>Placas de capturas danificadas por RAIO. Foi encaminhada para segue para conserto.</p>\r\n<p>Ap&oacute;s o conserto das placas o servidor voltou a funcionar normalmente.</p>', '2010-12-28 21:48:50', 22, NULL),
(505, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Maquina foi formatada e est&aacute; funcionando bem.', '2011-01-03 12:31:00', 4, NULL),
(503, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Cassius Limpou a mem&oacute;ria e resolveu o problema.', '2011-01-03 12:34:47', 4, NULL),
(507, '<strong>Importa&ccedil;&atilde;o de&nbsp;mensagem do Outlook.</strong>', '<p>Chamado conclu&iacute;do ap&oacute;s suporte telef&ocirc;nico.</p>', '2011-01-03 12:51:17', 22, NULL),
(508, '<b>TERALAB n&atilde;o admite paciente em 2011.<br />Erro de [VISUALTECH EXE 1,9] fim de &aacute;rea de mem&oacute;ria.</b>', 'Segue descritivo da solu&ccedil;&atilde;o<br /> <br /> Procedimento para altera&ccedil;&atilde;o de global SESI Fribrugo ( Virada de ano)<br />  <br />  Backup da Global<br />  Entrar no utilit&aacute;rio de manuten&ccedil;&atilde;o<br />  &lt;ger&ecirc;ncia do sistema&gt;&lt;transfere&gt;&lt;Lab&gt;&lt;super Mumps-  Windows&gt;&lt;transfer&ecirc;ncia de  globais&gt;&lt;copiar&gt;&lt;LCAPO&gt;&lt;ENTER&gt;\r\n<div id=":1g5"><wbr></wbr>&lt;END&gt;<br clear="all" /> <br />  Editar a Global<br />  Entrar no utilit&aacute;rio de manuten&ccedil;&atilde;o<br />  &lt;programa&ccedil;&atilde;o&gt;&lt;Lab&gt;<br />  D E^%G<br />  LCAPO(1,&quot;FRI&quot;,0<br />  &lt;trocar&gt;^j^<br />  &lt;ENTER&gt;<br />digitar ^k^<br />&lt;ENTER&gt;<br />Confirma? &lt;s&gt;<br /> <br /> Testes OK</div>', '2011-01-04 14:40:06', 22, NULL),
(473, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Resolvido</p>', '2011-01-12 10:23:35', 3, NULL),
(461, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Resolvido</p>', '2011-01-12 10:24:00', 3, NULL),
(462, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Resolvido</p>', '2011-01-12 10:24:21', 3, NULL),
(491, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Resolvido</p>', '2011-01-12 10:24:59', 3, NULL),
(464, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2011-01-12 10:25:32', 3, NULL),
(495, '<p>Mem&oacute;ria</p>', '<p>Substitui&ccedil;&atilde;o</p>', '2011-01-12 10:27:02', 3, NULL),
(492, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Resolvido</p>', '2011-01-12 10:27:34', 3, NULL),
(472, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2011-01-19 12:04:05', 3, NULL),
(502, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2011-01-19 12:04:36', 3, NULL),
(510, '<p><strong>Servidor travando, e aleatoriamente falhando visualiza&ccedil;&atilde;o das c&acirc;meras.</strong></p>', '<p>Reconfigura&ccedil;&atilde;o do servidor,&nbsp;remo&ccedil;&atilde;o de v&iacute;rus, e instala&ccedil;&atilde;o do AVG.</p>', '2011-01-20 09:56:14', 22, NULL),
(501, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2011-02-01 13:24:27', 3, NULL),
(513, '<p>Cooler da placa de v&iacute;deo quebrado.</p>', '<p>Preventiva em decorr&ecirc;ncia da poeira,substitui&ccedil;&atilde;o do cooler e dissipador da placa de v&iacute;deo.</p>\r\n<p>Substitui&ccedil;&atilde;o da fonte sugerida por Faustino.&nbsp;</p>', '2011-02-01 13:28:23', 3, NULL),
(512, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>J&aacute; foi solucionado</p>', '2011-02-01 13:29:25', 3, NULL),
(516, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Foi trocada a Motherboard e m&aacute;quina funciona normalmente, j&aacute; foi entregue.', '2011-02-11 09:26:06', 4, NULL),
(520, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Impressora foi instalado.', '2011-02-11 09:40:28', 4, NULL),
(527, 'Descriï¿½ï¿½o tï¿½cnica do problema', 'Liguei o swtch.', '2011-02-18 16:42:45', 4, NULL),
(537, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Placa de rede colocada.', '2011-02-22 13:56:28', 4, NULL),
(538, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Foi reinstalada m&aacute;quina com outro Hd, por&eacute;m ap&oacute;s subir windows travou 2 vezes, Felipe aconselhou colocar outra m&aacute;quina que estava parada no lugar, coloquei e est&aacute; funcionando, Felipe ficou de comprar outro Hd e ligar para inslat&aacute;-la.', '2011-02-22 13:59:38', 4, NULL),
(522, '<strong>Criar acesso ao sistema TERALAB</strong>', '<p>Chamado Conclu&iacute;do conforme solicitado.</p>', '2011-02-25 15:16:33', 22, NULL),
(524, '<b>Lan&ccedil;amentos 05 de cabos UTP para mudan&ccedil;a f&iacute;sica do Rack do Servidor</b>.', 'Lanamento dos cabos conclu&iacute;dos conforme solicitado.<br />T&eacute;cnicos Marcos e Everaldo', '2011-02-25 18:00:18', 22, NULL),
(549, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Fui l&aacute; e n&atilde;o apresentou o problema, se problema reaparecer trocarei o cabo.', '2011-03-01 16:44:56', 4, NULL),
(540, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'N&atilde;o apresentou problema na hora, trocarei o cabo se voltar o problema.', '2011-03-01 16:49:34', 4, NULL),
(550, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'M&aacute;quina foi instalada.', '2011-03-02 14:07:59', 4, NULL),
(504, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'N&Atilde;o se sabe, pois falta explica&ccedil;&atilde;o.', '2011-03-02 14:08:56', 4, NULL),
(515, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Placa foi instalada.', '2011-03-02 14:09:55', 4, NULL),
(518, '<b>Mudan&ccedil;a dos arquivos de sistema da unidade d: para c:</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2011-03-12 12:38:01', 22, NULL),
(525, '<b>Mudan&ccedil;a f&iacute;sica dos computadores para novo LAYOUT.</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2011-03-12 13:25:27', 22, NULL),
(548, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Foi reencaixado o f&ecirc;mea que tinha saido da caixinha.', '2011-03-17 10:11:14', 4, NULL),
(563, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Foi instalado o Power Dvd.', '2011-03-17 10:16:06', 4, NULL),
(558, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'O cabo foi lan&ccedil;ado para a recep&ccedil;&atilde;o.', '2011-03-22 14:50:17', 4, NULL),
(523, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Foram trocados a fonte e o encaixe do soquete, m&aacute;quina foi entregue e funciona normalmente na recep&ccedil;&atilde;o.', '2011-03-22 14:52:15', 4, NULL),
(566, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'M&aacute;quina foi reparada e funciona.', '2011-03-22 14:54:39', 4, NULL),
(469, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito reorganiza&ccedil;&atilde;o de cabos no SWITCH.', '2011-03-22 16:13:57', 2, NULL),
(506, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito instala&ccedil;&atilde;o de sistema operacional e placa GEOVISION.', '2011-03-22 16:14:41', 2, NULL),
(509, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito limpeza de arquivos tempor&aacute;rios do IE8.', '2011-03-22 16:16:07', 2, NULL),
(521, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito troca de fonte.', '2011-03-22 16:16:34', 2, NULL),
(539, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'J&aacute; havia trocado fonte. Mas a placa-m&atilde;e estava com falha no circuito el&eacute;trico queimando as fontes.', '2011-03-22 16:17:46', 2, NULL),
(544, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito migra&ccedil;&atilde;o de dados para o novo servidor.', '2011-03-22 16:18:50', 2, NULL),
(553, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito troca de placa m&atilde;e e recupera&ccedil;&atilde;o de S.O.', '2011-03-22 16:19:47', 2, NULL),
(565, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Feito atualiza&ccedil;&atilde;o do sistema HORIZON.', '2011-03-22 16:21:20', 2, NULL),
(511, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2011-03-30 17:05:01', 3, NULL),
(514, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2011-03-30 17:06:00', 3, NULL),
(541, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2011-03-30 17:06:29', 3, NULL),
(526, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2011-03-30 17:06:54', 3, NULL),
(546, '<p>Impressora ligada no estabilizador causando o problema.</p>', '<p>Mudou a conex&atilde;o.</p>', '2011-03-30 17:08:51', 3, NULL),
(562, '<p>Fonte</p>', '<p>Substitui&ccedil;&atilde;o.</p>', '2011-03-30 17:09:39', 3, NULL),
(551, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2011-03-30 17:10:14', 3, NULL),
(554, 'Descriï¿½ï¿½o tï¿½cnica do problema', 'Cooler extra no Gabinete para diminuir a temperatura.', '2011-05-16 12:41:23', 4, NULL),
(567, 'Descriï¿½ï¿½o tï¿½cnica do problema', 'Foi passado o CHKDSK.', '2011-05-16 12:42:43', 4, NULL),
(493, '<p>Equipamento Obsoleto.</p>', '<p>Equipamento Desativado.</p>', '2011-05-27 09:36:34', 22, NULL),
(517, '<p>Instala&ccedil;&atilde;o de novo monitor no servidor.</p>', '<p>Instala&ccedil;&atilde;o conclu&iacute;da com sucesso.</p>', '2011-05-27 10:40:18', 22, NULL),
(519, '<strong>N&atilde;o acessa a Internet</strong>', '<p>Foi reiniciado o roteador e Internet voltou a funcionar normalmente.</p>', '2011-05-27 15:36:21', 22, NULL),
(542, '<strong>Instala&ccedil;&atilde;o de servidor CFTV.<br /><br />MLA</strong>', '<p>Sevidor de c&acirc;meras ativado a partir do dia 01 de abril de 2011</p>', '2011-05-27 15:37:49', 22, NULL),
(560, '<strong>Computador do Luiz&atilde;o n&atilde;o acessa o Alterdata.</strong>', '<p>Atualiza&ccedil;&atilde;o do Alterdata</p>', '2011-05-27 15:42:56', 22, NULL),
(561, '<p>N&atilde;o consegue abrir planilha. Suspeita de arquivo corrompido.</p>', '<p>Convers&atilde;o do arquivo para office 2003</p>', '2011-05-27 15:49:30', 22, NULL),
(529, '<p>E A NOVA CONFIGURA&Ccedil;&Atilde;O DO SERVIDOR? J&Aacute; TEM?</p>', '<p>J&aacute; foi Passado toda a caracter&iacute;stica com dos componentes do servidor para o e-mail da OCG</p>', '2011-05-27 15:51:29', 22, NULL),
(530, '<strong>Instala&ccedil;&atilde;o de impressora de rede color em eqipamento de exames.</strong>', '<p><strong>Chamado conclu&iacute;do com sucesso por atendimento on-line.</strong></p>', '2011-05-27 16:16:54', 22, NULL),
(535, 'Diret&oacute;rio SofGuild com direcionamento local.', 'Apontamento do diret&oacute;rio para o servidor.', '2011-05-27 19:15:19', 22, NULL),
(556, '<b>Reagendado o in&amp;iacute;cio dos trabalhos de CFTV para o dia 22/03/11.</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2011-05-27 19:16:57', 22, NULL),
(536, '<b>Cota&ccedil;&atilde;o&nbsp; de Material para Servidor OCG</b>', 'Cota&ccedil;&atilde;o enviada por e-mail.', '2011-05-27 20:20:02', 22, NULL),
(543, 'Mal contato nos conectores de rede.', 'Troca dos conectores.', '2011-05-27 20:21:20', 22, NULL),
(545, 'Capacitores estufados na placa m&atilde;e.', 'Troca dos capacitores. computador voltou a funcionar normalmente.', '2011-05-27 20:23:34', 22, NULL);
INSERT INTO `solucoes` (`numero`, `problema`, `solucao`, `data`, `responsavel`, `responsavelbkp`) VALUES
(547, 'Problemas de de superaquecimento interno.', 'Troca do cooler do processador.', '2011-05-27 20:27:23', 22, NULL),
(557, '<b>Alguns aplicativos da Receita Federal, e Caixa Econ&ocirc;mica est&atilde;o apresentando problemas.</b>', 'Padroniza&ccedil;&atilde;o dos diret&oacute;rio conforme indica&ccedil;&atilde;o de instala&ccedil;&atilde;o dos aplicativos da Receita Federal.', '2011-05-27 20:32:41', 22, NULL),
(559, 'Chamado cancelado', 'Chamado cancelado', '2011-05-27 20:33:52', 22, NULL),
(555, '<b>Verificar conector de rede do computador do Luiz&atilde;o.</b>', 'Chamado conclu&iacute;do pelo t&eacute;cnico Cassius.', '2011-05-30 15:31:03', 22, NULL),
(572, '<table width="100%" border="0" bgcolor="#FFFFFF" align="center">\r\n    <tbody>\r\n        <tr>\r\n            <td width="80%" bgcolor="#FFFFFF" align="left" colspan="5"><b>Reinstala&ccedil;&atilde;o do windows, drivers, acesso a rede e Internet e aplicativos do usu&aacute;rio.</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td width="20%" bgcolor="#E0ECFF" align="left">Unidade:</td>\r\n            <td width="30%" bgcolor="#FFFFFF" align="left">&nbsp;</td>\r\n            <td width="20%" bgcolor="#E0ECFF" align="left"><a title="Consulta a configuração do equipamento!"><font color="#5E515B"><b>Etiqueta</b></font></a> do equipamento:</td>\r\n            <td width="30%" bgcolor="#FFFFFF" align="left" colspan="3"><input type="text" value="0" id="idEtiqueta" name="etiqueta" class="data" /></td>\r\n        </tr>\r\n    </tbody>\r\n</table>', 'Chamado conclu&iacute;do conforme solicitado.', '2011-05-30 17:46:46', 22, NULL),
(573, 'Erro de conectividade causado pelo cabeamento de rede.', 'Solu&ccedil;&atilde;o de responsabilidade do SESI.<br />Feiros testes com entre dois computadores com cabo cross, e funcionou normalmente.<br /><br />In&iacute;cio 10:00 t&eacute;rmino 15:30<br /><br />30/05/2011', '2011-05-30 17:53:17', 22, NULL),
(574, '<b>Instala&ccedil;&atilde;o e padroniza&ccedil;&atilde;o do driver da impressora t&eacute;rmica em dois computadores da Cl&iacute;nica Yamane.</b>', 'Chamado conclu&iacute;do conforme solicitado.<br /><br /><b>30/05/2011 10:00:00 &agrave;s 13:30:00</b><br /><br />', '2011-05-30 18:09:00', 22, NULL),
(568, '<b><b>Instala&ccedil;&otilde;es de novas c&acirc;meras no pr&eacute;dio do arquivo.<br />Lan&ccedil;amento de cabo UTP para conex&atilde;o das rede do MLA ( TI - Arquivo)</b></b>', 'Projeto iniciado em 6/06/11 &agrave;s 9:00<br />Projeto conclu&iacute;do com sucesso em 10/06/11 &agrave;s 18:00', '2011-06-13 10:51:03', 22, NULL),
(453, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2011-06-15 16:08:32', 3, NULL),
(528, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2011-06-15 16:09:05', 3, NULL),
(531, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>&Eacute; gerenciado pelo monitor.</p>', '2011-06-15 16:10:11', 3, NULL),
(532, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Inatalado</p>', '2011-06-15 16:17:52', 3, NULL),
(533, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Repara&ccedil;&atilde;o do Windows</p>', '2011-06-15 16:19:05', 3, NULL),
(534, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2011-06-15 16:19:36', 3, NULL),
(552, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>J&aacute; mencionado que &eacute; uma particularidade do monitor</p>', '2011-06-15 16:22:30', 3, NULL),
(578, '<p>Barulho nas ventoinhas.</p>', '<p>Feito lubrifica&ccedil;&atilde;o de ventoinhas da fonte e processador.</p>', '2011-07-06 15:12:19', 2, NULL),
(579, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Teste.</p>', '2011-07-06 15:13:04', 2, NULL),
(581, '<p>Microfone n&atilde;o funciona.</p>', '<p>Troca da placa de som e o microfone voltou a funcionar normalmente.</p>', '2011-10-19 08:26:01', 22, NULL),
(587, '<p>Jo&atilde;o avalia&ccedil;&atilde;o de alguns computadores na Pac&iacute;fica do Rio.</p>', 'Solu&ccedil;&atilde;o para este problema', '2011-12-05 16:34:41', 22, NULL),
(588, '<b>Altera&ccedil;&atilde;o da letra referenta a&nbsp; mudan&ccedil;a do ano&nbsp; 2011 para 2012</b>', 'Foi preparado o ambiente para conex&atilde;o remota 02/01/2012 e foi concluido o atendimento pelo Luiz Cl&aacute;udio no dia 03/01/2011 conforme solicitado pelo cliente.', '2012-01-17 12:01:46', 22, NULL),
(589, 'Ocorreu estouro do limite de armazenamento na base de dados', 'Expans&atilde;o dos blocos para aumento da capacidade de armazenamento da&nbsp; base de dados.<br />Ap&oacute;s procedimento o servidor voltou a incluir dados normalmente.', '2012-01-17 12:08:36', 22, NULL),
(590, '<b>Solicita&ccedil;&atilde;o de impress&atilde;o do TeraLab na Impressora de rede Brother.</b>', 'No dia 16/01/2012, foi configurando nas propiedades avan&ccedil;adas da impressora o formato WINPRINT no modo TEXT.<br /><br />Teste de impress&atilde;o OK!<br /><br />', '2012-01-17 12:36:09', 22, NULL),
(591, '<b>Servidor TeraLab n&atilde;o inicializa.<br /><br />Erro (4,16)</b>', 'Foi orientado ao agente de inform&aacute;tica a desconectar e re-conectar o Hardlock.<br />Apos o procedimento o Servidor voltou a funcionar normalmente.', '2012-01-17 12:45:37', 22, NULL),
(607, '<b>Navegador internet explorer n&atilde;o gera DARF, no site da Caixa.</b>', 'Instala&ccedil;&atilde;o do navegador Mozzila Firefox.', '2012-06-27 23:19:46', 22, NULL),
(622, '<strong>Computador CDO-009 n&atilde;o esta mapeando a pasta de sistemas no servidor.</strong>', '<p>Re-configurado a bat da inicializa&ccedil;&atilde;o para login autom&aacute;tico do usu&aacute;rio de acesso a pasta de sistemas do servidor.</p>', '2012-07-04 19:57:44', 22, NULL),
(570, 'Descrição técnica do problema', 'Solução para este problema', '2012-07-05 11:43:49', 4, NULL),
(564, 'Descrição técnica do problema', 'Solução para este problema', '2012-07-05 11:44:11', 4, NULL),
(571, 'Descrição técnica do problema', 'Solução para este problema', '2012-07-05 11:44:29', 4, NULL),
(608, 'Descrição técnica do problema', 'Resolveram levar para garantia.', '2012-07-05 11:50:25', 4, NULL),
(606, 'Descrição técnica do problema', 'Reconfigurei a impressora e instalei uns aplicativos para abrir o site do banco, fiquei uma hora lá!', '2012-07-05 11:52:58', 4, NULL),
(609, 'Descrição técnica do problema', 'Mexi no registro.', '2012-07-05 11:54:31', 4, NULL),
(612, 'Descrição técnica do problema', 'A impressora foi pega no Siqueira e está instalada na CDo.', '2012-07-05 12:03:11', 4, NULL),
(602, 'Descrição técnica do problema', 'Conector refeito e cabo trocado.', '2012-07-05 12:04:43', 4, NULL),
(610, 'Descrição técnica do problema', 'Programa instalado, foi só logar conta adm.', '2012-07-05 12:06:39', 4, NULL),
(604, 'Descrição técnica do problema', 'Mexi nos conectores e o servidor voltou, a principio tinham mexido nele.\r\nDei também, uma olhada numa máquina onde condenei o hd.', '2012-07-05 12:13:22', 4, NULL),
(605, 'Descrição técnica do problema', 'Apenas conectei o cabo de força, estranho que falaram que o João tinha mexido naquela máquina.\r\nInstalei impressora compartilhado na máquina do Lero e o coloquei no mesmo grupo das outras máquinas.', '2012-07-05 12:20:10', 4, NULL),
(623, 'INSTALAR DO WINDOWS 7', 'INSTALAÇÃO DO WINDOWS 7', '2012-07-06 16:23:43', 28, NULL),
(603, 'MAU CONTATO NA MEMÓRIA ', 'LIMPAR MEMÓRIA', '2012-07-06 16:28:09', 28, NULL),
(618, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Sistema Instalado no Servidor.</p>\r\n<p>Levei 1:30h para realizar o trabalho.</p>', '2012-07-07 17:31:23', 4, NULL),
(584, 'Servidor Infectado com v&iacute;rus', 'Foi repassado para o suporte da GTI, respons&aacute;vel pela manuten&ccedil;&atilde;o dos computadores.', '2012-07-10 17:54:50', 22, NULL),
(597, '<b>O sistema TeraLab n&atilde;o esta executando no&nbsp; Perfil de&nbsp;alguns &nbsp;usu&aacute;rios.</b>', 'Cria&ccedil;&atilde;o de BAT de mapeamento do TeraLab e instala&ccedil;&atilde;o na inicializa&ccedil;&atilde;o do usu&aacute;rio All User e atalhos no Destop do usu&aacute;rio All User.', '2012-07-10 18:02:30', 22, NULL),
(596, 'Servidor Backup nao Liga', 'Troca da fonte de alimenta&ccedil;&atilde;o.', '2012-07-10 18:04:04', 22, NULL),
(616, '<b>Problemas de acesso ao site da FENACOM</b>', 'Atualiza&ccedil;&atilde;o do site', '2012-07-10 18:06:15', 22, NULL),
(624, 'Conector de com defeito', 'Troca do conector e testes na rede<br /><br />Dia 09/07/2012 in&iacute;cio 9:30 &agrave;s 10:30', '2012-07-10 18:16:03', 22, NULL),
(621, '<b>\r\n<p>Reparo do sitema de CFTV do Geraldo Camargo, casa de B&uacute;zios.</p>\r\n<p>02 c&acirc;meras com defeito</p>\r\n<p>Substitui&ccedil;&atilde;o da c&acirc;mera do acesso principal por uma outra com defini&ccedil;&atilde;o de 600 linhas.</p>\r\n</b>', 'Finalizado o servi&ccedil;o no dia 02/07/2012 hor&aacute;rio: 13:00 as 19:00', '2012-07-10 18:23:33', 22, NULL),
(620, '<b>Libera&ccedil;&atilde;o de acesso as c&acirc;meras via Web para os diretores El&aacute;dio e Alexandre.</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2012-07-10 18:25:30', 22, NULL),
(617, '<b>Instala&ccedil;&atilde;o de antiv&iacute;rus 2012</b>', 'Chamado conclu&iacute;do conforme solicitado', '2012-07-10 18:27:16', 22, NULL),
(613, 'Atolando papel', 'Recupera&ccedil;&atilde;o do mecanismo de tracionamento do papel.', '2012-07-10 18:35:21', 22, NULL),
(576, '<b>V&iacute;rus encontrado no Servidor de arquivos.</b>', 'Remo&ccedil;&atilde;o do v&iacute;rus com descontamina&ccedil;&atilde;o do servidor.', '2012-07-10 18:37:50', 22, NULL),
(580, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito</p>', '2012-07-12 15:45:19', 3, NULL),
(575, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>conclu&iacute;do</p>', '2012-07-12 15:47:30', 3, NULL),
(582, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2012-07-12 15:48:59', 3, NULL),
(583, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2012-07-12 15:49:45', 3, NULL),
(585, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2012-07-12 15:51:53', 3, NULL),
(586, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Reinstala&ccedil;&atilde;o.</p>', '2012-07-12 15:52:27', 3, NULL),
(593, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Troca de hd e reinstala&ccedil;&atilde;o.</p>', '2012-07-12 15:53:05', 3, NULL),
(598, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Remo&ccedil;&atilde;o de v&iacute;rus.</p>', '2012-07-12 15:53:31', 3, NULL),
(595, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Balancador estava pegando ip via dhcb</p>\r\n<p>&nbsp;</p>', '2012-07-12 15:55:42', 3, NULL),
(611, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Conclu&iacute;do</p>', '2012-07-12 15:56:11', 3, NULL),
(592, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Mudada a porta tcpip</p>', '2012-07-12 15:56:39', 3, NULL),
(600, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Problema com a parti&ccedil;&atilde;o.</p>', '2012-07-12 15:57:40', 3, NULL),
(619, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Feito remotamente.</p>', '2012-07-12 15:58:07', 3, NULL),
(599, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>V&iacute;rus.</p>\r\n<p>Removidos.</p>', '2012-07-12 15:58:47', 3, NULL),
(601, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Substituido hd.</p>', '2012-07-12 15:59:33', 3, NULL),
(631, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Troca e reinstala&ccedil;&atilde;o&nbsp;do hd no computador Anne e upgrade de mem&oacute;ria </p>\r\n<p>Upgrade de mem&oacute;ria em outras esta&ccedil;&otilde;es ,aguardando a compra de material para o t&eacute;rmino do servi&ccedil;o.</p>\r\n<p>10 horas de trabalho&nbsp;&nbsp;&nbsp;</p>', '2012-07-12 16:11:49', 3, NULL),
(637, 'O Equipamento de Voip perdeu conex&atilde;o com a Internet.<br />Modem sem configura&ccedil;&atilde;o de roteamento.', 'Substitui&ccedil;&atilde;o do modem e roteamento do novo modem da velox.<br />Configura&ccedil;&atilde;o de acesso a internet na faixa de rede da loja.<br /><br />dia 13/07/2012 In&iacute;cio:12:30 as 20:30', '2012-07-16 21:41:52', 22, NULL),
(635, '<b>Configura&ccedil;&atilde;o de impressora liberando 4 p&aacute;ginas do mesmo arquivo.<br />CDO-001 Laserjet 1015</b>', 'Chamado conclu&iacute;do conforme solicitado.<br /><br />dia 14 da 10:00 as 11:00', '2012-07-16 21:43:56', 22, NULL),
(634, '<b>Conectividade Social n&atilde;o abre no navegador</b>', 'instala&ccedil;&atilde;o de atualiza&ccedil;&atilde;o de seguran&ccedil;a do Windows.<br /><br /><br /><br />Dia 14/07/2012 in&iacute;cio 11:00 &agrave;s 12:00', '2012-07-16 21:46:39', 22, NULL),
(633, '<b>Recupera&ccedil;&atilde;o de arquivos do servidor.</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2012-07-16 21:47:49', 22, NULL),
(636, '<b>Atualiza&ccedil;&atilde;o windows update em todos os computadores</b>', 'Chamado conclu&iacute;do conforme solicitado.<br /><br /><br />Dia 16/07/2012 in&iacute;cio: 13:00 &agrave;s 17:00', '2012-07-16 21:57:05', 22, NULL),
(615, 'Quando uma Internet perde a conex&atilde;o a outroa n&atilde;o entra automaticamente.', 'Reconfigura&ccedil;&atilde;o do balanceamento do roteador.<br /><br />Dia 4/07/2012 in&iacute;cio 11:00 &agrave;s 16:00', '2012-07-16 22:02:27', 22, NULL),
(632, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>a placa foi presa no gabinete , sendo que o mouse e o teclado tive que trocar por USB!!!!</p>\r\n<p>Al&eacute;m disso , tive que formatar a m&aacute;quina de Seu MOTA (PC DA CASA DELE) !!!</p>\r\n<p>17/07/2012&nbsp;&nbsp; entrada: &aacute;s 9:00 HORAS&nbsp;&nbsp; &nbsp;Sa&iacute;da: &aacute;s 17:30 horas.</p>', '2012-07-20 13:01:48', 28, NULL),
(630, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Instala&ccedil;&atilde;o da nova m&aacute;quina da Suzy. Entrada: &agrave;s 13:00 horas&nbsp;&nbsp; Sa&iacute;da: &agrave;s 18:00 horas 16/07/2012</p>\r\n<p>Tendo necessidade de retorno ,no dia seguinte, para substitui&ccedil;&atilde;o da m&aacute;quina da Anne pela antiga m&aacute;quina da Suzy .</p>\r\n<p>Entrada:&agrave;s 9:30&nbsp; Sa&iacute;da:&agrave;s 14:30 horas.</p>', '2012-07-20 13:09:04', 28, NULL),
(577, '<p>O mouse foi colocado de mau jeito, que levou&nbsp;a&nbsp;um dos pinos a entortar entrando em contato com o outro. Acarretando um curto e o desligamento.</p>', '<p>Repara&ccedil;&atilde;o do mouse .</p>\r\n<p>(nenhuma pe&ccedil;a danificada)</p>\r\n<p>Entrada:13:00 horas Sa&iacute;da:14:30&nbsp;&nbsp;&nbsp; 19/07/2012</p>\r\n<p>&nbsp;</p>', '2012-07-20 13:21:03', 28, NULL),
(594, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>ip statico</p>', '2012-07-24 17:32:44', 28, NULL),
(638, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>NOS 2 PCs QUE ESTAVAM APRESENTANDO LENTID&Atilde;O ,RODEI O CCLEANER&nbsp;, UTILIZEI O MSCONFIG E&nbsp;SCANIEI COM O ANTI-V&Iacute;RUS.(REMOVI V&Iacute;RUS DO PC DA EMILIA)</p>\r\n<p>NO PC QUE N&Atilde;O SUBIA WINDOWS, RESTAUREI O WINDOWS ,DETECTEI QUE HAVIA UM V&Iacute;RUS&nbsp; MUITO FORTE&nbsp;E REINSTALEI A M&Aacute;QUINA&nbsp;.</p>\r\n<p>NO PC COM PROBLEMA DE ATUALIZA&Ccedil;&Atilde;O,DESABILITEI O WINDOWS UPDATE E ATUALIZEI O INTERNET EXPLORER.</p>\r\n<p>NO PC QUE ESTAVA COM LENTID&Atilde;O (LERO), FOI EFETUADO UMA COMPRA DE UM HD DE 500GB PARA O PC , PORQUE O HD ANTIGO DE 80GB ESTAVA APRESENTANDO LENTID&Atilde;O E RESTALEI.</p>', '2012-07-24 18:04:49', 28, NULL),
(639, 'Descrição técnica do problema', 'Reinstalei a máquina, cheguei às 15:00h do dia 31/07 e saí às 18:00h', '2012-08-01 08:35:44', 4, NULL),
(640, 'Descrição técnica do problema', 'Cheguei às 12h30 e saí 14:00h. Abilitei ponto de rede 05 no switch no lugar do 11 e ajeitei o cabo que pegava no cooler.', '2012-08-01 08:38:57', 4, NULL),
(650, 'Descrição técnica do problema', 'Cheguei 10:00 e saí 12h30 e tive que instalar na minha máquina para após importar para máquina do léo.', '2012-08-01 09:55:27', 4, NULL),
(652, 'Descrição técnica do problema', 'Foi reinstalado.', '2012-08-01 10:11:45', 4, NULL),
(653, 'Descrição técnica do problema', 'Troquei a fonte dia 18/07/12 e fiquei lá de 12h00 às 14h00', '2012-08-01 13:25:09', 4, NULL),
(659, '<p>Colocar um ponto de rede, instalar&nbsp;uma impressora e mapear uma pasta do servidor para&nbsp;&aacute;rea de trabalho para Penelope&nbsp;.</p>\r\n<p>Netbook&nbsp; da Ana Paula Feijor apresetando lentid&atilde;o.</p>', '<p>Foi colocado um suit presso&nbsp;em uma mesa&nbsp;ao lado&nbsp;da mesa da Penelope&nbsp;,em seguida ,foram feitos tr&ecirc;s cobos de rede ,sendo um deles utilizado para fazer o&nbsp;ponto de rede solicitado e os outros foram guardados caso fosse preciso de um cabo reserva ou at&eacute; mesmo para um outro ponto de rede.</p>\r\n<p>Foi instalado o driver da impressora do Joel na NOTBOOK da Penelope.</p>\r\n<p>Foi criado um atalho&nbsp;de uma determinada pasta contida no servidor e, colocado na &aacute;rea de trabalho da Penelopede.</p>\r\n<p>Foi executado o Ccleaner e ,em seguida , foram desabilitados os aplicativos na inicializa&ccedil;&atilde;o do&nbsp;Windows&nbsp;do NETBOOK da Ana Paula&nbsp;.( MSCONFIG )</p>\r\n<p>Dia 13/08/2012 Entrada:. 12:00 horas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sa&iacute;da:. 15:00 horas</p>', '2012-08-21 09:55:53', 28, NULL),
(660, '<p>Instalar o Office 2007 na m&aacute;quina da recep&ccedil;&atilde;o, que est&aacute; sendo usada pela Roberta .</p>', '<p>Foi instalado o Office 2007 na m&aacute;quina da recep&ccedil;&atilde;o, que est&aacute; sendo usada pela Roberta .</p>\r\n<p>Dia 17/08/2012&nbsp; Entrada:. 15:00 horas&nbsp;&nbsp; Sa&iacute;da:. 16:00 horas</p>', '2012-08-21 10:01:33', 28, NULL),
(657, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2012-08-29 17:58:40', 3, NULL),
(654, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2012-08-29 18:02:43', 3, NULL),
(658, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2012-08-29 18:03:03', 3, NULL),
(656, '<b>Computadores da Recep&ccedil;&atilde;o da CDO (Cl&iacute;nica Yamane) com impress&atilde;o desformatada.</b>', 'Atualiza&ccedil;&atilde;o de seguran&ccedil;a do Windows e configura&ccedil;&atilde;o de formato de impress&atilde;o de A6 para A4', '2012-09-04 11:28:56', 22, NULL),
(655, 'Modem da Loja da multicoisas Nova Am&eacute;rica perdeu configura&ccedil;&atilde;o de acesso Internet.', 'Visita local para reconfigura&ccedil;&atilde;o do roteamento do modem.', '2012-09-04 11:30:59', 22, NULL),
(645, 'Equipamentos apresentando muita lentid&atilde;o e travamento.', 'Instala&ccedil;&atilde;o e configura&ccedil;&atilde;o do Windows e de aplicativos do usu&aacute;rio para 02 Notebooks.', '2012-09-04 11:34:22', 22, NULL),
(651, 'Hard Lock com defeito.', 'Migra&ccedil;&atilde;o do sistema DOS para nova vers&atilde;o para Windows Visual Tech<br /><br />Servi&ccedil;o conclu&iacute;do durante o per&iacute;odo de 01 semana.', '2012-09-04 11:56:19', 22, NULL),
(642, '<b>Atualiza&ccedil;&atilde;o do navegador para acesso ao site da Golden Cross para 04 computadores</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2012-09-04 11:57:27', 22, NULL),
(625, 'Instala&ccedil;&atilde;o de impressora Multifuncional no Computador da Suzi.<br /><br />N&atilde;o instala software do Scanner.', '<span style="font-weight: bold;">Problema s&oacute; foi resolvido depois da mudan&ccedil;a do computador.<br />Foi contatado problemas de incomptatibilidade do Windows com o software da impressora.</span>', '2012-09-04 12:04:09', 22, NULL),
(643, 'Os discos do servidor perderam sincronismo com a Raid', 'Foi nescess&aacute;rio a instala&ccedil;&atilde;o do Windows Server&nbsp; e aplicativos do usu&aacute;rio.<br /><br />Foi nescess&aacute;rio&nbsp; 02 visitas noturnas para reestabelecer o funcionamento normal do servidor..', '2012-09-04 12:08:46', 22, NULL),
(646, '<b>\r\n<p>Problemas relacionados a travamentos de aplicativos e lentid&atilde;o do sistema.</p>\r\n<p>Equipamento: NoteBook</p>\r\n</b>', 'Reinstala&ccedil;&atilde;o do Windows e aplicativos do usu&aacute;rio.', '2012-09-04 12:10:51', 22, NULL),
(647, '<b>Reconfigura&ccedil;&atilde;o de Raid no servidor e Instala&ccedil;&atilde;o do Windows Server</b>', 'Chamado Conclu&iacute;do conforme solicitado.', '2012-09-04 12:12:05', 22, NULL),
(649, '<b>Computador do Esrael n&atilde;o inicia o Windows e fica apitando sem parar.</b>', 'Contatado mal Contato nas mem&oacute;rias. Foi feita a limpesa das mem&oacute;rias e o computador voltou a funcionar normalmente.', '2012-09-04 12:14:30', 22, NULL),
(648, 'DIsco r&iacute;gido com defeito.', 'Troca do HD com instala&ccedil;&atilde;o do Windows&nbsp; e aplicativos do usu&aacute;rio.<br /><br />', '2012-09-04 12:16:41', 22, NULL),
(644, '<b>Impress&atilde;o de nota Fiscal com fonte muito grande e impress&atilde;o desformatada.</b>', 'atualiza&ccedil;&atilde;o do navegador e mudan&ccedil;a de formato de papelv de A6 para A4.', '2012-09-04 12:19:15', 22, NULL),
(662, '<b>Configura&ccedil;&atilde;o de compartilhamento de impressoras para os caixas.</b>', 'Chamado conclu&iacute;do conforme solicitado no 22/08/2012', '2012-09-04 12:41:31', 22, NULL),
(663, '<b>Outlook n&atilde;o recebe e nem envia email.</b>', 'Reconfigura&ccedil;&atilde;o de conta de email.', '2012-09-04 12:42:21', 22, NULL),
(664, '<b>Roteador de rede sem fio sem acesso a Internet</b>', 'Reconfigura&ccedil;&atilde;o do Roteador no dia 22/08/2012', '2012-09-04 12:43:31', 22, NULL),
(666, '<b>Computador do administrativo do Serrgio Ramalho com muita lentid&atilde;o.</b>', 'Otima&ccedil;&atilde;o de inicializ&ccedil;&atilde;o do Windows e limpeza de tempor&aacute;rios e repara&ccedil;&atilde;ode registro do WIndows.', '2012-09-04 12:45:08', 22, NULL),
(668, '<b>Computador da O&amp;M sem acesso a pasta particular no servidor.</b>', 'Reconfigura&ccedil;&atilde;o de senha no computador do usu&aacute;rio que tinha perdido o perfil anteriomente.', '2012-09-04 12:49:13', 22, NULL),
(665, '<b>Planilha compartilhada no computador da Anne esta apresentando erro ao salvar o arquivo no servidor.</b>', 'Configura&ccedil;&atilde;o de previl&eacute;gios na planilha. 04/08/2012', '2012-09-04 12:50:55', 22, NULL),
(669, '<b>Mudan&ccedil;a F&iacute;sica do Rack do Servidor</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2012-09-04 12:52:38', 22, NULL),
(670, '<b>Ponto de dados e voz.</b>', 'Chamado conclu&iacute;do no dia 22/08/2012 conforme solicitado.', '2012-09-04 12:54:47', 22, NULL),
(671, '<b>Orienta&ccedil;&atilde;o de como scannear no Word.</b>', 'Chamado conclu&iacute;do conforme solicitado.', '2012-09-04 12:57:35', 22, NULL),
(672, 'Windows expirou e não entra .', 'Reinstalei o sistema operacional e todos os aplicativos necessários.\r\nDevido a contra-tempos tive que retornar na segunda-feira.\r\nDia 31/08/2012 Entrada:14:30 horas Saída:18:00 horas\r\nDia 03/09/2012 Entrada:09:00 horas Saída:12:30 horas.', '2012-09-04 16:18:35', 28, NULL),
(673, 'Rodar anti-vírus na máquina da Cristina. Instalar aplicativos na da Patrícia. Corrigir erro na máquina que fica em frente a máquina da Cristina.', 'Rodei o avira na máquina da Cristina e comprei uma memória de 2GB  devido ao problema de lentidão ,ficando com 3GB.(CRISTINA).\r\nNa máquina da Patrícia foram instalados:adobe ,drivers ,avira , aplicativo de etiqueta ;CONFIGURAR O PC NA REDE.\r\nNa máquina que fica em frente a máquina da Cristina rodei o Ccleaner.\r\n', '2012-09-04 16:30:54', 28, NULL),
(674, 'Internet Explorer não está mostrando imagens!!!!!', 'Foi instalado o Google Chome e o Firefox!!\r\nFoi executado o Ccleaner!!!!\r\nEntrada: 16:00 horas\r\nSaída: 16:30 horas', '2012-09-24 14:30:54', 28, NULL),
(675, 'Impressora não funciona na casa da Andréa(filha de Marinete)!!!!!', 'A impressora voltou a funcionar sozinha!!!\r\nFoi instalado office 2007 e, em seguida, foi executado o CCLEANER!!!! \r\nEntrada:10:30 horas\r\nSaída: 12:00 horas DIA:11/09/2012', '2012-09-24 14:36:41', 28, NULL),
(676, 'Montar um computador na sala de Darli!!! E fazer atualizações!!!! Instalar impressora!!!!!', 'Foi montado o computador na sala de Darli!!! E foram feitas atualizações e a instalação da impressora!!!!!\r\nEntrada:15:00\r\nSaída:16:30\r\nDia: 05/09/2012', '2012-09-24 14:42:11', 28, NULL),
(677, 'Mudar o Servidor,o PC da Rosa e um PC utilizado pelos médicos de uma sala para outra!!!!', 'Foram mudados o Servidor,o PC da Rosa e um PC utilizado pelos médicos de uma sala para outra!!!!\r\nEntrada:17:00 horas\r\nSaída:19:40 horas\r\nDia:14/09/2012', '2012-09-24 14:45:24', 28, NULL),
(678, 'A máquina do caixa1 não consegue inicializar o Windows!!!!! E às vezes aparece uma tela azul!!!!', 'Foi detectado que o HD estava ruim e,em seguida, foi feita uma solicitação para a compra de um novo HD , para coloca-lo no dia seguinte.\r\nRetornando no dia seguinte foram feitas a troca do HD e a reinstalação da máquina,logo, o problema foi resolvido.\r\nEntrada:14:00 horas\r\nSaída:16:00 horas\r\nDIA:20/09/2012\r\nEntrada:14:00 horas\r\nSaída:17:30\r\nDia: 21/09/2012', '2012-09-24 15:01:05', 28, NULL),
(679, 'O teclado estava com defeito!!!\r\n', 'Foi feita a troca do teclado!!!\r\nEntrada:10:30 horas\r\nSaída:12:30 horas\r\nDia: 24/09/2012', '2012-09-24 15:07:59', 28, NULL),
(667, 'Instalação e configuração do programa do DataSUS.', 'Foi instalado e configurado o programa do DataSUS.\r\n24/09/2012\r\n\r\n 14:00 horas às 16:00 horas.', '2012-10-08 09:30:01', 28, NULL),
(680, 'Computador da recepção está travando!!!!', 'Foi feita uma análise e constatou-se que o teclado estava com defeito,em seguida , foi feita a compra de um novo teclado para a troca .\r\n21/09/2012\r\nEntrada: às 14:00 horas\r\nSaída:  às 16:30 horas ', '2012-10-08 09:38:01', 28, NULL),
(681, 'Colocar os cabos de rede e telefone dentro da calha, para que a obra possa ser concluída na sala de Rosa.', 'Foram colocados os cabos de rede e telefone dentro das calhas.\r\nNeste mesmo dia, foi feita a atualização\r\ndo DATASUS no computador da Gleice.\r\nE também foi feita a troca do HD da máquina que fica ao lado da máquina da Gleice.(foi feito um espelhamento)\r\n28/09/2012\r\nEntrada: às 06:00 horas \r\nSaída: às 17:00 horas', '2012-10-08 09:45:42', 28, NULL),
(682, 'Windows não inicializa!!!!', 'Foi feito um espelhamento no HD!!!\r\n05/10/2012\r\nEntrada: às 15:00 horas\r\nSaída: às 18:00 horas', '2012-10-08 09:48:20', 28, NULL),
(683, '	Fazer gravações de imagens de câmeras no CD!!!!', '	 Foram feitas gravações das imagens das câmeras no CD!!!!\r\n05/10/2012\r\nEntrada: às 11:30 horas\r\nSaída: às 12:00 horas', '2012-10-08 09:50:40', 28, NULL),
(684, 'Trocar o monitor da recepção !!!!!', 'Foi feita a troca do monitor da recepção !!!!!\r\n08/10/2012\r\nEntrada: às 10:00 horas\r\nSaída: às 12:00 horas', '2012-10-08 11:52:02', 28, NULL),
(685, '<p>Maquina da recep&ccedil;&atilde;o est&aacute; lenta e esquentando!!!!!</p>', '<p>Foi feita&nbsp; uma limpeza na m&aacute;quina e, em seguida, foi&nbsp;rodado o Ccleaner!!!!!!!!!!</p>\r\n<p>Entrada: 14:30 horas</p>\r\n<p>Sa&iacute;da: 18:00 horas</p>\r\n<p>Dia: 09/10/2012&nbsp;</p>', '2012-10-15 13:43:38', 28, NULL),
(686, '<strong>AS M&Aacute;QUINAS DA RECEP&Ccedil;&Atilde;O N&Atilde;O EST&Atilde;O IMPRIMINDO!!!!!!!</strong>', '<p>Foi reinstalado o driver da impressora e compartilhado novamente!!!!!!!!</p>\r\n<p>Entrada: 14:30 horas</p>\r\n<p>Sa&iacute;da: 15:00 horas</p>\r\n<p>Dia: 10/10/2012</p>', '2012-10-15 13:46:28', 28, NULL),
(687, '<strong>CAMERA DO 12&deg; ANDAR PAROU DE FUNCIONAR, porque os fios da c&acirc;mera foram cortados acidentalmenrte, devido a coloca&ccedil;&atilde;o de outros fios perto da c&acirc;mera!!!!!!!</strong>', '<p>Foi refeita a fia&ccedil;&atilde;o da c&acirc;mera!!!!</p>\r\n<p>Entrada: 10:00 horas</p>\r\n<p>Sa&iacute;da: 11:30 horas</p>\r\n<p>Dia: 10/10/2012</p>', '2012-10-15 13:52:07', 28, NULL),
(688, 'LEITOR DE DISQUETE FOI ACIDENTALMENTE INJETADO PARA DENTRO DA M&Aacute;QUINA!!!', '<p>O leitor de disquete foi colocado&nbsp; no lugar e, em seguida, foi rodado o Ccleaner e instalado uma atualiza&ccedil;&atilde;o do sistema da receita!!!!(a pedido do cliente)</p>\r\n<p>Entrada: 10:00 horas</p>\r\n<p>Sa&iacute;da: 11:00 horas</p>\r\n<p>Dia:15/10/2012&nbsp;</p>', '2012-10-15 14:00:19', 28, NULL),
(689, 'Máquina da administração está apitando quando liga.', 'Foi feita uma limpeza na memória.\r\nEntrada: 09:30 horas\r\nSaída: 10:00 horas\r\nDia: 16/10/2012', '2012-10-17 16:18:17', 28, NULL),
(690, 'Montar três máquinas para Lorena.', 'Foram montadas três máquinas.\r\nDia: 16/10/2012 entrega', '2012-10-17 16:35:08', 28, NULL),
(691, 'Máquina do Thiago está lenta!!!!! Máquina da Cristina!!!!!', 'Foi rodado o Ccleaner nas duas máquinas e\r\nfoi feito também um reparo no internet explorer do PC da Cristina.\r\nFoi passado o anti-vírus.\r\nEntrada:11:30 horas\r\nSaída: 14:00 horas\r\nDia: 17/10/2012 ', '2012-10-17 16:39:57', 28, NULL),
(692, 'Ajustar câmeras do elevador de carga,7°, 8°,11°...', 'Foram ajustadas as câmeras.\r\nEntrada: 15:00 horas\r\nSaída: 16:00 horas\r\nDia: 17/10/2012', '2012-10-17 16:41:49', 28, NULL),
(693, 'Três máquinas com lentidão', 'Foi passado o Ccleaner nas máquinas e o anti-vírus.\r\nE também uma máquina que estava sem imprimir foi regulada!!!!!\r\nEntrada: 15:00 horas\r\nSaída: 17:00 horas\r\nDia: 16/10/2012', '2012-10-17 16:46:15', 28, NULL),
(694, 'MÁQUINA DA RECEPÇÃO ESTÁ SEM REDE!!!\r\n', 'FOI COLOCADO UMA PLACA DE REDE NA MÁQUINA!!!!!!(POR NECESSIDADE FOI PRECISO TERMINAR NA SEGUNDA-FEIRA)\r\nDIA:19/10/2012\r\nENTRADA: 16:00 HORAS\r\nSAÍDA: 20:00 HORAS\r\nDIA: 22/10/2012\r\nENTRADA: 09:00 HORAS\r\nSAÍDA: 11:00 HORAS   \r\n                   ', '2012-10-24 10:24:04', 28, NULL),
(695, 'COMPUTADOR DA BIBLIOTECA QUANDO INICIADO VAI PARA O SETAP!!!!', 'FOI FEITA O TROCA DA BATERIA DA PLACA\r\nE REFEITA AS CONFIGURAÇÕES NO SETAP!!!!\r\nDIA: 19/10/2012\r\nENTRADA: 11:30 HORAS\r\nSAÍDA: 15:30 HORAS', '2012-10-24 10:29:06', 28, NULL),
(696, 'CÂMERA DO 10° ANDAR ESTÁ APONTADA PARA O TETO!!!!', 'FOI AJUSTADA A CÂMERA\r\nOBS:CÂMERA VIRADA PELOS MORADORES.\r\nDIA:22/10/2012\r\nENTRADA:09:00 HORAS\r\nSAÍDA: 11:00 HORAS', '2012-10-24 10:31:56', 28, NULL),
(697, 'MÁQUINA DE IVAN NÃO ESTÁ LIGANDO!!!!!', 'FOI VERIFICADO O CABO DE FORÇA!!!!\r\nE FOI RODADO O CCLEANER !!!!\r\nNESTE MESMO DIA FORAM ENTREGUES AS INFORMAÇÕES PARA SEU MOTA!!!\r\nDIA:20/10/2012\r\nENTRADA: 14:0 HORAS\r\nSAÍDA: 16:00 HORAS', '2012-10-24 11:18:52', 28, NULL),
(698, 'IMPRESSORA ESTÁ DEMORANDO PARA CONECTAR!!!!! E ALGUMAS PÁGINAS DA INTERNET NÃO ESTÃO ABRINDO!!!!', 'FOI RESTAURADO OS PLUGS DO CABO DE REDE DA IMPRESSORA!!!\r\nE O GOOGLE CHOME FOI REINSTALADO EM DUAS MÁQUINAS.\r\nDIA:23/10/2012\r\nENTRADA:12:30 HORAS\r\nSAÍDA: 13:30 HORAS', '2012-10-24 11:23:03', 28, NULL),
(699, '	E-MAIL NÃO ESTÁ ABRINDO(MÁQUINA DA NÍZIA)!!!', 'FOI RODADO O CCLEANER E, EM SEGUIDA, FOI FEITA OUTRA SENHA PARA OS EMAILS DE ENTRADA E SAÍDA.\r\nFOI CRIADA UMA NOVA PASTA PARA SALVAR OS EMAILS QUE ESTAVAM NA CAIXA DE SAÍDA!!! ', '2012-10-24 11:26:49', 28, NULL),
(700, 'Trocar o servidor de uma sala para a outra!!!', 'Servidor,pc da Rosa e pc do médico levado para a sala almejada!!!\r\nEntrada: 19:00 horas\r\nSaída: 21:30 horas\r\nDia: 24/10/2012 ', '2012-11-08 10:12:46', 28, NULL),
(701, 'Computador da Rosa desliga sozinho!!!', 'Foi feita uma limpeza na máquina e foi colocada uma memória nova!!!\r\nDia:30/10/2012\r\nEntrada:09:00 horas\r\nSaída:10:30 horas ', '2012-11-08 10:16:59', 28, NULL),
(702, 'ATUALIZAR SISTEMA DO SUS!!!!', 'Sistema do sus atualizado!!!\r\nDIA:06/11/2012\r\nEntrada: 11:30 horas\r\nSaída: 13:30 horas', '2012-11-08 10:19:13', 28, NULL),
(703, 'Reinstalar a máquina da Nízia e consertar o cabo de rede!!', 'Máquina reinstalada e cabo refeito!!!!\r\nDia: 01/11/2012\r\nEntrada:14:30 horas\r\nSaída:18:00 horas\r\nDia: 05/11/2012\r\nEntrada: 09:00 horas\r\nSaída: 13:00 horas', '2012-11-08 10:23:59', 28, NULL),
(704, 'Trocar um computador por outro , importar contatos do email e instalar coredraw!! Máquina da Glória!!!!', 'Troca feita, importação feita e coredraw instalado!!!\r\nEntrada:14:00 horas\r\nSaída: 16:30 horas\r\nDia: 05/11/2012', '2012-11-08 10:26:08', 28, NULL),
(705, 'Computador da admistração apresenta lentidão!!!', 'Foi rodado o Ccleaner!!!!!\r\nDia: 06/11/2012\r\nEntrada: 15:30 horas\r\nSaída: 16:20 horas ', '2012-11-08 10:29:13', 28, NULL),
(706, 'Computador da recepção não monstra imagens da câmera quando maximiza!!!!!', 'Foi reiniciada a máquina!!!!\r\nDia: 06/11/2012\r\nEntrada: 09:00 horas\r\nSaída: 09:15 horas', '2012-11-08 10:31:23', 28, NULL),
(707, 'Computador da recepção não mostra imagens das câmeras!!!', 'Cabo de rede estava com mal contato e foi recolocado!!!\r\nEntrada:09:00 horas\r\nSaída: 09:30 horas\r\nDia: 08/11/2012', '2012-11-08 10:33:38', 28, NULL),
(708, 'Anti-vírus não está atualizado!!!', 'Anti-vírus do servidor foi atualizado!!!\r\nDia: 07/11/2012\r\nEntrada: 10:00 horas\r\nSaída: 11:00 horas       (remoto)', '2012-11-08 10:35:39', 28, NULL),
(626, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2013-01-24 16:38:16', 3, NULL),
(661, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2013-01-24 16:38:52', 3, NULL),
(709, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2013-01-24 16:39:30', 3, NULL),
(710, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2013-01-24 16:39:59', 3, NULL),
(569, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Reinstalada</p>', '2013-01-24 16:41:19', 3, NULL),
(711, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<p>Reinstalada e configurado os compartilhamentos orientados pelo usu&aacute;rio Arley</p>', '2013-01-24 16:45:26', 3, NULL),
(712, '(impressora) Scanner não funciona não consegue acessar as pastas do servidor e das outras máquinas!!!! Máquina da Jaquline', 'Foi instalada uma ferramenta de escaneamento!!!!\r\nFoi criada uma pasta,e dentro da mesma foi criado um atalho de cada computador em rede!!!!\r\nDia:25/01/2013\r\nEntrada:14:30\r\nSaída:17:00   ', '2013-02-15 15:33:55', 28, NULL),
(713, 'Máquina que fica ao lado de João, não liga!!!!Fonte ruim,placa de mãe quebrada!!!', 'Foram comprados um processador,uma placa mãe e uma memória!!!Já tinha uma fonte no local!!Máquina montada com sucesso!!!\r\nDia:14/12/2012\r\nHora:13:00\r\nSaída:18:00', '2013-02-15 15:52:58', 28, NULL),
(714, 'Extrair dados do HD da Penelope!!!', 'Dados do HD da Penelope foram extraídos!!!\r\nTempo de Serviço: 9 horas\r\n\r\n ', '2013-02-22 14:23:15', 28, NULL),
(715, '<b>Servidor Linux perdendo a conex&atilde;o com a rede e apresentando erro no sistema de arquivos</b>', 'Servi&ccedil;os realizados pelo t&eacute;cnico Everaldo<br /><br />Reinstala&ccedil;&atilde;o do Linux Ubuntu server 11.10 e configura&ccedil;&otilde;es do ambiente de rede.<br /><br />18/02/2013 in&iacute;cio:10:30&nbsp; t&eacute;rmino: 18:30<br />19/02/2013 in&iacute;cio&nbsp; 10:00 t&eacute;rmino: 19:00', '2013-02-22 14:34:50', 22, NULL),
(717, 'Mudar a conta do Skype!!!!', 'A conta do Skype foi alterada!!!!\r\nDia:01/04/2013\r\nInicio: 11:30 horas \r\nTermino: 12:00 horas\r\n', '2013-04-04 12:42:09', 28, NULL),
(718, 'Padronizar todos os anti-vírus!!', 'Os anti-vírus foram atualizados!!\r\nDia:01/04/2013\r\nInicio:14:00 horas\r\nTermino: 18:00 horas ', '2013-04-04 12:44:40', 28, NULL),
(719, 'Mudar o anti-vírus dos notebooks!!!', 'Os anti-vírus dos notebooks foram alterados!!!\r\nHouve uma troca de impressoras!!!\r\nE uma reparação no IE da máquina da secretaria!!\r\nDia 02/04/2013\r\nInicio: 12:00 horas\r\nTermino: 18:00 horas', '2013-04-04 12:48:10', 28, NULL),
(720, 'Máquina parada!!!(pc da Kátia) (pc da Mônica)', 'Foi trocada a máquina da Kátia por uma  Máquina que estava parada!!!\r\nA máquina da Monica foi trocada pela antiga máquina da Kátia(que foi reparada para o uso)\r\nDia:03/04/2013\r\nInicio: 12:00 horas\r\nTermino: 18:00 horas ', '2013-04-04 12:53:13', 28, NULL),
(745, 'Máquina esquenta e coller para de funcionar!!', 'Foi feita uma limpeza na máquina,tanto no hardware, quanto no software e o coller\r\nda fonte foi lubrificado e, em seguida,\r\nfoi colocado uma pasta térmica no processador!!!', '2013-05-22 11:03:55', 28, NULL),
(746, 'Máquina esquenta!\r\nMáquina do Luciano está lenta!!!', 'Na chegada ao local a fonte já tinha \r\nsido trocada. Foi colocada uma pasta térmica no processador.\r\nNa Máquina do Luciano foram passados o\r\nCcleaner e o MvRegClean!!\r\nDia:10/05/2013\r\nEntrada: 12:00 horas\r\nSaída: 14:30 horas', '2013-05-22 12:44:27', 28, NULL),
(747, 'Teclado com mal contado!!!\r\n ', 'Apenas ajustei o plugin e reiniciei a máquina!!!(entre outras coisas que eram \r\npertinentes ao usuário)\r\nDia:13/05/2013\r\nEntrada:11:00 horas\r\nSaída:12:00 horas', '2013-05-22 12:56:02', 28, NULL),
(748, 'Colocar um pc na sala do Arlei , salvar algumas pastas do servidor para o pc da Penelope e fazer uma limpeza de software no notebook da Carmen.', 'Foi colocado um pc na sala do Arlei , foram salvas algumas pastas do servidor para o pc da Penelope e foi feita uma limpeza de software no notebook da Carmen.\r\nDia:19/07/2013\r\nEntrada:10:30\r\nSaída:14:00', '2013-07-23 09:16:10', 28, NULL),
(749, 'Reinstalar o notebook da Carmem,reinstalar um pc para Carol, reparar a caixa de entrada do Outlook da Suzy e remover alguns programas da máquina da Anne.', 'Foi reinstalado o notebook da Carmem.Foi reinstalado o pc para Carol , mas apresentou problema de hardware(hd aparentemente com defeito), por esse motivo foi colocado outra máquina que recebeu as configurações necessárias, foi feito um reparo na caixa de entrada do Outlook da Suzy e foram removidos alguns programas indesejáveis da máquina da Anne.\r\nDia:22/07/2013\r\nEntrada:10:30\r\nSaída:13:30', '2013-07-23 09:24:59', 28, NULL),
(750, 'máquina não aparece os ícones e o menu iniciar', 'Dia 04/10/2013 Entr:12:30 Saída: 16:30\r\nTentei fazer um reparo no sistema , não deu certo.Tive que voltar outro dia\r\nDia 06/10/2013 Entr:13:30 Saída: 15:30\r\nTentei fazer o backup,mas era muito grande. Então sugeri que montasse um servidor e comprasse um hd externo para backup\r\nDia 09/10/2013 Tempo gasto: \r\n3 horas(servidor)montagem e instalação no local\r\n', '2013-10-10 11:40:26', 28, NULL),
(751, 'Máquina lenta.', 'Utilizei o Ccleaner,e desinstalei programas não utilizados pelo usuário,tais como ask toolbar,baidu pc faster,entre outros.\r\nDesabilitei o windows update.', '2014-01-20 10:50:34', 41, NULL),
(752, 'Máquina lenta.', 'Utilizamos o Ccleaner,e "faxinamos" a máquina.\r\n10/01/2014 15:40/17:00.', '2014-01-20 10:54:48', 41, NULL),
(754, 'Sem internet', 'Reorganização dos cabos de rede e havia um conflito de ip, que foi solucionado na hora.\r\nOs cabos estavam muito bagunçados.\r\nEntrada:10:00\r\nSaída: 14:00\r\nDia: 13/05/2014', '2014-06-04 16:30:11', 28, NULL),
(755, 'Reorganizar os cabos e colocar a máquina remoto no local e configura-la', 'Cabos reorganizados e máquina instalada no local.\r\nEntrada: 11:00\r\nSaída: 16:00\r\nDia: 21/05/2014', '2014-06-04 16:34:59', 28, NULL),
(757, 'Não acessava a internet.', 'Configurei o servidor dns.', '2014-09-10 10:03:23', 41, NULL),
(759, 'fsdfsdf', 'sdfsdfs', '2014-10-25 14:37:18', 28, NULL),
(721, 'Descriï¿½ï¿½o tï¿½cnica do problema', 'Soluï¿½ï¿½o para este problema', '2014-10-25 19:01:23', 28, NULL),
(722, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2014-10-27 13:41:06', 3, NULL),
(723, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', 'Solu&ccedil;&atilde;o para este problema', '2014-10-27 14:07:56', 28, NULL),
(766, 'Instalar o mozila', 'Instalar o mozila', '2014-11-17 17:15:17', 60, NULL),
(869, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;M&aacute;quina do Vitor est&aacute; lenta</b>', 'Foi constatado que o processador est&aacute; ultrapassado e precisa ser trocado.', '2014-12-09 11:10:09', 51, NULL),
(771, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Impressora n&atilde;o est&aacute; funcionando e o chrome n&atilde;o est&aacute; abrindo dando erro de perfil.</b>', 'Foi reinstalado o driver da impressora e &nbsp;o perfil de usu&aacute;rio do chrome foi exclu&iacute;do, em seguida, foi gerado um novo perfil automaticamente.&nbsp;', '2014-11-18 16:34:19', 51, NULL),
(773, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Quando liga a m&aacute;quina entra direto no setup.</b>', 'Foi feita uma configura&ccedil;&atilde;o no setup de forma a solucionar o problema.', '2014-11-18 16:38:07', 51, NULL),
(780, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">N&atilde;o Visualiza as c&acirc;meras no computador da Ver&ocirc;nica.</b>', 'Instala&ccedil;&atilde;o do plugin da Gica e difini&ccedil;&atilde;o do Internet explorer como navegador padr&atilde;o para que o atalho criado na &aacute;rea de trabalho abrisse o aplicativo.', '2014-11-19 11:02:33', 22, NULL),
(781, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">N&atilde;o abre o Chrome no computador da Ang&eacute;lica.</b>', 'Reintala&ccedil;&atilde;o do Chrome.', '2014-11-19 11:06:20', 22, NULL),
(783, 'M&aacute;quina lenta,dificultando o usu&aacute;io .', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Reinstala&ccedil;&atilde;o da m&aacute;quina da ger&ecirc;ncia.&nbsp;</b>', '2014-11-19 13:45:24', 41, NULL),
(784, 'V&iacute;rus na rede,m&aacute;quinas lentas.', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n<p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n</b>', '2014-11-19 13:50:09', 41, NULL),
(785, 'Descri&ccedil;&atilde;o t&eacute;cn<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n</b>', 'Atualiza&ccedil;&atilde;o do banco de dados do anti v&iacute;rus,e limpeza de software', '2014-11-19 13:57:44', 41, NULL),
(786, 'Lentid&atilde;o e v&iacute;rus atrapalhando a m&aacute;quina.', '<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px; font-family: Arial, Helvetica, sans-serif;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><br />\r\n            <b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\nroblema', '2014-11-19 14:02:04', 41, NULL),
(788, 'Lendid&atilde;o da m&aacute;quina,v&iacute;ruas atrapalhando os ussu&aacute;rios.', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b>&nbsp;<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b>', '2014-11-19 14:07:17', 41, NULL),
(787, 'Problema de rastreamento de pasta.', 'Mapeamento refeito da pasta boleto localizada dentro do servidor em CDSIS.', '2014-11-19 14:07:22', 3, NULL),
(790, 'Lentid&atilde;o e mal funcionamento da m&aacute;quina.', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF">&nbsp;</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b>', '2014-11-19 14:12:29', 41, NULL),
(792, '<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<div>Limpeza da m&aacute;quina,muita lentid&atilde;o.</div>\r\n</span>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b>', '2014-11-19 14:16:16', 41, NULL),
(794, 'Problemas na inivializa&ccedil;&atilde;o da m&aacute;quina,muita lentid&atilde;o.', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;"><b>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b><b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">\r\n            <p>Limpeza de software,e atualiza&ccedil;&atilde;o de danco de dados do anti v&iacute;rus.</p>\r\n            <p>Total de seis (06) m&aacute;quinas verificadas.</p>\r\n            </b></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n</b></b>', '2014-11-19 14:19:04', 41, NULL),
(793, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">O outlook n&atilde;o consegue receber menssagens.</b>', 'Caixa de entrada do outlook express ultrapassou 2GB.Foi feito o backup da caixa de entrada &nbsp;atual e a mesma foi renomeada.', '2014-11-19 14:21:09', 3, NULL),
(795, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Lentid&atilde;o no sistema,amea&ccedil;a de v&iacute;rus no servidor.</b>', 'Varredura completa do sistema,atualiza&ccedil;&atilde;o no banco de dados do anti v&iacute;rus.', '2014-11-19 14:22:43', 41, NULL),
(796, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">N&atilde;o digitaliza na rede.</b>', 'Atualiza&ccedil;&atilde;o do software de digitaliza&ccedil;&atilde;o pela rede.', '2014-11-19 14:25:29', 41, NULL),
(791, 'O outlook n&atilde;o est&aacute; pesquisando as mensagens.', '<div>No menu Ferramentas, aponte para Pesquisa Instant&acirc;nea e, em seguida, clique em Op&ccedil;&otilde;es de Pesquisa.</div>\r\n<div>De forma alternativa, clique na seta do painel de Pesquisa Instant&acirc;nea e depois clique em Op&ccedil;&otilde;es de <br />\r\n<br />\r\nNo menu Ferramentas/ Pesquisa Instant&acirc;nea/Op&ccedil;&otilde;es de Pesquisa/ Pesquisa Instant&acirc;nea/Op&ccedil;&otilde;es de Pesquisa no menu.&nbsp;Em Indexa&ccedil;&atilde;o, verifique se os arquivos de dados esperados est&atilde;o selecionados na lista Indexar e desmarque.</div>', '2014-11-19 16:51:08', 51, NULL),
(798, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;N&atilde;o da para instalar a impressora porque n&atilde;o tem mais porta PCI na m&aacute;quina.</b>', 'Instala&ccedil;&atilde;o de uma nova placa m&atilde;e,e um espelho serial.', '2014-11-24 10:13:21', 41, NULL),
(800, 'M&aacute;quina travando', 'Foi feita um limpeza na m&aacute;quina(software).', '2014-11-21 11:10:27', 51, NULL),
(803, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina travando.</b>', 'Foi feita um limpeza na m&aacute;quina(software).', '2014-11-21 16:28:32', 51, NULL),
(772, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">por favor gostaria de pedir que fosse instalado o mozila nas maquinas da recep&ccedil;&atilde;o</b>', 'Foi instalado o Mozilla na m&aacute;quina cdaf-02', '2014-11-21 11:12:52', 51, NULL);
INSERT INTO `solucoes` (`numero`, `problema`, `solucao`, `data`, `responsavel`, `responsavelbkp`) VALUES
(801, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Montar uma maquina.</b>', 'A adriana vai marcar outra data,pois ela precisa arrumar um local melhor para a montagem da m&aacute;quina.', '2014-11-24 15:32:28', 41, NULL),
(850, '<b>Acessando a Internet com Lentid&atilde;o.</b>', 'Inclus&atilde;o do DNS do Velox: 200.149.55.142<br />', '2014-11-26 11:29:38', 22, NULL),
(778, '<b>Intera&ccedil;&atilde;o do emissor de nota fiscal para gera&ccedil;&atilde;o do PDF com op&ccedil;&atilde;o de impress&atilde;o<br />\r\n</b>', 'Instala&ccedil;&atilde;o do PDF CREATOR<br />', '2014-11-26 11:33:07', 22, NULL),
(805, '<div>&nbsp;</div>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px; font-family: Arial, Helvetica, sans-serif;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b>&nbsp;<span style="color: rgb(34, 34, 34); font-family: Calibri, sans-serif; font-size: 15px;">&nbsp;Problema no antiv&iacute;rus&nbsp;</span></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>', 'Atualiza&ccedil;&atilde;o para avg 2015', '2014-11-26 14:20:31', 41, NULL),
(810, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador do DP n&atilde;o acessa compartilhamento.</b>', 'Ap&oacute;s a verifica&ccedil;&atilde;o,foi constatado que n&atilde;o havia problema.', '2014-11-26 14:35:00', 60, NULL),
(809, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador n&atilde;o acessa a rede.</b>', 'Desativar o firewall do AVG ou colocar o programa nas excess&otilde;es.', '2014-11-26 14:37:55', 3, NULL),
(811, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windowns 7 na m&aacute;quina Fical-001</b>', '2014-11-26 14:40:14', 3, NULL),
(812, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windowns 7 na m&aacute;quina<br />\r\nFiscal-002</b>', '2014-11-26 14:42:03', 3, NULL),
(813, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina<br />\r\nFiscal-003</b>', '2014-11-26 14:43:55', 3, NULL),
(814, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-004.</b>', '2014-11-26 14:45:42', 3, NULL),
(815, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-005</b>', '2014-11-26 14:46:58', 3, NULL),
(816, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-006.</b>', '2014-11-26 14:48:44', 3, NULL),
(817, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina FISCAL-007.</b>', '2014-11-26 14:50:38', 3, NULL),
(818, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito Upgrade do sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina<br />\r\nFISCAL-008.</b>', '2014-11-26 14:52:30', 3, NULL),
(819, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina DESPACHANTARIA-001</b>', '2014-11-26 14:56:19', 3, NULL),
(820, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina CONT&Aacute;BIL-001', '2014-11-26 14:59:22', 3, NULL),
(821, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina CONT&Aacute;BIL-003', '2014-11-26 15:08:29', 3, NULL),
(822, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '<font face="Arial, Helvetica, sans-serif"><span style="font-size: 11px; line-height: 11px;"><b>Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina BKP-002</b></span></font>', '2014-11-26 15:11:31', 3, NULL),
(823, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina BKP-004', '2014-11-26 15:12:41', 3, NULL),
(824, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina BKP-005.', '2014-11-26 15:13:56', 3, NULL),
(825, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Upgrade de sistema operacional XP para o sistema operacional 7.</b>', 'Foi feito o Upgrade de sistema operacional XP para o sistema operacional Windows 7 na m&aacute;quina DP-006', '2014-11-26 15:15:47', 3, NULL),
(847, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Temos 2 m&aacute;quinas, que est&atilde;o com problemas. Elas est&atilde;o sem acesso ao servidor.</b>', 'restaurei uma m&aacute;quina. Desinstalei e instalei uma vers&atilde;o de driver mais recente para a conex&atilde;o wi-fi do noot.', '2014-11-26 17:24:01', 41, NULL),
(807, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">\r\n<p>Sem conec&ccedil;&atilde;o a internet.</p>\r\n<p>- Placa de rede desatualizada.</p>\r\n</b>', 'Atualiza&ccedil;&atilde;o de driver.', '2014-11-26 17:24:20', 41, NULL),
(777, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Wifi n&atilde;o funciona no notebook.</b>', 'Reinstala&ccedil;&atilde;o do driver de rede.', '2014-11-26 17:26:48', 41, NULL),
(799, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instala&ccedil;&atilde;o de software de scanner no computador AJAV07</b>', 'Atualizei o software de digitaliza&ccedil;&atilde;o,todas as m&aacute;quinas est&atilde;o digitalizando.', '2014-11-26 17:28:41', 41, NULL),
(856, 'Em fun&ccedil;&atilde;o de limpeza na recep&ccedil;&atilde;o o cabo de rede do computador foi desconectado.', 'Reconex&atilde;o do cabo de rede.<br />\r\n<br />\r\nTestes OK!', '2014-11-27 09:15:13', 22, NULL),
(776, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Reinstalar o sistema operacional para solucionar o problema do certificado digital.</b>', 'reinstala&ccedil;&atilde;o do windows e afins.', '2014-11-27 16:34:33', 41, NULL),
(767, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Necessito usar o certificado digital e ao estalar o programa da erro, n&atilde;o concluindo a instala&ccedil;&atilde;o.</b>', 'Reinstala&ccedil;ao do sistema operacional windows e afins', '2014-11-27 16:35:12', 41, NULL),
(855, 'N&atilde;o abre site da caixa.', 'J&aacute; est&aacute; abrindo o site da caixa,por&eacute;m n&atilde;o consegui fazer com que ele enviasse mensagens pelo site da caixa. Ajustei as ferramentes de acesso remoto para outrora solucionar o problema com o aux&iacute;lio de Everaldo e Fl&aacute;vio.', '2014-11-27 16:39:12', 41, NULL),
(765, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Voltar a loja para novos reparos junto com a gerente. Tem maquina que n&atilde;o est&aacute; imprimindo nota de devolu&ccedil;&atilde;o.</b>', 'Organiza&ccedil;&atilde;o de cabos.', '2014-11-28 10:17:26', 51, NULL),
(779, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;C&acirc;mera filma a frente da loja (lado esquerdo) est&aacute; com defeito.</b>', 'Foram refeitos os conectores que estavam podres e o cabo que estava sem sinal foi restaurado. Mas mesmo n&atilde;o houve solu&ccedil;&atilde;o. A solu&ccedil;&atilde;o prov&aacute;vel ser&aacute; colocar um cabo novo.', '2014-11-28 10:23:31', 51, NULL),
(808, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">As novas cameras que foram instaladas n&atilde;o est&atilde;o aparecendo no monitor. Provavelmente n&atilde;o esta gravando.</b>', 'Foi trocada a fonte das cameras que estava queimada &nbsp;por uma fonte com&eacute;ia.', '2014-11-28 10:25:56', 51, NULL),
(848, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina do caixa quando liga fica apitando.</b>', 'Vericar se a placa m&atilde;e est&aacute; com deifeito. Cliente aguardando resposta.', '2014-11-28 10:30:06', 51, NULL),
(859, 'Sem impressora PDF', 'Foi instalado PDF CREATOR', '2014-11-28 12:24:51', 22, NULL),
(857, 'Em fun&ccedil;&atilde;o de limpesa no local, foi desconectado o cabo de rede.<br />', 'Reconex&atilde;o do cabo de rede.<br />', '2014-11-28 13:32:07', 22, NULL),
(858, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Central telefonica n&atilde;o est&aacute; funcionando.</b>', 'Desligar e ligar.(pode ter sido um mal contato tamb&eacute;m).', '2014-11-28 13:37:42', 51, NULL),
(861, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Poder imprimir em pdf.</b>', 'Foi instada o programa CuterPdf.', '2014-11-28 13:44:54', 51, NULL),
(862, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instalar driver da impressora no notebook(sala com porta de vidro).</b>', 'Foi instalado o driver da impressora.', '2014-11-28 13:45:49', 51, NULL),
(860, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina com hao123 na p&aacute;gina inicial.</b>', 'Foi removido da p&aacute;gina inicial o Hao123 e colocado o Google.', '2014-11-28 13:47:05', 51, NULL),
(852, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">O Internet Explorer n&atilde;o est&aacute; funcionando.</b>', 'Foi desinstalado o Internet Explorer 9 e substituido pela vers&atilde;o 8.', '2014-11-28 14:09:06', 60, NULL),
(826, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador Contabil-008.Upgrade de sistema operacional XP para o sistema operacional 7</b>', '2014-12-01 12:25:49', 3, NULL),
(827, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador Contabil-007.Upgrade de sistema operacional XP para o sistema operacional 7.</b>', '2014-12-01 12:21:11', 3, NULL),
(828, 'Descri&ccedil;&atilde;o t&eacute;cnica do problema', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador BKP-003.Upgrade de sistema operacional XP para o sistema operacional 7</b>', '2014-12-01 12:27:14', 3, NULL),
(863, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Montagem de novo computador</b>', 'Montagem efetuada,por&eacute;m a placa m&atilde;e veio ruim. Aguardando a troca para remontar a m&aacute;quina.', '2014-12-01 12:33:47', 41, NULL),
(872, '<b>Colocar roteador sem fio no meio da loja.</b>', 'Compra e instala&ccedil;&atilde;o de Access Point na Loja da Paravidino Niter&oacute;i.<br />\r\n<br />\r\nTestes OK!<br />', '2014-12-02 09:56:03', 22, NULL),
(880, 'Foi identificado problemas com o DNS devido a falta de pagamento.', 'O Cliente ficou de efetuar o pagamento para solu&ccedil;&atilde;o do problema.', '2014-12-03 20:06:45', 22, NULL),
(884, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Pasta documentos exclu&iacute;da.</b>', 'A pasta foi restaurada da lixeira.', '2014-12-04 09:52:31', 51, NULL),
(881, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Impressora n&atilde;o esta imprimindo.</b>', 'Feito troca de porta USB.&nbsp;', '2014-12-04 10:48:15', 41, NULL),
(885, 'Plugin do java bloqueado.', 'Foi desbloqueado a plugin do java no Chrome.', '2014-12-04 10:52:44', 51, NULL),
(875, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Computador quando envia impress&atilde;o s&oacute; vai a 1&ordm; p&aacute;gina (sala de retinografia).</b>', 'O problema parou de ocorrer.', '2014-12-04 10:56:13', 51, NULL),
(886, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">programa BB cobran&ccedil;a emiss&atilde;o boleto n&atilde;o abre (msg erro firewall).</b>', 'Foi reiniciado o servi&ccedil;o do Firebird que &eacute; o&nbsp;<span style="font-weight: bold; color: rgb(84, 84, 84); font-family: arial, sans-serif; font-size: small; line-height: 18.2000007629395px;">GDB do sistema do Banco do Brasil. Ir em pesquisa digitar servi&ccedil;os e iniciar o servi&ccedil;o com o nome de firebird.</span>', '2014-12-04 11:14:26', 51, NULL),
(871, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Ativar o sistema operacional windows 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Foi ativado o sistema operacional windows 7 da m&aacute;quina cdo-002.</b>', '2014-12-04 11:34:13', 51, NULL),
(877, '<div>&nbsp;</div>\r\n<div>\r\n<table border="0" align="left" width="1100" bgcolor="#FFFFFF" style="line-height: 1em; font-size: 11px; font-family: Arial, Helvetica, sans-serif;">\r\n    <tbody>\r\n        <tr>\r\n            <td colspan="5" width="80%" align="left" bgcolor="#FFFFFF"><b>Micro. 02 sem &nbsp;internet.</b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>', 'Reconfigura&ccedil;&atilde;o de &nbsp;endere&ccedil;o IP.', '2014-12-04 13:49:39', 41, NULL),
(889, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Recuperar arquivo de planilha exclu&iacute;da do servidor.</b>', 'N&atilde;o foi poss&iacute;vel recuperar o arquivo &quot;Planilha de Entrega CDO 2014&quot; (usu&aacute;rio informado).', '2014-12-04 16:22:46', 51, NULL),
(891, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Ativa&ccedil;&atilde;o do windows 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Foi ativado o windows 7 da m&aacute;quina cdo-007(Cris).</b>', '2014-12-04 16:24:59', 51, NULL),
(890, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Ativa&ccedil;&atilde;o do windows 7.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Foi ativado o windows 7 da m&aacute;quina cdo-007(Cris).</b>', '2014-12-04 16:25:35', 51, NULL),
(887, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Oi Boa Tarde<br />\r\ne a Rosi o meu computador depois que baixei um programa da receita federal &nbsp;veio uma ame&ccedil;a de virus (cavalo de troia ) e anti virus pediu para remover a ame&ccedil;a , e eu fiz isto. Mas o computador est&aacute; travando qualquer link que eu tentei abrir, e ja reiniciei a maquina.</b>', 'Atualizei o banco de dados do AVG do 2014 para o 2015.', '2014-12-04 16:54:48', 41, NULL),
(878, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Consertar fonte Dell queimada retirada para Laborat&oacute;rio.</b>', 'Fonte trocada (pc da administra&ccedil;&atilde;o).', '2014-12-05 12:57:48', 51, NULL),
(892, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;M&aacute;quina muito lenta,as vezes reinicia sozinha e demora muito pra ligar e desligar.</b>', '<p>Limpeza de hardware e software. O HD da m&aacute;quina se encontra com ru&iacute;dos e relativamente mais quente que o normal,a m&aacute;quina possui 2GB ran,executei limpeza f&iacute;sica com pincel,limpeza dos contatos da mem&oacute;ria e limpeza do software com ccleaner e combofix. A m&aacute;quina estava sem anti v&iacute;rus.</p>\r\n<p>&nbsp;</p>', '2014-12-05 18:18:08', 41, NULL),
(895, 'Placa m&atilde;e n&atilde;o funciona.', 'Trocar placa m&atilde;e(crit&eacute;rio do cliente)', '2014-12-09 11:14:22', 51, NULL),
(894, 'Processador ruim.', 'Trocar processador(Crit&eacute;rio do cliente)', '2014-12-09 11:15:39', 51, NULL),
(896, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Atualiza&ccedil;&atilde;o do programa da caixa n&atilde;o funciona</b>', 'Baixar os arquivos necess&aacute;rios e extra&iacute;-los e depois apontar o caminho para os arquivos extra&iacute;dos.<br />\r\nNo windows 7 o execut&aacute;vel n&atilde;o funciona tem que extrair.', '2014-12-09 11:19:43', 51, NULL),
(897, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Token instala, mas n&atilde;o l&ecirc; o certificado.&nbsp;</b>', 'Procurar o suporte do emissor do certificado(Aladdin-Certisign)', '2014-12-09 11:56:34', 51, NULL),
(898, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Conectividade social n&atilde;o funciona.</b>', 'Colocar o internet explorer em modo compatibilidade.', '2014-12-09 14:03:35', 51, NULL),
(899, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Noot n&atilde;o entra no windows.</b>', 'Altera&ccedil;&atilde;o no setup da m&aacute;quina.', '2014-12-09 14:06:33', 41, NULL),
(901, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">SISCAF n&atilde;o est&aacute; funcionando.</b>', 'Foi feito um arquivo.bat para fazer login no servidor.', '2014-12-09 16:41:57', 51, NULL),
(902, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">O SISCAF n&atilde;o est&aacute; funcionando.</b>', 'Foi criado um atalho direto do Servidor.', '2014-12-09 16:45:49', 51, NULL),
(893, 'Sped Contribui&ccedil;&otilde;es n&atilde;o est&aacute; funcionando(erro &nbsp;no banco de dados)', 'Foi reinstalado o Sped Contribui&ccedil;&otilde;es e criada uma nova pasta para a nova instala&ccedil;&atilde;o. Pois se n&atilde;o deletar a pasta ou criar uma nova pasta com outro nome e apontar para ela o erro permanece.', '2014-12-09 17:24:26', 51, NULL),
(905, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;As cameras n&atilde;o aparecem na portaria.</b>', '<p>Modifica&ccedil;&atilde;o no endere&ccedil;o Ip,pois estava em &quot;obter um endenre&ccedil;o IP autom&aacute;ticamente&quot;.</p>\r\n<p>Reinicializa&ccedil;&atilde;o do moden,e ajuste de data e hora.</p>', '2014-12-10 11:12:37', 41, NULL),
(906, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Travando a impress&atilde;o de fundo de olho na impressora laser colorida.</b>', 'Salvar imagens maiores em arquivo para depois imprimir.<br />\r\n<br />\r\nTestes com o usu&aacute;rio ok!', '2014-12-10 12:19:09', 22, NULL),
(882, 'Verifica&ccedil;&atilde;o de viabilidade.', 'N&atilde;o ser&aacute; nescess&aacute;rio a montagem de um novo comutador, pois o mesmo j&aacute; suporta a VPN Cisco.', '2014-12-10 12:21:29', 22, NULL),
(876, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instala&ccedil;&atilde;o de cabo RCA som e v&iacute;deo com canaleta vindo do equipamento da TV&nbsp;RODOLINK at&eacute; a tela de TV&nbsp;LED.</b>', 'Instala&ccedil;&atilde;o conclu&iacute;da conforme solicitada.', '2014-12-10 12:23:32', 22, NULL),
(883, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Ativa&ccedil;&atilde;o de Sistema Operacional Windows 7 &nbsp;comprar licen&ccedil;a.</b>', 'Ativa&ccedil;&atilde;o conclu&iacute;da com sucesso.', '2014-12-10 12:25:19', 22, NULL),
(903, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Algumas tabelas do excel n&atilde;o abrem, somente as da vers&atilde;o 97.</b>', 'Os arquivos Excel que estavam configurados para abrir com o Word foram alterados para abrir com o Excel.', '2014-12-10 14:47:20', 60, NULL),
(907, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Sem acesso externo ao servidor</b>', 'Instala&ccedil;&atilde;o do teamveiwer', '2014-12-10 15:18:26', 22, NULL),
(908, '<b>Computador CDO-010 muito lento. imposs&iacute;vel de trabalhar com ele.</b>', 'Feita a restaura&ccedil;&atilde;o do sistema e voltou a funcionar normalmente.<br />', '2014-12-10 19:19:56', 22, NULL),
(874, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Instala&ccedil;&atilde;o de um cabo de 4mm CFTV de 15m com conectores P4 e BNC.&nbsp;</b>', 'Foi trocado o cabo e os conectores da c&acirc;mera (ajudantes: Lorena e Gregori)', '2014-12-11 13:40:11', 51, NULL),
(910, 'Limpeza de vírus e spyware. verificação geral dos computadores', 'Chamado concluído conforme solicitador', '2014-12-11 19:42:20', 22, NULL),
(909, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">fio com mal contato.</b>', 'Foi colocado uma fita isolante no cabo vga', '2014-12-12 13:17:09', 51, NULL),
(900, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina travando , n&atilde;o t&aacute; reiniciando.</b>', 'M&aacute;quina reinstalada.<br />\r\nEntrada:11:30<br />\r\nSa&iacute;da: 19:00&nbsp;', '2014-12-12 13:18:59', 51, NULL),
(911, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Instalar o office e o outlook.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram Instalados o office, o skype e o cuterpdf.</b>', '2014-12-12 14:47:56', 51, NULL),
(912, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Anti-v&iacute;rus vencido &nbsp;e instalar o java.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram instalados o anti-v&iacute;rus AVG &nbsp;e o java atualizado.</b>', '2014-12-12 14:49:04', 51, NULL),
(913, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">ATUALIZAR &nbsp; JAVA &nbsp; DO &nbsp;BANCO &nbsp;DO &nbsp;BRASIL &nbsp;,AINDA &nbsp; N&Atilde;O &nbsp;ENTRA &nbsp; SENDO &nbsp;QUE &nbsp; SEXTA &nbsp; -FEIRA &nbsp; FOI ATUALIZADO &nbsp;</b>', 'Java funcionou sozinho e o skype tamb&eacute;m.', '2014-12-15 10:20:58', 51, NULL),
(914, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Trocar a m&aacute;quina da Quely Valad&atilde;o por uma m&aacute;quina da Dell.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi trocada a m&aacute;quina da Quely Valad&atilde;o por uma m&aacute;quina da Dell.</b>', '2014-12-15 23:26:35', 51, NULL),
(915, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Mal contato.</b>', 'O cabo de rede foi colocado em outra porta do switch.', '2014-12-16 13:28:11', 51, NULL),
(916, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Limpeza de m&aacute;quina.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feita uma limpeza de software na m&aacute;quina.</b>', '2014-12-16 13:43:16', 51, NULL),
(917, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Retirar o baidu e outros programas.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram desinstalados o baidu e outros programas.</b>', '2014-12-16 13:48:07', 51, NULL),
(918, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Organiza&ccedil;&atilde;o na sala do dp.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foi feita uma organiza&ccedil;&atilde;onos cabos de rede e de for&ccedil;a na sala do dp.</b>', '2014-12-16 13:51:30', 51, NULL),
(920, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Desinstalar o logmein de todas as m&aacute;quinas.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Foram desinstalados &nbsp;os logmeins de todas as m&aacute;quinas com exce&ccedil;&atilde;o das m&aacute;quinas da Elizete e do Marcos.</b>', '2014-12-16 13:56:01', 51, NULL),
(921, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Liberar o gerenciador de tarefas(interApp bloqueando).</b>ma', 'Foi reinstalado o interApp e a senha foi alterada para a senha default(123).', '2014-12-16 13:58:48', 51, NULL),
(879, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Placa M&atilde;e da RuberRio retirada para manuten&ccedil;&atilde;o em laborat&oacute;rio da Compart.</b>', 'Reintala&ccedil;&atilde;o da m&aacute;quina,nova fonte e uma placa de rede off board.', '2014-12-16 14:33:12', 41, NULL),
(922, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Montar m&aacute;quina backup e instalar.</b>', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">A m&aacute;quina foi montada e instalada (backup-044).</b>', '2014-12-18 14:43:20', 51, NULL),
(923, 'Montar e instalar m&aacute;quina backup.', '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">A m&aacute;quina foi montada e instalada (backup-043).</b>', '2014-12-18 14:44:39', 51, NULL),
(924, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina travando(setor do Elias).</b>', 'Foi realizada uma limpeza de software e em seguida foi passado o anti-v&iacute;rus.', '2014-12-18 14:47:04', 51, NULL),
(926, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">Certificados n&atilde;o funcionam, instalar impressora, colocar &iacute;cone do word na &aacute;rea de trabalho, localizar &iacute;cone do scanner e outros.</b>', 'Solu&ccedil;&atilde;o para este problema', '2014-12-18 14:50:24', 51, NULL),
(928, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">omputador sem as configura&ccedil;&otilde;es regionais.<br />\r\nFavor entrar em contato o mais breve.<br />\r\n</b>', 'Configura&ccedil;&atilde;o dos status regionais,cria&ccedil;&atilde;o de um novo usu&aacute;rio,pois o antigo se corrompeu.', '2014-12-22 13:36:52', 41, NULL),
(925, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Desinstalar o snap.do da m&aacute;quina da V&acirc;nia.</b>', 'O usu&aacute;rio desintalou o programa.', '2014-12-22 17:13:16', 41, NULL),
(927, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;Sem internet, adsl piscando no modem da oi.</b>', 'Problemas depois da visita do tecnico da Oi e libera&ccedil;&atilde;o do sinal junto a operadora.', '2014-12-27 15:23:40', 22, NULL),
(929, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;A M&Aacute;QUINA N&Atilde;O QUER LIGAR.</b>', 'Foi feita uma limpeza de software na m&aacute;quina no remoto.', '2014-12-29 09:39:54', 51, NULL),
(931, 'Sem internet.', 'Reiniciar os aparelhos do hack.', '2014-12-29 12:01:06', 51, NULL),
(933, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">&nbsp;M&aacute;quina lenta</b>', 'Foi feita uma limpeza de software na m&aacute;quina.', '2014-12-29 12:03:30', 51, NULL),
(932, '<b style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: 11px;">M&aacute;quina lenta.</b>', 'Foi feita uma limpeza de software na m&aacute;quina da Gleice.', '2014-12-29 12:06:02', 51, NULL),
(934, 'Descrição técnica do problema', 'Solução para este problema', '2015-01-05 15:40:32', 60, NULL),
(935, 'Descrição técnica do problema', 'Solução para este problema', '2015-01-05 16:35:16', 41, NULL),
(936, 'Descrição técnica do problema', 'Solução para este problema', '2015-01-12 12:20:41', 22, NULL),
(938, 'Problemas para receber e-mail no outlook', 'Problemas de travamento com o computador (configuração de hardware muito obsoleta).', '2015-01-14 18:41:46', 22, NULL),
(939, 'Computador não tem Som', 'Download e instalação do driver de som.', '2015-01-14 18:46:48', 22, NULL),
(940, 'Sistema de câmeras atualizando imagens no computador local e gerando trafego intenso de dados.', 'Utilização do sistema de câmeras na modalidade extreme extra( com definição menos).', '2015-01-14 18:55:50', 22, NULL),
(941, 'Placa Mãe do computador com capacitores estufados, processador queimado, cooler do processador travado.\r\nFoi considerado sem viabilidade para conserto devido ao processador sempron 32 bits  esta descontinuado e obsoleto.', 'Troca do equipamento', '2015-01-14 19:05:24', 22, NULL),
(942, 'usuário não se recorda da senha do windows', 'Remoção da senha com o HIRES BOOT', '2015-01-14 19:10:06', 22, NULL),
(944, 'Máquina não liga.', 'Troca da fonte,reinstalação da máquina.\r\n\r\nObs,máquina já veio ruim da casa do Valdir(O filho dele quem me disse que essa era uma máquina antiga que estava parada na casa deles.)', '2015-01-15 11:15:50', 41, NULL),
(945, 'Duas máquinas não ligam.', 'Troca de fonte de uma máquina, e colocação de placa de rede.\r\nA outra máquina se encontra em Laboratório esperando o depósito do cliente para compra das peças.', '2015-01-15 11:20:56', 41, NULL),
(943, 'erro ao receber e-mail no Outllook. Computador (BSHOP ADMIN). Obs.. tem outro computador que tem esta mesma conta cadastrada e esta recebendo e-mail normalmente segundo a usuária do administrativo.', 'Foi criado um novo arquivo .pst para liberar a caixa de entrada.', '2015-01-15 14:01:44', 51, NULL),
(946, 'Links do outlook não abrem.', 'Na página da microsoft foi baixado um executável para corrigir o problema.(suporte) ', '2015-01-15 14:04:41', 51, NULL),
(947, 'Limpeza de máquina. Máquina lenta e travando.', 'limpeza com Ccleaner,limpeza manual nas pastas temp e prefetch.\r\nvarredura com AVG 2015.Esvaziamento da lixeira. ', '2015-01-15 16:13:11', 41, NULL),
(949, 'Minha pasta sumiu na área de trabalho.', 'Limpeza com ccleaner,verificação com o kapersky,onde duas ameças foram detectadas. \r\nRestauração do sistema para o dia anterior.', '2015-01-16 14:21:00', 41, NULL),
(950, 'Minha impressora não imprime.', 'A impressora foi desinstalada.Reinstalei a impressora pela rede. ', '2015-01-16 14:57:04', 41, NULL),
(954, 'Instalar impressora na máquina do Marcos.', 'Foi Instalada a impressora na máquina do Marcos.', '2015-01-17 10:49:36', 51, NULL),
(953, 'Instalar impressora na máquina da Rossane.', 'Foi Instalada a impressora na máquina da Rossane.', '2015-01-17 10:51:14', 51, NULL),
(952, 'Máquina dando erro fatal.', 'Foi feita um limpeza de software e de hardware na máquina.', '2015-01-17 10:53:21', 51, NULL),
(951, 'Instalar impressora na máquina do Marcos.', 'Foi Instalada a impressora na máquina do Marcos.', '2015-01-19 11:54:35', 51, NULL),
(955, 'Instalar o guardião do itaú e instalar a impressora.', 'Foi instalado o guardião do itaú e também a impressora.', '2015-01-19 12:04:56', 51, NULL),
(948, 'Descrição técnica do problema', 'Solução para este problema', '2015-01-19 15:41:20', 41, NULL),
(956, 'O Outlook da Adriana e da Kátia,não está recebendo email de confirmação e de leitura. ', 'Foram feitas alterações na configuração do outlook para receber email de confirmação e de leitura.\r\nNo menu Ferramentas, clique em Opções.\r\nEm E-mail, clique em Opções de E-mail.\r\nEm Manipulação de mensagens, clique em Opções de Controle.\r\nMarque a caixa de seleção Confirmação de leitura ou Confirmação de entrega.', '2015-01-19 17:28:39', 51, NULL),
(957, 'Instalação de roteador', 'O roteador foi instalado', '2015-01-26 12:46:47', 22, NULL),
(958, '	Duas máquinas sem internet e com lentidão.', 'Refiz o RJ 45 de uma máquina.\r\nFiz uma limpeza completa de software,e troca de anti vírus nas duas máquinas.', '2015-01-26 15:47:35', 41, NULL),
(960, 'Meus ícones na área de trabalho sumiram.', 'Usuário corrompido,criei um novo usuário e importação do desktop e documentos antigos.', '2015-01-27 10:26:01', 41, NULL),
(969, 'Eliminar as ameaças encontradas pelo anti-vírus.', 'Foram eliminadas as ameaças encontradas pelo anti-vírus.', '2015-01-27 14:03:31', 51, NULL),
(966, 'Eliminar as ameaças encontradas pelo anti-vírus.', 'Foram eliminadas as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:55:12', 51, NULL),
(967, 'Eliminar as ameaças encontradas pelo anti-vírus.', 'Foram eliminadas as ameaças encontradas pelo anti-vírus.', '2015-01-27 13:55:56', 51, NULL),
(968, 'Desinstalar o kaspersky anti-vírus e instalar o versão small e ativar.', 'Foi desinstalado o kaspersky anti-vírus e instalado a versão small e ativado.', '2015-01-27 14:00:10', 51, NULL),
(961, 'Instalar o anti-virus kaspersky na máquina da Caixa1.', 'Foi Instalada o anti-virus kaspersky na máquina da Caixa1.', '2015-01-27 14:04:38', 51, NULL),
(962, 'Instalar o anti-virus kaspersky na máquina da Caixa1.', 'Foi Instalado o anti-virus kaspersky na máquina da Caixa1.', '2015-01-27 14:05:31', 51, NULL),
(970, 'Máquina travando.', 'Foi feita uma limpeza de software e reinstalado o anti-vírus, em seguida, o anti-vírus foi executado para remoção de vírus. ', '2015-01-27 14:11:49', 51, NULL),
(959, 'Máquina lenta e o anti virus está próximo de espirar.', 'Limpeza da máquina e atualização do anti virus. ', '2015-01-28 13:26:23', 41, NULL),
(963, 'Instalar o anti-virus kaspersky na máquina do administrativo.', 'O anti-virus kaspersky foi instalado na  máquina do administrativo.', '2015-01-28 13:49:15', 60, NULL),
(965, 'Instalar o anti-virus kaspersky na máquina da Gerência.', 'O anti-virus kaspersky foi instalado na máquina da Gerência.', '2015-01-28 13:50:57', 60, NULL),
(964, 'Instalar o anti-virus kaspersky na máquina do Chekin.', 'O  anti-virus kaspersky foi instalado na máquina do Chekin.', '2015-01-28 13:54:34', 60, NULL),
(971, 'Limpeza da máquina e atualização de impressora', 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:44:19', 41, NULL),
(976, 'Limpeza da máquina e atualização de impressora.', 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:44:53', 41, NULL),
(975, 'Limpeza da máquina e atualização de impressora.', 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:45:20', 41, NULL),
(974, '	Limpeza da máquina e atualização de impressora.', 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:45:43', 41, NULL),
(973, '	Limpeza da máquina e atualização de impressora.', 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:46:24', 41, NULL),
(972, '	Limpeza da máquina e atualização de impressora.', 'Limpeza ma máquina com Ccleaner e Mv RegClean. Atualização de impressoras e do anti vírus.', '2015-01-29 17:46:47', 41, NULL),
(977, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-02 16:57:25', 41, NULL),
(979, 'Verificar máquinas se estão molhadas devido a um alagamento.', 'As máquinas foram verificadas.', '2015-02-02 21:11:33', 51, NULL),
(978, 'Máquina do Edson apresentando lentidão.', 'Foi feita uma limpeza de software na máquina.', '2015-02-02 21:14:35', 51, NULL),
(981, 'Gerson não consegue acessar o servidor.', 'O servidor foi reiniciado.', '2015-02-02 21:24:07', 51, NULL),
(980, 'Impressoras desistaladas.', 'Foram instaladas as impressoras.', '2015-02-02 21:26:22', 51, NULL),
(983, 'Kádia não consegue anexar um arquivo pdf que está no servidor.', 'O arquivo foi copiado para máquina da Gláucia e depois anexado.', '2015-02-02 21:30:08', 51, NULL),
(982, 'Descompartilhar uma pasta que está na máquina da Kádia e compartilha outra pasta.', 'Foi descompartilhada a pasta do usuário que se chama kadia e compartilhada outra pasta.', '2015-02-02 21:36:05', 51, NULL),
(987, 'Colocar dois pontos de rede na sala ao lado do DP.', 'Foram colocados dois pontos de rede na sala ao lado do DP.', '2015-02-03 17:25:04', 51, NULL),
(985, 'Mudar o computador da sala do DP de local e compartilhar algumas pastas.', 'Foi mudado o computador da sala do DP de local e compartilhada as pastas.', '2015-02-03 17:37:55', 51, NULL),
(986, 'Mudar o computador da estagiária de local e mapear algumas pastas.', 'Foi mudado de local o computador da estagiária e foi feto o mapeamento das pastas.', '2015-02-03 17:41:31', 51, NULL),
(990, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:32:51', 41, NULL),
(988, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:36:34', 41, NULL),
(994, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:36:50', 41, NULL),
(993, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:37:12', 41, NULL),
(992, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:37:26', 41, NULL),
(991, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:37:40', 41, NULL),
(989, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:37:52', 41, NULL),
(995, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:39:47', 41, NULL),
(996, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:40:11', 41, NULL),
(998, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:41:25', 41, NULL),
(999, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:41:46', 41, NULL),
(997, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-04 10:42:02', 41, NULL),
(1001, 'Kuler do nobreak fazendo barulho. ', 'O nobreak foi aberto e limpo, em seguida, o kuler foi lubrificado e aparafuzado no local com uma folga eliminando o barulho. Obs: essa é uma solução improvisada.', '2015-02-04 20:39:16', 51, NULL),
(1000, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-05 14:02:41', 41, NULL),
(1002, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-05 16:34:30', 41, NULL),
(1011, 'Colocar impressora na rede.', 'Foi colocada na rede a impressora.', '2015-02-10 14:26:33', 51, NULL),
(1010, 'Configurar ultrasom1 na rede.', 'Configurado ultrasom1 na rede.', '2015-02-10 14:31:23', 51, NULL),
(1009, 'Configurar ultrasom2 na rede.', 'Configurado ultrasom2 na rede.', '2015-02-10 14:34:29', 51, NULL),
(1019, 'Máquina travando na bios.', 'Retirada de uma das memórias que estava ruim e foi feita uma limpeza de software e hardware.', '2015-02-11 11:15:17', 51, NULL),
(1016, 'Instalar o catálogo de peças e consertar a máquina que não reconhece o hd.', 'Foi trocado o cabo flet do hd e instalado o catálogo de peças.', '2015-02-11 11:19:24', 51, NULL),
(1018, 'Scanear e salvar como pdf para uma pasta específica.', 'Driver da impressora não permite salva em pdf.', '2015-02-11 11:25:57', 51, NULL),
(1017, 'Instalar programa para imagens para pdf.', 'Foi instalado programa para converter imagens para pdf.', '2015-02-11 11:31:14', 51, NULL),
(1022, 'Sefip não abre na máquina da Ana Paula', 'Copiar o arquivo conselo.dll para dentro da pasta SysWOW64 e executar o sefip como administrador.', '2015-02-11 11:43:43', 51, NULL),
(1007, 'As câmeras 03,14 e 19 não estão funcionando', 'A 03 e 19 estão funcionando,a 14 será trocado o cabo.', '2015-02-11 11:49:13', 41, NULL),
(1005, 'Reinstação do sistema operacional do Notebook do Elcio.', 'Noot reinstalado com êxito,aguardando somente o proprietário vir busca-lo.', '2015-02-11 11:50:04', 41, NULL),
(1021, 'Máquina da Vânia está com adware.', 'Foi passado o ComboFix e foram desinstalados os browsers e reinstalados.', '2015-02-11 11:50:30', 51, NULL),
(1020, 'Máquina da Helena não abre o Homolognet, pois o java não funciona.', 'Foi reinstalado a java.', '2015-02-11 11:59:35', 51, NULL),
(1006, 'Os certificados digitais não estão sendo reconhecidos na minha máquina, so consigo acesso com o Codigo... E com isso impossibilitado de enviar GFIP e DCTF etc...', 'Foi desinstalado o AVG e instalado o Karpersky 30 dias e removido duas ameaças.', '2015-02-11 12:02:02', 51, NULL),
(1024, 'Outlook não recebe email.', 'Foi feito o teste de enviar e receber e funcionou sozinho.', '2015-02-11 12:05:30', 51, NULL),
(1025, 'Erro ao tentar acessa página da Receita Federal devido o Java bloquear o acesso.', 'Foi reinstalado o java e o site da Receita federal foi colocado na excessão.', '2015-02-11 12:12:01', 51, NULL),
(1023, 'A Impressora inicia a impressão e depois interrompe o processo.', 'A impressora está com o cartucho vazio e acusou o uso de cartucho não original.', '2015-02-11 12:48:48', 60, NULL),
(1013, 'ATUALIZAÇÃO DE JAVA. - O programa esta sendo atualizado, mais continua a um informar o erro de desatualização.', 'O JAVA foi reinstalado e o site da CAIXA foi colocado em modo de compatibilidade no Internet Explorer.', '2015-02-11 14:19:51', 60, NULL),
(1026, '	Instalação do PDC Creator.', 'Instalei o programa solicitado e um outro alternativo caso esse programa não conseguisse ser utilizado pelo usuário.', '2015-02-12 13:01:06', 41, NULL),
(1004, 'Após ser instalado um programa pela poygou ( sistema ECF para passar o cartão ) foi reinicializado a maquina e a tela ficou toda azul e com a informação &quot; Foi detectado um problema e o windows foi desligado para evitar danos&quot;. Informa para apertar F8 e escolher modo seguro, mais mesmo assim não esta recebendo o comando F8 e mesmo forçando a reinicialização sempre volta para esta tela.', 'Reinstalação da máquina,up-grade de sistema operacional;do XP para o W7,instalação de programas padrões e sistemas de uso comercial local.\r\n(Aguardei até o termino da instalação dos sistemas da loja,para realmente não ter dúvida sobre a funcionalidade da máquina.)', '2015-02-13 01:18:04', 41, NULL),
(1003, '	Instalação de No-break na Central telefônica', 'Instalei o no-break na central quando fui resolver o problema da máquina da Lúcia. (No-Break comprado no mesmo local do novo HD da Lúcia.)', '2015-02-13 01:19:11', 41, NULL),
(1027, 'Wifi não funcionava.', 'Ativei o drive wireless que se encontrava desativado.', '2015-02-19 14:23:43', 41, NULL),
(1029, 'Abrindo telas cinzas no ASA. Erros em arquivos aleatórios.', 'Foi concluída a restauração do sistema com exito.\r\n\r\nTeste ok!', '2015-02-20 16:02:55', 22, NULL),
(1030, 'Solicitação de instalação do Teamviwer na máquina CDO 09', 'O Teamviewer foi instalado  para que sejam possíveis os procedimentos de acesso remoto.', '2015-02-23 12:08:12', 22, NULL),
(1031, 'Solicitação de instalação do Teamviwer na máquina CDO 10.', 'O Teamviewer foi instalado  para que sejam possíveis os procedimentos de acesso remoto.', '2015-02-23 12:09:02', 22, NULL),
(1032, '	A máquina não imprime e nem navega na internet.', 'Estava com endereço Ip inválido.\r\nA impressão não ocorria,pois a impressora não estava compartilhada.', '2015-02-23 13:30:48', 41, NULL),
(1028, 'Descrição técnica do problema', 'Solução para este problema', '2015-02-23 16:37:10', 41, NULL),
(1036, 'Máquina liga e apita.', 'Limpeza de memória', '2015-02-24 14:53:20', 51, NULL),
(1034, 'Máquina lenta', 'Foi feita uma limpeza de software na máquina ao lado da Nízia.', '2015-02-24 14:56:11', 51, NULL),
(1035, 'Máquina apresentando tela azul.', 'Foi retirado uma das memórias(ddr2) da máquina e deixado apenas uma memória.', '2015-02-24 15:00:56', 51, NULL),
(1037, 'Sistema VisualAsa não abre.', 'Foi criador um atalho do arquivo executável  AsaServidor que está localizado dentro da pasta VisualAsa no Servidor.', '2015-02-24 15:06:11', 51, NULL),
(1039, '	Impressora não imprime.', 'Impressora encaminhada para loja autorizada,pois ela não estava identificando os cartuchos de tinta.', '2015-02-26 09:22:44', 41, NULL),
(1033, 'FLAVIO , UMA PASTA SUMIU DA MINHA AREA DE TRABALHO ; NOME DA PASTA E FLUXO DE CAIXA ¨&quot;*ENTRAR NA MAQUINA 11;50&quot; SE FOR RESTAURAR *AVISAR ANTES DE ENTRAR NA MÁQUINA Nº 004', 'A pasta informada na descrição do problema é na verdade uma atalho de uma pasta que está na máquina da Kádia e a pedido da mesma foi retida da rede compartilha.', '2015-02-26 10:37:04', 51, NULL),
(1040, '	A máquina da tela azul e trava.', 'Reinstalação da máquina.', '2015-02-26 10:45:48', 41, NULL),
(1041, 'Instalar a atualização do internet explorer.', 'Não foi possível instalar o internet explorer versão 9 porque o sistema operacional da máquina é windows xp permitindo apenas o ie8 ou inferior. Foi sugerido instalar o firefox.  ', '2015-02-26 10:50:22', 51, NULL),
(1014, 'Máquina não inicia o windows.', 'Foi feita uma limpeza de hardware.', '2015-03-04 13:10:13', 51, NULL),
(1046, 'Máquina da Márcia está apresentando mensagens de erro no decorrer do seu uso.', 'Foi feita uma restauração para o 19/02/2015.', '2015-03-04 13:14:41', 51, NULL),
(1045, 'Máquina da Márcia está apresentando alto índice de processamento.', 'Foi feita uma restauração para o dia 10/02/2015 e em seguida uma limpeza de software', '2015-03-04 13:17:44', 51, NULL),
(1047, 'Windows xp não funciona direito.', 'Foi sugerido, depois de muitas avaliações, a reinstalação do sistema operacional.', '2015-03-04 13:21:05', 51, NULL),
(1048, 'Descrição:	Impressora não está imprimindo.', 'Foi calibrada a impressora e colocada como principal outro driver de copia.', '2015-03-04 13:24:22', 51, NULL),
(1049, 'Máquina lenta.', 'Foi feita uma limpeza na máquina.', '2015-03-04 13:27:20', 51, NULL),
(1043, 'Não consigo enviar e nem receber email.', 'Foi configurado o Outlook Microsoft e exportado os emails do Outlook Express.', '2015-03-04 13:30:02', 51, NULL),
(1051, 'Reinstalar máquina da telefonia 2.', 'A máquina foi reinstalada .', '2015-03-04 13:32:48', 51, NULL),
(1050, 'Máquina do arquivo está lenta.', 'Foi feita uma limpeza de software.', '2015-03-04 13:35:09', 51, NULL),
(1044, 'Revisar a instalação dos softwares de uma máquina, pois a mesma está muito lenta.', 'O nootbook do Wallace não estava acessando a internet,reconfigurei o Ip,desinstalei e instalei o driver de ethernet e restaurei a máquina.', '2015-03-04 14:36:51', 41, NULL),
(1042, 'Não consegue visualizar a impressão antes de imprimir.', 'O driver da impressora foi reinstalado.', '2015-03-06 14:39:42', 60, NULL),
(1052, 'Máquina do arquivo não abre o ASA e nem navega na internet.', 'Reconfiguração do IP.', '2015-03-09 10:22:30', 41, NULL),
(1053, 'O computador está lento.', 'Foi feita uma limpeza.', '2015-03-10 09:34:59', 51, NULL);
INSERT INTO `solucoes` (`numero`, `problema`, `solucao`, `data`, `responsavel`, `responsavelbkp`) VALUES
(1059, 'Reinstalar máquina da recepção.', 'Foi perada uma máquina de backup-003 para substituir a máquina da recepção. Foram passados os emails, agenda e instalado sistema de monitoramento de câmeras. ', '2015-03-10 09:40:27', 51, NULL),
(1058, 'Email live email dando erro de envio e chipset esquentando.', 'Foi removido um email que estava travado na caixa de saída e foi colocado um coller improvisado no chipset, devido a um aumento de temperatura.', '2015-03-10 09:47:10', 51, NULL),
(1057, 'Não consegue enviar impressão frente e verso no sistema da receita.', 'Foi feito um teste no Broffice e a impressão frente e verso saiu, mas foi possível fazer o mesmo no sistema da receita.', '2015-03-10 09:51:34', 51, NULL),
(1056, 'Anti-vírus acusando ameaças e reiniciando a máquina.', 'Foi feita uma limpeza de software e o problema foi resolvido.', '2015-03-10 09:56:56', 51, NULL),
(1055, 'Máquina apresentando adware.', 'Foi feita um limpeza de software.', '2015-03-10 09:58:54', 51, NULL),
(1054, 'Sistema na máquina da Vânia não ativa e da erro.', 'O sistema  foi ativado e o erro foi solucionado renomeando o arquivo &#039;Geral.xml&#039; dentro da pasta do sistema em questão.', '2015-03-10 10:04:15', 51, NULL),
(1060, 'Máquina apresentando lentidão. ', 'Foi feita uma limpeza de software.', '2015-03-10 10:07:42', 51, NULL),
(1061, 'Ícone do Live Email sumiu da área de trabalho.', 'Foi feito um passo a passo com o usuário e o problema foi solucionado.', '2015-03-10 10:18:22', 51, NULL),
(1062, 'Não executava programas,navegadores e sites de bancos.', 'Restauração da máquina,verificação com Combofix e atualização do Kapersky.', '2015-03-12 15:05:12', 41, NULL),
(1063, '	Ativar o Windows na máquina da Lúcia', 'Solicitei para Manoel o código de ativação,entrei remotamente e ativei o windows.', '2015-03-13 13:35:03', 41, NULL),
(1064, 'Outlook não envia e scanner não funciona.', 'Foi reinstalado o driver da impressora e foi feita uma configuração no outlook. ', '2015-03-16 10:25:00', 51, NULL),
(1067, 'Trocar a máquina da recepção.', 'A máquina foi trocada.', '2015-03-16 10:28:11', 51, NULL),
(1065, 'Verificar se hd está bom.', 'O hd estava ruim.', '2015-03-16 10:32:07', 51, NULL),
(1066, 'Fazer uma clonagem do hd da máquina da Ana Paula para substituição do hd.', 'Foi feita a substituição do hd e o backup de algumas informações.', '2015-03-16 10:36:34', 51, NULL),
(1071, 'Câmera da entrada com defeito.', 'Foi feita a substituição da câmera.', '2015-03-16 10:43:26', 51, NULL),
(1070, 'Câmera do estacionamento com defeito.', 'Foi feita a substituição da câmera.', '2015-03-16 10:44:37', 51, NULL),
(1069, 'Máquina da Angélica está lenta.', 'Foi feita uma limpeza de software.', '2015-03-16 10:46:39', 51, NULL),
(1068, 'Compartilhar uma pasta.', 'A pasta foi compartilha.', '2015-03-16 10:48:09', 51, NULL),
(1073, 'Salvar um arquivo em um pendriver.', 'O arquivo foi salvo.', '2015-03-16 10:51:30', 51, NULL),
(1072, 'Na recepção as câmeras não estão aparecendo adequadamente.', 'Foram reorganizadas.', '2015-03-16 10:54:14', 51, NULL),
(1074, 'Impressora não imprime.', 'Problema no cartucho de tinta,o usuário vai levar na autorizada.\r\n', '2015-03-16 13:02:05', 41, NULL),
(865, 'Descrição técnica do problema', 'resolvido com alteração de permissões do navegador', '2015-03-17 14:00:44', 3, NULL),
(870, 'Descrição técnica do problema', 'Resolvido', '2015-03-17 14:01:52', 3, NULL),
(1075, 'arquivo jpg abrindo com pdf.', 'Alterado para abrir com visualizador de imagens do windows.', '2015-03-17 14:07:49', 3, NULL),
(1076, 'Configurar o servidor para acesso remoto. Instalar e configurar dois jogos no meu pc de casa para minha filha.', 'Abertura de porta no roteador,instalação do software da seg no servidor.\r\nResolvi o proble da compatibilidade do Steam e Uplay,assim eu consegui fazer o Rayman Legends jogar.\r\nInstalação no Peter Pan Aventuras na terra do nunca e crackeamento para o path no cd. Abri permissão no antivírus para que o Peter pan rode.\r\nLimpeza da máquina de uso pessoal e particular do Jorge ,pois se encontrava impregnada de softwares maliciosos.', '2015-03-18 12:07:35', 41, NULL),
(1077, 'Descrição:	Impressão lenda,a partir da primeira impressão,demora muito pra sair a segunda.', 'Atualização do antivírus. e varredura na máquina.', '2015-03-19 11:57:37', 41, NULL),
(1078, 'Descrição técnica do problema', 'Instalei e compartilhei a impressora.', '2015-03-19 15:00:19', 41, NULL),
(1080, 'Descrição técnica do problema', 'Instalei e compartilhei a impressora.', '2015-03-19 15:00:35', 41, NULL),
(1079, 'Descrição técnica do problema', 'Instalei e compartilhei a impressora.', '2015-03-19 15:00:50', 41, NULL),
(1081, 'Máquina lenta.', 'Foi feita uma limpeza de software na máquina.', '2015-03-30 10:26:17', 51, NULL),
(1082, 'Máquina não vem vídeo.', 'Foi feita a substituição da memória de um giga, que estava ruim, por uma memória de dois gigas.  ', '2015-03-30 10:32:54', 51, NULL),
(1084, 'Servidor lento.', 'Foi feita uma limpeza de software no servidor.', '2015-03-30 10:35:17', 51, NULL),
(1083, 'Máquina da rose apresentando lentidão.', 'Foi feita uma limpeza de software.', '2015-03-30 10:37:08', 51, NULL),
(1085, 'Câmera da entrada da clínica está com defeito.', 'Câmera da entrada da clínica foi reparada.', '2015-03-30 10:40:52', 51, NULL),
(1086, 'Compartilhar pasta. Máquina da sala de departamento pessoal.', 'A pasta foi compartilhada.', '2015-03-30 10:43:20', 51, NULL),
(1087, 'Trocar hd do servidor e instalar o cobian para fazer backup em um hd externo.', 'Foi trocado o  hd do servidor e instalado o cobian para fazer backup em um hd externo.', '2015-03-30 10:47:03', 51, NULL),
(1088, 'Descrição:	Verifiquei o posicionamento das câmeras;12,10,8,7,6 e 4. Ficou decidido que a câmera 10 e 07 será trocada por uma coma lente mais aberta.', 'Descrição:	Verifiquei o posicionamento das câmeras;12,10,8,7,6 e 4. Ficou decidido que a câmera 10 e 07 será trocada por uma coma lente mais aberta.', '2015-03-31 12:28:19', 41, NULL),
(1090, 'Descrição:	Impressora imprime uma página em branco entes da impressão solicitada.', 'Desmarquei a opção &quot;Imprimir frente e verso&quot;.', '2015-04-01 11:12:48', 41, NULL),
(1089, 'Computador não inicializa o Windows', 'Foi feita a restauração do sistema para solução  do problema.', '2015-04-06 15:25:48', 22, NULL),
(1094, 'Máquina da Verônica pessoal não liga.', 'Foi trocado a fonte e instalado o sistema da receita federal.', '2015-04-09 11:35:36', 51, NULL),
(1093, 'Instalar sistema da receita federal no Macboot da Verônica.', 'Não foi possível instalar o sistema, pois necessitava de atualizar o sistema operacional e não tinha espaço no Hd. ', '2015-04-09 11:40:38', 51, NULL),
(1092, 'Configurar telão do auditório para mostrar imagem do netbook do DR Yamane.', 'Foi configurado o telão do auditório para mostrar imagens do netbook do DR Yamane.', '2015-04-09 11:55:36', 51, NULL),
(1096, 'Máquina do Eli está lenta.', 'Foi trocado o hd.', '2015-04-09 12:29:17', 51, NULL),
(1095, 'Troca a máquina da Célia.', 'Foi troca a máquina da Célia e configurada a nova máquina.', '2015-04-09 12:31:54', 51, NULL),
(1100, 'Máquina sem rede.', 'Foi colocado um switch e a máquina foi configurada.', '2015-04-09 12:35:36', 51, NULL),
(1099, 'Netbook da Feijó está lento.', 'Hd ruim. O usuário atual da máquina foi notificado sobre o problema.', '2015-04-09 12:38:01', 51, NULL),
(1098, 'Máquina lenta.', 'Foi feita uma limpeza de software.', '2015-04-09 12:39:02', 51, NULL),
(1097, 'Deixar um cabo de rede disponível para conexão com a rede.', 'Foi deixado um cabo de rede disponível para conexão com a rede.', '2015-04-09 12:43:37', 51, NULL),
(1101, 'Máquina da Célia está sem impressora.', 'Foram instaladas as impressoras solicitadas.', '2015-04-09 12:45:46', 51, NULL),
(1104, 'Rede para toda manhã. RBS', 'Foram refeitos alguns cabos que apresentaram problemas.', '2015-04-09 12:48:54', 51, NULL),
(1103, 'Limpeza de software preventiva.', 'Foi feita uma limpeza de software.', '2015-04-09 12:52:11', 51, NULL),
(1102, 'Máquina da Marinete trava parcialmente quando tenta compartilhar uma pasta na rede.', 'Foi trocado o cabo de rede e foi passado o combofix, mas não adiantou. Foi combinado com o cliente uma nova tentativa de resolver o problema no dia seguinte.', '2015-04-09 12:57:00', 51, NULL),
(1105, 'Sistema de câmeras da portaria parou devido ao cabo de rede estar aparentemente parcialmente rompido.', 'Foi colocado um novo cabo de rede.', '2015-04-09 13:11:14', 51, NULL),
(1106, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:21:18', 3, NULL),
(829, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:30:23', 3, NULL),
(830, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:30:53', 3, NULL),
(831, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:31:13', 3, NULL),
(832, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:32:16', 3, NULL),
(833, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:33:09', 3, NULL),
(834, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:33:37', 3, NULL),
(835, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:33:58', 3, NULL),
(841, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:34:24', 3, NULL),
(836, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:34:43', 3, NULL),
(837, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:35:04', 3, NULL),
(838, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:35:49', 3, NULL),
(839, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:36:07', 3, NULL),
(840, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-10 14:36:23', 3, NULL),
(1107, 'Descrição técnica do problema', 'Novo Atalho', '2015-04-13 16:40:50', 3, NULL),
(1108, 'Descrição técnica do problema', 'Limpeza', '2015-04-13 16:42:55', 3, NULL),
(1110, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-13 16:52:14', 3, NULL),
(1112, 'Caminho de rede diferente ( IP ).', 'IP do computador do Joel  tem que ser igual ao configurado no software da impressora.', '2015-04-14 12:57:17', 3, NULL),
(1113, 'Descrição técnica do problema', 'Configurado para deixar cópia de mensagens no servidor em propriedades de contas ( outlook ).', '2015-04-14 13:02:49', 3, NULL),
(1116, 'Mudança de sistema operacional e aplicativos', 'Instalação do Windows 7 e aplicativos do usuário', '2015-04-16 17:35:40', 22, NULL),
(1117, 'Instalação de IRPF2015 e Java não Mac da Verônica', 'Instalação de IRPF2015 e Java não Mac da Verônica baixando os aplicativos da Apple Store', '2015-04-16 17:43:24', 22, NULL),
(873, 'Central telefônica travando aleatoriamente. Não recebe e nem faz ligações.', 'Instalação de No-break para alimentação da Central telefônica', '2015-04-16 17:45:48', 22, NULL),
(1118, 'Computador da Beth NÃO liga', 'Desconexão de todos os cabos e reconexão novamente e o computador voltou a funcionar normalmente.', '2015-04-16 17:51:25', 22, NULL),
(1119, 'Caixa 01 e caixa 02 não imprimem.\r\nNão é possível visualizar as outras máquinas na rede.', 'Desabilitei a conexão V6.', '2015-04-24 09:36:30', 41, NULL),
(1121, 'Computador não liga.', 'Fonte ruim. Foi efetuada a troca da fonte.', '2015-04-27 13:17:37', 41, NULL),
(1120, 'Descrição técnica do problema', 'Aguardando providenciamento de cabos para finalização do serviço.Será necessário a passagem de um novo cabo,pois o antigo se encontra inacessível .', '2015-04-28 10:39:48', 41, NULL),
(1123, '	Máquina da Gabriela não liga,fica apitando e não liga.', 'Limpeza física da máquina,aplicação da pasta térmica.', '2015-04-28 10:51:40', 41, NULL),
(1091, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-28 11:01:43', 41, NULL),
(1122, 'Bom dia! O AVG está pedindo para ser atualizado só que não sei se esse é gratuito. Aguardo um retorno.', 'Atualização do software de segurança e limpeza da máquina para melhor funcionamento.', '2015-04-28 11:47:58', 41, NULL),
(1124, 'Máquina  01 não imprime.', 'Reinstalação dos drives da impressora e compartilhar a mesma.', '2015-04-30 15:40:15', 41, NULL),
(1114, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-30 17:28:12', 3, NULL),
(1125, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-30 17:31:28', 3, NULL),
(1127, 'Descrição técnica do problema', 'Solução para este problema', '2015-04-30 17:44:24', 3, NULL),
(1128, '	Limpeza de máquina,lentidão e dificuldade para navegar.', 'Limpeza com Combofiz,Ccleaner e Adware. Atualização de antivírus e atualização do mesmo.', '2015-05-05 14:00:15', 41, NULL),
(1129, 'Descrição técnica do problema', 'Solução para este problema', '2015-05-12 09:14:26', 41, NULL),
(1111, 'Descrição técnica do problema', 'Solução para este problema', '2015-05-13 09:48:47', 41, NULL),
(1109, 'Descrição técnica do problema', 'Solução para este problema', '2015-05-13 09:48:59', 41, NULL),
(1130, '	Tecla &quot;Caps Lock&quot; parou de funcionar,e tem duas linhas estranhas na tela no notebook.', 'Reinicialização da máquina,desativei e ativei o teclado off-board no setup.', '2015-05-15 10:35:02', 41, NULL),
(1131, 'Puxar um cabo de rede do computador até o moden. Configurar o Outlook da máquina para Vendas05.', 'Puxei o fio com Yuri,instalei logmein e atualizei o antivírus da máquina. Configurei o outlook e fiz uma limpeza de software. ', '2015-05-15 12:56:00', 41, NULL),
(1139, 'Consertar backup1', 'Backup1 reparodo.', '2015-05-15 13:33:24', 51, NULL),
(1132, 'Consertar backup2', 'Backup2 repado', '2015-05-15 13:35:24', 51, NULL),
(1133, 'Consertar backup4.', 'Backup4 consertado.', '2015-05-15 13:37:14', 51, NULL),
(1134, 'Máquina não sobe windows.', 'Foi colocado o boot correto.', '2015-05-15 13:39:11', 51, NULL),
(1140, 'Servidor não sobe windows.', 'Servidor retirado para análise.', '2015-05-15 14:02:09', 51, NULL),
(1141, 'Instalar sistema na máquina da Gleice.', 'Foi Instalado o  sistema na máquina da Gleice.', '2015-05-15 14:16:33', 51, NULL),
(1142, 'Trocar bateria da máquina da Angélica.', 'Foi trocado a bateria da máquina da Angélica.', '2015-05-15 14:18:40', 51, NULL),
(1143, 'Impressora de etiqueta não imprime na máquina 1 da recepção.', 'Foi solucionado.', '2015-05-15 14:46:32', 51, NULL),
(1144, 'Mudança do dvr', 'O dvr foi trocado', '2015-05-15 14:49:23', 51, NULL),
(1148, 'Site do banco não abre(java).', 'Atualizar java', '2015-05-15 14:52:13', 51, NULL),
(1147, 'Site do banco não abre(java) máquina da Kádia.', 'Foi atualizado o java.', '2015-05-15 14:53:43', 51, NULL),
(1149, 'Impressora não imprime.', 'Foi solucionado.', '2015-05-15 15:09:12', 51, NULL),
(1135, 'Descrição técnica do problema', 'Adicionado 2GB de Memória, ficando com 4GB', '2015-05-15 15:36:08', 3, NULL),
(1136, 'Descrição técnica do problema', 'Instalação do Java', '2015-05-15 15:38:01', 3, NULL),
(1137, 'Descrição técnica do problema', 'Solução para este problema', '2015-05-15 15:45:18', 3, NULL),
(1150, 'Descrição técnica do problema', 'Desintalação do warsaw', '2015-05-15 17:28:17', 3, NULL),
(1151, 'Descrição técnica do problema', 'Limpeza', '2015-05-18 16:08:30', 3, NULL),
(1152, 'Descrição técnica do problema', 'Limpeza', '2015-05-18 16:29:18', 3, NULL),
(1153, 'Temporários', 'Limpeza', '2015-05-18 16:31:05', 3, NULL),
(1156, 'Colocar câmera no 8° andar', 'Foi colocada uma câmera no 8° andar', '2015-05-25 10:30:29', 51, NULL),
(1155, 'Interferência na câmera da Suíça.', 'Foi retirado um rolo de cabo do cabeamento.', '2015-05-25 10:32:38', 51, NULL),
(1154, 'Windows não inicia.', 'Foi feita uma limpeza na máquina e foi trocado o cabo sata do hd. ', '2015-05-25 10:35:05', 51, NULL),
(1157, 'Instalar nova máquina no local.', 'Foi instalada nova máquina no local.', '2015-05-25 10:38:34', 51, NULL),
(1158, 'Erro nota fiscal.', 'Foi constatado que erro provinha  da desatualização do sistema do contador.', '2015-05-25 10:44:11', 51, NULL),
(1163, 'Limpeza nas máquinas.', 'Foi feita uma limpeza na máquina caixa1.', '2015-05-25 10:46:45', 51, NULL),
(1162, 'Limpeza nas máquinas.', 'Foi feita uma limpeza na máquina caixa2.', '2015-05-25 10:47:28', 51, NULL),
(1161, 'Limpeza nas máquinas.', 'Foi feita uma limpeza na máquina checkin.', '2015-05-25 10:48:12', 51, NULL),
(1160, 'Limpeza nas máquinas.', 'Foi feita uma limpeza na máquina admin.', '2015-05-25 10:49:06', 51, NULL),
(1159, 'Limpeza nas máquinas.', 'Foi feita uma limpeza na máquina Gerência.', '2015-05-25 10:49:52', 51, NULL),
(1164, 'Computador não quer ligar após um pico de luz.', 'Troca da fonte,pois a mesma se encontrava queimada.', '2015-05-26 12:38:42', 41, NULL),
(1166, 'Sem internet.', 'Foram invertidas as conexões no  balanceador.', '2015-06-02 11:00:05', 51, NULL),
(1165, 'Impressora não imprime.', 'Foi reinstalado o driver de impressão.', '2015-06-02 11:01:53', 51, NULL),
(1170, 'Máquina do Guilherme está com Vírus.', 'Foi reinstalado o sistema operacional em outro hd e foram feitas tentativas de recuperar a informação. ', '2015-06-02 11:08:40', 51, NULL),
(1169, 'Netbook sem acesso a internet e editor de texto LibraOffice apresentando problemas.', 'Foi excluída uma conexão de rede sem fio configurada de forma inadequada e foi instalado o Microsoft Office', '2015-06-02 11:13:05', 51, NULL),
(1168, 'Netbook sem acesso a internet e editor de texto LibraOffice apresentando problemas.', 'Foi excluída uma conexão de rede sem fio configurada de forma inadequada e foi reinstalado o LibraOffice.', '2015-06-02 11:15:17', 51, NULL),
(1167, 'Máquina da Cofi não liga.', 'Foi trocada a fonte da máquina.', '2015-06-02 11:16:47', 51, NULL),
(1171, 'Trocar HD da máquina da Flávia.', 'Foi trocado o HD da máquina da Flávia.', '2015-06-02 11:19:41', 51, NULL),
(1173, 'Ponto de rede está com mau contato', 'Foi solucionado o problema de rede.', '2015-06-02 11:22:28', 51, NULL),
(1172, 'Máquina da telefonia está perdendo a conexão com o Sistema Visual Asa.', 'A máquina foi reinstalada.', '2015-06-02 11:24:18', 51, NULL),
(1178, 'Montagem de uma nova máquina. Criação de uma rede de trabalho para compartilhamento de dados e impressoras. Configuração da nova máquina para ficar totalmente operacional para o profissional.', 'Montagem da máquina,criação de uma rede de trabalho,e compartilhamento de dados e impressora.', '2015-07-10 10:50:03', 41, NULL),
(1179, 'Instalação do pacote Office.', 'Instalação do pacote Office por via acesso remoto. \r\n', '2015-08-06 14:02:51', 41, NULL),
(1180, '	Lentidão na máquina,vírus e programas maliciosos e indesejados.', 'Foi feita uma série de procedimentos para a limpeza da máquina,porém apesar de tudo foi feito uma restauração do sistema,pois havia programas que não puderam ser desinstalados completamente sem deixar alguma lesão na máquina.\r\nFeito a restauração,tivemos que partir para a instalação completa de programas e recursos para deixar a máquina novamente utilizável.\r\nOBS: Se o problema voltar a ocorrer,sugiro uma bloqueador de navegação para conteúdos pornográficos,redes sociais,jogos e blogs de aparência duvidosa. \r\n', '2015-08-06 14:09:41', 41, NULL),
(1182, '	Instalação de uma placa de vídeo em uma máquina de uso pessoa da filha do Macedo.\r\n', 'Chegando no cliente na Quarta-feira (dia 12/08),descobri que a máquina possuía uma placa mãe com processador acoplado e não tinha nenhuma entrada PCI ou PCI Express,aconselhei o Macedo a comprar uma placa mãe nova,assim como novo processador e uma nova memória Ram,pois a antiga era de notbook.\r\nO chamado foi reagendado para uma sexta feira,onde eu montei a máquina e fiz as instalações tanto do Windows como de outros programas necessários para que a máquina se tornasse operacional.', '2015-08-17 10:57:24', 41, NULL),
(1183, 'Montagem de uma nova máquina e formatação da máquina do Leonardo para instalação do windows seven.', 'Montei a máquina nova e configurei ela para deixa-la totalmente operacional para o Bira.\r\nIdentificação de problema técnico na placa de rede on-board da máquina nova,foi solicitado que ela fosse levada para  o atendimento autorizado.  \r\nInstalação do Windws Seven e os programas necessários para funcionamento profissional e operacional na máquina do Leonardo.\r\nCriação de uma rede de trabalho,compartilhamento de impressora e pastas  para um rendimento maior e uma rapidez dinâmica  no ambiente empresarial e maior agilidade na troca de informações e documentos.\r\n(no dia 17/08 cheguei no cliente as 14:00 horas,saí do mesmo as 17:00 horas e retornei as 09:15 do dia 18/08,me liberando e terminando o serviço solicitado as 12:05.)', '2015-08-18 15:23:28', 41, NULL),
(1186, '', 'Foi reinstalado o certificado.', '2016-11-07 16:24:11', 63, NULL),
(1188, '', '', '2016-11-18 10:29:57', 63, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`stat_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '',
  `stat_cat` int(4) DEFAULT NULL,
  `stat_painel` int(2) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`stat_id`, `status`, `stat_cat`, `stat_painel`) VALUES
(1, 'Aguardando atendimento', 2, 2),
(2, 'Em atendimento', 2, 1),
(3, 'Em estudo', 2, 1),
(4, 'Encerrada', 4, 3),
(7, 'Agendado com usuário', 1, 1),
(12, 'Cancelado', 4, 3),
(15, 'Todos', 4, 2),
(16, 'Aguardando retorno do usuário', 1, 1),
(19, 'Indisponível para atendimento', 1, 2),
(21, 'Encaminhado para operador', 2, 1),
(22, 'Interrompido para atender outro chamado', 2, 1),
(25, 'Aguardando retorno do fornecedor', 3, 1),
(26, 'Com Backup', 4, 1),
(27, 'Reservado para Operador', 2, 1),
(29, 'Técnico a caminho', 2, 1),
(30, 'Tentativa de contato realizada', 2, 1),
(31, 'Visualizado pelo suporte', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_categ`
--

CREATE TABLE IF NOT EXISTS `status_categ` (
`stc_cod` int(4) NOT NULL,
  `stc_desc` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='Tabela de Categorias de Status para Chamados';

--
-- Extraindo dados da tabela `status_categ`
--

INSERT INTO `status_categ` (`stc_cod`, `stc_desc`) VALUES
(1, 'AO USUÁRIO'),
(2, 'ÁREA TÉCNICA'),
(3, 'À SERVIÇOS DE TERCEIROS'),
(4, 'INDEPENDENTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `styles`
--

CREATE TABLE IF NOT EXISTS `styles` (
`tm_id` int(2) NOT NULL,
  `tm_color_destaca` varchar(15) NOT NULL DEFAULT '#CCCCCC',
  `tm_color_marca` varchar(15) NOT NULL DEFAULT '#FFFFCC',
  `tm_color_lin_par` varchar(15) NOT NULL DEFAULT '#E3E1E1',
  `tm_color_lin_impar` varchar(15) NOT NULL DEFAULT '#F6F6F6',
  `tm_color_body` varchar(15) NOT NULL DEFAULT '#F6F6F6',
  `tm_color_td` varchar(15) NOT NULL DEFAULT '#DBDBDB',
  `tm_borda_width` int(2) NOT NULL DEFAULT '2',
  `tm_borda_color` varchar(10) NOT NULL DEFAULT '#F6F6F6',
  `tm_tr_header` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_topo` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_topo_font` varchar(7) NOT NULL DEFAULT '#FFFFFF',
  `tm_color_barra` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_menu` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_barra_font` varchar(7) NOT NULL DEFAULT '#675E66',
  `tm_color_barra_hover` varchar(7) NOT NULL DEFAULT '#FFFFFF',
  `tm_barra_fundo_destaque` varchar(7) NOT NULL DEFAULT '#666666',
  `tm_barra_fonte_destaque` varchar(7) NOT NULL DEFAULT '#FFFFFF',
  `tm_color_font_tr_header` varchar(7) NOT NULL DEFAULT '#000000',
  `tm_color_borda_header_centro` varchar(7) NOT NULL DEFAULT '#999999'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `styles`
--

INSERT INTO `styles` (`tm_id`, `tm_color_destaca`, `tm_color_marca`, `tm_color_lin_par`, `tm_color_lin_impar`, `tm_color_body`, `tm_color_td`, `tm_borda_width`, `tm_borda_color`, `tm_tr_header`, `tm_color_topo`, `tm_color_topo_font`, `tm_color_barra`, `tm_color_menu`, `tm_color_barra_font`, `tm_color_barra_hover`, `tm_barra_fundo_destaque`, `tm_barra_fonte_destaque`, `tm_color_font_tr_header`, `tm_color_borda_header_centro`) VALUES
(1, '#FFC0CB', '#E8EEF7', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', 1, '#BBBBBB', '#638CB5', '#FFFFFF', '#638CB5', '#336699', '#FFFFFF', '#FFFFFF', '#000000', '#638CB5', '#000000', '#FFFFFF', '#82b322');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sw_padrao`
--

CREATE TABLE IF NOT EXISTS `sw_padrao` (
`swp_cod` int(4) NOT NULL,
  `swp_sw_cod` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de softwares padrao para cada equipamento';

-- --------------------------------------------------------

--
-- Estrutura da tabela `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
`tm_id` int(2) NOT NULL,
  `tm_nome` varchar(15) NOT NULL DEFAULT 'DEFAULT',
  `tm_color_destaca` varchar(10) NOT NULL DEFAULT '#CCCCCC',
  `tm_color_marca` varchar(10) NOT NULL DEFAULT '#FFFFCC',
  `tm_color_lin_par` varchar(10) NOT NULL DEFAULT '#E3E1E1',
  `tm_color_lin_impar` varchar(10) NOT NULL DEFAULT '#F6F6F6',
  `tm_color_body` varchar(10) NOT NULL DEFAULT '#F6F6F6',
  `tm_color_td` varchar(10) NOT NULL DEFAULT '#DBDBDB',
  `tm_borda_width` int(2) NOT NULL DEFAULT '2',
  `tm_borda_color` varchar(10) NOT NULL DEFAULT '#F6F6F6',
  `tm_tr_header` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_topo` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_topo_font` varchar(7) NOT NULL DEFAULT '#FFFFFF',
  `tm_color_barra` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_menu` varchar(11) NOT NULL DEFAULT 'IMG_DEFAULT',
  `tm_color_barra_font` varchar(7) NOT NULL DEFAULT '#675E66',
  `tm_color_barra_hover` varchar(7) NOT NULL DEFAULT '#FFFFFF',
  `tm_barra_fundo_destaque` varchar(7) NOT NULL DEFAULT '#666666',
  `tm_barra_fonte_destaque` varchar(7) NOT NULL DEFAULT '#FFFFFF',
  `tm_color_font_tr_header` varchar(7) NOT NULL DEFAULT '#000000',
  `tm_color_borda_header_centro` varchar(7) NOT NULL DEFAULT '#999999'
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `temas`
--

INSERT INTO `temas` (`tm_id`, `tm_nome`, `tm_color_destaca`, `tm_color_marca`, `tm_color_lin_par`, `tm_color_lin_impar`, `tm_color_body`, `tm_color_td`, `tm_borda_width`, `tm_borda_color`, `tm_tr_header`, `tm_color_topo`, `tm_color_topo_font`, `tm_color_barra`, `tm_color_menu`, `tm_color_barra_font`, `tm_color_barra_hover`, `tm_barra_fundo_destaque`, `tm_barra_fonte_destaque`, `tm_color_font_tr_header`, `tm_color_borda_header_centro`) VALUES
(1, 'GREEN', '#D0DBCE', '#D0DBCE', '#FFFFFF', '#FFFFFF', '#EEEFE9', '#D0DBCE', 1, '#427041', '#427041', '#3B6B39', '#FFFFFF', '#E3E3E3', '#EEEFE9', '#000000', '#FFFFFF', '#427041', '#FFFFFF', '#FFFFFF', '#427041'),
(2, 'OLD_TIMES', '#99CCFF', '#99CCFF', '#CDE5FF', '#FFFFFF', '#CDE5FF', '#92AECC', 0, '#FFFFFF', '#92AECC', '#92AECC', '#FFFFFF', '#CDE5FF', '#CDE5FF', '#0000EE', '#8F6C7F', '#CDE5FF', '#8F6C7F', '#000000', '#92AECC'),
(3, 'GMAIL', '#FFFFCC', '#E8EEF7', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#E0ECFF', 1, '#BBBBBB', '#C3D9FF', '#DFECF5', '#0000CC', '#C3D9FF', '#FFFFFF', '#0000CC', '#000000', '#FFFFFF', '#000000', '#000000', '#C3D9FF'),
(4, 'CLASSICO', '#D5D5D5', '#FFCC99', '#EAE6D0', '#F8F8F1', '#F6F6F6', '#ECECDB', 0, '#F6F6F6', '#DDDCC5', '#5e515b', '#FFFFFF', '#999999', 'IMG_DEFAULT', '#FFFFFF', '#FFFFFF', '#666666', '#FFFFFF', '#000000', '#DDDCC5'),
(5, 'DEFAULT', '#CCCCCC', '#FFFFCC', '#E3E1E1', '#F6F6F6', '#F6F6F6', '#DBDBDB', 2, '#F6F6F6', 'IMG_DEFAULT', 'IMG_DEFAULT', '#FFFFFF', 'IMG_DEFAULT', 'IMG_DEFAULT', '#675E66', '#FFFFFF', '#666666', '#FFFFFF', '#000000', '#999999'),
(6, 'black_edition', '#CCCCCC', '#FFFFCC', '#E3E1E1', '#F6F6F6', '#FFFFFF', '#999999', 2, '#FFFFFF', '#999999', '#000000', '#FFFFFF', '#000000', 'IMG_DEFAULT', '#FFFFFF', '#000000', '#FFFFFF', '#000000', '#000000', '#FF0000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempo_garantia`
--

CREATE TABLE IF NOT EXISTS `tempo_garantia` (
`tempo_cod` int(4) NOT NULL,
  `tempo_meses` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Tabela de tempos de duraÃ§Ã£o das garantias';

--
-- Extraindo dados da tabela `tempo_garantia`
--

INSERT INTO `tempo_garantia` (`tempo_cod`, `tempo_meses`) VALUES
(1, 12),
(2, 24),
(3, 36),
(4, 6),
(5, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempo_status`
--

CREATE TABLE IF NOT EXISTS `tempo_status` (
`ts_cod` int(6) NOT NULL,
  `ts_ocorrencia` int(5) NOT NULL DEFAULT '0',
  `ts_status` int(4) NOT NULL DEFAULT '0',
  `ts_tempo` int(10) NOT NULL DEFAULT '0',
  `ts_data` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=1928 DEFAULT CHARSET=latin1 COMMENT='Tabela para armazenar o tempo dos chamados em cada status';

--
-- Extraindo dados da tabela `tempo_status`
--

INSERT INTO `tempo_status` (`ts_cod`, `ts_ocorrencia`, `ts_status`, `ts_tempo`, `ts_data`) VALUES
(20, 13, 2, 66779, '2010-01-05 18:05:50'),
(23, 17, 1, 250269, '2010-01-11 13:31:09'),
(32, 24, 1, 133, '2010-01-05 18:26:04'),
(31, 23, 1, 122, '2010-01-05 18:15:19'),
(19, 14, 2, 266, '2010-01-04 11:13:31'),
(30, 22, 1, 631, '2010-01-05 18:22:37'),
(29, 21, 2, 213, '2010-01-05 10:27:06'),
(28, 21, 1, 12, '2010-01-05 10:23:33'),
(22, 16, 1, 1330670, '2010-02-10 10:37:50'),
(27, 20, 1, 27646, '2010-01-05 18:10:42'),
(26, 19, 2, 354, '2010-01-05 09:21:22'),
(25, 19, 1, 63, '2010-01-05 09:15:28'),
(24, 18, 1, 6624, '2010-01-04 17:11:09'),
(21, 15, 1, 250097, '2010-01-11 13:28:17'),
(18, 14, 1, 81, '2010-01-04 11:09:05'),
(17, 13, 1, 2343, '2010-01-04 11:32:51'),
(33, 25, 1, 172, '2010-01-08 17:03:24'),
(34, 26, 1, 236, '2010-01-08 17:10:12'),
(46, 36, 1, 71177, '2010-01-13 11:16:49'),
(36, 28, 1, 241, '2010-01-08 17:22:23'),
(37, 29, 1, 387, '2010-01-08 17:36:20'),
(38, 30, 1, 89700, '2010-01-13 11:01:49'),
(39, 31, 1, 214, '2010-01-11 13:11:09'),
(40, 31, 2, 90791, '2010-01-13 11:24:20'),
(41, 32, 1, 1082184, '2010-02-10 10:57:33'),
(42, 33, 1, 89341, '2010-01-13 11:11:04'),
(43, 34, 1, 80, '2010-01-11 13:24:45'),
(66, 50, 1, 250172, '2010-01-26 12:41:50'),
(64, 48, 1, 802151, '2010-02-10 10:49:11'),
(47, 37, 1, 899112, '2010-02-05 15:46:32'),
(48, 38, 1, 6360, '2010-01-12 14:46:00'),
(49, 39, 1, 6306, '2010-01-12 14:45:06'),
(50, 39, 7, 41927, '2010-01-13 13:23:53'),
(51, 38, 7, 58097, '2010-01-13 17:54:17'),
(63, 47, 1, 78, '2010-01-15 16:42:21'),
(53, 30, 2, 375, '2010-01-13 11:08:04'),
(54, 36, 2, 247, '2010-01-13 11:20:56'),
(55, 40, 1, 990776, '2010-02-10 10:41:31'),
(56, 41, 1, 991181, '2010-02-10 10:53:20'),
(57, 42, 1, 990929, '2010-02-10 10:51:31'),
(61, 46, 1, 2, '2010-01-14 12:00:54'),
(59, 44, 1, 15751, '2010-01-13 17:48:57'),
(60, 45, 1, 15847, '2010-01-13 17:51:47'),
(62, 46, 7, 59814, '2010-01-15 16:36:54'),
(67, 51, 1, 154800, '2010-01-26 12:46:25'),
(68, 52, 1, 216, '2010-01-21 13:23:44'),
(69, 52, 2, 549792, '2010-02-05 15:06:56'),
(70, 53, 1, 429211, '2010-02-05 15:17:08'),
(71, 54, 1, 566228, '2010-02-10 10:54:52'),
(72, 55, 1, 0, '2010-01-26 12:47:58'),
(73, 56, 1, 0, '2010-01-26 12:50:18'),
(74, 56, 2, 153730, '2010-01-29 16:42:10'),
(75, 57, 1, 90, '2010-01-29 16:54:20'),
(76, 58, 1, 159, '2010-01-29 16:58:30'),
(77, 59, 1, 186, '2010-01-29 17:00:15'),
(78, 59, 2, 61389, '2010-02-01 17:03:24'),
(79, 60, 1, 124, '2010-02-01 17:06:24'),
(86, 65, 1, 204, '2010-02-02 20:22:52'),
(85, 64, 2, 40829, '2010-02-03 18:39:13'),
(82, 63, 1, 61, '2010-02-01 17:13:43'),
(83, 64, 1, 25, '2010-02-01 17:16:46'),
(84, 64, 7, 57718, '2010-02-02 20:18:44'),
(87, 65, 7, 40656, '2010-02-03 18:40:28'),
(88, 66, 1, 94, '2010-02-03 18:38:16'),
(89, 67, 1, 197, '2010-02-05 15:12:18'),
(90, 68, 1, 205644, '2010-02-11 16:26:10'),
(119, 83, 1, 1106189, '2010-03-15 13:34:19'),
(92, 16, 2, 203, '2010-02-10 10:41:13'),
(93, 40, 2, 419, '2010-02-10 10:48:30'),
(94, 48, 2, 108, '2010-02-10 10:50:59'),
(95, 42, 2, 88, '2010-02-10 10:52:59'),
(96, 41, 2, 70, '2010-02-10 10:54:30'),
(97, 54, 2, 58, '2010-02-10 10:55:50'),
(98, 70, 1, 2134, '2010-02-10 11:36:18'),
(99, 71, 1, 2258, '2010-02-10 11:40:22'),
(100, 72, 1, 1934, '2010-02-10 12:05:40'),
(101, 73, 1, 850, '2010-02-10 11:44:09'),
(102, 74, 1, 1109, '2010-02-10 11:49:30'),
(103, 70, 2, 213, '2010-02-10 11:39:51'),
(104, 71, 2, 165, '2010-02-10 11:43:07'),
(105, 73, 2, 284, '2010-02-10 11:48:53'),
(106, 74, 2, 102, '2010-02-10 11:51:12'),
(107, 75, 1, 11, '2010-02-10 11:54:41'),
(108, 75, 2, 98, '2010-02-10 11:56:19'),
(109, 72, 2, 1154149, '2010-03-15 13:35:49'),
(110, 76, 1, 126, '2010-02-10 17:33:32'),
(111, 77, 1, 91, '2010-02-10 17:36:24'),
(112, 78, 1, 105, '2010-02-10 17:39:38'),
(113, 79, 1, 145, '2010-02-10 17:43:32'),
(114, 80, 1, 91, '2010-02-10 17:45:59'),
(115, 81, 1, 11, '2010-02-11 09:43:19'),
(116, 81, 2, 1034, '2010-02-11 10:00:33'),
(117, 82, 1, 14, '2010-02-11 10:05:00'),
(118, 82, 2, 134, '2010-02-11 10:07:14'),
(120, 84, 1, 454, '2010-02-11 13:30:47'),
(121, 84, 2, 151, '2010-02-11 13:25:53'),
(122, 85, 1, 25, '2010-02-11 14:04:48'),
(123, 85, 2, 163, '2010-02-11 14:07:31'),
(124, 86, 1, 11, '2010-02-11 14:11:39'),
(125, 86, 2, 132, '2010-02-11 14:13:51'),
(126, 68, 2, 392336, '2010-02-23 11:25:06'),
(127, 87, 1, 1970401, '2010-04-08 10:03:28'),
(128, 88, 1, 61, '2010-02-11 17:32:22'),
(129, 88, 7, 278858, '2010-02-19 12:09:38'),
(130, 89, 1, 29, '2010-02-11 17:33:19'),
(131, 89, 7, 278801, '2010-02-19 12:08:39'),
(132, 90, 1, 0, '2010-02-12 12:13:19'),
(133, 91, 1, 0, '2010-02-19 12:12:17'),
(134, 92, 1, 52, '2010-02-19 14:43:43'),
(135, 93, 1, 0, '2010-02-19 23:27:36'),
(136, 94, 1, 749148, '2010-03-15 13:36:23'),
(137, 95, 1, 264, '2010-02-22 18:50:00'),
(138, 96, 1, 69, '2010-02-22 18:52:21'),
(139, 97, 1, 46, '2010-02-22 18:54:02'),
(140, 98, 1, 16, '2010-02-22 19:13:53'),
(141, 98, 2, 189, '2010-02-22 19:17:02'),
(142, 99, 1, 505, '2010-02-23 10:54:45'),
(143, 100, 1, 10, '2010-02-23 18:59:40'),
(144, 100, 2, 86, '2010-02-23 19:01:07'),
(145, 101, 1, 63, '2010-02-23 19:21:05'),
(146, 102, 1, 55, '2010-02-23 19:22:51'),
(147, 103, 1, 38, '2010-02-23 19:24:01'),
(148, 104, 1, 48, '2010-02-23 19:25:19'),
(149, 105, 1, 37, '2010-02-23 19:26:26'),
(150, 106, 1, 111, '2010-02-24 10:14:29'),
(151, 106, 2, 64914, '2010-02-25 16:16:23'),
(273, 194, 1, 134086, '2010-04-08 10:08:26'),
(153, 108, 1, 101818, '2010-02-26 15:15:51'),
(154, 109, 1, 11, '2010-02-24 13:15:37'),
(155, 109, 2, 610, '2010-02-24 13:25:47'),
(156, 110, 1, 16, '2010-02-24 13:29:23'),
(157, 110, 2, 652273, '2010-03-15 13:40:36'),
(158, 111, 1, 60, '2010-02-24 18:50:15'),
(159, 112, 1, 14, '2010-02-24 18:51:31'),
(167, 117, 1, 50, '2010-03-01 15:28:26'),
(161, 114, 1, 70, '2010-02-24 18:53:22'),
(162, 115, 1, 1296, '2010-02-26 11:22:33'),
(163, 116, 1, 1245, '2010-02-26 11:23:16'),
(164, 115, 2, 10118, '2010-02-26 15:11:11'),
(165, 116, 2, 10269, '2010-02-26 15:14:25'),
(166, 108, 2, 1022494, '2010-03-27 09:17:25'),
(168, 118, 1, 53, '2010-03-01 15:29:54'),
(169, 119, 1, 59, '2010-03-01 15:31:29'),
(170, 120, 1, 70, '2010-03-01 15:33:30'),
(171, 121, 1, 27, '2010-03-01 15:34:35'),
(172, 122, 1, 36, '2010-03-01 15:37:39'),
(173, 123, 1, 44, '2010-03-01 15:41:27'),
(174, 124, 1, 31, '2010-03-01 15:42:50'),
(175, 125, 1, 40, '2010-03-02 08:59:11'),
(176, 125, 2, 43249, '2010-03-02 23:40:36'),
(177, 126, 1, 52, '2010-03-02 16:16:17'),
(178, 127, 1, 76, '2010-03-02 16:18:22'),
(179, 128, 1, 460, '2010-03-03 13:16:41'),
(180, 129, 1, 467, '2010-03-03 13:18:19'),
(181, 130, 1, 512, '2010-03-03 13:20:28'),
(182, 131, 1, 463, '2010-03-04 13:11:00'),
(183, 132, 1, 236, '2010-03-04 13:10:39'),
(184, 133, 1, 29, '2010-03-04 13:09:44'),
(185, 133, 2, 960, '2010-03-04 13:25:44'),
(186, 132, 2, 192, '2010-03-04 13:13:51'),
(187, 131, 2, 946140, '2010-03-31 12:52:08'),
(188, 134, 1, 64, '2010-03-05 13:54:04'),
(189, 135, 1, 25, '2010-03-05 13:55:01'),
(190, 136, 1, 106, '2010-03-09 17:52:04'),
(191, 137, 1, 39153, '2010-03-10 15:46:24'),
(192, 138, 1, 0, '2010-03-10 07:59:02'),
(193, 138, 25, 642114, '2010-03-27 09:21:54'),
(194, 139, 1, 43, '2010-03-10 15:50:01'),
(195, 140, 1, 77, '2010-03-11 16:48:24'),
(196, 141, 1, 0, '2010-03-15 12:16:11'),
(197, 142, 1, 0, '2010-03-15 12:19:03'),
(198, 83, 2, 38, '2010-03-15 13:34:57'),
(199, 94, 2, 84, '2010-03-15 13:37:47'),
(200, 143, 1, 10, '2010-03-15 13:44:48'),
(201, 143, 2, 76, '2010-03-15 13:46:04'),
(202, 144, 1, 14, '2010-03-15 13:47:39'),
(203, 144, 2, 94, '2010-03-15 13:49:13'),
(204, 145, 1, 15, '2010-03-15 13:51:47'),
(205, 145, 2, 217, '2010-03-15 13:55:24'),
(206, 146, 1, 10, '2010-03-15 13:56:46'),
(207, 146, 2, 59, '2010-03-15 13:57:45'),
(208, 147, 1, 10, '2010-03-15 13:58:52'),
(209, 147, 2, 109, '2010-03-15 14:00:41'),
(210, 148, 1, 9, '2010-03-15 14:04:56'),
(211, 148, 2, 75, '2010-03-15 14:06:11'),
(212, 149, 1, 13, '2010-03-15 14:08:44'),
(213, 149, 2, 84, '2010-03-15 14:10:08'),
(214, 150, 1, 37, '2010-03-16 17:01:22'),
(215, 151, 1, 23, '2010-03-16 17:02:33'),
(216, 152, 1, 29, '2010-03-16 17:03:30'),
(217, 153, 1, 284, '2010-03-16 17:19:42'),
(218, 153, 2, 410058, '2010-03-27 09:14:00'),
(219, 154, 1, 76, '2010-03-17 15:59:28'),
(220, 155, 1, 9, '2010-03-18 20:03:03'),
(221, 155, 2, 366, '2010-03-18 20:09:09'),
(222, 156, 1, 8, '2010-03-18 20:11:04'),
(223, 156, 2, 336, '2010-03-18 20:16:40'),
(224, 157, 1, 8, '2010-03-18 20:12:41'),
(225, 157, 2, 322, '2010-03-18 20:18:03'),
(226, 158, 1, 9, '2010-03-18 20:15:02'),
(227, 158, 2, 225, '2010-03-18 20:18:47'),
(228, 159, 1, 4546111, '2010-07-27 17:48:02'),
(229, 160, 1, 352725, '2010-03-31 13:00:15'),
(230, 161, 1, 10633, '2010-03-22 13:03:52'),
(231, 162, 1, 186, '2010-03-22 13:03:06'),
(232, 163, 1, 146, '2010-03-22 13:02:26'),
(233, 164, 1, 97, '2010-03-22 13:01:37'),
(234, 165, 1, 94, '2010-03-22 13:07:59'),
(235, 165, 2, 890773, '2010-04-15 14:34:12'),
(236, 166, 1, 4531411, '2010-07-27 17:33:00'),
(237, 167, 1, 4531699, '2010-07-27 17:38:04'),
(238, 168, 1, 4532012, '2010-07-27 17:43:44'),
(239, 169, 1, 4531888, '2010-07-27 17:41:49'),
(240, 170, 1, 4532077, '2010-07-27 17:45:22'),
(241, 171, 1, 4532158, '2010-07-27 17:46:56'),
(242, 172, 1, 341279, '2010-03-31 13:39:34'),
(243, 173, 1, 341201, '2010-03-31 13:40:43'),
(244, 174, 1, 24, '2010-03-23 11:58:21'),
(245, 175, 1, 10, '2010-03-23 15:49:11'),
(246, 175, 2, 182, '2010-03-23 15:52:13'),
(247, 176, 1, 8, '2010-03-23 15:53:36'),
(248, 176, 2, 246, '2010-03-23 15:57:42'),
(249, 177, 1, 152157, '2010-03-31 12:43:08'),
(250, 178, 1, 56, '2010-03-26 13:49:32'),
(251, 179, 1, 735601, '2010-04-16 10:14:19'),
(252, 180, 1, 153817, '2010-03-31 13:40:08'),
(253, 181, 1, 153788, '2010-03-31 13:41:20'),
(254, 138, 2, 117486, '2010-03-31 12:47:49'),
(255, 182, 1, 25, '2010-03-29 16:25:17'),
(256, 182, 2, 110, '2010-03-29 16:27:07'),
(257, 183, 1, 10, '2010-03-29 16:29:21'),
(258, 183, 2, 50, '2010-03-29 16:30:11'),
(259, 184, 1, 14, '2010-03-29 16:31:39'),
(260, 184, 2, 80901, '2010-03-31 12:08:57'),
(261, 185, 1, 8, '2010-03-29 16:33:43'),
(262, 185, 2, 80777, '2010-03-31 12:14:47'),
(263, 186, 1, 14, '2010-03-29 16:35:01'),
(264, 186, 2, 60, '2010-03-29 16:36:01'),
(265, 187, 1, 43, '2010-03-30 14:59:17'),
(266, 177, 2, 0, '2010-03-31 12:49:23'),
(267, 188, 1, 117, '2010-03-31 13:01:57'),
(268, 189, 1, 478, '2010-03-31 13:07:58'),
(269, 190, 1, 333, '2010-03-31 13:05:33'),
(270, 191, 1, 181, '2010-03-31 13:13:33'),
(271, 192, 1, 52593, '2010-04-01 15:32:50'),
(272, 193, 1, 103566, '2010-04-05 14:20:35'),
(274, 195, 1, 203, '2010-04-05 14:14:53'),
(275, 196, 1, 148, '2010-04-05 14:18:19'),
(276, 193, 2, 424789, '2010-04-16 10:20:24'),
(277, 197, 1, 356, '2010-04-05 15:29:03'),
(278, 198, 1, 45352, '2010-04-08 14:36:17'),
(279, 199, 1, 44901, '2010-04-08 14:37:11'),
(280, 200, 1, 44682, '2010-04-08 14:38:57'),
(281, 201, 1, 41174, '2010-04-08 13:43:58'),
(282, 194, 2, 295715, '2010-04-16 10:17:01'),
(283, 198, 2, 154595, '2010-04-13 14:32:52'),
(284, 199, 2, 153873, '2010-04-13 14:21:44'),
(285, 200, 2, 153382, '2010-04-13 14:15:19'),
(286, 202, 1, 283302, '2010-04-16 19:38:37'),
(287, 203, 1, 85208, '2010-04-14 08:25:31'),
(288, 204, 1, 239, '2010-04-13 14:27:30'),
(289, 205, 1, 87, '2010-04-13 14:30:02'),
(290, 206, 1, 141, '2010-04-13 14:38:06'),
(291, 207, 1, 88, '2010-04-13 14:41:27'),
(292, 208, 1, 25, '2010-04-14 10:28:29'),
(293, 208, 2, 54, '2010-04-14 10:29:23'),
(294, 209, 1, 23, '2010-04-14 10:31:44'),
(295, 209, 2, 26, '2010-04-14 10:32:10'),
(296, 210, 1, 8, '2010-04-14 11:10:26'),
(297, 210, 2, 85, '2010-04-14 11:11:51'),
(298, 211, 1, 7, '2010-04-14 11:12:37'),
(299, 211, 2, 47, '2010-04-14 11:13:24'),
(300, 212, 1, 3110251, '2010-07-11 22:58:26'),
(301, 213, 1, 43553, '2010-04-16 10:13:00'),
(302, 214, 1, 96, '2010-04-15 14:36:54'),
(303, 215, 1, 52, '2010-04-15 14:38:34'),
(304, 216, 1, 8, '2010-04-15 15:29:16'),
(305, 216, 2, 68, '2010-04-15 15:30:24'),
(306, 217, 1, 31, '2010-04-15 15:32:11'),
(307, 217, 2, 607769, '2010-05-03 16:21:40'),
(308, 218, 1, 11, '2010-04-15 15:33:48'),
(309, 218, 2, 607801, '2010-05-03 16:23:49'),
(310, 219, 1, 511, '2010-04-15 15:43:30'),
(311, 219, 2, 607324, '2010-05-03 16:25:34'),
(312, 220, 1, 49, '2010-04-26 16:34:14'),
(313, 221, 1, 54, '2010-04-26 16:35:35'),
(314, 222, 1, 39, '2010-04-26 16:37:01'),
(315, 223, 1, 159, '2010-04-26 16:40:31'),
(316, 224, 1, 118, '2010-04-26 16:43:24'),
(317, 225, 1, 31, '2010-04-26 16:46:05'),
(318, 226, 1, 11067, '2010-04-27 11:04:27'),
(319, 227, 1, 48, '2010-04-27 11:06:24'),
(320, 228, 1, 13, '2010-05-03 16:27:30'),
(321, 228, 2, 160, '2010-05-03 16:30:10'),
(322, 229, 1, 512, '2010-05-03 16:40:21'),
(323, 229, 2, 509, '2010-05-03 16:41:32'),
(324, 230, 1, 131, '2010-05-03 16:45:30'),
(325, 231, 1, 58, '2010-05-03 16:47:42'),
(326, 232, 1, 54, '2010-05-03 16:49:27'),
(327, 233, 1, 638, '2010-05-04 17:26:52'),
(328, 234, 1, 199895, '2010-05-11 16:30:45'),
(329, 235, 1, 180409, '2010-05-11 16:31:55'),
(330, 236, 1, 0, '2010-05-07 12:38:33'),
(331, 237, 1, 205718, '2010-05-13 14:08:38'),
(332, 238, 1, 2282400, '2010-07-11 22:56:25'),
(333, 239, 1, 2174400, '2010-07-07 23:43:30'),
(334, 240, 1, 107925, '2010-05-13 14:07:07'),
(335, 241, 1, 2072934, '2010-07-07 23:34:19'),
(336, 242, 1, 89, '2010-05-11 16:35:18'),
(337, 243, 1, 96, '2010-05-11 16:38:42'),
(338, 244, 1, 0, '2010-05-11 16:39:19'),
(339, 245, 1, 0, '2010-05-11 16:39:40'),
(340, 246, 1, 279, '2010-05-11 16:44:32'),
(341, 247, 1, 119, '2010-05-11 16:48:17'),
(342, 248, 1, 0, '2010-05-13 12:06:39'),
(343, 249, 1, 0, '2010-05-13 12:08:17'),
(344, 250, 1, 205620, '2010-05-19 15:16:55'),
(345, 251, 1, 2533761, '2010-07-27 16:49:42'),
(346, 252, 1, 0, '2010-05-18 12:34:55'),
(347, 250, 2, 101, '2010-05-19 15:18:36'),
(348, 253, 1, 91676, '2010-05-21 14:47:09'),
(349, 254, 1, 279, '2010-05-19 15:24:07'),
(350, 254, 2, 68, '2010-05-19 15:20:48'),
(351, 255, 1, 38370, '2010-05-20 12:50:30'),
(352, 256, 1, 11, '2010-05-19 15:27:45'),
(353, 256, 2, 49, '2010-05-19 15:28:34'),
(354, 257, 1, 2387076, '2010-07-24 18:34:49'),
(355, 258, 1, 11, '2010-05-19 15:31:29'),
(356, 258, 2, 29, '2010-05-19 15:31:58'),
(357, 259, 1, 40, '2010-05-19 15:34:08'),
(358, 260, 1, 10, '2010-05-19 15:35:08'),
(359, 260, 2, 18, '2010-05-19 15:35:26'),
(360, 261, 1, 4555188, '2010-09-24 11:56:32'),
(361, 262, 1, 255, '2010-05-19 15:42:05'),
(362, 263, 1, 1148562, '2010-06-21 15:41:23'),
(363, 264, 1, 13, '2010-05-19 15:39:17'),
(364, 264, 2, 101, '2010-05-19 15:40:58'),
(365, 265, 1, 90555, '2010-05-21 14:50:01'),
(366, 262, 2, 2720616, '2010-08-04 11:25:41'),
(367, 266, 1, 90384, '2010-05-21 14:48:41'),
(368, 267, 1, 84, '2010-05-19 15:44:46'),
(369, 268, 1, 49, '2010-05-19 15:53:20'),
(370, 269, 1, 236, '2010-05-22 11:22:40'),
(371, 269, 2, 105257, '2010-05-26 10:36:57'),
(372, 270, 1, 1746729, '2010-07-27 17:25:42'),
(373, 271, 1, 72, '2010-06-17 13:59:32'),
(374, 272, 1, 0, '2010-06-18 23:45:17'),
(375, 273, 1, 0, '2010-06-18 23:48:23'),
(376, 274, 1, 1333346, '2010-07-27 17:22:26'),
(377, 275, 1, 642497, '2010-07-07 23:29:51'),
(378, 276, 1, 623210, '2010-07-07 23:19:21'),
(379, 277, 1, 1293182, '2010-07-27 16:48:26'),
(380, 263, 2, 613117, '2010-07-07 23:25:08'),
(381, 278, 1, 309600, '2010-07-11 22:49:23'),
(382, 279, 1, 201600, '2010-07-07 23:37:55'),
(393, 288, 1, 81377, '2010-07-11 22:46:38'),
(392, 287, 1, 81460, '2010-07-11 22:42:13'),
(385, 282, 1, 52, '2010-07-05 14:55:56'),
(386, 283, 1, 43, '2010-07-06 16:49:24'),
(387, 284, 1, 155044, '2010-07-11 22:48:32'),
(388, 285, 1, 724704, '2010-07-27 16:16:30'),
(389, 286, 1, 225171, '2010-07-13 15:32:51'),
(390, 276, 2, 683564, '2010-07-27 17:52:44'),
(391, 278, 2, 0, '2010-07-11 22:54:22'),
(394, 289, 1, 2308358, '2010-09-13 15:06:12'),
(395, 290, 1, 0, '2010-07-09 12:36:52'),
(396, 290, 2, 0, '2010-07-09 12:40:15'),
(397, 291, 1, 108000, '2010-07-13 12:35:10'),
(398, 292, 1, 46800, '2010-07-11 22:44:01'),
(399, 293, 1, 39139, '2010-07-14 15:34:45'),
(400, 287, 2, 0, '2010-07-11 22:51:32'),
(401, 292, 2, -18000, '2010-07-13 12:20:14'),
(402, 294, 1, 0, '2010-07-12 00:36:49'),
(403, 295, 1, 0, '2010-07-12 00:39:21'),
(404, 296, 1, 14071, '2010-07-13 15:34:17'),
(405, 291, 2, 509211, '2010-07-27 16:26:51'),
(406, 297, 1, 239, '2010-07-13 15:40:30'),
(407, 298, 1, 255, '2010-07-14 15:37:22'),
(408, 299, 1, 456279, '2010-07-27 17:23:08'),
(409, 300, 1, 118, '2010-07-14 15:42:58'),
(410, 301, 1, 467, '2010-07-16 11:38:15'),
(411, 302, 1, 249, '2010-07-16 11:36:09'),
(412, 303, 1, 225, '2010-07-16 11:37:43'),
(413, 301, 2, 370321, '2010-07-27 16:30:16'),
(414, 304, 1, 47, '2010-07-16 11:40:11'),
(415, 305, 1, 240391, '2010-07-27 16:48:00'),
(416, 306, 1, 32310, '2010-07-21 15:02:20'),
(417, 307, 1, 46241, '2010-07-21 18:55:45'),
(418, 308, 1, 205885, '2010-07-25 10:17:48'),
(419, 309, 1, 238982, '2010-07-27 16:30:44'),
(420, 310, 1, 205704, '2010-07-25 10:20:48'),
(421, 311, 1, 252, '2010-07-21 15:00:24'),
(422, 312, 1, 120, '2010-07-21 14:58:31'),
(423, 313, 1, 60, '2010-07-21 15:05:54'),
(424, 314, 1, 11, '2010-07-27 16:17:58'),
(425, 314, 2, 20, '2010-07-27 16:18:18'),
(426, 315, 1, 11, '2010-07-27 16:19:09'),
(427, 315, 2, 34, '2010-07-27 16:19:43'),
(428, 316, 1, 53, '2010-07-27 16:21:06'),
(429, 316, 2, 29, '2010-07-27 16:21:35'),
(430, 309, 2, 196, '2010-07-27 16:34:00'),
(431, 317, 1, 97, '2010-07-27 16:52:09'),
(432, 317, 2, 1823625, '2010-09-16 14:25:54'),
(433, 299, 2, 1711119, '2010-09-14 08:41:47'),
(434, 318, 1, 177, '2010-07-27 18:11:17'),
(435, 319, 1, 1990893, '2010-09-22 16:00:47'),
(436, 320, 1, 35, '2010-07-28 15:47:18'),
(437, 321, 1, 40, '2010-07-28 15:48:32'),
(438, 322, 1, 34, '2010-08-02 17:33:22'),
(439, 323, 1, 93, '2010-08-04 11:11:59'),
(440, 324, 1, 30, '2010-08-04 11:13:12'),
(441, 325, 1, 65, '2010-08-04 11:28:00'),
(442, 326, 1, 146, '2010-08-04 11:31:24'),
(443, 327, 1, 19, '2010-08-04 11:31:07'),
(444, 326, 2, 401841, '2010-08-16 11:08:45'),
(445, 328, 1, 0, '2010-08-05 12:29:43'),
(446, 329, 1, 0, '2010-08-05 12:30:18'),
(447, 330, 1, 0, '2010-08-05 12:30:49'),
(448, 328, 2, 0, '2010-08-05 12:33:45'),
(449, 329, 2, 0, '2010-08-05 12:34:54'),
(450, 330, 2, 0, '2010-08-05 12:35:57'),
(451, 331, 1, 268217, '2010-08-13 13:10:38'),
(453, 333, 1, 5186, '2010-08-09 14:37:09'),
(454, 334, 1, 190, '2010-08-09 16:24:22'),
(455, 335, 1, 152150, '2010-08-16 11:15:50'),
(456, 336, 1, 38, '2010-08-11 16:16:21'),
(457, 337, 1, 39, '2010-08-11 16:17:45'),
(458, 338, 1, 31, '2010-08-11 16:19:11'),
(459, 339, 1, 118, '2010-08-11 16:22:38'),
(460, 340, 1, 82328, '2010-08-13 13:15:57'),
(461, 341, 1, 37, '2010-08-13 13:17:21'),
(462, 342, 1, 208, '2010-08-13 13:21:26'),
(463, 343, 1, 25, '2010-08-13 13:22:28'),
(464, 344, 1, 114, '2010-08-13 13:26:33'),
(465, 345, 1, 60, '2010-08-16 11:11:04'),
(466, 346, 1, 43, '2010-08-16 11:12:46'),
(467, 347, 1, 50, '2010-08-16 11:14:44'),
(468, 348, 1, 58, '2010-08-19 14:58:57'),
(469, 349, 1, 29, '2010-08-20 16:51:51'),
(470, 350, 1, 20, '2010-08-20 16:53:05'),
(471, 351, 1, 24, '2010-08-20 16:57:41'),
(472, 352, 1, 24, '2010-08-20 16:58:47'),
(473, 353, 1, 24, '2010-08-20 17:01:52'),
(474, 354, 1, 24, '2010-08-20 17:03:03'),
(475, 355, 1, 51, '2010-08-20 17:05:32'),
(476, 356, 1, 33, '2010-08-20 17:06:38'),
(477, 357, 1, 106, '2010-08-20 17:10:30'),
(478, 358, 1, 20, '2010-08-20 17:11:47'),
(479, 359, 1, 762248, '2010-09-16 14:24:08'),
(480, 360, 1, 808, '2010-08-26 08:54:24'),
(481, 361, 1, 776, '2010-08-26 08:55:47'),
(482, 362, 1, 1323, '2010-08-26 09:06:38'),
(483, 363, 1, 1137, '2010-08-26 09:05:20'),
(484, 364, 1, 11462, '2010-08-26 12:55:05'),
(485, 365, 1, 414, '2010-08-26 08:57:12'),
(486, 366, 1, 761505, '2010-09-16 14:23:35'),
(487, 361, 2, 639118, '2010-09-13 19:27:45'),
(488, 367, 1, 750305, '2010-09-16 14:25:05'),
(489, 368, 1, 21, '2010-08-31 15:22:37'),
(490, 369, 1, 24, '2010-08-31 15:23:41'),
(491, 370, 1, 66, '2010-08-31 15:28:38'),
(492, 371, 1, 22, '2010-08-31 15:29:41'),
(493, 372, 1, 20, '2010-08-31 15:34:39'),
(494, 373, 1, 15, '2010-08-31 15:35:45'),
(495, 374, 1, 25, '2010-08-31 15:37:56'),
(496, 375, 1, 21, '2010-08-31 15:38:55'),
(497, 376, 1, 71, '2010-08-31 15:41:10'),
(498, 377, 1, 14, '2010-08-31 15:41:51'),
(499, 378, 1, 19, '2010-08-31 15:42:50'),
(500, 379, 1, 18, '2010-08-31 15:43:38'),
(501, 380, 1, 23, '2010-08-31 15:44:38'),
(502, 381, 1, 71, '2010-09-01 11:04:52'),
(503, 382, 1, 15, '2010-09-01 11:05:38'),
(504, 383, 1, 409, '2010-09-01 13:46:57'),
(505, 383, 2, 737268, '2010-09-22 10:34:45'),
(506, 384, 1, 582729, '2010-09-29 12:11:56'),
(507, 385, 1, 51, '2010-09-13 15:12:09'),
(508, 386, 1, 160, '2010-09-13 19:17:52'),
(509, 387, 1, 112, '2010-09-13 19:18:08'),
(510, 387, 2, 140492, '2010-09-16 19:19:40'),
(511, 388, 1, 15, '2010-09-13 19:20:02'),
(512, 388, 2, 164, '2010-09-13 19:22:46'),
(513, 389, 1, 363863, '2010-09-14 08:35:06'),
(514, 390, 1, 357387, '2010-09-14 08:42:30'),
(515, 389, 2, 245, '2010-09-14 08:39:11'),
(516, 390, 2, 251, '2010-09-14 08:46:41'),
(517, 391, 1, 11700, '2010-09-17 13:50:14'),
(518, 391, 2, 277, '2010-09-17 13:54:51'),
(519, 392, 1, 74, '2010-09-17 13:57:21'),
(520, 392, 2, 199368, '2010-09-23 13:20:09'),
(521, 393, 1, 64531, '2010-09-22 15:49:08'),
(522, 394, 1, 5160, '2010-09-21 12:33:33'),
(523, 395, 1, 4377, '2010-09-21 12:32:14'),
(524, 396, 1, 61409, '2010-09-22 15:48:38'),
(525, 397, 1, 36709, '2010-09-22 07:54:26'),
(526, 398, 1, 3985, '2010-09-21 12:31:54'),
(527, 399, 1, 142370, '2010-09-24 11:55:38'),
(528, 400, 1, 0, '2010-09-21 12:28:41'),
(529, 400, 2, 0, '2010-09-21 12:30:21'),
(530, 398, 2, 51232, '2010-09-22 14:13:52'),
(531, 395, 2, 0, '2010-09-21 12:33:02'),
(532, 394, 2, 0, '2010-09-21 12:40:03'),
(533, 401, 1, 3489265, '2010-12-28 21:18:26'),
(534, 397, 2, 0, '2010-09-22 07:56:21'),
(535, 402, 1, 42291, '2010-09-23 11:56:55'),
(536, 403, 1, 3452832, '2010-12-28 21:21:02'),
(537, 404, 1, 7625, '2010-09-22 16:22:33'),
(538, 405, 1, 251, '2010-09-22 14:27:08'),
(539, 406, 1, 145, '2010-09-22 14:26:03'),
(540, 407, 1, 40, '2010-09-22 14:25:03'),
(541, 408, 1, 41458, '2010-09-23 11:56:24'),
(542, 409, 1, 59, '2010-09-22 14:29:28'),
(543, 393, 2, 1834015, '2010-11-12 17:16:03'),
(544, 319, 2, 124, '2010-09-22 16:02:51'),
(545, 404, 2, 35672, '2010-09-23 13:17:05'),
(546, 408, 2, 48152, '2010-09-24 13:18:56'),
(547, 402, 2, 185, '2010-09-23 12:02:08'),
(548, 410, 1, 292580, '2010-10-01 11:38:15'),
(549, 411, 1, 3409209, '2010-12-28 21:24:20'),
(550, 399, 2, 264068, '2010-10-01 17:16:46'),
(551, 412, 1, 0, '2010-09-24 12:31:41'),
(552, 412, 2, 0, '2010-09-24 12:32:39'),
(553, 413, 1, 418, '2010-09-24 13:06:58'),
(554, 414, 1, 876, '2010-09-24 13:14:36'),
(555, 415, 1, 451, '2010-09-24 13:07:31'),
(556, 416, 1, 929, '2010-09-24 13:15:29'),
(557, 417, 1, 8, '2010-09-24 13:00:08'),
(558, 413, 16, 2626469, '2010-12-08 09:41:27'),
(559, 415, 16, 2626456, '2010-12-08 09:41:47'),
(560, 414, 16, 2626048, '2010-12-08 09:42:04'),
(561, 416, 16, 2626056, '2010-12-08 09:43:05'),
(562, 418, 1, 244889, '2010-10-01 11:37:21'),
(563, 419, 1, 0, '2010-09-29 12:08:42'),
(564, 420, 1, 0, '2010-09-29 12:10:53'),
(565, 421, 1, 12, '2010-09-29 16:50:02'),
(566, 421, 2, 102, '2010-09-29 16:51:44'),
(567, 422, 1, 222, '2010-09-29 17:28:38'),
(568, 422, 2, 82, '2010-09-29 17:30:00'),
(569, 423, 1, 36, '2010-10-01 09:37:59'),
(570, 423, 2, 127, '2010-10-01 09:40:06'),
(571, 424, 1, 125402, '2010-10-05 15:31:45'),
(572, 425, 1, 126, '2010-10-01 11:27:29'),
(573, 426, 1, 10, '2010-10-01 11:27:11'),
(574, 426, 16, 2380512, '2010-12-08 09:42:23'),
(575, 425, 16, 2380820, '2010-12-08 09:47:49'),
(576, 427, 1, 11, '2010-10-01 11:33:16'),
(577, 427, 16, 2380169, '2010-12-08 09:42:45'),
(578, 428, 1, 32, '2010-10-01 11:36:12'),
(579, 429, 1, 1992, '2010-10-01 17:17:05'),
(580, 430, 1, 190301, '2010-10-07 13:39:55'),
(581, 429, 2, 188433, '2010-10-07 13:37:38'),
(582, 431, 1, 176, '2010-10-01 19:51:38'),
(583, 431, 2, 3090659, '2010-12-28 21:22:37'),
(584, 432, 1, 2315579, '2010-12-08 09:46:08'),
(585, 433, 1, 176, '2010-10-04 13:36:46'),
(586, 424, 2, 86674, '2010-10-07 13:36:19'),
(587, 434, 1, 8, '2010-10-05 15:34:10'),
(588, 434, 2, 214, '2010-10-05 15:37:44'),
(589, 435, 1, 96, '2010-10-07 13:02:19'),
(590, 436, 1, 10, '2010-10-07 13:41:39'),
(591, 436, 2, 112, '2010-10-07 13:43:31'),
(592, 437, 1, 12, '2010-10-07 13:45:12'),
(593, 437, 2, 70, '2010-10-07 13:46:22'),
(594, 438, 1, 691928, '2010-10-27 12:22:00'),
(595, 439, 1, 6, '2010-10-07 14:43:29'),
(596, 439, 2, 116, '2010-10-07 14:45:25'),
(597, 440, 1, 26408, '2010-10-14 12:45:34'),
(598, 440, 2, 60951, '2010-10-15 16:55:51'),
(599, 441, 1, 0, '2010-10-14 12:46:29'),
(600, 441, 2, 0, '2010-10-14 12:47:21'),
(601, 442, 1, 2619673, '2010-12-28 21:25:34'),
(602, 443, 1, 539863, '2010-11-03 11:15:55'),
(603, 444, 1, 288485, '2010-10-27 12:20:51'),
(604, 445, 1, 236222, '2010-10-27 12:20:04'),
(605, 446, 1, 236144, '2010-10-27 12:18:21'),
(606, 447, 1, 235126, '2010-10-27 12:17:42'),
(607, 448, 1, 2371819, '2010-12-28 21:34:29'),
(608, 449, 1, 141755, '2010-10-27 12:16:34'),
(609, 450, 1, 139174, '2010-10-27 12:15:41'),
(610, 451, 1, 0, '2010-10-27 12:33:34'),
(611, 452, 1, 451389, '2010-11-09 13:23:09'),
(612, 453, 1, 3179009, '2011-01-25 11:03:29'),
(613, 454, 1, 442, '2010-10-27 14:25:23'),
(614, 454, 2, 240571, '2010-11-03 11:14:54'),
(615, 455, 1, 17, '2010-11-09 13:18:02'),
(616, 456, 1, 22, '2010-11-09 13:19:42'),
(617, 457, 1, 78, '2010-11-09 13:21:46'),
(618, 458, 1, 60, '2010-11-09 13:29:18'),
(619, 458, 2, 38, '2010-11-09 13:29:56'),
(620, 459, 1, 152867, '2010-11-12 16:59:17'),
(621, 460, 1, 43, '2010-11-09 15:20:28'),
(622, 461, 1, 1041646, '2010-12-09 13:20:46'),
(623, 462, 1, 1041680, '2010-12-09 13:21:20'),
(624, 463, 1, 77, '2010-11-12 17:03:35'),
(625, 463, 2, 485012, '2010-11-26 13:47:07'),
(626, 464, 1, 7, '2010-11-12 17:06:07'),
(627, 464, 2, 2121565, '2011-01-12 10:25:33'),
(628, 465, 1, 8, '2010-11-12 17:12:06'),
(629, 465, 2, 932884, '2010-12-09 13:20:10'),
(630, 466, 1, 153, '2010-11-12 17:15:28'),
(631, 467, 1, 37, '2010-11-12 17:14:25'),
(632, 467, 2, 484534, '2010-11-26 13:49:59'),
(633, 466, 2, 484351, '2010-11-26 13:47:59'),
(634, 468, 1, 1289794, '2010-12-28 21:36:16'),
(635, 469, 1, 4254726, '2011-03-22 16:13:57'),
(636, 470, 1, 552032, '2010-12-08 09:45:04'),
(637, 471, 1, 1289524, '2010-12-28 21:38:39'),
(638, 472, 1, 1796369, '2011-01-12 10:27:57'),
(639, 473, 1, 18681, '2010-11-26 14:47:21'),
(640, 474, 1, 9, '2010-11-26 14:03:27'),
(641, 474, 2, 36, '2010-11-26 14:04:03'),
(642, 475, 1, 10, '2010-11-26 14:05:32'),
(643, 475, 2, 85, '2010-11-26 14:06:57'),
(644, 473, 2, 1632974, '2011-01-12 10:23:35'),
(645, 476, 1, 95, '2010-11-26 15:06:32'),
(646, 476, 2, 53, '2010-11-26 15:07:25'),
(647, 477, 1, 38, '2010-11-26 15:08:54'),
(648, 478, 1, 58, '2010-11-26 15:11:58'),
(649, 479, 1, 8, '2010-11-26 15:13:03'),
(650, 479, 2, 30, '2010-11-26 15:13:33'),
(651, 480, 1, 14, '2010-11-26 15:14:44'),
(652, 480, 2, 26, '2010-11-26 15:15:10'),
(653, 481, 1, 8, '2010-11-26 15:17:08'),
(654, 481, 2, 16, '2010-11-26 15:17:24'),
(655, 482, 1, 10, '2010-11-29 14:07:45'),
(656, 482, 2, 83, '2010-11-29 14:09:08'),
(657, 483, 1, 1067404, '2010-12-28 21:48:51'),
(658, 484, 1, 1067114, '2010-12-28 21:46:20'),
(659, 485, 1, 1066990, '2010-12-28 21:45:16'),
(660, 486, 1, 1066263, '2010-12-28 21:39:36'),
(661, 487, 1, 328707, '2010-12-08 09:48:54'),
(662, 488, 1, 307450, '2010-12-09 14:01:32'),
(663, 489, 1, 223794, '2010-12-09 13:22:08'),
(664, 490, 1, 904857, '2010-12-28 21:44:11'),
(665, 491, 1, 102908, '2010-12-09 13:24:37'),
(666, 492, 1, 159810, '2010-12-10 16:17:19'),
(667, 493, 1, 908615, '2011-01-03 12:33:17'),
(668, 494, 1, 738204, '2010-12-28 21:42:11'),
(669, 495, 1, 15072, '2010-12-09 14:00:40'),
(670, 461, 2, 1188194, '2011-01-12 10:24:00'),
(671, 462, 2, 1188181, '2011-01-12 10:24:21'),
(672, 489, 2, 24, '2010-12-09 13:22:32'),
(673, 491, 2, 1188022, '2011-01-12 10:24:59'),
(674, 496, 1, 46, '2010-12-09 13:38:11'),
(675, 496, 2, 35, '2010-12-09 13:38:46'),
(676, 497, 1, 7, '2010-12-09 13:40:28'),
(677, 497, 2, 35, '2010-12-09 13:41:03'),
(678, 498, 1, 10, '2010-12-09 13:45:40'),
(679, 498, 2, 150, '2010-12-09 13:48:10'),
(680, 495, 2, 1185982, '2011-01-12 10:27:02'),
(681, 488, 2, 35, '2010-12-09 14:02:07'),
(682, 499, 1, 22, '2010-12-09 14:37:53'),
(683, 499, 2, 52350, '2010-12-10 16:10:23'),
(684, 500, 1, 16, '2010-12-10 16:12:41'),
(685, 500, 2, 166, '2010-12-10 16:15:27'),
(686, 492, 2, 1131015, '2011-01-12 10:27:34'),
(687, 501, 1, 574923, '2011-01-12 10:28:18'),
(688, 442, 2, 144, '2010-12-28 21:27:58'),
(689, 502, 1, 169200, '2011-01-03 12:30:49'),
(690, 503, 1, 169200, '2011-01-03 12:34:47'),
(691, 504, 1, 2257736, '2011-03-02 14:08:56'),
(692, 505, 1, 169200, '2011-01-03 12:31:00'),
(693, 506, 1, 2963681, '2011-03-22 16:14:41'),
(694, 502, 2, 590400, '2011-01-19 12:04:36'),
(695, 493, 16, 5149970, '2011-05-27 09:32:50'),
(696, 507, 1, 0, '2011-01-03 12:51:17'),
(697, 508, 1, 14, '2011-01-04 13:12:23'),
(698, 508, 2, 5263, '2011-01-04 14:40:06'),
(699, 472, 2, 253923, '2011-01-19 12:04:05'),
(700, 501, 2, 705369, '2011-02-01 13:24:27'),
(701, 509, 1, 2449355, '2011-03-22 16:16:07'),
(702, 510, 1, 13, '2011-01-20 09:54:08'),
(703, 510, 2, 126, '2011-01-20 09:56:14'),
(704, 511, 1, 549165, '2011-02-04 14:32:45'),
(705, 453, 2, 5033104, '2011-06-15 16:08:33'),
(706, 512, 1, 41276, '2011-02-01 13:29:25'),
(707, 513, 1, 40538, '2011-02-01 13:24:54'),
(708, 513, 2, 209, '2011-02-01 13:28:23'),
(709, 511, 2, 1906336, '2011-03-30 17:05:01'),
(710, 514, 1, 506550, '2011-02-22 14:34:14'),
(711, 515, 1, 51709, '2011-02-11 09:42:31'),
(712, 516, 1, 51565, '2011-02-11 09:26:06'),
(713, 517, 1, 3778836, '2011-05-27 10:39:24'),
(714, 518, 1, 1097424, '2011-03-12 12:36:41'),
(715, 519, 1, 3776808, '2011-05-27 10:40:38'),
(716, 520, 1, 43127, '2011-02-11 09:40:28'),
(717, 521, 1, 1416576, '2011-03-22 16:16:34'),
(718, 522, 1, 558944, '2011-02-25 15:15:31'),
(719, 523, 1, 40437, '2011-02-11 09:38:47'),
(720, 524, 1, 566739, '2011-02-25 17:57:54'),
(721, 525, 1, 1093680, '2011-03-12 13:24:15'),
(722, 526, 1, 1710405, '2011-03-30 17:06:45'),
(723, 527, 1, 291, '2011-02-11 09:39:11'),
(724, 523, 2, 1368808, '2011-03-22 14:52:15'),
(725, 527, 7, 270214, '2011-02-18 16:42:45'),
(726, 515, 7, 667644, '2011-03-02 14:09:55'),
(727, 528, 1, 371297, '2011-02-22 14:33:17'),
(728, 529, 1, 3745545, '2011-05-27 15:51:29'),
(729, 530, 1, 3625023, '2011-05-27 15:59:28'),
(730, 531, 1, 174514, '2011-02-22 14:31:13'),
(731, 532, 1, 174497, '2011-02-22 14:33:36'),
(732, 533, 1, 159143, '2011-02-22 14:32:25'),
(733, 534, 1, 1345533, '2011-03-30 17:07:21'),
(734, 535, 1, 3433642, '2011-05-27 19:13:01'),
(735, 536, 1, 3437493, '2011-05-27 20:20:02'),
(736, 537, 1, 24, '2011-02-22 13:56:28'),
(737, 538, 1, 131, '2011-02-22 13:59:38'),
(738, 531, 2, 4027138, '2011-06-15 16:10:11'),
(739, 533, 2, 4027600, '2011-06-15 16:19:05'),
(740, 528, 2, 4026948, '2011-06-15 16:09:05'),
(741, 532, 2, 4027456, '2011-06-15 16:17:52'),
(742, 514, 2, 1297906, '2011-03-30 17:06:00'),
(743, 539, 1, 953711, '2011-03-22 16:17:46'),
(744, 540, 1, 115875, '2011-03-01 16:49:34'),
(745, 522, 2, 62, '2011-02-25 15:16:33'),
(746, 541, 1, 1154894, '2011-03-30 17:06:19'),
(747, 542, 1, 3229069, '2011-05-27 15:36:48'),
(748, 543, 1, 3238369, '2011-05-27 20:20:22'),
(749, 524, 2, 144, '2011-02-25 18:00:18'),
(750, 544, 1, 796145, '2011-03-22 16:18:50'),
(751, 545, 1, 3182761, '2011-05-27 20:21:50'),
(752, 546, 1, 1088907, '2011-03-30 17:08:51'),
(753, 547, 1, 3180066, '2011-05-27 20:25:49'),
(754, 548, 1, 589845, '2011-03-17 10:11:14'),
(755, 549, 1, 18358, '2011-03-01 16:44:56'),
(756, 550, 1, 87, '2011-03-01 16:47:43'),
(757, 550, 7, 37216, '2011-03-02 14:07:59'),
(758, 551, 1, 951731, '2011-03-30 17:10:14'),
(759, 552, 1, 951702, '2011-03-30 17:10:42'),
(760, 553, 1, 511179, '2011-03-22 16:19:47'),
(761, 554, 1, 2390400, '2011-05-16 12:41:23'),
(762, 555, 1, 2848529, '2011-05-30 15:29:59'),
(763, 556, 1, 2756675, '2011-05-27 19:15:48'),
(764, 557, 1, 2749349, '2011-05-27 20:30:27'),
(765, 558, 1, 330617, '2011-03-22 14:50:17'),
(766, 518, 2, 0, '2011-03-12 12:38:01'),
(767, 525, 2, 72, '2011-03-12 13:25:27'),
(768, 559, 1, 2710661, '2011-05-27 20:33:52'),
(769, 560, 1, 0, '2011-03-14 12:27:21'),
(770, 560, 2, 2680976, '2011-05-27 15:42:56'),
(771, 561, 1, 0, '2011-03-14 12:29:46'),
(772, 561, 2, 2681370, '2011-05-27 15:49:30'),
(773, 562, 1, 598736, '2011-03-30 17:09:39'),
(774, 563, 1, 38, '2011-03-17 10:16:06'),
(775, 564, 1, 89, '2011-03-17 11:41:05'),
(776, 564, 2, 16891386, '2012-07-05 11:44:11'),
(777, 565, 1, 109166, '2011-03-22 16:21:20'),
(778, 566, 1, 35, '2011-03-22 14:54:39'),
(779, 567, 1, 1928801, '2011-05-16 12:42:43'),
(780, 541, 2, 10, '2011-03-30 17:06:29'),
(781, 526, 2, 9, '2011-03-30 17:06:54'),
(782, 534, 2, 2729535, '2011-06-15 16:19:36'),
(783, 552, 2, 2729508, '2011-06-15 16:22:31'),
(784, 568, 1, 1605767, '2011-05-27 20:29:48'),
(785, 569, 1, 505946, '2011-05-30 15:32:26'),
(786, 570, 1, 1926657, '2011-05-30 15:34:17'),
(787, 570, 7, 163610, '2011-05-30 14:47:11'),
(788, 571, 1, 11, '2011-05-25 11:22:24'),
(789, 571, 7, 166377, '2011-05-30 15:35:21'),
(790, 493, 2, 224, '2011-05-27 09:36:34'),
(791, 517, 2, 54, '2011-05-27 10:40:18'),
(792, 519, 2, 14144, '2011-05-27 15:36:22'),
(793, 542, 2, 61, '2011-05-27 15:37:49'),
(794, 530, 2, 1046, '2011-05-27 16:16:54'),
(795, 535, 2, 138, '2011-05-27 19:15:19'),
(796, 556, 2, 69, '2011-05-27 19:16:57'),
(797, 543, 2, 58, '2011-05-27 20:21:20'),
(798, 545, 2, 104, '2011-05-27 20:23:34'),
(799, 547, 2, 94, '2011-05-27 20:27:23'),
(800, 568, 2, 526875, '2011-06-13 10:51:03'),
(801, 557, 2, 134, '2011-05-27 20:32:41'),
(802, 555, 2, 64, '2011-05-30 15:31:03'),
(803, 569, 21, 21503333, '2013-01-24 16:41:20'),
(804, 570, 21, 14288972, '2012-07-05 11:43:49'),
(805, 571, 21, 14288948, '2012-07-05 11:44:29'),
(806, 572, 1, 264032, '2011-05-30 17:44:07'),
(807, 572, 2, 159, '2011-05-30 17:46:46'),
(808, 573, 1, 8, '2011-05-30 17:49:08'),
(809, 573, 2, 249, '2011-05-30 17:53:17'),
(810, 574, 1, 15, '2011-05-30 18:07:23'),
(811, 574, 2, 97, '2011-05-30 18:09:00'),
(812, 575, 1, 14538825, '2012-07-12 15:46:37'),
(813, 576, 1, 14455309, '2012-07-10 18:36:12'),
(814, 577, 1, 14825095, '2012-07-20 13:21:03'),
(815, 578, 1, 60008, '2011-07-06 15:12:19'),
(816, 579, 1, 536, '2011-07-06 15:13:04'),
(817, 580, 1, 10409414, '2012-07-12 15:45:20'),
(818, 581, 1, 28, '2011-10-19 08:23:57'),
(819, 581, 2, 124, '2011-10-19 08:26:01'),
(820, 582, 1, 9506042, '2012-07-12 15:48:59'),
(821, 583, 1, 9505889, '2012-07-12 15:49:45'),
(822, 584, 1, 0, '2011-11-02 23:10:26'),
(823, 584, 2, 8884490, '2012-07-10 17:54:51'),
(824, 585, 1, 8470032, '2012-07-12 15:51:54'),
(825, 586, 1, 8097830, '2012-07-12 15:52:27'),
(826, 587, 1, 659, '2011-12-05 16:14:20'),
(827, 587, 2, 1221, '2011-12-05 16:34:41'),
(828, 588, 1, 16, '2012-01-17 11:57:21'),
(829, 588, 2, 159, '2012-01-17 12:01:46'),
(830, 589, 1, 0, '2012-01-17 12:04:40'),
(831, 589, 2, 0, '2012-01-17 12:08:36'),
(832, 590, 1, 0, '2012-01-17 12:31:20'),
(833, 590, 2, 0, '2012-01-17 12:36:09'),
(834, 591, 1, 0, '2012-01-17 12:38:13'),
(835, 591, 2, 0, '2012-01-17 12:45:37'),
(836, 592, 1, 6280058, '2012-07-12 15:56:39'),
(837, 593, 1, 6279688, '2012-07-12 15:53:05'),
(838, 594, 1, 6028306, '2012-07-24 17:31:46'),
(839, 595, 1, 5619342, '2012-07-12 15:55:42'),
(840, 596, 1, 52864, '2012-03-29 10:58:06'),
(841, 596, 27, 54, '2012-03-29 10:59:00'),
(842, 596, 2, 3654304, '2012-07-10 18:04:04'),
(843, 597, 1, 68, '2012-04-03 15:28:03'),
(844, 597, 2, 3486867, '2012-07-10 18:02:30'),
(845, 598, 1, 2076911, '2012-07-12 15:53:31'),
(846, 599, 1, 2076618, '2012-07-12 15:58:47'),
(847, 600, 1, 1999825, '2012-07-12 15:57:40'),
(848, 601, 1, 1535838, '2012-07-12 15:59:33'),
(849, 602, 1, 347945, '2012-07-05 12:04:43'),
(850, 603, 1, 405605, '2012-07-06 16:28:09'),
(851, 604, 1, 262800, '2012-07-05 12:13:22'),
(852, 605, 1, 262800, '2012-07-05 12:20:10'),
(853, 606, 1, 262378, '2012-07-05 11:52:58'),
(854, 607, 1, 0, '2012-06-27 23:13:28'),
(855, 607, 2, 0, '2012-06-27 23:19:46'),
(856, 608, 1, 262225, '2012-07-05 11:50:25'),
(857, 609, 1, 238384, '2012-07-05 11:54:31'),
(858, 610, 1, 238006, '2012-07-05 12:06:39'),
(859, 611, 1, 496799, '2012-07-12 15:56:11'),
(860, 612, 1, 237684, '2012-07-05 12:03:11'),
(861, 613, 1, 412292, '2012-07-10 18:33:14'),
(862, 614, 1, 411913, '2012-07-10 18:28:01'),
(863, 615, 1, 435212, '2012-07-16 21:57:56'),
(864, 616, 1, 219208, '2012-07-10 18:05:10'),
(865, 617, 1, 220405, '2012-07-10 18:26:14'),
(866, 618, 1, 155570, '2012-07-07 17:31:23'),
(867, 619, 1, 281536, '2012-07-12 15:58:07'),
(868, 620, 1, 196610, '2012-07-10 18:24:08'),
(869, 621, 1, 886, '2012-07-10 18:23:33'),
(870, 622, 1, 7, '2012-07-04 19:55:11'),
(871, 622, 2, 153, '2012-07-04 19:57:44'),
(872, 623, 1, 794, '2012-07-06 16:23:43'),
(873, 624, 1, 147668, '2012-07-10 18:12:42'),
(874, 625, 1, 144423, '2012-07-10 18:16:23'),
(875, 616, 2, 65, '2012-07-10 18:06:15'),
(876, 624, 2, 201, '2012-07-10 18:16:03'),
(877, 625, 2, 1968217, '2012-09-04 12:04:09'),
(878, 620, 2, 82, '2012-07-10 18:25:30'),
(879, 617, 2, 62, '2012-07-10 18:27:16'),
(880, 614, 2, 0, '2012-07-10 18:28:01'),
(881, 613, 2, 127, '2012-07-10 18:35:21'),
(882, 576, 2, 98, '2012-07-10 18:37:50'),
(883, 575, 2, 53, '2012-07-12 15:47:30'),
(884, 626, 1, 7, '2012-07-12 16:02:27'),
(885, 626, 2, 6993349, '2013-01-24 16:38:16'),
(886, 627, 1, 24, '2012-07-12 16:04:02'),
(887, 628, 1, 284134, '2012-07-20 12:49:16'),
(888, 629, 1, 8, '2012-07-12 16:04:40'),
(889, 629, 2, 1698816, '2012-08-29 17:58:16'),
(890, 630, 1, 284525, '2012-07-20 13:09:04'),
(891, 631, 1, 7, '2012-07-12 16:08:13'),
(892, 631, 2, 216, '2012-07-12 16:11:49'),
(893, 632, 1, 283655, '2012-07-20 13:01:48'),
(894, 633, 1, 360, '2012-07-13 15:52:12'),
(895, 634, 1, 176, '2012-07-13 15:51:59'),
(896, 635, 1, 68, '2012-07-13 15:51:44'),
(897, 635, 2, 82332, '2012-07-16 21:43:56'),
(898, 634, 2, 82480, '2012-07-16 21:46:39'),
(899, 633, 2, 82537, '2012-07-16 21:47:49'),
(900, 636, 1, 22813, '2012-07-16 21:54:13'),
(901, 637, 1, 8, '2012-07-16 21:37:14'),
(902, 637, 2, 278, '2012-07-16 21:41:52'),
(903, 636, 2, 172, '2012-07-16 21:57:05'),
(904, 615, 2, 124, '2012-07-16 22:02:27'),
(905, 594, 2, 58, '2012-07-24 17:32:44'),
(906, 638, 1, 990, '2012-07-24 18:04:49'),
(907, 639, 1, 73, '2012-08-01 08:35:44'),
(908, 640, 1, 115, '2012-08-01 08:38:57'),
(910, 642, 1, 4150, '2012-08-01 10:02:14'),
(911, 643, 1, 313707, '2012-08-01 09:59:22'),
(912, 644, 1, 97523, '2012-08-01 09:58:32'),
(913, 645, 1, 1204165, '2012-09-04 11:34:22'),
(914, 646, 1, 3026, '2012-08-01 09:56:45'),
(915, 647, 1, -68243, '2012-08-01 09:56:16'),
(916, 648, 1, 1160, '2012-08-01 09:55:59'),
(917, 649, 1, 1172, '2012-08-01 09:57:49'),
(918, 650, 1, 100, '2012-08-01 09:55:28'),
(919, 651, 1, 43, '2012-08-01 09:55:27'),
(920, 651, 2, 1202452, '2012-09-04 11:56:19'),
(921, 648, 2, 1202641, '2012-09-04 12:16:41'),
(922, 647, 2, 1202624, '2012-09-04 12:12:05'),
(923, 646, 2, 1202595, '2012-09-04 12:10:51'),
(924, 649, 2, 1202531, '2012-09-04 12:14:30'),
(925, 644, 2, 1202488, '2012-09-04 12:19:15'),
(926, 643, 2, 1202438, '2012-09-04 12:08:46'),
(927, 652, 1, 640, '2012-08-01 10:11:45'),
(928, 642, 2, 1202113, '2012-09-04 11:57:27'),
(929, 653, 1, 63, '2012-08-01 13:25:09'),
(930, 654, 1, 919894, '2012-08-29 18:02:43'),
(931, 655, 1, 943193, '2012-09-04 11:29:24'),
(932, 656, 1, 942945, '2012-09-04 11:27:15'),
(933, 657, 1, 26, '2012-08-13 14:00:42'),
(934, 657, 2, 604678, '2012-08-29 17:58:40'),
(935, 658, 1, 551902, '2012-08-29 18:03:03'),
(936, 659, 1, 2397, '2012-08-21 09:55:53'),
(937, 660, 1, 2583, '2012-08-21 10:01:33'),
(938, 656, 2, 102, '2012-09-04 11:28:57'),
(939, 655, 2, 95, '2012-09-04 11:30:59'),
(940, 661, 1, 5071132, '2013-01-24 16:38:52'),
(941, 662, 1, 0, '2012-09-04 12:41:32'),
(942, 663, 1, 0, '2012-09-04 12:42:21'),
(943, 664, 1, 0, '2012-09-04 12:43:31'),
(944, 665, 1, 0, '2012-09-04 12:50:55'),
(945, 666, 1, 0, '2012-09-04 12:45:08'),
(946, 667, 1, 1186201, '2012-10-08 09:30:01'),
(947, 668, 1, 0, '2012-09-04 12:49:13'),
(948, 669, 1, 0, '2012-09-04 12:52:38'),
(949, 670, 1, 0, '2012-09-04 12:54:47'),
(950, 671, 1, 0, '2012-09-04 12:57:35'),
(951, 672, 1, 1135, '2012-09-04 16:18:35'),
(952, 673, 1, 1219, '2012-09-04 16:30:54'),
(953, 674, 1, 1282, '2012-09-24 14:30:55'),
(954, 675, 1, 1350, '2012-09-24 14:36:41'),
(955, 676, 1, 1498, '2012-09-24 14:42:11'),
(956, 677, 1, 1530, '2012-09-24 14:45:24'),
(957, 678, 1, 2266, '2012-09-24 15:01:05'),
(958, 679, 1, 2591, '2012-09-24 15:07:59'),
(959, 680, 1, 1303, '2012-10-08 09:38:01'),
(960, 681, 1, 1554, '2012-10-08 09:45:42'),
(961, 682, 1, 1598, '2012-10-08 09:48:20'),
(962, 683, 1, 1589, '2012-10-08 09:50:40'),
(963, 684, 1, 107, '2012-10-08 11:52:02'),
(964, 685, 1, 832, '2012-10-15 13:43:38'),
(965, 686, 1, 905, '2012-10-15 13:46:28'),
(966, 687, 1, 1171, '2012-10-15 13:52:07'),
(967, 688, 1, 1264, '2012-10-15 14:00:19'),
(968, 689, 1, 1455, '2012-10-17 16:18:17'),
(969, 690, 1, 1999, '2012-10-17 16:35:08'),
(970, 691, 1, 1917, '2012-10-17 16:39:57'),
(971, 692, 1, 1888, '2012-10-17 16:41:49'),
(972, 693, 1, 1950, '2012-10-17 16:46:15'),
(973, 694, 1, 773, '2012-10-24 10:24:04'),
(974, 695, 1, 979, '2012-10-24 10:29:06'),
(975, 696, 1, 1099, '2012-10-24 10:31:56'),
(976, 697, 1, 3849, '2012-10-24 11:18:52'),
(977, 698, 1, 3988, '2012-10-24 11:23:03'),
(978, 699, 1, 4082, '2012-10-24 11:26:49'),
(979, 700, 1, 481043, '2012-11-08 10:12:46'),
(980, 701, 1, 481232, '2012-11-08 10:16:59'),
(981, 702, 1, 1224, '2012-11-08 10:19:13'),
(982, 703, 1, 1413, '2012-11-08 10:23:59'),
(983, 704, 1, 1369, '2012-11-08 10:26:08'),
(984, 705, 1, 1477, '2012-11-08 10:29:13'),
(985, 706, 1, 1492, '2012-11-08 10:31:23'),
(986, 707, 1, 1573, '2012-11-08 10:33:38'),
(987, 708, 1, 1637, '2012-11-08 10:35:39'),
(988, 709, 1, 2543970, '2013-01-24 16:39:30'),
(989, 710, 1, 2077483, '2013-01-24 16:39:59'),
(990, 711, 1, 70, '2013-01-24 16:45:26'),
(991, 712, 1, 702, '2013-02-15 15:33:55'),
(992, 713, 1, 1061, '2013-02-15 15:52:58'),
(993, 714, 1, 351, '2013-02-22 14:23:15'),
(994, 715, 1, 31, '2013-02-22 14:21:59'),
(995, 715, 2, 771, '2013-02-22 14:34:50'),
(996, 716, 1, 16, '2013-03-11 14:07:00'),
(997, 716, 2, 0, '2013-03-11 14:07:00'),
(998, 717, 1, 0, '2013-04-04 12:42:09'),
(999, 718, 1, 0, '2013-04-04 12:44:40'),
(1000, 719, 1, 0, '2013-04-04 12:48:10'),
(1001, 720, 1, 0, '2013-04-04 12:53:13'),
(1002, 721, 1, 20232083, '2014-10-25 19:01:23'),
(1003, 722, 1, 17132584, '2014-10-27 13:41:07'),
(1004, 723, 1, 17132813, '2014-10-27 14:06:53'),
(1005, 724, 1, 17214112, '2014-10-29 14:41:52'),
(1006, 725, 1, 17245317, '2014-10-30 11:21:57'),
(1007, 726, 1, 17440372, '2014-11-05 14:32:52'),
(1008, 727, 1, 0, '2013-05-15 20:26:04'),
(1009, 728, 1, 0, '2013-05-15 20:29:31'),
(1010, 729, 1, 0, '2013-05-15 20:35:07'),
(1011, 730, 1, 0, '2013-05-15 20:52:40'),
(1012, 731, 1, 0, '2013-05-15 20:54:40'),
(1013, 732, 1, 0, '2013-05-15 20:57:13'),
(1014, 733, 1, 0, '2013-05-15 21:00:53'),
(1015, 734, 1, 0, '2013-05-15 21:02:34'),
(1016, 735, 1, 0, '2013-05-15 21:04:44'),
(1017, 736, 1, 0, '2013-05-15 21:06:41'),
(1018, 737, 1, 0, '2013-05-15 21:09:09'),
(1019, 738, 1, 0, '2013-05-15 21:11:55'),
(1020, 739, 1, 0, '2013-05-15 21:14:05'),
(1021, 740, 1, 0, '2013-05-15 21:15:49'),
(1022, 741, 1, 0, '2013-05-15 21:17:15'),
(1023, 742, 1, 0, '2013-05-15 21:19:05'),
(1024, 743, 1, 0, '2013-05-15 21:21:27'),
(1025, 744, 1, 0, '2013-05-15 21:23:17'),
(1026, 745, 1, 471, '2013-05-22 11:03:57'),
(1027, 746, 1, 3774, '2013-05-22 12:44:27'),
(1028, 747, 1, 0, '2013-05-22 12:56:02'),
(1029, 748, 1, 832, '2013-07-23 09:16:10'),
(1030, 749, 1, 851, '2013-07-23 09:24:59'),
(1031, 750, 1, 1139, '2013-10-10 11:40:26'),
(1032, 751, 1, 186, '2014-01-20 10:50:34'),
(1033, 752, 1, 162, '2014-01-20 10:54:48'),
(1034, 753, 1, 0, '2014-02-11 16:39:58'),
(1035, 754, 1, 469, '2014-06-04 16:30:11'),
(1036, 755, 1, 187, '2014-06-04 16:34:59'),
(1037, 756, 1, 0, '2014-06-30 14:01:06'),
(1038, 757, 1, 108, '2014-09-10 10:03:23'),
(1039, 758, 1, 0, '2014-10-24 14:31:02'),
(1040, 759, 1, 150, '2014-10-25 14:37:18'),
(1041, 723, 2, 63, '2014-10-27 14:07:56'),
(1042, 724, 2, 0, '2014-10-29 14:41:52'),
(1043, 760, 1, 22, '2014-10-29 19:24:22'),
(1044, 761, 1, 93574, '2014-10-31 19:25:01'),
(1045, 725, 2, 0, '2014-10-30 11:21:57'),
(1046, 762, 1, 0, '2014-11-01 13:49:03'),
(1047, 726, 2, 0, '2014-11-05 14:32:52'),
(1048, 763, 1, 226779, '2014-11-12 14:56:50'),
(1049, 764, 1, 0, '2014-11-14 15:14:33'),
(1050, 765, 1, 865659, '2014-11-28 10:15:41'),
(1051, 766, 1, 183, '2014-11-17 16:46:20'),
(1052, 766, 2, 1737, '2014-11-17 17:15:17'),
(1053, 767, 1, 60245, '2014-11-27 11:02:17'),
(1054, 768, 1, 0, '2014-11-17 18:11:23'),
(1055, 769, 1, 0, '2014-11-17 18:13:15'),
(1056, 770, 1, 691333, '2014-12-09 14:07:01'),
(1057, 767, 2, 160010, '2014-11-27 16:35:12'),
(1058, 770, 2, 18864, '2014-11-18 16:29:52'),
(1059, 771, 1, 35, '2014-11-18 10:24:43'),
(1060, 771, 2, 18576, '2014-11-18 16:34:19'),
(1061, 772, 1, 46939, '2014-11-19 14:28:33'),
(1062, 773, 1, 12, '2014-11-18 12:55:24'),
(1063, 773, 2, 9763, '2014-11-18 16:38:07'),
(1066, 776, 1, 46939, '2014-11-27 11:02:19'),
(1067, 777, 1, 202340, '2014-11-26 17:25:53'),
(1068, 765, 2, 103378, '2014-11-28 10:17:26'),
(1069, 778, 1, 30569, '2014-11-21 17:16:48'),
(1070, 779, 1, 7984, '2014-11-19 13:20:08'),
(1071, 780, 1, 14, '2014-11-19 10:58:34'),
(1072, 780, 2, 239, '2014-11-19 11:02:33'),
(1073, 781, 1, 108, '2014-11-19 11:06:20'),
(1106, 791, 2, 4788, '2014-11-19 16:51:08'),
(1075, 779, 2, 94377, '2014-11-28 10:23:31'),
(1076, 783, 1, 0, '2014-11-19 13:43:30'),
(1077, 783, 2, 0, '2014-11-19 13:45:24'),
(1078, 784, 1, 0, '2014-11-19 13:49:24'),
(1079, 784, 2, 0, '2014-11-19 13:50:09'),
(1080, 785, 1, 0, '2014-11-19 13:55:55'),
(1081, 785, 2, 0, '2014-11-19 13:57:44'),
(1082, 786, 1, 10, '2014-11-19 14:01:14'),
(1083, 786, 2, 50, '2014-11-19 14:02:04'),
(1084, 787, 1, 67, '2014-11-19 14:03:08'),
(1085, 787, 2, 254, '2014-11-19 14:07:22'),
(1086, 788, 1, 44, '2014-11-19 14:05:14'),
(1087, 788, 2, 123, '2014-11-19 14:07:17'),
(1091, 791, 1, 4634, '2014-11-19 15:31:20'),
(1089, 790, 1, 13, '2014-11-19 14:11:38'),
(1090, 790, 2, 51, '2014-11-19 14:12:29'),
(1092, 792, 1, 9, '2014-11-19 14:14:51'),
(1093, 792, 2, 85, '2014-11-19 14:16:16'),
(1094, 793, 1, 30, '2014-11-19 14:17:25'),
(1095, 794, 1, 10, '2014-11-19 14:17:25'),
(1096, 793, 2, 224, '2014-11-19 14:21:09'),
(1097, 794, 2, 99, '2014-11-19 14:19:04'),
(1098, 795, 1, 10, '2014-11-19 14:20:50'),
(1099, 795, 2, 113, '2014-11-19 14:22:43'),
(1100, 796, 1, 9, '2014-11-19 14:24:02'),
(1101, 796, 2, 87, '2014-11-19 14:25:29'),
(1102, 772, 2, 71059, '2014-11-21 11:12:52'),
(1115, 804, 1, 220639, '2014-11-28 14:05:20'),
(1104, 798, 1, 183, '2014-11-19 14:38:32'),
(1105, 798, 2, 91810, '2014-11-21 18:08:42'),
(1107, 799, 1, 226438, '2014-11-26 17:27:48'),
(1108, 800, 1, 5103, '2014-11-21 10:42:19'),
(1109, 800, 2, 1688, '2014-11-21 11:10:27'),
(1110, 801, 1, 10800, '2014-11-24 13:26:26'),
(1114, 803, 2, 14410, '2014-11-21 16:28:32'),
(1112, 803, 1, 1464, '2014-11-21 11:28:22'),
(1116, 805, 1, 65481, '2014-11-24 16:03:55'),
(1117, 778, 7, 130446, '2014-11-26 11:30:54'),
(1119, 765, 27, 81331, '2014-11-25 09:42:19'),
(1120, 779, 3, 124791, '2014-11-26 10:47:01'),
(1121, 767, 27, 81203, '2014-11-25 09:41:13'),
(1122, 798, 3, 43479, '2014-11-24 10:13:21'),
(1123, 801, 7, 0, '2014-11-24 10:00:00'),
(1124, 807, 1, 100002, '2014-11-26 17:22:41'),
(1125, 808, 1, 147574, '2014-11-28 10:23:57'),
(1126, 777, 7, 64800, '2014-11-26 09:00:00'),
(1127, 801, 2, 5548, '2014-11-24 15:32:28'),
(1128, 809, 1, 81381, '2014-11-26 14:36:21'),
(1129, 810, 1, 81108, '2014-11-26 14:31:48'),
(1130, 811, 1, 81506, '2014-11-26 14:38:26'),
(1131, 812, 1, 81643, '2014-11-26 14:40:43'),
(1132, 813, 1, 81743, '2014-11-26 14:42:23'),
(1133, 814, 1, 81853, '2014-11-26 14:44:13'),
(1134, 815, 1, 81958, '2014-11-26 14:45:58'),
(1135, 816, 1, 82038, '2014-11-26 14:47:18'),
(1136, 817, 1, 82139, '2014-11-26 14:48:59'),
(1137, 818, 1, 82259, '2014-11-26 14:50:59'),
(1138, 819, 1, 82450, '2014-11-26 14:54:10'),
(1139, 820, 1, 82597, '2014-11-26 14:56:37'),
(1140, 821, 1, 83254, '2014-11-26 15:07:34'),
(1141, 822, 1, 83491, '2014-11-26 15:11:31'),
(1142, 823, 1, 83504, '2014-11-26 15:11:44'),
(1143, 824, 1, 83578, '2014-11-26 15:12:58'),
(1144, 825, 1, 83684, '2014-11-26 15:14:44'),
(1145, 826, 1, 224633, '2014-12-01 12:23:53'),
(1146, 827, 1, 140400, '2014-11-27 23:41:19'),
(1147, 828, 1, 140400, '2014-11-27 23:42:03'),
(1148, 829, 1, 140400, '2014-11-27 23:42:22'),
(1149, 830, 1, 224940, '2014-12-01 12:29:00'),
(1150, 831, 1, 224953, '2014-12-01 12:29:13'),
(1151, 832, 1, 224965, '2014-12-01 12:29:25'),
(1152, 833, 1, 224995, '2014-12-01 12:29:55'),
(1153, 834, 1, 225021, '2014-12-01 12:30:21'),
(1154, 835, 1, 225043, '2014-12-01 12:30:43'),
(1155, 836, 1, 225072, '2014-12-01 12:31:12'),
(1156, 837, 1, 225089, '2014-12-01 12:31:29'),
(1157, 838, 1, 225102, '2014-12-01 12:31:42'),
(1158, 839, 1, 224857, '2014-12-01 12:27:37'),
(1159, 840, 1, 224878, '2014-12-01 12:27:58'),
(1160, 841, 1, 224898, '2014-12-01 12:28:18'),
(1161, 842, 1, 224917, '2015-04-30 10:00:00'),
(1162, 843, 1, 225116, '2015-04-30 10:00:00'),
(1163, 844, 1, 225139, '2015-04-30 10:00:00'),
(1164, 845, 1, 225167, '2015-04-30 10:00:00'),
(1165, 846, 1, 225186, '2015-04-30 10:00:00'),
(1166, 847, 1, 87239, '2014-11-26 17:22:43'),
(1167, 805, 2, 72996, '2014-11-26 14:20:31'),
(1168, 767, 7, 39691, '2014-11-27 10:00:00'),
(1169, 765, 7, 748584, '2014-11-27 09:00:00'),
(1170, 776, 7, 0, '2014-11-26 09:00:00'),
(1171, 848, 1, 112, '2014-11-26 10:44:07'),
(1173, 848, 2, 14554, '2014-11-26 15:46:41'),
(1174, 779, 19, 77443, '2014-11-28 10:17:44'),
(1175, 850, 21, 706, '2014-11-26 11:29:38'),
(1176, 778, 2, 133, '2014-11-26 11:33:07'),
(1177, 851, 1, 79200, '2014-11-28 13:21:40'),
(1178, 810, 2, 192, '2014-11-26 14:35:00'),
(1179, 809, 2, 94, '2014-11-26 14:37:55'),
(1180, 811, 2, 108, '2014-11-26 14:40:14'),
(1181, 812, 2, 80, '2014-11-26 14:42:03'),
(1182, 813, 2, 92, '2014-11-26 14:43:55'),
(1183, 814, 2, 89, '2014-11-26 14:45:42'),
(1184, 815, 2, 60, '2014-11-26 14:46:58'),
(1185, 816, 2, 86, '2014-11-26 14:48:44'),
(1186, 817, 2, 99, '2014-11-26 14:50:38'),
(1187, 818, 2, 91, '2014-11-26 14:52:30'),
(1188, 819, 2, 129, '2014-11-26 14:56:19'),
(1189, 820, 2, 165, '2014-11-26 14:59:22'),
(1190, 821, 2, 55, '2014-11-26 15:08:29'),
(1191, 823, 2, 57, '2014-11-26 15:12:41'),
(1192, 824, 2, 58, '2014-11-26 15:13:56'),
(1193, 825, 2, 63, '2014-11-26 15:15:47'),
(1194, 848, 3, 63805, '2014-11-28 10:30:06'),
(1195, 852, 1, 70184, '2014-11-28 13:50:27'),
(1226, 852, 2, 0, '2014-11-28 13:51:11'),
(1197, 807, 2, 99, '2014-11-26 17:24:20'),
(1198, 847, 2, 78, '2014-11-26 17:24:01'),
(1199, 777, 2, 55, '2014-11-26 17:26:48'),
(1200, 799, 2, 53, '2014-11-26 17:28:41'),
(1201, 854, 1, 79085, '2014-12-01 14:21:48'),
(1202, 855, 7, -413, '0000-00-00 00:00:00'),
(1203, 855, 1, -5107, '2014-11-27 16:35:53'),
(1204, 808, 7, 3600, '2014-11-27 09:00:00'),
(1205, 856, 21, 275, '2014-11-27 09:15:13'),
(1206, 857, 1, 53350, '2014-11-28 13:29:00'),
(1207, 776, 2, 16334, '2014-11-27 16:34:33'),
(1208, 855, 2, 199, '2014-11-27 16:39:12'),
(1209, 826, 2, 84021, '2014-12-01 12:25:49'),
(1210, 827, 2, 84071, '2014-12-01 12:21:11'),
(1211, 828, 2, 84434, '2014-12-01 12:27:14'),
(1212, 829, 2, 2413823, '2015-04-10 14:30:23'),
(1213, 858, 1, 11, '2014-11-28 10:13:16'),
(1214, 858, 2, 10004, '2014-11-28 13:37:42'),
(1215, 808, 2, 119, '2014-11-28 10:25:56'),
(1216, 859, 1, 838, '2014-11-28 12:24:07'),
(1217, 859, 2, 44, '2014-11-28 12:24:51'),
(1218, 851, 2, 2550, '2014-11-28 14:42:30'),
(1219, 857, 2, 0, '2014-11-28 13:32:07'),
(1220, 860, 1, 0, '2014-11-28 13:46:03'),
(1221, 861, 1, 0, '2014-11-28 13:44:03'),
(1222, 862, 1, 0, '2014-11-28 13:43:45'),
(1223, 862, 2, 0, '2014-11-28 13:45:49'),
(1224, 861, 2, 0, '2014-11-28 13:44:54'),
(1225, 860, 2, 0, '2014-11-28 13:47:05'),
(1227, 852, 27, 546, '2014-11-28 14:09:06'),
(1228, 854, 7, 55789, '2014-12-01 09:30:00'),
(1229, 804, 12, 0, '2014-11-28 14:05:20'),
(1230, 851, 16, 342418, '2014-12-09 16:49:28'),
(1231, 863, 7, 3241, '2014-11-28 14:00:00'),
(1232, 863, 1, 4619, '2014-11-28 15:16:59');
INSERT INTO `tempo_status` (`ts_cod`, `ts_ocorrencia`, `ts_status`, `ts_tempo`, `ts_data`) VALUES
(1236, 839, 2, 2378167, '2015-04-10 14:36:07'),
(1234, 863, 2, 24, '2014-11-28 15:17:23'),
(1235, 863, 21, 62184, '2014-12-01 12:33:47'),
(1237, 840, 2, 2378183, '2015-04-10 14:36:23'),
(1238, 841, 2, 2378064, '2015-04-10 14:34:24'),
(1239, 842, 2, 2436989, '2015-04-14 16:56:29'),
(1240, 830, 2, 2377853, '2015-04-10 14:30:53'),
(1241, 831, 2, 2377873, '2015-04-10 14:31:13'),
(1242, 832, 2, 2377936, '2015-04-10 14:32:16'),
(1243, 833, 2, 2377989, '2015-04-10 14:33:09'),
(1244, 834, 2, 2378017, '2015-04-10 14:33:37'),
(1245, 835, 2, 2378038, '2015-04-10 14:33:58'),
(1246, 836, 2, 2378083, '2015-04-10 14:34:43'),
(1247, 837, 2, 2378104, '2015-04-10 14:35:04'),
(1248, 838, 2, 2378149, '2015-04-10 14:35:49'),
(1249, 843, 2, 2437034, '2015-04-14 16:57:14'),
(1250, 844, 2, 2437178, '2015-04-14 16:59:38'),
(1251, 845, 2, 2437200, '2015-04-14 17:00:16'),
(1252, 846, 2, 2437098, '2015-04-14 16:58:18'),
(1253, 865, 1, 1318, '2014-12-01 14:32:24'),
(1266, 870, 21, 1911540, '2015-03-17 14:01:52'),
(1255, 854, 21, 265421, '2014-12-09 14:05:29'),
(1267, 873, 1, 40, '2014-12-02 10:10:10'),
(1264, 871, 1, 23251, '2014-12-02 10:26:55'),
(1263, 870, 1, 451, '2014-12-01 16:02:52'),
(1259, 865, 2, 1855700, '2015-03-17 14:00:44'),
(1265, 872, 1, 21230, '2014-12-02 09:56:03'),
(1261, 869, 1, 983, '2014-12-01 14:56:35'),
(1262, 869, 21, 256354, '2014-12-09 11:09:09'),
(1268, 873, 2, 2468990, '2015-04-16 17:45:48'),
(1269, 874, 21, 315490, '2014-12-11 13:37:55'),
(1270, 875, 21, 80827, '2014-12-04 10:53:14'),
(1271, 871, 2, 313, '2014-12-04 11:34:13'),
(1272, 871, 21, 82925, '2014-12-04 11:29:52'),
(1273, 876, 7, 78965, '2014-12-04 11:05:20'),
(1274, 877, 1, 77139, '2014-12-04 10:57:25'),
(1275, 878, 21, 52327, '2014-12-04 11:32:07'),
(1276, 879, 21, 72348, '2014-12-16 14:33:12'),
(1277, 880, 1, 5324, '2014-12-03 12:54:42'),
(1278, 881, 1, 951, '2014-12-03 11:44:01'),
(1279, 881, 2, 36254, '2014-12-04 10:48:15'),
(1280, 880, 21, 21918, '2014-12-03 20:02:07'),
(1281, 882, 1, 224400, '2014-12-10 12:19:32'),
(1282, 883, 1, 224668, '2014-12-10 12:24:00'),
(1283, 880, 2, 0, '2014-12-03 20:06:45'),
(1284, 884, 1, 13, '2014-12-04 09:51:24'),
(1285, 884, 2, 67, '2014-12-04 09:52:31'),
(1286, 885, 1, 7, '2014-12-04 10:51:19'),
(1287, 885, 2, 85, '2014-12-04 10:52:44'),
(1288, 875, 2, 179, '2014-12-04 10:56:13'),
(1289, 877, 2, 2032, '2014-12-04 11:31:17'),
(1290, 886, 1, 544, '2014-12-04 11:10:31'),
(1291, 876, 1, 191788, '2014-12-10 12:21:48'),
(1292, 886, 2, 235, '2014-12-04 11:14:26'),
(1293, 877, 16, 5323, '2014-12-04 13:49:39'),
(1294, 878, 3, 44647, '2014-12-05 12:56:14'),
(1295, 879, 3, 361644, '2014-12-15 23:28:53'),
(1296, 887, 1, 662, '2014-12-04 16:26:37'),
(1297, 888, 1, 88448, '2014-12-08 09:53:56'),
(1298, 889, 1, 20, '2014-12-04 16:21:01'),
(1299, 889, 2, 105, '2014-12-04 16:22:46'),
(1300, 890, 1, 97, '2014-12-04 16:25:17'),
(1301, 891, 1, 8, '2014-12-04 16:23:48'),
(1302, 891, 2, 71, '2014-12-04 16:24:59'),
(1303, 890, 2, 18, '2014-12-04 16:25:35'),
(1304, 887, 2, 1691, '2014-12-04 16:54:48'),
(1305, 878, 2, 94, '2014-12-05 12:57:48'),
(1306, 892, 1, 16, '2014-12-05 18:15:22'),
(1307, 892, 2, 166, '2014-12-05 18:18:08'),
(1308, 888, 2, 60890, '2014-12-09 16:48:46'),
(1309, 893, 7, 464, '2014-12-09 09:26:53'),
(1310, 893, 1, 17334, '2014-12-09 15:15:47'),
(1311, 869, 2, 60, '2014-12-09 11:10:09'),
(1312, 894, 1, 114, '2014-12-09 11:14:39'),
(1313, 895, 1, 7, '2014-12-09 11:12:52'),
(1314, 895, 2, 90, '2014-12-09 11:14:22'),
(1315, 894, 2, 60, '2014-12-09 11:15:39'),
(1316, 896, 1, 7, '2014-12-09 11:16:55'),
(1317, 896, 2, 168, '2014-12-09 11:19:43'),
(1318, 897, 1, 6, '2014-12-09 11:22:08'),
(1319, 897, 2, 2066, '2014-12-09 11:56:34'),
(1320, 898, 1, 76, '2014-12-09 14:01:16'),
(1321, 898, 2, 139, '2014-12-09 14:03:35'),
(1322, 899, 1, 7, '2014-12-09 14:04:43'),
(1323, 899, 2, 110, '2014-12-09 14:06:33'),
(1324, 854, 12, 0, '2014-12-09 14:05:29'),
(1325, 770, 12, 0, '2014-12-09 14:07:01'),
(1326, 893, 2, 7719, '2014-12-09 17:24:26'),
(1327, 900, 1, 27402, '2014-12-10 11:20:02'),
(1328, 901, 1, 49, '2014-12-09 16:40:16'),
(1329, 901, 2, 101, '2014-12-09 16:41:57'),
(1330, 902, 1, 8, '2014-12-09 16:43:29'),
(1331, 902, 2, 140, '2014-12-09 16:45:49'),
(1332, 888, 12, 0, '2014-12-09 16:48:46'),
(1333, 851, 12, 0, '2014-12-09 16:49:28'),
(1334, 903, 1, 29896, '2014-12-10 14:45:46'),
(1335, 904, 1, 62147, '2014-12-12 14:03:55'),
(1336, 905, 1, 21, '2014-12-10 11:11:26'),
(1337, 905, 2, 71, '2014-12-10 11:12:37'),
(1338, 900, 2, 85198, '2014-12-12 13:18:59'),
(1339, 906, 21, 73, '2014-12-10 12:15:52'),
(1340, 906, 2, 197, '2014-12-10 12:19:09'),
(1341, 882, 2, 117, '2014-12-10 12:21:29'),
(1342, 876, 2, 104, '2014-12-10 12:23:32'),
(1343, 883, 2, 79, '2014-12-10 12:25:19'),
(1344, 904, 2, 59, '2014-12-10 14:45:28'),
(1345, 904, 7, 29672, '2014-12-11 11:00:00'),
(1346, 903, 2, 94, '2014-12-10 14:47:20'),
(1347, 907, 21, 53, '2014-12-10 15:13:28'),
(1348, 907, 2, 298, '2014-12-10 15:18:26'),
(1349, 908, 1, 33, '2014-12-10 19:17:33'),
(1350, 908, 2, 143, '2014-12-10 19:19:56'),
(1351, 874, 2, 0, '2014-12-11 13:40:11'),
(1352, 909, 1, 32078, '2014-12-12 13:16:03'),
(1353, 910, 7, 9, '2014-12-11 19:41:26'),
(1354, 910, 2, 54, '2014-12-11 19:42:20'),
(1355, 909, 2, 0, '2014-12-12 13:17:09'),
(1356, 911, 1, 0, '2014-12-12 13:25:20'),
(1357, 911, 2, 2876, '2014-12-12 14:47:56'),
(1358, 904, 12, 0, '2014-12-12 14:03:55'),
(1359, 912, 1, 51, '2014-12-12 14:06:08'),
(1360, 912, 2, 2576, '2014-12-12 14:49:04'),
(1361, 913, 7, 107, '2014-12-15 09:05:20'),
(1362, 913, 1, 2332, '2014-12-15 09:44:12'),
(1363, 913, 2, 2206, '2014-12-15 10:20:58'),
(1364, 914, 1, 0, '2014-12-15 23:24:45'),
(1365, 914, 2, 0, '2014-12-15 23:26:35'),
(1366, 915, 1, 14648, '2014-12-16 13:25:53'),
(1367, 915, 2, 0, '2014-12-16 13:28:11'),
(1368, 916, 1, 0, '2014-12-16 13:38:46'),
(1369, 917, 1, 0, '2014-12-16 13:38:31'),
(1370, 918, 1, 0, '2014-12-16 13:38:19'),
(1372, 920, 1, 0, '2014-12-16 13:38:06'),
(1373, 920, 2, 0, '2014-12-16 13:56:01'),
(1374, 918, 2, 0, '2014-12-16 13:51:30'),
(1375, 917, 2, 0, '2014-12-16 13:48:07'),
(1376, 916, 2, 0, '2014-12-16 13:43:16'),
(1377, 921, 1, 0, '2014-12-16 13:40:17'),
(1378, 921, 2, 0, '2014-12-16 13:58:48'),
(1379, 922, 1, 374, '2014-12-18 14:41:29'),
(1380, 923, 1, 514, '2014-12-18 14:43:49'),
(1381, 924, 1, 476, '2014-12-18 14:45:00'),
(1382, 925, 1, 117248, '2014-12-22 17:12:46'),
(1383, 926, 1, 404, '2014-12-18 14:47:19'),
(1384, 922, 2, 111, '2014-12-18 14:43:20'),
(1385, 923, 2, 50, '2014-12-18 14:44:39'),
(1386, 924, 2, 124, '2014-12-18 14:47:04'),
(1387, 926, 2, 185, '2014-12-18 14:50:24'),
(1388, 927, 1, 32, '2014-12-18 15:25:52'),
(1389, 927, 16, 305749, '2014-12-27 15:21:41'),
(1390, 928, 1, 5683, '2014-12-22 11:19:25'),
(1391, 929, 1, 225103, '2014-12-29 09:38:39'),
(1392, 928, 2, 6035, '2014-12-22 13:36:52'),
(1393, 925, 2, 30, '2014-12-22 17:13:16'),
(1507, 985, 1, 0, '2015-02-03 17:32:57'),
(1395, 931, 1, 14490, '2014-12-27 15:26:33'),
(1396, 927, 2, 119, '2014-12-27 15:23:40'),
(1397, 931, 21, 11503, '2014-12-29 09:38:16'),
(1544, 1000, 2, 7634, '2015-02-05 14:02:41'),
(1399, 931, 2, 8570, '2014-12-29 12:01:06'),
(1400, 929, 2, 75, '2014-12-29 09:39:54'),
(1401, 932, 1, 88, '2014-12-29 12:03:42'),
(1402, 933, 1, 8, '2014-12-29 12:02:22'),
(1403, 933, 2, 68, '2014-12-29 12:03:30'),
(1404, 932, 2, 140, '2014-12-29 12:06:02'),
(1405, 934, 1, 9, '2015-01-05 15:39:42'),
(1406, 934, 2, 50, '2015-01-05 15:40:32'),
(1407, 935, 1, 6, '2015-01-05 16:34:39'),
(1408, 935, 2, 37, '2015-01-05 16:35:16'),
(1409, 936, 21, 22, '2015-01-12 12:17:52'),
(1410, 936, 2, 169, '2015-01-12 12:20:41'),
(1412, 938, 7, 10, '2015-01-14 18:39:19'),
(1413, 938, 2, 147, '2015-01-14 18:41:46'),
(1414, 939, 21, 8, '2015-01-14 18:44:49'),
(1415, 939, 2, 119, '2015-01-14 18:46:48'),
(1416, 940, 21, 95, '2015-01-14 18:52:00'),
(1417, 940, 2, 230, '2015-01-14 18:55:50'),
(1418, 941, 21, 7, '2015-01-14 19:00:02'),
(1419, 941, 2, 322, '2015-01-14 19:05:24'),
(1420, 942, 1, 7, '2015-01-14 19:08:10'),
(1421, 942, 2, 116, '2015-01-14 19:10:06'),
(1422, 943, 21, 18000, '2015-01-15 13:50:05'),
(1423, 944, 1, 7, '2015-01-15 11:14:25'),
(1424, 944, 2, 85, '2015-01-15 11:15:50'),
(1425, 945, 1, 7, '2015-01-15 11:16:52'),
(1426, 945, 2, 244, '2015-01-15 11:20:56'),
(1427, 943, 2, 104, '2015-01-15 14:01:44'),
(1428, 946, 1, 6, '2015-01-15 14:02:59'),
(1429, 946, 2, 102, '2015-01-15 14:04:41'),
(1430, 947, 1, 17, '2015-01-15 16:10:25'),
(1431, 947, 2, 166, '2015-01-15 16:13:11'),
(1432, 948, 1, 15, '2015-01-16 12:05:07'),
(1433, 948, 2, 77773, '2015-01-19 15:41:20'),
(1434, 949, 1, 5, '2015-01-16 14:19:55'),
(1435, 949, 2, 65, '2015-01-16 14:21:00'),
(1436, 950, 1, 7, '2015-01-16 14:55:07'),
(1437, 950, 2, 117, '2015-01-16 14:57:04'),
(1438, 951, 1, 28275, '2015-01-19 10:39:20'),
(1439, 952, 1, 240, '2015-01-17 10:52:05'),
(1440, 953, 1, 159, '2015-01-17 10:50:44'),
(1441, 954, 1, 7, '2015-01-17 10:48:12'),
(1442, 954, 2, 84, '2015-01-17 10:49:36'),
(1443, 953, 2, 30, '2015-01-17 10:51:14'),
(1444, 952, 2, 76, '2015-01-17 10:53:21'),
(1445, 951, 2, 4515, '2015-01-19 11:54:35'),
(1446, 955, 1, 15, '2015-01-19 12:02:14'),
(1447, 955, 2, 162, '2015-01-19 12:04:56'),
(1448, 956, 1, 8, '2015-01-19 14:48:49'),
(1449, 956, 2, 9590, '2015-01-19 17:28:39'),
(1450, 957, 1, 144068, '2015-01-26 12:45:20'),
(1451, 957, 2, 87, '2015-01-26 12:46:47'),
(1452, 958, 1, 0, '2015-01-26 13:19:30'),
(1453, 958, 2, 6455, '2015-01-26 15:47:35'),
(1454, 959, 1, 12921, '2015-01-27 14:05:43'),
(1455, 960, 1, 7, '2015-01-27 10:22:28'),
(1456, 960, 2, 213, '2015-01-27 10:26:01'),
(1457, 961, 1, 0, '2015-01-27 13:46:55'),
(1458, 962, 1, 0, '2015-01-27 13:47:48'),
(1459, 963, 1, 0, '2015-01-27 13:49:48'),
(1460, 964, 1, 0, '2015-01-27 13:50:32'),
(1461, 965, 1, 0, '2015-01-27 13:48:56'),
(1462, 965, 2, 0, '2015-01-27 13:46:00'),
(1463, 961, 2, 278, '2015-01-27 14:04:38'),
(1464, 962, 2, 331, '2015-01-27 14:05:31'),
(1465, 965, 21, 39600, '2015-01-28 13:50:57'),
(1466, 963, 21, 39600, '2015-01-28 13:48:17'),
(1467, 964, 21, 39600, '2015-01-28 13:54:34'),
(1468, 966, 1, 0, '2015-01-27 13:54:51'),
(1469, 967, 1, 0, '2015-01-27 13:55:37'),
(1470, 968, 1, 0, '2015-01-27 13:56:59'),
(1471, 969, 1, 126, '2015-01-27 14:02:06'),
(1472, 969, 2, 85, '2015-01-27 14:03:31'),
(1473, 966, 2, 0, '2015-01-27 13:55:12'),
(1474, 967, 2, 0, '2015-01-27 13:55:56'),
(1475, 968, 2, 10, '2015-01-27 14:00:10'),
(1476, 959, 2, 6097, '2015-01-27 15:47:20'),
(1477, 970, 1, 7, '2015-01-27 14:08:58'),
(1478, 970, 2, 171, '2015-01-27 14:11:49'),
(1479, 959, 21, 33160, '2015-01-28 13:26:23'),
(1480, 963, 2, 0, '2015-01-28 13:49:15'),
(1481, 971, 1, 0, '2015-01-29 17:40:57'),
(1482, 972, 1, 0, '2015-01-29 17:41:12'),
(1483, 973, 1, 0, '2015-01-29 17:41:39'),
(1484, 974, 1, 0, '2015-01-29 17:41:51'),
(1485, 975, 1, 0, '2015-01-29 17:42:07'),
(1486, 976, 1, 0, '2015-01-29 17:42:23'),
(1487, 971, 2, 0, '2015-01-29 17:44:19'),
(1488, 972, 2, 0, '2015-01-29 17:46:47'),
(1489, 973, 2, 0, '2015-01-29 17:46:24'),
(1490, 974, 2, 0, '2015-01-29 17:45:43'),
(1491, 975, 2, 0, '2015-01-29 17:45:20'),
(1492, 976, 2, 0, '2015-01-29 17:44:53'),
(1493, 977, 1, 7771, '2015-02-02 16:57:25'),
(1494, 978, 1, 0, '2015-02-02 21:12:40'),
(1495, 979, 1, 0, '2015-02-02 21:09:10'),
(1496, 979, 2, 0, '2015-02-02 21:11:33'),
(1497, 978, 2, 0, '2015-02-02 21:14:35'),
(1498, 980, 1, 0, '2015-02-02 21:25:01'),
(1499, 981, 1, 0, '2015-02-02 21:22:54'),
(1500, 981, 2, 0, '2015-02-02 21:24:07'),
(1501, 980, 2, 0, '2015-02-02 21:26:22'),
(1502, 982, 1, 0, '2015-02-02 21:31:31'),
(1503, 983, 1, 0, '2015-02-02 21:28:46'),
(1504, 983, 2, 0, '2015-02-02 21:30:08'),
(1505, 982, 2, 0, '2015-02-02 21:36:05'),
(1508, 986, 1, 0, '2015-02-03 17:39:10'),
(1509, 987, 1, 0, '2015-02-03 17:23:10'),
(1510, 987, 2, 0, '2015-02-03 17:25:04'),
(1511, 985, 2, 0, '2015-02-03 17:37:55'),
(1512, 986, 2, 0, '2015-02-03 17:41:31'),
(1543, 1003, 21, 151200, '2015-02-13 01:16:06'),
(1514, 988, 1, 21, '2015-02-04 10:32:06'),
(1515, 989, 1, 35, '2015-02-04 10:32:21'),
(1516, 990, 1, 50, '2015-02-04 10:32:36'),
(1517, 991, 1, 74, '2015-02-04 10:33:00'),
(1518, 992, 1, 86, '2015-02-04 10:33:12'),
(1519, 993, 1, 102, '2015-02-04 10:33:28'),
(1520, 988, 2, 268, '2015-02-04 10:36:34'),
(1521, 989, 2, 331, '2015-02-04 10:37:52'),
(1522, 990, 2, 15, '2015-02-04 10:32:51'),
(1523, 991, 2, 280, '2015-02-04 10:37:40'),
(1524, 992, 2, 254, '2015-02-04 10:37:26'),
(1525, 993, 2, 224, '2015-02-04 10:37:12'),
(1526, 994, 1, 16, '2015-02-04 10:36:04'),
(1527, 994, 2, 46, '2015-02-04 10:36:50'),
(1528, 995, 1, 25, '2015-02-04 10:39:36'),
(1529, 996, 1, 52, '2015-02-04 10:40:03'),
(1530, 997, 1, 112, '2015-02-04 10:41:03'),
(1531, 998, 1, 126, '2015-02-04 10:41:17'),
(1532, 999, 1, 147, '2015-02-04 10:41:38'),
(1533, 995, 2, 11, '2015-02-04 10:39:47'),
(1534, 996, 2, 8, '2015-02-04 10:40:11'),
(1535, 997, 2, 59, '2015-02-04 10:42:02'),
(1536, 998, 2, 8, '2015-02-04 10:41:25'),
(1537, 999, 2, 8, '2015-02-04 10:41:46'),
(1538, 1000, 7, 142, '2015-02-04 15:04:11'),
(1539, 1000, 1, 13876, '2015-02-05 10:55:27'),
(1540, 1001, 1, 0, '2015-02-04 20:35:54'),
(1541, 1001, 2, 0, '2015-02-04 20:39:16'),
(1542, 1002, 1, 18656, '2015-02-05 15:10:56'),
(1545, 1004, 1, 17458, '2015-02-06 10:38:06'),
(1546, 1002, 2, 5014, '2015-02-05 16:34:30'),
(1547, 1005, 1, 34, '2015-02-06 10:37:23'),
(1548, 1005, 21, 77379, '2015-02-11 11:07:02'),
(1549, 1004, 31, 105714, '2015-02-12 12:22:28'),
(1550, 1006, 1, 648, '2015-02-08 19:42:55'),
(1551, 1006, 31, 10797, '2015-02-11 11:59:57'),
(1552, 1007, 1, 45043, '2015-02-11 10:50:47'),
(1647, 1053, 7, 84, '2015-03-09 11:55:08'),
(1554, 1009, 1, 448, '2015-02-10 14:31:57'),
(1555, 1010, 1, 204, '2015-02-10 14:27:53'),
(1556, 1011, 1, 9, '2015-02-10 14:24:38'),
(1557, 1011, 2, 115, '2015-02-10 14:26:33'),
(1558, 1010, 2, 210, '2015-02-10 14:31:23'),
(1559, 1009, 2, 152, '2015-02-10 14:34:29'),
(1645, 1052, 2, 44112, '2015-03-09 10:22:30'),
(1561, 1013, 1, 15400, '2015-02-11 14:16:40'),
(1562, 1014, 1, 392835, '2015-03-04 13:07:15'),
(1563, 1007, 2, 3506, '2015-02-11 11:49:13'),
(1564, 1005, 2, 2582, '2015-02-11 11:50:04'),
(1588, 1013, 2, 191, '2015-02-11 14:19:51'),
(1566, 1016, 1, 313, '2015-02-11 11:17:29'),
(1567, 1017, 1, 899, '2015-02-11 11:27:15'),
(1568, 1018, 1, 564, '2015-02-11 11:21:40'),
(1569, 1019, 1, 27, '2015-02-11 11:12:43'),
(1570, 1019, 2, 154, '2015-02-11 11:15:17'),
(1571, 1016, 2, 115, '2015-02-11 11:19:24'),
(1572, 1018, 2, 257, '2015-02-11 11:25:57'),
(1573, 1017, 2, 239, '2015-02-11 11:31:14'),
(1574, 1020, 1, 735, '2015-02-11 11:53:29'),
(1575, 1021, 1, 263, '2015-02-11 11:45:37'),
(1576, 1022, 1, 14, '2015-02-11 11:41:28'),
(1577, 1022, 2, 135, '2015-02-11 11:43:43'),
(1578, 1021, 2, 293, '2015-02-11 11:50:30'),
(1579, 1023, 1, 605, '2015-02-11 12:47:00'),
(1580, 1020, 2, 366, '2015-02-11 11:59:35'),
(1581, 1006, 2, 3, '2015-02-11 12:02:02'),
(1582, 1024, 1, 0, '2015-02-11 12:03:47'),
(1583, 1024, 2, 0, '2015-02-11 12:05:30'),
(1584, 1025, 1, 0, '2015-02-11 12:08:48'),
(1585, 1025, 2, 0, '2015-02-11 12:12:01'),
(1586, 1023, 2, 0, '2015-02-11 12:48:48'),
(1646, 1042, 2, 151, '2015-03-06 14:39:42'),
(1590, 1004, 21, 14400, '2015-02-13 01:15:51'),
(1591, 1026, 1, 66, '2015-02-12 13:01:06'),
(1592, 1004, 2, 0, '2015-02-13 01:18:04'),
(1593, 1003, 2, 0, '2015-02-13 01:19:11'),
(1594, 1027, 1, 7, '2015-02-19 14:22:38'),
(1595, 1027, 2, 65, '2015-02-19 14:23:43'),
(1596, 1028, 1, 5, '2015-02-20 13:59:39'),
(1597, 1028, 2, 38252, '2015-02-23 16:37:11'),
(1598, 1029, 21, 73, '2015-02-20 15:58:06'),
(1599, 1029, 2, 290, '2015-02-20 16:02:56'),
(1600, 1030, 1, 150, '2015-02-23 12:03:49'),
(1601, 1031, 1, 112, '2015-02-23 12:08:24'),
(1602, 1030, 2, 0, '2015-02-23 12:08:12'),
(1603, 1031, 2, 0, '2015-02-23 12:09:02'),
(1604, 1032, 1, 30, '2015-02-23 13:28:26'),
(1605, 1032, 2, 142, '2015-02-23 13:30:48'),
(1606, 1033, 1, 50698, '2015-02-26 10:33:19'),
(1607, 1034, 1, 133, '2015-02-24 14:54:34'),
(1608, 1035, 1, 313, '2015-02-24 14:57:34'),
(1609, 1036, 1, 9, '2015-02-24 14:52:30'),
(1610, 1036, 2, 50, '2015-02-24 14:53:20'),
(1611, 1034, 2, 97, '2015-02-24 14:56:11'),
(1612, 1035, 2, 202, '2015-02-24 15:00:56'),
(1613, 1037, 1, 57, '2015-02-24 15:03:27'),
(1644, 1052, 1, 6, '2015-03-05 13:07:18'),
(1615, 1037, 2, 164, '2015-02-24 15:06:11'),
(1643, 1044, 2, 81, '2015-03-04 14:36:51'),
(1617, 1039, 1, 5, '2015-02-25 10:15:20'),
(1618, 1039, 2, 22044, '2015-02-26 09:22:44'),
(1619, 1033, 2, 225, '2015-02-26 10:37:04'),
(1620, 1040, 1, 128, '2015-02-26 10:40:57'),
(1621, 1041, 1, 6, '2015-02-26 10:39:02'),
(1622, 1041, 2, 680, '2015-02-26 10:50:22'),
(1623, 1040, 2, 291, '2015-02-26 10:45:48'),
(1624, 1042, 1, 161037, '2015-03-06 14:37:11'),
(1625, 1043, 1, 95205, '2015-03-04 13:28:13'),
(1626, 1044, 1, 61072, '2015-03-04 14:35:30'),
(1627, 1014, 2, 178, '2015-03-04 13:10:13'),
(1628, 1045, 1, 210, '2015-03-04 13:16:03'),
(1629, 1046, 1, 7, '2015-03-04 13:12:40'),
(1630, 1046, 2, 121, '2015-03-04 13:14:41'),
(1631, 1045, 2, 101, '2015-03-04 13:17:44'),
(1632, 1047, 1, 7, '2015-03-04 13:19:19'),
(1633, 1047, 2, 106, '2015-03-04 13:21:05'),
(1634, 1048, 1, 10, '2015-03-04 13:23:06'),
(1635, 1048, 2, 76, '2015-03-04 13:24:22'),
(1636, 1049, 1, 6, '2015-03-04 13:26:02'),
(1637, 1049, 2, 78, '2015-03-04 13:27:20'),
(1638, 1043, 2, 109, '2015-03-04 13:30:02'),
(1639, 1050, 1, 126, '2015-03-04 13:33:45'),
(1640, 1051, 1, 8, '2015-03-04 13:31:47'),
(1641, 1051, 2, 61, '2015-03-04 13:32:48'),
(1642, 1050, 2, 84, '2015-03-04 13:35:09'),
(1648, 1053, 1, 16701, '2015-03-10 09:33:29'),
(1649, 1053, 2, 90, '2015-03-10 09:34:59'),
(1650, 1054, 1, 1315, '2015-03-10 09:59:56'),
(1651, 1055, 1, 1195, '2015-03-10 09:57:56'),
(1652, 1056, 1, 931, '2015-03-10 09:53:32'),
(1653, 1057, 1, 634, '2015-03-10 09:48:35'),
(1654, 1058, 1, 219, '2015-03-10 09:41:40'),
(1655, 1059, 1, 7, '2015-03-10 09:38:08'),
(1656, 1059, 2, 139, '2015-03-10 09:40:27'),
(1657, 1058, 2, 330, '2015-03-10 09:47:10'),
(1658, 1057, 2, 179, '2015-03-10 09:51:34'),
(1659, 1056, 2, 204, '2015-03-10 09:56:56'),
(1660, 1055, 2, 58, '2015-03-10 09:58:54'),
(1661, 1054, 2, 259, '2015-03-10 10:04:15'),
(1662, 1060, 1, 8, '2015-03-10 10:06:18'),
(1663, 1060, 2, 84, '2015-03-10 10:07:42'),
(1664, 1061, 1, 6, '2015-03-10 10:16:53'),
(1665, 1061, 2, 89, '2015-03-10 10:18:22'),
(1666, 1062, 1, 12, '2015-03-12 15:03:55'),
(1667, 1062, 2, 77, '2015-03-12 15:05:12'),
(1668, 1063, 1, 20, '2015-03-13 13:34:02'),
(1669, 1063, 2, 61, '2015-03-13 13:35:03'),
(1670, 1064, 1, 6, '2015-03-16 10:23:36'),
(1671, 1064, 2, 84, '2015-03-16 10:25:00'),
(1672, 1065, 1, 223, '2015-03-16 10:30:58'),
(1673, 1066, 1, 491, '2015-03-16 10:35:26'),
(1674, 1067, 1, 7, '2015-03-16 10:27:22'),
(1675, 1067, 2, 49, '2015-03-16 10:28:11'),
(1676, 1065, 2, 69, '2015-03-16 10:32:07'),
(1677, 1066, 2, 68, '2015-03-16 10:36:34'),
(1678, 1068, 1, 508, '2015-03-16 10:47:24'),
(1679, 1069, 1, 401, '2015-03-16 10:45:37'),
(1680, 1070, 1, 308, '2015-03-16 10:44:04'),
(1681, 1071, 1, 7, '2015-03-16 10:39:03'),
(1682, 1071, 2, 263, '2015-03-16 10:43:26'),
(1683, 1070, 2, 33, '2015-03-16 10:44:37'),
(1684, 1069, 2, 62, '2015-03-16 10:46:39'),
(1685, 1068, 2, 45, '2015-03-16 10:48:09'),
(1686, 1072, 1, 149, '2015-03-16 10:53:11'),
(1687, 1073, 1, 6, '2015-03-16 10:50:48'),
(1688, 1073, 2, 42, '2015-03-16 10:51:30'),
(1689, 1072, 2, 63, '2015-03-16 10:54:14'),
(1690, 1074, 1, 67, '2015-03-16 13:01:07'),
(1691, 1074, 2, 58, '2015-03-16 13:02:05'),
(1692, 1075, 1, 18, '2015-03-17 14:05:46'),
(1693, 1075, 2, 123, '2015-03-17 14:07:49'),
(1694, 1076, 1, 0, '2015-03-18 12:03:30'),
(1695, 1076, 2, 0, '2015-03-18 12:07:35'),
(1696, 1077, 1, 0, '2015-03-18 17:49:39'),
(1697, 1077, 2, 10657, '2015-03-19 11:57:37'),
(1698, 1078, 1, 87, '2015-03-19 14:57:42'),
(1699, 1079, 1, 138, '2015-03-19 14:58:33'),
(1700, 1080, 1, 38, '2015-03-19 14:56:53'),
(1701, 1080, 2, 222, '2015-03-19 15:00:35'),
(1702, 1078, 2, 157, '2015-03-19 15:00:19'),
(1703, 1079, 2, 137, '2015-03-19 15:00:50'),
(1704, 1081, 1, 6, '2015-03-30 10:25:42'),
(1705, 1081, 2, 35, '2015-03-30 10:26:17'),
(1706, 1082, 1, 6, '2015-03-30 10:28:47'),
(1707, 1082, 2, 247, '2015-03-30 10:32:54'),
(1708, 1083, 1, 128, '2015-03-30 10:36:20'),
(1709, 1084, 1, 9, '2015-03-30 10:34:21'),
(1710, 1084, 2, 56, '2015-03-30 10:35:17'),
(1711, 1083, 2, 48, '2015-03-30 10:37:08'),
(1712, 1085, 1, 14, '2015-03-30 10:40:09'),
(1713, 1085, 2, 43, '2015-03-30 10:40:52'),
(1714, 1086, 1, 8, '2015-03-30 10:42:20'),
(1715, 1086, 2, 60, '2015-03-30 10:43:20'),
(1716, 1087, 1, 7, '2015-03-30 10:46:03'),
(1717, 1087, 2, 60, '2015-03-30 10:47:03'),
(1718, 1088, 1, 0, '2015-03-31 12:27:52'),
(1719, 1088, 2, 0, '2015-03-31 12:28:19'),
(1720, 1089, 1, 6, '2015-04-01 11:01:43'),
(1721, 1089, 2, 87846, '2015-04-06 15:25:49'),
(1722, 1090, 1, 5, '2015-04-01 11:12:10'),
(1723, 1090, 2, 38, '2015-04-01 11:12:48'),
(1724, 1091, 1, 66930, '2015-04-09 14:52:07'),
(1725, 1092, 1, 580, '2015-04-09 11:42:56'),
(1726, 1093, 1, 243, '2015-04-09 11:37:19'),
(1727, 1094, 1, 10, '2015-04-09 11:33:26'),
(1728, 1094, 2, 130, '2015-04-09 11:35:36'),
(1729, 1093, 2, 199, '2015-04-09 11:40:38'),
(1730, 1092, 2, 760, '2015-04-09 11:55:36'),
(1731, 1095, 1, 0, '2015-04-09 12:30:55'),
(1732, 1096, 1, 0, '2015-04-09 12:22:44'),
(1733, 1096, 2, 0, '2015-04-09 12:29:17'),
(1734, 1095, 2, 0, '2015-04-09 12:31:54'),
(1735, 1097, 1, 0, '2015-04-09 12:42:38'),
(1736, 1098, 1, 0, '2015-04-09 12:38:34'),
(1737, 1099, 1, 0, '2015-04-09 12:36:36'),
(1738, 1100, 1, 0, '2015-04-09 12:33:45'),
(1739, 1100, 2, 0, '2015-04-09 12:35:36'),
(1740, 1099, 2, 0, '2015-04-09 12:38:01'),
(1741, 1098, 2, 0, '2015-04-09 12:39:02'),
(1742, 1097, 2, 0, '2015-04-09 12:43:37'),
(1743, 1101, 1, 0, '2015-04-09 12:44:56'),
(1744, 1101, 2, 0, '2015-04-09 12:45:46'),
(1745, 1102, 1, 0, '2015-04-09 12:54:37'),
(1746, 1103, 1, 0, '2015-04-09 12:51:38'),
(1747, 1104, 1, 0, '2015-04-09 12:47:44'),
(1748, 1104, 2, 0, '2015-04-09 12:48:54'),
(1749, 1103, 2, 0, '2015-04-09 12:52:11'),
(1750, 1102, 2, 0, '2015-04-09 12:57:00'),
(1751, 1105, 1, 7, '2015-04-09 13:09:09'),
(1752, 1105, 2, 125, '2015-04-09 13:11:14'),
(1753, 1091, 16, 317376, '2015-04-28 11:01:43'),
(1754, 1106, 1, 9, '2015-04-10 14:20:43'),
(1755, 1106, 2, 35, '2015-04-10 14:21:18'),
(1756, 1107, 1, 11, '2015-04-13 16:40:01'),
(1757, 1107, 2, 49, '2015-04-13 16:40:50'),
(1758, 1108, 1, 9, '2015-04-13 16:42:31'),
(1759, 1108, 2, 24, '2015-04-13 16:42:55'),
(1760, 1109, 1, 36, '2015-04-13 16:45:39'),
(1761, 1109, 2, 274950, '2015-05-13 09:48:59'),
(1762, 1110, 1, 10, '2015-04-13 16:51:57'),
(1763, 1110, 2, 17, '2015-04-13 16:52:14'),
(1764, 1111, 7, 100694, '2015-04-17 16:53:16'),
(1765, 1109, 7, 258050, '2015-04-28 10:40:11'),
(1766, 1112, 1, 0, '2015-04-14 12:54:09'),
(1767, 1112, 2, 0, '2015-04-14 12:57:17'),
(1768, 1113, 1, 9, '2015-04-14 13:01:11'),
(1769, 1113, 2, 98, '2015-04-14 13:02:49'),
(1770, 1114, 7, 7580, '2015-04-15 11:00:00'),
(1771, 842, 7, 281011, '2015-04-30 10:00:00'),
(1772, 843, 7, 280966, '2015-04-30 10:00:00'),
(1773, 846, 7, 280902, '2015-04-30 10:00:00'),
(1774, 844, 7, 280822, '2015-04-30 10:00:00'),
(1775, 845, 7, 280800, '2015-04-30 10:00:00'),
(1776, 1115, 1, 0, '2015-04-16 17:09:18'),
(1777, 1114, 1, 295200, '2015-04-30 17:27:55'),
(1778, 1116, 7, 0, '2015-04-16 17:35:40'),
(1779, 1116, 4, 0, '2015-04-09 14:00:00'),
(1780, 1116, 1, 0, '2015-04-09 14:00:00'),
(1781, 1117, 7, 0, '2015-04-16 17:43:24'),
(1782, 1117, 4, 0, '2015-04-15 19:30:00'),
(1783, 1117, 1, 0, '2015-04-15 19:30:00'),
(1784, 1118, 7, 0, '2015-04-16 17:51:25'),
(1785, 1118, 4, 0, '2015-04-14 16:30:00'),
(1786, 1118, 1, 0, '2015-04-14 16:30:00'),
(1787, 1111, 1, 431731, '2015-05-13 09:48:47'),
(1788, 1119, 1, 22, '2015-04-24 09:35:09'),
(1789, 1119, 2, 81, '2015-04-24 09:36:30'),
(1790, 1120, 1, 106, '2015-04-24 11:17:15'),
(1791, 1120, 2, 48153, '2015-04-28 10:39:48'),
(1792, 1121, 1, 20, '2015-04-27 13:16:42'),
(1793, 1121, 2, 55, '2015-04-27 13:17:37'),
(1794, 1122, 1, 5936, '2015-04-28 10:38:56'),
(1795, 1122, 2, 4142, '2015-04-28 11:47:58'),
(1796, 1123, 1, 15, '2015-04-28 10:50:58'),
(1797, 1123, 2, 42, '2015-04-28 10:51:40'),
(1798, 1124, 1, 25, '2015-04-30 15:39:21'),
(1799, 1124, 2, 54, '2015-04-30 15:40:15'),
(1800, 1114, 2, 0, '2015-04-30 17:28:12'),
(1801, 1125, 1, 0, '2015-04-30 17:31:11'),
(1802, 1125, 2, 0, '2015-04-30 17:31:28'),
(1803, 1126, 1, 0, '2015-04-30 17:34:09'),
(1804, 1126, 2, 0, '2015-04-30 17:40:22'),
(1805, 1126, 3, 0, '2015-04-30 17:40:22'),
(1806, 1127, 1, 0, '2015-04-30 17:44:06'),
(1807, 1127, 2, 0, '2015-04-30 17:44:24'),
(1808, 1128, 1, 7, '2015-05-05 13:59:25'),
(1809, 1128, 2, 50, '2015-05-05 14:00:15'),
(1810, 1129, 1, 0, '2015-05-05 17:11:44'),
(1811, 1129, 2, 101666, '2015-05-12 09:14:26'),
(1812, 1130, 1, 7, '2015-05-15 10:34:04'),
(1813, 1130, 2, 58, '2015-05-15 10:35:02'),
(1814, 1131, 1, 0, '2015-05-15 12:54:37'),
(1815, 1131, 2, 0, '2015-05-15 12:56:00'),
(1816, 1132, 1, 171, '2015-05-15 13:34:56'),
(1817, 1133, 1, 269, '2015-05-15 13:36:34'),
(1818, 1134, 1, 388, '2015-05-15 13:38:33'),
(1819, 1135, 1, 7315, '2015-05-15 15:34:00'),
(1820, 1136, 1, 7527, '2015-05-15 15:37:32'),
(1821, 1137, 1, 7826, '2015-05-15 15:42:31'),
(1822, 1138, 1, 8063, '2015-05-15 15:46:28'),
(1823, 1139, 1, 23, '2015-05-15 13:32:28'),
(1824, 1139, 2, 56, '2015-05-15 13:33:24'),
(1825, 1132, 2, 28, '2015-05-15 13:35:24'),
(1826, 1133, 2, 40, '2015-05-15 13:37:14'),
(1827, 1134, 2, 38, '2015-05-15 13:39:11'),
(1828, 1140, 1, 101, '2015-05-15 14:01:09'),
(1829, 1141, 1, 939, '2015-05-15 14:15:07'),
(1830, 1142, 1, 1120, '2015-05-15 14:18:08'),
(1831, 1143, 1, 23, '2015-05-15 13:59:51'),
(1832, 1143, 2, 2801, '2015-05-15 14:46:32'),
(1833, 1140, 2, 60, '2015-05-15 14:02:09'),
(1834, 1141, 2, 86, '2015-05-15 14:16:33'),
(1835, 1142, 2, 32, '2015-05-15 14:18:40'),
(1836, 1144, 1, 18, '2015-05-15 14:48:45'),
(1837, 1144, 2, 38, '2015-05-15 14:49:23'),
(1844, 1149, 1, 7, '2015-05-15 15:08:27'),
(1845, 1149, 2, 45, '2015-05-15 15:09:12'),
(1840, 1147, 1, 77, '2015-05-15 14:52:49'),
(1841, 1148, 1, 6, '2015-05-15 14:51:38'),
(1842, 1148, 2, 35, '2015-05-15 14:52:13'),
(1843, 1147, 2, 54, '2015-05-15 14:53:43'),
(1846, 1135, 2, 128, '2015-05-15 15:36:08'),
(1847, 1136, 2, 29, '2015-05-15 15:38:01'),
(1848, 1137, 2, 167, '2015-05-15 15:45:18'),
(1849, 1138, 3, 0, '2015-05-15 15:46:28'),
(1850, 1150, 1, 0, '2015-05-15 17:27:12'),
(1851, 1150, 2, 0, '2015-05-15 17:28:17'),
(1852, 1151, 1, 9, '2015-05-18 15:34:48'),
(1853, 1151, 2, 2022, '2015-05-18 16:08:30'),
(1854, 1152, 1, 912, '2015-05-18 16:25:42'),
(1855, 1152, 2, 216, '2015-05-18 16:29:18'),
(1856, 1153, 1, 21, '2015-05-18 16:30:22'),
(1857, 1153, 2, 43, '2015-05-18 16:31:05'),
(1858, 1154, 7, 7200, '2015-05-19 11:00:00'),
(1859, 1154, 1, 99174, '2015-05-25 10:32:54'),
(1860, 1155, 1, 360, '2015-05-25 10:31:25'),
(1861, 1156, 1, 8, '2015-05-25 10:25:33'),
(1862, 1156, 2, 296, '2015-05-25 10:30:29'),
(1863, 1155, 2, 73, '2015-05-25 10:32:38'),
(1864, 1154, 2, 131, '2015-05-25 10:35:05'),
(1865, 1157, 1, 13, '2015-05-25 10:37:22'),
(1866, 1157, 2, 72, '2015-05-25 10:38:34'),
(1867, 1158, 1, 6, '2015-05-25 10:42:03'),
(1868, 1158, 2, 128, '2015-05-25 10:44:11'),
(1869, 1159, 1, 232, '2015-05-25 10:49:16'),
(1870, 1160, 1, 180, '2015-05-25 10:48:24'),
(1871, 1161, 1, 134, '2015-05-25 10:47:38'),
(1872, 1162, 1, 94, '2015-05-25 10:46:58'),
(1873, 1163, 1, 7, '2015-05-25 10:45:31'),
(1874, 1163, 2, 74, '2015-05-25 10:46:45'),
(1875, 1162, 2, 30, '2015-05-25 10:47:28'),
(1876, 1161, 2, 34, '2015-05-25 10:48:12'),
(1877, 1160, 2, 42, '2015-05-25 10:49:06'),
(1878, 1159, 2, 36, '2015-05-25 10:49:52'),
(1879, 1164, 1, 0, '2015-05-26 12:37:14'),
(1880, 1164, 2, 0, '2015-05-26 12:38:42'),
(1881, 1165, 1, 453, '2015-06-02 11:00:44'),
(1882, 1166, 1, 7, '2015-06-02 10:53:19'),
(1883, 1166, 2, 406, '2015-06-02 11:00:05'),
(1884, 1165, 2, 69, '2015-06-02 11:01:53'),
(1885, 1167, 1, 689, '2015-06-02 11:16:02'),
(1886, 1168, 1, 531, '2015-06-02 11:13:24'),
(1887, 1169, 1, 341, '2015-06-02 11:10:14'),
(1888, 1170, 1, 6, '2015-06-02 11:04:39'),
(1889, 1170, 2, 241, '2015-06-02 11:08:40'),
(1890, 1169, 2, 171, '2015-06-02 11:13:05'),
(1891, 1168, 2, 113, '2015-06-02 11:15:17'),
(1892, 1167, 2, 45, '2015-06-02 11:16:47'),
(1893, 1171, 1, 7, '2015-06-02 11:18:49'),
(1894, 1171, 2, 52, '2015-06-02 11:19:41'),
(1895, 1172, 1, 147, '2015-06-02 11:23:33'),
(1896, 1173, 1, 6, '2015-06-02 11:21:12'),
(1897, 1173, 2, 76, '2015-06-02 11:22:28'),
(1898, 1172, 2, 45, '2015-06-02 11:24:18'),
(1899, 1174, 1, 5, '2015-06-02 11:26:32'),
(1900, 1174, 2, 1344, '2015-06-02 11:48:56'),
(1901, 1174, 16, 0, '2015-06-02 11:48:56'),
(1902, 1175, 1, 0, '2015-06-10 11:34:20'),
(1903, 1176, 1, 0, '2015-06-11 16:56:54'),
(1904, 1177, 1, 0, '2015-06-17 10:19:02'),
(1905, 1178, 7, 312, '2015-07-10 10:48:49'),
(1906, 1178, 2, 74, '2015-07-10 10:50:03'),
(1907, 1179, 1, 18, '2015-08-06 14:01:07'),
(1908, 1179, 2, 104, '2015-08-06 14:02:51'),
(1909, 1180, 1, 8, '2015-08-06 14:04:59'),
(1910, 1180, 2, 282, '2015-08-06 14:09:41'),
(1911, 1181, 7, 0, '2015-08-14 12:14:02'),
(1912, 1181, 1, 0, '2015-08-14 12:14:02'),
(1913, 1182, 7, 13, '2015-08-17 10:52:41'),
(1914, 1182, 2, 283, '2015-08-17 10:57:24'),
(1915, 1183, 1, 9, '2015-08-18 15:11:46'),
(1916, 1183, 2, 702, '2015-08-18 15:23:28'),
(1917, 1184, 7, 0, '2015-09-14 17:22:11'),
(1918, 1184, 1, 0, '2015-09-14 17:22:11'),
(1919, 1185, 7, 335, '2015-09-16 13:50:11'),
(1920, 1185, 1, 0, '2015-09-16 13:50:11'),
(1921, 1186, 1, 291, '2016-11-07 16:24:11'),
(1922, 1187, 1, 209239, '2016-11-18 10:27:28'),
(1923, 1188, 1, 226, '2016-11-07 16:24:52'),
(1924, 1188, 2, 209106, '2016-11-18 10:29:58'),
(1925, 1189, 7, 25261, '2016-11-19 10:24:23'),
(1926, 1189, 1, 117, '2016-11-19 10:24:23'),
(1927, 1187, 3, 0, '2016-11-18 10:27:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_equip`
--

CREATE TABLE IF NOT EXISTS `tipo_equip` (
`tipo_cod` int(11) NOT NULL,
  `tipo_nome` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='Tabela de Tipos de Equipamentos de informÃ¡tica';

--
-- Extraindo dados da tabela `tipo_equip`
--

INSERT INTO `tipo_equip` (`tipo_cod`, `tipo_nome`) VALUES
(1, 'Computador PC'),
(2, 'Notebook'),
(3, 'Impressora'),
(4, 'Scanner'),
(6, 'Zip Drive'),
(7, 'Switch'),
(8, 'HUB'),
(9, 'Gravador externo de CD'),
(10, 'Placa externa de captura'),
(11, 'No Break'),
(12, 'Servidor SCSI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_garantia`
--

CREATE TABLE IF NOT EXISTS `tipo_garantia` (
`tipo_garant_cod` int(4) NOT NULL,
  `tipo_garant_nome` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabela de tipos de garantias de equipamentos';

--
-- Extraindo dados da tabela `tipo_garantia`
--

INSERT INTO `tipo_garantia` (`tipo_garant_cod`, `tipo_garant_nome`) VALUES
(1, 'BalcÃ£o'),
(2, 'On site');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_imp`
--

CREATE TABLE IF NOT EXISTS `tipo_imp` (
`tipo_imp_cod` int(11) NOT NULL,
  `tipo_imp_nome` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Tabela de tipos de impressoras';

--
-- Extraindo dados da tabela `tipo_imp`
--

INSERT INTO `tipo_imp` (`tipo_imp_cod`, `tipo_imp_nome`) VALUES
(1, 'Matricial'),
(2, 'Jato de tinta'),
(3, 'Laser'),
(4, 'Multifuncional'),
(5, 'Copiadora'),
(6, 'Matricial cupom nÃ£o fiscal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_item`
--

CREATE TABLE IF NOT EXISTS `tipo_item` (
`tipo_it_cod` int(4) NOT NULL,
  `tipo_it_desc` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tipos de itens - hw ou sw';

--
-- Extraindo dados da tabela `tipo_item`
--

INSERT INTO `tipo_item` (`tipo_it_cod`, `tipo_it_desc`) VALUES
(1, 'HARDWARE'),
(2, 'SOFTWARE'),
(3, 'HARDWARE E SOFTWARE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `uprefs`
--

CREATE TABLE IF NOT EXISTS `uprefs` (
  `upref_uid` int(4) NOT NULL,
  `upref_lang` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de preferencias diversas dos usuarios';

--
-- Extraindo dados da tabela `uprefs`
--

INSERT INTO `uprefs` (`upref_uid`, `upref_lang`) VALUES
(5, 'pt_BR.php'),
(28, 'pt_BR.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`user_id` int(4) NOT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `nome` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `data_inc` date DEFAULT NULL,
  `data_admis` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fone` varchar(10) DEFAULT NULL,
  `nivel` char(2) DEFAULT NULL,
  `AREA` char(3) DEFAULT 'ALL',
  `user_admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1 COMMENT='Tabela de operadores do sistema';

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `login`, `nome`, `password`, `data_inc`, `data_admis`, `email`, `fone`, `nivel`, `AREA`, `user_admin`) VALUES
(1, 'admin', 'Administrador do Sistema', '525cfced63581c742db64e0e978ea0f0', '2009-11-23', '2009-11-23', 'teste@ocomon.com.br', '11111111', '1', '5', 1),
(63, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2016-11-07', '2016-11-07', 'user@teste.com', '111', '1', '3', 0),
(64, 'cliente', 'cliente', '4983a0ab83ed86e0e7213c8783940193', '2016-11-07', '2016-11-07', 'cliente@teste.com', '111', '3', '4', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_areas`
--

CREATE TABLE IF NOT EXISTS `usuarios_areas` (
`uarea_cod` int(4) NOT NULL,
  `uarea_uid` int(4) NOT NULL DEFAULT '0',
  `uarea_sid` varchar(4) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='Tabela de areas que o usuario pertence';

--
-- Extraindo dados da tabela `usuarios_areas`
--

INSERT INTO `usuarios_areas` (`uarea_cod`, `uarea_uid`, `uarea_sid`) VALUES
(17, 22, '3'),
(19, 1, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `uthemes`
--

CREATE TABLE IF NOT EXISTS `uthemes` (
`uth_id` int(4) NOT NULL,
  `uth_uid` int(4) NOT NULL,
  `uth_thid` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de Temas por usuario';

-- --------------------------------------------------------

--
-- Estrutura da tabela `utmp_usuarios`
--

CREATE TABLE IF NOT EXISTS `utmp_usuarios` (
`utmp_cod` int(4) NOT NULL,
  `utmp_login` varchar(100) NOT NULL,
  `utmp_nome` varchar(40) NOT NULL DEFAULT '',
  `utmp_email` varchar(40) NOT NULL DEFAULT '',
  `utmp_passwd` varchar(40) NOT NULL DEFAULT '',
  `utmp_rand` varchar(40) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='Tabela de transiÃ§Ã£o para cadastro de usuÃ¡rios';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areaxarea_abrechamado`
--
ALTER TABLE `areaxarea_abrechamado`
 ADD PRIMARY KEY (`area`,`area_abrechamado`), ADD KEY `fk_area_abrechamado` (`area_abrechamado`);

--
-- Indexes for table `assentamentos`
--
ALTER TABLE `assentamentos`
 ADD PRIMARY KEY (`numero`), ADD KEY `ocorrencia` (`ocorrencia`), ADD KEY `tipo_assentamento` (`tipo_assentamento`);

--
-- Indexes for table `assistencia`
--
ALTER TABLE `assistencia`
 ADD PRIMARY KEY (`assist_cod`);

--
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
 ADD PRIMARY KEY (`aviso_id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`cat_cod`);

--
-- Indexes for table `categoriaxproblema_sistemas`
--
ALTER TABLE `categoriaxproblema_sistemas`
 ADD PRIMARY KEY (`prob_id`), ADD KEY `ctps_id` (`ctps_id`,`prob_id`);

--
-- Indexes for table `cat_problema_sistemas`
--
ALTER TABLE `cat_problema_sistemas`
 ADD PRIMARY KEY (`ctps_id`);

--
-- Indexes for table `ccusto`
--
ALTER TABLE `ccusto`
 ADD PRIMARY KEY (`codigo`), ADD KEY `codccusto` (`codccusto`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`conf_cod`), ADD KEY `conf_formatBar` (`conf_formatBar`), ADD KEY `conf_prob_tipo_1` (`conf_prob_tipo_1`,`conf_prob_tipo_2`,`conf_prob_tipo_3`), ADD KEY `conf_formatBar_2` (`conf_formatBar`);

--
-- Indexes for table `configusercall`
--
ALTER TABLE `configusercall`
 ADD PRIMARY KEY (`conf_cod`), ADD KEY `conf_opentoarea` (`conf_opentoarea`), ADD KEY `conf_nivel` (`conf_custom_areas`), ADD KEY `conf_ownarea` (`conf_ownarea`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
 ADD PRIMARY KEY (`contact_id`), ADD UNIQUE KEY `contact_login` (`contact_login`,`contact_email`);

--
-- Indexes for table `contatos_email`
--
ALTER TABLE `contatos_email`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contatos_tel`
--
ALTER TABLE `contatos_tel`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `ddns`
--
ALTER TABLE `ddns`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_time`
--
ALTER TABLE `doc_time`
 ADD PRIMARY KEY (`doc_id`), ADD KEY `doc_user` (`doc_user`), ADD KEY `doc_oco` (`doc_oco`);

--
-- Indexes for table `dominios`
--
ALTER TABLE `dominios`
 ADD PRIMARY KEY (`dom_cod`);

--
-- Indexes for table `email_warranty`
--
ALTER TABLE `email_warranty`
 ADD PRIMARY KEY (`ew_id`), ADD KEY `ew_piece_id` (`ew_piece_id`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
 ADD PRIMARY KEY (`empr_id`);

--
-- Indexes for table `equipamentos`
--
ALTER TABLE `equipamentos`
 ADD PRIMARY KEY (`comp_inv`,`comp_inst`), ADD KEY `comp_cod` (`comp_cod`), ADD KEY `comp_inv` (`comp_inv`), ADD KEY `comp_assist` (`comp_assist`);

--
-- Indexes for table `equipxpieces`
--
ALTER TABLE `equipxpieces`
 ADD PRIMARY KEY (`eqp_id`), ADD KEY `eqp_equip_inv` (`eqp_equip_inv`,`eqp_equip_inst`,`eqp_piece_id`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
 ADD PRIMARY KEY (`estoq_cod`), ADD KEY `estoq_tipo` (`estoq_tipo`,`estoq_desc`), ADD KEY `estoq_local` (`estoq_local`), ADD KEY `estoq_tag_inv` (`estoq_tag_inv`,`estoq_tag_inst`), ADD KEY `estoq_partnumber` (`estoq_partnumber`);

--
-- Indexes for table `fabricantes`
--
ALTER TABLE `fabricantes`
 ADD PRIMARY KEY (`fab_cod`), ADD KEY `fab_cod` (`fab_cod`), ADD KEY `fab_tipo` (`fab_tipo`);

--
-- Indexes for table `feriados`
--
ALTER TABLE `feriados`
 ADD PRIMARY KEY (`cod_feriado`), ADD KEY `data_feriado` (`data_feriado`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
 ADD PRIMARY KEY (`forn_cod`), ADD KEY `forn_cod` (`forn_cod`);

--
-- Indexes for table `global_tickets`
--
ALTER TABLE `global_tickets`
 ADD PRIMARY KEY (`gt_ticket`), ADD KEY `gt_id` (`gt_id`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
 ADD PRIMARY KEY (`hist_cod`), ADD KEY `hist_inv` (`hist_inv`), ADD KEY `hist_inst` (`hist_inst`);

--
-- Indexes for table `hist_pieces`
--
ALTER TABLE `hist_pieces`
 ADD PRIMARY KEY (`hp_id`), ADD KEY `hp_piece_id` (`hp_piece_id`,`hp_piece_local`,`hp_comp_inv`,`hp_comp_inst`), ADD KEY `hp_technician` (`hp_technician`);

--
-- Indexes for table `hw_alter`
--
ALTER TABLE `hw_alter`
 ADD PRIMARY KEY (`hwa_cod`), ADD KEY `hwa_inst` (`hwa_inst`,`hwa_inv`,`hwa_item`,`hwa_user`);

--
-- Indexes for table `hw_sw`
--
ALTER TABLE `hw_sw`
 ADD PRIMARY KEY (`hws_cod`), ADD KEY `hws_sw_cod` (`hws_sw_cod`,`hws_hw_cod`), ADD KEY `hws_hw_inst` (`hws_hw_inst`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
 ADD PRIMARY KEY (`img_cod`), ADD KEY `img_oco` (`img_oco`), ADD KEY `img_inv` (`img_inv`,`img_model`), ADD KEY `img_inst` (`img_inst`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
 ADD PRIMARY KEY (`inst_cod`), ADD KEY `inst_cod` (`inst_cod`), ADD KEY `inst_status` (`inst_status`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
 ADD PRIMARY KEY (`item_cod`), ADD KEY `item_nome` (`item_nome`);

--
-- Indexes for table `licencas`
--
ALTER TABLE `licencas`
 ADD PRIMARY KEY (`lic_cod`);

--
-- Indexes for table `localizacao`
--
ALTER TABLE `localizacao`
 ADD UNIQUE KEY `loc_id` (`loc_id`), ADD KEY `loc_sla` (`loc_prior`), ADD KEY `loc_dominio` (`loc_dominio`), ADD KEY `loc_predio` (`loc_predio`), ADD KEY `loc_status` (`loc_status`), ADD KEY `loc_prior` (`loc_prior`);

--
-- Indexes for table `lock_oco`
--
ALTER TABLE `lock_oco`
 ADD PRIMARY KEY (`lck_id`), ADD UNIQUE KEY `lck_oco` (`lck_oco`), ADD KEY `lck_uid` (`lck_uid`);

--
-- Indexes for table `mailconfig`
--
ALTER TABLE `mailconfig`
 ADD PRIMARY KEY (`mail_cod`);

--
-- Indexes for table `mail_hist`
--
ALTER TABLE `mail_hist`
 ADD PRIMARY KEY (`mhist_cod`), ADD KEY `mhist_technician` (`mhist_technician`), ADD KEY `mhist_oco` (`mhist_oco`);

--
-- Indexes for table `mail_list`
--
ALTER TABLE `mail_list`
 ADD PRIMARY KEY (`ml_cod`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
 ADD PRIMARY KEY (`tpl_cod`);

--
-- Indexes for table `marcas_comp`
--
ALTER TABLE `marcas_comp`
 ADD PRIMARY KEY (`marc_cod`), ADD KEY `marc_cod` (`marc_cod`), ADD KEY `marc_tipo` (`marc_tipo`);

--
-- Indexes for table `materiais`
--
ALTER TABLE `materiais`
 ADD PRIMARY KEY (`mat_cod`), ADD KEY `mat_cod_2` (`mat_cod`), ADD KEY `mat_modelo_equip` (`mat_modelo_equip`);

--
-- Indexes for table `modelos_itens`
--
ALTER TABLE `modelos_itens`
 ADD PRIMARY KEY (`mdit_cod`), ADD KEY `mdit_desc` (`mdit_desc`), ADD KEY `mdit_tipo` (`mdit_tipo`), ADD KEY `cod_old` (`mdit_cod_old`);

--
-- Indexes for table `modulos`
--
ALTER TABLE `modulos`
 ADD PRIMARY KEY (`modu_cod`), ADD KEY `modu_nome` (`modu_nome`);

--
-- Indexes for table `moldes`
--
ALTER TABLE `moldes`
 ADD PRIMARY KEY (`mold_marca`), ADD KEY `mold_cod` (`mold_cod`);

--
-- Indexes for table `msgconfig`
--
ALTER TABLE `msgconfig`
 ADD PRIMARY KEY (`msg_cod`), ADD UNIQUE KEY `msg_event` (`msg_event`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
 ADD PRIMARY KEY (`nivel_cod`);

--
-- Indexes for table `ocodeps`
--
ALTER TABLE `ocodeps`
 ADD KEY `dep_filho` (`dep_filho`), ADD KEY `dep_pai` (`dep_pai`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
 ADD PRIMARY KEY (`numero`), ADD KEY `data_abertura` (`data_abertura`), ADD KEY `data_fechamento` (`data_fechamento`), ADD KEY `local` (`local`), ADD KEY `aberto_por` (`aberto_por`), ADD KEY `oco_scheduled` (`oco_scheduled`), ADD KEY `oco_script_sol` (`oco_script_sol`), ADD KEY `oco_prior` (`oco_prior`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
 ADD PRIMARY KEY (`perm_cod`), ADD KEY `perm_area` (`perm_area`,`perm_modulo`,`perm_flag`);

--
-- Indexes for table `polegada`
--
ALTER TABLE `polegada`
 ADD PRIMARY KEY (`pole_cod`), ADD KEY `pole_cod` (`pole_cod`);

--
-- Indexes for table `predios`
--
ALTER TABLE `predios`
 ADD PRIMARY KEY (`pred_cod`);

--
-- Indexes for table `prioridades`
--
ALTER TABLE `prioridades`
 ADD PRIMARY KEY (`prior_cod`), ADD KEY `prior_nivel` (`prior_nivel`,`prior_sla`), ADD KEY `prior_sla` (`prior_sla`);

--
-- Indexes for table `prior_atend`
--
ALTER TABLE `prior_atend`
 ADD PRIMARY KEY (`pr_cod`), ADD UNIQUE KEY `pr_nivel` (`pr_nivel`);

--
-- Indexes for table `prior_nivel`
--
ALTER TABLE `prior_nivel`
 ADD PRIMARY KEY (`prn_cod`), ADD KEY `prn_level` (`prn_level`);

--
-- Indexes for table `problemas`
--
ALTER TABLE `problemas`
 ADD PRIMARY KEY (`prob_id`), ADD KEY `prob_id` (`prob_id`), ADD KEY `prob_area` (`prob_area`), ADD KEY `prob_sla` (`prob_sla`), ADD KEY `prob_tipo_1` (`prob_tipo_1`,`prob_tipo_2`), ADD KEY `prob_tipo_3` (`prob_tipo_3`);

--
-- Indexes for table `prob_tipo_1`
--
ALTER TABLE `prob_tipo_1`
 ADD PRIMARY KEY (`probt1_cod`);

--
-- Indexes for table `prob_tipo_2`
--
ALTER TABLE `prob_tipo_2`
 ADD PRIMARY KEY (`probt2_cod`);

--
-- Indexes for table `prob_tipo_3`
--
ALTER TABLE `prob_tipo_3`
 ADD PRIMARY KEY (`probt3_cod`);

--
-- Indexes for table `prob_x_script`
--
ALTER TABLE `prob_x_script`
 ADD PRIMARY KEY (`prscpt_id`), ADD KEY `prscpt_prob_id` (`prscpt_prob_id`,`prscpt_scpt_id`);

--
-- Indexes for table `reitorias`
--
ALTER TABLE `reitorias`
 ADD PRIMARY KEY (`reit_cod`), ADD KEY `reit_nome` (`reit_nome`);

--
-- Indexes for table `resolucao`
--
ALTER TABLE `resolucao`
 ADD PRIMARY KEY (`resol_cod`), ADD KEY `resol_cod` (`resol_cod`);

--
-- Indexes for table `scripts`
--
ALTER TABLE `scripts`
 ADD PRIMARY KEY (`scpt_id`);

--
-- Indexes for table `script_solution`
--
ALTER TABLE `script_solution`
 ADD PRIMARY KEY (`script_cod`);

--
-- Indexes for table `sistemas`
--
ALTER TABLE `sistemas`
 ADD PRIMARY KEY (`sis_id`), ADD KEY `sis_status` (`sis_status`), ADD KEY `sis_screen` (`sis_screen`);

--
-- Indexes for table `situacao`
--
ALTER TABLE `situacao`
 ADD PRIMARY KEY (`situac_cod`);

--
-- Indexes for table `sla_out`
--
ALTER TABLE `sla_out`
 ADD KEY `out_numero` (`out_numero`);

--
-- Indexes for table `sla_solucao`
--
ALTER TABLE `sla_solucao`
 ADD PRIMARY KEY (`slas_cod`), ADD KEY `slas_tempo` (`slas_tempo`), ADD KEY `slas_tempo_2` (`slas_tempo`);

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
 ADD PRIMARY KEY (`soft_cod`), ADD KEY `soft_fab` (`soft_fab`,`soft_cat`,`soft_tipo_lic`), ADD KEY `soft_versao` (`soft_versao`), ADD KEY `soft_nf` (`soft_nf`), ADD KEY `soft_forn` (`soft_forn`);

--
-- Indexes for table `solucoes`
--
ALTER TABLE `solucoes`
 ADD PRIMARY KEY (`numero`), ADD KEY `numero` (`numero`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`stat_id`), ADD KEY `stat_cat` (`stat_cat`), ADD KEY `stat_painel` (`stat_painel`);

--
-- Indexes for table `status_categ`
--
ALTER TABLE `status_categ`
 ADD PRIMARY KEY (`stc_cod`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
 ADD PRIMARY KEY (`tm_id`);

--
-- Indexes for table `sw_padrao`
--
ALTER TABLE `sw_padrao`
 ADD PRIMARY KEY (`swp_cod`), ADD KEY `swp_sw_cod` (`swp_sw_cod`);

--
-- Indexes for table `temas`
--
ALTER TABLE `temas`
 ADD PRIMARY KEY (`tm_id`);

--
-- Indexes for table `tempo_garantia`
--
ALTER TABLE `tempo_garantia`
 ADD PRIMARY KEY (`tempo_cod`), ADD KEY `tempo_meses` (`tempo_meses`);

--
-- Indexes for table `tempo_status`
--
ALTER TABLE `tempo_status`
 ADD PRIMARY KEY (`ts_cod`), ADD KEY `ts_ocorrencia` (`ts_ocorrencia`,`ts_status`);

--
-- Indexes for table `tipo_equip`
--
ALTER TABLE `tipo_equip`
 ADD PRIMARY KEY (`tipo_cod`), ADD KEY `tipo_cod` (`tipo_cod`);

--
-- Indexes for table `tipo_garantia`
--
ALTER TABLE `tipo_garantia`
 ADD PRIMARY KEY (`tipo_garant_cod`);

--
-- Indexes for table `tipo_imp`
--
ALTER TABLE `tipo_imp`
 ADD PRIMARY KEY (`tipo_imp_cod`), ADD KEY `tipo_imp_cod` (`tipo_imp_cod`);

--
-- Indexes for table `tipo_item`
--
ALTER TABLE `tipo_item`
 ADD PRIMARY KEY (`tipo_it_cod`);

--
-- Indexes for table `uprefs`
--
ALTER TABLE `uprefs`
 ADD PRIMARY KEY (`upref_uid`), ADD KEY `upref_lang` (`upref_lang`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`user_id`), ADD KEY `login` (`login`);

--
-- Indexes for table `usuarios_areas`
--
ALTER TABLE `usuarios_areas`
 ADD PRIMARY KEY (`uarea_cod`), ADD KEY `uarea_uid` (`uarea_uid`,`uarea_sid`);

--
-- Indexes for table `uthemes`
--
ALTER TABLE `uthemes`
 ADD PRIMARY KEY (`uth_id`), ADD KEY `uth_uid` (`uth_uid`,`uth_thid`);

--
-- Indexes for table `utmp_usuarios`
--
ALTER TABLE `utmp_usuarios`
 ADD PRIMARY KEY (`utmp_cod`), ADD UNIQUE KEY `utmp_login` (`utmp_login`,`utmp_email`), ADD KEY `utmp_rand` (`utmp_rand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assentamentos`
--
ALTER TABLE `assentamentos`
MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3126;
--
-- AUTO_INCREMENT for table `assistencia`
--
ALTER TABLE `assistencia`
MODIFY `assist_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
MODIFY `aviso_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
MODIFY `cat_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ccusto`
--
ALTER TABLE `ccusto`
MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
MODIFY `conf_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `configusercall`
--
ALTER TABLE `configusercall`
MODIFY `conf_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contatos_email`
--
ALTER TABLE `contatos_email`
MODIFY `contact_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `contatos_tel`
--
ALTER TABLE `contatos_tel`
MODIFY `contact_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `doc_time`
--
ALTER TABLE `doc_time`
MODIFY `doc_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1505;
--
-- AUTO_INCREMENT for table `dominios`
--
ALTER TABLE `dominios`
MODIFY `dom_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email_warranty`
--
ALTER TABLE `email_warranty`
MODIFY `ew_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
MODIFY `empr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipamentos`
--
ALTER TABLE `equipamentos`
MODIFY `comp_cod` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `equipxpieces`
--
ALTER TABLE `equipxpieces`
MODIFY `eqp_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
MODIFY `estoq_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fabricantes`
--
ALTER TABLE `fabricantes`
MODIFY `fab_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `feriados`
--
ALTER TABLE `feriados`
MODIFY `cod_feriado` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
MODIFY `forn_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
MODIFY `hist_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `hist_pieces`
--
ALTER TABLE `hist_pieces`
MODIFY `hp_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hw_alter`
--
ALTER TABLE `hw_alter`
MODIFY `hwa_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hw_sw`
--
ALTER TABLE `hw_sw`
MODIFY `hws_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
MODIFY `img_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
MODIFY `inst_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
MODIFY `item_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `licencas`
--
ALTER TABLE `licencas`
MODIFY `lic_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `localizacao`
--
ALTER TABLE `localizacao`
MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `lock_oco`
--
ALTER TABLE `lock_oco`
MODIFY `lck_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=475;
--
-- AUTO_INCREMENT for table `mailconfig`
--
ALTER TABLE `mailconfig`
MODIFY `mail_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mail_hist`
--
ALTER TABLE `mail_hist`
MODIFY `mhist_cod` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mail_list`
--
ALTER TABLE `mail_list`
MODIFY `ml_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
MODIFY `tpl_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marcas_comp`
--
ALTER TABLE `marcas_comp`
MODIFY `marc_cod` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
MODIFY `mat_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modelos_itens`
--
ALTER TABLE `modelos_itens`
MODIFY `mdit_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=529;
--
-- AUTO_INCREMENT for table `modulos`
--
ALTER TABLE `modulos`
MODIFY `modu_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `moldes`
--
ALTER TABLE `moldes`
MODIFY `mold_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `msgconfig`
--
ALTER TABLE `msgconfig`
MODIFY `msg_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
MODIFY `nivel_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1190;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
MODIFY `perm_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `polegada`
--
ALTER TABLE `polegada`
MODIFY `pole_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `predios`
--
ALTER TABLE `predios`
MODIFY `pred_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prioridades`
--
ALTER TABLE `prioridades`
MODIFY `prior_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prior_atend`
--
ALTER TABLE `prior_atend`
MODIFY `pr_cod` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prior_nivel`
--
ALTER TABLE `prior_nivel`
MODIFY `prn_cod` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `problemas`
--
ALTER TABLE `problemas`
MODIFY `prob_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prob_tipo_1`
--
ALTER TABLE `prob_tipo_1`
MODIFY `probt1_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prob_tipo_2`
--
ALTER TABLE `prob_tipo_2`
MODIFY `probt2_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prob_tipo_3`
--
ALTER TABLE `prob_tipo_3`
MODIFY `probt3_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prob_x_script`
--
ALTER TABLE `prob_x_script`
MODIFY `prscpt_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reitorias`
--
ALTER TABLE `reitorias`
MODIFY `reit_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resolucao`
--
ALTER TABLE `resolucao`
MODIFY `resol_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `scripts`
--
ALTER TABLE `scripts`
MODIFY `scpt_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `script_solution`
--
ALTER TABLE `script_solution`
MODIFY `script_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `sistemas`
--
ALTER TABLE `sistemas`
MODIFY `sis_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `situacao`
--
ALTER TABLE `situacao`
MODIFY `situac_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sla_solucao`
--
ALTER TABLE `sla_solucao`
MODIFY `slas_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
MODIFY `soft_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `status_categ`
--
ALTER TABLE `status_categ`
MODIFY `stc_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
MODIFY `tm_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sw_padrao`
--
ALTER TABLE `sw_padrao`
MODIFY `swp_cod` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temas`
--
ALTER TABLE `temas`
MODIFY `tm_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tempo_garantia`
--
ALTER TABLE `tempo_garantia`
MODIFY `tempo_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tempo_status`
--
ALTER TABLE `tempo_status`
MODIFY `ts_cod` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1928;
--
-- AUTO_INCREMENT for table `tipo_equip`
--
ALTER TABLE `tipo_equip`
MODIFY `tipo_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tipo_garantia`
--
ALTER TABLE `tipo_garantia`
MODIFY `tipo_garant_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_imp`
--
ALTER TABLE `tipo_imp`
MODIFY `tipo_imp_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipo_item`
--
ALTER TABLE `tipo_item`
MODIFY `tipo_it_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `usuarios_areas`
--
ALTER TABLE `usuarios_areas`
MODIFY `uarea_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `uthemes`
--
ALTER TABLE `uthemes`
MODIFY `uth_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `utmp_usuarios`
--
ALTER TABLE `utmp_usuarios`
MODIFY `utmp_cod` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
