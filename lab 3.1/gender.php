<?php 

    
       $uerror = "";
       $myname = "";

       if(isset($_REQUEST['submit'])){

              if($_REQUEST['radio'] == null){
                     $uerror  = "invalid username...";
              }else{
                     $myname = $_REQUEST['radio'];
              }
       }      
        

?>


<html>
        <body>
             <form method="POST" action="#">
             <fieldset>
              
               <legend>GENDER</legend>
                       <table>  
                        <tr>
                         <td align="center"> <input type="radio" name="gender" value="<?=$gender ?>">Male</td>
                        <td align="center"><input type="radio" name="gender" value="<?=$gender ?>">Female</td>
                        <td align="center"> <input type="radio" name="gender" value="<?=$gender ?>">Other</td>
                                           
                                 </tr>
                                 <tr><td><?$uerror ?></td></tr>
                                 
                                 
                                 <tr>
                                      <td colspan="3"><hr></td>
                                 </tr>
                                 <tr>
                                        
                                        <td colspan="3"><input type="submit" name="submit" value="submit"></td>
                                 </tr>
                       </table>
                 </fieldset>     
            </form>     
        </body>
</html>