<?php
function connect_db () 
{
	$login = "2014summersch";
	$password =  "sharuN9S";
	$database =  "2014summersch";
	$hostname = "mysql.ie.cuhk.edu.hk";
	$link = mysql_connect($hostname, $login, $password) 
	or die("Could not connect : " . mysql_error());
		
	mysql_query("SET NAMES 'Big5'");
	mysql_select_db($database, $link) or die("Could not select database");
	return $link;
}
?>