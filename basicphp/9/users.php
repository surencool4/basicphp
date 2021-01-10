<?php 

  class Users 
  {

    public function __construct(){
      global $Connect;
      $this->db = $Connect;
    }
    
    public function index()
  	{
  		$sql  = "SELECT * FROM `users` ";
  		return $this->db->runSql($sql);
  	}

  	public function add($name,$email,$address,$contact,$status)
  	{

  		$sql = "INSERT INTO `users` (`name`, `email`, `address`, `contact`, `status`) VALUES ('$name', '$email', '$address','$contact', $status)";

  		return $this->db->runSql($sql);
  	}

    public function edit($id){
      $sql = "SELECT * FROM `users` WHERE `id` = $id";
      return $this->db->runSql($sql);
    }

    public function update($id,$name,$email,$address,$contact,$status){
       $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`address`='$address',`contact`='$contact',`status`= $status WHERE id = $id";
       return $this->db->runSql($sql);
    }

  }

  $Users = new Users;


