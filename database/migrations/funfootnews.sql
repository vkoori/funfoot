-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 04:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funfootnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `key_create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `private_key` char(6) NOT NULL,
  `public_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `userid`, `create_at`, `key_create_at`, `private_key`, `public_key`) VALUES
(1, 1, '2020-09-27 16:07:16', '2020-09-28 12:32:53', '451739', '1922a88639525c36ca263bf930a8bf8f77b25b5261601210236765.7');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `flag`) VALUES
(1, 'Afghanistan', 'af.png'),
(2, 'Albania', 'al.png'),
(3, 'Algeria', 'dz.png'),
(4, 'American Samoa', 'as.png'),
(5, 'Andorra', 'ad.png'),
(6, 'Angola', 'ao.png'),
(7, 'Anguilla', 'ai.png'),
(8, 'Antarctica', 'aq.png'),
(9, 'Antigua and Barbuda', 'ag.png'),
(10, 'Argentina', 'ar.png'),
(11, 'Armenia', 'am.png'),
(12, 'Aruba', 'aw.png'),
(13, 'Australia', 'au.png'),
(14, 'Austria', 'at.png'),
(15, 'Azerbaijan', 'az.png'),
(16, 'Bahamas', 'bs.png'),
(17, 'Bahrain', 'bh.png'),
(18, 'Bangladesh', 'bd.png'),
(19, 'Barbados', 'bb.png'),
(20, 'Belarus', 'by.png'),
(21, 'Belgium', 'be.png'),
(22, 'Belize', 'bz.png'),
(23, 'Benin', 'bj.png'),
(24, 'Bermuda', 'bm.png'),
(25, 'Bhutan', 'bt.png'),
(26, 'Bolivia', 'bo.png'),
(27, 'Bosnia and Herzegovina', 'ba.png'),
(28, 'Botswana', 'bw.png'),
(29, 'Bouvet Island', 'bv.png'),
(30, 'Brazil', 'br.png'),
(31, 'British Indian Ocean Territory', 'io.png'),
(32, 'Brunei Darussalam', 'bn.png'),
(33, 'Bulgaria', 'bg.png'),
(34, 'Burkina Faso', 'bf.png'),
(35, 'Burundi', 'bi.png'),
(36, 'Cambodia', 'kh.png'),
(37, 'Cameroon', 'cm.png'),
(38, 'Canada', 'ca.png'),
(39, 'Cape Verde', 'cv.png'),
(40, 'Cayman Islands', 'ky.png'),
(41, 'Central African Republic', 'cf.png'),
(42, 'Chad', 'td.png'),
(43, 'Chile', 'cl.png'),
(44, 'China', 'cn.png'),
(45, 'Christmas Island', 'cx.png'),
(46, 'Cocos (Keeling) Islands', 'cc.png'),
(47, 'Colombia', 'co.png'),
(48, 'Comoros', 'km.png'),
(49, 'Congo', 'cg.png'),
(50, 'Congo, the Democratic Republic of the', 'cd.png'),
(51, 'Cook Islands', 'ck.png'),
(52, 'Costa Rica', 'cr.png'),
(53, 'Cote D\'Ivoire', 'ci.png'),
(54, 'Croatia', 'hr.png'),
(55, 'Cuba', 'cu.png'),
(56, 'Cyprus', 'cy.png'),
(57, 'Czech Republic', 'cz.png'),
(58, 'Denmark', 'dk.png'),
(59, 'Djibouti', 'dj.png'),
(60, 'Dominica', 'dm.png'),
(61, 'Dominican Republic', 'do.png'),
(62, 'Ecuador', 'ec.png'),
(63, 'Egypt', 'eg.png'),
(64, 'El Salvador', 'sv.png'),
(65, 'Equatorial Guinea', 'gq.png'),
(66, 'Eritrea', 'er.png'),
(67, 'Estonia', 'ee.png'),
(68, 'Ethiopia', 'et.png'),
(69, 'Falkland Islands (Malvinas)', 'fk.png'),
(70, 'Faroe Islands', 'fo.png'),
(71, 'Fiji', 'fj.png'),
(72, 'Finland', 'fi.png'),
(73, 'France', 'fr.png'),
(74, 'French Guiana', 'gf.png'),
(75, 'French Polynesia', 'pf.png'),
(76, 'French Southern Territories', 'tf.png'),
(77, 'Gabon', 'ga.png'),
(78, 'Gambia', 'gm.png'),
(79, 'Georgia', 'ge.png'),
(80, 'Germany', 'de.png'),
(81, 'Ghana', 'gh.png'),
(82, 'Gibraltar', 'gi.png'),
(83, 'Greece', 'gr.png'),
(84, 'Greenland', 'gl.png'),
(85, 'Grenada', 'gd.png'),
(86, 'Guadeloupe', 'gp.png'),
(87, 'Guam', 'gu.png'),
(88, 'Guatemala', 'gt.png'),
(89, 'Guinea', 'gn.png'),
(90, 'Guinea-Bissau', 'gw.png'),
(91, 'Guyana', 'gy.png'),
(92, 'Haiti', 'ht.png'),
(93, 'Heard Island and Mcdonald Islands', 'hm.png'),
(94, 'Holy See (Vatican City State)', 'va.png'),
(95, 'Honduras', 'hn.png'),
(96, 'Hong Kong', 'hk.png'),
(97, 'Hungary', 'hu.png'),
(98, 'Iceland', 'is.png'),
(99, 'India', 'in.png'),
(100, 'Indonesia', 'id.png'),
(101, 'Iran, Islamic Republic of', 'ir.png'),
(102, 'Iraq', 'iq.png'),
(103, 'Ireland', 'ie.png'),
(104, 'Israel', 'il.png'),
(105, 'Italy', 'it.png'),
(106, 'Jamaica', 'jm.png'),
(107, 'Japan', 'jp.png'),
(108, 'Jordan', 'jo.png'),
(109, 'Kazakhstan', 'kz.png'),
(110, 'Kenya', 'ke.png'),
(111, 'Kiribati', 'ki.png'),
(112, 'Korea, Democratic People\'s Republic of', 'kp.png'),
(113, 'Korea, Republic of', 'kr.png'),
(114, 'Kuwait', 'kw.png'),
(115, 'Kyrgyzstan', 'kg.png'),
(116, 'Lao People\'s Democratic Republic', 'la.png'),
(117, 'Latvia', 'lv.png'),
(118, 'Lebanon', 'lb.png'),
(119, 'Lesotho', 'ls.png'),
(120, 'Liberia', 'lr.png'),
(121, 'Libyan Arab Jamahiriya', 'ly.png'),
(122, 'Liechtenstein', 'li.png'),
(123, 'Lithuania', 'lt.png'),
(124, 'Luxembourg', 'lu.png'),
(125, 'Macao', 'mo.png'),
(126, 'Macedonia, the Former Yugoslav Republic of', 'mk.png'),
(127, 'Madagascar', 'mg.png'),
(128, 'Malawi', 'mw.png'),
(129, 'Malaysia', 'my.png'),
(130, 'Maldives', 'mv.png'),
(131, 'Mali', 'ml.png'),
(132, 'Malta', 'mt.png'),
(133, 'Marshall Islands', 'mh.png'),
(134, 'Martinique', 'mq.png'),
(135, 'Mauritania', 'mr.png'),
(136, 'Mauritius', 'mu.png'),
(137, 'Mayotte', 'yt.png'),
(138, 'Mexico', 'mx.png'),
(139, 'Micronesia, Federated States of', 'fm.png'),
(140, 'Moldova, Republic of', 'md.png'),
(141, 'Monaco', 'mc.png'),
(142, 'Mongolia', 'mn.png'),
(143, 'Montserrat', 'ms.png'),
(144, 'Morocco', 'ma.png'),
(145, 'Mozambique', 'mz.png'),
(146, 'Myanmar', 'mm.png'),
(147, 'Namibia', 'na.png'),
(148, 'Nauru', 'nr.png'),
(149, 'Nepal', 'np.png'),
(150, 'Netherlands', 'nl.png'),
(151, 'Netherlands Antilles', 'an.png'),
(152, 'New Caledonia', 'nc.png'),
(153, 'New Zealand', 'nz.png'),
(154, 'Nicaragua', 'ni.png'),
(155, 'Niger', 'ne.png'),
(156, 'Nigeria', 'ng.png'),
(157, 'Niue', 'nu.png'),
(158, 'Norfolk Island', 'nf.png'),
(159, 'Northern Mariana Islands', 'mp.png'),
(160, 'Norway', 'no.png'),
(161, 'Oman', 'om.png'),
(162, 'Pakistan', 'pk.png'),
(163, 'Palau', 'pw.png'),
(164, 'Palestinian Territory, Occupied', 'ps.png'),
(165, 'Panama', 'pa.png'),
(166, 'Papua New Guinea', 'pg.png'),
(167, 'Paraguay', 'py.png'),
(168, 'Peru', 'pe.png'),
(169, 'Philippines', 'ph.png'),
(170, 'Pitcairn', 'pn.png'),
(171, 'Poland', 'pl.png'),
(172, 'Portugal', 'pt.png'),
(173, 'Puerto Rico', 'pr.png'),
(174, 'Qatar', 'qa.png'),
(175, 'Reunion', 're.png'),
(176, 'Romania', 'ro.png'),
(177, 'Russian Federation', 'ru.png'),
(178, 'Rwanda', 'rw.png'),
(179, 'Saint Helena', 'sh.png'),
(180, 'Saint Kitts and Nevis', 'kn.png'),
(181, 'Saint Lucia', 'lc.png'),
(182, 'Saint Pierre and Miquelon', 'pm.png'),
(183, 'Saint Vincent and the Grenadines', 'vc.png'),
(184, 'Samoa', 'ws.png'),
(185, 'San Marino', 'sm.png'),
(186, 'Sao Tome and Principe', 'st.png'),
(187, 'Saudi Arabia', 'sa.png'),
(188, 'Senegal', 'sn.png'),
(189, 'Serbia and Montenegro', 'cs.png'),
(190, 'Seychelles', 'sc.png'),
(191, 'Sierra Leone', 'sl.png'),
(192, 'Singapore', 'sg.png'),
(193, 'Slovakia', 'sk.png'),
(194, 'Slovenia', 'si.png'),
(195, 'Solomon Islands', 'sb.png'),
(196, 'Somalia', 'so.png'),
(197, 'South Africa', 'za.png'),
(198, 'South Georgia and the South Sandwich Islands', 'gs.png'),
(199, 'Spain', 'es.png'),
(200, 'Sri Lanka', 'lk.png'),
(201, 'Sudan', 'sd.png'),
(202, 'Suriname', 'sr.png'),
(203, 'Svalbard and Jan Mayen', 'sj.png'),
(204, 'Swaziland', 'sz.png'),
(205, 'Sweden', 'se.png'),
(206, 'Switzerland', 'ch.png'),
(207, 'Syrian Arab Republic', 'sy.png'),
(208, 'Taiwan, Province of China', 'tw.png'),
(209, 'Tajikistan', 'tj.png'),
(210, 'Tanzania, United Republic of', 'tz.png'),
(211, 'Thailand', 'th.png'),
(212, 'Timor-Leste', 'tl.png'),
(213, 'Togo', 'tg.png'),
(214, 'Tokelau', 'tk.png'),
(215, 'Tonga', 'to.png'),
(216, 'Trinidad and Tobago', 'tt.png'),
(217, 'Tunisia', 'tn'),
(218, 'Turkey', 'tr.png'),
(219, 'Turkmenistan', 'tm.png'),
(220, 'Turks and Caicos Islands', 'tc.png'),
(221, 'Tuvalu', 'tv.png'),
(222, 'Uganda', 'ug.png'),
(223, 'Ukraine', 'ua.png'),
(224, 'United Arab Emirates', 'ae.png'),
(225, 'United Kingdom', 'gb.png'),
(226, 'United States', 'us.png'),
(227, 'United States Minor Outlying Islands', 'um.png'),
(228, 'Uruguay', 'uy.png'),
(229, 'Uzbekistan', 'uz.png'),
(230, 'Vanuatu', 'vu.png'),
(231, 'Venezuela', 've.png'),
(232, 'Viet Nam', 'vn.png'),
(233, 'Virgin Islands, British', 'vg.png'),
(234, 'Virgin Islands, U.s.', 'vi.png'),
(235, 'Wallis and Futuna', 'wf.png'),
(236, 'Western Sahara', 'eh.png'),
(237, 'Yemen', 'ye.png'),
(238, 'Zambia', 'zm.png'),
(239, 'Zimbabwe', 'zw.png');

