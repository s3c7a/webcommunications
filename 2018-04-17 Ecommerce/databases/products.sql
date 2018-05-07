-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 04:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harevalo_mmda225_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` tinyint(4) NOT NULL,
  `category` char(30) NOT NULL,
  `date` datetime NOT NULL,
  `product` char(60) NOT NULL,
  `description` varchar(500) NOT NULL,
  `ingredients` varchar(400) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `image` char(60) NOT NULL,
  `thumbnail` char(60) NOT NULL,
  `alt` char(140) NOT NULL,
  `size` varchar(100) NOT NULL,
  `servings` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `date`, `product`, `description`, `ingredients`, `price`, `image`, `thumbnail`, `alt`, `size`, `servings`) VALUES
(1, 'Cake', '2007-01-29 00:00:00', 'Carrot Cake', '<p>Your concept of yummy will not be the same after tasting our carrot cake. It\'s delicious and fresh, it is like the Ying-yang of moisture and crunchy.</p>', 'Egg, milk, tree nut &amp; wheat flour (gluten).', '25.00', 'cake-carrot.jpg', 'cake-carrot_thumbnail.jpg', 'Dark-brown carrot cake on a light blue plate.', '6.9\" loaf', '8 portions'),
(2, 'Viennoiserie', '2017-12-04 00:00:00', 'Nutella Braid Ring', '<p>Yes, you read Nutella! Our recommended puff pastry craving for the famous chocolate and hazelnut spread lovers.</p>', 'This product contains: Chocolate, egg, milk, tree nut &amp; wheat flour (gluten).', '25.00', 'braid-nutella.jpg', 'braid-nutella_thumbnail.jpg', 'Golden-brown flaky Nutella braid ring on a white plate.', '8\" ring', '8-10 portions'),
(3, 'Cake', '2007-05-22 00:00:00', 'Chocolate Cake', '<p>Too much chocolate is never enough. Our original recipe enhances the flavour of chocolate. Spongy and moistened, our cake is definitely a choco-dream!</p>', 'This product contains: Chocolate, egg, milk, &amp; wheat flour (gluten).', '30.00', 'cake-chocolate.jpg', 'cake-chocolate_thumbnail.jpg', 'Dark-brown chocolate cake with chocolate chips on a dark blue plate.', '8\" cake', '8-10 portions'),
(4, 'Cake', '2007-08-09 00:00:00', 'Red Velvet Cake', '<p>As a piece of art, this cake unleashes your senses with a refined yet bold chocolate. You\'ll taste the ideal balance of moisture and softness.</p>', 'This product contains: Chocolate, egg, milk, &amp; wheat flour (gluten).', '32.00', 'cake-redvelvet.jpg', 'cake-redvelvet_thumbnail.jpg', 'Red velvet cake on a dark blue plate, with a piece cut out over a wooden base. It shows two layers of cake divided by white cream frosting.', '8\" cake', '8-10 portions'),
(5, 'Cake', '2007-09-06 00:00:00', 'Vanilla Cake', '<p>Let\'s get straight to the point: Vanilla! Enjoy the classic flavour of our family recipe for fresh and delicious bread.</p>', 'This product contains: Egg, milk, &amp; wheat flour (gluten).', '30.00', 'cake-vanilla.jpg', 'cake-vanilla_thumbnail.jpg', 'Golden-brown vanilla cake topped with white cream frosting and strawberries on a dark-blue plate.', '8\" cake', '8-10 portions'),
(6, 'Cake', '2007-04-12 00:00:00', 'Banana &amp; Nut Bread', '<p>You\'ll go bananas over our banana bread! Our banana loaf has an intense banana flavour perfectly balanced by an assortment of nuts. Flavorful, soft and crunchy!</p>', 'This product contains: Egg, milk, tree nut &amp; wheat flour (gluten).', '25.00', 'cake-banana.jpg', 'cake-banana_thumbnail.jpg', 'Golden-brown banana bread on a white plate.', '6.9\" loaf', '8 portions'),
(7, 'Viennoiserie', '2012-10-23 00:00:00', 'Fruit Paste Braid Ring', '<p>Perfectly baked crunchy puff pastry filled with a mixture of soft and sweet guava paste and cream cheese, it doesn\'t get better than this!</p>', 'This product contains: Egg, milk, &amp; wheat flour (gluten).', '28.00', 'braid-fruitcheese.jpg', 'braid-fruitcheese_thumbnail.jpg', 'Golden-brown flaky fruit paste braid ring on a white plate.', '8\" ring', '8-10 portions'),
(8, 'Viennoiserie', '2017-02-12 00:00:00', 'Pain au Chocolat', '<p>Golden appearance, exceptional flavour. Our Pain au Chocolat may as well be the definition of love at first sight. It\'s as crispy as it looks, plus it has an intense chocolate flavour.</p>', 'This product contains: Chocolate, egg, milk, &amp; wheat flour (gluten).', '20.00', 'pain-chocolat.jpg', 'pain-chocolat_thumbnail.jpg', 'Golden-brown pain au chocolat pastry with chocolate dripping from its layers on a wooden base.', '', '6 (100g) pieces'),
(9, 'Viennoiserie', '2017-06-30 00:00:00', 'Classic Croissant', '<p>A classically baked legend. Enjoy a fresh, sweet, buttery and flaky pastry. Carefully layered, our croissants make a great snack so you can enjoy along with your favourite drink.</p>', 'This product contains: Egg, milk, &amp; wheat flour (gluten).', '15.00', 'croissant-regular.jpg', 'croissant-regular_thumbnail.jpg', 'Golden-brown croissant pastry on a wooden base.', '', '6 (90g) pieces'),
(10, 'Viennoiserie', '2017-08-28 00:00:00', 'Marble Croissant', '<p>Vanilla or chocolate? We got rid of those indecision moments. We present you a marbled croissant, savour the same flakiness of our classic, in this double-flavoured version. Get a taste of a marvel marble croissant!</p>', 'This product contains: Chocolate, egg, milk, &amp; wheat flour (gluten).', '19.50', 'croissant-vanillachocolate.jpg', 'croissant-vanillachocolate_thumbnail.jpg', 'Golden and dark brown spiral croissant pastry on a wooden base.', '', '6 (90g) pieces'),
(11, 'Viennoiserie', '2017-10-11 00:00:00', 'Chocolate Croissant', '<p>A chocolaty take on a classic. Butter and chocolate dance in harmony to bring you a flaky pastry with a twist. Ideal to pair with your favourite beverage.</p>', 'This product contains: Chocolate, egg, dairy, &amp; wheat flour (gluten).', '19.50', 'croissant-chocolate.jpg', 'croissant-chocolate_thumbnail.jpg', 'Brown chocolate flavoured croissant pastry on a wooden base.', '', '6 (90g) pieces'),
(12, 'Viennoiserie', '2017-10-23 00:00:00', 'Red Velvet Croissant', '<p>Red is a sexy colour, so is our red velvet croissant. A new experience of a classic dessert: Buttery, flaky, chocolate flavoured, in red.</p>', 'This product contains: Chocolate, egg, milk, &amp; wheat flour (gluten).', '19.50', 'croissant-redvelvet.jpg', 'croissant-redvelvet_thumbnail.jpg', 'Red velvet croissant pastry on a wooden base.', '', '6 (90g) pieces'),
(13, 'Cake', '2014-06-10 00:00:00', 'Apple Cake', '<p>We redefined the word special with a delicious soft buttery cake. Apple pieces enhance its flavour and texture. A must for any apple lover.</p>', 'This product contains: Egg, milk, &amp; wheat flour (gluten).', '32.00', 'cake-apple.jpg', 'cake-apple_thumbnail.jpg', 'Dark-brown apple cake on a dark blue plate.', '8\" cake', '8-10 portions'),
(14, 'Cheesecake', '2016-12-22 00:00:00', 'New York Cheesecake', '<p>Our take on a classic. Dense yet sweet, smooth and creamy, rich and unique! That\'s our version of the cheesecake. Of course, it\'s New York style.</p>', 'This product contains: Egg, milk, &amp; wheat flour (gluten).', '30.00', 'cheesecake-newyork.jpg', 'cheesecake-newyork_thumbnail.jpg', 'Classic New York cheesecake on a dark-blue plate.', '8\" cheesecake', '8-10 portions'),
(15, 'Cheesecake', '2018-11-17 00:00:00', 'Cherry Cheesecake', '<p>An upgrade of our classic New York Cheesecake. Enjoy the Contrasting flavours and textures of our creamy cheesecake topped with natural organic cherries jam.</p>', 'This product contains: Egg, milk, &amp; wheat flour (gluten).', '35.00', 'cheesecake-cherry.jpg', 'cheesecake-cherry_thumbnail.jpg', 'Cheesecake topped with cherries and cherry jam on a dark blue plate.', '8\" cheesecake', '8-10 portions');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
