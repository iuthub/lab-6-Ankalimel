<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php 
		error_reporting(0);
		$name = $_REQUEST["name"]; 
		$email = $_REQUEST["email"]; 
		$username = $_REQUEST["username"]; 
		$pass = $_REQUEST["pass"]; 
		$confpass = $_REQUEST["confpass"]; 
		$date = $_REQUEST["date"]; 
		$gender = $_REQUEST["gender"]; 
		$marstat = $_REQUEST["marstat"]; 
		$address = $_REQUEST["address"]; 
		$city = $_REQUEST["city"]; 
		$postcode = $_REQUEST["postcode"]; 
		$homephone = $_REQUEST["homephone"]; 
		$mobphone = $_REQUEST["mobphone"]; 
		$cardnum = $_REQUEST["cardnum"]; 
		$carddate = $_REQUEST["carddate"]; 
		$salary = $_REQUEST["salary"]; 
		$website = $_REQUEST["website"]; 
		$gpa = $_REQUEST["gpa"]; 

		$check = "Thank you!";

		$nameerror = ""; 
		$emailerror = ""; 
		$usernameerror = ""; 
		$passerror = ""; 
		$confpasserror = ""; 
		$dateerror = ""; 
		$gendererror = ""; 
		$marstaterror = ""; 
		$addresserror = ""; 
		$cityerror = ""; 
		$postcodeerror = ""; 
		$homephoneerror = ""; 
		$mobphoneerror = ""; 
		$cardnumerror = ""; 
		$carddateerror = ""; 
		$salaryerror = ""; 
		$websiteerror = ""; 
		$gpaerror = ""; 

		if (!preg_match("/^([a-zA-Z]){2,}$/i", $name))
			$nameerror = "Error in Name!";
		if (!preg_match("/^[A-Za-z0-9._-]+@[a-z]+\.[a-z]{,3}$/i", $email))
			$emailerror = "Error in Email!";
		if (!preg_match("/^.{5,}$/i", $username))
			$usernameerror = "Error in Username!";
		if (!preg_match("/^.{8,}$/i", $pass))
			$passerror = "Error in Password!";
		if ($pass != $confpass)
			$confpasserror = "Error in Confirm Password!";
		if (!preg_match("/^(Male|Female)$/i", $gender))
			$gendererror = "Error in Gender!";
		if (!preg_match("/^[a-z]+$/i", $address))
			$addresserror = "Error in Address!";
		if (!preg_match("/^[a-z]+$/i", $city))
			$cityerror = "Error in City!";
		if (!preg_match("/^[0-9]{6}$/i", $postcode))
			$postcodeerror = "Error in Postal Code!";
		if (!preg_match("/^[0-9]{9}$/i", $homephone))
			$homephoneerror = "Error in Home Phone!";
		if (!preg_match("/^[0-9]{9}$/i", $mobphone))
			$mobphoneerror = "Error in Mobile Phone!";
		if (!preg_match("/^[0-9]{16}$/i", $cardnum))
			$cardnumerror = "Error in Credit Card Number!";
		if (!preg_match("/^UZS[0-9,.]{2,}$/i", $salary))
			$salaryerror = "Error in Monthly Salary!";
		if (!preg_match("/^http:\/\/[A-Za-z0-9]+\.[a-z]{,3}$/i", $website))
			$websiteerror = "Error in Web Site URL!";
		if (!preg_match("/^[0-9.]{,4}$/i", $gpa))
			$gpaerror = "Error in Overall GPA!";
		
       
        ?>

         <h1>
         	<?=$check?>
         	<?=$nameerror?>
         	<?=$emailerror?>
         	<?=$usernameerror?>
         	<?=$passerror?>
         	<?=$confpasserror?>
         	<?=$gendererror?>
         	<?=$addresserror?>
         	<?=$cityerror?>
         	<?=$postcodeerror?>
         	<?=$homephoneerror?>
         	<?=$mobphoneerror?>
         	<?=$cardnumerror?>
         	<?=$salaryerror?>
         	<?=$websiteerror?>
         	<?=$gpaerror?>
         		
         </h1>
      
       

	</body>
</html>  