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

    <script type="text/javascript">
        //Reg Ex Declaration - Globaly.
        var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
        var $LNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
        var $FullNameRegEx = /^([a-zA-Z ]{2,40})$/;
        var $BankAccountNameRegEx = /^([a-zA-Z ]{2,60})$/;
        var $PasswordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,12}$/;
        var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
        var $ConNoRegEx = /^([0-9]{10})$/;
        var $AgeRegEx = /^([0-9]{1,2})$/;
        var $AadhaarNoRegEx = /^([0-9]{12})$/;
        var $GSTNoRegEx = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
        var $IndianDrivingLicenseNoRegEx = /^([A-Z]{2,3}[-/0-9]{8,13})$/;
        var $IndianVehicleRegNoRegEx = /^([A-Z]{2}[0-9]{1,2}[A-Z]{1,3}[0-9]{1,4})$/;
        var $PincodeRegEx = /^[1-9][0-9]{5,6}$/;
        var $PANNoRegEx = /^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/;
        var $IFSCCodeRegEx = /^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/;
        var $BankAccountNoRegEx = /^([0-9]{9,18})$/;
        var $PostTitleRegex = /^(.{30,300})$/;
        var $PostDescRegex = /^(.{100,3000})$/;
        var $LatitudeLongitude = /^(-?(?:1[0-7]|[1-9])?\d(?:\.\d{1,8})?|180(?:\.0{1,8})?)$/;


        var TxtNameFlag = false,
            lnNameFlag = false,
            eiNameFlag = false,
            TxtDateFlag = false,
            addNameFlag = false,
            DesignationFlag = false,
            TxtContactNoFlag = false,
            TxtContactMsgFlag = false;

        //var curr_date = new Date();
        //var month = curr_date.getMonth()+1;
        //var day = curr_date.getDate();
        //var output = curr_date.getFullYear() - 18 + '-' + (month<10 ? '0' : '') + month + '-' + (day<10 ? '0' : '') + day;

        $(document).ready(function() {
            $("#fn").blur(function() {
                TxtNameFlag = false;
                $("#fnValidation").empty();
                if ($(this).val() == "") {
                    $("#fnValidation").html("(*) First name Required..!!");
                    // alert("#fnValidation");
                } else {
                    if (!$(this).val().match($FNameLNameRegEx)) {
                        $("#fnValidation").html("(*) Invalid First Name..!!");
                        // alert("#fnValidation");
                    } else {
                        TxtNameFlag = true;
                    }
                }

            });
        });



        $(document).ready(function() {
            $("#ln").blur(function() {
                lnNameFlag = false;
                $("#lnValidation").empty();
                if ($(this).val() == "") {
                    $("#lnValidation").html("(*) Last Name Required..!!");

                } else {
                    if (!$(this).val().match($LNameLNameRegEx)) {
                        $("#lnValidation").html("(*) Invalid Last Name..!!");
                    } else {
                        lnNameFlag = true;
                    }
                }

            });
            $(document).ready(function() {
                $("#ei").blur(function() {
                    eiNameFlag = false;
                    $("#eiValidation").empty();
                    if ($(this).val() == "") {
                        $("#eiValidation").html("(*) Email_id required..!!");

                    } else {
                        if (!$(this).val().match($EmailIdRegEx)) {
                            $("#eiValidation").html("(*) Invalid Email_id..!!");
                        } else {
                            eiNameFlag = true;
                        }
                    }

                })
            });
            $("#add").blur(function() {
                $("#addValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#addValidation").html("(*) Address required..!!");
                    addNameFlag = false;
                } else {

                    addNameFlag = true;
                }
            });

            $(document).ready(function() {
                $("#add").blur(function() {
                    addNameFlag = false;
                    $("#agValidation").empty();
                    if ($(this).val() == "") {
                        $("#addValidation").html("(*) Address required..!!");

                    } else {

                        addNameFlag = true;
                    }
                })
            });
            //===========================================================
            $(document).ready(function() {
                $("#Designation").blur(function() {
                    DesignationFlag = false;
                    $("#agValidation").empty();
                    if ($(this).find("option:selected").text() === " ") {
                        $("#DesignationValidation").html("(*) Designation required..!!");

                    } else {

                        DesignationFlag = true;
                    }
                })
            });

            $("#cn").blur(function() {
                TxtContactNoFlag = false;
                $("#cnValidation").empty();
                if ($(this).val() == "") {
                    $("#cnValidation").html("(*) Contact No. required..!!");
                } else {
                    if (!$(this).val().match($ConNoRegEx)) {
                        $("#cnValidation").html("(*) Invalid contact no..!!");
                    } else {
                        TxtContactNoFlag = true;
                    }
                }
            });

            $("#BtnSubmit").click(function() {
                TxtNameFlag = false;
                $("#fnValidation").empty();
                if ($("#fn").val() == "") {
                    $("#fnValidation").html("(*) First Name Required..!!");
                } else {
                    if (!$("#fn").val().match($FNameLNameRegEx)) {
                        $("#fnValidation").html("(*) Invalid First Name..!!");
                    } else {
                        TxtNameFlag = true;
                    }
                }
                lnNameFlag = false;
                $("#lnValidation").empty();
                if ($("#ln").val() == "") {
                    $("#lnValidation").html("(*) Last Name Required..!!");
                } else {
                    if (!$("#ln").val().match($FNameLNameRegEx)) {
                        $("#lnValidation").html("(*) Invalid Last Name..!!");
                    } else {
                        lnNameFlag = true;
                    }
                }
                eiNameFlag = false;
                $("#eiValidation").empty();
                if ($("#ei").val() == "") {
                    $("#eiValidation").html("(*) Email_id Required..!!");
                } else {
                    if (!$("#ei").val().match($EmailIdRegEx)) {
                        $("#eiValidation").html("(*) Invalid Email_id..!!");
                    } else {
                        eiNameFlag = true;
                    }
                }

                //====================================================================


                DesignationFlag = false;
                $("#DesignationValidation").empty();
                if ($("#Designation").val() == "") {
                    $("#DesignationValidation").html("(*) Designation Required..!!");
                } else {
                    // if (!$("#Designation").val().match($EmailIdRegEx)) {
                    //     $("#DesignationValidation").html("(*) Invalid Email_id..!!");
                    // } else {
                    DesignationFlag = true;
                    // }
                }
                //         DesignationFlag = false;
                //         $(function(){
                //         $("#Designation").change(function(){
                //         // var HoursEntry = $("#Designation option:selected").val();
                //         // console.log(HoursEntry);
                //         // alert(DesignationValidation);
                //         if("#Designation" == "")
                //         {
                //             $("#DesignationValidation").html("Please select at least One option");
                //             return false;
                //         }
                //         else
                //         {
                //             $("#DesignationValidation").html("selected val is  "+HoursEntry);
                //             return true;
                //             DesignationFlag = true;
                //         }
                //     });
                // });


                addNameFlag = false;
                $("#addValidation").empty();
                if ($("#add").val() == "") {
                    $("#addValidation").html("(*) Address Required..!!");
                } else {

                    addNameFlag = true;
                }


                TxtContactNoFlag = false;
                $("#cnValidation").empty();
                if ($("#cn").val() == "") {
                    $("#cnValidation").html("(*) Contact No. Required..!!");
                } else {
                    if (!$("#cn").val().match($ConNoRegEx)) {
                        $("#cnValidation").html("(*) Invalid Contact No..!!");
                    } else {
                        TxtContactNoFlag = true;
                    }
                }

                if (TxtNameFlag == true && lnNameFlag == true && eiNameFlag == true && addNameFlag == true && TxtContactNoFlag == true && DesignationFlag == true) {
                    alert("Form submitted successfully..!!");
                    document.register.submit();
                    //location.replace("process1.php")
                } else {
                    alert("ERROR..!!");
                }
            });

            $("#cn").keypress(function(e) {
                $("#cnValidation").empty();
                var Flag = false;
                (e.which >= 48 && e.which <= 57) ?
                Flag = true: (Flag = false, $("#cnValidation").html("(*) Invalid contact no..!!"));
                return Flag;
            });
            // $("#ag").keypress(function (e) {
            //     $("#agValidation").empty();
            //     var Flag = false;
            //     (e.which >= 48 && e.which <= 57 || (e.which == 32 || e.which == 13))
            //         ? Flag = true
            //         : (Flag = false, $("#agValidation").html("(*) Invalid Age no..!!"));
            //     return Flag;
            // });


        });
    </script>

    <style type="text/css">
        body {
            background-color: burlywood;
        }

        #border {
            box-shadow: 0px 0px 3px gray;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        i.fa {
            color: #b4a306;
        }

        b {
            color: #1ae646;
        }

        /* .abc{background-image: url("img1.jpg");background-repeat: repeat; height: 100%;} */
        /* small {
        font-size: 20px;
    } */

        .abc {
            background-color: gray;
        }
    </style>

