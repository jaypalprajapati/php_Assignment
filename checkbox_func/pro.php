<?php
include '../dbconnect.php';

$subject=$_GET['check'];
$subject=implode(", ", $_GET['check']);
$qry = "INSERT INTO table1(text1) VALUES('".$subject."')";
$rs=mysqli_query($conn,$qry);
if ($rs == 1)
 {
	echo "done";
	//header("location:index.php");
}
else  	
 {echo "NOT done";
	//header("location:Sampleform.php");
 }
?>