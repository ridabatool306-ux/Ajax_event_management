-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 04:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` bigint(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `clientname` varchar(255) NOT NULL,
  `bookingemail` varchar(255) NOT NULL,
  `bookingcontact` varchar(255) NOT NULL,
  `occassiontitle` varchar(255) NOT NULL,
  `occassiondate` varchar(255) NOT NULL,
  `occassiontime` varchar(255) NOT NULL,
  `numberofseats` varchar(255) NOT NULL,
  `venue_name` varchar(255) NOT NULL,
  `bookingdescription` varchar(255) NOT NULL,
  `occassiontype` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `category_name`, `clientname`, `bookingemail`, `bookingcontact`, `occassiontitle`, `occassiondate`, `occassiontime`, `numberofseats`, `venue_name`, `bookingdescription`, `occassiontype`, `role`) VALUES
(3, '2', 'Evelyn Mullen', 'jyba@mailinator.com', '8', 'Asperiores sed persp', '1986-01-29', '16:19', '871', '2', 'Eum quia vero nisi p', 'public', ''),
(4, '2', 'Margaret Randall', 'lymejiduli@mailinator.com', '21', 'Cupidatat explicabo', '2001-07-16', '13:26', '809', '4', 'Corrupti qui perfer', 'public', ''),
(5, '2', 'Imelda Jennings', 'muqob@mailinator.com', '46', 'Facilis quaerat et s', '2012-09-19', '14:28', '539', '4', 'Adipisicing est ea p', 'public', ''),
(6, '2', 'Patience Knight', 'nuwawokuk@mailinator.com', '36', 'Et duis excepturi as', '1974-01-15', '18:30', '610', '3', 'Optio enim tempore', 'public', 'pending'),
(7, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(8, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(9, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(10, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(11, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(12, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(13, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(14, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(15, '2', 'Noel Osborne', 'ridabatool306@gmail.com', '85', 'Tempora consequatur ', '2007-09-10', '03:24', '757', '4', 'In nihil mollitia in', 'public', 'pending'),
(16, '2', 'Ann Villarreal', 'ridabatool306@gmail.com', '18', 'Minima nihil ad eos', '2023-08-15', '20:57', '371', '4', 'Excepteur velit veni', 'private', 'pending'),
(17, '2', 'Ann Villarreal', 'ridabatool306@gmail.com', '18', 'Minima nihil ad eos', '2023-08-15', '20:57', '371', '4', 'Excepteur velit veni', 'private', 'pending'),
(18, '2', 'Ann Villarreal', 'ridabatool306@gmail.com', '18', 'Minima nihil ad eos', '2023-08-15', '20:57', '371', '4', 'Excepteur velit veni', 'private', 'pending'),
(19, '2', 'Alexandra Yates', 'ridabatool306@gmail.com', '43', 'Voluptatibus volupta', '1990-03-18', '02:50', '262', '3', 'Totam voluptatum con', 'public', ''),
(20, '2', 'Cameran Townsend', 'ridabatool306@gmail.com', '35', 'Ab et tenetur itaque', '1988-05-18', '16:06', '833', '3', 'Officia asperiores a', 'public', ''),
(21, '3', 'Maryam Salas', 'gonaxybe@mailinator.com', '14', 'Adipisci ea doloremq', '1977-07-20', '21:16', '508', '5', 'Sunt in eligendi aut', 'private', ''),
(22, '3', 'Hilary Michael', 'gukabyh@mailinator.com', '14', 'Nulla eos Nam sint', '1983-06-24', '02:02', '23', '5', 'Nesciunt iste velit', 'private', ''),
(23, '3', 'Kyra Franco', 'ridabatool306@gmail.com', '25', 'Anim non in at ullam', '2000-01-11', '10:26', '21', '3', 'Enim nostrum dolor l', 'public', ''),
(24, '4', 'Seth Vargas', 'ridabatool306@gmail.com', '56', 'Repellendus Veniam', '2001-06-26', '22:08', '736', '5', 'Eum consequatur Ad ', 'public', ''),
(25, '4', 'Seth Vargas', 'ridabatool306@gmail.com', '56', 'Repellendus Veniam', '2001-06-26', '22:08', '736', '5', 'Eum consequatur Ad ', 'public', ''),
(27, '4', 'Seth Vargas', 'ridabatool306@gmail.com', '56', 'Repellendus Veniam', '2001-06-26', '22:08', '736', '5', 'Eum consequatur Ad ', 'public', ''),
(29, '4', 'Wang Christensen', 'segicugido@mailinator.com', '85', 'Praesentium cum veli', '1975-09-15', '23:39', '815', '5', 'Voluptatem molestia', 'private', 'pending'),
(30, '4', 'Tanek Holcomb', 'nalakohyw@mailinator.com', '13', 'Eveniet culpa illo', '1977-10-14', '07:31', '754', '3', 'Est qui ex aperiam e', 'public', 'pending'),
(31, '3', 'Kaseem Cruz', 'rimokorugy@mailinator.com', '17', 'Enim eligendi omnis ', '1986-10-14', '10:10', '665', '3', 'Eu sapiente incididu', 'public', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `categorydescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `categoryname`, `categorydescription`) VALUES
(3, 'Josiah Mccarty', 'At quidem a quas vel'),
(4, 'Walter Barnes', 'Corrupti consequatu');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` bigint(255) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `citydescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `cityname`, `citydescription`) VALUES
(1, 'Faisalabad', 'sgfjHASFusvjawskgw'),
(2, 'lahore', 'ajgSFVHWSGKW'),
(4, 'Rama David', 'Velit ipsam modi ex ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `subject`, `email`, `message`) VALUES
(1, 'Silas', 'Kane', 'Adipisci quaerat cor', 'zunyt@mailinator.com', 'Consequuntur et et c'),
(2, 'Ralph', 'Velazquez', 'Dolorem quasi magni ', 'wukoz@mailinator.com', 'Ducimus officia odi'),
(3, 'Rudyard', 'Chandler', 'Sequi exercitationem', 'cumatevut@mailinator.com', 'Et in sunt deleniti '),
(4, 'Beau', 'Jefferson', 'Fugit sed et velit ', 'pekycy@mailinator.com', 'Omnis qui unde venia'),
(5, 'Gloria', 'Hicks', 'Quod eius aute dicta', 'sunasyki@mailinator.com', 'Lorem velit ducimus');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `designer_id` bigint(255) NOT NULL,
  `designerfname` varchar(255) NOT NULL,
  `designerlname` varchar(255) NOT NULL,
  `designeremail` varchar(255) NOT NULL,
  `designerdob` varchar(255) NOT NULL,
  `designergender` varchar(255) NOT NULL,
  `designerphone` varchar(255) NOT NULL,
  `designercity` varchar(255) NOT NULL,
  `designerexperience` varchar(255) NOT NULL,
  `designerorderdesign` varchar(255) NOT NULL,
  `designerdescription` varchar(255) NOT NULL,
  `designercompany` varchar(255) NOT NULL,
  `designercolor` varchar(255) NOT NULL,
  `designertools` varchar(255) NOT NULL,
  `designerwrittencontent` varchar(255) NOT NULL,
  `designernumdesign` varchar(255) NOT NULL,
  `designerpassword` varchar(255) NOT NULL,
  `designerconfirmpassword` varchar(255) NOT NULL,
  `designeraddress` varchar(255) NOT NULL,
  `designerpic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`designer_id`, `designerfname`, `designerlname`, `designeremail`, `designerdob`, `designergender`, `designerphone`, `designercity`, `designerexperience`, `designerorderdesign`, `designerdescription`, `designercompany`, `designercolor`, `designertools`, `designerwrittencontent`, `designernumdesign`, `designerpassword`, `designerconfirmpassword`, `designeraddress`, `designerpic`, `status`) VALUES
(3, 'Oliver Nguyen', 'Pamela Weaver', 'fytofozy@mailinator.com', '1974-03-09', 'others', '28', 'Reprehenderit irure ', '76', 'Cum iusto inventore ', 'Culpa quibusdam tem', 'Soto Middleton Plc', '#477f8d', 'Ipsum saepe ipsa ma', 'Voluptatem quia non ', '5', 'Et illum beatae ut ', 'Et illum beatae ut ', 'Enim dicta dolorem n', '84663.jpeg', 'pending'),
(4, 'Brynne Ford', 'Nita Alford', 'qyrulizax@mailinator.com', '1984-05-17', 'female', '14', 'Et laboris aut harum', '37', 'Nostrum fuga Eum ac', 'Qui nostrud quia dol', 'Key Keller Co', '#e5b1e9', 'Sit reprehenderit ', 'Reprehenderit conseq', '57', 'Eos labore ullamco ', 'Eos labore ullamco ', 'Aut veritatis adipis', '41466.jpg', 'confirm'),
(5, 'Libby Macias', 'Carter Lowe', 'ridabatool306@gmail.com', '1988-10-06', 'male', '53', 'Hic et nostrum quis ', '74', 'Dolores non aut vero', 'Laborum Beatae quo ', 'Hudson and Warner Inc', '#50890b', 'Commodo amet deseru', 'Id tempor perferendi', '30', 'Ut et alias molestia', 'Ut et alias molestia', 'Beatae enim irure re', '25270.jpg', 'confirm'),
(6, 'Tatyana Ellison', 'Uriel Houston', 'denigydif@mailinator.com', '1983-04-27', 'female', '89', 'Autem iusto aliquid ', '56', 'Eius cillum voluptat', 'Temporibus laborum ', 'Poole and Eaton Plc', '#005df0', 'Nisi proident in qu', 'Ea iste officia cum ', '32', 'Nemo autem ullamco o', 'Nemo autem ullamco o', 'Minim n', '45613.jpeg', 'confirm'),
(7, 'Clementine Montgomery', 'Serina Collins', 'xizovitut@mailinator.com', '1987-11-24', 'others', '12', 'Ut pariatur Ut qui ', '27', 'Anim temporibus id ', 'Esse minima consequ', 'Kirk Lawson Traders', '#c2efdd', 'Est eu sed enim veni', 'Quos fugit dicta no', '72', 'Laborum Quidem alia', 'Laborum Quidem alia', 'Vel assumenda illum', '37038.jpg', 'confirm'),
(8, 'Katell Montoya', 'Tallulah Bond', 'vewutalevi@mailinator.com', '2008-11-19', 'female', '13', 'Nemo voluptatibus el', '70', 'Non accusantium corp', 'Dolor rerum praesent', 'Mccoy Singleton Traders', '#a98e43', 'Est aute rerum labor', 'Quae cumque nisi lor', '13', 'Pariatur Sunt duci', 'Pariatur Sunt duci', 'Non eum fuga Dolor ', '7309.jpg', 'confirm'),
(9, 'Katell Montoya', 'Tallulah Bond', 'vewutalevi@mailinator.com', '2008-11-19', 'female', '13', 'Nemo voluptatibus el', '70', 'Non accusantium corp', 'Dolor rerum praesent', 'Mccoy Singleton Traders', '#a98e43', 'Est aute rerum labor', 'Quae cumque nisi lor', '13', 'Pariatur Sunt duci', 'Pariatur Sunt duci', 'Non eum fuga Dolor ', '76477.jpg', 'confirm'),
(10, 'Nigel Cantrell', 'Keith Cannon', 'rysuzihos@mailinator.com', '2011-02-15', 'others', '33', 'Ut nihil labore aspe', '37', 'Voluptate id volupt', 'Qui error reprehende', 'Nielsen Booth Associates', '#8fec7b', 'Elit quia quae cons', 'Facere dignissimos r', '25', 'Sapiente in deleniti', 'Sapiente in deleniti', 'Neque qui id eius i', '18768.jpg', 'confirm'),
(11, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', '2013-12-07', 'female', '56', 'Nihil et voluptatem', '30', 'Tenetur pariatur Mo', 'Numquam sunt soluta', 'Jacobs and Mathis Trading', '#c17dcd', 'Id enim sint exercit', 'Optio rerum nulla i', '40', 'Perferendis dignissi', 'Perferendis dignissi', 'Sit pariatur Nihil ', '39827.jpeg', 'confirm'),
(12, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', '2013-12-07', 'female', '56', 'Nihil et voluptatem', '30', 'Tenetur pariatur Mo', 'Numquam sunt soluta', 'Jacobs and Mathis Trading', '#c17dcd', 'Id enim sint exercit', 'Optio rerum nulla i', '40', 'Perferendis dignissi', 'Perferendis dignissi', 'Sit pariatur Nihil ', '69225.jpeg', 'confirm'),
(13, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', '2013-12-07', 'female', '56', 'Nihil et voluptatem', '30', 'Tenetur pariatur Mo', 'Numquam sunt soluta', 'Jacobs and Mathis Trading', '#c17dcd', 'Id enim sint exercit', 'Optio rerum nulla i', '40', 'Perferendis dignissi', 'Perferendis dignissi', 'Sit pariatur Nihil ', '29353.jpeg', 'confirm'),
(14, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', '2013-12-07', 'female', '56', 'Nihil et voluptatem', '30', 'Tenetur pariatur Mo', 'Numquam sunt soluta', 'Jacobs and Mathis Trading', '#c17dcd', 'Id enim sint exercit', 'Optio rerum nulla i', '40', 'Perferendis dignissi', 'Perferendis dignissi', 'Sit pariatur Nihil ', '58256.jpeg', 'confirm'),
(15, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', '2013-12-07', 'female', '56', 'Nihil et voluptatem', '30', 'Tenetur pariatur Mo', 'Numquam sunt soluta', 'Jacobs and Mathis Trading', '#c17dcd', 'Id enim sint exercit', 'Optio rerum nulla i', '40', 'Perferendis dignissi', 'Perferendis dignissi', 'Sit pariatur Nihil ', '22356.jpeg', 'confirm'),
(16, 'Thane Davenport', 'Julian Rosa', 'wanase@mailinator.com', '2009-12-07', 'others', '16', 'Magna adipisci sit e', '16', 'Adipisicing fugit s', 'Et sit earum ullamc', 'Mccoy and Rivera Inc', '#ad32be', 'Fugit deserunt magn', 'Dolores fuga Conseq', '100', 'Ut enim voluptatem ', 'Ut enim voluptatem ', 'Hic corporis non et ', '20805.jpeg', 'confirm'),
(17, 'Thane Davenport', 'Julian Rosa', 'wanase@mailinator.com', '2009-12-07', 'others', '16', 'Magna adipisci sit e', '16', 'Adipisicing fugit s', 'Et sit earum ullamc', 'Mccoy and Rivera Inc', '#ad32be', 'Fugit deserunt magn', 'Dolores fuga Conseq', '100', 'Ut enim voluptatem ', 'Ut enim voluptatem ', 'Hic corporis non et ', '39349.jpeg', 'confirm'),
(18, 'Thane Davenport', 'Julian Rosa', 'wanase@mailinator.com', '2009-12-07', 'others', '16', 'Magna adipisci sit e', '16', 'Adipisicing fugit s', 'Et sit earum ullamc', 'Mccoy and Rivera Inc', '#ad32be', 'Fugit deserunt magn', 'Dolores fuga Conseq', '100', 'Ut enim voluptatem ', 'Ut enim voluptatem ', 'Hic corporis non et ', '68105.jpeg', 'confirm'),
(19, 'Dylan Gill', 'Malcolm Vang', 'husora@mailinator.com', '2008-06-08', 'others', '36', 'Et cillum et tempore', '54', 'Enim omnis aut conse', 'Consequat Distincti', 'Nelson and Banks Inc', '#9ad666', 'Fuga Error id persp', 'Deleniti nihil susci', '5', 'Ut dolorem qui esse', 'Ut dolorem qui esse', 'Exercitation fugiat', '86293.jpeg', 'confirm'),
(20, 'Dylan Gill', 'Malcolm Vang', 'husora@mailinator.com', '2008-06-08', 'others', '36', 'Et cillum et tempore', '54', 'Enim omnis aut conse', 'Consequat Distincti', 'Nelson and Banks Inc', '#9ad666', 'Fuga Error id persp', 'Deleniti nihil susci', '5', 'Ut dolorem qui esse', 'Ut dolorem qui esse', 'Exercitation fugiat', '10350.jpeg', 'confirm'),
(21, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', '1990-04-23', 'male', '10', 'Itaque deserunt in i', '46', 'Omnis nihil ipsam vo', 'Omnis enim odio quia', 'Dotson Collins Co', '#9b1837', 'Amet exercitation v', 'Fugiat animi dolore', '94', 'Architecto deserunt ', 'Architecto deserunt ', 'Impedit aliquam pla', '48326.jpg', 'confirm'),
(22, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', '1990-04-23', 'male', '10', 'Itaque deserunt in i', '46', 'Omnis nihil ipsam vo', 'Omnis enim odio quia', 'Dotson Collins Co', '#9b1837', 'Amet exercitation v', 'Fugiat animi dolore', '94', 'Architecto deserunt ', 'Architecto deserunt ', 'Impedit aliquam pla', '37139.jpg', 'confirm'),
(23, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', '1990-04-23', 'male', '10', 'Itaque deserunt in i', '46', 'Omnis nihil ipsam vo', 'Omnis enim odio quia', 'Dotson Collins Co', '#9b1837', 'Amet exercitation v', 'Fugiat animi dolore', '94', 'Architecto deserunt ', 'Architecto deserunt ', 'Impedit aliquam pla', '54203.jpg', 'confirm'),
(24, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', '1990-04-23', 'male', '10', 'Itaque deserunt in i', '46', 'Omnis nihil ipsam vo', 'Omnis enim odio quia', 'Dotson Collins Co', '#9b1837', 'Amet exercitation v', 'Fugiat animi dolore', '94', 'Architecto deserunt ', 'Architecto deserunt ', 'Impedit aliquam pla', '53049.jpg', 'confirm'),
(25, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', '1990-04-23', 'male', '10', 'Itaque deserunt in i', '46', 'Omnis nihil ipsam vo', 'Omnis enim odio quia', 'Dotson Collins Co', '#9b1837', 'Amet exercitation v', 'Fugiat animi dolore', '94', 'Architecto deserunt ', 'Architecto deserunt ', 'Impedit aliquam pla', '66602.jpg', 'confirm'),
(26, 'Emerald Church', 'Len Blanchard', 'wiwewyqiby@mailinator.com', '1991-09-10', 'female', '86', 'Voluptatem exceptur', '17', 'Expedita sapiente di', 'Lorem sed voluptas a', 'Delacruz and Mcintyre Co', '#eb2726', 'Eligendi expedita of', 'Rerum aut rerum tota', '71', 'Odio asperiores qui ', 'Odio asperiores qui ', 'Rerum adipisicing mi', '49700.jpeg', 'confirm'),
(27, 'Emerald Church', 'Len Blanchard', 'wiwewyqiby@mailinator.com', '1991-09-10', 'female', '86', 'Voluptatem exceptur', '17', 'Expedita sapiente di', 'Lorem sed voluptas a', 'Delacruz and Mcintyre Co', '#eb2726', 'Eligendi expedita of', 'Rerum aut rerum tota', '71', 'Odio asperiores qui ', 'Odio asperiores qui ', 'Rerum adipisicing mi', '10215.jpeg', 'confirm'),
(28, 'Emerald Church', 'Len Blanchard', 'wiwewyqiby@mailinator.com', '1991-09-10', 'female', '86', 'Voluptatem exceptur', '17', 'Expedita sapiente di', 'Lorem sed voluptas a', 'Delacruz and Mcintyre Co', '#eb2726', 'Eligendi expedita of', 'Rerum aut rerum tota', '71', 'Odio asperiores qui ', 'Odio asperiores qui ', 'Rerum adipisicing mi', '21436.jpeg', 'confirm'),
(29, 'Jordan Salas', 'Judah Kim', 'depezos@mailinator.com', '1977-10-12', 'male', '47', 'Ut dolores obcaecati', '4', 'Fuga Assumenda temp', 'Consequatur aut vol', 'Bauer Bradley Plc', '#348b91', 'Consectetur et enim', 'Explicabo Ipsam mol', '9', 'Qui quo exercitation', 'Qui quo exercitation', 'Dolor aspernatur sim', '95305.jpeg', 'confirm'),
(30, 'Kamal Little', 'Reagan Barrera', 'dutup@mailinator.com', '1979-03-19', 'others', '80', 'Necessitatibus eum e', '88', 'Quis nihil pariatur', 'Officia libero et ma', 'Sellers Russell Trading', '#fd8444', 'At ab ut provident ', 'Nam est deleniti lab', '60', 'Necessitatibus dolor', 'Necessitatibus dolor', 'Minima placeat sunt', '47016.jpeg', 'confirm'),
(31, 'Alexandra Crosby', 'Daria Puckett', 'wibaxe@mailinator.com', '2003-06-22', 'female', '97', 'Ex vero quaerat aut ', '66', 'Dolores quia sit odi', 'Irure dolores esse o', 'Oneill Jennings Traders', '#516eda', 'Ab itaque voluptatib', 'Autem id ipsam praes', '64', 'Necessitatibus in fu', 'Necessitatibus in fu', 'Voluptas a non provi', '10145.jpeg', 'confirm'),
(32, 'Kirby Powell', 'Benjamin Robles', 'fesiwobaqy@mailinator.com', '2013-08-07', 'male', '52', 'Aut quo sed aperiam ', '71', 'Ipsa esse labore pe', 'Consequuntur nulla v', 'Kent and Miller LLC', '#65d24c', 'Libero ratione eum v', 'Voluptatibus quia en', '49', 'Dolorum magni est c', 'Dolorum magni est c', 'Vero delectus incid', '1814.jpeg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` bigint(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `eventtitle` varchar(255) NOT NULL,
  `eventdate` varchar(255) NOT NULL,
  `eventdescription` varchar(255) NOT NULL,
  `eventpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `categoryname`, `eventtitle`, `eventdate`, `eventdescription`, `eventpic`) VALUES
(1, '2', 'Libero numquam reici', '1974-08-08', 'Eligendi pariatur E', 'a:4:{i:0;s:8:\"9666.jpg\";i:1;s:10:\"34408.jpeg\";i:2;s:10:\"94582.jpeg\";i:3;s:9:\"87483.jpg\";}'),
(3, '', 'Inventore rem ut et ', '1973-01-16', 'Sunt dolore ', 'a:3:{i:0;s:10:\"73131.jpeg\";i:1;s:9:\"69385.jpg\";i:2;s:10:\"73633.jpeg\";}'),
(4, '', 'Dolorem labore enim ', '1983-11-19', 'Earum ev', 'a:3:{i:0;s:9:\"58051.jpg\";i:1;s:9:\"96480.jpg\";i:2;s:9:\"45731.jpg\";}'),
(5, '', 'In sint adipisicing', '1998-03-31', 'Quas dolo', 'a:3:{i:0;s:9:\"36008.jpg\";i:1;s:10:\"19021.jpeg\";i:2;s:10:\"29448.jpeg\";}'),
(6, '4', 'Maiores facilis sint', '2011-04-19', 'Sed elit enim at sa', 'a:3:{i:0;s:9:\"15111.jpg\";i:1;s:10:\"32667.jpeg\";i:2;s:10:\"92965.jpeg\";}');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `id` bigint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`id`, `firstname`, `lastname`, `email`, `password`, `confirmpassword`, `role`) VALUES
(1, 'Rida ', 'Batool', 'admin@gmail.com', 'admin123', 'admin123', 'admin'),
(2, 'Francesca Woodard', 'Patrick Sloan', 'titoz@mailinator.com', 'Reiciendis ut laboru', 'Reiciendis ut laboru', 'admin'),
(3, 'Brynne Ford', 'Nita Alford', 'qyrulizax@mailinator.com', 'Eos labore ullamco ', 'Eos labore ullamco ', 'designer'),
(4, 'Hermione Yang', 'Stella Armstrong', 'jutuqo@mailinator.com', 'Similique assumenda ', 'Similique assumenda ', 'planner'),
(5, 'Cheryl', 'Montoya', 'sovapaxaja@mailinator.com', 'Dolor est ea ullam ', 'Dolor est ea ullam ', 'admin'),
(6, 'Xavier', 'Gross', 'duzepywuhi@mailinator.com', 'Corrupti quo ration', 'Corrupti quo ration', 'admin'),
(7, 'Hasad', 'Levine', 'jevyputik@mailinator.com', 'Et impedit enim fug', 'Et impedit enim fug', 'client'),
(8, 'Libby Macias', 'Carter Lowe', 'ridabatool306@gmail.com', 'Ut et alias molestia', 'Ut et alias molestia', 'designer'),
(9, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(10, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(11, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(12, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(13, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(14, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(15, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(16, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(17, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(18, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(19, 'Mariam Mcfarland', 'Stella Spears', 'vuhelesy@mailinator.com', 'Incididunt repudiand', 'Incididunt repudiand', 'planner'),
(20, 'Benedict Curry', 'Maite Pitts', 'motobuxy@mailinator.com', 'Consequat Sapiente ', 'Consequat Sapiente ', 'planner'),
(21, 'Benedict Curry', 'Maite Pitts', 'motobuxy@mailinator.com', 'Consequat Sapiente ', 'Consequat Sapiente ', 'planner'),
(22, 'Benedict Curry', 'Maite Pitts', 'motobuxy@mailinator.com', 'Consequat Sapiente ', 'Consequat Sapiente ', 'planner'),
(23, 'Benedict Curry', 'Maite Pitts', 'motobuxy@mailinator.com', 'Consequat Sapiente ', 'Consequat Sapiente ', 'planner'),
(24, 'Benedict Curry', 'Maite Pitts', 'motobuxy@mailinator.com', 'Consequat Sapiente ', 'Consequat Sapiente ', 'planner'),
(25, 'Benedict Curry', 'Maite Pitts', 'motobuxy@mailinator.com', 'Consequat Sapiente ', 'Consequat Sapiente ', 'planner'),
(28, 'Charde Parks', 'Fritz Hammond', 'gexa@mailinator.com', 'Et est cillum ex cul', 'Et est cillum ex cul', 'planner'),
(29, 'Charde Parks', 'Fritz Hammond', 'gexa@mailinator.com', 'Et est cillum ex cul', 'Et est cillum ex cul', 'planner'),
(30, 'Charde Parks', 'Fritz Hammond', 'gexa@mailinator.com', 'Et est cillum ex cul', 'Et est cillum ex cul', 'planner'),
(31, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(32, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(33, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(34, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(35, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(36, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(37, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(38, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(39, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(40, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(41, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(42, 'Giacomo Wynn', 'Sheila Kinney', 'hevogoqyj@mailinator.com', 'Lorem velit error ex', 'Lorem velit error ex', 'planner'),
(43, 'Amena Gamble', 'Tatyana Bender', 'bagimygume@mailinator.com', 'Ad rerum minima est ', 'Ad rerum minima est ', 'planner'),
(44, 'Amena Gamble', 'Tatyana Bender', 'bagimygume@mailinator.com', 'Ad rerum minima est ', 'Ad rerum minima est ', 'planner'),
(45, 'Amena Gamble', 'Tatyana Bender', 'bagimygume@mailinator.com', 'Ad rerum minima est ', 'Ad rerum minima est ', 'planner'),
(46, 'Paul Conway', 'Kane Buck', 'ciqociwec@mailinator.com', 'Et elit quia et in ', 'Et elit quia et in ', 'planner'),
(47, 'Brielle Gill', 'Jack Ortiz', 'rydugejyl@mailinator.com', 'Ad eius ipsum dolor ', 'Ad eius ipsum dolor ', 'planner'),
(48, 'Casey Berry', 'Todd Potter', 'pucawe@mailinator.com', 'Et maxime explicabo', 'Et maxime explicabo', 'planner'),
(49, 'Adam Armstrong', 'Colton Tillman', 'gogoqave@mailinator.com', 'Ad esse cumque cum ', 'Ad esse cumque cum ', 'planner'),
(50, 'Tatyana Ellison', 'Uriel Houston', 'denigydif@mailinator.com', 'Nemo autem ullamco o', 'Nemo autem ullamco o', 'designer'),
(51, 'Kamal Mccarty', 'John Foster', 'rurelot@mailinator.com', 'Cupidatat qui irure ', 'Cupidatat qui irure ', 'volunteer'),
(52, 'Kalia Weaver', 'Alma Bass', 'gehijaxemy@mailinator.com', 'Sit necessitatibus e', 'Sit necessitatibus e', 'volunteer'),
(53, 'Thane', 'Curry', 'wyzewumyqe@mailinator.com', 'Officiis tempora cil', 'Officiis tempora cil', 'admin'),
(54, 'Yasir', 'Puckett', 'begeti@mailinator.com', 'Minim corrupti odit', 'Minim corrupti odit', 'admin'),
(55, 'Clementine Montgomery', 'Serina Collins', 'xizovitut@mailinator.com', 'Laborum Quidem alia', 'Laborum Quidem alia', 'designer'),
(56, 'Katell Montoya', 'Tallulah Bond', 'vewutalevi@mailinator.com', 'Pariatur Sunt duci', 'Pariatur Sunt duci', 'designer'),
(57, 'Katell Montoya', 'Tallulah Bond', 'vewutalevi@mailinator.com', 'Pariatur Sunt duci', 'Pariatur Sunt duci', 'designer'),
(58, 'Nigel Cantrell', 'Keith Cannon', 'rysuzihos@mailinator.com', 'Sapiente in deleniti', 'Sapiente in deleniti', 'designer'),
(59, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', 'Perferendis dignissi', 'Perferendis dignissi', 'designer'),
(60, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', 'Perferendis dignissi', 'Perferendis dignissi', 'designer'),
(61, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', 'Perferendis dignissi', 'Perferendis dignissi', 'designer'),
(62, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', 'Perferendis dignissi', 'Perferendis dignissi', 'designer'),
(63, 'Gareth Tran', 'Alma Richardson', 'jyjiryba@mailinator.com', 'Perferendis dignissi', 'Perferendis dignissi', 'designer'),
(64, 'Thane Davenport', 'Julian Rosa', 'wanase@mailinator.com', 'Ut enim voluptatem ', 'Ut enim voluptatem ', 'designer'),
(65, 'Thane Davenport', 'Julian Rosa', 'wanase@mailinator.com', 'Ut enim voluptatem ', 'Ut enim voluptatem ', 'designer'),
(66, 'Thane Davenport', 'Julian Rosa', 'wanase@mailinator.com', 'Ut enim voluptatem ', 'Ut enim voluptatem ', 'designer'),
(67, 'Dylan Gill', 'Malcolm Vang', 'husora@mailinator.com', 'Ut dolorem qui esse', 'Ut dolorem qui esse', 'designer'),
(68, 'Dylan Gill', 'Malcolm Vang', 'husora@mailinator.com', 'Ut dolorem qui esse', 'Ut dolorem qui esse', 'designer'),
(69, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', 'Architecto deserunt ', 'Architecto deserunt ', 'designer'),
(70, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', 'Architecto deserunt ', 'Architecto deserunt ', 'designer'),
(71, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', 'Architecto deserunt ', 'Architecto deserunt ', 'designer'),
(72, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', 'Architecto deserunt ', 'Architecto deserunt ', 'designer'),
(73, 'Nathan Wallace', 'Cooper Hawkins', 'boridarovy@mailinator.com', 'Architecto deserunt ', 'Architecto deserunt ', 'designer'),
(74, 'Emerald Church', 'Len Blanchard', 'wiwewyqiby@mailinator.com', 'Odio asperiores qui ', 'Odio asperiores qui ', 'designer'),
(75, 'Emerald Church', 'Len Blanchard', 'wiwewyqiby@mailinator.com', 'Odio asperiores qui ', 'Odio asperiores qui ', 'designer'),
(76, 'Emerald Church', 'Len Blanchard', 'wiwewyqiby@mailinator.com', 'Odio asperiores qui ', 'Odio asperiores qui ', 'designer'),
(77, 'Jordan Salas', 'Judah Kim', 'depezos@mailinator.com', 'Qui quo exercitation', 'Qui quo exercitation', 'designer');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` bigint(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `logopic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `profilepic`, `logopic`) VALUES
(1, '97323.jpeg', '19793.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` bigint(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `newsdescription` varchar(255) NOT NULL,
  `newspic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `categoryname`, `newstitle`, `newsdescription`, `newspic`) VALUES
(1, '2', 'Qui non tempora cons', 'Similique suscipit m', 'a:3:{i:0;s:9:\"30380.jpg\";i:1;s:10:\"66986.jpeg\";i:2;s:9:\"2030.jpeg\";}'),
(2, '', 'Minim dolores illum', 'Consectetur fu', ''),
(4, '', 'Mollit et doloribus ', 'Doloribus ab ', 'a:3:{i:0;s:10:\"58770.jpeg\";i:1;s:9:\"84319.jpg\";i:2;s:10:\"13706.jpeg\";}'),
(5, '', 'Ab quos necessitatib', 'At sed quo', ''),
(6, '', 'Excepteur occaecat d', 'Ab alias max', 'a:3:{i:0;s:10:\"42310.jpeg\";i:1;s:9:\"98951.jpg\";i:2;s:10:\"54974.jpeg\";}'),
(7, '', 'Reprehenderit praese', 'Id quo vitae te', 'a:3:{i:0;s:8:\"9100.jpg\";i:1;s:10:\"44048.jpeg\";i:2;s:10:\"93803.jpeg\";}'),
(8, '', 'Ut non fugiat volup', 'Deleniti in', 'a:3:{i:0;s:10:\"65919.jpeg\";i:1;s:9:\"57393.jpg\";i:2;s:10:\"83349.jpeg\";}'),
(9, '', 'Sint modi et necessi', 'Facilis de', 'a:3:{i:0;s:10:\"51461.jpeg\";i:1;s:9:\"13733.jpg\";i:2;s:10:\"92048.jpeg\";}'),
(10, '', 'Culpa sit aut offici', 'Et quisquam tempor s', 'a:3:{i:0;s:10:\"65695.jpeg\";i:1;s:9:\"56853.jpg\";i:2;s:10:\"29838.jpeg\";}'),
(11, '3', 'Numquam est blanditi', 'Laboriosam non earu', 'a:3:{i:0;s:9:\"29806.jpg\";i:1;s:9:\"98749.jpg\";i:2;s:9:\"71624.jpg\";}'),
(12, '4', 'Ducimus qui quae es', 'Incidunt ex commodo', 'a:3:{i:0;s:10:\"56150.jpeg\";i:1;s:8:\"1678.jpg\";i:2;s:10:\"35933.jpeg\";}'),
(13, '4', 'Explicabo Labore qu', 'Sequi et ducimus qu', 'a:3:{i:0;s:9:\"85786.jpg\";i:1;s:10:\"60534.jpeg\";i:2;s:9:\"14511.jpg\";}');

-- --------------------------------------------------------

--
-- Table structure for table `planner`
--

CREATE TABLE `planner` (
  `planner_id` bigint(255) NOT NULL,
  `plannerfname` varchar(255) NOT NULL,
  `plannerlname` varchar(255) NOT NULL,
  `planneremail` varchar(255) NOT NULL,
  `plannerdob` varchar(255) NOT NULL,
  `plannergender` varchar(255) NOT NULL,
  `plannerphone` varchar(255) NOT NULL,
  `plannercity` varchar(255) NOT NULL,
  `plannerexperience` varchar(255) NOT NULL,
  `plannerachievements` varchar(255) NOT NULL,
  `plannerskills` varchar(255) NOT NULL,
  `plannerpartners` varchar(255) NOT NULL,
  `plannerpassword` varchar(255) NOT NULL,
  `plannerconfirmpassword` varchar(255) NOT NULL,
  `planneraddress` varchar(255) NOT NULL,
  `plannerpic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`planner_id`, `plannerfname`, `plannerlname`, `planneremail`, `plannerdob`, `plannergender`, `plannerphone`, `plannercity`, `plannerexperience`, `plannerachievements`, `plannerskills`, `plannerpartners`, `plannerpassword`, `plannerconfirmpassword`, `planneraddress`, `plannerpic`, `status`, `role`) VALUES
(3, 'Susan Hickman', 'Emmanuel Hancock', 'busagole@mailinator.com', '2024-11-28', 'others', '43', 'Laudantium perspici', '28', 'Et rerum a sit ea a', 'Corporis sunt quae ', 'Ducimus sapiente au', 'Dolores et deserunt ', 'Dolores et deserunt ', 'Adipisicing porro su', '01-07-023072.jpg', '', ''),
(4, 'Mohammad Nash', 'Rhona Owens', 'jebo@mailinator.com', '2016-02-10', 'others', '66', 'Temporibus Nam dolor', '97', 'Adipisci similique n', 'Aperiam ut in sunt i', 'Quis totam sed ut qu', 'Obcaecati ducimus a', 'Obcaecati ducimus a', 'Harum omnis commodo ', '9103.jpeg', '', ''),
(5, 'Quintessa Morales', 'Aubrey Griffith', 'docuvubiho@mailinator.com', '2005-06-04', 'others', '4', 'Illo sunt non quas ', '23', 'Fugit eligendi veli', 'Do nisi voluptates r', 'Qui non esse quia q', 'Aut voluptatum itaqu', 'Aut voluptatum itaqu', 'Rerum iste quasi sin', '77414.jpg', '', ''),
(6, 'Ainsley Kirkland', 'Ira Berg', 'huzubiho@mailinator.com', '2010-08-28', 'female', '68', 'Qui nobis laboris su', '32', 'Atque necessitatibus', 'Officia error labore', 'Quis ut ipsum mollit', 'Laboris rerum dolore', 'Laboris rerum dolore', 'Voluptatem debitis e', '11613.jpg', 'pending', ''),
(7, 'Hermione Yang', 'Stella Armstrong', 'jutuqo@mailinator.com', '1998-08-06', 'others', '16', 'Molestiae aliquam at', '47', 'Quas voluptatem Exc', 'Voluptatum quia ad s', 'Voluptate quibusdam ', 'Similique assumenda ', 'Similique assumenda ', 'Esse reprehenderit ', '57929.jpeg', 'confirm', ''),
(8, 'Jillian Howard', 'Whitney Steele', 'gufiqaku@mailinator.com', '2003-04-17', 'others', '3', 'Quo expedita ipsum a', '81', 'Quis ut qui natus do', 'Aliquid nesciunt qu', 'Iusto consectetur qu', 'Labore fuga Deserun', 'Labore fuga Deserun', 'Ea quo in ea tempor ', '25651.jpeg', 'pending', 'planner'),
(47, 'Brielle Gill', 'Jack Ortiz', 'rydugejyl@mailinator.com', '1999-01-03', 'female', '57', 'Adipisicing esse vo', '100', 'Inventore aut magni ', 'Voluptas amet occae', 'Porro cillum aperiam', 'Ad eius ipsum dolor ', 'Ad eius ipsum dolor ', 'Non laboriosam quis', '76965.jpg', 'confirm', ''),
(48, 'Casey Berry', 'Todd Potter', 'pucawe@mailinator.com', '2017-07-02', 'female', '19', 'Quod necessitatibus ', '22', 'Quaerat sit quam deb', 'Quaerat esse iusto ', 'Duis inventore ', 'Et maxime explicabo', 'Et maxime explicabo', 'Enim bbjdeffgf', '74815.jpg', 'confirm', ''),
(50, 'Basil Garza', 'Audrey Bishop', 'bewiqik@mailinator.com', '2002-09-21', 'female', '14', 'Ut non omnis rerum m', '7', 'Alias pariatur Cons', 'Aliquam sequi ullamc', 'Voluptate autem ipsu', 'Tempora cupiditate i', 'Tempora cupiditate i', 'Dolor ex perferendis', '32787.jpeg', 'pending', 'planner'),
(51, 'Tanya Miller', 'Emerson Knight', 'maneneg@mailinator.com', '1989-06-22', 'female', '91', 'Cupidatat voluptatem', '27', 'Eum blanditiis sed p', 'Distinctio Assumend', 'Debitis iste deserun', 'Deleniti quaerat ull', 'Deleniti quaerat ull', 'Ex qui omnis aut lab', '31417.jpg', 'pending', 'planner');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` bigint(255) NOT NULL,
  `rolename` varchar(255) NOT NULL,
  `roleaccess` varchar(255) NOT NULL,
  `roleper` varchar(255) NOT NULL,
  `roledate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `rolename`, `roleaccess`, `roleper`, `roledate`) VALUES
(1, 'admin', 'All', 'a:0:{}', '2024-12-17'),
(10, 'designer', 'Custom', 'a:2:{i:0;s:8:\"designer\";i:1;s:7:\"booking\";}', '2025-02-25'),
(11, 'planner', 'Custom', 'a:4:{i:0;s:7:\"planner\";i:1;s:7:\"booking\";i:2;s:6:\"events\";i:3;s:4:\"news\";}', '2025-02-23'),
(14, 'Volunteer', 'Custom', 'a:2:{i:0;s:9:\"volunteer\";i:1;s:7:\"booking\";}', '2025-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `specificbooking`
--

CREATE TABLE `specificbooking` (
  `spbooking_id` bigint(255) NOT NULL,
  `spcategoryname` varchar(255) NOT NULL,
  `spclientname` varchar(255) NOT NULL,
  `spbookingemail` varchar(255) NOT NULL,
  `spbookingcontact` varchar(255) NOT NULL,
  `spoccassiontitle` varchar(255) NOT NULL,
  `spoccassiondate` varchar(255) NOT NULL,
  `spoccassiontime` varchar(255) NOT NULL,
  `spnumberofseats` varchar(255) NOT NULL,
  `spvenuename` varchar(255) NOT NULL,
  `spbookingdescription` varchar(255) NOT NULL,
  `workername` varchar(255) NOT NULL,
  `workeremail` varchar(255) NOT NULL,
  `workercontact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specificbooking`
--

INSERT INTO `specificbooking` (`spbooking_id`, `spcategoryname`, `spclientname`, `spbookingemail`, `spbookingcontact`, `spoccassiontitle`, `spoccassiondate`, `spoccassiontime`, `spnumberofseats`, `spvenuename`, `spbookingdescription`, `workername`, `workeremail`, `workercontact`) VALUES
(8, '2', 'gawamy@mailinator.com', 'micedeh@mailinator.com', '14', 'jaxuh@mailinator.com', '2000-01-02', '19:11', '615', '4', 'Amet est harum id ', 'Susan Hickman', 'busagole@mailinator.com', '43'),
(9, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(10, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(11, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(12, '2', 'halibisiv@mailinator.com', 'ridabatool306@gmail.com', '45', 'wedding', '2024-04-25', '03:03', 'lyzogibyma@mailinator.com', '4', 'Culpa amet amet qu', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(13, '2', 'zunilagedo@mailinator.com', 'ridabatool306@gmail.com', '11', 'sitijosu@mailinator.com', '1970-02-14', '04:57', 'nahiqorid@mailinator.com', '4', 'Illo ut quisquam atq', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(14, '2', 'vuba@mailinator.com', 'ridabatool306@gmail.com', '57', 'tebuzumi@mailinator.com', '2021-12-07', '10:09', 'zejume@mailinator.com', '3', 'Laudantium velit q', 'Libby Macias', 'ridabatool306@gmail.com', '53'),
(15, '2', 'lonapes@mailinator.com', 'ridabatool306@gmail.com', '99', 'mafy@mailinator.com', '1995-11-29', '08:42', 'lugy@mailinator.com', '4', 'Est aliquid necessi', 'Libby Macias', 'ridabatool306@gmail.com', '53'),
(16, '4', 'qawilo@mailinator.com', 'xifos@mailinator.com', '84', 'dugeqo@mailinator.com', '1993-01-10', '14:23', 'vusunyde@mailinator.com', '3', 'Nisi Nam sint moles', 'Oliver Nguyen', 'fytofozy@mailinator.com', '28'),
(17, '3', 'zimyluxihi@mailinator.com', 'xezyd@mailinator.com', '19', 'buticag@mailinator.com', '1980-07-04', '09:55', '386', '3', 'Perferendis et obcae', 'Susan Hickman', 'busagole@mailinator.com', '43');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` bigint(255) NOT NULL,
  `venuename` varchar(255) NOT NULL,
  `venuedescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venuename`, `venuedescription`) VALUES
(3, 'Thaddeus Bird', 'Natus dolorem provid'),
(5, 'Noel Mcpherson', 'Dolore accusanti');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `volunteer_id` bigint(255) NOT NULL,
  `volunteerfname` varchar(255) NOT NULL,
  `volunteerlname` varchar(255) NOT NULL,
  `volunteeremail` varchar(255) NOT NULL,
  `volunteerdob` varchar(255) NOT NULL,
  `volunteergender` varchar(255) NOT NULL,
  `volunteerphone` varchar(255) NOT NULL,
  `volunteercity` varchar(255) NOT NULL,
  `volunteeroccassion` varchar(255) NOT NULL,
  `volunteerexperience` varchar(255) NOT NULL,
  `volunteerachievements` varchar(255) NOT NULL,
  `volunteerskills` varchar(255) NOT NULL,
  `volunteerpassword` varchar(255) NOT NULL,
  `volunteerconfirmpassword` varchar(255) NOT NULL,
  `volunteeraddress` varchar(255) NOT NULL,
  `volunteerpic` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `volunteerfname`, `volunteerlname`, `volunteeremail`, `volunteerdob`, `volunteergender`, `volunteerphone`, `volunteercity`, `volunteeroccassion`, `volunteerexperience`, `volunteerachievements`, `volunteerskills`, `volunteerpassword`, `volunteerconfirmpassword`, `volunteeraddress`, `volunteerpic`, `status`, `role`) VALUES
(1, 'Judah Smith', 'Katell Frazier', 'gumygoce@mailinator.com', '2023-07-27', 'female', '59', 'Eos dolorem est mol', 'Incidunt officia qu', '82', 'Eius quidem nobis ve', 'Pariatur Aut volupt', 'Maiores velit est q', 'Maiores velit est q', 'Odit voluptas unde r', '40373.jpg', '', ''),
(6, 'Bruce Collier', 'Cleo Austin', 'dojysi@mailinator.com', '1990-09-13', 'others', '88', 'Veritatis adipisci i', 'Ipsum duis ut illo ', '69', 'Amet natus commodo ', 'Ea aliquip vitae ven', 'In adipisci irure co', 'In adipisci irure co', 'Nisi mollitia culpa ', '62790.jpeg', 'pending', ''),
(7, 'Francesca Woodard', 'Patrick Sloan', 'titoz@mailinator.com', '1990-05-20', 'female', '21', 'Aut consectetur vol', 'Eaque voluptas persp', '80', 'Ea veritatis esse a', 'Dolorum provident i', 'Reiciendis ut laboru', 'Reiciendis ut laboru', 'Incidunt et itaque ', '6562.jpeg', 'confirm', ''),
(8, 'Wynne Sanders', 'Halee Juarez', 'pibenob@mailinator.com', '2008-05-24', 'male', '66', 'In iusto quaerat aut', 'Praesentium quia off', '10', 'Ad odio eos non nis', 'Rerum culpa eius vel', 'Quia et ea libero do', 'Quia et ea libero do', 'Et adipisci eligendi', '86689.jpeg', 'pending', ''),
(9, 'Dana Newton', 'Laurel Bartlett', 'mykicekiga@mailinator.com', '2012-09-04', 'others', '20', 'Enim non nulla quas ', 'Suscipit nulla ipsum', '5', 'Proident minim est', 'Odio ad delectus mo', 'Voluptatem Do perfe', 'Voluptatem Do perfe', 'Iure atque consequat', '93323.jpeg', 'pending', 'designer'),
(11, 'Kalia Weaver', 'Alma Bass', 'gehijaxemy@mailinator.com', '1984-07-02', 'male', '42', 'Excepturi ut perfere', 'Aperiam eos voluptat', '84', 'Totam aute saepe vol', 'Est incididunt non r', 'Sit necessitatibus e', 'Sit necessitatibus e', 'Temporibus gkjbd', '56808.jpg', 'confirm', ''),
(12, 'Lydia Owens', 'Heidi Newton', 'catu@mailinator.com', '1973-07-13', 'male', '31', 'In quia aute ipsum t', 'Laudantium eaque no', '100', 'Cupidatat velit ali', 'Dolorem accusamus ma', 'Dignissimos officia ', 'Dignissimos officia ', 'Deleniti alias omnis', '77212.jpeg', 'pending', 'designer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`designer_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `planner`
--
ALTER TABLE `planner`
  ADD PRIMARY KEY (`planner_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `specificbooking`
--
ALTER TABLE `specificbooking`
  ADD PRIMARY KEY (`spbooking_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `designer_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `planner`
--
ALTER TABLE `planner`
  MODIFY `planner_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `specificbooking`
--
ALTER TABLE `specificbooking`
  MODIFY `spbooking_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volunteer_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
