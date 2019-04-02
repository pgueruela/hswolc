CREATE DATABASE IF NOT EXISTS `hswolc`;

USE `hswolc`;

SET foreign_key_checks = 0;

DROP TABLE IF EXISTS `admin_tbl`;

CREATE TABLE `admin_tbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `usertype` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO `admin_tbl` VALUES (21,"Test","Test","Nurse","test@gmail.com","$2y$10$YhiWB2wYpMGs500Sqvi4MuoExqOLensugIGRBlDPQnFkXDTCPnSnq"),
(22,"Ryan Jay","Yalung","Nurse","rjyalung@lorma.edu","$2y$10$18S2vBh9SCoG/p6VGbDQZOabcE.4pe1.UvT.S5L0C4uujxawYYLfG"),
(23,"Jeff Hexton","Otero","Nurse","jhotero@lorma.edu","$2y$10$mPaWZ3NPfhXpR2rzdPlcb.brhLjlPFDylA.G692CCLa8oX/LUAWmW");


DROP TABLE IF EXISTS `consultation_tbl`;

CREATE TABLE `consultation_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `medicines` varchar(255) DEFAULT 'N/A',
  `chief_complain` varchar(255) DEFAULT 'N/A',
  `blood_pressure` varchar(255) DEFAULT 'N/A',
  `heart_rate` varchar(255) DEFAULT 'N/A',
  `respiratory_rate` varchar(255) DEFAULT 'N/A',
  `temperature` varchar(255) DEFAULT 'N/A',
  `treatment` varchar(255) DEFAULT 'N/A',
  `quantity` varchar(255) DEFAULT 'N/A',
  `physical_examination` varchar(255) DEFAULT 'N/A',
  `remarks` varchar(255) DEFAULT 'N/A',
  `diagnosis` varchar(255) DEFAULT 'N/A',
  `assesed_by` varchar(255) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  CONSTRAINT `FK_consultation_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `consultation_tbl` VALUES (1,1,"ALAXAN FR","DYSMENORRHEA","","","","","",1,"","ADVISED","","RJY","2019-03-27 12:29:41"),
(2,2,"","HYPERVENTILATION/DIZZINESS","","","","","","","","REFERRED TO ER LMC","Hx. MVR","RJY","2019-03-27 20:28:55"),
(3,3,"PARACETAMOL","TOOTHACHE","","","","","",1,"","ADVISED","","JHCO","2019-03-28 11:50:52"),
(4,4,"PARACETAMOL","HEADACHE","","","","","",1,"","ADVISED","","JHCO","2019-03-29 10:27:44"),
(5,9,"IBUPROFEN","DYSMENORRHEA","","","","","",1,"","ADVISED","","JHCO","2019-03-29 14:09:36"),
(6,9,"ALAXAN FR CAP","MENSTRUAL CRAMP","","","","","",1,"","VISITED THE CLINIC 3-28-19,\r\nPURPOSE THIS DATE: SECURING CLINIC SLIP","","JHCO","2019-03-29 15:33:46"),
(7,12,"ibuprofen","toothache","","","","","",1,"","advised","","JHCO","2019-03-29 16:30:54");


DROP TABLE IF EXISTS `employee_medical_profile`;

CREATE TABLE `employee_medical_profile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) DEFAULT NULL,
  `temperature` varchar(50) DEFAULT NULL,
  `blood_pressure` varchar(50) DEFAULT NULL,
  `patient_weight` float DEFAULT NULL,
  `patient_height` float DEFAULT NULL,
  `bmi` float DEFAULT NULL,
  `medical_history` varchar(255) DEFAULT NULL,
  `past_illness` varchar(255) DEFAULT NULL,
  `hospitalization_history` varchar(255) DEFAULT NULL,
  `currently_taking_drugs` varchar(255) DEFAULT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `why_taking_drugs` varchar(255) DEFAULT NULL,
  `allergies_to_drugs` varchar(255) DEFAULT NULL,
  `name_drug` varchar(255) DEFAULT NULL,
  `family_doctor` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `doctor_add` varchar(255) DEFAULT NULL,
  `doctor_num` varchar(255) DEFAULT NULL,
  `blood_donor` varchar(255) DEFAULT NULL,
  `self_breast_exam` varchar(255) DEFAULT NULL,
  `how_often` varchar(255) DEFAULT NULL,
  `mammography` varchar(255) DEFAULT NULL,
  `pregnant` varchar(255) DEFAULT NULL,
  `month_pregnant` varchar(255) DEFAULT NULL,
  `contraceptives` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `number_pregnancies` int(11) DEFAULT NULL,
  `aborted_pregnancies` varchar(255) DEFAULT NULL,
  `reasons` varchar(255) NOT NULL,
  `assesed_by` varchar(50) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  CONSTRAINT `FK_employee_medical_profile_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO `employee_medical_profile` VALUES (20,14,NULL,"120/70",75,"152.4","32.29","None","None","None","No","","","None","But, Latex powder","None","","","","Yes","None","","N/A","No","","No","",0,"No","","RJY","2019-03-29 17:03:15");


DROP TABLE IF EXISTS `imaging_tbl`;

CREATE TABLE `imaging_tbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL DEFAULT '0',
  `image_name` varchar(255) NOT NULL DEFAULT '0',
  `image_type` varchar(255) NOT NULL DEFAULT '0',
  `image_path` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_medical_cert_tbl_patient_pd_tbl` (`patient_id`),
  CONSTRAINT `imaging_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO `imaging_tbl` VALUES (1,7,"URINARY TRACT INFECTION Table2.jpg","image/jpeg","../photos/URINARY TRACT INFECTION Table2.jpg");


