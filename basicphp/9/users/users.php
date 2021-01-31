<?php 

  class Users 
  {
    use usersTrait;
    use adminLogin;

    //Truncate tablename
    //Delete all datas and staring with 1

    //Only CRUD METHOD

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
    public function add($name,$email,$avatar,$password,$address,$contact,$status)
  	{
      $name = $this->db->clean($name);
      $email = $this->db->clean($email);
      $avatar = $this->db->clean($avatar);
      $password = $this->db->clean($password);
      $password = md5($password);
      $address = $this->db->clean($address);
      $contact = $this->db->clean($contact);
      $status = $this->db->clean($status);

  		$sql = "INSERT INTO `users` (`name`, `email`,`avatar`, `password`, `address`, `contact`, `status`) VALUES ('$name', '$email', '$avatar' , '$password', '$address','$contact', $status)";

  		return $this->db->runSql($sql);
  	}

    //Get data of specfifc id
    //Read
    public function edit($id){
      $sql = "SELECT * FROM `users` WHERE `id` = $id";
      return $this->db->runSql($sql);
    }

    //Update data
    public function update($id,$name,$address,$contact,$status){
       $sql = "UPDATE `users` 
                          SET 
                          -- name => value
                          `name`='$name',
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


