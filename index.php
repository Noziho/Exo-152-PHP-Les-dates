<?php

// Premiere ligne
$today = date("D");
echo $today."<br>";


$date = date("Y.m.d", mktime(0,0,0,12,10,2018));
echo $date ."<br>";

$hour = date('h:i:s' , mktime(11, 35, 07));
echo $hour;