DROP TABLE IF EXISTS `medical_cert_tbl`;

CREATE TABLE `medical_cert_tbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL DEFAULT '0',
  `image_name` varchar(255) NOT NULL DEFAULT '0',
  `image_type` varchar(255) NOT NULL DEFAULT '0',
  `image_path` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_medical_cert_tbl_patient_pd_tbl` (`patient_id`),
  CONSTRAINT `FK_medical_cert_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `medical_lab_tbl`;

CREATE TABLE `medical_lab_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL DEFAULT '0',
  `image_path` varchar(255) NOT NULL DEFAULT '0',
  `image_type` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_medical_lab_certificate_tbl_patient_pd_tbl` (`patient_id`),
  CONSTRAINT `FK_medical_lab_certificate_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

INSERT INTO `medical_lab_tbl` VALUES (1,5,"medprofile.jpeg","../photos/medprofile.jpeg","image/jpeg"),
(2,5,"mp.jpeg","../photos/mp.jpeg","image/jpeg"),
(3,5,"cxr.jpeg","../photos/cxr.jpeg","image/jpeg"),
(4,5,"cxr2016.jpeg","../photos/cxr2016.jpeg","image/jpeg"),
(5,5,"cxr20161.jpeg","../photos/cxr20161.jpeg","image/jpeg"),
(6,5,"cxr2017.jpeg","../photos/cxr2017.jpeg","image/jpeg"),
(7,5,"lab2016p1.jpeg","../photos/lab2016p1.jpeg","image/jpeg"),
(8,5,"lab2016p2.jpeg","../photos/lab2016p2.jpeg","image/jpeg"),
(9,5,"pa.jpeg","../photos/pa.jpeg","image/jpeg"),
(10,5,"lab2009.jpeg","../photos/lab2009.jpeg","image/jpeg"),
(11,5,"cxr2009.jpeg","../photos/cxr2009.jpeg","image/jpeg"),
(12,5,"lab2007.jpeg","../photos/lab2007.jpeg","image/jpeg"),
(13,5,"pe2007.jpeg","../photos/pe2007.jpeg","image/jpeg"),
(14,5,"cxr2007.jpeg","../photos/cxr2007.jpeg","image/jpeg"),
(15,5,"pe2004.jpeg","../photos/pe2004.jpeg","image/jpeg"),
(16,5,"lab2006.jpeg","../photos/lab2006.jpeg","image/jpeg"),
(17,5,"cxr2006.jpeg","../photos/cxr2006.jpeg","image/jpeg"),
(18,5,"pe2006.jpeg","../photos/pe2006.jpeg","image/jpeg"),
(19,5,"pe2003.jpeg","../photos/pe2003.jpeg","image/jpeg"),
(20,5,"cxr2003.jpeg","../photos/cxr2003.jpeg","image/jpeg"),
(21,6,"LAB2012.jpeg","../photos/LAB2012.jpeg","image/jpeg"),
(22,6,"CXR2012.jpeg","../photos/CXR2012.jpeg","image/jpeg"),
(23,6,"XRAY2012.jpeg","../photos/XRAY2012.jpeg",""),
(24,6,"MEDPROF BACK.jpeg","../photos/MEDPROF BACK.jpeg","image/jpeg"),
(25,6,"LABRES 2007.jpeg","../photos/LABRES 2007.jpeg","image/jpeg"),
(26,6,"CXR 2007.jpeg","../photos/CXR 2007.jpeg","image/jpeg"),
(27,6,"P.E  F.jpeg","../photos/P.E  F.jpeg","image/jpeg"),
(28,6,"P.E P.jpeg","../photos/P.E P.jpeg","image/jpeg"),
(29,6,"LAB 2008.jpeg","../photos/LAB 2008.jpeg","image/jpeg"),
(30,6,"CXR 2008.jpeg","../photos/CXR 2008.jpeg","image/jpeg"),
(31,6,"LAB 2011.jpeg","../photos/LAB 2011.jpeg","image/jpeg"),
(32,6,"CXR 2011.jpeg","../photos/CXR 2011.jpeg","image/jpeg"),
(33,6,"PE 2010.jpeg","../photos/PE 2010.jpeg","image/jpeg"),
(34,6,"LAB 2010.jpeg","../photos/LAB 2010.jpeg","image/jpeg"),
(35,6,"CXR2010.jpeg","../photos/CXR2010.jpeg","image/jpeg"),
(36,7,"P.E 2018.jpeg","../photos/P.E 2018.jpeg","image/jpeg"),
(37,7,"LAB 2018.jpeg","../photos/LAB 2018.jpeg","image/jpeg"),
(38,7,"LAB 2018 1.jpeg","../photos/LAB 2018 1.jpeg","image/jpeg"),
(39,7,"CXR 2018.jpeg","../photos/CXR 2018.jpeg","image/jpeg"),
(40,7,"CXR 2018 2.jpeg","../photos/CXR 2018 2.jpeg",""),
(41,7,"LAB 2013.jpeg","../photos/LAB 2013.jpeg","image/jpeg"),
(42,7,"CXR 2013.jpeg","../photos/CXR 2013.jpeg","image/jpeg"),
(43,7,"CXR 2013 2.jpeg","../photos/CXR 2013 2.jpeg",""),
(44,7,"CHEST PA 2007.jpeg","../photos/CHEST PA 2007.jpeg","image/jpeg"),
(45,7,"CHEST PA 2006.jpeg","../photos/CHEST PA 2006.jpeg","image/jpeg"),
(46,7,"LAB 2007.jpeg","../photos/LAB 2007.jpeg","image/jpeg"),
(47,7,"LAB 2007 2.jpeg","../photos/LAB 2007 2.jpeg","image/jpeg"),
(48,7,"P E 1011.jpeg","../photos/P E 1011.jpeg","image/jpeg"),
(49,7,"LAB 2006.jpeg","../photos/LAB 2006.jpeg","image/jpeg"),
(50,7,"PE 2006.jpeg","../photos/PE 2006.jpeg","image/jpeg"),
(51,8,"LAB2014.jpeg","../photos/LAB2014.jpeg","image/jpeg"),
(52,8,"CXR2014.jpeg","../photos/CXR2014.jpeg","image/jpeg"),
(53,8,"LAB2014P2.jpeg","../photos/LAB2014P2.jpeg","image/jpeg"),
(54,8,"LAB2014P3.jpeg","../photos/LAB2014P3.jpeg","image/jpeg"),
(55,8,"ECG2014.jpeg","../photos/ECG2014.jpeg","image/jpeg"),
(56,8,"ECG2014P2.jpeg","../photos/ECG2014P2.jpeg","image/jpeg"),
(57,8,"LAB2009.jpeg","../photos/LAB2009.jpeg","image/jpeg"),
(58,8,"ECG2009.jpeg","../photos/ECG2009.jpeg","image/jpeg"),
(59,8,"ECG2009P2.jpeg","../photos/ECG2009P2.jpeg","image/jpeg"),
(60,8,"LAB2010.jpeg","../photos/LAB2010.jpeg","image/jpeg"),
(61,8,"CXR2010.jpeg","../photos/CXR2010.jpeg","image/jpeg"),
(62,8,"ECG2010.jpeg","../photos/ECG2010.jpeg","image/jpeg"),
(63,8,"ECG10P2.jpeg","../photos/ECG10P2.jpeg","image/jpeg"),
(64,8,"LAB2008.jpeg","../photos/LAB2008.jpeg","image/jpeg"),
(65,8,"ECG2008.jpeg","../photos/ECG2008.jpeg","image/jpeg"),
(66,8,"ECG2008P2.jpeg","../photos/ECG2008P2.jpeg","image/jpeg"),
(67,8,"CXR2008.jpeg","../photos/CXR2008.jpeg","image/jpeg"),
(68,8,"LAB2007.jpeg","../photos/LAB2007.jpeg","image/jpeg"),
(69,8,"PE2007.jpeg","../photos/PE2007.jpeg","image/jpeg"),
(70,8,"CXR2007.jpeg","../photos/CXR2007.jpeg","image/jpeg"),
(71,8,"ECG2007.jpeg","../photos/ECG2007.jpeg","image/jpeg"),
(72,8,"ECG2007P2.jpeg","../photos/ECG2007P2.jpeg","image/jpeg"),
(73,8,"LAB2005.jpeg","../photos/LAB2005.jpeg","image/jpeg"),
(74,8,"LAB2006.jpeg","../photos/LAB2006.jpeg","image/jpeg"),
(75,8,"CXR2006.jpeg","../photos/CXR2006.jpeg","image/jpeg"),
(76,8,"ECG2006.jpeg","../photos/ECG2006.jpeg","image/jpeg"),
(77,8,"ECG2006P2.jpeg","../photos/ECG2006P2.jpeg","image/jpeg"),
(78,8,"PE2006.jpeg","../photos/PE2006.jpeg","image/jpeg"),
(79,8,"PE2005.jpeg","../photos/PE2005.jpeg","image/jpeg"),
(80,8,"ECG19.jpeg","../photos/ECG19.jpeg","image/jpeg"),
(81,8,"ECG19P2.jpeg","../photos/ECG19P2.jpeg","image/jpeg"),
(82,8,"CXR2005.jpeg","../photos/CXR2005.jpeg","image/jpeg"),
(83,8,"MEDPROF.jpeg","../photos/MEDPROF.jpeg","image/jpeg"),
(84,8,"MEDPROFP2.jpeg","../photos/MEDPROFP2.jpeg","image/jpeg"),
(85,8,"PE2003.jpeg","../photos/PE2003.jpeg","image/jpeg"),
(86,10,"Presciption2017.jpeg","../photos/Presciption2017.jpeg","image/jpeg"),
(87,10,"lab2010.jpeg","../photos/lab2010.jpeg","image/jpeg"),
(88,10,"lab22010.jpeg","../photos/lab22010.jpeg","image/jpeg"),
(89,10,"cxr2010.jpeg","../photos/cxr2010.jpeg","image/jpeg"),
(90,10,"cxr1998.jpeg","../photos/cxr1998.jpeg","image/jpeg"),
(91,10,"PA1998.jpeg","../photos/PA1998.jpeg","image/jpeg"),
(92,10,"ECG2010P1.jpeg","../photos/ECG2010P1.jpeg","image/jpeg"),
(93,10,"ECG2010P2.jpeg","../photos/ECG2010P2.jpeg","image/jpeg"),
(94,10,"ECG2000P1.jpeg","../photos/ECG2000P1.jpeg","image/jpeg"),
(95,10,"ECG2000P2.jpeg","../photos/ECG2000P2.jpeg","image/jpeg"),
(96,10,"PE20000.jpeg","../photos/PE20000.jpeg","image/jpeg"),
(97,10,"CXR2000.jpeg","../photos/CXR2000.jpeg","image/jpeg"),
(98,10,"opdregistrarp1.jpeg","../photos/opdregistrarp1.jpeg","image/jpeg"),
(99,10,"opdregistrarp2.jpeg.jpeg","../photos/opdregistrarp2.jpeg.jpeg","image/jpeg"),
(100,10,"PE2002.jpeg","../photos/PE2002.jpeg","image/jpeg"),
(101,10,"CXR2002.jpeg","../photos/CXR2002.jpeg","image/jpeg"),
(102,10,"SBAP.jpeg","../photos/SBAP.jpeg","image/jpeg"),
(103,10,"PE2003.jpeg","../photos/PE2003.jpeg","image/jpeg"),
(104,10,"CXR2003.jpeg","../photos/CXR2003.jpeg","image/jpeg"),
(105,10,"CXR2003P2.jpeg","../photos/CXR2003P2.jpeg","image/jpeg"),
(106,10,"LAB2007.jpeg","../photos/LAB2007.jpeg","image/jpeg"),
(107,10,"CXR2007.jpeg","../photos/CXR2007.jpeg","image/jpeg"),
(108,10,"PE2007.jpeg","../photos/PE2007.jpeg","image/jpeg"),
(109,10,"ECG2007P1.jpeg","../photos/ECG2007P1.jpeg","image/jpeg"),
(110,10,"ECG2007P2.jpeg","../photos/ECG2007P2.jpeg","image/jpeg"),
(111,10,"LAB2006.jpeg","../photos/LAB2006.jpeg","image/jpeg"),
(112,10,"CXR2006.jpeg","../photos/CXR2006.jpeg","image/jpeg"),
(113,10,"ECG2006.jpeg","../photos/ECG2006.jpeg","image/jpeg"),
(114,10,"ECG2006P2.jpeg","../photos/ECG2006P2.jpeg","image/jpeg"),
(115,10,"LAB.22.2006.jpeg","../photos/LAB.22.2006.jpeg","image/jpeg"),
(116,10,"LAB.22.20062.jpeg.jpeg","../photos/LAB.22.20062.jpeg.jpeg","image/jpeg"),
(117,10,"LAB.22.20063.jpeg.jpeg","../photos/LAB.22.20063.jpeg.jpeg","image/jpeg"),
(118,10,"PE2006.jpeg","../photos/PE2006.jpeg","image/jpeg"),
(119,10,"MEDICALPROFILE.jpeg","../photos/MEDICALPROFILE.jpeg","image/jpeg"),
(120,10,"MEDICALPROFILE2.jpeg.jpeg","../photos/MEDICALPROFILE2.jpeg.jpeg","image/jpeg"),
(121,10,"LAB2012.jpeg","../photos/LAB2012.jpeg","image/jpeg"),
(122,10,"LAB2012P2.jpeg","../photos/LAB2012P2.jpeg","image/jpeg"),
(123,10,"LABJULY2012.jpeg","../photos/LABJULY2012.jpeg","image/jpeg"),
(124,10,"LABJULY2012P2.jpeg","../photos/LABJULY2012P2.jpeg","image/jpeg"),
(125,10,"CXR2012.jpeg","../photos/CXR2012.jpeg","image/jpeg"),
(126,10,"CXR2012P2.jpeg","../photos/CXR2012P2.jpeg","image/jpeg"),
(127,10,"CXR2012P3.jpeg","../photos/CXR2012P3.jpeg",""),
(128,10,"CXR2012P3.jpeg","../photos/CXR2012P3.jpeg",""),
(129,10,"ECG2012.jpeg","../photos/ECG2012.jpeg","image/jpeg"),
(130,10,"ECG2012P2.jpeg","../photos/ECG2012P2.jpeg","image/jpeg"),
(131,10,"LAB2008.jpeg","../photos/LAB2008.jpeg","image/jpeg"),
(132,10,"ECG2008.jpeg","../photos/ECG2008.jpeg","image/jpeg"),
(133,10,"ECG2008P2.jpeg","../photos/ECG2008P2.jpeg","image/jpeg"),
(134,10,"CXR2008.jpeg","../photos/CXR2008.jpeg","image/jpeg");


