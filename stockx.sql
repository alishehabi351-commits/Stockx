-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2026 at 09:25 PM
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
-- Database: `stockx`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `price`, `image`) VALUES
(1, 'Jordan 1 Retro Nike Dunks', 'shoes', 495.00, 'jordan 1 retro.PNG'),
(2, 'Diffused Taupe Nike Dunk Lows', 'shoes', 70.00, 'Diffused taupe.PNG'),
(3, 'Nike Airforce 1 Low White', 'shoes', 110.00, 'Nike Airforce White.jpg'),
(4, 'Nike Zoom 5 Vetero Photon Dust', 'shoes', 135.00, 'Nike Zoom 5.jpg'),
(5, 'Jordan 4 Retro White Thunders', 'shoes', 225.00, 'jordan 4 retro.jpg'),
(6, 'Jordan 4 Retro OG SP', 'shoes', 135.00, 'jordan 4 retro og.jpg'),
(7, 'Jordan 4 Retro RE', 'shoes', 135.00, 'Jordan 4 retro RE.jpg'),
(8, 'Jordan 4 Retro Military Blue', 'shoes', 135.00, 'jordan 4 retro blue.jpg'),
(9, 'Jordan 4 AJ Orchid', 'shoes', 215.00, 'jordan aj4.jpg'),
(10, 'Kobe Protro Court Purple', 'shoes', 130.00, 'kobe 8 protro purple.jpg'),
(11, 'Nike Dunk QS Halloween Skulls', 'shoes', 150.00, 'nike dunk skulls.PNG'),
(12, 'Nike KD 4 Aunt Pearl', 'shoes', 130.00, 'kd 4 shoe.PNG'),
(13, 'Cotton Wreath Hoodie Black', 'hoodies', 160.00, 'CottonWreath Hoodie.jpg'),
(14, 'Fear Of God Essentials Hoodie Oatmeal', 'hoodies', 200.00, 'Fearofgodoatmeal Hoodie.jpg'),
(15, 'Travis Scott Spider Hoodie Brown', 'hoodies', 400.00, 'travis scott spider hoodie.jpg'),
(16, 'Travis Scott Hoodie Light Tan', 'hoodies', 240.00, 'travis scott hoodie.jpg'),
(17, 'Sp5der Web Hoodie Black', 'hoodies', 255.00, 'spider black hoodie.jpg'),
(18, 'Sp5der Web Pink Hoodie', 'hoodies', 255.00, 'spider pink hoodie.jpg'),
(19, 'Fear of God Essentials Hoodie Dark Oatmeal', 'hoodies', 135.00, 'essential grey hoodie.jpg'),
(20, 'Fear Of God Essentials 1997 Hoodie', 'hoodies', 140.00, 'Fear of god 1997.jpg'),
(21, 'Cotton Wreath Green Hoodie', 'hoodies', 150.00, 'Cottonwreath green hoodie.jpg'),
(22, 'Cotton Wreath Red Hoodie', 'hoodies', 150.00, 'CottonWreath Red.jpg'),
(23, 'Chromehearts Horseshoe Zip Up Hoodie Black', 'hoodies', 1400.00, 'chromehearts black hoodie.jpg'),
(24, 'Yeezy x Gap Unreleased Zip up Hoodie Dark Blue', 'hoodies', 110.00, 'Yeezy Gap blue hoodie.jpg'),
(25, 'Nike Puffer Jacket', 'jackets', 200.00, 'Nike Puffer Jacket.jpg'),
(26, 'Northface Retro Puffer Jacket 1996', 'jackets', 170.00, 'Northface retro Puffer.jpg'),
(27, 'Moncler Batman Puffer Jacket', 'jackets', 2100.00, 'Moncler Batman Jacket.jpg'),
(28, 'Trapstar Arch Jacket', 'jackets', 375.00, 'Trapstar arch jacket.jpg'),
(29, 'Palace Pasta Jacket', 'jackets', 520.00, 'Palace pasta jacket.jpg'),
(30, 'Supreme X Jordan Collab Puffer Jacket Black', 'jackets', 450.00, 'Supreme Jordan puffer.jpg'),
(31, 'Supreme Ducati Track Jacket', 'jackets', 450.00, 'Supreme track Jacket.jpg'),
(32, 'North Face Green Jacket', 'jackets', 125.00, 'Northface green jacket.jpg'),
(33, 'Nike Nocta NRG Warmup Jacket', 'jackets', 110.00, 'Nike Nocta Jacket.jpg'),
(34, 'Supreme Veritas Varsity Jacket', 'jackets', 620.00, 'Supreme Varsity Jacket.jpg'),
(35, 'Palace RS Stars Jacket', 'jackets', 350.00, 'Palace Stars Jacket.jpg'),
(36, 'The North Face Retro Puffer Jacket 1996 White', 'jackets', 375.00, 'northface retro white puffer.jpg'),
(37, 'Hell Star Cotton Tshirt Black', 'tshirts', 110.00, 'hellstar black tshirt.PNG'),
(38, 'OFF WHITE Palm Angels Tshirt White', 'tshirts', 170.00, 'palm angels white tshirt.PNG'),
(39, 'Stussy 8 Ball Tshirt Tan', 'tshirts', 200.00, 'stussy white tshirt.PNG'),
(40, 'ChromeHearts Horseshoe Tshirt Black', 'tshirts', 350.00, 'chromeheart black tshirt.PNG'),
(41, 'Jordan Dna Tshirt Black', 'tshirts', 110.00, 'jordandnatshirt.PNG'),
(42, 'Kaws Tshirt shortsleve and longsleve Black', 'tshirts', 200.00, 'kawstshirtandshirt.PNG'),
(43, 'Nike SB Spider TShirt', 'tshirts', 100.00, 'nike spider black tshirt.PNG'),
(44, 'Nike Black Fabric Tshirt', 'tshirts', 375.00, 'nike black tshirt.PNG'),
(45, 'Travis Scott Rib Cage Tshirt Tan', 'tshirts', 210.00, 'travis scott rib tshirt.PNG'),
(46, 'Anti Social Club Tshirt Black', 'tshirts', 620.00, 'anti social club black tshirt.PNG'),
(47, 'Bape Sean Wotherspoon Tshirt Blue Navy', 'tshirts', 220.00, 'bape light blue tshirt.PNG'),
(48, 'Kaws and Uniqlo Graphic Tshirt Black', 'tshirts', 375.00, 'kaws graphic black tshirt.PNG'),
(49, 'Supreme Star Jersey Black', 'jerseys', 160.00, 'supreme star black jersey.PNG'),
(50, 'Lakers Purple Jersey N.33', 'jerseys', 200.00, 'Lakers puprle jersey.PNG'),
(51, 'Travis Scott Argentina Jersey', 'jerseys', 1000.00, 'Travis scott argentina jersey.PNG'),
(52, 'Acne Studio Logo Jersey Tan', 'jerseys', 270.00, 'acne studio tan jersey.jpg'),
(53, 'Supreme Martin Rose Football Jersey Black', 'jerseys', 200.00, 'supreme rose jersey.PNG'),
(54, 'Supreme Jacquard Black Jersey', 'jerseys', 170.00, 'supreme jacquard black jersey.PNG'),
(55, 'Crest Soccer Jersey Black', 'jerseys', 150.00, 'Crest Soccer Jersey Black.PNG'),
(56, 'Nike Brazil 1998 Soccer Jersey Replica', 'jerseys', 110.00, 'Nike brazil 1998 Soccer Jersey.PNG'),
(57, 'Travis Scott Spain Jersey Black And Orange', 'jerseys', 210.00, 'Travis Scott Spain Jersey.PNG'),
(58, 'Patta x Barcelona FC Culers Pre-Match Jersey', 'jerseys', 160.00, 'Barcelona FC Jersey.PNG'),
(59, 'Chrome Hearts Mesh Stadium Football Jersey', 'jerseys', 2000.00, 'chromehearts mesh black jersey.PNG'),
(60, 'LA Dodgers Kobe Bryant Lakers Jersey', 'jerseys', 375.00, 'kobe bryant dodgers jersey.PNG'),
(65, 'Tag Heuer Aquaracer', 'watch', 560.00, 'tag_aquaracer.png'),
(66, 'Tag Heuer Carrera', 'watch', 500.00, 'tag_carrera.png'),
(67, 'BAPE Type 1 Crystal Stone', 'watch', 700.00, 'bape_emerald.png'),
(68, 'Versace V-Galaxy Moonphase', 'watch', 1000.00, 'versace_gold.png'),
(69, 'Casio Emerald Gem', 'watch', 300.00, 'casio_emerald.png'),
(70, 'Louis Vuitton LV Initiales Reversible Belt', 'belt', 650.00, 'lv_black_belt.png'),
(71, 'AMIRI MA Belt', 'belt', 365.00, 'amiri_gold_belt.png'),
(72, 'Versace La Greca Signature Wallet', 'wallet', 215.00, 'versace_black_wallet.png'),
(73, 'Goyard Saint Sulpice Wallet', 'wallet', 650.00, 'goyard_green_wallet.png'),
(74, 'Louis Vuitton Card Case', 'wallet', 370.00, 'lv_blue_wallet.png'),
(75, 'Gucci Aviator-Frame Metal Sunglasses', 'glasses', 145.00, 'gucci_aviator_glasses.png'),
(76, 'Prada A14S Plastic Butterfly Grey Lens Sunglasses', 'glasses', 290.00, 'prada_black_glasses.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `confirm_password` varchar(60) NOT NULL,
  `is_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirm_password`, `is_admin`) VALUES
(1, 'admin', 'admin@a.com', '$2y$10$jpwMg/eV1IlFS1QIM0MWuehKjrVvn8oZKGB2YWOvQae1eKgaSoIVy', '$2y$10$kmPhkLwjpjR5GcizbGXljO89QRcv7qSAqtEgjZMTZhEKWYPYCqccu', 'true'),
(6, 'notadmin', 'not@a.com', '$2y$10$YMA.Qp83OnQLA7Z1h4VAN.TsU4D3uTTEzZ8CbrPGRrVzkkRQpXtF.', '$2y$10$KPy5wFQNMFJlME2zgY1x8un3h1Ubhcw37ATI5Hp2GxVMFx7iLBRQu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
