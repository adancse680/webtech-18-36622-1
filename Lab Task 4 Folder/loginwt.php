<html>
<head>
<body>
<?php include 'head.php'; ?>
<?php

$error = $success=  "";
$username = $password = "";


session_start();
if (isset($_POST['submit']))
{
	if (empty($_POST["username"]) && empty($_POST["password"])) 
	{
		$error = "Both username and password required";
	} 
	else 
	{
		$uname = $_POST["username"];
		$password = $_POST["password"]; 
		$data = file_get_contents("data.json");  
		$data = json_decode($data, true);  
                
		foreach($data as $row)  
		{  
			if ($row["username"] == $username && $row["password"] == $password) 
			{

				$success = "Login successful";
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("location:Dashboard.php");
				if(empty($success))
				{
					$error = "Invalid";
				}
				else
				{
					$error = "";
				}
			}
			else
			{
				$error = "Invalid";
			}
     	}
	}

	if(empty($_POST["rememberMe"]))
	{
	setcookie("username","");
	setcookie("password","");
	}
	else
	{
		setcookie ("username",$_POST["username"],time()+ 100);
		setcookie ("password",$_POST["password"],time()+ 100);
	} 
}
?>

<form method="post">
 <fieldset>
    <h1>LOGIN</h1>
    <table>
    	<tr>
    		<td>User Name </td>
    		<td>:</td>
    		<td><input type="text" name="username" value="<?php if(isset($_COOKIE["username"])){ echo $_COOKIE["username"];} ?>"></td>
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
    		<td colspan="3"><input type="checkbox" name="rememberMe" <?php if(isset($rememberMe) && $rememberMe=="Remember Me") echo "checked";?> value="Remember Me">Remember Me</td>
    	</tr>

		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"> <a href="ForgetPassword.php">Forget Password?</a></td>
		</tr>
    </table>
</fieldset>
</form>

<?php include 'foot.php';?>

</body>
</html>