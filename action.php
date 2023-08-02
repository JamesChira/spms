<?php
//session_start();
include 'core.inc.php';
//include 'connect.php';
@$fetch=$_POST['Fetch'];
$_SESSION['school']=$fetch;
if(isset($_POST['getLecturer'])){
	
	
	$sql=mysql_query("select * from user where user_type='lecturer'");
	echo "<table style='width:100%'>";
	echo "<tr>";
	echo "<th>Names</th>";
	echo "<th>Email</th>";
	echo "<th>Phone</th>";
	echo "<th>View</th>";
	echo "</tr>";
	
	while ($row=mysql_fetch_array($sql)) {
		$name=$row['fname']." ".$row['onames'];
		$email=$row['email'];
		$phone=$row['phone'];
		$id=$row['u_id'];
		echo "
		<div class='col-md-8'>
		 <tr>
		 <td>$name</td>
		 <td>$email </td>
	 <td>$phone</td>
		<td><a href='profile.php?id=$id'>view</a></td>
		</tr>
		</div>
		";
	}
	
	
	
	echo "</table>";
	
}

if(isset($_POST['School'])){
		$fetch=$_POST['Fetch'];
		echo $fetch;
		exit();
		$sql=mysql_query("SELECT * FROM user, project,school where project.s_id=user.u_id and sch_id='$fetch'");
				
		echo "<div class='panel panel-success'>
						
						<div class='panel-heading'>Students from school of: </div></div>";
	}



if(isset($_POST['Save'])){
	
	$presentation_id=$_POST['Section'];
	$overalmarks=$_POST['pre_marks'];
	$average=$_POST['Total'];
	$grade=$_POST['Grade'];
	$comment=$_POST['Comment'];
	$reg=$_POST['Regno'];
	$sql=mysql_query("SELECT * FROM marks where presetation_id='$presentation_id'");
	$count=mysql_num_rows($sql);
	
	
	if($count==0){
		$get_studentid=mysql_query("SELECT * FROM project,user where project.reg_no='$reg' and user.u_id=project.s_id LIMIT 1");
		$row=mysql_fetch_array($get_studentid);
		$studentid=$row['u_id'];
		$projectid=$row['p_id'];
		
		
		$insert=mysql_query("INSERT INTO marks(marks_id,s_id,marks,average_score,presetation_id,project_id,comment,grade) 
		values(NULL,'$studentid','$overalmarks','$average','$presentation_id','$projectid','$comment','$grade')");
	
			if($insert){
				echo "<div class='panel panel-success'>
						
						<div class='panel-heading'>thanks for awarding student $reg marks </div></div>";
			}else{
				echo mysql_error();
			}
}else{
		echo "<div class='panel panel-warning'>
						
	<div class='panel-heading'>It seems marks for student $reg for this section of presentation were taken, choose to update scores </div></div>";
	}
}
if(isset($_POST['Update_marks'])){
		$presentation_id=$_POST['Section'];
	$overalmarks=$_POST['pre_marks'];
	$average=$_POST['Total'];
	$grade=$_POST['Grade'];
	$comment=$_POST['Comment'];
	$reg=$_POST['Regno'];
	$sql=mysql_query("SELECT * FROM marks where presetation_id='$presentation_id'");
	$count=mysql_num_rows($sql);
	
	if($count==1){
		$get_studentid=mysql_query("SELECT * FROM project,user where reg_no='$reg' and user.u_id=project.s_id LIMIT 1");
		$row=mysql_fetch_array($get_studentid);
		$studentid=$row['u_id'];
		$projectid=$row['p_id'];
		
		
		$update=mysql_query("UPDATE marks set marks='$overalmarks',average_score='$average',comment='$comment',grade='$grade' where presetation_id='$presentation_id'");
	
			if($update){
				echo "<div class='panel panel-success'>
						
						<div class='panel-heading'>thanks for updating student $reg score details </div></div>";
			}else{
				echo mysql_error();
			}
}else{
		echo "<div class='panel panel-warning'>
						
	<div class='panel-heading'>It seems marks for student $reg for this section of presentation were never taken, choose to award scores </div></div>";
	}
	
}

//sending suggestion to db
if(isset($_POST['Suggest'])){
	$lec=$_POST['lec'];
	$reason=$_POST['Reason'];
	$uid=getfield('u_id');
	//check if suggestion already taken
	$sql=mysql_query("SELECT * from suggest where s_id='$uid'");
	$count=mysql_num_rows($sql);
	if(!empty($lec) && !empty($reason)){
	if($count>0){
		echo "<div class='panel panel-warning'>
						
	<div class='panel-heading'>It seems you already suggested the supervisor </div></div>";
	
	}else{
		//insert data
		$insert=mysql_query("INSERT INTO suggest values(NULL,'$uid','$lec','$reason')");
		if($insert){
			echo "<div class='panel panel-success'>
						
	<div class='panel-heading'>You have suggested the supervisor for your project..! </div></div>";
	
		}else{
			echo mysql_error();
		}
	}}else{
		echo "<div class='panel panel-danger'>
						
	<div class='panel-heading'>fill all fields..! </div></div>";
	}
	
}
?>