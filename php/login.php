<?php
$Name =$_POST['name'];
$Accountnumber =$_POST['number'];


session_start();

$session["pro"]=$Name;

$conn =mysqli_connect("localhost", "root","", "hostel");
$sql = "SELECT *
            FROM student
            WHERE Name='$Name' and Accountnumber='$Accountnumber'";
			
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	header('Location:/html/sdash.html');
}
else{
	echo "YOUR ACC NO IS INCORRECT;";
}


?>