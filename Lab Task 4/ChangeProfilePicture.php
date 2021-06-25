<!DOCTYPE html>
<html>
<body>

 <?php include 'head1.php';?> 

<table>
  <tr>
    <td><?php include 'account.php';?></td>
    <td>
      <form action="cpp.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>PROFILE PICTURE</legend>
        <img src="./pic/pp.jpg" alt="PP" style="width:130px;height:130px;"><br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Submit" name="submit">
      </fieldset>
      </form>
    </td>
  </tr>
</table>

<?php include 'foot.php';?> 

</body>
</html>