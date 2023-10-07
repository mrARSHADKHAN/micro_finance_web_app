-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 09:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvedselfbusiness`
--

CREATE TABLE `approvedselfbusiness` (
  `BusinessID` int(11) NOT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `approved_loans`
--

CREATE TABLE `approved_loans` (
  `user_id` varchar(60) NOT NULL,
  `loan_ref_num` varchar(60) NOT NULL,
  `loan_amt` decimal(10,2) NOT NULL,
  `loan_typ` varchar(60) NOT NULL,
  `installments` int(20) NOT NULL,
  `paid` decimal(10,2) NOT NULL DEFAULT 0.00,
  `due` decimal(10,2) NOT NULL DEFAULT 0.00,
  `date_approved` date NOT NULL,
  `due_date` date NOT NULL,
  `app_id` int(11) NOT NULL,
  `ins_paid` int(10) NOT NULL,
  `ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approved_loans`
--

INSERT INTO `approved_loans` (`user_id`, `loan_ref_num`, `loan_amt`, `loan_typ`, `installments`, `paid`, `due`, `date_approved`, `due_date`, `app_id`, `ins_paid`, `ins_date`) VALUES
('user1@gmail.com', '2147483647', 20000.00, 'Personal Loan', 6, 20000.04, -0.04, '2023-10-03', '2024-04-03', 2, 6, '2024-04-03'),
('arshad@gmail.com', 'PE969078149539', 50000.00, 'Personal Loan', 6, 50000.04, -0.04, '2023-10-06', '2024-04-06', 4, 6, '2024-04-06'),
('user1@gmail.com', 'PE267295672000', 25000.00, 'Personal Loan', 6, 0.00, 25000.00, '2023-10-07', '2024-04-07', 5, 0, '2023-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `bank_info`
--

CREATE TABLE `bank_info` (
  `bank_id` int(11) NOT NULL,
  `bnk_name` varchar(100) NOT NULL,
  `acc_num` varchar(100) NOT NULL,
  `branch` varchar(60) NOT NULL,
  `acc_typ` varchar(100) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `loan_ref_num` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_info`
--

