<?php 

  class Users 
  {

    //Truncate tablename
    //Delete all datas and staring with 1

    public function __construct(){
      global $Connect;
      $this->db = $Connect;
    }
    
    public function index()
  	{
      //Default Asc
  		 $sql  = "SELECT * FROM `users` ORDER BY id DESC";

  		return $this->db->runSql($sql);
  	}

  	//Insert data
    public function add($name,$email,$address,$contact,$status)
  	{

  		$sql = "INSERT INTO `users` (`name`, `email`, `address`, `contact`, `status`) VALUES ('$name', '$email', '$address','$contact', $status)";

  		return $this->db->runSql($sql);
  	}

    //Get data of specfifc id
    //Read
    public function edit($id){
      $sql = "SELECT * FROM `users` WHERE `id` = $id";
      return $this->db->runSql($sql);
    }

    //Update data
    public function update($id,$name,$email,$address,$contact,$status){
       $sql = "UPDATE `users` 
                          SET 
                          -- name => value
                          `name`='$name',
                          `email`='$email',
                          `address`='$address',
                          `contact`='$contact',
                          `status`= $status 
                        WHERE id = $id";
       return $this->db->runSql($sql);
    }

//Delete data
    public function destroy($id)
    {
      $sql = "DELETE FROM `users` WHERE id = $id";
      return $this->db->runSql($sql);
    }

  }

  $Users = new Users;


