<?php

 /////////Superglobals//////////
	
	//$GLOBALS
	echo '<h1>$GLOBALS</h1>';
	$five = 5;
	$six = 6;

	function FunctionName()
	{
		// $GLOBALS['eleven'] = $GLOBALS['five'] + $GLOBALS['six'];
		global $five, $six;
		$GLOBALS['eleven'] = $five + $six;

	}
	FunctionName();

	echo $eleven;
	echo "<hr>";

	echo '<h1>$_SERVER</h1>';
	//$_SERVER
	//Location
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	//Server
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	//Host
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	//find base url
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	//find browser
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	//file path
	echo $_SERVER['SCRIPT_NAME'];
	echo "<hr>";


//$_REQUEST

	//SELF
	//Other
echo '<h1>$_REQUEST</h1>';

?>
	<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	  Name: <input type="text" name="name">
	  <input type="submit">
	</form>

	<?php
	 if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_REQUEST['name'];
		if(empty($name)){
			echo "<b style='color:red;'>Name can't empty</b>";
		}
		else{
			echo $name;
		}
	}

