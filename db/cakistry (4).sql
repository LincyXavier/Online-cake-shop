-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 05:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakistry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `cakeid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `cakename` varchar(60) NOT NULL,
  `cakeimg` varchar(20) NOT NULL,
  `cakeprice` float NOT NULL,
  `cakequantity` varchar(30) NOT NULL,
  `cakeavailability` varchar(5) NOT NULL DEFAULT 'yes',
  `cakedescription` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`cakeid`, `catid`, `cakename`, `cakeimg`, `cakeprice`, `cakequantity`, `cakeavailability`, `cakedescription`) VALUES
(11, 2, 'BURGUNDY MOUNTAINS', 'tiercake2.jpg', 7999, '5 KG', 'yes', ' 3 tier cake for two rock climbers. Burgundy marble effect on the top and bottom tiers and hand painted mountains with edible gold leaf accents on the middle tier. Icing ropes were used to create climbing knots to bring it all together.'),
(12, 2, 'CHOCOLATE OREO DRIP CAKE', 'tiercake3.jpg', 2500, '2 KG', 'yes', 'Chocolate is not just an edible, it is an emotion. Whomsoever said this, said it right. Get yourself grooved on the tanginess of this yummy oreo flavored cake and get mesmerized on the tunes of chunky oreo bites. Get this cake ordered soon and have a heavenly feel.'),
(13, 2, '3 TIER WEDDING CAKE', 'tiercake4.jpg', 6999, '5 KG', 'yes', 'Flavor : Chocolate \nWhether you prefer traditional wedding cake or naked wedding cake. pretty roses are the perfect accessory for your wedding cake. The pure rich blend of chocolate between the soft cakes make it mouth watery. So why don\'t you make your special day the best with our best wedding cake!'),
(14, 2, 'EXTRAVAGANT 5 TIER CAKE', 'tiercake5.jpg', 8950, '7 KG', 'yes', 'If you are going to have a lot of guests at the wedding, offer them a five tier wedding cake. \nThe top tier and fourth tier is a  Nigerian Cake frosted with Vanilla Buttercream. The second tier is a classic Southern topped with a nutty cream cheese icing.The third tier is an authentic Southern Caramel Cake with the best caramel icing. The bottom tier is made up of rich white chocolate with rose petal flavor.'),
(15, 7, 'LOTUS BISCOFF CHEESE CAKE', 'eggless1.jpg', 950, '600 G', 'yes', '  Lotus Biscoff lovers you’re in for a treat!  A creamy cheesecake with an airy, mousse-like texture that screams Lotus in every bite!  Crushed Lotus biscuits in the crust, creamy Lotus in the filling, melted spread on top and a halo of Lotus crumbs to finish it off.  It’s a quadruple Lotus Biscoff delight'),
(16, 7, 'HONEY ALMOND CAKE ', 'eggless2.jpg', 890, '1 KG', 'yes', '  Soft and fluffy , this eggless honey almond cake is a delight! Almonds, honey and rose water come together to give a lovely Middle Easy touch. It is also healthy indeed!'),
(17, 7, 'RASMALAI CAKE', 'eggless3.jpg', 1049, '1 KG', 'yes', 'This festive rasmalai cake is a delicious fusion cake combining the best of both worlds making it an ultimate dessert to treat your sweet tooth ! And it\'s completely egg- free!'),
(18, 7, 'APPLE UPSIDE DOWN CAKE', 'eggless4.jpg', 350, '1/2 KG', 'yes', ' Eggless apple upside down cake is moist, dense and beautiful cake with hint of cardamon and cinamon. It\'s loaded with flavor.'),
(22, 5, 'SWAN THEME CAKE', 'swanthemecake.jpg', 1500, '1 KG', 'yes', 'This White Chocolate Cake is both decadent and delicious! White chocolate is incorporated into the cake layers, the frosting, and the drip for a stunning monochrome effect. The cake is soft, with a tender crumb and a buttery, white chocolate flavor.'),
(23, 5, 'HARRY POTTER THEME CAKE - RED VELVET FLAVOR', 'hptheme2.jpg', 1600, '1 KG', 'yes', 'If you are in hunt for a scrumptious cake to hearten your special someone, this Red Velvet is your best bet. Every bite of this luscious dessert would fall into the deep recesses of mind and stay in the memory FOREVER.It\'s a pure delight for the people who love cakes with richly whipped cream and vanilla flavour.'),
(29, 4, 'UNICORN CAKESICLES', 'cakesickle1.jpg', 50, 'PER PIECE', 'yes', 'Hand-painted white chocolate unicorns are filled with a creamy blend of white cake and vanilla frosting. These Unicorn Cakesicles make festive birthday party, baby shower, or Valentine’s Day desserts for kids of all ages.'),
(30, 4, 'CHOCOBERRY CAKESICLES', 'cakesickle2.jpg', 70, 'PER PIECE', 'yes', 'A perfect  treat–these chocolate covered strawberry cakesicles are gluten free, vegan and refined sugar free! It\'s rich chocolate is treat to all the chocolate lovers'),
(31, 4, 'COOKIES & CREAM CAKESICLES', 'cakesickle3.jpg', 45, 'PER PIECE', 'yes', 'Cookies & Cream Cakesicles are decadent cookies and cream truffle cake stuffed with Oreo cookie pieces, covered in premium chocolate and decorated bite sized Oreo cookies! And Chocolate is not just an edible, it is an emotion.'),
(32, 4, 'REDVELVET CAKESICLES', 'cakesickle4.jpg', 55, 'PER PIECE', 'yes', 'Cakesicles are all the rage right now. Layered with blushed cherry color and white cream cheese, this red velvet delicacy is undeniably irresistible. Top of the cakesicles are beautifully decorated .'),
(33, 5, 'NETFLIX THEME CAKE-STRAWBERRY FLAVOUR', 'netflixthemecake.jpg', 1650, '1 KG', 'yes', 'Strawberry Cake is full of sweet, fresh strawberry flavor! Moist strawberry cake layers are paired with a strawberry cream cheese frosting for the ultimate strawberry cake!This moist cake is bursting with natural strawberry flavor!  No food coloring or artificial flavors.'),
(34, 6, 'GRASSHOPPER JAR CAKE', 'jarcake1.jpg', 140, 'PER PIECE', 'yes', 'Grasshopper cake in a jar is a quick and easy vegan cake for all mint chocolate lovers! It is a delicious chocolate cookie crumble cake layer and mint flavored vegan whipped cream. A combination of cute colors . Added spirulina or matcha powder to the cream. The name of the cake derives from a cocktail .'),
(35, 6, 'STRAWBERRY SHORT CAKE', 'jarcake2.jpg', 200, 'PER PIECE', 'yes', 'Strawberry Shortcake in Mini Mason Jars uses a Duncan Hines French Vanilla shortcake. It\'s topped with slightly sweetened fresh strawberries and layered with silky smooth cream cheese whipped topping. This dessert is fresh, light, and lovely any time of year.'),
(36, 6, 'BISCOFF TRES LECHES CAKE', 'jarcake3.jpg', 160, 'PER PIECE', 'yes', 'A unique twist to the Tres Leches. The taste of the Biscoff cookies is so perfect with the addition of the milk blend! Softest sponge cake soaked in a sweetened lotus milk mixture They are absolutely delicious'),
(37, 6, 'HAZELNUT TIRAMISU CAKE', 'jarcake4.jpg', 150, 'PER PIECE', 'yes', 'Tiramisu is a classic Italian no-bake dessert made with layers of coffee soaked ladyfingers and irresistible mascarpone cream. This Hazelnut Tiramisu recipe features hazelnut flavored coffee and a layer of crushed candied hazelnuts for the most delicious version of the classic dessert.'),
(38, 1, 'BLACK FOREST CAKE', 'cake1.jpg', 650, '1 KG', 'yes', 'Black Forest Cake is a party cake.What says \"celebration\" more than dark chocolate cake, Kirsch flavored Morello cherries, and loads of sweet whipped cream? The perfect version has soft and tender cake layers wielding enough chocolate flavour without being overwhelming.'),
(40, 1, 'CHOCOLATE TRUFFLE CAKE', 'cake2.jpg', 799, '1 KG', 'yes', ' A chocolate layer cake recipe with dense, moist chocolate cake, silky chocolate truffle frosting and chocolate flakes.This Chocolate Truffle Cake will satisfy any chocolate lovers craving. It is dreamy chocolate heaven right there.'),
(41, 1, 'BUTTERSCOTCH CAKE', 'cake3.jpg', 749, '1 KG', 'yes', 'Super moist and tender brown sugar sour cream cake layers filled with thick homemade butterscotch sauce and finished with butterscotch buttercream!Gives a feel like warm sweetness that pairs so well with other autumn fruit and spices.Amazingly delicious cake everyone will love.'),
(42, 1, 'CARROT CAKE', 'cake4.jpg', 849, '1 KG', 'yes', 'Carrot Cake never seems to go out of style. This rich and moist spice cake, full of grated carrot, toasted nuts, and crushed pineapple, has great flavor, especially when covered with a tangy sweet Cream Cheese Frosting. The interesting part is that while those pretty orange flecks of grated carrot give the Carrot Cake color, sweetness, and a moist texture, its flavor is almost indistinguishable.'),
(45, 8, 'WHITE CAKE & CUPCAKES', 'combocake1.jpg', 3000, '1 KG + SET OF 8 CUPCAKES', 'yes', 'A white cake is similar to a yellow cake, but very white in colour. This is because a white cake has no egg yolks and only uses egg whites.    Ice  the cupcakes and cakes grey for gender reveals and have either blue or pink on the inside to reveal if the baby is a boy or a girl. Whatever the occasio'),
(46, 5, 'POLO SHIRT CAKE', 'polotheme.jpg', 2000, '1/2 KG', 'yes', 'Rainbow Cake .Rainbow cake is one of the most popular cakes all over the world. \nNot only is this rainbow cake beautiful and colorful, but it also tastes really delicious. Made from my famous white velvet cake recipe and easy buttercream, this rainbow cake makes the perfect special occasion cake!'),
(48, 3, 'CHOCOLATE CUPCAKES', 'cupcake1.jpg', 55, 'PER PIECE', 'yes', 'Chocolate Cupcakes with Strawberry Frosting are no doubt one of the BEST cupcakes.  You will get a rich chocolate cupcake, a naturally flavored strawberry frosting and a fresh chocolate covered strawberry and together they create one unforgettable cupcake!'),
(49, 3, 'PURPLE VELVET CUPCAKES', 'cupcake2.jpg', 45, 'PER PIECE', 'yes', 'These perfectly skinny purple beauties are a super fun alternative to the infamous red velvet cake that we all know and love. It has a mild chocolate flavour with a soft, velvety texture .'),
(50, 3, 'LEMON BLUEBERRY CUPCAKES', 'cupcake4.jpg', 60, 'PER PIECE', 'yes', 'These fluffy, tender Lemon Blueberry Cupcakes are really delicious. These cupcakes are great for so many occasions!  There is a yummy lemon cream cheese frosting. This lemon version is delicate in its lemon flavour and compliments the lemon blueberry flavour in the cupcakes so well. So much yum!'),
(52, 3, 'CHOCOLATE TRUFFLE CUPCAKES', 'cupcake3.jpg', 60, 'PER PIECE', 'yes', 'CHOCOLATE TRUFFLE CUPCAKES WITH SALTED CARAMEL BUTTERCREAM are some of the most delicious cupcakes. Filled the chocolate cupcakes with rich chocolate ganache, which gives them a soft, molten chocolate centre like a creamy chocolate truffle. To complement the dark chocolate, frosted salted caramel bu'),
(53, 8, 'BLUE VELVET CAKE & CAKESICLES', 'combocake2.jpg', 2850, '1 KG + 8 CAKESICLES', 'yes', 'The flavor of blue velvet cake and cakesicles is the same as a red velvet cake—fluffy vanilla cake with a hint of chocolate slathered in tangy cream cheese frosting. It\'s easy to make a blue velvet cake from scratch with a blend of cocoa powder, vinegar, buttermilk, and bright blue food coloring.'),
(55, 8, 'CHOCOLATE CAKE & CAKE IN A JAR', 'combocake3.jpg', 2550, '1 KG + 4 JAR CAKES', 'yes', 'With a super moist crumb and fudgy, yet light texture this is the best chocolate cake and cake in a jar! Topped with chocolate buttercream  and chocolate chips for 3x the chocolate flavor and layered a bunch of cherries and berries to give a blend of flavors ! Get this delicious dessert when you’re hosting the next family get-together, celebrating a birthday or wanting a bite of delicious chocolate cake after dinner'),
(56, 8, 'RED VELVET CAKE AND CAKE IN A JAR', 'combocake4.jpg', 3150, '1 KG + 10 CUPCAKES', 'yes', 'Red velvet cake has a unique buttery, chocolaty and tangy taste. Unlike many people claim, its not just tainted chocolate cake. The cocoa powder is used in less quantity and the taste develops by the mixing of vinegar and buttermilk with the cocoa powder.  And it tastes wow in just a word. it’s rich and chocolatey!\r\n'),
(57, 12, 'RICH CHOCO CAKE', 'cake1.jpg', 1000, '1 KG', 'yes', 'very tasty ,rich');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL,
  `catimg` varchar(40) NOT NULL,
  `available` varchar(5) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `catimg`, `available`) VALUES
(1, 'CAKES', 'cakecake.jpg', 'YES'),
(2, 'TIER CAKES', 'tiercakemain.jpg', 'yes'),
(3, 'CUP CAKES', 'cupcake13.jpg', 'yes'),
(4, 'CAKESICLES', 'cakesickles.jpg', 'yes'),
(5, 'THEME CAKES', 'theme cake.jpg', 'yes'),
(6, 'JAR CAKES', 'jarcakes.jpg', 'yes'),
(7, 'VEGAN CAKES', 'egglessmain.jpg', 'yes'),
(8, 'COMBO', 'combocake.jpg', 'yes'),
(12, 'LUXURY CAKE', 'cake2.jpg', 'yes'),
(13, 'TIER CAKE', 'cake3.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fname`, `lname`, `username`, `password`, `email`, `phno`) VALUES
(1, 'ANJANA', 'KRISHNA', 'anjana', 'anjana', 'anjana123@gmail.com', 9876543210),
(2, 'LINCY', 'XAVIER', 'lincy', 'lincy', 'lincy123@gmail.com', 9988776655),
(3, 'REVATHY', 'V S', 'revathy', 'revathy', 'revathy123@gmail.com', 9977331122),
(4, 'SAYANA', 'T S', 'sayana', 'sayana', 'sayana123@gmail.com', 9898767654),
(5, 'VISHNUPRIYA', 'S', 'vishnupriya', 'vishnupriya', 'vichu123@gmail.com', 9090656556),
(10, 'rahul', 'v s', 'rahul', '1234', 'rahul@123', 8547196294),
(11, 'anu', 'p', 'anus', 'anu', 'anup@gmail.com', 9562230284),
(12, 'anju', 's', 'anju', 'anju', 'anju@gmail.com', 8529637410);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `oid`, `pid`, `feedback`) VALUES
(18, 1, 46, 'HAPPY...!'),
(19, 2, 45, 'VERY NICE...!'),
(20, 8, 50, 'HAPPY...!\r\n'),
(21, 9, 38, 'VERY NICE...!'),
(23, 10, 16, 'HAPPY...!'),
(24, 15, 13, 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `adname` varchar(20) NOT NULL,
  `adpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`adname`, `adpass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rqddate` date NOT NULL,
  `cakeprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`oid`, `pid`, `quantity`, `rqddate`, `cakeprice`) VALUES
