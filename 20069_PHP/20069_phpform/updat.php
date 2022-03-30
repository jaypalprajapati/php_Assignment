<?php

session_start();
require 'dbconnect.php';
//var_dump($_GET);
$id=$_GET['id'];
$fn = $_GET['fname'];
$ln = $_GET['lname'];
$email = $_GET['email'];
$pw = $_GET['password'];
$add = $_GET['Address'];
$mb = $_GET['MobileNo'];
$drop = $_GET['Designation'];
$gd = $_GET['gender'];

$qry="UPDATE emp SET fname='".$fn."',lname='".$ln."' ,email='".$email."' ,address='".$add."',mobile='".$mb."' ,password='".$pw."' ,designation='".$drop."' ,gender='".$gd."' WHERE id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated";
	 header("location:index.php");
	 exit();
}
else
{
	echo "Error...";
}
?>