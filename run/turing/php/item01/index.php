<?php

	function turing_append($string) {
		$string = $string . "PHP ";
	}

	function turing_prepend($string) {
		$string = "Turing " . $string;
	}

	$text = "Developer";

	turing_append(turing_prepend($text));

	echo $text;