<DOCTYPE html>
  <html>

<?php

$stu_name = $_POST['sname'];
$stu_address =  $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


$conn  = mysqli_connect("localhost","root","","students")or die ("connection failed");

$sql ="INSERT into student (sname,saddress,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($conn,$sql) or die("querry failed");

echo "Record added succufully";

mysqli_close($conn);

 ?>

 <html>
 <br><br><br>


<form action="index.php" method="post">

  <button type="submit">return home</button>
</form>
 </html>
<html>
