<?php
require 'core.inc.php';
if(isset($_SESSION['u_id'])){
    session_destroy();
	$id=getfield('u_id');
	
			
			mysql_query("UPDATE user set status=0 where u_id='$id'");
	header('location: index.php');	
}
?>