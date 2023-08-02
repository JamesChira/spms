<?php
ob_start();
session_start();
include 'connect.php';
$current_file=$_SERVER['SCRIPT_NAME'];
@$http_referer=$_SERVER['HTTP_REFERER'];
function loggedin(){
if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id'])){
	return true;
	}
	else{
	return false;
	}
}
function ms($data){
	return mysql_real_escape_string($data);
}
 function user_active($uname) {
	$reg = ms($uname);
	$query = mysql_query("SELECT COUNT('u_id') FROM user WHERE uname='$uname' AND active=1");
	//if count ==1 return true ,else false
	return (mysql_result($query, 0)) == 1 ? TRUE : FALSE;
}
 function upload_picture($temp_name, $extension) {
	//get unique 10 character name
	$name = substr(md5(time()), 0, 10);
	$folder = "images";
	$path = $folder . $name . "." . $extension;
	move_uploaded_file($temp_name, $path);
	$app_id = $_SESSION['app_id'];
	$query = mysql_query("UPDATE user SET nid_image ='$path' WHERE app-id=$app_id");
}
function getfield($field){
	$query="SELECT $field FROM user where u_id='".$_SESSION['u_id']."'";
	if ($query_run=mysql_query($query)){
		if ($query_result = mysql_result($query_run,0,$field)){
		return $query_result;
		}
	}else{
	echo mysql_error();
	}
}
?>