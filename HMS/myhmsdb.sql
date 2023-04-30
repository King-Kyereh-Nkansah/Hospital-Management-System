-- phpMyAdmin SQL Dump


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `myhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(4, 1, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Emmanuel', 550, '2020-02-14', '10:00:00', 1, 0),
(4, 2, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Samuel', 700, '2020-02-28', '10:00:00', 0, 1),
(4, 3, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Davis', 1000, '2020-02-19', '03:00:00', 0, 1),
(11, 4, 'Shraddha', 'Kapoor', 'Female', 'shraddha@gmail.com', '9768946252', 'King', 500, '2020-02-29', '20:00:00', 1, 1),
(4, 5, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Samuel', 700, '2020-02-28', '12:00:00', 1, 1),
(4, 6, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Emmanuel', 550, '2020-02-26', '15:00:00', 0, 1),
(2, 8, 'Alex', 'Boadu', 'Female', 'Alex@gmail.com', '8976897689', 'Emmanuel', 550, '2020-03-21', '10:00:00', 1, 1),
(5, 9, 'Godfred', 'Kusi', 'Male', 'Godfred@gmail.com', '9070897653', 'Emmanuel', 550, '2020-03-19', '20:00:00', 1, 0),
(4, 10, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Emmanuel', 550, '0000-00-00', '14:00:00', 1, 0),
(4, 11, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Samuel', 700, '2020-03-27', '15:00:00', 1, 1),
(9, 12, 'William', 'Blake', 'Male', 'william@gmail.com', '8683619153', 'Georgina', 800, '2020-03-26', '12:00:00', 1, 1),
(9, 13, 'William', 'Blake', 'Male', 'william@gmail.com', '8683619153', 'Helen', 450, '2020-03-26', '14:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Annel', 'Annel@gmail.com', '7896677554', 'Hey Admin'),
(' Victoria', 'Victoria@gmail.com', '9899778865', 'Good Job, Pal'),
('Annan', 'Annan@gmail.com', '9997888879', 'How can I reach you?'),
('Aaron', 'Aaron@gmail.com', '8788979967', 'Love your site'),
('Mani', 'mani@gmail.com', '8977768978', 'Want some coffee?'),
('Karthick', 'karthi@gmail.com', '9898989898', 'Good service'),
('Alby', 'Alby@gmail.com', '8979776868', 'Love your service'),
('Sadiq', 'Sadiq@gmail.com', '9087897564', 'Love your service. Thank you!'),
('Jane', 'jane@gmail.com', '7869869757', 'I love your service!');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `email`, `spec`, `docFees`) VALUES
('King', 'King123', 'King@gmail.com', 'General', 500),
('Benjamin', 'Benjamin123', 'Benjamin@gmail.com', 'Cardiologist', 600),
('Samuel', 'Samuel123', 'Samuel@gmail.com', 'General', 700),
('Emmanuel', 'Emmanuel123', 'Emmanuel@gmail.com', 'Pediatrician', 550),
('Georgina', 'Georgina123', 'Georgina@gmail.com', 'Pediatrician', 800),
('Davis', 'Davis123', 'Davis@gmail.com', 'Cardiologist', 1000),
('Alby', 'abbis123', 'Alby@gmail.com', 'Neurologist', 1500),
('Helen', 'Helen123', 'Helen@gmail.com', 'Pediatrician', 450),
('King Nkansah', '123456', 'King@gmail.com', 'General', 500);

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Raymond', 'George', 'Male', 'Raymond@gmail.com', '9876543210', 'Raymond123', 'Raymond123'),
(2, 'Alex', 'Boadu', 'Female', 'Alex@gmail.com', '8976897689', 'Alex123', 'Alex123'),
(3, 'Sheriff', 'Kumi', 'Male', 'Sheriff@gmail.com', '8976898463', 'Sheriff123', 'Sheriff123'),
(4, 'Kingsford', 'Lalo', 'Male', 'Kingsfordsmart0@gmail.com', '8838489464', 'Kingsford123', 'Kingsford123'),
(5, 'Godfred', 'Kusi', 'Male', 'Godfred@gmail.com', '9070897653', 'gautam123', 'gautam123'),
(6, 'Stephen', 'Addo', 'Male', 'Stephen@gmail.com', '9059986865', 'sushant123', 'sushant123'),
(7, 'Nancy', 'Deborah', 'Female', 'nancy@gmail.com', '9128972454', 'nancy123', 'nancy123'),
(8, 'Kenny', 'Sebastian', 'Male', 'kenny@gmail.com', '9809879868', 'kenny123', 'kenny123'),
(9, 'William', 'Blake', 'Male', 'william@gmail.com', '8683619153', 'william123', 'william123'),
(10, 'Peter', 'Norvig', 'Male', 'peter@gmail.com', '9609362815', 'peter123', 'peter123'),
(11, 'Shraddha', 'Kapoor', 'Female', 'shraddha@gmail.com', '9768946252', 'shraddha123', 'shraddha123');

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Samuel', 4, 11, 'Kingsford', 'Lalo', '2020-03-27', '15:00:00', 'Cough', 'Nothing', 'Just take a teaspoon of Benadryl every night'),
('Emmanuel', 2, 8, 'Alex', 'Boadu', '2020-03-21', '10:00:00', 'Severe Fever', 'Nothing', 'Take bed rest'),
('Georgina', 9, 12, 'William', 'Blake', '2020-03-26', '12:00:00', 'Sever fever', 'nothing', 'Paracetamol -> 1 every morning and night'),
('Helen', 9, 13, 'William', 'Blake', '2020-03-26', '14:00:00', 'Cough', 'Skin dryness', 'Intake fruits with more water content');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;


