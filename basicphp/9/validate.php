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


	public function imageUploadValidate($name,$dir,$file_size){
			$path = $dir. "/". basename($_FILES[$name]['name']);
			$ext = strtolower(pathinfo($path,PATHINFO_EXTENSION));
			$size=$_FILES[$name]['size'];
			$allowed=array('jpg', 'jpeg', 'gif', 'png', 'svg');
			$error = NULL;
			$file_name = NULL;

			if(!empty($ext)){
				if(!in_array($ext, $allowed)):
					$error="Photo not supported !!!";		
				elseif($size>$file_size):
					//1mb = 1000000byte
					$file_size_mb =  $file_size/1000000;
					$error="File size should be less then $file_size MB";
				endif;
				
				if(empty($error)){
					//generate unique name
					//ram.jpg 5 user ram

					$file_name =  $dir ."/" . rand(). ".". $ext;
					move_uploaded_file($_FILES[$name]["tmp_name"], $file_name);
				}
			}
			return array($error,$file_name);
			//0 , 1
		}

}

$Validate= new Validate;



