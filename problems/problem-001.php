<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/assets/js/prism.js"></script>
<link rel="stylesheet" href="/assets/css/prism.css">
<a href="/index.php">Home</a>

<h2>problem 1</h2>
<h4>Multiples of 3 and 5</h4>
<hr>

<p>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.</p>

<p>Find the sum of all the multiples of 3 or 5 below 1000.</p>
<hr><!-- *****CODE***** -->

<code class="language-php"><pre class="line-numbers">
function threeFive(){
	$base = 0;
	for ($i = 1; $i < 1000; $i++){
		if($i%3 === 0 || $i%5 === 0){
			$base = $base + $i;
		}
	}
	echo $base;
}

threeFive();
</pre></code>