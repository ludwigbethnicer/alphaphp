<?php

	function dateTimeNow() {
		$timezone_var = date_default_timezone_set("America/New_York");
		$display_hr = date("H");
		$secz = substr(date("s"), 0, 2);
		$hr_base = $display_hr + $timezone_var;
		if($hr_base>12){
			$hr_base = "0" . ($hr_base - 12);
		}
		// $ampm_stat = date("a");
		// if($ampm_stat="am"){
		// 	$ampm_disp = "pm";
		// }
		// if($ampm_stat="pm"){
		// 	$ampm_disp = "am";
		// }
		$correct_datetimenow = date("Y-m-d ".$hr_base.":i:").$secz; // .$ampm_disp
		return $correct_datetimenow;
	}