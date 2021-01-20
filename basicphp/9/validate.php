<?php

class Validate

{

	public function isEmpty($data,$label){

		$date = trim($data);

		return (empty($data)) ? "<b>$label</b> can not be empty <br />" : NULL;

    }

	

	public function int($data, $label){

	  return (!is_numeric($data)) ? "<b>$label</b> must be a number <br />" : NULL;

	}

	  

  	public function confirm($str1,$str2,$label){

		return ($str1 != $str2) ? " <b>$label</b>  mismatched <br />" : NULL;

  	}

	public function charRange($data,$min_range,$max_range,$label){

		if(strlen($data)<$min_range){

			$error= "<b>$label</b> should be greater than $min_range character(s) <br />";

		}

		else if(strlen($data)>$max_range){

			$error= "<b>$label</b> should be less than $max_range character(s) <br />";

		}

		else{

				$error=null;

			}

		return $error;

    }


	public function email($data){

		return (!filter_var($data, FILTER_VALIDATE_EMAIL)) ? "Invalid <b>Email</b> id <br />" : NULL;

	}


	public  function imageUploadValidate($name){
			$ext=pathinfo($_FILES["$name"]['name'], PATHINFO_EXTENSION);
			$ext=strtolower($ext);
			$size=$_FILES["$name"]['size'];// bytes// 1 MB = 1000000 bytes
			//1mb = 1024
			//1gb = 1024mb
			$allowed=array('jpg', 'jpeg', 'gif', 'png', 'svg');
			$error = null;
			if(!empty($ext)):
				if(!in_array($ext, $allowed)):
					$error="Photo not supported !!!";		
				elseif($size>1024):
					$error="File size should be less then 1mb";
				endif;
			else:
				$error=" Choose any photo !!! ";
			endif;
			return $error;
		}



}

$Validate= new Validate;



