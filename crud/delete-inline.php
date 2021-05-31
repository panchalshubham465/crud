<?php


$stu_id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","students") or die("Connection failed");

$sql ="Delete FROM student where sid ={$stu_id}";

$result = mysqli_query($conn,$sql) or die("Connection failed");

header("Location:http://localhost/Myfiles/crud")











 ?>
