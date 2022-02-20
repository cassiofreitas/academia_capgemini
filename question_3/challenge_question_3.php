#!/usr/bin/php
<?php
	$i=0;
	$j=0;
	$z=0;
	$sourcestr='ifailuhkqq';
	$chars=0;
	$charlength=0;
	$pairs=array();
	$anagramas=0;
	$charlength=strlen($sourcestr);
	$chars=str_split($sourcestr);

	while( $i<$charlength ) {
		$j=$i+1;
		while($j<$charlength) {
			if ( $chars[$i] == $chars[$j] ) {
				$pairs[$z]=$i . ',' . $j;
				$anagramas++;
				if ( ($j-$i) > 1 ) {
					$z++;
					$pairs[$z]=$i . '-' . ($j-1);
					$z++;
					$pairs[$z]=($i+1) . '-' . $j;
					$anagramas++;
				}
				$z++;
			}
			$j++;
		}
		$i++;
	}
	print($anagramas);
?>

