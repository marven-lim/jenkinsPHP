<?php

/* Define username and password */
$Username = 'isotope';
$Password = '1s0t0p3';

function PasswordIsValid($username, $password){
	if ($username===$Username && $password===$Password){
		return true;
	}
	else{
		return false;
	}
}

?>
