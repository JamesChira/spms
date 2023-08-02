<html>
	<head>
		<?php
		require 'core.inc.php';
		?>
		
		
		
		
		
		<style>
	
		</style>
		
		
			<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<title>Students Project management system</title>
	</head>
	<body style="background-color:#F5F5DC; ">
		
		<nav style="width: 90%; margin-left: 5%;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student Project Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
     
					<li><a href="login.php">Lecturer portal</a></li>
						<li><a href="studentlogin.php">Student portal</a></li>
							<li><a href="cordinator/login.php">project cordinator</a></li>
							<li><a href="past_project_done.php">Projects</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="faq.php">FAQs</a></li>
							
    </ul>
   
    
  </div>
  
</nav>
					
			<hr />
				
				
			
			<div class="panel-body">
		
		<div class="row">
<div  style="margin: 3px;position: absolute;width: 80%;height: 400px;margin-left:5% ;">
			
				
	
			
			
		
			
			<script language="JavaScript">
var i = 0;
var path = new Array();
 
// LIST OF IMAGES
path[0] = "images/imagea.jpg";
path[1] = "images/imageb.jpg";

function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   setTimeout("swapImage()",3000);
}
window.onload=swapImage;
</script>

<img src="images/imagea.jpg" name="slide" width="80%" height="400px"/>
				
		
			</div>
			

		</div>
			
		</div>
				
			
			
	
			<div class="panel-body">
		
		<div class="row">

			<div class="col-md-3" style="margin-left:70%;" >
			<h2 align="center">Terms</h2>
			
				<p style="margin: 20px;">
					
					The following available projects in the site, are there to inform anyone who wishes to take his/her project in the respective area of study that they have already been done in the past years.
				 Therefore, you are not expected to come up with a project or an idea simmilar to the one already done as a project and preseented to us. To all the users of this system, this are the terms and conditions of 
				 this system. Anybody violeting them, his/her project should be considered to have violeted the copyright rules of the W3C consortium.
			
				
					</p>
					</div>
		
		</div>
		</div>
	<hr />
		<div>
			<?php
			require 'footer.php';
			?>
		</div>
	</body>
</html>