<?php 

	//Superglobals


	//$GLOBALS

	$five  = 5;
	$six = 6;

	function FunctionName(){
		global $five,$six;

		$GLOBALS['eleven'] = $five + $six;
	}

	FunctionName();
	//Print everywhere
	echo $eleven;

	//$_SERVER
	echo "<hr>";

	echo '<h1>$_SERVER</h1>';
	//$_SERVER
	//Location
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	// //Server
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	// //Host
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
	// echo "<hr>";

echo "<hr>";




	?>




	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" >
		<input type="submit" >
	</form>

<?php
	if($_SERVER['REQUEST_METHOD']  = 'POST'){
		$name  = $_POST['name'];

		// if(empty($name)){
		// 	echo "<b style='color:red'>Name filed is required</b>";
		// }

		// else{
		// 	echo $name;
		// }

		echo (empty($name)) ? "<b style='color:red'>Name filed is required</b>" : $name;
	}



	





