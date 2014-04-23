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
	set_time_limit(0);
	//find multiples of $test 
	for ($check = 2; $check < $test ; $check++) { 
		if ($test % $check == 0) {
			array_push($result, $check);
		}
	}
	echo 'Done with factoring';
	flush();
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
	print_r($result);
	echo '</pre>';

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