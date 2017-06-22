-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2017 at 09:42 AM
-- Server version: 5.5.55-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `logi`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl`
--

CREATE TABLE IF NOT EXISTS `acl` (
  `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ai`),
  KEY `action_id` (`action_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_actions`
--

CREATE TABLE IF NOT EXISTS `acl_actions` (
  `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `action_desc` varchar(100) NOT NULL COMMENT 'Human readable description',
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`action_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_categories`
--

CREATE TABLE IF NOT EXISTS `acl_categories` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `category_desc` varchar(100) NOT NULL COMMENT 'Human readable description',
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_code` (`category_code`),
  UNIQUE KEY `category_desc` (`category_desc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_sessions`
--

CREATE TABLE IF NOT EXISTS `auth_sessions` (
  `id` varchar(128) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `current_duties`
--

CREATE TABLE IF NOT EXISTS `current_duties` (
  `duties_id` int(1) NOT NULL,
  `duties_team` varchar(255) NOT NULL,
  `duties_tl` varchar(255) NOT NULL,
  `duties_tl_no` varchar(255) NOT NULL,
  `duties_dtl` varchar(255) NOT NULL,
  `duties_dtl_no` varchar(255) NOT NULL,
  `duties_doo` varchar(255) NOT NULL,
  `duties_doo_no` varchar(255) NOT NULL,
  `duties_lastupdated` datetime NOT NULL,
  `duties_lastupdatedby` varchar(255) NOT NULL,
  UNIQUE KEY `duties_id` (`duties_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `denied_access`
--

