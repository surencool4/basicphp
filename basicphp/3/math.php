<?php 

 //Get Minimum Value
$get_min_value = min(100,25,15,10,500);
echo $get_min_value, "<hr>";

//Get Maximum Value
$get_max_value = max(100,25,15,10,500);
echo $get_max_value, "<hr>";

//Negative value turns to Absolute (positive)
$negative_to_posative = abs(-32.2);
echo $negative_to_posative, "<hr>";
//Check Result
$try = $negative_to_posative + 11;
echo $try, "<hr>";

//Return Square Root
$square_value = sqrt(81);
echo $square_value, "<hr>";

//Random
$rand_number = rand();
echo $rand_number , "<hr>";
$get_random = rand(10,1000);
echo $get_random, "<hr>";

//Round
$round = round(5.57);
echo $round, "<hr>";

