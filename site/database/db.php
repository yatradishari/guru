-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_description` text NOT NULL,
  `banners_name` varchar(255) NOT NULL,
  `display_order` int(10) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image_title`, `image_description`, `banners_name`, `display_order`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(2, 'Venenatis felis pulvinar ultrices', 'Consectetur adipisicing elit. Dignissimos fuga eos nihil repellat et enim, neque, aliquid delectus quia hic praesentium sit, repudiandae pariatur deleniti vero.', '147197770610646.jpg', 1, 1, 0, '2016-08-23 18:45:03', '2016-08-23 18:45:03'),
(3, 'Image Title 3', 'This is a demo description 3', '14719779033920.jpg', 3, 1, 0, '2016-08-23 18:46:04', '2016-08-23 18:46:04'),
(4, 'Image Title 4', 'This is a demo description 4', '14719782004887.jpg', 4, 1, 0, '2016-08-23 18:50:00', '2016-08-23 18:50:00'),
(5, 'Image Title 2', 'This is a demo description 2', '14719782208102.jpg', 2, 1, 0, '2016-08-23 18:50:20', '2016-08-23 18:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` bigint(30) NOT NULL,
  `state_id` int(10) NOT NULL,
  `location_name` text NOT NULL,
  `title_meta_tag` text NOT NULL,
  `primary_image_id` bigint(30) NOT NULL,
  `description` longtext NOT NULL,
  `how_to_reach` longtext NOT NULL,
  `when_to_visit` longtext NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `visibility` tinyint(2) NOT NULL DEFAULT '1',
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1:Offbeat;2:Popular',
  `added_by` bigint(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `state_id`, `location_name`, `title_meta_tag`, `primary_image_id`, `description`, `how_to_reach`, `when_to_visit`, `status`, `visibility`, `deleted`, `type`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Offbeat 1', 'offbeat-1', 0, 'This is a demo description for destination 1', 'Demo station 1', 'Any season 1', 1, 1, 0, 1, 0, '0000-00-00 00:00:00', '2016-08-04 19:16:13'),
(2, 1, 'Popular 1', 'popular-1', 0, 'This is a demo description for destination 2', 'Demo station 2', 'Any season 2', 1, 1, 0, 2, 0, '0000-00-00 00:00:00', '2016-08-04 19:18:46'),
(3, 1, 'Popular 2', 'popular-2', 16, 'This is a demo description for destination 3', 'Demo station 3', 'Any season 3', 1, 1, 0, 2, 0, '0000-00-00 00:00:00', '2016-08-11 03:04:05'),
(4, 1, 'Popular 3', 'popular-3', 14, 'This is a demo description for destination 4', 'Demo station 4', 'Any season 4', 1, 1, 0, 2, 0, '0000-00-00 00:00:00', '2016-08-11 03:03:41'),
(5, 1, 'Offbeat 2', 'offbeat-2', 15, 'This is a demo description for destination 5', 'Ranthambore National Park is around 11kms from Sawai Madhopur. It is well connected via rail and roadways. The nearest airport is 160 km away, the Jaipur International Airport. Ranthambore is connected by road to cities like Jaipur (160km), Delhi (220 km), Agra (300 km), etc. ', ' The onset of summers and the unbearable scorching sun leaves the summer months a less preferred time to visit Rajasthan. However, if you can bear with the rising mercury, the month of May is perfect for you to visit Ranthambore as this is the best time to spot tigers. Do not forget sunscreens, scarves and full-sleeve cotton outfits to avoid heat strokes. ', 1, 1, 0, 1, 0, '0000-00-00 00:00:00', '2016-08-11 03:03:53'),
(6, 35, 'Offbeat 3', 'offbeat-3', 9, '\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium rhoncus suscipit. Proin nulla sapien, consequat id pharetra a, elementum ut dui. Curabitur vel dui quis est luctus posuere. Morbi eget dictum ex. Vestibulum mollis enim quis felis volutpat, sit amet vulputate risus vulputate. Etiam maximus est vel turpis placerat, nec sodales sem posuere. Vestibulum congue pharetra efficitur. Duis ac nisl aliquam, varius mi eu, rutrum nulla. Fusce dolor magna, aliquam at erat quis, sollicitudin pulvinar ante. Aliquam commodo nunc nunc, vel consectetur eros sollicitudin non. Vestibulum volutpat ex congue, bibendum tortor nec, dictum nibh.\n\nAenean tempus laoreet auctor. Sed imperdiet vehicula purus posuere feugiat. Etiam lectus massa, rhoncus sit amet gravida nec, fermentum in tellus. Nullam mollis massa sodales felis vulputate, et faucibus nulla hendrerit. Suspendisse tempus ante mauris, vel cursus libero accumsan in. Pellentesque risus dolor, varius non placerat ac, sagittis ut urna. Nullam porttitor consectetur dolor sed lobortis. Morbi lacinia, dolor quis facilisis hendrerit, magna velit semper dui, vel facilisis diam sem sit amet mauris.\n\nUt nec dolor orci. Cras sit amet ante et lectus consectetur molestie elementum sed quam. Curabitur mi dolor, semper non felis non, facilisis feugiat orci. Nulla a suscipit arcu. Fusce vitae semper justo. Aliquam quis urna bibendum, molestie elit id, interdum orci. Aenean sit amet mi egestas, iaculis est vel, ullamcorper tellus. Aenean vulputate lobortis consectetur.\n\nUt non quam cursus, facilisis erat nec, malesuada leo. Aliquam erat volutpat. Vestibulum ultricies nisl id lectus condimentum, sed tristique erat lacinia. Duis dignissim justo pellentesque elit sodales placerat nec sit amet dui. Cras tincidunt eu arcu eu sagittis. Aenean eget justo pretium, consectetur massa eget, ornare velit. In rutrum dolor accumsan tellus efficitur ultricies.\n\nNulla eros ex, blandit vel porttitor sit amet, varius nec urna. Vestibulum vel pharetra sapien. Praesent et dapibus turpis, a euismod justo. Phasellus pretium sollicitudin aliquam. Nam sollicitudin sem quis felis tempus rutrum. Vivamus ut vestibulum felis, sed vestibulum magna. Vestibulum id libero vel nibh gravida volutpat et ut nisi. In massa ipsum, tempus id ultrices id, tristique et libero. Nulla scelerisque accumsan nibh eget venenatis. Pellentesque sollicitudin a risus eget aliquam. Aliquam et leo eu diam volutpat gravida id vitae urna. In faucibus porta ornare. ', 'Demo station 6', 'Any season 6', 1, 1, 0, 1, 0, '2016-08-04 17:07:34', '2016-08-11 03:02:41'),
(7, 35, 'This is a test title', 'this-is-a-test-title', 8, 'This is a demo description for destination 7', 'Demo station 7', 'Any season 7', 1, 1, 0, 1, 0, '2016-08-04 17:08:28', '2016-08-11 03:04:17'),
(8, 35, 'Popular 4', 'popular-4', 0, 'This is a demo description for destination 8', 'Demo station 8', 'Any season 8', 1, 1, 0, 2, 0, '2016-08-04 17:08:35', '2016-08-11 03:04:11'),
(9, 35, 'Offbeat 5', 'offbeat-5', 12, 'This is a demo description for destination 9', 'Demo station 9', 'Any season 9', 1, 1, 0, 1, 0, '2016-08-04 17:09:00', '2016-08-11 03:03:18'),
(10, 35, 'Offbeat 6', 'offbeat-6', 4, 'This is a demo description for destination 10', 'Demo station 10', 'Any season 10', 1, 1, 0, 1, 0, '2016-08-04 17:09:14', '2016-08-11 03:04:21'),
(11, 18, 'Offbeat 7', 'offbeat-7', 0, 'This is a demo description for destination 11', 'Demo station 11', 'Any season 11', 1, 1, 0, 1, 0, '2017-01-12 08:40:42', '2017-01-12 08:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `destination_image`
--

DROP TABLE IF EXISTS `destination_image`;
CREATE TABLE IF NOT EXISTS `destination_image` (
  `id` bigint(30) NOT NULL,
  `destination_id` bigint(30) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination_image`
--

INSERT INTO `destination_image` (`id`, `destination_id`, `image_name`, `status`, `deleted`, `created_at`, `updated_at`) VALUES
(4, 10, '14719779033920.jpg', 1, 0, '2016-08-08 16:27:34', '2016-08-08 16:27:34'),
(5, 3, '14719782208102.jpg', 1, 0, '2016-08-08 16:28:59', '2016-08-08 16:28:59'),
(7, 7, '147197796410911.jpg', 1, 0, '2016-08-08 16:31:45', '2016-08-08 16:31:45'),
(8, 7, '14719779033920.jpg', 1, 0, '2016-08-08 16:33:09', '2016-08-08 16:33:09'),
(9, 6, '14719782208102.jpg', 1, 0, '2016-08-11 03:02:41', '2016-08-11 03:02:41'),
(10, 6, '147197796410911.jpg', 1, 0, '2016-08-11 03:02:51', '2016-08-11 03:02:51'),
(11, 7, '14719782004887.jpg', 1, 0, '2016-08-11 03:03:05', '2016-08-11 03:03:05'),
(12, 9, '14719782004887.jpg', 1, 0, '2016-08-11 03:03:18', '2016-08-11 03:03:18'),
(13, 10, '14719782208102.jpg', 1, 0, '2016-08-11 03:03:28', '2016-08-11 03:03:28'),
(14, 4, '147197796410911.jpg', 1, 0, '2016-08-11 03:03:41', '2016-08-11 03:03:41'),
(15, 5, '14719782004887.jpg', 1, 0, '2016-08-11 03:03:53', '2016-08-11 03:03:53'),
(16, 3, '147197796410911.jpg', 1, 0, '2016-08-11 03:04:05', '2016-08-11 03:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_home`
--

DROP TABLE IF EXISTS `holiday_home`;
CREATE TABLE IF NOT EXISTS `holiday_home` (
  `id` bigint(30) NOT NULL,
  `state_id` bigint(30) NOT NULL,
  `location_id` bigint(30) NOT NULL,
  `title` text NOT NULL,
  `address` longtext NOT NULL,
  `description` longtext NOT NULL,
  `tariff` longtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `how_to_book` longtext NOT NULL,
  `visibility` tinyint(2) NOT NULL DEFAULT '1',
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday_home`
--

INSERT INTO `holiday_home` (`id`, `state_id`, `location_id`, `title`, `address`, `description`, `tariff`, `phone`, `how_to_book`, `visibility`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'ddddd', 'ddd', 'des', '100', '9874563210', '', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 35, 7, 'ddddd55', 'aaa', 'des2', '200', '9874563211', '', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 3, 'fghfgh', 'ccc', 'des3', '300', '9874563212', '', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 5, 9, 'new', 'ccc', 'des3', '300', '9874563212', '', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operator_service`
--

DROP TABLE IF EXISTS `operator_service`;
CREATE TABLE IF NOT EXISTS `operator_service` (
  `id` bigint(30) NOT NULL,
  `operator_id` bigint(30) NOT NULL,
  `service_id` bigint(30) NOT NULL,
  `visibility` tinyint(2) NOT NULL DEFAULT '1',
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator_service`
--

INSERT INTO `operator_service` (`id`, `operator_id`, `service_id`, `visibility`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 1, '2016-11-10 16:10:00', '2016-11-10 16:10:00'),
(2, 1, 2, 1, 1, '2016-11-10 16:10:00', '2016-11-10 16:10:00'),
(3, 2, 1, 1, 1, '2016-11-10 16:10:00', '2016-11-10 16:10:00'),
(4, 4, 3, 1, 1, '2016-11-10 16:10:00', '2016-11-10 16:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_offer`
--

DROP TABLE IF EXISTS `service_offer`;
CREATE TABLE IF NOT EXISTS `service_offer` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `visibility` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_offer`
--

INSERT INTO `service_offer` (`id`, `name`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Hotel Booking', 1, '2017-01-30 07:07:22', '2017-01-30 07:07:22'),
(2, 'Railway Ticket Booking', 1, '2017-01-30 07:07:22', '2017-01-30 07:07:22'),
(3, 'Flight Ticket Booking', 1, '2017-01-30 07:07:22', '2017-01-30 07:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) NOT NULL,
  `settings_key` varchar(255) NOT NULL,
  `settings_value` longtext NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_key`, `settings_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SITE_NAME', 'Yatradishari', 1, '2016-08-08 22:40:00', '2016-08-08 18:31:35'),
(2, 'META_KEYWORDS', 'Travel, Offbeat Tour, Popular Travel Destination, Travel Agent, Package Tour, Travel Agent Kolkata, Tour & Travels, Holidayhome, Budget Hotel, Yatradishari.com', 1, '2016-08-08 22:40:00', '2016-08-08 18:34:38'),
(3, 'FACEBOOK_URL', 'ggg', 1, '2016-08-08 22:40:00', '2016-08-11 03:08:15'),
(4, 'GOOGLE_URL', '', 1, '2016-08-08 22:40:00', '2016-08-08 22:40:00'),
(5, 'TWITTER_URL', 'https://twitter.com/travelyatraguru', 1, '2016-08-08 22:40:00', '2016-08-08 22:40:00'),
(6, 'CONTACT_EMAIL', 'yatradishari@gmail.com', 1, '2016-08-08 22:40:00', '2016-08-08 22:40:00'),
(7, 'CONTACT_PHONE', '+919874563210', 1, '2016-08-08 22:40:00', '2016-08-08 22:40:00'),
(8, 'FACEBOOK_DESCRIPTION', '', 1, '2016-08-08 22:40:00', '2016-08-08 22:40:00'),
(9, 'FACEBOOK_IMAGE', '', 1, '2016-08-08 22:40:00', '2016-08-08 22:40:00'),
(10, 'META_DESCRIPTIONS', 'Yatradishari offers the list of holiday home and choose popular travel destination and search suitable travel agent for your needs', 1, '2016-08-08 22:40:00', '2016-08-08 18:36:27'),
(11, 'GOOLE_ANALYTIC', '<script>\n  (function(i,s,o,g,r,a,m){i[''GoogleAnalyticsObject'']=r;i[r]=i[r]||function(){\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\n  })(window,document,''script'',''https://www.google-analytics.com/analytics.js'',''ga'');\n\n  ga(''create'', ''UA-76571750-1'', ''auto'');\n  ga(''send'', ''pageview'');\n\n</script>', 1, '2016-08-08 22:40:00', '2016-08-08 17:30:06'),
(12, 'COMPANY_NAME', 'Yatradishari', 1, '2016-08-08 22:40:00', '2016-08-08 17:30:06'),
(13, 'TAGLINE', '', 1, '2016-08-08 22:40:00', '2016-08-08 17:30:06'),
(14, 'ABOUT_US_SHORT', '@Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi asperiores magnam ducimus laboriosam soluta, odio doloribus, voluptas numquam facilis consectetur nam in repudiandae commodi odit iste sed doloremque repellat.', 1, '2016-08-08 22:40:00', '2016-08-08 17:30:06'),
(15, 'CONTACT_ADDRESS', '983 Avenue Street, New York', 1, '2016-08-08 22:40:00', '2016-08-08 17:30:06'),
(16, 'COMPANY_NAME', 'Yatradishari', 1, '2016-08-08 22:40:00', '2016-08-08 17:30:06'),
(17, 'COMPANY_TAGLINE', 'Tagline goes here', 1, '2016-08-08 22:40:00', '2016-08-08 17:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(10) unsigned NOT NULL,
  `country_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`, `image`, `status`) VALUES
(1, 99, 'ANDAMAN AND NICOBAR ISLANDS', '4.jpg', 1),
(2, 99, 'ANDHRA PRADESH', '', 1),
(3, 99, 'ARUNACHAL PRADESH', '', 1),
(4, 99, 'ASSAM', '', 1),
(5, 99, 'BIHAR', '4.jpg', 1),
(6, 99, 'CHATTISGARH', '', 1),
(7, 99, 'CHANDIGARH', '', 1),
(8, 99, 'DAMAN AND DIU', '', 1),
(9, 99, 'DELHI', '', 1),
(10, 99, 'DADRA AND NAGAR HAVELI', '', 1),
(11, 99, 'GOA', '', 1),
(12, 99, 'GUJARAT', '', 1),
(13, 99, 'HIMACHAL PRADESH', '', 1),
(14, 99, 'HARYANA', '', 1),
(15, 99, 'JAMMU AND KASHMIR', '', 1),
(16, 99, 'JHARKHAND', '', 1),
(17, 99, 'KERALA', '', 1),
(18, 99, 'KARNATAKA', '', 1),
(19, 99, 'LAKSHADWEEP', '', 1),
(20, 99, 'MEGHALAYA', '', 1),
(21, 99, 'MAHARASHTRA', '', 1),
(22, 99, 'MANIPUR', '', 1),
(23, 99, 'MADHYA PRADESH', '', 1),
(24, 99, 'MIZORAM', '', 1),
(25, 99, 'NAGALAND', '', 1),
(26, 99, 'ORISSA', '', 1),
(27, 99, 'PUNJAB', '', 1),
(28, 99, 'PONDICHERRY', '', 1),
(29, 99, 'RAJASTHAN', '', 1),
(30, 99, 'SIKKIM', '', 1),
(31, 99, 'TAMIL NADU', '', 1),
(32, 99, 'TRIPURA', '', 1),
(33, 99, 'UTTARAKHAND', '', 1),
(34, 99, 'UTTAR PRADESH', '', 1),
(35, 99, 'WEST BENGAL', '4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_operator`
--

DROP TABLE IF EXISTS `tour_operator`;
CREATE TABLE IF NOT EXISTS `tour_operator` (
  `id` bigint(20) NOT NULL,
  `agent_name` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `address_line_one` varchar(255) NOT NULL,
  `address_line_two` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `landline` varchar(50) NOT NULL,
  `mobile1` varchar(50) NOT NULL,
  `mobile2` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `display` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0:Blocked,1:Show',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1:active,0:Inactive',
  `member_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:Free; 2:bronze,2:silver,3:Platinum,4:Gold',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_operator`
--

INSERT INTO `tour_operator` (`id`, `agent_name`, `logo`, `description`, `address_line_one`, `address_line_two`, `city`, `state_id`, `postal_code`, `landline`, `mobile1`, `mobile2`, `contact_no`, `display`, `status`, `member_type`, `created_at`, `updated_at`) VALUES
(1, 'Demo Agent 1', '', 'This is demo description for Demo Agent 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim suscipit turpis interdum dignissim. Nullam semper est non congue ornare. Donec at posuere odio. Duis maximus eget diam vel egestas. Ut ultricies tellus porttitor orci egestas, id sagittis dolor suscipit. Sed volutpat at mauris sed suscipit. Sed nunc odio, luctus eu orci in, pharetra vehicula orci. Aliquam at erat eget dolor tempor facilisis. Nunc non velit malesuada, luctus purus sed, fermentum neque. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel consequat augue. Fusce convallis egestas ipsum, ac faucibus mi vestibulum id. Integer pharetra tortor et lectus varius, quis hendrerit nulla vestibulum. Donec vestibulum tristique placerat.\n\nDonec at finibus enim, tempus tristique leo. Cras mollis maximus sapien eget ultrices. Duis finibus diam et mauris posuere facilisis. Nam rutrum ante enim, ut ornare nisi ullamcorper vitae. Cras eu augue efficitur, aliquet magna eu, eleifend magna. Fusce tempus dolor vitae volutpat consectetur. Suspendisse dui augue, blandit non erat id, cursus maximus nisl. Vivamus sit amet ultrices nisi.\n\nMaecenas ut semper erat, sit amet ultricies ex. Fusce pulvinar nisl dolor, quis posuere magna rhoncus in. Sed a volutpat mi, at egestas nulla. In at elementum nisl. Suspendisse potenti. Phasellus maximus efficitur aliquam. Morbi non lacinia lacus, et porta sapien. Morbi ac varius lorem. Nam gravida, nulla vel fermentum porta, mauris eros scelerisque purus, at feugiat magna nibh cursus ipsum. Nam et nibh congue, tempor velit quis, consequat dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc efficitur urna in nunc vulputate, a sagittis ipsum egestas. Integer aliquet, magna non vehicula sagittis, lacus sapien suscipit lacus, non ultricies felis massa sed urna. Sed volutpat odio at urna malesuada porta in a tellus. Nunc eleifend, sapien quis convallis interdum, erat arcu egestas enim, sagittis sodales augue libero at ipsum. ', '', '', '', 2, '', '', '', '', '', 1, 1, 1, '2017-01-30 10:20:37', '2017-01-30 03:27:11'),
(2, 'Demo Agent 2', '', 'This is demo description for Demo Agent 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim suscipit turpis interdum dignissim. Nullam semper est non congue ornare. Donec at posuere odio. Duis maximus eget diam vel egestas. Ut ultricies tellus porttitor orci egestas, id sagittis dolor suscipit. Sed volutpat at mauris sed suscipit. Sed nunc odio, luctus eu orci in, pharetra vehicula orci. Aliquam at erat eget dolor tempor facilisis. Nunc non velit malesuada, luctus purus sed, fermentum neque. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel consequat augue. Fusce convallis egestas ipsum, ac faucibus mi vestibulum id. Integer pharetra tortor et lectus varius, quis hendrerit nulla vestibulum. Donec vestibulum tristique placerat.\n\nDonec at finibus enim, tempus tristique leo. Cras mollis maximus sapien eget ultrices. Duis finibus diam et mauris posuere facilisis. Nam rutrum ante enim, ut ornare nisi ullamcorper vitae. Cras eu augue efficitur, aliquet magna eu, eleifend magna. Fusce tempus dolor vitae volutpat consectetur. Suspendisse dui augue, blandit non erat id, cursus maximus nisl. Vivamus sit amet ultrices nisi.\n\nMaecenas ut semper erat, sit amet ultricies ex. Fusce pulvinar nisl dolor, quis posuere magna rhoncus in. Sed a volutpat mi, at egestas nulla. In at elementum nisl. Suspendisse potenti. Phasellus maximus efficitur aliquam. Morbi non lacinia lacus, et porta sapien. Morbi ac varius lorem. Nam gravida, nulla vel fermentum porta, mauris eros scelerisque purus, at feugiat magna nibh cursus ipsum. Nam et nibh congue, tempor velit quis, consequat dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc efficitur urna in nunc vulputate, a sagittis ipsum egestas. Integer aliquet, magna non vehicula sagittis, lacus sapien suscipit lacus, non ultricies felis massa sed urna. Sed volutpat odio at urna malesuada porta in a tellus. Nunc eleifend, sapien quis convallis interdum, erat arcu egestas enim, sagittis sodales augue libero at ipsum. ', '', '', '', 2, '', '', '', '', '', 1, 1, 3, '2017-01-30 10:20:37', '2017-01-30 03:27:11'),
(3, 'ADemo Agent 3', '', 'This is demo description for Demo Agent 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim suscipit turpis interdum dignissim. Nullam semper est non congue ornare. Donec at posuere odio. Duis maximus eget diam vel egestas. Ut ultricies tellus porttitor orci egestas, id sagittis dolor suscipit. Sed volutpat at mauris sed suscipit. Sed nunc odio, luctus eu orci in, pharetra vehicula orci. Aliquam at erat eget dolor tempor facilisis. Nunc non velit malesuada, luctus purus sed, fermentum neque. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel consequat augue. Fusce convallis egestas ipsum, ac faucibus mi vestibulum id. Integer pharetra tortor et lectus varius, quis hendrerit nulla vestibulum. Donec vestibulum tristique placerat.\n\nDonec at finibus enim, tempus tristique leo. Cras mollis maximus sapien eget ultrices. Duis finibus diam et mauris posuere facilisis. Nam rutrum ante enim, ut ornare nisi ullamcorper vitae. Cras eu augue efficitur, aliquet magna eu, eleifend magna. Fusce tempus dolor vitae volutpat consectetur. Suspendisse dui augue, blandit non erat id, cursus maximus nisl. Vivamus sit amet ultrices nisi.\n\nMaecenas ut semper erat, sit amet ultricies ex. Fusce pulvinar nisl dolor, quis posuere magna rhoncus in. Sed a volutpat mi, at egestas nulla. In at elementum nisl. Suspendisse potenti. Phasellus maximus efficitur aliquam. Morbi non lacinia lacus, et porta sapien. Morbi ac varius lorem. Nam gravida, nulla vel fermentum porta, mauris eros scelerisque purus, at feugiat magna nibh cursus ipsum. Nam et nibh congue, tempor velit quis, consequat dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc efficitur urna in nunc vulputate, a sagittis ipsum egestas. Integer aliquet, magna non vehicula sagittis, lacus sapien suscipit lacus, non ultricies felis massa sed urna. Sed volutpat odio at urna malesuada porta in a tellus. Nunc eleifend, sapien quis convallis interdum, erat arcu egestas enim, sagittis sodales augue libero at ipsum. ', '', '', '', 35, '', '', '', '', '', 1, 1, 3, '2017-01-30 10:20:37', '2017-01-30 03:27:11'),
(4, 'Demo Agent 4', '', 'This is demo description for Demo Agent 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim suscipit turpis interdum dignissim. Nullam semper est non congue ornare. Donec at posuere odio. Duis maximus eget diam vel egestas. Ut ultricies tellus porttitor orci egestas, id sagittis dolor suscipit. Sed volutpat at mauris sed suscipit. Sed nunc odio, luctus eu orci in, pharetra vehicula orci. Aliquam at erat eget dolor tempor facilisis. Nunc non velit malesuada, luctus purus sed, fermentum neque. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel consequat augue. Fusce convallis egestas ipsum, ac faucibus mi vestibulum id. Integer pharetra tortor et lectus varius, quis hendrerit nulla vestibulum. Donec vestibulum tristique placerat.\n\nDonec at finibus enim, tempus tristique leo. Cras mollis maximus sapien eget ultrices. Duis finibus diam et mauris posuere facilisis. Nam rutrum ante enim, ut ornare nisi ullamcorper vitae. Cras eu augue efficitur, aliquet magna eu, eleifend magna. Fusce tempus dolor vitae volutpat consectetur. Suspendisse dui augue, blandit non erat id, cursus maximus nisl. Vivamus sit amet ultrices nisi.\n\nMaecenas ut semper erat, sit amet ultricies ex. Fusce pulvinar nisl dolor, quis posuere magna rhoncus in. Sed a volutpat mi, at egestas nulla. In at elementum nisl. Suspendisse potenti. Phasellus maximus efficitur aliquam. Morbi non lacinia lacus, et porta sapien. Morbi ac varius lorem. Nam gravida, nulla vel fermentum porta, mauris eros scelerisque purus, at feugiat magna nibh cursus ipsum. Nam et nibh congue, tempor velit quis, consequat dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc efficitur urna in nunc vulputate, a sagittis ipsum egestas. Integer aliquet, magna non vehicula sagittis, lacus sapien suscipit lacus, non ultricies felis massa sed urna. Sed volutpat odio at urna malesuada porta in a tellus. Nunc eleifend, sapien quis convallis interdum, erat arcu egestas enim, sagittis sodales augue libero at ipsum. ', '', '', '', 11, '', '', '', '', '', 1, 1, 1, '2017-01-30 10:20:37', '2017-01-30 03:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` tinyint(2) NOT NULL DEFAULT '1',
  `approve` tinyint(2) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `user_type`, `approve`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'dfdfg', 'admin@admin.com', '$2y$10$/FcvO6UVwfvO0DFfqdJm5upIYhJb3dlRyUE3QIkTUk7v6Yt0dqxZ.', 1, 1, 'xQvoO56EZQYR8oztdXyCMJJ2mbXorI25pHS14zgRR3b0uTnfdobUC1fb9WeF', '0000-00-00 00:00:00', '2017-01-25 02:20:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_image`
--
ALTER TABLE `destination_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_home`
--
ALTER TABLE `holiday_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator_service`
--
ALTER TABLE `operator_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `service_offer`
--
ALTER TABLE `service_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_operator`
--
ALTER TABLE `tour_operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `destination_image`
--
ALTER TABLE `destination_image`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `holiday_home`
--
ALTER TABLE `holiday_home`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `operator_service`
--
ALTER TABLE `operator_service`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_offer`
--
ALTER TABLE `service_offer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tour_operator`
--
ALTER TABLE `tour_operator`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;