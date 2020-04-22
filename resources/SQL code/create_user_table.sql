SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `IntStu`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
    `user_ID`       int(10)     NOT NULL,
    `email`         varchar(30) NOT NULL,
    `password_text` varchar(30) NOT NULL,
    `username`      varchar(20) NOT NULL,
    `firstname`     varchar(20)   DEFAULT NULL,
    `lastname`      varchar(20)   DEFAULT NULL,
    `nationality`   varchar(20)   DEFAULT NULL,
    `user_type`     varchar(20) NOT NULL,
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
VALUES (4, 'admin@test.com', 'Test123', 'admin', 'test', 'test', 'Cameroon', 'ADMIN', '', '', 0, '0', '0'),
       (10, 'mike@gmail.com', 'Test123', 'test1', 'test', 'test', 'Ghana', 'REG_USER',
        'I like football and support Manchester United. I also play the flute and like going to the movies.', 'Male',
        35, 'Robert Gordon University', 'MSc IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `user_ID` int(10) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 11;
