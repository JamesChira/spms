<html>
	<head>
		<?php
		require 'core.inc.php';
		$type=getfield('user_type');
		$fname=getfield('fname');
		$lname=getfield('onames');
		$emal=getfield('email');
		
		?>
	</head>
	<body>
		<?php
		if(loggedin()){
			
			?>
		<div>
			Welcome: <?php 
			echo $type." ".$fname." ".$lname." email= ".$emal; 
			 ?>
		</div>
		<?php
		}?>
		
	</body>
</html>