-- --------------------------------------------------------

--
-- Table structure for table `forecasts`
--

CREATE TABLE `forecasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `matchid` bigint(20) UNSIGNED NOT NULL,
  `host_goal` int(10) UNSIGNED NOT NULL,
  `guest_goal` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`id`, `name`, `countryid`) VALUES
(1, 'premier league', 225),
(2, 'خلیج فارس', 101);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `host` bigint(20) UNSIGNED NOT NULL,
  `guest` bigint(20) UNSIGNED NOT NULL,
  `state` smallint(1) NOT NULL COMMENT '-1=before_start, 0=live, 1=after_start',
  `start` datetime NOT NULL,
  `host_goal` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `guest_goal` int(10) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `host`, `guest`, `state`, `start`, `host_goal`, `guest_goal`) VALUES
(3, 1, 2, -1, '2020-11-19 23:30:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `countryid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `players_teams`
--

CREATE TABLE `players_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `playerid` bigint(20) UNSIGNED NOT NULL,
  `teamid` bigint(20) UNSIGNED NOT NULL,
  `season` char(4) NOT NULL COMMENT 'start season'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `premiums`
--

CREATE TABLE `premiums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `expire_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `score` smallint(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `logo`, `countryid`) VALUES
(1, 'چلسی', 'http://localhost/funfoot/public/assets/images/logo/33.jpg', 225),
(2, 'منچستر', 'http://localhost/funfoot/public/assets/images/logo/galleryc.png', 225);

-- --------------------------------------------------------

--
-- Table structure for table `teams_leagues`
--

CREATE TABLE `teams_leagues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leagueid` bigint(20) UNSIGNED NOT NULL,
  `teamid` bigint(20) UNSIGNED NOT NULL,
  `season` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams_leagues`
