<?php
/*
Template Name: Daily Salah
*/
get_header(); // Loads the header.php template. 
?>
<body id="page3">
  <div id="main">
  	<!-- header -->
    <header>
    	<h1><a href="/">Edgware <strong>Islamic</strong> Cultural <strong>Trust</strong></a></h1>
      <nav>
      </nav>
    </header>
    <!-- .slider -->
    <div class="slider">
    	<div id="afaded">
        <div class="rap">
       </div>
      </div>
    </div>
    <!-- /.slider -->
    <div class="inside">
		<?php
			$year = date("Y");
			
			$month = date("m");
			if(isset($_POST["month"])){
				$month = $_POST["month"];
			}
			
			$rows = Timetable::getMonthlyCalendar($month, $year);
			$timetable_content = Timetable::getTimetableAsString($rows, $month);
			
			function getMonths($month){
				$months = array('January', 'February', 'March', 'April', 'May', 'June',
		        'July', 'August', 'September', 'October','November','December');
				$i = 1;
				$options = "";
				foreach($months as $month_name){
					$selected = "";
					if($i == intval($month)){
						$selected = " selected='selected'";
					}
					$options .= "<option value='{$i}' {$selected}>{$month_name}</option>";	
					$i++;
				}
				
				return $options;
			}

			
		?>
			
			<form id="full_calender" name="full_calender" >
				Month: 
				<select id="month" name="month" >
					<?php echo getMonths($month);?>
				</select>
				<div id="loading" style="display:block;clear:both;margin-top:5px;margin-bottom:5px;"></div>
				
			</form>
		<?php 	
            echo "From August 2011 Edgware Islamic Cultural Trust prayer times based on the <a href='http://www.eastlondonmosque.org.uk/unified'>Unified Prayer Timetable For London</a>";		
            echo "<p class='jumma'>Jumma is not held in this place, please follow the Zuhr time of the previous day.</p>";
			echo "<div id='timetable_content'>".$timetable_content."</div>";
			
			//include("bot.inc.php");
		
		?>

    </div>
  </div>
  
  <!-- footer -->
<footer>
    <div class="container">
      <div class="wrapper">
      	<div class="fleft">Edgware Islamic Cultural Trust (EICT) 2010, UK registered charity registration number 1137809 &copy; 2010<br>
      	  <!-- {%FOOTER_LINK} -->
        </div>
<div class="fright">
        	<a href="#executive">Executive Committee</a>        </div>
      </div>
    </div>
	</footer>
</div>
</div>
</body>
<script>
function getLoadingMessage(){
	var loader = '';
	loader += '<div class="loading_message">';
	loader += '<span>PLEASE WAIT</span>';
	loader += '</div>';
	return loader;
	
}

jQuery(document).ready(function() {
   jQuery("#month").live('change', function() {
	   var month = this.value;
	   jQuery("#loading").html(getLoadingMessage());
	   jQuery.ajax({
		  url: "ajax?func=get_timetable&month="+month,
		  context: document.body,
		  success: function(msg){
		   jQuery("#loading").html("");
		   	jQuery('#timetable_content').html(msg);
		  }
	   });
	});
 });
</script>
