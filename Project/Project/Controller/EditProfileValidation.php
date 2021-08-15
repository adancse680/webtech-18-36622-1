<?php

$nameErr = $emailErr = $dobErr = $genderErr = $error = "";
$name = $email = $dob = $gender = $success = "";

if (isset($_POST['submit'])) 
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
                         else
                         {
                              if (empty($_POST["gender"])) 
                              {
                                   $genderErr = "Gender is required";
                              } 
                              else 
                              {
                                   $gender = $_POST["gender"];
                                   if (empty($_POST["dob"])) 
                                   {
                                        $dobErr = "Date of birth is required";
                                        $error = "Information update failed";
                                   } 
                                   else 
                                   {
                                        $dob = $_POST["dob"];
                                        $success = "Information update completed";
                                   }
                              } 
                         }
                    }
               }
               else
               {
                    $nameErr = "Atleast two word needed";
                    $name="";
               }
          }
          else
          {
               $nameErr = "Only A-Z, a-z, Dash(-) and Period( ) are allowed";
               $name="";
          }
     }
}
?>