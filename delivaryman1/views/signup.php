<!DOCTYPE html>
<head>
		<style>

		


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





.center-login{
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	padding-left:100px;
	padding-right:100px;
	padding-bottom:10px;
	border:1px solid black;
	border-radius:10px;
	vertical-align:center;
	
			
}
.btn{
	font-family:consolas;
}






	
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
</html>


<?php
   	
	  
	   //Get form data
	   if(isset($_POST["signup"])){
	   $formdata = array(
	      'FullName'=> $_POST["FullName"],
	      'UserName'=> $_POST["UserName"],
	      'Password'=>$_POST["Password"],
	      'Email'=> $_POST["Email"]
	   );
       $existingdata = file_get_contents('userDetails.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("userDetails.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("userDetails.json");
	 $mydata = json_decode($data);

	}
	 

?>

<?php
	include 'main_header.php';
?>

<div class="center-login">
	<h3 class="text text-center"> Delivaryman Sign Up</h3>
	<form action="" method="POST">
		<div class="form-group">
			<label class="text">FullName</label> 
			<input type="text" name="FullName" value="" class="form-control">
		
		</div>
		<div class="form-group">
			<label class="text">Username</label> 
			<input type="text" name="UserName" value="" class="form-control">
		

		</div>
		<div class="form-group">
			<label class="text">Email</label> 
			<input type="text" name="Email" value="" class="form-control">
		
		</div>
		<div class="form-group">
			<label class="text">Password</label> 
			<input type="password" name="Password" class="form-control">
		
		</div>

       

		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" name="signup" value="signup" class="form-control">
		</div>
</div>

<?php include 'main_footer.php';?>