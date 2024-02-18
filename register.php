<?php
include("config.php");
$roll=$_POST['roll'];
$sem=$_POST['sem'];
$dept=$_POST['dept'];
$nam=$_POST['name'];

if($roll==NULL || $sem==NULL || $dept==NULL || $nam==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"INSERT INTO students(name,roll,sem,dept) VALUES('$nam','$roll','$sem','$dept')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="Email Already Exists";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student Register</title>
		<link href="style.css" rel="stylesheet">
		<link rel="icon" href="icon/icon.png">
	</head>

<body>
		
		<div class="logo">
		<img class="picture" src="logo/logo.png" alt="logo">
		</div>
		
		<div align="center">
		<h1>Student Register</h1>
		</div>
		
		<div class="main-page-student-reg">
		<h3 class="faculty-login">Student Registration</h3>

		<form method="post" action="">
			<table class="enter-roll">
				<tr>
					<td colspan="2" align="center" class="msg"><?php echo $msg;?></td>
				</tr>
				<tr class="tr-1">
					<td>Name :</td>
					<td><input type="text" name="name" class="tr-1" required="required" size="15" placeholder="Enter Full Name"></td>
				</tr>
				<tr class="tr-1">
					<td>Roll No :</td>
					<td><input type="text" name="roll" maxlength="6" class="tr-1" required="required" size="15" placeholder="Enter Roll No"></td>
				</tr>
				<tr class="tr-1">
					<td>Semester :</td>
				<td>
				<select name="sem" class="tr-1">
					<option value="" disabled="disabled" selected="selected">Select Semester</option>
					<option value="1">1st Semester</option>
					<option value="2">2nd Semester</option>
					<option value="3">3rd Semester</option>
					<option value="4">4th Semester</option>
					<option value="5">5th Semester</option>
					<option value="6">6th Semester</option>
					<option value="7">7th Semester</option>
					<option value="8">8th Semester</option>
				</select>
				</td>
				</tr>
				<tr class="tr-1">
					<td>Department :</td>
				<td>
				<select name="dept" class="tr-1">
					<option value="" disabled="disabled" selected="selected">Select Department</option>
					<option value="CSE">CSE</option>
					<option value="EEE">EEE</option>
					<option value="Textile">Textile</option>
					<option value="Civil">Civil</option>
					<option value="Mechanical">Mechanical</option>
					<option value="Agriculture">Agriculture</option>
					<option value="Pharmacy">Pharmacy</option>
					<option value="English">English</option>
				</select>
				</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Register" class="register"></td>
				</tr>
			</table>
		</form>
		<a href="dashboard.php" class="link">Back Dashboard</a>
		</div>
		<footer class="footer"><p>&copy; Group of Md. Rakib Hasan [CSE, NUB]</p></footer>
</body>
</html>