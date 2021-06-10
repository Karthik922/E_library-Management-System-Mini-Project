<?php
session_start();
include "database.php";

if(!isset($_SESSION["ID"]))
{
	header("location:ulogin.php");
}
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
			<h3 id="heading">Change Password</h3>
			<div id="center">
			<?php
			if(isset($_POST["submit"]))
			{
				$sql="SELECT * FROM student WHERE PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					$s="update student set PASS='{$_POST["npass"]}' where ID='{$_SESSION["ID"]}'";
					$db->query($s);
					echo "<p class='success'>Password changed</p>"; 
					
				}
				else
				{
					echo "<p class='error'>Invalid Password</p>"; 
					
				}
			}
			?>
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
				<label>Old Password
				<input type="password" name="opass" required>
				</label>
				<label>New Password
				<input type="password" name="npass" required>
				</label>
				<button type="submit" name="submit">Update Password</button>
				</form>
			</div>
			
		</div>
		<div id="navi">
			<?php 
			include "userSidebar.php";
			?>
		</div>
		<div id="footer">
		<p>Copyright &copy; Karthik 2020</p>
		</div>
	</div>
	</body>
</html>