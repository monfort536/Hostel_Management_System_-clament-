<doctype html>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 968px;">
<?php
if(isset($_POST['submit']))
{
$accountnumber=$_POST['anum'];
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT * from form where accountnumber='$accountnumber'");
while($row = mysqli_fetch_assoc($query))
{
?>
<center>
<h1>Leave Form</h1>
<br>
<table>
<tr>
<th>Accountnumber</th>
<td><?php echo $row['anum']; ?></td>
</tr>
<tr>
<th>Name</th>
<td><?php echo $row['name']; ?></td>
</tr>
<tr>
<th>Leave Type</th>
<td><?php echo $row['type']; ?></td>
</tr>
<tr>
<th>Start Date</th>
<td><?php echo $row['start']; ?></td>
</tr>
<tr>
<th>End Date</th>
<td><?php echo $row['end']; ?></td>
</tr>

<tr>
<th>No.of Days</th>
<td><?php echo $row['total']; ?></td>
</tr>
<tr>
<th>Reason</th>
<td><?php echo $row['reason']; ?></td>
</tr>
</table>
<?php
}
}
?><br><br>
<button onclick="window.print()">PRINT</button><br></center>
</body>
</html>