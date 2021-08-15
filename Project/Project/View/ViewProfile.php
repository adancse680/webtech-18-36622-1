<!DOCTYPE html>  
 <html>  
 
 <body>

 <?php include 'Head_1.php';?> 

<from>
<table>
     <tr>
          <td><?php include 'Account.php';?></td>
          <td>
               <fieldset>
               <legend>PROFILE</legend>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <?php include '../Controller/ViewName.php';?> 
                    <td rowspan="4" align="middle"> 
                    <?php include '../Controller/ViewProfilePicture.php';?>
                    <img src="<?php echo $PP ?> " alt="PP" width="100" height="100"><br>
                    <a href="ChangeProfilePicture.php">Change</a> </td>    
               </tr>  

               <tr>
                    <td align="left">E-mail </td>
                    <td>: </td>
                    <?php include '../Controller/ViewEmail.php';?>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td> 
                    <?php include '../Controller/ViewGender.php';?> 
               </tr> 

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <?php include '../Controller/ViewDob.php';?>
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
 
<?php include 'Foot.php';?> 

</body>  
</html> 