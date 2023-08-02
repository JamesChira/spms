<html>
	<head>
		<?php
		require 'connect.php';
		require 'core.inc.php';
		if(isset($_POST['register'])){
			$type=$_POST['type'];
			$fname=$_POST['fname'];
			$oname=$_POST['onames'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$uname=$_POST['uname'];
			$pass=$_POST['pass'];
			$pass2=$_POST['pass2'];
			if(!empty($type)&& !empty($fname)&& !empty($oname)&& !empty($email)&& !empty($phone)&& !empty($uname)&& !empty($pass)){
				if($pass==$pass2){
			$sql="INSERT INTO user values(NULL,'$type','$fname','$oname','$email','$phone','$uname','$pass',' ',' ')";
			if(mysql_query($sql)){
				echo "Thank you ".$uname." for registering with us";
			}
				
			
			else{
				echo mysql_error();
			}}else{
			echo "Passwords dont much";	
			}
			
			}else{
				
			echo "<i style='color:red;font-weight:bold;font-size:19;'> *You have to fill all fields Please!!</i>";
		}}
		



		?>
		<title> student Project management register</title>
	</head>
	<body bgcolor="lightgrey">
		<div style="background-color: green;height: 100px;width: 800px;margin-left: 20%">
			<h1 style="text-align: center ;font-size:45;">Student Project Management  System </h1>
			</div>
		<div align="center"  style="width:800px;height: 300px;margin-left: 270px;top:20px;border: solid 1px black;">
		<form method="post" action="">
			<fieldset>
			<legend>
					<h2>Please register here!!</h2>
				</legend>
				<table>
					<tr>
						<td>User type <b style="color: red">*</b></td>
						<td>
							<select name="type">
								<option value="">Select user type</option>
									<option value="Student">Student</option>
									<option value="lecturer">Lecturer</option>
								</select></td>
						
						</td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td>
						<input type="text" name="fname" size="50" placeholder="first name required" />
						</td>
					</tr>
					<tr>
						<td>Other names:</td>
						<td>
						<input type="text" name="onames" size="50" placeholder="other names needed" />
						</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>
						<input type="email" name="email" size="50" placeholder="email needed" />
						</td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td>
						<input type="text" name="phone" size="50" maxlength="10" placeholder="phone needed" />
						</td>
					</tr>
					<tr>
						<td>Username:</td>
						<td>
						<input type="text" name="uname" size="50" placeholder="choose username" />
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>
						<input type="password" name="pass" size="50" placeholder="choose password" />
						</td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td>
						<input type="password" name="pass2" size="50" placeholder="Retype password" />
						</td>
					</tr>
					<tr>
						<td>
						<button name="register" style="color: white;background-color: green;width: 180px;height: 30px;">
							Register
						</button></td>
					</tr>

				</table>
		
</fieldset>
		</form>
		</div>
		<hr />
		<div>

		<?php
		include'footer.php';
		?>
		</div>

	</body>
</html>