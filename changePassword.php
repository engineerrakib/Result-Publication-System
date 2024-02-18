<?php
include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email'");
$b=mysqli_fetch_array($a);
$pass=$b['password'];
$old=sha1($_POST['old']);
$p1=sha1($_POST['p1']);
$p2=sha1($_POST['p2']);
if($_POST['old']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
	//ASL Do Nothing
}
else
{
if($old!=$pass)
{
	$msg="Incorrect Old Password";
}
elseif($p1!=$p2)
	{
		$msg="New Password Didn't Matched";
	}
	else
	{
		mysqli_query($al,"UPDATE faculty SET password='$p2' WHERE email='$email'");
		$msg="Successfully Changed your Password";
	}

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Change Password</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="icon/icon.png">
	</head>

<body>
	
	<div class="logo">
		<img class="picture" src="logo/logo.png" alt="logo">
	</div>
	
	<div align="center">
	<h1>Change Password</h1>
	</div>
	
	<div class="main-page-passowrd-change">
	<h3 class="faculty-login">User Password</h3>
	<form method="post" action="">
		<table class="enter-roll">
			<tr>
				<td colspan="2" class="msg" align="center"><?php echo $msg;?></td>
			</tr>
			<tr class="tr-1">
				<td>Old Password :</td>
				<td><input type="password" name="old" size="25" class="tr-1" placeholder="Enter Old Password" required="required"></td>
			</tr>
			<tr class="tr-1">
				<td>New Password :</td>
				<td><input type="password" name="p1" size="25" class="tr-1" placeholder="Enter New Password" required="required"></td>
			</tr>
			<tr class="tr-1">
				<td>Re-Type Password :</td>
				<td><input type="password" name="p2" size="25"  class="tr-1" placeholder="Re-Type New Password" required="required"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Change Password" id="register-p"></td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<br>
	<a href="dashboard.php" class="cmd">Back Dashboard</a>
	</div>
	<footer class="footer"><p>&copy; Group of Md. Rakib Hasan [CSE, NUB]</p></footer>
</body>
</html>