INSERT INTO `bank_info` (`bank_id`, `bnk_name`, `acc_num`, `branch`, `acc_typ`, `user_id`, `loan_ref_num`) VALUES
(3, 'commercial bank', '75425362', 'kandy', 'Savings Account', 'user1@gmail.com', '0'),
(7, 'commercial bank', '123456789', 'kandy', 'Current Account', 'user1@gmail.com', '2147483647'),
(11, 'commercial bank', '23452345345', 'kandy', 'Savings Account', 'user1@gmail.com', 'HO718147258095'),
(12, 'commercial bank', '121231231', 'kandy', 'Savings Account', 'user2@gmail.com', 'VE290177202682'),
(13, 'commercial bank', '121231231', 'kandy', 'Savings Account', 'user2@gmail.com', 'VE843199677210'),
(14, 'Commercial bank', '8756325723', 'Kandy', 'Savings Account', 'arshad@gmail.com', 'PE969078149539'),
(15, 'HNB Bank', '546545487945', 'Mawanella', 'Savings Account', 'user2@gmail.com', 'BU973062578212'),
(16, 'commercial bank', '424542452242', 'kandy', 'Savings Account', 'user1@gmail.com', 'PE267295672000'),
(17, 'commercial bank', '45456456456', 'kandy', 'Savings Account', 'user4@gmail.com', 'BU535524859973');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BranchID` int(11) NOT NULL,
  `AccountNo` varchar(20) DEFAULT NULL,
  `LoanAmounts` decimal(10,2) DEFAULT NULL,
  `InterestRates` decimal(5,2) DEFAULT NULL,
  `Plans` text DEFAULT NULL,
  `Promotions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `bnk_name` varchar(120) NOT NULL,
  `holder_name` varchar(150) NOT NULL,
  `card_num` varchar(30) NOT NULL,
  `exp_month` int(10) NOT NULL,
  `exp_year` int(10) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `card_typ` varchar(30) NOT NULL,
  `status` int(10) NOT NULL,
  `last_digit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `user_id`, `bnk_name`, `holder_name`, `card_num`, `exp_month`, `exp_year`, `cvv`, `card_typ`, `status`, `last_digit`) VALUES
(7, 'user1@gmail.com', 'commercial bank', 'User One', '00BFGmpbGeBiU', 1, 2030, '000', 'VISA', 1, 1112),
(8, 'arshad@gmail.com', 'Commercial bank', 'Arshad Khan', '12sHIwIAzYi8w', 3, 2030, '123', 'VISA', 1, 4564);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `phone` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `last_name`, `phone`, `user_id`, `comments`) VALUES
('aaaa', 'aa', 11, 1, '121'),
('Jhony', 'Depp', 112344233, 2, 'God work'),
('Jhony', 'Depp', 778956220, 3, 'Good work'),
('Jhony', 'Depp', 778956220, 4, 'Unbelievable');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) NOT NULL,
  `IDNo` varchar(20) DEFAULT NULL,
  `PassportNo` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `AccountNo` varchar(20) DEFAULT NULL,
  `Gender` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `nic` varchar(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `City` varchar(150) NOT NULL,
  `user_id` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `FirstName`, `MiddleName`, `Surname`, `IDNo`, `PassportNo`, `Address`, `AccountNo`, `Gender`, `dob`, `nic`, `mobile`, `Email`, `City`, `user_id`) VALUES
(1, '', 'Arshad', '', 'Khan', NULL, '54654121BF', '03, Main road, Kandy', NULL, 'Male', '08/23/2023', '997852154V', 771234567, 'arshad@gmail.com', 'Kandy', 'ravi@gmail.com'),
(2, '', 'Ravi', 'wikrama', 'wikrama', NULL, '64636521BF', '0435, Main road, Kandy', NULL, 'Male', '08/23/2023', '995634154V', 771234556, 'ravi@gmail.com', 'Kandy', 'ravi@gmail.com'),
(5, '', 'user1', 'user1', 'user1', NULL, '54654121BF', '03, Main road, Kandy', NULL, 'Male', '08/23/2023', '123456789V', 771234567, 'user1@gmail.com', 'Kandy', 'user1@gmail.com'),
(6, '', 'user2', 'user2', 'user2', NULL, '54654121BF', '5, Main road, Kandy', NULL, 'Male', '08/10/1999', '997852154V', 771234567, 'user2@gmail.com', 'Kandy', 'user2@gmail.com'),
(7, '', 'Arshad', '', 'Khan', NULL, '54652531BF', '03, Main road, Kandy', NULL, 'Male', '08/23/2023', '997834554V', 771234567, 'arshad@gmail.com', 'Kandy', 'arshad@gmail.com'),
(8, '', 'user4', 'user4', 'user4', NULL, '54654121BF', '03, Main road, Kandy', NULL, 'Male', '08/23/2023', '123456789V', 771234567, 'user4@gmail.com', 'Galle', 'user4@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guarantor`
--

