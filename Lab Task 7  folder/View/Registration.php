<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/deliveryman.css">
</head>
<body>
	<div class="header">
		<?php 
		include 'Head.php';
		require '../Controller/RegistrationValidation.php';
		?><br>
	</div><br>

<form method="post">
<fieldset>

	<legend><b>REGISTRATION</b></legend>

	<fieldset>
	    <legend>NAME</legend>
		<input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name;?>">
		<span id="nameErr"></span><span class="error"><?php echo $nameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>EMAIL</legend>
		<input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email;?>">
		<span id="emailErr"></span><span class="error"><?php echo $emailErr;?></span>
	</fieldset><br>

	<fieldset>
	    <legend>USER NAME</legend>
		<input type="text" name="uname" id="uname" onkeyup="checkUserName()" onblur="checkUserName()" value="<?php echo $uname;?>">
		<span id="unameErr"></span><span class="error"><?php echo $unameErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>PASSWORD</legend>
		<input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php echo $password;?>">
		<span id="passwordErr"></span><span class="error"><?php echo $passwordErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>CONFIRM PASSWORD</legend>
		<input type="password" name="cpassword" id="cpassword" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()" value="<?php echo $cpassword;?>">
		<span id="cpasswordErr"></span><span class="error"><?php echo $cpasswordErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>GENDER</legend>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
		<span class="error"><?php echo $genderErr;?></span>
	</fieldset><br>

	<fieldset>
	    <legend>Phone Number</legend>
		<input type="text" name="phoneNumber" id="phoneNumber" onkeyup="checkPhoneNumber()" onblur="checkPhoneNumber()" value="<?php echo $phoneNumber;?>">
		<span id="phoneNumberErr"></span><span class="error"><?php echo $phoneNumberErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob" id="dob" onkeyup="checkDateOfBirth()" onblur="checkDateOfBirth()" value="<?php echo $dob;?>">
		<span id="dobErr"></span><span class="error"><?php echo $dobErr;?></span>
	</fieldset><br>

	<span class="error"><?php echo $error;?></span><br>


	<input type="submit" name="submit" value="Submit">
	<input type="reset" name="Reset">

</fieldset>
</form><br>
<div class="footer">
	<?php include 'Foot.php';?><br>
</div>
</body>
</html>