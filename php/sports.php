<!DOCTYPE html>
<html>
<head></head>
<body style="background-image: url('rt.jpg');
background-size: 1966px 968px;">

<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1>S.H Sports:</h1></td>
</tr><center>
<form method="POST">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>Name:</td>
    <td><input type='text' name='name'  required=""></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Father Name:</td>
    <td><input type='text' name='fname'  required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Age:</td>
    <td><input type='text' name='sage'  required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Date Of Birth:</td>
    <td><input type='date' name='dob'  required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Address:</td>
    <td><input type='text' name='add'  required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Phone:</td>
    <td><input type='text' name='snum'  required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Email:</td>
    <td><input type='text' name='email' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Games Name:</td>
<td>
<select name="game" required="">
<option value="Game">Games</option>
<option value="Football">Football</option>
<option value="Volleyball">Volleyball</option>
<option value="Cricket">Cricket</option>
<option value="Chess">Chess</option>
<option value="Carromboard">Carromboard</option>
<option value="kabbadi">kabbadi</option>
</select>
    </td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Upload Photo:</td>
    <td><input type="file" id="myFile" name="filename" required >
</tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type="submit"  id="save" name="submit">
<input type='Reset' name='Reset' value="Reset"></td>
</form>
</tr>
</table>
</table>

</table>

<?php
	if(isset($_POST['submit']))
	{
	$con=mysqli_connect('localhost','root','','hostel');
	if($con)
	{echo"connect";}
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$age=$_POST['sage'];
	$dob=$_POST['dob'];
	$address=$_POST['add'];
	$phone=$_POST['snum'];
	$email=$_POST['email'];
	$game=$_POST['game'];
	$photo=$_POST['filename'];
	$sql="insert into sports(name,fname,age,dob,address,phone,email,game,photo) values('$name','$fname','$age','$dob','$address','$phone','$email','$game','$photo')";
	
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
</body>
</html>
