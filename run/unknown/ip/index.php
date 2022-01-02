<?php

	print($_SERVER["REMOTE_ADDR"]);
	echo "<br>";
	print(getHostByName(getHostName()));
	echo "<br>";
	print($_SERVER['HTTP_HOST']);
	echo "<br>";
	print(gethostbyname(trim(`hostname`)));
	echo "<br>";
	print(gethostbyname(trim(exec("hostname"))));
	echo "<br>";

	exec('arp -a',$sa);
	$ipa = [];
	foreach($sa as $s)
	if (strpos($s,'Interface:')===0)
	$ipa[] = explode(' ',$s)[1];
	print_r($ipa);