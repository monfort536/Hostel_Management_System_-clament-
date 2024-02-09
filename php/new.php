<!DOCTYPE html>
<html lang="en">
<head>
<style>
.main{
    height: auto;
    width: 100%;
}
.inner{
    width: 100%;
    height: 1200px;
    border: 1px solid white;
    box-shadow: 0 0 10px ;
    margin: 30px auto 30px auto;
}
.welcome{
    text-align: center;
    padding: 30px;
    font-size: 60px;
    font-family: Serif;
    border-bottom: 1px solid black;
    background-color:  ;
    color: white;
}
.rleft_body
{
    width: 60%;
    float: left;
    margin-top: 90px;
}
.rleft_body label
{
    font-size: 20px;
    font-style: oblique;
    padding: 100px;
    line-height: 2.5;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.rright_body{
    width: 40%;
    float: left;
    margin-top: 85px;
}
.rright_body input{
    font-size: 20px;
    font-style: oblique;
    margin-top: 3px;
    width: 80%;
    border: none;
    border-bottom: 1px solid black;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.registration_submit{
    clear: both;
    height: auto;
    text-align: center;
}
#save{
    font-size: 25px;
    background-color: black;
    color: white;
    padding: 5px 35px 5px 35px ;
    border: none;
    margin-top: 40px;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOSTEL REGISTRATION FORM</title>
</head>
<body style="background-image: url('/images/allb.jpg');
background-size: 1966px 11808px;">
   <div class="main">
        <div class="inner">
            <div class="welcome">
                Student's Registration Form
            </div>
            <div class="registration_options">
                <form action="" method="post">
                    <div class="rleft_body">
                        <label for="">
                             Name of Student
                        </label>
                        <br>
                        <label for="">
                             Father name
                        </label>
                        <br>
                        <label for="">
                              Mother name
                        </label>
                        <br>
                        <label for="">
                             Age 
                        </label>
                        <br>
                        <label for="">
                             Class 
                        </label>
                        <br>
                        <label for="">
                            12th Std Mark
                        </label>
                        <br>
                        <label for="">
                            Email Id
                        </label>
                        <br>
                        <label for="">
                           Student phone number
                        </label>
						<br>
                        <label for="">
                         Permanent Address
                        </label>
                        <br>
                        <label for="">
                         Parents Phone number 1
                        </label>
						<br>
                        <label for="">
                          Parents Phone number 2
                        </label>
						<br><br>
                        <label for="">
                           Name of the parish(If Roman Catholic)
                        </label>
						<br><br>
                        <label for="">
                           Name of the Diocese(If Roman Catholic)
                        </label><br><br><br>
						<label for="">
                           Upload Photo
                        </label>
						
                    </div>
                    <div class="rright_body">
                        <input type="text" name="sname" id="" required>
                        <br><br>
                        <input type="text" name="fname" id="" required>
                        <br><br>
                        <input type="text" name="mname" id=""required>
                        <br><br>
                        <input type="number" name="sage" id=""required>
                        <br><br>
                        <input type="text" name="sclass" id=""required>
                        <br><br>
                        <input type="text" name="smark" id="" required>
                        <br><br>
                        <input type="email" name="email" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        <br><br>
                        <input type="tel" name="snmbr" id="" required>
                        <br><br>
						<input type="Address" name="add" id="" required>
                        <br><br>
                        <input type="tel" name="spho" id="" required>
                        <br><br>
						<input type="tel" name="sphon" id="" required>
                        <br><br>
						<input type="text" name="par" id="" required>
                        <br><br>
						<input type="text" name="dio" id="" required>
						<br><br>
						 <input type="file" id="myFile" name="filename" required >
						 </div>
						
                    <div class="registration_submit"><br><br><br>
                        <input type="submit"  id="save" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
	<?php
	if(isset($_POST['submit']))
	{
	$con=mysqli_connect('localhost','root','','hostel');
	if($con)
	{echo"connect";}
	$name=$_POST['sname'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$age=$_POST['sage'];
	$class=$_POST['sclass'];
	$mark=$_POST['smark'];
	$email=$_POST['email'];
	$number=$_POST['snmbr'];
	$address=$_POST['add'];
	$number1=$_POST['spho'];
	$number2=$_POST['sphon'];
	$parish=$_POST['par'];
	$diocese=$_POST['dio'];
	$photo=$_POST['filename'];
$sql="insert into register(name,fname,mname,age,class,mark,email,number,address,number1,number2,parish,diocese,photo)values('$name',
'$fname','$mname',$age,'$class','$mark','$email',$number,'$address',$number1,$number2,'$parish','$diocese','$photo')";


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