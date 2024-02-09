<?php
$username=$_POST['name'];
$password=$_POST['number'];
$conn =mysqli_connect("localhost", "root","","hostel");
$sql="SELECT *
            FROM pass
            WHERE username='$username' and password='$password'";

$result = $conn->query($sql);

if($result->num_rows>0) {
header('Location:/html/adash.html');
}
else{
echo "YOUR PASSWORD IS INCORRECT;";
}


?>