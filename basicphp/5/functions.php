<?php
 // declare(strict_types = 1);
 // simple function

function nyFunction() {
  echo "This is a simple function";
}

nyFunction(); // call the function

echo "<hr>";



//Function with variable
function funWithVariable($name){
 echo "My name is $name";
}

funWithVariable('Ram');

echo "<hr>";


//Declare strict (Top)

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, '4 text');
