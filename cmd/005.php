<?php
include dirname('../').'./assets/class/time.php';
/*
*************problem 5****************

2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

*/

function smallest_multiple(){
	$time = new time();
	$test = 20;
	$answer = '';
	$count = 0;

	while ($count < 20) {
		for ($i=1; $i <= 20; $i++) { 
			if (fmod($test, $i) == 0) {
				$count++;
			}
		}
		if ($count < 20) {
			$count = 0;
			$test = $test + 2;
		}elseif ($count == 20){
			$answer = $test;
		}
	}
	echo $answer . PHP_EOL;
	$time->end();
}

smallest_multiple();
 ?>