<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../CSS/deliveryman.css">
</head>
<body>
<div class="header">
<?php 
        include 'Head.php';
        require '../Controller/ForgetPasswordValidation.php';
        ?>
</div><br>
<form method="post">    
<fieldset>
<legend>FORGOT PASSWORD</legend>
<table>
<tr>
<td>Enter Email </td>
<td>:</td>
<td><input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email;?>">
<span id="emailErr"></span><span class="error"><?php echo $error;?></span></td>
</tr>
<tr>
<td colspan="5"><span class="success"><?php echo $success;?></span></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Submit">
</tr>
</table>
</fieldset>
</form><br>
<div class="footer">
<?php include 'Foot.php';?>
</div>
</body>
</html>