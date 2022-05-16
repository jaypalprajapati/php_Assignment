<?php
$data = $_GET;
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

//if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name"])) {
    $nameErr = "Name is Required";
  } else {
    $name = ($_GET["name"]);
  }

  if (empty($_GET["email"])) {
    $emailErr = "Email is Required";
  } else {
    $email =($_GET["email"]);
  }

  if (empty($_GET["Address"])) {
    $addressErr = "Address is Required";
  } else {
    $address =($_GET["Address"]);
  }

  if (empty($_GET["MobileNo"])) {
    $mobilenoErr = "Mobile No Required";
  } else {
    $mobileno =($_GET["MobileNo"]);
  }

  if (empty($_GET["MobileNo"])) {
    $designationErr = "Please Select Designation";
  } else {
    $designation=($_GET["Designation"]);
  }

  if (empty($_GET["gender"])) {
   // $genderErr = "Gender is required";
  } else {
    $gender =($_GET["gender"]);
  }
//}
?>
<!-- <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
 <form action="process1.php" method="get">
  
    <h2>Form Validation demo</h2>
    First Name: <input type="text" name="fname" placeholder="Enter Name Here...">
    <span class="error">* <?php echo $nameErr;?></span>
   Last Name: <input type="text" name="lname" placeholder="Enter Name Here...">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail:
    <input type="text" name="email" placeholder="Enter EmailId Here...">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    paasword :
     <input type="password" name="password" placeholder="Enter password Here...">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Confirm Password :
     <input type="password" name="cpass" placeholder="Enter password Here...">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Address: <textarea name="Address" placeholder="Enter Address..." rows="5" cols="40"></textarea>
    <span class="error">* <?php echo $addressErr;?></span>
    <br><br>
    Mobile No:
    <input type="number" name="MobileNo" placeholder="Enter Mobile Number...">
    <span class="error">* <?php echo $mobilenoErr;?></span>
    <br><br>
    Designation:
    <label for="Designation">Choose Designation:</label>
  

    <select name="Designation" id="Designation">
        <option value=""></option>

        <option value="Jr.Software Devloper">Jr Devloper</option>
        <option value="Sr.Software Devloper">Sr Devloper</option>
        <option value="Project Manager">Associate Jr.Software Devloper </option>
        <option value="Business Analyst "> Business Analyst</option>
    </select>  <span class="error">* <?php echo $designationErr;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male" checked>Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type=submit value="Reset" name="s1">
    <input type="submit" name="btn_sb" value="Submit">
    

</form>


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