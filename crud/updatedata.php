<?php


$stu_name = $_POST['sname'];
$stu_address =  $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];
$stu_id = $_POST['sid'];


$conn = mysqli_connect("localhost","root","","students") or die("Connection failed");
$sql ="UPDATE student SET sname='{$stu_name}',saddress='{$stu_address}',sclass='{$stu_class}',sphone='{$stu_phone}' WHERE sid={$stu_id}";


$result= mysqli_query($conn,$sql) or die("querry error");


header("location: http://localhost/Myfiles/crud/index.php");

mysqli_close($conn);




 ?>
