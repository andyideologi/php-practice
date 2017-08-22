<?php
// CALCULATE THE ANGLE BETWEEN MINUTE HAND AND HOUR HAND
ini_set('display_errors', 1);
$h=2;
$m=60;
$angle;
calcAngle($h,$m);
function calcAngle($h,$m)
{
    // validate the input
    if ($h < 0 || $m < 0 || $h >12 || $m > 60)
         { echo "Wrong Input!"; die; } 
 
    if ($h == 12) 
        $h = 0;
    if ($m == 60) 
        $m = 0;
 
    // // Calculate the angles moved by hour and minute hands
    // // with reference to 12:00
    $hour_angle = 0.5 * ($h*60 + $m);
    $minute_angle = 6 * $m;
 
    // // Find the difference between two angles
    $angle = abs($hour_angle - $minute_angle);
 
    // Return the smaller angle of two possible angles
     $angle = min( (360-$angle),$angle);
     
     
         echo  $angle;

         
} 

?>