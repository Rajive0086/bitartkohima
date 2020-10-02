-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 07:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `njcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_openings`
--

CREATE TABLE `job_openings` (
  `job_no` int(11) NOT NULL,
  `date` varchar(30) DEFAULT NULL,
  `company` varchar(15) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `location` varchar(15) NOT NULL,
  `Discription` varchar(150) NOT NULL,
  `salery` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_openings`
--

INSERT INTO `job_openings` (`job_no`, `date`, `company`, `job_title`, `location`, `Discription`, `salery`, `address`) VALUES
(1, '01-01-2019', 'MWC', 'Faculty', 'kohima', 'trainer', '2000', 'razhupoint'),
(2, '01-01-2019', 'MWC', 'Faculty', 'kohima', 'trainer', '1000', 'razhupoint');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rid` int(10) UNSIGNED NOT NULL COMMENT 'Primary Key: Unique role ID.',
  `name` varchar(64) NOT NULL DEFAULT '' COMMENT 'Unique role name.',
  `weight` int(11) NOT NULL DEFAULT '0' COMMENT 'The weight of this role in listings and the user interface.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores user roles.';

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rid`, `name`, `weight`) VALUES
(3, 'administrator', 2),
(1, 'anonymous user', 0),
(2, 'Employers', 1),
(5, 'njc administrator', 4),
(4, 'njc registered candidate', 3),
(6, 'njc staff', 5),
(7, 'njc web candidate', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Primary Key: Unique user ID.',
  `name` varchar(60) NOT NULL DEFAULT '' COMMENT 'Unique user name.',
  `pass` varchar(128) NOT NULL DEFAULT '' COMMENT 'User’s password (hashed).',
  `mail` varchar(254) DEFAULT '' COMMENT 'User’s e-mail address.',
  `theme` varchar(255) NOT NULL DEFAULT '' COMMENT 'User’s default theme.',
  `signature` varchar(255) NOT NULL DEFAULT '' COMMENT 'User’s signature.',
  `signature_format` varchar(255) DEFAULT NULL COMMENT 'The filter_format.format of the signature.',
  `created` int(11) NOT NULL DEFAULT '0' COMMENT 'Timestamp for when user was created.',
  `access` int(11) NOT NULL DEFAULT '0' COMMENT 'Timestamp for previous time user accessed the site.',
  `login` int(11) NOT NULL DEFAULT '0' COMMENT 'Timestamp for user’s last login.',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Whether the user is active(1) or blocked(0).',
  `timezone` varchar(32) DEFAULT NULL COMMENT 'User’s time zone.',
  `language` varchar(12) NOT NULL DEFAULT '' COMMENT 'User’s default language.',
  `picture` int(11) NOT NULL DEFAULT '0' COMMENT 'Foreign key: file_managed.fid of user’s picture.',
  `init` varchar(254) DEFAULT '' COMMENT 'E-mail address used for initial account creation.',
  `data` longblob COMMENT 'A serialized array of name value pairs that are related to the user. Any form values posted during user edit are stored and are loaded into the $user object during user_load(). Use of this field is discouraged and it will likely disappear in a future...',
  `uuid` char(36) NOT NULL DEFAULT '' COMMENT 'The Universally Unique Identifier.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores user data.';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `pass`, `mail`, `theme`, `signature`, `signature_format`, `created`, `access`, `login`, `status`, `timezone`, `language`, `picture`, `init`, `data`, `uuid`) VALUES
(0, '', '', '', '', '', NULL, 0, 0, 0, 0, NULL, '', 0, '', NULL, '5e88fdaf-5357-4233-a1e8-35c8bf0df2e2'),
(1, 'njcwebmaster', '$S$DzOnXVL1y6MdG87Yga/JjUiyOXudW0rX.sk/sLJElsM.qhDVcVR6', 'njcwebmaster@nagalandjobcentre.com', '', '', 'filtered_html', 1433693798, 1549042507, 1549042507, 1, 'Asia/Kolkata', '', 0, 'jameskikn@gmail.com', 0x613a373a7b733a373a226f7665726c6179223b693a313b733a31363a22636b656469746f725f64656661756c74223b733a313a2274223b733a32303a22636b656469746f725f73686f775f746f67676c65223b733a313a2274223b733a31343a22636b656469746f725f7769647468223b733a343a2231303025223b733a31333a22636b656469746f725f6c616e67223b733a323a22656e223b733a31383a22636b656469746f725f6175746f5f6c616e67223b733a313a2274223b733a373a22636f6e74616374223b693a303b7d, '222c3664-8b87-4595-ac70-1c3e54c1fb93'),
(60, 'stafftest', '$S$DcF.Q61Z00z0G2b4dhp79tTEJvIWL8133gTJD12Bi0jwXzH3xD.v', 'jameskikn@gmail.com', '', '', 'filtered_html', 1490026417, 1491681997, 1491665099, 1, NULL, '', 0, 'njcstaff1@gmail.com', 0x613a363a7b733a31363a22636b656469746f725f64656661756c74223b733a313a2274223b733a32303a22636b656469746f725f73686f775f746f67676c65223b733a313a2274223b733a31343a22636b656469746f725f7769647468223b733a343a2231303025223b733a31333a22636b656469746f725f6c616e67223b733a323a22656e223b733a31383a22636b656469746f725f6175746f5f6c616e67223b733a313a2274223b733a373a22636f6e74616374223b693a313b7d, '15ea1072-7e97-47ef-b270-ecc05e2def10'),
(131, 'njcadmin', '$S$DW0MVJWiuzgiK2PWzS.EzgRuw1bXd071zT0qwX3DVVTmgGzAIaO8', 'njcadmin@nagalandjobcentre.com', '', '', 'simple', 1492542030, 1549024712, 1549017089, 1, NULL, '', 0, 'njcadmin@nagalandjobcentre.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '278e9ea3-559b-44eb-b2e0-6c7f0b61fd72'),
(146, 'Albert Peri', 'xyx123', 'Albert13peri@gmail.com', '', '', 'simple', 1506055421, 1507110602, 1507110317, 1, NULL, '', 0, 'Albert13peri@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '7186f5c4-affb-4a81-b746-623ed9a2f0ba'),
(147, 'alangla7777', '$S$DmoudD5QEk24yf1HwWMOb3xWqUm15eEH1qkohsOr2XeFJv.BsjC8', 'alangla7777@gmail.com', '', '', 'simple', 1506055534, 1506055637, 1506055637, 1, NULL, '', 0, 'alangla7777@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '4aa5b4f0-600e-440d-93da-c71be0b2faf5'),
(148, 'ponso_lam', '$S$DfPeDCkFGYFea5f2DDzvIYNhUJgBMxu6dTCzusbmjDgZifIiIhFC', 'asoulam18@gmail.com', '', '', 'simple', 1506088841, 1506134672, 1506134672, 1, NULL, '', 0, 'asoulam18@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'cf3c891f-f83b-48cb-b0e3-e8e1f88bd2c7'),
(149, 'Avito Rolnu', '$S$D5Xp6aw2.qzVcdmxwXdFOkh65OzIow6WXdBkNbVa3c1YalfO9/Nh', 'avitovictor@gmail.com', '', '', 'simple', 1506090210, 1506624295, 1506624086, 1, NULL, '', 0, 'avitovictor@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'ff1ee29c-229c-4b0f-bf4e-700cf6b455c9'),
(150, 'ericdawson24', '$S$DDV1gdXDlqBW.WmWMbf4iPQEoaO7mM7cz2l88CxqKGdsGDXkk9MQ', 'angukato.sumi82@gmail.com', '', '', 'simple', 1506367584, 1506368278, 1506367769, 1, NULL, '', 0, 'angukato.sumi82@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '3ee25f2c-e9ba-4be3-b699-00ca72bed26d'),
(151, 'shikx3l7lr', '$S$Dj/X.Oiku34LhPmM7b7LgrAPoQCHR5kOvsv4tDGyHpARlWaROviN', 'shikato3l7r@gmail.com', '', '', 'simple', 1506786252, 0, 0, 1, NULL, '', 0, 'shikato3l7r@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '8a2b0e0a-ee0d-4702-ac09-07d12fe7ae4e'),
(152, 'Atit Rana', '$S$DP1zotvddLy9oGbC6Sg5CPjRdFTfNgnyhum8GjO/8IyYVLjDAmSo', 'atitrana@gmail.com', '', '', 'simple', 1507172752, 0, 0, 1, NULL, '', 0, 'atitrana@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'ad3567ea-ce54-463e-805a-2b0f2ca66ed6'),
(153, 'sanenjamir', '$S$DQ.LKHNyumvt4CmXrp9CQodAvcp5154Bxl5pTlVcVVCcVcw0Cx19', 'saurezjamir@gmail.com', '', '', 'simple', 1507875544, 1507875847, 1507875657, 1, NULL, '', 0, 'saurezjamir@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'b20b89d9-13d3-4b64-bf48-efa79e8b50e2'),
(154, 'Hadi Dabhi', '$S$DhX9eiFIiST/2xNPQWZbUf.apmX7KCU1h4478Cn3siEfusL4nmoF', 'hadidabhi7860@gmail.com', '', '', 'simple', 1517743793, 0, 0, 1, NULL, '', 0, 'hadidabhi7860@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '644ad184-1b80-40f8-b912-0a7d3b01b1ab'),
(155, 'AVINAVA BRAHMA', '$S$DtcqYDRjy4.3K8s2bdT.ewq1envlSX12EWOiMQJ6FoKFMVPrGcJT', 'abhinav.brahma@gmail.com', '', '', 'simple', 1517760983, 0, 0, 1, NULL, '', 0, 'abhinav.brahma@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'a734063b-543c-41f4-8f7b-1f499b602628'),
(168, 'T SANGMAI CHOBA', '$S$Dofd.7vgvUXOSBM2YkP9KIYvSdYqi72N51A1Hk0BqcPJqPwjfFKB', 'sangmaic@gmail.com', '', '', 'simple', 1519893874, 0, 0, 1, NULL, '', 0, 'sangmaic@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'a8d880d0-65ce-4be0-8755-13ec3db57e75'),
(169, 'SANGMAI', '$S$DgxVSGPhGeS/yfxZtMrLmxuQ5tmKTUZoLLcWyrS169lCVuBjHvHl', 'sangmait@rediffmail.com', '', '', 'simple', 1519894760, 1522764593, 1522764593, 1, NULL, '', 0, 'sangmait@rediffmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '6d788688-d93c-4ec2-8af9-82d8c322911a'),
(170, 'OPANGMAR', '$S$Dq88abq6EApfNE82zhxRzG2W1E9.R2t3PVhTycVE7aBvjPQqobJz', 'opangmar7@gmail.com', '', '', 'simple', 1521260105, 0, 0, 1, NULL, '', 0, 'opangmar7@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '3f524c5f-c208-4032-81fe-7c33e760d909'),
(171, 'Sungjemmongla_pongen', '$S$D3YoBxuksguxoFOjMqsh0hLgJF6zRc7sgh0hOG4/0jVKsY4l8gHa', 'sungjemmongla.pongen4444@gmail.com', '', '', 'simple', 1521522958, 0, 0, 1, NULL, '', 0, 'sungjemmongla.pongen4444@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '0f2adce2-c8c5-451e-b9aa-ed4a3b81c8d0'),
(172, 'temjen', '$S$DvdTV8aDCVPSnfW5At8CED/KWy/yxabiGve4mgB0jRrmaHvr7yQG', 'temjenlibalongchar@gmail.com', '', '', 'simple', 1522298040, 0, 0, 1, NULL, '', 0, 'temjenlibalongchar@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '83038766-e46f-4c85-badd-26292cbf23bc'),
(173, 'Ilitoli Kiba', '$S$DqRE7.GHVsirMazbsrrqWDCABowNnZq6oZqpYselTkg8FE14g60h', 'stevejoanne321@gmail.com', '', '', 'simple', 1524996690, 0, 0, 1, NULL, '', 0, 'stevejoanne321@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '4c6a5d8f-6856-4914-8338-0cc83baf38ce'),
(174, 'Hisenlo Kent', '$S$DEM.iqbBqy5vZPPhJjZpH0TdGyw.cIQO5AKWMlX6jq6yCjrkW45u', 'asenlokentasenlo@gmail.com', '', '', 'simple', 1525106468, 1525663528, 1525663528, 1, NULL, '', 0, 'asenlokentasenlo@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'ff0b930f-7cf6-49a6-b7be-07a3c8c6525b'),
(177, 'Neizokhoto', '$S$DR0iYLms06obG0.aOtfsaw33ZvJWD2oR2FPMy/P9YJY7liPsGROZ', 'neizokhotozashiimo@yahoo.in', '', '', 'simple', 1527544301, 1527544675, 1527544477, 1, NULL, '', 0, 'neizokhotozashiimo@yahoo.in', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '6999a276-0d3c-4186-859c-a7891ffc73fd'),
(189, 'Mayonim', '$S$Dkf2EPvK9Next1w5zWrGuzqyG56ADZ4c/NkJseyoPpcU2PZgE5ul', 'mayonim2018@gmail.com', '', '', 'simple', 1547193496, 0, 0, 1, NULL, '', 0, 'mayonim2018@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '5a5dbe4a-9bc9-479f-abf2-ebf8b8efb078'),
(190, 'Zachano', '$S$DAeWlASfmqGrXDAPsMvJ0sjbTSgAQuCl./Hp2umpjYNhXn3AuW8s', 'lichanbenitungoe@gmail.com', '', '', 'simple', 1547820348, 0, 0, 1, NULL, '', 0, 'lichanbenitungoe@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'b112e7da-f38d-48c1-9272-cbdd2a3c0956'),
(191, 'Khingdaniel', '$S$Dq3ET6j8uLnWmp1wHcIj4ztgdFsEZn9xK8c7Rp61xbeN99y8bCvI', 'khingdaniel@gmail.com', '', '', 'simple', 1548648483, 0, 0, 1, NULL, '', 0, 'khingdaniel@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, 'e9cacd9b-b2a3-455e-892e-b90112ad979d'),
(192, 'Chonchiden', '$S$Dvwxnqw0xy5L2PnSGipf.DzqUIupMz/a76WaIc3lUha6AXt9k6gv', 'kitzchon13@gmail.com', '', '', 'simple', 1548759665, 0, 0, 1, NULL, '', 0, 'kitzchon13@gmail.com', 0x613a313a7b733a373a22636f6e74616374223b693a313b7d, '1e74fa28-4b13-4496-bcba-42a1d4992f58'),
(193, 'atswebadmin', '$S$D2Lh4A0JUOL4mmSy0.kVgs43s1qH.w.HB2T6Zzl4PxYC7bQJ6QKb', 'anchortechservices.nl@gmail.com', '', '', 'simple', 1548869871, 1548872758, 1548871129, 1, NULL, '', 0, 'eadserve.nl@gmail.com', 0x613a323a7b733a373a22636f6e74616374223b693a303b733a373a226f7665726c6179223b693a313b7d, '828e348d-41af-425e-b82d-dc200b3d33f1');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `uid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Primary Key: users.uid for user.',
  `rid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Primary Key: role.rid for role.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Maps users to roles.';

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`uid`, `rid`) VALUES
(1, 3),
(60, 6),
(131, 5),
(131, 6),
(146, 7),
(147, 7),
(148, 7),
(149, 7),
(150, 7),
(151, 7),
(152, 7),
(153, 7),
(154, 7),
(155, 7),
(168, 7),
(169, 7),
(170, 7),
(171, 7),
(172, 7),
(173, 7),
(174, 7),
(177, 7),
(189, 7),
(190, 7),
(191, 7),
(192, 7),
(193, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `name_weight` (`name`,`weight`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `access` (`access`),
  ADD KEY `created` (`created`),
  ADD KEY `mail` (`mail`),
  ADD KEY `picture` (`picture`),
  ADD KEY `uuid` (`uuid`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`uid`,`rid`),
  ADD KEY `rid` (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary Key: Unique role ID.', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
