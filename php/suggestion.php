<!DOCTYPE html>
<html>
<head>
<title>Suggestion Box</title>
</head>
<body style="background-image: url('allb.jpg');
background-size: 1966px 5000px;">
<center>
<h1>Hostel Suggestion Box</h1>
<p>Please use the form below to submit your suggestions to the S.H Hostel.</p>
<form method="POST" action="">
<label for="name">DATE:</label>
<input type="date" id="name" name="date" required><br><br>
<label for="name">Name:</label>
<input type="text" id="name" name="name" required><br><br>
<label for="accountnumber">Acc No:</label>
<input type="text" id="name" name="anum" required><br><br>
<label for="roomnumber">Room No:</label>
<input type="text" id="name" name="rnum" required><br><br>
<label for="suggestion">Suggestion:</label><br>
<textarea id="suggestion" name="suggestion" rows="15" cols="50" required></textarea><br><br>
<input type="submit"  id="save" name="submit">
 <input type='Reset' name='Reset' value="Reset"><br><br><br>

</center>

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','','hostel');
if($con)
{
echo"connect";
}
$date=$_POST['date'];
$name=$_POST['name'];
$accountnumber=$_POST['anum'];
$roomnumber=$_POST['rnum'];
$suggestion=$_POST['suggestion'];
 

$sql="insert into suggestion(date,name,accountnumber,roomnumber,suggestion)values('$date','$name','$accountnumber','$roomnumber','$suggestion')";




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
</form>

</body>
</html>
