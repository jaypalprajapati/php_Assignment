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
    passFlag = false,
    DesignationFlag = false,
    fileFlag = false,
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

    $(document).ready(function() {
        $("#TxtPassword").blur(function() {
            passFlag = false;
            $("#TxtPasswordValidation").empty();
            if ($(this).val() == "") {
                $("#TxtPasswordValidation").html("(*) password is Required..!!");

            } else {
                if (!$(this).val().match()) {
                    $("#TxtPasswordValidation").html("(*) password Last Name..!!");
                } else {
                    passFlag = true;
                }
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

    $(document).ready(function() {
        $("#file").blur(function() {
            fileFlag = false;
            $("#fileValidation").empty();
            if ($(this).text() === " ") {
                $("#fileValidation").html("(*) file is required..!!");

            } else {

                fileFlag = true;
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
        passFlag = false;
        $("#TxtPasswordValidation").empty();
        if ($("#TxtPassword").val() == "") {
            $("#TxtPasswordValidation").html("(*) Password Required..!!");
        } else {
            if (!$("#TxtPassword").val().match()) {
                $("#TxtPasswordValidation").html("(*) Invalid Password..!!");
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

        fileFlag = false;
        $("#fileValidation").empty();
        if ($("#file").val() == "") {
            $("#fileValidation").html("(*) file is  Required..!!");
        } else {
            // if (!$("#Designation").val().match($EmailIdRegEx)) {
            //     $("#DesignationValidation").html("(*) Invalid Email_id..!!");
            // } else {
            fileFlag = true;
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

        if (TxtNameFlag == true && lnNameFlag == true && eiNameFlag == true && addNameFlag == true && TxtContactNoFlag == true && DesignationFlag == true && fileFlag == true) {

            document.register.submit();
            //location.replace("process1.php")
        } else {

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