<?php
include 'connect.php';

?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body style="background-color: lightgrey">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1">
					
				</div>
				<?php
				$id=$_GET['id'];
				
				$sql=mysql_query("SELECT * FROM user, project, marks,presentation where marks.presetation_id=1 and marks.presetation_id=presentation.presentation_id and marks.s_id=user.u_id and marks.project_id=project.p_id and user.u_id='$id' and user.u_id=project.s_id");
				$sql1=mysql_query("SELECT * FROM user, project, marks,presentation where marks.presetation_id=2 and marks.presetation_id=presentation.presentation_id and marks.s_id=user.u_id and marks.project_id=project.p_id and user.u_id='$id' and user.u_id=project.s_id");
				
				$sql2=mysql_query("SELECT * FROM user, project, marks,presentation where marks.presetation_id=3 and marks.presetation_id=presentation.presentation_id and marks.s_id=user.u_id and marks.project_id=project.p_id and user.u_id='$id' and user.u_id=project.s_id");
				$sql3=mysql_query("SELECT * FROM user, project where user.u_id='$id' and user.u_id=project.s_id");
				$row=mysql_fetch_array($sql);
				$row2=mysql_fetch_array($sql1);
				$row3=mysql_fetch_array($sql2);
				$names=$row['fname']." ".$row['onames'];
				$email=$row['email'];
				$reg_no=$row['reg_no'];
				$dept=$row['dept'];
				$p_title=$row['p_title'];
				$cat=$row['category'];
				$abstract=$row['abstract'];
				$marks=$row['average_score'];
				$presentation_name=$row['presentation_name'];
				$comment=$row['comment'];
				$grade=$row['grade'];
				$comment2=$row2['comment'];
				$grade2=$row2['grade'];
				$comment3=$row3['comment'];
				$grade3=$row3['grade'];
				
				
				?>
				<div class="panel panel-success">
					<div class="panel-heading" style="text-align: center"><a href="lecturer_portal.php" role="button" class="btn btn-success" style="float: left;width: 100px">&lt;&lt; Back</a> <h2>Student <?php echo $names."'s"; ?> Details</h2></div>
					<div class="panel-body">
					<div class="col-md-3" style="">
					<!--lect pic--->
					<img src="" style="height: 200px;width: 100%;" />
				</div>
				
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-2"><b>Names</b></div>
						<div class="col-md-4"><?php echo $names ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Email</b></div>
						<div class="col-md-4"><?php echo $email ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Registration Number</b></div>
						<div class="col-md-4"><?php echo $reg_no ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Department</b></div>
						<div class="col-md-4"><?php echo $dept ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Project title</b></div>
						<div class="col-md-4"><?php echo $p_title ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Category</b></div>
						<div class="col-md-4"><?php echo $cat ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Abstract</b></div>
						<div class="col-md-4"><?php echo $abstract ?></div>
					</div>
					<hr />
					<fieldset style="border: 1px solid black; padding: 12px">
					<legend> Proposal presentation</legend>	
									
					<div class="row">
						<div class="col-md-2"><b> Grade</b></div>
						<div class="col-md-4"><?php echo $grade ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b> Comment</b></div>
						<div class="col-md-4"><?php echo $comment ?></div>
					</div>
				</fieldset>
				<fieldset style="border: 1px solid black; padding: 12px">
					<legend>Progress presentation</legend>
					<div class="row">
						<div class="col-md-3"><b>Grade</b></div>
						<div class="col-md-3"><?php echo $grade2 ?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><b>Marks</b></div>
						<div class="col-md-3"><?php echo $row2['average_score'] ?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><b>Comment</b></div>
						<div class="col-md-3"><?php echo $comment2 ?></div>
					</div>
				</fieldset>
				<fieldset style="border: 1px solid black; padding: 12px">
					<legend>Final presentation</legend>
					<div class="row">
						<div class="col-md-2"><b>Grade</b></div>
						<div class="col-md-4"><?php echo $grade3 ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Marks</b></div>
						<div class="col-md-4"><?php echo $row3['average_score'] ?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b>Comment</b></div>
						<div class="col-md-4"><?php echo $comment3 ?></div>
					</div>
				</fieldset>
					<hr />
					<div>
					<div class="panel-heading" style="text-align: center"><a href="message.php?id=<?php echo $_GET['id'];?>" role="button" class="btn btn-success" style="float: left;width: 500px">&lt;&lt; send message to the student</a>
						
						

						 </div>	
					</div>
				</div>
				</div>
				</div>
				<div class="panel-footer" style="text-align: center">Student details</div>
				
			</div>
			
		</div>
		
	</body>
	
</html>