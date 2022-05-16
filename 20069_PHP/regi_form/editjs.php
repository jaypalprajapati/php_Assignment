<?php
require 'dbconnect.php';
session_start();

//var_dump($row);
if (!isset($_SESSION['email'])) {
	# code...
	header("location:login.php");
	exit();
}
// if (isset($_SESSION['error_message'])) {
// 	echo "<pre>";
// 	print_r($_SESSION['error_message']);
// 	echo "</pre>";
// 	$_SESSION['error_message'] = "";
// }

if (isset($_SESSION['error_email_message'])) {
	echo ($_SESSION['error_email_message']);
	$_SESSION['error_email_message'] = "";
}
$id = $_GET['id'];
//echo"$id"; 
$qry = "SELECT * FROM emp WHERE id=$id";
//echo"$qry";
$rs = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($rs);
?>
<html>

<head>
	<title>Bootstrap Form Demo</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<!-- <link href="bootstrap/bootstrap.css" type="text/css" rel="stylesheet" /> -->
	<!-- online link BS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!--CDN LINK OF JQUERY PARENT PLUG IN - COMPULSORY TO BE HERE. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/velidation.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
	<form name="register" action="updat.php" method="post"  enctype="multipart/form-data" >

		<div class="container">
			<div class="row ">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="abc col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" id="border">
					<h2 class="text-center" style="border-bottom: solid 1px;"><i class="fa fa-user-plus"></i> Create New Account</h2>
					<hr />

					<div class="form-group">
						<b>Firstname</b>

						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input id="fn" type="text" name="name" placeholder="Enter Your firstname" maxlength="20" class="form-control" value="<?php echo $row['fname'] ?>" />
						</div>
						<small id="fnValidation" class="text-danger"></small>
					</div>

					<div class="form-group">
						<b>Lastname</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input id="ln" type="text" name="name1" placeholder="Enter Your lastname " maxlength="20" class="form-control" value="<?php echo $row['lname'] ?>" />
						</div>
						<small id="lnValidation" class="text-danger"></small>
					</div>
					<div class="form-group">
						<b>Address</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<textarea name="Address" class="form-control" required><?php echo $row['address'] ?></textarea>
						</div>
						<small id="lnValidation" class="text-danger"></small>
					</div>
					<div class="form-group ">
						<b>Gender</b>
						<div class="input-group form-control">
							<span class="input-group-addon"><i class="fa fa-female"></i> | <i class="fa fa-male"></i></span>
							<input type="radio" name="gender" value="female" <?php echo $row['gender'] == "female" ? "checked=checked" : ""; ?> required>Female
							<input type="radio" name="gender" value="male" <?php echo $row['gender'] == "male" ? "checked=checked" : ""; ?> required>Male
							<small id="lnValidation" class="text-danger"></small>

						</div>
					</div>

					<div class="form-group">
						<b><i class="fa fa-phone"></i> Contact No.</b>
						<div class="input-group">
							<span class="input-group-addon">+91</span>
							<input id="cn" type="text" name="MobileNo" placeholder="Enter Your contact no. " maxlength="10" class="form-control" value="<?php echo $row['mobile'] ?>" />
						</div>
						<small id="cnValidation" class="text-danger"></small>
					</div>

					<div class="form-group">
						<b><i class="fa fa-phone"></i> Designation</b>
						<div class="input-group form-control">
							<select name="Designation" class="form-control" id="Designation" required>
								<option class="form-control"></option>
								<option value="Jr.Software Devloper" <?php echo $row['designation'] == "Jr.Software Devloper" ? "selected=selected" : ""; ?> class="form-control">Jr.Software Devloper</option>
								<option value="Sr.Software Devloper" <?php echo $row['designation'] == "Sr.Software Devloper" ? "selected=selected" : ""; ?> class="form-control">Sr Devloper</option>
								<option value="Associate Jr.Software Devloper" <?php echo $row['designation'] == "Associate Jr.Software Devloper" ? "selected=selected" : ""; ?> class="form-control">Associate Jr.Software Devloper </option>
								<option value="Business Analyst " <?php echo $row['designation'] == "Business Analyst " ? "selected=selected" : ""; ?> class="form-control"> Business Analyst</option>
							</select>
						</div>
                        <small id="DesignationValidation" class="text-danger"></small>
					</div>
					<div class="form-group">
						<b>Email</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input id="ei" type="text" name="email" placeholder="Enter Your email id " maxlength="50" class="form-control" value="<?php echo $row['email'] ?>" />
						</div>
						<small id="eiValidation" class="text-danger"></small>
					</div>
					<div class="form-group">
						<b>Password</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input id="TxtPassword" name="password" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" value="<?php echo $row['password'] ?>" />
						</div>
						<small id="TxtPasswordValidation" class="text-danger"></small>
					</div>
					<!-- <div class="form-group">
                        <b>Profile photo</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="file" type="file" name="fileToUpload" class="form-control" />
                            <div ></div>
                        </div>
                        <small id="fileValidation" class="text-danger"></small>
                    </div> -->
					<!-- <div class="form-group">
						<b>Confirm Password</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input id="TxtPassword" name="cpass" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" />
						</div>
						<small id="TxtPasswordValidation" class="text-danger"></small>
					</div> -->
					<div class="form-group">

						<input class="btn btn-success" id="BtnSubmit"type="submit" name="btn_sb" value="Updte">
					</div>
				</div>
			</div>
		</div>
	</form>
</body>

</html>