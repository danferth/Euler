<?php
/*
*************problem 2****************

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

*/

function prime_factors($test){
	$result = array();
	$primes = array();
	$half = $test/2;
	//find multiples of $test 
	for ($check = 2; $check <= $half; $check++) { 
		if ($test % $check == 0) {
			array_push($result, $check);
		}
	}

	//check which array values are prime and put into new array
	foreach ($result as $key => $value) {
			
		//if not 1 then continue
		if ($value != 1) {	
			//2 is the only even prime number
			if ($value == 2) {
				array_push($primes, $value);
				continue;
			}
			if ($value == 3) {
				array_push($primes, $value);
				continue;
			}
			if ($value == 5) {
				array_push($primes, $value);
				continue;
			}
			if ($value % 2 != 0) {
				$count = 0;
				for ($check = 3; $check <= ceil(sqrt($value)); $check = $check + 2) { 
					if ($value % $check == 0) {
						$count++;
					}
				}
				if ($count == 0) {
				array_push($primes, $value);
				}
			}
		}
	}
	//output array of prime multiples
	echo '<pre>';
	echo $primes;
	echo '</pre>';

}

prime_factors(600851475143);



?>