<html>
<head>
<body>
  <?php include 'head.php'; ?>
  <?php
$nameErr = $emailErr =$usernameErr= $passwordErr=$changepasswordErr= $dobErr = $genderErr = $error ="";
$name = $email =$username= $password=$changepassword =$dob= $gender =$success = "";

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
  if (empty($_POST["username"]))
     {
    $username = "Username is Required";
      }
  else 
  {
   $username= $_POST["username"];
   if (preg_match("/^[a-z-_0-9]*$/",$username))
   {
    if(strlen($username)>=2)
    {
      
    }
    else
    {
      $usernameErr = "Username must contain atleast 2 charecters";
      $username="";
    }
   }
   else
   {
    $usernameErr = "Only a-z, 0-9, Dash(-) and Underscore(_) are allowed";
    $username="";
   }

  }

   if (empty($_POST["pw"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $pw = $_POST["pw"];
    if (strlen($pw) >= 8) 
    {
    }
    else
    {
      $passwordErr = "Password  must contain atleast 8 charecters";
      $pw = "";
    }
  }

  if (empty($_POST["changepassword"])) 
  {
    $changepasswordErr = "Confirm password is required";
  } 
  else 
  {
      $changepassword = $_POST["changepassword"];
        if ($changepassword == $pw) 
    {
    }
    else
    {
      $changepasswordErr = "Password and confirm password did not match";
      $pw = "";
      $changepassword= "";
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
if(file_exists('data.json'))  
  {  
      if(empty($name))  
      {  
          $error = "Failed";  
    }
      else if(empty($email))  
      {  
          $error = "Failed";   
      }  
      else if(empty($username)) 
      {  
          $error = "Failed";  
      }  
      else if(empty($password))  
      {  
          $error = "Failed"; 
      }
      else if(empty($changepassword))  
      {  
          $error = "Failed"; 
      } 
      else if(empty($gender))  
      {  
          $error = "Failed"; 
      } 

        else
        {
          $current_data = file_get_contents('data.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array('name'               =>     $name, 
                       'email'          =>     $email,  
                       'username'     =>     $username,
                       'password'  =>     $password, 
                       'gender' =>     $gender,  
                           'dob' =>     $dob);  
          $array_data[] = $extra;  
          $final_data = json_encode($array_data);  
          if(file_put_contents('data.json', $final_data))  
          {  
              $success = "Registration successful";
              header("location:login.php");
            }    
          else  
          {  
              $error = "JSON File doesn't exits";  
          }
        }
    }
}
?>

<form method="post">
  <h1>REGISTRATION</h1>
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
            <td align="right"><label for="changepassword"><b>Confirm Password</b></label></td>
            <td><input type="text" id="changepassword" name="changepassword"></td>
        </tr></fieldset>
        <fieldset>Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br></fieldset>
<fieldset>
      <legend>DATE OF BIRTH</legend>
    <input type="date" name="dob" value="<?php echo $dob;?>">
    <span class="error"><?php echo $dobErr;?></span>
  </fieldset><br>

  <span class="error"><?php echo $error;?></span>
  <span class="success"><?php echo $success;?></span><br>


  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="Reset">

</fieldset> 
</form>
<?php  include 'foot.php'; ?>
</body>
</head>
</html>
