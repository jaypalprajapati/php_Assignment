<?php
   require 'dbconnect.php';
   session_start();
   $id=$_GET['id'];
   //echo"$id"; 
   $qry="SELECT * FROM emp WHERE id=$id";
   //echo"$qry";
   $rs=mysqli_query($conn,$qry);
   $row=mysqli_fetch_assoc($rs);
   //var_dump($row);
  
if(isset($_SESSION['error_message']))
{
	echo "<pre>";
	print_r($_SESSION['error_message']);
	echo "</pre>";
	$_SESSION['error_message']="";
}

if(isset($_SESSION['error_email_message']))
{
	echo ($_SESSION['error_email_message']);
	$_SESSION['error_email_message']="";
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
			var $GSTNoRegEx=/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
			var $IndianDrivingLicenseNoRegEx = /^([A-Z]{2,3}[-/0-9]{8,13})$/;
			var $IndianVehicleRegNoRegEx = /^([A-Z]{2}[0-9]{1,2}[A-Z]{1,3}[0-9]{1,4})$/;
			var $PincodeRegEx = /^[1-9][0-9]{5,6}$/;
			var $PANNoRegEx = /^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/;
			var $IFSCCodeRegEx = /^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/;
			var $BankAccountNoRegEx = /^([0-9]{9,18})$/;
			var $PostTitleRegex =/^(.{30,300})$/;
			var $PostDescRegex = /^(.{100,3000})$/;
			var $LatitudeLongitude=/^(-?(?:1[0-7]|[1-9])?\d(?:\.\d{1,8})?|180(?:\.0{1,8})?)$/;
			
			var TxtNameFlag=false,lnNameFlag=false,eiNameFlag=false,TxtDateFlag = false,agNameFlag=false,TxtContactNoFlag=false,TxtContactMsgFlag=false;
		
			var curr_date = new Date();
			var month = curr_date.getMonth()+1;
			var day = curr_date.getDate();
			var output = curr_date.getFullYear() - 18 + '-' + (month<10 ? '0' : '') + month + '-' + (day<10 ? '0' : '') + day;

			$(document).ready(function(){
				$("#fn").blur(function(){
					TxtNameFlag=false;
					$("#fnValidation").empty();
					if($(this).val()=="") 
					{
						$("#fnValidation").html("(*) First name required..!!");
						// alert("#fnValidation");
					}
					else{
						if(!$(this).val().match($FNameLNameRegEx)) 
						{
							$("#fnValidation").html("(*) Invalid first name..!!");
							// alert("#fnValidation");
						}
						else{
							TxtNameFlag=true;
						}
					}
					
				});
			});
			
			

				$(document).ready(function(){
					$("#ln").blur(function(){
						lnNameFlag=false;
					$("#lnValidation").empty();
					if($(this).val()=="") 
					{
						$("#lnValidation").html("(*) LAst name required..!!");
						
					}
					else{
						if(!$(this).val().match($LNameLNameRegEx)) 
						{
							$("#lnValidation").html("(*) Invalid last name..!!");
						}
						else{
							lnNameFlag=true;
						}
					}
					
				});
				$(document).ready(function(){
					$("#ei").blur(function(){
						eiNameFlag=false;
					$("#eiValidation").empty();
					if($(this).val()=="") 
					{
						$("#eiValidation").html("(*) Emailid required..!!");
						
					}
					else{
						if(!$(this).val().match($EmailIdRegEx)) 
						{
							$("#eiValidation").html("(*) Invalid Email id..!!");
						}
						else{
							eiNameFlag=true;
						}
					}
					
				})
			});
			$("#ag").blur(function () {
                $("#agValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#agValidation").html("(*) Age required..!!");
                    agNameFlag = false;
                }
                else {
                    if (!$(this).val().match($AgeRegEx) || $(this).val() <= 18) {
                        $("#agValidation").html("(*) Invalid Age..!!");
                        agNameFlag = false;
                    }
                    else {
                        agNameFlag = true;
                    }
                }
            });	
			
			// $(document).ready(function(){
			// 		$("#ag").blur(function(){
			// 			agNameFlag=false;
			// 		$("#agValidation").empty();
			// 		if($(this).val()=="") 
			// 		{
			// 			$("#agValidation").html("(*) age required..!!");
						
			// 		}
			// 		else{
			// 			if(!$(this).val().match($AgeRegEx)) 
			// 			{
			// 				$("#agValidation").html("(*) Invalid age..!!");
			// 			}
			// 			else{
			// 				agNameFlag=true;
			// 			}
			// 		}
					
			// 	})
			// });

				$("#cn").blur(function(){
					TxtContactNoFlag=false;
					$("#cnValidation").empty();
					if($(this).val()=="") 
					{
						$("#cnValidation").html("(*) Contact no. required..!!");
					}
					else{
						if(!$(this).val().match($ConNoRegEx)) 
						{
							$("#cnValidation").html("(*) Invalid contact no..!!");
						}
						else{
							TxtContactNoFlag=true;
						}
					}
				});
				
				$("#BtnSubmit").click(function(){
					TxtNameFlag=false;
					$("#fnValidation").empty();
					if($("#fn").val()=="") 
					{
						$("#fnValidation").html("(*) First name required..!!");
					}
					else{
						if(!$("#fn").val().match($FNameLNameRegEx)) 
						{
							$("#fnValidation").html("(*) Invalid first name..!!");
						}
						else{
							TxtNameFlag=true;
						}
					}
					lnNameFlag=false;
					$("#lnValidation").empty();
					if($("#ln").val()=="") 
					{
						$("#lnValidation").html("(*) last name required..!!");
					}
					else{
						if(!$("#ln").val().match($FNameLNameRegEx)) 
						{
							$("#lnValidation").html("(*) Invalid first name..!!");
						}
						else{
							lnNameFlag=true;
						}
					}
					eiNameFlag=false;
					$("#eiValidation").empty();
					if($("#ei").val()=="") 
					{
						$("#eiValidation").html("(*) last name required..!!");
					}
					else{
						if(!$("#ei").val().match($EmailIdRegEx)) 
						{
							$("#eiValidation").html("(*) Invalid first name..!!");
						}
						else{
							eiNameFlag=true;
						}
					}
					agNameFlag=false;
					$("#agValidation").empty();
					if($("#ag").val()=="") 
					{
						$("#agValidation").html("(*) Age required..!!");
					}
					else{
						if(!$("#ag").val().match($AgeRegEx)) 
						{
							$("#agValidation").html("(*) Invalid age..!!");
						}
						else{
							agNameFlag=true;
						}
					}
					
					TxtContactNoFlag=false;
					$("#cnValidation").empty();
					if($("#cn").val()=="") 
					{
						$("#cnValidation").html("(*) Contact no. required..!!");
					}
					else{
						if(!$("#cn").val().match($ConNoRegEx)) 
						{
							$("#cnValidation").html("(*) Invalid contact no..!!");
						}
						else{
							TxtContactNoFlag=true;
						}
					}
					
					if(TxtNameFlag==true && lnNameFlag==true && eiNameFlag==true && agNameFlag==true && TxtContactNoFlag==true){
						alert("Form submitted successfully..!!");
						document.register.submit();
						//location.replace("process1.php")
					}
					else{
						alert("ERROR..!!");
					}
				});
                
                $("#cn").keypress(function (e) {
                $("#cnValidation").empty();
                var Flag = false;
                (e.which >= 48 && e.which <= 57)
                    ? Flag = true
                    : (Flag = false, $("#cnValidation").html("(*) Invalid contact no..!!"));
                return Flag;
            });
            $("#ag").keypress(function (e) {
                $("#agValidation").empty();
                var Flag = false;
                (e.which >= 48 && e.which <= 57 || (e.which == 32 || e.which == 13))
                    ? Flag = true
                    : (Flag = false, $("#agValidation").html("(*) Invalid Age no..!!"));
                return Flag;
            });
           

			});
		</script>
		
		<style type="text/css">
			body{background-color:green;}
			#border{ box-shadow:0px 0px 3px gray;margin-top:30px;margin-bottom:30px;}
			i.fa{color:#b4a306;}
			b{color: #1ae646;}
			/* .abc{background-image: url("img1.jpg");background-repeat: repeat; height: 100%;} */
		small{font-size: 20px; }
		.abc{background-color:gray;}
		</style>
		
    </head>
    <body>
    <form action="updat.php" method="get"name="register">
		
		<div class="container" style="background-color: aquamarine;">
			<div class="row ">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="abc col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" id="border">
					<h2 class="text-center" style="border-bottom: solid 1px;"><i class="fa fa-user-plus"></i> Create New Account</h2><hr/>
					
					<div class="form-group">
						<b>Firstname</b>
						
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input id="fn" type="text"name="name" placeholder="Enter Your firstname" maxlength="20" class="form-control" value="<?php echo $row['fname']?>" />
						</div>
						<small id="fnValidation" class="text-danger"></small>
					</div>
					
					<div class="form-group">
						<b>Lastname</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input id="ln" type="text"name="name1" placeholder="Enter Your lastname " maxlength="20" class="form-control"value="<?php echo $row['lname']?>" />
						</div>
						<small id="lnValidation" class="text-danger"></small>
					</div>
                    <div class="form-group">
						<b>Address</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<textarea name="Address" class="form-control" value="<?php echo $row['address']?>" required></textarea>
						</div>
						<small id="lnValidation" class="text-danger"></small>
					</div>
					<div class="form-group">
						<b>Gender</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-female"></i> | <i class="fa fa-male"></i></span>
							<select id="gr" class="form-control">
								<option value='select' disabled>-- Select --</option>
								<option value='F' name="gender" value="<?php echo $row['gender']?>">Female</option>
								<option value='M' name="gender" value="<?php echo $row['gender']?>">Male</option>
							</select>
						<small id="lnValidation" class="text-danger"></small>

						</div>
					</div>
					<div class="form-group">
						<b><i class="fa fa-phone"></i> Contact No.</b>
						<div class="input-group">
							<span class="input-group-addon">+91</span>
							<input id="cn" type="text" name="MobileNo" placeholder="Enter Your contact no. " maxlength="10" class="form-control" value="<?php echo $row['mobile']?>" />
						</div>
						<small id="cnValidation" class="text-danger"></small>
					</div>
                    
					<div class="form-group">
						<b><i class="fa fa-phone"></i> Designation</b>
						<div class="input-group">
                        <select name="Designation"class="form-control" id="Designation" value="<?php echo $row['designation']?>" required>
        <option value="<?php echo $row['designation']?>"class="form-control"></option>

        <option value="Jr.Software Devloper"class="form-control">Jr Devloper</option>
        <option value="Sr.Software Devloper"class="form-control">Sr Devloper</option>
        <option value="Project Manager"class="form-control">Associate Jr.Software Devloper </option>
        <option value="Business Analyst "class="form-control"> Business Analyst</option>
    </select>
</div>

				</div>
					<div class="form-group">
						<b>Email</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input id="ei" type="text"name="email" placeholder="Enter Your email id " maxlength="50" class="form-control"value="<?php echo $row['email']?>" />
						</div>
						<small id="eiValidation" class="text-danger"></small>
					</div>
					<div class="form-group">
						<b>Password</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input id="TxtPassword" name="password" type="password" placeholder="Enter Your password" maxlength="12" class="form-control"value="<?php echo $row['password']?>" />
						</div>
						<small id="TxtPasswordValidation" class="text-danger"></small>
					</div> 
					<!-- <div class="form-group">
						<b>Confirm Password</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input id="TxtPassword" name="cpass" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" />
						</div>
						<small id="TxtPasswordValidation" class="text-danger"></small>
					</div> -->
					<div class="form-group">
						
                        <input class="btn btn-success" type="submit" name="btn_sb" value="Updte">
					</div>
				</div>
			</div>
		</div>
	</form>
    </body>
</html>