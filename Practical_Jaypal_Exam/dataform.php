<?php

include 'dbconnect.php';

$qry="SELECT * FROM sampledata";

$rs=mysqli_query($conn,$qry);

$qry1="SELECT * FROM sampledata";

$rs1=mysqli_query($conn,$qry1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>View </title>
</head>
<body>
<table border="1" width="100%;">
	<td>Id</td>
	<td>SELECT checkbox</td>
	<?php

		if(mysqli_num_rows($rs)>0)
		{
			echo "true..";
			while ($row=mysqli_fetch_assoc($rs)) {
	?>
	<tr>
		<td><?php echo $row['Id']?></td>
		<td><?php echo $row['form_data']?></td>
		
	</tr>
	<?php
		}
	}
	else
	{
		echo "not found...";
	}
	?>
</table>
<?php

if(mysqli_num_rows($rs1)>0)
{
  echo "true..";
  while ($row1=mysqli_fetch_assoc($rs1)) {
?>
//<input type="checkbox" name="alp[]" value="A"<?php echo $row['form_data']=="A"?"checked=checked":""; ?>/>A
                <input type="text" name="t1">
                <br />
                <input type="checkbox" name="alp[]" value="B"<?php echo $row['form_data']=="B"?"checked=checked":""; ?>/>B
                <input type="text" name="t2">
                <br />
                <input type="checkbox" name="alp[]" value="C"<?php echo $row['form_data']=="C"?"checked=checked":""; ?>/>C
                <input type="text" name="t3">
                <br />
                <input type="checkbox" name="alp[]" value="D"<?php echo $row['form_data']=="D"?"checked=checked":""; ?>/>D
                <br />
                <input type="checkbox" name="alp[]" value="E"<?php echo $row['form_data']=="E"?"checked=checked":""; ?>/>E
                <br />
                <input type="checkbox" name="alp[]" value="F"<?php echo $row['form_data']=="F"?"checked=checked":""; ?>/>F
                <br />
                <input type="checkbox" name="alp[]" value="G"<?php echo $row['form_data']=="G"?"checked=checked":""; ?>/>G
                <br />
                <input type="checkbox" name="alp[]" value="H"<?php echo $row['form_data']=="H"?"checked=checked":""; ?>/>H
                <br />
                <input type="checkbox" name="alp[]" value="I"<?php echo $row['form_data']=="I"?"checked=checked":""; ?>/>I
                <br />
                <input type="checkbox" name="alp[]" value="J"<?php echo $row['form_data']=="J"?"checked=checked":""; ?>/>J
                <br />
                <?php
		}
	}
	else
	{
		echo "not found...";
	}
	?>
</body>
</html>

