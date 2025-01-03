-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 11:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `InvoiceID` int(11) NOT NULL,
  `TenantID` int(100) NOT NULL,
  `InvoiceDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `Amount` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leases`
--

CREATE TABLE `leases` (
  `LeaseID` int(11) NOT NULL,
  `TenantID` int(100) NOT NULL,
  `PropertyID` int(100) NOT NULL,
  `LeaseStartDte` date NOT NULL,
  `LeaseEndDate` date NOT NULL,
  `SecurityDeposit` varchar(100) NOT NULL,
  `RentPaymentFrequency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenancelog`
--

CREATE TABLE `maintenancelog` (
  `LogID` int(11) NOT NULL,
  `RequestID` int(100) NOT NULL,
  `TechnicianID` int(100) NOT NULL,
  `LogDate` date NOT NULL,
  `Description` mediumtext NOT NULL,
  `PartsUsed` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenancerequests`
--

CREATE TABLE `maintenancerequests` (
  `RequestID` int(100) NOT NULL,
  `TenantID` int(100) NOT NULL,
  `PropertyID` int(100) NOT NULL,
  `RequestDate` date NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `NotificationID` int(11) NOT NULL,
  `RecipientID` int(100) NOT NULL,
  `NotificationDate` date NOT NULL,
  `Message` int(255) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `LeaseID` int(100) NOT NULL,
  `PaymentDate` date NOT NULL,
  `Amount` varchar(1000) NOT NULL,
  `PaymentType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `PropertyID` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` int(11) NOT NULL,
  `State` varchar(100) NOT NULL,
  `ZipCode` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `NumRooms` int(11) NOT NULL,
  `MonthlyRent` varchar(1000) NOT NULL,
  `Occupied` tinyint(1) NOT NULL,
  `LastMaintenanceDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technicians`
--

CREATE TABLE `technicians` (
  `TechnicianID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Specialization` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `TenantID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `ContactNumber` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MoveInDate` date NOT NULL,
  `MoveOutDate` date NOT NULL,
  `EmergencyContactName` varchar(100) NOT NULL,
  `EmergencyContactNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `UtilityID` int(11) NOT NULL,
  `PropertyID` int(100) NOT NULL,
  `UtilityType` text NOT NULL,
  `ReadingDate` date NOT NULL,
  `UsageAmount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`InvoiceID`);

--
-- Indexes for table `leases`
--
ALTER TABLE `leases`
  ADD PRIMARY KEY (`LeaseID`);

--
-- Indexes for table `maintenancelog`
--
ALTER TABLE `maintenancelog`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`NotificationID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`PropertyID`);

--
-- Indexes for table `technicians`
--
ALTER TABLE `technicians`
  ADD PRIMARY KEY (`TechnicianID`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`TenantID`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`UtilityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leases`
--
ALTER TABLE `leases`
  MODIFY `LeaseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenancelog`
--
ALTER TABLE `maintenancelog`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PropertyID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technicians`
--
ALTER TABLE `technicians`
  MODIFY `TechnicianID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `TenantID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `UtilityID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
