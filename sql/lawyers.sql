-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 07:18 AM
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
-- Database: `lawyers`
--

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `service_type` enum('criminal','divorce','affidavit','civil') NOT NULL,
  `bio` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `user_id`, `name`, `email`, `location`, `service_type`, `bio`, `images`, `approved`) VALUES
(9, 15, 'Abdul Hye Nadeem ', 'hyeabdul@gmail.com', 'Karachi', 'criminal', 'Abdul Hye Nadeem is a senior attorney based in Karachi, specializing in a wide range of legal areas including criminal law.', 'uploads/673d7b39d88f7_abdul.jpg', 1),
(10, 16, 'Imdad Hussain Awan', 'imdadaw@gmail.com', 'Karachi', 'criminal', 'Imdad Hussain Awan is a legal professional who specializes in various aspects of law, including criminal law.', 'uploads/673d7c1c21dc2_29d48368-67c7-4ae3-aca2-55be26ed3644.webp', 1),
(11, 17, 'Inamullah Ansari', 'Inamullahansari@gmail.com', 'Karachi', 'criminal', 'Inamullah Ansari is a skilled advocate based in Karachi, known for his expertise in criminal law. ', 'uploads/673d7ca3ba1e7_688cf779-55d4-4dd6-bf7b-ce60a302fd21.webp', 1),
(12, 18, 'Muhammad Asif Malik', 'muhammadam@gmail.com', 'Karachi', 'criminal', 'Hello, I am Muhammad Asif Malik, a lawyer with expertise in various areas of law such as Nab Law, Cybercrime Law.', 'uploads/673d7d9c604d6_9ba46274-76e2-4e4c-8317-b6f61d9d185e.webp', 1),
(26, 19, 'abdullah', 'hashir@example.com', 'Sialkot', 'criminal', 'dfghjkl', 'uploads/673d8da7732165.95120127.webp', 0),
(27, 25, 'Ali Khan', 'ali.khan@gmail.com', 'Karachi', 'divorce', 'I am a dedicated and passionate lawyer with over 10 years of experience specializing in criminal and family law.', 'uploads/673ed247d92bd3.98280808.jpg', 1),
(28, 26, 'Sara Ahmed', 'sara.ahmed@example.com', 'Karachi', 'divorce', 'I am a dedicated family lawyer with a focus on divorce, custody, and other sensitive family legal matters.', 'uploads/673ed2ed6d2b56.26006526.jpg', 1),
(29, 27, 'Ahmed Ali', 'ahmed.ali@example.com', 'Karachi', 'divorce', 'With over 8 years of experience in criminal law, I have dedicated my career to defending individuals who have been charged with various criminal offenses. My approach to law is centered around providing my clients with a strong defense, ensuring that they receive a fair trial.', 'uploads/673ed37a12eb19.43576568.jpg', 1),
(30, 28, 'Isha Pervaiz', 'isha.pervaiz@example.com', 'Karachi', 'divorce', 'I am an experienced family law attorney with a passion for helping individuals navigate through challenging personal situations.', 'uploads/673ed438b9afc3.25392506.jpg', 1),
(31, 29, 'Hassan Ali', 'hassan@gmail.com', 'Karachi', 'affidavit', 'Hassan Ali is a seasoned legal professional specializing in corporate and tax law. ', 'uploads/673ed93835e529.81493718.png', 1),
(32, 30, 'Maria Hassan', 'maria.hassan@example.com', 'Karachi', 'affidavit', 'Maria Hassan is a dedicated and skilled lawyer with over 8 years of experience in family law and civil litigation.', 'uploads/673ed9c54bab87.07471128.jpg', 1),
(33, 31, 'Bilal Aslam', 'bilal.aslam@example.com', 'Karachi', 'affidavit', 'Bilal Aslam is a skilled attorney focusing on intellectual property and contract law. ', 'uploads/673eda42633b92.38913958.jpg', 1),
(34, 32, 'Rabia Khan', 'rabia.khan@example.com', 'Karachi', 'affidavit', 'Rabia is an accomplished lawyer specializing in family law and dispute resolution.', 'uploads/673edacde37735.42598130.jpg', 1),
(35, 33, 'Kashif Hanif', 'kashif.hanif@example.com', 'Karachi', 'civil', 'Kashif Hanif is a skilled corporate lawyer with expertise in contract law and business litigation. ', 'uploads/673edc5c8fb4e5.44313139.jpg', 1),
(36, 34, 'Zainab Rauf', 'zainab.rauf@example.com', 'Karachi', 'civil', 'Experienced civil lawyer specializing in family law and contract disputes.', 'uploads/673ede16aaba81.21335512.jpg', 1),
(37, 35, 'Asim Akram', 'asim.akram@example.com', 'Karachi', 'civil', 'Dedicated lawyer with expertise in civil cases, focusing on property and personal injury.', 'uploads/673ede51cb3dd1.90008465.jpg', 0),
(38, 36, 'Hina Khan', 'hina.khan@example.com', 'Karachi', 'civil', 'Skilled in handling complex civil litigation cases, including contracts and land disputes.', 'uploads/673ede8c765a12.58060508.jpg', 1),
(39, 76, 'Faiza Malik', 'faiza.malik@example.com', 'Lahore', 'criminal', 'Specializes in white-collar crimes and fraud.', 'uploads/674006c65a04a4.22793990.jpg', 1),
(40, 77, 'Adnan Tariq', 'adnan.tariq@example.com', 'Lahore', 'criminal', 'Handles serious criminal cases with expertise.', 'uploads/6740070bbeddd4.55740754.jpg', 1),
(41, 78, 'Saba Jamil', 'saba.jamil@example.com', 'Lahore', 'criminal', 'Focused on family-related criminal cases.', 'uploads/6740075ba2c0d7.99516875.jpg', 1),
(42, 79, 'Noman Sheikh', 'noman.sheikh@example.com', 'Lahore', 'criminal', 'Expert in property-related criminal disputes.', 'uploads/67400786870bb8.81383698.jpg', 1),
(43, 80, 'Zainab Rauf', 'zainab.rauf@example.com', 'Lahore', 'divorce', 'Experienced in family and divorce settlements.', 'uploads/674007c02dd9a3.12334411.jpg', 1),
(44, 81, 'Hassan Raza', 'hassan.raza@example.com', 'Lahore', 'divorce', 'Specializes in alimony and child custody.', 'uploads/67400901c834a6.40796228.jpg', 1),
(45, 82, 'Ayesha Khalid', 'ayesha.khalid@example.com', 'Lahore', 'divorce', 'Focused on prenuptial agreements and disputes.', 'uploads/674009310aa496.68740733.webp', 1),
(46, 83, 'Arsalan Bashir', 'arsalan.bashir@example.com', 'Lahore', 'divorce', 'Handles contested divorce cases efficiently.', 'uploads/67400963b476d3.29329486.jpg', 1),
(47, 84, 'Mariam Khan', 'mariam.khan@example.com', 'Lahore', 'affidavit', 'Specialist in notarized affidavits for legal use.', 'uploads/67400994add2d9.36827503.jpg', 1),
(48, 85, 'Umair Ahmed', 'umair.ahmed@example.com', 'Lahore', 'affidavit', 'Experienced in drafting visa-related affidavits.', 'uploads/67400a28b97526.33244112.jpg', 1),
(49, 86, 'Sana Javed', 'sana.javed@example.com', 'Lahore', 'affidavit', 'Focused on property and inheritance affidavits.', 'uploads/67400a45b71ab1.83033469.jpg', 1),
(50, 87, 'Imran Qureshi', 'imran.qureshi@example.com', 'Lahore', 'affidavit', 'Skilled in preparing power of attorney documents.', 'uploads/67400a61b6d271.98005676.webp', 1),
(51, 88, 'Ali Raza', 'ali.raza@example.com', 'Lahore', 'civil', 'Handles landlord-tenant disputes efficiently.', 'uploads/67400a77b1a7c2.10158284.jpg', 1),
(52, 89, 'Sarah Tariq', 'sarah.tariq@example.com', 'Lahore', 'civil', 'Experienced in constitutional law and public cases.', 'uploads/67400b1610f122.77147838.jpg', 1),
(53, 90, 'Hiba Saeed', 'hiba.saeed@example.com', 'Lahore', 'civil', 'Specializes in personal injury and tort law.', 'uploads/67400b581bd828.81760353.jpg', 1),
(54, 91, 'Owais Khan', 'owais.khan@example.com', 'Lahore', 'civil', 'Focused on corporate and contract law.', 'uploads/67400b93d6c247.68673872.jpg', 1),
(55, 92, 'Uzma Malik', 'uzma.malik@example.com', 'Islamabad', 'criminal', 'Handles sensitive criminal cases with discretion.', 'uploads/67400bb2b43ca3.99915358.jpg', 1),
(56, 93, 'Faisal Khan', 'faisal.khan@example.com', 'Islamabad', 'criminal', 'Specializes in white-collar crimes.', 'uploads/67400bc8e0a5c2.54325498.jpg', 1),
(57, 94, 'Rida Tariq', 'rida.tariq@example.com', 'Islamabad', 'criminal', 'Focused on drug-related offenses.', 'uploads/67400cb55824c6.47965699.jpg', 1),
(58, 95, 'Shahid Qureshi', 'shahid.qureshi@example.com', 'Islamabad', 'criminal', 'Expert in criminal litigation.', 'uploads/67400cda0c3964.61602538.jpg', 1),
(59, 96, 'Sami Javed', 'sami.javed@example.com', 'Islamabad', 'divorce', 'Experienced in family court cases.', 'uploads/67400cf2e12c33.56406680.jpg', 1),
(60, 97, 'Mehwish Iqbal', 'mehwish.iqbal@example.com', 'Islamabad', 'divorce', 'Skilled in handling child custody disputes.', 'uploads/67400d0fd612c4.00676906.webp', 1),
(61, 98, 'Ahmad Raza', 'ahmad.raza@example.com', 'Islamabad', 'divorce', 'Specializes in prenuptial agreements.', 'uploads/67400d2677c5f8.38416554.jpg', 1),
(62, 99, 'Nadia Ahmed', 'nadia.ahmed@example.com', 'Islamabad', 'divorce', 'Focused on amicable divorce settlements.', 'uploads/67400e879d7496.47993548.jpg', 1),
(63, 100, 'Waleed Aslam', 'waleed.aslam@example.com', 'Islamabad', 'affidavit', 'Expert in drafting legal affidavits.', 'uploads/67400ea222efb2.37476304.jpg', 1),
(64, 101, 'Kiran Riaz', 'kiran.riaz@example.com', 'Islamabad', 'affidavit', 'Specialized in immigration affidavits.', 'uploads/67400eb7c523c2.06559031.jpg', 1),
(65, 102, 'Hammad Malik', 'hammad.malik@example.com', 'Islamabad', 'affidavit', 'Experienced in legal declarations for inheritance.', 'uploads/67400ed779dc73.58385827.jpg', 1),
(66, 103, 'Anam Sheikh', 'anam.sheikh@example.com', 'Islamabad', 'affidavit', 'Focused on power of attorney cases.', 'uploads/67400efc94b939.40859943.jpg', 1),
(67, 104, 'Saad Ahmed', 'saad.ahmed@example.com', 'Islamabad', 'civil', 'Handles real estate and land disputes.', 'uploads/67400f10516273.80143057.jpg', 1),
(68, 105, 'Zainab Fatima', 'zainab.fatima@example.com', 'Islamabad', 'civil', 'Specialist in public litigation cases.', 'uploads/67400f2e9ac8e0.87582370.jpg', 1),
(69, 106, 'Faraz Khan', 'faraz.khan@example.com', 'Islamabad', 'civil', 'Focused on personal injury and contract disputes.', 'uploads/67400f43de3de9.13009789.jpg', 1),
(70, 107, 'Nazia Tariq', 'nazia.tariq@example.com', 'Islamabad', 'civil', 'Experienced in tenant and property disputes.', 'uploads/67401031b30a80.74207822.jpg', 1),
(71, 108, 'Naveed Anwar', 'naveed.anwar@example.com', 'Rawalpindi', 'criminal', 'Specialist in fraud cases and white-collar crime.', 'uploads/6740108a0284a5.98161094.jpg', 1),
(72, 109, 'Asma Tariq', 'asma.tariq@example.com', 'Rawalpindi', 'criminal', 'Focused on juvenile crime litigation.', 'uploads/674010a74f7855.18674588.jpg', 1),
(73, 110, 'Raza Malik', 'raza.malik@example.com', 'Rawalpindi', 'criminal', 'Experienced in serious criminal defense.', 'uploads/674010c41c2b27.84537448.jpg', 1),
(74, 111, 'Tariq Hussain', 'tariq.hussain@example.com', 'Rawalpindi', 'criminal', 'Handles high-profile criminal cases.', 'uploads/674010ea132640.73457700.jpg', 1),
(75, 112, 'Mahrukh Saeed', 'mahrukh.saeed@example.com', 'Rawalpindi', 'divorce', 'Specialist in divorce and family court mediation.', 'uploads/67401118c29c49.72128818.jpg', 1),
(76, 113, 'Hamza Rafiq', 'hamza.rafiq@example.com', 'Rawalpindi', 'divorce', 'Experienced in child custody battles.', 'uploads/67401136e1b560.24812079.jpg', 1),
(77, 114, 'Lubna Iqbal', 'lubna.iqbal@example.com', 'Rawalpindi', 'divorce', 'Focused on alimony and property division.', 'uploads/67401149c22b84.90045039.jpg', 1),
(78, 115, 'Ahmed Sheikh', 'ahmed.sheikh@example.com', 'Rawalpindi', 'divorce', 'Handles amicable divorce settlements.', 'uploads/67401242dbac89.12782164.jpg', 1),
(79, 116, 'Rafay Khan', 'rafay.khan@example.com', 'Rawalpindi', 'affidavit', 'Experienced in notarized affidavits for court cases.', 'uploads/6740125a1f5719.03579245.jpg', 1),
(80, 117, 'Sumaira Malik', 'sumaira.malik@example.com', 'Rawalpindi', 'affidavit', 'Specializes in property and visa affidavits.', 'uploads/6740126dc1a248.12866919.jpg', 1),
(81, 118, 'Nabeel Riaz', 'nabeel.riaz@example.com', 'Rawalpindi', 'affidavit', 'Focused on inheritance and family affidavits.', 'uploads/6740128542f895.93180353.jpg', 1),
(82, 119, 'Huma Tariq', 'huma.tariq@example.com', 'Rawalpindi', 'affidavit', 'Skilled in drafting power of attorney documents.', 'uploads/67401299b76781.54223396.jpg', 1),
(83, 120, 'Yasir Khan', 'yasir.khan@example.com', 'Rawalpindi', 'civil', 'Specialist in tenant-landlord disputes.', 'uploads/674012b0ab8530.00739420.jpg', 1),
(84, 121, 'Rania Ahmed', 'rania.ahmed@example.com', 'Rawalpindi', 'civil', 'Experienced in contract and tort law.', 'uploads/674012c3e28719.27489406.jpg', 1),
(85, 122, 'Sohail Tariq', 'sohail.tariq@example.com', 'Rawalpindi', 'civil', 'Focused on constitutional law and public interest litigation.', 'uploads/674012d4bcd3f5.27291947.jpg', 1),
(86, 123, 'Hina Malik', 'hina.malik@example.com', 'Rawalpindi', 'civil', 'Handles land disputes and corporate law cases.', 'uploads/674012ee7de155.91964242.jpg', 1),
(87, 124, 'Adil Khan', 'adil.khan@example.com', 'Peshawar', 'criminal', 'Specialist in organized crime cases.', 'uploads/674013069d8990.78238839.jpg', 1),
(88, 125, 'Sadaf Ali', 'sadaf.ali@example.com', 'Peshawar', 'criminal', 'Expert in handling high-profile criminal cases.', 'uploads/674013188a6038.88513283.jpg', 1),
(89, 126, 'Nabeel Tariq', 'nabeel.tariq@example.com', 'Peshawar', 'criminal', 'Focused on drug and fraud-related offenses.', 'uploads/6740141f8c5114.64626837.jpg', 1),
(90, 127, 'Kiran Ahmed', 'kiran.ahmed@example.com', 'Peshawar', 'criminal', 'Handles juvenile and theft cases.', 'uploads/6740143ecd7a86.11762850.jpg', 1),
(91, 128, 'Marium Raza', 'marium.raza@example.com', 'Peshawar', 'divorce', 'Experienced in family court settlements.', 'uploads/67401452ab5b27.58783301.jpg', 1),
(92, 129, 'Shahid Malik', 'shahid.malik@example.com', 'Peshawar', 'divorce', 'Specialist in custody and alimony cases.', 'uploads/67401467b40cb7.62427202.jpg', 1),
(93, 130, 'Rukhsar Fatima', 'rukhsar.fatima@example.com', 'Peshawar', 'divorce', 'Focused on property division during divorce.', 'uploads/67401480c62e97.12083494.jpg', 1),
(94, 131, 'Adeel Bashir', 'adeel.bashir@example.com', 'Peshawar', 'divorce', 'Handles contested and cross-border divorce cases.', 'uploads/67401499c26bb6.87553157.jpg', 1),
(95, 132, 'Farhan Asif', 'farhan.asif@example.com', 'Peshawar', 'affidavit', 'Expert in notarized affidavits.', 'uploads/674014bca90ac7.83188673.jpg', 1),
(96, 133, 'Iqra Javed', 'iqra.javed@example.com', 'Peshawar', 'affidavit', 'Specialist in property-related affidavits.', 'uploads/674014d5434c43.33064738.jpg', 1),
(97, 134, 'Noman Saeed', 'noman.saeed@example.com', 'Peshawar', 'affidavit', 'Focused on immigration and visa affidavits.', 'uploads/674014ea849115.00882160.jpg', 1),
(98, 135, 'Saira Tariq', 'saira.tariq@example.com', 'Peshawar', 'affidavit', 'Handles court-related legal declarations.', 'uploads/67401619bb1bd8.14996361.jpg', 1),
(99, 136, 'Osman Qureshi', 'osman.qureshi@example.com', 'Peshawar', 'civil', 'Handles landlord-tenant disputes.', 'uploads/674016389ab029.58240011.jpg', 1),
(100, 137, 'Amna Shah', 'amna.shah@example.com', 'Peshawar', 'civil', 'Specialist in corporate and contract disputes.', 'uploads/6740164d147c49.25371832.jpg', 1),
(101, 138, 'Fahad Ahmed', 'fahad.ahmed@example.com', 'Peshawar', 'civil', 'Focused on constitutional law cases.', 'uploads/67401663580e90.01598534.jpg', 1),
(102, 139, 'Nida Malik', 'nida.malik@example.com', 'Peshawar', 'civil', 'Experienced in personal injury claims.', 'uploads/6740167e7beaf7.77938214.jpg', 1),
(103, 140, 'Shahbaz Khan', 'shahbaz.khan@example.com', 'Quetta', 'criminal', 'Specializes in drug-related crimes.', 'uploads/67401694ae0c26.03748378.jpg', 1),
(104, 141, 'Faisal Malik', 'faisal.malik@example.com', 'Quetta', 'criminal', 'Handles theft and burglary cases.', 'uploads/674016a920cea5.91718572.png', 1),
(105, 142, 'Hina Tariq', 'hina.tariq@example.com', 'Quetta', 'criminal', 'Focused on family-related criminal disputes.', 'uploads/674016bc20cf42.24791370.jpg', 1),
(106, 143, 'Zeeshan Ahmed', 'zeeshan.ahmed@example.com', 'Quetta', 'criminal', 'Expert in white-collar crimes.', 'uploads/674016cf8f7e64.13437086.jpg', 1),
(107, 144, 'Aisha Malik', 'aisha.malik@example.com', 'Quetta', 'divorce', 'Experienced in child custody disputes.', 'uploads/674016e4d289d3.33897796.jpg', 1),
(108, 145, 'Fawad Jamil', 'fawad.jamil@example.com', 'Quetta', 'divorce', 'Specialist in property division.', 'uploads/674017088af555.04688329.jpg', 1),
(109, 146, 'Nimra Khan', 'nimra.khan@example.com', 'Quetta', 'divorce', 'Focused on amicable divorce settlements.', 'uploads/6740171e00d393.28433528.jpg', 1),
(110, 147, 'Sohail Tariq', 'sohail.tariq@example.com', 'Quetta', 'divorce', 'Handles contested divorce cases.', 'uploads/6740198eb1a615.12771541.jpg', 1),
(111, 148, 'Waqar Ali', 'waqar.ali@example.com', 'Quetta', 'affidavit', 'Expert in notarized affidavits.', 'uploads/674019a1db53b9.89200544.jpg', 1),
(112, 149, 'Anam Fatima', 'anam.fatima@example.com', 'Quetta', 'affidavit', 'Specialist in visa-related affidavits.', 'uploads/674019b22402e6.97846549.jpg', 1),
(113, 150, 'Ali Qureshi', 'ali.qureshi@example.com', 'Quetta', 'affidavit', 'Focused on inheritance declarations.', 'uploads/674019c3dc59b4.59247498.jpg', 1),
(114, 151, 'Lubna Tariq', 'lubna.tariq@example.com', 'Quetta', 'affidavit', 'Handles legal declarations for business purposes.', 'uploads/674019d7f17e45.07907357.jpg', 1),
(115, 152, 'Hassan Shah', 'hassan.shah@example.com', 'Quetta', 'civil', 'Specialist in corporate law.', 'uploads/674019ec8c9c51.65737345.jpg', 1),
(116, 153, 'Rida Ahmed', 'rida.ahmed@example.com', 'Quetta', 'civil', 'Experienced in tenant disputes.', 'uploads/674019fe6985c9.48895755.jpg', 1),
(117, 154, 'Adnan Saeed', 'adnan.saeed@example.com', 'Quetta', 'civil', 'Focused on public interest litigation.', 'uploads/67401a1054b6e9.91799049.jpg', 1),
(118, 155, 'Maria Khan', 'maria.khan@example.com', 'Quetta', 'civil', 'Handles real estate and land disputes.', 'uploads/67401a26a40cc4.75382355.jpg', 1),
(119, 156, 'Ahmad Raza', 'ahmad.raza@example.com', 'Faisalabad', 'criminal', 'Expert in fraud and theft cases.', 'uploads/67401abf37dc32.96520882.jpg', 1),
(120, 157, 'Faiza Malik', 'faiza.malik@example.com', 'Faisalabad', 'criminal', 'Handles juvenile crimes.', 'uploads/67401ad0bb5c91.55087499.jpg', 1),
(121, 158, 'Usman Tariq', 'usman.tariq@example.com', 'Faisalabad', 'criminal', 'Focused on white-collar crimes.', 'uploads/67401ae6b544d0.25826973.jpg', 1),
(122, 159, 'Sami Ahmed', 'sami.ahmed@example.com', 'Faisalabad', 'criminal', 'Experienced in organized crime litigation.', 'uploads/67401af8a29f68.17401606.jpg', 1),
(123, 160, 'Nazia Tariq', 'nazia.tariq@example.com', 'Faisalabad', 'divorce', 'Specialist in family court settlements.', 'uploads/67401b09f269c9.15133474.jpg', 1),
(124, 161, 'Raza Malik', 'raza.malik@example.com', 'Faisalabad', 'divorce', 'Handles alimony and child custody.', 'uploads/67401b1e3dbb95.67545955.jpg', 1),
(125, 162, 'Sarah Javed', 'sarah.javed@example.com', 'Faisalabad', 'divorce', 'Focused on property disputes during divorce.', 'uploads/67401b32227815.56802696.jpg', 1),
(126, 163, 'Ali Saeed', 'ali.saeed@example.com', 'Faisalabad', 'divorce', 'Experienced in amicable divorce cases.', 'uploads/67401d1fb15533.23812318.jpg', 1),
(127, 164, 'Hiba Rafiq', 'hiba.rafiq@example.com', 'Faisalabad', 'affidavit', 'Expert in immigration affidavits.', 'uploads/67401d320580a8.56772923.jpg', 1),
(128, 165, 'Tariq Khan', 'tariq.khan@example.com', 'Faisalabad', 'affidavit', 'Specialist in property-related affidavits.', 'uploads/67401d48606073.35922196.jpg', 1),
(129, 166, 'Rania Malik', 'rania.malik@example.com', 'Faisalabad', 'affidavit', 'Focused on visa and business affidavits.', 'uploads/67401d5ae5aba1.01830582.jpg', 1),
(130, 167, 'Asif Ahmed', 'asif.ahmed@example.com', 'Faisalabad', 'affidavit', 'Handles court-related legal declarations.', 'uploads/67401d7048ba92.32756896.jpg', 1),
(131, 168, 'Sana Ahmed', 'sana.ahmed@example.com', 'Faisalabad', 'civil', 'Specialist in tenant disputes.', 'uploads/67401d85d11df7.99237049.jpg', 1),
(132, 169, 'Noman Malik', 'noman.malik@example.com', 'Faisalabad', 'civil', 'Experienced in contract law.', 'uploads/67401d9833c158.30247215.jpg', 1),
(133, 170, 'Ayesha Khan', 'ayesha.khan@example.com', 'Faisalabad', 'civil', 'Focused on personal injury claims.', 'uploads/67401dadbf92d2.27530701.jpg', 1),
(134, 171, 'Zafar Iqbal', 'zafar.iqbal@example.com', 'Faisalabad', 'civil', 'Handles land and real estate disputes.', 'uploads/67401dd1a4f7c9.03947966.jpg', 1),
(135, 236, 'Hamza Malik', 'hamza.malik@example.com', 'Multan', 'criminal', 'Experienced in organized crime litigation.', 'uploads/67401de3c96d70.62271155.jpg', 1),
(136, 237, 'Ali Nawaz', 'ali.nawaz@example.com', 'Multan', 'criminal', 'Handles fraud and theft cases.', 'uploads/67401df8914800.71152808.jpg', 1),
(137, 238, 'Aqsa Raza', 'aqsa.raza@example.com', 'Multan', 'criminal', 'Focused on juvenile crime cases.', 'uploads/67401e098e8e48.33634727.jpg', 1),
(138, 239, 'Raza Khan', 'raza.khan@example.com', 'Multan', 'criminal', 'Specialist in white-collar crimes.', 'uploads/67401e1c343cd2.72800668.webp', 1),
(139, 240, 'Hina Malik', 'hina.malik@example.com', 'Multan', 'divorce', 'Expert in child custody settlements.', 'uploads/67401e328fd096.34828436.jpg', 1),
(140, 241, 'Sana Tariq', 'sana.tariq@example.com', 'Multan', 'divorce', 'Specialist in alimony disputes.', 'uploads/67401e43440018.12293329.jpg', 1),
(141, 242, 'Adeel Ahmed', 'adeel.ahmed@example.com', 'Multan', 'divorce', 'Focused on contested divorces.', 'uploads/67401e5eb7f313.90038160.jpeg', 1),
(142, 243, 'Kashif Aslam', 'kashif.aslam@example.com', 'Multan', 'divorce', 'Handles amicable divorce cases.', 'uploads/67401e70d58289.45186162.jpg', 1),
(143, 244, 'Nida Asghar', 'nida.asghar@example.com', 'Multan', 'affidavit', 'Expert in immigration affidavits.', 'uploads/67401e89270f73.79261190.jpg', 1),
(144, 245, 'Saad Qureshi', 'saad.qureshi@example.com', 'Multan', 'affidavit', 'Specialist in business-related affidavits.', 'uploads/67401e9e9ac160.86181003.jpg', 1),
(145, 246, 'Anam Ali', 'anam.ali@example.com', 'Multan', 'affidavit', 'Focused on property declarations.', 'uploads/67401edfb9ed17.85971565.jpg', 1),
(146, 247, 'Tariq Hussain', 'tariq.hussain@example.com', 'Multan', 'affidavit', 'Handles court-related legal affidavits.', 'uploads/67402224e58281.95387864.jpg', 1),
(147, 248, 'Sohail Iqbal', 'sohail.iqbal@example.com', 'Multan', 'civil', 'Expert in contract law disputes.', 'uploads/67402237cab0d5.43500242.webp', 1),
(148, 249, 'Rabia Ahmed', 'rabia.ahmed@example.com', 'Multan', 'civil', 'Handles landlord-tenant disagreements.', 'uploads/67402249cf1db8.21826462.jpg', 1),
(149, 250, 'Zain Raza', 'zain.raza@example.com', 'Multan', 'civil', 'Focused on public interest cases.', 'uploads/67402259014760.45096734.jpg', 1),
(150, 251, 'Iqra Malik', 'iqra.malik@example.com', 'Multan', 'civil', 'Specialist in real estate disputes.', 'uploads/6740226905ed39.53068207.jpg', 1),
(151, 252, 'Farhan Ali', 'farhan.ali@example.com', 'Gujranwala', 'criminal', 'Experienced in high-profile criminal cases.', 'uploads/67402280688ef8.59495358.jpg', 1),
(152, 253, 'Saima Tariq', 'saima.tariq@example.com', 'Gujranwala', 'criminal', 'Handles theft and burglary offenses.', 'uploads/6740229d0f0070.27288101.jpg', 1),
(153, 254, 'Nabeel Qasim', 'nabeel.qasim@example.com', 'Gujranwala', 'criminal', 'Focused on drug-related crimes.', 'uploads/674022b19da896.13302649.jpg', 1),
(154, 255, 'Ayesha Khan', 'ayesha.khan@example.com', 'Gujranwala', 'criminal', 'Specialist in fraud cases.', 'uploads/674022c97fe861.79903690.jpg', 1),
(155, 256, 'Zafar Malik', 'zafar.malik@example.com', 'Gujranwala', 'divorce', 'Expert in contested divorces.', 'uploads/674022f07cb159.36765084.jpg', 1),
(156, 257, 'Hiba Aslam', 'hiba.aslam@example.com', 'Gujranwala', 'divorce', 'Handles child custody disputes.', 'uploads/6740230857ef16.47372919.jpg', 1),
(157, 258, 'Omer Farooq', 'omer.farooq@example.com', 'Gujranwala', 'divorce', 'Focused on amicable settlements.', 'uploads/67402319903bf7.09600827.jpg', 1),
(158, 259, 'Maham Iqbal', 'maham.iqbal@example.com', 'Gujranwala', 'divorce', 'Specialist in property-related divorces.', 'uploads/6740232a87d558.44802092.jpg', 1),
(159, 260, 'Anwar Javed', 'anwar.javed@example.com', 'Gujranwala', 'affidavit', 'Expert in visa affidavits.', 'uploads/67402340a748d1.66611760.jpg', 1),
(160, 261, 'Sadaf Tariq', 'sadaf.tariq@example.com', 'Gujranwala', 'affidavit', 'Specialist in inheritance declarations.', 'uploads/6740235b6b5033.59242785.jpg', 1),
(161, 262, 'Amir Saeed', 'amir.saeed@example.com', 'Gujranwala', 'affidavit', 'Focused on notarized affidavits.', 'uploads/67402375547043.18001848.jpg', 1),
(162, 263, 'Lubna Riaz', 'lubna.riaz@example.com', 'Gujranwala', 'affidavit', 'Handles business affidavits.', 'uploads/67402396088d35.19554266.jpg', 1),
(163, 264, 'Usama Tariq', 'usama.tariq@example.com', 'Gujranwala', 'civil', 'Expert in public interest litigation.', 'uploads/674023a8e59ea0.60498538.jpg', 1),
(164, 265, 'Saira Ahmed', 'saira.ahmed@example.com', 'Gujranwala', 'civil', 'Handles contract law disputes.', 'uploads/674023cd8dbc16.45166137.jpg', 1),
(165, 266, 'Ahmed Qureshi', 'ahmed.qureshi@example.com', 'Gujranwala', 'civil', 'Specialist in tenant-related cases.', 'uploads/674025d68f88f8.90519377.webp', 1),
(166, 267, 'Razia Fatima', 'razia.fatima@example.com', 'Gujranwala', 'civil', 'Focused on constitutional law.', 'uploads/674025ec2cdc07.15744230.jpg', 1),
(167, 268, 'Omer Malik', 'omer.malik@example.com', 'Sialkot', 'criminal', 'Experienced in theft and burglary cases.', 'uploads/674025fe25e928.89065536.jpg', 1),
(168, 269, 'Aiman Tariq', 'aiman.tariq@example.com', 'Sialkot', 'criminal', 'Handles organized crime litigation.', 'uploads/674026110838d6.74238839.jpg', 1),
(169, 270, 'Farooq Ahmed', 'farooq.ahmed@example.com', 'Sialkot', 'criminal', 'Focused on juvenile crimes.', 'uploads/67402621445065.53239954.jpg', 1),
(170, 271, 'Hassan Nawaz', 'hassan.nawaz@example.com', 'Sialkot', 'criminal', 'Specialist in drug-related offenses.', 'uploads/67402630c896a7.07729875.jpg', 1),
(171, 272, 'Areeba Saeed', 'areeba.saeed@example.com', 'Sialkot', 'divorce', 'Handles contested divorce cases.', 'uploads/6740264a045866.51827154.jpg', 1),
(172, 273, 'Bilal Qadir', 'bilal.qadir@example.com', 'Sialkot', 'divorce', 'Specialist in family disputes.', 'uploads/6740268cbccc86.15301023.jpg', 1),
(173, 274, 'Madiha Khan', 'madiha.khan@example.com', 'Sialkot', 'divorce', 'Focused on property division during divorce.', 'uploads/674026a444d681.00101518.jpg', 1),
(174, 275, 'Shahid Malik', 'shahid.malik@example.com', 'Sialkot', 'divorce', 'Handles amicable settlements.', 'uploads/674026b87820b6.17231437.jpg', 1),
(175, 276, 'Nimra Ahmed', 'nimra.ahmed@example.com', 'Sialkot', 'affidavit', 'Specialist in immigration affidavits.', 'uploads/674026ce40d814.30918103.jpg', 1),
(176, 277, 'Imran Farooq', 'imran.farooq@example.com', 'Sialkot', 'affidavit', 'Expert in notarized declarations.', 'uploads/674026de3a7c34.24076981.jpg', 1),
(177, 278, 'Khalid Saeed', 'khalid.saeed@example.com', 'Sialkot', 'affidavit', 'Handles property-related affidavits.', 'uploads/674026ee80a2e0.60413117.jpg', 1),
(178, 279, 'Nazia Qureshi', 'nazia.qureshi@example.com', 'Sialkot', 'affidavit', 'Focused on visa-related declarations.', 'uploads/67402700929ac6.63723324.jpg', 1),
(179, 280, 'Zahid Malik', 'zahid.malik@example.com', 'Sialkot', 'civil', 'Expert in constitutional law cases.', 'uploads/6740271098d4c3.92852490.jpg', 1),
(180, 281, 'Maria Ahmed', 'maria.ahmed@example.com', 'Sialkot', 'civil', 'Handles landlord-tenant disputes.', 'uploads/67402724551c05.25571934.jpg', 1),
(181, 282, 'Kamran Tariq', 'kamran.tariq@example.com', 'Sialkot', 'civil', 'Focused on contract litigation.', 'uploads/674027392237c5.86376441.jpg', 1),
(182, 283, 'Anam Iqbal', 'anam.iqbal@example.com', 'Sialkot', 'civil', 'Specialist in public interest cases.', 'uploads/6740274e7c8910.75473273.jpg', 1),
(183, 300, 'Rashid Akram', 'rashid.akram@example.com', 'Bahawalpur', 'criminal', 'Expert in organized crime cases.', 'uploads/67402760033f83.47302782.jpg', 1),
(184, 301, 'Ahsan Tariq', 'ahsan.tariq@example.com', 'Bahawalpur', 'criminal', 'Handles fraud and theft cases.', 'uploads/674027761414b0.47560325.jpg', 1),
(185, 302, 'Ayesha Malik', 'ayesha.malik@example.com', 'Bahawalpur', 'criminal', 'Focused on juvenile crimes.', 'uploads/67402ae42dc7f4.99217719.jpg', 1),
(186, 303, 'Imran Qadir', 'imran.qadir@example.com', 'Bahawalpur', 'criminal', 'Specialist in drug-related offenses.', 'uploads/67402afbc99fd0.76416790.jpg', 1),
(187, 304, 'Sadia Iqbal', 'sadia.iqbal@example.com', 'Bahawalpur', 'divorce', 'Handles contested divorce cases.', 'uploads/67402b0c547072.71909107.jpg', 1),
(188, 305, 'Hamza Tariq', 'hamza.tariq@example.com', 'Bahawalpur', 'divorce', 'Expert in child custody settlements.', 'uploads/67402b20239a99.30192799.jpg', 1),
(189, 306, 'Rida Khan', 'rida.khan@example.com', 'Bahawalpur', 'divorce', 'Focused on amicable divorces.', 'uploads/67402b3034c8b2.46859481.jpg', 1),
(190, 307, 'Hassan Malik', 'hassan.malik@example.com', 'Bahawalpur', 'divorce', 'Handles alimony disputes.', 'uploads/67402b434a11e4.06969301.jpg', 1),
(191, 308, 'Zainab Saeed', 'zainab.saeed@example.com', 'Bahawalpur', 'affidavit', 'Expert in business-related affidavits.', 'uploads/67402b56f28531.58349841.jpg', 1),
(192, 309, 'Nabeel Riaz', 'nabeel.riaz@example.com', 'Bahawalpur', 'affidavit', 'Specialist in immigration affidavits.', 'uploads/67402b6b481c02.97519308.jpg', 1),
(193, 310, 'Sahar Ahmed', 'sahar.ahmed@example.com', 'Bahawalpur', 'affidavit', 'Handles court-related affidavits.', 'uploads/67402b7f004c53.27958323.jpg', 1),
(194, 311, 'Tariq Qureshi', 'tariq.qureshi@example.com', 'Bahawalpur', 'affidavit', 'Focused on property declarations.', 'uploads/67402b953e7672.67026082.jpg', 1),
(195, 312, 'Mubashir Khan', 'mubashir.khan@example.com', 'Bahawalpur', 'civil', 'Specialist in contract law disputes.', 'uploads/67402baaa10880.66937485.jpg', 1),
(196, 313, 'Amna Tariq', 'amna.tariq@example.com', 'Bahawalpur', 'civil', 'Handles landlord-tenant cases.', 'uploads/67402bbe476f39.16361434.jpg', 1),
(197, 314, 'Kamran Ahmed', 'kamran.ahmed@example.com', 'Bahawalpur', 'civil', 'Focused on public interest cases.', 'uploads/67402bd2951d68.52736318.jpg', 1),
(198, 315, 'Hiba Qadir', 'hiba.qadir@example.com', 'Bahawalpur', 'civil', 'Expert in real estate litigation.', 'uploads/67402be69a3f98.36688356.webp', 1),
(199, 540, 'Fahad Ali', 'fahad.ali@example.com', 'Sukkur', 'criminal', 'Experienced in high-profile criminal cases.', 'uploads/6741639bc494c0.85195416.jpg', 1),
(200, 541, 'Nida Malik', 'nida.malik@example.com', 'Sukkur', 'criminal', 'Handles burglary offenses.', 'uploads/674163aa967389.21782143.jpg', 1),
(201, 542, 'Omar Aslam', 'omar.aslam@example.com', 'Sukkur', 'criminal', 'Specialist in juvenile crimes.', 'uploads/674163ba11ce87.82098930.jpg', 1),
(202, 543, 'Iqbal Riaz', 'iqbal.riaz@example.com', 'Sukkur', 'criminal', 'Focused on drug-related cases.', 'uploads/674163c9a34e40.46456855.jpg', 1),
(203, 544, 'Mariam Qureshi', 'mariam.qureshi@example.com', 'Sukkur', 'divorce', 'Expert in family law disputes.', 'uploads/674163da972f90.64281274.jpg', 1),
(204, 545, 'Ahmed Raza', 'ahmed.raza@example.com', 'Sukkur', 'divorce', 'Handles child custody disputes.', 'uploads/674163eb8962d3.86465319.jpg', 1),
(205, 546, 'Sara Qadir', 'sara.qadir@example.com', 'Sukkur', 'divorce', 'Specialist in amicable divorces.', 'uploads/674163fe472fd8.92092169.jpg', 1),
(206, 547, 'Farhan Malik', 'farhan.malik@example.com', 'Sukkur', 'divorce', 'Focused on alimony disputes.', 'uploads/6741640da762f7.58317681.jpg', 1),
(207, 548, 'Arif Khan', 'arif.khan@example.com', 'Sukkur', 'affidavit', 'Expert in notarized affidavits.', 'uploads/6741641ac10630.78377736.jpg', 1),
(208, 549, 'Kiran Tariq', 'kiran.tariq@example.com', 'Sukkur', 'affidavit', 'Handles visa-related affidavits.', 'uploads/67416428f20081.27754839.jpg', 1),
(209, 550, 'Usman Ahmed', 'usman.ahmed@example.com', 'Sukkur', 'affidavit', 'Specialist in property declarations.', 'uploads/6741643f4565a8.85203719.jpg', 1),
(210, 551, 'Rabia Qadir', 'rabia.qadir@example.com', 'Sukkur', 'affidavit', 'Focused on inheritance affidavits.', 'uploads/67416454ccf724.47446370.jpg', 1),
(211, 552, 'Hassan Qazi', 'hassan.qazi@example.com', 'Sukkur', 'civil', 'Expert in constitutional law.', 'uploads/6741646557b957.23814310.jpg', 1),
(212, 553, 'Nimra Malik', 'nimra.malik@example.com', 'Sukkur', 'civil', 'Handles tenant-landlord disputes.', 'uploads/67416499eb4c82.57891853.jpg', 1),
(213, 554, 'Fiza Riaz', 'fiza.riaz@example.com', 'Sukkur', 'civil', 'Specialist in contract litigation.', 'uploads/674164ab316ac1.07783422.jpg', 1),
(214, 555, 'Zahid Ahmed', 'zahid.ahmed@example.com', 'Sukkur', 'civil', 'Focused on public interest cases.', 'uploads/674164ba8a2758.02853729.jpg', 1),
(215, 332, 'Yasir Malik', 'yasir.malik@example.com', 'Hyderabad', 'criminal', 'Expert in fraud cases.', 'uploads/67402bfc280442.82512459.jpg', 1),
(216, 333, 'Saad Khan', 'saad.khan@example.com', 'Hyderabad', 'criminal', 'Handles theft and burglary crimes.', 'uploads/67402c10ecfc66.52449685.jpg', 1),
(217, 334, 'Sana Ahmed', 'sana.ahmed@example.com', 'Hyderabad', 'criminal', 'Specialist in juvenile cases.', 'uploads/67402c2782fd82.27684565.jpg', 1),
(218, 335, 'Zain Riaz', 'zain.riaz@example.com', 'Hyderabad', 'criminal', 'Focused on drug-related offenses.', 'uploads/67402c3939e037.52481092.jpg', 1),
(219, 336, 'Areeba Qureshi', 'areeba.qureshi@example.com', 'Hyderabad', 'divorce', 'Expert in family disputes.', 'uploads/67402c4cb7bb45.54301479.jpg', 1),
(220, 337, 'Ibrahim Qadir', 'ibrahim.qadir@example.com', 'Hyderabad', 'divorce', 'Handles alimony and child custody.', 'uploads/67402c62f3caf2.02484750.jpg', 1),
(221, 338, 'Fahima Tariq', 'fahima.tariq@example.com', 'Hyderabad', 'divorce', 'Specialist in contested divorces.', 'uploads/67402f80264ca7.06772357.jpg', 1),
(222, 339, 'Waleed Ahmed', 'waleed.ahmed@example.com', 'Hyderabad', 'divorce', 'Focused on amicable settlements.', 'uploads/67402f925d5601.86791385.jpg', 1),
(223, 340, 'Ayesha Khan', 'ayesha.khan@example.com', 'Hyderabad', 'affidavit', 'Expert in visa affidavits.', 'uploads/67402fc996c0f8.78829783.jpg', 1),
(224, 341, 'Faraz Riaz', 'faraz.riaz@example.com', 'Hyderabad', 'affidavit', 'Handles notarized declarations.', 'uploads/67402fdb23cf95.49401268.jpg', 1),
(225, 342, 'Lubna Malik', 'lubna.malik@example.com', 'Hyderabad', 'affidavit', 'Specialist in business affidavits.', 'uploads/67402fee501751.16035463.jpg', 1),
(226, 343, 'Nadeem Qazi', 'nadeem.qazi@example.com', 'Hyderabad', 'affidavit', 'Focused on inheritance affidavits.', 'uploads/674030005c3578.42737033.jpg', 1),
(227, 344, 'Imran Tariq', 'imran.tariq@example.com', 'Hyderabad', 'civil', 'Specialist in real estate litigation.', 'uploads/67403012c8cbe9.89275207.jpg', 1),
(228, 345, 'Uzma Riaz', 'uzma.riaz@example.com', 'Hyderabad', 'civil', 'Handles contract disputes.', 'uploads/67403027825c91.89136005.jpg', 1),
(229, 346, 'Kashif Malik', 'kashif.malik@example.com', 'Hyderabad', 'civil', 'Focused on public interest cases.', 'uploads/6740303c296423.60103983.jpg', 1),
(230, 347, 'Fatima Qadir', 'fatima.qadir@example.com', 'Hyderabad', 'civil', 'Expert in landlord-tenant issues.', 'uploads/6740305d890384.03987527.jpg', 1),
(231, 492, 'Sajid Ali', 'sajid.ali@example.com', 'Murree', 'criminal', 'Expert in fraud and theft cases.', 'uploads/674030706e55a7.92720713.jpg', 1),
(232, 493, 'Nida Raza', 'nida.raza@example.com', 'Murree', 'criminal', 'Specialist in drug-related offenses.', 'uploads/6740309d7447c9.98859346.jpg', 1),
(233, 494, 'Rehan Tariq', 'rehan.tariq@example.com', 'Murree', 'criminal', 'Handles juvenile crimes.', 'uploads/674030ae241f70.97849347.jpg', 1),
(234, 495, 'Ayesha Zafar', 'ayesha.zafar@example.com', 'Murree', 'criminal', 'Experienced in organized crime cases.', 'uploads/674030c0922b15.17975306.jpg', 1),
(235, 496, 'Hina Saeed', 'hina.saeed@example.com', 'Murree', 'divorce', 'Handles contested divorces and child custody.', 'uploads/674030d22f58a1.18109703.jpg', 1),
(236, 497, 'Faisal Malik', 'faisal.malik@example.com', 'Murree', 'divorce', 'Specialist in amicable divorce settlements.', 'uploads/674030e80dc8d5.69806416.jpg', 1),
(237, 498, 'Rohail Riaz', 'rohail.riaz@example.com', 'Murree', 'divorce', 'Focused on alimony disputes.', 'uploads/674030f8595d70.36552782.jpg', 1),
(238, 499, 'Sadia Tariq', 'sadia.tariq@example.com', 'Murree', 'divorce', 'Expert in divorce and family law.', 'uploads/6740310c18e9a0.76994966.jpg', 1),
(239, 500, 'Rashid Qadir', 'rashid.qadir@example.com', 'Murree', 'affidavit', 'Handles visa-related affidavits.', 'uploads/6740311d2fcf35.09133280.jpg', 1),
(240, 501, 'Imran Saeed', 'imran.saeed@example.com', 'Murree', 'affidavit', 'Expert in business and property affidavits.', 'uploads/67415c355993a9.08538890.jpg', 1),
(241, 502, 'Sara Ali', 'sara.ali@example.com', 'Murree', 'affidavit', 'Specialist in court affidavits.', 'uploads/67415c45c8e506.67241024.jpg', 1),
(242, 503, 'Zainab Khan', 'zainab.khan@example.com', 'Murree', 'affidavit', 'Focused on immigration and legal affidavits.', 'uploads/67415c64d5c1f7.66183928.webp', 1),
(243, 504, 'Muneeb Raza', 'muneeb.raza@example.com', 'Murree', 'civil', 'Expert in landlord-tenant disputes.', 'uploads/67415c79273592.74369350.jpg', 1),
(244, 505, 'Anum Tariq', 'anum.tariq@example.com', 'Murree', 'civil', 'Handles contract and property disputes.', 'uploads/67415c8fefc110.01147332.jpg', 1),
(245, 506, 'Shahnaz Ali', 'shahnaz.ali@example.com', 'Murree', 'civil', 'Specialist in real estate litigation.', 'uploads/67415caca37f98.43638411.webp', 1),
(246, 507, 'Zain Qadir', 'zain.qadir@example.com', 'Murree', 'civil', 'Focused on constitutional law cases.', 'uploads/67415cc53f7448.02575393.jpg', 1),
(247, 508, 'Omar Malik', 'omar.malik@example.com', 'Sargodha', 'criminal', 'Handles drug and theft-related crimes.', 'uploads/67415cddabc927.30001878.jpg', 1),
(248, 509, 'Noreen Iqbal', 'noreen.iqbal@example.com', 'Sargodha', 'criminal', 'Expert in juvenile crime cases.', 'uploads/67415cff9554a5.41116231.jpg', 1),
(249, 510, 'Fahad Tariq', 'fahad.tariq@example.com', 'Sargodha', 'criminal', 'Specialist in fraud and corruption cases.', 'uploads/67415d1ba907f9.83483671.jpg', 1),
(250, 511, 'Adeel Ali', 'adeel.ali@example.com', 'Sargodha', 'criminal', 'Focused on violent crime cases.', 'uploads/67415d33ddfb73.22724253.jpg', 1),
(251, 512, 'Ahsan Riaz', 'ahsan.riaz@example.com', 'Sargodha', 'divorce', 'Handles family law and contested divorce cases.', 'uploads/67415d4bb298d0.44284248.jpg', 1),
(252, 513, 'Zeenat Iqbal', 'zeenat.iqbal@example.com', 'Sargodha', 'divorce', 'Expert in amicable divorce settlements.', 'uploads/67415d5d7b22d5.46427284.webp', 1),
(253, 514, 'Amina Malik', 'amina.malik@example.com', 'Sargodha', 'divorce', 'Specialist in alimony and child custody.', 'uploads/67415d73495d20.86171835.webp', 1),
(254, 515, 'Jameel Qadir', 'jameel.qadir@example.com', 'Sargodha', 'divorce', 'Focused on divorce negotiations.', 'uploads/67415d8ca86875.27292640.jpg', 1),
(255, 516, 'Shazia Ahmed', 'shazia.ahmed@example.com', 'Sargodha', 'affidavit', 'Handles business and notarized affidavits.', 'uploads/67415dc7641c85.81219006.jpg', 1),
(256, 517, 'Feroze Khan', 'feroze.khan@example.com', 'Sargodha', 'affidavit', 'Expert in immigration and legal affidavits.', 'uploads/67415df39fe0d0.50182146.jpeg', 1),
(257, 518, 'Khalid Tariq', 'khalid.tariq@example.com', 'Sargodha', 'affidavit', 'Specialist in property and inheritance affidavits.', 'uploads/67415e0589a9d4.08890223.jpg', 1),
(258, 519, 'Reema Qureshi', 'reema.qureshi@example.com', 'Sargodha', 'affidavit', 'Focused on court-related affidavits.', 'uploads/67415e169dcb50.64153678.jpg', 1),
(259, 520, 'Kashif Zafar', 'kashif.zafar@example.com', 'Sargodha', 'civil', 'Specialist in constitutional and civil rights law.', 'uploads/6741608b7917f6.36689353.jpg', 1),
(260, 521, 'Hassan Iqbal', 'hassan.iqbal@example.com', 'Sargodha', 'civil', 'Handles contract and property disputes.', 'uploads/6741609aed67d6.43601977.jpg', 1),
(261, 522, 'Amina Khan', 'amina.khan@example.com', 'Sargodha', 'civil', 'Focused on tenant-landlord disputes.', 'uploads/674160abb54df7.74677855.jpg', 1),
(262, 523, 'Shoaib Riaz', 'shoaib.riaz@example.com', 'Sargodha', 'civil', 'Expert in real estate litigation.', 'uploads/674160bb8eecc2.93923245.jpg', 1),
(263, 524, 'Waseem Akram', 'waseem.akram@example.com', 'Mardan', 'criminal', 'Expert in serious crime investigations.', 'uploads/674160ce1a8c27.55817315.jpg', 1),
(264, 525, 'Muzammil Tariq', 'muzammil.tariq@example.com', 'Mardan', 'criminal', 'Specialist in financial crime cases.', 'uploads/674160ddf29ea3.25277874.jpg', 1),
(265, 526, 'Kashif Ali', 'kashif.ali@example.com', 'Mardan', 'criminal', 'Focused on violent and property crimes.', 'uploads/674160f02be3d5.37227358.jpg', 1),
(266, 527, 'Sami Khan', 'sami.khan@example.com', 'Mardan', 'criminal', 'Handles fraud and theft offenses.', 'uploads/674160fea8ae66.53667143.jpg', 1),
(267, 528, 'Amna Tariq', 'amna.tariq@example.com', 'Mardan', 'divorce', 'Focused on contested divorce cases.', 'uploads/674161105c8544.06030191.jpg', 1),
(268, 529, 'Hassan Ali', 'hassan.ali@example.com', 'Mardan', 'divorce', 'Expert in amicable divorce settlements.', 'uploads/67416122839f17.98964694.jpg', 1),
(269, 530, 'Nazia Riaz', 'nazira.riaz@example.com', 'Mardan', 'divorce', 'Handles child custody and alimony disputes.', 'uploads/674161517a2b88.11261994.jpg', 1),
(270, 531, 'Kiran Khan', 'kiran.khan@example.com', 'Mardan', 'divorce', 'Specialist in family law and divorce settlements.', 'uploads/6741616482c725.22815806.jpg', 1),
(271, 532, 'Sana Iqbal', 'sana.iqbal@example.com', 'Mardan', 'affidavit', 'Handles business and immigration affidavits.', 'uploads/6741618c96a779.35967996.jpg', 1),
(272, 533, 'Kashan Tariq', 'kashan.tariq@example.com', 'Mardan', 'affidavit', 'Specialist in property-related affidavits.', 'uploads/674161a56bd072.14267986.jpg', 1),
(273, 534, 'Maya Qadir', 'maya.qadir@example.com', 'Mardan', 'affidavit', 'Focused on inheritance and legal affidavits.', 'uploads/674161bac182b6.39946795.webp', 1),
(274, 535, 'Bilal Malik', 'bilal.malik@example.com', 'Mardan', 'affidavit', 'Expert in notarized affidavits.', 'uploads/674161ce3046e5.07594831.webp', 1),
(275, 536, 'Omar Qureshi', 'omar.qureshi@example.com', 'Mardan', 'civil', 'Specialist in civil rights and contract disputes.', 'uploads/674161e107da61.86601941.jpg', 1),
(276, 537, 'Ayesha Zafar', 'ayesha.zafar@example.com', 'Mardan', 'civil', 'Handles real estate and property disputes.', 'uploads/674161f5d144d0.93155452.jpg', 1),
(277, 538, 'Tariq Akram', 'tariq.akram@example.com', 'Mardan', 'civil', 'Focused on constitutional and public law cases.', 'uploads/6741620dc3bda6.92315433.jpg', 1),
(278, 539, 'Fariha Riaz', 'fariha.riaz@example.com', 'Mardan', 'civil', 'Expert in family and inheritance law.', 'uploads/67416231027392.23460971.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `lawyers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
