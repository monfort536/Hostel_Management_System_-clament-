<!DOCTYPE html>
<html>
<head>
	<title>Attendance Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
		$("#attendance-form").submit(function(event) {
			event.preventDefault();
			var form = $(this);
			var formData = form.serialize();
			$.ajax({
				type: "POST",
				url: "attendance.php",
				data: formData,
				success: function(data) {
					alert(data);
					form.trigger("reset");
				}
			});
		});
	});
	</script>
</head>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 968px;">
<center>
	<h1>Attendance Register</h1>
	<form method="POST" action="">
		<label>Date:</label>
		<input type="date" name="date" required><br><br>
		<label for="appt">Time:</label>
  <input type="time" id="appt" name="appt"><br><br>
		<label>Room Number:</label>
		<select name="roomnumber" required>
			<option value="">--Select--</option>
			<option value="101">Room 101</option>
			<option value="102">Room 102</option>
			<option value="103">Room 103</option>
			<option value="104">Room 104</option>
			<option value="105">Room 105</option>
			<option value="106">Room 106</option>
			<option value="107">Room 107</option>
			<option value="108">Room 108</option>
			<option value="109">Room 109</option>
			<option value="110">Room 110</option>
			<option value="112">Room 112</option>
		</select><br><br>
		<label>Student Name:</label>
		<select name="studentname" required>
			<option value="">--Select--</option>
			<option value="John">John</option>
			<option value="Marian">Marian</option>
			<option value="joe">Joe</option>
			<option value="Jerald">Jerald</option>
			<option value="Akash">Akash</option>
			<option value="Clament">Clament</option>
			<option value="Beni">Beni</option>
			<option value="Infant">Infant</option>
			<option value="Akira">Akira</option>
			<option value="Joyson">Joyson</option>
			<option value="Dharun">Dharun</option>
			
		</select><br><br>
		<label>Attendance Status:</label>
		<input type="radio" name="attendance_status" value="present" required>Present
		<input type="radio" name="attendance_status" value="absent">Absent
		<input type="radio" name="attendance_status" value="late">Late<br><br>
		<input type="submit"  id="save" name="submit">
 <input type='Reset' name='Reset' value="Reset">
		
		
<?php
if(isset($_POST['submit']))
	{
	$con=mysqli_connect('localhost','root','','hostel');
	if($con)
	{echo"connect";}
	$date=$_POST['date'];
	$time=$_POST['appt'];
	$roomnumber=$_POST['roomnumber'];
	$studentname=$_POST['studentname'];
	$attendancestatus=$_POST['attendance_status'];
    

$sql="insert into attendance(date,time,roomnumber,studentname,attendancestatus)values('$date','$time','$roomnumber','$studentname','$attendancestatus')";




$query=mysqli_query($con,$sql);

if($query)
{
echo" DATA STORED SUCCESSFULLY.....";
}
else
{
echo"FAILED NOT STORED????????";
}
}

?>		
	</form>
	<br><br>
	<table border=1>
		<tr>
			<th>Date</th>
			<th>Room Number</th>
			<th>Student Name</th>
			<th>Attendance Status</th>
		</tr>
		<tr>
			<td>2023-03-15</td>
			<td>101</td>
			<td>John</td>
			<td>Present</td>
		</tr>
	</table>
	</center>
</body>
</html>
