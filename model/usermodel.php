<?php



 //=======================Validatin for login==================================================

	function validateUser($username, $password){

		
		$data = file_get_contents('../views/userDetails.json');

		// decode json to associative array
		//json to php te jokhn data ashe tokhon data gulo json data hoy.
		 $json_arr = json_decode($data, true);
		//print_r( $json_arr);

		foreach ($json_arr as $key => $value) {

		      if($value['Password']== $password && $value['UserName']==$username)
		      {
		      	return true;
		      }
		}
		return false;
	}





	



?>
