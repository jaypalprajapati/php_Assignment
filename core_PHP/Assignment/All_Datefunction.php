<?php

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

// Today is 2022/03/26
// Today is 2022.03.26
// Today is 2022-03-26
// Today is Saturday

echo "The time is " . date("h:i:sa");  //Today is SaturdayThe time is 09:55:10am
echo '<br>';

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");  //The time is 04:56:42am
echo '<br>';

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d); //Created date is 2014-08-12 11:14:54am
echo '<br>';

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);  //Created date is 2014-04-15 10:30:00pm
echo '<br>';

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>"; //2022-03-27 12:00:00am

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";  //2022-04-02 12:00:00am

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";  //2022-06-26 04:58:58am

$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");  //+272 days
echo '<br>';

echo date("l jS \of F Y h:i:s A") . "<br>"; //Saturday 26th of March 2022 05:03:00 AM

echo date(DATE_ATOM,mktime(0,0,0,10,3,1975)); //1975-10-03T00:00:00-04:00
?>
<!-- date function with formats such as (d, D, s, H, I, Y, y etc…)
date_default_time_zone
date_format
date_create
date_diff
strtotime
mktime
time -->
