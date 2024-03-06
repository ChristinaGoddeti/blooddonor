<?php
include("connect.php");
?>
<html>
<head>
<title>php opt</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div class="container">
<form action="form1.php" method="POST">
<div class="title">
REGISTRATION FORM
</div>
<div class="form">
<div class="input_field">
<label>First Name</label>
<input type="text" class="input" name="fname" required>
</div>
<div class="input_field">
<label>Last Name</label>
<input type="text" class="input" name="lname" required>
</div>
<div class="input_field">
<label>Age</label>
<input type="number" class="input" name="age" required>
</div>
<div class="input_field">
<label>Date Of Birth</label>
<input type="date" class="input" name="dob" required>
</div>
<div class="input_field">
<label>Blood Group</label>
<div class="selectbox">
<select name="blood">
<option value="not selected">select</option>
<option value="O+">O+</option>
<option value="AB-">O-</option>
<option value="AB-">AB-</option>
<option value="AB-">AB+</option>
<option value="AB-">A+</option>
<option value="AB-">A-</option>
<option value="AB-">B-</option>
<option value="AB-">B+</option>
<option value="AB-">Other</option>
</select>
</div></div>
<div class="input_field">
<label>Password</label>
<input type="password" class="input" name="password" required>
</div>
<div class="input_field">
<label>Confirm Password</label>
<input type="password" class="input" name="conpassword">
</div>
<div class="input_field">
<label>Gender</label>
<div class="selectbox">
<select name="gender">
<option value="not selected">select</option>
<option value="male">male</option>
<option value="female">female</option>
</select>
</div>
</div>
<div class="input_field">
<label>Email Address</label>
<input type="text" class="input" name="email" required>
</div>
<div class="input_field">
<label>Phone Number</label>
<input type="text" class="input" name="phone">
</div>
<div class="input_field">
<label>Address</label>
<input type="text" class="input" name="address">
</div>
<div class="input_field">
<label>Willing to donate?</label><br>
<input type="radio" name="y" value="yes" class="circle">yes<br>
<input type="radio" name="y" value="no" class="circle">no<br>
</div>
<div class="input_field">
<label>Have you donated previously?</label><br>
<input type="radio" name="n" value="yes" class="circle" required>yes<br>
<input type="radio" name="n" value="no" class="circle" required>no<br>
</div>
<div class="input_field">
<label>How many times you have donated?(if yes)</label>
<input type="number" class="input" name="num">
</div>
<div class="input_field">
<label>When last donated?</label>
<input type="date" class="input" name="last"><br>
</div>
<div class="input_field">
<label>When would you like to donate next time?</label>
<input type="date" class="input" name="next">
</div>
<div class="input_field">
<label>Please confirm your availability to donate blood:</label>
<div class="selectbox">
<select name="confirm">
<option value="available">available</option>
<option value="not available">not available</option>
</select>
</div>
</div>
<div class="input_field terms">
<label class="check">
<input type="checkbox" required>
<span class="checkmark"></span>
</label>
<p>I hereby accept terms & condition of regarding as blood donor.</p>
</div>
<div class="input_field">
<input type="submit" value="Register" class="btn" name="register">
</div>
</form>
</div>
</body>
</html>

