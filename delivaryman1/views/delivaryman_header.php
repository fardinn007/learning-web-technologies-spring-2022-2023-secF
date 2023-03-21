<?php
	if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
?>
<html>

	<head>


	<style>
		.header{
	position:relative;
	left:0;
	top:0;
	width: 100%;
	background-color: black;
	color: pink;
	text-align: center;
	font-family:consolas;
	padding:5px;
	
}

.btn{
	font-family:consolas;
}



	</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Delivaryman</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="dashboard.php" class="btn btn-primary">Dashboard</a>
			<a href="index.php" class="btn btn-danger">Logout</a>		
		</div>
		<!--menu ends-->
</body>
</html>