<?php  
    for($i=0;$i<=5;$i++)
    {  
            for($j=1;$j<=$i;$j++)
            {  
                    echo "* ";  
            }  
                    echo "<br>";  
    }  
?>

<?php

for($i=1;$i<=5;$i++)
{

    for($j=4;$j>=$i;$j--)
    {
        echo "&nbsp ";
    }

    for($k=1;$k<=$i;$k++)
    {
        echo "*";
    }

    echo "<br>";
}


?>

<?php

    $a=array("a"=>"Sahil" , "b"=>"Jay");  
             print_r($a);
    $b=array("c"=>"milind");
             echo "<br>";
    $c=array_merge($a,$b);
            print_r($c);

?>
