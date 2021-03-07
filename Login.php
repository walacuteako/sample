<!doctype html>
<?php
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user=="ADMIN" && $pass=="ADMIN123"){
		echo("Login Complete!");
	}else{
		echo("Enter Correct User and Pass!");
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
<form action="" method="post">
    <table align="center">
	    <tr>
		    <td>Username:</td>
			<td><input type="text" name ="username" placeholder="enter your username"></td>
		</tr>
		<tr>
		    <td>Password:</td>
			<td><input type="text" name ="password" placeholder="enter your password"></td>
		</tr>
		<tr>
		    <td></td>
			<td><input type="submit" name="submit" value="submit"</td>
		</tr>
	</table>
</form>
</body>
</ht