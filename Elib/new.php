<?php
include "database.php";
?>

<!DOCTYPE html>
<html>
	<head>
	<title>SKK Creation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<h1></h1>
	<div id="container">
		<div id="header">
		<h1>E-Library Management System</h1>
		</div>
		<div id="wrapper">
			<h3 id="heading"> New User Registration </h3>
			<div id="center">
			<?php
			if(isset($_POST["submit"]))
			{
			$sql="insert into student(NAME,PASS,MAIL,DEP) values('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dep"]}')";
				$db->query($sql);
				echo "<p class='success'>User Registration Success</p>";
			}
			?>
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
				<label>Name 
				<input type="text" name="name" required>
				</label>
				<label>Password
				<input type="password" name="pass" required>
				</label>
				<label>Email ID
				</label>
				<input type="email" name="mail" required>
				<select name="dep" required>
				<option value="">Select</option>
				<option value="MCA">MCA</option>
				<option value="MECH">MECH</option>
				<option value="CSE">CSE</option>
				<option value="IT">IT</option>
				
				</select>

				
				
				<button type="submit" name="submit">Register Now</button>
				</form>
			</div>
			
		</div>
		<div id="navi">
			<?php 
			include "sideBar.php";
			?>
		</div>
		<div id="footer">
		<p>Copyright &copy; Karthik 2020</p>
		</div>
	</div>
	</body>
</html>