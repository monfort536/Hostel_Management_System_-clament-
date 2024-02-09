<html>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 5000px;">
<?php
if(isset($_POST['submit']))
{
$accountnumber=$_POST['accountnumber'];
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT*from suggestion where accountnumber='$accountnumber'");
while($row = mysqli_fetch_assoc($query))
{
?>
<center>
<h1>SUGGESTION BOX</h1>
<br>
<table>
<tr>
<th>Date</th>
<td><?php echo $row['date']; ?></td>
</tr>
<tr>
<th>Name</th>
<td><?php echo $row['name']; ?></td>
</tr>
<tr>
<th>accountnumber</th>
<td><?php echo $row['accountnumber']; ?></td>
</tr>
<tr>
<th>Roomnumber</th>
<td><?php echo $row['roomnumber']; ?></td>
</tr>
<tr>
<th>Suggestion Box</th>
<td><?php echo $row['suggestion']; ?></td>
</tr>
</table>
<?php
}
}
?>
<br><br>
<button onclick="window.print()">PRINT</button><br>
</center>
</body>
</html>