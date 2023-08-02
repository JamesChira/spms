<html>
	<head>
		<style>
		
			
		
		</style>
		<?php
		require 'core.inc.php';
		$fname=getfield('fname');
		$sname=getfield('onames');
		$names=$fname." ".$sname;
		
		?>
		<title> student Project management status</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body style="background-color: #F5F5DC">
			<div style="height: 100px;width: 80%; background-color: green;margin-left: 10%;">
			
			<h1 align="center">STUDENTS PORTAL</h1>
			<h2 align="center">Messages</h2>
			</div>
		
		<hr />
		
		<div class="col-md-2" style="left: 9%;" >
					<div class="panel panel-info">
						<div class="panel-heading">Navigation</div>
						<div class="panel-body">
						<a href="student_potal.php">portal</a>	<br /><br />
		<a href="student_details.php">Project</a><br /><br />
				
					
						</div>
					</div>
				</div>
				
				
				<div class="container-fluid"  >
				<div class="row">
					
					<div class="col-md-8" style="left: 8%;" >
						<div class="panel panel-info">
						<div class="panel-heading" align="center"> <h3>Dear <?php echo $names;?> .This are the Messages from your Supervisor .</h3></div>
						<div class="panel-body">
				
		<div style=" height: auto;">
		
		
			<form method="post" action="">
				<?php
				$id=$_GET['id'];
				$sql=mysql_query("SELECT * FROM message WHERE s_id='$id'");
				
while ($row=mysql_fetch_assoc($sql)) {
	echo "<table>";
	echo "<th>message from your supervisor</th>";
	echo "<tr>";
		echo "<tr>";
	echo "<td>message</td>";
	echo "<td style='color:green;font-size:20;font-weight:bold;'>". $row['content']."</td>";
	echo "</tr>";
	echo "</table>";
}
?>

				
			</form>
			
		
		</div>
		</div>
		</div>
		</div>
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