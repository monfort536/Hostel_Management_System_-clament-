<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
$con=mysqli_connect('localhost','root','','hostel');
$query = mysqli_query($con,"SELECT * from mess where day='$id'");
$row = mysqli_fetch_assoc($query);
if(isset($_POST['submit']))
{
	$breakfast=$_POST['breakfast'];
	$lunch=$_POST['lunch'];
	$dinner=$_POST['dinner'];
 $query = mysqli_query($con,"update mess set breakfast='$breakfast',lunch='$lunch',dinner='$dinner' where day='$id'");
if($query)
{
	echo"data updated";
}
else{
	echo"not updated";
}
}
?>
<html>
<body>
<center>
<form action="" method="POST">
<h3>UPDATE MESS DETAILS</h3>
Day:<input type="text" name="day" value="<?php echo $id;?>" readonly><br><br>
Breakfast:<input type="text" name="breakfast" value="<?php echo $row['breakfast']; ?>"  required><br><br>
Lunch:<input type="text" name="lunch" value="<?php echo $row['lunch']; ?>" required><br><br>
Dinner:<input type="text" name="dinner" value="<?php echo $row['dinner']; ?>" required><br><br>
<input type="submit"  id="save" name="submit">
 <input type='Reset' name='Reset' value="Reset">		
</form>
</center>
</body>
</html>