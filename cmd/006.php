<?php
include dirname('../').'./assets/class/time.php';
/*
*************problem 6****************

The sum of the squares of the first ten natural numbers is,

1² + 2² + ... + 10² = 385

The square of the sum of the first ten natural numbers is,

(1 + 2 + ... + 10)² = 55² = 3025

Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

*/
		
function problem_6($lo, $hi){
	$time = new time();
	
	//sum of squares
	$sumOsq = 0;
		for ($i=$lo; $i <= $hi; $i++) { 
			$add = pow($i, 2);
			$sumOsq = $sumOsq + $add;
		}

	//square of sums
	$sqOsum = 0;
		for ($i=$lo; $i <= $hi; $i++) { 
			$sqOsum = $sqOsum + $i;
		}
		$sqOsum = pow($sqOsum, 2);	


$result = $sqOsum - $sumOsq;

echo $result . PHP_EOL; 

	$time->end();

}

problem_6(1,100);
 ?>