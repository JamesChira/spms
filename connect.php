<?php
$host='localhost';
$user='root';
$pass='';
$db='spms';
$con=mysql_connect($host,$user,$pass);
if(!$con){
	die('could not connect ');
	}
$db_selected=mysql_select_db($db,$con);
if(!$db_selected){
	die('could not connect to db');
	}


?>