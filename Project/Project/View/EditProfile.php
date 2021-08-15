<!DOCTYPE html>  
<html>  
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>

<body>

 <?php 
 include 'Head_1.php';
 include '../Controller/EditProfileValidation.php'
 ?> 

<form method="post">
<table>
     <tr>
          <td><?php include 'Account.php';?></td>
          <td>
               <fieldset>
               <legend>EDIT PROFILE</legend>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <td><input type="text" name="name" value="<?php   
                    $data = file_get_contents("../JsonData/data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo $row["name"]; 
                         } 
                    } 
                    ?>"><span class="error"><?php echo $nameErr;?></span></td>  
               </tr>  

               <tr>
                    <td align="left">E-mail </td>
                    <td>: </td> 
                    <td><input type="text" name="email" value="<?php   
                    $data = file_get_contents("../JsonData/data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo $row["e-mail"]; 
                         } 
                    } 
                    ?>"><span class="error"><?php echo $emailErr;?></span></td>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td>
                    <td> <?php
                         $g = "";   
                         $data = file_get_contents("../JsonData/data.json");  
                         $data = json_decode($data, true);  
                               
                         foreach($data as $row)  
                         {  
                              if($row["username"] == $_SESSION['uname'])
                              {
                                   $g = $row["gender"];
                              } 
                         } 
                         ?>
                         <input type="radio" name="gender" <?php if ($g=="Female") echo "checked";?> value="Female">Female
                         <input type="radio" name="gender" <?php if ($g=="Male") echo "checked";?> value="Male">Male
                         <input type="radio" name="gender" <?php if ($g=="Other") echo "checked";?> value="Other">Other
                         <span class="error"><?php echo $genderErr;?></span></td>   
               </tr> 

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <td><input type="date" name="dob" value="<?php   
                    $data = file_get_contents("../JsonData/data.json");  
                    $data = json_decode($data, true);  
                          
                    foreach($data as $row)  
                    {  
                         if($row["username"] == $_SESSION['uname'])
                         {
                         echo $row["dob"]; 
                         } 
                    } 
                    ?>"><span class="error"><?php echo $dobErr;?></span></td>
               </tr>

               <tr>
                    <td colspan="4"><span class="error"><?php echo $error;?></span>
                                    <span class="success"><?php echo $success;?></span></td>
               </tr>

               <tr>
                    <td colspan="4"><input type="submit" name="submit" value="Submit"></td>
               </tr>
               </table>
               </fieldset>
          </td>
     </tr>
</table>
</form>
 
<?php include 'Foot.php';?> 

</body>
</html>