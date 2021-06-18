-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 11:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addjob`
--

CREATE TABLE `addjob` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(100) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `fl_pa_time` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teleNo` varchar(25) NOT NULL,
  `salary` double NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `comp_type` varchar(100) NOT NULL,
  `jobDescription` longtext NOT NULL,
  `jobRequirment` longtext NOT NULL,
  `website` text NOT NULL,
  `image` longtext NOT NULL,
  `sponsored` int(1) NOT NULL,
  `viewsNo` int(11) NOT NULL,
  `review` int(1) NOT NULL DEFAULT 0,
  `userID` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addjob`
--

INSERT INTO `addjob` (`jobID`, `jobTitle`, `companyName`, `category`, `fl_pa_time`, `email`, `teleNo`, `salary`, `address`, `city`, `comp_type`, `jobDescription`, `jobRequirment`, `website`, `image`, `sponsored`, `viewsNo`, `review`, `userID`) VALUES
(14, 'Full Stack .NET/Backend Developer\r\n', 'Fanarsoft \r\n\r\n', 'IT/Telecom sector', 'Full Time', 'fanarsoft@gmail.com', '+9722271111111', 3000, '', ' Ramallah', 'Private Sector', 'FanarSoft is a leading software development firm based in Ramallah and Nablus, which provides an advanced SaaS solution for over 11 years. \r\n\r\nFanarSoft is the founder of the global Leading freight forwarding management software \"Logitude World.\" Logitude is a state of art Freight Forwarding SaaS solution used in more than 80 countries worldwide. (www.logitudeworld.com), Fanar has multidisciplinary SCRUM teams that manage all the lifecycle of the product. ', '1.Strong knowledge in \r\n2.ASP.net Web API. \r\n3.ASP.NET. \r\n4.Entity Framework. \r\n5.SQL Server and Database designing. \r\n6.Proven Experience with Agile Development Process Methodologies. \r\n7.Excellent self-management skills. \r\n8.Excellent communication, problem-solving skills. \r\n9.Proficiency in English ( oral and written ).', 'https://www.logitudeworld.com', 'https://cdnjobs.net/cached_uploads/fit/130/130/2019/06/19/capture-png-1560934840.png', 1, 12, 1, 20),
(18, 'Biomedical Sales Engineer', 'Techno-line Medical and Lab equipment', 'Health /Alternative Medicine / Medical Sector', 'Full Time', 'Techno-line@gmail.com', '0595981266', 4500, 'Hizma', 'Jerusalem, Ramallah', 'Private Sector\r\n', 'About the Role:\r\n\r\nTechno-Line is a Medical and Laboratory Equipment Company looking for a Biomedical Sales Engineer to join our team in providing our customers the appropriate solutions by configuring and pricing our available line of medical equipment products, maintaining good customer relations and developing procedures to achieve customer satisfaction.', 'Qualifications:\r\n\r\n-  BSc degree Biomedical Engineering\r\n-  One to three years’ experience in medical equipment sales and marketing is preferable\r\n-  Excellent language skills in both English and Arabic; reading, writing and reporting skills\r\n-  Patience and self-motivation\r\n-  Eager to learn and develop\r\n-  Strong teamwork and networking skills\r\n-  Good knowledge of computer (MS Office and AutoCAD)\r\n-  Excellent communication & interpersonal skills, integrity and ability to work with complex       teams\r\n-  Ability to work under pressure and meet tight deadlines with minimum supervision\r\n-  Commitment to providing quality results and services.\r\n-  Flexible to travel\r\n-  Driving license', 'https://www.facebook.com/technolinepalestine', 'https://cdnjobs.net/cached_uploads/fit/130/130/2018/03/03/techno-line-logo-png-1520077827.png', 1, 11, 1, 20),
(19, 'React-Engineer(Angular)', 'Asal Technology', '1IT/Telecom sector', 'Part Time', 'asal@gmail.com', '0598404570', 4000, 'ein sara', 'Hebron', 'Public Company', 'We are looking to hire an experienced AngularJS Developer to join our dynamic team. As a lead Developer, you will be responsible for creating a top-level coding-base using Angular best practices. Your role will require you to implement an exciting and streamlined user experience in the form of a Java-based desktop and mobile web-app.\r\n\r\nTo ensure success as an AngularJS Developer, you should have extensive knowledge of theoretical software engineering, be proficient in JavaScript, HTML, and CSS, and have excellent project management skills. Ultimately, a top-class AngularJS Developer can design and build a streamlined application to company specifications that perfectly meet the needs of the user.', 'Bachelor’s Degree in Computer Science, Computer Engineering or similar.\r\n\r\n\r\n\r\n\r\n\r\nExperience in JS (experience in AngularJS is a plus), CSS, HTML, and writing cross-browser compatible code.\r\n\r\nExperience implementing back-end (C# or JAVA) applications.\r\nExcellent communication skills.\r\n\r\nCritical thinker and good problem-solver.', 'https://www.asaltech.com/', 'https://cdnjobs.net/cached_uploads/crop2/700/350/2017/09/01/asal-logo-1504253825.jpeg', 1, 17, 1, 21),
(28, 'Quality Assurance Specialist', 'Innotech for Programming and Technology', '1IT/Telecom sector', 'full_time', 'innotech@gmail.com', '0987651542', 3000, 'Edward Said street', 'Ramallah', 'Private Sector', 'Innotech- for Programming and Technology, a limited liability company located in Ramallah, Palestine; is looking for qualified and motivated people. We invite you to join and be The New Quality Assurance, If you have the experience in Quality Assurance to assist us in creating and maintaining high-quality technology solutions.', 'BS/MS Degree in Computer Science/Engineering or related subject.\r\n3-5 years of proven experience in Quality Assurance.\r\nKnowledge of QA terminology, methods, and tools.\r\nHighly self-driven, responsible, reliable and keen to learn and improve.\r\nMust have strong analytical skills, and an ability to troubleshoot to the root cause of problems.\r\nExperience with performance testing is a plus.\r\nExperience of SQL and C# or any similar OO programming languages such as Java.\r\nExperience with test automation using selenium web driver is a plus.\r\nHave a desire for continuous learning. In particular, interested in learning more about test automation, new testing tools and test strategies.\r\nCommitted to delivering daily high-quality work.\r\nAbility to work with teams and build a high-performance culture.\r\nExcellent written and verbal communication skills -in English- with the ability to present complex technical information in a clear and concise manner to a variety of audiences.\r\nExperience working in an Agile environment.', 'http://innotech.ps', 'http://innotech.ps/assets/img/innotech/Innotech-Logo.png', 1, 10, 1, 21),
(29, 'Product Success Manager', 'FounderTherapy', '1IT/Telecom sector', 'full_time', 'foundertherapy@gmail.com', '056754321', 2500, '', 'Ramallah, Nablus', 'Private Sector', 'The Product Success Manager at FounderTherapy is a new role on the Product team, and will be critical to ensuring we deliver quality products for our clients. The Product Success Manager will work directly with the Product Manager and Engineers on each FT project, and will be responsible for quality assurance, contribute to product specifications, improve analytics tools that enable data-driven product decision-making, and driving each team to follow our established product development process.', '-Experience managing software quality\r\n-Minimum 1 year of experience\r\n-Software engineering experience (preferred, not required)\r\n-Develop, implement, communicate and maintain a Quality Assurance plan\r\nExecute test plans\r\n-Report and follow-up on bugs\r\n-Working closely with the engineering team to ensure code quality', 'http://foundertherapy.co', 'https://cdnjobs.net/cached_uploads/fit/140/140/2018/02/22/foundertherapy-logo-1519289312.png', 1, 15, 1, 21),
(30, 'Mental Health Program Manager', 'MDM France أطباء العالم – فرنسا', 'Health /Alternative Medicine / Medical Sector', 'part_time', 'mdm-me@gmail.com', '07651234', 3500, '', 'Gaza Strip, Jerusalem, Nablus', 'International NGO', 'For more than 30 years, Médecins du Monde, a campaigning medical organization committed to\r\ninternational solidarity, has been caring for the most vulnerable populations at home and abroad. It has continued to highlight obstacles that exist in accessing health care and has secured sustainable improvements in health-for-all policies.', 'Education & Experience\r\n- An advanced degree in clinical psychology, or in any other relevant field (Bachelor Major in\r\nPsychology or Master/Specialization in Clinical psychology)\r\n- Valuable experience in training and supervising social workers and psychologists (at least 3 years)\r\n- Experience of counselling/psychological support/psychotherapy in MHPSS situations with people\r\naffected by conflicts (at least 2 years)\r\n- Experience related to psychosocial/psychological assessment\r\n- Experience in MH Gap and Low Intensity Therapy approaches\r\n- Previous work experience with international organizations\r\n\r\nPersonal skills required\r\n- Strong communication and facilitation skills\r\n- Human Resources management skills\r\n- Technical supervision skills\r\n- Independence, autonomy, and diplomacy\r\n- Ability to work under pressure and tight deadlines\r\n- Excellent writing skills\r\n- Data collection and analysis skills\r\n- Proposal writing and donors reporting skills\r\n- Languages: excellent English (both written and spoken), Arabic is an asset', 'http://mdm-me.org', 'https://cdnjobs.net/cached_uploads/fit/140/140/2017/12/24/mdm-france-logo-1514108433.jpg', 0, 20, 1, 21),
(31, 'Java Developer', 'Transcend Support - ترانسيند للدعم الفني ', '1IT/Telecom sector', 'full_time', 'transcend@gmail.com', '058762345', 2000, '', 'Bethlehem, Hebron, Ramallah ', 'Private Sector', 'The purpose of this position is to serve as a Software Engineer in computer application development. The person holding this position would design, develop, document, unit-test, implement and deploy web-based Java applications to support business requirements. The responsibilities also include documentation, and ongoing application maintenance. The incumbent would also be interpreting specifications and creating system design.', ' Java developer\r\n3+ years of experience\r\n\r\nComputer Skills Required:\r\n\r\nDesign, develop, document, and test the core components of a large Java/Spring enterprise system (web applications, web services, and reusable libraries.)\r\nExperience developing enterprise applications using J2EE/JEE technologies such as Java 8+, Spring, JDBC, Hibernate, Eclipse, Web Services (XML, SOAP/RESTful).\r\nExperience with front-end technologies such as Bootstrap, JQuery, Ajax, HTML5.\r\nKnowledge of AWS cloud computing platform.\r\nFamiliarity with RDBMS and database design and troubleshooting (PL/SQL).\r\nWork with requirements analysts, architects, and integration testers to ensure the quality and integrity of the developed code.', 'http://www.transcend.ps', 'https://cdnjobs.net/cached_uploads/fit/140/140/2017/12/18/transcend-logo-1513606024.png', 1, 38, 1, 20),
(32, 'Executive Office Manager', 'Levant Gulf Human Resources', 'Human Resources / Staffing and Recruiting', 'full_time', 'levant@gmail.com', '0587623355', 3000, '', ' Jerusalem', 'Private Sector', 'He/ She will have the following Essential Duties and Responsibilities:\r\n\r\nMaintain executive’s agenda and assist in planning appointments, meetings, conferences, etc.\r\nReceive and screen phone calls and redirect them when appropriate.\r\nHandle and prioritize all outgoing or incoming correspondence (e-mail, letters, packages, etc.).\r\nMake travel arrangements for the staff.\r\nHandle confidential documents and ensure they remain secure.\r\nPrepare invoices or financial statements and provide assistance in bookkeeping.\r\nMonitor office supplies and negotiate terms with suppliers to ensure the most cost-effective orders.\r\nMaintain electronic and paper records ensuring information is organized and easily accessible.\r\nPerform basic accounting / bookkeeping tasks.', 'Proven experience as office manager, executive secretary or similar administrative role.\r\nIn-depth knowledge of office management and accounting procedures.\r\nExcellent organizational and time-management skills.\r\nOutstanding communication and negotiation abilities.\r\nAbility to work within tight deadlines (meeting deadlines)\r\nIntegrity and confidentiality.\r\nGood command of Microsoft Office and similar tools.\r\nPractical Knowledge in the economic development sector and relevant stakeholders is a big plus.\r\nGood working knowledge in French, and Hebrew, written and spoken is required.', 'http://levantgulfhr.com/', 'https://cdnjobs.net/cached_uploads/fit/140/140/2018/04/05/rgb-fullcolor-01-1522929310.png', 0, 0, 1, 21),
(33, 'Tendering Department Engineer', 'ACT Medical Ltd.', 'Health /Alternative Medicine / Medical Sector', 'part_time', 'act_medical@gmail.com', '', 4500, '', 'Jerusalem', 'Private Sector', 'ACT Medical Company one of the leading and diversified healthcare product supplier is seeking to hire Tendering Department Engineer. \r\n \r\nWe are looking for a talented and outgoing Engineer that can run the tendering department. \r\n \r\nGreat opportunity to work in a fast-growing company, with a team-orientated environment and have a unique product portfolio of innovative concepts.\r\n \r\nThe ideal candidate is a motivated, well-organized individual who has a deep understanding of prospecting and developing strong relationships with customers.', 'BSc in electronics / mechatronics engineering or any other Engineering degree or Business degree.\r\nThe applicant must be a resident of Jerusalem \r\nProficiency in Microsoft Office suite (Outlook, Excel, Word, PowerPoint, etc.) \r\nExcellent written and verbal communication skills in English and Arabic\r\nWorking knowledge in Hebrew is an asset \r\n Team player with a strong work ethic and a can-do attitude', 'http://actmedical.co.il', 'https://cdnjobs.net/cached_uploads/fit/140/140/2018/07/26/323324324324323223-png-1532589392.png', 1, 8, 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `adsID` int(11) NOT NULL,
  `ads_image` text NOT NULL,
  `ads_title` varchar(100) NOT NULL,
  `ads_desc` text NOT NULL,
  `ads_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`adsID`, `ads_image`, `ads_title`, `ads_desc`, `ads_url`) VALUES
