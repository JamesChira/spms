<?php
	
include 'connect.php';
			$file = $_FILES['file']['name'];
			$size = $_FILES['file']['size'];
			$type = $_FILES['file']['type'];
			$tmp_name = $_FILES['file']['tmp_name'];
			move_uploaded_file($tmp_name,"documents/$file");
		
		$sql = mysql_query("UPDATE project set project_document='$file' ");
		if(isset($name)){
			if(!empty($name)){
				
				$location='documents/';
				
				if(move_uploaded_file($tmp_name,$location.$name)){
					echo'document uploaded!!';
				}
				else{
					echo'There was an error';
				}
			}
			else{
				echo'please choose a file';
			}
		}
		 
		 
		?>