<?php 

require 'dbconnect.php';
$id=$_GET['id'];
$text1=$_GET['t1'];
$text2=$_GET['t2'];
$qry="UPDATE sampledata SET form_text_data='".$text1."', WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
    echo"DONE";
 }
 else
 {
    echo"NOT DONE";
  }
?>