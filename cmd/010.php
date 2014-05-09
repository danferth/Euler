<?php
include dirname('../').'./assets/class/time.php';
/*
*************problem 10****************

The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

Find the sum of all the primes below two million.

*/

function problem_10($limit){
	$time = new time();
	$result = array();
	$answer = 0;
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
					if (fmod($test , $check) == 0) {
						$count++;
					}
				}
				if ($count == 0) {
				array_push($result, $test);
				}
			}
		}
	}

	foreach ($result as $key => $value) {
		$answer = $answer + $value;
	}
	echo $answer . PHP_EOL;
	$time->end();
}

problem_10(2000000);

?>