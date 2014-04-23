<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/prism.js"></script>
<link rel="stylesheet" href="/assets/css/prism.css">
<a href="/index.php">Home</a>
<?php
/*
*************problem 2****************

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

*/

function prime_factors($test){
	$result = array();
	$primes = array();
	//set_time_limit(0); to stop browser from timing out
	set_time_limit(0);
	//find multiples of $test 
	for ($check = 2; $check < $test ; $check++) { 
		if ($test % $check == 0) {
			array_push($result, $check);
		}
	}
	//check which array values are prime and put into new array
	foreach ($result as $key => $value) {
			
		$counter = 0;
		for ($check=1; $check <= $value; $check++) { 
			if ($value % $check == 0) {
				$counter++;
			}
		}
		if ($counter == 2) {
			array_push($primes, $value);
		}
	}
	//output array of prime multiples
	echo '<pre>';
	print_r($primes);
	echo '</pre>';
	//push output to the borwser
	flush();

}

prime_factors(600851475143);









?>

<!-- *********DISPLAY********** -->
<h2>problem 3</h2>
<h4>Largest prime factor</h4>
<hr>

<p>The prime factors of 13195 are 5, 7, 13 and 29.</p>

<p>What is the largest prime factor of the number 600851475143 ?</p>

<hr><!-- *****CODE***** -->

<code class="language-php"><pre class="line-numbers">

</pre></code>
<hr><!-- *****OUTPUT***** -->
<?php 



 ?>