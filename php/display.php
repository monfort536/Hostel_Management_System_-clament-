<?php
$Name =$_POST['name'];
$Accountnumber= $_POST['number'];

$conn =mysqli_connect("localhost", "root","", "hostel");
$sql = "SELECT Name,Accountnumber 
            FROM student
            WHERE Accountnumber=$Accountnumber";
			
$result = $conn->query($sql);
  



if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
   

   
   echo "<html><center><h1>LOGIN</h1>
        <table border='1'>
		<tr><td>NAME</td><td>".$row["name"]."</td></tr>
		<tr><td>ACC NO</td><td>".$row["number"]."</td></tr>
		
   
   <center>
   </html>";
   
  }
} else {
  echo "Acc no  is incorrect";
}


?>