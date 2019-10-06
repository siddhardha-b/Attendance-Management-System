<?php
$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$mysql_hostname = "mysql8.000webhost.com";
$mysql_user = "a2983868_att";
$mysql_password = "siddhu161";
$mysql_database = "a2983868_att";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>