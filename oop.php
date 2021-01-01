<?php

//OOP

class Post{

	public $title;
	public $description;
	public $status;
	public $created_at;

	 public function __construct ($title,$description,$status,$created_at){

	 	$this->title = $title;
	 	$this->description = $description;
	 	$this->status = $status;
	 	$this->created_at = $created_at;

	 }

	 public function clean(){
	 	$title = mysqli_real_skip_string($this->title);
	 }

	 public function add(){

	 }

	 public function edit(){

	 }

	 public function view(){

	 }

	 public function destroy(){

	 }
}