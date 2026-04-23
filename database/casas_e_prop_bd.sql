-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2025 at 11:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casas_e_prop_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `imagem`, `titulo`, `texto`) VALUES
(1, 'http://localhost/casas_e_propriedades//public/uploads/caroussel/cabecalho1.jpg', 'Casas e Propriedades', 'Experiência - Profissionalismo'),
(2, 'http://localhost/casas_e_propriedades/public/uploads/caroussel/cabecalho2.jpg', 'Casas e Propriedades', 'Sustentabilidade - Qualidade de Vida'),
(4, 'http://localhost/casas_e_propriedades/public/uploads/caroussel/cabecalho4.jpg', 'Casas e Propriedades', 'Engenharia e Arquitetura'),
(5, 'http://localhost/casas_e_propriedades/public/uploads/caroussel/cabecalho5.jpg', 'Casas e Propriedades', 'Design - Qualidade');

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `email_form` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `morada`, `telefone`, `email`, `facebook`, `email_form`) VALUES
(1, '            Rua Lorem ipsum,nº 123, 1DTO, Almada.             <br>             Portugal', '[+351] 310 555 656', 'geral@casaepropriedades.pt', 'https://facebook.com', 'ximad80251@cerisun.com');

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`id`, `titulo`, `texto`) VALUES
(1, 'Historial', '<p>KAL ipsum dolor sit, amet consectetur adipisicing elit. Architecto fugit iusto provident amet numquam? Iste, alias, voluptate quas vel sequi, iure minus labore libero accusantium repudiandae quo placeat debitis. Natus dolorum quia similique odit dignissimos totam, fuga unde commodi delectus vero? Ducimus, consequatur corporis ut nam neque aliquam est eum numquam itaque culpa dolorum quos a. Praesentium temporibus nesciunt quis. Ullam praesentium ad aut libero, quod nemo dolorem eaque accusamus, sit quo necessitatibus amet dicta eos pariatur animi rem sapiente rerum id error soluta voluptate cupiditate eveniet, quaerat placeat? Quam blanditiis dolor, qui atque tempora neque perferendis accusantium et facere eveniet iusto dolorem aliquid est adipisci amet non nobis fuga molestias nisi iste deleniti modi cum consequatur. Quidem maxime atque beatae molestiae exercitationem, doloremque quis rerum et tempora velit architecto vitae facere culpa itaque unde. Mollitia et ad consequatur iusto animi nobis ullam tempora temporibus, reiciendis repellendus sint eius aperiam suscipit omnis excepturi ex beatae impedit dolores esse quos est modi non. Cumque ab eligendi esse cum, officiis eum animi? Itaque ut ab, assumenda modi vitae facilis nobis similique libero temporibus, dignissimos eveniet consequuntur molestias? Sint, quae dolorum natus iste illo ut repellendus commodi in ducimus quia corporis dolor amet.</p>\r\n<p>&nbsp;</p>\r\n<p>MARIA KOFAIJPGMASPIJMGSJINGIPJKSMGFJIUnasjfskfgkosmgjikdfmijkgmcdxfijngbijkdfnmbouijdnxcjvbmxdkomvbijdmbkjiodmbijkdmkibmdb&nbsp;<br /><br /><strong>ASFLPA;GFLOPSDKGLO;SKOLG</strong></p>'),
(2, 'Filosofia e Valores', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto fugit iusto provident amet numquam? Iste, alias, voluptate quas vel sequi, iure minus labore libero accusantium repudiandae quo placeat debitis. Natus dolorum quia similique odit dignissimos totam, fuga unde commodi delectus vero? Ducimus, consequatur corporis ut nam neque aliquam est eum numquam itaque culpa dolorum quos a. Praesentium temporibus nesciunt quis. Ullam praesentium ad aut libero, quod nemo dolorem eaque accusamus, sit quo necessitatibus amet dicta eos pariatur animi rem sapiente rerum id error soluta voluptate cupiditate eveniet, quaerat placeat? Quam blanditiis dolor, qui atque tempora neque perferendis accusantium et facere eveniet iusto dolorem aliquid est adipisci amet non nobis fuga molestias nisi iste deleniti modi cum consequatur. Quidem maxime atque beatae molestiae exercitationem, doloremque quis rerum et tempora velit architecto vitae facere culpa itaque unde. Mollitia et ad consequatur iusto animi nobis ullam tempora temporibus, reiciendis repellendus sint eius aperiam suscipit omnis excepturi ex beatae impedit dolores esse quos est modi non. Cumque ab eligendi esse cum, officiis eum animi? Itaque ut ab, assumenda modi vitae facilis nobis similique libero temporibus, dignissimos eveniet consequuntur molestias? Sint, quae dolorum natus iste illo ut repellendus commodi in ducimus quia corporis dolor amet.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `logins_crypto`
--

CREATE TABLE `logins_crypto` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logins_crypto`
--

INSERT INTO `logins_crypto` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$a.PL.HPZEI3hIqasfTYIZ.doMbyEX/R55MwLLRMDuTSQhJZSCH7WC');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `imagens` blob NOT NULL,
  `nome` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `imagens`, `nome`) VALUES
(1, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30312e6a7067225d, 'VARANDAS LOREM - ALMADA'),
(2, 0x5b0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30332e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30342e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30362e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30372e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30382e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30392e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31302e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31332e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31342e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31352e6a7067220d0a20200d0a5d, 'VILA IPSUM - SESSIMBRA'),
(3, 0x5b0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30332e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30342e6a7067220d0a20200d0a2020205d, 'CAMPO DOLOR - BRAGA'),
(4, 0x5b0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30332e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30342e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30362e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30372e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30382e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30392e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31302e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31332e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31342e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31352e6a7067220d0a20200d0a5d, 'ESTRADA SIT - LISBOA'),
(5, 0x5b0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30332e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30342e6a7067220d0a20200d0a2020205d, 'RUA AMET - PORTO');

-- --------------------------------------------------------

--
-- Table structure for table `predios`
--

CREATE TABLE `predios` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `id_projecto` int(11) NOT NULL,
  `imagens` blob NOT NULL,
  `mostrar` tinyint(1) DEFAULT 0,
  `area` int(11) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `valor` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `predios`
--

INSERT INTO `predios` (`id`, `tipo`, `id_projecto`, `imagens`, `mostrar`, `area`, `estado`, `valor`) VALUES
(2, 'T2', 1, 0x5b0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30332e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30312f74312f30342e6a7067220d0a20200d0a2020205d, 0, 244, 'Em construção', 115000.00),
(3, 'T3', 1, 0x5b0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30332e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30342e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30362e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30372e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30382e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f30392e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31302e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31312e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31322e6a7067222c200d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31332e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31342e6a7067222c0d0a202022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30322f31352e6a7067220d0a20200d0a5d, 1, 355, 'Em construção', 225000.00),
(5, 'T4', 2, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74302f30342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74302f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74302f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74302f30312e6a7067225d, 1, 422, 'Em construção', 560000.00),
(6, 'T4', 2, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30312e6a7067225d, 1, 422, 'Em construção', 560000.00),
(14, 'T4', 1, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f2f7075626c69632f75706c6f6164732f70726f6a6563746f5f67656e657269636f5f30332f74322f30312e6a7067225d, 1, 420, 'Construido', 345145.00);

-- --------------------------------------------------------

--
-- Table structure for table `projectos`
--

CREATE TABLE `projectos` (
  `id` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `acabamentos` text NOT NULL,
  `planta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectos`
--

INSERT INTO `projectos` (`id`, `nome`, `acabamentos`, `planta`) VALUES
(1, 'Terraços - Almada', '<p>LoreEAEAasdassdsadEm ipsum dolor sit, amet consectetur adipisicing elit. Architecto fugit iusto provident amet numquam? Iste, alias, voluptate quas vel sequi, iure minus labore libero accusantium repudiandae quo placeat debitis. Natus dolorum quia similique odit dignissimos totam, fuga unde commodi delectus vero? Ducimus, consequatur corporis ut nam neque aliquam est eum numquam itaque culpa dolorum quos a. Praesentium temporibus nesciunt quis. Ullam praesentium ad aut libero, quod nemo dolorem eaque accusamus, sit quo necessitatibus amet dicta eos pariatur animi rem sapiente rerum id error soluta voluptate cupiditate eveniet, quaerat placeat? Quam blanditiis dolor, qui atque tempora neque perferendis accusantium et facere eveniet iusto dolorem aliquid est adipisci amet non nobis fuga molestias nisi iste deleniti modi cum consequatur. Quidem maxime atque beatae molestiae exercitationem, doloremque quis rerum et tempora velit architecto vitae facere culpa itaque unde. Mollitia et ad consequatur iusto animi nobis ullam tempora temporibus, reiciendis repellendus sint eius aperiam suscipit omnis excepturi ex beatae impedit dolores esse quos est modi non. Cumque ab eligendi esse cum, officiis eum animi? Itaque ut ab, assumenda modi vitae facilis nobis similique libero temporibus, dignissimos eveniet consequuntur molestias? Sint, quae dolorum natus iste illo ut repellendus commodi in ducimus quia corporis dolor amet.</p>', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto fugit iusto provident amet numquam? Iste, alias, voluptate quas vel sequi, iure minus labore libero accusantium repudiandae quo placeat debitis. Natus dolorum quia similique odit dignissimos totam, fuga unde commodi delectus vero? Ducimus, consequatur corporis ut nam neque aliquam est eum numquam itaque culpa dolorum quos a. Praesentium temporibus nesciunt quis. Ullam praesentium ad aut libero, quod nemo dolorem eaque accusamus.</p>'),
(2, 'Jardim-Braga', '<p>Lorem ipAum dolor sit, amet consectetur adipisicing elit. Architecto fugit iusto provident amet numquam? Iste, alias, voluptate <strong>qusdsadaas</strong> vel sequi, iure minus labore libero accusantium repudiandae quo placeat debitis. Natus dolorum quia similique odit dignissimos totam, fuga unde commodi delectus vero? Ducimus, consequatur corporis ut nam neque aliquam est eum numquam itaque culpa dolorum quos a. Praesentium temporibus nesciunt quis. Ullam praesentium ad aut libero, quod nemo dolorem eaque accusamus, sit quo necessitatibus amet dicta eos pariatur animi rem sapiente rerum id error soluta voluptate cupiditate eveniet, quaerat placeat? Quam blanditiis dolor, qui atque tempora neque perferendis accusantium et facere eveniet iusto dolorem aliquid est adipisci amet non nobis fuga molestias nisi iste deleniti modi cum consequatur. Quidem maxime atque beatae molestiae exercitationem, doloremque quis rerum et tempora velit architecto vitae facere culpa itaque unde. Mollitia et ad consequatur iusto animi nobis ullam tempora temporibus, reiciendis repellendus sint eius aperiam suscipit omnis excepturi ex beatae impedit dolores esse quos est modi non. Cumque ab eligendi esse cum, officiis eum animi? Itaque ut ab, assumenda modi vitae facilis nobis similique libero temporibus, dignissimos eveniet consequuntur molestias? Sint, quae dolorum natus iste illo ut repellendus commodi in ducimus quia corporis dolor amet.rarararara</p>', '<p>AAAAAAALorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto fugit iusto provident amet numquam? Iste, alias, voluadsadasdaptdadadaate quas <strong>vAAAAAAAel</strong> sequi, iure minus labore libero accusantium repudiandae quo placeat debitis. Natus dolorum quia similique odit dignissimoasdadas totam, fuga unde commodi delectus vero? Ducimus, consequatur corporis ut nam neque aliquam est eum numquam itaque culpa dolorum quos a. Praesentium temporibus nesciunt quis. Ullam praesentium ad aut libero, quod nemo dolorem eaque accusamus.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins_crypto`
--
ALTER TABLE `logins_crypto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predios`
--
ALTER TABLE `predios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectos`
--
ALTER TABLE `projectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logins_crypto`
--
ALTER TABLE `logins_crypto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `predios`
--
ALTER TABLE `predios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projectos`
--
ALTER TABLE `projectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
