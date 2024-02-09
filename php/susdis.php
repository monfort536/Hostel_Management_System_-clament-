<html>
<body style="background-image: url('allb.jpg');
background-size: 1966px 5000px;">
<?php
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT * from suggestion");
while($row = mysqli_fetch_assoc($query))
{
?>
<center>
<h1>SUGGESTION BOX</h1>
<br>
<table border=1>
<tr>
<th>Name</th>
<td><?php echo $row['name']; ?></td>
</tr>
<tr>
<th>Dept No</th>
<td><?php echo $row['number']; ?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $row['email']; ?></td>
</tr>
<tr>
<th>Suggestion Box</th>
<td><?php echo $row['suggestion']; ?></td>
</tr>

</table>
<?php
}
?>

<br><br>
<button onclick="window.print()">PRINT</button><br></center>
</body>
</html>