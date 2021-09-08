-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2016 at 12:28 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `full_name`, `phone_no`, `email`, `message`) VALUES
(1, 'Asha Devi', 7890654322, 'asha.devi1990@ymail.com', 'meeting with eyes specalist'),
(2, 'Dr. Sundra Sharma', 8097653432, 'sundrashrma@ymail.com', 'how to search a blood camp location');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_blog`
--

CREATE TABLE IF NOT EXISTS `fitness_blog` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `blog` varchar(5000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fitness_blog`
--

INSERT INTO `fitness_blog` (`sno`, `title`, `image`, `blog`, `date`, `name`) VALUES
(1, 'Stolen Moments Add Up', 'stolen.jpg', 'Experts recommend working out 45 minutes to an hour a day (30 minutes for beginners) for weight loss and fitness. But if you''re like most women, you don''t always have a block of 30 to 60 minutes a day to devote exclusively to doing your workouts.\r\n\r\nLest you think that short bursts of activity have a negligible effect on your fitness program, think again. One study found that women who split their exercise into 10-minute increments were more likely to exercise consistently, and lost more weight after five months, than women who exercised for 20 to 40 minutes at a time.\r\n\r\n\r\n\r\n', '2016-10-27', 'Dr. Sundra Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `hos_reg`
--

CREATE TABLE IF NOT EXISTS `hos_reg` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `hosname` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `number` bigint(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `hos_reg`
--

INSERT INTO `hos_reg` (`id`, `username`, `hosname`, `password`, `image`, `type`, `address`, `city`, `number`, `email`) VALUES
(1, 'amritsar', 'Emergency Medical Care Hospital', 'amritsar', 'amr.jpg', 'Government', 'No. 3426/8, Lahori Gate, Shakti Nagar, Amritsar - 143001', 'Amritsar', 1832549300, 'trainingphp19@gmail.com'),
(2, 'esi', 'ESI Corp., Chheharta', 'esiamritsar', 'esi.gif', 'Government', 'Japani Mills Gate, G.T. Road, Chheharta,Amritsar - 143001', 'Amritsar', 1832258575, 'trainingphp19@gmail.com'),
(3, 'emergency', 'Emergency Medical Care Hospital', '12345', 'emc.gif', 'Government', 'No. B13, Ranjit Avenue, Amritsar - 143001', 'Amritsar', 1836535703, 'trainingphp19@gmail.com'),
(4, 'shoor', 'Shoor Hospital', 'shooramritsar', 'shoor.jpg', 'Government', 'Khazana Gate , Circular Road,Amritsar - 143001', 'Amritsar', 1832527766, 'trainingphp19@gmail.com'),
(5, 'emc', 'EMC Super Speciality Hospital', 'emcamritsar', 'emc.gif', 'Government', 'No. A11, Green Avenue, Amritsar - 143001', 'Amritsar', 1832506053, 'trainingphp19@gmail.com'),
(6, 'pgi', 'PGI', 'pgichandigarh', 'amritsar gov.jpg', 'Government', 'PGI Road, Sector 12, Chandigarh - 160012', 'Chandigarh', 1722755500, 'trainingphp19@gmail.com'),
(7, 'esichd', 'ESI Model Hospital', 'esimodel', 'esi.gif', 'Government', 'Ram Darbar, Industrial Area Phase II, Chandigarh - 160002', 'Chandigarh', 1722650292, 'trainingphp19@gmail.com'),
(8, 'esi29', 'ESI Corp., Sector 29', 'dispensary', 'esi.gif', 'Government', 'ESI Dispensary Complex, Sector 29, Chandigarh - 160030', 'Chandigarh', 1722658650, 'trainingphp19@gmail.com'),
(9, 'medical', 'Government Medical Hospital', 'govmedical', 'bathinda.jpg', 'Government', 'GMCH Sarai Building , Sector 32C, Chandigarh - 160030', 'Chandigarh', 9646121553, 'trainingphp19@gmail.com'),
(10, 'inscol', 'Inscol Hospital', 'inscolgov', 'inscol.jpg', 'Government', 'No. 18-19, Sector 34A, Sector 34, Chandigarh - 160022', 'Chandigarh', 1725088883, 'trainingphp19@gmail.com'),
(11, 'herodmc', 'Hero DMC Heart Institute', 'dmcludhiana', 'herodmc.jpg', 'Government', '1st Floor, Tagore Nagar, Civil Lines, Ludhiana - 141001', 'Ludhiana', 1612304282, 'trainingphp19@gmail.com'),
(12, 'pal', 'Pal Hospital', 'palhospital', 'pal.jpg', 'Government', 'No. 517-R, Atam Nagar, Model Town, Ludhiana - 141002', 'Ludhiana', 9216180527, 'trainingphp19@gmail.com'),
(13, 'rgsuper', 'RG Stone & Super Speciality Hospital', 'stoneldh', 'rg.JPG', 'Government', 'No. L510, Model Town, Ludhiana - 141002', 'Ludhiana', 1614618585, 'trainingphp19@gmail.com'),
(14, 'esildh', 'ESI Corp.', 'esiludhiana', 'esi.gif', 'Government', 'Taran Singh, Hero Nagar, G.T. Road, Ludhiana - 141003', 'Ludhiana', 1612672917, 'trainingphp19@gmail.com'),
(15, 'oswal', 'Mohan Dai Oswal Cancer Hospital', 'oswalldh', 'oswal.jpeg', 'Government', 'No. 45, Sherpur Bypass, G.T. Road, Ludhiana - 141001', 'Ludhiana', 1612676100, 'trainingphp19@gmail.com'),
(16, 'indus', 'Indus Hospital', 'sasindus', 'indus', 'Government', 'SCF 98-99-100, Phase- 3B2, SAS Nagar-160062', 'Mohali', 1725093971, 'trainingphp19@gmail.com'),
(17, 'liberty', 'Liberty Hospital', 'libertysas', 'liberty.jpg', 'Government', '1799-1800,Phase 3 B2,Behind Katani Sweets,Mohali-160059', 'Mohali', 1722273402, 'trainingphp19@gmail.com'),
(18, 'rajindra', 'Rajindra Hospital', 'rajindra', 'patiala.jpg', 'Government', 'Sangrur Road, Patiala, Punjab 147001', 'Patiala', 1752212542, 'trainingphp19@gmail.com'),
(21, 'ivyamr', 'Ivy Hospital', 'ivyamritsar', 'ivyamr.jpg', 'Private', 'Airport Road, Amritsar, Punjab 143101', 'Amritsar', 9988749494, 'trainingphp19@gmail.com'),
(22, 'fortisamr', 'Fortis Escorts Hospital', 'fortisamr', 'Fortis.jpg', 'Private', 'Majitha-Verka Bypass Road, Amritsar, Punjab 143004', 'Amritsar', 9915133330, 'trainingphp19@gmail.com'),
(23, 'lifekare', 'Life Kare Multi Super Speciality Hospital', 'lifekare', 'lifecare.jpg', 'Private', '3, Fatehgarh Churian Rd, Nirankari Colony, Amritsar, Punjab 143001', 'Amritsar', 1832572500, 'trainingphp19@gmail.com'),
(24, 'kdamritsar', 'KD Multi-Speciality Hospital', 'kdamritsar', 'kd.jpeg', 'Private', '7 Circular Road, Near Mental Hospital, Amritsar, Punjab 143001', 'Amritsar', 1835033300, 'trainingphp19@gmail.com'),
(25, 'oxfordchd', 'Oxford Heart And Multispeciality Hospital', 'oxfordchd', 'oxford_hospital.jpg', 'Private', '3314, Near Gurudwara Sahib, Sector 19D, Sector 19, Chandigarh, 160022', 'Chandigarh', 1724646322, 'trainingphp19@gmail.com'),
(26, 'mukat', 'Mukat Hospital & Heart Institute', 'mukat3', 'Mukat.jpg', 'Private', 'S.C.O 47-49, Dakshin Marg, Sector 34A, Chandigarh, 160022', 'Chandigarh', 1724344444, 'trainingphp19@gmail.com'),
(27, 'landmark', 'Landmark Hospital', 'landmark', 'landmark.jpg', 'Private', 'Site No I-II Sector 33-C Near Teerace Garden Sector 23, Chandigarh, 160020', 'Chandigarh', 1724027000, 'trainingphp19@gmail.com'),
(28, 'eden', 'Eden Hospital', 'eden', 'eden.jpg', 'Private', 'Plot No-115 , Phase-1, Industrial Area-1, Chandigarh, 160002', 'Chandigarh', 1724123456, 'trainingphp19@gmail.com'),
(29, 'fortisldh', 'Fortis Hospital', 'fortis', 'fortisludh.jpg', 'Private', 'Chandigarh Road, Mundian Kalan Village, Near Radha Soami Satsang Bhavan, Ludhiana, Punjab 141015', 'Ludhiana', 1615222333, 'trainingphp19@gmail.com'),
(30, 'dayanand', 'Dayanand Medical Colg. & Hospital', 'dayanand', 'DMCH.jpg', 'Private', ' Tagore Nagar, Civil Lines, Near Rose Garden, Ludhiana, Punjab 141001', 'Ludhiana', 1614688800, 'trainingphp19@gmail.com'),
(31, 'sps', 'SPS Hospitals', 'spsludh', 'SPS.jpg', 'Private', 'Grand Trunk Rd, Sherpur Chowk, Sherpur, Ludhiana, Punjab 141001', 'Ludhiana', 8872027036, 'trainingphp19@gmail.com'),
(32, 'oswal2', 'Mohan Dai Oswal Cancer Treatment & Research Foundation', 'oswal', 'oswal.jpeg', 'Private', 'G.T Road, Sherpur, Ludhiana, Punjab 141009', 'Ludhiana', 1612676101, 'trainingphp19@gmail.com'),
(33, 'ivymohali', ' IVY Hospital', 'ivymhl', 'ivyamr.jpg', 'Private', 'Sector 71, Near PCL Chowk, Sahibzada Ajit Singh Nagar, Punjab 160071', 'Mohali', 1727170000, 'trainingphp19@gmail.com'),
(34, 'fortismohali', 'Fortis Hospital Mohali', 'fortis', 'Fortis.jpg', 'Private', 'Sector 62, Phase - VIII, Sahibzada Ajit Singh Nagar, Punjab 160062', 'Mohali', 1724692222, 'trainingphp19@gmail.com'),
(35, 'indussas', 'Indus hospital', 'indus', 'indus', 'Private', 'Sector 61, 2892, Mohali Stadium Rd, Sector 61, Sahibzada Ajit Singh Nagar, Punjab 160047', 'Mohali', 1725093971, 'trainingphp19@gmail.com'),
(36, 'narayan', ' Narayan Hospital', 'narayan', 'narayan.jpg', 'Private', 'National Highway 64, SST Nagar, Patiala, Punjab 147003', 'Patiala', 1752373160, 'trainingphp19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) NOT NULL,
  `reciever` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `reciever`, `message`) VALUES
(1, 'ghh@ghh.vhh', '', 'fgfh'),
(2, 'cvdcv@cjsd.cdh', '', 'csfc'),
(3, 'cvdcv@cjsd.cdh', '', 'dfgh'),
(4, 'train@gmail.com', 'esi', 'ygtiy');

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_blog`
--

CREATE TABLE IF NOT EXISTS `pregnancy_blog` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `blog` varchar(5000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pregnancy_blog`
--

INSERT INTO `pregnancy_blog` (`sno`, `title`, `image`, `blog`, `date`, `name`) VALUES
(1, 'Yoga for Labor', 'yoga_labour.jpg', 'How Yoga Prepares You For Labor: Prenatal yoga addresses the physical challenges inherent to pregnancy, such as a shifted center of gravity and lower back pain. These moves will help alleviate aches and build strength in your legs, back and abdominals to prepare you for giving birth. Yoga also can ease labor and delivery, with moves that relax the hip muscles and use gravity to your advantage. Consider yoga a way to get physically stronger and emotionally healthier during pregnancy. Even if you''ve never done yoga before, the modified moves taught in prenatal yoga are both safe and beneficial to expectant moms. Plus, women with difficult pregnancies may find comfort in yoga''s gentle motions and breathing.\r\n\r\nFitness Buffs: You will find that yoga rivals any other workout in keeping the body toned and flexible, and can be done up to delivery.', '2016-10-26', 'Dr.Mandeep Nagra'),
(3, 'Standing Mountain', 'standing.jpg', 'To warm up your muscles, most yoga sequences start with this pose: Stand with feet farther than hip-width apart, knees slightly bent and toes pointed straight ahead, your palms touching at "heart center" (in front of your chest). Close your eyes and breathe deeply\r\n\r\n[A] . Inhale and sweep your arms out and overhead, bending back slightly (next slide).\r\n[B] Exhale and stand upright, returning your hands to your heart center [A].\r\nRepeat for 10 full breaths.', '2016-10-27', 'Sharnjeet Sharma'),
(4, 'Supported Triangle', 'traingal.jpg', 'Triangle strengthens your entire body. Stand with your feet farther than shoulder-width apart. Face your right toes forward and left toes out. Bend your left leg, placing your left hand on the thigh, eyes looking down (this slide).\r\n\r\n[A]. Inhale, then exhale as you lift your right arm above your shoulder and turn your head, eyes looking up. Place your left arm on your thigh for support (next slide).\r\n\r\n[B].Hold for 1 full breath as you lower your right arm and straighten leg. Return to starting position, then repeat for 5 full breaths.\r\n\r\nReverse feet and repeat sequence on the other side.', '2016-10-28', 'Jaspreet Arora');

-- --------------------------------------------------------

--
-- Table structure for table `register_patient`
--

CREATE TABLE IF NOT EXISTS `register_patient` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register_patient`
--

INSERT INTO `register_patient` (`sno`, `username`, `password`, `dob`, `sex`, `phone_no`, `email`) VALUES
(1, 'Asha Devi', 'ashadevi', '31-12-1999', 'Female', 9087543322, 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `location` varchar(3000) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sno`, `service_type`, `district`, `name`, `address`, `contact`, `location`) VALUES
(1, 'dental', 'Patiala', 'Columbia Asia Hospital', 'Nabha Road, Near Railway Crossing No. 22, Patiala', 1753989896, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.2409531292556!2d76.37683681464472!3d30.34410131131028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028b9647cfc47%3A0xddf8f9271079939c!2sColumbia+Asia+Hospital+-+Patiala!5e0!3m2!1sen!2sin!4v1478147806328" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(2, 'dental', 'Ludhiana', 'Fortis Hospital', 'Village Mundian Kalan, Near Satsang Bhawan, Chandigarh Road', 1615222333, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.9058648272535!2d75.93295641465818!3d30.889294285122173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a8179bb6cc497%3A0x2b4288dfe693927a!2sFortis+Hospital!5e0!3m2!1sen!2sin!4v1478151629617" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(3, 'dental', 'Mohali', 'Fortis Hospital', 'Sec-62, Phase- VIII, Mohali', 1725096222, ''),
(4, 'ent', 'Jalandhar', 'ENT Care &amp; Allergy Centre', '147, Master Tara Singh Nagar,\r\n Jalandhar, Punjab (India)\r\n', 1812234323, ''),
(5, 'ent', 'Jalandhar', 'Kataria Eye &amp; ENT Hospital Pvt. Ltd.', 'Gujral Nagar, Mahavir Marg\r\n\r\n', 1812254699, ''),
(6, 'ent', 'Patiala', 'Simran E.N.T. center', 'Shop No. 2, Singh Sabha Market, Phowara Chowk, Opp Bhagat Singh Petrol Pump, NH64, Patiala, Punjab 147101', 9814503568, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.717722478379!2d76.3869417146007!3d30.330546011956308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028e85b42298b%3A0xa334946e2d252163!2sSimran+E.N.T+Centre!5e0!3m2!1sen!2sin!4v1478929195664" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(7, 'eyes', 'Patiala', 'Patiala Eye Hospital &amp; Lasik Laser Centre', ' Leela Bhawan, Near Gopal Sweets, Patiala, Punjab 147001', 1752213513, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.5498465821797!2d76.38159631460081!3d30.335319611728867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec1ffa16fa7b%3A0xa2c5fbea313bc0a4!2sPatiala+Eye+Hospital+%26+Lasik+Laser+Centre!5e0!3m2!1sen!2sin!4v1478929443545" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(8, 'eyes', 'Patiala', 'Dr Preetinder Singh Eye Hospital', 'Vikas Colony, Rajpura Road, Patiala(Punjab), Punjab ', 1752371761, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.550824309732!2d76.40580831460076!3d30.335291811730144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028f668d295ed%3A0xfb40ebe758440569!2spreet+inder+eye+hospital!5e0!3m2!1sen!2sin!4v1478929594504" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(9, 'heart', 'Jalandhar', 'Tagore Hospital &amp; Heart Care Centre Pvt. Ltd.', ' Banda Bahadur Nagar, Mahavir Marg, Jalandhar, Punjab 144008', 1814685700, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.794358088122!2d75.56107381462616!3d31.337051863307707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5af2e467dd43%3A0x19b51499bc01fdc3!2sTagore+Hospital+%26+Heart+Care+Centre+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1478955354663" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(10, 'heart', 'Mohali', 'Amar Hospital', 'Sector 70, Sahibzada Ajit Singh Nagar, Punjab 160071', 1725037683, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.7761906278038!2d76.71384021460983!3d30.69657259442653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee913ffffffd%3A0x203f6a5f1bd35f0!2sAmar+Hospital!5e0!3m2!1sen!2sin!4v1478955513502" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(11, 'heart', 'Mohali', 'Ivy Multispeciality Hospital and Cancer Research Institute', 'Sector 71, Near PCL Chowk, Sahibzada Ajit Singh Nagar, Punjab 160071', 1727170000, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.4069010632033!2d76.70582951461012!3d30.706959393926464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feef295555555%3A0x678352469edb958e!2sIVY+Hospital!5e0!3m2!1sen!2sin!4v1478955770513" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(12, 'heart', 'Patiala', 'Patiala Heart Institute', '2, Jagdish Marg, Patiala, Punjab 147001', 1752308030, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.6948298001425!2d76.38082261460066!3d30.33119701192522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39101efc6b6c70a1%3A0x273103138b6b6f79!2sPatiala+Heart+Institute!5e0!3m2!1sen!2sin!4v1478955995269" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(13, 'skin', 'Jalandhar', 'Dr Vikram Sood Skin Clinic', '97, Gujral Nagar, Behind TV Center, Near Hotel Regent Park, Jalandhar, Punjab 144001', 1812208142, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.334135026917!2d75.56284301462574!3d31.322144064038422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5af11aaaaaab%3A0xaff9d9ae7cc050eb!2sDr+Vikram+Sood&#39;s+Skin+Clinic!5e0!3m2!1sen!2sin!4v1478956370145" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(14, 'skin', 'Mohali', 'Dr. Walia''s Skin and Laser Clinic', 'HM-127, Sahibzada Ajit Singh 160055, Phase 3B-1, Sector 60, Sahibzada Ajit Singh Nagar, Punjab', 9257221456, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.2085749062476!2d76.71760101461025!3d30.712536293657827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee6ef31bc763%3A0x8b9fa1c10f1a476a!2sDr.+Walia&#39;s+Skin+and+Laser+Clinic!5e0!3m2!1sen!2sin!4v1478956584903" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(15, 'skin', 'Ludhiana', 'Axis Skin Clinic & Laser Centre', '32-A, Doctor''s Lane, Opp. New Krishna Mandir, Model Town Extension, Ludhiana, Punjab 141002', 1612461867, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.1310410693723!2d75.83171191461457!3d30.882994985427263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a824962da86bf%3A0x353887f230de60c8!2sAxis+Skin+Clinic+%26+Laser+Centre!5e0!3m2!1sen!2sin!4v1478956677300" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(16, 'bone', 'Amritsar', 'Dr Hardas Singh Orthopaedic Hospital and Super Speciality Research centre', '882, Circular Road, Beauty Avenue, Amritsar, Punjab 143001', 1832223620, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.239323450391!2d74.87921831463436!3d31.65467154766644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39196366e6560273%3A0xebb11bcebcdc812b!2sDr.+Hardas+Singh+Orthopaedic+Hospital+%26+Superspeciality+Research+Centre!5e0!3m2!1sen!2sin!4v1478956906840" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(17, 'bone', 'Patiala', 'Columbia Asia Hospital', 'Near Phatak, 22 Number Railway Flyover, Patiala, Punjab 147001', 1753989896, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.240953129252!2d76.37683681460095!3d30.344101311310375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028b9647cfc47%3A0xddf8f9271079939c!2sColumbia+Asia+Hospital+-+Patiala!5e0!3m2!1sen!2sin!4v1478957187170" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(18, 'bone', 'Jalandhar', 'Aashirwad Hospital', 'Rama Mandi , Near Nangel Shama Chowk , Jalandhar Cantt, Jalandhar, Punjab ', 1812411458, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27271.117740430876!2d75.59226025912177!3d31.30679307931721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a594745555555%3A0x8c62014d83fae1b3!2sAashirwad+Hospital!5e0!3m2!1sen!2sin!4v1478957295171" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(19, 'bone', 'Mohali', 'Indus Superspeciality Hospital', 'Opp. DC Office, Sector-55, Phase-1, Mohali, Punjab 160055', 1725222000, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.6104801284537!2d76.71974551461062!3d30.729349092847755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feda785d2ec5f%3A0x6301495b4669e0ed!2sIndus+Superspecialty+Hospital+Mohali!5e0!3m2!1sen!2sin!4v1478957385425" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `weight_loss_blog`
--

CREATE TABLE IF NOT EXISTS `weight_loss_blog` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `blog` varchar(5000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `weight_loss_blog`
--

INSERT INTO `weight_loss_blog` (`sno`, `title`, `image`, `blog`, `date`, `name`) VALUES
(3, 'Exercise Daily', 'getty-159628726-johner-images-opener.jpg', 'When you are working out several times a week to get fit and lose weight, you want a routine that offers maximum results in the minimum amount of time. Exercise scientists have been hard at work on this particular issue, and now years of research indicates that the following 8 movesâ€”done properlyâ€”are all you need to achieve the slim, taut body you are after.Get a flat belly in just 10 minutes a day with our reader-tested exercise plan.', '26-10-2016', 'Sharnjeet Sharma'),
(4, 'Cardio', 'shutterstock_417031855-cardio-nenetus.jpg', 'The American College of Sports Medicine reports that you can elevate your metabolism for up to 24 hours post-exercise by adding just one little twist to your exercise routine: intervals. All you have to do is inject brief periods of intense effort into your regular walks (or runs, swims, bicycling, elliptical sessions, etc). The intensity effectively resets your metabolism to a slightly higher rate during your workout, and it takes hours for it to slow down again. That equals ongoing calorie burn long after you have showered and toweled off.\r\n\r\nIf you are a walker and you typically exercise for 30 minutes, try adding a burst of jogging for 30 seconds every 5 minutes. As you become more fit, you can increase the interval length to a minute, and decrease the walking segments to 4 minutes. For the biggest metabolism boost, you will want to make sure that the interval portion leaves you breathing hard.', '2016-10-28', 'Sun fancisco'),
(5, 'Strength', 'shutterstock_220937722-strength-goran-bogicevic.jpg', 'While your heart and other organs demand fuel around the clock, there is little you can do to increase their metabolic needs. However, your musclesâ€”which also require constant feedingâ€”are changeable. Make them bigger, and they will demand more calories day and night. With the following essential moves, adapted from findings by the American College of Sports Medicine, you can target all the major muscle groups in your body. (Here are the 10 best strength-training moves for women over 50.) You should be able to get through the entire routine in less than 30 minutes. Do this 2 to 3 times a week and your muscles will turn into furnaces that burn up extra calories before your body can convert them to fat.', '2016-10-27', 'Dr. Simran Walia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
