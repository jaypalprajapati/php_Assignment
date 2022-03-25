<?php
    session_start();

    if (isset($_COOKIE['user'])) {
        # code...
        $un=$_COOKIE['user'];
    }
    else
    {
        $un="";
    }
    if (isset($_COOKIE['pass'])) {
        # code...
        $ps=$_COOKIE['pass'];
    }
    else
    {
        $ps="";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  *{font-size:40px;}
  a {
    color: navy;
  }
   a:hover {
    color: white;
    text-decoration: none;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    font-size: 15px;
}
</style>

</head>


<body style="background-color:aquawhite;" >
<center>
    <h1 >Student<b> Login </b></h1>

        <h2>Login Here</h2>
        <form action="checklogin.php" method="POST">

        <b>  Username  </b> <input type="email" name="email"value="<?php echo $un; ?>" required>
      <b> Password </b>  <input type="password" name="password" placeholder="Password" value="<?php echo $ps; ?>" required >
               <p><input type="checkbox" onclick="myFunction()">Show Password</p>
      
                <p><input type="checkbox" value="1" name="remember">Remember Me</p>
               
      
            <button type="submit" name="btn_sb">Login</button>
            <center><h1><a href="jsform.php">New Regitration</a></h1> </center>
        </form>
        <?php 
        if (isset($_POST['msg'])) {
      # code...
      $msg=$_POST['msg'];
      ?>
        <h3 style="color:red;text-align: center;"><?php echo "<script>alert('$msg')</script>"; ?></h3>
        <?php
        }
        else{
          $msg="";
        } 
        ?>

    </div>
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
</center>
</body>
</html>