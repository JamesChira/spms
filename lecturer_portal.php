<html>
	<head>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
			}
			th {
				background-color: green;
				font-size: 20;
				font-weight: bold;
			}
			table, th, td, tr {
				border: 1px solid black;
			}
		</style>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<?php
		require 'core.inc.php';
		$fname = getfield('fname');
		$oname = getfield('onames');
		$type = getfield('user_type');
		$names = $fname . " " . $oname;
		$id1 = getfield('u_id');
		$sql = mysql_query("SELECT * FROM project where user.u_id=$id1");
		//$result=mysql_fetch_assoc($sql);
		$result2 = mysql_query("SELECT * from user inner join project inner join status where user.u_id=project.l_id=status.lec_id");
		$row2 = mysql_fetch_assoc($result2);
		?>
		<title>Projectmanagement Lecturers</title>
	</head>
	<?php
if(loggedin()){
if($type=="lecturer"){

	?>

	<body style="background-color:lightgrey ">

		<div style="width: 90%;height: 100px;background-color: green;margin-left: 5%;">

			<h1 align="center">Lecturer <?php echo $names."'s" ?> Portal</h1>
		</div>
		<hr />
<div class="row" >
				<div class="col-md-2" style="left: 5%;" >
					<div class="panel panel-info">
						<div class="panel-heading">Navigation</div>
						<div class="panel-body">
							<a href="index.php">Home</a><br />
							<a href="project_schedule.php">project schedule</a>
						</div>
					</div>
				</div>
		<div class="row">

			<div class="col-md-3" style="left: 10%; background-color: #F5F5DC;" >
				

				<div align="center" style="height:auto;border-radius: 5px">
					
					<div class="panel-heading">
						<h2 style=" color:black";> Students Supervising.</h2>
					</div>

				
					<hr />
					<?php
					$jaribu = mysql_query("select * from user, project where user.u_id=project.s_id and project.l_id=$id1");
					while ($pata = mysql_fetch_assoc($jaribu)) {
						$id=$pata['u_id'];
						
						
						echo "<a href='sprofile.php?id=$id'>";
						echo $pata['fname'] . " ";
						echo $pata['onames'];
						echo "</a>";
					
						echo "<br>";
					}
					?>
				</div>
			</div>
			<div class="col-md-8" style="width: 550px;left:13% ;">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2 style=" color:black";> Please Update your profile here.</h2>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4">
								<b> Update your School</b>
							</div>
							<form method="post" enctype="multipart/form-data">
								<div class="col-md-4">
									<select name="school">
										<option value="">Select school</option>
										<option value="Computer Science">Computer science/IT</option>
										<option value="bs">Business</option>
										<option value="eng">Engineering</option>
										<option value="tour">Tourism</option>
										<option value="Science">Science</option>
									</select>
								</div>
						</div>
						<hr />
						<div class="row">
							<div class="col-md-4">
								<b>Update your Dept </b>
							</div>
							<div class="col-md-4">
								<select name="dept">
									<option value="select_dept">select department</option>
									<option value="Computer Science">Computer Science</option>
									<option value="Information Technology">Information Technology</option>
									<option value="Science">Science</option>
									<option value="Business and Commerce">Bs and commerce</option>
									<option value="Engineering">Engineering</option>
									<option value="Health Science">Health Science</option>
								</select>
							</div>
						</div>
						<hr />
						<div class="row">
							<div class="col-md-4">
								<b> Update your research category</b>
							</div>
							<div class="col-md-4">
								<select name="category">
									<option value="">Select Category</option>
									<option value="health">Health</option>
									<option value="education">Education</option>
									<option value="agrics">Agriculture</option>
									<option value="admin">Administration</option>
									<option value="finance">Finance</option>
									<option value="human technology">Human Language Technology</option>
									<option value="ict4d">ICT4D</option>
									<option value="Web based">Web based</option>
									<option value="Android System">Android system</option>
								</select>
							</div>
						</div>
						<hr />
						<div class="row">
							<input type="submit" name="update" id="update" role="button" class="btn btn-success" value="Update Area" />
						</div>
					</div>
					</form>
					<?php
					if (isset($_POST['update'])) {
						$school = $_POST['school'];
						$dept = $_POST['dept'];
						$cat = $_POST['category'];
						$id = getfield('u_id');
						$update = mysql_query("INSERT INTO lecturer VALUES(NULL,'$id','$school','$dept','$cat')");
						if ($update) {
							echo "Thank you";
						}
					}
					?>
				</div>
			</div>
		</div>
		<?php
		}
		else {
		echo "ACCESS Denied!!.. Students are kept out of this page";
		}}
		else{
		header('location: index.php');

		}
		?>

		<hr />
		<div class="panel-footer" >
			<?php
			include 'footer.php';
			?>
		</div>
	</body>
</html>