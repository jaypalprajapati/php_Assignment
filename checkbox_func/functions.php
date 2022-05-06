<?php

class insterdata 
{
    
    public function insertdata($data,$tableB,$tableA)
    {
        require("../dbconnect.php");
        $data=$_POST['check'];
        $sql = "INSERT INTO $tableB ($tableB) VALUES ('" . $data . "')";
        //echo $sql; exit;

        $sql2 = "DELETE from $tableA where $tableA = '$data'";
        $data1 = mysqli_query($conn, $sql);
        echo "table data inserted" . "<br>";
        echo "<br>";
        $data2 = mysqli_query($conn, $sql2);
        echo "table data Deleted";
        
    }

    // public function getdata()
    // {
    //     require("dbconnect.php");
    //     $query = "SELECT * FROM checkbox1 ORDER BY checkbox1 ASC";
    //     $data = mysqli_query($conn, $query);
    //     $total = mysqli_num_rows($data);

    //     $query1 = "SELECT * FROM checkbox2 ORDER BY checkbox2 ASC";
    //     $data1 = mysqli_query($conn, $query1);
    //     $total1 = mysqli_num_rows($data1);

    // }
}


// $a= "hello";
// echo $a;

//InsertIntoTable($sql);
