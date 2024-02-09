<!DOCTYPE html>
<html>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 968px;">
<center>
<h3>Leave Form</h3>
<div>
  <form method="POST">
  <table>
  <tr>
<th>
<label>Account Number</label>
<td>
<input type="text"name="anum" required>
</td>
</th>
</tr>
  <tr>
<th>
<label>Name</label>
<td>
<input type="text"name="name" required>
</td>
</th>
</tr>
  <tr><th>
    <label>Type</label>
<td>
    <select name="type">
      <option value="SL">SL</option>
      <option value="LL">LL</option>
      <option value="ML">ML</option>
 <option value="OD">OD</option>
    </select></td></th></tr>
	
<tr>
<th>
    <label>From</label>
<td>
<input type="Date" name="date1" placeholder="dd-mm-yyyy" required>
</td>
</th>
</tr>
<tr>
<th>
<label>To</label>
<td>
<input type="Date" name="date2" placeholder="dd-mm-yyyy" required>
</td>
</th>
</tr>
<tr>
<th>
<label>No.of Day(s)</label>
<td>
<input type="text"name="day" required>
</td>
</th>
</tr>
<tr>
<th>
<label>Reason</label>
<td>
<textarea name="reason" cols"50"></textarea>
</td>
</th>
</tr>
</table>  
<h5>SL - Short Leave,     LL - Long Leave,    ML - Medical Leave,    OD - On Duty</h5>
<input type="submit"  id="save" name="submit">
 <input type='Reset' name='Reset' value="Reset">
 
</div><br><br>
<a href="sepleave.php">LEAVE FORM</a>
</center>



<?php
if(isset($_POST['submit']))
	{
	$con=mysqli_connect('localhost','root','','hostel');
	if($con)
	{echo"connect";}
	$accountnumber=$_POST['anum'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$start=$_POST['date1'];
	$end=$_POST['date2'];
    $total=$_POST['day'];
	$reason=$_POST['reason'];

$sql="insert into form(accountnumber,name,type,start,end,total,reason)values('$accountnumber','$name','$type','$start','$end','$total','$reason')";




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