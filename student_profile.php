<html>

	<head>
		<style>
		textarea{
			background-color: green;
			font-size: 17;
			font-family: Times;
			font-weight: bold;
		}
			ul {
				padding: 2px;
			}
			#a li {
				font-size: 20;
				background-color: green;
				color: black;
			}
			#a li a {
				text-decoration: none;
				color: black;
			}
		</style>
		<title>Projectmanagement comment profile</title>
		<?php
		require 'connect.php';
		require 'core.inc.php';
		$id = $_GET['id'];
		$fname = getfield('fname');
		$oname = getfield('onames');
		$names = $fname . " " . $oname;
		$lec_id = getfield('u_id');
		@$sup = $_POST['sup'];
		@$status = $_POST['comment'];
		if (isset($_POST['status'])) {
			if ($sup == "Yes") {
				$tafuta = "SELECT student_id FROM `status` WHERE student_id =$id";

				$jibu = mysql_num_rows(mysql_query($tafuta));
				
				if ($jibu == 0) {
					$kwanza = mysql_query("INSERT INTO status values(NULL,'$id','$names','$lec_id','$sup','$status')");
					if ($kwanza) {
						$pili = mysql_query("UPDATE project set Supervisor='$names',l_id=$lec_id where project.s_id=$id");
						if ($pili) {
							echo "Thank you lecturer " . $names . " for choosing to supervise a project";
						} else {
							echo mysql_error();
						}
					}
				} elseif($jibu==1) {
					
					$hebu = mysql_query("UPDATE status set Supervisor='$names',lec_id='$lec_id',status='$status' where student_id=$id");
					$pili = mysql_query("UPDATE project set Supervisor='$names',l_id=$lec_id where project.s_id=$id");
					if ($hebu) {
						echo "Thanx for keeping us upto date";
					} else {
						echo mysql_error();
					}
				}
			} elseif ($sup == "No") {
				echo "<u style='color:red;text-decoration:none;'>* You can not comment this student because you dont supervise him/her</u>";
			} else {
				echo mysql_error();
			}

		}
		?>
	</head>
	<body bgcolor="lightgrey">
		<div style="background-color: green ;width:80%; height: 100px;margin-left: 10%;">
			<h1 align="center">STUDENT PROJECT MANAGEMENT SYSTEM</h1>
			
		<div id="a">
			<ul>
				<li id="a">
					<a href="lecturer_portal.php">Back</a>
				</li>
			</ul>
		</div>
		</div>
		<hr />
		<div style="height: 500px;width: 80%;margin-left: 10%;border: solid 1px black;">
		<?php

///query'
$sql=mysql_query("SELECT fname,onames,phone,email,pic FROM user WHERE u_id='$id'");
while ($row=mysql_fetch_assoc($sql)) {
echo "<table>";
echo "<tr>";
echo "<td style='colspan:3;'>";
?>
<?php
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2'>";
?>
<img src="<?php echo $row['pic']; ?>"  width="200px" height="200px" />
<?php
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Names: </td>";
echo "<td>" . $row['fname'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Other names</td>";
echo "<td>" . $row['onames'] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Phone Number</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "</tr>";
echo "</table>";
?>

<div>

<form method="post" action="">
<fieldset>
<legend style="color: blue;"> Lecturer <?php  echo $names ?>, do you choose to supervise student <?php echo $row['fname'].' '.$row['onames']?></legend>
<?php
}
?>
<table><tr>
<td>
Supervise: </td><td><input type="radio" name="sup" value="Yes" checked="checked"/>Yes  <input type="radio" name="sup" value="No" />No</td>
</tr>
<tr valign="top"><td >message:</td>
<td><textarea name="comment" value="comment" cols="26" rows="5" ></textarea></td></tr>
<tr><td><button name="status" style="color: white;background-color: green;width: 180px;height: 30px;">
Send 
</button></td>
</tr></table>
</fieldset>

</form>
</div>
</div>
<hr />
<div>
<?php
include 'footer.php';
		?>
		</div>
	</body>
</html>
