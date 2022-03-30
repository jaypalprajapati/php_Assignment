<?php
session_start();
require 'dbconnect.php';
require 'finalupload_user.php';
if(isset($_POST) && count($_POST)>0)
{    
	include "validate.php";
	if($error==0)
	{
		//print_r($msg);
		$_SESSION['error_message'] = $msg;
		header('Location:index.php');
		exit();
	}
	

$fn = $_POST['name'];
$ln = $_POST['name1'];
$email = $_POST['email'];
$pw = $_POST['password'];
$cw = $_POST['cpass'];
$add = $_POST['Address'];
$mb = $_POST['MobileNo'];
$drop = $_POST['Designation'];
$gd = $_POST['gender'];
$fu=$_SESSION['target_file'];
if($pw!=$cw)
{
	echo "password and cpassword doesnot match";
	exit();
}
$qry1 = "SELECT * FROM emp where email = '".$email."'";
$rs1 = mysqli_query($conn,$qry1);
if (mysqli_num_rows($rs1)>0)
 {
	$_SESSION['error_email_message'] = "EMAIL ALREADY EXIST";
	header('Location:jsform.php');
	exit();
}

$qry = "INSERT INTO emp(fname,lname,email,address,mobile,password,designation,gender,resume) VALUES('".$fn."','".$ln."','".$email."','".$add."','".$mb."','".$pw."','".$drop."','".$gd."','".$fu."')";

echo "$qry";

$rs=mysqli_query($conn,$qry);
if ($rs)
 {
	echo "Insert SUCCESS";
	header("location:index.php");
}
else  	
 {
	header("location:jsform.php");
 }
}
?>