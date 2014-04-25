<?php
/*
*************problem 2****************

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

*/

function isPrime($test){
	$sr = ceil(sqrt($test));
	for ($check=3; $check <= $sr ; $check = $check + 2) { 
		if ($test % $check == 0) {
			return false;
		}
	}
	return true;
}


function prime_factors($test){
	$start_t = time();
	$half = ceil($test/2);
	//find multiples of $test 
	for ($check = 2; $check <= $half; $check++) { 
		if ($test % $check == 0) {
		//	if (isPrime($check)) {
				echo $check.PHP_EOL;
		//	}
		}
	}

	$end_t = time();
	$total_t = $end_t - $start_t;
	echo 'time to complete: '.$total_t.'sec'.PHP_EOL;

}

prime_factors(600851475143);


?>