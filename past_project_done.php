	<html>
		<head>
			<title>past_done_project</title>
			
			<style>
				
			
					
				table {
				border-collapse: collapse;
				width: 100%;
			}
			th {
				background-color:  #F5F5DC ;
				font-size: 20;
				font-weight: bold;
			}
			table, th, td, tr {
				
			}
			</style>
					
			<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
			</head>
			<body style="background-color:">
				
				<?php
				require 'header.php';
				?>
	 <div class="panel-heading"  style="text-align: center;"><h3>project Abstract</h3></div>
			
	
			
		
		
				
				
				<hr>
				<div style="width: 90%;height: auto;margin-left: 5%;  ">
					
					
					<div class="panel-body">
					
					
				<?php
				include 'connect.php';
				include 'core.inc.php';
				
				$result=mysql_query("SELECT * from user inner join project where user.u_id=project.s_id");
				
				
				
				  echo "<table class='table table-hover'><tr><th>Registration Number</th><th>
          Student names</th><th>Project Titles</th><th>Abstract</th><th>Project Category</th>
          
          <th>Year done</th><th>Project Document</th></tr>";
				
				
				for($i=1;$i<=100;$i++){
					
				while($row=mysql_fetch_assoc($result))
{
            echo "<tr><td>".$row['reg_no']."</td><td>".$row['fname'] ." ". $row['onames']."</td><td>".$row['p_title'].
            "</td><td>".$row['abstract']."</td><td>".$row['category']."</td><td>".$row['period_done']."</td>
            <td>".$row['project_document']."</td></tr>";
        
          }
          echo "</table>";
        }
?>

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
				