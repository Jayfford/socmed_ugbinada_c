 phpMyAdmin SQL Dump
 version 5.2.1
 https://www.phpmyadmin.net/

 Host: 127.0.0.1
 Generation Time: Mar 24, 2025 at 03:16 PM
 Server version: 10.4.32-MariaDB
PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT ;
40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS;
40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;
40101 SET NAMES utf8mb4 */;


Database: `paminawa`

 Table structure for table `user`

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


 Dumping data for table `user`

INSERT INTO `user` (`uid`, `username`, `firstname`, `lastname`, `email`, `gender`, `birthdate`, `password`) VALUES
(9, 'jayfford', 'jayfford', 'ugbinada', 'mark@gmail.com', '', '2025-03-02', 'qwerty123');


Indexes for dumped tables
 Indexes for table `user`
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

AUTO_INCREMENT for dumped tables

AUTO_INCREMENT for table `user`
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;
40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;
40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;