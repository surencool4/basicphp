<?php 
 //Connect
 class Connect
 {
 	public $host;
 	public $username;
 	public $password;
 	public $db;

 	//Autoload 
 	public function __construct()
 	{
 		$this->host = "localhost";
 		$this->username = 'root';
 		$this->password = 'password';
 		$this->db = 'test';

 		$this->connect = mysqli_connect($this->host,$this->username,$this->password,$this->db) or die("Connection failed: "); 
 	}

 	public function runSql($sql)
 	{
 		return mysqli_query($this->connect, $sql);
 	}

 	public function retrieveFileFromUrl($filename)
 	{
 		try {
	 		if(empty($filename)):
	 			$inc = "home.php";
	 		else:
	 			$inc = "$filename.php";
	 		endif;
	 	} catch (Exception $e) {
 			$inc = "home.php";
 		}
 		
 		return $inc;
 	}

 	public function fetch($query){
 		return mysqli_fetch_array($query, MYSQLI_ASSOC);
 	}

 	public function countRows($sql)
 	{
 		return mysqli_num_rows($sql);
 	}

	//sql injection
	public function clean($data)
	{
		return mysqli_real_escape_string($this->connect,$data);
	}
 
 }

 $Connect = new Connect;



