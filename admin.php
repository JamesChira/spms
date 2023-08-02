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
		
		?>
		
	</head>
	<body bgcolor="lightgrey">
		
		
		<div style="height: 100px;width: 80%; background-color: green;margin-left: 10%;">
			
			<h1 align="center">Administrator PORTAL</h1>
			</div>
		
		<div>
			<div>
				<?php
if(loggedin()){
				?>
				<div id="" style=" height: 800px;width: 200px;background-color: green;margin-left: 10%;border: solid 1px black;" >
			

			
				<div id="sidebar">
			<ul>
					<li ><a href="index.php">Home</a></li><br />
					<li ><a href="student_potal.php">Profile</a></li><br />
					
		
					
					</ul>
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