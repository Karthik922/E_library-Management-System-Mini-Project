<!DOCTYPE html>
<html>
	<head>
	<title>SKK Creation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
.box > div{
	position:absolute;
}
h1{
	text-align:center;
}
</style>
	</head>
	<body>
	<h1></h1>
	<div id="container">
		<div id="header">
		<h1>E-Library Management System</h1>
		</div>
		<div id="wrapper">
				<div class="box">
					<div><img src="img/1.jpg" height="400" width="500"> </div>
					<div><img src="img/2.png" height="400" width="500"> </div>
					<div><img src="img/3.jpg" height="400" width="500"> </div>
					<div><img src="img/4.jpg" height="400" width="500"> </div>
					<div><img src="img/5.jpeg" height="400" width="500"> </div>
					<div><img src="img/6.jpeg" height="400" width="500"> </div>
					<div><img src="img/7.jpeg" height="400" width="500"> </div>
					<div><img src="img/8.jpeg" height="400" width="500"> </div>
					<div><img src="img/9.jpeg" height="400" width="500"> </div>
					<div><img src="img/10.jpeg" height="400" width="500"> </div>
					<div><img src="img/11.jpeg" height="400" width="500"> </div>
					<div><img src="img/12.jpeg" height="400" width="500"> </div>
					<div><img src="img/13.jpeg" height="400" width="500"> </div>
					<div><img src="img/14.jpg" height="400" width="500"> </div>
					<div><img src="img/15.jpg" height="400" width="500"> </div>
					<div><img src="img/16.jpg" height="400" width="500"> </div>
					<div><img src="img/17.jpg" height="400" width="500"> </div>
					<div><img src="img/18.jpg" height="600" width="500"> </div>
					<div><img src="img/19.jpg" height="600" width="500">> </div>
					
					
					
				</div>
					<script src="jquery-3.4.1.min.js"></script>
<script>
	$(".box div:gt(0)").hide();
	setInterval(function(){
		$('.box div:first-child')
		.fadeOut()
		.next()
		.fadeIn()
		.end()
		.appendTo('.box');
	},2000);
</script>

			
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