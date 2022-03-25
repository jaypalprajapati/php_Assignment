<?php


// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $addressErr = $mobilenoErr = $designationErr= "";
$name = $email = $gender = $address = $designation = $mobileno= "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $nameErr = "Name is Required";
  } else {
    $name = ($_POST["Name"]);
  }

  if (empty($_POST["Email"])) {
    $emailErr = "Email is Required";
  } else {
    $email =($_POST["Email"]);
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
<form method="post" action="process1.php<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    
        <style>
        .error {
            color: #FF0000;
            
        }
        .center {
          align-items: left;
        }
        </style>
        <h2>Form Validation Demo</h2>
        Name: <input type="text" name="Name" placeholder="Enter Name Here...">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail:
        <input type="text" name="Email" placeholder="Enter EmailId Here...">
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
            <option value=" ">Select Option From List </option>

            <option value=" " disabled>Select Option From List </option>

            <option value="Jr.Software Devloper">Jr Software Devloper</option>
            <option value="Sr.Software Devloper">Sr Devloper</option>
            <option value="Project Manager">Associate Jr.Software Devloper </option>
            <option value="Business Analyst "> Business Analyst</option>
        </select>
        <span class="error">* <?php echo $designationErr;?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male" checked>Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        
        <input type="submit" name="submit" value="Submit">
        <input type=submit value="Reset" name="Reset">


</form>

<?php

$data = $_POST;
if(count($data)> 0){
  foreach($data as $key=>$value){
    if(empty($value)){
        $msg= $key . "  Is Required";
     echo $msg;
     echo "<br>";
}
 }
 
}
echo "<pre>";
echo print_r($data);
echo "</pre>";
?>


<?php

/*if (isset($_POST["submit"])) {
    echo "<div> --------------Output------------------ <br>";
    echo "<pre>";
    print_r($_POST);
    echo "</div>";
    echo"<pre>";
  }
*/






/*echo "<h2>Your Input Data:</h2>";
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
?>*/