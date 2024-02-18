<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Web Based Result</title>
		<link href="style.css" rel="stylesheet">
		<link rel="icon" href="icon/icon.png">
	</head>

<body>

	<div class="logo">
		<img class="picture" src="logo/logo.png" alt="logo">
	</div>
	<div class="scroll">
			<marquee onmouseover="this.stop();" onmouseout="this.start();">
					Web Based Result Publication System | Results Publised...
			</marquee>
	</div>
	
	<div class="main-page">
	<form method="post" action="viewResult.php">
		<table class="enter-roll">
			<tr class="tr-1"><td>Roll No:</td>
				<td><input type="text" required="required" maxlength="6" name="roll" class="tr-1" placeholder="Enter Roll"></td>
			</tr>
			<tr class="tr-1">
					<td>Semester:</td>
				<td>
				<select name="sem" class="tr-1" required="required">
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
			<tr>
			<br>
				<td colspan="2" align="center" ><input type="submit" value="Get Result" class="tr-2"></td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<a href="faculty.php" class="link">Institute Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!--
	<a href="register.php" class="link">Student Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="registerFaculty.php" class="link">Faculty Registration</a>
	-->
	</div>
	<footer class="footer"><p>&copy; Group of Md. Rakib Hasan [CSE, NUB]</p></footer>
</body>
</html>