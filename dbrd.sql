-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 09:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 2, NULL),
('theCreator', 1, 1476757297);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrator of this application', NULL, NULL, 1476756686, 1476756686),
('adminArticle', 2, 'Allows admin+ roles to manage articles', NULL, NULL, 1476756685, 1476756685),
('createArticle', 2, 'Allows editor+ roles to create articles', NULL, NULL, 1476756685, 1476756685),
('deleteArticle', 2, 'Allows admin+ roles to delete articles', NULL, NULL, 1476756685, 1476756685),
('editor', 1, 'Editor of this application', NULL, NULL, 1476756686, 1476756686),
('manageUsers', 2, 'Allows admin+ roles to manage users', NULL, NULL, 1476756685, 1476756685),
('member', 1, 'Registered users, members of this site', NULL, NULL, 1476756686, 1476756686),
('premium', 1, 'Premium members. They have more permissions than normal members', NULL, NULL, 1476756686, 1476756686),
('support', 1, 'Support staff', NULL, NULL, 1476756686, 1476756686),
('theCreator', 1, 'You!', NULL, NULL, 1476756686, 1476756686),
('updateArticle', 2, 'Allows editor+ roles to update articles', NULL, NULL, 1476756685, 1476756685),
('updateOwnArticle', 2, 'Update own article', 'isAuthor', NULL, 1476756685, 1476756685),
('usePremiumContent', 2, 'Allows premium+ roles to use premium content', NULL, NULL, 1476756685, 1476756685);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('theCreator', 'admin'),
('editor', 'adminArticle'),
('editor', 'createArticle'),
('admin', 'deleteArticle'),
('admin', 'editor'),
('admin', 'manageUsers'),
('support', 'member'),
('support', 'premium'),
('editor', 'support'),
('admin', 'updateArticle'),
('updateOwnArticle', 'updateArticle'),
('editor', 'updateOwnArticle'),
('premium', 'usePremiumContent');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAuthor', 'O:28:"common\\rbac\\rules\\AuthorRule":3:{s:4:"name";s:8:"isAuthor";s:9:"createdAt";i:1476756685;s:9:"updatedAt";i:1476756685;}', 1476756685, 1476756685);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1476756645),
('m141022_115823_create_user_table', 1476756652),
('m141022_115912_create_rbac_tables', 1476756652),
('m141022_115922_create_session_table', 1476756652),
('m150104_153617_create_article_table', 1476756652);

-- --------------------------------------------------------

--
-- Table structure for table `ref_budget`
--

