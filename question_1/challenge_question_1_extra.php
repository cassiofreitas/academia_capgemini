#!/usr/bin/php
<?php
	// constraints
	// stairmin < stairsize < stairmax;
	$stairsize=0;		//reads command line parameter with stair size (steps)
	$i=0;				//our iteration index
	$stairchar='*';		//char used to draw the stair
	$stairfillchar=' ';	//char used to fill left spaces to each step
	$stairs='*';		//the stair step itself
	$stairmin=1;		//minimum limit to draw a viable stair
	$stairmax=10;		//maximum value to draw our stair; can be bigger if necessary
 
	/* some basic parameter sanitize */

	if ( isset($argv[1]) ){
		$stairsize=(int)$argv[1];
		if ( $stairsize < $stairmin || $stairsize > $stairmax)
		{
			die("\nstair size [$stairsize] must be >= [$stairmin] and <= [$stairmax]\n");
		}
	} else {
		die("\nstair size [$stairsize] must be >= [$stairmin] and <= [$stairmax]\n");			
	}

	/*lets draw our stair */

	for ($i=$stairsize-1; $i>=0; $i--)
	{
		print( str_pad($stairs,$stairsize,$stairfillchar,STR_PAD_LEFT) . "\n");
		$stairs=trim($stairs) . $stairchar;
	}
?>

