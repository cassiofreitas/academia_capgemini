#!/usr/bin/php
<?php
	/* some basic parameter sanitize */
	$i=0;
	$j=0;
	$chars=0;
	$charlength=0;
	$pairs=array();
	$anagramas=0;

	if ( isset($argv[1]) ){
		$sourcestr=trim((string)$argv[1]);
	} else {
		die("\nno parameter\n");
	}

	$charlength=strlen($sourcestr);
	$chars=str_split($sourcestr);
	$i=0;
	$j=0;
	$z=0;

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
	print_r($pairs);

	foreach( $pairs as $values ) {
		$item1=substr($values,0,1);
		$item2=substr($values,2);
		$separator=substr($values,1,1);
		if ( $separator == ',' ) {
			print("[$item1,$item2] => [" . $chars[$item1] . ',' . $chars[$item2] . "]\n");
		} else {
			$y=(int)$item1;
			$k=(int)$item2;
			$rangeitem='';
			print("[$item1,$item2] => ["); 
			for( $y=$y; $y<=$k; $y++) {
				$rangeitem=$rangeitem . $chars[$y] . ',';
			}
			$rangeitem=substr($rangeitem,0,(strlen($rangeitem)-1));
			print("$rangeitem]\n");
		}
	}
	print("\n");

	print($anagramas);
?>

