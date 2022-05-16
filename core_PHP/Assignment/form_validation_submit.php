<?php
$data = $_POST;
if(count($data)> 0){
  foreach($data as $key=>$value){
    if(empty($value)){
        $msg= $key . "  Is Required";
     echo $msg;
}
 }
}
echo "<pre>";
echo print_r($data);
echo "</pre>";
?>
<?php

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $addressErr = $mobilenoErr = $designationErr= "";
$name = $email = $gender = $address = $designation = $mobileno= "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is Required";
  } else {
    $name = ($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is Required";
  } else {
    $email =($_POST["email"]);
  }

  if (empty($_POST["Address"])) {
    $addressErr = "Address is Required";
  } else {
    $address =($_POST["Address"]);
  }

  if (empty($_POST["MobileNo"])) {
    $mobilenoErr = "Mobile No Required";
  } else {
    $mobileno =($_POST["MobileNo"]);
  }

  if (empty($_POST["MobileNo"])) {
    $designationErr = "Please Select Designation";
  } else {
    $designation=($_POST["Designation"]);
  }

  if (empty($_POST["gender"])) {
   $genderErr = "Gender is required";
  } else {
    $gender =($_POST["gender"]);
  }
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .a{ font-size: 20px;
        margin-bottom: 10px;}
        b{ color: blueviolet; font-size: 20px;}
        span{color : red;}
    </style>
</head>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

   <center> <h1>Form Validation demo</h1> </center> <hr>
    <b>Name: </b> <input type="text" name="name" placeholder="Enter Name Here..."class="a">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    <b>E-mail:</b>
    <input type="text" name="email" placeholder="Enter EmailId Here..."class="a">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <b>Address:</b> <textarea name="Address" placeholder="Enter Address..." rows="5" cols="40"class="a"></textarea>
    <span class="error">* <?php echo $addressErr;?></span>
    <br><br>
    <b> Mobile No:</b>
    <input type="number" name="MobileNo" placeholder="Enter Mobile Number..."class="a">
    <span class="error">* <?php echo $mobilenoErr;?></span>
    <br><br>
    <b>Designation:</b>
    <label for="Designation" name=" "class="a">Choose Designation:</label>
    <span class="error">* <?php echo $designationErr;?></span>

    <select name="Designation" id="Designation">
        <option value=""></option>------------------------------
        <option value="AAA">AAA</option>
        <option value="BBB">BBB</option>
        <option value="CCC">CCC </option>
        <option value="DDD"> DDD</option>
    </select>
    <br><br>
    <b>Gender:</b>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male" checked>Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <input type=submit value="Reset" name="s1">
   
</form>
</body>
</html>

<?php
echo "<h2>Your Input Data:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $mobileno;
echo "<br>";
echo $designation;
echo "<br>";
echo $gender;
?>