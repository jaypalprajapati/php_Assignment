<?php

require 'dbconnect.php';

$qry="SELECT * FROM emp";

$rs=mysqli_query($conn,$qry);
 session_start();
   
     if (!isset($_SESSION['email'])) {
         # code...
          header("location:login.php");
          exit();
      }


?>

<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
</head>
<body>
<center><h1><a href="form1.php">New Regitration</a></h1>
		<h3><a href="logout.php"> Logout</a></h3>
</center>

<table border="1">
	<td>Id</td>
	<td>Name</td>
	<td>Email</td>
	<td>Address</td>
	<td>Mobile</td>
	<td>Password</td>
	<td>Designation</td>
	<td>Gender</td>
	<td>EDIT</td>
	<td>DELETE</td>
	<td>AJEX DELETE</td>
	<?php

		if(mysqli_num_rows($rs)>0)
		{
			echo "true..";
			while ($row=mysqli_fetch_assoc($rs)) {
				# code...
	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['fname']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['mobile']?></td>
		<td><?php echo $row['password']?></td>
		<td><?php echo $row['designation']?></td>
		<td><?php echo $row['gender']?></td>
		<td><a href="edit.php?id=<?php echo $row['id']; ?>"  title="Edit">EDIT</a></td>
		<td><a href="delete.php?id=<?php echo $row['id']; ?>"  title="delete">delet</a></td>
		<td><a onclick="deletere(<?php echo $row['id']; ?>)"  title="delete" >Delete</a></td>

	</tr>
	<?php
		}
	}
	else
	{
		echo "0 row found...";
	}
	?>
</table>

<script>
function deletere(id) {
	//  alert(id)
  if (id.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText==1)
        { 
			// alert("Hello! I am an alert box!!");
           
			
            setInterval('window.location.reload()', 400);
			document.getElementById("txtHint").innerHTML = "Record deleted successfully";
        }
        else
        {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }

      }
    };
    xmlhttp.open("GET", "delete.php?id=" + id, true);
    xmlhttp.send();
  }
}
</script>
<input type="hidden" id="txtHint">
</body>
</html>