(1, 46, 1, '0000-00-00', 2000),
(1, 49, 1, '0000-00-00', 45),
(1, 22, 1, '0000-00-00', 1500),
(2, 45, 1, '0000-00-00', 3000),
(2, 35, 1, '0000-00-00', 200),
(3, 30, 1, '0000-00-00', 70),
(3, 33, 1, '0000-00-00', 1650),
(4, 17, 1, '0000-00-00', 1049),
(4, 53, 1, '0000-00-00', 2850),
(5, 38, 1, '0000-00-00', 650),
(5, 23, 1, '0000-00-00', 1600),
(5, 12, 1, '0000-00-00', 2500),
(6, 49, 1, '0000-00-00', 45),
(6, 46, 1, '0000-00-00', 2000),
(8, 38, 10, '0000-00-00', 650),
(8, 50, 1, '0000-00-00', 60),
(9, 38, 1, '0000-00-00', 650),
(9, 48, 5, '0000-00-00', 55),
(10, 16, 1, '0000-00-00', 890),
(10, 34, 4, '0000-00-00', 140),
(11, 15, 1, '0000-00-00', 950),
(11, 48, 1, '0000-00-00', 55),
(12, 49, 1, '0000-00-00', 45),
(12, 38, 10, '0000-00-00', 650),
(13, 50, 10, '0000-00-00', 60),
(14, 22, 2, '0000-00-00', 1500),
(15, 15, 3, '0000-00-00', 950),
(15, 13, 1, '0000-00-00', 6999);