CREATE TABLE IF NOT EXISTS `denied_access` (
  `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL,
  `reason_code` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`ai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `eq_id` int(11) NOT NULL AUTO_INCREMENT,
  `eq_last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eq_name` varchar(255) DEFAULT NULL,
  `eq_description` varchar(255) DEFAULT NULL,
  `eq_consumable` varchar(255) DEFAULT NULL,
  `eq_size` varchar(255) DEFAULT NULL,
  `eq_brand` varchar(255) DEFAULT NULL,
  `eq_supplier` varchar(255) DEFAULT NULL,
  `eq_in_service` varchar(255) DEFAULT NULL,
  `eq_inspection_frequency` varchar(255) DEFAULT NULL,
  `eq_serial` varchar(255) DEFAULT NULL,
  `eq_model` varchar(255) DEFAULT NULL,
  `eq_category` varchar(255) DEFAULT NULL,
  `eq_group_id` varchar(255) DEFAULT NULL,
  `eq_end_life` date DEFAULT NULL,
  `eq_date_purchased` date DEFAULT NULL,
  `eq_purchase_type` varchar(50) DEFAULT NULL,
  `eq_asset_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`eq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=456456498 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_categories`
--

CREATE TABLE IF NOT EXISTS `equipment_categories` (
  `eqcat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `eqcat_name` varchar(255) DEFAULT '',
  PRIMARY KEY (`eqcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_groups`
--

CREATE TABLE IF NOT EXISTS `equipment_groups` (
  `eqgroup_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `eqgroup_name` varchar(255) DEFAULT NULL,
  `eqgroup_last_checked` datetime DEFAULT NULL,
  `eqgroup_inspection_frequency` varchar(255) DEFAULT NULL,
  `eqgroup_description` varchar(255) DEFAULT NULL,
  `eqgroup_location` varchar(255) DEFAULT NULL,
  `eqgroup_category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eqgroup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_location`
--

CREATE TABLE IF NOT EXISTS `equipment_location` (
  `eqloc_eq_id` varchar(255) NOT NULL,
  `eqloc_loc_id` varchar(255) NOT NULL,
  `eqloc_quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`eqloc_eq_id`,`eqloc_loc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(255) NOT NULL,
  `event_allday` varchar(55) DEFAULT NULL,
  `event_start` datetime NOT NULL,
  `event_end` datetime DEFAULT NULL,
  `event_url` varchar(255) NOT NULL,
  `event_classname` varchar(255) DEFAULT NULL,
  `event_starteditable` varchar(50) DEFAULT NULL,
  `event_durationeditable` varchar(50) DEFAULT NULL,
  `event_resourceeditable` varchar(50) DEFAULT NULL,
  `event_rendering` varchar(255) DEFAULT NULL,
  `event_editable` varchar(50) DEFAULT NULL,
  `event_overlap` varchar(50) DEFAULT NULL,
  `event_constraint` varchar(255) DEFAULT NULL,
  `event_source` varchar(255) DEFAULT NULL,
  `event_backgroundcolor` varchar(255) DEFAULT NULL,
  `event_bordercolor` varchar(255) DEFAULT NULL,
  `event_textcolor` varchar(255) DEFAULT NULL,
  `event_createdby` varchar(255) DEFAULT NULL,
  `event_createddate` datetime DEFAULT NULL,
  `event_modifiedby` varchar(255) DEFAULT NULL,
  `event_lastmodified` datetime DEFAULT NULL,
  `event_issueid` int(11) DEFAULT NULL,
  `event_category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `ips_on_hold`
--

CREATE TABLE IF NOT EXISTS `ips_on_hold` (
  `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE IF NOT EXISTS `issues` (
  `iss_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `iss_eq_id` varchar(45) NOT NULL DEFAULT '',
  `iss_title` varchar(255) NOT NULL DEFAULT '',
  `iss_description` longtext,
  `iss_reporter_id` varchar(45) DEFAULT NULL,
  `iss_assigned_user` varchar(45) DEFAULT NULL,
  `iss_reported_date` date NOT NULL,
  `iss_resolution_date` date DEFAULT NULL,
  `iss_status` varchar(50) DEFAULT NULL,
  `iss_creator_id` varchar(50) NOT NULL,
  `iss_last_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `iss_last_modified_user` varchar(255) DEFAULT NULL,
  `iss_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iss_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `issues_comments`
--

CREATE TABLE IF NOT EXISTS `issues_comments` (
  `isscom_id` int(10) NOT NULL AUTO_INCREMENT,
  `isscom_user` varchar(255) DEFAULT NULL,
  `isscom_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isscom_related_iss` varchar(255) DEFAULT NULL,
  `isscom_comment` mediumtext,
  PRIMARY KEY (`isscom_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `list_item`
--

CREATE TABLE IF NOT EXISTS `list_item` (
  `lsitem_id` varchar(50) DEFAULT NULL,
  `list_id` varchar(50) DEFAULT NULL,
  `eq_id` varchar(50) DEFAULT NULL,
  `lsitem_qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loangroups`
--

CREATE TABLE IF NOT EXISTS `loangroups` (
  `loangroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `loangroup_name` varchar(50) DEFAULT NULL,
  `loangroup_member` varchar(50) DEFAULT NULL,
  `loangroup_last_modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `loangroup_last_modified_user` varchar(50) DEFAULT NULL,
  `loangroup_created_date` date DEFAULT NULL,
  `loangroup_created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`loangroup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE IF NOT EXISTS `loans` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_equipment` varchar(50) DEFAULT NULL,
  `loan_member` varchar(50) DEFAULT NULL,
  `loan_out_date` date DEFAULT NULL,
  `loan_in_date` date DEFAULT NULL,
  `loan_user` varchar(50) DEFAULT NULL,
  `loan_last_modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `loan_last_modified_user` varchar(50) DEFAULT NULL,
  `loan_created_date` date DEFAULT NULL,
  `loan_group` varchar(50) DEFAULT NULL,
  `loan_comment` mediumtext,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `loc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(255) NOT NULL DEFAULT '',
  `loc_manager` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_errors`
--

CREATE TABLE IF NOT EXISTS `login_errors` (
  `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username_or_email` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) DEFAULT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  UNIQUE KEY `idx_members_member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL DEFAULT '0',
  `supplier_street` varchar(255) DEFAULT '0',
  `supplier_suburb` varchar(255) DEFAULT '0',
  `supplier_number` varchar(255) DEFAULT '0',
  `supplier_services` mediumtext,
  `supplier_account` varchar(50) DEFAULT '0',
  `supplier_account_num` varchar(50) DEFAULT '0',
  `supplier_active` varchar(50) DEFAULT '0',
  `supplier_created_date` date DEFAULT NULL,
  `supplier_created_by` varchar(50) DEFAULT '0',
  `supplier_last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `supplier_last_updated_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `username_or_email_on_hold`
--

CREATE TABLE IF NOT EXISTS `username_or_email_on_hold` (
  `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username_or_email` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`ai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `auth_level` tinyint(3) unsigned NOT NULL,
  `banned` enum('0','1') NOT NULL DEFAULT '0',
  `passwd` varchar(60) NOT NULL,
  `passwd_recovery_code` varchar(60) DEFAULT NULL,
  `passwd_recovery_date` datetime DEFAULT NULL,
  `passwd_modified_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `ca_passwd_trigger`;
DELIMITER //
CREATE TRIGGER `ca_passwd_trigger` BEFORE UPDATE ON `users`
 FOR EACH ROW BEGIN
    IF ((NEW.passwd <=> OLD.passwd) = 0) THEN
        SET NEW.passwd_modified_at = NOW();
    END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `veh_id` int(11) NOT NULL AUTO_INCREMENT,
  `veh_name` varchar(255) NOT NULL,
  `veh_rego` varchar(255) DEFAULT NULL,
  `veh_capacity` varchar(255) DEFAULT NULL,
  `veh_license_type` varchar(255) DEFAULT NULL,
  `veh_make` varchar(255) DEFAULT NULL,
  `veh_model` varchar(255) DEFAULT NULL,
  `veh_year` varchar(255) DEFAULT NULL,
  `veh_category` varchar(255) DEFAULT NULL,
  `veh_list_id` varchar(255) DEFAULT NULL,
  `veh_location_id` varchar(255) DEFAULT NULL,
  `veh_type` varchar(255) DEFAULT NULL,
  `veh_eq_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`veh_id`),
  UNIQUE KEY `vehID` (`veh_id`),
  KEY `vehID_2` (`veh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl`
--
ALTER TABLE `acl`
  ADD CONSTRAINT `acl_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `acl_actions` (`action_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `acl_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD CONSTRAINT `acl_actions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `acl_categories` (`category_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
