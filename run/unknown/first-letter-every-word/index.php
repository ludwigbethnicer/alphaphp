<?php

	$string = "Progress in Veterinary Science";
	$expr = '/(?<=\s|^)[a-z]/i';
	preg_match_all($expr, $string, $matches);
	$result = implode('', $matches[0]);
	$result = strtoupper($result);

	print_r($result);
	echo "<br>";
	print_r(substr($result,0,2));