DROP TABLE IF EXISTS `medical_records_tbl`;

CREATE TABLE `medical_records_tbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL DEFAULT '0',
  `image_name` varchar(255) NOT NULL DEFAULT '0',
  `image_type` varchar(255) NOT NULL DEFAULT '0',
  `image_path` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_medical_cert_tbl_patient_pd_tbl` (`patient_id`),
  CONSTRAINT `medical_records_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO `medical_records_tbl` VALUES (4,12,"URINARY TRACT INFECTION Table2.jpg","image/jpeg","../photos/URINARY TRACT INFECTION Table2.jpg"),
(5,12,"laboratory-report-template-image11-242x300.jpg","image/jpeg","../photos/laboratory-report-template-image11-242x300.jpg");


DROP TABLE IF EXISTS `patient_pd_tbl`;

CREATE TABLE `patient_pd_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT '0',
  `lastname` varchar(50) DEFAULT '0',
  `patient_number` bigint(20) DEFAULT '0',
  `gender` varchar(50) DEFAULT '0',
  `patient_address` varchar(50) DEFAULT '0',
  `contact_person` varchar(50) DEFAULT '0',
  `person_contact_emergency_number` bigint(20) DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT '0',
  `age` int(11) DEFAULT '0',
  `position` varchar(50) DEFAULT '0',
  `civil_status` varchar(50) DEFAULT '0',
  `blood_type` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `patient_pd_tbl` VALUES (1,"NOELLE KAYE D","LOZANO",917770815,"F","BIDAY SFCLU","MOTHER: MINA LOZANO",9104456770,"Active","CON",20,"Student","Single","O"),
