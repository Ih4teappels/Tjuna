-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2016 at 03:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tjuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `stappen`
--

CREATE TABLE IF NOT EXISTS `stappen` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stappen`
--

INSERT INTO `stappen` (`id`, `title`, `content`, `image`) VALUES
(1, 'Stap 1 &#8211; Functioneel Ontwerp', 'Op basis van het aangeleverde draadmodel en de functionele specificatie door Claus Company maakt Tjuna het definitieve Functioneel Ontwerp voor de websites.\n\n			In deze fase wordt er &#233;&#233;n feedbackronde ingepland waarbij Claus Company de mogelijkheid heeft om de laatst gewenste wijzigingen door te laten voeren in het Functioneel  Ontwerp.', 'island1.png'),
(2, 'Stap 2 &#8211; Technisch Ontwerp', 'Op basis van het goedgekeurde Functioneel Ontwerp stelt Tjuna een Technisch Ontwerp op.\n\n			Dit wordt opgesteld door ontwikkelaars binnen Tjuna en wordt gebruikt als leidraad voor ontwikkelaars.', 'island2.png'),
(3, 'Stap 3 &#8211; Ontwikkeling', 'De ontwikkeling van de websites wordt opgesplitst in verschillende fases. \nTjuna werkt volgens een iteratief proces waarbij we prioriteit geven aan de kernfunctionaliteiten. Deze kernfunctionaliteiten worden eerst ontwikkeld. Afgewerkte functionaliteiten worden in opeenvolgende iteraties toegevoegd. Elke iteratie levert een werkende test versie op. \nUiteindelijk doel van deze iteraties is een voor de opdrachtgever aanvaardbare versie van het product.\n', 'island3.png'),
(4, 'Stap 4 &#8211; Testing', '<div id="sectionContent">\n			<p>De websites worden getest volgens onderstaande procedure:</p>\n				<li>Development testing: gedurende de ontwikkeling door de ontwikkelaars.</li>\n				<li>Internal testing: intern bij Tjuna door een speciaal testteam.</li>\n				<li>Friendly user testing (In samenspraak met opdrachtgever): externe testgroep.</li>\n		</div>', 'island4.png'),
(6, 'Stap 5 &#8211; Lancering Website', 'Tjuna spreekt met Claus Company een duidelijke dag en tijd af wanneer de websites &#8220;live&#8221; zal gaan.\n\n			Omdat dit een belangrijk moment is met veel aandacht voor het nieuwe product zal Tjuna tijd vrij maken om er voor te zorgen dat mogelijke complicaties snel verholpen kunnen worden.', 'island5.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
