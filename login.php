
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		
			<div class="container-fluid">
				<?php
				require 'header.php';
				?>
			</div>
		<p>

		</p>
		<p>
		
		</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				
				<div class="col-md-3"></div>
			</div>
			<div class="row">

				<div class="col-md-1"></div>
				<div class="col-md-8">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h1>Lecturer log in</h1> 
						</div>
						<div class="panel-body" style="margin: 14px;">
							
							
							
							
							
							
							
							
							
							<form method="post" action="login_method.php" enctype="multipart/form-data">
				
							<div class="row">
							<label for="usertype">Lecturer</label>
							<input  type= "radio"  name= "type"   value="lec" checked /> 
								
								</div>
								
								
								<div class="row">
									<label for="email">Email</label>
									<div class="col-md-12 input-group ">
										<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
								<input type="text" name="email" size="25"  placeholder="email required"   class="form-control" />
									</div>
								</div>
								
						<div class="row">
									<label for="password">Password</label>
									<div class="col-md-12 input-group">
										
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="pass" size="25"  placeholder="************"  class="form-control" />
								</div>
								</div>
								
								<p><br /></p>
								<div class="row">
									<div class="col-md-12">
										
										
													<button name="login"  class="btn btn-success" >
					Log In
					
					</button>
										
									</div>
								</div>
								
				</form>
							
			
						</div>
						
					</div>
				</div>
			</div>
			<div class="panel-footer">footer</div>
		</div>
	</body>
</html>