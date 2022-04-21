<?php

include ("../dbconnect.php");
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
@$data=$_POST['check'];

if(isset($_POST['submit'])){
    if(!empty($data)){
        foreach($data as $key=>$values){
            $ins="INSERT INTO table2 VALUES('','$values')";
            if(mysqli_query($conn, $ins)){
                $del = "DELETE FROM table1 WHERE text1='$values'";
                if (mysqli_query($conn, $del)) {
                  
                    // echo "Record deleted successfully";
                } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            }
        }     
    }
    else{
        echo "Please Select any Checkbox ";
    }
} 

if(isset($_POST['submit1'])){
    if(!empty($data)){
        foreach($data as $key=>$values){
            $ins="INSERT INTO table1 VALUES('','$values')";
            if(mysqli_query($conn, $ins)){
                $del = "DELETE FROM table2 WHERE text2='$values'";
                if (mysqli_query($conn, $del)) {
                  
                    // echo "Record deleted successfully";
                } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
            }
        }     
    }
    else{
        echo "Please Select any Checkbox ";
    }
} 
// if (isset($_POST['submit'])) {
//     foreach ($_POST as $key => $value) {
//         $formdata = $_POST['submit'];
//         $formdata = explode("_", $key);
//         if (in_array("check", $formdata)) {
//             // echo "<pre>";
//             // print_r($formdata);
//             // echo "</pre>";
//             if (trim($value) != " ") {

//                 $sql = "INSERT INTO table2 (text2) VALUES ('" . $value . "')";
//                 "SELECT table1 FROM text1 ORDER BY text1 ASC";
//                 $sql2 = "DELETE from table1 where text1 = '$value'";

//                 // "SELECT table1 FROM text1  ";
//                 $data1 = mysqli_query($conn, $sql);
//                //  echo "table 2 data inserted";
//                //  echo "<br>";
//                 $data2 = mysqli_query($conn, $sql2);
//                //  echo "table 2 data Deleted";
//             }
//         }
//     }
// }

// if (isset($_POST['submit1'])) {
//     foreach ($_POST as $key => $value) {
//         $formdata = $_POST['submit1'];
//         $formdata = explode("_", $key);
//         if (in_array("check", $formdata)) {
//             echo "<pre>";
//             print_r($formdata);
//             echo "</pre>";
//             if (trim($value) != " ") {
//                 // $id = $formdata[1];
//                 // $sql = "UPDATE sampledata set form_text_data='$value' where id = '$id'";
//                 $sql = "INSERT INTO table1 (text1) VALUES('" . $value . "')";
//                 "SELECT table2 FROM text2 ORDER BY text2 ASC";
//                 $sql2 = "DELETE from table2 where text2 = '$value'";
//                 // "SELECT table2 FROM text2";
//                 $data1 = mysqli_query($conn, $sql);
//                //  echo "Table 2 data inserted";
//                 $data2 = mysqli_query($conn, $sql2);
//                //  echo "table 2 data Deleted";
//             }
//         }
//     }
// }

$query = "SELECT * FROM table1 ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

$query1 = "SELECT * FROM table2 ";
$data1 = mysqli_query($conn, $query1);
$total1 = mysqli_num_rows($data1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Display Table Data</title>
    <style>
body {
  width: 90%;
  margin: 0 auto;
}

table:first-child {
  background-color: gray;
  color: white;
  margin-right: 1%;
}

table:nth-child(2n) {
  background-color: black;
  color: white;
}

table {
  width: 49%;
  float: left;
}
</style>
</head>

<body>
    <form method="POST">
        <?php
        if ($total != 0) {
        ?>
            
                <h2>TABLE1 Records</h2>

         
            <center>
                <table border="2" cellspacing="5" width="50%">
                    <tr>
                        <th width="03%">Id</th>
                        <th width="10%">Sample form checkboxes</th>
                    </tr>
            </center>
            <?php
            //$result = mysqli_fetch_assoc($data);
            // print_r($result);
            // echo "</pre>";
            while ($result = mysqli_fetch_assoc($data)) {
               
            ?>
                <tr>
                    <td><?php echo $result['id1'] ?>
                        <input type="hidden" name="id1_<?php echo $result['id1'] ?>" value="<?php echo $result['id1'] ?>">
                    </td>
                    <td><?php echo $result['text1'] ?>
                        <input type="checkbox" name="check[]" value="<?php echo $result['text1'] ?>" />
                    </td>
                    <!-- <td>
                        <input type="text" name="formtextdata_<//?php echo $result['id1']?>"/>
                    </td> -->
                </tr>
        <?php
            }
        } else {
            echo "No record found..";
        }
        ?>

        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="submit" name="submit">
            </td>
        </tr>
        </table>
    </form>
    <form method="POST">
    <?php
    if ($total1 != 0) {
    ?>
        <center>
            <h2>TABLE2 Records</h2>
        </center>
        <center>
            <table border="2" cellspacing="5" width="50%">
                <tr>
                    <th width="03%">Id</th>
                    <th width="10%">Sample form checkboxes</th>
                </tr>
        </center>
        <?php
        //$result = mysqli_fetch_assoc($data);
        //echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        while ($result1 = mysqli_fetch_assoc($data1)) {
        ?>
            <tr>
                <td><?php echo $result1['id2'] ?>
                    <input type="hidden" name="id2_<?php echo $result1['id2'] ?>" value="<?php echo $result1['id2'] ?>">
                </td>
                <td><?php echo $result1['text2'] ?>
                    <input type="checkbox" name="check[]" value="<?php echo $result1['text2'] ?>" />
                </td>
                <!-- <td>
         <input type="text" name="formtextdata_<//?php echo $result1['id2']?>"/>
         </td> -->
            </tr>
    <?php
        }
    } else {
        echo "No record found..";
    }
    ?>
    <tr>
        <td colspan="3" style="text-align: center;">
            <input type="submit" value="submit" name="submit1">
        </td>
    </tr>
    </table>
</form>
</body>

</html>
