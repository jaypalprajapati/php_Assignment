<?php
session_start();
if (isset($_SESSION['error_message'])) {
    echo "<pre>";
    print_r($_SESSION['error_message']);
    echo "</pre>";
    $_SESSION['error_message'] = "";
}

if (isset($_SESSION['error_email_message'])) {
    echo ($_SESSION['error_email_message']);
    $_SESSION['error_email_message'] = "";
}
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
    <form name="register" action="process1.php" method="POST" enctype="multipart/form-data">
        <div class="container ca">
            <h3> <a href="login.php" class="fa fa-sign-in fa-5 " style="position: fixed;color:aliceblue"> LOGIN</a> </h3>
            <div class="row ">
                <div class="abc col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" id="border">
                    <h2 class="text-center" style="border-bottom: solid 1px;"><i class="fa fa-user-plus"></i> Create New
                        Account</h2>
                    <hr />
                    <?php
                    if (isset($_GET['email'])) {
                        # code...
                        $email = $_GET['email'];
                    ?>
                        <span style="color:red;text-align: center;"><?php echo "<p>('$email')</p>"; ?></span>
                    <?php
                    } else {
                        $email = "";
                    }
                    ?>
                     <?php
                    if (isset($_GET['pass'])) {
                        # code...
                        $pass = $_GET['pass'];
                    ?>
                        <span style="color:red;text-align: center;"><?php echo "<p>('$pass')</p>"; ?></span>
                    <?php
                    } else {
                        $pass = "";
                    }
                    ?>
                     <?php
                    if (isset($_GET['file'])) {
                        # code...
                        $file = $_GET['file'];
                    ?>
                        <span style="color:red;text-align: center;"><?php echo "<p>('$file')</p>"; ?></span>
                    <?php
                    } else {
                        $file = "";
                    }
                    ?>
                    <hr>
                    <div class="form-group">
                        <b>Firstname</b>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="fn" type="text" name="name" placeholder="Enter Your First Name" maxlength="20" class="form-control" />
                        </div>
                        <small id="fnValidation" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <b>Lastname</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="ln" type="text" name="name1" placeholder="Enter Your Last Name " maxlength="20" class="form-control" />
                        </div>
                        <small id="lnValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <b>Address</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="add" type="text" name="Address" placeholder="Enter Your address " maxlength="20" class="form-control" required />
                        </div>
                        <small id="addValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <b>Gender</b>
                        <div class="input-group ">
                            <span class="input-group-addon"><i class="fa fa-female"></i> | <i class="fa fa-male"></i></span>
                            <input type="radio" name="gender" value="female" required>Female
                            <input type="radio" name="gender" value="male" required checked>Male
                            <small id="lnValidation" class="text-danger"></small>

                        </div>
                    </div>
                    <div class="form-group">
                        <b><i class="fa fa-phone"></i> Contact No.</b>
                        <div class="input-group">
                            <span class="input-group-addon">+91</span>
                            <input id="cn" type="text" name="MobileNo" placeholder="Enter Your contact no. " maxlength="10" class="form-control" />
                        </div>
                        <small id="cnValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group ">
                        <b> Designation</b>
                        <div class="input-group form-control">
                            <select id="Designation" name="Designation" class="input-group form-control">
                                <option value="">Choose Designation</option>
                                <option value="Jr.Software Devloper">Jr.Software Devloper</option>
                                <option value="Sr.Software Devloper">Sr.Software Devloper</option>
                                <option value="Associate Jr.Software Devloper">Associate Jr.Software Devloper</option>
                                <option value="Business Analyst"> Business Analyst</option>
                            </select>
                        </div>
                        <small id="DesignationValidation" class="text-danger"></small>
                    </div>
                    <!-- <div>

            <label>Favorite Subjects:</label>

                <br />

                <input type="checkbox" name="subject[]" value="Math"/>Math

                <br />

                <input type="checkbox" name="subject[]" value="English"/>English

                <br />

                <input type="checkbox" name="subject[]" value="Science"/>Science

                <br />

                <input type="checkbox" name="subject[]" value="History"/>History</div>           <br /> -->
                    <!-- ================================================================================================================================ -->
                    <div class="form-group">
                        <b>Email</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="ei" type="text" name="email" placeholder="Enter Your email id " maxlength="50" class="form-control" />
                        </div>
                        <small id="eiValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <b>Password</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input id="TxtPassword" name="password" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" />
                        </div>
                        <small id="TxtPasswordValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <b>Confirm Password</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input id="cnfPassword" name="cpass" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" />
                        </div>
                        <small id="cnfPasswordValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <b>Profile photo</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input id="file" type="file" name="fileToUpload" class="form-control" />
                            <div ></div>
                        </div>
                        <small id="fileValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <!-- <a class="btn btn-success"><i class="fa fa-user-plus" style="color:white;"></i> Create New Account</a> -->
                        <center> <input class="btn btn-danger" type="reset" style="color:white;">
                            <button class="btn btn-success" type="button" name="btn_sb" id="BtnSubmit">Submit</button>

                        </center>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>