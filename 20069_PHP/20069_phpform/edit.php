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
  
   ?>
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
   // $genderErr = "Gender is required";
  } else {
    $gender =($_POST["gender"]);
  }
//}
?>
<!-- <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
 <form action="updat.php" method="get">
  
    <h2>Form Validation demo</h2>
     <input type="hidden" name="id" value="<?php echo $id; ?>">
    First Name: <input type="text" name="fname" placeholder="Enter Name Here..." value="<?php echo $row['fname']?>" required>
    <span class="error">* <?php echo $nameErr;?></span>
   Last Name: <input type="text" name="lname" placeholder="Enter Name Here..."value="<?php echo $row['lname']?>" required>
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail:
    <input type="text" name="email" placeholder="Enter EmailId Here..."value="<?php echo $row['email']?>" required>
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
     <input type="password" name="password" placeholder="Enter password Here..."value="<?php echo $row['password']?>" required>
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Address: <textarea name="Address" placeholder="Enter Address..." rows="5" cols="40"value="<?php echo $row['address']?>" required></textarea>
    <span class="error">* <?php echo $addressErr;?></span>
    <br><br>
    Mobile No:
    <input type="number" name="MobileNo" placeholder="Enter Mobile Number..."value="<?php echo $row['mobile']?>" required>
    <span class="error">* <?php echo $mobilenoErr;?></span>
    <br><br>
    Designation:
    <label for="Designation">Choose Designation:</label>
  

    <select name="Designation" id="Designation" value="<?php echo $row['designation']?>" required>
        <option value=""></option>

        <option value="Jr.Software Devloper">Jr Devloper</option>
        <option value="Sr.Software Devloper">Sr Devloper</option>
        <option value="Project Manager">Associate Jr.Software Devloper </option>
        <option value="Business Analyst "> Business Analyst</option>
    </select>  <span class="error">* <?php echo $designationErr;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female"value="<?php echo $row['gender']?>" required>Female
    <input type="radio" name="gender" value="male" value="<?php echo $row['gender']?>" requiredchecked>Male
    <input type="radio" name="gender" value="other"value="<?php echo $row['gender']?>" required>Other
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