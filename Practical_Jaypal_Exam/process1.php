<?php
include 'dbconnect.php';
$subject=$_GET['alp'];
$subject=implode(", ", $_GET['alp']);
$qry = "INSERT INTO sampledata(form_data) VALUES('".$subject."')";
$rs=mysqli_query($conn,$qry);
if ($rs)
 {
	echo "done";
	header("location:dataform.php");
}
else  	
 {echo "NOT done";
	header("location:Sampleform.php");
 }
?>