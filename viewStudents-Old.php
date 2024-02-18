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
$sem=$b['sem'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Students List</title>
		<link href="style.css" rel="stylesheet">
		<link rel="icon" href="icon/icon.png">
	</head>

<body>
	
	<div class="logo">
		<img class="picture" src="logo/logo.png" alt="logo">
	</div>
	
	<div align="center">
	<h1>Web Based Students List</h1>
	</div>
	<h3 class="faculty-login">Semester : <?php echo $sem;?></h3>
	
	<div class="main-page-view-student">
	<h3 class="faculty-login">Students List</h3>
	<table align="center" id="student-view-table">
		<tr>
			<th>Sr. No.</th>
			<th>Roll No.</th>
			<th>Name</th>
			<th>Department</th>
			<th colspan="2">Action</th>
		</tr>
		<?php 
		$i=1;
		$x=mysqli_query($al,"SELECT * FROM students WHERE sem='$sem'");
		while($y=mysqli_fetch_array($x))
		{
			?>
		<tr align="center">
			<td><?php echo $i;$i++;?></td>
			<td><?php echo $y['roll'];?></td>
			<td><?php echo $y['name'];?></td>
			<td><?php echo $y['dept'];?></td>
			<td><a href="delete.php?del=<?php echo $y['id'];?>" onclick="return confirm('Are You Sure..?');" class="link" style="font-size:14px;">Edit</a></td>
			<td><a href="delete.php?del=<?php echo $y['id'];?>" onclick="return confirm('Are You Sure..?');" class="link" style="font-size:14px;">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<br>
	<br>
	<a href="dashboard.php" class="cmd">Back Dashboard</a>
	</div>
	<footer class="footer"><p>&copy; Group of Md. Rakib Hasan [CSE, NUB]</p></footer>
</body>
</html>