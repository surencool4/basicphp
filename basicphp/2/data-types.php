<?php

//Types of Datatypes

//String
$greetings = "Hello there";
var_dump($greetings);

echo "<hr>";

//Integer
$number = 55;
var_dump($number);

echo "<hr>";

//Float
$float_number = 55.55;
var_dump(($float_number));

echo "<hr>";

//Boolean
$boolean_type = true;
var_dump($boolean_type);

echo "<hr>";

//Array
$array = array('ktm','pkr','brt','jnk');
var_dump($array);

echo "<hr>";

//Null 
$x = null;
var_dump($x);

echo "<hr>";

//Object
Class Dev{

	public function team($name, $postion, $salary){

		return "Hello! " . $name . " Your Position: " . $postion . " Monthly salary: " . $salary;
			
	}
}

$dev = new Dev;
var_dump($dev->team('Ram','Senior', '35000'));


