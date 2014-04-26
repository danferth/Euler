<?php
/*
*************problem 2****************

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

*/

function isPrime($test){
	$limit = ceil($test/2);
	$count = 0;
	//is $test less than first jprime number (2)
	if ($test < 2) {
		$count++;
	}
	//is $test greater than 2 AND even
	if ($test > 2 && $test % 2 == 0) {
		$count++;
	}
	//at this point we know that $test is NOT a negative number, not 1 and not even, could be two though.

	//now compair $test to all odd numbers between 3 and sqrt or $test
	for ($check = 3; $check <= $limit; $check = $check + 2) { 
		if ($test % $check == 0) {
			$count++;
		}
	}

	if ($count > 0) {
		echo 'NOT prime'.PHP_EOL;
	}else{
		echo 'prime'.PHP_EOL;
	}
}


function prime_factors($test){
	$start_t = time();
	$half = ceil($test/2);
	if ($test % 2 == 0) {
		echo '2'.PHP_EOL;
	}
	//find multiples of $test 
	for ($check = 3; $check <= $half; $check = $check + 2) { 
		if ($test % $check == 0) {
			if (isPrime($check)) {
				echo $check.PHP_EOL;
			}
		}
	}

	$end_t = time();
	$total_t = $end_t - $start_t;
	if ($total_t < 60) {
	echo 'time to complete: '.$total_t.' sec'.PHP_EOL;
	}
	if ($total_t > 61 && $total_t < 3599) {
		$new_total = $total_t/60;
		echo 'time to complete: '.$new_total.'min'.PHP_EOL;
	}
	if ($total_t > 61 && $total_t > 3599) {
		$minutes = $total_t/60;
		$hours = $minutes/60;
		echo 'time to complete: '.$hours.' hours'.PHP_EOL;
	}

}

prime_factors(600851475143);


?>