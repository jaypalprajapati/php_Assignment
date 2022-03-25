<?php
require 'dbconnect.php';
var_dump($_POST);
$id=$_GET['id1'];
// $qry="UPDATE emp SET isactive=2 WHERE id=$id";
$qry ="DELETE FROM emp WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{

	echo"Deleted";
	header("location:index.php");
	exit();
}
else
{
	echo "Error...";
}
?>