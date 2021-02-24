-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 03:10 PM
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
(12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `cart_groups`
--

CREATE TABLE `cart_groups` (
  `crt_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_groups`
--

INSERT INTO `cart_groups` (`crt_id`, `cart_id`, `group_id`) VALUES
(24, 11, 18),
(25, 11, 18),
(43, 9, 11),
(52, 9, 18),
(53, 9, 14),
(55, 14, 13);

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
(1, 2, 8),
(2, 2, 10),
(6, 8, 7);

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
(1, 'user1', 'u', 'user1@gmail.com', '123', 'male', 'user', ''),
(2, 'user2', 'u', 'user2@gmail.com', '123', 'male', 'user', ''),
(3, 'user3', 'u', 'user3@admin.com', '123', 'Male', 'user', ''),
(4, 'user4', 'u', 'user4@gmail.com', '123', 'Male', 'user', ''),
(5, 'user5', 'u', 'user5@gmail.com', '123', 'Male', 'user', ''),
(6, 'user6', 'u', 'user6@gmail.com', '123', 'Male', 'user', ''),
(7, 'user7', 'u', 'user7@gmail.com', '123', 'Male', 'user', ''),
(8, 'admin15', 'a', 'admin@admin.com', '123', 'Male', 'admin', ''),
(10, 'admin2', 'a', 'admin2@admin.com', '123', 'Male', 'admin', '');

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
  `id` int(100) NOT NULL,
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
(9, 'Saint Catherine', '2020-12-29 22:15:00.000000', 'Egypt', '', 50, 'https://image.shutterstock.com/image-photo/amazing-panorama-monastery-st-catherine-260nw-1019019016.jpg'),
(10, 'Saint Catherine', '2020-12-27 13:20:00.000000', 'Egypt', '', 20, 'catherine.jpg'),
(11, 'Saint Catherine', '2020-12-27 13:22:00.000000', 'Egypt', '', 30, 'catherine.jpg'),
(12, 'Abo Galoom', '2020-12-22 04:35:00.000000', 'Egypt', '', 40, 'cc.jpg'),
(13, 'Abo Galoom', '2020-12-22 04:35:00.000000', 'Egypt', '', 15, 'cc.jpg'),
(14, 'Abo Galoom', '2020-12-22 04:35:00.000000', 'Egypt', '', 50, 'cc.jpg'),
(15, 'Abo Galoom', '2020-12-22 04:35:00.000000', 'Egypt', '', 20, 'cc.jpg'),
(16, 'Abo Galoom', '2020-12-22 04:35:00.000000', 'Egypt', '', 10, 'cc.jpg'),
(17, 'Abo Galoom', '2021-02-08 19:39:00.000000', 'Japan', '', 60, ''),
(18, 'Pyramids', '2021-02-15 21:19:00.000000', 'Argentina', '', 70, 'halfdome.jpg'),
(19, 'saint', '2021-03-05 17:20:00.000000', 'Algeria', 'dsds', 42, ''),
(20, '', '0000-00-00 00:00:00.000000', 'Angola', '', 30, ''),
(21, 'Saint Catherine', '2021-03-19 20:52:00.000000', 'Aland Islands', 'iygiy', 70, ''),
(22, 'Saint Catherine', '2021-03-19 20:52:00.000000', 'Aland Islands', 'iygiy', 70, ''),
(23, 'Saint Catherine', '0000-00-00 00:00:00.000000', 'Aland Islands', '', 50, ''),
(24, '', '0000-00-00 00:00:00.000000', 'Afghanistan', '', 0, ''),
(25, '', '0000-00-00 00:00:00.000000', 'Afghanistan', '', 0, ''),
(26, '', '0000-00-00 00:00:00.000000', 'Afghanistan', '', 0, ''),
(27, '', '0000-00-00 00:00:00.000000', 'Afghanistan', '', 0, ''),
(28, '', '0000-00-00 00:00:00.000000', 'Afghanistan', '', 0, ''),
(29, '', '2019-03-02 23:58:00.000000', 'Aland Islands', 'dsds', 3, ''),
(30, '', '0000-00-00 00:00:00.000000', 'Afghanistan', '', 0, ''),
(31, '', '0000-00-00 00:00:00.000000', 'Afghanistan', '', 0, ''),
(32, 'Saint Catherine', '2021-02-17 21:05:00.000000', 'Albania', 'dsds', 52, '');

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
(275, 2, 8, 'hi', 0),
(276, 2, 8, 'hi', 0),
(277, 2, 8, 'ho', 0),
(295, 2, 8, '', 0),
(296, 2, 8, 'rr', 0),
(297, 2, 8, 'rr', 0),
(298, 2, 8, 've', 0),
(299, 2, 8, 'hi', 0),
(300, 2, 8, 'bt', 0),
(303, 7, 8, 'h', 0),
(304, 7, 8, 'h', 0),
(305, 2, 10, 'uu', 0),
(306, 2, 10, 'uu', 0),
(307, 2, 10, 'bt', 0),
(308, 2, 10, 'bt', 0),
(309, 2, 10, 'b', 0),
(310, 2, 10, 'b', 0),
(311, 2, 10, 'f', 0),
(312, 2, 10, 'f', 0),
(313, 2, 8, 'rr', 0),
(314, 2, 8, 'd', 0),
(315, 2, 8, 'dv', 0),
(316, 2, 10, 'vf', 0),
(317, 2, 10, 'vf', 0),
(318, 2, 8, 'hh', 0),
(319, 2, 10, 'hh', 2),
(320, 2, 10, 'hh', 0),
(321, 2, 10, 'd', 0),
(322, 2, 10, 'hh', 0),
(323, 2, 10, 'gtt', 0),
(324, 2, 10, 'gtt', 0),
(325, 2, 10, 'gr', 2),
(326, 2, 10, 'gr', 0),
(327, 2, 10, 'gr', 2),
(328, 2, 10, 'gr', 0),
(329, 2, 10, 'vr', 2),
(330, 2, 10, 'vr', 0),
(331, 2, 10, 'vr', 2),
(332, 2, 10, 'vr', 2),
(333, 2, 10, 'vr', 2),
(334, 2, 10, 'gn', 2),
(335, 2, 10, 'gn', 0),
(336, 2, 10, 'yy', 2),
(337, 2, 10, 'yy', 0),
(338, 2, 10, 'y', 2),
(339, 2, 10, 'y', 2),
(340, 2, 10, '', 2),
(341, 2, 10, 'fe', 2),
(342, 2, 10, '', 2),
(343, 2, 10, 'jjj', 2),
(344, 2, 10, 'yy', 2),
(345, 2, 10, 'g', 2),
(346, 2, 10, '', 2),
(347, 8, 2, 'd', 1),
(348, 8, 2, 'd', 1),
(349, 8, 2, '', 1),
(350, 8, 2, 'f', 1),
(351, 8, 2, 'f', 1),
(352, 8, 2, '', 1),
(353, 8, 7, 'j', 6),
(354, 8, 7, 'd', 6),
(355, 8, 7, 'y', 6),
(356, 8, 2, 'y', 1),
(357, 2, 8, 'hi', 1),
(358, 2, 10, 'z', 2),
(359, 8, 7, 'g', 6),
(360, 8, 7, 'hh', 6),
(361, 8, 7, 'hh', 6),
(362, 8, 7, 'yo', 6),
(363, 8, 7, 'z', 6),
(364, 8, 7, 'a', 6),
(365, 8, 7, 'a', 6),
(366, 8, 7, 'a', 6),
(367, 8, 7, 'a', 6),
(368, 8, 2, 'f', 1),
(369, 8, 7, 'd', 6),
(370, 8, 7, 'd', 6),
(371, 8, 7, 'e', 6),
(372, 2, 8, 'z', 1),
(373, 2, 10, 'd', 2),
(374, 2, 8, 'd', 1),
(375, 2, 8, 'f', 1),
(376, 2, 8, 'f', 1),
(377, 2, 8, 'f', 1),
(378, 2, 8, 'd', 1),
(379, 2, 8, 'f', 1),
(380, 2, 8, 'd', 1),
(381, 2, 8, 'f', 1),
(382, 2, 8, 'yyy', 1),
(383, 8, 2, 'y', 1),
(384, 8, 7, 'd', 6),
(385, 8, 7, 'd', 6),
(386, 8, 7, 'gr', 6),
(387, 8, 7, 'r', 6),
(388, 8, 2, 'g', 1),
(389, 8, 2, 's', 1),
(390, 8, 2, 'd', 1),
(391, 8, 2, 's', 1),
(392, 8, 2, 'z', 1),
(393, 8, 7, 'hi', 6),
(394, 8, 7, 'z', 6),
(395, 8, 7, 'd', 6),
(396, 8, 7, 's', 6),
(398, 8, 7, 'fe', 6),
(399, 8, 7, 'gr', 6),
(412, 8, 2, 'Admin sent this 1', 1);

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hh` (`user_id`);

--
-- Indexes for table `cart_groups`
--
ALTER TABLE `cart_groups`
  ADD PRIMARY KEY (`crt_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat` (`admin_id`),
  ADD KEY `chat1` (`user_id`);

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
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_groups`
--
ALTER TABLE `cart_groups`
  MODIFY `crt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

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
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `hh` FOREIGN KEY (`user_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `test` FOREIGN KEY (`C_ID`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profileimages`
--
ALTER TABLE `profileimages`
  ADD CONSTRAINT `profileimages_ibfk_1` FOREIGN KEY (`ImageUserId`) REFERENCES `data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
