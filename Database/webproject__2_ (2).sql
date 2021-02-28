-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 05:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject (2)`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditor_comments`
--

CREATE TABLE `auditor_comments` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `auditor_id` int(11) NOT NULL,
  `comment` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditor_comments`
--

INSERT INTO `auditor_comments` (`id`, `chat_id`, `auditor_id`, `comment`) VALUES
(8, 18, 12, 'nice response');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`) VALUES
(14, 1),
(9, 2),
(10, 3),
(13, 7),
(11, 8),
(12, 8),
(15, 13);

-- --------------------------------------------------------

--
-- Table structure for table `cart_groups`
--

CREATE TABLE `cart_groups` (
  `crt_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `admin_id`) VALUES
(18, 1, 8),
(19, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_orders`
--

CREATE TABLE `confirmed_orders` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmed_orders`
--

INSERT INTO `confirmed_orders` (`id`, `cart_id`, `group_id`) VALUES
(80, 14, 11),
(81, 14, 12),
(83, 9, 11),
(84, 9, 18),
(87, 14, 10),
(88, 14, 12);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `c_img` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `cname`, `c_img`) VALUES
(1, 'Egypt', 'https://pixnio.com/free-images/flags-of-the-world/flag-of-egypt.jpg'),
(2, 'Brazil', 'https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/1200px-Flag_of_Brazil.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `c_img` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `Photo_Name` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `First_Name`, `Last_Name`, `Email`, `Password`, `Gender`, `type`, `Photo_Name`) VALUES
(1, 'user1', 'mohamed', 'user1@gmail.com', '123', 'male', 'user', ''),
(2, 'user2', 'u', 'user2@gmail.com', '123', 'male', 'user', ''),
(3, 'user3', 'u', 'user3@admin.com', '123', 'Male', 'user', ''),
(4, 'user4', 'u', 'user4@gmail.com', '123', 'Male', 'user', ''),
(5, 'user5', 'u', 'user5@gmail.com', '123', 'Male', 'user', ''),
(6, 'user6', 'u', 'user6@gmail.com', '123', 'Male', 'user', ''),
(7, 'user7', 'u', 'user7@gmail.com', '123', 'Male', 'user', ''),
(8, 'admin15', 'a', 'admin@admin.com', '123', 'Male', 'admin', '35169.jpg'),
(12, 'Auditor', 'Aduitor', 'a@a.com', '123', 'Male', 'auditor', ''),
(13, 'HR', 'HR', 'hr@hr.com', '123', 'male', 'hr', ''),
(15, 'youssef', 'zaid', 'admin33@admin.com', '123', 'Male', 'admin', ''),
(19, 'youssef', 'zaid', 'admin55@admin.com', '123', 'Male', 'user', 'cc.jpg'),
(20, 'youssef', 'zaid', 'yzaid33@gmail.com', '123', 'Male', 'user', 'mountain.jpg'),
(21, 'youssef', 'zaid', 'yzaid333@gmail.com', '123', 'Male', 'user', 'cc.jpg'),
(22, 'youssef', 'zaid', 'user10@gmail.com', '123', 'Male', 'user', ''),
(23, 'ee', 'fwe', 'yiy@gmail.com', '123', 'Male', 'user', '35169.jpg'),
(24, 'youssef', 'zaid', 'yheiu@gmail.com', '123', 'Male', 'user', ''),
(25, 'youssef', 'zaid', 'yheiuu@gmail.com', '123', 'Male', 'user', ''),
(26, 'youssef', 'ahmed', 'admin20@admin.com', '123', 'Male', 'admin', 'colourcanyon.jpg'),
(27, 'youssef', 'ahmed', 'admin3@admin.com', '123', 'Male', 'admin', 'colourcanyon.jpg'),
(29, 'youssef', 'zaid', 'yyy@gmail.com', '123', 'Male', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `geo_countries`
--

CREATE TABLE `geo_countries` (
  `name` varchar(100) NOT NULL,
  `abv` char(2) NOT NULL DEFAULT '' COMMENT 'ISO 3661-1 alpha-2',
  `abv3` char(3) DEFAULT NULL COMMENT 'ISO 3661-1 alpha-3',
  `abv3_alt` char(3) DEFAULT NULL,
  `code` char(3) DEFAULT NULL COMMENT 'ISO 3661-1 numeric',
  `slug` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geo_countries`
--

INSERT INTO `geo_countries` (`name`, `abv`, `abv3`, `abv3_alt`, `code`, `slug`) VALUES
('Afghanistan', 'AF', 'AFG', NULL, '4', 'afghanistan'),
('Aland Islands', 'AX', 'ALA', NULL, '248', 'aland-islands'),
('Albania', 'AL', 'ALB', NULL, '8', 'albania'),
('Algeria', 'DZ', 'DZA', NULL, '12', 'algeria'),
('American Samoa', 'AS', 'ASM', NULL, '16', 'american-samoa'),
('Andorra', 'AD', 'AND', NULL, '20', 'andorra'),
('Angola', 'AO', 'AGO', NULL, '24', 'angola'),
('Anguilla', 'AI', 'AIA', NULL, '660', 'anguilla'),
('Antigua and Barbuda', 'AG', 'ATG', NULL, '28', 'antigua-and-barbuda'),
('Argentina', 'AR', 'ARG', NULL, '32', 'argentina'),
('Armenia', 'AM', 'ARM', NULL, '51', 'armenia'),
('Aruba', 'AW', 'ABW', NULL, '533', 'aruba'),
('Australia', 'AU', 'AUS', NULL, '36', 'australia'),
('Austria', 'AT', 'AUT', NULL, '40', 'austria'),
('Azerbaijan', 'AZ', 'AZE', NULL, '31', 'azerbaijan'),
('Bahamas', 'BS', 'BHS', NULL, '44', 'bahamas'),
('Bahrain', 'BH', 'BHR', NULL, '48', 'bahrain'),
('Bangladesh', 'BD', 'BGD', NULL, '50', 'bangladesh'),
('Barbados', 'BB', 'BRB', NULL, '52', 'barbados'),
('Belarus', 'BY', 'BLR', NULL, '112', 'belarus'),
('Belgium', 'BE', 'BEL', NULL, '56', 'belgium'),
('Belize', 'BZ', 'BLZ', NULL, '84', 'belize'),
('Benin', 'BJ', 'BEN', NULL, '204', 'benin'),
('Bermuda', 'BM', 'BMU', NULL, '60', 'bermuda'),
('Bhutan', 'BT', 'BTN', NULL, '64', 'bhutan'),
('Bolivia', 'BO', 'BOL', NULL, '68', 'bolivia'),
('Bosnia and Herzegovina', 'BA', 'BIH', NULL, '70', 'bosnia-and-herzegovina'),
('Botswana', 'BW', 'BWA', NULL, '72', 'botswana'),
('Brazil', 'BR', 'BRA', NULL, '76', 'brazil'),
('British Virgin Islands', 'VG', 'VGB', NULL, '92', 'british-virgin-islands'),
('Brunei Darussalam', 'BN', 'BRN', NULL, '96', 'brunei-darussalam'),
('Bulgaria', 'BG', 'BGR', NULL, '100', 'bulgaria'),
('Burkina Faso', 'BF', 'BFA', NULL, '854', 'burkina-faso'),
('Burundi', 'BI', 'BDI', NULL, '108', 'burundi'),
('Cambodia', 'KH', 'KHM', NULL, '116', 'cambodia'),
('Cameroon', 'CM', 'CMR', NULL, '120', 'cameroon'),
('Canada', 'CA', 'CAN', NULL, '124', 'canada'),
('Cape Verde', 'CV', 'CPV', NULL, '132', 'cape-verde'),
('Cayman Islands', 'KY', 'CYM', NULL, '136', 'cayman-islands'),
('Central African Republic', 'CF', 'CAF', NULL, '140', 'central-african-republic'),
('Chad', 'TD', 'TCD', NULL, '148', 'chad'),
('Chile', 'CL', 'CHL', 'CHI', '152', 'chile'),
('China', 'CN', 'CHN', NULL, '156', 'china'),
('Colombia', 'CO', 'COL', NULL, '170', 'colombia'),
('Comoros', 'KM', 'COM', NULL, '174', 'comoros'),
('Congo', 'CG', 'COG', NULL, '178', 'congo'),
('Cook Islands', 'CK', 'COK', NULL, '184', 'cook-islands'),
('Costa Rica', 'CR', 'CRI', NULL, '188', 'costa-rica'),
('Cote d\'Ivoire', 'CI', 'CIV', NULL, '384', 'cote-divoire'),
('Croatia', 'HR', 'HRV', NULL, '191', 'croatia'),
('Cuba', 'CU', 'CUB', NULL, '192', 'cuba'),
('Cyprus', 'CY', 'CYP', NULL, '196', 'cyprus'),
('Czech Republic', 'CZ', 'CZE', NULL, '203', 'czech-republic'),
('Democratic Republic of the Congo', 'CD', 'COD', NULL, '180', 'democratic-republic-of-congo'),
('Denmark', 'DK', 'DNK', NULL, '208', 'denmark'),
('Djibouti', 'DJ', 'DJI', NULL, '262', 'djibouti'),
('Dominica', 'DM', 'DMA', NULL, '212', 'dominica'),
('Dominican Republic', 'DO', 'DOM', NULL, '214', 'dominican-republic'),
('Ecuador', 'EC', 'ECU', NULL, '218', 'ecuador'),
('Egypt', 'EG', 'EGY', NULL, '818', 'egypt'),
('El Salvador', 'SV', 'SLV', NULL, '222', 'el-salvador'),
('Equatorial Guinea', 'GQ', 'GNQ', NULL, '226', 'equatorial-guinea'),
('Eritrea', 'ER', 'ERI', NULL, '232', 'eritrea'),
('Estonia', 'EE', 'EST', NULL, '233', 'estonia'),
('Ethiopia', 'ET', 'ETH', NULL, '231', 'ethiopia'),
('Faeroe Islands', 'FO', 'FRO', NULL, '234', 'faeroe-islands'),
('Falkland Islands', 'FK', 'FLK', NULL, '238', 'falkland-islands'),
('Fiji', 'FJ', 'FJI', NULL, '242', 'fiji'),
('Finland', 'FI', 'FIN', NULL, '246', 'finland'),
('France', 'FR', 'FRA', NULL, '250', 'france'),
('French Guiana', 'GF', 'GUF', NULL, '254', 'french-guiana'),
('French Polynesia', 'PF', 'PYF', NULL, '258', 'french-polynesia'),
('Gabon', 'GA', 'GAB', NULL, '266', 'gabon'),
('Gambia', 'GM', 'GMB', NULL, '270', 'gambia'),
('Georgia', 'GE', 'GEO', NULL, '268', 'georgia'),
('Germany', 'DE', 'DEU', NULL, '276', 'germany'),
('Ghana', 'GH', 'GHA', NULL, '288', 'ghana'),
('Gibraltar', 'GI', 'GIB', NULL, '292', 'gibraltar'),
('Greece', 'GR', 'GRC', NULL, '300', 'greece'),
('Greenland', 'GL', 'GRL', NULL, '304', 'greenland'),
('Grenada', 'GD', 'GRD', NULL, '308', 'grenada'),
('Guadeloupe', 'GP', 'GLP', NULL, '312', 'guadeloupe'),
('Guam', 'GU', 'GUM', NULL, '316', 'guam'),
('Guatemala', 'GT', 'GTM', NULL, '320', 'guatemala'),
('Guernsey', 'GG', 'GGY', NULL, '831', 'guernsey'),
('Guinea', 'GN', 'GIN', NULL, '324', 'guinea'),
('Guinea-Bissau', 'GW', 'GNB', NULL, '624', 'guinea-bissau'),
('Guyana', 'GY', 'GUY', NULL, '328', 'guyana'),
('Haiti', 'HT', 'HTI', NULL, '332', 'haiti'),
('Holy See', 'VA', 'VAT', NULL, '336', 'holy-see'),
('Honduras', 'HN', 'HND', NULL, '340', 'honduras'),
('Hong Kong', 'HK', 'HKG', NULL, '344', 'hong-kong'),
('Hungary', 'HU', 'HUN', NULL, '348', 'hungary'),
('Iceland', 'IS', 'ISL', NULL, '352', 'iceland'),
('India', 'IN', 'IND', NULL, '356', 'india'),
('Indonesia', 'ID', 'IDN', NULL, '360', 'indonesia'),
('Iran', 'IR', 'IRN', NULL, '364', 'iran'),
('Iraq', 'IQ', 'IRQ', NULL, '368', 'iraq'),
('Ireland', 'IE', 'IRL', NULL, '372', 'ireland'),
('Isle of Man', 'IM', 'IMN', NULL, '833', 'isle-of-man'),
('Israel', 'IL', 'ISR', NULL, '376', 'israel'),
('Italy', 'IT', 'ITA', NULL, '380', 'italy'),
('Jamaica', 'JM', 'JAM', NULL, '388', 'jamaica'),
('Japan', 'JP', 'JPN', NULL, '392', 'japan'),
('Jersey', 'JE', 'JEY', NULL, '832', 'jersey'),
('Jordan', 'JO', 'JOR', NULL, '400', 'jordan'),
('Kazakhstan', 'KZ', 'KAZ', NULL, '398', 'kazakhstan'),
('Kenya', 'KE', 'KEN', NULL, '404', 'kenya'),
('Kiribati', 'KI', 'KIR', NULL, '296', 'kiribati'),
('Kuwait', 'KW', 'KWT', NULL, '414', 'kuwait'),
('Kyrgyzstan', 'KG', 'KGZ', NULL, '417', 'kyrgyzstan'),
('Laos', 'LA', 'LAO', NULL, '418', 'laos'),
('Latvia', 'LV', 'LVA', NULL, '428', 'latvia'),
('Lebanon', 'LB', 'LBN', NULL, '422', 'lebanon'),
('Lesotho', 'LS', 'LSO', NULL, '426', 'lesotho'),
('Liberia', 'LR', 'LBR', NULL, '430', 'liberia'),
('Libyan Arab Jamahiriya', 'LY', 'LBY', NULL, '434', 'libyan-arab-jamahiriya'),
('Liechtenstein', 'LI', 'LIE', NULL, '438', 'liechtenstein'),
('Lithuania', 'LT', 'LTU', NULL, '440', 'lithuania'),
('Luxembourg', 'LU', 'LUX', NULL, '442', 'luxembourg'),
('Macao', 'MO', 'MAC', NULL, '446', 'macao'),
('Macedonia', 'MK', 'MKD', NULL, '807', 'macedonia'),
('Madagascar', 'MG', 'MDG', NULL, '450', 'madagascar'),
('Malawi', 'MW', 'MWI', NULL, '454', 'malawi'),
('Malaysia', 'MY', 'MYS', NULL, '458', 'malaysia'),
('Maldives', 'MV', 'MDV', NULL, '462', 'maldives'),
('Mali', 'ML', 'MLI', NULL, '466', 'mali'),
('Malta', 'MT', 'MLT', NULL, '470', 'malta'),
('Marshall Islands', 'MH', 'MHL', NULL, '584', 'marshall-islands'),
('Martinique', 'MQ', 'MTQ', NULL, '474', 'martinique'),
('Mauritania', 'MR', 'MRT', NULL, '478', 'mauritania'),
('Mauritius', 'MU', 'MUS', NULL, '480', 'mauritius'),
('Mayotte', 'YT', 'MYT', NULL, '175', 'mayotte'),
('Mexico', 'MX', 'MEX', NULL, '484', 'mexico'),
('Micronesia', 'FM', 'FSM', NULL, '583', 'micronesia'),
('Moldova', 'MD', 'MDA', NULL, '498', 'moldova'),
('Monaco', 'MC', 'MCO', NULL, '492', 'monaco'),
('Mongolia', 'MN', 'MNG', NULL, '496', 'mongolia'),
('Montenegro', 'ME', 'MNE', NULL, '499', 'montenegro'),
('Montserrat', 'MS', 'MSR', NULL, '500', 'montserrat'),
('Morocco', 'MA', 'MAR', NULL, '504', 'morocco'),
('Mozambique', 'MZ', 'MOZ', NULL, '508', 'mozambique'),
('Myanmar', 'MM', 'MMR', 'BUR', '104', 'myanmar'),
('Namibia', 'NA', 'NAM', NULL, '516', 'namibia'),
('Nauru', 'NR', 'NRU', NULL, '520', 'nauru'),
('Nepal', 'NP', 'NPL', NULL, '524', 'nepal'),
('Netherlands', 'NL', 'NLD', NULL, '528', 'netherlands'),
('Netherlands Antilles', 'AN', 'ANT', NULL, '530', 'netherlands-antilles'),
('New Caledonia', 'NC', 'NCL', NULL, '540', 'new-caledonia'),
('New Zealand', 'NZ', 'NZL', NULL, '554', 'new-zealand'),
('Nicaragua', 'NI', 'NIC', NULL, '558', 'nicaragua'),
('Niger', 'NE', 'NER', NULL, '562', 'niger'),
('Nigeria', 'NG', 'NGA', NULL, '566', 'nigeria'),
('Niue', 'NU', 'NIU', NULL, '570', 'niue'),
('Norfolk Island', 'NF', 'NFK', NULL, '574', 'norfolk-island'),
('North Korea', 'KP', 'PRK', NULL, '408', 'north-korea'),
('Northern Mariana Islands', 'MP', 'MNP', NULL, '580', 'northern-mariana-islands'),
('Norway', 'NO', 'NOR', NULL, '578', 'norway'),
('Oman', 'OM', 'OMN', NULL, '512', 'oman'),
('Pakistan', 'PK', 'PAK', NULL, '586', 'pakistan'),
('Palau', 'PW', 'PLW', NULL, '585', 'palau'),
('Palestine', 'PS', 'PSE', NULL, '275', 'palestine'),
('Panama', 'PA', 'PAN', NULL, '591', 'panama'),
('Papua New Guinea', 'PG', 'PNG', NULL, '598', 'papua-new-guinea'),
('Paraguay', 'PY', 'PRY', NULL, '600', 'paraguay'),
('Peru', 'PE', 'PER', NULL, '604', 'peru'),
('Philippines', 'PH', 'PHL', NULL, '608', 'philippines'),
('Pitcairn', 'PN', 'PCN', NULL, '612', 'pitcairn'),
('Poland', 'PL', 'POL', NULL, '616', 'poland'),
('Portugal', 'PT', 'PRT', NULL, '620', 'portugal'),
('Puerto Rico', 'PR', 'PRI', NULL, '630', 'puerto-rico'),
('Qatar', 'QA', 'QAT', NULL, '634', 'qatar'),
('Reunion', 'RE', 'REU', NULL, '638', 'reunion'),
('Romania', 'RO', 'ROU', 'ROM', '642', 'romania'),
('Russian Federation', 'RU', 'RUS', NULL, '643', 'russian-federation'),
('Rwanda', 'RW', 'RWA', NULL, '646', 'rwanda'),
('Saint Helena', 'SH', 'SHN', NULL, '654', 'saint-helena'),
('Saint Kitts and Nevis', 'KN', 'KNA', NULL, '659', 'saint-kitts-and-nevis'),
('Saint Lucia', 'LC', 'LCA', NULL, '662', 'saint-lucia'),
('Saint Pierre and Miquelon', 'PM', 'SPM', NULL, '666', 'saint-pierre-and-miquelon'),
('Saint Vincent and the Grenadines', 'VC', 'VCT', NULL, '670', 'saint-vincent-and-grenadines'),
('Saint-Barthelemy', 'BL', 'BLM', NULL, '652', 'saint-barthelemy'),
('Saint-Martin', 'MF', 'MAF', NULL, '663', 'saint-martin'),
('Samoa', 'WS', 'WSM', NULL, '882', 'samoa'),
('San Marino', 'SM', 'SMR', NULL, '674', 'san-marino'),
('Sao Tome and Principe', 'ST', 'STP', NULL, '678', 'sao-tome-and-principe'),
('Saudi Arabia', 'SA', 'SAU', NULL, '682', 'saudi-arabia'),
('Senegal', 'SN', 'SEN', NULL, '686', 'senegal'),
('Serbia', 'RS', 'SRB', NULL, '688', 'serbia'),
('Seychelles', 'SC', 'SYC', NULL, '690', 'seychelles'),
('Sierra Leone', 'SL', 'SLE', NULL, '694', 'sierra-leone'),
('Singapore', 'SG', 'SGP', NULL, '702', 'singapore'),
('Slovakia', 'SK', 'SVK', NULL, '703', 'slovakia'),
('Slovenia', 'SI', 'SVN', NULL, '705', 'slovenia'),
('Solomon Islands', 'SB', 'SLB', NULL, '90', 'solomon-islands'),
('Somalia', 'SO', 'SOM', NULL, '706', 'somalia'),
('South Africa', 'ZA', 'ZAF', NULL, '710', 'south-africa'),
('South Korea', 'KR', 'KOR', NULL, '410', 'south-korea'),
('South Sudan', 'SS', 'SSD', NULL, '728', 'south-sudan'),
('Spain', 'ES', 'ESP', NULL, '724', 'spain'),
('Sri Lanka', 'LK', 'LKA', NULL, '144', 'sri-lanka'),
('Sudan', 'SD', 'SDN', NULL, '729', 'sudan'),
('Suriname', 'SR', 'SUR', NULL, '740', 'suriname'),
('Svalbard and Jan Mayen Islands', 'SJ', 'SJM', NULL, '744', 'svalbard-and-jan-mayen-islands'),
('Swaziland', 'SZ', 'SWZ', NULL, '748', 'swaziland'),
('Sweden', 'SE', 'SWE', NULL, '752', 'sweden'),
('Switzerland', 'CH', 'CHE', NULL, '756', 'switzerland'),
('Syrian Arab Republic', 'SY', 'SYR', NULL, '760', 'syrian-arab-republic'),
('Tajikistan', 'TJ', 'TJK', NULL, '762', 'tajikistan'),
('Tanzania', 'TZ', 'TZA', NULL, '834', 'tanzania'),
('Thailand', 'TH', 'THA', NULL, '764', 'thailand'),
('Timor-Leste', 'TP', 'TLS', NULL, '626', 'timor-leste'),
('Togo', 'TG', 'TGO', NULL, '768', 'togo'),
('Tokelau', 'TK', 'TKL', NULL, '772', 'tokelau'),
('Tonga', 'TO', 'TON', NULL, '776', 'tonga'),
('Trinidad and Tobago', 'TT', 'TTO', NULL, '780', 'trinidad-and-tobago'),
('Tunisia', 'TN', 'TUN', NULL, '788', 'tunisia'),
('Turkey', 'TR', 'TUR', NULL, '792', 'turkey'),
('Turkmenistan', 'TM', 'TKM', NULL, '795', 'turkmenistan'),
('Turks and Caicos Islands', 'TC', 'TCA', NULL, '796', 'turks-and-caicos-islands'),
('Tuvalu', 'TV', 'TUV', NULL, '798', 'tuvalu'),
('U.S. Virgin Islands', 'VI', 'VIR', NULL, '850', 'us-virgin-islands'),
('Uganda', 'UG', 'UGA', NULL, '800', 'uganda'),
('Ukraine', 'UA', 'UKR', NULL, '804', 'ukraine'),
('United Arab Emirates', 'AE', 'ARE', NULL, '784', 'united-arab-emirates'),
('United Kingdom', 'UK', 'GBR', NULL, '826', 'united-kingdom'),
('United States', 'US', 'USA', NULL, '840', 'united-states'),
('Uruguay', 'UY', 'URY', NULL, '858', 'uruguay'),
('Uzbekistan', 'UZ', 'UZB', NULL, '860', 'uzbekistan'),
('Vanuatu', 'VU', 'VUT', NULL, '548', 'vanuatu'),
('Venezuela', 'VE', 'VEN', NULL, '862', 'venezuela'),
('Viet Nam', 'VN', 'VNM', NULL, '704', 'viet-nam'),
('Wallis and Futuna Islands', 'WF', 'WLF', NULL, '876', 'wallis-and-futuna-islands'),
('Western Sahara', 'EH', 'ESH', NULL, '732', 'western-sahara'),
('Yemen', 'YE', 'YEM', NULL, '887', 'yemen'),
('Zambia', 'ZM', 'ZMB', NULL, '894', 'zambia'),
('Zimbabwe', 'ZW', 'ZWE', NULL, '716', 'zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `photo` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `place`, `datetime`, `country`, `city`, `price`, `photo`) VALUES
(10, 'Saint Catherine', '2020-12-27 13:20:00.000000', 'Egypt', '', 20, 'catherine.jpg'),
(11, 'Saint Catherine', '2020-12-27 13:22:00.000000', 'Egypt', '', 30, 'catherine.jpg'),
(12, 'Abo Galoom', '2020-12-22 04:35:00.000000', 'Egypt', '', 40, 'cc.jpg'),
(19, 'saint', '2021-03-05 17:20:00.000000', 'Algeria', 'dsds', 42, ''),
(20, '', '0000-00-00 00:00:00.000000', 'Angola', '', 30, ''),
(21, 'Saint Catherine', '2021-03-19 20:52:00.000000', 'Aland Islands', 'iygiy', 70, ''),
(22, 'Saint Catherine', '2021-03-19 20:52:00.000000', 'Aland Islands', 'iygiy', 70, ''),
(23, 'Saint Catherine', '0000-00-00 00:00:00.000000', 'Aland Islands', '', 50, ''),
(32, 'Saint Catherine', '2021-02-17 21:05:00.000000', 'Albania', 'dsds', 52, ''),
(33, 'Dahab', '2021-02-10 02:48:00.000000', 'Egypt', 'Cairo', 50, ''),
(34, 'Abo Galoom', '2021-02-10 03:58:00.000000', 'Greece', 'Cairo', 50, ''),
(37, 'Wadi Degla', '2021-03-03 20:00:00.000000', 'Egypt', 'Cairo', 70, 'mountsinai.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `message` varchar(512) NOT NULL,
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `reciever_id`, `message`, `chat_id`) VALUES
(584, 1, 8, 'hi', 18),
(585, 8, 1, '', 18),
(586, 8, 1, '', 18),
(587, 8, 1, '', 18),
(588, 8, 1, 'hi', 18),
(589, 8, 1, 'hi', 18),
(590, 8, 1, 'hi', 18),
(591, 8, 1, '', 18),
(592, 8, 1, '', 18),
(593, 1, 8, 'hi', 18),
(594, 1, 8, 'd', 18),
(595, 1, 8, 'hi', 18),
(596, 1, 15, 'hi', 19),
(597, 8, 1, 'hi', 18),
(598, 8, 1, 'zz', 18);

-- --------------------------------------------------------

--
-- Table structure for table `penalties`
--

CREATE TABLE `penalties` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `hr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penalties`
--

INSERT INTO `penalties` (`id`, `admin_id`, `hr_id`) VALUES
(1, 15, 13),
(2, 15, 13),
(3, 8, 13);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `pname` varchar(30) NOT NULL,
  `p_id` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `p_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`pname`, `p_id`, `C_ID`, `p_img`) VALUES
('abo galoom', 6, 1, 'https://media-cdn.tripadvisor.com/media/photo-s/0e/5b/28/07/photo0jpg.jpg'),
('Saint Catherine', 7, 1, 'https://i.pinimg.com/originals/75/d8/83/75d88307aa4173602e9007dfe13a9da5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profileimages`
--

CREATE TABLE `profileimages` (
  `id` int(11) NOT NULL,
  `dataemail` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `ImageUserId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `stars` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `stars`, `user_id`, `group_id`) VALUES
(1, 1, 1, 9),
(2, 2, 1, 9),
(6, 5, 1, 9),
(12, 3, 1, 9),
(13, 5, 1, 9),
(14, 5, 1, 9),
(15, 5, 1, 9),
(16, 5, 1, 9),
(17, 5, 1, 9),
(18, 3, 8, 9),
(19, 4, 1, 9),
(20, 4, 1, 12),
(21, 4, 1, 9),
(22, 4, 1, 10),
(23, 3, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditor_comments`
--
ALTER TABLE `auditor_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index` (`chat_id`),
  ADD KEY `index1` (`auditor_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hh` (`user_id`);

--
-- Indexes for table `cart_groups`
--
ALTER TABLE `cart_groups`
  ADD PRIMARY KEY (`crt_id`),
  ADD KEY `group` (`group_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat` (`admin_id`),
  ADD KEY `chat1` (`user_id`);

--
-- Indexes for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order` (`cart_id`),
  ADD KEY `order1` (`group_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geo_countries`
--
ALTER TABLE `geo_countries`
  ADD PRIMARY KEY (`abv`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index2` (`chat_id`),
  ADD KEY `admin` (`reciever_id`),
  ADD KEY `user` (`sender_id`);

--
-- Indexes for table `penalties`
--
ALTER TABLE `penalties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pen` (`admin_id`),
  ADD KEY `pen1` (`hr_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `test` (`C_ID`);

--
-- Indexes for table `profileimages`
--
ALTER TABLE `profileimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ImageUserId` (`ImageUserId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auditor_comments`
--
ALTER TABLE `auditor_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart_groups`
--
ALTER TABLE `cart_groups`
  MODIFY `crt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=599;

--
-- AUTO_INCREMENT for table `penalties`
--
ALTER TABLE `penalties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profileimages`
--
ALTER TABLE `profileimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auditor_comments`
--
ALTER TABLE `auditor_comments`
  ADD CONSTRAINT `index` FOREIGN KEY (`chat_id`) REFERENCES `chats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `index1` FOREIGN KEY (`auditor_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `hh` FOREIGN KEY (`user_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart_groups`
--
ALTER TABLE `cart_groups`
  ADD CONSTRAINT `group` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chat` FOREIGN KEY (`admin_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat1` FOREIGN KEY (`user_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `admin` FOREIGN KEY (`reciever_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`sender_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penalties`
--
ALTER TABLE `penalties`
  ADD CONSTRAINT `pen` FOREIGN KEY (`admin_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pen1` FOREIGN KEY (`hr_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `test` FOREIGN KEY (`C_ID`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profileimages`
--
ALTER TABLE `profileimages`
  ADD CONSTRAINT `profileimages_ibfk_1` FOREIGN KEY (`ImageUserId`) REFERENCES `data` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `data` (`id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
