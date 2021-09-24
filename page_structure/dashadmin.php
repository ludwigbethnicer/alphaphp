<?php

	if ($_SESSION["ulevpos"] == "Head") {
		
	} else {
		session_start();
		session_destroy();
		header("location:login.php");
	}
	
	include_once "dash-navibar.php";
	
?>

<div id="container" style="height: 100%;">
</div>
<script language = "JavaScript">
// https://www.tutorialspoint.com/googlecharts/googlecharts_line_style.htm
function drawChart() {
// Define the chart to be drawn.
var data = new google.visualization.DataTable();
data.addColumn('string', 'Checkpoints');
data.addColumn('number', 'VisMin');
data.addColumn('number', 'Luzon/NCR');
data.addRows([
['BIOS', 6.9, 10,],
['BOS',  3.45, 20,],
['Account',  3.45, 30,],
['Media Games', 0, 40],
['Taskbar', 3.45, 50],
['DateTime', 0, 60],               
['Control Panel', 17.24, 40],
['Run CMD', 0, 80],
['RegEdit', 17.24, 10],
['Right Click', 0, 60],
['Comp Mngt', 0, 100],
['Internet Access', 96.55, 20]
]);

// Set chart options
var options = {'title' : 'System Security as of 2020',
hAxis: {
title: 'Checkpoints'
},
vAxis: {
title: 'Percentage'
},
pointsVisible: true,
fontSize: 11
};

// Instantiate and draw the chart.
var chart = new google.visualization.LineChart(document.getElementById('container'));
chart.draw(data, options);
}
google.charts.setOnLoadCallback(drawChart);
</script>