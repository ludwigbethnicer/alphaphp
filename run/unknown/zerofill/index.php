<?php

	$number = 98765;
	$length = 10;
	$string = substr(str_repeat(0, $length).$number, - $length);

	//output: 0000098765		20200130 000000 (8+6)= 14
	print($string);