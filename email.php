<?php 

       $uerror = "";
       $username = "";

       if(isset($_REQUEST['submit'])){

              if($_REQUEST['username'] == null){
                     $uerror  = "i";
              }else{
                     $username = $_REQUEST['username'];
              }
       }      

?>




<html>
       <head>
       <title>Email</title>
</head>

<body>
<form method="POST" action="#">
    <tr>


<td>Email</td><br>
<input type="Email" value="" /><br></td>
 <td><?$uerror ?></td>
<input type="Submit" name="Submit" value="Submit">
    </tr>
</body>
</html>