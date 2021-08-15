<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
.success {color: green;}
</style>
</head>
<body>

<?php 
include 'Head_2.php';
include '../Controller/LoginValidation.php';
?>

<form method="post">

<fieldset>
    <legend>LOGIN</legend>
    <table>
    	<tr>
    		<td>User Name </td>
    		<td>:</td>
    		<td><input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])){ echo $_COOKIE["uname"];} ?>"></td>
    	</tr>

    	<tr>
    		<td>Password </td>
    		<td>:</td>
    		<td><input type="password" name="password" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];} ?>"></td>
    	</tr>

    	<tr>
    		<td  colspan="3"><span class="error"><?php echo $error;?></span><span class="success"><?php echo $success;?></span></td>
    	</tr>

    	<tr>
    		<td colspan="3"><input type="checkbox" name="remindMe" <?php if(isset($remindMe) && $remindMe=="Remind Me") echo "checked";?> value="Remind Me">Remind Me</td>
    	</tr>

		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"> <a href="ForgetPassword.php">Forget Password?</a></td>
		</tr>
    </table>
</fieldset>
</form>

<?php include 'Foot.php';?>

</body>
</html>