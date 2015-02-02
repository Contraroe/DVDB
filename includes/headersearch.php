<div id="headersearch">


<?php
include 'PHP/db_config.php';
include 'PHP/db_connect.php';
$result = mysql_query("SELECT * FROM movies");
$data = mysql_query("SELECT * FROM movies WHERE uitgeleend LIKE 1");
$Films = mysql_num_rows($result);
$uitgeleend = mysql_num_rows($data);
echo "$Films Films\n&nbsp;&nbsp;&nbsp;\\\\&nbsp;&nbsp;&nbsp; $uitgeleend Uitgeleend";
echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='index.php' id='logoffbtn'>log off</a>&nbsp;&nbsp;&nbsp;";
?>
	
</div>

