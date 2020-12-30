<?php

//for loop
for ($x = 0; $x <= 10; $x++) {
  echo $x;

  //break the loops
  // if($x == 3){
  // 	break;
  // }

  //continue (Continue without logic)
  // if($x == 3){
  // 	continue;
  // }

  //Logic
  echo "<hr>";
}

//foreach
//Key and value
$array = array(
	'name' => 'rahul',
	'address' => 'nepal',
	'contact' => '9851025468'
);

foreach ($array as $key=>$value) {
  echo $key . " - " . $value;
  echo "<hr>";
}



//while loop
$a = 1;
while($a <= 10){
	echo $a . "<hr>";

	$a++;
	
	// Increase the loop counter value by 2 for each iteration
	// $a+=2;
}







//Do while loop
//This example sets the $x variable to 6, then it runs the loop, and then the condition is checked:


$b = 10;

do {
  echo $b . "<hr>";
  $b++;
} while ($b <= 5);
