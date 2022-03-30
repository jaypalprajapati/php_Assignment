<!DOCTYPE html>
<html>
<body>
<h1> Sort Array in Ascending Order </h1>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo "Sort Array in Ascending Order ... " . $cars[$x] . " " ;
  echo "<br>";
}
?>
<h1> Sort Array in Descending Order </h1>
<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo "Sort Array in Descending Order..." . $cars[$x] . " ";
  echo "<br>";
}
?>
<h1> Rsort </h1>
<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo "Rsort..." . $numbers[$x] . "";
  echo "<br>";
}
?>
<h1> Asort </h1>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<h1> Ksort </h1>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<h1> ARsort </h1>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<h1> KRsort </h1>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>
