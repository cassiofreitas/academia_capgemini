#!/usr/bin/php
<?php
	// constraints
	// stairmin < stairsize < stairmax;
	// Possui no mínimo 6 caracteres.
	// Contém no mínimo 1 digito.
	// Contém no mínimo 1 letra em minúsculo.
	// Contém no mínimo 1 letra em maiúsculo.
	// Contém no mínimo 1 caractere especial. Os caracteres especiais são: !@#$%^&*()-+
	$password='';		//
	$i=0;			//
	$passminlen=6;		//
	$passlen=0;
	$passregex1='/[0-9]{1,}/';
	$passregex2='/[A-Z]{1,}/';
	$passregex3='/[a-z]{1,}/';
	$passregex4='/[!@#\$\%\^\&\*\(\)\-\+]{1,}/';

	/* some basic parameter sanitize */

	if ( isset($argv[1]) ){
		$password=(string)$argv[1];
		$passlen=strlen($password);

		if ( (strlen($password) < $passminlen ) )
		{
			die("\nMininum password length is [$passminlen]; you typed just [$passlen] chars; you need [". ($passminlen-$passlen) . "] more chars]\n");
		} else {
			if ( ! preg_match_all($passregex1,$password) ) {
				die("\nYou need at least one algarism\n");
			}
			if ( ! preg_match_all($passregex2,$password) ) {
				die("\nYou need at least one upper case letter\n");
			}
			if ( ! preg_match_all($passregex3,$password) ) {
				die("\nYou need at least one lower case letter\n");
			}
			if ( ! preg_match_all($passregex4,$password) ) {
				die("\nYou need at least one these special chars: !@#$%^&*()-+\n");
			}
		}
	} else {
		die("\nMininum password length is [$passminlen]\n");	
	}
?>

