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
			<h3 id="heading">View comments  Details</h3>
			<?php
			$sql="SELECT book.BTITLE,student.NAME,comment.COMM,comment.LOGS FROM comment INNER JOIN book on book.BID=comment.BID INNER JOIN student on comment.SID=student.ID";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo "<table>
					<tr>
						<th>SNO</th>
						<th>BOOK</th>
						<th>NAME</th>
						<th>COMMENT</th>
						<th>LOGS</th>
					</tr>
				";
				$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["BTITLE"]}</td>";
					echo "<td>{$row["NAME"]}</td>";
					echo "<td>{$row["COMM"]}</td>";
					echo "<td>{$row["LOGS"]}</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
			else
			{
				echo "<p class='error'>No comments Found</p>";
			}
			?>
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