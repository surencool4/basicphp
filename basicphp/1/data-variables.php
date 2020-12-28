
<?php

 //global variable
 $red_color = "Red";

 function colorChanged()
 {
 	global $red_color;
 	//Local Variable
 	$blue_color = "Blue";
 	echo $blue_color;
 }

 colorChanged();
 echo "<hr>";

 echo $blue_color;

 function numberIncreased() {
  static $x = 0;
  echo $x;
  $x++;
  echo "<br>";
}

numberIncreased();
numberIncreased();
numberIncreased();