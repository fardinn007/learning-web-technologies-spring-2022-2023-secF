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
	 session_start();
    require_once '../model/usermodel.php';

    $username="";
    $err_username="";
    $password="";
    $err_password="";
    $hasError=false;
    //LOGIN PART
    if(isset($_POST["login"])){
        if(empty($_POST["username"])){
			$err_username="Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
        }
        if(empty($_POST["password"])){
			$err_password="Password Required";
			$hasError =true;	
		}
		else{
			$password = htmlspecialchars($_POST["password"]);
        }

        //echo validateUser($_POST["username"], $_POST["password"]);
        if($hasError==false){
           if(validateUser($_POST["username"], $_POST["password"])){
              
               $_SESSION["username"] = $username;
               setcookie("username",$username,time() + 86400);
               header("Location: ../views/dashboard.php");
           }
           else{
               echo "Invalid Credentials!";
           }
        }
    }
?>

<?php
	include 'main_header.php';
?>

<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="POST" >
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" value="" class="form-control">
		<?php echo "* ".$err_username; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" value="" class="form-control">
			 <?php echo "* ".$err_password; ?>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-danger" name="login" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>