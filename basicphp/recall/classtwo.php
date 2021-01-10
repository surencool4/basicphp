<?php 

 class Classtwo
 {
 	//Auto load while include the file
 	public function __construct()
 	{
 		global $Classone;
 		$this->classone =  $Classone;
 	}

 	public function text($text){
 		return $text;
 	}

 	public function addition_logic($value1,$value2)
 	{
 		return $this->classone->addition($value1,$value2);
 	}

 	public function subtract_logic($value1, $value2)
 	{
 		return $this->classone->subtract($value1, $value2);
 	}
 }

 $Classtwo = new Classtwo;