CREATE TABLE `guarantor` (
  `GuarantorID` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `PassportNo` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `AccountNo` varchar(20) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `employment` varchar(100) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `contact` int(20) NOT NULL,
  `loan_ref_num` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guarantor`
--

INSERT INTO `guarantor` (`GuarantorID`, `full_name`, `nic`, `PassportNo`, `Address`, `AccountNo`, `email`, `employment`, `user_id`, `contact`, `loan_ref_num`) VALUES
(1, 'mohammed', '957852154V', NULL, '5, Main road, Kandy', NULL, 'ravi@gmail.com', 'Teacher', 'user1@gmail.com', 771234567, '0'),
(2, 'Arshad Khan', '952345154V', NULL, '5, Main road, Kandy', NULL, 'arshad@gmail.com', 'developer', 'user1@gmail.com', 771234567, '2147483647'),
(6, 'Arshad', '997852154V', NULL, '03, Main road, Kandy', NULL, 'arshad@gmail.com', 'web', 'user1@gmail.com', 770245378, 'HO718147258095'),
(7, 'Arshad', '997852154V', NULL, '03, Main road, Kandy', NULL, 'ravi@gmail.com', 'Teacher', 'user2@gmail.com', 770245378, 'VE290177202682'),
(8, 'Arshad', '997852154V', NULL, '03, Main road, Kandy', NULL, 'ravi@gmail.com', 'Teacher', 'user2@gmail.com', 770245378, 'VE843199677210'),
(9, 'Aashik', '993752154V', NULL, '7, Main road, Kandy', NULL, 'aashik3@gmail.com', 'Engineer', 'arshad@gmail.com', 770245378, 'PE969078149539'),
(10, 'Aashik', '200163632456', NULL, '7, Main road, Kandy', NULL, 'aashik@gmail.com', 'developer', 'user2@gmail.com', 770242345, 'BU973062578212'),
(11, 'Ravi', '923852154V', NULL, '5, Main road, Kandy', NULL, 'ravi@gmail.com', 'Teacher', 'user1@gmail.com', 770245378, 'PE267295672000'),
(12, 'mohammed', '997852154V', NULL, '7, Main road, Kandy', NULL, 'mohammed@gmail.com', 'web', 'user4@gmail.com', 770245378, 'BU535524859973');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `LoanID` int(11) NOT NULL,
  `loan_amt` decimal(10,2) NOT NULL,
  `Interest` decimal(5,2) DEFAULT NULL,
  `Terms` int(11) DEFAULT NULL,
  `PenaltyInterest` decimal(5,2) DEFAULT NULL,
  `Status` enum('Pending','Active','Completed') DEFAULT NULL,
  `RepaymentPattern` enum('On Time','1 Week Delay','2 Weeks Delay','More Than 1 Month','Default') DEFAULT NULL,
  `Reschedule` int(11) DEFAULT NULL,
  `loan_typ` varchar(100) NOT NULL,
  `plan` varchar(60) NOT NULL,
  `purpose` text NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `loan_ref_num` varchar(33) NOT NULL,
  `loan_date` date DEFAULT NULL,
  `approve` int(30) NOT NULL DEFAULT 0,
  `percent` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`LoanID`, `loan_amt`, `Interest`, `Terms`, `PenaltyInterest`, `Status`, `RepaymentPattern`, `Reschedule`, `loan_typ`, `plan`, `purpose`, `user_id`, `loan_ref_num`, `loan_date`, `approve`, `percent`) VALUES
(7, 20000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'Vehicle Loan', '6', 'test', 'user1@gmail.com', '2147483647', '2023-10-02', 1, 0),
(11, 1000000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'Housing Loan', '18', 'test 3', 'user1@gmail.com', 'HO718147258095', '2023-08-08', 2, 0),
(14, 50000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'Personal Loan', '6', 'Personal', 'arshad@gmail.com', 'PE969078149539', '2023-10-06', 1, 0),
(15, 1000000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'Business Loan', '18', 'start up business', 'user2@gmail.com', 'BU973062578212', '2023-10-07', 2, 0),
(16, 25000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'Personal Loan', '6', 'Personal', 'user1@gmail.com', 'PE267295672000', '2023-10-07', 1, 0),
(17, 200000.00, NULL, NULL, NULL, NULL, NULL, NULL, 'Business Loan', '12', 'start up business', 'user4@gmail.com', 'BU535524859973', '2023-10-07', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mortgageitem`
--

CREATE TABLE `mortgageitem` (
  `ItemID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Value` decimal(10,2) NOT NULL,
  `StoreLocation` varchar(100) DEFAULT NULL,
  `LockerID` int(11) DEFAULT NULL,
  `Status` enum('Available','Not Available') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `loan_ref_num` varchar(130) NOT NULL,
  `current_ins` int(10) NOT NULL,
  `due_date` date DEFAULT NULL,
  `date_paid` date DEFAULT NULL,
  `paid_amt` decimal(10,2) NOT NULL,
  `balance_amt` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `user_id`, `loan_ref_num`, `current_ins`, `due_date`, `date_paid`, `paid_amt`, `balance_amt`) VALUES
(1, 'user1@gmail.com', '2147483647', 1, '2023-11-03', '2023-10-06', 3333.34, 16666.66),
(2, 'user1@gmail.com', '2147483647', 2, '2023-12-03', '2023-10-06', 3333.34, 13333.32),
(3, 'user1@gmail.com', '2147483647', 3, '2024-01-03', '2023-10-06', 3333.34, 9999.98),
(4, 'arshad@gmail.com', 'PE969078149539', 1, '2023-11-06', '2023-10-07', 8333.34, 41666.66),
(5, 'arshad@gmail.com', 'PE969078149539', 2, '2023-12-06', '2023-10-07', 8333.34, 33333.32),
(6, 'arshad@gmail.com', 'PE969078149539', 3, '2024-01-06', '2023-10-07', 8333.34, 24999.98),
(7, 'arshad@gmail.com', 'PE969078149539', 4, '2024-02-06', '2023-10-07', 8333.34, 16666.64),
(8, 'arshad@gmail.com', 'PE969078149539', 5, '2024-03-06', '2023-10-07', 8333.34, 8333.30),
(9, 'arshad@gmail.com', 'PE969078149539', 6, '2024-04-06', '2023-10-07', 8333.34, -0.04),
(10, 'user1@gmail.com', '2147483647', 4, '2024-02-03', '2023-10-07', 3333.34, 6666.64),
(11, 'user1@gmail.com', '2147483647', 5, '2024-03-03', '2023-10-07', 3333.34, 3333.30),
(12, 'user1@gmail.com', '2147483647', 6, '2024-04-03', '2023-10-07', 3333.34, -0.04);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rat_id` int(11) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  `rating` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rat_id`, `user_id`, `rating`, `status`) VALUES
(2, 'arshad@gmail.com', 6, 0),
(3, 'user2@gmail.com', 1, 0),
(4, 'user1@gmail.com', 10, 0),
(5, 'user4@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `ID` int(11) NOT NULL,
  `test` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`ID`, `test`, `link`, `name`) VALUES
