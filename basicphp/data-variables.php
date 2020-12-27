
<?php

 //global variable
 $red_color = "Red";

 function colorChanged()
 {
 	global $red_color;
 	//Local Variable
 	static $blue_color = "Blue";
 }

 colorChanged();

 echo $blue_color;