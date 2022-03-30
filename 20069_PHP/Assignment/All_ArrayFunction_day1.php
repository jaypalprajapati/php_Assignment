<!DOCTYPE html>
<html>
<body>

<h1> array_flip </h1>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
?>

<h1> array_unique </h1>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
?>

<h1> array_values </h1>
<?php
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
?>

<h1> array_pop </h1>
<?php
$a=array("red","green","blue");
array_pop($a);
print_r($a);
?>

<h1> array_pop </h1>
<?php
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?>

<h1> count </h1>
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>

<h1> List </h1>
<?php
$my_array = array("Dog","Cat","Horse");

list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";
?>
</body>
</html>