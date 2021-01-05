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

 		//Syntax
 		//mysqli_connect(host,username,pwd,db);
 		//for connect check
 		//or die
 		$this->connect = mysqli_connect($this->host,$this->username,$this->password,$this->db) or die("Connection failed: "); 
 	}




 	public function runSql($sql)
 	{
 		return mysqli_query($this->connect, $sql);
 	}

 
 }

 $Connect = new Connect;



