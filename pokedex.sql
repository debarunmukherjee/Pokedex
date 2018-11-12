-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 09:05 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokedex`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `index` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`index`, `Name`, `url`) VALUES
(1, 'Bulbasaur', 'https://pokemondb.net/pokedex/bulbasaur'),
(2, 'Ivysaur', 'https://pokemondb.net/pokedex/ivysaur'),
(3, 'Venusaur', 'https://pokemondb.net/pokedex/venusaur'),
(4, 'Charmander', 'https://pokemondb.net/pokedex/charmander'),
(5, 'Charmeleon', 'https://pokemondb.net/pokedex/charmeleon'),
(6, 'Charizard', 'https://pokemondb.net/pokedex/charizard'),
(7, 'Squirtle', 'https://pokemondb.net/pokedex/squirtle'),
(8, 'Wartortle', 'https://pokemondb.net/pokedex/wartortle'),
(9, 'Oddish', 'https://pokemondb.net/pokedex/oddish'),
(10, 'Machamp', 'https://pokemondb.net/pokedex/machamp'),
(11, 'Geodude', 'https://pokemondb.net/pokedex/geodude'),
(12, 'Graveler', 'https://pokemondb.net/pokedex/graveler'),
(13, 'Golem', 'https://pokemondb.net/pokedex/golem'),
(17, 'Onix', 'https://pokemondb.net/pokedex/onix'),
(18, 'Magikarp', 'https://pokemondb.net/pokedex/magikarp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
