<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<form action="theform.php" method="post"> 
		
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name">
			</dd>
			<dt>Email</dt>
			<dd>
				<input type="text" name="email">
			</dd>
			<dt>Username</dt>
			<dd>
				<input type="text" name="username">
			</dd>
			<dt>Password</dt>
			<dd>
				<input type="password" name="pass">
			</dd>
			<dt>Confirm password</dt>
			<dd>
				<input type="password" name="confpass">
			</dd>
			<dt>Date of birth</dt>
			<dd>
				<input type="date" name="date">
			</dd>
			<dt>Gender</dt>
			<dd>
				<input type="radio" name = "gender" value = "male" /> Male
				<input type="radio" name = "gender" value = "female" /> Female </br>
			</dd>
			<dt>Marital status</dt>
			<dd>
			<select name = "marstat" >
					<option value = "single"> Single </option>
					<option value = "married"> Married </option>
					<option value = "divorced"> Divorced </option>
					<option value = "widowed"> Widowed </option>
				 </select>
			</dd>
			<dt>Address</dt>
			<dd>
				<input type="text" name="address">
			</dd>
			<dt>City</dt>
			<dd>
				<input type="text" name="city">
			</dd>
			<dt>Postal code</dt>
			<dd>
				<input type="text" name="postcode">
			</dd>
			<dt>Home phone</dt>
			<dd>
				<input type="text" name="homephone">
			</dd>
			<dt>Mobile phone</dt>
			<dd>
				<input type="text" name="mobphone">
			</dd>
			<dt>Credit card number</dt>
			<dd>
				<input type="text" name="cardnum">
			</dd>
			<dt>Credit card expiry date</dt>
			<dd>
				<input type="date" name="carddate">
			</dd>
			<dt>Monthly salary</dt>
			<dd>
				<input type="text" name="salary">
			</dd>
			<dt>Web site URL</dt>
			<dd>
				<input type="text" name="website">
			</dd>
			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="gpa">
			</dd>

		</dl>
		
		<div>
			<input type="submit" value="Register" />
		</div>
	</body>
</html>