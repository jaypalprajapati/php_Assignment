<?php
require 'dbconnect.php';

$id = $_GET['id'];
// $qry="UPDATE emp SET isactive=2 WHERE id=$id";
$qry = "DELETE FROM emp WHERE id=$id";
$rs = mysqli_query($conn, $qry);
// if($rs)
// {

// 	echo"Deleted";
// 	header("location:index.php");
// 	exit();
// }
// else
// {
// 	echo "Error...";
// }
if ($rs) {

	echo "1";
} else {
	echo "Error...";
}
