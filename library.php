<?php

function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

function validate()
{
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if ($_POST["name"] && empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
  }

  if ($_POST["email"] && empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
  }

  if ($_POST["day"] && empty($_POST["day"])) 
  {
    $dayErr = "Date of birth is required";
  } 
  else 
  {
    $day = test_input($_POST["day"]);
  }

  if ($_POST["month"] && empty($_POST["month"])) 
  {
     $monthErr = "Date of birth is required";
  } 
  else 
  {
    $month = test_input($_POST["month"]);
  }

  if ($_POST["gender") && empty($_POST["gender"])) 
  {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
  }
  
  if($_POST["year"] && empty($_POST["year"]))
  {
	$yearErr = "Date of birth is required";
  }
  else
  {
    $year = test_input($_POST["year"]);
  }  

  if($_POST["phone"] && empty($_POST["phone"]))
  {
	$phoneErr = "Phone number is required";
  }
  else
  {
    $phone = test_input($_POST["phone"]);
  }
  
  if($_POST["address"] && empty($_POST["address"])
  {
    $addressErr = "Address is required";
  }
  else
  {
   $address = test_input($_POST["address"]);
  }
  
  if($_POST["pincode"] && empty($_POST["pincode"]))
  {
    $pincodeErr = "Pincode is required";
  }
  else
  {
   $pincode = test_input($_POST["pincode"]);
  }
  
  if($_POST["password"] && empty($_POST["password"]))
  {
    $passwordErr = "Password is required";
  }
  else
  {
   $password = test_input($_POST["password"]);
  }
  
  if($_POST["confirmpassword"] && empty($_POST["confirmpassword"]))
  {
    $confirmpasswordErr = "Confirm password is required";
  }
  else
  {
   $confirmpassword = test_input($_POST["confirmpassword"]);
  }
  
 
}
}
?>