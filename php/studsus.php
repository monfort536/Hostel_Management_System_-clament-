<html>
<body style="background-image: url('allb.jpg');
background-size: 1966px 5000px;">
<center>
<h1>SUGGESTION BOX</h1>
</center>
<?php
if(isset($_POST['submit']))
{
$date=$_POST['date'];
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT accountnumber from suggestion where date='$date'");
while($row = mysqli_fetch_assoc($query))
{
?>
<center>
<br>
<table>
<tr>
<th>Accountnumber</th>
<td><?php echo $row['accountnumber'];?></td>
</tr>
</table>
<?php
}
}
?>
<a href="prisus.php">suggestion</a>
</center>
</body>
</html>