<?php
/*
Plugin Name: Daily prayer time
Plugin URI: http://edgwareict.org.uk/
Description: Daily prayer time for salah
Author: M R
Version: 1
Author URI: http://edgwareict.org.uk/
*/

class PrayerTimeWidget extends WP_Widget
{
  function PrayerTimeWidget()
  {
    $widget_ops = array('classname' => 'PrayerTimeWidget', 'description' => 'Displays daily salah time' );
    $this->WP_Widget('PrayerTimeWidget', 'Daily salah time', $widget_ops);
    include 'prayertime/Timetable.inc.php';	
  }

  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $today = date('l, jS F, Y');
    $title = ( $instance['title'] ) ? $instance['title'] : $today;
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE
	$today = date('l');
	if ($today == 'Friday')
	    echo "<p class='jumma'><a href='friday-jummah-prayer'>Jumma is not held in this place</a></p>";

				$rows = Timetable::getCalendarToday();

				if ($rows !== false){
					$today_calender_str = Timetable::getCalendarTodayAsString($rows[0]);
				}else{
					$today_calender_str = "There is no timetable available at the moment.";
				}

				echo $today_calender_str;
				
	echo "<a href='/monthly-prayer-time'>View full timetable</a> <br />";
 
    echo $after_widget;
  }

  function update()
  {

  }

  function form()
  {
  
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("PrayerTimeWidget");') );?>
