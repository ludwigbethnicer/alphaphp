<?php
	$chckfle_img = file_exists("addon/chatbox/img/chat-dialog-box.png");
	if ($chckfle_img) {
		$stylcxx = "addon/chatbox/css/style.css";
		$imgbex = "addon/chatbox/img/chat-dialog-box.png";
	} else {
		$stylcxx = "../../addon/chatbox/css/style.css";
		$imgbex = "../../addon/chatbox/img/chat-dialog-box.png";
	}
?>

<link rel="stylesheet" type="text/css" href="<?php echo $stylcxx; ?>">
<div id="chatboxid">
	<a href="#">
		<img src="<?php echo $imgbex; ?>">
	</a>
</div>