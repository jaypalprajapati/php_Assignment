<?php
session_start();

if (isset($_COOKIE['user'])) {
  # code...
  $un = $_COOKIE['user'];
} else {
  $un = "";
}
if (isset($_COOKIE['pass'])) {
  # code...
  $ps = $_COOKIE['pass'];
} else {
  $ps = "";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 20px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  font-size: 20px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  height: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  background-color: teal;
}
label{color:white;}
span.psw {
  float: right;
  padding-top: 16px;
}
.container-box {
  width: 500px;
  margin-left: 30%;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
    
  }
}
</style>
<script language="javascript" type="text/javascript">

  window.history.forward();

</script>
</head>
<body>



<form action="checklogin.php" method="POST">
  <!-- <div class="imgcontainer">
    <img src="img1.jpg" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
  <center> <h1>Login Form</h1> </center>
    <div class="container-box">
    <?php
    if (isset($_GET['msg'])) {
      # code...
      $msg = $_GET['msg'];
    ?>
      <h3 style="color:red;text-align: center;"><?php echo "<p>('$msg')</p>"; ?></h3>
    <?php
    } else {
      $msg = "";
    }
    ?>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" value="<?php echo $un; ?>"required>
    <label for="psw"><b>Password</b></label>
    <input type="password"id="myInput" placeholder="Enter Password" name="password"  value="<?php echo $ps; ?>" required>   
    <button type="submit" name="btn_sb">Login</button>
    <label>
      <input type="checkbox" value="1" name="remember"  /> <b>Remember me</b>
      <input type="checkbox" onclick="myFunction()"><b>Show Password </b>
    </label>
    <button type="button" class="cancelbtn"><a href="jsform.php" style="color:white;">Registration?</a></button>
  </div>
  </div>
</form>

<script>
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
</body>
</html>
