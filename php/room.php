<!DOCTYPE html>
<html>
<head>
	<title>Room Allocation - Hostel Management System</title>
</head>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 968px;">

<center>
	<header>
		<h1>Room Allocation</h1>
	</header>
	<main>
		<h2>Available Rooms:</h2>
		<a>
			<li>Room 101</li>
			<li>Room 102</li>
			<li>Room 103</li>
			<li>Room 104</li>
			<li>Room 105</li>
			<li>Room 106</li>
			<li>Room 107</li>
			<li>Room 108</li>
			<li>Room 109</li>
			<li>Room 110</li>
			<li>Room 111</li>
		</a>
		<h2>Allocate Room:</h2>
		<form action="" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br><br>
			<label for="phone">Phone:</label>
			<input type="text" id="phone" name="phone" required><br><br>
			<label for="room">Room:</label>
			<select id="room" name="room" required>
				<option value="101">Room 101</option>
				<option value="102">Room 102</option>
				<option value="103">Room 103</option>
				<option value="104">Room 104</option>
				<option value="105">Room 105</option>
				<option value="106">Room 106</option>
				<option value="107">Room 107</option>
				<option value="108">Room 108</option>
				<option value="109">Room 109</option>
				<option value="110">Room 110</option>
				<option value="112">Room 112</option>
			</select><br><br>
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
	$room=$_POST['room'];
    

$sql="insert into room(name,email,phone,room)values('$name','$email','$phone','$room')";




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
	</main>
</body>
</html>
