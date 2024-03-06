<?php
session_start();
?>
<html>
<head>
<title>loginn</title>
<link rel="stylesheet" type="text/css" href="loginn1.css">
</head>
<body>
<div class="center">
<h1>login</h1>
<form action="#" method="POST" autocomplete="off">

<div class="form">
<input type="text" name="username" class="textfield" placeholder="username"><br>
<input type="password" name="password" class="textfield" placeholder="password">
<div class="forget"><a href="#" class="link" onclick="message()">forget password ?</a></div>
<input type="submit" name="login" value="login" class="btn">
<div class="signup">new member ?<a href="#" class="link">signup here</a></div></div>
</div>
</div>
</form>
<script>

function message()
{
	alert("invalid password");
}
</script>


</body>
</html>


<?php

include("connect.php");
if(isset($_POST['login']))
{
	$username=$_POST['username'];
		$password=$_POST['password'];
$query="SELECT * FROM form WHERE fname='$username' && pass='$password'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//echo $total;
if($total==1)
{
	$_SESSION['user_name'] = $username;
	header('location:display.php');
	?>
	<?php
}
else
{
echo "login failed";
}	
}
?>