--

INSERT INTO `teams_leagues` (`id`, `leagueid`, `teamid`, `season`) VALUES
(2, 1, 2, '2020'),
(4, 1, 1, '2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` char(11) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `accessibility` smallint(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mobile`, `pass`, `active`, `accessibility`) VALUES
(1, '09211403302', '$2y$10$voCnd9CGDaixx3ItqSUs5.Z04xIgMAQo/0Xihvi/S3MQ7RJ7sHkWy', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forecasts`
--
ALTER TABLE `forecasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leagues_country` (`countryid`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_team` (`host`),
  ADD KEY `guest_team` (`guest`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_country` (`countryid`);

--
-- Indexes for table `players_teams`
--
ALTER TABLE `players_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_team` (`teamid`),
  ADD KEY `player_name` (`playerid`);

--
-- Indexes for table `premiums`
--
ALTER TABLE `premiums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_country` (`countryid`);

--
-- Indexes for table `teams_leagues`
--
ALTER TABLE `teams_leagues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `league_name` (`leagueid`),
  ADD KEY `team_season` (`teamid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `forecasts`
--
ALTER TABLE `forecasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players_teams`
--
ALTER TABLE `players_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premiums`
--
ALTER TABLE `premiums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams_leagues`
--
ALTER TABLE `teams_leagues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leagues`
--
ALTER TABLE `leagues`
  ADD CONSTRAINT `leagues_country` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `guest_team` FOREIGN KEY (`guest`) REFERENCES `teams_leagues` (`teamid`) ON DELETE CASCADE,
  ADD CONSTRAINT `host_team` FOREIGN KEY (`host`) REFERENCES `teams_leagues` (`teamid`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `player_country` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `players_teams`
--
ALTER TABLE `players_teams`
  ADD CONSTRAINT `player_name` FOREIGN KEY (`playerid`) REFERENCES `players` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `player_team` FOREIGN KEY (`teamid`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `team_country` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams_leagues`
--
ALTER TABLE `teams_leagues`
  ADD CONSTRAINT `league_name` FOREIGN KEY (`leagueid`) REFERENCES `leagues` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_season` FOREIGN KEY (`teamid`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
