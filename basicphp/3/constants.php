<?php 


 /*
	*Syntax
	*define(name, value, case-insensitive)

		name: Specifies the name of the constant
		value: Specifies the value of the constant
		case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
 */

//Example (Case sensative)
define('nepal', 'South Asian Country');
echo nepal;
echo "<hr>";

//Case-insensitive
define('usa', 'United States of America',true);
echo UsA;
echo "<hr>";

//Arrays
define('cities', [
				'Kathmandu',
				'Pokhara',
				'Janakpur'
	], true);

echo Cities[1];
echo "<hr>";

//Constants are automatically global 
function grab_nepal_constants(){
	echo nepal;
}
//Function Output 
grab_nepal_constants();