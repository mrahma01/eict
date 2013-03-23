CREATE TABLE `timetable` (
  `timetable_id` int(3) NOT NULL auto_increment,
  `timetable_modified` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `d_date` date default NULL,
  `fajr_begins` time default NULL,
  `fajr_jamah` time default NULL,
  `sunrise` time default NULL,
  `zuhr_begins` time default NULL,
  `zuhr_jamah` time default NULL,
  `asr_mithl_1` time default NULL,
  `asr_mithl_2` time default NULL,
  `asr_jamah` time default NULL,
  `maghrib_begins` time default NULL,
  `maghrib_jamah` time default NULL,
  `isha_begins` time default NULL,
  `isha_jamah` time default NULL,
  PRIMARY KEY  (`timetable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6643 DEFAULT CHARSET=utf8 AUTO_INCREMENT=6643 ;
