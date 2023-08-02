<html>
	<head>
		<?php
		require 'connect.php';
		require 'core.inc.php';
		if(isset($_POST['ask'])){
			$name=$_POST['name'];
			$question=$_POST['quiz'];
			$weka=mysql_query("INSERT INTO faq(f_id,question,name) values(NULL,'$question','$name')");
		}
		?>
	</head>
	<body bgcolor="lightgrey">
		<div style="height: 100px;width: 80%; background-color: green;margin-left: 10%;">
			
			<h1 align="center">STUDENTS PROJECT MANAGEMENT SYSTEM</h1>
	
			</div>
		<hr />
		<div style="height: auto;width: 80%;margin-left: 10%;border: 1px solid black;border-radius: 5px">
			<h1>These are some of the frequently asked questions!!</h1>
			<hr />
	
		<div>
			<form method="post">
				<p>
					Ask question.
				</p>
				<table>
				<tr>
					<td> Name:</td><td>
					<input type="text" name="name" />
					</td>
				</tr>
				<tr valign="top">
					<td > Question: </td><td>					<textarea name="quiz" cols="20" rows="8"></textarea></td>
				</tr>
				<tr>
					
					<td><button name="ask" style="color: white;background-color:green; height: 30px;width: 130px;">ASK</button></td>
				</tr>
				</table>
			</form>
			<?php
			$sql = mysql_query("SELECT * from faq");
			while ($pata = mysql_fetch_assoc($sql)) {
				echo "Question " . $pata['question'] . "<br>";
				echo "Posted by: " . $pata['name'] . "<br>";
			}
			?>
		</div>
			</div>
		<hr />
		<div>
			<?php
			include'footer.php'
			?>
		</div>
	</body>

</html>