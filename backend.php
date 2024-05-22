<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leaverequest";

$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error){
    die("Connection failed: " .$connect->connect_error);
}

$name=$_POST['name'];
$leavetype=$_POST['leavetype'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];

$sql="INSERT INTO leavedata (User_Name, Leave_Type, Start_Date, End_Date) VALUES('$name','$leavetype','$startdate', '$enddate')";

if($connect->query($sql)==TRUE){
    echo "Your Request for Leave has been Recorded";
}else{
    echo "Error: " .$sql . "<br>" . $connect->error;
}

$connect->close();


?>