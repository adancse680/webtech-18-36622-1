<html>
<body>
<form>
<tr>
  <br>
<td colspan=2>
<center><font size=4><b>REGISTRATION</b></font></center>
</td></br>
</tr>
<body>
  <?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr = $genderErr = "";
$name = $email = $dob= $gender = "";

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

 }
?>
  <fieldset>
<fieldset>
               <tr>
            <td align="right"><label for="name"><b>Name </b></label></td>
            <td><input type="text" id="name" name="name"></td>
        </tr></fieldset>


<fieldset>
               <tr>
            <td align="right"><label for="email"><b>Email</b></label></td>
            <td><input type="text" id="email" name="email"></td>
        </tr></fieldset>

<fieldset>
               <tr>
            <td align="right"><label for="username"><b>User Name </b></label></td>
            <td><input type="text" id="username" name="username"></td>
        </tr></fieldset>

<fieldset>
               <tr>
            <td align="right"><label for="pw"><b>Password</b></label></td>
            <td><input type="text" id="pw" name="pw"></td>
        </tr></fieldset>
<fieldset>
               <tr>
            <td align="right"><label for="npw"><b>NewPassword</b></label></td>
            <td><input type="text" id="npw" name="npw"></td>
        </tr></fieldset>
        <fieldset>Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br></fieldset>
<fieldset>Date of Birth:
<form action="/action_page.php">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
</form></fieldset>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>
</fieldset>
</body>
</table>
</form>
</body>
</html>
