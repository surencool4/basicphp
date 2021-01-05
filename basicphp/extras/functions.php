<?php
//Always in top
declare(strict_types = 1);
//Simple functions
function myfunction(){
	echo "This is simple function";
}

myfunction();

echo "<hr>";


//variable declare
function variable_declare($text,$text1,$text2,$text3){
	echo "This is fucntion with $text $text1 $text2 $text3";
}

variable_declare('sometext','another', 'nepal', 'another text again');


echo "<hr>";

//Function with integer
function addition(int $first_value, int $second_value){
	return $first_value+$second_value;
}

echo addition(5,8);


