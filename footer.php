<html>
	<head>
		<style>
			ul{
				padding: 2px;
				
			}
			li{
				display: inline;
				border-right: 1px solid black;
				font-size: 20;
				font-weight: bold;
			}
			li a{
				text-decoration: none;
			}
		</style>
	</head>
	<?php
	//include 'core.inc.php';
	?>
	<body style="background-color: lightgrey">
		<div  class="panel-footer" style="text-align: center;">
			<ul>
						<li><a href="index.php" >Home</a></li>
						<?php
						if(loggedin()){
							?>
						<li><a href="signout.php">Log Out</a> (<?php echo getfield('fname'); ?>)</li>
						<?php
						}
						?>
						
					</ul>
					
					<script type="text/javascript">
						document.write(
"&copy;  " + new Date().getFullYear() + " SPMS. All rights reserved.<div style='float:right;color:black;font-style:italic;font-weight:bold;margin-right:25px;'> site by: James Chira</div>");
					</script>
		</div>
	</body>
</html>