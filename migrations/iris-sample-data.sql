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


--
-- Dumping data for table `current_duties`
--

INSERT INTO `current_duties` (`duties_id`, `duties_team`, `duties_tl`, `duties_tl_no`, `duties_dtl`, `duties_dtl_no`, `duties_doo`, `duties_doo_no`, `duties_lastupdated`, `duties_lastupdatedby`) VALUES
(1, 'ALPHA', 'Ross Wallace', '0413399059', 'Mike Smith', '04139877235', 'Alex Griffith', '04139342535', '2017-06-15 07:15:11', 'Ross Wallace');

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eq_id`, `eq_last_updated`, `eq_name`, `eq_description`, `eq_consumable`, `eq_size`, `eq_brand`, `eq_supplier`, `eq_in_service`, `eq_inspection_frequency`, `eq_serial`, `eq_model`, `eq_category`, `eq_group_id`, `eq_end_life`, `eq_date_purchased`, `eq_purchase_type`, `eq_asset_number`) VALUES
(195, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C7444533UCEQL', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(196, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C7444533UCEZL', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(197, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C7444533UCE1L', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(198, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C7444535N291L', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(199, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C7444533UCEVL', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(200, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C7444535O548L', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(620, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer Monitor', 'no', '19"', 'AOC', 'AOC', 'Yes', '', 'Q959CHA115631', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(635, '0000-00-00 00:00:00', 'HBYPC04', 'Desktop computer', 'No', '', 'HP', 'hp', 'Yes', '', 'AUD1270062', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(639, '0000-00-00 00:00:00', 'HBYPC03', 'Desktop computer', 'No', '', 'HP', 'hp', 'Yes', '', 'AUD1270058', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(641, '0000-00-00 00:00:00', 'HBYPC01', 'Desktop computer', 'No', '', 'HP', 'hp', 'Yes', '', 'AUD1270080', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(643, '0000-00-00 00:00:00', 'HBYPC02', 'Desktop computer', 'No', '', 'HP', 'hp', 'Yes', '', 'AUD1270073', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(645, '0000-00-00 00:00:00', 'Pelican Torch', 'Handheld pelican torch', '', '', 'Peli Products S.L.U', 'Peli', 'Yes', '', '', '9140', 'Storm', '', '0000-00-00', '0000-00-00', '', '1445385'),
(700, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C74445350564L', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(701, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C74445330CEXL', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(702, '0000-00-00 00:00:00', 'Monitor', 'Desktop computer monitor', 'No', '23"', 'Dell', '', 'Yes', '', 'CN0P8G7C74445350576L', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(703, '0000-00-00 00:00:00', 'Radio Charger', 'Radio charger', 'No', '', 'Impres', 'Impres', 'Yes', '', '5083776734327MKN02', 'WPLN4114AR', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(704, '2017-06-08 12:42:22', 'UPS', '', 'no', '', 'EATON', 'EATON', 'Yes', '', 'G348E24088', '5S1200AU', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(705, '0000-00-00 00:00:00', 'UPS', '', '', '', 'EATON', 'EATON', 'Yes', '', 'G348E24493', '5S1200AU', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(706, '0000-00-00 00:00:00', 'UPS', '', '', '', 'EATON', 'EATON', 'Yes', '', 'G348E24499', '5S1200AU', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(707, '0000-00-00 00:00:00', 'UPS', '', '', '', 'EATON', 'EATON', 'Yes', '', 'G348E24498', '5S1200AU', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(708, '0000-00-00 00:00:00', 'UPS', '', '', '', 'EATON', 'EATON', 'Yes', '', 'JC094A2159', 'Powerware 5110', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(709, '0000-00-00 00:00:00', 'Laminator', 'GBC Creative LaminatorA3', '', '', 'GBC', 'GBC', 'Yes', '', '2013/01-TA3021340', 'BLCREATA302 (CLA302)', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(710, '0000-00-00 00:00:00', 'Phone', 'Desktop phone', 'No', '', 'Samsung', '', 'Yes', '', 'S86F810347D', 'DS-5014S', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(711, '0000-00-00 00:00:00', 'Phone', 'Desktop phone', 'No', '', 'Samsung', '', 'Yes', '', 'S86F810365L', 'DS-5014S', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(712, '0000-00-00 00:00:00', 'Phone', 'Desktop phone', 'No', '', 'Samsung', '', 'Yes', '', 'S86f810350W', 'DS-5014S', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(713, '0000-00-00 00:00:00', 'Phone', 'Desktop phone', 'No', '', 'Samsung', '', 'Yes', '', 'S86F810345A', 'DS-5014S', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(714, '0000-00-00 00:00:00', 'Phone', 'Desktop phone', 'No', '', 'Samsung', '', 'Yes', '', 'S86F810353T', 'DS-5014S', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(715, '0000-00-00 00:00:00', 'Handheld Phone', 'Portable phone', 'No', '', 'Uniden', '', 'Yes', '', '28006123', 'XDECT8055+1', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(716, '0000-00-00 00:00:00', 'Video Wall PC', 'Video wall PC in OPSCEN', 'No', '', 'Dell', 'Dell', 'Yes', '', '26282040292', 'Precision T1600', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(717, '0000-00-00 00:00:00', 'HBYPC07', 'Desktop computer', 'No', '', 'HP', 'hp', 'Yes', '', 'AUD1270060', '', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(718, '0000-00-00 00:00:00', 'OPSCEN Printer', 'Fuji Xerox DocuPrint CL1190 FS XJ-UVC', 'No', '', 'Fuji Xerox', 'Fuji Xerox', 'Yes', '', '207688', 'DocuPrint CL1190 FS', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(719, '0000-00-00 00:00:00', 'Labeller', 'Brother P-Touch 2400 labeller', '', '', 'Brother', 'Brother', 'Yes', '', 'M9J932918', 'PT-2400/2410', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(720, '0000-00-00 00:00:00', 'GPS', 'Meridian GPS Yellow Non topo GPS DC: 3202 + 32mb memory card', 'no', '', 'Magellan', '', 'Yes', '1 Year', 'CH011281', '800478-08', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(721, '2017-06-08 12:33:59', 'GPS', 'GPSmap 60CSx Topographic GPS & 2gb Micro SD', NULL, '', 'Garmin', '', 'Yes', '1 Year', '1185150', '60CSx', 'SAR', '', '0000-00-00', '0000-00-00', NULL, ''),
(722, '0000-00-00 00:00:00', 'TV Remote', 'Video Wall TV Remote', 'no', '', 'TCL', 'VideoPro', 'Yes', '', '', 'JH-11490 3', 'ICT', '', '0000-00-00', '0000-00-00', 'PO', ''),
(724, '2017-06-14 11:23:27', 'Vivitek Projector', 'Vivitek D7180HD Full HD Ultra Short Throw Home Theatre Projector', 'No', '', 'Vivitek', 'Digital Cinema', NULL, '6 Months', 'WD7180HD4150040', 'D7180HD', 'ICT', '', '0000-00-00', '0000-00-00', 'Unit Funts', ''),
(740, '0000-00-00 00:00:00', 'TV', 'BOTTOM RIGHT', '', '50"', 'TCL', 'TCL', 'Yes', '', '1610AFZ126849B00719', '50E4900FS', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(741, '0000-00-00 00:00:00', 'TV', 'BOTTOM MIDDLE', '', '50"', 'TCL', 'TCL', 'Yes', '', '1610AFZ126849B00215', '50E4900FS', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(742, '0000-00-00 00:00:00', 'TV', 'BOTTOM LEFT', '', '50"', 'TCL', 'TCL', 'Yes', '', '1610AFZ126849B00719', '50E4900FS', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(743, '0000-00-00 00:00:00', 'TV', '', '', '50"', 'TCL', 'TCL', 'Yes', '', '1610AFZ126849B00', '50E4900FS', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(744, '0000-00-00 00:00:00', 'TV', '', '', '50"', 'TCL', 'TCL', 'Yes', '', '1610AFZ126849B00', '50E4900FS', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(745, '0000-00-00 00:00:00', 'TV', '', '', '50"', 'TCL', 'TCL', 'Yes', '', '1610AFZ126849B00', '50E4900FS', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(746, '2017-06-08 12:41:01', 'Chair', 'Style Ergonomics Chair', NULL, '', 'Style Ergonomics', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', NULL, 'POSTURE MATE-M', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'Unit Funts', ''),
(747, '0000-00-00 00:00:00', 'Chair', 'Style Ergonomics Chair', '', '', 'Style Ergonomics', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', 'POSTURE MATE-M', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(748, '0000-00-00 00:00:00', 'Chair', 'Style Ergonomics Chair', '', '', 'Style Ergonomics', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', 'POSTURE MATE-M', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(749, '0000-00-00 00:00:00', 'Chair', 'Style Ergonomics Chair', '', '', 'Style Ergonomics', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', 'POSTURE MATE-M', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(750, '0000-00-00 00:00:00', 'Defib', '', '', '', 'Defib Tech', 'Defib Tech', 'Yes', '', '112012063', 'DDU-100E', 'First Aid', '', '0000-00-00', '0000-00-00', '', ''),
(751, '0000-00-00 00:00:00', 'Radio Charger', 'Radio charger', 'No', '', 'Impres', 'Impres', 'Yes', '', '05183776735034MKR02', 'WPLN4114AR', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(752, '2017-06-04 10:02:15', 'Laptop', 'Surge/Mobile Ops Laptop', '', '', 'Dell', 'Dell', 'Yes', '', 'FDZPYB2', 'Inspiron 14', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(753, '2017-06-04 10:02:20', 'Laptop', 'Surge/Mobile Ops Laptop', '', '', 'Dell', 'Dell', 'Yes', '', 'CDZPYB2', 'Inspiron 14', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(754, '2017-06-04 10:02:25', 'Laptop', 'Surge/Mobile Ops Laptop', '', '', 'Dell', 'Dell', 'Yes', '', 'DDZPYB2', 'Inspiron 14', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(755, '2017-06-04 10:02:30', 'Laptop', 'Surge/Mobile Ops Laptop', '', '', 'Dell', 'Dell', 'Yes', '', 'GDZPYB2', 'Inspiron 14', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(756, '2017-06-04 10:01:47', 'Surge Laptop Charger', '45w AC/DC Adapter DP/N 0KXTTW', '', '', 'Dell', 'Dell', 'Yes', '', '', 'LA45NM140', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(757, '0000-00-00 00:00:00', 'HP Keyboard', '', '', '', 'HP', 'HP', 'Yes', '', '', 'KU0316', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(758, '0000-00-00 00:00:00', 'HP Mouse', '', '', '', 'HP', 'HP', 'Yes', '', '', 'MUAE96', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(759, '0000-00-00 00:00:00', 'Logitech Mouse', '', '', '', 'Logitech', 'Logitech', 'Yes', '', '', 'M-UAS144', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(760, '0000-00-00 00:00:00', 'Chair', 'Style Ergonomics Chair', '', '', 'Style Ergonomics', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', 'POSTURE MATE-M', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(761, '0000-00-00 00:00:00', 'Computer table', 'middle front', '', '3m', '', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(762, '0000-00-00 00:00:00', 'Computer table', 'Corner desk table RHS opscen', '', '', '', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(763, '0000-00-00 00:00:00', 'Computer table', 'Corner desk table LHS opscen', '', '', '', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(764, '0000-00-00 00:00:00', 'Credenza', 'Credenza RHS opscen', '', '', '', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(765, '0000-00-00 00:00:00', 'Credenza', 'Credenza LHS opscen', '', '', '', 'KELLYS OFFICE FURNITURE DEE WHY', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(766, '0000-00-00 00:00:00', 'Printer table', 'Printer table OPSCEN', '', '', '', '', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(767, '0000-00-00 00:00:00', 'Whiteboard', 'Sliding whiteboard OPSCEN', '', '', '', '', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(768, '0000-00-00 00:00:00', 'Webcam', 'Logitech Webcam', '', '', 'Logitech', '', 'Yes', '', '', 'C930E', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(769, '2017-06-04 10:01:20', 'LED Strip', 'LED FLEX RIBBON STRIP 5M', '', '', 'LEDware', '', 'Yes', '', '', 'LED FLEX RIBBON STRIP 5M', 'Facilities', '', '0000-00-00', '0000-00-00', '', ''),
(770, '0000-00-00 00:00:00', 'Hornsby Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '3130-3N', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(771, '0000-00-00 00:00:00', 'Mangrove Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9131-3N', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(772, '0000-00-00 00:00:00', 'Broken Bay Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9130-1N', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(773, '0000-00-00 00:00:00', 'Lower Portland Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9031-2S', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(774, '0000-00-00 00:00:00', 'Cowan Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9130-4N', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(775, '0000-00-00 00:00:00', 'Parrmatta River Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9310-3N', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(776, '0000-00-00 00:00:00', 'Gunderman Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9131-3S', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(777, '0000-00-00 00:00:00', 'Kulnura Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9131-4S', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(778, '0000-00-00 00:00:00', 'Picton Topo Map', '1:25000 scale topographic map', 'no', '', 'LPI NSW', 'NSWSES', 'Yes', '', '', '9029-4S', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(779, '0000-00-00 00:00:00', 'Topographic Map Book', 'HBY + KRG SNR V1 Topographic map book', 'no', '', 'NSWSES', 'NSWSES', 'Yes', '', '', '', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(780, '0000-00-00 00:00:00', 'Table', 'Folding trestle', 'no', '1.8m', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(781, '0000-00-00 00:00:00', 'Table', 'folding trestle', 'no', '1.8m', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(782, '0000-00-00 00:00:00', 'Table', 'folding trestle', 'no', '1.8m', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(783, '0000-00-00 00:00:00', 'Table', 'folding trestle', 'no', '1.8m', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(784, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(785, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(786, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(787, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(788, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(789, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(790, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(791, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(792, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(793, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(794, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(795, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(796, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(797, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(798, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(799, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(800, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(801, '0000-00-00 00:00:00', 'Chair', 'Conference Chair', 'no', '', 'Kelly''s', 'Kelly''s', 'Yes', '', '', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(802, '0000-00-00 00:00:00', 'Table', 'projector Table', 'no', '', 'Ikea', 'Ikea', 'Yes', '', 'AA-566572-1', '', 'Facilities', '', '0000-00-00', '0000-00-00', 'PO', ''),
(804, '0000-00-00 00:00:00', 'HBYPC06', 'Desktop computer', 'no', '', 'HP', 'HP', 'Yes', '', 'AUD1270067', 'HP Compaq 8000 SFF Business PC', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(805, '0000-00-00 00:00:00', 'UPS', 'UPS', 'no', '', 'EATON', 'EATON', 'Yes', '', 'JC094A2156', 'Powerware 5110', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(806, '0000-00-00 00:00:00', 'Fire Extinguisher', 'CO2', 'yes', '3.5kg', 'Wormald', 'SAI GLOBEL', 'Yes', '', 'BS5045/8', '', 'Safety', '', '0000-00-00', '0000-00-00', '', ''),
(807, '0000-00-00 00:00:00', 'Teleconference Phone', 'Polycom eleconference Client', 'no', '', 'Polycom', 'Unitell', 'Yes', '', 'H60606300131E', 'Sound Station 2', 'ICT', '', '0000-00-00', '0000-00-00', '', ''),
(808, '0000-00-00 00:00:00', 'GPS', 'Meridian GPS Yellow Non topo GPS DC: 1602 + 64mb memory card', 'no', '', 'Magellan', '', 'Yes', '1 Year', 'CH008792', '800478-08', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(809, '0000-00-00 00:00:00', 'GPS', 'Meridian GPS Yellow Non topo GPS DC: 3202 + 32mb memory card', 'no', '', 'Magellan', '', 'Yes', '1 Year', 'CH011449', '800478-08', 'SAR', '', '0000-00-00', '0000-00-00', '', ''),
(80000004, '2017-05-29 12:41:05', 'Test', 'Test2', '', '', '', '', NULL, '1 Week', '', NULL, 'Hand Tools', '2', '0000-00-00', '0000-00-00', 'Donation', ''),
(456456459, '2017-06-06 13:20:58', 'Test', 'large tan, cylindrical object', 'Yes', 'Large', '', '', NULL, '1 Week', '', '', 'Hand Tools', '', '0000-00-00', '0000-00-00', 'Donation', ''),
(456456460, '2017-06-06 13:28:14', 'workworkworkwork', 'nlnl', 'No', 'kll', '', '', NULL, '1 Week', '', '', 'Hand Tools', '', '0000-00-00', '0000-00-00', 'Donation', ''),
(456456461, '2017-06-08 12:24:38', 'TV', 'Toshiba TV', 'No', '', 'Toshiba', 'Toshiba', NULL, '1 Year', '', '', 'ICT', '', '0000-00-00', '0000-00-00', 'Unit Funts', ''),
(456456496, '2017-06-14 21:51:06', 'test', 'delete me', 'No', 'delete me', 'delete me', 'delete me', NULL, '1 Week', '', '', 'Hand Tools', '', '0000-00-00', '0000-00-00', 'Donation', ''),
(456456497, '2017-06-14 21:51:46', 'testt', 'delete me', 'No', 'delete me', 'delete me', 'delete me', NULL, '1 Week', '', '', 'Hand Tools', '', '0000-00-00', '0000-00-00', 'Donation', '');

--
-- Dumping data for table `equipment_categories`
--

INSERT INTO `equipment_categories` (`eqcat_id`, `eqcat_name`) VALUES
(0, 'Hand Tools'),
(1, 'Power Tools'),
(3, 'Building Hardware'),
(4, 'First Aid'),
(5, 'Support and Stabalisation'),
(6, 'Vehicle Components'),
(7, 'Ropes'),
(8, 'Safety'),
(9, 'Traffic Management'),
(10, 'Electrical and Lighting'),
(11, 'Flood Operations'),
(12, 'USAR'),
(13, 'Property Protection'),
(14, 'Height Safety Hardware'),
(15, 'ICT'),
(16, 'Facilities'),
(17, 'SAR');

--
-- Dumping data for table `equipment_groups`
--

INSERT INTO `equipment_groups` (`eqgroup_id`, `eqgroup_name`, `eqgroup_last_checked`, `eqgroup_inspection_frequency`, `eqgroup_description`, `eqgroup_location`, `eqgroup_category`) VALUES
(1, 'Chainsaw 0013847', '0000-00-00 00:00:00', 'Monthy', 'Still 010 Chansaw', '1', 'Power Tools'),
(2, 'Something', NULL, 'Daily', 'Dopojsdg', '1', NULL);

--
-- Dumping data for table `equipment_location`
--

INSERT INTO `equipment_location` (`eqloc_eq_id`, `eqloc_loc_id`, `eqloc_quantity`) VALUES
('195', '33', 1),
('196', '33', 1),
('197', '33', 1),
('198', '33', 1),
('199', '33', 1),
('200', '33', 1),
('456456460', '1', 1),
('456456461', '20', 1),
('456456495', '13', 1),
('635', '33', 1),
('639', '33', 1),
('641', '33', 1),
('643', '33', 1),
('645', '33', 1),
('700', '33', 1),
('701', '33', 1),
('702', '33', 1),
('703', '33', 1),
('704', '33', 1),
('705', '33', 1),
('706', '33', 1),
('707', '33', 1),
('708', '33', 1),
('709', '33', 1),
('710', '33', 1),
('711', '33', 1),
('712', '33', 1),
('713', '33', 1),
('714', '33', 1),
('715', '33', 1),
('716', '33', 1),
('717', '33', 1),
('718', '33', 1),
('719', '33', 1),
('740', '33', 1),
('741', '33', 1),
('742', '33', 1),
('743', '33', 1),
('744', '33', 1),
('745', '33', 1),
('746', '33', 1),
('747', '33', 1),
('748', '33', 1),
('749', '33', 1),
('750', '33', 1),
('751', '33', 1),
('752', '33', 1),
('753', '33', 1),
('754', '33', 1),
('755', '33', 1),
('756', '33', 1),
('757', '33', 1),
('758', '33', 1),
('759', '33', 1),
('760', '33', 1),
('761', '33', 1),
('762', '33', 1),
('763', '33', 1),
('764', '33', 1),
('765', '33', 3),
('765 /', '1', 2),
('766', '33', 1),
('767', '33', 1),
('768', '33', 1),
('769', '33', 1),
('772', '20', 1),
('80000001', '1', 1),
('80000002', '1', 10),
('80000004', '33', 1);

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_allday`, `event_start`, `event_end`, `event_url`, `event_classname`, `event_starteditable`, `event_durationeditable`, `event_resourceeditable`, `event_rendering`, `event_editable`, `event_overlap`, `event_constraint`, `event_source`, `event_backgroundcolor`, `event_bordercolor`, `event_textcolor`, `event_createdby`, `event_createddate`, `event_modifiedby`, `event_lastmodified`, `event_issueid`, `event_category`) VALUES
(1, 'Test Event', 'true', '2017-06-15 00:00:00', '0000-00-00 00:00:00', 'http://www.google.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, '');

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`iss_id`, `iss_eq_id`, `iss_title`, `iss_description`, `iss_reporter_id`, `iss_assigned_user`, `iss_reported_date`, `iss_resolution_date`, `iss_status`, `iss_creator_id`, `iss_last_modified`, `iss_last_modified_user`, `iss_type`) VALUES
(1, '765', 'User stuck inside', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor diam non elit faucibus, nec porta ipsum interdum. Fusce ipsum arcu, venenatis nec faucibus id, blandit nec purus. Nunc bibendum leo sit amet neque porta, et aliquet risus euismod. Quisque sagittis nisl varius vestibulum varius. Maecenas quis eros mollis, auctor nibh eu, sodales enim. Fusce facilisis venenatis sem. Nunc at felis imperdiet, feugiat metus quis, dapibus massa. Fusce luctus mi velit, fringilla lacinia velit cursus nec. Vestibulum neque lectus, ullamcorper sed ante nec, dictum facilisis tellus. Vivamus pretium diam et quam laoreet, vitae luctus ipsum porta.\r\n\r\n11111', 'rwallace', NULL, '2017-04-19', '0000-00-00', 'Current', 'rwallace', '2017-06-09 02:53:08', 'rwallace', 'Repair/Fix'),
(2, '80000003', 'Monthly Inspection', 'Standard 6 month rope inspection BOOBS', 'rwallace', 'rwallace', '2017-04-01', '2017-04-01', 'Complete', 'rwallace', '2017-06-01 02:06:01', 'rwallace', 'Check/Inspection'),
(3, '704', 'Nubbles is keen', 'If the red light goes green do we really not need garlic bread. Exactly as i suspected', 'rwallace', NULL, '2017-04-12', '0000-00-00', 'New', 'rwallace', '2017-06-05 01:47:22', 'rwallace', 'Write Off'),
(4, '80000001', 'BOOBIES', 'WHIOIHSAD', '40030727', NULL, '0000-00-00', '0000-00-00', 'New', 'rwallace', '2017-06-01 02:33:58', NULL, 'Replacement'),
(5, '80000002', 'Testy mctesterson', 'Hello this is a test', '40034949', '10', '0000-00-00', NULL, 'New', 'rwallace', '2017-06-01 02:34:20', NULL, 'Check/Inspection'),
(6, '80000001', 'will it work', 'lalaal', '40021291', '1', '0000-00-00', NULL, 'New', 'dwillis', '2017-06-01 03:08:43', NULL, 'Repair/Fix'),
(7, '765', 'another damn Credenza issue', 'ffs', '40021291', '1', '0000-00-00', NULL, 'New', '', '2017-06-12 13:27:34', NULL, 'Repair/Fix');

--
-- Dumping data for table `loangroups`
--

INSERT INTO `loangroups` (`loangroup_id`, `loangroup_name`, `loangroup_member`, `loangroup_last_modified`, `loangroup_last_modified_user`, `loangroup_created_date`, `loangroup_created_by`) VALUES
(1, 'Initial Issueing', '40021291', '2017-05-19 06:56:52', '1', '2017-05-19', '10');

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`loan_id`, `loan_equipment`, `loan_member`, `loan_out_date`, `loan_in_date`, `loan_user`, `loan_last_modified`, `loan_last_modified_user`, `loan_created_date`, `loan_group`, `loan_comment`) VALUES
(1, '80000001', '40021291', '2017-05-16', '0000-00-00', 'rwallace', '2017-05-16 09:10:34', 'rwallace', '2017-05-16', '1', 'Replacing a worn out rain jacket'),
(2, '80000002', '40021291', '2017-05-19', '2017-05-19', 'rwallace', '2017-05-19 16:38:22', 'rwallace', '2017-05-19', '1', 'Love things');

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`loc_id`, `loc_name`, `loc_manager`) VALUES
(1, 'Vehicle Bay', 'sguy'),
(2, 'Locker Room', 'jlogan'),
(3, 'Dry Store', 'pwong'),
(4, 'Mezzanine', 'jlogan'),
(5, 'Flood Rescue Office', 'moakley'),
(6, 'Entry Foyer', 'jlogan'),
(7, 'Comm Ed Room', 'llowe'),
(8, 'Old Training Room', 'jlogan'),
(9, 'Wet Store', 'msmith'),
(10, 'Back Shed', 'sguy'),
(11, 'Council Carpark', 'sguy'),
(12, 'TTR1', 'N/A'),
(13, 'TTR2', 'N/A'),
(14, 'TTR3', 'N/A'),
(15, 'TTR4', 'N/A'),
(16, 'TTR5', 'N/A'),
(17, 'Male Toilet', 'N/A'),
(18, 'Female Toilet', 'N/A'),
(19, 'Kitchen', 'smurray'),
(20, 'PFTO', 'cmawn'),
(21, 'SNR', 'N/A'),
(22, 'SHQ', 'N/A'),
(23, 'HBY17', 'Unknown'),
(24, 'HBY18', 'Unknown'),
(25, 'HBY19', 'mvamvakaris'),
(26, 'HBY34', 'mvamvakaris'),
(27, 'HBY35', 'sguy'),
(28, 'HBY37', 'kjones'),
(29, 'HBY39', 'nwakeling'),
(30, 'G19', 'moakley'),
(31, 'Q Store', 'jzeller'),
(32, 'K38', 'moakley'),
(33, 'KEMOCOE', 'agriffith'),
(34, 'TBA', '1'),
(35, 'Hallway, Main upstairs', '1');

