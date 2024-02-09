<html>
<body>
<?php


session_start();

$p=$_SESSION["pro"];
$con=mysqli_connect('localhost','root','','hostel');
$sql ="SELECT * from register where Name='$p'";
$result=$con->query($sql);
if($result->num_rows>0){
while($row = $result->fetch_assoc())
{
?>
<center>
<h1>Student Profile</h1>
<br>
<table border=1>
<tr>
<th>Name</th>
<td><?php echo $row['name']; ?></td>
</tr>
<tr>
<th>Father Name</th>
<td><?php echo $row['fname']; ?></td>
</tr>
<tr>
<th>Mother Name</th>
<td><?php echo $row['mname']; ?></td>
</tr>
<tr>
<th>Age</th>
<td><?php echo $row['age']; ?></td>
</tr>

<tr>
<th>class</th>
<td><?php echo $row['class']; ?></td>
</tr>
<tr>
<th>Mark</th>
<td><?php echo $row['mark']; ?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $row['email']; ?></td>
</tr>
<tr>
<th>Phone Number</th>
<td><?php echo $row['number']; ?></td>
</tr>
<tr>
<th>Address</th>
<td><?php echo $row['address']; ?></td>
</tr>
<tr>
<th>Parents number1</th>
<td><?php echo $row['number1']; ?></td>
</tr>
<tr>
<th>Parents number2</th>
<td><?php echo $row['number2']; ?></td>
</tr>
<tr>
<th>parish</th>
<td><?php echo $row['parish']; ?></td>
</tr>
<tr>
<th>Diocese</th>
<td><?php echo $row['diocese']; ?></td>
</tr>
<tr>
<th>photo</th>
<td><?php echo $row['photo']; ?></td>
</tr>
</table>
<?php
}
}
?>

<br><br>
<button onclick="window.print()">PRINT</button><br></center>
</body>
</html>