CREATE TABLE `ref_budget` (
  `budget_id` int(1) NOT NULL,
  `budget` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลงบประมาณ';

--
-- Dumping data for table `ref_budget`
--

INSERT INTO `ref_budget` (`budget_id`, `budget`) VALUES
(0, 'รายจ่าย(งบแผ่นดิน)'),
(1, 'รายได้(งบหน่วยงาน)');

-- --------------------------------------------------------

--
-- Table structure for table `ref_department`
--

CREATE TABLE `ref_department` (
  `r_dept_id` int(4) NOT NULL,
  `dept_name` varchar(255) DEFAULT NULL,
  `fac_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางอ้างอิง rs_research';

--
-- Dumping data for table `ref_department`
--

INSERT INTO `ref_department` (`r_dept_id`, `dept_name`, `fac_id`) VALUES
(1, 'สาขาวิชาสัตวศาสตร์', 1),
(2, 'สาขาวิชาพืชศาสตร์', 1),
(3, 'สาขาวิชาประมง', 1),
(4, 'สาขาวิชาอุตสาหกรรมเกษตร', 1),
(5, 'สาขาวิชาจักรกลเกษตร', 1),
(6, 'สาขาวิชาเทคโนโลยีไฟฟ้า', 1),
(7, 'สาขาวิชาวิศวกรรมเครื่องกล', 1),
(8, 'สาขาวิชาเทคโนโลยีคอมพิวเตอร์', 1),
(9, 'สาขาวิชาเทคโนโลยีภูมิทัศน์', 1),
(10, 'สาขาวิชาวิทยาศาสตร์และคณิตศาสตร์', 1),
(11, 'สาขาวิชาสิ่งทอและการออกแบบ', 1),
(12, 'สาขาวิชาการจัดการ', 2),
(13, 'สาขาวิชาการบัญชี', 2),
(14, 'สาขาวิชาระบบสารสนเทศ', 2),
(15, 'สาขาวิชาการตลาด', 2),
(16, 'สาขาวิชาภาษาศาสตร์', 2),
(17, 'สาขาวิชาการท่องเที่ยวและการโรงแรม', 2),
(18, 'สาขาวิชามนุษยศาสตร์และสังคมศาสตร์', 2),
(19, 'สาขาวิชาเทคโนโลยีมัลติมีเดีย', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ref_fac`
--

CREATE TABLE `ref_fac` (
  `r_fac_id` int(4) NOT NULL,
  `fac_name` varchar(255) DEFAULT NULL,
  `cam_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ref_fac`
--

INSERT INTO `ref_fac` (`r_fac_id`, `fac_name`, `cam_id`) VALUES
(1, 'คณะเกษตรศาสตร์และเทคโนโลยี', 2),
(2, 'คณะเทคโนโลยีการจัดการ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ref_result`
--

CREATE TABLE `ref_result` (
  `re_id` int(1) NOT NULL,
  `result_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลผลการประเมิน';

-- --------------------------------------------------------

--
-- Table structure for table `ref_rs_type`
--

CREATE TABLE `ref_rs_type` (
  `rs_type_id` int(1) NOT NULL,
  `rs_type_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อูลประเภทโครงการ';

-- --------------------------------------------------------

--
-- Table structure for table `ref_status`
--

CREATE TABLE `ref_status` (
  `status_id` int(1) NOT NULL,
  `status_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลสถานะโครงการ';

-- --------------------------------------------------------

--
-- Table structure for table `ref_univ`
--

CREATE TABLE `ref_univ` (
  `r_cmp_id` int(4) NOT NULL,
  `cam_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลมหาวิทยาลัย ';

--
-- Dumping data for table `ref_univ`
--

INSERT INTO `ref_univ` (`r_cmp_id`, `cam_name`) VALUES
(1, 'นครราชสีมา'),
(2, 'สุรินทร์'),
(3, 'ขอนแก่น'),
(4, 'สกลนคร');

-- --------------------------------------------------------

--
-- Table structure for table `ref_weakness`
--

CREATE TABLE `ref_weakness` (
  `weak_id` int(2) NOT NULL,
  `weak_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลงบประมาณ ref_weakness';

-- --------------------------------------------------------

--
-- Table structure for table `rss_quality`
--

CREATE TABLE `rss_quality` (
  `qid` int(10) NOT NULL COMMENT 'รหัสการรับรองคุณภาพ',
  `q_nation` int(2) DEFAULT NULL COMMENT 'ระดับ 0=ชาติ, 1=นานาชาติ',
  `q_name` varchar(300) DEFAULT NULL COMMENT 'ชื่อผลงานภาษาไทย',
  `q_ename` varchar(200) DEFAULT NULL COMMENT 'ชื่อผลงานภาษาอังกฤษ',
  `q_end` date DEFAULT NULL COMMENT 'วันที่แล้วเสร็จ',
  `q_warranty` date DEFAULT NULL COMMENT 'วันที่ได้รับการรับรองคุณภาพ\n',
  `q_instritute` varchar(200) DEFAULT NULL COMMENT 'หน่วยงานที่ให้การรับรอง',
  `abstract_qua` varchar(100) DEFAULT NULL COMMENT 'หน้าปกผลงาน',
  `abstract_qco` varchar(100) DEFAULT NULL COMMENT 'คำสั่งที่ได้รับการแต่งตั้ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลผลงานวิชาการที่ได้รับการรับรองคุณภาพ " rss_quality "';

-- --------------------------------------------------------

--
-- Table structure for table `rss_quality_score`
--

CREATE TABLE `rss_quality_score` (
  `q_id` int(1) NOT NULL COMMENT 'รหัสการรับรองคุณภาพ',
  `q_name` varchar(100) DEFAULT NULL COMMENT 'การรับรองคุณภาพ',
  `q_score` decimal(5,2) DEFAULT NULL COMMENT 'ค่าน้ำหนัก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางอ้างอิง  " rss_quality_score "';

-- --------------------------------------------------------

--
-- Table structure for table `rs_copyright`
--

CREATE TABLE `rs_copyright` (
  `id` int(4) NOT NULL COMMENT 'ลำดับที่',
  `pname` varchar(300) NOT NULL COMMENT 'ชื่อผลงานที่ขอจดลิขสิทธิ์',
  `rsid` int(10) NOT NULL COMMENT 'รหัสงานวิจัย',
  `rrid` int(4) NOT NULL COMMENT 'รหัสนักวิจัย',
  `pnum` int(10) DEFAULT NULL COMMENT 'เลขที่คำขอลิขสิทธิ์',
  `pnumber` int(10) DEFAULT NULL COMMENT 'เลขที่ลิขสิทธิ์',
  `pstart` date DEFAULT NULL COMMENT 'วันที่ยืนคำขอ',
  `pdate` date DEFAULT NULL COMMENT 'วันที่ไดัรับลิขสิทธิ์',
  `pend` date DEFAULT NULL COMMENT 'วันที่หมดอายุของลิขสิทธิ์',
  `pstatus` char(1) DEFAULT NULL COMMENT 'สถานะ',
  `ref_ps` varchar(100) DEFAULT NULL COMMENT 'หลักฐาน',
  `ref_pis` varchar(100) DEFAULT NULL COMMENT 'รูปภาพและผลงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางลิขสิทธิ์';

-- --------------------------------------------------------

--
-- Table structure for table `rs_creative`
--

CREATE TABLE `rs_creative` (
  `crid` int(10) NOT NULL,
  `crname` varchar(100) DEFAULT NULL COMMENT 'รายการ',
  `crscore` decimal(5,3) DEFAULT NULL COMMENT 'ค่าน้ำหนัก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางอ้างอิง  " rs_creative "';

-- --------------------------------------------------------

--
-- Table structure for table `rs_fac_research`
--

CREATE TABLE `rs_fac_research` (
  `frid` int(11) NOT NULL COMMENT 'รหัสสาขางานวิจัย',
  `fname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='สาขางานวิจัย';

--
-- Dumping data for table `rs_fac_research`
--

INSERT INTO `rs_fac_research` (`frid`, `fname`) VALUES
(1, 'การวิจัยพื้นฐาน (Basic research)'),
(2, 'การวิจัยประยุกต์ (Applied research)');

-- --------------------------------------------------------

--
-- Table structure for table `rs_info`
--

CREATE TABLE `rs_info` (
  `rid` int(4) NOT NULL COMMENT 'รหัสนักวิจัย',
  `r_num` varchar(30) DEFAULT NULL COMMENT 'เลขที่บัตรประชาชน',
  `r_fname_en` varchar(50) DEFAULT NULL COMMENT 'ชื่อภาษาอังกฤษ',
  `r_lname_en` varchar(50) DEFAULT NULL COMMENT 'นามสกุลภาษาอังกฤษ',
  `r_lname_th` varchar(50) DEFAULT NULL COMMENT 'ชื่อ',
  `f_lname_th` varchar(50) DEFAULT NULL COMMENT 'นามสกุล',
  `r_date` int(2) DEFAULT NULL COMMENT 'วันเกิด',
  `r_month` int(2) DEFAULT NULL COMMENT 'เดือนเกิด',
  `r_yaer` int(4) DEFAULT NULL COMMENT 'ปีที่เกิด',
  `r_personal` int(13) DEFAULT NULL COMMENT 'เลขที่บัตรประชาชน',
  `r_picture` varchar(25) DEFAULT NULL COMMENT 'ชื่อไฟล์รูป',
  `r_address` varchar(200) DEFAULT NULL COMMENT 'ที่อยู่',
  `r_city` varchar(50) DEFAULT NULL COMMENT 'อำเภอ',
  `r_province` varchar(50) DEFAULT NULL COMMENT 'จังหวัด',
  `r_postal` varchar(6) DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `r_tel` varchar(40) DEFAULT NULL COMMENT 'เบอร์โทรศัพท์',
  `r_fax` varchar(40) DEFAULT NULL COMMENT 'เบอร์แฟกซ์',
  `r_mobile` varchar(40) DEFAULT NULL COMMENT 'มือถือ',
  `r_email` varchar(40) DEFAULT NULL COMMENT 'อีเมล์',
  `r_nrct` varchar(30) DEFAULT NULL COMMENT 'รหัสประจำตัวนักวิจัย',
  `r_position` varchar(30) DEFAULT NULL COMMENT 'ตำแหน่งทางวิชาการ',
  `r_administ` varchar(30) DEFAULT NULL COMMENT 'ตำแหน่งทางบริหาร',
  `r_dept_id` int(4) NOT NULL COMMENT 'สาขาวิชา',
  `r_fac_id` int(4) NOT NULL COMMENT 'คณะ',
  `r_cmp_id` int(4) NOT NULL COMMENT 'วิทยาเขต',
  `r_Aeducation` text COMMENT 'การศึกษา (ป.เอก)',
  `r_Meducation` text COMMENT 'การศึกษา (ป.โท)',
  `r_Beducation` text COMMENT 'การศึกษา (ป.ตรี)',
  `r_experience` text COMMENT 'ประสบการณ์',
  `r_expert` text COMMENT 'ความเชี่ยวชาญ',
  `r_type` int(1) DEFAULT NULL COMMENT '1=สายวิชาการ0=สายสนับสนุน',
  `r_status` int(1) DEFAULT NULL COMMENT '1=ภายใน0=ภายนอก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลนักวิจัย\n';

--
-- Dumping data for table `rs_info`
--

INSERT INTO `rs_info` (`rid`, `r_num`, `r_fname_en`, `r_lname_en`, `r_lname_th`, `f_lname_th`, `r_date`, `r_month`, `r_yaer`, `r_personal`, `r_picture`, `r_address`, `r_city`, `r_province`, `r_postal`, `r_tel`, `r_fax`, `r_mobile`, `r_email`, `r_nrct`, `r_position`, `r_administ`, `r_dept_id`, `r_fac_id`, `r_cmp_id`, `r_Aeducation`, `r_Meducation`, `r_Beducation`, `r_experience`, `r_expert`, `r_type`, `r_status`) VALUES
(1, '', '', '', 'สุทธิศักดิ์ ', 'แก้วแกมจันทร์', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 2, '', '', '', '', '- โภชนะศาสตร์สัตว์เคี้ยวเอื้อง โดยเฉพาะอาหารโคนม\r\n - น้ำนมและผลิตภัณฑ์นม\r\n- การอนุรักษ์และจัดการช้าง', 1, 1),
(2, '2', '', '', 'ปรมาพร ', 'อ่อนจันทร์', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 14, 2, 2, '', '', '', '', '- บริหารธุรกิจ - ระบบสารสนเทศ', 1, 1),
(3, '3', '', '', 'ภรณี ', 'หลาวทอง', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 12, 2, 2, '', '', '', '', '- การจัดการ, การจัดการวิสาหกิจขนาดกลางและขนาดย่อม - บริหารธุรกิจ', NULL, NULL),
(4, '4', '', '', 'โกเมท ', 'จันทรสมโภชน์', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 18, 2, 2, '', '', '', '', '- ศิลปกรรม, เทคโนโลยีการศึกษา, ศึกษาศาสตร์', 1, 1),
(5, '5', '', '', 'สรชัย ', 'สุขพันธ์', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 14, 2, 2, '', '', '', '', '- คอมพิวเตอร์, สารสนเทศ', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rs_journal`
--

CREATE TABLE `rs_journal` (
  `jid` int(10) NOT NULL COMMENT 'รหัสการตีพิมพ์',
  `j_nation` char(2) DEFAULT NULL COMMENT 'ระดับ 0=ชาติ, 1=นานาชาติ',
  `j_type` int(1) DEFAULT NULL COMMENT 'ประเภทการตีพิมพ์ 2=การนำเสนอผลงานที่ประชุมวิชาการ',
  `j_rname` varchar(300) DEFAULT NULL COMMENT 'ชื่อบทความภาษาไทย',
  `j_ename` varchar(300) DEFAULT NULL COMMENT 'ชื่อบทความภาษาอังกฤษ',
  `j_name` varchar(300) DEFAULT NULL COMMENT 'ประเภทวารสารวิชาการ',
  `j_start` date DEFAULT NULL COMMENT 'วันที่',
  `j_end` varchar(45) DEFAULT NULL COMMENT 'ถึงวันที่',
  `j_year` varchar(4) DEFAULT NULL COMMENT 'ปีที่',
  `j_issue` varchar(50) DEFAULT NULL COMMENT 'ฉบับที่',
  `j_page` varchar(10) DEFAULT NULL COMMENT 'หน้าที่',
  `dataj` varchar(100) DEFAULT NULL COMMENT 'จัดเก็บที่ฐานข้อมูล TCI, ISI, Scopus',
  `impact` decimal(5,3) DEFAULT NULL COMMENT 'ค่าอิมแพ็คแฟ็คเตอร์',
  `citation` varchar(100) DEFAULT NULL COMMENT 'บรรณานุกรม',
  `abstract_in` varchar(100) DEFAULT NULL COMMENT 'หนังสือเชิญร่วมการสัมมนา',
  `abstract_ap` varchar(100) DEFAULT NULL COMMENT 'หนังสืออนุญาตให้เข้าร่วมสัมมนา',
  `abstract_co` varchar(100) DEFAULT NULL COMMENT 'หน้าปก',
  `abstract_con` varchar(100) DEFAULT NULL COMMENT 'สารบัญ',
  `abstract_sc` varchar(100) DEFAULT NULL COMMENT 'กำหนดการสัมมนา',
  `abstract_fp` varchar(100) DEFAULT NULL COMMENT 'ผลงานการวิจัย',
  `abstract_di` varchar(100) DEFAULT NULL COMMENT 'วุฒิบัตร ถ้ามี',
  `abstract_pi` varchar(100) DEFAULT NULL COMMENT 'ภาพประกอบ  ถ้ามี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลการนำเสนอผลงานที่ประชุมวิชาการ';

-- --------------------------------------------------------

--
-- Table structure for table `rs_media`
--

CREATE TABLE `rs_media` (
  `mid` int(10) NOT NULL,
  `m_nation` varchar(2) DEFAULT NULL COMMENT 'ระดับ 0=ชาติ, 1=นานาชาติ',
  `m_rname` varchar(300) DEFAULT NULL COMMENT 'ชื่อบทความภาษาไทย',
  `m_ename` varchar(300) DEFAULT NULL COMMENT 'ชื่อบทความภาษาอังกฤษ',
  `m_channel` varchar(300) DEFAULT NULL COMMENT 'สถานที่เผยแพร่ อำเภอ จังหวัด',
  `m_detail` varchar(300) DEFAULT NULL COMMENT 'รายละเอียดการเผยแพร่',
  `m_date` date DEFAULT NULL,
  `m_end` date DEFAULT NULL,
  `m_time` int(7) DEFAULT NULL COMMENT 'จำนวนครั้งที่เผยแพร่',
  `abstract_i` varchar(100) DEFAULT NULL COMMENT 'หนังสือเชิญร่วมการสัมมนา\n',
  `abstract_a` varchar(100) DEFAULT NULL COMMENT 'หนังสืออนุญาตให้เข้าร่วมสัมมนา\n',
  `abstract_c` varchar(100) DEFAULT NULL COMMENT 'หน้าปก',
  `abstract_nc` varchar(100) DEFAULT NULL COMMENT 'สารบัญ',
  `abstract_s` varchar(100) DEFAULT NULL COMMENT 'abstract_s',
  `abstract_f` varchar(100) DEFAULT NULL COMMENT 'ผลงานการเผยแพร่',
  `abstract_d` varchar(100) DEFAULT NULL COMMENT 'วุฒิบัตร (ถ้ามี)',
  `abstract_p` varchar(100) DEFAULT NULL COMMENT 'ภาพประกอบ (ถ้ามี)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลผลงานสร้างสรรค์ที่ได้รับการเผยแพร่ " rs_media "';

-- --------------------------------------------------------

--
-- Table structure for table `rs_patent`
--

CREATE TABLE `rs_patent` (
  `id` int(4) NOT NULL COMMENT 'ลำดับที่',
  `a_aname` varchar(300) NOT NULL COMMENT 'ชื่อผลงานที่ขอจดอนุสิทธิบัตร\n',
  `rsid` int(10) NOT NULL COMMENT 'รหัสงานวิจัย',
  `rid` int(4) NOT NULL COMMENT 'รหัสนักวิจัย',
  `a_num` char(10) DEFAULT NULL COMMENT 'เลขที่คำขออนุสิทธิบัตร\n',
  `a_number` char(5) DEFAULT NULL COMMENT 'เลขที่อนุสิทธิบัตร',
  `a_start` date DEFAULT NULL COMMENT 'วันที่ยื่นคำขอ',
  `a_date` date DEFAULT NULL COMMENT 'วันที่ได้รับอนุสิทธิบัตร',
  `a_end` date DEFAULT NULL COMMENT 'วันที่หมดอายุของอนุสิทธิบัตร',
  `a_status` char(1) DEFAULT NULL COMMENT 'สถานะ',
  `ref_p` varchar(100) DEFAULT NULL COMMENT 'หลักฐาน',
  `ref_ai` varchar(100) DEFAULT NULL COMMENT 'รูปภาพและผลงาน',
  `withs` varchar(100) DEFAULT NULL COMMENT 'ร่วมกับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางสิทธิบัตร';

-- --------------------------------------------------------

--
-- Table structure for table `rs_patents`
--

CREATE TABLE `rs_patents` (
  `id` int(4) NOT NULL COMMENT 'ลำดับที่',
  `a_pname` varchar(300) NOT NULL COMMENT 'ชื่อผลงานที่ขอจดอนุสิทธิบัตร',
  `rsid` int(10) NOT NULL COMMENT 'รหัสงานวิจัย',
  `rid` int(4) NOT NULL COMMENT 'รหัสนักวิจัย',
  `a_num` char(10) DEFAULT NULL COMMENT 'เลขที่คำขออนุสิทธิบัตร\n',
  `a_number` char(5) DEFAULT NULL COMMENT 'เลขที่อนุสิทธิบัตร',
  `a_start` date DEFAULT NULL COMMENT 'วันที่ยื่นคำขอ',
  `a_date` date DEFAULT NULL COMMENT 'วันที่ได้รับอนุสิทธิบัตร',
  `a_end` date DEFAULT NULL COMMENT 'วันที่หมดอายุของอนุสิทธิบัตร',
  `a_status` char(1) DEFAULT NULL COMMENT 'สถานะ',
  `ref_p` varchar(100) DEFAULT NULL COMMENT 'หลักฐาน',
  `ref_pi` varchar(100) DEFAULT NULL COMMENT 'รูปภาพและผลงาน',
  `withs` varchar(100) DEFAULT NULL COMMENT 'ร่วมกับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางอนุสิทธิบัตร';

-- --------------------------------------------------------

--
-- Table structure for table `rs_proposal`
--

CREATE TABLE `rs_proposal` (
  `pid` varchar(15) NOT NULL,
  `p_name` varchar(300) DEFAULT NULL,
  `p_name_en` varchar(300) DEFAULT NULL,
  `rs_leader` varchar(10) DEFAULT NULL,
  `rs_team` varchar(100) DEFAULT NULL,
  `p_fiscal` varchar(10) DEFAULT NULL,
  `p_budget` decimal(10,0) DEFAULT NULL,
  `p_campus` varchar(4) DEFAULT NULL,
  `p_start` date DEFAULT NULL,
  `p_end` date DEFAULT NULL,
  `p_type` char(1) DEFAULT NULL,
  `p_grade` char(1) DEFAULT NULL,
  `p_sequence` char(1) DEFAULT NULL,
  `p_result` int(1) DEFAULT NULL,
  `p_reason` text,
  `p_weakness` char(2) DEFAULT NULL,
  `project_id` int(1) DEFAULT NULL,
  `rs_year` char(1) DEFAULT NULL,
  `rs_atyear` char(1) DEFAULT NULL,
  `pro_group` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลข้อเสนอโครงการ';

-- --------------------------------------------------------

--
-- Table structure for table `rs_quality`
--

CREATE TABLE `rs_quality` (
  `quid` int(10) NOT NULL COMMENT 'รหัสคุณภาพงานวิจัย',
  `quname` varchar(200) DEFAULT NULL COMMENT 'รายละเอียด',
  `quscore` decimal(5,2) DEFAULT NULL COMMENT 'ค่าน้ำหนัก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางอ้างอิง  " rs_quality "';

-- --------------------------------------------------------

--
-- Table structure for table `rs_research`
--

CREATE TABLE `rs_research` (
  `rsid` int(10) NOT NULL COMMENT 'รหัสงานวิจัย',
  `rs_name` varchar(300) NOT NULL COMMENT 'ชื่อโครงการวิจัย(ไทย)',
  `rs_name_en` varchar(300) DEFAULT NULL COMMENT 'ชื่อโครงการวิจัย (อังกฤษ)',
  `rs_leader` varchar(10) DEFAULT NULL COMMENT 'รหัสหัวหน้าโครงการ',
  `rs_team` varchar(10) DEFAULT NULL COMMENT 'รหัสผู้ร่วมโครงการ',
  `rs_fiscal` varchar(10) DEFAULT NULL COMMENT 'ปีงบประมาณ',
  `budget_id` int(1) NOT NULL,
  `rs_abstract_en` varchar(100) DEFAULT NULL COMMENT 'บทคัดย่อ(อังกฤษ)',
  `rs_abstract_th` varchar(100) DEFAULT NULL COMMENT 'บทคัดย่อ(ไทย)',
  `rs_campus` varchar(100) DEFAULT NULL,
  `rs_capital` char(1) DEFAULT NULL COMMENT 'ประเภทงบประมาณ',
  `rs_class` char(1) DEFAULT NULL COMMENT 'งานวิจัยในชั้นเรียน',
  `rs_pay1` decimal(10,0) DEFAULT NULL COMMENT 'จ่ายงวดที่ 1 (60%)',
  `rs_pay2` decimal(10,0) DEFAULT NULL,
  `rs_pay3` decimal(10,0) DEFAULT NULL,
  `rs_bank` varchar(100) DEFAULT NULL COMMENT 'สั่งจ่ายเช็คหรือบัญชีธนาคาร',
  `frid` int(11) NOT NULL COMMENT 'รหัสสาขางานวิจัย',
  `rs_start` date DEFAULT NULL COMMENT 'วันที่เริ่มต้น',
  `rs_end` date DEFAULT NULL COMMENT 'วันที่สิ้นสุด',
  `rs_time` date DEFAULT NULL COMMENT 'ขยายเวลาถึงวันที่',
  `rs_type` char(1) DEFAULT NULL COMMENT 'สถานะโครงการ',
  `rs_status` char(3) DEFAULT NULL COMMENT 'สถานะโครงการ',
  `rs_note` varchar(200) DEFAULT NULL COMMENT 'สถานะโครงการ\n',
  `rs_statxt` varchar(20) DEFAULT NULL COMMENT 'ความก้าวหน้า',
  `rs_final` date DEFAULT NULL COMMENT 'วันที่แล้วเสร็จ',
  `subject_id` int(1) NOT NULL,
  `project_id` int(1) DEFAULT NULL COMMENT 'ลักษณะโครงการ',
  `rs_year` char(1) DEFAULT NULL COMMENT 'โครงการต่อเนื่อง',
  `rs_atyear` char(1) DEFAULT NULL COMMENT 'ปีที่',
  `pro_group` char(1) DEFAULT NULL COMMENT 'ชนิดโครงการ',
  `rs_nguat1` date DEFAULT NULL COMMENT 'วันที่เบิกเงินงวดที่1',
  `rs_nguat2` date DEFAULT NULL COMMENT 'วันที่เบิกเงินงวดที่2',
  `rs_nguat3` date DEFAULT NULL COMMENT 'วันที่เบิกเงินงวดที่3',
  `rs_kaona` varchar(100) DEFAULT NULL COMMENT 'ไฟล์รายงานความก้าวหน้า',
  `rs_knowleadge` varchar(100) DEFAULT NULL COMMENT 'ไฟล์สรุปองค์ความรู้จากการวิจัย',
  `rs_book` varchar(10) DEFAULT NULL COMMENT 'เลขที่บันทึกข้อความนำส่งวิจัยฉบับสมบูรณ์',
  `rs_isbn` varchar(20) DEFAULT NULL COMMENT 'เลขทะเบียนหนังสือ',
  `rs_sum` varchar(5) DEFAULT NULL COMMENT 'จำนวนเล่ม',
  `rs_cd` varchar(5) DEFAULT NULL COMMENT 'cd/แผ่น',
  `rs_dbook` date DEFAULT NULL COMMENT 'วันที่ส่งวิจัยฉบับสมบูรณ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลงานวิจัย';

--
-- Dumping data for table `rs_research`
--

INSERT INTO `rs_research` (`rsid`, `rs_name`, `rs_name_en`, `rs_leader`, `rs_team`, `rs_fiscal`, `budget_id`, `rs_abstract_en`, `rs_abstract_th`, `rs_campus`, `rs_capital`, `rs_class`, `rs_pay1`, `rs_pay2`, `rs_pay3`, `rs_bank`, `frid`, `rs_start`, `rs_end`, `rs_time`, `rs_type`, `rs_status`, `rs_note`, `rs_statxt`, `rs_final`, `subject_id`, `project_id`, `rs_year`, `rs_atyear`, `pro_group`, `rs_nguat1`, `rs_nguat2`, `rs_nguat3`, `rs_kaona`, `rs_knowleadge`, `rs_book`, `rs_isbn`, `rs_sum`, `rs_cd`, `rs_dbook`) VALUES
(1, 'ปปปป', '', 'จักรินทร์ ', 'หกดหก กหดห', '', 0, '', '', '', '', '0', NULL, NULL, NULL, '', 2, NULL, NULL, NULL, '', '', '', '', NULL, 1, NULL, '', '', '', NULL, NULL, NULL, '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rs_secret`
--

CREATE TABLE `rs_secret` (
  `id` int(4) NOT NULL COMMENT 'ลำดับที่',
  `secret_name` varchar(100) NOT NULL COMMENT 'ชื่อผลงานที่ขอจดความลับทางการค้า',
  `rsid` int(10) NOT NULL COMMENT 'รหัสงานวิจัย',
  `rid` int(4) NOT NULL COMMENT 'รหัสนักวิจัย',
  `secret_num` varchar(10) DEFAULT NULL COMMENT 'เลขคำขอความลับทางการค้า',
  `secret_number` varchar(10) DEFAULT NULL COMMENT 'เลขที่ความลับทางการค้า\n',
  `secret_start` date DEFAULT NULL COMMENT 'วันที่ยื่นคำขอ',
  `secret_date` date DEFAULT NULL COMMENT 'วันที่ได้รับความลับทางการค้า\n',
  `secret_status` char(1) DEFAULT NULL COMMENT 'สถานะ',
  `ref_secret` varchar(100) DEFAULT NULL COMMENT 'หนังสือรับรองความลับทางการค้า',
  `withs` varchar(100) DEFAULT NULL COMMENT 'ร่วมกับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางความลับทางการค้า';

-- --------------------------------------------------------

--
-- Table structure for table `rs_subject`
--

CREATE TABLE `rs_subject` (
  `subject_id` int(1) NOT NULL,
  `subject_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลกลุ่มสาขาวิชา  rs_subject';

--
-- Dumping data for table `rs_subject`
--

INSERT INTO `rs_subject` (`subject_id`, `subject_name`) VALUES
(1, 'การวิจัยทางวิทยาศาสตร์ (Scientific research)'),
(2, 'วิจัยทางสังคมศาสตร์ (Social research)');

-- --------------------------------------------------------

--
-- Table structure for table `rs_subresearch`
--

CREATE TABLE `rs_subresearch` (
  `isid` int(10) NOT NULL,
  `rs_name` varchar(300) DEFAULT NULL,
  `rs_name_en` varchar(300) DEFAULT NULL,
  `rs_leader` varchar(10) DEFAULT NULL,
  `rs_team` varchar(100) DEFAULT NULL,
  `rs_fiscal` varchar(10) DEFAULT NULL,
  `budget_id` int(1) NOT NULL,
  `rs_abstract_en` varchar(100) DEFAULT NULL,
  `rs_abstract_th` varchar(100) DEFAULT NULL,
  `rs_campus` varchar(4) DEFAULT NULL,
  `rs_capital` varchar(1) DEFAULT NULL,
  `rs_class` varchar(1) DEFAULT NULL,
  `rs_pay1` decimal(10,0) DEFAULT NULL,
  `rs_pay2` decimal(10,0) DEFAULT NULL,
  `rs_pay3` decimal(10,0) DEFAULT NULL,
  `rs_bank` varchar(100) DEFAULT NULL,
  `frid` int(11) NOT NULL COMMENT 'รหัสสาขางานวิจัย',
  `rs_start` date DEFAULT NULL,
  `rs_end` date DEFAULT NULL,
  `rs_time` date DEFAULT NULL,
  `rs_type_id` int(1) NOT NULL,
  `rs_status` char(3) DEFAULT NULL,
  `rs_note` varchar(200) DEFAULT NULL,
  `rs_statxt` varchar(20) DEFAULT NULL,
  `rs_finish` date DEFAULT NULL,
  `rs_subject` int(1) NOT NULL,
  `project_id` int(1) DEFAULT NULL,
  `rs_year` char(1) DEFAULT NULL,
  `rs_atyear` char(1) DEFAULT NULL,
  `pro_group` char(1) DEFAULT NULL,
  `rs_nguat1` date DEFAULT NULL,
  `rs_nguat2` date DEFAULT NULL,
  `rs_nguat3` date DEFAULT NULL,
  `rs_kaona` varchar(100) DEFAULT NULL,
  `rs_knowleadge` varchar(100) DEFAULT NULL,
  `rs_book` varchar(10) DEFAULT NULL,
  `rs_isbn` varchar(20) DEFAULT NULL,
  `rs_sum` varchar(5) DEFAULT NULL,
  `rs_cd` varchar(5) DEFAULT NULL,
  `rs_dbook` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rs_use`
--

CREATE TABLE `rs_use` (
  `reid` int(10) NOT NULL,
  `re_inter` int(1) DEFAULT NULL COMMENT 'ระดับ 0=ชาติ, 1=นานาชาติ',
  `re_tname` varchar(300) DEFAULT NULL COMMENT 'ชื่อบทความภาษาไทย',
  `re_ename` varchar(300) DEFAULT NULL,
  `re_end` date DEFAULT NULL COMMENT 'วันเดือนปีที่แล้วเสร็จ',
  `re_start` date DEFAULT NULL COMMENT 'วันที่เริ่มนำไปใช้ประโยชน์',
  `re_date` date DEFAULT NULL COMMENT 'สิ้นสุดวันที่',
  `re_area` varchar(300) DEFAULT NULL COMMENT 'สถานที่ จังหวัด ประเทศที่นำไปใช้ประโยชน์',
  `abstract_up` varchar(100) DEFAULT NULL COMMENT 'ภาพถ่าย',
  `abstract_uc` varchar(100) DEFAULT NULL COMMENT 'สำเนาปก ปกรอง คำนำ สารบัญ และส่วนที่อ้างถึงงานที่นำไปใช้ประโยชน์',
  `abstract_ut` varchar(100) DEFAULT NULL COMMENT 'เอกสารประกอบการฝึกอบรม',
  `abstract_ua` varchar(100) DEFAULT NULL COMMENT 'หนังสือขออนุญาตนำไปใช้ประโยชน์',
  `abstract_us` varchar(100) DEFAULT NULL COMMENT 'หลักฐานการจำหน่ายผลิตภัณฑ์',
  `abstract_uo` varchar(100) DEFAULT NULL,
  `abstract_ute` varchar(100) DEFAULT NULL,
  `re_test` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ฐานข้อมูลผลงานวิจัยหรืองานสร้างสรรค์ที่นำไปใช้ประโยชน์ " rs_use "';

-- --------------------------------------------------------

--
-- Table structure for table `rs_useformat`
--

CREATE TABLE `rs_useformat` (
  `re_format` int(1) NOT NULL,
  `re_name` varchar(100) DEFAULT NULL COMMENT 'รูปแบบการนำไปใช้ประโยชน์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางอ้างอิง  " rs_useformat "';

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `expire` int(11) NOT NULL,
  `data` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('94hdfnek52hgtne8nht5rqs7g3', 1494496462, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_activation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `status`, `auth_key`, `password_reset_token`, `account_activation_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ie_ed@hotmail.com', '$2y$13$Te3DTefhr5lVOTSAiRkLu.syb9yEiMr1zS9tzHmXPfoP5uX1Qn7Sq', 10, 'tMreESm4k4JccFQIZFyyO0gHHEptgzgE', NULL, NULL, 1476757297, 1476757297),
(2, 'peak', 'peak@hotmail.com', '$2y$13$vbMfg8v9YseGw9o/hnrsIuF.GS3ipVRdQSorg3qgov7Who3GxboQ2', 10, 'lU-NPaUsTwKdsFiKh_ba-Sj-IsKQTLEG', NULL, NULL, 1481619887, 1481619947);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `ref_budget`
--
ALTER TABLE `ref_budget`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `ref_department`
--
ALTER TABLE `ref_department`
  ADD PRIMARY KEY (`r_dept_id`);

--
-- Indexes for table `ref_fac`
--
ALTER TABLE `ref_fac`
  ADD PRIMARY KEY (`r_fac_id`);

--
-- Indexes for table `ref_result`
--
ALTER TABLE `ref_result`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `ref_rs_type`
--
ALTER TABLE `ref_rs_type`
  ADD PRIMARY KEY (`rs_type_id`);

--
-- Indexes for table `ref_status`
--
ALTER TABLE `ref_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `ref_univ`
--
ALTER TABLE `ref_univ`
  ADD PRIMARY KEY (`r_cmp_id`);

--
-- Indexes for table `ref_weakness`
--
ALTER TABLE `ref_weakness`
  ADD PRIMARY KEY (`weak_id`);

--
-- Indexes for table `rss_quality`
--
ALTER TABLE `rss_quality`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `rss_quality_score`
--
ALTER TABLE `rss_quality_score`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `rs_copyright`
--
ALTER TABLE `rs_copyright`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rs_copyright_rs_research1_idx` (`rsid`),
  ADD KEY `fk_rs_copyright_rs_info1_idx` (`rrid`);

--
-- Indexes for table `rs_creative`
--
ALTER TABLE `rs_creative`
  ADD PRIMARY KEY (`crid`);

--
-- Indexes for table `rs_fac_research`
--
ALTER TABLE `rs_fac_research`
  ADD PRIMARY KEY (`frid`);

--
-- Indexes for table `rs_info`
--
ALTER TABLE `rs_info`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `r_num_UNIQUE` (`r_num`),
  ADD KEY `fk_rs_info_ref_department1_idx` (`r_dept_id`),
  ADD KEY `fk_rs_info_ref_fac1_idx` (`r_fac_id`),
  ADD KEY `fk_rs_info_ref_univ1_idx` (`r_cmp_id`);

--
-- Indexes for table `rs_journal`
--
ALTER TABLE `rs_journal`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `rs_media`
--
ALTER TABLE `rs_media`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `rs_patent`
--
ALTER TABLE `rs_patent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rs_patent_rs_research1_idx` (`rsid`),
  ADD KEY `fk_rs_patent_rs_info1_idx` (`rid`);

--
-- Indexes for table `rs_patents`
--
ALTER TABLE `rs_patents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rs_patents_rs_research1_idx` (`rsid`),
  ADD KEY `fk_rs_patents_rs_info1_idx` (`rid`);

--
-- Indexes for table `rs_proposal`
--
ALTER TABLE `rs_proposal`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rs_quality`
--
ALTER TABLE `rs_quality`
  ADD PRIMARY KEY (`quid`);

--
-- Indexes for table `rs_research`
--
ALTER TABLE `rs_research`
  ADD PRIMARY KEY (`rsid`),
  ADD KEY `fk_rs_research_rs_subject_idx` (`subject_id`),
  ADD KEY `fk_rs_research_rs_branch1_idx` (`frid`),
  ADD KEY `fk_rs_research_ref_budget1_idx` (`budget_id`);

--
-- Indexes for table `rs_secret`
--
ALTER TABLE `rs_secret`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rs_secret_rs_research1_idx` (`rsid`),
  ADD KEY `fk_rs_secret_rs_info1_idx` (`rid`);

--
-- Indexes for table `rs_subject`
--
ALTER TABLE `rs_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `rs_subresearch`
--
ALTER TABLE `rs_subresearch`
  ADD PRIMARY KEY (`isid`),
  ADD KEY `fk_rs_subresearch_rs_subject1_idx` (`rs_subject`),
  ADD KEY `fk_rs_subresearch_rs_branch1_idx` (`frid`),
  ADD KEY `fk_rs_subresearch_ref_rs_type1_idx` (`rs_type_id`),
  ADD KEY `fk_rs_subresearch_ref_budget1_idx` (`budget_id`);

--
-- Indexes for table `rs_use`
--
ALTER TABLE `rs_use`
  ADD PRIMARY KEY (`reid`);

--
-- Indexes for table `rs_useformat`
--
ALTER TABLE `rs_useformat`
  ADD PRIMARY KEY (`re_format`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rss_quality`
--
ALTER TABLE `rss_quality`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการรับรองคุณภาพ';
--
-- AUTO_INCREMENT for table `rss_quality_score`
--
ALTER TABLE `rss_quality_score`
  MODIFY `q_id` int(1) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการรับรองคุณภาพ';
--
-- AUTO_INCREMENT for table `rs_copyright`
--
ALTER TABLE `rs_copyright`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่';
--
-- AUTO_INCREMENT for table `rs_creative`
--
ALTER TABLE `rs_creative`
  MODIFY `crid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rs_fac_research`
--
ALTER TABLE `rs_fac_research`
  MODIFY `frid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสาขางานวิจัย', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rs_journal`
--
ALTER TABLE `rs_journal`
  MODIFY `jid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการตีพิมพ์';
--
-- AUTO_INCREMENT for table `rs_patent`
--
ALTER TABLE `rs_patent`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่';
--
-- AUTO_INCREMENT for table `rs_patents`
--
ALTER TABLE `rs_patents`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่';
--
-- AUTO_INCREMENT for table `rs_research`
--
ALTER TABLE `rs_research`
  MODIFY `rsid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสงานวิจัย', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rs_secret`
--
ALTER TABLE `rs_secret`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่';
--
-- AUTO_INCREMENT for table `rs_useformat`
--
ALTER TABLE `rs_useformat`
  MODIFY `re_format` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rs_copyright`
--
ALTER TABLE `rs_copyright`
  ADD CONSTRAINT `fk_rs_copyright_rs_info1` FOREIGN KEY (`rrid`) REFERENCES `rs_info` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_copyright_rs_research1` FOREIGN KEY (`rsid`) REFERENCES `rs_research` (`rsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rs_info`
--
ALTER TABLE `rs_info`
  ADD CONSTRAINT `fk_rs_info_ref_department1` FOREIGN KEY (`r_dept_id`) REFERENCES `ref_department` (`r_dept_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_info_ref_fac1` FOREIGN KEY (`r_fac_id`) REFERENCES `ref_fac` (`r_fac_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_info_ref_univ1` FOREIGN KEY (`r_cmp_id`) REFERENCES `ref_univ` (`r_cmp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rs_patent`
--
ALTER TABLE `rs_patent`
  ADD CONSTRAINT `fk_rs_patent_rs_info1` FOREIGN KEY (`rid`) REFERENCES `rs_info` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_patent_rs_research1` FOREIGN KEY (`rsid`) REFERENCES `rs_research` (`rsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rs_patents`
--
ALTER TABLE `rs_patents`
  ADD CONSTRAINT `fk_rs_patents_rs_info1` FOREIGN KEY (`rid`) REFERENCES `rs_info` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_patents_rs_research1` FOREIGN KEY (`rsid`) REFERENCES `rs_research` (`rsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rs_research`
--
ALTER TABLE `rs_research`
  ADD CONSTRAINT `fk_rs_research_ref_budget1` FOREIGN KEY (`budget_id`) REFERENCES `ref_budget` (`budget_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_research_rs_branch1` FOREIGN KEY (`frid`) REFERENCES `rs_fac_research` (`frid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_research_rs_subject` FOREIGN KEY (`subject_id`) REFERENCES `rs_subject` (`subject_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rs_secret`
--
ALTER TABLE `rs_secret`
  ADD CONSTRAINT `fk_rs_secret_rs_info1` FOREIGN KEY (`rid`) REFERENCES `rs_info` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_secret_rs_research1` FOREIGN KEY (`rsid`) REFERENCES `rs_research` (`rsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rs_subresearch`
--
ALTER TABLE `rs_subresearch`
  ADD CONSTRAINT `fk_rs_subresearch_ref_budget1` FOREIGN KEY (`budget_id`) REFERENCES `ref_budget` (`budget_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_subresearch_ref_rs_type1` FOREIGN KEY (`rs_type_id`) REFERENCES `ref_rs_type` (`rs_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_subresearch_rs_branch1` FOREIGN KEY (`frid`) REFERENCES `rs_fac_research` (`frid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rs_subresearch_rs_subject1` FOREIGN KEY (`rs_subject`) REFERENCES `rs_subject` (`subject_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
