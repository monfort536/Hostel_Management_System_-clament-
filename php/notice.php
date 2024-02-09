<!DOCTYPE html>
<html>
<head>
	<title>Notice Management - Hostel Management System</title>
</head>
<body style="background-image: url('/images/od.jpg');
background-size: 1966px 968px;">
<center>
	<header>
		<h1>Notice Management</h1>
	</header>
	<main>
		<h2>Create a Notice:</h2>
		<form action="" method="post">
			<label for="title">Title:</label>
			<input type="text" id="title" name="title" required><br><br>
			<label for="description">Description:</label>
			<textarea id="description" name="Description" required></textarea><br><br>
			<label for="expiry">Expiry Date:</label>
			<input type="date" id="expiry" name="expiry" required><br><br>
		<input type="submit"  id="save" name="submit">
 <input type='Reset' name='Reset' value="Reset">
		
 
			
			
	<?php
if(isset($_POST['submit']))
	{
	$con=mysqli_connect('localhost','root','','hostel');
	if($con)
	{echo"connect";}
	$title=$_POST['title'];
	$Description=$_POST['Description'];
	$expiry=$_POST['expiry'];

    

$sql="insert into notice(title,Description,expiry)values('$title','$Description','$expiry')";




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
