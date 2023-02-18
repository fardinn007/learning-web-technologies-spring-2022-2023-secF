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
             <form>
             <fieldset>
              
               <legend>BLOOD GROUP</legend>
                       <table>
                        <tr>
                       <td colspan="5">
                         <select>
                   <option value="">AB+</option>
                   <option value="">A+</option>
                    <option value="">B+</option>
                    <option value="">o+</option>
                     <option value="">A-</option>
                                           

           </select>
                                         
     </td> 
                                           
                                           
        </tr>
                                 
                                 
     <tr>
       <td colspan="5"><hr></td>
  </tr>
           <tr>
         <td colspan="5"><input type="submit" name="submit" value="submit"></td>
     </tr>
                       </table>
                 </fieldset>     
            </form>     
        </body>
</html>