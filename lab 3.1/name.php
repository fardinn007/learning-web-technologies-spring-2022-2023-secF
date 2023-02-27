nes (26 sloc)  870 Bytes

<?php 

    
       $uerror = "";
       $myname = "";

       if(isset($_REQUEST['submit'])){

              if($_REQUEST['myname'] == null){
                     $uerror  = "invalid username...";
              }else{
                     $myname = $_REQUEST['myname'];
              }
       }      
        

?>

<html>
        <body>
             <form method="POST" action="#">
              <fieldset>
                        <legend>NAME</legend>
                       

                    
        <table>
            <tr> <td> <input type="text" name="myname" value="<?=$myname ?>"></td></tr><br>
            
             <td><?$uerror ?></td>
            <tr><td><hr></td></tr>
            <tr> <td><input type="submit" name="submit" value="submit"><td></td>
     </table>       
                 </fieldset>
            </form>     
        </body>
</html>
