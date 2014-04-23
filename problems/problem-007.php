<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/prism.js"></script>
<link rel="stylesheet" href="/assets/css/prism.css">
<a href="/index.php">Home</a>
<?php
/*
*************problem 7****************

By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?

*/
function prime_up_to($limit) {
	$result = array();
	array_push($result, 'start');
	for ($test=1; $test <= $limit; $test++) {
		if ($test == 2) {
			array_push($result, $test);
		}
		if ($test % 2 == 0) {
			continue;
		}
		$check = 3;
		while ($check <= ceil(sqrt($test))) {
			if ($test % $check == 0) {
				$check = $check + 2;
				continue;
			}
		array_push($result, $test);
		}
	}

	echo $result['10001'];
	echo '<pre>';
	print_r($result);
	echo '</pre>';

}//end

prime_up_to(20000);


?>

<!-- *********DISPLAY********** -->
<h2>problem 7</h2>
<h4>10001st prime</h4>
<hr>

<p>By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.</p>

<p>What is the 10 001st prime number?</p>

<hr><!-- *****CODE***** -->

<code class="language-php"><pre class="line-numbers">

</pre></code>
<hr><!-- *****OUTPUT***** -->
<?php 



 ?>