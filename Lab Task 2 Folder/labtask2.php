<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr = $genderErr = $websiteErr =$bloodGroupErr = "";
$name = $email = $dob= $gender = $comment = $website = $bloodGroup ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	} 
	else 
	{
		$name = $_POST["name"];
		if (preg_match("/^[a-zA-Z -]*$/",$name)) 
		{
			if (str_word_count($name) >= 2) 
			{
			}
			else
			{
				$nameErr = "Atleast two word needed";
				$name="";
			}
		}
		else
		{
			$nameErr = "Only A-Z, a-z";
			$name="";
		}
	}

	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
	} 
	else 
	{
		$email = $_POST["email"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$emailErr = "Invalid email format";
			$email ="";
		}
	}

	if (empty($_POST["dob"])) 
	{
		$dobErr = "Date of birth is required";
	} 
	else 
	{
		$dob = $_POST["dob"];
	}

	if (empty($_POST["gender"])) 
	{
		$genderErr = "Gender is required";
	} 
	else 
	{
		$gender = $_POST["gender"];
	}

	if (empty($_POST["degree"])) 
	{
		$degreeErr = "Degree is required";
	} 
	else 
	{
		$degree = $_POST["degree"];
		if (count($degree) >= 2) 
		{
		}
		else
		{
			$degreeErr = "Atleast two degree required";
		}
	}

	if (empty($_POST["bloodGroup"])) 
	{
		$bloodGroupErr = "Blood group is required";
	} 
	else 
	{
		$bloodGroup = $_POST["bloodGroup"];
	}
}
?>
<fieldset>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br></fieldset>
<fieldset>E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br></fieldset>
<fieldset>Website: <input type="text" name="website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span>
<br><br></fieldset>
<fieldset>Date of Birth:
<form action="/action_page.php">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
</form></fieldset>
<fieldset>Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br></fieldset>
<fieldset>Digree:
<input type="checkbox" name="digree" <?php if (isset($digree) && $digree=="SSC") echo "checked";?> value="ssc">SSC
<input type="checkbox" name="digree" <?php if (isset($digree) && $digree=="HSC") echo "checked";?> value="hsc">HSC
<input type="checkbox" name="digree" <?php if (isset($digree) && $digree=="BSc") echo "checked";?> value="bsc">BSc
<input type="checkbox" name="digree" <?php if (isset($digree) && $digree=="MSc") echo "checked";?> value="msc">MSc
<br><br></fieldset>
<tr>
      <fieldset>    <td align="right"><label for="bloodGroup">BLOOD GROUP</label></td>
            <td><select id="bloodGroup" name="bloodGroup">
                <option value="bloodGroup" selected="" disabled=""></option>
                <option value="a+">A+</option>
                <option value="a">A-</option>
                <option value="b">B+</option>
                <option value="b">B-</option>
                <option value="o">O+</option>
                <option value="o">O-</option>
                <option value="ab">AB+</option>
                <option value="ab">AB-</option>
                </select><span class="error">* <?php echo $bloodGroupErr;?></span>
</fieldset></td><</fieldset>
        </tr>
<fieldset>Comment: <textarea name="comment" rows="2" cols="40"><?php echo $comment;?></textarea>
<br><br></fieldset>
<input type="submit" name="submit" value="Submit">
</form>
</fieldset>

<?php
echo "<h2>Your Input:</h2>";
echo "<h2>$name</h2>";
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>