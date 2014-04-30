<?php
include dirname().'../assets/class/time.php';
/*
*************problem 3****************

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
		if (fmod($test , $check) == 0) {
			$count++;
		}
	}

	if ($count > 0) {
		return false;
	}else{
		return true;
	}
}


function prime_factors($test){
	$time = new time();
	$half = ceil($test/2);
	//find multiples of $test 
	for ($check = 3; $check <= $half; $check = $check + 2) { 
		if (fmod($test , $check) == 0) {
			if (isPrime($check)) {
				echo $check.PHP_EOL;
			}
		}
	}
	$time->end();
}

prime_factors(600851475143);


?>