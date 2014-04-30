<?php 

function isPrime($test){
	$start = time();
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
			echo 'check '.$check.PHP_EOL;
			$count++;
		}
	}




	if ($count > 0) {
		echo 'NOT prime'.PHP_EOL;
	}else{
		echo 'prime'.PHP_EOL;
	}
	echo 'test = '.$test.PHP_EOL;
	echo 'limit = '.$limit.PHP_EOL;
	echo 'count = '.$count.PHP_EOL;



	$end = time();
	$total = $end - $start;
	if ($total < 60) {
	echo 'time to complete: '.$total.' sec'.PHP_EOL;
	}
	if ($total > 61 && $total < 3599) {
		$new_total = $total/60;
		echo 'time to complete: '.$new_total.'min'.PHP_EOL;
	}
	if ($total > 61 && $total > 3599) {
		$minutes = $total/60;
		$hours = $minutes/60;
		echo 'time to complete: '.$hours.' hours'.PHP_EOL;
	}
}

isPrime(4294967297);
//4000000000
//4294967297



 ?>
