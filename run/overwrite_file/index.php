<?php

	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "Mickey Mouse\n";
	fwrite($myfile, $txt);
	$txt = "Ludwig\n";
	fwrite($myfile, $txt);
	fclose($myfile);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Text Editor</title>
</head>
<body>
	<textarea></textarea>
</body>
</html>