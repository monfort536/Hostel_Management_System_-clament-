<html>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 968px;">
<center>
<h1>Student Details</h1>

<table border=1>
<tr>
<th>Name</th>
<th>Father Name</th>
<th>Mother Name</th>
<th>Age</th>
<th>class</th>
<th>Mark</th>
<th>Email</th>
<th>Phone Number</th>
<th>Address</th>
<th>Parents number1</th>
<th>Parents number2</th>
<th>parish</th>
<th>Diocese</th>
<th>photo</th>
<?php
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT * from register");
while($row = mysqli_fetch_assoc($query))
{
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['mname']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['mark']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['number']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['number1']; ?></td>
<td><?php echo $row['number2']; ?></td>
<td><?php echo $row['parish']; ?></td>
<td><?php echo $row['diocese']; ?></td>
<td><?php echo $row['photo']; ?></td>
</tr>
<?php
}
?>
</table>
<br><br>
<button onclick="window.print()">PRINT</button><br></center>
</body>
</html>