-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 10, 2020 at 08:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `IntStu` for Team A ISa application
--

-- --------------------------------------------------------

--
-- Table structure for table `OnArrival`
--

CREATE TABLE `OnArrival`
(
    `id`      int(10) UNSIGNED NOT NULL,
    `title`   varchar(50)      NOT NULL,
    `advice`  varchar(1000)    NOT NULL,
    `user_ID` int(11)          NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `OnArrival`
--

INSERT INTO `OnArrival` (`id`, `title`, `advice`, `user_ID`)
VALUES (1, 'Tesco is cheaper ', 'Bread is cheaper in Tescos today', 12),
       (2, 'Some more stuff', 'Some great ideas', 12);

-- --------------------------------------------------------

--
-- Table structure for table `PreArrival`
--

CREATE TABLE `PreArrival`
(
    `id`      int(10) UNSIGNED NOT NULL,
    `title`   varchar(50)      NOT NULL,
    `advice`  varchar(1000)    NOT NULL,
    `user_ID` int(11)          NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `PreArrival`
--

INSERT INTO `PreArrival` (`id`, `title`, `advice`, `user_ID`)
VALUES (1, 'Some PreArrival Stuff', 'You must remember to bring your passport ', 12),
       (2, 'PreArrival stuff', 'Some really good advice PreArrival !', 12),
       (3, 'some additional great advice', 'Please bring your visa', 12);

-- --------------------------------------------------------

--
-- Table structure for table `PreDeparture`
--

CREATE TABLE `PreDeparture`
(
    `id`      int(10) UNSIGNED NOT NULL,
    `title`   varchar(50)      NOT NULL,
    `advice`  varchar(1000)    NOT NULL,
    `user_ID` int(11)          NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `PreDeparture`
--

INSERT INTO `PreDeparture` (`id`, `title`, `advice`, `user_ID`)
VALUES (1, 'Tesco shop', 'Lots of cheap beer', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
    `user_ID`       int(10)      NOT NULL,
    `email`         varchar(30)  NOT NULL,
    `password_text` varchar(255) NOT NULL,
    `username`      varchar(20)  NOT NULL,
    `firstname`     varchar(20)   DEFAULT NULL,
    `lastname`      varchar(20)   DEFAULT NULL,
    `nationality`   varchar(20)   DEFAULT NULL,
    `user_type`     varchar(20)  NOT NULL,
    `Interests`     varchar(3000) DEFAULT NULL,
    `Gender`        varchar(20)   DEFAULT NULL,
    `Age`           int(2)        DEFAULT NULL,
    `Uni`           varchar(30)   DEFAULT NULL,
    `Course`        varchar(40)   DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `email`, `password_text`, `username`, `firstname`, `lastname`, `nationality`,
                     `user_type`, `Interests`, `Gender`, `Age`, `Uni`, `Course`)
VALUES (12, 'mikehash@gmail.com', '$2y$10$ACJHzMLdG2DiNLTzwwxwe.1SLqU.L6g/zeOiZNiL2b0p1E0Lxpv32', 'mikehash', 'hash',
        'mike', 'Qatar', 'REG_USER', 'I like playing football drinking beer and reading fiction novels.',
        'Rather not say', 22, 'Robert Gordon University', 'MSc arts and crafts '),
       (13, 'mikehash1@gmail.com', '$2y$10$uGROBXb6Gq1vhhB/jvdBUO5uQBKu.zOfHYL2ab2VRGg.aDpTlRlT2', 'mikehash1', 'hash1',
        'mike1', 'South Africa', 'REG_USER', 'I like cake', 'Rather not say', 77, 'Robert Gordon University',
        'BSc in gaming'),
       (14, 'admin@gmail.com', '$2y$10$0ULQfMlNIPtkzrymJuRgXeOKXPAr9pLz37xoewW3RL79zcaCP/VV6', 'admin', '', '', '',
        'ADMIN', 'I like playing football drinking beer and reading fiction novels.', 'Rather not say', 66,
        'University of Aberdeen', 'MSc in not a lot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OnArrival`
--
ALTER TABLE `OnArrival`
    ADD PRIMARY KEY (`id`),
    ADD KEY `fk_onarrival_users` (`user_ID`);

--
-- Indexes for table `PreArrival`
--
ALTER TABLE `PreArrival`
    ADD PRIMARY KEY (`id`),
    ADD KEY `fk_prearrival_users` (`user_ID`);

--
-- Indexes for table `PreDeparture`
--
ALTER TABLE `PreDeparture`
    ADD PRIMARY KEY (`id`),
    ADD KEY `fk_predeparture_users` (`user_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OnArrival`
--
ALTER TABLE `OnArrival`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT for table `PreArrival`
--
ALTER TABLE `PreArrival`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `PreDeparture`
--
ALTER TABLE `PreDeparture`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `user_ID` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OnArrival`
--
ALTER TABLE `OnArrival`
    ADD CONSTRAINT `fk_onarrival_users` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PreArrival`
--
ALTER TABLE `PreArrival`
    ADD CONSTRAINT `fk_prearrival_users` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PreDeparture`
--
ALTER TABLE `PreDeparture`
    ADD CONSTRAINT `fk_predeparture_users` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