--
-- Dumping data for table `login_errors`
--

INSERT INTO `login_errors` (`ai`, `username_or_email`, `ip_address`, `time`) VALUES
(2, 'rwallace', '119.225.212.82', '2017-06-19 06:04:06');

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`) VALUES
(40021291, 'Ross Wallace'),
(40024595, 'Girish Mamdapur'),
(40030727, 'Adam Smithers'),
(40035488, 'Adrian Teh'),
(40031471, 'Adrian Anthony'),
(40037017, 'Adrianna Kennedy'),
(40005889, 'Alan Lowe'),
(40023284, 'Alexander Griffith'),
(40034023, 'Alexander Beckett'),
(40028022, 'Alexander Hanley'),
(40013375, 'Alison Muir'),
(40037016, 'Amie Hill'),
(40027031, 'Amy Mawn'),
(40024059, 'Andrew Skidmore'),
(40029130, 'Andrew Ryan'),
(40001937, 'Ankur Chaudhary'),
(40002274, 'Anne Corbett'),
(40007107, 'Anthony Northbrook-Hine (Tony)'),
(40037015, 'Archie Tauasi'),
(40038137, 'Benjamin Peacock'),
(40034561, 'Benjamin Lewin-Smith'),
(40034088, 'Bhanoo Sharma'),
(40032786, 'Brett Hickinbotham'),
(40034973, 'Britney Coombs'),
(40038390, 'Callum Johnston'),
(40038347, 'Canning Wynn'),
(40016133, 'Christopher Blogg'),
(40023307, 'Christopher Mawn (Chris)'),
(40025916, 'Clancy Simpson'),
(40037014, 'Clementine Leedham'),
(40035559, 'Colyn Henrisson'),
(40030778, 'Craig Davies'),
(40038560, 'Curtis Palmer'),
(40030158, 'Daniel Willis'),
(40035489, 'David Herrera Lopez'),
(40005347, 'David Kerr'),
(40002275, 'Edward Corbett'),
(40038538, 'Emma Holst'),
(40035491, 'Fiona Stewart'),
(40035493, 'Grace Brown'),
(40035492, 'Greg Smith'),
(40032409, 'Harrison Johnson'),
(40029455, 'Haywood Yeung'),
(40010579, 'Iain Finlay'),
(40035607, 'Ian Fahey'),
(40024599, 'Ingrid Harms'),
(40035494, 'Jack Lavercombe'),
(40030453, 'James Logan'),
(40038563, 'James Polansky'),
(40034949, 'Jemma Hunter'),
(40038361, 'Jessica Abbott'),
(40003849, 'John Goh'),
(40016676, 'John Zeller'),
(40034565, 'Johnson Zheng'),
(40037012, 'Joshua Bell'),
(40021283, 'Jufri Foss'),
(40026817, 'Julian Watts'),
(40037010, 'Kathryn Pentland'),
(40037009, 'Katrina Frankish'),
(40023285, 'Kay Siebers'),
(40035496, 'Kayla Vamvakaris'),
(40035603, 'Kevin Jones'),
(40034947, 'Lauren Bartlett'),
(40005892, 'Lee Lowe'),
(40038057, 'Leslie Parwada'),
(40028023, 'Louise Gooding'),
(40037008, 'Lucien Wichmann'),
(40037373, 'Luke Read'),
(40026699, 'Madeleine Croft (Maddie)'),
(40032790, 'Melanie Schwecke'),
(40035495, 'Michael Vamvakaris'),
(40037006, 'Michael Stalenberg'),
(40034564, 'Michael Lavercombe (James)'),
(40034515, 'Michael Davis'),
(40008855, 'Michael Smith (Mike)'),
(40030269, 'Michael Hsu'),
(40037167, 'Michelle Whye'),
(40034516, 'Mohsheeq Khan'),
(40007215, 'Murray Oakley'),
(40038411, 'Nadya Shturman'),
(40038413, 'Nakul Umashankar'),
(40037165, 'Nicholas Wakeling'),
(40038373, 'Patrick Cullen'),
(40035605, 'Paul Suter'),
(40026254, 'Pauline Wong'),
(40037077, 'Peter Turrin'),
(40001906, 'Phillip Champ'),
(40035498, 'Priyanshu Gupta'),
(40037005, 'Rachel Littleton'),
(40016543, 'Reinoud Beijerinck'),
(40037004, 'Richard Batoure'),
(40038394, 'Richard Leigh'),
(40029453, 'Richard Evans'),
(40002280, 'Robert Corbett (Bob)'),
(40030435, 'Robyn Harms'),
(40026818, 'Roger Gates'),
(40037368, 'Salim Siddiqui'),
(40035499, 'Scott Guy'),
(40013346, 'Shevaun Hernon'),
(40029996, 'Simon Brown'),
(40038039, 'Simon Kao'),
(40030438, 'Simon Hardstaff'),
(40034522, 'Sinead Murray'),
(40038549, 'Sri Charan Marri'),
(40005836, 'Stephen Lloyd (Steve)'),
(40024596, 'Susan Newnham'),
(40037043, 'Tania Tan'),
(40037164, 'Teon West'),
(40034567, 'Terry Frankish'),
(40032907, 'Thomas Lim'),
(40031555, 'Timothy Wilkins (Tim)'),
(40035606, 'Timothy Kruening'),
(40038118, 'Trevor Hyland'),
(40035500, 'Tyler Shai-Hee'),
(40035501, 'Virginia Agosti'),
(40030132, 'Warwick Black'),
(40034524, 'Zafia Khan');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `auth_level`, `banned`, `passwd`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `created_at`, `modified_at`) VALUES
(1361242415, 'rwallace', 'ross.wallace@member.ses.nsw.gov.au', 9, '0', '$2y$11$r.sHpvW3FXTfG4xBfmWI5.yNVEUNKSnnc7yOCFUNuY6aCH9xY3dR2', NULL, NULL, NULL, '2017-06-15 09:02:01', '2017-06-15 08:58:20', '2017-06-15 09:02:03');

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`veh_id`, `veh_name`, `veh_rego`, `veh_capacity`, `veh_license_type`, `veh_make`, `veh_model`, `veh_year`, `veh_category`, `veh_list_id`, `veh_location_id`, `veh_type`, `veh_eq_id`) VALUES
(1, 'HBY18', '123ABC', '5', 'C', 'Mitsubishi', 'Pajero', '2007', 'Light Storm', NULL, NULL, NULL, NULL),
(3, 'HBY19', '098ABC', '5', 'C', 'Subaru', 'Forrester', '2012', 'Light Storm', NULL, NULL, NULL, NULL),
(4, 'HBY34', '765ABG', '4', 'C', 'Toyota', 'Hilux', '2010', 'Light Storm', NULL, NULL, NULL, NULL),
(6, 'HBY39', 'HJG934', '7', 'None', 'Iveco', 'Halftrack', '2007', 'Heavy Storm', NULL, NULL, NULL, NULL),
(7, 'HBY37', 'HBY37A', '6', 'None', 'Izuzu', 'Dunno', '2010', 'Medium Storm', NULL, NULL, NULL, NULL),
(8, 'HBY35', '098765', '4', 'LR', 'Levis', 'Assless Chaps', '2000', 'Light GLR', NULL, '', NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
