<!DOCTYPE html>  
 <html>  
 
 <body>

 <?php include 'head1.php';?> 

<from>
<table>
     <tr>
          <td><?php include 'account.php';?></td>
          <td>
               <fieldset>
               <h>PROFILE</h1>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['username'])
                         {
                         echo '<td>'.$row["name"].'</td>'; 
                         } 
                    } 
                    ?>
                    <td rowspan="4" align="middle"> 
                    <?php 
                    $PP = "";  
                    $data = file_get_contents("PP.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["userrname"] == $_SESSION['username'])
                         {
                              $PP = $row["pp"];
                         }
                    } 
                    ?> 
                    <img src="<?php echo $PP ?> " alt="PP" width="100" height="100"><br>
                    <a href="ChangeProfilePicture.php">Change</a> </td>    
               </tr>  

               <tr>
                    <td align="left">Email </td>
                    <td>: </td> 
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['username'])
                         {
                         echo '<td>'.$row["email"].'</td>'; 
                         } 
                    } 
                    ?>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td> 
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['username'])
                         {
                         echo '<td>'.$row["gender"].'</td>'; 
                         } 
                    } 
                    ?>  
               </tr> 

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <?php   
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['username'])
                         {
                         echo '<td>'.$row["dob"].'</td>'; 
                         } 
                    } 
                    ?>
               </tr>
               <tr>
                    <td colspan="4"><a href="EditProfile.php">Edit Profile</a></td>
               </tr>
               </table>
               </fieldset>
          </td>
     </tr>
</table>
</from>
 
<?php include 'foot.php';?> 

</body>  
</html> 