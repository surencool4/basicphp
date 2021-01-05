<?php

//Switchcase

$country = "nepal";

switch ($country) {
	case 'india':
		echo "This is not your country";
		break;
	case 'nepal';
		echo "Your country is nepal";
		break;
	case 'london';
		echo "This is not your country";
		break;
	
	default:
		echo "Try again";
		break;
}