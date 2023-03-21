<!DOCTYPE html>
<head>
		<style>

		

body{
	background-image: url(../images/body.jpg);
	background-color:white;
	padding:0px;
	
}
.card{
	border:1px solid skyblue;
	width:300px;
	height:50px;
	margin-left:10px;
	margin-right:10px;
	margin-top:10px;
	border-radius: 5px;
	text-align: center;
	background-color:skyblue;
	padding:5px;
	
	
}
.text{
	
	font-family:consolas;
	color:red;
}
.text-white{
	
	font-family:consolas;
	color:white;
}

.center{
	margin: 0 auto;
    width:50% ;
	padding:20px;
	
	
}	
.header-index{
	position:relative;
	left:0;
	top:0;
	width: 100%;
	background-color: red;
	color: white;
	font-family:consolas;
	padding:5px;
	
}
.name{
	font-family:consolas;
	font-size:16px;
}

.card-product{
	border:1px solid;
	width:200px;
	height:300px;
	margin-left:10px;
	margin-right:10px;
	margin-top:10px;
	border-radius: 5px;
	text-align: center;
	padding:5px;
	
	
}
.card-image{
	width:190px;
	height:190px;
	border-radius: 5px;
}
.card-text{
	text-align:center;
	
}
.price-label{
	width:185px;
	padding:3px;
	margin-left:2px;
	background-color:wheat;
	color:wheat;
	border-radius: 5px;
}
.center-index{
	margin: 0 auto;
    width:90% ;
	padding:20px;
			
}
.item-image{
	width:50px;
	height:50px;
	border-radius: 5px;
}

.btn{
	font-family:consolas;
}






	
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
			
	
	</head>
</html>


	
		


<?php
	if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
	include 'delivaryman_header.php';
?>
<!--dashboard starts -->
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> fast food <br>
					avilable 3
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Set Menu <br>
					avilable 1
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Desert <br>
					avilable 3
				</span>
				</div>
			</td>
			<td>
			<div class="card">
				<span class="text-white"> Beverage <br>
					avilable 3
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<h3 class="text-white">Recent Orders</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>food Name</th>
			<th>food Price</th>
			<th>Sales Qty</th>
			<th>Sales Date</th>
		</thead>
		
		<tbody>
			<td>1</td>
			<td>Chicken Cheese Burger</td>
			<td>200</td>
			<td>5</td>
			<td>25.04.2021</td>
		</tbody>
		<tbody>
			<td>2</td>
			<td>Ice Cream</td>
			<td>200</td>
			<td>2</td>
			<td>25.04.2021</td>
		</tbody>
	</table>
</div>
<!--dashboard ends -->
<?php include 'delivaryman_footer.php';?>