</head>

<body>
    <form name="register" action="process1.php" method="POST" enctype="multipart/form-data">
        <div class="container" style="background-color: aquamarine;">
            <div class="row ">
                <div class="abc col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" id="border">
                    <h2 class="text-center" style="border-bottom: solid 1px;"><i class="fa fa-user-plus"></i> Create New
                        Account</h2>
                    <hr />

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
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-female"></i> | <i class="fa fa-male"></i></span>
                            <input type="radio" name="gender" value="female" required>Female
                            <input type="radio" name="gender" value="male" required>Male
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
                    <!-- <div class="form-group">
                        <b> DOB</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input id="TxtDate" type="date" placeholder="DD/MM/YYYY" function="date()"
                                class="form-control" min="1960-01-01" max="2003-01-01" />

                        </div>
                        <small id="TxtDateValidation" class="text-danger"></small>
                    </div> -->

                    <!-- <div class="form-group">
						<b><i class="fa fa-clender"></i> Designation</b>
						<div class="input-group">
							<span class="input-group-addon"></span>
							
							<input	id="ag" name="Designation" type="text" placeholder="Your Age" class="form-control"  />
						</div>
					
				</div> -->
                    <!-- <div class="form-group">
                        <b><i class="fa fa-phone"></i> Designation</b>
                        <div class="input-group">
                            <select required id="Designation" name="Designation" class="form-control"
                                value="<//?php echo $row['designation']?>" required>
                                <option value="<//?php echo $row['designation']?>" class="form-control"></option>

                                <option value="Jr.Software Devloper" class="form-control">Jr Devloper</option>
                                <option value="Sr.Software Devloper" class="form-control">Sr Devloper</option>
                                <option value="Project Manager" class="form-control">Associate Jr.Software Devloper
                                </option>
                                <option value="Business Analyst " class="form-control"> Business Analyst</option>
                            </select>
                        </div>
                        <small id="DesignationValidation" class="text-danger"></small>
                    </div> -->
                    <!-- ============================================================================================================================== -->
                    <div class="form-group">
                        <b><i class="fa fa-phone"></i> Designation</b>
                        <div class="input-group">
                            <select id="Designation" name="Designation" class="form-control">
                                <option value="">Choose Designation</option>
                                <option value="Jr.Software Devloper">Jr Devloper</option>
                                <option value="Sr.Software Devloper">Sr Devloper</option>
                                <option value="Associate Jr.Software Devloper">Associate Jr.Software Devloper</option>
                                <option value="Business Analyst"> Business Analyst</option>
                            </select>
                        </div>
                        <small id="DesignationValidation" class="text-danger"></small>
                    </div>
                    <div>

                        <label>Favorite Subjects:</label>

                        <br />

                        <input type="checkbox" name="subject[]" value="Math" />Math

                        <br />

                        <input type="checkbox" name="subject[]" value="English" />English

                        <br />

                        <input type="checkbox" name="subject[]" value="Science" />Science

                        <br />

                        <input type="checkbox" name="subject[]" value="History" />History
                    </div> <br />
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
                            <input id="TxtPassword" name="cpass" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" />
                        </div>
                        <small id="TxtPasswordValidation" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <b>Profile photo</b>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="file" name="fileToUpload" class="form-control" />
                            <div id=""></div>
                        </div>
                        <small id="" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <!-- <a class="btn btn-success"><i class="fa fa-user-plus" style="color:white;"></i> Create New Account</a> -->
                        <center> <input class="btn btn-danger" type="reset" style="color:white;">
                            <button class="btn btn-success" type="button" name="btn_sb" id="BtnSubmit">Submit</button>
                            <h3> <a href="login.php"> LOGIN</a> </h3>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>