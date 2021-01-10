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
 		//Self class-> public function call ($this->)
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

 	// public function fetch($query){
 	// 	return mysqli_fetch_array($query, MYSQLI_ASSOC);
 	// }

 
 }

 $Connect = new Connect;



