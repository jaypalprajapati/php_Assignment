<?php
    $j=array("a"=>"Sahil" , array("b"=>"Jaypal"));  
    echo "<pre>";         
    print_r($j);
    echo "</pre>";
    $b=array("c"=>"milind");
             echo "<br>";
    $c=array_merge($j[0],$b);
    

    foreach($j as $key=>$value)
    {
        if(is_array($value))
        {
            $j[$key] = array_merge($value,$b);
        }
    }

    echo "<pre>";         
    print_r($j);
    echo "</pre>";

?>
