<!DOCTYPE html>
<html>
<head>
	<title>Inventory Management - Hostel Management System</title>
</head>
<body style="background-image: url('/images/od.jpg');
background-size: 1966px 968px;">
<center>
	<header>
		<h1>Inventory Management</h1>
	</header>
	<main>
		<h2>Add Item to Inventory:</h2>
		<form action="" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br><br>
			<label for="quantity">Quantity:</label>
			<input type="number" id="quantity" name="quantity" min="1" required><br><br>
			<input type="submit"  id="save" name="submit">
 <input type='Reset' name='Reset' value="Reset">
		
 
			
			
<?php
if(isset($_POST['submit']))
	{
	$con=mysqli_connect('localhost','root','','hostel');
	if($con)
	{echo"connect";}
	$name=$_POST['name'];
	$quantity=$_POST['quantity'];


    

$sql="insert into inventory(name,quantity)values('$name','$quantity')";




$query=mysqli_query($con,$sql);

if($query)
{
echo "DATA STORED SUCCESSFULLY ......";
}
else
{
echo"NOT STORED FAILED???????";
}
}

?>
		</form>
		<h2>View Inventory:</h2>
		<table border=1>
			<thead>
				<tr>
					<th>Name</th>
					<th>Quantity</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Bed Sheets</td>
					<td>20</td>
				</tr>
				<tr>
					<td>Pillows</td>
					<td>10</td>
				</tr>
			</tbody>
		</table>
	</main>
	</center>
</body>
</html>
