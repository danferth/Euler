<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/prism.js"></script>
<link rel="stylesheet" href="/assets/css/prism.css">
<a href="/index.php">Home</a>

<h2>problem 3</h2>
<h4>Largest prime factor</h4>
<hr>

<p>The prime factors of 13195 are 5, 7, 13 and 29.</p>

<p>What is the largest prime factor of the number 600851475143 ?</p>

<hr><!-- *****CODE***** -->

<code class="language-php"><pre class="line-numbers">
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
	$start_t = time();
	$half = ceil($test/2);
	//find multiples of $test 
	for ($check = 3; $check <= $half; $check = $check + 2) { 
		if (fmod($test , $check) == 0) {
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
</pre></code>