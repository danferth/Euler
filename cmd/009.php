<?php
include dirname('../').'./assets/class/time.php';
/*
*************problem 9****************

A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a² + b² = c²

For example, 3² + 4² = 9 + 16 = 25 = 5².

There exists exactly one Pythagorean triplet for which a + b + c = 1000.

Find the product abc.

*/
		
function problem_9(){
	$time = new time();
	$limit = 1000;

	for ($a=1; $a < $limit; $a++) { 
		for ($b=1; $b < $limit; $b++) {
			$c2 = pow($a, 2) + pow($b, 2);
			$c = sqrt($c2);
			if ($a < $b && $b < $c) {
				if ($a + $b + $c == 1000) {
					echo $a . ' ' . $b . ' ' . $c . PHP_EOL;
					echo pow($a,2) . ' + ' . pow($b,2) . ' = ' . pow($c,2) . PHP_EOL;
					echo $a * $b * $c . PHP_EOL;
				}
			}
		}
	}


	$time->end();

}

problem_9();
 ?>