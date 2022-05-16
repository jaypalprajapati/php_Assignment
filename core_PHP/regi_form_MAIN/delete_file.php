<?php
require 'dbconnect.php';

$id = $_GET['id'];
// $qry="UPDATE emp SET isactive=2 WHERE id=$id";
$qry = "DELETE FROM emp WHERE id=$id";
$rs = mysqli_query($conn, $qry);

if ($rs) {

	echo "1";
} else {
	echo "Error...";
}

if(isset($_REQUEST["file"])){
    // Get parameters
    $file = urldecode($_REQUEST["file"]); // Decode URL-encoded string

    /* Test whether the file name contains illegal characters
    such as "../" using the regular expression */
        $filename = "uploads/" . $file;

        //$filename = 'readme.pdf';

    if(file_exists($filename))  
    {
      if(unlink($filename))
      {
          echo "file named $file has been deleted successfully";
          $qry = "DELETE FROM emp WHERE file=$id";
          $rs = mysqli_query($conn, $qry);

      }
      else
      {
          echo "file is not deleted";
      }
    }
}
?>