(2,"JEMIMA","CATBAGAN",9298682977,"F","CATBANGEN, SFCLU","LULU S. CATBAGAN",0,"Active","CMLS",21,"Student","Single","A"),
(3,"ARNELLE","BALINAO",9299544398,"F","SISON, PANGASINAN","ELMER BALINAO",9217974546,"Active","CON",55,"Employee","Married","A"),
(4,"GERIC","CASUGAY",9065473292,"M","SFC","GERALDO CASUGAY",29951633071,"Active","CCSE",26,"Student","Single","B"),
(5,"EDWIN N.","ALJENTERA",9185051629,"M","NALVO NORTE LUNA LA UNION","EMILY A.NOBLE",9163066774,"Active","CON",44,"Employee","Single","A"),
(6,"LENIE A.","BUCCAT",9213159456,"F","BACNOTAN, LU.","JOJI ALMOJERA",0,"Active","CON",42,"Employee","Married","B"),
(7,"CATALINO B.","ABELLERA",9212147745,"M","STA.LUCIA ARINGAY L.U","MARCELINA ABELLERA",0,"Active","SDI",39,"Employee","Single","A"),
(8,"FIDELA","ALMODOVAR",9185938035,"F","RAOIS, BACNOTAN, LA UNION","EDDY ALMODOVAR",9179803737,"Active","CON",60,"Employee","Married","O"),
(9,"ERICA","MANGAOANG",9179381734,"F","ARINGAY, LA UNION","CARMELITA MANGAOANG",9217618690,"Active","BMLS",19,"Student","Single","A"),
(10,"MERLITA M.","AVECILLA",9197748723,"F","CABA, LA UNION","BEVERLY ANN AVECILLA",0,"Active","CON",63,"Employee","Married","A"),
(11,"GINIKA M.","ULINWA",9275916618,"F","NIGERIA","NONE",0,"Active","CON",18,"Student","Single","A"),
(12,"Alliah","callejo",9565141648,"F","SAntiago sur, Caba, La Union","Ronella Callejo",9507915404,"Active","MLS",20,"Student","Married","A"),
(14,"Ryan Jay","Yalung",9953612757,"M","Tanqui, CSFLU","None",0,"Active","HSWO/CON",33,"Employee","Married","O");


