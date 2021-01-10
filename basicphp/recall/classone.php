<?php 

 class Classone
 {
 	public function something()
 	{
 		return "Something";
 	}

 	public function addition($value1 , $value2)
 	{
 		return ($value1 + $value2);
 	}

 	public function subtract($value1, $value2)
 	{
		return ($value1 - $value2);
 	}

 }

 $Classone = new Classone;