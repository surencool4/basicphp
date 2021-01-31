<?php 
//Oop inheritance

 // you can only extend one class and overload its method, but you can use many traits but you can't overload methods from traits.

class myFunction extends Connect
{
	
	public function test()
	{
		 $sql  = "SELECT * FROM `users` ORDER BY id DESC";
  		 return $this->runSql($sql);
	}
}

$myFunction = new myfunction;