<html>
	<head>
		<style>
			
		
		</style>
		<title> students Project management system </title>
		<?php
		require 'core.inc.php';
		$photo=getfield('pic');
		$type=getfield('user_type');
		if(loggedin()){
			if($type=="Student"){
		if (isset($_POST['change'])) {
			$id = getfield('u_id');
			$dir = 'images/';

			$file = $_FILES['image']['tmp_name'];
			//$imagetype=$file['mime'];
			if (!isset($file)) {
				echo 'Please select an Image';
			} else {
				$image_check = getimagesize($_FILES['image']['tmp_name']);
				if ($image_check == false) {
					echo 'Not a Valid Image';
				} else {
					$fileName = basename($_FILES['image']['name']);
					$tmpName = $_FILES['image']['tmp_name'];
					$fileSize = $_FILES['image']['size'];
					$fileType = $_FILES['image']['type'];
					$filePath = $dir . $fileName;
					$image = ($_FILES['image']['tmp_name']);
					$photo = basename($_FILES['image']['name']);
					//$photos=basename($_FILES[$dir]['name']);
					$sql = mysql_query("UPDATE user set pic='$filePath' where u_id='$id'");
					if ($sql) {
						echo "thank you";
					} else {
						echo mysql_error();
					}

					if (move_uploaded_file($tmpName, $dir . $fileName)) {
						
						echo "You have uploaded your image..";
					} else {

						echo "image not stored";
					}
				}
			}
		}
		?>

		<?php

		$sql = mysql_query("SELECT * from user");

		$search = mysql_fetch_assoc($sql);
		//$id = $search['u_id'];
		$id=getfield('u_id');
		$fname = getfield('fname');
		$sname = getfield('onames');
		$names = $fname . " " . $sname;

		if (isset($_POST['profile'])) {
			header('location: student_details.php');
		} elseif (isset($_POST['status'])) {
			header('location: status.php');
		}
		?>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body style="background-color: #F5F5DC">
		<p><br /></p>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8">
			<div id="sug_msg">
				<!--suggestion message displayed here-->
				
			</div>
			</div>
		</div>
		
			<div style="width: 90%;height: 50px;background-color: green;margin-left: 5%;">
			
				<h1 align="center">STUDENT <?php echo $names."'s" ?> Portal</h1>
			</div>
		
	<hr />
			<div class="col-md-2" style="left: 5%;" >
					<div class="panel panel-info">
						<div class="panel-heading">Navigation</div>
						<div class="panel-body">
							
						<a href="student_details.php">Project</a><br /><br />
					<?php
					echo "<a href='status.php?id=$id'>" . "messages" . "</a>";
					?> <br /><br />
					
						<a href="" data-toggle="modal" data-target="#suggest">Suggest supervisor</a><br /><br />
						<a href="marks.php" >View marks</a><br /><br />
						<a href="student_schedule.php" > Project schedule</a>
					
						</div>
					</div>
				</div>
			

						<!-- Modal -->
<div class="modal fade" id="suggest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Suggest your suppervisor here</h4>
      </div>
      <div class="modal-body">
        	<form method="post">
        		<div class="row">
        			<div class="col-md-3">
        				<label>Supervisor Name</label>
        			</div>
        			<div class="col-md-3">
        				<input type="text" id="supervisor" />
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-3">
        				<label>Reason</label>
        			</div>
        			<div class="col-md-3">
        				<textarea id="reason" cols="50" rows="4">	</textarea>
        			</div>
        		</div>
        		
        		<div class="row" style="margin: 4px;text-align: center">
        			<input type="submit" class="btn btn-success" id="sug" value="Suggest" />
        		</div>
        	</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
					
				
				
				<div class="container-fluid"  >
				<div class="row">
					
					<div class="col-md-8" style="left: 10%;" >
						<div class="panel panel-info">
						<div class="panel-heading" align="center">Upload Your Image here</div>
						<div class="panel-body">
					
						<div style="width: 776px;height: 450px;margin-top: -10px;background-color:;">
			
						<div align="center">
						<img  src="<?php echo $photo; ?>"  width="250px" height="250px" />
						
						</div>
				<hr />
		
									<div align="center" style="background-color:">
			<form method="post" action="" enctype="multipart/form-data">
			
					<legend style="color: black;font-weight: bold;font-style: italic;">
					    photo upload 
					</legend>



	
								<div class="row">
									
									<div class="col-md-12 input-group ">
									
								<input type="file" name="image" />
									</div>
								</div>
								
									<div class="row">
									<div class="col-md-12">
										
										
													<button name="change"  class="btn btn-success" >
					Update Image
					
					</button>
										
									</div>
								</div>
								
					
			
			</form>
		</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					
						
			
	
		
		<?php
		}else{
			echo "ACCESS DENIED!!!. Students are the only ones to view this part.";
		}}else{
			header('location:index.php');
		}?>
		<hr />
		<div>
			<?php
			include 'footer.php';
			?>
		</div>
		
	</body>
</html>