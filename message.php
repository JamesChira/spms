
<?php
include 'connect.php';

?>

<html>
	<head>
		<title>spms message</title>
		
		
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<?php
		include 'header.php';
		?>
		<div class="panel-heading" style="text-align: center"><a href="lecturer_portal.php" role="button" class="btn btn-success" style="float: left;width: 100px">&lt;&lt; Back</a> <h2></h2></div>
		<hr />
		
		
		
		<?php
				session_start();
				if (isset($_GET['id'])) {
				$_SESSION['id']=$_GET['id'];
				}
				$id = $_SESSION['id'];
				$sql=mysql_query("SELECT * FROM user where user.u_id='$id'");
				$row=mysql_fetch_array($sql);
				$names=$row['fname']." ".$row['onames'];
			
				
				?>
				
	
				
				
				
				
				
		<div  align="center"   class="panel panel-success"  style="width: 600px;margin-left: 20%">
						<div class="panel-heading">send message here</div>
						<div class="panel-body">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			
			
  
	<div class="row">
						<div class="col-md-2"><b> Name:</b></div>
						<div class="col-md-4"><?php echo $names ?></div>
						
					</div><br />

	<div class="row">
						<div class="col-md-2"><b> message:</b></div>
						<div class="col-md-5">
							
							<textarea name="content" rows="10" cols="41" placeholder="Message..." required/ ></textarea>
							
						</div>
					</div><br />

       <input type="submit" name="send" value="Send"  />

</form>
	
					<?php
					
						if (isset($_POST['send'])) {
						$content = $_POST['content'];
							$id = $_SESSION['id'];
						$update = mysql_query("INSERT INTO message VALUES(NULL,'$id','$names','$content')");
						if ($update) {
							echo "Message sent successifuly!!";
						}
					}
						
						
						
						?>
	</div>
	</div>
		
		<hr />
		
		
	</body>
</html>