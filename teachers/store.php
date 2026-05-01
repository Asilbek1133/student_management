<?php
include "../config/db.php";
$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$subject =$_POST['subject'];
$Experience =$_POST['experience'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "INSERT INTO teachers( first_name,last_name, subject, Experience,phone,address) 
  VALUES(?,?,?,?,?,?)";
  $data = $conn->prepare($sql);
$data->execute([$first_name,$last_name,$subject,$Experience,$phone,$address]);

header("Location: index.php");

?>  