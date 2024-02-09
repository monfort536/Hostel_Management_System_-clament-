<!DOCTYPE html>
<html>
<head>
	<title>Complaint Management - Hostel Management System</title>
</head>
<body style="background-image: url('/images/od.jpg');
background-size: 1966px 968px;">
<center>
	<header>
		<h1>Complaint Management</h1>
	</header>
	<main>
		<h2>Submit a Complaint:</h2>
		<form action="" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br><br>
			<label for="phone">Phone:</label>
			<input type="text" id="phone" name="phone" required><br><br>
			<label for="complaint">Complaint:</label>
			<textarea id="complaint" name="complaint" required></textarea><br><br>
			
		
		<input type="submit"  id="save" name="submit">
 <input type='Reset' name='Reset' value="Reset">
			
			
	<?php
if(isset($_POST['submit']))
	{
	$con=mysqli_connect('localhost','root','','hostel');
	if($con)
	{echo"connect";}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$complaint=$_POST['complaint'];
    

$sql="insert into complaint(name,email,phone,complaint)values('$name','$email','$phone','$complaint')";




$query=mysqli_query($con,$sql);

if($query)
{
echo"DATA STORED SUCCESSFULLY.....";
}
else
{
echo"FAILED NOT STORED????????";
}
}

?>
</center>
</form>
</body>
</html>
