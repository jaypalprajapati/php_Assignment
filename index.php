<?php

include 'dbconnect.php';

$qry="SELECT * FROM emp";

$rs=mysqli_query($conn,$qry);
 session_start();
   
    //  if (!isset($_SESSION['email'])) {
    //      # code...
    //       header("location:login.php");
    //       exit();
    //   }


?>

<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
</head>
<body>
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
	<?php

		if(mysqli_num_rows($rs)>0)
		{
			echo "true..";
			while ($row=mysqli_fetch_assoc($rs)) {
				# code...
	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['fname']?> <?php echo $row['lname']?></td>
		
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['mobile']?></td>
		<td><?php echo $row['password']?></td>
		<td><?php echo $row['designation']?></td>
		<td><?php echo $row['gender']?></td>
		<td><a href="editjs.php?id=<?php echo $row['id']; ?>"  title="Edit">EDIT</a></td>
		<td><a href="delete.php?id1=<?php echo $row['id']; ?>"  title="delete">delet</a></td>
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
<center><h1><a href="jsform.php">New Regitration</a></h1>
		<h3><a href="logout.php"> Logout</a></h3>
</center>
</body>
</html>