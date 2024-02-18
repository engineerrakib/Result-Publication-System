<?php
include("config.php");
session_start();
if(isset($_SESSION['email']))
{
	header("location:dashboard.php");
}
$email=mysqli_real_escape_string($al,$_POST['email']);
$pass=mysqli_real_escape_string($al,sha1($_POST['pass']));
if($_POST['email']==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email' AND password='$pass'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$email;
		header("location:dashboard.php");
	}
	else
	{
		$msg="Incorrect Email ID or Password";
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
			<title>Institute Login</title>
			<link href="style.css" rel="stylesheet">
			<link rel="icon" href="icon/icon.png">
	</head>

<body>
		<div class="logo">
		<img class="picture" src="logo/logo.png" alt="logo">
		</div>
		<div align="center">
			<h1>Institute Login</h1>
		</div>
		<div class="main-page-faculty-login">
			<h3 class="faculty-login">Faculty Login</h3>
		
		<form method="post" action="">
			<table class="enter-roll">
				<tr>
					<td colspan="2" align="center" class="msg"><?php echo $msg;?></td>
				</tr>
				<tr class="tr-1">
					<td>Email ID	:</td>
					<td><input type="text" required="required" name="email" class="tr-1" size="15" placeholder="Enter Email ID"></td>
				</tr>
				<tr class="tr-1">
					<td>password	:</td>
					<td><input type="password" required="required" name="pass" class="tr-1" size="15" placeholder="Enter Password"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Login" class="login"></td>
				</tr>
			</table>
		</form>
		<a href="index.php" class="link">Main Page</a>
		</div>
		<footer class="footer"><p>&copy; Group of Md. Rakib Hasan [CSE, NUB]</p></footer>
</body>
</html>