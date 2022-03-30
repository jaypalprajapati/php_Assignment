<?php
require 'dbconnect.php';

if(!isset($_GET['btn_sb']))
{
	header("location:form1.php");
	exit();
}
$fn = $_GET['fname'];
$ln = $_GET['lname'];
$email = $_GET['email'];
$pw = $_GET['password'];
$cw = $_GET['cpass'];
$add = $_GET['Address'];
$mb = $_GET['MobileNo'];
$drop = $_GET['Designation'];
$gd = $_GET['gender'];

if($pw!=$cw)
{
	echo "password and cpassword doesnot match";
	exit();
}
$qry1 = "SELECT * FROM emp where email = '".$email."'";
echo "$qry1";

$rs1 = mysqli_query($conn,$qry1);
if (mysqli_num_rows($rs1)>0)
 {
	echo "EMAIL ALREADY EXIST";
	exit();
}

$qry = "INSERT INTO emp(fname,lname,email,address,mobile,password,designation,gender) VALUES('".$fn."','".$ln."','".$email."','".$add."','".$mb."','".$pw."','".$drop."','".$gd."')";

echo "$qry";

$rs=mysqli_query($conn,$qry);
if ($rs)
 {
	echo "Insert SUCCESS";
	header("location:index.php");
}
else 
 {
	header("location:form1.php");
 }
?>