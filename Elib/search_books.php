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
			<h3 id="heading">Search Book</h3>
			<div id="center">
			
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
				
				<label>Enter Book Name or keywords
				</label>
				<input type="text" name="name" required>
				<button type="submit" name="submit">Search Now</button>
				</form>
			</div>
			<?php
			if(isset($_POST["submit"]))
			{
			$sql="SELECT * FROM book WHERE BTITLE LIKE '%{$_POST["name"]}%' or KEYWORDS LIKE '%{$_POST["name"]}%'";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo "<table>
					<tr>
						<th>BNO</th>
						<th>BOOK NAME</th>
						<th>KEYWORDS</th>
						<th>VIEW</th>
						<th>COMMENT</th>
					</tr>
				";
				$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["BTITLE"]}</td>";
					echo "<td>{$row["KEYWORDS"]}</td>";
					echo "<td><a href='{$row["FILE"]}' target='_blank'>View</a></td>";
					echo "<td><a href='comment.php?id={$row["BID"]}'>Go</a></td>";
					
					echo "</tr>";
				}
				echo "</table>";
			}
			else
			{
				echo "<p class='error'>No BOOKs Records Found</p>";
			}
			}
			?>
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