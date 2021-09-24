<?php

	function dateTimeNow() {
		$timezone_var = date_default_timezone_set("America/New_York");
		$display_hr = date("H");
		$secz = substr(date("s"), 0, 2);
		$hr_base = $display_hr + $timezone_var;
		if($hr_base>12){
			$hr_base = "0" . ($hr_base - 12);
		}else{
			$hr_base = ($display_hr + $timezone_var) + 12;
		}
		$correct_datetimenow = date("Y-m-d ".$hr_base.":i:").$secz;
		return $correct_datetimenow;
	}