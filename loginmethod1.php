<?php
include "connect.php";
include 'core.inc.php';
error_reporting(0);
$error=array();
//variables
//$reg=$_POST['reg'];
//$pass=$_POST['pass'];
//$fname=$_POST['fname'];
if(isset($_POST['login'])){

$reg_no=ms($_POST['reg_no']);
$pass=ms( $_POST['pass']);
$type=ms($_POST['type']);
	//$password_hash=md5($password);
	if(!empty($reg_no)&&(!empty($pass))&&(!empty($type))){
	$query="SELECT u_id FROM user WHERE reg_no='$reg_no' and password='$pass'";
		if ($query_run=mysql_query($query)){
		$query_num_rows=mysql_num_rows($query_run);
			if ($query_num_rows==0){
				?>
			<p align="center" style="color: red; "><b>Sorry! There is no user which such password/reg_no combination in our system. Retry again.</b> <br /><br /></p>
			
			<?php
			}
			else if($query_num_rows==1){
			$id=mysql_result($query_run, 0, 'u_id');
			$_SESSION['u_id']=$id;
			$d=$id;
			$lgid=$id;
			
			mysql_query("UPDATE user set status=1 where u_id='$lgid'");
			if($type=="student"){
						
			header('Location: student_potal.php');
			}
			

			}
			
		}
		else{
		echo mysql_error();
		}
	}
else{
	echo "Fill all fields";
}}else{
	header('location:user.php');
}
 
?>