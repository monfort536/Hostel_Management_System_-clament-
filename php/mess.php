<html>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 968px;">
<center>
<h1>Mess Details</h1>
<table border=1>
<tr>
<th>Day</th>
<th>BreakFast</th>
<th>Lunch</th>
<th>Dinner</th>
<th>Action</th></tr>
<?php
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT * from mess");
while($row = mysqli_fetch_assoc($query))
{
?>
<tr>
<td><?php echo $row['day']; ?></td>
<td><?php echo $row['breakfast']; ?></td>
<td><?php echo $row['lunch']; ?></td>
<td><?php echo $row['dinner']; ?></td>
<td><a href="update.php?id=<?php echo $row['day']; ?>"><button>update</button></a></td>
<?php
}
?>
</table>

<br><br>
<button onclick="window.print()">PRINT</button><br>
</center>
</body>
</html>