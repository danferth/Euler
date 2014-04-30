<?php
include dirname('../').'./assets/class/time.php';
/*
*************problem 7****************

By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?

*/

function prime_up_to($limit){
	$time = new time();
	$result = array();
	//add start to [0] so first prime number (2) is [1] in the array
	array_push($result, 'start');
	for ($test=1; $test <= $limit; $test++) { 
		//if not 1 then continue
		if ($test != 1) {	
			//2 is the only even prime number
			if ($test == 2) {
				array_push($result, $test);
				continue;
			}
			if ($test == 3) {
				array_push($result, $test);
				continue;
			}
			if ($test == 5) {
				array_push($result, $test);
				continue;
			}
			if ($test % 2 != 0) {
				$count = 0;
				for ($check = 3; $check <= ceil(sqrt($test)); $check = $check + 2) { 
					if ($test % $check == 0) {
						$count++;
					}
				}
				if ($count == 0) {
				array_push($result, $test);
				}
			}
		}
	}
	//output 10,001st prime number
	echo $result['10001'].PHP_EOL;
	$time->end();
}


prime_up_to(150000);

 ?>