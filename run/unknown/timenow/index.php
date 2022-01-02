<?php

	echo substr(date("s"), 0, 2);
	echo "<br><br>";

	echo date_default_timezone_get()."<br>";
	echo date('Y-m-d')."<br>";
	echo date('h:i:sa');
	echo "<br>";
	echo date('H:i:s');
	echo "<br><br>";

	$plus1 = date_default_timezone_set("America/New_York");
	$cur_hr = date("h");
	$hr = $cur_hr + $plus1;
	$ampm = date("a");
	echo $ampm;
	echo "<br>";
	if($ampm="am"){
		$display_ampm = "pm";
	}
	if($ampm="pm"){
		$display_ampm = "am";
	}
	date_default_timezone_set("America/New_York");
	echo date_default_timezone_set("America/New_York")."<br>".date("h:i:sa")."<br>";
	echo "The time is " .date("h:i:sa");
	echo "<br>";
	echo "The time is " .date("H:i:s");
	echo "<br>";
	echo date("Y-m-d ".$hr.":i:s").$display_ampm;
	echo "<br><br>";

	echo time()."<br>";

	$plus1 = date_default_timezone_set("America/New_York");
	echo date_default_timezone_set("America/New_York")."<br>".date("h:i:sa")."<br>";
	echo "The time is " .date("h:i:sa");
	echo "<br>";
	echo "The time is " .date("H:i:s");
	echo "<br><br>";

	// Full version PHP Code for Local PC Current TimeStamp:
	$timezone_var = date_default_timezone_set("America/New_York");
	$display_hr = date("h");
	$hr_base = $display_hr + $timezone_var;
	$ampm_stat = date("a");
	if($ampm_stat="am"){
		$ampm_disp = "pm";
	}
	if($ampm_stat="pm"){
		$ampm_disp = "am";
	}
	$correct_datetimenow = date("Y-m-d ".$hr.":i:s").$display_ampm;
	echo $correct_datetimenow;