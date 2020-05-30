<?php

$date1 ='2018-09-15';
$date2 = '2018-10-15';
$days = (strtotime($date1) - strtotime($date2)) / (60 * 60 * 24);
echo $days;

?>