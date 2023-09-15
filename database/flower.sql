-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 02:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(6, 'flower');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pay_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `full_name`, `phone`, `address`, `pay_mode`) VALUES
(10, 'Faraz ahmed', 2147483647, 'landhi', 'OP');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail2`
--

CREATE TABLE `order_detail2` (
  `order_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail2`
--

INSERT INTO `order_detail2` (`order_id`, `p_name`, `price`, `qty`, `sku`) VALUES
(10, 'white flower', 4444, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `c_id`, `price`, `image`) VALUES
(11, 'sunflower', 5, 4444, '7.jpg'),
(12, 'new slower', 2, 555, '4.jpg'),
(13, 'snow flower', 2, 4444, '9.jpg'),
(14, 'snow flower', 2, 50, '3.jpg'),
(15, 'snow flower', 2, 4444, '6.jpg'),
(16, 'white flower', 6, 4444, 'jknmwmxdztjjgiwsno22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(1000) NOT NULL,
  `p_desc` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`p_id`, `p_name`, `p_desc`, `price`, `c_id`, `image`) VALUES
(4, 'Aconite', 'Aconites are one of the first bulb flowers to bloom in the spring and are known for their cheerful yellow color. Plant Aconites in a large group together and you will be able to smell their sweet, honey like fragrance.', 100, 6, 'aconite.jpg'),
(5, 'Ageratum', 'Also known as Flossflower, Ageratums come in blue, pink and white blooms. The taller varieties are best for cutting and displaying in your home, while the dwarf bedding varieties are best kept in the garden.', 450, 6, 'ageratum.jpg'),
(6, 'Ageratum', 'For those seeking a drought tolerant plant that does not make your yard look like a dessert, the Artemisia is for you. Tolerating low amounts of water, you can create a diverse periscope with this silvery flower.', 50, 0, 'artemisia.jpg'),
(7, 'Aster', 'Named after the Latin word for star Asters will brighten up any garden. It attracts butterflies and comes in a variety of colors including blue, indigo, violet, white, red and pink. Unlike other colorful flowers, Asters will typically stay in bloom into cooler fall months.', 555, 6, 'aster.jpg'),
(8, 'Astilbe', 'Astilbes are deceptively delicate with their long, fern like flowers. These flowers can actually withstand damp soil and shade, while still growing between one to six feet tall. Perfect to add for a pop of color to a garden that typically gets little sunlight.', 50, 6, 'astilbe.jpg'),
(9, 'Aubrieta', 'Named after Claude Aubriet, a French artist who famously painted them, Aubrietas spread low with small violet, pink or white flowers. If you are creating a rock garden, Aubrietas are ideal as it prefers sandy, well drained soil.', 150, 6, 'aubrieta.jpg'),
(10, 'Azalea', 'Often referred to as \"the royalty of the garden,  these elegant flowers are known for their outstanding colors and foliage. With thousands of varieties to choose from, Azaleas require little maintenance once planted and can be brought inside to make a fabulous bouquet.', 50, 6, 'azalea.jpg'),
(11, 'Balloon Flower', 'Balloon flowers start as hollow buds and, as it grows, eventually bursts open into a star shaped flower. In addition to its beauty, Balloon flowers are resilient in the garden and can handle varying sunlight, water and soil.', 120, 6, 'balloon-flower.jpg'),
(12, 'Balsam', 'Bring the tropics to your garden with a Balsam plant. Easy to care for, it thrives in shadier spots, can tolerate heat and handle damp soil. Flowers come in almost every color of the rainbow, including red, orange, yellow, violet, white and pink.', 160, 6, 'balsam.jpg'),
(13, 'Baneberry', 'Perfect for cool, shaded spots, the Baneberry brings a holiday inspired look to your garden. Before the Baneberry bears ornamental fruit, it features small white flowers. Beware though, the little red berries found on the plant are poisonous to eat.', 500, 6, 'Baneberry.jpg'),
(14, 'Basket of Gold', 'With bright yellow, low growing flowers, no wonder where the Basket of Gold got its name. Given its short height and golden color, this makes for a perfect addition to a rock garden or xeriscape.', 450, 6, 'basket of gold.jpg'),
(15, 'Bee Balm', 'With the name Bee balm, this ornamental flower attracts not only bees, but hummingbirds and other beneficial pollinators. Bee balms are highly valued for their deep scarlet color, but also come in blue, violet, white and pink.', 400, 6, 'bee balm.jpg'),
(16, 'Begonia', 'Known for their attractive blooms, the Begonia is a timeless favorite among gardeners. Consisting of more than 1,700 specie, Begonias also make for good indoor plants if kept by a sunny window and watered regularly.', 350, 6, 'begonia.jpg'),
(17, 'Bellflower', 'With their happy, star like flowers, the variety of Bellflowers available can fit any gardener needs. Ranging from short to tall, and featuring almost every color of the rainbow, these cheery flowers are a great fit for your garden or cut to display in your home.', 450, 6, 'bellflower.jpg'),
(18, 'Bergenia', 'The Bergenia plant looks as sweet as its nicknames also commonly known as Pigsqueak or Elephant ears. While short in stature, the Bergenia makes up for it in ornate flowers and leaves that change from green to red or bronze in the cooler months.', 100, 6, 'bergenia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `roletype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `user_name`, `user_email`, `user_password`, `c_password`, `roletype`) VALUES
(1, 'Faraz ahmed', 'Farazahmed9719@gmail.com', '123', '123', 1),
(2, 'Ahmed ali', 'ahmed123@gmail.com', '123', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail2`
--
ALTER TABLE `order_detail2`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_detail2`
--
ALTER TABLE `order_detail2`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
