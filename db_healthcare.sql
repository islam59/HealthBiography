-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 04:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login` int(11) NOT NULL,
  `access` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`userid`, `username`, `password`, `login`, `access`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doctor`
--

CREATE TABLE `tb_doctor` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `access` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `consultingphone` varchar(255) NOT NULL,
  `education` text NOT NULL,
  `work` text NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`userid`, `username`, `password`, `login`, `type`, `access`, `firstname`, `lastname`, `email`, `gender`, `address`, `phone`, `country`, `department`, `consultingphone`, `education`, `work`, `profile`) VALUES
(5, 'doctorone', 'f960e2983c9cd82a5d06e6e7f75b9fe1', 0, 'doctor', 1, 'doctor', 'one', 'doctor@one.com', 'Male', 'Mirpur, Dhaka, Bangladesh. -1209', '+009 9090 909090', 'Bangladesh', 'GYANOCOLOGY', '+009 9090 909090', 'FCPS (London), MBBS (DMC). ', 'Delta Hospital, Mirpur Road, Dhaka. ', ''),
(6, 'doctortwo', '1721d4963c05a3082a0cdd29ef3df696', 0, 'doctor', 1, 'doctor', 'two', 'doctor@two.com', 'Female', 'National Heart Foundation, Mirpur-2, Dhaka.', '+880 9898 898989', 'Bangladesh', 'MEDICINE', '+009 9090 909090', 'MBBS (SSMC), PHD(DMC)', 'MIRPUR, DHAKA', ''),
(7, 'doctorthree', '8b72ae61add0c32fb5eff35d96c0a907', 0, 'doctor', 1, 'doctor', 'three', 'doctor@three.com', 'Male', 'Dhaka, Bangladesh -1290', '+880 7676 565656', 'Bangladesh', 'Cardiac Specialist', '+998 8989 898989', 'MBBS (RU), FCPS(DU), PHD (LONDON)', 'Popular Medical College, Dhaka.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_location`
--

CREATE TABLE `tb_location` (
  `lid` int(11) NOT NULL,
  `address` text NOT NULL,
  `doctorid` int(11) NOT NULL,
  `consultingdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_location`
--

INSERT INTO `tb_location` (`lid`, `address`, `doctorid`, `consultingdate`) VALUES
(1, 'Popular Medical- Dhanmondi 2', 1, '23 Nov 2929'),
(2, 'Labaid, DHanmondi-3', 1, '23 Octobar 2299'),
(3, 'adf sf af asf adsfadsf adsf asd asdf ', 5, '2017-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_patient`
--

CREATE TABLE `tb_patient` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `locationid` int(11) NOT NULL,
  `applydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `consulting` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_patient`
--

INSERT INTO `tb_patient` (`id`, `userid`, `locationid`, `applydate`, `consulting`, `doctorid`) VALUES
(1, 1, 1, '2017-10-20 22:48:52', 0, 1),
(2, 2, 2, '2017-10-20 22:55:42', 0, 1),
(3, 1, 1, '2017-10-21 01:28:49', 0, 1),
(4, 4, 3, '2017-10-28 02:02:46', 0, 5),
(5, 4, 3, '2017-10-28 02:02:53', 0, 5),
(6, 4, 3, '2017-10-28 02:22:40', 0, 5),
(7, 4, 3, '2017-10-28 02:23:04', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_prediction`
--

CREATE TABLE `tb_prediction` (
  `id` int(11) NOT NULL,
  `symptom` text NOT NULL,
  `suggestion` text NOT NULL,
  `refference` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prediction`
--

INSERT INTO `tb_prediction` (`id`, `symptom`, `suggestion`, `refference`) VALUES
(4, 'sadfasdf asdf asdf asdf ', 'asdf asdf adsfasdf asdf asdf a', 'asdf asdfdasf asf'),
(5, 'asf adsfasdf adsf adsf', ' asdf adsfas fasd', 'f asdf adsfasf asdf '),
(6, 'a sfasdfasdf asfa sf', 'asd fadsf asdfasdf', 'asf adsfads fasd '),
(7, 'a sfasdfasdf asfa sf', 'asd fadsf asdfasdf', 'asf adsfads fasd '),
(8, '          a sfasdfadsfadsf asdf        ', '         asd fasf ads f       ', '          asf asdfasdf        '),
(9, 'nothing.', 'noyhin', 'nothing.'),
(10, 'nohsldakjfas salkdjf aj', 'aslkdjfsakf jsdakfj askdafjaksdjf askd jfaskdf jaskldjfasdklj faslkdj f', 'alkfjdskjff askfj asdjf sdkajf '),
(11, 'af as dfasdf adsf ds f', 'asdfasdf asdf asdf asdf', 'as fsdf adsfasdfsaf adsf ads fda ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suggestion`
--

CREATE TABLE `tb_suggestion` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suggestion`
--

INSERT INTO `tb_suggestion` (`id`, `title`, `content`, `posted_by`, `published`) VALUES
(3, 'SUGGESTION FOR CHILD HEALTH ! 2017', '  THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. <BR/>THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS.\r\n<BR/> THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. <BR/>THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS. THIS IS ONLY TEST POST OF SUGGESTION BLOCKS.   ', 'doctor', '2017-10-20 21:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login` int(11) NOT NULL,
  `access` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `diesses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`userid`, `username`, `password`, `login`, `access`, `type`, `firstname`, `lastname`, `email`, `phone`, `country`, `gender`, `address`, `diesses`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0, 0, 'user', 'Abdur', 'Rahman', 'abdur@rahman.com', '+009 9009 000000', 'Bangladesh', 'Male', 'Dhaka, Bangladesh-2345', 'Narcolpse'),
(4, 'userone', '150b2d9625d095772a7e9f66dc3f2715', 1, 1, 'user', 'user', 'one', 'user@one.com', '+009 9090 090909', 'Bangladesh', 'Male', 'DHaka, Bangladesh -1290', 'N/A'),
(5, 'usertwo', 'da56bde451870e7edbb6a65f2045d142', 0, 0, 'user', 'user', 'two', 'user@two.com', '+009 0909 090909', 'Bangladesh', 'Male', 'Nilkhet, Dhaka, Bangladesh -9090', 'N/A'),
(6, 'userthree', '1de54ee388d9bf255d32ae997b82e32c', 0, 0, 'user', 'user', 'three', 'user@three', '+990 9090 909090', 'Bangladesh', 'Male', 'Azimpur, DHkaa, Bangladesh. -9898', 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tb_location`
--
ALTER TABLE `tb_location`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `tb_patient`
--
ALTER TABLE `tb_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prediction`
--
ALTER TABLE `tb_prediction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suggestion`
--
ALTER TABLE `tb_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_location`
--
ALTER TABLE `tb_location`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_patient`
--
ALTER TABLE `tb_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_prediction`
--
ALTER TABLE `tb_prediction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_suggestion`
--
ALTER TABLE `tb_suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