DROP TABLE IF EXISTS `physical_examination_tbl`;

CREATE TABLE `physical_examination_tbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) DEFAULT NULL,
  `blood_pressure` varchar(50) DEFAULT NULL,
  `heart_rate` int(11) DEFAULT NULL,
  `temperature` varchar(50) DEFAULT NULL,
  `respiratory_rate` int(11) DEFAULT NULL,
  `patient_height` varchar(50) DEFAULT NULL,
  `patient_weight` varchar(50) DEFAULT NULL,
  `bmi` int(10) DEFAULT NULL,
  `os_no_glasses` varchar(50) DEFAULT NULL,
  `os_with_glasses` varchar(50) DEFAULT NULL,
  `od_no_glasses` varchar(50) DEFAULT NULL,
  `od_with_glasses` varchar(50) DEFAULT NULL,
  `ears_right` varchar(50) DEFAULT NULL,
  `ears_left` varchar(50) DEFAULT NULL,
  `skin` varchar(50) DEFAULT NULL,
  `skin_abnormal` varchar(50) DEFAULT NULL,
  `nose` varchar(50) DEFAULT NULL,
  `nose_abnormal` varchar(50) DEFAULT NULL,
  `mouth` varchar(50) DEFAULT NULL,
  `mouth_abnormal` varchar(50) DEFAULT NULL,
  `pharynx` varchar(50) DEFAULT NULL,
  `pharynx_abnormal` varchar(50) DEFAULT NULL,
  `tonsils` varchar(50) DEFAULT NULL,
  `tonsils_abnormal` varchar(50) DEFAULT NULL,
  `gums` varchar(50) DEFAULT NULL,
  `gums_abnormal` varchar(50) DEFAULT NULL,
  `lymph_nodes` varchar(50) DEFAULT NULL,
  `lymph_nodes_abnormal` varchar(50) DEFAULT NULL,
  `neck` varchar(50) DEFAULT NULL,
  `neck_abnormal` varchar(50) DEFAULT NULL,
  `chest` varchar(50) DEFAULT NULL,
  `chest_abnormal` varchar(50) DEFAULT NULL,
  `lungs` varchar(50) DEFAULT NULL,
  `lungs_abnormal` varchar(50) DEFAULT NULL,
  `heart` varchar(50) DEFAULT NULL,
  `heart_abnormal` varchar(50) DEFAULT NULL,
  `abdomen` varchar(50) DEFAULT NULL,
  `abdomen_abnormal` varchar(50) DEFAULT NULL,
  `rectum` varchar(50) DEFAULT NULL,
  `rectum_abnormal` varchar(50) DEFAULT NULL,
  `genitalia` varchar(50) DEFAULT NULL,
  `genitalia_abnormal` varchar(50) DEFAULT NULL,
  `spine` varchar(50) DEFAULT NULL,
  `spine_abnormal` varchar(50) DEFAULT NULL,
  `arms` varchar(50) DEFAULT NULL,
  `arms_abnormal` varchar(50) DEFAULT NULL,
  `legs` varchar(50) DEFAULT NULL,
  `legs_abnormal` varchar(50) DEFAULT NULL,
  `feet` varchar(50) DEFAULT NULL,
  `feet_abnormal` varchar(50) DEFAULT NULL,
  `observation` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `essentially` varchar(255) DEFAULT NULL,
  `limitation` varchar(255) DEFAULT NULL,
  `special_attention` varchar(255) DEFAULT NULL,
  `reccomendation` varchar(255) DEFAULT NULL,
  `assesed_by` varchar(255) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  CONSTRAINT `FK_physical_examination_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;



