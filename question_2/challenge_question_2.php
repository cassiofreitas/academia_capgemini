#!/usr/bin/php
<?php
	$password='Ya';		//to test, type the password here
	$i=0;
	$passminlen=6;
	$passlen=strlen($password);

	if ($passlen < $passminlen ) {
		print ($passminlen-$passlen);
	}
?>

