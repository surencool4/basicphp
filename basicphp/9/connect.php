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

 	public function retrieveFileFromUrl($folder,$file)
 	{
 		try {
	 		if(empty($folder) || empty($file)):
	 			$path = "dashboard.php";
	 		else:
	 			$path = "$folder/$file.php";
	 		endif;
	 	} catch (Exception $e) {
 			$path = "dashboard.php";
 		}
 		
 		return $path;
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