DROP TABLE IF EXISTS `visit_tbl`;

CREATE TABLE `visit_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `visit_reason` varchar(50) DEFAULT NULL,
  `assesed_by` varchar(255) DEFAULT NULL,
  `date_recorded` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_visit_tbl_patient_pd_tbl` (`patient_id`),
  CONSTRAINT `FK_visit_tbl_patient_pd_tbl` FOREIGN KEY (`patient_id`) REFERENCES `patient_pd_tbl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `visit_tbl` VALUES (1,1,"Consult","RJY","2019-03-27 11:54:36"),
(2,2,"Consult","RJY","2019-03-27 20:28:55"),
(3,3,"Consult","JHCO","2019-03-28 11:50:52"),
(4,4,"Consult","JHCO","2019-03-29 10:27:44"),
(5,9,"Consult","JHCO","2019-03-29 14:09:36"),
(6,9,"Consult","JHCO","2019-03-29 15:33:46"),
(7,5,"Medical Profile","RJY","2019-03-29 16:19:25"),
(8,3,"Medical Profile","RJY","2019-03-29 16:20:15"),
(9,12,"Consult","JHCO","2019-03-29 16:30:54"),
(12,14,"Medical Profile","RJY","2019-03-29 17:03:15");


SET foreign_key_checks = 1;
