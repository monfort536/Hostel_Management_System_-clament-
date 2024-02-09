<html>
<body>
<?php
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT * from attendance");
while($row = mysqli_fetch_assoc($query))
{
?>
<center>
<h1>Attendance Form</h1>
<br>
<table border=1>
<tr>
<th>Date</th>
<td><?php echo $row['date']; ?></td>
</tr>
<tr>
<th>Time </th>
<td><?php echo $row['time']; ?></td>
</tr>
<tr>
<th>Room Number</th>
<td><?php echo $row['roomnumber']; ?></td>
</tr>
<tr>
<th>Student Name</th>
<td><?php echo $row['studentname']; ?></td>
</tr>
<tr>
<th>Attendance Status</th>
<td><?php echo $row['attendancestatus']; ?></td>
</tr>
</table>
<?php
}
?>

<br><br>
<button onclick="window.print()">PRINT</button><br></center>
</body>
</html>