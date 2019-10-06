CREATE DATABASE IF NOT EXISTS `a2983868_att`;

CREATE TABLE IF NOT EXISTS `a2983868_att`.`alert_section`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT,
	`alert_by` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
	`alert_time` timestamp NOT NULL,
	`alert_to_type` enum('1','2','3','4','5','6','7','8','9') COLLATE utf8_unicode_ci NOT NULL,
	`alert_to` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
	`alert_subject` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
	`alert_details` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='alerts section';


CREATE TABLE IF NOT EXISTS `a2983868_att`.`att_table`
(
	`uni_id` BIGINT(30) NOT NULL AUTO_INCREMENT,
	`roll_number` BIGINT(15) COLLATE utf8_unicode_ci NOT NULL,
	`date` DATE COLLATE utf8_unicode_ci NOT NULL,
	`year` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
	`section` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
	`period` enum('1','2','3','4','5','6','7') COLLATE utf8_unicode_ci NOT NULL,
	`subject` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
	`p_or_a`  BIGINT(10) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='attendence table';



CREATE TABLE IF NOT EXISTS `a2983868_att`.`branch_det`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment user-id of each user,unique_index',
	`branch_id` VARCHAR(8) NOT NULL,
	`branch_name` VARCHAR(60) NOT NULL,
	PRIMARY KEY (`uni_id`),
	UNIQUE KEY (`branch_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='student current details';



CREATE TABLE IF NOT EXISTS `a2983868_att`.`comp_class_details`
(
	`uni_id` BIGINT(30) NOT NULL AUTO_INCREMENT,
	`user_name` BIGINT(15) COLLATE utf8_unicode_ci NOT NULL,
	`date` DATE COLLATE utf8_unicode_ci NOT NULL,
	`year` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
	`section` varchar(6) COLLATE utf8_unicode_ci NOT NULL ,
     `period` enum('1','2','3','4','5','6','7') COLLATE utf8_unicode_ci NOT NULL,
	`subject` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
	`sub_taught` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='attendence table';




CREATE TABLE IF NOT EXISTS `a2983868_att`.`daily_schedule_stu`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment unique_index',
	`year` enum('1','2','3','4')  NOT NULL,
	`section_id` varchar(10) NOT NULL,
	`1_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`2_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`3_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`4_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`5_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`6_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
    `7_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`8_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
    `9_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`10_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`11_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`12_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`13_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`14_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`15_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`16_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`17_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`18_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`19_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`20_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`21_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`22_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`23_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`24_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`25_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`26_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`27_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`28_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`29_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`30_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`31_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`32_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`33_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`34_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`35_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`36_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`37_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`38_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`39_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`40_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`41_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`42_yearsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
   PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='faculty semester schedule';


CREATE TABLE IF NOT EXISTS `a2983868_att`.`deleted_alerts`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT,
	`alert_time` timestamp NOT NULL,
	`alert_dlt_time` timestamp NOT NULL,
	`alert_by` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
	`alert_to_type` enum('1','2','3','4','5','6','7','8','9') COLLATE utf8_unicode_ci NOT NULL,
	`alert_to` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
	`alert_subject` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
	`alert_details` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='alerts section';



CREATE TABLE IF NOT EXISTS `a2983868_att`.`faculty_assign_class`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT,
	`user_name` BIGINT(20) NOT NULL,
	`ydm` DATE NOT NULL,
	`to_faculty` BIGINT(20) NOT NULL,
	`per_num` enum('1','2','3','4','5','6','7') NOT NULL,
	`per_details` VARCHAR(20) NOT NULL,	
	`user_per_details` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;




CREATE TABLE IF NOT EXISTS `a2983868_att`.`faculty_details`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment user-id of each user,unique_index',
	`user_name` BIGINT(11) COLLATE utf8_unicode_ci,
	`faculty_dept` varchar(6) COLLATE utf8_unicode_ci,
	`faculty_sfrm` varchar(10) COLLATE utf8_unicode_ci,
	`faculty_name` varchar(40) COLLATE utf8_unicode_ci,
	`faculty_last_name` varchar(20) COLLATE utf8_unicode_ci,
   PRIMARY KEY (`uni_id`),
   UNIQUE KEY (`user_name`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='faculty details';




CREATE TABLE IF NOT EXISTS `a2983868_att`.`faculty_login`
(
 `user_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` BIGINT(20) COLLATE utf8_unicode_ci COMMENT 'user''s name, unique',
  `password` varchar(255) COLLATE utf8_unicode_ci COMMENT 'user''s password in encrypted',
  `name` varchar(40) COLLATE utf8_unicode_ci COMMENT 'name of faculty',
   `last_name` varchar(20) COLLATE utf8_unicode_ci COMMENT 'name of faculty',
  `faculty_email` varchar(64) COLLATE utf8_unicode_ci COMMENT 'user''s email, unique',
  `faculty_dept` varchar(8) COLLATE utf8_unicode_ci COMMENT 'faculty department',
  `user_status` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'user''s activation status',
  `user_level` enum('1','2','3','4') NOT NULL DEFAULT '1' COMMENT 'user level to distinguish faculty',
  `user_last_login` TIMESTAMP NOT NULL  COMMENT 'user''s last login time',
  `user_last_logout` TIMESTAMP NOT NULL  COMMENT 'user''s last logout time',
  `user_last_login_ip` varchar(39) COLLATE utf8_unicode_ci DEFAULT '0.0.0.0',
  `alert_time` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`faculty_email`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';


CREATE TABLE IF NOT EXISTS `a2983868_att`.`faculty_schedule_yearsecsub`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment unique_index',
	`user_name` BIGINT(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
	`faculty_dept` varchar(8) NOT NULL COLLATE utf8_unicode_ci,
	`1_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`2_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`3_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`4_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`5_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`6_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
    `7_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`8_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
    `9_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`10_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`11_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`12_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`13_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`14_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`15_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`16_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`17_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`18_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`19_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`20_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`21_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`22_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`23_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`24_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`25_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`26_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`27_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`28_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`29_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`30_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`31_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`32_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`33_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`34_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`35_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`36_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`37_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`38_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`39_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`40_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`41_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
	`42_yearsecsub` varchar(20) DEFAULT 'FREE' COLLATE utf8_unicode_ci NOT NULL,
   PRIMARY KEY (`uni_id`),
   UNIQUE KEY (`user_name`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='faculty semester schedule';





CREATE TABLE IF NOT EXISTS `a2983868_att`.`sem_table`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment unique_index',
	`branch` varchar(10) NOT NULL,
	`year` enum('1','2','3','4') NOT NULL,
	`sem` enum('1','2') NOT NULL,
	`status` enum('0','1') DEFAULT '0' NOT NULL,
	`start_date` varchar(10) NOT NULL,
   PRIMARY KEY (`uni_id`)
   
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='semester table to check which semester is active';


CREATE TABLE IF NOT EXISTS `a2983868_att`.`student_basic`
(
	`user_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment user-id of each user,unique_index',
	`roll_number` BIGINT(15) COLLATE utf8_unicode_ci COMMENT 'roll number of student',
	`joining_year` YEAR COLLATE utf8_unicode_ci COMMENT 'Joining year of student',
	`join_branch` varchar(8) COLLATE utf8_unicode_ci,
	`stu_mobile` VARCHAR(20),
	`parent_mobile` VARCHAR(20),
   PRIMARY KEY (`user_id`),
   UNIQUE KEY (`roll_number`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='student basic details';





CREATE TABLE IF NOT EXISTS `a2983868_att`.`student_current_details`
(
	`user_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment user-id of each user,unique_index',
	`roll_number` BIGINT(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'roll number of student',
	`current_year` enum('0','1','2','3','4') DEFAULT '1' COLLATE utf8_unicode_ci COMMENT 'current year of student',
	`current_sem` enum('1','2') DEFAULT '1' COLLATE utf8_unicode_ci ,
	`current_branch` varchar(8) COLLATE utf8_unicode_ci,
	`current_sec` varchar(5) COLLATE utf8_unicode_ci ,
	`sem_live_flag` enum('0','1') DEFAULT '1',
	`det_flag` enum('0','1','2','3','4','5','6') DEFAULT '0',
	`current_ele1` VARCHAR(8) DEFAULT 'NULL',
	`current_ele2` VARCHAR(8) DEFAULT 'NULL',
	`current_ele3` VARCHAR(8) DEFAULT 'NULL',
   PRIMARY KEY (`user_id`),
   UNIQUE KEY (`roll_number`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='student current details';


CREATE TABLE IF NOT EXISTS `a2983868_att`.`student_login`
(
 `user_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `roll_number` VARCHAR(20) COLLATE utf8_unicode_ci COMMENT 'user''s name, unique',
  `password` varchar(255) COLLATE utf8_unicode_ci COMMENT 'user''s password in encrypted',
  `name` varchar(40) COLLATE utf8_unicode_ci ,
  `last_name` varchar(40) COLLATE utf8_unicode_ci,
  `student_email` varchar(64) COLLATE utf8_unicode_ci COMMENT 'user''s email, unique',
  `user_status` enum('0','1')  DEFAULT '1' COMMENT 'user''s activation status',
  `user_level` enum('11','12','13','14')  DEFAULT '11' COMMENT 'user level to distinguish student and cr',
  `last_pwd_change_time` TIMESTAMP COMMENT 'user''s last login time',
  `user_last_login` TIMESTAMP  COMMENT 'user''s last login time',
  `user_last_logout` TIMESTAMP   COMMENT 'user''s last login time',
  `no_of_pwd_changes` BIGINT(20)  DEFAULT '0' COMMENT 'count of user password changes',
  `user_last_login_ip` varchar(39) COLLATE utf8_unicode_ci  DEFAULT '0.0.0.0',
  `per_flag` enum('0','1') DEFAULT '0' COLLATE utf8_unicode_ci ,
  `att_flag` enum('0','1') DEFAULT '1' COLLATE utf8_unicode_ci ,
  `ext_flag` enum('0','1') DEFAULT '0' COLLATE utf8_unicode_ci ,
  `alert_time` TIMESTAMP  ,
  `parent_name` VARCHAR(20) ,
  `parent_email` VARCHAR(30),
   PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`roll_number`)

  
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';


CREATE TABLE IF NOT EXISTS `a2983868_att`.`subject_details`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment user-id of each user,unique_index',
	`subject_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'current year of student',
	`subject_sfrm` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'current branch of student',
	`subject_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'current section of student',
   PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='student current details';

CREATE TABLE IF NOT EXISTS `a2983868_att`.`sub_electives`
(
	`uni_id` BIGINT(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment user-id of each user,unique_index',
	`ele_id` VARCHAR (8) NOT NULL,
   PRIMARY KEY (`uni_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='student current details';


CREATE TABLE IF NOT EXISTS `a2983868_att`.`admissiondetails`
(
`first_name` VARCHAR(20) NOT NULL,
`last_name` VARCHAR(20) NOT NULL,
`roll_no` VARCHAR (30) NOT NULL,
`date_birth` VARCHAR(20) NOT NULL,
`id_mark1` VARCHAR(20) NOT NULL,
`id_mark2` VARCHAR(20) NOT NULL,
`father_name` VARCHAR(20) NOT NULL,
`mother_name` VARCHAR(20) NOT NULL,
`gaurdian_name` VARCHAR(20) NOT NULL,
`occupation` VARCHAR(20) NOT NULL,
`annual_income` VARCHAR(20) NOT NULL,
`birth_place` VARCHAR(20) NOT NULL,
`area_candidate` VARCHAR(20) NOT NULL,
`modeofadmission` VARCHAR(20) NOT NULL,
`mother_tongue` VARCHAR(20) NOT NULL,
`gender` VARCHAR(6) NOT NULL,
`marital_status` VARCHAR(20) NOT NULL,
`religion` VARCHAR(20) NOT NULL,
`caste` VARCHAR(20) NOT NULL,
`sub_caste` VARCHAR(20) NOT NULL,
`admission_number` VARCHAR(20) NOT NULL,
`date_admission` VARCHAR(20) NOT NULL,
`scholarship` VARCHAR(20) NOT NULL,
`blood_group` VARCHAR(20) NOT NULL,
`aadhar_number` VARCHAR(20) NOT NULL,
`present_addressline1` VARCHAR(40) NOT NULL,
`present_addressline2` VARCHAR(40) NOT NULL,
`present_city` VARCHAR(20) NOT NULL,
`present_district` VARCHAR(20) NOT NULL,
`present_state` VARCHAR(20) NOT NULL,
`present_country` VARCHAR(20) NOT NULL,
`present_landline` VARCHAR(20) NOT NULL,
`permanent_addressline1` VARCHAR(40) NOT NULL,
`permanent_addressline2` VARCHAR(40) NOT NULL,
`permanent_city` VARCHAR(20) NOT NULL,
`permanent_district` VARCHAR(20) NOT NULL,
`permanent_state` VARCHAR(20) NOT NULL,
`permanent_country` VARCHAR(20) NOT NULL,
`father_mobile` VARCHAR(20) NOT NULL,
`father_email` VARCHAR(30) NOT NULL,
`student_mobile` VARCHAR(20) NOT NULL,
`student_email` VARCHAR(30) NOT NULL,
`mother_mobile` VARCHAR(20) NOT NULL,
`mother_email` VARCHAR(20) NOT NULL, 
`gaurdian_mobile` VARCHAR(20) NOT NULL,
`gaurdian_email` VARCHAR(30) NOT NULL,
`ssc_board` VARCHAR(20) NOT NULL,
`ssc_passyear` VARCHAR(20) NOT NULL, 
`ssc_institution` VARCHAR(50) NOT NULL,
`ssc_medium` VARCHAR(10) NOT NULL,
`ssc_maxmarks` INT(5) NOT NULL,
`ssc_marks` INT(5) NOT NULL,
`ssc_percent` VARCHAR(10) NOT NULL,
`ssc_div` VARCHAR(10) NOT NULL,
`inter_board` VARCHAR(20) NOT NULL,
`inter_passyear` VARCHAR(20) NOT NULL,
`inter_institution` VARCHAR(30) NOT NULL,
`inter_medium` VARCHAR(10) NOT NULL,
`inter_maxmarks` INT(5) NOT NULL,
`inter_marks` INT(5) NOT NULL,
`inter_percent` VARCHAR(20) NOT NULL,
`inter_div` VARCHAR(10) NOT NULL,
`ug_board` VARCHAR(20) NOT NULL,
`ug_passyear` VARCHAR(20) NOT NULL,
`ug_institution` VARCHAR(20) NOT NULL,
`ug_medium` VARCHAR(20) NOT NULL,
`ug_maxmarks` INT(5) NOT NULL,
`ug_marks` INT(5) NOT NULL,
`ug_percent` VARCHAR(20) NOT NULL,
`ug_div` VARCHAR(20) NOT NULL,
`pg_board` VARCHAR(20) NOT NULL,
`pg_passyear` VARCHAR(20) NOT NULL,
`pg_institution` VARCHAR(40) NOT NULL,
`pg_medium` VARCHAR(20) NOT NULL,
`pg_maxmarks` INT(5) NOT NULL,
`pg_marks` INT(5) NOT NULL,
`pg_percent` VARCHAR(20) NOT NULL,
`pg_div` VARCHAR(20) NOT NULL,
`entrence_exam` VARCHAR (20) NOT NULL,
`entrence_maxmarks` VARCHAR (20) NOT NULL,
`entrence_marks` VARCHAR (20) NOT NULL,
`entrence_rank` VARCHAR (20) NOT NULL,
`flag` INT (5) DEFAULT '0',
UNIQUE(roll_no)
)ENGINE = MYISAM CHARACTER SET latin1 COLLATE latin1_bin;




ALTER TABLE `a2983868_att`.`faculty_login` ADD `ext_flag` ENUM('0','1') NOT NULL ;
ALTER TABLE `a2983868_att`.`student_login` ADD `fld` DATE NOT NULL ;
ALTER TABLE `a2983868_att`.`student_login` ADD `fldflag` ENUM('0','1') NOT NULL DEFAULT '0' ;
ALTER TABLE `a2983868_att`.`branch_det` ADD UNIQUE(`branch_name`);
ALTER TABLE `a2983868_att`.`faculty_login` ADD `recflag` ENUM('0','1') NOT NULL DEFAULT '0', ADD `recemail` VARCHAR(100) NOT NULL ;
ALTER TABLE `a2983868_att`.`student_login` ADD `recflag` ENUM('0','1') NOT NULL DEFAULT '0' , ADD `recemail` VARCHAR(100) NOT NULL ;
ALTER TABLE `a2983868_att`.`student_login` CHANGE `recemail` `recemail` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `a2983868_att`.`faculty_login` CHANGE `recemail` `recemail` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `a2983868_att`.`faculty_login` CHANGE `ext_flag` `ext_flag` ENUM('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0';
ALTER TABLE `a2983868_att`.`faculty_login` ADD `skid` ENUM('0','1') NULL DEFAULT '0' ;
ALTER TABLE `a2983868_att`.`student_login` CHANGE `att_flag` `skid` ENUM('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '0';