(1, 'https://scontent.fjrs1-2.fna.fbcdn.net/v/t1.6435-9/175533919_171443808168866_7044341426353283026_n.png?_nc_cat=104&ccb=1-3&_nc_sid=730e14&_nc_ohc=hnNWifDmZbEAX-LAoXF&_nc_ht=scontent.fjrs1-2.fna&oh=ac15ba9e678a7e24ad2831ec99cf24ca&oe=60C6D771  ', 'لأنك مع الشبكة الأوفر والأقوى في فلسطين', '', 'https://www.jawwal.ps//index.php?url=posts/view/7697  '),
(2, 'https://tpc.googlesyndication.com/simgad/15929057075271503389/downsize_200k_v1?w=600&h=314', 'The number 1 WP Theme of 2021', 'Take Divi for a Free Test Drive and explore the surprising power of the Visual\r\nBuilder.\r\n', 'https://www.elegantthemes.com/gallery/divi/?gclid=EAIaIQobChMInriPmeTM8AIVjFXgCh1FJgAIEAEYASAAEgJzgPD_BwE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job` varchar(255) NOT NULL,
  `teleNo` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'jobSeeker'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `email`, `job`, `teleNo`, `address`, `user_type`) VALUES
(16, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin-12@gmail.com', '', '098761111111', 'halhull', 'admin'),
(18, 'alia', '6ad0550bd56af2cb30934c5239cdb38f', 'alia@gmail.com', 'Manager', '0987654321', 'Hebron', 'jobSeeker'),
(19, 'seeker', 'cb9f81491427f30112d8cd0ec97e97fc', 'seeker@gmail.com', 'Engineer', '0595981266', 'wadi al-haria', 'jobSeeker'),
(20, 'inshirah', '52127e6b36d7e005fd5afd985d91a633', 'inshirah@gmail.com', '', '087654321', 'jerusalem', 'businessOwner'),
(21, 'ranin', 'cd1bb34f963818875430d5f1cfe9e237', 'raninranin007@gmail.com', 'Manager', '09876543', 'Ras al jorah', 'businessOwner'),
(25, 'niveen', 'eaf294c177fa358be827c1484ad3a338', 'programmer', 'niveen106nd@gmail.com', '05958699887', 'Hebron', 'jobSeeker'),
(26, 'banan', 'aec7bd708ed2ad3435b9a9883ac7f45c', 'Scientist', 'banan@gmail.com', '0786543321', 'jerusalem', 'jobSeeker'),
(27, 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'doctor', 'ahmad@gmail.com', '0566123666', 'Ramallah', 'jobSeeker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addjob`
--
ALTER TABLE `addjob`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`adsID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addjob`
--
ALTER TABLE `addjob`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `adsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
