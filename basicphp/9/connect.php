<?php 
 //Connect
 class Connect
 {
 	public $host;
 	public $username;
 	public $password;
 	public $db;

 	public function __construct()
 	{
 		$this->host = "localhost";
 		$this->username = 'root';
 		$this->password = 'passwords';
 		$this->db = 'test';

 		$this->connect = mysqli_connect($this->host,$this->username,$this->password,$this->db) or die("Connection failed: " . mysqli_connect_error()); 
 	}

 	public function runSql($sql)
 	{
 		return mysqli_query($this->connect, $sql);
 	}

 	public function count($query)
 	{
 		return mysqli_num_rows($query);
 	}

 	function clean($data)
 	{
		return mysqli_real_escape_string($this->connect, $data);
	}
 }

 $Connect = new Connect;