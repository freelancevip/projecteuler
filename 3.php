<?php
/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 *
 * **Partial solution from http://snipplr.com/view/49628/
 */
echo max( prime_factors( 600851475143 ) );

function prime_factors( $n ) {
	$pf = [];
	for ( $i = 2; $i <= $n / $i; $i ++ ) {
		while ( $n % $i == 0 ) {
			$pf[] = $i;
			$n    = $n / $i;
		}
	}
	if ( $n > 1 ) {
		$pf[] = $n;
	}

	return $pf;
}
