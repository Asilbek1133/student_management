<?php
include "../config/db.php";

$id = $_POST['id'];
$first_name =$_POST['first_name'];
$last_name = $_POST ['last_name'];
$subject =$_POST['subject'];
$Experience = $_POST['Experience'];
$phone =$_POST['phone'];
$address= $_POST['address'];


$sql = "UPDATE teachers
SET first_name= ?, last_name =?, subject =?, Experience =?, phone =? ,address=? 
WHERE id = ?";
$data =$conn->prepare($sql);
$data->execute([$first_name,$last_name,$subject,$Experience,$phone,$address,$id]);
header("Location:index.php"); 