(1, 'Bing', 'http://www.bing.com', 'Bing'),
(2, 'Google', 'http://www.google.com', 'Google'),
(3, 'Register', 'engine/_reg.php', 'reg'),
(5, 'Products', 'engine/Products.php', 'Products');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `UID` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Joining` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`UID`, `fname`, `lname`, `email`, `password`, `Joining`, `status`, `role`) VALUES
(42, 'Aashiq ', 'Ahmed', 'aashikahamed8@gmail.com', '1234', '2021-08-31', 1, ''),
(43, 'Aashiq Ahmed', 'Ahmed', 'aashikah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', '2021-09-02', 1, ''),
(48, 'Aashiq', 'Ahmed', 'aashiqahmed0228@gmail.com', '123asd', '2021-11-10', 1, ''),
(49, 'Ashmal', 'Ahmed', 'ahamed8@gmail.com', '81dc9bdb52d04dc20036dbd8313ed0', '2021-11-10', 1, ''),
(50, 'Asmal', 'Adhil', 'ashmal@gmail.com', '12345', '2022-01-03', 1, ''),
(51, 'Sabry', 'Mahroof', 'Sabry@gamil.com', '123sabry', '2022-01-11', 1, ''),
(52, 'Jhony', 'Depp', 'Jhonnydepp@gmail.com', '123456', '2022-01-20', 1, ''),
(54, 'ravi', 'fernando', 'ravi@gmail.com', 'ravi', '2023-08-01', 1, ''),
(55, 'user1', 'user1', 'user1@gmail.com', 'user1', '2023-09-29', 1, ''),
(56, 'user2', 'user2', 'user2@gmail.com', 'user2', '2023-10-02', 1, ''),
(57, 'admin', 'admin', 'admin@admin.com', 'adpexzg3FUZAk', '0000-00-00', 1, 'admin'),
(58, 'staff', 'staff', 'staff@staff.com', 'stft9noDq.5V2', '2023-10-02', 1, 'admin'),
(62, 'Arshad', 'khan', 'arshad@admin.com', 'arro2dGaP0XkI', '2023-10-07', 1, 'admin'),
(63, 'Arshad', 'khan', 'arshad@gmail.com', 'arshad', '2023-10-07', 1, ''),
(64, 'user4', 'user4', 'user4@gmail.com', 'user4', '2023-10-07', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`password`) VALUES
('1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvedselfbusiness`
--
ALTER TABLE `approvedselfbusiness`
  ADD PRIMARY KEY (`BusinessID`);

--
-- Indexes for table `approved_loans`
--
ALTER TABLE `approved_loans`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchID`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `guarantor`
--
ALTER TABLE `guarantor`
  ADD PRIMARY KEY (`GuarantorID`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`LoanID`);

--
-- Indexes for table `mortgageitem`
--
ALTER TABLE `mortgageitem`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rat_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved_loans`
--
ALTER TABLE `approved_loans`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bank_info`
--
ALTER TABLE `bank_info`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guarantor`
--
ALTER TABLE `guarantor`
  MODIFY `GuarantorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `LoanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
