<?php
session_start();
include "database.php";
function countRecord($sql,$db)
{
	$res=$db->query($sql);
	return $res->num_rows;
}
if(!isset($_SESSION["AID"]))
{
	header("location:alogin.php");
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
				$sql="SELECT * FROM admin WHERE APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}'";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					$s="update admin set APASS='{$_POST["npass"]}' where AID='{$_SESSION["AID"]}'";
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
			include "adminSidebar.php";
			?>
		</div>
		<div id="footer">
		<p>Copyright &copy; Karthik 2020</p>
		</div>
	</div>
	</body>
</html>