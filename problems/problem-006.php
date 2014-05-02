<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/prism.js"></script>
<link rel="stylesheet" href="/assets/css/prism.css">
<a href="/index.php">Home</a>

<h2>problem 6</h2>
<h4>Sum square difference</h4>
<hr>
<p>The sum of the squares of the first ten natural numbers is,</p>

<p>1<sup>2</sup> + 2<sup>2</sup> + ... + 10<sup>2</sup> = 385</p>
<p>The square of the sum of the first ten natural numbers is,</p>

<p>(1 + 2 + ... + 10)<sup>2</sup> = 55<sup>2</sup> = 3025</p>
<p>Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.</p>

<p>Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.</p>

<hr><!-- *****CODE***** -->

<code class="language-php"><pre class="line-numbers">
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
</pre></code>

