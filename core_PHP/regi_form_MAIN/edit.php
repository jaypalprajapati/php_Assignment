<?php
require 'dbconnect.php';
session_start();
$id = $_GET['id'];
//echo"$id"; 
$qry = "SELECT * FROM emp WHERE id=$id";
//echo"$qry";
$rs = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($rs);
//var_dump($row);
session_start();

if (!isset($_SESSION['email'])) {
  # code...
  header("location:login.php");
  exit();
}
?>
<?php
$data = $_POST;
if (count($data) > 0) {
  foreach ($data as $key => $value) {
    if (empty($value)) {
      $msg = $key . "  Is Required";
      echo $msg;
    }
  }
}
// echo "<pre>";
// echo print_r($data);
// echo "</pre>";
?>
<?php

// define variables and set to empty values
$nameErr = $name1Err = $emailErr = $passErr = $cpassErr = $genderErr = $addressErr = $mobilenoErr = $designationErr = "";
$name = $name1 = $email = $pass = $cpass = $gender = $address = $designation = $mobileno = "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
  $nameErr = "FIRST Name is Required";
} else {
  $name = ($_POST["name"]);
}
if (empty($_POST["name1"])) {
  $name1Err = "LAST Name is Required";
} else {
  $name1 = ($_POST["name1"]);
}

if (empty($_POST["email"])) {
  $emailErr = "Email is Required";
} else {
  $email = ($_POST["email"]);
}
if (empty($_POST["password"])) {
  $passErr = "password is Required";
} else {
  $pass = ($_POST["password"]);
}

if (empty($_POST["cpass"])) {
  $cpassErr = "cpassword is Required";
} else {
  $cpass = ($_POST["cpass"]);
}
if (empty($_POST["Address"])) {
  $addressErr = "Address is Required";
} else {
  $address = ($_POST["Address"]);
}

if (empty($_POST["MobileNo"])) {
  $mobilenoErr = "Mobile No Required";
} else {
  $mobileno = ($_POST["MobileNo"]);
}

if (empty($_POST["MobileNo"])) {
  $designationErr = "Please Select Designation";
} else {
  $designation = ($_POST["Designation"]);
}

if (empty($_POST["gender"])) {
  $genderErr = "Gender is required";
} else {
  $gender = ($_POST["gender"]);
}
//}
?>
<style type="text/css">
  .a {
    font-size: 20px;
    margin-bottom: 10px;
  }

  b {
    color: blueviolet;
    font-size: 20px;
  }

  span {
    color: red;
  }

  input {
    font-size: 20px;
  }
</style>
<!-- <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> -->
<form action="updat.php" method="get">

  <h2>Form Validation demo</h2>
  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <b> First Name: </b> <input type="text" name="name" placeholder="Enter Name Here..." value="<?php echo $row['fname'] ?>">
  <span class="error">* <?php echo $nameErr; ?></span>

  <b>Last Name: </b><input type="text" name="name1" placeholder="Enter Name Here..." value="<?php echo $row['lname'] ?>" required>
  <span class="error">* <?php echo $name1Err; ?></span>
  <br><br>

  <b> E-mail: </b>
  <input type="text" name="email" placeholder="Enter EmailId Here..." value="<?php echo $row['email'] ?>" required>
  <span class="error">* <?php echo $emailErr; ?></span>
  <br><br>

  <b> paasword : </b>
  <input type="password" name="password" placeholder="Enter password Here..." value="<?php echo $row['password'] ?>" required>
  <span class="error">* <?php echo $passErr; ?></span>
  <br><br>

  <b> Address: </b> <textarea name="Address" value="<?php echo $row['address'] ?>" required></textarea>
  <span class="error">* <?php echo $addressErr; ?></span>
  <br><br>

  <b> Mobile No: </b>
  <input type="number" name="MobileNo" placeholder="Enter Mobile Number..." value="<?php echo $row['mobile'] ?>" required>
  <span class="error">* <?php echo $mobilenoErr; ?></span>
  <br><br>

  <b>Designation: </b>
  <label for="Designation"><b>Choose Designation: </b></label>
  <select name="Designation" id="Designation" value="<?php echo $row['designation'] ?>" required>
    <option value="<?php echo $row['designation'] ?>"></option>

    <option value="Jr.Software Devloper">Jr Devloper</option>
    <option value="Sr.Software Devloper">Sr Devloper</option>
    <option value="Project Manager">Associate Jr.Software Devloper </option>
    <option value="Business Analyst "> Business Analyst</option>
  </select> <span class="error">* <?php echo $designationErr; ?></span>
  <br><br>

  <b>Gender: </b>
  <input type="radio" name="gender" value="female" value="<?php echo $row['gender'] ?>" required>Female
  <input type="radio" name="gender" value="male" value="<?php echo $row['gender'] ?>" required>Male
  <input type="radio" name="gender" value="other" value="<?php echo $row['gender'] ?>" required>Other
  <span class="error">* <?php echo $genderErr; ?></span>
  <br><br>

  <input type="submit" name="btn_sb" value="Updte">


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