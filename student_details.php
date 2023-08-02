<html>
	<head>
		<style>
			#sidebar{
		 	text-decoration:none;
		 	line-height:50px;
		 	display: block;
		 	color:black;
		 	font-size: 22px ;
		 	font-weight: bold;
		 	margin-left:15%;
		 }
		 
		 a{
		 	text-decoration: none
		 	color:white;
		 }
		 a:hover{
		 	background-color: lightgrey;
		 	color: black;
		 	
		}
		</style>
		<title>Projectmanagement update project</title>
		<?php
		require 'core.inc.php';
		$type = getfield('user_type');
		$fname = getfield('fname');
		$lname = getfield('onames');
		$email = getfield('email');
		$phone = getfield('phone');
		$regno= getfield('reg_no');
		$names = $fname . " " . $lname;
		?>
		<?php
		$getschool=mysql_query("SELECT * FROM school") or die(mysql_error());
		if (isset($_POST['update'])) {
			$id=getfield('u_id');
			$dept = $_POST['dept'];
			$title = $_POST['title'];
			$abstract = $_POST['abstract'];
			$school=$_POST['school'];
			$cat = $_POST['category'];
			$year = $_POST['period_done'];
			$tafuta="SELECT s_id FROM `project` WHERE s_id =$id";
			
			$jibu=mysql_num_rows(mysql_query($tafuta));
			
			
			
			
			
			
			if($jibu==0){
			$sql=mysql_query("INSERT INTO project(p_id,s_id,reg_no,dept,category,p_title,abstract,period_done,sch_id) values(NULL,'$id','$regno','$dept','$title','$cat','$abstract','$year','$school')");
			if($sql){
				echo "Thank You dear ".$fname." ".$lname." for submiting your project";
			}else{
				echo mysql_error();
			}}else{
				$badilisha=mysql_query("UPDATE project set abstract='$abstract' where s_id=$id");
				if($badilisha){
					echo "Thank you for update your details";
				}else{
					echo mysql_error();
				}
			 
			}
			
		}
		?>
		
		
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body style="background-color:#F5F5DC;">
		
		
		<div style="height: 60px;width: 80%; background-color: green;margin-left: 10%;">
			
			<h1 align="center">STUDENTS PORTAL</h1>
			</div>
		
		<hr />
			<div class="col-md-2" style="left: 9%;" >
					<div class="panel panel-info">
						<div class="panel-heading">Navigation</div>
						<div class="panel-body">
						
					
					<a href="index.php">Home</a><br /><br />
					<a href="student_potal.php">Profile</a><br /><br />
						</div>
					</div>
				</div>
			
		
		
		<div>
			<div>
				<?php
if(loggedin()){
				?>
				
		
<div style="background-color:#F5F5DC; ;width: 64.5%;height: 700px;margin-left:25.3% ;margin-top:-10px;border: solid 1px black;">	
	
	<div class="col-md-12">
				<form action="" method="post">
					
					
					<fieldset style="border: 1px solid black; padding: 12px">
					<legend> Please confirm your personal details here!!</legend>	
									
					<div class="row">
						<div class="col-md-2"><b> Name</b></div>
						<div class="col-md-4"><?php echo $fname.' '.$lname?></div>
					</div>
					<div class="row">
						<div class="col-md-2"><b> Email</b></div>
						<div class="col-md-4"> <?php echo $email?> </div>
					</div>
					<div class="row">
						<div class="col-md-2"><b> Phone </b></div>
						<div class="col-md-4"><?php echo $phone?></div>
					</div>
					
					<div class="row">
						<div class="col-md-2"><b> Registration Number </b></div>
						<div class="col-md-4"> 	<?php echo $regno?> </div>
					</div>
				</fieldset>
					
					<fieldset style="border: 1px solid black; padding: 12px">
					<legend>Project Details</legend>
					
						<div class="row">
						
							<div class="col-md-2"><b> School</b></div>
								
								<div class="col-md-4">
								<select name="school">
									<option value="">select school</option>
									<?php
									while ($arraysch=mysql_fetch_array($getschool)) {
										
									
									?>
									<option value="<?php echo $arraysch['sch_id']; ?>"><?php echo $arraysch['sch_name']; ?></option>
									<?php
									}
									?>
									<!--<option value="Information Technology">Information Technology</option>
									<option value="Science">Science</option>
									<option value="Business and Commerce">Bs and commerce</option>
									<option value="Engineering">Engineering</option>
									<option value="Health Science">Health Science</option>
									-->
									
									
								</select>
								</div>
								</div>
					
					
					
						<div class="row">
							
							<div class="col-md-2"><b> Department </b></div>
									<div class="col-md-4">
							
								<select name="dept">
									
									<option value="">select department</option>
									<option value="Computer Science">Computer Science</option>
									<option value="Information Technology">Information Technology</option>
									<option value="Science">Science</option>
									<option value="Business and Commerce">Bs and commerce</option>
									<option value="Engineering">Engineering</option>
									<option value="Health Science">Health Science</option>
									
								</select>
								</div>
								</div>
					
					
					<div class="row">
							
							<div class="col-md-2"><b> Project Category </b></div>
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
					
					
					
					<div class="row">
						<div class="col-md-2"><b> Project title </b></div>
						<div class="col-md-4">  <input type="text" name="title" value=""/> </div>
					</div>
					
					
					
					<div class="row">
						<div class="col-md-2"><b> Project Abstract </b></div>
						<div class="col-md-4">  <textarea name="abstract" cols="38" rows="4"/> </textarea> </div>
					</div>
					
					
					
					<div class="row">
							
							<div class="col-md-2"><b> Period Done </b></div>
									<div class="col-md-4">
							
									<select name="period_done">
									<option value="year">select period</option>
									<option value="2016/2017">2016/2017</option>
									<option value="2017/2018">2017/2018</option>
									<option value="2018/2019">2018/2019</option>
									<option value="2019/2020">2019/2020</option>
									<option value="2020/2021">2020/2021</option>
									<option value="2021/2022">2021/2022</option>
								</select>
								
								</div>
								</div>
								
								
								
								
								<div class="row">
						<div class="col-md-2"><b>  </b></div>
						<div class="col-md-4">  
							
								<button name="update" style="color: white;background-color: green;width: 200px;height: 30px;">
									Post Project details
									</button>
							
							</div>
					</div>
					
							
								
								
					
				</fieldset>
					
					
					
					
				</form>
				
				<div>
			
					<form action="doc_upload.php" method="post" enctype="multipart/form-data">
						
						<fieldset style="border: 1px solid black; padding: 12px">
					<legend>Submit Project Documentation</legend>
					<div class="row">
						<div class="col-md-3"><b>Upload project:</b></div>
						<div class="col-md-3"> <input type="file" name="file" /><br /><br />  </div>
					</div>
					
					<div class="row">
						<div class="col-md-3"><b> </b></div>
						<div class="col-md-3"> <input type="submit" value="submit project" />  </div>
					</div>
				</fieldset>
				
					</form>
				</div>
			</div>
			
			<div>
				
				
				</div>	
			<?php
			include 'footer.php';
			?>
		</div>
			<?php
			}else{
			header('location:index.php');
			}
			?>

		</div>

	</body>
</html>