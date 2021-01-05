<?php

//Loops
//for loop
$arr = array("ram",'shyam','hari');

 //echo $arr[1];

$array = count($arr);
for($i=0; $i<=$array; $i++){
	echo "I = $i , User: " . $arr[$i] . " <hr>";
}

echo "<hr>";
$month = array('jan','feb','mar','april','may');
echo "Month <select>";
for ($i=0; $i < count($month); $i++) { 
	echo "<option>" . $month[$i] . " </option>";
}
echo "</select>";


echo "Day <select>";

for ($i=0; $i <= 31; $i++) { 
	if($i == 0){
		echo "<option> Select day </option>";
		continue;
	}
	echo "<option>" . $i . " </option>";
}
echo "</select>";

echo "<hr>";
// //Reverse for loop//Loops
// for($i=10; $i>=1; $i--){
// 	echo $i . "<hr>";
// }


//foreach loop
//Associative array
//Key => Value
$associative_array = array(
	'name' => 'hari',
	'address' => 'airport',
	'contact' => '9854154587'
);


//name = username
//address = sinamnagal
//contact = 985425247
foreach($associative_array as $key=>$value){
	echo "$key = $value <hr>";
}


echo "<hr>";
//Continue
echo "<h1>Continue</h1>";
for($i=0; $i<=10; $i++){
	if($i == 5){
		continue;
	}

	echo $i;
	echo "<br>";
}

//Break
echo "<h1>Break</h1>";
for($i=0; $i<=10; $i++){
	if($i == 5){
		break;
	}

	echo $i;
	echo "<br>";
}