-- --------------------------------------------------------

--
-- Table structure for table `ordermaster`
--

CREATE TABLE `ordermaster` (
  `oid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `ordate` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordermaster`
--

INSERT INTO `ordermaster` (`oid`, `cid`, `ordate`, `status`, `amount`) VALUES
(1, 1, '2022-01-09', 'Delivered', 3545),
(2, 2, '2022-01-09', 'Delivered', 3200),
(3, 3, '2022-01-09', 'ORDERED', 1720),
(4, 4, '2022-01-09', 'ORDERED', 3899),
(5, 5, '2022-01-09', 'ORDERED', 4750),
(6, 2, '2022-01-09', 'Delivered', 2045),
(7, 2, '2022-01-09', 'ORDERED', 45),
(8, 3, '2022-01-10', 'Delivered', 6560),
(9, 4, '2022-01-10', 'Delivered', 925),
(10, 5, '2022-01-10', 'Delivered', 1450),
(11, 1, '2022-01-10', 'Packed', 1005),
(12, 2, '2022-01-10', 'Delivered', 6545),
(13, 10, '2022-01-10', 'ORDERED', 600),
(14, 11, '2022-01-10', 'Packed', 3000),
(15, 12, '2022-01-10', 'Delivered', 9849);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `phno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipid`, `cid`, `oid`, `name`, `hname`, `street`, `landmark`, `pincode`, `phno`) VALUES
(1, 1, 1, 'Anjana', 'abcd house', 'Kandanad', 'Kandanad', 682307, 9876543210),
(2, 2, 2, 'Lincy', 'pqrs house', 'Kochupally', 'Kochupally', 682307, 9988776655),
(3, 3, 3, 'Revathy', 'asdfg house', 'Vaikom', 'Vaikom', 682307, 9977331122),
(4, 4, 4, 'Sayana', 'hijk house', 'Kottayam', 'Kottayam', 682307, 9898767654),
(5, 5, 5, 'Vishnupriya', 'tuvw house', 'Kanjiramattom', 'Kanjiramattom', 682307, 9090656556),
(12, 2, 12, 'ANJU', 'abcd', 'abcd', 'abcd', 682307, 9988776655),
(13, 10, 13, 'rahul', 'abcd', 'vaikom', 'vaikom', 684352, 8547196294),
(14, 11, 14, 'anu', 'abcde', 'abcde', 'abcde', 686605, 9562230284),
(15, 12, 15, 'anju', 'abcd', 'abcd', 'qwer', 123654, 8529637410);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`cakeid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`adname`) USING BTREE;

--
-- Indexes for table `ordermaster`
--
ALTER TABLE `ordermaster`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `cakeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ordermaster`
--
ALTER TABLE `ordermaster`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
