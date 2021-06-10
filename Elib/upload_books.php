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
			<h3 id="heading"> upload Books</h3>
			<div id="center">
			<?php
			if(isset($_POST["submit"]))
			{
				$target_dir="upload/";
				$target_file=$target_dir.basename($_FILES["efile"]["name"]);
				if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
				{
				$sql="insert into book(BTITLE,KEYWORDS,FILE) values('{$_POST["bname"]}','{$_POST["keys"]}','{$target_file}')";
				$db->query($sql);
				echo "<p class='success'>Book Uploaded Success </p>";
				}
				else
				{
					echo "<p class='error'></p>";
				}
			}
			?>
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
				<label>Book TiTle
				<input type="text" name="bname" required>
				</label>
				<label>Keywords
				<textarea name="keys" required></textarea>
				</label>
				<label>Upload File
				<input type="file" name="efile" required>
				</label>
				<button type="submit" name="submit">Upload Books</button>
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