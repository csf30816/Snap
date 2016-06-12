<?php
$host="sql212.my.vg";
$uname="myvg_18307939";
$pass="csf30816";
$database = "myvg_18307939_login";
	
$connection=mysql_connect($host,$uname,$pass) or 
die("Database Connection Failed");

$selectdb=mysql_select_db($database) or 
die("Database could not be selected");	

$result=mysql_select_db($database) or 
die("database cannot be selected");

@session_start();
set_time_limit(0);
?>
