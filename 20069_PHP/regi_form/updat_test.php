<?php
session_start();
require 'dbconnect.php';
//require 'finalupload_user.php';
if (isset($_POST['btn_sb']) && count($_POST) > 0) {
	include "validate.php";
	if ($error == 0) {
		print_r($msg);
		//echo "failed to submit form";
		$_SESSION['error_message'] = $msg;
		// header('Location:index.php');
		//exit();
	}

	//var_dump($_POST);
	$id = $_POST['id'];
	$fn = $_POST['name'];
	$ln = $_POST['name1'];
	$email = $_POST['email'];
	$pw = $_POST['password'];
	$add = $_POST['Address'];
	$mb = $_POST['MobileNo'];
	$drop = $_POST['Designation'];
	$gd = $_POST['gender'];
	$file = $_FILES["fileToUpload"]["name"];
	$rfile=rand().$file;
	
	//check if alrady exist 
	$qry1 = "SELECT * FROM emp where email = '" . $email . "' ";
	$rs1 = mysqli_query($conn, $qry1);
	if (mysqli_num_rows($rs1) > 1) {
		//  echo"$qry";
		 $_SESSION['error_email_message'] = "EMAIL ALREADY EXIST";
		//echo"email already exists";
		header("Location:editjs.php?id=$id");
		 exit;
	
	}else

	if ($fn != "" && $ln != "" && $email != "" && $pw != "" && $add != "" && $mb != "" && $drop != "") {
		$target_dir = "upload/";
		$target_file = $target_dir . $rfile;
		// $target_file = $target_dir . "101_" . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		if(!empty($file)){
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($filetype != "docx" && $filetype != "pdf" && $filetype != "xlsx"  && $filetype != "txt") {
                echo "Sorry, only PDF,DOC and XLS files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            }
			// Allow certain file formats

		 else {

			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$select="select * from emp where id='$id'";
				$data= mysqli_query($conn, $select);
				$result=mysqli_num_rows($data);
				$row=mysqli_fetch_assoc($data);
				unlink("upload/".$row['resume']);
				// echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

				$qry = "UPDATE emp SET fname='" . $fn . "',lname='" . $ln . "' ,email='" . $email . "' ,address='" . $add . "',mobile='" . $mb . "' ,password='" . $pw . "' ,designation='" . $drop . "' ,gender='" . $gd . "',resume='" . $rfile . "'  WHERE id=$id";
			
				$rs = mysqli_query($conn, $qry);

				if ($rs) {
					//echo "Record Updated Sucessfully";
					header("location:index.php");
					//exit();
				} else {
					echo "<center>" . "ERROR: Sorry $qry. " . mysqli_error($conn) . "</center><br>";

					//header("location:editjs.php");
					//exit();
				}
			} else {

				echo "Sorry, there was an error uploading your file .";
			}
		}
	}else{
		$qry = "UPDATE emp SET fname='" . $fn . "',lname='" . $ln . "' ,email='" . $email . "' ,address='" . $add . "',mobile='" . $mb . "' ,password='" . $pw . "' ,designation='" . $drop . "' ,gender='" . $gd . "' WHERE id=$id";
		$rs = mysqli_query($conn, $qry);
		//$edit = "UPDATE `student` SET `fname`='$fname',`lname`='$lname',`email`='$email',`address`='$address',`designation`='$designation',`gender`='$gender' WHERE `id`='$id'"; 
		
		if ($rs) {
			header("Location:index.php");
		}else{
			echo "Error:" . $qry . "<br>" . $conn->error;
		}
	} 
}
	else {
		echo "Error ..!  Please Select All Required Fields";
	}
}

